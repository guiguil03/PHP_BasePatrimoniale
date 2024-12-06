<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Items extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_items' => [
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
                'type' => 'TEXT',
                'null' => true,
            ],
            'typeMateriel' => [
                'type' => 'TEXT',
                'null' => true,
            ],
        ]);
        $this->forge->addKey('id_items', true);
        $this->forge->createTable('Items');
    }

    public function down()
    {
        $this->forge->dropTable('Items');
    }
}
