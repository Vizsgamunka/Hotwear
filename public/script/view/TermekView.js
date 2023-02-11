class TermekView {
    #elem;
    constructor(elem, szuloElem) {
        this.#elem = elem;
        szuloElem.append(`
        <div id="termek_informacio">
            <img src="${elem.kep}" alt=" Avatar" style="width:100%">
            <h4><b>${elem.nev}</b></h4>
            <p>${elem.szezon}</p>
            <p>${elem.tervezo.nev}</p>
            <p>${elem.leiras}</p>
            <p>maximális mennyiség: ${elem.max_mennyiseg}</p>
            <p>${elem.kategoria.nev}</p>
            <select id='meretek'></select>
            <label for="mennyiseg">Mennyiség</label>
            <input id="mennyiseg" type="number" step="1" min="1" value="1"></input>
            <button type="button">Kosárba</button>
        </div>
        `);

        elem.termekek.forEach(termek => {
            $('#meretek').append(`
                <option value='${termek.termek_id}'>${termek.meret}</option>
            `);
        });


        let mennyiseg = $('#mennyiseg');
        let termek = $('#termek');
    }


}

export default TermekView;