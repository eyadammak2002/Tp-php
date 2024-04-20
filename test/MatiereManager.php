<?php
class MatiereManager{

    public $db;
    public function __construct($db)
    {
        $this->setDb($db);
    }

    public function setDb(PDO $db) 
    {
        $this->db=$db;
    }

  
    public function add(Matiere $mat)
    {   
     
        $q=$this->db->prepare('INSERT into matieres(code,intitule,credits)VALUES(:cod , :inti , :cred)');
        $q->bindvalue(':cod',$mat->getCode());
        $q->bindvalue(':inti',$mat->getIntitule());
        $q->bindvalue(':cred',$mat->getCredits());

        $R=$q->execute();
        echo $this->db->lastInsertId() ;
        if(!$R)
        {echo "echec insertion!";}
        else
        {echo "echec Réussie";}
    }

    /*public function get($code)
    {
        $q=$this->db->prepare('SELECT * FROM matieres WHERE code like '.$code);
      
        
        if($q->rowcount())
        {
            $donnees=$q->fetch(PDO::FETCH_ASSOC);
            $mat=new matiere ($donnees["code"],$donnees["intitule"],$donnees["credits"]);
            return $mat;
        }
        return null;
    }*/
    
    public function get($code)
    {
        $q = $this->db->prepare('SELECT * FROM matieres WHERE code = :code');
        $q->bindValue(':code', $code);
        $q->execute();
        if ($donnees = $q->fetch(PDO::FETCH_ASSOC)) {
            $mat = new Matiere($donnees["code"], $donnees["intitule"], $donnees["credits"]);
            return $mat;
        }
        return null;
    }

    public function getMatieres()
    {
        $matieres=array();
        $q=$this->db->query('SELECT * from matieres');
        while($donnees=$q->fetch(PDO::FETCH_ASSOC))
        {
            $mat=new matiere ($donnees["code"],$donnees["intitule"],$donnees["credits"]);
            $matieres[]=$mat;
        }
    return $matieres;
    }

    public function delete(Matiere $mat)
    {
        $this->db->exec('DELETE FROM matieres WHERE code=.'.$mat->getCode());
       

    }
    



}
?>