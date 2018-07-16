<?php
    include "./includes/db.php";
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Tienda PcOnline</title>
        <link rel="stylesheet" href="../style/style.css" type="text/css" media="all" />
        <script src="//cloud.tinymce.com/stable/tinymce.min.js"></script>
        <script>tinymce.init({ selector:'textarea' });</script>
    </head>
    <body>
        <div id="container">
            <div id="header_wrapper">
                <img id="logo" src="../images/logo.jpeg"/>                
                <h1>Tienda PcOnline</h1>
                <div id="menubar">
                    <ul id="menu">
                        <li><a href="#">Inicio</a></li>
                        <li><a href="#">Productos</a></li>
                        <li><a href="#">Contactar</a></li>
                        <li><a href="#">Mi Cuenta</a></li>
                        <li><a href="#">Registrar</a></li>
                    </ul>
                </div>
            </div>
                    <div id="contentarea2">
                        <form action="insert_product.php" method="post" enctype="multipart/form-data">
                            <table id="table">
                                <tr align="center">
                                    <td colspan="7"><h4>Añadir nuevo producto:</h4></td>
                                </tr>
                                <tr>
                                    <td><h4>Nombre Producto</h4></td>
                                    <td>
                                        <input type="text" name="product_name" placeholder="Nombre Producto" required="">
                                        <input type="hidden" name="product_id">
                                    </td>
                                </tr>
                                <tr>
                                    <td><h4>Categoria Producto</h4></td>
                                    <td>
                                        <select name="product_categ">
                                            <option>Escoge una Categoria</option>
                                            <?php 
                                                //getting the categories
                                                $get_cats = "select * from categories";

                                                $run_cats = mysqli_query($con, $get_cats);

                                                while($row_cats = mysqli_fetch_array($run_cats)){
                                                    $cat_id = $row_cats['categ_id'];
                                                    $cat_name = $row_cats['categ_name'];

                                                    echo "<option value='categ_id'>$cat_name</option>";
                                                }
                                                
                                                $product_categ = $cat_id;
                                            ?>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td><h4>Marca Producto</h4></td>
                                    <td>
                                        <select name="product_brand">
                                            <option>Escoge una Marca</option>
                                            <?php
                                            //getting the brands
                                            $get_brands = "select * from brands";

                                            $run_brands = mysqli_query($con, $get_brands);

                                            while($row_brands = mysqli_fetch_array($run_brands)){
                                                $brand_id = $row_brands['brands_id'];
                                                $brand_name = $row_brands['brands_name'];

                                                echo "<option value='brands_id'>$brand_name</option>"; 
                                            }
                                            
                                            $product_brand = $brand_id;
                                            ?>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td><h4>Precio Producto</h4></td>
                                    <td><input type="number" name="product_price" placeholder="Precio Producto" required=""></td>
                                </tr>
                                <tr>
                                    <td><h4>Detalle Producto</h4></td>
                                    <td><textarea name="product_descrip" placeholder="Detalle Producto" rows="5" min-width="580" max-width="580" min-heigth="260" max-heigth="260" resize="none"></textarea></td>
                                </tr>
                                <tr>
                                    <td><h4>Imagen Producto</h4></td>
                                    <td><input type="file" name="product_image" value="Imagen"></td>
                                </tr>
                                <tr>
                                    <td><h4>Palabras Clave Producto</h4></td>
                                    <td><input type="text" name="product_keywords" placeholder="Palabras Claves" required="" size="50"></td>
                                </tr>
                                <tr>
                                    <td colspan="7"><input id="btn1" class="right" type="submit" name="insert_post" value="Añade"></td>
                                </tr>
                            </table>
                        </form>
                    </div>
            <div id="footer">
                <h3>&copy;2017 by BrandConstantin</h3>
            </div>
        </div>
    </body>
</html>
<?php
    if(isset($_POST['insert_post'])){
        //getting the text data from the fields
        $product_name = $_POST['product_name'];
        $product_categ = $_POST['product_categ'];
        $product_brand = $_POST['product_brand'];
        $product_price = $_POST['product_price'];
        $product_descrip = $_POST['product_descrip'];
        $product_keywords = $_POST['product_keywords'];
        
        //gettin de image from the field
        $product_image = $_FILES['product_image']['name'];
        $product_image_tmp = $_FILES['product_image']['tmp_name'];
        
        move_uploaded_file($product_image_tmp, "products_images/$product_image");
        
        echo $insert_product = "insert into products ('product_categ', 'product_brand', 'product_name',  'product_price', 'product_descrip', 'product_image', 'product_keywords') "
             . "values ('$cat_id', '$brand_id', '$product_name', '$product_price', '$product_descrip', '$product_image', '$product_keywords')";
        
        $insert_pro = mysqli_query($con, $insert_product);
        
        if($insert_pro ){
            echo "<script>alert('Producto insertado!')</script>";
            echo "<script>window.open('insert_product.php', '_self')</script>";
        }
    }
?>