<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class DataPendaftar extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'idPendaftar' => [
                'type' => 'INT',
                'constraint' => 11,
                'auto_increment' => true,
            ],
            'nama' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
            'jenisKel' => [
                'type' => 'VARCHAR',
                'constraint' => 20,
            ],
            'tempatLahir' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
            'tanggalLahir' => [
                'type' => 'DATE',
            ],
            'nisn' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
            ],
            'nik' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
            ],
            'anakKe' => [
                'type' => 'VARCHAR',
                'constraint' => 20,
            ],
            'jumlahSaudara' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
            ],
            'alamat' => [
                'type' => 'VARCHAR',
                'constraint' => 150,
            ],
            'noTelp' => [
                'type' => 'VARCHAR',
                'constraint' => 20,
            ],
            'sekolahAsal' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
            ],
            'namaAyah' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
            'namaIbu' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
            'pekerjaanAyah' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
            'pekerjaanIbu' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
            'nikAyah' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
            ],
            'nikIbu' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
            ],
            'penghasilanOrtu' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
            'agamaOrtu' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
            ],
            'alamatOrtu' => [
                'type' => 'VARCHAR',
                'constraint' => 150,
            ],
            'pendidikan' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
            'namaWali' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
            'pekerjaanWali' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
            'agamaWali' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
            ],
            'alamatWali' => [
                'type' => 'VARCHAR',
                'constraint' => 150,
            ],
            'siswaPindahan' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
            ],
            'suratPindah' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
            ],
            'diterimaDiKelas' => [
                'type' => 'VARCHAR',
                'constraint' => 20,
            ],
            'status_daftar' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'pasfoto' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'aktaKelahiran' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'fotoKK' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'ijazahSD' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'idUser' => [
                'type' => 'INT',
                'constraint' => 11,
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ]
        ]);
        $this->forge->addPrimaryKey('idPendaftar');
        $this->forge->createTable('data_pendaftar');
        $this->forge->addForeignKey('idUser', 'user', 'idUser', 'CASCADE', 'CASCADE', 'idUser');
    }

    public function down()
    {
        $this->forge->dropTable('data_pendaftar');
    }
}
