<?php
    include 'header.php';
?>

<div id="content">

    <div id="user_actions">
        <a href="contacts">Contacts</a><br>
        <a href="newEvent">Créer un nouvel événement</a><br>
        <a href="events">Evènements</a><br>
        <a href="account">Options du compte</a><br>
        <a>Notifications</a><br>
    </div>

    <div id="user_lists">
	    <p>Evenements à venir</p>
	<?php
		//TODO: affichage evenement
		/*use App\Http\Controllers\ControllerConnexion;
		$event = ControllerConnexion::getEventUtil();
		echo $event->first();
		foreach($event as $temp){
			echo $temp;
		}*/
	?>

    </div>

</div>

<?php
    include 'footer.php';
?>