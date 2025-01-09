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
           <span class="bi bi-file-text-fill text-white ms-3"><h> Task manager </h></span>
         </div>  
       </div>
</div>
<center>
<h1 class="mt-4"> Edit Task </h1>
  <div class="w-5 mt-4">
  <input type="tetx" name="name" value="{{$edit->taskname}}" class="form-control w-50 border-0">
  <div class="border border-2 w-50"></div>
  <input type="tetx" name="details" value="{{$edit->taskdetails}}" class="form-control w-50 border-0">
  <div class="border border-2 w-50"></div>
  </div>
<div class="mt-4">
<button type="submit" name="task update" class="btn btn-primary">Update Task</button>
</div>
</center>
</form>

</body>
</html>