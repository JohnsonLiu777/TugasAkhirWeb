<div class="container mt-5"> <!-- Menambahkan kelas "container" untuk Bootstrap -->
    <div class="row justify-content-center"> <!-- Menambahkan kelas "row" dan "justify-content-center" untuk Bootstrap -->
        <div class="col-md-6"> <!-- Menambahkan kelas "col-md-6" untuk Bootstrap -->

            <form action="<?= base_url('User/tambah_aksi') ?>" method="POST">
                <!-- Isi formulir Anda di sini -->
                <div class="form-group">
                    <label>Nama User</label>
                    <input type="text" name="pengguna_nama" class="form-control">
                    <?= form_error('pengguna_nama', '<div class="text-small text-danger">', '</div>'); ?>
                </div>
                <div class="form-group">
                    <label>UserName</label>
                    <input type="text" name="pengguna_username" class="form-control">
                    <?= form_error('pengguna_username', '<div class="text-small text-danger">', '</div>'); ?>
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="text" name="pengguna_password" class="form-control">
                    <?= form_error('pengguna_password', '<div class="text-small text-danger">', '</div>'); ?>
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="text" name="pengguna_email" class="form-control">
                    <?= form_error('pengguna_email', '<div class="text-small text-danger">', '</div>'); ?>
                </div>
                <div class="form-group">
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