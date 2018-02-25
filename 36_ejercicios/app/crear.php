<?php
 require_once './include/header.php';
?>
<h2>Crear usuario</h2>
<form action="recibir.php" method="post" enctype="multipart/from-data">
    Name: <input type="text" name="name"  class="form-control"/>
    Surname: <input type="text" name="surname"  class="form-control"/>
    Bio: <textarea name="bio"  class="form-control"></textarea>
    Email: <input type="email" name="email"  class="form-control"/>
    Image: <input type="file" name="image"  class="form-control"/>
    Pass: <input type="password" name="password"  class="form-control"/>
    <select name="role" class="form-control">
        <option value="">-- Select the role --</option>
        <option value="0">Normal</option>
        <option value="1">Admin</option>
    </select>
    <input type="submit" value="Enviar" class="btn btn-success" />
</form>
<?php
 require_once './include/footer.php';
?>