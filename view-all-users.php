<!DOCTYPE html>
<html lang="en">
<head>
  <title>View All User</title>
  <?php include "links.php"; ?>
  <link rel="stylesheet" href="view-all-users.css">
</head>
<body>
    <div class="main-div">
        <h1 class="h1">All Users List</h1>
        <div class="center-div">
        <div class="table-responsive">
        <table class="table">
            <thead class="thead">
                <tr class="tr">
                    <th class="th">Id</th>
                    <th class="th">Name</th>
                    <th class="th">Email</th>
                    <th class="th">Balance</th>
                    <th class="th" colspan="3">Operation</th>
                </tr>
            </thead>
            <tbody class="tbody">
<?php
include "configration.php";
 $selectquery = "select * from users";
 $query = mysqli_query($conn, $selectquery);
 $nums = mysqli_num_rows($query);
 while($res = mysqli_fetch_array($query)){
?>
     <tr class="tr">
                <td class="td"><?php echo $res["id"]; ?></td>
                <td class="td"><?php echo $res["name"]; ?></td>
                <td class="td"><?php echo $res["email"]; ?></td>
                <td class="td"><?php echo $res["balance"]; ?></td>
                <td class="td">
                    <a href="Transfer-money.php">
                        <i class="fa fa-credit-card" aria-hidden="true"></i>
                    </a>
                </td>
     </tr>
     <?php
 }
        ?>
            </tbody>
        </table>
        </div>
        </div>
    </div>
</body>
</html>