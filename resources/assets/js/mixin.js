// Este archivo mixin excluye moment
import moment from 'moment';
export default {
  created() {
    // this.hello();
  },
  methods: {
    // Función para mostrar una alerta de éxito
    successALert(data) {
      console.log(data);
      Swal({
        position: 'top-end',
        type: data.status,
        title: data.message,
        showConfirmButton: false,
        timer: 1500
      });
    },
  },
  mounted() {
    $('.select2').select2();
    // $('.multiselect__input').addClass('form-control');
  },
  directives: {
    // Directiva personalizada para la selección con dos vías de datos
    select: {
      twoWay: true,
      bind: function (el, binding, vnode) {
        $(el).select2().on("select2:select", (e) => {
          // v-model busca
          //  - un evento llamado "change"
          //  - un valor con la propiedad "$event.target.value"
          el.dispatchEvent(new Event('change', { target: e.target }));
        });
      }
    }
  },
  watch: {
    value: function (value) {
      // Actualiza el valor
      $(this.$el).val(value);
    },
    options: function (options) {
      // Actualiza las opciones
      $(this.$el).select2({ data: options });
    }
  },
  destroyed: function () {
    $(this.$el).off().select2('destroy');
  }
}
