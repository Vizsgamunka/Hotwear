class TermekekModel {
    #termekekTomb = [];

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
                this.#termekekTomb = data;
                myCallBack(this.#termekekTomb);
            })
            .catch((error) => {
                console.error('Error:', error);
            });
    }
}

export default TermekekModel;