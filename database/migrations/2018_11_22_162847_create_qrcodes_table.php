<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQrcodesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('qrcodes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('website')->nullable();
            $table->string('product_name');
            $table->string('product_url')->nullable();
            $table->string('company_name');
            $table->string('callback_url');
            $table->string('qrcode_path')->nullable(); // path to QRCode image was save
            $table->tinyInteger('status');
            $table->float('amount', 10, 4);
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
        Schema::dropIfExists('qrcodes');
    }
}