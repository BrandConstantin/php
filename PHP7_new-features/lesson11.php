<?php

class newObj{
    public $prop = "hello";
    private $priv = "world";
    private $arr = [20, 30, 40];
}

$data = serialize(new newObj);
echo $data;

//result
//O:6:"newObj":3:{s:4:"prop";s:5:"hello";s:12:"newObjpriv";s:5:"world";s:11:"newObjarr";a:3:{i:0;i:20;i:1;i:30;i:2;i:40;}}

$unserialized = unserialize($data, ['allowed_classes' => ["newObj"]]);
echo "<br/>".$unserialized->prop."<br/>";
echo "<br/>".var_export($unserialized);