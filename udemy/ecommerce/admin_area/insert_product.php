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
            <div id="header">
                <img id="logo" src="../images/logo.jpeg"/>                
                <h1>Tienda PcOnline</h1>
                <div id="menubar">
                    <!--<ul id="menu">
                        <li><a href="#">Inicio</a></li>
                        <li><a href="#">Productos</a></li>
                        <li><a href="#">Contactar</a></li>
                        <li><a href="#">Mi Cuenta</a></li>
                        <li><a href="#">Registrar</a></li>
                    </ul>
                    
                    <div id="search_box">
                        <form method="get" action="results.php" enctype="multipart/form-data">
                            <input type="text" name="user_query" placeholder="Buscar Producto" />
                            <input type="submit" name="search" value="Buscar" />
                        </form>
                    </div>-->
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
                                    <td><input type="text" name="nameProd" placeholder="Nombre Producto" required=""></td>
                                </tr>
                                <tr>
                                    <td><h4>Categoria Producto</h4></td>
                                    <td>
                                        <select name="idCateg" required="">
                                            <option>Escoge una Categoria</option>
                                            <?php 
                                                //getting the categories
                                                $get_cats = "select * from categories";

                                                $run_cats = mysqli_query($con, $get_cats);

                                                while($row_cats = mysqli_fetch_array($run_cats)){
                                                    $cat_id = $row_cats['idCateg'];
                                                    $cat_name = $row_cats['nameCateg'];

                                                    echo "<option value='idCateg'>$cat_name</option>";
                                                }
                                            ?>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td><h4>Marca Producto</h4></td>
                                    <td>
                                        <select name="idBrand" required="">
                                            <option>Escoge una Marca</option>
                                            <?php
                                            //getting the brands
                                            $get_brands = "select * from brands";

                                            $run_brands = mysqli_query($con, $get_brands);

                                            while($row_brands = mysqli_fetch_array($run_brands)){
                                                $brand_id = $row_brands['idBrand'];
                                                $brand_name = $row_brands['nameBrand'];

                                                echo "<option value='idBrand'>$brand_name</option>"; 
                                            }
                                            ?>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td><h4>Precio Producto</h4></td>
                                    <td><input type="number" name="priceProd" placeholder="Precio Producto" required=""></td>
                                </tr>
                                <tr>
                                    <td><h4>Imagen Producto</h4></td>
                                    <td><input type="file" name="imagProd" value="Imagen" required=""></td>
                                </tr>
                                <tr>
                                    <td><h4>Descuento Producto</h4></td>
                                    <td><input type="text" name="discountProd" placeholder="Descuento Producto"></td>
                                </tr>
                                <tr>
                                    <td><h4>Detalle Producto</h4></td>
                                    <td><textarea name="detailProd" placeholder="Detalle Producto" rows="5" min-width="580" max-width="580" min-heigth="260" max-heigth="260" resize="none"></textarea></td>
                                </tr>
                                <tr>
                                    <td colspan="7"><input id="btn1" class="right" type="submit" name="insert_prod" value="Añade"></td>
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
    if(isset($_POST['insert_prod'])){
        //getting the text data from the fields
        $cat_id = $_POST['idCateg'];
        $brand_id = $_POST['idBrand'];
        $name_prod = $_POST['nameProd'];
        $price_prod = $_POST['priceProd'];
        $discount_prod = $_POST['discountProd'];
        $detail_prod = $_POST['detailProd'];
        
        //gettin de image from the field
        $image_prod = $_FILES['imagProd']['name'];
        $image_prod_tmp = $_FILES['imagProd']['tmp_name'];
        
        echo $insert_prod = "insert into products ('idCateg', 'idBrand', 'nameProd',  'priceProd', 'imagProd', 'discountProd', 'detailProd') "
                . "values ('$cat_id', '$brand_id', '$name_prod', '$price_prod', '$image_prod', '$discount_prod', '$detail_prod')";
    }
?>