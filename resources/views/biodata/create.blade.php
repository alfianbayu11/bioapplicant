<div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold text-center">Formulir Pendaftaran Pegawai</h1>

    <form method="POST" action="{{ route('biodata.store') }}">
        @csrf
        <div class="mb-4">
            <label for="posisi" class="block text-gray-700 text-sm font-medium mb-2">Posisi yang Dilamar:</label>
            <input type="text" id="posisi" name="posisi"
                class="shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm w-full p-2.5 border border-gray-300 rounded">
        </div>

        <div class="mb-4">
            <label for="nama" class="block text-gray-700 text-sm font-medium mb-2">Nama:</label>
            <input type="text" id="nama" name="nama"
                class="shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm w-full p-2.5 border border-gray-300 rounded">
        </div>

        <div class="mb-4">
            <label for="noKtp" class="block text-gray-700 text-sm font-medium mb-2">Nomor KTP:</label>
            <input type="text" id="noKtp" name="noKtp"
                class="shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm w-full p-2.5 border border-gray-300 rounded">
        </div>

        <div class="grid grid-cols-2 gap-4 mb-4">
            <div>
                <label for="tempatLahir" class="block text-gray-700 text-sm font-medium mb-2">Tempat Lahir:</label>
                <input type="text" id="tempatLahir" name="tempatLahir"
                    class="shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm w-full p-2.5 border border-gray-300 rounded">
            </div>

            <div>
                <label for="tanggalLahir" class="block text-gray-700 text-sm font-medium mb-2">Tanggal Lahir:</label>
                <input type="date" id="tanggalLahir" name="tanggalLahir"
                    class="shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm w-full p-2.5 border border-gray-300 rounded">
            </div>
        </div>

        <div class="mb-4">
            <label for="jenisKelamin" class="block text-gray-700 text-sm font-medium mb-2">Jenis Kelamin:</label>
            <select id="jenisKelamin" name="jenisKelamin"
                class="shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm w-full p-2.5 border border-gray-300 rounded">
                <option value="">Pilih Jenis Kelamin</option>
                <option value="Laki-laki">Laki-laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
        </div>
        <div class="mb-4">
            <label for="agama" class="block text-gray-700 text-sm font-medium mb-2">Agama:</label>
            <select id="agama" name="agama"
                class="shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm w-full p-2.5 border border-gray-300 rounded">
                <option value="">Pilih Agama</option>
                <option value="Islam">Islam</option>
                <option value="Kristen Protestan">Kristen Protestan</option>
                <option value="Katolik">Katolik</option>
                <option value="Hindu">Hindu</option>
                <option value="Buddha">Buddha</option>
                <option value="Khonghucu">Khonghucu</option>
            </select>
        </div>
        <div class="mb-4">
            <label for="golongan_darah" class="block text-gray-700 text-sm font-medium mb-2">Golongan Darah:</label>
            <select id="golongan_darah" name="golongan_darah"
                class="shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm w-full p-2.5 border border-gray-300 rounded">
                <option value="">Pilih Golongan Darah</option>
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="AB">AB</option>
                <option value="O">O</option>
            </select>
        </div>
        <div class="mb-4">
            <label for="status" class="block text-gray-700 text-sm font-medium mb-2">Status:</label>
            <select id="status" name="status"
                class="shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm w-full p-2.5 border border-gray-300 rounded">
                <option value="">Pilih Status</option>
                <option value="Menikah">Menikah</option>
                <option value="Belum Menikah">Belum Menikah</option>
                <option value="Cerai">Cerai</option>
            </select>
        </div>
        <div class="mb-4">
            <label for="alamatKtp" class="block text-gray-700 text-sm font-medium mb-2">Alamat KTP:</label>
            <textarea id="alamatKtp" name="alamatKtp" rows="3"
                class="shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm w-full p-2.5 border border-gray-300 rounded"></textarea>
        </div>

        <div class="mb-4">
            <label for="alamatTinggal" class="block text-gray-700 text-sm font-medium mb-2">Alamat Tinggal:</label>
            <textarea id="alamatTinggal" name="alamatTinggal" rows="3"
                class="shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm w-full p-2.5 border border-gray-300 rounded"></textarea>
        </div>

        <div class="mb-4">
            <label for="email" class="block text-gray-700 text-sm font-medium mb-2">Email:</label>
            <input type="email" id="email" name="email"
                class="shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm w-full p-2.5 border border-gray-300 rounded">
        </div>

        <div class="mb-4">
            <label for="noTelp" class="block text-gray-700 text-sm font-medium mb-2">Nomor Telepon:</label>
            <input type="tel" id="noTelp" name="noTelp"
                class="shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm w-full p-2.5 border border-gray-300 rounded">
        </div>

        <div class="mb-4">
            <label for="orangTerdekat" class="block text-gray-700 text-sm font-medium mb-2">Orang Terdekat yang Dapat
                Dihubungi:</label>
            <div class="flex items-center justify-between">
                <input type="text" id="orangTerdekat" name="orangTerdekat"
                    class="shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm w-full p-2.5 border border-gray-300 rounded mr-2"
                    placeholder="Nama">
                <input type="tel" id="noHpOrangTerdekat" name="noHpOrangTerdekat"
                    class="shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm w-full p-2.5 border border-gray-300 rounded"
                    placeholder="Nomor HP">
            </div>
        </div>
        @include('biodata.partials.education')

        @include('biodata.partials.training')

        @include('biodata.partials.work_experience')

        <div class="mb-4">
            <label for="skills" class="block text-gray-700 text-sm font-medium mb-2">Skill:</label>
            <textarea id="skills" name="skills" rows="5"
                class="shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm w-full p-2.5 border border-gray-300 rounded"
                placeholder="Masukkan keahlian dan keterampilan Anda, pisahkan dengan koma (contoh: HTML, CSS, JavaScript, Photoshop)"></textarea>
        </div>
        <div class="mb-4">
            <label for="placement" class="block text-gray-700 text-sm font-medium mb-2">Bersediakah ditempatkan di
                seluruh kantor perusahaan?</label>
            <div class="flex items-center">
                <input type="radio" id="placement_yes" name="placement" value="yes"
                    class="w-4 h-4 text-blue-500 border-gray-300">
                <label for="placement_yes" class="ml-2 text-gray-700 text-sm font-medium">Ya</label>
            </div>
            <div class="flex items-center">
                <input type="radio" id="placement_no" name="placement" value="no"
                    class="w-4 h-4 text-blue-500 border-gray-300">
                <label for="placement_no" class="ml-2 text-gray-700 text-sm font-medium">Tidak</label>
            </div>
        </div>
        <div class="mb-4">
            <label for="expected_salary" class="block text-gray-700 text-sm font-medium mb-2">Penghasilan yang
                diharapkan:</label>
            <div class="flex items-center">
                <span class="text-gray-700 text-sm font-medium mr-2">Rp.</span>
                <input type="number" id="expected_salary" name="expected_salary"
                    class="shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm w-2/5 p-2.5 border border-gray-300 rounded"
                    placeholder="Masukkan jumlah penghasilan yang diharapkan">
                <span class="text-gray-700 text-sm font-medium ml-2">/ bulan</span>
            </div>
        </div>

        <div class="flex items-center">
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                Submit
            </button>
        </div>
    </form>
</div>
