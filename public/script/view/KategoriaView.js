class KategoriaView{
    #elem;
    #active;
    constructor(elem, szuloElem){
        this.#elem = elem;
        szuloElem.append(`
            <li id="kategoriaValaszto${elem.kategoria_id}" class="list-group-item" aria-current="true">${elem.nev}</li>
        `);  

        this.kategoriaMegjelenit=$(`#kategoriaValaszto${elem.kategoria_id}`);

        console.log(this.kategoriaMegjelenit);
        this.kategoriaMegjelenit.on("click", ()=> 
        {
            console.log(this.kategoriaMegjelenit);
            szuloElem.children().removeClass('active');
            this.kategoriaMegjelenit.addClass('active');
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