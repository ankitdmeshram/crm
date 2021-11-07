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
                    <h3>New Customer</h3>
                    <hr>

                    <form method="post">


                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                <label >Name</label>
                                <input type="text" name="name" class="form-control"placeholder="Enter Name">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                <label >Company Name</label>
                                <input type="text" name="company" class="form-control"placeholder="Enter Company Name">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                <label >Email</label>
                                <input type="text" name="email" class="form-control"placeholder="Enter Email">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                <label >Phone</label>
                                <input type="tel" name="phone" class="form-control"placeholder="Enter Phone">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                <label >Telephone</label>
                                <input type="tel" name="telephone" class="form-control"placeholder="Enter Phone">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                <label >Website</label>
                                <input type="text" name="website" class="form-control"placeholder="Enter Website URL">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                <label >Address</label>
                                <textarea name="address" class="form-control" placeholder="Enter Address" ></textarea>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                <label >City</label>
                                <input type="text" name="city" class="form-control"placeholder="Enter City">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                <label >State</label>
                                <input type="text" name="state" class="form-control"placeholder="Enter State">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                <label >Zip/Pin Code</label>
                                <input type="number" name="zip" class="form-control"placeholder="Enter Zip/Pin Code">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                <label >Country</label>
                                <input type="text" name="country" class="form-control"placeholder="Enter Country">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                <label >Tag</label>
                                <input type="text" name="tag" class="form-control"placeholder="Enter Tags">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                <label >Groups</label>
                                <input type="text" name="group" class="form-control"placeholder="Enter Groups">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                <label >Notes</label>
                                <textarea name="notes" class="form-control"placeholder="Enter Notes"></textarea>
                                </div>
                            </div>
                            <div class="col-sm-6">
                            <button type="submit" name="add_user" class="btn btn-primary">Submit</button>

                            </div>

                          
                          

                        </div>
                    </div>




                     
                    </form>



                </div>

                <!-- /////////////////////////////////////////////////////////////// -->
                <!-- /////////////////contents ends here ////////////////////////  -->
                <!-- /////////////////////////////////////////////////////////////// -->


            </div>
        </div>
    </div>

    
    <?php include "includes/footer.php"; ?>