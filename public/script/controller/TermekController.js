import AdatModell from "../model/TermekModel.js";
import PublicTermekView from "../view/PublicTermekView.js";

class TermekController {
    constructor() {
        const adatmodell = new AdatModell();
        $(window).on('modellMegjelenit', (event)=>{
            this.termekLeiras = "/api/modell_keres/"+event.detail;
            adatmodell.adatBe(this.termekLeiras, this.megjelenitTermekInformacio);
        });
    }

    megjelenitTermek(id) {
        const adatmodell = new AdatModell();
        adatmodell.adatBe(`/api/modell_keres/${id}`, this.megjelenitTermekInformacio);
    }

    megjelenitTermekInformacio(tomb) {
        let szuloElem = $(".termek_article");
        szuloElem.empty();
        new PublicTermekView(tomb, szuloElem);
    }
}

export default TermekController;
