<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Photo;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;


class CreateAdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $user = User::create([
            'name'      => 'supahotadmin',
            'full_name' => 'supa hothothot',
            'email'     => 'supahot@a.aa',
            'headline'  => 'The headline of a supahot admin bebe',
            'bio'       => 'Hella noice bio of a supahotadmin',
            'password'  => 'aaaaaaaa',
        ]);
        $user->photos()->save(Photo::create([
            'path' => 'defaultUser.png',
            'type' => 'profilePhoto',
        ]));

        $role = Role::create(['name' => 'Admin']);

        $permissions = Permission::pluck('id','id')->all();

        $role->syncPermissions($permissions);

        $user->assignRole([$role->id]);
    }
}
