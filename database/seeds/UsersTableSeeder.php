<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::truncate();

        $adminRole = Role::Where('name','admin')->first();
        $authorRole= Role::Where('name','author')->first();
        $userRole = Role::Where('name','user')->first();
    
    $admin = User::create([
        'name'=>'admin',
        'email'=>'admin@gmail.com',
        'password'=>bcrypt('admin')
    ]);
    $author = User::create([
        'name'=>'author',
        'email'=>'author@gmail.com',
        'password'=>bcrypt('author')
    ]);
    $user = User::create([
        'name'=>'user',
        'email'=>'user@gmail.com',
        'password'=>bcrypt('user')
    ]);
    
    $admin->roles()->attach($adminRole);
    $author->roles()->attach($authorRole);
    $user->roles()->attach($userRole);
    
    
    
    
    
    
    
    }
}
