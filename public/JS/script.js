//Variable servant de flag pour définir la taille du menu
let nav = false;

function navbarWider() {

    //Variable récupérant la balise contenant le menu
    let menu = document.getElementById("bgNav");

    //Variable récupérant les boutons du menu dans un array
    let items = document.getElementsByClassName("lienNav");

    //Vérifie l'étât du flag
    if (nav === false) {

        //Change l'étât du flag
        nav = true;

        //Modifie la taille du menu pour le responsive
        menu.setAttribute("style", 'height:400px;');

        //Modifie les boutons du menu pour le responsive
        for (let i = 0; i < items.length; i++) {
            items[i].style.height = "60px";
            let linkItem = items[i].children;
            linkItem[0].style.paddingTop = "20px";
        }

    }
    //Vérifie l'étât du flag
    else if (nav === true) {

        //Modifie l'étât du flag
        nav = false;

        //Retire l'attribut style pour que le menu reprenne sa taille normale
        menu.removeAttribute("style");
    }
}