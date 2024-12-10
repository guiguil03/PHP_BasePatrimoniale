<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class User extends Seeder
{
    public function run()
    {
        $faker = Factory::create('fr_FR');  
        for ($i = 0; $i < 100; $i++) { 
            $firstName = $faker->firstName();
            
            $email = strtolower($firstName) . '.' . $faker->unique()->numberBetween(1, 9999) . '@example.com';

            $data = [
                'nom' =>  $firstName,
                'adresseMail' => $email
            ];

            $this->db->table('User')->insert($data);
        }
    } 
}
