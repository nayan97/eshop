<?php

namespace App\Http\Controllers\Admin;

use App\Models\Checkout;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Admin\OrderController;

class OrderController extends Controller
{
public function index()
{
    $order=Checkout::all();
    return view('admin.user.orders.index', compact('order'));
}
}
