import AdatModell from "../model/TermekekModel.js";
import TermekekView from "../view/TermekekView.js";
import KategoriaView from "../view/KategoriaView.js";

class TermekekController{
    constructor(){
        console.log("termekek controller")
        const adatmodell = new AdatModell();
        adatmodell.adatBe('/api/public_termekek', this.megjelenitTermekek);
        adatmodell.adatBe('/api/kategoriak', this.megjelenitKategoria);
        $(window).on('kategoriaValaszto', (event)=>{
            console.log("controllerben van");
            this.kategoriaTermekek="/api/kategoriahoz_tartozo_termekek/"+event.detail
            console.log("Controllerben megjelen", event.detail);
            adatmodell.adatBe(this.kategoriaTermekek, this.megjelenitTermekek);
         }) 
    }

    megjelenitTermekek(tomb){
        console.log(tomb);
        let szuloElem=$(".ruha_article");
        szuloElem.empty()
        tomb.forEach(termek => {
            new TermekekView(termek, szuloElem);
        });
    }
    megjelenitKategoria(tomb){
        console.log(tomb);
        let szuloElem=$("#termek_kategoriak");
        tomb.forEach(kategoria => {
            new KategoriaView(kategoria, szuloElem);
        });
    }
    
}

export default TermekekController;