<center>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<div class="w-50 mx-auto mt-5 p-5 shadow bg-white content">
<h2 class="text-center">update</h2>
<hr class="border border-white border-2 w-25 mx-auto" />
<!-- update task here -->
<form method="post" class="w-75 mx-auto">
    <div class="input-group">
    <label>Edit taskName *</label>

    <input type="text" name="taskname" value="<?php echo $editdata["name"];?>" placeholder="what will you do ?" class="form-control rounded p-3" style="border-radius:25px !important" required>
    
    </div>
    <div class="input-group mt-2">
    <label>Edit taskDate *</label>    
    <input type="text" name="age" value="<?php echo $editdata["age"];?>" placeholder="edit task date" class="form-control rounded p-3" style="border-radius:25px !important" required>
</div>

<div class="input-group mt-2 w-50 mx-auto">
    <button type="submit" name="updatetask" class="btn btn-dark btn-sm p-1 ms-1 text-white rounded mt-2" style="width: 155px; height: 45px;">Update Task <span class="bi bi-pencil"></span></button>
</div>
 </form>  