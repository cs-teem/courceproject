<?php
include "link.php";
include "head.php";
include "top header.php";
?>


  <div class="data-table-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="data-table-list">
                        <div class="basic-tb-hd">
                            <h2>select category you want to add the question</h2>
                        </div>
                        <div class="table-responsive">
                            <table id="data-table-basic" class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>id</th>
                                        <th>Name</th>
                                        <th>Discription</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                   
 <?php
      $query="select * from category";
      $sql=mysqli_query($link,$query);
      while ($row=mysqli_fetch_array($sql)) {
      ?>
      
                                    <tr> 
                                 
                                      <td><?php echo $row['id'];?></td>
                                       <td> <a href="askquestion.php?ID=<?php echo $row["id"];?>"><?php echo $row['category'];?></a></td>
                                       <td><?php  echo $row['discription'];?></td>
                                       </a>
                                    </tr>

                                   <?php
}
                                   ?>
                                </tbody>
                               
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Data Table area End-->
<br><br><br><br><br><br><br><br><br><br><br><br>









<?php
include "footer.php";
?>