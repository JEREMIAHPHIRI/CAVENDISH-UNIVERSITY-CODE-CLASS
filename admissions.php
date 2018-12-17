 
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
                                <h4>Admitted Applicants </h4>
								<ol>
								    <?php
									
									 $command="select * from student WHERE status='admitted'";
									        $commandresult=mysqli_query($connection,$command);
									          while($fetch=mysqli_fetch_array($commandresult)){
											
											echo "<hr /><li><font color='green'><h4>",$fetch['student_name'],"</font></h4> "," ",$fetch['course'],"</li>";
											
											
										}
									
									?>
								
								
								
								</ol>
                                
<hr /> <hr/><H6>YOU DIDNT GET ACCEPTED? PLEASE REAPPLY WITH BETTER CREDENTIALS</H6>
                                <a href="apply.php" class="btn btn-primary">RE APPLY</a>
                            </div>
                        </div>










<!------------------------------------------------------------------------------------------------------------------------------------------------->				   
	
                    </div>
                </div>
            </div>
        </section>
 <!---------------------------------------------------------------------------------------->
 
 