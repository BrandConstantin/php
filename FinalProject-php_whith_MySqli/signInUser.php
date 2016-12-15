<!-- registrarse como usuario -->
            <div id="login1">
              <h1>Pub</h1>
              <form action="redirectPub.php" method="POST">
                <span class="glyphicon glyphicon-user"></span>
                <label for="userName">Pub:</label><br>
                <input type="text" name="userName" class="form-control center-block" id="usuarioId" autofocus placeholder="nombre pub"></br>
                <span class="glyphicon glyphicon-lock"></span>
                <label for="userPass">Contraseña</label><br>
                <input type="password" class="form-control center-block" name="userPass" id="contrasenaId" placeholder="contraseña"></br></br>
                <button type="submit" class="btn btn-default" name="action" style="background-color: #lightblue;">Inicia sesión
                  <span class="glyphicon glyphicon-send" aria-hidden="true"></span>
                </button>
              </form>
              <div class="signUp">
                  <a href="signUpPub.php">¿No estas registrado?<br>Hazlo AQUI!</a>
              </div>
            </div>

            <!-- registrarse como local -->
            <div id="login2">
              <h1>Usuario</h1>
              <form action="redirectUser.php" method="POST">
                <span class="glyphicon glyphicon-user"></span>
                <label for="userName">Usuario:</label><br>
                <input type="text" name="userName" class="form-control center-block" id="usuarioId" autofocus placeholder="nombre usuario"></br>
                <span class="glyphicon glyphicon-lock"></span>
                <label for="userPass">Contraseña</label><br>
                <input type="password" class="form-control center-block" name="userPass" id="contrasenaId" placeholder="contraseña"></br></br>
                <button type="submit" class="btn btn-default" name="action" style="background-color: #lightblue;">Inicia sesión
                  <span class="glyphicon glyphicon-send" aria-hidden="true"></span>
                </button>
              </form>
              <div class="signUp">
                  <a href="signUpClient.php">¿No estas registrado?<br>Hazlo AQUI!</a>
              </div>
            </div>