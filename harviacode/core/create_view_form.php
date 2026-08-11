<?php

$string = "<form action=\"<?= \$action; ?>\" method=\"post\">
    <div class=\"space-y\">";

    foreach ($non_pk as $row) {
        if ($row["data_type"] == 'text') {
            $string .= "
        <div class=\"form-group\">
            <label class=\"form-label\" for=\"".$row["column_name"]."\">".label($row["column_name"])." <?= form_error('".$row["column_name"]."') ?></label>
            <textarea class=\"form-control\" rows=\"3\" name=\"".$row["column_name"]."\" id=\"".$row["column_name"]."\" placeholder=\"".label($row["column_name"])."\"><?= $".$row["column_name"]."; ?></textarea>
        </div>";
        } else {
                $string .= "
        <div class=\"form-group\">
            <label class=\"form-label\" for=\"".$row["column_name"]."\">".label($row["column_name"])." <?= form_error('".$row["column_name"]."') ?></label>
            <input type=\"text\" class=\"form-control\" name=\"".$row["column_name"]."\" id=\"".$row["column_name"]."\" placeholder=\"".label($row["column_name"])."\" value=\"<?= $".$row["column_name"]."; ?>\" />
        </div>";
        }
    }

    $string .= "
    </div>
    <input type=\"hidden\" name=\"".$pk."\" value=\"<?= $".$pk."; ?>\" /> ";
    $string .= "
    <br>
    <button type=\"submit\" class=\"btn btn-primary\"><?= \$button ?></button> ";
    $string .= "
    <a href=\"<?= site_url('".$c_url."') ?>\" class=\"btn btn-default\">Batal</a>";
    $string .= "
</form>
";

$hasil_view_form = createFile($string, $target."views/" . $c_url . "/" . $v_form_file);
?>
