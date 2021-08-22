<!DOCTYPE html>
<html lang="en">
<head>
    <title>Transaction History</title>
    <?php include "links.php"; ?>
    <link rel="stylesheet" type="view-all-users.css">
</head>
<body>
    	<div class="main-div">
            <h1 class="h1">Transaction History</h1>
            <div class="center-div">
                <div class="table-responsive">
                    <table class="table">
                        <thead class="thead">
                            <tr class="tr">
                                <th class="th">S No</th>
                                <th class="th">Sender</th>
                                <th class="th">Receiver</th>
                                <th class="th">Amount</th>
                                <th class="th">Date & Time</th>
                            </tr>
                        </thead>
                        <tbody class="tbody">
                            <?php
                            include "configration.php";
                            $selectquery ="select * from transaction";
                            $query =mysqli_query($conn, $selectquery);
                            $nums = mysqli_num_rows($query);
                            while($res = mysqli_fetch_array($query)){
                                ?>
                                <tr class="tr">
                                    <td class="td"><?php echo $rows["sno"]; ?></td>
                                    <td class="td"><?php echo $rows["sender"]; ?></td>
                                    <td class="td"><?php echo $rows["receiver"]; ?></td>
                                    <td class="td"><?php echo $rows["balance"]; ?> </td>
                                    <td class="td"><?php echo $rows["datetime"]; ?> </td>
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