<?php namespace Calendar\Http\Controllers;

use Calendar\Http\Requests;
use Calendar\Http\Controllers\Controller;

use Illuminate\Http\Request;

class CalendarController extends Controller {

        public function index()
        {
            return view('calendar.index');
        }
	
}
