<html>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Harga</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $dataku)
                <tr>
                    <td>{{ $dataku['id'] }}</td>
                    <td>{{ $dataku['nama'] }}</td>
                    <td>{{ $dataku['harga'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</html>

{{-- <html>
    <div>
        <h1>List Barang</h1>
        <p>Kode Barang : {{$id}}</p>
        <p>Nama Barang : {{$nama}}</p>
    </div>
</html> --}}