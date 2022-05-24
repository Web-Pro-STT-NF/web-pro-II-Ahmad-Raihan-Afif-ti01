<?php
require_once './libfungsi.php';

// Define from form
$arr_form = [
    'Proses' => $_POST['proses'],
    'Nama'   => $_POST['nama'],
    'Mata Kuliah' => $_POST['matkul'],
    'Nilai UTS' => $_POST['nilai_uts'],
    'Nilai UAS' => $_POST['nilai_uas'],
    'Nilai Tugas' => $_POST['nilai_tugas']
];

$kkm = 55;
$total_nilai = countTotalNilai($arr_form['Nilai UTS'], $arr_form['Nilai UAS'], $arr_form['Nilai Tugas']);
$is_lulus = kelulusan($total_nilai, $kkm);
$grade = grade($total_nilai);
$predikat = predikat($grade);

$arr_form['Total Nilai Kumulatif'] = $total_nilai;
$arr_form['Lulus/Tidak Lulus'] = $is_lulus;
$arr_form['Grade'] = $grade;
$arr_form['Predikat'] = $predikat;


if (!empty($arr_form['Proses'])) {
    foreach ($arr_form as $form_key => $form_value) {
        echo "$form_key : $form_value <br />";
    }
}