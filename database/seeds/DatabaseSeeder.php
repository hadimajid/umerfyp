<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        try {
            \App\Admin::create([
                'name'=>'Umer',
                'email'=>'iumersocial@gmail.com',
                'email_verified_at'=>\Carbon\Carbon::now(),
                'password'=>\Illuminate\Support\Facades\Hash::make('12345678'),
            ]);
        }catch (Exception $ex){

        }
        try {
        \App\User::create([
           'name'=>'Fawad',
           'username'=>'fawadlang',
           'number'=>'03001234567',
           'email'=>'fawadlang@gmail.com',
            'email_verified_at'=>\Carbon\Carbon::now(),
            'password'=>\Illuminate\Support\Facades\Hash::make('12345678'),
        ]);
    }catch (Exception $ex){

}
    }
}
