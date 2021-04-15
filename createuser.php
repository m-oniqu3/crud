<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Create User</title>

  <!-- Bootstrap CSS -->
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <!-- Popper JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <link rel="stylesheet" type="text/css" href="css\style.css">
</head>

<body>
  <nav class="nav bg-light p-2 m-1 navbar-expand-lg navbar-light">
    <button id="button" class="navbar-toggler">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="row navbar-collapse collapse" id="navbar">
      <div class="col-6 p-2  offset-3 offset-lg-0 col-lg-2 order-1 order-lg-2">
        <img src="images\logo.png" class="img-fluid">
      </div>

      <div class="navbar-nav p-2  col-12 col-lg-5 d-flex order-lg-1 order-2">
        <a href="#" class="nav-link text-center">Home</a>
        <a href="#" class="nav-link text-center">Report</a>
        <a href="#" class="nav-link text-center">Update</a>
      </div>


      <div class="navbar-nav p-2 col-12   col-lg-5 d-flex justify-content-end order-3">
        <a href="#" class="nav-link text-center">About</a>
        <a href="#" class="nav-link text-center">Contact</a>
        <a href="#" class="nav-link text-center">Admin</a>
      </div>
    </div>

  </nav>



  <form class="main-form col-10 col-sm-10 col-md-8 col-lg-6 col-xl-6 mx-auto " action="http://localhost/roadnet/insert.php" method="POST">

    <div class="form-row p-2">

      <div class="form-group col-md-6">
        <label class="h6 text-success" for="fullname">First Name</label>
        <div class="">
          <input type="text" class="form-control" id="firstname" name="firstname" placeholder="First Name" required>
        </div>
      </div>

      <div class="form-group col-md-6">
        <label class="h6 text-success" for="lastname">Last Name</label>
        <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Last Name" required>
      </div>
    </div>

    <div class="form-row p-2">
      <div class="form-group col-md-6">
        <label class="h6 text-success" for="staffuser">Username</label>
        <div class="">
          <input type="text" class="form-control" id="username" name="username" placeholder="Username" required>
        </div>
      </div>

      <div class="form-group col-md-6">
        <label class="h6 text-success" for="staffpwd">Password</label>
        <div class="">
          <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
        </div>
      </div>
    </div>


    <!-- GPS
        <div class="">
          <label class="" for="gps">GPS co-ordinates:</label>
          <div class="">
            <input type="text" class="form-control" id="gps" placeholder="Enter Co-ordinate of Location">
          </div>
        </div> -->


    <!-- Address 1 -->
    <div class="p-2 col-12">
      <label class="h6 text-success" for="parish">Parish</label>
      <div class="">
        <select name="parish" id="parish" class="form-control" required>

          <option disabled selected value> -- Select a Parish -- </option>
          <option disabled></option>

          <option disabled> Cornwall County </option>
          <option value="Hanover">Hanover</option>
          <option value="St. James">St. James</option>
          <option value="Trelawny">Trelawny</option>
          <option value="Westmoreland">Westmoreland</option>
          <option value="St. Elizabeth">St. Elizabeth</option>

          <option disabled></option>
          <option disabled> Middlesex County </option>
          <option value="St. Ann">St. Ann</option>
          <option value="St. Mary">St. Mary</option>
          <option value="Clarendon">Clarendon</option>
          <option value="Manchester">Manchester</option>
          <option value="St. Catherine">St. Catherine</option>

          <option disabled></option>
          <option disabled> Surrey County </option>
          <option value="Portland">Portland</option>
          <option value="St. Andrew">St. Andrew</option>
          <option value="Kingston">Kingston</option>
          <option value="St. Thomas">St. Thomas</option>
        </select>
      </div>
    </div>

    <!-- User Role-->
    <div class="p-2 col-12">
      <label class="h6 text-success" for="role">Role</label>
      <div class="">
        <select name="role" id="role" class="form-control" required>

          <option disabled selected value> -- Select a Role -- </option>
          <option value="Staff">Staff</option>
          <option value="Parish Manager">Parish Manager</option>
          <option value="Director">Director</option>
          <option value="Admin">Admin</option>

        </select>
      </div>
    </div>


    <br>
    <!-- Submit Button -->
    <div class="p-2 col-12">
      <div class="">
        <button type="submit" class="btn btn-success">Submit</button>
      </div>
    </div>

    <br>

  </form>
  </div>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>


</body>

</html>