
<!-- SAMPAI TAMBAH USR(model + controler), MODEL, FALSH DATA -->
<div id="ilang">
  <?= $this->session->flashdata('alert', true);?>
</div>
  <!-- Button trigger modal -->
  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Tambah Pemasukan
  </button>

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tambah Pemasukan</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="<?= base_url('pemasukan/simpan')?>" method="post">
          <div class="modal-body">
                <div class="mb-3">
                  <label class="form-label" for="basic-default-fullname">Keterangan</label>
                  <input type="text" class="form-control" id="basic-default-fullname" name="keterangan">
                </div>
                <div class="mb-3">
                  <label class="form-label">Nominal</label>
                  <input type="number" class="form-control"  name="nominal">
                </div>
                <div class="mb-3">
                  <label class="form-label" >Tanggal</label>
                  <input type="date" class="form-control" name="tanggal">
                </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Simpan</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <h3 class="card-header">Data Pemasukan</h3>
    <div class="table-responsive text-nowrap">
      <table class="table">
        <thead>
          <tr class="text-nowrap">
            <th>#</th>
            <th>Tanggal</th>
            <th>Keterangan</th>
            <?php if($this->session->userdata('level')=='Admin'){?>
              <th>Username</th>
            <?php } ?>
            <th>Nominal</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php $no=1; foreach($pemasukan as $aa){?>
          <tr>
            <th scope="row"><?= $no;?></th>
            <td><?= $aa ['tanggal'];?></td>
            <td><?= $aa ['keterangan'];?></td>
            <?php if($this->session->userdata('level')=='Admin'){ ?>
              <td><?= $aa ['username'];?></td>
            <?php } ?>
            <td>Rp. <?= number_format($aa ['nominal']);?></td>
            <td>
              <a class="btn btn-sm btn-primary" 
                onClick="return confirm('Apakah anda yakin ingin hapus data ini?')"
                href="<?= base_url('pemasukan/hapus/'.$aa['transaksi_id'])?>">
                <i class="bx bxs-trash"></i>
              </a>
            </td>
          </tr>
          <?php $no++; } ?>
        </tbody>
      </table>
    </div>
