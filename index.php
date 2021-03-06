<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Postcode Finder</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 center">
                <h1 class="center whiteText">Postcode Finder</h1>
                <p class="lead center whiteText">Enter Any Address To Find the Postcode</p>
                
                <form>
                    <div class="form-group">
                        <input type="text" class="form-control" name="address" id="address" placeholder="E.g 63 Fake Street, Fake Town" />
                    </div>
                    
                    <button id="findMyPostcode" class="btn btn-success btn-lg">Find My Postcode</button>
                </form>
                
                <div id="success" class="alert alert-success">Demo Text</div>
                <div id="fail" class="alert alert-danger">Could not find postcode for that address. Please try again. If you continue to face a problem, please contact us using the form available <a href="www.srachit.com/#contact">here.</a></div>                
                <div id="fail2" class="alert alert-danger">Could not connect to server, please try again later.</div>                       
            </div>
        </div>
    </div>
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
</body>

</html>