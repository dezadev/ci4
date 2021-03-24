<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-5">
            <h2 class="my-2">Detail Orang</h2>
            <form action="/orang/save" method="POST">
                <?= csrf_field(); ?>
                <div class="row mb-3">
                    <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nama" name="nama" autofocus value="<?= $orang['nama']; ?>" readonly>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="alamat" name="alamat" value="<?= $orang['alamat']; ?>" readonly>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="email" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="email" name="email" value="<?= $orang['email']; ?>" readonly>

                    </div>
                </div>
                <a href="/orang" class="btn btn-primary">Kembali</a>
                <!-- <button type="submit" class="btn btn-primary">Tambah</button> -->
            </form>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>