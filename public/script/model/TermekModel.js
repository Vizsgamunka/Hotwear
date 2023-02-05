class TermekModel {
    #termekTomb = [];

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
                this.#termekTomb = data;
                myCallBack(this.#termekTomb);
            })
            .catch((error) => {
                console.error('Error:', error);
            });
    }
}

export default TermekModel;