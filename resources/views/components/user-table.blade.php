<div class="bg-white rounded-2xl shadow-lg overflow-hidden">
    <div class="overflow-x-auto">
        <table class="w-full text-sm">
            <thead class="bg-gray-50 border-b border-gray-200">
                <tr>
                    <th class="px-6 py-4 text-left font-semibold text-gray-600 uppercase tracking-wider">
                        NAMA
                    </th>
                    <th class="px-6 py-4 text-left font-semibold text-gray-600 uppercase tracking-wider">
                        NPM
                    </th>
                    <th class="px-6 py-4 text-left font-semibold text-gray-600 uppercase tracking-wider">
                        KELAS
                    </th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-100" id="userTableBody">
                @foreach ($users as $user)
                    <tr class="hover:bg-gray-50 transition-colors duration-200">
                        <!-- Kolom Nama -->
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <!-- Avatar -->
                                <div class="w-10 h-10 rounded-full flex items-center justify-center text-white font-semibold text-xs mr-4
                                    bg-gradient-to-r from-purple-400 to-blue-400 shadow-sm">
                                    {{ strtoupper(substr($user->nama, 0, 2)) }}
                                </div>
                                <!-- Nama -->
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
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</div>
