<?php

    namespace App\Models;

    use App\Core\Model;
    use \SoapFault;

    class Visite extends Model {

        private $idVisite;
        private $date;
        private $dateFin;
        private $motif;
        private $bilan;
        private $idVisiteurMedical;
        private $idPraticien;

        public function __construct(int $id, string $date, $dateFin = null, $motif = null, $bilan = null, int $idVisiteur, int $idPraticien){
            $this->idVisite = $id;
            $this->date = $date;
            $this->dateFin = $dateFin;
            $this->motif = $motif;
            $this->bilan = $bilan;
            $this->idVisiteurMedical = $idVisiteur;
            $this->idPraticien = $idPraticien;
        }

        public function getIdVisite(){ return $this->idVisite; }
        public function getDate(){ return $this->date; }
        public function getDateFin(){ return $this->dateFin; }
        public function getMotif(){ return $this->motif; }
        public function getBilan(){ return $this->bilan; }
        public function getIdVisiteurMedical(){ return $this->idVisiteurMedical; }
        public function getIdPraticien(){ return $this->idPraticien; }

        public function setIdVisite($id){ $this->idVisite = $id; }

        public static function fromDatabase($v){
            if($v == null) throw new SoapFault("undefined", "Aucune visite avec ces paramètres");
            return new Visite($v['idVisite'], $v['date'], $v['dateFin'], $v['motif'], $v['bilan'], $v['idVisiteurMedical'], $v['idPraticien']);
        }

        public static function listFromDatabase($vs){
        
            $list = [];
            foreach($vs as $v) $list[] = self::fromDatabase($v);
            return $list;
        }

    }