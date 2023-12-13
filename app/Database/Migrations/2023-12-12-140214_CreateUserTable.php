<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateUserTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'userId' => [
                'type' => 'INT',
                'unsigned'       => true,
                'auto_increment' => true,
            ], 
            'username' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'password' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'wahanaId' => [
                'type' => 'INT',
                'unsigned'       => true,
            ],
        ]);
        $this->forge->addKey('userId', true);
        $this->forge->addForeignKey('wahanaId', 'wahana', 'wahanaId', 'CASCADE', 'CASCADE');
        $this->forge->createTable('user');
    }

    public function down()
    {
        $this->forge->dropTable('user');
    }
}
