

<?php

if(isset($_POST['submit'])){
    $bil1 = $_POST['bil1'];
    $bil2 = $_POST['bil2'];
    $operasi = $_POST['operator'];
    switch($operasi){
        case 'tambah':
            $hasil = $bil1 + $bil2;
        break;
        case 'kali':
            $hasil = $bil1 * $bil2;
        break;
        case 'kurang':
            $hasil = $bil1 - $bil2;
        break;
        case 'bagi':
            $hasil = $bil1 / $bil2;
        break;
    }
}

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>kalkulator-sederhana</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body style="background-color: lightgrey;">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                    <h3>kalkulator</h3>
                    <hr>
                <form action="index.php" method="post">
                    <input type="text" class="form-control mb-3" name="bil1" placeholder="masukan angka" required>
                    <input type="text" class="form-control mb-3" name="bil2" placeholder="masukan angka" required>
                    <div class="input-group mb-3">
                    <select name="operator" class="form-select">
                        <option selected>Pilih operasi</option>
                        <option value="tambah">+</option>
                        <option value="kurang">-</option>
                        <option value="bagi">:</option>
                        <option value="kali">x</option>
                    </select>
                   <input type="submit" value="submit" class="btn btn-outline-primary" name="submit">
                    </div>
                 </form>
                     <input type="text" class="form-control" value="<?= isset($hasil) ? $hasil : 0; ?>" disabled readonly>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>