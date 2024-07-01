<div class="mb-4">
    <label class="block text-gray-700 text-sm font-medium mb-2">Pendidikan Terakhir:</label>
    <table id="education-table" class="w-full border-collapse border border-gray-300 rounded">
        <thead>
            <tr>
                <th class="p-2 border border-gray-300 text-left text-sm font-medium text-gray-700">Jenjang Pendidikan
                    Terakhir</th>
                <th class="p-2 border border-gray-300 text-left text-sm font-medium text-gray-700">Nama Institusi
                    Akademik</th>
                <th class="p-2 border border-gray-300 text-left text-sm font-medium text-gray-700">Jurusan</th>
                <th class="p-2 border border-gray-300 text-left text-sm font-medium text-gray-700">Tahun Lulus</th>
                <th class="p-2 border border-gray-300 text-left text-sm font-medium text-gray-700">IPK</th>
                <th class="p-2 border border-gray-300"></th> <!-- Kolom untuk tombol hapus -->
            </tr>
        </thead>
        <tbody id="education-tbody">
            @foreach ($educations as $index => $education)
                <tr>
                    <td class="p-2 border border-gray-300">
                        <select name="educations[{{ $index }}][jenjang_pendidikan]"
                            class="education-field shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm w-full p-2.5 border border-gray-300 rounded">
                            <option value="">Pilih Jenjang Pendidikan</option>
                            <option value="SMA/K" {{ $education['jenjang_pendidikan'] == 'SMA/K' ? 'selected' : '' }}>
                                SMA/K</option>
                            <option value="D3" {{ $education['jenjang_pendidikan'] == 'D3' ? 'selected' : '' }}>D3
                            </option>
                            <option value="S1/D4" {{ $education['jenjang_pendidikan'] == 'S1/D4' ? 'selected' : '' }}>
                                S1/D4</option>
                            <option value="S2" {{ $education['jenjang_pendidikan'] == 'S2' ? 'selected' : '' }}>S2
                            </option>
                            <option value="S3" {{ $education['jenjang_pendidikan'] == 'S3' ? 'selected' : '' }}>S3
                            </option>
                        </select>
                    </td>
                    <td class="p-2 border border-gray-300">
                        <input type="text" name="educations[{{ $index }}][institusi]"
                            value="{{ $education['institusi'] }}"
                            class="education-field shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm w-full p-2.5 border border-gray-300 rounded"
                            placeholder="Nama Institusi Akademik">
                    </td>
                    <td class="p-2 border border-gray-300">
                        <input type="text" name="educations[{{ $index }}][jurusan]"
                            value="{{ $education['jurusan'] }}"
                            class="education-field shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm w-full p-2.5 border border-gray-300 rounded"
                            placeholder="Jurusan">
                    </td>
                    <td class="p-2 border border-gray-300">
                        <input type="number" name="educations[{{ $index }}][tahun_lulus]"
                            value="{{ $education['tahun_lulus'] }}"
                            class="education-field shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm w-full p-2.5 border border-gray-300 rounded"
                            placeholder="Tahun Lulus">
                    </td>
                    <td class="p-2 border border-gray-300">
                        <input type="number" step="0.01" name="educations[{{ $index }}][ipk]"
                            value="{{ $education['ipk'] }}"
                            class="education-field shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm w-full p-2.5 border border-gray-300 rounded"
                            placeholder="IPK">
                    </td>
                    <td class="p-2 border border-gray-300">
                        <button type="button"
                            class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 rounded delete-row-btn">Hapus</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <button type="button" id="addRowEducation"
        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-4">
        Tambah Pendidikan
    </button>
</div>

<script>
    // Function to handle adding a new row to the education table
    function addEducationRow() {
        var newRow = `
            <tr>
                <td class="p-2 border border-gray-300">
                    <select name="new_educations[][jenjang_pendidikan]"
                        class="education-field shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm w-full p-2.5 border border-gray-300 rounded">
                        <option value="">Pilih Jenjang Pendidikan</option>
                        <option value="SMA/K">SMA/K</option>
                        <option value="D3">D3</option>
                        <option value="S1/D4">S1/D4</option>
                        <option value="S2">S2</option>
                        <option value="S3">S3</option>
                    </select>
                </td>
                <td class="p-2 border border-gray-300">
                    <input type="text" name="new_educations[][institusi]"
                        class="education-field shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm w-full p-2.5 border border-gray-300 rounded"
                        placeholder="Nama Institusi Akademik">
                </td>
                <td class="p-2 border border-gray-300">
                    <input type="text" name="new_educations[][jurusan]"
                        class="education-field shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm w-full p-2.5 border border-gray-300 rounded"
                        placeholder="Jurusan">
                </td>
                <td class="p-2 border border-gray-300">
                    <input type="number" name="new_educations[][tahun_lulus]"
                        class="education-field shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm w-full p-2.5 border border-gray-300 rounded"
                        placeholder="Tahun Lulus">
                </td>
                <td class="p-2 border border-gray-300">
                    <input type="number" step="0.01" name="new_educations[][ipk]"
                        class="education-field shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm w-full p-2.5 border border-gray-300 rounded"
                        placeholder="IPK">
                </td>
                <td class="p-2 border border-gray-300">
                    <button type="button" class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 rounded delete-row-btn">Hapus</button>
                </td>
            </tr>
        `;
        $('#education-tbody').append(newRow);
    }

    // Event listener for adding a new row to the education table
    $('#addRowEducation').click(function() {
        addEducationRow();
    });

    // Event delegation for deleting rows
    $('#education-table').on('click', '.delete-row-btn', function() {
        $(this).closest('tr').remove();
    });
</script>
