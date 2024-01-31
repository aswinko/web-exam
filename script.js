

function validate() {
    let name = document.getElementById("name").value;
    let address = document.getElementById("address").value;
    let std = document.getElementById("std").value;
    let email = document.getElementById("email").value;

    if(name  == "" || address == "" || std == "" || email == ""){
        alert("Please fill all fields!")
        return false
    }
}