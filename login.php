<?php
include 'header.php';
?>

<section class="search">
    <div class="wrapper">
        <div id="fom">
            <form action="" method="post">
                <h3 style="text-align: center; color: #009; font-weight: bold; text-decoration: underline;">Admin Login Area</h3>
                <table height="100" align="center">
                    <tr>
                        <td>Email Addres:</td>
                        <td><input type="text" name="uname" placeholder="Inter Username" required></td>
                    </tr>
                    <tr>
                        <td>Password:</td>
                        <td><input type="password" name="pass" placeholder="Inter Password" required></td>
                    </tr>
                    <tr>
                        <td colspan="2" style="text-align: center;"><input type="submit" name="login" value="Logim Here"></td>
                    </tr>
                </table>
            </form>
            <?php 
            if(isset($_POST['login']))
            {
                include 'includes/config.php';

                $uname = $_POST'uname;
                $pass  = $_POST['pass];

                $query = "select * from admin where uname = '$uname' and pass = '$pass'";
                $rs = $conn->num_rows;
                $rows = $rs->fetch_assoc();
                if($num > 0)
                {
                    session_start();
                    $_SESSION['uname'] = $rows['uname'];
                    $_SESSION['pass']  = $rows['pass'];
                    echo "        
                    <script type=\"text/javascript\">
                        alert(\"Login Successful..........\");
                        window.location = (\"admin/index.php\");
                    </script>
                    ";
                }else
                {
                    echo "
                    <script type\"text/javascript\">
                        alert(\"Login Failed. Try Again.............\");
                        window.location = (\"login.php\");
                    </script>
                    ";
                }
            }
            ?>
        </div>
        <a href="#" class="advanced_search_icon" id="advanced_search_btn"></a>
    </div>
</section><!-- end section search -->

<!-- footer -->
<?php include 'footer.php'; ?>
<!-- //footer -->