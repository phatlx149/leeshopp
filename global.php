<?php
$ROOT_URL = "/testasm";
$CONTENT_URL = "$ROOT_URL/content/";
$ADMIN_URL = "$ROOT_URL/admin";
$SITE_URL = "$ROOT/trangchinh";

function exist_param($fieldname){
    return array_key_exists($fieldname, $_REQUEST);
}
?>