<html>


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
    <!-- Main Menu area End-->
    <!-- Start Status area -->
    
    <!-- End Status area-->
    <!-- Start Sale Statistic area-->

    <div class="sale-statistic-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-8 col-sm-7 col-xs-9">
                    <div class="sale-statistic-inner notika-shadow mg-tb-30">
 
      
                        <?php
        if(isset($_GET['ID'])){
        $id = $_GET['ID'];


        $sql = "select * from question where id = $id";
        $query = mysqli_query($link,$sql);
        $row = mysqli_fetch_assoc($query);
     }
     ?><P style="font-style:italic;font-weight: bold;text-indent: inherit;text-align: justify">question</P>
                        <div  class="jumbotron" style="background-color:lavenderblush">
                        <p style="margin-left:25px;font-family: &quot;Times New Roman&quot;;line-hight:0.2"><?php echo $row['description']; ?>?</p></div>
                        <hr>
                        <DIV>

<p style="font-style:italic;font-weight: bold;text-indent: inherit;text-align: justify">answer</p>
<br>

<?php

        $sql = "select answer.discription,u.name,u.email,u.photo,answer.date FROM user u,answer WHERE u.id= answer.u_id and qu_id=$id";
      $sql=mysqli_query($link,$sql);
      while ($row=mysqli_fetch_array($sql)) {
      
                            ?>

                            <style type="text/css">
                            .all{
text-align:
                            }
                        </style>                            
                        <table style="margin-left:3px">
                            <tr>
                                 <?php echo '
                     <span>  <img class="img-responsive img-circle" id="img"src="data:image/jpeg;base64,'.base64_encode($row['photo']).'"/></span>
                      ';
                    ?>
                                <span sytyle="margin-left:4px"><small>Name:</small><?php echo $row['name'];?></span><br>
                                <td ><small>Email:</small><?php echo $row['email'];?></td>
                                <small>date:<?php echo $row['date']?></small>
                            </tr>
                        </table>
                             <div class="jumbotron">
                                
                            <span><?php echo $row['discription'];?></span>
                            
                            </div>

                            

<hr>
<?php
}
?>
                        </DIV>
<div style="float:right">
<a  href="answerquestion.php?ID=<?php  echo $id;?>"type="submit" name="submit" class="btn btn-success notika-btn-success">  answer the question </a>
    <!-- Main Menu area End-->
</div>






             
               <br><br><br><br> 







                    </div>
                </div>
            </div>
        </div>
    </div>

               
    <!-- End Realtime sts area-->
    <!-- Start Footer area-->
<?php

include "footer.php";
?>

</body>

</html>