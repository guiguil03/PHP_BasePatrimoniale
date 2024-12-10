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
                'quantité'     => $faker->numberBetween(1, 50), // Capacité aléatoire entre 10 et 100
                'capacité'     => $faker->numberBetween(10, 100), // Capacité aléatoire entre 10 et 100
                'NbTables'     => $faker->numberBetween(1, 20),  // Nombre de tables aléatoire
                'NbEtudiants'  => $faker->numberBetween(0, 50),  // Nombre d'étudiants aléatoire
                'NbEnseignants' => $faker->numberBetween(0, 5),  // Nombre d'enseignants aléatoire
                'image_url'    => 'https://picsum.photos/640/480?random=' . $faker->randomNumber(), // URL d'image dynamique
            ];

            $this->db->table('Items')->insert($data);
        }
    }
}
