<?php

    include "../../connection/db-connect.php";

    if(isset($_POST['english'])){
       $rollno = $_POST['rollno'];
       $english = $_POST['englishmark'];
       $totalsql = "SELECT total FROM secondgrades WHERE rollno ='".$rollno."'";
       $totalresult = mysqli_query($conn,$totalsql);
        $total = mysqli_fetch_array($totalresult);

        $total['total']+=$english;

        $sql = "UPDATE secondgrades SET english='".$english."', total='".$total['total']."' WHERE rollno='".$rollno."'";
        $result = mysqli_query($conn,$sql);
        header('location:addsecondyeargrade.php?subject=english');

    }elseif(isset($_POST['cs201'])){
        $rollno = $_POST['rollno'];
        $cs201 = $_POST['cs201mark'];
        $totalsql = "SELECT total FROM secondgrades WHERE rollno ='".$rollno."'";
       $totalresult = mysqli_query($conn,$totalsql);
        $total = mysqli_fetch_array($totalresult);

        $total['total']+=$cs201;
        $sql = "UPDATE secondgrades SET cs201='".$cs201."', total='".$total['total']."' WHERE rollno='".$rollno."'";
        $result = mysqli_query($conn,$sql);
        header('location:addsecondyeargrade.php?subject=cs201');

    }
    elseif(isset($_POST['cs202'])){
        $rollno = $_POST['rollno'];
        $cs202 = $_POST['cs202mark'];
        $totalsql = "SELECT total FROM secondgrades WHERE rollno ='".$rollno."'";
       $totalresult = mysqli_query($conn,$totalsql);
        $total = mysqli_fetch_array($totalresult);

        $total['total']+=$cs202;
        $sql = "UPDATE secondgrades SET cs202='".$cs202."', total='".$total['total']."' WHERE rollno='".$rollno."'";
        $result = mysqli_query($conn,$sql);
        header('location:addsecondyeargrade.php?subject=cs202');

    }elseif(isset($_POST['cs203'])){
        $rollno = $_POST['rollno'];
        $cs203 = $_POST['cs203mark'];
        $totalsql = "SELECT total FROM secondgrades WHERE rollno ='".$rollno."'";
       $totalresult = mysqli_query($conn,$totalsql);
        $total = mysqli_fetch_array($totalresult);

        $total['total']+=$cs203;

        $sql = "UPDATE secondgrades SET cs203='".$cs203."', total='".$total['total']."' WHERE rollno='".$rollno."'";
        $result = mysqli_query($conn,$sql);
        header('location:addsecondyeargrade.php?subject=cs203');

    }elseif(isset($_POST['cs204'])){
        $rollno = $_POST['rollno'];
        $cs204 = $_POST['cs204mark'];
        $totalsql = "SELECT total FROM secondgrades WHERE rollno ='".$rollno."'";
       $totalresult = mysqli_query($conn,$totalsql);
        $total = mysqli_fetch_array($totalresult);

        $total['total']+=$cs204;
        $sql = "UPDATE secondgrades SET cs204='".$cs204."', total = '".$total['total']."' WHERE rollno='".$rollno."'";
        $result = mysqli_query($conn,$sql);
        header('location:addsecondyeargrade.php?subject=cs204');

    }


?>