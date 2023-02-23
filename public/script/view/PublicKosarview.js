class PublicKosarView {
    #elem;
    constructor(elem, szuloElem) {
        this.#elem = elem;
        szuloElem.append(`
            <div class="col-lg-3 col-md-4">
                <a href="/termekek/${elem.modell_id}">
                    <div id='termekId${elem.termek.termek_id}' class="card card-span h-100 text-white"><img class="img-fluid h-100" src="${elem.termek.modell_obj.kep}" alt="..."/>
                        <div class="card-img-overlay ps-0"></div>
                            <div class="card-body ps-0 bg-200">
                                <h5 class="fw-bold text-1000 text-truncate">${elem.termek.modell_obj.nev}</h5>
                                <h5 class="fw-bold text-1000 text-truncate">Méret: ${elem.termek.meret}</h5>
                            <div class="fw-bold">
                                <h5 class="fw-bold text-1000 text-truncate">${elem.termek.modell_obj.ar} Ft</h5>
                                <h5 class="fw-bold text-1000 text-truncate">Mennyiség: ${elem.mennyiseg}</h5>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        `);



    }


}

export default PublicKosarView;
