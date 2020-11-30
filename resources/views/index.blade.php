<!DOCTYPE html>
<html>
	<head>
        <meta charset="utf-8">
		<title>Campore</title>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.2/css/bootstrap.min.css" >
		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.min.css">
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
	</head>
	<body>
		<div class="container shadow " style="padding: 5rem; margin-top: 10rem;">
			<div class="row">
            <a href="/alldata"><button type="submit" class="btn btn-warning mb-3 float-right mr-2">ALL DATA</button></a>
				<div class="col-lg-12">
                <form action="/comparecampus" method="post">
                {{csrf_field()}}
                    <div class="form-row">
                        <div class="col">
                            <label for="exampleDropdown">CHOOSE CAMPUS 1 </label>
                            <select data-live-search="true" title="CAMPUS 1" class="form-control selectpicker my-1 mr-sm-2" name="campus1" id="campus1" onchange="campus1()">
                                <option value="ipb">Institut Pertanian Bogor</option>
                                <option value="itb">Institut Teknologi Bandung</option>
                                <option value="its">Institut Teknologi Sepuluh Nopember</option>
                                <option value="itenas">Institut Teknologi Nasional</option>
                                <option value="isi">Institut Seni Indonesia</option>
                                <option value="unpad">Universitas Padjadjaran</option>
                                <option value="uad">Universitas Ahmad Dahlan</option>
                                <option value="unand">Universitas Andalas</option>
                                <option value="ugm">Universitas Gadjah Mada</option>
                                <option value="ui">Universitas Indonesia</option>
                                <option value="unbraw">Universitas Brawijaya</option>
                                <option value="upi">Universitas Pendidikan Indonesia</option>
                                <option value="undip">Universitas Diponegoro</option>
                                <option value="uny">Universitas Negeri Yogyakarta</option>
                                <option value="unila">Universitas Lampung</option>
                                <option value="unair">Universitas Airlangga</option>
                            </select>
                        </div>
                        <div class="col">
                            <label for="exampleDropdown">CHOOSE CAMPUS 2</label>
                            <select data-live-search="true" title="CAMPUS 2" class="form-control selectpicker my-1 mr-sm-2" name="campus2" id="campus2" onchange="campus2()">
                                <option value="ipb">Institut Pertanian Bogor</option>
                                <option value="itb">Institut Teknologi Bandung</option>
                                <option value="its">Institut Teknologi Sepuluh Nopember</option>
                                <option value="itenas">Institut Teknologi Nasional</option>
                                <option value="isi">Institut Seni Indonesia</option>
                                <option value="unpad">Universitas Padjadjaran</option>
                                <option value="uad">Universitas Ahmad Dahlan</option>
                                <option value="unand">Universitas Andalas</option>
                                <option value="ugm">Universitas Gadjah Mada</option>
                                <option value="ui">Universitas Indonesia</option>
                                <option value="unbraw">Universitas Brawijaya</option>
                                <option value="upi">Universitas Pendidikan Indonesia</option>
                                <option value="undip">Universitas Diponegoro</option>
                                <option value="uny">Universitas Negeri Yogyakarta</option>
                                <option value="unila">Universitas Lampung</option>
                                <option value="unair">Universitas Airlangga</option>
                            </select>
                        </div>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary mt-2 mb-2">COMPARE</button>
                    </div>
                </form>
                    <div class="container">
                        <div class="form-row">
                            <div class="col">
                                <input type="text" id="campusone" name="campusone" class="form-control" style="border:none;" value="" disabled>
                            </div>
                            <div class="col">
                                <input type="text" id="campustwo" name="campustwo" class="form-control" style="border:none;" value="" disabled>
                            </div>
                        </div>
                    </div>
				</div>
			</div>
        </div>
        <script>
            var campus1 = document.getElementById("campus1").value;
            var campus2 = document.getElementById("campus2").value;
            function campus1(){
                if(campus1==itb){
                    document.getElementById("campusone").value = "Institut Teknologi Bandung";
                }
            }
            function campus2(){
                if(campus2==itb){
                    document.getElementById("campustwo").value = "Institut Teknologi Bandung";
                }
            }
        </script>
	</body>
</html>