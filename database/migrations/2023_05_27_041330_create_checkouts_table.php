<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('checkouts', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('cell') -> nullable();
            $table->string('address') -> nullable();
            $table->string('user_id') -> nullable();
            
            $table->string('quantity') -> nullable();
            $table->string('price') -> nullable();
            $table->string('product_id') -> nullable();
            $table->text('image') -> nullable();
            $table->string('payment_status') -> nullable();
            $table->string('delivery_status') -> nullable();
            
            $table->boolean('status') -> default(true);
            $table->boolean('trash') -> default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('checkouts');
    }
};
