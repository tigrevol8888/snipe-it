<?php

return array(
    'ad'				        => 'Active Directory',
    'ad_domain'				    => 'Domain Active Directory',
    'ad_domain_help'			=> 'Hal ini kadang-kadang sama sebagai domain email Anda, tetapi tidak selalu.',
    'is_ad'				        => 'Ini adalah server Active Directory',
	'alert_email'				=> 'Kirim pemberitahuan kepada',
	'alerts_enabled'			=> 'Aktifkan pemberitahuan',
	'alert_interval'			=> 'Ambang batas pemberitahuan kadaluarsa (dalam hari)',
	'alert_inv_threshold'		=> 'Ambang pemberitahuan persediaan',
	'asset_ids'					=> 'Aset id',
	'auto_increment_assets'		=> 'Membuat otomatis pembahan nomor ID aset',
	'auto_increment_prefix'		=> 'Awalan (pilihan)',
	'auto_incrementing_help'    => 'Hidupkan penambahan otomatis terlebih dahulu sebelumnya',
	'backups'					=> 'Cadangan',
	'barcode_settings'			=> 'Pengaturan barcode',
    'confirm_purge'			    => 'Konfirmasi pembersihan',
    'confirm_purge_help'		=> 'Masukan tulisan "DELETE" di kolom bawah untuk membersihkan dokumen anda. Tindakan ini tidak dapat dibatalkan.',
	'custom_css'				=> 'Custom CSS',
	'custom_css_help'			=> 'Masukan modifikasi CSS yang hendak anda gunakan. Jangan sertakan &lt;style&gt;&lt;/style&gt; tags.',
	'default_currency'  		=> 'Mata uang utama',
	'default_eula_text'			=> 'EULA utama',
  'default_language'					=> 'Bahasa utama',
	'default_eula_help_text'	=> 'Anda juga dapat mengaitkan kustom EULAs untuk kategori aset tertentu.',
    'display_asset_name'        => 'Tampilan Nama Aset',
    'display_checkout_date'     => 'Tampilan Tanggal Keluar',
    'display_eol'               => 'Tampilan EOL dalam bentuk tabel',
    'display_qr'                => 'Tampilan kode kotak',
	'display_alt_barcode'		=> 'Tampilan barcode 1D',
	'barcode_type'				=> 'Tipe Barcode 2D',
	'alt_barcode_type'			=> 'Tipe Barcode 1D',
    'eula_settings'				=> 'Konfigurasi EULA',
    'eula_markdown'				=> 'EULA mengijinkan <a href="https://help.github.com/articles/github-flavored-markdown/">Github flavored markdown</a>.',
    'general_settings'			=> 'Konfigurasi umum',
	'generate_backup'			=> 'Membuat cadangan',
    'header_color'              => 'Warna Header',
    'info'                      => 'Dengan pengaturan ini anda dapat merubah aspek tertentu pada instalasi.',
    'laravel'                   => 'Versi Laravel',
    'ldap_enabled'              => 'Aktifkan LDAP',
    'ldap_integration'          => 'Integrasi LDAP',
    'ldap_settings'             => 'Konfigurasi LDAP',
    'ldap_server'               => 'LDAP Server',
    'ldap_server_help'          => 'Ini harus dimulai dengan ldap: / / (untuk tidak terenkripsi atau TLS) atau ldaps: / / (untuk SSL)',
	'ldap_server_cert'			=> 'Validasi sertifikat LDAP SSL',
	'ldap_server_cert_ignore'	=> 'Izinkan sertifikat SSL tak terdaftar',
	'ldap_server_cert_help'		=> 'Pilih kotak ini jika anda menggunakan sertifikat SSL self sign dan menerima sertifikat SSL yang tak terdaftar.',
    'ldap_tls'                  => 'Gunakan TLS',
    'ldap_tls_help'             => 'Ini digunakan jika anda menggunakan STARTTLS di server LDAP anda. ',
    'ldap_uname'                => 'Nama pengguna LDAP',
    'ldap_pword'                => 'Katakunci LDAP',
    'ldap_basedn'               => 'Base Bind DN',
    'ldap_filter'               => 'Saring LDAP',
    'ldap_pw_sync'              => 'Sinkronisasi Password LDAP',
    'ldap_pw_sync_help'         => 'Hapus tanda centang kotak ini jika Anda tidak ingin menyimpan password LDAP disinkronkan dengan password lokal. Menonaktifkan ini berarti bahwa pengguna Anda mungkin tidak bisa login jika server LDAP Anda tidak bisa diakses untuk beberapa alasan.',
    'ldap_username_field'       => 'Kolom nama pengguna',
    'ldap_lname_field'          => 'Nama Belakang',
    'ldap_fname_field'          => 'LDAP Nama Depan',
    'ldap_auth_filter_query'    => 'Permintaan Otentikasi LDAP',
    'ldap_version'              => 'Versi LDAP',
    'ldap_active_flag'          => 'LDAP Active Flag',
    'ldap_emp_num'              => 'Nomor karyawan LDAP',
    'ldap_email'                => 'LDAP Email',
    'load_remote_text'          => 'Kode jarak jauh',
    'load_remote_help_text'		=> 'Snipe-IT dapat menggunakan kode program dari luar.',
    'logo'                    	=> 'Logo',
    'full_multiple_companies_support_help_text' => 'Membatasi pengguna (termasuk admin) diberikan kepada perusahaan untuk aset perusahaan mereka.',
    'full_multiple_companies_support_text' => 'Dukungan penuh beberapa perusahaan',
    'optional'					=> 'pilihan',
    'per_page'                  => 'Hasil per halaman',
    'php'                       => 'Versi PHP',
    'php_gd_info'               => 'Anda harus memasang php-gd untuk menampilkan kode QR, baca petunjuk pemasangan.',
    'php_gd_warning'            => 'Plugin PHP pengolahan citra dan GD tidak diinstal.',
    'qr_help'                   => 'Hidupkan kode QR sebelumnya',
    'qr_text'                   => 'Teks kode QR',
    'setting'                   => 'Pengaturan',
    'settings'                  => 'Pengaturan',
    'site_name'                 => 'Nama Situs',
    'slack_botname'             => 'Slack Botname',
    'slack_channel'             => 'Slack Channel',
    'slack_endpoint'            => 'Slack Endpoint',
    'slack_integration'         => 'Pengaturan Slack',
    'slack_integration_help'    => 'Penggabungan Slack adalah pilihan, namun untuk kanal dan titik akhir wajib jika anda hendak menggunakannya. Untuk konfigurasi penggabungan slack, anda harus <a href=":slack_link" target="_new"> membuat kaitan masuk</a> pada akun slack.',
    'snipe_version'  			=> 'Versi Snipe-IT',
    'system'                    => 'Informasi Sistem',
    'update'                    => 'Pengaturan perbaruan',
    'value'                     => 'Harga',
    'brand'                     => 'Merek',
    'about_settings_title'      => 'Tentang pengaturan',
    'about_settings_text'       => 'Dengan pengaturan ini anda dapat merubah aspek tertentu pada instalasi.',
    'labels_per_page'           => 'Label per halaman',
    'label_dimensions'          => 'Dimensi label (inch)',
    'page_padding'             => 'Marjin halaman (inch)',
    'purge'                    => 'Pembersihan catatan yang telah terhapus',
    'labels_display_bgutter'    => 'Ukuran bawah label',
    'labels_display_sgutter'    => 'Ukuran samping label',
    'labels_fontsize'           => 'Ukuran huruf label',
    'labels_pagewidth'          => 'Lebar halaman label',
    'labels_pageheight'         => 'Tinggi kertas label',
    'label_gutters'        => 'Spasi label (inci)',
    'page_dimensions'        => 'Dimensi halaman (inch)',
    'label_fields'          => 'Field label yang terlihat',
    'inches'        => 'inci',
    'width_w'        => 'l',
    'height_h'        => 't',
    'text_pt'        => 'pt',
    'two_factor'        => 'Two Factor Authentication',
    'two_factor_secret'        => 'Two-Factor Code',
    'two_factor_enrollment'        => 'Two-Factor Enrollment',
    'two_factor_enabled_text'        => 'Enable Two Factor',
    'two_factor_reset'        => 'Reset Two-Factor Secret',
    'two_factor_reset_help'        => 'This will force the user to enroll their device with Google Authenticator again. This can be useful if their currently enrolled device is lost or stolen. ',
    'two_factor_reset_success'          => 'Two factor device successfully reset',
    'two_factor_reset_error'          => 'Two factor device reset failed',
    'two_factor_enabled_warning'        => 'Enabling two-factor if it is not currently enabled will immediately force you to authenticate with a Google Auth enrolled device. You will have the ability to enroll your device if one is not currently enrolled.',
    'two_factor_enabled_help'        => 'This will turn on two-factor authentication using Google Authenticator.',
    'two_factor_optional'        => 'Optional (Users can enable or disable)',
    'two_factor_required'        => 'Required for all users',
    'two_factor_disabled'        => 'Disabled',
    'two_factor_enter_code'	=> 'Enter Two-Factor Code',
    'two_factor_config_complete'	=> 'Submit Code',
    'two_factor_enrollment_text'	=> "Two factor authentication is required, however your device has not been enrolled yet. Open your Google Authenticator app and scan the QR code below to enroll your device. Once you've enrolled your device, enter the code below",
    'left'        => 'kiri',
    'right'        => 'kanan',
    'top'        => 'atas',
    'bottom'        => 'bawah',
    'vertical'        => 'vertikal',
    'horizontal'        => 'horisontal',
    'zerofill_count'        => 'Jarak tag aset, termasuk angka nol',
);
