class KosarModel {
    #kosarTomb = [];

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
                this.#kosarTomb = data;
                myCallBack(this.#kosarTomb);
            })
            .catch((error) => {
                console.error('Error:', error);
            });
    }
}

export default KosarModel;