import FelhasznaloModel from "../model/FelhasznaloModel.js";
import FelhasznaloView from "../view/FelhasznaloView.js";

class FelhasznaloController{
    constructor(){
        console.log("itt vagyok");
        const felhasznalomodel = new FelhasznaloModel();
        felhasznalomodel.adatBe('/api/felhasznalok', this.megjelenit);
    }

    megjelenit(tomb){
        let szuloElem = $(".felhasznalo_body");
        tomb.forEach(felhasznalo => {
            new FelhasznaloView(felhasznalo, szuloElem);
        });
    }
}

export default FelhasznaloController;