<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- style luar -->
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- style local -->
    <link href="styles/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles/style.css" rel="stylesheet">

    <title>Medica</title>
</head>
<body>

<nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4">
    <a href="#" class="navbar-brand">Medica</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a href="#" class="nav-link">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">Pendaftaran</a>
            </li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" id="navbarDrop" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Laporan</a>
                <div class="dropdown-menu" aria-labelledby="navbarDrop">
                    <a href="#" class="dropdown-item">drop1</a>
                    <a href="#" class="dropdown-item">drop2</a>
                    <a href="#" class="dropdown-item">drop3</a>                    
                </div>
            </li>
        </ul>

        <ul class="navbar-nav ml-auto" style="padding-right: 20px">
            <li class="nav-item">
                <a href="index.html" class="nav-link">Logout</a>
            </li>
        </ul>
    </div>
</nav>

<main role="main" class="container">
    <label for="regist"><h1>Registrasi</h1></label>
    <hr style="margin-left: 0px;">

    <form class="form-regist" method="post" action="insert.php">
        <div class="form-group row">
            <label for="norm" class="col-2 col-form-label">No RM</label>
            <div class="col-5">
            <input class="form-control" type="text" placeholder="No Rekam Medik" id="noRekam" name="noRekam">
            </div>
        </div>
        <div class="form-group row">
            <label for="nama" class="col-2 col-form-label">Nama</label>
            <div class="col-5">
            <input class="form-control" type="text" placeholder="Nama Pasien" id="namaPasien" name="namaPasien">
            </div>
        </div>
        <div class="form-group row">
            <label for="" class="col-2 col-form-label">Jenis kelamin</label>
            <div class="col-5">
                <!-- <input class="form-control" type="text" placeholder="" id="">                 -->
                <select id="jkel" class="form-control" id="jenisKelamin" name="jenisKelamin">
                    <option value="L">Laki-laki</option>
                    <option value="P">Perempuan</option>
                </select>
            </div>
            <!-- <div class="col-3">
                <input class="form-control" type="text" placeholder="Jenis Kelamin" id="" readonly>
            </div> -->
            </div>
        </div>
        <div class="form-group row">
            <label for="ttl" class="col-2 col-form-label">Tempat Tanggal Lahir</label>
            <div class="col-2">
                <input class="form-control" type="text" placeholder="Tempat" id="tempatLahir" name="tempatLahir">
            </div>
            <div class="col-3">
                <input class="form-control" type="date" id="tanggalLahir" name="tanggalLahir">
            </div>
        </div>

        <div class="form-group row">
            <label for="ttl" class="col-2 col-form-label">Umur</label>
            <div class="col-5">
            <input class="form-control" type="text" placeholder="" id="umur" name="umur">
            </div>
        </div>

        <div class="form-group row">
            <label for="ttl" class="col-2 col-form-label">No. Telp</label>
            <div class="col-5">
            <input class="form-control" type="number" placeholder="No Telepon" id="noTelp" name="noTelp">
            </div>
        </div>
        <div class="form-group row">
            <label for="ttl" class="col-2 col-form-label">Alamat Email</label>
            <div class="col-5">
            <input class="form-control" type="email" placeholder="Email" id="email" name="email">
            </div>
        </div>
        <div class="form-group row">
            <label for="ttl" class="col-2 col-form-label">Ibu Kandung</label>
            <div class="col-5">
            <input class="form-control" type="text" placeholder="Ibu Kandung" id="ibuKandung" name="ibuKandung">
            </div>
        </div>
        <div class="form-group row">
            <label for="ttl" class="col-2 col-form-label">Status Kawin</label>
            <div class="col-5">
            <select id="kawin" class="form-control" id="statusKawin" name="statusKawin">
                <option value="sudah">Sudah</option>
                <option value="belum" selected>Belum</option>
            </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="ttl" class="col-2 col-form-label">Nama Istri/Suami</label>
            <div class="col-5">
            <input class="form-control" type="text" placeholder="Nama Istri" id="namaPasangan" name="namaPasangan">
            </div>
        </div>
        <div class="form-group row">
            <label for="ttl" class="col-2 col-form-label">Agama</label>
            <div class="col-5">
            <select id="kawin" class="form-control" id="agama" name="agama">
                <option value="Islam" selected>Islam</option>
                <option value="Katolik">Katolik</option>
                <option value="Protestan">Protestan</option>
                <option value="Hindu">Hindu</option>
                <option value="Budha">Budha</option>                
            </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="ttl" class="col-2 col-form-label">Warga Negara</label>
            <div class="col-5">
            <input class="form-control" type="text" placeholder="Warga Negara" id="wargaNegara" name="wargaNegara">
            </div>
        </div>
        <div class="form-group row">
            <label for="ttl" class="col-2 col-form-label">Alamat</label>
            <div class="col-5">
            <textarea class="form-control" type="text" placeholder="Alamat"  rows="3" id="alamat" name="alamat"></textarea>
            </div>
        </div>
        <div class="form-group row">
            <label for="ttl" class="col-2 col-form-label"></label>
            <div class="col-2">
            <input class="form-control" type="text" placeholder="RT" id="rt" name="rt">
            </div>
            <div class="col-2">
            <input class="form-control" type="text" placeholder="RW" id="rw" name="rw">
            </div>
        </div>
        <div class="form-group row">
            <label for="" class="col-2 col-form-label">Provinsi</label>
            <div class="col-5">
            <input class="form-control" type="text" placeholder="provinsi" id="provinsi" name="provinsi">
            </div>
        </div>
        <div class="form-group row">
            <label for="" class="col-2 col-form-label">Kabupaten / Kota</label>
            <div class="col-5">
            <input class="form-control" type="text" placeholder="Kabupaten / Kota" id="kabupaten" name="kabupaten">
            </div>
        </div>
        <div class="form-group row">
            <label for="" class="col-2 col-form-label">Kecamatan</label>
            <div class="col-5">
            <input class="form-control" type="text" placeholder="Kecamatan" id="kecamatan" name="kecamatan">
            </div>
        </div>
        <div class="form-group row">
            <label for="" class="col-2 col-form-label">Kelurahan / Desa</label>
            <div class="col-5">
            <input class="form-control" type="text" placeholder="Kelurahan / Desa" id="kelurahan" name="kelurahan">
            </div>
        </div>
        <div class="form-group row">
            <label for="" class="col-2 col-form-label">Jenis Pasien</label>
            <div class="col-5">
            <input class="form-control" type="text" placeholder="Jenis Pasien" id="jenisPasien" name="jenisPasien">
            </div>
        </div>
        <div class="form-group row">
            <label for="" class="col-2 col-form-label">No Askes</label>
            <div class="col-5">
            <input class="form-control" type="text" placeholder="No Askes" id="noAskes" name="noAskes">
            </div>
        </div>
        <div class="row">
            <div class="col-2"></div>
            <div class="col-2"> 
                    <input class="btn btn-primary" type="submit" value="Submit"> 
            </div>
            <div class="col-3"> 
                    <input class="btn btn-primary" type="reset" value="Reset">        
            </div>
        </div>
         
        
    </form>
</main>

<!-- javascript -->
<section class="script">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="styles/bootstrap/js/bootstrap.min.js"></script>
    <script src="scripts/script.js"></script>
</section>
</body>
</html>