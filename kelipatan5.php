<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css" />
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Kelipatan 5</title>
</head>
<body>
<div class="kelipatan-box">
  <h2>Kelipatan 5</h2>
  <form action="" method="POST">
    <div class="input-box">
      <input type="number" name="nilai" >
      <label>Limit Kelipatan</label>
    </div>
    <input class="button" type="submit" name="submit" value="Hitung">
    <input class="reset" type="submit" name="reset" value="Reset"/>
  </form>
</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<div class="mt-1">
              <?php
              $alert = "";
              if (isset($_POST['submit'])) {
                if (!empty($_POST['nilai'])) {
                  $nilai = $_POST['nilai'];
                  

              ?>
                  <div class="output1" data-aos="fade-in" data-aos-duration="1500">
                    Mencari Kelipatan <?php echo 5; ?> dari 1 sampai <?php echo $nilai; ?>
                  </div>

                  <?php

                  $alert = "sukses";

                  for ($i = 1; $i <= $nilai; $i++) {
                    if ($i % 5 == 0) {
                  ?>
                      <div class="output2">
                        Kelipatan nilai <?= 5 ?> dari nilai <?= $nilai ?> adalah  <?= $i ?> 
                    </div>  
                  <?php
                    }
                  }
                } else {
                  $alert = "gagal";
                  ?>
                  <div class="output3">
                    Masukkan Nilai Limit !!
                  </div>
              <?php
                }
              }
              ?>
            </div>

            <?php
  if ($alert == "sukses") {
  ?>
    <script>
      Swal.fire({
        position: 'center',
        icon: 'success',
        title: 'Berhasil menampilkan hasil',
        showConfirmButton: false,
        timer: 1500
      })
    </script>
  <?php
  } else if ($alert == "gagal") {
  ?>
    <script>
      Swal.fire({
        position: 'center',
        icon: 'error',
        title: 'Semua data harus diisi',
        showConfirmButton: false,
        timer: 5500
      })
    </script>
  <?php
  }
  ?>
</body>
</html>
