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
                        <p style="margin-left:25px;"><?php echo $row['description']; ?>?</p></div>
                        <hr>
                        <DIV>

<p style="font-style:italic;font-weight: bold;text-indent: inherit;text-align: justify">answer</p>
<br>
<?php
if(isset($_POST['answer'])){
$discription=$_POST['content'];
$u_id=$_SESSION['login'];
$qu_id=$_POST['qu_id'];
$catSql="SELECT cat_id FROM `question` WHERE id='$qu_id'";
$result=mysqli_query($link,$catSql);
$row=mysqli_fetch_assoc($result);
$cat_id=$row['cat_id'];
$insersql="INSERT INTO `answer`(`discription`, `cat_id`, `qu_id`, `u_id`,date) VALUES('$discription',$cat_id,$qu_id,$u_id,CURRENT_DATE)";
mysqli_query($link,$insersql);


}
    if(isset($_GET['ID'])){
        $id = $_GET['ID'];
        }
?>



                            
                            <?php
                            if(isset($_GET['ID'])){
                                $id = $_GET['ID'];
}

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
                        <form method="post" action="answer.php?ID=<?php echo $id;?>">
      <div class="cmp-int-box mg-t-15">
                            <textarea class="html-editor-cm"  name="content" id="message"></textarea>
                            
                            <input type="hidden" name="qu_id" value="<?php echo $_GET['ID'];?>">
                        </div>


                                                        <div class="btn-group pull-right">




                                                        <?php if(!$_SESSION["login"]) { 

                                                        header("location:login.php?session=null");
                                                    }?>


                                                    
                                                        <a href="answer.php?ID=<?php echo $id;?>"><button class="btn btn-sm btn-purple" type="submit" name="answer" >
                                                            <i class="ace-icon fa fa-floppy-o bigger-125"></i>
                                                            post
                                                        </button></a>
              </form>
             
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