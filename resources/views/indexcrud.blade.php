<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="assets/style_index.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
        <title>DATA KAMPUS </title>
    </head>
    <body>
        <header>
            <div class="head">
                <h1>DATA KAMPUS</h1>
            </div>
        </header>
        <button  class="add-button"><a href="/campus/add_data"><i class="fas fa-plus"></i> TAMBAH</a></button><br>
        <table border="1">
            <tr>
                <th><label for="logo">Logo</label></th>
                <th><label for="nama">Nama</label></th>
                <th><label for="alamat">Alamat</label></th>
                <th><label for="akreditasi">Akreditasi</label></th>
                <th><label for="status">Status</label></th>
                <th><label for="peringkat_asia">Peringkat Asia</label></th>
                <th><label for="peringkat_lokal">Peringkat Lokal</label></th>
                <th><label for="action">ACTION</label></th>
            </tr>
                @foreach($datakampus as $daftarkampus)
                <tr>
                    <td><img src="assets/img/{{$daftarkampus->foto}}" alt=""></td>
                    <td>{{$daftarkampus->nama_kampus}}</td>
                    <td>{{$daftarkampus->alamat_kampus}}</td>
                    <td>{{$daftarkampus->akreditasi}}</td>
                    <td>{{$daftarkampus->status}}</td>
                    <td>{{$daftarkampus->peringkat_asia}}</td>
                    <td>{{$daftarkampus->peringkat_lokal}}</td>
                    <td>
                        <button><a href="/edit/{{$daftarkampus->akronim_kampus}}"><i class="fas fa-pencil-alt"></i> UPDATE</a></button>
                        <button><a href="/campus/delete/{{$daftarkampus->akronim_kampus}}"><i class="fas fa-trash-alt"></i> DELETE</a></button>
                    </td>
                </tr>
                @endforeach
        </table>
        <!-- <button type="submit" class="btn-back" style="margin-left: 400px; margin-top: -400px;"><a href="/" style="text-decoration: none; color: black;" ><i class="fas fa-chevron-left"></i> KEMBALI</a></button>    -->
    </body>
</html>