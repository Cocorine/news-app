<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        /**
         * 
         * ROLE     : Super Admin, Admin, Member, Reader
         * PROFIL   : INFORMER, SUBSCRIBER, EDITOR, SUPERVISOR, PARTNER
         * 
         */
        
        Permission::create([
            "permission" => "LOGIN INTO DASHBOARD",
            "description" => "Permettre à l'utilisateur d'enregistrer des patients",
        ]);

        Permission::create([
            'permission' => 'Publisher',
            'description' => 'Un publieur à l\'accès que de publier ou retirer des articles de la plateforme.'
        ]);

        Permission::create([
            "name" => "UPDATE USER",
            "description" => "Permettre à l'utilisateur de modifier des profil utilisateur",
        ]);

        Permission::create([
            "name" => "READ USER",
            "description" => "Permettre à l'utilisateur de lire des patients",
        ]);

        Permission::create([
            "name" => "DELETE PATIENT",
            "description" => "Permettre à l'utilisateur de supprimer des patients",
        ]);

    }
}
