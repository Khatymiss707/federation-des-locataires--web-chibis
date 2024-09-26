import "../federation-des-locataires--web-chibis/styles.scss";

// element positionnement footer 
let minwidth = querySelector(".footer").style.width; 
let footer = document.querySelector(".footer"); 
let queb = document.querySelector(".quebec");
let rohq = document.querySelector(".rohq"); 
let cnl = document.querySelector(".cnl"); 
let frappu = document.querySelector(".frapru"); 
let partenaire = document.querySelector(".partenaires"); 
let joindre = document.querySelector(".joindre");  
let titre = document.querySelector(".titre_footer");   
let address = document.querySelector(".address");
let contactes = document.querySelector(".contactes");
let lien = document.querySelector(".lien");
let iconesReseaux = document.querySelector("icones_reseaux");
let logo = document.querySelector(".logo");

let column1 = document.createElement("div");


let column2 = document.createElement("div");


if(minwidth >= 768) {
    footer.appendChild("column1");
    column1.appendChild("joindre");
    column1.appendChild("adresse");
    column1.appendChild("titre");
    column1.appendChild("contactes");
    column1.appendChild("lien");
    column1.appendChild("iconesReseaux");
    column1.appendChild("logo");
    column1.setAttribute(".column1");
    
    footer.appendChild("column2");
    column2.appendChild("partenaire");
    column2.appendChild("queb");
    column2.appendChild("rohq");
    column2.appendChild("frappu");
    column2.appendChild("cnl");
    column2.setAttribute(".column2");
} else {

    footer.removeChild("column1");
    column1.removeChild("joindre");
    column1.removeChild("adresse");
    column1.removeChild("titre");
    column1.removeChild("contactes");
    column1.removeChild("lien");
    column1.removeChild("iconesReseaux");
    column1.removeChild("logo");

    footer.removeChild("column2");
    column2.removeChild("partenaire");
    column2.removeChild("queb");
    column2.removeChild("rohq");
    column2.removeChild("frappu");
    column2.removeChild("cnl");
}