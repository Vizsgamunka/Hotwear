import AdatModell from "../model/KategoriaModel.js";
import PublicKategoriaView from "../view/PublicKategoriaView.js";
import TermekekController from "../controller/TermekekController.js";

class KategoriaController{
    constructor(){
        const adatmodell = new AdatModell();
        const termekekController = new TermekekController();
        adatmodell.adatBe('/api/kategoriak', this.megjelenitKategoria);
        $(window).on('kategoriaValaszto', (event)=>{
            this.kategoriaTermekek=`/api/kategoria/${event.detail}/modellek`;
            adatmodell.adatBe(this.kategoriaTermekek, termekekController.megjelenitTermekek);
         }) 
    }

    megjelenitKategoria(tomb){
        let szuloElem=$("#termek_kategoriak");
        tomb.forEach(kategoria => {
            new PublicKategoriaView(kategoria, szuloElem);
        });
    }
}

export default KategoriaController;