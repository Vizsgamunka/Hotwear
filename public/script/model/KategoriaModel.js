class KategoriaModel {
    #kategoriaTomb = [];

    constructor() {
       
    }

    adatBe(vegpont, myCallBack) {
        fetch(vegpont, {
            method: 'GET',
            headers: {
                'Content-Type': 'application/json',
            }
        })
            .then((response) => response.json())
            .then((data) => {
                this.#kategoriaTomb = data;
                myCallBack(this.#kategoriaTomb);
            })
            .catch((error) => {
                console.error('Error:', error);
            });
    }
}

export default KategoriaModel;