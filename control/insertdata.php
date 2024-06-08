<?php

include '../connect/config.php';

    if(isset($_POST['submit'])){
        // var_dump($_POST);
        $email = $_POST["email"];
        $komentar = $_POST["komentar"];
        $query = "INSERT INTO tb_user_web (email, komentar) VALUES ('$email', '$komentar')";

        // running query
        if (mysqli_query($conn, $query)) {
             echo "Jawabanmu Terkirim, Makasih";
            
        } else {
            echo "Error : " .$query. "<br/>" .mysqli_error($conn);
        }
    }
?>