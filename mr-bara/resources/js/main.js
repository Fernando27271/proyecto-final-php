window.addEventListener("scroll", function(){
    let menuArea = document.getElementById('menu-area');

    if(window.pageYOffset > 460){
        menuArea.classList.add("cus-nav")
    }else{
        menuArea.classList.remove("cus-nav")
    }
});

    var vlogo = document.getElementById("logo-footer");
    var vfooter = document.getElementById("main-footer")

    var vtitlef = document.getElementById("titlef")
    var vtitlef1 = document.getElementById("titlef-1")
    var vtitlef2 = document.getElementById("titlef-2")
    var vtitlef3 = document.getElementById("titlef-3")

    var vtextf = document.getElementById("textf")
    var vtextf1 = document.getElementById("textf-1")
    var vtextf2 = document.getElementById("textf-2")
    var vtextf3 = document.getElementById("textf-3")

    var vtextfa = document.getElementById("textfa")
    var vtextfa1 = document.getElementById("textfa-1")
    
    

    vlogo.addEventListener("mouseenter", cambiarFondo)
    function cambiarFondo(){
        vfooter.style.backgroundColor = "#cccccc";
        vlogo.style.color = "#23252d";

        vtitlef.style.color = "#23252d";
        vtitlef1.style.color = "#23252d";
        vtitlef2.style.color = "#23252d";
        vtitlef3.style.color = "#23252d";

        vtextf.style.color = "#23252d";
        vtextf1.style.color = "#23252d";
        vtextf2.style.color = "#23252d";
        vtextf3.style.color = "#23252d";

        vtextfa.style.color = "#23252d";
        vtextfa1.style.color = "#23252d";
    }

    vlogo.addEventListener("mouseleave", restaurarFondo)
    function restaurarFondo(){
        vfooter.style.backgroundColor = "#23252d"
        vlogo.style.color = "#ffffff";

        vtitlef.style.color = "#ffffff";
        vtitlef1.style.color = "#ffffff";
        vtitlef2.style.color = "#ffffff";
        vtitlef3.style.color = "#ffffff";

        vtextf.style.color = "#ffffff";
        vtextf1.style.color = "#ffffff";
        vtextf2.style.color = "#ffffff";
        vtextf3.style.color = "#ffffff";

        vtextfa.style.color = "#ffffff";
        vtextfa1.style.color = "#ffffff";
    }