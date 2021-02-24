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
            'name' => [
                'type' => 'TEXT'
            ],
            'guru_id' => [
                'type' => 'INT'
            ]
        ]);

        $this->forge->addKey('id', TRUE);

        $this->forge->addForeignKey('guru_id','guru','id');
        
        $this->forge->createTable('kelas', TRUE);
    }

    public function down()
    {
        $this->forge->dropTable('kelas');
    }
}