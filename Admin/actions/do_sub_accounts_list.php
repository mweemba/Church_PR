<?php 
include '../../sessions.php';
$account_id=$_POST['account_id'];


$sql="SELECT `sub_id`, `sub_account_name`, `description`, `accoun_id`, `status` FROM `subaccounts` WHERE `accoun_id`=:account_id";
															 $stmt = $conn2->prepare($sql);
															 $stmt->bindParam(":account_id",$account_id);
													$stmt->execute();
													             echo '<option value="">--Select Sub Account--</option>';
														        echo '<option value="">Nil</option>';
											while($rows = $stmt->fetch()){
											
																?>

																
																<option value="<?php echo $rows['sub_id']; ?>"><?php echo $rows['sub_account_name']; ?> </option>
																
																<?php }  ?>