<div class="mb-4">
    <label class="block text-gray-700 text-sm font-medium mb-2">Riwayat Pelatihan:</label>
    <table class="w-full border-collapse border border-gray-300 rounded">
        <thead>
            <tr>
                <th class="p-2 border border-gray-300 text-left text-sm font-medium text-gray-700">Nama Kursus/Seminar
                </th>
                <th class="p-2 border border-gray-300 text-left text-sm font-medium text-gray-700">Sertifikat</th>
                <th class="p-2 border border-gray-300 text-left text-sm font-medium text-gray-700">Tahun</th>
            </tr>
        </thead>
        <tbody id="training-tbody">
            @if (old('trainings'))
                @foreach (old('trainings') as $index => $training)
                    <tr>
                        <td class="p-2 border border-gray-300">
                            <input type="text" name="trainings[{{ $index }}][nama_kursus]"
                                value="{{ $training['nama_kursus'] }}"
                                class="shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm w-full p-2.5 border border-gray-300 rounded"
                                placeholder="Nama Kursus/Seminar">
                        </td>
                        <td class="p-2 border border-gray-300">
                            <select name="trainings[{{ $index }}][sertifikat]"
                                class="shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm w-full p-2.5 border border-gray-300 rounded">
                                <option value="">Pilih Opsi</option>
                                <option value="Ada" {{ $training['sertifikat'] == 'Ada' ? 'selected' : '' }}>Ada
                                </option>
                                <option value="Tidak" {{ $training['sertifikat'] == 'Tidak' ? 'selected' : '' }}>Tidak
                                </option>
                            </select>
                        </td>
                        <td class="p-2 border border-gray-300">
                            <input type="number" name="trainings[{{ $index }}][tahun]"
                                value="{{ $training['tahun'] }}"
                                class="shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm w-full p-2.5 border border-gray-300 rounded"
                                placeholder="Tahun">
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td class="p-2 border border-gray-300">
                        <input type="text" name="trainings[0][nama_kursus]"
                            class="shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm w-full p-2.5 border border-gray-300 rounded"
                            placeholder="Nama Kursus/Seminar">
                    </td>
                    <td class="p-2 border border-gray-300">
                        <select name="trainings[0][sertifikat]"
                            class="shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm w-full p-2.5 border border-gray-300 rounded">
                            <option value="">Pilih Opsi</option>
                            <option value="Ada">Ada</option>
                            <option value="Tidak">Tidak</option>
                        </select>
                    </td>
                    <td class="p-2 border border-gray-300">
                        <input type="number" name="trainings[0][tahun]"
                            class="shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm w-full p-2.5 border border-gray-300 rounded"
                            placeholder="Tahun">
                    </td>
                </tr>
            @endif
        </tbody>
    </table>
    <button type="button" id="add-training-row"
        class="mt-2 px-4 py-2 bg-blue-500 text-white text-sm font-medium rounded hover:bg-blue-600 focus:outline-none focus:bg-blue-600">Tambah
        Pelatihan</button>
</div>

<script>
    document.getElementById('add-training-row').addEventListener('click', function() {
        var tbody = document.getElementById('training-tbody');
        var rowCount = tbody.rows.length;
        var row = document.createElement('tr');

        row.innerHTML = `
            <td class="p-2 border border-gray-300">
                <input type="text" name="trainings[${rowCount}][nama_kursus]"
                    class="shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm w-full p-2.5 border border-gray-300 rounded"
                    placeholder="Nama Kursus/Seminar">
            </td>
            <td class="p-2 border border-gray-300">
                <select name="trainings[${rowCount}][sertifikat]"
                    class="shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm w-full p-2.5 border border-gray-300 rounded">
                    <option value="">Pilih Opsi</option>
                    <option value="Ada">Ada</option>
                    <option value="Tidak">Tidak</option>
                </select>
            </td>
            <td class="p-2 border border-gray-300">
                <input type="number" name="trainings[${rowCount}][tahun]"
                    class="shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm w-full p-2.5 border border-gray-300 rounded"
                    placeholder="Tahun">
            </td>
        `;

        tbody.appendChild(row);
    });
</script>
