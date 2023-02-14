import TervezoModel from "../model/TervezoModel.js";
import PublicTervezoView from "../view/PublicTervezoView.js";

class TervezoController{
    constructor(){
        const tervezomodel = new TervezoModel();
        tervezomodel.adatBe('/api/tervezok', this.megjelenit);
    }

    megjelenit(tomb){
        let szuloelem=$(".tervezo_article");
        tomb.forEach(tervezo => {
            new PublicTervezoView(tervezo, szuloelem);
        });
    }
}

export default TervezoController;