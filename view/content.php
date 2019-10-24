<?php include( dirname(__DIR__) . '/controller/functions.php'); ?>

    <section id="background" class="jumbotron">
        <div class="container"></div>
    </section>


    <section id="main" class="container">
      <div class="row">

          <h1 class="tilte">Student Grades</h1>
          


          <div id="table" class="col-md-12" >

            <div class="col form-row mb-4">

                <?php include('search_bar.php'); ?>

                <button type="button" class="reg btn btn-primary">Register new student</button>

            </div>


            <div class="col">

              <?php include('students_table.php'); ?>

              <div class="row">

                <?php include( 'pagination.php' ); ?>

              </div>
            </div>

          </div> <!--#tabl -->





          <div id="form" class="col-md-12" style="display:none;">


              <div class="form-row mb-5">

                <div class="col-6 col-md-3">
                  <button type="submit" class="reg btn btn-primary btn-block"><span class="mobile">grades table</span><span class="desktop">Check student grade table</span></button>
                </div>

                <div class="col-6 col-md-3">
                  <button type="submit" class="btn btn-primary btn-block col-md-9 register-off not-allowed">Register new student</button>
                </div>


              </div>

              <?php include('new_student.php'); ?>

          </div> <!-- #form -->




      </div>
    </section>