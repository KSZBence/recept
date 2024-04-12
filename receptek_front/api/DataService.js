export default class DataService {
    get(url, callback) {
        axios.get(url)
            .then(function (response) {
                callback(response)
            })
            .catch(function (error) {

                console.log(error);
            })
            .finally(function () {
            });
    }
}