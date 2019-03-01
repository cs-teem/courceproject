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
a{
  color: black;
}


  
#divss{

  margin: 6px;
  
}
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
 <br><br><br><br>
               
 <div class="row">
   <?php
$query="select * from category";
$sql=mysqli_query($link,$query);
while ($rows=mysqli_fetch_assoc($sql)) {


   ?>
  
   <a href="top_menu.php?ID=<?php echo $rows["id"];?>"> <div  class="col-sm-1" style="background-color:pink;">
      <h5><?php echo $rows['category'];?></h5></a>
    </div>
    <div class="col-sm-3" style="background-color:lavenderblush;">
      <p><?php echo $rows['discription'];?></p>
  
    </div>
   <?php
};?>
  
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