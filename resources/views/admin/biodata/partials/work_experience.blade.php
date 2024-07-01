<div class="mb-4">
    <label class="block text-gray-700 text-sm font-medium mb-2">Riwayat Pekerjaan:</label>
    <table id="work-experience-table" class="w-full border-collapse border border-gray-300 rounded">
        <thead>
            <tr>
                <th class="p-2 border border-gray-300 text-left text-sm font-medium text-gray-700">Nama Perusahaan</th>
                <th class="p-2 border border-gray-300 text-left text-sm font-medium text-gray-700">Posisi Terakhir</th>
                <th class="p-2 border border-gray-300 text-left text-sm font-medium text-gray-700">Pendapatan Terakhir
                </th>
                <th class="p-2 border border-gray-300 text-left text-sm font-medium text-gray-700">Tahun</th>
                <th class="p-2 border border-gray-300"></th> <!-- Kolom untuk tombol hapus -->
            </tr>
        </thead>
        <tbody id="work-experience-tbody">
            @foreach ($experiences as $index => $experience)
                <tr>
                    <td class="p-2 border border-gray-300">
                        <input type="text" name="work_experiences[{{ $index }}][nama_perusahaan]"
                            value="{{ $experience['nama_perusahaan'] }}"
                            class="work-experience-field shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm w-full p-2.5 border border-gray-300 rounded"
                            placeholder="Nama Perusahaan">
                    </td>
                    <td class="p-2 border border-gray-300">
                        <input type="text" name="work_experiences[{{ $index }}][posisi_terakhir]"
                            value="{{ $experience['posisi_terakhir'] }}"
                            class="work-experience-field shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm w-full p-2.5 border border-gray-300 rounded"
                            placeholder="Posisi Terakhir">
                    </td>
                    <td class="p-2 border border-gray-300">
                        <input type="number" name="work_experiences[{{ $index }}][pendapatan_terakhir]"
                            value="{{ $experience['pendapatan_terakhir'] }}"
                            class="work-experience-field shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm w-full p-2.5 border border-gray-300 rounded"
                            placeholder="Pendapatan Terakhir">
                    </td>
                    <td class="p-2 border border-gray-300">
                        <input type="number" name="work_experiences[{{ $index }}][tahun]"
                            value="{{ $experience['tahun'] }}"
                            class="work-experience-field shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm w-full p-2.5 border border-gray-300 rounded"
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
    <button type="button" id="addRowWorkExperience"
        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-4">
        Tambah Pekerjaan
    </button>
</div>

<script>
    // Function to handle adding a new row to the work experience table
    function addWorkExperienceRow() {
        var newRow = `
            <tr>
                <td class="p-2 border border-gray-300">
                    <input type="text" name="new_work_experiences[][nama_perusahaan]"
                        class="work-experience-field shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm w-full p-2.5 border border-gray-300 rounded"
                        placeholder="Nama Perusahaan">
                </td>
                <td class="p-2 border border-gray-300">
                    <input type="text" name="new_work_experiences[][posisi_terakhir]"
                        class="work-experience-field shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm w-full p-2.5 border border-gray-300 rounded"
                        placeholder="Posisi Terakhir">
                </td>
                <td class="p-2 border border-gray-300">
                    <input type="number" name="new_work_experiences[][pendapatan_terakhir]"
                        class="work-experience-field shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm w-full p-2.5 border border-gray-300 rounded"
                        placeholder="Pendapatan Terakhir">
                </td>
                <td class="p-2 border border-gray-300">
                    <input type="number" name="new_work_experiences[][tahun]"
                        class="work-experience-field shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm w-full p-2.5 border border-gray-300 rounded"
                        placeholder="Tahun">
                </td>
                <td class="p-2 border border-gray-300">
                    <button type="button" class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 rounded delete-row-btn">Hapus</button>
                </td>
            </tr>
        `;
        $('#work-experience-tbody').append(newRow);
    }

    // Event listener for adding a new row to the work experience table
    $('#addRowWorkExperience').click(function() {
        addWorkExperienceRow();
    });

    // Event delegation for deleting rows
    $('#work-experience-table').on('click', '.delete-row-btn', function() {
        $(this).closest('tr').remove();
    });
</script>
