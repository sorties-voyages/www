<?php

	$portugues_brasileiro = array( 
		//Return messages
		'spam_login_filter:access_denied_domain_blacklist' => "Acesso negado devido a problemas com spam (Domínio em lista negra). Contate o administrador do site.",
		'spam_login_filter:access_denied_mail_blacklist' => "Acesso negado devido a problemas com spam (E-Mail em lista negra). Contate o administrador do site.",
		'spam_login_filter:access_denied_ip_blacklist' => "Acesso negado devido a problemas com spam (IP em lista negra). Contate o administrador do site.",
		
		//User menu
		'spam_login_filter:delete_and_report' => "Apagar e denunciar como spammer",
		
		//Report to stopforumspam
		'spam_login_filter:empty_ip_error' => "IP do usuário está em branco.",
		'spam_login_filter:empty_api_key_error' => "API do stopforumspam está em branco.",
		'spam_login_filter:unable_report' => "Erro ao contatar stopforumspam.com.",
		'spam_login_filter:user_deleted' => "Usuário removido.",
		'spam_login_filter:user_not_deleted' => "Erro ao remover usuário.",
		
		//Configuration form						
		'spam_login_filter:use_stopforumspam' => "Usar stopforumspam.com",
		'spam_login_filter:stopforumspam_api_key' => "stopforumspam API Key (Opcional)",

		'spam_login_filter:notify_by_mail' => "Notificar tentativas bloqueadas por e-mail",
		'spam_login_filter:notify_mail_address' => "Endereço de e-mail",
		'spam_login_filter:notify_subject' => "Spammer bloqueado",
		'spam_login_filter:notify_message' => "Um spammer foi bloqueado durante o registro no site.
			
E-Mail: %s.
			
IP: %s.",
			
		'spam_login_filter:use_mail_domain_blacklist' => "Usar lista negra de domínios",
		'spam_login_filter:blacklisted_mail_domains' => "Domínios em lista negra - Um por linha",
		
		'spam_login_filter:use_mail_blacklist' => "Usar lista negra de e-mails",
		'spam_login_filter:blacklisted_mails' => "E-mails em lista negra - Um por linha"
	
	);
	add_translation('pt_br', $portugues_brasileiro); 

?>