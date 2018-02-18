<?php

$framework = new class("read only value") {

    function __construct($ro) {
        $this->readOnly = $ro;
    }

    private $readOnly;

    public function printed() {
        echo $this->readOnly;
    }

    static function hello() {
        echo "<br/>hello";
    }
};

$framework->printed();
$framework->hello();

////////////////////////////////////////
class myOBJ {

    public $hello = "say hello";

}

interface reg {

    public function printed();
}

$framework2 = new class("read only param") extends myOBJ implements reg {

    function __construct($ro) {
        $this->readOnly = $ro;
    }

    private $readOnly;

    public function printed() {
        echo $this->readOnly;
    }

    static function hello() {
        echo "<br/>hello";
    }
};

echo $framework2->hello();
