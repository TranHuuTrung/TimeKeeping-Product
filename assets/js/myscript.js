$(document).ready(function(){
    $('table.displayDataTable').DataTable(
        {
            "aLengthMenu": [[5, 10, 15, 25,50,100,-1], [5, 10, 15, 25,50,100, "All"]],
            "order": [],
            "columnDefs": [ { "orderable": false, "targets": [0] } ]
        }
     );
     
});
