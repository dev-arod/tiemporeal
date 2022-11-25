import axios from "axios";

export const getTasks = () => {
    return new Promise((resolve, reject) => {
        console.log("Obtenindo tareas");
        let url = "/get-tasks";
        axios(url)
            .then((response) => {
                resolve(response.data);
            })
            .catch(function (err) {
                console.error(err);
                reject(err);
            });
    });
};
