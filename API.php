<?php
header("Content-type:application/json");
include"conn.php";
//function read all
//insert function
//update function 
//delete function
$action=$_POST['action'];
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
if(isset($action)){
  $action($conn);
}else{
  echo"action is required ";
}

?>