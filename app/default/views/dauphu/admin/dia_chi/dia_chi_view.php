<link rel="stylesheet" href="<?= base_url() ?>/admin_source/datatables.net-bs/css/dataTables.bootstrap.min.css">
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<style>
    .sortable { list-style-type: none; margin: 0; padding: 0; width: 100%; }
    #parent, .group-category {
        list-style-type: none;
    }
    #parent{
        padding-left: 0px;
    }
    #parent input{
        font-size: 0.9em;
    }
    #parent li{
        cursor: move;
    }

    #parent li.parent-li{
        display: block;
        margin: 0px 0px 20px 0px;
        padding: 5px 0 0 0;
        color: #0088cc;
        background-color: #dadada;
        border: 1px solid #f8f8f8;
    }
    #parent .parent-li .name-parent{
        cursor: pointer;
        font-size: 1em;
        padding-left: 5px;
        font-weight: bold;
    }

    #parent .material-icons{
        font-size: 1.2em;
    }

    .group-category{
        margin-top: 5px;
        background-color: #f8f8f8;
        border-top: 1px solid #afafaf;
    }
    .group-category .name-category{
        cursor: pointer;
    }
    .group-category .category-li{
        font-size: 0.9em;
        display: block;
        padding: 5px 5px;
        font-weight: normal;
        border-left: none;
        border-bottom: 1px solid #e0e0e0;
    }
    .group-category li.active{
        background-color: #dadada;
        border-left: 2px solid #e80000
    }
    .action{
        float: right;
        padding: 0 5px;
        font-size: 0.9em !important;
        font-weight: bold;
    }
    .add-state{
        text-align: center;
        padding: 5px 0px;
        cursor: pointer;
        font-weight: bold;
        background-color: #f8f8f8;
    }
    .add-form-category{
        margin: 5px;
    }
</style>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Quản lý địa chỉ cửa hàng
            <small>Google Maps</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Maps</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Data Table With Full Features</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>Tỉnh/Thành Phố</th>
                        <th>Lat</th>
                        <th>Lng</th>
                        <th>Status</th>
                        <th class="center">Thao tác</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php if(empty($allProvince)){ ?>
                        <tr class="odd"><td valign="top" colspan="5" class="dataTables_empty">Chưa có dữ liệu</td></tr>
                    <?php }else{?>
                        <?php foreach ($allProvince as $province){?>
                            <tr>
                                <td>
                                    <a href="<?=site_url('admin/dia-chi?pid='.$province['id_province'])?>">
                                        <?= $province['name']?>
                                    </a>
                                </td>
                                <td><?= $province['lat']?></td>
                                <td><?= $province['lng']?></td>
                                <td><?= $province['status']?></td>
                                <td></td>
                            </tr>
                        <?php } ?>
                    <?php }?>
                    </tbody>
                    <tfoot>
                    <tr>
                        <th>Tỉnh/Thành Phố</th>
                        <th>Lat</th>
                        <th>Lng</th>
                        <th>Status</th>
                        <th>Thao tác</th>
                    </tr>
                    </tfoot>
                </table>
            </div>
            <!-- /.box-body -->
        </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<script src="<?= base_url() ?>/admin_source/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?= base_url() ?>/admin_source/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>

<script>

    $(function () {
        $('#example1').DataTable({
            'language':{
                "sProcessing":   "Đang xử lý...",
                "sLengthMenu":   "Xem _MENU_ mục",
                "sZeroRecords":  "Không tìm thấy dòng nào phù hợp",
                "sInfo":         "Đang xem _START_ đến _END_ trong tổng số _TOTAL_ mục",
                "sInfoEmpty":    "Đang xem 0 đến 0 trong tổng số 0 mục",
                "sInfoFiltered": "(được lọc từ _MAX_ mục)",
                "sInfoPostFix":  "",
                "sSearch":       "Tìm:",
                "sUrl":          "",
                "oPaginate": {
                    "sFirst":    "Đầu",
                    "sPrevious": "Trước",
                    "sNext":     "Tiếp",
                    "sLast":     "Cuối"
                }
            }
        });
    })
</script>
