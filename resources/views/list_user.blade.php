@extends('layouts.app')

@section('contents')
<h1>Daftar Pengguna</h1>

<table>
    <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Kelas</th>
        </tr>
        @foreach($users as $user)
        <tr>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->kelas->name }}</td>
        </tr>
        @endforeach
    </thead>
</table>
@endsection
