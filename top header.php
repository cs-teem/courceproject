    <div class="header-top-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="logo-area">
                        <a href="#"><img src="img/logo/logo.png" alt="" /></a>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <div class="header-top-menu">
                        <ul class="nav navbar-nav notika-top-nav">
                            <li class="nav-item dropdown">
                                <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><span><i class="notika-icon notika-search"></i></span></a>
                                <div role="menu" class="dropdown-menu search-dd animated flipInX">
                                    <div class="search-input">
                                        <i class="notika-icon notika-left-arrow"></i>
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
                                    <div class="hd-message-info">
                                        <a href="login.php">
                                            <div class="hd-message-sn">
                                                <div class="hd-message-img">
                                                    <span>login</span>
                                                </div> 
                                                  </div>
                                        </a>
                                        <a href="logout.php">
                                            <div class="hd-message-sn">
                                                <div class="hd-message-img">
                                                    <span>lougout</span>
                                                </div> 
                                                  </div>
                                        </a>
                                                

                                              
                                         
                                   
                                    </div>
                                    
                                </div>
                            </li>
                            <li><a href="sing up.php" role="button" aria-expanded="false"><span>sign up</span></a>
                              
                            </li>
                            <li class="nav-item"><a href="member.php" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><p>members</p></a>
                              
                            </li>
                            <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><span>category</span></a>
                                <div role="menu" class="dropdown-menu message-dd chat-dd animated zoomIn">
                                    <div class="hd-mg-tt">
                                        <h4>category</h4>
                                    </div>
                                    <div class="search-people">
                                        <i class="notika-icon notika-left-arrow"></i>
                                        <input type="text" placeholder="Search People" />
                                    </div>
                                    <div class="hd-message-info">
                                      
                                                                                      <?php
      $query="select * from category";
      $sql=mysqli_query($link,$query);
      while ($row=mysqli_fetch_array($sql)) {
      ?>
                                       
                                       
                                      <a href="top_menu.php?ID=<?php echo $row["id"];?>">
                                            <div class="hd-message-sn">
                                                <div class="hd-message-img chat-img">
                                                   
                                                    <div class="chat-avaible"><i class="notika-icon notika-dot"></i></div>
                                                </div>
                                                <div class="hd-mg-ctn">
                                                   <?php echo $row['category']?>
                                                   <p><small><?php echo $row['discription']?></small></p>
                                                </div>
                                            </div>
                                        </a>
                                         
                                            <?php }?> 
                                    </div>
                                    <div class="hd-mg-va">
                                        <a href="#">View All</a>
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