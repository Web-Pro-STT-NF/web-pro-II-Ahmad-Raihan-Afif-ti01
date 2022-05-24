<?php
class BMI
{
    protected $berat;
    protected $tinggi;

    public function __construct($berat, $tinggi)
    {
        $this->berat = $berat;
        $this->tinggi = $tinggi;
    }

    public function getProperties($propertie)
    {
        return $this->{$propertie};
    }

    public function getNilaiBMI()
    {
        $bb = (int)$this->berat;
        $tb = (int)$this->tinggi;

        if ($bb == 0) {
            return 0;
        }

        $a = $tb * 0.01;
        $b = $a * 2;
        $c = $bb / $b;
        $angka = number_format($c, 2);

        return $angka;
    }

    public function getStatusBMI()
    {
        $nilai_bmi = $this->getNilaiBMI();
        if ($nilai_bmi >= 30.0) {
            $status = "Kegemukan/Obesitas";
        } elseif ($nilai_bmi >= 25.0 && $nilai_bmi <= 29.9) {
            $status = "Kelebihan berat badan";
        } elseif ($nilai_bmi >= 18.5 && $nilai_bmi <= 24.9) {
            $status = "Normal/Ideal";
        } elseif ($nilai_bmi < 18.5) {
            $status = "Kekurangan berat badan";
        } else {
            $status = "Tidak Diketahui";
        }

        return $status;
    }

    public function getImageByNilaiBMI()
    {
        $nilai_bmi = $this->getNilaiBMI();
        if ($nilai_bmi >= 30.0) {
            return "obesitas-2";
        } elseif ($nilai_bmi >= 27.0 && $nilai_bmi <= 29.9) {
            return "obesitas-1";
        } elseif ($nilai_bmi >= 24 && $nilai_bmi <= 26.9) {
            return "gemuk";
        } elseif ($nilai_bmi >= 18.5 && $nilai_bmi <= 23.9) {
            return "sedang";
        } elseif ($nilai_bmi < 18.5) {
            return "kurus";
        } else {
            return "Tidak Diketahui";
        }
    }
}
