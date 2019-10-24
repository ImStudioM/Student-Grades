<?php
    
    include( 'students.php');
    $student = new Student();


    // Search keyword
    $search = isset($_GET['student']) ? $_GET['student'] : null;

    // define how many results you want per page
    $results_per_page = 8;

    // determine which page number visitor is currently on
    $current_page = isset($_GET['page']) ? intval($_GET['page']) : 1;



    // New student registration
    if( isset($_POST['name']) && isset($_POST['id']) && isset($_POST['exam']) && isset($_POST['grade']) ) :

      if ( !empty($_POST['name']) && !empty($_POST['id']) ) {

        $name   = $_POST['name'];
        $id     = $_POST['id'];
        $exam   = $_POST['exam'];
        $grade  = $_POST['grade'];

        $student->save_student( $name, $id, $exam, $grade );
        header("Location: " . $_SERVER['REQUEST_URI']);
        exit();

      } else {


        $text_error = 'Error! form can&apos;t be empty!';
        echo '<div class="alert alert-danger" role="alert">'. $text_error .'</div>';
      }

    endif;
    



?> 
