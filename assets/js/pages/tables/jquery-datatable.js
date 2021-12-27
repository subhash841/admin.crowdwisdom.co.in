$(function () {
    $('.js-basic-example').DataTable({
        responsive: true,
        "bSort": false
    });

//    $('.js-basic-example').dataTable({
//        "bDestroy": true,
//        "bPaginate": true,
//        "bScrollCollapse": true,
//        "bProcessing": true,
//        "bFilter": true,
//        "bSort": false,
//        aoColumnDefs: [
//            {aTargets: ['_all'], bSortable: true},
//            {aTargets: [0], bSortable: false},
//            {aTargets: [1], bSortable: false}
//        ]
//    });

    //Exportable table
    $('.js-exportable').DataTable({
        dom: 'Bfrtip',
        responsive: true,
        buttons: [
            'excel'
        ]
    });
});