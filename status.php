<?php include 'header.php'; ?>

<section class="listings">
    <div class="wrapper">
        <h2 style="text-decoration: underline;">Your Booking Status</h2>
        <ul class="properties_list">
            <?php
            include 'includes/config.php';
            $sel = "select * from client where email = '$_SESSION[email]'";
            $rs = $conn->query($sel);
            $rws = $rs->fetch_assoc();
            ?>
            <li>
                <h2>
                    <span style="font-size: 25px; color: #f00;">Booking Status:</span>
                    <span style="color: #033; font-weight: bold; font-size: 25px;"><?php echo $rws['status']; ?></span>
                </h2>
            </li>
        </ul>
    </div>
</section><!-- end listing section -->

<!-- footer -->
<?php include 'footer.php'; ?>
<!-- //footer -->