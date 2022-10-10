<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Admin;
use App\Models\Roles;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::truncate();
        

        $adminRoles = Roles::where('name','admin')->first();
        $shipperRoles = Roles::where('name','shipper')->first();
        $thukhoRoles = Roles::where('name','thukho')->first();

        $admin = Admin::create([
        	'admin_name' => 'admin',
        	'admin_email' => 'admin@yahoo.com',
        	'admin_phone' => '123456789',
        	'admin_password' => md5('123456')
        ]);

        $shipper = Admin::create([
        	'admin_name' => 'shipper',
        	'admin_email' => 'shipper@yahoo.com',
        	'admin_phone' => '123456789',
        	'admin_password' => md5('123456')
        ]);

        $thukho = Admin::create([
        	'admin_name' => 'user',
        	'admin_email' => 'user@yahoo.com',
        	'admin_phone' => '123456789',
        	'admin_password' => md5('123456')
        ]);

        $admin->roles()->attach($adminRoles);
        $shipper->roles()->attach($shipperRoles);
        $thukho->roles()->attach($thukhoRoles);



    }
}
