<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            'name' => 'Super Admininistrator',
            'description' => 'Le role super administrator donne le droit à l\'utilisateur d\'éffectuer toutes les manipulations sur la plateforme.'
        ]);

        DB::insert('insert into permission_roles (permission_id, role_id) values (?, ?)', [1, 1]);
        DB::insert('insert into permission_roles (permission_id, role_id) values (?, ?)', [2, 1]);
        DB::insert('insert into permission_roles (permission_id, role_id) values (?, ?)', [3, 1]);
        DB::insert('insert into permission_roles (permission_id, role_id) values (?, ?)', [4, 1]);
        DB::insert('insert into permission_roles (permission_id, role_id) values (?, ?)', [5, 1]);
        DB::insert('insert into permission_roles (permission_id, role_id) values (?, ?)', [6, 1]);
        DB::insert('insert into permission_roles (permission_id, role_id) values (?, ?)', [7, 1]);
        DB::insert('insert into permission_roles (permission_id, role_id) values (?, ?)', [7, 1]);
        DB::insert('insert into permission_roles (permission_id, role_id) values (?, ?)', [7, 1]);

        Role::create([
            'name' => 'Admininistrator',
            'description' => 'Le role Administrator donne l\'accès à l\'administrator de faire tout ce qu\'il veut.'
        ]);

        DB::insert('insert into permission_roles (permission_id, role_id) values (?, ?)', [1, 2]);
        DB::insert('insert into permission_roles (permission_id, role_id) values (?, ?)', [3, 2]);
        DB::insert('insert into permission_roles (permission_id, role_id) values (?, ?)', [8, 2]);
        DB::insert('insert into permission_roles (permission_id, role_id) values (?, ?)', [12, 2]);

        Role::create([
            'name' => 'Reader',
            'description' => 'Un lecteur à l\'accès de recevoir des articles de les commenter, liker, partager, ...'
        ]);

        DB::insert('insert into permission_roles (permission_id, role_id) values (?, ?)', [1, 3]);
        DB::insert('insert into permission_roles (permission_id, role_id) values (?, ?)', [3, 3]);
        DB::insert('insert into permission_roles (permission_id, role_id) values (?, ?)', [8, 3]);
        DB::insert('insert into permission_roles (permission_id, role_id) values (?, ?)', [23, 3]);
        DB::insert('insert into permission_roles (permission_id, role_id) values (?, ?)', [13, 3]);

        Role::create([
            'name' => 'Editor',
            'description' => 'Un éditeur pourra rédiger des acticles qu\'il va ensuite soumettre à son superviseur.'
        ]);

        DB::insert('insert into permission_roles (permission_id, role_id) values (?, ?)', [1, 4]);
        DB::insert('insert into permission_roles (permission_id, role_id) values (?, ?)', [4, 4]);
        DB::insert('insert into permission_roles (permission_id, role_id) values (?, ?)', [8, 4]);
        DB::insert('insert into permission_roles (permission_id, role_id) values (?, ?)', [21, 4]);
        DB::insert('insert into permission_roles (permission_id, role_id) values (?, ?)', [12, 4]);

        Role::create([
            'name' => 'Supervisor',
            'description' => 'Le superviseur à l\' accès de valider un article pour une publication'
        ]);

        DB::insert('insert into permission_roles (permission_id, role_id) values (?, ?)', [1, 5]);
        DB::insert('insert into permission_roles (permission_id, role_id) values (?, ?)', [2, 5]);
        DB::insert('insert into permission_roles (permission_id, role_id) values (?, ?)', [8, 5]);
        DB::insert('insert into permission_roles (permission_id, role_id) values (?, ?)', [21, 5]);
        DB::insert('insert into permission_roles (permission_id, role_id) values (?, ?)', [12, 5]);

    }
}
