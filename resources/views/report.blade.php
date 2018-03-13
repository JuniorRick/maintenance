<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta http-equiv="refresh" content="1200;http://localhost:8000/" />
  <title>Report</title>
  <style media="screen">
    .is-bordered {
      border: 1px solid black;
    }

    /* td {
      border: 1px solid black;
    } */
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

    table { border-collapse: collapse; }
    tr { border: solid thin; }

  </style>
</head>
<body>

  <div  class="page">
    <table cellpadding="0" cellspacing="0" width="100%" style="border: 1px;" rules="none">
      <thead>
        <tr>
          <th>Nr.</th>
          <th>Equipment</th>
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
          <td>{{ isset($issue->call_id) ? $issue->getCallType() : "" }}</td>
          <td>{{ isset($issue->issue) ? $issue->issue : "" }}</td>
          <td>{{ isset($issue->details) ? $issue->details : "" }}</td>
          <td>{{ isset( $issue->user_id) ? $issue->getUserName() : "" }}</td>
        </tr>

        {{-- <p>{{ $issue}}</p> --}}
      @endforeach
    </tbody>
    </table>
  </div>

</body>
</html>
