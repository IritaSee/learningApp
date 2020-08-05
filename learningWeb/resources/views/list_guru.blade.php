<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
        <title>List Guru Aktif</title>
    </head>
    <body>
        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                List Guru yang Aktif
                </div>
                <div class="card-body">
                    <a href="/guru/tambah" class="btn btn-primary">Input Guru Baru</a>
                    <br/>
                    <br/>
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nama</th>
                                <th>Sekolah </th>
                                <th>Kelas ID</th>
                                <th>OPSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($guru as $p)
                            <tr>    
                                <td>{{ $p->id }}</td>
                                <td>{{ $p->name }}</td>
                                <td>
                                {{$p->sekolah_id}}
                                </td>
                                <td>{{ $p->kelas_id }}</td>

                                <td>
                                    <a href="admin/guru/edit/{{ $p->id }}" class="btn btn-warning">Edit (belum dibuat)</a>
                                    <a href="admin/guru/hapus/{{ $p->id }}" class="btn btn-danger">Hapus(belum dibuat)</a>
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