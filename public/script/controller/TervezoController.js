import TervezoModel from "../model/TervezoModel.js";
import TervezoView from "../view/TervezoView.js";

class TervezoController{
    constructor(){
        const tervezomodel = new TervezoModel();
        tervezomodel.adatBe('/api/tervezok', this.megjelenit);
    }

    megjelenit(tomb){
        let szuloelem=$(".tervezo_article");
        tomb.forEach(tervezo => {
            new TervezoView(tervezo, szuloelem);
        });
    }
}

export default TervezoController;