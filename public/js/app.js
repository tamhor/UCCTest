const App = {
  data() {
    return {
      form: {
        id: '',
        name: '',
        engine_displacement: '',
        engine_power: '',
        price: '',
        location: '',
        category_id: ''
      },
      isInvalid: false,
      results: null,
      categories: null,
      submit: false
    }
  },

  mounted() {
    this.result(),
    this.category(),
    $(".field-wrapper .field-placeholder").on("click", function() {
      $(this).closest(".field-wrapper").find("input").focus();
    });
    $(".field-wrapper input").on("keyup", function() {
        var value = $.trim($(this).val());
        if (value) {
            $(this).closest(".field-wrapper").addClass("hasValue");
        } else {
            $(this).closest(".field-wrapper").removeClass("hasValue");
        };
    });

    $('.form').validate();

    $('#numb').on('keydown', function(){
      var unit = $('#unit').val();
      if(unit == 'l'){
        val = parseInt($("#numb").val()) * 1000
        $('#calculate').val(val);
      }
      if(unit == 'cc'){
        val = parseInt($("#numb").val())
        $('#calculate').val(val);
      }
      if(unit == 'ic'){
        val = parseInt($("#numb").val()) * 0.0610237441
        $('#calculate').val(val);
      }
      if(unit == 'none'){
        alert('Select unit')
      }
    })

    $('#form').on('submit', function(e){
      console.log(res);
      var res = new Object;
      res.id = $('#id').val();
      res.name = $('#name').val();
      res.engine_displacement = $('#calculate').val();
      res.engine_power = $('#engine_power').val();
      res.price = $('#price').val();
      res.location = $('#location').val();
      res.category_id = $('#category_id').val();
      $.ajax({
          url: 'http://localhost:8000/vehicle/api_post/',
          type: 'POST',
          data: JSON.stringify(res),
          success: function(data){
              console.log(data); 
          },
          error: function (xhr, textStatus, errorThrown) {  
            console.log(xhr.responseText);  
        } 
      });
      return false;
    });
    
  },

  methods: {
    result() { 
      axios.get("http://localhost:8000/api/")
      .then(response => {this.results = response.data})
    },

    category() { 
      axios.get("http://localhost:8000/category/")
      .then(response => {this.categories = response.data})
    },

    add() {
      axios.post('http://localhost:8000/vehicle/api_post/', this.form)
      .then(res => {
          this.result()
          this.form.id = ''
          this.form.name = ''
          this.form.engine_displacement = ''
          this.form.engine_power = ''
          this.form.price = ''
          this.form.location = ''
          this.form.category_id = ''
      })
    }
  
  },
}
Vue.createApp(App).mount('#app')