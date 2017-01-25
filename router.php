<?php

chdir(filter_input(INPUT_SERVER, 'DOCUMENT_ROOT'));
if (preg_match('/\.(?:js|png|jpg|jpeg|gif|css|woff|ttf|eot|svg|otf)/', strtolower(filter_input(INPUT_SERVER, "REQUEST_URI")))) {
    return false;    // serve the requested resource as-is.
} else {
    include 'index.php';
}