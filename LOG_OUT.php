        <?php
        session_start();
        if(isset($_SESSION['login_session']))
        {
            $_SESSION['login_session']=NULL;
           
        }
        header("Location:index.php");
 
        ?>
