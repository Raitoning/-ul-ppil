                <?php
                    include 'header.php'

                ?>

                <div class="col-2">
                    <!-- TODO: Mettre lien retour -->
                    <input type="button" class="btn btn-primary" onclick="location.href='/events'" value="Retour" />
                </div>

                <div class="d-flex justify-content-center align-items-center container">

                    <div class="col-10">

                        <div class="card mb-3">

                            <div class="card-header">

                                <h1>Détails de la tâche</h1>
                            </div>

                            <div class="card-body">

                                <label>Nom de la tâche: </label>

                                <?php
                                    //affichage du nom de la tâche
                                     use App\Http\Controllers\ControllerEvenement;
                                    use App\Http\Controllers\ControllerParticipants;
                                    use App\Http\Controllers\ControllerTache;
                                    $tacheNom = ControllerTache::getTaskNom($tache_id);
                                    $tacheDesc = ControllerTache::getTaskDesc($tache_id);
                                    $tacheQuantite= ControllerTache::getTaskQuantite($tache_id);


                                  //  foreach($tasks as $task){
                                      echo $tacheNom;
                                    //}
                                ?>

                                <div id="Desc">

                                    <label>Descriptif de la tâche:
                                        <br>
                                    </label>

                                    <?php
                                        //affichage descriptif de la tâche
                                      echo $tacheDesc;
                                    ?>
                                </div>

                                <div id="quantity">

                                    <label>Quantité:
                                        <?php  echo $tacheQuantite ;?>
                                    </label>

                                </div>

                                <div id="participants">

                                    <label>Participants:
                                        <br>
                                    </label>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <?php
                    include 'footer.php'
                ?>
