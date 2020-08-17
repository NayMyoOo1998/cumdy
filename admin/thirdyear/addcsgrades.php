<?php

    include "../../connection/db-connect.php";

    if(isset($_POST['english'])){
       $rollno = $_POST['rollno'];
       $english = $_POST['englishmark'];
       
       $totalsql = "SELECT total FROM thirdyearcsgrades WHERE rollno='".$rollno."'";
        $totalresult = mysqli_query($conn,$totalsql);
        $total = mysqli_fetch_array($totalresult);

        $total['total']+=$english;
        $sql = "UPDATE thirdyearcsgrades SET english='".$english."', total='".$total['total']."' WHERE rollno='".$rollno."'";
        $result = mysqli_query($conn,$sql);

        // var_dump($result);

        header('location:addthirdyearcsgrade.php?subject=english');

    }elseif(isset($_POST['cs301'])){
        
        $rollno = $_POST['rollno'];
        $cs301 = $_POST['cs301mark'];
        
        $totalsql = "SELECT total FROM thirdyearcsgrades WHERE rollno='".$rollno."'";
         $totalresult = mysqli_query($conn,$totalsql);
         $total = mysqli_fetch_array($totalresult);
 
         echo $total['total']+=$cs301;
         $sql = "UPDATE thirdyearcsgrades SET cs301='".$cs301."', total='".$total['total']."' WHERE rollno='".$rollno."'";
         $result = mysqli_query($conn,$sql);
 
         // var_dump($result);
 
         header('location:addthirdyearcsgrade.php?subject=cs301');
      

    }elseif(isset($_POST['cs302'])){
        
        $rollno = $_POST['rollno'];
        $cs302 = $_POST['cs302mark'];
        
        $totalsql = "SELECT total FROM thirdyearcsgrades WHERE rollno='".$rollno."'";
         $totalresult = mysqli_query($conn,$totalsql);
         $total = mysqli_fetch_array($totalresult);
 
         echo $total['total']+=$cs302;
         $sql = "UPDATE thirdyearcsgrades SET cs302='".$cs302."', total='".$total['total']."' WHERE rollno='".$rollno."'";
         $result = mysqli_query($conn,$sql);
 
         // var_dump($result);
 
         header('location:addthirdyearcsgrade.php?subject=cs302');

    }elseif(isset($_POST['cs303'])){
        
        $rollno = $_POST['rollno'];
        $cs303 = $_POST['cs303mark'];
        
        $totalsql = "SELECT total FROM thirdyearcsgrades WHERE rollno='".$rollno."'";
         $totalresult = mysqli_query($conn,$totalsql);
         $total = mysqli_fetch_array($totalresult);
 
         echo $total['total']+=$cs303;
         $sql = "UPDATE thirdyearcsgrades SET cs303='".$cs303."', total='".$total['total']."' WHERE rollno='".$rollno."'";
         $result = mysqli_query($conn,$sql);
 
         // var_dump($result);
 
         header('location:addthirdyearcsgrade.php?subject=cs303');

    }elseif(isset($_POST['cs304'])){
        
        $rollno = $_POST['rollno'];
        $cs304 = $_POST['cs304mark'];
        
        $totalsql = "SELECT total FROM thirdyearcsgrades WHERE rollno='".$rollno."'";
         $totalresult = mysqli_query($conn,$totalsql);
         $total = mysqli_fetch_array($totalresult);
 
         $total['total']+=$cs304;
         $sql = "UPDATE thirdyearcsgrades SET cs304='".$cs304."', total='".$total['total']."' WHERE rollno='".$rollno."'";
         $result = mysqli_query($conn,$sql);
 
         // var_dump($result);
 
         header('location:addthirdyearcsgrade.php?subject=cs304');

    }


?>