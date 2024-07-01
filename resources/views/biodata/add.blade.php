<div class="container mx-auto p-6">
    <div class="bg-white p-8 rounded-lg shadow-lg">
        <h2 class="text-2xl font-bold mb-6">Tambah Biodata</h2>
        <form id="biodataForm">
            <!-- Biodata fields -->
            <h3 class="text-xl font-semibold mb-4">Biodata</h3>
            <div class="mb-4">
                <label for="posisi_yang_dilamar" class="block text-gray-700">Posisi yang Dilamar</label>
                <input type="text" id="posisi_yang_dilamar" class="w-full p-2 border border-gray-300 rounded mt-1">
            </div>
            <div class="mb-4">
                <label for="nama" class="block text-gray-700">Nama</label>
                <input type="text" id="nama" class="w-full p-2 border border-gray-300 rounded mt-1">
            </div>
            <div class="mb-4">
                <label for="tempat_tanggal_lahir" class="block text-gray-700">Tempat, Tanggal Lahir</label>
                <input type="text" id="tempat_tanggal_lahir" class="w-full p-2 border border-gray-300 rounded mt-1">
            </div>
            <div class="mb-4">
                <label for="jenis_kelamin" class="block text-gray-700">Jenis Kelamin</label>
                <input type="text" id="jenis_kelamin" class="w-full p-2 border border-gray-300 rounded mt-1">
            </div>
            <div class="mb-4">
                <label for="agama" class="block text-gray-700">Agama</label>
                <input type="text" id="agama" class="w-full p-2 border border-gray-300 rounded mt-1">
            </div>
            <div class="mb-4">
                <label for="golongan_darah" class="block text-gray-700">Golongan Darah</label>
                <input type="text" id="golongan_darah" class="w-full p-2 border border-gray-300 rounded mt-1">
            </div>
            <div class="mb-4">
                <label for="status" class="block text-gray-700">Status</label>
                <input type="text" id="status" class="w-full p-2 border border-gray-300 rounded mt-1">
            </div>
            <div class="mb-4">
                <label for="alamat_ktp" class="block text-gray-700">Alamat KTP</label>
                <input type="text" id="alamat_ktp" class="w-full p-2 border border-gray-300 rounded mt-1">
            </div>
            <div class="mb-4">
                <label for="alamat_tinggal" class="block text-gray-700">Alamat Tinggal</label>
                <input type="text" id="alamat_tinggal" class="w-full p-2 border border-gray-300 rounded mt-1">
            </div>
            <div class="mb-4">
                <label for="email" class="block text-gray-700">Email</label>
                <input type="email" id="email" class="w-full p-2 border border-gray-300 rounded mt-1">
            </div>
            <div class="mb-4">
                <label for="no_telp" class="block text-gray-700">No. Telp</label>
                <input type="text" id="no_telp" class="w-full p-2 border border-gray-300 rounded mt-1">
            </div>
            <div class="mb-4">
                <label for="nama_orang_terdekat" class="block text-gray-700">Nama Orang Terdekat</label>
                <input type="text" id="nama_orang_terdekat" class="w-full p-2 border border-gray-300 rounded mt-1">
            </div>
            <div class="mb-4">
                <label for="no_hp_orang_terdekat" class="block text-gray-700">No. HP Orang Terdekat</label>
                <input type="text" id="no_hp_orang_terdekat" class="w-full p-2 border border-gray-300 rounded mt-1">
            </div>
            <h3 class="text-xl font-semibold mb-4">Riwayat Pendidikan</h3>
            <div id="pendidikanWrapper" class="mb-4">
                <div class="pendidikanEntry mb-2">
                    <input type="text" placeholder="Jenjang"
                        class="w-full p-2 border border-gray-300 rounded mt-1 pendidikanJenjang">
                    <input type="text" placeholder="Nama Institusi"
                        class="w-full p-2 border border-gray-300 rounded mt-1 pendidikanInstitusi">
                    <input type="text" placeholder="Jurusan"
                        class="w-full p-2 border border-gray-300 rounded mt-1 pendidikanJurusan">
                    <input type="text" placeholder="Tahun Lulus"
                        class="w-full p-2 border border-gray-300 rounded mt-1 pendidikanTahun">
                    <input type="text" placeholder="IPK"
                        class="w-full p-2 border border-gray-300 rounded mt-1 pendidikanIPK">
                </div>
            </div>
            <button type="button" onclick="addPendidikan()" class="bg-green-500 text-white py-2 px-4 rounded">Tambah
                Pendidikan</button>

            <h3 class="text-xl font-semibold mb-4">Riwayat Training</h3>
            <div id="trainingWrapper" class="mb-4">
                <div class="trainingEntry mb-2">
                    <input type="text" placeholder="Nama Kursus"
                        class="w-full p-2 border border-gray-300 rounded mt-1 trainingNama">
                    <input type="text" placeholder="Sertifikat"
                        class="w-full p-2 border border-gray-300 rounded mt-1 trainingSertifikat">
                    <input type="text" placeholder="Tahun"
                        class="w-full p-2 border border-gray-300 rounded mt-1 trainingTahun">
                </div>
            </div>
            <button type="button" onclick="addTraining()" class="bg-green-500 text-white py-2 px-4 rounded">Tambah
                Training</button>

            <h3 class="text-xl font-semibold mb-4">Riwayat Pekerjaan</h3>
            <div id="pekerjaanWrapper" class="mb-4">
                <div class="pekerjaanEntry mb-2">
                    <input type="text" placeholder="Nama Perusahaan"
                        class="w-full p-2 border border-gray-300 rounded mt-1 pekerjaanPerusahaan">
                    <input type="text" placeholder="Posisi Terakhir"
                        class="w-full p-2 border border-gray-300 rounded mt-1 pekerjaanPosisi">
                    <input type="text" placeholder="Pendapatan Terakhir"
                        class="w-full p-2 border border-gray-300 rounded mt-1 pekerjaanPendapatan">
                    <input type="text" placeholder="Tahun"
                        class="w-full p-2 border border-gray-300 rounded mt-1 pekerjaanTahun">
                </div>
            </div>
            <button type="button" onclick="addPekerjaan()" class="bg-green-500 text-white py-2 px-4 rounded">Tambah
                Pekerjaan</button>

            <div class="mb-4">
                <label for="bersedia_ditempatkan" class="block text-gray-700">Bersedia Ditempatkan</label>
                <input type="text" id="bersedia_ditempatkan"
                    class="w-full p-2 border border-gray-300 rounded mt-1">
            </div>
            <div class="mb-4">
                <label for="penghasilan_diharapkan" class="block text-gray-700">Penghasilan Diharapkan</label>
                <input type="text" id="penghasilan_diharapkan"
                    class="w-full p-2 border border-gray-300 rounded mt-1">
            </div>
            <div class="mb-4">
                <label for="skill" class="block text-gray-700">Skill</label>
                <input type="text" id="skill" class="w-full p-2 border border-gray-300 rounded mt-1">
            </div>
            <button type="submit" class="w-full bg-blue-500 text-white py-2 rounded-lg">Submit</button>
        </form>
    </div>
</div>



<script>
    function addPendidikan() {
        let wrapper = document.getElementById('pendidikanWrapper');
        wrapper.insertAdjacentHTML('beforeend', <
            div class = "pendidikanEntry mb-2" >
            <
            input type = "text"
            placeholder = "Jenjang"
            class = "w-full p-2 border border-gray-300 rounded mt-1 pendidikanJenjang" >
            <
            input type = "text"
            placeholder = "Nama Institusi"
            class = "w-full p-2 border border-gray-300 rounded mt-1 pendidikanInstitusi" >
            <
            input type = "text"
            placeholder = "Jurusan"
            class = "w-full p-2 border border-gray-300 rounded mt-1 pendidikanJurusan" >
            <
            input type = "text"
            placeholder = "Tahun Lulus"
            class = "w-full p-2 border border-gray-300 rounded mt-1 pendidikanTahun" >
            <
            input type = "text"
            placeholder = "IPK"
            class = "w-full p-2 border border-gray-300 rounded mt-1 pendidikanIPK" >
            <
            /div>
        );
    }

    function addTraining() {
        let wrapper = document.getElementById('trainingWrapper');
        wrapper.insertAdjacentHTML('beforeend', <
            div class = "trainingEntry mb-2" >
            <
            input type = "text"
            placeholder = "Nama Kursus"
            class = "w-full p-2 border border-gray-300 rounded mt-1 trainingNama" >
            <
            input type = "text"
            placeholder = "Sertifikat"
            class = "w-full p-2 border border-gray-300 rounded mt-1 trainingSertifikat" >
            <
            input type = "text"
            placeholder = "Tahun"
            class = "w-full p-2 border border-gray-300 rounded mt-1 trainingTahun" >
            <
            /div>
        );
    }

    function addPekerjaan() {
        let wrapper = document.getElementById('pekerjaanWrapper');
        wrapper.insertAdjacentHTML('beforeend', <
            div class = "pekerjaanEntry mb-2" >
            <
            input type = "text"
            placeholder = "Nama Perusahaan"
            class = "w-full p-2 border border-gray-300 rounded mt-1 pekerjaanPerusahaan" >
            <
            input type = "text"
            placeholder = "Posisi Terakhir"
            class = "w-full p-2 border border-gray-300 rounded mt-1 pekerjaanPosisi" >
            <
            input type = "text"
            placeholder = "Pendapatan Terakhir"
            class = "w-full p-2 border border-gray-300 rounded mt-1 pekerjaanPendapatan" >
            <
            input type = "text"
            placeholder = "Tahun"
            class = "w-full p-2 border border-gray-300 rounded mt-1 pekerjaanTahun" >
            <
            /div>
        );
    }

    document.getElementById('biodataForm').addEventListener('submit', async function(event) {
        event.preventDefault();

        let pendidikanEntries = Array.from(document.querySelectorAll('.pendidikanEntry')).map(entry => ({
            jenjang: entry.querySelector('.pendidikanJenjang').value,
            institusi: entry.querySelector('.pendidikanInstitusi').value,
            jurusan: entry.querySelector('.pendidikanJurusan').value,
            tahun: entry.querySelector('.pendidikanTahun').value,
            ipk: entry.querySelector('.pendidikanIPK').value
        }));

        let trainingEntries = Array.from(document.querySelectorAll('.trainingEntry')).map(entry => ({
            nama: entry.querySelector('.trainingNama').value,
            sertifikat: entry.querySelector('.trainingSertifikat').value,
            tahun: entry.querySelector('.trainingTahun').value
        }));

        let pekerjaanEntries = Array.from(document.querySelectorAll('.pekerjaanEntry')).map(entry => ({
            perusahaan: entry.querySelector('.pekerjaanPerusahaan').value,
            posisi: entry.querySelector('.pekerjaanPosisi').value,
            pendapatan: entry.querySelector('.pekerjaanPendapatan').value,
            tahun: entry.querySelector('.pekerjaanTahun').value
        }));

        let formData = {
            posisi_yang_dilamar: document.getElementById('posisi_yang_dilamar').value,
            nama: document.getElementById('nama').value,
            // Other biodata fields
            riwayat_pendidikan: pendidikanEntries,
            training: trainingEntries,
            riwayat_pekerjaan: pekerjaanEntries
        };

        let response = await fetch(
            'http://localhost:5000/api/biodata', { // Disesuaikan dengan endpoint Flask
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'Accept': 'application/json'
                },
                body: JSON.stringify(formData)
            });

        let result = await response.json();
        if (response.ok) {
            alert('Biodata berhasil ditambahkan!');
        } else {
            alert('Terjadi kesalahan: ' + result.message);
        }
    });
</script>

</body>

</html>
