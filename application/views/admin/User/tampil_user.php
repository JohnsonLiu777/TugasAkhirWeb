<div class="content-wrapper">

<div class="content-header">
<div class="container-fluid">
<div class="row mb-2">
<div class="col-sm-6">
<h1 class="m-0">Dashboard User</h1>
</div>
<div class="col-sm-6">
<ol class="breadcrumb float-sm-right">
<li class="breadcrumb-item"><a href="#">Home</a></li>
<li class="breadcrumb-item active"> Data Barang</li>
</ol>
</div>
</div>
</div>
</div>


<div class="content">
<div class="container-fluid">
 
 <!-- mendapatkan pesan dari flashdata yang digunakan -->
 <?= $this->session->flashdata('pesan'); ?> 

 <div class="card">
    <div class="card-header">
        <a href="<?= base_url('User/tambah') ?>" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i> Tambah User </a>
    </div>

    <div class="card-body">
    <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4"><div class="row"><div class="col-sm-12 col-md-6"></div><div class="col-sm-12 col-md-6"></div></div><div class="row"><div class="col-sm-12">
        
    <table id="example2" class="table table-bordered table-hover dataTable dtr-inline" style="font-size: 14px; margin-top: 10px; margin-bottom: 10px;">
    <thead>
    <tr>
         <th class="sorting sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Id Barang"> Id User</th>
         <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Stok">Pasword</th>
         <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Keterangan">email</th>
        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Nama Barang">Nama User</th>
        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Harga Barang">Username</th>
        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Harga Barang">Action</th>
       </tr>
   
    </thead>

 <tbody>



<!-- Menggunakan for each untuk menampilkan data dari database -->
<?php foreach ($data_user as $db): ?>


    <tr class="odd">
         <td><?= $db->pengguna_id?></td>
        <td><?= $db->pengguna_password?></td>
        <td><?= $db->pengguna_email?></td>
        <td><?= $db->pengguna_nama?></td>
        <td><?= $db->pengguna_username?></td>
        <td>
            <button data-toggle="modal" data-target="#edit<?= $db->pengguna_id ?>" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></button>
            <a href="<?= base_url('User/delete/' . $db->pengguna_id) ?>" class="btn btn-danger btn-sm" onclick="return confirm('apakah anda yakin ingin menghapus data ini?')"><i class="fas fa-trash"></i></a>

        </td>

    </tr>

<?php endforeach?>


</tbody>
</table></div></div>
</div>

</div>
</div>







<?php foreach ($data_user as $db): ?>
<!-- Modal -->
<div class="modal fade" id="edit<?= $db->pengguna_id ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit User</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

      <form action="<?= base_url('User/edit/' . $db->pengguna_id) ?>" method="POST">
                <!-- Isi formulir Anda di sini -->
                <div class="form-group">
                    <label>Nama User</label>
                    <input type="text" name="pengguna_nama" class="form-control" value="<?= $db->pengguna_nama ?>" >
                    <?= form_error('pengguna_nama', '<div class="text-small text-danger">', '</div>'); ?>
                </div>
                <div class="form-group">
                    <label>UserName</label>
                    <input type="text" name="pengguna_username" class="form-control" value="<?= $db->pengguna_username ?>">
                    <?= form_error('pengguna_username', '<div class="text-small text-danger">', '</div>'); ?>
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="text" name="pengguna_password" class="form-control" value="<?= $db->pengguna_password ?>">
                    <?= form_error('pengguna_password', '<div class="text-small text-danger">', '</div>'); ?>
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="text" name="pengguna_email" class="form-control" value="<?= $db->pengguna_email ?>">
                    <?= form_error('pengguna_email', '<div class="text-small text-danger">', '</div>'); ?>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-save"></i> Simpan</button>
                    <button type="reset" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Reset</button>
                </div>
            </form>

        </div>
    </div>
</div>
</div>

</div>

</div>

</div>
</div>
       
     

<?php endforeach?>