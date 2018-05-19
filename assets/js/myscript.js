$(document).ready(function(){
    $('table.displayDataTable').DataTable(
        {
            "aLengthMenu": [[5, 10, 15, 25,50,100,-1], [5, 10, 15, 25,50,100, "All"]],
            "order": [],
            "columnDefs": [ { "orderable": false, "targets": [0] } ],
            "language": {
                "lengthMenu": "Hiển thị _MENU_ bản ghi",
                "zeroRecords": "Không tìm thấy",
                "info": "Hiển thị trang _PAGE_ của _PAGES_",
                "infoEmpty": "Không có bản ghi nào",
                "infoFiltered": "(Tìm kiếm từ _MAX_ bản ghi)",
                "search": "Tìm kiếm",
                "paginate": {
                    "first":      "Đầu tiên",
                    "last":       "Cuối cùng",
                    "next":       "Tiếp theo",
                    "previous":   "Trở lại"
                }
            }
        }
     );
     
});
