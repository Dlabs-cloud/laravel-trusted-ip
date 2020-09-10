<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrustedIpAddressTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trusted_ip_address', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('value');
//            $table->tinyInteger('active_status_id')->unsigned()->default(1);
//            $table->foreign('active_status_id')->references('id')->on('active_status');
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
        Schema::dropIfExists('trusted_ip_address');
    }
}
