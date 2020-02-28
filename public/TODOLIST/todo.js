const dateElement = document.getElementById("date");

const today = new Date();

const options = {weekday:'long', month:'long', day:'numeric'};
dateElement.innerHTML = today.toLocaleDateString("en-GB", options);

