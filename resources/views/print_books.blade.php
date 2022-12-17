<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Print buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <h1 class="text-center"> Data Buku</h1>
    <p class="text-center"> Laporan Data Buku Tahun 2022</p>
    <div class="container-fluid">
        <div class="card card-default">
            <div class="card-header">{{ __('Pengelolaan Buku') }}</div>
            <div class="card-body">
                <button class="btn btn-primary mb-4" data-toggle="modal" data-target="#tambahBukuModal"><i
                        class="fa fa-plus"></i>Tambah Data</button>
                <a href="{{ route('admin.print.books') }}" target="blank" class="btn btn-secondary mb-4"><i
                        class="fa fa-print"></i>Cetak PDF</a>
                <table id="table-data" class="table table-bordered">
                    <thead>
                        <tr class="text-center">
                            <th>NO</th>
                            <th>JUDUL</th>
                            <th>PENULIS</th>
                            <th>TAHUN</th>
                            <th>PENERBIT</th>
                            <th>COVER</th>
                            <th>AKSI</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $no=1; @endphp
                        @foreach ($books as $book)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $book->judul }}</td>
                                <td>{{ $book->penulis }}</td>
                                <td>{{ $book->tahun }}</td>
                                <td>{{ $book->penerbit }}</td>
                                <td>
                                    @if ($book->cover !== null)
                                        <img src="{{ public_path('storage/cover_buku/' .$book->cover) }}" width="80px"
                                            alt="">
                                    @else
                                        [Gambar tidak terssedia]
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>
