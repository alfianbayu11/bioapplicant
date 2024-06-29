<table id="biodataTable" class="display">
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
</script>
