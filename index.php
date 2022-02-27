<?php
include 'header.php';
?>
<section class="listing">
    <div class="wrapper">
        <ul class="properties_list">
            <?php
            include 'include/config.php';
            $sel = "select * from cars where status = 'Available'";
            $rs  = $conn->query($sel);
            while($rws = $rs->fetch_assoc())
            {
            ?>
            <li>
                <a href="book_car.php?id=<?php echo $rws['car_id']; ?>">
                    <img src="cars/<?php echo $rws['image']; ?>" width="300" height="200" class="thumb">
                </a>
                <span class="price"><?php echo 'Kshs.'.$rws['hire_cost']; ?></span>
                <div class="property_details">
                    <h1>
                        <a href="book_car.php?id=<?php echo $rws['car_id']; ?>"><?php echo 'Car Make'.$rws['car_type']; ?></a>
                    </h1>
                    <h2>Car Name: <span class="property_size"><?php echo $rws['car_name']; ?></span></h2>
                </div>
            </li>
            <?php
        }
            ?>
        </ul>
    </div>
</section><!-- end listing section -->
    
<!-- footer -->    
<?php include 'footer.php'; ?> 
<!-- //footer -->    
</body>
</html>