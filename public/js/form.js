const List = {
  data() {
    return {
      form: {
        id = '',
        name = '',
        engine_displacement = '',
        engine_power = '',
        price = '',
        location = '',
        category_id = ''
      },
      results: null,
      submit: false
    }
  },

  mounted() {
    this.load()
  },

  methods: {

    load() { 
      axios.get("http://localhost:8000/vehicle/api_get")
      .then(response => {this.results = response.data})
    },

    add() {
      axios.post('http://localhost:8000/vehicle/api_post/', this.form)
      .then(res => {
          this.form.id = ''
          this.form.name = ''
          this.form.engine_displacement = ''
          this.form.engine_power = ''
          this.form.price = ''
          this.form.location = ''
          this.form.category_id = ''
      })
    }
  
  }
}
Vue.createApp(List).mount('#list')