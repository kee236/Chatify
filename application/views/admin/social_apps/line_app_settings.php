


<section class="section section_custom">
  <div class="section-header">
    <h1><i class="fab fa-line"></i> <?php echo $page_title_line; ?></h1>
    <div class="section-header-button">
        <a class="btn btn-primary" href="<?php echo base_url('social_apps/add_line_settings') ?>"><i class="fas fa-plus-circle"></i> <?php echo $this->lang->line('Add New APP'); ?></a>
    </div>
    <div class="section-header-breadcrumb">
      <div class="breadcrumb-item"><a href="<?php echo base_url('integration'); ?>"><?php echo $this->lang->line("Integration"); ?></a></div>
      <div class="breadcrumb-item"><?php echo $this->lang->line("LINE OA"); ?></div>
    </div>
  </div>

  <?php $this->load->view('admin/theme/message'); ?>

  <div class="section-body">

    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-body data-card">

            <div class="table-responsive2">
              <table class="table table-bordered" id="mytable_line">
                <thead>
                  <tr>
                    <th>#</th>
                    <th style="vertical-align:middle;width:20px">
                        <input class="regular-checkbox" id="datatableSelectAllRowsLINE" type="checkbox"/><label for="datatableSelectAllRowsLINE"></label>
                    </th>
                    <th><?php echo $this->lang->line("ID"); ?></th>
                    <th><?php echo $this->lang->line("APP Name"); ?></th>
                    <th><?php echo $this->lang->line("Channel ID"); ?></th>
                    <th><?php echo $this->lang->line("Channel Secret"); ?></th>
                    <th><?php echo $this->lang->line("Status"); ?></th>
                    <th><?php echo $this->lang->line("Actions"); ?></th>
                  </tr>
                </thead>
              </table>
            </div>
          </div>

        </div>
      </div>
    </div>

  </div>
</section>

<script>
  var base_url="<?php echo site_url(); ?>";

  $(document).ready(function() {

    "use strict";

    var perscroll_tiktok;
    var table_tiktok = $("#mytable_tiktok").DataTable({
        serverSide: true,
        processing:true,
        bFilter: true,
        order: [[ 2, "desc" ]],
        pageLength: 10,
        ajax: {
            url: base_url+'social_apps/tiktok_settings_data',
            type: 'POST'
        },
        language:
        {
          url: "<?php echo base_url('assets/modules/datatables/language/'.$this->language.'.json'); ?>"
        },
        dom: '<"top"f>rt<"bottom"lip><"clear">',
        columnDefs: [
          {
              targets: [1,2,7],
              visible: false
          },
          {
              targets: '',
              className: 'text-center'
          },
          {
              targets: [0,1,4,5,6,7],
              sortable: false
          }
        ],
        fnInitComplete:function(){  // when initialization is completed then apply scroll plugin
            if(areWeUsingScroll)
            {
              if (perscroll_tiktok) perscroll_tiktok.destroy();
              perscroll_tiktok = new PerfectScrollbar('#mytable_tiktok_wrapper .dataTables_scrollBody');
            }
        },
        scrollX: 'auto',
        fnDrawCallback: function( oSettings ) { //on paginition page 2,3.. often scroll shown, so reset it and assign it again
            if(areWeUsingScroll)
            {
              if (perscroll_tiktok) perscroll_tiktok.destroy();
              perscroll_tiktok = new PerfectScrollbar('#mytable_tiktok_wrapper .dataTables_scrollBody');
            }
        }

    });

    $(document).on('click','.delete_app_tiktok',function(e){
      e.preventDefault();
      var ifyoudeletethisaccount = "<?php echo $this->lang->line('If you delete this APP then, all the imported TikTok accounts will be deleted too corresponding to this APP.'); ?>";
      swal({
        title: '<?php echo $this->lang->line("Are you sure?"); ?>',
        text: ifyoudeletethisaccount,
        icon: 'warning',
        buttons: true,
        dangerMode: true,
      })
      .then((willDelete) => {
        if (willDelete)
        {
          var app_table_id = $(this).attr('table_id');
          var csrf_token = $(this).attr('csrf_token');
          $(this).removeClass('btn-outline-danger');
          $(this).addClass('btn-danger');
          $(this).addClass('btn-progress');

          $.ajax({
            context: this,
            type:'POST' ,
            url:"<?php echo site_url();?>social_apps/tiktok_app_delete_action",
            dataType: 'json',
            data:{app_table_id : app_table_id,csrf_token:csrf_token},
            success:function(response){

              $(this).removeClass('btn-progress');
              $(this).removeClass('btn-danger');
              $(this).addClass('btn-outline-danger');

              if(response.status == 1)
              {
                swal('<?php echo $this->lang->line("Success"); ?>', response.message, 'success').then((value) => {
                    location.reload();
                  });
              }
              else
              {
                swal('<?php echo $this->lang->line("Error"); ?>', response.message, 'error');
              }
            }
          });
        }
      });
    });


    var perscroll_line;
    var table_line = $("#mytable_line").DataTable({
        serverSide: true,
        processing:true,
        bFilter: true,
        order: [[ 2, "desc" ]],
        pageLength: 10,
        ajax: {
            url: base_url+'social_apps/line_settings_data',
            type: 'POST'
        },
        language:
        {
          url: "<?php echo base_url('assets/modules/datatables/language/'.$this->language.'.json'); ?>"
        },
        dom: '<"top"f>rt<"bottom"lip><"clear">',
        columnDefs: [
          {
              targets: [1,2,7],
              visible: false
          },
          {
              targets: '',
              className: 'text-center'
          },
          {
              targets: [0,1,4,5,6,7],
              sortable: false
          }
        ],
        fnInitComplete:function(){  // when initialization is completed then apply scroll plugin
            if(areWeUsingScroll)
            {
              if (perscroll_line) perscroll_line.destroy();
              perscroll_line = new PerfectScrollbar('#mytable_line_wrapper .dataTables_scrollBody');
            }
        },
        scrollX: 'auto',
        fnDrawCallback: function( oSettings ) { //on paginition page 2,3.. often scroll shown, so reset it and assign it again
            if(areWeUsingScroll)
            {
              if (perscroll_line) perscroll_line.destroy();
              perscroll_line = new PerfectScrollbar('#mytable_line_wrapper .dataTables_scrollBody');
            }
        }

    });

    $(document).on('click','.delete_app_line',function(e){
      e.preventDefault();
      var ifyoudeletethisaccount = "<?php echo $this->lang->line('If you delete this APP then, all the imported LINE accounts will be deleted too corresponding to this APP.'); ?>";
      swal({
        title: '<?php echo $this->lang->line("Are you sure?"); ?>',
        text: ifyoudeletethisaccount,
        icon: 'warning',
        buttons: true,
        dangerMode: true,
      })
      .then((willDelete) => {
        if (willDelete)
        {
          var app_table_id = $(this).attr('table_id');
          var csrf_token = $(this).attr('csrf_token');
          $(this).removeClass('btn-outline-danger');
          $(this).addClass('btn-danger');
          $(this).addClass('btn-progress');

          $.ajax({
            context: this,
            type:'POST' ,
            url:"<?php echo site_url();?>social_apps/line_app_delete_action",
            dataType: 'json',
            data:{app_table_id : app_table_id,csrf_token:csrf_token},
            success:function(response){

              $(this).removeClass('btn-progress');
              $(this).removeClass('btn-danger');
              $(this).addClass('btn-outline-danger');

              if(response.status == 1)
              {
                swal('<?php echo $this->lang->line("Success"); ?>', response.message, 'success').then((value) => {
                    location.reload();
                  });
              }
              else
              {
                swal('<?php echo $this->lang->line("Error"); ?>', response.message, 'error');
              }
            }
          });
        }
      });
    });

  });
</script>
