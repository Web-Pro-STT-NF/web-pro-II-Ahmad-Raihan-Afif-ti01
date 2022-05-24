<?php
require_once './account_bank.php';
require_once './daftar_account.php';

class AccountBank extends Account
{
    public function doTransfer($destination, $uangTransfer)
    {
        Account::withdraw($uangTransfer, false);
        $destination->deposit($uangTransfer, false);

        echo "Transfer sejumlah " .  number_format($uangTransfer, 2, ',', '.') . " dari $this->nama - $this->nomor ke $destination->nama - $destination->nomor sukses! </br>";
    }
}

$ahmad = new AccountBank('C001', 'ahmad', 500000);
$budi = new AccountBank('C002', 'budi', 0);
$kurniawan = new AccountBank('C003', 'kurniawan', 0);

$ahmad->deposit(1000000);

$ahmad->doTransfer($kurniawan, 1500000);

$ahmad->doTransfer($budi, 500000);

$budi->deposit(-2500000);
?>