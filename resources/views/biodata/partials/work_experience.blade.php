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
            @if (old('work_experiences'))
                @foreach (old('work_experiences') as $index => $experience)
                    <tr>
                        <td class="p-2 border border-gray-300">
                            <input type="text" name="work_experiences[{{ $index }}][nama_perusahaan]"
                                value="{{ $experience['nama_perusahaan'] }}"
                                class="shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm w-full p-2.5 border border-gray-300 rounded"
                                placeholder="Nama Perusahaan">
                        </td>
                        <td class="p-2 border border-gray-300">
                            <input type="text" name="work_experiences[{{ $index }}][posisi_terakhir]"
                                value="{{ $experience['posisi_terakhir'] }}"
                                class="shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm w-full p-2.5 border border-gray-300 rounded"
                                placeholder="Posisi Terakhir">
                        </td>
                        <td class="p-2 border border-gray-300">
                            <input type="number" name="work_experiences[{{ $index }}][pendapatan_terakhir]"
                                value="{{ $experience['pendapatan_terakhir'] }}"
                                class="shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm w-full p-2.5 border border-gray-300 rounded"
                                placeholder="Pendapatan Terakhir">
                        </td>
                        <td class="p-2 border border-gray-300">
                            <input type="number" name="work_experiences[{{ $index }}][tahun]"
                                value="{{ $experience['tahun'] }}"
                                class="shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm w-full p-2.5 border border-gray-300 rounded"
                                placeholder="Tahun">
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td class="p-2 border border-gray-300">
                        <input type="text" name="work_experiences[0][nama_perusahaan]"
                            class="shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm w-full p-2.5 border border-gray-300 rounded"
                            placeholder="Nama Perusahaan">
                    </td>
                    <td class="p-2 border border-gray-300">
                        <input type="text" name="work_experiences[0][posisi_terakhir]"
                            class="shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm w-full p-2.5 border border-gray-300 rounded"
                            placeholder="Posisi Terakhir">
                    </td>
                    <td class="p-2 border border-gray-300">
                        <input type="number" name="work_experiences[0][pendapatan_terakhir]"
                            class="shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm w-full p-2.5 border border-gray-300 rounded"
                            placeholder="Pendapatan Terakhir">
                    </td>
                    <td class="p-2 border border-gray-300">
                        <input type="number" name="work_experiences[0][tahun]"
                            class="shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm w-full p-2.5 border border-gray-300 rounded"
                            placeholder="Tahun">
                    </td>
                </tr>
            @endif
        </tbody>
    </table>
    <button type="button" id="add-work-experience-row"
        class="mt-2 px-4 py-2 bg-blue-500 text-white text-sm font-medium rounded hover:bg-blue-600 focus:outline-none focus:bg-blue-600">Tambah
        Pekerjaan</button>
</div>

<script>
    document.getElementById('add-work-experience-row').addEventListener('click', function() {
        var tbody = document.getElementById('work-experience-tbody');
        var rowCount = tbody.rows.length;
        var row = document.createElement('tr');

        row.innerHTML = `
            <td class="p-2 border border-gray-300">
                <input type="text" name="work_experiences[${rowCount}][nama_perusahaan]"
                    class="shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm w-full p-2.5 border border-gray-300 rounded"
                    placeholder="Nama Perusahaan">
            </td>
            <td class="p-2 border border-gray-300">
                <input type="text" name="work_experiences[${rowCount}][posisi_terakhir]"
                    class="shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm w-full p-2.5 border border-gray-300 rounded"
                    placeholder="Posisi Terakhir">
            </td>
            <td class="p-2 border border-gray-300">
                <input type="number" name="work_experiences[${rowCount}][pendapatan_terakhir]"
                    class="shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm w-full p-2.5 border border-gray-300 rounded"
                    placeholder="Pendapatan Terakhir">
            </td>
            <td class="p-2 border border-gray-300">
                <input type="number" name="work_experiences[${rowCount}][tahun]"
                    class="shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm w-full p-2.5 border border-gray-300 rounded"
                    placeholder="Tahun">
            </td>
        `;

        tbody.appendChild(row);
    });
</script>
