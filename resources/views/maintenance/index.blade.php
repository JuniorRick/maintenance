@extends('layouts.master') @section('title', 'Equipments') @section('content')

<div class="box">
  <div class="border-bottom">
    <button class="button is-primary" @click="openEmptyModal">Add new issue</button>
  </div>
  <table class="table is-fullwidth">
    <thead>
      <tr>
        <th>Nr.</th>
        <th>Equipment</th>
        <th>Location</th>
        <th>Call</th>
        <th>Issue</th>
        <th>Details</th>
        <th>Engineer</th>

      </tr>
    </thead>
    <tfoot>
      <tr>
        <th>Nr.</th>
        <th>Equipment</th>
        <th>Location</th>
        <th>Call</th>
        <th>Issue</th>
        <th>Details</th>
        <th>Engineer</th>
      </tr>
    </tfoot>
    <tbody>
      @php
        $counter = 0;
      @endphp

    @foreach ($issues as $issue)
      <tr>
        <td> {{ ++$counter }}</td>
        <td>{{ isset($issue->equipment_id) ?
          $issue->getEquipmentName() : "" }}</td>
        <td>{{ isset($issue->equipment_id) ?
          $issue->getEquipmentLocation() : "" }}</td>


        <td>{{ isset($issue->call_id) ? $issue->getCallType() : "" }}</td>
        <td>{{ isset($issue->issue) ? $issue->issue : "" }}</td>
        <td>{{ isset($issue->details) ? $issue->details : "" }}</td>
        <td>{{ isset( $issue->user_id) ? $issue->getUserName() : "" }}</td>

        <td style="min-width: 130px;">
          <a style="float:left; margin-right: 5px;" class="button is-primary is-small"
            @click="fillModal({{ $issue->id}}, 'issue'), showModal=true">Edit</a>
          <a class="button is-danger is-small" style="float: left;" type="button"
            @click="isActive=true">Delete</a>

          <modal-confirm action="{{ url('/issue', ['id' => $issue->id]) }}"
            v-show="isActive" @close="isActive=false" value={{ csrf_token() }}
            category="issue">
          </modal-confirm>

        </td>
      </tr>
    @endforeach

    </tbody>
  </table>
</div>

  <modal :action="update ? '/issue/' + id + '/update' : '/issue/post'"
    v-show="showModal" @close="showModal=false" value={{ csrf_token() }}>
    <template>
      <input type="hidden" :name="update ? '_method'  : '' " value="PUT">

        <h1> Add new Record</h1>
        <div class="form-group">
          <select name="equipment_id">
            {{ $equipments = App\Equipment::all() }}
            <option value="" disabled selected>-- Select Equipment --</option>
            @foreach ($equipments as $equipment)

              <option value="{{ $equipment->id }}">{{ $equipment->name . ' (' . $equipment->office . ')'}}</option>

            @endforeach
          </select>
          <label class="control-label" for="select">Equipment</label><i class="bar"></i>
        </div>
        <div class="form-group">
          <select name="call_id">
            {{ $calls = App\Call::all() }}
            <option value="" disabled selected>-- Select Call Type --</option>
            @foreach ($calls as $call)

              <option value="{{ $call->id }}">{{ $call->name }}</option>

            @endforeach
          </select>
          <label class="control-label" for="select">Call Type</label><i class="bar"></i>
        </div>
        <div class="form-group">
          <input type="text" required="required" name="issue">
          <label class="control-label" for="input">Issue</label><i class="bar"></i>
        </div>

          <input type="hidden" required="required" name="user_id" value={{Auth::user()->id}}>


        <div class="form-group">
          <textarea name="details"></textarea>
          <label class="control-label" for="textarea">Repair Details</label><i class="bar"></i>
        </div>
    </template>
  </modal>

@endsection
