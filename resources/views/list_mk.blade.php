@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Daftar Mata Kuliah</h1>
    <a href="{{ route('matakuliah.create') }}">Tambah Mata Kuliah</a>
    <br><br>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>ID</th>
            <th>Nama Mata Kuliah</th>
            <th>SKS</th>
        </tr>
        @foreach ($mks as $mk)
        <tr>
            <td>{{ $mk->id }}</td>
            <td>{{ $mk->nama_mk }}</td>
            <td>{{ $mk->sks }}</td>
        </tr>
        @endforeach
    </table>
</div>
@endsection
