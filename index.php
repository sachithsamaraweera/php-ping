<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Hello, world!</title>
</head>

<body>
    <div class="container">
        <h3 class="text-center text-success pb-4">PHP Web-Pinging</h3>
        <div class="row">

 
            <div class="col" id="test">
                <form action="" method="POST">

                    <div class="form-group">
                        <label for="exampleInputPassword1">Ip Address</label>
                        <input name="ip" type="text" class="form-control" id="exampleInputPassword1" placeholder="8.8.8.8 / example.com">
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary">Check</button>
                </form>

                <?php
                

                if(isset($_POST['submit'])){
                    $ip = $_POST['ip'];
                    echo "<br><br>";

                    echo "<pre>";
                    echo shell_exec("ping -n 2 ".$ip);
                    echo "</pre>";

                    exec("ping -n 1 $ip",$output,$return);

                    if($return==0){
                        echo "<h4 class='text-success'>The end host is online</h4>";
                    }
                    else{
                        echo "<h4 class='text-danger'>The end host is offline</h4>";
                    }

                    

                }
                
                ?>
            </div>
    

        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>