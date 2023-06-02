
let displayInputs = (val)=>{
    

    document.getElementById('Book').style.display = 'none';
    document.getElementById('DVD').style.display = 'none';
    document.getElementById('Furniture').style.display = 'none';
    
    document.getElementById(`${val}`).style.display = 'block';  

    let inputs = document.getElementsByClassName(`${val}Input`);
    
    requireInputs(Array.from(inputs)); 
}

let requireInputs = (val) => {
    
    let allInputs = document.getElementsByClassName('detailInput');

    Array.from(allInputs).map(element=>{
    
        element.removeAttribute("required");
    
    });

    val.map(element => {
    
        element.setAttribute("required", true);
      
    });

  }
