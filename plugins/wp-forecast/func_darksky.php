<?php
/* This file is part of the wp-forecast plugin for wordpress */

/*  Copyright 2019  Hans Matzen  (email : webmaster at tuxlog dot de)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
*/
if (!function_exists('darksky_get_data')) {
	
	function darksky_get_data($apikey, $lat, $lon) {
		// check parms
		if ( trim($apikey) == "" or trim($lat) == "" or trim($lon)=="" ) return array();
		$url1 = 'https://api.darksky.net/forecast/' . $apikey . '/' . $lat . ',' . $lon . '/?exclude=minutely,hourly';
		$url1 .= '&units=si&lang=de';
		
		// Open the file and decode it 
		$file1 = file_get_contents($url1, false);//, $context);	
		$data  = json_decode($file1, true);
		
		print_r($data);
		// add forecast data to array
		//
		//$data['result']['forecast'] = $data2['result'];
		
		// add copyright notice
		//$data['result']['copyright'] = "UV Data is delivered by openuv.io";
		
		return $data['result'];
	}

darksky_get_data('85eb5c66c1f803b85a6d2e134515748f','37.8267','-122.4233');
}


