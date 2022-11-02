<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
    <?php
                include "conn.php";
                $no = 1;
                $query = mysqli_query($conn, 'SELECT * FROM tbproduk');
                while ($data = mysqli_fetch_array($query)) {
                ?>
                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $data['productName'] ?></td>
                    <td><?php echo $data['productImage'] ?></td>
                    <td><?php echo $data['productPrice'] ?></td>
                    <td style="text-align: center;"><a href='formeditmember.php?id="<?php echo $data['id']?>"'><span class="yellow">Edit</span></a> | <a href='deletemember.php?id="<?php echo $data['id']?>"'><span class="red">Delete</span></a></td>
                </tr>
                <?php } ?>
    </table>
</body>
</html>