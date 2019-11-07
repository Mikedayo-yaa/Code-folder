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
  <ul>
                 <li><a>Home</a></li>
                 <li><a>About</a>
                <ul>
                   <li><a href="showcase.php">showcase</a></li> 
                   <li><a href="xschool.php">school</a></li> 
                
                </ul>
                </li>
                <li><a>Things to do</a> 
                <ul>
                   <li><a href="showcase2.php">Showcase2</a></li>
                   <li><a>Parks</a></li>
              
                </ul>
                </li>
                   <li><a>Contact</a>
                <ul>
                   <li><a>Map</a></li>
                   <li><a>Directions</a></li>
                </ul>
                </li>
                   <li><a>Login</a>
                <ul>
                   <li><a href="loginpage.php">Login</a></li>
                   <li><a href="register.php">Register</a></li>
                </ul>
                </li>
            </ul>
        <?php
            $sql = "SELECT * From users";
           mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
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