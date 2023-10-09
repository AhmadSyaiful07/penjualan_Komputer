
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
        <!-- Main content -->
        <selection class="content">
          <div class="container-fluid">
           <div class="card">
                <div class="card-header">
                  <h3>Data Penjualan</h3>
                  <?php
                       $message = $this->session->flashdata('message');

                       if($message == "success"){
                  ?>
                      <script>alert('berhasil memasukan data')</script>
                  <?php
                       }
                       else if($message == "success update")
                       {
                       ?>
                       <script>alert('berhasil merubah data')</script>
                       <?php
                       }else if($message == "success delete")
                       {
                        ?>
                      <script>alert('berhasil menghapus data')</script>
                      <?php
                       }
                       ?>

                       
                    
              </div>
              <div class="card-body">
                <table class="table">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Merek</th>
                      <th>prosesor</th>
                      <th>RAM</th>
                      <th>Garansi</th>
                      <th>Harga</th>
                      <th>tanggal Pembelian</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $L = 1;
                      foreach($data as $d) :
                    ?>
                      <tr>
                        <td><?= $L ?></td>
                        <td><?= $d->merek ?></td>
                        <td><?= $d->prosesor ?></td>
                        <td><?= $d->RAM ?></td>
                        <td><?= $d->garansi ?></td>
                        <td><?= $d->harga ?></td>
                        <td><?= $d->tanggal_pembelian ?></td>
                        <td>
                            <a href="<?= base_url()?>komputer/update_penjualan?id=<?= $d->id ?>" type="button" class="btn btn-warning">
                            <i class="fas fa-pencil-alt"></i></a>
                            <a href="<?= base_url()?>komputer/delete_data?id=<?= $d->id ?>" type="button" class="btn btn-danger">
                            <i class="fas fa-trash"></i></a>
                        </td>
                      </tr>                            
                    <?php
                      $L++;
                      endforeach;
                    ?>
                  </tbody>
                </table>
              </div>
          </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  