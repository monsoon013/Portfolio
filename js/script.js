 jQuery( document ).ready(function($) {
  //Toggle menú

  const hamburger = document.querySelector('.menu-icon-toggle');
  const navLinks = document.querySelector('.nav-items');

  hamburger.addEventListener('click', () => {
      navLinks.classList.toggle('active');
  });


  $("#form").on("submit", function(e){
    e.preventDefault();
    
    const data ={
      name: $("#usName").val(),
      sur: $("#usLastName").val(),
      email: $("#usEmail").val(),
      tel: $("#usPhone").val()
    }

    localStorage.setItem("dataForm", JSON.stringify(data));
    window.location.href = "/pages/form-conf.html";
  })

  const savedData = localStorage.getItem("dataForm");

  if(savedData){
    const data = JSON.parse(savedData);
    $("#showName").text(data.name);
  }
})
