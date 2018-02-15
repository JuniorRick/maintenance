<div class="modal is-active" v-if="showCategoryModal">
  <div class="modal-background">
     </div>
  <div class="modal-content">

    <div class="container" style="margin: 0 auto;">

      <form  :action="update ? '/category/'+ id + '/update' : '/category/post'"
        method="POST">

      <input type="hidden" :name="update ? '_method'  : '' " value="PUT">


        @if($errors->any())
          <div class="alert alert-danger">
              @foreach($errors->all() as $error)
                  <p>{{ $error }}</p>
              @endforeach
          </div>
        @endif

        <input type="hidden" name="_token" value="{!! csrf_token() !!}">
        <h1> Add new Category</h1>

        <div class="form-group">
          <input type="text" required="required" name="name">
          <label class="control-label" for="input">Name</label><i class="bar"></i>
        </div>
        <div class="button-container">
          <button class="button" type="submit"><span>Submit</span></button>
          <div class="button is-link" @click="showCategoryModal = false"><span>Cancel</span></div>
        </div>
      </form>
    </div>
  </div>
  <button class="modal-close is-large" @click="showCategoryModal=false" aria-label="close"></button>
</div>

  <button class="modal-close is-large" @click="showSectionModal=false" aria-label="close"></button>
</div>


<div class="modal is-active" v-if="showSectionModal">
  <div class="modal-background">
     </div>
  <div class="modal-content">

    <div class="container" style="margin: 0 auto;">

      <form  :action="update ? '/section/'+ id + '/update' : '/section/post'"
        method="POST">

      <input type="hidden" :name="update ? '_method'  : '' " value="PUT">


        @if($errors->any())
          <div class="alert alert-danger">
              @foreach($errors->all() as $error)
                  <p>{{ $error }}</p>
              @endforeach
          </div>
        @endif

        <input type="hidden" name="_token" value="{!! csrf_token() !!}">
        <h1> Add new Section</h1>

        <div class="form-group">
          <input type="text" required="required" name="name">
          <label class="control-label" for="input">Name</label><i class="bar"></i>
        </div>
        <div class="form-group">


        <div class="button-container">
          <button class="button" type="submit"><span>Submit</span></button>
          <div class="button is-link" @click="showSectionModal = false"><span>Cancel</span></div>
        </div>
      </form>
    </div>
  </div>
  <button class="modal-close is-large" @click="showSectionModal=false" aria-label="close"></button>
</div>
