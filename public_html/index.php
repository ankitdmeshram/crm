<?php include "includes/head.php"; ?>

<?php 

    if(isset($_POST['add_user']))
    {
        add_customer();
    }

?>

    <div class="container-fluid gs-cont">
        <div class="gs-container">
        <?php include "includes/sidebar.php"; ?>
            <div class="gs-body gs-col container-fluid bg-light" id="gs-body">
                <?php include "includes/nav.php"; ?>

                <!-- /////////////////////////////////////////////////////////////// -->
                <!-- /////////////////contents starts here ////////////////////////  -->
                <!-- /////////////////////////////////////////////////////////////// -->

                <div class="gs-content card m-3 p-3">
                    <h3>Dashboard</h3>
                    <hr>

                  



                </div>

                <!-- /////////////////////////////////////////////////////////////// -->
                <!-- /////////////////contents ends here ////////////////////////  -->
                <!-- /////////////////////////////////////////////////////////////// -->


            </div>
        </div>
    </div>

    
    <?php include "includes/footer.php"; ?>