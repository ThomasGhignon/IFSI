<?php

/*Methode*/
$arrayOrigin_0=array(
0=>'Transfusion programmée et transfusion en urgence relative',
1=>'Interruption de tache pour l’IDE 1: CGR laissés dans la salle de soin car  urgence à gérer',
2=>'Non réactualisation des connaissances en hémovigilance (IDE 2 n’a pas revu le protocole pourtant existant, prend rapidement connaissance de la procédure)',
3=>'Connaissances insuffisantes (connaissances partielles de la procédure pour IDE 2 et connaissance insuffisantes relative à l’acte transfusionnel pour IDE 2 et EIDE)',
4=>'Livraison concomitante des culots de CGR',
5=>'Livraison des CGR par un coursier en dehors de la présence de l’IDE 2 (IDE 2 non informée de la livraison des culots par le coursier)',
6=>'Contrôle de concordance de l’identité et des produits livrés dehors de la présence du coursier');

/*materiel*/
$arrayOrigin_1=array(
0=>'Plan de travail commun aux 2 secteurs',
1=>'Pas de container ou plateau sur lequel le nom du patient est indiqué (: le bon de délivrance ne doit JAMAIS être dissocié des CGR)');

/*malade*/
$arrayOrigin_2=array(
0=>'2 demandes de sang en même temps',
1=>'2 transfusions à des heures rapprochées',
2=>'2 réceptions de sang presque en même temps',
3=>'2 personnes dont le patronyme est identique et dont les prénoms sont proches dans le même secteur pendant un laps de temps',
4=>'2 femmes à transfuser',
5=>'2 prescriptions par 2 prescripteurs');

/*main d'oeuvre*/
$arrayOrigin_3=array(
0=>'IDE 2 qui ne demande pas d’aide car peur du jugement et peur du non renouvellement de son contrat',
1=>'Stress ; Fatigue ? À investiguer',
2=>'Difficulté à gérer la charge de travail et à s’organiser',
3=>'Routine : se sent plus confiante depuis quelques temps',
4=>'Absence de communication entre les 2 IDE car sont affectées sur 2 secteurs différents',
5=>'Mauvaise interprétation du contrôle ultime par IDE 2 et EIDE');

/*milieu*/
$arrayOrigin_4=array(
0=>'Surcharge de travail : (IDE de nuit débordée, retard dans l’organisation des soins pour IDE 2)',
1=>'Absence de l’IDE en J (qui aurait pu gérer l’urgence de M. D. par exemple)',
2=>'Organisation des soins bousculée par plusieurs situations aigues (aggravation de l’état de patients dans les deux secteurs de soins)',
3=>'Service divisé en 2 secteurs avec une salle de soin commune');

$data=array(
0=>$arrayOrigin_0,
1=>$arrayOrigin_1,
2=>$arrayOrigin_2,
3=>$arrayOrigin_3,
4=>$arrayOrigin_4
);

echo json_encode($data);
