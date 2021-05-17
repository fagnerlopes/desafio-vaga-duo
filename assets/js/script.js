function initAccordion(){
  document.addEventListener('click', function (e) {
    if (e.target.matches('button.card-title') || e.target.matches('button.card-icon')) {
      let card = e.target.parentElement;
      let cardBody = document.getElementById('card-body-' + card.id); 

      if(cardBody.classList.contains('active')) {
        cardBody.classList.remove('active');
      } else {
        cardBody.classList.add('active');        
      }

      var elementList = document.querySelectorAll('.card-body');
      Array.prototype.forEach.call(elementList, function (e) { 
          if(e.id !== cardBody.id){
            e.classList.remove('active');
          }                    
      });
      
    } else {
      return;      
    }
  });  
}

initAccordion();