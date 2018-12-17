 
 <?php

include("menu.php");
?>
 
 
 
        <section id="abouts" class="abouts">
	
            <div class="container">
                <div class="row">
                    <div class="abouts_content">
                                     
         
                        
									 <?php include("leftmenu.php")?>
                                

                            
						
						<!-------------------------------------------------------------------------------->
                   
                             <div class="col-md-8 col-mb-4">
                            <div class="single_abouts_text">
							<br /> <br /> <br />
							<form method="post" action=" " enctype="multipart/form-data">
							
                                <h4>APPLICANTS </h4>
								<ol>
								    <?php
									 if($id=$_GET['ID'])
									 {
									 $command="select * from student WHERE ID=$id";
									        $commandresult=mysqli_query($connection,$command);
									          while($fetch=mysqli_fetch_array($commandresult)){ 
											  echo " ","<br /> NAME: ", $fetch['student_name']," ",
											  " <br />NATIONALITY: ", $fetch['nationality']," ",$fetch['results'],
											  " ","<br />COURSE: " ,$fetch['course'],
											   " ","<br />CONTACT: " ,$fetch['email'],
											    " ","<br />CONTACT: " ,$fetch['phonenumber'];
										 
										}
										
									 }
									?>
								
								
								
								</ol>
							
                                <input type='submit' name="admitted" class="btn btn-primary" value="ADMIT"></input>
								<?php
								
								if($_POST["admitted"]){
									
									if($id=$_GET['ID']){
									$admit=$_POST['admit'];
									$command="UPDATE student set status='admitted' where ID=$id";
									  $query=mysqli_query($connection,$command);
									    if($query){
											
											echo "it has queried";
										}
								else{echo "it has not updated".mysqli_error($connection);}
									 
									
									
									}	
								}



									?>
								</form>

                            </div>
                        </div>










<!------------------------------------------------------------------------------------------------------------------------------------------------->				   
	
                    </div>
                </div>
            </div>
        </section>
 <!---------------------------------------------------------------------------------------->
 
 