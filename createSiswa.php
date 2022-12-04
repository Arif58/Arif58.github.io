<?php
require 'vendor/autoload.php';

use GuzzleHttp\Client;

$nama = $_POST['nama'];
$no_hp = $_POST['no_hp'];
$email = $_POST['email'];
$kelas = $_POST['kelas'];

$client = new Client();

$response = $client->request(
    'POST',
    'http://192.168.56.32/gose-bimbel/rest-api-bimbel.php',
    [
        'form_params' => [
            'nama' => $nama,
            'no_hp' => $no_hp,
            'email' => $email,
            'kelas' => $kelas
        ]
    ]
);


if ($response->getStatusCode()) {
    echo "<script>alert('Data Telah Terkirim');window.location='index.php'</script>";
    header("location:index.php");
} else {
    echo "Failed";
}

include_once "conn.php";
if(isset($_POST['submit'])){
    if (!empty($_POST['nama']) && !empty($_POST['no_hp']) && !empty($_POST['email']) && !empty($_POST['kelas'])){
        $nama = $_POST['nama'];
        $no_hp = $_POST['no_hp'];
        $email = $_POST['email'];
        $kelas = $_POST['kelas'];
    
        $query = "INSERT INTO siswa(nama, no_hp, email, kelas) values('$nama', '$no_hp', '$email', '$kelas')";
        if (mysqli_query($conn, $query)){
            echo "<script>alert('Data Telah Terkirim');window.location='index.php'</script>";
        }
    }
    else{
        echo "<script>alert('semua kolom wajib diisi');window.location='index.php'</script>";
        die();
    }
}



?>
