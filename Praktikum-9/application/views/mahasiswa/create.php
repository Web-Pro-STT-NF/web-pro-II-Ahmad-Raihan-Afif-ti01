   <!-- Content Wrapper. Contains page content -->
   <div class="content-wrapper">
       <!-- Content Header (Page header) -->
       <section class="content-header">
           <div class="container-fluid">
               <div class="row mb-2">
                   <div class="col-sm-6">
                       <h1><?= $judul ?></h1>
                   </div>
                   <div class="col-sm-6">
                       <ol class="breadcrumb float-sm-right">
                           <li class="breadcrumb-item"><a href="">Home</a></li>
                           <li class="breadcrumb-item active">Blank Page</li>
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
                   <h3 class="card-title">Biodata Mahasiwa</h3>

                   <div class="card-tools">
                       <!-- <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                           <i class="fas fa-minus"></i>
                       </button>
                       <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                           <i class="fas fa-times"></i> -->
                       </button>
                   </div>
               </div>
               <div class="card-body">

                   <?php echo form_open('mahasiswa/save') ?>
                   <form>
                       <div class="form-group row">
                           <label class="col-4 col-form-label" for="nim">NIM</label>
                           <div class="col-8">
                               <div class="input-group">
                                   <div class="input-group-prepend">
                                       <div class="input-group-text">
                                           <i class="fa fa-address-book-o"></i>
                                       </div>
                                   </div>
                                   <input id="nim" name="nim" type="text" class="form-control">
                               </div>
                           </div>
                       </div>
                       <div class="form-group row">
                           <label for="nama" class="col-4 col-form-label">Nama Lengkap</label>
                           <div class="col-8">
                               <input id="nama" name="nama" type="text" class="form-control">
                           </div>
                       </div>
                       <div class="form-group row">
                           <label class="col-4">Jenis Kelamin</label>
                           <div class="col-8">
                               <div class="custom-control custom-radio custom-control-inline">
                                   <input name="gender" id="radio_0" type="radio" class="custom-control-input" value="L">
                                   <label for="radio_0" class="custom-control-label">Laki-laki</label>
                               </div>
                               <div class="custom-control custom-radio custom-control-inline">
                                   <input name="gender" id="radio_1" type="radio" class="custom-control-input" value="P">
                                   <label for="radio_1" class="custom-control-label">Perempuan</label>
                               </div>
                           </div>
                       </div>
                       <div class="form-group row">
                           <label for="tmp_lahir" class="col-4 col-form-label">Tempat Lahir</label>
                           <div class="col-8">
                               <div class="input-group">
                                   <div class="input-group-prepend">
                                       <div class="input-group-text">
                                           <i class="fa fa-address-card-o"></i>
                                       </div>
                                   </div>
                                   <input id="tmp_lahir" name="tmp_lahir" type="text" class="form-control">
                               </div>
                           </div>
                       </div>
                       <div class="form-group row">
                           <label for="tgl_lahir" class="col-4 col-form-label">Tanggal Lahir</label>
                           <div class="col-8">
                               <div class="input-group">
                                   <div class="input-group-prepend">
                                       <div class="input-group-text">
                                           <i class="fa fa-address-card-o"></i>
                                       </div>
                                   </div>
                                   <input id="tgl_lahir" name="tgl_lahir" type="date" class="form-control">
                               </div>
                           </div>
                       </div>
                       <div class="form-group row">
                           <label for="prodi" class="col-4 col-form-label">Prodi</label>
                           <div class="col-8">
                               <select id="prodi" name="prodi" class="custom-select">
                                   <option value="TI">Teknik Informatika</option>
                                   <option value="SI">Sistem Informatika</option>
                                   <option value="BI">Bisnis Digital</option>
                               </select>
                           </div>
                       </div>
                       <div class="form-group row">
                           <label for="ipk" class="col-4 col-form-label">IPK</label>
                           <div class="col-8">
                               <div class="input-group">
                                   <div class="input-group-prepend">
                                       <div class="input-group-text">
                                           <i class="fa fa-cog"></i>
                                       </div>
                                   </div>
                                   <input id="ipk" name="ipk" type="text" class="form-control">
                               </div>
                           </div>
                       </div>
                       <div class="form-group row">
                           <div class="offset-4 col-8">
                               <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                           </div>
                       </div>
                   </form>
                   <!-- /.card-body -->
                   <?php echo form_close() ?>
                   <div class="card-footer">
                       Footer
                   </div>
                   <!-- /.card-footer-->
               </div>
               <!-- /.card -->

       </section>
       <!-- /.content -->
   </div>
   <!-- /.content-wrapper -->