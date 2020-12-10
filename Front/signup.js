var error='';
var nom=document.f1.nom.value;
var prenom=document.f1.prenom.value;
var email=document.f1.email.value;
var nom=document.f1.mdp.value;
var date=document.f1.datenaissance.value;
var ch;   
  
    alert("aaaa");
    for ( var i = 0; i < nom.length; i++ )
    {
        ch = nom.charAt(i);
        if (   
        !(ch >= 'A' && ch <= 'Z') &&      
        !(ch >= 'a' && ch <= 'z'))             
        x= false;
    }
      
    
    if(x==false){
        alert("nom alphab");
    }
    
    
    for ( var i = 0; i < prenom.length; i++ )
    {
        ch = prenom.charAt(i);
        if (   
        !(ch >= 'A' && ch <= 'Z') &&      
        !(ch >= 'a' && ch <= 'z'))             
        x= false;
    }
    
    
    if(x==false){
    error="Veuillez saisir un prénom alphabetique";
    }
    
    
    
    
    
    if(!adresse==""){
        error="veuillez renseigner une adresse";
    
      
    }
    if(!numtel==""){
        error="veuillez renseigner un numéro de téléphone";
      
        
    }
    
   
    
    if(!date==""){
        error="veuillez renseigner une date de naissance";
        
    }
    if(!mdp2==""){
        error="veuillez ressaisir le mot de passe";
        
    }
    if(!mdp==""){
        error="veuillez renseigner un mot de passe";
       
    }
    if(!email==""){
        error="veuillez renseigner un E-mail";
    }
    if(!prenom==""){
        error="veuillez renseigner un prenom";
    }
    if(!nom==""){
        error="veuillez renseigner un nom";
    }
    if(numtel.length!=8 ){
        error="veuillez renseigner un numéro de téléphone correcte";
    
      
    }

   


/*function verif1()
{
var error='';
    
    
    
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
        document.getElementById("erreur").innerHTML = error;
       
    }else {
        alert('inscription réussie');
    }


} */






