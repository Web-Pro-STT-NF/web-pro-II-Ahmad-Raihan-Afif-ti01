<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Form Nilai</title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">WEB02</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#WEB02" aria-controls="WEB02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Review PHP</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">PHP5 OOP</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li>
      </ul>
      <nav class="navbar navbar-light bg-light">
  <div class="container-fluid">
    <form class="d-flex">
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
  </div>
</nav>
<div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
    Dropdown
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
    <li><button class="dropdown-item" type="button">Action</button></li>
    <li><button class="dropdown-item" type="button">Another action</button></li>
    <li><button class="dropdown-item" type="button">Something else here</button></li>
  </ul>
    <button type="button" class="btn btn-success">Login</button>
</div>
</div>
</div>
</nav>

<div class="card" style="height: 100%;">
    <div class="card-body">
    <h4>Form Nilai Ujian</h4>
            <hr>
            <div class="d-flex justify-content-center">
                <div class="col-md-7">
        <form method="POST" action="nilai_siswa.php">
            <div class="form-group row">
                <label for="nama" class="col-4 col-form-label">Nama Lengkap</label>
                <div class="col-8">
                    <input id="nama" name="nama" placeholder="Nama Lengkap" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="matkul" class="col-4 col-form-label">Mata Kuliah</label>
                <div class="col-8">
                    <select id="matkul" name="matkul" class="custom-select">
                        <option value="DDP">Dasar Dasar Pemrograman</option>
                        <option value="BDI">Basis Data I</option>
                        <option value="WEB1">Pemrograman Web</option>
                        <option value="Data Warehouse">Data Warehouse</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="nilai" class="col-4 col-form-label">Nilai </label>
                <div class="col-8">
                    <input id="nilai" name="nilai" placeholder="Nilai" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <div class="offset-4 col-8">
                    <input name="proses" type="submit" class="btn btn-primary"></input>
                </div>
            </div>
        </form>

    <hr>
    <body size="3">
      <font>
        <p>
        <b>Lab Pemrograman Web Lanjutan</b>
        </p>
        <p>Dosen : Bapak Sirojul Munir S.SI,M.KOM</p>
        <p>STT-NF - Kampus B</p>
      </font>
    </body>
    <div class="card-footer text-center" >
       Made with &#x2600; By Nabila Fajri - 2022
    </div>

</body>
</html>