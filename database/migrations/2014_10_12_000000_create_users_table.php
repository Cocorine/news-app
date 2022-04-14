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

            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('gender')->nullable();
            $table->string('username')->nullable();
            $table->string('email')->unique()->nullable();
            $table->timestamp('email_verified_at')->nullable();

            $table->string('operation_name')->nullable();
            $table->string('account_verification_token')->nullable();
            $table->string('account_verification_gateway')->nullable();
            $table->timestamp('account_verification_request_at')->nullable();
            $table->boolean('account_verified')->default(0);
            $table->timestamp('account_verified_at')->nullable();
            $table->boolean('reset_password')->default(0);
            $table->timestamp('password_update_at')->nullable();
            $table->string('last_password_remember')->nullable();

            $table->nullableMorphs('profilable');

            $table->string('password');
            $table->softDeletes();
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
