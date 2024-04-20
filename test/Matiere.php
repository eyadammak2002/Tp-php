<?php
class Matiere{
    private String $code;
    private String $intitule;
    private float $credits;
    
    public static string $filiere;



    public function getCode():String
    {
        return $this->code ;
    }

    public function getIntitule():String
    {
        return $this->intitule ;
    }

   
    public function getCredits():float
    {
        return $this->credits ;
    }

   
   public function setCode(String $code)
   {
    $this->code=$code;
   }

   public function setIntitule(String $intitule)
   {
    $this->intitule=$intitule;
   }

   public function setCredits(float $credits)
   {
    $this->credits=$credits;
   }

 
    public static function getFiliere():String
        {    //nafs il get lil get
            return self :: $filiere ;
            // ken constante  return self :: filiere ;
            //il dolar ma8ir $
        }
     
        
     public static function setFiliere(String $filiere)
        {   //nafs il get lil set
           self :: $filiere=$filiere;
           // ken constante  self :: filiere=$filiere; ;
             //il dolar ma8ir $ ba3ad il self
        }
    


  

  public  function __construct(String $code,String $intitule,int $credits)
   {
    $this->code=$code;
    $this->intitule=$intitule;
 
    $this->credits=$credits;
   }

  /* public  function __construct($donnees)
   {
    foreach($donnees as $key =>$value)
        this->__set($key,$value);
   }*/



      
    public function var_dump(){
        
        echo "Code: $this->code, Intitulé: $this->intitule, Crédits: $this->credits\n";
    }

}