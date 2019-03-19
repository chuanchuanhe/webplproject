//Get modal element 
var modal = document.getElementById('simpleModal');

//Get open modal button 
var modalBtn = document.getElementById('modalBtn'); 

//Get close buton
var closeBtn = document.getElementsByClassName('closeBtn')[0];
//this will return an array of collection that has the class name 'closeBtn', even if 
//there is only one element in the array, so we use [0] -> we want the first one 

//Listener for open click
modalBtn.addEventListener("click", openModal); 

//Listen for close click
closeBtn.addEventListener("click",closeModal);

//function to open modal 
function openModal() {
    modal.style.display = 'block'; 
}

//function to close modal 
function closeModal() {
    modal.style.display = 'none'; 
}

//validate data: whether the user choose a button or not
//if not, tell the user to do so 
var is_checked = ()=> {
    var marsupial_checked = document.getElementById('pouch_marsupial').checked;
    var primates_checked = document.getElementById('pouch_primates').checked;
    var monotremes_checked = document.getElementById('pouch_monotremes').checked;
    if (marsupial_checked == false && primates_checked == false && monotremes_checked == false) {
        //alert('Please select an option')
        document.getElementById("message").innerHTML = "Please select an option";
        return false;
    }
    else if (marsupial_checked == true) {
        //document.getElementById("message2").innerHTML = "Please select an option";
        alert('Correct!'); 
        //return true;
    }
    else {
        alert('Wrong Answer :('); 
        //modalBtn.addEventListener("click", disableBtn); 
        //return true;
    }
}
//sth to do with ajax -> submitting form without refreshing the page, so that the button is always disabled 

modalBtn.addEventListener("click", disableBtn); 

function disableBtn() {
   document.getElementById("modalBtn").disabled = true;
}

