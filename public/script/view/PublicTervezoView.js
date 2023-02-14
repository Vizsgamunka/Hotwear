class PublicTervezoView{
    #elem;
    constructor(elem, szuloElem){
        this.#elem = elem;
        szuloElem.append(`
            <div class="tervezo_div">
                <h3>${elem.nev}</h3>
            </div>
        `);
    }
}

export default PublicTervezoView;