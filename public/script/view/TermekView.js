class TermekView{
    #elem;
    constructor(elem, szuloElem){
        this.#elem = elem;
        szuloElem.append(`
            <div class="termek_div">
                <h3>${elem.modell}</h3>
                <h3>${elem.meret}</h3>
                <h3>${elem.ar}</h3>
            </div>
        `);
    }
}

export default TermekView;