
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

      <form class="form-horizontal">
        <fieldset>

          <!-- Form Name -->
          <legend class="h2">Add Donor</legend>

          <!-- Select Basic -->
          <div class="form-group">
            <label class="col-md-4 control-label" for="title">Title</label>
            <div class="col-md-6">
              <select id="title" name="title" class="form-control">
                <option value="" disabled selected>Select your option</option>
                <option value="Mr">Mr</option>
                <option value="Ms">Ms</option>
                <option value="Miss">Miss</option>
                <option value="Mrs">Mrs</option>
                <option value="Rev">Rev (Reverend)</option>
                <option value="Dr">Dr (Doctor)</option>
              </select>
            </div>
          </div>

          <!-- Text input-->
          <div class="form-group">
            <label class="col-md-4 control-label" for="first_name">First Name</label>
            <div class="col-md-6">
              <input id="first_name" name="first_name" type="text" placeholder="Joe" class="form-control input-md" required="">

            </div>
          </div>

          <!-- Text input-->
          <div class="form-group">
            <label class="col-md-4 control-label" for="last_name">Last Name</label>
            <div class="col-md-6">
              <input id="last_name" name="last_name" type="text" placeholder="Bloggs" class="form-control input-md" required="">

            </div>
          </div>

          <!-- Textarea -->
          <div class="form-group">
            <label class="col-md-4 control-label" for="address">Full Address</label>
            <div class="col-md-4">
              <textarea class="form-control" id="address" name="address" placeholder="14 Tottenham Court Road, London" required=""></textarea>
              </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="postcode">Postcode</label>
              <div class="col-md-6">
                <input id="postcode" name="postcode" type="text" placeholder="W1T 1JY" class="form-control input-md" required="">

              </div>
            </div>

            <!-- Button -->
            <div class="form-group">
              <label class="col-md-4 control-label" for="submit"></label>
              <div class="col-md-4">
                <button id="submit" name="submit" class="btn btn-success btn-lg">Submit</button>
              </div>
            </div>

          </fieldset>
        </form>

      </div>


    </div>








    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  </body>
</html>
