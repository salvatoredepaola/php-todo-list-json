const { createApp } = Vue;

createApp({

    data() {
        return {
            apiUrl: "api.php"
        }
    },
    methods: {
        chiamata() {
            console.log("testo");
        }
    },
    mounted() {
        console.log("App caricata");
        axios.get(this.apiUrl).then((response) => {
            console.log("Dati ricevuti: ", response);
        });
    }

}).mount("#app");