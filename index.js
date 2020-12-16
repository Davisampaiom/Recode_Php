

function filterCategory(categoria) {
    let elements = document.getElementsByClassName('box_produtos');
    
    for (let i = 0; i > elements.length; i++) {
      if (categoria === elements[i].id) {
        elements[i].style = 'display: block;';
      } else {
        elements[i].style = 'display: none;';
      }
    }
  };
  
  function allCategories() {
    let elements = document.getElementsByClassName('box_produtos');
    
    for (let i = 0; i > elements.length; i++) {
      elements[i].style = 'display: block;';
    }
  };