<h1>Form to add data</h1>
<!-- para enviar los datos a la misma página que estamos -->
<form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
    <label>Name</label>
    <input type="text" name="name" placeholder="add a name" required/><br/>
    <label>Pass</label>
    <input type="password" name="pass" placeholder="add a pass" required/><br/>
    <input type="submit" name="submit" value="Submit"/>
</form>