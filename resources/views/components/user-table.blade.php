<div class="bg-white rounded-2xl shadow-lg overflow-hidden">
    <div class="overflow-x-auto">
        <table class="w-full text-sm">
            <thead class="bg-gray-50 border-b border-gray-200">
    <tr>
        <th class="px-6 py-4 text-left font-semibold text-gray-600 uppercase tracking-wider">NAMA</th>
        <th class="px-6 py-4 text-left font-semibold text-gray-600 uppercase tracking-wider">NPM</th>
        <th class="px-6 py-4 text-left font-semibold text-gray-600 uppercase tracking-wider">KELAS</th>
        <th class="px-6 py-4 text-left font-semibold text-gray-600 uppercase tracking-wider">AKSI</th>
    </tr>
</thead>
<tbody class="bg-white divide-y divide-gray-100" id="userTableBody">
    @foreach ($users as $user)
        <tr class="hover:bg-gray-50 transition-colors duration-200">
            <!-- Kolom Nama -->
            <td class="px-6 py-4 whitespace-nowrap">
                <div class="flex items-center">
                    <div class="w-10 h-10 rounded-full flex items-center justify-center text-white font-semibold text-xs mr-4
                        bg-gradient-to-r from-purple-400 to-blue-400 shadow-sm">
                        {{ strtoupper(substr($user->nama, 0, 2)) }}
                    </div>
                    <span class="text-gray-900 font-medium">{{ $user->nama }}</span>
                </div>
            </td>

            <!-- Kolom NPM -->
            <td class="px-6 py-4 whitespace-nowrap">
                <span class="inline-block font-mono text-gray-800 bg-gray-100 px-3 py-1 rounded-md shadow-sm text-sm">
                    {{ $user->nim }}
                </span>
            </td>

            <!-- Kolom Kelas -->
            <td class="px-6 py-4 whitespace-nowrap">
                <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium shadow-sm
                    @if(Str::contains($user->kelas->nama_kelas, 'Informatika'))
                        bg-purple-100 text-purple-700
                    @elseif(Str::contains($user->kelas->nama_kelas, 'Sistem Informasi'))
                        bg-green-100 text-green-700
                    @elseif(Str::contains($user->kelas->nama_kelas, 'Komputer'))
                        bg-yellow-100 text-yellow-700
                    @else
                        bg-gray-100 text-gray-700
                    @endif">
                    {{ $user->kelas->nama_kelas }}
                </span>
            </td>

            <!-- Kolom Aksi -->
            <td class="px-6 py-4 whitespace-nowrap">
                <div class="flex space-x-2">
                    <!-- Tombol Edit -->
                    <a href="{{ route('user.edit', $user->id) }}"
   class="group flex items-center gap-2 px-3 py-1.5 bg-blue-500 text-white text-xs font-medium rounded-md 
          shadow-sm hover:bg-blue-600 transition-all duration-300 ease-out hover:shadow-md hover:scale-[1.03]">
    <svg class="h-4 w-4 text-white group-hover:rotate-3 transition-transform" fill="currentColor" viewBox="0 0 20 20">
        <path d="M13.586 3.586a2 2 0 112.828 2.828L8.414 14.414a2 2 0 01-.707.464l-3 1a1 1 0 01-1.272-1.272l1-3a2 2 0 01.464-.707l8-8zM12 5l-8 8-.293.707L3 14l.293-.707L11 5h1z" />
    </svg>
    <span>Edit</span>
</a>


                    <!-- Tombol Delete -->
<form action="{{ route('user.destroy', $user->id) }}" method="POST" class="inline delete-form">
    @csrf
    @method('DELETE')
    <button type="button"
            onclick="confirmDelete(this)"
            class="group flex items-center gap-2 px-3 py-1.5 bg-red-500 text-white text-xs font-medium rounded-md 
                   shadow-sm hover:bg-red-600 transition-all duration-300 ease-out hover:shadow-md hover:scale-[1.03]">
        <svg class="h-4 w-4 text-white group-hover:rotate-12 transition-transform" fill="currentColor" viewBox="0 0 20 20">
            <path fill-rule="evenodd"
                  d="M6 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm4 0a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-3H5V4h10v1zm-3-2a2 2 0 00-2-2H8a2 2 0 00-2 2H3v2h14V3h-3z"
                  clip-rule="evenodd" />
        </svg>
        <span>Delete</span>
    </button>
</form>


                </div>
            </td>
        </tr>
    @endforeach
</tbody>

        </table>
    </div>

</div>
