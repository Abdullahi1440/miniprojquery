<?php
header("Contenttype:application/json");
include "conn.php";
//function read all
//insert function
//update function 
//delete function
$action  =$_POST['action'];
function readall($conn){
    $data=Array();
    $message=Array("status" =>true);
    //display 
    $query ="SELECT * FROM student";
    //execute query
  $result =$conn->query($query);
  if($result){
    while($row=$result->fetch_assoc()){
        $data []=$row;
      
      
    }
      //execuse or error
    $message=array("status"=>true , "data"=>$data);

  }else{
    //error display 
    $message=array("status"=>false ,"data"=>$conn->error);

  }

echo json_encode($message);
}
$data =array();
function registration($conn){
  $id=$_POST['id'];
  $name=$_POST['name'];
  $class=$_POST['class'];
  $query="INSERT INTO  student(Id , name , class ) values('$id' , '$name' , '$class' )";
  $result=$conn->query($query);
  if($result){
    $data=array("status"=>true , "data"=>"registered successfully");

  }else{
    $data=array('status'=>false , "data"=>$conn->error);
  }
  echo json_encode($data);

  
}
if(isset($action)){
  $action($conn);
}else{
  echo"action is required ";
}

?>