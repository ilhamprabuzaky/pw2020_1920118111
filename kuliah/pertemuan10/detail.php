<?php
require 'functions.php';
$id = $_GET['id'];
$m = query("SELECT * FROM mahasiswa WHERE id = $id");
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Detail Mahasiswa</title>
</head>

<body>
    <div class="container">
        <h2 class="my-4 text-center">Detail Mahasiswa</h2>
        <div class="row justify-content-center">
            <div class="col-4">
                <!-- Image -->
                <div class="row">
                    <div class="col-5">
                        <img src="img/<?= $m['gambar']; ?>" class="img-thumbnail float-left">
                    </div>
                    <div class="col-4">
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                                <h5 class="card-title"><?= $m['nama']; ?></h5>
                                <h6 class="card-subtitle mb-2 text-muted"><?= $m['nrp']; ?></h6>
                                <p class="card-text"><?= $m['email']; ?></p>
                                <p class="card-text"><?= $m['jurusan']; ?></p>
                                <a href="latihan3.php" class="card-link">Kembali ke daftar mahasiswa</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>
</body>

</html>
