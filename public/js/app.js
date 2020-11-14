const Vehicles = {
  data() {
    return {
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
      axios.post('http://localhost:8000/vehicle/api_post', this.form).then(res => {
          this.load()
          this.form.name = ''
      })
    }
  }
}
Vue.createApp(Vehicles).mount('#list')