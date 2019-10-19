<?php

require_once("db.php");




if(isset($_POST['submit']))
{
   
    $fullname=$_REQUEST['fullname'];
    $email = $_REQUEST['email'];
    $mobile = $_REQUEST['mobile'];
    $dob = $_REQUEST['dob'];
    $gender = $_REQUEST['gender'];
    $hobby = $_REQUEST['hobby'];
    $state = $_REQUEST['state'];
    $files = $_FILES['img'];

    
    
    //upload multiple images in one row
    $imagedata = array();
    if(isset($_FILES['img']))
    {
        foreach($_FILES['img']['tmp_name'] as $key => $tmp_name)
        {
            $file_name = $key.$_FILES['img']['name'][$key];
            $file_tmp = $_FILES['img']['tmp_name'][$key];

            array_push($imagedata, $file_name); //filename inserted into an empty array
            move_uploaded_file($file_tmp,"images/" .$file_name);
        }

        $img_name = implode("|", $imagedata); //imploade returns a string
        $q = "INSERT INTO form (fullname, mobile, email, dob, gender, hobby, state, image) VALUES
        ('$fullname', '$mobile', '$email', '$dob', '$gender', '$hobby', '$state', '$img_name')";
        

        mysqli_query($db, $q);
        echo "files uploaded successfully";


    }
    




}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>form</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
<div class="row">
<?php

$a= mysqli_query($db, "SELECT * FROM form ORDER by id desc limit 1");
$r = mysqli_num_rows($a);
if($r==1){
    while($row=mysqli_fetch_assoc($a))
    {

    $images = explode("|", $row['image']);


?>
<div class="text-center text-uppercase">
<p>Name: <?php echo $row['fullname'];?></p>
<p>Email: <?php echo $row['email'];?></p>
<p>Mobile: <?php echo $row['mobile'];?></p>
<p>Gender: <?php echo $row['gender'];?></p>
<p>Hobbies: <?php echo $row['hobby'];?></p>
<p>Date of Birth: <?php echo $row['dob'];?></p>
<p>State: <?php echo $row['state'];?></p>
<p>Date: <?php echo $row['date'];?></p>


<?php
for($i=0;$i < count($images); $i++) {
   echo "<img src='images/$images[$i]' alt='data' class='img-fluid'>";
}

    }
}

?>


</div>

</div>


</div>




    
</body>
</html>