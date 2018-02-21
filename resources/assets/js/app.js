
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

// require('./bootstrap');

window.Vue = require('vue');

import VueResource from 'vue-resource';
Vue.use(VueResource);
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

// Vue.component('example-component', require('./components/ExampleComponent.vue'));
Vue.component('modal', {

  props: [
      'action',
      'value',
  ],

  template: `
    <div class="modal is-active">
      <div class="modal-background">
         </div>
      <div class="modal-content">

        <div class="container" style="margin: 0 auto;">
            <form :action="action" id="add-form" method="post">
            <input type="hidden" name="_token" :value="value">
              <slot></slot>
            <div class="button-container">
              <button class="button" type="submit"><span>Submit</span></button>
              <div class="button is-link" @click="$emit('close')"><span>Cancel</span></div>
            </div>
          </form>
        </div>
      </div>
      <button class="modal-close is-large" @click="$emit('close')" aria-label="close"></button>
    </div>
  `,

  data() {
    return {
      showModal: false,
    }
  },

  methods: {

  }
})

Vue.component('modal-confirm', {
  props: [
    'action',
    'value',
  ],

  template: `
    <div class="modal is-active">
      <div class="modal-background" style="background: rgba(0, 0, 0, 0.2)"></div>
      <div class="modal-content">
        <div class="box bg-white">
          Are you sure do you want to delete this?
          <div class="is-pulled-right">
            <form
              :action="action" method="post">
              <input type="hidden" name="_token" :value="value">
              <input type="hidden" name="_method" value="DELETE">
              <input class="button is-danger confirm-modal" type="submit" @submit="update=false" value="Delete" />
              <a class="button is-light" @click="$emit('close')">Cancel</a>
            </form>
          </div>
          <div class="is-clearfix"></div>
        </div>
      </div>
      <button class="modal-close is-large" @click="$emit('close')" aria-label="close"></button>
    </div>
  `,

  data() {
    return {
      isActive: false,
    }
  },

    methods: {
      showConfirm() {
        this.isActive = true;
      }
    },

});


const app = new Vue({
    el: '#app',

    data: {
      showModal: false,
      update: false,
      id: '',
      isActive: false,
    },

    methods: {

      fillEquipmentModal(id) {
        this.showModal = true;
        this.update = true;
        //this.id is required
        this.id = id;

        this.$http.get('/equipment/' + id)
          .then(response => {
              for (let key in response.data) {
                if ($(`[name="${key}"]`).length) {
                  $(`[name="${key}"]`).val(response.data[key]);
                }
            }
          }, response => {
            console.log( "error on http get equipment with id " + id);
          });

      },

      openEmptyModal() {
        this.showModal = true;
        this.update = false;

        $.each($('input, textarea, select', '#add-form'),  function() {
          if ($(this).attr('name') != '_token')
           $(this).attr('name').val('');

        });
      },

    }

});
