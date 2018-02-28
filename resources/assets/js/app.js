
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

// require('./bootstrap');

window.Vue = require('vue');

import VueResource from 'vue-resource';

// window.E = new Vue();



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
});


Vue.component('modal-files', {
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
          <h1 style="margin-bottom: 20px;">File Attachments</h1>
          <form :action="action" id="upload-form" method="post"
            @change="$emit('upload')" enctype=multipart/form-data>
            <input type="hidden" name="_token" :value="value">
            <div class="file is-small">
              <label class="file-label">
                <input class="file-input" type="file" name="file" id="file">
                <span class="file-cta">
                  <span class="file-icon">
                    <i class="fas fa-upload"></i>
                  </span>
                  <span class="file-label">
                    Choose a file…
                  </span>
                </span>
                <span class="file-name">
                  Screen Shot 2017-07-29 at 15.54.25.png
                </span>
              </label>
              <input class="button is-primary is-small" type="submit" value="Upload">
            </div>
            <slot></slot>
            <div class="button-container">
              <div class="button is-link" @click="$emit('close')"
                style="float:right;">
                <span>Close</span>
              </div>
            </div>
          </form>
        </div>
      </div>
      <button class="modal-close is-large" @click="$emit('close')" aria-label="close"></button>
    </div>
  `,

  methods: {
    upload() {
      $('upload-form').submit();
    }
  }
});

Vue.component('modal-confirm', {
  props: [
    'action',
    'value',
    'category'
  ],

  template: `
    <div class="modal is-active">
      <div class="modal-background" style="background: rgba(0, 0, 0, 0.2)"></div>
      <div class="modal-content">
        <div class="box bg-white">
          Are you sure do you want to delete this {{ category }}?
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

});
Vue.component('file-list', {
  props: ['files'],
  template: `
    <div class="tags has-addons">
        <slot></slot>
      </file>
    </div>
  `,
  data() {
    return {
    };
  },

  methods: {

  },


});

Vue.component('file', {
  template: `
  <div>
    <span class="tag is-warning is-medium">
      <slot></slot>
    </span>
  <a class="tag is-delete is-small" style="margin-right: 10px"></a>
  </div>
  `,

});



const app = new Vue({
    el: '#app',

    data: {
      showModal: false,
      showCategoryModal: false,
      showSectionModal: false,
      showModalFiles: false,
      update: false,
      id: '',
      equipmentId: '',
      issueId: '',
      isActive: false,
      isActiveMF: false,
      isActiveCM: false,
      isActiveSM: false,
      files: [],
    },

    methods: {

      openModalFiles() {
          this.showModalFiles = false,
          this.files = [];
      },

      fillModal(id, table) {
        this.update = true;
        //this.id is required
        this.id = id;

        this.$http.get(`/${table}/${id}`)
          .then(response => {
            for (let key in response.data) {
              if ($(`[name="${key}"]`).length) {
                $(`[name="${key}"]`).val(response.data[key]);
              }
            }
          }, response => {
            console.log( `error on http get ${table} with id ${id}`);
          });

      },

      saveId(id) {
        this.equipmentId = id;
        this.isActive=true;
      },

      openEmptyModal() {
        this.showModal = true;
        this.update = false;

        $.each($('input, textarea, select', '#add-form'),  function() {
          if ($(this).attr('type') != 'hidden') {
            $(this).val('');
            console.log($(this).attr('name'));
           }
        });
      },

      getFiles(id) {
        this.issueId = id;

        var self = this;
        this.$http.get('/issue/' + id + '/files')
          .then( response => {
            for(let i = 0; i < response.data.length; i++) {
              self.files[i] = response.data[i];
            }
          this.showModalFiles=true;
          },  response => {
          console.log( `error on http get files`);
        });
      },

    } //end of methods

});
