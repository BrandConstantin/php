<!Doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>POO</title>
    </head>
    <body>
        <?php
            include_once 'Animal.php';
            include_once 'Bird.php';
            include_once 'Pinguin.php';
            include_once 'Cat.php';
            
            $garfield = new Cat("male");
            $tom = new Cat("male");
            $lisa = new Cat("female");
            $silver = new Cat();
            
            echo '$garfield<hr>';
            echo '$tom<hr>';
            echo '$lisa<hr>';
            echo 'silver<hr>';
            
            $myBird = new Bird();
            echo $myBird->clean();
            echo $myBird->fly();
            
            $myPingu = new Pinguin("female");
            echo $myPingu->clean();
            echo $myPingu->fly();
        ?>
    </body>
</html>