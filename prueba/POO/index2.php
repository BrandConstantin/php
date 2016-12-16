<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>POO</title>
    </head>
    <body>
        <?php
            include_once 'Person2.php';
            
            $oneComic = new Person("Angel Martin", "comico", 30);
            $oneMedic = new Person("Gran Wayoming", "medico");
            //$oneComic->presentation();
            //$oneMedic->presentation();
            
            //var_dump($oneComic);
            //var_dump($oneMedic);
            
            //echo $oneComic->presentation();
            //echo $oneMedic->presentation();
            
            echo $oneComic;
            echo $oneMedic;
        ?>
    </body>
</html>
