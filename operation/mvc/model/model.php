<?php
class model 
{
    public $conn="";
    public function __construct()
    {

         try {
  
                $this->conn=new mysqli("localhost","root","","mvcdata");

         }
         catch(Exception $e)
         {
             die(mysqli_error($this->conn,$e));
         }

    


    }

//add data logic
public function adddata($table,$data)
{
   $key=array_keys($data);
   $key1=implode(",",$key);

   $value=array_values($data);
   $value1=implode("','",$value);

   $insert="insert into $table($key1) values ('$value1')"; 
   $query=mysqli_query($this->conn,$insert);
   return $query;

}
// show data logic
public function showalldata($table)
{
    $select="select * from ($table)";
    $query=mysqli_query($this->conn,$select);
    while($fetch=mysqli_fetch_array($query))
    {
        $arr[]=$fetch;
    }
    return $arr;
}

// delete data logic
public function  deletedata($table,$id)
{
   $key=array_keys($id);
   $key1=implode(",",$key);
   $value=array_values($id);
   $value1=implode("','",$value);
   $delete="delete from $table where $key1='$value1'";  
   $query=mysqli_query($this->conn,$delete);
   return $query;

} 

public function editdata($table,$column,$id)
{
   $select="select * from $table where $column='$id'"; exit();
    $query=mysqli_query($this->conn,$select);
    $fetch=mysqli_fetch_array($query);
    $arr[]=$fetch;
    return $arr;

}




}