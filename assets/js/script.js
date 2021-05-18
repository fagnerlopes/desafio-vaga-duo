function handleAccordion(){
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

function handleMenuMobile() {
  document.addEventListener('click', function (e) {
    let menu = document.getElementById('menu');
    if (e.target.matches('i.fas.fa-bars.fa-2x')) {      
      if(!menu.classList.contains('active')) {
        menu.classList.add('active');
      } else {
        menu.classList.remove('active');
      }     
    } else {
      menu.classList.remove('active');
    }
  });

}

handleMenuMobile();

handleAccordion();