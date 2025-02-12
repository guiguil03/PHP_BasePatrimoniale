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
                'typeMateriel' => $faker->randomElement(['Ordinateur', 'Tablette', 'Imprimantes ', 'Extincteur', 'VIdeoProjecteurs','Copieurs']),
                'quantité'     => $faker->numberBetween(1, 50),
                'capacité'     => $faker->numberBetween(10, 100),
                'NbTables'     => $faker->numberBetween(1, 20),
                'NbEtudiants'  => $faker->numberBetween(0, 50),
                'NbEnseignants' => $faker->numberBetween(0, 5),
                'image_url'    => 'https://picsum.photos/640/480?random=' . $faker->randomNumber(),
            ];

            $this->db->table('items')->insert($data);
        }
    }
}
