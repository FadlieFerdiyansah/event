<?php
$inc = mysqli_connect('localhost', 'root', '', 'event');

if (!$inc) {
    echo 'Failed to connected!';
}

if (isset($_POST['daftar'])) {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);

    if ($nama == '' || $email == '' || $password == '') {
        echo "<script>
                   alert('Gagal Daftar, Silahkan isi semua field');
                    document.location='/';
                </script>
                ";
    } else {
        $insert = mysqli_query($inc, "INSERT INTO users(nama, email, password,level) VALUES('$nama','$email','$password','user')");

        if ($insert) {
            echo "<script>
                   alert('Berhasil Daftar');
                    document.location='/';
                </script>
                ";
        } else {
            echo "<script>
                   alert('Gagal Daftar');
                    document.location='/';
                </script>
                ";
        }
    }
}
