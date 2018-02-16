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
        <form action="insert.php" method="post" enctype="multipart/form-date">
            <table width="500" border="2" cellspacing="2" align="center">
                <tr>
                    <td colspan="2">Inserting new web</td>
                </tr>
                <tr>
                    <td>Site Title</td>
                    <td><input type="text" name="site_title"/></td>
                </tr>
                <tr>
                    <td>Site Link</td>
                    <td><input type="text" name="site_link"/></td>
                </tr>
                <tr>
                    <td>Site Keywords</td>
                    <td><input type="text" name="site_keywords"/></td>
                </tr>
                <tr>
                    <td>Site Description</td>
                    <td><textarea cols="16" rows="8" name="site_desc"></textarea></td>
                </tr>
                <tr>
                    <td>Site Image</td>
                    <td><input type="file" name="site_image"/></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" name="submit" value="ADD"/></td>
                </tr>
            </table>
        </form>
    </body>
</html>
<?php 
	mysql_connect("localhost","root","");
	mysql_select_db("search");
	
	
	if(isset($_POST['submit'])){
	
		 $site_title = $_POST['site_title'];
		 $site_link = $_POST['site_link'];
		 $site_keywords = $_POST['site_keywords'];
		 $site_desc = $_POST['site_desc'];
		 $site_image = $_FILES['site_image']['name'];
		 $site_image_tmp = $_FILES['site_image']['tmp_name'];
	
		
		if($site_title=='' OR $site_link=='' OR $site_keywords=='' OR $site_desc==''){
		
		echo "<script>alert('please fill all the fields!')</script>";
		
		exit();
		}
		else {
		
		$insert_query = "insert into sites (site_title,site_link,site_keywords,site_desc,site_image) values ('$site_title','$site_link','$site_keywords','$site_desc','$site_image')";
		
		move_uploaded_file($site_image_tmp,"images/{$site_image}");
	
		if(mysql_query($insert_query)){
		
		echo "<script>alert('Data inserted into table')</script>";
		
		
		}
		
		}
	
	}


?>