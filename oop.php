<?php




class hospital{



  public $name;
  protected $password;
  protected $email;
  protected $national_id;


}


class admin extends hospital{


 
  function __construct($password){
    $this-> password=$password;
   }

   
   function getpassword(){
              return $this-> password;
       }
   

}

class patient extends hospital{

  function __construct($password,$national_id){
    $this-> password=$password;
    $this-> national_id=$national_id;

   }

   function getpassword(){
    return $this-> password;
}

function getnational_id(){
  return $this-> national_id;
}


}




class doctor extends hospital{


  function __construct($password,$email){
    $this-> password=$password;
    $this->email=$email;

   }

   function getpassword(){
    return $this-> password;
}

function getemail(){
  return $this-> email;
}

}



//examble
$obj= new admin('1234');

echo $obj->getpassword().'<br>';

$obj2= new patient('1235','555663056966665544');

echo $obj2->getpassword().'             ';
echo $obj2->getnational_id().'<br>';

$obj3= new doctor('1236','mariana@gmail.com');

echo $obj3->getpassword().'             ';
echo $obj3->getemail().'<br>';











// class  User{


//  var $name;
//  var $lname;



//  function __construct($firstName,$lastName){
//  $this-> fname=$firstName;
//  $this-> lname=$lastName;
// }


 
    


//     function welcome(){
// echo "welcome" .'<br>'.$this->fname.''.'.'.$this->lname;

    

// }



// }
// $obj= new User('mariana','shawky');

// echo $obj->welcome();










// class  User{


//     var $name;
//     var $lname;


//     function setNAME($firstName){
//         $this-> fname=$firstName;
//        }
       

//        function getNAME(){
//           return $this-> fname;
//        }

//      }

   
 

// $obj= new User;
// $obj2= new User;

// $obj->setNAME('mariana');

// echo ' welcome'.'  '.$obj->getNAME();

// $obj2->setNAME('shawky');

// echo '   '.$obj2->getNAME()





?>