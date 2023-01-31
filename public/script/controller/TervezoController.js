import AdatModell from "../model/TervezoModel.js";
import TervezoView from "../view/TervezoView.js";

class TervezoController{
    constructor(){
        console.log("tervezo controller")
        const adatmodell = new AdatModell();
        adatmodell.adatBe('/api/tervezok', this.megjelenit);
    }

    megjelenit(tomb){
        console.log(tomb);
        let szuloelem=$(".tervezo_article");
        tomb.forEach(tervezo => {
            new TervezoView(tervezo, szuloelem);
        });
    }
}

export default TervezoController;