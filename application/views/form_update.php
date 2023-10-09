 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">FORM INPUT PEMESANAN</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">PEMESANAN</a></li>
              <li class="breadcrumb-item active">INPUT</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <section class="content">
     <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                PEMESANAN
         </div>
         <form action="<?= base_url('komputer/update_data')?>" method="post">   
                <div class="card-body">
                  <?php
                       $message = $this->session->flashdata('message');

                       if($message == "success"){
                  ?>
                           <script>alert('berhasil memasukan data')</script>
                  <?php
                       };
                       foreach ($data as  $d) :
                  ?>   
                    <label for="">ID</label>
                    <input readonly value="<?= $d->id?>" required type="text" class="form-control" name="id"> 
                    <label for="">merek</label>
                    <select class="form-control" name="merek" id="">
                        <option value="">Pilih Jenis Merek</option>
                        <option value="samsung">samsung</option>
                        <option value="advan">advan</option>
                        <option value="asus">asus</option>
                        <option value="acer">acer</option>
                        <option value="lenovo">lenovo</option>
                        <option value="apple">apple</option>
                        <option value="dell">dell</option>
                        <option value="hp">hp</option>
                    </select> 
                    <label for="">prosesor</label>
                    <select class="form-control" name="prosesor" id="">
                        <option value="">Pilih Jenis Prosesor</option>
                        <option value="Intel">Intel</option>
                        <option value="AMD">AMD</option>
                        <option value="Apple">Apple</option>
                        <option value="IBM">IBM</option>
                        <option value="IDT WindChip">IDT WindChip</option>
                        <option value="Transmeta">Transmeta</option>
                        <option value="Cyrix">Cyrix</option>
                    </select>
                    <label for="">RAM</label>
                    <select class="form-control" name="RAM" id="">
                        <option value="">Pilih RAM</option>
                        <option value="2GB">2GB</option>
                        <option value="4GB">4GB</option>
                        <option value="8GB">8GB</option>
                    </select>
                    <label for="">Garansi</label>
                    <select class="form-control" name="garansi" id="">
                        <option value="">Silahkan Pilih Garansi</option>
                        <option value="1Tahun">1Tahun</option>
                        <option value="2Tahun">2Tahun</option>
                    </select>
                    <label for="">Harga</label>
                    <input required type="text" class="form-control" name="harga">
                    <label for="">tanggal pembelian</label>
                    <input  required type="date" class="form-control" name="tanggal_pembelian"> 
                   
                </div>
                <?php
                        endforeach;
                ?>
                <div class="card-footer">
                    <button type="submit" class="btn btn-outline-info">SIMPAN</button>
                </div>
        </form>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 