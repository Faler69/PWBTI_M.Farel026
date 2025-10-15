<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
   static $data_berita = [
        [
            "judul" => "Unimus Ganteng",
            "slug" => "unimus-ganteng",
            "penulis" => "anjo",
            "konten" => "pembunuhan tanpa busana daerah ciliwangi",
        ],
        [
            "judul" => "Berita Unimus Hot",
            "slug"=> "berita-unimus-hot",
            "penulis" => "jamno",
            "konten" => "menangis meratapi nasib, seorang pemuda ditemukan sedang melahirkan disekitar lampu merah ciliwung",
        ],
        [
            "judul" => "Fatur Full Percakapan",
            "slug" => "fatur-full-percakapan",
            "penulis" => "pukime",
            "konten" => "munaroh menikami",
        ]
    ];
    public static function ambildata()
    {
        return self::$data_berita;
    } 
}
