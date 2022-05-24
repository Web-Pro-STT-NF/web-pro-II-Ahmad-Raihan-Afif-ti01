<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Nilai Get</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container card">
        <div class="row ">
            <div class="col-12 bg-light pt-3">
                <p>Sistem Penilaian</p>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <p>Form Nilai Siswa</p>
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <form method = "GET">
                <div class="form-group row">
                    <label for="nama" class="col-4 col-form-label">Nama Lengkap</label> 
                    <div class="col-8">
                    <input id="nama" name="nama" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="matkul" class="col-4 col-form-label">Mata Kuliah</label> 
                    <div class="col-8">
                    <input id="matkul" name="matkul" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nilai_uts" class="col-4 col-form-label">Nilai UTS</label> 
                    <div class="col-8">
                    <input id="nilai_uts" name="nilai_uts" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nilai_uas" class="col-4 col-form-label">Nilai UAS</label> 
                    <div class="col-8">
                    <input id="nilai_uas" name="nilai_uas" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nilai_tugas" class="col-4 col-form-label">Nilai Tugas</label> 
                    <div class="col-8">
                    <input id="nilai_tugas" name="nilai_tugas" type="text" class="form-control">
                    </div>
                </div> 
                <div class="form-group row">
                    <div class="offset-4 col-8">
                    <button name="submit" type="submit" class="btn btn-primary">KIRIM</button>
                    </div>
                </div>
                </form>
                <?php
                    $proses = isset($_GET ['proses']) ? $_GET ['proses'] : ' ';
                    $nama = isset($_GET['nama']) ? $_GET['nama'] : ' ';
                    $mata_kuliah = isset($_GET['matkul']) ? $_GET['matkul'] : ' ';
                    $nilai_uts = isset($_GET['nilai_uts']) ? $_GET['nilai_uts'] : ' ';
                    $nilai_uas = isset($_GET['nilai_uas']) ? $_GET['nilai_uas'] : ' ';
                    $nilai_tugas = isset($_GET['nilai_tugas']) ? $_GET['nilai_tugas'] : ' ';
                
                    echo "Nama : $nama";
                    echo "</br> Mata Kuliah : $mata_kuliah";
                    echo "</br> Nilai UTS : $nilai_uts";
                    echo "</br> Nilai UAS : $nilai_uas";
                    echo "</br> Nilai Tugas : $nilai_tugas";
                    echo "<hr>";
                    if($nilai_uts >= 85){
                        $grade = 'A';
                    }
                    elseif($nilai_uts >= 70){
                        $grade = 'B';
                    }
                    elseif($nilai_uts >= 76){
                        $grade = 'C';
                    }
                    elseif($nilai_uts >= 36){
                        $grade = 'D';
                    }
                    elseif($nilai_uts >= 0){
                        $grade = 'E';
                    }

                    echo "</hr>Grade Nilai UTS : $grade " ;

                    if($nilai_uas >= 85){
                        $grade_uas = 'A';
                    }
                    elseif($nilai_uas >= 70){
                        $grade_uas = 'B';
                    }
                    elseif($nilai_uas >= 76){
                        $grade_uas = 'C';
                    }
                    elseif($nilai_uas >= 36){
                        $grade_uas = 'D';
                    }
                    elseif($nilai_uas >= 0){
                        $grade_uas = 'E';
                    }

                    echo "</br>Grade Nilai UAS : $grade_uas " ;

                    if($nilai_tugas >= 85){
                        $grade_tugas = 'A';
                    }
                    elseif($nilai_tugas >= 70){
                        $grade_tugas = 'B';
                    }
                    elseif($nilai_tugas >= 76){
                        $grade_tugas = 'C';
                    }
                    elseif($nilai_tugas >= 36){
                        $grade_tugas = 'D';
                    }
                    elseif($nilai_tugas >= 0){
                        $grade_tugas = 'E';
                    }

                    echo "</br>Grade Nilai UAS : $grade_tugas " ;
                ?>
            </div>
        </div>
        <div class="row">
            <div class="col-12 bg-light pt-3">
                <p>Develop By Mahasiswa STT NF</p>
            </div>
        </div>
    </div>
</body>
</html>