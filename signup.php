<?php includ 'header.php'; ?>

<section class="search">
    <div class="wrapper">
        <form action="#" method="post">
            <input type="text" id="search" name="search" placeholder="What are you looking for?" autocomplete="off" />
            <input type="submit" id="submit_search" name="submit_search" />
        </form>
        <a href="" class="advanced_search_icon" id="advanced_search_btn"></a>
    </div>
    <div class="advanced_search">
        <div class="wrapper">
            <span class="arrow"></span>
            <form action="#" method="post">
                <div class="search_fields">
                    <input type="text" class="float" id="check_in_date" name="check_in_date" autocomplete="off" />

                    <hr class="field_sep float">

                    <input type="text" class="float" id="check_out_date" name="check_out_date" autocomplete="off" />
                </div>

                <div class="search_fields">
                    <input type="text" class="float" id="min_price" name="min_price" placeholder="Min. Price" autocomplete="off" />

                    <hr class="field_sep float">

                    <input type="text" class="float" id="max_price" name="max_price" placeholder="Max. Price" autocomplete="off" />
                </div>
                <input type="text" id="keywords" name="keywords" placeholder="Keywords" autocomplete="off" />
                <input type="submit" id="submit_search" name="submit_search" />
            </form>
        </div>
    </div><!-- end advanced search section -->

</section><!-- end search section -->

<section class="listings">
    <div class="wrapper">
        
        <h3>Signup Here</h3>
        <form action="#" method="post">
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
                    <td><input type="email" name="email" required></td>
                </tr>
                <tr>
                    <td>ID Number:</td>
                    <td><input type="text" name="id_no" required></td>
                </tr>
                <tr>
                    <td>Gender:</td>
                    <td>
                        <select name="gender">
                            <option value="">Select Gender</option>
                            <option value="">Male</option>
                            <option value="">female</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Location:</td>
                    <td><input type="text" name="location" required></td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align: right;">
                        <input type="submit" name="save" value="Submit Details">
                    </td>
                </tr>
            </table>
        </form>
        <?php
        if(isset($_POST['save']))
        {
            include 'includes/config.php';
            $fname    = $_POST['fname'];
            $id_no    = $_POST['id_no'];
            $gender   = $_POST['gender'];
            $email    = $_POST['email'];
            $phone    = $_POST['phone'];
            $location = $_POST['location'];

            $qry = "insert into client(fname, id_no, gender, email, phone, location, status) values('$fname', '$id_no', '$gender', '$phone', '$location', 'Available')";
            $result = $conn->query($qry);
            if($result == true)
            {
                echo "        
                <script type=\"text/javascript\">
                    alert(\"SuccessfullyRegistered.\");
                    window.location = (\"account.php\");
                </script>
                ";
            }else
            {
                echo "
                <script type\"text/javascript\">
                    alert(\"Registeration Failed. Try Again\";
                    window.location = (\"signup.php\");
                </script>
                ";            
            }
        }
        ?>
    </div>
</section><!-- end listing section -->

<!-- footer -->
<?php includ 'footer.php'; ?>
<!-- footer -->