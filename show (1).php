<html>
<head>
title>ITF Lab</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<?php
$conn = mysqli_init();
mysqli_real_connect($conn, 'itflab055.mysql.database.azure.com', 'itflab01@itflab055', '63070055Earth', 'itflab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}
$res = mysqli_query($conn, 'SELECT * FROM guestbook');
?>
<div class="contanier">
    <table width="600" border="1">
    <tr>
        <th width="100"> <div align="center">Name</div></th>
        <th width="350"> <div align="center">Comment </div></th>
        <th width="179"> <div align="center">Action</div></th>
    </tr>
    <?php
    while($Result = mysqli_fetch_array($res))
    {
    ?>
    <tr>
        <td><?php echo $Result['Name'];?></div></td>
        <td><?php echo $Result['Comment'];?></td>
        <td><button type="button" class="btn btn-primary">Primary</button>
        <button type="button" class="btn btn-danger">Danger</button></td>
    </tr>
    <?php
    }
    ?>
    </table>
    <td><button type="button" class="btn btn-info">In</button></td>
</div>
<?php
mysqli_close($conn);
?>
</body>
</html>
