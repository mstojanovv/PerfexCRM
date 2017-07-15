<?php
# Version 1.0.0
#
# General
$lang['id']                   = 'ID';
$lang['name']                 = 'Namn';
$lang['options']              = 'Alternativ';
$lang['submit']               = 'Spara';
$lang['added_successfully']    = '%s lades till.';
$lang['updated_successfully']  = '%s uppdaterades.';
$lang['edit']                 = 'Redigera %s';
$lang['add_new']              = 'Lägg till %s';
$lang['deleted']              = '%s Raderad';
$lang['problem_deleting']     = 'Problem att radera %s';
$lang['is_referenced']        = 'ID för %s används redan.';
$lang['close']                = 'Stäng';
$lang['send']                 = 'Skicka';
$lang['cancel']               = 'Avbryt';
$lang['go_back']              = 'Gå bakåt';
$lang['error_uploading_file'] = 'FEL! när filen laddades upp!';
$lang['load_more']            = 'Ladda fler';
$lang['cant_delete_default']  = 'Kan inte radera en standard %s';

# Invoice General
$lang['invoice_status_paid']                = 'Betald';
$lang['invoice_status_unpaid']              = 'Obetald';
$lang['invoice_status_overdue']             = 'Försenad';
$lang['invoice_status_not_paid_completely'] = 'Delvis betald';

$lang['invoice_pdf_heading'] = 'INVOICE';

$lang['invoice_table_item_heading']            = 'Artikel';
$lang['invoice_table_quantity_heading']        = 'Antal';
$lang['invoice_table_rate_heading']            = 'Taxa';
$lang['invoice_table_tax_heading']             = 'Moms';
$lang['invoice_table_amount_heading']          = 'Summa';
$lang['invoice_subtotal']                      = 'Total summa';
$lang['invoice_adjustment']                    = 'Justeringar';
$lang['invoice_total']                         = 'Total';
$lang['invoice_vat']                           = 'Momsregistreringsnummer';
$lang['invoice_bill_to']                       = 'Faktura till';
$lang['invoice_data_date']                     = 'Fakturadatum:';
$lang['invoice_data_duedate']                  = 'Betal datum:';
$lang['invoice_received_payments']             = 'Transactions';
$lang['invoice_no_payments_found']             = 'Ingen betalning hittad för denna faktura';
$lang['invoice_note']                          = 'Notering:';
$lang['invoice_payments_table_number_heading'] = 'Betalning #';
$lang['invoice_payments_table_mode_heading']   = 'Betalnings läge';
$lang['invoice_payments_table_date_heading']   = 'Datum';
$lang['invoice_payments_table_amount_heading'] = 'Belopp';


# Meddelande
$lang['announcement']                 = 'Meddelande';
$lang['announcement_lowercase']       = 'Meddelande';
$lang['announcements']                = 'Meddelande';
$lang['announcements_lowercase']      = 'Meddelande';
$lang['new_announcement']             = 'Nytt Meddelande';
$lang['announcement_name']            = 'Ämne';
$lang['announcement_message']         = 'Meddelande text';
$lang['announcement_show_to_staff']   = 'Visa för personalen';
$lang['announcement_show_to_clients'] = 'Visa för kunden';
$lang['announcement_show_my_name']    = 'Visa mitt namn';

# Clients
$lang['clients']                               = 'Kunder';
$lang['client']                                = 'Kund';
$lang['new_client']                            = 'Ny kund';
$lang['client_lowercase']                      = 'kund';
$lang['client_delete_tooltip']                 = 'Alla kunddata kommer att raderas. Kontrakt, biljetter, anteckningar. OBS: Om fakturor hittas på kund, kommer dessa inte att raderas. Du måste tilldela dessa fakturor till en annan kund för att hålla fakturanumret';
$lang['customer_delete_invoices_warning']      = 'Denna kund har fakturor på kontot. Du kan inte ta bort den här kunden. Ändra alla fakturor till en annan kund i en framtida betaldat. då går det att tabort.';
$lang['client_firstname']                      = 'Förnamn';
$lang['client_lastname']                       = 'Efternamn';
$lang['client_email']                          = 'Email';
$lang['client_company']                        = 'Företag';
$lang['client_vat_number']                     = 'Momsreggestreringsnummer';
$lang['client_address']                        = 'Adress';
$lang['client_city']                           = 'Stad';
$lang['client_postal_code']                    = 'Postnummer';
$lang['client_state']                          = 'Län';
$lang['client_password']                       = 'Lösenord';
$lang['client_password_change_populate_note']  = 'Obs: Om du fyller i detta fält, kommer lösenordet att ändras på denna kontakt.';
$lang['client_password_last_changed']          = 'Lösenordet ändrades senast:';
$lang['login_as_client']                       = 'Logga in som kunden';
$lang['client_invoices_tab']                   = 'Fakturor';
$lang['contracts_invoices_tab']                = 'Kontrakt';
$lang['contracts_tickets_tab']                 = 'Kontrakt/Support';
$lang['contracts_notes_tab']                   = 'Noteringar';
$lang['client_invoice_number_table_heading']   = 'IFaktura #';
$lang['client_invoice_date_table_heading']     = 'Datum';
$lang['client_invoice_due_date_table_heading'] = 'Förfallodag';
$lang['client_string_table_heading']           = 'Kund';
$lang['client_amount_table_heading']           = 'Summa';
$lang['client_status_table_heading']           = 'Status';
$lang['note_description']                      = 'Anmärkning beskrivning';

$lang['client_string_contracts_table_heading']      = 'Kund';
$lang['client_start_date_contracts_table_heading']  = 'Start Datum';
$lang['client_end_date_contracts_table_heading']    = 'Slut Datum';
$lang['client_description_contracts_table_heading'] = 'Beskrivning';
$lang['client_do_not_send_welcome_email']           = 'Skicka inte ett välkomst mail.';

$lang['clients_notes_table_description_heading'] = 'Beskrivning';
$lang['clients_notes_table_addedfrom_heading']   = 'Tillagd Från';
$lang['clients_notes_table_dateadded_heading']   = 'Tillagd Datum';

$lang['clients_list_full_name']   = 'Hela namnet';

$lang['clients_list_last_login']  = 'Senaste inloggning';


# Contracts
$lang['contracts']                = 'Kontrakt';
$lang['contract']                 = 'Kontrakt';
$lang['new_contract']             = 'Nytt kontrakt';
$lang['contract_lowercase']       = 'Kontrakt';
$lang['contract_start_date']      = 'Startdatum';
$lang['contract_end_date']        = 'Slutdatum';
$lang['contract_subject']         = 'Ämne';
$lang['contract_description']     = 'Beskrivning';
$lang['contract_subject_tooltip'] = 'Ämnet syns även för kunden';
$lang['contract_client_string']   = 'Kund';
$lang['contract_attach']          = 'Bifogat dokument';

$lang['contract_list_client']     = 'Kund';
$lang['contract_list_subject']    = 'Ämne';
$lang['contract_list_start_date'] = 'Startdatum';
$lang['contract_list_end_date']   = 'Slutdatum';

# Currencies
$lang['currencies']           = 'Valutor';
$lang['currency']             = 'Valuta';
$lang['new_currency']         = 'Ny valuta';
$lang['currency_lowercase']   = 'valuta';
$lang['base_currency_set']    = 'Detta är din valuta.';
$lang['make_base_currency']   = 'Huvudvaluta';
$lang['base_currency_string'] = 'Grundvaluta';

$lang['currency_list_name']   = 'Namn';
$lang['currency_list_symbol'] = 'Symbol,';


$lang['currency_add_edit_description'] = 'Namn på valutan';
$lang['currency_add_edit_rate']        = 'Symbol';

$lang['currency_edit_heading'] = 'Hantera valuta';
$lang['currency_add_heading']  = 'Lägg till ny valuta';


# Department
$lang['departments']          = 'Avdelningar';
$lang['department']           = 'Avdelning';
$lang['new_department']       = 'Ny avdelning';
$lang['department_lowercase'] = 'avdelning';

$lang['department_name']             = 'Avdelningsnamn';
$lang['department_email']            = 'Epost till avdelningen';
$lang['department_hide_from_client'] = 'Visa ej för kunden?';
$lang['department_list_name']        = 'Namn';

# Email Templates
$lang['email_templates']                        = 'Epostmall';
$lang['email_template']                         = 'Epostmall';
$lang['email_template_lowercase']               = 'epostmall';
$lang['email_templates_lowercase']              = 'epostmall';
$lang['email_template_ticket_fields_heading']   = 'Flik';
$lang['email_template_invoices_fields_heading'] = 'Fakturor';
$lang['email_template_clients_fields_heading']  = 'Kunder';

$lang['template_name']                                      = 'Mallnamn';
$lang['template_subject']                                   = 'Ämne';
$lang['template_fromname']                                  = 'Från namn';
$lang['template_fromemail']                                 = 'Från Epost';
$lang['send_as_plain_text']                                 = 'Skicka som vanlig tex';
$lang['email_template_disabled']                             = 'Inaktiverad';
$lang['email_template_email_message']                       = 'Epostmeddelande';
$lang['available_merge_fields']                             = 'Tillgängliga fält att koppla';
# Home
$lang['dashboard_string']                                   = 'Översikt';
$lang['home_latest_todos']                                  = 'Senaste todo\'s';
$lang['home_no_latest_todos']                               = 'Inga todos funna';
$lang['home_latest_finished_todos']                         = 'Senast klara todo\'s';
$lang['home_no_finished_todos_found']                       = 'Inga klara todos fans';
$lang['home_todo_heading']                                  = 'Todo punkt';
$lang['home_tickets_awaiting_reply_by_department']          = 'Support ärende väntar på svar från avdelning';
$lang['home_tickets_awaiting_reply_by_status']              = 'Support ärende Status, väntande svar';
$lang['home_this_week_events']                              = 'Denna veckas händelse';
$lang['home_upcoming_events_next_week']                     = 'Kommande händelser nästa vecka';
$lang['home_event_added_by']                                = 'Händelse har lagts till av';
$lang['home_public_event']                                  = 'Publika händelser';
$lang['home_weekly_payment_records']                        = 'Veckobetalningsposter';
$lang['home_weekend_ticket_opening_statistics']             = 'Vecko öppnings statestik';
# Newsfeed
$lang['whats_on_your_mind']                                 = 'Dela dokument, ideer..';
$lang['new_post']                                           = 'Inlägg';
$lang['newsfeed_upload_tooltip']                            = 'Tips:Drag och släpp för att ladda upp';
$lang['newsfeed_all_departments']                           = 'Alla avdelningar';
$lang['newsfeed_pin_post']                                  = 'Fäst inlägget';
$lang['newsfeed_unpin_post']                                = 'Släpp fri inlägget';
$lang['newsfeed_delete_post']                               = 'Radera';
$lang['newsfeed_published_post']                            = 'Publisera';
$lang['newsfeed_you_like_this']                             = 'Du gillar detta';
$lang['newsfeed_like_this']                                 = 'Gilla detta';
$lang['newsfeed_one_other']                                 = 'Något annat';
$lang['newsfeed_you']                                       = 'Du';
$lang['newsfeed_and']                                       = 'och';
$lang['newsfeed_you_and']                                   = 'Du och';
$lang['newsfeed_like_this_saying']                          = 'Gillar detta';
$lang['newsfeed_unlike_this_saying']                        = 'Ogillar detta';
$lang['newsfeed_show_more_comments']                        = 'Visa fler kommentarer';
$lang['comment_this_post_placeholder']                      = 'Kommentera detta inlägg..';
$lang['newsfeed_post_likes_modal_heading']                  = 'Kolegor som gillar detta inlägg';
$lang['newsfeed_comment_likes_modal_heading']               = 'Kolegor som gillar denna kommentar';
$lang['newsfeed_newsfeed_post_only_visible_to_departments'] = 'Detta inlägg är endast synlig för dessa avdelningar: %s';
# Invoice Items
$lang['invoice_items']                                      = 'Faktura objekt';
$lang['invoice_item']                                       = 'Faktura objekt';
$lang['new_invoice_item']                                   = 'Ny produkt / tjänst';
$lang['invoice_item_lowercase']                             = 'faktura produkt';

$lang['invoice_items_list_description'] = 'Beskrivning (artikelnummer)';
$lang['invoice_items_list_rate']        = 'Pris';
$lang['invoice_items_list_tax']         = 'Moms';

$lang['invoice_item_add_edit_description'] = 'Beskrivning (artikelnummer)';
$lang['invoice_item_add_edit_rate']        = 'Pris';
$lang['invoice_item_add_edit_tax']         = 'Moms';
$lang['invoice_item_add_edit_tax_select']  = 'Välj moms';

$lang['invoice_item_edit_heading'] = 'Redigera produkt';
$lang['invoice_item_add_heading']  = 'Lägg till Ny produkt / tjänst';

# Invoices


$lang['invoices']                       = 'Fakturor';
$lang['invoice']                        = 'Faktura';
$lang['invoice_lowercase']              = 'faktura';
$lang['create_new_invoice']             = 'Skapa ny faktura';
$lang['view_invoice']                   = 'Titta på faktura';

$lang['invoice_payment_recorded']       = 'Fakturabetalning bokförd';
$lang['invoice_payment_record_failed']  = 'Misslyckades bokföra betalning';
$lang['invoice_sent_to_client_success'] = 'Fakturan har nu skickats till Kunden. Le och vänta på cashen!';
$lang['invoice_sent_to_client_fail']    = 'Problem att skicka fakturan';
$lang['invoice_reminder_send_problem']  = 'Problem att skicka betalningspåminnelse';
$lang['invoice_overdue_reminder_sent']  = 'Betalningspåminnelse skickades!';

$lang['invoice_details']              = 'Fakturadetaljer';
$lang['invoice_view']                 = 'Visa faktura';
$lang['invoice_select_customer']      = 'Kund';
$lang['invoice_add_edit_number']      = 'Fakturanummer';
$lang['invoice_add_edit_date']        = 'Fakturadatum';
$lang['invoice_add_edit_duedate']     = 'Förfallodag';
$lang['invoice_add_edit_currency']    = 'Valuta';
$lang['invoice_add_edit_client_note'] = 'Kundnoteringar';
$lang['invoice_add_edit_admin_note']  = 'Admins notering';

$lang['invoice_add_edit_search_item']  = 'Sök objekt';
$lang['invoices_toggle_table_tooltip'] = 'Minska fältet';

$lang['edit_invoice_tooltip']                   = 'Redigera fakturan';
$lang['delete_invoice_tooltip']                 = 'Radera faktura. Obs: Alla betalningar avseende denna faktura kommer att raderas (om någon).';
$lang['invoice_sent_to_email_tooltip']          = 'Skicka till epost';
$lang['invoice_already_send_to_client_tooltip'] = 'Denna faktura är redan skickad till kundent %s';
$lang['send_overdue_notice_tooltip']            = 'Skicka påminnelse på förfallodag';
$lang['invoice_view_activity_tooltip']          = 'Aktivitets logg';
$lang['invoice_record_payment']                 = 'Bokförd betalning';

$lang['invoice_send_to_client_modal_heading']    = 'Skicka faktura till kund';
$lang['invoice_send_to_client_attach_pdf']       = 'Bilagor faktura PDF';
$lang['invoice_send_to_client_preview_template'] = 'Förhandsgranska mallen';

$lang['invoice_dt_table_heading_number']  = 'Faktura #';
$lang['invoice_dt_table_heading_date']    = 'Datum';
$lang['invoice_dt_table_heading_client']  = 'Kund';
$lang['invoice_dt_table_heading_duedate'] = 'Förfallodag';
$lang['invoice_dt_table_heading_amount']  = 'Summa';
$lang['invoice_dt_table_heading_status']  = 'Status';

$lang['record_payment_for_invoice']              = 'Record Payment for';
$lang['record_payment_amount_received']          = 'Amount Received';
$lang['record_payment_date']                     = 'Payment Date';
$lang['record_payment_leave_note']               = 'Leave a note';
$lang['invoice_payments_received']               = 'Betalningar Received';
$lang['invoice_record_payment_note_placeholder'] = 'Admin Note';
$lang['no_payments_found']                       = 'No Betalningar found for this invoice';
$lang['invoice_email_link_text']                 = 'View Invoice';

# Payments
$lang['payments']                             = 'Betalningar';
$lang['payment']                              = 'Betalning';
$lang['payment_lowercase']                    = 'betalning';
$lang['payments_table_number_heading']        = 'betalning #';
$lang['payments_table_invoicenumber_heading'] = 'Faktura #';
$lang['payments_table_mode_heading']          = 'Betalläge';
$lang['payments_table_date_heading']          = 'Datum';
$lang['payments_table_amount_heading']        = 'Summa';
$lang['payments_table_client_heading']        = 'Kund';
$lang['payment_not_exists']                   = 'Betalningen existerar inte';

$lang['payment_edit_for_invoice']     = 'Betalning av faktura';
$lang['payment_edit_amount_received'] = 'Summa mottagen';
$lang['payment_edit_date']            = 'Betaldatum';
$lang['payment_edit_lave_note']       = 'Lämna en notering';


# Knowledge Base
$lang['kb_article_add_edit_subject'] = 'Ämne';
$lang['kb_article_add_edit_group']   = 'Grupp';
$lang['kb_string']                   = 'Kunskapsdatabas';
$lang['kb_article']                  = 'Artikel';
$lang['kb_article_lowercase']        = 'artikel';
$lang['kb_article_new_article']      = 'Nyy artikel';
$lang['kb_article_disabled']         = 'Avaktiverad';
$lang['kb_article_description']      = 'Artikelbeskrivning';

$lang['kb_table']                      = 'Lista';
$lang['kb_no_articles_found']          = 'Ingen kunskapsartikel funnen';
$lang['kb_dt_article_name']            = 'Artikel namn';
$lang['kb_dt_group_name']              = 'Grupp';
$lang['new_group']                     = 'Ny grupp';
$lang['kb_group_add_edit_name']        = 'Gruppnamn';
$lang['kb_group_add_edit_description'] = 'Kort beskrivning';
$lang['kb_group_add_edit_disabled']    = 'Avaktiverad';
$lang['kb_group_add_edit_note']        = 'Obs: Alla artiklar i denna grupp kommer att döljas om avaktiverad är markerad';
$lang['group_table_name_heading']      = 'Namn';
$lang['group_table_isactive_heading']  = 'Aktiv';
$lang['kb_no_groups_found']            = 'Inga grupper funna i kunskapsdatabasen';

# Mail Lists
$lang['mail_lists']                           = 'Maillista';
$lang['mail_list']                            = 'MailLista';
$lang['new_mail_list']                        = 'Ny MailLista';
$lang['mail_list_lowercase']                  = 'maillista';
$lang['custom_field_deleted_success']         = 'Anpassat fält raderade';
$lang['custom_field_deleted_fail']            = 'Problem att radera Anpassat fält';
$lang['email_removed_from_list']              = 'Epost togs bort Från listan';
$lang['email_remove_fail']                    = 'Epost togs ej bort Från listan';
$lang['staff_mail_lists']                     = 'Personal sändlista';
$lang['clients_mail_lists']                   = 'Kunder sändlista';
$lang['mail_list_total_imported']             = 'Totalt inporterade epostadresser: %s';
$lang['mail_list_total_duplicate']            = 'Antal dubletter: %s';
$lang['mail_list_total_failed_to_insert']     = 'Emails failed to insert: %s';
$lang['mail_list_total_invalid']              = 'Invalid email address: %s';
$lang['cant_edit_mail_list']                  = 'You cant edit this list, this list is populated automatically';
$lang['mail_list_add_edit_name']              = 'Mail List Name';
$lang['mail_list_add_edit_customfield']       = 'Add custom field';
$lang['mail_lists_viewing_emails']            = 'Viewing Emails Från List';
$lang['mail_lists_view_email_email_heading']  = 'Email';
$lang['mail_lists_view_email_date_heading']   = 'Date Added';
$lang['add_new_email_to']                     = 'Add New Email to %s';
$lang['import_emails_to']                     = 'Import Emails to %s';
$lang['mail_list_new_email_edit_add_label']   = 'Email';
$lang['mail_list_import_file']                = 'Import File';
$lang['mail_list_available_custom_fields']    = 'Available Custom Fields';
$lang['submit_import_emails']                 = 'Import Emails';
$lang['btn_import_emails']                    = 'Import Emails (Excel)';
$lang['btn_add_email_to_list']                = 'Add Email to This List';
$lang['mail_lists_dt_list_name']              = 'List Name';
$lang['mail_lists_dt_datecreated']            = 'Date Created';
$lang['mail_lists_dt_creator']                = 'Creator';
$lang['email_added_to_mail_list_successfully'] = 'Email added to list';
$lang['email_is_duplicate_mail_list']         = 'Email already exists in this list';

# Media
$lang['media_files']            = 'Filer';

# Payment modes
$lang['new_payment_mode']       = 'New Payment Mode';
$lang['payment_modes']          = 'Payment Modes';
$lang['payment_mode']           = 'Payment Mode';
$lang['payment_mode_lowercase'] = 'payment mode';
$lang['payment_modes_dt_name']  = 'Payment Mode Name';

$lang['payment_mode_add_edit_name'] = 'Payment Mode Name';
$lang['payment_mode_edit_heading']  = 'Edit Payment Mode';
$lang['payment_mode_add_heading']   = 'Add New Payment Mode';

# Predefined Ticket Replies
$lang['new_predefined_reply']              = 'Nytt fördefinierat svar';
$lang['predefined_replies']                = 'Fördefinierade svar';
$lang['predefined_reply']                  = 'Fördefinierade svar';
$lang['predefined_reply_lowercase']        = 'fördefinierade svar';
$lang['predefined_replies_dt_name']        = 'Namn fördefinierade svar';
$lang['predefined_reply_add_edit_name']    = 'Namn fördefinierade svar';
$lang['predefined_reply_add_edit_content'] = 'Svarsinnehåll';

# Ticket Priorities
$lang['new_ticket_priority']           = 'Ny prioritering';
$lang['ticket_priorities']             = 'Ticket Priorities';
$lang['ticket_priority']               = 'Ticket Prioritering';
$lang['ticket_priority_lowercase']     = 'ticket Prioritering';
$lang['no_ticket_priorities_found']    = 'No Ticket Priorities Found';
$lang['ticket_priority_dt_name']       = 'Ticket Prioritering Name';
$lang['ticket_priority_add_edit_name'] = 'Prioritering Name';

# Reports
$lang['kb_reports']                         = 'Knowledge base Artiklar reports';
$lang['sales_reports']                      = 'Sales Reports';
$lang['reports_choose_kb_group']            = 'Choose Group';
$lang['reports_sales_select_report_type']   = 'Select Report Type';
$lang['report_kb_yes']                      = 'Yes';
$lang['report_kb_no']                       = 'No';
$lang['report_kb_no_votes']                 = 'No votes yet';
$lang['report_this_week_leads_conversions'] = 'This Week kundämnen Conversions';
$lang['report_leads_sources_conversions']   = 'Sources Conversion';
$lang['report_leads_monthly_conversions']   = 'Monthly';
$lang['sales_report_heading']               = 'Sales Report';
$lang['report_sales_type_income']           = 'Total Income';

$lang['report_sales_type_customer']                    = 'Customer Report';
$lang['report_sales_base_currency_select_explanation'] = 'You need to select currency because you have invoices with different currency';
$lang['report_sales_from_date']                        = 'Från Date';
$lang['report_sales_to_date']                          = 'To Date';


$lang['report_sales_months_all_time']      = 'All Time';
$lang['report_sales_months_six_months']    = 'Last 6 months';
$lang['report_sales_months_twelve_months'] = 'Last 12 months';
$lang['report_sales_months_custom']        = 'Custom';
$lang['reports_sales_generated_report']    = 'Generated Report';



$lang['reports_sales_dt_customers_client']                = 'Customer';
$lang['reports_sales_dt_customers_total_invoices']        = 'Total Invoices';
$lang['reports_sales_dt_items_customers_amount']          = 'Amount';
$lang['reports_sales_dt_items_customers_amount_with_tax'] = 'Amount with Tax';

# Roles
$lang['new_role']           = 'Ny roll';
$lang['all_roles']          = 'Alla roller';
$lang['roles']              = 'Personal roller';
$lang['role']               = 'Roller';
$lang['role_lowercase']     = 'roll';
$lang['roles_total_users']  = 'Antal användare: ';
$lang['roles_dt_name']      = 'Rollnamn';
$lang['role_add_edit_name'] = 'Rollnamn';

# Service
$lang['new_service']           = 'Ny service';
$lang['services']              = 'Service';
$lang['service']               = 'Service';
$lang['service_lowercase']     = 'service';
$lang['services_dt_name']      = 'Service Namn';
$lang['service_add_edit_name'] = 'Service Namn';

# Settings
$lang['settings']                     = 'Settings';
$lang['settings_updated']             = 'Settings Updated';
$lang['settings_save']                = 'Save Settings';
$lang['settings_group_general']       = 'General';
$lang['settings_group_localization']  = 'Localization';
$lang['settings_group_tickets']       = 'Support ärende';
$lang['settings_group_sales']         = 'Finance';
$lang['settings_group_email']         = 'Email';
$lang['settings_group_clients']       = 'Customers';
$lang['settings_group_newsfeed']      = 'Newsfeed';
$lang['settings_group_cronjob']       = 'Cron Job';

$lang['settings_yes']                                        = 'Yes';
$lang['settings_no']                                         = 'No';
$lang['settings_clients_default_theme']                      = 'Default customers theme';
$lang['settings_clients_allow_registration']                 = 'Allow customers to register';
$lang['settings_clients_allow_kb_view_without_registration'] = 'Allow knowledge base to be viewed without registration';

$lang['settings_cron_send_overdue_reminder']                 = 'Send invoice overdue reminder';
$lang['settings_cron_send_overdue_reminder_tooltip']         = 'Send overdue email to client when invoice status updated to overdue from Cron Job';
$lang['automatically_send_invoice_overdue_reminder_after']   = 'Auto send reminder after (days)';
$lang['automatically_resend_invoice_overdue_reminder_after'] = 'Auto re-send reminder after (days)';

$lang['settings_email_host']      = 'SMTP Host';
$lang['settings_email_port']      = 'SMTP Port';
$lang['settings_email']           = 'SMTP Email';
$lang['settings_email_password']  = 'SMTP Password';
$lang['settings_email_charset']   = 'Email Charset';
$lang['settings_email_signature'] = 'Email Signature';

$lang['settings_general_company_logo']                = 'Company Logo';
$lang['settings_general_company_logo_tooltip']        = 'Recomended dimensions: 150 x 34px';
$lang['settings_general_company_remove_logo_tooltip'] = 'Remove company logo';
$lang['settings_general_company_name']                = 'Company Name';
$lang['settings_general_company_main_domain']         = 'Company Main Domain';
$lang['settings_general_use_knowledgebase']           = 'Använd Kunskapsdatabasen';
$lang['settings_general_use_knowledgebase_tooltip']   = 'If you allow this options knowledge base will be shown also on clients side';
$lang['settings_general_tables_limit']                = 'Tables Pagination Limit';
$lang['settings_general_default_staff_role']          = 'Default Staff Role';
$lang['settings_general_default_staff_role_tooltip']  = 'When you add new staff member this role will be selected by default';

$lang['settings_localization_date_format']      = 'Date Format';
$lang['settings_localization_default_timezone'] = 'Default Timezone';
$lang['settings_localization_default_language'] = 'Default Language';


$lang['settings_newsfeed_max_file_upload_post']    = 'Maximum files upload on post';
$lang['settings_newsfeed_max_file_size']           = 'Maximum files size (MB)';

$lang['settings_reminders_contracts']         = 'Contract expiration reminder';
$lang['settings_reminders_contracts_tooltip'] = 'Expiration reminder notification in days';

$lang['settings_tickets_use_services']             = 'Use Services';
$lang['settings_tickets_max_attachments']          = 'Maximum ticket attachments';
$lang['settings_tickets_allow_departments_access'] = 'Allow staff to access only ticket that belongs to staff departments';
$lang['settings_tickets_allowed_file_extensions']  = 'Allowed attachments file extensions';

$lang['settings_sales_general']                                    = 'General';
$lang['settings_sales_general_note']                               = 'General settings';
$lang['settings_sales_invoice_prefix']                             = 'Invoice Number Prefix';
$lang['settings_sales_decimal_separator']                          = 'Decimal Separator';
$lang['settings_sales_thousand_separator']                         = 'Thousand Separator';
$lang['settings_sales_currency_placement']                         = 'Currency Placement';
$lang['settings_sales_currency_placement_before']                  = 'Before Amount';
$lang['settings_sales_currency_placement_after']                   = 'After Amount';
$lang['settings_sales_require_client_logged_in_to_view_invoice']   = 'Require client to be logged in to view invoice';
$lang['settings_sales_next_invoice_number']                        = 'Next Invoice Number';
$lang['settings_sales_next_invoice_number_tooltip']                = 'Set this field to 1 if you want to start Från begining';
$lang['settings_sales_decrement_invoice_number_on_delete']         = 'Decrement invoice number on delete';
$lang['settings_sales_decrement_invoice_number_on_delete_tooltip'] = 'Do you want to decrement the invoice number when the last invoice is deleted? eq. If is set this option to YES and before invoice delete the next invoice number is 15 the next invoice number will decrement to 14. If is set to NO the number will remain to 15.  If you have setup delete only on last invoice to NO you should set this option to NO too to keep the next invoice number not decremented.';
$lang['settings_sales_invoice_number_format']                      = 'Invoice Number Format';
$lang['settings_sales_invoice_number_format_year_based']           = 'Year Based';
$lang['settings_sales_invoice_number_format_number_based']         = 'Number Based (000001)';


$lang['settings_sales_company_info_note']    = 'Denna information kommer att visas på fakturor / offert / betalningar och andra PDF-dokument som kräver företagets information';
$lang['settings_sales_company_name']         = 'Företagsnamn';
$lang['settings_sales_address']              = 'Adress';
$lang['settings_sales_city']                 = 'Stad';
$lang['settings_sales_country_code']         = 'Landskod';
$lang['settings_sales_postal_code']          = 'Postnummer';
$lang['settings_sales_phonenumber']          = 'Telefon';

# kundämnen
$lang['new_lead']       = 'Nytt kundämne';
$lang['leads']          = 'kundämnen';
$lang['lead']           = 'Kundämne';
$lang['lead_lowercase'] = 'kundämne';
$lang['leads_all']      = 'Alla';

$lang['leads_canban_notes']  = 'Notering: %s';
$lang['leads_canban_source'] = 'Källa: %s';

$lang['lead_new_source']            = 'Ny källa';
$lang['lead_sources']               = 'Källa för kundämne';
$lang['lead_source']                = 'Källa för kundämne';
$lang['lead_source_lowercase']      = 'källa för kundämne';
$lang['leads_sources_not_found']    = 'Ingen källa för kundämne funnen';
$lang['leads_sources_table_name']   = 'Källans namn';
$lang['leads_source_add_edit_name'] = 'Källans namn';

$lang['lead_new_status']         = 'Ny status kundämnen';
$lang['lead_statuss']            = 'Status kundämnen';
$lang['lead_status']             = 'Status kundämnen';
$lang['lead_status_lowercase']   = 'status kundämnen';
$lang['leads_status_table_name'] = 'Status Namn';

$lang['leads_status_add_edit_name']  = 'Status Namn';
$lang['leads_status_add_edit_order'] = 'Ordning';

$lang['lead_statuses_not_found']      = 'Ingen status för kundämnen funnen';
$lang['leads_search']                 = 'Sök kundämnen';

$lang['leads_table_total'] = 'Totala kundämnen: %s';

$lang['leads_dt_name']         = 'Namn';
$lang['leads_dt_email']        = 'Email';
$lang['leads_dt_phonenumber']  = 'Telefon';
$lang['leads_dt_assigned']     = 'Tilldelad';
$lang['leads_dt_status']       = 'Status';
$lang['leads_dt_last_contact'] = 'Senaste kontakten';

$lang['lead_add_edit_name']                 = 'Namn';
$lang['lead_add_edit_email']                = 'Epost Adress';
$lang['lead_add_edit_phonenumber']          = 'Telefon';
$lang['lead_add_edit_source']               = 'Källa';
$lang['lead_add_edit_status']               = 'Status kundämne';
$lang['lead_add_edit_assigned']             = 'Tilldelad';
$lang['lead_add_edit_datecontacted']        = 'Kontaktade datum';
$lang['lead_add_edit_contacted_today']      = 'Kontaktade idag';
$lang['lead_add_edit_activity']             = 'Aktivitets logg';
$lang['lead_add_edit_notes']                = 'Notering';
$lang['lead_add_edit_add_note']             = 'Lägg till notering';
$lang['lead_not_contacted']                 = 'Jag har inte kontaktat detta kundämne';
$lang['lead_add_edit_contacted_this_lead']  = 'Jag har vart i kontakt med detta kundämne';
$lang['lead_confirmation_canban_contacted'] = 'Har du varit i kontakt med detta kundämne?';

# Misc
$lang['access_denied']              = 'Sorry! Ingen tilllåtelse här';
$lang['prev']                       = 'Tidigare';
$lang['next']                       = 'nästa';

# Datatables
$lang['dt_paginate_first']          = 'Första';
$lang['dt_paginate_last']           = 'Sista';
$lang['dt_paginate_next']           = 'Nästa';
$lang['dt_paginate_previous']       = 'Tidigare';
$lang['dt_empty_table']             = 'Inga {0} funna';
$lang['dt_search']                  = 'Sök:';
$lang['dt_zero_records']            = 'Inga matchande journaler';
$lang['dt_loading_records']         = 'Laddililaddar lite...';
$lang['dt_length_menu']             = 'Visa _MENU_ poster';
$lang['dt_info_filtered']           = '(filtrera Från _MAX_ total {0})';
$lang['dt_info_empty']              = 'Visar 0 till 0 av 0 {0}';
$lang['dt_info']                    = 'Visar _START_ till _END_ av _TOTAL_ {0}';
$lang['dt_empty_table']             = 'Inga {0} funna';
$lang['dt_sort_ascending']          = 'aktivera för att sortera kolumn stigande';
$lang['dt_sort_descending']         = 'aktivera för att sortera kolumn fallande';
# Invoice Activity Log
$lang['user_sent_overdue_reminder'] = '%s skickat påminnelse på förfallna faktura  ';

# Weekdays
$lang['wd_monday']    = 'Måndag';
$lang['wd_tuesday']   = 'Tisdag';
$lang['wd_thursday']  = 'Onsdag';
$lang['wd_wednesday'] = 'Torsdag';
$lang['wd_friday']    = 'Fredag';
$lang['wd_saturday']  = 'Lördag';
$lang['wd_sunday']    = 'Söndag';

# Admin Left Sidebar
$lang['als_dashboard'] = 'Infopanel';
$lang['als_clients']   = 'Kunder';
$lang['als_leads']     = 'kundämnen';

$lang['als_contracts'] = 'Kontrakt';

$lang['als_all_tickets'] = 'Alla Ärenden';
$lang['als_sales']       = 'Försäljning';

$lang['als_staff'] = 'Personal';
$lang['als_tasks'] = 'Uppgifter';
$lang['als_kb']    = 'Kunskaps DB';

$lang['als_surveys']               = 'Enkät';
$lang['als_media']                 = 'Media';
$lang['als_reports']               = 'Rapporter';
$lang['als_reports_sales_submenu'] = 'Försäljning';
$lang['als_reports_leads_submenu'] = 'kundämnen';
$lang['als_kb_articles_submenu']   = 'DB Artiklar';
$lang['als_utilities']             = 'Verktyg';
$lang['als_announcements_submenu'] = 'Meddelande';
$lang['als_mail_lists_submenu']    = 'Epostlistor';
$lang['als_calendar_submenu']      = 'Kalendar';
$lang['als_activity_log_submenu']  = 'Aktivitets logg';

# Admin Customizer Sidebar
$lang['acs_tickets']                           = 'Ärende';
$lang['acs_ticket_priority_submenu']           = 'Prioriterade ärende';
$lang['acs_ticket_statuses_submenu']           = 'ÄrendeStatus';
$lang['acs_ticket_predefined_replies_submenu'] = 'Fördefinierade svar';
$lang['acs_ticket_services_submenu']           = 'Service';
$lang['acs_departments']                       = 'Avdelning';
$lang['acs_leads']                             = 'kundämnen';
$lang['acs_leads_sources_submenu']             = 'Källa';
$lang['acs_leads_statuses_submenu']            = 'Statusar';
$lang['acs_sales_taxes_submenu']               = 'Skattesatser';
$lang['acs_sales_currencies_submenu']          = 'Valuta';
$lang['acs_sales_payment_modes_submenu']       = 'Betalsätt';
$lang['acs_email_templates']                   = 'Epostmall';
$lang['acs_roles']                             = 'Roller';
$lang['acs_settings']                          = 'Inställningar';

# Tickets
$lang['new_ticket']                                         = 'Öppna nytt ärende';
$lang['tickets']                                            = 'Ärende';
$lang['ticket']                                             = 'Ärende';
$lang['ticket_lowercase']                                   = 'ärende';
$lang['support_tickets']                                    = 'SupportÄrende';
$lang['support_ticket']                                     = 'SupportÄrende';
$lang['ticket_settings_to']                                 = 'Till';
$lang['ticket_settings_email']                              = 'Epostadress';
$lang['ticket_settings_departments']                        = 'Avdelning';
$lang['ticket_settings_service']                            = 'Service';
$lang['ticket_settings_priority']                           = 'Prioritering';
$lang['ticket_settings_subject']                            = 'Ämne';
$lang['ticket_settings_assign_to']                          = 'Tilldela ärende (standard är denna användare)';
$lang['ticket_settings_assign_to_you']                      = 'Du';
$lang['ticket_settings_select_client']                      = 'Välj kund';
$lang['ticket_add_body']                                    = 'ÄrendeText';
$lang['ticket_add_attachments']                             = 'Bilagor';
$lang['ticket_no_reply_yet']                                = 'Inget svar ännu';
$lang['new_ticket_added_successfully']                        = 'Ärende #%s tillagt';
$lang['replied_to_ticket_successfully']                       = 'Svar på ärende #%s genomfört';
$lang['ticket_settings_updated_successfully']                = 'ÄrendeInställningar har uppdaterats';
$lang['ticket_settings_updated_successfully_and_reassigned'] = 'ÄrendeInställningar har uppdaterats - Klar rapport till avdelning %ar';
$lang['ticket_dt_subject']                                  = 'Ämne';
$lang['ticket_dt_department']                               = 'Avdelning';
$lang['ticket_dt_service']                                  = 'Service';
$lang['ticket_dt_submitter']                                = 'Kund';
$lang['ticket_dt_status']                                   = 'Status';
$lang['ticket_dt_priority']                                 = 'Prioritering';
$lang['ticket_dt_last_reply']                               = 'Senaste svar';

$lang['ticket_single_add_reply']                  = 'Lägg till svar';
$lang['ticket_single_add_note']                   = 'Lägg till notering';
$lang['ticket_single_other_user_tickets']         = 'Andra ärenden';
$lang['ticket_single_settings']                   = 'Inställningar';
$lang['ticket_single_priority']                   = 'Prioritering: %s';
$lang['ticket_single_last_reply']                 = 'Senaste svar: %s';
$lang['ticket_single_change_status_top']          = 'Ändra Status';
$lang['ticket_single_ticket_note_by']             = 'Ärende notering av %s';
$lang['ticket_single_note_added']                 = 'Notering lagd till: %s';
$lang['ticket_single_change_status']              = 'Ändra status';
$lang['ticket_single_assign_to_me_on_update']     = 'Tilldela detta ärende automatiskt till mig.';
$lang['ticket_single_insert_predefined_reply']    = 'Lägg in fördefinierat svar';
$lang['ticket_single_insert_knowledge_base_link'] = 'Lägg till en länk från kunskaps DB ';
$lang['ticket_single_attachments']                = 'Bilagor fil';
$lang['ticket_single_add_response']               = 'Lägg till svar';
$lang['ticket_single_note_heading']               = 'Notering';
$lang['ticket_single_add_note']                   = 'Lägg till notering';
$lang['ticket_settings_none_assigned']            = 'Ingen';
$lang['ticket_status_changed_successfully']        = 'Ärende status ändrad';
$lang['ticket_status_changed_fail']               = 'Problem ändra ärende status';

$lang['ticket_staff_string']                    = 'Personal';
$lang['ticket_client_string']                   = 'Kund';
$lang['ticket_posted']                          = 'Postad: %e';
$lang['ticket_insert_predefined_reply_heading'] = 'Lägg till fördefinierat svar';
$lang['ticket_kb_link_heading']                 = 'Lägg till en länk från kunskaps DB';
$lang['ticket_access_by_department_denied']     = 'Du har tillgång till detta ärende. Ärendet tillhör en avdelning som du inte tilldelats.';

# Staff
$lang['new_staff']                       = 'Ny Anställd';
$lang['staff_members']                   = 'Anställd';
$lang['staff_member']                    = 'Anställd';
$lang['staff_member_lowercase']          = 'anställd';
$lang['staff_profile_updated']           = 'Din profil har uppdateras';
$lang['staff_old_password_incorrect']     = 'Du har skrivigt fel gammalt lösenord';
$lang['staff_password_changed']          = 'Ditt lösenord har ändrats';
$lang['staff_problem_changing_password'] = 'Problem att ändra ditt lösenord';
$lang['staff_profile_string']            = 'Profil';

$lang['staff_cant_remove_main_admin']          = 'Kan inte ta bort huvud admin kontot jö... Toker!';
$lang['staff_cant_remove_yourself_from_admin'] = 'Du kan inte ta bort dig själv med Adminastratörs roll...De blir galet då.. Jöö!';

$lang['staff_dt_name']       = 'Hela namnet';
$lang['staff_dt_email']      = 'Eppost';
$lang['staff_dt_last_Login'] = 'Senast inloggad';
$lang['staff_dt_active']     = 'Aktiv';

$lang['staff_add_edit_firstname']             = 'Förnamn';
$lang['staff_add_edit_lastname']              = 'Efternamn';
$lang['staff_add_edit_email']                 = 'Epost';
$lang['staff_add_edit_phonenumber']           = 'Telefon';
$lang['staff_add_edit_facebook']              = 'Facebook';
$lang['staff_add_edit_linkedin']              = 'LinkedIn';
$lang['staff_add_edit_skype']                 = 'Skype';
$lang['staff_add_edit_departments']           = 'Medlem avdelning';
$lang['staff_add_edit_role']                  = 'Roll';
$lang['staff_add_edit_permissions']           = 'Behörighet';
$lang['staff_add_edit_administrator']         = 'Administrator';
$lang['staff_add_edit_password']              = 'Lösenord';
$lang['staff_add_edit_password_note']         = 'Notering: om du fylla detta fält, kommer lösenordet att ändras för denna medlem.';
$lang['staff_add_edit_password_last_changed'] = 'Lösenord senast ändrad';
$lang['staff_add_edit_notes']                 = 'Notering';
$lang['staff_add_edit_note_description']      = 'Beskrivning av notering';

$lang['staff_notes_table_description_heading'] = 'Notering';
$lang['staff_notes_table_addedfrom_heading']   = 'Added Från';
$lang['staff_notes_table_dateadded_heading']   = 'Date Added';

$lang['staff_admin_profile']         = 'This is admin profile';
$lang['staff_profile_notifications'] = 'Notifications';
$lang['staff_profile_departments']   = 'Departments';

$lang['staff_edit_profile_image']                     = 'Profil bild';
$lang['staff_edit_profile_your_departments']          = 'Avdelning';
$lang['staff_edit_profile_change_your_password']      = 'Byt ditt lösenord';
$lang['staff_edit_profile_change_old_password']       = 'Ditt gamla lösenord';
$lang['staff_edit_profile_change_new_password']       = 'Nytt lösenord';
$lang['staff_edit_profile_change_repeat_new_password'] = 'Repetera nya lösenordet';

# Surveys
$lang['new_survey']                    = 'Ny Undersökning';
$lang['surveys']                       = 'Undersökningar';
$lang['survey']                        = 'Undersökning';
$lang['survey_lowercase']              = 'undersökning';
$lang['survey_no_mail_lists_selected'] = 'Inga mailinglistor valda';
$lang['survey_send_success_note']      = 'All Enkät e-post(%s) kommer skickas via CRON';
$lang['survey_result']                 = 'Enkät resultat: %s';
$lang['question_string']               = 'Fråga';
$lang['question_field_string']         = 'Fält';

$lang['survey_list_view_tooltip']         = 'Visa undersökning';
$lang['survey_list_view_results_tooltip'] = 'Visa resultat';

$lang['survey_add_edit_subject']                   = 'Undersökningens Ämne';
$lang['survey_add_edit_email_description']         = 'Enkät beskrivning (Epost Beskrivning)';
$lang['survey_include_survey_link']                = 'Inkludera enkätlänk i beskrivningen';
$lang['survey_available_mail_lists_custom_fields'] = 'Finns anpassade fält från e-postlistor';
$lang['survey_mail_lists_custom_fields_tooltip']   = 'Anpassade fält kan användas för e-post redaktör.';
$lang['survey_add_edit_short_description_view']    = 'Enkät kort beskrivning (Se beskrivning)';
$lang['survey_add_edit_from']                      = 'Från (visas i e-post)';
$lang['survey_add_edit_redirect_url']              = 'Enkät omdirigeringsadress';
$lang['survey_add_edit_red_url_note']              = 'När användaren avsluta undersökningen var skakunden hamna, omdirigeras till (lämna tomt för denna webbadress)';
$lang['survey_add_edit_disabled']                  = 'Avaktiverad';
$lang['survey_add_edit_only_for_logged_in']        = 'Endast för inloggade deltagare (personal, kunderna)';
$lang['send_survey_string']                        = 'Skicka undersökning';
$lang['survey_send_mail_list_clients']             = 'Kunder';
$lang['survey_send_mail_list_staff']               = 'Personal';
$lang['survey_send_mail_lists_string']             = 'Mail listor';
$lang['survey_send_mail_lists_note_logged_in']     = 'Obs: Om du skickar enkäten till mailinglistor för endast inloggade deltagare, måste den vara omarkerad. ehee ja ja bättre menings uppbyggnad kan ni komma på på denna beskrivning';
$lang['survey_send_string']                        = 'Skicka';

$lang['survey_send_to_total']  = 'Skicka till totalt %s epostadresser';
$lang['survey_send_till_now']  = 'Tills nu';
$lang['survey_send_finished']  = 'Undersökningen har skickat färdigt: %s';
$lang['survey_added_to_queue'] = 'Denna undersökning läggs till i CRON kö på %s';

$lang['survey_questions_string']          = 'Fråga';
$lang['survey_insert_field']              = 'Infoga fält';
$lang['survey_field_checkbox']            = 'Checkbox';
$lang['survey_field_radio']               = 'Radio';
$lang['survey_field_input']               = 'Inmatningsfält';
$lang['survey_field_textarea']            = 'Textfält';
$lang['survey_question_required']         = 'Obligatoriskt';
$lang['survey_question_only_for_preview'] = 'Endast för förhandsvisning';
$lang['survey_create_first']              = 'Du måste skapa undersökningen först då kommer du att kunna sätta in frågorna.';


$lang['survey_dt_name']               = 'Namn';
$lang['survey_dt_total_questions']    = 'Totalt Frågor';
$lang['survey_dt_total_participants'] = 'Totalt Deltagare';
$lang['survey_dt_date_created']       = 'Skapat datum';
$lang['survey_dt_active']             = 'Aktiv';

$lang['survey_text_questions_results'] = 'Resultat Textfrågor';
$lang['survey_view_all_answers']       = 'Visa alla svar';

# Staff Tasks
$lang['new_task']       = 'Ny uppgift';
$lang['tasks']          = 'Uppgifter';
$lang['task']           = 'Uppgift';
$lang['task_lowercase'] = 'uppgift';
$lang['comment_string'] = 'Kommentar';

$lang['task_marked_as_complete'] = 'Uppgift markerad som klar';
$lang['task_follower_removed']   = 'Uppgifts följare har tagits bort';
$lang['task_assignee_removed']   = 'Uppgiften Tilldelad till har tagits bort';

$lang['task_no_assignees'] = 'Inga innehavare för Uppgiften';
$lang['task_no_followers'] = 'Inga följare för Uppgifter';

$lang['task_list_all']            = 'Alla';
$lang['task_list_not_assigned']   = 'Ej tilldelade';
$lang['task_list_duedate_passed'] = 'Sista datum passerat';
$lang['tasks_dt_name']            = 'Namn';

$lang['task_single_priority']               = 'Prioritering';
$lang['task_single_start_date']             = 'Startdatum';
$lang['task_single_due_date']               = 'Slutdatum';
$lang['task_single_finished']               = 'Finished';
$lang['task_single_mark_as_complete']       = 'Markera som klar';
$lang['task_single_edit']                   = 'Redigera';
$lang['task_single_delete']                 = 'Radera';
$lang['task_single_assignees']              = 'Tilldelade';
$lang['task_single_assignees_select_title'] = 'Tilldela uppgiften till';
$lang['task_single_followers']              = 'Följare';
$lang['task_single_followers_select_title'] = 'Lägg till följare';
$lang['task_single_insert_media_link']      = 'Lägg till media länk';
$lang['task_single_add_new_comment']        = 'Lägg till kommentar';

$lang['task_add_edit_subject']     = 'Ämne';
$lang['task_add_edit_priority']    = 'Prioritering';
$lang['task_priority_low']         = 'Låg';
$lang['task_priority_medium']      = 'Medium';
$lang['task_priority_high']        = 'Högh';
$lang['task_priority_urgent']      = 'Brottom';
$lang['task_add_edit_start_date']  = 'Startdatum';
$lang['task_add_edit_due_date']    = 'Slutdatum';
$lang['task_add_edit_description'] = 'Uppgifts beskrivning';

# Taxes
$lang['new_tax']       = 'Ny skattesats';
$lang['taxes']         = 'Skatter';
$lang['tax']           = 'Skatt';
$lang['tax_lowercase'] = 'skatt';
$lang['tax_dt_name']   = 'Skattenamn (moms)';
$lang['tax_dt_rate']   = 'Skattesats (procent)';

$lang['tax_add_edit_name'] = 'skatte Namn';
$lang['tax_add_edit_rate'] = 'Skattesats (procent)';
$lang['tax_edit_title']    = 'Redigera skatt';
$lang['tax_add_title']     = 'Lägg till ny skatt';

# Ticket Statuses
$lang['new_ticket_status']       = 'Nytt Ärende Status';
$lang['ticket_statuses']         = 'Ärende Statuses';
$lang['ticket_status']           = 'Ärende Status';
$lang['ticket_status_lowercase'] = 'ärende status';

$lang['ticket_statuses_dt_name']      = 'Ärende Status Name';
$lang['no_ticket_statuses_found']     = 'No Ärende statuses found';
$lang['ticket_statuses_table_total']  = 'Total %s';
$lang['ticket_status_add_edit_name']  = 'Ärende Statusnamn';
$lang['ticket_status_add_edit_color'] = 'Välj färg';
$lang['ticket_status_add_edit_order'] = 'Status Order';

# Todos
$lang['new_todo']                  = 'Nytt Todo';
$lang['my_todos']                  = 'Mina Todo saker';
$lang['todo']                      = 'Todo';
$lang['todo_lowercase']            = 'todo';
$lang['todo_status_changed']       = 'Todo Status ändrad';
$lang['todo_add_title']            = 'Lägg till ny Todo';
$lang['add_new_todo_description']  = 'Beskrivning';
$lang['no_finished_todos_found']   = 'Inga klara todos hittades';
$lang['no_unfinished_todos_found'] = 'Ingen todos hittades';
$lang['unfinished_todos_title']    = 'Oklara todo\'s';
$lang['finished_todos_title']      = 'Senaste klara todo\'s';

# Authentication
$lang['password_changed_email_subject']             = 'Ditt lösenord har ändrats';
$lang['password_reset_email_subject']               = 'Återställ ditt lösenord på %s';
# Utilities
$lang['utility_activity_log']                       = 'Aktivitets logg';
$lang['utility_activity_log_filter_by_date']        = 'Filter by date';
$lang['utility_activity_log_dt_description']        = 'Beskrivning';
$lang['utility_activity_log_dt_date']               = 'Datum';
$lang['utility_activity_log_dt_staff']              = 'Personal';
$lang['utility_calendar_new_event_title']           = 'Lägg till ny händelse';
$lang['utility_calendar_new_event_start_date']      = 'Startdatum';
$lang['utility_calendar_new_event_end_date']        = 'Slutdatum';
$lang['utility_calendar_new_event_make_public']     = 'Gör publikt';
$lang['utility_calendar_event_added_successfully']   = 'Ny händelse lades till';
$lang['utility_calendar_event_deleted_successfully'] = 'Händelse raderad';
$lang['utility_calendar_new_event_placeholder']     = 'Titel på händelsen';


# Navigation
$lang['nav_notifications']          = 'Notifieringar';
$lang['nav_my_profile']             = 'Min profil';
$lang['nav_edit_profile']           = 'Hantera profil';
$lang['nav_logout']                 = 'Logga ur';
$lang['nav_no_notifications']       = 'Inga notifieringar funna';
$lang['nav_view_all_notifications'] = 'Visa alla notifieringar';
$lang['nav_customizer_tooltip']     = 'Skräddarsy dina in';
$lang['nav_notifications_tooltip']  = 'Visa notifieringar';

## Clients
$lang['clients_required_field'] = 'Obligatoriskt fält';

# Footer
$lang['clients_copyright'] = 'Copyright %s';

# Meddelande
$lang['clients_announcement_from']  = 'Från: ';
$lang['clients_announcement_added'] = 'Till lagt: ';

# Contracts
$lang['clients_contracts']               = 'Kontrakt';
$lang['clients_contracts_dt_subject']    = 'Ämne';
$lang['clients_contracts_dt_start_date'] = 'Startdatum';
$lang['clients_contracts_dt_end_date']   = 'Slutdatum';

# Home
$lang['clients_quick_invoice_info']                = 'Quick Invoices Info';
$lang['clients_home_currency_select_tooltip']      = 'You need to select currency because you have invoices with different currency';

# Invoices
$lang['clients_invoice_html_btn_download'] = 'Ladda ner';

$lang['clients_my_invoices']        = 'Mina fakturor';
$lang['clients_invoice_dt_number']  = 'Faktura #';
$lang['clients_invoice_dt_date']    = 'Datum';
$lang['clients_invoice_dt_duedate'] = 'Slutdatum';
$lang['clients_invoice_dt_amount']  = 'Summa';
$lang['clients_invoice_dt_status']  = 'Status';

# Profile
$lang['clients_profile_heading'] = 'Profile';

# Used for edit profile and register START
$lang['clients_firstname'] = 'Förnamn';
$lang['clients_lastname']  = 'Efternamn';
$lang['clients_email']     = 'EpostAdress';
$lang['clients_company']   = 'Företag';
$lang['clients_vat']       = 'Momsreg nummer';
$lang['clients_phone']     = 'Telefon';
$lang['clients_country']   = 'Land';
$lang['clients_city']      = 'Stad';
$lang['clients_address']   = 'Adress';
$lang['clients_zip']       = 'Postnummer';
$lang['clients_state']     = 'Län';
# Used for edit profile and register END

$lang['clients_register_password']        = 'Lösenord';
$lang['clients_register_password_repeat'] = 'Repetera lösenord';
$lang['clients_edit_profile_update_btn']  = 'Uppdatera';

$lang['clients_edit_profile_change_password_heading'] = 'Ändra lösenord';
$lang['clients_edit_profile_old_password']            = 'Tidigare lösenord';
$lang['clients_edit_profile_new_password']            = 'Nytt lösenord';
$lang['clients_edit_profile_new_password_repeat']     = 'Repetera nya lösenordet';
$lang['clients_edit_profile_change_password_btn']     = 'Ändra lösenordet';
$lang['clients_profile_last_changed_password']        = 'Lösenordet ändrades senast %s';

# Knowledge base
$lang['clients_knowledge_base']                    = 'Kunskapsdatabas';
$lang['clients_knowledge_base_articles_not_found'] = 'Ingen artikel hittades i Kunskapsdatabasen';
$lang['clients_knowledge_base_find_useful']        = 'Var artikeln användbar för dig?';
$lang['clients_knowledge_base_find_useful_yes']    = 'Ja';
$lang['clients_knowledge_base_find_useful_no']     = 'Nej';
$lang['clients_article_only_1_vote_today']         = 'Du kan rösta var 24 timme';
$lang['clients_article_voted_thanks_for_feedback'] = 'Tack för dina återkoppling';

# Support ärende
$lang['clients_ticket_open_subject']                = 'Öppna Ärenden';
$lang['clients_ticket_open_departments']            = 'Avdelning';
$lang['clients_tickets_heading']                    = 'Support Ärenden';
$lang['clients_ticket_open_service']                = 'Service';
$lang['clients_ticket_open_priority']               = 'Prioritering';
$lang['clients_latest_tickets']                     = 'Senaste Ärende';
$lang['clients_ticket_open_body']                   = 'Ärende kropp';
$lang['clients_ticket_attachments']                 = 'Bilagor';
$lang['clients_ticket_posted']                      = 'Postat: %s';
$lang['clients_single_ticket_string']               = 'Ärende';
$lang['clients_single_ticket_replied']              = 'Svarat: %s';
$lang['clients_single_ticket_information_heading'] = 'Ärende Informations';

$lang['clients_tickets_dt_number']     = 'Ärende #';
$lang['clients_tickets_dt_subject']    = 'Ämne';
$lang['clients_tickets_dt_department'] = 'Avdelning';
$lang['clients_tickets_dt_service']    = 'Service';
$lang['clients_tickets_dt_status']     = 'Status';
$lang['clients_tickets_dt_last_reply'] = 'Senaste svar';

$lang['clients_ticket_single_department']        = 'Avdelning: %s';
$lang['clients_ticket_single_submitted']          = 'Lämnats: %s';
$lang['clients_ticket_single_status']            = 'Status:';
$lang['clients_ticket_single_priority']          = 'Prioritet: %s';
$lang['clients_ticket_single_add_reply_btn']     = 'Lägg till svar';
$lang['clients_ticket_single_add_reply_heading'] = 'Lägg till svar till det här ärendet';

# Login
$lang['clients_login_heading_no_register'] = 'Logga in';
$lang['clients_login_heading_register']    = 'Loggain eller regestrera';
$lang['clients_login_email']               = 'E-postadress';
$lang['clients_login_password']            = 'Lösenord';
$lang['clients_login_remember']            = 'Kom ihåg mig';
$lang['clients_login_login_string']        = 'Logga in';

# Register
$lang['clients_register_string']  = 'Registrera';
$lang['clients_register_heading'] = 'Registrera';

# Navigation
$lang['clients_nav_login']     = 'Logga in';
$lang['clients_nav_register']  = 'Registrera';
$lang['clients_nav_invoices']  = 'Fakturor';
$lang['clients_nav_contracts'] = 'Kontrakt';
$lang['clients_nav_kb']        = 'Kunskapsdatabas';
$lang['clients_nav_profile']   = 'Profil';
$lang['clients_nav_logout']    = 'Logga ut';

# Datatables
$lang['clients_dt_paginate_first']    = 'Första';
$lang['clients_dt_paginate_last']     = 'Sista';
$lang['clients_dt_paginate_next']     = 'NÄsta';
$lang['clients_dt_paginate_previous'] = 'Tidigare';
$lang['clients_dt_empty_table']       = 'Inga {0} funna';
$lang['clients_dt_search']            = 'Sök:';
$lang['clients_dt_zero_records']      = 'Ingen matchande data funnen';
$lang['clients_dt_loading_records']   = 'Laddar...';
$lang['clients_dt_length_menu']       = 'Visa _MENU_ ';
$lang['clients_dt_info_filtered']     = '(filtrera Från _MAX_ total {0})';
$lang['clients_dt_info_empty']        = 'Visar 0 till 0 av 0 {0}';
$lang['clients_dt_info']              = 'Visar _START_ till _END_ av _TOTAL_ {0}';
$lang['clients_dt_empty_table']       = 'Inga {0} funna';
$lang['clients_dt_sort_ascending']    = 'aktivera för att sortera stigande';
$lang['clients_dt_sort_descending']   = 'aktivera för att sortera fallande';


# Version 1.0.1
# Admin
#
# Payments
$lang['payment_receipt']                               = 'Betalkvitto';
$lang['payment_for_string']                            = 'Betalning för';
$lang['payment_date']                                  = 'Betalningens datum:';
$lang['payment_view_mode']                             = 'Betalsätt:';
$lang['payment_total_amount']                          = 'Totala summan';
$lang['payment_table_invoice_number']                  = 'Fakturanummer';
$lang['payment_table_invoice_date']                    = 'Fakturadatum';
$lang['payment_table_invoice_amount_total']            = 'Summa faktura';
$lang['payment_table_payment_amount_total']            = 'Betala summa';
$lang['payments_table_transaction_id']                 = 'Transaktions ID: %s';
$lang['payment_getaway_token_not_found']               = 'Token hittades inte';
$lang['online_payment_recorded_success']               = 'Betalning regestrerad';
$lang['online_payment_recorded_success_fail_database'] = 'Betalning genomförd! Men misslyckades att regestrera den i databasen, kontakta administratör';

# kundämnen
$lang['lead_convert_to_client']                   = 'Konvertera till Kund';
$lang['lead_convert_to_email']                    = 'E-post';
$lang['lead_convert_to_client_firstname']         = 'Förnamn';
$lang['lead_convert_to_client_lastname']          = 'Efternamn';
$lang['lead_email_already_exists']                = 'Lead e-postadress finns redan i kunddatan';
$lang['lead_to_client_base_converted_success']    = 'Lead konverterades till kund';
$lang['lead_have_client_profile']                 = 'Denna Lead har redan en kundprofil.';
$lang['lead_converted_edit_client_profile']       = 'Hantera profil';

# Invoices
$lang['view_invoice_as_customer_tooltip']                                     = 'Se fakturan som kunden ser den';
$lang['invoice_add_edit_recurring']                                           = 'Återkommande faktura?';
$lang['invoice_add_edit_recurring_no']                                        = 'Nej';
$lang['invoice_add_edit_recurring_month']                                     = 'Varje %s månad';
$lang['invoice_add_edit_recurring_months']                                    = 'Varje %s månader';
$lang['invoices_list_all']                                                    = 'Alla';
$lang['invoices_list_not_have_payment']                                       = 'Fakturor utan regestrerad betalning';
$lang['invoices_list_recurring']                                               = 'Återkommande fakturor';
$lang['invoices_list_made_payment_by']                                        = 'Betalning gjord via %s';
$lang['invoices_create_invoice_from_recurring_only_on_paid_invoices']         = 'Skapa ny faktura Från (huvudåterkommande) faktura endast om och med status Betald';
$lang['invoices_create_invoice_from_recurring_only_on_paid_invoices_tooltip'] = 'Om det här fältet är satt till JA och de återkommande fakturor inte har status BETALT, kommer den nya fakturan inte skapas.';
$lang['send_renewed_invoice_from_recurring_to_email']                         = 'Auto skicka den förnyade faktura till kunden';
$lang['view_invoice_pdf_link_pay']                                            = 'Pay Invoice';

# Payment modes
$lang['payment_mode_add_edit_description']         = 'Bank Accounts / Description';
$lang['payment_mode_add_edit_description_tooltip'] = 'You can set here bank accounts informations. Will be shown on HTML Invoice';
$lang['payment_modes_dt_description']              = 'Bank Accounts / Description';
$lang['payment_modes_add_edit_announcement']       = 'Note: Payment modes listed below are offline modes. Online payment modes can be configured in Settings-> Payment Gateways';
$lang['payment_mode_add_edit_active']              = 'Active';
$lang['payment_modes_dt_active']                   = 'Active';

# Contracts
$lang['contract_not_found'] = 'Kontraktet hittades inte. Kanske har tagits bort, kontrollera aktivitetsloggen';

# Settings
$lang['setting_bar_heading']                 = 'Inställningar';
$lang['settings_group_online_payment_modes'] = 'Payment Gateways';
$lang['settings_paymentmethod_mode_label']   = 'Märkning';
$lang['settings_paymentmethod_active']       = 'Aktiv';
$lang['settings_paymentmethod_currencies']   = 'Valutor (komma separerade)';
$lang['settings_paymentmethod_testing_mode'] = 'Aktivera Testläge';

$lang['settings_paymentmethod_paypal_username']  = 'Paypal API Användarnamn';
$lang['settings_paymentmethod_paypal_password']  = 'Paypal API Lösenord';
$lang['settings_paymentmethod_paypal_signature'] = 'API Signatur';

$lang['settings_paymentmethod_stripe_api_secret_key']      = 'Stripe API Secret Key';
$lang['settings_paymentmethod_stripe_api_publishable_key'] = 'Stripe Publishable Key';
$lang['settings_limit_top_search_bar_results']             = 'Limit Top Search Bar Results to';

# Quick Actions
$lang['qa_create_invoice']  = 'Create Invoice';
$lang['qa_create_task']     = 'Create Task';
$lang['qa_create_client']   = 'Create Customer';
$lang['qa_create_contract'] = 'Create Contract';
$lang['qa_create_kba']      = 'Skapa en artickel i kunskapsdatabasen';
$lang['qa_create_survey']   = 'Create Survey';
$lang['qa_create_ticket']   = 'Open Ärende';
$lang['qa_create_staff']    = 'Create Staff Member';

## Clients
$lang['client_phonenumber'] = 'Telefon';

# Main Clients
$lang['clients_register']                          = 'Registrera';
$lang['clients_profile_updated']                   = 'Din profil har uppdaterats';
$lang['clients_successfully_registered']           = 'Tack för att du registrera dig';
$lang['clients_account_created_but_not_logged_in'] = 'Ditt konto har skapats men du blir inte automatiskt inloggad i vårt system. Försök att logga in nu';
# Tickets
$lang['clients_tickets_heading']                   = 'Support Ärende';

# Payments
// Uses on stripe page
$lang['payment_for_invoice'] = 'Betalning för faktura';
$lang['payment_total']       = 'Totalt: %s';

# Invoice
$lang['invoice_html_online_payment']             = 'Online Payment';
$lang['invoice_html_online_payment_button_text'] = 'Pay Now';
$lang['invoice_html_payment_modes_not_selected'] = 'Please Select Payment Mode';
$lang['invoice_html_amount_blank']               = 'Total summa kan inte vara blank eller noll';
$lang['invoice_html_offline_payment']            = 'Offline betalning';
$lang['invoice_html_amount']                     = 'Summa';


# Version 1.0.2
# Admin
#
# DataTables
$lang['dt_button_column_visibility']  = 'Synlighet';
$lang['dt_button_reload']             = 'Ladda om';
$lang['dt_button_excel']              = 'Excel';
$lang['dt_button_csv']                = 'CSV';
$lang['dt_button_pdf']                = 'PDF';
$lang['dt_button_print']              = 'Skriv ut';
$lang['is_not_active_export']         = 'Nej';
$lang['is_active_export']             = 'Ja';

# Invoice
$lang['invoice_add_edit_advanced_options']               = 'Avancerade alternativ';
$lang['invoice_add_edit_allowed_payment_modes']          = 'Tillåtna betalningssätten för denna faktura';
$lang['invoice_add_edit_recurring_invoices_from_invoice'] = 'Återkommande fakturor Från denna faktura';
$lang['invoice_add_edit_no_payment_modes_found']         = 'Inga betalningssätten hittades.';
$lang['invoice_html_total_pay']                          = 'Total: %s';

# Email templates
$lang['email_templates_table_heading_name'] = 'Mallnamn';
# General
$lang['discount_type']                      = 'Rabatt typ';
$lang['discount_type_after_tax']            = 'Efter moms';
$lang['discount_type_before_tax']           = 'Före moms';
$lang['terms_and_conditions']               = 'regler & villkor';
$lang['reference_no']                       = 'Referens #';
$lang['no_discount']                        = 'Ingen rabatt';
$lang['view_stats_tooltip']                 = 'Visa snabbStats';
# Clients
$lang['zip_from_date']                      = 'Från Datum:';
$lang['zip_to_date']                        = 'Till datum:';
$lang['client_zip_payments']                = 'Zippa betalningar';
$lang['client_zip_invoices']                = 'Zippa fakturor';
$lang['client_zip_estimates']               = 'Zippa offerter';
$lang['client_zip_status']                  = 'Status';
$lang['client_zip_status_all']              = 'Alla';
$lang['client_zip_payment_modes']           = 'Betalning gjord av';
$lang['client_zip_no_data_found']           = 'Inga %s funna';

# Payments
$lang['payment_mode']         = 'Betalläge';
$lang['payment_view_heading'] = 'Betalning';

# Settings
$lang['settings_allow_payment_amount_to_be_modified']               = 'Låt kund ändra belopp att betala (för onlinebetalningar).';
$lang['settings_survey_send_emails_per_cron_run']                   = 'Hur många e-post i timmen (Cron) ';
$lang['settings_survey_send_emails_per_cron_run_tooltip']           = 'Det här alternativet används när du skickar undersökningar. Survey cron kommer att skicka X e-postmeddelanden per timme. Vissa webbhotell har gräns för att skicka e-post per timme.';
$lang['settings_delete_only_on_last_invoice']                       = 'Radera faktura tillåts endast på sista fakturan';
$lang['settings_sales_estimate_prefix']                             = 'Offertnummer Prefix';
$lang['settings_sales_next_estimate_number']                        = 'Nästa offertnummer';
$lang['settings_sales_next_estimate_number_tooltip']                = 'Sätt en 1 i fältet om du vill starta från början';
$lang['settings_sales_decrement_estimate_number_on_delete']         = 'Minska offertnummer följden när du raderar';
$lang['settings_sales_decrement_estimate_number_on_delete_tooltip'] = 'Vill du minska offertnummren när den sista offerten tas bort? ex. Om du sätter det här alternativet till JA och före offerten tas bort och nästa offertnummer är 15 kommer nästa offertnumret minskas till 14.OM alternativet är inställt på NEJ, kommer antalet att förbli 15. Om du har ställt in att endast radera på sista offerten och till NEJ så bör du sätta detta alternativet till NEJ för att nästa offertnummer ej ska minskas ett steg.';
$lang['settings_sales_estimate_number_format']                      = 'Format på offertnummer';
$lang['settings_sales_estimate_number_format_year_based']           = 'Års basis';
$lang['settings_sales_estimate_number_format_number_based']         = 'Nummer basis (000001)';
$lang['settings_delete_only_on_last_estimate']                      = 'Radera offert tillåts endast på sista fakturan';
$lang['settings_cron_invoice_heading']                              = 'Faktura';
$lang['settings_send_test_email_heading']                           = 'Skicka ett test mail';
$lang['settings_send_test_email_subheading']                        = 'Skicka testmeddelande för att kontrollera att dina SMTP-inställningar är korrekt inställd.';
$lang['settings_send_test_email_string']                            = 'Mailadress';
$lang['settings_smtp_settings_heading']                             = 'SMTP Inställningar';
$lang['settings_smtp_settings_subheading']                          = 'Ställ in primär E-mail';

$lang['settings_sales_heading_general']                             = 'Allmän';
$lang['settings_sales_heading_invoice']                             = 'Faktura';
$lang['settings_sales_heading_estimates']                           = 'Offert';
$lang['settings_sales_heading_company']                             = 'Företag';
$lang['settings_sales_cron_invoice_heading']                        = 'Faktura';

# Tasks
$lang['tasks_dt_datestart'] = 'Startdatum';
$lang['tasks_dt_priority']  = 'Prioriterat';

# Invoice General
$lang['invoice_discount'] = 'Rabatt';

# Settings
$lang['settings_rtl_support_admin']                                   = 'RTL Admin Area (höger till vänster)';
$lang['settings_rtl_support_client']                                  = 'RTL Kund Area (höger till vänster)';
$lang['acs_language_editor']                                          = 'Språkhanteraren';
$lang['settings_estimate_auto_convert_to_invoice_on_client_accept']   = 'Auto konvertera offerten till faktura efter att klient accepterat';
$lang['settings_exclude_estimate_from_client_area_with_draft_status'] = 'Uteslut offerter med.. Utkaststatus Från kunds sida';

# Months
$lang['January']   = 'January';
$lang['February']  = 'February';
$lang['March']     = 'March';
$lang['April']     = 'April';
$lang['May']       = 'May';
$lang['June']      = 'June';
$lang['July']      = 'July';
$lang['August']    = 'August';
$lang['September'] = 'September';
$lang['October']   = 'October';
$lang['November']  = 'November';
$lang['December']  = 'December';

# Time ago function translate
$lang['time_ago_just_now']  = 'Just nu';
$lang['time_ago_minute']    = 'En minut sedan';
$lang['time_ago_minutes']   = '%s minuter sedan';
$lang['time_ago_hour']      = 'en timme sedan';
$lang['time_ago_hours']     = '%s timmar sedan';
$lang['time_ago_yesterday'] = 'igår';
$lang['time_ago_days']      = '%s dagar sedan';
$lang['time_ago_week']      = 'en vecka sedan';
$lang['time_ago_weeks']     = '%s veckor sedan';
$lang['time_ago_month']     = 'en månad sedan';
$lang['time_ago_months']    = '%s månader sedan';
$lang['time_ago_year']      = 'ett år sedan';
$lang['time_ago_years']     = '%s år sedan';


# Offert
$lang['estimates']                          = 'Offerter';
$lang['estimate']                           = 'Offert';
$lang['estimate_lowercase']                 = 'offert';
$lang['create_new_estimate']                = 'Skapa en offert';
$lang['view_estimate']                      = 'Visa på offert';
$lang['estimate_sent_to_client_success']    = 'Offert är skickad till Kunden';
$lang['estimate_sent_to_client_fail']       = 'Problem att skicka offert till kunden';
$lang['estimate_reminder_send_problem']     = 'Problem att skicka förfallen offert';
$lang['estimate_details']                   = 'Offert detaljer';
$lang['estimate_view']                      = 'Se detaljer';
$lang['estimate_select_customer']           = 'Kunder';
$lang['estimate_add_edit_number']           = 'Beräknat antal';
$lang['estimate_add_edit_date']             = 'Beräknat datum';
$lang['estimate_add_edit_expirydate']       = 'Sista dag';
$lang['estimate_add_edit_currency']         = 'Valuta';
$lang['estimate_add_edit_client_note']      = 'Kundnotering';
$lang['estimate_add_edit_admin_note']       = 'Admin notering';
$lang['estimate_add_edit_new_item']         = 'Ny produkt';
$lang['estimate_add_edit_search_item']      = 'Sök produkt';
$lang['estimates_toggle_table_tooltip']     = 'Dra ihop vyn';
$lang['estimate_add_edit_advanced_options'] = 'Avancerade val';
$lang['estimate_vat']                       = 'Momsregestreringsnummer';
$lang['estimate_to']                        = 'Till';
$lang['estimates_list_all']                 = 'Alla';

$lang['estimate_invoiced_date']                  = 'Offert fakturerad den %s';
$lang['edit_estimate_tooltip']                   = 'Redigera offert';
$lang['delete_estimate_tooltip']                 = 'Radera offert';
$lang['estimate_sent_to_email_tooltip']          = 'Skicka till epost';
$lang['estimate_already_send_to_client_tooltip'] = 'Den här offerten är redan skickad till kunden %s';
$lang['estimate_view_activity_tooltip']          = 'Aktivitetslogg';

$lang['estimate_send_to_client_modal_heading']    = 'Skicka offert till kunden';
$lang['estimate_send_to_client_attach_pdf']       = 'Bifoga offert som PDF';
$lang['estimate_send_to_client_preview_template'] = 'Förhandsgranska mall';

$lang['estimate_dt_table_heading_number']     = 'Offert #';
$lang['estimate_dt_table_heading_date']       = 'Datum';
$lang['estimate_dt_table_heading_client']     = 'Kund';
$lang['estimate_dt_table_heading_expirydate'] = 'Löper ut';
$lang['estimate_dt_table_heading_amount']     = 'Summa';
$lang['estimate_dt_table_heading_status']     = 'Status';

$lang['estimate_email_link_text']    = 'Se offert';
$lang['estimate_convert_to_invoice'] = 'Konvertera till faktura';
# Home
$lang['home_unfinished_tasks']       = 'Icka klara uppgifter';

# Clients
$lang['client_estimates_tab'] = 'Offerter';
$lang['client_payments_tab']  = 'Betalningar';


# Estimate General
$lang['estimate_pdf_heading']            = 'OFFERT';
$lang['estimate_table_item_heading']     = 'Produkter';
$lang['estimate_table_quantity_heading'] = 'St';
$lang['estimate_table_rate_heading']     = 'Pris';
$lang['estimate_table_tax_heading']      = 'Moms';
$lang['estimate_table_amount_heading']   = 'Summa';
$lang['estimate_subtotal']               = 'Summa tot';
$lang['estimate_adjustment']             = 'Justering';
$lang['estimate_discount']               = 'Rabatt';
$lang['estimate_total']                  = 'Total';
$lang['estimate_to']                     = 'Till';
$lang['estimate_data_date']              = 'Offert datum';
$lang['estimate_data_expiry_date']       = 'Gäller till';
$lang['estimate_note']                   = 'Notering:';
$lang['estimate_status_draft']           = 'Utkast';
$lang['estimate_status_sent']            = 'Skickat';
$lang['estimate_status_declined']        = 'Avböjd';
$lang['estimate_status_accepted']        = 'Accepterad';
$lang['estimate_status_expired']         = 'Utgången';
$lang['estimate_note']                   = 'Notering:';

# Quick create
$lang['qa_create_estimate'] = 'Skapa Offert';
$lang['qa_create_lead']     = 'Skapa Lead';


## Clients
$lang['clients_estimate_dt_number']             = 'Offert #';
$lang['clients_estimate_dt_date']               = 'Datum';
$lang['clients_estimate_dt_duedate']            = 'Giltig till';
$lang['clients_estimate_dt_amount']             = 'Summa';
$lang['clients_estimate_dt_status']             = 'Status';
$lang['clients_nav_estimates']                  = 'Offert';
$lang['clients_decline_estimate']               = 'Avböj';
$lang['clients_accept_estimate']                = 'Acceptera';
$lang['clients_my_estimates']                   = 'Offert';
$lang['clients_estimate_invoiced_successfully']  = 'Offerten accepterad. Här är er faktura baserad på offerten';
$lang['clients_estimate_accepted_not_invoiced'] = 'Tack för accepten av offerten';
$lang['clients_estimate_declined']              = 'Avböjd offert. Du kan acceptera offerten när som helst före sista offert datum';
$lang['clients_estimate_failed_action']         = 'Gick inte att hantera denna offert';
$lang['client_add_edit_profile']                = 'Profil';

# Custom Fields
$lang['custom_field']                          = 'Anpassat fält';
$lang['custom_field_lowercase']                = 'anpassat fält';
$lang['custom_fields']                         = 'Anpassade fält';
$lang['custom_fields_lowercase']               = 'anpassatde fält';
$lang['new_custom_field']                      = 'Nytt Anpassat fält';
$lang['custom_field_name']                     = 'Fält namn';
$lang['custom_field_add_edit_type']            = 'Typ av fält';
$lang['custom_field_add_edit_belongs_top']     = 'Fältet tillhör ';
$lang['custom_field_add_edit_options']         = 'Val';
$lang['custom_field_add_edit_options_tooltip'] = 'Använd endast för val och kryssruta typer. fyll fältet genom att separera alternativen med komma. ex. äpple, apelsin, banan';
$lang['custom_field_add_edit_order']           = 'Order';

$lang['custom_field_dt_field_to']       = 'Tillhör';
$lang['custom_field_dt_field_name']     = 'Namn';
$lang['custom_field_dt_field_type']     = 'fält Sort';
$lang['custom_field_add_edit_active']   = 'Aktiv';
$lang['custom_field_add_edit_disabled'] = 'Inaktiv';

# Ticket replies
$lang['ticket_reply']           = 'Svar Support ärende';
$lang['ticket_reply_lowercase'] = 'svar support ärende';

# Admin Customizer Sidebar
$lang['asc_custom_fields'] = 'Anpassat fält';

# Contracts
$lang['contract_types']          = 'Kontraktstyp';
$lang['contract_type']           = 'Kontraktstyp';
$lang['new_contract_type']       = 'Ny Kontraktstyp';
$lang['contract_type_lowercase'] = 'kontrakt';
$lang['contract_type_name']      = 'Namn';

$lang['contract_types_list_name'] = 'Kontraktstyp';

# Customizer Menu
$lang['acs_contracts']      = 'Kontrakt';
$lang['acs_contract_types'] = 'Kontraktstyper';

# Version 1.0.4
# Invoice Items
$lang['invoice_item_long_description']     = 'Lång beskrivning';
# Customers
$lang['client_delete_invoices_warning']    = 'Denna klient har fakturor eller offerter på kontot. Du kan inte ta bort denna klient. Ändra alla fakturor till en annan kund och i en framtid ta bort dessa.';
$lang['clients_list_phone']                = 'Telefon';
$lang['client_expenses_tab']               = 'Kostnader';
$lang['customers_summary']                 = 'Kundsummering';
$lang['customers_summary_active']          = 'Aktiva kontakter';
$lang['customers_summary_inactive']        = 'Inaktiv kontakt';
$lang['customers_summary_logged_in_today'] = 'Kontakter som loggat in idag';

# Authentication
$lang['admin_auth_forgot_password_email']             = 'E-postadress';
$lang['admin_auth_forgot_password_heading']           = 'Glömt ditt lösenord';
$lang['admin_auth_login_heading']                     = 'Logga in';
$lang['admin_auth_login_email']                       = 'E-postadress';
$lang['admin_auth_login_password']                    = 'Lösenord';
$lang['admin_auth_login_remember_me']                 = 'Kom ihåg mig';
$lang['admin_auth_login_button']                      = 'Logga in';
$lang['admin_auth_login_fp']                          = 'Glömt lösenordet?';
$lang['admin_auth_reset_password_heading']            = 'Återställ lösenordet';
$lang['admin_auth_reset_password']                    = 'Lösenord';
$lang['admin_auth_reset_password_repeat']             = 'Repetera lösenord';
$lang['admin_auth_invalid_email_or_password']         = 'Fel epost eller lösenord';
$lang['admin_auth_inactive_account']                  = 'Kontor är inaktivt';
# Calender
$lang['calendar_estimate']                            = 'Offert';
$lang['calendar_invoice']                             = 'Faktura';
$lang['calendar_contract']                            = 'Kontrakt';
$lang['calendar_customer_reminder']                   = 'Påminnelse kund';
$lang['calendar_event']                               = 'Händelse';
$lang['calendar_task']                                = 'Uppgift';
# kundämnen
$lang['lead_edit_delete_tooltip']                     = 'Radera Lead';
$lang['lead_attachments']                             = 'Bilagor';
# Admin Customizer Sidebar
$lang['acs_finance']                                  = 'Finans';
# Settings

$lang['settings_show_sale_agent_on_invoices']         = 'Visa säljare på fakturan';
$lang['settings_show_sale_agent_on_estimates']        = 'Visa säljare på offerten';
$lang['settings_predefined_predefined_term']          = 'Fördefinierade Villkor';
$lang['settings_predefined_clientnote']               = 'Fördefinierade kundnoteringar';
$lang['settings_custom_pdf_logo_image_url']           = 'Custom PDF Company Logo URL (JPG - 210x60px)';
$lang['settings_custom_pdf_logo_image_url_tooltip']   = 'Förmodligen kommer du att ha problem med PNG-bilder med genomskinlighet som hanteras på olika sätt beroende på php-Imagick eller php-gd-version som används. Försök att uppdatera php-Imagick och inaktivera php-gd. Om du lämnar fältet tomt kommer den uppladdade logotypen att användas.';

# General
$lang['sale_agent_string']               = 'Säljare';
$lang['amount_display_in_base_currency'] = 'Belopp visas i din basvaluta - Använd endast denna rapport om du använder en slags valuta för betalningar och kostnader. SEK i detta fall';
# kundämnen
$lang['leads_summary']                                         = 'kundämnen Summering';

# Contracts
$lang['contract_value']                 = 'Kontraktets värde';
$lang['contract_trash']                 = 'Skräp';
$lang['contracts_view_trash']           = 'Visa skräp';
$lang['contracts_view_all']             = 'Alla';
$lang['contracts_view_exclude_trashed'] = 'Excludera skräpkontrakt';
$lang['contract_value_tooltip']         = 'Basvaluta kommer att användas.';
$lang['contract_trash_tooltip']         = 'Om du lägger till kontrakt i papperskorgen, så kommer inte det visas på klientsidan, och kommer inte inkluderas i diagram och annan statistik samt som standard kommer det inte att visas när du listar alla kontrakt.';
$lang['contract_summary_active']              = 'Aktiv';
$lang['contract_renew_heading']               = 'Förnya kontraktet';
$lang['contract_summary_heading']             = 'Summering av kontrakt';
$lang['contract_summary_expired']             = 'Löpt ut';
$lang['contract_summary_about_to_expire']     = 'På väg att löpa ut';
$lang['contract_summary_recently_added']      = 'Nyligen tillagd';
$lang['contract_summary_trash']               = 'Skräp';
$lang['contract_summary_by_type']             = 'Kontrakt efter typ';
$lang['contract_summary_by_type_value']       = 'Kontraktsvärde efter typ';
$lang['contract_renewed_successfully']         = 'Kontraktet har förnyats';
$lang['contract_renewed_fail']                = 'Problem medan du förnya kontraktet. Kontakta administratören';
$lang['no_contract_renewals_found']           = 'Förnyelse av detta kontrakt hittades inte';
$lang['no_contract_renewals_history_heading'] = 'Historik av förnyade kontrakt';
$lang['contract_renewed_by']                  = '%s förnyade avtalet';
$lang['contract_renewal_deleted']             = 'Förnyelse har raderats';
$lang['contract_renewal_delete_fail']         = 'Det gick inte att ta bort förlängning av kontraktet. Kontakta administratören';

$lang['contract_renewal_new_value'] = 'Nytt avtalsvärde: %s';
$lang['contract_renewal_old_value'] = 'Gamla avtalsvärde: %s';

$lang['contract_renewal_new_start_date'] = 'Nytt avtals startdatum: %s';
$lang['contract_renewal_old_start_date'] = 'Gammalt avtals startdatum: %s';

$lang['contract_renewal_new_end_date'] = 'Nytt avtals slutdatum: %s';
$lang['contract_renewal_old_end_date'] = 'Gammalt avtals sluttadum: %s';
$lang['contract_attachment']           = 'Bilagor';
$lang['contract_attachment_lowercase'] = 'bilagor';

# Admin Aside Menu
$lang['als_goals_tracking']     = 'Målspårning';
$lang['als_expenses']           = 'Kostnader';
$lang['als_reports_expenses']   = 'Kostnader';
$lang['als_expenses_vs_income'] = 'Kostnader vs Inkomst';

# Invoices
$lang['invoice_attach_file']           = 'Lägg till fil';
$lang['invoice_mark_as_sent']          = 'Markera som skickat';
$lang['invoice_marked_as_sent']        = 'Faktura markerad som skickad';
$lang['invoice_marked_as_sent_failed'] = 'Misslyckades markera faktura som skickad';

# Quick Actions
$lang['qa_new_goal']    = 'Sätt nya mål';
$lang['qa_new_expense'] = 'Lägg till kostnad';

# Goals Tracking
$lang['goals']                                         = 'Målen';
$lang['goal']                                          = 'Mål';
$lang['goals_tracking']                                = 'Målspårning';
$lang['new_goal']                                      = 'Nytt mål';
$lang['goal_lowercase']                                = 'mål';
$lang['goal_start_date']                               = 'Startdatum';
$lang['goal_end_date']                                 = 'Slutdatum';
$lang['goal_subject']                                  = 'Ämne';
$lang['goal_description']                              = 'Beskrivning';
$lang['goal_type']                                     = 'Typ av mål';
$lang['goal_achievement']                              = 'Prestation';
$lang['goal_contract_type']                            = 'Typ av kontrakt';
$lang['goal_notify_when_fail']                         = 'Meddela anställda när målet ej uppnåts';
$lang['goal_notify_when_achieve']                      = 'Meddela anställda när målet har uppnåts';
$lang['goal_progress']                                 = 'Framsteg';
$lang['goal_total']                                    = 'Total: %s';
$lang['goal_result_heading']                           = 'Framsteg (för slutmål)';
$lang['goal_income_shown_in_base_currency']            = 'Totala intäkter visas i basvalutan';
$lang['goal_notify_when_end_date_arrives']             = 'Anställda kommer att meddelas när slutdatum anträffar (Kräver CRON).';
$lang['goal_staff_members_notified_about_achievement'] = 'Anställda meddelas om detta måls uppfyllda prestationer';
$lang['goal_staff_members_notified_about_failure']     = 'Anställda kommer bli meddelade om misslyckande att uppnå detta mål';
$lang['goal_notify_staff_manually']                     = 'Meddela manuelt de anställda';
$lang['goal_notify_staff_notified_manually_success']    = 'Anställda meddelas om detta målresultat';
$lang['goal_notify_staff_notified_manually_fail']       = 'Det gick inte att meddela anställda om detta målresultat';

$lang['goal_achieved'] = 'Framsteg';
$lang['goal_failed']   = 'Misslyckat';
$lang['goal_close']    = 'Väldigt nära';

$lang['goal_type_total_income']                                         = 'Framsteg på de sammanlagda inkomsterna';
$lang['goal_type_convert_leads']                                        = 'Konvertera X kundämnen';
$lang['goal_type_increase_customers_without_leads_conversions']         = 'Öka kundnummret';
$lang['goal_type_increase_customers_without_leads_conversions_subtext'] = 'Konvertering kundämnen utesluten';

$lang['goal_type_increase_customers_with_leads_conversions']         = 'Ökapå kundnummren';
$lang['goal_type_increase_customers_with_leads_conversions_subtext'] = 'kundämnen Konvertering ingår';
$lang['goal_type_make_contracts_by_type_calc_database']              = 'Gör avtal enligt typ';
$lang['goal_type_make_contracts_by_type_calc_database_subtext']      = 'Beräknas Från datum då det laggts till i databasen';
$lang['goal_type_make_contracts_by_type_calc_date']                  = 'Gör kontrakt enligt typ';
$lang['goal_type_make_contracts_by_type_calc_date_subtext']          = 'Beräknas Från kontraktets startdatum';
$lang['goal_type_total_estimates_converted']                         = 'X Offert omvandling ';
$lang['goal_type_total_estimates_converted_subtext']                 = 'Kommer bara att ta offerter att omvandla till fakturor';
$lang['goal_type_income_subtext']                                    = 'Inkomster kommer att beräknas i basvalutan (inte konverteras)';
# Payments
$lang['payment_transaction_id']                                      = 'Transaktions ID';
# Settings Menu
$lang['acs_expenses']                                                = 'Kostnader';
$lang['acs_expense_categories']                                      = 'Kostnadskategori';
# Expeneses
$lang['expense_category']                                            = 'Kostnadskategori';
$lang['expense_category_lowercase']                                  = 'kostnadskategori';
$lang['new_expense']                                                 = 'Registrera kostnad';
$lang['expense_add_edit_name']                                       = 'Kategori namn';
$lang['expense_add_edit_description']                                = 'Ketegori beskrivning';
$lang['expense_categories']                                          = 'Kostnadskategori';
$lang['new_expense_category']                                        = 'Ny kategori';
$lang['dt_expense_description']                                      = 'Beskrivning';
$lang['expense']                                                     = 'Kostnad';
$lang['expenses']                                                    = 'Kostnader';
$lang['expense_lowercase']                                           = 'kostnad';
$lang['expense_add_edit_tax']                                        = 'moms';
$lang['expense_add_edit_customer']                                   = 'Kund';
$lang['expense_add_edit_currency']                                   = 'Valuta';
$lang['expense_add_edit_note']                                       = 'Notering';
$lang['expense_add_edit_date']                                       = 'Kostnads datum';
$lang['expense_add_edit_amount']                                     = 'Summa';
$lang['expense_add_edit_billable']                                   = 'Debiterbar';
$lang['expense_add_edit_attach_receipt']                             = 'Lägg till kvitto';
$lang['expense_add_edit_reference_no']                               = 'Refferens #';
$lang['expense_receipt']                                             = 'Kvitto kostnader';
$lang['expense_receipt_lowercase']                                   = 'kvitto kostnader';
$lang['expense_dt_table_heading_category']                           = 'Kategori';
$lang['expense_dt_table_heading_amount']                             = 'Summa';
$lang['expense_dt_table_heading_date']                               = 'Datum';
$lang['expense_dt_table_heading_reference_no']                       = 'Refferens #';
$lang['expense_dt_table_heading_customer']                           = 'Kund';
$lang['expense_dt_table_heading_payment_mode']                       = 'Betalslag';
$lang['expense_converted_to_invoice']                                = 'Kostnader har konverterats till faktura';
$lang['expense_converted_to_invoice_fail']                           = 'Det gick inte att konvertera denna kostnad till faktura, titta i felloggen.';
$lang['expense_copy_success']                                        = 'Kostnaden kopierats.';
$lang['expense_copy_fail']                                           = 'Det gick inte att kopiera kostnad. Kontrollera de obligatoriska fälten och försök igen';
$lang['expenses_list_all']                                           = 'Alla';
$lang['expenses_list_billable']                                      = 'Debiterbar';
$lang['expenses_list_non_billable']                                  = 'Ej Debiterbar';
$lang['expenses_list_invoiced']                                      = 'Fakturerat';
$lang['expenses_list_unbilled']                                      = 'Ej fakturerat';
$lang['expenses_list_recurring']                                     = 'Återkommande';
$lang['expense_invoice_delete_not_allowed']                          = 'Du kan inte ta bort denna kostnad. Kostnaden redan fakturerad.';
$lang['expense_convert_to_invoice']                                  = 'Konvertera till faktura';
$lang['expense_edit']                                                = 'Hantera kostnader';
$lang['expense_delete']                                              = 'Radera';
$lang['expense_copy']                                                = 'Kopiera';
$lang['expense_invoice_not_created']                                 = 'Faktura ej skapad';
$lang['expense_billed']                                              = 'Fakturerad';
$lang['expense_not_billed']                                          = 'Faktura ej betald';
$lang['expense_customer']                                            = 'Kund';
$lang['expense_note']                                                = 'Notering:';
$lang['expense_date']                                                = 'Datum:';
$lang['expense_ref_noe']                                             = 'Ref #:';
$lang['expense_tax']                                                 = 'Moms:';
$lang['expense_amount']                                              = 'Summa:';
$lang['expense_recurring_indicator']                                 = 'Återkommande';
$lang['expense_already_invoiced']                                    = 'Denna kostnad är redan faktureras';
$lang['expense_recurring_auto_create_invoice']                       = 'Skapa faktura automatiskt';
$lang['expense_recurring_send_custom_on_renew']                      = 'Skicka fakturan till kundens e-post när kostnad upprepas';
$lang['expense_recurring_autocreate_invoice_tooltip']                = 'Om det här alternativet är markerat. kommer fakturan för kunden att automatiskt skapas när kostnaden förnyas.';
$lang['report_expenses_full']                                        = 'Full rapport';
$lang['expenses_yearly_by_categories']                               = 'Kostnader. Årligen efter kategori';
$lang['total_expenses_for']                                          = 'Totala Kostnader för'; // År
$lang['expenses_report_for']                                         = 'Kostnader för'; // År
# Custom fields
$lang['custom_field_required']                                       = 'Nödvändig';
$lang['custom_field_show_on_pdf']                                    = 'Visa som PDF';
$lang['custom_field_leads']                                          = 'kundämnen';
$lang['custom_field_customers']                                      = 'Kunder';
$lang['custom_field_staff']                                          = 'Personal';
$lang['custom_field_contracts']                                      = 'Kontrakt';
$lang['custom_field_tasks']                                          = 'uppgifter';
$lang['custom_field_expenses']                                       = 'Kostnader';
$lang['custom_field_invoice']                                        = 'Faktura';
$lang['custom_field_estimate']                                       = 'Offert';
# Tickets
$lang['ticket_single_private_staff_notes']                           = 'Privata personal anmärkningar';


# Business News
$lang['business_news'] = 'Företagsnyheter';

# Navigation
$lang['nav_todo_items']               = 'Todo poster';
# Clients
# Contracts
$lang['clients_contracts_type']       = 'Kontraktstyp';
# Version 1.0.5
# General
$lang['no_tax']                             = 'Ingen moms';
$lang['numbers_not_formatted_while_editing'] = 'Kursen i inmatningsfältet  är inte formaterat.  Medans, redigera / lägga till varorna bör förbli oformaterade. Försöka inte formatera den manuellt här där du är!.';
# Contracts
$lang['contracts_view_expired']             = 'Löpt ut';
$lang['contracts_view_without_dateend']     = 'Kontrakt utan slutdatum';

# Email Templates
$lang['email_template_contracts_fields_heading'] = 'Kontrakt';
# Invoices General
$lang['invoice_estimate_general_options']        = 'allmänna alternativ';
$lang['invoice_table_item_description']          = 'Beskrivning';
$lang['invoice_recurring_indicator']             = 'Återkommande';

# Estimates
$lang['estimate_convert_to_invoice_successfully'] = 'Offerten konverterades till faktura';
$lang['estimate_table_item_description']         = 'Beskrivning';

# Version 1.0.6
# Invoices
# Currencies
$lang['cant_delete_base_currency'] = 'Du kan inte ta bort basvalutan. Du måste tilldela nya basvalutan sen bort denna.';
$lang['invoice_copy']              = 'Kopiera faktura';
$lang['invoice_copy_success']      = 'Invoice copied successfully';
$lang['invoice_copy_fail']         = 'Failed to copy invoice';
$lang['invoice_due_after_help']    = 'Set zero to avoid calculation';

$lang['show_shipping_on_invoice'] = 'Show shipping details in invoice';

# Estimates
$lang['show_shipping_on_estimate']         = 'Visa leveransinformation  i offerten';
$lang['is_invoiced_estimate_delete_error'] = 'Denna offert är fakturerad. Du kan inte ta bort offerten';

# Customers & Invoices / Estimates
$lang['ship_to']                  = 'Frakta till';
$lang['customer_profile_details'] = 'Kunduppgifter';
$lang['billing_shipping']         = 'Faktura & Leverans';
$lang['billing_address']          = 'Fakturaadress';
$lang['shipping_address']         = 'Leveransadress';

$lang['billing_street']  = 'Gata';
$lang['billing_city']    = 'Stad';
$lang['billing_state']   = 'Län';
$lang['billing_zip']     = 'Postnummer';
$lang['billing_country'] = 'Land';

$lang['shipping_street']                    = 'Gata';
$lang['shipping_city']                      = 'Stad';
$lang['shipping_state']                     = 'Län';
$lang['shipping_zip']                       = 'Postnummer';
$lang['shipping_country']                   = 'Land';
$lang['get_shipping_from_customer_profile'] = 'Hämta fraktdetaljer från kundens profil';

# Customer
$lang['customer_file_from']                                    = 'Visar Från %s';
$lang['customer_default_currency']                             = 'Standard valuta (SEK)';
$lang['customer_no_attachments_found']                         = 'Ingen bifogad fil funnen';
$lang['customer_update_address_info_on_invoices']              = 'Uppdatera frakt / fakturerings info på alla tidigare fakturor och offerter';
$lang['customer_update_address_info_on_invoices_help']         = 'Om du markerar det här fältet kommer leverans- och fakturerings information att uppdateras till alla fakturor och offerter. Obs: Fakturor med status betald kommer inte att påverkas.';
$lang['setup_google_api_key_customer_map']                     = 'Ställ in google api key För att kunna se kartan för kunderna';
$lang['customer_attachments_file']                             = 'Fil';
$lang['client_send_set_password_email']                        = 'Skicka SKAPA lösenords mail';
$lang['customer_billing_same_as_profile']                      = 'Samma som kund info';
$lang['customer_billing_copy']                                 = 'Kopiera fakturaadressen';
$lang['customer_map']                                          = 'Karta';
$lang['set_password_email_sent_to_client']                     = 'E-post för att skapa lösenord har skickats till kontakt';
$lang['set_password_email_sent_to_client_and_profile_updated'] = 'Profil uppdaterad och ett e-post för att skapa lösenord har skickats till kontakt';
$lang['customer_attachments']                                  = 'Filer';
$lang['customer_longitude']                                    = 'Longitude (Google Maps)';
$lang['customer_latitude']                                     = 'Latitude (Google Maps)';

# Authentication
$lang['admin_auth_set_password']          = 'Lösenord';
$lang['admin_auth_set_password_repeat']   = 'Repetera lösenord';
$lang['admin_auth_set_password_heading']  = 'Ställ in lösenord';
$lang['password_set_email_subject']       = 'Sätt nytt lösenord på %s';
# General
$lang['apply']                            = 'Tillämpa';
$lang['department_calendar_id']           = 'Google Calendar ID';
$lang['kan_ban_string']                   = 'Kan Ban';
$lang['localization_default_language']    = 'Standard språk';
$lang['system_default_string']            = 'System Standard';
$lang['advanced_options']                 = 'Avancerade alternativ';
# Expenses
$lang['expense_list_invoice']             = 'Fakturerat';
$lang['expense_list_billed']              = 'Fakturerad';
$lang['expense_list_unbilled']            = 'Ej Fakturerad';
# kundämnen
$lang['lead_merge_custom_field']          = 'Slå ihop som anpassat fält';
$lang['lead_merge_custom_field_existing'] = 'Slå ihop med databasfält';
$lang['lead_dont_merge_custom_field']     = 'Slå ej ihop';
$lang['no_lead_notes_found']              = 'Ingen kundämne notering funnen';
$lang['leads_view_list']                  = 'Lista';
$lang['lost_leads']                       = 'Förlorade kundämnen';
$lang['junk_leads']                       = 'Skräp Ämne';
$lang['lead_mark_as_lost']                = 'Markera som missad';
$lang['lead_unmark_as_lost']              = 'Avmarkera som missad';
$lang['lead_marked_as_lost']              = 'Kundämne markerad som missad';
$lang['lead_unmarked_as_lost']            = 'Kundämne avmarkerad som missad (Bra)';
$lang['leads_status_color']               = 'Färg';

$lang['lead_mark_as_junk']     = 'Markera som skräp';
$lang['lead_unmark_as_junk']   = 'Avmarkera som skräpämne';
$lang['lead_marked_as_junk']   = 'Kundämne markerades som skräp';
$lang['lead_unmarked_as_junk'] = 'Kundämne avmarkerat som skräp (bra)';

$lang['lead_not_found']                                                      = 'Kundämne Ej funnen';
$lang['lead_lost']                                                           = 'Missad';
$lang['lead_junk']                                                           = 'Skräp';
$lang['leads_not_assigned']                                                  = 'Ej tilldelad';
# Contacts
$lang['contract_not_visible_to_client']                                      = 'Visa ej för kund';
$lang['contract_edit_overview']                                              = 'Kontraktsöversikt';
$lang['contract_attachments']                                                = 'Bifogade dokument';
# Tasks
$lang['task_view_make_public']                                               = 'Gör publik';
$lang['task_is_private']                                                     = 'Privat uppgift';
$lang['task_finished']                                                       = 'Avslutat';
$lang['task_single_related']                                                 = 'Relaterade';
$lang['task_unmark_as_complete']                                             = 'Avmarkera för klar';
$lang['task_unmarked_as_complete']                                           = 'Uppgift avmarkerad för klar';
$lang['task_relation']                                                       = 'Relaterat';
$lang['task_public']                                                         = 'Publikt';
$lang['task_public_help']                                                    = 'Om du ställer in denna uppgift som publikt kommer den att vara synlig för alla anställda. Annars blir den  bara synliga för medlemmar som är
Uppdragstagare, Följare, skapare eller administratörer';
# Settings
$lang['settings_general_favicon']                                            = 'Favicon';
$lang['settings_output_client_pdfs_from_admin_area_in_client_language']      = 'Ställ in kunds PDF-dokument Från admin till kundens språk';
$lang['settings_output_client_pdfs_from_admin_area_in_client_language_help'] = 'Om detta alternativ är satt till JA och ex. systemstandardspråket är Satt till Svenska och kunden har ställt in sitt språk som franska. Så kommer pdf-dokumenten att visas i kundens språk.';
$lang['settings_cron_surveys']                                               = 'Undersökningar';
$lang['settings_default_tax']                                                = 'Standard moms';
$lang['setup_calendar_by_departments']                                       = 'Skapa kalender per avdelning';
$lang['settings_calendar']                                                   = 'Kalendar';
$lang['settings_sales_invoice_due_after']                                    = 'Faktura förfallen (dagar)';
$lang['settings_google_api']                                                 = 'Google API Key';
$lang['settings_gcal_main_calendar_id']                                      = 'Google Kalender ID';
$lang['settings_gcal_main_calendar_id_help']                                 = 'Detta är den huvud företagskalendern. Alla händelser Från den här kalendern visas. Om du vill ange en kalender baserad på avdelningarna kan du lägga till avdelningen i Google Kalender ID.';

$lang['show_on_calendar']                  = 'Visa i Kalender';
$lang['show_invoices_on_calendar']         = 'Fakturor';
$lang['show_estimates_on_calendar']        = 'Offerter';
$lang['show_contracts_on_calendar']        = 'Kontrakt';
$lang['show_tasks_on_calendar']            = 'Uppgifter';
$lang['show_customer_reminders_on_calendar'] = 'Kundpåmminnelser';

# Leads
$lang['copy_custom_fields_convert_to_customer']                      = 'Kopiera egna fält till egna kunder';
$lang['copy_custom_fields_convert_to_customer_help']                 = 'Om någon av följande anpassade fält inte existerar för kunden, kommer det att automatiskt skapas med samma namn annars kommer bara värdet att kopieras Från ledningens profil.';
$lang['lead_profile']                                                = 'Profile';
$lang['lead_is_client']                                              = 'Kund';
$lang['leads_kan_ban_notes_title']                                   = 'Notering';
$lang['leads_email_integration_folder_no_encryption']                = 'Ingen kryptering';
$lang['leads_email_integration']                                     = 'Integrerad epost';
$lang['leads_email_active']                                          = 'Aktive';
$lang['leads_email_integration_imap']                                = 'IMAP Server';
$lang['leads_email_integration_email']                               = 'Epostadress (Logga in)';
$lang['leads_email_integration_password']                            = 'Lösenord';
$lang['leads_email_integration_default_source']                      = 'Standardkälla';
$lang['leads_email_integration_check_every']                         = 'Kolla varje (minut)';
$lang['leads_email_integration_default_assigned']                    = 'Ansvarig för nya kundämnen';
$lang['leads_email_encryption']                                      = 'Kryptering';
$lang['leads_email_integration_updated']                             = 'Email Integration Uppdaterad';
$lang['leads_email_integration_default_status']                      = 'Standard staus';
$lang['leads_email_integration_folder']                              = 'Mapp';
$lang['leads_email_integration_notify_when_lead_imported']           = 'Meddela när ett nytt kundämne har importerats';
$lang['leads_email_integration_only_check_unseen_emails']            = 'Kolla bara oöppnade maail';
$lang['leads_email_integration_only_check_unseen_emails_help']       = 'Ett snyggt skript kommer automatiskt ställa in mail till öppnat efter att du har sett det. Detta gjorde jag för att förhindra att kontrollera alla e-postmeddelanden om och om igen. Jag skulle inte rekommenderat att avmarkera det här alternativet om du har en massa e-post och du har ställt in en massal vidarebefordran till den e-post du skapa för kundämnen';
$lang['leads_email_integration_notify_when_lead_contact_more_times'] = 'Meddela om kundämne skickar e-post flera flera gånger';
$lang['leads_email_integration_test_connection']                     = 'Testa IMAP förbindelsen';
$lang['lead_email_connection_ok']                                    = 'IMAP Förbindelse är finemangs';
$lang['lead_email_connection_not_ok']                                = 'IMAP Förbindelsen är inte okej';
$lang['lead_email_activity']                                         = 'Email aktivitet';
$lang['leads_email_integration_notify_roles']                        = 'Olika roller att notifiera';
$lang['leads_email_integration_notify_staff']                        = 'Anställda som ska meddelas';
$lang['lead_public']                                                 = 'Publikt';
# Knowledge Base

$lang['kb_group_color']                = 'Färg';
$lang['kb_group_order']                = 'Order';
# Utilities - BULK PDF Exporter
$lang['bulk_pdf_exporter']             = 'Bulk PDF Export';
$lang['bulk_export_pdf_payments']      = 'Betalningar';
$lang['bulk_export_pdf_estimates']     = 'Offerter';
$lang['bulk_export_pdf_invoices']      = 'Fakturor';
$lang['bulk_pdf_export_button']        = 'Exportera';
$lang['bulk_pdf_export_select_type']   = 'Välj typ';
$lang['no_data_found_bulk_pdf_export'] = 'No data found for export';
$lang['bulk_export_status_all']        = 'Alla';
$lang['bulk_export_status']            = 'Status';
$lang['bulk_export_zip_payment_modes'] = 'Made payments by';
$lang['bulk_export_include_tag']       = 'inkluderar Tag';
$lang['bulk_export_include_tag_help']  = 'eq. Original eller kopia. Taggen kommer att matas ut i PDF-filen. Rekommenderas att använda endast en tagg';
# Predefined replies
$lang['no_predefined_replies_found']   = 'Inga fördefinierade svar hittades';
## Clients area
$lang['clients_contract_attachments']  = 'Bilagor';
# Backup
$lang['backup_type_full']              = 'Hel Backup';
$lang['backup_type_db']                = 'Databas Backup';

$lang['auto_backup_options_updated']     = 'Auto backup alternativ uppdateras';
$lang['auto_backup_every']               = 'Skapa en backup varje X dag';
$lang['auto_backup_enabled']             = 'Aktiv (Kräver Cron)';
$lang['auto_backup']                     = 'Auto backup';
$lang['backup_delete']                   = 'Backup Raderad';
$lang['create_backup']                   = 'Skapa Backup';
$lang['backup_success']                  = 'Backup är gjord';
$lang['utility_backup']                  = 'Databas Backup';
$lang['utility_create_new_backup_db']    = 'Skapa Databas Backup';
$lang['utility_backup_table_backupname'] = 'Backup';
$lang['utility_backup_table_backupsize'] = 'Backup storlek';
$lang['utility_backup_table_backupdate'] = 'Datum';
$lang['utility_db_backup_note']          = 'Obs: På grund av den tid och det minne som är tillgängligt för PHP är möjligheten att utföra backup begränsad, att säkerhetskopiera mycket stora databaser kan ibland inte vara möjligt. Om databasen är mycket stor kan du behöva säkerhetskopiera direkt från din SQL Server via kommandoraden , eller låta din server admin göra det åt dig om du inte har administratörsbehörighet..';

# Version 1.0.7
## Customers - portal
$lang['clients_nav_proposals'] = 'Anbud';
$lang['clients_nav_support']   = 'Support';
# General
$lang['more']                  = 'Mer';
$lang['add_item']              = 'Lägg till Produkt';
$lang['goto_admin_area']       = 'Gå till administrering';
$lang['click_here_to_edit']    = 'Klicka här för att ändra';
$lang['delete']                = 'Radera %s';
$lang['welcome_top']           = 'Välkommen %s';

# Customers
$lang['customer_permissions']         = 'Behörighet';
$lang['customer_permission_invoice']  = 'Fakturor';
$lang['customer_permission_estimate'] = 'Offerter';
$lang['customer_permission_proposal'] = 'Anbud';
$lang['customer_permission_contract'] = 'Kontrakt';
$lang['customer_permission_support']  = 'Support';


#Tasks
$lang['task_related_to'] = 'Relaterad till';

# Send file
$lang['custom_file_fail_send']    = 'Misslyckades skicka filen';
$lang['custom_file_success_send'] = 'Filen har skickats %s';
$lang['send_file_subject']        = 'E-post ämne';
$lang['send_file_email']          = 'E-post Adress';
$lang['send_file_message']        = 'Meddelande';
$lang['send_file']                = 'Skicka fil';
$lang['add_checklist_item']       = 'Punkt Checklista';
$lang['task_checklist_items']     = 'Pungter Checklist';

# Import
$lang['default_pass_clients_import'] = 'Standard, samma lösenord för alla kunder';
$lang['simulate_import']             = 'Simulera en Importering';
$lang['import_upload_failed']        = 'Gick inge bra att laddaup';
$lang['import_total_imported']       = 'Totalt importerade: %s';
$lang['import_leads']                = 'Importera kundämnen';
$lang['import_customers']            = 'Importera kunder';
$lang['choose_csv_file']             = 'Välj CSV Fil';
$lang['import']                      = 'Import';
$lang['lead_import_status']          = 'Status';
$lang['lead_import_source']          = 'Källa';

# Bulk PDF Export
$lang['bulk_export_pdf_proposals'] = 'Förslag';

# Invoices
$lang['delete_invoice'] = 'Radera';

# Calendar
$lang['calendar_lead_reminder'] = 'Kundämnes Påminnelse';

$lang['items']      = 'Produkter';
$lang['support']    = 'Support';
$lang['new_ticket'] = 'Nytt Ärende';

# Reminders
$lang['client_edit_set_reminder_title'] = 'Skapa en kundpåminnelse';
$lang['lead_set_reminder_title']        = 'Skapa en på minnelse för kundämne';
$lang['set_reminder_tooltip']           = 'Det här alternativet låter dig aldrig glömma något om dina kunder.';
$lang['client_reminders_tab']           = 'Påminnelse';
$lang['leads_reminders_tab']            = 'Påminnelser';

# Tickets
$lang['delete_ticket_reply']  = 'Radera svar';
$lang['ticket_priority_edit'] = 'Hantera Prioritet';
$lang['ticket_priority_add']  = 'Lägg till prioritet';
$lang['ticket_status_edit']   = 'Hantera supportärendets status';
$lang['ticket_service_edit']  = 'Redigera Support Servicen';
$lang['edit_department']      = 'Hantera avdelning';

# Expenses
$lang['edit_expense_category']                                    = 'Redigera kostnadskategori';
# Settings
$lang['customer_default_country']                                 = 'Default Country';
$lang['settings_sales_require_client_logged_in_to_view_estimate'] = 'Require client to be logged in to view estimate';
$lang['set_reminder']                                             = 'Set Reminder';
$lang['set_reminder_date']                                        = 'Date to be notified';
$lang['reminder_description']                                     = 'Set description';
$lang['reminder_notify_me_by_email']                              = 'Send also an email for this reminder';
$lang['reminder_added_successfully']                               = 'Reminder added successfully. You will be notified in time.';
$lang['reminder_description']                                     = 'Description';
$lang['reminder_date']                                            = 'Date';
$lang['reminder_staff']                                           = 'Remind';
$lang['reminder_is_notified']                                     = 'Is notified?';
$lang['reminder_is_notified_boolean_no']                          = 'Nej';
$lang['reminder_is_notified_boolean_yes']                         = 'Ja';
$lang['reminder_set_to']                                          = 'Set reminder to';
$lang['reminder_deleted']                                         = 'Reminder deleted successfully';
$lang['reminder_failed_to_delete']                                = 'Failed to delete the reminder';
$lang['show_invoice_estimate_status_on_pdf']                      = 'Show invoice/estimate status on PDF';
$lang['email_piping_default_priority']                            = 'Default Prioritering on piped ticket';
$lang['show_lead_reminders_on_calendar']                          = 'Lead Reminders';
$lang['tickets_piping']                                           = 'Email Piping';
$lang['email_piping_only_replies']                                = 'Only Replies Allowed by Email';
$lang['email_piping_only_registered']                             = 'Pipe Only on Registed Users';

# Estimates
$lang['view_estimate_as_client']         = 'Visa offert som kunden ser den';
$lang['estimate_mark_as']                = 'Markera som %s';
$lang['estimate_status_changed_success'] = 'Offertstatus ändrad';
$lang['estimate_status_changed_fail']    = 'Failed to change estimate status';
$lang['estimate_email_link_text']        = 'Visa offert';

# Proposals
$lang['proposal_to']                            = 'Företag / Namn';
$lang['proposal_date']                          = 'Datum';
$lang['proposal_address']                       = 'Adress';
$lang['proposal_phone']                         = 'Telefon';
$lang['proposal_email']                         = 'Epost';
$lang['proposal_date_created']                  = 'Datum skapat';
$lang['proposal_open_till']                     = 'Öppen Till';
$lang['proposal_status_open']                   = 'Öppet';
$lang['proposal_status_accepted']               = 'Accepterat';
$lang['proposal_status_declined']               = 'Avvisad';
$lang['proposal_status_sent']                   = 'Skickad';
$lang['proposal_expired']                       = 'Utgången';
$lang['proposal_subject']                       = 'Ämne';
$lang['proposal_total']                         = 'Total';
$lang['proposal_status']                        = 'Status';
$lang['proposals_list_all']                     = 'Alla';
$lang['proposals_leads_related']                = 'kundämnes Relaterat';
$lang['proposals_customers_related']            = 'Kund Relaterat';
$lang['proposal_related']                       = 'Relaterat';
$lang['proposal_for_lead']                      = 'Kundämne';
$lang['proposal_for_customer']                  = 'Kunder';
$lang['proposal']                               = 'Anbud';
$lang['proposal_lowercase']                     = 'Anbud';
$lang['proposals']                              = 'Anbud';
$lang['proposals_lowercase']                    = 'Anbud';
$lang['new_proposal']                           = 'Nytt Anbud';
$lang['proposal_currency']                      = 'Valuta';
$lang['proposal_allow_comments']                = 'Tillåt kommentarer';
$lang['proposal_allow_comments_help']           = 'Om du markerar detta alternativ. kommer kommentarer att tillåtas när dina kunder ser Anbudet.';

$lang['proposal_edit']                          = 'Redigera';
$lang['proposal_pdf']                           = 'PDF';
$lang['proposal_send_to_email']                 = 'Skicka till epost';
$lang['proposal_send_to_email_title']           = 'Skicka Anbud till epost';
$lang['proposal_attach_pdf']                    = 'Bifoga PDF';
$lang['proposal_preview_template']              = 'Förhandsgranska utseende';
$lang['proposal_view']                          = 'Visa Anbud';
$lang['proposal_copy']                          = 'Kopiera';
$lang['proposal_delete']                        = 'Radera';
$lang['proposal_to']                            = 'Till';
$lang['proposal_add_comment']                   = 'Lägg till kommentar';
$lang['proposal_sent_to_email_success']         = 'Förslag har skickats till eposten';
$lang['proposal_sent_to_email_fail']            = 'Gick inte så bra att skicka förslaget till epost';
$lang['proposal_copy_fail']                     = 'Misslyckades att kopiera anbudet';
$lang['proposal_copy_success']                  = 'Förslaget/anbudet kopierades';
$lang['proposal_status_changed_success']        = 'Anbuds status ändrades';
$lang['proposal_status_changed_fail']           = 'Nu gick det inte att ändra status på anbudet';
$lang['proposal_assigned']                      = 'Tilldelat';
$lang['proposal_comments']                      = 'Kommentarer';
$lang['proposal_convert']                       = 'Konvertera';
$lang['proposal_convert_estimate']              = 'Offert';
$lang['proposal_convert_invoice']               = 'Faktura';
$lang['proposal_convert_to_estimate']           = 'Konvertera till offert';
$lang['proposal_convert_to_invoice']            = 'Konvertera till faktura';
$lang['proposal_convert_to_lead_disabled_help'] = 'Du måste konvertera anbutet till kunden, för att skapa %s';
$lang['proposal_convert_not_related_help']      = 'Förslaget/anbudet måste vara relaterade till kunden för att konvertera till %s';
$lang['proposal_converted_to_estimate_success'] = 'Förslag/Anbud omvandlades till offert framgångsrikt';
$lang['proposal_converted_to_invoice_success']  = 'Förslag/Anbud omvandlades till faktura framgångsrikt';
$lang['proposal_converted_to_estimate_fail']    = 'Det gick inte att konvertera förslag till offert';
$lang['proposal_converted_to_invoice_fail']     = 'Det gick inte att konvertera förslag till faktura';

# Proposals - view proposal template
$lang['proposal_total_info']   = 'Total %s';
$lang['proposal_accept_info']  = 'Accepterar';
$lang['proposal_decline_info'] = 'Avböjt';
$lang['proposal_pdf_info']     = 'PDF';

# Customers Portal
$lang['customer_reset_action']            = 'Återställ';
$lang['customer_reset_password_heading']  = 'Återställ ditt lösenord';
$lang['customer_forgot_password_heading'] = 'Har du glömt ditt lösenord';
$lang['customer_forgot_password']         = 'Glömt lösenordet?';
$lang['customer_reset_password']          = 'Lösenord';
$lang['customer_reset_password_repeat']   = 'Repetera lösenordet';
$lang['customer_forgot_password_email']   = 'Epostadressen';
$lang['customer_forgot_password_submit']  = 'Skicka';
$lang['customer_ticket_subject']          = 'Ämne';

# Email templates
$lang['email_template_proposals_fields_heading'] = 'Anbud';

# Tasks
$lang['add_task_attachments']                 = 'Bilagor';
$lang['task_view_attachments']                = 'Bilagor';
$lang['task_view_description']                = 'Beskrivning';

# Customer Groups
$lang['customer_group_add_heading']  = 'Skapa en ny kundgrupp';
$lang['customer_group_edit_heading'] = 'Redigera kundgrupp';
$lang['new_customer_group']          = 'Ny kundgrupp';
$lang['customer_group_name']         = 'Namn';
$lang['customer_groups']             = 'Grupper';
$lang['customer_group']              = 'Kundgrupper';
$lang['customer_group_lowercase']    = 'kundgrupper';

$lang['customer_have_invoices_by']       = 'Innehåller fakturor efter status %s';
$lang['customer_have_estimates_by']      = 'Innehåller offerter efter status %s';
$lang['customer_have_contracts_by_type'] = 'Har kontraktstyp %s';

# Custom fields
$lang['custom_field_show_on_table']              = 'Visa i tabell';
$lang['custom_field_show_on_client_portal']      = 'Visa på kundportalen';
$lang['custom_field_show_on_client_portal_help'] = 'Om detta fält är markerat kommer det visas i menyn också';
$lang['custom_field_visibility']                 = 'Synlighet';

# Utilities # Menu Builder
$lang['utilities_menu_translate_name_help'] = 'Du kan lägg till här, och också översätta textsträngar. Så om personal / system har ett annat språk än standard svenska, så kommer det visas på det valda språket som personal önskar. Men om strängen inte fins i översättningsfilen kommer textsträngen du anger här att visas..';
$lang['utilities_menu_icon']                = 'Ikon';
$lang['active_menu_items']                  = 'Aktiva menyposter';
$lang['inactive_menu_items']                = 'Inaktiva menyposter';
$lang['utilities_menu_permission']          = 'Rättigheter';
$lang['utilities_menu_url']                 = 'URL';
$lang['utilities_menu_name']                = 'Namn';
$lang['utilities_menu_save']                = 'Spara menyn';

# Knowledge Base
$lang['view_articles_list']     = 'Visa artikel';
$lang['view_articles_list_all'] = 'Alla artiklar';
$lang['als_add_article']        = 'Lägg till artikel';
$lang['als_all_articles']       = 'Artiklar';
$lang['als_kb_groups']          = 'Grupper';

# Customizer Menu
$lang['menu_builder']            = 'Menyinställningar';
$lang['main_menu']               = 'Huvudmeny';
$lang['setup_menu']              = 'Inställnings meny';
$lang['utilities_menu_url_help'] = '%s URL,en bifigas automatiskt';

# Spam Filter - Tickets
$lang['spam_filters']                 = 'Spam Filter';
$lang['spam_filter']                  = 'Spam Filter';
$lang['new_spam_filter']              = 'Nytt Spam Filter';
$lang['spam_filter_blocked_senders']  = 'Blockera avsändaren';
$lang['spam_filter_blocked_subjects'] = 'Blockera ämne';
$lang['spam_filter_blocked_phrases']  = 'Blockera fraser';
$lang['spam_filter_content']          = 'Innehåll';
$lang['spamfilter_edit_heading']      = 'Redigera Spam Filter';
$lang['spamfilter_add_heading']       = 'Lägg Spam Filter';
$lang['spamfilter_type']              = 'Typ av filter';
$lang['spamfilter_type_subject']      = 'Ämne';
$lang['spamfilter_type_sender']       = 'Avsändare';
$lang['spamfilter_type_phrase']       = 'Fras';

# Tickets
$lang['block_sender']               = 'Blockera avsändare';
$lang['sender_blocked']             = 'Avsändare blockerad';
$lang['sender_blocked_successfully'] = 'Avsändare har blockerats';
$lang['ticket_date_created']        = 'Datum Skapades';

#KB
$lang['edit_kb_group']             = 'Hantera grupp';
# kundämnen
$lang['edit_source']               = 'Hantera källa';
$lang['edit_status']               = 'Hantera status';
# Contacts
$lang['contract_type_edit']        = 'Hantera kontraktstyp';
# Reports
$lang['report_by_customer_groups'] = 'Totalt värde på kundGrupper';
#Utilities
$lang['ticket_pipe_log']           = 'Support pipline log';
$lang['ticket_pipe_name']          = 'Från Name';
$lang['ticket_pipe_email_to']      = 'Till';
$lang['ticket_pipe_email']         = 'Från Epost';
$lang['ticket_pipe_subject']       = 'Ämne';
$lang['ticket_pipe_message']       = 'Meddelande';
$lang['ticket_pipe_date']          = 'Datum';
$lang['ticket_pipe_status']        = 'Status';

# Home
$lang['home_latest_activity']       = 'Senaste aktivitet';
$lang['home_my_tasks']              = 'Mina uppgifter';
$lang['home_latest_activity']       = 'Senaste aktivitet';
$lang['home_my_todo_items']         = 'Mina Att göra uppgifter';
$lang['home_widget_view_all']       = 'Visa alla';
$lang['home_stats_full_report']     = 'Fullständig rapport';

# Validation

$lang['form_validation_required']    = 'Detta {field} fältet är obligatoriskt.';
$lang['form_validation_valid_email'] = 'Detta {field} fältet måste innehålla en giltig e-postadress.';
$lang['form_validation_matches']     = 'Detta {field} fältet matchar inte {param} fältet.';
$lang['form_validation_is_unique']   = 'Detta {field} fältet måste innehålla ett unikt värde.';

# Version 1.0.8
# Notifications & kundämnen/Estimates/Invoices Activity Log
$lang['not_event'] = 'Kalenderhändelser idag - %s ...';
$lang['not_event_public'] = 'Offentliga händelse börjar idag - %s ...';
$lang['not_contract_expiry_reminder'] = 'Påminnelse att kontraktet löper ut  - %s ...';
$lang['not_recurring_expense_cron_activity_heading'] = 'Återkommande kostnader Cron jobb aktivitet ';
$lang['not_recurring_invoices_cron_activity_heading'] = 'Återkommande fakturor Cron Job aktivitet';
$lang['not_recurring_total_renewed'] = 'totalt förnyad: %s';
$lang['not_recurring_expenses_action_taken_from'] = 'Åtgärder som vidtagits Från återkommande kostnader';
$lang['not_invoice_created'] = 'Faktura skapad:';
$lang['not_invoice_renewed'] = 'förnyad Faktura:';
$lang['not_expense_renewed'] = 'Förnyad kostnad:';
$lang['not_invoice_sent_to_customer'] = 'Faktura skickad till kund: %s';
$lang['not_invoice_sent_yes'] = 'Ja';
$lang['not_invoice_sent_not'] = 'Nej';
$lang['not_action_taken_from_recurring_invoice'] = 'Åtgärder som vidtagits från återkommande faktura:';
$lang['not_new_reminder_for'] = 'Ny påminnelse för %s';
$lang['not_received_one_or_more_messages_lead'] = 'Fått ett till e-postmeddelande från kundämne';
$lang['not_received_lead_imported_email_integration'] = 'Kundämne Importerat från epost-integration';
$lang['not_lead_imported_attachment'] = 'Importerade bifogad fil från e-post';
$lang['not_estimate_status_change'] = 'bifogad fil Importerad från e-post';
$lang['not_estimate_status_updated'] = 'Offertstatus uppdaterad: Från: %s to %s';
$lang['not_goal_message_success'] = 'Grattis! Vi har uppnått nya mål i företaget :) .<br /> Typ av mål: %s
<br />Uppfylda mål: %s
<br />totalt prestation: %s
<br />Startdatum: %s
<br />Slutdatum: %s';
$lang['not_assigned_lead_to_you'] = 'tilldelade kundämnen %s till dig min vän';
$lang['not_lead_activity_assigned_to'] = '%s tilldelat till %s';
$lang['not_lead_activity_attachment_deleted'] = 'Raderade bilagor/filer';
$lang['not_lead_activity_status_updated'] = '%s uppdaterade staus för kundämnet från %s till %s';
$lang['not_lead_activity_contacted'] = '%s kontaktade detta kundämne den %s';
$lang['not_lead_activity_created'] = '%s skapade kundämne';
$lang['not_lead_activity_marked_lost'] = 'Markerad som förlorade';
$lang['not_lead_activity_unmarked_lost'] = 'Avmarkera som förlorad';
$lang['not_lead_activity_marked_junk'] = 'Markera som skräp';
$lang['not_lead_activity_unmarked_junk'] = 'Avmarkera som skräp';
$lang['not_lead_activity_added_attachment'] = 'Bilaga lades till';
$lang['not_lead_activity_converted_email'] = 'Kundämnets epost har ändrats. Första e-postadress var: %s och tillsattes som kund med e-post %s';
$lang['not_lead_activity_converted'] = '%s Konvertera detta kundämne till en riktig Kund';
$lang['not_liked_your_post'] = '%s gillade ditt inlägg %s ...';
$lang['not_commented_your_post'] = '%s kommenterade ditt inlägg %s ...';
$lang['not_liked_your_comment'] = '%s gillade din kommentar %s ...';
$lang['not_proposal_assigned_to_you'] = 'Förslag har tilldelats dig - %s ...';
$lang['not_proposal_comment_from_client'] = 'Ny kommentar från kunden på förslag %s ...';
$lang['not_proposal_proposal_accepted'] = 'Förslaget har accepterats';
$lang['not_proposal_proposal_declined'] = 'Förslaget har avböjts';
$lang['not_task_added_you_as_follower'] = 'har lagt till dig som följare på uppgiften %s ...';
$lang['not_task_added_someone_as_follower'] = 'lagts till %s som följare till uppgiften %s ...';
$lang['not_task_added_himself_as_follower'] = 'lagt till sig själv som följare på uppgiften %s ...';
$lang['not_task_assigned_to_you'] = 'tilldelat en uppgift till dig %s ...';
$lang['not_task_assigned_someone'] = 'tilldelade %s till uppgift %s ...';
$lang['not_task_will_do_user'] = 'kommer att göra uppgiften %s ...';
$lang['not_task_new_attachment'] = 'Ny bilaga har lagts till';
$lang['not_task_marked_as_complete'] = 'markera uppgift som klar %s';
$lang['not_task_unmarked_as_complete'] = 'avmarkera uppgift som klar %s';
$lang['not_ticket_assigned_to_you'] = 'Supportärende tilldelades dig - %s ...';
$lang['not_ticket_reassigned_to_you'] = 'Supportärende har åter tilldelats dig - %s ...';
$lang['not_estimate_customer_accepted'] = 'Grattis! Kunden har accepteras offerten med nummer %s Nu kör vi!';
$lang['not_estimate_customer_declined'] = 'Kunden avböjde offerten med nummer %s Inget att deppa för.';
$lang['estimate_activity_converted'] = 'omvandlas denna offert till faktura.<br /> %s';
$lang['estimate_activity_created'] = 'Skapade offert';
$lang['invoice_estimate_activity_removed_item'] = 'tag bort varan <b>%s</b>';
$lang['estimate_activity_number_changed'] = 'Offertnumret har ändrats från %s till %s';
$lang['invoice_activity_number_changed'] = 'Fakturanummret har ändrats från %s till %s';
$lang['invoice_estimate_activity_updated_item_short_description'] = 'uppdaterade varuposten kort beskrivning från %s till %s';
$lang['invoice_estimate_activity_updated_item_long_description'] = 'uppdaterade varuposten lång beskrivning från <b>%s</b> till <b>%s</b>';
$lang['invoice_estimate_activity_updated_item_rate'] = 'Uppdaterade varupriset från %s till %s';
$lang['invoice_estimate_activity_updated_qty_item'] = 'uppdaterade varumängd<b>%s</b> från %s till %s';
$lang['invoice_estimate_activity_added_item'] = 'lade till ny produkt <b>%s</b>';
$lang['invoice_estimate_activity_sent_to_client'] = 'skickade offert till kund';
$lang['estimate_activity_client_accepted_and_converted'] = 'Kunden accepterat  denna offert. Offerten omvandlas till faktura med nummer %s';
$lang['estimate_activity_client_accepted'] = 'Kunden accepterade denna offert';
$lang['estimate_activity_client_declined'] = 'Kunden avböjde denna offert';
$lang['estimate_activity_marked'] = 'markera offert som %s';
$lang['invoice_activity_status_updated'] = 'Fakturastatus uppdateras från %s till %s';
$lang['invoice_activity_created'] = 'Skapa faktura';
$lang['invoice_activity_from_expense'] = 'Konverterad ftill faktura från kostnader';
$lang['invoice_activity_recurring_created'] = '[Återkommande] Faktura skapad av CRON';
$lang['invoice_activity_recurring_from_expense_created'] = '[Faktura från kostnader] Faktura skapad av CRON';
$lang['invoice_activity_sent_to_client_cron'] = 'Faktura skickad till kunder av CRON';
$lang['invoice_activity_sent_to_client'] = 'Skickade fakturor till kund';
$lang['invoice_activity_marked_as_sent'] = 'Markera faktura som skickad';
$lang['invoice_activity_payment_deleted'] = 'Raderad Betalning för fakturaBetalning #%s, total summa %s';
$lang['invoice_activity_payment_made_by_client'] = 'Kund gjorde Betalning for the invoice from total <b>%s</b> - %s';
$lang['invoice_activity_payment_made_by_staff'] = 'Regestrerade Betalningar från total <b>%s</b> - %s';
$lang['invoice_activity_added_attachment'] = 'La till bilaga';

# Navigation
$lang['top_search_placeholder'] = 'Sök...';

# Staff
$lang['staff_profile_inactive_account'] = 'Denna anstäldas konto är inaktivt';

# Estimates
$lang['copy_estimate'] = 'Kopiera Offert';
$lang['estimate_copied_successfully'] = 'Kopierade Offert';
$lang['estimate_copied_fail'] = 'Kunde inte kopiera Offert';

# Tasks
$lang['tasks_view_assigned_to_user'] = 'Mina uppgifter jag tilldelats';
$lang['tasks_view_follower_by_user'] = 'Uppgifter jag följer';
$lang['no_tasks_found'] = 'Ingen uppgift';

# kundämnen
$lang['leads_dt_datecreated'] = 'Skapat';
$lang['leads_sort_by'] = 'Sortera som';
$lang['leads_sort_by_datecreated'] = 'Datum skapat';
$lang['leads_sort_by_kanban_order'] = 'KanBan Sortera';

# Proposals
$lang['proposal_items_name'] = 'Produkt';
$lang['proposal_items_description'] = 'Beskrivning';
$lang['proposal_items_qty'] = 'Antal';
$lang['proposal_items_rate'] = 'Taxa';
$lang['proposal_items_tax'] = 'Moms';
$lang['proposal_items_amount'] = 'Summa';

# Authentication
$lang['check_email_for_resetting_password'] = 'Kontrollera din e-post för ytterligare instruktioner att återställa ditt lösenord';
$lang['inactive_account'] = 'Inaktivt konto';
$lang['error_setting_new_password_key'] = 'Fel! när nytt lösenord skulle skapas';
$lang['password_reset_message'] = 'Ditt lösenord har blivit återställt. Vänligen logga in nu!';
$lang['password_reset_message_fail'] = 'Fel när du återställde lösenordet. Försök igen.';
$lang['password_reset_key_expired'] = 'Lösenords Nyckeln har gått ut eller så är det en ogiltig användare';
$lang['admin_auth_reset_pass_repeat'] = 'Repetera lösenord';
$lang['auth_reset_pass_email_not_found'] = 'Hittade inte eposten';
$lang['auth_reset_password_submit'] = 'Återställ lösenord';

# Settings
$lang['settings_amount_to_words'] = 'Belopp med ord';
$lang['settings_amount_to_words_desc'] = 'Skriv ut tottala summan som ord i Fakturor/Offerter';
$lang['settings_amount_to_words_enabled'] = 'Aktivera';
$lang['settings_total_to_words_lowercase'] = 'Siffror till ord till små bokstäver';
$lang['settings_show_tax_per_item'] = 'Visa Moms per vara (Faktura/Offert)';

# Reports
$lang['report_sales_months_three_months'] = 'Senaste 3 månader';
$lang['report_invoice_number'] = 'Faktura #';
$lang['report_invoice_customer'] = 'Kund';
$lang['report_invoice_date'] = 'Datum';
$lang['report_invoice_duedate'] = 'Förfallodatum';
$lang['report_invoice_amount'] = 'Summa';
$lang['report_invoice_amount_with_tax'] = 'Summa med moms';
$lang['report_invoice_amount_open'] = 'Amount open';
$lang['report_invoice_status'] = 'Status';
$lang['report_invoice_total_amount_with_tax'] = 'Totalsumma med moms';
$lang['report_invoice_total_amount_without_tax'] = 'Totalsumma utan moms';
$lang['report_invoice_total_taxes'] = 'Moms';

#Version 1.0.9

# Home stats
$lang['home_stats_by_project_status'] = 'Projektstatus översikt';
$lang['home_invoice_overview'] = 'FAKTURAÖVERSIKT';
$lang['home_estimate_overview'] = 'OFFERTÖVERSIKT';
$lang['home_proposal_overview'] = 'ÖVERSIKT FÖRSLAG';
$lang['home_lead_overview'] = 'KUNDÄMNES SÖVERSIKT';

$lang['home_my_projects'] = 'Mina projekt';
$lang['home_announcements'] = 'Meddelande';

# Settings
$lang['settings_leads_kanban_limit'] = 'Begränsa kundämne rader per status, KanBan';
$lang['settings_group_misc'] = 'Diverse';
$lang['show_projects_on_calendar'] = 'Projekt';
$lang['settings_media_max_file_size_upload'] = 'Största filstorlek att ladda upp i Media (MB)';
$lang['settings_client_staff_add_edit_delete_task_comments_first_hour'] = 'Låt kunden / personalen , lägga till / redigera uppgifts kommentarer under endast den första timmen (administratörer tillämpas inte)';

# Email templates
$lang['email_template_only_domain_email'] = 'Endast epost i Domänen';

# Meddelande
$lang['dismiss_announcement'] = 'Avfärda Meddelande';
$lang['dismiss_announcement'] = 'Avfärda Meddelande';
$lang['announcement_from'] = 'Från:';
$lang['announcement_date'] = 'Skickat datum: %s';
$lang['announcement_not_found'] = 'Meddelande ej funnen';
$lang['announcements_recent'] = 'Nyligt Meddelande';

# General
$lang['zip_invoices'] = 'Zippa fakturor';
$lang['zip_estimates'] = 'Zip Estimates';
$lang['zip_payments'] = 'Zip Betalnings';
$lang['setup_help'] = '--';
$lang['clients_list_company'] = 'Företag';
$lang['dt_button_export'] = 'Exportera';

$lang['dt_entries'] = 'poster';
$lang['invoice_total_paid'] = 'Totalt betalt';
$lang['invoice_amount_due'] = 'Belopp att betala';
$lang['report_invoice_discount'] = 'Rabatter';

# Calendar
$lang['calendar_project'] = 'Projekt';

# kundämnen
$lang['leads_import_assignee'] = 'Tilldelad';
$lang['customer_from_lead'] = 'Kunder Från %s';
$lang['lead_kan_ban_attachments'] = 'Bilagor: %s';
$lang['leads_sort_by_lastcontact'] = 'Senaste kontakt';

# Tasks
$lang['task_comment_added'] = 'Kommentar har lagts till';
$lang['task_duedate'] = 'Slutdatum';
$lang['task_view_comments'] = 'Kommentarer';
$lang['task_comment_updated'] = 'Kommentar uppdaterad';
$lang['task_visible_to_client'] = 'Synlig för kund';
$lang['task_hourly_rate'] = 'Timtaxa';
$lang['hours'] = 'Timmar';
$lang['seconds'] = 'Sekunder';
$lang['minutes'] = 'Minuter';
$lang['task_start_timer'] = 'Starta Timer';
$lang['task_stop_timer'] = 'Stoppa Timer';
$lang['task_billable_help'] = 'Om du markerar debiterbar uppgift kommer den att visas när du skapar fakturan som en artikel / objekt';
$lang['task_billable'] = 'Debiterbar';
$lang['task_billable_yes'] = 'Debiterbar';
$lang['task_billable_no'] = 'Ej Debiterbar';
$lang['task_billed'] = 'Fakturerad';
$lang['task_billed_yes'] = 'Fakturerad';
$lang['task_billed_no'] = 'Ej fakturerad';
$lang['task_user_logged_time'] = 'Din loggade tid:';
$lang['task_total_logged_time'] = 'Totalt loggad tid:';
$lang['task_is_billed'] = 'Denna uppgift är fakturerad på faktura med nummer %s';
$lang['task_statistics'] = 'Statestik';
$lang['task_milestone'] = 'Milsten';

# Tickets
$lang['ticket_message_updated_successfully'] = 'Meddelande uppdaterats';

# Invoices
$lang['invoice_task_item_project_tasks_not_included'] = 'Projekt uppgifter är inte inkluderade i denna lista.';
$lang['show_quantity_as'] = 'Visa antal som:';
$lang['quantity_as_qty'] = 'Antal';
$lang['quantity_as_hours'] = 'Timmar';
$lang['invoice_table_hours_heading'] = 'Timmar';
$lang['bill_tasks'] = 'Fakturera uppgifter';
$lang['invoice_estimate_sent_to_email'] = 'Epost till';

# Estimates
$lang['estimate_table_hours_heading'] = 'Timmar';

# General
$lang['is_customer_indicator'] = 'Kunder';
$lang['print']            = 'Skriv ut';
$lang['customer_permission_projects']            = 'Projekt';
$lang['no_timers_found']            = 'Ingen startad timer hittades';
$lang['timers_started_confirm_logout']            = 'En startat timer hittades!<br /><br />Är du säker du vill logga ut utan att stoppa timern?';
$lang['confirm_logout']            = 'Logga ut';
$lang['timer_top_started']            = 'Startades %s';

# Projects
$lang['cant_change_billing_type_billed_tasks_found'] = 'Du kan inte ändra faktureringssätt. Fakturerade aktiviteter hittades för detta projekt.';
$lang['project_customer_permission_warning'] = 'Systemet indikerade att den primära kontaktpersonen inte har rättigheter för projektet. Den primära kontakten kommer inte att kunna se projektet. Överväg att ge rättigheter till kunden i kontaktprofilen så kunden kan se projektet.';
$lang['project_invoice_timesheet_start_time'] = 'Starttid: %s';
$lang['project_invoice_timesheet_end_time'] = 'Sluttid: %s';
$lang['project_invoice_timesheet_total_logged_time'] = 'Loggad tid: %s';
$lang['project_view_as_client'] = 'Titta på projektet som kunden ser det';
$lang['project_mark_all_tasks_as_completed'] = 'Markera alla uppgifter som slutförda  och stoppa alla timers (Ingen notifiering skickas till projektmedlemmar )';
$lang['project_not_started_status_tasks_timers_found'] = 'Uppgiftstimer hittades för detta projekt, men projektet är med status Inte startad. Rekommenderas att ändra projektstatus  till pågående';
$lang['project_status'] = 'Status';
$lang['project_status_1'] = 'Ej startat';
$lang['project_status_2'] = 'Pågående';
$lang['project_status_3'] = 'Pausad';
$lang['project_status_4'] = 'Klart';

$lang['project_file_uploaded_by_customer'] = 'Kunder';
$lang['project_file_dateadded'] = 'Uppladdat den';
$lang['project_file_filename'] = 'Filnamn';
$lang['project_file__filetype'] = 'Filtyp';
$lang['project_file_visible_to_customer'] = 'Synlig för kunder';
$lang['project_file_uploaded_by'] = 'Uppladdat av';
$lang['edit_project'] = 'Redigera projekt';
$lang['copy_project'] = 'Kopiera projekt';
$lang['delete_project'] = 'Radera projekt';
$lang['project_task_assigned_to_user'] = 'Uppgift tilldelad dig';
$lang['seconds'] = 'Sekunder';
$lang['hours'] = 'Timmar';
$lang['minutes'] = 'Minuter';
$lang['project']                 = 'Projekt';
$lang['project_lowercase']       = 'Projekt';
$lang['projects']                = 'Projekt';
$lang['projects_lowercase']      = 'Projekt';
$lang['project_settings']      = 'Projekt inställningar';
$lang['project_invoiced_successfully']             = 'Projekt har Fakturerades';
$lang['new_project']             = 'Nytt Projekt';
$lang['project_files']            = 'Filer';
$lang['project_activity']            = 'Aktivitet';
$lang['project_name']            = 'Projekt Namn';
$lang['project_description']            = 'Projekt Beskrivning';
$lang['project_customer']            = 'Kund';
$lang['project_start_date']            = 'Startdatum';
$lang['project_datecreated']            = 'Skapat datum';
$lang['project_deadline']            = 'Deadline';
$lang['project_billing_type']            = 'faktureringssätt';
$lang['project_billing_type_fixed_cost']            = 'Fast kostnad';
$lang['project_billing_type_project_hours']            = 'Projekt Timmar';
$lang['project_billing_type_project_task_hours']            = 'Uppgiftens timmar';
$lang['project_billing_type_project_task_hours_hourly_rate']            = 'Baserat på uppgiften timtaxa';
$lang['project_rate_per_hour']            = 'Timmkostnad';
$lang['project_total_cost']            = 'totalt Pris';
$lang['project_members']            = 'Projekt Medlemmar';
$lang['project_member_removed']     = 'Projekt medlem borttagen';
$lang['project_overview']           = 'Projektöversikt';
$lang['project_gant']            = 'Gantt Vy';
$lang['project_milestones']            = 'Milsten';
$lang['project_milestone_order']            = 'Ordning';
$lang['project_milestone_duedate_passed']            = 'Förfallodatum passerat';
$lang['record_timesheet']            = 'tidrapport';
$lang['new_milestone']            = 'Ny milsten';
$lang['edit_milestone']            = 'Hantera milsten';
$lang['milestone_name']            = 'Namn';
$lang['milestone_due_date']            = 'Slutdatum';
$lang['project_milestone']            = 'Milstene';
$lang['project_notes']            = 'Notering';
$lang['project_timesheets']            = 'tidrapporter';
$lang['project_timesheet']            = 'tidrapport';
$lang['milestone_total_logged_time']            = 'Loggad tid';
$lang['project_overview_total_logged_hours']            = 'Totalt loggade timmar';
$lang['milestones_uncategorized']            = 'Okategoriserade';
$lang['milestone_no_tasks_found']            = 'Ingen uppgift hittades';
$lang['project_copied_successfully']            = 'Projektdata kopierats';
$lang['failed_to_copy_project']            = 'Misslyckades att kopiera projekt';
$lang['copy_project_task_include_check_list_items']            = 'Kopiera checkliste post';
$lang['copy_project_task_include_assignees']            = 'Kopiera samma tilldelade';
$lang['copy_project_task_include_followers']            = 'Kopiera samma följare';

$lang['project_days_left']            = 'Dagar kvar';
$lang['project_open_tasks']            = 'Öppna uppgifter';
$lang['timesheet_stop_timer']            = 'Stoppa timern';
$lang['failed_to_add_project_timesheet_end_time_smaller']            = 'Det gick inte att lägga till tidrapport. Sluttid är mindre sedan starttid';
$lang['project_timesheet_user']            = 'Medlem';
$lang['project_timesheet_start_time']            = 'Starta Timer';
$lang['project_timesheet_end_time']            = 'Avsluta timer';
$lang['project_timesheet_time_spend']            = 'Tid spenderad';
$lang['project_timesheet_task']            = 'Uppgift';
$lang['project_invoices']                = 'Faktura';
$lang['total_logged_hours_by_staff']            = 'Totalt Loggad Tid';
$lang['invoice_project']            = 'Projektfaktura';
$lang['invoice_project_info']            = 'Projektfakture Info';
$lang['invoice_project_data_single_line']            = 'En rad';
$lang['invoice_project_data_task_per_item']            = 'Uppgift per artikel';
$lang['invoice_project_data_timesheets_individually']            = 'Alla tidrapporter individuellt';
$lang['invoice_project_item_name_data']            = 'Artikelnamn';
$lang['invoice_project_description_data']            = 'Beskrivning';
$lang['invoice_project_projectname_taskname']            = 'Projekt namn + namn på uppgiften';
$lang['invoice_project_all_tasks_total_logged_time']            = 'Alla uppgifter + totalt loggad tid per uppgift';
$lang['invoice_project_project_name_data']            = 'Projekt namn';
$lang['invoice_project_timesheet_individually_data']            = 'tidrapport start tid + slut tid + totalt loggad tid';
$lang['invoice_project_total_logged_time_data']            = 'Totalt loggad tid';

$lang['project_allow_client_to'] = 'Tillåt kunder att %s';
$lang['project_setting_view_task_attachments'] = 'Visa uppgifts bilagor';
$lang['project_setting_view_task_checklist_items'] = 'Visa checklista för uppgiften';
$lang['project_setting_upload_files'] = 'Ladda upp fil';
$lang['project_setting_view_task_comments'] = 'Visa kommentarer på uppgiften';
$lang['project_setting_upload_on_tasks'] = 'Ladda upp bilaga på uppgiften';
$lang['project_setting_view_task_total_logged_time'] = 'Visa all loggad tid för uppgiften';
$lang['project_setting_open_discussions'] = 'Öppna diskussion';
$lang['project_setting_comment_on_tasks'] = 'Kommenter på projektuppgift ';
$lang['project_setting_view_tasks'] = 'Visa uppgift';
$lang['project_setting_view_milestones'] = 'Visa milsten';
$lang['project_setting_view_gantt'] = 'Visa Gantt';
$lang['project_setting_view_timesheets'] = 'Visa tidrapporter';
$lang['project_setting_view_activity_log'] = 'Visa aktivitetslogg';
$lang['project_setting_view_team_members'] = 'Visa medlemmar';

$lang['project_discussion_visible_to_customer_yes']                 = 'Synlig';
$lang['project_discussion_visible_to_customer_no']                 = 'Ej synlig';

$lang['project_discussion_posted_on']                 = 'Postat den %s';
$lang['project_discussion_posted_by']                 = 'Postat av %s';
$lang['project_discussion_failed_to_delete']                 = 'Gick inte ta bort diskussion';
$lang['project_discussion_deleted']                 = 'Diskussionen raderad';
$lang['project_discussion_no_activity']                 = 'Ingen aktivitet';
$lang['project_discussion']                 = 'Diskussion';
$lang['project_discussions']                 = 'Diskussions';
$lang['edit_discussion'] = 'Skapa diskussion';
$lang['new_project_discussion'] = 'Skapa en projektdiskussion';
$lang['project_discussion_subject'] = 'Ämne';
$lang['project_discussion_description'] = 'Beskrivning';
$lang['project_discussion_show_to_customer'] = 'Synlig för kund';
$lang['project_discussion_total_comments'] = 'Kommentarer Totalt';
$lang['project_discussion_last_activity'] = 'Senaste aktivitet';
$lang['discussion_add_comment'] = 'Lägg till kommentar';
$lang['discussion_newest'] = 'Nyast';
$lang['discussion_oldest'] = 'Äldst';
$lang['discussion_attachments'] = 'Bilagor';
$lang['discussion_send'] = 'Skicka';
$lang['discussion_reply'] = 'Svara';
$lang['discussion_edit'] = 'Redigera';
$lang['discussion_edited'] = 'Modifiera';
$lang['discussion_you'] = 'Du';
$lang['discussion_save'] = 'Spara';
$lang['discussion_delete'] = 'Radera';
$lang['discussion_view_all_replies'] = 'Visa alla svar';
$lang['discussion_hide_replies'] = 'Dölj svar';
$lang['discussion_no_comments'] = 'Ingen kommentar';
$lang['discussion_no_attachments'] = 'Ingen bilaga';
$lang['discussion_attachments_drop'] = 'Dra och släpp för att ladda upp filen';
$lang['project_note'] = 'Notering';
$lang['project_note_private'] = 'Privat notering';
$lang['project_save_note'] = 'Spara notering';

# Project Activity
$lang['project_activity_created'] = 'Skapade nytt projekt';
$lang['project_activity_updated'] = 'Uppdaterade projekt';
$lang['project_activity_removed_team_member'] = 'Gruppmedlem togs bort';
$lang['project_activity_added_team_member'] = 'Ny gruppmedlem har lagts till';
$lang['project_activity_marked_all_tasks_as_complete'] = 'Markera alla uppgifter som klara';
$lang['project_activity_recorded_timesheet'] = 'registreras tidrapport';
$lang['project_activity_task_name'] = 'Uppgift:';
$lang['project_activity_deleted_discussion'] = 'Raderade diskussin';
$lang['project_activity_created_discussion'] = 'Skapade diskussion';
$lang['project_activity_updated_discussion'] = 'Uppdaterad diskussion';
$lang['project_activity_commented_on_discussion'] = 'Kommenterade i diskussionen';
$lang['project_activity_deleted_discussion_comment'] = 'Raderade diskussionskommentarer';
$lang['project_activity_deleted_milestone'] = 'Raderad milsten';
$lang['project_activity_updated_milestone'] = 'Uppdaterad milsten';
$lang['project_activity_created_milestone'] = 'Skapade ny milsten';
$lang['project_activity_invoiced_project'] = 'Fakturerade projekt';
$lang['project_activity_task_marked_complete'] = 'Uppgift markerad som klar';
$lang['project_activity_task_unmarked_complete'] = 'Uppgift avmarkerad som klare';
$lang['project_activity_task_deleted'] = 'Uppgift raderad';
$lang['project_activity_new_task_comment'] = 'Kommenterade på uppgiften';
$lang['project_activity_new_task_attachment'] = 'Uppladdade bilagor för uppgiften';
$lang['project_activity_new_task_assignee'] = 'Lagt till nya uppgiftsinnehavare';
$lang['project_activity_task_assignee_removed'] = 'tag bort uppgiftsinnehavare';
$lang['project_activity_task_timesheet_deleted'] = 'Tog bort tidrapport';
$lang['project_activity_uploaded_file'] = 'Ladda upp en projektfil';
$lang['project_activity_status_updated'] = 'Uppdatera projektstatus';
$lang['project_activity_visible_to_customer'] = 'Synlig för kunden';
$lang['project_activity_project_file_removed'] = 'Ta bort projekt fil';

# Notifications - DEPRECED - THESE notifications are depreced and will be removed in further released dont translate them
$lang['not_customer_uploaded_project_file'] = 'Ny fil har laddats upp';
$lang['not_customer_created_new_project_discussion'] = 'Ny projektdiskussion skapad';
$lang['not_customer_commented_on_project_discussion'] = 'Ny kommentar i projektdiskussionen';

# Customers area
$lang['clients_my_estimates'] = 'Mina offerter';
$lang['client_no_reply'] = 'Inget svar';
$lang['clients_nav_projects'] = 'Projekt';
$lang['clients_my_projects'] = 'Mina projekt';
$lang['client_profile_image'] = 'Profil bild';

/////
$lang['sales_report_cancelled_invoices_not_included'] = 'Avbrutna fakturor är undantagna Från rapporten';
$lang['invoices_merge_cancel_merged_invoices'] = 'Markera sammanslagna fakturor som avbrutna i stället för att ta bort dessa';
$lang['invoice_marked_as_cancelled_successfully'] = 'Fakturan markerad som avbruten';
$lang['invoice_unmarked_as_cancelled'] = 'Fakturan avmarkerad som avbruten (Nu aktiv)';

$lang['tasks_reminder_notification_before'] = 'Påminnelse för deadline, påminn (dagar) före';
$lang['not_task_deadline_reminder'] = 'Uppgiftens deadline närmar sig... Får du lägga på ett kol';
$lang['dt_length_menu_all'] = 'Alla';
$lang['task_not_finished'] = 'Ej klar';
$lang['task_billed_cant_start_timer'] = 'Uppgift redan fakturerad. Timer kan inte startas';
$lang['invoice_task_billable_timers_found'] = 'Startade timers funna';
$lang['project_timesheet_not_updated'] = 'tidrapport påverkas inte.';
$lang['project_invoice_task_no_timers_found'] = 'Inga timers hittades för denna uppgift';
$lang['invoice_project_tasks_not_started'] = 'ännu inte påbörjat | Start datum: %s';
$lang['invoice_project_see_billed_tasks'] = 'Se uppgifter som kommer att faktureras på denna faktura';
$lang['invoice_project_all_billable_tasks_marked_as_finished'] = 'Alla fakturerade uppgifter kommer att markeras som färdiga';
$lang['invoice_project_nothing_to_bill'] = 'Inga uppgifter att fakturera. Känn dig lite wild and crazy :) att lägga till vad du vill i fakturaposten.';
$lang['invoice_project_start_date_tasks_not_passed'] = 'Uppgifter med framtida startdatum kan inte faktureras';
$lang['invoice_project_stop_all_timers'] = 'Stoppa alla timers';
$lang['invoice_project_stop_billable_timers_only'] = 'Stoppa endast debiterbara timers';
$lang['project_tasks_total_timers_stopped'] = 'Stoppade totalt %s timers';
$lang['project_invoice_timers_started'] = 'Uppgiftstimer hittades tickande och tackande på debiterbara uppgifter, så då kan fakturan inte skapas. Stoppa uppgiftstimern för att skapa din faktura.';
$lang['task_start_timer_only_assignee'] = 'Du måste vara tilldelad denna uppgift att starta timer!';
$lang['task_comments'] = 'Kommentarer';
$lang['invoice_total_tax'] = 'Total moms';
$lang['estimates_total_tax'] = 'Total moms';
$lang['report_invoice_total_tax'] = 'Total moms';
$lang['home_tickets'] = 'Flik';
$lang['home_project_activity'] = 'Senaste projekt aktivitet';
$lang['home_project_activity_not_found'] = 'Ingen projekt aktivitet hittades';
$lang['view_tracking'] = 'Vy Spårning';
$lang['view_date'] = 'Datum';
$lang['view_ip'] = 'IP Adress';
$lang['article_total_views'] = 'Totalt antal visningar';
$lang['leads_source'] = 'Källa';
$lang['invoices_available_for_merging'] = 'Fakturor tillgängliga för sammanslagning';
$lang['invoices_merge_discount'] = 'Du kommer att behöva tillämpa rabatt på total %s manuelt på denna faktura';
$lang['invoice_merge_number_warning'] = 'Sammanslagning av fakturor kommer att skapa luckor i fakturanummeren. Sammanfoga inte fakturor om du inte vill ha några luckor i din fakturahistorik. Du har också en möjlighet att manuellt justera fakturanummer om du vill fylla luckorna.';
$lang['invoice_mark_as'] = 'Markera som %s';
$lang['invoice_unmark_as'] = 'Avmarkera som %s';
$lang['invoice_status_cancelled'] = 'Avbruten';
$lang['tasks_reminder_notification_before_help'] = 'Meddela uppgifttagaren om deadline före X dagar. Notifiera / e-post skickas endast till innehavaren. Om skillnaden mellan uppgiftens startdatum  och uppgiftens slutdatum är mindre än påminnelse dagen, så kommer inget meddelande att skickas.';

# Version 1.1.0
$lang['project_invoice_select_all_tasks'] = 'Välj alla uppgifter';
$lang['lead_company'] = 'Företag';

# Version 1.1.1
$lang['admin_auth_forgot_password_button'] = 'Bekräfta';
$lang['task_assigned'] = 'Tilldelat till';
$lang['switch_to_pipeline'] = 'Byt till  pipeline';
$lang['switch_to_list_view'] = 'Byt till lista';
$lang['estimates_pipeline'] = 'Offert Pipeline';
$lang['estimates_pipeline_sort'] = 'Sortera som';
$lang['estimates_sort_expiry_date'] = 'Förfallodatum';
$lang['estimates_sort_pipeline'] = 'Pipeline Ordning';
$lang['estimates_sort_datecreated'] = 'Skapat datum';
$lang['estimates_sort_estimate_date'] = 'Offertdatum';
$lang['estimate_set_reminder_title'] = 'Ställ in påminnelse på offerten';
$lang['invoice_set_reminder_title'] = 'Ställ in faktura påminnelse';
$lang['estimate_reminders'] = 'Påminnelse';
$lang['invoice_reminders'] = 'Påminnelse';
$lang['estimate_notes'] = 'Notering';
$lang['estimate_add_note'] = 'Lägg till notering';
$lang['dropdown_non_selected_tex'] = 'ingenting valt';
$lang['auto_close_ticket_after'] = 'Automatiskt stäng ärende efter (Timmar)';
$lang['event_description'] = 'Beskrivning';
$lang['delete_event'] = 'Radera';
$lang['not_new_ticket_created'] = 'Nytt ärende har öppnats under din avdelning - %s';
$lang['receive_notification_on_new_ticket'] = 'Ta emot notifiering om nytt ärende öppnats';
$lang['receive_notification_on_new_ticket_help'] = 'All personal som hör till support avdelningen får meddelande om att nytt ärende öppnas';
$lang['event_updated'] = 'Händelse uppdaterats';
$lang['customer_contacts'] = 'Kontakter';
$lang['new_contact'] = 'Ny kontakt';
$lang['contact'] = 'Kontakt';
$lang['contact_lowercase'] = 'kontakt';
$lang['contact_primary'] = 'Primär kontakt';
$lang['contact_position'] = 'Position';
$lang['contact_active'] = 'Aktiv';
$lang['client_company_info'] = 'Företags detaljer';
$lang['proposal_save'] = 'Spara förslag';
$lang['calendar'] = 'Kalender';
$lang['settings_pdf'] = 'PDF';
$lang['settings_pdf_font'] = 'PDF Font';
$lang['settings_pdf_table_heading_color'] = 'Artikel tabells rubrik färg';
$lang['settings_pdf_table_heading_text_color'] = 'Artikel Textfärg på rubriken i tabellen';
$lang['settings_pdf_font_size'] = 'Standard font storlek';
$lang['proposal_status_draft'] = 'Utkast';
$lang['custom_field_contacts'] = 'Kontakter';
$lang['company_primary_email'] = 'Primär epost';
$lang['client_register_contact_info'] = 'Primär kontaktinformation';
$lang['client_register_company_info'] = 'Företagsinformation';
$lang['contact_permissions_info'] = 'Se till att sätta rätt behörighet för den här kontakten';
$lang['default_leads_kanban_sort'] = 'Normal kundämnen kanBan sorterat';
$lang['default_leads_kanban_sort_type'] = 'Sortera';
$lang['order_ascending'] = 'Stigande';
$lang['order_descending'] = 'Fallande';
$lang['calendar_expand'] = 'Expandera';
$lang['proposal_reminders'] = 'Påminnelser';
$lang['proposal_set_reminder_title'] = 'Ställin Offert/Förslags påminnelse';
$lang['settings_allowed_upload_file_types'] = 'Tillåtna filtyper';
$lang['no_primary_contact'] = 'Denna kund har ingen primära kontakt. Du behöver konfigurera en primära kontakt logga in som kund. Det är rekommenderat att alla kunder har primära kontakter.';
$lang['leads_merge_customer'] = 'Kund fält sammanslagning';
$lang['leads_merge_contact'] = 'Slå ihop kontaktfält';
$lang['leads_merge_as_contact_field'] = 'Slå ihop som kontaktfält';
$lang['lead_convert_to_client_phone'] = 'Telefon';
$lang['invoice_status_report_all'] = 'Alla';
$lang['import_contact_field'] = 'Kontaktfält';


$lang['file_uploaded_success'] = 'Det finns inget fel, filen laddades upp med framgång';
$lang['file_exceeds_max_filesize'] = 'Den uppladdade filen överskrider upload_max_filesize direktivet i php.ini';
$lang['file_exceeds_maxfile_size_in_form'] = 'Den uppladdade filen överskrider MAX_FILE_SIZE direktivet som angavs i HTML-formuläret';
$lang['file_uploaded_partially'] = 'Den uppladdade filen blev endast delvis uppladdad';
$lang['file_not_uploaded'] = 'Ingen fil laddades upp';
$lang['file_missing_temporary_folder'] = 'Saknar en temporer mapp';
$lang['file_failed_to_write_to_disk'] = 'Det gick inte att skriva filen till hårddisken.';
$lang['file_php_extension_blocked'] = 'En PHP ändelse stoppade filuppladdning.';
$lang['calendar_expand'] = 'Expandera';
$lang['view_pdf'] = 'Visa PDF';
$lang['expense_repeat_every'] = 'Upprepa varje';

# Version 1.1.2
$lang['leads_switch_to_kanban'] = 'Byt till kanban vy ';
$lang['survey_no_questions'] = 'Denna undersökning har inga frågor ännu.';
$lang['survey_submit'] = 'Skicka';
$lang['contract_content'] = 'Kontrakt';
$lang['contract_save'] = 'Spara kontrakt';
$lang['contract_send_to_email'] = 'Skicka till epost';
$lang['contract_send_to_client_modal_heading'] = 'Skicka kontrakt till epost';
$lang['contract_send_to'] = 'Skicka till';
$lang['contract_send_to_client_attach_pdf'] = 'Bifoga PDF';
$lang['contract_send_to_client_preview_template'] = 'Förhandsgranska e-postmall';
$lang['include_attachments_to_email'] = 'Inkludera bilagor i e-post';
$lang['contract_sent_to_client_success'] = 'Kontraktet har skickats till kunden';
$lang['contract_sent_to_client_fail'] = 'Misslyckades skicka till kund';

# Version 1.1.3
$lang['client_invalid_username_or_password'] = 'Fel användarnamn eller lösenord';
$lang['client_old_password_incorrect']     = 'Ditt gamla lösenord är fel';
$lang['client_password_changed']          = 'Ditt lösenord har ändrats';

# Version 1.1.4
$lang['total_leads_deleted'] = 'Total kundämnen deleted: %s';
$lang['total_clients_deleted'] = 'Totalt antal kunder deleted: %s';
$lang['confirm_action_prompt'] = 'Are you sure you want to perform this action?';
$lang['mass_delete'] = 'Mass Delete';
$lang['email_protocol'] = 'Email Protocol';
$lang['add_edit_members'] = 'Add/Edit Members';
$lang['project_overview_logged_hours'] = 'Loggade timmar:';
$lang['project_overview_billable_hours'] = 'Debiterbara timmar:';
$lang['project_overview_billed_hours'] = 'Debiterade timmar:';
$lang['project_overview_unbilled_hours'] = 'Odebiterade timmar:';
$lang['calendar_first_day'] = 'Första dagen i veckan';
$lang['permission_view'] = 'Visa';
$lang['permission_edit'] = 'Redigera';
$lang['permission_create'] = 'Skapa';
$lang['permission_delete'] = 'Radera';
$lang['permission'] = 'Rättighet';
$lang['permissions'] = 'Rättigheter';
$lang['proposals_pipeline'] = 'Förslag i Pipelinen';
$lang['proposals_pipeline_sort'] = 'Sortera efetr';
$lang['proposals_sort_open_till'] = 'Öppen Till';
$lang['proposals_sort_pipeline'] = 'Ordning i Pipeline';
$lang['proposals_sort_datecreated'] = 'Skapades datum';
$lang['proposals_sort_proposal_date'] = 'Förslagets datum';
$lang['is_not_staff_member'] = 'Inte anställd';
$lang['lead_created'] = 'Skapad';
$lang['access_tickets_to_none_staff_members'] = 'Tillåt åtkomst till supportärende för icke anställda';
$lang['project_expenses'] = 'Utgifter';
$lang['expense_currency'] = 'Valuta';
$lang['currency_valid_code_help'] = 'Var noga med att ange en giltig valutakod.';
$lang['week'] = 'Vecka';
$lang['weeks'] = 'Veckor';
$lang['month'] = 'månad';
$lang['months'] = 'Månader';
$lang['year'] = 'År';
$lang['years'] = 'År';
$lang['expense_report_category'] = 'Kategori';
$lang['expense_paid_via'] = 'Betald via %s';
$lang['item_as_expense'] = '[Kostnad]';
$lang['show_help_on_setup_menu'] = 'Visa hjälp menyn på inställningsmenyn';
$lang['customers_summary_total'] = 'Totalt antal kunder';
$lang['filter_by'] = 'Filtrera på';
$lang['re_captcha'] = 'reCAPTCHA';
$lang['recaptcha_site_key'] = 'SidNyckel';
$lang['recaptcha_secret_key'] = 'Hemlig nyckel';
$lang['recaptcha_error'] = 'Hmm! reCAPTCHA fältet säger att du är en robot.';
$lang['smtp_username'] = 'SMTP Användarnamn';
$lang['smtp_username_help'] = 'Fyll bara i om din e-postklient  använder användarnamn för SMTP inloggning.';
$lang['pinned_project']= 'Fästa projekt';
$lang['pin_project']= 'Fäst projekt';
$lang['unpin_project']= 'Släpp projekt ';
$lang['smtp_encryption']= 'E-post kryptering';
$lang['smtp_encryption_none']= 'Ingen';
$lang['show_proposals_on_calendar']= 'Anbuds förfrågan';
$lang['invoice_project_see_billed_expenses']= 'Visa kostnader som kommer på denna faktura';
$lang['project_overview_expenses'] = 'Totala kostnader';
$lang['project_overview_expenses_billable'] = 'Debiterbara kostnader';
$lang['project_overview_expenses_billed'] = 'Debiterade kostnader';
$lang['project_overview_expenses_unbilled'] = 'Odebiterade kostnader';
$lang['announcement_date_list'] = 'Datym';
$lang['project_setting_view_finance_overview'] = 'Vy över finanserna';
$lang['show_all_tasks_for_project_member'] = 'Låt all personal se alla uppgifter i samband med projekt (inkluderar icke-personal)';
$lang['not_staff_added_as_project_member'] = 'Har lagt till dig som projektmedlem';
$lang['report_expenses_base_currency_select_explanation'] = 'Du måste välja en valuta eftersom systemet funnit olika valutor som används för kostnader.';

# Version 1.1.6
$lang['project_activity_recorded_expense'] = 'Registrerad kostnad';
$lang['save_customer_and_add_contact'] = 'Spara och skapa kontakt';
$lang['tickets_chart_weekly_opening_stats'] = 'vecko Statistik';
$lang['related_knowledgebase_articles'] = 'Relaterade artiklar';
$lang['detailed_overview'] = 'Översikt arbetsuppgifter ';
$lang['tasks_total_checklists_finished'] = 'Total Checklista för poster markerad som färdiga';
$lang['tasks_total_added_attachments'] = 'Totalt bilagor tillagda';
$lang['tasks_total_comments'] = 'Kommentarer Totalt';
$lang['task_finished_on_time'] = 'Avslutade i tid?';
$lang['task_finished_on_time_indicator'] = 'Ja';
$lang['task_not_finished_on_time_indicator'] = 'Nej';
$lang['task_filter_fetch_month_by'] = 'Hämta månad Från';
$lang['filter'] = 'Filter';
$lang['task_filter_detailed_all_months'] = 'Alla månader';
$lang['kb_article_slug'] = 'Logiskt';

# Version 1.1.7
$lang['email_template_ticket_warning'] = 'Om ärendet importeras via e-post pipen och kontakten inte finns i CRM fälten Kommer inte fälten bli utbytta.';
$lang['auto_stop_tasks_timers_on_new_timer'] = 'Stoppa alla andra påbörjade timers vid start av ny timer';
$lang['notification_when_customer_pay_invoice'] = 'Få ett meddelande när kunden betala fakturan (inbyggd)';
$lang['not_invoice_payment_recorded'] = 'Ny faktura Betalning - %s';
$lang['email_template_contact_warning'] = 'Om kontakten inte är inloggad samtidigt som åtgärder av kontaktsammanslagning inte bytas ut.';
$lang['theme_style'] = 'tema stil';
$lang['change_role_permission_warning'] = 'Förändrade rollbehörigheter kommer inte påverkas nuvarande personalens behörigheter som använder denna roll.';
$lang['task_copied_successfully'] = 'Uppgiften kopierades';
$lang['failed_to_copy_task'] = 'Misslyckades att kopiera uppgiften';
$lang['not_project_file_uploaded'] = 'Ny projektfil lades till';
$lang['settings_calendar_color'] = '%s Färg';
$lang['settings_calendar_colors_heading'] = 'Design';
$lang['reminder'] = 'Påminnelse';
$lang['back_to_tasks_list'] = 'Tillbaka till uppgiftslistan';
$lang['copy_task_confirm'] = 'Bekräfta';
$lang['changing_items_affect_warning'] = 'Ändra på post-information kommer inte att påverkan på de redan skapade fakturorna / offerterna.';
$lang['tax_is_used_in_expenses_warning'] = 'Du kan inte uppdatera denna skatt eftersom det finns kostnader med denna skatt i utförda transaktioner.';
$lang['note'] = 'Notering';
$lang['leads_staff_report_converted'] = 'Totalt Konverterade kundämnen';
$lang['leads_staff_report_created'] = 'Totalt skapade kundämnen';
$lang['leads_staff_report_lost'] = 'Totalt förlorade kundämnen';
$lang['client_go_to_dashboard'] = 'Åter till portalen';
$lang['show_estimate_reminders_on_calendar'] = 'Offertpåminnelser';
$lang['show_invoice_reminders_on_calendar'] = 'Fakturapåminnelser';
$lang['calendar_estimate_reminder'] = 'Offertpåminnelse';
$lang['calendar_invoice_reminder'] = 'Fakturapåminnelse';
$lang['show_proposal_reminders_on_calendar'] = 'Påminnelse förslag';
$lang['calendar_proposal_reminder'] = 'Påminnelse förslag';
$lang['proposal_due_after']= 'Proposal Due After (days)';
$lang['project_progress']= 'Framsteg';
$lang['calculate_progress_through_tasks']= 'Beräkna framsteg genom uppgifter';
$lang['allow_customer_to_change_ticket_status']= 'Låt kunden att byta support status Från kundportalen';
$lang['switch_to_general_report']= 'Byt till personalrapport';
$lang['switch_to_staff_report']= 'Byt till generell rapport';
$lang['generate']= 'Generera';
$lang['from_date']= 'Från datum';
$lang['to_date']= 'Till datum';
$lang['not_results_found']= 'Inga resultat funna';
$lang['lead_lock_after_convert_to_customer']= 'Tillåt inte redigering av Kundämne efter omvandling till kund (admins tillämpas ej)';
$lang['default_pipeline_sort'] = 'Normal pipeline sortering';
$lang['not_goal_message_failed'] = 'Vi misslyckades med att uppnå målet!<br /> Typ av mål: %s
<br />mål uppfyllt: %s
<br />total prestation: %s
<br />Startdatum: %s
<br />Slutdatum: %s';
$lang['toggle_full_view'] = 'Växla till helbild';
$lang['not_estimate_invoice_deleted'] = 'Raderade den skapade fakturan';
$lang['not_task_new_comment'] = 'kommentar på uppgift %s';

# Version 1.1.8
$lang['invoice_number_exists'] = 'Detta fakturanummer existerar för innevarande år.';
$lang['estimate_number_exists'] = 'Detta offertnummer existerar för innevarande år.';
$lang['email_exists'] = 'E-posten fins redan';
$lang['not_uploaded_project_file'] = 'Ny fil har laddats upp';
$lang['not_created_new_project_discussion'] = 'Nya projekt diskussioner skapat';
$lang['not_commented_on_project_discussion'] = 'Nya projekt kommentarer skapat';
$lang['all_staff_members'] = 'All personal';
$lang['help_project_permissions'] = 'VISA tillåter anställda att se alla projekt. Om du bara vill att de ska se projekt de tilldelats (tillsätts dom som medlemmar), ge inte VISA behörigheter.';
$lang['help_tasks_permissions'] = 'VISA tillåter anställda att se alla uppgifter. Om du bara vill att de ska se uppgifter de tilldelats (tillsätts dom som medlemmar), ge inte VISA behörigheter.';
$lang['expense_recurring_days'] = 'Dag(ar)';
$lang['expense_recurring_weeks'] = 'Vecka(or)';
$lang['expense_recurring_months'] = 'Månad(er)';
$lang['expense_recurring_years'] = 'År';
$lang['reset_to_default_color'] = 'Återställ till grundfärg';
$lang['pdf_logo_width'] = 'Logo bredd (PX)';
$lang['drop_files_here_to_upload'] = 'Släpp fil här för att ladda upp';
$lang['browser_not_support_drag_and_drop'] = 'Din webbläsare stöder inte drag\'o\'släpp filuppladdning';
$lang['remove_file'] = 'Tag bort fil';
$lang['you_can_not_upload_any_more_files'] = 'Du kan inte ladda upp fler filer';
$lang['custom_field_only_admin'] = 'Begränsa synlighet till admin endast';
$lang['leads_default_source'] = 'Standard källa';
$lang['clear_activity_log'] = 'Rensa loggen';
$lang['default_contact_permissions'] = 'Standardkontakt behörigheter';
$lang['invoice_activity_marked_as_cancelled'] = 'Markera faktura som annullerad';
$lang['invoice_activity_unmarked_as_cancelled'] = 'Avmarkera faktura som annullerad';
$lang['wait_text'] = 'Vänta lite...';
$lang['projects_summary'] = 'Projektsummering';
$lang['dept_imap_host'] = 'IMAP Host';
$lang['dept_encryption'] = 'Kryptering';
$lang['dept_email_password'] = 'Lösenord';
$lang['dept_email_no_encryption'] = 'Ingen kryptering';
$lang['failed_to_decrypt_password'] = 'Misslyckades med kryptering av lösenord';
$lang['delete_mail_after_import'] = 'Radera e-post efter import?';
$lang['expiry_reminder_enabled'] = 'Skicka bäst före påminnelse';
$lang['send_expiry_reminder_before'] = 'Skicka (dax att..) påminnelse före (DAGAR)';
$lang['not_expiry_reminder_sent'] = 'Påminnelse skickad (dax att..)';
$lang['send_expiry_reminder'] = 'Påminnelse skicka (dax att..)';
$lang['sent_expiry_reminder_success'] = 'Påminnelse skickad (dax att..)';
$lang['sent_expiry_reminder_fail'] = 'Påminnelse gick ej skicka (dax att..)';
$lang['leads_default_status'] = 'Standardstaus';
$lang['item_description_placeholder'] = 'Beskrivning';
$lang['item_long_description_placeholder'] = 'Lång beskrivning';
$lang['item_quantity_placeholder'] = 'Antal';
$lang['item_rate_placeholder'] = 'Pris';
$lang['tickets_summary'] = 'Support summering';
$lang['tasks_list_priority'] = 'Prioriterat';
$lang['ticket_status_db_2'] = 'Under behandling';
$lang['ticket_status_db_1'] = 'Öppet';
$lang['ticket_status_db_3'] = 'Svarat';
$lang['ticket_status_db_4'] = 'i vänteläge';
$lang['ticket_status_db_5'] = 'Stängt';
$lang['ticket_priority_db_1'] = 'Låg';
$lang['ticket_priority_db_2'] = 'Medium';
$lang['ticket_priority_db_3'] = 'Hög';
$lang['customer_have_projects_by'] = 'Innehåller projekt efter status %s';
$lang['customer_have_proposals_by'] = 'Contains proposals by status %s';
$lang['do_not_redirect_payment'] = 'Do not redirect me to the payment processor';
$lang['project_tickets'] = 'Ärende';
$lang['invoice_report'] = 'Fakturarapport';
$lang['payment_modes_report'] = 'Payment Modes (Transactions)';
$lang['customer_admins'] = 'Kund administratör';
$lang['assign_admin'] = 'Tilldela en administratör';
$lang['customer_admin_date_assigned'] = 'Tilldelad datum';
$lang['customer_admin_login_as_client_message'] = 'Hej %s. Du har tilldelats admin rollen för denna kund .';
$lang['ticket_form_validation_file_size'] = 'Filstorleken måste vara mindre än %s';
$lang['has_transactions_currency_base_change'] = 'Ändra basvalutan är möjlig endast om det inte finns några transaktioner som registrerats i den valutan. Ta bort transaktioner för att ändra basvalutan';
$lang['customers_sort_all'] = 'Alla';

# Version 1.1.9
$lang['use_recaptcha_customers_area'] = 'Tillåt recaptcha på kundernas område (Logga in / Registrera)';
$lang['project_marked_as_finished'] = 'Projekt avklarat';
$lang['project_status_updated'] = 'Projektstatus uppdaterad';
$lang['remove_decimals_on_zero'] = 'Ta bort decimaler om antalet / pengar med noll decimaler (2,00 blir 2, och 2,25 förblir 2,25)';
$lang['remove_tax_name_from_item_table'] = 'Ta bort momsen namn Från postens tabellrad (fakturor / Offerter)';

# Version 1.2.0
$lang['not_billable_expenses_by_categories'] = 'Icke Debiterbara kostnader per kategori';
$lang['billable_expenses_by_categories'] = 'Debiterbara kostnader per kategori';
$lang['format_letter_size'] = 'A4 Landskap';
$lang['pdf_formats'] = 'Dokument format';
$lang['swap_pdf_info'] = 'Skifta Företag / Kunduppgifter (företagsinformation till höger, kunduppgifter till vänster)';
$lang['invoice_estimate_pdf_text_color'] = 'Faktura / Offert textfärg';
$lang['expenses_filter_by_categories'] = 'Per kategori';
$lang['task_copy'] = 'Kopiera';
$lang['estimate_status'] = 'Status';
$lang['expenses_report_exclude_billable'] = 'Uteslut Debiterbara kostnader';
$lang['expenses_total'] = 'Total';
$lang['estimate_activity_added_attachment'] = 'La till bilaga';
$lang['show_to_customer'] = 'Visa för kunden';
$lang['hide_from_customer'] = 'Göm för kunden';
$lang['expenses_report_total'] = 'Total';
$lang['expenses_report'] = 'Kostnads rapport';
$lang['expenses_report_tax'] = 'Moms';
$lang['expenses_report_total_tax'] = 'Total moms';
$lang['expenses_detailed_report'] = 'Detalierad rapport';
$lang['expense_not_billable'] = 'Ej fakturerbart';
$lang['notification_settings'] = 'Meddelande inställningar';
$lang['staff_with_roles'] = 'Anställda med roller';
$lang['specific_staff_members'] = 'Specifika anställda';
$lang['proposal_mark_as'] = 'Markera som %s';
$lang['kb_report_total_answers'] = 'Total';
$lang['ticket_message_edit'] = 'Redigera';
$lang['invoice_files'] = 'fakturafiler';
$lang['estimate_files'] = 'Offertfiler';
$lang['proposal_files'] = 'Anbud / förslags filer';
$lang['invoices_awaiting_payment'] = 'Fakturor som väntar på betalning';
$lang['tasks_not_finished'] = 'Ej klara uppgifter';
$lang['outstanding_invoices'] = 'Obetalda fakturor';
$lang['past_due_invoices'] = 'Förfallna fakturor';
$lang['paid_invoices'] = 'Betalda fakturor';
$lang['invoice_estimate_year'] = 'År';
$lang['no_results_text_search_dropdown'] = 'Inga resultat Matchade';
$lang['task_stats_logged_hours'] = 'Loggade timmar';
$lang['leads_converted_to_client'] = 'Konverterade kundämnen';
$lang['task_assigned_from'] = 'Denna uppgift är tilldelad dig av %s';
$lang['auto_check_for_new_notifications'] = 'Auto checka för nya meddelanden (sekunder - Ställ 0 för att inaktivera)';
$lang['recurring_ends_on'] = 'Slutar den (Lämna tomt för aldrig)';
$lang['new_note'] = 'Ny notering';
$lang['my_tickets_assigned'] = 'Supportärenden tilldelade mig';
$lang['filter_by_assigned'] = 'På tilldelade medlemmar';
$lang['staff_stats_total_logged_time'] = 'Totalt loggad tid';
$lang['staff_stats_last_month_total_logged_time'] = 'Senaste månadens loggade tid';
$lang['staff_stats_this_month_total_logged_time'] = 'Denna månads loggade tid';
$lang['staff_stats_last_week_total_logged_time'] = 'Förra veckans loggade tid';
$lang['staff_stats_this_week_total_logged_time'] = 'Denna veckas loggade tid';
// Dont change this becuse are translated before for the projects timesheets and now are only used for readability.
$lang['timesheet_user'] = $lang['project_timesheet_user'];
$lang['timesheet_start_time'] = $lang['project_timesheet_start_time'];
$lang['timesheet_end_time'] = $lang['project_timesheet_end_time'];
$lang['timesheet_time_spend'] = $lang['project_timesheet_time_spend'];
$lang['task_timesheets'] = $lang['project_timesheets'];
$lang['task_log_time_start'] = $lang['project_timesheet_start_time'];
$lang['task_log_time_end'] = $lang['project_timesheet_end_time'];
$lang['task_single_log_user'] = $lang['project_timesheet_user'];

# Version 1.2.2
$lang['milestone_description'] = 'Beskrivning';
$lang['description_visible_to_customer'] = 'Visa beskrivning för kunden';
$lang['upcoming_tasks'] = 'Kommande uppgift';
$lang['paymentmethod_two_checkout_account_number'] = 'Kontonummer (Säljare ID)';
$lang['paymentmethod_two_checkout_private_key'] = 'Privat nyckel';
$lang['paymentmethod_two_checkout_publishable_key'] = 'publik nyckel';
$lang['payment_credit_card_number'] = 'Kortnummer';
$lang['payment_credit_card_expiration_date'] = 'Utångsdatum';
$lang['payment_billing_email'] = 'Epost';
$lang['payment_billing_name'] = 'Fakturanamn';
$lang['submit_payment'] = 'Skicka Betalning';
$lang['2checkout_notice_payment'] = 'Kreditkortsuppgifter  behandlas säkert med token tillhandahållen Från 2Checkout';
$lang['2checkout_usage_notice'] = 'SSL krävs om du använder 2Checkout betalnings API. Det krävs för att säkert kontakta tokenization och auktorisationen. Systemet kommer att fungera utan SSL, men detta kommer att placera dig ur plan, där det riskerar att avaktivering av API-behörigheter.överensstämmelse';
$lang['custom_field_disallow_customer_to_edit'] = 'Tillåt ej kunden att redigera det här fältet';
$lang['project_due_notice'] = 'Detta projekt är förfallet med %s dagar';
$lang['not_lead_added_attachment'] = 'lagt till nya bilaga till lead %s';
$lang['lead_note_date_added'] = 'Notering skapades: %s';
$lang['recurring_custom'] = 'Anpassad';
// Dont translate these, only added for better readability already translated for the expenses custom recurring feature.
$lang['invoice_recurring_months'] = $lang['expense_recurring_months'];
$lang['invoice_recurring_years'] = $lang['expense_recurring_years'];
$lang['invoice_recurring_days'] = $lang['expense_recurring_days'];
$lang['invoice_recurring_weeks'] = $lang['expense_recurring_weeks'];

# Version 1.2.4
$lang['document_direction'] = 'Textriktning';
$lang['notify_project_members_status_change'] = 'Meddela projektdeltagare att projektets status ändras';
$lang['not_project_status_updated'] = 'Projektstatus uppdateras från %s to %s';
$lang['ticket_not_found'] = 'Support ärende hittades inte';
$lang['project_not_found'] = 'Project hittades inte';
$lang['export_project_data'] = 'Exportera projektdata';
$lang['total_project_members'] = 'De totala projektmedlemmarna';
$lang['total_project_files'] = 'bifogade filer';
$lang['total_project_discussions_created'] = 'diskussion skapades';
$lang['project_member'] = 'Medlemmar';
$lang['total_project_discussions_comments'] = 'De totala diskussions kommentarerna';
$lang['staff_total_task_assigned'] = 'Totala uppdrag tilldelade';
$lang['staff_total_comments_on_tasks'] = 'Kommentarer på uppdrag';
$lang['project_members_overview'] = ' Översikten Projektmedlemmar';
$lang['project_milestones_overview'] = 'Milsten Översikt';
$lang['total_tasks_in_milestones'] = 'Totala uppgifter tilldelade';
$lang['total_task_members_assigned'] = 'Totalt antal tilldelade medlemmar';
$lang['total_task_members_followers'] = 'Totala antal följare';
$lang['total_milestones'] = 'Totalt antal milestenar';
$lang['total_project_worked_days'] = 'Antal dagar arbetade';
$lang['finance_overview'] = 'Finans översikt';
$lang['project_custom_fields'] = 'Anpassade fält';
$lang['total_tickets_related_to_project'] = 'Totalt ärenden kopplade till projekt';
$lang['projects_total_invoices_created'] = 'Totala fakturor som skapas';
$lang['total_invoiced_amount'] = 'Totala fakturor som skapas';
$lang['do_not_send_invoice_payment_email_template_contact'] = 'Skicka inte fakturabetalning är registreras via e-post till kundkontakter ';
$lang['no_preview_available_for_file'] = 'Ingen förhandsgranskning för den här filen.';
$lang['project_activity_deleted_file_discussion_comment'] = 'Diskussionskommentar för filen borttagen';
$lang['file_not_found'] = 'Fil hittades ej';
$lang['email_template_discussion_info'] = 'Denna mall används för både projektdiskussions kommentarer e-post. (filer diskussioner och regelbundna diskussioner)';
$lang['format_a4_portrait_size'] = 'Portrait';
$lang['only_show_contact_tickets'] = 'I kundprofil  visa bara Ärenden i samband med den inloggade kontakten (primär kontakt tillämpas inte)';
$lang['cancel_overdue_reminders_invoice'] = 'Förhindra att skicka förfallna påminnelser för denna faktura';
$lang['customer_shipping_address_notice'] = 'Fyller inte i leveransadress information om du inte använder leveransadress på kundfakturor';
$lang['timesheets_overview'] = 'Översikt tidrapporter';
$lang['invoice_status_draft'] = 'Utkast';
$lang['save_as_draft'] = 'Spara som Utkast';
$lang['convert_and_save_as_draft'] = 'Konvertera och spara som utkast';
$lang['convert'] = 'Konvertera';
$lang['exclude_invoices_draft_from_client_area'] = 'Uteslut fakturor med status Utkast Från kund område';
$lang['invoice_draft_status_info'] = 'Denna faktura är markerad med status Utkast, status kommer automatiskt ändras när du skickar fakturan till kunden eller märker den som skickad.';
$lang['task_info'] = 'Uppgifts Info';
$lang['recurring_tasks'] = 'Återkommande';
// Dont translate these, already translated
$lang['task_repeat_every'] = $lang['expense_repeat_every'];
$lang['task_recurring_months'] = $lang['expense_recurring_months'];
$lang['task_recurring_years'] = $lang['expense_recurring_years'];
$lang['task_recurring_days'] = $lang['expense_recurring_days'];
$lang['task_recurring_weeks'] = $lang['expense_recurring_weeks'];
$lang['todays_tasks'] = 'Dagen\'s uppgift';
$lang['payment_mode_invoices_only'] = 'Endast faktura';
$lang['payment_mode_expenses_only'] = 'Bara Kostnader';
$lang['task_no_checklist_items_found'] = 'Checklista för denna uppgift';
$lang['task_no_description'] = 'Ingen beskrivning för denna uppgift';
$lang['expenses_reminders'] = 'Påminnelser';
$lang['expense_set_reminder_title'] = 'Ställ in påminnelse för kostnader';
$lang['calendar_expense_reminder'] = 'Kostnads påminnelser';
$lang['recurring_task'] = 'Återkommande uppgifter';
$lang['disable_email_from_being_sent'] = 'Inaktivera detta mail Från att sändas';
$lang['not_sent_indicator'] =  'Ej skickade';
$lang['proposal_status_revised'] =  'Reviderad';
$lang['customer_currency_change_notice'] =  'Om kunden använder annan valuta än basvalutan, se till att du väljer en lämplig valuta för denna kund. Ändra valuta är inte möjlig efter transaktioner registrerats.';
$lang['click_to_add_content'] =  'Klicka här för att lägga till innehåll';
$lang['related_to_project'] =  'denna %s är relaterad till %s: %s';
$lang['back_to_lead'] =  'Åter till Leads';
$lang['add_task_timer_started_warning'] =  'Stoppa nuvarande startade timers för denna uppgift för att kunna lägga till en ny timer manuellt.';
$lang['sending_email_contact_permissions_warning'] =  'Det gick inte att Automatiskt välja kundkontakter. Var noga med att kunden har associerade kontakter med behörighet %s';

# Version 1.2.6
$lang['currently_supported_currencies'] = 'för tillfället stöds valutor';
$lang['authorize_notice'] = 'SSL krävs av dig om du använder Authorize.Net AIM betalnings API. Authorize.net stöder endast en valuta per konto. Se till att du bara lägger till en valuta i samband med ditt Auktoriserade konto i valutor fält.';
$lang['settings_paymentmethod_developer_mode'] = 'Utvecklingsläge';
$lang['payment_cardholder_name'] = 'Cardholder\'s Namn';
$lang['settings_paymentmethod_authorize_api_login_id'] =  'API Login ID';
$lang['settings_paymentmethod_mollie_api_key'] =  'API Nyckel';
$lang['settings_paymentmethod_authorize_api_transaction_key'] =  'API Transaktion ID';
$lang['settings_paymentmethod_authorize_secret_key'] =  'Hemlig nyckel';
$lang['leads_report_converted_notice'] =  'Bara leads som tillhör normalstatus för kunder kommer att tas som Konverterade Leads, om leadsen tillhör i standardstatusför klient och det är inte omvandlad till kund kommer att fortfarande räknas som konverterade Leads';
$lang['payment_method'] = 'Betalningsmetod';
$lang['payment_method_info'] = 'Vissa gateways stöd för olika betalningar / flera betalningsmetoder som kreditkort, Paypal, Bank.';

# Version 1.2.7
$lang['dropbox_app_key'] = 'Dropbox APP key';
$lang['project_invoice_select_all_expenses'] = 'Välj alla kostnader';
$lang['role_update_staff_permissions'] = 'Uppdatera all personals behörigheter som använder denna roll';
$lang['customer_active'] = 'Aktiv';
$lang['note_updated_successfully'] = 'Notering uppdaterades';
$lang['update_note'] = 'Uppdatera notering';
$lang['update_comment'] = 'Uppdatera kommentar';
$lang['comment_updated_successfully'] = 'Kommentar uppdaterades';
$lang['staff_send_welcome_email'] = 'Skicka ett välkomst mail';
$lang['proposal_warning_email_change'] = 'E-post har ändrats för %s. denna %s är kopplad till förslaget/s. Vill du uppdatera alla förslags mejl kopplade till %s?';
$lang['update_proposal_email_yes'] = 'JA! Uppdatera alla länkade epost.';
$lang['update_proposal_email_no'] = 'NEJ! Jag vill uppdatera manuelt';
$lang['proposals_emails_updated'] = 'Alla förslags epost länkade till denna %s uppdaterades till %s';
$lang['custom_field_company'] = 'Företag';
$lang['actions'] = 'Actions';
$lang['project_mark_as'] = 'Markera som %s';
$lang['todo_edit_title'] = 'Redigera todo objekt';
$lang['additional_action_required'] = 'Ytterligare åtgärder som krävs!';
$lang['project_mark_tasks_finished_confirm'] = 'Bekräfta';
$lang['project_marked_as_success'] = 'Projekt markerat som %s framgångsrikt';
$lang['project_marked_as_failed'] = 'Misslyckades att markera project som %s';
$lang['auto_assign_customer_admin_after_lead_convert'] = 'Automatiskt Tilldela som admin-till-kund efter konvertering';
$lang['auto_assign_customer_admin_after_lead_convert_help'] = 'Om det här alternativet är inställt på JA kommer den anställde som konverterade Leadsen till kund att automatiskt tilldelas som kund admin. OBS: Detta alternativ gäller endast på anställda som har rättigheter för kunderna. Rättigheten VISA gör inte det!';
$lang['auto_close_tickets_disable'] = 'Sätt 0 för att avaktivera';
$lang['task_checklist_item_completed_by'] = 'Avslutat av %s';
$lang['staff_email_signature_help'] = 'Om tom standard e-signatur, Kommer Inställningarna Från att användas';
$lang['customer_sales'] = 'Försäljning';
$lang['default_task_priority'] = 'Normal prioritering';
$lang['project_send_created_email'] = 'Skicka e-post att projekt har skapats';
$lang['survey_send_to_lists'] = 'Undersökning - skicka lista';
$lang['survey_send_notice'] = 'Eposten kommer skickas via CRON JOB per timme.';
$lang['view_permission_auto_checked'] = 'VISA-rättigheter auto markeras. Du måste välja VISA rättighet om du vill använda REDIGERA, skapa och radera ordentligt. REDIGERA, skapa, radera kan inte användas utan VISA rättigheter eftersom VISA är ett globalt tillstånd och användaren kommer inte att kunna öppna data och utföra de åtgärderna.';
$lang['custom_field_company_info'] = 'Redigera anpassade fält för bolaget Setup-> Inställningar> Företag';

# Version 1.2.8
$lang['show_transactions_on_invoice_pdf'] = 'Visa fakturabetalningar (transaktioner) på PDF';
$lang['bulk_actions'] = 'Massåtgärder';
$lang['additional_filters'] = 'ytterligare filter';
$lang['expenses_available_to_bill'] = 'Kostnader som är tillgängliga för räkning';
$lang['bulk_action_customers_groups_warning'] = 'Om du inte väljer någon grupp! Kommer alla grupper som tilldelats utvalda kunder att tas bort.';
$lang['customer_attachments_show_in_customers_area'] = 'Visa på kunds sida';
$lang['customer_attachments_show_notice'] = 'Endast filer uppladdade Från kundprofil har förmåga att visa/dölja i kund området.';
$lang['customer_profile_files'] = 'Filer';
$lang['no_files_found'] = 'Inga filer funna';
$lang['survey_customers_all'] = 'Alla kunder';
$lang['custom_field_column'] = 'Grid (Bootstrap kolumn likamed. 12) - Max är 12';
$lang['task_status'] = 'Status';
$lang['task_status_1'] = 'Ej påbörjad';
$lang['task_status_2'] = 'Väntar på svar';
$lang['task_status_3'] = 'Testas';
$lang['task_status_4'] = 'Pågående';
$lang['task_status_5'] = 'Klar';
$lang['task_mark_as'] = 'markera som %s';
$lang['task_marked_as_success'] = 'Uppgifter markerade med  %s är genomförda';
$lang['task_drag_drop_notice'] = 'Dra och släpp används endast för att enkelt ändra %s. Ordningen kommer inte ändras för denna plats.';
$lang['search_tasks'] = 'Sök uppgift';
$lang['tasks_kanban_limit'] = 'Begränsa uppgifter i KanBan raderna per status';
$lang['show_on_invoice_on_pdf'] = 'Visa %s på PDF fakturan';
$lang['show_pay_link_to_invoice_pdf'] = 'Visa en betallänk på PDF fakturan. (tillämpas ej om fakturastatus är inställt)';
$lang['no_leads_found'] = 'Inga Leads Funna';
$lang['created_today'] = 'Skapad idag';
$lang['total_tasks_deleted'] = 'Totalt antal uppgifter raderade: %s';
$lang['total_tickets_delete'] = 'Totalt antal poster raderade: %s';
$lang['total_tickets_delete'] = 'Totalt antal poster raderade: %s';
$lang['format_letter_portrait'] = 'Brev porträtt';
$lang['format_letter_landscape'] = 'Brev Landskap';
$lang['period_datepicker'] = 'Period';
$lang['total_by_hourly_rate'] = 'Totalt genom timtaxa';
$lang['staff_hourly_rate'] = $lang['task_hourly_rate'];
// &#37; is for % so the system can confuse for the original fields like %s
$lang['remove_tax_name_from_item_table_help'] = 'ex. Punkt SKATT 15% kommer att visas som 25% utan skatte namn (ej tillämpas om flera skatter med samma namn och skatte procent hittades för punkt)';
$lang['back_to_project'] = 'Åter till projectet';
$lang['view_kanban'] = 'Vy Kan Ban';
$lang['invoice_is_overdue'] = 'Denna faktura är förfallen med %s dagar';


# Version 1.2.9
$lang['time_decimal'] = 'Tid (decimal)';
$lang['time_h'] = 'Tid (h)';
$lang['proposal_number_prefix'] = 'Prefix Affärsförslagsnummer ';
$lang['settings_number_padding_prefix'] = 'Antal utfyllnad av nollor för prefixformat <br /> <small>ex. Om detta värde är 3 numret kommer att formateras på detta vis: 005 eller 025
</small>';
$lang['this_week_payments'] = 'Denna veckas Betalningar';
$lang['last_week_payments'] = 'Förra veckan Betalningar';
$lang['not_published_new_post'] = 'Publicerat nytt inlägg';
$lang['expense_name'] = 'Namn';
$lang['expense_name_help'] = 'För personligt bruk';
$lang['adjustments'] = 'Justeringar';
$lang['tax_breakdown'] = 'Skattefördelning';
$lang['payments_received'] = 'Betalning mottagen';
$lang['not_lead_activity_created_proposal'] = 'Skapa nytt förslag - %s';
$lang['lead_title'] = 'Position';
$lang['lead_address'] = 'Adress';
$lang['lead_city'] = 'Stad';
$lang['lead_state'] = 'Län';
$lang['lead_country'] = 'Land';
$lang['lead_zip'] = 'Postnummer';
$lang['lead_is_public_yes'] = 'Ja';
$lang['lead_is_public_no'] = 'Nej';
$lang['lead_info'] = 'Lead Information';
$lang['lead_general_info'] = 'Allmän information';
$lang['lead_latest_activity'] = 'Senaste aktivitet';
$lang['item_description_new_lines_notice'] = 'Nya rad stöds inte för artikelbeskrivning . Använd objektets långa beskrivningen istället.';
$lang['estimates_report'] = 'Offert rapport';
$lang['confirm'] = 'Bekräfta';
$lang['delete_staff'] = 'Radera anstäld';
$lang['delete_staff_info'] = 'Viss data för denna anställde måste överföras till en annan användare. Välj användare som du vill överföra data till.';
$lang['estimate_items'] = 'Offert artiklar';
$lang['no_proposals_found'] = 'Inget förslag funna';
$lang['no_estimates_found'] = 'Ingen offert funnen';
$lang['pipeline_limit_status'] = 'Pipeline gräns per status';
$lang['settings_update'] = 'System Uppdatering';
$lang['purchase_key'] = 'App versions nyckel';
$lang['update_now'] = 'Uppdatera Nu ';
$lang['update_available'] = 'Det finns en uppdatering';
$lang['latest_version'] = 'Senaste Version';
$lang['your_version'] = 'Denna version';
$lang['using_latest_version'] = 'Du använder senaste versionen';
$lang['mark_as_active'] = 'Markera som aktiv';
$lang['customer_inactive_message'] = 'Detta är en inaktiv kundprofil och vissa funktioner kan inaktiveras';
$lang['active_customers'] = 'Aktiva kunder';
$lang['inactive_active_customers'] = 'Inaktiva kunder';
$lang['include_proposal_items_merge_field_help'] = 'Inkludera förslagsobjekt med sammanfogade fält någonstans i innehållet i förslaget %s';
$lang['all_data_synced_successfully'] = 'All data har synkats';
$lang['sync_now'] = 'Synka nu';
$lang['sync_data'] = 'Synka Data';
$lang['sync_proposals_up_to_date'] = 'Alla förslag är uppdaterade, och ingenting finns att synkronisera';
$lang['proposal_sync_1_info'] = 'Alla förslagsdata lagras separat för varje förslag efter skapandet. Uppdatera % s infon kommer inte påverka tidigare skapade förslag för %s.';
$lang['proposal_sync_2_info'] = 'Om du nyligen har uppdaterat din % s info kan du synkronisera alla nya data till tillhörande Affärsförslag. Här är en lista över fält som du kan synkronisera.';

# Version 1.3.0
$lang['expense_include_additional_data_on_convert'] = 'Inkludera ytterligare information till produktens långa beskrivning som tas från dennes kostnad.';

# Version 1.4.0
$lang['calendar_events_limit'] = 'Kalenderhändelser Begränsa (Månad och veckovy)';
$lang['show_page_number_on_pdf'] = 'Visa sidnummer på PDF';
$lang['customer_active_inactive_help'] = 'Kommer inte att visas i menyerna när du skapar nya poster';
$lang['item_groups'] = 'Grupper';
$lang['item_group'] = 'Varugrupp';
$lang['item_group_name'] = 'Grupp Namn';
$lang['new_item_group'] = 'Ny grupp';
$lang['show_setup_menu_item_only_on_hover'] = 'Visa bara inställningsmeny objekt när du hovrar med musen på huvudsidoområdet';
$lang['internal_article'] = 'intern artikel';
$lang['expenses_created_from_this_recurring_expense'] = 'Skapad kostnader från denna återkommande kostnad';
$lang['convert_to_task'] = 'Konvertera till uppgift';
$lang['next_invoice_date'] = 'Nästa fakturadatum: %s';
$lang['next_expense_date'] = 'Nästa Kostnads Datum: %s';
$lang['invoice_recurring_from'] = 'Denna faktura skapas från återkommande faktura med nummer: %s';
$lang['expense_recurring_from'] = 'Denna kostnad är skapad av följande återkommande kostnader: %s';
$lang['child_invoices'] = 'Delfaktura';
$lang['child_expenses'] = 'Delkostnader';
$lang['no_announcements'] = 'Inga meddelanden';
$lang['unit'] = 'Enhet';
$lang['permission_view_own'] = 'Visa (Egen)';
$lang['permission_global'] = 'Global';
$lang['permission_customers_based_on_admins'] = 'Baserad på Kund ansvarig';
$lang['permission_payments_based_on_invoices'] = 'Baserat på fakturor VISA (egen) behörighet';
$lang['permission_projects_based_on_assignee'] = 'Om anställd inte har behörighet VISA (Global) kommer endast projekt visas där anställd tillsätts som projektmedlem .';
$lang['permission_tasks_based_on_assignee'] = 'Om anställd inte har behörighet VISA (Global) kommer endast uppgifter där anställd är följare, tilldelad , där uppgiftenb är offentligt, eller ändra i Setup-> Inställningar> för Åtgärder> Tillåt all personal att se alla uppgifter i samband med projekt ändras till JA när uppgiften är kopplad till projektet.';
$lang['settings_paymentmethod_default_selected_on_invoice'] = 'Markerat som standard på faktura';
$lang['paymentmethod_braintree_merchant_id'] = 'Handlare ID';
$lang['paymentmethod_braintree_private_key'] = 'Privat Key';
$lang['paymentmethod_braintree_public_key'] = 'Publik Key';
$lang['company_requires_vat_number_field'] = 'Företag så krävs användningen av fältet momsregistreringsnummer';
$lang['no_company_view_profile'] = 'Person - Visa profil';
$lang['company_is_required'] = 'Fältet Företag krävs?';
$lang['estimate_invoiced'] = 'fakturerade';
$lang['file_date_uploaded'] = 'Datum uppladdat';
$lang['allow_contact_to_delete_files'] = 'Tillåt kontakter för att radera egna filer uppladdade från kund området';
$lang['file'] = 'Fil';
$lang['customer_contact_person_only_one_allowed'] = 'Endast en kontakt är tillåtet när företags fält inte är i fyllt. Systemet kommer att kasta denna kund som en person';
$lang['web_to_lead'] = 'Web till Lead';
$lang['web_to_lead_form'] = 'Web till Lead Formulär';
$lang['new_form'] = 'Nytt formulär';
$lang['form_name'] = 'Formulär namn';
$lang['cf_option_in_use'] = 'Ett alternativ du försöker ta bort används och kan inte tas bort. Alternativet är automatiskt bifogat till befintliga alternativ.';
$lang['form_builder'] = 'Byggverktyget för formulär.';
$lang['form_information'] = 'Formuläret Information och inställning';
$lang['form_builder_create_form_first'] = 'Skapa formuläret först för att kunna använda formulärbyggaren sen.';
$lang['notify_assigned_user'] = 'Ansvarig personal';
$lang['form_recaptcha'] = 'Använd Google Recaptcha';
$lang['form_lang_validation'] = 'Språk';
$lang['form_lang_validation_help'] = 'För validering av Meddelanden';
$lang['form_btn_submit_text'] = 'Text på skicka knappen';
$lang['form_success_submit_msg'] = 'Meddelande för att visa efter formuläret har skickats';
$lang['total_submissions'] = 'Totalt antal inskicks';
$lang['form_integration_code'] = 'Integration Kode';
$lang['not_lead_imported_from_form'] = 'Nya Lead Importerat från webben för att Lead formuläret - %s';
$lang['not_lead_activity_log_attachment'] = 'Bifogad fil Importerad från formuläret - %s';
$lang['form_integration_code_help'] = 'Kopiera och klistra in koden någonstans på din webbplats för att visa formuläret, dessutom kan du  justera bredden och höjden i px för att passa för din webbplats.';
$lang['invoice_not_found'] = 'Faktura hittades inte';
$lang['estimate_not_found'] = 'Offert hittades inte';
$lang['expense_not_found'] = 'Kostnad hittades inte';
$lang['proposal_not_found'] = 'Förslag hittades inte';
$lang['new_task_assigned_non_user'] = 'Ny uppgift är tilldelad dig - %s';
$lang['no_child_found'] = 'Ingen relation %s hittades';
$lang['company_vat_number'] = 'Momsregistreringsnummer';
$lang['not_lead_assigned_from_form'] = 'Ny Lead tilldelad dig';
$lang['not_lead_activity_assigned_from_form'] = 'Lead tilldelat %s';
$lang['form_allow_duplicate'] = 'Tillåt dubbletter% s att sättas in i databasen?';
$lang['track_duplicate_by_field'] = 'Förhindra dubbletter på fält';
$lang['and_track_duplicate_by_field'] = '+ fält (lämna tomt för att spåra dubbletter av endast ett fält)';
$lang['create_the_duplicate_form_data_as_task'] = 'Skapa dubblett % s data som tilldelas som uppgift till ansvarig anställd';
$lang['create_the_duplicate_form_data_as_task_help'] = 'Används för ytterligare granskning för inskickad data och där vidtas nödvändiga åtgärder i hjälpande syfte';
$lang['currently_selected'] = 'för tillfället valda';
$lang['search_ajax_empty'] = 'Välj och börja skriva';
$lang['search_ajax_placeholder'] = 'Skriv för att söka...';
$lang['search_ajax_searching'] = 'Just nu söker jag...';
$lang['search_ajax_initialized'] = 'Börja skriva för att söka';
$lang['lead_description'] = 'Beskrivning';
$lang['lead_website'] = 'Website';
$lang['invoice_activity_auto_converted_from_estimate'] = 'Faktura skapas automatiskt från offert med nummer %s';
$lang['hour_of_day_perform_auto_operations'] = 'Timme på dagen för att utföra automatiska operationer';
$lang['hour_of_day_perform_auto_operations_format'] = '24-timmarsformat ex. 9 för 09:00 eller 15 för 3:00.';
$lang['inv_hour_of_day_perform_auto_operations_help'] = 'Används för återkommande fakturor, förfallna meddelanden etc..';
$lang['use_minified_files'] = 'Använd minified fil version för css och js (endast systemfiler)';

# Version 1.5.0
$lang['logo_favicon_changed_notice'] = 'Logotyp eller Favicon, en förändring upptäcktes. Om du fortfarande ser den ursprungliga logotypen försök rensa webbläsarens cacheminne';
$lang['kb_search_articles'] = 'Sök i kunskapsdatabasen';
$lang['kb_search'] = 'Sök';
$lang['have_a_question'] = 'Har en fråga?';
$lang['card_expiration_year'] = 'Slutår';
$lang['card_expiration_month'] = 'Utgångs Månad';
$lang['client_website'] = 'Website';
$lang['search_project_members'] = 'Sök projektmedlemmar...';
$lang['cf_translate_input_link_title'] = 'Titel';
$lang['cf_translate_input_link_url'] = 'URL';
$lang['cf_translate_input_link_tip'] = 'Klicka här för att lägga länk';
$lang['task_edit_delete_timesheet_notice'] = 'Tidrapport uppgift är % s, du kan inte % s tidrapporten.';
$lang['department_username'] = 'IMAP Användarnamn';
$lang['department_username_help'] = 'Fyll Bara i detta område om IMAP-servern använder användarnamn för att logga in i stället för e-postadress. Observera att du fortfarande kommer att behöva lägga till e-postadressen.';
$lang['total_tickets_deleted'] = 'Totalt antal ärenden borttagna: %s';

# Version 1.5.1
$lang['ticket_linked_to_project'] = 'Detta ärende är kopplad till projektet: %s';
$lang['only_own_files_contacts'] = 'Kontakter ser bara egna filer uppladdade i kundområde (filer uppladdade i kundprofil ))';
$lang['only_own_files_contacts_help'] = 'Om du delar filen manuellt från kundprofil till andra kontakter kommer de att kunna se filen.';
$lang['share_file_with'] = 'Dela filer med';
$lang['file_share_visibility_notice'] = 'Den här filen är inte delas med kontakter, växla synlighet igen för att ladda om.';
$lang['share_file_with_show'] = 'Denna fil delas med: %s';
$lang['allow_primary_contact_to_view_edit_billing_and_shipping'] = 'Låt primära kontakt att se / redigera fakturerings & leveransinformation';
$lang['estimate_due_after'] = 'Offert förfaller efter (dagar)';

# Version 1.6.0
$lang['my_timesheets'] = 'Mitt tidskort';
$lang['today'] = 'Idag';
$lang['open_in_dropbox'] = 'Öppna i Dropbox';
$lang['show_primary_contact'] = 'Visa primära kontakt med fullständigt namn på %s';
$lang['view_members_timesheets'] = 'Visa alla tidskort';
$lang['priority'] = 'Prioritet';
$lang['fetch_from_google'] = 'Hämta från google';
$lang['customer_fetch_lat_lng_usage'] = 'Fyll i adress, stad och land innan hämtningen för att få bästa resultat.';
$lang['g_search_address_not_found'] = 'Adressen kunde\'t hittas, försök igen.';
$lang['proposals_report'] = 'Rapport Anbud';
$lang['staff_members_open_tickets_to_all_contacts_help'] = 'Om anställd inte har tillgång att SE kund så enda möjligheten att kunna skapa ett ärende är att anställd blivigt tilldelad att bli kund Admin.';
$lang['staff_members_open_tickets_to_all_contacts'] = 'Låt anställda att öppna ärenden till alla kontakter?';
$lang['charts_based_report'] = 'Diagram Baserad Rapport';
$lang['delete_backups_older_then'] = 'Automatiskt ta bort säkerhetskopior äldre än X dagar (ange 0 för att avaktivera)';
$lang['responsible_admin'] = 'ansvarig admin';
$lang['tags'] = 'Tags';
$lang['tag'] = 'Tag';
$lang['customer_map_notice'] = 'Lägg till longitud och latitud i kundprofil för att visa kartan här';
$lang['default_view'] = 'standardvy';
$lang['day'] = 'Dag';
$lang['agenda'] = 'Agenda';
$lang['timesheet_tags'] = 'tidrapports Taggar';
$lang['show_more'] = 'Visa mer';
$lang['show_less'] = 'Visa mindre';
$lang['project_completed_date'] = 'avslutade Datum';
$lang['language'] = 'Språk';
$lang['this_week'] = 'Denna vecka';
$lang['last_week'] = 'Förra veckan';
$lang['this_month'] = 'Den här månaden';
$lang['last_month'] = 'Förra månaden';
$lang['no_description_project'] = 'Ingen beskrivning för detta projekt';
$lang['sales_string'] = 'försäljning';
$lang['no_project_members'] = 'Inga medlemmar för detta projekt';
$lang['search_by_tags'] = 'Använd # + taggnamnet för att söka efter taggar';
$lang['project_status_5'] = 'Avbruten';

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