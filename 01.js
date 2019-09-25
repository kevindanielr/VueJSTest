const app = new Vue({
    el: '#app',
    data: {//data
        titulo: 'Hola mundo con Vue',
        frutas: ['Manzanas','Peras','Melocotones'],
        frutas2: [
            {nombre: 'Pera', cantidad:10},
            {nombre: 'Manzana', cantidad:11},
            {nombre: 'Platano', cantidad:14},
            {nombre: 'Melocoton', cantidad:0}
        ],
        nuevaFruta:[
            {nombre:'', cantidad:''}
        ],
        total: 0
    },
    methods:{//metodos
        agregar: function(){//una forma de escribirlo
            
        },
        agregarFruta(){
            // console.log('Diste click');
            this.frutas2.push({//accediento a un objeto del data
                nombre: this.nuevaFruta.nombre, 
                cantidad: this.nuevaFruta.cantidad
            });
            this.nuevaFruta = [{nombre:'', cantidad:''}]; //borrando lo del input
        }
    },
    computed: {
        sumarFruta(){
            this.total=0;//inico en 0 cada vez que se modifique una cantidad
            for(fruta of this.frutas2){
                this.total = this.total + fruta.cantidad;
            }
            return this.total;
        }
    }
})
