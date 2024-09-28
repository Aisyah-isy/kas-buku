
<!-- SAMPAI TAMBAH USR(model + controler), MODEL, FALSH DATA -->
<div id="ilang">
  <?= $this->session->flashdata('alert', true);?>
</div>
<a class="btn btn-primary" href="<?= base_url('user/tambah')?>">Tambah User</a>
  <h3 class="card-header">Data User</h3>
    <div class="table-responsive text-nowrap">
      <table class="table">
        <thead>
          <tr class="text-nowrap">
            <th>#</th>
            <th>Username</th>
            <th>Nama</th>
            <th>Level</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php $no=1; foreach($user as $aa){?>
          <tr>
            <th scope="row"><?= $no;?></th>
            <td><?= $aa ['username'];?></td>
            <td><?= $aa ['nama'];?></td>
            <td><?= $aa ['level'];?></td>
            <td>
              <a class="btn btn-sm btn-primary" 
                href="<?= base_url('user/edit/'.$aa['id_user'])?>">
                <i class="bx bxs-edit"></i>
              </a>
              <a class="btn btn-sm btn-dark" 
                onClick="return confirm('Yakin pengen hapus?')" 
                href="<?= base_url('user/hapus/'.$aa['id_user'])?>">
                <i class="bx bxs-trash"></i>
              </a>
            </td>
          </tr>
          <?php $no++;}?>
        </tbody>
      </table>
    </div>
