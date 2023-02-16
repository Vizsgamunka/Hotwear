class TervezokModel {
    #tervezokTomb = [];

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
                this.#tervezokTomb = data;
                myCallBack(this.#tervezokTomb);
            })
            .catch((error) => {
                console.error('Error:', error);
            });
    }
}

export default TervezokModel;