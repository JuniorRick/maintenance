@extends('layouts.master')

 @section('title', 'Categories')

@section('content')

<div style="display: flex; flex: 1 100%; ">

  {{-- Category --}}
  <div class="box" style="margin-right: 20px; flex-grow: 1;">
    <div class="border-bottom">
      <button class="button is-primary" @click="showCategoryModal = true">Add new category</button>
    </div>
    <table class="table is-fullwidth">
      <thead>
        <tr>
          <th>Nr.</th>
          <th>Name</th>
        </tr>
      </thead>
      <tfoot>
        <tr>
          <th>Nr.</th>
          <th>Name</th>
        </tr>
      </tfoot>
      <tbody>
        @php
          $counter = 0;
        @endphp

      @foreach ($categories as $category)
        <tr class="filter">
          <td> {{ ++$counter }}</td>
          <td style="min-width: 200px;">{{ isset($category->name) ? $category->name : "" }}</td>

          <td style="min-width: 130px; ">

            <a style="float:left; margin-right: 5px;" class="button is-primary is-small"
              @click="fillModal({{ $category->id}}, 'groups/category'), showCategoryModal=true">Edit</a>
              {{-- <a class="button is-danger is-small" style="float: left;" type="button"
                @click="saveCId({{ $category->id }})">Delete</a>

            <modal-confirm :action="'/groups/category/' + categoryId"
              v-show="isActiveCM" @close="isActiveCM=false" value={{ csrf_token() }}
              category="category">
            </modal-confirm> --}}

        </td>
      @endforeach
        </tr>
      </tbody>
    </table>

      <modal :action="update ? '/groups/category/' + id + '/update' : '/groups/category/post'"
        v-show="showCategoryModal" @close="showCategoryModal=false" value={{ csrf_token() }}>

        <input type="hidden" :name="update ? '_method'  : '' " value="PUT">
        <template>
          <h1>Add new Category</h1>

          <div class="form-group">
            <input type="text" required="required" name="name" maxlength="100">
            <label class="control-label" for="input">Name</label><i class="bar"></i>
          </div>
        </template>

      </modal>

  </div>


  {{-- Section --}}
  <div class="box" style="flex-grow: 1;">
    <div class="border-bottom">
      <button class="button is-primary" @click="showSectionModal = true">Add new section</button>
    </div>
    <table class="table is-fullwidth">
      <thead>
        <tr>
          <th>Nr.</th>
          <th>Name</th>
        </tr>
      </thead>
      <tfoot>
        <tr>
          <th>Nr.</th>
          <th>Name</th>
        </tr>
      </tfoot>
      <tbody>
        @php
          $counter = 0;
        @endphp

      @foreach ($sections as $section)
        <tr class="filter">
          <td> {{ ++$counter }}</td>
          <td style="min-width: 200px;">{{ isset($section->name) ? $section->name : "" }}</td>

          <td style="min-width: 130px;">

            <a style="float:left; margin-right: 5px;" class="button is-primary is-small"
              @click="fillModal({{ $section->id}}, 'groups/section'), showSectionModal=true">Edit</a>

            {{-- <a class="button is-danger is-small" style="float: left;" type="button"
              @click="saveSId({{ $section->id }})">Delete</a>

            <modal-confirm :action="'/groups/section/' + sectionId"
              v-show="isActiveSM" @close="isActiveSM=false" value={{ csrf_token() }}
              category="section">
            </modal-confirm> --}}
        </td>
      @endforeach

        </tr>
      </tbody>
    </table>

    <modal :action="update ? '/groups/section/' + id + '/update' : '/groups/section/post'"
      v-show="showSectionModal" @close="showSectionModal=false" value={{ csrf_token() }}>

      <input type="hidden" :name="update ? '_method'  : '' " value="PUT">
      <template>

        <h1>Add new Section</h1>

        <div class="form-group">
          <input type="text" required="required" name="name" maxlength="100">
          <label class="control-label" for="input">Name</label><i class="bar"></i>
        </div>
      </template>

    </modal>
  </div>
<div class="is-clearfix"></div>

</div>


@endsection
