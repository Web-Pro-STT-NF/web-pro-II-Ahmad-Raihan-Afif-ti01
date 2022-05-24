
<?php

//method persentase nilai akhir

function persentase($_uts, $_uas, $_tugas)
{
    $result = (30 * (int)$_uts / 100) + (30 * (int)$_uas / 100) + ((30 * (int)$_tugas / 100));
    return $result;
}
//method kelulusan
function kelulusan($_nilai)
{
    if ($_nilai > 55) {
        return "LULUS";
    } else {
        return "TIDAK LULUS";
    }
}
//method grade nilai
function grade_nilai($_nilai)
{
    if ($_nilai > 85) {
        return "A";
    } else if ($_nilai > 70) {
        return "B";
    } else if ($_nilai > 56) {
        return "C";
    } else if ($_nilai > 36) {
        return "D";
    } else if ($_nilai > 0) {
        return "E";
    } else {
        return "I";
    }
}
//method predikat nilai
function predikat_nilai($_grade)
{
    switch ($_grade) {
        case "A":
            return "SANGAT MEMUASKAN";
            break;
        case "B":
            return "MEMUASKAN";
            break;
        case "C":
            return "CUKUP";
            break;
        case "D":
            return "KURANG";
            break;
        case "B":
            return "SANGAT KURENGG";
            break;
        default:
            return "Predikat Tidak Terdefinisi";
    }
}
