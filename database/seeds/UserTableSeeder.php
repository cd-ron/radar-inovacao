<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
	public function run()
    {
        DB::table('role')->insert([
            'name' => 'Super Admin'
        ]);

        DB::table('user')->insert([
            'name' => 'Usuário de demostração',
            'email' => 'demo@codeinapp.com.br',
            'remember_token' => '',
            'password' => bcrypt('demo'),
            'role_id' => '1'
        ]);

        DB::table('permission')->insert([
            'name' => 'Admin Role Index',
            'slug' => 'admin-role-index'
        ]);
        DB::table('permission')->insert([
            'name' => 'Admin Role Create',
            'slug' => 'admin-role-create'
        ]);
        DB::table('permission')->insert([
            'name' => 'Admin Role Store',
            'slug' => 'admin-role-store'
        ]);
        DB::table('permission')->insert([
            'name' => 'Admin Role Show',
            'slug' => 'admin-role-show'
        ]);
        DB::table('permission')->insert([
            'name' => 'Admin Role Edit',
            'slug' => 'admin-role-edit'
        ]);
        DB::table('permission')->insert([
            'name' => 'Admin Role Update',
            'slug' => 'admin-role-update'
        ]);
        DB::table('permission')->insert([
            'name' => 'Admin Role Destroy',
            'slug' => 'admin-role-destroy'
        ]);
        DB::table('permission')->insert([
            'name' => 'Admin User Index',
            'slug' => 'admin-user-index'
        ]);
        DB::table('permission')->insert([
            'name' => 'Admin User Create',
            'slug' => 'admin-user-create'
        ]);
        DB::table('permission')->insert([
            'name' => 'Admin User Store',
            'slug' => 'admin-user-store'
        ]);
        DB::table('permission')->insert([
            'name' => 'Admin User Show',
            'slug' => 'admin-user-show'
        ]);
        DB::table('permission')->insert([
            'name' => 'Admin User Edit',
            'slug' => 'admin-user-edit'
        ]);
        DB::table('permission')->insert([
            'name' => 'Admin User Update',
            'slug' => 'admin-user-update'
        ]);
        DB::table('permission')->insert([
            'name' => 'Admin User Destroy',
            'slug' => 'admin-user-destroy'
        ]);
        DB::table('permission')->insert([
            'name' => 'Admin Dashboard',
            'slug' => 'admin-index'
        ]);

        DB::table('permission_role')->insert([
            'permission_id' => 1,
            'role_id' => 1
        ]);
        DB::table('permission_role')->insert([
            'permission_id' => 2,
            'role_id' => 1
        ]);
        DB::table('permission_role')->insert([
            'permission_id' => 3,
            'role_id' => 1
        ]);
        DB::table('permission_role')->insert([
            'permission_id' => 4,
            'role_id' => 1
        ]);
        DB::table('permission_role')->insert([
            'permission_id' => 5,
            'role_id' => 1
        ]);
        DB::table('permission_role')->insert([
            'permission_id' => 6,
            'role_id' => 1
        ]);
        DB::table('permission_role')->insert([
            'permission_id' => 7,
            'role_id' => 1
        ]);
        DB::table('permission_role')->insert([
            'permission_id' => 8,
            'role_id' => 1
        ]);
        DB::table('permission_role')->insert([
            'permission_id' => 9,
            'role_id' => 1
        ]);
        DB::table('permission_role')->insert([
            'permission_id' => 10,
            'role_id' => 1
        ]);
        DB::table('permission_role')->insert([
            'permission_id' => 11,
            'role_id' => 1
        ]);
        DB::table('permission_role')->insert([
            'permission_id' => 12,
            'role_id' => 1
        ]);
        DB::table('permission_role')->insert([
            'permission_id' => 13,
            'role_id' => 1
        ]);
        DB::table('permission_role')->insert([
            'permission_id' => 14,
            'role_id' => 1
        ]);
        DB::table('permission_role')->insert([
            'permission_id' => 15,
            'role_id' => 1
        ]);
    }
}
