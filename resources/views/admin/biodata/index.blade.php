{{-- <table id="biodataTable" class="display">
    <thead>
        <tr>
            <th>Nama</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>Posisi</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($biodataList as $biodata)
            <tr>
                <td>{{ $biodata->nama }}</td>
                <td>{{ $biodata->tempat_lahir }}</td>
                <td>{{ $biodata->tanggal_lahir }}</td>
                <td>{{ $biodata->posisi }}</td>
                <td>
                    <a href="{{ route('admin.biodata.show', $biodata->id) }}"
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">View</a>
                    <a href="{{ route('admin.biodata.edit', $biodata->id) }}"
                        class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded">Edit</a>
                    <form action="{{ route('biodata.destroy', $biodata->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit"
                            class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
</div>
<script>
    $(document).ready(function() {
        $('#biodataTable').DataTable();
    });
</script> --}}
<table id="biodata-table" class="table">
    <thead>
        <tr>
            <th>Nama</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>Posisi yang Dilamar</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <!-- Data akan di-load menggunakan JavaScript -->
    </tbody>
</table>
<!-- Pastikan Anda sudah memasang Axios atau gunakan CDN -->
<!-- Pastikan Anda sudah memasang Axios atau gunakan CDN -->
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const tableBody = document.querySelector('#biodata-table tbody');

        // Function to delete biodata by ID using Axios
        function deleteBiodata(id) {
            axios.delete(`http://127.0.0.1:5000/api/biodata/${id}`)
                .then(function(response) {
                    console.log('Biodata deleted successfully:', response.data.message);
                    // Refresh the table after deletion
                    fetchBiodata();
                })
                .catch(function(error) {
                    console.error('Error deleting biodata:', error);
                });
        }

        // Function to fetch and display all biodata using Axios
        function fetchBiodata() {
            axios.get('http://127.0.0.1:5000/api/biodata/')
                .then(function(response) {
                    const biodataList = response.data;
                    tableBody.innerHTML = ''; // Clear existing table rows

                    biodataList.forEach(function(biodata) {
                        const row = `
                            <tr>
                                <td>${biodata.nama}</td>
                                <td>${biodata.tempatLahir}</td>
                                <td>${biodata.tanggalLahir}</td>
                                <td>${biodata.posisi_yang_dilamar}</td>
                                <td>
                                    <div class="flex gap-2">
                                        <a class="btn btn-info btn-sm view-btn bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" data-id="${biodata.id}">View</a>
                                        <a class="btn btn-primary btn-sm edit-btn bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded" data-id="${biodata.id}">Edit</a>
                                        <a class="btn btn-danger btn-sm delete-btn bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded" data-id="${biodata.id}">Delete</a>
                                    </div>
                                </td>
                            </tr>
                        `;
                        tableBody.innerHTML += row;
                    });

                    // Attach event listeners to view buttons
                    document.querySelectorAll('.view-btn').forEach(button => {
                        button.addEventListener('click', function() {
                            const biodataId = this.getAttribute('data-id');
                            window.location.href = `/admin/biodata/${biodataId}`;
                        });
                    });

                    document.querySelectorAll('.edit-btn').forEach(button => {
                        button.addEventListener('click', function() {
                            const biodataId = this.getAttribute('data-id');
                            window.location.href = `/admin/biodata/${biodataId}/edit`;
                        });
                    });

                    // Attach event listeners to delete buttons
                    document.querySelectorAll('.delete-btn').forEach(button => {
                        button.addEventListener('click', function() {
                            const biodataId = this.getAttribute('data-id');
                            deleteBiodata(biodataId);
                        });
                    });
                })
                .catch(function(error) {
                    console.error('Error fetching data:', error);
                });
        }

        // Initial fetch of biodata on page load
        fetchBiodata();
    });
</script>


<script>
    $(document).ready(function() {
        $('#biodata-table').DataTable();
    });
</script>
