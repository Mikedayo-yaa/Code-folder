  <?php
  
  include_once  'dbh.inc.php';

  $first = $_POST['first'];
  $last = $_POST['last'];
  $email = $_POST['email']; 
  $uid = $_POST['uid'];
  $pwd = $_POST['pwd'];

 



   $sql = "INSERT INTO users (user_first, user_last, user_email, user_uid, user_pwd)
        VALUES ('$first', '$last', '$email', '$uid', '$pwd');";
        mysqli_query($conn,$sql);

   $sql = "SELECT * FROM user WHERE username='$uid'AND first='$first'";
  $result=  mysqli_query($conn,$sql);

  if(mysqli_num_rows($result) > 0){
    while ($row = mysqli_fetch_assoc($result)) {
        $useris = $row['id'];
        $sql = "INSERT INTO profileimg (userid, status)
        VALUES ('$userid', 1, )";
        mysqli_query($conn,$sql);
        header("Location: showcase2.php");
    }
}   else {
     echo"You have an error!";
}

    
   
 



