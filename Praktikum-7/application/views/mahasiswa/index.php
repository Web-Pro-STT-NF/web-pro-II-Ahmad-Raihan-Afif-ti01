   <!-- Content Wrapper. Contains page content -->
   <div class="content-wrapper">
       <!-- Content Header (Page header) -->
       <section class="content-header">
           <div class="container-fluid">
               <div class="row mb-2">
                   <div class="col-sm-6">
                       <h1>   Daftar Mahasiswa</h1>
                   </div>
                   <div class="col-sm-6">
                       <ol class="breadcrumb float-sm-right">
                           <li class="breadcrumb-item"><a href="#">Home</a></li>
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
                   <h3 class="card-title">Title</h3>

                   <div class="card-tools">
                       <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                           <i class="fas fa-minus"></i>
                       </button>
                       <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                           <i class="fas fa-times"></i>
                       </button>
                   </div>
               </div>
               <div class="card-body">
                   <div class="col-md-12">
                       <h3>
                           Daftar Mahasiswa
                       </h3>
                       <table class="table">
                           <thead>
                               <tr>
                                   <th>#</th>
                                   <th>NIM</th>
                                   <th>Nama</th>
                                   <th>Gender</th>
                                   <th>Tempat Lahir</th>
                                   <th>Tanggal Lahir</th>
                                   <th>IPK</th>
                                   <th>Predikat</th>
                               </tr>
                           </thead>
                           <tbody>
                               <?php
                                $nomor = 1;
                                foreach ($list_mhs as $row) {
                                ?>
                                   <tr>
                                       <td><?= $nomor ?></td>
                                       <td><?= $row->nim ?></td>
                                       <td><?= $row->nama ?></td>
                                       <td><?= $row->gender ?></td>
                                       <td><?= $row->tmp_lahir ?></td>
                                       <td><?= $row->tgl_lahir ?></td>
                                       <td><?= $row->ipk ?></td>
                                       <td><?= $row->prodi_kode ?></td>
                    

                                       <!-- <td><?= $nomor ?></td>
                                       <td><?= $mhs->nim ?></td>
                                       <td><?= $mhs->nama ?></td>
                                       <td><?= $mhs->gender ?></td>
                                       <td><?= $mhs->ipk ?></td> -->
                                      
                                   </tr>
                               <?php
                                    $nomor++;
                                }
                                ?>
                           </tbody>
                           </table>
                       <a class="btn btn-primary" href="<?php echo base_url('index.php/mahasiswa/create') ?>" role="button">Create Mahasiswa</a>
                       <table class="table">
                       </table>
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