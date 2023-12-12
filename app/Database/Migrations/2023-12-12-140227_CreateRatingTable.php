<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateRatingTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'permainanId' => [
                'type' => 'INT',
                'unsigned'       => true,
                'auto_increment' => true,
            ], 
            'wahanaId' => [
                'type' => 'INT',
                'unsigned'       => true,
            ],
            'rating' => [
                'type' => 'INT',
            ],
        ]);
        $this->forge->addKey('permainanId', true);
        $this->forge->addForeignKey('wahanaId', 'wahana', 'wahanaId');
        $this->forge->createTable('rating');
    }

    public function down()
    {
        //
    }
}
