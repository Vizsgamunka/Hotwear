class PublicKategoriaView{
    #elem;
    #active;
    constructor(elem, szuloElem){
        this.#elem = elem;
        szuloElem.append(`
            <li id="kategoriaValaszto${elem.kategoria_id}" class="list-group-item" aria-current="true">${elem.nev}</li>
        `);  

        this.kategoriaMegjelenit=$(`#kategoriaValaszto${elem.kategoria_id}`);

        this.kategoriaMegjelenit.on("click", ()=> 
        {
            szuloElem.children().removeClass('active');
            this.kategoriaMegjelenit.addClass('active');

            this.kattintasTrigger("kategoriaValaszto")
        });

        
    }

            
        kattintasTrigger(esemenyNeve)
        {
            const esemeny = new CustomEvent(esemenyNeve, {detail:this.#elem.kategoria_id});
            window.dispatchEvent(esemeny);
        }

}

export default PublicKategoriaView;