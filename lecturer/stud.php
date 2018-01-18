<?php
    $currentPage = "Students";

    require '../config.php';
    require '../restrict/restrict.php';

    include '../header.php';
    include 'misc/sidebar.php';
    include 'misc/navbar.php';
?>


<div class="container">
    <div class="row px-2">
        <div class="col-md-12">
            <div class="card bootstrap-table">
                <div class="card-body table-full-width">
                    <table id="bootstrap-table" class="table">
                        <thead>
                            <th data-field="id">TP No</th>
                            <th data-field="course">Course of Study</th>
                            <th data-field="interests">Interests</th>
                            <th data-field="comp-type"> Preferred Competition Type</th>
                            <th data-field="actions" class="td-actions text-center" data-events="operateEvents" data-formatter="operateFormatter">Action</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>TP033931</td>
                                <td>BSc (Hons) in Software Engineering</td>
                                <td>Java, Public Speaking, C++</td>
                                <td>Team</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>TP035405</td>
                                <td>BSc (Hons) in Business Information Systems</td>
                                <td>Machine Learning, Big Data, Marketing</td>
                                <td>Individual</td>
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