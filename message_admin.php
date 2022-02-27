<?php include 'header.php'; ?>

<section class="listings">
    <div class="wrapper">
        <h2 style="text-decoration: underline;">Message Admin Here</h2>
        <ul class="properties_list">
        <form action="#" method="post">
            <table>
                <tr>
                    <td style="color: #030; font-weight: bold; font-size: 24px;">Enter Your Message Here</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>
                        <textarea name="message" class="txt" style="width: 600px;height: 200px;" placeholder="Enter Message Here"></textarea>
                    </td>
                </tr>
                <tr>
                    <td><input type="submit" name="send" value="Send Message"></td>
                </tr>
            </table>
        </form>
        <?php 
        if(isset($_POST['send']))
        {
            include 'includes/config.php';

            $message = $_POST['message'];

            $qry = "insert into message(message, client_id, time, status) values('$message', '$_SESSION[email]', now(), 'Unread')";
                if($result == true)
                {
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
        </ul>
    </div>
</section>

<!-- footer -->
<?php include 'footer.php'; ?>
<!-- //footer -->