<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use DB;

class CreateSettingsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('app_name', 100);
            $table->string('app_title', 100);
            $table->string('address', 100);
            $table->string('phone', 50);
            $table->string('app_email', 50);
            $table->text('app_logo');
            $table->timestamps();
            DB::table('users')->insert(
                array(
                    'app_name' => 'Passport management system',
                    'app_title' => 'Passport management',
                    'address' => 'Dhaka, Bangladesh',
                    'phone' => '+8801829282161',
                    'app_email' => 'sazzadulislam6@gmail.com',
                    'app_logo' => 'logo/none.jpg'
                )
            );
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('settings');
    }
}
