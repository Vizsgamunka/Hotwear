import AdatModell from "../model/TermekModel.js";
import TermekView from "../view/TermekView.js";
import TermekekView from "../view/TermekekView.js";
class TermekController {
    constructor() {
        const modell_id=$('meta[name=modell]').attr('content');
        console.log("termek controller")
        const adatmodell = new AdatModell();
        console.log("controllerben van");
        this.termekLeiras = "/api/modell_keres/" + modell_id;
        console.log("Controllerben megjelen", modell_id);
        adatmodell.adatBe(this.termekLeiras, this.megjelenitTermekInformacio);
    }
    megjelenitTermekInformacio(termekInformacio) {
        let szuloElem = $(".ruha_article");
        szuloElem.empty()
        new TermekView(termekInformacio, szuloElem);
    }

}

export default TermekController;
