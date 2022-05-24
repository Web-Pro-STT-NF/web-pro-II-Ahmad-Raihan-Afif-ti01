<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Nilai Nabila- SI 18</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

</head>

<body>
    <div class="card" style="height: 100%;">
        <div class="card-header">
            Sistem Penilaian
        </div>
        <div class="card-body">
            <h4>Form Nilai Siswa</h4>
            <hr>
            <div class="d-flex justify-content-center">
                <div class="col-md-7">
                    <form method="GET" action="form_nilai.php" class="mt-3">
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-4 col-form-label font-weight-bold text-right">Nama
                                Lengkap</label>
                            <div class="col-sm-8">
                                <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-4 col-form-label font-weight-bold text-right">Mata
                                Kuliah</label>
                            <div class="col-sm-8">
                                <select class="form-control" name="matkul" id="exampleFormControlSelect1">
                                    <option value="DDP">Dasar Dasar Pemrograman</option>
                                    <option value="BDI">Basis Data I</option>
                                    <option value="WEB1">Pemrograman Web</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-4 col-form-label font-weight-bold text-right">Nilai
                                UTS</label>
                            <div class="col-sm-5">
                                <input type="text" name="uts" class="form-control" placeholder="Nilai UTS">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-4 col-form-label font-weight-bold text-right">Nilai
                                UAS</label>
                            <div class="col-sm-5">
                                <input type="text" name="uas" class="form-control" placeholder="Nilai UAS">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-4 col-form-label font-weight-bold text-right">Nilai
                                Tugas/Praktikum</label>
                            <div class="col-sm-5">
                                <input type="text" name="tugas" class="form-control" placeholder="Nilai Tugas">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="staticEmail"
                                class="col-sm-4 col-form-label font-weight-bold text-right"></label>
                            <div class="col-sm-5">
                            <input name="proses" class="btn btn-primary" type="submit">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <?php
            $proses = $_GET['proses'];
            $nama_siswa = $_GET['nama'];
            $mata_kuliah = $_GET['matkul'];
            $nilai_uts = $_GET['uts'];
            $nilai_uas = $_GET['uas'];
            $nilai_tugas = $_GET['tugas'];

            echo 'Proses : ' .$proses;
            echo '<br/>Nama : ' .$nama_siswa;
            echo '<br/>Mata Kuliah : ' .$mata_kuliah;
            echo '<br/>Nilai UTS : ' .$nilai_uts;
            echo '<br/>Nilai UAS : ' .$nilai_uas;
            echo '<br/>Nilai Tugas Praktikum : ' .$nilai_tugas;
        
            ?>
        </div>
     
    </div>
</body>
</html>