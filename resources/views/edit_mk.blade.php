@extends('layouts.app')

@section('content')
<div class="container">
<div class="bg-white rounded-2xl shadow-lg overflow-hidden p-6">
    <form action="{{ route('matakuliah.update', $mk->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label for="nama_mk" class="block text-sm font-semibold text-gray-600 mb-2">Nama Mata Kuliah:</label>
            <input type="text" 
                   id="nama_mk" 
                   name="nama_mk" 
                   value="{{ $mk->nama_mk }}"
                   class="w-full px-4 py-2 border border-gray-200 rounded-md focus:outline-none focus:ring-2 focus:ring-purple-400">
        </div>

        <div class="mb-4">
            <label for="sks" class="block text-sm font-semibold text-gray-600 mb-2">SKS:</label>
            <input type="number" 
                   id="sks" 
                   name="sks" 
                   value="{{ $mk->sks }}"
                   class="w-full px-4 py-2 border border-gray-200 rounded-md focus:outline-none focus:ring-2 focus:ring-purple-400">
        </div>

        <button type="submit" 
                class="bg-gradient-to-r from-purple-400 to-blue-400 text-white px-6 py-2 rounded-md hover:opacity-90 transition-opacity duration-200 shadow-sm">
            Update
        </button>
    </form>
</div>
</div>
@endsection
