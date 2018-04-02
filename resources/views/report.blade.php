<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta http-equiv="refresh" content="1200;http://localhost:8000/" />
  <title>Report</title>
  <style media="screen">
    td {
      padding: 3px;
      border-left: 1px solid black;
    }
    th {
      border: 1px solid black;
    }
    .page {
      width: 21cm;
      min-height: 29.7cm;
      padding: 2cm;
      margin: 1cm auto;
      border: 1px #D3D3D3 solid;
      border-radius: 5px;
      background: white;
      box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
      }

    @page {
      size: A4;
      margin: 0;
    }


    table { border-collapse: collapse;
      margin-top: 10px;
     }
    tr { border: solid thin; }

  </style>
</head>
<body>

  <div  class="page">
    <div style="text-align: center">
      <h1 style="text-transform: uppercase; padding: 0px; margin: 0px;">Raport cartuse</h1>
      <h2 style="padding: 0px; margin: 0px;">din {{ $begin }} pana la {{ $end }}</h2>
    </div>

    <table cellpadding="0" cellspacing="0" width="100%" style="border: 1px;" rules="none">
      <thead>
        <tr>
          <th>Nr.</th>
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
          <th>Nr.</th>
          <th>Toner</th>
          <th>Charged (gr)</th>
          <th>Parts</th>
          <th>User id</th>
          <th>Cleaned</th>
          <th>Description</th>
          <th>Date</th>
        </tr>
      </tfoot>
      <tbody>
        @php
          $counter = 0;
        @endphp

        @foreach($infos as $info)
          <tr>
            <td>{{ ++$counter }}</td>
            <td>{{ $info->getTonerModel() }}</td>
            <td>{{ $info->toner_quantity }}</td>
            <td>
              <div>
                <ul >
                  {!! $info->opc == 1 ? "<li>OPC</li>" : '' !!}
                  {!! $info->pcr == 1 ? "<li>PCR</li>" : '' !!}
                  {!! $info->magnetic_wave  == 1 ? "<li>magnetica wave</li>" : '' !!}
                  {!! $info->cleaning_blade  == 1 ? "<li>cleaning blade</li>" : '' !!}
                  {!! $info->dr_cleaning_blade  == 1 ? "<li>dr cleaning blade</li>" : '' !!}
                  {!! $info->chip  == 1 ? "<li>Chip</li>" : '' !!}
                </ul>
              </div>
            </td>
            <td>{{ $info->getUserName() }}</td>
            <td> {{ $info->cleaned == 0 ? "No" : "Yes"}}</td>
            <td> {{ $info->description }} </td>
            <td id="info_created_at{{ $info->id }}">{{ explode(' ', $info->created_at)[0] }}</td>
          </tr>
        @endforeach
    </tbody>
    </table>

  </div>

</body>
</html>
