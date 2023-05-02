
                                                          <option value="">--Search Budget_Line--</option>

<?php 
include '../../sessions.php';
$dept=$_POST['DepartmentId'];
$year=$_POST['year'];

                                     
$sql="SELECT * FROM `budget_item`  INNER JOIN `department` ON `department`.`Id`=`budget_item`.`Budget`  INNER JOIN `budget` ON  `budget`.`Department_id`=`department`.`Id` WHERE `budget`.`YEAR`=:year  AND `department`.`Id`=:dept ";
															 $stmt = $conn2->prepare($sql);
															 $stmt->bindParam(":dept",$dept);
															 $stmt->bindParam(":year",$year);
													$stmt->execute();
													             
											while($rows = $stmt->fetch()){
											
																?>

																
																<option value="<?php echo $rows['Budget_Line']; ?>" ><?php echo $rows['Description']; ?> - <?php echo $rows['Name']; ?> <?php echo $rows['year']; ?> </option>
																
																<?php }  ?>


																