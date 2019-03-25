<!DOCYTIPE html>
<html>
    <head>
        <title> Form  </title>
        <style>
        body {
                background-image: url("gmbr/flower.jpg");
                background-repeat: no-repeat;
                background-attachment: fixed;
                background-size: 100% 100%;
        }
        </style>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" type="type" href="idj.css"
        <link rel="stylesheet" type="type" href="index.php"
    </head>
    <body>
        <div class="container">
        <form method="POST" action="login.php" name="form">
           <br>
            <div class="form-input">
            <input type="text" name="username" id="username" placeholder="username">
            </div>
            <br>
            <div class="form-input">
            <input type="password" name="password" placeholder=" password ">
            </div>
            <br>
            <input type="submit" name="submit"
            value="LOGIN" class="btn-login btn-primary"><br>
            </form>
        </div>
    </body>
</html>