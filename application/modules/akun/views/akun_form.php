<form action="<?= $action; ?>" method="post">
    <div class="space-y">
        <div class="form-group">
            <label class="form-label" for="kode">Kode <?= form_error('kode') ?></label>
            <input type="text" class="form-control" name="kode" id="kode" placeholder="Kode" value="<?= $kode; ?>" />
        </div>
        <div class="form-group">
            <label class="form-label" for="nama">Nama <?= form_error('nama') ?></label>
            <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama" value="<?= $nama; ?>" />
        </div>
    </div>
    <input type="hidden" name="id" value="<?= $id; ?>" /> 
    <br>
    <button type="submit" class="btn btn-primary"><?= $button ?></button> 
    <a href="<?= site_url('akun') ?>" class="btn btn-default">Batal</a>
</form>
