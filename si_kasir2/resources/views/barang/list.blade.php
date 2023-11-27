<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List Barang</title>

    <link href="{{ asset('boot/css/bootstrap.min.css') }}" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

</head>

<body>
    <h1 class="judul">List Barang</h1>
    <table class="table table-striped" border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Jumlah</th>
                <th>Harga</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @if (!empty($datas))
                @php
                    $no = 1;
                @endphp
                @foreach ($datas as $row)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $row['nama'] }}</td>
                        <td>{{ $row['jumlah'] }}</td>
                        <td>{{ number_format($row['harga']) }}</td>
                        <td>
                            <button onclick="hapusData('{{ $row['nama'] }}')">Hapus</button>
                        </td>
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>
    <script src="{{ asset('assets/js/function.js') }}"></script>
    </script>

    <script src="{{ asset('boot/js/bootstrap.bundle.min.js') }}"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
