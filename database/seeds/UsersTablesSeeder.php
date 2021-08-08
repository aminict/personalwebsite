
<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\User;
use Illuminate\Support\Str;

class UsersTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'    => 'Amin',
            'email'    => 'amin.ict.mbstu@gmail.com',
            'password'   =>  Hash::make('Amin@0191'),
            'remember_token' =>  Str::random(10),
        ]);
    }
}