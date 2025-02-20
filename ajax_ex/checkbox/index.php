

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>My first app in core php</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="assets/css/style.css" />
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    
</head>
<body>
<div class="w-50 mx-auto mt-3 p-5 shadow">
<h3 class="text-center">Create your account</h3>
<hr class="border border-1 border-dark w-25 mx-auto" />
<form method="post">





                <div class="form-group mt-3">
                    Male &nbsp<input type="radio" name="gender" value="male" placeholder="Confirmed Password *" class="m-0 p-0">
                    Female &nbsp<input type="radio" name="gender" value="female" placeholder="Confirmed Password *" class="m-0 p-0">
                    Other &nbsp<input type="radio" name="gender" value="Other" placeholder="Confirmed Password *" class="m-0 p-0">
                </div>

                <div class="form-group mt-3">
                    Playing &nbsp<input type="checkbox" name="chk[]" value="palying" placeholder="Confirmed Password *" class="m-0 p-0">
                    Cooking &nbsp<input type="checkbox" name="chk[]" value="cooking" placeholder="Confirmed Password *" class="m-0 p-0">
                    Reading &nbsp<input type="checkbox" name="chk[]" value="reading" placeholder="Confirmed Password *" class="m-0 p-0">
                </div>
                <div class="form-froup mt-3">
                <input type="submit" name="add" value="Register" class="btn btn-sm btn-dark text-white" >
                </div>

</form>
<?php if(isset($_POST["add"]))
       {
        $gender=$_POST["gender"];
        $hobies=$_POST["chk"];
        $hobies1=implode(",",$hobies);
        echo $gender;
        echo $hobies1;
    
          ?>   <input type="radio" name="gender" <?php if($gender=="male"){?> checked="true" <?php } ?> >male
               <input type="radio" name="gender" <?php if($gender=="female"){?> checked="true" <?php } ?> >female

               Playing &nbsp<input type="checkbox" name="chk[]" value="palying" <?php if(in_array("palying",$hobies)){?> checked="true" <?php } ?> placeholder="Confirmed Password *" class="m-0 p-0">
                    Cooking &nbsp<input type="checkbox" name="chk[]" value="cooking" <?php if(in_array("cooking",$hobies)){?> checked="true" <?php } ?>  placeholder="Confirmed Password *" class="m-0 p-0">

         
                    
 <?php
         $arr=explode(",",$hobies1);
         print_r($arr);
        

       }?>