<?php
    session_start();
    include_once 'includes/dbh.inc.php';
?>
<DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
     <link rel="stylesheet" href="css/showcase2.css" type="text/css" />

</head>
<body>
    <main>

        <?php
            $sql = "SELECT * From user";
       //   mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                while ($row =  ($result)) {
                    $id = $row['id'];
                    $sqlImg = "SELECT * FROM profileimg WHERE userid='$id'";
                    $resultImg = mysqli_query($conn, $sqlImg);
                    while ($rowImg = mysqli_fetch_assoc($resultImg)) {
                        echo "<div>";
                            if ($rowImg['status'] == 0) {
                              echo"<img src='uploads/profile".$id.".jpg'>";
                          } else {
                              echo"<img src='uploads/profiledefault.jpg'>";    
                            }
                            echo $row['username'];
                        echo "</div>";
                            
                }
            }
        }else {
            echo "There are no users inside you database!";
        }


            if(isset($_SESSION['id'])){
                if($_SESSION['id'] == 1) {
                    echo "you are logged in as user #1";
             }
             echo   "<form action='upload.php' method='POST' enctype='multipart/form-data'>
                    <input type='file' name='file' placeholder='File name. . .' >
                    <button type='submit' name='submit'>UPLOAD</button>
              </form>  ";
        
        }   else {
            echo "you are not logged in";
            echo "<form action='showcase2.php' method='POST'>
                <input type='text' name='first'placeholder='first name'>
                <input type='text' name='last'placeholder='last name'>
                <input type='text' name='uid'placeholder='username'>
                <input type='password' name='pwd'placeholder='password'>
                <button name='submit' type='submitSignup'>Sign Up </button>
                </form>";
        } 
        

        ?>

        <div class="mbGallery-upload">
       
            
            
            <p>Login as user!</p>
            <form action="login.php" method="POST">
                <button type="submit" name="submitLogin">Login</button>
            </form>
            <p>Logout as user!</p>
            <form action="logout.php" method="POST">
                <button type="submit" name="submitLogout">Logout</button>
            </form>

         </div>        
                   </main>

      
</body>


</html>
</DOCTYPE>