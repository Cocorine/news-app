<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Setting::create([
            'enterprise_name'           => 'L\'Économiste',
            'logo'                      => 'logo/logo.png',
            'website_name'              => 'L\'Économiste',
            'description'               => 'Journal parlant des marchés financiers, de l\'économie internationale, business, etc.',
            'lang'                      => 'en',
            'updated_by'                => 1,
            'env'                       => 'developmnt',
            'files_key'                 => 'storage',
            'website_mode'              => 'online',
            'enterprise_activities'     => ['Economie', 'Business', 'Cryptomonaires'],
            'phone_contact_data'        => ['+229 620 048 67', '+229 672 248 67'],
            'email_contact_data'        => ['customer' => 'customer-blog@gmail.com', 'contact' => 'contact-blog@gmail.com', 'info' => 'info-blog@gmail.com', 'direction' => 'direction-blog@gmail.com', 'administrator' => 'administrator-blog@gmail.com'],
            'social_medias_link'        => ['twitter' => 'https://twitter.com/i/corineb', 'facebook' => 'https://web.facebook.com/corine-bocoga', 'linkedIn' => 'https://www.linkedin.com/in/corine-bocoga/']
            
        ]);
    }
}
