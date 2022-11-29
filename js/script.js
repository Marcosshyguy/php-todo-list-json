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
// const { createApp } = Vue;

// createApp({
//   data() {
//     return {
//       todoList: [],
//       newTodo: "",
//     };
//   },
//   created() {
//     axios.get("server.php").then((resp) => {
//       this.todoList = resp.data;
//     });
//   },
//   methods: {
//     addTodo() {
//       const data = {
//         newTodo: this.newTodo,
//       };

//       axios
//         .post("server.php", data, {
//           headers: { "Content-Type": "multipart/form-data" },
//         })
//         .then((resp) => {
//           this.todoList = resp.data;
//           this.newTodo = "";
//         });
//     },
//   },
// }).mount("#app");