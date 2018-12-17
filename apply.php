<?php

include("menu.php");
?>


        <section id="footer_widget" class="footer_widget">
            <div class="container">
                <div class="row">
                    <div class="footer_widget_content">
                       <br /><br /><br /><br /><br /><br />
                        <?php include("leftmenu.php")?>
                        <div class="col-md-8">
                            <div class="single_widget wow fadeIn">
                                <h3>FILL IN APPLICATION FORM</h3>

                                <div class="single_widget_form text-left">
                                    <form action=" " id="formid" method="post" enctype="multipart/form-data">
									
                                        <div class="form-group">
										<h5>FULL NAME</h5>
                                            <input type="text" class="form-control" name="name" placeholder="full names" required="">
                                        </div>
										
										 <div class="form-group">
										 <h5>NATIONALITY</h5>
                                            <input type="text" class="form-control" name="nationality" placeholder="nationality" required="">
                                        </div>

										 <div class="form-group">
										 <h5>PHONE NUMBER</h5>
                                            <input type="text" class="form-control" name="phonenumber" placeholder="phone Number" required="">
                                        </div>
										
                                        <div class="form-group">
										<h5>EMAIL</h5>
                                            <input type="email" class="form-control" name="email" placeholder="Email" required="">
                                        </div>
										
										 <div class="form-group">
										 <h5>UPLOAD RESULTS</h5>
                                             <input type="file"  class="form-control" name="results" placeholder="results" />
                                         </div>
										
										 <div class="form-group">
										 <h5>FORMER SCHOOL ADDRESS</h5>
                                            <input type="text" class="form-control" name="formerschool" placeholder="former school" required="">
                                        </div>
										 <div class="form-group">
                                          <font color="black"> select prefered course:</font>
										   <select name="bsc">
											  <option>computer science <option>
											   <option>mass communication <option>
											    <option>power engineering <option>
												 <option>physiotherapy  <option>
												  <option>clinic officing <option>
												   <option>nursing<option>
												    <option> journalism<option>
													 <option>philosophy<option>
													  <option>mathematics and statistics <option>
													    <option>economics <option>
										
											</select>
                                        </div>
										

                                      <!-- end of form-group -->

                                        <div class="form-group">
										<h5>ADDITIONAL INFORMATION</h5>
                                            <textarea class="form-control" name="message" rows="2" placeholder="additional neccessary information ex: are you handicapped or <br /> do you have spectial needs plus write it all here"></textarea>
                                        </div>

                                        <input type="submit" name="submit" value="SUBMIT APPLICATION" class="btn btn-primary">
										
										 <?php   
										   if($_POST['submit'])
											   
										   {$name=$_POST['name'];
									        $nationality=$_POST['nationality'];
											$phonenumber=$_POST['phonenumber'];
											$email=$_POST['email'];
											$bsc=$_POST['bsc'];
										    $target="assets/images/".basename($_FILES['results']['name']);
											$results=$_FILES['results']['name'];
										    $status="applicant";
											 
											     if(!empty($name && $phonenumber && $bsc))
												 {$command=mysqli_query($connection,"INSERT into student(student_name,course,phonenumber,email,nationality,status,results) 
											                                                              VALUES('$name','$bsc','$phonenumber','$email','$nationality','$status','$results')");
															
															  if(move_uploaded_file($_FILES['results']['tmp_name'],$target)){echo "results uploaded";}else{echo "results not uploaded";}
															if($command){echo "you have successfuly applied for \" $bsc \" at KITWE BOYS SECONDARY SCHOOL";}
             												          else{echo "sorry there was a problem with your application please review your details".mysqli_error($connection);}
  																	  
													 
													 
													 
													 
												 }
											 
											
											   
											   
											   
											   
										   }
										 
										 
										 
										 ?>
                                    </form>	
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>