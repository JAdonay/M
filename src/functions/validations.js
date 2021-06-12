window.addEventListener('load',()=>{
    document.querySelector('.btn__submit').addEventListener('click',(e)=>{
        var msg=document.querySelector("#msg__signup");
        var form=document.forms["formSignup"];
        var nombre=form.elements["nombre"].value;
        var apellido=form.elements["apellido"].value;
        var mail=form.elements["mail"].value;
        var usuario=form.elements['usuario'].value;
        var password=form.elements["password"].value;
        var razon=form.elements["razon"].value;
        var mayor=form.elements["mayor"].value;
        var emailReg = /^([da-z_.-]+)@([da-z.-]+).([a-z.]{2,6})$/;
        if (nombre=="" || apellido=="" || mail=="" || usuario=="" || password=="" || razon==""){
            msg.innerHTML=/*html*/`<div id="msg__alert">Rellene todos los campos</div>`;
        }else{
            if (!emailReg.test(mail)) {
                msg.innerHTML=/*html*/`<div id="msg__alert">Esta dirección de correo es inválida</div>`;
            } else {
                if (mayor!=="1") {
                    msg.innerHTML=/*html*/`<div id="msg__alert">Usted debe ser mayor de edad para entrar a este sitio</div>`; 
                } else {
                    if (password.length<8) {
                        msg.innerHTML=/*html*/`<div id="msg__alert">Esta contraseña es demasiado corta</div>`
                    } else {
                        const submitFormFunction = Object.getPrototypeOf(form).submit;
                        submitFormFunction.call(form);
                    }
                }
            }
        }
        e.preventDefault();
    });
    document.querySelector('.btn__submit__login').addEventListener('click',async(e)=>{
        var msg=document.querySelector("#msg__login");
        var form=document.forms["formLogin"];
        var mail=form.elements["mail"].value;
        var password=form.elements["password"].value;
        if (mail=="" || password=="") {
            msg.innerHTML=/*html*/`<div id="msg__alert">Rellene todos los campos</div>`;
        } else {
            var datos=new FormData();
            datos.append("accion","consultar");
            datos.append("mail",mail);
            datos.append("password",password)
            const RS=await fetch('controllers/UserController.php',{
                method:'POST',
                body:datos
            }).then((response) => response.text()).then((responseData) => {return responseData;})
            if (RS=="MAIL_DONT_EXIST") {
                msg.innerHTML=/*html*/`<div id="msg__alert">Este correo no existe</div>`;
            } else {
                if (RS=="INVALID_PASSWORD") {
                    msg.innerHTML=/*html*/`<div id="msg__alert">Contraseña Incorrecta</div>`;
                } else {
                    const submitFormFunction = Object.getPrototypeOf(form).submit;
                    submitFormFunction.call(form);
                }
            }
        }
        e.preventDefault();
    });
});