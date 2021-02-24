<?php
namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Siswa extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'auto_increment' => TRUE
            ],
            'name' => [
                'type' => 'TEXT'
            ]
        ]);

        $this->forge->addKey('id', TRUE);

        $this->forge->createTable('siswa', TRUE);
    }

    public function down()
    {
        $this->forge->dropTable('siswa');
    }
}