<?php
$mainurl="http://localhost/phpex/mvc"; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</head>
<body>
    <center>
        <form method="post">
        <div class="col-6 shadow mt-5 p-5">
        <div class="mt-5 text-center text-primary">
            <h1> welcome my site</h1>
            <div class="m-5">
                <input type="text" name="t1" placeholder="enter value">
            </div>
        <div>
    <input type="text" name="t2" placeholder="enter value">
</div>
<input type="submit" name="submit" value="submit" class="btn btn-md btn-dark mt-6">

</div>
</form>
</body>
</html>
<!-- display data -->
 <table>
    <tr>
 <?php
 foreach($shw as $show)
 {
    ?>
    <tr>
    <td><?php echo $show['name'];?></td>
    <td><?php echo $show['age']; ?></td>
    <td><a href="<?php echo $mainurl ; ?>?deleteid=<?php echo $show['id'];?>">delete</a></td>
    <td><a href="<?php echo $mainurl ; ?>/edittask.php?editid=<?php echo $show['id'];?>">edit</a></td>
 </tr>
    <?php
 }?>
 </tr>
 </table>