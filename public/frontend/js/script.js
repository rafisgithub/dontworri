let i = document.querySelector("i");
i.addEventListener("click", function() {
   getTheValue();
});


let searcbox = document.querySelector(".search-container");

searcbox.addEventListener("keypress", function(event) {
    if(event.key == 'Enter') {
        getTheValue();

    }
});


function getTheValue() { 
  let name = document.querySelector("#universityName").value;
    
}