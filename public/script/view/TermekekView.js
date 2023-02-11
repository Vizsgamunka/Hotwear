class TermekekView {
    #elem;
    constructor(elem, szuloElem) {
        this.#elem = elem;
        szuloElem.append(`
        <div id="termekId${elem.termek_id}" class="card">
            <img src="${elem.kep}" alt=" Avatar" style="width:100%">
            <div class="container">
                <h4><b>${elem.nev}</b></h4>
                <div>
                    <spam id="termekAr">${elem.ar}</spam>
                    <button id="kosarba">Kosár</button>
                </div>
            </div>
        </div>
        `);

        this.modellMegjelenit = $(`#termekId${elem.termek_id}`);

        console.log(this.modellMegjelenit);
        this.modellMegjelenit.on("click", () => {
            console.log(this.modellMegjelenit);
            console.log("módosít az");

            this.kattintasTrigger(elem.modell)
        });
    }

    kattintasTrigger(modell_id) {
        console.log("triggerben", modell_id);
        const esemeny = new CustomEvent('modellMegjelenit', { detail: modell_id});
        window.dispatchEvent(esemeny);
    }

}

export default TermekekView;