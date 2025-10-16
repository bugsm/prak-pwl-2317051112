@extends('layouts.app')

@section('content')
<div class="container">
    <div class="bg-white rounded-2xl shadow-lg overflow-hidden p-6">
        <form action="{{ route('user.update', $user->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="nama" class="block text-sm font-semibold text-gray-600 mb-2">Nama:</label>
                <input type="text" 
                       id="nama" 
                       name="nama" 
                       value="{{ $user->nama }}"
                       class="w-full px-4 py-2 border border-gray-200 rounded-md focus:outline-none focus:ring-2 focus:ring-purple-400">
            </div>

            <div class="mb-4">
                <label for="npm" class="block text-sm font-semibold text-gray-600 mb-2">NPM:</label>
                <input type="text" 
                       id="npm" 
                       name="npm" 
                       value="{{ $user->nim }}"
                       class="w-full px-4 py-2 border border-gray-200 rounded-md focus:outline-none focus:ring-2 focus:ring-purple-400">
            </div>

            <div class="mb-4">
                <label for="kelas_id" class="block text-sm font-semibold text-gray-600 mb-2">Kelas:</label>
                <select id="kelas_id" 
                        name="kelas_id" 
                        class="w-full px-4 py-2 border border-gray-200 rounded-md focus:outline-none focus:ring-2 focus:ring-purple-400">
                    @foreach ($kelas as $k)
                        <option value="{{ $k->id }}" {{ $user->kelas_id == $k->id ? 'selected' : '' }}>
                            {{ $k->nama_kelas }}
                        </option>
                    @endforeach
                </select>
            </div>

            <button type="submit" 
                    class="bg-gradient-to-r from-purple-400 to-blue-400 text-white px-6 py-2 rounded-md hover:opacity-90 transition-opacity duration-200 shadow-sm">
                Update
            </button>
        </form>
    </div>
</div>
@endsection
