   <!-- Content Wrapper. Contains page content -->
   <div class="content-wrapper">
       <!-- Content Header (Page header) -->
       <section class="content-header">
           <div class="container-fluid">
               <div class="row mb-2">
                   <div class="col-sm-6">
                       <h1>Data Mahasiswa</h1>
                   </div>
                   <div class="col-sm-6">
                       <ol class="breadcrumb float-sm-right">
                           <li class="breadcrumb-item"><a href="<?= base_url('index.php/mahasiswa') ?>">Home</a></li>
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
                           <i class="fas fa-times"></i>
                       </button> -->
                   </div>
               </div>
               <div class="card-body">
                   <div class="row mb-2">
                       <div class="col-sm-8">
                           <table class="table table-striped">
                               <tbody>
                                   <tr>
                                       <td>NIM</td>
                                       <td><?= $mhs->nim ?></td>
                                   </tr>
                                   <tr>
                                       <td>Nama Lengkap</td>
                                       <td><?= $mhs->nama ?></td>
                                   </tr>
                                   <tr>
                                       <td>Gander</td>
                                       <td><?= $mhs->gender ?></td>
                                   </tr>
                                   <tr>
                                       <td>Tempat Lahir</td>
                                       <td><?= $mhs->tmp_lahir ?></td>
                                   </tr>
                                   <tr>
                                       <td>Tanggal Lahir</td>
                                       <td><?= $mhs->tgl_lahir ?></td>
                                   </tr>
                                   <tr>
                                       <td>Prodi</td>
                                       <td><?= $mhs->prodi_kode ?></td>
                                   </tr>
                                   <tr>
                                       <td>IPK</td>
                                       <td><?= $mhs->ipk ?></td>
                                   </tr>
                               </tbody>
                           </table>
                       </div>
                       <div class="col-sm-4">
                           <?php
                            echo form_open_multipart('mahasiswa/upload');
                            ?>
                           <input type="hidden" name="nim" value="<?= $mhs->nim ?>" />
                           <?php
                            $filegambar = base_url('/uploads/' . $mhs->foto);
                            // echo $filegambar;
                            // $array = get_headers($filegambar);
                            // $string = $array[0];
                            // if (strpos($string, "200")) {

                            //     echo '<img src="' . $filegambar . '" alt = "foto"/>';
                            // } else {
                            //     echo '<img src ="' . base_url('/uploads/noimage.jpg') . '" alt = "foto"/>';
                            // }
                            if ($mhs->foto == null) {
                                echo '<img src ="' . base_url('/uploads/noimage.jpg') . '" alt = "foto" width:100%;/>';
                                echo '<input type="file" name="fotomhs" size="20" />';
                                echo '<input type="submit" class="btn btn-primary" value="Upload" />';
                            } else {
                                echo '<img src="' . $filegambar . '" alt = "foto" style="width:100%;" />';
                            }
                            ?>
                           <br />
                           <?php
                            // if (file_exists($filegambar)) {
                            // echo '<img src =" ' . $filegambar . ' alt = "foto"/>';
                            // } else {
                            //     echo '<img src =" ' . base_url('/uploads/noimage.jpg') . '" alt = "foto"/>';
                            // }
                            ?>
                           <?php
                            echo form_close();
                            ?>
                       </div>
                   </div>
                   <!-- /.card-body -->
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