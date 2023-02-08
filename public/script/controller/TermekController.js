import AdatModell from "../model/TermekModel.js";
import TermekView from "../view/TermekView.js";
import KategoriaView from "../view/KategoriaView.js";

class TermekController{
    constructor(){
        console.log("termek controller")
        const adatmodell = new AdatModell();
        adatmodell.adatBe('/api/public_termekek', this.megjelenitTermek);
        adatmodell.adatBe('/api/kategoriak', this.megjelenitKategoria);
        $(window).on('kategoriaValaszto', (event)=>{
            console.log("controllerben van");
            this.kategoriaTermekek="/api/kategoriahoz_tartozo_termekek/"+event.detail
            console.log("Controllerben megjelen", event.detail);
            adatmodell.adatBe(this.kategoriaTermekek, this.megjelenitTermek);
         }) 
    }

    megjelenitTermek(tomb){
        console.log(tomb);
        let szuloElem=$(".ruha_article");
        szuloElem.empty()
        tomb.forEach(termek => {
            new TermekView(termek, szuloElem);
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

export default TermekController;