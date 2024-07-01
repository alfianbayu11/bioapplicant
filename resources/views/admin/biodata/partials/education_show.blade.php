<div class="mb-4">
    <label class="block text-gray-700 text-sm font-medium mb-2">Pendidikan Terakhir:</label>
    <table class="w-full border-collapse border border-gray-300 rounded">
        <thead>
            <tr>
                <th class="p-2 border border-gray-300 text-left text-sm font-medium text-gray-700">Jenjang Pendidikan
                    Terakhir</th>
                <th class="p-2 border border-gray-300 text-left text-sm font-medium text-gray-700">Nama Institusi
                    Akademik</th>
                <th class="p-2 border border-gray-300 text-left text-sm font-medium text-gray-700">Jurusan</th>
                <th class="p-2 border border-gray-300 text-left text-sm font-medium text-gray-700">Tahun Lulus</th>
                <th class="p-2 border border-gray-300 text-left text-sm font-medium text-gray-700">IPK</th>
            </tr>
        </thead>
        <tbody id="education-tbody">
            @foreach ($educations as $index => $education)
                <tr>
                    <td class="p-2 border border-gray-300">
                        <select name="educations[{{ $index }}][jenjang_pendidikan]"
                            class="shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm w-full p-2.5 border border-gray-300 rounded"
                            disabled readonly>
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
                            class="shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm w-full p-2.5 border border-gray-300 rounded"
                            placeholder="Nama Institusi Akademik" disabled>
                    </td>
                    <td class="p-2 border border-gray-300">
                        <input type="text" name="educations[{{ $index }}][jurusan]"
                            value="{{ $education['jurusan'] }}"
                            class="shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm w-full p-2.5 border border-gray-300 rounded"
                            placeholder="Jurusan" disabled>
                    </td>
                    <td class="p-2 border border-gray-300">
                        <input type="number" name="educations[{{ $index }}][tahun_lulus]"
                            value="{{ $education['tahun_lulus'] }}"
                            class="shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm w-full p-2.5 border border-gray-300 rounded"
                            placeholder="Tahun Lulus" disabled>
                    </td>
                    <td class="p-2 border border-gray-300">
                        <input type="number" step="0.01" name="educations[{{ $index }}][ipk]"
                            value="{{ $education['ipk'] }}"
                            class="shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm w-full p-2.5 border border-gray-300 rounded"
                            placeholder="IPK" disabled>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
{{-- <button type="button" id="add-education-row"
        class="mt-2 px-4 py-2 bg-blue-500 text-white text-sm font-medium rounded hover:bg-blue-600 focus:outline-none focus:bg-blue-600"
        disabled>Tambah Pendidikan</button>
</div>

<script>
    // Disable add button
    document.getElementById('add-education-row').disabled = true;
</script> --}}
