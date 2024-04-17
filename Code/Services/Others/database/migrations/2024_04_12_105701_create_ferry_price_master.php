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
        Schema::create(_FERRY_PRICE_MASTER_, function (Blueprint $table) {
            $table->id();
            $table->string('Name');
            $table->string('FromDestination');
            $table->string('ToDestination');
            $table->string('ArrivalTime');
            $table->string('DepartureTime');
            $table->string('Detail');
            $table->integer('Status')->default(0);
            $table->integer('AddedBy')->default(0);
            $table->integer('UpdatedBy')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ferry_price_master');
    }
};
