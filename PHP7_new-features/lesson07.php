<?php

const PERSON = array('PERSON', 200, TRUE);

define('OFFICE', array('OFFICE', 400, TRUE));
define('OFFICE2', "Hola mundo");
define('OFFICE3', 34.45);

echo json_encode(PERSON, 128).'<br/><br/>'.json_encode(OFFICE, 128);
echo '<br/><br/>';
echo json_encode(OFFICE2, JSON_PRETTY_PRINT).'<br/><br/>'.json_encode(OFFICE3, 128);