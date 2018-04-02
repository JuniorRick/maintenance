@extends('cartridges.layouts.master')

@section('content')
  <div style="margin-top:30px;"></div>
  <div class="container bg_white">
    <br>
    <button id="btn-add-info" name="btn-add-info" class="btn btn-primary btn-xs">Add Info</button>
    <span style="position:relative; left: 35%"><b>{{ isset($cartridge) ?  $cartridge : "" }}</b></span>
    <button id="btn-add-cartridge" name="btn-add-cartridge" onclick="document.location.href='/cartridges'" class="pull-right btn btn-primary btn-xs">Back</button>
    <br><br>
    <div>
        <table id="info_table" class="table table-striped table-bordered" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Toner</th>
              <th>Charged (gr)</th>
              <th>Parts</th>
              <th>User id</th>
              <th>Cleaned</th>
              <th>Description</th>
              <th>Date</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th>Toner</th>
              <th>Charged (gr)</th>
              <th>Parts</th>
              <th>User id</th>
              <th>Cleaned</th>
              <th>Description</th>
              <th>Date</th>
            </tr>
          </tfoot>
          <tbody id="info-list" name="info-list">
            @foreach($infos as $info)
              <tr id="info{{ $info->id }}">
                  <td>{{ $info->getTonerModel() }}</td>
                  <td>{{ $info->toner_quantity }}</td>
                <td>
                  <div class="dropdown">
                    <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Parts Changed
                    <span class="caret"></span></button>
                    <ul class="dropdown-menu">
                       <li class="dropdown-header">Parts changed</li>
                      {!! $info->opc == 1 ? "<li><a href='#'>OPC</a></li>" : '' !!}
                      {!! $info->pcr == 1 ? "<li><a href='#'>PCR</a></li>" : '' !!}
                      {!! $info->magnetic_wave  == 1 ? "<li><a href='#'>magnetica wave</a></li>" : '' !!}
                      {!! $info->cleaning_blade  == 1 ? "<li><a href='#'>cleaning blade</a></li>" : '' !!}
                      {!! $info->dr_cleaning_blade  == 1 ? "<li><a href='#'>dr cleaning blade</a></li>" : '' !!}
                      {!! $info->chip  == 1 ? "<li><a href='#'>Chip</a></li>" : '' !!}
                    </ul>
                  </div>
                </td>
                <td>{{ $info->getUserName() }}</td>
                <td> {{ $info->cleaned == 0 ? "No" : "Yes"}}</td>
                <td>
                  <a href="#" title="Description" data-toggle="popover" data-trigger="focus" data-content="{{ $info->description }}"
                    style="color: #265a88;">
                  {{ strlen($info->description) > 20 ? substr($info->description, 0, 20) . " ..." : $info->description }}
                  </a>
                </td>
                <td id="info_created_at{{ $info->id }}">{{ $info->created_at }}</td>
                <td>
                  <button class="btn btn-warning btn-xs btn-detail open-modal" value="{{ $info->id }} info">Edit</button>
                  <button class="btn btn-danger btn-xs btn-delete delete-row" value="{{ $info->id }} info">Delete</button>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
        <div class="modal fade" id="infoModal" tabindex="-1" role="dialog" aria-labelledby="infoModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title" id="infoModalLabel">Cartridge Editor</h4>
              </div>
              <div class="modal-body">
                <form id="frm-info" name="frm-info" class="form-horizontal" novalidate="">
                  {{ csrf_field() }}

                  <div class="form-group">
                    <label for="inputToner" class="col-sm-3 control-label">Toners</label>
                    <select class="selectpicker" id='toner'>
                      @foreach ( App\Toner::all() as $toner)
                        @if ($toner->is_active)
                          <option value='{{$toner->id}}' {!! $toner->model == 1 ? 'selected'  : '' !!}> {{ $toner->model . ' : (' . $toner->quantity_remained . ' gr)'}} </option>
                        @endif
                      @endforeach
                    </select>
                  </div>

                  <div class="form-group">
                    <label for="inputTonerQuantity" class="col-sm-3 control-label">Charge</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="toner_quantity" name="toner_quantity" placeholder="Charge" value="">
                      {{-- <input id="toner_quantity" data-slider-id='ex1Slider' type="text" data-slider-min="0" data-slider-max="20" data-slider-step="1" data-slider-value="14"/> --}}
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="inputType" class="col-sm-3 control-label">Changed</label>
                    <select id="pieces" class="selectpicker" multiple>
                      @if(isset($info))
                        <option {!! $info->opc == 1 ? "selected" : '' !!}>OPC</option>
                        <option {!! $info->pcr == 1 ? "selected" : '' !!}>PCR</option>
                        <option {!! $info->magnetic_wave  == 1 ? "selected" : '' !!}>Magnetic Wave</option>
                        <option {!! $info->cleaning_blade  == 1 ? "selected" : '' !!}>Cleaning Blade</option>
                        <option {!! $info->dr_cleaning_blade  == 1 ? "selected" : '' !!}>Dr. Cleaning Blade</option>
                        <option {!! $info->chip  == 1 ? "selected" : '' !!}>Chip</option>
                      @else
                        <option>OPC</option>
                        <option>PCR</option>
                        <option>Magnetic Wave</option>
                        <option>Cleaning Blade</option>
                        <option>Dr. Cleaning Blade</option>
                        <option>Chip</option>
                      @endif
                    </select>
                  </div>

                  <div class="form-group">
                    <label for="cleaned-checkbox" class="col-sm-3 control-label">Cleaned</label>
                    <div class="col-sm-9">
                      <input type="checkbox" id="cleaned" name="cleaned-checkbox">
                    </div>
                  </div>

                  <div class="form-group clearfix">
                    <label for="inputDescription" class="col-sm-3 control-label">Description</label>
                    <div class="col-sm-9">
                      <textarea name="description" id="description" data-provide="markdown" rows="5"></textarea>
                      <input type="hidden" class="form-control has-error" id="cartridge_id" value="{{  $cartridge_id }}">
                      <input type="hidden" class="form-control has-error" id="user_id" value="{{ Auth::User()->id }}">
                      <input type="hidden" class="form-control has-error" id="user" value="{{ Auth::User()->name }}">
                    </div>
                  </div>
                </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-primary" id="btn-save-info" value="add">Save changes</button>
                <input type="hidden" id="info_id" name="info_id" value="{{ isset($info) ? $info->id : ''}}">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  @endsection
