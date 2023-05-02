
                                                          

<?php 
include '../../sessions.php';
$dept=$_POST['DepartmentId'];
$yr=$_POST['year'];


     ?>                                
                                                          <option value="">--Search Objective--</option>
																<?php
																$sql="SELECT * FROM `objectives` INNER JOIN `department` ON `objectives`.`Department`=`department`.`Id` WHERE Department=:dept and `year`=:yr";
																 $stmt = $conn2->prepare($sql);
																
																$stmt->bindParam(":dept",$dept);
																$stmt->bindParam(":yr",$yr);
																$stmt->execute();
																
																while($rows = $stmt->fetch()){
																?>
																
																<option value="<?php echo $rows['Objective_id']; ?>" ><?php echo $rows['ObjectiveDescription']; ?> -  <?php echo $rows['Name']; ?> </option>
																<?php } ?>


																