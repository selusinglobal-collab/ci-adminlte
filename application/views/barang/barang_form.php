<form action="<?= $action; ?>" method="post">
    <div class="space-y">
        <div class="form-group">
            <label class="form-label" for="kategori_id">Kategori Id <?= form_error('kategori_id') ?></label>
            <input type="text" class="form-control" name="kategori_id" id="kategori_id" placeholder="Kategori Id" value="<?= $kategori_id; ?>" />
        </div>
        <div class="form-group">
            <label class="form-label" for="kode">Kode <?= form_error('kode') ?></label>
            <input type="text" class="form-control" name="kode" id="kode" placeholder="Kode" value="<?= $kode; ?>" />
        </div>
        <div class="form-group">
            <label class="form-label" for="nama">Nama <?= form_error('nama') ?></label>
            <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama" value="<?= $nama; ?>" />
        </div>
        <div class="form-group">
            <label class="form-label" for="jumlah">Jumlah <?= form_error('jumlah') ?></label>
            <input type="text" class="form-control" name="jumlah" id="jumlah" placeholder="Jumlah" value="<?= $jumlah; ?>" />
        </div>
    </div>
    <input type="hidden" name="id" value="<?= $id; ?>" /> 
    <br>
    <button type="submit" class="btn btn-primary"><?= $button ?></button> 
    <a href="<?= site_url('barang') ?>" class="btn btn-default">Batal</a>
</form>
