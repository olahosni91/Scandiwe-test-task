let extraInputs = document.getElementsByClassName('extra');

let displayInputs = (val)=>{
    document.getElementById('Book').style.display = 'none';
    document.getElementById('DVD').style.display = 'none';
    document.getElementById('Furniture').style.display = 'none';
    extraInputs.required = false;

    document.getElementById(`${val}`).style.display = 'block';    
    
}