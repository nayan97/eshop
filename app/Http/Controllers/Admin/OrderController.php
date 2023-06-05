<?php

namespace App\Http\Controllers\Admin;

use App\Models\Checkout;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Admin\OrderController;

use Notification;
use App\Notifications\SendEmailNotification;

class OrderController extends Controller
{
public function index()
{
    $order=Checkout::all();
    return view('admin.user.orders.index', compact('order'));
}

//delivered option
public function delivered($id)
{
    $order=Checkout::find($id);
    $order->delivery_status="Delivered";
    $order->payment_status="Paid";

    $order->save();

    return redirect()->back();
}

// email form
public function sendemail($id)
{     $order=Checkout::find($id);
    return view('admin.user.orders.emailinfo', compact('order'));
}

// send email
public function emailnote(Request $request, $id)
{
    $order=Checkout::find($id);

    $details = [
        'greeting' =>$request->greeting,
        'heading'  =>$request->heading,
        'body'     =>$request->body,
        'button'   =>$request->button,
        'url'      =>$request->url,
        'footer'   =>$request->footer,
    ];

    Notification::send($order, new SendEmailNotification($details));
    return redirect()->back();
}

}
