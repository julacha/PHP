const dateElement = document.getElementById("date");

const today = new Date();

const options = {weekay:'long', month:'short', day:'numeric'};
dateElement.innerHTL = today.toLocaleDateString("en-US", options);

