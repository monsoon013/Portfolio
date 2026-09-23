export function innitForm(){
    const $form = document.querySelector("#form");
    if (!$form) return;
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
};

export function showData(){
    const savedData = localStorage.getItem("dataForm");
    const showName = document.querySelector("#showName");
    if(!showName) return;

    if(savedData){
        const datos = JSON.parse(savedData);
        $("#showName").text(datos.name);
    }
}