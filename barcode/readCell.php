<?php
$index = $_REQUEST["index"];
$val = $_REQUEST["val"]; //Hasil dari Barcode Reader

$forexample = rand(5000,20000);
?>

<table width="100%">
	<tr>
    	<td style="width:180px">ITEM-<?php echo $val; ?></td>
        <td style="width:180px"><input type="text" value="1" /></td>
        <td style="width:180px"><input type="text" value="<?php echo $forexample; ?>" /></td>
        <td style="width:180px"><?php echo $forexample*1; ?></td>
    </tr>
</table>
<div id="viewResult<?php echo $index; ?>">
</div>