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
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->integer('productid');
            $table->string('productname');
            $table->integer('Qty');
            $table->float('price');
            $table->float('Tax');
            $table->float('Total');
            $table->float('Discount');
            $table->float('Net');
            $table->integer('Userid');
            $table->string('username');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoices');
    }
};
