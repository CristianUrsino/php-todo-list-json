const { createApp } = Vue

  createApp({
    data() {
      return {
        apiUrl:'server.php',
        todoList:[],
        newTask:"",
      };
    },
    methods: {
        readList() {
            axios.get(this.apiUrl)
            .then((response)=>{
            this.todoList = response.data;
            })
            .catch((error)=>{
            console.log(error);
            })
            .finally(()=>{
    
            });
        },
        addTask(){
            const data = new FormData();
            data.append("task",this.newTask);
            axios.post(this.apiUrl, data) 
            .then((response)=>{
            console.log(response.data);
            this.todoList = response.data;
            })
            .catch((error)=>{
            console.log(error);
            })
            .finally(()=>{
            })
        },
        toggleDoneTask(index){
            const data = new FormData();
            data.append("toggleDoneTask",index);
            axios.post(this.apiUrl, data) 
            .then((response)=>{
            console.log(response.data);
            this.todoList = response.data;
            })
            .catch((error)=>{
            console.log(error);
            })
            .finally(()=>{
            })
        },
        deleteTask(index){
            const data = new FormData();
            data.append("deleteTask",index);
            axios.post(this.apiUrl, data) 
            .then((response)=>{
            console.log(response.data);
            this.todoList = response.data;
            })
            .catch((error)=>{
            console.log(error);
            })
            .finally(()=>{
            })
        }
    },
    
    mounted() {
      this.readList();
    },
  }).mount('#app')