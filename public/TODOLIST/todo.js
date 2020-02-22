const dateElement = document.getElementById("date");
let options = {weekay:'long', month:'short', day:'numeric'};
let today = new date();
dateElement.innerHTL = today.toLocaleDateString("en-US", options);