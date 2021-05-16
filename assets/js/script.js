function ocultarExibir(id){
  let element = document.getElementById(id).style.display;
  if(element == 'block'){
    document.getElementById(id).style.display = 'none';
  } else {
    document.getElementById(id).style.display = 'block'
  }
}