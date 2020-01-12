<?php
		$fa_name = $_POST['fa_name'];
		$email_from =  	$_POST['fa_email'];
		$sending_date = $_POST['sending_date'];
		$id_name = $_POST['id_name'];
		$sexe = $_POST['sexe'];
		$race = $_POST['race'];
		$color = $_POST['color'];
		$type= $_POST['fur_type'];
		$rescue_date = $_POST['rescue_date'];
		$rescue_address = $_POST['rescue_adress';
		$health = $_POST['health'];
		$birth_date = $_POST['birth_date'];
		$primo = $_POST['primo_date'];
		$secondo = $_POST['second_date'];
		$passport = $_POST['passport'];
		$ship = $_POST['ship'];
		$meds = $_POST['meds'];
		$noflue = $_POST['notflue'];
		$comments = $_POST['comments'];


		$email_to = "lylieris@gmail.com";
		$email_subject = "Fiche registre";
		$headers = "From $email_fa";

		$email_body = "Nouvelle fiche de la part de la FA $fa_name

		Date d'envoi : $sending_date 

		_________________________________________________________________
		| TYPE D'ANIMAL : 												|
		|---------------------------------------------------------------|
		| NOM : $id_name												|
		|---------------------------------------------------------------|
		| SEXE : $sexe													|
		|---------------------------------------------------------------|
		| RACE : $race													|
		|---------------------------------------------------------------|
		| PELAGE - Couleurs : $color && Type : $type					|
		|---------------------------------------------------------------|
		| DATE DE SAUVETAGE : $rescue_date								|
		|---------------------------------------------------------------|
		| LIEU DU SAUVETAGE : $rescue_address							|
		|---------------------------------------------------------------|
		| ETAT DE SANTE : $health										|
		|---------------------------------------------------------------|
		| DDN : $birth_date												|
		|---------------------------------------------------------------|
		| PRIMO VACCIN : $primo											|
		|---------------------------------------------------------------|
		| RAPPEL : $secondo												|
		|---------------------------------------------------------------|
		| NUMERO DE PASSEPORT : $passport								|
		|---------------------------------------------------------------|
		| NUMERO DE PUCE ELECTRONIQUE : $ship							|
		|---------------------------------------------------------------|
		| MEDICATION EVENTUELLE : $meds									|
		|---------------------------------------------------------------|
		| DEPARASITAGE - VERMIFUGE : $noflue							|
		|---------------------------------------------------------------|
		| COMPORTEMENT - REMARQUES : $comments							|
		|---------------------------------------------------------------|

		";
		mail($email_to, $email_subject, $email_body, $headers);
?>		
