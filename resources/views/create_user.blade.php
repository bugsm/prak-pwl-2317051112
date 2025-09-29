@extends('layouts.app')
@section('content')
    <h1>{{ $title }}</h1>
    <form action="{{ route('user.store') }}" method="POST">
        @csrf
        <div>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div>
            <label for="kelas">Kelas:</label>
            <select id="kelas" name="kelas_id" required>
                @foreach($kelas as $k)
                    <option value="{{ $k->id }}">{{ $k->name }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit">Create User</button>
    </form>
@endsection