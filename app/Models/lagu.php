<?php

namespace App\Models;

class Lagu{
public $judul;
public $album;
public $pencipta;
public $tahun;

public function __construct($data) {
$this->judul = $data['judul'];
$this->album = $data['album'];
$this->pencipta = $data['pencipta'];
$this->tahun = $data['tahun'];

}

}
