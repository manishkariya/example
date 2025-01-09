<!DOCTYPE html>
<?php require_once("confi.php"); ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Document</title>

</head>
<body>

<!--edit-->
<?php
if(isset($_GET["editid"]))
{
    $editid=$_GET["editid"];
    $select="select * from datatable where id='$editid'"; 
    $exe=mysqli_query($con,$select); 
    $result=mysqli_fetch_array($exe);
    
}
//update data
if(isset($_POST["upd"]))
{
    $uname=$_POST["name"];
    $uage=$_POST["age"];
    $update="update datatable set name='$uname' , age='$uage' where id='$editid'";
    $exe=mysqli_query($con,$update);

if($exe)
{
   echo "<script>
   alert('your data successfully upadte')
   window.location='./';
   </script>";
} 
}
?>
    <?php 
    if(!isset($_GET["editid"]))
    {
    ?>
    <center>
    <form class="from-control mt-2" method="Post" action="">
        <div class="col-5 border bord mt-5 p-4 shadow">
        
            <div class="w-50 shadow mt-5">
                <input type="text" name="name" placeholder="enter name" class="form-control">
            </div>
            <div class="w-50 shandow mt-2">
            <input type="text" name="age" placeholder="enter age" class="form-control">
        </div>
        <div class="mt-3 ">
            <input type="submit" name="add" value="submit" class="btn btn-md btn-dark">
</div> 
</div>
<?php 
    }
    else
    {?> <center>
        <form class="from-control mt-2" method="Post" action="">
        <div class="col-5 border bord mt-5 p-4 shadow">
        
            <div class="w-50 shadow mt-5">
                <input type="text" name="name" value = "<?php echo $result["name"]; ?>" class="form-control"/>
                <br />
            </div>
            <div class="w-50 shandow mt-2">
            <input type="text" name="age" value = "<?php echo $result["age"]; ?>"   class="form-control"/>
            <br />
        </div>
        <div class="mt-3 ">
            <input type="submit" name="upd" value="update" class="btn btn-md btn-dark">
</div> 
</div>
    
<?php    
}
?>
</body>
</html>
<?php 

//add data

if(isset($_POST["add"]))
{

    $name=$_POST["name"];
    $age=$_POST["age"];
    $insert="insert into datatable(name,age) values('$name','$age')";
    $exe=mysqli_query($con,$insert);
    if($exe)
    {
        echo "<script>
        alert('your data successfully add')
        window.location='./';
        </script>";
        
    }
}
?>

<!--display data-->
<div class="col-5 shadow m-2">
<h1 class="text-center">display data</h1>
<table class="table border border-1 table-responsive">
<tr>
<?php 

$select="select * from datatable";
$exe=mysqli_query($con,$select);
while($fetch=mysqli_fetch_array($exe))
{
    ?>
 
     
    <td><?php echo $fetch["id"];?></td>
    <td><?php echo $fetch["name"];?></td>
    <td><?php echo $fetch["age"];?></td>
    <td><a href="index.php?editid=<?php echo $fetch["id"];?>" onclick="return confirm('you are comfitm ?')">edit</a>  
        <a href="index.php?deleteid=<?php echo $fetch["id"];?>" onclick="return confirm('you are confirm ?')">delete</a>
</tr>
<?php }?>    
</table>
</div>

<!--delete-->
<?php
if(isset($_GET["deleteid"]))
{
    $deleteid=$_GET["deleteid"];
    $delete="delete from datatable where id='$deleteid'";
    $exe=mysqli_query($con,$delete);
    if($exe)
    {
        echo "<script>
        alert('you are data successfully delete')
        window.location='./';
        </script>";
    }
}

?>


