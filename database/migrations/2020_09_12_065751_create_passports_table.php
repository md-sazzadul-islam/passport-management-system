<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePassportsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('passports', function (Blueprint $table) {
            $table->increments('id');
            $table->string('passport_holder', 100);
            $table->string('holder_father_name', 100)->nullable();
            $table->string('passport_no', 50);
            $table->integer('position')->nullable()->unsigned();
            $table->date('issue_date')->nullable();
            $table->date('expiry_date')->nullable();
            $table->date('date_of_birth')->nullable();
            $table->string('mobile_no', 25);
            $table->integer('selection_status')->nullable()->unsigned();
            $table->date('medical_issue_date')->nullable();
            $table->integer('medical_status')->nullable()->unsigned();
            $table->integer('medical_report')->nullable()->unsigned();
            $table->integer('reference')->nullable()->unsigned();
            $table->string('company_name', 100)->nullable();
            $table->integer('agent')->nullable()->unsigned();
            $table->text('remarks')->nullable();
            $table->timestamps();
            $table->foreign('position')->references('id')->on('possitions');
            $table->foreign('selection_status')->references('id')->on('selection_statuses');
            $table->foreign('medical_status')->references('id')->on('medical_statuses');
            $table->foreign('medical_report')->references('id')->on('medical_reports');
            $table->foreign('reference')->references('id')->on('references');
            $table->foreign('agent')->references('id')->on('agents');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('passports');
    }
}
