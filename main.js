const { createApp } = Vue;

createApp({

    data() {
        return {
            apiUrl: "api.php",
            todoList: [ ],
            newTask: ""
        }
    },
    mounted() {
        this.getDati();
    },
    methods: {
        getDati() {
            axios.get(this.apiUrl).then((response) => {
                console.log("Dati ricevuti: ", response.data);
                this.todoList = response.data;
            });
        },
        addNewTask() {
            const data = { newTask: this.newTask };


            axios.post(this.apiUrl, data, {
                headers: { 'Content-Type': 'multipart/form-data' }
            }).then((response) => {
                console.log("Dati ricevuti: ", response.data);
                this.todoList = response.data;
            });
            console.log("Nuova task", this.newTask);
            this.newTask = "";

        },
        elimina(i) {
            console.log(i);
            const data = { elimina: i };

            axios.post(this.apiUrl, data, {
                headers: { 'Content-Type': 'multipart/form-data' }
            }).then((response) => {
                console.log("Dati ricevuti: ", response.data);
                this.todoList = response.data;
            });
            
        }
    }

}).mount("#app");