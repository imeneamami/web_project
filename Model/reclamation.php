<?php 
    class reclamation 
    {
        private mail_rec;
        private descp_rec;
    }

    public function __construct($mail_rec,$desc_rec)
    {
        $this->mail_rec=$mail_rec;
        $this->desc_rec=$desc_rec;
        
 
    }
    public function getID_rec(){
        return $this->id_rec;}
    public function getMail_rec(){
            return $this->mail_rec;}
    public function getDesc_rec(){
            return $this->desc_rec;}
    
    public function setMail_rec($mail_rec){
        $this->mail_rec=$mail_rec;
    }
    public function setDesc_rec($desc_rec){
        $this->desc_rec=$desc_rec;
    }


?>