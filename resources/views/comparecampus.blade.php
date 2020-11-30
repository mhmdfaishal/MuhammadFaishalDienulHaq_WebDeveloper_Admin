<!DOCTYPE html>
<html>
	<head>
        <meta charset="utf-8">
		<title>Campore</title>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.2/css/bootstrap.min.css" >
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.min.css">
        <link rel="stylesheet" href="assets/style_compare.css">
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
	</head>
	<body>
		<div class="container shadow " style="padding: 5rem; margin-top: 10rem;">
            <div class="container">
                <div class="row">
                    <div class="card-deck">
                    @foreach($kampus1 as $campus1)
                        <div class="card">
                            <div class="card-title"></div>
                            <img src="assets/img/{{$campus1->foto}}" class="card-img-top " alt="logo-kampus">
                            <h4>{{$campus1->nama_kampus}}</h4>
                            <p class="akred">Akreditasi : {{$campus1->akreditasi}}</p>
                            <p class="status">{{$campus1->status}}</p>
                            <div class="peringkatasia card-body">
                                <h5 class="card-title">Peringkat Asia</h5>
                                <p class="card-text">#{{$campus1->peringkat_asia}}</p>
                            </div>
                            <div class="peringkatlokal card-body">
                                <h5 class="card-title">Peringkat Lokal</h5>
                                <p class="card-text">#{{$campus1->peringkat_lokal}}</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted"><b>Perbandingan Lokasi</b> : {{$campus1->alamat_kampus}}</small>
                            </div>
                        </div>
                    @endforeach
                    @foreach($kampus2 as $campus2)
                        <div class="card">
                            <img src="assets/img/{{$campus2->foto}}" class="card-img-top " alt="logo-kampus">
                            <h4 class="namakampus2">{{$campus2->nama_kampus}}</h4>
                            <p class="akredkampus2">Akreditasi : {{$campus2->akreditasi}}</p>
                            <p class="statuskampus2">{{$campus2->status}}</p>
                            <div class="peringkatasiakampus2 card-body">
                                <h5 class="card-title">Peringkat Asia</h5>
                                <p class="card-text">#{{$campus2->peringkat_asia}}</p>
                            </div>
                            <div class="peringkatlokalkampus2 card-body">
                                <h5 class="card-title">Peringkat Lokal</h5>
                                <p class="card-text">#{{$campus2->peringkat_lokal}}</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted"><b>Perbandingan Lokasi</b> : {{$campus2->alamat_kampus}}</small>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <button class="btn-back" style="margin-left: 400px;"><a href="/" style="text-decoration: none; color: black;"><i class="fas fa-chevron-left"></i> KEMBALI</a></button>
                </div>
            </div>
        </div>
	</body>
</html>