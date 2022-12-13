
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
}

export default FetchModel;