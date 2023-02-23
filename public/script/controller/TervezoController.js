import AdatModell from "../model/TervezoModel.js";
import PublicTervezoView from "../view/PublicTervezoView.js";
class TervezoController {
    constructor() {
        const tervezo=$('meta[name=tervezo]').attr('content');
        const adatmodell = new AdatModell();
        this.tervezoLeiras = "/api/tervezo_keres/" +t_azon;
        adatmodell.adatBe(this.tervezoLeiras, this.megjelenitTervezoInformacio);
    }
    megjelenitTervezoInformacio(tervezoInformacio) {
        let szuloElem = $(".ruha_article");
        szuloElem.empty()
        new PublicTervezoView(tervezoInformacio, szuloElem);
    }

}

export default TervezoController;
