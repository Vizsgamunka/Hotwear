import AdatModell from "../model/TermekModel.js";
import TermekView from "../view/TermekView.js";

class TermekController{
    constructor(){
        console.log("termek controller")
        const adatmodell = new AdatModell();
        adatmodell.adatBe('/api/public_termekek', this.megjelenit);

    }
    // amikor kiválasztom a sapka kategóriát, akkor kiváltódik ez az esemény
    //kategoriavalsztas(sapkaid) {
    /*     adatmodell.adatBe('/api/kategoriahoz_tartozo_termekek/'+sapkaid, this.megjelenit);
    } */

    megjelenit(tomb){
        console.log(tomb);
        let szuloElem=$(".ruha_article");
        tomb.forEach(termek => {
            new TermekView(termek, szuloElem);
        });
    }
    
}

export default TermekController;