<?php
namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Guru extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'auto_increment' => TRUE,
                'constraint' => 5
            ],
            'name' => [
                'type' => 'TEXT'
            ]
        ]);

        $this->forge->addKey('id', TRUE);

        $this->forge->createTable('guru', TRUE);
    }

    public function down()
    {
        $this->forge->dropTable('guru');
    }
}