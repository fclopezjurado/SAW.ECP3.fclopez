<?php
$fichero = "Documentos/" . $_GET['file'];
header("Content-Disposition: attachment; filename=" . $fichero);
header("Content-type: application/pdf");
readfile($fichero);
?>