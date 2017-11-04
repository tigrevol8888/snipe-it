<?php

return array(
    'ad'				        => 'Director activ',
    'ad_domain'				    => 'Domeniu Active Directory',
    'ad_domain_help'			=> 'Acest lucru este uneori același cu domeniul dvs. de e-mail, dar nu întotdeauna.',
    'is_ad'				        => 'Acesta este un server Active Directory',
	'alert_email'				=> 'Trimite alerte catre',
	'alerts_enabled'			=> 'Alerte activată',
	'alert_interval'			=> 'Termenul de expirare a alertelor (în zile)',
	'alert_inv_threshold'		=> 'Ajustarea pragului de inventar',
	'asset_ids'					=> 'ID-uri de active',
	'audit_interval'            => 'Interval de audit',
    'audit_interval_help'       => 'Dacă vi se cere să efectuați un audit fizic în mod regulat, introduceți intervalul în luni.',
	'audit_warning_days'        => 'Prag de avertizare privind auditul',
    'audit_warning_days_help'   => 'Câte zile în avans trebuie să vă avertizăm când activele sunt scadente pentru audit?',
	'auto_increment_assets'		=> 'Genereaza ID-uri crescatoare de active',
	'auto_increment_prefix'		=> 'Prefix (optional)',
	'auto_incrementing_help'    => 'Activați inițial ID-urile de avertizare automată pentru a seta acest lucru',
	'backups'					=> 'Copiile de rezervă',
	'barcode_settings'			=> 'Setări cod de bare',
    'confirm_purge'			    => 'Confirmați purjarea',
    'confirm_purge_help'		=> 'Introduceți textul "DELETE" în caseta de mai jos pentru a elimina înregistrările șterse. Această acțiune nu poate fi anulată.',
	'custom_css'				=> 'CSS personalizat',
	'custom_css_help'			=> 'Introduceți orice suprascrieri personalizate CSS pe care doriți să le utilizați. Nu includeți etichetele &lt;style&gt;&lt;/style&gt;.',
    'custom_forgot_pass_url'	=> 'Custom Password Reset URL',
    'custom_forgot_pass_url_help'	=> 'This replaces the built-in forgotten password URL on the login screen, useful to direct people to internal or hosted LDAP password reset functionality. It will effectively disable local user forgotten password functionality.',
	'default_currency'  		=> 'Moneda implicita',
	'default_eula_text'			=> 'EULA implicita',
  'default_language'					=> 'Limba implicita',
	'default_eula_help_text'	=> 'De asemenea, puteți asocia clauze personalizate personalizate cu anumite categorii de active.',
    'display_asset_name'        => 'Afiseaza nume activ',
    'display_checkout_date'     => 'Arata data predare',
    'display_eol'               => 'Arata EOL in tabel',
    'display_qr'                => 'Afișați codurile pătrată',
	'display_alt_barcode'		=> 'Afișați coduri de bare 1D',
	'barcode_type'				=> 'Tip de cod de bare 2D',
	'alt_barcode_type'			=> 'Tip de cod de bare 1D',
    'eula_settings'				=> 'Setările EULA',
    'eula_markdown'				=> 'Această licență EULA permite <a href="https://help.github.com/articles/github-flavored-markdown/">Github aromdown markdown</a>.',
    'general_settings'			=> 'setari generale',
	'generate_backup'			=> 'Generați Backup',
    'header_color'              => 'Culoarea antetului',
    'info'                      => 'Aceste setari va lasa sa modificati anumite aspecte ale instalarii.',
    'laravel'                   => 'Versiune Laravel',
    'ldap_enabled'              => 'LDAP activat',
    'ldap_integration'          => 'Integrarea LDAP',
    'ldap_settings'             => 'Setări LDAP',
    'ldap_login_test_help'      => 'Enter a valid LDAP username and password from the base DN you specified above to test whether your LDAP login is configured correctly. YOU MUST SAVE YOUR UPDATED LDAP SETTINGS FIRST.',
    'ldap_login_sync_help'      => 'This only tests that LDAP can sync correctly. If your LDAP Authentication query is not correct, users may still not be able to login. YOU MUST SAVE YOUR UPDATED LDAP SETTINGS FIRST.',
    'ldap_server'               => 'LDAP Server',
    'ldap_server_help'          => 'Acest lucru ar trebui să înceapă cu ldap: // (pentru TCP sau TLS) sau ldaps: // (pentru SSL)',
	'ldap_server_cert'			=> 'Validarea certificatelor SSL pentru LDAP',
	'ldap_server_cert_ignore'	=> 'Permiteți certificatul SSL nevalid',
	'ldap_server_cert_help'		=> 'Bifați această casetă de selectare dacă utilizați un certificat SSL auto-semnat și doriți să acceptați un certificat SSL nevalid.',
    'ldap_tls'                  => 'Utilizați TLS',
    'ldap_tls_help'             => 'Acest lucru trebuie verificat numai dacă executați STARTTLS pe ​​serverul LDAP.',
    'ldap_uname'                => 'LDAP Bind Username',
    'ldap_pword'                => 'Parola de legare LDAP',
    'ldap_basedn'               => 'Base Bind DN',
    'ldap_filter'               => 'Filtrul LDAP',
    'ldap_pw_sync'              => 'Sincronizare parolă LDAP',
    'ldap_pw_sync_help'         => 'Debifați această casetă dacă nu doriți să păstrați parolele LDAP sincronizate cu parolele locale. Dacă dezactivați acest lucru, este posibil ca utilizatorii dvs. să nu poată să se conecteze dacă serverul dvs. LDAP nu este accesibil din anumite motive.',
    'ldap_username_field'       => 'Nume câmp',
    'ldap_lname_field'          => 'Numele de familie',
    'ldap_fname_field'          => 'Numele LDAP',
    'ldap_auth_filter_query'    => 'Solicitare de autentificare LDAP',
    'ldap_version'              => 'Versiunea LDAP',
    'ldap_active_flag'          => 'LDAP Active Flag',
    'ldap_emp_num'              => 'Numărul angajatului LDAP',
    'ldap_email'                => 'LDAP e-mail',
    'load_remote_text'          => 'Scripturi de la distanță',
    'load_remote_help_text'		=> 'Această instalare Snipe-IT poate încărca scripturi din lumea exterioară.',
    'login_note'                => 'Conectați-vă Notă',
    'login_note_help'           => 'Opțional includeți câteva propoziții în ecranul de conectare, de exemplu, pentru a ajuta persoanele care au găsit un dispozitiv pierdut sau furat. Acest câmp acceptă markdown <a href="https://help.github.com/articles/github-flavored-markdown/">Github aromdown</a>',
    'logo'                    	=> 'Siglă',
    'full_multiple_companies_support_help_text' => 'Restricționarea utilizatorilor (inclusiv a administratorilor) atribuite companiilor activelor companiei lor.',
    'full_multiple_companies_support_text' => 'Suport complet pentru multiple companii',
    'optional'					=> 'facultativ',
    'per_page'                  => 'Rezultate pe pagina',
    'php'                       => 'Versiune PHP',
    'php_gd_info'               => 'Trebuie sa instalati php-gd ca sa afisati coduri QR, verificati instructiunile de instalare.',
    'php_gd_warning'            => 'PHP Image Processing si GD plugin NU sunt instalate.',
    'pwd_secure_complexity'     => 'Complexitatea parolei',
    'pwd_secure_complexity_help' => 'Selectați oricare dintre regulile de complexitate a parolei pe care doriți să le impuneți.',
    'pwd_secure_min'            => 'Caractere minime de caractere',
    'pwd_secure_min_help'       => 'Valoarea minimă admisă este de 5',
    'pwd_secure_uncommon'       => 'Împiedicați parolele comune',
    'pwd_secure_uncommon_help'  => 'Acest lucru va interzice utilizatorilor să folosească parole comune din primele 10.000 de parole raportate în încălcare.',
    'qr_help'                   => 'Activeaza codurile QR inainte sa setati asta',
    'qr_text'                   => 'Text cod QR',
    'setting'                   => 'Setare',
    'settings'                  => 'Setari',
    'site_name'                 => 'Nume site',
    'slack_botname'             => 'Slack Botname',
    'slack_channel'             => 'Slack Channel',
    'slack_endpoint'            => 'Slack Endpoint',
    'slack_integration'         => 'Slack Settings',
    'slack_integration_help'    => 'Slack integration este opțională, totuși punctul final și canalul sunt necesare dacă doriți să îl utilizați. Pentru a configura integrarea Slack, mai întâi trebuie să creați <a href=":slack_link" target="_new">create un webhook</a> de pe contul dvs. Slack.',
    'snipe_version'  			=> 'Snipe-IT versiune',
    'system'                    => 'Informatii sistem',
    'update'                    => 'Actualizeaza setari',
    'value'                     => 'Valoare',
    'brand'                     => 'Branding',
    'about_settings_title'      => 'Despre Setări',
    'about_settings_text'       => 'Aceste setări vă permit să personalizați anumite aspecte ale instalării.',
    'labels_per_page'           => 'Etichete pe pagină',
    'label_dimensions'          => 'Dimensiunile etichetelor (inci)',
    'next_auto_tag_base'        => 'Următoarea creștere automată',
    'page_padding'             => 'Marjele paginii (inci)',
    'purge'                    => 'Eliminați înregistrările șterse',
    'labels_display_bgutter'    => 'Etichetați jgheabul de jos',
    'labels_display_sgutter'    => 'Eticheta jgheab',
    'labels_fontsize'           => 'Dimensiunea fontului etichetei',
    'labels_pagewidth'          => 'Etichetă lățime foaie',
    'labels_pageheight'         => 'Înălțimea foii de etichete',
    'label_gutters'        => 'Intervalele etichetelor (inci)',
    'page_dimensions'        => 'Dimensiunile paginii (inci)',
    'label_fields'          => 'Etichetați câmpurile vizibile',
    'inches'        => 'inch',
    'width_w'        => 'w',
    'height_h'        => 'h',
    'show_url_in_emails'                => 'Link către Snipe-IT în e-mailuri',
    'show_url_in_emails_help_text'      => 'Debifați această casetă dacă nu doriți să vă conectați la instalarea dvs. Snipe-IT în subsolul dvs. de e-mail. Utile dacă majoritatea utilizatorilor dvs. nu se înregistrează niciodată.',
    'text_pt'        => 'pt',
    'thumbnail_max_h'   => 'Max înălțime miniatură',
    'thumbnail_max_h_help'   => 'Înălțimea maximă în pixeli pe care miniaturile ar putea să o afișeze în vizualizarea înregistrării. Min 25, max 500.',
    'two_factor'        => 'Două autentificare cu factori',
    'two_factor_secret'        => 'Codul cu doi factori',
    'two_factor_enrollment'        => 'Înscrierea în doi factori',
    'two_factor_enabled_text'        => 'Activați doi factori',
    'two_factor_reset'        => 'Resetați secretul cu două factori',
    'two_factor_reset_help'        => 'Acest lucru va obliga utilizatorul să-și înregistreze din nou dispozitivul cu Google Authenticator. Acest lucru poate fi util dacă dispozitivul înmatriculat în prezent este pierdut sau furat.',
    'two_factor_reset_success'          => 'Aparatul cu două factori se resetează',
    'two_factor_reset_error'          => 'Restabilirea dispozitivului cu două factori a eșuat',
    'two_factor_enabled_warning'        => 'Dacă activați două factori dacă nu este activat în prezent, vă forțați imediat să vă autentificați cu un dispozitiv Google Auth înscris. Veți avea capacitatea de a vă înregistra dispozitivul dacă nu sunteți înscris în prezent.',
    'two_factor_enabled_help'        => 'Aceasta va activa autentificarea cu doi factori utilizând Google Authenticator.',
    'two_factor_optional'        => 'Selectiv (Utilizatorii pot activa sau dezactiva dacă este permis)',
    'two_factor_required'        => 'Obligatoriu pentru toți utilizatorii',
    'two_factor_disabled'        => 'invalid',
    'two_factor_enter_code'	=> 'Introduceți codul cu doi factori',
    'two_factor_config_complete'	=> 'Trimiteți codul',
    'two_factor_enabled_edit_not_allowed' => 'Administratorul nu vă permite să editați această setare.',
    'two_factor_enrollment_text'	=> "Este necesară autentificarea cu două factori, cu toate acestea, dispozitivul dvs. nu a fost încă înscris. Deschideți aplicația Google Authenticator și scanați codul QR de mai jos pentru a vă înregistra dispozitivul. După ce ați înscris dispozitivul, introduceți codul de mai jos",
    'require_accept_signature'      => 'Solicită semnătura',
    'require_accept_signature_help_text'      => 'Activarea acestei funcții va impune utilizatorilor să se deconecteze fizic la acceptarea unui activ.',
    'left'        => 'stânga',
    'right'        => 'dreapta',
    'top'        => 'top',
    'bottom'        => 'fund',
    'vertical'        => 'vertical',
    'horizontal'        => 'orizontală',
    'zerofill_count'        => 'Lungimea etichetelor de activ, inclusiv zerofill',
);
