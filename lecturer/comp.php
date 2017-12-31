<?php 

$currentPage = "Competitions";

include 'misc/header.php';

?>


<div class="container">
    <table id="table_id" class="table display">
        <thead class="thead-light">
            <tr>
                <th>Name</th>
                <th>Birth Year</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Gideon</td>
                <td>1996</td>
                <td>
                    <a href="#" class="btn btn-link btn-info like"><i class="fa fa-heart"></i></a>
                </td>

            </tr>
            <tr>
                <td>Jaedon</td>
                <td>1997</td>
                <td>
                    <a href="#" class="btn btn-link btn-info like"><i class="fa fa-heart"></i></a>
                </td>
            </tr>
        </tbody>
    </table>


</div>

<script>
    $(document).ready(function() {
        $('#table_id').DataTable();
    });

</script>

<?php

include 'misc/footer.php';

?>
