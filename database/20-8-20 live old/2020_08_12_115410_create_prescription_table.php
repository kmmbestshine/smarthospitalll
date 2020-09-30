<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrescriptionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prescription', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('doctor_id')->unsigned();
            $table->foreign('doctor_id')->references('id')->on('users');//->onDelete('cascade');
            $table->bigInteger('patient_id')->unsigned();
            $table->foreign('patient_id')->references('id')->on('patients');//->onDelete('cascade');
            $table->bigInteger('appointment_id')->unsigned();
            $table->foreign('appointment_id')->references('id')->on('patients');//->onDelete('cascade');
            $table->char('medicine_issued',3)->default("NO");
            $table->json('bp')->nullable();
            $table->json('cholestrol')->nullable();
            $table->json('blood_sugar')->nullable();
            $table->longText('diagnosis')->nullable();
            $table->json('medicines')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('prescription');
    }
}
