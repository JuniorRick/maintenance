@extends('layouts.master') @section('title', 'Equipments') @section('content')

<div class="box">
  <div class="border-bottom">
    <button class="button is-primary" @click="showModal = true">Add new equipment</button>
  </div>
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

        <td style="min-width: 130px;">
          <a style="float:left; margin-right: 5px;" class="button is-primary is-small"
            @click="fillEquipmentModal({{ $equipment->id}})">Edit</a>

          <form style="float: left;" onsubmit="return confirm()"
            action="{{ url('/equipment', ['id' => $equipment->id]) }}" method="post">
            <input type="hidden" name="_method" value="DELETE">
            <input class="button is-small is-danger" type="submit" value="Delete" />
            {!! csrf_field() !!}
          </form>
        </td>
      </tr>
    @endforeach

    </tbody>
  </table>
</div>

  @include('equipments.modal')

@endsection
