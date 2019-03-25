<?php
// Create database connection using koneksi file
include_once("koneksi.php");
session_start();
    include"koneksi.php";
    if(isset($_SESSION["username"]) && !empty($_SESSION["username"])){
        $username = $_SESSION["username"];
    }else{
        header("location: index.php");
    }
// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM video  ORDER BY id_video DESC");
?>
<html>
<head>    
    <title>Homepage</title>
</head>

<body>
<a href="tambah.php">Add New User</a><br/><br/>
<a href="exit.php">Keluar</a><br/><br/>
<div class="jumbotron jumbotron-fluid">
    <div id="judul">
    <h1 class="display-4"><center>WELCOME <br><?=$username?></center></h1>   
    </div>
    </div>
</div>

    <table width='80%' border=1>

    <tr>
        <th>title_video</th> <th>description</th> <th>thumbnail</th> <th>opsi</th>
    </tr>
    <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$user_data['title_video']."</td>";
        echo "<td>".$user_data['description']."</td>";
        echo "<td>".$user_data['thumbnail']."</td>";    
        echo "<td><a href='edit.php?id_video=$user_data[id_video]'>Edit</a> | <a href='delete.php?id_video=$user_data[id_video]'>Delete</a></td></tr>";        
    }
    ?>
    </table>
</body>
</html>