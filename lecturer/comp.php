<?php 

$currentPage = "Competitions";

include 'misc/header.php';

?>


<div class="container mt-4">
    <div class="row">
        <div class="col-md-12">
            <table id="example" class="display table" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Competition</th>
                        <th>Registration Deadline</th>
                        <th>Competition Date</th>
                        <th class="disabled-sorting text-right">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>EXACT Hackathon</td>
                        <td>2011/04/25</td>
                        <td>2011/04/25</td>
                        <td class="text-right">
                            <a href="#"><i class="action-btn fa fa-eye"></i></a>
                            <a href="#"><i class="action-btn fa fa-edit"></i></a>
                            <a href="#"><i class="action-btn fa fa-times mr-2"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Binary IT Challenge Binary IT Challenge Binary IT Challenge</td>
                        <td>2011/04/25</td>
                        <td>2011/07/25</td>
                        <td class="text-right">
                            <a href="comp-details.php"><i class="action-btn fa fa-eye"></i></a>
                            <a href="comp-edit.php"><i class="action-btn fa fa-edit"></i></a>
                            <a href="#"><i class="action-btn fa fa-times mr-2"></i></a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('#example').DataTable({
            "columns": [
                null,
                {
                    "width": "400px"
                },
                null,
                null,
                {
                    "width": "90px"
                }
            ]
        });
    });

</script>

<?php

include 'misc/footer.php';

?>
