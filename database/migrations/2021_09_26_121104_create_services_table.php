<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('logo_hu');
            $table->string('logo_en');
            $table->string('logo_fr');
            $table->string('logo_it');
            $table->string('title_hu');
            $table->string('title_en');
            $table->string('title_fr');
            $table->string('title_it');
            $table->text('short_desc_hu');
            $table->text('short_desc_en');
            $table->text('short_desc_fr');
            $table->text('short_desc_it');

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
        Schema::dropIfExists('services');
    }
}
