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
</style>
    <!-- Main Menu area End-->
    <!-- Start Status area -->
    
    <!-- End Status area-->
    <!-- Start Sale Statistic area-->

    <?php
        if(isset($_GET['ID'])){
        $id = $_GET['ID'];

     }
     ?>  
     <style type="text/css">
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
 
                        <?php
        if(isset($_GET['ID'])){
        $id = $_GET['ID'];
        }
   
      $query="select * from question";
      $sql=mysqli_query($link,$query);
      while ($row=mysqli_fetch_array($sql)) {
      
    

                                $test=$row['id'];
                                    $test= "SELECT count(*) as questions from question,answer WHERE question.id= answer.qu_id and question.id=$test";
                                    $qu=mysqli_query($link,$test);
                                    $rows = mysqli_fetch_assoc($qu);
                                ?>



                                <style type="text/css">
                            </style>

                                <div class="jumbotron"><a class="notification" href="" >
    
    <small>Answers</small>
    <span class="badge" style="font-size: 50%;line-height:0.2;"> <?php if($rows>1000){echo $rows['questions'];}else{echo"k+";}?></span>
</a>                                 <span ><a href="answer.php?ID=<?php echo $row["id"];?>"></a></span>
                             
                             <span ><a href="answer.php?ID=<?php echo $row["id"];?>"><?php echo $row['description']?>?</a></span> 
                         <div class="scorll" style="margin-right: 200px">  
                                  <hr>
                                  <?php 
                                  $test=$row['id'];
                                        $s="SELECT discription from question,answer WHERE question.id= answer.qu_id and question.id=$test order by discription DESC LIMIT 1" ;
                                        $q=mysqli_query($link,$s);
                                        $r=mysqli_fetch_array($q);
                                        echo $r['discription'];

                                   ?>
</div>



</div>

 <?php
}
?>
                
                                

                            



    
                      
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