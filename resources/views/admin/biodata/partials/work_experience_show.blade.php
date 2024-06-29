<div class="mb-4">
    <label class="block text-gray-700 text-sm font-medium mb-2">Riwayat Pekerjaan:</label>
    <table class="w-full border-collapse border border-gray-300 rounded">
        <thead>
            <tr>
                <th class="p-2 border border-gray-300 text-left text-sm font-medium text-gray-700">Nama Perusahaan</th>
                <th class="p-2 border border-gray-300 text-left text-sm font-medium text-gray-700">Posisi Terakhir</th>
                <th class="p-2 border border-gray-300 text-left text-sm font-medium text-gray-700">Pendapatan Terakhir
                </th>
                <th class="p-2 border border-gray-300 text-left text-sm font-medium text-gray-700">Tahun</th>
            </tr>
        </thead>
        <tbody id="work-experience-tbody">
            @foreach ($experiences as $index => $experience)
                <tr>
                    <td class="p-2 border border-gray-300">
                        <input type="text" name="work_experiences[{{ $index }}][nama_perusahaan]"
                            value="{{ $experience->nama_perusahaan }}"
                            class="shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm w-full p-2.5 border border-gray-300 rounded"
                            placeholder="Nama Perusahaan" readonly>
                    </td>
                    <td class="p-2 border border-gray-300">
                        <input type="text" name="work_experiences[{{ $index }}][posisi_terakhir]"
                            value="{{ $experience->posisi_terakhir }}"
                            class="shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm w-full p-2.5 border border-gray-300 rounded"
                            placeholder="Posisi Terakhir" readonly>
                    </td>
                    <td class="p-2 border border-gray-300">
                        <input type="number" name="work_experiences[{{ $index }}][pendapatan_terakhir]"
                            value="{{ $experience->pendapatan_terakhir }}"
                            class="shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm w-full p-2.5 border border-gray-300 rounded"
                            placeholder="Pendapatan Terakhir" readonly>
                    </td>
                    <td class="p-2 border border-gray-300">
                        <input type="number" name="work_experiences[{{ $index }}][tahun]"
                            value="{{ $experience->tahun }}"
                            class="shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm w-full p-2.5 border border-gray-300 rounded"
                            placeholder="Tahun" readonly>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{-- <button type="button" id="add-work-experience-row"
        class="mt-2 px-4 py-2 bg-blue-500 text-white text-sm font-medium rounded hover:bg-blue-600 focus:outline-none focus:bg-blue-600"
        disabled>Tambah Pekerjaan</button>
</div>

<script>
    // Disable add button
    document.getElementById('add-work-experience-row').disabled = true;
</script> --}}
