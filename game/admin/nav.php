<?php include_once("function.php");?>
 <nav class="top1 navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
				<a href="#"><img src="images/1.png" style="height:50px; width:50px;" alt=""/></a>
            </div>
            <!-- /.navbar-header -->
            <ul class="nav navbar-nav navbar-right">
				
			    <li class="dropdown">
	        		<a href="#" class="dropdown-toggle avatar" data-toggle="dropdown"><img src="images/ashu.jpg" alt="Ashutosh" title="Ashutosh"/></a>
	        		<ul class="dropdown-menu">
						<li class="dropdown-menu-header text-center">
							<strong>Account</strong>
						</li>
						<li class="m_2"><a href="#"><i class="fa fa-user"></i> View Profile</a></li>
                        <li class="m_2"><a href="#"><i class="fa fa-wrench"></i> Change Password</a></li>   
                        <li class="m_2"><a href="signup.php"><i class="fa fa-shield"></i> Signup</a></li>   
						<li class="m_2"><a href="logout.php"><i class="fa fa-lock"></i> Logout</a></li>	
	        		</ul>
	      		</li>
			</ul>
			<form class="navbar-form navbar-right">
              <input type="text" class="form-control" value="Search..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search...';}">
            </form>
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="home.php"><i class="fa fa-dashboard fa-fw nav_icon"></i>Dashboard</a>
                        </li>
                        <li style="display:none;">
                            <a href="#"><i class="fa fa-laptop nav_icon"></i>Layouts<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="grids.html">Grid System</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li style="display:none;">
                            <a href="#"><i class="fa fa-indent nav_icon"></i>Menu Levels<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="graphs.html">Graphs</a>
                                </li>
                                <li>
                                    <a href="typography.html">Typography</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li style="display:none;">
                            <a href="#"><i class="fa fa-envelope nav_icon"></i>Mailbox<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="test.php">Inbox</a>
                                </li>
                                <li>
                                    <a href="sms.php">Compose email</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li style="display:none;">
                            <a href="widgets.html"><i class="fa fa-flask nav_icon"></i>Widgets</a>
                        </li>
                         <li>
                            <a href="#"><i class="fa fa-check-square-o nav_icon"></i>Insert Synonyms<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="add_synonyms.php">Add Synonyms</a>
                                </li>
                                <li>
                                    <a href="view_synonyms.php">View Synonyms</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>                         
                        <li>
                            <a href="#"><i class="fa fa-check-square-o nav_icon"></i>Insert Antonyms<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="add_antonyms.php">Add Antonyms</a>
                                </li>
                                <li>
                                    <a href="view_antonyms.php">View Antonyms</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>                        
                        <li>
                            <a href="#"><i class="fa fa-check-square-o nav_icon"></i>Insert Image<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="add_image.php">Add Image</a>
                                </li>
                                <li>
                                    <a href="view_image.php">View Image</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li style="display:none;">
                            <a href="#"><i class="fa fa-table nav_icon"></i>Tables<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="basic_tables.html">Basic Tables</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li style="display:none;">
                            <a href="#"><i class="fa fa-sitemap fa-fw nav_icon"></i>Css<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="media.html">Media</a>
                                </li>
                                <li>
                                    <a href="login.html">Login</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>