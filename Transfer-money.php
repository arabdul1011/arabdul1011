<?php
include "configration.php";
 $select =   "SELECT * FROM `users`";
$retrive = mysqli_query($conn, "SELECT * FROM transaction");
$option = mysqli_query($conn, "SELECT * FROM users");
 $message    =   '';
if(isset($_POST['submit']))
{
    $from      =  $_POST['id'];
    $to    =  $_POST['to'];
    $amount      =  $_POST['balance'];

    $select = "SELECT * from users where id=$from";
    $query = mysqli_query($conn,$select);
    $sql1 = mysqli_fetch_array($query); // returns array or output of user from which the amount is to be transferred.

    $select = "SELECT * from users where id=$to";
    $query = mysqli_query($conn,$select);
    $sql2 = mysqli_fetch_array($query);



     // insert data to database
    $insert = "INSERT INTO `transaction`(`sender`, `receiver`, `balance`) VALUES ('[$from'],'[$to]','[$amount]')";
    if(mysqli_query($conn, $insert))
    {
        $message =  "Records added successfully.";
    } 
    else
    {
        $message = "ERROR: Could not able to execute $insert. " . mysqli_error($conn);
    }
    // close connection
    mysqli_close($conn);
}
 ?>
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>


 </head>

<body>

  

    <div class="container-fluid h-100 bg-light text-dark">

        <div class="row justify-content-center align-items-center">

            <h1>Select Transfer Money</h1>    

        </div>

        <hr/>

        <div class="row justify-content-center align-items-center h-100">

            <div class="col col-sm-6 col-md-6 col-lg-4 col-xl-3">

                <h5 class="text-success text-center" id="message"><?=$message;?><h5>

                <form action="" method="POST">

                <div class="form-group">

                    <input type="text" class="form-control" name="name" placeholder="Select User" required>

                </div>

                <div class="form-group">

                    <select class="form-control" name="balance">

                        <option>Please select Amount</option>

                        <?php foreach($option as $key => $value){ ?>

                            <option value="<?=$value['balance'] ;?>"><?=$value['balance'] ;?></option>

                        <?php } ?>

                    </select>

                </div>

              <div class="form-group">

                <div class="container">

                  <div class="row">

                    <div class="col"><button type="submit" name="submit" class="col-6 btn btn-primary btn-sm float-left">Submit</button></div>

                    <div class="col"><button type="submit" name="reset" class="col-6 btn btn-secondary btn-sm float-right">Reset</button></div>

                  </div>

                </div>

              </div>

            </form>
           </div>

        </div>

      </div>



       <script>

        $(document).ready(function()

        {

            setTimeout(function()

            {

                $('#message').hide();

            },3000);

        });


         $(document).ready(function()

        {

            setTimeout(function()

            {

                $('#update').hide();

            },3000);

        }); 


     </script>

</body>



</html>