import AdatModell from "../model/TermekModel.js";
import PublicTermekView from "../view/PublicTermekView.js";

class TermekController {
    constructor() {
        const modell_id=$('meta[name=modell]').attr('content');
        const adatmodell = new AdatModell();
        this.termekLeiras = "/api/modell_keres/" + modell_id;
        this.kosarbaTeszUrl = "/api/kosarbaTesz";
        adatmodell.adatBe(this.termekLeiras, this.megjelenitTermekInformacio);


        $(window).on('kosarbaTesz', (event)=>{
        console.log(event.detail);
            adatmodell.kosarbaTesz(this.kosarbaTeszUrl, event.detail );
        });
    }
    megjelenitTermekInformacio(termekInformacio) {
        let szuloElem = $(".ruha_article");
        szuloElem.empty()
        new PublicTermekView(termekInformacio, szuloElem);
    }



}

export default TermekController;
