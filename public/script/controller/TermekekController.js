import AdatModell from "../model/TermekekModel.js";
import TermekekView from "../view/TermekekView.js";
import KategoriaView from "../view/KategoriaView.js";

class TermekekController{
    constructor(){
        console.log("termekek controller")
        const adatmodell = new AdatModell();
        adatmodell.adatBe('/api/modellek', this.megjelenitTermekek);
    }

    megjelenitTermekek(tomb){
        console.log(tomb);
        let szuloElem=$(".ruha_article");
        szuloElem.empty()
        tomb.forEach(termek => {
            new TermekekView(termek, szuloElem);
        });
    }
    
}

export default TermekekController;