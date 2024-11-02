<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>don't worry</title>
</head>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" ></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />
<link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
<body>

    <div class="search-container">
       <input type="text" id="universityName" placeholder="University Name" name="univeristy_name">
       <i id="searchIcon" class="fa-solid fa-magnifying-glass"></i>
   </div>

   <p id="result">

   </p>

</body>
<script src="{{ asset('frontend/js/script.js') }}"></script>

<script>
    let getSearchIcon = document.querySelector("i");
getSearchIcon.addEventListener("click", function() {
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
  const xhr = new XMLHttpRequest();
  const getResultUrl = "{{ route('university.result') }}?name=" + encodeURIComponent(name);
  xhr.open("GET", getResultUrl,true);

  xhr.setRequestHeader("Content-Type", "application/json; charset=UTF-8");

  const body = JSON.stringify({
    name: name,
  });

  xhr.onload = () => {
    if (xhr.readyState == 4 && xhr.status == 201) {
      let data = JSON.parse(xhr.responseText);
      document.getElementById('result').innerHTML = data.universities.map(university => university.name).join(', ');

    } else {
      console.log(`Error: ${xhr.status}`);
    }
  };
  xhr.send(body);
}

</script>
</html>
