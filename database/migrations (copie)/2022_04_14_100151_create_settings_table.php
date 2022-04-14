<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{

    public $env = [
        [
            'mode'  => 'developmnt',
            'url'   => 'http://localhost'
        ],
        [
            'mode'  => 'production',
            'url'   => 'http://localhost'
        ],
        [
            'mode'  => 'stagging',
            'url'   => 'http://localhost'
        ]
    ];

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('enterprise_name')->nullable();
            $table->string('logo')->nullable();
            $table->json('enterprise_activities')->nullable();
            $table->longText("description");
            $table->string('website_name')->nullable();
            $table->string('website_link')->nullable();
            $table->json('phone_contact_data')->nullable();
            $table->json('email_contact_data')->nullable();
            $table->json('social_medias_link')->nullable();
            $table->string('app_key')->nullable();
            $table->string('files_key')->nullable();
            $table->enum('lang', ['en', 'fr'])->nullable();
            $table->enum('env',[
                'developmnt' => [
                        'mode'  => 'local',
                        'url'   => 'http://localhost',
                        'debug' => true
                ],
                
                'production' =>     [
                        'mode'  => 'production',
                        'url'   => 'http://localhost',
                        'debug' => false
                ],
                
                'stagging' =>     [
                    'mode'  => 'production',
                    'url'   => 'http://localhost',
                    'debug' => false
                ]
            ])->nullable();
            $table->enum('website_mode', ['online', 'maintenance'])->default('')->nullable();
            $table->foreignIdFor(App\Models\Supervisor::class, 'updated_by');
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
        Schema::dropIfExists('settings');
    }
}
