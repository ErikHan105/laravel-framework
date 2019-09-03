<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompanyinfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companyinfo', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->text('who');
            $table->text('profession');
            $table->text('service');
            $table->text('qualification');
            $table->text('course');
            $table->text('quality');
            $table->string('address');
            $table->string('zipcode');
            $table->string('tel_america');
            $table->string('email_america');
            $table->string('tel_asia');
            $table->string('email_asia');
            $table->string('bank');
            $table->string('bank_address');
            $table->string('beneficiary');
            $table->string('swiftcode');
            $table->string('account');
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
        Schema::dropIfExists('companyinfo');
    }
}
