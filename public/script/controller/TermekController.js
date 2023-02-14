import AdatModell from "../model/TermekModel.js";
import PublicTermekView from "../view/PublicTermekView.js";
import PublicTermekekView from "../view/PublicTermekekView.js";
class TermekController {
    constructor() {
        const modell_id=$('meta[name=modell]').attr('content');
        const adatmodell = new AdatModell();
        this.termekLeiras = "/api/modell_keres/" + modell_id;
        adatmodell.adatBe(this.termekLeiras, this.megjelenitTermekInformacio);
    }
    megjelenitTermekInformacio(termekInformacio) {
        let szuloElem = $(".ruha_article");
        szuloElem.empty()
        new PublicTermekView(termekInformacio, szuloElem);
    }

}

export default TermekController;
