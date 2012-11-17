<div class="jumbotron">
    <h1>MediCheck</h1>
    <?php
        if(Yii::app()->user->isGuest)
            echo "hi";
        elseif(Yii::app()->user->level=="patient")
            echo "patient";
        elseif(Yii::app()->user->level=="doctor")
            echo "doctor";
    ?>
    <p class="lead">Providing vital hospital services in the local markets and maintaining high quality healthcare for the local communities that we serve.
    </p>
    <a class="btn btn-large btn-success" href="#">Sign up today</a>
</div>
<hr>
      <div class="row-fluid marketing">
          <div class="span6" style="width: 599px; height: 349px">
              <h4 class="offset3">What can get......</h4>

              <div class="row-fluid marketing offset3">
                  <div class="span6">
                      <h4>Printout of the prescription</h4>
                      <p>Provide service to view the prescription which entered by the doctor.</p>

                      <h4>Browse history by Doctor/Patient.</h4>
                      <p>System will record and keep important details about patients for their future use</p>

                      <h4>Forum Discussions</h4>
                      <p>An open space which allow you to put questions and get suggestions</p>
                  </div>

                  <div class="span6">
                      <h4>Doctor recommendations</h4>
                      <p>Any one can search for a particular doctor according to their purpose</p>

                      <h4>Maintaining Family Details</h4>
                      <p>Can Store and retrieve some family record under this category </p>
                  </div>
              </div>
          </div>
      </div>

