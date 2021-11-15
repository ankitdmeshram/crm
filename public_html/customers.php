<?php include "includes/head.php"; ?>

<?php 

if(isset($_GET['delete_customer']))
{
  delete_customer($_GET['delete_customer']);
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
                    <h3>Customers</h3>
                    <hr>
                    <div class="row pb-2" >
                        <div class="col">
                        <a class="btn btn-primary text-white" href="new-customer" >Add New</a>
                        </div>
                    </div>
                    <table class="table">
                    <thead class="thead-dark">
                      <tr>
                        <!-- <th><input type="checkbox" name="" id=""></th> -->
                        <th scope="col">Id</th>
                        <th scope="col">Name</th>
                        <th scope="col">Company</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Tags</th>
                        <th scope="col">Created At</th>
                      </tr>
                    </thead>
                    <tbody>

                <?php customers(); ?>
    
  </tbody>
</table>            
                </div>

                <!-- /////////////////////////////////////////////////////////////// -->
                <!-- /////////////////contents ends here ////////////////////////  -->
                <!-- /////////////////////////////////////////////////////////////// -->


            </div>
        </div>
    </div>

    
    <?php include "includes/footer.php"; ?>