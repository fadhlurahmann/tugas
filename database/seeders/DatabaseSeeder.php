<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Buku;
use App\Models\Petugas;
use App\Models\Rak;
use App\Models\Peminjaman;
use App\Models\Pengembalian;
use App\Models\Anggota;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Anggota::create([
            "kode_anggota" => "21321",
            "nama_anggota" => "Fari",
            "jk_anggota" => "L",
            "jurusan_anggota" => "RP",
            "no_telp_anggota" => "08423232",
            "alamat_anggota" => "condet",
        ]);

        Anggota::create([
            "kode_anggota" => "3221312",
            "nama_anggota" => "Deni",
            "jk_anggota" => "L",
            "jurusan_anggota" => "Ak",
            "no_telp_anggota" => "08232323",
            "alamat_anggota" => "Jengki",
        ]);

        Petugas::create([
            "nama_petugas" => "Dani",
            "jabatan_petugas" => "Admin 1",
            "no_telp_petugas" => "08213123",
            "alamat_petugas" => "Ciplak",
        ]);

        Petugas::create([
            "nama_petugas" => "Raya",
            "jabatan_petugas" => "Admin 2",
            "no_telp_petugas" => "08847327",
            "alamat_petugas" => "Ranco",
        ]);

        Buku::create([
            "kode_buku" => "65432",
            "judul_buku" => "Dani Si Indigo",
            "penulis_buku" => "Sendi",
            "penerbit_buku" => "Gramedia",
            "tahun_penerbit" => "2016",
            "stok" => 30,
           ]);
    
           Buku::create([
            "kode_buku" => "54326",
            "judul_buku" => "Kisah Cintaku",
            "penulis_buku" => "Faris Maulana",
            "penerbit_buku" => "Mizan",
            "tahun_penerbit" => "2023",
            "stok" => 22,
           ]);

           Rak::create([
            "nama_rak" => "Tokoh",
            "lokasi_rak" => "lt-2",
            "buku_id" => 1,
          ]);
   
        
          Rak::create([
           "nama_rak" => "Kisah",
           "lokasi_rak" => "lt-1",
           "buku_id" => 2,
            ]);
   
         Peminjaman::create([
           "tanggal_pinjam" => "2023-09-03",
           "tanggal_kembali" => "2023-09-09",
           "buku_id" => 1,
           "anggota_id" => 1,
           "petugas_id" => 1,
         ]);
   
         Peminjaman::create([
           "tanggal_pinjam" => "2023-10-04",
           "tanggal_kembali" => "2023-10-09",
           "buku_id" => 2,
           "anggota_id" => 2,
           "petugas_id" => 2,
         ]);
   
         Pengembalian::create([
            "tanggal_pengembalian" => "2023-09-09",
            "denda" => 35000,
            "buku_id" => 1,
            "anggota_id" => 1,
            "petugas_id" => 1
         ]);
   
         Pengembalian::create([
           "tanggal_pengembalian" => "2023-10-09",
           "denda" => 0,
           "buku_id" => 2,
           "anggota_id" => 2,
           "petugas_id" => 2
        ]);
    }
}
