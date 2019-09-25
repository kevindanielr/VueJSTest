const app = new Vue({
    el: '#app',
    data:{
        titulo: 'GYM con Vue',
        tareas: [],
        nuevaTarea: ''
    },
    methods: {
        agregarTarea(){
            this.tareas.push({
                nombre: this.nuevaTarea,
                estado: false
            });
            this.nuevaTarea='';
        },
        editarTarea(index){
            this.tareas[index].estado = true;
        },
        eliminar(index){
            this.tareas.split(index,1);
        }
    }
})