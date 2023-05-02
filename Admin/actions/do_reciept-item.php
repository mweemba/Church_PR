<?php

include '../../sessions.php';
include '../Get_invoice_id.php';
include 'get_account.php';
$memberid = $_POST['member1'];
$category = $_POST['cateogryId'];
$Type = $_POST['Type_id'];
$dept = $_POST['dept'];
$amount = $_POST['amount'];
$naration = $_POST['narariont'];
$dateTime =  date("Y-m-d H:i:sa");
$church = 'Kamwala';
$district = 'Kamwala';
$recieptID="";

$tithe=0.00;
$ZBU=0.00;
$SID=0.00;
$GC=0.00;
$Conference_fund=0.00;
$District_fund=0.00;
$LCB=0.00;

$account=$_POST['acc_number'];
$sub_account=$_POST['sub_accoun_number'];
//accounts
$Union=getAccount('Union');
$division=getAccount('Division');
$gc=getAccount('Union');
$Conference=getAccount('Conference');
$District=getAccount('District');
$Local=getAccount('LCB');

$Thanks_Giving=0.00;
$Department_fund=0.0;
$Campmeetin_offering=0.00;




if($Type==3 OR $type==5){
$Department_fund=$amount;
}

if($Type==2){
	$Thanks_Giving=$amount;
}

if($Type==4){
	$Campmeetin_offering=$amount;
}

if($Type==6){

    $ZBU=$amount*0.05;
$SID=$amount*0.05;
$GC=$amount*0.20;
$Conference_fund=$amount*0.20;

$LCB=$amount*0.50;
$District_fund=$LCB*$District_allocation;

$LCB=$LCB-$District_fund;
	}

	if($Type==1){
		$tithe=$amount;
	}
$tran_date=DATE("Y-m-d");
$tran_time =  date("H:i:sa");


if(isset($_SESSION['reciept'])){
	
	$recieptID=$_SESSION['reciept'];
	$transactionID=getTransactionId();

	
	 $sql="INSERT INTO `transaction`(`transactionID`, `recieptID`, `IDnumber`, `type`, `Category`, `receiving_entity_id`,`sub_account`, `date`, `Amount`, `Naration`, `church`, `District`) VALUES
 ('$transactionID','$recieptID','$memberid','$Type','$category','$dept',0,'$dateTime','$amount','$naration','$church','$district');
 UPDATE `Reciept_Alocation` SET `Tithe`=`Tithe`+$tithe,`LCB`=`LCB`+$LCB,`Lusaka Conference`=`Lusaka Conference`+$Conference_fund,`ZBUC`=`ZBUC`+$ZBU,`SID`=`SID`+$SID,`GC`=`GC`+$GC,`Thanks Giving`=`Thanks Giving`+$Thanks_Giving,`Special Project`=`Special Project`+$Department_fund,`campmeetin_offering`=`campmeetin_offering`+$Campmeetin_offering,`District_fund`=`District_fund`+$District_fund WHERE `receipt_no`='$recieptID';";
 if($Type==6){
 	
$s3="INSERT INTO `account_reciepts_tran`(`item_id`, `reciept_number`, `member_id`, `accont_id`, `sub_account_id`, `amount`, `date_time`, `tran_id`) VALUES (0,'$recieptID','$memberid','$Union',0,'$ZBU','$dateTime','$transactionID');
INSERT INTO `account_reciepts_tran`(`item_id`, `reciept_number`, `member_id`, `accont_id`, `sub_account_id`, `amount`, `date_time`, `tran_id`) VALUES (0,'$recieptID','$memberid','$division',0,'$SID','$dateTime','$transactionID');
INSERT INTO `account_reciepts_tran`(`item_id`, `reciept_number`, `member_id`, `accont_id`, `sub_account_id`, `amount`, `date_time`, `tran_id`) VALUES (0,'$recieptID','$memberid','$gc',0,'$GC','$dateTime','$transactionID');
INSERT INTO `account_reciepts_tran`(`item_id`, `reciept_number`, `member_id`, `accont_id`, `sub_account_id`, `amount`, `date_time`, `tran_id`) VALUES (0,'$recieptID','$memberid','$Conference',0,'$Conference_fund','$dateTime','$transactionID');
INSERT INTO `account_reciepts_tran`(`item_id`, `reciept_number`, `member_id`, `accont_id`, `sub_account_id`, `amount`, `date_time`, `tran_id`) VALUES (0,'$recieptID','$memberid','$District',0,'$District_fund','$dateTime','$transactionID');
INSERT INTO `account_reciepts_tran`(`item_id`, `reciept_number`, `member_id`, `accont_id`, `sub_account_id`, `amount`, `date_time`, `tran_id`) VALUES (0,'$recieptID','$memberid','$Local',0,'$LCB','$dateTime','$transactionID');";
 $sql=$sql.$s3;
	}
	if($Type==1){
	$s2="INSERT INTO `account_reciepts_tran`(`item_id`, `reciept_number`, `member_id`, `accont_id`, `sub_account_id`, `amount`, `date_time`, `tran_id`) VALUES (0,'$recieptID','$memberid','$Conference',0,'$amount','$dateTime','$transactionID');";
$sql=$sql.$s2;
	}
	if($Type==3 OR $Type==5){
	$s1="INSERT INTO `account_reciepts_tran`(`item_id`, `reciept_number`, `member_id`, `accont_id`, `sub_account_id`, `amount`, `date_time`, `tran_id`) VALUES (0,'$recieptID','$memberid','$account','$sub_account','$amount','$dateTime','$transactionID');";
$sql=$sql.$s1;
	}

 
 if($conn->multi_query($sql)){ 
	echo 'success'; 
 }else{
	 echo 'Something went wrong! The transaction was not posted';
	 
 }
	
	
  
 	
}else{
	$recieptID=getRecieptId(); 

$transactionID=getTransactionId();

$sql="INSERT INTO `transaction`(`transactionID`, `recieptID`, `IDnumber`, `type`, `Category`, `receiving_entity_id`, `sub_account`,`date`, `Amount`, `Naration`, `church`, `District`) VALUES
 ('$transactionID','$recieptID','$memberid','$Type','$category','$dept',0,'$dateTime','$amount','$naration','$church','$district');
 INSERT INTO `reciept`(`recieptID`, `Date`,`memberID`,`recieptedby`) VALUES ('$recieptID','$dateTime','$memberid','$username');
 INSERT INTO `Reciept_Alocation`(`Allocation_id`, `receipt_no`, `Tithe`, `LCB`, `Lusaka Conference`, `ZBUC`, `SID`, `GC`, `Thanks Giving`, `Special Project`, `campmeetin_offering`, `District_fund`) VALUES ('','$recieptID','$tithe','$LCB','$Conference_fund','$ZBU','$SID','$GC','$Thanks_Giving','$Department_fund','$Campmeetin_offering','$District_fund');";
  if($Type==6){
 	
$s="INSERT INTO `account_reciepts_tran`(`item_id`, `reciept_number`, `member_id`, `accont_id`, `sub_account_id`, `amount`, `date_time`, `tran_id`) VALUES (0,'$recieptID','$memberid','$Union',0,'$ZBU','$dateTime','$transactionID');
INSERT INTO `account_reciepts_tran`(`item_id`, `reciept_number`, `member_id`, `accont_id`, `sub_account_id`, `amount`, `date_time`, `tran_id`) VALUES (0,'$recieptID','$memberid','$division',0,'$SID','$dateTime','$transactionID');
INSERT INTO `account_reciepts_tran`(`item_id`, `reciept_number`, `member_id`, `accont_id`, `sub_account_id`, `amount`, `date_time`, `tran_id`) VALUES (0,'$recieptID','$memberid','$gc',0,'$GC','$dateTime','$transactionID');
INSERT INTO `account_reciepts_tran`(`item_id`, `reciept_number`, `member_id`, `accont_id`, `sub_account_id`, `amount`, `date_time`, `tran_id`) VALUES (0,'$recieptID','$memberid','$Conference',0,'$Conference_fund','$dateTime','$transactionID');
INSERT INTO `account_reciepts_tran`(`item_id`, `reciept_number`, `member_id`, `accont_id`, `sub_account_id`, `amount`, `date_time`, `tran_id`) VALUES (0,'$recieptID','$memberid','$District',0,'$District_fund','$dateTime','$transactionID');
INSERT INTO `account_reciepts_tran`(`item_id`, `reciept_number`, `member_id`, `accont_id`, `sub_account_id`, `amount`, `date_time`, `tran_id`) VALUES (0,'$recieptID','$memberid','$Local',0,'$LCB','$dateTime','$transactionID');";
 $sql=$sql.$s;
	}
	if($Type==1){
	$s3="INSERT INTO `account_reciepts_tran`(`item_id`, `reciept_number`, `member_id`, `accont_id`, `sub_account_id`, `amount`, `date_time`, `tran_id`) VALUES (0,'$recieptID','$memberid','$Conference',0,'$amount','$dateTime','$transactionID');";
$sql=$sql.$s3;
	}
	if($Type==3 OR $Type==5){
	$s2="INSERT INTO `account_reciepts_tran`(`item_id`, `reciept_number`, `member_id`, `accont_id`, `sub_account_id`, `amount`, `date_time`, `tran_id`) VALUES (0,'$recieptID','$memberid','$account','$sub_account','$amount','$dateTime','$transactionID');";
$sql=$sql.$s2;
	}
 if($conn->multi_query($sql)){
   
  echo 'success';
    	$_SESSION['reciept']=$recieptID;
        		
}else {
	echo 'Something went wrong! The transaction was not posted1';
	
}

	
}


 ?>