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
                <div class="search_fields">
                    <input type="text" class="float" id="check_in_date" name="check_in_date" placeholder="Check In Date" autocomplete="off" />
                    
                    <hr class="field_sep float" />

                    <input type="text" class="float" id="check_out_date" name="check_out_date" placeholder="Check Out Date" autocomplete="off" />
                </div>

                <div class="search_fields">
                    <input type="text" class="float" id="min_price" name="min_price" placeholder="Min. Price" autocomplete="off" />

                        <hr class="field_sep float">

                        <input type="text" class="float" id="max_price" name="max_price" placeholder="Max. Price" autocomplete="off" />
                </div>
                <input type="text" id="keywords" placeholder="Keywords" autocomplete="off" />
                <input type="submit" id="submit_search" name="submit_search" />
            </form>
        </div>
    </div><!-- end advanced search section -->

</section><!-- end search section -->

<section class="listing">
    <div class="wrapper">
        <ul class="properties_list">
            <h2>
                Thank you for sending a request to Sonko Rescue Team. We will get back to you once we verify your payment.<br /> You can login to view the processing status of your request using your email and the National ID Number as password.
            </h2>
        </ul>
    </div>

</section><!-- end listing section -->


<!-- footer -->
<?php include 'footer.php'; ?>
<!-- //footer -->