<html>
<head>
    <title>Add Users</title>
</head>

<body>
    <a href="index.php">Go to Home</a>
    <br/><br/>

    <form action="tambah.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr> 
                <td>title_video</td>
                <td><input type="text" name="title_video"></td>
            </tr>
            <tr> 
                <td>description</td>
                <td><input type="text" name="description"></td>
            </tr>
            <tr> 
                <td>thumbnail</td>
                <td><input type="text" name="thumbanail"></td>
            </tr>
            <tr> 
                <td></td>
                <td><input type="submit" name="Submit" value="Add"></td>
            </tr>
        </table>
    </form>

    <?php

    // Check If form submitted, insert form data into users table.
    if(isset($_POST['Submit'])) {
        $title_video = $_POST['title_video'];
        $description = $_POST['description'];
        $thumbnail = $_POST['thumbnail'];

        // include database connection file
        include_once("koneksi.php");

        // Insert user data into table
        $result = mysqli_query($mysqli, "INSERT INTO video(title_video,description,thumbnail) VALUES('$title_video','$description','$thumbnail')");

        // Show message when user added
        echo "User added successfully. <a href='index.php'>View Users</a>";
    }
    ?>
</body>
</html>