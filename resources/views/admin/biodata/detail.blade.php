<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard Admin') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="container mx-auto px-4 py-8">
                        <h1 class="text-3xl font-bold text-center">Detail Biodata Pegawai</h1>

                        <form id="formBiodata">
                            <div class="mb-4">
                                <label for="posisi" class="block text-gray-700 text-sm font-medium mb-2">Posisi yang
                                    Dilamar:</label>
                                <input type="text" id="posisi" name="posisi"
                                    class="shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm w-full p-2.5 border border-gray-300 rounded"
                                    readonly>
                            </div>

                            <div class="mb-4">
                                <label for="nama" class="block text-gray-700 text-sm font-medium mb-2">Nama:</label>
                                <input type="text" id="nama" name="nama"
                                    class="shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm w-full p-2.5 border border-gray-300 rounded"
                                    readonly>
                            </div>

                            <div class="mb-4">
                                <label for="noKtp" class="block text-gray-700 text-sm font-medium mb-2">Nomor
                                    KTP:</label>
                                <input type="text" id="noKtp" name="noKtp"
                                    class="shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm w-full p-2.5 border border-gray-300 rounded"
                                    readonly>
                            </div>

                            <div class="grid grid-cols-2 gap-4 mb-4">
                                <div>
                                    <label for="tempatLahir" class="block text-gray-700 text-sm font-medium mb-2">Tempat
                                        Lahir:</label>
                                    <input type="text" id="tempatLahir" name="tempatLahir"
                                        class="shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm w-full p-2.5 border border-gray-300 rounded"
                                        readonly>
                                </div>

                                <div>
                                    <label for="tanggalLahir"
                                        class="block text-gray-700 text-sm font-medium mb-2">Tanggal Lahir:</label>
                                    <input type="date" id="tanggalLahir" name="tanggalLahir"
                                        class="shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm w-full p-2.5 border border-gray-300 rounded"
                                        readonly>
                                </div>
                            </div>

                            <div class="mb-4">
                                <label for="jenisKelamin" class="block text-gray-700 text-sm font-medium mb-2">Jenis
                                    Kelamin:</label>
                                <select id="jenisKelamin" name="jenisKelamin"
                                    class="shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm w-full p-2.5 border border-gray-300 rounded"
                                    readonly>
                                    <option value="">Pilih Jenis Kelamin</option>
                                    <option value="Laki-laki">Laki-laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>

                            <div class="mb-4">
                                <label for="agama"
                                    class="block text-gray-700 text-sm font-medium mb-2">Agama:</label>
                                <select id="agama" name="agama"
                                    class="shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm w-full p-2.5 border border-gray-300 rounded"
                                    readonly>
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
                                <label for="golongan_darah"
                                    class="block text-gray-700 text-sm font-medium mb-2">Golongan Darah:</label>
                                <select id="golongan_darah" name="golongan_darah"
                                    class="shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm w-full p-2.5 border border-gray-300 rounded"
                                    readonly>
                                    <option value="">Pilih Golongan Darah</option>
                                    <option value="A">A</option>
                                    <option value="B">B</option>
                                    <option value="AB">AB</option>
                                    <option value="O">O</option>
                                </select>
                            </div>

                            <div class="mb-4">
                                <label for="status"
                                    class="block text-gray-700 text-sm font-medium mb-2">Status:</label>
                                <select id="status" name="status"
                                    class="shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm w-full p-2.5 border border-gray-300 rounded"
                                    readonly>
                                    <option value="">Pilih Status</option>
                                    <option value="Menikah">Menikah</option>
                                    <option value="Belum Menikah">Belum Menikah</option>
                                    <option value="Cerai">Cerai</option>
                                </select>
                            </div>

                            <div class="mb-4">
                                <label for="alamatKtp" class="block text-gray-700 text-sm font-medium mb-2">Alamat
                                    KTP:</label>
                                <textarea id="alamatKtp" name="alamatKtp" rows="3"
                                    class="shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm w-full p-2.5 border border-gray-300 rounded"
                                    readonly></textarea>
                            </div>

                            <div class="mb-4">
                                <label for="alamatTinggal" class="block text-gray-700 text-sm font-medium mb-2">Alamat
                                    Tinggal:</label>
                                <textarea id="alamatTinggal" name="alamatTinggal" rows="3"
                                    class="shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm w-full p-2.5 border border-gray-300 rounded"
                                    readonly></textarea>
                            </div>

                            <div class="mb-4">
                                <label for="email"
                                    class="block text-gray-700 text-sm font-medium mb-2">Email:</label>
                                <input type="email" id="email" name="email"
                                    class="shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm w-full p-2.5 border border-gray-300 rounded"
                                    readonly>
                            </div>

                            <div class="mb-4">
                                <label for="noTelp" class="block text-gray-700 text-sm font-medium mb-2">Nomor
                                    Telepon:</label>
                                <input type="tel" id="noTelp" name="noTelp"
                                    class="shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm w-full p-2.5 border border-gray-300 rounded"
                                    readonly>
                            </div>

                            <div class="mb-4">
                                <label for="orangTerdekat" class="block text-gray-700 text-sm font-medium mb-2">Orang
                                    Terdekat yang Dapat
                                    Dihubungi:</label>
                                <div class="flex items-center justify-between">
                                    <input type="text" id="orangTerdekat" name="orangTerdekat"
                                        class="shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm w-full p-2.5 border border-gray-300 rounded mr-2"
                                        placeholder="Nama" readonly>
                                    <input type="tel" id="noHpOrangTerdekat" name="noHpOrangTerdekat"
                                        class="shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm w-full p-2.5 border border-gray-300 rounded"
                                        placeholder="Nomor HP" readonly>
                                </div>
                            </div>

                            <div id="educationContainer" class="mb-4"></div>

                            <!-- Training Section -->
                            <div id="trainingContainer" class="mb-4"></div>

                            <!-- Work Experience Section -->
                            <div id="workExperienceContainer" class="mb-4"></div>

                            {{-- @include('biodata.partials.education')

                            @include('biodata.partials.training')

                            @include('biodata.partials.work_experience') --}}

                            <div class="mb-4">
                                <label for="skills"
                                    class="block text-gray-700 text-sm font-medium mb-2">Skill:</label>
                                <textarea id="skills" name="skills" rows="5"
                                    class="shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm w-full p-2.5 border border-gray-300 rounded"
                                    placeholder="Masukkan keahlian dan keterampilan Anda, pisahkan dengan koma (contoh: HTML, CSS, JavaScript, Photoshop)"
                                    readonly></textarea>
                            </div>

                            <div class="mb-4">
                                <label for="placement"
                                    class="block text-gray-700 text-sm font-medium mb-2">Bersediakah ditempatkan di
                                    seluruh kantor perusahaan?</label>
                                <div class="flex items-center">
                                    <input type="radio" id="placement_yes" name="placement" value="yes"
                                        class="w-4 h-4 text-blue-500 border-gray-300" readonly>
                                    <label for="placement_yes"
                                        class="ml-2 text-sm font-medium text-gray-700">Ya</label>
                                </div>
                                <div class="flex items-center mt-2">
                                    <input type="radio" id="placement_no" name="placement" value="no"
                                        class="w-4 h-4 text-blue-500 border-gray-300" readonly>
                                    <label for="placement_no"
                                        class="ml-2 text-sm font-medium text-gray-700">Tidak</label>
                                </div>
                            </div>

                            <div class="mb-4">
                                <label for="expected_salary"
                                    class="block text-gray-700 text-sm font-medium mb-2">Penghasilan yang
                                    diharapkan:</label>
                                <div class="flex items-center">
                                    <span class="text-gray-700 text-sm font-medium mr-2">Rp.</span>
                                    <input type="number" id="expected_salary" name="expected_salary"
                                        class="shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm w-2/5 p-2.5 border border-gray-300 rounded"
                                        placeholder="Masukkan jumlah penghasilan yang diharapkan">
                                    <span class="text-gray-700 text-sm font-medium ml-2">/ bulan</span>
                                </div>
                            </div>
                        </form>
                    </div>
                    <script>
                        document.addEventListener('DOMContentLoaded', function() {
                            const biodataId = getBiodataIdFromURL();
                            fetch(`/api/biodata/${biodataId}`)
                                .then(response => response.json())
                                .then(data => {
                                    document.getElementById('posisi_yang_dilamar').value = data.posisi_yang_dilamar;
                                    document.getElementById('nama').value = data.nama;
                                    document.getElementById('noKtp').value = data.noKtp;
                                    document.getElementById('tempatLahir').value = data.tempatLahir;
                                    document.getElementById('tanggalLahir').value = data.tanggalLahir;
                                    document.getElementById('jenisKelamin').value = data.jenisKelamin;
                                    document.getElementById('agama').value = data.agama;
                                    document.getElementById('golongan_darah').value = data.golongan_darah;
                                    document.getElementById('status').value = data.status;
                                    document.getElementById('alamatKtp').value = data.alamatKtp;
                                    document.getElementById('alamatTinggal').value = data.alamatTinggal;
                                    document.getElementById('email').value = data.email;
                                    document.getElementById('noTelp').value = data.noTelp;
                                    document.getElementById('orangTerdekat').value = data.orangTerdekat;
                                    document.getElementById('noHpOrangTerdekat').value = data.noHpOrangTerdekat;
                                    document.getElementById('skills').value = data.skills;
                                    document.querySelector(`input[name="placement"][value="${data.placement}"]`).checked = true;
                                    document.getElementById('expected_salary').value = data.expected_salary;

                                    // Populate education, training, and work experience sections
                                    populateEducation(data.educations);
                                    populateTraining(data.trainings);
                                    populateWorkExperience(data.work_experiences);
                                })
                                .catch(error => console.error('Error fetching biodata:', error));
                        });

                        function populateEducation(education) {
                            const educationContainer = document.getElementById('educationContainer');
                            education.forEach((edu, index) => {
                                const eduDiv = document.createElement('div');
                                eduDiv.classList.add('mb-4');
                                eduDiv.innerHTML = `
            <label class="block text-gray-700 text-sm font-medium mb-2">Pendidikan ${index + 1}:</label>
            <input type="text" value="${edu.jenjang_pendidikan}" class="shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm w-full p-2.5 border border-gray-300 rounded mb-2" readonly>
            <input type="text" value="${edu.institusi}" class="shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm w-full p-2.5 border border-gray-300 rounded mb-2" readonly>
            <input type="text" value="${edu.jurusan}" class="shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm w-full p-2.5 border border-gray-300 rounded mb-2" readonly>
            <input type="text" value="${edu.tahun_lulus}" class="shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm w-full p-2.5 border border-gray-300 rounded mb-2" readonly>
            <input type="text" value="${edu.ipk}" class="shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm w-full p-2.5 border border-gray-300 rounded" readonly>
        `;
                                educationContainer.appendChild(eduDiv);
                            });
                        }

                        function populateTraining(training) {
                            const trainingContainer = document.getElementById('trainingContainer');
                            training.forEach((train, index) => {
                                const trainDiv = document.createElement('div');
                                trainDiv.classList.add('mb-4');
                                trainDiv.innerHTML = `
            <label class="block text-gray-700 text-sm font-medium mb-2">Pelatihan ${index + 1}:</label>
            <input type="text" value="${train.nama_kursus}" class="shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm w-full p-2.5 border border-gray-300 rounded mb-2" readonly>
            <input type="text" value="${train.sertifikat}" class="shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm w-full p-2.5 border border-gray-300 rounded mb-2" readonly>
            <input type="text" value="${train.tahun}" class="shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm w-full p-2.5 border border-gray-300 rounded" readonly>
        `;
                                trainingContainer.appendChild(trainDiv);
                            });
                        }

                        function populateWorkExperience(workExperience) {
                            const workExperienceContainer = document.getElementById('workExperienceContainer');
                            workExperience.forEach((work, index) => {
                                const workDiv = document.createElement('div');
                                workDiv.classList.add('mb-4');
                                workDiv.innerHTML = `
            <label class="block text-gray-700 text-sm font-medium mb-2">Pengalaman Kerja ${index + 1}:</label>
            <input type="text" value="${work.nama_perusahaan}" class="shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm w-full p-2.5 border border-gray-300 rounded mb-2" readonly>
            <input type="text" value="${work.posisi_terakhir}" class="shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm w-full p-2.5 border border-gray-300 rounded mb-2" readonly>
            <input type="text" value="${work.pendapatan_terakhir}" class="shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm w-full p-2.5 border border-gray-300 rounded mb-2" readonly>
            <input type="text" value="${work.tahun}" class="shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm w-full p-2.5 border border-gray-300 rounded" readonly>
        `;
                                workExperienceContainer.appendChild(workDiv);
                            });
                        }

                        function getBiodataIdFromURL() {
                            const urlParts = window.location.pathname.split('/');
                            return urlParts[urlParts.length - 1];
                        }
                    </script>



                </div>
            </div>
        </div>
</x-app-layout>
