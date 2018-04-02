<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Cartridge Manager</title>
  <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-markdown/2.10.0/css/bootstrap-markdown.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/css/bootstrap-select.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-switch/3.3.4/css/bootstrap3/bootstrap-switch.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/10.0.0/css/bootstrap-slider.min.css">
  <link rel="stylesheet" href="{!! asset('css/daterangepicker.min.css') !!}">
  <meta name="csrf-token" content="{{ csrf_token() }}" />
  <style>
    body {
      background: #6b9cc7;
    }
    .container {
      border-bottom: 1px solid #fff;
    }
    .bg_white{
      background: #fff;
    }
    a {
      color: #fff;
    }
    .fixed_button {
      position: fixed;
      background-color: #fff;
      top: 0;
      left: 0;
      height: 50px;
      width: 100vw;
    }

    .centered {
      max-width: 1150px;
      margin: 0 auto;
      margin-top: 10px;
    }
  </style>
</head>
<body>
  <div style="padding-top: 50px"></div>
  <div class="container">

    {!! menu('Cartridges', 'bootstrap') !!}
  </div>

  @yield('content')

  <div class="container" style="background: #fff;">
    <button id="toggle_details" class="pull-right btn btn-primary">Show Details</button>
    <br>
    <div class="hide_details" id="cartridge_details" style="display: none;">
      @include('details')
    </div>

    <br>
    <button id="hide_details" class="pull-right btn btn-primary hide_details" style="display: none;">Hide Details</button>
    <br>
</div>

      <script type="text/javascript" src="//cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
  <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/10.0.0/bootstrap-slider.min.js" charset="utf-8"></script>
  <script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $(document).ready(function() {
      $('[data-toggle="popover"]').popover();
      $("[name='my-checkbox']").bootstrapSwitch();
      $("[name='cleaned-checkbox']").bootstrapSwitch();
    });

    $('#search_cartridge').keyup(function() {
      $('tr').show();
      var search = $('#search_cartridge').val();
      $('.filter:not(:contains("'+ search + '"))').hide();
    });

    $('#toggle_details').click(function() {
        if ($('#toggle_details').text() == 'Show Details') {
          $('.hide_details').show('middle');
          $('#toggle_details').html('Hide Details');
        } else {
          $('.hide_details').hide('middle');
          $('#toggle_details').html('Show Details');
        }
    });

    $('#hide_details').click(function() {
        if ($('#toggle_details').text() == 'Show Details') {
          $('.hide_details').show('middle');
          $('#toggle_details').html('Hide Details');
        } else {
          $('.hide_details').hide('middle');
          $('#toggle_details').html('Show Details');
        }
    });


  </script>

  <script type="text/javascript">

    $(window).scroll( function () {
      if($(window).scrollTop() >= 220) {
        $('.head_fixed').addClass('fixed_button');
        $('#head').addClass('centered');
      }
      else {
        $('.head_fixed').removeClass('fixed_button');
        $('#head').removeClass('centered');
      }
    })

    $('.btn').click( function () {
        setTimeout( function () {
          $('.btn').attr('disabled', true);
        }, 0);
        setTimeout( function () {
          $('.btn').removeAttr('disabled');
        }, 1000);
    });

  </script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-markdown/2.10.0/js/bootstrap-markdown.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/bootstrap-select.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-switch/3.3.4/js/bootstrap-switch.min.js"></script>
  <script src="{{asset('js/custom.js')}}"></script>
  <script src="{{asset('js/ajax-crud.js')}}"></script>
  <script src="{{ asset('js/bootbox.min.js')}}" charset="utf-8"></script>
  <script src="{!! asset('js/daterangepicker.min.js') !!}" charset="utf-8"></script>
  <script type="text/javascript">
  $('#date-range').dateRangePicker(
    {
      showShortcuts: true,
      shortcuts :
      {
        'prev-days': [3,5,7],
        'prev': ['week','month','year'],
        'next-days':null,
        'next':null
      }
    });

    // $('#date-range').bind('input', function() {
    //   console.log('value' + $(this).val());
    // });

    $('#submit-range').on( 'click', function(e) {
      var dates = $('#date-range').val().split(' ');

      // $('#form-range').attr('action', `/report/${dates[0]}/${dates[2]}`);
      window.open(`/report/cartridges/${dates[0]}/${dates[2]}`,'_blank');

      // $('#form-range').submit();

    });
  </script>
</body>
</html>
