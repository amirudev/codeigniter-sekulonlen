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
            'username' => [
                'type' => 'TEXT'
            ],
            'user_fullname' => [
                'type' => 'TEXT'
            ],
            'privilege' => [
                'type' => 'INT'
            ]
        ]);

        $this->forge->addKey('id', TRUE);

        $this->forge->createTable('user', TRUE);
    }

    public function down()
    {
        $this->forge->dropTable('user');
    }
}