
        <div class="row ">
            <div class="col-12 bg-info text-center pt-3 .">
                <h3>Sistem Penilaian</h3>
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
                <form method="POST">
                    <div class="form-group row">
                        <label for="nama" class="col-4 col-form-label">Nama Lengkap</label>
                        <div class="col-5">
                            <input id="nama" name="nama" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="matkul" class="col-4 col-form-label">Mata Kuliah</label>
                        <div class="col-5">
                            <select id="matkul" name="matkul" class="custom-select">
                                <option value="Dasar-dasar Pemrograman">Dasar-dasar Pemrograman</option>
                                <option value="Pemrograman Web">Pemrograman Web</option>
                                <option value="Basis Data">Basis Data</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nilai_uts" class="col-4 col-form-label">Nilai UTS</label>
                        <div class="col-3">
                            <input id="nilai_uts" name="nilai_uts" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nilai_uas" class="col-4 col-form-label">Nilai UAS</label>
                        <div class="col-3">
                            <input id="nilai_uas" name="nilai_uas" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nilai_tugas" class="col-4 col-form-label">Nilai Tugas</label>
                        <div class="col-3">
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
                include_once 'libfungsi.php';
                $proses = isset($_POST['proses']) ? $_POST['proses'] : ' ';
                $nama = isset($_POST['nama']) ? $_POST['nama'] : ' ';
                $mata_kuliah = isset($_POST['matkul']) ? $_POST['matkul'] : ' ';
                $nilai_uts = isset($_POST['nilai_uts']) ? $_POST['nilai_uts'] : ' ';
                $nilai_uas = isset($_POST['nilai_uas']) ? $_POST['nilai_uas'] : ' ';
                $nilai_tugas = isset($_POST['nilai_tugas']) ? $_POST['nilai_tugas'] : ' ';
                $grade = isset($_POST['grade']) ? $_POST['grade'] : ' ';
                $grade_uas = isset($_POST['grade_$grade_uas']) ? $_POST['grade_$grade_uas'] : ' ';
                $grade_tugas = isset($_POST['grade_t$grade_tugas']) ? $_POST['grade_t$grade_tugas'] : ' ';
                echo "Nama : $nama";
                echo "</br> Mata Kuliah : $mata_kuliah";
                echo "</br> Nilai UTS : $nilai_uts";
                echo "</br> Nilai UAS : $nilai_uas";
                echo "</br> Nilai Tugas : $nilai_tugas";
                echo "<hr>";

                $nilai_akhir = persentase($nilai_uts, $nilai_uas, $nilai_tugas);
                $grade_nilai = grade_nilai($nilai_akhir);

                echo "</br> Nilai Akhir : $nilai_akhir";
                echo "</br> Status : ", kelulusan($nilai_akhir);
                echo "</br> Grade Nilai : ", $grade_nilai;
                echo "</br> Predikat Nilai : ", predikat_nilai($grade_nilai);

                ?>
            </div>
        </div>
        <div class="row">
            <div class="col-12 bg-info text-center pt-3">
                <p>Develop By Ahmad Raihan Afif</p>
            </div>
        </div>
    </div>
</body>

</html>