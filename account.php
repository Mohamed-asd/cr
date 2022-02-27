<?php
include 'header.php';
?>

<section class="search">
    <div class="wrapper">
        <div id="fom">
            <form action="" method="post">
                <h3 style="text-align: center; color:000009; text-decoration: underline;">Client Login Area</h3>
                <table height="100" align="center">
                    <tr>
                        <td>Email Address:</td>
                        <td><input type="email" name="email" placeholder="Enter Email Address" required></td>
                    </tr>
                    <tr>
                        <td>Password:</td>
                        <td><input type="password" name="pass" placeholder="Enter ID Number" required></td>
                    </tr>
                    <tr>
                        <td><input type="submit" name="log" value="Login Here"></td>
                        <td style="text-align: right;"><a href="signup.php">Signup Here</a></td>
                    </tr>
                </table>
            </form>
            <?php
            if(isset($_POST['log']))
            {
                include 'includes/config.php';

                $uname = $_POST['email'];
                $pass  = $_POST['pass'];

                $qy = "select * from client where email = '$uname' and id_no = '$pass'";
                $log = $conn->query($qy);
                $num = $log->num_rows;
                $row = $log->fetch_assoc();
                if($num > 0)
                {
                    session_start();
                    $_SESSION['email'] = $row['email'];
                    $_SESSION['pass']  = $row['id_no'] ;
                    echo "
                    <script type=\"text/javascript\">
                    alert(\"Login Successful...............\");
                    widow.location = (\"index.php\")
                    </script>
                    ";
                }
                else
                {
                    echo "
                    <script type=\"text/javascript\">
                    alert(\"Login Failed. Try Again..............\");
                    window.location = (\"account.php\")
                    </script>
                    ";
                }
            }
            ?>
        </div>
        <a href="#" class="advanced_search_icon" id="advanced_search_btn"></a>
    </div>
</section><!-- end search section -->

<!-- footer -->
<?php include 'footer.php'; ?>
<!-- //footer -->

</body>
</html>