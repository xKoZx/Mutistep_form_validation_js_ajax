<html>
<head>
<script>
function display(){
  let xhttp = new XMLHttpRequest();
  xhttp.open("GET", "displays.php", true);
  xhttp.send();
  xhttp.onreadystatechange = function(){
    if(this.readyState == 4 && this.status == 200){
      document.getElementById("result").innerHTML = this.responseText;
    }
    else{
      console.log("error");
    }
  }
}

function search(){
  var data = prompt("Enter name: ");
  if(data != null){
    let xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function(){
      if(this.readyState == 4 && this.status == 200){
        document.getElementById("result").innerHTML = this.responseText;
      }
      else{
        console.log("error");
      }
    };
    xhttp.open("GET", "searchs.php?data=" + data, true);
    xhttp.send();
  }
}

function delet(){
  var data = prompt("Enter name: ");
  if(data != null) {
    var form = document.getElementById("myform");
    form.setAttribute("method", "POST");
    form.setAttribute("action", "deletes.php?data=" + data);
    form.submit();
  }
}

function upda(){
  var b = document.getElementById("diva");
  b.style.display = "block";
}

function submit1(){
  var a = document.getElementById("myform");
  a.setAttribute("method", "POST");
  a.setAttribute("action", "updates.php");
  a.submit();
}

function nextstep(step){
  if(validateStep(step)){
    const currentstep = document.getElementById("step" + step);
    const nextstep = document.getElementById("step" + (step + 1));
    if(currentstep && nextstep){
      currentstep.style.display = "none";
      nextstep.style.display = "block";
    }
  }
} 

function previousstep(step){
  const currentstep = document.getElementById("step" + step);
  const prevstep = document.getElementById("step" + (step - 1));
  if(currentstep && prevstep){
    currentstep.style.display = "none";
    prevstep.style.display = "block";
  }
}

function validateStep(step) {
  if (step === 1) {
    const nameInput = document.getElementById("name");
    if (!nameInput.checkValidity()) {
      alert("Please enter a valid name.");
      return false;
    }
  } else if (step === 2) {
    const emailInput = document.getElementById("subject");
    if (!emailInput.checkValidity()) {
      alert("Please enter a valid subject address.");
      return false;
    }
  }
  return true;
}

function saves(){
  let form_data = document.getElementById("myform2");
  form_data.setAttribute("method", "POST");
  form_data.setAttribute("action", "inserts.php");
  form_data.submit();
}

function insa(){
  var z = document.getElementById("inch");
  z.style.display = "block";
}
</script>
</head>
<body>
<div id="btns">
  <button onclick="display()">display</button>
  <button onclick="search()">search</button>
  <button onclick="delet()">delete</button>
  <button onclick="upda()">update</button>
  <button onclick="insa()">insert</button>
  <div id="inch" style="display:none;">
    <form id="myform2">
      <section id="step1">
        <h2>step1</h2>
        <label for="name">name</label>
        <input type="text" name="name" id="name" required>
        <button type="button" onclick="nextstep(1)">next</button>
      </section>
      <section id="step2" style="display:none;">
        <h2>step2</h2>
        <label for="subject">subject</label>
        <input type="text" name="subject" id="subject">
        <button type="button" onclick="nextstep(2)">next</button>
        <button type="button" onclick="previousstep(2)">previous</button>
      </section>
      <section id="step3" style="display:none;">
        <h2>step3</h2>
        <label for="email">email</label>
        <input type="email" name="email" id="email">
        <button type="button" onclick="previousstep(3)">previous</button>
        <button type="button" onclick="saves()">save</button>
      </section>
    </form>
  </div>
  <div id="diva" style="display:none;">
    <form id="myform">
      <label for="name">name</label>
      <input type="text" name="name">
      <label for="subject">subject</label>
      <input type="text" name="subject">
      <label for="email">email</label>
      <input type="text" name="email">
      <button type="button" onclick="submit1()">submit</button>
    </form>
  </div>
  <div id="result"></div>
</div>
</body>
</html>
