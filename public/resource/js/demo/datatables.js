// Call the dataTables jQuery plugin
$(document).ready(function() {
  $('#dataTable').DataTable( {
    "lengthChange" : false,
    "ordering": false,
    "sDom":"ltipr",
    "bInfo" : false,
    lengthMenu: [[10, 10, 20, -1], [10, 10, 20, 'Todos']],
    "order": [
      [1, 'asc']
    ]
});


var table = $('#dataTable').DataTable();
// search outside from datatables
$('#searching').on('keyup change', function () {
    table.search(this.value).draw();
});
// pagination outside from datatables
$("#dataTable_paginate").appendTo("#pagination");
  
});
