import AdatModell from "../model/TermekModel.js";
import TermekView from "../view/TermekView.js";
import TermekekView from "../view/TermekekView.js";
class TermekController{
    constructor(){
        console.log("termek controller")
        const adatmodell = new AdatModell();
        $(window).on('modellMegjelenit', (event)=>{
            console.log("controllerben van");
            this.termekLeiras="/api/modell_keres/"+event.detail
            console.log("Controllerben megjelen", event.detail);
            adatmodell.adatBe(this.termekLeiras, this.megjelenitTermekInformacio);
         }) 
    }
    megjelenitTermekInformacio(termekInformacio){
        let szuloElem=$(".ruha_article");
        szuloElem.empty()
        new TermekView(termekInformacio, szuloElem);
    }

}

export default TermekController;
