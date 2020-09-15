Vue.component('contador',{
    template: //html
    `
    <div>
        <h3>{{ numero }}</h3>
        <button @click="numero++">+</button>
    </div>
    `,
    data(){
        return {
            numero: 0
        }
    }
});

Vue.component('saludo',{
    template: `
    <div>
    <h1>{{ saludo }}</h1>
    <h3>asdfasdf</h3>
    </div>
    `,
    data(){
        return{
            saludo: 'Hola desde Vue'
        }
    }
});


new Vue({
    el: '#app'
});