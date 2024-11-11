<?php

# Version 1.0.0
#
# General
$lang['id']                   = 'ID';
$lang['name']                 = 'Nume';
$lang['options']              = 'Optiuni';
$lang['submit']               = 'Salvare';
$lang['added_successfully']   = '%s adaugat cu succes.';
$lang['updated_successfully'] = '%s updatat cu succes.';
$lang['edit']                 = 'Editeaza %s';
$lang['add_new']              = 'Adaugare noua %s';
$lang['deleted']              = '%s Sterge';
$lang['problem_deleting']     = 'Ștergerea problemei %s';
$lang['is_referenced']        = 'Id-ul %s este deja folosit.';
$lang['close']                = 'Inchide';
$lang['send']                 = 'Trimite';
$lang['cancel']               = 'Anuleaza';
$lang['go_back']              = 'Intoarcete';
$lang['error_uploading_file'] = 'Nu s-a putut incarca';
$lang['load_more']            = 'Incarca mai mult';
$lang['cant_delete_default']  = 'Nu se poate sterge %s';

# Invoice General
$lang['invoice_status_paid']                   = 'Platit';
$lang['invoice_status_unpaid']                 = 'Neplatit';
$lang['invoice_status_overdue']                = 'Intarziat';
$lang['invoice_status_not_paid_completely']    = 'Partial platit';
$lang['invoice_pdf_heading']                   = 'FACTURA';
$lang['invoice_table_item_heading']            = 'Articol';
$lang['invoice_table_quantity_heading']        = 'Cantitate';
$lang['invoice_table_rate_heading']            = 'Rata';
$lang['invoice_table_tax_heading']             = 'Taxa';
$lang['invoice_table_amount_heading']          = 'Cantitate';
$lang['invoice_subtotal']                      = 'Sub Total';
$lang['invoice_adjustment']                    = 'Ajustare';
$lang['invoice_total']                         = 'Total';
$lang['invoice_bill_to']                       = 'Facturat catre';
$lang['invoice_data_date']                     = 'Data facturii:';
$lang['invoice_data_duedate']                  = 'Data scadenta:';
$lang['invoice_received_payments']             = 'Tranzactii';
$lang['invoice_no_payments_found']             = 'Nu au fost găsite placti pentru aceasta factura';
$lang['invoice_note']                          = 'Note:';
$lang['invoice_payments_table_number_heading'] = 'Plata #';
$lang['invoice_payments_table_mode_heading']   = 'Modalitate plata';
$lang['invoice_payments_table_date_heading']   = 'Data';
$lang['invoice_payments_table_amount_heading'] = 'Cantitate';

# Announcements
$lang['announcement']                 = 'Anunt';
$lang['announcement_lowercase']       = 'anunt';
$lang['announcements']                = 'Anunt';
$lang['announcements_lowercase']      = 'anunt';
$lang['new_announcement']             = 'Anunturi noi';
$lang['announcement_name']            = 'Subiect';
$lang['announcement_message']         = 'Mesaj';
$lang['announcement_show_to_staff']   = 'Arata personalului';
$lang['announcement_show_to_clients'] = 'Arata clientilor';
$lang['announcement_show_my_name']    = 'Arata-mi numele';

# Clients
$lang['clients']                                 = 'Clienti';
$lang['client']                                  = 'Client';
$lang['new_client']                              = 'Client nou';
$lang['client_lowercase']                        = 'client';
    $lang['client_firstname']                    = 'Nume';
$lang['client_lastname']                         = 'Prenume';
$lang['client_email']                            = 'Email';
$lang['client_company']                          = 'Companie';
$lang['client_vat_number']                       = 'TVA';
$lang['client_address']                          = 'Adresa';
$lang['client_city']                             = 'Oras';
$lang['client_postal_code']                      = 'Cod postal';
$lang['client_state']                            = 'Stat';
$lang['client_password']                         = 'Parola';
$lang['client_password_change_populate_note']    = 'Not: daca introduceti aceste campuri, parola va fi modificata pe acest contact.';
$lang['client_password_last_changed']            = 'Ultima modificare a parolei:';
$lang['login_as_client']                         = 'Conectai-va ca client';
$lang['client_invoices_tab']                     = 'Facturi/Plati';
$lang['contracts_invoices_tab']                  = 'Contracte';
$lang['contracts_tickets_tab']                   = 'Tichete';
$lang['contracts_notes_tab']                     = 'Notite';
$lang['note_description']                        = 'Nota descriere';
$lang['client_do_not_send_welcome_email']        = 'Nu trimiteti e-mail de bun venit';
$lang['clients_notes_table_description_heading'] = 'Descriere';
$lang['clients_notes_table_addedfrom_heading']   = 'Formular adugat';
$lang['clients_notes_table_dateadded_heading']   = 'Data adaugata';
$lang['clients_list_full_name']                  = 'Nume complet';
$lang['clients_list_last_login']                 = 'Ultima logare';

# Contracts
$lang['contracts']                = 'Contracte';
$lang['contract']                 = 'Contract';
$lang['new_contract']             = 'Contract nou';
$lang['contract_lowercase']       = 'contract';
$lang['contract_start_date']      = 'Data de inceput';
$lang['contract_end_date']        = 'Data de sfarsit';
$lang['contract_subject']         = 'Subiect';
$lang['contract_description']     = 'Descriere';
$lang['contract_subject_tooltip'] = 'Subiectul este, de asemenea, vizibil pentru client';
$lang['contract_client_string']   = 'Client';
$lang['contract_attach']          = 'Ataseaza document';
$lang['contract_list_client']     = 'Client';
$lang['contract_list_subject']    = 'Subiect';
$lang['contract_list_start_date'] = 'Data de inceput';
$lang['contract_list_end_date']   = 'Data de sfarsit';

# Currencies
$lang['currencies']                    = 'Valute';
$lang['currency']                      = 'Valuta';
$lang['new_currency']                  = 'Valuta noua';
$lang['currency_lowercase']            = 'valuta';
$lang['base_currency_set']             = 'Aceasta este acum moneda dvs. de baza.';
$lang['make_base_currency']            = 'Faceti moneda de baza';
$lang['base_currency_string']          = 'Valoare de baza';
$lang['currency_list_name']            = 'Nume';
$lang['currency_list_symbol']          = 'Simbol';
$lang['currency_add_edit_description'] = 'Codul valutar';
$lang['currency_add_edit_rate']        = 'Simbol';
$lang['currency_edit_heading']         = 'Editati moneda';
$lang['currency_add_heading']          = 'Adaugati moneda noua';

# Department
$lang['departments']                 = 'Departamente';
$lang['department']                  = 'Departament';
$lang['new_department']              = 'Departament nou';
$lang['department_lowercase']        = 'department';
$lang['department_name']             = 'Nume departament';
$lang['department_email']            = 'Email departament';
$lang['department_hide_from_client'] = 'Ascunde de client?';
$lang['department_list_name']        = 'Nume';

# Email Templates
$lang['email_templates']                        = 'Sabloane de e-mail';
$lang['email_template']                         = 'Sabloane de e-mail';
$lang['email_template_lowercase']               = 'sabloane de e-mail';
$lang['email_templates_lowercase']              = 'sabloane de e-mail';
$lang['email_template_ticket_fields_heading']   = 'Tichete';
$lang['email_template_invoices_fields_heading'] = 'Facturi/Plati';
$lang['email_template_clients_fields_heading']  = 'Clienti';

$lang['template_name']                             = 'Nume sablon';
$lang['template_subject']                          = 'Subiect';
$lang['template_fromname']                         = 'Din numele';
$lang['template_fromemail']                        = 'Din emailul';
$lang['send_as_plain_text']                        = 'Trimite-ti sub forma de text';
$lang['email_template_disabled']                   = 'Invalid';
$lang['email_template_email_message']              = 'Mesaj E-mail';
$lang['available_merge_fields']                    = 'Campurile de imbinare disponibile'; # Home
$lang['dashboard_string']                          = 'Bord/Tablut de bord';
$lang['home_latest_todos']                         = 'De facut mai tarziu';
$lang['home_no_latest_todos']                      = 'Nu au fost găsite unelte';
$lang['home_latest_finished_todos']                = 'Ultimele terminate de facut';
$lang['home_no_finished_todos_found']              = 'Nu s-au găsit niciun dosar finalizat';
$lang['home_tickets_awaiting_reply_by_department'] = 'Tichete in asteptarea raspunsului Departamentului';
$lang['home_tickets_awaiting_reply_by_status']     = 'Tichete in ateptarea raspunsului prin stare';
$lang['home_this_week_events']                     = 'Evenimentele din aceasta saptmana';
$lang['home_upcoming_events_next_week']            = 'Evenimente viitoare';
$lang['home_event_added_by']                       = 'Eveniment adugat de';
$lang['home_public_event']                         = 'Eveniment public';
$lang['home_weekly_payment_records']               = 'Inregistrari de plata saptmanale';
$lang['home_weekend_ticket_opening_statistics']    = 'Statistica saptmanala a deschiderilor tichetelor';
# Newsfeed
$lang['whats_on_your_mind']                                 = 'Trimiteți documente, idei ..';
$lang['new_post']                                           = 'Post';
$lang['newsfeed_upload_tooltip']                            = 'Sfat: trageți și fixați fișierele pentru încărcare';
$lang['newsfeed_all_departments']                           = 'Toate departamentele';
$lang['newsfeed_pin_post']                                  = 'Fixează postarea';
$lang['newsfeed_unpin_post']                                = 'Anulează postarea';
$lang['newsfeed_delete_post']                               = 'Șterge';
$lang['newsfeed_published_post']                            = 'Publicat';
$lang['newsfeed_you_like_this']                             = 'Iti place asta';
$lang['newsfeed_like_this']                                 = 'Asa';
$lang['newsfeed_one_other']                                 = 'Altul';
$lang['newsfeed_you']                                       = 'Tu';
$lang['newsfeed_and']                                       = 'si';
$lang['newsfeed_you_and']                                   = 'Tu si';
$lang['newsfeed_like_this_saying']                          = 'Asa';
$lang['newsfeed_unlike_this_saying']                        = 'Spre deosebire de asta';
$lang['newsfeed_show_more_comments']                        = 'Afișați mai multe comentarii';
$lang['comment_this_post_placeholder']                      = 'Comentariu la acest post ..';
$lang['newsfeed_post_likes_modal_heading']                  = 'Colegii cărora le place acest post';
$lang['newsfeed_comment_likes_modal_heading']               = 'Colegii cărora le place acest comentariu';
$lang['newsfeed_newsfeed_post_only_visible_to_departments'] = 'Această postare este vizibilă numai pentru următoarele departamente: %s';

# Invoice Items
$lang['invoice_items']                     = 'Articole de factură';
$lang['invoice_item']                      = 'Element de facturare';
$lang['new_invoice_item']                  = 'Articol nou';
$lang['invoice_item_lowercase']            = 'element factură';
$lang['invoice_items_list_description']    = 'Descriere';
$lang['invoice_items_list_rate']           = 'Rate';
$lang['invoice_item_add_edit_description'] = 'Descriere';
$lang['invoice_item_add_edit_rate']        = 'Rate';
$lang['invoice_item_edit_heading']         = 'Editeaza item';
$lang['invoice_item_add_heading']          = 'Adauga item nou';

# Invoices
$lang['invoices']                                = 'Facturi';
$lang['invoice']                                 = 'Factura';
$lang['invoice_lowercase']                       = 'factura';
$lang['create_new_invoice']                      = 'Creați o factură nouă';
$lang['view_invoice']                            = 'Vizualizați factura';
$lang['invoice_payment_recorded']                = 'Plata facturilor înregistrate';
$lang['invoice_payment_record_failed']           = 'Eroare la înregistrarea plății facturii';
$lang['invoice_sent_to_client_success']          = 'Factura este trimisă cu succes clientului';
$lang['invoice_sent_to_client_fail']             = 'Problemă la trimiterea facturii';
$lang['invoice_reminder_send_problem']           = 'Problemă de expediere a facturii memento restante';
$lang['invoice_overdue_reminder_sent']           = 'Factura fiscala Intârziat Aducere aminte Trimisa cu succes';
$lang['invoice_details']                         = 'Detaliile facturii';
$lang['invoice_view']                            = 'Vizualizați factura';
$lang['invoice_select_customer']                 = 'Client';
$lang['invoice_add_edit_number']                 = 'Număr de factură';
$lang['invoice_add_edit_date']                   = 'Data facturii';
$lang['invoice_add_edit_duedate']                = 'Data scadentă';
$lang['invoice_add_edit_currency']               = 'Valută';
$lang['invoice_add_edit_client_note']            = 'Nota clientului';
$lang['invoice_add_edit_admin_note']             = 'Admin Note';
$lang['invoices_toggle_table_tooltip']           = 'Schimbați tabelul';
$lang['edit_invoice_tooltip']                    = 'Editați factura';
$lang['delete_invoice_tooltip']                  = 'Ștergeți factura. Notă: toate plățile referitoare la această factură vor fi șterse (dacă există).';
$lang['invoice_sent_to_email_tooltip']           = 'Trimiteți la e-mail';
$lang['invoice_already_send_to_client_tooltip']  = 'Această factură este deja trimisă clientului %s';
$lang['send_overdue_notice_tooltip']             = 'Trimiteți o notificare cu întârziere';
$lang['invoice_view_activity_tooltip']           = 'Jurnalul de activitate';
$lang['invoice_record_payment']                  = 'Plata înregistrării';
$lang['invoice_send_to_client_modal_heading']    = 'Trimiteți factura clientului';
$lang['invoice_send_to_client_attach_pdf']       = 'Atașați PDF factură';
$lang['invoice_send_to_client_preview_template'] = 'Examinați șablonul de e-mail';
$lang['invoice_dt_table_heading_number']         = 'Factura #';
$lang['invoice_dt_table_heading_date']           = 'Data';
$lang['invoice_dt_table_heading_client']         = 'Client';
$lang['invoice_dt_table_heading_duedate']        = 'Data scadentă';
$lang['invoice_dt_table_heading_amount']         = 'Cantitate';
$lang['invoice_dt_table_heading_status']         = 'Status';
$lang['record_payment_for_invoice']              = 'Plata înregistrării pentru';
$lang['record_payment_amount_received']          = 'Sumă primită';
$lang['record_payment_date']                     = 'Data de plată';
$lang['record_payment_leave_note']               = 'Lăsați o notă';
$lang['invoice_payments_received']               = 'Plățile primite';
$lang['invoice_record_payment_note_placeholder'] = 'Admin Note';
$lang['no_payments_found']                       = 'Nu au fost găsite plăți pentru această factură';

# Payments
$lang['payments']                             = 'plăţile';
$lang['payment']                              = 'Plată';
$lang['payment_lowercase']                    = 'plată';
$lang['payments_table_number_heading']        = 'plată #';
$lang['payments_table_invoicenumber_heading'] = 'Factura #';
$lang['payments_table_mode_heading']          = 'Mod de plată';
$lang['payments_table_date_heading']          = 'Data';
$lang['payments_table_amount_heading']        = 'Cantitate';
$lang['payments_table_client_heading']        = 'Client';
$lang['payment_not_exists']                   = 'Plata nu există';
$lang['payment_edit_for_invoice']             = 'Plata pentru factură';
$lang['payment_edit_amount_received']         = 'Sumă primită';
$lang['payment_edit_date']                    = 'Data de plată';

# Knowledge Base
$lang['kb_article_add_edit_subject']   = 'Subiect';
$lang['kb_article_add_edit_group']     = 'Grup';
$lang['kb_string']                     = 'Bază de cunoștințe';
$lang['kb_article']                    = 'Articol';
$lang['kb_article_lowercase']          = 'articol';
$lang['kb_article_new_article']        = 'Articol nou';
$lang['kb_article_disabled']           = 'invalid';
$lang['kb_article_description']        = 'Descrierea articolului';
$lang['kb_no_articles_found']          = 'Nu s-au găsit articole de bază de cunoștințe';
$lang['kb_dt_article_name']            = 'Numele articolului';
$lang['kb_dt_group_name']              = 'Grup';
$lang['new_group']                     = 'Grup nou';
$lang['kb_group_add_edit_name']        = 'Numele grupului';
$lang['kb_group_add_edit_description'] = 'Scurta descriere';
$lang['kb_group_add_edit_disabled']    = 'invalid';
$lang['kb_group_add_edit_note']        = 'Notă: Toate articolele din acest grup vor fi ascunse dacă este bifată opțiunea dezactivată';
$lang['group_table_name_heading']      = 'Nume';
$lang['group_table_isactive_heading']  = 'Activ';
$lang['kb_no_groups_found']            = 'Nu s-au găsit grupuri de bază de cunoștințe';

# Media
$lang['media_files'] = 'Fișiere';

# Payment modes
$lang['new_payment_mode']           = 'Mod de plată nou';
$lang['payment_modes']              = 'Moduri de plată';
$lang['payment_mode']               = 'Mod de plată';
$lang['payment_mode_lowercase']     = 'mod de plată';
$lang['payment_modes_dt_name']      = 'Numele modului de plată';
$lang['payment_mode_add_edit_name'] = 'Numele modului de plată';
$lang['payment_mode_edit_heading']  = 'Modificați modul de plată';
$lang['payment_mode_add_heading']   = 'Adăugați un mod de plată nou';

# Predefined Ticket Replies
$lang['new_predefined_reply']              = 'Răspuns nou predefinit';
$lang['predefined_replies']                = 'Răspunsuri predefinite';
$lang['predefined_reply']                  = 'Răspuns predefinit';
$lang['predefined_reply_lowercase']        = 'răspuns predefinit';
$lang['predefined_replies_dt_name']        = 'Numele raspunsului predefinit';
$lang['predefined_reply_add_edit_name']    = 'Numele raspunsului predefinit';
$lang['predefined_reply_add_edit_content'] = 'Răspundeți la conținut';

# Ticket Priorities
$lang['new_ticket_priority']           = 'Noua prioritate';
$lang['ticket_priorities']             = 'Prioritățile tichetelor';
$lang['ticket_priority']               = 'Prioritatea tichetelor';
$lang['ticket_priority_lowercase']     = 'prioritatea biletului';
$lang['no_ticket_priorities_found']    = 'Nu au fost găsite priorități pentru tichete';
$lang['ticket_priority_dt_name']       = 'Numele priorității tichetelor';
$lang['ticket_priority_add_edit_name'] = 'Nume prioritar';

# Reports
$lang['kb_reports']                                       = 'Baze de date bazate pe baze de date';
$lang['sales_reports']                                    = 'Rapoarte de vânzări';
$lang['reports_choose_kb_group']                          = 'Selectați Grup';
$lang['report_kb_yes']                                    = 'Da';
$lang['report_kb_no']                                     = 'Nu';
$lang['report_kb_no_votes']                               = 'Niciun vot încă';
$lang['report_this_week_leads_conversions']               = 'Această săptămână conduce conversii';
$lang['report_leads_sources_conversions']                 = 'Surse de conversie';
$lang['report_leads_monthly_conversions']                 = 'Lunar';
$lang['sales_report_heading']                             = 'Raport de vânzări';
$lang['report_sales_type_income']                         = 'Venit total';
$lang['report_sales_type_customer']                       = 'Raportul clienților';
$lang['report_sales_base_currency_select_explanation']    = 'Trebuie să selectați moneda deoarece aveți facturi cu valută diferită';
$lang['report_sales_from_date']                           = 'Din data';
$lang['report_sales_to_date']                             = 'La zi';
$lang['report_sales_months_all_time']                     = 'Tot timpul';
$lang['report_sales_months_six_months']                   = 'Ultimele 6 luni';
$lang['report_sales_months_twelve_months']                = 'Ultimele 12 luni';
$lang['reports_sales_generated_report']                   = 'Raportul generat';
$lang['reports_sales_dt_customers_client']                = 'Client';
$lang['reports_sales_dt_customers_total_invoices']        = 'Facturi totale';
$lang['reports_sales_dt_items_customers_amount']          = 'Cantitate';
$lang['reports_sales_dt_items_customers_amount_with_tax'] = 'Suma cu impozitul';

# Roles
$lang['new_role']           = 'Rolul nou';
$lang['all_roles']          = 'Toate rolurile';
$lang['roles']              = 'Rolul personalului';
$lang['role']               = 'Rolul';
$lang['role_lowercase']     = 'rolul';
$lang['roles_total_users']  = 'Utilizatori totali: ';
$lang['roles_dt_name']      = 'Nume rol';
$lang['role_add_edit_name'] = 'Nume rol';

# Service
$lang['new_service']           = 'Serviciu nou';
$lang['services']              = 'Servicii';
$lang['service']               = 'Serviciu';
$lang['service_lowercase']     = 'serviciu';
$lang['services_dt_name']      = 'numele serviciului';
$lang['service_add_edit_name'] = 'Numele serviciului';

# Settings
$lang['settings']                                                  = 'Setări';
$lang['settings_updated']                                          = 'Setările aduse la zi';
$lang['settings_save']                                             = 'Salvează setările';
$lang['settings_group_general']                                    = 'General';
$lang['settings_group_localization']                               = 'Localizare';
$lang['settings_group_tickets']                                    = 'Tichete';
$lang['settings_group_sales']                                      = 'Finanţa';
$lang['settings_group_email']                                      = 'Email';
$lang['settings_group_clients']                                    = 'Clienti';
$lang['settings_group_newsfeed']                                   = 'Flux de știri';
$lang['settings_group_cronjob']                                    = 'Cron Job';
$lang['settings_yes']                                              = 'Da';
$lang['settings_no']                                               = 'Nu';
$lang['settings_clients_default_theme']                            = 'Implicit tema clienților';
$lang['settings_clients_allow_registration']                       = 'Permiteți clienților să se înregistreze';
$lang['settings_clients_allow_kb_view_without_registration']       = 'Permiteți vizualizarea bazei de cunoștințe fără înregistrare';
$lang['settings_cron_send_overdue_reminder']                       = 'Trimiteți memento cu întârziere la factură';
$lang['settings_cron_send_overdue_reminder_tooltip']               = 'Trimiteți e-mail-uri restante clientului atunci când starea facturii este actualizată la o întârziere de la Cron Job';
$lang['automatically_send_invoice_overdue_reminder_after']         = 'Trimiteți automat memento după (zile)';
$lang['automatically_resend_invoice_overdue_reminder_after']       = 'Retrimiteți automat memento după (zile)';
$lang['settings_email_host']                                       = 'SMTP Host';
$lang['settings_email_port']                                       = 'SMTP Port';
$lang['settings_email']                                            = 'Email';
$lang['settings_email_password']                                   = 'SMTP Parola';
$lang['settings_email_charset']                                    = 'Trimiteți un e-mail cu cartea';
$lang['settings_email_signature']                                  = 'Semnatura email';
$lang['settings_general_company_logo']                             = 'Logoul companiei';
$lang['settings_general_company_logo_tooltip']                     = 'Dimensiuni recomandate: 150 x 34 px';
$lang['settings_general_company_remove_logo_tooltip']              = 'Eliminați logo-ul companiei';
$lang['settings_general_company_name']                             = 'Numele Companiei';
$lang['settings_general_company_main_domain']                      = 'Domeniul principal al companiei';
$lang['settings_general_use_knowledgebase']                        = 'Utilizați baza de cunoștințe';
$lang['settings_general_use_knowledgebase_tooltip']                = 'Dacă permiteți această opțiune, baza de cunoștințe va fi afișată și pe partea clienților';
$lang['settings_general_tables_limit']                             = 'Tabele limita de paginare';
$lang['settings_general_default_staff_role']                       = 'Rolul implicit al personalului';
$lang['settings_general_default_staff_role_tooltip']               = 'Când adăugați un nou membru al personalului, acest rol va fi selectat în mod implicit';
$lang['settings_localization_date_format']                         = 'Formatul datei';
$lang['settings_localization_default_timezone']                    = 'Fusul orar prestabilit';
$lang['settings_localization_default_language']                    = 'Limba implicita';
$lang['settings_newsfeed_max_file_upload_post']                    = 'Fișierele maxime se încarcă pe post';
$lang['settings_reminders_contracts']                              = 'Memorarea expirării contului înainte';
$lang['settings_reminders_contracts_tooltip']                      = 'Explicație notificare memento în zile';
$lang['settings_tickets_use_services']                             = 'Utilizați serviciile';
$lang['settings_tickets_max_attachments']                          = 'Disponibilitatea maximă a biletului';
$lang['settings_tickets_allow_departments_access']                 = 'Permiteți personalului să acceseze doar biletul care aparține departamentelor personalului';
$lang['settings_tickets_allowed_file_extensions']                  = 'Permisiuni de extensii de fișiere atașate';
$lang['settings_sales_general']                                    = 'General';
$lang['settings_sales_general_note']                               = 'Setari generale';
$lang['settings_sales_invoice_prefix']                             = 'Prefixul numărului de facturi';
$lang['settings_sales_decimal_separator']                          = 'Zecimal separator';
$lang['settings_sales_thousand_separator']                         = 'Separator la mie';
$lang['settings_sales_currency_placement']                         = 'Plasarea de valută';
$lang['settings_sales_currency_placement_before']                  = 'Înainte de Sumă';
$lang['settings_sales_currency_placement_after']                   = 'După Sumă';
$lang['settings_sales_require_client_logged_in_to_view_invoice']   = 'Solicitați clientului să fie conectat pentru a vedea factura';
$lang['settings_sales_next_invoice_number']                        = 'Numărul următor al facturii';
$lang['settings_sales_next_invoice_number_tooltip']                = 'Setați acest câmp la 1 dacă doriți să începeți de la început';
$lang['settings_sales_decrement_invoice_number_on_delete']         = 'Decrement numarul facturii la stergere';
$lang['settings_sales_decrement_invoice_number_on_delete_tooltip'] = 'Doriți să reduceți numărul facturii la ștergerea ultimei facturi? echiv. Dacă este setată această opțiune la YES și înainte de a șterge factura următorul număr de factură este 15, următorul număr de factură va scădea la 14. Dacă este setat la NU, numărul va rămâne la 15. Dacă aveți setare ștergeți numai ultima factură la NO trebuie să setați această opțiune la NU prea pentru a nu menține următorul număr de factură neschimbat.';
$lang['settings_sales_invoice_number_format']                      = 'Formatul numărului de factură';
$lang['settings_sales_invoice_number_format_year_based']           = 'Anul bazat';
$lang['settings_sales_invoice_number_format_number_based']         = 'Pe baza numărului (000001)';
$lang['settings_sales_company_info_note']                          = 'Aceste informații vor fi afișate pe facturi / estimări / plăți și alte documente PDF unde sunt necesare informații despre companie';
$lang['settings_sales_company_name']                               = 'Numele Companiei';
$lang['settings_sales_address']                                    = 'Adresa';
$lang['settings_sales_city']                                       = 'Oras';
$lang['settings_sales_country_code']                               = 'Codul tarii';
$lang['settings_sales_postal_code']                                = 'Cod postal';
$lang['settings_sales_phonenumber']                                = 'Telefon';

# Leads
$lang['new_lead']                          = 'Lead nou';
$lang['leads']                             = 'Oportunitati';
$lang['lead']                              = 'Conduce';
$lang['lead_lowercase']                    = 'conduce';
$lang['leads_all']                         = 'totul';
$lang['leads_canban_notes']                = 'Note: %s';
$lang['leads_canban_source']               = 'Sursă: %s';
$lang['lead_new_source']                   = 'Sursa nouă';
$lang['lead_sources']                      = 'Surse de lead';
$lang['lead_source']                       = 'Sursă de lead';
$lang['lead_source_lowercase']             = 'sursă de lead';
$lang['leads_sources_not_found']           = 'Nu au fost găsite surse de lead';
$lang['leads_sources_table_name']          = 'Numele sursei';
$lang['leads_source_add_edit_name']        = 'Numele sursei';
$lang['lead_new_status']                   = 'Noul statut de lead';
$lang['lead_status']                       = 'Starea de lead';
$lang['lead_status_lowercase']             = 'lead status';
$lang['leads_status_table_name']           = 'Numele de stare';
$lang['leads_status_add_edit_name']        = 'Numele de stare';
$lang['leads_status_add_edit_order']       = 'Ordin';
$lang['lead_statuses_not_found']           = 'Nu au fost găsite stări de conducători';
$lang['leads_search']                      = 'Oportunități de căutare';
$lang['leads_table_total']                 = 'Oportunități totale: %s';
$lang['leads_dt_name']                     = 'Nume';
$lang['leads_dt_email']                    = 'Email';
$lang['leads_dt_phonenumber']              = 'Telefon';
$lang['leads_dt_assigned']                 = 'atribuit';
$lang['leads_dt_status']                   = 'Status';
$lang['leads_dt_last_contact']             = 'Ultima persoană de contact';
$lang['lead_add_edit_name']                = 'Nume';
$lang['lead_add_edit_email']               = 'Adresa de email';
$lang['lead_add_edit_phonenumber']         = 'Telefon';
$lang['lead_add_edit_source']              = 'Sursă';
$lang['lead_add_edit_status']              = 'Starea de plumb';
$lang['lead_add_edit_assigned']            = 'atribuit';
$lang['lead_add_edit_datecontacted']       = 'Data contactată';
$lang['lead_add_edit_contacted_today']     = 'Contactat azi';
$lang['lead_add_edit_activity']            = 'Jurnalul de activitate';
$lang['lead_add_edit_notes']               = 'notițe';
$lang['lead_add_edit_add_note']            = 'Adauga notita';
$lang['lead_not_contacted']                = 'Nu am contactat acest motiv';
$lang['lead_add_edit_contacted_this_lead'] = 'Am luat legătura cu acest conducător';

# Misc
$lang['access_denied'] = 'Acces interzis';
$lang['prev']          = 'Anterior';
$lang['next']          = 'Următor';

# Datatables
$lang['dt_paginate_first']    = 'Primul';
$lang['dt_paginate_last']     = 'Ultimul';
$lang['dt_paginate_next']     = 'Următor';
$lang['dt_paginate_previous'] = 'Anterior';
$lang['dt_empty_table']       = 'Nu a fost găsit {0}';
$lang['dt_search']            = 'Căutare...';
$lang['dt_zero_records']      = 'Nu au fost găsite înregistrări care să se potrivească';
$lang['dt_loading_records']   = 'Se incarca...';
$lang['dt_length_menu']       = 'Afișați intrările _MENU_';
$lang['dt_info_filtered']     = '(filtered from _MAX_ total {0})';
$lang['dt_info_empty']        = 'Se afișează 0 la 0 din 0 {0}';
$lang['dt_info']              = 'Se afișează _START_ la _END_ din _TOTAL_ {0}';
$lang['dt_empty_table']       = '0 {0} găsite';
$lang['dt_sort_ascending']    = ' activați pentru a sorta coloana ascendentă';
$lang['dt_sort_descending']   = ' activați pentru a sorta coloana descrescătoare';

# Invoice Activity Log
$lang['user_sent_overdue_reminder'] = '%s a trimis factură memento restante';

# Weekdays
$lang['wd_monday']    = 'luni';
$lang['wd_tuesday']   = 'marţi';
$lang['wd_thursday']  = 'joi';
$lang['wd_wednesday'] = 'miercuri';
$lang['wd_friday']    = 'vineri';
$lang['wd_saturday']  = 'sâmbătă';
$lang['wd_sunday']    = 'duminică';

# Admin Left Sidebar
$lang['als_dashboard']             = 'Bord';
$lang['als_clients']               = 'Clienţii';
$lang['als_leads']                 = 'Oportunitati';
$lang['als_contracts']             = 'Contracte';
$lang['als_sales']                 = 'Vânzări';
$lang['als_staff']                 = 'Personal';
$lang['als_tasks']                 = 'Sarcini';
$lang['als_kb']                    = 'Bază de cunoștințe';
$lang['als_media']                 = 'Media';
$lang['als_reports']               = 'Rapoarte';
$lang['als_reports_sales_submenu'] = 'Vânzări';
$lang['als_reports_leads_submenu'] = 'Oportunitati';
$lang['als_kb_articles_submenu']   = 'Articolele KB';
$lang['als_utilities']             = 'Utilități';
$lang['als_announcements_submenu'] = 'Anunturi';
$lang['als_calendar_submenu']      = 'Calendar';
$lang['als_activity_log_submenu']  = 'Jurnalul de activitate';

# Admin Customizer Sidebar
$lang['acs_ticket_priority_submenu']           = 'Prioritatea tichetelor';
$lang['acs_ticket_statuses_submenu']           = 'Starea tichetelor';
$lang['acs_ticket_predefined_replies_submenu'] = 'Răspunsuri predefinite';
$lang['acs_ticket_services_submenu']           = 'Servicii';
$lang['acs_departments']                       = 'Departamente';
$lang['acs_leads']                             = 'Oportunitati';
$lang['acs_leads_sources_submenu']             = 'Surse';
$lang['acs_leads_statuses_submenu']            = 'Stările';
$lang['acs_sales_taxes_submenu']               = 'Ratele de impozitare';
$lang['acs_sales_currencies_submenu']          = 'Valute';
$lang['acs_sales_payment_modes_submenu']       = 'Moduri de plată';
$lang['acs_email_templates']                   = 'Șabloane de e-mail';
$lang['acs_roles']                             = 'Roluri';
$lang['acs_settings']                          = 'Setări';

# Tickets
$lang['new_ticket']                                          = 'Deschideți bilet nou';
$lang['tickets']                                             = 'Tichete';
$lang['ticket']                                              = 'Tichet';
$lang['ticket_lowercase']                                    = 'bilet';
$lang['support_tickets']                                     = 'Tichete de support';
$lang['support_ticket']                                      = 'Tichet de support';
$lang['ticket_settings_to']                                  = 'To';
$lang['ticket_settings_email']                               = 'Adresa de email';
$lang['ticket_settings_departments']                         = 'Departament';
$lang['ticket_settings_service']                             = 'Serviciu';
$lang['ticket_settings_priority']                            = 'Prioritate';
$lang['ticket_settings_subject']                             = 'Subiect';
$lang['ticket_settings_assign_to']                           = 'Alocați bilet (implicit este utilizatorul curent)';
$lang['ticket_add_body']                                     = 'Detalii problema';
$lang['ticket_add_attachments']                              = 'Fișiere atașate';
$lang['ticket_no_reply_yet']                                 = 'Nici un răspuns încă';
$lang['new_ticket_added_successfully']                       = 'Tichet #%s a fost adăugat cu succes';
$lang['replied_to_ticket_successfully']                      = 'A răspuns la bilet #%s cu succes';
$lang['ticket_settings_updated_successfully']                = 'Setările biletului s-au actualizat cu succes';
$lang['ticket_settings_updated_successfully_and_reassigned'] = 'Setările tichetelor s-au actualizat cu succes - reassigned la departament %s';
$lang['ticket_dt_subject']                                   = 'Subiect';
$lang['ticket_dt_department']                                = 'Departament';
$lang['ticket_dt_service']                                   = 'Serviciu';
$lang['ticket_dt_submitter']                                 = 'Client';
$lang['ticket_dt_status']                                    = 'Status';
$lang['ticket_dt_priority']                                  = 'Prioritate';
$lang['ticket_dt_last_reply']                                = 'Ultimul răspuns';
$lang['ticket_single_add_reply']                             = 'Adăugați un răspuns';
$lang['ticket_single_add_note']                              = 'Adauga notita';
$lang['ticket_single_other_user_tickets']                    = 'Alte tichete';
$lang['ticket_single_settings']                              = 'Setări';
$lang['ticket_single_priority']                              = 'Prioritate: %s';
$lang['ticket_single_last_reply']                            = 'Ultimul răspuns: %s';
$lang['ticket_single_ticket_note_by']                        = 'Notă biletului %s';
$lang['ticket_single_note_added']                            = 'Notă adăugată: %s';
$lang['ticket_single_change_status']                         = 'Schimba starea';
$lang['ticket_single_assign_to_me_on_update']                = 'Alocați-mi acest bilet automat';
$lang['ticket_single_insert_predefined_reply']               = 'Introduceți răspuns predefinit';
$lang['ticket_single_insert_knowledge_base_link']            = 'Introduceți linkul bazei de cunoștințe';
$lang['ticket_single_attachments']                           = 'Fișiere atașate';
$lang['ticket_single_add_response']                          = 'Adăugați răspuns';
$lang['ticket_single_note_heading']                          = 'Notă';
$lang['ticket_single_add_note']                              = 'Adauga notita';
$lang['ticket_settings_none_assigned']                       = 'Nici unul';
$lang['ticket_status_changed_successfully']                  = 'Starea tichetelor a fost modificată';
$lang['ticket_status_changed_fail']                          = 'Problemă Modificarea stării tichetelor';
$lang['ticket_staff_string']                                 = 'Personal';
$lang['ticket_client_string']                                = 'Client';
$lang['ticket_posted']                                       = 'Publicat: %s';
$lang['ticket_access_by_department_denied']                  = 'Nu aveți acces la acest bilet. Acest bilet aparține unui departament pe care nu îl alocați.';

# Staff
$lang['new_staff']                                     = 'Nou membru al personalului';
$lang['staff_members']                                 = 'Membrii personalului';
$lang['staff_member']                                  = 'Membru al personalului';
$lang['staff_member_lowercase']                        = 'membru al personalului';
$lang['staff_profile_updated']                         = 'Profilul dvs. a fost actualizat';
$lang['staff_old_password_incorrect']                  = 'Vechea dvs. parolă este incorectă';
$lang['staff_password_changed']                        = 'Parola dvs. a fost schimbată';
$lang['staff_problem_changing_password']               = 'Problemă în schimbarea parolei';
$lang['staff_profile_string']                          = 'Profil';
$lang['staff_cant_remove_main_admin']                  = 'Nu puteți elimina administratorul principal';
$lang['staff_cant_remove_yourself_from_admin']         = 'Nu puteți să vă eliminați rolul de administrator';
$lang['staff_dt_name']                                 = 'Numele complet';
$lang['staff_dt_email']                                = 'Email';
$lang['staff_dt_last_Login']                           = 'Ultima logare';
$lang['staff_dt_active']                               = 'Activ';
$lang['staff_add_edit_firstname']                      = 'Nume';
$lang['staff_add_edit_lastname']                       = 'Numele de familie';
$lang['staff_add_edit_email']                          = 'Email';
$lang['staff_add_edit_phonenumber']                    = 'Telefon';
$lang['staff_add_edit_facebook']                       = 'Facebook';
$lang['staff_add_edit_linkedin']                       = 'LinkedIn';
$lang['staff_add_edit_skype']                          = 'Skype';
$lang['staff_add_edit_departments']                    = 'Membrii departamentelor';
$lang['staff_add_edit_role']                           = 'Rol';
$lang['staff_add_edit_permissions']                    = 'Permisiuni';
$lang['staff_add_edit_administrator']                  = 'Administrator';
$lang['staff_add_edit_password']                       = 'Parola';
$lang['staff_add_edit_password_note']                  = 'Notă: dacă introduceți aceste câmpuri, parola va fi modificată pe acest membru.';
$lang['staff_add_edit_password_last_changed']          = 'Ultima parolă a fost modificată';
$lang['staff_add_edit_notes']                          = 'Notițe';
$lang['staff_add_edit_note_description']               = 'Notă descriere';
$lang['staff_notes_table_description_heading']         = 'Nota';
$lang['staff_notes_table_addedfrom_heading']           = 'Adăugat de la';
$lang['staff_notes_table_dateadded_heading']           = 'Data adaugata';
$lang['staff_admin_profile']                           = 'Acesta este profilul de admin';
$lang['staff_profile_notifications']                   = 'Notificări';
$lang['staff_profile_departments']                     = 'Departamente';
$lang['staff_edit_profile_image']                      = 'Imagine de profil';
$lang['staff_edit_profile_your_departments']           = 'Departamente';
$lang['staff_edit_profile_change_your_password']       = 'Schimbați-vă parola';
$lang['staff_edit_profile_change_old_password']        = 'Parola veche';
$lang['staff_edit_profile_change_new_password']        = 'Parolă Nouă';
$lang['staff_edit_profile_change_repeat_new_password'] = 'Repeta noua parola';

# Staff Tasks
$lang['new_task']                           = 'Sarcina noua';
$lang['tasks']                              = 'Sarcini';
$lang['task']                               = 'Sarcină';
$lang['task_lowercase']                     = 'sarcină';
$lang['comment_string']                     = 'cometariu';
$lang['task_marked_as_complete']            = 'Sarcina este marcată ca completă';
$lang['task_follower_removed']              = 'Urmărirea activității a fost eliminată cu succes';
$lang['task_assignee_removed']              = 'Solicitantul a fost eliminat cu succes';
$lang['task_no_assignees']                  = 'Nu sunt asociați pentru această sarcină';
$lang['task_no_followers']                  = 'Nu au urmăritori pentru această sarcină';
$lang['task_list_all']                      = 'Toate';
$lang['task_list_not_assigned']             = 'Nealocat';
$lang['task_list_duedate_passed']           = 'Perioada de expirare a termenului';
$lang['tasks_dt_name']                      = 'Nume';
$lang['task_single_priority']               = 'Prioritate';
$lang['task_single_start_date']             = 'Data de început';
$lang['task_single_due_date']               = 'Data scadentă';
$lang['task_single_finished']               = 'Terminat';
$lang['task_single_mark_as_complete']       = 'Marcați ca completă';
$lang['task_single_edit']                   = 'Editați';
$lang['task_single_delete']                 = 'Șterge';
$lang['task_single_assignees']              = 'cesionarii';
$lang['task_single_assignees_select_title'] = 'Atribuiți sarcină la';
$lang['task_single_followers']              = 'Urmaritori';
$lang['task_single_followers_select_title'] = 'Adaugă followers';
$lang['task_single_add_new_comment']        = 'Adauga comentariu';
$lang['task_add_edit_subject']              = 'Subiect';
$lang['task_add_edit_priority']             = 'Prioritate';
$lang['task_priority_low']                  = 'Scăzut';
$lang['task_priority_medium']               = 'Mediu';
$lang['task_priority_high']                 = 'Înalt';
$lang['task_priority_urgent']               = 'urgent';
$lang['task_add_edit_start_date']           = 'Data de început';
$lang['task_add_edit_due_date']             = 'Data scadentă';
$lang['task_add_edit_description']          = 'Descrierea sarcinii';

# Taxes
$lang['new_tax']           = 'Taxă nouă';
$lang['taxes']             = 'Impozite';
$lang['tax']               = 'Taxa';
$lang['tax_lowercase']     = 'taxa';
$lang['tax_dt_name']       = 'Numele taxei';
$lang['tax_dt_rate']       = 'Rata (procente)';
$lang['tax_add_edit_name'] = 'Numele taxei';
$lang['tax_add_edit_rate'] = 'Rata impozitului (procente)';
$lang['tax_edit_title']    = 'Editați taxa';
$lang['tax_add_title']     = 'Adăugați o nouă taxă';

# Ticket Statuses
$lang['new_ticket_status']            = 'Noul statut de bilet';
$lang['ticket_statuses']              = 'Starea tichetelor';
$lang['ticket_status']                = 'Starea tichetelor';
$lang['ticket_status_lowercase']      = 'starea tichetelor';
$lang['ticket_statuses_dt_name']      = 'Numele de stare a tichetelor';
$lang['no_ticket_statuses_found']     = 'Nu au fost găsite statute de tichete';
$lang['ticket_statuses_table_total']  = 'Total %s';
$lang['ticket_status_add_edit_name']  = 'Numele de stare a tichetelor';
$lang['ticket_status_add_edit_color'] = 'Alege culoarea';
$lang['ticket_status_add_edit_order'] = 'Ordine de stare';

# Todos
$lang['new_todo']                  = 'Nou pentru a face';
$lang['my_todos']                  = 'Obiectele mele';
$lang['todo']                      = 'Pentru a face articolul';
$lang['todo_lowercase']            = 'todo';
$lang['todo_status_changed']       = 'Todo Starea a fost modificată';
$lang['todo_add_title']            = 'Adăuga nou Todo';
$lang['add_new_todo_description']  = 'Descriere';
$lang['no_finished_todos_found']   = 'Nu s-au găsit niciun dosar finalizat';
$lang['no_unfinished_todos_found'] = 'Nu au fost găsite todos';
$lang['unfinished_todos_title']    = 'Neterminată de făcut\'s';
$lang['finished_todos_title']      = 'Ultimele terminat de făcut\'s';

# Utilities
$lang['utility_activity_log']                        = 'Jurnalul de activitate';
$lang['utility_activity_log_filter_by_date']         = 'Filtrați după dată';
$lang['utility_activity_log_dt_description']         = 'Descriere';
$lang['utility_activity_log_dt_date']                = 'Data';
$lang['utility_activity_log_dt_staff']               = 'Personal';
$lang['utility_calendar_new_event_title']            = 'Adăugați un eveniment nou';
$lang['utility_calendar_new_event_start_date']       = 'Data de început';
$lang['utility_calendar_new_event_end_date']         = 'Data de încheiere';
$lang['utility_calendar_new_event_make_public']      = 'Evenimentul public';
$lang['utility_calendar_event_added_successfully']   = 'Eveniment nou a fost adăugat cu succes';
$lang['utility_calendar_event_deleted_successfully'] = 'Evenimentul a fost șters';
$lang['utility_calendar_new_event_placeholder']      = 'Titlul evenimentului';

# Navigation
$lang['nav_notifications']          = 'Notificări';
$lang['nav_my_profile']             = 'Profilul meu';
$lang['nav_edit_profile']           = 'Editează profilul';
$lang['nav_logout']                 = 'Deconectare';
$lang['nav_no_notifications']       = 'Nu au fost găsite notificări';
$lang['nav_view_all_notifications'] = 'Vedeți toate notificările';
$lang['nav_notifications_tooltip']  = 'Vizualizați notificările';

# Footer
$lang['clients_copyright'] = 'Drepturi de autor %s';

# Contracts
$lang['clients_contracts']               = 'Contracte';
$lang['clients_contracts_dt_subject']    = 'Subiect';
$lang['clients_contracts_dt_start_date'] = 'Data de început';
$lang['clients_contracts_dt_end_date']   = 'Data de încheiere';

# Home
$lang['clients_quick_invoice_info']           = 'Facturi rapide Info';
$lang['clients_home_currency_select_tooltip'] = 'Trebuie să selectați moneda deoarece aveți facturi cu valută diferită';

# Invoices
$lang['clients_invoice_html_btn_download'] = 'Descarca';
$lang['clients_my_invoices']               = 'Facturi/Plati';
$lang['clients_invoice_dt_number']         = 'Factura fiscala #';
$lang['clients_invoice_dt_date']           = 'Data';
$lang['clients_invoice_dt_duedate']        = 'Data scadentă';
$lang['clients_invoice_dt_amount']         = 'Cantitate';
$lang['clients_invoice_dt_status']         = 'Stare';

# Profile
$lang['clients_profile_heading'] = 'Profil';

# Used for edit profile and register START
$lang['clients_firstname'] = 'Nume';
$lang['clients_lastname']  = 'Numele de familie';
$lang['clients_email']     = 'Adresa de email';
$lang['clients_company']   = 'Companie';
$lang['clients_vat']       = 'Număr CUI(Daca este cazul) ';
$lang['clients_phone']     = 'Telefon';
$lang['clients_country']   = 'Țară';
$lang['clients_city']      = 'Oraș';
$lang['clients_address']   = 'Adresa';
$lang['clients_zip']       = 'Zip';
$lang['clients_state']     = 'Stat';
# Used for edit profile and register END

$lang['clients_register_password']                    = 'Parola';
$lang['clients_register_password_repeat']             = 'Repeta parola';
$lang['clients_edit_profile_update_btn']              = 'Actualizați';
$lang['clients_edit_profile_change_password_heading'] = 'Schimbaţi parola';
$lang['clients_edit_profile_old_password']            = 'Parola veche';
$lang['clients_edit_profile_new_password']            = 'Parolă Nouă';
$lang['clients_edit_profile_new_password_repeat']     = 'Repeta parola';
$lang['clients_edit_profile_change_password_btn']     = 'Schimbaţi parola';
$lang['clients_profile_last_changed_password']        = 'Ultima parolă a fost modificată %s';

# Knowledge base
$lang['clients_knowledge_base']                    = 'Bază de cunoștințe';
$lang['clients_knowledge_base_articles_not_found'] = 'Nu s-au găsit articole de bază de cunoștințe';
$lang['clients_knowledge_base_find_useful']        = 'Ați găsit acest articol util?';
$lang['clients_knowledge_base_find_useful_yes']    = 'Da';
$lang['clients_knowledge_base_find_useful_no']     = 'Nu';
$lang['clients_article_only_1_vote_today']         = 'Puteți vota o dată în 24 de ore';
$lang['clients_article_voted_thanks_for_feedback'] = 'Vă mulțumim pentru feedback-ul dumneavoastră';

# Tickets
$lang['clients_ticket_open_subject']               = 'Deschide Tichet';
$lang['clients_ticket_open_departments']           = 'Departament';
$lang['clients_tickets_heading']                   = 'Tichete de support';
$lang['clients_ticket_open_service']               = 'Serviciu';
$lang['clients_ticket_open_priority']              = 'Prioritate';
$lang['clients_ticket_open_body']                  = 'Detalii Problema';
$lang['clients_ticket_attachments']                = 'Fișiere atașate';
$lang['clients_single_ticket_string']              = 'Tichet';
$lang['clients_single_ticket_replied']             = 'Răspuns: %s';
$lang['clients_single_ticket_information_heading'] = 'Informații despre tichete';
$lang['clients_tickets_dt_number']                 = 'Tichet #';
$lang['clients_tickets_dt_subject']                = 'Subiect';
$lang['clients_tickets_dt_department']             = 'Departament';
$lang['clients_tickets_dt_service']                = 'Serviciu';
$lang['clients_tickets_dt_status']                 = 'Stare';
$lang['clients_tickets_dt_last_reply']             = 'Ultimul răspuns';
$lang['clients_ticket_single_department']          = 'Departament: %s';
$lang['clients_ticket_single_submitted']           = 'Trimis: %s';
$lang['clients_ticket_single_status']              = 'Stare:';
$lang['clients_ticket_single_priority']            = 'Prioritate: %s';
$lang['clients_ticket_single_add_reply_btn']       = 'Adăugați un răspuns';
$lang['clients_ticket_single_add_reply_heading']   = 'Adăugați un răspuns la acest bilet';

# Login
$lang['clients_login_heading_no_register'] = 'Va rugam sa va logati';
$lang['clients_login_heading_register']    = 'Vă rugăm să vă logați sau să vă înregistrați';
$lang['clients_login_email']               = 'Adresa de email';
$lang['clients_login_password']            = 'Parola';
$lang['clients_login_remember']            = 'Amintește-ți de mine';
$lang['clients_login_login_string']        = 'Logare';

# Register
$lang['clients_register_string']  = 'Inregistreaza-te';
$lang['clients_register_heading'] = 'Inregistreaza-te';

# Navigation
$lang['clients_nav_login']     = 'Logare';
$lang['clients_nav_register']  = 'Inregistreaza-te';
$lang['clients_nav_invoices']  = 'Facturi/Plati';
$lang['clients_nav_contracts'] = 'Contracte';
$lang['clients_nav_kb']        = 'Bază de cunoștințe';
$lang['clients_nav_profile']   = 'Profil';
$lang['clients_nav_logout']    = 'Deconectare';

# Version 1.0.1
$lang['payment_receipt']                               = 'Plata chitante';
$lang['payment_for_string']                            = 'Plata pentru';
$lang['payment_date']                                  = 'Data de plată:';
$lang['payment_view_mode']                             = 'Mod de plată:';
$lang['payment_total_amount']                          = 'Valoare totală';
$lang['payment_table_invoice_number']                  = 'Număr de factură';
$lang['payment_table_invoice_date']                    = 'Data facturii';
$lang['payment_table_invoice_amount_total']            = 'Valoarea facturii';
$lang['payment_table_payment_amount_total']            = 'Suma de plată';
$lang['payments_table_transaction_id']                 = 'ID-ul de tranzacție: %s';
$lang['payment_getaway_token_not_found']               = 'Tokenul nu a fost găsit';
$lang['online_payment_recorded_success']               = 'Plata a fost înregistrată cu succes';
$lang['online_payment_recorded_success_fail_database'] = 'Plata este de succes, dar nu a reușit să introducă plata către baza de date, contactați administratorul';

# Leads
$lang['lead_convert_to_client']                = 'Conversia la client';
$lang['lead_convert_to_email']                 = 'Email';
$lang['lead_convert_to_client_firstname']      = 'Nume';
$lang['lead_convert_to_client_lastname']       = 'Numele de familie';
$lang['lead_email_already_exists']             = 'Solicitarea de e-mail există deja în datele clienților';
$lang['lead_to_client_base_converted_success'] = 'Lead convertit la client cu succes';
$lang['lead_have_client_profile']              = 'Acest conducător are profilul clientului.';
$lang['lead_converted_edit_client_profile']    = 'Editează profilul';

# Invoices
$lang['view_invoice_as_customer_tooltip']                                     = 'Afișați factura ca client';
$lang['invoice_add_edit_recurring']                                           = 'Factura recurenta?';
$lang['invoice_add_edit_recurring_no']                                        = 'Nu';
$lang['invoice_add_edit_recurring_month']                                     = 'Fiecare lună %s';
$lang['invoice_add_edit_recurring_months']                                    = 'Fiecare lună %s';
$lang['invoices_list_all']                                                    = 'Toate';
$lang['invoices_list_not_have_payment']                                       = 'Facturi fără înregistrări de plată';
$lang['invoices_list_recurring']                                              = 'Facturi recurente';
$lang['invoices_list_made_payment_by']                                        = 'Plata efectuată prin %s';
$lang['invoices_create_invoice_from_recurring_only_on_paid_invoices']         = 'Creați o factură nouă din factura recurentă numai dacă factura este plătită cu statutul?';
$lang['invoices_create_invoice_from_recurring_only_on_paid_invoices_tooltip'] = 'Dacă acest câmp este setat la YES iar facturile recurente nu sunt cu status PAID, noua factură NU va fi creată';
$lang['view_invoice_pdf_link_pay']                                            = 'Plătiți factura';

# Payment modes
$lang['payment_mode_add_edit_description']         = 'Conturi bancare / Descriere';
$lang['payment_mode_add_edit_description_tooltip'] = 'Puteți seta aici informații despre conturile bancare. Va fi afișat în factura HTML';
$lang['payment_modes_dt_description']              = 'Conturi bancare / Descriere';
$lang['payment_modes_add_edit_announcement']       = 'Notă: Modurile de plată enumerate mai jos sunt modurile offline. Modurile de plată online pot fi configurate în Setup -> Settings -> Gateways de plată';
$lang['payment_mode_add_edit_active']              = 'Activ';
$lang['payment_modes_dt_active']                   = 'Activ';

# Contracts
$lang['contract_not_found'] = 'Contractul nu a fost găsit. Poate fi șters, verificați jurnalul de activitate';

# Settings
$lang['setting_bar_heading']                               = 'Configurație';
$lang['settings_group_online_payment_modes']               = 'Plăcile de plată';
$lang['settings_paymentmethod_mode_label']                 = 'Eticheta';
$lang['settings_paymentmethod_active']                     = 'Activ';
$lang['settings_paymentmethod_currencies']                 = 'Monede (separate prin virgulă)';
$lang['settings_paymentmethod_testing_mode']               = 'Activați modul de testare';
$lang['settings_paymentmethod_paypal_username']            = 'PayPal API Nume de utilizator';
$lang['settings_paymentmethod_paypal_password']            = 'PayPal API Parola';
$lang['settings_paymentmethod_paypal_signature']           = 'API Semnătură';
$lang['settings_paymentmethod_stripe_api_secret_key']      = 'Dunga API Cheie secreta';
$lang['settings_paymentmethod_stripe_api_publishable_key'] = 'Dunga Pcheie publicabilă';
$lang['settings_limit_top_search_bar_results']             = 'Limitează rezultatele din bara de căutare de la';

## Clients
$lang['client_phonenumber'] = 'Telefon';

# Main Clients
$lang['clients_register']                          = 'Inregistreaza-te';
$lang['clients_profile_updated']                   = 'Profilul dvs. a fost actualizat';
$lang['clients_successfully_registered']           = 'Multumim pentru inregistrare';
$lang['clients_account_created_but_not_logged_in'] = 'Contul dvs. a fost creat, dar nu sunteți conectat automat la sistemul nostru. Încercați să vă conectați';

# Tickets
$lang['clients_tickets_heading'] = 'Tichete de support';

# Payments
$lang['payment_for_invoice'] = 'Plata pentru factură';
$lang['payment_total']       = 'Total: %s';

# Invoice
$lang['invoice_html_online_payment']             = 'Plata online';
$lang['invoice_html_online_payment_button_text'] = 'Plătește acum';
$lang['invoice_html_payment_modes_not_selected'] = 'Selectați modul de plată';
$lang['invoice_html_amount_blank']               = 'Suma totală cant să fie goală sau zero';
$lang['invoice_html_offline_payment']            = 'Plata offline';
$lang['invoice_html_amount']                     = 'Cantitate';
# Version 1.0.2
# DataTables
$lang['dt_button_column_visibility'] = 'Vizibilitate';
$lang['dt_button_reload']            = 'Reîncarcă';
$lang['dt_button_excel']             = 'Excel';
$lang['dt_button_csv']               = 'CSV';
$lang['dt_button_pdf']               = 'PDF';
$lang['dt_button_print']             = 'Printeaza';
$lang['is_not_active_export']        = 'Nu';
$lang['is_active_export']            = 'Da';

# Invoice
$lang['invoice_add_edit_advanced_options']                = 'Opțiuni avansate';
$lang['invoice_add_edit_allowed_payment_modes']           = 'Moduri de plată permise pentru această factură';
$lang['invoice_add_edit_recurring_invoices_from_invoice'] = 'Creau facturi din această factură recurente';
$lang['invoice_add_edit_no_payment_modes_found']          = 'Nu au fost găsite moduri de plată.';
$lang['invoice_html_total_pay']                           = 'Total: %s';

# Email templates
$lang['email_templates_table_heading_name'] = 'Nume șablon';

# General
$lang['discount_type']            = 'Tipul de reducere';
$lang['discount_type_after_tax']  = 'După impozitare';
$lang['discount_type_before_tax'] = 'Inainte de taxare';
$lang['terms_and_conditions']     = 'termeni si conditii';
$lang['reference_no']             = 'Referinţă #';
$lang['no_discount']              = 'Nici o reducere';
$lang['view_stats_tooltip']       = 'Vizualizați statistici rapide';

# Clients
$lang['zip_from_date']            = 'Din data:';
$lang['zip_to_date']              = 'La zi:';
$lang['client_zip_payments']      = 'ZIP Plăţi';
$lang['client_zip_invoices']      = 'ZIP Facturi';
$lang['client_zip_estimates']     = 'ZIP Estimări';
$lang['client_zip_status']        = 'Stare';
$lang['client_zip_status_all']    = 'Toate';
$lang['client_zip_payment_modes'] = 'Plata efectuată de';
$lang['client_zip_no_data_found'] = 'Nu a fost găsit %s';

# Payments
$lang['payment_mode']         = 'Mod de plată';
$lang['payment_view_heading'] = 'Plată';

# Settings
$lang['settings_allow_payment_amount_to_be_modified']               = 'Permiteți clientului să modifice suma de plată (pentru plățile online)';
$lang['settings_delete_only_on_last_invoice']                       = 'Șterge factura permisă numai la ultima factură';
$lang['settings_sales_estimate_prefix']                             = 'Prefixul numărului de estimare';
$lang['settings_sales_next_estimate_number']                        = 'Estimarea următoare Numărul';
$lang['settings_sales_next_estimate_number_tooltip']                = 'Setați acest câmp la 1 dacă doriți să începeți de la început';
$lang['settings_sales_decrement_estimate_number_on_delete']         = 'Numărul estimării numărului de eroare la ștergere';
$lang['settings_sales_decrement_estimate_number_on_delete_tooltip'] = 'Doriți să reduceți numărul estimat când ultima estimare este ștearsă? echiv. Dacă este setată această opțiune la YES și înainte de a șterge estimarea următorul număr estimat este 15, următorul număr de estimare va scădea la 14. Dacă este setat la NU, numărul va rămâne la 15. Dacă aveți setare ștergeți numai din ultima estimare la NU trebuie să setați această opțiune la NU prea pentru a nu menține următorul număr de estimare neschimbat.';
$lang['settings_sales_estimate_number_format']                      = 'Estimați formatul numărului';
$lang['settings_sales_estimate_number_format_year_based']           = 'Anul bazat';
$lang['settings_sales_estimate_number_format_number_based']         = 'Pe baza numărului (000001)';
$lang['settings_delete_only_on_last_estimate']                      = 'Ștergeți estimarea permisă numai la ultima factură';
$lang['settings_send_test_email_heading']                           = 'Trimiteți Email de încercare';
$lang['settings_send_test_email_subheading']                        = 'Trimiteți un e-mail de test pentru a vă asigura că setările SMTP sunt setate corect.';
$lang['settings_send_test_email_string']                            = 'Adresa de email';
$lang['settings_smtp_settings_heading']                             = 'SMTP Setări';
$lang['settings_smtp_settings_subheading']                          = 'Configurați e-mailul principal';
$lang['settings_sales_heading_general']                             = 'General';
$lang['settings_sales_heading_invoice']                             = 'Factura fiscala';
$lang['settings_sales_heading_estimates']                           = 'Estimări';
$lang['settings_sales_cron_invoice_heading']                        = 'Factura fiscala';

# Tasks
$lang['tasks_dt_datestart'] = 'Data de început';

# Invoice General
$lang['invoice_discount'] = 'Reducere';

# Settings
$lang['settings_rtl_support_admin']                                   = 'RTL Zona administratorului (din dreapta la stânga)';
$lang['settings_rtl_support_client']                                  = 'RTL Zona clienților (din dreapta la stânga)';
$lang['settings_estimate_auto_convert_to_invoice_on_client_accept']   = 'Convertiți automat estimarea la factură după acceptarea clientului';
$lang['settings_exclude_estimate_from_client_area_with_draft_status'] = 'Excludeți estimările cu starea de proiect din zona clienților';

# Months
$lang['January']   = 'ianuarie';
$lang['February']  = 'februarie';
$lang['March']     = 'Martie';
$lang['April']     = 'Aprilie';
$lang['May']       = 'Mai';
$lang['June']      = 'Iunie';
$lang['July']      = 'Iulie';
$lang['August']    = 'August';
$lang['September'] = 'Septembrie';
$lang['October']   = 'Octombrie';
$lang['November']  = 'Noiembrie';
$lang['December']  = 'Decembrie';

# Time ago function translate
$lang['time_ago_just_now']  = 'Chiar acum';
$lang['time_ago_minute']    = 'acum un minut';
$lang['time_ago_minutes']   = '%s minute în urmă';
$lang['time_ago_hour']      = 'acum o oră';
$lang['time_ago_hours']     = '%s ore în urmă';
$lang['time_ago_yesterday'] = 'ieri';
$lang['time_ago_days']      = '%s zile în urmă';
$lang['time_ago_week']      = 'acum o saptamana';
$lang['time_ago_weeks']     = '%s săptămâni în urma';
$lang['time_ago_month']     = 'o lună în urmă';
$lang['time_ago_months']    = '%s cu luni în urmă';
$lang['time_ago_year']      = 'acum un an';
$lang['time_ago_years']     = '%s cu ani în urmă';

# Estimates
$lang['estimates']                                = 'Estimări';
$lang['estimate']                                 = 'Estimare';
$lang['estimate_lowercase']                       = 'estima';
$lang['create_new_estimate']                      = 'Creați o nouă estimare';
$lang['view_estimate']                            = 'Vizualizați estimarea';
$lang['estimate_sent_to_client_success']          = 'Estimarea este trimisă cu succes clientului';
$lang['estimate_sent_to_client_fail']             = 'Problemă la trimiterea estimării';
$lang['estimate_view']                            = 'Vizualizați estimarea';
$lang['estimate_select_customer']                 = 'Client';
$lang['estimate_add_edit_number']                 = 'Estimarea numărului';
$lang['estimate_add_edit_date']                   = 'Data estimării';
$lang['estimate_add_edit_expirydate']             = 'Data expirarii';
$lang['estimate_add_edit_currency']               = 'Valută';
$lang['estimate_add_edit_client_note']            = 'Nota clientului';
$lang['estimate_add_edit_admin_note']             = 'Admin Note';
$lang['estimates_toggle_table_tooltip']           = 'Schimbați tabelul';
$lang['estimate_add_edit_advanced_options']       = 'Opțiuni avansate';
$lang['estimate_to']                              = 'To';
$lang['estimates_list_all']                       = 'Toate';
$lang['estimate_invoiced_date']                   = 'Factura estimata pe %s';
$lang['edit_estimate_tooltip']                    = 'Editați estimarea';
$lang['delete_estimate_tooltip']                  = 'Ștergeți estimarea';
$lang['estimate_sent_to_email_tooltip']           = 'Trimiteți la e-mail';
$lang['estimate_already_send_to_client_tooltip']  = 'Această estimare este deja trimisă clientului %s';
$lang['estimate_view_activity_tooltip']           = 'Jurnalul de activitate';
$lang['estimate_send_to_client_modal_heading']    = 'Trimiteți estimarea către client';
$lang['estimate_send_to_client_attach_pdf']       = 'Atașați estimarea PDF';
$lang['estimate_send_to_client_preview_template'] = 'Examinați șablonul de e-mail';
$lang['estimate_dt_table_heading_number']         = '# Estimare';
$lang['estimate_dt_table_heading_date']           = 'Data';
$lang['estimate_dt_table_heading_client']         = 'Client';
$lang['estimate_dt_table_heading_expirydate']     = 'Data expirarii';
$lang['estimate_dt_table_heading_amount']         = 'Cantitate';
$lang['estimate_dt_table_heading_status']         = 'Stare';
$lang['estimate_convert_to_invoice']              = 'Conversia în factură';

# Clients
$lang['client_payments_tab'] = 'plăţile';

# Estimate General
$lang['estimate_pdf_heading']            = 'ESTIMA';
$lang['estimate_table_item_heading']     = 'Articol';
$lang['estimate_table_quantity_heading'] = 'Cantitate';
$lang['estimate_table_rate_heading']     = 'Rată';
$lang['estimate_table_tax_heading']      = 'Taxa';
$lang['estimate_table_amount_heading']   = 'Cantitate';
$lang['estimate_subtotal']               = 'Sub total';
$lang['estimate_adjustment']             = 'Ajustare';
$lang['estimate_discount']               = 'Reducere';
$lang['estimate_total']                  = 'Totalul';
$lang['estimate_to']                     = 'Către';
$lang['estimate_data_date']              = 'Data estimării';
$lang['estimate_data_expiry_date']       = 'Data expirarii';
$lang['estimate_note']                   = 'Notă:';
$lang['estimate_status_draft']           = 'Draft';
$lang['estimate_status_sent']            = 'Trimise';
$lang['estimate_status_declined']        = 'Refuzate';
$lang['estimate_status_accepted']        = 'Acceptate';
$lang['estimate_status_expired']         = 'Expirate';
$lang['estimate_note']                   = 'Nota:';

## Clients
$lang['clients_estimate_dt_number']             = 'Estimare #';
$lang['clients_estimate_dt_date']               = 'Data';
$lang['clients_estimate_dt_duedate']            = 'Data expirarii';
$lang['clients_estimate_dt_amount']             = 'Cantitate';
$lang['clients_estimate_dt_status']             = 'Stare';
$lang['clients_nav_estimates']                  = 'Estimări';
$lang['clients_decline_estimate']               = 'Refuz';
$lang['clients_accept_estimate']                = 'Accept';
$lang['clients_my_estimates']                   = 'Estimări';
$lang['clients_estimate_invoiced_successfully'] = 'Vă mulțumim că ați acceptat estimarea. Consultați factura creată pentru estimare';
$lang['clients_estimate_accepted_not_invoiced'] = ' Vă mulțumim că ați acceptat această estimare';
$lang['clients_estimate_declined']              = 'Estimarea a scăzut. Puteți accepta estimarea oricând înainte de data expirării';
$lang['clients_estimate_failed_action']         = 'Nu a reușit să se ia măsuri pentru această estimare';
$lang['client_add_edit_profile']                = 'Profil';

# Custom Fields
$lang['custom_field']                          = 'Câmp particularizat';
$lang['custom_field_lowercase']                = 'câmp particularizat';
$lang['custom_fields']                         = 'câmpuri customizate';
$lang['new_custom_field']                      = 'Noul câmp personalizat';
$lang['custom_field_name']                     = 'Numele domeniului';
$lang['custom_field_add_edit_type']            = 'Numele domeniului';
$lang['custom_field_add_edit_belongs_top']     = 'Câmpul aparține';
$lang['custom_field_add_edit_options']         = 'Optiuni';
$lang['custom_field_add_edit_options_tooltip'] = 'Utilizați numai pentru tipurile Selectare, Verificare cutii. Populați câmpul separând opțiunile prin comă. echiv. mere, portocale, banane';
$lang['custom_field_add_edit_order']           = 'Comanda';
$lang['custom_field_dt_field_to']              = 'Apartine';
$lang['custom_field_dt_field_name']            = 'Nume';
$lang['custom_field_dt_field_type']            = 'Tipul';
$lang['custom_field_add_edit_active']          = 'Activ';
$lang['custom_field_add_edit_disabled']        = 'invalid';

# Ticket replies
$lang['ticket_reply'] = 'Tichet de răspuns';

# Admin Customizer Sidebar
$lang['asc_custom_fields'] = 'câmpuri customizate';

# Contracts
$lang['contract_types']           = 'Tipuri de contracte';
$lang['contract_type']            = 'Tipul contractului';
$lang['new_contract_type']        = 'Noul tip de contract';
$lang['contract_type_lowercase']  = 'contract';
$lang['contract_type_name']       = 'Nume';
$lang['contract_types_list_name'] = 'Tipul de contract';

# Customizer Menu
$lang['acs_contracts']      = 'Contracte';
$lang['acs_contract_types'] = 'Tipul de contract';

# Version 1.0.4
# Invoice Items
$lang['invoice_item_long_description'] = 'descriere lungă';

# Customers
$lang['clients_list_phone']                = 'Telefon';
$lang['client_expenses_tab']               = 'Cheltuieli';
$lang['customers_summary']                 = 'Sumarul clienților';
$lang['customers_summary_active']          = 'Contacte active';
$lang['customers_summary_inactive']        = 'Contacte inactive';
$lang['customers_summary_logged_in_today'] = 'Persoane conectate astăzi';

# Authentication
$lang['admin_auth_forgot_password_email']     = 'Adresa de email';
$lang['admin_auth_forgot_password_heading']   = 'Aţi uitat parola';
$lang['admin_auth_login_heading']             = 'Logare';
$lang['admin_auth_login_email']               = 'Adresa de email';
$lang['admin_auth_login_password']            = 'Parola';
$lang['admin_auth_login_remember_me']         = 'Tine-ma minte';
$lang['admin_auth_login_button']              = 'Logare';
$lang['admin_auth_login_fp']                  = 'Aţi uitat parola?';
$lang['admin_auth_reset_password_heading']    = 'Reseteaza parola';
$lang['admin_auth_reset_password']            = 'Parola';
$lang['admin_auth_reset_password_repeat']     = 'Repeta parola';
$lang['admin_auth_invalid_email_or_password'] = 'E-mail nevalidă sau parola';
$lang['admin_auth_inactive_account']          = 'Cont inactiv';

# Calender
$lang['calendar_estimate']          = 'Estimare';
$lang['calendar_invoice']           = 'Factura fiscala';
$lang['calendar_contract']          = 'Contract';
$lang['calendar_customer_reminder'] = 'Reminderul clientului';
$lang['calendar_event']             = 'Eveniment';
$lang['calendar_task']              = 'Sarcină';

# Leads
$lang['lead_edit_delete_tooltip'] = 'Ștergeți lead';
$lang['lead_attachments']         = 'Fișiere atașate';

# Admin Customizer Sidebar
$lang['acs_finance'] = 'Finanţa';

# Settings
$lang['settings_show_sale_agent_on_invoices']       = 'Afișați agentul de vânzări pe factură';
$lang['settings_show_sale_agent_on_estimates']      = 'Afișați agentul de vânzări pe Estimare';
$lang['settings_predefined_predefined_term']        = 'Termeni și condiții predefinite';
$lang['settings_predefined_clientnote']             = 'Nota clientului predefinită';
$lang['settings_custom_pdf_logo_image_url']         = 'Adresa URL a paginii Logo a firmei personalizate';
$lang['settings_custom_pdf_logo_image_url_tooltip'] = 'Probabil că veți avea probleme cu imaginile PNG cu transparență care sunt tratate diferit în funcție de versiunea php-imagick sau php-gd folosită. Încercați să actualizați php-imagick și să dezactivați php-gd
. Dacă lăsați acest câmp necompletat, logo-ul încărcat va fi utilizat.';

# General
$lang['sale_agent_string']               = 'Agent de vânzări';
$lang['amount_display_in_base_currency'] = 'Suma este afișată în moneda dvs. de bază - utilizați acest raport numai dacă utilizați o monedă pentru plăți și cheltuieli.';
# Leads
$lang['leads_summary'] = 'Leads rezumat';

# Contracts
$lang['contract_value']                       = 'Valoarea contractului';
$lang['contract_trash']                       = 'Cos de Gunoi';
$lang['contracts_view_trash']                 = 'Vizualizați coșul de gunoi';
$lang['contracts_view_all']                   = 'totul';
$lang['contracts_view_exclude_trashed']       = 'Excluderea Contractelor Trashed';
$lang['contract_value_tooltip']               = 'Valuta de bază va fi utilizată.';
$lang['contract_trash_tooltip']               = 'Dacă adăugați un contract la coșul de gunoi, nu va fi afișat pe partea clientului, nu va fi inclus în grafic și alte statistici și, de asemenea, va fi afișat implicit când veți lista toate contractele.';
$lang['contract_summary_active']              = 'Activ';
$lang['contract_renew_heading']               = 'Reînnoire contract';
$lang['contract_summary_heading']             = 'Rezumatul contractului';
$lang['contract_summary_expired']             = 'Expirat';
$lang['contract_summary_about_to_expire']     = 'Aproape expira';
$lang['contract_summary_recently_added']      = 'Adaugat recent';
$lang['contract_summary_trash']               = 'Cos de Gunoi';
$lang['contract_summary_by_type']             = 'Tip de contracte';
$lang['contract_summary_by_type_value']       = 'Contracte Valoare după tip';
$lang['contract_renewed_successfully']        = 'Contractul a fost reînnoit cu succes';
$lang['contract_renewed_fail']                = 'Problemă la reînnoirea contractului. Contactați administratorul';
$lang['no_contract_renewals_found']           = 'Renewals pentru acest contract nu a fost găsit';
$lang['no_contract_renewals_history_heading'] = 'Istoricul reînnoirii contractului';
$lang['contract_renewed_by']                  = '%s a reînnoit acest contract';
$lang['contract_renewal_deleted']             = 'Reînnoirea a fost ștearsă cu succes';
$lang['contract_renewal_delete_fail']         = 'Nu sa reușit ștergerea reînnoirii contractului. Contactați administratorul';
$lang['contract_renewal_new_value']           = 'Noua valoare a contractului: %s';
$lang['contract_renewal_old_value']           = 'Vechea valoare contractuală: %s';
$lang['contract_renewal_new_start_date']      = 'Nouă dată de începere: %s';
$lang['contract_renewal_old_start_date']      = 'Vechea dată de începere a contractului a fost: %s';
$lang['contract_renewal_new_end_date']        = 'Data de încheiere nouă: %s';
$lang['contract_renewal_old_end_date']        = 'Vechea dată de încheiere a contractului a fost: %s';
$lang['contract_attachment']                  = 'Atașament';

# Admin Aside Menu
$lang['als_expenses']           = 'Cheltuieli';
$lang['als_reports_expenses']   = 'Cheltuieli';
$lang['als_expenses_vs_income'] = 'Cheltuieli vs. Venituri';

# Invoices
$lang['invoice_attach_file']           = 'Ataseaza fisier';
$lang['invoice_mark_as_sent']          = 'Marchează ca Trimis';
$lang['invoice_marked_as_sent']        = 'Factura marcată ca fiind trimisă cu succes';
$lang['invoice_marked_as_sent_failed'] = 'Nu a fost marcată factura așa cum a fost trimisă';

# Payments
$lang['payment_transaction_id'] = 'ID-ul de tranzacție';

# Expenses
$lang['acs_expense_categories']                       = 'Categorii de cheltuieli';
$lang['expense_category']                             = 'Categorie de cheltuieli';
$lang['expense_category_lowercase']                   = 'categoria de cheltuieli';
$lang['new_expense']                                  = 'Record Expense';
$lang['expense_add_edit_name']                        = 'Numele Categoriei';
$lang['expense_add_edit_description']                 = 'Descriere categorie';
$lang['expense_categories']                           = 'Categorii de cheltuieli';
$lang['new_expense_category']                         = 'Categorie noua';
$lang['dt_expense_description']                       = 'Descriere';
$lang['expense']                                      = 'Cheltuială';
$lang['expenses']                                     = 'Cheltuieli';
$lang['expense_lowercase']                            = 'cheltuială';
$lang['expense_add_edit_customer']                    = 'Client';
$lang['expense_add_edit_note']                        = 'Nota';
$lang['expense_add_edit_date']                        = 'Data Expunerii';
$lang['expense_add_edit_amount']                      = 'Cantitate';
$lang['expense_add_edit_billable']                    = 'facturabil';
$lang['expense_add_edit_attach_receipt']              = 'Atașați chitanța';
$lang['expense_add_edit_reference_no']                = 'Referinţă #';
$lang['expense_receipt']                              = 'Cheltuielile de primire';
$lang['expense_receipt_lowercase']                    = 'cheltuieli de primire';
$lang['expense_dt_table_heading_category']            = 'Categorie';
$lang['expense_dt_table_heading_amount']              = 'Cantitate';
$lang['expense_dt_table_heading_date']                = 'Data';
$lang['expense_dt_table_heading_reference_no']        = 'Referinţă #';
$lang['expense_dt_table_heading_customer']            = 'Client';
$lang['expense_dt_table_heading_payment_mode']        = 'Metoda de plata';
$lang['expense_converted_to_invoice']                 = 'Cheltuielile s-au transformat cu succes în factură';
$lang['expense_converted_to_invoice_fail']            = 'Nu a reușit să se transforme această cheltuială în jurnalul de eroare al facturii.';
$lang['expense_copy_success']                         = 'Cheltuielile sunt copiate cu succes.';
$lang['expense_copy_fail']                            = 'Copierea greșită nu a reușit. Verificați câmpurile obligatorii și încercați din nou';
$lang['expenses_list_all']                            = 'Totul';
$lang['expenses_list_billable']                       = 'facturabil';
$lang['expenses_list_non_billable']                   = 'Fără facturare';
$lang['expenses_list_invoiced']                       = 'facturată';
$lang['expenses_list_unbilled']                       = 'Nu este facturat';
$lang['expenses_list_recurring']                      = 'recurent';
$lang['expense_invoice_delete_not_allowed']           = 'Nu puteți să ștergeți această cheltuială. Cheltuielile sunt deja facturate.';
$lang['expense_convert_to_invoice']                   = 'Conversia la factură';
$lang['expense_edit']                                 = 'Editați cheltuielile';
$lang['expense_delete']                               = 'Sterge';
$lang['expense_copy']                                 = 'Copiaza';
$lang['expense_invoice_not_created']                  = 'Factura nu a fost creată';
$lang['expense_billed']                               = 'facturează';
$lang['expense_not_billed']                           = 'Factura nu este plătită';
$lang['expense_customer']                             = 'Client';
$lang['expense_note']                                 = 'Nota:';
$lang['expense_date']                                 = 'Data:';
$lang['expense_ref_noe']                              = 'Ref #:';
$lang['expense_amount']                               = 'Cantitate:';
$lang['expense_recurring_indicator']                  = 'recurent';
$lang['expense_already_invoiced']                     = 'Această cheltuială este deja facturată';
$lang['expense_recurring_auto_create_invoice']        = 'Creare factură automată';
$lang['expense_recurring_send_custom_on_renew']       = 'Trimiteți factura la adresa de e-mail a clientului atunci când cheltuiala este re-creată';
$lang['expense_recurring_autocreate_invoice_tooltip'] = 'Dacă această opțiune este bifată, factura pentru client va fi creată automat atunci când cheltuielile vor fi reînnoite.';
$lang['expenses_yearly_by_categories']                = 'Cheltuieli anuale pe categorii';
$lang['total_expenses_for']                           = 'Cheltuieli totale pentru'; // an
$lang['expenses_report_for']                          = 'Cheltuieli pentru'; // an

# Custom fields
$lang['custom_field_required']    = 'Necesar';
$lang['custom_field_show_on_pdf'] = 'Afișați pe PDF';
$lang['custom_field_leads']       = 'Leads';
$lang['custom_field_customers']   = 'Clienti';
$lang['custom_field_staff']       = 'Personal';
$lang['custom_field_contracts']   = 'Contracte';
$lang['custom_field_tasks']       = 'Sarcini';
$lang['custom_field_expenses']    = 'Cheltuieli';
$lang['custom_field_invoice']     = 'Factura fiscala';
$lang['custom_field_estimate']    = 'Estimare';

# Tickets
$lang['ticket_single_private_staff_notes'] = 'Note personale ale personalului';

# Business News
$lang['business_news'] = 'Știri de afaceri';

# Navigation
$lang['nav_todo_items'] = 'Articole de facut';

# Contracts
$lang['clients_contracts_type'] = 'Tipul contractului';

# Version 1.0.5
# General
$lang['no_tax']                              = 'Fara taxa';
$lang['numbers_not_formatted_while_editing'] = 'Rata din câmpul de introducere nu este formatată în timp ce editați / adăugați elementul și nu trebuie să rămână formatată, nu încercați să o formatați manual aici.';
# Contracts
$lang['contracts_view_expired']         = 'Expirat';
$lang['contracts_view_without_dateend'] = 'Contracte fără data sfârșitului';

# Email Templates
$lang['email_template_contracts_fields_heading'] = 'Contracte';

# Invoices General
$lang['invoice_estimate_general_options'] = 'Optiuni generale';
$lang['invoice_table_item_description']   = 'Descriere';
$lang['invoice_recurring_indicator']      = 'Recurent';

# Estimates
$lang['estimate_convert_to_invoice_successfully'] = 'Estimați convertit la factură cu succes';
$lang['estimate_table_item_description']          = 'Descriere';

# Version 1.0.6
# Invoices
# Currencies
$lang['cant_delete_base_currency'] = 'Nu puteți să ștergeți moneda de bază. Trebuie să alocați noua monedă de bază ștergeți acest lucru.';
$lang['invoice_copy']              = 'Copiați factura';
$lang['invoice_copy_success']      = 'Factura copiată cu succes';
$lang['invoice_copy_fail']         = 'Copierea facturii nu a reușit';
$lang['invoice_due_after_help']    = 'Setați zero pentru a evita calculul';
$lang['show_shipping_on_invoice']  = 'Afișați detaliile de expediere în factură';

# Estimates
$lang['show_shipping_on_estimate']         = 'Afișați detaliile de expediere în estimare';
$lang['is_invoiced_estimate_delete_error'] = 'Această estimare este facturată. Nu puteți să ștergeți estimarea';

# Customers & Invoices / Estimates
$lang['ship_to']                            = 'Îmbarca spre';
$lang['customer_profile_details']           = 'Detalii Client';
$lang['billing_shipping']                   = 'Facturare și expediere';
$lang['billing_address']                    = 'Adresa De Facturare';
$lang['shipping_address']                   = 'Adresa de transport';
$lang['billing_street']                     = 'Stradă';
$lang['billing_city']                       = 'Oras';
$lang['billing_state']                      = 'Stat';
$lang['billing_zip']                        = 'Cod de postal';
$lang['billing_country']                    = 'Tara';
$lang['shipping_street']                    = 'Strada';
$lang['shipping_city']                      = 'Oras';
$lang['shipping_state']                     = 'Stat';
$lang['shipping_zip']                       = 'Cod Postal';
$lang['shipping_country']                   = 'Tara';
$lang['get_shipping_from_customer_profile'] = 'Obțineți detalii de expediere din profilul clientului';

# Customer
$lang['customer_default_currency']                             = 'Valuta prestabilită';
$lang['customer_update_address_info_on_invoices']              = 'Actualizați informațiile de expediere / facturare pentru toate facturile / estimările anterioare';
$lang['customer_update_address_info_on_invoices_help']         = 'Dacă bifați acest câmp, informațiile de expediere și de facturare vor fi actualizate la toate facturile și estimările. Notă: Facturile cu starea plătită nu vor fi afectate.';
$lang['setup_google_api_key_customer_map']                     = 'Configurați cheia api pentru a vizualiza harta clientului';
$lang['customer_attachments_file']                             = 'Fişier';
$lang['client_send_set_password_email']                        = 'Trimiteți e-mailul cu parolă';
$lang['customer_billing_same_as_profile']                      = 'La fel ca informațiile despre clienți';
$lang['customer_billing_copy']                                 = 'Copiați adresa de facturare';
$lang['customer_map']                                          = 'Harta';
$lang['set_password_email_sent_to_client']                     = 'E-mailul pentru a seta parola a fost trimis cu succes la contact';
$lang['set_password_email_sent_to_client_and_profile_updated'] = 'Profilul actualizat și e-mailul pentru a seta parola au fost trimise cu succes la contact';
$lang['customer_attachments']                                  = 'Fisiere';
$lang['customer_longitude']                                    = 'Longitudine (Google Maps)';
$lang['customer_latitude']                                     = 'Latitudine (Google Maps)';

# Authentication
$lang['admin_auth_set_password']         = 'Parola';
$lang['admin_auth_set_password_repeat']  = 'Repeta parola';
$lang['admin_auth_set_password_heading'] = 'Seteaza parola';

# General
$lang['apply']                         = 'aplica';
$lang['department_calendar_id']        = 'Google Calendar ID';
$lang['localization_default_language'] = 'Limba implicita';
$lang['system_default_string']         = 'System Default';
$lang['advanced_options']              = 'Opțiuni avansate';

# Expenses
$lang['expense_list_invoice']  = 'facturată';
$lang['expense_list_billed']   = 'facturează';
$lang['expense_list_unbilled'] = 'Nu este facturat';

# Leads
$lang['lead_merge_custom_field']          = 'Mergeți ca câmp personalizat';
$lang['lead_merge_custom_field_existing'] = 'Mergeți cu câmpul bazei de date';
$lang['lead_dont_merge_custom_field']     = 'Nu fuzionează';
$lang['lost_leads']                       = 'Pierdut Leads';
$lang['junk_leads']                       = 'deșeuri Leads';
$lang['lead_mark_as_lost']                = 'Mark ca pierdut';
$lang['lead_unmark_as_lost']              = 'Anulați marcajul ca pierdut';
$lang['lead_marked_as_lost']              = 'Lead marcate ca pierdute cu succes';
$lang['lead_unmarked_as_lost']            = 'Lead fără marcă ca pierdut cu succes';
$lang['leads_status_color']               = 'Culoare';
$lang['lead_mark_as_junk']                = 'Marcați ca junk';
$lang['lead_unmark_as_junk']              = 'Deblocați plumbul ca junk';
$lang['lead_marked_as_junk']              = 'Lead marcate ca nedorite cu succes';
$lang['lead_unmarked_as_junk']            = 'Lead nesemnate ca junk cu succes';
$lang['lead_not_found']                   = 'Lead Nu a fost găsit';
$lang['lead_lost']                        = 'Pierdut';
$lang['lead_junk']                        = 'Deseuri';
$lang['leads_not_assigned']               = 'Nealocat';

# Contacts
$lang['contract_not_visible_to_client'] = 'Ascunde de la client';
$lang['contract_edit_overview']         = 'Prezentare generală a contractului';
$lang['contract_attachments']           = 'Fișiere atașate';

# Tasks
$lang['task_view_make_public']     = 'A face public';
$lang['task_is_private']           = 'Activitate privată';
$lang['task_finished']             = 'Terminat';
$lang['task_single_related']       = 'Legate de';
$lang['task_unmark_as_complete']   = 'Anulați marcarea ca completă';
$lang['task_unmarked_as_complete'] = 'Sarcina nu este marcată ca completă';
$lang['task_relation']             = 'Legate de';
$lang['task_public']               = 'Public';
$lang['task_public_help']          = 'Dacă setați această activitate la public, va fi vizibilă pentru toți membrii personalului. În caz contrar, va fi vizibil numai pentru membrii care sunt asignați, adepți, creatori sau administratori';

# Settings
$lang['settings_general_favicon']                                            = 'favicon';
$lang['settings_output_client_pdfs_from_admin_area_in_client_language']      = 'Ieșiți documentele PDF client din zona de administrare în limba clientului';
$lang['settings_output_client_pdfs_from_admin_area_in_client_language_help'] = 'Dacă aceste opțiuni sunt setate la da și eq. limba implicită a sistemului este limba engleză și clientul are limba de configurare franceză, documentele pdf vor fi afișate în limba clientului';
$lang['settings_default_tax']                                                = 'Impozitul implicit';
$lang['setup_calendar_by_departments']                                       = 'Configurați calendarul de către departamente';
$lang['settings_calendar']                                                   = 'Calendar';
$lang['settings_sales_invoice_due_after']                                    = 'Factura datorată după (zile)';
$lang['settings_google_api']                                                 = 'Google API Cheie';
$lang['settings_gcal_main_calendar_id']                                      = 'Google Calendar ID';
$lang['settings_gcal_main_calendar_id_help']                                 = 'Acesta este calendarul principal al companiei. Toate evenimentele din acest calendar vor fi afișate. Dacă doriți să specificați un calendar bazat pe departamente, puteți adăuga în departamentul Google Calendar ID.';
$lang['show_on_calendar']                                                    = 'Afișați pe Calendar';
$lang['show_invoices_on_calendar']                                           = 'Facturi/Plati';
$lang['show_estimates_on_calendar']                                          = 'Estimări';
$lang['show_contracts_on_calendar']                                          = 'Contracte';
$lang['show_tasks_on_calendar']                                              = 'Sarcini';
$lang['show_customer_reminders_on_calendar']                                 = 'Memento-uri pentru clienți';

# Leads
$lang['copy_custom_fields_convert_to_customer']                      = 'Copiați câmpurile personalizate în profilul clientului';
$lang['copy_custom_fields_convert_to_customer_help']                 = 'Dacă unul dintre următoarele câmpuri personalizate nu există pentru client, va fi creat automat cu același nume, altfel numai valoarea va fi copiată din profilul de lead.';
$lang['lead_profile']                                                = 'Profil';
$lang['lead_is_client']                                              = 'Client';
$lang['leads_email_integration_folder_no_encryption']                = 'Fără criptare';
$lang['leads_email_integration']                                     = 'Integrarea prin e-mail';
$lang['leads_email_active']                                          = 'Activ';
$lang['leads_email_integration_imap']                                = 'IMAP Server';
$lang['leads_email_integration_email']                               = 'Adresa de e-mail (conectare)';
$lang['leads_email_integration_password']                            = 'Parola';
$lang['leads_email_integration_default_source']                      = 'Sursă implicită';
$lang['leads_email_integration_check_every']                         = 'Verificați fiecare (minute)';
$lang['leads_email_integration_default_assigned']                    = 'Responsabil pentru nou lead';
$lang['leads_email_encryption']                                      = 'Criptarea';
$lang['leads_email_integration_updated']                             = 'Actualizarea e-mailului';
$lang['leads_email_integration_default_status']                      = 'Starea implicită';
$lang['leads_email_integration_folder']                              = 'Folder';
$lang['leads_email_integration_notify_when_lead_imported']           = 'Anunță când importul duce';
$lang['leads_email_integration_only_check_unseen_emails']            = 'Verificați numai e-mailurile care nu au fost deschise';
$lang['leads_email_integration_only_check_unseen_emails_help']       = 'Numai scriptul va seta automat e-mailurile deschise după verificare. Acest lucru este folosit pentru a împiedica verificarea din nou și din nou a tuturor e-mailurilor. Nu este recomandat să debifați această opțiune dacă aveți o mulțime de e-mailuri și ați setat o redirecționare foarte mare la adresa de email pe care o configurați';
$lang['leads_email_integration_notify_when_lead_contact_more_times'] = 'Anunță dacă conducătorul trimite e-mailuri de mai multe ori';
$lang['leads_email_integration_test_connection']                     = 'Testeaza IMAP Connection';
$lang['lead_email_connection_ok']                                    = 'IMAP Conexiunea este bună';
$lang['lead_email_connection_not_ok']                                = 'IMAP Conexiunea nu este în regulă';
$lang['lead_email_activity']                                         = 'Activitatea de e-mail';
$lang['leads_email_integration_notify_roles']                        = 'Roluri de notificare';
$lang['leads_email_integration_notify_staff']                        = 'Membrii echipei de notificare';
$lang['lead_public']                                                 = 'Public';

# Knowledge Base
$lang['kb_group_color'] = 'Culoare';
$lang['kb_group_order'] = 'Ordin';

# Utilities - BULK PDF Exporter
$lang['bulk_pdf_exporter']             = 'Exportați în format PDF';
$lang['bulk_export_pdf_payments']      = 'Plăţi';
$lang['bulk_export_pdf_estimates']     = 'Estimări';
$lang['bulk_export_pdf_invoices']      = 'Facturi/Plati';
$lang['bulk_pdf_export_button']        = 'Export';
$lang['bulk_pdf_export_select_type']   = 'Selecteaza tipul';
$lang['no_data_found_bulk_pdf_export'] = 'Nu s-au găsit date pentru export';
$lang['bulk_export_status_all']        = 'Totul';
$lang['bulk_export_status']            = 'Status';
$lang['bulk_export_zip_payment_modes'] = 'A efectuat plățile prin';
$lang['bulk_export_include_tag']       = 'Includeți eticheta';
$lang['bulk_export_include_tag_help']  = 'ex. Original sau copie. Eticheta va fi afișată în format PDF. Recomandat să utilizați numai 1 etichetă';

# Version 1.0.7
## Customers - portal
$lang['clients_nav_proposals'] = 'Propuneri';
$lang['clients_nav_support']   = 'Support';

# General
$lang['more']            = 'Mai mult';
$lang['add_item']        = 'Adaugare element';
$lang['goto_admin_area'] = 'Accesați zona admin';
$lang['delete']          = 'Sterge %s';
$lang['welcome_top']     = 'Bun Venit %s';

# Customers
$lang['customer_permissions']         = 'Permisiuni';
$lang['customer_permission_invoice']  = 'Facturi/Plati';
$lang['customer_permission_estimate'] = 'Estimare';
$lang['customer_permission_proposal'] = 'propuneri';
$lang['customer_permission_contract'] = 'Contracte';
$lang['customer_permission_support']  = 'Support';

#Tasks
$lang['task_related_to'] = 'În legătură cu';

# Send file
$lang['custom_file_fail_send']    = 'Eroare la trimiterea fișierului';
$lang['custom_file_success_send'] = 'Fișierul este trimis cu succes la %s';
$lang['send_file_subject']        = 'Email Subiect';
$lang['send_file_email']          = 'Email Adresa';
$lang['send_file_message']        = 'Mesaj';
$lang['send_file']                = 'Trimite fisierul';
$lang['add_checklist_item']       = 'Elementul de listă de verificare';
$lang['task_checklist_items']     = 'Elementele de listă de verificare';

# Import
$lang['default_pass_clients_import'] = 'Parola implicită pentru toate persoanele de contact';
$lang['simulate_import']             = 'Simulați importul';
$lang['import_upload_failed']        = 'Încărcare eșuată';
$lang['import_total_imported']       = 'Total importate: %s';
$lang['import_leads']                = 'Import Leads';
$lang['import_customers']            = 'Import Clienti';
$lang['choose_csv_file']             = 'CAlegeți fișierul CSV';
$lang['import']                      = 'Import';
$lang['lead_import_status']          = 'Stare';
$lang['lead_import_source']          = 'Sursa';

# Bulk PDF Export
$lang['bulk_export_pdf_proposals'] = 'Propuneri';

# Invoices
$lang['delete_invoice'] = 'Sterge';
$lang['items']          = 'Articole';
$lang['support']        = 'Support';
$lang['new_ticket']     = 'Tichet nou';

# Reminders
$lang['calendar_lead_reminder']  = 'Comandă de memento';
$lang['lead_set_reminder_title'] = 'Adăugați memento de lead';
$lang['set_reminder_tooltip']    = 'Această opțiune vă permite să nu uitați niciodată nimic despre clienții dvs.';
$lang['client_reminders_tab']    = 'Mementouri';
$lang['leads_reminders_tab']     = 'Mementouri';

# Tickets
$lang['delete_ticket_reply']  = 'Ștergeți răspunsul';
$lang['ticket_priority_edit'] = 'Editați prioritatea';
$lang['ticket_priority_add']  = 'Adăugați prioritate';
$lang['ticket_status_edit']   = 'Editați starea tichetelor';
$lang['ticket_service_edit']  = 'Editați serviciul de tichete';
$lang['edit_department']      = 'Editați departamentul';

# Expenses
$lang['edit_expense_category'] = 'Editați categoria de cheltuieli';

# Settings
$lang['customer_default_country']                                 = 'Țara implicită';
$lang['settings_sales_require_client_logged_in_to_view_estimate'] = 'Solicitați clientului să fie conectat pentru a vedea estimarea';
$lang['set_reminder']                                             = 'Setați memento';
$lang['set_reminder_date']                                        = 'Data de notificat';
$lang['reminder_description']                                     = 'Setați descrierea';
$lang['reminder_notify_me_by_email']                              = 'Trimiteți și un e-mail pentru acest memento';
$lang['reminder_added_successfully']                              = 'Memento a fost adăugată cu succes. Veți fi anunțat la timp.';
$lang['reminder_description']                                     = 'Descriere';
$lang['reminder_date']                                            = 'Data';
$lang['reminder_staff']                                           = 'Reaminti';
$lang['reminder_is_notified']                                     = 'Este notificat?';
$lang['reminder_is_notified_boolean_no']                          = 'Nu';
$lang['reminder_is_notified_boolean_yes']                         = 'Da';
$lang['reminder_set_to']                                          = 'Setați memento la';
$lang['reminder_deleted']                                         = 'Memento a fost șters cu succes';
$lang['reminder_failed_to_delete']                                = 'Nu s-a reușit ștergerea mementoului';
$lang['show_invoice_estimate_status_on_pdf']                      = 'Afișați starea facturii / estimării la PDF';
$lang['email_piping_default_priority']                            = 'Prioritate prestabilită pentru biletul cu pipetă';
$lang['show_lead_reminders_on_calendar']                          = 'Lead Mementouri';
$lang['tickets_piping']                                           = 'Trimiteți prin e-mail';
$lang['email_piping_only_replies']                                = 'Numai răspunsurile permise prin e-mail';
$lang['email_piping_only_registered']                             = 'Pipe numai pentru utilizatorii înregistrați';

# Estimates
$lang['view_estimate_as_client']         = 'Vizualizați estimarea ca client';
$lang['estimate_mark_as']                = 'Marcați ca %s';
$lang['estimate_status_changed_success'] = 'Estimarea statutului a fost modificată';
$lang['estimate_status_changed_fail']    = 'Nu s-a modificat starea estimativă';

# Proposals
$lang['proposal_to']                            = 'Numele Companiei';
$lang['proposal_date']                          = 'Data';
$lang['proposal_address']                       = 'Adresa';
$lang['proposal_phone']                         = 'Telefon';
$lang['proposal_email']                         = 'Email';
$lang['proposal_date_created']                  = 'Data creării';
$lang['proposal_open_till']                     = 'Deschidere până la capăt';
$lang['proposal_status_open']                   = 'Deschis';
$lang['proposal_status_accepted']               = 'Admis';
$lang['proposal_status_declined']               = 'Refuzat';
$lang['proposal_status_sent']                   = 'Trimis';
$lang['proposal_expired']                       = 'Expirat';
$lang['proposal_subject']                       = 'Subiect';
$lang['proposal_total']                         = 'Total';
$lang['proposal_status']                        = 'Stare';
$lang['proposals_list_all']                     = 'Totul';
$lang['proposals_leads_related']                = 'Leads Legate de';
$lang['proposals_customers_related']            = 'Clienți apropiați';
$lang['proposal_related']                       = 'Legate de';
$lang['proposal_for_lead']                      = 'Lead';
$lang['proposal_for_customer']                  = 'Client';
$lang['proposal']                               = 'Propunere';
$lang['proposal_lowercase']                     = 'propunere';
$lang['proposals']                              = 'Propuneri';
$lang['proposals_lowercase']                    = 'propuneri';
$lang['new_proposal']                           = 'Noua propunere';
$lang['proposal_currency']                      = 'Valută';
$lang['proposal_allow_comments']                = 'Permite comentarii';
$lang['proposal_allow_comments_help']           = 'Dacă bifați această opțiune, comentariile vor fi permise atunci când clientul dvs. văd propunerea.';
$lang['proposal_edit']                          = 'Editeaza';
$lang['proposal_pdf']                           = 'PDF';
$lang['proposal_send_to_email']                 = 'Trimiteți la e-mail';
$lang['proposal_send_to_email_title']           = 'Trimiteți propunerea la e-mail';
$lang['proposal_attach_pdf']                    = 'atașa PDF';
$lang['proposal_preview_template']              = 'Examinați șablonul';
$lang['proposal_view']                          = 'Vizualizați propunerea';
$lang['proposal_copy']                          = 'Copie';
$lang['proposal_delete']                        = 'Sterge';
$lang['proposal_to']                            = 'Către';
$lang['proposal_add_comment']                   = 'Adauga comentariu';
$lang['proposal_sent_to_email_success']         = 'Propunerea a fost trimisă la e-mail cu succes';
$lang['proposal_sent_to_email_fail']            = 'Nu sa trimis propunerea la e-mail';
$lang['proposal_copy_fail']                     = 'Copierea propunerii nu a reușit';
$lang['proposal_copy_success']                  = 'Propunerea a fost copiată cu succes';
$lang['proposal_status_changed_success']        = 'Starea propunerii a fost modificată cu succes';
$lang['proposal_status_changed_fail']           = 'Nu s-a modificat starea propunerii';
$lang['proposal_assigned']                      = 'Atribuit';
$lang['proposal_comments']                      = 'Comentarii';
$lang['proposal_convert']                       = 'Convertit';
$lang['proposal_convert_estimate']              = 'Estimare';
$lang['proposal_convert_invoice']               = 'Factura fiscala';
$lang['proposal_convert_to_estimate']           = 'Convertiți la Estimare';
$lang['proposal_convert_to_invoice']            = 'Conversia în factură';
$lang['proposal_convert_to_lead_disabled_help'] = 'Trebuie să convertiți conducătorul către client pentru a crea %s';
$lang['proposal_convert_not_related_help']      = 'Propunerea trebuie să fie legată de client pentru a se converti %s';
$lang['proposal_converted_to_estimate_success'] = 'Propunerea a fost convertită pentru a estima cu succes';
$lang['proposal_converted_to_invoice_success']  = 'Propunerea a fost transformată cu succes în factură';
$lang['proposal_converted_to_estimate_fail']    = 'Nu sa reușit conversia propunerii de estimat';
$lang['proposal_converted_to_invoice_fail']     = 'Nu sa reușit conversia propunerii la factură';

# Proposals - view proposal template
$lang['proposal_total_info']   = 'Total %s';
$lang['proposal_accept_info']  = 'Accept';
$lang['proposal_decline_info'] = 'Refuz';
$lang['proposal_pdf_info']     = 'PDF';

# Customers Portal
$lang['customer_reset_action']            = 'Reseteaza';
$lang['customer_reset_password_heading']  = 'Reseteaza parola';
$lang['customer_forgot_password_heading'] = 'Am uitat parola';
$lang['customer_forgot_password']         = 'Ati uitat parola?';
$lang['customer_reset_password']          = 'Parola';
$lang['customer_reset_password_repeat']   = 'Repetati parola';
$lang['customer_forgot_password_email']   = 'Email Adresa';
$lang['customer_forgot_password_submit']  = 'A depune';
$lang['customer_ticket_subject']          = 'Subiect';

# Email templates
$lang['email_template_proposals_fields_heading'] = 'Propuneri';

# Tasks
$lang['add_task_attachments']  = 'Atașament';
$lang['task_view_attachments'] = 'Fișiere atașate';
$lang['task_view_description'] = 'Descriere';

# Customer Groups
$lang['customer_group_add_heading']      = 'Adăugați un nou grup de clienți';
$lang['customer_group_edit_heading']     = 'Editați grupul de clienți';
$lang['new_customer_group']              = 'Grup de clienți noi';
$lang['customer_group_name']             = 'Nume';
$lang['customer_groups']                 = 'Grupuri';
$lang['customer_group']                  = 'Grupul de clienți';
$lang['customer_group_lowercase']        = 'grup de clienți';
$lang['customer_have_invoices_by']       = 'Conține facturi după statut %s';
$lang['customer_have_estimates_by']      = 'Conține estimări în funcție de statut %s';
$lang['customer_have_contracts_by_type'] = 'Având contracte după tip %s';

# Custom fields
$lang['custom_field_show_on_table']              = 'Afișați pe masă';
$lang['custom_field_show_on_client_portal']      = 'Afișați pe portalul clientului';
$lang['custom_field_show_on_client_portal_help'] = 'Dacă este bifat acest câmp, acesta va fi afișat și în tabele';
$lang['custom_field_visibility']                 = 'Vizibilitate';

# Knowledge Base
$lang['view_articles_list']     = 'Vezi articole';
$lang['view_articles_list_all'] = 'Toate articolele';
$lang['als_all_articles']       = 'Articole';
$lang['als_kb_groups']          = 'Grupuri';

# Spam Filter - Tickets
$lang['spam_filters']                 = 'Filtre de spam';
$lang['spam_filter']                  = 'Filtre de spam';
$lang['new_spam_filter']              = 'Filtru spam nou';
$lang['spam_filter_blocked_senders']  = 'Expeditori blocați';
$lang['spam_filter_blocked_subjects'] = 'Subiecți blocați';
$lang['spam_filter_blocked_phrases']  = 'Fraze blocate';
$lang['spam_filter_content']          = 'Conţinut';
$lang['spamfilter_edit_heading']      = 'Editați filtrul de spam';
$lang['spamfilter_add_heading']       = 'Adăugați filtru spam';
$lang['spamfilter_type']              = 'Tipul';
$lang['spamfilter_type_subject']      = 'Subiect';
$lang['spamfilter_type_sender']       = 'Expeditor';
$lang['spamfilter_type_phrase']       = 'Fraza';

# Tickets
$lang['block_sender']                = 'Blochează expeditorul';
$lang['sender_blocked']              = 'Expeditor blocat';
$lang['sender_blocked_successfully'] = 'Expeditorul a fost blocat cu succes';
$lang['ticket_date_created']         = 'Creată';

#KB
$lang['edit_kb_group'] = 'Editați grupul';

# Leads
$lang['edit_source'] = 'Editați Sursa';
$lang['edit_status'] = 'Editați starea';

# Contacts
$lang['contract_type_edit'] = 'Editați tipul de contract';

# Reports
$lang['report_by_customer_groups'] = 'Valoarea totală pe grupuri de clienți';

#Utilities
$lang['ticket_pipe_log']      = 'Ticket Pipe Log';
$lang['ticket_pipe_name']     = 'Din numele';
$lang['ticket_pipe_email_to'] = 'Către';
$lang['ticket_pipe_email']    = 'De la  Email';
$lang['ticket_pipe_subject']  = 'Subiect';
$lang['ticket_pipe_message']  = 'Mesaj';
$lang['ticket_pipe_date']     = 'Data';
$lang['ticket_pipe_status']   = 'Stare';

# Home
$lang['home_latest_activity']   = 'Ultima activitate';
$lang['home_my_tasks']          = 'Sarcinile mele';
$lang['home_my_todo_items']     = 'Obiectele mele';
$lang['home_widget_view_all']   = 'Vezi tot';
$lang['home_stats_full_report'] = 'Raport complet';

# Validation
$lang['form_validation_required']    = 'Este necesar câmpul {field}.';
$lang['form_validation_valid_email'] = 'Câmpul {field} trebuie să conțină o adresă de e-mail validă.';
$lang['form_validation_matches']     = 'Câmpul {field} nu se potrivește cu câmpul {param}.';
$lang['form_validation_is_unique']   = 'Campul {field} trebuie să conțină o valoare unică.';

# Version 1.0.8
# Notifications & Leads/Estimates/Invoices Activity Log
$lang['not_event']                                    = 'Calendar event today - %s ...';
$lang['not_event_public']                             = 'Public event start today - %s ...';
$lang['not_contract_expiry_reminder']                 = 'Contract expiry reminder - %s ...';
$lang['not_recurring_expense_cron_activity_heading']  = 'Recurring Expenses Cron Job Activity';
$lang['not_recurring_invoices_cron_activity_heading'] = 'Recurring Invoices Cron Job Activity';
$lang['not_recurring_total_renewed']                  = 'Total Renewed: %s';
$lang['not_recurring_expenses_action_taken_from']     = 'Action taken from recurring expense';
$lang['not_invoice_created']                          = 'Invoice Created:';
$lang['not_invoice_renewed']                          = 'Renewed Invoice:';
$lang['not_expense_renewed']                          = 'Renewed Expense:';
$lang['not_invoice_sent_to_customer']                 = 'Invoice Sent to Customer: %s';
$lang['not_invoice_sent_yes']                         = 'Yes';
$lang['not_invoice_sent_not']                         = 'No';
$lang['not_action_taken_from_recurring_invoice']      = 'Action taken from recurring invoice:';
$lang['not_new_reminder_for']                         = 'New Reminder for %s';
$lang['not_received_one_or_more_messages_lead']       = 'Received one more email message from lead';
$lang['not_received_lead_imported_email_integration'] = 'Lead Imported From Email Integration';
$lang['not_lead_imported_attachment']                 = 'Imported attachment from email';
$lang['not_estimate_status_change']                   = 'Imported attachment from email';
$lang['not_estimate_status_updated']                  = 'Estimate Status Updated: From: %s to %s';

$lang['not_assigned_lead_to_you']                                 = 'assigned lead %s to you';
$lang['not_lead_activity_assigned_to']                            = '%s assigned to %s';
$lang['not_lead_activity_attachment_deleted']                     = 'Deleted Attachment';
$lang['not_lead_activity_status_updated']                         = '%s updated lead status from %s to %s';
$lang['not_lead_activity_contacted']                              = '%s contacted this lead on %s';
$lang['not_lead_activity_created']                                = '%s created lead';
$lang['not_lead_activity_marked_lost']                            = 'Marcat ca pierdut';
$lang['not_lead_activity_unmarked_lost']                          = 'Neetichetat ca pierdut';
$lang['not_lead_activity_marked_junk']                            = 'Marcat ca pierdut';
$lang['not_lead_activity_unmarked_junk']                          = 'Nu este marcat ca junk';
$lang['not_lead_activity_added_attachment']                       = 'Adăugat atașament';
$lang['not_lead_activity_converted_email']                        = 'E-mailul principal a fost modificat. Primul e-mail de plumb a fost: %s și a fost adăugat ca client cu e-mail %s';
$lang['not_lead_activity_converted']                              = '%s A transformat acest avantaj în client';
$lang['not_liked_your_post']                                      = '%s mi-a plăcut postarea %s ...';
$lang['not_commented_your_post']                                  = '%s a comentat la postarea ta %s ...';
$lang['not_liked_your_comment']                                   = '%s ți-a plăcut comentariul %s ...';
$lang['not_proposal_assigned_to_you']                             = 'Propunerea vă va fi atribuită - %s ...';
$lang['not_proposal_comment_from_client']                         = 'Comentariu nou de la client la propunere %s ...';
$lang['not_proposal_proposal_accepted']                           = 'Propunerea acceptată - %s';
$lang['not_proposal_proposal_declined']                           = 'Propunerea a fost respinsă - %s';
$lang['not_task_added_you_as_follower']                           = 'te-a adăugat ca urmăritor la sarcină %s ...';
$lang['not_task_added_someone_as_follower']                       = 'a adaugat pe %s ca urmas la sarcina %s ...';
$lang['not_task_added_himself_as_follower']                       = 'se adăuga pe sine în calitate de ascendent pe sarcină %s ...';
$lang['not_task_assigned_to_you']                                 = 'ti-a incredintat o sarcina %s ...';
$lang['not_task_assigned_someone']                                = 'Aloat %s la sarcina %s ...';
$lang['not_task_will_do_user']                                    = 'va face sarcina %s ...';
$lang['not_task_new_attachment']                                  = 'A fost adăugat atașament nou';
$lang['not_task_marked_as_complete']                              = 'sarcinile marcate ca fiind complete %s';
$lang['not_task_unmarked_as_complete']                            = 'activitate nesignificată ca completă %s';
$lang['not_ticket_assigned_to_you']                               = 'Tichetul primit pentru tine - %s ...';
$lang['not_ticket_reassigned_to_you']                             = 'Tichetul a fost transferat la tine - %s ...';
$lang['not_estimate_customer_accepted']                           = 'Felicitări! Evaluarea acceptată de client cu numărul %s';
$lang['not_estimate_customer_declined']                           = 'Clientul a refuzat estimarea cu numărul %s';
$lang['estimate_activity_converted']                              = 'A convertit această estimare la factură.<br /> %s';
$lang['estimate_activity_created']                                = 'Crearea estimării';
$lang['invoice_estimate_activity_removed_item']                   = 'articol eliminat <b>%s</b>';
$lang['estimate_activity_number_changed']                         = 'Numărul estimat a fost schimbat de la %s la %s';
$lang['invoice_activity_number_changed']                          = 'Numărul facturii sa schimbat de la %s la %s';
$lang['invoice_estimate_activity_updated_item_short_description'] = 'articolul scurt de descriere scurt de la %s la %s';
$lang['invoice_estimate_activity_updated_item_long_description']  = 'articol actualizat detaliat lung de la <b>%s</b> la <b>%s</b>';
$lang['invoice_estimate_activity_updated_item_rate']              = 'rata de articol actualizată de la %s la %s';
$lang['invoice_estimate_activity_updated_qty_item']               = 'cantitate actualizată pe element <b>%s</b> de la %s la %s';
$lang['invoice_estimate_activity_added_item']                     = 'a adăugat un element nou <b>%s</b>';
$lang['invoice_estimate_activity_sent_to_client']                 = 'a trimis estimarea către client';
$lang['estimate_activity_client_accepted_and_converted']          = 'Clientul a acceptat această estimare. Estimarea este convertită la factura cu număr %s';
$lang['estimate_activity_client_accepted']                        = 'Clientul a acceptat această estimare';
$lang['estimate_activity_client_declined']                        = 'Clientul a refuzat această estimare';
$lang['estimate_activity_marked']                                 = 'estimat ca %s';
$lang['invoice_activity_status_updated']                          = 'Situația facturilor sa actualizat de la %s la %s';
$lang['invoice_activity_created']                                 = 'a creat factura';
$lang['invoice_activity_from_expense']                            = 'convertit la factură din cheltuieli';
$lang['invoice_activity_recurring_created']                       = '[Recurring] Factura creată de CRON';
$lang['invoice_activity_recurring_from_expense_created']          = '[Factura din cheltuieli] Factura creată de CRON';
$lang['invoice_activity_sent_to_client_cron']                     = 'Factura trimisă clientului de către CRON';
$lang['invoice_activity_sent_to_client']                          = 'trimite factura clientului';
$lang['invoice_activity_marked_as_sent']                          = 'factura facturată trimisă';
$lang['invoice_activity_payment_deleted']                         = 'a șters plata pentru factură. Plata # %s, suma totală %s';
$lang['invoice_activity_payment_made_by_client']                  = 'Clientul a plătit factura din total <b>%s</b> - %s';
$lang['invoice_activity_payment_made_by_staff']                   = 'plățile înregistrate din total <b>%s</b> - %s';
$lang['invoice_activity_added_attachment']                        = 'Atasament adaugat';

# Navigation
$lang['top_search_placeholder'] = 'Cauta...';

# Staff
$lang['staff_profile_inactive_account'] = 'Acest cont de membru al personalului este inactiv';

# Estimates
$lang['copy_estimate']                = 'Estimarea copiei';
$lang['estimate_copied_successfully'] = 'Estimarea copiată cu succes';
$lang['estimate_copied_fail']         = 'Nu sa reușit copierea estimării';

# Tasks
$lang['tasks_view_assigned_to_user'] = 'Sarcini care mi-au fost atribuite';
$lang['tasks_view_follower_by_user'] = 'Sarcini care urmează';
$lang['no_tasks_found']              = 'Nu au fost găsite sarcini';

# Leads
$lang['leads_dt_datecreated']       = 'Creat';
$lang['leads_sort_by']              = 'Soreteaza dupa';
$lang['leads_sort_by_datecreated']  = 'Data crearii';
$lang['leads_sort_by_kanban_order'] = 'Comanda Kan ban';

# Authentication
$lang['check_email_for_resetting_password'] = 'Verificați adresa de e-mail pentru instrucțiuni suplimentare pentru resetarea parolei';
$lang['inactive_account']                   = 'Cont inactiv';
$lang['error_setting_new_password_key']     = 'Eroare la stabilirea unei parole noi';
$lang['password_reset_message']             = 'Parola ta a fost resetata. Conectați-vă acum!';
$lang['password_reset_message_fail']        = 'Eroare la resetarea parolei. Încearcă din nou.';
$lang['password_reset_key_expired']         = 'Parola expirată sau utilizatorul nevalid';
$lang['auth_reset_pass_email_not_found']    = 'E-mailul nu a fost găsit';
$lang['auth_reset_password_submit']         = 'Reseteaza parola';

# Settings
$lang['settings_amount_to_words']          = 'Sumă pentru cuvinte';
$lang['settings_amount_to_words_desc']     = 'Valoarea totală de ieșire a cuvintelor din factură / estimare';
$lang['settings_amount_to_words_enabled']  = 'Permite';
$lang['settings_total_to_words_lowercase'] = 'numar de cuvinte in litere mici';
$lang['settings_show_tax_per_item']        = 'Afișați taxe pe articol';

# Reports
$lang['report_sales_months_three_months'] = 'Ultimele 3 luni';
$lang['report_invoice_number']            = 'Factura #';
$lang['report_invoice_customer']          = 'Client';
$lang['report_invoice_date']              = 'Data';
$lang['report_invoice_duedate']           = 'Data scadenta';
$lang['report_invoice_amount']            = 'Cantitate';
$lang['report_invoice_amount_with_tax']   = 'Sumă cu impozit';
$lang['report_invoice_amount_open']       = 'Suma este deschisă';
$lang['report_invoice_status']            = 'Stare';

#Version 1.0.9

# Home stats
$lang['home_stats_by_project_status'] = 'Statistici după starea proiectului';
$lang['home_invoice_overview']        = 'Vizualizare factură';
$lang['home_estimate_overview']       = 'Estimați prezentarea generală';
$lang['home_proposal_overview']       = 'Propunerea de ansamblu';
$lang['home_lead_overview']           = 'Prezemtare oportunitati';
$lang['home_my_projects']             = 'Proiectele mele';
$lang['home_announcements']           = 'Anunturi';

# Settings
$lang['settings_leads_kanban_limit']                                    = 'Restricționează conducătorii de canale ban ban pentru fiecare statut';
$lang['settings_group_misc']                                            = 'Diverse';
$lang['show_projects_on_calendar']                                      = 'Proiecte';
$lang['settings_media_max_file_size_upload']                            = 'Încărcați dimensiunea maximă a fișierului în Media (MB)';
$lang['settings_client_staff_add_edit_delete_task_comments_first_hour'] = 'Permiteți clientului / personalului să adauge / editeze comentariile de activitate numai în prima oră (administratorii nu au fost aplicați)';

# Email templates
$lang['email_template_only_domain_email'] = 'Numai e-mail de domeniu';

# Announcements
$lang['dismiss_announcement']   = 'Renunțați la anunț';
$lang['announcement_from']      = 'De la:';
$lang['announcement_date']      = 'Data postarii: %s';
$lang['announcement_not_found'] = 'Anunțul nu a fost găsit';
$lang['announcements_recent']   = 'Anunțuri recente';

# General
$lang['zip_invoices']         = 'Facturi zip';
$lang['zip_estimates']        = 'Estimari zip';
$lang['zip_payments']         = 'Plăți Zip';
$lang['setup_help']           = 'Ajutor';
$lang['clients_list_company'] = 'Companie';
$lang['dt_button_export']     = 'Export';
$lang['dt_entries']           = 'intrări';
$lang['invoice_total_paid']   = 'Plata totala';
$lang['invoice_amount_due']   = 'Suma datorată';

# Calendar
$lang['calendar_project'] = 'Proiect';

# Leads
$lang['leads_import_assignee']     = 'Responsabil (cesionar)';
$lang['customer_from_lead']        = 'Clientul din %s';
$lang['lead_kan_ban_attachments']  = 'Fișiere atașate: %s';
$lang['leads_sort_by_lastcontact'] = 'Ultima persoană de contact';

# Tasks
$lang['task_comment_added']     = 'Comentariul a fost adăugat cu succes';
$lang['task_duedate']           = 'Data scadentă';
$lang['task_view_comments']     = 'Comentarii';
$lang['task_comment_updated']   = 'Comentariu actualizat';
$lang['task_visible_to_client'] = 'Vizibilă pentru client';
$lang['task_hourly_rate']       = 'Rata orară';
$lang['hours']                  = 'Ore';
$lang['seconds']                = 'Secunde';
$lang['minutes']                = 'Minute';
$lang['task_start_timer']       = 'Porniti cronometrul';
$lang['task_stop_timer']        = 'Opriți cronometrul';
$lang['task_billable']          = 'Facturabil';
$lang['task_billable_yes']      = 'Facturabil';
$lang['task_billable_no']       = 'Nefacturabil';
$lang['task_billed']            = 'Facturat';
$lang['task_billed_yes']        = 'Facturat';
$lang['task_billed_no']         = 'Nu este facturat';
$lang['task_user_logged_time']  = 'Timpul tău înregistrat:';
$lang['task_total_logged_time'] = 'Timp total înregistrat:';
$lang['task_is_billed']         = 'Această sarcină este facturată pe factură cu număr %s';
$lang['task_statistics']        = 'Statistici';
$lang['task_milestone']         = 'Punct de reper';

# Tickets
$lang['ticket_message_updated_successfully'] = 'Mesajul s-a actualizat cu succes';

# Invoices
$lang['invoice_task_item_project_tasks_not_included'] = 'Proiectele nu sunt incluse în această listă.';
$lang['show_quantity_as']                             = 'Arata cantitatea ca:';
$lang['quantity_as_qty']                              = 'Cantitate';
$lang['quantity_as_hours']                            = 'Ore';
$lang['invoice_table_hours_heading']                  = 'Ore';
$lang['bill_tasks']                                   = 'Sarcini de facturare';
$lang['invoice_estimate_sent_to_email']               = 'Trimiteti un e-mail la';

# Estimates
$lang['estimate_table_hours_heading'] = 'Ore';

# General
$lang['is_customer_indicator']         = 'Client';
$lang['print']                         = 'Imprimare';
$lang['customer_permission_projects']  = 'Proiecte';
$lang['no_timers_found']               = 'Nu au fost găsite cronometrele de pornire';
$lang['timers_started_confirm_logout'] = 'Ceasurile de sarcini găsite au început! <br /> <br /> Sunteți sigur că doriți să vă deconectați fără a opri temporizatorii?';
$lang['confirm_logout']                = 'Deconectare';
$lang['timer_top_started']             = 'Inceput la %s';

# Projects
$lang['cant_change_billing_type_billed_tasks_found']         = 'Nu puteți schimba tipul de facturare. Sarcinile facturate deja găsite pentru acest proiect.';
$lang['project_customer_permission_warning']                 = 'Sistemul a indicat faptul că contactul primar nu are permisiunea pentru proiecte. Principalul contact nu va putea vedea proiectul. Vă recomandăm să adăugați permisiunea în profilul de contact.';
$lang['project_invoice_timesheet_start_time']                = 'Timpul de incepere: %s';
$lang['project_invoice_timesheet_end_time']                  = 'Ora de terminare: %s';
$lang['project_invoice_timesheet_total_logged_time']         = 'Timp logat: %s';
$lang['project_view_as_client']                              = 'Vizualizați proiectul ca client';
$lang['project_mark_all_tasks_as_completed']                 = 'Marcați toate sarcinile ca fiind completate și opriți toate cronometrele (nu s-au trimis notificări membrilor proiectului)';
$lang['project_not_started_status_tasks_timers_found']       = 'Cronometre de sarcini găsite pentru acest proiect, dar proiectul este cu status Not Started. Recomandat să schimbați starea proiectului la In Progress';
$lang['project_status']                                      = 'Stare';
$lang['project_status_1']                                    = 'Nu a inceput';
$lang['project_status_2']                                    = 'In progres';
$lang['project_status_3']                                    = 'In asteptare';
$lang['project_status_4']                                    = 'Terminat';
$lang['project_file_dateadded']                              = 'Data incarcarii';
$lang['project_file_filename']                               = 'Numele fisierului';
$lang['project_file__filetype']                              = 'Tipul fisierului';
$lang['project_file_visible_to_customer']                    = 'Vizibil clientului';
$lang['project_file_uploaded_by']                            = 'Incarcat de';
$lang['edit_project']                                        = 'Editeaza proiect';
$lang['copy_project']                                        = 'Creaza proiect';
$lang['delete_project']                                      = 'Sterge proiect';
$lang['project_task_assigned_to_user']                       = 'Sarcina atribuită pentru dvs.';
$lang['seconds']                                             = 'Secunde';
$lang['hours']                                               = 'Ore';
$lang['minutes']                                             = 'Minute';
$lang['project']                                             = 'Proiect';
$lang['project_lowercase']                                   = 'proiect';
$lang['projects']                                            = 'Proiecte';
$lang['projects_lowercase']                                  = 'proiecte';
$lang['project_settings']                                    = 'Setari proiect';
$lang['project_invoiced_successfully']                       = 'Proiectul a fost facturat cu succes';
$lang['new_project']                                         = 'Proiect nou';
$lang['project_files']                                       = 'Fisiere';
$lang['project_activity']                                    = 'Activitate';
$lang['project_name']                                        = 'Numele proiectului';
$lang['project_description']                                 = 'Descriere';
$lang['project_customer']                                    = 'Client';
$lang['project_start_date']                                  = 'Data de inceput';
$lang['project_datecreated']                                 = 'Data crearii';
$lang['project_deadline']                                    = 'Termen limita';
$lang['project_billing_type']                                = 'Tip de facturare';
$lang['project_billing_type_fixed_cost']                     = 'Rata fixa';
$lang['project_billing_type_project_hours']                  = 'Orele proiectului';
$lang['project_billing_type_project_task_hours']             = 'Orele de sarcina';
$lang['project_billing_type_project_task_hours_hourly_rate'] = 'Pe baza ratei orare a sarcinii';
$lang['project_rate_per_hour']                               = 'Rata pe ora';
$lang['project_total_cost']                                  = 'Rata totală';
$lang['project_members']                                     = 'Membri';
$lang['project_member_removed']                              = 'Membru al proiectului a fost eliminat cu succes';
$lang['project_overview']                                    = 'Rezumatul proiectului';
$lang['project_gant']                                        = 'Vizualizare Gantt';
$lang['project_milestones']                                  = 'Etape Proiect';
$lang['project_milestone_order']                             = 'Ordin';
$lang['project_milestone_duedate_passed']                    = 'Data scadentă a trecut';
$lang['record_timesheet']                                    = 'Pontaj';
$lang['new_milestone']                                       = 'New Milestone';
$lang['edit_milestone']                                      = 'Editeaza Punct de reper';
$lang['milestone_name']                                      = 'Nume';
$lang['milestone_due_date']                                  = 'Data scadentă';
$lang['project_milestone']                                   = 'Punct de reper';
$lang['project_notes']                                       = 'Notite';
$lang['project_timesheets']                                  = 'Pontajuri';
$lang['project_timesheet']                                   = 'Pontaj';
$lang['milestone_total_logged_time']                         = 'Ora logate';
$lang['project_overview_total_logged_hours']                 = 'Total ore logate';
$lang['milestones_uncategorized']                            = 'Fara categorie';
$lang['milestone_no_tasks_found']                            = 'Nu au fost găsite sarcini';
$lang['project_copied_successfully']                         = 'Proiect copiat cu succes';
$lang['failed_to_copy_project']                              = 'Copierea proiectului nu a reușit';
$lang['copy_project_task_include_check_list_items']          = 'Copiați elementele din lista de verificare';
$lang['copy_project_task_include_assignees']                 = 'Copiați aceiași cesionari';
$lang['copy_project_task_include_followers']                 = 'Copiați aceiași adepți';
$lang['project_days_left']                                   = 'Zile ramase';
$lang['project_open_tasks']                                  = 'Sarcini Deschise';
$lang['timesheet_stop_timer']                                = 'Opriți cronometrul';
$lang['failed_to_add_project_timesheet_end_time_smaller']    = 'Nu s-a adăugat foaia de pontaj. Timpul de sfârșit este mai mic decât timpul de începere';
$lang['project_timesheet_user']                              = 'Membru';
$lang['project_timesheet_start_time']                        = 'Ora de inceput';
$lang['project_timesheet_end_time']                          = 'Ora de terminare';
$lang['project_timesheet_time_spend']                        = 'Timp petrecut';
$lang['project_timesheet_task']                              = 'Sarcina';
$lang['project_invoices']                                    = 'Facturi';
$lang['total_logged_hours_by_staff']                         = 'Timp total înregistrat';
$lang['invoice_project']                                     = 'Proiect de facturare';
$lang['invoice_project_info']                                = 'Informații privind factura de proiect';
$lang['invoice_project_data_single_line']                    = 'O singura linie';
$lang['invoice_project_data_task_per_item']                  = 'Sarcină pe articol';
$lang['invoice_project_data_timesheets_individually']        = 'Toate foile de pontaj în mod individual';
$lang['invoice_project_item_name_data']                      = 'Nume element';
$lang['invoice_project_description_data']                    = 'Descriere';
$lang['invoice_project_projectname_taskname']                = 'Numele proiectului + numele sarcinii';
$lang['invoice_project_all_tasks_total_logged_time']         = 'oate sarcinile + timpul total înregistrat pentru fiecare sarcină';
$lang['invoice_project_project_name_data']                   = 'Denumirea proiectului';
$lang['invoice_project_timesheet_individually_data']         = 'Timpul de începere a timpului de lucru + timpul de încheiere + timpul total înregistrat';
$lang['invoice_project_total_logged_time_data']              = 'Timp total înregistrat';
$lang['project_allow_client_to']                             = 'Permiteți clientului să %s';
$lang['project_setting_view_task_attachments']               = 'vizualizați atașamentele de activitate';
$lang['project_setting_view_task_checklist_items']           = 'vizualizați elementele din lista de sarcini';
$lang['project_setting_upload_files']                        = 'încărca fișiere';
$lang['project_setting_view_task_comments']                  = 'vizualizați comentariile despre sarcini';
$lang['project_setting_upload_on_tasks']                     = 'încărcați fișiere atașate la sarcini';
$lang['project_setting_view_task_total_logged_time']         = 'vizualizați timpul total înregistrat al sarcinii';
$lang['project_setting_open_discussions']                    = 'Discuții deschise';
$lang['project_setting_comment_on_tasks']                    = 'Comentează despre sarcinile proiectului';
$lang['project_setting_view_tasks']                          = 'Vizualizați sarcinile';
$lang['project_setting_view_milestones']                     = 'Vedeți reperele';
$lang['project_setting_view_gantt']                          = 'Vezi Gantt';
$lang['project_setting_view_timesheets']                     = 'Vizualizați foile de pontaj';
$lang['project_setting_view_activity_log']                   = 'Vizualizați jurnalul de activități ';
$lang['project_setting_view_team_members']                   = 'Vizualizați membrii echipei';
$lang['project_discussion_visible_to_customer_yes']          = 'Vizibil';
$lang['project_discussion_visible_to_customer_no']           = 'Nu este vizibil';
$lang['project_discussion_posted_on']                        = 'Postat la %s';
$lang['project_discussion_posted_by']                        = 'Postat de %s';
$lang['project_discussion_failed_to_delete']                 = 'Failed to delete discussion';
$lang['project_discussion_deleted']                          = 'Discuția a fost șters cu succes';
$lang['project_discussion_no_activity']                      = 'Fara activitate';
$lang['project_discussion']                                  = 'Discutie';
$lang['project_discussions']                                 = 'Discutii';
$lang['edit_discussion']                                     = 'Editati discuții';
$lang['new_project_discussion']                              = 'Creați discuții';
$lang['project_discussion_subject']                          = 'Subiect';
$lang['project_discussion_description']                      = 'Descriere';
$lang['project_discussion_show_to_customer']                 = 'Vizibilă pentru client';
$lang['project_discussion_total_comments']                   = 'Comentarii totale';
$lang['project_discussion_last_activity']                    = 'Ultima activitate';
$lang['discussion_add_comment']                              = 'Adauga comentariu';
$lang['discussion_newest']                                   = 'Cele mai noi';
$lang['discussion_oldest']                                   = 'Cele mai vechi';
$lang['discussion_attachments']                              = 'Atasamente';
$lang['discussion_send']                                     = 'Trimite';
$lang['discussion_reply']                                    = 'Raspunde';
$lang['discussion_edit']                                     = 'Editeaza';
$lang['discussion_edited']                                   = 'Modificat';
$lang['discussion_you']                                      = 'Tu';
$lang['discussion_save']                                     = 'Salveaza';
$lang['discussion_delete']                                   = 'Sterge';
$lang['discussion_view_all_replies']                         = 'Arata toate raspunsurile';
$lang['discussion_hide_replies']                             = 'Ascudenti raspunsurile';
$lang['discussion_no_comments']                              = 'Fara comentarii';
$lang['discussion_no_attachments']                           = 'Fara atasament';
$lang['discussion_attachments_drop']                         = 'Glisați și fixați pentru a încărca fișierul';
$lang['project_note']                                        = 'Nota';
$lang['project_note_private']                                = 'Nota privata';
$lang['project_save_note']                                   = 'Salvati nota';

# Project Activity
$lang['project_activity_created']                      = 'Crearea proiectului';
$lang['project_activity_updated']                      = 'Proiect actualizat';
$lang['project_activity_removed_team_member']          = 'Eliminat membru al echipei';
$lang['project_activity_added_team_member']            = 'A fost adăugat un membru al echipei noi';
$lang['project_activity_marked_all_tasks_as_complete'] = 'Marcat toate sarcinile ca fiind complete';
$lang['project_activity_recorded_timesheet']           = 'Recorded timesheet';
$lang['project_activity_task_name']                    = 'Sarcina:';
$lang['project_activity_deleted_discussion']           = 'Ștergeți discuția';
$lang['project_activity_created_discussion']           = 'Crearea discuției';
$lang['project_activity_updated_discussion']           = 'Discuție actualizată';
$lang['project_activity_commented_on_discussion']      = 'A comentat discuția';
$lang['project_activity_deleted_discussion_comment']   = 'Ștergerea comentariului de discuție';
$lang['project_activity_deleted_milestone']            = 'Piatră de hotar șters';
$lang['project_activity_updated_milestone']            = 'Piatră de hotar actualizată';
$lang['project_activity_created_milestone']            = 'Crearea unui nou punct de reper';
$lang['project_activity_invoiced_project']             = 'Proiect facturat';
$lang['project_activity_task_marked_complete']         = 'Sarcina este marcată ca completă';
$lang['project_activity_task_unmarked_complete']       = 'Sarcina nu este marcată ca completă';
$lang['project_activity_task_deleted']                 = 'Sarcina a fost ștearsă';
$lang['project_activity_new_task_comment']             = 'A comentat o sarcină';
$lang['project_activity_new_task_attachment']          = 'A fost atașat atașat la sarcină';
$lang['project_activity_new_task_assignee']            = 'Adăugat nou asignător de sarcină';
$lang['project_activity_task_assignee_removed']        = 'Eliminat cesionarul de activitate';
$lang['project_activity_task_timesheet_deleted']       = 'Eliminată foaia de pontaj';
$lang['project_activity_uploaded_file']                = 'Inserați fișierul de proiect';
$lang['project_activity_status_updated']               = 'Starea actualizată a proiectului';
$lang['project_activity_visible_to_customer']          = 'Vizibilă pentru client';
$lang['project_activity_project_file_removed']         = 'Eliminat fișierul de proiect';

# Customers area
$lang['clients_my_estimates']                                  = 'Estimari';
$lang['client_no_reply']                                       = 'Fara raspuns';
$lang['clients_nav_projects']                                  = 'Proiecte';
$lang['clients_my_projects']                                   = 'Proiecte';
$lang['client_profile_image']                                  = 'Imagine de profil';
$lang['sales_report_cancelled_invoices_not_included']          = 'Facturile anulate sunt excluse din raport';
$lang['invoices_merge_cancel_merged_invoices']                 = 'Marcați facturile fuzionate ca fiind anulate în loc să le ștergeți';
$lang['invoice_marked_as_cancelled_successfully']              = 'Factura marcată ca anulată cu succes';
$lang['invoice_unmarked_as_cancelled']                         = 'Factura neimaginată ca anulată cu succes';
$lang['tasks_reminder_notification_before']                    = 'Întârzierea termenului de înscriere la sarcină înainte (Zile)';
$lang['not_task_deadline_reminder']                            = 'Întâlnire cu termenul limită pentru sarcină';
$lang['dt_length_menu_all']                                    = 'Toate';
$lang['task_not_finished']                                     = 'Incomplet';
$lang['task_billed_cant_start_timer']                          = 'Sarcina facturată. Timerul nu poate începe';
$lang['invoice_task_billable_timers_found']                    = 'Ceasurile începute au fost găsite';
$lang['project_timesheet_not_updated']                         = 'Foaia de lucru nu a fost afectată';
$lang['project_invoice_task_no_timers_found']                  = 'Nu au fost găsite cronometre pentru această sarcină';
$lang['invoice_project_tasks_not_started']                     = 'Nu a început încă | Data de începere: %s';
$lang['invoice_project_see_billed_tasks']                      = 'Vedeți sarcinile care vor fi facturate pe această factură';
$lang['invoice_project_all_billable_tasks_marked_as_finished'] = 'Toate sarcinile facturate vor fi marcate ca terminate';
$lang['invoice_project_nothing_to_bill']                       = 'Nu există sarcini de facturare. Simțiți-vă liber să adăugați tot ce doriți în elementele facturii.';
$lang['invoice_project_start_date_tasks_not_passed']           = 'Sarcini cu data de începere viitoare nu pot fi facturate';
$lang['invoice_project_stop_all_timers']                       = 'Opriți toate cronometrele';
$lang['invoice_project_stop_billable_timers_only']             = 'Opriți numai cronometrele facturabile';
$lang['project_tasks_total_timers_stopped']                    = 'S-au oprit cronometrele totale %s';
$lang['project_invoice_timers_started']                        = 'Cronometrele de sarcină găsite care rulează pe sarcini facturabile, factura nu poate fi creată. Opriți cronometrele de sarcină pentru a crea factură.';
$lang['task_start_timer_only_assignee']                        = 'Trebuie să fiți repartizat pe această sarcină pentru a începe temporizatorul!';
$lang['task_comments']                                         = 'Comentarii';
$lang['invoice_total_tax']                                     = 'Taxa totală';
$lang['estimates_total_tax']                                   = 'Taxa totală';
$lang['report_invoice_total_tax']                              = 'Taxa totală';
$lang['home_tickets']                                          = 'Tichete';
$lang['home_project_activity']                                 = 'Ultima activitate a proiectului';
$lang['view_tracking']                                         = 'Urmărirea vizionărilor';
$lang['view_date']                                             = 'Data';
$lang['view_ip']                                               = 'Adresa IP';
$lang['article_total_views']                                   = 'Vizualizări totale';
$lang['leads_source']                                          = 'Sursă';
$lang['invoices_available_for_merging']                        = 'Facturile disponibile pentru fuziune';
$lang['invoices_merge_discount']                               = 'Va trebui să aplicați manual reducerea totală %s la această factură';
$lang['invoice_merge_number_warning']                          = 'Împrospătarea facturilor va crea lacune în numerele facturilor. Vă rugăm să nu combinați facturile dacă nu doriți să aveți lacune în istoricul facturii. De asemenea, aveți opțiunea de a ajusta manual numerele de factură dacă doriți să umpleți golurile.';
$lang['invoice_mark_as']                                       = 'Marcheaza ca %s';
$lang['invoice_unmark_as']                                     = 'Anulati marcarea %s';
$lang['invoice_status_cancelled']                              = 'Anulat';
$lang['tasks_reminder_notification_before_help']               = 'Notificați solicitanților sarcini cu privire la termenul limită înainte de X zile. Notificarea / e-mailul este trimisă numai la persoanele împuternicite. Dacă diferența dintre data de începere a activității și data de scadență a sarcinii este mai mică, atunci nu va fi trimisă nicio notificare în ziua reamintirii.';

# Version 1.1.0
$lang['project_invoice_select_all_tasks'] = 'Selecteaza toate sarcinile';
$lang['lead_company']                     = 'Companie';

# Version 1.1.1
$lang['admin_auth_forgot_password_button']       = 'Confirma';
$lang['task_assigned']                           = 'Atribuit';
$lang['switch_to_pipeline']                      = 'Treceți la conductăe';
$lang['switch_to_list_view']                     = 'Treceți la listă';
$lang['estimates_pipeline']                      = 'Estimează conductele';
$lang['estimates_pipeline_sort']                 = 'Sorteaza dupa';
$lang['estimates_sort_expiry_date']              = 'Data expirarii';
$lang['estimates_sort_pipeline']                 = 'Ordine de conducte';
$lang['estimates_sort_datecreated']              = 'Daca crearii';
$lang['estimates_sort_estimate_date']            = 'Data estimata';
$lang['estimate_set_reminder_title']             = 'Setați Estimare Memento';
$lang['invoice_set_reminder_title']              = 'Setați memento-ul facturii';
$lang['estimate_reminders']                      = 'Mementouri';
$lang['invoice_reminders']                       = 'Mementouri';
$lang['estimate_notes']                          = 'Note';
$lang['estimate_add_note']                       = 'Adauga nota';
$lang['dropdown_non_selected_tex']               = 'Nimic nu a fost selectat';
$lang['auto_close_ticket_after']                 = 'Tichet de închidere automată după (Ore)';
$lang['event_description']                       = 'Descriere';
$lang['delete_event']                            = 'Sterge';
$lang['not_new_ticket_created']                  = 'Tichet nou deschis în departamentul dvs. - %s';
$lang['receive_notification_on_new_ticket']      = 'Primirea notificării privind deschiderea noului bilet';
$lang['receive_notification_on_new_ticket_help'] = 'Toți membrii personalului care aparțin departamentului de tichete vor primi notificarea că se deschide un nou bilet';
$lang['event_updated']                           = 'Eveniment actualizat cu succes';
$lang['customer_contacts']                       = 'Contacte';
$lang['new_contact']                             = 'Contact nou';
$lang['contact']                                 = 'Contact';
$lang['contact_lowercase']                       = 'contact';
$lang['contact_primary']                         = 'Contact primar';
$lang['contact_position']                        = 'Pozitie';
$lang['contact_active']                          = 'Activ';
$lang['client_company_info']                     = 'Detalii companie';
$lang['proposal_save']                           = 'Salveaza propunere';
$lang['calendar']                                = 'Calendar';
$lang['settings_pdf']                            = 'PDF';
$lang['settings_pdf_font']                       = 'PDF Font';
$lang['settings_pdf_table_heading_color']        = 'Culoarea titlului tabelului elementelor';
$lang['settings_pdf_table_heading_text_color']   = 'Culoarea textului titlului tabelului elementelor';
$lang['settings_pdf_font_size']                  = 'Dimensiunea implicită a fontului';
$lang['proposal_status_draft']                   = 'Schite';
$lang['custom_field_contacts']                   = 'Contacte';
$lang['company_primary_email']                   = 'Emailul principal';
$lang['client_register_contact_info']            = 'Informații primare de contact';
$lang['client_register_company_info']            = 'Informatiile Companiei';
$lang['contact_permissions_info']                = 'Asigurați-vă că ați stabilit permisiunile corespunzătoare pentru acest contact';
$lang['default_leads_kanban_sort']               = 'Implicit conduce ban ban sort';
$lang['default_leads_kanban_sort_type']          = 'Tip';
$lang['order_ascending']                         = 'Ascendent';
$lang['order_descending']                        = 'Descendent';
$lang['calendar_expand']                         = 'extind';
$lang['proposal_reminders']                      = 'Memento';
$lang['proposal_set_reminder_title']             = 'Setați mementoul pentru propunere';
$lang['settings_allowed_upload_file_types']      = 'Tipuri de fișiere permise';
$lang['no_primary_contact']                      = 'Acest client are contact primar. Trebuie să configurați datele de contact primare ca client. Sa recomandat tuturor clienților să aibă contacte primare.';
$lang['leads_merge_customer']                    = 'Câmpurile clienților care se îmbină';
$lang['leads_merge_contact']                     = 'Câmpurile de contact care fuzionează';
$lang['leads_merge_as_contact_field']            = 'Imbina ca câmp de contact';
$lang['lead_convert_to_client_phone']            = 'Telefon';
$lang['invoice_status_report_all']               = 'Toate';
$lang['import_contact_field']                    = 'Camp de contact';
$lang['file_uploaded_success']                   = 'Nu există nici o eroare, fișierul încărcat cu succes';
$lang['file_exceeds_max_filesize']               = 'Fișierul încărcat depășește directiva upload_max_filesize în php.ini';
$lang['file_exceeds_maxfile_size_in_form']       = 'Fișierul încărcat depășește directiva MAX_FILE_SIZE specificată în formularul HTML';
$lang['file_uploaded_partially']                 = 'Fișierul încărcat a fost încărcat doar parțial';
$lang['file_not_uploaded']                       = 'Nu a fost încărcat niciun fișier';
$lang['file_missing_temporary_folder']           = 'Lipsește un dosar temporar';
$lang['file_failed_to_write_to_disk']            = 'Eroare la scrierea fișierului pe disc.';
$lang['file_php_extension_blocked']              = 'O extensie PHP a oprit încărcarea fișierului.';
$lang['calendar_expand']                         = 'extinde';
$lang['view_pdf']                                = 'Vizualizea-za PDF';
$lang['expense_repeat_every']                    = 'Repetați fiecare';

# Version 1.1.2
$lang['leads_switch_to_kanban']                   = 'Vizualizare KanBan';
$lang['contract_content']                         = 'Contract';
$lang['contract_save']                            = 'Salvați contractul';
$lang['contract_send_to_email']                   = 'Trimite pe email';
$lang['contract_send_to_client_modal_heading']    = 'Trimiteți un contract la e-mail';
$lang['contract_send_to']                         = 'Trimite catre';
$lang['contract_send_to_client_attach_pdf']       = 'Atașați PDF';
$lang['contract_send_to_client_preview_template'] = 'Examinați șablonul de e-mail';
$lang['include_attachments_to_email']             = 'Includeți atașamentele la e-mail';
$lang['contract_sent_to_client_success']          = 'Contractul este trimis cu succes clientului';
$lang['contract_sent_to_client_fail']             = 'Nu a reușit să trimită contractul';

# Version 1.1.3
$lang['client_invalid_username_or_password'] = 'Nume de utilizator sau parola incorecte';
$lang['client_old_password_incorrect']       = 'Vechea dvs. parolă este incorectă';
$lang['client_password_changed']             = 'Parola dvs. a fost schimbată';

# Version 1.1.4
$lang['total_leads_deleted']                              = 'Totalul conducătorilor a fost șters: %s';
$lang['total_clients_deleted']                            = 'Numărul total de clienți eliminați: %s';
$lang['confirm_action_prompt']                            = 'Sigur doriți să efectuați această acțiune?';
$lang['mass_delete']                                      = 'Ștergere in masă';
$lang['email_protocol']                                   = 'Protocolul de e-mail';
$lang['add_edit_members']                                 = 'Adăugați / editați membri';
$lang['project_overview_logged_hours']                    = 'Ora logate:';
$lang['project_overview_billable_hours']                  = 'Orele facturabile:';
$lang['project_overview_billed_hours']                    = 'Orele facturate:';
$lang['project_overview_unbilled_hours']                  = 'Ore nedecupate:';
$lang['calendar_first_day']                               = 'Prima zi';
$lang['permission_view']                                  = 'Vizualizeaza';
$lang['permission_edit']                                  = 'Editeaza';
$lang['permission_create']                                = 'Creaza';
$lang['permission_delete']                                = 'Sterge';
$lang['permission']                                       = 'Permisiune';
$lang['permissions']                                      = 'Permisiuni';
$lang['proposals_pipeline']                               = 'Propunere de conducte';
$lang['proposals_pipeline_sort']                          = 'Sortați după';
$lang['proposals_sort_open_till']                         = 'Deschidere până la capăt';
$lang['proposals_sort_pipeline']                          = 'Ordine de conducte';
$lang['proposals_sort_datecreated']                       = 'Data creării';
$lang['proposals_sort_proposal_date']                     = 'Data propunerii';
$lang['is_not_staff_member']                              = 'Nu este membru al personalului';
$lang['lead_created']                                     = 'Creat';
$lang['access_tickets_to_none_staff_members']             = 'Permiteți accesul la tichete pentru membrii care nu sunt membri ai personalului';
$lang['project_expenses']                                 = 'Cheltuieli';
$lang['expense_currency']                                 = 'Valuta';
$lang['currency_valid_code_help']                         = 'Asigurați-vă că introduceți codul ISO valid.';
$lang['week']                                             = 'Saptamana';
$lang['weeks']                                            = 'Saptamani';
$lang['month']                                            = 'Luna';
$lang['months']                                           = 'Luni';
$lang['year']                                             = 'An';
$lang['years']                                            = 'Ani';
$lang['expense_report_category']                          = 'Categorie';
$lang['expense_paid_via']                                 = 'Plateste cu %s';
$lang['item_as_expense']                                  = '[Cheltuială]';
$lang['show_help_on_setup_menu']                          = 'Afișați elementul de meniu de ajutor din meniul de configurare';
$lang['customers_summary_total']                          = 'Total Clienți';
$lang['filter_by']                                        = 'Filtreaza dupa';
$lang['re_captcha']                                       = 'reCAPTCHA';
$lang['recaptcha_site_key']                               = 'SCheia pentru site';
$lang['recaptcha_secret_key']                             = 'Cheie secretă';
$lang['recaptcha_error']                                  = 'Câmpul reCAPTCHA spune că sunteți un robot.';
$lang['smtp_username']                                    = 'Numele de utilizator SMTP';
$lang['smtp_username_help']                               = 'FCompletați numai dacă clienții dvs. de e-mail utilizează numele de utilizator pentru conectarea SMTP.';
$lang['pinned_project']                                   = 'Proiectat';
$lang['pin_project']                                      = 'Pin Project';
$lang['unpin_project']                                    = 'Deschideți Proiectul';
$lang['smtp_encryption']                                  = 'Criptarea de e-mail';
$lang['smtp_encryption_none']                             = 'Nici unul';
$lang['show_proposals_on_calendar']                       = 'Propuneri';
$lang['invoice_project_see_billed_expenses']              = 'Vedeți cheltuielile vor fi facturate pe această factură';
$lang['project_overview_expenses']                        = 'Cheltuieli totale';
$lang['project_overview_expenses_billable']               = 'Cheltuieli facturabile';
$lang['project_overview_expenses_billed']                 = 'Cheltuieli facturate';
$lang['project_overview_expenses_unbilled']               = 'Cheltuieli nesolicitate';
$lang['announcement_date_list']                           = 'data';
$lang['project_setting_view_finance_overview']            = 'consultați prezentarea generală a finanțelor';
$lang['show_all_tasks_for_project_member']                = 'Permiteți tuturor angajaților să vadă toate sarcinile legate de proiecte (inclusiv non-personal)';
$lang['not_staff_added_as_project_member']                = 'Te-a adăugat ca membru al proiectului';
$lang['report_expenses_base_currency_select_explanation'] = 'Trebuie să selectați moneda din cauza sistemelor diferite valute utilizate pentru cheltuieli.';

# Version 1.1.6
$lang['project_activity_recorded_expense']   = 'Cheltuielile înregistrate';
$lang['save_customer_and_add_contact']       = 'Salvați și creați un contact';
$lang['tickets_chart_weekly_opening_stats']  = 'Statistici săptămânale';
$lang['related_knowledgebase_articles']      = 'Articole similare';
$lang['detailed_overview']                   = 'Prezentarea sarcinilor';
$lang['tasks_total_checklists_finished']     = 'Articolele din lista de verificare au fost marcate ca terminate';
$lang['tasks_total_added_attachments']       = 'Au fost adăugate atașamente atașate';
$lang['tasks_total_comments']                = 'Comentarii totale';
$lang['task_finished_on_time']               = 'Finalizat la timp?';
$lang['task_finished_on_time_indicator']     = 'Da';
$lang['task_not_finished_on_time_indicator'] = 'Nu';
$lang['filter']                              = 'Filtru';
$lang['task_filter_detailed_all_months']     = 'Toate lunile';
$lang['kb_article_slug']                     = 'Slug';

# Version 1.1.7
$lang['email_template_ticket_warning']          = 'Câmpurile nu vor fi înlocuite.';
$lang['auto_stop_tasks_timers_on_new_timer']    = 'Opriți toți ceilalți cronometre porniți când porniți un nou cronometru';
$lang['notification_when_customer_pay_invoice'] = 'Primirea notificării atunci când factura plătească clientul (built-in)';
$lang['not_invoice_payment_recorded']           = 'Plata pe factură nouă - %s';
$lang['email_template_contact_warning']         = 'Dacă contactul nu este înregistrat în timpul acțiunii, câmpurile de îmbinare a contactelor nu vor fi înlocuite.';
$lang['change_role_permission_warning']         = 'Modificarea permisiunilor de rol care afectează membrii personalului actual';
$lang['task_copied_successfully']               = 'Activitatea a fost copiată cu succes';
$lang['failed_to_copy_task']                    = 'Copierea sarcinii nu a reușit';
$lang['not_project_file_uploaded']              = 'S-a adăugat un nou fișier de proiect';
$lang['settings_calendar_color']                = '%s Culoare';
$lang['settings_calendar_colors_heading']       = 'Stilizare';
$lang['reminder']                               = 'Memento';
$lang['back_to_tasks_list']                     = 'Înapoi la lista de sarcini';
$lang['copy_task_confirm']                      = 'Confirma';
$lang['changing_items_affect_warning']          = 'Modificarea informațiilor despre elemente nu afectează factura / estimările / propunerile create.';
$lang['tax_is_used_in_expenses_warning']        = 'Nu puteți actualiza acest impozit datorat.';
$lang['note']                                   = 'Nota';
$lang['leads_staff_report_converted']           = 'Total conducători convertiți';
$lang['leads_staff_report_created']             = 'Total conducători creați';
$lang['leads_staff_report_lost']                = 'Total conducatori pierduti';
$lang['client_go_to_dashboard']                 = 'Înapoi la portal';
$lang['show_estimate_reminders_on_calendar']    = 'Estimați mementouri';
$lang['show_invoice_reminders_on_calendar']     = 'Facturi de memento';
$lang['show_proposal_reminders_on_calendar']    = 'Propuneri de reamintire';
$lang['calendar_estimate_reminder']             = 'Estimati memento';
$lang['calendar_invoice_reminder']              = 'Amintește-ți factura';
$lang['calendar_proposal_reminder']             = 'Propunere de memento';
$lang['proposal_due_after']                     = 'Propunere datorată după (zile)';
$lang['project_progress']                       = 'Progres';
$lang['calculate_progress_through_tasks']       = 'Calculați progresul prin sarcini';
$lang['allow_customer_to_change_ticket_status'] = 'Permiteți clientului să schimbe starea tichetelor din zona clienților';
$lang['switch_to_general_report']               = 'Treceți la raportul de personal';
$lang['switch_to_staff_report']                 = 'Treceți la raportul general';
$lang['generate']                               = 'Genereaza';
$lang['from_date']                              = 'Din data';
$lang['to_date']                                = 'Pana in prezenet';
$lang['not_results_found']                      = 'Nu s-au găsit rezultate';
$lang['lead_lock_after_convert_to_customer']    = 'Nu permiteți editarea plumbului după conversia la client (administratorii nu au fost aplicați)';
$lang['default_pipeline_sort']                  = 'Implicit sortarea conductei';
$lang['toggle_full_view']                       = 'Comutați vizualizarea completă';
$lang['not_estimate_invoice_deleted']           = 'a șters factura creată';
$lang['not_task_new_comment']                   = 'a comentat despre sarcina %s';

# Version 1.1.8
$lang['invoice_number_exists']                  = 'Acest număr de factură există pentru anul în curs.';
$lang['estimate_number_exists']                 = 'Acest număr estimativ există pentru anul în curs.';
$lang['email_exists']                           = 'E-mailul există deja';
$lang['not_uploaded_project_file']              = 'Fișier nou încărcat';
$lang['not_created_new_project_discussion']     = 'A fost creată o nouă discuție de proiect';
$lang['not_commented_on_project_discussion']    = 'Comentariu nou privind discuțiile asupra proiectului';
$lang['all_staff_members']                      = 'Toți membrii personalului';
$lang['help_project_permissions']               = 'VIEW permite membrilor personalului să vadă toate proiectele. Dacă sunteți în căutarea unor proiecte care le sunt atribuite (adăugate ca membri), nu acordați permisiuni VIEW.';
$lang['help_tasks_permissions']                 = 'VIEW permite membrilor personalului să vadă TOATE sarcinile. Dacă doriți să le dați doar sarcinile, nu vi se atribuie permisiuni VIEW.';
$lang['expense_recurring_days']                 = 'Zi(e)';
$lang['expense_recurring_weeks']                = 'Saptamana(i)';
$lang['expense_recurring_months']               = 'Luna(i)';
$lang['expense_recurring_years']                = 'An(i)';
$lang['reset_to_default_color']                 = 'Resetați la culoarea prestabilită';
$lang['pdf_logo_width']                         = 'Logo Lățime (PX)';
$lang['drop_files_here_to_upload']              = 'Drop fișierele aici pentru a le încărca';
$lang['browser_not_support_drag_and_drop']      = 'Browserul dvs. nu acceptă încărcarea fișierelor de tip drag  \'n \'';
$lang['remove_file']                            = 'Eliminați fișierul';
$lang['you_can_not_upload_any_more_files']      = 'Nu mai puteți încărca fișiere';
$lang['custom_field_only_admin']                = 'Limitați vizibilitatea numai pentru administratori';
$lang['leads_default_source']                   = 'Sursă standard';
$lang['clear_activity_log']                     = 'Clear log';
$lang['default_contact_permissions']            = 'Permisiuni de contact implicite';
$lang['invoice_activity_marked_as_cancelled']   = 'factura marcată ca anulată';
$lang['invoice_activity_unmarked_as_cancelled'] = 'neefectuată factură ca anulată';
$lang['wait_text']                              = 'Vă rugăm să așteptați ...';
$lang['projects_summary']                       = 'Rezumatul Proiectelor';
$lang['dept_imap_host']                         = 'Gazdă IMAP';
$lang['dept_encryption']                        = 'Criptare';
$lang['dept_email_password']                    = 'Parola';
$lang['dept_email_no_encryption']               = 'Fără criptare';
$lang['failed_to_decrypt_password']             = 'Nu a reușit să decripteze parola';
$lang['delete_mail_after_import']               = 'Ștergeți poșta după import?';
$lang['expiry_reminder_enabled']                = 'Trimiteți memento de expirare';
$lang['send_expiry_reminder_before']            = 'Trimiteți un memento de expirare înainte (ZILE)';
$lang['not_expiry_reminder_sent']               = 'A fost trimis un memento de expirare';
$lang['send_expiry_reminder']                   = 'Amintește expirarea expediției';
$lang['sent_expiry_reminder_success']           = 'Explicația a fost trimisă cu succes';
$lang['sent_expiry_reminder_fail']              = 'Nu a putut fi trimis un memento de expirare';
$lang['leads_default_status']                   = 'Stare implicita';
$lang['item_description_placeholder']           = 'Descrierea';
$lang['item_long_description_placeholder']      = 'Descrierea lungă';
$lang['item_quantity_placeholder']              = 'Cantitate';
$lang['item_rate_placeholder']                  = 'Rata';
$lang['tickets_summary']                        = 'Rezumat tichete';
$lang['tasks_list_priority']                    = 'Prioritate';
$lang['ticket_status_db_2']                     = 'In progres';
$lang['ticket_status_db_1']                     = 'Deschise';
$lang['ticket_status_db_3']                     = 'Raspunse';
$lang['ticket_status_db_4']                     = 'In asteptare';
$lang['ticket_status_db_5']                     = 'Inchise';
$lang['ticket_priority_db_1']                   = 'Scazut';
$lang['ticket_priority_db_2']                   = 'Mediu';
$lang['ticket_priority_db_3']                   = 'Mare';
$lang['customer_have_projects_by']              = 'Conține proiecte în funcție de starea %s';
$lang['customer_have_proposals_by']             = 'Conține propuneri după statutul %s';
$lang['do_not_redirect_payment']                = 'Nu mă redirecționa la procesatorul de plăți';
$lang['project_tickets']                        = 'Tichete';
$lang['invoice_report']                         = 'Raportul facturilor';
$lang['payment_modes_report']                   = 'Moduri de plată (tranzacții)';
$lang['customer_admins']                        = 'Administratori de clienti';
$lang['assign_admin']                           = 'Atribuiți admin';
$lang['customer_admin_date_assigned']           = 'Data atribuită';
$lang['customer_admin_login_as_client_message'] = 'Bună ziua %s. Sunteți adăugat (ă) ca administrator pentru acest client.';
$lang['ticket_form_validation_file_size']       = 'Dimensiunea fișierului trebuie să fie mai mică de %s';
$lang['has_transactions_currency_base_change']  = 'Schimbarea monedei de bază este posibilă numai dacă nu există tranzacții înregistrate în acea monedă. Ștergeți tranzacțiile pentru a modifica moneda de bază';
$lang['customers_sort_all']                     = 'Toate';

# Version 1.1.9
$lang['use_recaptcha_customers_area']    = 'Permiteți recaptcha pe zona clienților (Login / Register)';
$lang['project_marked_as_finished']      = 'Proiect finalizat';
$lang['project_status_updated']          = 'Starea proiectului a fost actualizată';
$lang['remove_decimals_on_zero']         = 'Eliminați zecimalele pe numere / bani cu zero zecimale (2,00 va deveni 2, 2,25 va rămâne 2,25)';
$lang['remove_tax_name_from_item_table'] = 'Eliminați numele taxei din rândul tabelului de elemente';

# Version 1.2.0
$lang['not_billable_expenses_by_categories']      = 'Nu sunt facturate cheltuielile pe categorii';
$lang['billable_expenses_by_categories']          = 'Cheltuielile facturate pe categorii';
$lang['format_letter_size']                       = 'A4 Peisaj';
$lang['pdf_formats']                              = 'Formatele de documente';
$lang['swap_pdf_info']                            = 'Schimbați compania / detaliile clienților (detalii despre companie în partea dreaptă, detalii despre clienți în partea stângă)';
$lang['expenses_filter_by_categories']            = 'Dupa categorii';
$lang['task_copy']                                = 'Copiaza';
$lang['estimate_status']                          = 'Stare';
$lang['expenses_report_exclude_billable']         = 'Excluderea cheltuielilor facturabile';
$lang['expenses_total']                           = 'Total';
$lang['estimate_activity_added_attachment']       = 'Atasare adaugata';
$lang['show_to_customer']                         = 'Arata clientului';
$lang['hide_from_customer']                       = 'Ascunde de client';
$lang['expenses_report_total']                    = 'Total';
$lang['expenses_report']                          = 'Raportul privind cheltuielile';
$lang['expenses_report_total_tax']                = 'Taxa totala';
$lang['expenses_detailed_report']                 = 'Raport detaliat';
$lang['expense_not_billable']                     = 'Nu este facturabil';
$lang['notification_settings']                    = 'Setări de notificare';
$lang['staff_with_roles']                         = 'Membrii personalului cu roluri';
$lang['specific_staff_members']                   = 'Membrii personalului specific';
$lang['proposal_mark_as']                         = 'Marcheaza ca %s';
$lang['kb_report_total_answers']                  = 'Total';
$lang['ticket_message_edit']                      = 'Editeaza';
$lang['invoice_files']                            = 'Fișiere factură';
$lang['estimate_files']                           = 'Estimați fișierele';
$lang['proposal_files']                           = 'Fișiere propuse';
$lang['invoices_awaiting_payment']                = 'Facturi în așteptarea plății';
$lang['tasks_not_finished']                       = 'Sarcinile nu au fost finalizate';
$lang['outstanding_invoices']                     = 'Facturi excepționale';
$lang['past_due_invoices']                        = 'Datorii scadente datorate';
$lang['paid_invoices']                            = 'Facturi platite';
$lang['invoice_estimate_year']                    = 'An';
$lang['task_stats_logged_hours']                  = 'Ore logate';
$lang['leads_converted_to_client']                = 'Conducători convertiți';
$lang['task_assigned_from']                       = 'Această sarcină vă este atribuită de %s';
$lang['new_note']                                 = 'Nota noua';
$lang['my_tickets_assigned']                      = 'Tichetele sunt alocate';
$lang['filter_by_assigned']                       = 'Membru alocat';
$lang['staff_stats_total_logged_time']            = 'Timp total înregistrat';
$lang['staff_stats_last_month_total_logged_time'] = 'Ultima luna înregistrată';
$lang['staff_stats_this_month_total_logged_time'] = 'Timpul înregistrat în această lună';
$lang['staff_stats_last_week_total_logged_time']  = 'Ultima săptămână înregistrată';
$lang['staff_stats_this_week_total_logged_time']  = 'Timpul înregistrat în această săptămână';
// Dont change this because are translated before for the projects timesheets and now are only used for readability.
$lang['timesheet_user']       = $lang['project_timesheet_user'];
$lang['timesheet_start_time'] = $lang['project_timesheet_start_time'];
$lang['timesheet_end_time']   = $lang['project_timesheet_end_time'];
$lang['timesheet_time_spend'] = $lang['project_timesheet_time_spend'];
$lang['task_timesheets']      = $lang['project_timesheets'];
$lang['task_log_time_start']  = $lang['project_timesheet_start_time'];
$lang['task_log_time_end']    = $lang['project_timesheet_end_time'];
$lang['task_single_log_user'] = $lang['project_timesheet_user'];

# Version 1.2.2
$lang['milestone_description']                  = 'Descriere';
$lang['description_visible_to_customer']        = 'Afișați descrierea clientului';
$lang['upcoming_tasks']                         = 'Sarcinile viitoare';
$lang['payment_credit_card_number']             = 'Numărul cardului';
$lang['payment_credit_card_expiration_date']    = 'Data de expirare';
$lang['payment_billing_email']                  = 'Email';
$lang['submit_payment']                         = 'Trimiteți plata';
$lang['custom_field_disallow_customer_to_edit'] = 'Împiedicați clientul să editeze acest câmp';
$lang['project_due_notice']                     = 'Acest proiect este întârziat cu %s zile';
$lang['not_lead_added_attachment']              = 'a adăugat un atașament nou pentru a conduce %s';
$lang['lead_note_date_added']                   = 'Notă adăugată: %s';
$lang['recurring_custom']                       = 'Custom';
// don't translate these, only added for better readability already translated for the expenses custom recurring feature.
$lang['invoice_recurring_months'] = $lang['expense_recurring_months'];
$lang['invoice_recurring_years']  = $lang['expense_recurring_years'];
$lang['invoice_recurring_days']   = $lang['expense_recurring_days'];
$lang['invoice_recurring_weeks']  = $lang['expense_recurring_weeks'];

# Version 1.2.4
$lang['document_direction']                                 = 'Directie';
$lang['notify_project_members_status_change']               = 'Notificați membrilor proiectului că statutul este schimbat';
$lang['not_project_status_updated']                         = 'Starea proiectului a fost actualizată de la %s la %s';
$lang['ticket_not_found']                                   = 'Tichetul nu a fost găsit';
$lang['project_not_found']                                  = 'Poriectul nu a fost găsit';
$lang['export_project_data']                                = 'Exportați datele proiectului';
$lang['total_project_members']                              = 'Total membri ai proiectului';
$lang['total_project_files']                                = 'Fișiere atașate';
$lang['total_project_discussions_created']                  = 'Discuțiile au fost create';
$lang['project_member']                                     = 'Membru';
$lang['total_project_discussions_comments']                 = 'Comentariile totale de discuție';
$lang['staff_total_task_assigned']                          = 'Sarcini totale atribuite';
$lang['staff_total_comments_on_tasks']                      = 'Comentarii privind sarcinile';
$lang['project_members_overview']                           = 'Prezentarea membrilor proiectului';
$lang['project_milestones_overview']                        = 'Prezentare generală a obiectivelor';
$lang['total_tasks_in_milestones']                          = 'Sarcini totale atribuite';
$lang['total_task_members_assigned']                        = 'Total membri alocați';
$lang['total_task_members_followers']                       = 'Total adepți';
$lang['total_milestones']                                   = 'Total Etape Proiect';
$lang['total_project_worked_days']                          = 'Numărul total de zile lucrate';
$lang['finance_overview']                                   = 'Prezentare financiară';
$lang['project_custom_fields']                              = 'Câmpuri customizate';
$lang['total_tickets_related_to_project']                   = 'Tichete totale legate de proiect';
$lang['projects_total_invoices_created']                    = 'Total facturi create';
$lang['do_not_send_invoice_payment_email_template_contact'] = 'Nu trimiteți facturi plătite e-mailuri înregistrate contactelor clienților';
$lang['no_preview_available_for_file']                      = 'Nu există previzualizare disponibilă pentru acest fișier.';
$lang['project_activity_deleted_file_discussion_comment']   = 'Comentariul discuției despre subiect a fost șters';
$lang['email_template_discussion_info']                     = 'Acest șablon este utilizat pentru e-mailurile de comentarii de discuții de proiect. (discuții despre dosare și discuții regulate)';
$lang['format_a4_portrait_size']                            = 'Portret';
$lang['only_show_contact_tickets']                          = 'În zona clienților se afișează numai tichete legate de contactul înregistrat (contactul primar nu a fost aplicat)';
$lang['cancel_overdue_reminders_invoice']                   = 'Împiedicați trimiterea memento-urilor restante pentru această factură';
$lang['customer_shipping_address_notice']                   = 'Nu completați informațiile despre adresa de expediere dacă nu veți utiliza adresa de expediere pe facturile clienților';
$lang['timesheets_overview']                                = 'Analiza foilor de parcurs';
$lang['invoice_status_draft']                               = 'Ciorna';
$lang['save_as_draft']                                      = 'Salvează ca ciornă';
$lang['convert_and_save_as_draft']                          = 'Converteste și salvarea ca schiță';
$lang['convert']                                            = 'Converteste';
$lang['exclude_invoices_draft_from_client_area']            = 'Excludeți facturile cu status draft din zona clienților';
$lang['invoice_draft_status_info']                          = 'Această factură este cu statusul Proiect, statutul va fi automat modificat atunci când trimiteți factura clientului sau marcați ca trimis.';
$lang['task_info']                                          = 'Informații despre sarcină';
$lang['recurring_tasks']                                    = 'Recurringrecurent';
// don't translate these, already translated
$lang['task_repeat_every']                         = $lang['expense_repeat_every'];
$lang['task_recurring_months']                     = $lang['expense_recurring_months'];
$lang['task_recurring_years']                      = $lang['expense_recurring_years'];
$lang['task_recurring_days']                       = $lang['expense_recurring_days'];
$lang['task_recurring_weeks']                      = $lang['expense_recurring_weeks'];
$lang['todays_tasks']                              = 'Sarcinile de azi';
$lang['payment_mode_invoices_only']                = 'Numai facturi';
$lang['payment_mode_expenses_only']                = 'Numai cheltuieli';
$lang['task_no_checklist_items_found']             = 'Elementele de listă de verificare nu au fost găsite pentru această sarcină';
$lang['task_no_description']                       = 'Nu există o descriere a acestei sarcini';
$lang['expenses_reminders']                        = 'Mementouri';
$lang['expense_set_reminder_title']                = 'Stabiliți memento pentru cheltuieli';
$lang['calendar_expense_reminder']                 = 'Cheltuieli de reamintire';
$lang['recurring_task']                            = 'Sarcinile recurente';
$lang['disable_email_from_being_sent']             = 'Dezactivați trimiterea acestui e-mail';
$lang['not_sent_indicator']                        = 'Nu s-a trimis';
$lang['proposal_status_revised']                   = 'revăzut';
$lang['customer_currency_change_notice']           = 'Dacă clientul utilizează altă monedă decât moneda de bază, asigurați-vă că selectați moneda corespunzătoare pentru acest client. Modificarea valutei nu este posibilă după înregistrarea tranzacțiilor.';
$lang['click_to_add_content']                      = 'Faceți clic aici pentru a adăuga conținut';
$lang['related_to_project']                        = 'Acest %s este legat de %s: %s';
$lang['back_to_lead']                              = 'Înapoi la plumb';
$lang['add_task_timer_started_warning']            = 'Opriți cronometrul de pornire curent pentru această sarcină pentru a putea adăuga manual un cronometru nou.';
$lang['sending_email_contact_permissions_warning'] = 'Nu s-a putut selecta automat contactele clientului. Asigurați-vă că clientul are asociate persoanele de contact cu permisiunea %s';

# Version 1.2.6
$lang['currently_supported_currencies']                       = 'Monedele acceptate în prezent';
$lang['authorize_notice']                                     = 'SSL este necesară dacă utilizați API-ul de plată AIM Autorize.Net. Autorizarea.net acceptă numai 1 monedă per cont. Asigurați-vă că adăugați numai 1 monedă asociată contului dvs. de autorizare în câmpul valutelor.';
$lang['settings_paymentmethod_developer_mode']                = 'Modul dezvoltator';
$lang['payment_cardholder_name']                              = 'Numele titularului cardului';
$lang['settings_paymentmethod_authorize_api_login_id']        = 'API ID de conectare';
$lang['settings_paymentmethod_mollie_api_key']                = 'Cheie API';
$lang['settings_paymentmethod_authorize_api_transaction_key'] = 'ID de tranzacție API';
$lang['settings_paymentmethod_authorize_secret_key']          = 'Cheie secreta';
$lang['leads_report_converted_notice']                        = 'Numai conducătorii care aparțin stadiului implicit Clientul va fi luat ca conducători convertiți, dacă conducătorii aparțin clientului de stare implicit și clientul său nu este convertit în client va fi încă numărat ca plumb convertit';
$lang['payment_method']                                       = 'Modalitate de plată';
$lang['payment_method_info']                                  = 'Unele gateway-uri de plată acceptă metode de plată diferite / multiple precum Card de credit, PayPal, Bank.';

# Version 1.2.7
$lang['dropbox_app_key']                                    = 'Dropbox APP Key';
$lang['project_invoice_select_all_expenses']                = 'Selectați toate cheltuielile';
$lang['role_update_staff_permissions']                      = 'Actualizați toate permisiunile membrilor personalului care utilizează acest rol';
$lang['customer_active']                                    = 'Aciv';
$lang['note_updated_successfully']                          = 'Nota actualizata cu succes';
$lang['update_note']                                        = 'Actualizeaza nota';
$lang['update_comment']                                     = 'Actulizeaza comentariu';
$lang['comment_updated_successfully']                       = 'Comentariu actulizat cu succes';
$lang['staff_send_welcome_email']                           = 'Trimite email de bun venit';
$lang['proposal_warning_email_change']                      = 'E-mailul a fost modificat pentru %s. Acest %s este asociat propunerilor. Doriți să actualizați toate e-mailurile propuse legate de %s?';
$lang['update_proposal_email_yes']                          = 'Actualizați toate e-mailurile asociate.';
$lang['update_proposal_email_no']                           = 'Nu, voi actualiza manual.';
$lang['proposals_emails_updated']                           = 'Toate e-mailurile de propuneri legate de acest %s actualizate la %s';
$lang['custom_field_company']                               = 'Companie';
$lang['actions']                                            = 'Actiuni';
$lang['project_mark_as']                                    = 'Marcati ca %s';
$lang['todo_edit_title']                                    = 'Editați elementul todo';
$lang['additional_action_required']                         = 'Sunt necesare acțiuni suplimentare!';
$lang['project_mark_tasks_finished_confirm']                = 'Confirma';
$lang['project_marked_as_success']                          = 'Proiectul a fost marcat ca %s cu succes';
$lang['project_marked_as_failed']                           = 'Proiectul a eșuat ca %s';
$lang['auto_assign_customer_admin_after_lead_convert']      = 'Atribuiți automat ca administrator la client după conversie';
$lang['auto_assign_customer_admin_after_lead_convert_help'] = 'Dacă această opțiune este setată la DA, membrul personalului care a convertit duce la client va fi automat atribuit ca administrator de client. NOTĂ: Această opțiune se va aplica numai membrilor personalului care nu au permisiunea pentru clienții VIEW';
$lang['auto_close_tickets_disable']                         = 'Setați 0 pentru a dezactiva';
$lang['task_checklist_item_completed_by']                   = 'Finalizat de %s';
$lang['staff_email_signature_help']                         = 'Dacă se utilizează semnătura implicită de e-mail prestabilită din setări';
$lang['default_task_priority']                              = 'Prioritate prestabilită';
$lang['project_send_created_email']                         = 'Trimiteți e-mailul creat de proiect';

# Version 1.2.8
$lang['show_transactions_on_invoice_pdf']            = 'Afișați plățile pe factură (tranzacții) pe PDF';
$lang['bulk_actions']                                = 'Acțiuni în masă';
$lang['additional_filters']                          = 'Filtre suplimentare';
$lang['expenses_available_to_bill']                  = 'Cheltuieli disponibile pentru factura';
$lang['bulk_action_customers_groups_warning']        = 'Dacă nu selectați niciun grup, toate grupurile atribuite clienților selectați vor fi eliminați.';
$lang['customer_attachments_show_in_customers_area'] = 'Afișați zona clienților';
$lang['customer_attachments_show_notice']            = 'Numai fișierele încărcate din profilul clientului au capacitatea de a afișa / ascunde în zona clienților.';
$lang['customer_profile_files']                      = 'Fisiere';
$lang['no_files_found']                              = 'Nu s-a găsit niciun fisier';
$lang['custom_field_column']                         = 'Grilă (Bootstrap Column eq. 12) - Max este de 12';
$lang['task_status']                                 = 'Stare';
$lang['task_status_1']                               = 'Nu a inceput';
$lang['task_status_2']                               = 'Așteaptă feedback';
$lang['task_status_3']                               = 'Testarea';
$lang['task_status_4']                               = 'In progres';
$lang['task_status_5']                               = 'Complet';
$lang['task_mark_as']                                = 'Marcați ca %s';
$lang['task_marked_as_success']                      = 'Sarcina marcată ca %s cu succes';
$lang['search_tasks']                                = 'Cauta sarcina';
$lang['tasks_kanban_limit']                          = 'Limitați sarcinile kan ban rows per status';
$lang['show_on_invoice_on_pdf']                      = 'Afișați %s pe factura PDF';
$lang['show_pay_link_to_invoice_pdf']                = 'Afișați link-ul de facturare la PDF (nu este aplicat dacă starea facturii este anulată)';
$lang['no_leads_found']                              = 'Nu s-au găsit rezultate';
$lang['created_today']                               = 'Creat astăzi';
$lang['total_tasks_deleted']                         = 'Sarcini totale șterse: %s';
$lang['total_tickets_delete']                        = 'Tichete totale șterse: %s';
$lang['format_letter_portrait']                      = 'Scrisoare Portret';
$lang['format_letter_landscape']                     = 'Scrisoare peisaj';
$lang['period_datepicker']                           = 'Perioada';
$lang['total_by_hourly_rate']                        = 'Total prin rata orară';
$lang['staff_hourly_rate']                           = $lang['task_hourly_rate'];
// &#37; is for % so the system can confuse for the original fields like %s
$lang['remove_tax_name_from_item_table_help'] = 'echiv. Produsul TAX 15% va fi afișat ca 15% fără denumirea fiscală (Nu se aplică în cazul în care se aplică taxe multiple cu același nume și procentaj de impozitare pentru element)';
$lang['back_to_project']                      = 'Înapoi la proiect';
$lang['view_kanban']                          = 'Vezi Kan Ban';
$lang['invoice_is_overdue']                   = 'Această factură este reîncărcată cu %s zile';

# Version 1.2.9
$lang['time_decimal']                            = 'Timp (zecimal)';
$lang['time_h']                                  = 'Timp (h)';
$lang['proposal_number_prefix']                  = 'Numărul prefixului propunerii';
$lang['settings_number_padding_prefix']          = 'Plăcuță numerică zero pentru formatele prefixelor <br /> <small> eq. Dacă această valoare este 3, numărul va fi formatat: 005 sau 025 </ small>';
$lang['this_week_payments']                      = 'Plățile din această săptămână';
$lang['last_week_payments']                      = 'Plăți săptămâna trecută';
$lang['not_published_new_post']                  = 'a publicat un nou post';
$lang['expense_name']                            = 'Nume';
$lang['expense_name_help']                       = 'Pentru uz personal';
$lang['adjustments']                             = 'Ajustari';
$lang['payments_received']                       = 'Plățile primite';
$lang['not_lead_activity_created_proposal']      = 'Crearea propunerii noi - %s';
$lang['lead_title']                              = 'Pozitie';
$lang['lead_address']                            = 'Adresa';
$lang['lead_city']                               = 'Oras';
$lang['lead_state']                              = 'Stat';
$lang['lead_country']                            = 'Tara';
$lang['lead_zip']                                = 'Cod postal';
$lang['lead_is_public_yes']                      = 'Da';
$lang['lead_is_public_no']                       = 'Nu';
$lang['lead_info']                               = 'Plumb informații';
$lang['lead_general_info']                       = 'Informatii generale';
$lang['lead_latest_activity']                    = 'Ultima activitate';
$lang['item_description_new_lines_notice']       = 'Noile linii nu sunt acceptate pentru descrierea elementului. Utilizați în schimb elementul descriere lungă.';
$lang['estimates_report']                        = 'Raport Estimări';
$lang['confirm']                                 = 'Confirma';
$lang['delete_staff']                            = 'Șterge membrul personalului';
$lang['delete_staff_info']                       = 'Unele date pentru acest membru al personalului trebuie transferate altui utilizator. Selectați utilizatorul unde doriți să transferați datele.';
$lang['estimate_items']                          = 'Estimați elementele';
$lang['no_proposals_found']                      = 'Nu au fost găsite propuneri';
$lang['no_estimates_found']                      = 'Nu au fost găsite estimări';
$lang['pipeline_limit_status']                   = 'Conductă limită pe stadiu';
$lang['settings_update']                         = 'Actualizare de sistem';
$lang['purchase_key']                            = 'Cheie de achiziție';
$lang['update_now']                              = 'Actualizează acum';
$lang['update_available']                        = 'Este disponibilă o actualizare';
$lang['latest_version']                          = 'Ultima versiune';
$lang['your_version']                            = 'Versiunea ta';
$lang['using_latest_version']                    = 'Utilizați cea mai recentă versiune';
$lang['mark_as_active']                          = 'Marcați ca activ';
$lang['customer_inactive_message']               = 'Acesta este un profil de client inactiv și unele funcții pot fi dezactivate';
$lang['active_customers']                        = 'Clienții activi';
$lang['inactive_active_customers']               = 'Clienții inactivi';
$lang['include_proposal_items_merge_field_help'] = 'Includeți articolele propuse cu câmp de îmbinare oriunde în conținutul propunerii ca %s';
$lang['all_data_synced_successfully']            = 'Toate datele s-au sincronizat cu succes';
$lang['sync_now']                                = 'Sincronizați Acum';
$lang['sync_data']                               = 'Sincronizați datele';
$lang['sync_proposals_up_to_date']               = 'Toate propunerile sunt actualizate, nu se sincronizează nimic';
$lang['proposal_sync_1_info']                    = 'Toate datele propuse sunt stocate separat pentru fiecare propunere după creare. Actualizarea informațiilor %s nu va afecta propunerile create anterior pentru acest %s.';
$lang['proposal_sync_2_info']                    = 'Dacă ați actualizat recent informațiile% s, puteți sincroniza toate datele noi cu propunerile asociate. Iată o listă cu câmpurile pe care le puteți sincroniza.';

# Version 1.3.0
$lang['expense_include_additional_data_on_convert'] = 'Includeți detalii suplimentare pentru a descrie o descriere detaliată luată din această cheltuială.';

# Version 1.4.0
$lang['calendar_events_limit']                              = 'Calendar Limita evenimentelor (Vizualizare luna si saptmanai)';
$lang['show_page_number_on_pdf']                            = 'Afisati numarul paginii pe PDF';
$lang['customer_active_inactive_help']                      = 'Nu vor fi afisate in dropdown-uri atunci cand creati inregistrari noi';
$lang['item_groups']                                        = 'Grupuri';
$lang['item_group']                                         = 'Grupul de articole';
$lang['item_group_name']                                    = 'Numele grupului';
$lang['new_item_group']                                     = 'Grup nou';
$lang['show_setup_menu_item_only_on_hover']                 = 'Afisati elementul din meniul de configurare numai atunci cand plasati cursorul cu mouse-ul pe zona principala a barei laterale';
$lang['internal_article']                                   = 'Articol intern';
$lang['expenses_created_from_this_recurring_expense']       = 'Creat cheltuieli din aceasta cheltuiala periodica';
$lang['convert_to_task']                                    = 'Conversia la sarcina';
$lang['next_invoice_date']                                  = 'Data urmatoare a facturii: %s';
$lang['next_expense_date']                                  = 'Data urmatoarei cheltuieli: %s';
$lang['invoice_recurring_from']                             = 'Aceasta factura este creata din factura recurenta cu numarul: %s';
$lang['expense_recurring_from']                             = 'Aceasta cheltuiala este creata din urmatoarele cheltuieli recurente: %s';
$lang['child_invoices']                                     = 'Facturi pentru copii';
$lang['child_expenses']                                     = 'Cheltuielile pentru copii';
$lang['no_announcements']                                   = 'Nu exista anunturi';
$lang['unit']                                               = 'Unitate';
$lang['permission_view_own']                                = 'Vizualizare (proprie)';
$lang['permission_global']                                  = 'Global';
$lang['permission_customers_based_on_admins']               = 'Bazat pe administratorii de clienti';
$lang['permission_payments_based_on_invoices']              = 'Bazat pe facturile VIEW (permisiune proprie)';
$lang['permission_projects_based_on_assignee']              = 'Daca membrii personalului nu au permisiunea VIEW (Global) vor fi afisate numai proiectele in care membrul angajatului este adaugat ca membru al proiectului.';
$lang['permission_tasks_based_on_assignee']                 = 'Daca membrii personalului nu au permisiunea VIEW (Global) vor fi afisate doar sarcinile n care angajatul este urmarit, atribuit, sarcina este publica sau n Setup-> Settings-> Tasks-> Permiteti tuturor angajatilor sa vada toate sarcinile legate de proiecte la DA cand sarcina este legata de proiect.';
$lang['settings_paymentmethod_default_selected_on_invoice'] = 'Selectat implicit pe factura';
$lang['paymentmethod_braintree_merchant_id']                = 'ID-ul de comerciant';
$lang['paymentmethod_braintree_private_key']                = 'Cheia privata';
$lang['paymentmethod_braintree_public_key']                 = 'Cheia publica';
$lang['company_requires_vat_number_field']                  = 'Compania solicita utilizarea campului Numar TVA';
$lang['no_company_view_profile']                            = 'Persoana - vezi profilul';
$lang['company_is_required']                                = 'Domeniul companiei este necesar?';
$lang['estimate_invoiced']                                  = 'facturata';
$lang['file_date_uploaded']                                 = 'Data ncarcarii';
$lang['allow_contact_to_delete_files']                      = 'Permiteti contactelor sa sterga propriile fisiere ncarcate din zona clientilor';
$lang['file']                                               = 'FiÅŸier';
$lang['customer_contact_person_only_one_allowed']           = 'Doar 1 contact este permis atunci cand campul companiei nu este completat. Sistemul va arunca acest client ca persoana';
$lang['web_to_lead']                                        = 'Web pentru a conduce';
$lang['web_to_lead_form']                                   = 'Web pentru a conduce formularul';
$lang['new_form']                                           = 'Formular nou';
$lang['form_name']                                          = 'Numele formularului';
$lang['cf_option_in_use']                                   = 'O optiune pe care ati eliminat-o este utilizata si nu puteti canta. Optiunea este adaugata automat la optiunile existente.';
$lang['form_builder']                                       = 'Form Builder';
$lang['form_information']                                   = 'Informatii si configurare formular';
$lang['form_builder_create_form_first']                     = 'Creati primul formular pentru a putea utiliza formatul de formular.';
$lang['notify_assigned_user']                               = 'Persoana responsabila';
$lang['form_recaptcha']                                     = 'Utilizati Google Recaptcha';
$lang['form_lang_validation']                               = 'Limba';
$lang['form_lang_validation_help']                          = 'Pentru mesaje de validare';
$lang['form_btn_submit_text']                               = 'Trimiteti textul butonului';
$lang['form_success_submit_msg']                            = 'Mesajul de afisat dupa formular este trimis n mod succint';
$lang['total_submissions']                                  = 'Total Submissions';
$lang['form_integration_code']                              = 'Codul de integrare';
$lang['not_lead_imported_from_form']                        = 'Lead nou introdus de la Web la formularul de plumb - %s';
$lang['not_lead_activity_log_attachment']                   = 'Atasament Importat din formular - %s';
$lang['form_integration_code_help']                         = 'Copiati & lipiti codul oriunde pe site pentru a afisa formularul; n plus, puteti ajusta latimea si naltimea px pentru a se potrivi site-ului dvs. web.';
$lang['invoice_not_found']                                  = 'Factura nu a fost găsita';
$lang['estimate_not_found']                                 = 'Estimarea nu a fost găsita';
$lang['expense_not_found']                                  = 'Cheltuielile nu au fost găsite';
$lang['proposal_not_found']                                 = 'Propunerea nu a fost găsita';
$lang['new_task_assigned_non_user']                         = 'Noua sarcina va este atribuita - %s';
$lang['no_child_found']                                     = 'Nu a fost găsit copil %s';
$lang['company_vat_number']                                 = 'TVA';
$lang['not_lead_assigned_from_form']                        = 'O noua conducere va este atribuita';
$lang['not_lead_activity_assigned_from_form']               = 'Plumb atribuit %s';
$lang['form_allow_duplicate']                               = 'Permiteti copierea %s duplicat n baza de date?';
$lang['track_duplicate_by_field']                           = 'Preveniti duplicarea pe camp';
$lang['and_track_duplicate_by_field']                       = '+ camp (lasati necompletat pentru a urmari duplicatele numai cu un camp)';
$lang['create_the_duplicate_form_data_as_task']             = 'Creati date duplicate %s ca sarcina si alocati angajatului responsabil';
$lang['create_the_duplicate_form_data_as_task_help']        = 'Utilizati pentru o examinare ulterioara a prezentarii si luati masurile necesare';
$lang['currently_selected']                                 = 'Selectionate n prezent';
$lang['search_ajax_empty']                                  = 'Selectati si ncepeti sa tastati';
$lang['search_ajax_placeholder']                            = 'Tastati pentru a cauta...';
$lang['search_ajax_searching']                              = 'In cautarea...';
$lang['search_ajax_initialized']                            = 'Incepeti sa tastati pentru a cauta';
$lang['lead_description']                                   = 'Descriere';
$lang['lead_website']                                       = 'Website';
$lang['invoice_activity_auto_converted_from_estimate']      = 'Factura auto creata din estimare cu numarul %s';
$lang['hour_of_day_perform_auto_operations']                = 'Orei din zi pentru a efectua operatii automate';
$lang['hour_of_day_perform_auto_operations_format']         = '24 ore format eq. 9 pentru 9am sau 15 pentru 3pm.';
$lang['inv_hour_of_day_perform_auto_operations_help']       = 'Utilizat pentru facturi recurente, anunturi restante etc.';
$lang['use_minified_files']                                 = 'Utilizati versiunea fisierelor miniaturate pentru css si js (numai fisiere de sistem)';

# Version 1.5.0
$lang['logo_favicon_changed_notice']       = 'S-a detectat schimbarea siglei sau Favicon. Daca vedeti n continuare logo-ul original CRM, ncercati sa stergeti memoria cache a browserului';
$lang['kb_search_articles']                = 'Cautati articole din Baza de cunostinte';
$lang['kb_search']                         = 'Cauta';
$lang['have_a_question']                   = 'Ai vreo intrebare?';
$lang['card_expiration_year']              = 'Anul de expirare';
$lang['card_expiration_month']             = 'Luna de expirare';
$lang['client_website']                    = 'Website';
$lang['search_project_members']            = 'Cautare Membri de proiect ...';
$lang['cf_translate_input_link_title']     = 'Titlu';
$lang['cf_translate_input_link_url']       = 'URL';
$lang['cf_translate_input_link_tip']       = 'Faceti clic aici pentru a adauga un link';
$lang['task_edit_delete_timesheet_notice'] = 'Foaia de lucru este %s, cant %s perioada de lucru.';
$lang['department_username']               = 'Nume utilizator IMAP';
$lang['department_username_help']          = 'Completati acest camp numai daca serverul dvs. IMAP utilizeaza numele de utilizator pentru a va conecta la adresa de e-mail. Retineti ca va trebui sa adaugati nca o adresa de e-mail';
$lang['total_tickets_deleted']             = 'Total tichete sterse: %s';

# Version 1.5.1
$lang['ticket_linked_to_project']                                = 'Acest bilet este legat de proiect: %s';
$lang['only_own_files_contacts']                                 = 'Persoane de contact vedeti numai fisierele proprii ncarcate n zona clientului (fisierele ncarcate n profilul clientului)';
$lang['only_own_files_contacts_help']                            = 'Daca partajati manual fisierul din profilul clientului catre alte persoane de contact, acestea vor putea vedea fisierul.';
$lang['share_file_with']                                         = 'Partajati fisierul cu';
$lang['file_share_visibility_notice']                            = 'This file is not shared with contacts, toggle visibility again to reload';
$lang['share_file_with_show']                                    = 'Acest fisier este partajat cu: %s';
$lang['allow_primary_contact_to_view_edit_billing_and_shipping'] = 'Activati contactul principal pentru a vizualiza / edita detaliile de facturare si de expediere';
$lang['estimate_due_after']                                      = 'Estimarea datorata dupa (zile)';

# Version 1.6.0
$lang['my_timesheets']                                   = 'Timesheets-urile mele';
$lang['today']                                           = 'Astazi';
$lang['open_in_dropbox']                                 = 'Deschideti n Dropbox';
$lang['show_primary_contact']                            = 'Afisati numele complet de contact primar pe %s';
$lang['view_members_timesheets']                         = 'Vizualizati toate foile de pontaj';
$lang['priority']                                        = 'Prioritate';
$lang['fetch_from_google']                               = 'Preluati de la Google';
$lang['customer_fetch_lat_lng_usage']                    = 'Completati adresa, orasul si tara nainte de a obtine cele mai bune rezultate.';
$lang['g_search_address_not_found']                      = 'Adresa nu a putut fi găsita, ncercati din nou';
$lang['proposals_report']                                = 'Raport de propuneri';
$lang['staff_members_open_tickets_to_all_contacts_help'] = 'Daca membrul personalului nu are permisiunea clientilor VIEW, numai vor putea sa creeze tichete noi de la zona de administrare la contactele clientului n care este atribuit ca administrator de client.';
$lang['staff_members_open_tickets_to_all_contacts']      = 'Permiteti membrilor personalului sa deschida tichetele la toate persoanele de contact?';
$lang['charts_based_report']                             = 'Diagrama bazata pe diagrame';
$lang['responsible_admin']                               = 'Responsabil admin';
$lang['tags']                                            = 'Etichete';
$lang['tag']                                             = 'Eticheta';
$lang['customer_map_notice']                             = 'Adaugati longitudinea si latitudinea n profilul clientului pentru a afisa harta aici';
$lang['default_view']                                    = 'Vedere standard';
$lang['day']                                             = 'Zi';
$lang['agenda']                                          = 'Agenda';
$lang['timesheet_tags']                                  = 'Etichete cu foi de lucru';
$lang['show_more']                                       = 'Arata mai mult';
$lang['show_less']                                       = 'Arata mai putin';
$lang['project_completed_date']                          = 'Data finalizata';
$lang['language']                                        = 'Limba';
$lang['this_week']                                       = 'Aceasta saptmana';
$lang['last_week']                                       = 'Saptaman trecuta';
$lang['this_month']                                      = 'Luna aceasta';
$lang['last_month']                                      = 'Luna trecuta';
$lang['no_description_project']                          = 'Nu exista descrieri pentru acest proiect';
$lang['sales_string']                                    = 'Vanzari';
$lang['no_project_members']                              = 'Nu exista membri pentru acest proiect';
$lang['search_by_tags']                                  = 'Utilizati # nume de eticheta pentru a cauta dupa etichete';
$lang['project_status_5']                                = 'Anulat';

# Version 1.7.0
$lang['not_activity_new_reminder_created']        = 'setati un nou memento pentru %s cu data %s';
$lang['not_activity_new_task_created']            = 'Crearea unei noi sarcini -%s';
$lang['recurring_invoice_draft_notice']           = 'Aceasta factura este cu schita de stare, trebuie sa marcati aceasta factura asa cum este trimisa. Facturile recurente cu schita de stare nu vor fi recreate de cron job.';
$lang['recurring_recreate_hour_notice']           = '%s va fi recreat la o anumita ora a zilei bazata pe setarea localizata la Setup-> Settings-Cron Job';
$lang['invoice_project_include_timesheets_notes'] = 'Includeti fiecare nota din foaia de pontaj n descrierea elementului';
$lang['events']                                   = 'Evenimente';
$lang['clear']                                    = 'Clar';
$lang['auto_mark_as_public']                      = 'Marcarea automata este publica';
$lang['time_format']                              = 'Format de timp';
$lang['time_format_24']                           = '24 ore';
$lang['time_format_12']                           = '12 ore';
$lang['delete_activity_log_older_then']           = 'Stergeti jurnalul de activitati al sistemului mai vechi decat X luni';
$lang['mark_as_read']                             = 'Marcheaza ca citit';
$lang['mark_all_as_read']                         = 'Marcheaza totul ca fiind citit';
$lang['tax_1']                                    = 'Taxa 1';
$lang['tax_2']                                    = 'Taxa 2';
$lang['total_with_tax']                           = 'Total cu taxa';
$lang['new_task_auto_assign_current_member']      = 'Auto atribuie creatorul de sarcini cand se creeaza o noua sarcina';
$lang['new_task_auto_assign_current_member_help'] = 'Nu este aplicata daca sarcina este legata de proiect si creatorul nu este membru al proiectului';
$lang['copy_project_tasks_status']                = 'Starea sarcinilor';
$lang['tasks_summary']                            = 'Sarcini Sumar';
$lang['vault']                                    = 'Vault';
$lang['new_vault_entry']                          = 'Intrare nou n Vault';
$lang['server_address']                           = 'Adresa serverului';
$lang['port']                                     = 'Port';
$lang['vault_username']                           = 'Nume de utilizator';
$lang['vault_password']                           = 'Parola';
$lang['vault_description']                        = 'scurta descriere';
$lang['vault_entry']                              = 'Intrarea n Vault';
$lang['no_port_provided']                         = 'Vizualizati parola';
$lang['view_password']                            = 'View Password';
$lang['security_reasons_re_enter_password']       = 'Din motive de securitate, introduceti parola mai jos';
$lang['password_change_fill_notice']              = 'Completati campul de parola numai daca doriti sa schimbati parola';
$lang['vault_password_user_not_correct']          = 'Parola dvs. nu este corecta, ncercati din nou';
$lang['no_vault_entries']                         = 'Nu au fost găsite intrari de seif pentru acest client.';
$lang['vault_entry_created_from']                 = 'Aceasta intrare din seif este creata de %s';
$lang['vault_entry_last_update']                  = 'Actualizat ultima data de %s';
$lang['vault_entry_visible_to_all']               = 'Vizibil tuturor membrilor personalului care au acces la acest client';
$lang['vault_entry_visible_creator']              = 'Vizibil numai pentru mine (administratorul nu este exclus)';
$lang['vault_entry_visible_administrators']       = 'Vizibil numai administratorilor';
$lang['my_reminders']                             = 'Memento-urile mele';
$lang['reminder_related']                         = 'Referitor la';
$lang['event_notification']                       = 'Notificare';
$lang['days']                                     = 'Zile';
$lang['reminder_notification_placeholder']        = 'Eq. Cu 30 de minute nainte';
$lang['event_color']                              = 'Culoarea evenimentului';
$lang['group_by_task']                            = 'Grupeaza dupa task';
$lang['save']                                     = 'Salveaza';
$lang['disable_languages']                        = 'Dezactivati limbile';

# Version 1.8.0
$lang['not_customer_viewed_invoice']                         = 'A fost vizualizata o factura cu numarul %s';
$lang['not_customer_viewed_estimate']                        = 'A fost vizualizata o estimare cu numarul %s';
$lang['not_customer_viewed_proposal']                        = 'O propunere cu numarul %s a fost vizualizata';
$lang['display_inline']                                      = 'Afisati n linie';
$lang['email_header']                                        = 'Header prefedinit';
$lang['email_footer']                                        = 'Footer predefinit';
$lang['exclude_proposal_from_client_area_with_draft_status'] = 'Excludeti propunerile cu starea de proiect din zona clientilor';
$lang['pusher_app_key']                                      = 'APP Cheie';
$lang['pusher_app_secret']                                   = 'APP Secret';
$lang['pusher_app_id']                                       = 'APP ID';
$lang['pusher_cluster_notice']                               = 'Lasati necompletat pentru a utiliza grupul de mpingere implicit.';
$lang['pusher_enable_realtime_notifications']                = 'Activati Notificarile n timp real';
$lang['task_is_overdue']                                     = 'Aceasta sarcina este ntarziata';
$lang['this_year']                                           = 'Anul acesta';
$lang['last_year']                                           = 'Anul tecut';
$lang['customer_statement']                                  = 'Declaratie';
$lang['customer_statement_for']                              = 'Declaratie de client pentru %s';
$lang['account_summary']                                     = 'Rezumat cont';
$lang['statement_beginning_balance']                         = 'Balanta incepand';
$lang['invoiced_amount']                                     = 'Suma facturata';
$lang['amount_paid']                                         = 'Suma platita';
$lang['statement_from_to']                                   = '%s la %s';
$lang['customer_statement_info']                             = 'Se afiseaza toate facturile si platile intre %s si %s';
$lang['balance_due']                                         = 'Sold debitor';
$lang['statement_heading_date']                              = 'Data';
$lang['statement_heading_details']                           = 'Detalii';
$lang['statement_heading_amount']                            = 'Cantitate';
$lang['statement_heading_payments']                          = 'Platile';
$lang['statement_heading_balance']                           = 'Echilibru';
$lang['statement_invoice_details']                           = 'Factura %s - datorata la %s';
$lang['statement_payment_details']                           = 'Plati la facturi';
$lang['statement_bill_to']                                   = 'Către';
$lang['send_to_email']                                       = 'Trimiteti la e-mail';
$lang['statement_sent_to_client_success']                    = 'Instructiunea este trimisa cu succes clientuluit';
$lang['statement_sent_to_client_fail']                       = 'Problema n timpul trimiterii declaratiei';
$lang['view_account_statement']                              = 'Vezi declaratia contului';
$lang['text_not_recommended_for_servers_limited_resources']  = 'Nu este recomandat daca serverul are resurse limitate. Eq hosting partajat';
$lang['tasks_bull_actions_assign_notice']                    = 'Daca sarcina este legata de proiect si membrul personalului pe care i ncredintati sarcina nu este membru al proiectului, acest personal va fi adaugat automat ca membru.';
$lang['company_information']                                 = 'Informatiile Companiei';
$lang['ticket_form']                                         = 'Formularul de tichete';
$lang['ticket_form_subject']                                 = 'Subiect';
$lang['ticket_form_name']                                    = 'Numele dumneavoastra';
$lang['ticket_form_email']                                   = 'Adresa de email';
$lang['ticket_form_department']                              = 'Departament';
$lang['ticket_form_message']                                 = 'Mesaj';
$lang['ticket_form_priority']                                = 'Prioritate';
$lang['ticket_form_service']                                 = 'Serviciu';
$lang['ticket_form_submit']                                  = 'A depune';
$lang['ticket_form_attachments']                             = 'Fisiere atasate';
$lang['success_submit_msg']                                  = 'Multumim ca ne-ai contactat. Ne vom ntoarce n curand.';
$lang['vault_entry_share_on_projects']                       = 'Impartasiti aceasta intrare seif n proiecte cu membri ai proiectului';
$lang['project_shared_vault_entry_login_details']            = 'Vizualizati detaliile de conectare la site-ul clientului';
$lang['iso_code']                                            = 'Codul ISO';
$lang['estimates_not_invoiced']                              = 'Nu este facturat';
$lang['show_on_ticket_form']                                 = 'Afisati formularul de bilet';
$lang['cancel_upload']                                       = 'Anulati ncarcarea';
$lang['show_table_export_button']                            = 'Afisati butonul de export al tabelului';
$lang['show_table_export_all']                               = 'Toti membrii personalului';
$lang['show_table_export_admins']                            = 'Numai administratorilor';
$lang['show_table_export_hide']                              = 'Ascunde butonul de export pentru toti membrii personalului';
$lang['task_created_by']                                     = 'Creat de% s';
$lang['validation_extension_not_allowed']                    = 'Extensia de fisiere nu este permisa';
$lang['allow_staff_view_proposals_assigned']                 = 'Permiteti membrilor personalului sa vizualizeze propunerile la care sunt repartizati';
$lang['task_users_working_on_tasks_multiple']                = 'In prezent, %s lucreaza la aceasta sarcina';
$lang['task_users_working_on_tasks_single']                  = 'In prezent, %s lucreaza la aceasta sarcina';

# Version 1.9.0
$lang['estimated_hours']                               = 'Orele estimate';
$lang['two_factor_auth_failed_to_send_code']           = 'Nu a reusit sa trimita codul de autentificare n doi pasi n e-mail, setarile SMTP nu pot fi configurate corect ';
$lang['two_factor_auth_code_sent_successfully']        = 'Un e-mail a fost trimis la %s cu codul de verificare pentru a va verifica datele de conectare';
$lang['enable_two_factor_authentication']              = 'Activati autentificarea cu doi factori';
$lang['two_factor_authentication_info']                = 'Doua autentificari cu factori sunt furnizate prin e-mail, nainte de a activa autentificarea cu doua factori, asigurati-va ca setarile SMTP sunt configurate corespunzator, iar sistemul poate trimite un e-mail. Cheia de autentificare unica va fi trimisa la e-mail la conectare.';
$lang['timesheets_overview_all_members_notice_admins'] = 'Foaia de parcurs pentru toti membrii personalului este disponibila numai pentru administratori.';
$lang['two_factor_authentication']                     = 'Doua autentificare cu factori';
$lang['two_factor_authentication_code']                = 'Cod';
$lang['admin_two_factor_auth_heading']                 = 'cod de autentificare';
$lang['two_factor_code_not_valid']                     = 'Codul de autentificare nu este valid';
$lang['back_to_login']                                 = 'Reveniti la conectare';
$lang['enter_activity']                                = 'Introduceti activitatea';
$lang['attach_files']                                  = 'Ataseaza fisiere';
$lang['no_tags_used']                                  = 'Nu exista etichete utilizate de sistem';
$lang['exclude_completed_tasks']                       = 'Excluderea sarcinilor finalizate';
$lang['modal_width_class']                             = 'Modal Width Class';
$lang['contract_copy']                                 = 'Copiaza';
$lang['contract_copied_successfully']                  = 'Contractul a fost copiat cu succes';
$lang['contract_copied_fail']                          = 'Nu sa reusit copierea contractului';
$lang['project_marked_as_finished_to_contacts']        = 'Trimiteti e-mail <b> Proiect marcat ca finalizat </b> la contactele clientului';
$lang['only_admins']                                   = 'Numai administratorii';
$lang['new_notification']                              = 'Notificare noua!';
$lang['enable_desktop_notifications']                  = 'Activati Notificarile desktop';
$lang['save_and_send']                                 = 'Salvati si trimiteti';
$lang['private']                                       = 'Privat';
$lang['task_created_at']                               = 'Creat la% s';
$lang['hide_notified_reminders_from_calendar']         = 'Ascundeti mementourile notificate din calendar';
$lang['last_active']                                   = 'Ultima data activ';
$lang['open_ticket']                                   = 'Deschide Tichet';
$lang['task_add_description']                          = 'Adauga descriere';
$lang['project_setting_create_tasks']                  = 'Creaza sarcina';
$lang['project_setting_edit_tasks']                    = 'Eeditati sarcini (numai sarcinile create de contact)';

# Version 1.9.2
$lang['items_report']                            = 'Raportul articolelor';
$lang['reports_item']                            = 'Articole';
$lang['quantity_sold']                           = 'Cantitate vanduta';
$lang['total_amount']                            = 'Valoare totala';
$lang['avg_price']                               = 'Pretul mediu';
$lang['item_report_paid_invoices_notice']        = 'Raportul privind elementele se genereaza numai din facturi platite nainte de reduceri si taxe.';
$lang['overview']                                = 'Prezentare generala';
$lang['timer_started_change_status_in_progress'] = 'Schimbati starea sarcinii la In Progres cu pornirea timerului (se aplica numai daca starea sarcinii nu este pornita)';
$lang['company_info_format']                     = 'Formatul informatiilor despre companie (PDF si HTML)';
$lang['customer_info_format']                    = 'Formatul informatiilor despre clienti (PDF si HTML)';
$lang['custom_field_info_format_embed_info']     = 'Campurile personalizate pentru %s pot fi usor ncorporate n documente PDF si HTML prin adaugarea campurilor de imbinare n formatul paginii la urmatoarea pagina: %s';
$lang['transfer_lead_notes_to_customer']         = 'Transferati notele de plumb catre profilul clientului';
$lang['authorized_signature_text']               = 'Semnatura autorizata';
$lang['show_pdf_signature_invoice']              = 'Afisati semnatura PDF pe factura';
$lang['show_pdf_signature_estimate']             = 'Afisati semnatura PDF pe Estimare';
$lang['signature']                               = 'Semnatura';
$lang['signature_image']                         = 'Semnatura Imagine';
$lang['insert_checklist_templates']              = 'Introduceti sabloanele Lista de verificare';
$lang['save_as_template']                        = 'Salvati ca sablon';
$lang['invoice_item_add_edit_rate_currency']     = 'Rate - %s';
$lang['total_files_deleted']                     = 'Total fisiere sterse: %s';
$lang['invalid_transaction']                     = 'Tranzactie invalida. Va rugam sa incercati din nou.';
$lang['payment_gateway_payu_money_key']          = 'PayU Money Key';
$lang['payment_gateway_payu_money_salt']         = 'PayU Money Salt';
$lang['settings_paymentmethod_description']      = 'Descrierea platii pentru tabloul de bord al portalului';

# Version 1.9.3
$lang['default_ticket_reply_status']          = 'Starea implicita este selectata cand raspundeti la bilet';
$lang['ticket_add_response_and_back_to_list'] = 'Reveniti la lista de tichete dupa trimiterea raspunsului';

# Version 1.9.4
$lang['default_task_status']                               = 'Starea implicită când se creează o nouă sarcină';
$lang['custom_field_pdf_html_help']                        = 'Asigurați-vă că verificați ' . $lang['custom_field_show_on_client_portal'] . ' , dacă doriți ca câmpurile personalizate să fie vizibile pentru zona clienților și când descărcați PDF sau primiți PDF prin e-mail.';
$lang['auto']                                              = 'Auto';
$lang['email_queue']                                       = 'Etajul de e-mail';
$lang['email_queue_enabled']                               = 'Activați coada de e-mail';
$lang['email_queue_skip_attachments']                      = 'Nu adăugați e-mailuri cu atașamente în coadă.';
$lang['disable']                                           = 'Dezactivati';
$lang['enable']                                            = 'Permite';
$lang['auto_dismiss_desktop_notifications_after']          = 'Ștergerea automată a notificărilor desktop după X secunde (0 pentru dezactivare)';
$lang['proposal_info_format']                              = 'Formatul propunerii de informații (PDF și HTML)';
$lang['hide_tasks_on_main_tasks_table']                    = 'Ascundeți sarcinile proiectului în tabelul cu sarcini principale (zona admin)';
$lang['ticket_replies_order']                              = 'Ordin de răspunsuri la tichete';
$lang['ticket_replies_order_notice']                       = 'Mesajul inițial al biletului va fi afișat întotdeauna ca primul.';
$lang['invoice_cancelled_email_disabled']                  = 'Factura este anulată. Anulați marcarea ca anulată pentru a activa e-mailul către client';
$lang['email_notifications']                               = 'Notificări prin email';
$lang['invoice_activity_record_payment_email_to_customer'] = 'Plata înregistrată, e-mail trimis la: %s';
$lang['exclude_inactive']                                  = 'Excludeti inctiv';
$lang['disable_all']                                       = 'Dezactivați toate';
$lang['enable_all']                                        = 'Permite tuturor';
$lang['reccuring_invoice_option_gen_and_send']             = 'Generați și trimiteți automat factura reînnoită către client';
$lang['reccuring_invoice_option_gen_unpaid']               = 'GGenerați o factură neachitată';
$lang['reccuring_invoice_option_gen_draft']                = 'Generați o factură de proiect';
$lang['event_created_by']                                  = 'Acest eveniment este creat de %s';

# Version 1.9.5
$lang['customers_assigned_to_me']              = 'Customers assigned to me';
$lang['bcc_all_emails']                        = 'BCC All Emails To';
$lang['confirmation_of_identity']              = 'Confirmation Of Identity';
$lang['accept_identity_confirmation']          = 'Require identity confirmation on accept';
$lang['accepted_identity_info']                = 'This %s is accepted by %s on %s from IP address %s';
$lang['clear_this_information']                = 'Clear This Information';
$lang['new_task_auto_follower_current_member'] = 'Auto add task creator as task follower when new task is created';
$lang['expenses_report_net']                   = 'Net Amount (Subtotal)';
$lang['expense_field_billable_help']           = 'If billable, %s can be added to invoice long description.';
$lang['task_biillable_checked_on_creation']    = 'Billable option is by default checked when new task is created?';
$lang['pause_overdue_reminders']               = 'Pause Overdue Reminders';
$lang['resume_overdue_reminders']              = 'Resume Overdue Reminders';
# Credit Notes
$lang['credit_notes']                                            = 'Credit Notes';
$lang['credit_note']                                             = 'Credit Note';
$lang['credit_note_lowercase']                                   = 'credit note';
$lang['credit_note_not_found']                                   = 'Credit note not found';
$lang['credit_note_date']                                        = 'Credit Note Date';
$lang['credit_date']                                             = 'Date';
$lang['settings_sales_next_credit_note_number']                  = 'Next Credit Note Number';
$lang['credit_note_number_prefix']                               = 'Credit Note Number Prefix';
$lang['credit_note_number']                                      = 'Credit Note #';
$lang['credit_note_number_exists']                               = 'Credit note number already exists';
$lang['show_shipping_on_credit_note']                            = 'Show shipping details on credit note';
$lang['credit_note_number_decrement_on_delete']                  = 'Decrement credit note number on delete.';
$lang['credit_note_number_decrement_on_delete_help']             = 'Number will be decremented only if is last credit note created.';
$lang['credit_note_status']                                      = 'Status';
$lang['credit_note_status_open']                                 = 'Open';
$lang['credit_note_status_closed']                               = 'Closed';
$lang['credit_note_status_void']                                 = 'Void';
$lang['credit_note_mark_as_open']                                = 'Mark as Open';
$lang['new_credit_note']                                         = 'New Credit Note';
$lang['credit_note_amount']                                      = 'Amount';
$lang['credit_note_remaining_credits']                           = 'Remaining Amount';
$lang['credit_note_client_note']                                 = 'Note';
$lang['invoices_credited']                                       = 'Invoices Credited';
$lang['apply_credits']                                           = 'Apply Credits';
$lang['x_credits_available']                                     = '%s credits available.';
$lang['credit_amount']                                           = 'Credit Amount';
$lang['credits_available']                                       = 'Credits Available';
$lang['amount_to_credit']                                        = 'Amount to Credit';
$lang['invoice_credits_applied']                                 = 'Credits successfully applied to invoice';
$lang['applied_credits']                                         = 'Applied Credits';
$lang['credit_amount_bigger_then_invoice_balance']               = 'Total credits amount is bigger then invoice balance due';
$lang['credit_amount_bigger_then_credit_note_remaining_credits'] = 'Total credits amount is bigger then remaining credits';
$lang['credited_invoices_not_found']                             = 'Credited Invoices Not Found';
$lang['credit_invoice_number']                                   = 'Invoice Number';
$lang['credits_used']                                            = 'Credits Used';
$lang['credits_remaining']                                       = 'Credits Remaining';
$lang['amount_credited']                                         = 'Amount Credited';
$lang['credits_applied_cant_delete_status_closed']               = 'This credit note is with status Closed, you need first to delete the credits in order to delete the credit note.';
$lang['credits_applied_cant_delete_credit_note']                 = 'This credit note has applied credits, you need first to delete the credits in order to delete the credit note.';
$lang['credit_note_pdf_heading']                                 = 'CREDIT NOTE';
$lang['show_status_on_pdf']                                      = 'Show %s status on PDF documents';
$lang['show_pdf_signature_credit_note']                          = 'Show PDF Signature on Credit Note';
$lang['calendar_credit_note_reminder']                           = 'Credit Note Reminder';
$lang['show_credit_note_reminders_on_calendar']                  = 'Credit Note Reminders';
$lang['reminders']                                               = 'Reminders';
$lang['invoice_activity_applied_credits']                        = 'applied credits of %s from %s';
$lang['create_credit_note']                                      = 'Create Credit Note';
$lang['confirm_invoice_credits_from_credit_note']                = 'When creating credit note from non paid invoice, the credit note amount will get applied for this invoice. Are you sure that you want to create the credit note?';
$lang['credit_invoice_date']                                     = 'Invoice Date';
$lang['apply_to_invoice']                                        = 'Apply to invoice';
$lang['apply_credits_from']                                      = 'Apply Credits From %s';
$lang['credits_successfully_applied_to_invoices']                = 'Invoices credits successfully applied';
$lang['credit_note_send_to_client_modal_heading']                = 'Send Credit Note To Customer';
$lang['credit_note_sent_to_client_success']                      = 'Credit note is sent successfully to the client';
$lang['credit_note_sent_to_client_fail']                         = 'Problem while sending credit note to email';
$lang['credit_note_no_invoices_available']                       = 'There are no available invoices for this customer.';
$lang['show_total_paid_on_invoice']                              = 'Show Total Paid On Invoice';
$lang['show_credits_applied_on_invoice']                         = 'Show Credits Applied On Invoice';
$lang['show_amount_due_on_invoice']                              = 'Show Amount Due On Invoice';
$lang['customer_profile_update_credit_notes']                    = 'Update the shipping/billing info on all previous credit notes (Closed credit notes not affected)';
$lang['zip_credit_notes']                                        = 'Zip Credit Notes';
$lang['statement_credit_note_details']                           = 'Credit Note %s';
$lang['statement_credits_applied_details']                       = 'Credits Applied from Credit Note %s - %s for payment of %s';
$lang['credit_note_files']                                       = 'Credit Note Files';
$lang['credit_notes_report']                                     = 'Credit Notes Report';

$lang['credit_note_set_reminder_title']     = 'Set Credit Note Reminder';
$lang['credit_note_add_edit_client_note']   = $lang['invoice_add_edit_client_note'];
$lang['credit_note_bill_to']                = $lang['invoice_bill_to'];
$lang['credit_note_prefix']                 = $lang['settings_sales_invoice_prefix'];
$lang['credit_note_admin_note']             = $lang['invoice_add_edit_admin_note'];
$lang['credit_note_total']                  = $lang['invoice_total'];
$lang['credit_note_adjustment']             = $lang['invoice_adjustment'];
$lang['credit_note_discount']               = $lang['invoice_discount'];
$lang['credit_note_subtotal']               = $lang['invoice_subtotal'];
$lang['credit_note_table_quantity_heading'] = $lang['invoice_table_quantity_heading'];
$lang['credit_note_table_hours_heading']    = $lang['invoice_table_hours_heading'];
$lang['credit_note_table_item_heading']     = $lang['invoice_table_item_heading'];
$lang['credit_note_table_item_description'] = $lang['invoice_table_item_description'];
$lang['credit_note_table_rate_heading']     = $lang['invoice_table_rate_heading'];
$lang['credit_note_table_tax_heading']      = $lang['invoice_table_tax_heading'];
$lang['credit_note_table_amount_heading']   = $lang['invoice_table_amount_heading'];
$lang['credit_notes_list_all']              = $lang['invoices_list_all'];

# Version 1.9.7
$lang['ticket_assigned']                          = 'Assigned';
$lang['dashboard_options']                        = 'Dashboard Options';
$lang['reset_dashboard']                          = 'Reset Dashboard';
$lang['widgets']                                  = 'Widgets';
$lang['s_chart']                                  = '%s Chart';
$lang['quick_stats']                              = 'Quick Statistics';
$lang['user_widget']                              = 'User Widget';
$lang['widgets_visibility_help_text']             = 'Widgets that are shown only if they have enough data do not have options to be hidden or shown.';
$lang['show_project_on_estimate']                 = 'Show Project Name On Estimate';
$lang['show_project_on_invoice']                  = 'Show Project Name On Invoice';
$lang['show_project_on_credit_note']              = 'Show Project Name On Credit Note';
$lang['visible_tabs']                             = 'Visible Tabs';
$lang['all']                                      = 'All';
$lang['view_widgetable_area']                     = 'View Widgetable Area';
$lang['hide_widgetable_area']                     = 'Hide Widgetable Area';
$lang['no_items_warning']                         = 'Enter at least one item.';
$lang['item_forgotten_in_preview']                = 'Have you forgotten to add this item?';
$lang['not_task_status_changed']                  = '%s - task status changed to %s';
$lang['not_project_activity_task_status_changed'] = 'Task Status Changed';
$lang['reset']                                    = 'Reset';
$lang['save_message_as_predefined_reply']         = 'Save Message as Predefined Reply';
$lang['inline_create_option']                     = 'Allow non-admin staff members to create %s in %s create/edit area?';
$lang['inline_create']                            = 'Inline Create';
$lang['inline_create_option_predefined_replies']  = 'Allow non-admin staff members to save predefined replies from ticket message';
$lang['reminders_view_none_admin']                = 'Showing your reminders and reminders created by you.';
$lang['show_tabs_and_options']                    = 'Show Tabs & Options';
$lang['no_milestones_found']                      = 'This project has no milestones';
$lang['lead_is_contact_create_task']              = 'Create task if email sender is already customer and assign to responsible staff member.';
$lang['existing_customer']                        = 'Existing Customer';
$lang['use_company_name_instead']                 = 'Use company name instead';
$lang['customer_delete_transactions_warning']     = 'This customer has transactions, %s, you must delete the transactions or move to another customer in order to perform this action.';

# Version 1.9.8
$lang['sending_email_contact_permissions_warning'] = 'Failed to auto select customer contacts. Make sure that the customer has active contacts and associated contacts with email notifications for %s enabled.';
$lang['help_leads_create_permission']              = 'All staff can create leads, except members marked as not staff members';
$lang['help_leads_edit_permission']                = 'Everyone who has access to specific lead can edit most of the lead information';
$lang['triggers']                                  = 'Triggers';
$lang['notice_only_one_active_sms_gateway']        = 'Only 1 active SMS gateway is allowed';
$lang['sms_trigger_disable_tip']                   = 'Leave contents blank to disable specific trigger.';
$lang['tables']                                    = 'Tables';
$lang['only_project_tasks']                        = 'Only project related tasks';
$lang['download_all']                              = 'Download All';
$lang['settings_sales_credit_note_number_format']  = 'Credit Note Number Format';
$lang['sms_reminder_sent_to']                      = 'SMS reminder sent to %s';
$lang['ideal_customer_statement_descriptor']       = 'Statement Descriptor (shown in customer bank statement)';
$lang['payment_received_awaiting_confirmation']    = 'Your payment was received and is awaiting confirmation.';
$lang['discount_fixed_amount']                     = 'Fixed Amount';
$lang['timesheet_duration_instead']                = 'Enter time duration instead';
$lang['timesheet_date_instead']                    = 'Set start and end time instead';
$lang['allow_non_admin_members_to_import_leads']   = 'Allow non-admin staff members to import leads';
$lang['project_hide_tasks_settings_info']          = 'Tasks are excluded from the main tasks table for this project, you can view the project tasks only in this area.';

# Version 1.9.9
$lang['ticket_create_no_contact']            = 'Ticket without contact';
$lang['ticket_create_to_contact']            = 'Ticket to contact';
$lang['showing_billable_tasks_from_project'] = 'Showing billable tasks from project';
$lang['no_billable_tasks_found']             = 'Billable tasks not found';
$lang['help_leads_permission_view']          = 'If this permission is not checked, a staff member will be only able to view leads to where is assigned, leads created by the staff member and leads that are marked as public';

# Version 2.0.0

$lang['customers']                                              = $lang['clients'];
$lang['knowledge_base']                                         = $lang['kb_string'];
$lang['staff']                                                  = $lang['als_staff'];
$lang['checklist_templates']                                    = 'Task Checklist Templates';
$lang['emails_tracking']                                        = 'Emails Tracking';
$lang['no_tracked_emails_sent']                                 = 'No tracked emails sent';
$lang['tracked_emails_sent']                                    = 'Tracked Emails Sent';
$lang['tracked_email_date']                                     = 'Date';
$lang['tracked_email_subject']                                  = 'Subject';
$lang['tracked_email_to']                                       = 'To';
$lang['tracked_email_opened']                                   = 'Opened';
$lang['tracked_email_not_opened']                               = 'Not Opened';
$lang['not_viewed_yet']                                         = 'This %s is not viewed yet by the customer';
$lang['undo']                                                   = 'Undo';
$lang['sign_document_validation']                               = 'Please sign the document.';
$lang['document_customer_signature_text']                       = 'Signature (Customer)';
$lang['accept_identity_confirmation_and_signature_sign']        = 'Require digital signature and identity confirmation on accept';
$lang['legal_bound_text']                                       = 'Legal Bound Text';
$lang['e_signature_sign']                                       = 'Sign';
$lang['is_signed']                                              = 'Signed';
$lang['is_not_signed']                                          = 'Not Signed';
$lang['download']                                               = 'Download';
$lang['view_pdf_in_new_window']                                 = 'View PDF in New Tab';
$lang['show_pdf_signature_contract']                            = 'Show PDF Signature on Contract';
$lang['document_signed_successfully']                           = 'You have successfully signed this document';
$lang['document_signed_info']                                   = 'This document is signed by %s on %s from IP address %s';
$lang['keep_signature']                                         = 'Keep Customer Signature';
$lang['view_contract']                                          = 'View Contract';
$lang['summary']                                                = 'Summary';
$lang['discussion']                                             = 'Discussion';
$lang['general_information']                                    = 'General Information';
$lang['proposal_information']                                   = 'Proposal Information';
$lang['contract_comments']                                      = 'Comments';
$lang['not_contract_comment_from_client']                       = 'New comment from customer on contract %s ...';
$lang['contract_files']                                         = 'Contract Files';
$lang['date_signed']                                            = 'Date Signed';
$lang['clear_signature']                                        = 'Clear Signature';
$lang['recurring_has_ended']                                    = 'This recurring %s has ended.';
$lang['cycles_remaining']                                       = 'Cycles Remaining';
$lang['cycles_infinity']                                        = 'Infinity';
$lang['recurring_total_cycles']                                 = 'Total Cycles';
$lang['cycles_passed']                                          = 'Passed %s';
$lang['api_key_not_set_error_message']                          = 'API key not configured, click on the following link to configure API key: %s';
$lang['subscription']                                           = 'Subscription';
$lang['subscription_lowercase']                                 = 'subscription';
$lang['subscriptions']                                          = 'Subscriptions';
$lang['tax_is_used_in_subscriptions_warning']                   = 'You can\'t update this tax because is used by subscriptions.';
$lang['credit_card']                                            = 'Credit Card';
$lang['update_credit_card']                                     = 'Update Credit Card';
$lang['credit_card_update_info']                                = 'Want to update the credit card that we have on file? Provide the new details here. Your card information will never directly touch our server.';
$lang['update_card_details']                                    = 'Update Card Details';
$lang['update_card_btn']                                        = 'Update Card';
$lang['subscription_name']                                      = 'Subscription Name';
$lang['subscriptions_description']                              = 'Description';
$lang['subscribe']                                              = 'Subscribe';
$lang['subscription_date']                                      = 'Date';
$lang['first_billing_date']                                     = 'First Billing Date';
$lang['allow_primary_contact_to_update_credit_card']            = 'Allow primary contact to update stored credit card token?';
$lang['show_subscriptions_in_customers_area']                   = 'Show subscriptions in customers area?';
$lang['show_subscriptions_in_customers_area_help']              = 'This option is valid only for the customer primary contact.';
$lang['subscription_sent_to_email_success']                     = 'Subscription sent to email successfully';
$lang['subscription_sent_to_email_fail']                        = 'Failed to sent subscription to email';
$lang['new_subscription']                                       = 'New Subscription';
$lang['subscription_status']                                    = 'Status';
$lang['next_billing_cycle']                                     = 'Next Billing Cycle';
$lang['subscription_not_subscribed']                            = 'Not Subscribed';
$lang['send_subscription']                                      = 'Send Subscription';
$lang['subscription_will_send_to_primary_contact']              = 'The subscription will be sent to the primary contact.';
$lang['subscription_resumed']                                   = 'Subscription is set to active successfully';
$lang['subscription_canceled']                                  = 'Subscription Cancelled Successfully';
$lang['no_credit_card_found']                                   = 'No Credit Card Found';
$lang['cancel_immediately']                                     = 'Cancel Immediately';
$lang['cancel_at_end_of_billing_period']                        = 'Cancel At The End Of Billing Period';
$lang['view_subscription']                                      = 'View Subscription';
$lang['subscription_future']                                    = 'Future';
$lang['subscription_active']                                    = 'Active';
$lang['subscription_past_due']                                  = 'Past Due';
$lang['subscription_canceled']                                  = 'Canceled';
$lang['subscription_unpaid']                                    = 'Unpaid';
$lang['billing_plan']                                           = 'Billing Plan';
$lang['upcoming_invoice']                                       = 'Upcoming Invoice';
$lang['resume_now']                                             = 'Resume Now';
$lang['subscription_not_yet_subscribed']                        = 'Customer is not yet subscribed to this subscription.';
$lang['subscription_is_canceled_no_resume']                     = 'This subscription is canceled and cannot be resumed.';
$lang['subscription_will_be_canceled_at_end_of_billing_period'] = 'This subscription will be canceled at the end of billing period.';
$lang['customer_successfully_subscribed_to_subscription']       = 'Thank you for subscribing to %s';
$lang['date_subscribed']                                        = 'Date Subscribed';
$lang['reports']                                                = 'Reports';
$lang['subscriptions_summary']                                  = 'Subscriptions Summary';
$lang['calendar_only_assigned_tasks']                           = 'Show only tasks assigned to the logged in staff member';
$lang['invoice_activity_subscription_payment_succeeded']        = 'Subscription Payment Succeeded, email sent to: %s';
$lang['mail_engine']                                            = 'Mail Engine';
$lang['settings_require_client_logged_in_to_view_contract']     = 'Require client to be logged in to view contract';
$lang['privacy_policy']                                         = 'Privacy Policy';
$lang['gdpr_terms_agree']                                       = 'I agree to the <a href="%s" target="_blank">Terms & Conditions</a>';
$lang['terms_and_conditions_validation']                        = 'You must accept the Terms & Conditions in order to continue.';
$lang['gdpr']                                                   = 'General Data Protection Regulation (GDPR)';
$lang['data_removal_request_sent']                              = 'Data removal request successfully sent';
$lang['gdpr_consents']                                          = 'Consents';
$lang['gdpr_consent']                                           = 'Consent';
$lang['gdpr_consent_purpose']                                   = 'Purpose';
$lang['gdpr_consent_opt_in']                                    = 'Opt In';
$lang['gdpr_consent_opt_out']                                   = 'Opt Out';
$lang['gdpr_consent_agree']                                     = 'I agree';
$lang['gdpr_consent_disagree']                                  = 'I disagree';
$lang['view_consent']                                           = 'View Consent';
$lang['transfer_consent']                                       = 'Transfer Consent';
$lang['view_public_form']                                       = 'View Public Form';
$lang['update_consent']                                         = 'Update Consent';
$lang['consent_last_updated']                                   = 'Last Updated: %s';
$lang['showing_search_result']                                  = 'Showing search results for: %s';
$lang['per_page']                                               = 'Per Page';
$lang['allow_staff_view_invoices_assigned']                     = 'Allow staff members to view invoices where they are assigned to';
$lang['allow_staff_view_estimates_assigned']                    = 'Allow staff members to view estimates where they are assigned to';
$lang['gdpr_right_to_be_informed']                              = 'Right to be informed';
$lang['gdpr_right_of_access']                                   = 'Right of access';
$lang['gdpr_right_to_data_portability']                         = 'Right to data portability';
$lang['gdpr_right_to_erasure']                                  = 'Right to erasure';
$lang['edit_my_information']                                    = 'Edit my information';
$lang['export_my_data']                                         = 'Export my data';
$lang['request_data_removal']                                   = 'Request data removal';
$lang['explanation_for_data_removal']                           = 'Explanation for data removal';
$lang['briefly_describe_why_remove_data']                       = 'Briefly describe why you want to remove the data';
$lang['date_published']                                         = 'Date Published';
$lang['view']                                                   = 'View';
$lang['customer_is_subscribed_to_subscription_info']            = 'The customer is subscribed to this subscription';
$lang['save_last_order_for_tables']                             = 'Save last order for tables';
$lang['date_created']                                           = 'Date Created';

# Version 2.0.1
$lang['company_logo_dark']                                      = 'Company Logo Dark';
$lang['customers_register_require_confirmation']                = 'Require registration confirmation from administrator after customer register';
$lang['customer_requires_registration_confirmation']            = 'Requires Registration Confirmation';
$lang['confirm_registration']                                   = 'Confirm Registration';
$lang['customer_registration_successfully_confirmed']           = 'Customer registration successfully confirmed';
$lang['customer_register_account_confirmation_approval_notice'] = 'Thank you for registering, your account is pending approval and will be confirmed soon.';
$lang['after_subscription_payment_succeeded']                   = 'After subscription payment is succeeded';
$lang['subscription_option_send_invoice']                       = 'Send Invoice';
$lang['subscription_option_send_payment_receipt']               = 'Send Payment Receipt';
$lang['subscription_option_send_payment_receipt_and_invoice']   = 'Send Invoice and Payment Receipt';
$lang['subscription_option_do_nothing']                         = 'Do Nothing';
$lang['gdpr_not_enabled']                                       = 'GDPR not enabled';
$lang['enable_gdpr']                                            = 'Enable GDPR';
$lang['gdpr_right_to_rectification']                            = 'Right to rectification';
$lang['test_sms_config']                                        = 'Test SMS Config';
$lang['test_sms_message']                                       = 'Test Message';
$lang['send_test_sms']                                          = 'Send Test SMS';
$lang['gdpr_short']                                             = 'GDPR';
$lang['allow_non_admin_staff_to_delete_ticket_attachments']     = 'Allow non-admin staff members to delete ticket attachments';

# Version 2.1.0
$lang['contract_number']                                = 'Contract Number';
$lang['project_changing_status_recurring_tasks_notice'] = 'You are changing the status to {0}, all recurring tasks will be cancelled';
$lang['not_contract_signed']                            = 'Contract with subject %s has been signed by the customer';
$lang['the_number_sign']                                = '#';
$lang['not_new_ticket_reply']                           = 'Customer replied to ticket - %s';
$lang['receive_notification_on_new_ticket_replies']     = 'Receive notification when customer reply to a ticket';
$lang['receive_notification_on_new_ticket_reply_help']  = 'All staff members which belong to the ticket department will receive notification when customer reply to a ticket';
$lang['payment_gateway_enable_paypal']                  = 'Enable PayPal Payments';
$lang['project_member']                                 = 'Project Member';
$lang['contract_notes']                                 = 'Notes';
$lang['contract_add_note']                              = 'Add Note';

# Version 2.1.1
$lang['frequency']              = 'Frequency';
$lang['frequency_every']        = 'Every %s';
$lang['last_invoice_date']      = 'Last Invoice Date';
$lang['next_invoice_date_list'] = 'Next Invoice Date';
$lang['enter_new_card']         = 'Enter New Card';

# Version 2.2.0
$lang['save_and_record_payment']                                     = 'Save & Record Payment';
$lang['choose_from_google_drive']                                    = 'Choose from Google Drive';
$lang['open_in_google']                                              = 'Open In Google';
$lang['google_picker']                                               = 'Google Picker';
$lang['enable_google_picker']                                        = 'Enable Google Picker';
$lang['google_api_client_id']                                        = 'Google API Client ID';
$lang['subtract_tax_total_from_amount']                              = 'Subtract TAX total (%s) from amount';
$lang['expense_subtract_info_text']                                  = 'Use this option to subtract the total tax amount from the expense amount, useful when you entered the expense amount with tax included (tax inclusive).';
$lang['company_exists_info']                                         = 'It looks that a customer with name %s already exists, if you still want to create the customer you can ignore this message.';
$lang['import_items']                                                = 'Import Items';
$lang['total_items_deleted']                                         = 'Total items deleted: %s';
$lang['billable_amount']                                             = 'Billable Amount';
$lang['last_child_invoice_date']                                     = 'Last Child Invoice Date';
$lang['good_morning']                                                = 'Good Morning';
$lang['good_afternoon']                                              = 'Good Afternoon';
$lang['good_evening']                                                = 'Good Evening';
$lang['description_in_invoice_item']                                 = 'Include description in invoice item';
$lang['description_in_invoice_item_help']                            = 'Useful if you want to include additional information on the subscription invoice, e.q. what this subscription includes.';
$lang['ticket_reminders']                                            = 'Reminders';
$lang['ticket_set_reminder_title']                                   = 'Set Ticket Reminder';
$lang['calendar_ticket_reminder']                                    = 'Ticket Reminders';
$lang['email_verification_required']                                 = 'Email Verification Required';
$lang['email_verification_required_message']                         = 'In order to access all the available features in the portal, first you must verify your email.';
$lang['email_verification_required_message_mail']                    = 'We have sent you an email with verification instructions, if you haven\'t received the email please check the spam folder or click <a href="%s">here</a> to resend the verification mail.';
$lang['email_already_verified']                                      = 'Your email is already verified';
$lang['invalid_verification_key']                                    = 'Invalid verification key';
$lang['verification_key_expired']                                    = 'Verification Key Expired';
$lang['email_successfully_verified']                                 = 'Your email has been successfully verified.';
$lang['email_successfully_verified_but_required_admin_confirmation'] = 'Your email has been successfully verified, you will be able to login once administrator confirm your account manually.';
$lang['email_verification_mail_sent_successully']                    = 'We sent you an email with verification instructions';
$lang['create_reminder']                                             = 'Create Reminder';
$lang['no_reminders_for_this_task']                                  = 'No reminders for this task';
$lang['reminder_for']                                                = 'Reminder for %s on %s';
$lang['no_description_provided']                                     = 'No description provided';
$lang['pay_with_card']                                               = 'Pay With Card';
$lang['not_customer_uploaded_file']                                  = 'New File(s) Uploaded in Profile';

# Version 2.2.1
$lang['customer_files_info_message'] = 'Files from projects and tasks linked to the customer are not shown on this table.';
$lang['ticket_import_reply_only']    = 'Try to import only the actual ticket reply (without quoted/forwarded message)';
$lang['learn_more']                  = 'Learn More';
$lang['sales_item']                  = 'Item';

# Version 2.3.0

$lang['modules']                                 = 'Modules';
$lang['module']                                  = 'Module';
$lang['module_description']                      = 'Description';
$lang['module_activate']                         = 'Activate';
$lang['module_deactivate']                       = 'Deactivate';
$lang['module_uninstall']                        = 'Uninstall';
$lang['module_upgrade_database']                 = 'Upgrade Database';
$lang['module_settings']                         = 'Settings';
$lang['module_version']                          = 'Version %s';
$lang['module_by']                               = 'By %s';
$lang['staff_which_are_using_role']              = 'Staff members which are using this role';
$lang['copy']                                    = 'Copy';
$lang['read_more']                               = 'Read More';
$lang['show_less']                               = 'Show Less';
$lang['project_progress_text']                   = 'Project Progress';
$lang['timer_not_stopped_yet']                   = 'This timer is not yet stopped';
$lang['refunds']                                 = 'Refunds';
$lang['refund']                                  = 'Refund';
$lang['refund_amount']                           = 'Refunded Amount';
$lang['not_refunds_found']                       = 'No refunds found';
$lang['refunds_applied_cant_delete_credit_note'] = 'This credit note has refunds applied, you need first to delete the refunds in order to delete the credit note.';

# Version 2.3.2
$lang['create_recurring_from_child_error_message'] = 'You cannot set this %s as recurring because this %s is child from another recurring %s.';
$lang['statement_credit_note_refund']              = 'Credit Note Refund - %s';
$lang['no_validation']                             = 'No Validation';
$lang['lead_unique_validation_on']                 = 'Perform validation for duplicate lead on the following fields:';
$lang['phonenumber_exists']                        = 'Phone number already exists';
$lang['company_exists']                            = 'Company already exists';
$lang['website_exists']                            = 'Website already exists';
$lang['send_payment_receipt_to_client']            = 'Send Payment Receipt To Client';
$lang['payment_sent_successfully']                 = 'Payment receipt sent successfully.';
$lang['payment_sent_failed']                       = 'Failed to send payment receipt.';

# Version 2.3.5
$lang['tags_update_replace_warning'] = 'Some tags are not updated because the name of the tag already exist';
$lang['attach_statement']            = 'Attach Customer Statement';

# Version 2.4.0
$lang['delete_credit_card']                        = 'Delete Card';
$lang['delete_credit_card_info']                   = 'You cannot delete the credit card as you have active subscriptions.';
$lang['credit_card_successfully_deleted']          = 'Credit card successfully deleted.';
$lang['subscription_incomplete']                   = 'Incomplete';
$lang['subscription_incomplete_expired']           = 'Incomplete Expired';
$lang['credit_card_short']                         = 'Card';
$lang['webhook_created']                           = 'Webhook created successfully.';
$lang['subscriptions_terms_info']                  = 'Enter customer terms & conditions to be displayed to the customer before subscribe to the subscription.';
$lang['subscription_complete_payment']             = 'Complete Payment';
$lang['subscription_is_subscription_is_expired']   = 'This subscription is expired.';
$lang['subscription_plan_currency_does_not_match'] = 'Selected plan currency does not match currency selected below.';
$lang['subscription_first_billing_date_info']      = 'Leave blank to use date when the customer is subscribed to the subscription. This field must be future date, if you select date and the date is passed but customer is not yet subscribed, the date when the customer will subscribe will be used.';
$lang['stripe_subscription_select_plan']           = 'Select Stripe plan';

# Version 2.4.1
$lang['contract_content_permission_edit_warning'] = 'Your current permissions does not allows you to edit the contract content. Consult with an
                              administrator to allow you permission to edit contracts.';
$lang['mark_as_signed']                 = 'Mark as signed';
$lang['unmark_as_signed']               = 'Unmark as signed';
$lang['marked_as_signed']               = 'Marked as signed';
$lang['contract_marked_as_signed_info'] = 'This contract is manually marked as signed.';
$lang['save_and_send_later']            = 'Save and Send Later';
$lang['schedule']                       = 'Schedule';
$lang['schedule_email_for']             = 'Schedule Email for %s';
$lang['schedule_date']                  = 'When would you like to send the email?';
$lang['email_scheduled_successfully']   = 'Email scheduled successfully';
$lang['invoice_will_be_sent_at']        = 'Invoice will be sent at %s';

# Version 2.5.0
$lang['recaptcha_ignore_ips']            = 'Ignored IP Addresses';
$lang['recaptcha_ignore_ips_info']       = 'Enter coma separated IP addresses that you want the reCaptcha to skip validation.';
$lang['show_task_reminders_on_calendar'] = 'Task Reminders';
$lang['contracts_about_to_expire']       = 'Contracts Expiring Soon';
$lang['no_contracts_about_to_expire']    = 'There are no contracts that are going to expire in the next %s days.';
$lang['lead_value']                      = 'Lead value';
$lang['lead_value_tooltip']              = 'Base currency will be used.';
$lang['leads_dt_lead_value']             = 'Lead Value';
$lang['leads_canban_lead_value']         = 'Lead Value: %s';
$lang['lead_add_edit_lead_value']        = 'Lead Value';

# Version 2.6.0
$lang['gantt_view_day']   = 'Days View';
$lang['gantt_view_week']  = 'Weeks View';
$lang['gantt_view_month'] = 'Months View';
$lang['gantt_view_year']  = 'Years View';

# Version 2.7.0
$lang['hour_of_day_perform_tasks_reminder_notification_help'] = '24 hours format eq. 9 for 9am or 15 for 3pm. It is used for recurring Task, Task reminders etc.';
$lang['clients_nav_contacts']                                 = 'Contacts';
$lang['clients_my_contacts']                                  = 'Contacts';
$lang['clients_my_contact']                                   = 'Contact';
$lang['new_contact']                                          = 'New Contact';
$lang['customer_contact']                                     = 'My Contacts';
$lang['clients_contact_added']                                = 'Contact added successfuly';
$lang['clients_contact_updated']                              = 'Contact updated successfuly';
$lang['allow_primary_contact_to_manage_other_contacts']       = 'Allow primary contact to manage other customer contacts';
$lang['contact_form_validation_is_unique']                    = 'Contact with this {field} already exists in our system';
$lang['invoice_number_not_applied_on_draft']                  = 'If the invoice is saved as draft, the number won\'t be applied, instead, the next invoice number will be given when the invoice is sent to the customer or is marked as sent.';

$lang['two_factor_authentication_disabed']           = 'Disabled';
$lang['enable_google_two_factor_authentication']     = 'Enable Google Authenticator';
$lang['set_google_two_factor_authentication_failed'] = 'Saving authentication failed, please try again';
$lang['enter_two_factor_auth_code_from_mobile']      = 'Enter authentication code from the Authenticator app';
$lang['staff_two_factor_authentication']             = 'Two Factor Authentication';
$lang['google_authentication_code']                  = 'Enter code from Authenticator app';
$lang['set_two_factor_authentication_successful']    = 'Successfully updated two factor authentication settings';
$lang['set_two_factor_authentication_failed']        = 'Could not update two factor authentication settings';
$lang['google_2fa_code_valid']                       = 'Successfuly verified the authentication';
$lang['google_2fa_code_invalid']                     = 'Invalid authentication code entered, try again.';
$lang['google_2fa_scan_qr_guide']                    = 'Scan the QR below with the Google Authenticator app on your mobile device, after that fill in the field below with the code generated in the app';
$lang['google_2fa_manul_input_secret']               = 'Secret key for manual input';

# Version 2.7.1
$lang['templates']                                   = 'Templates';
$lang['add_template']                                = 'Add Template';
$lang['edit_template']                               = 'Edit Template';
$lang['template_added']                              = 'Template added successfully';
$lang['template_updated']                            = 'Template updated successfully';
$lang['template_name']                               = 'Template Title';
$lang['template_content']                            = 'Template Content';
$lang['insert_template']                             = 'Insert';
$lang['items_table_amounts_exclude_currency_symbol'] = 'Exclude currency symbol from items table Amount';

$lang['multiplies_of']               = 'Multiplies of';
$lang['round_off_task_timer_option'] = 'Round off task timer';
$lang['task_timer_dont_round_off']   = 'Don\'t round off';
$lang['task_timer_round_up']         = 'Round up';
$lang['task_timer_round_down']       = 'Round down';
$lang['task_timer_round_nearest']    = 'Round to nearest';
$lang['calendar_task_reminder']      = 'Task Reminder';
$lang['projects_chart']              = 'Projects Chart';
$lang['overdue_by_days']             = 'OVERDUE BY %s DAYS';

$lang['two_checkout_payment_processing'] = 'Payment is been processed,you will be notified if successful';
$lang['two_checkout_payment_cancelled']  = 'Payment Cancelled';
$lang['two_checkout_merchant_code']      = 'Merchant Code';
$lang['two_checkout_secret_Key']         = 'Secret Code';
$lang['two_gateway_webhook_notice']      = 'The IPN Endpoint for 2Checkout is ( %s )';
$lang['something_went_wrong']            = 'Something went wrong. Try again';
$lang['imap_folder']                     = 'Folder';
$lang['retrieve_folders']                = 'Retrieve Folders';
$lang['email_to_ticket_config']          = 'Email to ticket configuration';


# Version 2.8.0
$lang['enable_support_menu_badges']              = 'Enable support menu item badge';
$lang['item_copy_success']                       = 'Item copied successfully';
$lang['item_copy_fail']                          = 'Failed to copy item';
$lang['attach_invoice_to_payment_receipt_email'] = 'Attach invoice PDF when sending payment receipt to email';

$lang['estimate_request']                                  = 'Estimate request';
$lang['estimate_requests']                                 = 'Estimate request';
$lang['estimate_request_form']                             = 'Estimate request form';
$lang['acs_estimate_request']                              = 'Estimate request';
$lang['acs_estimate_request_forms']                        = 'Forms';
$lang['estimate_request_forms']                            = 'Estimate Request Forms';
$lang['estimate_request_notify_staff']                     = 'Staff Members to Notify';
$lang['estimate_request_notify_when_submitted']            = 'Notify when estimate request submitted';
$lang['estimate_request_assignee']                         = 'Responsible (Assignee)';
$lang['estimate_request_notify_roles']                     = 'Roles to Notify';
$lang['custom_field_estimate_request']                     = 'Estimate request';
$lang['new_estimate_request_submitted_from_form']          = 'New Estimate Request submitted from Form - %s';
$lang['acs_estimate_request_statuses_submenu']             = 'Statuses';
$lang['estimate_request_dt_email']                         = 'Email';
$lang['estimate_request_dt_assigned']                      = 'Assigned';
$lang['estimate_request_dt_status']                        = 'Status';
$lang['estimate_request_dt_datecreated']                   = 'Created';
$lang['estimate_request_attachments']                      = 'Attachments';
$lang['estimate_request_new_status']                       = 'New Status';
$lang['estimate_request_status_table_name']                = 'Status Name';
$lang['estimate_request_table_total']                      = 'Total Request: %s';
$lang['estimate_request_statuses_not_found']               = 'No Estimate Request statuses found';
$lang['estimate_request_status_add_edit_name']             = 'Status Name';
$lang['estimate_request_status_color']                     = 'Color';
$lang['estimate_request_status_add_edit_order']            = 'Status Order';
$lang['estimate_request_status']                           = 'Status';
$lang['estimate_request_date_added']                       = 'Date Created';
$lang['estmate_request_tags_updated']                      = 'Tags Updated';
$lang['not_estimate_request_activity_status_updated']      = '%s updated estimate request status from %s to %s';
$lang['estimate_request_lowercase']                        = 'estimate request';
$lang['estimate_request_form_email_field_is_required']     = 'Email field is required to be added on the form';
$lang['estimate_request_form_email_field_set_to_required'] = 'Mark the email field as required';
$lang['not_delete_estimate_request_default_status']        = 'Cannot delete core estimate request status';
$lang['mark_estimate_request_as']                          = 'Mark as %s';
$lang['estimate_request_updated']                          = 'Estimate Request Updated';
$lang['convert_estimate_request']                          = 'Convert Estimate Request';
$lang['estimate_request_client_firstname']                 = 'First Name';
$lang['estimate_request_client_lastname']                  = 'Last Name';
$lang['estimate_request_email']                            = 'Email';
$lang['estimate_request_for_lead']                         = 'Lead';
$lang['estimate_request_for_customer']                     = 'Customer';
$lang['estimate_request_related']                          = 'Related to';
$lang['estimate_request_client_created_success']           = 'Estimate Request Customer Created';
$lang['estimate_request_assigned']                         = 'Staff Assigned';
$lang['not_estimate_request_activity_assigned_updated']    = 'Estimate Request Assigned to %s';
$lang['estimate_request_status_lowercase']                 = 'estimate request status';
$lang['estimate_request_assigned_to_staff']                = 'Estimate Request has been assigned to you';

$lang['activity_due_reminder_is_sent']   = '%s sent invoice becoming due reminder';
$lang['invoice_due_notice_before']       = 'Send due reminder X days before due date';
$lang['overdue_notices']                 = 'Overdue Notices';
$lang['invoice_overdue_notices_info']    = 'Overdue notices are sent when the invoice becomes overdue.';
$lang['due_reminders']                   = 'Due Reminders';
$lang['due_reminders_for_invoices_info'] = 'Due reminders are sent to unpaid and partially paid invoices as reminder to the customer to pay the invoice before is due.';
$lang['expenses_list_made_payment_by']   = 'Made Payment by %s';

# Version 2.8.2
$lang['hide_task_checklist_items_completed'] = 'Hide completed items';
$lang['show_task_checklist_items_completed'] = 'Show completed items %s';
$lang['task_checklist_assign']               = 'Assign staff';
$lang['task_checklist_assigned']             = 'Assigned to %s';

# Version 2.8.3
$lang['projects_send_contact_notification']                   = 'Send contacts notifications';
$lang['project_send_all_contacts_with_notifications_enabled'] = 'To all contacts with notifications for projects enabled';
$lang['project_do_not_send_contacts_notifications']           = 'Do not send notifications';
$lang['project_send_specific_contacts_with_notification']     = 'Specific contacts';
$lang['project_contacts_to_notify']                           = 'Select contacts to notify';
$lang['contract_signed_by']                                   = 'Signer Name';
$lang['contract_signed_date']                                 = 'Signed Date';
$lang['contract_signed_ip']                                   = 'IP Address';
$lang['show_estimate_request_in_customers_area']              = 'Show Estimate request link in customers area?';
$lang['customers_estimate_request_link_text']                 = 'Request Estimate';
$lang['total_expenses_deleted']                               = 'Total Expenses Deleted: %s';
$lang['estimate_convert_to_project']                          = 'Convert to Project';
$lang['estimate_items_convert_to_tasks']                      = 'Items that will be converted to tasks';

# Version 2.9.0
$lang['home_payment_records']                                  = 'Payment Records';
$lang['weekly']                                                = 'Weekly';
$lang['monthly']                                               = 'Monthly';
$lang['failed_to_update_timesheet']                            = 'Timesheet was not updated';
$lang['permission_create_timesheets']                          = 'Create Timesheets';
$lang['permission_edit_timesheets']                            = 'Edit Timesheets (Global)';
$lang['permission_edit_own_timesheets']                        = 'Edit Own Timesheets';
$lang['permission_delete_timesheets']                          = 'Delete Timesheets (Global)';
$lang['permission_delete_own_timesheets']                      = 'Delete own Timesheets';
$lang['permission_edit_milestones']                            = 'Edit Milestones';
$lang['permission_delete_milestones']                          = 'Delete Milestones';
$lang['add_timesheet']                                         = 'Add timesheet';
$lang['submit_button_bg_color']                                = 'Submit button background color';
$lang['submit_button_text_color']                              = 'Submit button background text';
$lang['automatically_assign_ticket_to_first_staff_responding'] = 'Automatically assign the ticket to the first staff that post a reply?';

# Version 2.9.1
$lang['contract_signed_not_all_fields_editable'] = 'This contract is signed, hence not all fields can be edited until the signature is removed.';
$lang['form_submit_success_action']              = 'What should happen after a visitor submits this form';
$lang['form_submit_success_display_thank_you']   = 'Display thank you messsage';
$lang['form_submit_success_redirect_to_website'] = 'Redirect to another website';
$lang['form_submit_website_url']                 = 'Website URL';

# Version 2.9.2
$lang['open_google_map']                                  = 'Open in Google Map';
$lang['milestone_start_date']                             = 'Start Date';
$lang['send_reminder_for_completed_but_not_billed_tasks'] = 'Send an email reminder of billable tasks completed but not billed';
$lang['staff_to_notify_completed_but_not_billed_tasks']   = 'Select which staff members you want to receive the reminder';
$lang['reminder_for_completed_but_not_billed_tasks_days'] = 'Select days of the week reminder should be sent';
$lang['notifications']                                    = 'Notifications';
$lang['merged']                                           = 'Merged';
$lang['ticket_merged_notice']                             = 'This ticket is merged into the ticket with ID';
$lang['view_primary_ticket']                              = 'View primary ticket';
$lang['merge_tickets']                                    = 'Merge Tickets';
$lang['primary_ticket']                                   = 'Primary Ticket';
$lang['primary_ticket_status']                            = 'Primary Ticket Status';
$lang['tickets_merged']                                   = 'Tickets Merged Successfully';
$lang['cannot_merge_into_merged_ticket']                  = 'Ticket that is merged into another ticket cannot be used as primary ticket';
$lang['merge_ticket_ids_field_label']                     = 'Merge Ticket #';
$lang['merge_ticket_ids_field_placeholder']               = 'example: 5 or 5,6';
$lang['cannot_merge_tickets_with_ids']                    = 'Ticket %s is already merged in another ticket';
$lang['ticket_merged_tickets_header']                     = 'This ticket contains %s tickets that are merged';
$lang['batch_payments_table_invoice_number_heading']      = 'Invoice Number';
$lang['batch_payments_table_payment_date_heading']        = 'Payment Date';
$lang['batch_payments_table_payment_mode_heading']        = 'Payment Mode';
$lang['batch_payments_table_transaction_id_heading']      = 'Transaction Id';
$lang['batch_payments_table_amount_received_heading']     = 'Amount received';
$lang['batch_payments_table_invoice_balance_due']         = 'Invoice Balance Due';
$lang['add_batch_payments']                               = 'Add Payments';
$lang['batch_payment_filter_by_customer']                 = 'Filter invoices by customer';
$lang['batch_payments']                                   = 'Batch Payments';
$lang['batch_payment_added_successfully']                 = 'You have successfully added %s payments';
$lang['batch_payments_send_invoice_payment_recorded']     = 'Do not send invoice payment recorded email to customer contacts';
$lang['invoice_batch_payments']                           = 'Batch Payment';
$lang['staff_is_currently_replying']                      = '%s is currently replying to ticket.';

# Version 2.9.4
$lang['permission_view_timesheet_report']                  = 'View Timesheets Report';
$lang['timesheets_overview_all_members_notice_permission'] = 'Timesheet overview for all staff members is only available for Staff with Permission to view timesheet reports and administrators.';
$lang['show_project_on_proposal']                          = 'Show Project Name On Proposal';
$lang['ticket_reports_staff']                              = 'Staff Member';
$lang['ticket_reports_total_assigned']                     = 'Total Assigned Tickets';
$lang['ticket_reports_open_tickets']                       = 'Open Tickets';
$lang['ticket_reports_closed_tickets']                     = 'Closed Tickets';
$lang['ticket_reports_replies_to_tickets']                 = 'Replies To Tickets';
$lang['ticket_reports_average_reply_time']                 = 'Average Reply Time';
$lang['home_tickets_report']                               = 'Staff Tickets Report';
$lang['ticket_reports_average_reply_time_help']            = 'Average response time from assigned tickets.';
$lang['created_by']                                        = 'Created by';

$lang['staff_related_ticket_notification_to_assignee_only']      = 'Send staff-related ticket notifications to the ticket assignee only';
$lang['staff_related_ticket_notification_to_assignee_only_help'] = 'If this option is set to Yes and the ticket does not have an assignee, notification will be sent to all staff that belongs to the ticket department';
$lang['import_expenses']                                         = 'Import Expenses';
$lang['show_pdf_signature_proposal']                             = 'Show PDF Signature on Proposal';
$lang['enable_honeypot_spam_validation']                         = 'Enable Honeypot spam validation';

# Version 3.0.0
$lang['contracts_view_marked_as_signed'] = 'Marked As Signed';
$lang['contracts_view_signed']           = 'signed';
$lang['contracts_view_not_expired']      = 'Not Expired';
$lang['contract_information']            = 'Contract Information';
$lang['receipt']                         = 'Receipt';
$lang['search_proposals']                = 'Search Proposals';
$lang['search_estimates']                = 'Search Estimates';
$lang['quick_create']                    = 'Quick Create';


# Version 3.0.5
$lang['subscription_last_sent']                             = 'Last Sent';
$lang['automatically_set_logged_in_staff_sales_agent']      = 'Automatically assign logged in staff as sale agent';
$lang['automatically_set_logged_in_staff_sales_agent_help'] = 'Applicable for: Estimates, invoices, proposal';
$lang['permission_view_all_templates']                      = 'View All Templates';
$lang['settings_contract_sign_reminder_every_days_info']    = 'Sign reminders are sent to the customer contacts after the contract is first time sent to the customer and they are automatically stopped when the contract is signed.';
$lang['contract_sign_reminder_every_days']                  = 'Send sign reminder every (days)';
$lang['contract_sign_reminders']                            = 'Sign Reminders';
$lang['payment_gateway_fee_percentage']                     = 'Percentage Fee';
$lang['payment_gateway_fee_fixed']                          = 'Fixed Fee';
$lang['payment_attempt_amount']                             = 'Invoice Total';
$lang['payment_attempt_fee']                                = 'Payment Fee';
$lang['feature']                                            = 'Feature';
$lang['capabilities']                                       = 'Capabilities';

# Version 3.1.0
$lang['filter_boolean_yes'] = 'Yes';
$lang['filter_boolean_no'] = 'No';
$lang['filter_matchtype_and'] = 'and';
$lang['filter_matchtype_or'] = 'or';
$lang['filter_share'] = 'Share with other team members?';
$lang['filter_mark_as_default'] = 'Mark as default';
$lang['filter_unmark_as_default'] = 'Unmark as default';
$lang['filter_save'] = 'Save Filter';
$lang['filter_name'] = 'Filter name';
$lang['filter_apply'] = 'Apply';
$lang['filter_apply_and_save'] = 'Apply and Save';
$lang['filter_use_dynamic_dates'] = 'Use dynamic dates';
$lang['filter_new'] = 'New Filter';
$lang['filter_clear_active'] = 'Clear Filter';
$lang['filter_edit'] = 'Edit';
$lang['filter_create'] = 'Create Filter';
$lang['filter_update'] = 'Update Filter';
$lang['filter_delete'] = 'Delete Filter';
$lang['filter_cannot_be_shared'] = 'This filter cannot be shared with other team members as it contains rules that may not be available for all users.';
$lang['filter_add_rule'] = 'Add Rule';

$lang['filter_operator_is_empty'] = 'is unknown';
$lang['filter_operator_is_not_empty'] = 'is known';
$lang['filter_operator_equal'] = 'equal';
$lang['filter_operator_not_equal'] = 'not equal';
$lang['filter_operator_begins_with'] = 'begins with';
$lang['filter_operator_not_begins_with'] = 'not begins with';
$lang['filter_operator_contains'] = 'contains';
$lang['filter_operator_not_contains'] = 'not contains';
$lang['filter_operator_ends_with'] = 'ends with';
$lang['filter_operator_not_ends_with'] = 'not ends with';
$lang['filter_operator_in'] = 'in';
$lang['filter_operator_not_in'] = 'not in';
$lang['filter_operator_between'] = 'between';
$lang['filter_operator_not_between'] = 'not between';
$lang['filter_operator_dynamic'] = 'dynamic';
$lang['filter_operator_greater'] = 'greater';
$lang['filter_operator_greater_or_equal'] = 'greater or equal';
$lang['filter_operator_less'] = 'less';
$lang['filter_operator_less_or_equal'] = 'less or equal';
$lang['no_filters_found'] = 'No saved filters, get started by creating a new filter.';

$lang['staff_logged_in_public_ticket_warning'] = 'You are logged in a staff member, if you want to reply to the ticket as staff, you must make reply via the admin area.';

# Version 3.1.2
$lang['allow_non_admin_members_to_delete_tickets_and_replies'] = 'Allow non-admin staff members to delete tickets and replies';
$lang['default_filter_info'] = 'The filter will be marked as default only for your account.';
$lang['required_register_fields'] = 'Required fields for registration (customers area)';

# Version 3.1.6
$lang['allow_non_admin_members_to_edit_ticket_messages'] = 'Allow non-admin staff members to delete tickets and replies';
$lang['proposal_auto_convert_to_invoice_on_client_accept'] = 'Auto convert the proposal to invoice after client accept (only customers related proposals)';
$lang['invoice_activity_auto_converted_from_proposal']      = 'Invoice auto created from proposal with number %s';
$lang['clients_proposal_invoiced_successfully'] = 'Thank you for accepting the proposal. Please review the created invoice for the proposal';

# Version 3.2.0
$lang['ideal_payment_failure_message'] = 'The payment failed or was canceled.';
$lang['ideal_api_publishable_key'] = 'Stripe Publishable Key';
$lang['ideal_api_secret_key'] = 'Stripe API Secret Key';
$lang['filters'] = 'Filters';
$lang['view_financial_stats'] = 'View Financial Stats';
$lang['timesheet_summary'] = 'Timesheet Summary';
$lang['timesheet_detailed_overview'] = 'Detailed Overview of Logged Timesheets and Hours';
$lang['ticket_request_history'] = 'Request History';
$lang['integrations'] = 'Integrations';
$lang['settings_group_other'] = 'Other';
$lang['settings_group_configure_features'] = 'Configure Features';
$lang['disable_ticket_public_url'] = 'Disable Ticket Public URL';

# Version 3.2.1
$lang['ideal_gateway_keys_not_configured'] = 'iDEAL Payment Gateway API not configured.';
$lang['ideal_gateway_cannot_be_activated_keys_not_configured'] = 'iDEAL Payment Gateway cannot be activated as the Stripe Publishable/API key is not configured.';
$lang['company_logo_light'] = 'Company Logo Light';
$lang['welcome_back_sign_in'] = 'Welcome, please sign in to your dashboard';