<?php foreach($user as $aa){?>
<h4 class="mb2">Edit Data User</h4>
    <form action="<?= base_url('user/update')?>" method="post">
    <div class="mb-3">
        <label class="form-label" for="basic-default-fullname">Username</label>
        <input type="text" class="form-control" id="basic-default-fullname" name="username" value="<?= $aa['username']?>" readonly>
    </div>
    <div class="mb-3">
        <label class="form-label">Nama</label>
        <input type="text" class="form-control"  name="nama" value="<?= $aa['nama']?>">
    </div>
    <div class="mb-3">
        <label class="form-label" >Level</label>
            <select name="level" class="form-control">
                <option value="User" <?php if($aa['level']=='User'){ echo "selected";}?>>User</option>
                <option value="Admin" <?php if($aa['level']=='Admin'){ echo "selected";}?>>Admin</option>
            </select>
    </div>
    <input type="hidden" name="id_user" value="<?= $aa['id_user']?>">
    <button type="submit" class="btn btn-primary">Simpan</button>
    </form> 
<?php }?>