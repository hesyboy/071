<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdvertiseFiltersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('advertise_filters', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->unsignedTinyInteger('filter_type')->default(0)->comment('0=>text,1=>select,2=>check');
            $table->foreignId('category_id')->constrained('advertise_categories')->cascadeOnDelete();
            $table->unsignedTinyInteger('status')->default(1);
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
        Schema::dropIfExists('advertise_filters');
    }
}
