$(document).ready(function(){
  $("#regForm").on("submit", function(e){
    let name = $("#fullname").val().trim();
    let email = $("#email").val().trim();
    let phone = $("#phone").val().trim();

    if(name === "" || email === "" || phone === ""){
      alert("All fields are required!");
      e.preventDefault();
    } else if(!/^[0-9]{10}$/.test(phone)){
      alert("Enter a valid 10-digit phone number.");
      e.preventDefault();
    }
  });
});
