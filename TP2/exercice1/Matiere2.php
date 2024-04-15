<?php
class Matiere{
    private String $code;
    private String $intitule;
    private String $regime;
    private float $coefficient;
    private int $credits;

    public const REG_MIXTE='mixte';
    public const REG_CC='cc';
    public const POIDS=2;
    //matejmch ta3melo initialisation lil static fil constructeur ba3ad mat3ayet lil constructeur ta3mel set filiére 5asa ib kol objets
    public static string $filiere;

    /*public function getCode():String
    {
        return $this->Code ;
    }

    public function getIntitule():String
    {
        return $this->Intitule ;
    }

    public function getRegime():String
    {
        return $this->Regime ;
    }

    public function getCoefficient():String
    {
        return $this->Coefficient ;
    }
    public function getCredits():String
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

   public function setRegime(String $regime)
   {
    $this->regime=$regime;
   }

   public function setCoefficient(String $coefficient)
   {
    $this->coefficient=$coefficient;
   }

   public function setCredits(String $credits)
   {
    $this->credits=$credits;
   }*/
   
   public function __getCode($att)
    {
        if(isset($this->$att))
            return $this->Code ;
        else
            echo"error:attribut inexistant";
    }



    public function __setCode($att,$value)
    {
        //get_class($this) ta3tikil class mte3 objet ili howa $this
        $tabatt=get_class_vars(get_class($this));
        if(array_key_exists($att,$tabatt)&&($att !== "credits"))
        {
        $this->$att=$value;
        if($att==="coefficient")
            $this->credits=$coefficient*self::POIDS;}
        else
            echo"error:attribut inexistant";
    }


  


   public  function __construct(String $code,String $intitule,String $regime,float $coefficient)
   {
    $this->code=$code;
    $this->intitule=$intitule;
    $this->regime=$regime;
    $this->coefficient=$coefficient;
    $this->credits=$coefficient*self::POIDS;
   }

      
    public function var_dump(){
        
        echo "Code: $this->code, Intitulé: $this->intitule, Régime: $this->regime, Coefficient: $this->coefficient, Crédits: $this->credits\n";
    }

}