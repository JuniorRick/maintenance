@extends('layouts.master') @section('title', 'Issues') @section('content')

<div class="box">
  {{-- <div class="border-bottom">
    <button class="button is-primary" @click="openEmptyModal">Add new equipment</button>
  </div> --}}
  <table class="table is-fullwidth">
    <thead>
      <tr>
        <th>Nr.</th>
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
        <th>Nr.</th>
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
      @php
        $counter = 0;
      @endphp

    @foreach ($equipments as $equipment)
      <tr>
        <td> {{ ++$counter }}</td>
        <td>{{ isset($equipment->category_id) ?
          $equipment->getCategoryName($equipment->category_id) : "" }}</td>
        <td>{{ isset($equipment->name) ? $equipment->name : "" }}</td>
        <td>{{ isset($equipment->serial_number) ? $equipment->serial_number : "" }}</td>
        <td>{{ isset($equipment->inventory_number) ? $equipment->inventory_number : "" }}</td>
        <td>{{ isset($equipment->section_id) ?
            $equipment->getSectionName($equipment->section_id) : "" }}</td>
        <td>{{ isset($equipment->office) ? $equipment->office : "" }}</td>
        <td>{{ isset( $equipment->details) ? $equipment->details : "" }}</td>

        @if(\App\Maintenance::where('equipment_id', $equipment->id)->get()->count() > 0)
        <td style="min-width: 130px;">
          <a style="float:left; margin-right: 5px;" class="button is-link is-small"
          href="/issue/{{ $equipment->id }}/info">Info</a>
        @else
          <td style="min-width: 130px;">
            <a style="float:left; margin-right: 5px;" class="button is-light is-small"
            href="/issue/{{ $equipment->id }}/info">Info</a>
        @endif

        </td>
      </tr>
    @endforeach

    </tbody>
  </table>
</div>

  <modal :action="update ? '/equipment/' + id + '/update' : '/equipment/post'"
    v-show="showModal" @close="showModal=false" value={{ csrf_token() }}>
    <template>
      <input type="hidden" :name="update ? '_method'  : '' " value="PUT">

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
          <input type="text" required="required" name="serial_number">
          <label class="control-label" for="input">Serial Number</label><i class="bar"></i>
        </div>
        <div class="form-group">
          <input type="text" required="required" name='inventory_number'>
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
          <input type="text" name="office" required="required">
          <label class="control-label" for="input">Office</label><i class="bar"></i>
        </div>
        <div class="form-group">
          <textarea name="details"></textarea>
          <label class="control-label" for="textarea">Details</label><i class="bar"></i>
        </div>
    </template>
  </modal>

@endsection
