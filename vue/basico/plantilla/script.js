const app = new Vue({
    el: '#hola',
    data:{
        titulo: 'mi titulo',
        array:[
            {texto: 'texto 1'},
            {texto: 'texto 2'},
            {texto: 'texto 3'}
        ],
        contenido: 'nuevo'
    },
    methods:{
       mi_funcion(){
           this.array.push({
               texto:this.contenido
           })
       }
    }
})

