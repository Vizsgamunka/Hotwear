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

    kosarbaTesz(endpoint, data){
        $.ajax({
            type: "POST",
            url: endpoint,
            data: data,
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: {
                id:data.id,
                mennyiseg:data.mennyiseg
            },
            dataType: 'json'
        });
    }
}

export default TermekModel;
