<?php
/* Smarty version 3.1.29, created on 2016-08-28 19:34:31
  from "C:\xampp\htdocs\olrange\application\views\cms\pages\tables.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57c320a75430b4_79117200',
  'file_dependency' => 
  array (
    'c7069d318bce7353c88efb60655832e118ee0d37' => 
    array (
      0 => 'C:\\xampp\\htdocs\\olrange\\application\\views\\cms\\pages\\tables.html',
      1 => 1472405662,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./layout/header.html' => 1,
  ),
),false)) {
function content_57c320a75430b4_79117200 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:./layout/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <div id="page-wrapper">
            <div class="row">
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
			<div class="panel-heading">
                          <button class="btn btn-success" onclick="add_article()"><i class="glyphicon glyphicon-plus"></i> Add Article</button>
                        </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                          <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
								<thead>
									<tr>
										<th>id</th>
										<th>title</th>
										<th>link</th>
										<th>status</th>
										<th style="width:200px;">Action</th>
									</tr>
								</thead>
								<tbody>
								</tbody>
                            </table>
                        
						</div>
					</div>
				</div>
			</div>	
    <!-- /#wrapper -->

    <!-- jQuery -->
  

    <!-- Bootstrap Core JavaScript -->
    

    <!-- Metis Menu Plugin JavaScript -->
    

    <!-- DataTables JavaScript -->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['domain']->value;?>
/application/views/cms/vendor/data-tables/jquery-2.1.4.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['domain']->value;?>
/application/views/cms/vendor/data-tables/bootstrap.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['domain']->value;?>
/application/views/cms/vendor/data-tables/jquery.dataTables.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['domain']->value;?>
/application/views/cms/vendor/data-tables/dataTables.bootstrap.js"><?php echo '</script'; ?>
>
	
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['domain']->value;?>
/application/views/cms/vendor/tinymcpuk/jscripts/tiny_mce/tiny_mce.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['domain']->value;?>
/application/views/cms/vendor/tinymcpuk/jscripts/tiny_mce/tiny_pasarkode.js"><?php echo '</script'; ?>
>
	

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
   <?php echo '<script'; ?>
 type="text/javascript">

var save_method; //for save method string
var table;

$(document).ready(function() {

    //datatables
    table = $('#example').DataTable({ 

        "processing": true, //Feature control the processing indicator.
        "serverSide": true, //Feature control DataTables' server-side processing mode.
        "order": [], //Initial no order.

        // Load data for the table's content from an Ajax source
        "ajax": {
            "url": domain+"article/ajax_list",
            "type": "POST"
        },

        //Set column definition initialisation properties.
        "columnDefs": [
		{
						"mRender": function ( data, type, row ) {
							if(data == '1'){
								return '<span class="label label-success status-button"  style="cursor:pointer" ref="'+row[0]+'" id="activate'+row[1]+'"  status="1" > Active </span>';
							}else{
								return '<span class="label label-warning status-button" style="cursor:pointer" ref="'+row[0]+'" id="activate'+row[1]+'" status="0" > Inactive </span>';
							}
						},
						"aTargets": [ 3]
		},
		{
						"mRender": function ( data, type, row ) {
							return '<a href="'+row[2]+row[0]+'" target="_blank" title="go to link" alt="link"/>'+row[2]+row[0]+'</a>';
						},
						"aTargets": [ 2]
		},
        { 
            "targets": [ -1 ], //last column
            "orderable": false,
			 "visible": [ 0 ], //set not orderable
        },
        ],

    });
});

$(document).on('click', '.status-button', function(){
	var id 		= $(this).attr('ref');
	var status 	= $(this).attr('status');

		$.ajax({
        url : domain+"article/ajax_activate/",
		data : "status="+status +"&id="+id,
        type: "GET",
        dataType: "JSON",
        success: function(data){
				if(status=='0'){
					$('#activate'+id).removeClass('label-warning').addClass('label-success').html('Active');
					$('#activate'+id).attr('status','1');
				}else{
					$('#activate'+id).removeClass('label-success').addClass('label-warning').html('Inactive');
					$('#activate'+id).attr('status','0');
				}
				reload_table()
		}
	});
});

function add_article()
{
    save_method = 'add';
    $('#form')[0].reset(); // reset form on modals
    $('.form-group').removeClass('has-error'); // clear error class
    $('.help-block').empty(); // clear error string
    $('#modal_form').modal('show'); // show bootstrap modal
    $('.modal-title').text('Add article'); // Set Title to Bootstrap modal title
}

function edit_article(id)
{
    save_method = 'update';
    $('#form')[0].reset(); // reset form on modals
    $('.form-group').removeClass('has-error'); // clear error class
    $('.help-block').empty(); // clear error string
	tinyMCE.get('in_body').setContent(''); 
    //Ajax Load data from ajax
    $.ajax({
        url : domain+"article/ajax_edit/"+id,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {
			tinyMCE.get('in_body').setContent(data.body);
            $('#id').val(data.id);
            $('#title').val(data.title);
            $('#modal_form').modal('show'); // show bootstrap modal when complete loaded
            $('.modal-title').text('Edit article'); // Set title to Bootstrap modal title

        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
    });
}

function reload_table()
{
    table.ajax.reload(null,false); //reload datatable ajax 
}

function save()
{
    $('#btnSave').text('saving...'); //change button text
    $('#btnSave').attr('disabled',true); //set button disable 
    var url;
	 tinyMCE.triggerSave();
    if(save_method == 'add') {
        url = domain+"article/ajax_add";
    } else {
        url = domain+"article/ajax_update";
    }
    // ajax adding data to database
    $.ajax({
        url : url,
        type: "POST",
        data: $('#form').serialize(),
        dataType: "JSON",
        success: function(data)
        {
			
            if(data.status) //if success close modal and reload ajax table
            {
                $('#modal_form').modal('hide');
                reload_table();
            }

            $('#btnSave').text('save'); //change button text
            $('#btnSave').attr('disabled',false); //set button enable 


        },
        error: function (jqXHR, textStatus, errorThrown)
        {
		
            alert('Error adding / update data');
            $('#btnSave').text('save'); //change button text
            $('#btnSave').attr('disabled',false); //set button enable 

        }
    });
}

function delete_article(id)
{
    if(confirm('Are you sure delete this data?'))
    {
        // ajax delete data to database
        $.ajax({
            url : domain+"article/ajax_delete/"+id,
            type: "POST",
            dataType: "JSON",
            success: function(data)
            {
                //if success reload ajax table
                $('#modal_form').modal('hide');
                reload_table();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error deleting data');
            }
        });

    }
}

<?php echo '</script'; ?>
>

<!-- Bootstrap modal -->
<div class="modal fade col-md-12" id="modal_form" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title">article Form</h3>
            </div>
            <div class="modal-body form">
                <form action="#" id="form" class="form-horizontal" enctype="multipart/form-data">
                    <input type="hidden" value="" name="id"/> 
                    <div class="form-body">
						<input id="id" name="id" placeholder="" class="form-control" type="hidden">
                        <div class="form-group">
                            <label class="control-label col-md-2">Title</label>
                            <div class="col-md-10">
                                <input id="title" name="title" placeholder="Title" class="form-control" type="text">
                                <span class="help-block"></span>
                            </div>
                        </div>   
                        <div class="form-group">
                            <label class="control-label col-md-2">Body</label>
                            <div class="col-md-10">
                                <textarea class="form-control"  value="" name="in_body" id="in_body"></textarea>
                                <span class="help-block"></span>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" id="btnSave" onclick="save()" class="btn btn-primary">Save</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- End Bootstrap modal -->
</body>
</html>
<?php }
}
