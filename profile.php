<html>
    <?php
    session_start();
if(!isset($_SESSION['login'])){
  header("location:login.php?error");
}
?>


<head>

   <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Compose Email | Notika - Notika Admin Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
        ============================================ -->
   
</head>  
<?php
include "head.php";

include "link.php";
?>
<body>
<?php
include "top header.php";
?>

<style type="text/css">
#img{
  height: 50px;
  width: 50px;
}

</style>



    <div class="sale-statistic-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-8 col-sm-7 col-xs-9">
                    <div class="sale-statistic-inner notika-shadow mg-tb-30">
 

   <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
      
     <?php
$id = $_GET['ID'];
     $sql = "select * from user where id=$id";
        $result = mysqli_query($link,$sql)or die("not working");
        while ($row=$result->fetch_assoc()) {
            echo ' <div class="row">';
            echo '   <div class="col-lg-4 col-xlg-3 col-md-5">';
           echo '<div class="card">';
            echo '<div class="card-body">';
             echo '<center class="m-t-30"> '; 
         //  echo $row['name'];
            echo '<img src="data:image/photo;base64,'.base64_encode($row['photo']).'"height="150" width="150"  />';
            echo '<div class="row text-center justify-content-md-center">';
            echo ' </div>';
            echo'</center>';
            echo '<div>';
            echo '<hr>';
            echo '</div>';
            echo ' <div class="card-body">';
            echo '<small class="text-muted">Name </small>';
            echo ' <h6>'.$row['name'].'</h6>';
            echo '<small class="text-muted">Laet name </small>';
            echo ' <h6>'.$row['last_name'].'</h6>';
             echo '<small class="text-muted">Email </small>';
            echo ' <h6>'.$row['email'].'</h6>';
            echo '</div>';
            echo '</div>'; 


           
        }
?>   
             </div>

         </div>

               <div class="col-lg-8 col-xlg-9 col-md-7" style="border: solid #c3c3c3 1px; border-right:0px; border-bottom: 0px; border-top: 0px; width: 500px;height: 600px">

        
                        <?php 
                        $id=$_GET['ID'];
                            $sql ="select title,description from question  where u_id=$id";
                            $result= mysqli_query($link,$sql)or die("not workisn query");
                            while ($row = $result->fetch_assoc()) {
                                echo '<h2>Qustion</h2>';
                                echo '<hr>';

                                echo'<h3 style ="color:blue">'. $row["title"];echo '</h3>';
                               // echo '<hr>';
                                echo $row['description'];
                                echo '<hr>';

                            }

                            $ansql="select * from answer where u_id=$id";
                            $anresult = mysqli_query($link, $ansql)or die("not working");
                            echo '<h3 style ="color:#c30f00">Answers</h3>';
                            echo '<hr>';
                               while ($row = $anresult->fetch_assoc()) {
                               // echo'<hr>';
                                   echo $row["discription"];
                                 
                                 
                               }
                        ?>
                    </div>
               <br><br><br><br>     
                    </div>
                </div>
            </div>
        </div>
    </div>

               
    <!-- End Realtime sts area-->
    <!-- Start Footer area-->

</body>

</html>