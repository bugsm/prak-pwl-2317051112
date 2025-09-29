<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kelas;

class userController extends Controller
{
    public function create(){
    $kelasModel = new Kelas();
    $kelas = $kelasModel->getKelas();
    $data = [
        'title' => 'Create User',
        'kelas' => $kelas
    ];

    return view('create_user', $data);
}

public function index()
    {
        return view('users.index', [
            'title' => 'Daftar User'
        ]);
    }

}
