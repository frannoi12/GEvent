<?php

namespace Database\Seeders;

use App\Models\User;
//use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
//use Spatie\Permission\Models\Role;
//use Spatie\Permission\Models\Permission;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user1 = User::create([
            'nom' => 'TOYI',
            'prenom'=>'François',
            'email' =>'toyifrancois@gmail.com',
            'contact'=>'93516499',
            'mot_de_passe'=>Hash::make('password')
        ]);
        //$user1->assignRole("admin");

        $user2 = User::create([
            'nom' => 'TOYI',
            'prenom'=>'Fabrice',
            'email' =>'toyifabrice@gmail.com',
            'contact'=>'97607031',
            'mot_de_passe' => Hash::make('password')
        ]);
        //$user2->assignRole('editor');
        //
    }
}
