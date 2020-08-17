<?php

    include "../../connection/db-connect.php";

    if(isset($_POST['english'])){
       $rollno = $_POST['rollno'];
       $english = $_POST['englishmark'];
       
       $totalsql = "SELECT total FROM secondyearctgrades WHERE rollno='".$rollno."'";
       $totalresult = mysqli_query($conn,$totalsql);
        $total = mysqli_fetch_array($totalresult);

        $total['total']+=$english;
        $sql = "UPDATE secondyearctgrades SET english='".$english."', total='".$total['total']."' WHERE rollno='".$rollno."'";
        $result = mysqli_query($conn,$sql);

        // var_dump($result);

        header('location:addsecondyearctgrade.php?subject=english');

    }elseif(isset($_POST['ct201'])){
        
        $rollno = $_POST['rollno'];
        $ct201 = $_POST['ct201mark'];
        $totalsql = "SELECT total FROM secondyearctgrades WHERE rollno='".$rollno."'";
       $totalresult = mysqli_query($conn,$totalsql);
        $total = mysqli_fetch_array($totalresult);

        $total['total']+=$ct201;

        $sql = "UPDATE secondyearctgrades SET ct201='".$ct201."', total='".$total['total']."' WHERE rollno='".$rollno."'";
        $result = mysqli_query($conn,$sql);





        header('location:addsecondyearctgrade.php?subject=ct201');
       
      

    }
    elseif(isset($_POST['ct202'])){
        $rollno = $_POST['rollno'];
        $ct202 = $_POST['ct202mark'];
        $totalsql = "SELECT total FROM secondyearctgrades WHERE rollno='".$rollno."'";
        $totalresult = mysqli_query($conn,$totalsql);
         $total = mysqli_fetch_array($totalresult);
 
         $total['total']+=$ct202;
 
         $sql = "UPDATE secondyearctgrades SET ct202='".$ct202."', total='".$total['total']."' WHERE rollno='".$rollno."'";
         $result = mysqli_query($conn,$sql);

         header('location:addsecondyearctgrade.php?subject=ct202');

    }elseif(isset($_POST['ct203'])){
        $rollno = $_POST['rollno'];
        $ct203 = $_POST['ct203mark'];
        $totalsql = "SELECT total FROM secondyearctgrades WHERE rollno='".$rollno."'";
        $totalresult = mysqli_query($conn,$totalsql);
         $total = mysqli_fetch_array($totalresult);
 
         $total['total']+=$ct203;
 
         $sql = "UPDATE secondyearctgrades SET ct203='".$ct203."', total='".$total['total']."' WHERE rollno='".$rollno."'";
         $result = mysqli_query($conn,$sql);

         header('location:addsecondyearctgrade.php?subject=ct203');

    }elseif(isset($_POST['ct204'])){
        $rollno = $_POST['rollno'];
        $ct204 = $_POST['ct204mark'];
        $totalsql = "SELECT total FROM secondyearctgrades WHERE rollno='".$rollno."'";
        $totalresult = mysqli_query($conn,$totalsql);
         $total = mysqli_fetch_array($totalresult);
 
         $total['total']+=$ct204;
 
         $sql = "UPDATE secondyearctgrades SET ct204='".$ct204."', total='".$total['total']."' WHERE rollno='".$rollno."'";
         $result = mysqli_query($conn,$sql);

         header('location:addsecondyearctgrade.php?subject=ct204');

    }


?>