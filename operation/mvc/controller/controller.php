<?php
require_once("model/model.php");

class controller extends model 
{

   public function __construct()
   {

       parent ::__construct();

       if(isset($_POST["submit"]))
       {
        
         $name=$_POST["t1"];
         $age=$_POST["t2"];
         $data=array("name"=>$name,"age"=>$age);
         $chk=$this->adddata('adddata',$data);
         if($chk)
         {

            echo "<script>
            alert('you data successfully add')
            window.location='./';
            </script>";
         }
   
       }
       $shw=$this->showalldata('adddata');
        
       // delete data logic
       
       if(isset($_GET["deleteid"]))
       {
        $deleteid=$_GET["deleteid"];
        $id=array("id"=>$deleteid);
        $del=$this->deletedata('adddata',$id);
        if($del)
        {
            echo "<script>
            alert('Task Deleted successfully')
            window.location='./';
            </script>";
        }

       }

       //edit

      if(isset($_GET["editid"]))
      {
            $editid=$_GET["editid"];
         echo   $editdata=$this->editdata('adddata','id',$editid); exit();
      }
      
       if(isset($_SERVER["PATH_INFO"]))
       {
                switch($_SERVER["PATH_INFO"])
                {

                  case '/':
                        require_once('index.php');
                        require_once('content.php');
                        break;

                  case '/edittask.php':
                        require_once('index.php');
                        require_once('edittask.php');
                        break;

                  default :
                         require_once('index.php');
                         require_once('404.php');
                         break;

                }
         
       }
 


   }


}

$obj=new controller;
