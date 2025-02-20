<?php $con =mysqli_connect("localhost","root","","testdb");?>
<?php
if(isset($_POST["cn"]))
{
    $cn=$_POST["cn"]; 
    $select="select * from state where cid='$cn'";
    $exe=mysqli_query($con,$select);
    while($fetch=mysqli_fetch_array($exe))
    { ?>
         
         <option value="<?php echo $fetch["sid"];?>"><?php echo $fetch["sname"];?></option>
   <?php } 
}
if(isset($_POST["st"]))
{
    $st=$_POST["st"];
    $select="select * from city where sid='$st'";
    $exe=mysqli_query($con,$select);
    while($fetch=mysqli_fetch_array($exe))
    {?>

    <option value="<?php echo $fetch["ctid"];?>"><?php echo $fetch["cname"];?></option>


   <?php  }
}








?>