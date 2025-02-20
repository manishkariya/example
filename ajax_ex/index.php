<?php $con =mysqli_connect("localhost","root","","testdb");?>
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
    
 <nav class="nav navbar navbar-expand-md bg-dark text-white">
    <a href="" class="navbar-brand ms-5">CRUD App in php</a>
    <ul class="navbar-link">
        <li><a href="index.php">Home</a></li>
        <li><a href="add-employee.php">AddEmployee</a></li>
        <li><a href="register.php">Register</a></li>
        <li><a href="login.php">Login</a></li>
        <li><a href="contact.php">Contact</a></li>
    </ul>
 </nav>  
 <script src='https://code.jquery.com/jquery-3.7.1.js'></script> 
 <script>
   function str(val)
   {  

    $.ajax({
        
        type:"POST",
        url:"getdata.php",
        data:"cn="+val,
        success:function(data)
        {
            $("#st").html(data);
        }
    })

}
function str1(val)
{

    $.ajax({
        type:"POST",
        url:"getdata.php",
        data:"st="+val,
        success:function(data)
        {
            $("#ct").html(data);
        }
    }

    )
}

 </script> 

</body>
</html>
<div class="w-50 mx-auto mt-3 p-5 shadow">
<h3 class="text-center">Create your account</h3>
<hr class="border border-1 border-dark w-25 mx-auto" />
<form method="post">



<div class="form-group mt-2">
    <select name="country"  id="cn"  onchange="return str(this.value)"  placeholder="select country" class="form-control">
    <?php 
            $select ="select * from country";
            $exe=mysqli_query($con,$select);
            while($fetch=mysqli_fetch_array($exe))
            { ?> 
                
            <option value="<?php echo $fetch["cid"];?>"> <?php echo $fetch["cname"];?></option>  
                    
                
          <?php      } ?>


  
</select> </div>
<div class="form-group mt-2">
    <select name="state" id="st"   onchange="return str1(this.value)"   placeholder="select country" class="form-control">
    <option value="">select state</option>
    <option value=""></option>
</select> </div>
<div class="form-group mt-2">
    <select name="city" id="ct" placeholder="select city" class="form-control">
    <option value="">select state</option>
    <option value=""></option>
</select> </div>


<div class="form-group mt-2">
<input type="submit" name="reg-data" value="Register" class="btn btn-dark text-white" />
</div>
</form>
<!--<select name="country" id="cn" onchange="return str(this.value)"  placeholder="Select country *" class="form-control">
<option value="">select country</option> -->
