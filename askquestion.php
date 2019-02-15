      <?php
include "link.php";

session_start();
if(!isset($_SESSION['login'])){
  header("location:login.php?error");
}
 ?>

<?php
include "head.php";
?>
<body>
<?php
include "top header.php";
?>
    <!-- Main Menu area End-->
    <!-- Start Status area -->
    
    <!-- End Status area-->
    <!-- Start Sale Statistic area-->

    <div class="sale-statistic-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-8 col-sm-7 col-xs-9">
                    <div class="sale-statistic-inner notika-shadow mg-tb-30">
 
      <div class="col-lg-10 col-md-8 col-sm-5 col-xs-11">
                    <div class="view-mail-list sm-res-mg-t-30">
                        <div class="view-mail-hd">
                            <div class="view-mail-hrd">
                                <h2>Ask question</h2>
                            </div>
                        </div>



                          <?php
if(isset($_POST['post'])){
$subject=$_POST['subject'];
$discription=$_POST['discription'];
$photo=addslashes(file_get_contents($_FILES["image"]["tmp_name"])); 
$query="insert into home_tb(subject,discription,photo) values ('$subject','$discription','$photo')";
if(mysqli_query($link,$query)){
echo "<script> alert('the data has been posted'); </script>";
}
else{

  echo "<script> alert('Faildddd'); </script>";
}
}

 ?>
 <?php
if(isset($_POST['save'])){
$cat_id=$_POST['cat_id'];
$user=$_SESSION['login'];
$title= $_POST['title'];
$discription = $_POST['description'];
$sql="INSERT INTO `question`( `description`, `u_id`, `cat_id`, `title`) VALUES('$discription',$user,$cat_id,'$title')";

if(mysqli_query($link,$sql)){
echo "<script> alert('the data has been posted'); </script>";
}
else{

  echo "<script> alert('Faildddd'); </script>";
}
}
 ?>

                       <form method="post" action="askquestion.php">
                        <div class="cmp-int mg-t-20">
                            <div class="row">
                                <div class="col-lg-1 col-md-2 col-sm-2 col-xs-12">
                                    <div class="cmp-int-lb cmp-int-lb1 text-right">
                                        <span>subject: </span>
                                    </div>
                                </div>
                                <div class="col-lg-11 col-md-10 col-sm-10 col-xs-12">
                                    <div class="form-group">
                                        <div class="nk-int-st cmp-int-in cmp-email-over">
 
                                            <input type="text" name="title" class="form-control" id="subject"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                       
                        <div class="cmp-int-box mg-t-20">
                            <textarea class="html-editor-cm" id="message" name="description" cols="30" rows="10" class="form-control" placeholder="Write Your Question?" ></textarea>
                            <!-- <input type="submit"  name="save" value="Save"> -->
                      <input type="hidden" value="<?php echo $_GET['ID']?>" name="cat_id">
                            <button type="submit" class="btn btn-success notika-btn-success" name="save">Save</button>
                        </div>
                      
                        <div class="vw-ml-action-ls text-right mg-t-20">
                           

                        </div>
                        <center>
                    
                       
                   </form>
                    </div>
                </div>
                
                    </div>
                </div>
            </div>
        </div>
    </div>

               <br><br><br><br><br><br><br><br><br><br>
    <!-- End Realtime sts area-->
    <!-- Start Footer area-->
<!-- End Footer area-->
    <!-- jquery
        ============================================ -->
 
<?php
include "footer.php";
?>
 </body>

</html>