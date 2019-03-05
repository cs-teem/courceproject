<?php
include "head.php";
include "link.php";
?>
<body>
<?php
include "top header.php";
?>
    <!-- Main Menu area End-->
    <!-- Start Status area -->
    
    <!-- End Status area-->
    <!-- Start Sale Statistic area-->
                    <?php
        if(isset($_GET['ID'])){
        $id = $_GET['ID'];

     }
     ?>
     <br><br>
    <div class="sale-statistic-area">
        <div class=""><a class="btn btn-success notika-btn-success"href="askquestion.php?ID='<?php echo $_GET['ID'];?>'" style="margin-left: 85%">Ask Question</a></div>
    <?php 
include "aside.php";
    ?>
      <hr>
    </div>
    <div class="col-sm-8" style="background-color:white;">
       <div class="sale-statistic-inner notika-shadow mg-tb-30">
 <br><br><br><br>
               
<?php
        if(isset($_GET['ID'])){
        $id = $_GET['ID'];
}
        
     ?>
          <?php
      $query="select * from question where cat_id=$id";
      $sql=mysqli_query($link,$query);
      while ($row=mysqli_fetch_array($sql)) {
      
    

                                  ?>        








                                                
                                <?php
                                $test=$row['id'];
                                    $test= "SELECT count(*) as questions from question,answer WHERE question.id= answer.qu_id and question.id=$test";
                                    $qu=mysqli_query($link,$test);
                                    $rows = mysqli_fetch_assoc($qu);
                                ?><div  style="margin-left:2px;padding:0px">
                                <div class="jumbotron">
                                <span>answer(<?php echo $rows['questions']?>)</span>
                                <span style="margin:20px; text-decoration: none;font-size:15px;font-style:oblique;"><a href="answer.php?ID=<?php echo $row["id"];?>"><?php echo $row['description']?></a></span> 
                                
                                </div>
                            </div>
                                <hr>
<?php }?>

    
                      
                    </div>
                </div>
            </div>
        </div>
    </div>

                 <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br> <br><br><br> <br><br>
    <!-- End Realtime sts area-->
    <!-- Start Footer area-->
<?php

include "footer.php";
?>
</body>

</html>