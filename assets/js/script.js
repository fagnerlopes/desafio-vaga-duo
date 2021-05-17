function initAccordion(){
  document.addEventListener('click', function (e) {
    if (e.target.matches('button.card-title') || e.target.matches('button.card-icon')) {
      let card = e.target.parentElement;
      let cardBody = document.getElementById('card-body-' + card.id);     

      var elementList = document.querySelectorAll('.card-body');
      Array.prototype.forEach.call(elementList, function (e) {
          e.classList.remove('active');
      });

      cardBody.classList.add('active');    

    } else {
      return;      
    }
  });  
}

initAccordion();