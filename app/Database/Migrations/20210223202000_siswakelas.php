<?php
namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class SiswaKelas extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'auto_increment' => TRUE
            ],
            'user_id' => [
                'type' => 'INT'
            ],
            'kelas_id' => [
                'type' => 'INT'
            ]
        ]);

        $this->forge->addKey('id', TRUE);

        $this->forge->addForeignKey('user_id', 'user', 'id');
        $this->forge->addForeignKey('kelas_id', 'kelas', 'id');

        $this->forge->createTable('siswakelas');
    }

    public function down()
    {
        $this->forge->dropTable('siswakelas');
    }
}