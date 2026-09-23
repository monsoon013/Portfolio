export function innitForm(){
    const $form = document.querySelector("#form");
    if (!$form) return;
    $("#form").on("submit", function(e){
    e.preventDefault();
    
    const data ={
      name: $("#usName").val(),
      sur: $("#usLastName").val(),
      email: $("#usEmail").val(),
      tel: $("#usPhone").val(),
      mess: $('#usMessage').val()
    }

    localStorage.setItem("dataForm", JSON.stringify(data));
    window.location.href = "/pages/form-conf.html";
  })
};

export function showData(){
    const savedData = localStorage.getItem("dataForm");
    const showName = document.querySelector("#showName");
    const name = document.querySelector(".name");
    const showSur = document.querySelector("#showSur");
    const showEmail = document.querySelector("#showEmail");
    const showPhone = document.querySelector("#showPhone");
    const showMess = document.querySelector("showMess");


    if(savedData){
        const datos = JSON.parse(savedData);
        $("#showName").text(datos.name);
        $(".name").text(datos.name);
        $("#showSur").text(datos.sur);
        $("#showEmail").text(datos.email);
        $("#showPhone").text(datos.tel);
        $("#showMess").text(datos.mess);
    }
}