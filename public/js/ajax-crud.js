(function () {

  var url = "";
  var table = {};
  var table_id;

  $(document).ready(function(){

    bindButtonClick();

    //create new toner / update existing toner
    $("#btn-save-toner").click( function (e){
      e.preventDefault();
      saveData();
    });
    $("#btn-save-cartridge").click( function (e){
      e.preventDefault();
      saveData();
    });
    $("#btn-save-info").click( function (e){
      e.preventDefault();
      saveData();
    });
  });

  function saveData() {

    var formData = {};
    if (table[1] == 'toner') {
      formData = {
        model: $('#model').val(),
        quantity: $('#quantity').val(),
        quantity_remained: $('#quantity').val(),
        procure_date: $('#procure_date').val(),
        price: $('#price').val(),
        company: $('#company').val(),
        is_active: $("[name='my-checkbox']").bootstrapSwitch('state') ? 1 : 0,
        created_at: $("#created_at").val(),
      }

      var err = 0;
      if($('#model').val() == "") {
        $('#model').css('border-color', 'red');
        err++;
      }else {
        $('#model').css('border-color', '#ccc');
      }
      if($('#quantity').val() == "") {
        $('#quantity').css('border-color', 'red');
        err++;
      }else {
        $('#quantity').css('border-color', '#ccc');
      }

      if($('#procure_date').val() == "") {
        $('#procure_date').css('border-color', 'red');
        err++;
      }else {
        $('#procure_date').css('border-color', '#ccc');
      }

      if (err > 0) return;
    }
    else if(table[1] == 'cartridge') {
      formData = {
        barcode: $('#barcode').val(),
        model: $('#model').val(),
        type: $('#cartridge_type input:radio:checked').val(),
        reg_state: $('#cartridge_reg_state input:radio:checked').val(),
        office: $('#office').val(),
        created_at: $('#cartridge_created_at').val()
      }

      var err = 0;
      if($('#barcode').val() == "") {
        $('#barcode').css('border-color', 'red');
        err++;
      }else {
        $('#barcode').css('border-color', '#ccc');
      }
      if($('#model').val() == "") {
        $('#model').css('border-color', 'red');
        err++;
      }else {
        $('#model').css('border-color', '#ccc');
      }

      if(err > 0) return;
    }

    // info
    //-----------------------------------------------------------------
    else if(table[1] == 'info') {
      var selected = []
      selected = $('#pieces').val()

      // console.log("Selected: " +  selected);

      formData = {
        cartridge_id: $('#cartridge_id').val(),
        toner_id: $('#toner').selectpicker('val'),
        toner_quantity: $('#toner_quantity').val(),
        opc: findSelected(selected, 'OPC') ? 1 : 0,
        pcr: findSelected(selected, 'PCR') ? 1 : 0,
        magnetic_wave: findSelected(selected, 'Magnetic Wave') ? 1 : 0,
        cleaning_blade: findSelected(selected, 'Cleaning Blade') ? 1 : 0,
        dr_cleaning_blade: findSelected(selected, 'Dr. Cleaning Blade') ? 1 : 0,
        chip: findSelected(selected, 'Chip') ? 1 : 0,
        description: $('#description').val(),
        cleaned: $("#cleaned").bootstrapSwitch('state') ? 1 : 0,
        user_id: $("#user_id").val(),
        created_at: $('#info_created_at').val()
      }

      // var err = 0;
      // if($('#toner_quantity').val() == 0) {
      //   $('#toner_quantity').css('border-color', 'red');
      //   err++;
      // }else {
      //   $('#toner_quantity').css('border-color', '#ccc');
      // }
      // if(err > 0) return;

    }
    username = $('#user').val();
    tonername = $('#toner option:selected').text().split(" : ")[0];
    //used to determine the http verb to use [add=POST], [update=PUT]
    var state = $('#btn-save-' + table[1]).val();

    var type = "POST"; //for creating new resource
    table_id = $('#'+ table[1] + '_id').val();
    var my_url = '/' + table[1] + 's';

    if (state == "update"){
      type = "PUT"; //for updating existing resource
      my_url += '/' + table_id;
    }
    // else {
    //   if(table[1] == 'toner') {
    //     formData.quantity_remained = formData.quantity;
    //   }
    //}

    $.ajax({
      type: type,
      url: my_url,
      data: formData,
      dataType: 'json',

      success: function (data) {
        console.log(data);
        console.log("Posted by " + username);
        var datas = "";
        if (table[1] == 'toner') {
          datas = '<tr id="toner' + data.id + '"><td>' + data.model + '</td><td>' + data.quantity + '</td><td>' + data.quantity_remained + '</td>';
          datas += '<td>' + data.procure_date + '</td><td>' ;
          datas += data.price == null  ? "" : data.price;
          datas += '</td><td>';
          datas += data.company == null  ?  "" :  data.company;
          datas += '</td><td>';
          datas += data.is_active == 1 ? "Yes" : "No";
          datas += '</td><td>' + data.created_at + '</td>';
          datas += '<td><button class="btn btn-warning btn-xs btn-detail open-modal" value="' + data.id + ' toner' + '">Edit</button>&nbsp;';
          // datas += '<button class="btn btn-danger btn-xs btn-delete delete-row" value="' + data.id + ' toner' + '">Delete</button>';
          datas += '</td></tr>';
        } else if (table[1] == 'cartridge') {
          datas = '<tr id="cartridge' + data.id + '"><td>' + data.barcode + '</td><td>' + data.model + '</td><td>';
          datas += data.type == null  ? "" : (data.type == 1 ? 'Original' : 'Compatible');
          datas += '</td><td>';
          datas +=  data.reg_state == null  ?  "" :  (data.reg_state == 1 ? 'New' : 'Used');
          datas += '</td><td>';
          datas += data.office == null  ?  "" :  data.office + '</td>';
          datas += '<td>' + data.created_at + '</td>'
          datas += '<td><button class="btn btn-xs btn-default open-info" onclick="document.location.href=\'/cartridge/' + data.id + '\'"';
          datas += ' value= "' + 'data.id cartridge">Info</button>&nbsp;'
          datas += '<button class="btn btn-warning btn-xs btn-detail open-modal" value="' + data.id + ' cartridge' + '">Edit</button>&nbsp;';
          // datas += '<button class="btn btn-danger btn-xs btn-delete delete-row" value="' + data.id + ' cartridge' + '">Delete</button>'
          datas += '</td></tr>';
        } else if (table[1] == 'info') {
          datas = '<tr id="info' + data.id + '"><td>' + tonername + '</td>';
          if(data.toner_quantity == null)
            datas += '<td> </td>';
          else {
             datas += '<td>' + data.toner_quantity + '</td>';
          }
          datas += '<td><div class="dropdown"> \
          <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Parts Changed \
          <span class="caret"></span></button> \
          <ul class="dropdown-menu"> \
          <li class="dropdown-header">Parts changed</li>';
          datas += data.opc == 1 ? "<li><a href='#'>OPC</a></li>" : '';
          datas += data.pcr == 1 ? "<li><a href='#'>PCR</a></li>" : '';
          datas += data.magnetic_wave == 1 ? "<li><a href='#'>magnetica wave</a></li>" : '';
          datas += data.cleaning_blade  == 1 ? "<li><a href='#'>cleaning blade</a></li>" : '';
          datas += data.dr_cleaning_blade  == 1 ? "<li><a href='#'>dr cleaning blade</a></li>" : '';
          datas += data.chip  == 1 ? "<li><a href='#'>Chip</a></li>" : '';
          datas += '</ul></div></td><td>' + username + '</td><td>';
          datas +=  data.cleaned == 1 ? "Yes" : "No";
          datas += '</td><td><a href="#" title="Description" data-toggle="popover" data-trigger="focus" data-content="' + data.description + '" style="color: #265a88;">';
          datas +=  data.description == null ? "" : (data.description).length > 20  ?  (data.description).substring(0,20) + ' ...' :  data.description;
          datas += '</a></td>'
          datas += '<td>' + data.created_at + '</td><td>'
          datas += '<button class="btn btn-warning btn-xs btn-detail open-modal" value="' + data.id + ' info' + '">Edit</button>&nbsp;';
          datas += '<button class="btn btn-danger btn-xs btn-delete delete-row" value="' + data.id + ' info' + '">Delete</button></td></tr>';
        }

        if (state == "add"){ //if user added a new record
          $('#' + table[1] + '-list').append(datas);
        } else { //if user updated an existing record
          $("#" + table[1] + table_id).replaceWith( datas );
        }

        $('#frm-' + table[1] + 's').trigger("reset");
        $('#'+ table[1] + 'Modal').modal('hide');

        $('[data-toggle="popover"]').popover();
        bindButtonClick();
      },
      error: function (jqXHR, textStatus, errorThrown) { // What to do if we fail
        console.log(JSON.stringify(jqXHR));
        console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
      }
    });
  };

  function bindButtonClick() {
    //display modal form for toner editing
    $('.open-modal').click(function(){
      $('#toner').selectpicker('render');
      $('#toner').selectpicker('refresh');
      table = $(this).val().split(" ");
      table_id = table[0];
      url = "/" + table[1] + 's';

      $.get(url + '/' + table_id, function (data) {

        //success data
        $('#' + table[1] + '_id').val(data.id);

        if(table[1] == "toner") {
          $('#model').val(data.model);
          $('#quantity').val(data.quantity);
          $('#quantity_remained').val(data.quantity_remained);
          $('#procure_date').val(data.procure_date);
          $('#price').val(data.price);
          $('#company').val(data.company);
          $("[name='my-checkbox']").bootstrapSwitch('state', data.is_active == 1);
          $('#created_at').val(data.created_at);
        } else if(table[1] == "cartridge") {
          $('#barcode').val(data.barcode);
          $('#model').val(data.model);
          if(data.type == 1) {
            $("#cartridge_type input[name='type'][value='1']").prop("checked",true);
          }
          else if(data.type == 2) {
            $("#cartridge_type input[name='type'][value='2']").prop("checked",true);
          }
          else {
            $("#cartridge_type input[name='type'][value='1']").prop("checked",false);
            $("#cartridge_type input[name='type'][value='2']").prop("checked",false);
          }
          if(data.reg_state == 1) {
            $("#cartridge_reg_state input[name='reg_state'][value='1']").prop("checked",true);
          }
          else if(data.reg_state == 2) {
            $("#cartridge_reg_state input[name='reg_state'][value='2']").prop("checked",true);
          }
          else {
            $("#cartridge_reg_state input[name='reg_state'][value='1']").prop("checked",false);
            $("#cartridge_reg_state input[name='reg_state'][value='2']").prop("checked",false);
          }
          $('#office').val(data.office);
        } else if(table[1] == "info") {
          $('#toner').selectpicker('val', data.toner_id);
          $('#toner_quantity').val(data.toner_quantity);
          var selected = [];
          selected.push(data.opc == 1 ? 'OPC' : '');
          selected.push(data.pcr == 1 ? 'PCR' : '');
          selected.push(data.magnetic_wave == 1 ? 'Magnetic Wave' : '');
          selected.push(data.cleaning_blade == 1 ? 'Cleaning Blade' : '');
          selected.push(data.dr_cleaning_blade == 1 ? 'Dr. Cleaning Blade' : '');
          selected.push(data.chip == 1 ? 'Chip' : '');

          $('#pieces').selectpicker('val',selected);
          $("#cleaned").bootstrapSwitch('state', data.cleaned == 1);
          $('#description').val(data.description);
        }

        $('#btn-save-' + table[1]).val("update");
        $('#' + table[1] + 'Modal').modal('show');
      })
    });

    //display modal form for creating new toner
    $('#btn-add-toner').click(function(){
      table[1] = 'toner';
      $('#btn-save-toner').val("add");
      $('#frm-toner').trigger("reset");
      $('#tonerModal').modal('show');
    });
    $('#btn-add-cartridge').click(function(){
      table[1] = 'cartridge';
      $('#btn-save-cartridge').val("add");
      $('#frm-cartridge').trigger("reset");
      $('#cartridgeModal').modal('show');
    });
    $('#btn-add-info').click(function(){
      table[1] = 'info';
      $('#btn-save-info').val("add");
      $('#frm-info').trigger("reset");
      $('#pieces').selectpicker('deselectAll');
      $('#infoModal').modal('show');
    });

    //delete toner and remove it from list
    $('.delete-row').click( function(){
      table = $(this).val().split(" ");

      bootbox.confirm("Are you sure you want to detele this?", function(result) {
        if(result) {
          table_id = table[0];
          url = '/' + table[1] + 's/' + table_id;

          $.ajax({

            type: "DELETE",
            url: url,
            success: function (data) {

              $("#" + table[1] + table_id).remove();
            },
            error: function(jqXHR, textStatus, errorThrown) { // What to do if we fail
              console.log(JSON.stringify(jqXHR));
              console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
            }
          });
        }
      });
    });
  }

  function findSelected(arr, val) {
    if(arr != null) {
      return arr.some(function(arrVal) {
        return val == arrVal;
      });
    }
  }
})();
