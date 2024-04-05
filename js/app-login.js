const nombre_usr= document.getElementById("nombre-usr");
const pass_usr= document.getElementById("pass-login");
const btn_login= document.getElementById("btn-login");
const form_login= document.getElementById("form-login");
const modal= document.getElementById("modal-login");

const limpiar_selecccion =()=>{

    nombre_usr.style.borderColor="";
    pass_usr.style.borderColor="";

}




btn_login.addEventListener("click", (e)=>{
    e.preventDefault();
    console.log("evitando envio...");
    limpiar_selecccion();
    validar_formulario();

});


const validar_formulario = ()=>{


   

    const valor_nombre= nombre_usr.value;
    const valor_pass= pass_usr.value;
    

    if(valor_nombre === "" || valor_pass === ""){
        nombre_usr.style.borderColor="red";
        pass_usr.style.borderColor="red";
        return false;
    }else{

        form_login.submit();

    }

}


