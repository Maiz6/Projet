document.querySelector("form").addEventListener("submit", function(event){
   var inputs = document.querySelectorAll("input");
   for(var i = 0; i < inputs.length; i++) {
     if(!inputs[i].value) {
       alert("Merci de remplir tous les champs du formulaire");
       event.preventDefault();
       break;
     }
   }
});
