@extends('layouts.app')

@section('content')
<div class="max-w-2xl mx-auto">
    <!-- Header Card -->
    <div class="bg-white rounded-2xl shadow-xl overflow-hidden">
        <div class="bg-gradient-to-r from-purple-500 to-blue-500 px-8 py-6">
            <div class="flex items-center">
        
                    <img src="{{ asset('images/logo.svg') }}" class="h-12 mr-3 sm:h-9 justify-center mr-4" alt="DeaaL Logo">
                
                <div>
                    <h1 class="text-2xl font-bold text-white">Buat Anggota Baru</h1>
                    <p class="text-purple-100">Tambahkan anggota baru ke dalam kelas</p>
                </div>
            </div>
        </div>

        <!-- Form -->
        <div class="px-8 py-8">
            <form action="{{ route('user.store') }}" method="POST" class="space-y-6">
                @csrf
                <!-- Nama -->
                <div class="form-group">
                    <input type="text" id="nama" name="nama" placeholder="Nama Lengkap"
                        class="form-input w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-purple-500 focus:border-transparent outline-none"
                        required>
                </div>

                <!-- NPM -->
                <div class="form-group">
                    <input type="text" id="npm" name="npm" placeholder="NPM"
                        class="form-input w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-purple-500 focus:border-transparent outline-none"
                        required>
                </div>

                <!-- Kelas -->
                <div class="form-group">
                    <select name="kelas_id" id="kelas"
                        class="form-input w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-purple-500 focus:border-transparent outline-none"
                        required>
                        <option value="" disabled selected>Pilih Kelas</option>
                        @foreach ($kelas as $kelasItem)
                            <option value="{{ $kelasItem->id }}">{{ $kelasItem->nama_kelas }}</option>
                        @endforeach
                    </select>
                </div>

                <!-- Actions -->
                <div class="flex flex-col sm:flex-row gap-4">
                    <button type="submit"
                        class="flex-1 bg-gradient-to-r from-purple-500 to-blue-500 text-white py-3 px-6 rounded-xl font-medium hover:from-purple-600 hover:to-blue-600 transition-all duration-200 shadow-lg hover:shadow-xl transform hover:-translate-y-1 flex items-center justify-center">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                        </svg>
                        Buat Anggota
                    </button>

                    <button type="reset"
                        class="flex-1 sm:flex-none bg-gray-100 text-gray-700 py-3 px-6 rounded-xl font-medium hover:bg-gray-200 transition-all duration-200 border border-gray-300 flex items-center justify-center">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path>
                        </svg>
                        Reset
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
