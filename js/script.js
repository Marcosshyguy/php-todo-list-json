const { createApp }  = Vue

createApp({
    data(){
        return{
            answer:[],
            newToDo:""
        }
    },
    methods:{
        addToDo(){
            const data = {
                postParam: this.newToDo
            }
            axios.post("server.php", data,
            {
                headers: { "Content-Type": "multipart/form-data" },
            }).then((resp) => {
                this.answer = resp.data;
            })

            this.newToDo = "";
        },
        // funzione che prende il preciso index in cui clicchiamo e che salveremo in data e manderemo a post
        toggleText(index){
            const data = {
                doneIndex:index
            };
            axios.post("server.php", data,
            {
                headers: { "Content-Type": "multipart/form-data" },
            }).then((resp) => {
                this.answer = resp.data;
            })
        },
        // funzione che prende il preciso index in cui clicchiamo e e che in post rimuoverà la precisa posizione
        removeTodo(index){
            const data = {
                deliteIndex:index
            };
            axios.post("server.php", data,
            {
                headers: { "Content-Type": "multipart/form-data" },
            }).then((resp) => {
                this.answer = resp.data;
            })
        }
    },
    created(){
        axios.get("server.php").then((resp)=> 
        this.answer = resp.data)
    }
}).mount("#app")
