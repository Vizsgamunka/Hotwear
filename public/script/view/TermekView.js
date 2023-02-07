class TermekView{
    #elem;
    constructor(elem, szuloElem){
        this.#elem = elem;
        szuloElem.append(`
            <div class="termek_div">
                <h3>${elem.kep}</h3>
                <h3>${elem.nev}</h3>
                <div>
                    <spam>${elem.ar}</spam>
                    <button id="kosarba">Kosár</button>
                </div>
            </div>
        `);

    }


}

export default TermekView;