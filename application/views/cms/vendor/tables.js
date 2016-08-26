var oTable = '';
var TableManaged = function () {

    return {

        //main function to initiate the module
        init: function () {
            
            if (!jQuery().dataTable) {
                return;
            }

            // begin: third table
            oTable = $('#example').dataTable({
				"bProcessing": true,
				"bServerSide": true,
				"sAjaxSource": "getdataarticle",
				"bAutoWidth": false,
                "aLengthMenu": [
                    [10, 20],
                    [10, 20] // change per page values here
                ],
                // set the initial value
                "iDisplayLength": 10,
                "sDom": "<'row-fluid'<'span6'l><'span6'f>r>t<'row-fluid'<'span6'i><'span6'p>>",
                "sPaginationType": "bootstrap",
                "oLanguage": {
                    "sLengthMenu": "_MENU_ per page",
                    "oPaginate": {
                        "sPrevious": "Prev",
                        "sNext": "Next"
                    }
                },
                "aoColumnDefs": [
				
                ],
            });
			

        }
    };

}();


