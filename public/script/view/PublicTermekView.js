class PublicTermekView {
    #elem;
    constructor(elem, szuloElem) {
        let termekek = $('#meretek');


        elem.termekek.forEach(termek => {
            termekek.append(`
                <option value='${termek.termek_id}'>${termek.meret}</option>
            `);
            
        });

        let mennyisegElem = $('#mennyiseg');
        let meretElem = $('#meret');
        console.log(this.mennyisegElem);
        console.log(this.meretElem);
        this.kosarbaTesz = $(`#gomb`);
        this.kosarbaTesz.on("click", () => {
            console.log(this.mennyisegElem);
            console.log(this.meretElem);
            console.log("módosít az");
            console.log(elem);
            this.megvasaroltTermek.mennyiseg=mennyisegElem.val();
            this.megvasaroltTermek.meret=meretElem.val();
            this.kattintasTrigger('kosarbaTesz')
        });

        
        let termek = $('#termek');
    }
    kattintasTrigger(esemenyneve) {
        console.log("triggerben", esemenyneve);
        const esemeny = new CustomEvent(esemenyneve, {detail: this.megvasaroltTermek});
        window.dispatchEvent(esemeny);
    }


}

export default PublicTermekView;