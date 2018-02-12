@extends('layouts.master') @section('title', 'Equipments') @section('content')

<div class="box">
  <div class="border-bottom">
    <button class="button is-primary" @click="showModal = true">Add new equipment</button>
  </div>
  <table class="table is-fullwidth">
    <thead>
      <tr>
        <th>Category</th>
        <th>Name</th>
        <th>S.N.</th>
        <th>I.N.</th>
        <th>Section</th>
        <th>Office</th>
        <th>Details</th>
      </tr>
    </thead>
    <tfoot>
      <tr>
        <th>Category</th>
        <th>Name</th>
        <th>S.N.</th>
        <th>I.N.</th>
        <th>Section</th>
        <th>Office</th>
        <th>Details</th>
      </tr>
    </tfoot>
    <tbody>

    @foreach ($equipments as $equipment)
      <tr>
        <td>{{ $equipment->getCategoryName($equipment->category_id) }}</td>
        <td>{{ $equipment->name }}</td>
        <td>{{ $equipment->serial_number }}</td>
        <td>{{ $equipment->inventory_number }}</td>
        <td>{{ $equipment->getSectionName($equipment->section_id) }}</td>
        <td>{{ $equipment->office }}</td>
        <td>{{ $equipment->details }}</td>
        <td>
          <a style="float:left; margin-right: 5px;" class="button is-primary is-small" href="/equipment/{{ $equipment->id}}/edit">Edit</a>
          <form style="float: left;" action="{{ url('/equipment', ['id' => $equipment->id]) }}" method="post">
            <input type="hidden" name="_method" value="DELETE">
            <input class="button is-small is-danger" type="submit" value="Delete" />
            {!! csrf_field() !!}
          </form>
      </td>
    @endforeach

      </tr>
    </tbody>
  </table>
</div>

<div class="modal is-active" v-if="showModal">
  <div class="modal-background">
     </div>
  <div class="modal-content">

    <div class="container" style="margin: 0 auto;">

      <form  action="/equipment/post" method="POST">

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
            <option value="" disabled selected>-- Select Section --</option>
            {{ $sections = App\Section::all() }}
            @foreach ($sections as $section)

              <option value=" {{ $section->id }} ">{{ $section->name }}</option>

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
        </div>
      </form>
    </div>
  </div>
  <button class="modal-close is-large" @click="showModal=false" aria-label="close"></button>
</div>

@endsection
