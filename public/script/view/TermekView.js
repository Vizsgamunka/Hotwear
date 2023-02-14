class TermekView {
    #elem;
    constructor(elem, szuloElem) {
        let termekek = $('#meretek');


        elem.termekek.forEach(termek => {
            termekek.append(`
                <option value='${termek.termek_id}'>${termek.meret}</option>
            `);
        });

        arBeallit();

        termekek.on("change", () => {
            arBeallit();
        });

        function arBeallit() {
            $('#ar').html(elem.termekek.find(t => t.termek_id == termekek.val()).ar);
        }

        let mennyiseg = $('#mennyiseg');
        let termek = $('#termek');
    }


}

export default TermekView;