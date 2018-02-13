
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

// require('./bootstrap');

window.Vue = require('vue');
import VueResource from 'vue-resource'
Vue.use(VueResource);
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example-component', require('./components/ExampleComponent.vue'));

const app = new Vue({
    el: '#app',

    data: {
      showModal: false,
      update: false,
      id: ''
    },

    methods: {

      fillEquipmentModal(id) {
        this.showModal = true;
        this.update = true;
        this.id = id;

        this.$http.get('/equipment/' + id)
          .then(response => {
              $('select[name="category_id"]').val(response.data.category_id);
              $('input[name="name"]').val(response.data.name);
              $('input[name="serial_number"]').val(response.data.serial_number);
              $('input[name="inventory_number"]').val(response.data.inventory_number);
              $('select[name="section_id"]').val(2);
              $('input[name="office"]').val(response.data.office);
          }, response => {
            alert( "error" );
          });

      }

    }
});
