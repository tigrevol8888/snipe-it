<?php

return array(
    'ad'				        => 'Usługa katalogowa Active Directory',
    'ad_domain'				    => 'Domena Active Directory',
    'ad_domain_help'			=> 'Czasami jest taka sama jak domena poczty e-mail, ale nie zawsze.',
    'is_ad'				        => 'To jest serwer Active Directory',
	'alert_email'				=> 'Wyślij powiadomienia do',
	'alerts_enabled'			=> 'Alarmy włączone',
	'alert_interval'			=> 'Próg wygasających alarmów (w dniach)',
	'alert_inv_threshold'		=> 'Inwentarz progu alarmów',
	'asset_ids'					=> 'ID Aktywa',
	'auto_increment_assets'		=> 'Generuj automatycznie zwiększane ID aktywa',
	'auto_increment_prefix'		=> 'Prefix (opcjonalnie)',
	'auto_incrementing_help'    => 'Najpierw aktywuj automatycznie zwiększane ID Aktywa, by móc ustawić te opcje.',
	'backups'					=> 'Kopie zapasowe',
	'barcode_settings'			=> 'Ustawienia Kodów Kreskowych',
    'confirm_purge'			    => 'Potwierdź wyczyszczenie',
    'confirm_purge_help'		=> 'Wpisz w poniższe pole słowo "DELETE" aby wyczyścić usunięte rekordy. Tej czynności nie da się cofnąć.',
	'custom_css'				=> 'Własny CSS',
	'custom_css_help'			=> 'Wprowadź własny kod CSS. Nie używaj tagów &lt;style&gt;&lt;/style&gt;.',
	'default_currency'  		=> 'Domyślna Waluta',
	'default_eula_text'			=> 'Domyślna EULA',
  'default_language'					=> 'Domyślny język',
	'default_eula_help_text'	=> 'Możesz również sporządzić własną licencje by sprecyzować kategorie aktywa.',
    'display_asset_name'        => 'Wyświetl nazwę aktywa',
    'display_checkout_date'     => 'Wyświetl Datę Przypisania',
    'display_eol'               => 'Wyświetl koniec linii w widoku tabeli',
    'display_qr'                => 'Wyświetlaj QR kody',
	'display_alt_barcode'		=> 'Wyświetlaj kod kreskowy w 1D',
	'barcode_type'				=> 'Kod kreskowy typu 2D',
	'alt_barcode_type'			=> 'Kod kreskowy typu 1D',
    'eula_settings'				=> 'Ustawienia Licencji',
    'eula_markdown'				=> 'Ta licencja zezwala na <a href="https://help.github.com/articles/github-flavored-markdown/">Github flavored markdown</a>.',
    'general_settings'			=> 'Ustawienia ogólne',
	'generate_backup'			=> 'Stwórz Kopie zapasową',
    'header_color'              => 'Kolor nagłówka',
    'info'                      => 'Te ustawienia pozwalają ci zdefiniować najważniejsze szczegóły twojej instalacji.',
    'laravel'                   => 'Wersja Laravel',
    'ldap_enabled'              => 'LDAP włączone',
    'ldap_integration'          => 'Integracja z LDAP',
    'ldap_settings'             => 'Ustawienia LDAP',
    'ldap_server'               => 'Serwery LDAP',
    'ldap_server_help'          => 'To powinno się rozpocząć od ldap: / / (dla nieszyfrowanych połączeń) lub ldaps: / / (dla szyfrowanych połączeń)',
	'ldap_server_cert'			=> 'Walidacja certyfikatu SSL dla LDAP',
	'ldap_server_cert_ignore'	=> 'Zezwalaj na nieprawidłowy certyfikat SSL',
	'ldap_server_cert_help'		=> 'Zaznacz tą opcje jeśli używasz certyfikatu SSL podpisanego przez samego siebie i chcesz zezwolić na nieprawidłowy certyfikat.',
    'ldap_tls'                  => 'Używaj TLS',
    'ldap_tls_help'             => 'Ta opcja powinna zaznaczony jedynie gdy używasz STARTLS w swoim serwerze LDAP. ',
    'ldap_uname'                => 'Użytkownik do łączenia się z serwerem LDAP',
    'ldap_pword'                => 'Hasło użytkownika wpisanego do łączenia się z serwerem LDAP',
    'ldap_basedn'               => 'DN',
    'ldap_filter'               => 'Filtr LDAP',
    'ldap_pw_sync'              => 'Synchronizacja haseł LDAP',
    'ldap_pw_sync_help'         => 'Odznacz jeśli nie chcesz synchronizować haseł z LDAP z lokalnymi',
    'ldap_username_field'       => 'Pole użytkownika',
    'ldap_lname_field'          => 'Nazwisko',
    'ldap_fname_field'          => 'Imię',
    'ldap_auth_filter_query'    => 'Autoryzacja LDAP',
    'ldap_version'              => 'Wersja LDAP',
    'ldap_active_flag'          => 'Aktywna flaga LDAP',
    'ldap_emp_num'              => 'Nr pracownika LDAP',
    'ldap_email'                => 'E-mail pracownika LDAP',
    'load_remote_text'          => 'Skrypty zdalne',
    'load_remote_help_text'		=> 'Ta instalacja Snipe-IT może załadować skrypty z zewnętrznego świata.',
    'login_note'                => 'Login Note',
    'login_note_help'           => 'Optionally include a few sentences on your login screen, for example to assist people who have found a lost or stolen device. This field accepts <a href="https://help.github.com/articles/github-flavored-markdown/">Github flavored markdown</a>',
    'logo'                    	=> 'Logo',
    'full_multiple_companies_support_help_text' => 'Ograniczenie do użytkowników',
    'full_multiple_companies_support_text' => 'Wsparcie dla wielu firm',
    'optional'					=> 'opcjonalny',
    'per_page'                  => 'Wyników na stronie',
    'php'                       => 'Wersja PHP',
    'php_gd_info'               => 'Aby wyświetlić kody QR wymagana jest instalacja php-gd, sprawdź instrukcję.',
    'php_gd_warning'            => 'PHP Image Processing i GD plugin nie są zainstalowane.',
    'pwd_secure_complexity'     => 'Password Complexity',
    'pwd_secure_complexity_help' => 'Select whichever password complexity rules you wish to enforce.',
    'pwd_secure_min'            => 'Password minimum characters',
    'pwd_secure_min_help'       => 'Minimum permitted value is 5',
    'pwd_secure_uncommon'       => 'Prevent common passwords',
    'pwd_secure_uncommon_help'  => 'This will disallow users from using common passwords from the top 10,000 passwords reported in breaches.',
    'qr_help'                   => 'Aby użyć tej opcji odblokuj Kody QR',
    'qr_text'                   => 'Tekst kodu QR',
    'setting'                   => 'Ustawienie',
    'settings'                  => 'Ustawienia',
    'site_name'                 => 'Nazwa Witryny',
    'slack_botname'             => 'Slack Botname',
    'slack_channel'             => 'Kanał Slack',
    'slack_endpoint'            => 'Slack Endpoint',
    'slack_integration'         => 'Ustawienia Slack',
    'slack_integration_help'    => 'Slack integration is optional, however the endpoint and channel are required if you wish to use it. To configure Slack integration, you must first <a href=":slack_link" target="_new">create an incoming webhook</a> on your Slack account.',
    'snipe_version'  			=> 'Wersja Snipe-IT',
    'system'                    => 'Informacje o Systemie',
    'update'                    => 'Ustawienia Aktualizacji',
    'value'                     => 'Wartość',
    'brand'                     => 'Nagłówek',
    'about_settings_title'      => 'O Ustawieniach',
    'about_settings_text'       => 'Te ustawienia pozwalają ci zmodyfikować najważniejsze szczegóły twojej instalacji.',
    'labels_per_page'           => 'Etykieta per strona',
    'label_dimensions'          => 'rozmiar etykiety',
    'next_auto_tag_base'        => 'Next auto-increment',
    'page_padding'             => 'Margines strony (cale)',
    'purge'                    => 'Wyczyść usunięte rekordy',
    'labels_display_bgutter'    => 'Label bottom gutter',
    'labels_display_sgutter'    => 'Label side gutter',
    'labels_fontsize'           => 'Rozmiar czcionki na etykiecie',
    'labels_pagewidth'          => 'Label sheet width',
    'labels_pageheight'         => 'Label sheet height',
    'label_gutters'        => 'Label spacing (inches)',
    'page_dimensions'        => 'Page dimensions (inches)',
    'label_fields'          => 'Label visible fields',
    'inches'        => 'cale',
    'width_w'        => 'szerokość',
    'height_h'        => 'wysokość',
    'text_pt'        => 'piksel',
    'thumbnail_max_h'   => 'Max thumbnail height',
    'thumbnail_max_h_help'   => 'Maximum height in pixels that thumbnails may display in the listing view. Min 25, max 500.',
    'two_factor'        => 'Autoryzacja dwuskładnikowa',
    'two_factor_secret'        => 'Kod jednorazowy',
    'two_factor_enrollment'        => 'Two-Factor Enrollment',
    'two_factor_enabled_text'        => 'Włącz uwieżytelnianie dwuskładnikowe',
    'two_factor_reset'        => 'Reset Two-Factor Secret',
    'two_factor_reset_help'        => 'This will force the user to enroll their device with Google Authenticator again. This can be useful if their currently enrolled device is lost or stolen. ',
    'two_factor_reset_success'          => 'Two factor device successfully reset',
    'two_factor_reset_error'          => 'Two factor device reset failed',
    'two_factor_enabled_warning'        => 'Enabling two-factor if it is not currently enabled will immediately force you to authenticate with a Google Auth enrolled device. You will have the ability to enroll your device if one is not currently enrolled.',
    'two_factor_enabled_help'        => 'This will turn on two-factor authentication using Google Authenticator.',
    'two_factor_optional'        => 'Wybiórczo (Użytkownicy mogą włączyć lub wyłączyć jeśli posiadają uprawnienie)',
    'two_factor_required'        => 'Wymagane dla wszystkich użytkowników',
    'two_factor_disabled'        => 'Wyłączony',
    'two_factor_enter_code'	=> 'Wprowadź kod jednorazowy',
    'two_factor_config_complete'	=> 'Zatwierdź kod',
    'two_factor_enabled_edit_not_allowed' => 'Your administrator does not permit you to edit this setting.',
    'two_factor_enrollment_text'	=> "Two factor authentication is required, however your device has not been enrolled yet. Open your Google Authenticator app and scan the QR code below to enroll your device. Once you've enrolled your device, enter the code below",
    'require_accept_signature'      => 'Wymagany podpis',
    'require_accept_signature_help_text'      => 'Włączając tę funkcjonalność wymusza się na użytkownikach fizycznego podpisania przyjęcia aktywa.',
    'left'        => 'lewo',
    'right'        => 'prawo',
    'top'        => 'góra',
    'bottom'        => 'dół',
    'vertical'        => 'pionowy',
    'horizontal'        => 'poziomy',
    'zerofill_count'        => 'Length of asset tags, including zerofill',
);
