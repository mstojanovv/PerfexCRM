<?php
# Version 1.0.0
#
# General
$lang['id']                   = 'ID';
$lang['name']                 = 'Nome';
$lang['options']              = 'Opzioni';
$lang['submit']               = 'Salva';
$lang['added_successfuly']    = '%s aggiunto con successo.';
$lang['updated_successfuly']  = '%s aggiornato con successo.';
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

# Invoice General
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
$lang['client_delete_tooltip']                 = 'Tutti i dati del cliente verranno eliminati. Contratti, ticket, note. NOTA: Se vengono trovate fatture non verrà eliminato il cliente. È necessario assegnare queste fatture a un altro cliente per mantenere il numero di fattura.';
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
$lang['email_template_disabed']                             = 'Disabilitato';
$lang['email_template_email_message']                       = 'Messaggio Email';
$lang['available_merge_fields']                             = 'Unione campi disponibile';
# Home
$lang['dashboard_string']                                   = 'Bacheca';
$lang['home_latest_todos']                                  = 'Ultime DaFare';
$lang['home_no_latest_todos']                               = 'Nessu DaFare trovato';
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
$lang['home_weekend_ticket_opening_statistics']             = 'Statisitche Settimanali Aperture Ticket';
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
# Invoice Items
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
$lang['invoice_item_add_edit_tax_select']  = 'Select Tassa';

$lang['invoice_item_edit_heading'] = 'Modifica Voce';
$lang['invoice_item_add_heading']  = 'Aggiungi Nuova Voce';

# Invoices


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
$lang['kb_group_add_edit_note']        = 'Nota: Tutti gli articoli in questo gruppo saranno nascosti se disabilita è selezionato';
$lang['group_table_name_heading']      = 'Nome';
$lang['group_table_isactive_heading']  = 'Attivo';
$lang['kb_no_groups_found']            = 'Nessun gruppo Informazione di base trovato';

# Mail Lists
$lang['mail_lists']                           = 'Liste Mail';
$lang['mail_list']                            = 'Lista Mail';
$lang['new_mail_list']                        = 'Nuova Lista Mail';
$lang['mail_list_lowercase']                  = 'lista mail';
$lang['custom_field_deleted_success']         = 'Campo personalizzato cancellato';
$lang['custom_field_deleted_fail']            = 'Problema nel cancellare un campo personalizzato';
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
$lang['email_added_to_mail_list_successfuly'] = 'Email aggiunta a questa lista';
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
$lang['predifined_replies_dt_name']        = 'Nome Risposte Predefinite';
$lang['predifined_reply_add_edit_name']    = 'Nome Risposta Predefinita';
$lang['predifined_reply_add_edit_content'] = 'Contenuto Risposta';

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
$lang['settings_updated']             = 'Impostazioni Updated';
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

$lang['settings_email_host']      = 'SMTP Host';
$lang['settings_email_port']      = 'SMTP Port';
$lang['settings_email']           = 'SMTP Email';
$lang['settings_email_password']  = 'SMTP Password';
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
$lang['settings_sales_decrement_invoice_number_on_delete_tooltip'] = 'Vuoi diminuire il numero di fattura quando l\'ultima fattura è cancellata? Ex. Se è impostata questa opzione a SÌ e prima che la fattura sia cancellata il numero di fattura successivo è 15, il numero di fattura successivo sarà diminuito a 14 per la prossima fattura. Se è impostata su No il numero rimarrà a 15';
$lang['settings_sales_invoice_number_format']                      = 'Formato Numero Fattura';
$lang['settings_sales_invoice_number_format_year_based']           = 'Basato su Anno';
$lang['settings_sales_invoice_number_format_number_based']         = 'Basat su Numero (000001)';

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

$lang['lead_statuses_not_found']      = 'Nessun status potenziali clienti trovato';
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
$lang['lead_add_edit_contected_today']      = 'Contattato Oggi';
$lang['lead_add_edit_activity']             = 'Registro delle attività';
$lang['lead_add_edit_notes']                = 'Note';
$lang['lead_add_edit_add_note']             = 'Aggiungi nota';
$lang['lead_not_contacted']                 = 'Non ho contattato questo potenziale cliente';
$lang['lead_add_edit_contected_this_lead']  = 'Mi sono messo in contatto con questo potenziale cliente';
$lang['lead_confirmation_canban_contacted'] = 'Ti sei messo in contatto con questo potenziale cliente?';

# Misc
$lang['activity_log_when_cron_job'] = 'Cron Job';
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
# Invoice Activity Log
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
$lang['als_kb']    = 'Inofrmazioni Base';

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
$lang['new_ticket_added_succesfuly']                        = 'Ticket n°%s aggiunto con successo';
$lang['replied_to_ticket_succesfuly']                       = 'Risposta al ticket n°%s eseguita';
$lang['ticket_settings_updated_successfuly']                = 'Impostazioni ticket aggiornate con successo';
$lang['ticket_settings_updated_successfuly_and_reassigned'] = 'Impostazioni Ticket aggiornate con successo - riassegnate al reparto %s';
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
$lang['ticket_single_assign_to_me_on_update']     = 'Automaticament assegna questo ticket a me';
$lang['ticket_single_insert_predefined_reply']    = 'Inserire risposta predefinita';
$lang['ticket_single_insert_knowledge_base_link'] = 'Inserire link Informazioni di Base';
$lang['ticket_single_attachments']                = 'Allegati';
$lang['ticket_single_add_response']               = 'Aggiungi Risposta';
$lang['ticket_single_note_heading']               = 'Nota';
$lang['ticket_single_add_note']                   = 'Aggiungi nota';
$lang['ticket_settings_none_assigned']            = 'Nessuno';
$lang['ticket_status_changed_successfuly']        = 'Status Ticket Cambiato';
$lang['ticket_status_changed_fail']               = 'Problema nel Cambiare Status Ticket';

$lang['ticket_staff_string']                    = 'Staff';
$lang['ticket_client_string']                   = 'Cliente';
$lang['ticket_posted']                          = 'Pubblicato: %s';
$lang['ticket_insert_predefined_reply_heading'] = 'Inserire risposta predefinita';
$lang['ticket_kb_link_heading']                 = 'Inserire link Informazioni di Base';
$lang['ticket_access_by_department_denied']     = 'Non hai accesso a questo ticket. Il ticket appartiene al reparto al quale non sei assegnato.';

# Staff
$lang['new_staff']                       = 'Nuovo Membro Staff';
$lang['staff_members']                   = 'Membri Staff';
$lang['staff_member']                    = 'Membro Staff';
$lang['staff_member_lowercase']          = 'membro staff';
$lang['staff_profile_updated']           = 'Il Tuo Profilo è Stato Aggiornato';
$lang['staff_old_password_incorect']     = 'La tua vecchia password non è corretta';
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
$lang['staff_edit_profile_change_repet_new_password'] = 'Ripeti nuova password';

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
$lang['survey_mail_lists_custom_fields_tooltip']   = 'I campi personalizzati possono essere utilizzati per editor di posta elettronica. SUGGERIMENTO: Fare clic sulla editor di posta elettronica e quindi selezionare dal menu a discesa per aggiungerli automaticamente.';
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
$lang['survey_send_mail_lists_note_logged_in']     = 'Nota: Se si invia sondaggio alle liste di posta elettronica SOLO per i partecipanti che hanno eseguito l\'accesso deve essere deselezionata';
$lang['survey_send_string']                        = 'Invio';

$lang['survey_send_to_total']  = 'Inviare a %s email totali';
$lang['survey_send_till_now']  = 'Finora';
$lang['survey_send_finished']  = 'Invio sondaggio terminato: %s';
$lang['survey_added_to_queue'] = 'Questo sondaggio è stato aggiunto alla coda cron il %s';

$lang['survey_questions_string']          = 'Domande';
$lang['survey_insert_field']              = 'Inserire Campo';
$lang['survey_field_checkbox']            = 'Checkbox';
$lang['survey_field_radio']               = 'Radio';
$lang['survey_field_input']               = 'Input Field';
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

# Staff Tasks
$lang['new_task']       = 'Nuova Attività';
$lang['tasks']          = 'Attività';
$lang['task']           = 'Attività';
$lang['task_lowercase'] = 'attività';
$lang['comment_string'] = 'Commento';

$lang['task_marked_as_complete'] = 'Contrassegna attività come completata';
$lang['task_follower_removed']   = 'Rimossi con successo chi seguivano l\'attività';
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
$lang['task_single_add_new_comment']        = 'Aggi Commento';

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
$lang['utility_calendar_event_added_successfuly']   = 'Nuovo evento aggiunto con successo';
$lang['utility_calendar_event_deleted_successfuly'] = 'Evento eliminato';
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
$lang['clients_home_currency_select_tooltip']      = 'Devi selezionare la valuta perchè hai fatture con valute diferenti';
# Invoices
$lang['clients_invoice_html_btn_download'] = 'Scarica';

$lang['clients_my_invoices']        = 'Mie Fatture';
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
$lang['clients_email']     = 'Inidirizzo Email';
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
$lang['clients_single_ticket_informations_heading'] = 'Informazioni Ticket';

$lang['clients_tickets_dt_number']     = 'Ticket n°';
$lang['clients_tickets_dt_subject']    = 'Oggetto';
$lang['clients_tickets_dt_department'] = 'Reparto';
$lang['clients_tickets_dt_service']    = 'Servizio';
$lang['clients_tickets_dt_status']     = 'Status';
$lang['clients_tickets_dt_last_reply'] = 'Ultima Risposta';


$lang['clients_ticket_single_department']        = 'Reparto: %s';
$lang['clients_ticket_single_submited']          = 'Inserito: %s';
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
$lang['clients_dt_sort_ascending']    = 'attivare per ordinare la colonna in ordine ascendente';
$lang['clients_dt_sort_descending']   = 'attivare per ordinare la colonna in ordine discendente';


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
$lang['online_payment_recorded_success_fail_database'] = 'Il pagamento ma non è stato possibile inserire il dato nel database, contattare l\'amministratore';

# Leads
$lang['lead_convert_to_client']                   = 'Converti in Cliente';
$lang['lead_convert_to_email']                    = 'Email';
$lang['lead_convert_to_client_firstname']         = 'Nome';
$lang['lead_convert_to_client_lastname']          = 'Cognome';
$lang['lead_email_already_exists']                = 'L\'email del potenziale cliente è già presente tra i dati dei clienti ';
$lang['lead_to_client_base_converted_success']    = 'Conversione da potenziale cliente a cliente avvenuta con successo';
$lang['lead_already_converted']                   = 'Convertito a cliente';
$lang['lead_have_client_profile']                 = 'Questo potenziale cliente ha un profilo cliente.';
$lang['lead_converted_edit_client_profile']       = 'Modifica Profilo';

# Invoices
$lang['view_invoice_as_customer_tooltip']                                     = 'Vedi Fattura come Cliente';
$lang['invoice_add_edit_recurring']                                           = 'Fattura Ricorrente?';
$lang['invoice_add_edit_recurring_no']                                        = 'No';
$lang['invoice_add_edit_recurring_month']                                     = 'Ogni %s mese';
$lang['invoice_add_edit_recurring_months']                                    = 'Ogni %s mesi';
$lang['invoices_list_all']                                                    = 'Tutte';
$lang['invoices_list_not_have_payment']                                       = 'Invoices with no payment record';
$lang['invoices_list_recuring']                                               = 'Recurring Invoices';
$lang['invoices_list_made_payment_by']                                        = 'Pagamento Eseguito da %s';
$lang['invoices_create_invoice_from_recurring_only_on_paid_invoices']         = 'Crea una nuova fattura dalla principale fattura ricorrente solo se è con lo status Pagata';
$lang['invoices_create_invoice_from_recurring_only_on_paid_invoices_tooltip'] = 'Crea una nuova fattura dalla principale fattura ricorrente solo se la fattura principale è stata pagata? Se questo campo è segnato come No e la fattura ricorrente non è con lo status Pagata, la nuova fattura non sarà creata.';
$lang['send_renewed_invoice_from_recurring_to_email']                         = 'Invia automaticamente la fattura ricorrente al cliente';
$lang['view_invoice_pdf_link_pay']                                            = 'Paga Fattura';

# Payment modes
$lang['payment_mode_add_edit_description']         = 'Conto Bancario / Descrizione';
$lang['payment_mode_add_edit_description_tooltip'] = 'Qui puoi impostare le informazioni del tuo conto bancario. Saranno mostrate come HTML nella fattura.';
$lang['payment_modes_dt_description']              = 'Conto Bancario / Descrizione';
$lang['payment_modes_add_edit_announcement']       = 'Nota: I metodi diPagamento elencati qui sotto sono metodi offline. I metodi di pagamento online possono essere configurati in Impostazioni-> Pagamento Getaways';
$lang['payment_mode_add_edit_active']              = 'Attivo';
$lang['payment_modes_dt_active']                   = 'Attivo';

# Contracts
$lang['contract_not_found'] = 'Contratto non trovato. Potrebbe essere stato cancellato, controllare il registro attività';

# Settings
$lang['setting_bar_heading']                 = 'Impostazione';
$lang['settings_group_online_payment_modes'] = 'Pagamento Getaways';
$lang['settings_paymentmethod_mode_label']   = 'Etichetta';
$lang['settings_paymentmethod_active']       = 'Attivo';
$lang['settings_paymentmethod_currencies']   = 'Virgola Separazione Valuta';
$lang['settings_paymentmethod_testing_mode'] = 'Abilita Modo Test';

$lang['settings_paymentmethod_paypal_username']  = 'Paypal API Username';
$lang['settings_paymentmethod_paypal_password']  = 'Paypal API Password';
$lang['settings_paymentmethod_paypal_signature'] = 'API Signature';

$lang['settings_paymentmethod_stripe_api_secret_key']      = 'Stripe API Secret Key';
$lang['settings_paymentmethod_stripe_api_publishable_key'] = 'Stripe Publishable Key';
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
$lang['clients_successfully_registered']           = 'Grazie per la tua registrazione';
$lang['clients_account_created_but_not_logged_in'] = 'Il tuo account è stato creato ma non hai effettuato automaticamente l\'accesso al nostro sistema. Per favore, prova ad accedere.';
# Tickets
$lang['clients_tickets_heading']                   = 'Ticket di Supporto';

# Payments
// Uses on stripe page
$lang['payment_for_invoice'] = 'Pagamento per Fattura';
$lang['payment_total']       = 'Totale: %s';

# Invoice
$lang['invoice_html_online_payment']             = 'Pagamento Online';
$lang['invoice_html_online_payment_button_text'] = 'Paga Ora';
$lang['invoice_html_payment_modes_not_selected'] = 'Per favore, Selezionare un Metodo di Pagamento';
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

# Invoice
$lang['invoice_add_edit_advanced_options']               = 'Opzioni Avanzate';
$lang['invoice_add_edit_allowed_payment_modes']          = 'Metodi di pagamenti abilitati per questa fattura';
$lang['invoice_add_edit_recuring_invoices_from_invoice'] = 'Fatture ricorrenti da questa fattura';
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
$lang['settings_delete_only_on_last_invoice']                       = 'Eliminare la fattura consentito solo su ultima fattura';
$lang['settings_sales_estimate_prefix']                             = 'Prefisso Numero Preventivo';
$lang['settings_sales_next_estimate_number']                        = 'Numero Prossimo Preventivo';
$lang['settings_sales_next_estimate_number_tooltip']                = 'Imposta questo campo a 1 se vuoi iniziare dall\'inizio';
$lang['settings_sales_decrement_estimate_number_on_delete']         = 'Quando eliminato decrementare il numero del prevetnivo';
$lang['settings_sales_decrement_estimate_number_on_delete_tooltip'] = 'Vuoi diminuire il numero di preventivo quando l\'ultimo preventivo viene eliminato? Es. Se questa opzione è impostata su Sì e prima che il preventivo venga eliminato, il numero del prossimo prevenetivo è 15, il prossimo numero di preventivo verrà decrementato a 14. Se impostato a NO il numero rimarrà 15.';
$lang['settings_sales_estimate_number_format']                      = 'Formato Numero Preventivo';
$lang['settings_sales_estimate_number_format_year_based']           = 'Basato su Anno';
$lang['settings_sales_estimate_number_format_number_based']         = 'Basato su Numero (000001)';
$lang['settings_delete_only_on_last_estimate']                      = 'Eliminare preventivo consentito solo su ultima fattura';
$lang['settings_cron_invoice_heading']                              = 'Fattura';
$lang['settings_send_test_email_heading']                           = 'Invia Test Email';
$lang['settings_send_test_email_subheading']                        = 'Invia test email per accertarsi che le tue impostazioni SMTP siano corrette.';
$lang['settings_send_test_email_string']                            = 'Indirizzo Email';
$lang['settings_smtp_settings_heading']                             = 'Impostazioni SMTP';
$lang['settings_smtp_settings_subheading']                          = 'Imposta email principale';
$lang['settings_sales_heading_general']                             = 'Generali';
$lang['settings_sales_heading_invoice']                             = 'Fatture';
$lang['settings_sales_heading_estimates']                           = 'Preventivi';
$lang['settings_sales_heading_company']                             = 'Azienda';
$lang['settings_sales_cron_invoice_heading']                        = 'Fattura';

# Tasks
$lang['tasks_dt_datestart'] = 'Data Inizio';
$lang['tasks_dt_priority']  = 'Priorità';

# Invoice General
$lang['invoice_discount'] = 'Sconto';

# Tickets
$lang['ticket_settings_client'] = 'Cliente';

# Settings
$lang['settings_rtl_support_admin']                                   = 'RTL Area Ammin (Da Detsra a Sinistra)';
$lang['settings_rtl_support_client']                                  = 'RTL Area Cliente (Da Destra a Sinistra)';
$lang['acs_language_editor']                                          = 'Editor Lingua';
$lang['settings_estimate_auto_convert_to_invoice_on_client_accept']   = 'Auto convertire il preventivo a fattura dopo accettazione del cliente';
$lang['settings_exclude_estimate_from_client_area_with_draft_status'] = 'Escludere preventivi con lo status di Bozza dall\'area cliente.';

# Months
$lang['January']   = 'Gennaio';
$lang['February']  = 'Febbraio';
$lang['March']     = 'Marzo';
$lang['April']     = 'Aprile';
$lang['May']       = 'MAggio';
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
$lang['time_ago_year']      = 'una nno fa';
$lang['time_ago_years']     = '%s anni fa';


# Estimates
$lang['estimates']                          = 'Preventivi';
$lang['estimate']                           = 'Preventivo';
$lang['estimate_lowercase']                 = 'preventivo';
$lang['create_new_estimate']                = 'Crea Nuovo Preventivo';
$lang['view_estimate']                      = 'Vedi preventivo';
$lang['estimate_sent_to_client_success']    = 'Il preventivo è stato inviato con successo al cliente.';
$lang['estimate_sent_to_client_fail']       = 'Problema durante l\'invio del preventivo';
$lang['estimate_reminder_send_problem']     = 'Problema nell\'invio del promemoria per preventivo scaduto';
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
$lang['estimates_toggle_table_tooltip']     = 'Vedi Tabella Comlpeta';
$lang['estimate_add_edit_advanced_options'] = 'Opzioni Avanzate';
$lang['estimate_vat']                       = 'Numero P. IVA';
$lang['estimate_to']                        = 'A';
$lang['estimates_list_all']                 = 'Tutti';

$lang['estimate_invoiced_date']                  = 'Preventivo Fatturato il %s';
$lang['edit_estimate_tooltip']                   = 'Modifica Preventivo';
$lang['delete_estimate_tooltip']                 = 'Elimina Preventivo';
$lang['estimate_sent_to_email_tooltip']          = 'Invia per Email';
$lang['estimate_already_send_to_client_tooltip'] = 'Questo preventivo è già stato inviato al cliente %s';
$lang['send_overdue_notice_tooltip']             = 'Notifica Invio Scadenza';
$lang['estimate_view_activity_tooltip']          = 'Registro Attività';

$lang['estimate_send_to_client_modal_heading']    = 'Invia questo preventivo al cliente';
$lang['estimate_send_to_client_attach_pdf']       = 'Allega preventivo PDF';
$lang['estimate_send_to_client_preview_template'] = 'Anteprima Modello Email';

$lang['estimate_dt_table_heading_number']     = 'Preventivo n°';
$lang['estimate_dt_table_heading_date']       = 'Data';
$lang['estimate_dt_table_heading_client']     = 'Cliente';
$lang['estimate_dt_table_heading_expirydate'] = 'Scadenza';
$lang['estimate_dt_table_heading_amount']     = 'Importo';
$lang['estimate_dt_table_heading_status']     = 'Status';

$lang['estimate_email_link_text']    = 'Vedi Preventivo';
$lang['estimate_convert_to_invoice'] = 'Converti a Farrura';
# Home
$lang['home_unfinished_tasks']       = 'Attività Non Terminate';

# Clients
$lang['client_estimates_tab'] = 'Preventivi';
$lang['client_payments_tab']  = 'Pagamenti';


# Estimate General
$lang['estimate_pdf_heading']            = 'PREVENTIVO';
$lang['estimate_table_item_heading']     = 'Voce';
$lang['estimate_table_quantity_heading'] = 'Qnt';
$lang['estimate_table_rate_heading']     = 'Prezzo';
$lang['estimate_table_tax_heading']      = 'Tassa';
$lang['estimate_table_amount_heading']   = 'Importo';
$lang['estimate_subtotal']               = 'Totale Parziale';
$lang['estimate_adjustment']             = 'Adattamento';
$lang['estimate_discount']               = 'Sconto';
$lang['estimate_total']                  = 'Totale';
$lang['estimate_to']                     = 'A';
$lang['estimate_data_date']              = 'Data Preventivo';
$lang['estimate_data_expiry_date']       = 'Data Scadenza';
$lang['estimate_note']                   = 'Nota:';
$lang['estimate_status_draft']           = 'Bozza';
$lang['estimate_status_sent']            = 'Inviato';
$lang['estimate_status_declined']        = 'Rifiutato';
$lang['estimate_status_accepted']        = 'Accettato';
$lang['estimate_status_expired']         = 'Scaduto';
$lang['estimate_note']                   = 'Nota:';

# Quick create
$lang['qa_create_estimate'] = 'Crea Preventivo';
$lang['qa_create_lead']     = 'Crea Potenziale Cliente';


## Clients
$lang['clients_estimate_dt_number']             = 'Preventivo n°';
$lang['clients_estimate_dt_date']               = 'Data';
$lang['clients_estimate_dt_duedate']            = 'Data Scadenza';
$lang['clients_estimate_dt_amount']             = 'Importo';
$lang['clients_estimate_dt_status']             = 'Status';
$lang['clients_nav_estimates']                  = 'Prefentivi';
$lang['clients_decline_estimate']               = 'Rifiuto';
$lang['clients_accept_estimate']                = 'Accetto';
$lang['clients_my_estimates']                   = 'Preventivi';
$lang['clients_estimate_invoiced_successfuly']  = 'Preventivo accettato. Ecco la fattura per questo preventivo.';
$lang['clients_estimate_accepted_not_invoiced'] = 'Grazie per aver accettato questo preventivo!';
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
# Invoice Items
$lang['invoice_item_long_description']     = 'Descrizione Lunga';
# Customers
$lang['client_delete_invoices_warning']    = 'Questo cliente ha le fatture e preventivi sul suo account. Non puoi eliminare questo cliente. In futuro cambiare tutte le fatture a un altro cliente quindi eliminare.';
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
$lang['settings_number_padding_invoice_and_estimate'] = 'Nuemro di zeri su Fattura/Preventivo. <br /> <small>Es. Se questo valore è 3 il numero sarà formattato: 005 o 025</small>';
$lang['settings_show_sale_agent_on_invoices']         = 'Mostra Agente di Vendita su Fattura';
$lang['settings_show_sale_agent_on_estimates']        = 'Mostra Agente di Vendita su Preventivo';
$lang['settings_predefined_predefined_term']          = 'Termini & Condizioni Predefinite';
$lang['settings_predefined_clientnote']               = 'Nota Cliente Predefinita';
$lang['settings_custom_pdf_logo_image_url']           = 'URL Logo Personalizzato della Ditta per PDF (JPG - 210x60px)';
$lang['settings_custom_pdf_logo_image_url_tooltip']   = 'Probabilmente si avranno problemi con le immagini PNG con trasparenza che vengono gestite in modo diverso a seconda del php-imagick o versione php-gd utilizzata. Provare ad aggiornare php-imagick e disabilitare php-gd
. Se si lascia vuoto questo campo verrà utilizzato il logo caricato.';

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
$lang['contract_trash_tooltip']         = 'Se hai cestinato il canotratto, non sarà visibile lato cliente, non sarà incluso nel grafico e in altre statistiche e per impostazione predefinita nemmeno quando vedrai la lista di tutti i contratti.';

$lang['contract_renew_heading']               = 'Rinnovo Contratto';
$lang['contract_summary_heading']             = 'Riepilogo Contratto';
$lang['contract_summary_expired']             = 'Scaduto';
$lang['contract_summary_active']              = 'Attivo';
$lang['contract_summary_about_to_expire']     = 'In Scadenza';
$lang['contract_summary_recently_added']      = 'Aggiunto Recentemente';
$lang['contract_summary_trash']               = 'Cestino';
$lang['contract_summary_by_type']             = 'Tipi di Contratti';
$lang['contract_summary_by_type_value']       = 'Valore Contratti per Tipo';
$lang['contract_renewed_successfuly']         = 'Contratto rinnovato con successo';
$lang['contract_renewed_fail']                = 'Problema nel rinnovamento del contratto. Contattare l\'amministratore';
$lang['no_contract_renewals_found']           = 'Non sono stati trovati rinnovi per questo contratto';
$lang['no_contract_renewals_history_heading'] = 'Storico Rinnovo Contratto';
$lang['contract_renewed_by']                  = '%s rinnovato questo contratto';
$lang['contract_renewal_deleted']             = 'Rinnovo eliminato con successo';
$lang['contract_renewal_delete_fail']         = 'L\'eliminazione del rinnovo del contratto è fallita. Contattare l\'amministratore';

$lang['contract_renewal_new_value'] = 'Nuovo Valore Contratto: %s';
$lang['contract_renewal_old_value'] = 'Vecchio VAlore Contratto: %s';

$lang['contract_renewal_new_start_date'] = 'Nuova Data Inizio: %s';
$lang['contract_renewal_old_start_date'] = 'La Vecchia Data Inizio Contratto era: %s';

$lang['contract_renewal_new_end_date'] = 'Nuova Scadenza: %s';
$lang['contract_renewal_old_end_date'] = 'La Vecchia Scadenza del Contratto era: %s';
$lang['contract_attachment']           = 'Allegato';
$lang['contract_attachment_lowercase'] = 'allegato';

# Admin Aside Menu
$lang['als_goals_tracking']     = 'Monitoraggio obiettivi';
$lang['als_expenses']           = 'Spese';
$lang['als_reports_expenses']   = 'Spese';
$lang['als_expenses_vs_income'] = 'Spese e Entrate';

# Invoices
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
$lang['goal_staff_members_notified_about_failure']     = 'I membri dello Staff vengono avvisati per il fallimento';
$lang['goal_notify_staff_manualy']                     = 'Notifica Manuale Membri Staff';
$lang['goal_notify_staff_notified_manualy_success']    = 'I membri dello staff sono avvisati del risultato di questo  obiettivo';
$lang['goal_notify_staff_notified_manualy_fail']       = 'Mancata notifica ai membri dello staff per il risultato di questo obiettivo';

$lang['goal_achieved'] = 'Raggiunto';
$lang['goal_failed']   = 'Fallito';
$lang['goal_close']    = 'Molto Vicino';

$lang['goal_type_total_income']                                         = 'Raggiungere Totali Entrate';
$lang['goal_type_convert_leads']                                        = 'Convertire X Potenziali Clienti';
$lang['goal_type_increase_customers_without_leads_conversions']         = 'Incrementare Numero Clienti';
$lang['goal_type_increase_customers_without_leads_conversions_subtext'] = 'Conversioni di Potenziali Clienti è Esclusa';

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
# Expeneses
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
$lang['expense_convert_to_invoice']                                  = 'Converti A Fattura';
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
$lang['expense_recurring_send_custom_on_renew']                      = 'Inviare la fattura per email al cliente quando si ripete la spesa';
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
$lang['numbers_not_formated_while_editing'] = 'Il prezzo nel campo di immissione non è formattato come lo è modifica/aggiungi voce e dovrebbe rimanerlo. Non provare a formattarlo manualmente qui.';
# Contracts
$lang['contracts_view_expired']             = 'Scaduto';
$lang['contracts_view_without_dateend']     = 'Contratti senza data di scadenza';

# Email Templates
$lang['email_template_contracts_fields_heading'] = 'Contratti';
# Invoices General
$lang['invoice_estimate_general_options']        = 'Opzioni Generali';
$lang['invoice_table_item_description']          = 'Descrizione';
$lang['invoice_recurring_indicator']             = 'Ricorrente';

# Estimates
$lang['estimate_convert_to_invoice_successfuly'] = 'Preventivo convertito a fattura con successo';
$lang['estimate_table_item_description']         = 'Descrizione';

# Version 1.0.6
# Invoices
# Currencies
$lang['cant_delete_base_currency'] = 'Non puoi eliminare la valuta di base. Devi prima assegnare una nuova valuta base, poi cancellare questa.';
$lang['invoice_copy']              = 'Copia Fattura';
$lang['invoice_copy_success']      = 'Fattura copiata con successo';
$lang['invoice_copy_fail']         = 'Copia della fattura fallita';
$lang['invoice_due_after_help']    = 'Impostare a zero per evitare il calcolo';

$lang['show_shipping_on_invoice'] = 'Mostra i dettagli di spedizione in fattura';

# Estimates
$lang['show_shipping_on_estimate']         = 'Mostra i dettagli di spedizione nel preventivo';
$lang['is_invoiced_estimate_delete_error'] = 'Questo preventivo è fatturato. Non puoi eliminarlo.';

# Customers & Invoices / Estimates
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
$lang['set_password_email_sent_to_client_and_profile_updated'] = 'Profilo aggiornato e email per impostare la password inviata al cliente con successo';
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

$lang['lead_not_found']                                                      = 'Potenzaile Cliente non trovato';
$lang['lead_lost']                                                           = 'Perso';
$lang['lead_junk']                                                           = 'Rifiutato';
$lang['leads_not_assigned']                                                  = 'Non Assegnato';
# Contacts
$lang['contract_not_visible_to_client']                                      = 'Nascondi al Cliente';
$lang['contract_edit_overview']                                              = 'Riepilogo Contratto';
$lang['contract_attachments']                                                = 'Allegati';
# Tasks
$lang['task_view_make_public']                                               = 'Pubblica';
$lang['task_is_private']                                                     = 'Attività Privata';
$lang['task_finished']                                                       = 'Terminata';
$lang['task_single_related']                                                 = 'Correlata';
$lang['task_unmark_as_complete']                                             = 'Togliere contrassegno di Completa';
$lang['task_unmarked_as_complete']                                           = 'Tolto contrassegno di Completato';
$lang['task_relation']                                                       = 'Correlata';
$lang['task_public']                                                         = 'Pubblica';
$lang['task_public_help']                                                    = 'Se si imposta questa attività per pubblico sarà visibile per tutti i membri dello staff. In caso contrario, sarà visibile solo ai membri che sono assegnatari, seguaci, creatore o gli amministratori';
# Settings
$lang['settings_general_favicon']                                            = 'Favicon';
$lang['settings_output_client_pdfs_from_admin_area_in_client_language']      = 'Documenti PDF del Cliente in uscita dall\'area ammin nella lingua del cliente';
$lang['settings_output_client_pdfs_from_admin_area_in_client_language_help'] = 'Se questa opzione è impostata su Sì ed es. la lingua predefinita del sistema è l\'inglese e il cliente ha la lingua di installazione francese i documenti PDF verranno emessi nella lingua del cliente';
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
$lang['show_customer_reminders_on_calendar'] = 'Customer Reminders';

# Leads
$lang['copy_custom_fields_convert_to_customer']                      = 'Copia campi personalizzati al profilo cliente';
$lang['copy_custom_fields_convert_to_customer_help']                 = 'Se uno qualsiasi dei seguenti campi personalizzati non esiste per il cliente sarà automaticamente creata con lo stesso nome in caso contrario solo il valore sarà copiato dal profilo potenziali clienti.';
$lang['lead_profile']                                                = 'Profilo';
$lang['lead_is_client']                                              = 'Cliente';
$lang['leads_kan_ban_notes_title']                                   = 'Note';
$lang['leads_email_integration_folder_no_encryption']                = 'Senza Crittografia';
$lang['leads_email_integration']                                     = 'Integrazione email';
$lang['leads_email_active']                                          = 'Attivo';
$lang['leads_email_integration_imap']                                = 'IMAP Server';
$lang['leads_email_integration_email']                               = 'Indirizzo Email (Login)';
$lang['leads_email_integration_password']                            = 'Password';
$lang['leads_email_integration_default_source']                      = 'Default Source';
$lang['leads_email_integration_check_every']                         = 'Controlla ogni (minuti)';
$lang['leads_email_integration_default_assigned']                    = 'Responsabile per nuovo potenziale cliente';
$lang['leads_email_encryption']                                      = 'Crittografata';
$lang['leads_email_integration_updated']                             = 'Integrazione email aggiornata';
$lang['leads_email_integration_default_status']                      = 'Status Predefinito';
$lang['leads_email_integration_folder']                              = 'Cartella';
$lang['leads_email_integration_notify_when_lead_imported']           = 'Notifica quando potenziale cliente importato';
$lang['leads_email_integration_only_check_unseen_emails']            = 'Controlla solo email non aperte';
$lang['leads_email_integration_only_check_unseen_emails_help']       = 'Lo script auto imposta di aprire le email dopo il controllo. Questo seve per evitare il ricontrollo di tutte le email ogni volta. Non è raccomandato deselezionare questa opzione se si hanno molte email e si ha impostato molti invii alle email impostate per i potenziali clienti';
$lang['leads_email_integration_notify_when_lead_contact_more_times'] = 'Notifica se il potenziale cliente ha inviato più di ina email';
$lang['leads_email_integration_test_connection']                     = 'Test IMAP Connection';
$lang['lead_email_connection_ok']                                    = 'IMAP Connection is good';
$lang['lead_email_connection_not_ok']                                = 'IMAP Connection is not okey';
$lang['lead_email_activity']                                         = 'Email Activity';
$lang['leads_email_integration_notify_roles']                        = 'Ruoili per Notifica';
$lang['leads_email_integration_notify_staff']                        = 'Staff Members to Notify';
$lang['lead_public']                                                 = 'Pubblico';
# Knowledge Base

$lang['kb_group_color']                = 'Colore';
$lang['kb_group_order']                = 'Ordine';
# Utilities - BULK PDF Exporter
$lang['bulk_pdf_exporter']             = 'Bulk PDF Exporter';
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
$lang['backup_success']                  = 'Backup eseguito consuccesso';
$lang['utility_backup']                  = 'Backup Database';
$lang['utility_create_new_backup_db']    = 'Crea Backup Database';
$lang['utility_backup_table_backupname'] = 'Backup';
$lang['utility_backup_table_backupsize'] = 'Dimensione Backup';
$lang['utility_backup_table_backupdate'] = 'Data';
$lang['utility_db_backup_note']          = 'Nota: Dato il limite del tempo di esecuzione e la memoria disponibile per PHP, fare il backup di un database molto grande potrebbe non essere possibile. Se il database è molto grande potrebbe essere necessario eseguire il backup direttamente dal server SQL tramite la riga di comando, o il vostro amministratore di server potrebbe farlo per voi, se non si dispone di privilegi di root.';

# Version 1.0.7
## Customers - portal
$lang['clients_nav_proposals'] = 'Proposte';
$lang['clients_nav_support']   = 'Supporto';
# General
$lang['more']                  = 'Più';
$lang['add_item']              = 'Aggiungi voce';
$lang['goto_admin_area']       = 'Vai all\'area ammin';
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


#Tasks
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

# Invoices
$lang['delete_invoice'] = 'Elimina';

# Calendar
$lang['calendar_lead_reminder'] = 'Promemoria Potenziale Cliente';

$lang['items']      = 'Voci';
$lang['support']    = 'Support';
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
$lang['settings_sales_require_client_logged_in_to_view_estimate'] = 'È richiesto l\'accesso del cliente per vedere il preventivo';
$lang['set_reminder']                                             = 'Imposta promemoria';
$lang['set_reminder_date']                                        = 'Data da notificare';
$lang['reminder_description']                                     = 'Imposta descrizione';
$lang['reminder_notify_me_by_email']                              = 'Manda anche un\'email per questo promemoria';
$lang['reminder_added_successfuly']                               = 'Promemoria aggiunto con successo. Ti sarà notificato in tempo.';
$lang['reminder_description']                                     = 'Descrizione';
$lang['reminder_date']                                            = 'Data';
$lang['reminder_staff']                                           = 'Promemoria';
$lang['reminder_is_notified']                                     = 'È notificato??';
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
$lang['email_piping_only_registered']                             = 'Pipe Only on Registed Users';
$lang['email_piping_enabled']                                     = 'Abilitato';

# Estimates
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
$lang['proposal_open_till']                     = 'Aperta Fino';
$lang['proposal_status_open']                   = 'Aperta';
$lang['proposal_status_accepted']               = 'Accettata';
$lang['proposal_status_declined']               = 'Declinata';
$lang['proposal_status_sent']                   = 'Invia';
$lang['proposal_expired']                       = 'Scaduta';
$lang['proposal_subject']                       = 'Oggetto';
$lang['proposal_total']                         = 'Total';
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
$lang['proposal_to']                            = 'A';
$lang['proposal_add_comment']                   = 'Aggingi Commento';
$lang['proposal_sent_to_email_success']         = 'Proposta inviata per email consuccesso';
$lang['proposal_sent_to_email_fail']            = 'Impossibile inviare la proposta per email';
$lang['proposal_copy_fail']                     = 'Impossibile copiare proposta';
$lang['proposal_copy_success']                  = 'Proposta copiato con successo';
$lang['proposal_status_changed_success']        = 'Status proposta cambiato con successo';
$lang['proposal_status_changed_fail']           = 'Impossibile cambiare lo status proposta';
$lang['proposal_assigned']                      = 'Assegnato';
$lang['proposal_comments']                      = 'Commenti';
$lang['proposal_convert']                       = 'Converti';
$lang['proposal_convert_estimate']              = 'Preventivo';
$lang['proposal_convert_invoice']               = 'Fattura';
$lang['proposal_convert_to_estimate']           = 'Converti a Preventivo';
$lang['proposal_convert_to_invoice']            = 'Converti a Fattura';
$lang['proposal_convert_to_lead_disabled_help'] = 'È necessario convertire il potenziale cliente in cliente al fine di creare %s';
$lang['proposal_convert_not_related_help']      = 'La proposta deve essere correlata al cliente al fine di convertirla a %s';
$lang['proposal_converted_to_estimate_success'] = 'Proposta convertita a preventivo con successo';
$lang['proposal_converted_to_invoice_success']  = 'Proposta convertita a fattura con successo';
$lang['proposal_converted_to_estimate_fail']    = 'Impossibile convertire la proposta a preventivo';
$lang['proposal_converted_to_invoice_fail']     = 'Impossibile convertire la proposta a fattura';

# Proposals - view proposal template
$lang['proposal_total_info']   = 'Totale %s';
$lang['proposal_accept_info']  = 'Accetto';
$lang['proposal_decline_info'] = 'Declinno';
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

# Tasks
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

$lang['customer_have_invoices_by']       = 'Conviene fatture di status %s';
$lang['customer_have_estimates_by']      = 'Contiene preventivi di status %s';
$lang['customer_have_contracts_by_type'] = 'Si hanno contratti di tipo %s';

# Custom fields
$lang['custom_field_show_on_table']              = 'Mostra in tabella';
$lang['custom_field_show_on_client_portal']      = 'Mostra su portale cliente';
$lang['custom_field_show_on_client_portal_help'] = 'Se questo campo è selezionato sarà visibile anche nelle tabelle';
$lang['custom_field_visibility']                 = 'Visibilità';

# Utilities # Menu Builder
$lang['utilities_menu_translate_name_help'] = 'You can add here also translate strings. So if staff/system have language other then the default the menu item names will be outputed in the staff language. Otherwise if the string dont exists in the translate file will be taken the string you enter here.';
$lang['utilities_menu_icon']                = 'Icona';
$lang['active_menu_items']                  = 'Active Menu Items';
$lang['inactive_menu_items']                = 'Inactive Menu Items';
$lang['utilities_menu_permission']          = 'Permission';
$lang['utilities_menu_url']                 = 'URL';
$lang['utilities_menu_name']                = 'Nome';
$lang['utilities_menu_save']                = 'Salva Menu';

# Knowledge Base
$lang['view_articles_list']     = 'View Articles';
$lang['view_articles_list_all'] = 'All Articles';
$lang['als_add_article']        = 'Add Article';
$lang['als_all_articles']       = 'All Articles';
$lang['als_kb_groups']          = 'Groups';

# Customizer Menu
$lang['menu_builder']            = 'Menu Setup';
$lang['main_menu']               = 'Main Menu';
$lang['setup_menu']              = 'Setup Menu';
$lang['utilities_menu_url_help'] = '%s is auto appended to the url';

# Spam Filter - Tickets
$lang['spam_filters']                 = 'Spam Filters';
$lang['spam_filter']                  = 'Spam Filter';
$lang['new_spam_filter']              = 'New Spam Filter';
$lang['spam_filter_blocked_senders']  = 'Blocked Senders';
$lang['spam_filter_blocked_subjects'] = 'Blocked Subjects';
$lang['spam_filter_blocked_phrases']  = 'Blocked Phrases';
$lang['spam_filter_content']          = 'Content';
$lang['spamfilter_edit_heading']      = 'Edit Spam Filter';
$lang['spamfilter_add_heading']       = 'Add Spam Filter';
$lang['spamfilter_type']              = 'Type';
$lang['spamfilter_type_subject']      = 'Subject';
$lang['spamfilter_type_sender']       = 'Sender';
$lang['spamfilter_type_phrase']       = 'Phrase';

# Tickets
$lang['block_sender']               = 'Block Sender';
$lang['sender_blocked']             = 'Sender Blocked';
$lang['sender_blocked_successfuly'] = 'Sender Blocked Successfuly';
$lang['ticket_date_created']        = 'Data Created';

#KB
$lang['edit_kb_group']             = 'Edit group';
# Leads
$lang['edit_source']               = 'Edit Source';
$lang['edit_status']               = 'Edit Status';
# Contacts
$lang['contract_type_edit']        = 'Edit Contract Type';
# Reports
$lang['report_by_customer_groups'] = 'Total Value By Cliente Groups';
#Utilities
$lang['ticket_pipe_log']           = 'Ticket Pipe Log';
$lang['ticket_pipe_name']          = 'From Nome';
$lang['ticket_pipe_email_to']      = 'To';
$lang['ticket_pipe_email']         = 'From Email';
$lang['ticket_pipe_subject']       = 'Subject';
$lang['ticket_pipe_message']       = 'Message';
$lang['ticket_pipe_date']          = 'Data';
$lang['ticket_pipe_status']        = 'Status';

# Home
$lang['home_latest_activity']       = 'Latest Activity';
$lang['home_my_tasks']              = 'My Tasks';
$lang['home_latest_activity']       = 'Latest Activity';
$lang['home_my_todo_items']         = 'My Todo Items';
$lang['home_widget_view_all']       = 'View All';
$lang['home_stats_full_report']     = 'Full Report';

# Validation

$lang['form_validation_required']    = 'The {field} field is required.';
$lang['form_validation_valid_email'] = 'The {field} field must contain a valid email address.';
$lang['form_validation_matches']     = 'The {field} field does not match the {param} field.';
$lang['form_validation_is_unique']   = 'The {field} field must contain a unique value.';

# Version 1.0.8
# Notifications & Leads/Estimates/Invoices Activity Log
$lang['not_event'] = 'Event start today - %s ...';
$lang['not_event_public'] = 'Public event start today - %s ...';
$lang['not_contract_expiry_reminder'] = 'Contract expiry reminder - %s ...';
$lang['not_recurring_expense_cron_activity_heading'] = 'Recurring Expenses Cron Job Activity';
$lang['not_recurring_invoices_cron_activity_heading'] = 'Recurring Invoices Cron Job Activity';
$lang['not_recurring_total_renewed'] = 'Total Renewed: %s';
$lang['not_recurring_expenses_action_taken_from'] = 'Action taken from recurring expense';
$lang['not_invoice_created'] = 'Invoice Created:';
$lang['not_invoice_renewed'] = 'Renewed Invoice:';
$lang['not_expense_renewed'] = 'Renewed Expense:';
$lang['not_invoice_sent_to_customer'] = 'Invoice Sent to Cliente: %s';
$lang['not_invoice_sent_yes'] = 'Yes';
$lang['not_invoice_sent_not'] = 'No';
$lang['not_action_taken_from_recurring_invoice'] = 'Action taken from recurring invoice:';
$lang['not_new_reminder_for'] = 'New Reminder for %s';
$lang['not_received_one_or_more_messages_lead'] = 'Received one more email message from lead';
$lang['not_received_lead_imported_email_integration'] = 'Lead Imported From Email Integration';
$lang['not_lead_imported_attachment'] = 'Imported attachment from email';
$lang['not_estimate_status_change'] = 'Imported attachment from email';
$lang['not_estimate_status_updated'] = 'Estimate Status Updated: From: %s to %s';
$lang['not_goal_message_success'] = 'Congratiolation! We achieved new goal.<br /> Goal Type: %s
<br />Goal Achievement: %s
<br />Total Achivement: %s
<br />Start Data: %s
<br />End Data: %s';
$lang['not_assigned_lead_to_you'] = '%s assigned lead %s to you';
$lang['not_lead_activity_assigned_to'] = '%s assigned to %s';
$lang['not_lead_activity_attachment_deleted'] = 'Delete Attachment';
$lang['not_lead_activity_status_updated'] = '%s updated lead status from %s to %s';
$lang['not_lead_activity_contacted'] = '%s contacted this lead on %s';
$lang['not_lead_activity_created'] = '%s created lead';
$lang['not_lead_activity_marked_lost'] = 'Contrassegnato as lost';
$lang['not_lead_activity_unmarked_lost'] = 'Unmarked as lost';
$lang['not_lead_activity_marked_junk'] = 'Contrassegnato as junk';
$lang['not_lead_activity_unmarked_junk'] = 'Unmarked as junk';
$lang['not_lead_activity_added_attachment'] = 'Added attachment';
$lang['not_lead_activity_converted_email'] = 'Lead email changed. First lead email was: %s and added as customer with email %s';
$lang['not_lead_activity_converted'] = '%s Converted this lead to customer';
$lang['not_liked_your_post'] = '%s liked your post %s ...';
$lang['not_commented_your_post'] = '%s commented on your post %s ...';
$lang['not_liked_your_comment'] = '%s liked your comment %s ...';
$lang['not_proposal_assigned_to_you'] = 'Proposal assigned to you - %s ...';
$lang['not_proposal_comment_from_client'] = 'New comment from customer on proposal %s ...';
$lang['not_proposal_proposal_accepted'] = 'Proposal Accepted';
$lang['not_proposal_proposal_declined'] = 'Proposal Declined';
$lang['not_task_added_you_as_follower'] = 'added you as follower on task %s ...';
$lang['not_task_added_someone_as_follower'] = 'added %s as follower on task %s ...';
$lang['not_task_added_himself_as_follower'] = 'added himself as follower on task %s ...';
$lang['not_task_assigned_to_you'] = 'assigned a task to you %s ...';
$lang['not_task_assigned_someone'] = 'assigned %s to task %s ...';
$lang['not_task_will_do_user'] = 'will do task %s ...';
$lang['not_task_new_attachment'] = 'New Attachment Added';
$lang['not_task_marked_as_complete'] = 'marked task as complete %s';
$lang['not_task_unmarked_as_complete'] = 'unmarked task as complete %s';
$lang['not_ticket_assigned_to_you'] = 'Ticket assigned to you - %s ...';
$lang['not_ticket_reassigned_to_you'] = 'Ticket reassigned to you - %s ...';
$lang['not_estimate_customer_accepted'] = 'Congratiolations! Client accepted estimate with number %s';
$lang['not_estimate_customer_declined'] = 'Client declined estimate with number %s';
$lang['estimate_activity_converted'] = 'converted this estimate to invoice.<br /> %s';
$lang['estimate_activity_created'] = 'Created the estimate';
$lang['invoice_estimate_activity_removed_item'] = 'removed item <b>%s</b>';
$lang['estimate_activity_number_changed'] = 'Estimate number changed from %s to %s';
$lang['invoice_activity_number_changed'] = 'Invoice number changed from %s to %s';
$lang['invoice_estimate_activity_updated_item_short_description'] = 'updated item short description from %s to %s';
$lang['invoice_estimate_activity_updated_item_long_description'] = 'updated item long description from <b>%s</b> to <b>%s</b>';
$lang['invoice_estimate_activity_updated_item_rate'] = 'updated item rate from %s to %s';
$lang['invoice_estimate_activity_updated_qty_item'] = 'updated quantity on item <b>%s</b> from %s to %s';
$lang['invoice_estimate_activity_added_item'] = 'added new item <b>%s</b>';
$lang['invoice_estimate_activity_sent_to_client'] = 'sent estimate to client';
$lang['estimate_activity_client_accepted_and_converted'] = 'Cliente accepted this estimate. Estimate is converted to invoice with number %s';
$lang['estimate_activity_client_accepted'] = 'Cliente accepted this estimate';
$lang['estimate_activity_client_declined'] = 'Client declined this estimate';
$lang['estimate_activity_marked'] = 'marked estimate as %s';
$lang['invoice_activity_status_updated'] = 'Invoice status updated from %s to %s';
$lang['invoice_activity_created'] = 'created the invoice';
$lang['invoice_activity_from_expense'] = 'converted to invoice from expense';
$lang['invoice_activity_recuring_created'] = '[Recurring] Invoice created by CRON';
$lang['invoice_activity_recuring_from_expense_created'] = '[Invoice From Expense] Invoice created by CRON';
$lang['invoice_activity_sent_to_client_cron'] = 'Invoice sent to customer by CRON';
$lang['invoice_activity_sent_to_client'] = 'sent invoice to customer';
$lang['invoice_activity_marked_as_sent'] = 'marked invoice as sent';
$lang['invoice_activity_payment_deleted'] = 'deleted payment for the invoice. Pagamento #%s, total amount %s';
$lang['invoice_activity_payment_made_by_client'] = 'Client made payment for the invoice from total <b>%s</b> - %s';
$lang['invoice_activity_payment_made_by_staff'] = 'recorded payment from total <b>%s</b> - %s';
$lang['invoice_activity_added_attachment'] = 'Added attachment';

# Navigation
$lang['top_search_placeholder'] = 'Search...';

# Staff
$lang['staff_profile_inactive_account'] = 'This staff member account is inactive';

# Estimates
$lang['copy_estimate'] = 'Copy Estimate';
$lang['estimate_copied_successfuly'] = 'Estimate copied successfuly';
$lang['estimate_copied_fail'] = 'Failed to copy estimate';

# Tasks
$lang['tasks_view_assigned_to_user'] = 'Tasks assigned to me';
$lang['tasks_view_follower_by_user'] = 'Tasks i\'m following';
$lang['no_tasks_found'] = 'No Tasks Found';

# Leads
$lang['leads_dt_datecreated'] = 'Created';
$lang['leads_sort_by'] = 'Sort By';
$lang['leads_sort_by_datecreated'] = 'Data Created';
$lang['leads_sort_by_kanban_order'] = 'Kan Ban Order';

# Proposals
$lang['proposal_items_name'] = 'Item';
$lang['proposal_items_description'] = 'Descrizione';
$lang['proposal_items_qty'] = 'Qty';
$lang['proposal_items_rate'] = 'Prezzo';
$lang['proposal_items_tax'] = 'Tax';
$lang['proposal_items_amount'] = 'Importo';

# Authentication
$lang['check_email_for_reseting_password'] = 'Check your email for further instructions resetting your password';
$lang['inactive_account'] = 'Inactive Account';
$lang['error_setting_new_password_key'] = 'Error setting new password';
$lang['password_reset_message'] = 'Your password has been reset. Please login now!';
$lang['password_reset_message_fail'] = 'Error resetting your password. Try again.';
$lang['password_reset_key_expired'] = 'Password key expired or invalid user';
$lang['admin_auth_reset_pass_repeat'] = 'Password Repeat';
$lang['auth_reset_pass_email_not_found'] = 'Email not found';
$lang['auth_reset_password_submit'] = 'Reset Password';

# Settings
$lang['settings_amount_to_words'] = 'Importo to words';
$lang['settings_amount_to_words_desc'] = 'Output total amount to words in invoice/estimate';
$lang['settings_amount_to_words_enabled'] = 'Enable';
$lang['settings_total_to_words_lowercase'] = 'Number words into lowercase';
$lang['settings_show_tax_per_item'] = 'Show TAX per item (Invoices/Estimates)';

# Reports
$lang['report_sales_months_three_months'] = 'Last 3 months';
$lang['report_invoice_number'] = 'Invoice #';
$lang['report_invoice_customer'] = 'Cliente';
$lang['report_invoice_date'] = 'Data';
$lang['report_invoice_duedate'] = 'Due Data';
$lang['report_invoice_amount'] = 'Importo';
$lang['report_invoice_amount_with_tax'] = 'Importo with tax';
$lang['report_invoice_amount_open'] = 'Importo open';
$lang['report_invoice_status'] = 'Status';
$lang['report_invoice_total_amount_with_tax'] = 'Total amount with tax';
$lang['report_invoice_total_amount_without_tax'] = 'Total amount without tax';
$lang['report_invoice_total_taxes'] = 'Taxes';

#Version 1.0.9

# Home stats
$lang['home_stats_by_project_status'] = 'Statistics by project status';
$lang['home_invoice_overview'] = 'Invoice overview';
$lang['home_estimate_overview'] = 'Estimate overview';
$lang['home_proposal_overview'] = 'Proposal overview';
$lang['home_lead_overview'] = 'Lead overview';
$lang['home_my_projects'] = 'My Projects';
$lang['home_announcements'] = 'Announcements';

# Settings
$lang['settings_leads_kanban_limit'] = 'Limit leads Kan Ban rows per status';
$lang['settings_group_misc'] = 'Misc';
$lang['show_projects_on_calendar'] = 'Show projects on calendar';
$lang['settings_media_max_file_size_upload'] = 'Max file size upload in Media (MB)';
$lang['settings_client_staff_add_edit_delete_task_comments_first_hour'] = 'Allow customer/staff to add/edit task comments only in the first hour (Administrators not applied)';

# Email templates
$lang['email_template_only_domain_email'] = 'Only domain email';

# Announcements
$lang['dismiss_announcement'] = 'Dismiss announcement';
$lang['dismiss_announcement'] = 'Dismiss announcement';
$lang['announcement_from'] = 'From:';
$lang['announcement_date'] = 'Date posted: %s';
$lang['announcement_not_found'] = 'Announcement not found';
$lang['announcements_recents'] = 'Recent Announcements';

# General
$lang['zip_invoices'] = 'Zip Invoices';
$lang['zip_estimates'] = 'Zip Estimates';
$lang['zip_payments'] = 'Zip Payments';
$lang['setup_help'] = 'Help';
$lang['clients_list_company'] = 'Company';
$lang['dt_button_export'] = 'Export';

$lang['dt_entries'] = 'entries';
$lang['invoice_total_paid'] = 'Total Paid';
$lang['invoice_amount_due'] = 'Amount Due';
$lang['report_invoice_discount'] = 'Discounts';

# Calendar
$lang['calendar_project'] = 'Project';

# Leads
$lang['leads_import_assignee'] = 'Assignee';
$lang['customer_from_lead'] = 'Customer from %s';
$lang['lead_kan_ban_attachments'] = 'Attachments %s';
$lang['leads_sort_by_lastcontact'] = 'Last Contact';

# Tasks
$lang['task_comment_added'] = 'Comment successfuly added';
$lang['task_duedate'] = 'Due Date';
$lang['task_view_comments'] = 'Comments';
$lang['task_comment_updated'] = 'Comment updated';
$lang['task_visible_to_client'] = 'Visible to customer';
$lang['task_hourly_rate'] = 'Hourly Rate';
$lang['hours'] = 'Hours';
$lang['seconds'] = 'Seconds';
$lang['minutes'] = 'Minutes';
$lang['task_start_timer'] = 'Start Timer';
$lang['task_stop_timer'] = 'Stop Timer';
$lang['task_billable_help'] = 'If you check billable the task will be shown when creating invoice as items';
$lang['task_billable'] = 'Billable';
$lang['task_billable_yes'] = 'Billable';
$lang['task_billable_no'] = 'Not Billable';
$lang['task_billed'] = 'Billed';
$lang['task_billed_yes'] = 'Billed';
$lang['task_billed_no'] = 'Not Billed';
$lang['task_user_logged_time'] = 'Your logged time:';
$lang['task_total_logged_time'] = 'Total logged time:';
$lang['task_is_billed'] = 'This task is billed on invoice with number %s';
$lang['task_statistics'] = 'Statistics';
$lang['task_milestone'] = 'Milestone';

# Tickets
$lang['ticket_message_updated_successfuly'] = 'Message updated successfuly';

# Invoices
$lang['invoice_task_item_project_tasks_not_included'] = 'Projects tasks are not included in this list.';
$lang['show_quantity_as'] = 'Show quantity as:';
$lang['quantity_as_qty'] = 'Qty';
$lang['quantity_as_hours'] = 'Hours';
$lang['invoice_table_hours_heading'] = 'Hours';
$lang['bill_tasks'] = 'Bill Tasks';
$lang['invoice_estimate_sent_to_email'] = 'Email';

# Estimates
$lang['estimate_table_hours_heading'] = 'Hours';

# General
$lang['is_customer_indicator'] = 'Customer';
$lang['print']            = 'Print';
$lang['customer_permission_projects']            = 'Projects';
$lang['no_timers_found']            = 'No started timers found';
$lang['timers_started_confirm_logout']            = 'Tasks timers found started!<br /><br />Are you sure you want to logout without stoping the timers?';
$lang['confirm_logout']            = 'Logout';
$lang['timer_top_started']            = 'Started at %s';

# Projects
$lang['cant_change_billing_type_billed_tasks_found'] = 'You cant change billing type. Billed tasks already found for this project.';
$lang['project_customer_permission_warning'] = 'The system indicated that the customer dont have permission for projects. The customer wont be able to see the project. Consider add permission in the customer profile tab Permissions.';
$lang['project_invoice_timesheet_start_time'] = 'Start time: %s';
$lang['project_invoice_timesheet_end_time'] = 'End time: %s';
$lang['project_invoice_timesheet_total_logged_time'] = 'Logged time: %s';
$lang['project_view_as_client'] = 'View project as customer';
$lang['project_mark_all_tasks_as_completed'] = 'Mark all tasks as completed and stop all timers (No notifications sent to project members)';
$lang['project_not_started_status_tasks_timers_found'] = 'Task timers found for this project but the project is with status Not Started. Recomended to change the project status to In Progress';
$lang['project_status'] = 'Status';
$lang['project_status_1'] = 'Not Started';
$lang['project_status_2'] = 'In Progress';
$lang['project_status_3'] = 'On Hold';
$lang['project_status_4'] = 'Finished';

$lang['project_file_uploaded_by_customer'] = 'Customer';
$lang['project_file_dateadded'] = 'Date uploaded';
$lang['project_file_filename'] = 'Filename';
$lang['project_file__filetype'] = 'Filetype';
$lang['project_file_visible_to_customer'] = 'Visible to Customer';
$lang['project_file_uploaded_by'] = 'Uploaded by';
$lang['edit_project'] = 'Edit Project';
$lang['copy_project'] = 'Copy Project';
$lang['delete_project'] = 'Delete Project';
$lang['project_task_assigned_to_user'] = 'Task assigned to you';
$lang['seconds'] = 'Seconds';
$lang['hours'] = 'Hours';
$lang['minutes'] = 'Minutes';
$lang['project']                 = 'Project';
$lang['project_lowercase']       = 'project';
$lang['projects']                = 'Projects';
$lang['projects_lowercase']      = 'projects';
$lang['project_settings']      = 'Project settings';
$lang['project_invoiced_successfuly']             = 'Project Invoiced Successfuly';
$lang['new_project']             = 'New Project';
$lang['project_files']            = 'Files';
$lang['project_activity']            = 'Activity';
$lang['project_name']            = 'Project Name';
$lang['project_description']            = 'Project Description';
$lang['project_customer']            = 'Customer';
$lang['project_start_date']            = 'Start Date';
$lang['project_datecreated']            = 'Date Created';
$lang['project_deadline']            = 'Deadline';
$lang['project_billing_type']            = 'Billing Type';
$lang['project_billing_type_fixed_cost']            = 'Fixed Cost';
$lang['project_billing_type_project_hours']            = 'Project Hours';
$lang['project_billing_type_project_task_hours']            = 'Task Hours';
$lang['project_billing_type_project_task_hours_hourly_rate']            = 'Based on task hourly rate';
$lang['project_rate_per_hour']            = 'Rate Per Hour';
$lang['project_total_cost']            = 'Total Cost';
$lang['project_members']            = 'Project Members';
$lang['project_member_removed']     = 'Project member removed successfuly';
$lang['project_overview']           = 'Project Overview';
$lang['project_gant']            = 'Gantt View';
$lang['project_milestones']            = 'Milestones';
$lang['project_milestone_order']            = 'Order';
$lang['project_milestone_duedate_passed']            = 'Duedate passed';
$lang['record_timesheet']            = 'Timesheet';
$lang['new_milestone']            = 'New Milestone';
$lang['edit_milestone']            = 'Edit Milestone';
$lang['milestone_name']            = 'Name';
$lang['milestone_due_date']            = 'Duedate';
$lang['project_milestone']            = 'Milestone';
$lang['project_notes']            = 'Notes';
$lang['project_timesheets']            = 'Timesheets';
$lang['project_timesheet']            = 'Timesheet';
$lang['milestone_total_logged_time']            = 'Logged Time';
$lang['project_overview_total_logged_hours']            = 'Total Logged Hours';
$lang['milestones_uncategorized']            = 'Uncategorized';
$lang['milestone_no_tasks_found']            = 'No tasks found';
$lang['project_copied_successfuly']            = 'Project data copied successfuly';
$lang['failed_to_copy_project']            = 'Failed to copy project';
$lang['copy_project_task_include_check_list_items']            = 'Copy checklist items';
$lang['copy_project_task_include_assignees']            = 'Copy the same assignees';
$lang['copy_project_task_include_followers']            = 'Copy the same followers';

$lang['project_days_left']            = 'Days Left';
$lang['project_open_tasks']            = 'Open Tasks';
$lang['timesheet_stop_timer']            = 'Stop Timer';
$lang['failed_to_add_project_timesheet_end_time_smaller']            = 'Failed to add timesheet. End time is smaller then start time';
$lang['project_timesheet_user']            = 'Member';
$lang['project_timesheet_start_time']            = 'Start Time';
$lang['project_timesheet_end_time']            = 'End Time';
$lang['project_timesheet_time_spend']            = 'Time Spent';
$lang['project_timesheet_task']            = 'Task';
$lang['project_invoices']                = 'Invoices';
$lang['total_logged_hours_by_staff']            = 'Total Logged Time';
$lang['invoice_project']            = 'Invoice Project';
$lang['invoice_project_info']            = 'Project Invoice Info';
$lang['invoice_project_data_single_line']            = 'Single line';
$lang['invoice_project_data_task_per_item']            = 'Task per item';
$lang['invoice_project_data_timesheets_individualy']            = 'All timesheets individualy';
$lang['invoice_project_item_name_data']            = 'Item name';
$lang['invoice_project_description_data']            = 'Description';
$lang['invoice_project_projectname_taskname']            = 'Project name + Task name';
$lang['invoice_project_all_tasks_total_logged_time']            = 'All tasks + total logged time per task';
$lang['invoice_project_project_name_data']            = 'Project name';
$lang['invoice_project_timesheet_indivudualy_data']            = 'Timesheet start time + end time + total logged time';
$lang['invoice_project_total_logged_time_data']            = 'Total logged time';

$lang['project_allow_client_to'] = 'Allow customer to %s';
$lang['project_setting_view_task_attachments'] = 'view task attachments';
$lang['project_setting_view_task_checklist_items'] = 'view task checklist items';
$lang['project_setting_upload_files'] = 'upload files';
$lang['project_setting_view_task_comments'] = 'view task comments';
$lang['project_setting_upload_on_tasks'] = 'upload attachments on tasks';
$lang['project_setting_view_task_total_logged_time'] = 'view task total logged time';
$lang['project_setting_open_discussions'] = 'open discussions';
$lang['project_setting_comment_on_tasks'] = 'comment on project tasks';
$lang['project_setting_view_tasks'] = 'view tasks';
$lang['project_setting_view_milestones'] = 'view milestones';
$lang['project_setting_view_gantt'] = 'view Gantt';
$lang['project_setting_view_timesheets'] = 'view timesheets';
$lang['project_setting_view_activity_log'] = 'view activity log';
$lang['project_setting_view_team_members'] = 'view team members';

$lang['project_discussion_visible_to_customer_yes']                 = 'Visible';
$lang['project_discussion_visible_to_customer_no']                 = 'Not Visible';

$lang['project_discussion_posted_on']                 = 'Posted on %s';
$lang['project_discussion_posted_by']                 = 'Posted by %s';
$lang['project_discussion_failed_to_delete']                 = 'Failed to delete discussion';
$lang['project_discussion_deleted']                 = 'Discussion deleted successfuly';
$lang['project_discussion_no_activity']                 = 'No Activity';
$lang['project_discussion']                 = 'Discussion';
$lang['project_discussions']                 = 'Discussions';
$lang['edit_discussion'] = 'Create Discussion';
$lang['new_project_discussion'] = 'Create Discussion';
$lang['project_discussion_subject'] = 'Subject';
$lang['project_discussion_description'] = 'Description';
$lang['project_discussion_show_to_customer'] = 'Visible to Customer';
$lang['project_discussion_total_comments'] = 'Total Comments';
$lang['project_discussion_last_activity'] = 'Last Activity';
$lang['discussion_add_comment'] = 'Add comment';
$lang['discussion_newest'] = 'Newest';
$lang['discussion_oldest'] = 'Oldest';
$lang['discussion_attachments'] = 'Attachments';
$lang['discussion_send'] = 'Send';
$lang['discussion_reply'] = 'Answer';
$lang['discussion_edit'] = 'Edit';
$lang['discussion_edited'] = 'Modified';
$lang['discussion_you'] = 'You';
$lang['discussion_save'] = 'Save';
$lang['discussion_delete'] = 'Delete';
$lang['discussion_view_all_replies'] = 'Show all replies';
$lang['discussion_hide_replies'] = 'Hide replies';
$lang['discussion_no_comments'] = 'No comments';
$lang['discussion_no_attachments'] = 'No attachments';
$lang['discussion_attachments_drop'] = 'Drag and drop to upload file';
$lang['project_note'] = 'Note';
$lang['project_note_private'] = 'Private notes';
$lang['project_save_note'] = 'Save note';

# Project Activity
$lang['project_activity_created'] = 'Created the project';
$lang['project_activity_updated'] = 'Updated project';
$lang['project_activity_removed_team_member'] = 'Removed team member';
$lang['project_activity_added_team_member'] = 'Added new team member';
$lang['project_activity_marked_all_tasks_as_complete'] = 'Marked all tasks as complete';
$lang['project_activity_recorded_timesheet'] = 'Recorded timesheet';
$lang['project_activity_task_name'] = 'Task:';
$lang['project_activity_deleted_discussion'] = 'Deleted Discussion';
$lang['project_activity_created_discussion'] = 'Created discussion';
$lang['project_activity_updated_discussion'] = 'Updated discussion';
$lang['project_activity_commented_on_discussion'] = 'Commented on discussion';
$lang['project_activity_deleted_discussion_comment'] = 'Deleted discussion comment';
$lang['project_activity_deleted_milestone'] = 'Deleted milestone';
$lang['project_activity_updated_milestone'] = 'Updated milestone';
$lang['project_activity_created_milestone'] = 'Created new milestone';
$lang['project_activity_invoiced_project'] = 'Invoiced project';
$lang['project_activity_task_marked_complete'] = 'Task marked as complete';
$lang['project_activity_task_unmarked_complete'] = 'Task unmarked as complete';
$lang['project_activity_task_deleted'] = 'Task deleted';
$lang['project_activity_new_task_comment'] = 'Commented on task';
$lang['project_activity_new_task_attachment'] = 'Uploaded attachment on task';
$lang['project_activity_new_task_assignee'] = 'Added new task assignee';
$lang['project_activity_task_assignee_removed'] = 'Removed task assignee';
$lang['project_activity_task_timesheet_deleted'] = 'Removed timesheet';
$lang['project_activity_uploaded_file'] = 'Uploaded project file';
$lang['project_activity_status_updated'] = 'Updated project status';
$lang['project_activity_visible_to_customer'] = 'Visible to customer';
$lang['project_activity_project_file_removed'] = 'Removed project file';

# Notifications - DEPRECED - THESE notifications are depreced and will be removed in further released dont translate them
$lang['not_customer_uploaded_project_file'] = 'New file uploaded';
$lang['not_customer_created_new_project_discussion'] = 'New project discussion created';
$lang['not_customer_commented_on_project_discussion'] = 'New comment on project discussion';

# Customers area
$lang['clients_my_estimates'] = 'My Estimates';
$lang['client_no_reply'] = 'No Reply';
$lang['clients_nav_projects'] = 'Projects';
$lang['clients_my_projects'] = 'My Projects';
$lang['client_profile_image'] = 'Profile image';

/////
$lang['sales_report_cancelled_invoices_not_included'] = 'Cancelled invoices are excluded from the report';
$lang['invoices_merge_cancel_merged_invoices'] = 'Mark merged invoices as cancelled instead of deleting';
$lang['invoice_marked_as_cancelled_successfuly'] = 'Invoice marked as cancelled successfully';
$lang['invoice_unmarked_as_cancelled'] = 'Invoice unmarked as cancelled successfully';
$lang['tasks_reminder_notification_before_help'] = 'Notify task assignees about deadline before X days. The notification/email is sent only to the assignees.';
$lang['tasks_reminder_notification_before'] = 'Task deadline reminder before (Days)';
$lang['not_task_deadline_reminder'] = 'Task deadline reminder';
$lang['dt_length_menu_all'] = 'All';
$lang['task_not_finished'] = 'Not Completed';
$lang['task_billed_cant_start_timer'] = 'Task billed. Timer cant be start';
$lang['invoice_task_billable_timers_found'] = 'Started timers found';
$lang['project_timesheet_not_updated'] = 'Timesheet not affected';
$lang['project_invoice_task_no_timers_found'] = 'No timers found for this task';
$lang['invoice_project_tasks_not_started'] = 'Not yet started | Start Date: %s';
$lang['invoice_project_see_billed_tasks'] = 'See tasks that will be billed on this invoice';
$lang['invoice_project_all_billable_tasks_marked_as_finished'] = 'All billed tasks will be marked as finished';
$lang['invoice_project_nothing_to_bill'] = 'No tasks to bill. Feel free to add whatever you want in the invoice items.';
$lang['invoice_project_start_date_tasks_not_passed'] = 'Tasks with future start date cannot be billed';
$lang['invoice_project_stop_all_timers'] = 'Stop all timers';
$lang['invoice_project_stop_billabe_timers_only'] = 'Stop only billable timers';
$lang['project_tasks_total_timers_stopped'] = 'Stopped total %s timers';
$lang['project_invoice_timers_started'] = 'Task timers found running on billable tasks, invoice cannot be created. Please stop task timers to create invoice.';
$lang['task_start_timer_only_assignee'] = 'You need to be asigned on this task to start the timer!';
$lang['task_comments'] = 'Comments';
$lang['invoice_total_tax'] = 'Total Tax';
$lang['estimates_total_tax'] = 'Total Tax';
$lang['report_invoice_total_tax'] = 'Total Tax';
$lang['home_tickets'] = 'Tickets';
$lang['home_project_activity'] = 'Latest projects activity';
$lang['home_project_activity_not_found'] = 'No projects activity found';
$lang['view_tracking'] = 'Views Tracking';
$lang['view_date'] = 'Date';
$lang['view_ip'] = 'IP Address';
$lang['article_total_views'] = 'Total Views';
$lang['leads_source'] = 'Source';
$lang['invoices_available_for_merging'] = 'Invoices available for merging';
$lang['invoices_merge_discount'] = 'You will have to apply discount of total %s manualy to this invoice';
$lang['invoice_merge_number_warning'] = 'Merging invoices will create gaps in invoice numbers. Please do not merge invoices if you want no gaps in your invoice history. You also have the option of manually adjusting invoice numbers if you want to fill the gaps.';
$lang['invoice_mark_as'] = 'Mark as %s';
$lang['invoice_unmark_as'] = 'Unmark as %s';
$lang['invoice_status_cancelled'] = 'Cancelled';
$lang['tasks_reminder_notification_before_help'] = 'Notify task assignees about deadline before X days. The notification/email is sent only to the assignees.';

# Version 1.1.0
$lang['project_invoice_select_all_tasks'] = 'Select all tasks';
$lang['lead_company'] = 'Company';

# Version 1.1.1
$lang['admin_auth_forgot_password_button'] = 'Confirm';
$lang['task_assigned'] = 'Assigned to';
$lang['switch_to_pipeline'] = 'Switch to pipeline';
$lang['switch_to_list_view'] = 'Switch to list';
$lang['estimates_pipeline'] = 'Estimates Pipeline';
$lang['estimates_pipeline_sort'] = 'Sort By';
$lang['estimates_sort_expiry_date'] = 'Expiry Date';
$lang['estimates_sort_pipeline'] = 'Pipeline Order';
$lang['estimates_sort_datecreated'] = 'Date Created';
$lang['estimates_sort_estimate_date'] = 'Estimate Date';
$lang['estimate_set_reminder_title'] = 'Set Estimate Reminder';
$lang['invoice_set_reminder_title'] = 'Set Invoice Reminder';
$lang['estimate_reminders'] = 'Reminders';
$lang['invoice_reminders'] = 'Reminders';
$lang['estimate_notes'] = 'Notes';
$lang['estimate_add_note'] = 'Add Note';
$lang['dropdown_non_selected_tex'] = 'Nothing selected';
$lang['auto_close_ticket_after'] = 'Auto close ticket after (Hours)';
$lang['event_description'] = 'Description';
$lang['delete_event'] = 'Delete';
$lang['not_new_ticket_created'] = 'New ticket opened in your department - %s';
$lang['receive_notification_on_new_ticket'] = 'Receive notification on new ticket opened';
$lang['receive_notification_on_new_ticket_help'] = 'All staff members which belong to the ticket department will receive notification that new ticket is opened';
$lang['event_updated'] = 'Event updated successfuly';
$lang['customer_contacts'] = 'Contacts';
$lang['new_contact'] = 'New Contact';
$lang['contact'] = 'Contact';
$lang['contact_lowercase'] = 'contact';
$lang['contact_primary'] = 'Primary contact';
$lang['contact_position'] = 'Position';
$lang['contact_active'] = 'Active';
$lang['client_company_info'] = 'Company details';
$lang['proposal_save'] = 'Save Proposal';
$lang['calendar'] = 'Calendar';
$lang['settings_pdf'] = 'PDF';
$lang['settings_pdf_font'] = 'PDF Font';
$lang['settings_pdf_table_heading_color'] = 'Items table heading color';
$lang['settings_pdf_table_heading_text_color'] = 'Items table heading text color';
$lang['settings_pdf_font_size'] = 'Default font size';
$lang['proposal_status_draft'] = 'Draft';
$lang['custom_field_contacts'] = 'Contacts';
$lang['company_primary_email'] = 'Primary email';
$lang['client_register_contact_info'] = 'Primary Contact Information';
$lang['client_register_company_info'] = 'Company Informations';
$lang['contact_permissions_info'] = 'Make sure to set appropriate permissions for this contact';
$lang['defaut_leads_kanban_sort'] = 'Default leads Kan Ban Sort';
$lang['defaut_leads_kanban_sort_type'] = 'Sort';
$lang['order_ascending'] = 'Ascending';
$lang['order_descending'] = 'Descending';
$lang['calendar_expand'] = 'expand';
$lang['proposal_reminders'] = 'Reminders';
$lang['proposal_set_reminder_title'] = 'Set proposal reminder';
$lang['settings_allowed_upload_file_types'] = 'Allowed file types';
$lang['no_primary_contact'] = 'This customer dont have primary contact. You need to setup primary contact login as customer. Its recomended all customers to have primary contacts.';
$lang['leads_merge_customer'] = 'Customer fields merging';
$lang['leads_merge_contact'] = 'Contact fields merging';
$lang['leads_merge_as_contact_field'] = 'Merge as contact field';
$lang['lead_convert_to_client_phone'] = 'Phone';
$lang['invoice_status_report_all'] = 'All';
$lang['import_contact_field'] = 'Contact field';

$lang['file_uploaded_success'] = 'There is no error, the file uploaded with success';
$lang['file_exceds_max_filesize'] = 'The uploaded file exceeds the upload_max_filesize directive in php.ini';
$lang['file_exceds_maxfile_size_in_form'] = 'The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form';
$lang['file_uploaded_partially'] = 'The uploaded file was only partially uploaded';
$lang['file_not_uploaded'] = 'No file was uploaded';
$lang['file_missing_temporary_folder'] = 'Missing a temporary folder';
$lang['file_failed_to_write_to_disk'] = 'Failed to write file to disk.';
$lang['file_php_extension_blocked'] = 'A PHP extension stopped the file upload.';
$lang['calendar_expand'] = 'Expand';
$lang['view_pdf'] = 'View PDF';
$lang['expense_repeat_every'] = 'Repeat every';

# Version 1.1.2
$lang['leads_switch_to_kanban'] = 'Switch to kan ban';
$lang['survey_no_questions'] = 'This survey does not have questions added yet.';
$lang['survey_submit'] = 'Submit';
$lang['contract_content'] = 'Contract';
$lang['contract_save'] = 'Save Contract';
$lang['contract_send_to_email'] = 'Send to email';
$lang['contract_send_to_client_modal_heading'] = 'Send contract to email';
$lang['contract_send_to'] = 'Send to';
$lang['contract_send_to_client_attach_pdf'] = 'Attach PDF';
$lang['contract_send_to_client_preview_template'] = 'Preview Email Template';
$lang['include_attachments_to_email'] = 'Include attachments to email';
$lang['contract_sent_to_client_success'] = 'The contract is successfully sent to the customer';
$lang['contract_sent_to_client_fail'] = 'Failed to send contract';

# Version 1.1.3
$lang['client_invalid_username_or_password'] = 'Invalid username or password';
$lang['client_old_password_incorect']     = 'Your old password is incorrect';
$lang['client_password_changed']          = 'Your password has been changed';
$lang['check_for_new_version']          = 'Check for new version';

# Version 1.1.4
$lang['total_leads_deleted'] = 'Total leads deleted: %s';
$lang['total_clients_deleted'] = 'Total customers deleted: %s';
$lang['confirm_action_prompt'] = 'Are you sure you want to perform this action?';
$lang['mass_delete'] = 'Mass Delete';
$lang['email_protocol'] = 'Email Protocol';
$lang['add_edit_members'] = 'Add/Edit Members';
$lang['project_overview_logged_hours'] = 'Logged Hours:';
$lang['project_overview_billable_hours'] = 'Billable Hours:';
$lang['project_overview_billed_hours'] = 'Billed Hours:';
$lang['project_overview_unbilled_hours'] = 'Unbilled Hours:';
$lang['calendar_first_day'] = 'First Day';
$lang['permission_view'] = 'View';
$lang['permission_edit'] = 'Edit';
$lang['permission_create'] = 'Create';
$lang['permission_delete'] = 'Delete';
$lang['permission'] = 'Permission';
$lang['permissions'] = 'Permissions';
$lang['proposals_pipeline'] = 'Proposals Pipeline';
$lang['proposals_pipeline_sort'] = 'Sort By';
$lang['proposals_sort_open_till'] = 'Open Till';
$lang['proposals_sort_pipeline'] = 'Pipeline Order';
$lang['proposals_sort_datecreated'] = 'Date Created';
$lang['proposals_sort_proposal_date'] = 'Proposal Date';
$lang['is_not_staff_member'] = 'Not staff member';
$lang['lead_created'] = 'Created';
$lang['access_tickets_to_none_staff_members'] = 'Allow access to tickets for none staff members';
$lang['project_expenses'] = 'Expenses';
$lang['expense_currency'] = 'Currency';
$lang['currency_valid_code_help'] = 'Make sure to enter valid currency code.';
$lang['week'] = 'Week';
$lang['weeks'] = 'Weeks';
$lang['month'] = 'Month';
$lang['months'] = 'Months';
$lang['year'] = 'Year';
$lang['years'] = 'Years';
$lang['expense_report_category'] = 'Category';
$lang['expense_paid_via'] = 'Paid Via %s';
$lang['item_as_expense'] = '[Expense]';
$lang['show_help_on_setup_menu'] = 'Show help menu item on setup menu';
$lang['customers_summary_total'] = 'Total Customers';
$lang['filter_by'] = 'Filter by';
$lang['re_captcha'] = 'reCAPTCHA';
$lang['recaptcha_site_key'] = 'Site key';
$lang['recaptcha_secret_key'] = 'Secret key';
$lang['recaptcha_error'] = 'The reCAPTCHA field is telling that you are a robot.';
$lang['smtp_username'] = 'SMTP Username';
$lang['smtp_username_help'] = 'Fill only if your email client use username for SMTP login.';
$lang['pinned_project']= 'Pinned Project';
$lang['pin_project']= 'Pin Project';
$lang['unpin_project']= 'Unpin Project';
$lang['smtp_encryption']= 'Email Encryption';
$lang['smtp_encryption_none']= 'None';
$lang['show_proposals_on_calendar']= 'Proposals';
$lang['invoice_project_see_billed_expenses']= 'See expenses who wil be billed on this invoice';
$lang['project_overview_expenses'] = 'Total Expenses';
$lang['project_overview_expenses_billable'] = 'Billable Expenses';
$lang['project_overview_expenses_billed'] = 'Billed Expenses';
$lang['project_overview_expenses_unbilled'] = 'Unbilled Expenses';
$lang['announcement_date_list'] = 'Date';
$lang['project_setting_view_finance_overview'] = 'view finance overview';
$lang['show_all_tasks_for_project_member'] = 'Allow all staff to see all tasks related to projects (includes non-staff)';
$lang['not_staff_added_as_project_member'] = 'Added you as project member';
$lang['report_expenses_base_currency_select_explanation'] = 'You need to select currency becuase the system found different currencies used for expenses.';

# Version 1.1.6
$lang['project_activity_recorded_expense'] = 'Recorded Expense';
$lang['save_customer_and_add_contact'] = 'Save and create contact';
$lang['tickets_chart_weekly_opening_stats'] = 'Weekly Stats';
$lang['related_knowledgebase_articles'] = 'Related Articles';
$lang['detailed_overview'] = 'Tasks Overview';
$lang['tasks_total_checklists_finished'] = 'Total checklist items marked as finished';
$lang['tasks_total_added_attachments'] = 'Total attachments added';
$lang['tasks_total_comments'] = 'Total comments';
$lang['task_finished_on_time'] = 'Finished on time?';
$lang['task_finished_on_time_indicator'] = 'Yes';
$lang['task_not_finished_on_time_indicator'] = 'No';
$lang['task_filter_fetch_month_by'] = 'Fetch month from';
$lang['filter'] = 'Filter';
$lang['task_filter_detailed_all_months'] = 'All Months';
$lang['kb_article_slug'] = 'Slug';

# Version 1.1.7
$lang['email_template_ticket_warning'] = 'If ticket is imported with email piping and the contact does not exists in the CRM the fields wont be replaced.';
$lang['auto_stop_tasks_timers_on_new_timer'] = 'Stop all other started timers when starting new timer';
$lang['notification_when_customer_pay_invoice'] = 'Receive notification when customer pay invoice (built-in)';
$lang['not_invoice_payment_recored'] = 'New invoice payment - %s';
$lang['email_template_contact_warning'] = 'If contact is not logged while making action the contact merge fields wont be replaced.';
$lang['theme_style'] = 'Theme Style';
$lang['change_role_permission_warning'] = 'Changing role permissions now wont affected current staff members permissions that are using this role.';
$lang['task_copied_successfuly'] = 'Task copied successfully';
$lang['failed_to_copy_task'] = 'Failed to copy task';
$lang['not_project_file_uploaded'] = 'New project file added';
$lang['settings_calendar_color'] = '%s Color';
$lang['settings_calendar_colors_heading'] = 'Styling';
$lang['reminder'] = 'Reminder';
$lang['back_to_tasks_list'] = 'Back to tasks list';
$lang['copy_task_confirm'] = 'Confirm';
$lang['changing_items_affect_warning'] = 'Changing item info wont affect on the created invoices/estimates.';
$lang['tax_is_used_in_expenses_warning'] = 'You cant update this tax because expenses transactions using this tax are found.';
$lang['note'] = 'Note';
$lang['leads_staff_report_converted'] = 'Total converted leads';
$lang['leads_staff_report_created'] = 'Total created leads';
$lang['leads_staff_report_lost'] = 'Total lost leads';
$lang['client_go_to_dashboard'] = 'Back to portal';
$lang['show_estimate_reminders_on_calendar'] = 'Estimate Reminders';
$lang['show_invoice_reminders_on_calendar'] = 'Invoice Reminders';
$lang['calendar_estimate_reminder'] = 'Estimate Reminder';
$lang['calendar_invoice_reminder'] = 'Invoice Reminder';
$lang['show_proposal_reminders_on_calendar'] = 'Proposal Reminders';
$lang['calendar_proposal_reminder'] = 'Proposal Reminder';
$lang['proposal_due_after']= 'Proposal Due After (days)';
$lang['project_progress']= 'Progress';
$lang['calculate_progress_through_tasks']= 'Calculate progress through tasks';
$lang['allow_customer_to_change_ticket_status']= 'Allow customer to change ticket status from customers area';
$lang['switch_to_general_report']= 'Switch to staff report';
$lang['switch_to_staff_report']= 'Switch to general report';
$lang['generate']= 'Generate';
$lang['from_date']= 'From date';
$lang['to_date']= 'To date';
$lang['not_results_found']= 'No results found';
$lang['lead_lock_after_convert_to_customer']= 'Dont allow editing the lead after converting to customer (admins not applied)';
$lang['default_pipeline_sort'] = 'Default pipeline sort';
$lang['not_goal_message_failed'] = 'We failed to achieve goal!<br /> Goal Type: %s
<br />Goal Achievement: %s
<br />Total Achivement: %s
<br />Start Date: %s
<br />End Date: %s';
$lang['toggle_full_view'] = 'Toggle full view';
$lang['not_estimate_invoice_deleted'] = 'deleted the created invoice';
$lang['not_task_new_comment'] = 'commented on task %s';
# Version 1.1.8
$lang['invoice_number_exists'] = 'This invoice number exists for the ongoing year.';
$lang['estimate_number_exists'] = 'This estimate number exists for the ongoing year.';
$lang['email_exists'] = 'Email already exists';
$lang['not_uploaded_project_file'] = 'New file uploaded';
$lang['not_created_new_project_discussion'] = 'New project discussion created';
$lang['not_commented_on_project_discussion'] = 'New comment on project discussion';
$lang['all_staff_members'] = 'All staff members';
$lang['help_project_permissions'] = 'VIEW allows staff member to see ALL projects. If you only want them to see projects they are assigned (added as members), do not give VIEW permissions.';
$lang['help_tasks_permissions'] = 'VIEW allows staff member to see ALL tasks. If you only want them to see tasks they are assigned to or following, do not give VIEW permissions.';
$lang['expense_recuring_days'] = 'Day(s)';
$lang['expense_recuring_weeks'] = 'Week(s)';
$lang['expense_recuring_months'] = 'Month(s)';
$lang['expense_recuring_years'] = 'Years(s)';
$lang['reset_to_default_color'] = 'Reset to default color';
$lang['pdf_logo_width'] = 'Logo Width (PX)';
$lang['drop_files_here_to_upload'] = 'Drop files here to upload';
$lang['browser_not_support_drag_and_drop'] = 'Your browser does not support drag\'n\'drop file uploads';
$lang['remove_file'] = 'Remove file';
$lang['you_can_not_upload_any_more_files'] = 'You can not upload any more files';
$lang['custom_field_only_admin'] = 'Restrict visibility for administrators only';
$lang['leads_default_source'] = 'Default source';
$lang['clear_activity_log'] = 'Clear log';
$lang['default_contact_permissions'] = 'Default contact permissions';
$lang['invoice_activity_marked_as_cancelled'] = 'marked invoice as cancelled';
$lang['invoice_activity_unmarked_as_cancelled'] = 'unmarked invoice as cancelled';
$lang['wait_text'] = 'Please wait...';
$lang['projects_summary'] = 'Projects summary';
$lang['dept_imap_host'] = 'IMAP Host';
$lang['dept_encryption'] = 'Encryption';
$lang['dept_email_password'] = 'Password';
$lang['dept_email_no_encryption'] = 'No Encryption';
$lang['failed_to_decrypt_password'] = 'Failed to decrypt password';
$lang['delete_mail_after_import'] = 'Delete mail after import?';
$lang['expiry_reminder_enabled'] = 'Send expiration reminder';
$lang['send_expiry_reminder_before'] = 'Send expiration reminder before (DAYS)';
$lang['not_expiry_reminder_sent'] = 'Expiry reminder sent';
$lang['send_expiry_reminder'] = 'Sent expiration reminder';
$lang['sent_expiry_reminder_success'] = 'Expiration reminder successfuly sent';
$lang['sent_expiry_reminder_fail'] = 'Failed to send expiration reminder';
$lang['leads_default_status'] = 'Default status';
$lang['item_description_placeholder'] = 'Description';
$lang['item_long_description_placeholder'] = 'Long description';
$lang['item_quantity_placeholder'] = 'Quantity';
$lang['item_rate_placeholder'] = 'Rate';
$lang['tickets_summary'] = 'Tickets Summary';
$lang['tasks_list_priority'] = 'Priority';
$lang['ticket_status_db_2'] = 'In Progress';
$lang['ticket_status_db_1'] = 'Open';
$lang['ticket_status_db_3'] = 'Answered';
$lang['ticket_status_db_4'] = 'On Hold';
$lang['ticket_status_db_5'] = 'Closed';
$lang['ticket_priority_db_1'] = 'Low';
$lang['ticket_priority_db_2'] = 'Medium';
$lang['ticket_priority_db_3'] = 'High';
$lang['customer_have_projects_by'] = 'Contains projects by status %s';
$lang['customer_have_proposals_by'] = 'Contains proposals by status %s';
$lang['do_not_redirect_payment'] = 'Do not redirect me to the payment processor';
$lang['project_tickets'] = 'Tickets';
$lang['invoice_report'] = 'Invoice Report';
$lang['payment_modes_report'] = 'Payment Modes (Transactions)';
$lang['customer_admins'] = 'Customer Admins';
$lang['assign_admin'] = 'Assign admin';
$lang['customer_admin_date_assigned'] = 'Date Assigned';
$lang['customer_admin_login_as_client_message'] = 'Hello %s. You are added as admin to this customer.';
$lang['ticket_form_validation_file_size'] = 'File size must be less than %s';
$lang['has_transactions_currency_base_change'] = 'Changing the base currency is possible only if there are no transactions recorded in that currency. Delete the transactions to change the base currency';
$lang['customers_sort_all'] = 'All';

# Version 1.1.9
$lang['use_recaptcha_customers_area'] = 'Allow recaptcha on customers area (Login/Register)';
$lang['project_marked_as_finished'] = 'Project completed';
$lang['project_status_updated'] = 'Project status updated';
$lang['remove_decimals_on_zero'] = 'Remove decimals on numbers/money with zero decimals (2.00 will become 2, 2.25 will stay 2.25)';
$lang['remove_tax_name_from_item_table'] = 'Remove the tax name from item table row (Invoices/Estimates)';


# Version 1.2.0
$lang['not_billable_expenses_by_categories'] = 'Not billable expenses by categories';
$lang['billable_expenses_by_categories'] = 'Billable expenses by categories';
$lang['format_letter_size'] = 'A4 Landscape';
$lang['pdf_formats'] = 'Document formats';
$lang['swap_pdf_info'] = 'Swap Company/Customer Details (company details to right side, customer details to left side)';
$lang['invoice_estimate_pdf_text_color'] = 'Invoice/Estimate text color';
$lang['expenses_filter_by_categories'] = 'By Categories';
$lang['task_copy'] = 'Copy';
$lang['estimate_status'] = 'Status';
$lang['expenses_report_exclude_billable'] = 'Exclude Billable Expenses';
$lang['expenses_total'] = 'Total';
$lang['estimate_activity_added_attachment'] = 'Added attachment';
$lang['show_to_customer'] = 'Show to customer';
$lang['hide_from_customer'] = 'Hide from customer';
$lang['expenses_report_total'] = 'Total';
$lang['expenses_report'] = 'Expenses report';
$lang['expenses_report_tax'] = 'Tax';
$lang['expenses_report_total_tax'] = 'Total Tax';
$lang['expenses_detailed_report'] = 'Detailed Report';
$lang['expense_not_billable'] = 'Not Billable';
$lang['notification_settings'] = 'Notification settings';
$lang['staff_with_roles'] = 'Staff members with roles';
$lang['specific_staff_members'] = 'Specific Staff Members';
$lang['proposal_mark_as'] = 'Mark as %s';
$lang['kb_report_total_answers'] = 'Total';
$lang['ticket_message_edit'] = 'Edit';
$lang['invoice_files'] = 'Invoice Files';
$lang['estimate_files'] = 'Estimate Files';
$lang['proposal_files'] = 'Proposal Files';
$lang['invoices_awaiting_payment'] = 'Invoices Awaiting Payment';
$lang['tasks_not_finished'] = 'Tasks Not Finished';
$lang['outstanding_invoices'] = 'Outstanding Invoices';
$lang['past_due_invoices'] = 'Past Due Invoices';
$lang['paid_invoices'] = 'Paid Invoices';
$lang['invoice_estimate_year'] = 'Year';
$lang['no_results_text_search_dropdown'] = 'No Results Matched';
$lang['task_stats_logged_hours'] = 'Logged Hours';
$lang['leads_converted_to_client'] = 'Converted Leads';
$lang['current_version'] = 'Current Version: %s';
$lang['task_assigned_from'] = 'This task is assigned to you by %s';
$lang['auto_check_for_new_notifications'] = 'Auto check for new notifications (Seconds - Set 0 to disable)';
$lang['recurring_ends_on'] = 'Ends On (Leave blank for never)';
$lang['new_note'] = 'New Note';
$lang['my_tickets_assigned'] = 'Tickets assigned to me';
$lang['filter_by_assigned'] = 'By Assigned Member';
$lang['staff_stats_total_logged_time'] = 'Total Logged Time';
$lang['staff_stats_last_month_total_logged_time'] = 'Last Month Logged Time';
$lang['staff_stats_this_month_total_logged_time'] = 'This Month Logged Time';
$lang['staff_stats_last_week_total_logged_time'] = 'Last Week Logged Time';
$lang['staff_stats_this_week_total_logged_time'] = 'This Week Logged Time';
// Dont change this becuse are translated before for the projects timesheets and now are only used for readibility.
$lang['timesheet_user'] = $lang['project_timesheet_user'];
$lang['timesheet_start_time'] = $lang['project_timesheet_start_time'];
$lang['timesheet_end_time'] = $lang['project_timesheet_end_time'];
$lang['timesheet_time_spend'] = $lang['project_timesheet_time_spend'];
$lang['task_timesheets'] = $lang['project_timesheets'];
$lang['task_log_time_start'] = $lang['project_timesheet_start_time'];
$lang['task_log_time_end'] = $lang['project_timesheet_end_time'];
$lang['task_single_log_user'] = $lang['project_timesheet_user'];
# Version 1.2.2
$lang['milestone_description'] = 'Description';
$lang['description_visible_to_customer'] = 'Show description to customer';
$lang['upcoming_tasks'] = 'Upcoming Tasks';
$lang['paymentmethod_two_checkout_account_number'] = 'Account Number (Seller ID)';
$lang['paymentmethod_two_checkout_private_key'] = 'Private Key';
$lang['paymentmethod_two_checkout_publishable_key'] = 'Publishable Key';
$lang['payment_credit_card_number'] = 'Card Number';
$lang['payment_credit_card_expiration_date'] = 'Expiration Date';
$lang['payment_billing_email'] = 'Email';
$lang['payment_billing_name'] = 'Billing Name';
$lang['submit_payment'] = 'Submit Payment';
$lang['2checkout_notice_payment'] = 'Credit card details are processed via secure token provided from 2Checkout';
$lang['2checkout_usage_notice'] = 'SSL is required if you\'re using the 2Checkout payment API. It is required to safely call the tokenization and authorizations. The system will function without SSL, however, this will place you out of compliance, which risks deactivation of your API permissions.';
$lang['custom_field_disallow_customer_to_edit'] = 'Disalow customer to edit this field';
$lang['project_due_notice'] = 'This project is overdue by %s days';
$lang['not_lead_added_attachment'] = 'added new attachment to lead %s';
$lang['lead_note_date_added'] = 'Note added: %s';
$lang['recurring_custom'] = 'Custom';
// Dont translate these, only added for better readibility already translated for the expenses custom recurring feature.
$lang['invoice_recuring_months'] = $lang['expense_recuring_months'];
$lang['invoice_recuring_years'] = $lang['expense_recuring_years'];
$lang['invoice_recuring_days'] = $lang['expense_recuring_days'];
$lang['invoice_recuring_weeks'] = $lang['expense_recuring_weeks'];

# Version 1.2.4
$lang['document_direction'] = 'Direction';
$lang['notify_project_members_status_change'] = 'Notify project members that project status is changed';
$lang['not_project_status_updated'] = 'Project status updated from %s to %s';
$lang['ticket_not_found'] = 'Ticket not found';
$lang['project_not_found'] = 'Project not found';
$lang['export_project_data'] = 'Export project data';
$lang['total_project_members'] = 'Total Project Members';
$lang['total_project_files'] = 'Files attached';
$lang['total_project_discussions_created'] = 'Discussions created';
$lang['project_member'] = 'Member';
$lang['total_project_discussions_comments'] = 'Total discussion comments';
$lang['staff_total_task_assigned'] = 'Total tasks assigned';
$lang['staff_total_comments_on_tasks'] = 'Comments on tasks';
$lang['project_members_overview'] = 'Project members overview';
$lang['project_milestones_overview'] = 'Milestones overview';
$lang['total_tasks_in_milestones'] = 'Total tasks assigned';
$lang['total_task_members_assigned'] = 'Total members assigned';
$lang['total_task_members_followers'] = 'Total followers';
$lang['total_milestones'] = 'Total milestones';
$lang['total_project_worked_days'] = 'Total days worked';
$lang['finance_overview'] = 'Finance Overview';
$lang['project_custom_fields'] = 'Custom fields';
$lang['total_tickets_related_to_project'] = 'Total tickets linked to project';
$lang['projects_total_invoices_created'] = 'Total invoices created';
$lang['total_invoiced_amount'] = 'Total invoices created';
$lang['do_not_send_invoice_payment_email_template_contact'] = 'Dont send invoice payment recorded email to customer contacts';
$lang['no_preview_available_for_file'] = 'No preview available for this file.';
$lang['project_activity_deleted_file_discussion_comment'] = 'File discussion comment deleted';
$lang['file_not_found'] = 'File not found';
$lang['email_template_discussion_info'] = 'This template is used for both project discussion comments emails. (files discussions and regular discussions)';
$lang['format_a4_portrait_size'] = 'Portrait';
$lang['only_show_contact_tickets'] = 'In customer profile only show tickets related to the logged in contact (Primary contact not applied)';
$lang['cancel_overdue_reminders_invoice'] = 'Prevent sending overdue reminders for this invoice';
$lang['customer_shipping_address_notice'] = 'Dont fill shipping address informations if you wont use shipping address on customer invoices';
$lang['timesheets_overview'] = 'Timesheets overview';
$lang['invoice_status_draft'] = 'Draft';
$lang['save_as_draft'] = 'Save as Draft';
$lang['convert_and_save_as_draft'] = 'Convert and save as draft';
$lang['convert'] = 'Convert';
$lang['exclude_invoices_draft_from_client_area'] = 'Exclude invoices with draft status from customers area';
$lang['invoice_draft_status_info'] = 'This invoice is with status Draft, status will be auto changed when you send the invoice to the customer or mark as sent.';
$lang['task_info'] = 'Task info';
$lang['recurring_tasks'] = 'Recurring';
// Dont translate these, already translated
$lang['task_repeat_every'] = $lang['expense_repeat_every'];
$lang['task_recuring_months'] = $lang['expense_recuring_months'];
$lang['task_recuring_years'] = $lang['expense_recuring_years'];
$lang['task_recuring_days'] = $lang['expense_recuring_days'];
$lang['task_recuring_weeks'] = $lang['expense_recuring_weeks'];
$lang['todays_tasks'] = 'Today\'s tasks';
$lang['payment_mode_invoices_only'] = 'Invoices Only';
$lang['payment_mode_expenses_only'] = 'Expenses Only';
$lang['task_no_checklist_items_found'] = 'Checklist items not found for this task';
$lang['task_no_description'] = 'No description for this task';
$lang['expenses_reminders'] = 'Reminders';
$lang['expense_set_reminder_title'] = 'Set expense reminder';
$lang['calendar_expense_reminder'] = 'Expense Reminder';
$lang['recurring_task'] = 'Recurring Task';
$lang['disable_email_from_being_sent'] = 'Disable this email from being sent';
$lang['not_sent_indicator'] =  'Not Sent';
$lang['proposal_status_revised'] =  'Revised';
$lang['customer_currency_change_notice'] =  'If the customer use other currency then the base currency make sure you select the approprite currency for this customer. Changing the currency is not possible after transactions are recorded.';
$lang['click_to_add_content'] =  'Click here to add content';
$lang['related_to_project'] =  'This %s is related to %s: %s';
$lang['back_to_lead'] =  'Back to lead';
$lang['add_task_timer_started_warning'] =  'Stop current started timer for this task to be able to add new timer manualy.';
$lang['sending_email_contact_permissions_warning'] =  'Failed to auto select customer contacts. Please make sure that the customer have associated contacts with permission %s';

# Version 1.2.6
$lang['currently_supported_currencies'] = 'Currently supported currencies';
$lang['authorize_notice'] = 'SSL is required if you\'re using the Authorize.Net AIM payment API. Authorize.net only supports 1 currency per account. Make sure you add only 1 currency associated with your Authorize account in the currencies field.';
$lang['settings_paymentmethod_developer_mode'] = 'Developer Mode';
$lang['payment_cardholder_name'] = 'Cardholder\'s Name';
$lang['settings_paymentmethod_authorize_api_login_id'] =  'API Login ID';
$lang['settings_paymentmethod_mollie_api_key'] =  'API Key';
$lang['settings_paymentmethod_authorize_api_transaction_key'] =  'API Transaction ID';
$lang['settings_paymentmethod_authorize_secret_key'] =  'Secret Key';
$lang['leads_report_converted_notice'] =  'Only leads thats belongs in the default status Client will be taken as converted leads, if the leads belongs to the default status client and its not converted to customer will be still counted as converted lead';
$lang['payment_method'] = 'Payment Method';
$lang['payment_method_info'] = 'Some payment gateways support different/multiple payment methods like Credit Card, Paypal, Bank.';

# Version 1.2.7
$lang['dropbox_app_key'] = 'Dropbox APP Key';
$lang['project_invoice_select_all_expenses'] = 'Select all expenses';
$lang['role_update_staff_permissions'] = 'Update all staff members permissions that are using this role';
$lang['customer_active'] = 'Active';
$lang['customer_disable_tooltip'] = 'Customer data exists, delete all data related to this customer to mark as disabled (eq. Invoices, Estimates, Contracts)';
$lang['note_updated_successfuly'] = 'Note updated successfully';
$lang['update_note'] = 'Update note';
$lang['update_comment'] = 'Update comment';
$lang['comment_updated_successfuly'] = 'Comment updated successfully';
$lang['staff_send_welcome_email'] = 'Send welcome email';
$lang['proposal_warning_email_change'] = 'Email changed for %s. This %s is linked to proposal/s. Do you want to update all proposals emails linked to %s?';
$lang['update_proposal_email_yes'] = 'Yes update all linked emails.';
$lang['update_proposal_email_no'] = 'No, i will update manually.';
$lang['proposals_emails_updated'] = 'All proposals emails linked to this %s updated to %s';
$lang['custom_field_company'] = 'Company';
$lang['actions'] = 'Actions';
$lang['project_mark_as'] = 'Mark as %s';
$lang['todo_edit_title'] = 'Edit todo item';
$lang['additional_action_required'] = 'Additional action required!';
$lang['project_mark_tasks_finished_confirm'] = 'Confirm';
$lang['project_marked_as_success'] = 'Project marked as %s successfully';
$lang['project_marked_as_failed'] = 'Failed to mark project as %s';
$lang['auto_assign_customer_admin_after_lead_convert'] = 'Auto assign as admin to customer after convert';
$lang['auto_assign_customer_admin_after_lead_convert_help'] = 'If this option is set to YES the staff member that converted lead to customer will be auto assigned as customer admin. NOTE: This option will apply only on staff members that dont have permission for customers VIEW';
$lang['auto_close_tickets_disable'] = 'Set 0 to disable';
$lang['task_checklist_item_completed_by'] = 'Completed by %s';
$lang['staff_email_signature_help'] = 'If empty default email signature from settings will be used';
$lang['customer_sales'] = 'Sales';
$lang['default_task_priority'] = 'Default Priority';
$lang['project_send_created_email'] = 'Send project created email';
$lang['survey_send_to_lists'] = 'Survey send lists';
$lang['survey_send_notice'] = 'Emails will be send via CRON JOB per hour.';
$lang['view_permission_auto_checked'] = 'VIEW permission auto checked. You need to select VIEW permission if you want to use the EDIT, CREATE and DELETE properly. EDIT, CREATE, DELETE cant be used without VIEW because VIEW is global permission and the user wont be able to open the data and perform the actions.';
$lang['custom_field_company_info'] = 'Edit custom fields for company in Setup->Settings->Company';

# Version 1.2.8
$lang['show_transactions_on_invoice_pdf'] = 'Show invoice payments (transactions) on PDF';
$lang['bulk_actions'] = 'Bulk Actions';
$lang['additional_filters'] = 'Additional Filters';
$lang['expenses_available_to_bill'] = 'Expenses available to bill';
$lang['bulk_action_customers_groups_warning'] = 'If you dont select any group all groups assigned to the selected customers will be removed.';
$lang['customer_attachments_show_in_customers_area'] = 'Show to customers area';
$lang['customer_attachments_show_notice'] = 'Only files uploaded from customer profile have ability to show/hide in customers area.';
$lang['customer_profile_files'] = 'Files';
$lang['no_files_found'] = 'No Files Found';
$lang['survey_customers_all'] = 'All Customers';
$lang['custom_field_column'] = 'Grid (Bootstrap Column eq. 12) - Max is 12';
$lang['task_status'] = 'Status';
$lang['task_status_1'] = 'Not Started';
$lang['task_status_2'] = 'Awaiting Feedback';
$lang['task_status_3'] = 'Testing';
$lang['task_status_4'] = 'In Progress';
$lang['task_status_5'] = 'Complete';
$lang['task_mark_as'] = 'Mark as %s';
$lang['task_marked_as_success'] = 'Task marked as %s successfully';
$lang['task_drag_drop_notice'] = 'Drag & Drop is used only to easily change %s. The order wont be applied for this area.';
$lang['search_tasks'] = 'Search Tasks';
$lang['tasks_kanban_limit'] = 'Limit tasks kan ban rows per status';
$lang['show_on_invoice_on_pdf'] = 'Show %s on Invoice PDF';
$lang['show_pay_link_to_invoice_pdf'] = 'Show Pay Invoice link to PDF (Not applied if invoice status is Cancelled)';
$lang['no_leads_found'] = 'No Leads Found';
$lang['created_today'] = 'Created Today';
$lang['total_tasks_deleted'] = 'Total Tasks Deleted: %s';
$lang['total_tickets_delete'] = 'Total Tickets Deleted: %s';
$lang['total_tickets_delete'] = 'Total Tickets Deleted: %s';
$lang['format_letter_portrait'] = 'Letter Portrait';
$lang['format_letter_landscape'] = 'Letter Landscape';
$lang['period_datepicker'] = 'Period';
$lang['total_by_hourly_rate'] = 'Total By Hourly Rate';
$lang['staff_hourly_rate'] = $lang['task_hourly_rate'];
// &#37; is for % so the system can confuse for the original fields like %s
$lang['remove_tax_name_from_item_table_help'] = 'eq. Item TAX 15&#37; will be shown as 15&#37; without the tax name (Not applied if multiple taxes with the same name and tax percent found for item)';
$lang['back_to_project'] = 'Back to Project';
$lang['view_kanban'] = 'View Kan Ban';
$lang['invoice_is_overdue'] = 'This invoice is overdue by %s days';
