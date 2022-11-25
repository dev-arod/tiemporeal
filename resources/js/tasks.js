import { getTasks } from "./getdata.js";

const tasks = () => {
    return {
        datatasks: [],
        async init() {
            await getTasks().then((response) => {
                this.datatasks = response;
                console.log(this.datatasks);
            });
            console.log("iniciando listen");
            window.Echo.channel("Tasks").listen(".New-Task", (e) => {
                let description = e.task.description;
                this.datatasks.push(description);
            });
        },
        updateTasks(ttask) {
            this.datatasks.push(ttask);
        },
    };
};

window.tasks = tasks;
