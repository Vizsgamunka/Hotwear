class TervezoModel {
    #tervezoTomb = [];

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
                this.#tervezoTomb = data;
                myCallBack(this.#tervezoTomb);
            })
            .catch((error) => {
                console.error('Error:', error);
            });
    }
}

export default TervezoModel;