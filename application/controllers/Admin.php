<?php

/**
 * Our homepage. Show the most recently added quote.
 *
 * controllers/Welcome.php
 *
 * ------------------------------------------------------------------------
 */
class Admin extends Application {

    function __construct()
    {
	parent::__construct();
    }

    //-------------------------------------------------------------
    //  The normal pages
    //-------------------------------------------------------------

    function index()
    {
	$this->data['pagebody'] = 'Quotations Maintenance';    // this is the view we want shown
	$this->data['quotes'] = $this->quotes->all();    // this is the view we want shown
	$this->data['pagebody'] = 'admin_list';    // this is the view we want shown
    $this->render();

    }

}

/* End of file Welcome.php */
/* Location: application/controllers/Welcome.php */
