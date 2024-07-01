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
            @foreach ($trainings as $index => $training)
                <tr>
                    <td class="p-2 border border-gray-300">
                        <input type="text" name="trainings[{{ $index }}][nama_kursus]"
                            value="{{ $training['nama_kursus'] }}"
                            class="shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm w-full p-2.5 border border-gray-300 rounded"
                            placeholder="Nama Kursus/Seminar" readonly>
                    </td>
                    <td class="p-2 border border-gray-300">
                        <select name="trainings[{{ $index }}][sertifikat]"
                            class="shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm w-full p-2.5 border border-gray-300 rounded"
                            disabled>
                            <option value="">Pilih Opsi</option>
                            <option value="Ada" {{ $training['sertifikat'] == 'Ada' ? 'selected' : '' }}>Ada</option>
                            <option value="Tidak" {{ $training['sertifikat'] == 'Tidak' ? 'selected' : '' }}>Tidak
                            </option>
                        </select>
                    </td>
                    <td class="p-2 border border-gray-300">
                        <input type="number" name="trainings[{{ $index }}][tahun]"
                            value="{{ $training['tahun'] }}"
                            class="shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm w-full p-2.5 border border-gray-300 rounded"
                            placeholder="Tahun" readonly>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
