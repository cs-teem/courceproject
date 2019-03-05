<?php
include "head.php";
include "link.php";
?>
<style type="text/css">
#img{
  height: 50px;
  width: 50px;
}
#image{
  height: 100px;
  width: 100px;
}
</style>
<body>
<?php
include "top header.php";

?>
    <!-- Main Menu area End-->
    <!-- Start Status area -->
    
    <!-- End Status area-->
    <!-- Start Sale Statistic area-->

  
     </style>
     <br><br>
         <div class=""><a class="btn btn-success notika-btn-success"href="select_category.php" style="margin-left: 85%">Ask Question</a></div>
  
    <div class="sale-statistic-area" >
        
   <?php
include "aside.php";

   ?>

   
    <br><br><br><br><br><br><br><br><br><br>
    <hr>
    </div>
    <div class="col-sm-8" style="background-color:white;">
       <div class="sale-statistic-inner notika-shadow mg-tb-30">
        <?php

        $sql = "select t.discription,t.image,u.name,t.title,u.photo,t.date FROM user u,technology t WHERE u.id= t.user_id";
      $sql=mysqli_query($link,$sql);
      while ($row=mysqli_fetch_array($sql)) {
    
                            ?>

 <div class="row">
    <div class="col-sm-2">
      <p><?echo $row['date'];?></p>
    <?php echo ' <span>  <img class="img-responsive img-thumbnail" id="img"src="data:image/jpeg;base64,'.base64_encode($row['photo']).'"/></span>
                      ';
                    ?>
    </div>
    <div class="col-sm-8">
     <h1><?php echo $row['title'];?></h1>
    </div>
 

  </div>   
  <br>

 <div class="row">
    <div class="col-sm-3 col-md-6">
       <p><?php echo $row['discription'];?></p>
    </div>
    <div class="col-sm-9 col-md-6">
      <?php echo ' <span>  <img class="img-responsive .img-thumbnail"id="images" src="data:image/jpeg;base64,'.base64_encode($row['image']).'"/></span>
                      ';
                    ?>
    </div>
  </div>
  <br>
  <hr>
       <?php
    };?>
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



INSERT INTO `technology` (`id`, `title`, `discription`, `photo`, `user_id`, `date`) VALUES (NULL, 'afghanistan', 'kabul is the capital of afghanistan', 'img/green1.png', '4', '2019-03-20 03:07:09');