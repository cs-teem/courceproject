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
       
    <?php
include "aside.php";

if(isset($_POST['post'])){
$name=mysql_real_escape_string($_POST['name']);
$lastname=mysql_real_escape_string($_POST['lastname']);
$email=mysql_real_escape_string($_POST['email']);
$password=mysql_real_escape_string($_POST['password']);
$enc_password=md5($password);
$photo=addslashes(file_get_contents($_FILES["photo"]["tmp_name"])); 

if($name && $email && $password){
	$confirm_code=rand();
	
$query="insert into user(name,last_name,email,password,photo,confirm_code) values ('$name','$lastname','$email','$enc_password','$photo','$confirm_code')";
mysqli_query($link,$query);

$headers = 'From: esmatullahsangary@gmail.com' . "\r\n" .
    'Reply-To: webmaster@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
	
$message="
Confirm your Email
Click the Link Bello to confirm your Email
http://localhost/courceproject/ConfirmEmail.php?username=$name & code=$confirm_code"
;
mail($email,"Verifry your email",$message,$headers);
echo "Registeration completed";



}
}
 ?>
 </div>
    <div class="col-sm-8" style="background-color:white;">
       <div class="sale-statistic-inner notika-shadow mg-tb-30">
 
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