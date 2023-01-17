<?php
include("connection.php");

if(!empty($_POST["categoryId"]))
{
    $categoryID  = $_POST["categoryId"];
    $q = "select * from subcategory where categoryId = '".$categoryID."'";
    $r = mysqli_query($con,$q);

    while($data = mysqli_fetch_array($r))
    {
        ?>
    <option value="<?php echo $data["subcategoryId"]?>"><?php echo $data["subcategoryName"]?></option>

<?php


    }
}


?>