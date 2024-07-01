<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard Admin') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="container mx-auto px-4 py-8">
                        <h1 class="text-3xl font-bold text-center">Edit Biodata Pelamar</h1>
                        <form action="{{ route('admin.biodata.update', ['id' => $biodata['id']]) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="mb-4">
                                <label for="posisi" class="block text-gray-700 text-sm font-medium mb-2">Posisi yang
                                    Dilamar:</label>
                                <input type="text" id="posisi_yang_dilamar" name="posisi_yang_dilamar"
                                    value="{{ $biodata['posisi_yang_dilamar'] }}"
                                    class="shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm w-full p-2.5 border border-gray-300 rounded">
                            </div>

                            <div class="mb-4">
                                <label for="nama" class="block text-gray-700 text-sm font-medium mb-2">Nama:</label>
                                <input type="text" id="nama" name="nama" value="{{ $biodata['nama'] }}"
                                    class="shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm w-full p-2.5 border border-gray-300 rounded">
                            </div>

                            <div class="mb-4">
                                <label for="noKtp" class="block text-gray-700 text-sm font-medium mb-2">Nomor
                                    KTP:</label>
                                <input type="text" id="noKtp" name="noKtp" value="{{ $biodata['noKtp'] }}"
                                    class="shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm w-full p-2.5 border border-gray-300 rounded">
                            </div>

                            <div class="grid grid-cols-2 gap-4 mb-4">
                                <div>
                                    <label for="tempatLahir" class="block text-gray-700 text-sm font-medium mb-2">Tempat
                                        Lahir:</label>
                                    <input type="text" id="tempatLahir" name="tempatLahir"
                                        value="{{ $biodata['tempatLahir'] }}"
                                        class="shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm w-full p-2.5 border border-gray-300 rounded">
                                </div>

                                <div>
                                    <label for="tanggalLahir"
                                        class="block text-gray-700 text-sm font-medium mb-2">Tanggal
                                        Lahir:</label>
                                    <input type="date" id="tanggalLahir" name="tanggalLahir"
                                        value="{{ $biodata['tanggalLahir'] }}"
                                        class="shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm w-full p-2.5 border border-gray-300 rounded">
                                </div>
                            </div>

                            <div class="mb-4">
                                <label for="jenisKelamin" class="block text-gray-700 text-sm font-medium mb-2">Jenis
                                    Kelamin:</label>
                                <input type="text" id="jenisKelamin" name="jenisKelamin"
                                    value="{{ $biodata['jenisKelamin'] }}"
                                    class="shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm w-full p-2.5 border border-gray-300 rounded">
                            </div>

                            <div class="mb-4">
                                <label for="agama"
                                    class="block text-gray-700 text-sm font-medium mb-2">Agama:</label>
                                <input type="text" id="agama" name="agama" value="{{ $biodata['agama'] }}"
                                    class="shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm w-full p-2.5 border border-gray-300 rounded">
                            </div>

                            <div class="mb-4">
                                <label for="golongan_darah"
                                    class="block text-gray-700 text-sm font-medium mb-2">Golongan
                                    Darah:</label>
                                <input type="text" id="golongan_darah" name="golongan_darah"
                                    value="{{ $biodata['golongan_darah'] }}"
                                    class="shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm w-full p-2.5 border border-gray-300 rounded">
                            </div>

                            <div class="mb-4">
                                <label for="status"
                                    class="block text-gray-700 text-sm font-medium mb-2">Status:</label>
                                <input type="text" id="status" name="status" value="{{ $biodata['status'] }}"
                                    class="shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm w-full p-2.5 border border-gray-300 rounded">
                            </div>

                            <div class="mb-4">
                                <label for="alamatKtp" class="block text-gray-700 text-sm font-medium mb-2">Alamat
                                    KTP:</label>
                                <textarea id="alamatKtp" name="alamatKtp" rows="3"
                                    class="shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm w-full p-2.5 border border-gray-300 rounded">{{ $biodata['alamatKtp'] }}</textarea>
                            </div>

                            <div class="mb-4">
                                <label for="alamatTinggal" class="block text-gray-700 text-sm font-medium mb-2">Alamat
                                    Tinggal:</label>
                                <textarea id="alamatTinggal" name="alamatTinggal" rows="3"
                                    class="shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm w-full p-2.5 border border-gray-300 rounded">{{ $biodata['alamatTinggal'] }}</textarea>
                            </div>

                            <div class="mb-4">
                                <label for="email"
                                    class="block text-gray-700 text-sm font-medium mb-2">Email:</label>
                                <input type="email" id="email" name="email" value="{{ $biodata['email'] }}"
                                    class="shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm w-full p-2.5 border border-gray-300 rounded">
                            </div>

                            <div class="mb-4">
                                <label for="noTelp" class="block text-gray-700 text-sm font-medium mb-2">Nomor
                                    Telepon:</label>
                                <input type="tel" id="noTelp" name="noTelp"
                                    value="{{ $biodata['noTelp'] }}"
                                    class="shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm w-full p-2.5 border border-gray-300 rounded">
                            </div>

                            <div class="mb-4">
                                <label for="orangTerdekat" class="block text-gray-700 text-sm font-medium mb-2">Orang
                                    Terdekat yang Dapat Dihubungi:</label>
                                <div class="flex items-center">
                                    <input type="text" id="orangTerdekat" name="orangTerdekat"
                                        value="{{ $biodata['orangTerdekat'] }}"
                                        class="shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm w-full p-2.5 border border-gray-300 rounded mr-2"
                                        placeholder="Nama">
                                    <input type="tel" id="noHpOrangTerdekat" name="noHpOrangTerdekat"
                                        value="{{ $biodata['noHpOrangTerdekat'] }}"
                                        class="shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm w-full p-2.5 border border-gray-300 rounded"
                                        placeholder="Nomor HP">
                                </div>
                            </div>

                            @include('admin.biodata.partials.education', [
                                'educations' => $biodata['educations'],
                            ])

                            @include('admin.biodata.partials.training', [
                                'trainings' => $biodata['trainings'],
                            ])

                            @include('admin.biodata.partials.work_experience', [
                                'experiences' => $biodata['work_experiences'],
                            ])

                            <div class="mb-4">
                                <label for="skills"
                                    class="block text-gray-700 text-sm font-medium mb-2">Skill:</label>
                                <textarea id="skills" name="skills" rows="5"
                                    class="shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm w-full p-2.5 border border-gray-300 rounded"
                                    placeholder="Masukkan keahlian dan keterampilan Anda, pisahkan dengan koma (contoh: HTML, CSS, JavaScript, Photoshop)">{{ $biodata['skills'] }}</textarea>
                            </div>

                            <div class="mb-4">
                                <label for="placement"
                                    class="block text-gray-700 text-sm font-medium mb-2">Bersediakah
                                    ditempatkan di seluruh kantor perusahaan?</label>
                                <div class="flex items-center">
                                    <input type="radio" id="placement_yes" name="placement" value="yes"
                                        {{ $biodata['placement'] == 'yes' ? 'checked' : '' }}
                                        class="w-4 h-4 text-blue-500 border-gray-300">
                                    <label for="placement_yes"
                                        class="ml-2 text-gray-700 text-sm font-medium">Ya</label>
                                </div>
                                <div class="flex items-center">
                                    <input type="radio" id="placement_no" name="placement" value="no"
                                        {{ $biodata['placement'] == 'no' ? 'checked' : '' }}
                                        class="w-4 h-4 text-blue-500 border-gray-300">
                                    <label for="placement_no"
                                        class="ml-2 text-gray-700 text-sm font-medium">Tidak</label>
                                </div>
                            </div>

                            <div class="mb-4">
                                <label for="expected_salary"
                                    class="block text-gray-700 text-sm font-medium mb-2">Penghasilan yang
                                    diharapkan:</label>
                                <div class="flex items-center">
                                    <span class="text-gray-700 text-sm font-medium mr-2">Rp.</span>
                                    <input type="number" id="expected_salary" name="expected_salary"
                                        value="{{ $biodata['expected_salary'] }}"
                                        class="shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm w-2/5 p-2.5 border border-gray-300 rounded"
                                        placeholder="Masukkan jumlah penghasilan yang diharapkan">
                                    <span class="text-gray-700 text-sm font-medium ml-2">/ bulan</span>
                                </div>
                            </div>

                            <div class="flex items-center">
                                <button type="submit"
                                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                    Update
                                </button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
    </div>
</x-app-layout>
