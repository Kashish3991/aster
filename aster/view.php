<?php include 'header.php'; checkValidUser(); ?>
	<style>
		.text-muted{padding-right:20px;}
		.table>tbody>tr>td, .table>tbody>tr>th,
		.table>tfoot>tr>td, .table>tfoot>tr>th, 
		.table>thead>tr>td, .table>thead>tr>th {
			padding: 8px;
			line-height: 1.42857143;
			vertical-align: top;
			border-top: 0px solid #ddd;
		}
		.table>thead>tr>th {
			vertical-align: bottom;
			border-bottom: 0px solid #ddd;
		}
/* Popup box BEGIN */


.hover_bkgr_fricc{
    background:rgba(0,0,0,.4);
    cursor:pointer;
    display:none;
    height:100%;
    position:fixed;
    text-align:center;
    top:0;
    width:100%;
    z-index:10000;
	left:0;
}
.hover_bkgr_fricc .helper{
    display:inline-block;
    height:100%;
    vertical-align:middle;
}
.hover_bkgr_fricc > div {
    background-color: #fff;
    box-shadow: 10px 10px 60px #555;
    display: inline-block;
    height: auto;
    max-width: 551px;
    min-height: 100px;
    vertical-align: middle;
    width: 60%;
    position: relative;
    border-radius: 8px;
    padding: 15px 5%;
	left:0;
}
.popupCloseButton {
    background-color: #fff;
    border: 3px solid #999;
    border-radius: 50px;
    cursor: pointer;
    display: inline-block;
    font-family: arial;
    font-weight: bold;
    position: absolute;
    top: -20px;
    right: -20px;
    font-size: 25px;
    line-height: 30px;
    width: 30px;
    height: 30px;
    text-align: center;
}
.popupCloseButton:hover {
    background-color: #ccc;
}
.trigger_popup_fricc {
    cursor: pointer;
    font-size: 15px;
    margin: 20px;
    display: inline-block;
	color: green;
    
}
/* Popup box BEGIN */

		.label-danger {
			padding: 10px 12px;
		}
		.panel-heading{
			 text-transform: uppercase;
		}
		.panel{
			border:1px solid #dddddd;
			border-radius: 0;
			box-shadow: none;
		}
		tr{
			border-bottom: 1px solid rgb(228, 225, 225);
		}
		.table-bordered {
			border: none;
		}
		.col-md-3 { margin-bottom: 20px !important; } 

		.family-details { width: 25%; float:left; margin:0; padding:0; list-style:none; }
		.family-details li { border: 0px solid red; clear: both; height: 71px; margin:0; padding:0; }
		#li-family_id1,#li-email2, #li-phone2, #li-phone3, #li-child2, #li-child3, #li-child4, #li-child5, #add-family_id1,#add-phone2, #add-phone3, #add-child2, #add-child3, #add-child4, #add-child5, #li-status  { display: none; }
		#add-email2,#add-family_id1, #add-phone2, #add-phone3, #add-child2, #add-child3, #add-child4, #add-child5 { text-decoration: none; cursor:pointer; display: none; }


		#return-value {
			width: 60%;
			float: left;
			color: green;
			text-align: right;
			font-weight: 500;
			line-height: 26px;
			display:inline-block;
		}
.headingsr{
text-align: center;
}



		.tution-comments { padding: 20px; }
		.tution-comments-button {
			padding-bottom: 20px;
		}
		.edit_class { margin-right: 5px; cursor: pointer; }
		.delete_class { cursor: pointer; }
		.edit-message { margin: 15px 0 0 0; }
		#edit-message { display: none; }
		.update_class { margin: 0 5px 5px 0; }
		.return-comments { color: #ff0000; font-weight: normal; padding-top: 5px;}
		
	</style>
    <div class="container">
		<br>
		<?php
			if( isset($_GET['fid']) ){
                                            $fid			= $_GET['fid'];	
                                            $sql		 	= "Select * FROM family_data WHERE id='".$fid."'";
                                            $result 		= mysqli_query($sldb, $sql);
                                            $row_id			= 0;
                                            while($row 		= mysqli_fetch_assoc($result)) {
                                                $_POST		= $row;
                                                $row_id 	= $row["id"];
				}
			}			
		?>

	

		<?php if(isset($_POST["email2"]) && $_POST["email2"] != '') { ?> 
			<style>
				#add-email2{ display: none !important; }
				#li-email2{ display: block !important; }
			</style>		
		<?php } ?>

		<?php if(isset($_POST["phone2"]) && $_POST["phone2"] != '') { ?> 
			<style>
				#add-phone2{ display: none !important; }
				#li-phone2{ display: block !important; }
			</style>		
		<?php } ?>

		<?php if(isset($_POST["phone3"]) && $_POST["phone3"] != '') { ?> 
			<style>
				#add-phone3{ display: none !important; }
				#li-phone3{ display: block !important; }
			</style>		
		<?php } ?>

		<?php if(isset($_POST["child2"]) && $_POST["child2"] != '') { ?> 
			<style>
				#add-child2{ display: none !important; }
				#li-child2{ display: block !important; }
			</style>		
		<?php } ?>

		<?php if(isset($_POST["child3"]) && $_POST["child3"] != '') { ?> 
			<style>
				#add-child3{ display: none !important; }
				#li-child3{ display: block !important; }
			</style>		
		<?php } ?>

		<?php if(isset($_POST["child4"]) && $_POST["child4"] != '') { ?> 
			<style>
				#add-child4{ display: none !important; }
				#li-child4{ display: block !important; }
			</style>		
		<?php } ?>

		<?php if(isset($_POST["child5"]) && $_POST["child5"] != '') { ?> 
			<style>
				#add-child5{ display: none !important; }
				#li-child5{ display: block !important; }
			</style>		
		<?php } ?>

<div class="row backgrndpage" style="padding-top: 20px;">
  <div class="col-md-12">
    <div class="row">		
		<div class="col-md-12 familydetialsrow">
			<div class="panel panel-primary">
				<div class="panel-heading">
					Family Details
				</div>
				<!-- /.panel-heading -->
				<div class="panel-body">
					<div>
						<form name="family-data" id="family-data" class="form-group">
							<ul class="family-details">
								<li>
									<div class="col-md-12"><label>FAMILY ID</label><span style="float: right;"><a id="add-family_id1" class="trigger_popup_fricc">+ Add</a></span>
										<input disabled type="text" class="form-control" name="family_id" id="family_id" value="<?php


														if($_POST["family_id19"] != "")
															{
																	echo  $_POST["family_id19"];
															}
														else if($_POST["family_id18"] != "")
															{
																	echo  $_POST["family_id18"];
															}
															else if($_POST["family_id17"] != "")
															{
																	echo  $_POST["family_id17"];
															}
															else if($_POST["family_id16"] != "")
															{
																	echo  $_POST["family_id16"];
															}
															else if($_POST["family_id15"] != "")
															{
																	echo  $_POST["family_id15"];
															}	
															else	if($_POST["family_id14"] != "")
															{
																	echo  $_POST["family_id14"];
															}
															else if($_POST["family_id13"] != "")
															{
																	echo  $_POST["family_id13"];
															}
															else if($_POST["family_id12"] != "")
															{
																	echo $_POST["family_id12"];
															}
    														else if($_POST["family_id11"] != "")
															{
																	echo  $_POST["family_id11"];
															}
															else if($_POST["family_id10"] != "")
															{
																	echo  $_POST["family_id10"];
															}
															else if($_POST["family_id9"] != "" )
															{
																	echo  $_POST["family_id9"];
															}
															else if($_POST["family_id8"] != "" )
															{
																	echo  $_POST["family_id8"];
															}
															else if($_POST["family_id7"] != "" )
															{
																	echo  $_POST["family_id7"];
															}	
															else	if($_POST["family_id6"] != "" )
															{
																	echo  $_POST["family_id6"];
															}
															else if($_POST["family_id5"] != "")
															{
																	echo  $_POST["family_id5"];
															}
															else if($_POST["family_id4"] != "" )
															{
																	echo $_POST["family_id4"];
															}
															else if($_POST["family_id3"] != "")
															{
																	echo  $_POST["family_id3"];
															}
															else if($_POST["family_id2"] != "" )
															{
																	echo $_POST["family_id2"];
															}																						
															else	if($_POST["family_id1"] !="")
															{
																	echo $_POST["family_id1"];
															}
															else	if($_POST["family_id"] !="")
															{
																echo $_POST["family_id"];
															}
										?>" tabindex="1"/>
										<input disabled type="hidden" class="form-control" name="fid" id="fid" value="<?php echo $_GET["fid"];?>"/>
									</div>
                                </li>
								<li>
									<div class="col-md-12"><label>GUARDIAN 2 FIRST NAME</label>
										<input disabled type="text" class="form-control" name="first_name1" id="first_name1" value="<?php echo $_POST["guardian_2_first_name"];?>" tabindex="5"/>
									</div>
								</li>
								<li>
									<div class="col-md-12"><label>CITY</label>
										<input disabled type="text" class="form-control" name="city" id="city" value="<?php echo  $_POST["city"]; ?>" tabindex="9">
									</div>
								</li>
								<li id="li-status">
									<div class="col-md-12"><label>STATUS</label>
										<select disabled class="form-control" name="status" id="status" tabindex="27">
											<option value="1" <?php if($_POST["status"] == '1') { ?> selected <?php } ?>>Active</option>
											<option value="0" <?php if($_POST["status"] == '0') { ?> selected <?php } ?>>Non Active</option>
										</select>
									</div>
								</li>
							</ul>
				<ul class="family-details">
								<li>
									<div class="col-md-12"><label>ENVELOPE #</label>
										<input disabled type="text" class="form-control" name="envelope_number" id="envelope_number" value="<?php
										
										if($_POST["envelope_number"]!=0)
										{
											echo $_POST["envelope_number"];		
										}
										else
										{
												$_POST["envelope_number"]="";
												echo $_POST["envelope_number"];
										}
										
										
										
										
										
										
										?>" tabindex="2">
									</div>
								</li>
								<li>
									<div class="col-md-12"><label>GUARDIAN 2 LAST NAME</label>
										<input disabled type="text" class="form-control" name="last_name1" id="last_name1" value="<?php echo  $_POST["guardian_2_last_name"]; ?>" tabindex="6">
									</div>
								</li>
								<li>
									<div class="col-md-12"><label>STATE</label>
										<input disabled type="text" class="form-control" name="state" id="state" value="<?php echo  $_POST["state"]; ?>" tabindex="10">
									</div>
								</li>
								<li>
									<div class="col-md-12"><label>EMAIL</label><span style="float: right;"><a id="add-email2">+ Add</a></span>
										<input disabled type="text" class="form-control" name="email1" id="email1" value="<?php echo  $_POST["email1"]; ?>" placeholder= 
										"<?php
										if($_POST["email1"] == "")
										{
												echo "xyz@abc.com";
										}			
										?>" tabindex="22">
									</div>
								</li>
								<li id="li-email2">
									<div class="col-md-12"><label>EMAIL2</label>
										<input disabled type="text" class="form-control" name="email2" id="email2" value="<?php echo  $_POST["email2"]; ?>" placeholder= 
										"<?php
										if($_POST["email2"] == "")
										{
												echo "xyz@abc.com";
										}			
										?>" tabindex="23">
									</div>
								</li>
							</ul>
							<ul class="family-details">	
								<li>
									<div class="col-md-12"><label>GUARDIAN 1 FIRST NAME *</label>
										<input disabled type="text" class="form-control" name="first_name" id="first_name" value="<?php echo  $_POST["guardian_1_first_name"]; ?>" tabindex="3">
									</div>
								</li>
								<li>
									<div class="col-md-12"><label>ADDRESS</label>
										<input disabled type="text" class="form-control" name="address" id="address" value="<?php echo  $_POST["address"]; ?>" tabindex="7"/>
									</div>
								</li>	
								<li>
									<div class="col-md-12"><label>ZIP</label>
										<input disabled type="text" class="form-control" name="zip" id="zip" value="<?php echo  $_POST["zip"]; ?>" tabindex="11">
									</div>
								</li>
								<li>
									<div class="col-md-12"><label>PHONE #</label><span style="float: right;"><a id="add-phone2">+ Add</a></span>
										<input disabled type="text" class="form-control" maxlength="10" name="phone1" id="phone1" value="<?php echo  $_POST["phone1"]; ?>" placeholder= 
										"<?php
										if($_POST["phone1"] == "")
										{
												echo "e.g. 1234567890";
										}			
										?>" tabindex="24">
									</div>
								</li>
								<li id="li-phone2">
									<div class="col-md-12"><label>PHONE2 #</label><span style="float: right;"><a id="add-phone3">+ Add</a></span>
										<input disabled type="text" class="form-control" maxlength="10" name="phone2" id="phone2" value="<?php echo  $_POST["phone2"]; ?>" placeholder= 
										"<?php
										if($_POST["phone2"] == "")
										{
												echo "e.g. 1234567890";
										}			
										?>" tabindex="25">
									</div>
								</li>
								<li id="li-phone3">
									<div class="col-md-12"><label>PHONE3 #</label>
										<input disabled type="text" class="form-control" maxlength="10" name="phone3" id="phone3" value="<?php echo  $_POST["phone3"]; ?>" placeholder= 
										"<?php
										if($_POST["phone3"] == "")
										{
												echo "e.g. 1234567890";
										}			
										?>" tabindex="26">
									</div>
								</li>
							
							</ul>
                            
                            <ul class="family-details">
							<li>
									<div class="col-md-12"><label>GUARDIAN 1 LAST NAME *</label>
										<input disabled type="text" class="form-control" name="last_name" id="last_name" value="<?php echo  $_POST["guardian_1_last_name"]; ?>" tabindex="4">
									</div>
								</li>
								<li>
									<div class="col-md-12"><label>APARTMENT</label>
										<input disabled type="text" class="form-control" name="apartment" id="apartment" value="<?php echo  $_POST["apartment"]; ?>" tabindex="8">
									</div>
								</li>
								<li>
									<div class="col-md-8"><label>CHILD</label><span style="float: right;"><a id="add-child2">+ Add</a></span>
										<input disabled type="text" class="form-control" name="child1" id="child1" value="<?php                                                
                                             if($_POST["child1"] != '')
	                                           {
											
                                                 $s=explode(' ',$_POST["child1"]);
                                                 //$s[0]
											 if($s[0] == $_POST["guardian_1_last_name"])
												{
                                                    echo $s[1];
													//$_POST["child1"]=$s[1];

												}
												else
												{
													echo $_POST["child1"];
												}
	                                           }	
                                                ?>" tabindex="12">
									</div>
									<div class="col-md-4"><label>GRADE</label>
										<input disabled type="text" class="form-control" name="grade1" id="grade1" value="<?php echo $_POST["grade1"];?>" tabindex="13">
									</div>
								</li>
								<li id="li-child2">
									<div class="col-md-8"><label>CHILD2</label><span style="float: right;"><a id="add-child3">+ Add</a></span>
										<input disabled type="text" class="form-control" name="child2" id="child2" value="<?php 
                                                                                                                          
                                        if($_POST["child2"] != '')
	                                           {
											$s1=explode(' ',$_POST["child2"]);
											if($s1[0] == $_POST["guardian_1_last_name"])
												{
													echo $s1[1];

												}
												else
												{
													echo $_POST["child2"];
												}
                                         }
                                            ?>" tabindex="14">
									</div>
									<div class="col-md-4"><label>GRADE2</label>
										<input disabled type="text" class="form-control" name="grade2" id="grade2" value="<?php 
										echo $_POST["grade2"];		
										?>" tabindex="15">
									</div>
								</li>
								<li id="li-child3">
									<div class="col-md-8"><label>CHILD3</label><span style="float: right;"><a id="add-child4">+ Add</a></span>
										<input disabled type="text" class="form-control" name="child3" id="child3" value="<?php if($_POST["child3"] != '')
	                                           {
											$s2=explode(' ',$_POST["child3"]);
											if($s2[0] == $_POST["guardian_1_last_name"])
												{
													echo $s2[1];

												}
												else
												{
													echo $_POST["child3"];
												}
                                      }
                                               
              ?>" tabindex="16">
									</div>
									<div class="col-md-4"><label>GRADE3</label>
										<input disabled type="text" class="form-control" name="grade3" id="grade3" value="<?php 
										
												
												echo $_POST["grade3"];
										
										
										
										
										
										?>" tabindex="17">
									</div>
								</li>
								<li id="li-child4">
									<div class="col-md-8"><label>CHILD4</label><span style="float: right;"><a id="add-child5">+ Add</a></span>
										<input disabled type="text" class="form-control" name="child4" id="child4" value="<?php 
                                            if($_POST["child4"] != '')
	                                           {
											$s3=explode(' ',$_POST["child4"]);
											if($s3[0] == $_POST["guardian_1_last_name"])
												{
													echo $s3[1];

												}
												else
												{
													echo $_POST["child4"];
												}



	                                           }   
                                               
                                 ?>" tabindex="18">
									</div>
									<div class="col-md-4"><label>GRADE4</label>
										<input disabled type="text" class="form-control" name="grade4" id="grade4" value="<?php 
										
										
												
												echo $_POST["grade4"];
										
										
										
										
										?>" tabindex="19">
									</div>
								</li>
								<li id="li-child5">
									<div class="col-md-8"><label>CHILD5</label>
										<input disabled type="text" class="form-control" name="child5" id="child5" value="<?php if($_POST["child5"] != '')
	                                           {
											$s4=explode(' ',$_POST["child5"]);
											if($s4[0] == $_POST["guardian_1_last_name"])
												{
													echo $s4[1];

												}
												else
												{
													echo $_POST["child5"];
												}



	                                           } 
                                   ?>" tabindex="20">
									</div>
									<div class="col-md-4"><label>GRADE5</label>
										<input disabled type="text" class="form-control" name="grade5" id="grade5" value="<?php 
										
										
												
												echo $_POST["grade5"];
										
										
										
										
										 ?>" tabindex="21">
									</div>
								</li>
							</ul>
							
						</form>
											
					</div>
					<!-- /.table-responsive -->
				</div>
				<!-- /.panel-body -->
			</div>
			<!-- /.panel -->
		</div>		
	</div>
    <div class="row">
	
	</div>
	<div class="row editdeletrow">
		<div class="col-md-12">
			<p class="text-center">
				<div id="return-value"></div>
				<input type="button" id="delete-family" class="btn btn-primary button pull-right" style="margin-left: 10px;" value="Delete" tabindex="29"/>
				<input type="submit" id="submit" style="display:none;" class="btn btn-primary button pull-right" value="Save Details" tabindex="28"/>
				<input type="button" id="edit-details" class="btn btn-primary button pull-right" value="Edit Details" />
				<a href="dashboard.php" class="btn btn-primary button pull-right"  style="margin-right: 10px;">Go Back </a>
			</p>
		</div>
	</div>

	<div class="row whitespace">
		&nbsp;
	</div>
	
	<div class="row">
		<div class="col-md-12 comntsabouttwo">

			<div class="col-md-6">
				<div class="panel panel-primary">
					<div class="panel-heading">
						COMMENTS ABOUT TUITION
					</div>

					<!--Comment Section Details-->	
					<form name="" class="form-group">
						<div class="xl-col2-last lg-col3 md-col2 sm-col2 xs-col1 tution-comments">
							<textarea  class="form-control" name="message" id="message" value="" rows="6" maxlength="250" tabindex="30"></textarea>
							<input type="hidden" class="form-control" name="cfid" id="cfid" value="<?php echo $_GET["fid"];?>"/>

							<div class="clear">&nbsp;</div>
							<div class="text-left tution-comments-button">
								<input type="button" class="btn btn-primary pull-right" id="button" value="Add Comment"  title="Visible to Everyone" tabindex="31">
							</div>
						</div>					
					</form>	

					<div id="info" />
					<ul id="comment">
						<?php
							$row_id		= $_GET['fid'];
							$sql 		= "SELECT * FROM comments WHERE intial_call_id ='$row_id' and flag = '0' ORDER BY id DESC";						
							$result 	= mysqli_query($sldb, $sql);
							if($result) {
								$e=0;
								while($row	= mysqli_fetch_array($result)){
									$e++;
									echo "<li>
											
											<div id='div-edit_$e' class='ctime'>
												<a class='cm_action delete_class' act='delete' did='$row[id]'>Delete</a>
												<a class='delete_class edit_class' id='edit_$e' act='edit' did='$row[id]'>Edit</a>			
												<span id='comments-edit_$e'>".$row['comments']."</span><br>
												$row[username] - $row[timestamp]
											</div>

											<div id='message-edit_$e' class='ctime' style='display:none;'>											
												<a class='delete_class cancel_class' id='$e' act='cancel' did='$row[id]'>Cancel</a>
												<a class='delete_class update_class' id='_$e' act='update' did='$row[id]'>Update</a>
												<div class='return-comments' id='return-comment-value_$e'></div>
												<textarea class='form-control' name='edit-message' id='edit-message_$e' maxlength='250'>".$row['comments']."</textarea>
												<input type='hidden' name='comment_id' id='comment_$e' value='".$row['id']."' />
												$row[username] - $row[timestamp]
											</div>

										</li>";
								}
							}
						?>					
					</ul>
				</div>
			</div>
		</div>


		<!-- Comment about Collection Call Log start-->

		<div class="col-md-6">

			<div class="panel panel-primary">
				<div class="panel-heading">
					COMMENTS ABOUT COLLECTION CALL LOG
				</div>

				<!--Comment Section Details-->	
				<form name="online-giving" class="form-group">
					<div class="xl-col2-last lg-col3 md-col2 sm-col2 xs-col1 tution-comments">
						<textarea  class="form-control" name="og-message" id="og-message" value="" rows="6" maxlength="250" tabindex="32"></textarea>
						<input type="hidden" class="form-control" name="og-fid" id="og-fid" value="<?php echo $_GET["fid"];?>"/>

						<div class="clear">&nbsp;</div>
						<div class="text-left tution-comments-button">
							<input type="button" class="btn btn-primary pull-right" id="og-button" value="Add Comment"  title="Visible to Everyone" tabindex="33">
						</div>
					</div>					
				</form>	

				<div id="info" />
				<ul id="comment1">
					<?php
						$row_id		= $_GET['fid'];
						$sql 		= "SELECT * FROM comments WHERE intial_call_id ='$row_id' and flag = '1'  ORDER BY id DESC";						
						$result 	= mysqli_query($sldb, $sql);
						if($result) {
							$e = 1000;
							while($row	= mysqli_fetch_array($result)){
								$e++;
								echo "<li>

										<div id='div-edit_$e' class='ctime'>
											<a class='cm_action delete_class' act='delete1' did='$row[id]'>Delete</a>
											<a class='delete_class edit_class' id='edit_$e' act='edit' did='$row[id]'>Edit</a>			
											<span id='comments-edit_$e'>".$row['comments']."</span><br>
											$row[username] - $row[timestamp]
										</div>

										<div id='message-edit_$e' class='ctime' style='display:none;'>											
											<a class='delete_class cancel_class' id='$e' act='cancel' did='$row[id]'>Cancel</a>
											<a class='delete_class update_class' id='_$e' act='update' did='$row[id]'>Update</a>
											<div class='return-comments' id='return-comment-value_$e'></div>
											<textarea class='form-control' name='edit-message' id='edit-message_$e' maxlength='250'>".$row['comments']."</textarea>
											<input type='hidden' name='comment_id' id='comment_$e' value='".$row['id']."' />
											$row[username] - $row[timestamp]
										</div>


									  </li>";
							}
						}
					?>					
				</ul>
			</div>
		</div>

<!-- Popup for Add Family ID -->
	<form>
							<div class="hover_bkgr_fricc" >
												<span class="helper"></span>
													<div>
															<div class="popupCloseButton">X</div>												  												
															<div ng-app=""><label> Add New Family ID</label>
															<input type="text" ng-model="nam" name="family_id1" id="family_id1" align="left"/><br><br/>	

                                                                <span>New Family ID <p ng-bind="nam"></p></span><br>
                                                                
															<table border="2" align="center" width="100%">
															<th class="headingsr"> Sr. No.</th>
																<th class="headingsr">Previous Family ID</th>
																
																
															
															<?php
																if($_POST["family_id19"] != "")
															{
																	echo '<tr>'.'<td>'. '20)'.'</td>'.'<td id="insrec">'. $_POST["family_id19"]."</td>".'</tr>';
															}
																																					
														
																if($_POST["family_id18"] != "")
															{
																	echo '<tr>'.'<td>'. '19.'.'</td>'.'<td id="insrec">'. $_POST["family_id18"]."</td>".'</tr>';
															}
															
															
															
																											
															
																if($_POST["family_id17"] != "")
															{
																	echo '<tr>'.'<td>'. '18.'.'</td>'.'<td id="insrec">'. $_POST["family_id17"]."</td>".'</tr>';
															}
															
															
															
																if($_POST["family_id16"] != "")
															{
																	echo '<tr>'.'<td>'. '17.'.'</td>'.'<td id="insrec">'. $_POST["family_id16"]."</td>".'</tr>';
															}
															
															
																if($_POST["family_id15"] != "")
															{
																	echo '<tr>'.'<td>'. '16.'.'</td>'.'<td id="insrec">'. $_POST["family_id15"]."</td>".'</tr>';
															}
															
															if($_POST["family_id14"] != "")
															{
																	echo '<tr>'.'<td>'. '15.'.'</td>'.'<td id="insrec">'. $_POST["family_id14"]."</td>".'</tr>';
															}

															if($_POST["family_id13"] != "")
															{
																	echo '<tr>'.'<td>'. '14.'.'</td>'.'<td id="insrec">'. $_POST["family_id13"]."</td>".'</tr>';
															}

															if($_POST["family_id12"] != "")
															{
																	echo '<tr>'.'<td>'. '13.'.'</td>'.'<td id="insrec">'. $_POST["family_id12"]."</td>".'</tr>';
															}

															if($_POST["family_id11"] != "")
															{
																	echo '<tr>'.'<td>'. '12.'.'</td>'.'<td id="insrec">'. $_POST["family_id11"]."</td>".'</tr>';
															}

															if($_POST["family_id10"] != "")
															{
																	echo '<tr>'.'<td>'. '11.'.'</td>'.'<td id="insrec">'. $_POST["family_id10"]."</td>".'</tr>';
															}
															if($_POST["family_id9"] != "")
															{
																	echo '<tr>'.'<td>'. '10.'.'</td>'.'<td id="insrec">'. $_POST["family_id9"]."</td>".'</tr>';
															}
															if($_POST["family_id8"] != "")
															{
																	echo '<tr>'.'<td>'. '9.'.'</td>'.'<td id="insrec">'. $_POST["family_id8"]."</td>".'</tr>';
															}
															if($_POST["family_id7"] != "")
															{
																	echo '<tr>'.'<td>'. '8.'.'</td>'.'<td id="insrec">'. $_POST["family_id7"]."</td>".'</tr>';
															}			
															if($_POST["family_id6"] != "")
															{
																	echo '<tr>'.'<td>'. '7.'.'</td>'.'<td id="insrec">'. $_POST["family_id6"]."</td>".'</tr>';
															}
															if($_POST["family_id5"] != "")
															{
																	echo '<tr>'.'<td>'. '6.'.'</td>'.'<td id="insrec">'. $_POST["family_id5"]."</td>".'</tr>';
															}		

															if($_POST["family_id4"] != "")
															{
																	echo '<tr>'.'<td>'. '5.'.'</td>'.'<td id="insrec">'. $_POST["family_id4"]."</td>".'</tr>';
															}
															if($_POST["family_id3"] != "")
															{
																	echo '<tr>'.'<td>'. '4.'.'</td>'.'<td id="insrec">'. $_POST["family_id3"]."</td>".'</tr>';
															}		

														if($_POST["family_id2"] != "")
															{
																	echo '<tr>'.'<td>'. '3.'.'</td>'.'<td id="insrec">'. $_POST["family_id2"]."</td>".'</tr>';
															}
															if($_POST["family_id1"] != "")
															{
																	echo '<tr>'.'<td>'. '2.'.'</td>'.'<td id="insrec">'. $_POST["family_id1"]."</td>".'</tr>';
															}
                                                                
															if($_POST["family_id"] != "")
															{
																	echo '<tr>'.'<td>'. '1.'.'</td>'.'<td id="insrec">'. $_POST["family_id"]."</td>".'</tr>';
															}		
															?>
													</table><br><br>
														<input type="button" class= "btn btn-primary button pull-right" name="subfamily" id="subfamily" value="Add"/>
														</div>
													</div>
										  </div>
        </form>









		<!-- Comment about Collection Call Log end-->





	</div>
	
		<div class="row">
			<div class="col-md-12">
				<ul id='comment'>
					<?php if( isset($_POST["comment"]) && $_POST["comment"] != ''){ ?>
						<li>
							<div class='ctime'>
							<?php echo isset($_POST["login_name"]) ? $_POST["login_name"] : ''; ?>
							<?php echo ' ';?>
							<?php echo isset($_POST["timestamp"]) ? $_POST["timestamp"] : ''; ?>
							</div>	
							<?php echo isset($_POST["comment"]) ? $_POST["comment"] : ''; ?>
						</li>
					<?php } ?>
				</ul>									
			</div>
		</div>
		<script type="text/javascript">






			$(document).ready(function(){

				$('.cancel_class').click(function(){
					var current_id = this.id;
					var divd = '#div-edit_'+current_id;
					var msgd = '#message-edit_'+current_id;

					$(divd).show();					
					$(msgd).hide();					
				});	

				$('.edit_class').click(function(){
					var current_id = this.id;
					var divd = '#div-'+current_id;
					var msgd = '#message-'+current_id;

					$(divd).hide();					
					$(msgd).show();					
				});		

				$(".update_class").click(function(){
					var current_id		= this.id;
					var textarea_id		= '#edit-message'+this.id;
					var commentid		= '#comment'+this.id;
					var textarea_value	=	$(textarea_id).val();
					var comment_id		=	$(commentid).val();
					var comment_respons = '#return-comment-value'+this.id;

					if( textarea_value == "" ) {					
						alert('Comments cannot be blank!');					
					} else {									
						$.ajax({
							type:"post",
							url:"updateComments.php",
							data:"comments="+textarea_value+"&comment_id="+comment_id,
							success:function(data){						  
								$(comment_respons).html(data);
							}
						});
					}
				});
//$(window).load(function ()
$("#add-family_id1").click(function() {
    //$(".trigger_popup_fricc").click(function(){
       $('.hover_bkgr_fricc').show();
    });
    /*$('.hover_bkgr_fricc').click(function(){
        $('.hover_bkgr_fricc').hide();
    });*/
    $('.popupCloseButton').click(function(){
        $('.hover_bkgr_fricc').hide();
    });










				$('#add-email2').click(function(){
					$('#li-email2').show();
					$('#add-email2').hide();
				});
									
				$('#add-phone2').click(function(){
					$('#li-phone2').show();
					$('#add-phone2').hide();
				});
				
				$('#add-phone3').click(function(){
					$('#li-phone3').show();
					$('#add-phone3').hide();
				});

				$('#add-child2').click(function(){
					$('#li-child2').show();
					$('#add-child2').hide();
				});

				$('#add-child3').click(function(){
					$('#li-child3').show();
					$('#add-child3').hide();
				});

				$('#add-child4').click(function(){
					$('#li-child4').show();
					$('#add-child4').hide();
				});				

				$('#add-child5').click(function(){
					$('#li-child5').show();
					$('#add-child5').hide();
				});

				$('#edit-details').click(function(){
					$('#family_id').prop('disabled', false);
					$('#address').prop('disabled', false);
					$('#zip').prop('disabled', false);
					$('#status').prop('disabled', false);
					$('#envelope_number').prop('disabled', false);
					$('#apartment').prop('disabled', false);
					$('#email1').prop('disabled', false);
					$('#email2').prop('disabled', false);
					$('#first_name').prop('disabled', false);
					$('#first_name1').prop('disabled', false);
					$('#city').prop('disabled', false);
					$('#phone1').prop('disabled', false);
					$('#phone2').prop('disabled', false);
					$('#phone3').prop('disabled', false);
					$('#last_name').prop('disabled', false);
					$('#last_name1').prop('disabled', false);
					$('#state').prop('disabled', false);
					$('#child1').prop('disabled', false);
					$('#grade1').prop('disabled', false);
					$('#child2').prop('disabled', false);
					$('#grade2').prop('disabled', false);
					$('#child3').prop('disabled', false);
					$('#grade3').prop('disabled', false);
					$('#child4').prop('disabled', false);
					$('#grade4').prop('disabled', false);
					$('#child5').prop('disabled', false);
					$('#grade5').prop('disabled', false);

					$('#submit').show();
					$('#li-status').show();
					$('#add-family_id1').show();	
					$('#add-email2').show();
					$('#add-phone2').show();
					$('#add-phone3').show();
					$('#add-child2').show();
					$('#add-child3').show();
					$('#add-child4').show();
					$('#add-child5').show();
					$('#edit-details').hide();

			









				});

				$("#submit").click(function(){
                    
                    var fid		=	$("#fid").val();
                    
					var family_id		=	$("#family_id").val();
					var address			=	$("#address").val();
					var zip				=	$("#zip").val();
					var envelope_number	=	$("#envelope_number").val();
					var apartment		=	$("#apartment").val();
					var email1			=	$("#email1").val();
					var email2			=	$("#email2").val();
					var first_name		=	$("#first_name").val();
					var first_name1		=	$("#first_name1").val();
					var city			=	$("#city").val();
					var phone1			=	$("#phone1").val();
					var phone2			=	$("#phone2").val();
					var phone3			=	$("#phone3").val();
					var last_name		=	$("#last_name").val();
					var last_name1		=	$("#last_name1").val();
					var state			=	$("#state").val();
					var child1			=	$("#child1").val();
					var grade1			=	$("#grade1").val();
					var child2			=	$("#child2").val();
					var grade2			=	$("#grade2").val();
					var child3			=	$("#child3").val();
					var grade3			=	$("#grade3").val();
					var child4			=	$("#child4").val();
					var grade4			=	$("#grade4").val();
					var child5			=	$("#child5").val();
					var grade5			=	$("#grade5").val();					
					var status			=	$("#status").val();					
					var fid				=	$("#fid").val();					
					var zpno = /^[0-9]*$/;
					var phoneno = /^\d{10}$/;
					var em= /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;

					if( family_id == "" && address == "" && zip == "" && envelope_number == "" && apartment == "" && email1 == "" && email2 == "" && first_name == "" && first_name1 == "" && city == "" && phone1 == "" && phone2 == "" && phone3 == "" && last_name == "" && last_name1 == "" && state == "" && child1 == "" && child2 == "" && child3 == "" && child4 == "" && child5 == "" && grade1 == "" && grade2 == "" && grade3 == "" && grade4 == "" && grade5 == "" ) {
					
						alert('All fields cannot be blank!');
					
					}else if(first_name == "")
						{
							alert('Please enter guardian 1 first name');				
						}
						else if(last_name == "")
						{
							alert('Please enter guardian 1 last name');				
						}
					else if(zip != "" && !zip.match(zpno))
						{
							alert('Please enter a valid zip code');
						}
						else if(child1 != "" && grade1=="")
						{
							alert('Please enter grade for child 1')
						}
						else if(child2 != "" && grade2=="")
						{
							alert('Please enter grade for child 2')
						}
						else if(child3 != "" && grade3=="")
						{
							alert('Please enter grade for child 3')
						}
						else if(child4 != "" && grade4 =="")
						{
							alert('Please enter grade for child 4')
						}
						else if(child5 != "" && grade5=="")
						{
							alert('Please enter grade for child 5')
						}
						else if(email1 !="" && !email1.match(em))
						{
							alert('Please enter valid email');				
						}else if(email2 !="" && !email2.match(em))
						{
							alert('Please enter valid email 2');				
						}
						else if(phone1 != "" && !phone1.match(phoneno))
						{
							alert('Please enter valid phone number');				
						}	
						else if(phone2 != "" && !phone2.match(phoneno))
						{
							alert('Please enter valid phone number 2');				
						}
						else if(phone3 != "" && !phone3.match(phoneno))
						{
							alert('Please enter valid phone number 3');				
						}
						else {			
						
						$.ajax({
							type:"post",
							url:"processFamily.php",
							data:"&family_id="+family_id+"&address="+address+"&zip="+zip+"&envelope_number="+envelope_number+"&apartment="+apartment+"&email1="+email1+"&email2="+email2+"&first_name="+first_name+"&first_name1="+first_name1+"&city="+city+"&phone1="+phone1+"&phone2="+phone2+"&phone3="+phone3+"&last_name="+last_name+"&last_name1="+last_name1+"&state="+state+"&child1="+child1+"&grade1="+grade1+"&child2="+child2+"&grade2="+grade2+"&child3="+child3+"&grade3="+grade3+"&child4="+child4+"&grade4="+grade4+"&child5="+child5+"&grade5="+grade5+"&fid="+fid+"&status="+status,
							success:function(data){						  
								$("#return-value").html(data);
							}
						});

					}
				});

			$("#button").click(function(){
					var cfid		=	$("#cfid").val();
					var message		=	$("#message").val().trim();					

					if( message == ""){
						alert('Please Enter Some Comment');
					} else {					
						$.ajax({
							type:"post",
							url:"process.php",
							data:"cfid="+cfid+"&message="+message+"&action=addcomment&flag=0",
							success:function(data){						  
								$("#comment").html(data);
								$("#message").val('');
                                
                                setInterval(function() {
                                    
                                    $(".success_msg").hide()
                                },3000);
                                
                                
                                
								//window.location.reload();
							}
						});
					}
				});

$("#subfamily").click(function()
	{


		var fid		=	$("#fid").val();
		var family_id1		=	$("#family_id1").val();
			if( family_id1 == "")
				{
					alert('Please enter new Family ID');
				}
                else    
				{
				$.ajax({
					type:"post",
					url:"addfamilyid.php",
					data:"&fid="+fid+"&family_id1="+family_id1,
					success:function(data)
						{
						alert('New Family ID inserted successfully');
								$("#insrec").val(data);		
								$("#family_id").val(data);
								$(".hover_bkgr_fricc").hide();
						
								//$("#family_id").val('');	
						}
					});
					
                }
});





				$("#og-button").click(function(){
					var cfid		=	$("#og-fid").val();
					var message		=	$("#og-message").val().trim();					

					if( message == ""){
						alert('Please Enter Some Comment');
					} else {					
						$.ajax({
							type:"post",
							url:"process.php",
							data:"cfid="+cfid+"&message="+message+"&action=add-og-comment&flag=1",
							success:function(data){						  
                                $("#comment1").html(data);
								$("#og-message").val('');
                                setInterval(function() {
                                    
                                    $(".success_msg").hide()
                                },3000);
                                
                                
                                
                                //$("#comment1").hide(data);
								//window.location.reload();
							}
						});
					}
				});

				$("#delete-family").click(function(){
					var r = confirm("Are you sure you want to delete this record?");
					if (r == true) {
						$(location).attr('href', 'deleteFamily.php?action=delete&fid=<?php echo $fid; ?>');
					}					
				});
				
				$("#buttonPriestPrivateID").click(function(){
					var row_id		=	$("#row_id").val();
					var message		=	$("#message").val().trim();	
					var flag		=	1;									
					if( message == ""){
						alert('Please Enter Some Comment');
					}
					else
					{						
						$.ajax({
							type:"post",
							url:"process.php",
							data:"row_id=<?php echo get_Id_By_Md5($sldb, $_GET['fid']); ?>&message="+message+"&action=addcomment"+"&flag="+flag,
							success:function(data){						  
								$("#comment").html(data);
								$("#message").val('');
								window.location.reload();
							}
						});
					}
				});
				
				
				$(document).on('click', 'a.cm_action', function(){
					var action 		= $(this).attr('act');
					var id 			= $(this).attr('did');
					var data 		= "row_id=<?php echo get_Id_By_Md5($sldb, $_GET['fid']); ?>&action="+action+"&id=" + id;
					
					if(action=='delete'){
						if (confirm("Are you sure you want to delete this comment?")){
							$.ajax(
							{
								type: "POST",
								url: "process.php",
								data: data,
								cache: false,
								success: function(data)
								{
									$("#comment").html(data);
									$("#message").val('');
									window.location.reload();
								}
							});
						}
					}else if(action=='delete1') {
						if (confirm("Are you sure you want to delete this comment?")){
							$.ajax(
							{
								type: "POST",
								url: "process.php",
								data: data,
								cache: false,
								success: function(data)
								{
									$("#comment1").html(data);
									$("#message").val('');
									window.location.reload();
								}
							});
						
						}
					}


				});
			});
		</script>
	</div>
</div>
</div>
</div>
</div>
<?php include 'footer.php'; ?>	
</body>

</html>
