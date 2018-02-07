<?php
include_once 'db.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="style.css" media="all"/>
        <script>
            function ajax(){
                var req = new XMLHttpRequest();
                
                req.onreadystatechange = function(){
                    if(req.readyState == 4 && req.status == 200){
                        document.getElementById('chat').innerHTML = req.responseText;
                    }
                }
                
                req.open('GET', 'chat.php', true);
                req.send();
            }
            
            setInterval(function(){ajax()}, 1000);
        </script>
        <title>Chat</title>
    </head>
    <body onload="ajax();">
        <div id="container">
            <div id="chat_box">
                <div id="chat"></div>
            </div>
            <div id="chat_box2">
                <form method="post" action="index.php" id="form">
                    <input type="text" name="name" placeholder="Enter Name"/>
                    <input type="text" name="msg" placeholder="Enter Message"/>
                    <input type="submit" name="submit" value="Send"/>
                </form>
            </div>
        </div>
        <?php
        if (isset($_POST['submit'])) {
            $name = $_POST['name'];
            $msg = $_POST['msg'];

            $query = "INSERT INTO chat_01 (name, msg) VALUES ('$name', '$msg');";

            $run = $con->query($query);
//                    var_dump($query);
            if ($run) {
                echo "<embed loop='false' src='chat.wav' hidden='true' autoplay='true'/>";
            }
        }
        ?>
    </body>
</html>