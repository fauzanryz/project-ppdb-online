<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Profil extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'idProfil' => [
                'type' => 'INT',
                'constraint' => 11,
                'auto_increment' => true,
            ],
            'alur_pendaftaran' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'syarat_pendaftaran' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'visi' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'misi' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
        ]);
        $this->forge->addPrimaryKey('idProfil');
        $this->forge->createTable('profil');
    }

    public function down()
    {
        $this->forge->dropTable('profil');
    }
}
