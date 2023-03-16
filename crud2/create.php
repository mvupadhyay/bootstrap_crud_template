<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create User</title>
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
    <span><a href="index.php" style="text-decoration: none;">Home</a></span>&nbsp;>&nbsp;<span>Create</span>
  </div>  
</div><br>
    <div class="container">
        <div class="row" style="background-color: #007becc7; height: 50px;border: 1px solid #007becc7;">
           <div class="col-6" style="line-height: 50px; font-weight: bold;color: white; font-size: 20px;">Create User</div>
           <div class="col-6 text-right" style="line-height: 45px;"><a href="index.php" style="text-decoration: none;"><button class="btn btn-light"><i class="fa fa-arrow-left" style="font-size:14px;"></i>&nbsp;<b>User List</b></button></a></div>
        </div>
        <div class="row">
           <div class="col-md-12" style="border: 1px solid black; margin: auto;"> 
        <form style="margin: 10px;;">
            <div class="form-row">
              <div class="col-md-12">
                <label for="validationServer01"></label>
                <input type="text" class="form-control is-valid" id="validationServer01" value="Mark" required>
                <!-- <div class="valid-feedback">
                  Looks good!
                </div> -->
              </div>
              <div class="col-md-12">
                <label for="validationServer02"></label>
                <input type="text" class="form-control is-valid" id="validationServer02" value="Otto" required>
                <div class="valid-feedback">
                  <!-- Looks good! -->
                </div>
              </div>
            </div><br>
            <!-- <div class="form-row">
              <div class="col-md-6 mb-3">
                <label for="validationServer03">City</label>
                <input type="text" class="form-control is-invalid" id="validationServer03" aria-describedby="validationServer03Feedback" required>
                <div id="validationServer03Feedback" class="invalid-feedback">
                  Please provide a valid city.
                </div>
              </div>
              <div class="col-md-3 mb-3">
                <label for="validationServer04">State</label>
                <select class="custom-select is-invalid" id="validationServer04" aria-describedby="validationServer04Feedback" required>
                  <option selected disabled value="">Choose...</option>
                  <option>...</option>
                </select>
                <div id="validationServer04Feedback" class="invalid-feedback">
                  Please select a valid state.
                </div>
              </div>
              <div class="col-md-3 mb-3">
                <label for="validationServer05">Zip</label>
                <input type="text" class="form-control is-invalid" id="validationServer05" aria-describedby="validationServer05Feedback" required>
                <div id="validationServer05Feedback" class="invalid-feedback">
                  Please provide a valid zip.
                </div>
              </div>
            </div> -->
            <!-- <div class="form-group">
              <div class="form-check">
                <input class="form-check-input is-invalid" type="checkbox" value="" id="invalidCheck3" aria-describedby="invalidCheck3Feedback" required>
                <label class="form-check-label" for="invalidCheck3">
                  Agree to terms and conditions
                </label>
                <div  id="invalidCheck3Feedback" class="invalid-feedback">
                  You must agree before submitting.
                </div>
              </div>
            </div> -->
           
              <div class="col-md-12" style="text-align: center;">
                <label for="validationServer02"></label>
                <input type="button" class="btn btn-primary" value="Submit">
                <!-- <div class="valid-feedback">
                  Looks good!
                </div> -->
              </div>
           
            <!-- <button class="btn btn-primary" type="submit">Submit form</button> -->
          </form>
        </div>  
        </div>
    </div>

    <script src="js/bootstrap.min.js"></script> 
    <script src="js/bootstrap.js"></script>  
</body>
</html>