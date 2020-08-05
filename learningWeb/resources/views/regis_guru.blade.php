<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
        <title>Tambah data guru</title>
    </head>
    <body>
        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                Tambah data guru - <strong>Aktif</strong> - 
                </div>
                <div class="card-body">
                    <a href="/admin/guru" class="btn btn-primary">Kembali</a>
                    <br/>
                    <br/>
                    
                    <form method="post" action="/guru/store">

                        {{ csrf_field() }}

                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" name="name" class="form-control" placeholder="Nama guru ..">

                            @if($errors->has('name'))
                                <div class="text-danger">
                                    {{ $errors->first('name')}}
                                </div>
                            @endif

                        </div>

                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control" placeholder="********">

                            @if($errors->has('password'))
                                <div class="text-danger">
                                    {{ $errors->first('password')}}
                                </div>
                            @endif

                        </div>

                        <div class="form-group">
                            <label>ID Sekolah</label>
                            <textarea name="sekolah_id" class="form-control" placeholder="1"></textarea>

                             @if($errors->has('sekolah_id'))
                                <div class="text-danger">
                                    {{ $errors->first('sekolah_id')}}
                                </div>
                            @endif

                        </div>

                        <div class="form-group">
                            <label>ID Kelas</label>
                            <textarea name="kelas_id" class="form-control" placeholder="2"></textarea>

                             @if($errors->has('kelas_id'))
                                <div class="text-danger">
                                    {{ $errors->first('kelas_id')}}
                                </div>
                            @endif

                        </div>

                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="Simpan">
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </body>
</html>