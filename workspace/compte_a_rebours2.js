
function compte_a_rebours()

{

    var compte_a_rebours = document.getElementById("compte_a_rebours");


    var date_actuelle = new Date();

    var date_evenement = new Date(2018, 5, 18, 8, 0, 0);    //année, mois, jour, heure, minute, seconde.
    //ne pas oublier que le mois de janvier correspond à 0.

    var total_secondes =  Math.floor((date_evenement - date_actuelle) / 1000);


    var prefixe = "";




    if (total_secondes > 0)

    {

        var jours = Math.floor(total_secondes / (60 * 60 * 24));

        var heures = Math.floor((total_secondes - (jours * 60 * 60 * 24)) / (60 * 60));

        minutes = Math.floor((total_secondes - ((jours * 60 * 60 * 24 + heures * 60 * 60))) / 60);

        secondes = Math.floor(total_secondes - ((jours * 60 * 60 * 24 + heures * 60 * 60 + minutes * 60)));


        var et = "";

        var mot_jour = "j";

        var mot_heure = "h";

        var mot_minute = "m";

        var mot_seconde = "s";


        if (jours == 0)

        {

            jours = '';

            mot_jour = '';

        }

        else if (jours == 1)

        {

            mot_jour = "j";

        }


        if (heures == 0)

        {

            heures = '';

            mot_heure = '';

        }

        else if (heures == 1)

        {

            mot_heure = "h";

        }


        if (minutes == 0)

        {

            minutes = '';

            mot_minute = '';

        }

        else if (minutes == 1)

        {

            mot_minute = "m";

        }


        if (secondes == 0)

        {

            secondes = '';

            mot_seconde = '';

            et = '';

        }

        else if (secondes == 1)

        {

            mot_seconde = "s";

        }


        if (minutes == 0 && heures == 0 && jours == 0)

        {

            et = "";

        }


        compte_a_rebours.innerHTML = prefixe + jours + '' + mot_jour + ' ' + heures + '' + mot_heure + ' ' + minutes + '' + mot_minute + ' ' + et + '' + secondes + '' + mot_seconde;

    }

    else

    {

        compte_a_rebours.innerHTML = 'Bon courage !!!'  ;

    }


    var actualisation = setTimeout("compte_a_rebours();", 1000);

}

compte_a_rebours();

