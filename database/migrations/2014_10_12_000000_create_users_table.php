<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();

            $table->string('name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('code_melli')->nullable();

            $table->string('state_id')->nullable();
            $table->string('address')->nullable();

            $table->string('email')->nullable()->unique();
            $table->timestamp('email_verified_at')->nullable();

            $table->string('phone')->unique();

            $table->unsignedTinyInteger('user_type')->default(0);
            $table->unsignedTinyInteger('has_shop')->default(0);

            $table->unsignedTinyInteger('is_admin')->default(0);
            $table->unsignedTinyInteger('user_role')->default(0);

            $table->unsignedTinyInteger('status')->default(1);

            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
