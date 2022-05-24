 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

 </head>

 <body>
     <div class="container-fluid ">
         <div class="row m-4">
             <div class="col-md-12">
                 <nav class="navbar navbar-expand-lg navbar-light bg-light">

                     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                         <span class="navbar-toggler-icon"></span>
                     </button> <a class="navbar-brand" href="#">WEB</a>
                     <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                         <ul class="navbar-nav">
                             <li class="nav-item active">
                                 <a class="nav-link" href="#">Review PHP <span class="sr-only">(current)</span></a>
                             </li>
                             <li class="nav-item">
                                 <a class="nav-link" href="#">PHP5 OPP</a>
                             </li>
                             <form class="form-inline">
                                 <input class="form-control mr-sm-2" type="text" />
                                 <button class="btn btn-primary my-2 my-sm-0" type="submit">
                                     Search
                                 </button>
                             </form>
                     </div>
                 </nav>
             </div>
         </div>
         <div class="row m-5">
             <form method="POST" action="from_nilai_ujian.php">
                 <div class="form-group row ">
                     <label for="nim" class="col-4 col-form-label">NIM</label>
                     <div class="col-8">
                         <input id="nim" name="nim" type="text" class="form-control">
                     </div>
                 </div>
                 <div class="form-group row">
                     <label for="matkul" class="col-4 col-form-label">Pilih Matkul</label>
                     <div class="col-8">
                         <input id="matkul" name="matkul" type="text" class="form-control">
                     </div>
                 </div>
                 <div class="form-group row">
                     <label for="nilai" class="col-4 col-form-label">Nilai</label>
                     <div class="col-8">
                         <input id="nilai" name="nilai" type="text" class="form-control">
                     </div>
                 </div>
                 <div class="form-group row">
                     <div class="offset-4 col-8">
                         <button name="submit" type="submit" class="btn btn-success">Simpan</button>
                     </div>
                 </div>
             </form>
             </br>
             <div class="col-md-12">
                 <?php
                    require_once "class_from_nilai.php";
                    $proses = isset($_POST['submit']) ? $_POST['submit'] : ' ';
                    $nim = isset($_POST['nim']) ? $_POST['nim'] : ' ';
                    $matkul = isset($_POST['matkul']) ? $_POST['matkul'] : ' ';
                    $nilai = isset($_POST['nilai']) ? $_POST['nilai'] : ' ';

                    echo "</br> NIM : $nim";
                    echo "</br> Mata Kuliah : $matkul";
                    echo "</br> Nilai  : $nilai";
                    $siswa = new NilaiMahasiswa($nim, $matkul, $nilai);
                    echo '</br> Hasil Ujian :' . $siswa->grade();
                    echo '</br> Grade : '. $siswa->hasil();
                    ?>

             </div>
         </div>
     </div>
 </body>

 </html>