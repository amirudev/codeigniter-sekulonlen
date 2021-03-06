<?php
namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Berita extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'auto_increment' => TRUE
            ],
            'berita_judul' => [
                'type' => 'TEXT'
            ],
            'berita_content' => [
                'type' => 'TEXT'
            ],
            'created_at' => [
                'type' => 'DATETIME'
            ]
        ]);

        $this->forge->addKey('id', TRUE);

        $this->forge->createTable('berita', TRUE);
    }

    public function down()
    {
        $this->forge->dropTable('berita');
    }
}