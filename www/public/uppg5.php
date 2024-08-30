<!DOCTYPE html>
<html lang="en">

<body>
    <?php
    include('cleanseData.php');
    if(isset($_POST['firstname'])){
        $user[1] = $_POST['firstname'];
        $user[2] = $_POST['lastname'];
        $user[3] = $_POST['username'];
        $user[4] = $_POST['password'];
    }
    else{
        header("location:index.php");
    }

    cleanData($user);
  //  for($i = 1;$i< 5; $i++){
  //     echo cleanData($user) . "<br>";
  //   }

    ?>
</body>

</html>