s

    <div class="header-top-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="logo-area">
                        <a href="#" style="bg-color:green"><img src="img/logo/logoes.PNG" alt="" /></a>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <div class="header-top-menu">
                        <ul class="nav navbar-nav notika-top-nav">
                            <li class="nav-item dropdown">
                                <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><span><i class="notika-icon notika-search"></i></span></a>
                                <div role="menu" class="dropdown-menu search-dd animated flipInX">
                                    <div class="search-input">
                                        <i class="glyphicon glyphicon-star"></i>
                                        <input type="text" />
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><span>sign in</span></a>
                                <div role="menu" class="dropdown-menu message-dd animated zoomIn">
                                    <div class="hd-mg-tt">
                                        <h2>sign in</h2>
                                    </div>
                                     <div class="row">
                                        <style type="text/css">

                                        </style>
                          <div class="col-sm-6" style="text-align:right"><a  href="login.php"><span>login</span></a></div>
                         <div class="col-sm-1" style=""><a href="logout.php"><span>logout</span></a></div>
                         
                            </div>
                                 
                                    
                                </div>
                            </li>
                            <li><a href="sing up.php" role="button" aria-expanded="false">
                               <small>  <span class="sign">Sing Up</span></a></small>
                            
                              
                            </li>
                            <li class="nav-item"><a href="member.php"class="nav-link dropdown-toggle"><i class="glyphicon glyphicon-user"></i></a>
                              
                            </li>
                            <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="
glyphicon glyphicon-glass"></i></a>
                                <div role="menu" class="dropdown-menu message-dd chat-dd animated zoomIn">
                                    <div class="hd-mg-tt">
                                       <center> <h4>Tags</h4></center>
                                       <center><a href="add_category.php"><p class="btn btn-success notika-btn-success">add_Tag</p></a></center>
                                    </div>

       <br>





                   <div class="search-people" class="col_6 column">
                                         <span class="input-group-btn">
                     <div class="title_right" id="search">
                <div class="col-md-12 col-sm-12 col-xs-12 form-group pull-center ">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for..." name="search2">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="submit" name="s_submit">Go!</button>
                    </span>
                  </div>
                </div>
              </div>       
                                    </div>
                                    <div class="hd-message-info">
                                 
    

        <?php
      $query="select * from category where id<=5";
      $sql=mysqli_query($link,$query);
      while ($row=mysqli_fetch_array($sql)) {
      ?>
                                      <a href="top_menu.php?ID=<?php echo $row["id"];?>">
                                            <div class="hd-message-sn">
                                                <div class="hd-message-img chat-img">
                                                   
                                                    <div class="chat-avaible"><i class="notika-icon notika-dot"></i></div>
                                                </div>
                                                <div class="hd-mg-ctn"  data-inset="true" data-inset="true" data-filter="true" data-ican=false>
                                                   <?php echo $row['category']?>
                                                   <p><small><?php echo $row['discription']?></small></p>
                                                </div>
                                            </div>
                                        </a>
                                         
                                            <?php }?> 
                                    </div>
                                    <div class="hd-mg-va">
                                        <a href="view_category.php">View All</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Header Top Area -->