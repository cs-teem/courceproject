    <?php
    session_start();
if(!isset($_SESSION['login'])){
  header("location:login.php?error");
}

 include "link.php";
 ?> 
<?php
include "head.php";
?>
<body>
<?php
include "top header.php";
?>


<?php

if(isset($_POST['save'])){
$title= $_POST['title'];
$discription = $_POST['description'];
$sql="INSERT INTO `category`( `category`, `discription`) VALUES ('$title','$discription')";

if(mysqli_query($link,$sql)){
echo "added";
}
else{

  echo "this is an error";
}
}
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
                                <h2>add a new category</h2>
                            </div>
                        </div>



                       <form method="post" action="add_category.php">
                        <div class="cmp-int mg-t-20">
                            <div class="row">
                                <div class="col-lg-1 col-md-2 col-sm-2 col-xs-12">
                                    <div class="cmp-int-lb cmp-int-lb1 text-right">
                                        <span>Title: </span>
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
                       <p>Discription</p>
                        <div class="cmp-int-box mg-t-20">
                            <textarea class="html-editor-cm" id="message" name="description" cols="30" rows="5" class="form-control" ></textarea>
                            <!-- <input type="submit"  name="save" value="Save"> -->
                      
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