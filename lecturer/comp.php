<?php
    $currentPage = "Competitions";

    require '../config.php';
    require '../restrict/restrict-lec.php';

    include '../header.php';
    include 'misc/sidebar.php';
    include 'misc/navbar.php';
?>

<div class="container">
    <div class="row px-2">
        <div class="col-md-12">
            <div class="card bootstrap-table">
                <div class="card-body table-full-width">
                    <a class="btn btn-primary mb-3" href="comp-create.php" style="padding: auto 30px; margin-left; 10px;">Create New</a>&nbsp;&nbsp;
                    <table id="bootstrap-table" class="table">
                        <thead>
                            <th data-field="id">ID</th>
                            <th data-field="comp">Competition</th>
                            <th data-field="reg-deadline">Registration Deadline</th>
                            <th data-field="comp-date">Competition Date</th>
                            <th data-field="actions" class="td-actions text-center" data-events="operateEvents" data-formatter="operateFormatter">Actions</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>EXACT Hackathon</td>
                                <td>11/01/2018</td>
                                <td>21/01/2018</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Binary Competition</td>
                                <td>11/01/2018</td>
                                <td>21/01/2018</td>
                                <td></td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
    include 'misc/sub-footer.php';
    include '../footer.php';
?>

<script type="text/javascript">
    //bootstrapTable
    var $table = $('#bootstrap-table');

    function operateFormatter(value, row, index) {
        return [
            '<a rel="tooltip" title="View" class="table-action" href="comp-details.php">',
            '<i class="fa fa-eye"></i>',
            '</a>',
            '<a rel="tooltip" title="Edit" class="table-action" href="comp-details.php">',
            '<i class="fa fa-edit text-warning"></i>',
            '</a>',
            '<a rel="tooltip" title="Delete" class="table-action" href="comp-details.php">',
            '<i class="fa fa-close text-danger"></i>',
            '</a>'
        ].join('');
    }

    $().ready(function() {

        $table.bootstrapTable({
            toolbar: ".toolbar",
            clickToSelect: true,
            search: true,
            showColumns: true,
            pagination: true,
            searchAlign: 'left',
            pageSize: 5,
            clickToSelect: false,
            pageList: [5, 10, 25, 50, 100],

            formatShowingRows: function(pageFrom, pageTo, totalRows) {
                //do nothing here, we don't want to show the text "showing x of y from..."
            },
            formatRecordsPerPage: function(pageNumber) {
                return pageNumber + " rows visible";
            },
            icons: {
                refresh: 'fa fa-refresh',
                toggle: 'fa fa-th-list',
                columns: 'fa fa-columns',
                detailOpen: 'fa fa-plus-circle',
                detailClose: 'fa fa-minus-circle'
            }
        });

        //activate the tooltips after the data table is initialized
        $('[rel="tooltip"]').tooltip();

        $(window).resize(function() {
            $table.bootstrapTable('resetView');
        });


    });
</script>