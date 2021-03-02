<?php
    while($row = mysqli_fetch_array($data["SinhVien"])) {
        echo $row["id"]. " - " .$row["hoten"] . " - " . $row["namsinh"] . " - " .$row["diachi"] . "<br/>";
    }
?>