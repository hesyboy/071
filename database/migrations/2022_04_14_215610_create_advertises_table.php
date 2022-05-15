<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdvertisesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('advertises', function (Blueprint $table) {

            $table->id();

            $table->foreignId('user_id')->constrained('users')->cascadeOnDelete();

            $table->string('title');
            $table->text('description')->nullable();

            $table->string('slug')->unique();

            $table->foreignId('category_id')->constrained('advertise_categories')->cascadeOnDelete();

            $table->unsignedTinyInteger('adv_type')->default(0)->comment('0=>personal,1=>shopping');

            $table->string('price');
            $table->string('discount')->nullable();

            $table->foreignId('city_id')->constrained('cities')->cascadeOnDelete();
            $table->foreignId('area_id')->constrained('areas')->cascadeOnDelete();
            $table->string('location');

            $table->string('image');

            $table->unsignedTinyInteger('show_type')->default(0)->comment('0=>normal,1=>fory');

            $table->unsignedTinyInteger('chat')->default(1)->comment('0=>deactive,1=>active');
            $table->unsignedTinyInteger('show_number')->default(1)->comment('0=>deactive,1=>active');

            $table->unsignedTinyInteger('status')->default(1)->comment('0=>deactive,1=>pishnevis,2=>notshown,3=>active,4=>vije');





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
        Schema::dropIfExists('advertises');
    }
}
