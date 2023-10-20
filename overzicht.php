<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>registratie overzicht</h1>
<table class="table table-dark table-hover">
    <tr>
        <th>mensID</th>
        <th>email</th>
        <th>wachtwoord</th>
        <th>Action</th>
    </tr>

    <tr> <?php
    foreach ($resultaat as $row) {
     echo "<td>" . $row ['mensID'] . "</td>";
     echo "<td>" . $row ['email'] . "</td>";
     echo "<td>" . $row ['password'] . "</td>";

         ?>
         
         <td> <a href="update.php?mensID=<?php echo $row['mensID'];?>">Update</a></td>

    </tr>
   <?php } ?>
   </table>
</body>
</html>