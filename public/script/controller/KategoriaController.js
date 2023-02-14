import AdatModell from "../model/KategoriaModel.js";
import KategoriaView from "../view/KategoriaView.js";
import TermekekController from "../controller/TermekekController.js";

class KategoriaController{
    constructor(){
        console.log("kategoria controller")
        const adatmodell = new AdatModell();
        const termekekController = new TermekekController();
        adatmodell.adatBe('/api/kategoriak', this.megjelenitKategoria);
        $(window).on('kategoriaValaszto', (event)=>{
            console.log("controllerben van");
            this.kategoriaTermekek=`/api/kategoria/${event.detail}/modellek`
            console.log("Controllerben megjelen", event.detail);
            adatmodell.adatBe(this.kategoriaTermekek, termekekController.megjelenitTermekek);
         }) 
    }

    megjelenitKategoria(tomb){
        console.log(tomb);
        let szuloElem=$("#termek_kategoriak");
        tomb.forEach(kategoria => {
            new KategoriaView(kategoria, szuloElem);
        });
    }
}

export default KategoriaController;