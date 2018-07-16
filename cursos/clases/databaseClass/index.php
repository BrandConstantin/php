<?php
error_reporting(E_ALL ^ E_NOTICE);
require './Database.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Gestisimal</title>
        <style>
            table, tr, td{
                 border: 1px solid black;
                 text-align: center;
            }
            
            th{
                background-color: activecaption;
            }
        </style>
    </head>    
    <body>
<?php
$database = new Database();

$database->query('select * from productos');
$rows = $database->resultset();
?>
        <h1>Añadir Productos</h1>
        <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
            <label>Nombre Producto</label><br>
            <input type="hidden" name="prodId">
            <input type="text" name="prodNombre" placeholder="Nombre Producto"><br>
            <label>Descripción Producto</label><br>
            <textarea name="prodDescrip"></textarea>
            <label>Categoria</label>
            <select name="prodCateg">
                <option>
                    <?php
                                                //getting the categories
                                                $database->query('select * from categorias');
                                                $rows = $database->resultset();

                                                foreach ($rows as $row){
                                                    

                                                    echo "<option value='categId'>$categNombre</option>";
                                                }
                                                
                                                $product_categ = $cat_id;
                                            ?>
                    ?>
                </option>
            </select>
            <label>Marca</label>
            <input type="submit" name="submit" value="Enviar">
        </form>
<?php       

//mostrar todo de la tabla productos
echo '<table><tr>';
echo '<th>Nombre</th>'
            .'<th>Precio</th>'
             . '<th>Descripción</th>';
echo "</tr>";
foreach ($rows as $row){
    echo "<tr><td>".$row['prodNombre']."</td>";
    echo "<td>".$row['prodDescrip']."</td>";
    echo "<td>".$row['prodPrecio']."</td>";
}
echo '</tr></table>';
?>
    </body>
</html>