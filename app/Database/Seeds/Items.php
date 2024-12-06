<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use Faker\Factory;

class Items extends Seeder
{
    public function run()
    {
        $faker = Factory::create('fr_FR');

        for ($i = 0; $i < 100; $i++) {
            $data = [
                'nom'          => $faker->word(),
                'adescription' => $faker->sentence(),
                'localisation' => $faker->city(),
                'typeMateriel' => $faker->randomElement(['Électronique', 'Audiovisuel', 'Fournitures de bureau', 'Autre']),
            ];

            $this->db->table('Items')->insert($data);
        }
    }
}
