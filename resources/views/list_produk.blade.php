<!DOCTYPE html>
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
</html>