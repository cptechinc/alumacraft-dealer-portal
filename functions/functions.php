<?php

	function is_string_an_image($str) {
		if (strpos($str, '.png') !== FALSE) {
			return true;
		} else if (strpos($str, '.jpg') !== FALSE) {
			return true;
		} else {
			return false;
		}
	}

	function check_if_user_is_logged_in($session) {
		$valid_login = get_login_status($session);
		if ($valid_login == 'Y') {
			return true;
		} else {
			return false;
		}

	}

	function replace_and_get_whole_url($initial_url, $replaceArr, $replace_value_arr, $destination) {
		$counter = 0;
		for ($i = 0; $i < sizeof($replaceArr); $i++) {
			if ($i == 0) {
				$url = replace_and_get_url($initial_url, $replaceArr[$i], $replace_value_arr[$i], $destination);

			} else {
				$url = replace_and_get_url($url, $replaceArr[$i], $replace_value_arr[$i], $destination);
			}
		}

		return $url;
	}

	function replace_and_get_url($url, $replace, $replace_value, $destination_link) {
		$script_name = get_scriptname($url);
		$url = clean_url($url);
		$urlArray = explode('&', $url);
		$query_string = return_non_empty_arr($urlArray);
		$replaced_query = return_non_empty_arr(replace_in_query_string($query_string, $replace, $replace_value));
		$destination = build_me_url($replaced_query, $destination_link, $script_name);

		return $destination;
	}
		function get_scriptname($url) {
			 if (strpos($url, '.php') !== FALSE) {
				$url = str_replace('.php', '', $url);
				return $url.'.php';
			} else {
				return "index.php";
			}

		}
		function clean_url($url) {
			$url = str_replace('?', '&', $url);
			$urlArr = explode('.php', $url);
			return $urlArr[1];
		}

		function return_non_empty_arr($array) {
			$array_to_return = array();
			foreach ($array as $element) {
				if ($element != '') {
					array_push($array_to_return, $element);
				}
			}
			return $array_to_return;
		}

		function add_to_query_string($query_string, $value_name, $value) {
			if ($value != 'delete-404') {
				array_push($query_string, ($value_name .'='.$value));
			}
			return $query_string;
		}

		function replace_in_query_string($query_string, $replace, $replace_value) {
			$found = false;
			for ($i = 0; $i < sizeof($query_string); $i++) {
				if (strpos($query_string[$i], $replace) !== FALSE) {
					$found = TRUE;
					if ($replace_value == 'delete-404' || $replace_value == 'DELETE-ME') {
							$query_string[$i] = '';

						} else {
							$match = $query_string[$i];
							$matchArr = split('=', $match);
							$matchArr[1] = $replace_value;
							$query_string[$i] = $matchArr[0] . '=' . $matchArr[1];
						}

				}
			}

			if ($found == FALSE) {
				if ($replace_value == 'delete-404' || $replace_value == 'DELETE-ME') {

				} else {
					array_push($query_string, ($replace . '='. $replace_value));
				}
			}

			return $query_string;
		}

		function build_me_url($query_string, $destination_link, $script_name) {
			if ($destination_link != '') {
				$url_to_send = $destination_link;
			} else {
				$url_to_send = $script_name;
			}

			$counter = 0;
			foreach ($query_string as $queryitem) {
				if ($counter == 0) {
					$url_to_send .= '?' . $queryitem;
				} else {
					$url_to_send .= '&' . $queryitem;
				}
				$counter++;
			}
			return $url_to_send;
		}


		function get_order_url($url, $order_by, $ordering_rule, $page_orderby) {
			$url = replace_and_get_url($url, 'orderby', $order_by, '');
			if ($orderBy != $page_orderby) {
				$orderingRule = "ASC";
				$url = replace_and_get_url($url, 'orderpage', 'delete-404', '');
			}
			$url = replace_and_get_url($url, 'ordering-rule', $ordering_rule, '');
		  	echo $url;
		}


	function get_symbols($ordering_by, $match, $page_ordering_by) {
		$symbol = "";
		if ($ordering_by == $match) {
			if($page_ordering_by == "ASC") {
				$symbol = "&#x25B2;";
				$symbol = "<span class='glyphicon glyphicon-arrow-up'></span>";
			} else {
				$symbol = "&#x25BC;";
				$symbol = "<span class='glyphicon glyphicon-arrow-down'></span>";
			}
		}
		return $symbol;
	}

	function get_time($timeString) {
		$partofDay = "";
		$colon = ":";
		$timeAsString = substr($timeString, 0, 2) . $colon . substr($timeString, 2, 2);
		$time = explode($colon, $timeAsString, 2);
		$hour = $time[0];

		$hr = (int)$hour;

		if ($hr == 00) {
			$hr = 12;
			$partofDay = "AM";
		} else if ($hr > 12) {
			$hr = $hr - 12;
			$partofDay = "PM";
		} else {
			$partofDay = "AM";
		}

		$time = strval($hr) . $colon . $time[1].' '.$partofDay;
		return $time;
	}

	function format_money($amt) {
		return number_format($amt, 2, '.', ',');
	}

	function get_track_link($carrier, $tracknbr) {
		if (strpos(strtolower($carrier), 'fed') !== false) {
			$link = "https://www.fedex.com/fedextrack/WTRK/index.html?action=track&trackingnumber=".$tracknbr."&cntry_code=us&fdx=1490";
		} else if (strpos(strtolower($carrier), 'ups') !== false) {
			$link = "http://wwwapps.ups.com/WebTracking/track?track=yes&trackNums=".$tracknbr."&loc=en_us";
		} else if (strpos(strtolower($carrier), 'gro') !== false) {
			$link = "http://wwwapps.ups.com/WebTracking/track?track=yes&trackNums=".$tracknbr."&loc=en_us";
		} else if ((strpos(strtolower($carrier), 'will') !== false)) {
			$link = "#$on";
		}
		return $link;
	}

	global $indef_A_abbrev, $indef_A_y_cons, $indef_A_explicit_an, $indef_A_ordinal_an, $indef_A_ordinal_a;

	$indef_A_abbrev = "(?! FJO | [HLMNS]Y.  | RY[EO] | SQU
			  | ( F[LR]? | [HL] | MN? | N | RH? | S[CHKLMNPTVW]? | X(YL)?) [AEIOU])
				[FHLMNRSX][A-Z]
			";
	$indef_A_y_cons = 'y(b[lor]|cl[ea]|fere|gg|p[ios]|rou|tt)';
	$indef_A_explicit_an = "euler|hour(?!i)|heir|honest|hono";
	$indef_A_ordinal_an = "[aefhilmnorsx]-?th";
	$indef_A_ordinal_a = "[bcdgjkpqtuvwyz]-?th";

	function indefinite_article($input) {
		global $indef_A_abbrev, $indef_A_y_cons, $indef_A_explicit_an, $indef_A_ordinal_an, $indef_A_ordinal_a;
		$word = preg_replace("^\s*(.*)\s*^", "$1", $input);
		if(preg_match("/^[8](\d+)?/", $word)) {
			return "an $word";
		}
		if(preg_match("/^[1][1](\d+)?/", $word) || (preg_match("/^[1][8](\d+)?/", $word))) {
			if(strlen(preg_replace(array("/\s/", "/,/", "/\.(\d+)?/"), '', $word))%3 == 2) {
				return "an $word";
			}
		}
		if(preg_match("/^(".$indef_A_ordinal_a.")/i", $word))       return "a $word";
		if(preg_match("/^(".$indef_A_ordinal_an.")/i", $word))      return "an $word";
		if(preg_match("/^(".$indef_A_explicit_an.")/i", $word))         return "an $word";
		if(preg_match("/^[aefhilmnorsx]$/i", $word))        return "an $word";
		if(preg_match("/^[bcdgjkpqtuvwyz]$/i", $word))      return "a $word";
		if(preg_match("/^(".$indef_A_abbrev.")/x", $word))          return "an $word";
		if(preg_match("/^[aefhilmnorsx][.-]/i", $word))         return "an $word";
		if(preg_match("/^[a-z][.-]/i", $word))          return "a $word";
		if(preg_match("/^[^aeiouy]/i", $word))                  return "a $word";
		if(preg_match("/^e[uw]/i", $word))                      return "a $word";
		if(preg_match("/^onc?e\b/i", $word))                    return "a $word";
		if(preg_match("/^uni([^nmd]|mo)/i", $word))     return "a $word";
		if(preg_match("/^ut[th]/i", $word))                     return "an $word";
		if(preg_match("/^u[bcfhjkqrst][aeiou]/i", $word))   return "a $word";
		if(preg_match("/^U[NK][AIEO]?/", $word))                return "a $word";
		if(preg_match("/^[aeiou]/i", $word))            return "an $word";
		if(preg_match("/^(".$indef_A_y_cons.")/i", $word))  return "an $word";
		return "a $word";
	}

	function send_server_request($url, $fields) {
		$curl = curl_init();

		// Set the options
		curl_setopt($curl,CURLOPT_URL, $url);
		curl_setopt($curl,CURLOPT_FOLLOWLOCATION,TRUE);
		curl_setopt($curl,CURLOPT_RETURNTRANSFER,true);

		curl_setopt($curl, CURLINFO_HEADER_OUT, true);

		if (sizeof($fields) > 0) {
			// This sets the number of fields to post
			curl_setopt($curl,CURLOPT_POST, sizeof($fields));

			// This is the fields to post in the form of an array.
			curl_setopt($curl,CURLOPT_POSTFIELDS, http_build_query($fields));
		}

		//execute the post
		$result = curl_exec($curl);

		//close the connection
		curl_close($curl);
		return $result;
	}

	function send_arrowhead_registration($registration) {
		$curl = curl_init();
		$url = "https://apfco.net/apfquality/W1615/api/AccountApi/RegisterBoatPurchase";
		// Set the options
		curl_setopt($curl,CURLOPT_URL, $url);
		curl_setopt($curl,CURLOPT_FOLLOWLOCATION,TRUE);
		curl_setopt($curl,CURLOPT_RETURNTRANSFER,true);
		curl_setopt($curl, CURLINFO_HEADER_OUT, true);

		//curl_setopt($curl, CURLOPT_POST, 1);
		curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
		// This is the fields to post in the form of an array.
		$payload = json_encode($registration);

		curl_setopt($curl,CURLOPT_POSTFIELDS, $payload);
		curl_setopt( $curl, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));

		//execute the post
		$result = curl_exec($curl);
		$information = curl_getinfo($curl);
		if ($information['http_code'] == '404') {
			$results = json_decode($result, true);
			$result = json_encode(array('errorOccurred' => true, 'resultMessage' => 'Alumacraft: '.$results['Message']));
		}
		curl_close($curl);
		return $result;


	}

	function validate_email($email) {
		$regex = '/^(?!(?:(?:\\x22?\\x5C[\\x00-\\x7E]\\x22?)|(?:\\x22?[^\\x5C\\x22]\\x22?)){255,})(?!(?:(?:\\x22?\\x5C[\\x00-\\x7E]\\x22?)|(?:\\x22?[^\\x5C\\x22]\\x22?)){65,}@)(?:(?:[\\x21\\x23-\\x27\\x2A\\x2B\\x2D\\x2F-\\x39\\x3D\\x3F\\x5E-\\x7E]+)|(?:\\x22(?:[\\x01-\\x08\\x0B\\x0C\\x0E-\\x1F\\x21\\x23-\\x5B\\x5D-\\x7F]|(?:\\x5C[\\x00-\\x7F]))*\\x22))(?:\\.(?:(?:[\\x21\\x23-\\x27\\x2A\\x2B\\x2D\\x2F-\\x39\\x3D\\x3F\\x5E-\\x7E]+)|(?:\\x22(?:[\\x01-\\x08\\x0B\\x0C\\x0E-\\x1F\\x21\\x23-\\x5B\\x5D-\\x7F]|(?:\\x5C[\\x00-\\x7F]))*\\x22)))*@(?:(?:(?!.*[^.]{64,})(?:(?:(?:xn--)?[a-z0-9]+(?:-+[a-z0-9]+)*\\.){1,126}){1,}(?:(?:[a-z][a-z0-9]*)|(?:(?:xn--)[a-z0-9]+))(?:-+[a-z0-9]+)*)|(?:\\[(?:(?:IPv6:(?:(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){7})|(?:(?!(?:.*[a-f0-9][:\\]]){7,})(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,5})?::(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,5})?)))|(?:(?:IPv6:(?:(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){5}:)|(?:(?!(?:.*[a-f0-9]:){5,})(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,3})?::(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,3}:)?)))?(?:(?:25[0-5])|(?:2[0-4][0-9])|(?:1[0-9]{2})|(?:[1-9]?[0-9]))(?:\\.(?:(?:25[0-5])|(?:2[0-4][0-9])|(?:1[0-9]{2})|(?:[1-9]?[0-9]))){3}))\\]))$/iD';

		return preg_match($regex, $email);
	}

	 function returnsqlquery($sql, $oldtonew, $havequotes) {
		$i = 0;
		foreach ($oldtonew as $old => $new) {
			if ($havequotes[$i]) {
				$sql = str_replace($old, "'".$new."'", $sql);
			} else {
				$sql = str_replace($old, $new, $sql);
			}
			$i++;
		}
		return $sql;
	}


	function email_declined_approval($to, $from, $reason, $ordn, $login_name) {
		$subject = "Order # " . $ordn . " was not approved";
		$message = $login_name . " declined to approve order #" . $ordn . "<br><br> The reason given: <br><br>";
		$message .= $reason;
		$headers  = 'MIME-Version: 1.0' . "\r\n" . 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$headers .= 'From: '.$from. "\r\n" . 'Reply-To: '. $from . "\r\n" . 'X-Mailer: PHP/' . phpversion();
		mail($to, $subject, $message, $headers);
	}




?>
