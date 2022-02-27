<?php include 'header.php'; ?>

<section class="search">
    <div class="wrapper">
        <form action="#" method="post">
            <input type="text" id="search" name="search" placeholder="What are you looking for?" autocomplete="off" />
            <input type="submit" id="submit_search" name="submit_search" />
        </form>
        <a href="#" class="advanced_search_icon" id="advanced_search_btn"></a>
    </div>

    <div class="advanced_search">
        <div class="wrapper">
            <span class="arrow"></span>
            <form action="#" method="post">
                <div class="search_fields"><input type="text" class="float" id="check_in_date" placeholder="Check In Date" autocomplete="off" />

                    <hr class="field_sep float">

                    <input type="text" class="float" id="check_out_date" name="check_out_date" placeholder="Check Out Date" autocomplete="off" />
                </div>

                <div class="search_fields">
                    <input type="text" class="float" id="min_price" placeholder="Min. Price" autocomplete="off" />

                    <hr class="field_sep float">

                    <input type="text" class="float" id="max_price" name="max_price" placeholder="Max. Price" autocomplete="off" />
                    </div>
                    <input type="text" id="keywords" name="keywords" placeholder="keywords" autocomplete="off" />
                    <input type="submit" id="submit_search" name="submit_search" />
            </form>
        </div>
    </div><!-- end advanced search section -->
</section><!-- end search section -->

<section class="listing">
    <div class="wrapper">
        <ul class="properties_list">
            <h3 style="text-decoration: underline;">Make Payments Here</h3>
            <h5>Paybill Number: 00000</h5>
            <h6>Business Number: ID Number Registered with.</h6>
            <form action="#" method="post">
                <table>
                    <tr>
                        <td>MPESA Transaction ID:</td>
                        <td><input type="text" name="mpesa" required></td>
                    </tr>
                    <tr>
                        <td>National ID Number:</td>
                        <td><input type="text" name="id_no" required></td>
                    </tr>
                    <tr>
                        <td colspan="2" style="text-align: right;"><input type="submit" name="pay" value="Submit Details"></td>
                    </tr>
                </table>
            </form>
            <?php
            if(isset($_POST['pay']))
            {
                include 'includes/config.php';
                $mpesa = $_POST['mpeas'];
                $id_no = $_POST['no_id'];

                $qry = "update client set mpesa = '$mpesa' where id_no = '$id_no'";
            }
            $result = $conn->query($qry);
            if($result == true)
            {
                echo "        
                <script type=\"text/javascript\">
                    alert(\"Payment Successfully Done. Wait for Admin Approval\");
                    window.location = (\"wait.php\");
                </script>
                ";
            }else
            {
                echo "
                <script type\"text/javascript\">
                    alert(\"Register Failed. Try Again.............\";
                    window.location = (\"pay.php\");
                </script>
                ";
            }
            ?>
        </ul>
        <div class="more_listing">
            <a href="#" class="more_listing_btn">View More Listings</a>
        </div>
    </div>
</section><!-- end listing section -->

<!-- footer -->
<?php include 'footer.php'; ?>
<!-- //footer -->