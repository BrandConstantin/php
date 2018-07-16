<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="../View/css/style.css"/>
        <title></title>
    </head>
    <body>
        <header class="container">
            <h1>Greenpeace</h1>
            <h2>
                Notice from Greenpeace
            </h2>
        </header>
        <?php
            if(!isset($modifyStory)){
        ?>
        <form method="get" action="../Controller/adminBlog.php" class="thumbnail container">
            <h3>New Story</h3>
            <input type="text" placeholder="Title of the new story" maxlength="100" size="45" autofocus name="TitleStory">
            <textarea rows="5" cols="100" placeholder="Write your story" name="TextStory">
                
            </textarea>
            <br>
            <input type="submit" value="Insert Story" class="btn btn-primary">
        </form>
        <?php
            } else {
        ?>
        <form method="get" action="../Controller/adminBlog.php" class="thumbnail container">
            <h3>Modify Story</h3>
            <input type="hidden" name="IdStory" value="<?=$modify->getIdStory()?>">
            <input type="text" placeholder="Title of the new story" maxlength="100" size="45" autofocus name="modifyTitle" value="<?=$modifyStory->getTitleStory()?>">
            <textarea rows="5" cols="100" placeholder="Write your story" name="modifyStory">
                <?=$modifyStory->getTextStory()?>
            </textarea>
            <input type="submit" value="Modify Story" class="btn btn-primary">
        </form>
        <?php
            }
        ?>
        <section class="container">
            <?php
                foreach($data['storys'] as $story){
                    echo "<story class=\"thumbnail\">";
                        echo "<h4>";
                            echo $story->getTitleStory();
                        echo "</h4>";
                        echo "<h5>";
                            echo "Publish Date:".$story->getDateStory()."<br>Story Number: ".$story->getIdStory();
                        echo "</h5>";
                        echo "<div>";
                            echo $story->getTextStory();
                        echo "</div>";
                        echo "<div id=\"buttons\">";
                            echo "<a class=\"modify\" href=\"adminBlog.php?modify=".$story->getIdStory()."\"></a>";
                            echo "<a class=\"delete\" href=\"adminBlog.php?delete=".$story->getIdStory()."\"></a>";
                        echo "</div>";
                    echo "</article>";
                }
            ?>
        </section>
    </body>
</html>