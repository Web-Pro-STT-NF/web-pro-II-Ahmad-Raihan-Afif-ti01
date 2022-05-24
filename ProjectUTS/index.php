<?php

include_once 'layout/header.php';

include_once 'layout/sidebar.php';

?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">

                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                        <li class="breadcrumb-item active">Form BMI</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Aplikasi Menghitung Body Mass Index(BMI)</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>
            <div class="card-body">
                <div class="card card-info">
                    <div class="card-header">
                        <h3 class="card-title">Form Input</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form method="post" action="index.php" class="form-horizontal">

                        <input type="hidden" name="tanggal" value="<?php echo date("d-m-Y"); ?>">

                        <div class="card-body">
                            <h4>Data Pribadi</h4>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label" for="nama">Nama</label>
                                <div class="col-sm-10">
                                    <input type="text" name="nama" required id="nama" class="form-control" placeholder="Masukan Nama">
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Jenis Kelamin</label>
                                <div class="col-sm-10">
                                    <div class="icheck-primary d-inline mr-1">
                                        <input type="radio" id="laki_laki" name="jk" value="L">
                                        <label for="laki_laki">Laki-Laki
                                        </label>
                                    </div>
                                    <div class="icheck-primary d-inline">
                                        <input type="radio" id="perempuan" name="jk" value="P">
                                        <label for="perempuan">Perempuan
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label" for="tmp_lahir">Tempat Lahir</label>
                                <div class="col-sm-10">
                                    <input type="text" name="tmp_lahir" id="tmp_lahir" class="form-control" placeholder="Masukan Tempat Lahir">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label" for="tgl_lahir">Tanggal Lahir</label>
                                <div class="col-sm-10">
                                    <input placeholder="Masukan Tanggal Lahir" autocomplete="off" type="text" name="tgl_lahir" id="tgl_lahir" class="form-control">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label" for="email">Email</label>
                                <div class="col-sm-10">
                                    <input type="text" name="email" id="email" class="form-control" placeholder="Masukan Email">
                                </div>
                            </div>

                            <h4>Informasi Untuk Menghitung BMI</h4>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label" for="bb">Berat Badan</label>
                                <div class="col-sm-10">
                                    <input type="number" name="bb" id="bb" required class="form-control" placeholder="Masukan Berat Badan">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label" for="tb">Tinggi Badan</label>
                                <div class="col-sm-10">
                                    <input type="number" name="tb" id="tb" required class="form-control" placeholder="Masukan Tinggi Badan">
                                </div>
                            </div>

                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="reset" class="btn btn-danger">Cancel</button>
                            <button type="submit" class="btn btn-success">Kirim</button>
                        </div>
                        <!-- /.card-footer -->

                    </form>
                </div>
            </div>

            <?php
            require_once './class_bmi_pasien.php';
            $pasien_hardcode = ['kodePasien' => 'FX-PAS-001', 'tanggal' => '19-04-2022', 'nama' => 'Bayu', 'jk' => 'Laki-laki', 'bb' => 39, 'tb' => 130, 'bmi' => 16.8, 'status' => 'Kekurangan Berat Badan', 'image' => 'kurus'];


            // Informasi Pribadi
            $tanggal_check = isset($_REQUEST['tanggal']) ? $_REQUEST['tanggal'] : null;
            $nama = isset($_REQUEST['nama']) ? $_REQUEST['nama'] : null;
            $tmp_lahir = isset($_REQUEST['tmp_lahir']) ? $_REQUEST['tmp_lahir'] : null;
            $tgl_lahir = isset($_REQUEST['tgl_lahir']) ? $_REQUEST['tgl_lahir'] : null;
            $email = isset($_REQUEST['email']) ? $_REQUEST['email'] : null;
            $jenis_kelamin = isset($_REQUEST['jk']) ? $_REQUEST['jk'] : null;

            // Informasi BMI
            $berat_badan = isset($_REQUEST['bb']) ? $_REQUEST['bb'] : 0;
            $tinggi_badan = isset($_REQUEST['tb']) ? $_REQUEST['tb'] : 0;

            // Kode Pasien Random
            $prefix = 'FX-PASS';
            $random_kode = str_pad(rand(0, pow(10, 3) - 1), 3, '0', STR_PAD_LEFT);
            $kode_pasien = $prefix . $random_kode;

            $pasien_object = new BMIPasien($kode_pasien, $nama, $jenis_kelamin, $tmp_lahir, $tgl_lahir, $email, $berat_badan, $tinggi_badan, $tanggal_check);
            $pasien = ['kodePasien' => $pasien_object->getProperties('pasien')->getProperties('kodePasien'), 'tanggal' => $pasien_object->getProperties('tglChecked'), 'nama' => $pasien_object->getProperties('pasien')->getProperties('namaPasien'), 'jk' => $pasien_object->getProperties('pasien')->getProperties('gender'), 'bb' => $pasien_object->getProperties('bmi')->getProperties('berat'), 'tb' => $pasien_object->getProperties('bmi')->getProperties('tinggi'), 'bmi' => $pasien_object->getProperties('bmi')->getNilaiBMI(), 'status' =>  $pasien_object->getProperties('bmi')->getStatusBMI(), 'image' => $pasien_object->getProperties('bmi')->getImageByNilaiBMI()];
            $all_pasien = [$pasien_hardcode, $pasien];
            if (!empty($nama)) {
            ?>
                <div class="card-body" id="hasil">
                    <div class="card card-success">
                        <div class="card-header">
                            <h3 class="card-title">Hasil Data Body Mass Index(BMI)</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->

                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Tgl</th>
                                        <th>Kode</th>
                                        <th>Nama</th>
                                        <th>Gender</th>
                                        <th>Berat</th>
                                        <th>Tinggi</th>
                                        <th>BMI</th>
                                        <th>Hasil</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $nomor = 1;
                                    foreach ($all_pasien as $pasien) {
                                        echo '<tr>';
                                        echo '<td>' . $nomor++ . '</td>';
                                        echo '<td>' . $pasien['tanggal'] . '</td>';
                                        echo '<td>' . $pasien['kodePasien'] . '</td>';
                                        echo '<td>' . $pasien['nama'] . '</td>';
                                        echo '<td>' . $pasien['jk'] . '</td>';
                                        echo '<td>' . $pasien['bb'] . '</td>';
                                        echo '<td>' . $pasien['tb'] . '</td>';
                                        echo '<td>' . $pasien['bmi'] . '</td>';
                                        echo '<td>' . $pasien['status']  . '</td>';
                                        echo '</tr>';
                                    }
                                    ?>
                                </tbody>
                            </table>

                        </div>

                    </div>

                </div>

                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalCenterTitle">Hasil check</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <h4 class="text-center">BMI Anda Adalah <span class="text-blue text-bold"><?= $pasien['bmi'] ?> </span></h4>
                                <img class="mx-auto d-block" src="./assets/dist/img/<?= $pasien['image'] ?>.PNG" alt="Image kurus">
                                <p class="text-caption text-center">BMI Status Anda <span class="text-bold"> <?= $pasien['status'] ?></span></p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-success" data-dismiss="modal">Lihat detail!</button>
                            </div>
                        </div>
                    </div>
                </div>
                <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
                <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
                <script type="text/javascript">
                    $(document).ready(function() {
                        $("#exampleModalCenter").modal();
                        $('#exampleModalCenter').on("hide.bs.modal", function() {
                            var objDiv = document.getElementById("hasil");
                            objDiv.scrollIntoView({
                                behavior: "smooth",
                                block: "end",
                                inline: "nearest"
                            });
                        })

                    });
                </script>
            <?php } ?>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
<script>
    $("#tgl_lahir").datepicker();
</script>
<?php

include_once 'layout/footer.php';

?>