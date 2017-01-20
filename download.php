<?php

if (array_key_exists('type', $_GET) && is_numeric($_GET['type'])) {
    $fileType           = $_GET['type'];
    $relativeFilePath   = 'Documentos/';

    switch (intval($fileType)) {
        case 1:
            $fileName = 'pago.pdf';
            break;
        case 2:
            $fileName = 'envio.pdf';
            break;
    }

    if (isset($fileName)) {
        header("Content-Disposition: attachment; filename=" . $relativeFilePath.$fileName);
        header("Content-type: application/pdf");
        readfile($relativeFilePath.$fileName);
    }
    else
        echo 'Document could not be downloaded';
}
else
    echo 'Document could not be downloaded';

?>