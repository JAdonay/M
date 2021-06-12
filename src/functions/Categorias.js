window.addEventListener('load',async()=>{
    var datos=new FormData();
    datos.append("accion","consultar");
    const RS=await fetch('../../controllers/CategoriasController.php',{method:'POST',body:datos});
})