<?php
    session_start();
    ob_start();
?>
<?php
    require('../db.php');
    
    $Email = stripslashes($_POST['email']);
    $email = mysqli_real_escape_string($conn, $Email);
    
    $Password = stripslashes($_POST['password']);
    $password = mysqli_real_escape_string($conn, $Password);
    
    // Check user is exist in the database
     if (empty($email)) {

        //header("Location: index.php?error=Email is required");
        
        echo "<div class='form'>
                  <h3>Email can't be empty.</h3><br/>
                  <p class='link'>Click here to <a href='../index.php'>Login</a> again.</p>
                  </div>";
                  
        ob_end_flush();

    }else if(empty($password)){

        //header("Location: index.php?error=Password is required");
        
        echo "<div class='form'>
                  <h3>Password can't be empty.</h3><br/>
                  <p class='link'>Click here to <a href='../index.php'>Login</a> again.</p>
                  </div>";
                  
        ob_end_flush();
            
    }else{
        $query = "SELECT * FROM `tb_Login` WHERE (ds_Email = '".$email."' or ds_UserName = '".strtoupper($email)."') AND ds_Password = '".MD5($password)."' LIMIT 1";
                                        
        $result = mysqli_query($conn, $query);
        $rows = mysqli_num_rows($result);
        
        if ($rows != 1) {
            echo "<div class='form'>
                  <h3>Incorrect Email or Password.</h3><br/>
                  <p class='link'>Click here to <a href='../index.php'>Login</a> again.</p>
                  </div>";
            
        }else {
            $resultado = mysqli_fetch_assoc($result);
            
            if (!isset($_SESSION)) session_start();
            
            $_SESSION['ds_UserName'] = $resultado['ds_UserName'];
            
            header("Location: ../menu.php");
            ob_end_flush();
            
        }
    }
?>