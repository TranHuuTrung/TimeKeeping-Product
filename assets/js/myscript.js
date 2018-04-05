$(document).ready(function(){
    $("#table-manager-user").DataTable(
        {
            "aLengthMenu": [[5, 10, 15, 25,50,100,-1], [5, 10, 15, 25,50,100, "All"]],
        }
     );
});