<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User List</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.css">
</head>
<body>
<nav class="navbar navbar-dark bg-dark">
  <div class="container">
    <div class="row">
       <a class="navbar-brand" href="#">CRUD In Codeigniter 3</a>
    </div>
  </div> 
</nav>
<br>
<div class="container">
  <div class="row">
    <span><a href="index.php" style="text-decoration: none;">Home</a></span>
  </div>  
</div><br>
    <div class="container">
        <div class="row" style="background-color: #007becc7; height: 50px;border: 1px solid #007becc7;">
           <div class="col-6" style="line-height: 50px; font-weight: bold;color: white; font-size: 20px;">User List</div>
           <div class="col-6 text-right" style="line-height: 45px;"><a href="create.php" style="text-decoration: none;"><button class="btn btn-light"><i class="fa fa-plus" style="font-size:13px;"></i>&nbsp;<b>Create User</b></button></a></div>
        </div>
        <div class="row">
           <div class="col-md-12" style="border: 1px solid black; margin: auto;"> 
           <table class="table table-striped" style="text-align: center;">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td><a href="#"> 
                                     <button class="btn btn-primary"><i class="fa fa-pencil"></i></button></a>
                                     <a href="#"> 
                                     <button class="btn btn-danger" onClick="return confirm('Do you really want to delete');"><i class="fa fa-trash-o "></i></button></a></td>
    </tr>
    
  </tbody>
</table>
        </div>  
        </div>
    </div>

    <script src="js/bootstrap.min.js"></script> 
    <script src="js/bootstrap.js"></script>  
</body>
</html>