<html>
<head>
<meta charset='utf-8'>
<meta http-equiv='X-UA-Compatible' content='IE=edge'>
<title>Page Title</title>
<meta name='viewport' content='width=device-width, initial-scale=1'>
<!-- bootstrap cdn call here -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<link rel='stylesheet' type='text/css' media='screen'>
<!-- bootstrap js CDN -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</head>
<body>
  

<form method="post">
    @csrf
    <div class="container-fluid bg-secondary mx-auto  p-3 shadow">
        <div class="row">
         <div class="col-md-7 fs-5">   
       <span class="bi bi-file-text-fill text-white ms-3"><h> Task manger </h></span>
        </div>  
            <div class="col-md-5">
       </div>
</div>
</div>
<center>
<h2 class="mt-4"> Add New Task Here</h2>

  <div class="mt-4">
  
   
  <input type="tetx" name="name" placeholder="add task" class="form-control w-50 border-0">
     

  <div class="border border-2 w-50"></div>
  
  <input type="tetx" name="age" placeholder="details" class="form-control w-50 border-0">
  <div class="border border-2 w-50"></div>
</div>
<div class="mt-4">

<button type="submit" name="Tasks" class="btn  btn-primary">CREATE TASK</button>

</div>
</center>
</form>
<div class="col-lg-12 col-md-12">
  <div class="header mt-3  text-center">
    <h3>Task List</h3>
</div>
<table class="table border border-1 table-bordered table-responsive">
  @foreach($data as $row)
  <tr>
    <td class="row"><div class="col-lg-2 col-md-2"><a href='{{("/edittask/".$row->id)}}' onclick="return confirm('are you sure edit task ?')">
      <i class="bi bi-pencil ms-3"></i></a>


      <a href='{{("/".$row->id)}}' onclick="return confirm('are you sure delete task ?')">
<i class="bi bi-trash ms-3"></i></a>
  
  </div>
<div class="col-md-4">
  {{ $row->name }}
</div>

<div class="col-md-4 p-2 " >
  {{ $row->age}}




</div>
</td></tr>
@endforeach
</table>


</body>
</html>