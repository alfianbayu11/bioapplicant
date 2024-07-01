<div class="mb-4">
    <label class="block text-gray-700 text-sm font-medium mb-2">Riwayat Pelatihan:</label>
    <table id="training-table" class="w-full border-collapse border border-gray-300 rounded">
        <thead>
            <tr>
                <th class="p-2 border border-gray-300 text-left text-sm font-medium text-gray-700">Nama Kursus/Seminar
                </th>
                <th class="p-2 border border-gray-300 text-left text-sm font-medium text-gray-700">Sertifikat</th>
                <th class="p-2 border border-gray-300 text-left text-sm font-medium text-gray-700">Tahun</th>
                <th class="p-2 border border-gray-300"></th> <!-- Kolom untuk tombol hapus -->
            </tr>
        </thead>
        <tbody id="training-tbody">
            @foreach ($trainings as $index => $training)
                <tr>
                    <td class="p-2 border border-gray-300">
                        <input type="text" name="trainings[{{ $index }}][nama_kursus]"
                            value="{{ $training['nama_kursus'] }}"
                            class="training-field shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm w-full p-2.5 border border-gray-300 rounded"
                            placeholder="Nama Kursus/Seminar">
                    </td>
                    <td class="p-2 border border-gray-300">
                        <select name="trainings[{{ $index }}][sertifikat]"
                            class="training-field shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm w-full p-2.5 border border-gray-300 rounded">
                            <option value="">Pilih Opsi</option>
                            <option value="Ada" {{ $training['sertifikat'] == 'Ada' ? 'selected' : '' }}>Ada</option>
                            <option value="Tidak" {{ $training['sertifikat'] == 'Tidak' ? 'selected' : '' }}>Tidak
                            </option>
                        </select>
                    </td>
                    <td class="p-2 border border-gray-300">
                        <input type="number" name="trainings[{{ $index }}][tahun]"
                            value="{{ $training['tahun'] }}"
                            class="training-field shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm w-full p-2.5 border border-gray-300 rounded"
                            placeholder="Tahun">
                    </td>
                    <td class="p-2 border border-gray-300">
                        <button type="button"
                            class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 rounded delete-row-btn">Hapus</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <button type="button" id="addRowTraining"
        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-4">
        Tambah Pelatihan
    </button>
</div>

<script>
    // Function to handle adding a new row to the training table
    function addTrainingRow() {
        var newRow = `
            <tr>
                <td class="p-2 border border-gray-300">
                    <input type="text" name="new_trainings[][nama_kursus]"
                        class="training-field shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm w-full p-2.5 border border-gray-300 rounded"
                        placeholder="Nama Kursus/Seminar">
                </td>
                <td class="p-2 border border-gray-300">
                    <select name="new_trainings[][sertifikat]"
                        class="training-field shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm w-full p-2.5 border border-gray-300 rounded">
                        <option value="">Pilih Opsi</option>
                        <option value="Ada">Ada</option>
                        <option value="Tidak">Tidak</option>
                    </select>
                </td>
                <td class="p-2 border border-gray-300">
                    <input type="number" name="new_trainings[][tahun]"
                        class="training-field shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm w-full p-2.5 border border-gray-300 rounded"
                        placeholder="Tahun">
                </td>
                <td class="p-2 border border-gray-300">
                    <button type="button" class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 rounded delete-row-btn">Hapus</button>
                </td>
            </tr>
        `;
        $('#training-tbody').append(newRow);
    }

    // Event listener for adding a new row to the training table
    $('#addRowTraining').click(function() {
        addTrainingRow();
    });

    // Event delegation for deleting rows
    $('#training-table').on('click', '.delete-row-btn', function() {
        $(this).closest('tr').remove();
    });
</script>
