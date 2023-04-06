<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>System Management</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body>
    <section class="system">
        <header>
            <nav>
                <div class="navigationbar">
                        <!-- <li><a href="insert.php" target="_blank">Insert</a></li> -->
                        <li><a href="modify.php" target="_blank" >Modify</a></li>
                        <li><a href="users.php" target="_blank">Users</a></li>
            
                </div>
            </nav>
        </header>
        <div class="insert">
            <form action="insert.php" method="post" >
                <h3>Hospital Table</h3>
                <!-- <input type="file" name="hIcon"  accept=""> -->
                <input type="text" name="hname" placeholder="Hospital Name">
                <input type="text" name="illness" placeholder="Treatment">
                <input type="number" name="tprice" placeholder="Treatment price">
                <input type="number" name="hlvl" placeholder="Hospital level">
                <input type="submit" name="submit" value="Insert" id="insert">
            </form>
        </div>
        <div class="insert">
            <form action="inserti.php" method="post" >
                <h3>Insurance Table</h3>
                <!-- <input type="file" name="hIcon"  accept=""> -->
                <input type="text" name="iname" placeholder="Insurance Name">
                <input type="text" name="illness" placeholder="Treatment">
                <input type="text" name="hname" placeholder="Hospital Name">
                <input type="text" name="package" placeholder="Package Type">
                <input type="number" name="coverage" placeholder="Percentage coverage">
                <input type="submit" name="submit" value="Insert" id="insert">
            </form>
        </div>
    </section>
</body>
</html>