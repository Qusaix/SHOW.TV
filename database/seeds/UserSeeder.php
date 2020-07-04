<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin_role = Role::find(1);
        
        $user = new User;
        $user->name = "admin";
        $user->email = "admin@admin.com";
        $user->password = bcrypt(123456);
        $user->image = URL::to('/profileImages/adminImage.png');
        $user->save();
        $user->assignRole($admin_role);

    }
}
