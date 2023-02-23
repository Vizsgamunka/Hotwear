import AdatModell from "../model/KosarModel.js";
import KosarView from "../view/KosarView.js";
import TermekekController from "../controller/TermekekController.js";
import PublicKosarView from "../view/PublicKosarview.js";


class KosarController {
    constructor() {
        const adatmodell = new AdatModell();
        this.termekek = `/api/kosar`;
        adatmodell.adatBe(this.termekek, this.megjelenitKosar);
        $(window).on('kosarbaTesz', (event) => {
            this.termekek = `/api/termekek`;
            adatmodell.adatBe(this.termekek, this.megjelenitKosar);
        })
    }

    megjelenitKosar(tomb) {
        let szuloElem = $(".kosar_article");
        szuloElem.empty()
        tomb.forEach(termek => {
            new PublicKosarView(termek, szuloElem);
        });
    }

}

export default KosarController;
