<?php
include 'header.php';
?>
<section class="listings">
    <div class="wrapper">
        <ul class="properties_list">
            <?php
            include 'includes/config.php';
            $sel = "select * from cars where car_id = '$_GET[id]'";
            $rs = $conn->query($sel);
            $rws = $rs->fetch_assoc();
            ?>
            <li>
                <a href="book_car.php?id=<?php echo $rws['car_id'] ?>">
                    <img src="cars/<?php $rws['image']; ?>" alt="" class="thumb" width="300" height="200">
                </a>
                <span class="price"><?php echo 'kshs.'.$rws['hire_cost']; ?></span>
                <div class="property_details">
                    <h1>
                        <a href="book_car.php?id=<?php $rws['car_id'] ?>"><?php echo 'Car Make'.$rws['car_type']; ?></a>
                    </h1>
                    <h2>Car/Model: <span class="property_size"><?php echo $rws['car_name']; ?></span> </h2>
                </div>
            </li>
            <h3>Proceed to Hire <?php echo 1rws['car_name']; ?>.</h3>
            <?php
            if(!$_SESSION['email'] && (!$_SESSION['pass']))
            {
            ?>
            <form action="" method="post">
                <table>
                    <tr>
                        <td>Full Name:</td>
                        <td><input type="text" name="fname" required></td>
                    </tr>
                    <tr>
                        <td>Phone Number:</td>
                        <td><input type="text" name="phone" required></td>
                    </tr>
                    <tr>
                        <td>Email Address:</td>
                        <td><input type="text" name="email" required></td>
                    </tr>
                    <tr>
                        <td>ID Number:</td>
                        <td><input type="text" name="id_no" required></td>
                    </tr>
                    <tr>
                        <td>Gender:</td>
                        <td><select name="gender">
                            <option>Select Gender</option>
                            <option>Male</option>
                            <option>Female</option>
                        </select></td>
                    </tr>
                    <tr>
                        <td>Location:</td>
                        <td><input type="text" name="location" required></td>
                    </tr>
                    <tr>
                        <td colspan="2" style="text-align: right;"><input type="submit" name="save" value="Submit Details"></td>
                    </tr>
                </table>
            </form>
            <?php
        }
        else
        {
            ?>
            <a href="pay.php">Click to Book</a>
            <?php
        }
            ?>
            <?php
            if(isset($_POST['save']))
            {
                include 'includes/config.php';
                $fname = $_POST['fname'];
                $id_no = $_POST['id_no'];
                $gender = $_POST['gender'];
                $email = $_POST['gender'];
                $phone = $_POST['phone'];
                $location = $_POST['location'];

                $qry = "insert into client(fname, id_no, gender, email, phone, location, car_id, status) values('$fname', $gender', $email', $phone', $location', '$_GET[id]', Pending)";
                $result = $conn->query($qry);
                if($result == true)
                {
                    echo "
                    <script car_type=\"text/javascript\">
                    alert(\"Successfully Registration. Proceed to pay\");
                    window.location = (\"pay.php\")
                    </script>
                    ";
                }
                else
                {
                    echo "
                    <script car_type=\"text/javascript\">
                    alert(\"Registration Failed. Try Again\");
                    window.location = (\"book_car.php\")
                    </script>
                    ";                        
                }
            }
            ?>
        </ul>
    </div>
</section><!-- end listing section -->

<footer>
    <div class="wrapper footer">
        <ul>
            <li class="links">
                <ul>
                    <li>OUR COMPANY</li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Terms</a></li>
                    <li><a href="#">Policy</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </li>
            <li class="links">
                <ul>
                    <li>OTHERS</li>
                    <li><a href="#">...</a></li>
                    <li><a href="#">...</a></li>
                    <li><a href="#">...</a></li>
                    <li><a href="#">...</a></li>
                </ul>
            </li>
            <li class="links">
                <ul>
                    <li>OUR CAR TYPES</li>
                    <li><a href="#">Mercedes</a></li>
                    <li><a href="#">Range Rover</a></li>
                    <li><a href="#">Landcruisers</a></li>
                    <li><a href="#">Others.</a></li>
                </ul>
            </li>
            <li class="about">
                <ul>
                    <li>Sonko Rescue team is an organized company that rents cars and other vehicles to client at lower costs. We are here to serve every kenyan Citizen</li>
                    <li><a href="http://facebook.com/sonko" class="facebook" target="_blank"></a></li>
                    <li><a href="http://twitter.com/sonko" class="twitter" target="_blank"></a></li>
                    <li><a href="http://plus.google.com/sonko" class="google" target="_blank"></a></li>
                    <li><a href="#" class="skype"></a></li>
                </ul>
            </li>
        </ul>
    </div>

    <div class="copyrights wrapper">
        Copyright &copy;<?php echo date("Y")?> All Rights Reserved | Designed by Felix Kiamba.
    </div>
</footer><!-- //footer -->

</body>
</html>