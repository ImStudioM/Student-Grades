
<?php

    $currnt_rows = $student->get_row_numb( $result );

    $all_rows = $student->get_row_numb( $result , true);

    $paginat_rows =  ceil( $all_rows / $results_per_page );


?>

<div class="col align-self-start">
    <p class="font-weight-bold">Showing <?php echo $currnt_rows ?> of <?php echo $all_rows ?></p>
</div>



<div class="col <?php echo $search == null ? '' : 'hide'; ?>">
    <nav aria-label="Page navigation">
        <ul class="pagination justify-content-end">

            <?php

                echo $current_page !== 1 ? '<li class="page-item"><a class="page-link" href="?page=' . ( $current_page - 1 )  . '">Prev</a></li>' : '';
                
                

                for ($page = 1; $page <= $paginat_rows ; $page++) {

                    $active = ( $current_page == $page ) ? 'active' : '';
                    echo '<li class="page-item '. $active .'"><a class="page-link" href="?page=' . $page . '">' . $page . '</a></li>';
                }


                echo $current_page < $paginat_rows ? '<li class="page-item"><a class="page-link" href="?page=' . ( $current_page + 1 ). '">Next</a></li>' : '';

            ?>

        </ul>
    </nav>
</div>