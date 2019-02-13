<?php
include "head.php";
include "link.php";
?>

    <!-- Main Menu area End-->
    <!-- Start Status area -->
    <?php
include "top header.php";
    ?>
    <!-- End Status area-->
    <!-- Start Sale Statistic area-->
    <div class="sale-statistic-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-11 col-md-10 col-sm-4 col-xs-12">
                    <div class="sale-statistic-inner notika-shadow mg-tb-30">
                        
    <?php
if(isset($_POST['post'])){
$name=$_POST['name'];
$lastname=$_POST['lastname'];
$email=$_POST['email'];
$password=$_POST['password'];
$photo=addslashes(file_get_contents($_FILES["photo"]["tmp_name"])); 
$query="insert into user(name,last_name,email,password,photo) values ('$name','$lastname','$email','$password','$photo')";
if(mysqli_query($link,$query)){
echo "<script> alert('the data has been posted'); </script>";
}
else{

  echo "<script> alert('Faildddd'); </script>";
}
}
 ?>
<form class="form-horizontal form-material" method="post" action="sing up.php" enctype="multipart/form-data">
                          <center>  <div class="curved-ctn">
                                <h2>Create profile</h2>
                                <br><br>
                                <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                        <label class="hrzn-fm">Name</label>
                                    </div>
                                    <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                        <div class="nk-int-st">
                                            <input type="text" class="form-control input-sm" placeholder="Enter name" name="name">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                <br><br><br>
               <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                        <label class="hrzn-fm">Last Name</label>
                                    </div>
                                    <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                        <div class="nk-int-st">
                                            <input type="text" name="lastname" class="form-control input-sm" placeholder="Enter last name">
                                        </div>
                                    </div>
                                </div>
                            </div>
                     
                <br><br><br>
                <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                        <label class="hrzn-fm">Email Address</label>
                                    </div>
                                    <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                        <div class="nk-int-st">
                                            <input type="text" name="email" class="form-control input-sm" placeholder="Enter Email">
                                        </div>
                                    </div>
                                </div>
                            </div>
                       
                 <br><br><br>
              <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                        <label class="hrzn-fm">Password</label>
                                    </div>
                                    <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                        <div class="nk-int-st">
                                            <input type="text" name="password" class="form-control input-sm" placeholder="Enter password">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        
                 <br><br><br>
                <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                        <label class="hrzn-fm">image</label>
                                    </div>
                                    <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                        <div class="nk-int-st">
                                            <input type="file" class="form-control input-sm" name="photo">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        
                                <br><br><br>

                             <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                    <button class="btn btn-success notika-btn-success" name="post">Submit</button>
                                </div>    
                            </div>
                            </form>
                        </center>
                      
                       
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-5 col-xs-12">
                   
                </div>
            </div>
        </div>
    </div>
    <!-- End Sale Statistic area-->
    <!-- Start Email Statistic area-->
    <div class="notika-email-post-area">
        <div class="container">
            <div class="row">
                            </div>
                            </div>
                        </div>
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