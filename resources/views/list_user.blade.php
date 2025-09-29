@extends('layouts.app')

@section('content')
<div class="container">
    <!-- Header Section -->
        <div class="bg-white rounded-2xl shadow-xl overflow-hidden mb-8">
            <div class="bg-gradient-to-r from-purple-500 to-blue-500 px-8 py-6">
                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <img src="{{ asset('images/logo.svg') }}" class="h-12 mr-3 sm:h-9 justify-center mr-4" alt="DeaaL Logo">
                        <div>
                            <h1 class="text-2xl font-bold text-white">Daftar Anggota Kelas</h1>
                            <p class="text-purple-100 mt-1">Kelola semua anggota dalam kelas</p>
                        </div>
                    </div>
                    <div class="flex items-center space-x-4">

                        <a href="/user/create" class="bg-white text-purple-600 px-4 py-2 rounded-lg font-medium hover:bg-gray-50 transition-all duration-200 flex items-center">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                            </svg>
                            Tambah Anggota Baru
                        </a>
                    </div>
                </div>
            </div>
        </div>

    
    @include('components.user-table', ['users' => $users])
</div>
@endsection
