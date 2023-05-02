<div id="sidebar" class="sidebar                  responsive                    ace-save-state">
				<script type="text/javascript">
					try{ace.settings.loadState('sidebar')}catch(e){}
				</script>

				<div class="sidebar-shortcuts" id="sidebar-shortcuts">
					<div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
						<button class="btn btn-success">
							<i class="ace-icon fa fa-signal"></i>
						</button>

						<button class="btn btn-info">
							<i class="ace-icon fa fa-pencil"></i>
						</button>

						<button class="btn btn-warning">
							<i class="ace-icon fa fa-users"></i>
						</button>

						<button class="btn btn-danger">
							<i class="ace-icon fa fa-cogs"></i>
						</button>
					</div>

					<div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
						<span class="btn btn-success"></span>

						<span class="btn btn-info"></span>

						<span class="btn btn-warning"></span>

						<span class="btn btn-danger"></span>
					</div>
				</div><!-- /.sidebar-shortcuts -->

				<ul class="nav nav-list">
					<li class="">
						<a href="index.php">
							<i class="menu-icon fa fa-tachometer"></i>
							<span class="menu-text"> Dashboard </span>
						</a>

						<b class="arrow"></b>
					</li>

					<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-desktop"></i>
							<span class="menu-text">
								Admin
							</span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<?php if(defined('assets_assets'.'can_view')){ ?>
							<li class="">
								<a href="Users.php" >
									<i class="menu-icon fa fa-user"></i>

									Users
									
								</a>

								<b class="arrow"></b>

								
							</li>
							<?php 
                             }
							if(defined('assets_assets'.'can_view')){ ?>

							
									<li class="">
										<a href="Income_Statment.php">
											<i class="menu-icon fa fa-leaf green"></i>
											System Settings
										</a>

										<b class="arrow"></b>
									</li>
							<?php 
                             }
							if(defined('assets_assets'.'can_view')){ ?>
                                    <li class="">
										<a href="user_roles.php">
											<i class="menu-icon fa fa-leaf green"></i>
											User Preveledges
										</a>

										
										<b class="arrow"></b>
									</li>
							<?php 
                             }
							if(defined('assets_assets'.'can_view')){ ?>
									 <li class="">
										<a href="ChurchDetails.php">
											<i class="menu-icon fa fa-leaf green"></i>
											Church Settings
										</a>

										
										<b class="arrow"></b>
									</li>
							<?php 
                             }
							?>
								
							
							</li>

							
							
						</ul>
					</li>

					<?php if(defined('members'.'can_view')){ ?>

					<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-list"></i>
							<span class="menu-text"> Members </span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<?php 
                             
							if(defined('members'.'can_view')){ ?>
							<li class="">
								<a href="Members.php">
									<i class="menu-icon fa fa-caret-right"></i>
									Members
								</a>

								<b class="arrow"></b>
							</li>
							<?php 
                             }
							if(defined('membership_statistics'.'can_view')){ ?>
							<li class="">
								<a href="add_Member.php">
									<i class="menu-icon fa fa-caret-right"></i>
									Membership Statistics
								</a>

								<b class="arrow"></b>
							</li>
							<?php 
                             }
							if(defined('membership_reports'.'can_view')){ ?>
							<li class="">
								<a href="membership_reports.php">
									<i class="menu-icon fa fa-caret-right"></i>
									Membership Reports
								</a>

								<b class="arrow"></b>
							</li>
							<?php 
                             }
							if(defined('members'.'can_add')){ ?>

							<li class="">
								<a href="add_Member.php">
									<i class="menu-icon fa fa-caret-right"></i>
									New Members
								</a>

								<b class="arrow"></b>
							</li>
							<?php 
                             }
							?>
							
						</ul>
				   
					</li>

					<?php 
                    }
				   if(defined('leaders_leaders'.'can_view')){ ?>
					<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-list"></i>
							<span class="menu-text"> Leaders </span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
						<?php 
                             
							if(defined('leaders_leaders'.'can_view')){ ?>
							<li class="">
								<a href="Leaders.php">
									<i class="menu-icon fa fa-caret-right"></i>
									Leaders
								</a>

								<b class="arrow"></b>
							</li>
							<?php 
                             }
							if(defined('leaders_leaders'.'can_add')){ ?>


							<li class="">
								<a href="NewPosition.php">
									<i class="menu-icon fa fa-caret-right"></i>
									New Position
								</a>

								<b class="arrow"></b>
							</li>
							<?php 
                             }
							 ?>
							
						</ul>
					</li>
				   <?php 
                    }
				   if(defined('assets_assets'.'can_view')){ ?>
					<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-list"></i>
							<span class="menu-text"> Assets </span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
						<?php 
                             
							if(defined('assets_assets'.'can_view')){ ?>
							<li class="">
								<a href="Assets.php">
									<i class="menu-icon fa fa-caret-right"></i>
									Manage Assets
								</a>

								<b class="arrow"></b>
							</li>
							<?php 
                             }
							if(defined('assets_assets'.'can_add')){ ?>

							<li class="">
								<a href="add_Asset.php">
									<i class="menu-icon fa fa-caret-right"></i>
									New Asset
								</a>

								<b class="arrow"></b>
							</li>
							<?php 
                             }
							 ?>
						</ul>
					</li>
				    <?php 
                    }
				   if(defined('budgets_budgets'.'can_view')){ ?>

                    <li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-list"></i>
							<span class="menu-text"> Budgets </span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<?php 
                             
							if(defined('budgets_budgets'.'can_view')){ ?>
							<li class="">
								<a href="Budgets.php">
									<i class="menu-icon fa fa-caret-right"></i>
									Budget 
								</a>

								<b class="arrow"></b>
							</li>
						  <?php 
                             }
							if(defined('budget_analysis'.'can_view')){ ?>

							<li class="">
								<a href="Budgets_analysis.php">
									<i class="menu-icon fa fa-caret-right"></i>
									Budget Analysis
								</a>

								<b class="arrow"></b>
							</li>
							<?php 
                             }
							 ?>
						</ul>
					</li>
				   <?php 
                    }
				   if(defined('departments_departments'.'can_view')){ ?>
					<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-list"></i>
							<span class="menu-text"> Departments </span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<?php 
                             
							if(defined('departments_departments'.'can_view')){ ?>
							<li class="">
								<a href="Departments.php">
									<i class="menu-icon fa fa-caret-right"></i>
									Department List
								</a>

								<b class="arrow"></b>
							</li>
							<?php 
                             }
							if(defined('departments_departments'.'can_add')){ ?>

							<li class="">
								<a href="add_Department.php">
									<i class="menu-icon fa fa-caret-right"></i>
									New Department
								</a>

								<b class="arrow"></b>
							</li>
							<?php 
                             }
							 ?>
							
						</ul>
					</li>
				   <?php 
                    }
				   if(defined('time_managagment'.'can_view')){ ?>
					<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-list"></i>
							<span class="menu-text"> Time Managagment </span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<?php 
                             
							if(defined('time_managagment'.'can_view')){ ?>
							<li class="">
								<a href="Events.php">
									<i class="menu-icon fa fa-caret-right"></i>
									Time managments
								</a>

								<b class="arrow"></b>
							</li>
							<?php 
                             }
							if(defined('time_managagment'.'can_add')){ ?>

							<li class="">
								<a href="add_Event_item.php">
									<i class="menu-icon fa fa-caret-right"></i>
									New Events
								</a>

								<b class="arrow"></b>
							</li>
							<?php 
                             }
							 ?>
							
						</ul>
					</li>

					<?php 
                    }
				   if(defined('worship_meetings'.'can_view')){ ?>

					<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-list"></i>
							<span class="menu-text"> Worship & Meetings</span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<?php 
                             
							if(defined('worship_meetings'.'can_view')){ ?>
							<li class="">
								<a href="Worship_service.php">
									<i class="menu-icon fa fa-caret-right"></i>
									Manage Worship Events
								</a>
								<a href="Meetings.php">
									<i class="menu-icon fa fa-caret-right"></i>
									Meetings
								</a>

								<b class="arrow"></b>
							</li>
							<?php 
                             }
							?>

							
							
						</ul>
					</li>
				   <?php 
                    }
				   if(defined('prayer_requests'.'can_view')){ ?>
					<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-list"></i>
							<span class="menu-text"> Prayer Requests </span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<?php 
                             
							if(defined('prayer_requests'.'can_view')){ ?>
							<li class="">
								<a href="Request.php">
									<i class="menu-icon fa fa-caret-right"></i>
									Manage Requests
								</a>

								<b class="arrow"></b>
							</li>
							<?php 
                             }
							?>

						
						</ul>
					</li>
                   <?php 
                    }
				   ?>
				
                   <li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-list"></i>
							<span class="menu-text"> Communication </span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<?php 
                             
							if(defined('sms_sms'.'can_view')){ ?>
							<li class="">
								<a href="SMS.php">
									<i class="menu-icon fa fa-caret-right"></i>
									SMS
								</a>

								<b class="arrow"></b>
							</li>
							<?php 
                             }
							if(defined('email_email'.'can_view')){ ?>

							<li class="">
								<a href="Emails.php">
									<i class="menu-icon fa fa-caret-right"></i>
									Email
								</a>

								<b class="arrow"></b>
							</li>
							<?php 
                             }
							if(defined('dashboard_announcementa'.'can_view')){ ?>
							<li class="">
								<a href="Notices.php">
									<i class="menu-icon fa fa-caret-right"></i>
									Dashboard Announcements
								</a>

								<b class="arrow"></b>
							</li>
							<?php 
                             }
							 ?>
						

							
						</ul>
					</li>
				  <?php
				   if(defined('finances_finances'.'can_view')){ ?>
					</li>

					<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-list"></i>
							<span class="menu-text"> Finances</span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<?php 
                             
							if(defined('income_transact'.'can_add')){ ?>
							<li class="">
								<a href="Reciept.php">
									<i class="menu-icon fa fa-caret-right"></i>
									Income Transaction
								</a>

								<b class="arrow"></b>
							</li>
							<?php 
                             }
							if(defined('expenditure_transaction'.'can_add')){ ?>

							<li class="">
								<a href="Expenditure.php">
									<i class="menu-icon fa fa-caret-right"></i>
									Expenditure Transaction
								</a>

								<b class="arrow"></b>
							</li>
							<?php 
                             }
							if(defined('accounts_accounts'.'can_view')){ ?>
								<li class="">
								<a href="Accounts.php">
									<i class="menu-icon fa fa-caret-right"></i>
									Accounts
								</a>

								<b class="arrow"></b>
							</li>
							<?php 
                             }
							 ?>
							
							
						</ul>
					</li>
				  <?php 
                    }
				   if(defined('reports_reports'.'can_view')){ ?>

					<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-list"></i>
							<span class="menu-text">Reports</span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
						
							<li class="">
								<a href="#" class="dropdown-toggle">
									<i class="menu-icon fa fa-caret-right"></i>

									Financial Reports
									<b class="arrow fa fa-angle-down"></b>
								</a>

								<b class="arrow"></b>

								<ul class="submenu">
									<?php 
                             
							if(defined('income_statement'.'can_view')){ ?>
									<li class="">
										<a href="Income_Statment.php">
											<i class="menu-icon fa fa-leaf green"></i>
											Income Statement
										</a>

										<b class="arrow"></b>
									</li>
							<?php 
                             }
							if(defined('individual_statement'.'can_view')){ ?>
                                    <li class="">
										<a href="ExpenditureStatment.php">
											<i class="menu-icon fa fa-leaf green"></i>
											Expenditure Statement
										</a>

										
										<b class="arrow"></b>
									</li>
							<?php 
                             }
							if(defined('trust_funds'.'can_view')){ ?>
									<li class="">
										<a href="ExpenditureStatment.php">
											<i class="menu-icon fa fa-leaf green"></i>
											Trust Funds
										</a>

										<b class="arrow"></b>
									</li>
							<?php 
                             }
							if(defined('assets_assets'.'can_view')){ ?>
									
									<li class="">
										<a href="ExpenditureStatment.php">
											<i class="menu-icon fa fa-leaf green"></i>
											Local Funds
										</a>

										<b class="arrow"></b>
									</li>

							<?php 
                             }
							if(defined('district_funds'.'can_view')){ ?>
									<li class="">
										<a href="ExpenditureStatment.php">
											<i class="menu-icon fa fa-leaf green"></i>
											District Funds
										</a>

										<b class="arrow"></b>
									</li>
							<?php 
                             }
							if(defined('assets_assets'.'can_view')){ ?>
									<li class="">
										<a href="ExpenditureStatment.php">
											<i class="menu-icon fa fa-leaf green"></i>
											Department Finances
										</a>

										<b class="arrow"></b>
									</li>
							<?php 
                             }
							if(defined('budget_analysis'.'can_view')){ ?>
									<li class="">
								<a href="Budgets_analysis.php">
									<i class="menu-icon fa fa-caret-right"></i>
									Budget Analysis
								</a>

								<b class="arrow"></b>
							</li>
						   <?php 
                             }
							 ?>
									
								</ul>
							</li>
						
						<?php 
                             
							if(defined('assets_assets'.'can_view')){ ?>
							<li class="">
								<a href="Assets.php ">
									<i class="menu-icon fa fa-caret-right"></i>
									Assets
								</a>

								<b class="arrow"></b>
							</li>
							<?php 
                             }
							 ?>
						
						</ul>
					</li>
				   <?php 
                    }
				  ?>

					
						
					</li>
				</ul><!-- /.nav-list -->

				<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
					<i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
				</div>
			</div>
