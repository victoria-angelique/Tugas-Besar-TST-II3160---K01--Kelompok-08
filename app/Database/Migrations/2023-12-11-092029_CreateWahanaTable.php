<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateWahanaTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'unsigned'       => true,
                'auto_increment' => true,
            ], 
            'nama_wahana' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'kapasitas' => [
                'type' => 'INT',
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('wahana');
    }

    public function down()
    {
        $this->forge->dropTable('wahana');
    }
}
