<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Tugas Nilai Nabila- SI 18<</title>
    <style>
        body {
            padding: 100px
        }
    </style>
</head>

<body>
<div class="card" style="height: 100%;">
        <div class="card-header">
            Sistem Penilaian
        </div>
    <h1>Form Nilai Siswa</h1>
    <hr />
    <div class="container">
        <form class="form-horizontal" method="POST" action="nilai_siswa.php">
            <div class="form-group row">
                <label for="nama" class="col-4 col-form-label">Nama</label>
                <div class="col-8">
                    <input id="nama" name="nama" placeholder="Nama Lengkap" value="" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="matkul" class="col-4 col-form-label">Mata Kuliah</label>
                <div class="col-8">
                    <select id="matkul" name="matkul" class="custom-select">
                        <option value="Select">Select</option>
                        <option value="Dasar-Dasar Pemograman">Dasar-Dasar Pemograman</option>
                        <option value="Basis Data">Basis Data</option>
                        <option value="Pemograman Web">Pemograman Web</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="nilai_uts" class="col-4 col-form-label">Nilai UTS</label>
                <div class="col-8">
                    <input id="nilai_uts" name="nilai_uts" placeholder="Nilai UTS" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="nilai_uas" class="col-4 col-form-label">Nilai UAS</label>
                <div class="col-8">
                    <input id="nilai_uas" name="nilai_uas" placeholder="Nilai UAS" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="nilai_tugas" class="col-4 col-form-label">Nilai Tugas/Praktikum</label>
                <div class="col-8">
                    <input id="nilai_tugas" name="nilai_tugas" placeholder="Nilai Tugas" type="text"
                        class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <div class="offset-4 col-8">
                    <button name="proses" type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </form>
        
<?php
    $nama_siswa = $_POST['nama'];
    $matkul = $_POST['matkul'];
    $uts = $_POST['nilai_uts'];
    $uas = $_POST['nilai_uas'];
    $tugas = $_POST['nilai_tugas'];
    $proses = $_POST['proses'];
    $total = (0.3 * $uts) + (0.35 * $uas) + (0.35 * $tugas);

    if (!empty($_POST['submit'])) {
        echo '<strong>RESULT</strong>';
        echo '<br/>Nama : ' . $nama_siswa;
        echo '<br/>Mata Kuliah : ' . $matkul;
        echo '<br/>Nilai UTS : ' . $uts;
        echo '<br/>Nilai UAS : ' . $uas;
        echo '<br/>Nilai Tugas/Praktikum : ' . $tugas;
    }
    if ($total > 55) {
        echo '<br/>SISWA LULUS';
    } else {
        echo '<br/>SISWA TIDAK LULUS';
    }

    if ($total > 0 and $total <= 35) {
        $grade = "E";
    } elseif ($total > 35 and $total <= 55) {
        $grade = "D";
    } elseif ($total > 55 and $total <= 69) {
        $grade = "C";
    } elseif ($total > 69 and $total <= 84) {
        $grade = "B";
    } elseif ($total > 84 and $total <= 100) {
        $grade = "A";
    } else {
        $grade = "I";
    }

    switch ($grade) {
        case 'A':
            $predikat = "Sangat Memuaskan";
            break;
        case 'B':
            $predikat = "Memuaskan";
            break;
        case 'C':
            $predikat = "Cukup";
            break;
        case 'D':
            $predikat = "Kurang";
            break;
        case 'E':
            $predikat = "Sangat Kurang";
            break;
        default:
            $predikat = "Tidak Ada";
            break;
    }
    
    echo '<br/>Dengan Nilai ' . $total . ', Maka Grade Siswa adalah ' . $grade . " dengan Predikat <strong>$predikat</strong>";
?>
    </div>
</body>

</html>