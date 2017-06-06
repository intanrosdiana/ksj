<?php
    $nama       = $_POST['nama'];
    $email      = $_POST['email'];
    $subjek     = $_POST['subjek'];
    $pesan      = $_POST['pesan'];
    $tujuan     = "sahrizal029@gmail.com";
    $header     = "From: $email";

    if ( mail($tujuan, $subjek, $pesan, $header) ){
        echo "Pesan berhasil dikirim!";
    }

?>