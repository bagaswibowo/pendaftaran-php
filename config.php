<?php

$host = 'registerdbmysql.mysql.database.azure.com';
$username = 'bagaswibowo@registerdbmysql';
$password = 'Advan111';
$db_name = 'pendaftaran_siswa';

$conn = mysqli_init();
mysqli_ssl_set($conn,NULL,NULL, "C:/ssl/BaltimoreCyberTrustRoot.crt.pem", NULL, NULL); 
$db = mysqli_connect($host, $username, $password, $db_name, 3306, MYSQLI_CLIENT_SSL, MYSQLI_CLIENT_SSL_DONT_VERIFY_SERVER_CERT);
// ll
if( !$db ){
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}
?>
