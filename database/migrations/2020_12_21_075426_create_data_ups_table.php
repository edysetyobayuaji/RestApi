<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDataUpsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_ups', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('charge');
            $table->integer('load');
            $table->integer('frekuensi');
            $table->text('runtime');            
            $table->decimal('VinR');
            $table->decimal('VinS');
            $table->decimal('VinT');
            $table->decimal('IinR');
            $table->decimal('IinS');
            $table->decimal('IinT');
            $table->decimal('VoutR');
            $table->decimal('VoutS');
            $table->decimal('VoutT');
            $table->decimal('IoutR');
            $table->decimal('IoutS');
            $table->decimal('IoutT');
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
        Schema::dropIfExists('data_ups');
    }
}
