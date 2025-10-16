<?php

namespace App\Http\Controllers;
use App\Models\UserModel;
use App\Models\Kelas;
use Illuminate\Http\Request;
class UserController extends Controller
{
    public $userModel;
    public $kelasModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
        $this->kelasModel = new Kelas();
    }

    public function store(Request $request)
{
    $this->userModel->create([
        'nama' => $request->input('nama'),
        'nim' => $request->input('npm'),
        'kelas_id' => $request->input('kelas_id'),
    ]);

    return redirect()->route('user.index')->with('success', 'Data berhasil ditambahkan!');
}


    public function create(){
        $kelas = $this->kelasModel->getKelas();

        $data = [
            'title' => 'Create User',
            'kelas' => $kelas
        ];

        return view('create_user', $data);
    }

    public function index()
{
    $data = [
        'title' => 'List User',
        'users' => $this->userModel->getUser(),
    ];
    return view('list_user', $data);
}

public function edit($id)
{
    $user = $this->userModel->find($id);
    $kelas = $this->kelasModel->getKelas();

    if (!$user) {
        return redirect()->to('/user')->with('error', 'User tidak ditemukan');
    }

    $data = [
        'title' => 'Edit User',
        'user' => $user,
        'kelas' => $kelas
    ];

    return view('edit_user', $data);
}

public function update(Request $request, $id)
{
    $request->validate([
        'nama' => 'required|string|max:255',
        'npm' => 'required|string|max:20',
        'kelas_id' => 'required|exists:kelas,id',
    ]);

    $user = $this->userModel->find($id);

    if (!$user) {
        return redirect()->to('/user')->with('error', 'User tidak ditemukan');
    }

    $user->update([
        'nama' => $request->input('nama'),
        'nim' => $request->input('npm'),
        'kelas_id' => $request->input('kelas_id'),
    ]);

    return redirect()->to('/user')->with('success', 'Data user berhasil diperbarui!');
}

public function destroy($id)
{
    $user = $this->userModel->find($id);

    if (!$user) {
        return redirect()->to('/user')->with('error', 'User tidak ditemukan');
    }

    $user->delete();

    return redirect()->to('/user')->with('success', 'Data user berhasil dihapus!');
}

}