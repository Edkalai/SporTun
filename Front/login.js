document.getElementById("RegForm").addEventListener("submit" , function(e){
   

    var error='';
    
    var nom = document.getElementById("nom");
    var prenom = document.getElementById("prenom");
    var email = document.getElementById("email");
    var mdp = document.getElementById("mdp");
    var mdp2 = document.getElementById("mdp2");
    var date = document.getElementById("date");
    var sexe = document.getElementById("sexe");
    var numtel = document.getElementById("numtel");
    var adresse = document.getElementById("adresse");
    var ch;
    var x=true;
    
    var ch1=document.f.sexe[0].checked;
    
    var ch2=document.f.sexe[1].checked;
    
    var ch3=document.f.sexe[2].checked;
    
    if ( (!ch1) && (!ch2) && (!ch3) ) { error="selectionner le sexe";}
    
    
    
        for ( var i = 0; i < nom.value.length; i++ )
        {
            ch = nom.value.charAt(i);
            if (   
            !(ch >= 'A' && ch <= 'Z') &&      
            !(ch >= 'a' && ch <= 'z'))             
            x= false;
        }
      
    
    if(x==false){
        error="Veuillez saisir un nom alphabetique";
    }
    
    
    for ( var i = 0; i < prenom.value.length; i++ )
    {
        ch = prenom.value.charAt(i);
        if (   
        !(ch >= 'A' && ch <= 'Z') &&      
        !(ch >= 'a' && ch <= 'z'))             
        x= false;
    }
    
    
    if(x==false){
    error="Veuillez saisir un prénom alphabetique";
    }
    
    
    
    
    
    if(!adresse.value){
        error="veuillez renseigner une adresse";
    
      
    }
    if(!numtel.value){
        error="veuillez renseigner un numéro de téléphone";
      
        
    }
    
   
    
    if(!date.value){
        error="veuillez renseigner une date de naissance";
        
    }
    if(!mdp2.value){
        error="veuillez ressaisir le mot de passe";
        
    }
    if(!mdp.value){
        error="veuillez renseigner un mot de passe";
       
    }
    if(!email.value){
        error="veuillez renseigner un E-mail";
    }
    if(!prenom.value){
        error="veuillez renseigner un prenom";
    }
    if(!nom.value){
        error="veuillez renseigner un nom";
    }
    if(numtel.value.length!=8 ){
        error="veuillez renseigner un numéro de téléphone correcte";
    
      
    }
    if(isNaN(numtel.value)){
        error="veuillez renseigner un numéro de téléphone correcte";
    }
    if(mdp.value!=mdp2.value){
        error="les mots de passe ne se correspondent pas";
    
    }
    if(error){
        e.preventDefault();
        document.getElementById("erreur").innerHTML = error;
       
    }else {
        alert('inscription réussie');
    }
    })


