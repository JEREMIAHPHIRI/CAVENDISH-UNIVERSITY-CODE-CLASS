 
 <?php

include("menu.php");
?>
 
 
 
        <section id="abouts" class="abouts">
	
            <div class="container">
                <div class="row">
                    <div class="abouts_content">
                                     
         
                        
									 <?php //include("leftmenu.php")?>
                                

                            
						
						<!-------------------------------------------------------------------------------->
                   
                             <div class="col-md-12 col-mb-12">
                           
							<br /> <br /> <br />
                                <h4>APPLICANTS </h4>
								<ol>
								    <?php
									 
									 $command="select * from student WHERE status='applicant'";
									        $commandresult=mysqli_query($connection,$command);
									          while($fetch=mysqli_fetch_array($commandresult)){ 
											  echo "<a href='display.php?ID={$fetch['ID']}'>"," ", $fetch['student_name']," ", $fetch['nationality'],"</a><br />";
											//echo "<li>",$fetch['student_name']," ","|"," ","COURSE:",$fetch['course'], "</li>";
											
											
										}
										
									
									?>
								
								
								
								</ol>
                                <a href="apply.php" class="btn btn-primary">APPLY</a>

                            </div>
                        </div>










<!------------------------------------------------------------------------------------------------------------------------------------------------->				   
	
                    </div>
                </div>
            </div>
        </section>
 <!---------------------------------------------------------------------------------------->
 
 