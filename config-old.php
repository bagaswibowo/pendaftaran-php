<?php

// $host = 'registerdbmysql.mysql.database.azure.com';
// $username = 'bagaswibowo@registerdbmysql';
// $password = 'Advan111';
// $db_name = 'pendaftaran_siswa';

$conn = mysqli_init();
mysqli_ssl_set($conn,NULL,NULL, "C:/ssl/BaltimoreCyberTrustRoot.crt.pem", NULL, NULL); 

mysqli_real_connect($conn, 'dbbagaswibowo.mysql.database.azure.com', 'bagaswibowo@dbbagaswibowo', 'Advan111', 'pendaftaran_siswa', 3306, MYSQLI_CLIENT_SSL, MYSQLI_CLIENT_SSL_DONT_VERIFY_SERVER_CERT);

if (mysqli_connect_errno($conn)) {
        die('Failed to connect to MySQL: '.mysqli_connect_error());
    }
?>
