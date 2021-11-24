<?php
require_once 'includes/function.php';
?>
<form method="POST">
<div class="col-md-6">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Ajouter un nouveau membre</h3>
              </div>
              <div class="card-body">
                <!-- non -->
                <div class="form-group">
                  <label>Nom</label>
                    <div class="input-group date" id="reservationdate" data-target-input="nearest">
                        <input type="text" class="form-control"   name="nom" value="<?=get_data($_POST, 'nom')?>"/>
                        <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fa fa-user"></i></div>
                
                        </div>
                    </div>
                    <?= display_errors($errors, 'nom')?>
                </div>

                <div class="form-group">
                  <label>Prénom</label>
                    <div class="input-group date" id="reservationdate" data-target-input="nearest">
                        <input type="text" class="form-control" name="prenom" value="<?=get_data($_POST, 'prenom')?>"/>
                        <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fa fa-user"></i></div>
                        </div>
                    </div>
                    <?= display_errors($errors, 'prenom')?>
                </div>
              
                <!-- Date and time -->
                <div class="form-group">
                  <label>Date de naissance</label>
                    <div class="input-group date" id="reservationdatetime" data-target-input="nearest" >
                        <input type="date" class="form-control" dat name="date_nais" value="<?=get_data($_POST, 'date_nais')?>">
                        <div class="input-group-append" data-target="#reservationdatetime" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fas fa-calendar-alt"></i></div>
              
                        </div>
                    </div>
                    <?= display_errors($errors, 'date_nais')?>
                </div>
                  <!-- telephone -->
                  <div class="form-group">
                  <label>Numero de telephone</label>
                    <div class="input-group date" id="reservationdate" data-target-input="nearest">
                        <input type="tel" class="form-control" name="numtel" value="<?=get_data($_POST, 'numtel')?>">
                        <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fas fa-mobile-alt"></i></div>
                        </div>
                    </div>
                    <?= display_errors($errors, 'numtel')?>
                </div>
                  <!-- profession -->
                  <div class="form-group">
                  <label>Profession</label>
                    <div class="input-group date" id="reservationdate" data-target-input="nearest">
                        <input type="text" class="form-control" data-target="#reservationdate" name="profession" value="<?=get_data($_POST, 'nom')?>"/>
                        <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                            <?= display_errors($errors, 'profession')?>
                        </div>
                    </div>
                </div>
                <!-- email -->
                  <!-- profession -->
                  <div class="form-group">
                  <label>Email</label>
                    <div class="input-group date" id="reservationdate" data-target-input="nearest">
                        <input type="email" class="form-control" data-target="#reservationdate" name="email"/>
                        <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fa fa-envelope"></i></div>
                        </div>
                    </div>
                </div>
                <button class="btn btn-primary" name="submit">Enregistrer</button>
              </div>

                <div class="card-footer">
                  Visit <a href="#"> </a> 
                </div>
              <!-- /.card-body -->
            </div>
</form>
                

<!--           
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group clearfix">
                      <div class="icheck-primary d-inline">
                        <input type="radio" id="radioPrimary1" name="r1" checked>
                        <label for="radioPrimary1">
                        </label>
                      </div>
                      <div class="icheck-primary d-inline">
                        <input type="radio" id="radioPrimary2" name="r1">
                        <label for="radioPrimary2">
                        </label>
                      </div>
                      <div class="icheck-primary d-inline">
                        <label for="radioPrimary3">
                          Primary radio
                        </label>
                      </div>
                    </div>
                  </div>
                </div> -->
               
              
            <!-- /.card -->

        
