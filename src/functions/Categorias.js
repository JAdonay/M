window.addEventListener('load',async()=>{
    var datos=new FormData();
    datos.append("accion","consultar");
    const RS=await fetch('../../controllers/CategoriasController.php',{method:'POST',body:datos})
        .then((response) => response.json()).then((responseData) => {return responseData;});
    var nodoCategoria=document.getElementById('select__categoria__foro');
    let template=`<option vaue=''></option>`;
    RS.forEach(rs => {
        template+=/*html*/`<option style="background-color:${rs.color}" vaue="${rs.id}">${rs.nombre}</option>`;
    });
    nodoCategoria.innerHTML=template;
})