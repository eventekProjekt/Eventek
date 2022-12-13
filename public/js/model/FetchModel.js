
class FetchModel {
    #token

    constructor(token) {
        this.#token = token;
    }

    getData(endPoint, callback) {
        fetch(endPoint, {
            method: 'GET',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': this.#token,
            }
        })
            .then((response) => response.json())
            .then((data) => {
                console.log('Success: ', data);
                callback(data);
            })
            .catch((error) => {
                console.error('Error: ', error);
            });
    }

    postData(endPoint, dataObject) {
        fetch(endPoint, {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': this.#token,
        },
        body: JSON.stringify(dataObject),
        })
        .then((response) => response.json())
        .then((data) => {
            console.log('Success: ', data);
        })
        .catch((error) => {
            console.error('Error: ', error);
        });
    }

    putData(endPoint, dataObject) {
        fetch(endPoint, {
        method: 'PUT',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': this.#token,
        },
        body: JSON.stringify(dataObject),
        })
        .then((response) => response.json())
        .then((data) => {
            console.log('Success:', data);
        })
        .catch((error) => {
            console.error('Error:', error);
        });
    }

    delData(endPoint) {
        fetch(endPoint, {
        method: 'DELETE',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': this.#token,
        },
        })
        .then((response) => response.json())
        .then((data) => {
            console.log('Success:', data);
        })
        .catch((error) => {
            console.error('Error:', error);
        });
    }
}

export default FetchModel;