<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelPendaftar extends Model
{
    protected $table            = 'data_pendaftar';
    protected $primaryKey       = 'idPendaftar';
    protected $allowedFields    = [
        'nama', 'jenisKel', 'tempatLahir', 'tanggalLahir', 'nisn', 'nik', 'anakKe', 'jumlahSaudara', 'alamat',
        'noTelp', 'sekolahAsal', 'namaAyah', 'namaIbu', 'pekerjaanAyah', 'pekerjaanIbu', 'nikAyah', 'nikIbu',
        'penghasilanOrtu', 'agamaOrtu', 'alamatOrtu', 'pendidikan', 'namaWali', 'pekerjaanWali', 'agamaWali',
        'alamatWali', 'siswaPindahan', 'suratPindah', 'diterimaDiKelas', 'status_daftar', 'pasfoto',
        'aktaKelahiran', 'KK', 'ijazahSD', 'idUser'
    ];

    public function getPendaftar($idPendaftar = false)
    {
        if ($idPendaftar == false) {
            return $this->join('user', 'user.idUser = data_pendaftar.idUser')->findAll();
        }
        return $this->where(['idPendaftar' => $idPendaftar])->join('user', 'user.idUser = data_pendaftar.idUser')->first();
    }

    public function getPendaftarDiterima()
    {
        return $this->where('status_daftar', 'Diterima')->findAll();
    }
    public function getPendaftarDitolak()
    {
        return $this->where('status_daftar', 'Ditolak')->findAll();
    }
    public function getPendaftarFinalisasi()
    {
        return $this->where('status_daftar', 'Finalisasi')->findAll();
    }
    public function getPendaftarById($idUser = false)
    {
        if (!$idUser) return false;

        return $this->where('data_pendaftar.idUser', $idUser)->first();
    }
}
