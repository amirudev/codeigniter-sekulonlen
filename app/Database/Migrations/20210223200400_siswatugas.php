<?php
namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class SiswaTugas extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'auto_increment' => TRUE
            ],
            'kelas_id' => [
                'type' => 'INT'
            ],
            'siswa_id' => [
                'type' => 'INT'
            ],
            'attachment' => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            'content' => [
                'type' => 'TEXT',
                'constraint' => 100000
            ],
            'created_at' => [
                'type' => 'DATETIME'
            ]
        ]);

        $this->forge->addKey('id', TRUE);

        $this->forge->addForeignKey('kelas_id','kelas','id');
        $this->forge->addForeignKey('siswa_id','siswa','id');

        $this->forge->createTable('siswatugas', TRUE);
    }

    public function down()
    {
        $this->forge->dropTable('siswatugas');
    }
}