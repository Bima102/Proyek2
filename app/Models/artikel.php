<?php

namespace App\Models;


class artikel
{
private static $blog_artikel = [

    [
        'Judul' => "Artikel 1",
        'Isi' => "mengenal kampus mereka dengan bijak dan benar sesuai ketentuan negara"
    ]
    ];

    public static function all()
    {
        return self::$blog_artikel;
    }
}
