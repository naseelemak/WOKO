<?php 

$currentPage = "Students";

include 'misc/header.php';

?>


<div class="container mt-4">
    <div class="row">
        <div class="col-md-12 mb-4">
            <table id="example" class="display table" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>TP</th>
                        <th>Course of Study</th>
                        <th>Interests</th>
                        <th>Preferred Competition Type</th>
                        <th class="disabled-sorting text-right">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>TP034526</td>
                        <td>BSc (Hons) in Software Engineering</td>
                        <td>Java, Public Speaking, C++</td>
                        <td>Team</td>
                        <td class="text-right">
                            <a href="stud-details.php"><i class="action-btn fa fa-eye"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>TP034527</td>
                        <td>BSc (Hons) in Business Information Systems</td>
                        <td>Machine Learning, Big Data, Marketing</td>
                        <td>Individual</td>
                        <td class="text-right">
                            <a href="stud-details.php"><i class="action-btn fa fa-eye"></i></a>
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
                {
                    "width": "60px"
                },
                {
                    "width": "300px"
                },
                null,
                {
                    "width": "150px"
                },
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
