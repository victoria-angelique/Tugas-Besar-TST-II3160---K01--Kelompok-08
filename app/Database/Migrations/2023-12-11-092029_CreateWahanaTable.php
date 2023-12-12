<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateWahanaTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'wahanaId' => [
                'type' => 'INT',
                'unsigned'       => true,
                'auto_increment' => true,
            ], 
            'nama' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'kapasitas' => [
                'type' => 'INT',
            ],
            'ratingWahana' => [
                'type' => 'REAL',
            ],
        ]);
        $this->forge->addKey('wahanaId', true);
        $this->forge->createTable('wahana');
    }

    public function down()
    {
        $this->forge->dropTable('wahana');
    }
}
