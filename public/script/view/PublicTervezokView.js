class PublicTervezoView{
    #elem;
    constructor(elem, szuloElem){
        this.#elem = elem;
        szuloElem.append(`
            <div class="col-lg-3">
                <a href="/tervezok/${elem.t_azon}">
                    <div id='tervezoId${elem.t_azon}' class="card card-span h-100 text-white"><img class="img-fluid h-100" src="${elem.kep}" alt="..." />
                        <div class="card-img-overlay ps-0"> </div>
                            <div class="card-body ps-0 bg-200">
                                <h5 class="fw-bold text-1000 text-truncate">${elem.nev}</h5>
                            <div class="fw-bold">
                            </div>
                        </div>
                    </div>
                </a>

            </div>
    `);

    this.tervezoMegjelenit = $(`#tervezoId${elem.t_azon}`);

    this.tervezoMegjelenit.on("click", () => {
        this.kattintasTrigger('tervezoMegjelenit')
    });

    }

    kattintasTrigger(esemenyneve) {
        const esemeny = new CustomEvent(esemenyneve, {detail: this.#elem.t_azon});
        window.dispatchEvent(esemeny);
    }
}

export default PublicTervezoView;
