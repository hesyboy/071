<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdvertiseCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('advertise_categories', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->text('description')->nullable();
            $table->string('icon')->default('/images/simple.jpg');

            $table->string('seo_title')->nullable();
            $table->string('seo_description')->nullable();

            $table->unsignedTinyInteger('menu_order')->default(0)->comment('0,1,2,3,4');
            $table->foreignId('parent_id')->nullable()->constrained('advertise_categories')->cascadeOnDelete();
            $table->unsignedTinyInteger('status')->default(1)->comment('0=>deactive | 1=>active');
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
        Schema::dropIfExists('advertise_categories');
    }
}
