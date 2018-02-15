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

            <form style="float: left;"
              action="{{ url('/category', ['id' => $category->id]) }}" method="post">
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

            <form style="float: left;"
              action="{{ url('/section', ['id' => $section->id]) }}" method="post">
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
<div class="is-clearfix"></div>

</div>
  @include('categories.modal')

@endsection
