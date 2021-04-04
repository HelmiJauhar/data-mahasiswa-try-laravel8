<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <title>Data Mahasiswa</title>
</head>
<body>
<div class="container text-center p-4">
    <div>
        <h1>Data Mahasiswa</h1>
    </div>

    <div>
        @isset($alert)
        @if($alert == "primary")
        <div class="alert alert-primary alert-dismissible fade show" role="alert">
        Data berhasil dibuat
        <button type="button" class="close" data-dismiss="alert">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
        @elseif($alert == "warning")
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
        Data berhasil dihapus
        <button type="button" class="close" data-dismiss="alert">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
        @endif
        @endisset
    </div>

    <div class="row">
        <div class="col-8"></div>
        <div class="col-4 pb-2">
            <form class="form-inline" method="get" action="/search">
                    <input class="form-control mr-sm-2" type="search" placeholder="Masukkan nama" aria-label="Search" name="search">
                    <button class="btn btn-outline-primary my-2 my-sm-0" id="search" type="submit">Search</button>
            </form>
        </div>
        
    </div>
    
    <div class="row">
        <div class="col-2">
        <div class="btn-group-vertical">
            <a class="btn btn-primary text-white pl-3 pr-3 mb-2" href="/index">Home</a>
            <a class="btn btn-primary text-white pl-3 pr-3 mb-2" href="/insert">Insert Data</a>
            <a class="btn btn-primary text-white pl-3 pr-3 mb-2" href="/delete">Delete Data</a>
            <a class="btn btn-primary text-white pl-3 pr-3 mb-2" href="/sortByNama">SortBy Nama</a>
            <a class="btn btn-primary text-white pl-3 pr-3 mb-2" href="/sortByIpk">SortBy Ipk</a>

        </div>
        </div>
        <div class="col-10">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>NIM</th>
                    <th>Tanggal Lahir</th>
                    <th>Jurusan</th>
                    <th>IPK</th>
                </tr>
            </thead>
            <tbody>
                @php
                $no = 1;
                @endphp
                @foreach($mahasiswas as $mhs)
                <tr>
                    <td>{{$no++}}</td>
                    <td>{{$mhs->nama}}</td>
                    <td>{{$mhs->nim}}</td>
                    <td>{{$mhs->tanggal_lahir}}</td>
                    <td>{{$mhs->jurusan}}</td>
                    <td>{{$mhs->ipk}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        </div>
    </div>
<
</div>
    <script>
    window.setTimeout(function() {
      $(".alert").fadeTo(500, 0).slideUp(500, function(){
        $(this).remove();
      });
    }, 3000);
    </script>
</body>
</html>