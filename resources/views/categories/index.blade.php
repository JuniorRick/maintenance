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
        <tr>
          <td> {{ ++$counter }}</td>
          <td style="min-width: 200px;">{{ isset($category->name) ? $category->name : "" }}</td>

          <td style="min-width: 130px; ">

            <a style="float:left; margin-right: 5px;" class="button is-primary is-small"
              @click="fillCategoryModal({{ $category->id}})">Edit</a>
              <a class="button is-danger is-small" style="float: left;" type="button"
                @click="isActiveCM=true">Delete</a>

            <modal-confirm action="{{ url('/category', ['id' => $category->id]) }}"
              v-show="isActiveCM" @close="isActiveCM=false" value={{ csrf_token() }}>
            </modal-confirm>

        </td>
      @endforeach

        </tr>
      </tbody>
    </table>

      <modal v-show="showCategoryModal"></modal>
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
        <tr>
          <td> {{ ++$counter }}</td>
          <td style="min-width: 200px;">{{ isset($section->name) ? $section->name : "" }}</td>

          <td style="min-width: 130px;">

            <a style="float:left; margin-right: 5px;" class="button is-primary is-small"
              @click="fillSectionModal({{ $section->id}})">Edit</a>

            <a class="button is-danger is-small" style="float: left;" type="button"
              @click="isActiveSM=true">Delete</a>

            <modal-confirm action="{{ url('/section', ['id' => $section->id]) }}"
              v-show="isActiveSM" @close="isActiveSM=false" value={{ csrf_token() }}>
            </modal-confirm>

        </td>
      @endforeach

        </tr>
      </tbody>
    </table>
  </div>
<div class="is-clearfix"></div>

</div>


@endsection
