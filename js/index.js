
let btn = $('#customSwitch1');



function index(e) {
    if (e.checked) {
        
        let body = $('body');
        body.removeClass("fondo");
        body.addClass("bg-dark");

        console.log(body);

        let nav = $('nav');
        nav.removeClass('colores');
        nav.addClass('nav-oscuro');

        let navbar1 = $('#navbarDropdownPortfolio');
        navbar1.addClass('text-white');

        let navbar2 = $('#navbar2');
        navbar2.addClass('text-white');

        let navbar3 = $('#dropdown09');
        navbar3.addClass('text-white');

        let card = $('#card');
        card.addClass('bg-dark');

        let text = $('#texto');
        text.removeClass('text-dark');
        text.addClass('text-white');

        let footer = $('#pie');
        footer.removeClass('colores')
        footer.addClass('nav-oscuro');

        let aviso = $('#aviso');
        aviso.addClass('text-white');

        let texto1 = $('#texto1');
        texto1.addClass('text-white');

        let texto2 = $('#texto2');
        texto2.addClass('text-white');

        sessionStorage.setItem("modoOscuro",true);
    } else {
        
        let body = $('body');
        body.removeClass("bg-dark");
        body.addClass("fondo");

        let nav = $('nav');
        nav.removeClass('nav-oscuro');
        nav.addClass('colores');

        let navbar1 = $('#navbarDropdownPortfolio');

        navbar1.removeClass('text-white');

        let navbar2 = $('#navbar2');
        navbar2.removeClass('text-white');

        let navbar3 = $('#dropdown09');
        navbar3.removeClass('text-white');

        let navbar4 = $('#navbar4');
        navbar4.removeClass('text-white');

        let card = $('#card');
        card.removeClass('bg-dark');

        let text = $('#texto');
        text.removeClass('text-white');
        text.addClass('text-dark');

        let footer = $('#pie');
        footer.removeClass('nav-oscuro')
        footer.addClass('colores');

        let aviso = $('#aviso');
        aviso.removeClass('text-white');

        let texto1 = $('#texto1');
        texto1.removeClass('text-white');

        let texto2 = $('#texto2');
        texto2.removeClass('text-white');

        sessionStorage.setItem("modoOscuro",false);
    }

    
}

function productos(e) {
    if (e.checked == true) {

        sessionStorage.setItem("modoOscuro",true);

        let body = $('body');
        body.removeClass("fondo");
        body.addClass("bg-dark");

        let nav = $('nav');
        nav.removeClass('colores');
        nav.addClass('nav-oscuro');

        let navbar1 = $('#navbarDropdownPortfolio');
        navbar1.addClass('text-white');

        let navbar2 = $('#navbar2');
        navbar2.addClass('text-white');

        let navbar3 = $('#dropdown09');
        navbar3.addClass('text-white');

        let navbar4 = $('#navbar4');
        navbar4.addClass('text-white');

        let text = $('#texto');
        text.removeClass('text-dark');
        text.addClass('text-white');

        let footer = $('#pie');
        footer.removeClass('colores')
        footer.addClass('nav-oscuro');

        let aviso = $('#aviso');
        aviso.addClass('text-white');

        let texto1 = $('#texto1');
        texto1.addClass('text-white');

        let texto2 = $('#texto2');
        texto2.addClass('text-white');

        let texto3 = $('#texto3');
        texto3.removeClass('text-dark')
        texto3.removeClass('border-info');
        texto3.addClass('text-white');
        texto3.addClass('border-white');

        let titulo = $('#titulo');
        titulo.removeClass('border-primary');
        titulo.addClass('border-white');
        titulo.removeClass('bg-info');
        titulo.addClass('bg-secondary');

        let card = $('#tarjeta');
        card.addClass('bg-white');

    } else {

        let body = $('body');
        body.removeClass("bg-dark");
        body.addClass("fondo");

        let nav = $('nav');
        nav.removeClass('nav-oscuro');
        nav.addClass('colores');

        let navbar1 = $('#navbarDropdownPortfolio');

        navbar1.removeClass('text-white');

        let navbar2 = $('#navbar2');
        navbar2.removeClass('text-white');

        let navbar3 = $('#dropdown09');
        navbar3.removeClass('text-white');

        let text = $('#texto');
        text.removeClass('text-white');
        text.addClass('text-dark');

        let footer = $('#pie');
        footer.removeClass('nav-oscuro')
        footer.addClass('colores');

        let aviso = $('#aviso');
        aviso.removeClass('text-white');

        let texto1 = $('#texto1');
        texto1.removeClass('text-white');

        let texto2 = $('#texto2');
        texto2.removeClass('text-white');

        let texto3 = $('#texto3');
        texto3.removeClass('text-white');
        texto3.removeClass('border-white');
        texto3.addClass('text-dark')
        texto3.addClass('border-info');


        let titulo = $('#titulo');
        titulo.removeClass('border-white');
        titulo.removeClass('bg-secondary');
        titulo.addClass('border-primary');
        titulo.addClass('bg-info');


        let card = $('#tarjeta');
        card.removeClass('bg-white');

        sessionStorage.setItem("modoOscuro",false);
    }

    console.log(sessionStorage.getItem("modoOscuro"));
}

function contacta(e){
    if(e.checked == true){
        sessionStorage.setItem("modoOscuro",true);

        let body = $('body');
        body.removeClass("fondo");
        body.addClass("bg-dark");

        let nav = $('nav');
        nav.removeClass('colores');
        nav.addClass('nav-oscuro');

        let navbar1 = $('#navbarDropdownPortfolio');
        navbar1.addClass('text-white');

        let navbar2 = $('#navbar2');
        navbar2.addClass('text-white');

        let navbar3 = $('#dropdown09');
        navbar3.addClass('text-white');

        let text = $('#texto');
        text.removeClass('text-dark');
        text.addClass('text-white');

        let footer = $('#pie');
        footer.removeClass('colores')
        footer.addClass('nav-oscuro');
        
        let aviso = $('#aviso');
        aviso.addClass('text-white');

        let texto1 = $('#texto1');
        texto1.addClass('text-white');
        
        let texto2 = $('#texto2');
        texto2.addClass('text-white');

        let texto3 = $('#texto3');
        texto3.removeClass('text-dark')
        texto3.removeClass('border-info');
        texto3.addClass('text-white');
        texto3.addClass('border-white');

        let titulo = $('#titulo');
        titulo.removeClass('border-primary');
        titulo.addClass('border-white');
        titulo.removeClass('bg-info');
        titulo.addClass('bg-secondary');

        let titulo2 = $('#titulo2');
        titulo2.removeClass('border-primary');
        titulo2.addClass('border-white');
        titulo2.removeClass('bg-info');
        titulo2.addClass('bg-secondary');        

        let enviar = $('#enviar');
        enviar.removeClass('btn-info');
        enviar.addClass('btn-secondary');
    }else{

        let body = $('body');
        body.removeClass("bg-dark");
        body.addClass("fondo");

        let nav = $('nav');
        nav.removeClass('nav-oscuro');
        nav.addClass('colores');

        let navbar1 = $('#navbarDropdownPortfolio');

        navbar1.removeClass('text-white');

        let navbar2 = $('#navbar2');
        navbar2.removeClass('text-white');

        let navbar3 = $('#dropdown09');
        navbar3.removeClass('text-white');

        let text = $('#texto');
        text.removeClass('text-white');
        text.addClass('text-dark');

        let footer = $('#pie');
        footer.removeClass('nav-oscuro')
        footer.addClass('colores');
        
        let aviso = $('#aviso');
        aviso.removeClass('text-white');

        let texto1 = $('#texto1');
        texto1.removeClass('text-white');

        let texto2 = $('#texto2');
        texto2.removeClass('text-white');

        let texto3 = $('#texto3');
        texto3.removeClass('text-white');
        texto3.removeClass('border-white');
        texto3.addClass('text-dark')
        texto3.addClass('border-info');
        
        let titulo = $('#titulo');
        titulo.removeClass('border-white');
        titulo.removeClass('bg-secondary');
        titulo.addClass('border-primary');
        titulo.addClass('bg-info');

        let titulo2 = $('#titulo2');
        titulo2.removeClass('border-white');
        titulo2.removeClass('bg-secondary');
        titulo2.addClass('border-primary');
        titulo2.addClass('bg-info');

        let enviar = $('#enviar');
        enviar.removeClass('btn-secondary');
        enviar.addClass('btn-info');
        
        sessionStorage.setItem("modoOscuro",false);  
    }
}


function quitar(){
    $("#contacta").addClass("mt105");
}

let path = window.location.href;
let cadena = path.split("/");

let objeto = new Object();
objeto.checked = true;
let objeto1 = new Object();
objeto1.checked = false;

let modoOscuro = sessionStorage.getItem("modoOscuro");

if(modoOscuro!=null){
    if(cadena[cadena.length-1] == "index.html"){
        if(modoOscuro != "false"){
            btn.click();
        }else{
            index(objeto1);
            btn.checked = false;
        }
    }else if(cadena[cadena.length-1] == "contacta.php"){

        if(modoOscuro != "false"){
            btn.click();
        }else{
            contacta(objeto1);
            btn.checked = false;
        }

    }else{

        if(modoOscuro != "false"){
            btn.click();
        }else{
            productos(objeto1);
            btn.checked = false;
        }
    }
}

console.log(modoOscuro);




