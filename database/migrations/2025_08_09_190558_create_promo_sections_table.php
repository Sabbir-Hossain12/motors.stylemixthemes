<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePromoSectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('promo_sections', function (Blueprint $table) {
            $table->id();

            $table->string('bg_img')->nullable();
            $table->string('title_1')->nullable();
            $table->string('desc_1')->nullable();
            $table->string('icon_1')->nullable();

            $table->string('title_2')->nullable();
            $table->string('desc_2')->nullable();
            $table->string('icon_2')->nullable();
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
        Schema::dropIfExists('promo_sections');
    }
}
