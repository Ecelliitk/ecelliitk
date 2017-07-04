<?php

function format_email($info, $format){

	//set the root
	$root = $_SERVER['DOCUMENT_ROOT'].'esummit/wp-content/themes/imevent/assets/js/templates';
	//grab the template content
	$template = file_get_contents($root.'/signup_template.'.$format);
			
	//replace all the tags
	$template = ereg_replace('{NAME}', $info['name'], $template);
	// $template = ereg_replace('{EMAIL}', $info['email'], $template);
	// $template = ereg_replace('{COLLEGE}',$info['college'], $template);
	// $template = ereg_replace('{PHONE}',$info['phone'], $template);
	// $template = ereg_replace('{TEAM}',$info['team'], $template);
		
	//return the html of the template
	return $template;

}

//send the welcome letter
function send_email($info){
		
	//format each email
	$body = format_email($info,'html');
	$body_plain_txt = format_email($info,'txt');

	//setup the mailer
	$transport = Swift_MailTransport::newInstance();
	$mailer = Swift_Mailer::newInstance($transport);
	$message = Swift_Message::newInstance();
	$headers = $message->getHeaders();
	$headers->addTextHeader('MIME-Version:', '1.0');
	$headers->addTextHeader('Content-type:', 'text/plain; charset=iso-8859-1\n');
	$headers->addTextHeader('Message-ID:', "<".time()." TheSystem@".$_SERVER['SERVER_NAME'].">");
	$headers->addTextHeader('X-Mailer:', "PHP v".phpversion());
	$message ->setSubject('Registration for E-Summmit 2015');
	$message ->setFrom(array('noreply@ecelliitk.com' => 'E-Cell IITK,E-Summit'));
	$message ->setTo(array($info['email'] => $info['name']));
	$message ->setBody($body_plain_txt);
	$message ->addPart($body, 'text/html');
	$result = $mailer->send($message);
	
	return $result;
	
}

//cleanup the errors
function show_errors($action){

	$error = false;

	if(!empty($action['result'])){
	
		$error = "<ul class=\"alert $action[result]\">"."\n";

		if(is_array($action['text'])){
	
			//loop out each error
			foreach($action['text'] as $text){
			
				$error .= "<li><p>$text</p></li>"."\n";
			
			}	
		
		}else{
		
			//single error
			$error .= "<li><p>$action[text]</p></li>";
		
		}
		
		$error .= "</ul>"."\n";
		
	}

	return $error;

}
?>