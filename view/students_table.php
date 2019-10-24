<table class="table">
    <thead>
    <tr>
        <th scope="col">Student name</th>
        <th scope="col">ID</th>
        <th scope="col">Exam</th>
        <th scope="col">Grade</th>
    </tr>
    </thead>
    <tbody>


    <?php

        
        $result = $student->get_student( $search ,$current_page, $results_per_page ); //$current_page
        //echo $result;

        while( $row = mysqli_fetch_array( $result ) ){

        echo '<tr>';
            echo '<td>' . $row['name'] . '</td>';
            echo '<td>' . $row['student_id']. '</td>';
            echo '<td>' . $row['exam'] . '</td>';
            echo '<td>' . $row['grade'] . '</td>';
        echo '</tr>';

        }
        ?>

    </tbody>
</table>