<?php

/**
 * The Default Example Controller Class
 *
 * @author Faizan Ayubi, Hemant Mann
 */
use Framework\Controller as Controller;

class Home extends Controller {

	public function __construct($options = array()) {
		parent::__construct($options);
		$this->setLayout("layouts/newtheme");

		// let's leave this to the constructor so that we dont 
		// have to write it again and again
		$layoutView = $this->getLayoutView();
    	$layoutView->set("seo", Framework\Registry::get("seo"));
	}

    public function index() {
    	

    	// so now theme is ready
    	// what we need to do is remove the portion which changes with every page to separate files
    	// like body
    	// but headers and footer and navigation generally remains the same
    	// so let's do that
    }

    // make a method - should be public follow the syntax
    public function contact() {
    	// the whole code goes here

    	// basically u can add variable and access them in a template
    	$view = $this->actionView;

    	$view->set("abhishek", "Hey this a variable after my name");
    }



}
