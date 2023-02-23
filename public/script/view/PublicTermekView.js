class PublicTermekView {
    #elem;

    constructor(elem, szuloElem) {

        let termekek = $('#meretek');
        let mennyiseg = $('#mennyiseg');
        let keszlet = $('#termek-keszlet')




        elem.termekek.forEach(termek => {
            $('#meretek').append(`
                <option value='${termek.termek_id}'>${termek.meret}</option>
            `);
        });


        keszletBeallit();

        termekek.on("change", () => {
            keszletBeallit();
        });

        function keszletBeallit() {
            let darab = elem.termekek.find(t => t.termek_id == termekek.val()).keszlet;
            keszlet.html(darab);
            mennyiseg.attr('max', darab);
            if (mennyiseg.val()>darab){
                mennyiseg.val(darab);
            }
        }


        this.kosarbaTesz = $(`#gomb`);
        this.kosarbaTesz.on("click", () => {
            console.log("módosít az");
            this.kattintasTrigger('kosarbaTesz', termekek.val(), mennyiseg.val())
        });



    }
    kattintasTrigger(esemenyneve, id, mennyiseg) {
        console.log("triggerben", esemenyneve);
        const esemeny = new CustomEvent(esemenyneve, { detail:
                {
                    id: id,
                    mennyiseg: mennyiseg
                }
        });
        window.dispatchEvent(esemeny);
    }


}

export default PublicTermekView;
