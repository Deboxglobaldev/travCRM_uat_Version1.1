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
        Schema::create(_FLEET_MASTER_, function (Blueprint $table) {
            $table->id();
            $table->string('Name');
            $table->string('VehicleType');
            $table->string('Parts');
            $table->string('EngineNumber');
            $table->string('Vehicle');
            $table->string('Insurance');
            $table->string('Colour');
            $table->string('PolicyNumber');
            $table->string('FuelType');
            $table->string('IssueDate');
            $table->string('SeatingCapacity');
            $table->string('DueDate');
            $table->string('AssignedDriver');
            $table->string('PremiumAmount');
            $table->string('CategoryVehicleGroup');
            $table->string('CoverAmount');
            $table->string('RegistrationNumber');
            $table->string('RTO');
            $table->string('RegisteredOwnerName');
            $table->string('TaxEfficiency');
            $table->string('PollutionPermitsExpiry');
            $table->string('ExpiryDate');
            $table->string('RegistrationDate');
            $table->string('Permits');
            $table->string('Image');
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
        Schema::dropIfExists('fleet_master');
    }
};
