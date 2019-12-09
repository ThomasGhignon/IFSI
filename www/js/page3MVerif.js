function M_verif()
{
  $(document).ready(function(){
    $(".main").submit(function(event){
      event.preventDefault();
      //set input
      var data = [];
      for (var i = 0; i < 5; i++)
      {
        var j = i+1;
        data[i] = $(".input"+j).val();
      }

      //set
      var nameM = ["Méthode", "Milieu", "Matériel", "Main d'oeuvre"];
      var nameM_bis = ["Malade", "Matière"];
      var missingWord_cpt = 0;
      var duplicateWord_cpt = 0;
      //set

      //check correspondance data avec nameM
      var checked = unitaryM_check(data, nameM);
      //check correspondance data avec name_bis
      var checked2 = unitaryM_check(data,nameM_bis);

      for (var i = 0; i < checked.length; i++)
      {
        if (checked[i] == 0)
        {
          //erreur : mot manquant
          missingWord_cpt++;
        }
        if (checked[i] > 1)
        {
          //erreur : mot non unique.
          duplicateWord_cpt++;
        }
        //check nameM
        if (checked[i] == 1)
        {
          for (var j = 0; j < data.length; j++)
          {
            if(data[j] == nameM[i])
            {
              data[j] = true;
            }
          }
        }
      }
      //check nameM_bis
      for (var i = 0; i < checked2.length; i++)
      {
        if (checked2[i] > 1)
        {
          //erreur : mot non unique.
          duplicateWord_cpt++;
        }
        if (checked2[0]!=checked2[1])
        {
          //check nameM_bis
          if (checked2[i] == 1)
          {
            for (var j = 0; j < data.length; j++)
            {
              if(data[j] == nameM_bis[i])
              {
                data[j] = true;
              }
            }
          }
        }
      }
      //si aucun des deux mots de nameM_bis n'est selectionné
      if (checked2[0] == 0 && checked2[1] == 0)
        {
          //erreur : mot manquant
          missingWord_cpt++;
        }
      for (var i = 0; i < data.length; i++)
      {
        var j = i+1;
        if (data[i] == true)
        {
          $('.input'+j).css('border-color','green');
        }
        else
        {
          $('.input'+j).css('border-color','red');
        }
      }
      if (checked2[0]==checked2[1])
      {
        showError('mots synonmes', "#F39C12");
        for (var i = 0; i < 5; i++)
        {
          var j = i+1;
          if (data[i] == "Malade")
          {
            $('.input'+j).css('border-color','#F39C12');
          }
          if (data[i] == "Matière")
          {
            $('.input'+j).css('border-color','#F39C12');
          }
        }
      }
      //check si tout les input sont validés
      if (data[0] == true && data[1] == true && data[2] == true && data[3] == true && data[4] == true)
      {
        $(location).attr('href',"http://localhost/IFSI/www/page3MBis.php");
      }
      else
      {
        if (missingWord_cpt>0)
        {
          showError('Il manque '+missingWord_cpt+' mot(s)', "red");
        }
        if (duplicateWord_cpt>0)
        {
          showError('Il y a '+duplicateWord_cpt+' en doublon', "red");
        }
        if (checked2[0]==checked2[1])
        {
          showError('mots synonymes', "orange");
        }
      }
    });
  });
}
M_verif();
