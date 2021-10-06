<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTitleLanguageToAbout extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('home_abouts', function (Blueprint $table) {
            $table->string('title_en');
            $table->string('title_fr');
            $table->string('title_it');
            $table->text('short_desc_en');
            $table->text('short_desc_fr');
            $table->text('short_desc_it');
            $table->text('long_desc_en');
            $table->text('long_desc_fr');
            $table->text('long_desc_it');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('home_abouts', function (Blueprint $table) {
            $table->dropColumn('title_en');
            $table->dropColumn('title_fr');
            $table->dropColumn('title_it');
            $table->dropColumn('short_desc_en');
            $table->dropColumn('short_desc_fr');
            $table->dropColumn('short_desc_it');
            $table->dropColumn('long_desc_en');
            $table->dropColumn('long_desc_fr');
            $table->dropColumn('long_desc_it');
        });
    }
}
