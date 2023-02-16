class PublicTermekView {
    #elem;
    constructor(elem, szuloElem) {
        let termekek = $('#meretek');
        var termekMeretek = [];



        elem.termekek.forEach(termek => {
            termekMeretek.push(
                termek.meret

            );

        });
        termekMeretek = new Set(termekMeretek);
        console.log(termekMeretek);
        termekMeretek.forEach(meret => {
            termekek.append(`
                <option value='${meret}'>${meret}</option>
            `);
            
        });
        let meretElem = $('#meret');
        console.log(this.termekek);
        this.kosarbaTesz = $(`#gomb`);
        this.kosarbaTesz.on("click", () => {
            console.log("módosít az");
            console.log(elem);
/*             this.megvasaroltTermek.mennyiseg = mennyisegElem.val(); */
            this.megvasaroltTermek.meret = meretElem.val();
            this.kattintasTrigger('kosarbaTesz')
        });


        let termek = $('#termek');
    }
    kattintasTrigger(esemenyneve) {
        console.log("triggerben", esemenyneve);
        const esemeny = new CustomEvent(esemenyneve, { detail: this.megvasaroltTermek });
        window.dispatchEvent(esemeny);
    }


}

export default PublicTermekView;