<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Items extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nom' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'adescription' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'localisation' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'typeMateriel' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'quantité' => [
                'type'       => 'INT',
                'constraint' => 5,
                'null'      => true,
            ],
            'capacité' => [
                'type'       => 'INT',
                'constraint' => 5,
                'null'      => true,
            ],
            'NbTables' => [
                'type'       => 'INT',
                'constraint' => 5,
                'null'      => true,
            ],
            'NbEtudiants' => [
                'type'       => 'INT',
                'constraint' => 5,
                'null'      => true,
            ],
            'NbEnseignants' => [
                'type'       => 'INT',
                'constraint' => 5,
                'null'      => true,
            ],
            'image_url' => [
                'type' => 'TEXT',
                'null' => true,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('items');
    }

    public function down()
    {
        $this->forge->dropTable('items');
    }
}
