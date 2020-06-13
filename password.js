function getLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.watchPosition(showPosition);
  } else { 
    x.innerHTML = "Geolocation is not supported by this browser.";
  }
}
    
function showPosition(position) {
    document.getElementById("lats").value=+position.coords.latitude; 
    document.getElementById("longs").value=+position.coords.longitude;
}

function myFunction() {
  var x = document.getElementById("passw1");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}

function myFunction2() {
  var x = document.getElementById("passw2");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}