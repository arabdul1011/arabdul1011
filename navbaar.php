<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="navbarstyle.css">
    <title>navbar</title>
</head>
<body>
<nav class="navbar">
        <img src="logo-design1.jpg" alt="alternate text">
        <div class="navbaritems">
            <a href="iindex.php">Home</a>
            <a href="create-user-account.php">Create Account</a>
            <div class="dropdown">
                <a href="#">Transactions</a>
                <div class="dropdown-content">
                    <a href="view-all-users.php">View All Customers</a>
                    <a href="#">Transfer Money</a>
                    <a href="#">Transaction Hostory</a>
                </div>
            </div>
        </div>
    </nav>    
</body>
</html>