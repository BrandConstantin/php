<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="result.php" method="post">
            <input type="text" name="user_keywords" />
            <input type="submit" name="result" value="Search Now"/>
        </form>
        <a href="search.html"><button>Go Back</button></a>

        <?php
        mysql_connect("localhost", "root", "");
        mysql_select_db("search");

        if (isset($_GET['search'])) {

            $get_value = $_GET['user_query'];

            if ($get_value == '') {

                echo "<center><b>Please go back, and write something in the search box!</b></center>";
                exit();
            }

            $result_query = "select * from sites where site_keywords like '%$get_value%'";

            $run_result = mysql_query($result_query);

            if (mysql_num_rows($run_result) < 1) {

                echo "<center><b>Oops! sorry, nothing was found in the database!</b></center>";
                exit();
            }

            while ($row_result = mysql_fetch_array($run_result)) {

                $site_title = $row_result['site_title'];
                $site_link = $row_result['site_link'];
                $site_desc = $row_result['site_desc'];
                $site_image = $row_result['site_image'];

                echo "<div class='results'>
		
		<h2>$site_title</h2>
		<a href='$site_link' target='_blank'>$site_link</a>
		<p align='justify'>$site_desc</p> 
		<img src='images/$site_image' width='100' height='100' />
		
		</div>";
            }
        }
        ?>
    </body>
</html>
