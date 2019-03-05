 <?php
 session_start();
 if(!isset($_SESSION['admin'])){
    header('location:loginadmin.php');
 }
 ?> 




<?php 
include "head.php";
include "link.php";
?>
<body>
<?php
include "top header.php";
?>


<?php
if(isset($_POST['activateuser'])){
	$userid=$_POST['userid'];
	$query="update user set status=1 where id='$userid'";
	mysqli_query($link,$query);
	
}
if(isset($_POST['diactivateuser'])){
	$userid=$_POST['userid'];
	$query="update user set status=0 where id='$userid'";
	mysqli_query($link,$query);
	
}


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
    <!-- Breadcomb area End-->
    <!-- Data Table area Start-->
    <div class="data-table-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="data-table-list">
                        <div class="basic-tb-hd">
                            <h2>Members</h2>
                           
                        </div>
                        <div class="table-responsive">
                            <table id="data-table-basic" class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>username</th>
                                        <th>Email</th>
                                        <th>status</th>
                                        <th>new stutus</th>
                                        <th>details</th>
                                    </tr>
                                    <?php

                                                include "link.php";
                                                $sql="SELECT * FROM user where status!=11";
                                                $restult=mysqli_query($link,$sql);


                                                ?>

                                             </thead>
                                                <?php
                                                while($row=mysqli_fetch_assoc($restult)){
                                                ?>
                              
                                <tbody>
                                    <tr>
                                        <td><a href="#"><?php echo $row['id']?></a></td>
                                       
                                                    <td class="hidden-480"><?php echo $row['name'];?></td>
                                                    <td><?php echo $row['email']?></td>
                                                    <td><?php  if($row['status']==1){
                                                        echo "Active";

                                                    }
                                                    else{
                                                        echo "disactive";
                                                    }

                                                        ?>
                                      
                                                <td class="hidden-480">
   
                                                                <form action="member.php" method="POST">
                                                                    <input type="hidden" name="userid" value="<?php echo $row['id']?>">

                                                <input type="submit" name="activateuser" value="Active">
                                                    <span class="lbl middle"></span>
                                                    </form>
                                                        <label class="pull-right inline">
                                                                <form action="member.php" method="POST">
                                                                    <input type="hidden" name="userid" value="<?php echo $row['id']?>">

                                                <input type="submit" name="diactivateuser" value="Diactive">
                                                    <span class="lbl middle"></span>
                                                    </form>
                                                    
                                                </label>
                                                    </td>




                                        <td><div class="action-buttons">
                                                            <a href="profile.php?ID=<?php echo $row['id'];?>" class="green bigger-140 show-details-btn" title="Show Details">
                                                                <i class="ace-icon fa fa-angle-double-down"></i>
                                                                <span class="sr-only">Details</span>
                                                            </a>
                                                        </div></td>
                                    </tr>
                                   </tbody>
                                   <?php
}
                                   ?>
                                       
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Start Footer area-->
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<?php

include "footer.php";
?>
</body>

</html>