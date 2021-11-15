<?php


if(!$connection)
{
    echo "<script>alert('Technical Error, Kindly Contact to your provider'); </script>";

} 
// else {
// echo "<script>alert('Connected'); </script>";
// }

//Helper Functions////////////////////////////////////

function set_message($msg)  {
if(!empty($msg))    {
$_SESSION['message'] = $msg;
}
else {
$msg = "";
}
}

function display_message()  {
    if(isset($_SESSION['message'])) {
        echo $_SESSION['message']; 
        unset($_SESSION['message']);
    }   
}


function redirect($location)    {
header("Location:$location");
}

function query($sql)    {
global $connection;
return mysqli_query($connection, $sql);
}

function confirm($result, $mes)   {
global $connection;

if(!$result)    {
die("QUERY FAILED " . mysqli_error($connection));
} else {
    if($mes != 'n')
    {
    echo "<script> alert('" . $mes . "') </script>";
}
}
}

function escape_string($string) {
global $connection;

return mysqli_real_escape_string($connection, $string);
}

function fetch_array($result)   {
return mysqli_fetch_array($result);
}




// ====================================


function add_customer() {

    $name = escape_string($_POST['name']);
    $company = escape_string($_POST['company']);
    $email = escape_string($_POST['email']);
    $phone = escape_string($_POST['phone']);
    $telephone = escape_string($_POST['telephone']);
    $website = escape_string($_POST['website']);
    $address = escape_string($_POST['address']);
    $city = escape_string($_POST['city']);
    $state = escape_string($_POST['state']);
    $zip = escape_string($_POST['zip']);
    $country = escape_string($_POST['country']);
    $tag = escape_string($_POST['tag']);
    $group = escape_string($_POST['group']);
    $notes = escape_string($_POST['notes']);

    date_default_timezone_set('Asia/Kolkata');
    $date = date('m/d/Y H:i:s', time());


    $updated_at = $date;
    $updated_by = 1;

    $query = query("INSERT INTO customers(name, company, email, phone, telephone, website, address, city,  state, zip_code, country, tag, groups, notes, updated_at, updated_by) VALUES ('{$name}','{$company}','{$email}','{$phone}','{$telephone}','{$website}','{$address}','{$city}','{$state}','{$zip}','{$country}','{$tag}','{$group}','{$notes}','{$updated_at}', '{$updated_by}')");
    
    confirm($query, 'Customer Added Successfully'); 

    redirect('customers');

}

function customers(){

    $query = query("SELECT * FROM customers");
    confirm($query , 'n');

    while($row = fetch_array($query))   {

        $id = $row['id'];
        $name = $row['name'];
        $company = $row['company'];
        $email = $row['email'];
        $phone = $row['phone'];
        $tags = $row['tag'];
        $created_at = $row['created_at'];

        // $dis_content = implode(' ', array_slice(explode(' ', $content), 0, 25)) . ".......";


        $result = <<<DELIMETER

        <tr>
      <!--th><input type="checkbox" name="" id=""></th -->
      <th scope="row">{$id}</th>
      <td>{$name} <br>
      <small><a href="view-customer?id={$id}">View</a></small>
      <!--small><a href="?delete_customer={$id}" onclick="alert('Are you sure, you want to delete {$name} from database ? ')">Delete</a></small -->
      <small><a href="?delete_customer={$id}">Delete</a></small>
    </td>
      <td>{$company}</td>
      <td>{$email}</td>
      <td>{$phone}</td>
      <td><span class="btn-sm">{$tags}</span></td>
      <td>{$created_at}</td>

    </tr>

DELIMETER;
echo $result;

}
}


function update_customer() {

    $name = escape_string($_POST['name']);
    $company = escape_string($_POST['company']);
    $email = escape_string($_POST['email']);
    $phone = escape_string($_POST['phone']);
    $telephone = escape_string($_POST['telephone']);
    $website = escape_string($_POST['website']);
    $address = escape_string($_POST['address']);
    $city = escape_string($_POST['city']);
    $state = escape_string($_POST['state']);
    $zip = escape_string($_POST['zip']);
    $country = escape_string($_POST['country']);
    $tag = escape_string($_POST['tag']);
    $group = escape_string($_POST['group']);
    $notes = escape_string($_POST['notes']);
    $id = escape_string($_POST['id']);

    date_default_timezone_set('Asia/Kolkata');
    $date = date('m/d/Y H:i:s', time());

    $updated_at = $date;
    $updated_by = 1;

    $update_query = "UPDATE customers SET ";
    $update_query .="name  = '{$name}', ";
    $update_query .="company  = '{$company}', ";
    $update_query .="email  = '{$email}', ";
    $update_query .="phone  = '{$phone}', ";
    $update_query .="telephone  = '{$telephone}', ";
    $update_query .="website  = '{$website}', ";
    $update_query .="address  = '{$address}', ";
    $update_query .="city  = '{$city}', ";
    $update_query .="state  = '{$state}', ";
    $update_query .="zip_code  = '{$zip}', ";
    $update_query .="country  = '{$country}', ";
    $update_query .="tag  = '{$tag}', ";
    $update_query .="groups  = '{$group}', ";
    $update_query .="notes  = '{$notes}' ";
    
    $update_query .= "WHERE id = '{$id}' ";

    $update_customer = query($update_query);

    confirm($update_customer, 'n');

 }


function delete_customer($id) {
        $query = query("DELETE FROM customers WHERE id = " . $id);
        confirm($query, 'deleted successfully'); 
        echo "<script>alert('deleted successfully')</script> ";
        // echo "<script>window.location.href = 'all-blogs.php'</script> ";
        redirect('customers');
    
}





?>