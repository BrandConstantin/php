<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>POO</title>
    </head>
    <body>
        <?php
            include_once 'Cat.php';
            
            $garfield = new Cat("male");
            
            echo "Helo cat!<br>";
            $garfield->purr();
            
            echo 'Some bread<br>';
            $garfield->eating("bread");
            echo "Some fish";
            $garfield->eating("fish");
            
            $tom = new Cat("male");
            
            echo "Tom, some bread?<br>";
            $tom->eating("bread");
            
            $lisa = new Cat("female");
            
            echo "Cat's can sreem together<br>";
            $garfield->screem();
            $lisa->screem();
            $tom->screem();
            
            $garfield->fightWith($lisa);
            $garfield->fightWith($tom);
            $lisa->fightWith($tom);
        ?>
    </body>
</html>
