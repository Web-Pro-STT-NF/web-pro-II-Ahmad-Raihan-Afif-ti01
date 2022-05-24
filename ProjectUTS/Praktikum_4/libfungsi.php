<?php
function kelulusan($_nilai, $kkm)
{
    if ($_nilai > $kkm) {
        return 'LULUS';
    } else {
        return 'TIDAK LULUS';
    }
}

function grade($total_nilai)
{
    if ($total_nilai < 35 && $total_nilai > 0) {
        return 'E';
    } elseif ($total_nilai > 36 && $total_nilai < 55) {
        return 'D';
    } elseif ($total_nilai > 56 && $total_nilai < 69) {
        return 'C';
    } elseif ($total_nilai > 70 && $total_nilai < 84) {
        return 'B';
    } elseif ($total_nilai > 85 && $total_nilai < 100) {
        return 'A';
    } else {
        return 'I';
    }
}

function predikat($grade)
{
    switch ($grade) {
        case 'E':
            return 'Sangat Kurang';
            break;

        case 'D':
            return 'Kurang';
            break;

        case 'C':
            return 'Cukup';
            break;

        case 'B':
            return 'Memuaskan';
            break;

        case 'A':
            return 'Sangat Memuaskan';
            break;

        default:
            return 'Tidak Ada';
            break;
    }
}

function countTotalNilai($nilai_uts, $nilai_uas, $nilai_tugas)
{
    return ($nilai_uts * (30 / 100)) + ($nilai_uas * (35 / 100)) + ($nilai_tugas * (35 / 100));
}

?>