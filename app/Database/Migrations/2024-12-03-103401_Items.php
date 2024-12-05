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
                'type'       => 'VARCHAR',
                'constraint' => '100',
                'null' => true,
            ],
            'localisation'=>[
                'type'       => 'VARCHAR',
                'constraint' => '100',
                'null' => true,
            ],
            'typeMateriel' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
                'null' => true,
            ]
        ]);
        $this->forge->addPrimaryKey('id_items');
        $this->forge->createTable('Items');
    }

    public function down()
    {
        $this->forge->dropTable('Items');
    }
}
