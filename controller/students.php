<?php

include( dirname(__DIR__) . '/model/database.php');


class Student extends Database{




    public function get_student( $search = null,  $current_page = null, $results_per_page = null ){

        global $database;

        $search = $search == null ? null : $database->escape_string( $search );

        $limt_offset = $this->pagination( $search, $current_page, $results_per_page);

        $query = $search === null ? "SELECT * FROM student " . $limt_offset : "SELECT * FROM student WHERE name LIKE '$search%' " . $limt_offset;

        $result_set = $database->query( $query );

        return   $result_set; 

    }


    

    public function save_student($name, $id, $exam, $grade ){

        global $database;

        $name   = $database->escape_string( $name );
        $id     = $database->escape_string( $id );
        $exam   = $database->escape_string( implode("<br>", $exam ) );
        $grade  = $database->escape_string( implode("<br>", $grade ) );

        $query = "INSERT INTO student ( name, student_id, exam, grade) VALUES ( '$name', '$id', '$exam', '$grade')";

        return  $database->query( $query );

    }




    public function get_row_numb( $result , $all = false ){

        $result = $all ? $this->get_student() : $result;
        $row_cnt = mysqli_num_rows( $result);
        return $row_cnt;

    }



    
    public function pagination ( $search = null , $current_page = null, $results_per_page = null , $offset = null ) {

        if (  $current_page == null && $results_per_page == null) {

            return '';

        } elseif( $search == null) {

            $this_page_first_result = ($current_page - 1) * $results_per_page;
            return "LIMIT " . $this_page_first_result . " , " .  $results_per_page;

        } /* else {

            $offset = 0;

            $current_page = $current_page == 1 ? -$results_per_page : $current_page;

            for ($x = 1; $x <= $current_page ; $x++) {
                $offset += $results_per_page;
            }

            return "LIMIT " . $offset . " , " .  $results_per_page;


        } */

    }






} // end class















?>