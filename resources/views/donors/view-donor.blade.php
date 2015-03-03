
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Donor</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">



    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

    <h1 class="page-header">Gift Aid Management</h1>


    <div class="jumbotron">

    <div class="container">


      <form class="form-inline">
        <legend class="h2">Edit or Delete Donors</legend>
        <div class="form-group">
          <label class="sr-only" for="exampleInputEmail2">Email address</label>
          <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Enter Name">
        </div>
        Or
        <div class="form-group">
          <label class="sr-only" for="exampleInputPassword2">Password</label>
          <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Envelope Number">
        </div>
        <button type="button" class="btn btn-primary">Submit</button>
      </form>

<br>


      <div class="table-responsive">
        <table class="table">

          <tr>
            <th>Envelope Number</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Address</th>
            <th>Postcode</th>
            <th>Gift Aid</th>
            <th>Options</th>
          </tr>
          <tr>
            <td>76</td>
            <td>Timothy</td>
            <td>Curwen</td>
            <td>11 Caroline Close, Keynsham, Bristol</td>
            <td>BS31 2LF</td>
            <td>Yes</td>
            <td>
            <button type="button" class="btn btn-warning">Edit</button>
            <button type="button" class="btn btn-danger">Delete</button>
            </td>

          </tr>
          <tr>
            <td>35</td>
            <td>David</td>
            <td>Cramb</td>
            <td>5 Drake Close, Saltford, Bristol</td>
            <td>BS31 3LW</td>
            <td>Yes</td>
            <td>
              <button type="button" class="btn btn-warning">Edit</button>
              <button type="button" class="btn btn-danger">Delete</button>
            </td>
          </tr>
          <tr>
            <td>16</td>
            <td>Annabella</td>
            <td>Grant</td>
            <td>2 Victoria Road, Saltford, Bristol</td>
            <td>BS31 3HL</td>
            <td>No</td>
            <td>
              <button type="button" class="btn btn-warning">Edit</button>
              <button type="button" class="btn btn-danger">Delete</button>
            </td>
          </tr>
          <tr>
            <td>11</td>
            <td>Thomas</td>
            <td>Stonehouse</td>
            <td>23 Manor Road, Saltford, Bristol</td>
            <td>BS31 2JU</td>
            <td>No</td>
            <td>
              <button type="button" class="btn btn-warning">Edit</button>
              <button type="button" class="btn btn-danger">Delete</button>
            </td>
          </tr>
          <tr>
            <td>53</td>
            <td>Daphne</td>
            <td>Dawes</td>
            <td>344 Bath Road, Saltford, Bristol</td>
            <td>BS31 1WR</td>
            <td>Yes</td>
            <td>
              <button type="button" class="btn btn-warning">Edit</button>
              <button type="button" class="btn btn-danger">Delete</button>
            </td>
          </tr>


        </table>
      </div>



      </div>


    </div>








    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  </body>
</html>
