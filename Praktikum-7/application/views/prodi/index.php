   <!-- Content Wrapper. Contains page content -->
   <div class="content-wrapper">
       <!-- Content Header (Page header) -->
       <section class="content-header">
           <div class="container-fluid">
               <div class="row mb-2">
                   <div class="col-sm-6">
                       <h1>Blank Page</h1>
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
                   <h3 class="card-title">Data Program Studi</h3>

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
                           Data Program Studi
                       </h3>
                       <div class="table-responsive">
                           <table class="table table-striped table-hover table-sm">
                               <thead>
                                   <tr>
                                       <th>No</th>
                                       <th>Kode</th>
                                       <th>Nama Prodi</th>
                                       <th>Ketua Prodi</th>
                                   </tr>
                               </thead>
                               <tbody>
                                   <?php
                                    $nomor = 1;
                                    foreach ($list_prodi as $row) {
                                    ?>
                                       <tr>
                                           <td><?= $nomor ?></td>
                                           <td><?= $row->kode ?></td>
                                           <td><?= $row->nama ?></td>
                                           <td><?= $row->kaprodi ?></td>

                                       </tr>
                                   <?php
                                        $nomor++;
                                    }
                                    ?>
                               </tbody>
                           </table>
                       </div>
                       <a class="btn btn-primary" href="<?php echo base_url('index.php/prodi/create') ?>" role="button">Create Prodi</a>
                       <table class="table">
                           <thead>
                           </thead>
                           <tbody>
                           </tbody>
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