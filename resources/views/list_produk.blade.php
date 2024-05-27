{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>List Produk</title>
</head>
<body>
    <div class="mx-10 my-10">
        <table class="border border-collapse">
            <thead>
                <tr>
                    <th class="border p-2 border-slate-300">No</th>
                    <th class="border p-2 border-slate-300">Nama Produk</th>
                    <th class="border p-2 border-slate-300">Deskripsi Produk</th>
                    <th class="border p-2 border-slate-300">Harga Produk</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($nama as $index => $item)
                <tr>
                    <td class="border p-2 border-slate-300" align="center">{{$index + 1}}</td>
                    <td class="border p-2 border-slate-300">{{$item}}</td>
                    <td class="border p-2 border-slate-300">{{$desc[$index]}}</td>
                    <td class="border p-2 border-slate-300" align="right">{{$harga[$index]}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html> --}}

{{-- <div><h1>Input Produk</h1></div>
<form method="POST" action="{{ route('produk.simpan') }}">
    <table class="table">
        <tr>
            <td>Nama:</td>
            <td colspan="3"><input type="text" name="nama" id="nama" class="form-control"></td>
        </tr>
        <tr>
            <td>Deskripsi:</td>
            <td colspan="3"><textarea name="deskripsi" id="deskripsi" class="form-control"></textarea></td>
        </tr>
        <tr>
            <td>Harga:</td>
            <td><input type="number" name="harga" id="harga" class="form-control"></td>
            <td></td>
            <td></td>
        </tr>
    </table>
    <button type="submit" class="btn btn-primary">Simpan</button>
</form> --}}

<table>
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Produk</th>
            <th>Deskripsi Produk</th>
            <th>Harga Produk</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($nama as $index => $item)
        <tr>
            <td>{{ $index + 1 }}</td>
            <td>{{ $item }}</td>
            <td>{{ $desc[$index] }}</td>
            <td>{{ $harga[$index] }}</td>
            <td>
                <form action="{{ route('produk.delete', $id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Are you sure you want to delete {{ $item }}?')">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>