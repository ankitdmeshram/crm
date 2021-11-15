<?php include "includes/head.php"; ?>

<?php 

if(isset($_POST['update_user'])){
    update_customer();
}

?>

<?php 

$id = escape_string($_GET['id']);


$query = query("SELECT * FROM customers WHERE id = $id");
confirm($query , 'n');






while($row = fetch_array($query))   {

    $id = $row['id'];
    $name = $row['name'];
    $company = $row['company'];
    $email = $row['email'];
    $phone = $row['phone'];
    $tags = $row['tag'];
    $created_at = $row['created_at'];
    $telephone = $row['telephone'];
    $website = $row['website'];
    $address = $row['address'];
    $city = $row['city'];
    $state = $row['state'];
    $zip = $row['zip_code'];
    $country = $row['country'];
    $tag = $row['tag'];
    $group = $row['groups'];
    $notes = $row['notes'];

    // echo "<script>alert('" . $name . "')</script>";
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
                                <input type="hidden" name="id" value="<?php echo $id; ?>">
                                <input type="text" name="name" class="form-control" value="<?php echo  $name; ?>"  >
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                <label >Company Name</label>
                                <input type="text" name="company" class="form-control" value="<?php echo  $company; ?>"  >
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                <label >Email</label>
                                <input type="text" name="email" class="form-control" value="<?php echo  $email; ?>"  >
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                <label >Phone</label>
                                <input type="tel" name="phone" class="form-control" value="<?php echo  $phone; ?>"  >
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                <label >Telephone</label>
                                <input type="tel" name="telephone" class="form-control" value="<?php echo  $telephone; ?>" >
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                <label >Website</label>
                                <input type="text" name="website" class="form-control" value="<?php echo  $website; ?>" >
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                <label >Address</label>
                                <textarea name="address" class="form-control"   ><?php echo  $address; ?></textarea>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                <label >City</label>
                                <input type="text" name="city" class="form-control" value="<?php echo  $city; ?>" >
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                <label >State</label>
                                <input type="text" name="state" class="form-control" value="<?php echo  $state; ?>" >
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                <label >Zip/Pin Code</label>
                                <input type="text" name="zip" class="form-control" value="<?php echo  $zip; ?>" >
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                <label >Country</label>
                                <input type="text" name="country" class="form-control" value="<?php echo  $country; ?>" >
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                <label >Tag</label>
                                <input type="text" name="tag" class="form-control" value="<?php echo  $tag; ?>" >
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                <label >Groups</label>
                                <input type="text" name="group" class="form-control" value="<?php echo  $group; ?>" >
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                <label >Notes</label>
                                <textarea name="notes" class="form-control"  ><?php echo $notes; ?></textarea>
                                </div>
                            </div>
                            <div class="col-sm-6">
                            <button type="submit" name="update_user" class="btn btn-primary">Submit</button>

                            </div>
                          
                                <?php } ?>                          

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