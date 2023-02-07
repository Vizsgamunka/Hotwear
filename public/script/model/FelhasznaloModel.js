class FelhasznaloModel{
    #felhasznloTomb = [];
    
    constructor(){

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
                this.#felhasznloTomb = data;
                myCallBack(this.#felhasznloTomb);
            })
            .catch((error) => {
                console.error('Error:', error);
            });
    }
}

export default FelhasznaloModel;