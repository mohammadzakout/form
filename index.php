<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation</title>
    <style>
        .form-container{
padding: 40px;
background-color: cornflowerblue;
border-radius: 5px;
margin: 0% 30%;
        }
        label{
            color: white;
        }
        .input_field{
            display: block;
            width: 100%;
            border-radius: 3px;
            margin: 10px 0px;
            border: 1px solid white;
        }
        .submit_field{
            width: 100%;
            border: 1px solid white;
            margin-top: 10px;
            color: rgb(255, 255, 255);
            background-color: brown;
        }
        .warning_message{
            color: red;
            font-size: 12px;
        }
        .gender_select{
            margin: 10px 0px;
        }
    </style>
   <?php 
   
   $enterd_name = $_POST["name"];
   $error_message_for_name_field ="";
   if ($_SERVER["REQUEST_METHOD" ]== 'POST') {
    if(isset(test_input($_POST["name"])))
    if (empty($enterd_name)) {
        $error_message_for_name_field = "this field is required";
       }
       
   }

   function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
  // script to check htmlspecialchars
   //%22%3E%3Cscript%3Ealert('hacked')%3C/script%3E
   
   
   ?>
</head>
<body>
    <div class="form-container">
        <form action="<?php echo htmlspecialchars(  $_SERVER["PHP_SELF"]);?>" method="post">

<label for="name"> Full Name</label>
<input type="text" id="name" name = "name" class="input_field">
<h3 class="warning_message"> <?php echo $error_message_for_name_field ?></h3> 
<label for="email"> Email </label>
<input type="text" id="email" name = "email" class="input_field"> 

<label for="dob"> Date of Birth</label>
<input type="date" id="dob" name = "dob" class="input_field"> 

<label for="name" style="margin-bottom: 15px;"> Gender</label>



<div class="gender_select">
    <label for="male"> Male</label>
    <input type="radio" id="male" name = "gender" value="male" checked>
 <label for="male"> Female</label>

<input type="radio" id="female" name = "gender" value="female"> 

<input type="submit" name="Sign up" class="submit_field">

</div>

   </form>   
    </div>
 
</body>
</html>