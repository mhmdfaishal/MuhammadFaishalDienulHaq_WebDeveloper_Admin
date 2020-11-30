<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
        <link rel="stylesheet" href="/assets/style_update.css">
        <title>EDIT KAMPUS</title>
    </head>
    <body>
        <header>
            <h1>UPDATE DATA KAMPUS</h1>
        </header>
        @foreach($kampus as $campus)
        <form method="post" action="/campus/update">
        {{ csrf_field() }}
            <table>
                <tr> 
                    <td><label for="nama">Nama Kampus</label></td>
                    <td>
                        <input type="hidden" name="akronim_kampus" class="input-data" value="{{$campus->akronim_kampus}}">
                        <input type="text" name="nama" class="input-data" value="{{$campus->nama_kampus}}" readonly>
                    </td>
                </tr>
                <tr>
                    <td><label for="alamat_kampus">Alamat</label></td>
                    
                    <td><textarea name="alamat_kampus" id="alamat_kampus" class="input-data" cols="30" rows="10" >{{$campus->alamat_kampus}}</textarea></td>
                </tr>
                <tr>
                    <td><label for="akreditasi">Akreditasi</label></td>
                    <td><input type="text" name="akreditasi" class="input-data" value="{{$campus->akreditasi}}"></td>
                </tr>
                <tr>
                    <td><label for="peringkat_asia">Peringkat Asia</label></td>
                    <td><input type="text" name="peringkat_asia" class="input-data" value="{{$campus->peringkat_asia}}"></td>
                </tr>
                <tr>
                    <td><label for="peringkat_lokal">Peringkat Lokal</label></td>
                    <td><input type="text" name="peringkat_lokal" class="input-data" value="{{$campus->peringkat_lokal}}"></td>
                </tr>
            </table>
            <input type="submit" value="SIMPAN" class="btn-update" style="margin-left: 100px;">
        </form>
        @endforeach
        <button class="btn-back" style="margin-left: 400px;"><a href="/alldata" style="text-decoration: none; color: black;"><i class="fas fa-chevron-left"></i> KEMBALI</a></button>
    </body>
</html>