@extends('cartridges.layouts.master')

@section('content')
  <div style="margin-top:30px;"></div>



  <div class="container bg_white">

    <div class="box" style="margin:20px 0;">
    <form  id="form-range" action="" method="get" >
      {{ csrf_field() }}
      <div class="form-row">
        <div class="col-sm-3 my-1">
          <label class="sr-only" for="date-range">Select report range:</label>
          <input class="form-control col-sm-3" type="text" id="date-range" placeholder="select report range">
        </div>
      <div class="col-auto my-1">
          <input class="btn btn-default" id="submit-range" type="submit" value="Preview">
      </div>
    </div>
    </form>
    </div>

    <br>
    <div class='head_fixed'>
      <div id="head">
        <button id="btn-add-cartridge" name="btn-add-cartridge" class="btn btn-primary">Add New Cartridge</button>
        <div class="col-sm-3 pull-right">
          <input type="text" class="form-control" id="search_cartridge" name="search" placeholder="Search" value="">
        </div>
      </div>
    </div>

    <br><br>
    <div>
      <table id="example" class="table table-striped table-bordered" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th class="barcode_sort">Barcode</th>
            <th>Model</th>
            <th>Type</th>
            <th>Registration State</th>
            <th>Office</th>
            <th>Added at</th>
          </tr>
        </thead>
        <tfoot>
          <tr>
            <th class="barcode_sort">Barcode</th>
            <th>Model</th>
            <th>Type</th>
            <th>Registration State</th>
            <th>Office</th>
            <th>Added at</th>
          </tr>
        </tfoot>
        <tbody id="cartridge-list" name="cartridge-list">
          @foreach($cartridges as $cartridge)
            <tr class="filter" id="cartridge{{ $cartridge->id }}">
              <td>{{ $cartridge->barcode }}</td>
              <td>{{ $cartridge->model }}</td>
              <td>{{ $cartridge->type == 1 ? "Original" : ($cartridge->type == 2 ? "Compatible" : "")}}</td>
              <td>{{ $cartridge->reg_state == 1 ? "New" : ($cartridge->reg_state == 2 ? "Used" : "") }}</td>
              <td>{{ $cartridge->office }}</td>
              <td id="cartridge_created_at{{ $cartridge->id}}">{{ $cartridge->created_at }}</td>
              <td>
                @if(App\Management::where('cartridge_id', $cartridge->id)->get()->count() > 0)
                  <button class="btn btn-xs btn-primary open-info" onclick="document.location.href='/cartridge/{{ $cartridge->id}}'" value="{{ $cartridge->id }} cartridge">Info</button>
                @else
                  <button class="btn btn-xs btn-default open-info"  onclick="document.location.href='/cartridge/{{ $cartridge->id}}'" value="{{ $cartridge->id }} cartridge">Info</button>
                @endif

                <button class="btn btn-warning btn-xs btn-detail open-modal" value="{{ $cartridge->id }} cartridge">Edit</button>
                {{-- <button class="btn btn-danger btn-xs btn-delete delete-row" value="{{ $cartridge->id }} cartridge">Delete</button> --}}
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
      <div class="modal fade" id="cartridgeModal" tabindex="-1" role="dialog" aria-labelledby="cartridgeModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
              <h4 class="modal-title" id="cartridgeModalLabel">Cartridge Editor</h4>
            </div>
            <div class="modal-body">
              <form id="frm-cartridge" name="frm-cartridge" class="form-horizontal" novalidate="">
                {{ csrf_field() }}
                <div class="form-group error">
                  <label for="inputBarcode" class="col-sm-3 control-label">Barcode</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control has-error" id="barcode" name="barcode" placeholder="barcode" value="">
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputModel" class="col-sm-3 control-label">Model</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="model" name="model" placeholder="Model" value="">
                  </div>
                </div>

                <div class="form-group" id='cartridge_type'>
                  <label for="inputType" class="col-sm-3 control-label">Type</label>
                  <div class="col-sm-9">
                    <label class="radio-inline"><input type="radio" name="type" value='1'>Original</label>
                    <label class="radio-inline"><input type="radio" name="type" value='2'>Compatible</label>
                    {{-- <input type="text" class="form-control" id="type" name="type" placeholder="Original/Compatible" value=""> --}}
                  </div>
                </div>

                <div class="form-group" id='cartridge_reg_state'>
                  <label for="inputType" class="col-sm-3 control-label">Registration state</label>
                  <div class="col-sm-9">
                    <label class="radio-inline"><input type="radio"  name="reg_state" value='1'>New</label>
                    <label class="radio-inline"><input type="radio"  name="reg_state" value='2'>Used</label>
                    {{-- <input type="text" class="form-control" id="type" name="type" placeholder="Original/Compatible" value=""> --}}
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputOffice" class="col-sm-3 control-label">Office</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="office" name="office" placeholder="000" value="">
                  </div>
                </div>

              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-primary" id="btn-save-cartridge" value="add">Save changes</button>
              <input type="hidden" id="cartridge_id" name="cartridge_id" value="{{$cartridge->id}}">
            </div>
          </div>
        </div>
      </div>
      {{-- modal --}}
    </div>
  </div>


@endsection
