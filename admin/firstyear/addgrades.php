<?php 
    include "../../connection/db-connect.php";
    if(isset($_POST['myanmar'])){
        $rollno = $_POST['rollno'];
        //  $name = $_POST['name'];
        $myanmar = $_POST['myanmarmark'];
         $totalsql= "SELECT total FROM fgrades WHERE rollno='".$rollno."'";
         $totalresult = mysqli_query($conn,$totalsql);

        $total = mysqli_fetch_array($totalresult);
        $total['total']+=$myanmar;

         $sql = "UPDATE fgrades SET myanmar= '".$myanmar."', total='".$total['total']."' WHERE rollno = '".$rollno."' ";
         $result = mysqli_query($conn,$sql);
         var_dump($result);
        header('location:addfirstyeargrade.php?subject=myanmar');
    }elseif(isset($_POST['english'])){
        $rollno = $_POST['rollno'];
        //  $name = $_POST['name'];
         $english = $_POST['englishmark'];
         $totalsql= "SELECT total FROM fgrades WHERE rollno='".$rollno."'";
         $totalresult = mysqli_query($conn,$totalsql);

        $total = mysqli_fetch_array($totalresult);
        $total['total']+=$english;


         $sql = "UPDATE fgrades SET english= '".$english."',total = '".$total['total']."' WHERE rollno = '".$rollno."' ";
         $result = mysqli_query($conn,$sql);
        //  header('location:addfirstyeargrade.php?subject=english');

    }elseif(isset($_POST['physics'])){
        $rollno = $_POST['rollno'];
        //  $name = $_POST['name'];
         $physics = $_POST['physicsmark'];
         $totalsql= "SELECT total FROM fgrades WHERE rollno='".$rollno."'";
         $totalresult = mysqli_query($conn,$totalsql);

        $total = mysqli_fetch_array($totalresult);
        $total['total']+=$physics;

         $sql = "UPDATE fgrades SET physics= '".$physics."', total='".$total['total']."' WHERE rollno = '".$rollno."' ";
         $result = mysqli_query($conn,$sql);
         header('location:addfirstyeargrade.php?subject=physics');
    }elseif(isset($_POST['cst101'])){
        echo $rollno = $_POST['rollno'];
        //  echo $name = $_POST['name'];
         echo $mark = $_POST['cst101mark'];
         $totalsql= "SELECT total FROM fgrades WHERE rollno='".$rollno."'";
         $totalresult = mysqli_query($conn,$totalsql);

        $total = mysqli_fetch_array($totalresult);
        $total['total']+=$mark;

         $sql = "UPDATE fgrades SET cst101= '".$mark."', total='".$total['total']."' WHERE rollno = '".$rollno."' ";
         $result = mysqli_query($conn,$sql);
         header('location:addfirstyeargrade.php?subject=cst101');
    }elseif(isset($_POST['cst102'])){
        echo $rollno = $_POST['rollno'];
        //  echo $name = $_POST['name'];
         echo $mark = $_POST['cst102mark'];
         $totalsql= "SELECT total FROM fgrades WHERE rollno='".$rollno."'";
         $totalresult = mysqli_query($conn,$totalsql);

        $total = mysqli_fetch_array($totalresult);
        $total['total']+=$mark;

         $sql = "UPDATE fgrades SET cst102= '".$mark."', total='".$total['total']."' WHERE rollno = '".$rollno."' ";
         $result = mysqli_query($conn,$sql);
         header('location:addfirstyeargrade.php?subject=cst101');
    }elseif(isset($_POST['cst103'])){
        echo $rollno = $_POST['rollno'];
        //  echo $name = $_POST['name'];
         echo $mark = $_POST['cst103mark'];

         $totalsql= "SELECT total FROM fgrades WHERE rollno='".$rollno."'";
         $totalresult = mysqli_query($conn,$totalsql);

        $total = mysqli_fetch_array($totalresult);
        $total['total']+=$mark;

         $sql = "UPDATE fgrades SET cst103= '".$mark."', total = '".$total['total']."' WHERE rollno = '".$rollno."' ";
         $result = mysqli_query($conn,$sql);
         header('location:addfirstyeargrade.php?subject=cst101');
    }elseif(isset($_POST['cst104'])){
        echo $rollno = $_POST['rollno'];
        //  echo $name = $_POST['name'];
         echo $mark = $_POST['cst104mark'];

         $totalsql= "SELECT total FROM fgrades WHERE rollno='".$rollno."'";
         $totalresult = mysqli_query($conn,$totalsql);

        $total = mysqli_fetch_array($totalresult);
        $total['total']+=$mark;

         $sql = "UPDATE fgrades SET cst104= '".$mark."', total='".$total['total']."' WHERE rollno = '".$rollno."' ";
         $result = mysqli_query($conn,$sql);
         header('location:addfirstyeargrade.php?subject=cst101');
    }

?>