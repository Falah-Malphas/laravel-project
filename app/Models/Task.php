<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    // mendefenisikan data tugas
    protected static $tasks = [
        [
            'id' => 1,
            'nama' => 'Bahasa Inggris',
            'deadline' => '2024-06-01',
            'status' => 'belum selesai',
            'description' => 'mengerjakan tugas bahasa ingriss chapter 1 dibuku LKS hal 10-12.',
        ], [
            'id' => 2,
            'nama' => 'Matematika',
            'deadline' => '2024-06-02',
            'status' => 'belum selesai',
            'description' => 'mengerjakan soal-soal matematika dibuku PR hal 20-24.',
        ], [
            'id' => 3,
            'nama' => 'PJOK',
            'deadline' => '2024-06-03',
            'status' => 'belum selesai',
            'description' => 'mengerjakan tugas praktek berupa rekaman kegiatan senam SKJ.',
        ], [
            'id' => 4,
            'nama' => 'Bahasa Indonesia',
            'deadline' => '2024-06-04',
            'status' => 'belum selesai',
            'description' => 'Membuat resensi buku fiksi atau non fiksi.'
        ]
        ];

        // method untuk mendapatkan semua tugas
        public static function getAll(){
            return self::$tasks;
        }
}
