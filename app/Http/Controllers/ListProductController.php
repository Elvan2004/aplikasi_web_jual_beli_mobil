<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListProductController extends Controller
{
    public function getData() {
        $dataBarang = [
            ['id' => 1, 'produk' => 'Avanza'],
            ['id' => 2, 'produk' => 'Toyota'],
            ['id' => 3, 'produk' => 'Innova'],
            ['id' => 4, 'produk' => 'Agya'],
            ['id' => 5, 'produk' => 'Calya'],
        ];

        return $dataBarang;
    }

    public function tampilkan() {
        $data = $this->getData();
        return view('list_product', compact('data'));
    }
}
