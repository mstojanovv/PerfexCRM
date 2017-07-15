<?php
# Version 1.0.0
#
# General
$lang['id']                   = 'ID';
$lang['name']                 = 'Nome';
$lang['options']              = 'Opzioni';
$lang['submit']               = 'Salva';
$lang['added_successfully']    = '%s aggiunto con successo.';
$lang['updated_successfully']  = '%s aggiornato con successo.';
$lang['edit']                 = 'Modifica %s';
$lang['add_new']              = 'Aggiungi Nuovo %s';
$lang['deleted']              = '%s cancellato';
$lang['problem_deleting']     = 'Problema cancellato %s';
$lang['is_referenced']        = 'L\'ID di %s è già stato usato.';
$lang['close']                = 'Chiudi';
$lang['send']                 = 'Invia';
$lang['cancel']               = 'Cancella';
$lang['go_back']              = 'Indietro';
$lang['error_uploading_file'] = 'Errore caricamento file';
$lang['load_more']            = 'Mostra altro';
$lang['cant_delete_default']  = 'Non si può cancellare predefinito %s';

# Fattura General
$lang['invoice_status_paid']                = 'Pagata';
$lang['invoice_status_unpaid']              = 'Non Pagata';
$lang['invoice_status_overdue']             = 'Scaduta';
$lang['invoice_status_not_paid_completely'] = 'Parzialmente Pagata';

$lang['invoice_pdf_heading'] = 'FATTURA';

$lang['invoice_table_item_heading']            = 'Voce';
$lang['invoice_table_quantity_heading']        = 'Qnt';
$lang['invoice_table_rate_heading']            = 'Prezzo';
$lang['invoice_table_tax_heading']             = 'Tassa';
$lang['invoice_table_amount_heading']          = 'Importo';
$lang['invoice_subtotal']                      = 'Totale Parziale';
$lang['invoice_adjustment']                    = 'Aggiustamento';
$lang['invoice_total']                         = 'Totale';
$lang['invoice_vat']                           = 'Partita IVA';
$lang['invoice_bill_to']                       = 'Fatturato A';
$lang['invoice_data_date']                     = 'Data Fattura:';
$lang['invoice_data_duedate']                  = 'Scadenza:';
$lang['invoice_received_payments']             = 'Transazioni';
$lang['invoice_no_payments_found']             = 'Nessun pagamento trovato per questa fattura';
$lang['invoice_note']                          = 'Nota:';
$lang['invoice_payments_table_number_heading'] = 'Pagamento n°';
$lang['invoice_payments_table_mode_heading']   = 'Metodo Pagamento';
$lang['invoice_payments_table_date_heading']   = 'Data';
$lang['invoice_payments_table_amount_heading'] = 'Importo';


# Announcements
$lang['announcement']                 = 'Annuncio';
$lang['announcement_lowercase']       = 'annuncio';
$lang['announcements']                = 'Annunci';
$lang['announcements_lowercase']      = 'annunci';
$lang['new_announcement']             = 'Nuovo Annuncio';
$lang['announcement_name']            = 'Nome Annuncio';
$lang['announcement_message']         = 'Messaggio';
$lang['announcement_show_to_staff']   = 'Mostra a Staff';
$lang['announcement_show_to_clients'] = 'Mostra a clienti';
$lang['announcement_show_my_name']    = 'Mostra mio nome';

# Clients
$lang['clients']                               = 'Clienti';
$lang['client']                                = 'Cliente';
$lang['new_client']                            = 'Nuovo Cliente';
$lang['client_lowercase']                      = 'cliente';
$lang['client_delete_tooltip']                 = 'Tutti i dati del cliente verranno eliminati. Contratti, ticket, note. NOTA: Se vengono trovate fatture non verrà eliminato il cliente. È necessario assegnare queste fatture ad un altro cliente per mantenere il numero di fattura.';
$lang['customer_delete_invoices_warning']      = 'Questo cliente ha le fatture sul suo account. Non puoi eliminare questo cliente. Cambiare tutte le fatture per un altro cliente in futuro quindi eliminare.';
$lang['client_firstname']                      = 'Nome';
$lang['client_lastname']                       = 'Cognome';
$lang['client_email']                          = 'Email';
$lang['client_company']                        = 'Ditta';
$lang['client_vat_number']                     = 'Partita IVA';
$lang['client_address']                        = 'Indirizzo';
$lang['client_city']                           = 'Città';
$lang['client_postal_code']                    = 'Codice Postale';
$lang['client_state']                          = 'Provincia';
$lang['client_password']                       = 'Password';
$lang['client_password_change_populate_note']  = 'Nota: se si popolano questi campi, la password di questo cliente verrà cambiata.';
$lang['client_password_last_changed']          = 'Ultimo cambiamento password:';
$lang['login_as_client']                       = 'Accedi come cliente';
$lang['client_invoices_tab']                   = 'Fatture';
$lang['contracts_invoices_tab']                = 'Contratti';
$lang['contracts_tickets_tab']                 = 'Ticket';
$lang['contracts_notes_tab']                   = 'Note';
$lang['client_invoice_number_table_heading']   = 'Fatture n°';
$lang['client_invoice_date_table_heading']     = 'Data';
$lang['client_invoice_due_date_table_heading'] = 'Scadenza';
$lang['client_string_table_heading']           = 'Cliente';
$lang['client_amount_table_heading']           = 'Importo';
$lang['client_status_table_heading']           = 'Status';
$lang['note_description']                      = 'Descrizione nota';

$lang['client_string_contracts_table_heading']      = 'Cliente';
$lang['client_start_date_contracts_table_heading']  = 'Data Inizio';
$lang['client_end_date_contracts_table_heading']    = 'Data Fine';
$lang['client_description_contracts_table_heading'] = 'Descrizione';
$lang['client_do_not_send_welcome_email']           = 'Non inviare email di Benvenuto';

$lang['clients_notes_table_description_heading'] = 'Descrizione';
$lang['clients_notes_table_addedfrom_heading']   = 'Aggiunto Da';
$lang['clients_notes_table_dateadded_heading']   = 'Data Aggiunto';

$lang['clients_list_full_name']   = 'Nome Completo';
$lang['clients_list_last_login']  = 'Ultimo Accesso';

# Contracts
$lang['contracts']                = 'Contratti';
$lang['contract']                 = 'Contratto';
$lang['new_contract']             = 'Nuovo Contratto';
$lang['contract_lowercase']       = 'contratto';
$lang['contract_start_date']      = 'Data Inizio';
$lang['contract_end_date']        = 'Data Fine';
$lang['contract_subject']         = 'Oggetto';
$lang['contract_description']     = 'Descrizione';
$lang['contract_subject_tooltip'] = 'L\'oggetto è visibile anche al cliente';
$lang['contract_client_string']   = 'Cliente';
$lang['contract_attach']          = 'Allegato documento';

$lang['contract_list_client']     = 'Cliente';
$lang['contract_list_subject']    = 'Oggetto';
$lang['contract_list_start_date'] = 'Data Inizio';
$lang['contract_list_end_date']   = 'Data Fine';

# Currencies
$lang['currencies']           = 'Valute';
$lang['currency']             = 'Valuta';
$lang['new_currency']         = 'Nuova Valuta';
$lang['currency_lowercase']   = 'valuta';
$lang['base_currency_set']    = 'Questa ora è la tua valuta base.';
$lang['make_base_currency']   = 'Fai valuta base';
$lang['base_currency_string'] = 'Valuta Base';

$lang['currency_list_name']   = 'Nome';
$lang['currency_list_symbol'] = 'Simbolo';


$lang['currency_add_edit_description'] = 'Nome Valuta';
$lang['currency_add_edit_rate']        = 'Simbolo';

$lang['currency_edit_heading'] = 'Modifica valuta';
$lang['currency_add_heading']  = 'Aggiungi Nuova Valuta';


# Department
$lang['departments']          = 'Reparti';
$lang['department']           = 'Reparto';
$lang['new_department']       = 'Nuovo Reparto';
$lang['department_lowercase'] = 'reparto';

$lang['department_name']             = 'Nome Reparto';
$lang['department_email']            = 'Email Reparto';
$lang['department_hide_from_client'] = 'Nascondere al cliente?';
$lang['department_list_name']        = 'Nome';

# Email Templates
$lang['email_templates']                        = 'Modelli Email';
$lang['email_template']                         = 'Modello Email';
$lang['email_template_lowercase']               = 'modello email';
$lang['email_templates_lowercase']              = 'modelli email';
$lang['email_template_ticket_fields_heading']   = 'Ticket';
$lang['email_template_invoices_fields_heading'] = 'Fatture';
$lang['email_template_clients_fields_heading']  = 'Clienti';

$lang['template_name']                                      = 'Nome Modello';
$lang['template_subject']                                   = 'Oggetto';
$lang['template_fromname']                                  = 'Nome Da';
$lang['template_fromemail']                                 = 'Email Da';
$lang['send_as_plain_text']                                 = 'Invia come testo normale';
$lang['email_template_disabled']                             = 'Disabilitato';
$lang['email_template_email_message']                       = 'Messaggio Email';
$lang['available_merge_fields']                             = 'Unione campi disponibile';
# Home
$lang['dashboard_string']                                   = 'Bacheca';
$lang['home_latest_todos']                                  = 'Ultime DaFare';
$lang['home_no_latest_todos']                               = 'Nessun DaFare trovato';
$lang['home_latest_finished_todos']                         = 'Ultime DaFare Terminate';
$lang['home_no_finished_todos_found']                       = 'Nessun DaFare terminato trovato';
$lang['home_todo_heading']                                  = 'Voci DaFare';
$lang['home_tickets_awaiting_reply_by_department']          = 'Ticket in attesa di risposta dal reparto';
$lang['home_tickets_awaiting_reply_by_status']              = 'Ticket in attesa di risposta dallo status';
$lang['home_this_week_events']                              = 'Eventi Questa Settimana';
$lang['home_upcoming_events_next_week']                     = 'Eventi in arrivo prossima settimana';
$lang['home_event_added_by']                                = 'Evento aggiunto da';
$lang['home_public_event']                                  = 'Evento Pubblico';
$lang['home_weekly_payment_records']                        = 'Record Pagamento Settimanale';
$lang['home_weekend_ticket_opening_statistics']             = 'Statistiche Settimanali Aperture Ticket';
# Newsfeed
$lang['whats_on_your_mind']                                 = 'Cos\'hai in mente?';
$lang['new_post']                                           = 'Articolo';
$lang['newsfeed_upload_tooltip']                            = 'Suggerimento: Trascinare i file da caricare';
$lang['newsfeed_all_departments']                           = 'Tutti i Reparti';
$lang['newsfeed_pin_post']                                  = 'Spilla Articolo';
$lang['newsfeed_unpin_post']                                = 'Togli spilla articolo';
$lang['newsfeed_delete_post']                               = 'Cancella';
$lang['newsfeed_published_post']                            = 'Pubblicato';
$lang['newsfeed_you_like_this']                             = 'Ti Piace';
$lang['newsfeed_like_this']                                 = 'piace';
$lang['newsfeed_one_other']                                 = 'altro';
$lang['newsfeed_you']                                       = 'Tu';
$lang['newsfeed_and']                                       = 'e';
$lang['newsfeed_you_and']                                   = 'Tu e';
$lang['newsfeed_like_this_saying']                          = 'Piace';
$lang['newsfeed_unlike_this_saying']                        = 'Non Piace';
$lang['newsfeed_show_more_comments']                        = 'Mostra più commenti';
$lang['comment_this_post_placeholder']                      = 'Commenta questo articolo...';
$lang['newsfeed_post_likes_modal_heading']                  = 'Colleghi a cui piace questo articolo';
$lang['newsfeed_comment_likes_modal_heading']               = 'Colleghi a cui piace questo commento';
$lang['newsfeed_newsfeed_post_only_visible_to_departments'] = 'Questo articolo è visibile solo ai seguenti reparti: %s';
# Fattura Items
$lang['invoice_items']                                      = 'Voci Fattura';
$lang['invoice_item']                                       = 'Voce Fattura';
$lang['new_invoice_item']                                   = 'Nuova Voce';
$lang['invoice_item_lowercase']                             = 'voce fattura';

$lang['invoice_items_list_description'] = 'Descrizione';
$lang['invoice_items_list_rate']        = 'Prezzo';
$lang['invoice_items_list_tax']         = 'Tassa';

$lang['invoice_item_add_edit_description'] = 'Descrizione';
$lang['invoice_item_add_edit_rate']        = 'Prezzo';
$lang['invoice_item_add_edit_tax']         = 'Tassa';
$lang['invoice_item_add_edit_tax_select']  = 'Seziona Tassa';

$lang['invoice_item_edit_heading'] = 'Modifica Voce';
$lang['invoice_item_add_heading']  = 'Aggiungi Nuova Voce';

# Fatture


$lang['invoices']                       = 'Fatture';
$lang['invoice']                        = 'Fattura';
$lang['invoice_lowercase']              = 'fattura';
$lang['create_new_invoice']             = 'Crea Nuova Fattura';
$lang['view_invoice']                   = 'Mostra Fattura';
$lang['invoice_payment_recorded']       = 'Pagamento Fattura Registrato';
$lang['invoice_payment_record_failed']  = 'Fallita Registrazione Pagamento Fattura';
$lang['invoice_sent_to_client_success'] = 'La fattura è stata inviata con successo al cliente';
$lang['invoice_sent_to_client_fail']    = 'Problema durante l\'invio della fattura';
$lang['invoice_reminder_send_problem']  = 'Problema nell\invio del promemoria della fattura scaduta';
$lang['invoice_overdue_reminder_sent']  = 'Promemoria Fattura Scaduta Inviato con Successo';

$lang['invoice_details']              = 'Dettagli Fattura';
$lang['invoice_view']                 = 'Mostra Fattura';
$lang['invoice_select_customer']      = 'Cliente';
$lang['invoice_add_edit_number']      = 'Numero Fattura';
$lang['invoice_add_edit_date']        = 'Data Fattura';
$lang['invoice_add_edit_duedate']     = 'Scadenza';
$lang['invoice_add_edit_currency']    = 'Valuta';
$lang['invoice_add_edit_client_note'] = 'Nota Cliente';
$lang['invoice_add_edit_admin_note']  = 'Nota Admin';

$lang['invoice_add_edit_search_item']  = 'Cerca Voci';
$lang['invoices_toggle_table_tooltip'] = 'Mostra Tabella Completa';





$lang['edit_invoice_tooltip']                   = 'Modifica Fattura';
$lang['delete_invoice_tooltip']                 = 'Cancella fattura. Nota: Tutti i pagamenti riguardanti questa fattura saranno cancellati (se presenti).';
$lang['invoice_sent_to_email_tooltip']          = 'Invia per Email';
$lang['invoice_already_send_to_client_tooltip'] = 'Questa fattura è già stata inviata al cliente %s';
$lang['send_overdue_notice_tooltip']            = 'Invia Sollecito';
$lang['invoice_view_activity_tooltip']          = 'Attività Log';
$lang['invoice_record_payment']                 = 'Registra Pagamento';


$lang['invoice_send_to_client_modal_heading']    = 'Invia questa fattura al cliente';
$lang['invoice_send_to_client_attach_pdf']       = 'Allega PDF fattura';
$lang['invoice_send_to_client_preview_template'] = 'Anteprima Modello Email';

$lang['invoice_dt_table_heading_number']  = 'Fattura n°';
$lang['invoice_dt_table_heading_date']    = 'Data';
$lang['invoice_dt_table_heading_client']  = 'Cliente';
$lang['invoice_dt_table_heading_duedate'] = 'Scadenza';
$lang['invoice_dt_table_heading_amount']  = 'Importo';
$lang['invoice_dt_table_heading_status']  = 'Status';

$lang['record_payment_for_invoice']              = 'Pagamento Registrato per';
$lang['record_payment_amount_received']          = 'Importo Ricevuto';
$lang['record_payment_date']                     = 'Data Pagamento';
$lang['record_payment_leave_note']               = 'Lascia una nota';
$lang['invoice_payments_received']               = 'Pagamenti Ricevuti';
$lang['invoice_record_payment_note_placeholder'] = 'Nota Admin';
$lang['no_payments_found']                       = 'Nessun pagamento trovato per questa fattura';
$lang['invoice_email_link_text']                 = 'Mostra Fattura';

# Payments
$lang['payments']                             = 'Pagamenti';
$lang['payment']                              = 'Pagamento';
$lang['payment_lowercase']                    = 'pagamento';
$lang['payments_table_number_heading']        = 'Pagamento n°';
$lang['payments_table_invoicenumber_heading'] = 'Fattura n°';
$lang['payments_table_mode_heading']          = 'Metodo Pagamento';
$lang['payments_table_date_heading']          = 'Data';
$lang['payments_table_amount_heading']        = 'Importo';
$lang['payments_table_client_heading']        = 'Cliente';
$lang['payment_not_exists']                   = 'Il pagamento non esiste';

$lang['payment_edit_for_invoice']     = 'Pagamento per fattura';
$lang['payment_edit_amount_received'] = 'Importo Ricevuto';
$lang['payment_edit_date']            = 'Data Pagamento';
$lang['payment_edit_lave_note']       = 'Lascia Nota';


# Knowledge Base
$lang['kb_article_add_edit_subject'] = 'Oggetto';
$lang['kb_article_add_edit_group']   = 'Gruppo';
$lang['kb_string']                   = 'Informazioni di base';
$lang['kb_article']                  = 'Articolo';
$lang['kb_article_lowercase']        = 'articolo';
$lang['kb_article_new_article']      = 'Nuovo Articolo';
$lang['kb_article_disabled']         = 'Disabilitato';
$lang['kb_article_description']      = 'Descrizione articolo';

$lang['kb_table']                      = 'Lista';
$lang['kb_no_articles_found']          = 'Nessu articolo d\'informazione di base trovato';
$lang['kb_dt_article_name']            = 'Nome Articolo';
$lang['kb_dt_group_name']              = 'Gruppo';
$lang['new_group']                     = 'Nuovo Gruppo';
$lang['kb_group_add_edit_name']        = 'Nome Gruppo';
$lang['kb_group_add_edit_description'] = 'Descrizione breve';
$lang['kb_group_add_edit_disabled']    = 'Disabilitato';
$lang['kb_group_add_edit_note']        = 'Nota: Tutti gli articoli in questo gruppo saranno nascosti se viene selezionato disabilita';
$lang['group_table_name_heading']      = 'Nome';
$lang['group_table_isactive_heading']  = 'Attivo';
$lang['kb_no_groups_found']            = 'Nessun gruppo Informazione di base trovato';

# Mail Lists
$lang['mail_lists']                           = 'Liste Mail';
$lang['mail_list']                            = 'Lista Mail';
$lang['new_mail_list']                        = 'Nuova Lista Mail';
$lang['mail_list_lowercase']                  = 'lista mail';
$lang['custom_field_deleted_success']         = 'Campo personalizzato cancellato';
$lang['custom_field_deleted_fail']            = 'Problema cancellazione campo personalizzato';
$lang['email_removed_from_list']              = 'Email rimossa dalla lista';
$lang['email_remove_fail']                    = 'Email rimossa dalla lista';
$lang['staff_mail_lists']                     = 'Lista Mail Staff';
$lang['clients_mail_lists']                   = 'Lista Mail Clienti';
$lang['mail_list_total_imported']             = 'Email totali importate: %s';
$lang['mail_list_total_duplicate']            = 'Email totali duplicate: %s';
$lang['mail_list_total_failed_to_insert']     = 'Email che hanno fallito l\'inserimento: %s';
$lang['mail_list_total_invalid']              = 'Indirizzo email non valido: %s';
$lang['cant_edit_mail_list']                  = 'Non puoi modificare questa lista, questa lista è popolata automaticamente';
$lang['mail_list_add_edit_name']              = 'Nome Lista Mail';
$lang['mail_list_add_edit_customfield']       = 'Aggiungi campo personalizzato';
$lang['mail_lists_viewing_emails']            = 'Mostra email dalla lista';
$lang['mail_lists_view_email_email_heading']  = 'Email';
$lang['mail_lists_view_email_date_heading']   = 'Data Aggiunto';
$lang['add_new_email_to']                     = 'Aggiungi Nuova Email A %s';
$lang['import_emails_to']                     = 'Importa Email A %s';
$lang['mail_list_new_email_edit_add_label']   = 'Email';
$lang['mail_list_import_file']                = 'Importa File';
$lang['mail_list_available_custom_fields']    = 'Campo Personalizzato Disponibile';
$lang['submit_import_emails']                 = 'Importa Email';
$lang['btn_import_emails']                    = 'Importa Email (Excel)';
$lang['btn_add_email_to_list']                = 'Aggiungi Email a Questa Lista';
$lang['mail_lists_dt_list_name']              = 'Nome Lista';
$lang['mail_lists_dt_datecreated']            = 'Data Creazione';
$lang['mail_lists_dt_creator']                = 'Creatore';
$lang['email_added_to_mail_list_successfully'] = 'Email aggiunta a questa lista';
$lang['email_is_duplicate_mail_list']         = 'Email già esistente in questa lista';

# Media
$lang['media_files']            = 'File';

# Payment modes
$lang['new_payment_mode']       = 'Nuovo Metodo Pagamento';
$lang['payment_modes']          = 'Metodi Pagamento';
$lang['payment_mode']           = 'Metodo Pagamento';
$lang['payment_mode_lowercase'] = 'metodo pagamento';
$lang['payment_modes_dt_name']  = 'Nome Metodi Pagamento';

$lang['payment_mode_add_edit_name'] = 'Nome Metodo Pagamento';
$lang['payment_mode_edit_heading']  = 'Modifica Metodo Pagamento';
$lang['payment_mode_add_heading']   = 'Aggiungi Nuovo Metodo Pagamento';

# Predefined Ticket Replies
$lang['new_predefined_reply']              = 'Nuova Risposta Predefinita';
$lang['predefined_replies']                = 'Risposte Predefinite';
$lang['predefined_reply']                  = 'Risposta Predefinita';
$lang['predefined_reply_lowercase']        = 'risposta predefinita';
$lang['predefined_replies_dt_name']        = 'Nome Risposte Predefinite';
$lang['predefined_reply_add_edit_name']    = 'Nome Risposta Predefinita';
$lang['predefined_reply_add_edit_content'] = 'Contenuto Risposta';

# Ticket Priorities
$lang['new_ticket_priority']           = 'Nuova Priorità';
$lang['ticket_priorities']             = 'Priorità Ticket';
$lang['ticket_priority']               = 'Priorità Ticket';
$lang['ticket_priority_lowercase']     = 'priorità ticket';
$lang['no_ticket_priorities_found']    = 'Nessuna Priorità Ticket Trovata';
$lang['ticket_priority_dt_name']       = 'Nome Priorità Ticket';
$lang['ticket_priority_add_edit_name'] = 'Nome Priorità';

# Reports
$lang['kb_reports']                         = 'Resoconto articoli Informazioni di Base';
$lang['sales_reports']                      = 'Resoconto Vendite';
$lang['reports_choose_kb_group']            = 'Scegli Gruppo';
$lang['reports_sales_select_report_type']   = 'Seleziona Tipo Resoconto';
$lang['report_kb_yes']                      = 'Sì';
$lang['report_kb_no']                       = 'No';
$lang['report_kb_no_votes']                 = 'Ancora Nessun Voto';
$lang['report_this_week_leads_conversions'] = 'Conversioni Probabili Clienti Questa Settimana';
$lang['report_leads_sources_conversions']   = 'Sorgenti';
$lang['report_leads_monthly_conversions']   = 'Mensili';
$lang['sales_report_heading']               = 'Resoconto Vendite';
$lang['report_sales_type_income']           = 'Totale Entrate';

$lang['report_sales_type_customer']                    = 'Resoconto Cliente';
$lang['report_sales_base_currency_select_explanation'] = 'È necessario selezionare la valuta perché avete fatture con valuta diversa';
$lang['report_sales_from_date']                        = 'Data Da';
$lang['report_sales_to_date']                          = 'Data A';


$lang['report_sales_months_all_time']      = 'Tutto il Tempo';
$lang['report_sales_months_six_months']    = 'Ultimi 6 Mesi';
$lang['report_sales_months_twelve_months'] = 'Ultimi 12 Mesi';
$lang['report_sales_months_custom']        = 'Personalizzato';
$lang['reports_sales_generated_report']    = 'Resoconto Generato';



$lang['reports_sales_dt_customers_client']                = 'Client';
$lang['reports_sales_dt_customers_total_invoices']        = 'Totale Fatture';
$lang['reports_sales_dt_items_customers_amount']          = 'Importo';
$lang['reports_sales_dt_items_customers_amount_with_tax'] = 'Importo con Tassa';

# Roles
$lang['new_role']           = 'Nuovo Ruolo';
$lang['all_roles']          = 'Tutti i Ruoli';
$lang['roles']              = 'Ruoli Staff';
$lang['role']               = 'Ruoli';
$lang['role_lowercase']     = 'ruolo';
$lang['roles_total_users']  = 'Totale Utenti: ';
$lang['roles_dt_name']      = 'Nome Ruolo';
$lang['role_add_edit_name'] = 'Nome Ruolo';

# Service
$lang['new_service']           = 'Nuovo Servizio';
$lang['services']              = 'Servizi';
$lang['service']               = 'Servizio';
$lang['service_lowercase']     = 'servizio';
$lang['services_dt_name']      = 'Nome Servizio';
$lang['service_add_edit_name'] = 'Nome Servizio';

# Settings
$lang['settings']                     = 'Impostazioni';
$lang['settings_updated']             = 'Impostazioni Aggiornate';
$lang['settings_save']                = 'Salva Impostazioni';
$lang['settings_group_general']       = 'Generali';
$lang['settings_group_localization']  = 'Localizzazione';
$lang['settings_group_tickets']       = 'Ticket';
$lang['settings_group_sales']         = 'Finanza';
$lang['settings_group_email']         = 'Email';
$lang['settings_group_clients']       = 'Clienti';
$lang['settings_group_newsfeed']      = 'Newsfeed';
$lang['settings_group_cronjob']       = 'Cron Job';

$lang['settings_yes']                                        = 'Si';
$lang['settings_no']                                         = 'No';
$lang['settings_clients_default_theme']                      = 'Tema clienti predefinito';
$lang['settings_clients_allow_registration']                 = 'Permetti ai clienti di registrarsi';
$lang['settings_clients_allow_kb_view_without_registration'] = 'Permetti di far vedere Inormazioni di Base senza essere registrati';

$lang['settings_cron_send_overdue_reminder']                 = 'Invia promemoria fattura scaduta';
$lang['settings_cron_send_overdue_reminder_tooltip']         = 'Invia al cliente un\'email di fattura scaduta quando lo status della fattura viene aggiornato a Scaduto da Cron Job';
$lang['automatically_send_invoice_overdue_reminder_after']   = 'Invia automaticamente promemoria dopo (giorni)';
$lang['automatically_resend_invoice_overdue_reminder_after'] = 'Re-invia automaticamente promemoria dopo (giorni)';

$lang['settings_email_host']      = 'Host SMTP ';
$lang['settings_email_port']      = 'Porta SMTP';
$lang['settings_email']           = 'Email SMTP';
$lang['settings_email_password']  = 'Password SMTP';
$lang['settings_email_charset']   = 'Email Charset';
$lang['settings_email_signature'] = 'Firma Email';

$lang['settings_general_company_logo']                = 'Logo Ditta';
$lang['settings_general_company_logo_tooltip']        = 'Dimensioni raccomandate: 150 x 34px';
$lang['settings_general_company_remove_logo_tooltip'] = 'Rimuovi logo ditta';
$lang['settings_general_company_name']                = 'Nome Ditta';
$lang['settings_general_company_main_domain']         = 'Dominio Principale Ditta';
$lang['settings_general_use_knowledgebase']           = 'Usa Informazioni di Base';
$lang['settings_general_use_knowledgebase_tooltip']   = 'Se si permettono queste opzioni per Informazioni di Base verranno visualizzate anche lato cliente';
$lang['settings_general_tables_limit']                = 'Limiti Paginazione Tabelle';
$lang['settings_general_default_staff_role']          = 'Ruolo Staff Predefintio';
$lang['settings_general_default_staff_role_tooltip']  = 'Quando si aggiunge un nuovo membro dello Staff questo ruolo verrà selezionato per impostazione predefinita';

$lang['settings_localization_date_format']      = 'Formato Data';
$lang['settings_localization_default_timezone'] = 'Fuso Orario Predefintio';
$lang['settings_localization_default_language'] = 'Lingua Predefinita';

$lang['settings_newsfeed_max_file_upload_post']    = 'Numero massimo di file caricare per post';
$lang['settings_newsfeed_max_file_size']           = 'Dimensione massima file (MB)';

$lang['settings_reminders_contracts']         = 'Promemoria Scadenza Contratto';
$lang['settings_reminders_contracts_tooltip'] = 'Notifica promemoria di scadenza in giorni';

$lang['settings_tickets_use_services']             = 'Servizi usati';
$lang['settings_tickets_max_attachments']          = 'Numero massimo allegato per ticket';
$lang['settings_tickets_allow_departments_access'] = 'Permettere allo staff di accedere solo ai ticket che appartengono al loro reparto';
$lang['settings_tickets_allowed_file_extensions']  = 'Estensione file permesse per gli allegati';

$lang['settings_sales_general']                                    = 'Generale';
$lang['settings_sales_general_note']                               = 'Impostazioni Generali';
$lang['settings_sales_invoice_prefix']                             = 'Prefisso Numero Fattura';
$lang['settings_sales_decimal_separator']                          = 'Separatore Decimale';
$lang['settings_sales_thousand_separator']                         = 'Separatore Migliaia';
$lang['settings_sales_currency_placement']                         = 'Posizione Valuta';
$lang['settings_sales_currency_placement_before']                  = 'Prima dell\'Importo';
$lang['settings_sales_currency_placement_after']                   = 'Dopo \'Importo';
$lang['settings_sales_require_client_logged_in_to_view_invoice']   = 'Richiede che il cliente abbia effettuato l\'accesso per vedere la fattura';
$lang['settings_sales_next_invoice_number']                        = 'Prossimo Numero Fattura';
$lang['settings_sales_next_invoice_number_tooltip']                = 'Imposta questo campo a 1 se vuoi iniziare dall\'inizio';
$lang['settings_sales_decrement_invoice_number_on_delete']         = 'Decremento del numero di Fattura su Elimina';
$lang['settings_sales_decrement_invoice_number_on_delete_tooltip'] = 'Vuoi diminuire il numero di fattura quando l\'ultima fattura è cancellata? Es. Se è impostata questa opzione a SÌ e prima che la fattura sia cancellata il numero di fattura successivo sarà 15, il numero di fattura successivo sarà diminuito a 14 per la prossima fattura. Se è impostata su No il numero rimarrà a 15';
$lang['settings_sales_invoice_number_format']                      = 'Formato Numero Fattura';
$lang['settings_sales_invoice_number_format_year_based']           = 'Basato su Anno';
$lang['settings_sales_invoice_number_format_number_based']         = 'Basato su Numero (000001)';

$lang['settings_sales_company_info_note']    = 'Queste informazioni verranno visualizzate su fatture/preventivi/pagamenti e altri documenti PDF in cui è richiesta informazione aziendale';
$lang['settings_sales_company_name']         = 'Nome Azienda';
$lang['settings_sales_address']              = 'Indirizzo';
$lang['settings_sales_city']                 = 'Città';
$lang['settings_sales_country_code']         = 'Codice Nazione';
$lang['settings_sales_postal_code']          = 'Codice Postale';
$lang['settings_sales_phonenumber']          = 'Telefono';

# Leads
$lang['new_lead']       = 'Nuovo Potenziale Cliente';
$lang['leads']          = 'Potenziali Clienti';
$lang['lead']           = 'Potenziale Cliente';
$lang['lead_lowercase'] = 'potenziale cliente';
$lang['leads_all']      = 'Tutti';

$lang['leads_canban_notes']  = 'Note: %s';
$lang['leads_canban_source'] = 'Fonte: %s';

$lang['lead_new_source']            = 'Nuova Fonte';
$lang['lead_sources']               = 'Fonti Potenziali Clienti';
$lang['lead_source']                = 'Fonte Potenziali Cliente';
$lang['lead_source_lowercase']      = 'fonte potenziale cliente';
$lang['leads_sources_not_found']    = 'Nessuna fonte potenziali clienti trovata';
$lang['leads_sources_table_name']   = 'Nome Fonte';
$lang['leads_source_add_edit_name'] = 'Nome Fonte';

$lang['lead_new_status']         = 'Nuovo Status Potenziale Cliente';
$lang['lead_statuss']            = 'Status Potenziale Cliente';
$lang['lead_status']             = 'Status Potenziale Cliente';
$lang['lead_status_lowercase']   = 'status potenziale cliente';
$lang['leads_status_table_name'] = 'Nome Status';

$lang['leads_status_add_edit_name']  = 'Nome Status';
$lang['leads_status_add_edit_order'] = 'Ordine';

$lang['lead_statuses_not_found']      = 'Nessuno status potenziali clienti trovato';
$lang['leads_search']                 = 'Cerca Potenziali Clienti';

$lang['leads_table_total'] = 'Totale Potenziali Clienti: %s';

$lang['leads_dt_name']         = 'Nome';
$lang['leads_dt_email']        = 'Email';
$lang['leads_dt_phonenumber']  = 'Telefono';
$lang['leads_dt_assigned']     = 'Assegnato';
$lang['leads_dt_status']       = 'Status';
$lang['leads_dt_last_contact'] = 'Ultimo Contatto';

$lang['lead_add_edit_name']                 = 'Nome';
$lang['lead_add_edit_email']                = 'Indirizzo Email';
$lang['lead_add_edit_phonenumber']          = 'Telefono';
$lang['lead_add_edit_source']               = 'Fonte';
$lang['lead_add_edit_status']               = 'Status Potenziale Cliente';
$lang['lead_add_edit_assigned']             = 'Assegnato';
$lang['lead_add_edit_datecontacted']        = 'Data Contattato';
$lang['lead_add_edit_contacted_today']      = 'Contattato Oggi';
$lang['lead_add_edit_activity']             = 'Registro delle attività';
$lang['lead_add_edit_notes']                = 'Note';
$lang['lead_add_edit_add_note']             = 'Aggiungi nota';
$lang['lead_not_contacted']                 = 'Non ho contattato questo potenziale cliente';
$lang['lead_add_edit_contacted_this_lead']  = 'Mi sono messo in contatto con questo potenziale cliente';
$lang['lead_confirmation_canban_contacted'] = 'Ti sei messo in contatto con questo potenziale cliente?';

# Misc
$lang['access_denied']              = 'Accesso Negato';
$lang['prev']                       = 'Prec.';
$lang['next']                       = 'Succ.';

# Datatables
$lang['dt_paginate_first']          = 'Primo';
$lang['dt_paginate_last']           = 'Ultimo';
$lang['dt_paginate_next']           = 'Successivo';
$lang['dt_paginate_previous']       = 'Precedente';
$lang['dt_empty_table']             = 'Nessun {0} trovato';
$lang['dt_search']                  = 'Cerca:';
$lang['dt_zero_records']            = 'Nessuna corrispondenza trovata';
$lang['dt_loading_records']         = 'Caricamento...';
$lang['dt_length_menu']             = 'Mostra _MENU_ ';
$lang['dt_info_filtered']           = '(filtrati da _MAX_ totali {0})';
$lang['dt_info_empty']              = 'Stai vedendo 0 a 0 di 0 {0}';
$lang['dt_info']                    = 'Stai vedendo _START_ a _END_ di _TOTAL_ {0}';
$lang['dt_empty_table']             = 'Nessun {0} trovato';
$lang['dt_sort_ascending']          = 'attivare per ordinare la colonna in ordine ascendente';
$lang['dt_sort_descending']         = 'attivare per ordinare la colonna in ordine discendente';
# Fattura Activity Log
$lang['user_sent_overdue_reminder'] = '%s invia promemoria fatture scadute';

# Weekdays
$lang['wd_monday']    = 'Lunedì';
$lang['wd_tuesday']   = 'Martedì';
$lang['wd_thursday']  = 'Giovedì';
$lang['wd_wednesday'] = 'Mercoledì';
$lang['wd_friday']    = 'Venerdì';
$lang['wd_saturday']  = 'Sabato';
$lang['wd_sunday']    = 'Domenica';

# Admin Left Sidebar
$lang['als_dashboard'] = 'Bacheca';
$lang['als_clients']   = 'Clienti';
$lang['als_leads']     = 'Potenziali Clienti';

$lang['als_contracts'] = 'Contratti';

$lang['als_all_tickets'] = 'Tutti i Ticket';
$lang['als_sales']       = 'Vendite';

$lang['als_staff'] = 'Staff';
$lang['als_tasks'] = 'Attività';
$lang['als_kb']    = 'Informazioni Base';

$lang['als_surveys']               = 'Sondaggio';
$lang['als_media']                 = 'Media';
$lang['als_reports']               = 'Resoconti';
$lang['als_reports_sales_submenu'] = 'Vendite';
$lang['als_reports_leads_submenu'] = 'Potenziali Clienti';
$lang['als_kb_articles_submenu']   = 'Articoli Inf. B.';
$lang['als_utilities']             = 'Utilità';
$lang['als_announcements_submenu'] = 'Annunci';
$lang['als_mail_lists_submenu']    = 'Lista Mail';
$lang['als_calendar_submenu']      = 'Calendario';
$lang['als_activity_log_submenu']  = 'Registro Attività';

# Admin Customizer Sidebar
$lang['acs_tickets']                           = 'Ticket';
$lang['acs_ticket_priority_submenu']           = 'Priorità Ticket';
$lang['acs_ticket_statuses_submenu']           = 'Status Ticket';
$lang['acs_ticket_predefined_replies_submenu'] = 'Risposte Predefinite';
$lang['acs_ticket_services_submenu']           = 'Servizi';
$lang['acs_departments']                       = 'Reparti';
$lang['acs_leads']                             = 'Potenziali Clienti';
$lang['acs_leads_sources_submenu']             = 'Fonti';
$lang['acs_leads_statuses_submenu']            = 'Status';
$lang['acs_sales_taxes_submenu']               = 'Tasse';
$lang['acs_sales_currencies_submenu']          = 'Valute';
$lang['acs_sales_payment_modes_submenu']       = 'Metodi Pagamento';
$lang['acs_email_templates']                   = 'Modelli Email';
$lang['acs_roles']                             = 'Ruoli';
$lang['acs_settings']                          = 'Impostazioni';

# Tickets
$lang['new_ticket']                                         = 'Apri Nuovo Ticket';
$lang['tickets']                                            = 'Ticket';
$lang['ticket']                                             = 'Ticket';
$lang['ticket_lowercase']                                   = 'ticket';
$lang['support_tickets']                                    = 'Ticket Supporto';
$lang['support_ticket']                                     = 'Ticket Supporto';
$lang['ticket_settings_to']                                 = 'A';
$lang['ticket_settings_email']                              = 'Indirizzo Email';
$lang['ticket_settings_departments']                        = 'Reparto';
$lang['ticket_settings_service']                            = 'Servizio';
$lang['ticket_settings_priority']                           = 'Priorità';
$lang['ticket_settings_subject']                            = 'Oggetto';
$lang['ticket_settings_assign_to']                          = 'Ticket assegnato (predefinito è utente corrente)';
$lang['ticket_settings_assign_to_you']                      = 'Tu';
$lang['ticket_settings_select_client']                      = 'Seleziona Cliente';
$lang['ticket_add_body']                                    = 'Corpo Ticket';
$lang['ticket_add_attachments']                             = 'Allegati';
$lang['ticket_no_reply_yet']                                = 'Ancora Nessuna Risposta';
$lang['new_ticket_added_successfully']                        = 'Ticket n°%s aggiunto con successo';
$lang['replied_to_ticket_successfully']                       = 'Risposta al ticket n°%s eseguita';
$lang['ticket_settings_updated_successfully']                = 'Impostazioni ticket aggiornate con successo';
$lang['ticket_settings_updated_successfully_and_reassigned'] = 'Impostazioni Ticket aggiornate con successo - riassegnate al reparto %s';
$lang['ticket_dt_subject']                                  = 'Oggetto';
$lang['ticket_dt_department']                               = 'Reparto';
$lang['ticket_dt_service']                                  = 'Servizio';
$lang['ticket_dt_submitter']                                = 'Clienti';
$lang['ticket_dt_status']                                   = 'Status';
$lang['ticket_dt_priority']                                 = 'Priorità';
$lang['ticket_dt_last_reply']                               = 'Ultima Risposta';

$lang['ticket_single_add_reply']                  = 'Aggiungi Risposta';
$lang['ticket_single_add_note']                   = 'Aggiungi nota';
$lang['ticket_single_other_user_tickets']         = 'Altri ticket';
$lang['ticket_single_settings']                   = 'Impostazioni';
$lang['ticket_single_priority']                   = 'Priorità: %s';
$lang['ticket_single_last_reply']                 = 'Ultima Risposta: %s';
$lang['ticket_single_change_status_top']          = 'Cambia Status';
$lang['ticket_single_ticket_note_by']             = 'Nota Ticket di %s';
$lang['ticket_single_note_added']                 = 'Nota aggiunta: %s';
$lang['ticket_single_change_status']              = 'Cambia Status';
$lang['ticket_single_assign_to_me_on_update']     = 'Assegna automaticamente questo ticket a me';
$lang['ticket_single_insert_predefined_reply']    = 'Inserire risposta predefinita';
$lang['ticket_single_insert_knowledge_base_link'] = 'Inserire link Informazioni di Base';
$lang['ticket_single_attachments']                = 'Allegati';
$lang['ticket_single_add_response']               = 'Aggiungi Risposta';
$lang['ticket_single_note_heading']               = 'Nota';
$lang['ticket_single_add_note']                   = 'Aggiungi nota';
$lang['ticket_settings_none_assigned']            = 'Nessuno';
$lang['ticket_status_changed_successfully']        = 'Status Ticket Cambiato';
$lang['ticket_status_changed_fail']               = 'Problema nel Cambiare Status Ticket';

$lang['ticket_staff_string']                    = 'Staff';
$lang['ticket_client_string']                   = 'Cliente';
$lang['ticket_posted']                          = 'Pubblicato: %s';
$lang['ticket_insert_predefined_reply_heading'] = 'Inserire risposta predefinita';
$lang['ticket_kb_link_heading']                 = 'Inserire link Informazioni di Base';
$lang['ticket_access_by_department_denied']     = 'Non hai accesso a questo ticket. Il ticket appartiene ad un reparto al quale non sei assegnato.';

# Staff
$lang['new_staff']                       = 'Nuovo Membro Staff';
$lang['staff_members']                   = 'Membri Staff';
$lang['staff_member']                    = 'Membro Staff';
$lang['staff_member_lowercase']          = 'membro staff';
$lang['staff_profile_updated']           = 'Il Tuo Profilo è Stato Aggiornato';
$lang['staff_old_password_incorrect']     = 'La tua vecchia password non è corretta';
$lang['staff_password_changed']          = 'La Tua Password è Stata Cambiata';
$lang['staff_problem_changing_password'] = 'Problema nel cambio della password';
$lang['staff_profile_string']            = 'Profilo';

$lang['staff_cant_remove_main_admin']          = 'Impossibili rimuovere l\'amministratore principale';
$lang['staff_cant_remove_yourself_from_admin'] = 'Non puoi toglierti da solo dal ruolo di amministratore ';

$lang['staff_dt_name']       = 'Nome Completo';
$lang['staff_dt_email']      = 'Email';
$lang['staff_dt_last_Login'] = 'Ultimo Accesso';
$lang['staff_dt_active']     = 'Attivo';

$lang['staff_add_edit_firstname']             = 'Nome';
$lang['staff_add_edit_lastname']              = 'Cognome';
$lang['staff_add_edit_email']                 = 'Email';
$lang['staff_add_edit_phonenumber']           = 'Telefono';
$lang['staff_add_edit_facebook']              = 'Facebook';
$lang['staff_add_edit_linkedin']              = 'LinkedIn';
$lang['staff_add_edit_skype']                 = 'Skype';
$lang['staff_add_edit_departments']           = 'Reparti Membri';
$lang['staff_add_edit_role']                  = 'Ruolo';
$lang['staff_add_edit_permissions']           = 'Permessi';
$lang['staff_add_edit_administrator']         = 'Amministratore';
$lang['staff_add_edit_password']              = 'Password';
$lang['staff_add_edit_password_note']         = 'Nota: se si popolano i campi, verrà cambiata la password a questo utente.';
$lang['staff_add_edit_password_last_changed'] = 'Ultima Password Cambiata';
$lang['staff_add_edit_notes']                 = 'Note';
$lang['staff_add_edit_note_description']      = 'Descrizione nota';

$lang['staff_notes_table_description_heading'] = 'Nota';
$lang['staff_notes_table_addedfrom_heading']   = 'Aggiunto Da';
$lang['staff_notes_table_dateadded_heading']   = 'Data Aggiunta';

$lang['staff_admin_profile']         = 'Questo è il profilo ammin';
$lang['staff_profile_notifications'] = 'Notifiche';
$lang['staff_profile_departments']   = 'Reparti';

$lang['staff_edit_profile_image']                     = 'Immagine Profilo';
$lang['staff_edit_profile_your_departments']          = 'I Tuoi Reparti';
$lang['staff_edit_profile_change_your_password']      = 'Cambia la tua password';
$lang['staff_edit_profile_change_old_password']       = 'Vecchia password';
$lang['staff_edit_profile_change_new_password']       = 'Nuova password';
$lang['staff_edit_profile_change_repeat_new_password'] = 'Ripeti nuova password';

# Surveys
$lang['new_survey']                    = 'Nuovo Sondaggio';
$lang['surveys']                       = 'Sondaggi';
$lang['survey']                        = 'Sondaggio';
$lang['survey_lowercase']              = 'sondaggio';
$lang['survey_no_mail_lists_selected'] = 'Nessuna lista mail selezionata';
$lang['survey_send_success_note']      = 'Tutte le Email di Sondaggio(%s) saranno inviate tramite CRON job con intervallo di 5 minuti';
$lang['survey_result']                 = 'Risultato del Sondaggio: %s';
$lang['question_string']               = 'Domanda';
$lang['question_field_string']         = 'Campo';

$lang['survey_list_view_tooltip']         = 'Vedi Sondaggio';
$lang['survey_list_view_results_tooltip'] = 'Vedi Risultati';

$lang['survey_add_edit_subject']                   = 'Oggetto sondaggio';
$lang['survey_add_edit_email_description']         = 'Descrizione sondaggio (Descrizione Email)';
$lang['survey_include_survey_link']                = 'Includere il link al sondaggio nella descrizione';
$lang['survey_available_mail_lists_custom_fields'] = 'Campi personalizzati disponibili da liste email';
$lang['survey_mail_lists_custom_fields_tooltip']   = 'I campi personalizzati possono essere utilizzati per editor di posta elettronica. SUGGERIMENTO: Fare clic sull\'editor di posta elettronica e quindi selezionare dal menu a tendina per aggiungerli automaticamente.';
$lang['survey_add_edit_short_description_view']    = 'Breve descrizione sondaggio (Vedi Descrizione)';
$lang['survey_add_edit_from']                      = 'Da (mostrato nell\'email)';
$lang['survey_add_edit_redirect_url']              = 'URL di reindirizzamento sondaggio';
$lang['survey_add_edit_red_url_note']              = 'Dove sarà reindirizzato l\'utente quando termina il sondaggio (lasciare in bianco per URL a questo sito)';
$lang['survey_add_edit_disabled']                  = 'Disabilitato';
$lang['survey_add_edit_only_for_logged_in']        = 'Solo per partecipanti che hanno eseguito l\'accesso (staff,clienti)';
$lang['send_survey_string']                        = 'Invia Sondaggio';
$lang['survey_send_mail_list_clients']             = 'Clienti';
$lang['survey_send_mail_list_staff']               = 'Staff';
$lang['survey_send_mail_lists_string']             = 'Liste Mail';
$lang['survey_send_mail_lists_note_logged_in']     = 'Nota: Se si invia il sondaggio alle liste di posta elettronica SOLO per i partecipanti che hanno eseguito l\'accesso deve essere deselezionata';
$lang['survey_send_string']                        = 'Invio';

$lang['survey_send_to_total']  = 'Inviare a %s email totali';
$lang['survey_send_till_now']  = 'Finora';
$lang['survey_send_finished']  = 'Invio sondaggio terminato: %s';
$lang['survey_added_to_queue'] = 'Questo sondaggio è stato aggiunto alla coda cron il %s';

$lang['survey_questions_string']          = 'Domande';
$lang['survey_insert_field']              = 'Inserire Campo';
$lang['survey_field_checkbox']            = 'Checkbox';
$lang['survey_field_radio']               = 'Radio';
$lang['survey_field_input']               = 'Campo di Input';
$lang['survey_field_textarea']            = 'Textarea';
$lang['survey_question_required']         = 'Richiesto';
$lang['survey_question_only_for_preview'] = 'Solo per anteprima';
$lang['survey_create_first']              = 'Devi creare prima il sondaggio poi potrati inserire la domanda.';


$lang['survey_dt_name']               = 'Nome';
$lang['survey_dt_total_questions']    = 'Domande Totali';
$lang['survey_dt_total_participants'] = 'Totali Partecipanti';
$lang['survey_dt_date_created']       = 'Data Creata';
$lang['survey_dt_active']             = 'Attivo';

$lang['survey_text_questions_results'] = 'Testo del risultato delle domande';
$lang['survey_view_all_answers']       = 'Vedi Tutte le Risposte';

# Staff Compiti
$lang['new_task']       = 'Nuova Attività';
$lang['tasks']          = 'Attività';
$lang['task']           = 'Attività';
$lang['task_lowercase'] = 'attività';
$lang['comment_string'] = 'Commento';

$lang['task_marked_as_complete'] = 'Contrassegna attività come completata';
$lang['task_follower_removed']   = 'Rimosso con successo chi seguiva l\'attività';
$lang['task_assignee_removed']   = 'Assegnatario Attività Rimosso con Successo';

$lang['task_no_assignees'] = 'Nessun assegnatario per questa attività';
$lang['task_no_followers'] = 'Questa attività non ha seguito';

$lang['task_list_all']            = 'Tutte';
$lang['task_list_not_assigned']   = 'Non Assegnate';
$lang['task_list_duedate_passed'] = 'Scadenza Passata';
$lang['tasks_dt_name']            = 'Nome';

$lang['task_single_priority']               = 'Priorità';
$lang['task_single_start_date']             = 'Data Inizio';
$lang['task_single_due_date']               = 'Scadenza';
$lang['task_single_finished']               = 'Terminata';
$lang['task_single_mark_as_complete']       = 'Contrassegnare come completa';
$lang['task_single_edit']                   = 'Modifica';
$lang['task_single_delete']                 = 'Elimina';
$lang['task_single_assignees']              = 'Assegnatari';
$lang['task_single_assignees_select_title'] = 'Assegnare Attività A';
$lang['task_single_followers']              = 'Seguaci';
$lang['task_single_followers_select_title'] = 'Aggiungi Seguaci';
$lang['task_single_insert_media_link']      = 'Inserire Link Media';
$lang['task_single_add_new_comment']        = 'Aggiungi Commento';

$lang['task_add_edit_subject']     = 'Oggetto';
$lang['task_add_edit_priority']    = 'Priorità';
$lang['task_priority_low']         = 'Bassa';
$lang['task_priority_medium']      = 'Media';
$lang['task_priority_high']        = 'Alta';
$lang['task_priority_urgent']      = 'Urgente';
$lang['task_add_edit_start_date']  = 'Data Inizio';
$lang['task_add_edit_due_date']    = 'Scadenza';
$lang['task_add_edit_description'] = 'Descrizione Attività';

# Taxes
$lang['new_tax']       = 'Nuova Tassa';
$lang['taxes']         = 'Tasse';
$lang['tax']           = 'Tassa';
$lang['tax_lowercase'] = 'tassa';
$lang['tax_dt_name']   = 'Nome Tassa';
$lang['tax_dt_rate']   = 'Tasso (percentuale)';

$lang['tax_add_edit_name'] = 'Nome Tassa';
$lang['tax_add_edit_rate'] = 'Tassa Tasso (percentuale)';
$lang['tax_edit_title']    = 'Modifica Tassa';
$lang['tax_add_title']     = 'Aggiungi Nuova Tassa';

# Ticket Statuses
$lang['new_ticket_status']       = 'Nuovo Status Ticket';
$lang['ticket_statuses']         = 'Status Ticket';
$lang['ticket_status']           = 'Status Ticket';
$lang['ticket_status_lowercase'] = 'status ticket';

$lang['ticket_statuses_dt_name']      = 'Nome Status Ticket';
$lang['no_ticket_statuses_found']     = 'Nessun status Ticket trovato';
$lang['ticket_statuses_table_total']  = 'Totali %s';
$lang['ticket_status_add_edit_name']  = 'Nome Ticket Status';
$lang['ticket_status_add_edit_color'] = 'Scegli Colore';
$lang['ticket_status_add_edit_order'] = 'Status Ordine';

# Todos
$lang['new_todo']                  = 'Nuovo DaFare';
$lang['my_todos']                  = 'Mie Voci DaFare';
$lang['todo']                      = 'Voce DaFare';
$lang['todo_lowercase']            = 'DaFare';
$lang['todo_status_changed']       = 'Status DaFare Cambiato';
$lang['todo_add_title']            = 'Aggiungi Nuovo DaFare';
$lang['add_new_todo_description']  = 'Descrizione';
$lang['no_finished_todos_found']   = 'Nessun DaFare terminato trovato';
$lang['no_unfinished_todos_found'] = 'Nessun DaFare trovato';
$lang['unfinished_todos_title']    = 'DaFare Incompleti';
$lang['finished_todos_title']      = 'Ultimi DaFare Finiti';

# Authentication
$lang['password_changed_email_subject']             = 'La tua password è stata cambiata';
$lang['password_reset_email_subject']               = 'Resetta la tua password per %s';
# Utilities
$lang['utility_activity_log']                       = 'Registro Attività';
$lang['utility_activity_log_filter_by_date']        = 'Filtra per data';
$lang['utility_activity_log_dt_description']        = 'Descrizione';
$lang['utility_activity_log_dt_date']               = 'Data';
$lang['utility_activity_log_dt_staff']              = 'Staff';
$lang['utility_calendar_new_event_title']           = 'Aggiungi nuovo evento';
$lang['utility_calendar_new_event_start_date']      = 'Data Inizio';
$lang['utility_calendar_new_event_end_date']        = 'Data Fine';
$lang['utility_calendar_new_event_make_public']     = 'Rendere Pubblico';
$lang['utility_calendar_event_added_successfully']   = 'Nuovo evento aggiunto con successo';
$lang['utility_calendar_event_deleted_successfully'] = 'Evento eliminato';
$lang['utility_calendar_new_event_placeholder']     = 'Titolo evento';


# Navigation
$lang['nav_notifications']          = 'Notifiche';
$lang['nav_my_profile']             = 'Mio Profilo';
$lang['nav_edit_profile']           = 'Modifica Profilo';
$lang['nav_logout']                 = 'Esci';
$lang['nav_no_notifications']       = 'Nessuna notifica trovata';
$lang['nav_view_all_notifications'] = 'Vedi tutte le notifiche';
$lang['nav_customizer_tooltip']     = 'Personalizza Impostazioni';
$lang['nav_notifications_tooltip']  = 'Vedi Notifiche';
## Clients
#

$lang['clients_required_field'] = 'Questo campo è richiesto';

# Footer
$lang['clients_copyright'] = 'Copyright %s';

# Announcements
$lang['clients_announcement_from']  = 'Da: ';
$lang['clients_announcement_added'] = 'Aggiunto: ';

# Contracts
$lang['clients_contracts']               = 'Contratti';
$lang['clients_contracts_dt_subject']    = 'Oggetto';
$lang['clients_contracts_dt_start_date'] = 'Data Inizio';
$lang['clients_contracts_dt_end_date']   = 'Data Fine';

# Home
$lang['clients_quick_invoice_info']                = 'Info Fattura Rapide';
$lang['clients_home_currency_select_tooltip']      = 'Devi selezionare la valuta perchè hai delle fatture con valute differenti';
# Fatture
$lang['clients_invoice_html_btn_download'] = 'Scarica';

$lang['clients_my_invoices']        = 'Le Mie Fatture';
$lang['clients_invoice_dt_number']  = 'Fattura n°';
$lang['clients_invoice_dt_date']    = 'Data';
$lang['clients_invoice_dt_duedate'] = 'Scadenza';
$lang['clients_invoice_dt_amount']  = 'Importo';
$lang['clients_invoice_dt_status']  = 'Status';

# Profile
$lang['clients_profile_heading'] = 'Profilo';

# Used for edit profile and register START
$lang['clients_firstname'] = 'Nome';
$lang['clients_lastname']  = 'Cognome';
$lang['clients_email']     = 'Indirizzo Email';
$lang['clients_company']   = 'Azienda';
$lang['clients_vat']       = 'Numero P. IVA';
$lang['clients_phone']     = 'Telefono';
$lang['clients_country']   = 'Nazione';
$lang['clients_city']      = 'Città';
$lang['clients_address']   = 'Indirizzo';
$lang['clients_zip']       = 'CAP';
$lang['clients_state']     = 'Provincia';

# Used for edit profile and register END

$lang['clients_register_password']        = 'Password';
$lang['clients_register_password_repeat'] = 'Ripeti Password';
$lang['clients_edit_profile_update_btn']  = 'Aggiorna';

$lang['clients_edit_profile_change_password_heading'] = 'Cambia Password';
$lang['clients_edit_profile_old_password']            = 'Vecchia Password';
$lang['clients_edit_profile_new_password']            = 'Nuova Password';
$lang['clients_edit_profile_new_password_repeat']     = 'Ripeti Password';
$lang['clients_edit_profile_change_password_btn']     = 'Cambia Password';
$lang['clients_profile_last_changed_password']        = 'Ultima Password cambiata %s';

# Knowledge base
$lang['clients_knowledge_base']                    = 'Informazioni di Base';
$lang['clients_knowledge_base_articles_not_found'] = 'Nessun articolo Informazione di Base trovato';
$lang['clients_knowledge_base_find_useful']        = 'Hai trovato utile quest\'articolo?';
$lang['clients_knowledge_base_find_useful_yes']    = 'Si';
$lang['clients_knowledge_base_find_useful_no']     = 'No';
$lang['clients_article_only_1_vote_today']         = 'Puoi votare una sola volta nelle 24 ore';
$lang['clients_article_voted_thanks_for_feedback'] = 'Grazie per il tuo feedback';

# Tickets
$lang['clients_ticket_open_subject']                = 'Ticket Aperto';
$lang['clients_ticket_open_departments']            = 'Reparto';
$lang['clients_tickets_heading']                    = 'Ticket di Supporto';
$lang['clients_ticket_open_service']                = 'Servizio';
$lang['clients_ticket_open_priority']               = 'Priorità';
$lang['clients_latest_tickets']                     = 'Ultimi Ticket';
$lang['clients_ticket_open_body']                   = 'Corpo Ticket';
$lang['clients_ticket_attachments']                 = 'Allegati';
$lang['clients_ticket_posted']                      = 'Pubblicato: %s';
$lang['clients_single_ticket_string']               = 'Ticket';
$lang['clients_single_ticket_replied']              = 'Risposto: %s';
$lang['clients_single_ticket_information_heading'] = 'Informazioni Ticket';

$lang['clients_tickets_dt_number']     = 'Ticket n°';
$lang['clients_tickets_dt_subject']    = 'Oggetto';
$lang['clients_tickets_dt_department'] = 'Reparto';
$lang['clients_tickets_dt_service']    = 'Servizio';
$lang['clients_tickets_dt_status']     = 'Status';
$lang['clients_tickets_dt_last_reply'] = 'Ultima Risposta';


$lang['clients_ticket_single_department']        = 'Reparto: %s';
$lang['clients_ticket_single_submitted']          = 'Inserito: %s';
$lang['clients_ticket_single_status']            = 'Status:';
$lang['clients_ticket_single_priority']          = 'Priorità: %s';
$lang['clients_ticket_single_add_reply_btn']     = 'Aggiungi Risposta';
$lang['clients_ticket_single_add_reply_heading'] = 'Aggiungi risposta a questo ticket';

# Login
$lang['clients_login_heading_no_register'] = 'Per favore, accedi';
$lang['clients_login_heading_register']    = 'Per favore, accedi o registrati';
$lang['clients_login_email']               = 'Indirizzo Email';
$lang['clients_login_password']            = 'Password';
$lang['clients_login_remember']            = 'Ricordami';
$lang['clients_login_login_string']        = 'Accedi';

# Register
$lang['clients_register_string']  = 'Registrazione';
$lang['clients_register_heading'] = 'Registrazione';

# Navigation
$lang['clients_nav_login']     = 'Accedi';
$lang['clients_nav_register']  = 'Registrazione';
$lang['clients_nav_invoices']  = 'Fatture';
$lang['clients_nav_contracts'] = 'Contratti';
$lang['clients_nav_kb']        = 'Informazioni di Base';
$lang['clients_nav_profile']   = 'Profilo';
$lang['clients_nav_logout']    = 'Esci';

# Datatables
$lang['clients_dt_paginate_first']    = 'Primo';
$lang['clients_dt_paginate_last']     = 'Ultimo';
$lang['clients_dt_paginate_next']     = 'Prossimo';
$lang['clients_dt_paginate_previous'] = 'Precedente';
$lang['clients_dt_empty_table']       = 'Nessun {0} trovato';
$lang['clients_dt_search']            = 'Cerca:';
$lang['clients_dt_zero_records']      = 'Nessuna corrispondenza trovata';
$lang['clients_dt_loading_records']   = 'Caricamento...';
$lang['clients_dt_length_menu']       = 'Mostra _MENU_ ';
$lang['clients_dt_info_filtered']     = '(filtrato da _MAX_ totali {0})';
$lang['clients_dt_info_empty']        = 'Stai vedendo 0 a 0 di 0 {0}';
$lang['clients_dt_info']              = 'Stai vedendo _START_ a _END_ di _TOTAL_ {0}';
$lang['clients_dt_empty_table']       = 'Nessun {0} trovato';
$lang['clients_dt_sort_ascending']    = 'Attivare per ordinare la colonna in ordine ascendente';
$lang['clients_dt_sort_descending']   = 'Attivare per ordinare la colonna in ordine discendente';


# Version 1.0.1
# Admin
#
# Payments
$lang['payment_receipt']                               = 'Ricevuta Pagamento';
$lang['payment_for_string']                            = 'Pagamento Per';
$lang['payment_date']                                  = 'Data Pagamento:';
$lang['payment_view_mode']                             = 'Metodo Pagamento:';
$lang['payment_total_amount']                          = 'Totale Importo';
$lang['payment_table_invoice_number']                  = 'Numero Fattura';
$lang['payment_table_invoice_date']                    = 'Data Fattura';
$lang['payment_table_invoice_amount_total']            = 'Importo Fattura';
$lang['payment_table_payment_amount_total']            = 'Pagamento Importo';
$lang['payments_table_transaction_id']                 = 'ID Transazione: %s';
$lang['payment_getaway_token_not_found']               = 'Token Non Trovato';
$lang['online_payment_recorded_success']               = 'Pagamento registrato con successo';
$lang['online_payment_recorded_success_fail_database'] = 'Il pagamento è stato registrato con successo ma non è stato possibile inserire la oce nel database, contattare l\'amministratore';

# Leads
$lang['lead_convert_to_client']                   = 'Converti in Cliente';
$lang['lead_convert_to_email']                    = 'Email';
$lang['lead_convert_to_client_firstname']         = 'Nome';
$lang['lead_convert_to_client_lastname']          = 'Cognome';
$lang['lead_email_already_exists']                = 'L\'email del potenziale cliente è già presente tra i dati dei clienti ';
$lang['lead_to_client_base_converted_success']    = 'Conversione da potenziale cliente a cliente avvenuta con successo';
$lang['lead_have_client_profile']                 = 'Questo potenziale cliente ha un profilo cliente.';
$lang['lead_converted_edit_client_profile']       = 'Modifica Profilo';

# Fatture
$lang['view_invoice_as_customer_tooltip']                                     = 'Vedi Fattura come Cliente';
$lang['invoice_add_edit_recurring']                                           = 'Fattura Ricorrente?';
$lang['invoice_add_edit_recurring_no']                                        = 'No';
$lang['invoice_add_edit_recurring_month']                                     = 'Ogni %s mese';
$lang['invoice_add_edit_recurring_months']                                    = 'Ogni %s mesi';
$lang['invoices_list_all']                                                    = 'Tutte';
$lang['invoices_list_not_have_payment']                                       = 'Fatture senza cronologia pagamenti';
$lang['invoices_list_recurring']                                               = 'Fatture Ricorrenti';
$lang['invoices_list_made_payment_by']                                        = 'Pagamento Eseguito da %s';
$lang['invoices_create_invoice_from_recurring_only_on_paid_invoices']         = 'Crea una nuova fattura dalla principale fattura ricorrente solo se è con lo status Pagata';
$lang['invoices_create_invoice_from_recurring_only_on_paid_invoices_tooltip'] = 'Creare una nuova fattura dalla principale fattura ricorrente solo se la fattura principale è stata pagata? Se questo campo viene contrassegnato come No e la fattura ricorrente non presenta lo status Pagata, la nuova fattura non sarà creata.';
$lang['send_renewed_invoice_from_recurring_to_email']                         = 'Invia automaticamente la fattura ricorrente al cliente';
$lang['view_invoice_pdf_link_pay']                                            = 'Paga Fattura';

# Payment modes
$lang['payment_mode_add_edit_description']         = 'Conto Bancario / Descrizione';
$lang['payment_mode_add_edit_description_tooltip'] = 'Qui puoi impostare le informazioni del tuo conto bancario. Saranno mostrate come HTML nella fattura.';
$lang['payment_modes_dt_description']              = 'Conto Bancario / Descrizione';
$lang['payment_modes_add_edit_announcement']       = 'Nota: I metodi di pagamento elencati qui sotto sono metodi offline. I metodi di pagamento online possono essere configurati in Impostazioni-> Portali di Pagamento';
$lang['payment_mode_add_edit_active']              = 'Attivo';
$lang['payment_modes_dt_active']                   = 'Attivo';

# Contracts
$lang['contract_not_found'] = 'Contratto non trovato. Potrebbe essere stato cancellato, controllare il registro attività';

# Settings
$lang['setting_bar_heading']                 = 'Impostazioni';
$lang['settings_group_online_payment_modes'] = 'Portali di Pagamento';
$lang['settings_paymentmethod_mode_label']   = 'Etichetta';
$lang['settings_paymentmethod_active']       = 'Attivo';
$lang['settings_paymentmethod_currencies']   = 'Virgola Separazione Valuta';
$lang['settings_paymentmethod_testing_mode'] = 'Abilita Modalità Test';

$lang['settings_paymentmethod_paypal_username']  = 'Paypal API Nome Utente';
$lang['settings_paymentmethod_paypal_password']  = 'Paypal API Password';
$lang['settings_paymentmethod_paypal_signature'] = 'API Firma';

$lang['settings_paymentmethod_stripe_api_secret_key']      = 'Stripe API Chiave Segreta';
$lang['settings_paymentmethod_stripe_api_publishable_key'] = 'Stripe Chiave Pubblicabile';
$lang['settings_limit_top_search_bar_results']             = 'Limita i Risultati della Barra di Ricerca in Alto a';

# Quick Actions
$lang['qa_create_invoice']  = 'Crea Fattura';
$lang['qa_create_task']     = 'Crea Attività';
$lang['qa_create_client']   = 'Crea Cliente';
$lang['qa_create_contract'] = 'Crea Contratto';
$lang['qa_create_kba']      = 'Crea Articolo Informazione di Base';
$lang['qa_create_survey']   = 'Crea Sondaggio';
$lang['qa_create_ticket']   = 'Apri Ticket';
$lang['qa_create_staff']    = 'Crea Membro Staff';

## Clients
$lang['client_phonenumber'] = 'Telefono';

# Main Clients
$lang['clients_register']                          = 'Registrazione';
$lang['clients_profile_updated']                   = 'Il tuo profilo è stato aggiornato';
$lang['clients_successfully_registered']           = 'Thank your for registering';
$lang['clients_account_created_but_not_logged_in'] = 'Il tuo account è stato creato ma non hai effettuato automaticamente l\'accesso al nostro sistema. Per favore, prova ad accedere.';
# Tickets
$lang['clients_tickets_heading']                   = 'Ticket di Supporto';

# Payments
// Uses on stripe page
$lang['payment_for_invoice'] = 'Pagamento per Fattura';
$lang['payment_total']       = 'Totale: %s';

# Fattura
$lang['invoice_html_online_payment']             = 'Pagamento Online';
$lang['invoice_html_online_payment_button_text'] = 'Paga Ora';
$lang['invoice_html_payment_modes_not_selected'] = 'Si prega di Selezionare un Metodo di Pagamento';
$lang['invoice_html_amount_blank']               = 'Importo totale non può essere vuoto o zero';
$lang['invoice_html_offline_payment']            = 'Pagamento Offline';
$lang['invoice_html_amount']                     = 'Importo';


# Version 1.0.2
# Admin
#
# DataTables
$lang['dt_button_column_visibility']  = 'Visibilità';
$lang['dt_button_reload']             = 'Ricarica';
$lang['dt_button_excel']              = 'Excel';
$lang['dt_button_csv']                = 'CSV';
$lang['dt_button_pdf']                = 'PDF';
$lang['dt_button_print']              = 'Stampa';
$lang['is_not_active_export']         = 'No';
$lang['is_active_export']             = 'Si';

# Fattura
$lang['invoice_add_edit_advanced_options']               = 'Opzioni Avanzate';
$lang['invoice_add_edit_allowed_payment_modes']          = 'Metodi di pagamenti abilitati per questa fattura';
$lang['invoice_add_edit_recurring_invoices_from_invoice'] = 'Fatture ricorrenti da questa fattura';
$lang['invoice_add_edit_no_payment_modes_found']         = 'Nessun metodo di pagamento trovato.';
$lang['invoice_html_total_pay']                          = 'Totale: %s';

# Email templates
$lang['email_templates_table_heading_name'] = 'Nome Modello';
# General
$lang['discount_type']                      = 'Tipo di Sconto';
$lang['discount_type_after_tax']            = 'Dopo Tassa';
$lang['discount_type_before_tax']           = 'Prima Tassa';
$lang['terms_and_conditions']               = 'Termini & Condizioni';
$lang['reference_no']                       = 'Riferimento n°';
$lang['no_discount']                        = 'Nessuno sconto';
$lang['view_stats_tooltip']                 = 'Vedi Statistiche Veloci';
# Clients
$lang['zip_from_date']                      = 'Data Da:';
$lang['zip_to_date']                        = 'Data A:';
$lang['client_zip_payments']                = 'ZIP Pagamenti';
$lang['client_zip_invoices']                = 'ZIP Fatture';
$lang['client_zip_estimates']               = 'ZIP Preventivi';
$lang['client_zip_status']                  = 'Status';
$lang['client_zip_status_all']              = 'Tutto';
$lang['client_zip_payment_modes']           = 'Pagamento eseguito da';
$lang['client_zip_no_data_found']           = 'Nessun %s trovato';

# Payments
$lang['payment_mode']         = 'Metodo di Pagamento';
$lang['payment_view_heading'] = 'Pagamento';

# Settings
$lang['settings_allow_payment_amount_to_be_modified']               = 'Consentire al cliente di modificare l\'importo da pagare (per i pagamenti online)';
$lang['settings_survey_send_emails_per_cron_run']                   = 'Quante email inviare all\'ora';
$lang['settings_survey_send_emails_per_cron_run_tooltip']           = 'Questa opzione viene utilizzata per l\'invio dei Sondaggi. Il cron Sondaggio viene eseguito ogni 5 minuti. Quindi è possibile impostare quante email inviare ogni 5 minuti';
$lang['settings_delete_only_on_last_invoice']                       = 'Eliminazione la fattura consentito solo su ultima fattura';
$lang['settings_sales_estimate_prefix']                             = 'Prefisso Numero Preventivo';
$lang['settings_sales_next_estimate_number']                        = 'Numero Prossimo Preventivo';
$lang['settings_sales_next_estimate_number_tooltip']                = 'Imposta questo campo a 1 se vuoi iniziare dall\'inizio';
$lang['settings_sales_decrement_estimate_number_on_delete']         = 'All\'eliminazione, decrementare il numero del preventivo';
$lang['settings_sales_decrement_estimate_number_on_delete_tooltip'] = 'Vuoi diminuire il numero di preventivo quando l\'ultimo preventivo viene eliminato? Es. Se questa opzione viene impostata su Si e prima che il preventivo venga eliminato, il numero del prossimo preventivo è 15, il prossimo numero del preventivo verrà decrementato a 14. Se impostato a NO il numero rimarrà a 15.';
$lang['settings_sales_estimate_number_format']                      = 'Formato Numero Preventivo';
$lang['settings_sales_estimate_number_format_year_based']           = 'Basato su Anno';
$lang['settings_sales_estimate_number_format_number_based']         = 'Basato su Numero (000001)';
$lang['settings_delete_only_on_last_estimate']                      = 'Eliminare preventivo consentito solo su ultima fattura';
$lang['settings_cron_invoice_heading']                              = 'Fattura';
$lang['settings_send_test_email_heading']                           = 'Invia Test Email';
$lang['settings_send_test_email_subheading']                        = 'Invia email di test per accertarsi che le tue impostazioni SMTP siano corrette.';
$lang['settings_send_test_email_string']                            = 'Indirizzo Email';
$lang['settings_smtp_settings_heading']                             = 'Impostazioni SMTP';
$lang['settings_smtp_settings_subheading']                          = 'Imposta email principale';
$lang['settings_sales_heading_general']                             = 'Generali';
$lang['settings_sales_heading_invoice']                             = 'Fatture';
$lang['settings_sales_heading_estimates']                           = 'Preventivi';
$lang['settings_sales_heading_company']                             = 'Azienda';
$lang['settings_sales_cron_invoice_heading']                        = 'Fattura';

# Compiti
$lang['tasks_dt_datestart'] = 'Data Inizio';
$lang['tasks_dt_priority']  = 'Priorità';

# Fattura General
$lang['invoice_discount'] = 'Sconto';

# Settings
$lang['settings_rtl_support_admin']                                   = 'RTL Area Ammin (Da Destra a Sinistra)';
$lang['settings_rtl_support_client']                                  = 'RTL Area Cliente (Da Destra a Sinistra)';
$lang['acs_language_editor']                                          = 'Editor Lingua';
$lang['settings_estimate_auto_convert_to_invoice_on_client_accept']   = 'Auto convertire il preventivo a fattura dopo accettazione del cliente';
$lang['settings_exclude_estimate_from_client_area_with_draft_status'] = 'Escludere preventivi con lo status di Bozza dall\'area cliente.';

# Months
$lang['January']   = 'Gennaio';
$lang['February']  = 'Febbraio';
$lang['March']     = 'Marzo';
$lang['April']     = 'Aprile';
$lang['May']       = 'Maggio';
$lang['June']      = 'Giugno';
$lang['July']      = 'Luglio';
$lang['August']    = 'Agosto';
$lang['September'] = 'Settembre';
$lang['October']   = 'Ottobre';
$lang['November']  = 'Novembre';
$lang['December']  = 'Dicembre';

# Time ago function translate
$lang['time_ago_just_now']  = 'Proprio adesso';
$lang['time_ago_minute']    = 'un minuto fa';
$lang['time_ago_minutes']   = '%s minuti fa';
$lang['time_ago_hour']      = 'un ora fa';
$lang['time_ago_hours']     = '%s ore fa';
$lang['time_ago_yesterday'] = 'ieri';
$lang['time_ago_days']      = '%s giorni fa';
$lang['time_ago_week']      = 'una settimana fa';
$lang['time_ago_weeks']     = '%s settimane fa';
$lang['time_ago_month']     = 'un mese fa';
$lang['time_ago_months']    = '%s mesi fa';
$lang['time_ago_year']      = 'un anno fa';
$lang['time_ago_years']     = '%s anni fa';


# Stime
$lang['estimates']                          = 'Preventivi';
$lang['estimate']                           = 'Preventivo';
$lang['estimate_lowercase']                 = 'preventivo';
$lang['create_new_estimate']                = 'Crea Nuovo Preventivo';
$lang['view_estimate']                      = 'Vedi preventivo';
$lang['estimate_sent_to_client_success']    = 'Il preventivo è stato inviato con successo al cliente.';
$lang['estimate_sent_to_client_fail']       = 'Problema durante l\'invio del preventivo';
$lang['estimate_reminder_send_problem']     = 'Problema nell\'invio del promemoria preventivo scaduto';
$lang['estimate_details']                   = 'Dettagli Preventivo';
$lang['estimate_view']                      = 'Vedi preventivo';
$lang['estimate_select_customer']           = 'Cliente';
$lang['estimate_add_edit_number']           = 'Numero Preventivo';
$lang['estimate_add_edit_date']             = 'Data Preventivo';
$lang['estimate_add_edit_expirydate']       = 'Data Scadenza';
$lang['estimate_add_edit_currency']         = 'Valuta';
$lang['estimate_add_edit_client_note']      = 'Nota Cliente';
$lang['estimate_add_edit_admin_note']       = 'Nota Ammin';
$lang['estimate_add_edit_new_item']         = 'Nuova Voce';
$lang['estimate_add_edit_search_item']      = 'Cerca Voci';
$lang['estimates_toggle_table_tooltip']     = 'Vedi Tabella Completa';
$lang['estimate_add_edit_advanced_options'] = 'Opzioni Avanzate';
$lang['estimate_vat']                       = 'P. IVA';
$lang['estimate_to']                        = 'A';
$lang['estimates_list_all']                 = 'Tutti';

$lang['estimate_invoiced_date']                  = 'Preventivo Fatturato il %s';
$lang['edit_estimate_tooltip']                   = 'Modifica Preventivo';
$lang['delete_estimate_tooltip']                 = 'Elimina Preventivo';
$lang['estimate_sent_to_email_tooltip']          = 'Invia per Email';
$lang['estimate_already_send_to_client_tooltip'] = 'Questo preventivo è già stato inviato al cliente %s';
$lang['estimate_view_activity_tooltip']          = 'Registro Attività';

$lang['estimate_send_to_client_modal_heading']    = 'Invia questo preventivo al cliente';
$lang['estimate_send_to_client_attach_pdf']       = 'Allega preventivo in PDF';
$lang['estimate_send_to_client_preview_template'] = 'Anteprima Modello Email';

$lang['estimate_dt_table_heading_number']     = 'Preventivo n°';
$lang['estimate_dt_table_heading_date']       = 'Data';
$lang['estimate_dt_table_heading_client']     = 'Cliente';
$lang['estimate_dt_table_heading_expirydate'] = 'Scadenza';
$lang['estimate_dt_table_heading_amount']     = 'Importo';
$lang['estimate_dt_table_heading_status']     = 'Status';

$lang['estimate_email_link_text']    = 'Vedi Preventivo';
$lang['estimate_convert_to_invoice'] = 'Converti a Fattura';
# Home
$lang['home_unfinished_tasks']       = 'Attività Non Terminate';

# Clients
$lang['client_estimates_tab'] = 'Preventivi';
$lang['client_payments_tab']  = 'Pagamenti';


# Stima General
$lang['estimate_pdf_heading']            = 'ORDINE';
$lang['estimate_table_item_heading']     = 'Descrizione';
$lang['estimate_table_quantity_heading'] = 'Qtà';
$lang['estimate_table_rate_heading']     = 'Prezzo';
$lang['estimate_table_tax_heading']      = 'Tassa';
$lang['estimate_table_amount_heading']   = 'Importo';
$lang['estimate_subtotal']               = 'Imponibile';
$lang['estimate_adjustment']             = 'Adattamento';
$lang['estimate_discount']               = 'Sconto';
$lang['estimate_total']                  = 'Totale';
$lang['estimate_to']                     = 'Spett.';
$lang['estimate_data_date']              = 'Data Documento';
$lang['estimate_data_expiry_date']       = 'Data Scadenza';
$lang['estimate_note']                   = 'Nota:';
$lang['estimate_status_draft']           = 'Bozza';
$lang['estimate_status_sent']            = 'Inviato';
$lang['estimate_status_declined']        = 'Rifiutato';
$lang['estimate_status_accepted']        = 'Accettato';
$lang['estimate_status_expired']         = 'Scaduto';
$lang['estimate_note']                   = 'Nota:';



# Quick create
$lang['qa_create_estimate'] = 'Crea Ordine';
$lang['qa_create_lead']     = 'Crea Potenziale Cliente';


## Clients
$lang['clients_estimate_dt_number']             = 'Preventivo n°';
$lang['clients_estimate_dt_date']               = 'Data';
$lang['clients_estimate_dt_duedate']            = 'Data Scadenza';
$lang['clients_estimate_dt_amount']             = 'Importo';
$lang['clients_estimate_dt_status']             = 'Status';
$lang['clients_nav_estimates']                  = 'Preventivi';
$lang['clients_decline_estimate']               = 'Rifiuto';
$lang['clients_accept_estimate']                = 'Accetto';
$lang['clients_my_estimates']                   = 'Preventivi';
$lang['clients_estimate_invoiced_successfully']  = 'Preventivo accettato. Ecco la fattura per questo preventivo.';
$lang['clients_estimate_accepted_not_invoiced'] = 'Grazie per aver accettato questo ordine!';
$lang['clients_estimate_declined']              = 'Preventivo rifiutato. Puoi accettare il preventivo in ogni momento prima della data di scadenza.';
$lang['clients_estimate_failed_action']         = 'Impossibile intervenire su questo reventivo';
$lang['client_add_edit_profile']                = 'Profilo';

# Version 1.0.3

# Custom Fields
$lang['custom_field']                          = 'Campo Personalizzato';
$lang['custom_field_lowercase']                = 'campo personalizzato';
$lang['custom_fields']                         = 'Campi Personalizzati';
$lang['custom_fields_lowercase']               = 'campi personalizzati';
$lang['new_custom_field']                      = 'Nuovo Campo Personalizzato';
$lang['custom_field_name']                     = 'Nome Campo';
$lang['custom_field_add_edit_type']            = 'Tipo';
$lang['custom_field_add_edit_belongs_top']     = 'Campo Appartenente a';
$lang['custom_field_add_edit_options']         = 'Opzioni';
$lang['custom_field_add_edit_options_tooltip'] = 'Utilizzare solo per Selezionare i tipi. Compilare il campo di separando le opzioni dalla virgola. Es. mela, arancia, banana';
$lang['custom_field_add_edit_order']           = 'Ordine';

$lang['custom_field_dt_field_to']       = 'Appartiene a';
$lang['custom_field_dt_field_name']     = 'Nome';
$lang['custom_field_dt_field_type']     = 'Tipo';
$lang['custom_field_add_edit_active']   = 'Attivo';
$lang['custom_field_add_edit_disabled'] = 'Disabilitato';

# Ticket replies
$lang['ticket_reply']           = 'Risposta Ticket';
$lang['ticket_reply_lowercase'] = 'risposta ticket';

# Admin Customizer Sidebar
$lang['asc_custom_fields'] = 'Campi Personalizzati';

# Contracts
$lang['contract_types']          = 'Tipi di Contratti';
$lang['contract_type']           = 'Tipo di Contratto';
$lang['new_contract_type']       = 'Nuovo Tipo Contratto';
$lang['contract_type_lowercase'] = 'contratto';
$lang['contract_type_name']      = 'Nome';

$lang['contract_types_list_name'] = 'Tipo Contratto';

# Customizer Menu
$lang['acs_contracts']      = 'Contratti';
$lang['acs_contract_types'] = 'Tipi Contratti';

# Version 1.0.4
# Fattura Items
$lang['invoice_item_long_description']     = 'Descrizione Lunga';
# Customers
$lang['client_delete_invoices_warning']    = 'Questo cliente ha fatture e preventivi sul suo account. Non puoi eliminare questo cliente. In futuro, passare prima tutte le fatture a un altro cliente e quindi eliminare.';
$lang['clients_list_phone']                = 'Telefono';
$lang['client_expenses_tab']               = 'Spese';
$lang['customers_summary']                 = 'Riepilogo Clienti';
$lang['customers_summary_active']          = 'Attivo';
$lang['customers_summary_inactive']        = 'Inativo';
$lang['customers_summary_logged_in_today'] = 'Accesso Effettuato Oggi';

# Authentication
$lang['admin_auth_forgot_password_email']             = 'Indirizzo Email';
$lang['admin_auth_forgot_password_heading']           = 'Password Dimenticata';
$lang['admin_auth_login_heading']                     = 'Accedi';
$lang['admin_auth_login_email']                       = 'Indirizzo Email';
$lang['admin_auth_login_password']                    = 'Password';
$lang['admin_auth_login_remember_me']                 = 'Ricordami';
$lang['admin_auth_login_button']                      = 'Accesso';
$lang['admin_auth_login_fp']                          = 'Password Dimenticata?';
$lang['admin_auth_reset_password_heading']            = 'Reimposta Password';
$lang['admin_auth_reset_password']                    = 'Password';
$lang['admin_auth_reset_password_repeat']             = 'Ripeti Password';
$lang['admin_auth_invalid_email_or_password']         = 'Email o password non valida';
$lang['admin_auth_inactive_account']                  = 'Account Inattivo';
# Calender
$lang['calendar_estimate']                            = 'Preventivo';
$lang['calendar_invoice']                             = 'Fattura';
$lang['calendar_contract']                            = 'Contratto';
$lang['calendar_customer_reminder']                     = 'Promemoria Cliente';
$lang['calendar_event']                               = 'Evento';
$lang['calendar_task']                                = 'Attività';
# Leads
$lang['lead_edit_delete_tooltip']                     = 'Elimina Potenziale Cliente';
$lang['lead_attachments']                             = 'Allegati';
# Admin Customizer Sidebar
$lang['acs_finance']                                  = 'Finanza';
# Settings
$lang['settings_show_sale_agent_on_invoices']         = 'Mostra Agente di Vendita su Fattura';
$lang['settings_show_sale_agent_on_estimates']        = 'Mostra Agente di Vendita su Preventivo';
$lang['settings_predefined_predefined_term']          = 'Termini & Condizioni Predefinite';
$lang['settings_predefined_clientnote']               = 'Nota Cliente Predefinita';
$lang['settings_custom_pdf_logo_image_url']           = 'URL Logo Personalizzato della Ditta per PDF (JPG - 210x60px)';
$lang['settings_custom_pdf_logo_image_url_tooltip']   = 'Potrebbero verificarsi problemi con le immagini PNG con trasparenza che vengono gestite in modo diverso a seconda di php-imagick o versione php-gd utilizzata. Provare ad aggiornare php-imagick e disabilitare php-gd. Se si lascia vuoto questo campo verrà utilizzato il logo caricato.';

# General
$lang['sale_agent_string']               = 'Agente di Vendita';
$lang['amount_display_in_base_currency'] = 'L\'importo è mostrato nella tua valuta di base';

# Leads
$lang['leads_summary']                                         = 'Riepilogo Potenziali Clienti';

# Contracts
$lang['contract_value']                 = 'Valore Contratto';
$lang['contract_trash']                 = 'Cestino';
$lang['contracts_view_trash']           = 'Vedi Cestino';
$lang['contracts_view_all']             = 'Tutti';
$lang['contracts_view_exclude_trashed'] = 'Escludi Contratti Cestinati';
$lang['contract_value_tooltip']         = 'Aggiungi il valore del contratto. Il valore sarà mostrato nella tua valuta di base.';
$lang['contract_trash_tooltip']         = 'Se hai cestinato il contratto, non sarà visibile lato cliente, non sarà incluso nel grafico e in altre statistiche e per impostazione predefinita nemmeno quando vedrai la lista di tutti i contratti.';

$lang['contract_renew_heading']               = 'Rinnovo Contratto';
$lang['contract_summary_heading']             = 'Riepilogo Contratto';
$lang['contract_summary_expired']             = 'Scaduto';
$lang['contract_summary_active']              = 'Attivo';
$lang['contract_summary_about_to_expire']     = 'In Scadenza';
$lang['contract_summary_recently_added']      = 'Aggiunto Recentemente';
$lang['contract_summary_trash']               = 'Cestino';
$lang['contract_summary_by_type']             = 'Tipi di Contratti';
$lang['contract_summary_by_type_value']       = 'Valore Contratti per Tipo';
$lang['contract_renewed_successfully']         = 'Contratto rinnovato con successo';
$lang['contract_renewed_fail']                = 'Problema nel rinnovo del contratto. Contattare l\'amministratore';
$lang['no_contract_renewals_found']           = 'Non sono stati trovati rinnovi per questo contratto';
$lang['no_contract_renewals_history_heading'] = 'Storico Rinnovi Contratto';
$lang['contract_renewed_by']                  = '%s ha rinnovato questo contratto';
$lang['contract_renewal_deleted']             = 'Rinnovo eliminato con successo';
$lang['contract_renewal_delete_fail']         = 'L\'eliminazione del rinnovo del contratto è fallita. Contattare l\'amministratore';

$lang['contract_renewal_new_value'] = 'Nuovo Valore Contratto: %s';
$lang['contract_renewal_old_value'] = 'Vecchio Valore Contratto: %s';

$lang['contract_renewal_new_start_date'] = 'Nuova Data Inizio: %s';
$lang['contract_renewal_old_start_date'] = 'La Vecchia Data di Inizio Contratto era: %s';

$lang['contract_renewal_new_end_date'] = 'Nuova Scadenza: %s';
$lang['contract_renewal_old_end_date'] = 'La Vecchia Scadenza del Contratto era: %s';
$lang['contract_attachment']           = 'Allegato';
$lang['contract_attachment_lowercase'] = 'allegato';

# Admin Aside Menu
$lang['als_goals_tracking']     = 'Monitoraggio obiettivi';
$lang['als_expenses']           = 'Spese';
$lang['als_reports_expenses']   = 'Spese';
$lang['als_expenses_vs_income'] = 'Spese ed Entrate';

# Fatture
$lang['invoice_attach_file']           = 'File Allegato';
$lang['invoice_mark_as_sent']          = 'Contrassegna come Inviato';
$lang['invoice_marked_as_sent']        = 'Contrassegna la fattura come inviata con successo';
$lang['invoice_marked_as_sent_failed'] = 'Contrassegno fattura come inviata fallito';

# Quick Actions
$lang['qa_new_goal']    = 'Imposta Nuovo Obiettivo';
$lang['qa_new_expense'] = 'Registra Spesa';

# Goals Tracking
$lang['goals']                                         = 'Obiettivi';
$lang['goal']                                          = 'Obiettivo';
$lang['goals_tracking']                                = 'Monitoraggio Obiettivi';
$lang['new_goal']                                      = 'Nuovo Obiettivo';
$lang['goal_lowercase']                                = 'obiettivo';
$lang['goal_start_date']                               = 'Data Inizio';
$lang['goal_end_date']                                 = 'Data Fine';
$lang['goal_subject']                                  = 'Oggetto';
$lang['goal_description']                              = 'Descrizione';
$lang['goal_type']                                     = 'Tipo di Obiettivo';
$lang['goal_achievement']                              = 'Raggiungimento';
$lang['goal_contract_type']                            = 'Tipo Contratto';
$lang['goal_notify_when_fail']                         = 'Notifica i membri dello staff quando non si è riusciti a raggiungere l\'obiettivo';
$lang['goal_notify_when_achieve']                      = 'Notifica i membri dello Staff quando l\'obiettivo viene raggiunto';
$lang['goal_progress']                                 = 'Progresso';
$lang['goal_total']                                    = 'Totale: %s';
$lang['goal_result_heading']                           = 'Progresso Obiettivo';
$lang['goal_income_shown_in_base_currency']            = 'Il Totale Entrata è mostato nella tua valuta attuale';
$lang['goal_notify_when_end_date_arrives']             = 'I membri dello staff ricevono la notifica quando arriva la data di scadenza.';
$lang['goal_staff_members_notified_about_achievement'] = 'I membri dello staff vengono avvisati su questo raggiungimento degli obiettivi';
$lang['goal_staff_members_notified_about_failure']     = 'I membri dello Staff vengono avvisati sul fallimento';
$lang['goal_notify_staff_manually']                     = 'Notifica Manuale Membri Staff';
$lang['goal_notify_staff_notified_manually_success']    = 'I membri dello staff vengono avvisati del risultato di questo  obiettivo';
$lang['goal_notify_staff_notified_manually_fail']       = 'Mancata notifica ai membri dello staff per il risultato di questo obiettivo';

$lang['goal_achieved'] = 'Raggiunto';
$lang['goal_failed']   = 'Fallito';
$lang['goal_close']    = 'Molto Vicino';

$lang['goal_type_total_income']                                         = 'Raggiungere Totali Entrate';
$lang['goal_type_convert_leads']                                        = 'Convertire X Potenziali Clienti';
$lang['goal_type_increase_customers_without_leads_conversions']         = 'Incrementare Numero Clienti';
$lang['goal_type_increase_customers_without_leads_conversions_subtext'] = 'Conversioni di Potenziali Clienti Esclusa';

$lang['goal_type_increase_customers_with_leads_conversions']         = 'Incrementare Numero Clienti';
$lang['goal_type_increase_customers_with_leads_conversions_subtext'] = 'Conversione di Potenziali Clienti è Inclusa';
$lang['goal_type_make_contracts_by_type_calc_database']              = 'Fare Contratti Per Tipo';
$lang['goal_type_make_contracts_by_type_calc_database_subtext']      = 'È calcolata dalla data aggiunta al database';
$lang['goal_type_make_contracts_by_type_calc_date']                  = 'Fare Contratti Per Tipo';
$lang['goal_type_make_contracts_by_type_calc_date_subtext']          = 'È calcolata dalla data aggiunta al database';
$lang['goal_type_total_estimates_converted']                         = 'X Conversioni Preventivi ';
$lang['goal_type_total_estimates_converted_subtext']                 = 'Saranno presi solo preventivi che saranno convertiti in fatture';
$lang['goal_type_income_subtext']                                    = 'L\'entrate saranno calcolate nella valuta di base (non convertite)';
# Payments
$lang['payment_transaction_id']                                      = 'ID transazione';
# Settings Menu
$lang['acs_expenses']                                                = 'Spese';
$lang['acs_expense_categories']                                      = 'Categorie Spese';
# Expenses
$lang['expense_category']                                            = 'Categoria Spesa';
$lang['expense_category_lowercase']                                  = 'categoria spesa';
$lang['new_expense']                                                 = 'Registro Spesa';
$lang['expense_add_edit_name']                                       = 'Nome Categoria';
$lang['expense_add_edit_description']                                = 'Descrizione Categoria';
$lang['expense_categories']                                          = 'Categorie Spese';
$lang['new_expense_category']                                        = 'Nuova Categoria';
$lang['dt_expense_description']                                      = 'Descrizione';
$lang['expense']                                                     = 'Spesa';
$lang['expenses']                                                    = 'Spese';
$lang['expense_lowercase']                                           = 'spesa';
$lang['expense_add_edit_tax']                                        = 'Tassa';
$lang['expense_add_edit_customer']                                   = 'Cliente';
$lang['expense_add_edit_currency']                                   = 'Valuta';
$lang['expense_add_edit_note']                                       = 'Nota';
$lang['expense_add_edit_date']                                       = 'Data Spesa';
$lang['expense_add_edit_amount']                                     = 'Importo';
$lang['expense_add_edit_billable']                                   = 'Fatturabile';
$lang['expense_add_edit_attach_receipt']                             = 'Allega Ricevuta';
$lang['expense_add_edit_reference_no']                               = 'Riferimento n°';
$lang['expense_receipt']                                             = 'Ricevuta Spesa';
$lang['expense_receipt_lowercase']                                   = 'ricevuta spesa';
$lang['expense_dt_table_heading_category']                           = 'Categoria';
$lang['expense_dt_table_heading_amount']                             = 'Importo';
$lang['expense_dt_table_heading_date']                               = 'Data';
$lang['expense_dt_table_heading_reference_no']                       = 'Riferimento n°';
$lang['expense_dt_table_heading_customer']                           = 'Cliente';
$lang['expense_dt_table_heading_payment_mode']                       = 'Metodo Pagamento';
$lang['expense_converted_to_invoice']                                = 'Spesa convertita con successo in fattura';
$lang['expense_converted_to_invoice_fail']                           = 'Impossibile convertire questa spesa a fattura. Controllare la registrazione degli errori.';
$lang['expense_copy_success']                                        = 'La spesa è stata copiata con successo.';
$lang['expense_copy_fail']                                           = 'La copia della spesa è fallita. Si prega di verificare i campi richiesti e riprovare.';
$lang['expenses_list_all']                                           = 'Tutto';
$lang['expenses_list_billable']                                      = 'Fatturabile';
$lang['expenses_list_non_billable']                                  = 'Non Fatturabile';
$lang['expenses_list_invoiced']                                      = 'Fatturato';
$lang['expenses_list_unbilled']                                      = 'Non Fatturabile';
$lang['expenses_list_recurring']                                     = 'Ricorrente';
$lang['expense_invoice_delete_not_allowed']                          = 'Non puoi eliminare questa spesa. La spesa è già stata fatturata.';
$lang['expense_convert_to_invoice']                                  = 'Converti In Fattura';
$lang['expense_edit']                                                = 'Modifica Spesa';
$lang['expense_delete']                                              = 'Elimina';
$lang['expense_copy']                                                = 'Copia';
$lang['expense_invoice_not_created']                                 = 'Fattura Non Creata';
$lang['expense_billed']                                              = 'Fatturata';
$lang['expense_not_billed']                                          = 'Non Fatturata';
$lang['expense_customer']                                            = 'Cliente';
$lang['expense_note']                                                = 'Nota:';
$lang['expense_date']                                                = 'Data:';
$lang['expense_ref_noe']                                             = 'Rif n°:';
$lang['expense_tax']                                                 = 'Tassa:';
$lang['expense_amount']                                              = 'Importo:';
$lang['expense_recurring_indicator']                                 = 'Ricorrente';
$lang['expense_already_invoiced']                                    = 'Questa spesa è già fatturata';
$lang['expense_recurring_auto_create_invoice']                       = 'Auto Creare Fattura';
$lang['expense_recurring_send_custom_on_renew']                      = 'Inviare la fattura via email al cliente quando si ripete la spesa';
$lang['expense_recurring_autocreate_invoice_tooltip']                = 'Se questa opzione è selezionata la fattura per il cliente verrà automaticamente creata quando la spesa sarà rinnovata.';
$lang['report_expenses_full']                                        = 'Rapporto Completo';
$lang['expenses_yearly_by_categories']                               = 'Spese Annuali Per Categorie';
$lang['total_expenses_for']                                          = 'Totali spese per'; // year
$lang['expenses_report_for']                                         = 'Spese per'; // year
# Custom fields
$lang['custom_field_required']                                       = 'Richiesto';
$lang['custom_field_show_on_pdf']                                    = 'Mostra su PDF';
$lang['custom_field_leads']                                          = 'Potenziali Clienti';
$lang['custom_field_customers']                                      = 'Clienti';
$lang['custom_field_staff']                                          = 'Staff';
$lang['custom_field_contracts']                                      = 'Contratti';
$lang['custom_field_tasks']                                          = 'Attività';
$lang['custom_field_expenses']                                       = 'Spese';
$lang['custom_field_invoice']                                        = 'Fatture';
$lang['custom_field_estimate']                                       = 'Preventivi';
# Tickets
$lang['ticket_single_private_staff_notes']                           = 'Note Private Staff';


# Business News
$lang['business_news'] = 'Notizie di affari';

# Navigation
$lang['nav_todo_items']               = 'Voci DaFare';
# Clients
# Contracts
$lang['clients_contracts_type']       = 'Tipo Contratto';

# Version 1.0.5
# General
$lang['no_tax']                             = 'Nessuna Tassa';
$lang['numbers_not_formatted_while_editing'] = 'Il prezzo nel campo di immissione non è formattato come lo è modifica/aggiungi voce e come dovrebbe rimanere. Non provare a formattarlo manualmente qui.';
# Contracts
$lang['contracts_view_expired']             = 'Scaduto';
$lang['contracts_view_without_dateend']     = 'Contratti senza data di scadenza';

# Email Templates
$lang['email_template_contracts_fields_heading'] = 'Contratti';
# Fatture General
$lang['invoice_estimate_general_options']        = 'Opzioni Generali';
$lang['invoice_table_item_description']          = 'Descrizione';
$lang['invoice_recurring_indicator']             = 'Ricorrente';

# Stime
$lang['estimate_convert_to_invoice_successfully'] = 'Preventivo convertito a fattura con successo';
$lang['estimate_table_item_description']         = 'Descrizione';

# Version 1.0.6
# Fatture
# Currencies
$lang['cant_delete_base_currency'] = 'Non puoi eliminare la valuta di base. Devi prima assegnare una nuova valuta base, poi cancellare questa.';
$lang['invoice_copy']              = 'Copia Fattura';
$lang['invoice_copy_success']      = 'Fattura copiata con successo';
$lang['invoice_copy_fail']         = 'Copia della fattura fallita';
$lang['invoice_due_after_help']    = 'Impostare a zero per evitare il calcolo';

$lang['show_shipping_on_invoice'] = 'Mostra i dettagli di spedizione in fattura';

# Stime
$lang['show_shipping_on_estimate']         = 'Mostra i dettagli di spedizione nel preventivo';
$lang['is_invoiced_estimate_delete_error'] = 'Questo preventivo è fatturato. Non puoi eliminarlo.';

# Customers & Fatture / Stime
$lang['ship_to']                  = 'Spedire a';
$lang['customer_profile_details'] = 'Dettagli Cliente';
$lang['billing_shipping']         = 'Fatturazione & Spedizione';
$lang['billing_address']          = 'Indirizzo Fatturazione';
$lang['shipping_address']         = 'Indirizzo Spedizione';

$lang['billing_street']  = 'Via';
$lang['billing_city']    = 'Città';
$lang['billing_state']   = 'Provincia';
$lang['billing_zip']     = 'Codice Postale';
$lang['billing_country'] = 'Nazione';

$lang['shipping_street']                    = 'Via';
$lang['shipping_city']                      = 'Città';
$lang['shipping_state']                     = 'Provincia';
$lang['shipping_zip']                       = 'Codice Postale';
$lang['shipping_country']                   = 'Nazione';
$lang['get_shipping_from_customer_profile'] = 'Ottieni dettagli di spedizione dal profilo del cliente';

# Customer
$lang['customer_file_from']                                    = 'Stai vedendo da %s';
$lang['customer_default_currency']                             = 'Valuta Predefinita';
$lang['customer_no_attachments_found']                         = 'Nessun allegato trovato';
$lang['customer_update_address_info_on_invoices']              = 'Aggiornare le informazioni di fatturazione/spedizione su tutte le precedenti fatture/preventivi';
$lang['customer_update_address_info_on_invoices_help']         = 'Se si seleziona questo campo spedizione e fatturazione sarà aggiornato su tutte le fatture e preventivi. Nota: le fatture con lo status Pagata non saranno modificate.';
$lang['setup_google_api_key_customer_map']                     = 'Imposta google api key per poter vedere la mappa clienti';
$lang['customer_attachments_file']                             = 'File';
$lang['client_send_set_password_email']                        = 'Invia email IMPOSTAZIONE password cliente';
$lang['customer_billing_same_as_profile']                      = 'Uguale a Info Cliente';
$lang['customer_billing_copy']                                 = 'Copia Indirizzo Fatturazione';
$lang['customer_map']                                          = 'Mappa';
$lang['set_password_email_sent_to_client']                     = 'L\'email per impostare la password è stata inviata al cliente con successo.';
$lang['set_password_email_sent_to_client_and_profile_updated'] = 'Profilo aggiornato ed email per impostare la password inviata al cliente con successo';
$lang['customer_attachments']                                  = 'File';
$lang['customer_longitude']                                    = 'Longitudine (Google Maps)';
$lang['customer_latitude']                                     = 'Latitudine (Google Maps)';

# Authentication
$lang['admin_auth_set_password']          = 'Password';
$lang['admin_auth_set_password_repeat']   = 'Repeti Password';
$lang['admin_auth_set_password_heading']  = 'Imposta Password';
$lang['password_set_email_subject']       = 'Imposta nuova password per %s';
# General
$lang['apply']                            = 'Applica';
$lang['department_calendar_id']           = 'Google Calendar ID';
$lang['kan_ban_string']                   = 'Kan Ban';
$lang['localization_default_language']    = 'Lingua Predefintia';
$lang['system_default_string']            = 'Sistema Predefinito';
$lang['advanced_options']                 = 'Opzioni Avanzate';
# Expenses
$lang['expense_list_invoice']             = 'Fatturato';
$lang['expense_list_billed']              = 'Ricaricato';
$lang['expense_list_unbilled']            = 'Non Ricaricato';
# Leads
$lang['lead_merge_custom_field']          = 'Unire come campo personalizzato';
$lang['lead_merge_custom_field_existing'] = 'Unire con campo database esistente';
$lang['lead_dont_merge_custom_field']     = 'Non unire';
$lang['no_lead_notes_found']              = 'Nessuna nota per Potenziali Clienti trovata';
$lang['leads_view_list']                  = 'Lista';
$lang['lost_leads']                       = 'Potenziali Clienti Persi';
$lang['junk_leads']                       = 'Potenziali Clienti Rifiutati';
$lang['lead_mark_as_lost']                = 'Contrassegna come Perso';
$lang['lead_unmark_as_lost']              = 'Togliere il contrassegno Potenziali Clienti Persi';
$lang['lead_marked_as_lost']              = 'Contrassegno Potenziali Clienti Persi effettuato';
$lang['lead_unmarked_as_lost']            = 'Togliere il contrassegno Potenziali Clienti Persi effettuato';
$lang['leads_status_color']               = 'Colore';

$lang['lead_mark_as_junk']     = 'Contrassegna come Rifiutato';
$lang['lead_unmark_as_junk']   = 'Togliere contrassegno Rifiutato';
$lang['lead_marked_as_junk']   = 'Contrassegno Potenziali Clienti Rifiutato effettuato';
$lang['lead_unmarked_as_junk'] = 'Togliere contrassegno Rifiutato effettuato';

$lang['lead_not_found']                                                      = 'Potenziale Cliente non trovato';
$lang['lead_lost']                                                           = 'Perso';
$lang['lead_junk']                                                           = 'Rifiutato';
$lang['leads_not_assigned']                                                  = 'Non Assegnato';
# Contacts
$lang['contract_not_visible_to_client']                                      = 'Nascondi al Cliente';
$lang['contract_edit_overview']                                              = 'Riepilogo Contratto';
$lang['contract_attachments']                                                = 'Allegati';
# Compiti
$lang['task_view_make_public']                                               = 'Pubblica';
$lang['task_is_private']                                                     = 'Attività Privata';
$lang['task_finished']                                                       = 'Terminata';
$lang['task_single_related']                                                 = 'Correlata';
$lang['task_unmark_as_complete']                                             = 'Togliere contrassegno di Completa';
$lang['task_unmarked_as_complete']                                           = 'Tolto contrassegno di Completato';
$lang['task_relation']                                                       = 'Correlata';
$lang['task_public']                                                         = 'Pubblica';
$lang['task_public_help']                                                    = 'Se si imposta questa attività per pubblico sarà visibile per tutti i membri dello staff. In caso contrario, sarà visibile solo ai membri che sono assegnatari, follower, creatori o amministratori';
# Settings
$lang['settings_general_favicon']                                            = 'Favicon';
$lang['settings_output_client_pdfs_from_admin_area_in_client_language']      = 'Documenti PDF del Cliente in uscita dall\'area admin. nella lingua del cliente';
$lang['settings_output_client_pdfs_from_admin_area_in_client_language_help'] = 'Se questa opzione è impostata su Sì ed es. la lingua predefinita del sistema è l\'inglese e il cliente ha come lingua di installazione francese i documenti PDF verranno emessi nella lingua del cliente';
$lang['settings_cron_surveys']                                               = 'Sondaggi';
$lang['settings_default_tax']                                                = 'Tasso Predefinita';
$lang['setup_calendar_by_departments']                                       = 'Imposta calendario per Reparti';
$lang['settings_calendar']                                                   = 'Calendario';
$lang['settings_sales_invoice_due_after']                                    = 'Fattura dovuta dopo (giorni)';
$lang['settings_google_api']                                                 = 'Google API Key';
$lang['settings_gcal_main_calendar_id']                                      = 'Google Calendar ID';
$lang['settings_gcal_main_calendar_id_help']                                 = 'Questo è il calendario aziendale principale. Verranno mostrati tutti gli eventi da questo calendario. Se vuoi specificare un calendario basato sui reparti, puoi aggiungere Google Calendar ID nel reparto.';

$lang['show_on_calendar']                  = 'Mostra sul Calendario';
$lang['show_invoices_on_calendar']         = 'Fatture';
$lang['show_estimates_on_calendar']        = 'Preventivi';
$lang['show_contracts_on_calendar']        = 'Contratti';
$lang['show_tasks_on_calendar']            = 'Attività';
$lang['show_customer_reminders_on_calendar'] = 'Promemoria Cliente';

# Leads
$lang['copy_custom_fields_convert_to_customer']                      = 'Copia campi personalizzati sul profilo cliente';
$lang['copy_custom_fields_convert_to_customer_help']                 = 'Se uno qualsiasi dei seguenti campi personalizzati non esiste per il cliente sarà automaticamente creata con lo stesso nome, in caso contrario solo il valore sarà copiato dal profilo potenziali clienti.';
$lang['lead_profile']                                                = 'Profilo';
$lang['lead_is_client']                                              = 'Cliente';
$lang['leads_kan_ban_notes_title']                                   = 'Note';
$lang['leads_email_integration_folder_no_encryption']                = 'Senza Crittografia';
$lang['leads_email_integration']                                     = 'Integrazione email';
$lang['leads_email_active']                                          = 'Attivo';
$lang['leads_email_integration_imap']                                = 'IMAP Server';
$lang['leads_email_integration_email']                               = 'Indirizzo Email (Login)';
$lang['leads_email_integration_password']                            = 'Password';
$lang['leads_email_integration_default_source']                      = 'Fonte di Default';
$lang['leads_email_integration_check_every']                         = 'Controlla ogni (minuti)';
$lang['leads_email_integration_default_assigned']                    = 'Responsabile per nuovo potenziale cliente';
$lang['leads_email_encryption']                                      = 'Crittografata';
$lang['leads_email_integration_updated']                             = 'Integrazione email aggiornata';
$lang['leads_email_integration_default_status']                      = 'Status Predefinito';
$lang['leads_email_integration_folder']                              = 'Cartella';
$lang['leads_email_integration_notify_when_lead_imported']           = 'Notifica quando un potenziale cliente viene importato';
$lang['leads_email_integration_only_check_unseen_emails']            = 'Controlla solo email non aperte';
$lang['leads_email_integration_only_check_unseen_emails_help']       = 'Lo script imposta automaticamente lapertura delle email dopo il controllo. Ciò serve per evitare il ri-controllo di tutte le email ogni volta. Non è raccomandato deselezionare questa opzione se si hanno molte email e si è impostato molti invii alle email impostate per i potenziali clienti';
$lang['leads_email_integration_notify_when_lead_contact_more_times'] = 'Notifica se il potenziale cliente ha inviato più di una email';
$lang['leads_email_integration_test_connection']                     = 'Test Connessione IMAP';
$lang['lead_email_connection_ok']                                    = 'Connessione IMAP buonaì';
$lang['lead_email_connection_not_ok']                                = 'Connessione IMAP non ottimale';
$lang['lead_email_activity']                                         = 'Attività Email';
$lang['leads_email_integration_notify_roles']                        = 'Ruoli per Notifica';
$lang['leads_email_integration_notify_staff']                        = 'Membri Staff da Notificare';
$lang['lead_public']                                                 = 'Pubblico';
# Knowledge Base

$lang['kb_group_color']                = 'Colore';
$lang['kb_group_order']                = 'Ordine';
# Utilities - BULK PDF Exporter
$lang['bulk_pdf_exporter']             = 'Esportatore PDF di Gruppo';
$lang['bulk_export_pdf_payments']      = 'Pagamenti';
$lang['bulk_export_pdf_estimates']     = 'Preventivi';
$lang['bulk_export_pdf_invoices']      = 'Fatture';
$lang['bulk_pdf_export_button']        = 'Esporta';
$lang['bulk_pdf_export_select_type']   = 'Seleziona Tipo';
$lang['no_data_found_bulk_pdf_export'] = 'Nessun dato trovato per l\'esportazione';
$lang['bulk_export_status_all']        = 'Tutto';
$lang['bulk_export_status']            = 'Status';
$lang['bulk_export_zip_payment_modes'] = 'Pagamenti effettuati con';
$lang['bulk_export_include_tag']       = 'Includi Tag';
$lang['bulk_export_include_tag_help']  = 'Es. Originale or Copia. Il tag sarà emesso nel PDF. Si raccomanda di usare solo 1 tag';
# Predefined replies
$lang['no_predefined_replies_found']   = 'Nessuna risposta predefinita trovata';
## Clients area
$lang['clients_contract_attachments']  = 'Allegati';
# Backup
$lang['backup_type_full']              = 'Backup completo';
$lang['backup_type_db']                = 'Backup Database';

$lang['auto_backup_options_updated']     = 'Opzione backup automatico aggiornata';
$lang['auto_backup_every']               = 'Crea backup ogni X giorni';
$lang['auto_backup_enabled']             = 'Abilita (Richiede Cron)';
$lang['auto_backup']                     = 'Auto backup';
$lang['backup_delete']                   = 'Backup Eliminato';
$lang['create_backup']                   = 'Crea Backup';
$lang['backup_success']                  = 'Backup eseguito con successo';
$lang['utility_backup']                  = 'Backup Database';
$lang['utility_create_new_backup_db']    = 'Crea Backup Database';
$lang['utility_backup_table_backupname'] = 'Backup';
$lang['utility_backup_table_backupsize'] = 'Dimensione Backup';
$lang['utility_backup_table_backupdate'] = 'Data';
$lang['utility_db_backup_note']          = 'Nota: Dato il limite del tempo di esecuzione e la memoria disponibile per PHP, potrebbe non essere possibile eseguire il backup di un database molto grande. Se il database è molto grande potrebbe essere necessario eseguire il backup direttamente dal server SQL tramite la riga di comando, o il vostro amministratore di server potrebbe farlo per voi, se non si dispone di privilegi di root.';

# Version 1.0.7
## Customers - portal
$lang['clients_nav_proposals'] = 'Proposte';
$lang['clients_nav_support']   = 'Supporto';
# General
$lang['more']                  = 'Più';
$lang['add_item']              = 'Aggiungi voce';
$lang['goto_admin_area']       = 'Vai all\'area admin';
$lang['click_here_to_edit']    = 'Clicca qui per modificare';
$lang['delete']                = 'Elimina %s';
$lang['welcome_top']           = 'Benvenuto %s';

# Customers
$lang['customer_permissions']         = 'Permessi';
$lang['customer_permission_invoice']  = 'Fattura';
$lang['customer_permission_estimate'] = 'Preventivo';
$lang['customer_permission_proposal'] = 'Proposte';
$lang['customer_permission_contract'] = 'Contratto';
$lang['customer_permission_support']  = 'Supporto';


#Compiti
$lang['task_related_to'] = 'Collegato A';

# Send file
$lang['custom_file_fail_send']    = 'Invio file fallito';
$lang['custom_file_success_send'] = 'File inviato con successo a %s';
$lang['send_file_subject']        = 'Oggetto Email';
$lang['send_file_email']          = 'Indirizzo Email';
$lang['send_file_message']        = 'Messaggio';
$lang['send_file']                = 'Invio File';
$lang['add_checklist_item']       = 'Voce Lista Controllo';
$lang['task_checklist_items']     = 'Voci Lista Controllo';

# Import
$lang['default_pass_clients_import'] = 'Password predefinita per tutti i clienti';
$lang['simulate_import']             = 'Importo Simulato';
$lang['import_upload_failed']        = 'Caricamento Fallito';
$lang['import_total_imported']       = 'Totale Importato: %s';
$lang['import_leads']                = 'Importa Potenziali Clienti';
$lang['import_customers']            = 'Importa Clienti';
$lang['choose_csv_file']             = 'Scegli File CSV';
$lang['import']                      = 'Importa';
$lang['lead_import_status']          = 'Status';
$lang['lead_import_source']          = 'Fonte';

# Bulk PDF Export
$lang['bulk_export_pdf_proposals'] = 'Proposte';

# Fatture
$lang['delete_invoice'] = 'Elimina';

# Calendar
$lang['calendar_lead_reminder'] = 'Promemoria Potenziale Cliente';

$lang['items']      = 'Voci';
$lang['support']    = 'Supporto';
$lang['new_ticket'] = 'Nuovo Ticket';

# Reminders
$lang['client_edit_set_reminder_title'] = 'Aggiungi promemoria cliente';
$lang['lead_set_reminder_title']        = 'Aggiungi promemoria potenziale cliente';
$lang['set_reminder_tooltip']           = 'Questa opzione consente di non dimenticare nulla dei tuoi clienti.';
$lang['client_reminders_tab']           = 'Promemoria';
$lang['leads_reminders_tab']            = 'Promemoria';

# Tickets
$lang['delete_ticket_reply']  = 'Elimina Risposta';
$lang['ticket_priority_edit'] = 'Modifica Priorità';
$lang['ticket_priority_add']  = 'Aggiungi Priorità';
$lang['ticket_status_edit']   = 'Modifica Status Ticket';
$lang['ticket_service_edit']  = 'Modifica Servizio Ticket';
$lang['edit_department']      = 'Modifica Reparto';

# Expenses
$lang['edit_expense_category']                                    = 'Modifica Categoria Spese';
# Settings
$lang['customer_default_country']                                 = 'Nazione Predefinita';
$lang['settings_sales_require_client_logged_in_to_view_estimate'] = 'È richiesto l\'accesso del cliente per visualizzare il preventivo';
$lang['set_reminder']                                             = 'Imposta promemoria';
$lang['set_reminder_date']                                        = 'Data da notificare';
$lang['reminder_description']                                     = 'Imposta descrizione';
$lang['reminder_notify_me_by_email']                              = 'Manda anche un\'email per questo promemoria';
$lang['reminder_added_successfully']                               = 'Promemoria aggiunto con successo. Ti sarà data notifica in tempo.';
$lang['reminder_description']                                     = 'Descrizione';
$lang['reminder_date']                                            = 'Data';
$lang['reminder_staff']                                           = 'Promemoria';
$lang['reminder_is_notified']                                     = 'Notificato??';
$lang['reminder_is_notified_boolean_no']                          = 'No';
$lang['reminder_is_notified_boolean_yes']                         = 'Sì';
$lang['reminder_set_to']                                          = 'Imposta promemoria per';
$lang['reminder_deleted']                                         = 'Promemoria eliminato con successo';
$lang['reminder_failed_to_delete']                                = 'Eliminazione del promemoria fallita';
$lang['show_invoice_estimate_status_on_pdf']                      = 'Vedi status fattura/preventivo su PDF';
$lang['email_piping_default_priority']                            = 'Priorità definita su ticket inviato';
$lang['show_lead_reminders_on_calendar']                          = 'Promemoria potenziali clienti';
$lang['tickets_piping']                                           = 'Email Piping';
$lang['email_piping_only_replies']                                = 'Permesse solo risposte via Email';
$lang['email_piping_only_registered']                             = 'Piping  Solo su Utenti Registrati';

# Stime
$lang['view_estimate_as_client']         = 'Vedi preventivi come Cliente';
$lang['estimate_mark_as']                = 'Contrassegna come %s';
$lang['estimate_status_changed_success'] = 'Status preventivo cambiato';
$lang['estimate_status_changed_fail']    = 'Cambio dello status del preventivo fallito';
$lang['estimate_email_link_text']        = 'Vedi Preventivo';

# Proposals
$lang['proposal_to']                            = 'Azienda / Nome';
$lang['proposal_date']                          = 'Data';
$lang['proposal_address']                       = 'Indirizzo';
$lang['proposal_phone']                         = 'Telefono';
$lang['proposal_email']                         = 'Email';
$lang['proposal_date_created']                  = 'Data Creazione';
$lang['proposal_open_till']                     = 'Valido fino';
$lang['proposal_status_open']                   = 'Aperta';
$lang['proposal_status_accepted']               = 'Accettata';
$lang['proposal_status_declined']               = 'Declinata';
$lang['proposal_status_sent']                   = 'Invia';
$lang['proposal_expired']                       = 'Scaduta';
$lang['proposal_subject']                       = 'Oggetto';
$lang['proposal_total']                         = 'Totale';
$lang['proposal_status']                        = 'Status';
$lang['proposals_list_all']                     = 'Tutte';
$lang['proposals_leads_related']                = 'Potenziali Clienti Correlati';
$lang['proposals_customers_related']            = 'Clienti Correlati';
$lang['proposal_related']                       = 'Correlate';
$lang['proposal_for_lead']                      = 'Potenziale Cliente';
$lang['proposal_for_customer']                  = 'Cliente';
$lang['proposal']                               = 'Proposta';
$lang['proposal_lowercase']                     = 'proposta';
$lang['proposals']                              = 'Proposte';
$lang['proposals_lowercase']                    = 'proposte';
$lang['new_proposal']                           = 'Nuova Proposta';
$lang['proposal_currency']                      = 'Valuta';
$lang['proposal_allow_comments']                = 'Permetti Commenti';
$lang['proposal_allow_comments_help']           = 'Selezionando questa opzione i commenti saranno permessi quando i tuoi clienti vedono la proposta.';
$lang['proposal_edit']                          = 'Modifica';
$lang['proposal_pdf']                           = 'PDF';
$lang['proposal_send_to_email']                 = 'Invia per Email';
$lang['proposal_send_to_email_title']           = 'Invia Proposta per Email';
$lang['proposal_attach_pdf']                    = 'Allega PDF';
$lang['proposal_preview_template']              = 'Anteprima Modello';
$lang['proposal_view']                          = 'Vedi Proposta';
$lang['proposal_copy']                          = 'Copia';
$lang['proposal_delete']                        = 'Elimina';
$lang['proposal_to']                            = 'Cliente';
$lang['proposal_add_comment']                   = 'Aggingi Commento';
$lang['proposal_sent_to_email_success']         = 'Proposta inviata per email con successo';
$lang['proposal_sent_to_email_fail']            = 'Impossibile inviare la proposta per email';
$lang['proposal_copy_fail']                     = 'Impossibile copiare proposta';
$lang['proposal_copy_success']                  = 'Proposta copiata con successo';
$lang['proposal_status_changed_success']        = 'Status proposta cambiato con successo';
$lang['proposal_status_changed_fail']           = 'Impossibile cambiare lo status proposta';
$lang['proposal_assigned']                      = 'Assegnato';
$lang['proposal_comments']                      = 'Commenti';
$lang['proposal_convert']                       = 'Converti';
$lang['proposal_convert_estimate']              = 'Preventivo';
$lang['proposal_convert_invoice']               = 'Fattura';
$lang['proposal_convert_to_estimate']           = 'Converti in Preventivo';
$lang['proposal_convert_to_invoice']            = 'Converti in Fattura';
$lang['proposal_convert_to_lead_disabled_help'] = 'È necessario convertire il potenziale cliente in cliente al fine di creare %s';
$lang['proposal_convert_not_related_help']      = 'La proposta deve essere correlata al cliente al fine di convertirla a %s';
$lang['proposal_converted_to_estimate_success'] = 'Proposta convertita in preventivo con successo';
$lang['proposal_converted_to_invoice_success']  = 'Proposta convertita in fattura con successo';
$lang['proposal_converted_to_estimate_fail']    = 'Impossibile convertire la proposta in preventivo';
$lang['proposal_converted_to_invoice_fail']     = 'Impossibile convertire la proposta in fattura';

# Proposals - view proposal template
$lang['proposal_total_info']   = 'Totale %s';
$lang['proposal_accept_info']  = 'Accetto';
$lang['proposal_decline_info'] = 'Rifiuto';
$lang['proposal_pdf_info']     = 'PDF';

# Customers Portal
$lang['customer_reset_action']            = 'Azzera';
$lang['customer_reset_password_heading']  = 'Reimposta la tua password';
$lang['customer_forgot_password_heading'] = 'Password Dimenticata';
$lang['customer_forgot_password']         = 'Password Dimenticata?';
$lang['customer_reset_password']          = 'Password';
$lang['customer_reset_password_repeat']   = 'Ripeti Password';
$lang['customer_forgot_password_email']   = 'Indirizzo Email';
$lang['customer_forgot_password_submit']  = 'Invia';
$lang['customer_ticket_subject']          = 'Oggetto';

# Email templates
$lang['email_template_proposals_fields_heading'] = 'Proposte';

# Compiti
$lang['add_task_attachments']                 = 'Allegato';
$lang['task_view_attachments']                = 'Allegati';
$lang['task_view_description']                = 'Descrizione';

# Customer Groups
$lang['customer_group_add_heading']  = 'Aggiungi Nuovo Gruppo Cliente';
$lang['customer_group_edit_heading'] = 'Modifica Gruppo Cliente';
$lang['new_customer_group']          = 'Nuovo Gruppo Cliente';
$lang['customer_group_name']         = 'Nome';
$lang['customer_groups']             = 'Gruppi';
$lang['customer_group']              = 'Gruppo Cliente';
$lang['customer_group_lowercase']    = 'gruppo cliente';

$lang['customer_have_invoices_by']       = 'Contiene fatture di status %s';
$lang['customer_have_estimates_by']      = 'Contiene preventivi di status %s';
$lang['customer_have_contracts_by_type'] = 'Sono presenti contratti di tipo %s';

# Custom fields
$lang['custom_field_show_on_table']              = 'Mostra in tabella';
$lang['custom_field_show_on_client_portal']      = 'Mostra su portale cliente';
$lang['custom_field_show_on_client_portal_help'] = 'Se questo campo è selezionato sarà visibile anche nelle tabelle';
$lang['custom_field_visibility']                 = 'Visibilità';

# Utilities # Menu Builder
$lang['utilities_menu_translate_name_help'] = 'Puoi aggiungere qui anche delle stringhe tradotte. Quindi se lo staff/sistema ha una lingua diversa da quella di default i nomi degli oggetti del menu saranno prodotti nella lingua dello staff. Altrimenti se la stringa non esiste nel linguaggio tradotto sarà prelevata la stringa inserita qui da te.';
$lang['utilities_menu_icon']                = 'Icona';
$lang['active_menu_items']                  = 'Oggetti Menu Attivi';
$lang['inactive_menu_items']                = 'Oggetti Menu Inattivi';
$lang['utilities_menu_permission']          = 'Permesso';
$lang['utilities_menu_url']                 = 'URL';
$lang['utilities_menu_name']                = 'Nome';
$lang['utilities_menu_save']                = 'Salva Menu';

# Knowledge Base
$lang['view_articles_list']     = 'Vedi Articoli';
$lang['view_articles_list_all'] = 'Tutti gli articoli';
$lang['als_add_article']        = 'Aggiungi Articolo';
$lang['als_all_articles']       = 'Tutti gli Articoli';
$lang['als_kb_groups']          = 'Gruppi';

# Customizer Menu
$lang['menu_builder']            = 'Setup Menu';
$lang['main_menu']               = 'Menu Principale';
$lang['setup_menu']              = 'Setup Menu';
$lang['utilities_menu_url_help'] = '%s viene aggiunto automaticamente allo url';

# Spam Filter - Tickets
$lang['spam_filters']                 = 'Filtri Spam';
$lang['spam_filter']                  = 'Filtro Spam';
$lang['new_spam_filter']              = 'Nuovi filtri spam';
$lang['spam_filter_blocked_senders']  = 'Mittenti Bloccati';
$lang['spam_filter_blocked_subjects'] = 'Oggetti Bloccati';
$lang['spam_filter_blocked_phrases']  = 'Frasi Bloccate';
$lang['spam_filter_content']          = 'Contenuto';
$lang['spamfilter_edit_heading']      = 'Modifica Filtro Spam';
$lang['spamfilter_add_heading']       = 'Aggiungi Filtro Spam';
$lang['spamfilter_type']              = 'Tipi';
$lang['spamfilter_type_subject']      = 'Oggetto';
$lang['spamfilter_type_sender']       = 'Mittente';
$lang['spamfilter_type_phrase']       = 'Frase';

# Tickets
$lang['block_sender']               = 'Blocca Mittente';
$lang['sender_blocked']             = 'Mittente Bloccato';
$lang['sender_blocked_successfully'] = 'Mittente Bloccato con Successo';
$lang['ticket_date_created']        = 'Data Creazione';

#KB
$lang['edit_kb_group']             = 'Modifica gruppo';
# Leads
$lang['edit_source']               = 'Modifica Fonte';
$lang['edit_status']               = 'Modifica Stato';
# Contacts
$lang['contract_type_edit']        = 'Modifica tipo di contratto';
# Reports
$lang['report_by_customer_groups'] = 'Valore Totale per Gruppi Cliente';
#Utilities
$lang['ticket_pipe_log']           = 'Piping Registro Ticket ';
$lang['ticket_pipe_name']          = 'Da Nome';
$lang['ticket_pipe_email_to']      = 'A';
$lang['ticket_pipe_email']         = 'Da Email';
$lang['ticket_pipe_subject']       = 'Oggetto';
$lang['ticket_pipe_message']       = 'Messaggio';
$lang['ticket_pipe_date']          = 'Data';
$lang['ticket_pipe_status']        = 'Status';

# Home
$lang['home_latest_activity']       = 'Ultime attività';
$lang['home_my_tasks']              = 'I Miei Compiti';
$lang['home_latest_activity']       = 'Ultima Attività';
$lang['home_my_todo_items']         = 'Lista di Cose da Fare';
$lang['home_widget_view_all']       = 'Visualizza Tutto';
$lang['home_stats_full_report']     = 'Rapporto Completo';

# Validation

$lang['form_validation_required']    = 'Questo {field} campo è richiesto.';
$lang['form_validation_valid_email'] = 'Questo {field} campo deve contenere un indirizzo valido';
$lang['form_validation_matches']     = 'Il campo {field} non corrisponde al campo {param}.';
$lang['form_validation_is_unique']   = 'Il campo {field} deve contenere un valore unico.';

# Version 1.0.8
# Notifications & Leads/Stime/Fatture Activity Log
$lang['not_event'] = 'L\'evento inizia oggi - %s ...';
$lang['not_event_public'] = 'L\'evento pubblico inizia oggi - %s ...';
$lang['not_contract_expiry_reminder'] = 'Promemoria scadenza contratto- %s ...';
$lang['not_recurring_expense_cron_activity_heading'] = 'Attività Cron Job Spese Ricorrenti';
$lang['not_recurring_invoices_cron_activity_heading'] = 'Attività Cron Job Fatture Ricorrenti';
$lang['not_recurring_total_renewed'] = 'Totale Rinnovati: %s';
$lang['not_recurring_expenses_action_taken_from'] = 'Azione intrapresa da spesa ricorrente';
$lang['not_invoice_created'] = 'Fattura Creata:';
$lang['not_invoice_renewed'] = 'Fattura Rinnovata:';
$lang['not_expense_renewed'] = 'Spesa Rinnovata:';
$lang['not_invoice_sent_to_customer'] = 'Fattura Inviata al Cliente: %s';
$lang['not_invoice_sent_yes'] = 'Si';
$lang['not_invoice_sent_not'] = 'No';
$lang['not_action_taken_from_recurring_invoice'] = 'Azione intrapresa da fattura ricorrente:';
$lang['not_new_reminder_for'] = 'Nuovo Promemoria per %s';
$lang['not_received_one_or_more_messages_lead'] = 'Ricevuto un altro messaggio e-mail da potenziale cliente';
$lang['not_received_lead_imported_email_integration'] = 'Potenziale cliente importato da integrazione email';
$lang['not_lead_imported_attachment'] = 'Allegato importato da email';
$lang['not_estimate_status_change'] = 'Allegato importato da email';
$lang['not_estimate_status_updated'] = 'Stima Status Updated: From: %s to %s';
$lang['not_goal_message_success'] = 'Congratulazioni! Abbiamo raggiunto un nuovo obiettivo.<br /> Tipo Obbiettivo: %s
<br /> Obbiettivo: %s
<br />Totale Obbiettivo: %s
<br />Data Inizio: %s
<br />Data Termine: %s';
$lang['not_assigned_lead_to_you'] = 'ha assegnato il potenziale cliente %s a te';
$lang['not_lead_activity_assigned_to'] = '%s assegnato a %s';
$lang['not_lead_activity_attachment_deleted'] = 'Elimina Allegato';
$lang['not_lead_activity_status_updated'] = '%s ha aggiornato lo status potenziale cliente da %s a %s';
$lang['not_lead_activity_contacted'] = '%s ha contattato questo potenziale cliente il %s';
$lang['not_lead_activity_created'] = '%s ha creato il potenziale cliente';
$lang['not_lead_activity_marked_lost'] = 'Contrassegnato come perso';
$lang['not_lead_activity_unmarked_lost'] = 'Non contrassegnato come perso';
$lang['not_lead_activity_marked_junk'] = 'Contrassegnato come spazzatura';
$lang['not_lead_activity_unmarked_junk'] = 'Non contrassegnato come spazzatura';
$lang['not_lead_activity_added_attachment'] = 'Allegato aggiunto';
$lang['not_lead_activity_converted_email'] = 'Email potenziale cliente cambiata. La prima email del potenziale cliente era: %s ed aggiunto come cliente con email %s';
$lang['not_lead_activity_converted'] = '%s ha convertito questo potenziale cliente in cliente ';
$lang['not_liked_your_post'] = 'A %s è piaciuto il tuo post %s ...';
$lang['not_commented_your_post'] = '%s ha commentato il tuo post %s ...';
$lang['not_liked_your_comment'] = 'A %s è piaciuto il tuo post commento %s ...';
$lang['not_proposal_assigned_to_you'] = 'Proposta assegnata a te- %s ...';
$lang['not_proposal_comment_from_client'] = 'Nuovo commento dal cliente sulla proposta %s ...';
$lang['not_proposal_proposal_accepted'] = 'Proposta Accettata';
$lang['not_proposal_proposal_declined'] = 'Proposta Rifiutata';
$lang['not_task_added_you_as_follower'] = 'ti ha aggiunto come follower per il compito %s ...';
$lang['not_task_added_someone_as_follower'] = 'ha aggiunto %s come follower per il compito %s ...';
$lang['not_task_added_himself_as_follower'] = 'ha aggiunto se stesso come follower per il compito %s ...';
$lang['not_task_assigned_to_you'] = 'ti ha assegnato un compito %s ...';
$lang['not_task_assigned_someone'] = 'ha assegnato %s al compito %s ...';
$lang['not_task_will_do_user'] = 'svolgerà il compito %s ...';
$lang['not_task_new_attachment'] = 'Nuovo Allegato Aggiunto';
$lang['not_task_marked_as_complete'] = 'ha contrassegnato il compito come %s';
$lang['not_task_unmarked_as_complete'] = 'non ha contrassegnato il compito come %s';
$lang['not_ticket_assigned_to_you'] = 'Ticket assegnato a te - %s ...';
$lang['not_ticket_reassigned_to_you'] = 'Ticket riassegnato a te - %s ...';
$lang['not_estimate_customer_accepted'] = 'Congratulazioni! Il cliente ha accettato il preventivo con numero %s';
$lang['not_estimate_customer_declined'] = 'Il cliente ha rifiutato il preventivo con numero %s';
$lang['estimate_activity_converted'] = 'ha convertito questo preventivo in fattura.<br /> %s';
$lang['estimate_activity_created'] = 'Creato il preventivo';
$lang['invoice_estimate_activity_removed_item'] = 'oggetto rimosso<b>%s</b>';
$lang['estimate_activity_number_changed'] = 'Numero preventivo cambiato da %s a %s';
$lang['invoice_activity_number_changed'] = 'Numero fattura cambiato da %s a %s';
$lang['invoice_estimate_activity_updated_item_short_description'] = 'ha aggiornato la descrizione breve dell\'oggetto da %s a %s';
$lang['invoice_estimate_activity_updated_item_long_description'] = 'ha aggiornato la descrizione lunga dell\'oggetto da <b>%s</b> a <b>%s</b>';
$lang['invoice_estimate_activity_updated_item_rate'] = 'ha aggiornato il tasso oggetto da %s a%s';
$lang['invoice_estimate_activity_updated_qty_item'] = 'ha aggiornato la quantità sull\'oggetto <b>%s</b> da %s a %s';
$lang['invoice_estimate_activity_added_item'] = 'ha aggiunto il nuovo oggetto <b>%s</b>';
$lang['invoice_estimate_activity_sent_to_client'] = 'ha inviato il preventivo al cliente';
$lang['estimate_activity_client_accepted_and_converted'] = 'Cliente ha accettato questo preventivo. Preventivo convertito in fattura con numero %s';
$lang['estimate_activity_client_accepted'] = 'Cliente ha accettato questo preventivo';
$lang['estimate_activity_client_declined'] = 'Cliente ha rifiutato questo preventivo';
$lang['estimate_activity_marked'] = 'ha contrassegnato il preventivo come %s';
$lang['invoice_activity_status_updated'] = 'Status fattura aggiornato da %s a %s';
$lang['invoice_activity_created'] = 'ha creato la fattura';
$lang['invoice_activity_from_expense'] = 'convertito in fattura da spesa';
$lang['invoice_activity_recurring_created'] = 'Fattura [Recurring] creata da CRON';
$lang['invoice_activity_recurring_from_expense_created'] = '[Fattura From Expense] Fattura creata da CRON';
$lang['invoice_activity_sent_to_client_cron'] = 'Fattura inviata al cliente da CRON';
$lang['invoice_activity_sent_to_client'] = 'ha inviato la fattura al cliente';
$lang['invoice_activity_marked_as_sent'] = 'ha contrassegnato la fattura come inviata';
$lang['invoice_activity_payment_deleted'] = 'ha eliminato il pagamento per la fattura. Pagamento #%s, cifra totale %s';
$lang['invoice_activity_payment_made_by_client'] = 'Cliente ha effettuato il pagamento per la fattura dal totale <b>%s</b> - %s';
$lang['invoice_activity_payment_made_by_staff'] = 'ha registrato il pagamento dal totale total <b>%s</b> - %s';
$lang['invoice_activity_added_attachment'] = 'Allegato aggiunto';

# Navigation
$lang['top_search_placeholder'] = 'Cerca…';

# Staff
$lang['staff_profile_inactive_account'] = 'Questo account membro staff non è attivo';

# Stime
$lang['copy_estimate'] = 'Copia Ordine';
$lang['estimate_copied_successfully'] = 'Ordine copiato correttamente';
$lang['estimate_copied_fail'] = 'Ordine non copiato';

# Compiti
$lang['tasks_view_assigned_to_user'] = 'Compiti assegnati a me';
$lang['tasks_view_follower_by_user'] = 'Compiti che sto seguendo';
$lang['no_tasks_found'] = 'Nessun Compio Trovato';

# Leads
$lang['leads_dt_datecreated'] = 'Creato';
$lang['leads_sort_by'] = 'Cerca per';
$lang['leads_sort_by_datecreated'] = 'Data creazione';
$lang['leads_sort_by_kanban_order'] = 'Ordine Kan Ban';

# Proposals
$lang['proposal_items_name'] = 'Oggetto';
$lang['proposal_items_description'] = 'Descrizione';
$lang['proposal_items_qty'] = 'Qtà';
$lang['proposal_items_rate'] = 'Prezzo';
$lang['proposal_items_tax'] = 'Tassa';
$lang['proposal_items_amount'] = 'Importo';

# Authentication
$lang['check_email_for_resetting_password'] = 'Guarda la tua e-email per resettare la password';
$lang['inactive_account'] = 'Account Inattivo';
$lang['error_setting_new_password_key'] = 'Errore sulla nuova password';
$lang['password_reset_message'] = 'La tua password è stata resettata. Effettua il login!';
$lang['password_reset_message_fail'] = 'Errore nel resettare la password. Riprova';
$lang['password_reset_key_expired'] = 'Chiave password scaduta o utente non valido';
$lang['admin_auth_reset_pass_repeat'] = 'Ripeti la Password';
$lang['auth_reset_pass_email_not_found'] = 'Email non trovata';
$lang['auth_reset_password_submit'] = 'Resetta Password';

# Settings
$lang['settings_amount_to_words'] = 'Importo a parole';
$lang['settings_amount_to_words_desc'] = 'Importo totale output a parole nella fattura/stima';
$lang['settings_amount_to_words_enabled'] = 'Abilita';
$lang['settings_total_to_words_lowercase'] = 'Numero a parole in lettere minuscole';
$lang['settings_show_tax_per_item'] = 'Mostra IVA per oggetto (Fatture/Stime)';

# Reports
$lang['report_sales_months_three_months'] = 'Ultimi 3 mesi';
$lang['report_invoice_number'] = 'Fattura #';
$lang['report_invoice_customer'] = 'Cliente';
$lang['report_invoice_date'] = 'Data';
$lang['report_invoice_duedate'] = 'Due Data';
$lang['report_invoice_amount'] = 'Importo';
$lang['report_invoice_amount_with_tax'] = 'Importo con IVA';
$lang['report_invoice_amount_open'] = 'Importo aperto';
$lang['report_invoice_status'] = 'Status';
$lang['report_invoice_total_amount_with_tax'] = 'Totale con IVA';
$lang['report_invoice_total_amount_without_tax'] = 'Totale senza IVA';
$lang['report_invoice_total_taxes'] = 'IVA';

#Version 1.0.9

# Home stats
$lang['home_stats_by_project_status'] = 'Statistiche per status progetto';
$lang['home_invoice_overview'] = 'Panoramica Fattura';
$lang['home_estimate_overview'] = 'Panoramica Stima';
$lang['home_proposal_overview'] = 'Panoramica Proposta';
$lang['home_lead_overview'] = 'Panoramica potenziale cliente';
$lang['home_my_projects'] = 'I Miei Progetti' ;
$lang['home_announcements'] = 'Annunci';

# Settings
$lang['settings_leads_kanban_limit'] = 'Limite file pot. clienti Kanban per status';
$lang['settings_group_misc'] = 'Misc';
$lang['show_projects_on_calendar'] = 'Mostra progetti sul calendario';
$lang['settings_media_max_file_size_upload'] = 'Dimensione max upload file in Media (MB)';
$lang['settings_client_staff_add_edit_delete_task_comments_first_hour'] = 'Consente a cliente/staff di eggiungere/modificare I commenti compito solo nella prima ora (Non si applica a Amministratori)';

# Email templates
$lang['email_template_only_domain_email'] = 'Solo email dominio';

# Announcements
$lang['dismiss_announcement'] = 'Rimuovi annuncio';
$lang['dismiss_announcement'] = 'Rimuovi annuncio';
$lang['announcement_from'] = 'Da';
$lang['announcement_date'] = 'Data pubblicazione: %s';
$lang['announcement_not_found'] = 'Annuncio non trovato';
$lang['announcements_recent'] = 'Annunci Recenti';

# General
$lang['zip_invoices'] = 'Zip Fatture';
$lang['zip_estimates'] = 'Zip Stime';
$lang['zip_payments'] = 'Zip Pagamenti';
$lang['setup_help'] = 'Aiuto';
$lang['clients_list_company'] = 'Azienda';
$lang['dt_button_export'] = 'Esporta';

$lang['dt_entries'] = 'entrate';
$lang['invoice_total_paid'] = 'Totale Pagato' ;
$lang['invoice_amount_due'] = 'Importo Dovuto';
$lang['report_invoice_discount'] = 'Sconti';

# Calendar
$lang['calendar_project'] = 'Progetti';

# Leads
$lang['leads_import_assignee'] = 'Assegnatario';
$lang['customer_from_lead'] = 'Cliente da%s';
$lang['lead_kan_ban_attachments'] = 'Allegati %s';
$lang['leads_sort_by_lastcontact'] = 'Ultimo Contatto';

# Compiti
$lang['task_comment_added'] = 'Commento aggunto con succcesso';
$lang['task_duedate'] = 'Data di Scadenza';
$lang['task_view_comments'] = 'Commenti';
$lang['task_comment_updated'] = 'Commento aggiornato';
$lang['task_visible_to_client'] = 'Visibile al cliente';
$lang['task_hourly_rate'] = 'Tariffa Oraria';
$lang['hours'] = 'Ore';
$lang['seconds'] = 'Secondi';
$lang['minutes'] = 'Minuti';
$lang['task_start_timer'] = 'Avvia Timer';
$lang['task_stop_timer'] = 'Ferma Timer';
$lang['task_billable_help'] = 'Se si seleziona fatturabile l\'operazione verrà mostrata durante la creazione della fattura come elementi';
$lang['task_billable'] = 'Fatturabile';
$lang['task_billable_yes'] = 'Fatturabile';
$lang['task_billable_no'] = 'Non fatturabile';
$lang['task_billed'] = 'Fatturata';
$lang['task_billed_yes'] = 'Fatturata';
$lang['task_billed_no'] = 'Non fatturata';
$lang['task_user_logged_time'] = 'Il tuo tempo di accesso:';
$lang['task_total_logged_time'] = 'Tempo di accesso totale:';
$lang['task_is_billed'] = 'Questo compito è addebitato sulla fattura con numero %s';
$lang['task_statistics'] = 'Statistiche';
$lang['task_milestone'] = 'Pietra Miliare';

# Tickets
$lang['ticket_message_updated_successfully'] = 'Messaggio inviato correttamente';

# Fatture
$lang['invoice_task_item_project_tasks_not_included'] = 'I compiti progetto non sono inclusi in questa lista.';
$lang['show_quantity_as'] = 'Mostra quantità come:';
$lang['quantity_as_qty'] = 'Qtà';
$lang['quantity_as_hours'] = 'Ore';
$lang['invoice_table_hours_heading'] = 'Ore';
$lang['bill_tasks'] = 'Addebita Compiti';
$lang['invoice_estimate_sent_to_email'] = 'Email';

# Stime
$lang['estimate_table_hours_heading'] = 'Ore';

# General
$lang['is_customer_indicator'] = 'Cliente';
$lang['print']            = 'Stampa';
$lang['customer_permission_projects']            = 'Progetto';
$lang['no_timers_found']            = 'Nessun timer avviato trovato';
$lang['timers_started_confirm_logout']            = 'Timer Compiti trovato avviato!<br /><br /> Sei sicuro di voler uscire senza fermare i timer?';
$lang['confirm_logout']            = 'Esci';
$lang['timer_top_started']            = 'Avviato a %s';

# Progetti
$lang['cant_change_billing_type_billed_tasks_found'] = ' Impossibile modificare il tipo di fatturazione. compiti addebitati già trovato per questo progetto.';
$lang['project_customer_permission_warning'] = 'Il sistema indica che i clienti non hanno l\'autorizzazione per i progetti. Il cliente non sarà in grado di vedere il progetto. Considerare di aggiungere il permesso nelle autorizzazioni scheda Profilo cliente.';
$lang['project_invoice_timesheet_start_time'] = 'Ora di inizio: %s';
$lang['project_invoice_timesheet_end_time'] = 'Ora termine: %s';
$lang['project_invoice_timesheet_total_logged_time'] = 'Orario di accesso: %s';
$lang['project_view_as_client'] = 'Visualizza progetto come cliente ';
$lang['project_mark_all_tasks_as_completed'] = 'Segnare tutti i compiti come completato e arrestare tutti i timer (Nessuna notifica inviata ai membri del progetto)';
$lang['project_not_started_status_tasks_timers_found'] = 'Timer trovato per questo progetto, ma il progetto è in status Non avviato. Si cconsiglia di cambiare lo status del progetto in In Corso';
$lang['project_status'] = 'Status';
$lang['project_status_1'] = 'Non partito';
$lang['project_status_2'] = 'In Corso';
$lang['project_status_3'] = 'In attesa';
$lang['project_status_4'] = 'Finito';

$lang['project_file_uploaded_by_customer'] = 'Cliente';
$lang['project_file_dateadded'] = 'Data  caricata';
$lang['project_file_filename'] = 'Filename';
$lang['project_file__filetype'] = 'Filetype';
$lang['project_file_visible_to_customer'] = 'Visibile al cliente';
$lang['project_file_uploaded_by'] = 'Caricato da';
$lang['edit_project'] = 'Modifica Progetto';
$lang['copy_project'] = 'Copia Progetto';
$lang['delete_project'] = 'Cancella Progetto';
$lang['project_task_assigned_to_user'] = 'Compito assegnato a te';
$lang['seconds'] = 'Secondi';
$lang['hours'] = 'Ore';
$lang['minutes'] = 'Minuti';
$lang['project']                 = 'Progetto';
$lang['project_lowercase']       = 'progetto';
$lang['projects']                = 'Progetto';
$lang['projects_lowercase']      = 'progetto';
$lang['project_settings']      = 'Impostazioni Progetto';
$lang['project_invoiced_successfully']             = 'Progetto Fatturato con successo';
$lang['new_project']             = 'Nuovo Progetto';
$lang['project_files']            = 'File';
$lang['project_activity']            = 'Attività';
$lang['project_name']            = 'Nome Progetto';
$lang['project_description']            = 'Descrizione Progetto';
$lang['project_customer']            = 'Cliente';
$lang['project_start_date']            = 'Data di Avvio';
$lang['project_datecreated']            = 'Data di Creazione';
$lang['project_deadline']            = 'Data Fine';
$lang['project_billing_type']            = 'Tipo di Fatturazione';
$lang['project_billing_type_fixed_cost']            = 'Costo Fisso';
$lang['project_billing_type_project_hours']            = 'Ore Progetto';
$lang['project_billing_type_project_task_hours']            = 'Ore di attività';
$lang['project_billing_type_project_task_hours_hourly_rate']            = 'Base della tariffa oraria';
$lang['project_rate_per_hour']            = 'Tariffa oraria';
$lang['project_total_cost']            = 'Costo totale';
$lang['project_members']            = 'Membri Progetto';
$lang['project_member_removed']     = 'Membro del Progetto rimosso correttamente';
$lang['project_overview']           = 'Panoramica del Progetto';
$lang['project_gant']            = 'Visualizzazione Gantt';
$lang['project_milestones']            = 'Beta';
$lang['project_milestone_order']            = 'Ordine';
$lang['project_milestone_duedate_passed']            = 'Duedate superata';
$lang['record_timesheet']            = 'Scheda Attività';
$lang['new_milestone']            = 'Nuova Beta';
$lang['edit_milestone']            = 'Modifica Beta';
$lang['milestone_name']            = 'Nome';
$lang['milestone_due_date']            = 'Data scadenza';
$lang['project_milestone']            = 'Beta';
$lang['project_notes']            = 'Note';
$lang['project_timesheets']            = 'Scheda Attività';
$lang['project_timesheet']            = 'Scheda';
$lang['milestone_total_logged_time']            = 'Orario di Accesso';
$lang['project_overview_total_logged_hours']            = 'Ore di Accesso Totali';
$lang['milestones_uncategorized']            = 'Senza categoria';
$lang['milestone_no_tasks_found']            = 'Nessuna attività trovata';
$lang['project_copied_successfully']            = 'I dati del progetto sono stati copiati correttamente';
$lang['failed_to_copy_project']            = 'I dati del progetto non sono stati copiati';
$lang['copy_project_task_include_check_list_items']            = 'Elementi da copiare';
$lang['copy_project_task_include_assignees']            = 'Copia gli stessi assegnatari ';
$lang['copy_project_task_include_followers']            = 'Copia gli stessi follower ';

$lang['project_days_left']            = 'Giorni Rimasti';
$lang['project_open_tasks']            = 'Apri Compiti';
$lang['timesheet_stop_timer']            = 'Ferma Timer';
$lang['failed_to_add_project_timesheet_end_time_smaller']            = 'Aggiunta al foglio di presenza fallita. L\'ora di termine è inferiore a quella di inizio';
$lang['project_timesheet_user']            = 'Membro';
$lang['project_timesheet_start_time']            = 'Ora di Inizio';
$lang['project_timesheet_end_time']            = 'Ora di Termine';
$lang['project_timesheet_time_spend']            ='Tempo Trascorso';
$lang['project_timesheet_task']            = 'Compito';
$lang['project_invoices']                = 'Fattura';
$lang['total_logged_hours_by_staff']            = 'Totale Orario di Accesso';
$lang['invoice_project']            = 'Fattura Progetto';
$lang['invoice_project_info']            = 'Informazini Fattura progetto';
$lang['invoice_project_data_single_line']            = 'Riga singola';
$lang['invoice_project_data_task_per_item']            = 'Compito per oggetto';
$lang['invoice_project_data_timesheets_individually']            = 'Tutti i fogli di presenza individualmente';
$lang['invoice_project_item_name_data']            = 'Nome oggetto';
$lang['invoice_project_description_data']            = 'Descrizione';
$lang['invoice_project_projectname_taskname']            = 'Nome progetto + Nome compito';
$lang['invoice_project_all_tasks_total_logged_time']            = 'Tutti i compiti + totale tempo di accesso per compito';
$lang['invoice_project_project_name_data']            = 'Nome progetto';
$lang['invoice_project_timesheet_individually_data']            = 'Ora di inizio foglio di presenza + ora termine + tempo di accesso totale';
$lang['invoice_project_total_logged_time_data']            = 'Tempo di accesso totale';

$lang['project_allow_client_to'] = 'Consenti al cliente di %s';
$lang['project_setting_view_task_attachments'] = 'Visualizza scheda progetto';
$lang['project_setting_view_task_checklist_items'] = 'Visualizza oggetti lista di controllo compiti ';
$lang['project_setting_upload_files'] = 'carica files';
$lang['project_setting_view_task_comments'] = 'visualizza commenti compito';
$lang['project_setting_upload_on_tasks'] = 'carica allegati ai compiti';
$lang['project_setting_view_task_total_logged_time'] = 'visualizza tempo di accesso totale compito';
$lang['project_setting_open_discussions'] = 'apri discussioni';
$lang['project_setting_comment_on_tasks'] = 'commenta sui compiti progetto ';
$lang['project_setting_view_tasks'] = 'visualizza compiti';
$lang['project_setting_view_milestones'] = 'visualizza pietre miliari';
$lang['project_setting_view_gantt'] = 'visualizza Gantt';
$lang['project_setting_view_timesheets'] = 'visualizza fogli di presenza';
$lang['project_setting_view_activity_log'] = 'visualizza registro attività';
$lang['project_setting_view_team_members'] = 'visualizza membri del team';

$lang['project_discussion_visible_to_customer_yes']                 = 'Visibile';
$lang['project_discussion_visible_to_customer_no']                 = 'Non Visibile';

$lang['project_discussion_posted_on']                 = 'Pubblicato il %s';
$lang['project_discussion_posted_by']                 = 'Pubblicato da %s';
$lang['project_discussion_failed_to_delete']                 = 'Eliminazione di discussione fallita';
$lang['project_discussion_deleted']                 = 'Discussione eliminata';
$lang['project_discussion_no_activity']                 = 'Nessuna attività';
$lang['project_discussion']                 = 'Discussione';
$lang['project_discussions']                 = 'Discussioni';
$lang['edit_discussion'] = 'Crea Discussione';
$lang['new_project_discussion'] = 'Crea Discussione';
$lang['project_discussion_subject'] = 'Oggetto';
$lang['project_discussion_description'] = 'Descrizione';
$lang['project_discussion_show_to_customer'] = 'Visibile al cliente';
$lang['project_discussion_total_comments'] = 'Commenti Totali';
$lang['project_discussion_last_activity'] = 'Ultima Attività';
$lang['discussion_add_comment'] = 'Aggiungi commento';
$lang['discussion_newest'] = 'Più Recente';
$lang['discussion_oldest'] = 'Più Vecchio';
$lang['discussion_attachments'] = 'allegato';
$lang['discussion_send'] = 'Invia';
$lang['discussion_reply'] = 'Risposta';
$lang['discussion_edit'] = 'Modifica';
$lang['discussion_edited'] = 'Modificato';
$lang['discussion_you'] = 'Tu';
$lang['discussion_save'] = 'Salva';
$lang['discussion_delete'] = 'Cancella';
$lang['discussion_view_all_replies'] = 'Vedi tutte le repliche';
$lang['discussion_hide_replies'] = 'Nascondi le repliche';
$lang['discussion_no_comments'] = 'Nessun commento';
$lang['discussion_no_attachments'] = 'Nessun allegato';
$lang['discussion_attachments_drop'] = 'Drag and drop per caricare file';
$lang['project_note'] = 'Note';
$lang['project_note_private'] = 'Note Private';
$lang['project_save_note'] = 'Salva Note';

# Progetto Activity
$lang['project_activity_created'] = 'Crea un progetto';
$lang['project_activity_updated'] = 'Aggiorna Progetto';
$lang['project_activity_removed_team_member'] = 'Rimuovi un membro';
$lang['project_activity_added_team_member'] = 'Aggiungi un nuovo membro';
$lang['project_activity_marked_all_tasks_as_complete'] = 'Segnala come attività completata';
$lang['project_activity_recorded_timesheet'] = 'Scheda attività Registrato';
$lang['project_activity_task_name'] = 'Compito:';
$lang['project_activity_deleted_discussion'] = 'Cancella Discussione';
$lang['project_activity_created_discussion'] = 'Crea discussione';
$lang['project_activity_updated_discussion'] = 'Aggiorna Discussione';
$lang['project_activity_commented_on_discussion'] = 'Commenta discussione';
$lang['project_activity_deleted_discussion_comment'] = 'Cancella discussione';
$lang['project_activity_deleted_milestone'] = 'Cancella Beta';
$lang['project_activity_updated_milestone'] = 'Aggiorna Beta';
$lang['project_activity_created_milestone'] = 'Crea una nuova Beta';
$lang['project_activity_invoiced_project'] = 'Fatture Progetto';
$lang['project_activity_task_marked_complete'] = 'Segnala come compito completato';
$lang['project_activity_task_unmarked_complete'] = 'Non segnalare come compito completato';
$lang['project_activity_task_deleted'] = 'Compito Eliminato';
$lang['project_activity_new_task_comment'] = 'Commenta compito';
$lang['project_activity_new_task_attachment'] = 'Allega documento al compito';
$lang['project_activity_new_task_assignee'] = 'Aggiungi nuovo assegnatario al compito';
$lang['project_activity_task_assignee_removed'] = 'Rimuovi assegnatario al compito';
$lang['project_activity_task_timesheet_deleted'] = 'Rimuovi scheda';
$lang['project_activity_uploaded_file'] = 'File progetto caricato';
$lang['project_activity_status_updated'] = 'Modifica stato progetto';
$lang['project_activity_visible_to_customer'] = 'Visibile al cliente';
$lang['project_activity_project_file_removed'] = 'File Progetto rimosso';

# Notifications - DEPRECATED - THESE notifications are DEPRECATED and will be removed in further released don't translate them
$lang['not_customer_uploaded_project_file'] = 'Nuovo file aggiunto';
$lang['not_customer_created_new_project_discussion'] = 'Nuova discussione al progetto aggiunta';
$lang['not_customer_commented_on_project_discussion'] = 'Nuovo commento al progetto aggiunta';

# Customers area
$lang['clients_my_estimates'] = 'Le Mie stime';
$lang['client_no_reply'] = 'Non replicare';
$lang['clients_nav_projects'] = 'Progetto';
$lang['clients_my_projects'] = 'Miei Progetti';
$lang['client_profile_image'] = 'Immagine Profilo';

/////
$lang['sales_report_cancelled_invoices_not_included'] = 'Fatture annullate escluse dal rapporto';
$lang['invoices_merge_cancel_merged_invoices'] = 'Contrassegna le fatture unite come cancellate invece di eliminarle';
$lang['invoice_marked_as_cancelled_successfully'] = 'Fattura contrassegnata come cancellata con successo';
$lang['invoice_unmarked_as_cancelled'] = 'Fattura non contrassegnata come cancellata con successo';
$lang['tasks_reminder_notification_before_help'] = 'Notifica assegnatari compito sulla scadenza prima di X giorni. La notifica/email viene spedita solo agli assegnatari.';
$lang['tasks_reminder_notification_before'] = 'Promemoria scadenza compito prima di (Giorni)';
$lang['not_task_deadline_reminder'] = 'Promemoria scadenza compito';
$lang['dt_length_menu_all'] = 'Tutto';
$lang['task_not_finished'] = 'Non Completato';
$lang['task_billed_cant_start_timer'] = 'Compito addebitato. Il timer non può avviarsi';
$lang['invoice_task_billable_timers_found'] = 'Timer avviati trovati';
$lang['project_timesheet_not_updated'] = 'Foglio presenze non influenzato';
$lang['project_invoice_task_no_timers_found'] = 'Nessun timer trovato per questo compito';
$lang['invoice_project_tasks_not_started'] = 'Non ancora iniziato | Data Avvio: %s';
$lang['invoice_project_see_billed_tasks'] = 'Vedi compiti che saranno addebitati su questa fattura';
$lang['invoice_project_all_billable_tasks_marked_as_finished'] = 'Tutti i compiti addebitati saranno contrassegnati come terminati';
$lang['invoice_project_nothing_to_bill'] = 'Nessun compito da addebitare. Non esitare ad aggiungere quello che vuoi negli oggetti fattura.';
$lang['invoice_project_start_date_tasks_not_passed'] = 'Compiti con data di inizio future non possono essere addebitati ';
$lang['invoice_project_stop_all_timers'] = 'Interompi tutti I timer';
$lang['invoice_project_stop_billable_timers_only'] = 'Interrompi solo timer fatturabili';
$lang['project_tasks_total_timers_stopped'] = 'Totale di %s timer interrotti';
$lang['project_invoice_timers_started'] = 'Timer compito trovati in esecuzione su compiti addebitabili, impossibile creare la fattura. Si prega di interrompere i timer compito per creare la fattura.';
$lang['task_start_timer_only_assignee'] = 'Devi essere assegnato questo compito per dare avviare il timer!';
$lang['task_comments'] = 'Commenti';
$lang['invoice_total_tax'] = 'Tassa totale';
$lang['estimates_total_tax'] = 'Tassa Totale';
$lang['report_invoice_total_tax'] = 'Tassa Totale';
$lang['home_tickets'] = 'Tickets';
$lang['home_project_activity'] = 'Attività progetti più recente';
$lang['home_project_activity_not_found'] = 'Nessuna attività progetti trovata';
$lang['view_tracking'] = 'Visualizzazioni Tracking';
$lang['view_date'] = 'Data';
$lang['view_ip'] = 'Indirizzo IP';
$lang['article_total_views'] = 'Visualizzazioni Totali';
$lang['leads_source'] = 'Fonte';
$lang['invoices_available_for_merging'] = 'Fatture disponibili per l\'unione';
$lang['invoices_merge_discount'] = 'Dovrai applicare lo sconto al totale di %s manualmente per questa fattura';
$lang['invoice_merge_number_warning'] = 'Unire le fatture creerà degli spazi vuoti nei numeri di fattura. Si prega di non unire le fatture se non si vogliono spazi vuoti nella cronologia di fatturazione. Avrete inoltre l\'opzione di regolare manualmente i numeri di fattura se vorrete riempire gli spazi vuoti.';
$lang['invoice_mark_as'] = 'Contrassegna com %s';
$lang['invoice_unmark_as'] = 'Non contrassegnare come %s';
$lang['invoice_status_cancelled'] = 'Cancellato';
$lang['tasks_reminder_notification_before_help'] = 'Invia notifica agli assegnatari compito della scadenza prima di giorni. La notifica/email viene spedita solo agli assegnatari.';

# Version 1.1.0
$lang['project_invoice_select_all_tasks'] = 'Seleziona tutti i compiti';
$lang['lead_company'] = 'Azienda';

# Version 1.1.1
$lang['admin_auth_forgot_password_button'] = 'Conferma';
$lang['task_assigned'] = 'Assegnato a';
$lang['switch_to_pipeline'] = 'Passa alla pipeline';
$lang['switch_to_list_view'] = 'Passa alla lista';
$lang['estimates_pipeline'] = 'Stime Pipeline';
$lang['estimates_pipeline_sort'] = 'Ordina per';
$lang['estimates_sort_expiry_date'] = 'Data di Scadenza';
$lang['estimates_sort_pipeline'] = 'Ordine Pipeline';
$lang['estimates_sort_datecreated'] = 'Date Creazione';
$lang['estimates_sort_estimate_date'] = 'Data Stima';
$lang['estimate_set_reminder_title'] = 'Imposta Promemoria Stima';
$lang['invoice_set_reminder_title'] = 'Imposta Promemoria Fattura';
$lang['estimate_reminders'] = 'Promemoria';
$lang['invoice_reminders'] = 'Promemoria';
$lang['estimate_notes'] = 'Note';
$lang['estimate_add_note'] = 'Aggiungi Nota';
$lang['dropdown_non_selected_tex'] = 'Nulla di selezionato';
$lang['auto_close_ticket_after'] = 'Chiusura automatica ticket dopo (Ore)';
$lang['event_description'] = 'Descrizione';
$lang['delete_event'] = 'Elimia';
$lang['not_new_ticket_created'] = 'Nuovo ticket aperto nel tuo Dipartimento- %s';
$lang['receive_notification_on_new_ticket'] = 'Ricevi notifica all\'apertura di un nuovo ticket';
$lang['receive_notification_on_new_ticket_help'] = 'Tutti i membri dello staff che appartengono al Dipartimento del ticket riceveranno notifica dell\'apertura del nuovo ticket';
$lang['event_updated'] = 'Evento aggiornato con successo';
$lang['customer_contacts'] = 'Contatti';
$lang['new_contact'] = 'Nuovo Contatto';
$lang['contact'] = 'Contatto';
$lang['contact_lowercase'] = 'contatto';
$lang['contact_primary'] = 'Contatto primario';
$lang['contact_position'] = 'Posizione';
$lang['contact_active'] = 'Attivo';
$lang['client_company_info'] = 'Dettagli azienda';
$lang['proposal_save'] = 'Salva Proposta';
$lang['calendar'] = 'Calendario';
$lang['settings_pdf'] = 'PDF';
$lang['settings_pdf_font'] = 'Font PDF';
$lang['settings_pdf_table_heading_color'] = 'Colore titolo tabella oggetti';
$lang['settings_pdf_table_heading_text_color'] = 'Colore testo tabella oggetti';
$lang['settings_pdf_font_size'] = 'Dimensione font di default';
$lang['proposal_status_draft'] = 'Bozza';
$lang['custom_field_contacts'] = 'Contatti';
$lang['company_primary_email'] = 'Email primaria';
$lang['client_register_contact_info'] = 'Informazioni Contatto Primarie';
$lang['client_register_company_info'] = 'Informazioni Azienda';
$lang['contact_permissions_info'] = 'Assicurati di impostare i permessi adeguati per questo contatto';
$lang['default_leads_kanban_sort'] = 'Ordinamento Potenziali client di default Kan Ban';
$lang['default_leads_kanban_sort_type'] = 'Ordina';
$lang['order_ascending'] = 'Ascendente';
$lang['order_descending'] = 'Discendente';
$lang['calendar_expand'] = 'espandi';
$lang['proposal_reminders'] = 'Promemoria';
$lang['proposal_set_reminder_title'] = 'Imposta promemoria proposta';
$lang['settings_allowed_upload_file_types'] = 'Tipi fle consentiti';
$lang['no_primary_contact'] = 'Questo cliente non ha un contatto primario. Devi impostare un login di contatto primario come cliente. Si racccomanda che tutti i clienti abbiano un contatto primario.';
$lang['leads_merge_customer'] = 'Unione campi cliente';
$lang['leads_merge_contact'] = 'Unione campi contatto';
$lang['leads_merge_as_contact_field'] = 'Unisci come campo contatto';
$lang['lead_convert_to_client_phone'] = 'Telefono';
$lang['invoice_status_report_all'] = 'tutto';
$lang['import_contact_field'] = 'Campo contatto';

$lang['file_uploaded_success'] = 'Non ci sono errori, file caricato con successo';
$lang['file_exceeds_max_filesize'] = 'Il file caricato supera la direttiva upload_max_filesize in php.ini';
$lang['file_exceeds_maxfile_size_in_form'] = 'Il file caricato supera la direttiva MAX_FILE_SIZE specificata nel modulo HTML';
$lang['file_uploaded_partially'] = 'Il file caricato è stato caricato solo parzialmente';
$lang['file_not_uploaded'] = 'Nessun fle caricato';
$lang['file_missing_temporary_folder'] = 'Cartella temporanea mancante';
$lang['file_failed_to_write_to_disk'] = 'Scrittura file su disco fallita.';
$lang['file_php_extension_blocked'] = 'Una estensione PHP ha interrotto il caricamento file.';
$lang['calendar_expand'] = 'Espandi';
$lang['view_pdf'] = 'Visualizza PDF';
$lang['expense_repeat_every'] = 'Ripeti ogni';

# Version 1.1.2
$lang['leads_switch_to_kanban'] = 'Passa a kan ban';
$lang['survey_no_questions'] = 'questo sondaggio non ha ancora domande.';
$lang['survey_submit'] = 'Invia';
$lang['contract_content'] = 'Contratto';
$lang['contract_save'] = 'Salva contratto';
$lang['contract_send_to_email'] = 'Invia a email';
$lang['contract_send_to_client_modal_heading'] = 'Invia contratto a email';
$lang['contract_send_to'] = 'Invia a';
$lang['contract_send_to_client_attach_pdf'] = 'Allega PDF';
$lang['contract_send_to_client_preview_template'] = 'Anteprima Template Email';
$lang['include_attachments_to_email'] = 'Includi allegati ad email';
$lang['contract_sent_to_client_success'] = 'Il contratto è stato inviato con successo a cliente';
$lang['contract_sent_to_client_fail'] = 'Invio contratto fallito';

# Version 1.1.3
$lang['client_invalid_username_or_password'] = 'Nome utente o password non valido';
$lang['client_old_password_incorrect']     = 'La tua vecchia password non è corretta';
$lang['client_password_changed']          = 'La tua password è stata cambiata';

# Version 1.1.4
$lang['total_leads_deleted'] = 'Totale potenziali clienti eliminati: %s';
$lang['total_clients_deleted'] = 'Totale clienti eliminati: %s';
$lang['confirm_action_prompt'] = 'Sei sicuro di voler eseguire questa azione?';
$lang['mass_delete'] = 'Elimina in Massa';
$lang['email_protocol'] = 'Protocollo Email';
$lang['add_edit_members'] = 'Aggiungi/Modifica Membri';
$lang['project_overview_logged_hours'] = 'Ore di Accessso:';
$lang['project_overview_billable_hours'] = 'Ore Addebitabili:';
$lang['project_overview_billed_hours'] = 'Ore Addebitate:';
$lang['project_overview_unbilled_hours'] = 'Ore Non Addebitate:';
$lang['calendar_first_day'] = 'Primo Giorno';
$lang['permission_view'] = 'Visualizza';
$lang['permission_edit'] = 'Modifica';
$lang['permission_create'] = 'Crea';
$lang['permission_delete'] = 'Elimina';
$lang['permission'] = 'Permessso';
$lang['permissions'] = 'Permessi';
$lang['proposals_pipeline'] = 'Pipeline Proposte';
$lang['proposals_pipeline_sort'] = 'Ordina Per';
$lang['proposals_sort_open_till'] = 'Valido fino a';
$lang['proposals_sort_pipeline'] = 'Ordine Pipeline';
$lang['proposals_sort_datecreated'] = 'Data Creato';
$lang['proposals_sort_proposal_date'] = 'Data Proposta';
$lang['is_not_staff_member'] = 'Non membro staff';
$lang['lead_created'] = 'Creato';
$lang['access_tickets_to_none_staff_members'] = 'Non consentire accesso ai ticket per nessun membro staff';
$lang['project_expenses'] = 'Spese';
$lang['expense_currency'] = 'Valuta';
$lang['currency_valid_code_help'] = 'Assicurati di inserire un codice valuta valido.';
$lang['week'] = 'Settimana';
$lang['weeks'] = 'Settimane';
$lang['month'] = 'Mese';
$lang['months'] = 'Mesi';
$lang['year'] = 'Anno';
$lang['years'] = 'Anni';
$lang['expense_report_category'] = 'Categoria';
$lang['expense_paid_via'] = 'Pagato Via %s';
$lang['item_as_expense'] = '[Spesa]';
$lang['show_help_on_setup_menu'] = 'Mostra oggetto menu aiuto su menu setup';
$lang['customers_summary_total'] = 'Totale Clienti';
$lang['filter_by'] = 'Filtta per';
$lang['re_captcha'] = 'reCAPTCHA';
$lang['recaptcha_site_key'] = 'Chiave Sito';
$lang['recaptcha_secret_key'] = 'Chiave segreta';
$lang['recaptcha_error'] = 'Il campo reCAPTCHA afferma che sei un robot.';
$lang['smtp_username'] = 'Nome Utente SMTP';
$lang['smtp_username_help'] = 'Compila solo se il tuo client email us ail nome utente per l\'accessso SMTP.';
$lang['pinned_project']= 'Progetto Spillato';
$lang['pin_project']= 'Spilla Progetto';
$lang['unpin_project']= 'Rimuovi Spilla Progetto';
$lang['smtp_encryption']= 'Criptazione Email';
$lang['smtp_encryption_none']= 'Nessuna';
$lang['show_proposals_on_calendar']= 'Proposals';
$lang['invoice_project_see_billed_expenses']= 'Guarda spese che saranno addebitate su questa fattura';
$lang['project_overview_expenses'] = 'Spese Totali';
$lang['project_overview_expenses_billable'] = 'Spese Addebitabili';
$lang['project_overview_expenses_billed'] = 'Spese Addebitate';
$lang['project_overview_expenses_unbilled'] = 'Spese Non Addebitate';
$lang['announcement_date_list'] = 'Data';
$lang['project_setting_view_finance_overview'] = 'visualizza panoramica finanza';
$lang['show_all_tasks_for_project_member'] = 'Consenti a tutto lo staff di vedere tutti i compiti relative ai progetti (include non-staff)';
$lang['not_staff_added_as_project_member'] = 'Sei stato aggiunto come memr del progetto';
$lang['report_expenses_base_currency_select_explanation'] = 'Devi selezionare la valuta perché il sistema ha trovato valute diverse utilizzate per le spese.';

# Version 1.1.6
$lang['project_activity_recorded_expense'] = 'Spese Registrate';
$lang['save_customer_and_add_contact'] = 'Salva e crea contatto';
$lang['tickets_chart_weekly_opening_stats'] = 'Statistiche Settimanali';
$lang['related_knowledgebase_articles'] = 'Articoli Correlati';
$lang['detailed_overview'] = 'Panoramica Compiti';
$lang['tasks_total_checklists_finished'] = 'Totale oggetti lista di controllo contrassegnati come terminati';
$lang['tasks_total_added_attachments'] = 'Totale allegati aggiunti';
$lang['tasks_total_comments'] = 'Totale commenti';
$lang['task_finished_on_time'] = 'Terminato in tempo?';
$lang['task_finished_on_time_indicator'] = 'Si';
$lang['task_not_finished_on_time_indicator'] = 'No';
$lang['task_filter_fetch_month_by'] = 'Recupera mese da';
$lang['filter'] = 'Fitra';
$lang['task_filter_detailed_all_months'] = 'Tutti i Mesi';
$lang['kb_article_slug'] = 'Slug';

# Version 1.1.7
$lang['email_template_ticket_warning'] = 'Se il ticket viene importato con il piping email piping e il contatto non esiste nel CRM i campi non saranno sostituiti.';
$lang['auto_stop_tasks_timers_on_new_timer'] = 'Interrompi tutti gli altri timer avviati quando sia avvia un nuovo timer';
$lang['notification_when_customer_pay_invoice'] = 'Ricevi notifica quando il cliente dalla fattura (built-in)';
$lang['not_invoice_payment_recorded'] = 'Nuovo pagamento fattura- %s';
$lang['email_template_contact_warning'] = 'Se il contatto non ha effettuato l\'accesso quando esegue l\'azione i campi unione contatto non saranno sostituiti.';
$lang['theme_style'] = 'Stile Tema';
$lang['change_role_permission_warning'] = 'Cambiare i permessi di ruolo ora non influenzerà i permessi degli attuali membri dello staff che utilizzano questo ruolo.';
$lang['task_copied_successfully'] = 'Compito copiato con successo';
$lang['failed_to_copy_task'] = 'Copia compito fallita';
$lang['not_project_file_uploaded'] = 'Nuovo file progetto aggiunto';
$lang['settings_calendar_color'] = '%s Colore';
$lang['settings_calendar_colors_heading'] = 'Stile';
$lang['reminder'] = 'Promemoria';
$lang['back_to_tasks_list'] = 'Torna alla lista compiti';
$lang['copy_task_confirm'] = 'Conferma';
$lang['changing_items_affect_warning'] = 'Cambiare le info oggetto non influenzerà le fatture/stime create.';
$lang['tax_is_used_in_expenses_warning'] = 'Non puoi aggiornare questa tassa poiché sono state trovate transazioni di spesa che utilizzano questa tassa.';
$lang['note'] = 'Nota';
$lang['leads_staff_report_converted'] = 'Totale clienti potenziali convertiti';
$lang['leads_staff_report_created'] = 'Totale clienti potenziali creati';
$lang['leads_staff_report_lost'] = 'Totale clienti potenziali persi';
$lang['client_go_to_dashboard'] = 'Torna al portale';
$lang['show_estimate_reminders_on_calendar'] = 'Promemoria Stima';
$lang['show_invoice_reminders_on_calendar'] = 'Promemoria Fattura';
$lang['calendar_estimate_reminder'] = 'Promemoria Stima';
$lang['calendar_invoice_reminder'] = 'Promemoria Fattura';
$lang['show_proposal_reminders_on_calendar'] = 'Promemoria Proposta';
$lang['calendar_proposal_reminder'] = 'Promemoria Proposta';
$lang['proposal_due_after']= 'Proposta in Scddnza Dopo (giorni)';
$lang['project_progress']= 'Progresso';
$lang['calculate_progress_through_tasks']= 'Calcola progresso tramite compiti';
$lang['allow_customer_to_change_ticket_status']= 'Consenti al cliente di cambiare lo status ticket dall\'area clienti ';
$lang['switch_to_general_report']= 'Passa al rapporto staff';
$lang['switch_to_staff_report']= 'Passa al rapporto generale';
$lang['generate']= 'Genera';
$lang['from_date']= 'Da data';
$lang['to_date']= 'A data';
$lang['not_results_found']= 'Nessun risultato trovato';
$lang['lead_lock_after_convert_to_customer']= 'Non consentire la modifica del potenziale cliente dopo la conversione in cliente (non si applica agli amministratori)';
$lang['default_pipeline_sort'] = 'Ordine pipeline di default';
$lang['not_goal_message_failed'] = 'Non siamo riusciti ad ottenere l\'obiettivo!<br /> Tipo Obbiettivo: %s
<br />Obbiettivo: %s
<br />Totale Obbiettivo: %s
<br />Data Inizio: %s
<br /> Data Termine: %s';
$lang['toggle_full_view'] = 'cambia visuale intera';
$lang['not_estimate_invoice_deleted'] = 'ha eliminato la fattura creata';
$lang['not_task_new_comment'] = 'ha commentato il compito %s';
# Version 1.1.8
$lang['invoice_number_exists'] = 'Questo numero di fattura esiste per l\'anno in corso.';
$lang['estimate_number_exists'] = 'Questo numero di stima esiste per l\'anno in corso.';
$lang['email_exists'] = 'Email già esistente';
$lang['not_uploaded_project_file'] = 'Nuovo file caricato';
$lang['not_created_new_project_discussion'] = 'Nuova discussione progetto creata';
$lang['not_commented_on_project_discussion'] = 'Nuovo commento sulla discussione progetto';
$lang['all_staff_members'] = 'Tutti i membri dello staff';
$lang['help_project_permissions'] = 'VISUALIZZA consente ai membri dello staff di vedere TUTTI i progetti. Se vuoi che possano vedere solo i progetti ai quali sono assegnati (aggiunti come membri), non concedere i permessi VISUALIZZA.';
$lang['help_tasks_permissions'] = 'VISUALIZZA consente ai membri dello staff di vedere TUTTI i compiti. Se vuoi che possano vedere solo i progetti ai quali sono assegnati (aggiunti come membri), non concedere i permessi VISUALIZZA.';
$lang['expense_recurring_days'] = 'Giorno/i';
$lang['expense_recurring_weeks'] = 'Settimana/e';
$lang['expense_recurring_months'] = 'Mese/i';
$lang['expense_recurring_years'] = 'Anno/i';
$lang['reset_to_default_color'] = 'Resetta al colore di default';
$lang['pdf_logo_width'] = 'Larghezza Logo (PX)';
$lang['drop_files_here_to_upload'] = 'Scarica qui i file per caricarli';
$lang['browser_not_support_drag_and_drop'] = 'Il tuo browser non sopporta il drag\'n\'drop per il caricamento file';
$lang['remove_file'] = 'Rimuovi file';
$lang['you_can_not_upload_any_more_files'] = 'Non puoi caricare più file';
$lang['custom_field_only_admin'] = 'Limita la visibilità ai soli amministratori';
$lang['leads_default_source'] = 'Fonte di default';
$lang['clear_activity_log'] = 'Azzera registro';
$lang['default_contact_permissions'] = 'Permessi di contatto di default';
$lang['invoice_activity_marked_as_cancelled'] = 'ha contrassegnato la fattura come cancellata';
$lang['invoice_activity_unmarked_as_cancelled'] = 'non ha contrassegnato la fattura come cancellata';
$lang['wait_text'] = 'Attendere prego...';
$lang['projects_summary'] = 'Sommario progetto';
$lang['dept_imap_host'] = 'IMAP Host';
$lang['dept_encryption'] = 'Criptazione';
$lang['dept_email_password'] = 'Password';
$lang['dept_email_no_encryption'] = 'Nessuna criptazione';
$lang['failed_to_decrypt_password'] = 'Decriptazione password fallita';
$lang['delete_mail_after_import'] = 'Elimina mail dopo l\'importazione?';
$lang['expiry_reminder_enabled'] = 'Invia promemoria scadenza';
$lang['send_expiry_reminder_before'] = 'Invia promemoria scadenza (GIORNI) prima';
$lang['not_expiry_reminder_sent'] = 'Promemoria scadenza inviato';
$lang['send_expiry_reminder'] = 'Invia promemoria scadenza';
$lang['sent_expiry_reminder_success'] = 'Promemoria scadenza inviato con successo';
$lang['sent_expiry_reminder_fail'] = 'Invio promemoria scadenza fallito';
$lang['leads_default_status'] = 'Status di default';
$lang['item_description_placeholder'] = 'Descrizione';
$lang['item_long_description_placeholder'] = 'Descrizione lunga';
$lang['item_quantity_placeholder'] = 'Quantità';
$lang['item_rate_placeholder'] = 'Tariffa';
$lang['tickets_summary'] = 'Sommario Tickets';
$lang['tasks_list_priority'] = 'Priorità';
$lang['ticket_status_db_2'] = 'In Corso';
$lang['ticket_status_db_1'] = 'Aperto';
$lang['ticket_status_db_3'] = 'Risposto';
$lang['ticket_status_db_4'] = 'In Sospeso';
$lang['ticket_status_db_5'] = 'Chiuso';
$lang['ticket_priority_db_1'] = 'Bassa';
$lang['ticket_priority_db_2'] = 'Media';
$lang['ticket_priority_db_3'] = 'Alta';
$lang['customer_have_projects_by'] = 'Contiene progetti per status %s';
$lang['customer_have_proposals_by'] = 'Contiene  proposte per status %s';
$lang['do_not_redirect_payment'] = 'Non ridirigermi all\'elaboratore pagamenti';
$lang['project_tickets'] = 'Tickets';
$lang['invoice_report'] = 'Rapporto Fattura';
$lang['payment_modes_report'] = 'Modalità di Pagamento (Transazioni)';
$lang['customer_admins'] = 'Admins Cliente';
$lang['assign_admin'] = 'Assegna admin';
$lang['customer_admin_date_assigned'] = 'Data Assegnata';
$lang['customer_admin_login_as_client_message'] = 'Salve %s. Sei stato aggiunto come admin a questo cliente.';
$lang['ticket_form_validation_file_size'] = 'La dimensione file deve essere inferiore a %s';
$lang['has_transactions_currency_base_change'] = 'Cambiare la valuta base è possibile solo se non ci sono transazioni registrate in tale valuta. Elimina le transazioni per cambiare la valuta base';
$lang['customers_sort_all'] = 'Tutto';

# Version 1.1.9
$lang['use_recaptcha_customers_area'] = 'Consenti recaptcha nell\'area clienti (Accesso/Registrazione)';
$lang['project_marked_as_finished'] = 'Progetto completato';
$lang['project_status_updated'] = 'Status progetto aggiornato';
$lang['remove_decimals_on_zero'] = 'Rimuovi i decimali sui numeri/denaro con zero decimale (2,00 diventerà due, mentre 2,25 rimarrà 2,25)';
$lang['remove_tax_name_from_item_table'] = 'Rimuovi il nome tassa dalla fila tabella oggetto (Fatture/Stime)';


# Version 1.2.0
$lang['not_billable_expenses_by_categories'] = 'Spese non addebitabili per categorie';
$lang['billable_expenses_by_categories'] = 'Spese addebitabili per categorie';
$lang['format_letter_size'] = 'A4 Ritratto';
$lang['pdf_formats'] = 'Formati documento';
$lang['swap_pdf_info'] = 'Scambia Dettagli Azienda/Cliente (dettagli azienda sul lato destro, dettagli cliente sul lato sinistro)';
$lang['invoice_estimate_pdf_text_color'] = 'Colore testo Fattura/Stima';
$lang['expenses_filter_by_categories'] = 'Per Categorie';
$lang['task_copy'] = 'Copia';
$lang['estimate_status'] = 'Status';
$lang['expenses_report_exclude_billable'] = 'Escludi Spese Addebitabili';
$lang['expenses_total'] = 'Totale';
$lang['estimate_activity_added_attachment'] = 'Allegato aggiunto';
$lang['show_to_customer'] = 'Mostra al cliente';
$lang['hide_from_customer'] = 'Nascondi al cliente';
$lang['expenses_report_total'] = 'Totale';
$lang['expenses_report'] = 'Rapporto spese';
$lang['expenses_report_tax'] = 'Tassa';
$lang['expenses_report_total_tax'] = 'Totale Tassa';
$lang['expenses_detailed_report'] = 'Rapporto Dettagliato';
$lang['expense_not_billable'] = 'Non Addebitabile';
$lang['notification_settings'] = 'Impostazioni notifiche';
$lang['staff_with_roles'] = 'Membri staff con ruoli';
$lang['specific_staff_members'] = 'Membri Staff Specifici';
$lang['proposal_mark_as'] = 'Contrassegna come %s';
$lang['kb_report_total_answers'] = 'Totale';
$lang['ticket_message_edit'] = 'Modifica';
$lang['invoice_files'] = 'Files Fattura';
$lang['estimate_files'] = 'Files Stima';
$lang['proposal_files'] = 'Files Proposta';
$lang['invoices_awaiting_payment'] = 'Fatture in Attesa di Pagamento';
$lang['tasks_not_finished'] = 'Compiti Non Terminati';
$lang['outstanding_invoices'] = 'Fatture Arretrate';
$lang['past_due_invoices'] = 'Fatture in Scadenza Passate';
$lang['paid_invoices'] = 'Fatture Pagate';
$lang['invoice_estimate_year'] = 'Anno';
$lang['no_results_text_search_dropdown'] = 'Nessun Risultato Corrispondente';
$lang['task_stats_logged_hours'] = 'Ore Accesso';
$lang['leads_converted_to_client'] = 'Clienti Potenziali Convertit';
$lang['task_assigned_from'] = 'Questo compito è stato assegnato a te da %s';
$lang['auto_check_for_new_notifications'] = 'Controllo automatico nuove notifiche (Secondi – Imposta a 0 per disattivare)';
$lang['recurring_ends_on'] = 'Termina il (lascia bianco per mai)';
$lang['new_note'] = 'Nuova Nota';
$lang['my_tickets_assigned'] = 'Tickets assegnati a me ';
$lang['filter_by_assigned'] = 'Per Membro Assegnato';
$lang['staff_stats_total_logged_time'] = 'Totale Orario di Accesso';
$lang['staff_stats_last_month_total_logged_time'] = 'Orario di Accesso Mese Scorso';
$lang['staff_stats_this_month_total_logged_time'] = 'Orario di Accesso Questo Mese';
$lang['staff_stats_last_week_total_logged_time'] = 'Orario di AccessoSettimana Scorsa';
$lang['staff_stats_this_week_total_logged_time'] = 'Orario di Accesso Questa Settimana';
// Dont change this because are translated before for the projects timesheets and now are only used for readibility.
$lang['timesheet_user'] = $lang['project_timesheet_user'];
$lang['timesheet_start_time'] = $lang['project_timesheet_start_time'];
$lang['timesheet_end_time'] = $lang['project_timesheet_end_time'];
$lang['timesheet_time_spend'] = $lang['project_timesheet_time_spend'];
$lang['task_timesheets'] = $lang['project_timesheets'];
$lang['task_log_time_start'] = $lang['project_timesheet_start_time'];
$lang['task_log_time_end'] = $lang['project_timesheet_end_time'];
$lang['task_single_log_user'] = $lang['project_timesheet_user'];
# Version 1.2.2
$lang['milestone_description'] = 'Descrizione';
$lang['description_visible_to_customer'] = 'Mostra descrizione al cliente';
$lang['upcoming_tasks'] = 'Compiti Imminenti';
$lang['paymentmethod_two_checkout_account_number'] = 'Numero Account  (ID Venditore)';
$lang['paymentmethod_two_checkout_private_key'] = 'Chiave Privata';
$lang['paymentmethod_two_checkout_publishable_key'] = 'Chiave Pubblicabile';
$lang['payment_credit_card_number'] = 'Numero di Carta';
$lang['payment_credit_card_expiration_date'] = 'Data di Scadenza';
$lang['payment_billing_email'] = 'Email';
$lang['payment_billing_name'] = 'Nome Fatturazione';
$lang['submit_payment'] = 'Invia Pagamento';
$lang['2checkout_notice_payment'] = 'I dettagli di carta di credito vengono elaborati tramite token sicuro fornito da 2Checkout';
$lang['2checkout_usage_notice'] = 'SSL necessario se utilizzi la API di pagamento 2Checkout. È richiesto per chiamare in sicurezza la creazione del token e le autorizzazioni. Il sistema può funzionare senza SSL, tuttavia, questo ti metterà fuori idoneità, con rischio di disattivazione dei tuoi permessi API.';
$lang['custom_field_disallow_customer_to_edit'] = 'Non permettere al cliente di modificare questo campo';
$lang['project_due_notice'] = 'Questo progetto è in ritardo di %s giorni';
$lang['not_lead_added_attachment'] = 'aggiunto nuovo allegato al potenziale cliente %s';
$lang['lead_note_date_added'] = 'Nota aggiunta: %s';
$lang['recurring_custom'] = 'Personalizzato';
// don't translate these, only added for better readibility already translated for the expenses custom recurring feature.
$lang['invoice_recurring_months'] = $lang['expense_recurring_months'];
$lang['invoice_recurring_years'] = $lang['expense_recurring_years'];
$lang['invoice_recurring_days'] = $lang['expense_recurring_days'];
$lang['invoice_recurring_weeks'] = $lang['expense_recurring_weeks'];

# Version 1.2.4
$lang['document_direction'] = 'direzione';
$lang['notify_project_members_status_change'] = 'Notifica i membri del progetto sul cambio dello status del progetto';
$lang['not_project_status_updated'] = 'Status progetto aggiornato da %s a %s';
$lang['ticket_not_found'] = 'Ticket non trovato';
$lang['project_not_found'] = 'Progetto non trovato';
$lang['export_project_data'] = 'Esporta dati progetto';
$lang['total_project_members'] = 'Totale Membri Progetto';
$lang['total_project_files'] = 'Files allegati';
$lang['total_project_discussions_created'] = 'Discussioni create';
$lang['project_member'] = 'Membro';
$lang['total_project_discussions_comments'] = 'Totale commenti discussione';
$lang['staff_total_task_assigned'] = 'Totale compiti assegnati';
$lang['staff_total_comments_on_tasks'] = 'Commenti sui compiti';
$lang['project_members_overview'] = 'Panoramica membri progetto';
$lang['project_milestones_overview'] = 'Panoramica pietre miliari';
$lang['total_tasks_in_milestones'] = 'Totale compiti assegnati';
$lang['total_task_members_assigned'] = 'Totale membri assegnati';
$lang['total_task_members_followers'] = 'Totale follower';
$lang['total_milestones'] = 'Totale pietre miliari';
$lang['total_project_worked_days'] = 'Totale giorni di lavoro';
$lang['finance_overview'] = 'Panoramica Finanziaria';
$lang['project_custom_fields'] = 'Campi personalizzati';
$lang['total_tickets_related_to_project'] = 'Totale biglietti collegati al progetto';
$lang['projects_total_invoices_created'] = 'Totale fatture create';
$lang['total_invoiced_amount'] = 'Totale fatture create';
$lang['do_not_send_invoice_payment_email_template_contact'] = 'Non inviare e-mail di registrazione pagamento fattura ai contatti cliente ';
$lang['no_preview_available_for_file'] = 'Nessuna anteprima disponibile per questo file.';
$lang['project_activity_deleted_file_discussion_comment'] = 'Commento discussione file eliminato';
$lang['file_not_found'] = 'File non trovato';
$lang['email_template_discussion_info'] = 'Questo template viene usato sia per entrambe le email di discussione progetto. (Discussioni file e discussioni normali)';
$lang['format_a4_portrait_size'] = 'Ritratto';
$lang['only_show_contact_tickets'] = 'Nel profilo clienti mostra solo ticket relativi al contatto che ha effettuato l\'accesso (Non si applica al contatto primario)';
$lang['cancel_overdue_reminders_invoice'] = 'Impedisci l\'invio di promemoria di scadenza per questa fattura ';
$lang['customer_shipping_address_notice'] = 'Non compilare le informazioni sull\'indirizzo di spedizione se non utilizzerai l\'indirizzo di spedizione sulle fatture cliente ';
$lang['timesheets_overview'] = 'Panoramica fogli di presenza';
$lang['invoice_status_draft'] = 'Bozza';
$lang['save_as_draft'] = 'Salva come Bozza';
$lang['convert_and_save_as_draft'] = 'Converti e salva come bozza';
$lang['convert'] = 'Converti';
$lang['exclude_invoices_draft_from_client_area'] = 'Escludi le fatture con status bozza dall\'area clienti';
$lang['invoice_draft_status_info'] = 'Questa fattura ha lo status di Bozza, lo status cambierà automaticamente quando invierà la fattura al cliente o sarà contrassegnata come inviata.';
$lang['task_info'] = 'Info Compito';
$lang['recurring_tasks'] = 'ricorrente';
// don't translate these, already translated
$lang['task_repeat_every'] = $lang['expense_repeat_every'];
$lang['task_recurring_months'] = $lang['expense_recurring_months'];
$lang['task_recurring_years'] = $lang['expense_recurring_years'];
$lang['task_recurring_days'] = $lang['expense_recurring_days'];
$lang['task_recurring_weeks'] = $lang['expense_recurring_weeks'];
$lang['todays_tasks'] = 'Compiti di oggi';
$lang['payment_mode_invoices_only'] = 'Solo Fatture';
$lang['payment_mode_expenses_only'] = 'Solo Spese';
$lang['task_no_checklist_items_found'] = 'Oggetti lista di controllo non trovati per questo compito';
$lang['task_no_description'] = 'Nessuna descrizione per questo compito';
$lang['expenses_reminders'] = 'Promemoria';
$lang['expense_set_reminder_title'] = 'Imposta promemoria spesa';
$lang['calendar_expense_reminder'] = 'Promemoria spesa';
$lang['recurring_task'] = 'Compito Ricorrente';
$lang['disable_email_from_being_sent'] = 'Impedisci la spedizione di questa e-mail';
$lang['not_sent_indicator'] =  'Non Spedita';
$lang['proposal_status_revised'] =  'Revisionata';
$lang['customer_currency_change_notice'] =  'Se il cliente usa una diversa valuta rispetto alla valuta base, accertarti di selezionare la valuta appropriata per questo cliente. Cambiare la valuta non è possibile una volta registrate le transazioni.';
$lang['click_to_add_content'] =  'Clicca qui per aggiungere contenuto';
$lang['related_to_project'] =  'Questo %s è relativo a %s: %s';
$lang['back_to_lead'] =  'Torna al potenziale cliente';
$lang['add_task_timer_started_warning'] =  'Interrompi l\'attuale timer avviato per questo compito per poter aggiungere un nuovo timer manualmente.';
$lang['sending_email_contact_permissions_warning'] =  'Selezione automatica contatti cliente fallita. Per favore assicurati che il cliente abbia dei contatti associati con permesso %s';

# Version 1.2.6
$lang['currently_supported_currencies'] = 'Valute al momento supportate';
$lang['authorize_notice'] = 'SSL necessario si utilizzi le API di pagamento Authorize.Net AIM. Authorize.net supporta solo 1 valuta per account. Assicurati di aggiungere solo 1 valuta associata al tuo account Authorize nel campo valute.';
$lang['settings_paymentmethod_developer_mode'] = 'Modalità Developer';
$lang['payment_cardholder_name'] = 'Titolare Carta di Credito';
$lang['settings_paymentmethod_authorize_api_login_id'] =  'Id Accesso ID API';
$lang['settings_paymentmethod_mollie_api_key'] =  'Chiave API';
$lang['settings_paymentmethod_authorize_api_transaction_key'] =  'ID Trransazione API';
$lang['settings_paymentmethod_authorize_secret_key'] =  'Chiave Segreta';
$lang['leads_report_converted_notice'] =  'Solo i potenziali clienti che appartengono allo status di default Cliente saranno presi come potenziali clienti convertiti, se il potenziale cliente appartiene allo status di default cliente e non viene convertito in cliente comunque come potenziale cliente convertito';
$lang['payment_method'] = 'Metodo di Pagameto';
$lang['payment_method_info'] = 'Alcuni portali di pagamento supportano metodi di pagamento diversi/multipli come Carta di Credito, PayPal, Bonifico Bancario.';

# Version 1.2.7
$lang['dropbox_app_key'] = 'APP Chiave Dropbox';
$lang['project_invoice_select_all_expenses'] = 'Seleziona tutte le spese';
$lang['role_update_staff_permissions'] = 'Aggiorna tutti i permessi dei membri staff che utilizzano questo ruolo ';
$lang['customer_active'] = 'Attivo';
$lang['note_updated_successfully'] = 'Nota aggiornata con successo';
$lang['update_note'] = 'Aggiorna nota';
$lang['update_comment'] = 'Aggiorna commento';
$lang['comment_updated_successfully'] = 'Commento aggiornato successo';
$lang['staff_send_welcome_email'] = 'Invia email di benvenuto';
$lang['proposal_warning_email_change'] = 'Email cambiata per %s. Questo %s è collegato a delle proposte. Vuoi aggiornare tutte le email di proposta collegate a %s?';
$lang['update_proposal_email_yes'] = 'Si aggiorna tutte le email collegate.';
$lang['update_proposal_email_no'] = 'No, aggiornerò manualmente.';
$lang['proposals_emails_updated'] = 'Tutte le email di proposta collegate a questo %s sono state aggiornate a %s';
$lang['custom_field_company'] = 'Azienda';
$lang['actions'] = 'Azioni';
$lang['project_mark_as'] = 'Contrassegna come %s';
$lang['todo_edit_title'] = 'Modifica oggetto dafare';
$lang['additional_action_required'] = 'Azione aggiuntiva richiesta!';
$lang['project_mark_tasks_finished_confirm'] = 'Conferma';
$lang['project_marked_as_success'] = 'Progetto contrassegnato come %s con successo';
$lang['project_marked_as_failed'] = 'Contrassegno progetto come %s fallito';
$lang['auto_assign_customer_admin_after_lead_convert'] = 'Assegna automaticamente come amministratore al cliente dopo la conversione';
$lang['auto_assign_customer_admin_after_lead_convert_help'] = 'Se questa opzione è impostata su SI il membro dello staff che ha convertito il potenziale cliente in cliente sarà assegnato automaticamente come amministratore cliente. NOTA: Questa opzione si applicherà solo ai membri dello staff che non hanno il permesso per la VISUALIZZAZIONE clienti';
$lang['auto_close_tickets_disable'] = 'Setta a 0 per disabilitare';
$lang['task_checklist_item_completed_by'] = 'Completato da %s';
$lang['staff_email_signature_help'] = 'Se vuoto sarà impiegata la firma email di default dalle impostazioni';
$lang['customer_sales'] = 'Vendite';
$lang['default_task_priority'] = 'Priorità di Default';
$lang['project_send_created_email'] = 'Invia email progetto creato';
$lang['survey_send_to_lists'] = 'Liste di invio sondaggio';
$lang['survey_send_notice'] = 'Le email saranno spedite tramite CRON JOB ogni ora.';
$lang['view_permission_auto_checked'] = 'Permesso di VISUALIZZAZIONE controllata automaticamente. Devi selezionare il permesso di  VISUALIZZAZIONE se vuoi MODIFICARE, CREARE ed ELIMINARE in maniera adeguata. MODIFICA, CREA, ELIMINA non possono essere utilizzati senza VISUALIZZA poiché VISUALIZZA è il permesso globale e l\'utente non sarà in grado di aprire i dati ed eseguire le azioni.';
$lang['custom_field_company_info'] = 'Modifica campi personalizzati per l\'azienda in Setup->Impostazioni->Azienda';

# Version 1.2.8
$lang['show_transactions_on_invoice_pdf'] = 'Mostra pagamenti fattura (transazioni) su PDF';
$lang['bulk_actions'] = 'Azioni di Gruppo';
$lang['additional_filters'] = 'Filtri Aggiuntivi';
$lang['expenses_available_to_bill'] = 'Spese disponibili per l\'addebito';
$lang['bulk_action_customers_groups_warning'] = 'Se non selezioni alcun gruppo, tutti i gruppi assegnati ai clienti selezionati saranno rimossi.';
$lang['customer_attachments_show_in_customers_area'] = 'Mostra nell\'area clienti';
$lang['customer_attachments_show_notice'] = 'Solo i file caricati dal profilo cliente hanno la possibilità di essere mostrati/nascosti nell\'area clienti.';
$lang['customer_profile_files'] = 'Files';
$lang['no_files_found'] = 'Nessun File Trovato';
$lang['survey_customers_all'] = 'Tutti I clienti';
$lang['custom_field_column'] = 'Griglia (Colonna di Bootstrap eq. 12) - Max è 12';
$lang['task_status'] = 'Status';
$lang['task_status_1'] = 'Non Avviato';
$lang['task_status_2'] = 'In Attesa di Feedback';
$lang['task_status_3'] = 'Test in Corso';
$lang['task_status_4'] = 'In Corso';
$lang['task_status_5'] = 'Completo';
$lang['task_mark_as'] = 'Contrassegna come %s';
$lang['task_marked_as_success'] = 'Compito contrassegnato come %s con successo ';
$lang['task_drag_drop_notice'] = 'Drag & Drop viene usato solo per cambiare facilmente %s. l\'ordine non sarà applicato per questa area.';
$lang['search_tasks'] = 'Cerca Compiti';
$lang['tasks_kanban_limit'] = 'Limite file compiti kan ban per status';
$lang['show_on_invoice_on_pdf'] = 'Mostra %s su PDF Fattura';
$lang['show_pay_link_to_invoice_pdf'] = 'Mostra Link Paga Fattura nel PDF (Non applicato sullo status fattura è Cancellato)';
$lang['no_leads_found'] = 'Nessun Potenziale CLiente Trovato';
$lang['created_today'] = 'Creato Oggi';
$lang['total_tasks_deleted'] = 'Totale Compiti Eliminati: %s';
$lang['total_tickets_delete'] = 'Totale Ticket Eliminati: %s';
$lang['total_tickets_delete'] = 'Totale Ticket Eliminati: %s';
$lang['format_letter_portrait'] = 'Lettera Ritratto';
$lang['format_letter_landscape'] = 'Lettera Paesaggio';
$lang['period_datepicker'] = 'Periodo';
$lang['total_by_hourly_rate'] = 'Totale Per Tariffa Oraria';
$lang['staff_hourly_rate'] = $lang['task_hourly_rate'];
// &#37; è per % quindi il sistema può confondere i campi originali come %s
$lang['remove_tax_name_from_item_table_help'] = 'eq. Oggetto TASSA 15&#37; sarà mostrato come 15&#37; senza il nome tassa (Non applicato se vengono trovate tasse multiple con lo stesso nome e percentuale di tassa per oggetto)';
$lang['back_to_project'] = 'Tora al Progetto';
$lang['view_kanban'] = 'Visualizza Kan Ban';
$lang['invoice_is_overdue'] = 'Questa fattura è in ritardo di %s giorni';

# Version 1.2.9
$lang['time_decimal'] = 'Time (decimal)';
$lang['time_h'] = 'Time (h)';
$lang['proposal_number_prefix'] = 'Proposal Number Prefix';
$lang['settings_number_padding_prefix'] = 'Number padding zero\'s for prefix formats <br /> <small>eq. If this value is 3 the number will be formatted: 005 or 025</small>';
$lang['this_week_payments'] = 'This Week Payments';
$lang['last_week_payments'] = 'Last Week Payments';
$lang['not_published_new_post'] = 'published new post';
$lang['expense_name'] = 'Name';
$lang['expense_name_help'] = 'For personal usage';
$lang['adjustments'] = 'Adjustments';
$lang['tax_breakdown'] = 'Tax Breakdown';
$lang['payments_received'] = 'Payments Received';
$lang['not_lead_activity_created_proposal'] = 'Created new proposal - %s';
$lang['lead_title'] = 'Position';
$lang['lead_address'] = 'Address';
$lang['lead_city'] = 'City';
$lang['lead_state'] = 'State';
$lang['lead_country'] = 'Country';
$lang['lead_zip'] = 'Zip Code';
$lang['lead_is_public_yes'] = 'Yes';
$lang['lead_is_public_no'] = 'No';
$lang['lead_info'] = 'Lead Informations';
$lang['lead_general_info'] = 'General Informations';
$lang['lead_latest_activity'] = 'Latest Activity';
$lang['item_description_new_lines_notice'] = 'New lines are not supported for item description. Use the item long description instead.';
$lang['estimates_report'] = 'Estimates Report';
$lang['confirm'] = 'Confirm';
$lang['delete_staff'] = 'Delete Staff Member';
$lang['delete_staff_info'] = 'Some data for this staff member needs to be transferred to another user. Please select user where you want to transfer the data.';
$lang['estimate_items'] = 'Estimate Items';
$lang['no_proposals_found'] = 'No Proposals Found';
$lang['no_estimates_found'] = 'No Estimates Found';
$lang['pipeline_limit_status'] = 'Pipeline limit per status';
$lang['settings_update'] = 'System Update';
$lang['purchase_key'] = 'Purchase Key';
$lang['update_now'] = 'Update Now';
$lang['update_available'] = 'An update is available';
$lang['latest_version'] = 'Latest Version';
$lang['your_version'] = 'Your Version';
$lang['using_latest_version'] = 'You are using the latest version';
$lang['mark_as_active'] = 'Mark as active';
$lang['customer_inactive_message'] = 'This is inactive customer profile and some features may be disabled';
$lang['active_customers'] = 'Active Customers';
$lang['inactive_active_customers'] = 'Inactive Customers';
$lang['include_proposal_items_merge_field_help'] = 'Include proposal items with merge field anywhere in proposal content as %s';
$lang['all_data_synced_successfully'] = 'All data synced successfully';
$lang['sync_now'] = 'Sync Now';
$lang['sync_data'] = 'Sync Data';
$lang['sync_proposals_up_to_date'] = 'All proposals are up to date, nothing to sync';
$lang['proposal_sync_1_info'] = 'All proposal data is stored separately for each proposal after creation. Updating the %s info wont affect previous created proposals for this %s.';
$lang['proposal_sync_2_info'] = 'If you recently updated your %s info you can sync all new data to associated proposals. Here is a list of fields you can sync.';

# Version 1.3.0
$lang['expense_include_additional_data_on_convert'] = 'Include additional details to item long description taken from this expense.';

# Version 1.4.0
$lang['calendar_events_limit'] = 'Calendar Events Limit (Month and Week View)';
$lang['show_page_number_on_pdf'] = 'Show page number on PDF';
$lang['customer_active_inactive_help'] = 'Wont be shown in dropdowns when creating new records';
$lang['item_groups'] = 'Groups';
$lang['item_group'] = 'Item Group';
$lang['item_group_name'] = 'Group Name';
$lang['new_item_group'] = 'New Group';
$lang['show_setup_menu_item_only_on_hover'] = 'Show setup menu item only when hover with mouse on main sidebar area';
$lang['internal_article'] = 'Internal Article';
$lang['expenses_created_from_this_recurring_expense'] = 'Created expenses from this recurring expense';
$lang['convert_to_task'] = 'Convert To Task';
$lang['next_invoice_date'] = 'Next Invoice Date: %s';
$lang['next_expense_date'] = 'Next Expense Date: %s';
$lang['invoice_recurring_from'] = 'This invoice is created from recurring invoice with number: %s';
$lang['expense_recurring_from'] = 'This expense is created from the following recurring expense: %s';
$lang['child_invoices'] = 'Child Invoices';
$lang['child_expenses'] = 'Child Expenses';
$lang['no_announcements'] = 'No Announcements';
$lang['unit'] = 'Unit';
$lang['permission_view_own'] = 'View (Own)';
$lang['permission_global'] = 'Global';
$lang['permission_customers_based_on_admins'] = 'Based on customer admins';
$lang['permission_payments_based_on_invoices'] = 'Based on invoices VIEW (Own) permission';
$lang['permission_projects_based_on_assignee'] = 'If staff member do not have permission VIEW (Global) will be shown only projects where staff member is added as project member.';
$lang['permission_tasks_based_on_assignee'] = 'If staff member do not have permission VIEW (Global) will be shown only tasks where staff member is follower,assigned, task is public or in Setup->Settings->Tasks-> Allow all staff to see all tasks related to projects is set to YES when task is linked to project.';
$lang['settings_paymentmethod_default_selected_on_invoice'] = 'Selected by default on invoice';
$lang['paymentmethod_braintree_merchant_id'] = 'Merchant ID';
$lang['paymentmethod_braintree_private_key'] = 'Private Key';
$lang['paymentmethod_braintree_public_key'] = 'Public Key';
$lang['company_requires_vat_number_field'] = 'Company requires the usage of the VAT Number field';
$lang['no_company_view_profile'] = 'Person - View Profile';
$lang['company_is_required'] = 'Company field is required?';
$lang['estimate_invoiced'] = 'Invoiced';
$lang['file_date_uploaded'] = 'Date Uploaded';
$lang['allow_contact_to_delete_files'] = 'Allow contacts to delete own files uploaded from customers area';
$lang['file'] = 'File';
$lang['customer_contact_person_only_one_allowed'] = 'Only 1 contact is allowed when the company field is not filled. The system will cast this customer as person';
$lang['web_to_lead'] = 'Web to Lead';
$lang['web_to_lead_form'] = 'Web to Lead Form';
$lang['new_form'] = 'New Form';
$lang['form_name'] = 'Form Name';
$lang['cf_option_in_use'] = 'An option you removed is in use and cant be removed. The option is auto appended to the existing options.';
$lang['form_builder'] = 'Form Builder';
$lang['form_information'] = 'Form Information & Setup';
$lang['form_builder_create_form_first'] = 'Create form first to be able to use the form builder.';
$lang['notify_assigned_user'] = 'Responsible person';
$lang['form_recaptcha'] = 'Use Google Recaptcha';
$lang['form_lang_validation'] = 'Language';
$lang['form_lang_validation_help'] = 'For Validation Messages';
$lang['form_btn_submit_text'] = 'Submit button text';
$lang['form_success_submit_msg'] = 'Message to show after form is successfully submitted';
$lang['total_submissions'] = 'Total Submissions';
$lang['form_integration_code'] = 'Integration Code';
$lang['not_lead_imported_from_form'] = 'New Lead Imported from Web to Lead Form - %s';
$lang['not_lead_activity_log_attachment'] = 'Attachment Imported from form - %s';
$lang['form_integration_code_help'] = 'Copy & Paste the code anywhere in your site to show the form, additionally you can adjust the width and height px to fit for your website.';
$lang['invoice_not_found'] = 'Invoice not found';
$lang['estimate_not_found'] = 'Estimate not found';
$lang['expense_not_found'] = 'Expense not found';
$lang['proposal_not_found'] = 'Proposal not found';
$lang['new_task_assigned_non_user'] = 'New task is assigned to you - %s';
$lang['no_child_found'] = 'No Child %s Found';
$lang['company_vat_number'] = 'VAT Number';
$lang['not_lead_assigned_from_form'] = 'New lead is assigned to you';
$lang['not_lead_activity_assigned_from_form'] = 'Lead assigned to %s';
$lang['form_allow_duplicate'] = 'Allow duplicate %s to be inserted into database?';
$lang['track_duplicate_by_field'] = 'Prevent duplicate on field';
$lang['and_track_duplicate_by_field'] = '+ field (leave blank to track duplicates only by 1 field)';
$lang['create_the_duplicate_form_data_as_task'] = 'Create duplicate %s data as task and assign to responsible staff member';
$lang['create_the_duplicate_form_data_as_task_help'] = 'Used for further review on the submission and take the necessary action';
$lang['currently_selected'] = 'Currently Selected';
$lang['search_ajax_empty'] = 'Select and begin typing';
$lang['search_ajax_placeholder'] = 'Type to search...';
$lang['search_ajax_searching'] = 'Searching...';
$lang['search_ajax_initialized'] = 'Start typing to search';
$lang['lead_description'] = 'Description';
$lang['lead_website'] = 'Website';
$lang['invoice_activity_auto_converted_from_estimate'] = 'Invoice auto created from estimate with number %s';
$lang['hour_of_day_perform_auto_operations'] = 'Hour of day to perform automatic operations';
$lang['hour_of_day_perform_auto_operations_format'] = '24 hours format eq. 9 for 9am or 15 for 3pm.';
$lang['inv_hour_of_day_perform_auto_operations_help'] = 'Used for recurring invoices, overdue notices etc..';
$lang['use_minified_files'] = 'Use minified files version for css and js (only system files)';

# Version 1.5.0
$lang['logo_favicon_changed_notice'] = 'Logo or Favicon change detected. If you still see the original CRM logo try to clear your browser cache';
$lang['kb_search_articles'] = 'Search Knowledge Base Articles';
$lang['kb_search'] = 'Search';
$lang['have_a_question'] = 'Have a question?';
$lang['card_expiration_year'] = 'Expiration Year';
$lang['card_expiration_month'] = 'Expiration Month';
$lang['client_website'] = 'Website';
$lang['search_project_members'] = 'Search Project Members...';
$lang['cf_translate_input_link_title'] = 'Title';
$lang['cf_translate_input_link_url'] = 'URL';
$lang['cf_translate_input_link_tip'] = 'Click here to add link';
$lang['task_edit_delete_timesheet_notice'] = 'Timesheet task is %s, you cant %s the timesheet.';
$lang['department_username'] = 'IMAP Username';
$lang['department_username_help'] = 'Only fill this field if your IMAP server use username to login instead email address. Note that you will still need to add email address.';
$lang['total_tickets_deleted'] = 'Total tickets deleted: %s';

# Version 1.5.1
$lang['ticket_linked_to_project'] = 'This ticket is linked to project: %s';
$lang['only_own_files_contacts'] = 'Contacts see only own files uploaded in customer area (files uploaded in customer profile)';
$lang['only_own_files_contacts_help'] = 'If you share the file manually from customer profile to other contacts they wil be able to see the file.';
$lang['share_file_with'] = 'Share File With';
$lang['file_share_visibility_notice'] = 'This file is not shared with contacts, toggle visibility again to reload';
$lang['share_file_with_show'] = 'This file is shared with: %s';
$lang['allow_primary_contact_to_view_edit_billing_and_shipping'] = 'Allow primary contact to view/edit billing & shipping details';
$lang['estimate_due_after'] = 'Estimate Due After (days)';

# Version 1.6.0
$lang['my_timesheets'] = 'My Timesheets';
$lang['today'] = 'Today';
$lang['open_in_dropbox'] = 'Open In Dropbox';
$lang['show_primary_contact'] = 'Show primary contact full name on %s';
$lang['view_members_timesheets'] = 'View all timesheets';
$lang['priority'] = 'Priority';
$lang['fetch_from_google'] = 'Fetch from google';
$lang['customer_fetch_lat_lng_usage'] = 'Fill address, city and country before fetching to get best result.';
$lang['g_search_address_not_found'] = 'The address couldn\'t be found, please try again';
$lang['proposals_report'] = 'Proposals Report';
$lang['staff_members_open_tickets_to_all_contacts_help'] = 'If staff member don\'t have permission for customers VIEW only will be able to create new tickets from admin area to customer contacts where is assigned as customer admin.';
$lang['staff_members_open_tickets_to_all_contacts'] = 'Allow staff members to open tickets to all contacts?';
$lang['charts_based_report'] = 'Charts Based Report';
$lang['delete_backups_older_then'] = 'Auto delete backups older then X days (set 0 to disable)';
$lang['responsible_admin'] = 'Responsible admin';
$lang['tags'] = 'Tags';
$lang['tag'] = 'Tag';
$lang['customer_map_notice'] = 'Add longitude and latitude in the customer profile to show the map here';
$lang['default_view'] = 'Default View';
$lang['day'] = 'Day';
$lang['agenda'] = 'Agenda';
$lang['timesheet_tags'] = 'Timesheet Tags';
$lang['show_more'] = 'Show more';
$lang['show_less'] = 'Show less';
$lang['project_completed_date'] = 'Completed Date';
$lang['language'] = 'Language';
$lang['this_week'] = 'This Week';
$lang['last_week'] = 'Last Week';
$lang['this_month'] = 'This Month';
$lang['last_month'] = 'Last Month';
$lang['no_description_project'] = 'No description for this project';
$lang['sales_string'] = 'Sales';
$lang['no_project_members'] = 'No members for this project';
$lang['search_by_tags'] = 'Use # + tagname to search by tags';
$lang['project_status_5'] = 'Cancelled';

# Version 1.7.0
$lang['not_activity_new_reminder_created'] = 'set a new reminder for %s with date %s';
$lang['not_activity_new_task_created'] = 'Created new task - %s';
$lang['recurring_invoice_draft_notice'] = 'This invoice is with status draft, you need to mark this invoice as sent. Recurring invoices with status draft won\'t be recreated by cron job.';
$lang['recurring_recreate_hour_notice'] = '%s will be recreated on specific hour of the day based from the setting located at Setup->Settings-Cron Job';
$lang['invoice_project_include_timesheets_notes'] = 'Include each timesheet note in item description';
$lang['events'] = 'Events';
$lang['clear'] = 'Clear';
$lang['auto_mark_as_public'] = 'Auto mark as public';
$lang['time_format'] = 'Time Format';
$lang['time_format_24'] = '24 hours';
$lang['time_format_12'] = '12 hours';
$lang['delete_activity_log_older_then'] = 'Delete system activity log older then X months';
$lang['mark_as_read'] = 'Mark as Read';
$lang['mark_all_as_read'] = 'Mark all as read';
$lang['tax_1'] = 'Tax 1';
$lang['tax_2'] = 'Tax 2';
$lang['total_with_tax'] = 'Total with tax';
$lang['new_task_auto_assign_current_member'] = 'Auto assign task creator when new task is created';
$lang['new_task_auto_assign_current_member_help'] = 'Not applied if task is linked to project and the creator is not project member';
$lang['copy_project_tasks_status'] = 'Tasks Status';
$lang['tasks_summary'] = 'Tasks Summary';
$lang['show_gantt_by'] = 'Show Gantt View by';
$lang['vault'] = 'Vault';
$lang['new_vault_entry'] = 'New Vault Entry';
$lang['server_address'] = 'Server Address';
$lang['port'] = 'Port';
$lang['vault_username'] = 'Username';
$lang['vault_password'] = 'Password';
$lang['vault_description'] = 'Short Description';
$lang['vault_entry'] = 'Vault Entry';
$lang['no_port_provided'] = 'Not provided';
$lang['view_password'] = 'View Password';
$lang['security_reasons_re_enter_password'] = 'For security reasons please enter your password below';
$lang['password_change_fill_notice'] = 'Only fill password field if you want to change the password';
$lang['vault_password_user_not_correct'] = 'Your password is not correct, please try again';
$lang['no_vault_entries'] = 'Vault entries not found for this customer.';
$lang['vault_entry_created_from'] = 'This vault entry is created by %s';
$lang['vault_entry_last_update'] = 'Last updated by %s';
$lang['vault_entry_visible_to_all'] = 'Visible to all staff member who have access to this customer';
$lang['vault_entry_visible_creator'] = 'Visible only to me (administrator are not excluded)';
$lang['vault_entry_visible_administrators'] = 'Visible only to administrators';
$lang['my_reminders'] = 'My Reminders';
$lang['reminder_related'] = 'Related to';
$lang['event_notification'] = 'Notification';
$lang['days'] = 'Days';
$lang['reminder_notification_placeholder'] = 'Eq. 30 minutes before';
$lang['event_color'] = 'Event Color';
$lang['group_by_task'] = 'Group by Task';
$lang['save'] = 'Save';
$lang['disable_languages'] = 'Disable Languages';

# Version 1.8.0
$lang['not_customer_viewed_invoice'] = 'An invoice with number %s has been viewed';
$lang['not_customer_viewed_estimate'] = 'An estimate with number %s has been viewed';
$lang['not_customer_viewed_proposal'] = 'An proposal with number %s has been viewed';
$lang['display_inline'] = 'Display Inline';
$lang['email_header'] = 'Predefined Header';
$lang['email_footer'] = 'Predefined Footer';
$lang['exclude_proposal_from_client_area_with_draft_status'] = 'Exclude proposals with draft status from customers area';
$lang['pusher_app_key'] = 'APP Key';
$lang['pusher_app_secret'] = 'APP Secret';
$lang['pusher_app_id'] = 'APP ID';
$lang['pusher_cluster_notice'] = 'Leave blank to use default pusher cluster.';
$lang['pusher_enable_realtime_notifications'] = 'Enable Real Time Notifications';
$lang['task_is_overdue'] = 'This task is overdue';
$lang['this_year'] = 'This Year';
$lang['last_year'] = 'Last Year';
$lang['customer_statement'] = 'Statement';
$lang['customer_statement_for'] = 'Customer Statement For %s';
$lang['account_summary'] = 'Account Summary';
$lang['statement_beginning_balance'] = 'Beginning Balance';
$lang['invoiced_amount'] = 'Invoiced Amount';
$lang['amount_paid'] = 'Amount Paid';
$lang['statement_from_to'] = '%s To %s';
$lang['customer_statement_info'] = 'Showing all invoices and payments between %s and %s';
$lang['balance_due'] = 'Balance Due';
$lang['statement_heading_date'] = 'Date';
$lang['statement_heading_details'] = 'Details';
$lang['statement_heading_amount'] = 'Amount';
$lang['statement_heading_payments'] = 'Payments';
$lang['statement_heading_balance'] = 'Balance';
$lang['statement_invoice_details'] = 'Invoice %s - due on %s';
$lang['statement_payment_details'] = 'Payment (%s) to invoice %s';
$lang['statement_bill_to'] = 'To';
$lang['send_to_email']          = 'Send to Email';
$lang['statement_sent_to_client_success'] = 'The statement is sent successfully to the client';
$lang['statement_sent_to_client_fail']    = 'Problem while sending the statement';
$lang['view_account_statement']    = 'View Account Statement';
$lang['text_not_recommended_for_servers_limited_resources'] = 'Not recommended if the server have limited resources. Eq shared hosting';
$lang['tasks_bull_actions_assign_notice'] = 'If the task is linked to project and the staff member you are assigning the task to is not project member this staff will be auto added as member.';
$lang['company_information'] = 'Company Information';
$lang['ticket_form'] = 'Ticket Form';
$lang['ticket_form_subject'] = 'Subject';
$lang['ticket_form_name'] = 'Your name';
$lang['ticket_form_email'] = 'Email Address';
$lang['ticket_form_department'] = 'Department';
$lang['ticket_form_message'] = 'Message';
$lang['ticket_form_priority'] = 'Priority';
$lang['ticket_form_service'] = 'Service';
$lang['ticket_form_submit'] = 'Submit';
$lang['ticket_form_attachments'] = 'Attachments';

$lang['success_submit_msg'] = 'Thank you for contacting us. We will get back to you shortly.';
$lang['vault_entry_share_on_projects'] = 'Share this vault entry in projects with project members';
$lang['project_shared_vault_entry_login_details'] = 'View Customer Site Login Details';
$lang['iso_code'] = 'ISO Code';
$lang['estimates_not_invoiced'] = 'Not Invoiced';
$lang['show_on_ticket_form'] = 'Show on ticket form';
$lang['cancel_upload'] = 'Cancel Upload';
$lang['show_table_export_button'] = 'Show table export button';
$lang['show_table_export_all'] = 'To all staff members';
$lang['show_table_export_admins'] = 'Only to administrators';
$lang['show_table_export_hide'] = 'Hide export button for all staff members';
$lang['task_created_by'] = 'Created by %s';
$lang['validation_extension_not_allowed'] = 'File extension not allowed';
$lang['allow_staff_view_proposals_assigned'] = 'Allow staff members to view proposals where they are assigned to';
$lang['task_users_working_on_tasks_multiple'] = 'Currently %s are working on this task';
$lang['task_users_working_on_tasks_single'] = 'Currently %s is working on this task';