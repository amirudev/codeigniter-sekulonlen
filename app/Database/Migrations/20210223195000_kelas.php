<?php
namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Kelas extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'auto_increment' => TRUE
            ],
            'kelas_name' => [
                'type' => 'TEXT'
            ],
            'kelas_userid' => [
                'type' => 'INT'
            ],
            'kelas_icon' => [
                'type' => 'INT',
                'constraint' => 1
            ],
            'kelas_bgcolor' => [
                'type' => 'INT',
                'constraint' => 1
            ]
        ]);

        $this->forge->addKey('id', TRUE);

        $this->forge->addForeignKey('user_id','user','id');
        
        $this->forge->createTable('kelas', TRUE);
    }

    public function down()
    {
        $this->forge->dropTable('kelas');
    }
}