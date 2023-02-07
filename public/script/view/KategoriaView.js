class KategoriaView{
    #elem;
    constructor(elem, szuloElem){
        this.#elem = elem;
        szuloElem.append(`
        <div id="myDropdown" class="dropdown-content">
        <button id="kategoriaValaszto${elem.kategoria_id}">${elem.nev}</button>
        </div>
        `);
        this.kategoriaMegjelenit=$(`#kategoriaValaszto${elem.kategoria_id}`);

        console.log(this.kategoriaMegjelenit);
        this.kategoriaMegjelenit.on("click", ()=> 
        {
            console.log(this.kategoriaMegjelenit);
            console.log("módosít az");

            this.kattintasTrigger("kategoriaValaszto")
        });

        
    }

            
        kattintasTrigger(esemenyNeve)
        {
            console.log("triggerben", esemenyNeve);
            const esemeny = new CustomEvent(esemenyNeve, {detail:this.#elem.kategoria_id});
            window.dispatchEvent(esemeny);
        }

}

export default KategoriaView;