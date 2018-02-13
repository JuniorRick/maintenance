<div class="modal is-active" v-if="showModal">
  <div class="modal-background">
     </div>
  <div class="modal-content">

    <div class="container" style="margin: 0 auto;">

      <form  :action="update ? '/equipment/'+ id + '/update' : '/equipment/post'"
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
        <h1> Add new Equiment</h1>
        <div class="form-group">
          <select name="category_id">
            {{ $categories = App\Category::all() }}
            <option value="" disabled selected>-- Select Category --</option>
            @foreach ($categories as $category)

              <option value="{{ $category->id }}">{{ $category->name }}</option>

            @endforeach
          </select>
          <label class="control-label" for="select">Category</label><i class="bar"></i>
        </div>
        <div class="form-group">
          <input type="text" required="required" name="name">
          <label class="control-label" for="input">Name</label><i class="bar"></i>
        </div>
        <div class="form-group">
          <input type="text" name="serial_number">
          <label class="control-label" for="input">Serial Number</label><i class="bar"></i>
        </div>
        <div class="form-group">
          <input type="text" name='inventory_number'>
          <label class="control-label" for="input">Inventory Number</label><i class="bar"></i>
        </div>
        <div class="form-group">
          <select name="section_id">
            {{ $sections = App\Section::all() }}
            <option value="" disabled selected>-- Select Section --</option>
            @foreach ($sections as $section)

              <option value="{{ $section->id }}">{{ $section->name }}</option>

            @endforeach
          </select>
          <label class="control-label" for="select">Section</label><i class="bar"></i>
        </div>
        <div class="form-group">
          <input type="text" name="office">
          <label class="control-label" for="input">Office</label><i class="bar"></i>
        </div>
        <div class="form-group">
          <textarea name="details"></textarea>
          <label class="control-label" for="textarea">Details</label><i class="bar"></i>
        </div>

        <div class="button-container">
          <button class="button" type="submit"><span>Submit</span></button>
          <div class="button is-link" @click="showModal = false"><span>Cancel</span></div>
        </div>
      </form>
    </div>
  </div>
  <button class="modal-close is-large" @click="showModal=false" aria-label="close"></button>
</div>
