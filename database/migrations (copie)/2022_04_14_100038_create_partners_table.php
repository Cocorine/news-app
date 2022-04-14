<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePartnersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('partners', function (Blueprint $table) {
            $table->id();
            $table->string('enterprise_name')->nullable();
            $table->string('logo')->nullable();
            $table->json('enterprise_activities')->nullable();
            $table->string('website_link')->nullable();
            $table->json('phone_contact_data')->nullable();
            $table->json('email_contact_data')->nullable();
            $table->longText("description");
            $table->softDeletes();
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
        Schema::dropIfExists('partners');
    }
}
