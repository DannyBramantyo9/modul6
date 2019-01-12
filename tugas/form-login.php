<!DOCTYPE html>
<html>
<head>
    <title>LOGIN</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php
    if(isset($_GET["error"])){
        if($_GET["error"] == "wrong"){
            echo '<h3>NIS atau Password salah</h3>';
        }
    }
    ?>
    <div class="login">
      <h1>Login</h1>

    <Form action="login.php" method="post">
         <input type="text" name="nis" placeholder="NIS anda" required> <br>
        <input type="password" name="password" placeholder="password" required> <br>
                <input id="login" type="submit" value="LOGIN">
    </Form>
      </div>
</body>
</html>
