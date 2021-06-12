const Router=()=>{
    const hash=window.location.hash;
    switch (hash) {
        case '':
            document.title="Bienvenidos";
            document.getElementById('signup').style.display="none";
            document.getElementById('login').style.display="none";
            break;
        case '#/signup':
            document.title="Registrarse";
            document.getElementById('signup').style.display="block";
            document.getElementById('login').style.display="none";
            break;
        case '#/login':
            document.title="Iniciar Sesión";
            document.getElementById('signup').style.display="none";
            document.getElementById('login').style.display="block";
            break;
        default:
            break;
    }
}
window.addEventListener('load',Router);
window.addEventListener('hashchange',Router);