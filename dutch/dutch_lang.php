<?php
# Version 1.0.0
#
# General
$lang['id']                   = 'ID';
$lang['name']                 = 'Naam';
$lang['options']              = 'Opties';
$lang['submit']               = 'Opslaan';
$lang['added_successfuly']    = '%s succesvol toegevoegd.';
$lang['updated_successfuly']  = '%s succesvol geupdate.';
$lang['edit']                 = 'Bewerken %s';
$lang['add_new']              = 'Nieuwe toevoegen %s';
$lang['deleted']              = '%s Verwijderd';
$lang['problem_deleting']     = 'Probleem met verwijderen %s';
$lang['is_referenced']        = 'Het ID van de %s is al in gebruik.';
$lang['close']                = 'Sluiten';
$lang['send']                 = 'Versturen';
$lang['cancel']               = 'Annuleren';
$lang['go_back']              = 'Ga Terug';
$lang['error_uploading_file'] = 'Fout Tijdens Het Uploaden';
$lang['load_more']            = 'Meer Laden';
$lang['cant_delete_default']  = 'Kan standaard %s niet verwijderen';

# Invoice General
$lang['invoice_status_paid']                = 'Betaald';
$lang['invoice_status_unpaid']              = 'Onbetaald';
$lang['invoice_status_overdue']             = 'Te laat';
$lang['invoice_status_not_paid_completely'] = 'Gedeeltelijk betaald';

$lang['invoice_pdf_heading'] = 'INVOICE';

$lang['invoice_table_item_heading']            = 'Item';
$lang['invoice_table_quantity_heading']        = 'Aantal';
$lang['invoice_table_rate_heading']            = 'Tarief';
$lang['invoice_table_tax_heading']             = 'Belasting';
$lang['invoice_table_amount_heading']          = 'Bedrag';
$lang['invoice_subtotal']                      = 'Sub Totaal';
$lang['invoice_adjustment']                    = 'Wijziging';
$lang['invoice_total']                         = 'Totaal';
$lang['invoice_vat']                           = 'BTW Nummer';
$lang['invoice_bill_to']                       = 'Verzend factuur naar';
$lang['invoice_data_date']                     = 'Factuur datum:';
$lang['invoice_data_duedate']                  = 'Betaal dag:';
$lang['invoice_received_payments']             = 'Transacties';
$lang['invoice_no_payments_found']             = 'Geen betalingen gevonden voor deze factuur';
$lang['invoice_note']                          = 'Notitie:';
$lang['invoice_payments_table_number_heading'] = 'Betaling #';
$lang['invoice_payments_table_mode_heading']   = 'Betaling Methode';
$lang['invoice_payments_table_date_heading']   = 'Datum';
$lang['invoice_payments_table_amount_heading'] = 'Bedrag';


# Announcements
$lang['announcement']                 = 'Aankondiging';
$lang['announcement_lowercase']       = 'aankondiging';
$lang['announcements']                = 'Aankondigingen';
$lang['announcements_lowercase']      = 'aankondigingen';
$lang['new_announcement']             = 'Nieuwe Aankondiging';
$lang['announcement_name']            = 'Naam Aankondiging';
$lang['announcement_message']         = 'Bericht';
$lang['announcement_show_to_staff']   = 'Laat aan staff zien';
$lang['announcement_show_to_clients'] = 'Laat aan klanten zien';
$lang['announcement_show_my_name']    = 'Laat mijn naam zien';

# Clients
$lang['clients']                               = 'Klanten';
$lang['client']                                = 'Klant';
$lang['new_client']                            = 'Nieuwe Klant';
$lang['client_lowercase']                      = 'klant';
$lang['client_delete_tooltip']                 = 'Alle klanten data zal verwijderd worden. Contracten, tickets, notities. NOTITIE: Als er facturen gevonden worden, zal de klant niet verwijderd worden. U moet deze factuur aan een andere klant toewijzen om het factuur nummer te behouden.';
$lang['customer_delete_invoices_warning']      = 'Deze klant heeft facturen op zijn account. U kunt deze klant niet verwijderen. Verander alle facturen naar een andere klant en verwijder de klant daarna.';
$lang['client_firstname']                      = 'Voornaam';
$lang['client_lastname']                       = 'Achternaam';
$lang['client_email']                          = 'Email';
$lang['client_company']                        = 'Bedrijf';
$lang['client_vat_number']                     = 'BTW Nummer';
$lang['client_address']                        = 'Adres';
$lang['client_city']                           = 'Stad';
$lang['client_postal_code']                    = 'Postcode';
$lang['client_state']                          = 'Provincie';
$lang['client_password']                       = 'Wachtwoord';
$lang['client_password_change_populate_note']  = 'Notitie: Als U dit veld invult, zal het wachtwoord van deze klant veranderen.';
$lang['client_password_last_changed']          = 'Wachtwoord laatst veranderd:';
$lang['login_as_client']                       = 'Inloggen als klant';
$lang['client_invoices_tab']                   = 'Facturen';
$lang['contracts_invoices_tab']                = 'Contracten';
$lang['contracts_tickets_tab']                 = 'Tickets';
$lang['contracts_notes_tab']                   = 'Notities';
$lang['client_invoice_number_table_heading']   = 'Factuur #';
$lang['client_invoice_date_table_heading']     = 'Datum';
$lang['client_invoice_due_date_table_heading'] = 'Verval Datum';
$lang['client_string_table_heading']           = 'Klant';
$lang['client_amount_table_heading']           = 'Bedrag';
$lang['client_status_table_heading']           = 'Status';
$lang['note_description']                      = 'Notitie Beschrijving';

$lang['client_string_contracts_table_heading']      = 'Klant';
$lang['client_start_date_contracts_table_heading']  = 'Start Datum';
$lang['client_end_date_contracts_table_heading']    = 'Eind Datum';
$lang['client_description_contracts_table_heading'] = 'Beschrijving';
$lang['client_do_not_send_welcome_email']           = 'Geen welkom email sturen';

$lang['clients_notes_table_description_heading'] = 'Beschrijving';
$lang['clients_notes_table_addedfrom_heading']   = 'Toegevoegd van';
$lang['clients_notes_table_dateadded_heading']   = 'Datum toegevoegd';
$lang['clients_list_full_name']   = 'Volledige Naam';

$lang['clients_list_last_login']  = 'Laatst Ingelogd';


# Contracts
$lang['contracts']                = 'Contracten';
$lang['contract']                 = 'Contract';
$lang['new_contract']             = 'Nieuw Contract';
$lang['contract_lowercase']       = 'contract';
$lang['contract_start_date']      = 'Start Datum';
$lang['contract_end_date']        = 'Eind Datum';
$lang['contract_subject']         = 'Onderwerp';
$lang['contract_description']     = 'Beschrijving';
$lang['contract_subject_tooltip'] = 'Onderwerp is ook zichtbaar voor klant';
$lang['contract_client_string']   = 'Klant';
$lang['contract_attach']          = 'Document Toevoegen';

$lang['contract_list_client']     = 'Klant';
$lang['contract_list_subject']    = 'Onderwerp';
$lang['contract_list_start_date'] = 'Start Datum';
$lang['contract_list_end_date']   = 'Eind Datum';

# Currencies
$lang['currencies']           = 'Munteenheden';
$lang['currency']             = 'Munteenheid';
$lang['new_currency']         = 'Nieuwe Munteenheid';
$lang['currency_lowercase']   = 'munteenheid';
$lang['base_currency_set']    = 'Dit is nu uw standaard munteenheid.';
$lang['make_base_currency']   = 'Standaard munteenheid maken';
$lang['base_currency_string'] = 'Standaar munteenheid';

$lang['currency_list_name']   = 'Naam';
$lang['currency_list_symbol'] = 'Symbool';


$lang['currency_add_edit_description'] = 'Naam Munteenheid';
$lang['currency_add_edit_rate']        = 'Symbool';

$lang['currency_edit_heading'] = 'Munteenheid Wijzigen';
$lang['currency_add_heading']  = 'Nieuwe Munteenheid Toevoegen';


# Department
$lang['departments']          = 'Afdelingen';
$lang['department']           = 'Afdeling';
$lang['new_department']       = 'Nieuwe Afdeling';
$lang['department_lowercase'] = 'afdeling';

$lang['department_name']             = 'Afdeling naam';
$lang['department_email']            = 'Afdeling Email';
$lang['department_hide_from_client'] = 'Verbergen voor klant?';
$lang['department_list_name']        = 'Naam';

# Email Templates
$lang['email_templates']                        = 'Email Sjablonen';
$lang['email_template']                         = 'Email Sjabloon';
$lang['email_template_lowercase']               = 'email sjabloon';
$lang['email_templates_lowercase']              = 'email sjablonen';
$lang['email_template_ticket_fields_heading']   = 'Tickets';
$lang['email_template_invoices_fields_heading'] = 'Facturen';
$lang['email_template_clients_fields_heading']  = 'Klanten';

$lang['template_name']                                      = 'Sjabloon Naam';
$lang['template_subject']                                   = 'Onderwerp';
$lang['template_fromname']                                  = 'Van Naam';
$lang['template_fromemail']                                 = 'Van Email';
$lang['send_as_plain_text']                                 = 'Versturen Als Simpel Tekst';
$lang['email_template_disabed']                             = 'Uitgeschakeld';
$lang['email_template_email_message']                       = 'Email bericht';
$lang['available_merge_fields']                             = 'Beschikbare Velden om Samen te Voegen';
# Home
$lang['dashboard_string']                                   = 'Dashboard';
$lang['home_latest_todos']                                  = 'Latest todo\'s';
$lang['home_no_latest_todos']                               = 'No todos found';
$lang['home_latest_finished_todos']                         = 'Latest finished todo\'s';
$lang['home_no_finished_todos_found']                       = 'No finished todos found';
$lang['home_todo_heading']                                  = 'To do items';
$lang['home_tickets_awaiting_reply_by_department']          = 'Tickets awaiting reply by department';
$lang['home_tickets_awaiting_reply_by_status']              = 'Tickets awaiting reply by status';
$lang['home_this_week_events']                              = 'This week events';
$lang['home_upcoming_events_next_week']                     = 'Upcoming events next week';
$lang['home_event_added_by']                                = 'Event added by';
$lang['home_public_event']                                  = 'Public event';
$lang['home_weekly_payment_records']                        = 'Weekly Payment Records';
$lang['home_weekend_ticket_opening_statistics']             = 'Weekly Ticket Openings Statistics';
# Home
$lang['dashboard_string']                                   = 'Overzicht';
$lang['home_latest_todos']                                  = 'Nieuwste to-do\'s';
$lang['home_no_latest_todos']                               = 'Geen to-do\'s gevonden';
$lang['home_latest_finished_todos']                         = 'Meest Recent Afgeronde to-do\'s';
$lang['home_no_finished_todos_found']                       = 'Geen Afgeronde to-do\'s Gevonden';
$lang['home_todo_heading']                                  = 'To do taken';
$lang['home_tickets_awaiting_reply_by_department']          = 'Tickets in afwachting op reactie';
$lang['home_tickets_awaiting_reply_by_status']              = 'Tickets in afwachting op reactie op status';
$lang['home_this_week_events']                              = 'Evenementen van deze week';
$lang['home_upcoming_events_next_week']                     = 'Aankomende evenementen volgende week';
$lang['home_event_added_by']                                = 'Evenement toegevoegd door';
$lang['home_public_event']                                  = 'Openbaar evenement';
$lang['home_weekly_payment_records']                        = 'Weekelijkse betalings overzicht';
$lang['home_weekend_ticket_opening_statistics']             = 'Weekelijkste statistieken over open tickets';
# Newsfeed
$lang['whats_on_your_mind']                                 = 'Deel documenten, ideeën..';
$lang['new_post']                                           = 'Post maken';
$lang['newsfeed_upload_tooltip']                            = 'Tip: Sleep documenten naar het veld om ze te uploaden';
$lang['newsfeed_all_departments']                           = 'Alle afdelingen';
$lang['newsfeed_pin_post']                                  = 'Bericht vastpinnen';
$lang['newsfeed_unpin_post']                                = 'Bericht losmaken';
$lang['newsfeed_delete_post']                               = 'Verwijderen';
$lang['newsfeed_published_post']                            = 'Gepubliceerd';
$lang['newsfeed_you_like_this']                             = 'U vind dit leuk';
$lang['newsfeed_like_this']                                 = 'Vind dit leuk';
$lang['newsfeed_one_other']                                 = 'Anders';
$lang['newsfeed_you']                                       = 'U';
$lang['newsfeed_and']                                       = 'en';
$lang['newsfeed_you_and']                                   = 'U en';
$lang['newsfeed_like_this_saying']                          = 'Vinden dit leuk';
$lang['newsfeed_unlike_this_saying']                        = 'Vind dit niet meer leuk';
$lang['newsfeed_show_more_comments']                        = 'Meer berichten laten zien';
$lang['comment_this_post_placeholder']                      = 'Commentaar geven op dit bericht';
$lang['newsfeed_post_likes_modal_heading']                  = 'Collegas die dit bericht leuk vinden';
$lang['newsfeed_comment_likes_modal_heading']               = 'Collegas die dit commentaar leuk vinden';
$lang['newsfeed_newsfeed_post_only_visible_to_departments'] = 'Dit bericht is alleen zichtbaar voor de volgende afdelingen: %s';
# Invoice Items
$lang['invoice_items']                                      = 'Factuur Items ';
$lang['invoice_item']                                       = 'Factuur Item';
$lang['new_invoice_item']                                   = 'Nieuw Item';
$lang['invoice_item_lowercase']                             = 'Factuur item';

$lang['invoice_items_list_description'] = 'Beschrijving';
$lang['invoice_items_list_rate']        = 'Tarief';
$lang['invoice_items_list_tax']         = 'Belasting';

$lang['invoice_item_add_edit_description'] = 'Beschrijving';
$lang['invoice_item_add_edit_rate']        = 'Tarief';
$lang['invoice_item_add_edit_tax']         = 'Belasting';
$lang['invoice_item_add_edit_tax_select']  = 'Selecteer Belasting';

$lang['invoice_item_edit_heading'] = 'Item bewerken';
$lang['invoice_item_add_heading']  = 'Nieuw item toevoegen';

# Invoices


$lang['invoices']                       = 'Facturen';
$lang['invoice']                        = 'Factuur';
$lang['invoice_lowercase']              = 'factuur';
$lang['create_new_invoice']             = 'Nieuwe Factuur Maken';
$lang['view_invoice']                   = 'Bekijk Factuur';
$lang['invoice_payment_recorded']       = 'Factuur betaling opgeslagen';
$lang['invoice_payment_record_failed']  = 'Factuur betaling niet kunnen opslaan.';
$lang['invoice_sent_to_client_success'] = 'Het factuur is succesvol naar de klant verstuurd.';
$lang['invoice_sent_to_client_fail']    = 'Probleem met versturen van factuur.';
$lang['invoice_reminder_send_problem']  = 'Probleem Met Factuur Te Laat Herinnering Versturen';
$lang['invoice_overdue_reminder_sent']  = 'Factuur Te Laat Herinnering Succesvol Verstuurd';

$lang['invoice_details']              = 'Factuur Details';
$lang['invoice_view']                 = 'Factuur Bekijken';
$lang['invoice_select_customer']      = 'Klant';
$lang['invoice_add_edit_number']      = 'Factuur Nummer';
$lang['invoice_add_edit_date']        = 'Factuur Datum';
$lang['invoice_add_edit_duedate']     = 'Verval Datum';
$lang['invoice_add_edit_currency']    = 'Munteenheid';
$lang['invoice_add_edit_client_note'] = 'Notitie Klant';
$lang['invoice_add_edit_admin_note']  = 'Notitie Administrator';

$lang['invoice_add_edit_search_item']  = 'Producten Doorzoeken';
$lang['invoices_toggle_table_tooltip'] = 'Tabel Wisselen';

$lang['edit_invoice_tooltip']                   = 'Factuur bewerken';
$lang['delete_invoice_tooltip']                 = 'Factuur Verwijderen. Notitie: Alle betalingen met betrekking tot deze factuur zullen verwijderd worden (indien die er zijn).';
$lang['invoice_sent_to_email_tooltip']          = 'Versturen Naar Email';
$lang['invoice_already_send_to_client_tooltip'] = 'Deze factuur is al naar de klant verzonden%s';
$lang['send_overdue_notice_tooltip']            = 'Aankondiging van achterstallige betaling versturen';
$lang['invoice_view_activity_tooltip']          = 'Activiteiten Logboek';
$lang['invoice_record_payment']                 = 'Betaling opslaan';

$lang['invoice_send_to_client_modal_heading']    = 'Verstuur deze factuur naar de klant';
$lang['invoice_send_to_client_attach_pdf']       = 'Factuur PDF Bijvoegen';
$lang['invoice_send_to_client_preview_template'] = 'Email Sjabloon Inzien';

$lang['invoice_dt_table_heading_number']  = 'Factuur #';
$lang['invoice_dt_table_heading_date']    = 'Datum';
$lang['invoice_dt_table_heading_client']  = 'Klant';
$lang['invoice_dt_table_heading_duedate'] = 'Verval Datum';
$lang['invoice_dt_table_heading_amount']  = 'Bedrag';
$lang['invoice_dt_table_heading_status']  = 'Status';

$lang['record_payment_for_invoice']              = 'Betaling Opslaan Voor';
$lang['record_payment_amount_received']          = 'Bedrag Ontvangen';
$lang['record_payment_date']                     = 'Datum Betaling';
$lang['record_payment_leave_note']               = 'Laat een notitie achter';
$lang['invoice_payments_received']               = 'Betalingen Ontvangen';
$lang['invoice_record_payment_note_placeholder'] = 'Administrator Notitie';
$lang['no_payments_found']                       = 'Geen betalingen gevonden voor deze factuur';
$lang['invoice_email_link_text']                 = 'Factuur bekijken';

# Payments
$lang['payments']                             = 'Betalingen';
$lang['payment']                              = 'Betaling';
$lang['payment_lowercase']                    = 'betaling';
$lang['payments_table_number_heading']        = 'Betaling #';
$lang['payments_table_invoicenumber_heading'] = 'Factuur #';
$lang['payments_table_mode_heading']          = 'Betaling methode';
$lang['payments_table_date_heading']          = 'Datum';
$lang['payments_table_amount_heading']        = 'Bedrag';
$lang['payments_table_client_heading']        = 'Klant';
$lang['payment_not_exists']                   = 'De betaling bestaat niet.';

$lang['payment_edit_for_invoice']     = 'Betaling Voor Factuur';
$lang['payment_edit_amount_received'] = 'Bedrag Ontvangen';
$lang['payment_edit_date']            = 'Betalings Datum';
$lang['payment_edit_lave_note']       = 'Notitie Achterlaten';


# Knowledge Base
$lang['kb_article_add_edit_subject'] = 'Onderwerp';
$lang['kb_article_add_edit_group']   = 'Groep';
$lang['kb_string']                   = 'Informatie Centrum';
$lang['kb_article']                  = 'Artikel';
$lang['kb_article_lowercase']        = 'artikel';
$lang['kb_article_new_article']      = 'Nieuw Artikel';
$lang['kb_article_disabled']         = 'Uitgeschakeld';
$lang['kb_article_description']      = 'Artikel Omschrijving';

$lang['kb_table']                      = 'Lijst';
$lang['kb_no_articles_found']          = 'Geen Informatie Centrum Artikels Gevonden';
$lang['kb_dt_article_name']            = 'Artikel Naam';
$lang['kb_dt_group_name']              = 'Groep';
$lang['new_group']                     = 'Nieuwe Groep';
$lang['kb_group_add_edit_name']        = 'Groep Naam';
$lang['kb_group_add_edit_description'] = 'Korte Beschrijving';
$lang['kb_group_add_edit_disabled']    = 'Uitgeschakeld';
$lang['kb_group_add_edit_note']        = 'Notitie: Alle artikels in deze groep zullen onzichtbaar zijn als uitgeschakeld is aangevinkt.';
$lang['group_table_name_heading']      = 'Naam';
$lang['group_table_isactive_heading']  = 'Actief';
$lang['kb_no_groups_found']            = 'Geen Informatie Centrum Groepen Gevonden';

# Mail Lists
$lang['mail_lists']                           = 'Email Lijsten';
$lang['mail_list']                            = 'Email Lijst';
$lang['new_mail_list']                        = 'Nieuwe Email Lijst';
$lang['mail_list_lowercase']                  = 'email lijst';
$lang['custom_field_deleted_success']         = 'Aangepast veld verwijderen';
$lang['custom_field_deleted_fail']            = 'Probleem met aangepast veld verwijderen';
$lang['email_removed_from_list']              = 'Email verwijderd van email lijst';
$lang['email_remove_fail']                    = 'Email van lijst verwijderd';
$lang['staff_mail_lists']                     = 'Staff mail lijst';
$lang['clients_mail_lists']                   = 'Klanten mail lijst';
$lang['mail_list_total_imported']             = 'Totale emails geimport: %s';
$lang['mail_list_total_duplicate']            = 'Totale dubbele emails: %s';
$lang['mail_list_total_failed_to_insert']     = 'Emails onsuccesvol toegevoegd: %s';
$lang['mail_list_total_invalid']              = 'Ongeldig email adres: %s';
$lang['cant_edit_mail_list']                  = 'U kunt deze lijst niet bewerken, deze lijst word automatisch bijgehouden.';
$lang['mail_list_add_edit_name']              = 'Mail lijst naam';
$lang['mail_list_add_edit_customfield']       = 'Aangepast veld toevoegen';
$lang['mail_lists_viewing_emails']            = 'Bekijkt Emails Van Lijst';
$lang['mail_lists_view_email_email_heading']  = 'Email';
$lang['mail_lists_view_email_date_heading']   = 'Datum Toegevoegd';
$lang['add_new_email_to']                     = 'Nieuw email adres toevoegen aan %s';
$lang['import_emails_to']                     = 'Importeer emails naar %s';
$lang['mail_list_new_email_edit_add_label']   = 'Email';
$lang['mail_list_import_file']                = 'Importeer document';
$lang['mail_list_available_custom_fields']    = 'Beschikbare aangepaste velden';
$lang['submit_import_emails']                 = 'Importeer Emails';
$lang['btn_import_emails']                    = 'Importeer Emails (Excel)';
$lang['btn_add_email_to_list']                = 'Email aan deze lijst toevoegen';
$lang['mail_lists_dt_list_name']              = 'Lijst Naam';
$lang['mail_lists_dt_datecreated']            = 'Datum gemaakt';
$lang['mail_lists_dt_creator']                = 'Oprichter';
$lang['email_added_to_mail_list_successfuly'] = 'Email toegevoegd aan lijst';
$lang['email_is_duplicate_mail_list']         = 'Email bestaat al in deze lijst';

# Media

$lang['media_files']            = 'Documenten';

# Payment modes
$lang['new_payment_mode']       = 'Nieuwe betalingsmethode';
$lang['payment_modes']          = 'Betalingsmethodes';
$lang['payment_mode']           = 'Betalingsmethode';
$lang['payment_mode_lowercase'] = 'betalingsmethode';
$lang['payment_modes_dt_name']  = 'Betalingsmethode naam';

$lang['payment_mode_add_edit_name'] = 'Betalingsmethode naam';
$lang['payment_mode_edit_heading']  = 'Wijzig betalingsmethode';
$lang['payment_mode_add_heading']   = 'Nieuwe betalingsmethode toevoegen';

# Predefined Ticket Replies
$lang['new_predefined_reply']              = 'Nieuw Voorgedefinieerd Antwoord';
$lang['predefined_replies']                = 'Voorgedefinieerde Antwoorden';
$lang['predefined_reply']                  = 'Voorgedefinieerd Antwoord';
$lang['predefined_reply_lowercase']        = 'voorgedefinieerd antwoord';
$lang['predifined_replies_dt_name']        = 'Voorgedefinieerd Naam';
$lang['predifined_reply_add_edit_name']    = 'Voorgedefinieerd Antwoord Naam';
$lang['predifined_reply_add_edit_content'] = 'Beantwoord Inhoud';

# Ticket Priorities
$lang['new_ticket_priority']           = 'Nieuwe Prioriteit';
$lang['ticket_priorities']             = 'Ticket Prioriteiten';
$lang['ticket_priority']               = 'Ticket Prioriteit';
$lang['ticket_priority_lowercase']     = 'ticket prioriteit';
$lang['no_ticket_priorities_found']    = 'Geen Ticket Prioriteiten Gevonden';
$lang['ticket_priority_dt_name']       = 'Ticket Prioriteit Naam';
$lang['ticket_priority_add_edit_name'] = 'Prioriteit Naam';

# Reports
$lang['kb_reports']                         = 'Informatie Centrum artikel rapporten';
$lang['sales_reports']                      = 'Verkoop Rapporten';
$lang['reports_choose_kb_group']            = 'Kies Groep';
$lang['reports_sales_select_report_type']   = ' Selecteer Rapport Type';
$lang['report_kb_yes']                      = 'Ja';
$lang['report_kb_no']                       = 'Nee';
$lang['report_kb_no_votes']                 = 'Nog Geen Stemmen';
$lang['report_this_week_leads_conversions'] = 'Meest populaire conversaties deze week';
$lang['report_leads_sources_conversions']   = 'Bronnen';
$lang['report_leads_monthly_conversions']   = 'Maandelijks';
$lang['sales_report_heading']               = 'Verkoop Rapport';
$lang['report_sales_type_income']           = 'Totale Inkomen';

$lang['report_sales_type_customer']                    = 'Klanten Rapport';
$lang['report_sales_base_currency_select_explanation'] = 'U moet een munteenheid selecten want u heeft facturen met een andere munteenheid.';
$lang['report_sales_from_date']                        = 'Van Datum';
$lang['report_sales_to_date']                          = 'Naar Datum';


$lang['report_sales_months_all_time']      = 'Van Alle Tijden';
$lang['report_sales_months_six_months']    = 'Afgelopen 6 Maanden';
$lang['report_sales_months_twelve_months'] = 'Afgelopen 12 Maanden';
$lang['report_sales_months_custom']        = 'Aangepast';
$lang['reports_sales_generated_report']    = 'Gegenereerd Rapport';



$lang['reports_sales_dt_customers_client']                = 'Klant';
$lang['reports_sales_dt_customers_total_invoices']        = 'Totale Facturen';
$lang['reports_sales_dt_items_customers_amount']          = 'Bedrag';
$lang['reports_sales_dt_items_customers_amount_with_tax'] = 'Bedrag met Belasting';

# Roles
$lang['new_role']           = 'Nieuwe rol';
$lang['all_roles']          = 'Alle Rollen';
$lang['roles']              = 'Staff Rollen';
$lang['role']               = 'Rol';
$lang['role_lowercase']     = 'rol';
$lang['roles_total_users']  = 'Totale Gebruikers: ';
$lang['roles_dt_name']      = 'Rol Naam';
$lang['role_add_edit_name'] = 'Rol Naam';

# Service
$lang['new_service']           = 'Nieuwe Service';
$lang['services']              = 'Services';
$lang['service']               = 'Service';
$lang['service_lowercase']     = 'service';
$lang['services_dt_name']      = 'Service Naam';
$lang['service_add_edit_name'] = 'Service Naam';

# Settings
$lang['settings']                     = 'Instellingen';
$lang['settings_updated']             = 'Instellingen Geupdate';
$lang['settings_save']                = 'Instellingen Opslaan';
$lang['settings_group_general']       = 'Algemeen';
$lang['settings_group_localization']  = 'Lokalisatie';
$lang['settings_group_tickets']       = 'Tickets';
$lang['settings_group_sales']         = 'Financien';
$lang['settings_group_email']         = 'Email';
$lang['settings_group_clients']       = 'Klanten';
$lang['settings_group_newsfeed']      = 'Nieuws Berichten';
$lang['settings_group_cronjob']       = 'Cron Job';

$lang['settings_yes']                                        = 'Ja';
$lang['settings_no']                                         = 'Nee';
$lang['settings_clients_default_theme']                      = 'Standaard Klanten Thema';
$lang['settings_clients_allow_registration']                 = 'Klanten toestaan om te registreren';
$lang['settings_clients_allow_kb_view_without_registration'] = 'Informatie Centrum toestaan om bekeken te worden zonder registratie';

$lang['settings_cron_send_overdue_reminder']                 = 'Stuur betaling te laat herinnering';
$lang['settings_cron_send_overdue_reminder_tooltip']         = 'Stuur betaling te laat email naar klant wanneer factuur status update naar betaling te laat van Cron Job.';
$lang['automatically_send_invoice_overdue_reminder_after']   = 'Automatisch herinnering versturen na (dagen)dagen ';
$lang['automatically_resend_invoice_overdue_reminder_after'] = 'Automatisch herinnering opnieuw sturen na (dagen) dagen';

$lang['settings_email_host']      = 'SMTP Host';
$lang['settings_email_port']      = 'SMTP Port';
$lang['settings_email']           = 'SMTP Email';
$lang['settings_email_password']  = 'SMTP Wachtwoord';
$lang['settings_email_charset']   = 'Email Charset';
$lang['settings_email_signature'] = 'Email Handtekening';

$lang['settings_general_company_logo']                = 'Bedrijf Logo';
$lang['settings_general_company_logo_tooltip']        = 'Aanbevolen Dimensies: 150 x 34px';
$lang['settings_general_company_remove_logo_tooltip'] = 'Verwijder Bedrijf Logo';
$lang['settings_general_company_name']                = 'Bedrijf Naam';
$lang['settings_general_company_main_domain']         = 'Bedrijf Hoofd Domein';
$lang['settings_general_use_knowledgebase']           = 'Gebruik Informatie Centrum';
$lang['settings_general_use_knowledgebase_tooltip']   = 'Als U deze optie aanzet zal de Informatie Centrum ook voor de klant zichtbaar zijn';
$lang['settings_general_tables_limit']                = 'Tabellen paginering limiet';
$lang['settings_general_default_staff_role']          = 'Standaard Staff Rol';
$lang['settings_general_default_staff_role_tooltip']  = ' Wanneer U een nieuw staff lid toevoegt zal deze rol standaard worden geselecteerd.';

$lang['settings_localization_date_format']      = 'Datum Formaat';
$lang['settings_localization_default_timezone'] = 'Standaard Tijdzone';
$lang['settings_localization_default_language'] = 'Standaard Taal';


$lang['settings_newsfeed_max_file_upload_post']    = 'Maximum Document Upload op Bericht';
$lang['settings_newsfeed_max_file_size']           = 'Maximum toegestane grootte bestand (MB)';

$lang['settings_reminders_contracts']         = 'Contract verloping herinnering';
$lang['settings_reminders_contracts_tooltip'] = 'Verloping herinnering notificatie in dagen';

$lang['settings_tickets_use_services']             = 'Gebruik Services';
$lang['settings_tickets_max_attachments']          = 'Maximum ticket Documenten';
$lang['settings_tickets_allow_departments_access'] = 'Sta staff toe om toegang te hebben tot tickets die alleen bij de staff afdeling horen';
$lang['settings_tickets_allowed_file_extensions']  = 'Toegestane Document extentie.';

$lang['settings_sales_general']                                    = 'Algemeen';
$lang['settings_sales_general_note']                               = 'Algemene Instellingen';
$lang['settings_sales_invoice_prefix']                             = 'Factuur Nummer Voorvoegsel';
$lang['settings_sales_decimal_separator']                          = 'Decimaal Scheider';
$lang['settings_sales_thousand_separator']                         = 'Duizend Scheider';
$lang['settings_sales_currency_placement']                         = 'Munteenheid Positie';
$lang['settings_sales_currency_placement_before']                  = 'Voor Bedrag';
$lang['settings_sales_currency_placement_after']                   = 'Na Bedrag';
$lang['settings_sales_require_client_logged_in_to_view_invoice']   = 'Klant moet ingelogd zijn om de factuur te kunnen inzien';
$lang['settings_sales_next_invoice_number']                        = 'Volgend Factuur Nummer';
$lang['settings_sales_next_invoice_number_tooltip']                = 'Zet dit veld op 1 als U vanaf het begin wilt beginnen';
$lang['settings_sales_decrement_invoice_number_on_delete']         = 'Vermindering factuur nummer na verwijdering';
$lang['settings_sales_decrement_invoice_number_on_delete_tooltip'] = 'Wilt U het factuur nummer omlaag doen wanneer de laatste factuur is verwijderd? Voorbeeld: Als deze optie op ja staat en uw factuur nummer 15 was, zal het na verwijdering 14 zijn. Zo niet, zal het nummer 15 blijven. Als U het verwijderen alleen op de laatste factuur uit heeft gezet zou u deze optie op nee moeten houden zodat het bij de volgende factuur niet verlaagd word.';
$lang['settings_sales_invoice_number_format']                      = 'Factuur Nummer Formaat';
$lang['settings_sales_invoice_number_format_year_based']           = 'Jaar Gebaseerd';
$lang['settings_sales_invoice_number_format_number_based']         = 'Nummer Gebaseerd(000001)';

$lang['settings_sales_company_info_heading'] = 'Bedrijf';
$lang['settings_sales_company_info_note']    = 'Deze informatie zal weegeven worden op facturen/schattingen/betalingen en andere PDF documenten waar bedrijfs informatie nodig is.';
$lang['settings_sales_company_name']         = 'Bedrijf Naam';
$lang['settings_sales_address']              = 'Adres';
$lang['settings_sales_city']                 = 'Stad';
$lang['settings_sales_country_code']         = 'Stad Code';
$lang['settings_sales_postal_code']          = 'Postcode';
$lang['settings_sales_phonenumber']          = 'Telefoon';

# Leads
$lang['new_lead']       = 'Nieuwe Tip';
$lang['leads']          = 'Tips';
$lang['lead']           = 'Tip';
$lang['lead_lowercase'] = 'tip';
$lang['leads_all']      = 'Alles';

$lang['leads_canban_notes']  = 'Notities: %s';
$lang['leads_canban_source'] = 'Bronnen: %s';

$lang['lead_new_source']            = 'Nieuwe Tip';
$lang['lead_sources']               = 'Tip Bronnen';
$lang['lead_source']                = 'Tip Bron';
$lang['lead_source_lowercase']      = 'tip bron';
$lang['leads_sources_not_found']    = 'Geen Tip bronnen gevonden';
$lang['leads_sources_table_name']   = 'Bron Naam';
$lang['leads_source_add_edit_name'] = 'Bron Naam';

$lang['lead_new_status']         = 'Nieuwe Tip Status';
$lang['lead_statuss']            = 'Tip Status';
$lang['lead_status']             = 'Tip Status';
$lang['lead_status_lowercase']   = 'Tip status';
$lang['leads_status_table_name'] = 'Status Naam';

$lang['leads_status_add_edit_name']  = 'Status Naam';
$lang['leads_status_add_edit_order'] = 'Volgorde';

$lang['lead_statuses_not_found']      = 'Geen Tip Statussen Gevonden';
$lang['leads_search']                 = 'Doorzoek Tips';

$lang['leads_table_total'] = 'Totale Aanwijzingen: %s';

$lang['leads_dt_name']         = 'Naam';
$lang['leads_dt_email']        = 'Email';
$lang['leads_dt_phonenumber']  = 'Telefoon';
$lang['leads_dt_assigned']     = 'Toegewezen';
$lang['leads_dt_status']       = 'Status';
$lang['leads_dt_last_contact'] = 'Laatste Contact';

$lang['lead_add_edit_name']                 = 'Naam';
$lang['lead_add_edit_email']                = 'Email Adres';
$lang['lead_add_edit_phonenumber']          = 'Telefoon';
$lang['lead_add_edit_source']               = 'Bron';
$lang['lead_add_edit_status']               = 'Tip Status';
$lang['lead_add_edit_assigned']             = 'Toegewezen';
$lang['lead_add_edit_datecontacted']        = 'Datum Gecontacteerd';
$lang['lead_add_edit_contected_today']      = 'Vandaag gecontacteerd';
$lang['lead_add_edit_activity']             = 'Activiteiten Log';
$lang['lead_add_edit_notes']                = 'Notities';
$lang['lead_add_edit_add_note']             = 'Notitie Toevoegen';
$lang['lead_not_contacted']                 = 'Ik heb nog geen contact gelegd met deze tip';
$lang['lead_add_edit_contected_this_lead']  = 'Ik heb contact gelegd met deze tip';
$lang['lead_confirmation_canban_contacted'] = 'Heb je al contact gehad met deze tip?';

# Misc
$lang['activity_log_when_cron_job'] = 'Cron Job';
$lang['access_denied']              = 'Toegang Afgewezen';
$lang['prev']                       = 'Terug';
$lang['next']                       = 'Volgende';

# Datatables
$lang['dt_paginate_first']          = 'Eerste';
$lang['dt_paginate_last']           = 'Laatste';
$lang['dt_paginate_next']           = 'Volgende';
$lang['dt_paginate_previous']       = 'Vorige';
$lang['dt_empty_table']             = 'Geen {0} Gevonden';
$lang['dt_search']                  = 'Zoeken:';
$lang['dt_zero_records']            = 'Geen overeenkomende resultaten gevonden';
$lang['dt_loading_records']         = 'Laden...';
$lang['dt_length_menu']             = '_MENU_ inzendingen';
$lang['dt_info_filtered']           = '(gefilterd van _MAX_ totaal {0})';
$lang['dt_info_empty']              = '0 tot 0 van 0 weergeven {0}';
$lang['dt_info']                    = 'Resultaat _START_ om _END_ van _TOTAL_ {0}';
$lang['dt_empty_table']             = 'Geen {0} gevonden';
$lang['dt_sort_ascending']          = 'Activeer om kolom stijgend te sorteren';
$lang['dt_sort_descending']         = 'Activeer om kolom afdalend te sorteren';
# Invoice Activity Log
$lang['user_sent_overdue_reminder'] = '%s Heeft een herinner gestuurd over een factuur die te laat is.';

# Weekdays
$lang['wd_monday']    = 'Maandag';
$lang['wd_tuesday']   = 'Dinsdag';
$lang['wd_thursday']  = 'Donderdag';
$lang['wd_wednesday'] = 'Woensdag';
$lang['wd_friday']    = 'Vrijdag';
$lang['wd_saturday']  = 'Zaterdag';
$lang['wd_sunday']    = 'Zondag';

# Admin Left Sidebar
$lang['als_dashboard'] = 'Overzicht';
$lang['als_clients']   = 'Klanten';
$lang['als_leads']     = 'Tips';

$lang['als_contracts'] = 'Contracten';

$lang['als_all_tickets'] = 'Alle Tickets';
$lang['als_sales']       = 'Afzet';

$lang['als_staff'] = 'Staff';
$lang['als_tasks'] = 'Taken';
$lang['als_kb']    = 'Informatie Centrum';

$lang['als_surveys']               = 'Enquêtes';
$lang['als_media']                 = 'Media';
$lang['als_reports']               = 'Rapporten';
$lang['als_reports_sales_submenu'] = 'Afzet';
$lang['als_reports_leads_submenu'] = 'Tips';
$lang['als_kb_articles_submenu']   = 'IC Artikelen';
$lang['als_utilities']             = 'Openbare Voorzieningen';
$lang['als_announcements_submenu'] = 'Aankondigingen';
$lang['als_mail_lists_submenu']    = 'Mail Lijsten';
$lang['als_calendar_submenu']      = 'Kalender';
$lang['als_activity_log_submenu']  = 'Activiteiten Log';

# Admin Customizer Sidebar
$lang['acs_tickets']                           = 'Tickets';
$lang['acs_ticket_priority_submenu']           = 'Ticket Prioriteit';
$lang['acs_ticket_statuses_submenu']           = 'Ticket Statussen';
$lang['acs_ticket_predefined_replies_submenu'] = 'Voorgedefineerde Antwoorden';
$lang['acs_ticket_services_submenu']           = 'Services';
$lang['acs_departments']                       = 'Afdelingen';
$lang['acs_leads']                             = 'Tips';
$lang['acs_leads_sources_submenu']             = 'Tips';
$lang['acs_leads_statuses_submenu']            = 'Statussen';
$lang['acs_sales_taxes_submenu']               = 'Belasting';
$lang['acs_sales_currencies_submenu']          = 'Munteenheid';
$lang['acs_sales_payment_modes_submenu']       = 'Betalings Methodes';
$lang['acs_email_templates']                   = 'Email Sjablonen';
$lang['acs_roles']                             = 'Rollen';
$lang['acs_settings']                          = 'Instellingen';

# Tickets
$lang['new_ticket']                                         = 'Open Nieuwe Ticket';
$lang['tickets']                                            = 'Tickets';
$lang['ticket']                                             = 'Ticket';
$lang['ticket_lowercase']                                   = 'ticket';
$lang['support_tickets']                                    = 'Support Tickets';
$lang['support_ticket']                                     = 'Support Ticket';
$lang['ticket_settings_to']                                 = 'Naar';
$lang['ticket_settings_email']                              = 'Email adres';
$lang['ticket_settings_departments']                        = 'Afdeling';
$lang['ticket_settings_service']                            = 'Service';
$lang['ticket_settings_priority']                           = 'Prioriteit';
$lang['ticket_settings_subject']                            = 'Onderwerp';
$lang['ticket_settings_assign_to']                          = 'Ticket Toewijzen(Standaard is huidige gebruiker)';
$lang['ticket_settings_assign_to_you']                      = 'U';
$lang['ticket_settings_select_client']                      = 'Selecteer Klant';
$lang['ticket_add_body']                                    = 'Ticket Lichaam';
$lang['ticket_add_attachments']                             = 'Documenten';
$lang['ticket_no_reply_yet']                                = 'Nog Geen Antwoord';
$lang['new_ticket_added_succesfuly']                        = 'Ticket #%s succesvol toegevoegd';
$lang['replied_to_ticket_succesfuly']                       = 'succesvol op ticket #%s gereageerd';
$lang['ticket_settings_updated_successfuly']                = 'Ticket instellingen succesvol geupdate';
$lang['ticket_settings_updated_successfuly_and_reassigned'] = 'Ticket instellingen succesvol geupdate - Opnieuw toegewezen naar afdeling %s';
$lang['ticket_dt_subject']                                  = 'Onderwerp';
$lang['ticket_dt_department']                               = 'Afdeling';
$lang['ticket_dt_service']                                  = 'Service';
$lang['ticket_dt_submitter']                                = 'Klant';
$lang['ticket_dt_status']                                   = 'Status';
$lang['ticket_dt_priority']                                 = 'Prioriteit';
$lang['ticket_dt_last_reply']                               = 'Laatste Bericht';

$lang['ticket_single_add_reply']                  = 'Antwoord Toevoegen';
$lang['ticket_single_add_note']                   = 'Notitie Toevoegen';
$lang['ticket_single_other_user_tickets']         = 'Andere Tickets';
$lang['ticket_single_settings']                   = 'Instellingen';
$lang['ticket_single_priority']                   = 'Prioriteit: %s';
$lang['ticket_single_last_reply']                 = 'Laatste Antwoord: %s';
$lang['ticket_single_change_status_top']          = 'Status Veranderen';
$lang['ticket_single_ticket_note_by']             = 'Ticket notitie door %s';
$lang['ticket_single_note_added']                 = 'Notitie toegevoegd: %s';
$lang['ticket_single_change_status']              = 'Verander Status';
$lang['ticket_single_assign_to_me_on_update']     = 'Deze ticket automatisch aan mij toewijzen';
$lang['ticket_single_insert_predefined_reply']    = 'Voorgedefineerd antwoord invoegen';
$lang['ticket_single_insert_knowledge_base_link'] = 'Informatie Centrum link invoegen';
$lang['ticket_single_attachments']                = 'Documenten';
$lang['ticket_single_add_response']               = 'Antwoord Toevoegen';
$lang['ticket_single_note_heading']               = 'Notitie';
$lang['ticket_single_add_note']                   = 'Notitie Toevoegen';
$lang['ticket_settings_none_assigned']            = 'Geen';
$lang['ticket_status_changed_successfuly']        = 'Ticket Status Veranderd';
$lang['ticket_status_changed_fail']               = 'Probleem met ticket status veranderen';

$lang['ticket_staff_string']                    = 'Staff';
$lang['ticket_client_string']                   = 'Klant';
$lang['ticket_posted']                          = 'Geschreven: %s';
$lang['ticket_insert_predefined_reply_heading'] = 'Voorgedefineerd antwoord invoegen';
$lang['ticket_kb_link_heading']                 = 'Informatie Centrum link invoegen';
$lang['ticket_access_by_department_denied']     = 'U heeft geen toegang tot deze ticket. Deze ticket behoort tot een afdeling waar u geen lid van bent.';

# Staff
$lang['new_staff']                       = 'Nieuw Staff Lid';
$lang['staff_members']                   = 'Staff Leden';
$lang['staff_member']                    = 'Staff Lid';
$lang['staff_member_lowercase']          = 'staff lid';
$lang['staff_profile_updated']           = 'Uw Profiel is gewijzigd.';
$lang['staff_old_password_incorect']     = 'Uw oude wachtwoord is incorrect';
$lang['staff_password_changed']          = 'Uw wachtwoord is veranderd';
$lang['staff_problem_changing_password'] = 'Probleem met wachtwoord veranderen';
$lang['staff_profile_string']            = 'Profiel';

$lang['staff_cant_remove_main_admin']          = 'Kan leidinggevende administrator niet verwijderen';
$lang['staff_cant_remove_yourself_from_admin'] = 'U kunt uzelf niet van de admin rol ontnemen';

$lang['staff_dt_name']       = 'Volledige Naam';
$lang['staff_dt_email']      = 'Email';
$lang['staff_dt_last_Login'] = 'Laatst Ingelogd';
$lang['staff_dt_active']     = 'Actief';

$lang['staff_add_edit_firstname']             = 'Voornaam';
$lang['staff_add_edit_lastname']              = 'Achternaam';
$lang['staff_add_edit_email']                 = 'Email';
$lang['staff_add_edit_phonenumber']           = 'Telefoon';
$lang['staff_add_edit_facebook']              = 'Facebook';
$lang['staff_add_edit_linkedin']              = 'LinkedIn';
$lang['staff_add_edit_skype']                 = 'Skype';
$lang['staff_add_edit_departments']           = 'Lid Afdelingen';
$lang['staff_add_edit_role']                  = 'Rol';
$lang['staff_add_edit_permissions']           = 'Machtigingen';
$lang['staff_add_edit_administrator']         = 'Administrator';
$lang['staff_add_edit_password']              = 'Wachtwoord';
$lang['staff_add_edit_password_note']         = 'Notitie: Als U dit veld invult zal het wachtwoord op dit lid veranderen.';
$lang['staff_add_edit_password_last_changed'] = 'Wachtwoord laatst veranderd';
$lang['staff_add_edit_notes']                 = 'Notities';
$lang['staff_add_edit_note_description']      = 'Notitie Beschrijving';

$lang['staff_notes_table_description_heading'] = 'Notitie';
$lang['staff_notes_table_addedfrom_heading']   = 'Toegevoegd Van';
$lang['staff_notes_table_dateadded_heading']   = 'Datum Toegevoegd';

$lang['staff_admin_profile']         = 'Dit is een Administrator Profiel';
$lang['staff_profile_notifications'] = 'Notificaties';
$lang['staff_profile_departments']   = 'Afdelingen';

$lang['staff_edit_profile_image']                     = 'Profiel Foto';
$lang['staff_edit_profile_your_departments']          = 'Uw Afdelingen';
$lang['staff_edit_profile_change_your_password']      = 'Verander uw wachtwoord';
$lang['staff_edit_profile_change_old_password']       = 'Oud wachtwoord';
$lang['staff_edit_profile_change_new_password']       = 'Nieuw wachtwoord';
$lang['staff_edit_profile_change_repet_new_password'] = 'Herhaal nieuw wachtwoord';

# Surveys
$lang['new_survey']                    = 'Nieuwe enquête';
$lang['surveys']                       = 'Enquêtes';
$lang['survey']                        = 'Enquête';
$lang['survey_lowercase']              = 'enquête';
$lang['survey_no_mail_lists_selected'] = 'Geen Mail Lijst Geselecteerd';
$lang['survey_send_success_note']      = 'Alle Enquête emails(%s) zullen verzonden worden via CRON';
$lang['survey_result']                 = 'Resultaat voor enquête: %s';
$lang['question_string']               = 'Vraag';
$lang['question_field_string']         = 'Veld';

$lang['survey_list_view_tooltip']         = 'Bekijk enquête';
$lang['survey_list_view_results_tooltip'] = 'Bekijk Resultaten';

$lang['survey_add_edit_subject']                   = 'Enquête Onderwerp';
$lang['survey_add_edit_email_description']         = 'Enquête Beschrijving (Email Beschrijving)';
$lang['survey_include_survey_link']                = 'Enquête link toevoegen aan beschrijving';
$lang['survey_available_mail_lists_custom_fields'] = 'Beschikbare aangepaste velden van mailing lijst';
$lang['survey_mail_lists_custom_fields_tooltip']   = 'Aangepaste velden kunnen gebruikt worden voor mailing editor.';
$lang['survey_add_edit_short_description_view']    = 'Enquête Korte Beschrijving(Bekijk Beschrijving)';
$lang['survey_add_edit_from']                      = 'Van (Weergeven in email)';
$lang['survey_add_edit_redirect_url']              = 'Enquête herwijzing URL';
$lang['survey_add_edit_red_url_note']              = 'Wanneer gebruikers de enquête afmaken, waar ze naartoe verwezen moeten worden. (Laat leeg voor deze site URL)';
$lang['survey_add_edit_disabled']                  = 'Uitgeschakeld';
$lang['survey_add_edit_only_for_logged_in']        = 'Alleen voor ingelogde deelnemenrs (staff,klanten)';
$lang['send_survey_string']                        = 'Enquête versturen';
$lang['survey_send_mail_list_clients']             = 'Klanten';
$lang['survey_send_mail_list_staff']               = 'Staff';
$lang['survey_send_mail_lists_string']             = 'Mail Lijsten';
$lang['survey_send_mail_lists_note_logged_in']     = 'Notitie: Als U de enquête verstuurt naar mail lijsten, moet Alleen voor ingelogde gebruikers niet aangevinkd zijn.';
$lang['survey_send_string']                        = 'Versturen';

$lang['survey_send_to_total']  = 'Stuur naar totaal %s emails';
$lang['survey_send_till_now']  = 'Tot nu toe';
$lang['survey_send_finished']  = 'Enquête versturen klaar: %s';
$lang['survey_added_to_queue'] = 'Deze enquête word toegevoegd aan de cron queue op %s';

$lang['survey_questions_string']          = 'Vragen';
$lang['survey_insert_field']              = 'Veld toevoegen';
$lang['survey_field_checkbox']            = 'Checkbox';
$lang['survey_field_radio']               = 'Radio';
$lang['survey_field_input']               = 'Input Veld';
$lang['survey_field_textarea']            = 'schrijf gedeelte';
$lang['survey_question_required']         = 'Noodzakelijk';
$lang['survey_question_only_for_preview'] = 'Alleen voor preview';
$lang['survey_create_first']              = 'U moet eerst de enquête maken, daarna kunt u de vragen toevoegen.';


$lang['survey_dt_name']               = 'Naam';
$lang['survey_dt_total_questions']    = 'Totale Vragen';
$lang['survey_dt_total_participants'] = 'Totale Deelnemers';
$lang['survey_dt_date_created']       = 'Datum Gemaakt';
$lang['survey_dt_active']             = 'Actief';

$lang['survey_text_questions_results'] = 'Text resultaat van vragen';
$lang['survey_view_all_answers']       = 'Bekijk alle antwoorden';

# Staff Tasks
$lang['new_task']       = 'Nieuwe Taak';
$lang['tasks']          = 'Taken';
$lang['task']           = 'Taak';
$lang['task_lowercase'] = 'taak';
$lang['comment_string'] = 'Comment';

$lang['task_marked_as_complete'] = 'Taak als uitgevoerd gemarkeerd';
$lang['task_follower_removed']   = 'Taak volger succesvol verwijderd';
$lang['task_assignee_removed']   = 'Toegewezen persoon op taak verwijderd';

$lang['task_no_assignees'] = 'Geen toegewezen personen op deze taak';
$lang['task_no_followers'] = 'Geen volgers voor deze taak';

$lang['task_list_all']            = 'Alles';
$lang['task_list_finished']       = 'Klaar';
$lang['task_list_unfinished']     = 'Niet Klaar';
$lang['task_list_not_assigned']   = 'Niet Toegewezen';
$lang['task_list_duedate_passed'] = 'Verval datum gepasseerd';
$lang['tasks_dt_name']            = 'Naam';

$lang['task_single_priority']               = 'Prioriteit';
$lang['task_single_start_date']             = 'Start Datum';
$lang['task_single_due_date']               = 'Verval Datum';
$lang['task_single_finished']               = 'Klaar';
$lang['task_single_mark_as_complete']       = 'Markeren als klar';
$lang['task_single_edit']                   = 'Wijzig';
$lang['task_single_delete']                 = 'Verwijder';
$lang['task_single_assignees']              = 'Toegewezene';
$lang['task_single_assignees_select_title'] = 'Taak toewijzen aan';
$lang['task_single_followers']              = 'Volgers';
$lang['task_single_followers_select_title'] = 'Volgers Toevoegen';
$lang['task_single_insert_media_link']      = 'Media Link Invoegen';
$lang['task_single_add_new_comment']        = 'Comment Toevoegen';

$lang['task_add_edit_subject']     = 'Onderwerp';
$lang['task_add_edit_priority']    = 'Prioriteit';
$lang['task_priority_low']         = 'Laag';
$lang['task_priority_medium']      = 'Gemiddeld';
$lang['task_priority_high']        = 'Hoog';
$lang['task_priority_urgent']      = 'Dringend';
$lang['task_add_edit_start_date']  = 'Start Datum';
$lang['task_add_edit_due_date']    = 'Verval Datum';
$lang['task_add_edit_description'] = 'Taak Omschrijving';

# Taxes
$lang['new_tax']       = 'Nieuwe Belasting';
$lang['taxes']         = 'Belastingen';
$lang['tax']           = 'Belasting';
$lang['tax_lowercase'] = 'belasting';
$lang['tax_dt_name']   = 'Belasting Naam';
$lang['tax_dt_rate']   = 'Tarief (percentage)';

$lang['tax_add_edit_name'] = 'Belasting Naam';
$lang['tax_add_edit_rate'] = 'Belasting tarief (percentage)';
$lang['tax_edit_title']    = 'Belasting Wijzigen';
$lang['tax_add_title']     = 'Nieuwe Belasting Toevoegen';

# Ticket Statuses
$lang['new_ticket_status']       = 'Nieuwe Ticket Status';
$lang['ticket_statuses']         = 'Ticket Statussen';
$lang['ticket_status']           = 'Ticket Status';
$lang['ticket_status_lowercase'] = 'ticket status';

$lang['ticket_statuses_dt_name']      = 'Ticket Status Naam';
$lang['no_ticket_statuses_found']     = 'Geen ticket statuses gevonden';
$lang['ticket_statuses_table_total']  = 'Totaal %s';
$lang['ticket_status_add_edit_name']  = 'Ticket Status Naam';
$lang['ticket_status_add_edit_color'] = 'Kies Kleur';
$lang['ticket_status_add_edit_order'] = 'Status Volgorde';

# Todos
$lang['new_todo']                  = 'Nieuw Todo';
$lang['my_todos']                  = 'Mijn Todo Items';
$lang['todo']                      = 'Todo Item';
$lang['todo_lowercase']            = 'todo';
$lang['todo_status_changed']       = 'Todo Status Veranderd';
$lang['todo_add_title']            = 'Nieuwe Todo toevoegen';
$lang['add_new_todo_description']  = 'Omschrijving';
$lang['no_finished_todos_found']   = 'Geen afgeronde todos gevonden';
$lang['no_unfinished_todos_found'] = 'Geen todos gevonden';
$lang['unfinished_todos_title']    = 'Onafgeronde todo\'s';
$lang['finished_todos_title']      = 'Laatst afgeronde todo\'s';

# Authentication
$lang['password_changed_email_subject']             = 'Uw wachtwoord is veranderd';
$lang['password_reset_email_subject']               = 'Reset uw wachtwoord op %s';
# Utilities
$lang['utility_activity_log']                       = 'Activiteiten Log';
$lang['utility_activity_log_filter_by_date']        = 'Filter op datum';
$lang['utility_activity_log_dt_description']        = 'Omschrijving';
$lang['utility_activity_log_dt_date']               = 'Datum';
$lang['utility_activity_log_dt_staff']              = 'Staff';
$lang['utility_calendar_new_event_title']           = 'Nieuw Evenement Toevoegen';
$lang['utility_calendar_new_event_start_date']      = 'Start Datum';
$lang['utility_calendar_new_event_end_date']        = 'Eind Datum';
$lang['utility_calendar_new_event_make_public']     = 'Maak Openbaar';
$lang['utility_calendar_event_added_successfuly']   = 'Nieuw evenement succesvol toegevoegd';
$lang['utility_calendar_event_deleted_successfuly'] = 'Evenement verwijderd';
$lang['utility_calendar_new_event_placeholder']     = 'Evenement titel';


# Navigation
$lang['nav_notifications']          = 'Notificaties';
$lang['nav_my_profile']             = 'Mijn Profiel';
$lang['nav_edit_profile']           = 'Wijzig Profiel';
$lang['nav_logout']                 = 'Uitloggen';
$lang['nav_no_notifications']       = 'Geen Notificaties Gevonden';
$lang['nav_view_all_notifications'] = 'Bekijk Alle Notificaties';
$lang['nav_customizer_tooltip']     = 'Instellingen aanpassen aan voorkeur';
$lang['nav_notifications_tooltip']  = 'Bekijk notificaties';
## Clients
#

$lang['clients_required_field'] = 'Dit veld is verplicht';

# Footer
$lang['clients_copyright'] = 'Copyright %s';

# Announcements
$lang['clients_announcement_from']  = 'Van: ';
$lang['clients_announcement_added'] = 'Toegevoegd: ';

# Contracts
$lang['clients_contracts']               = 'Contracten';
$lang['clients_contracts_dt_subject']    = 'Onderwerp';
$lang['clients_contracts_dt_start_date'] = 'Start Datum';
$lang['clients_contracts_dt_end_date']   = 'Eind Datum';

# Home
$lang['clients_quick_invoice_info']                = 'Snelle Factuur Info';
$lang['clients_home_currency_select_tooltip']      = 'U moet een munteenheid selecteren omdat u facturen heeft met verschillede munteenheden.';

# Invoices
$lang['clients_invoice_html_btn_download'] = 'Download';

$lang['clients_my_invoices']        = 'Mijn Facturen';
$lang['clients_invoice_dt_number']  = 'Factuur  #';
$lang['clients_invoice_dt_date']    = 'Datum';
$lang['clients_invoice_dt_duedate'] = 'Verval Datum';
$lang['clients_invoice_dt_amount']  = 'Bedrag';
$lang['clients_invoice_dt_status']  = 'Status';

# Profile
$lang['clients_profile_heading'] = 'Profiel';

# Used for edit profile and register START
$lang['clients_firstname'] = 'Voornaam';
$lang['clients_lastname']  = 'Achternaam';
$lang['clients_email']     = 'Email Adres';
$lang['clients_company']   = 'Bedrijf';
$lang['clients_vat']       = 'BTW Nummer';
$lang['clients_phone']     = 'Telefoon';
$lang['clients_country']   = 'Land';
$lang['clients_city']      = 'Stad';
$lang['clients_address']   = 'Adres';
$lang['clients_zip']       = 'Postcode';
$lang['clients_state']     = 'Provincie';

# Used for edit profile and register END

$lang['clients_register_password']        = 'Wachtwoord';
$lang['clients_register_password_repeat'] = 'Herhaal Wachtwoord';
$lang['clients_edit_profile_update_btn']  = 'Update';

$lang['clients_edit_profile_change_password_heading'] = 'Verander Wachtwoord';
$lang['clients_edit_profile_old_password']            = 'Oud Wachtwoord';
$lang['clients_edit_profile_new_password']            = 'Nieuw Wachtwoord';
$lang['clients_edit_profile_new_password_repeat']     = 'Herhaal Wachtwoord';
$lang['clients_edit_profile_change_password_btn']     = 'Verander Wachtwoord';
$lang['clients_profile_last_changed_password']        = 'Wachtwoord laatst veranderd %s';

# Knowledge base
$lang['clients_knowledge_base']                    = 'Informatie Centrum';
$lang['clients_knowledge_base_articles_not_found'] = 'Geen Informatie Centrum artikelen gevonden';
$lang['clients_knowledge_base_find_useful']        = 'Vond U dit artikel behulpzaam?';
$lang['clients_knowledge_base_find_useful_yes']    = 'Ja';
$lang['clients_knowledge_base_find_useful_no']     = 'Nee';
$lang['clients_article_only_1_vote_today']         = 'U kunt eens per 24 uur stemmen';
$lang['clients_article_voted_thanks_for_feedback'] = 'Bedankt voor uw feedback';

# Tickets
$lang['clients_ticket_open_subject']                = 'Open Ticket';
$lang['clients_ticket_open_departments']            = 'Afdeling';
$lang['clients_tickets_heading']                    = 'Support Tickets';
$lang['clients_ticket_open_service']                = 'Service';
$lang['clients_ticket_open_priority']               = 'Prioriteit';
$lang['clients_latest_tickets']                     = 'Nieuwste Tickets';
$lang['clients_ticket_open_body']                   = 'Ticket Lichaam';
$lang['clients_ticket_attachments']                 = 'Documenten';
$lang['clients_ticket_posted']                      = 'Geschreven: %s';
$lang['clients_single_ticket_string']               = 'Ticket';
$lang['clients_single_ticket_replied']              = 'Beantwoord: %s';
$lang['clients_single_ticket_informations_heading'] = 'Ticket Informatie';

$lang['clients_tickets_dt_number']     = 'Ticket #';
$lang['clients_tickets_dt_subject']    = 'Onderwerp';
$lang['clients_tickets_dt_department'] = 'Afdeling';
$lang['clients_tickets_dt_service']    = 'Service';
$lang['clients_tickets_dt_status']     = 'Status';
$lang['clients_tickets_dt_last_reply'] = 'Laatste Antwoord';

$lang['clients_ticket_single_department']        = 'Afdeling: %s';
$lang['clients_ticket_single_submited']          = 'Verstuurd: %s';
$lang['clients_ticket_single_status']            = 'Status:';
$lang['clients_ticket_single_priority']          = 'Prioriteit: %s';
$lang['clients_ticket_single_add_reply_btn']     = 'Antwoord Toevoegen';
$lang['clients_ticket_single_add_reply_heading'] = 'Antwoord toevoegen aan deze ticket';

# Login
$lang['clients_login_heading_no_register'] = 'Inloggen Alstublieft';
$lang['clients_login_heading_register']    = 'Inloggen of registreren alstublieft';
$lang['clients_login_email']               = 'Email Adres';
$lang['clients_login_password']            = 'Wachtwoord';
$lang['clients_login_remember']            = 'Onthoud mij';
$lang['clients_login_login_string']        = 'Login';

# Register
$lang['clients_register_string']  = 'Registreer';
$lang['clients_register_heading'] = 'Registreer';

# Navigation
$lang['clients_nav_login']     = 'Login';
$lang['clients_nav_register']  = 'Registreer';
$lang['clients_nav_invoices']  = 'Facturen';
$lang['clients_nav_contracts'] = 'Contracten';
$lang['clients_nav_kb']        = 'Informatie Centrum';
$lang['clients_nav_profile']   = 'Profiel';
$lang['clients_nav_logout']    = 'Log uit';

# Datatables
$lang['clients_dt_paginate_first']    = 'Eerste';
$lang['clients_dt_paginate_last']     = 'Laatste';
$lang['clients_dt_paginate_next']     = 'Volgende';
$lang['clients_dt_paginate_previous'] = 'Vorige';
$lang['clients_dt_empty_table']       = 'Geen {0} gevonden';
$lang['clients_dt_search']            = 'Zoeken:';
$lang['clients_dt_zero_records']      = 'Geen overeenkomende berichten gevonden';
$lang['clients_dt_loading_records']   = 'Laden...';
$lang['clients_dt_length_menu']       = ' _MENU_ weergeven ';
$lang['clients_dt_info_filtered']     = '(gefilterd van _MAX_ totaal {0})';
$lang['clients_dt_info_empty']        = '0 tot 0 van 0 weergeven {0} ';
$lang['clients_dt_info']              = ' _START_ tot _EIND_ van _TOTAAL_ weergeven{0}';
$lang['clients_dt_empty_table']       = 'Geen {0} gevonden';
$lang['clients_dt_sort_ascending']    = 'Activeer om kolom stijgend te sorteren';
$lang['clients_dt_sort_descending']   = 'Activeer om kolom afdalend te sorteren';


# Version 1.0.1
# Admin
#
# Payments
$lang['payment_receipt']                               = 'Betalings Bewijs';
$lang['payment_for_string']                            = 'Betaling Voor';
$lang['payment_date']                                  = 'Betaling Datum:';
$lang['payment_view_mode']                             = 'Betaling Methode:';
$lang['payment_total_amount']                          = 'Totaal Bedrag';
$lang['payment_table_invoice_number']                  = 'Factuur Nummer';
$lang['payment_table_invoice_date']                    = 'Factuur Datum';
$lang['payment_table_invoice_amount_total']            = 'Factuur Bedrag';
$lang['payment_table_payment_amount_total']            = 'Betaal Bedrag';
$lang['payments_table_transaction_id']                 = 'Transactie ID: %s';
$lang['payment_getaway_token_not_found']               = 'Token Niet Gebonden';
$lang['online_payment_recorded_success']               = 'Betaling succesvol opgeslagen';
$lang['online_payment_recorded_success_fail_database'] = 'Betaling is succesvol maar onsuccesvol betaling in database kunnen plaatsen, neem contact op met administrator.';

# Leads
$lang['lead_convert_to_client']                   = 'Omzetten naar klant';
$lang['lead_convert_to_email']                    = 'Email';
$lang['lead_convert_to_client_firstname']         = 'Voornaam';
$lang['lead_convert_to_client_lastname']          = 'Achternaam';
$lang['lead_email_already_exists']                = 'Tip email bestaat al in klanten database';
$lang['lead_to_client_base_converted_success']    = 'Tip succesvol omgezet naar klant';
$lang['lead_already_converted']                   = 'Omgezet naar klant';
$lang['lead_have_client_profile']                 = 'Deze tip heeft een klanten profiel.';
$lang['lead_converted_edit_client_profile']       = 'Wijzig Profiel';

# Invoices
$lang['view_invoice_as_customer_tooltip']                                     = 'Bekijk factuur als klant';
$lang['invoice_add_edit_recurring']                                           = 'Herhalende factuur?';
$lang['invoice_add_edit_recurring_no']                                        = 'Nee';
$lang['invoice_add_edit_recurring_month']                                     = 'Elke %s maand';
$lang['invoice_add_edit_recurring_months']                                    = 'Elke %s maanden';
$lang['invoices_list_all']                                                    = 'Alles';
$lang['invoices_list_not_have_payment']                                       = 'Facturen zonder betalings rapporten';
$lang['invoices_list_recuring']                                               = 'Herhalende Facturen';
$lang['invoices_list_made_payment_by']                                        = 'Betaling gemaakt door %s';
$lang['invoices_create_invoice_from_recurring_only_on_paid_invoices']         = 'Maak nieuwe factuur van de hoofdzakelijk herhalende factuur alleen als het met status betaald is.';
$lang['invoices_create_invoice_from_recurring_only_on_paid_invoices_tooltip'] = 'Maak nieuwe factuur van de hoofdzakelijk herhalende factuur alleen als het met status betaald is? Als dit veld op nee word gezet, en de herhalende factuur niet met status betaald is, zal de nieuwe factuur niet gemaakt worden.';
$lang['send_renewed_invoice_from_recurring_to_email']                         = 'Automatisch de vernieuwde factuur naar klant sturen';
$lang['view_invoice_pdf_link_pay']                                            = 'Betaal Factuur';

# Payment modes
$lang['payment_mode_add_edit_description']         = 'Bank Accounts / Omschrijving';
$lang['payment_mode_add_edit_description_tooltip'] = 'U kunt hier uw bank account informatie neerzetten. Zal weergeven worden op de HTML factuur.';
$lang['payment_modes_dt_description']              = 'Bank Accounts / Omschrijving';
$lang['payment_modes_add_edit_announcement']       = 'Notitie: Betalings methodes hieronder genoemd zijn offline methodes. Online methodes kunnen geconfigureerd worden in Instellingen > Betaling Methodes';
$lang['payment_mode_add_edit_active']              = 'Actief';
$lang['payment_modes_dt_active']                   = 'Actief';

# Contracts
$lang['contract_not_found'] = 'Contract niet gevonden. Is mogelijk verwijderd, check activiteiten log.';

# Settings
$lang['setting_bar_heading']                 = 'Setup';
$lang['settings_group_online_payment_modes'] = 'Betaling Methodes';
$lang['settings_paymentmethod_mode_label']   = 'Label';
$lang['settings_paymentmethod_active']       = 'Actief';
$lang['settings_paymentmethod_currencies']   = 'Coma gescheiden munteenheden';
$lang['settings_paymentmethod_testing_mode'] = 'Test Modus Aanzetten';

$lang['settings_paymentmethod_paypal_username']  = 'Paypal API Gebruikersnaam';
$lang['settings_paymentmethod_paypal_password']  = 'Paypal API Wachtwoord';
$lang['settings_paymentmethod_paypal_signature'] = 'API Handtekening';

$lang['settings_paymentmethod_stripe_api_secret_key']      = 'Streep API Geheime Key';
$lang['settings_paymentmethod_stripe_api_publishable_key'] = 'Streep Openbare Key';
$lang['settings_limit_top_search_bar_results']             = 'Limiteer Top Search Bar Resultaten Tot';

# Quick Actions
$lang['qa_create_invoice']  = 'Genereer Factuur';
$lang['qa_create_task']     = 'Genereer Taak';
$lang['qa_create_client']   = 'Genereer Klant';
$lang['qa_create_contract'] = 'Genereer Contract';
$lang['qa_create_kba']      = 'Genereer Informatie Centrum Artikel';
$lang['qa_create_survey']   = 'Genereer Enquête';
$lang['qa_create_ticket']   = 'Open Ticket';
$lang['qa_create_staff']    = 'Genereer Staff Lid';

## Clients
$lang['client_phonenumber'] = 'Telefoon';

# Main Clients
$lang['clients_register']                          = 'Registreer';
$lang['clients_profile_updated']                   = 'Uw profiel is geupdate';
$lang['clients_successfully_registered']           = 'Bedankt voor uw registratie';
$lang['clients_account_created_but_not_logged_in'] = 'Uw account is gemaakt maar u bent niet ingelogd in ons syysteem. Probeer alstublieft in te loggen.';
# Tickets
$lang['clients_tickets_heading']                   = 'Support Tickets';

# Payments
// Uses on stripe page
$lang['payment_for_invoice'] = 'Betaling voor Factuur';
$lang['payment_total']       = 'Totaal: %s';

# Invoice
$lang['invoice_html_online_payment']             = 'Online Betaling';
$lang['invoice_html_online_payment_button_text'] = 'Betaal Nu';
$lang['invoice_html_payment_modes_not_selected'] = 'Selecteer a.u.b. betaling methode';
$lang['invoice_html_amount_blank']               = 'Totaal bedrag kan niet leeg of nul zijn';
$lang['invoice_html_offline_payment']            = 'Offline Betaling';
$lang['invoice_html_amount']                     = 'Bedrag';


# Version 1.0.2
# Admin
#
# DataTables
$lang['dt_button_column_visibility']  = 'Zichtbaarheid';
$lang['dt_button_reload']             = 'Herlaad';
$lang['dt_button_excel']              = 'Excel';
$lang['dt_button_csv']                = 'CSV';
$lang['dt_button_pdf']                = 'PDF';
$lang['dt_button_print']              = 'Print';
$lang['is_not_active_export']         = 'Nee';
$lang['is_active_export']             = 'Ja';

# Invoice
$lang['invoice_add_edit_advanced_options']               = 'Geavanceerde Opties';
$lang['invoice_add_edit_allowed_payment_modes']          = 'Toegestane betalings methodes voor deze factuur';
$lang['invoice_add_edit_recuring_invoices_from_invoice'] = 'Herhalende facturen van deze factuur';
$lang['invoice_add_edit_no_payment_modes_found']         = 'Geen betaling methode gevonden.';
$lang['invoice_html_total_pay']                          = 'Totaal: %s';

# Email templates
$lang['email_templates_table_heading_name'] = 'Sjabloon Naam';
# General
$lang['discount_type']                      = 'Korting Type';
$lang['discount_type_after_tax']            = 'Na Belasting';
$lang['discount_type_before_tax']           = 'Voor Belasting';
$lang['terms_and_conditions']               = 'Algemene Voorwaarden';
$lang['reference_no']                       = 'Referentie #';
$lang['no_discount']                        = 'Geen Korting';
$lang['view_stats_tooltip']                 = 'Bekijk Snelle Statistieken';
# Clients
$lang['zip_from_date']                      = 'Van Datum:';
$lang['zip_to_date']                        = 'Tot Datum:';
$lang['client_zip_payments']                = 'Postcode Betalingen';
$lang['client_zip_invoices']                = 'Postcode Facturen';
$lang['client_zip_estimates']               = 'Postcode Schattingen';
$lang['client_zip_status']                  = 'Status';
$lang['client_zip_status_all']              = 'Alles';
$lang['client_zip_payment_modes']           = 'Betaling gemaakt door';
$lang['client_zip_no_data_found']           = 'Geen %s gevonden';

# Payments
$lang['payment_mode']         = 'Betaling Methode';
$lang['payment_view_heading'] = 'Betaling';

# Settings
$lang['settings_allow_payment_amount_to_be_modified']               = 'Klant toestaan het te betalen bedrag te wijzigen (Voor online betalingen)';
$lang['settings_survey_send_emails_per_cron_run']                   = 'Hoe veel emails per uur te verzenden';
$lang['settings_survey_send_emails_per_cron_run_tooltip']           = 'Deze optie wordt gebruikt wanneer u enquêtes verstuurd. De enquête cron gaat elke 5 minuten, dus u kunt kiezen hoeveel emails u stuurt elke 5 minuten.';
$lang['settings_delete_only_on_last_invoice']                       = 'Verwijder factuur alleen toegestaan op laatste factuur';
$lang['settings_sales_estimate_prefix']                             = 'Geschat nummer voorzetsel';
$lang['settings_sales_next_estimate_number']                        = 'Volgend geschat nummer';
$lang['settings_sales_next_estimate_number_tooltip']                = 'Zet dit veld op 1 als u vanaf het begin wilt beginnen';
$lang['settings_sales_decrement_estimate_number_on_delete']         = 'Vermindering nummer op verwijdering';
$lang['settings_sales_decrement_estimate_number_on_delete_tooltip'] = 'Wilt U het factuur nummer omlaag doen wanneer de laatste factuur is verwijderd? Voorbeeld: Als deze optie op ja staat en uw factuur nummer 15 was, zal het na verwijdering 14 zijn. Zo niet, zal het nummer 15 blijven. Als U het verwijderen alleen op de laatste factuur uit heeft gezet zou u deze optie op nee moeten houden zodat het bij de volgende factuur niet verlaagd word.';
$lang['settings_sales_estimate_number_format']                      = 'Geschat Nummer Formaat';
$lang['settings_sales_estimate_number_format_year_based']           = 'Jaar Gebaseerd';
$lang['settings_sales_estimate_number_format_number_based']         = 'Nummer Gebaseerd(000001)';
$lang['settings_delete_only_on_last_estimate']                      = 'Verwijder schatting toegestaan alleen op laatste factuur';
$lang['settings_cron_invoice_heading']                              = 'Factuur';
$lang['settings_send_test_email_heading']                           = 'Verstuur test email';
$lang['settings_send_test_email_subheading']                        = 'Verstuur test email zodat u kunt checken of uw SMTP Instellingen goed staan.';
$lang['settings_send_test_email_string']                            = 'Email Adres';
$lang['settings_smtp_settings_heading']                             = 'SMTP Instellingen';
$lang['settings_smtp_settings_subheading']                          = 'Setup hoofdzakelijk email';
$lang['settings_sales_heading_general']                             = 'Algemeen';
$lang['settings_sales_heading_invoice']                             = 'Factuur';
$lang['settings_sales_heading_estimates']                           = 'Schattingen';
$lang['settings_sales_heading_company']                             = 'Bedrijf';
$lang['settings_sales_cron_invoice_heading']                        = 'Factuur';

# Tasks
$lang['tasks_dt_datestart'] = 'Datum Start';
$lang['tasks_dt_priority']  = 'Prioriteit';

# Invoice General
$lang['invoice_discount'] = 'Korting';

# Tickets
$lang['ticket_settings_client'] = 'Klant';

# Settings
$lang['settings_rtl_support_admin']                                   = 'RNL Admin Ruimte(Rechts naar Links)';
$lang['settings_rtl_support_client']                                  = 'RNL Klant Ruimte(Rechts naar Links)';
$lang['acs_language_editor']                                          = 'Taal Editor';
$lang['settings_estimate_auto_convert_to_invoice_on_client_accept']   = 'Automatisch de schattingen naar facturen veranderen als klant accepteert';
$lang['settings_exclude_estimate_from_client_area_with_draft_status'] = 'Excludeer schattingen met klad beschrijving van klant ruimte.';

# Months
$lang['January']   = 'Januari';
$lang['February']  = 'Februari';
$lang['March']     = 'Maart';
$lang['April']     = 'April';
$lang['May']       = 'Mei';
$lang['June']      = 'Juni';
$lang['July']      = 'Juli';
$lang['August']    = 'Augustus';
$lang['September'] = 'September';
$lang['October']   = 'Oktober';
$lang['November']  = 'November';
$lang['December']  = 'December';

# Time ago function translate
$lang['time_ago_just_now']  = 'Zojuist';
$lang['time_ago_minute']    = 'Een minuut geleden';
$lang['time_ago_minutes']   = '%s minuten geleden';
$lang['time_ago_hour']      = 'een uur geleden';
$lang['time_ago_hours']     = '%s uren geleden';
$lang['time_ago_yesterday'] = 'gisteren';
$lang['time_ago_days']      = '%s dagen geleden';
$lang['time_ago_week']      = 'een week geleden';
$lang['time_ago_weeks']     = '%s weken geleden';
$lang['time_ago_month']     = 'een maand geleden';
$lang['time_ago_months']    = '%s maanden geleden';
$lang['time_ago_year']      = 'een jaar geleden';
$lang['time_ago_years']     = '%s jaren geleden';
# Estimates
$lang['estimates']                          = 'Schattingen';
$lang['estimate']                           = 'Schatting';
$lang['estimate_lowercase']                 = 'schatting';
$lang['create_new_estimate']                = 'Nieuwe Schatting Maken';
$lang['view_estimate']                      = 'Bekijk Schatting';
$lang['estimate_sent_to_client_success']    = 'De schatting is succesvol verstuurd naar de klant';
$lang['estimate_sent_to_client_fail']       = 'Probleem tijdens verzenden schatting';
$lang['estimate_reminder_send_problem']     = 'Probleem met verzenden schatting te laat herinnering';
$lang['estimate_details']                   = 'Schatting Details';
$lang['estimate_view']                      = 'Bekijk Schatting';
$lang['estimate_select_customer']           = 'Klant';
$lang['estimate_add_edit_number']           = 'Schatting Nummer';
$lang['estimate_add_edit_date']             = 'Schatting Datum';
$lang['estimate_add_edit_expirydate']       = 'Verloop Datum';
$lang['estimate_add_edit_currency']         = 'Munteenheid';
$lang['estimate_add_edit_client_note']      = 'Klant Notitie';
$lang['estimate_add_edit_admin_note']       = 'Administrator Notitie';
$lang['estimate_add_edit_new_item']         = 'Nieuw Item';
$lang['estimate_add_edit_search_item']      = 'Doorzoek Items';
$lang['estimates_toggle_table_tooltip']     = 'Wissel Tabel';
$lang['estimate_add_edit_advanced_options'] = 'Geavanceerde Opties';
$lang['estimate_vat']                       = 'BTW Nummer';
$lang['estimate_to']                        = 'Naar';
$lang['estimates_list_all']                 = 'Alles';

$lang['estimate_invoiced_date']                  = 'Schatting gefactureerd op %s';
$lang['edit_estimate_tooltip']                   = 'Schatting Aanpassen';
$lang['delete_estimate_tooltip']                 = 'Schatting Verwijderen';
$lang['estimate_sent_to_email_tooltip']          = 'Versturen naar email';
$lang['estimate_already_send_to_client_tooltip'] = 'Deze schatting is al verstuurd naar de klant %s';
$lang['send_overdue_notice_tooltip']             = 'Stuur te laat melding';
$lang['estimate_view_activity_tooltip']          = 'Activiteiten Log';

$lang['estimate_send_to_client_modal_heading']    = 'Stuur deze schatting naar de klant';
$lang['estimate_send_to_client_attach_pdf']       = 'Schatting PDF bijvoegen';
$lang['estimate_send_to_client_preview_template'] = 'Email Sjabloon inzien';

$lang['estimate_dt_table_heading_number']     = 'Schatting #';
$lang['estimate_dt_table_heading_date']       = 'Datum';
$lang['estimate_dt_table_heading_client']     = 'Klant';
$lang['estimate_dt_table_heading_expirydate'] = 'Verval Datum';
$lang['estimate_dt_table_heading_amount']     = 'Bedrag';
$lang['estimate_dt_table_heading_status']     = 'Status';

$lang['estimate_email_link_text']    = 'Bekijk Schatting';
$lang['estimate_convert_to_invoice'] = 'Omzetten naar Factuur';
# Home
$lang['home_unfinished_tasks']       = 'Onafgemaakte Taken';

# Clients
$lang['client_estimates_tab'] = 'Schattingen';
$lang['client_payments_tab']  = 'Betalingen';


# Estimate General
$lang['estimate_pdf_heading']            = 'SCHATTING';
$lang['estimate_table_item_heading']     = 'Item';
$lang['estimate_table_quantity_heading'] = 'aantal';
$lang['estimate_table_rate_heading']     = 'Tarief';
$lang['estimate_table_tax_heading']      = 'Belasting';
$lang['estimate_table_amount_heading']   = 'Bedrag';
$lang['estimate_subtotal']               = 'Sub Totaal';
$lang['estimate_adjustment']             = 'Wijziging';
$lang['estimate_discount']               = 'Korting';
$lang['estimate_total']                  = 'Totaal';
$lang['estimate_to']                     = 'Naar';
$lang['estimate_data_date']              = 'Schatting Datum';
$lang['estimate_data_expiry_date']       = 'Verloop Datum';
$lang['estimate_note']                   = 'Notitie:';
$lang['estimate_status_draft']           = 'Klad';
$lang['estimate_status_sent']            = 'Verstuurd';
$lang['estimate_status_declined']        = 'Afgewezen';
$lang['estimate_status_accepted']        = 'Geaccepteerd';
$lang['estimate_status_expired']         = 'Verlopen';
$lang['estimate_note']                   = 'Notitie:';

# Quick create
$lang['qa_create_estimate'] = 'Schatting Maken';
$lang['qa_create_lead']     = 'Tip Maken';


## Clients
$lang['clients_estimate_dt_number']             = 'Schatting #';
$lang['clients_estimate_dt_date']               = 'Datum';
$lang['clients_estimate_dt_duedate']            = 'Verval Datum ';
$lang['clients_estimate_dt_amount']             = 'Bedrag';
$lang['clients_estimate_dt_status']             = 'Status';
$lang['clients_nav_estimates']                  = 'Schattingen';
$lang['clients_decline_estimate']               = 'Afwijzen';
$lang['clients_accept_estimate']                = 'Accepteren';
$lang['clients_my_estimates']                   = 'Schattingen';
$lang['clients_estimate_invoiced_successfuly']  = 'Schatting geaccepteerd. Hier is de factuur van de schatting.';
$lang['clients_estimate_accepted_not_invoiced'] = 'Bedankt voor het accepteren van de schatting';
$lang['clients_estimate_declined']              = 'Schatting afgewezen. U kunt de schatting op elk moment voor de verval datum accepteren.';
$lang['clients_estimate_failed_action']         = 'Niet gelukt om actie te ondernemen op deze schatting.';
$lang['client_add_edit_profile']                = 'Profiel';

# Version 1.0.3

# Custom Fields
$lang['custom_field']                          = 'Aangepast Veld';
$lang['custom_field_lowercase']                = 'aangepast veld';
$lang['custom_fields']                         = 'Aangepaste Velden';
$lang['custom_fields_lowercase']               = 'aangepaste velden';
$lang['new_custom_field']                      = 'Nieuw Aangepast Veld';
$lang['custom_field_name']                     = 'Veld Naam';
$lang['custom_field_add_edit_type']            = 'Type';
$lang['custom_field_add_edit_belongs_top']     = 'Veld is eigendom van';
$lang['custom_field_add_edit_options']         = 'Opties';
$lang['custom_field_add_edit_options_tooltip'] = 'Alleen gebruiken voor Select types. Vul dit veld in door de opties te onderscheiden met een komma, b.v: appel, sinasappel, banaan';
$lang['custom_field_add_edit_order']           = 'Bestel';

$lang['custom_field_dt_field_to']       = 'Eigendom van';
$lang['custom_field_dt_field_name']     = 'Naam';
$lang['custom_field_dt_field_type']     = 'Type';
$lang['custom_field_add_edit_active']   = 'Actief';
$lang['custom_field_add_edit_disabled'] = 'Uitgeschakeld';

# Ticket replies
$lang['ticket_reply']           = 'Ticket Antwoord';
$lang['ticket_reply_lowercase'] = 'ticket antwoord';

# Admin Customizer Sidebar
$lang['asc_custom_fields'] = 'Aangepaste Velden';

# Contracts
$lang['contract_types']          = 'Contracten Types';
$lang['contract_type']           = 'Contract type';
$lang['new_contract_type']       = 'Nieuw Contract Type';
$lang['contract_type_lowercase'] = 'contract';
$lang['contract_type_name']      = 'Naam';

$lang['contract_types_list_name'] = 'Contract Type';

# Customizer Menu
$lang['acs_contracts']      = 'Contracten';
$lang['acs_contract_types'] = 'Contract Types';

# Version 1.0.4
# Invoice Items
$lang['invoice_item_long_description']     = 'Lange Beschrijving';
# Customers
$lang['client_delete_invoices_warning']    = 'Deze klant heeft facturen of schattingen op zijn account. U kunt deze klant niet verwijderen. Verander alle facturen naar een andere klant en verwijder hem daarna.';
$lang['clients_list_phone']                = 'Telefoon';
$lang['client_expenses_tab']               = 'Kosten';
$lang['customers_summary']                 = 'Klanten Opsomming';
$lang['customers_summary_active']          = 'Actieve contacten';
$lang['customers_summary_inactive']        = 'Onactieve Contacten';
$lang['customers_summary_logged_in_today'] = 'Contacten Vandaag Ingelogd';

# Authentication
$lang['admin_auth_forgot_password_email']             = 'Email Adres';
$lang['admin_auth_forgot_password_heading']           = 'Wachtwoord Vergeten';
$lang['admin_auth_login_heading']                     = 'Login';
$lang['admin_auth_login_email']                       = 'Email Adres';
$lang['admin_auth_login_password']                    = 'Wachtwoord';
$lang['admin_auth_login_remember_me']                 = 'Onthoud Mij';
$lang['admin_auth_login_button']                      = 'Login';
$lang['admin_auth_login_fp']                          = 'Wachtwoord Vergeten?';
$lang['admin_auth_reset_password_heading']            = 'Wachtwoord Resetten';
$lang['admin_auth_reset_password']                    = 'Wachtwoord';
$lang['admin_auth_reset_password_repeat']             = 'Wachtwoord Herhalen';
$lang['admin_auth_invalid_email_or_password']         = 'Ongeldig Email of Wachtwoord';
$lang['admin_auth_inactive_account']                  = 'Onactief Account';
# Calender
$lang['calendar_estimate']                            = 'Schatting';
$lang['calendar_invoice']                             = 'Factuur';
$lang['calendar_contract']                            = 'Contract';
$lang['calendar_customer_reminder']                     = 'Klant Herinnering';
$lang['calendar_event']                               = 'Evenement';
$lang['calendar_task']                                = 'Taken';
# Leads
$lang['lead_edit_delete_tooltip']                     = 'Verwijder Tip';
$lang['lead_attachments']                             = 'Documenten';
# Admin Customizer Sidebar
$lang['acs_finance']                                  = 'Financiën';
# Settings
$lang['settings_number_padding_invoice_and_estimate'] = 'Factuur/Schatting Nummer Opvulling Nullen. <br /> <small>Bv. Als deze waarde 3 is dan zal het nummer geformateerd worden: 005 or 025</small>';
$lang['settings_show_sale_agent_on_invoices']         = 'Laat Verkoper Zien op Factuur';
$lang['settings_show_sale_agent_on_estimates']        = 'Laat Verkoper Zien op Schattingen';
$lang['settings_predefined_predefined_term']          = 'Voorgedefineerde Algemene Voorwaarden';
$lang['settings_predefined_clientnote']               = 'Voorgedefineerde Klanten Notitie';
$lang['settings_custom_pdf_logo_image_url']           = 'Aangepaste PDF Bedrijf Logo URL (JPG - 210x60px)';
$lang['settings_custom_pdf_logo_image_url_tooltip']   = 'U zult waarschijnlijk problemen hebben met PNG plaatjes en de transparantie doordat dit op verschillende manieren behandeld kan worden. Probeer php-imagkick te gebruiken en php-gd uit te schakelen. Als u dit veld leeg laat zal de geuploade logo gebruikt worden.';

# General
$lang['sale_agent_string']               = 'Verkoper';
$lang['amount_display_in_base_currency'] = 'Bedrag is weergegeven in uw standaar munteenheid - Gebruik dit rapport alleen als u 1 munteenheid gebruikt voor betalingen en kosten.';
# Leads
$lang['leads_summary']                                         = 'Tips Opsomming';

# Contracts
$lang['contract_value']                 = 'Contract Waarde';
$lang['contract_trash']                 = 'Prullenbak';
$lang['contracts_view_trash']           = 'Bekijk Prullenbak';
$lang['contracts_view_all']             = 'Alles';
$lang['contracts_view_exclude_trashed'] = 'Excludeer verwijderde klanten';
$lang['contract_value_tooltip']         = 'Voeg contract waarde toe. De waarde zal weergegeven worden in uw standaard munteenheid.';
$lang['contract_trash_tooltip']         = 'Als u een contract in de prullenbak gooit dan zal het niet weergegeven worden bij de klant, op grafieken en andere statistieken, en ook niet in uw lijst van alle contracten.';
$lang['contract_summary_active']              = 'Actief';
$lang['contract_renew_heading']               = 'Vernieuw Contract';
$lang['contract_summary_heading']             = 'Contract Opsomming ';
$lang['contract_summary_expired']             = 'Verlopen';
$lang['contract_summary_about_to_expire']     = 'Staat op het punt te verlopen';
$lang['contract_summary_recently_added']      = 'Recentelijk Toegevoegd';
$lang['contract_summary_trash']               = 'Prullenbak';
$lang['contract_summary_by_type']             = 'Contracten op Type';
$lang['contract_summary_by_type_value']       = 'Contracten Waarde op Type';
$lang['contract_renewed_successfuly']         = 'Contract succesvol hernieuwd';
$lang['contract_renewed_fail']                = 'Probleem tijdens hernieuwing contract. Neem contact op met een administrator';
$lang['no_contract_renewals_found']           = 'Hernieuwingen voor dit contract niet gevonden.';
$lang['no_contract_renewals_history_heading'] = 'Contract Hernieuwing Geschiedenis';
$lang['contract_renewed_by']                  = '%s heeft dit contract hernieuwd';
$lang['contract_renewal_deleted']             = 'Hernieuwing succesvol verwijderd';
$lang['contract_renewal_delete_fail']         = 'Onsuccesvol in verwijderen Hernieuwing. Neem contact op met een administrator.';

$lang['contract_renewal_new_value'] = 'Nieuw Contract Waarde: %s';
$lang['contract_renewal_old_value'] = 'Oud Contract Waarde: %s';

$lang['contract_renewal_new_start_date'] = 'Nieuw Start Datum: %s';
$lang['contract_renewal_old_start_date'] = 'Oud Contract Start Datum was: %s';

$lang['contract_renewal_new_end_date'] = 'Nieuw Eind Datum: %s';
$lang['contract_renewal_old_end_date'] = 'Oud Contract Eind Datum was: %s';
$lang['contract_attachment']           = 'Document';
$lang['contract_attachment_lowercase'] = 'document';

# Admin Aside Menu
$lang['als_goals_tracking']     = 'Doel Bijhouden';
$lang['als_expenses']           = 'Kosten';
$lang['als_reports_expenses']   = 'Kosten';
$lang['als_expenses_vs_income'] = 'Kosten vs Inkomen';

# Invoices
$lang['invoice_attach_file']           = 'Document Toevoegen';
$lang['invoice_mark_as_sent']          = 'Markeren als verzonden';
$lang['invoice_marked_as_sent']        = 'Factuur gemarkeerd als succesvol verzonden';
$lang['invoice_marked_as_sent_failed'] = 'Onsuccesvol in factuur als verzonden markeren.';

# Quick Actions
$lang['qa_new_goal']    = 'Nieuw Doel Zetten';
$lang['qa_new_expense'] = 'Kosten Opslaan';

# Goals Tracking
$lang['goals']                                         = 'Doelen';
$lang['goal']                                          = 'Doel';
$lang['goals_tracking']                                = 'Doelen Bijhouden';
$lang['new_goal']                                      = 'Nieuw Doel';
$lang['goal_lowercase']                                = 'doel';
$lang['goal_start_date']                               = 'Start Datum';
$lang['goal_end_date']                                 = 'Eind Datum';
$lang['goal_subject']                                  = 'Onderwerp';
$lang['goal_description']                              = 'Beschrijving';
$lang['goal_type']                                     = 'Doel Type';
$lang['goal_achievement']                              = 'Prestatie';
$lang['goal_contract_type']                            = 'Contract Type';
$lang['goal_notify_when_fail']                         = 'Staff lid op de hoogte stellen als doel niet behaald wordt.';
$lang['goal_notify_when_achieve']                      = 'Staff lid op de hoogte stellen als doel behaald wordt';
$lang['goal_progress']                                 = 'Vooruitgang';
$lang['goal_total']                                    = 'Totaal: %s';
$lang['goal_result_heading']                           = 'Doel Vooruitgang';
$lang['goal_income_shown_in_base_currency']            = 'Totaal inkomen is weergegeven in uw standaard munteenheid';
$lang['goal_notify_when_end_date_arrives']             = 'De staff leden zullen op de hoogte gesteld worden als de eind datum er is.';
$lang['goal_staff_members_notified_about_achievement'] = 'De staff members zijn op de hoogte gesteld van deze doel prestatie';
$lang['goal_staff_members_notified_about_failure']     = 'Staff leden zijn op de hoogte gesteld van het gefaald hebben';
$lang['goal_notify_staff_manualy']                     = 'Staff leden handmatig op de hoogte stellen';
$lang['goal_notify_staff_notified_manualy_success']    = 'De staff leden zijn op de hoogte gesteld over dit doel resultaat';
$lang['goal_notify_staff_notified_manualy_fail']       = 'Onsuccesvol geweest in staff leden op de hoogte stellen van het gefaald hebben';

$lang['goal_achieved'] = 'Behaald';
$lang['goal_failed']   = 'Gefaald';
$lang['goal_close']    = 'Heel Dichtbij';

$lang['goal_type_total_income']                                         = 'Behaal Totaal Inkomen';
$lang['goal_type_convert_leads']                                        = 'Zet X Tips om in klanten';
$lang['goal_type_increase_customers_without_leads_conversions']         = 'Klanten Nummer Verhogen';
$lang['goal_type_increase_customers_without_leads_conversions_subtext'] = 'Tips omzetting is geexcludeerd';

$lang['goal_type_increase_customers_with_leads_conversions']         = 'Klanten Nummer Verhogen';
$lang['goal_type_increase_customers_with_leads_conversions_subtext'] = 'Tips omzetting is geincludeerd';
$lang['goal_type_make_contracts_by_type_calc_database']              = 'Maak contracten bij typen';
$lang['goal_type_make_contracts_by_type_calc_database_subtext']      = 'Is berekend van de datum toegevoegd aan de database';
$lang['goal_type_make_contracts_by_type_calc_date']                  = 'Maak Contracten Bij Typen';
$lang['goal_type_make_contracts_by_type_calc_date_subtext']          = 'Is berekend van het contract start datum';
$lang['goal_type_total_estimates_converted']                         = 'X Schattingen omgezet';
$lang['goal_type_total_estimates_converted_subtext']                 = 'Zal alleen schattingen nemen die omgezet zijn naar facturen';
$lang['goal_type_income_subtext']                                    = 'Inkomen zal berekend worden in uw standaard munteenheid (niet omgezet)';
# Payments
$lang['payment_transaction_id']                                      = 'Transactie ID';
# Settings Menu
$lang['acs_expenses']                                                = 'Kosten';
$lang['acs_expense_categories']                                      = 'Kosten Categorieën';
# Expeneses
$lang['expense_category']                                            = 'Kosten Categorie';
$lang['expense_category_lowercase']                                  = 'kosten category';
$lang['new_expense']                                                 = 'Kosten Opslaan';
$lang['expense_add_edit_name']                                       = 'Categorie Naam';
$lang['expense_add_edit_description']                                = 'Categorie Omschrijving';
$lang['expense_categories']                                          = 'Kosten Categorieën';
$lang['new_expense_category']                                        = 'Nieuwe Categorie';
$lang['dt_expense_description']                                      = 'Omschrijving';
$lang['expense']                                                     = 'Kosten';
$lang['expenses']                                                    = 'Kosten';
$lang['expense_lowercase']                                           = 'kosten';
$lang['expense_add_edit_tax']                                        = 'Belasting';
$lang['expense_add_edit_customer']                                   = 'Klant';
$lang['expense_add_edit_currency']                                   = 'Munteenheid';
$lang['expense_add_edit_note']                                       = 'Notitie';
$lang['expense_add_edit_date']                                       = 'Kosten Datum';
$lang['expense_add_edit_amount']                                     = 'Bedrag';
$lang['expense_add_edit_billable']                                   = 'Factureerbaar';
$lang['expense_add_edit_attach_receipt']                             = 'Bon Bijvoegen';
$lang['expense_add_edit_reference_no']                               = 'Referentie #';
$lang['expense_receipt']                                             = 'Kosten Bon';
$lang['expense_receipt_lowercase']                                   = 'kosten bon';
$lang['expense_dt_table_heading_category']                           = 'Categorie';
$lang['expense_dt_table_heading_amount']                             = 'Bedrag';
$lang['expense_dt_table_heading_date']                               = 'Datum';
$lang['expense_dt_table_heading_reference_no']                       = 'Referentie #';
$lang['expense_dt_table_heading_customer']                           = 'Klant';
$lang['expense_dt_table_heading_payment_mode']                       = 'Betaling methode';
$lang['expense_converted_to_invoice']                                = 'Kosten succesvol omgezet naar factuur';
$lang['expense_converted_to_invoice_fail']                           = 'Onsuccesvol geweest in deze kosten omzetten naar factuur. Check de error log.';
$lang['expense_copy_success']                                        = 'De kosten zijn succesvol gekopieerd.';
$lang['expense_copy_fail']                                           = 'Onsuccesvol geweest in kosten kopieren. Bekijk nog een keer de benodigde velden en probeer opnieuw.';
$lang['expenses_list_all']                                           = 'Alles';
$lang['expenses_list_billable']                                      = 'Factureerbaar';
$lang['expenses_list_non_billable']                                  = 'Onfactureerbaar';
$lang['expenses_list_invoiced']                                      = 'Gefactureerd';
$lang['expenses_list_unbilled']                                      = 'Ongefactureerd';
$lang['expenses_list_recurring']                                     = 'Herhalend';
$lang['expense_invoice_delete_not_allowed']                          = 'U kunt deze kosten niet verwijderen. Deze kosten zijn al gefactureerd.';
$lang['expense_convert_to_invoice']                                  = 'Omzetten naar Factuur';
$lang['expense_edit']                                                = 'Kosten Bewerken';
$lang['expense_delete']                                              = 'Verwijderen';
$lang['expense_copy']                                                = 'Kopieer';
$lang['expense_invoice_not_created']                                 = 'Factuur niet gemaakt';
$lang['expense_billed']                                              = 'Gefactureerd';
$lang['expense_not_billed']                                          = 'Factuur niet betaald';
$lang['expense_customer']                                            = 'Klant';
$lang['expense_note']                                                = 'Notitie:';
$lang['expense_date']                                                = 'Datum:';
$lang['expense_ref_noe']                                             = 'Ref #:';
$lang['expense_tax']                                                 = 'Belasting:';
$lang['expense_amount']                                              = 'Bedrag:';
$lang['expense_recurring_indicator']                                 = 'Herhalend';
$lang['expense_already_invoiced']                                    = 'Deze kosten zijn al gefactureerd';
$lang['expense_recurring_auto_create_invoice']                       = 'Automatisch Factuur Maken';
$lang['expense_recurring_send_custom_on_renew']                      = 'Stuur de factuur naar klant email wanneer kosten herhaald zijn.';
$lang['expense_recurring_autocreate_invoice_tooltip']                = 'Als deze optie aanstaat dan zal de factuur voor de klant automatisch gemaakt worden wanneer de kosten hernieuwd worden.';
$lang['report_expenses_full']                                        = 'Volledig Rapport';
$lang['expenses_yearly_by_categories']                               = 'Jaarlijkse Kosten op Categorie';
$lang['total_expenses_for']                                          = 'Totale Kosten Voor'; // year
$lang['expenses_report_for']                                         = 'Kosten Voor'; // year
# Custom fields
$lang['custom_field_required']                                       = 'Verplicht';
$lang['custom_field_show_on_pdf']                                    = 'Laat zien op PDF';
$lang['custom_field_leads']                                          = 'Tips';
$lang['custom_field_customers']                                      = 'Klanten';
$lang['custom_field_staff']                                          = 'Staff';
$lang['custom_field_contracts']                                      = 'Contracten';
$lang['custom_field_tasks']                                          = 'Taken';
$lang['custom_field_expenses']                                       = 'Kosten';
$lang['custom_field_invoice']                                        = 'Factuur';
$lang['custom_field_estimate']                                       = 'Schatting';
# Tickets
$lang['ticket_single_private_staff_notes']                           = 'Prive Staff Notities';


# Business News
$lang['business_news'] = 'Bedrijfs Nieuws';

# Navigation
$lang['nav_todo_items']               = 'Todo items';
# Clients
# Contracts
$lang['clients_contracts_type']       = 'Contract Type';
# Version 1.0.5
# General
$lang['no_tax']                             = 'Geen Belasting';
$lang['numbers_not_formated_while_editing'] = 'Het tarief in het input veld is niet geformateerd tijdens item editten/toevoegen en zou zo moeten blijven. Probeer het niet handmatig te formateren hier.';
# Contracts
$lang['contracts_view_expired']             = 'Verlopen';
$lang['contracts_view_without_dateend']     = 'Contracten Zonder Eind Datum';

# Email Templates
$lang['email_template_contracts_fields_heading'] = 'Contracten';
# Invoices General
$lang['invoice_estimate_general_options']        = 'Algemene Opties';
$lang['invoice_table_item_description']          = 'Beschrijving';
$lang['invoice_recurring_indicator']             = 'Herhalend';

# Estimates
$lang['estimate_convert_to_invoice_successfuly'] = 'Schatting succesvol omgezet naar factuur';
$lang['estimate_table_item_description']         = 'Beschrijving';

# Version 1.0.6
# Invoices
# Currencies
$lang['cant_delete_base_currency'] = 'U kunt de standaar munteenheid niet verwijderen. U moet een nieuwe standaard munteenheid toewijzen en de oude verwijderen.';
$lang['invoice_copy']              = 'Kopieer Factuur';
$lang['invoice_copy_success']      = 'Factuur succesvol gekopieerd';
$lang['invoice_copy_fail']         = 'Onsuccesvol in factuur kopieren.';
$lang['invoice_due_after_help']    = 'Op nul zetten om berekening te voorkomen';

$lang['show_shipping_on_invoice'] = 'Laat transport informatie zien in factuur';

# Estimates
$lang['show_shipping_on_estimate']         = 'Laat transport informatie zien in schatting.';
$lang['is_invoiced_estimate_delete_error'] = 'Deze schatting is gefactureerd. U kunt gefactureerde schattingen niet verwijderen.';

# Customers & Invoices / Estimates
$lang['ship_to']                  = 'Verzenden Naar';
$lang['customer_profile_details'] = 'Klant Details';
$lang['billing_shipping']         = 'Rekening & Verzenden';
$lang['billing_address']          = 'Rekening Adres';
$lang['shipping_address']         = 'Verzend Adres';

$lang['billing_street']  = 'Straat';
$lang['billing_city']    = 'Stad';
$lang['billing_state']   = 'Provincie';
$lang['billing_zip']     = 'Postcode';
$lang['billing_country'] = 'Land';

$lang['shipping_street']                    = 'Straat';
$lang['shipping_city']                      = 'Stad';
$lang['shipping_state']                     = 'Provincie';
$lang['shipping_zip']                       = 'Postcode';
$lang['shipping_country']                   = 'Land';
$lang['get_shipping_from_customer_profile'] = 'Transport details van klant profiel afhalen';

# Customer
$lang['customer_file_from']                                    = 'Weergegeven van %s';
$lang['customer_default_currency']                             = 'Standaard Munteenheid';
$lang['customer_no_attachments_found']                         = 'Geen Documenten Gevonden';
$lang['customer_update_address_info_on_invoices']              = 'Update de verzend/rekening info op alle vorige facturen/schattingen';
$lang['customer_update_address_info_on_invoices_help']         = 'Als u dit veld aanzet dan zal rekening/verzend info geupdate worden op alle facturen en schattingen. Notitie: Facture met de status betaald zullen hetzelfde blijven.';
$lang['setup_google_api_key_customer_map']                     = 'Zet google api key op om de klanten map te kunnen bekijken';
$lang['customer_attachments_file']                             = 'Document';
$lang['client_send_set_password_email']                        = 'stuur SET wachtwoord email';
$lang['customer_billing_same_as_profile']                      = 'Hetzelfde as Klant Info';
$lang['customer_billing_copy']                                 = 'Kopieer rekening adres';
$lang['customer_map']                                          = 'Map';
$lang['set_password_email_sent_to_client']                     = 'Email om wachtwoord te zetten is succesvol verstuurd naar de klant.';
$lang['set_password_email_sent_to_client_and_profile_updated'] = 'Profiel geupdate en emaill on wachtwoord te zetten is succesvol verstuurd naar de klant';
$lang['customer_attachments']                                  = 'Documenten';
$lang['customer_longitude']                                    = 'Longitude (Google Maps)';
$lang['customer_latitude']                                     = 'Latitude (Google Maps)';

# Authentication
$lang['admin_auth_set_password']          = 'Wachtwoord';
$lang['admin_auth_set_password_repeat']   = 'Herhaal Wachtwoord';
$lang['admin_auth_set_password_heading']  = 'Wachtwoord zetten';
$lang['password_set_email_subject']       = 'Zet nieuw wachtwoord op %s';
# General
$lang['apply']                            = 'Aanmelden';
$lang['department_calendar_id']           = 'Google Kalender ID';
$lang['kan_ban_string']                   = 'Kan Ban';
$lang['localization_default_language']    = 'Standaard Taal';
$lang['system_default_string']            = 'Systeem Standaard';
$lang['advanced_options']                 = 'Geavanceerde Opties';
# Expenses
$lang['expense_list_invoice']             = 'Gefactureerd';
$lang['expense_list_billed']              = 'Gefactureerd';
$lang['expense_list_unbilled']            = 'Ongefactureerd';
# Leads
$lang['lead_merge_custom_field']          = 'Samen voegen als aangepast veld';
$lang['lead_merge_custom_field_existing'] = 'Samen voegen met database veld';
$lang['lead_dont_merge_custom_field']     = 'Niet samen voegen';
$lang['no_lead_notes_found']              = 'Geen tip notities gevonden';
$lang['leads_view_list']                  = 'Lijsten';
$lang['lost_leads']                       = 'Verloren tips';
$lang['junk_leads']                       = 'Junk tips';
$lang['lead_mark_as_lost']                = 'Markeer als verloren';
$lang['lead_unmark_as_lost']              = 'Onmarkeer tip als verloren';
$lang['lead_marked_as_lost']              = 'Tip succesvol gemarkeerd als verloren';
$lang['lead_unmarked_as_lost']            = 'Tip succesvol ongemarkeerd als verloren';
$lang['leads_status_color']               = 'Kleur';

$lang['lead_mark_as_junk']     = 'Markeer als junk';
$lang['lead_unmark_as_junk']   = 'Onmarkeer tip als junk';
$lang['lead_marked_as_junk']   = 'Tip succesvol gemarkeerd als junk';
$lang['lead_unmarked_as_junk'] = 'Tip succesvol ongemarkeerd als junk';

$lang['lead_not_found']                                                      = 'Tip niet gevonden';
$lang['lead_lost']                                                           = 'Verloren';
$lang['lead_junk']                                                           = 'Junk';
$lang['leads_not_assigned']                                                  = 'Niet toegewezen';
# Contacts
$lang['contract_not_visible_to_client']                                      = 'Verberg van klant';
$lang['contract_edit_overview']                                              = 'Contract Overzicht';
$lang['contract_attachments']                                                = 'Documenten';
# Tasks
$lang['task_view_make_public']                                               = 'Maak Openbaar';
$lang['task_is_private']                                                     = 'Privè Taak';
$lang['task_finished']                                                       = 'Klaar';
$lang['task_single_related']                                                 = 'Gerelateerd';
$lang['task_unmark_as_complete']                                             = 'Onmarkeren als klaar';
$lang['task_unmarked_as_complete']                                           = 'Taak ongemarkeerd als klaar';
$lang['task_relation']                                                       = 'Gerelateerd';
$lang['task_public']                                                         = 'Openbaar';
$lang['task_public_help']                                                    = 'Als je deze taak op openbaar zet zal het zichtbaar zijn voor alle staff leden. Anders zal het alleen zichtbaar zijn voor toegewezene, volgers, de makers, of administrators.';
# Settings
$lang['settings_general_favicon']                                            = 'Favicon';
$lang['settings_output_client_pdfs_from_admin_area_in_client_language']      = 'Output klant PDF documenten van admin ruimte in klant taal';
$lang['settings_output_client_pdfs_from_admin_area_in_client_language_help'] = 'Als deze optie op ja staat en bv. het systeem standaard taal Engels is en de klant heeft zijn taal op Frans, dan zal de output van de PDF Document in het Frans zijn.';
$lang['settings_cron_surveys']                                               = 'Enquêtes';
$lang['settings_default_tax']                                                = 'Standaard Belasting';
$lang['setup_calendar_by_departments']                                       = 'Zet kalender op bij afdelingen';
$lang['settings_calendar']                                                   = 'Kalender';
$lang['settings_sales_invoice_due_after']                                    = 'Factuur komt na (dagen)';
$lang['settings_google_api']                                                 = 'Google API Key';
$lang['settings_gcal_main_calendar_id']                                      = 'Google Kalender ID';
$lang['settings_gcal_main_calendar_id_help']                                 = 'Dit is de hoofdzakelijke bedrijf kalender. Alle evenementen van deze kalender zullen zichtbaar zijn. Als u een kalender specifiek wilt instellen op afdelingen, kunt u de afdeling in uw Google Kalender ID toevoegen.';

$lang['show_on_calendar']                  = 'Zichbaar op kalender';
$lang['show_invoices_on_calendar']         = 'Facturen';
$lang['show_estimates_on_calendar']        = 'Schattingen';
$lang['show_contracts_on_calendar']        = 'Contracten';
$lang['show_tasks_on_calendar']            = 'Taken';
$lang['show_customer_reminders_on_calendar'] = 'Customer Reminders';
# Leads
$lang['copy_custom_fields_convert_to_customer']                      = 'Kopieer aangepaste velden naar klant profiel';
$lang['copy_custom_fields_convert_to_customer_help']                 = 'Als een van de volgende aangepaste velden niet bestaat voor klanten, dan zal deze automatisch gemaakt worden met dezelfde naam, anders zal alleen de waarde gekopieerd worden van de tip profiel.';
$lang['lead_profile']                                                = 'Profiel';
$lang['lead_is_client']                                              = 'Klant';
$lang['leads_kan_ban_notes_title']                                   = 'Notities';
$lang['leads_email_integration_folder_no_encryption']                = 'Geen Encryptie';
$lang['leads_email_integration']                                     = 'Email Integratie';
$lang['leads_email_active']                                          = 'Actief';
$lang['leads_email_integration_imap']                                = 'IMAP Server';
$lang['leads_email_integration_email']                               = 'Email adres (Login)';
$lang['leads_email_integration_password']                            = 'Wachtwoord';
$lang['leads_email_integration_default_source']                      = 'Standaard Bron';
$lang['leads_email_integration_check_every']                         = 'Check Elke (minuten)';
$lang['leads_email_integration_default_assigned']                    = 'Verantwoordelijk voor nieuwe tips.';
$lang['leads_email_encryption']                                      = 'Encryptie';
$lang['leads_email_integration_updated']                             = 'Email Integratie Geupdate';
$lang['leads_email_integration_default_status']                      = 'Standaard Status';
$lang['leads_email_integration_folder']                              = 'Folder';
$lang['leads_email_integration_notify_when_lead_imported']           = 'Op de hoogte stellen wanneer tip import';
$lang['leads_email_integration_only_check_unseen_emails']            = 'Alleen ongeopende emails checken';
$lang['leads_email_integration_only_check_unseen_emails_help']       = 'Het script zal automatisch de emails als geopend zetten na het checken. Dit zorgt ervoor dat u niet alles opnieuw hoeft te openen. Het wordt niet aangeraden om deze optie uit te zetten als u veel emails heeft.';
$lang['leads_email_integration_notify_when_lead_contact_more_times'] = 'Stel mij op de hoogte als tip meerdere malen contact probeert te krijgen';
$lang['leads_email_integration_test_connection']                     = 'Test IMAP Connectie';
$lang['lead_email_connection_ok']                                    = 'IMAP Connectie is goed';
$lang['lead_email_connection_not_ok']                                = 'IMAP Connectie is niet goed';
$lang['lead_email_activity']                                         = 'Email Activiteit';
$lang['leads_email_integration_notify_roles']                        = 'Rollen om op de hoogte te stellen';
$lang['leads_email_integration_notify_staff']                        = 'Staff leden om op de hoogte te stellen';
$lang['lead_public']                                                 = 'Openbaar';
# Knowledge Base

$lang['kb_group_color']                = 'Kleur';
$lang['kb_group_order']                = 'Volgorde';
# Utilities - BULK PDF Exporter
$lang['bulk_pdf_exporter']             = 'Bulk PDF Exporter';
$lang['bulk_export_pdf_payments']      = 'Betalingen';
$lang['bulk_export_pdf_estimates']     = 'Schattingen';
$lang['bulk_export_pdf_invoices']      = 'Facturen';
$lang['bulk_pdf_export_button']        = 'Export';
$lang['bulk_pdf_export_select_type']   = 'Selecteer Type';
$lang['no_data_found_bulk_pdf_export'] = 'Geen data gevonden voor export';
$lang['bulk_export_status_all']        = 'Alles';
$lang['bulk_export_status']            = 'Status';
$lang['bulk_export_zip_payment_modes'] = 'Betalingen gemaakt door';
$lang['bulk_export_include_tag']       = 'Inclusief Tag';
$lang['bulk_export_include_tag_help']  = 'B. Origineel of Kopie. De tag zal geoutput zijn in de PDF. Geadviseerd om maar 1 tag te gebruiken.';
# Predefined replies
$lang['no_predefined_replies_found']   = 'Geen voorgedefineerde antwoorden gevonden';
## Clients area
$lang['clients_contract_attachments']  = 'Documenten';
# Backup
$lang['backup_type_full']              = 'Volledige Backup';
$lang['backup_type_db']                = 'Database Backup';

$lang['auto_backup_options_updated']     = 'Auto backup Opties Geupdate';
$lang['auto_backup_every']               = 'Maak backup elke X dagen';
$lang['auto_backup_enabled']             = 'Ingeschakeld (Heeft Cron Nodig)';
$lang['auto_backup']                     = 'Auto backup';
$lang['backup_delete']                   = 'Backup Verwijderd';
$lang['create_backup']                   = 'Maak Backup';
$lang['backup_success']                  = 'Backup is succesvol gemaakt';
$lang['utility_backup']                  = 'Database Backup';
$lang['utility_create_new_backup_db']    = 'Maak Database Backup';
$lang['utility_backup_table_backupname'] = 'Backup';
$lang['utility_backup_table_backupsize'] = 'Backup grootte';
$lang['utility_backup_table_backupdate'] = 'Datum';
$lang['utility_db_backup_note']          = 'Notitie: Door de gelimiteerde executie tijd en geheugen beschikbaar tot PHP, zal een backup van een hele grote database mogelijk niet lukken. Als uw databse heel groot is zal u wellicht een backup direct vanuit uq SQL server moeten maken via de command line, of uw server administrator het laten doen als u niet de juiste machtiging hiervoor heeft.';

# Version 1.0.7
## Customers - portal
$lang['clients_nav_proposals'] = 'Voorstellen';
$lang['clients_nav_support']   = 'Support';
# General
$lang['more']                  = 'Meer';
$lang['add_item']              = 'Item Toevoegen';
$lang['goto_admin_area']       = 'Ga naar admin ruimte';
$lang['click_here_to_edit']    = 'Klik hier om te wijzigen';
$lang['delete']                = 'Verwijder %s';
$lang['welcome_top']           = 'Welkom %s';

# Customers
$lang['customer_permissions']         = 'Toestemmingen';
$lang['customer_permission_invoice']  = 'Facturen';
$lang['customer_permission_estimate'] = 'Schatting';
$lang['customer_permission_proposal'] = 'Voorstellen';
$lang['customer_permission_contract'] = 'Contracten';
$lang['customer_permission_support']  = 'Support';


#Tasks
$lang['task_related_to'] = 'Gerelateerd aan';

# Send file
$lang['custom_file_fail_send']    = 'Document verzenden mislukt';
$lang['custom_file_success_send'] = 'Het document is succesvol verstuurd naar %s';
$lang['send_file_subject']        = 'Email Onderwerp';
$lang['send_file_email']          = 'Email Adres';
$lang['send_file_message']        = 'Bericht';
$lang['send_file']                = 'Stuur Document';
$lang['add_checklist_item']       = 'Checklist Item';
$lang['task_checklist_items']     = 'Checklist Items';

# Import
$lang['default_pass_clients_import'] = 'Standaard wachtwoord voor alle contacten';
$lang['simulate_import']             = 'Simuleer Import';
$lang['import_upload_failed']        = 'Upload Mislukt';
$lang['import_total_imported']       = 'Totaal Geimporteerd: %s';
$lang['import_leads']                = 'Import Tips';
$lang['import_customers']            = 'Import Klanten';
$lang['choose_csv_file']             = 'Kies CSV Document';
$lang['import']                      = 'Import';
$lang['lead_import_status']          = 'Status';
$lang['lead_import_source']          = 'Bron';

# Bulk PDF Export
$lang['bulk_export_pdf_proposals'] = 'Voorstellen';

# Invoices
$lang['delete_invoice'] = 'Verwijder';

# Calendar
$lang['calendar_lead_reminder'] = 'Tip Herinnering';

$lang['items']      = 'Items';
$lang['support']    = 'Support';
$lang['new_ticket'] = 'Nieuwe Ticket';

# Reminders
$lang['client_edit_set_reminder_title'] = 'Klant herinnering toevoegen';
$lang['lead_set_reminder_title']        = 'Tip herinnering toevoegen';
$lang['set_reminder_tooltip']           = 'Deze optie maakt het mogelijk om nooit meer iets te vergeten over uw klant'.
$lang['client_reminders_tab']           = 'Herinneringen';
$lang['leads_reminders_tab']            = 'Herinneringen';

# Tickets
$lang['delete_ticket_reply']  = 'Verwijder Antwoord';
$lang['ticket_priority_edit'] = 'Wijzig Prioriteit';
$lang['ticket_priority_add']  = 'Voeg Prioriteit Toe';
$lang['ticket_status_edit']   = 'Wijzig Ticket Status';
$lang['ticket_service_edit']  = 'Wijzig Ticket Service';
$lang['edit_department']      = 'Wijzig Afdeling';

# Expenses
$lang['edit_expense_category']                                    = 'Wijzig Kosten Categorie';
# Settings
$lang['customer_default_country']                                 = 'Standaar Land';
$lang['settings_sales_require_client_logged_in_to_view_estimate'] = 'Klant moet ingelogd zijn om schatting te bekijken';
$lang['set_reminder']                                             = 'Herinnering opzetten';
$lang['set_reminder_date']                                        = 'Datum om herinnerd te worden';
$lang['reminder_description']                                     = 'Beschrijving opzetten';
$lang['reminder_notify_me_by_email']                              = 'Ook een email sturen voor deze herinnering';
$lang['reminder_added_successfuly']                               = 'Herinnering succesvol toegevoegd. U zult op tijd herinnerd worden.';
$lang['reminder_description']                                     = 'Beschrijving';
$lang['reminder_date']                                            = 'Datum';
$lang['reminder_staff']                                           = 'Herinner';
$lang['reminder_is_notified']                                     = 'Is op de hoogte?';
$lang['reminder_is_notified_boolean_no']                          = 'Nee';
$lang['reminder_is_notified_boolean_yes']                         = 'Ja';
$lang['reminder_set_to']                                          = 'Zet herinnering op';
$lang['reminder_deleted']                                         = 'Herinnering succesvol verwijderd';
$lang['reminder_failed_to_delete']                                = 'Herinnering verwijderen mislukt';
$lang['show_invoice_estimate_status_on_pdf']                      = 'Laat factuur/schatting status zien op PDF';
$lang['email_piping_default_priority']                            = 'Standaard prioriteit op gepijpde ticket';
$lang['show_lead_reminders_on_calendar']                          = 'Tip Herinneringen';
$lang['tickets_piping']                                           = 'Email Pijpen';
$lang['email_piping_only_replies']                                = 'Alleen antwoorden toestaan via email';
$lang['email_piping_only_registered']                             = 'Pijp alleen op geregistreerde gebruiker';
$lang['email_piping_enabled']                                     = 'Ingeschakeld';

# Estimates
$lang['view_estimate_as_client']         = 'Bekijk schatting als klant';
$lang['estimate_mark_as']                = 'Markeer als %s';
$lang['estimate_status_changed_success'] = 'Schatting status veranderd';
$lang['estimate_status_changed_fail']    = 'Schatting status veranderen mislukt';
$lang['estimate_email_link_text']        = 'Bekijk schatting';

# Proposals
$lang['proposal_to']                            = 'Bedrijf / Naam';
$lang['proposal_date']                          = 'Datum';
$lang['proposal_address']                       = 'Adres';
$lang['proposal_phone']                         = 'Telefoon';
$lang['proposal_email']                         = 'Email';
$lang['proposal_date_created']                  = 'Datum Gemaakt';
$lang['proposal_open_till']                     = 'Open Tot';
$lang['proposal_status_open']                   = 'Open';
$lang['proposal_status_accepted']               = 'Geaccepteerd';
$lang['proposal_status_declined']               = 'Geweigerd';
$lang['proposal_status_sent']                   = 'Verstuurd';
$lang['proposal_expired']                       = 'Verlopen';
$lang['proposal_subject']                       = 'Onderwerp';
$lang['proposal_total']                         = 'Totaal';
$lang['proposal_status']                        = 'Status';
$lang['proposals_list_all']                     = 'Alles';
$lang['proposals_leads_related']                = 'Tips Gerelateerd';
$lang['proposals_customers_related']            = 'Klanten Gerelateerd';
$lang['proposal_related']                       = 'Gerelateerd';
$lang['proposal_for_lead']                      = 'Tip';
$lang['proposal_for_customer']                  = 'Klant';
$lang['proposal']                               = 'Voorstel';
$lang['proposal_lowercase']                     = 'voorstel';
$lang['proposals']                              = 'Voorstellen';
$lang['proposals_lowercase']                    = 'voorstellen';
$lang['new_proposal']                           = 'Nieuw Voorstel';
$lang['proposal_currency']                      = 'Munteenheid';
$lang['proposal_allow_comments']                = 'Comments Toestaan';
$lang['proposal_allow_comments_help']           = 'Als u deze optie aanvinkt, zullen comments toegestaan zijn als uw klant het voorstel bekijkt.';

$lang['proposal_edit']                          = 'Wijzig';
$lang['proposal_pdf']                           = 'PDF';
$lang['proposal_send_to_email']                 = 'Stuur Naar Email';
$lang['proposal_send_to_email_title']           = 'Stuur Voorstel Naar Email';
$lang['proposal_attach_pdf']                    = 'PDF Bijvoegen';
$lang['proposal_preview_template']              = 'Sjabloon Inzien';
$lang['proposal_view']                          = 'Bekijk Voorstel';
$lang['proposal_copy']                          = 'Kopieer';
$lang['proposal_delete']                        = 'Verwijder';
$lang['proposal_to']                            = 'Naar';
$lang['proposal_add_comment']                   = 'Comment Toevoegen';
$lang['proposal_sent_to_email_success']         = 'Voorstel succesvol naar email verstuurd';
$lang['proposal_sent_to_email_fail']            = 'Versturen van voorstel naar email mislukt';
$lang['proposal_copy_fail']                     = 'Kopieren van voorstel mislukt';
$lang['proposal_copy_success']                  = 'Voorstel succesvol gekopieerd';
$lang['proposal_status_changed_success']        = 'Voorstel status succesvol veranderd';
$lang['proposal_status_changed_fail']           = 'Voorstel status veranderen mislukt';
$lang['proposal_assigned']                      = 'Toegewezen';
$lang['proposal_comments']                      = 'Comments';
$lang['proposal_convert']                       = 'Omzetten';
$lang['proposal_convert_estimate']              = 'Schatting';
$lang['proposal_convert_invoice']               = 'Factuur';
$lang['proposal_convert_to_estimate']           = 'Omzetten naar schatting';
$lang['proposal_convert_to_invoice']            = 'Omzetten naar factuur';
$lang['proposal_convert_to_lead_disabled_help'] = 'U moet de tip omzetten in een klant om %s ';
$lang['proposal_convert_not_related_help']      = 'Het voorstel moet gerelateerd zijn aan de klant om %s';
$lang['proposal_converted_to_estimate_success'] = 'Voorstel succesvol omgezet naar schatting';
$lang['proposal_converted_to_invoice_success']  = 'Voorstel succesvol omgezet naar Factuur';
$lang['proposal_converted_to_estimate_fail']    = 'Voorstel naar schatting omzetten mislukt';
$lang['proposal_converted_to_invoice_fail']     = 'Voorstel naar factuur omzetten mislukt';

# Proposals - view proposal template
$lang['proposal_total_info']   = 'Totaal %s';
$lang['proposal_accept_info']  = 'Accepteren';
$lang['proposal_decline_info'] = 'Afwijzen';
$lang['proposal_pdf_info']     = 'PDF';

# Customers Portal
$lang['customer_reset_action']            = 'Reset';
$lang['customer_reset_password_heading']  = 'Reset uw wachtwoord';
$lang['customer_forgot_password_heading'] = 'Wachtwoord Vergeten';
$lang['customer_forgot_password']         = 'Wachtwoord Vergeten?';
$lang['customer_reset_password']          = 'Wachtwoord';
$lang['customer_reset_password_repeat']   = 'Herhaal Wachtwoord';
$lang['customer_forgot_password_email']   = 'Email adres';
$lang['customer_forgot_password_submit']  = 'Verstuur';
$lang['customer_ticket_subject']          = 'Onderwerp';

# Email templates
$lang['email_template_proposals_fields_heading'] = 'Voorstellen';

# Tasks
$lang['add_task_attachments']                 = 'Document';
$lang['task_view_attachments']                = 'Documenten';
$lang['task_view_description']                = 'Beschrijving';
$lang['task_table_is_finished_indicator']     = 'Ja';
$lang['task_table_is_not_finished_indicator'] = 'Nee';
$lang['tasks_dt_finished']                    = 'Klaar';

# Customer Groups
$lang['customer_group_add_heading']  = 'Nieuwe Klanten Groep Toevoegen';
$lang['customer_group_edit_heading'] = 'Klanten Groep Wijzigen';
$lang['new_customer_group']          = 'Nieuwe Klanten Groep';
$lang['customer_group_name']         = 'Naam';
$lang['customer_groups']             = 'Groepen';
$lang['customer_group']              = 'Klanten Groep';
$lang['customer_group_lowercase']    = 'klanten groep';

$lang['customer_have_invoices_by']       = 'Bevat facturen op status %s';
$lang['customer_have_estimates_by']      = 'Bevat schattingen op status %s';
$lang['customer_have_contracts_by_type'] = 'Heeft contracten op type %s';

# Custom fields
$lang['custom_field_show_on_table']              = 'Tabel Laten Zien';
$lang['custom_field_show_on_client_portal']      = 'Laten Zien Op Klant Portaal';
$lang['custom_field_show_on_client_portal_help'] = 'Als dit veld aangevinkt is, zal het ook te zien zijn op tabellen.';
$lang['custom_field_visibility']                 = 'Zichtbaarheid';

# Utilities # Menu Builder
$lang['utilities_menu_translate_name_help'] = 'U kunt zogenaamde \'Vertaling String\' toevoegen. Dit betekend dat zodra onze medewerkers of ons systeem een andere taal spreken dan de taal op uw opgegeven product, de namen van het product omgezet zullen worden naar de taal van de betreffende medewerker. Zodra de door u opgegeven taal niet herkend word zal de keuze vallen op de taal String die u hier kunt invullen';
$lang['utilities_menu_icon']                = 'Icon';
$lang['active_menu_items']                  = 'Actieve Menu Items';
$lang['inactive_menu_items']                = 'Inactieve Menu Items';
$lang['utilities_menu_permission']          = 'Toestemming';
$lang['utilities_menu_url']                 = 'URL';
$lang['utilities_menu_name']                = 'Naam';
$lang['utilities_menu_save']                = 'Sla Menu Op';

# Knowledge Base
$lang['view_articles_list']     = 'Artikels Bekijken';
$lang['view_articles_list_all'] = 'Alle Artikels';
$lang['als_add_article']        = 'Artikel Toevoegen';
$lang['als_all_articles']       = 'Alle Artikels';
$lang['als_kb_groups']          = 'Groepen';

# Customizer Menu
$lang['menu_builder']            = 'Menu Setup';
$lang['main_menu']               = 'Hoofd Menu';
$lang['setup_menu']              = 'Setup Menu';
$lang['utilities_menu_url_help'] = '%s is automatisch toegevoegd aan de url';

# Spam Filter - Tickets
$lang['spam_filters']                 = 'Spam Filters';
$lang['spam_filter']                  = 'Spam Filter';
$lang['new_spam_filter']              = 'Nieuw Spam Filter';
$lang['spam_filter_blocked_senders']  = 'Geblokkeerde Afzenders';
$lang['spam_filter_blocked_subjects'] = 'Geblokkeerde Onderwerpen';
$lang['spam_filter_blocked_phrases']  = 'Geblokkeerde Uitspraken';
$lang['spam_filter_content']          = 'Inhoud';
$lang['spamfilter_edit_heading']      = 'Spam Filter Wijzigen';
$lang['spamfilter_add_heading']       = 'Spam Filter Toevoegen';
$lang['spamfilter_type']              = 'Type';
$lang['spamfilter_type_subject']      = 'Onderwerp';
$lang['spamfilter_type_sender']       = 'Verzender';
$lang['spamfilter_type_phrase']       = 'Uitspraak';

# Tickets
$lang['block_sender']               = 'Blokkeer Verzender';
$lang['sender_blocked']             = 'Verzender Geblokkeerd';
$lang['sender_blocked_successfuly'] = 'Verzender Succesvol Geblokkeerd';
$lang['ticket_date_created']        = 'Datum Gemaakt';

#KB
$lang['edit_kb_group']             = 'Wijzig Groep';
# Leads
$lang['edit_source']               = 'Wijzig Bron';
$lang['edit_status']               = 'Wijzig Status';
# Contacts
$lang['contract_type_edit']        = 'Wijzig Contract Type';
# Reports
$lang['report_by_customer_groups'] = 'Totale Waarde op Klanten Groepen';
#Utilities
$lang['ticket_pipe_log']           = 'Ticket Pijp Log';
$lang['ticket_pipe_name']          = 'Van Naam';
$lang['ticket_pipe_email_to']      = 'Naar';
$lang['ticket_pipe_email']         = 'Van Email';
$lang['ticket_pipe_subject']       = 'Onderwerp';
$lang['ticket_pipe_message']       = 'Bericht';
$lang['ticket_pipe_date']          = 'Datum';
$lang['ticket_pipe_status']        = 'Status';

# Home
$lang['home_latest_activity']       = 'Laatste Activiteit';
$lang['home_my_tasks']              = 'Mijn Taken';
$lang['home_latest_activity']       = 'Laatste Activiteit';
$lang['home_my_todo_items']         = 'Mijn Todo Items';
$lang['home_widget_view_all']       = 'Bekijk Alles';
$lang['home_stats_full_report']     = 'Volledig Rapport';

# Validation

$lang['form_validation_required']    = 'Het {field} veld is noodzakelijk.';
$lang['form_validation_valid_email'] = 'Het {field} veld moet een geldig email adres bevatten.';
$lang['form_validation_matches']     = 'Het {field} veld komt niet overeen met het {param} veld.';
$lang['form_validation_is_unique']   = 'Het {field} veld moet een unieke waarde bevatten.';

# Version 1.0.8
# Notifications & Leads/Estimates/Invoices Activity Log
$lang['not_event'] = 'Evenement start vandaag - %s ...';
$lang['not_event_public'] = 'Openbaar evenement start vandaag - %s ...';
$lang['not_contract_expiry_reminder'] = 'Contract verloping herinnering - %s ...';
$lang['not_recurring_expense_cron_activity_heading'] = 'Herhalende Kosten Cron Job Activiteit';
$lang['not_recurring_invoices_cron_activity_heading'] = 'Herhalende Facturen Cron Job Activiteit';
$lang['not_recurring_total_renewed'] = 'Totaal Hernieuwd: %s';
$lang['not_recurring_expenses_action_taken_from'] = 'Actie genomen van herhalende kosten';
$lang['not_invoice_created'] = 'Factuur Gemaakt:';
$lang['not_invoice_renewed'] = 'Factuur Hernieuwd:';
$lang['not_expense_renewed'] = 'Kosten Hernieuwd:';
$lang['not_invoice_sent_to_customer'] = 'Factuur Verzonden Naar Klant: %s';
$lang['not_invoice_sent_yes'] = 'Ja';
$lang['not_invoice_sent_not'] = 'Nee';
$lang['not_action_taken_from_recurring_invoice'] = 'Actie genomen van herhalende factuur:';
$lang['not_new_reminder_for'] = 'Nieuwe herinnering voor %s';
$lang['not_received_one_or_more_messages_lead'] = 'Nog een email ontvangen van tip';
$lang['not_received_lead_imported_email_integration'] = 'Tip geimporteerd van email integratie';
$lang['not_lead_imported_attachment'] = 'Document van email geimporteerd';
$lang['not_estimate_status_change'] = 'Document van email geimporteerd';
$lang['not_estimate_status_updated'] = 'Schatting Status Geupdate: Van: %s naar %s';
$lang['not_goal_message_success'] = 'Gefeliciteerd! We hebben een nieuw doel bereikt.<br />Doel type: %s
<br />Doel Prestatie: %s
<br />Totaal Prestatie: %s
<br />Start Datum: %s
<br />Eind Datum: %s';
$lang['not_assigned_lead_to_you'] = '%s Heeft tip %s aan u toegewezen';
$lang['not_lead_activity_assigned_to'] = '%s toegewezen aan %s';
$lang['not_lead_activity_attachment_deleted'] = 'Verwijder Document';
$lang['not_lead_activity_status_updated'] = '%s heeft tip status geupdate van: %s naar: %s';
$lang['not_lead_activity_contacted'] = '%s heeft contact gezocht met zijn tip op %s';
$lang['not_lead_activity_created'] = '%s heeft een tip gemaakt';
$lang['not_lead_activity_marked_lost'] = 'Gemarkeerd als verloren';
$lang['not_lead_activity_unmarked_lost'] = 'Ongemarkeerd als verloren';
$lang['not_lead_activity_marked_junk'] = 'Gemarkeerd als junk';
$lang['not_lead_activity_unmarked_junk'] = 'Ongemarkeerd als junk';
$lang['not_lead_activity_added_attachment'] = 'Document Toegevoegd';
$lang['not_lead_activity_converted_email'] = 'Tip email is veranderd. Eerste tip email was: %s en is toegevoegd als klant met %s';
$lang['not_lead_activity_converted'] = '%s heeft deze tip omgezet naar klant';
$lang['not_liked_your_post'] = '%s vond uw bericht leuk%s ...';
$lang['not_commented_your_post'] = '%s heeft gereageerd op uw bericht%s ...';
$lang['not_liked_your_comment'] = '%s vond uw comment leuk %s ...';
$lang['not_proposal_assigned_to_you'] = 'Voorstel toegewezen aan u - %s ...';
$lang['not_proposal_comment_from_client'] = 'Nieuwe comment van klant op voorstel %s ...';
$lang['not_proposal_proposal_accepted'] = 'Voorstel Geaccepteerd';
$lang['not_proposal_proposal_declined'] = 'Voorstel Afgewezen';
$lang['not_task_added_you_as_follower'] = 'heeft u toegevoegd als volger op de taak %s ...';
$lang['not_task_added_someone_as_follower'] = 'heeft %s toegevoegd als volger op de taak %s ...';
$lang['not_task_added_himself_as_follower'] = 'heeft zichzelf toegevoegd als volger op de taak %s ...';
$lang['not_task_assigned_to_you'] = 'heeft een taak aan u toegewezen %s ...';
$lang['not_task_assigned_someone'] = 'heeft %s toegewezen op taak %s ...';
$lang['not_task_will_do_user'] = 'zal de volgende taak doen %s ...';
$lang['not_task_new_attachment'] = 'Nieuw Document Toegevoegd';
$lang['not_task_marked_as_complete'] = 'taak gemarkeerd als klaar %s';
$lang['not_task_unmarked_as_complete'] = 'taak ongemarkeerd als klaar %s';
$lang['not_ticket_assigned_to_you'] = 'Ticket toegewezen aan u - %s ...';
$lang['not_ticket_reassigned_to_you'] = 'Ticket opnieuw toegewezen aan u - %s ...';
$lang['not_estimate_customer_accepted'] = 'Gefeliciteerd! Klant heeft schatting geaccepteerd met nummer %s';
$lang['not_estimate_customer_declined'] = 'Klant heeft schatting afgewezen met nummer %s';
$lang['estimate_activity_converted'] = 'heeft deze schatting omgezet naar een factuur.<br /> %s';
$lang['estimate_activity_created'] = 'Heeft de schatting gemaakt';
$lang['invoice_estimate_activity_removed_item'] = 'item verwijderd<b>%s</b>';
$lang['estimate_activity_number_changed'] = 'Schatting nummer veranderd van: %s naar %s';
$lang['invoice_activity_number_changed'] = 'Factuur nummer veranderd van %s naar %s';
$lang['invoice_estimate_activity_updated_item_short_description'] = 'Heeft korte beschrijven geupdate van %s naar %s';
$lang['invoice_estimate_activity_updated_item_long_description'] = 'heeft lange beschrijving geupdate van <b>%s</b> naar <b>%s</b>';
$lang['invoice_estimate_activity_updated_item_rate'] = 'heeft item tarief geupdate van %s naar %s';
$lang['invoice_estimate_activity_updated_qty_item'] = 'hoeveelheid op item geupdate<b>%s</b> van %s naar %s';
$lang['invoice_estimate_activity_added_item'] = 'nieuw item toegevoegd <b>%s</b>';
$lang['invoice_estimate_activity_sent_to_client'] = 'schatting verstuurd naar klant';
$lang['estimate_activity_client_accepted_and_converted'] = 'Klant heeft deze schatting geaccpteerd. Schatting word omgezet naar factuur met nummer %s';
$lang['estimate_activity_client_accepted'] = 'Klant heeft deze schatting geaccepteerd';
$lang['estimate_activity_client_declined'] = 'Klant heeft deze schatting afgewezen';
$lang['estimate_activity_marked'] = 'schatting gemarkeerd als %s';
$lang['invoice_activity_status_updated'] = 'factuur status geupdate van %s naar %s';
$lang['invoice_activity_created'] = 'heeft de factuur gemaakt';
$lang['invoice_activity_from_expense'] = 'omgezet naar factuur van kosten';
$lang['invoice_activity_recuring_created'] = '[Recurring] Factuur gemaakt door CRON';
$lang['invoice_activity_recuring_from_expense_created'] = '[Invoice From Expense] Factuur gemaakt door CRON';
$lang['invoice_activity_sent_to_client_cron'] = 'Factuur verzonden naar klant door CRON';
$lang['invoice_activity_sent_to_client'] = 'heeft factuur verzonden naar klant';
$lang['invoice_activity_marked_as_sent'] = 'heeft factuur gemarkeerd als verzonden';
$lang['invoice_activity_payment_deleted'] = 'heeft betaling voor de factuur verwijderd. Betaling #%s, totaal bedrag%s';
$lang['invoice_activity_payment_made_by_client'] = 'Klant heeft betaling voor de factuur gemaakt van totaal<b>%s</b> - %s';
$lang['invoice_activity_payment_made_by_staff'] = 'Opgeslagen betaling van totaal <b>%s</b> - %s';
$lang['invoice_activity_added_attachment'] = 'Document Toegevoegd';

# Navigation
$lang['top_search_placeholder'] = 'Zoeken...';

# Staff
$lang['staff_profile_inactive_account'] = 'Dit staff lid account is onactief.';

# Estimates
$lang['copy_estimate'] = 'Kopie Schatting';
$lang['estimate_copied_successfuly'] = 'Schatting Succesvol Gekopieerd';
$lang['estimate_copied_fail'] = 'Schatting Kopieren Mislukt';

# Tasks
$lang['tasks_view_assigned_to_user'] = 'Taken toegewezen aan mij';
$lang['tasks_view_follower_by_user'] = 'Taken die ik volg';
$lang['no_tasks_found'] = 'Geen taken gevonden';

# Leads
$lang['leads_dt_datecreated'] = 'Gemaakt';
$lang['leads_sort_by'] = 'Sorteer Op';
$lang['leads_sort_by_datecreated'] = 'Datum Gemaakt';
$lang['leads_sort_by_kanban_order'] = 'Kan Ban Order';

# Proposals
$lang['proposal_items_name'] = 'Item';
$lang['proposal_items_description'] = 'Beschrijving';
$lang['proposal_items_qty'] = 'Aantal';
$lang['proposal_items_rate'] = 'Tarief';
$lang['proposal_items_tax'] = 'Belasting';
$lang['proposal_items_amount'] = 'Bedrag';

# Authentication
$lang['check_email_for_reseting_password'] = 'Check uw email voor verdere instructies om uw wachtwoord te resetten.';
$lang['inactive_account'] = 'Inactief Account';
$lang['error_setting_new_password_key'] = 'Error tijdens nieuw wachtwoord maken.';
$lang['password_reset_message'] = 'Uw wachtwoord is gereset. U kunt inloggen!';
$lang['password_reset_message_fail'] = 'Error tijdens nieuw wachtwoord maken. Probeer opnieuw.';
$lang['password_reset_key_expired'] = 'Wachtwoord sleutel verlopen of verkeerd gebruikersnaam.';
$lang['admin_auth_reset_pass_repeat'] = 'Wachtwoord Herhaling';
$lang['auth_reset_pass_email_not_found'] = 'Email niet gevonden';
$lang['auth_reset_password_submit'] = 'Reset Wachtwoord';

# Settings
$lang['settings_amount_to_words'] = 'Bedrag naar woorden(BETA)';
$lang['settings_amount_to_words_desc'] = 'Output totaal bedrag in woorden in factuur/schatting.';
$lang['settings_amount_to_words_enabled'] = 'Inschakelen';
$lang['settings_total_to_words_lowercase'] = 'Nummer woorden in kleine letters';
$lang['settings_show_tax_per_item'] = 'Laat belasting per item zien(Facturen/Schattingen)';

# Reports
$lang['report_sales_months_three_months'] = 'Afgelopen 3 maanden';
$lang['report_invoice_number'] = 'Factuur #';
$lang['report_invoice_customer'] = 'Klant';
$lang['report_invoice_date'] = 'Datum';
$lang['report_invoice_duedate'] = 'Verval Datum';
$lang['report_invoice_amount'] = 'Bedrag';
$lang['report_invoice_amount_with_tax'] = 'Bedrag met belasting';
$lang['report_invoice_amount_open'] = 'Bedrag open';
$lang['report_invoice_status'] = 'Status';
$lang['report_invoice_total_amount_with_tax'] = 'Totaal bedrag met belasting';
$lang['report_invoice_total_amount_without_tax'] = 'Totaal bedrag zonder belasting';
$lang['report_invoice_total_taxes'] = 'Belastingen';

#Version 1.0.9

# Home stats
$lang['home_stats_by_project_status'] = 'Statistieken op project status';
$lang['home_invoice_overview'] = 'Factuur overzicht';
$lang['home_estimate_overview'] = 'Schatting overzicht';
$lang['home_proposal_overview'] = 'Voorstel overzicht';
$lang['home_lead_overview'] = 'Tip overzicht';
$lang['home_my_projects'] = 'Mijn Projecten';
$lang['home_announcements'] = 'Aankondigingen';

# Settings
$lang['settings_leads_kanban_limit'] = 'Limiteer tips Kan Ban rijen per status';
$lang['settings_group_misc'] = 'Misc';
$lang['show_projects_on_calendar'] = 'Projecten';
$lang['settings_media_max_file_size_upload'] = 'Maximale document grootte tijdens uploaden media(MB)';
$lang['settings_client_staff_add_edit_delete_task_comments_first_hour'] = 'Klanten/staff toestaan om taak comments toe te voegen of te wijzigen alleen in het eerste uur (Geldt niet voor administrators)';
# Email templates
$lang['email_template_only_domain_email'] = 'Alleen Domein Email';

# Announcements
$lang['dismiss_announcement'] = 'Aankondiging wegsturen';
$lang['dismiss_announcement'] = 'Aankondiging wegsturen';
$lang['announcement_from'] = 'Van:';
$lang['announcement_date'] = 'Datum Geschreven: %s';
$lang['announcement_not_found'] = 'Aankondiging niet gevonden';
$lang['announcements_recents'] = 'Recente Aankondigingen';

# General
$lang['zip_invoices'] = 'Zip facturen';
$lang['zip_estimates'] = 'Zip schattingen';
$lang['zip_payments'] = 'Zip betalingen';
$lang['setup_help'] = 'Help';
$lang['clients_list_company'] = 'Bedrijf';
$lang['dt_button_export'] = 'Export';

$lang['dt_entries'] = 'Inschrijvingen';
$lang['invoice_total_paid'] = 'Totaal Betaald';
$lang['invoice_amount_due'] = 'Bedrag Verschuldigd';
$lang['report_invoice_discount'] = 'Kortingen';

# Calendar
$lang['calendar_project'] = 'Project';

# Leads
$lang['leads_import_assignee'] = 'Toegewezene';
$lang['customer_from_lead'] = 'Klant Van%s';
$lang['lead_kan_ban_attachments'] = 'Documenten %s';
$lang['leads_sort_by_lastcontact'] = 'Laatste Contact';

# Tasks
$lang['task_comment_added'] = 'Comment succesvol toegevoegd';
$lang['task_duedate'] = 'Verval Datum';
$lang['task_view_comments'] = 'Comments';
$lang['task_comment_updated'] = 'Comment geupdate';
$lang['task_visible_to_client'] = 'Zichtbaar voor klant';
$lang['task_hourly_rate'] = 'Uur tarief';
$lang['hours'] = 'Uren';
$lang['seconds'] = 'Seconden';
$lang['minutes'] = 'Minuten';
$lang['task_start_timer'] = 'Start Timer';
$lang['task_stop_timer'] = 'Stop Timer';
$lang['task_billable_help'] = 'Als u verrekenbaar aanvinkt, zal de taak zichtbaar zijn wanneer u facturen als items maakt.';
$lang['task_billable'] = 'Verrekenbaar';
$lang['task_billable_yes'] = 'Verrekenbaar';
$lang['task_billable_no'] = 'Niet Verrekenbaar';
$lang['task_billed'] = 'Gefactureerd';
$lang['task_billed_yes'] = 'Gefactureerd';
$lang['task_billed_no'] = 'Niet Gefactureerd';
$lang['task_user_logged_time'] = 'Uw gelogde tijd:';
$lang['task_total_logged_time'] = 'Totaal gelogde tijd:';
$lang['task_is_billed'] = 'Deze taak is verrekend op factuur met nummer %s';
$lang['task_statistics'] = 'Statistieken';
$lang['task_milestone'] = 'Mijlpaal';

# Tickets
$lang['ticket_message_updated_successfuly'] = 'Bericht succesvol geupdate';

# Invoices
$lang['invoice_task_item_project_tasks_not_included'] = 'Project taken staan niet in deze lijst.';
$lang['show_quantity_as'] = 'Laat kwaniteit zien als:';
$lang['quantity_as_qty'] = 'Aantal';
$lang['quantity_as_hours'] = 'Uren';
$lang['invoice_table_hours_heading'] = 'Uren';
$lang['bill_tasks'] = 'Verreken Taken';
$lang['invoice_estimate_sent_to_email'] = 'Email Naar';

# Estimates
$lang['estimate_table_hours_heading'] = 'Uren';

# General
$lang['is_customer_indicator'] = 'Klant';
$lang['print']            = 'Print';
$lang['customer_permission_projects']            = 'Projecten';
$lang['no_timers_found']            = 'Geen gestarte timers gevonden';
$lang['timers_started_confirm_logout']            = 'Taak timers gevonden die gestart zijn!<br /><br />Weet u zeker dat u uit wilt loggen zonder de timers stop te zetten?';
$lang['confirm_logout']            = 'Log Uit';
$lang['timer_top_started']            = 'Gestart Om %s';

# Projects
$lang['cant_change_billing_type_billed_tasks_found'] = 'U kunt de factuurtype niet veranderen. Gefactureerde taak gevonden voor dit project.';
$lang['project_customer_permission_warning'] = 'Het systeem geeft aan dat de primaire contact geen toestemming heeft voor dit project. De klant zal dit project niet kunnen zien. Overweeg om toestemming te geven in de klant profiel tab Toestemmingen.';
$lang['project_invoice_timesheet_start_time'] = 'Start tijd: %s';
$lang['project_invoice_timesheet_end_time'] = 'Eind tijd: %s';
$lang['project_invoice_timesheet_total_logged_time'] = 'Gelogde tijd: %s';
$lang['project_view_as_client'] = 'Bekijk project als klant';
$lang['project_mark_all_tasks_as_completed'] = 'Markeer alle projecten als klaar en stop alle timers (Geen notificatie naar project leden)';
$lang['project_not_started_status_tasks_timers_found'] = 'Taak Timers gevonden voor dit project maar het project heeft de status Niet Gestart. Wij adviseren u om de status te veranderen naar In Werking';
$lang['project_status'] = 'Status';
$lang['project_status_1'] = 'Niet Gestart';
$lang['project_status_2'] = 'In Werking';
$lang['project_status_3'] = 'Pauze';
$lang['project_status_4'] = 'Klaar';

$lang['project_file_uploaded_by_customer'] = 'Klant';
$lang['project_file_dateadded'] = 'Datum geupload';
$lang['project_file_filename'] = 'Document naam';
$lang['project_file__filetype'] = 'Document type';
$lang['project_file_visible_to_customer'] = 'Zichtbaar voor klant';
$lang['project_file_uploaded_by'] = 'Geupload door';
$lang['edit_project'] = 'Wijzig Project';
$lang['copy_project'] = 'Kopieer Project';
$lang['delete_project'] = 'Verwijder Project';
$lang['project_task_assigned_to_user'] = 'Taak toegewezen aan u';
$lang['seconds'] = 'Seconden';
$lang['hours'] = 'Uren';
$lang['minutes'] = 'Minuten';
$lang['project']                 = 'Project';
$lang['project_lowercase']       = 'project';
$lang['projects']                = 'Projecten';
$lang['projects_lowercase']      = 'projecten';
$lang['project_settings']      = 'Project instellingen';
$lang['project_invoiced_successfuly']             = 'Project succesvol gefactureerd';
$lang['new_project']             = 'Nieuw Project';
$lang['project_files']            = 'Documenten';
$lang['project_activity']            = 'Activiteit';
$lang['project_name']            = 'Project Naam';
$lang['project_description']            = 'Project Beschrijving';
$lang['project_customer']            = 'Klant';
$lang['project_start_date']            = 'Start Datum';
$lang['project_datecreated']            = 'Datum Gemaakt';
$lang['project_deadline']            = 'Deadline';
$lang['project_billing_type']            = 'Factuur Type';
$lang['project_billing_type_fixed_cost']            = 'Vaststaand Tarief';
$lang['project_billing_type_project_hours']            = 'Project Uren';
$lang['project_billing_type_project_task_hours']            = 'Task Uren';
$lang['project_billing_type_project_task_hours_hourly_rate']            = 'Gebaseerd op taak uren';
$lang['project_rate_per_hour']            = 'Tarief per uur';
$lang['project_total_cost']            = 'Totaal Tarief';
$lang['project_members']            = 'Project Leden';
$lang['project_member_removed']     = 'Project leden succesvol verwijderd';
$lang['project_overview']           = 'Project overzicht';
$lang['project_gant']            = 'Gantt View';
$lang['project_milestones']            = 'Mijlpalen';
$lang['project_milestone_order']            = 'Volgorde';
$lang['project_milestone_duedate_passed']            = 'Verval datum gepasseerd';
$lang['record_timesheet']            = 'Rooster';
$lang['new_milestone']            = 'Nieuwe Mijlpaal';
$lang['edit_milestone']            = 'Wijzig Mijlpaal';
$lang['milestone_name']            = 'Naam';
$lang['milestone_due_date']            = 'Verval Datum';
$lang['project_milestone']            = 'Mijlpaal';
$lang['project_notes']            = 'Notities';
$lang['project_timesheets']            = 'Roosters';
$lang['project_timesheet']            = 'Rooster';
$lang['milestone_total_logged_time']            = 'Gelogde Tijd';
$lang['project_overview_total_logged_hours']            = 'Totaal Gelogde Uren';
$lang['milestones_uncategorized']            = 'Geen categorie';
$lang['milestone_no_tasks_found']            = 'Geen taken gevonden';
$lang['project_copied_successfuly']            = 'Project data succesvol gekopieerd';
$lang['failed_to_copy_project']            = 'Project kopieren mislukt';
$lang['copy_project_task_include_check_list_items']            = 'Kopieer checklist items';
$lang['copy_project_task_include_assignees']            = 'Kopieer dezelfde toegewezene';
$lang['copy_project_task_include_followers']            = 'Kopieer dezelfde volgers';

$lang['project_days_left']            = 'Dagen Over';
$lang['project_open_tasks']            = 'Open Taken';
$lang['timesheet_stop_timer']            = 'Stop Timer';
$lang['failed_to_add_project_timesheet_end_time_smaller']            = 'Rooster toevoegen mislukt. Eind tijd is kleiner dan start tijd.';
$lang['project_timesheet_user']            = 'Lid';
$lang['project_timesheet_start_time']            = 'Start Tijd';
$lang['project_timesheet_end_time']            = 'Eind Tijd';
$lang['project_timesheet_time_spend']            = 'Tijd Gespendeert';
$lang['project_timesheet_task']            = 'Taak';
$lang['project_invoices']                = 'Facturen';
$lang['total_logged_hours_by_staff']            = 'Totaal Gelogde Tijd';
$lang['invoice_project']            = 'Factuur Project';
$lang['invoice_project_info']            = 'Project FactuurInfo';
$lang['invoice_project_data_single_line']            = 'Enkele Regel';
$lang['invoice_project_data_task_per_item']            = 'Taak per item';
$lang['invoice_project_data_timesheets_individualy']            = 'Alle roosters apart';
$lang['invoice_project_item_name_data']            = 'Item naam';
$lang['invoice_project_description_data']            = 'Beschrijving';
$lang['invoice_project_projectname_taskname']            = 'Project naam + Taak naam';
$lang['invoice_project_all_tasks_total_logged_time']            = 'Alle taken + totaal gelogde tijd per taak';
$lang['invoice_project_project_name_data']            = 'Project naam';
$lang['invoice_project_timesheet_indivudualy_data']            = 'Rooster start tijd + eind tijd + totaal gelogde tijd';
$lang['invoice_project_total_logged_time_data']            = 'Totaal Gelogde Tijd';

$lang['project_allow_client_to'] = 'Klant toestaan om %s';
$lang['project_setting_view_task_attachments'] = 'Bekijk taak documenten';
$lang['project_setting_view_task_checklist_items'] = 'Bekijk taak checklist items';
$lang['project_setting_upload_files'] = 'upload documenten';
$lang['project_setting_view_tasks_overview'] = 'view taak overzicht';
$lang['project_setting_view_task_comments'] = 'view taak comments';
$lang['project_setting_upload_on_tasks'] = 'upload documenten op taak';
$lang['project_setting_view_task_total_logged_time'] = 'bekijk taak totaal gelogde tijd';
$lang['project_setting_open_discussions'] = 'open discussies';
$lang['project_setting_comment_on_tasks'] = 'comment op project taak';
$lang['project_setting_view_tasks'] = 'bekijk taken';
$lang['project_setting_view_milestones'] = 'bekijk mijlpalen';
$lang['project_setting_view_gantt'] = 'bekijk Gantt';
$lang['project_setting_view_timesheets'] = 'bekijk roosters';
$lang['project_setting_view_activity_log'] = 'bekijk activiteiten log';
$lang['project_setting_view_team_members'] = 'bekijk team leden';

$lang['project_discussion_visible_to_customer_yes']                 = 'Zichtbaar';
$lang['project_discussion_visible_to_customer_no']                 = 'Niet Zichtbaar';

$lang['project_discussion_posted_on']                 = 'Geschreven op %s';
$lang['project_discussion_posted_by']                 = 'Geschreven Door %s';
$lang['project_discussion_failed_to_delete']                 = 'Discussie verwijderen mislukt';
$lang['project_discussion_deleted']                 = 'Discussie succesvol verwijderd';
$lang['project_discussion_no_activity']                 = 'Geen activiteit';
$lang['project_discussion']                 = 'Discussie';
$lang['project_discussions']                 = 'Discussies';
$lang['edit_discussion'] = 'Start Discussie';
$lang['new_project_discussion'] = 'Start Discussie';
$lang['project_discussion_subject'] = 'Onderwerp';
$lang['project_discussion_description'] = 'Beschrijving';
$lang['project_discussion_show_to_customer'] = 'Zichtbaar voor klant';
$lang['project_discussion_total_comments'] = 'Totale Comments';
$lang['project_discussion_last_activity'] = 'Laatste Activiteit';
$lang['discussion_add_comment'] = 'Comment Toevoegen';
$lang['discussion_newest'] = 'Nieuwste';
$lang['discussion_oldest'] = 'Oudste';
$lang['discussion_attachments'] = 'Documenten';
$lang['discussion_send'] = 'Verstuur';
$lang['discussion_reply'] = 'Antwoord';
$lang['discussion_edit'] = 'Wijzig';
$lang['discussion_edited'] = 'Gewijzigd';
$lang['discussion_you'] = 'U';
$lang['discussion_save'] = 'Opslaan';
$lang['discussion_delete'] = 'Verwijder';
$lang['discussion_view_all_replies'] = 'Laat alle antwoorden zien';
$lang['discussion_hide_replies'] = 'Verberg antwoorden';
$lang['discussion_no_comments'] = 'Geen comments';
$lang['discussion_no_attachments'] = 'Geen Documenten';
$lang['discussion_attachments_drop'] = 'Sleep en laat los om document te uploaden';
$lang['project_note'] = 'Notitie';
$lang['project_note_private'] = 'Privè Notities';
$lang['project_save_note'] = 'Notitie Opslaan';

# Project Activity
$lang['project_activity_created'] = 'Project Gemaakt';
$lang['project_activity_updated'] = 'Project Geupdate';
$lang['project_activity_removed_team_member'] = 'Team lid verwijderd';
$lang['project_activity_added_team_member'] = 'Team lid toegevoegd';
$lang['project_activity_marked_all_tasks_as_complete'] = 'Alles als klaar gemarkeerd';
$lang['project_activity_recorded_timesheet'] = 'Rooster bijgehouden';
$lang['project_activity_task_name'] = 'Taak:';
$lang['project_activity_deleted_discussion'] = 'Discussie Verwijderd';
$lang['project_activity_created_discussion'] = 'Discussie Gestart';
$lang['project_activity_updated_discussion'] = 'Discussie Geupdate';
$lang['project_activity_commented_on_discussion'] = 'Op discussie gecomment';
$lang['project_activity_deleted_discussion_comment'] = 'Discussie comment verwijderd';
$lang['project_activity_deleted_milestone'] = 'Mijlpaal verwijderd';
$lang['project_activity_updated_milestone'] = 'Mijlpaal geupdate';
$lang['project_activity_created_milestone'] = 'Nieuwe mijlpaal gemaakt';
$lang['project_activity_invoiced_project'] = 'Project gefactureerd';
$lang['project_activity_task_marked_complete'] = 'Taak als klaar gemarkeerd';
$lang['project_activity_task_unmarked_complete'] = 'Taak ongemarkeerd als klaar';
$lang['project_activity_task_deleted'] = 'Taak verwijderd';
$lang['project_activity_new_task_comment'] = 'Gecomment op taak';
$lang['project_activity_new_task_attachment'] = 'Document geupload op taak';
$lang['project_activity_new_task_assignee'] = 'Nieuwe toegewezene toegevoegd aan taak';
$lang['project_activity_task_assignee_removed'] = 'Toegewezene verwijderd van taa';
$lang['project_activity_task_timesheet_deleted'] = 'Rooster verwijderd';
$lang['project_activity_uploaded_file'] = 'Project document geupload';
$lang['project_activity_status_updated'] = 'Project status geupload';
$lang['project_activity_visible_to_customer'] = 'Zichtbaar voor klant';
$lang['project_activity_project_file_removed'] = 'Project document verwijderd';

# Notifications - DEPRECED - THESE notifications are depreced and will be removed in further released dont translate them
$lang['not_customer_uploaded_project_file'] = 'Nieuw document geupload';
$lang['not_customer_created_new_project_discussion'] = 'Nieuw project discussie gestart';
$lang['not_customer_commented_on_project_discussion'] = 'Nieuwe comment op project discussie';

# Customers area
$lang['clients_my_estimates'] = 'Mijn Schattingen';
$lang['client_no_reply'] = 'Geen Antwoord';
$lang['clients_nav_projects'] = 'Projecten';
$lang['clients_my_projects'] = 'Mijn Projecten';
$lang['client_profile_image'] = 'Profiel Foto';


/////
$lang['sales_report_cancelled_invoices_not_included'] = 'Geannuleerde facturen worden niet meegenomen in de rapporten.';
$lang['invoices_merge_cancel_merged_invoices'] = 'Markeer samengevoegde facturen als geanuleerd in plaats van verwijderd';
$lang['invoice_marked_as_cancelled_successfuly'] = 'Factuur succesvol gemarkeerd als geanuleerd';
$lang['invoice_unmarked_as_cancelled'] = 'Factuur succesvol ongemarkeerd als geannuleerd';

$lang['tasks_reminder_notification_before'] = 'Taak deadline herinnering voor (dagen)';
$lang['not_task_deadline_reminder'] = 'Taak deadline herinnering';
$lang['dt_length_menu_all'] = 'Alles';
$lang['task_not_finished'] = 'Niet Afgerond';
$lang['task_billed_cant_start_timer'] = 'Taak verrekend. Timer kan niet gestart worden.';
$lang['invoice_task_billable_timers_found'] = 'Gestarte timers gevonden';
$lang['project_timesheet_not_updated'] = 'Rooster onbeinvloed';
$lang['project_invoice_task_no_timers_found'] = 'Geen timers gevonden voor deze taak';
$lang['invoice_project_tasks_not_started'] = 'Nog niet gestart| Start Datum: %s';
$lang['invoice_project_see_billed_tasks'] = 'Zie taken die op deze rekening gefactureerd zullen worden.';
$lang['invoice_project_all_billable_tasks_marked_as_finished'] = 'Alle verrekenbare taken worden gemarkeerd als klaar.';
$lang['invoice_project_nothing_to_bill'] = 'Geen taak om te verrekenen. U kunt toevoegen wat u maar wilt in de factuur items.';
$lang['invoice_project_start_date_tasks_not_passed'] = 'Taken met een start datum in de toekomst kunnen niet verrekend worden.';
$lang['invoice_project_stop_all_timers'] = 'Stop alle timers';
$lang['invoice_project_stop_billabe_timers_only'] = 'Stop alleen verrekenbare timers';
$lang['project_tasks_total_timers_stopped'] = 'Totaal gestopte timers: %s';
$lang['project_invoice_timers_started'] = 'Taak timers gevonden op verrekenbare taken, factuur kan niet gemaakt worden. Stop alstublieft taak timers om de factuur te maken.';
$lang['task_start_timer_only_assignee'] = 'U moet toegewezen zijn aan deze taak om de timer te starten!';
$lang['task_comments'] = 'Comments';
$lang['invoice_total_tax'] = 'Totale Belasting';
$lang['estimates_total_tax'] = 'Totale Belasting';
$lang['report_invoice_total_tax'] = 'Totale Belasting';
$lang['home_tickets'] = 'Tickets';
$lang['home_project_activity'] = 'Laatste Project Activiteiten';
$lang['home_project_activity_not_found'] = 'Geen Project Activiteiten Gevonden';
$lang['view_tracking'] = 'Views Bijhouden';
$lang['view_date'] = 'Datum';
$lang['view_ip'] = 'IP Adres';
$lang['article_total_views'] = 'Totale Views';
$lang['leads_source'] = 'Bron';
$lang['invoices_available_for_merging'] = 'Facturen beschikbaar voor samenvoegen';
$lang['invoices_merge_discount'] = 'U zal een korting van in totaal %s handmatig moeten toevoegen aan deze factuur';
$lang['invoice_merge_number_warning'] = 'Facturen samenvoegen zal gaten brengen in uw facturen. Voeg deze alstublieft niet samen als u geen gaten in uw factuur geschiedenis wilt. U heeft ook de optie om handmatig de factuur nummers te veranderen als u de gaten op wilt vullen.';
$lang['invoice_mark_as'] = 'Markeren als %s';
$lang['invoice_unmark_as'] = 'Onmarkeren als%s';
$lang['invoice_status_cancelled'] = 'Geannuleerd';
$lang['tasks_reminder_notification_before_help'] = 'Toegewezene attenderen over de deadline voor X dagen. De Notificatie/Email word alleen gestuurd naar de toegewezene. Als het verschil tussen taak start datum en taak verval adtum kleiner is dan de herinnering dagen, wordt er geen notificatie verstuurd.';

# Version 1.1.0
$lang['project_invoice_select_all_tasks'] = 'Selecteer alle taken';
$lang['lead_company'] = 'Bedrijf';

# Version 1.1.1
$lang['admin_auth_forgot_password_button'] = 'Bevestiging';
$lang['task_assigned'] = 'In opdracht gegeven aan';
$lang['switch_to_pipeline'] = 'Wissel naar pijplijn';
$lang['switch_to_list_view'] = 'Wissel naar lijst';
$lang['estimates_pipeline'] = 'Geschatte Pijplijn';
$lang['estimates_pipeline_sort'] = 'Sorteer Op';
$lang['estimates_sort_expiry_date'] = 'Verloop datum';
$lang['estimates_sort_pipeline'] = 'Pijplijn Opdracht';
$lang['estimates_sort_datecreated'] = 'Datum van Aanmaak';
$lang['estimates_sort_estimate_date'] = 'Schatting Datum';
$lang['estimate_set_reminder_title'] = 'Stel Schatting Herinnering in';
$lang['invoice_set_reminder_title'] = 'Stel Factuur Herinnering in';
$lang['estimate_reminders'] = 'Herinneringen';
$lang['invoice_reminders'] = 'Herinneringen';
$lang['estimate_notes'] = 'Notitie';
$lang['estimate_add_note'] = 'Voeg notitie toe';
$lang['dropdown_non_selected_tex'] = 'Niets geselecteerd';
$lang['auto_close_ticket_after'] = 'Automatisch sluiten van tickets na (Uren)';
$lang['event_description'] = 'Beschrijving';
$lang['delete_event'] = 'Verwijderen';
$lang['not_new_ticket_created'] = 'Er is een nieuwe ticket open in uw afdeling - %s';
$lang['receive_notification_on_new_ticket'] = 'Ontvang notificaties voor de geopende Ticket.';
$lang['receive_notification_on_new_ticket_help'] = 'Alle medewerkers die bij de ticket afdeling horen zullen een notificatie ontvangen wanneer een nieuwe ticket geopend is.';
$lang['event_updated'] = 'Evenement is met sucsess geupdate';
$lang['customer_contacts'] = 'Contacts';
$lang['new_contact'] = 'Nieuw Contact';
$lang['contact'] = 'Contact';
$lang['contact_lowercase'] = 'contact';
$lang['contact_primary'] = 'Primair contact';
$lang['contact_position'] = 'Positie';
$lang['contact_active'] = 'Actief';
$lang['client_company_info'] = 'Bedrijf details';
$lang['proposal_save'] = 'Sla Voorstel Op';
$lang['calendar'] = 'Kalender';
$lang['settings_pdf'] = 'PDF';
$lang['settings_pdf_font'] = 'PDF Lettertype';
$lang['settings_pdf_table_heading_color'] = 'Items tabel heading kleur';
$lang['settings_pdf_table_heading_text_color'] = 'Items tabel heading tekst kleur';
$lang['settings_pdf_font_size'] = 'Standaard lettertype grootte';
$lang['proposal_status_draft'] = 'Klad';
$lang['custom_field_contacts'] = 'Contacten';
$lang['company_primary_email'] = 'Primaire email';
$lang['client_register_contact_info'] = 'Primaire Contact Informatie';
$lang['client_register_company_info'] = 'Bedrijf Informatie';
$lang['contact_permissions_info'] = 'Zorg dat u de gepaste toestemmingen instelt voor dit contact.';
$lang['defaut_leads_kanban_sort'] = 'Standaard tip Kan Ban Sort';
$lang['defaut_leads_kanban_sort_type'] = 'Soort';
$lang['order_ascending'] = 'Stijgend';
$lang['order_descending'] = 'Afdalen';
$lang['calendar_expand'] = 'Vergroot';
$lang['proposal_reminders'] = 'Herinnering';
$lang['proposal_set_reminder_title'] = 'Stel voorgestelde herinnering in';
$lang['settings_allowed_upload_file_types'] = 'Toegestane bestand types';
$lang['no_primary_contact'] = 'Deze klant heeft geen primair contactpersoon. U moet als klant het primaire contact instellen. Wij raden aan iedere klant aan om een primair contact te hebben.';
$lang['leads_merge_customer'] = 'Klant velden samenvoegen';
$lang['leads_merge_contact'] = 'Contact velden samenvoegen';
$lang['leads_merge_as_contact_field'] = 'Voeg samen als contact veld';
$lang['lead_convert_to_client_phone'] = 'Telefoon';
$lang['invoice_status_report_all'] = 'Alle';
$lang['import_contact_field'] = 'Contact veld';

$lang['file_uploaded_success'] = 'Er is geen error, uw bestand is zonder problemen geupload.';
$lang['file_exceds_max_filesize'] = 'Het bestand dat u wilt uploaden overschrijd het upload_max_filesize directive in php.ini';
$lang['file_exceds_maxfile_size_in_form'] = 'Het bestand dat u wilt uploaden overschrijd het MAX_FILE_SIZE directive die gespecificeerd staat op het HTML formulier';
$lang['file_uploaded_partially'] = 'Het bestand die U wilt uploaden is maar gedeeltelijk geupload';
$lang['file_not_uploaded'] = 'Er is geen bestand geupload';
$lang['file_missing_temporary_folder'] = 'Er mist een tijdelijke map';
$lang['file_failed_to_write_to_disk'] = 'Het is niet gelukt om het bestand op de schijf te schrijven.';
$lang['file_php_extension_blocked'] = 'Een PHP extensie heeft het uploaden van het bestand gestopt.';
$lang['calendar_expand'] = 'Vergroot';
$lang['view_pdf'] = 'Bekijk PDF';
$lang['expense_repeat_every'] = 'Herhaal elke';

# Version 1.1.2
$lang['leads_switch_to_kanban'] = 'Wissel naar kan ban';
$lang['survey_no_questions'] = 'Deze enquête heeft nog geen vragen.';
$lang['survey_submit'] = 'Inleveren';
$lang['contract_content'] = 'Contract';
$lang['contract_save'] = 'Sla Contact Op';
$lang['contract_send_to_email'] = 'Verzenden naar email';
$lang['contract_send_to_client_modal_heading'] = 'Verzend het contract naar email';
$lang['contract_send_to'] = 'Verzenden naar';
$lang['contract_send_to_client_attach_pdf'] = 'Voeg PDF toe';
$lang['contract_send_to_client_preview_template'] = 'Voorbeeldweergave Email Template';
$lang['include_attachments_to_email'] = 'Voeg bijlage toe';
$lang['contract_sent_to_client_success'] = 'Het contract is maar de klant verzonden.';
$lang['contract_sent_to_client_fail'] = 'Het is niet gelukt om het contract te verzenden';

# Version 1.1.3
$lang['client_invalid_username_or_password'] = 'Uw gebruikersnaam of wachtwoord is onjuist';
$lang['client_old_password_incorect']     = 'Uw oude wachtwoord is onjuist';
$lang['client_password_changed']          = 'Uw wachtwoord is gewijzigd';
$lang['check_for_new_version']          = 'Kijk voor nieuwe versies';

# Version 1.1.4
$lang['total_leads_deleted'] = 'Totaal verwijderde tips: %s';
$lang['total_clients_deleted'] = 'Totaal verwijderde klanten: %s';
$lang['confirm_action_prompt'] = 'Weet u zeker dat u deze actie wilt uitvoeren?';
$lang['mass_delete'] = 'Massa Verwijderen';
$lang['email_protocol'] = 'Email Protocol';
$lang['add_edit_members'] = 'Voeg toe/Bewerk leden';
$lang['project_overview_billable_hours'] = 'Verrekenbare Uren:';
$lang['project_overview_billed_hours'] = 'Gefactureerde Uren:';
$lang['project_overview_unbilled_hours'] = 'Ongefactureerde Uren:';
$lang['calendar_first_day'] = 'Eerste Dag';
$lang['dt_mass_delete_help'] = 'Gebruik de vinkjes aan de linkerkant om massaal te verwijderen.';
$lang['permission_view'] = 'Bekijken';
$lang['permission_edit'] = 'Bewerken';
$lang['permission_create'] = 'Maken';
$lang['permission_delete'] = 'Verwijder';
$lang['permission'] = 'Toestemming';
$lang['permissions'] = 'Toestemmingen';
$lang['access_danied'] = 'Toegang Geweigerd';
$lang['proposals_pipeline'] = 'Voorstellen Pijplijn';
$lang['proposals_pipeline_sort'] = 'Sorteer Op';
$lang['proposals_sort_open_till'] = 'Open Tot';
$lang['proposals_sort_pipeline'] = 'Pijplijn Bestelling';
$lang['proposals_sort_datecreated'] = 'Datum van Aanmaak';
$lang['proposals_sort_proposal_date'] = 'Voorgestelde Datum';
$lang['is_not_staff_member'] = 'Onbevoegde gebruikers';
$lang['lead_created'] = 'Gecreeerd';
$lang['access_tickets_to_none_staff_members'] = 'Verschaf toegang tot de tickets aan onbevoegde gebruikers.';
$lang['project_expenses'] = 'Kosten';
$lang['expense_currency'] = 'Munteenheid';
$lang['currency_valid_code_help'] = 'Let op: Vul de juiste munteenheid code in.';
$lang['week'] = 'Week';
$lang['weeks'] = 'Weken';
$lang['month'] = 'Maand';
$lang['months'] = 'Maanden';
$lang['year'] = 'Jaar';
$lang['years'] = 'Jaren';
$lang['expense_report_category'] = 'Categorie';
$lang['expense_paid_via'] = 'Betaald Via %s';
$lang['item_as_expense'] = '[Expense]';
$lang['show_help_on_setup_menu'] = 'Laat help menu item zien in het setup menu';
$lang['customers_summary_total'] = 'Totaal Klanten';
$lang['filter_by'] = 'Gefilterd op';
$lang['re_captcha'] = 'reCAPTCHA';
$lang['recaptcha_site_key'] = 'Site sleutel';
$lang['recaptcha_secret_key'] = 'Geheime sleutel';
$lang['recaptcha_error'] = 'Het reCAPTCHA veld geeft aan dat u een robot bent.';
$lang['smtp_username'] = 'SMTP Gebruikersnaam';
$lang['smtp_username_help'] = 'Alleen invullen als uw email klanten een gebruikersnaam voor SMTP login gebruiken.';
$lang['pinned_project']= 'Vastgezet project';
$lang['pin_project']= 'Project vastzetten';
$lang['unpin_project']= 'Project losmaken';
$lang['smtp_encryption']= 'Email encryptie';
$lang['smtp_encryption_none']= 'Geen';
$lang['show_proposals_on_calendar']= 'Voorstellen';
$lang['invoice_project_see_billed_expenses']= 'Zie de kosten die verrekend zullen worden op de factuur.';
$lang['project_overview_logged_hours']= 'Totale uren';
$lang['project_overview_expenses'] = 'Totale kosten';
$lang['project_overview_expenses_billable'] = 'Verrekenbare kosten';
$lang['project_overview_expenses_billed'] = 'Gefactureerde kosten';
$lang['project_overview_expenses_unbilled'] = 'Ongefactureerde kosten';
$lang['announcement_date_list'] = 'Datum';
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
$lang['task_filter_detailed_show_tasks'] = 'Show Tasks';
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
$lang['sent_expiry_reminder_success'] = 'Expiration reminder successfully sent';
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
