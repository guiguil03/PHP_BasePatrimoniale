<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Items extends Seeder
{
    public function run()
    {
        $faker = \Faker\Factory::create('fr_FR'); // Configure Faker pour le français
        
        $data = [];
        for ($i = 0; $i < 50; $i++) {
            $data[] = [
                'nom'           => $faker->lastName,
                'adescription'  => $faker->sentence,
                'localisation'  => $faker->city,
                'typeMateriel'  => $faker->word,
            ];
        }
        
        $this->db->table('Items')->insertBatch($data);
    }
}
