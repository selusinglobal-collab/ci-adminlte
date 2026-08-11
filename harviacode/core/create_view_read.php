<?php

$string = "<table class=\"table\">";
    foreach ($non_pk as $row) {
        $string .= "
    <tr><td>".label($row["column_name"])."</td><td><?= $".$row["column_name"]."; ?></td></tr>";
    }
    $string .= "
    <tr><td></td><td><a href=\"<?= site_url('".$c_url."') ?>\" class=\"btn btn-default\">Kembali</a></td></tr>";
    $string .= "
</table>";

$hasil_view_read = createFile($string, $target."views/" . $c_url . "/" . $v_read_file);
?>
