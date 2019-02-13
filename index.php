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
    <div class="sale-statistic-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-8 col-sm-7 col-xs-9">
                    <div class="sale-statistic-inner notika-shadow mg-tb-30">
 
                        <?php
        if(isset($_GET['ID'])){
        $id = $_GET['ID'];
}
        
     ?>
     
          <?php
      $query="select * from question";
      $sql=mysqli_query($link,$query);
      while ($row=mysqli_fetch_array($sql)) {
      
    

                                  ?>                        
                                <?php
                                $test=$row['id'];
                                    $test= "SELECT count(*) as questions from question,answer WHERE question.id= answer.qu_id and question.id=$test";
                                    $qu=mysqli_query($link,$test);
                                    $rows = mysqli_fetch_assoc($qu);
                                ?>
                                <style type="text/css">
text{
    font-size: 12px;

    font-style:;
}
                                </style>

                                <div class="jumbotron">
                                <span><a href="answer.php?ID=<?php echo $row["id"];?>">answer[<?php echo $rows['questions']?>]</a></span>
                                <span style="margin:20px; text-decoration: none;font-size:15px;font-style:oblique;"><a href="answer.php?ID=<?php echo $row["id"];?>"><?php echo $row['description']?>?</a></span> 
                            
                
                                </div>
                            


<?php
}?>

    
                      
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