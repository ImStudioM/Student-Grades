<h4 class="form-title">New student registration</h4>

<form method="post">

    <div class="form-group">
      <input type="text" class="form-control" name="name" id="f-name" placeholder="Full Name" required minlength="5">
    </div>

    <div class="form-group">
      <input type="number" class="form-control" name="id" id="id" placeholder="ID Number" required minlength="5">
    </div>




    <div class="exam-sec">
      <div class="form-row exam-row">

          <div class="form-group col-4 col-md-4">
            <input type="text" class="form-control" name="exam[]" placeholder="Exam" required minlength="3">
          </div>

          <div class="form-group col-4 col-md-4">
            <input type="number" class="form-control" name="grade[]" placeholder="Gradet" required min="0" max="100">
          </div>



          <div class="form-group form-row col-4 col-md-4 add-remove">

            <div class="col-6 col-md-6 add">
              <button class="btn btn-primary btn-block add-b"><span class="mobile">+</span><span class="desktop">Add Another grade</span></button>
            </div>

            <div class="col-6 col-md-6 remove">
              <button class="btn btn-primary btn-block remove-b"><span class="mobile">-</span><span class="desktop">Remove grade</span></button>
            </div>
              
          </div>


      </div>
    </div> <!-- .exam-sec -->




    <div class="form-row">

        <div class="col-md-6  mb-2">
            <button type="submit" class="btn btn-primary btn-block">Submit new student</button>
        </div>

        <div class="col-md-6 mb-2">
            <button class="btn btn-primary btn-block cancel">Cancel</button>
        </div>

    </div>



</form>