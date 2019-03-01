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
                   
     <br><br>
    <div class="sale-statistic-area">
   
    <?php 
include "aside.php";
    ?>
      <hr>
    </div>
    <div class="col-sm-8" style="background-color:white;">
       <div class="sale-statistic-inner notika-shadow mg-tb-30">
<br><br><br><br><br><br><br><br>
<div class="row">
<?php
 
        $sql = "select * from user";
      $sql=mysqli_query($link,$sql);
      while ($row=mysqli_fetch_array($sql)) {
      
                            ?>
   
    <div class="col-sm-2">

                                 <?php echo '
                     <span>  <img class="img-responsive img-circle" id="img"src="data:image/jpeg;base64,'.base64_encode($row['photo']).'"/></span>
                      ';
                    ?>
                     <small sytyle="margin-left:4px">Name:<?php echo $row['name'];?></small><br>
                      <small>      <?php echo $row['last_name'];?></small>
                             
   

    </div>
  
  <?php
}
  ?>
        </div>      <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br> <br><br><br> <br><br>            
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