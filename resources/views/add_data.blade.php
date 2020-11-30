<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
	<link rel="stylesheet" href="/assets/style_add.css">
    <title>DATA KAMPUS</title>
</head>
<body>
    <header>
        <h2>TAMBAH DATA KAMPUS</h2>
    </header>
	
	<form action="/campus/save" method="POST" enctype="multipart/form-data">
	{{csrf_field()}}
		<table>
			<tr>			
				<td><label for="akronim">Akronim Kampus</label></td>
				<td><input type="text" name="akronim_kampus" class="input-data" required></td>
			</tr>
			<tr>
				<td><label for="nama">Nama Kampus</label></td>
				<td><input type="text" name="nama" class="input-data" required></td>
			</tr>
			<tr>
				<td><label for="alamat">Alamat Kampus</label></td>
				<td><textarea name="alamat_kampus" id="alamat_kampus" class="input-data" cols="30" rows="10"></textarea></td>
			</tr>
			<tr>
				<td><label for="akreditasi">Akreditasi</label></td>
				<td><input type="text" name="akreditasi" class="input-data" required></td>
            </tr>
            <tr>
				<td><label for="status">Status</label></td>
				<td><input type="text" name="status" class="input-data" required></td>
            </tr>
            <tr>
				<td><label for="peringkat_asia">Peringkat Asia</label></td>
				<td><input type="text" name="peringkat_asia" class="input-data" required></td>
			</tr>
            <tr>
				<td><label for="peringkat_lokal">Peringkat Lokal</label></td>
				<td><input type="text" name="peringkat_lokal" class="input-data" required></td>
            </tr>
            <tr>
				<td><label for="logo">Logo Kampus</label></td>
				<td><input type="file" name="foto" class="input-data" required></td>
			</tr>
        </table>
        <input type="submit" value="TAMBAH" class="btn-add">
    </form>
    <button type="submit" class="btn-back" style="margin-left: 400px; margin-top: -400px;"><a href="/alldata" style="text-decoration: none; color: black;" ><i class="fas fa-chevron-left"></i> KEMBALI</a></button>   
</body>
</html>