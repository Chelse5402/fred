<?php

include('includes/dbconnection.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parking Sections</title>
    <link rel="stylesheet" href="">
</head>
<style>
    .container {
    width: 300px;
    margin: 50px auto;
    text-align: center;
}

h1 {
    margin-bottom: 20px;
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropbtn {
    background-color: #4CAF50;
    color: white;
    padding: 10px;
    font-size: 16px;
    border: none;
    cursor: pointer;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {
    background-color: #f1f1f1;
}

.dropdown:hover .dropdown-content {
    display: block;
}

</style>
<body>
    <div class="container">
        <h1>Parking Sections</h1>
        <div class="dropdown">
            <button class="dropbtn">Select Section</button>
            <div class="dropdown-content">
                <?php
                include('includes/dbconnection.php');
                $query = mysqli_query($con, "SELECT * FROM tblsection");
                while ($row = mysqli_fetch_assoc($query)) {
                    $sectionName = $row['SectionName'];
                    echo "<a href='section.php?sectionname=$sectionName'>$sectionName</a>";
                }
                ?>
            </div>
        </div>
    </div>
</body>

</html>

<?php include_once('includes/footer.php'); ?>
