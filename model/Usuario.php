<?php
	include caminhoFisico . "/orm/SimpleOrm.class.php";
	include caminhoFisico . '/orm/Connection.php';
	SimpleOrm::useConnection($mysqli, 'cms');
	
	class Usuarios extends SimpleOrm {

	}

	// create some validations
	    // User::validates("name", array("presence" => true));
	    // User::validates("email", array("presence" => true));
	    // User::validates("email", array("uniqueness" => true));
	    // User::validates("id", array("numericality" => true));

    // create some relations
	    // User::hasMany("tickets");
    	// User::hasOne("account");
    	// Ticket::belongsTo("user");
?>