<div class="row" style="margin-bottom: 10px">
    <div class="col-md-4">
        <?= anchor(site_url('barang/create'),'Tambah', 'class="btn btn-primary"'); ?>
    </div>
    <div class="col-md-4 text-center">
        <div style="margin-top: 8px" id="message">
            <?= $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
        </div>
    </div>
    <div class="col-md-1 text-right"></div>
    <div class="col-md-3 text-right">
        <form action="<?= site_url('barang'); ?>" class="form-inline" method="get">
            <div class="input-group">
                <input type="text" class="form-control" name="q" value="<?= $q; ?>">
                <span class="input-group-btn">
                    <?php if ($q <> '') { ?>
                    <a href="<?= site_url('barang'); ?>" class="btn btn-default">Reset</a>
                    <?php } ?>
                    <button class="btn btn-primary" type="submit">Cari</button>
                </span>
            </div>
        </form>
    </div>
</div>
<table class="table table-bordered" style="margin-bottom: 10px">
    <tr>
        <th class="text-nowrap">No</th>
        <th>Kategori Id</th>
        <th>Kode</th>
        <th>Nama</th>
        <th>Jumlah</th>
        <th class="text-nowrap">Action</th>
    </tr>
    <?php foreach ($barang_data as $barang) { ?>
    <tr>
        <td class="text-nowrap"><?= ++$start ?></td>
        <td><?= $barang->kategori_id ?></td>
        <td><?= $barang->kode ?></td>
        <td><?= $barang->nama ?></td>
        <td><?= $barang->jumlah ?></td>
        <td class="text-center text-nowrap">
            <?php
            echo anchor(site_url('barang/read/'.$barang->id),'Detail');
            echo ' :: ';
            echo anchor(site_url('barang/update/'.$barang->id),'Ubah');
            echo ' :: ';
            echo anchor(site_url('barang/delete/'.$barang->id),'Hapus','onclick="javasciprt: return confirm(\'apakah Anda yakin akan menghapus data ini ?\')"');
            ?>
        </td>
    </tr>
    <?php } ?>
</table>
<div class="row">
    <div class="col-md-6">
        <a href="#" class="btn btn-primary">Jumlah Data : <?= $total_rows ?></a>
        <?= anchor(site_url('barang/excel'), 'Excel', 'class="btn btn-primary"'); ?>
        <?= anchor(site_url('barang/word'), 'Word', 'class="btn btn-primary"'); ?>
    </div>
    <div class="col-md-6 d-flex justify-content-end">
        <?= $pagination ?>
    </div>
</div>
