            <div class="left side-menu bg-success ">
                <div class="sidebar-inner slimscrollleft">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <ul>
                        	<li class="menu-title" style="color: white;">Navigation</li>

                            <li class="has_sub">
                                <a href="dashboard.php" style="color: white";  class="waves-effect"><i class="mdi mdi-view-dashboard"></i>  <span> Dashboard </span> </a>
                         
                            </li>
<?php if($_SESSION['utype']=='1'):?>
  <li class="has_sub">
                                <a href="javascript:void(0);" style="color: white"; class="waves-effect"><i class="mdi mdi-format-list-bulleted"></i> <span> Sub-admins </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="add-subadmins.php" style="color: white";>Add Sub-admin</a></li>
                                    <li><a href="manage-subadmins.php" style="color: white";>Manage Sub-admin</a></li>
                                </ul>
                            </li>
<?php endif;?>
               


                            <li class="has_sub">
                                <a href="javascript:void(0);" style="color: white"; class="waves-effect"><i class="mdi mdi-format-list-bulleted"></i> <span> Category </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                	<li><a href="add-category.php" style="color: white";>Add Category</a></li>
                                    <li><a href="manage-categories.php" style="color: white";>Manage Category</a></li>
                                </ul>
                            </li>

    <li class="has_sub">
                                <a href="javascript:void(0);" style="color: white"; class="waves-effect"><i class="mdi mdi-format-list-bulleted"></i> <span>Sub Category </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="add-subcategory.php" style="color: white";>Add Sub Category</a></li>
                                    <li><a href="manage-subcategories.php" style="color: white";>Manage Sub Category</a></li>
                                </ul>
                            </li>               
  <li class="has_sub">
                                <a href="javascript:void(0);" style="color: white"; class="waves-effect"><i class="mdi mdi-format-list-bulleted"></i> <span> Posts  </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="add-post.php" style="color: white";>Add Posts</a></li>
                                    <li><a href="manage-posts.php" style="color: white";>Manage Posts</a></li>
                                     <li><a href="trash-posts.php" style="color: white";>Trash Posts</a></li>
                                </ul>
                            </li>  
                     

                            <li class="has_sub">
                                <a href="javascript:void(0);" style="color: white"; class="waves-effect"><i class="mdi mdi-format-list-bulleted"></i> <span> Pages </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="aboutus.php" style="color: white";>About us</a></li>
                                    <li><a href="contactus.php" style="color: white";>Contact us</a></li>
                                </ul>
                            </li>
   <li class="has_sub">
                                <a href="javascript:void(0);" style="color: white"; class="waves-effect"><i class="mdi mdi-format-list-bulleted"></i> <span> Comments </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                  <li><a href="unapprove-comment.php" style="color: white";>Waiting for Approval </a></li>
                                    <li><a href="manage-comments.php" style="color: white";>Approved Comments</a></li>
                                </ul>
                            </li>   

                        </ul>
                    </div>
                    <!-- Sidebar -->
                    <div class="clearfix"></div>


                </div>
                <!-- Sidebar -left -->

            </div>