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
        }
    },
    created(){
        axios.get("server.php").then((resp)=> 
        this.answer = resp.data)
    }
}).mount("#app")
