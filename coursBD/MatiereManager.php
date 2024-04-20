<?php
class MatiereManager{

    public $db;
    public function __construct($db)
    {
        $this->setDb($db);
    }

    public function setDb(PDO $db) 
    {
        $this->Db=$db;
    }

    public function add(Matiere $mat)
    {   
     
        $q=$this->db->prepare('INSERT into matieres(code,intitule,regime,coefficient,credits)VALUES(:cod , :intitule , :reg , :coeff , :cred)');
        $q->bindvalue(':cod',$mat->getCode());
        $q->bindvalue(':inti',$mat->getIntitule());
        $q->bindvalue(':reg',$mat->getRegime());
        $q->bindvalue(':coeff',$mat->getCoefficient());
        $q->bindvalue(':cred',$mat->getCredits());

        $R=$q->execute();
        echo $this->db->lastInsertId() ;
        if(!$R)
        {echo "echec insertion!";}
        else
        {echo "echec Réussie";}
    }

    public function update(Matiere $mat)
    { 
        $q=$this->db->prepare('UPDATE  matieres SET intitile=:intit WHERE code= :cod');
        $q->bindvalue(':cod',$mat->getCode());
        $q->bindvalue(':inti',$mat->getIntitule());
        $R=$q->execute();
        echo "voici r". $R."<br>";
        if(!$R)
        {echo "echec modification!";}
        else
        {echo "modification Réussie";}

    }

    public function delete(Matiere $mat)
    {
        $q=$this->db->prepare('DELETE FROM matieres WHERE code=?');
        $q->execute(array($mat->code));

    }



    public function get($cod)
    {
        $q=$this->db->prepare('SELECT intitule,regime,coefficient,credits FROM matieres WHERE code code=?' );
        $q->execute(array($cod));
        $donnees=$q->fetch(PDO::FETCH_ASSOC);
        if(!empty($donnees)){
            $mat=new Matiere($donnees);
            return $mat;
        }
    }

    public function getMatieres()
    {
        $matieres=array();
        $q=$this->db->query('SELECT * from matieres');
        while($donnes=$q->fetch(PDO::FETCH_ASSOC))
        {
            $mat=new matiere ($donnees);
            $matieres[]=$mat;
        }
    return $matieres;
    }
    



}
?>