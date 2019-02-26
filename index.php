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
   
      $query="select * from question";
      $sql=mysqli_query($link,$query);
      while ($row=mysqli_fetch_array($sql)) {
      
    

                                $test=$row['id'];
                                    $test= "SELECT count(*) as questions from question,answer WHERE question.id= answer.qu_id and question.id=$test";
                                    $qu=mysqli_query($link,$test);
                                    $rows = mysqli_fetch_assoc($qu);

                                     
                                ?>

                                
                                <style type="text/css">
text{
    font-size: 12px;





                                <style type="text/css">
                            </style>

                                <div class="jumbotron"><a class="notification" href="" >
                 <small>Answers</small>
                                <span class="badge" style="font-size: 50%"> <?php if($rows>1000){echo $rows['questions'];}else{echo"k+";}?></span>
                                </a>
                                <span><a href="answer.php?ID=<?php echo $row["id"];?>"></a></span>
                                <span ><a href="answer.php?ID=<?php echo $row["id"];?>"><?php echo $row['description']?>?</a></span> 
                                 <div class="scorll">  
                                  
                                 </div>

    <small>Answers</small>
    <span class="badge" style="font-size: 50%;"> <?php if($rows>1000){echo $rows['questions'];}else{echo"k+";}?></span>
</a>                                 <span ><a href="answer.php?ID=<?php echo $row["id"];?>"></a></span>
                             
                             <span ><a href="answer.php?ID=<?php echo $row["id"];?>"><?php echo $row['description']?>?</a></span> 
                       




</div>

 <?php
}
?>

                                

                            



    
                      
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