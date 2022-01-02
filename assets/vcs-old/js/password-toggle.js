function myFunction() {
    var x = document.getElementById("input-adddress");
    if (x.type === "password") {
      x.type = "text";
    } else {
      x.type = "password";
    }
  }