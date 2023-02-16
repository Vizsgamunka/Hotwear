import AdatModell from "../model/TervezokModel.js";
import PublicTervezokView from "../view/PublicTervezokView.js";

class TervezoController{
    constructor(){
        const adatmodell = new AdatModell();
        adatmodell.adatBe('/api/tervezok', this.megjelenit);
    }

    megjelenit(tomb){
        let szuloelem=$(".tervezok_article");
        tomb.forEach(tervezo => {
            new PublicTervezokView(tervezo, szuloelem);
        });
    }
}

export default TervezoController;