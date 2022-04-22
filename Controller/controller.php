<?php
    require_once '../../config.php';
    require_once '../../Model/reclamation.php';

   function ajouterreclamation($reclamation)
   {
    $config = config::getConnexion();
    try {
        $querry = $config->prepare('
        INSERT INTO reclamation
        (mail,descp-rec)
        VALUES
        (:mail,:description)
        ');
        $querry->execute([
            'mail'=>$reclamation->getMail_rec(),
            'description'=>$reclamation->getDesc_rec(),
        ]);
    } catch (PDOException $th) {
         $th->getMessage(); 
    }
}

    ?>
