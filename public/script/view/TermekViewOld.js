class PublicTermekView {
    #elem;
    constructor(elem, szuloElem) {
        this.#elem = elem;
        szuloElem.append(`
        <div class="col-lg-6 offset-lg-3">
        <div class="card">
        <img class="card-img-top" src="${elem.kep}" alt="${elem.nev}">
        <div class="card-body">
            <h5 class="card-title">${elem.nev}</h5>
            <p class="card-text">Leírás: ${elem.leiras}</p>
        </div>
        <div class="card-body">
            <ul class="list-group list-group-flush">
                <li class="list-group-item">
                    <h5 class="text-center"><i id="ar"></i></h5>
                </li>
                
                <li class="list-group-item">
                    
                    <div class="row">
                        <div class="col-5">
                            <label for="meretek">Méret</label>
                            <select id='meretek' class="form-control form-control-sm"></select>
                        </div>
                        
                        <div class="col-4">
                            <label for="mennyiseg">Mennyiség</label>
                            <input type="number" id="mennyiseg" class="form-control form-control-sm" name="quantity" min="1">
                        </div>
                        <div class="col-3">
                            <label for="gomb"></label>
                            <button id="gomb" class="btn btn-primary btn-sm">Kosárba</button> 
                        </div>
                    </div>
                    
                </li>
            </ul>
        </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Szezon: ${elem.szezon}</li>
                <li class="list-group-item">Tervezte: ${elem.tervezo.nev}</li>
                <li class="list-group-item">kategória: ${elem.kategoria.nev}</li>
                <li class="list-group-item">Maximális rendelhető: ${elem.max_mennyiseg}</li>
            </ul>
        </div>
        </div>
        `);

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

export default PublicTermekView;