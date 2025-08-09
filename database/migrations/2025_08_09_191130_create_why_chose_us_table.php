<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWhyChoseUsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('why_chose_us', function (Blueprint $table) {
            $table->id();

            $table->string('icon_1')->nullable();
            $table->string('title_1')->nullable();
            $table->string('desc_1')->nullable();

            $table->string('icon_2')->nullable();
            $table->string('title_2')->nullable();
            $table->string('desc_2')->nullable();

            $table->string('icon_3')->nullable();
            $table->string('title_3')->nullable();
            $table->string('desc_3')->nullable();

            $table->string('icon_4')->nullable();
            $table->string('title_4')->nullable();
            $table->string('desc_4')->nullable();
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
        Schema::dropIfExists('why_chose_us');
    }
}
