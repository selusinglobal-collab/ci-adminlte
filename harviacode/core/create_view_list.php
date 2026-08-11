<?php

$string = "<div class=\"row\" style=\"margin-bottom: 10px\">
    <div class=\"col-md-4\">
        <?= anchor(site_url('".$c_url."/create'),'Tambah', 'class=\"btn btn-primary\"'); ?>
    </div>
    <div class=\"col-md-4 text-center\">
        <div style=\"margin-top: 8px\" id=\"message\">
            <?= \$this->session->userdata('message') <> '' ? \$this->session->userdata('message') : ''; ?>
        </div>
    </div>
    <div class=\"col-md-1 text-right\"></div>
    <div class=\"col-md-3 text-right\">
        <form action=\"<?= site_url('$c_url'); ?>\" class=\"form-inline\" method=\"get\">
            <div class=\"input-group\">
                <input type=\"text\" class=\"form-control\" name=\"q\" value=\"<?= \$q; ?>\">
                <span class=\"input-group-btn\">
                    <?php if (\$q <> '') { ?>
                    <a href=\"<?= site_url('$c_url'); ?>\" class=\"btn btn-default\">Reset</a>
                    <?php } ?>
                    <button class=\"btn btn-primary\" type=\"submit\">Cari</button>
                </span>
            </div>
        </form>
    </div>
</div>
<table class=\"table table-bordered\" style=\"margin-bottom: 10px\">
    <tr>
        <th class=\"text-nowrap\">No</th>";
        foreach ($non_pk as $row) {
            $string .= "
        <th class=\"text-nowrap\">" . label($row['column_name']) . "</th>";
        }
        $string .= "
        <th class=\"text-nowrap\">Action</th>
    </tr>";
    $string .= "
    <?php foreach ($" . $c_url . "_data as \$$c_url) { ?>
    <tr>";
    $string .= "
        <td class=\"text-nowrap\"><?= ++\$start ?></td>";
    foreach ($non_pk as $row) {
        $string .= "
        <td class=\"text-nowrap\"><?= $" . $c_url ."->". $row['column_name'] . " ?></td>";
    }

    $string .= "
        <td class=\"text-center text-nowrap\">
            <?php
            echo anchor(site_url('".$c_url."/read/'.$".$c_url."->".$pk."),'Detail');
            echo ' :: ';
            echo anchor(site_url('".$c_url."/update/'.$".$c_url."->".$pk."),'Ubah');
            echo ' :: ';
            echo anchor(site_url('".$c_url."/delete/'.$".$c_url."->".$pk."),'Hapus','onclick=\"javasciprt: return confirm(\\'apakah Anda yakin akan menghapus data ini ?\\')\"');
            ?>
        </td>";

        $string .=  "
    </tr>
    <?php } ?>
</table>
<div class=\"row\">
    <div class=\"col-md-6\">
        <a href=\"#\" class=\"btn btn-primary\">Jumlah Data : <?= \$total_rows ?></a>";
        if ($export_excel == '1') {
            $string .= "
        <?= anchor(site_url('".$c_url."/excel'), 'Excel', 'class=\"btn btn-primary\"'); ?>";
        }
        if ($export_word == '1') {
            $string .= "
        <?= anchor(site_url('".$c_url."/word'), 'Word', 'class=\"btn btn-primary\"'); ?>";
        }
        if ($export_pdf == '1') {
            $string .= "
        <?= anchor(site_url('".$c_url."/pdf'), 'PDF', 'class=\"btn btn-primary\"'); ?>";
        }
        $string .= "
    </div>
    <div class=\"col-md-6 d-flex justify-content-end\">
        <?= \$pagination ?>
    </div>
</div>
";

$hasil_view_list = createFile($string, $target."views/" . $c_url . "/" . $v_list_file);
?>
