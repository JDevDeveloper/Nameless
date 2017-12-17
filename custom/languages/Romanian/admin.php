<?php
/*
 *  Made by Samerton
 *  https://github.com/NamelessMC/Nameless/
 *  NamelessMC version 2.0.0-pr3
 *
 *  License: MIT
 *
 *  Romanian Language - Admin
 *  Translation By @BaxAndrei ( https://baxandrei.ro )
 *  Last Update: 18/11/2017
 */

$language = array(
    /*
     *  Admin Control Panel
     */
    // Login
    're-authenticate' => 'Vă rugăm să vă re-autentificati',

    // Sidebar
    'admin_cp' => 'Panou Administrare',
    'administration' => 'Administrare',
    'overview' => 'Prezentare generală',
    'core' => 'Bază',
    'minecraft' => 'Minecraft',
    'modules' => 'Module',
    'security' => 'Securitate',
    'styles' => 'Stiluri',
    'users_and_groups' => 'Utilizatori și grupuri',
    'query_interval' => 'Intervalul interogării (în minute, trebuie să fie între 5 și 60)',
    'player_graphs' => 'Grafice ale jucătorilor',
    'player_count_cronjob_info' => 'Puteți configura un "cron job" pentru a interoga serverele dvs. la fiecare {x} minute cu următoarea comandă:',

    // Overview
    'running_nameless_version' => 'Rulează versiunea <strong>{x}</strong> a NamelessMC', // Don't replace "{x}"
    'running_php_version' => 'Rulează cu versiunea PHP <strong>{x}</strong>', // Don't replace "{x}"
    'statistics' => 'Statistici',
    'notices' => 'Alerte',
    'no_notices' => 'Momentan nu există alerte.',
    'email_errors_logged' => 'Au fost înregistrate erori de e-mail. Click <a href="{x}">aici</a> pentru a le vizualiza.', // Don't replace "{x}"

    // Core
    'settings' => 'Setări',
    'general_settings' => 'Setări generale',
    'sitename' => 'Nume site',
    'default_language' => 'Limbă implicită',
    'default_language_help' => 'Utilizatorii vor putea alege din limbile instalate.',
    'installed_languages' => 'Toate limbile noi au fost instalate cu succes.',
    'default_timezone' => 'Fusul orar prestabilit',
    'registration' => 'Înregistrare',
    'enable_registration' => 'Activați înregistrarea?',
    'verify_with_mcassoc' => 'Verificați conturile de utilizator cu MCAssoc?',
    'email_verification' => 'Activați verificarea prin e-mail?',
    'homepage_type' => 'Tipul paginii principale',
    'post_formatting_type' => 'Tip de formatare textarea',
    'portal' => 'Portal',
    'missing_sitename' => 'PIntroduceți un nume de site între 2 și 64 de caractere.',
    'use_friendly_urls' => 'SEO URL',
    'use_friendly_urls_help' => 'IMPORTANT: Serverul dvs. trebuie să fie configurat pentru a permite utilizarea fișierelor mod_rewrite și .htaccess pentru a funcționa.',
    'config_not_writable' => 'Fisierul <strong>core/config.php</strong> nu are permisiunea de scriere. Vă rugăm să verificați permisiunile.',
    'social_media' => 'Social Media',
    'youtube_url' => 'Adresă Youtube',
    'twitter_url' => 'Adresă Twitter',
    'twitter_dark_theme' => 'Utilizați tema închisă Twitter?',
	'discord_id' => 'ID Server Discord',
    'google_plus_url' => 'Adresă Google Plus',
    'facebook_url' => 'Adresă Facebook',
    'successfully_updated' => 'Actualizat cu succes',
    'debugging_and_maintenance' => 'Depanare și întreținere',
    'enable_debug_mode' => 'Activați modul de depanare?',
    'force_https' => 'Forțează https?',
    'force_https_help' => 'Dacă este activată setarea, toate solicitările către site-ul dvs. vor fi redirecționate către https de la http. Trebuie să aveți un certificat SSL valabil activ pentru ca aceasta să funcționeze corect.',
    'contact_email_address' => 'Adresa e-mail de contact',
    'emails' => 'E-mailuri',
    'email_errors' => 'Erori ale e-mailului',
    'registration_email' => 'E-mail de înregistre',
    'contact_email' => 'E-mail de contact',
    'forgot_password_email' => 'E-mail de resetare parolă',
    'unknown' => 'Necunoscut',
    'delete_email_error' => 'Ștergeți eroarea',
    'confirm_email_error_deletion' => 'Sigur doriți să ștergeți această eroare?',
    'viewing_email_error' => 'Vizualizare eroare',
    'unable_to_write_email_config' => 'Imposibil de scris în fișierul <strong>core/email.php</core>. Verificați permisiunile fișierelor.',
    'enable_mailer' => 'Activati PHPMailer?',
    'enable_mailer_help' => 'Activați această opțiune dacă e-mailurile nu sunt trimise în mod implicit. Utilizarea programului PHPMailer necesită un serviciu care să poată trimite e-mailuri, cum ar fi Gmail sau un furnizor SMTP.',
    'outgoing_email' => 'Adresa e-mail afisata la iesire',
    'outgoing_email_info' => 'Aceasta este adresa de e-mail pe care NumelessMC o va utiliza pentru a trimite e-mailuri si care se va afișa utilizatorilor.',
    'mailer_settings_info' => 'Următoarele câmpuri sunt necesare dacă ați activat PHPMailer. Pentru mai multe informații despre completarea acestor câmpuri, consultați <a href="https://github.com/NamelessMC/Nameless/wiki/Setting-up-Gmail-or-SMTP-with-Nameless" target="_blank">wiki-ul</a>.',
    'host' => 'Gazdă',
    'email_port' => 'Port',
    'email_password_hidden' => 'Parola nu este afișată din motive de securitate.',
    'send_test_email' => 'Trimiteți e-mail de încercare (test)',
    'send_test_email_info' => 'Următorul buton va încerca să trimită un e-mail la adresa dvs. de e-mail, <strong>{x}</strong>. Orice erori întâmpinate în timp ce trimiteți e-mailul vor fi afișate.', // Don't replace {x}
    'send' => 'Trimite',
    'test_email_error' => 'Eroare e-mail de test:',
    'test_email_success' => 'Email-ul de test a fost trimis cu succes!',
    'terms_error' => 'Asigurați-vă că termenii și condițiile dvs. nu depășesc 2048 de caractere.',
    'terms_updated' => 'Termenii și condițiile s-au actualizat cu succes.',
    'avatars' => 'Avatare',
    'allow_custom_avatars' => 'Permiteți utilizatorului să utilizeze avatare personalizate?',
    'default_avatar' => 'Avatar implicit',
    'custom_avatar' => 'Avatar personalizat',
    'minecraft_avatar' => 'Avatar Minecraft',
    'minecraft_avatar_source' => 'Sursă avatar Minecraft',
    'built_in_avatars' => 'Serviciu încorporat',
    'minecraft_avatar_perspective' => 'Avatar Minecraft în perspectivă',
    'face' => 'Față',
    'head' => 'Cap',
    'select_default_avatar' => 'Selectați un nou avatar implicit:',
    'no_avatars_available' => 'Nu există avatare disponibile. Vă rugăm să încărcați mai întâi o imagine nouă.',
    'avatar_settings_updated_successfully' => 'Setările avatarelor s-au actualizat cu succes.',
    'navigation' => 'Navigare',
    'navbar_order' => 'Ordonare navigare',
    'navbar_order_instructions' => 'Puteți da fiecărui articol un număr mai mare de 0 pentru a ordona elemente în bara de navigare, cu 1 fiind primul element și numerele mai mari care vin după el.',
    'enable_page_load_timer' => 'Activați cronometrarea încărcării paginii?',
    'google_recaptcha' => 'Activați Google reCAPTCHA?',
    'recaptcha_site_key' => 'reCAPTCHA Site Key',
    'recaptcha_secret_key' => 'reCAPTCHA Secret Key',
    'registration_disabled_message' => 'Mesaj afișat când înregistrarea este dezactivată',

    // Reactions
    'icon' => 'Iconiță',
    'type' => 'Tip',
    'positive' => 'Pozitiv',
    'neutral' => 'Neutru',
    'negative' => 'Negativ',
    'editing_reaction' => 'Modificați reacția',
    'html' => 'HTML iconiță',
    'new_reaction' => '<i class="fa fa-plus-circle"></i> Reacție nouă',
    'creating_reaction' => 'Adaugă reacție',

    // Custom profile fields
    'custom_fields' => 'Câmpuri personalizate pentru profil',
    'new_field' => '<i class="fa fa-plus-circle"></i> Adăugați un câmp nou',
    'required' => 'Necesar',
    'public' => 'Public',
    'text' => 'Text',
    'textarea' => 'Zona Text',
    'date' => 'Dată',
    'creating_profile_field' => 'Adaugă câmp personalizat pentru profil',
    'editing_profile_field' => 'Editare câmp personalizat pentru profil',
    'field_name' => 'Nume câmp',
    'profile_field_required_help' => 'Câmpurile obligatorii trebuie completate de utilizator și vor apărea în timpul înregistrării.',
    'profile_field_public_help' => 'PCâmpurile publice vor fi afișate tuturor utilizatorilor, dar dacă acest lucru este dezactivat, numai moderatorii pot vizualiza valorile.',
    'profile_field_error' => 'Introduceți un nume de câmp între 2 și 16 caractere.',
    'description' => 'Descriere',
    'display_field_on_forum' => 'Afișați câmpul pe forum?',
    'profile_field_forum_help' => 'Dacă este activată, câmpul va fi afișat în dreptul postărilor pe forum sub numele utilizatorului.',

    // Minecraft
    'enable_minecraft_integration' => 'Activați integrarea Minecraft?',
    'mc_service_status' => 'Starea serviciului Minecraft',
    'service_query_error' => 'Nu se poate obține starea serviciului.',
    'authme_integration' => 'Integrare AuthMe',
    'authme_integration_info' => 'Atunci când integrarea AuthMe este activată, utilizatorii se pot înscrie numai în joc.',
    'enable_authme' => 'Activați integrarea AuthMe?',
    'authme_db_address' => 'IP-ul (gazda) bazei de date AuthMe',
    'authme_db_port' => 'Portul bazei de date AuthMe',
    'authme_db_name' => 'Numele bazei de date AuthMe',
    'authme_db_user' => 'Utilizatorul bazei de date AuthMe',
    'authme_db_password' => 'Parola bazei de date AuthMe',
    'authme_hash_algorithm' => 'Algoritmul de criptare AuthMe',
    'authme_db_table' => 'Tabel utilizatori AuthMe',
    'enter_authme_db_details' => 'Vă rugăm să introduceți datele valide ale bazei de date.',
    'authme_password_sync' => 'Sincronizați parolele AuthMe?',
    'authme_password_sync_help' => 'Dacă este activată, ori de câte ori parola utilizatorului este actualizată, parola va fi actualizată și pe site.',
    'minecraft_servers' => 'Servere Minecraft',
    'account_verification' => 'Verificarea contului Minecraft',
    'server_banners' => 'Bannere servere',
    'banner_background' => 'Alegeți imaginea de fundal pentru bannerul serverului:',
    'query_errors' => 'Erori de interogare',
    'add_server' => '<i class="fa fa-plus-circle"></i> Adăugare Server',
    'no_servers_defined' => 'Momentan nu există nici un server.',
    'query_settings' => 'Setări pentru interogări',
    'default_server' => 'Serverul implicit',
    'no_default_server' => 'Nu există server implicit.',
    'external_query' => 'Utilizați o interogare externă?',
    'external_query_help' => 'Dacă interogarea serverului implicită nu funcționează, activați această opțiune.',
    'adding_server' => 'Adăugare server',
    'server_name' => 'Nume server',
    'server_address' => 'Adresă server',
    'server_address_help' => 'Aceasta este adresa IP sau domeniul folosit pentru a vă conecta la serverul dvs., fără port.',
    'server_port' => 'Port server',
    'parent_server' => 'Server părinte',
    'parent_server_help' => 'Un server părinte este de obicei instanța Bungee la care este conectat serverul, dacă există.',
    'no_parent_server' => 'Fără server părinte',
    'bungee_instance' => 'Instanțpă BungeeCord?',
    'bungee_instance_help' => 'Selectați această opțiune dacă serverul este o instanță BungeeCord.',
    'server_query_information' => 'Pentru a afișa o listă cu jucători online pe site-ul dvs. web, serverul <strong>trebuie</strong> să aibă opțiunea \'enable-query\' activată în fişierul <strong>server.properties</strong>.',
    'enable_status_query' => 'Activați interogarea de stare?',
    'status_query_help' => 'Dacă aceasta este activată, pagina de stare va afișa acest server ca fiind online sau offline.',
    'enable_player_list' => 'Activați lista de jucători?',
    'pre_1.7' => 'Versiunea Minecraft mai veche decât 1.7?',
    'player_list_help' => 'Dacă această opțiune este activată, pagina de stare va afișa o listă de jucători online.',
    'server_query_port' => 'Port de interogare server',
    'server_query_port_help' => 'Aceasta este opțiunea \'query.port\' din fișierul server.properties al serverului dvs., cu condiția ca opțiunea \'enable-query\' din același fișier să fie setată la \'true\'.',
    'server_name_required' => 'Introduceți numele serverului',
    'server_name_minimum' => 'Asigurați-vă că numele serverului dvs. are cel puțin un caracter',
    'server_name_maximum' => 'Asigurați-vă că numele serverului este de maxim 20 de caractere',
    'server_address_required' => 'Introduceți adresa serverului',
    'server_address_minimum' => 'Asigurați-vă că adresa serverului este de minim un caracter',
    'server_address_maximum' => 'Asigurați-vă că adresa serverului este de maxim 64 de caractere',
    'server_port_required' => 'Introduceți portul serverului',
    'server_port_minimum' => 'Asigurați-vă că portul dvs. de server are cel puțin 2 caractere',
    'server_port_maximum' => 'Asigurați-vă că portul de server este de maxim 5 caractere',
    'server_parent_required' => 'Selectați un server părinte',
    'query_port_maximum' => 'Asigurați-vă că portul de interogare este de maxim 5 caractere',
    'server_created' => 'Serverul a fost salvat cu succes.',
    'confirm_delete_server' => 'Sigur doriți să ștergeți acest server?',
    'server_updated' => 'Serverul a fost actualizat cu succes.',
    'editing_server' => 'Editare server',
    'server_deleted' => 'Serverul a fost șters cu succes.',
    'unable_to_delete_server' => 'Nu se poate șterge serverul.',
    'leave_port_empty_for_srv' => 'Puteți lăsa portul gol dacă acesta este 25565 sau dacă domeniul dvs. utilizează o înregistrare SRV.',
    'viewing_query_error' => 'Vizualizare erorii de interogare',
    'confirm_query_error_deletion' => 'Sigur doriți să ștergeți această eroare de interogare?',
    'no_query_errors' => 'Nu s-au înregistrat erori de interogare.',
    'new_banner' => '<i class="fa fa-plus-circle"></i> Adăugare Banner',
    'purge_errors' => 'Golește erorile',
    'confirm_purge_errors' => 'Sigur doriți să eliminați toate erorile?',
    'mcassoc_help' => 'Mcassoc este un serviciu extern care poate fi folosit pentru a verifica dacă utilizatorii dețin contul Minecraft la care s-au înregistrat. Pentru a utiliza această funcție, va trebui să vă înscrieți pentru o cheie distribuită <a href="https://mcassoc.lukegb.com/" target="_blank">aici</a>.',
    'mcassoc_key' => 'Cheie partajată mcassoc',
    'mcassoc_instance' => 'Cheia instanței mcassoc',
    'mcassoc_instance_help' => '<a href="#" onclick="generateInstance();">Apăsați aici pentru a genera o cheie de instanță</a>',
    'mcassoc_error' => 'Asigurați-vă că ați introdus corect cheia dvs. partajată și că ați generat corect o cheie de instanță.',
    'updated_mcassoc_successfully' => 'Setările mcassoc s-au actualizat cu succes.',
    'force_premium_accounts' => 'Forțează deținere unui cont de Minecraft permium?',

    // Modules
    'modules_installed_successfully' => 'Toate modulele noi au fost instalate cu succes (daca exista).',
    'enabled' => 'Activat',
    'disabled' => 'Dezactivat',
    'enable' => 'Activează',
    'disable' => 'Dezactivează',
    'module_enabled' => 'Modulul este activat.',
    'module_disabled' => 'Modulul este dezactivat.',
    'author' => 'Autor:',

    // Styles
    'templates' => 'Template-uri',
    'template_outdated' => 'Am detectat că șablonul dvs. este destinat versiunii NamelessMC {x}, dar executați versiunea NamelessMC {y}.', // Don't replace "{x}" or "{y}"
    'active' => 'Activ',
    'deactivate' => 'Dezactivare',
    'activate' => 'Activare',
    'warning_editing_default_template' => 'Avertizare! Se recomandă să nu editați șablonul implicit.',
    'images' => 'Imagini',
    'upload_new_image' => 'Încărcați o imagine nouă',
    'reset_background' => 'Resetați fundalul',
    'install' => '<i class="fa fa-plus-circle"></i> Instalare',
    'template_updated' => 'Șablon actualizat cu succes.',
    'default' => 'Implicit',
    'make_default' => 'Setează implicit',
    'default_template_set' => 'Șablonul prestabilit a fost setat la {x} cu succes.', // Don't replace {x}
    'template_deactivated' => 'Șablonul a fost dezactivat.',
    'template_activated' => 'Șablonul a fost activat.',
    'permissions' => 'Permisiuni',
    'setting_perms_for_x' => 'Setați permisiunile pentru șablonul {x}', // Don't replace {x}
    'templates_installed_successfully' => 'Toate șabloanele noi au fost instalate cu succes.',
    'confirm_delete_template' => 'Sigur doriți să ștergeți acest șablon?',
    'delete' => 'Șterge',
    'template_deleted_successfully' => 'Șablonul a fost șters cu succes.',
    'background_image_x' => 'Imagine de fundal: <strong>{x}</strong>', // Don't replace {x}

    // Users & groups
    'users' => 'Utilizatori',
    'groups' => 'Grupuri',
    'group' => 'Grup',
    'new_user' => '<i class="fa fa-plus-circle"></i> Utilizator nou',
    'creating_new_user' => 'Creați un utilizator nou',
    'registered' => 'Înregistrat',
    'user_created' => 'Utilizatorul a fost creat cu succes.',
    'cant_delete_root_user' => 'Nu puteți șterge utilizatorul root (principal)!',
    'cant_modify_root_user' => 'Nu puteți modifica grupul de utilizatori al utilizatorului root (principal)!',
    'user_deleted' => 'Utilizatorul a fost șters cu succes.',
    'confirm_user_deletion' => 'Sigur doriți să ștergeți utilizatorul <strong>{x}</strong>?', // Don't replace {x}
    'validate_user' => 'Activați utilizatorul',
    'update_uuid' => 'Actualizare UUID',
    'update_mc_name' => 'Actualizare nume Minecraft',
    'reset_password' => 'Resetează parola',
    'punish_user' => 'Sanctionați utilizatorul',
    'delete_user' => 'Ștergeți utilizatorul',
    'minecraft_uuid' => 'UUID Minecraft',
    'other_actions' => 'Alte acțiuni',
    'disable_avatar' => 'Dezactivare avatar',
    'select_user_group' => 'Trebuie să selectați un grup de utilizatori.',
    'uuid_max_32' => 'UUID-ul trebuie să aibă maxim 32 de caractere.',
    'title_max_64' => 'Titlul utilizatorului trebuie să aibă maximum 64 de caractere.',
    'group_id' => 'ID group',
    'name' => 'Nume',
    'title' => 'Titlul utilizatorului',
    'new_group' => '<i class="fa fa-plus-circle"></i> Grup nou',
    'group_name_required' => 'Introduceți un nume de grup.',
    'group_name_minimum' => 'Asigurați-vă că numele grupului este de cel puțin 2 caractere.',
    'group_name_maximum' => 'Asigurați-vă că numele grupului este de maximum 20 de caractere.',
    'creating_group' => 'Adăugați un grup nou',
    'group_html_maximum' => 'Asigurați-vă că HTML-ul grupului nu depășește 1024 de caractere.',
    'group_html' => 'HTML grup',
    'group_html_lg' => 'HTML grup (mare) ',
    'group_username_colour' => 'Culoarea grupului',
    'group_staff' => 'Grupul este un grup de personal (staff)?',
    'group_modcp' => 'Grupul poate vizualiza Panoul Moderatorului?',
    'group_admincp' => 'Grupul poate vizualiza Panoul de Administrare?',
    'delete_group' => 'Ștergeți grupul',
    'confirm_group_deletion' => 'Sigur doriți să ștergeți grupul {x}?', // Don't replace {x}
    'group_not_exist' => 'Grupul specificat nu există.',
    'secondary_groups' => 'Grupuri secundare',
    'secondary_groups_info' => 'Utilizatorul va obține orice permisiuni suplimentare din partea acestor grupuri',
    'unable_to_update_uuid' => 'Imposibil de actualizat UUID-ul.',

    // Permissions
    'select_all' => 'Selectează tot',
    'deselect_all' => 'Deselectează tot',
    'background_image' => 'Imagine de fundal',
    'can_edit_own_group' => 'Poate edita permisiunile grupurilor proprii',
    'permissions_updated_successfully' => 'Permisiunile s-au actualizat cu succes.',
    'cant_edit_this_group' => 'Nu puteți edita permisiunile acestui grup!',

    // General Admin language
    'task_successful' => 'Sarcina a reușit.',
    'invalid_action' => 'Acțiune nevalidă.',
    'enable_night_mode' => 'Activați modul de noapte',
    'disable_night_mode' => 'Dezactivați modul de noapte',
    'view_site' => 'Vizualizați site-ul',
    'signed_in_as_x' => 'Conectat drept {x}', // Don't replace {x}
    'warning' => 'Avertizare',

    // Maintenance
    'maintenance_mode' => 'Modul de întreținere',
    'maintenance_enabled' => 'Modul de întreținere este activat în prezent.',
    'enable_maintenance_mode' => 'Activați modul de întreținere?',
    'maintenance_mode_message' => 'Mesajul de întreținere',
    'maintenance_message_max_1024' => 'Asigurați-vă că mesajul de întreținere este de maximum 1024 de caractere.',

    // Security
    'acp_logins' => 'Conectări în Panoul de Administrare',
    'please_select_logs' => 'Selectați jurnalele de afișat',
    'ip_address' => 'Adresa IP',
    'template_changes' => 'Modificări șabloane',
    'file_changed' => 'Fișier modificat',

    // Updates
    'update' => 'Actualizare',
    'current_version_x' => 'Versiune curentă: <strong>{x}</strong>', // Don't replaec {x}
    'new_version_x' => 'Versiune nouă: <strong>{x}</strong>', // Don't replace {x}
    'new_update_available' => 'Există o nouă actualizare disponibilă.',
    'up_to_date' => 'Instalarea dvs. NamelessMC este actualizată!',
    'urgent' => 'Această actualizare este o actualizare urgentă (importantă).',
    'changelog' => 'Istoric modificări',
    'update_check_error' => 'A apărut o eroare la verificarea pentru actualizări:',
    'instructions' => 'Instrucțiuni',
    'download' => '<i class="fa fa-arrow-circle-down" aria-hidden="true"></i> Descarcă',
    'install_confirm' => 'Asigurați-vă că ați descărcat pachetul și ați încărcat mai întâi fișierele conținute!',

    // Widgets
    'widgets' => 'Piese',
    'widget_enabled' => 'Piesă activată.',
    'widget_disabled' => 'Piesă dezactivată .',
    'editing_widget_x' => 'Modificare piesă: {x}', // Don't replace {x}
    'module_x' => 'Module: {x}', // Don't replace {x}

    // Custom Pages
    'pages' => 'Pagini',
    'new_page' => '<i class="fa fa-plus-circle"></i> Pagină nouă',
    'no_custom_pages' => 'Nici o pagină nu a fost creată încă.',
    'creating_new_page' => 'Creare pagină',
    'page_title' => 'Titlu pagină',
    'page_path' => 'Adresă pagină (cu /, ex: /exemplu)',
    'page_icon' => 'Pictogramă pagină',
    'page_link_location' => 'Localizarea link-ului paginii',
    'page_link_navbar' => 'Navigare',
    'page_link_footer' => 'Subsol',
    'page_link_more' => 'Meniul "Mai multe"',
    'page_link_none' => 'Fară',
    'page_content' => 'Conținutul paginii',
    'page_redirect' => 'Redirecționează pagina?',
    'page_redirect_to' => 'Adresa pentru redirecționare (cu http://)',
    'unsafe_html' => 'Permiteți HTML (nesigur) ?',
    'unsafe_html_warning' => 'Activarea acestei opțiuni înseamnă că orice HTML poate fi folosit pe pagină, incluzând JavaScript potențial periculos. Activați acest lucru numai dacă sunteți sigur că codul dvs. HTML este sigur.',
    'page_permissions' => 'Permisiuni pentru pagină',
    'view_page' => 'Vizualizare pagină?',
    'editing_page_x' => 'Editare pagină: {x}', // Don't replace {x}
    'unable_to_create_page' => 'Imposibil de creat pagina:',
    'page_title_required' => 'Este necesar un titlu pentru pagină.',
    'page_url_required' => 'Este necesară o cale pentru pagină.',
    'link_location_required' => 'Este necesar să selectați localizarea paginii.',
    'page_title_minimum_2' => 'Titlul paginii trebuie să aibă cel puțin 2 caractere.',
    'page_url_minimum_2' => 'Calea paginii trebuie să aibă cel puțin 2 caractere.',
    'page_title_maximum_30' => 'Titlul paginii trebuie să aibă maximum 30 de caractere.',
    'page_icon_maximum_64' => 'Pictograma paginii trebuie să aibă maximum 64 de caractere.',
    'page_url_maximum_20' => 'Calea paginii trebuie să aibă maximum 20 de caractere.',
    'page_content_maximum_20480' => 'Conținutul paginii trebuie să aibă maximum 20480 de caractere.',
    'page_redirect_link_maximum_512' => 'Legătura redirecționării paginii trebuie să aibă maximum 512 caractere.',
    'confirm_delete_page' => 'Sigur doriți să ștergeți această pagină?',

    // API
    'api' => 'API',
    'enable_api' => 'Activare API?',
    'api_info' => 'API permite ca pluginurile și alte servicii să interacționeze cu site-ul dvs. web, cum ar fi <a href="https://namelessmc.com/resources/resource/5-namelessplugin/" target="_blank" >pluginul oficial Nameless</a>.',
    'enable_legacy_api' => 'Activați API-ul vechi?',
    'legacy_api_info' => 'API-ul vechi permite pluginurilor care utilizează API-ul versiunii vechi Nameless 1 să lucreze cu site-ul dvs. Nameless versiunea 2.',
    'confirm_api_regen' => 'Sigur doriți să vă regenerați cheia API?',
    'api_registration_email' => 'API pentru înregistrarea e-mail',
    'link_to_complete_registration' => 'Adresa pentru finalizarea înregistrări:', // Don't replace {x}

    // File uploads
    'drag_files_here' => 'Trageți fișierele aici pentru a le încărca.',
    'invalid_file_type' => 'Tip de fișier nevalid!',
    'file_too_big' => 'Fișierul este prea mare! Fișierul are {{filesize}} iar limita maximă este {{maxFilesize}}' // Don't replace {{filesize}} or {{maxFilesize}}
);
