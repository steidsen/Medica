<?php
    $con = mysqli_connect('127.0.0.1','root','');

    if(!$con)
    {
        echo 'No Connected to server';
    }

    if(!mysqli_select_db($con,'rekamedis'))
    {
        echo 'Database not selected';
    }
    
    $noRekam = $_POST['noRekam'];
    $namaPasien = $_POST['namaPasien'];
    $jenisKelamin = $_POST['jenisKelamin'];
    $tempatLahir = $_POST['tempatLahir'];
    $tanggalLahir = $_POST['tanggalLahir'];
    $umur = $_POST['umur'];
    $noTelp = $_POST['noTelp'];
    $email = $_POST['email'];
    $ibuKandung = $_POST['ibuKandung'];
    $statusKawin = $_POST['statusKawin'];
    $namaPasangan = $_POST['namaPasangan'];
    $agama = $_POST['agama'];
    $wargaNegara = $_POST['wargaNegara'];
    $alamat = $_POST['alamat'];
    $rt = $_POST['rt'];
    $rw = $_POST['rw'];
    $provinsi = $_POST['provinsi'];
    $kabupaten = $_POST['kabupaten'];
    $kecamatan = $_POST['kecamatan'];
    $kelurahan = $_POST['kelurahan'];
    $jenisPasien = $_POST['jenisPasien'];
    $noAskes = $_POST['noAskes'];

    $sql = "INSERT INTO datapasien ( noRekam,namaPasien,jenisKelamin,tempatLahir,tanggalLahir,umur,noTelp,email,ibuKandung,statusKawin,namaPasangan,agama,wargaNegara,alamat,rt,rw,provinsi,kabupaten,kecamatan,kelurahan,jenisPasien,noAskes ) VALUES ( '$noRekam','$namaPasien','$jenisKelamin','$tempatLahir','$tanggalLahir','$umur','$noTelp','$email','$ibuKandung','$statusKawin','$namaPasangan','$agama','$wargaNegara','$alamat','$rt','$rw','$provinsi','$kabupaten','$kecamatan','$kelurahan','$jenisPasien','$noAskes' )";

    if(!mysqli_query($con,$sql))
    {
        echo 'Not inserted';
    } else {
        echo 'Inserted';
    }

    header("refresh:10; url=regist.php");
?>