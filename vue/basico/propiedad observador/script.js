var watchExampleVM = new Vue({
    el: '#watch-example',
    data: {
      question: '',
      answer: 'I cannot give you an answer until you ask a question!'
    },
    watch: {
      // cuando 'question' cambie, se ejecutará esta función
      question: function (newQuestion) {
        this.answer = 'Waiting for you to stop typing...'
        this.getAnswer()
      }
    },
    methods: {
      // _.debounce es una función probista por lodash para limitar cuan
      // seguido una operación particularmente costosa puede ejecutarse.
      // En este caso, queremos limitar las peticiones a 
      // yesno.wtf/api, esperando a que el usuario haya finalizado
      // de tipear antes de hacer la petición ajax. Para aprender 
      // más acerca de la función _.debounce ( y su prima 
      // _.throttle), visita: https://lodash.com/docs#debounce
      getAnswer: _.debounce(
        function () {
          if (this.question.indexOf('?') === -1) {
            this.answer = 'Questions usually contain a question mark. ;-)'
            return
          }
          this.answer = 'Thinking...'
          var vm = this
          axios.get('https://yesno.wtf/api')
            .then(function (response) {
              vm.answer = _.capitalize(response.data.answer)
            })
            .catch(function (error) {
              vm.answer = 'Error! Could not reach the API. ' + error
            })
        },
        // Este es el número de milisegundos que esperamos
        // a que el usuario termine de tipear.
        500
      )
    }
  })