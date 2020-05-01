<?php
// A finalisé
class checking
{
    public function __construct($genre,$nom,$prenom,$date,$ville,$email,$motdepasse,$motdepasseverif,$loisir){
        $this->checkGenre($genre);
        $this->checkName($nom,$prenom);
        $this->checkDate($date);
        $this->_ville = $ville;
        $this->_email = $email;
        $this->_motdepasse = $motdepasse;
        $this->_motdepasseverif = $motdepasseverif;
        $this->_loisir = $loisir;
        $this->_tableaucheck = [];
        $this->_tableauvalue = [];
    }

    public function checkGenre($genre)
    {
        if($genre == "homme" || $genre == "femme" || $genre == "autre")
        {
            $this->_genre = $genre;
            $this->_tableaucheck['genre'] = true;
            $this->_tableauvalue['genre'] = $genre;
        }
        else
        {
            $this->_tableaucheck['genre'] = false;
            $this->_tableauvalue['genre'] = $genre;
        }
    }
    public function checkName($nom,$prenom)
    {
        $fixnom = trim($nom);
        $fixprenom = trim($prenom);
        $this->_nom = str_replace(" ","-",$fixnom);
        $this->_prenom = str_replace(" ","-",$fixprenom);
        print $this->_nom; 
        print $this->_prenom;
        $this->_tableaucheck['nom'] = true;
        $this->_tableauvalue['nom'] = $fixnom;
        $this->_tableaucheck['prenom'] = true;
        $this->_tableauvalue['prenom'] = $fixprenom;
    }
    public function checkDate($date)
    {
        $today = getdate();
        $testdate = strtotime($date);
        $result = $today[0] - $testdate;
        
        if($result > 567648000000)
        {
            $this->_date = $result;
            return true;
        }
    }
}
?>