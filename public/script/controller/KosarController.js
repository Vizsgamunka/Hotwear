import AdatModell from "../model/KosarModel.js";
import KosarView from "../view/KosarView.js";
import PublicTermekView from "../view/PublicTermekView.js";

class KosarController{
    constructor(){
        const adatmodell = new AdatModell();
        //adatmodell.adatBe('/api/modellek', this.megjelenitTermekek);
        $(window).on('kosarbaTesz', (event)=>{
            console.log(event.detail)
         }) 
    }

    megjelenitTermekek(tomb){
        let szuloElem=$(".kosar_article");
        szuloElem.empty()
        tomb.forEach(termek => {
            new PublicTermekekView(termek, szuloElem);
        });
    }
    
}

export default KosarController;