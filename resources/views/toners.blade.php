@extends('cartridges.layouts.master')

@section('content')
  <div style="margin-top:30px;"></div>
  <div class="container bg_white">
    <br>
    <button id="btn-add-toner" name="btn-add-toner" class="btn btn-primary btn-xs">Add New Toner</button>
    <br><br>
    <div>
      <table id="example" class="table table-striped table-bordered" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>Model</th>
            <th>Quantity (gr)</th>
            <th>Quantity remained (gr)</th>
            <th>Procure date</th>
            <th>Price</th>
            <th>Company name</th>
            <th>Is active</th>
            <th>Added at</th>
          </tr>
        </thead>
        <tfoot>
          <tr>
            <th>Model</th>
            <th>Quantity (gr)</th>
            <th>Quantity remained (gr)</th>
            <th>Procure date</th>
            <th>Price</th>
            <th>Company name</th>
            <th>Is active</th>
            <th>Added at</th>
          </tr>
        </tfoot>
        <tbody id="toner-list" name="toner-list">
          @foreach($toners as $toner)
            <tr id="toner{{ $toner->id }}">
              <td>{{ $toner->model }}</td>
              <td>{{ $toner->quantity }}</td>
              <td>{{ $toner->quantity_remained}}</td>
              <td>{{ $toner->procure_date }}</td>
              <td>{{ $toner->price }}</td>
              <td>{{ $toner->company }}</td>
              <td>{{ $toner->is_active == 1 ? 'Yes' : 'No' }}</td>
              <td id="created_at{{ $toner->id }}">{{ $toner->created_at}}</td>
              <td>
                <button class="btn btn-warning btn-xs btn-detail open-modal" value="{{ $toner->id }} toner">Edit</button>
                {{-- <button class="btn btn-danger btn-xs btn-delete delete-row" value="{{ $toner->id }} toner">Delete</button> --}}
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
      <div class="modal fade" id="tonerModal" tabindex="-1" role="dialog" aria-labelledby="tonerModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
              <h4 class="modal-title" id="tonerModalLabel">Toner Editor</h4>
            </div>
            <div class="modal-body">
              <form id="frm-toner" name="frm-toner" class="form-horizontal" novalidate="">
                {{ csrf_field() }}
                <div class="form-group error">
                  <label for="inputModel" class="col-sm-3 control-label">Model</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control has-error" id="model" name="model" placeholder="Model" value="">
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputQuantity" class="col-sm-3 control-label">Quantity (gr)</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="quantity" name="quantity" placeholder="Quantity" value="">
                    <input type="hidden" class="form-control" id="quantity_remained">
                  </div>
                </div>


                <div class="form-group">
                  <label for="inputProcure_date" class="col-sm-3 control-label">Procure date</label>
                  <div class='col-sm-6'>
                    <div class='input-group date' id='datetimepicker1'>
                      <input type='text' class="form-control" id="procure_date" name="procure_date">
                      <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
                    </span>
                  </div>
                </div>
              </div>

              <div class="form-group">
                <label for="inputPrice" class="col-sm-3 control-label">Price</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="price" name="price" placeholder="Price" value="">
                </div>
              </div>

              <div class="form-group">
                <label for="inputCompany" class="col-sm-3 control-label">Company name</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="company" name="company" placeholder="Company" value="">
                </div>
              </div>
              <div class="form-group">
                <label for="inputIsActive" class="col-sm-3 control-label">Is active</label>
                <div class="col-sm-9">
                  {{-- <input type="text" class="form-control" id="is_active" name="is_active" placeholder="0/1" value=""> --}}
                  <input type="checkbox" id="is_active" name="my-checkbox" checked>
                </div>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary" id="btn-save-toner" value="add">Save changes</button>
            <input type="hidden" id="toner_id" name="toner_id" value="{{isset($toner) ? $toner->id : ''}}">
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
