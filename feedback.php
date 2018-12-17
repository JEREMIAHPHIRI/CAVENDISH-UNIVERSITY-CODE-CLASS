<?php

include("menu.php");
?>

<BR /><BR /><BR /><BR /><BR /><BR />
        <section >
            <div class="container">
                <div class="row">
                   
                      	 <?php include("leftmenu.php")?>
                        <div class="col-md-8">
                            <div class="single_widget wow fadeIn">
								<p>
									<h5>COMPLAINTS BY STUDENTS</h5>
<marquee scrollamount=5 direction="up"behavior="slide"><img src="assets/images/KITWE BOYS-zambia-complaints.jpg"></marquee>


The SECONDARY SCHOOL has established the following policies to support members of staff to resolve legitimate complaints that cannot be resolved informally.

<h5>POLICIES</h5>

Grievance Procedures
Whistle-blowing

<h5>PROCEDURES<h5>

Please refer to the relevant policy and procedure for advice on how to make a complaint or report a grievance.

COMPLAINTS BY THE COMMUNITY

Members of the external community may address issues of concern in writing to:

EHS Officer

KITWE BOYS SECONDARY SCHOOL Zambia

Corner of Great North and Washama road

Villa Elizabeth,

Lusaka, Zambia.

complaints@KITWE BOYS.co.zm</p>
                                <h3><center>please write us you compalaint</center></h3>

                              
                                    <form action=" " id="formid" method="post">
									
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="name" placeholder="full names" required="">
                                        </div>
									
                                        <div class="form-group">
                                            <input type="email" class="form-control" name="email" placeholder="Your Email" required="">
                                        </div>
										
										 <div class="form-group">
                                            <input type="text" class="form-control" name="formerschool" placeholder="former school" required="">
                                        </div>
						                  <div class="form-group">
                                            <textarea class="form-control" name="message" rows="10" placeholder="write us here"></textarea>
                                        </div>

                                        <input type="submit" name="submit" value="SUBMIT APPLICATION" class="btn btn-primary">
										
										 <?php   
										   if($_POST['submit'])
											   
										   {$name=$_POST['name'];
									       $email=$_POST['email'];
										    $message=$_POST['message'];
											$status="complaint";
											 
											     if(!empty($name && $phonenumber && $bsc))
												 {$command=mysqli_query($connection,"INSERT into student(student_name,course,phonenumber,email,nationality,status) 
											                                                              VALUES('$name','$bsc','$phonenumber','$email','$nationality','$status')");
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
        </section>