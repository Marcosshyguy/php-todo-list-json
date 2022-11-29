const { createApp }  = Vue

createApp({
    data(){
        return{
            answer:[],
        }
    },
    methods:{

    },
    created(){
        axios.get("server.php").then((resp)=> 
        this.answer = resp.data)
    }
}).mount("#app")