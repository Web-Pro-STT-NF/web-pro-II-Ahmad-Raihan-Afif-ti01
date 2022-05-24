<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title>Tugas Nilai Nabila-SI 18</title>
</head>
<body>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="row">
            <div class="col-md-8">
                    <h4>Belanja Online</h4>
                    <hr>
				<div class="col-md-8 ">
				<form method="POST" action="form_belanja.php">
  <div class="form-group row">
    <label for="text1" class="col-4 col-form-label">Customer</label> 
    <div class="col-8">
      <input id="text1" name="customer" placeholder="Nama Customer" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Pilih Produk</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="radio_0" type="radio" class="custom-control-input" value="tv"> 
        <label for="radio_0" class="custom-control-label">TV</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="radio_1" type="radio" class="custom-control-input" value="kulkas"> 
        <label for="radio_1" class="custom-control-label">Kulkas</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="radio_2" type="radio" class="custom-control-input" value="mesin_cuci"> 
        <label for="radio_2" class="custom-control-label">Mesin Cuci</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="text2" class="col-4 col-form-label">Jumlah</label> 
    <div class="col-8">
      <input id="text2" name="jumlah" placeholder="Jumlah" type="text" class="form-control">
    </div>
  </div> 
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-success">Kirim</button>
    </div>
  </div>
</form>

				</div>
                <div class="col-md-4">
                    <div class="card" style="width: 26.5rem;">
                        <div class="card-header bg-primary text-white">
                            Daftar Harga
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">TV : 4.200.000</li>
                            <li class="list-group-item">Kulkas : 3.100.000</li>
                            <li class="list-group-item">MESIN CUCI : 3.800.000</li>
                        </ul>
                        <div class="card-footer bg-primary text-white">
                            Harga Dapat Berubah Setiap Saat
                        </div>
                    </div>
                </div>
			</div>
            <div class="m-4">
            <?php
           
            $customer = $_POST['customer'];
            $produk = $_POST['produk'];
            $jumlah = $_POST['jumlah'];

            if ($produk == 'tv') {
                $harga = $jumlah * 4200000;
            } elseif ($produk == 'kulkas') {
                $harga = $jumlah * 3100000;
            } elseif ($produk == 'mesin_cuci') {
                $harga = $jumlah * 3800000;
            } 
            
            echo '<br/>Nama Customer : ' .$customer;
            echo '<br/>Produk Pilihan : ' .$produk;
            echo '<br/>Jumlah Beli : ' .$jumlah;
            echo '<br/>Total Belanja : ' .$harga;
        ?>

            </div>
		</div>
	</div>
</div>  
</body>
</html>
