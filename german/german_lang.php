<?php
# Version 1.0.0
#
# General
$lang['id']                   = 'ID';
$lang['name']                 = 'Name';
$lang['options']              = 'Optionen';
$lang['submit']               = 'Speichern';
$lang['added_successfuly']    = 'Erfolgreich hinzugefügt!';
$lang['updated_successfuly']  = 'Erfolgreich aktualisiert.';
$lang['edit']                 = 'Bearbeite';
$lang['add_new']              = 'Neu hinzufügen';
$lang['deleted']              = 'gelöscht';
$lang['problem_deleting']     = 'Problem löschen';
$lang['is_referenced']        = 'Die ID von %s wird bereits verwendet.';
$lang['close']                = 'Schließen';
$lang['send']                 = 'Senden';
$lang['cancel']               = 'Abbrechen';
$lang['go_back']              = 'Gehe zurück';
$lang['error_uploading_file'] = 'hochgeladene fehler Datei';
$lang['load_more']            = 'Lade mehr';
$lang['cant_delete_default']  = 'Kann den Fehler %s nicht löschen';

# Invoice General
$lang['invoice_status_paid']                = 'Bezahlt';
$lang['invoice_status_unpaid']              = 'Offen';
$lang['invoice_status_overdue']             = 'Überfällig';
$lang['invoice_status_not_paid_completely'] = 'Teilzahlung eingegangen';

$lang['invoice_pdf_heading'] = 'Rechnung';

$lang['invoice_table_item_heading']            = 'Artikel';
$lang['invoice_table_quantity_heading']        = 'Qualität';
$lang['invoice_table_rate_heading']            = 'Rate';
$lang['invoice_table_tax_heading']             = 'Steuer';
$lang['invoice_table_amount_heading']          = 'Summe';
$lang['invoice_subtotal']                      = 'Zwischensumme';
$lang['invoice_adjustment']                    = 'Einstellung';
$lang['invoice_total']                         = 'Gesamt';
$lang['invoice_vat']                           = 'VAT Nummer';
$lang['invoice_bill_to']                       = 'Rechnung für';
$lang['invoice_data_date']                     = 'Rechnungsdatum';
$lang['invoice_data_duedate']                  = 'Fälligkeitsdatum:';
$lang['invoice_received_payments']             = 'Transaktionen';
$lang['invoice_no_payments_found']             = 'Für diese Rechnung wurden keine Zahlungen gefunden';
$lang['invoice_note']                          = 'Notiz:';
$lang['invoice_payments_table_number_heading'] = 'Zahlung #';
$lang['invoice_payments_table_mode_heading']   = 'Zahlungsmethode';
$lang['invoice_payments_table_date_heading']   = 'Datum';
$lang['invoice_payments_table_amount_heading'] = 'Betrag';


# Announcements
$lang['announcement']                 = 'Ankündigung';
$lang['announcement_lowercase']       = 'ankündigung';
$lang['announcements']                = 'Ankündigungen';
$lang['announcements_lowercase']      = 'ankündigungen';
$lang['new_announcement']             = 'neue Ankündigung';
$lang['announcement_name']            = 'Name der Ankündigung';
$lang['announcement_message']         = 'Nachricht';
$lang['announcement_show_to_staff']   = 'Zeige den Mitarbeitern';
$lang['announcement_show_to_clients'] = 'Zeige den Kunden';
$lang['announcement_show_my_name']    = 'Zeige meinen Namen';

# Clients
$lang['clients']                               = 'Kunden';
$lang['client']                                = 'Kunde';
$lang['new_client']                            = 'Neuer Kunde';
$lang['client_lowercase']                      = 'kunde';
$lang['client_delete_tooltip']                 = 'Alle Kundendaten werden gelöscht. Verträge, Tickets, Notizen. Notiz: Wenn Rechnungen gefunden werden, wird der Kunde nicht gelöscht. Sie müssen diese Rechnungen einem anderen Kunden zuordnen um die Rechnungsnummer zu behalten.';
$lang['customer_delete_invoices_warning']      = 'Dieser Kunde hat Rechnungen in seinem Account. Sie können den Kunden nicht löschen. Ändere in Zukunft alle Rechnungen auf einen anderen Kunden und lösche sie dann.';
$lang['client_firstname']                      = 'Vorname';
$lang['client_lastname']                       = 'Nachname';
$lang['client_email']                          = 'E-Mail';
$lang['client_company']                        = 'Firma';
$lang['client_vat_number']                     = 'UsSt.Nr.';
$lang['client_address']                        = 'Adresse';
$lang['client_city']                           = 'Stadt';
$lang['client_postal_code']                    = 'Postleitzahl';
$lang['client_state']                          = 'Land';
$lang['client_password']                       = 'Passwort';
$lang['client_password_change_populate_note']  = 'Notiz: Wenn Sie diese Bereiche besetzen, wird das Passwort auf diesen Kunden geändert';
$lang['client_password_last_changed']          = 'Passwort zuletzt geändert:';
$lang['login_as_client']                       = 'Login als Kunde';
$lang['client_invoices_tab']                   = 'Rechnungen';
$lang['contracts_invoices_tab']                = 'Verträge';
$lang['contracts_tickets_tab']                 = 'Tickets';
$lang['contracts_notes_tab']                   = 'Notizen';
$lang['client_invoice_number_table_heading']   = 'Rechnung #';
$lang['client_invoice_date_table_heading']     = 'Datum';
$lang['client_invoice_due_date_table_heading'] = 'Fälligkeitsdatum';
$lang['client_string_table_heading']           = 'Kunde';
$lang['client_amount_table_heading']           = 'Betrag';
$lang['client_status_table_heading']           = 'Status';
$lang['note_description']                      = 'Notiere die Beschreibung';

$lang['client_string_contracts_table_heading']      = 'Kunde';
$lang['client_start_date_contracts_table_heading']  = 'Startdatum';
$lang['client_end_date_contracts_table_heading']    = 'Enddatum';
$lang['client_description_contracts_table_heading'] = 'Beschreibung';
$lang['client_do_not_send_welcome_email']           = 'Versende keine Willkommens E-Mail';

$lang['clients_notes_table_description_heading'] = 'Beschreibung';
$lang['clients_notes_table_addedfrom_heading']   = 'Hinzugefügt von';
$lang['clients_notes_table_dateadded_heading']   = 'Datum hinzugefügt';

$lang['clients_list_full_name']   = 'Vollständiger Name';
$lang['clients_list_last_login']  = 'Letzte Anmeldung';

# Contracts
$lang['contracts']                = 'Verträge';
$lang['contract']                 = 'Vertrag';
$lang['new_contract']             = 'Neuer Vertrag';
$lang['contract_lowercase']       = 'vertrag';
$lang['contract_start_date']      = 'Vertragsbeginn';
$lang['contract_end_date']        = 'Vertragsende';
$lang['contract_subject']         = 'Vertragsgegenstand';
$lang['contract_description']     = 'Beschreibung';
$lang['contract_subject_tooltip'] = 'Objektname ist für den Kunden ersichtlich.';
$lang['contract_client_string']   = 'Kunde';
$lang['contract_attach']          = 'Dokument anhängen';

$lang['contract_list_client']     = 'Kunde';
$lang['contract_list_subject']    = 'Objekt';
$lang['contract_list_start_date'] = 'Vertragsbeginn';
$lang['contract_list_end_date']   = 'Vertragsende';

# Currencies
$lang['currencies']           = 'Währungen';
$lang['currency']             = 'Währung';
$lang['new_currency']         = 'Neue Währung';
$lang['currency_lowercase']   = 'währung';
$lang['base_currency_set']    = 'Das ist nun Ihre Standardwährung.';
$lang['make_base_currency']   = 'Verwende die Standardwährung';
$lang['base_currency_string'] = 'Standardwährung';

$lang['currency_list_name']   = 'Name';
$lang['currency_list_symbol'] = 'Symbol';


$lang['currency_add_edit_description'] = 'Währungs Name';
$lang['currency_add_edit_rate']        = 'Symbol';

$lang['currency_edit_heading'] = 'Füge Währung hinzu';
$lang['currency_add_heading']  = 'Füge neue Währung hinzu';


# Department
$lang['departments']          = 'Abteilungen';
$lang['department']           = 'Abteilung';
$lang['new_department']       = 'Neue Abteilung';
$lang['department_lowercase'] = 'abteilung';

$lang['department_name']             = 'Abteilungs Name';
$lang['department_email']            = 'Abteilungs E-Mail';
$lang['department_hide_from_client'] = 'Verbergen vor dem Kunden';
$lang['department_list_name']        = 'Name';

# Email Templates
$lang['email_templates']                        = 'Email Vorlagen';
$lang['email_template']                         = 'Email Vorlage';
$lang['email_template_lowercase']               = 'email vorlage';
$lang['email_templates_lowercase']              = 'email vorlagen';
$lang['email_template_ticket_fields_heading']   = 'Tickets';
$lang['email_template_invoices_fields_heading'] = 'Rechnungen';
$lang['email_template_clients_fields_heading']  = 'Kunden';

$lang['template_name']                                      = 'Namensvorlage';
$lang['template_subject']                                   = 'Subjekt';
$lang['template_fromname']                                  = 'Vom Namen';
$lang['template_fromemail']                                 = 'Von der Email';
$lang['send_as_plain_text']                                 = 'Sende als Klartext';
$lang['email_template_disabed']                             = 'beschädigt';
$lang['email_template_email_message']                       = 'E-Mail Nachricht';
$lang['email_template_merge_fields']                        = 'verbinde die Bereiche';
$lang['available_merge_fields']                             = 'Bereiche verbinden verfügbar';
# Home
$lang['dashboard_string']                                   = 'Pinnwand';
$lang['home_latest_todos']                                  = 'Letzte ToDoes';
$lang['home_no_latest_todos']                               = 'Keine ToDoes gefunden';
$lang['home_latest_finished_todos']                         = 'Zuletzt erledigte to Dos';
$lang['home_no_finished_todos_found']                       = 'Keine erledigten ToDoes gefunden';
$lang['home_todo_heading']                                  = 'ToDoes Artikel';
$lang['home_tickets_awaiting_reply_by_department']          = 'Tickets erwarten Antworten von der Abteilung';
$lang['home_tickets_awaiting_reply_by_status']              = 'Tickets erwarten Antworten - Status';
$lang['home_this_week_events']                              = 'Veranstaltungen dieser Woche';
$lang['home_upcoming_events_next_week']                     = 'Bevorstehende Veranstaltung nächste Woche';
$lang['home_event_added_by']                                = 'Veranstaltung hinzugefügt durch';
$lang['home_public_event']                                  = 'öffentliche Veranstaltung';
$lang['home_weekly_payment_records']                        = 'Wöchentliche Zahlungsbelege';
$lang['home_weekend_ticket_opening_statistics']             = 'Wöchentliches Ticket eröffnet Statistiken';
# Newsfeed
$lang['whats_on_your_mind']                                 = 'Was haben Sie auf dem Herzen?';
$lang['new_post']                                           = 'Neuer Post';
$lang['newsfeed_upload_tooltip']                            = 'Tip: Hier können Sie Dateien hochladen...';
$lang['newsfeed_all_departments']                           = 'Alle Abteilungen';
$lang['newsfeed_pin_post']                                  = 'Pin Post';
$lang['newsfeed_unpin_post']                                = 'Unpin post';
$lang['newsfeed_delete_post']                               = 'Löschen';
$lang['newsfeed_published_post']                            = 'veröffentlichter Post';
$lang['newsfeed_you_like_this']                             = 'Ihnen gefällt das';
$lang['newsfeed_like_this']                                 = 'gefällt mir';
$lang['newsfeed_one_other']                                 = 'ein anderes';
$lang['newsfeed_you']                                       = 'Sie';
$lang['newsfeed_and']                                       = 'und';
$lang['newsfeed_you_and']                                   = 'Sie und';
$lang['newsfeed_like_this_saying']                          = 'gefällt dieser Spruch';
$lang['newsfeed_unlike_this_saying']                        = 'gefällt dieser Spruch nicht';
$lang['newsfeed_show_more_comments']                        = 'Zeige mehr Kommentare';
$lang['comment_this_post_placeholder']                      = 'Kommentiere diesen Post..';
$lang['newsfeed_post_likes_modal_heading']                  = 'Kollegen denen dieser Post gefällt';
$lang['newsfeed_comment_likes_modal_heading']               = 'Kollegen denen dieser Kommentar gefällt';
$lang['newsfeed_newsfeed_post_only_visible_to_departments'] = 'Dieser Post ist nur für folgende Abteilungen sichtbar: %s';
# Invoice Items
$lang['invoice_items']                                      = 'Rechnungsartikel';
$lang['invoice_item']                                       = 'Rechnungsartikel';
$lang['new_invoice_item']                                   = 'Neuer Rechnungsartikel';
$lang['invoice_item_lowercase']                             = 'rechnungsartikel';

$lang['invoice_items_list_description'] = 'Beschreibung';
$lang['invoice_items_list_rate']        = 'Rate';
$lang['invoice_items_list_tax']         = 'Steuer';

$lang['invoice_item_add_edit_description'] = 'Beschreibung';
$lang['invoice_item_add_edit_rate']        = 'Rate';
$lang['invoice_item_add_edit_tax']         = 'Steuer';
$lang['invoice_item_add_edit_tax_select']  = 'Steuersatz auswählen';

$lang['invoice_item_edit_heading'] = 'Bearbeite Artikel';
$lang['invoice_item_add_heading']  = 'Neuen Artikel hinzufügen';

# Invoices


$lang['invoices']                       = 'Rechnungen';
$lang['invoice']                        = 'Rechnung';
$lang['invoice_lowercase']              = 'rechnung';
$lang['create_new_invoice']             = 'Erstelle eine neue Rechnung';
$lang['view_invoice']                   = 'Rechnung ansehen';
$lang['invoice_number_changed']         = 'Die Rechnung wurde erfolgreich erstellt, aber die Nummer wurde geändert, da vor Ihnen jemand eine neue Rechnung hinzugefügt hat.';
$lang['invoice_payment_recorded']       = 'Rechnungsbezahlung verzeichnet';
$lang['invoice_payment_record_failed']  = 'Das Verzeichen der Rechnungsbezahlung fehlgeschlagen.';
$lang['invoice_sent_to_client_success'] = 'Die Rechnung wurde erfolgreich an den Kunden versandt.';
$lang['invoice_sent_to_client_fail']    = 'Problem während dem Versenden der Rechnung.';
$lang['invoice_reminder_send_problem']  = 'Problem beim Versenden des Erinnerers an die überfällige Rechnung.';
$lang['invoice_overdue_reminder_sent']  = 'Rechnungs- Überfälligkeits- Erinnerer erfolgreich versandt.';

$lang['invoice_details']              = 'Rechnungs Details';
$lang['invoice_view']                 = 'Rechnung ansehen';
$lang['invoice_select_customer']      = 'Kunde';
$lang['invoice_add_edit_number']      = 'Rechnungsnummer';
$lang['invoice_add_edit_date']        = 'Rechnungsdatum';
$lang['invoice_add_edit_duedate']     = 'Fälligkeitsdatum';
$lang['invoice_add_edit_currency']    = 'Währung';
$lang['invoice_add_edit_client_note'] = 'Kundennotiz';
$lang['invoice_add_edit_admin_note']  = 'Mitarbeiter Notiz';

$lang['invoice_add_edit_search_item']  = 'Suche Artikel';
$lang['invoices_toggle_table_tooltip'] = 'Zeige ganze Tabelle';

$lang['edit_invoice_tooltip']                   = 'Rechnung bearbeiten';
$lang['delete_invoice_tooltip']                 = 'Rechnung löschen - Alle Zahlungen werden gelöscht.';
$lang['invoice_sent_to_email_tooltip']          = 'Rechnung per E-Mail senden';
$lang['invoice_already_send_to_client_tooltip'] = 'Die Rechnung wurde bereits an den Kunden %s versandt';
$lang['send_overdue_notice_tooltip']            = 'Sende Zahlungserinnerung';
$lang['invoice_view_activity_tooltip']          = 'Aktivitätsaufzeichungen';
$lang['invoice_record_payment']                 = 'Zahlungsaufzeichnungen';


$lang['invoice_send_to_client_modal_heading']    = 'Sende diese Rechnung an den Kunden';
$lang['invoice_send_to_client_attach_pdf']       = 'Rechnung an E-Mail anfügen (PDF)';
$lang['invoice_send_to_client_preview_template'] = 'Zeige die E-Mail Vorlage';

$lang['invoice_dt_table_heading_number']  = 'Rechnung #';
$lang['invoice_dt_table_heading_date']    = 'Datum';
$lang['invoice_dt_table_heading_client']  = 'Kunde';
$lang['invoice_dt_table_heading_duedate'] = 'Fälligkeitsdatum';
$lang['invoice_dt_table_heading_amount']  = 'Betrag';
$lang['invoice_dt_table_heading_status']  = 'Status';

$lang['record_payment_for_invoice']              = 'Erfasse die Zahlung für';
$lang['record_payment_amount_received']          = 'Betrag erhalten';
$lang['record_payment_date']                     = 'Zahlungsdatum';
$lang['record_payment_leave_note']               = 'Hinterlasse eine Notiz';
$lang['invoice_payments_received']               = 'Zahlungen erhalten';
$lang['invoice_record_payment_note_placeholder'] = 'Mitarbeiter Notiz';
$lang['no_payments_found']                       = 'Keine Zahlung für diese Rechnung gefunden';
$lang['invoice_email_link_text']                 = 'Zeige Rechnung';

# Payments
$lang['payments']                             = 'Zahlungen';
$lang['payment']                              = 'Zahlung';
$lang['payment_lowercase']                    = 'zahlung';
$lang['payments_table_number_heading']        = 'Zahlung #';
$lang['payments_table_invoicenumber_heading'] = 'Rechnung #';
$lang['payments_table_mode_heading']          = 'Zahlungsmetode';
$lang['payments_table_date_heading']          = 'Datum';
$lang['payments_table_amount_heading']        = 'Betrag';
$lang['payments_table_client_heading']        = 'Kunden';
$lang['payment_not_exists']                   = 'Die Zahlung existiert nicht';

$lang['payment_edit_for_invoice']     = 'Zahlung für die Rechnung';
$lang['payment_edit_amount_received'] = 'Betrag erhalten';
$lang['payment_edit_date']            = 'Zahlungsdatum';
$lang['payment_edit_lave_note']       = 'Notiz hinterlassen';


# Knowledge Base
$lang['kb_article_add_edit_subject'] = 'Betreff';
$lang['kb_article_add_edit_group']   = 'Gruppe';
$lang['kb_string']                   = 'Wissensdatenbank';
$lang['kb_article']                  = 'Artikel';
$lang['kb_article_lowercase']        = 'artikel';
$lang['kb_article_new_article']      = 'Neuer Artikel';
$lang['kb_article_disabled']         = 'Deaktivieren';
$lang['kb_article_description']      = 'Artikelbeschreibung';

$lang['kb_table']                      = 'Liste';
$lang['kb_no_articles_found']          = 'Kein Artikel in der Wissensdatenbank gefunden';
$lang['kb_dt_article_name']            = 'Artikel Name';
$lang['kb_dt_group_name']              = 'Gruppe';
$lang['new_group']                     = 'Neue Gruppe';
$lang['kb_group_add_edit_name']        = 'Gruppenname';
$lang['kb_group_add_edit_description'] = 'Kurzbeschreibung';
$lang['kb_group_add_edit_disabled']    = 'Deaktivieren';
$lang['kb_group_add_edit_note']        = 'Hinweis: Alle Artikel in dieser Gruppe werden deaktivert.';
$lang['group_table_name_heading']      = 'Name';
$lang['group_table_isactive_heading']  = 'Aktivieren';
$lang['kb_no_groups_found']            = 'Keine Wissensdatenbank gefunden';

# Mail Lists
$lang['mail_lists']                           = 'Mailing Listen';
$lang['mail_list']                            = 'Mailing Liste';
$lang['new_mail_list']                        = 'Neue Mailing Liste';
$lang['mail_list_lowercase']                  = 'mailing liste';
$lang['custom_field_deleted_success']         = 'Kunden Bereich gelöscht';
$lang['custom_field_deleted_fail']            = 'Problem beim Löschen des Kunden-Bereichs';
$lang['email_removed_from_list']              = 'E-Mail von der Liste gelöscht';
$lang['email_remove_fail']                    = 'Email von der LIste entfernt';
$lang['staff_mail_lists']                     = 'Mitarbeiter Mailing Liste';
$lang['clients_mail_lists']                   = 'Kunden Mailing Liste';
$lang['mail_list_total_imported']             = 'Alle importierten E-Mails: %s';
$lang['mail_list_total_duplicate']            = 'Alle vervielfachten E-Mails: %s';
$lang['mail_list_total_failed_to_insert']     = 'Alle zum Einsetzen verfehlten Emails: %s';
$lang['mail_list_total_invalid']              = 'Ungültige Email Adressen: %s';
$lang['cant_edit_mail_list']                  = 'Sie können diese Liste nicht bearbeiten, die Liste ist automatisch befüllt worden.';
$lang['mail_list_add_edit_name']              = 'Mail-Listen Name';
$lang['mail_list_add_edit_customfield']       = 'Füge Kunden Bereich hinzu';
$lang['mail_lists_viewing_emails']            = 'Listen-Emails ansehen';
$lang['mail_lists_view_email_email_heading']  = 'Email';
$lang['mail_lists_view_email_date_heading']   = 'Datum hinzugefügt';
$lang['add_new_email_to']                     = 'Füge eine neue Email hinzu';
$lang['mail_list_new_email_edit_add_label']   = 'E-Mail';
$lang['mail_list_import_file']                = 'Importiere Datei';
$lang['mail_list_available_custom_fields']    = 'Verfügbare Kunden Bereiche';
$lang['submit_import_emails']                 = 'Importiere Emails';
$lang['btn_import_emails']                    = 'Importire Emails (Excel)';
$lang['btn_add_email_to_list']                = 'Füge die Email dieser Liste hinzu.';
$lang['mail_lists_dt_list_name']              = 'Listen Name';
$lang['mail_lists_dt_datecreated']            = 'Datum erstellt';
$lang['mail_lists_dt_creator']                = 'Urheber';
$lang['email_added_to_mail_list_successfuly'] = 'Email zur Liste hinzugefügt';
$lang['email_is_duplicate_mail_list']         = 'Email exisitert in dieser Liste bereits';

# Payment modes
$lang['new_payment_mode']       = 'Neu Zahlungsmöglichkeiten';
$lang['payment_modes']          = 'Zahungsmöglichkeit';
$lang['payment_mode']           = 'Zahungsmöglichkeit';
$lang['payment_mode_lowercase'] = 'zahungsmöglichkeit';
$lang['payment_modes_dt_name']  = 'Zahungsmöglichkeit Name';

$lang['payment_mode_add_edit_name'] = 'Zahungsmöglichkeit Name';
$lang['payment_mode_edit_heading']  = 'Bearbeite Zahungsmöglichkeit';
$lang['payment_mode_add_heading']   = 'Neue Zahungsmöglichkeit hinzufügen';

# Predefined Ticket Replies
$lang['new_predefined_reply']              = 'Neue vordefinierte Antwort';
$lang['predefined_replies']                = 'Vordefinierte Antworten';
$lang['predefined_reply']                  = 'Vordefinierte Antwort';
$lang['predefined_reply_lowercase']        = 'vordefinierte antwort';
$lang['predifined_replies_dt_name']        = 'Name der vordefinierten Antworten';
$lang['predifined_reply_add_edit_name']    = 'Name der vordefinierten Antwort';
$lang['predifined_reply_add_edit_content'] = 'Inhalt der Antwort';

# Ticket Priorities
$lang['new_ticket_priority']           = 'Neue Priorität';
$lang['ticket_priorities']             = 'Ticket Prioritäten';
$lang['ticket_priority']               = 'Ticket Priorität';
$lang['ticket_priority_lowercase']     = 'ticket priorität';
$lang['no_ticket_priorities_found']    = 'Keine Ticket-Prioritäten gefunden.';
$lang['ticket_priority_dt_name']       = 'Ticket-Prioritäten Name';
$lang['ticket_priority_add_edit_name'] = 'Prioritätenname';

# Reports
$lang['kb_reports']                         = 'Berichte über Basis Artikel Kentnis';
$lang['sales_reports']                      = 'Verkaufsberichte';
$lang['reports_choose_kb_group']            = 'Gruppe auswählen';
$lang['reports_sales_select_report_type']   = 'Wähle einen Bericht aus';
$lang['report_kb_yes']                      = 'Ja';
$lang['report_kb_no']                       = 'Nein';
$lang['report_kb_no_votes']                 = 'Noch keine Abstimmungen';
$lang['report_this_week_leads_conversions'] = 'Lead-Gespräche dieser Woche.';
$lang['report_leads_sources_conversions']   = 'Quellen';
$lang['report_leads_monthly_conversions']   = 'Monatlich';
$lang['sales_report_heading']               = 'Verkaufsberichte';
$lang['report_sales_type_income']           = 'Gesamteinkommen';

$lang['report_sales_type_customer']                    = 'Kunden Bericht';
$lang['report_sales_base_currency_select_explanation'] = 'Sie müssen eine Währung auswählen, da Sie Rechnungen mit verschiedenen Währungen haben.';
$lang['report_sales_from_date']                        = 'Von Datum';
$lang['report_sales_to_date']                          = 'bis Datum';


$lang['report_sales_months_all_time']      = 'Gesamter Zeitraum';
$lang['report_sales_months_six_months']    = 'Letzte 6 Monate';
$lang['report_sales_months_twelve_months'] = 'Letzte 12 Monate';
$lang['report_sales_months_custom']        = 'Benutzerdefiniert';
$lang['reports_sales_generated_report']    = 'Erstelle einen Bericht';



$lang['reports_sales_dt_customers_client']                = 'Kunde';
$lang['reports_sales_dt_customers_total_invoices']        = 'Gesamtrechnungen';
$lang['reports_sales_dt_items_customers_amount']          = 'Betrag';
$lang['reports_sales_dt_items_customers_amount_with_tax'] = 'Betrag mit Steuer';

# Roles
$lang['new_role']           = 'Neue Rolle';
$lang['all_roles']          = 'Alle Rollen';
$lang['roles']              = 'Mitarbeiter Rollen';
$lang['role']               = 'Rollen';
$lang['role_lowercase']     = 'rollen';
$lang['roles_total_users']  = 'Gesamtbenutzer: ';
$lang['roles_dt_name']      = 'Rollen Name';
$lang['role_add_edit_name'] = 'Rollen Name';

# Service
$lang['new_service']           = 'Neuer Service';
$lang['services']              = 'Service';
$lang['service']               = 'Service';
$lang['service_lowercase']     = 'service';
$lang['services_dt_name']      = 'Service Name';
$lang['service_add_edit_name'] = 'Service Name';

# Settings
$lang['settings']                     = 'Einstellungen';
$lang['settings_updated']             = 'Einstellungen aktualisiert';
$lang['settings_save']                = 'Speichere Einstellungen';
$lang['settings_group_general']       = 'Allgemein';
$lang['settings_group_localization']  = 'Lokalisation';
$lang['settings_group_tickets']       = 'Tickets';
$lang['settings_group_sales']         = 'Finanzen';
$lang['settings_group_email']         = 'E-Mail';
$lang['settings_group_clients']       = 'Kunden';
$lang['settings_group_newsfeed']      = 'Neuigkeiten';
$lang['settings_group_cronjob']       = 'Cron Job';

$lang['settings_yes']                                        = 'Ja';
$lang['settings_no']                                         = 'Nein';
$lang['settings_clients_default_theme']                      = 'Standard Kunden Vorlage';
$lang['settings_clients_allow_registration']                 = 'Kunden können sich anmelden';
$lang['settings_clients_allow_kb_view_without_registration'] = 'Wissensdatenbank Zugriff ohne Login';

$lang['settings_cron_send_overdue_reminder']                 = 'Sende Erinnerung für rückständige Rechnungen.';
$lang['settings_cron_send_overdue_reminder_tooltip']         = 'Sende eine Überfälligkeits-Email an den Kunden wenn der Status vom Cron Job auf überfällig aktualisiert wurde.';
$lang['automatically_send_invoice_overdue_reminder_after']   = 'Sende automatisch eine Erinnerung nach (Tagen).';
$lang['automatically_resend_invoice_overdue_reminder_after'] = 'Sende automatisch eine erneute Erinnerung nach (Tagen)';

$lang['settings_email_host']      = 'SMTP Host';
$lang['settings_email_port']      = 'SMTP Port';
$lang['settings_email']           = 'SMTP Email';
$lang['settings_email_password']  = 'SMTP Passwort';
$lang['settings_email_charset']   = 'Email Charset';
$lang['settings_email_signature'] = 'Email Signatur';

$lang['settings_general_company_logo']                = 'Firmen Logo';
$lang['settings_general_company_logo_tooltip']        = 'Empfohlene Abmessung: 150 x 32px';
$lang['settings_general_company_remove_logo_tooltip'] = 'Entferne Firmen Logo';
$lang['settings_general_company_name']                = 'Firmen Name';
$lang['settings_general_company_main_domain']         = 'Firmen Haupt Domain';
$lang['settings_general_use_knowledgebase']           = 'Verwende Basis Kentnisse';
$lang['settings_general_use_knowledgebase_tooltip']   = 'Wenn Sie diese Optionen aktivieren, werden Basiskentnisse auch auf Kundenebene gezeigt.';
$lang['settings_general_tables_limit']                = 'Tabellen Anzeige Limit';
$lang['settings_general_default_staff_role']          = 'Standard-Mitarbeiter Rolle';
$lang['settings_general_default_staff_role_tooltip']  = 'Wenn Sie einen neuen Mitarbeiter hinzufügen, wird diese Rolle standardmäßig ausgewählt.';

$lang['settings_localization_date_format']      = 'Datumsformat';
$lang['settings_localization_default_timezone'] = 'Standard Zeitzone';
$lang['settings_localization_default_language'] = 'Standard Sprache';

$lang['settings_newsfeed_max_file_upload_post']    = 'Maximale Dateien zum Upload';
$lang['settings_newsfeed_max_file_size']           = 'Maximale Dateigröße (MB)';

$lang['settings_reminders_contracts']         = 'Vertragsablauf Erinnerung';
$lang['settings_reminders_contracts_tooltip'] = 'Vertragsablauf Erinnerung in Tagen';

$lang['settings_tickets_use_services']             = 'Aktiviere Service';
$lang['settings_tickets_max_attachments']          = 'Maximum an Ticket Befestigungen';
$lang['settings_tickets_allow_departments_access'] = 'Erlaube Mitarbeitern nur auf Tickets zuzugreifen, welche zur Angestellten Abteilung gehören.';
$lang['settings_tickets_allowed_file_extensions']  = 'Erlaubte Dateierweiterungen';

$lang['settings_sales_general']                                    = 'Allgemein';
$lang['settings_sales_general_note']                               = 'Allgemeine Einstellungen';
$lang['settings_sales_invoice_prefix']                             = 'Rechnungs Kennzeichung';
$lang['settings_sales_decimal_separator']                          = 'Dezimal Trennzeichen';
$lang['settings_sales_thousand_separator']                         = 'Tausender Trennzeichen';
$lang['settings_sales_currency_placement']                         = 'Währungsplatzierung';
$lang['settings_sales_currency_placement_before']                  = 'Betrag bevor';
$lang['settings_sales_currency_placement_after']                   = 'Betrag nach';
$lang['settings_sales_require_client_logged_in_to_view_invoice']   = 'Der Kunde muss eingeloggt sein um Rechnungen anzusehen.';
$lang['settings_sales_next_invoice_number']                        = 'Nächste Rechnungs Nummer';
$lang['settings_sales_next_invoice_number_tooltip']                = 'Setze diesen Bereich auf 1 wenn Sie vom Anfang starten möchten.';
$lang['settings_sales_decrement_invoice_number_on_delete']         = 'Herabsetzen der Rechnungsnummer beim Löschen';
$lang['settings_sales_decrement_invoice_number_on_delete_tooltip'] = 'Möchten Sie die Rechnungsnummer herabsetzen, wenn die letzte Rechnung gelöscht wurde? zB. Wenn die Option auf JA gesetzt ist und vor dem Löschen die nächste R.Nr. 15 lautet,wird die nächste R.Nr. abgestuft sodass keine Lücke entsteht. Auf NEIN gesetzt, bleibt die Nummer bei 15 stehen.';
$lang['settings_sales_invoice_number_format']                      = 'Rechnungsnummer-Format';
$lang['settings_sales_invoice_number_format_year_based']           = 'Jahres basiert';
$lang['settings_sales_invoice_number_format_number_based']         = 'Nummer basiert auf (000001)';
$lang['settings_sales_invoice_year']                               = 'Rechnungs-Jahr (YYYY/000001)';
$lang['settings_sales_invoice_year_tooltip']                       = 'Währungs Rechnungs Jahr.  Setze dies zurück wenn ein neues Jahr erreicht ist.';

$lang['settings_sales_company_info_heading'] = 'Firma';
$lang['settings_sales_company_info_note']    = 'Diese Information wird angezeigt, auf Rechnungen / Angeboten / Zahlungen und anderen PDF Dokumenten auf der die Firmeninfos notwendig sind';
$lang['settings_sales_company_name']         = 'Firmenname';
$lang['settings_sales_address']              = 'Adresse';
$lang['settings_sales_city']                 = 'Stadt';
$lang['settings_sales_country_code']         = 'Ländercode';
$lang['settings_sales_postal_code']          = 'PLZ';
$lang['settings_sales_phonenumber']          = 'Telefon';

# Leads
$lang['new_lead']       = 'Neuer Interessent';
$lang['leads']          = 'Interessenten';
$lang['lead']           = 'Interessent';
$lang['lead_lowercase'] = 'interessent';
$lang['leads_all']      = 'Alle';

$lang['leads_canban_notes']  = 'Notizen: %s';
$lang['leads_canban_source'] = 'Quelle: %s';

$lang['lead_new_source']            = 'Neue Qulle';
$lang['lead_sources']               = 'Lead Quelle';
$lang['lead_source']                = 'Lead Quelle';
$lang['lead_source_lowercase']      = 'lead quelle';
$lang['leads_sources_not_found']    = 'Keine Quelle gefunden';
$lang['leads_sources_table_name']   = 'Quellen-Name';
$lang['leads_source_add_edit_name'] = 'Quellen-Name';

$lang['lead_new_status']         = 'Neuer Lead Status';
$lang['lead_statuss']            = 'Lead Status';
$lang['lead_status']             = 'Lead Status';
$lang['lead_status_lowercase']   = 'lead status';
$lang['leads_status_table_name'] = 'Status Name';

$lang['leads_status_add_edit_name']  = 'Status Name';
$lang['leads_status_add_edit_order'] = 'Order';

$lang['lead_statuses_not_found']      = 'Kein Leadstatus gefunden';
$lang['lead_noted_added_successfuly'] = 'Lead Notiz erfolgreich zugefügt';
$lang['lead_status_updated']          = 'Lead aktualisiert';
$lang['leads_search']                 = 'Suche Leads';

$lang['leads_table_total'] = 'Gesamt Leads: %s';

$lang['leads_dt_name']         = 'Name';
$lang['leads_dt_email']        = 'E-Mail';
$lang['leads_dt_phonenumber']  = 'Telefon';
$lang['leads_dt_assigned']     = 'Zugewiesen';
$lang['leads_dt_status']       = 'Status';
$lang['leads_dt_last_contact'] = 'Letzter Kontakt';

$lang['lead_add_edit_name']                 = 'Name';
$lang['lead_add_edit_email']                = 'E-Mail Adresse';
$lang['lead_add_edit_phonenumber']          = 'Telefon';
$lang['lead_add_edit_source']               = 'Quelle';
$lang['lead_add_edit_status']               = 'Lead Status';
$lang['lead_add_edit_assigned']             = 'Zugewiesen';
$lang['lead_add_edit_datecontacted']        = 'kontaktiert zum Datum';
$lang['lead_add_edit_contected_today']      = 'Heute kontaktiert';
$lang['lead_add_edit_activity']             = 'Aktivitäts Log';
$lang['lead_add_edit_notes']                = 'Notizen';
$lang['lead_add_edit_add_note']             = 'Notiz hinzufügen';
$lang['lead_not_contacted']                 = 'Ich habe diesen Interessent nicht kontaktiert';
$lang['lead_add_edit_contected_this_lead']  = 'Ich bin mit diesem Interessent in Kontakt gewesen.';
$lang['lead_confirmation_canban_contacted'] = 'Hast du mit diesem Interessent Kontakt gehabt?';

# Misc
$lang['activity_log_when_cron_job'] = 'Cron Job';
$lang['access_denied']              = 'Zugriff verweigert';
$lang['prev']                       = 'vor';
$lang['next']                       = 'zurück';

# Datatables
$lang['dt_paginate_first']          = 'Erste';
$lang['dt_paginate_last']           = 'Letzte';
$lang['dt_paginate_next']           = 'vor';
$lang['dt_paginate_previous']       = 'zurück';
$lang['dt_empty_table']             = 'Kein {0} gefunden';
$lang['dt_search']                  = 'Suchen:';
$lang['dt_zero_records']            = 'Keine passenden Einträge gefunden';
$lang['dt_loading_records']         = 'Lade...';
$lang['dt_length_menu']             = 'Anzahl Datensätze _MENU_ ';
$lang['dt_info_filtered']           = '(gefiltert von _MAX_ total {0})';
$lang['dt_info_empty']              = 'Zeige 0 bis 0 von 0 {0}';
$lang['dt_info']                    = 'Zeige _START_ bis _END_ von _TOTAL_ {0}';
$lang['dt_empty_table']             = 'Kein {0} gefunden';
$lang['dt_sort_ascending']          = 'Aktivieren, um Spalte aufsteigend zu sortieren';
$lang['dt_sort_descending']         = 'Aktivieren, um Spalte absteigend zu sortieren';
# Invoice Activity Log
$lang['user_sent_overdue_reminder'] = '%s gesendete überfällige Rechnungserinnerung';

# Weekdays
$lang['wd_monday']    = 'Montag';
$lang['wd_tuesday']   = 'Dienstag';
$lang['wd_thursday']  = 'Mittwoch';
$lang['wd_wednesday'] = 'Donnerstag';
$lang['wd_friday']    = 'Freitag';
$lang['wd_saturday']  = 'Samstag';
$lang['wd_sunday']    = 'Sonntag';

# Admin Left Sidebar
$lang['als_dashboard'] = 'Startseite';
$lang['als_clients']   = 'Kunden';
$lang['als_leads']     = 'Interessent';

$lang['als_contracts'] = 'Verträge';

$lang['als_all_tickets'] = 'Alle Tickets';
$lang['als_sales']       = 'Verkauf';

$lang['als_staff'] = 'Mitarbeiter';
$lang['als_tasks'] = 'Aufgaben';
$lang['als_kb']    = 'Wissensdatenbank';

$lang['als_surveys']               = 'Umfrage';
$lang['als_media']                 = 'Medien';
$lang['als_reports']               = 'Auswertungen';
$lang['als_reports_sales_submenu'] = 'Verkauf';
$lang['als_reports_leads_submenu'] = 'Interessent';
$lang['als_kb_articles_submenu']   = 'WB Arikel';
$lang['als_utilities']             = 'Tools';
$lang['als_announcements_submenu'] = 'Ankündigungen';
$lang['als_mail_lists_submenu']    = 'Mailing Listen';
$lang['als_calendar_submenu']      = 'Kalender';
$lang['als_activity_log_submenu']  = 'Aktivitäten';

# Admin Customizer Sidebar
$lang['acs_tickets']                           = 'Tickets';
$lang['acs_ticket_priority_submenu']           = 'Ticket Priorität';
$lang['acs_ticket_statuses_submenu']           = 'Ticket Status';
$lang['acs_ticket_predefined_replies_submenu'] = 'Vordefinierte Antworten';
$lang['acs_ticket_services_submenu']           = 'Services';
$lang['acs_departments']                       = 'Abteilungen';
$lang['acs_leads']                             = 'Leads';
$lang['acs_leads_sources_submenu']             = 'Quellen';
$lang['acs_leads_statuses_submenu']            = 'Stati';
$lang['acs_sales_taxes_submenu']               = 'Steuern';
$lang['acs_sales_currencies_submenu']          = 'Währungen';
$lang['acs_sales_payment_modes_submenu']       = 'Zahlungsarten';
$lang['acs_email_templates']                   = 'E-Mail Templates';
$lang['acs_roles']                             = 'Rollen';
$lang['acs_settings']                          = 'Einstellungen';

# Tickets
$lang['new_ticket']                                         = 'Öffne ein neues Ticket';
$lang['tickets']                                            = 'Tickets';
$lang['ticket']                                             = 'Ticket';
$lang['ticket_lowercase']                                   = 'ticket';
$lang['support_tickets']                                    = 'Support Tickets';
$lang['support_ticket']                                     = 'Support Ticket';
$lang['ticket_settings_to']                                 = 'Ticket von';
$lang['ticket_settings_email']                              = 'E-Mail Adresse';
$lang['ticket_settings_departments']                        = 'Abteilung';
$lang['ticket_settings_service']                            = 'Service';
$lang['ticket_settings_priority']                           = 'Wichtigkeit';
$lang['ticket_settings_subject']                            = 'Betreff';
$lang['ticket_settings_assign_to']                          = 'Ticket wird bearbeitet von / Zugewiesen an';
$lang['ticket_settings_assign_to_you']                      = 'Sie selbst';
$lang['ticket_settings_select_client']                      = 'Kunde auswählen';
$lang['ticket_add_body']                                    = 'Ticket Beschreibung';
$lang['ticket_add_attachments']                             = 'Anlagen';
$lang['ticket_no_reply_yet']                                = 'Keine Antworten';
$lang['new_ticket_added_succesfuly']                        = 'Ticket #%s erfolgreich hinzugefügt';
$lang['replied_to_ticket_succesfuly']                       = 'Antwort zum #%s erfolgreich';
$lang['ticket_note_added_successfuly']                      = 'Ticket Notiz erfolgreich hinzugefügt';
$lang['ticket_note_deleted_successfuly']                    = 'Ticket Notiz erfolgreich gelöscht';
$lang['ticket_settings_updated_successfuly']                = 'Ticket Einstellungen aktualisiert';
$lang['ticket_settings_updated_successfuly_and_reassigned'] = 'Ticket Einstellungen aktualisiert - zugewiesen zu %s';
$lang['ticket_dt_subject']                                  = 'Betreff';
$lang['ticket_dt_department']                               = 'Abteilung';
$lang['ticket_dt_service']                                  = 'Service';
$lang['ticket_dt_submitter']                                = 'Kunde';
$lang['ticket_dt_status']                                   = 'Status';
$lang['ticket_dt_priority']                                 = 'Priorität';
$lang['ticket_dt_last_reply']                               = 'Letzte Antwort';

$lang['ticket_single_add_reply']                  = 'Antwort hinzufügen';
$lang['ticket_single_add_note']                   = 'Notiz hinzufügen';
$lang['ticket_single_other_user_tickets']         = 'Anderes Ticket';
$lang['ticket_single_settings']                   = 'Einstellungen';
$lang['ticket_single_priority']                   = 'Wichtigkeit: %s';
$lang['ticket_single_last_reply']                 = 'Letzte Antwort: %s';
$lang['ticket_single_change_status_top']          = 'Ändere Status';
$lang['ticket_single_ticket_note_by']             = 'Ticket Notiz von %s';
$lang['ticket_single_note_added']                 = 'Notiz hinzugefügt: %s';
$lang['ticket_single_change_status']              = 'Ändere Status';
$lang['ticket_single_assign_to_me_on_update']     = 'Dieses Ticket automatisch mir zuweisen';
$lang['ticket_single_insert_predefined_reply']    = 'Vordefinierte Antwort einfügen';
$lang['ticket_single_insert_knowledge_base_link'] = 'Wissensartikel Link einfügen';
$lang['ticket_single_attachments']                = 'Anlagen';
$lang['ticket_single_add_response']               = 'Antwort hinzufügen';
$lang['ticket_single_note_heading']               = 'Notizen';
$lang['ticket_single_add_note']                   = 'Notiz hinzufügen';
$lang['ticket_settings_none_assigned']            = 'Keine';
$lang['ticket_status_changed_successfuly']        = 'Ticket Status verändert';
$lang['ticket_status_changed_fail']               = 'Problem beim Ändern des Status';

$lang['ticket_staff_string']                    = 'Mitarbeiter';
$lang['ticket_client_string']                   = 'Kunde';
$lang['ticket_posted']                          = 'Geschrieben am: %s';
$lang['ticket_insert_predefined_reply_heading'] = 'Vordefinierte Antwort enfügen';
$lang['ticket_kb_link_heading']                 = 'Wissensartikel Link einfügen';
$lang['ticket_access_by_department_denied']     = 'Sie haben kein Zugriff auf dieses Ticket. Es gehört zu einer Abteilung, der Sie nicht zugewiesen sind.';

# Staff
$lang['new_staff']                       = 'Neuer Mitarbeiter';
$lang['staff_members']                   = 'Alle Mitarbeiter';
$lang['staff_member']                    = 'Mitarbeiter';
$lang['staff_member_lowercase']          = 'mitarbeiter';
$lang['staff_profile_updated']           = 'Profil aktualisiert';
$lang['staff_old_password_incorect']     = 'Das alte Passwort ist nicht korrekt.';
$lang['staff_password_changed']          = 'Passwort wurde geändert';
$lang['staff_problem_changing_password'] = 'Probleme beim Ändern des Passwortes';
$lang['staff_profile_string']            = 'Profil';

$lang['staff_cant_remove_main_admin']          = 'Das Löschen des Hauptadmins ist nicht zulässig.';
$lang['staff_cant_remove_yourself_from_admin'] = 'Sie können sich selbst nicht die Administrator entziehen.';

$lang['staff_dt_name']       = 'Voller Name';
$lang['staff_dt_email']      = 'E-Mail';
$lang['staff_dt_last_Login'] = 'Letztes Login';
$lang['staff_dt_active']     = 'Aktiv';

$lang['staff_add_edit_firstname']             = 'Vorname';
$lang['staff_add_edit_lastname']              = 'Familienname';
$lang['staff_add_edit_email']                 = 'Email';
$lang['staff_add_edit_phonenumber']           = 'Telefon';
$lang['staff_add_edit_facebook']              = 'Facebook';
$lang['staff_add_edit_linkedin']              = 'LinkedIn';
$lang['staff_add_edit_skype']                 = 'Skype';
$lang['staff_add_edit_departments']           = 'Mitglieds-Abteilungen';
$lang['staff_add_edit_role']                  = 'Rolle';
$lang['staff_add_edit_permissions']           = 'Berechtigungen';
$lang['staff_add_edit_administrator']         = 'Administrator';
$lang['staff_add_edit_password']              = 'Passwort';
$lang['staff_add_edit_password_note']         = 'Hinweis: Wenn Sie diese Felder befüllen, wird das Passwort des Mitgliedes geändert.';
$lang['staff_add_edit_password_last_changed'] = 'Passwort zuletzt geändert';
$lang['staff_add_edit_notes']                 = 'Notizen';
$lang['staff_add_edit_note_description']      = 'Notiz Beschreibung';

$lang['staff_notes_table_description_heading'] = 'Notizen';
$lang['staff_notes_table_addedfrom_heading']   = 'Hinzugefügt von';
$lang['staff_notes_table_dateadded_heading']   = 'Datum hinzugefügt';

$lang['staff_admin_profile']         = 'Dies ist ein Admin Profil';
$lang['staff_profile_notifications'] = 'Benachrichtigungen';
$lang['staff_profile_departments']   = 'Abteilungen';

$lang['staff_edit_profile_image']                     = 'Profil Bild';
$lang['staff_edit_profile_your_departments']          = 'Ihre Abteilung';
$lang['staff_edit_profile_change_your_password']      = 'Ändern Sie Ihr Kennwort';
$lang['staff_edit_profile_change_old_password']       = 'Altes Kennwort';
$lang['staff_edit_profile_change_new_password']       = 'Neues Kennwort';
$lang['staff_edit_profile_change_repet_new_password'] = 'Wiederhole neues Kennwort';

# Surveys
$lang['new_survey']                    = 'Neue Umfrage';
$lang['surveys']                       = 'Umfragen';
$lang['survey']                        = 'Umfrage';
$lang['survey_lowercase']              = 'umfrage';
$lang['survey_no_mail_lists_selected'] = 'Keine Mailing Liste ausgewählt';
$lang['survey_send_success_note']      = 'Alle Umfrage Mails (%s) werden mittels Cron Job inerhalb von 5 Minuten versendet';
$lang['survey_result']                 = 'Ergebnis für die Umfrage: %s';
$lang['question_string']               = 'Frage';
$lang['question_field_string']         = 'Feld';

$lang['survey_list_view_tooltip']         = 'Zeige Umfrage';
$lang['survey_list_view_results_tooltip'] = 'Zeige Ergebnis';

$lang['survey_add_edit_subject']                   = 'Umfrage Titel';
$lang['survey_add_edit_email_description']         = 'Umfrage Beschreibung (E-Mail  Text)';
$lang['survey_include_survey_link']                = 'Fügen Sie den Umfrage Link in die Beschreibung';
$lang['survey_available_mail_lists_custom_fields'] = 'Verfügbare benutzerdefinierte Felder aus E-Mail-Listen';
$lang['survey_mail_lists_custom_fields_tooltip']   = 'Benutzerdefinierte Felder können für E-Mail-Editor verwendet werden. TIPP: Klicken Sie auf die E-Mail-Editor und wählen Sie dann aus der Drop-Down-Menü automatisch angefügt werden.';
$lang['survey_add_edit_short_description_view']    = 'Kurze Beschreibung (Zeige Beschreibung)';
$lang['survey_add_edit_from']                      = 'Von (Wird in der E-Mail angezeigt)';
$lang['survey_add_edit_redirect_url']              = 'Umfrage Weiterleitungsadresse';
$lang['survey_add_edit_red_url_note']              = 'Wohin soll der User weitergeleitet werden nach der Umfrage (Leeres Feld = Kundencenter)';
$lang['survey_add_edit_disabled']                  = 'Deaktivieren';
$lang['survey_add_edit_only_for_logged_in']        = 'Nur für angemeldete Teilnehmer (Mitarbeiter, Kunden)';
$lang['send_survey_string']                        = 'Sende Umfrage';
$lang['survey_send_mail_list_clients']             = 'Kunden';
$lang['survey_send_mail_list_staff']               = 'Mitarbeiter';
$lang['survey_send_mail_lists_string']             = 'Mailing Liste';
$lang['survey_send_mail_lists_note_logged_in']     = 'Notiz:  Wenn Sie dies an eine Mailinglsite senden, muss nur für eingeloggte Nutzer deaktiviert sein';
$lang['survey_send_string']                        = 'Senden';

$lang['survey_send_to_total']  = 'Gesendet an %s E-Mails';
$lang['survey_send_till_now']  = 'Bis jetzt';
$lang['survey_send_finished']  = 'Umfrage senden beendet: %s';
$lang['survey_added_to_queue'] = 'Diese Umfrage wurde zur Warteschlangen-Cron am %s zugefügt';

$lang['survey_questions_string']          = 'Fragen';
$lang['survey_insert_field']              = 'Feld einfügen';
$lang['survey_field_checkbox']            = 'Checkbox';
$lang['survey_field_radio']               = 'Radiofeld';
$lang['survey_field_input']               = 'Textfeld (klein)';
$lang['survey_field_textarea']            = 'Textfeld (groß)';
$lang['survey_question_required']         = 'Pflichtfeld';
$lang['survey_question_only_for_preview'] = 'Nur zur Vorschau';
$lang['survey_create_first']              = 'Sie müssen die Umfrage zuerst erstellen, um Fragen hinzufügen können.';


$lang['survey_dt_name']               = 'Name';
$lang['survey_dt_total_questions']    = 'Gesamt Fragen';
$lang['survey_dt_total_participants'] = 'Gesamt Teilnehmer';
$lang['survey_dt_date_created']       = 'Datum erstellt';
$lang['survey_dt_active']             = 'Aktiv';

$lang['survey_text_questions_results'] = 'Text Fragen Ergebnis';
$lang['survey_view_all_answers']       = 'Zeige alle Antworten';

# Staff Tasks
$lang['new_task']       = 'Neue Aufgabe';
$lang['tasks']          = 'Aufgaben';
$lang['task']           = 'Aufgabe';
$lang['task_lowercase'] = 'aufgabe';
$lang['comment_string'] = 'Kommentar';

$lang['task_marked_as_complete'] = 'Aufgabe erledigen';
$lang['task_follower_removed']   = 'Aufgabe: Follower entfernen';
$lang['task_assignee_removed']   = 'Aufgabe: Zuständige Mitarbeiter entfernen';

$lang['task_no_assignees'] = 'Keine zuständige Mitarbeiter';
$lang['task_no_followers'] = 'Keine Follower vorhnaden';

$lang['task_list_all']            = 'Alle';
$lang['task_list_finished']       = 'Abgeschlossen';
$lang['task_list_unfinished']     = 'Nicht Abgeschlossen';
$lang['task_list_not_assigned']   = 'Nicht zugewiesen';
$lang['task_list_duedate_passed'] = 'End-Datum verpasst';
$lang['tasks_dt_name']            = 'Name';

$lang['task_single_priority']               = 'Priorität';
$lang['task_single_start_date']             = 'Start Datum';
$lang['task_single_due_date']               = 'Deadline';
$lang['task_single_finished']               = 'Abgeschlossen';
$lang['task_single_mark_as_complete']       = 'Ales als erledigt kennzeichnen';
$lang['task_single_edit']                   = 'Bearbeiten';
$lang['task_single_delete']                 = 'Löschen';
$lang['task_single_assignees']              = 'Zugewiesen';
$lang['task_single_assignees_select_title'] = 'Zugewiesen an';
$lang['task_single_followers']              = 'Follower';
$lang['task_single_followers_select_title'] = 'Follower hinzufügen';
$lang['task_single_insert_media_link']      = 'Medien Link hinzufügen';
$lang['task_single_add_new_comment']        = 'Kommentar hinzufügen';

$lang['task_add_edit_subject']     = 'Betreff';
$lang['task_add_edit_priority']    = 'Priorität';
$lang['task_priority_low']         = 'Klein';
$lang['task_priority_medium']      = 'Normal';
$lang['task_priority_high']        = 'Wichtig';
$lang['task_priority_urgent']      = 'Dringlich';
$lang['task_add_edit_start_date']  = 'Start Datum';
$lang['task_add_edit_due_date']    = 'End Datum';
$lang['task_add_edit_description'] = 'Aufgaben Beschreibung';

# Taxes
$lang['new_tax']       = 'Neuer Steuersatz';
$lang['taxes']         = 'Steuern';
$lang['tax']           = 'Steuer';
$lang['tax_lowercase'] = 'steuer';
$lang['tax_dt_name']   = 'Steuer Bezeichung';
$lang['tax_dt_rate']   = 'Steuersatz (%)';

$lang['tax_add_edit_name'] = 'Steuerbezeichung';
$lang['tax_add_edit_rate'] = 'Steuersatz (%)';
$lang['tax_edit_title']    = 'Bearbeite Steuersatz';
$lang['tax_add_title']     = 'Neuen Steuersatz hinzufügen';

# Ticket Statuses
$lang['new_ticket_status']       = 'Neuer Ticket Status';
$lang['ticket_statuses']         = 'Ticket Stati';
$lang['ticket_status']           = 'Ticket Status';
$lang['ticket_status_lowercase'] = 'ticket status';

$lang['ticket_statuses_dt_name']      = 'Ticket Status Name';
$lang['no_ticket_statuses_found']     = 'Keine Ticket Stati gefunden';
$lang['ticket_statuses_table_total']  = 'Gesamt %s';
$lang['ticket_status_add_edit_name']  = 'Ticket Status Name';
$lang['ticket_status_add_edit_color'] = 'Farbe wählen';
$lang['ticket_status_add_edit_order'] = 'Status Reihenfolge';

# Todos
$lang['new_todo']                  = 'Neue Aufgabe';
$lang['my_todos']                  = 'Meinen Aufgaben';
$lang['todo']                      = 'Aufgaben';
$lang['todo_lowercase']            = 'ausgaben';
$lang['todo_status_changed']       = 'Aufgaben Status verändert';
$lang['todo_add_title']            = 'neue Aufgabe hinzufügen';
$lang['add_new_todo_description']  = 'Beschreibung';
$lang['no_finished_todos_found']   = 'Keine abgschlossenen Aufgaben gefunden';
$lang['no_unfinished_todos_found'] = 'Keine Aufgaben gefunden';
$lang['unfinished_todos_title']    = 'Nicht abgeschlossene Aufgabe\'n';
$lang['finished_todos_title']      = 'Letzte abgeschlossene Aufgabe\'n';

# Authentication
$lang['password_changed_email_subject']             = 'Ihr Password wurde geändert';
$lang['password_reset_email_subject']               = 'Passwort zurücksetzen auf %s';
# Utilities
$lang['utility_activity_log']                       = 'Aktivitäts-Log';
$lang['utility_activity_log_filter_by_date']        = 'Filtern nach Datum';
$lang['utility_activity_log_dt_description']        = 'Beschreibung';
$lang['utility_activity_log_dt_date']               = 'Datum';
$lang['utility_activity_log_dt_staff']              = 'Mtarbeiter';
$lang['utility_calendar_new_event_title']           = 'Neuen Termin anlegen';
$lang['utility_calendar_new_event_start_date']      = 'Start Datum';
$lang['utility_calendar_new_event_end_date']        = 'End Datum';
$lang['utility_calendar_new_event_make_public']     = 'Öffentlicher Termin';
$lang['utility_calendar_event_added_successfuly']   = 'Neuer Termin hinzugefügt';
$lang['utility_calendar_event_deleted_successfuly'] = 'Termin wurde gelöscht';
$lang['utility_calendar_new_event_placeholder']     = 'Termin Titel';


# Navigation
$lang['nav_notifications']          = 'Benachrichtigung';
$lang['nav_my_profile']             = 'Mein Profil';
$lang['nav_edit_profile']           = 'Profil bearbeiten';
$lang['nav_logout']                 = 'Abmelden';
$lang['nav_no_notifications']       = 'Keine Benachrichtigungen gefunden';
$lang['nav_view_all_notifications'] = 'Zeige alle Benachrichtigungen';
$lang['nav_customizer_tooltip']     = 'Benutzer Einstellungen';
$lang['nav_notifications_tooltip']  = 'Zeige Benachrichtigung';
$lang['nav_sidebar_toggle_tooltip'] = 'Zeige Menü';



## Clients
#

$lang['clients_required_field'] = 'Dieses Feld ist ein Pflichfeld';

# Footer
$lang['clients_copyright'] = 'Copyright %s';

# Announcements
$lang['clients_announcement_from']  = 'Von: ';
$lang['clients_announcement_added'] = 'Hinzugefügt: ';

# Contracts
$lang['clients_contracts']               = 'Verträge';
$lang['clients_contracts_dt_subject']    = 'Betreff';
$lang['clients_contracts_dt_start_date'] = 'Start Datum';
$lang['clients_contracts_dt_end_date']   = 'End Datum';

# Home
$lang['clients_quick_invoice_info']                = 'Schnell Rechnungs Info';
$lang['clients_home_currency_select_tooltip']      = 'Sie müssen eine Währung wählen, da Sie Rechnungen mit verschiedenen Währungen haben.';
$lang['clients_report_sales_months_all_time']      = 'Gesamter Zeitraum';
$lang['clients_report_sales_months_six_months']    = 'Letzten 6 Monate';
$lang['clients_report_sales_months_twelve_months'] = 'Letzten 12 Monate';
$lang['clients_report_sales_months_custom']        = 'Benutzerdefiniert';
$lang['clients_report_select_from_date']           = 'Von Datum';
$lang['clients_report_select_to_date']             = 'Bis Datum';

# Invoices
$lang['clients_invoice_html_btn_download'] = 'Download';

$lang['clients_my_invoices']        = 'Meine Rechnungen';
$lang['clients_invoice_dt_number']  = 'Rechnung #';
$lang['clients_invoice_dt_date']    = 'Datum';
$lang['clients_invoice_dt_duedate'] = 'End-Datum';
$lang['clients_invoice_dt_amount']  = 'Betrag';
$lang['clients_invoice_dt_status']  = 'Status';

# Profile
$lang['clients_profile_heading'] = 'Profil';

# Used for edit profile and register START
$lang['clients_firstname'] = 'Vorname';
$lang['clients_lastname']  = 'Nachname';
$lang['clients_email']     = 'E-Mail';
$lang['clients_company']   = 'Firma';
$lang['clients_vat']       = 'UsSt.Nr.';
$lang['clients_phone']     = 'Telefon';
$lang['clients_country']   = 'Land';
$lang['clients_city']      = 'Stadt';
$lang['clients_address']   = 'Adresse';
$lang['clients_zip']       = 'PLZ';
$lang['clients_state']     = 'Bundesland';

# Used for edit profile and register END

$lang['clients_register_password']        = 'Passwort';
$lang['clients_register_password_repeat'] = 'Passwort Wiederholung';
$lang['clients_edit_profile_update_btn']  = 'Aktualisieren';

$lang['clients_edit_profile_change_password_heading'] = 'Ändere Passwort';
$lang['clients_edit_profile_old_password']            = 'Altes Passwort';
$lang['clients_edit_profile_new_password']            = 'Neues Passwort';
$lang['clients_edit_profile_new_password_repeat']     = 'Wiederhole Passwort';
$lang['clients_edit_profile_change_password_btn']     = 'Ändere Passwort';
$lang['clients_profile_last_changed_password']        = 'Letzte Kennwort Änderung %s';

# Knowledge base
$lang['clients_knowledge_base']                    = 'Wissensbasis';
$lang['clients_knowledge_base_articles_not_found'] = 'Keine Wissensbasis Artikel gefunden.';
$lang['clients_knowledge_base_find_useful']        = 'Fanden Sie diesen Artikel hilfreich??';
$lang['clients_knowledge_base_find_useful_yes']    = 'Ja';
$lang['clients_knowledge_base_find_useful_no']     = 'Nein';
$lang['clients_article_only_1_vote_today']         = 'Sie können nur alle 24 Stunden abstimmen';
$lang['clients_article_voted_thanks_for_feedback'] = 'Danke für Ihr  Feedback';

# Tickets
$lang['clients_ticket_open_subject']                = 'Offenes Ticket';
$lang['clients_ticket_open_departments']            = 'Abteilung';
$lang['clients_tickets_heading']                    = 'Support Tickets';
$lang['clients_ticket_open_service']                = 'Service';
$lang['clients_ticket_open_priority']               = 'Priorität';
$lang['clients_latest_tickets']                     = 'Letzte Tickets';
$lang['clients_ticket_open_body']                   = 'Ticket Inhalt';
$lang['clients_ticket_attachments']                 = 'Anlagen';
$lang['clients_ticket_posted']                      = 'Hinzugefügt: %s';
$lang['clients_single_ticket_string']               = 'Ticket';
$lang['clients_single_ticket_replied']              = 'Geantwortet: %s';
$lang['clients_single_ticket_informations_heading'] = 'Ticket Informationen';

$lang['clients_tickets_dt_number']     = 'Ticket #';
$lang['clients_tickets_dt_subject']    = 'Betreff';
$lang['clients_tickets_dt_department'] = 'Abteilung';
$lang['clients_tickets_dt_service']    = 'Service';
$lang['clients_tickets_dt_status']     = 'Status';
$lang['clients_tickets_dt_last_reply'] = 'Letzte Antwort';


$lang['clients_ticket_single_department']        = 'Abteilung: %s';
$lang['clients_ticket_single_submited']          = 'Zugewiesen: %s';
$lang['clients_ticket_single_status']            = 'Status:';
$lang['clients_ticket_single_priority']          = 'Priorität: %s';
$lang['clients_ticket_single_add_reply_btn']     = 'Antwort hinzufügen';
$lang['clients_ticket_single_add_reply_heading'] = 'Antwort zu diesem Ticket hinzufügen';

# Login
$lang['clients_login_heading_no_register'] = 'Bitte melden Sie sich an';
$lang['clients_login_heading_register']    = 'Bitte anmelden oder registrieren';
$lang['clients_login_email']               = 'E-Mail';
$lang['clients_login_password']            = 'Passwort';
$lang['clients_login_remember']            = 'Erinnere mich';
$lang['clients_login_login_string']        = 'Anmelden';

# Register
$lang['clients_register_string']  = 'Registrieren';
$lang['clients_register_heading'] = 'Registrieren';

# Navigation
$lang['clients_nav_login']     = 'Login';
$lang['clients_nav_register']  = 'Registrieren';
$lang['clients_nav_invoices']  = 'Rechnungen';
$lang['clients_nav_contracts'] = 'Verträge';
$lang['clients_nav_kb']        = 'Wissensbasis';
$lang['clients_nav_profile']   = 'Profil';
$lang['clients_nav_logout']    = 'Abmelden';

# Datatables
$lang['clients_dt_paginate_first']    = 'Erster';
$lang['clients_dt_paginate_last']     = 'Letzter';
$lang['clients_dt_paginate_next']     = 'Nächster';
$lang['clients_dt_paginate_previous'] = 'Vorheriger';
$lang['clients_dt_empty_table']       = 'Kein {0} gefunden';
$lang['clients_dt_search']            = 'Suchen:';
$lang['clients_dt_zero_records']      = 'Keine Übereinstimmungen gefunden...';
$lang['clients_dt_loading_records']   = 'Lade...';
$lang['clients_dt_length_menu']       = 'Anzahl Datensätze _MENU_ ';
$lang['clients_dt_info_filtered']     = '(filtered from _MAX_ total {0})';
$lang['clients_dt_info_empty']        = 'Zeige 0 bis 0 von 0 {0}';
$lang['clients_dt_info']              = 'Zeige _START_ bis _END_ von _TOTAL_ {0}';
$lang['clients_dt_empty_table']       = 'Kein {0} gefunden';
$lang['clients_dt_sort_ascending']    = 'Aktivieren, um Spalte aufsteigend zu sortieren';
$lang['clients_dt_sort_descending']   = 'Aktivieren, um Spalte absteigend zu sortieren';


# Version 1.0.1
# Admin
#
# Payments
$lang['payment_receipt']                               = 'Zahlunsgbeleg';
$lang['payment_for_string']                            = 'Zahlung für';
$lang['payment_date']                                  = 'Zahlungs-Datum:';
$lang['payment_view_mode']                             = 'Zahlungs-Methode:';
$lang['payment_total_amount']                          = 'Gesamt €';
$lang['payment_table_invoice_number']                  = 'Rechnungsnummer';
$lang['payment_table_invoice_date']                    = 'Rechnungs-Datum';
$lang['payment_table_invoice_amount_total']            = 'Rechnungs-Betrag';
$lang['payment_table_payment_amount_total']            = 'Zahlungsbetrag';
$lang['payments_table_transaction_id']                 = 'Transaktions-ID: %s';
$lang['payment_getaway_token_not_found']               = 'Token nicht gefunden';
$lang['online_payment_recorded_success']               = 'Zahlung erfolgreich aufgezeichnet';
$lang['online_payment_recorded_success_fail_database'] = 'Die Zahlung war zwar erfolgreich, aber konnte nicht in die Datenbank eingefügt werden, Kontaktieren Sie bitte den Administrator';

# Leads
$lang['lead_convert_to_client']                   = 'Zu einem Kunden umwandeln';
$lang['lead_convert_to_email']                    = 'E-Mail';
$lang['lead_convert_to_client_firstname']         = 'Vorname';
$lang['lead_convert_to_client_lastname']          = 'Nachname';
$lang['lead_email_already_exists']                = 'Lead E-Mail existiert bereits bei einem Kunden';
$lang['lead_to_client_base_converted_success']    = 'Lead erfolgreich zu einem Kunden umgewandelt';
$lang['lead_already_converted']                   = 'Konvertiere zu einem Kunden';
$lang['lead_have_client_profile']                 = 'Dieser Lead hat ein Kundenprofil';
$lang['lead_converted_edit_client_profile']       = 'Bearbeite Profil';
$lang['lead_is_client_cant_change_status_canban'] = 'Dieser Datensatz ist zu einem Kunden umgewandelt worden. Sie können den Status bearbeiten.';

# Invoices
$lang['view_invoice_as_customer_tooltip']                                     = 'Zeige Rechnung als Kunde';
$lang['invoice_add_edit_recurring']                                           = 'Wiederkehrende Rechnung?';
$lang['invoice_add_edit_recurring_no']                                        = 'Ja';
$lang['invoice_add_edit_recurring_month']                                     = 'Jeden %s Monat';
$lang['invoice_add_edit_recurring_months']                                    = 'Alle %s Monate';
$lang['invoices_list_all']                                                    = 'Alle';
$lang['invoices_list_not_sent']                                               = 'Rechnung noch nicht versendet';
$lang['invoices_list_not_have_payment']                                       = 'Zu dieser Rechnung ist keine Zahlung verzeichnet.';
$lang['invoices_list_recuring']                                               = 'Wiederkehrende Rechnung';
$lang['invoices_list_made_payment_by']                                        = 'Bezahlung mittels %s';
$lang['invoices_create_invoice_from_recurring_only_on_paid_invoices']         = 'Erstelle eine wiederkehrende Rechnung nur dann, wenn die Hauptrechnung beglichen wurde.';
$lang['invoices_create_invoice_from_recurring_only_on_paid_invoices_tooltip'] = 'Erstelle eine neue Rechnung nur dann, wenn die Hauptrechnung als bezahlt gekennzeichnet ist? Wenn dieses Feld auf Ja steht und die ausstehende Rechnung nicht den Status bezahlt hat, wird keine neue erstellt.';
$lang['send_renewed_invoice_from_recurring_to_email']                         = 'Senden die Rechnung automatisch an den Kunden';
$lang['view_invoice_pdf_link_pay']                                            = 'Bezahle Rechnung';

# Payment modes
$lang['payment_mode_add_edit_description']         = 'Bank Accounts / Beschreibung';
$lang['payment_mode_add_edit_description_tooltip'] = 'Sie können hier Bank Account Informationen definieren. Dies wird in der HTML Rechnung angezeigt';
$lang['payment_modes_dt_description']              = 'Bank Daten / Beschreibung';
$lang['payment_modes_add_edit_announcement']       = 'Notiz: Hier gelistete Bezahlmethoden sind offline Typen. Online Bezahlmethoden können in Einstellungen -> Payment Gateways definiert werden.';
$lang['payment_mode_add_edit_active']              = 'Aktiv';
$lang['payment_modes_dt_active']                   = 'Aktiv';

# Contracts
$lang['contract_not_found'] = 'Vertrag nicht gefunden. Vielleicht wurde er gelöscht, prüfen im Aktivitäts-Log';

# Settings
$lang['setting_bar_heading']                 = 'Setup';
$lang['settings_group_online_payment_modes'] = 'Payment Getaways';
$lang['settings_paymentmethod_mode_label']   = 'Label';
$lang['settings_paymentmethod_active']       = 'Aktiv';
$lang['settings_paymentmethod_currencies']   = 'Komma separierte Währungen';
$lang['settings_paymentmethod_testing_mode'] = 'Aktiviere Test-Modus';

$lang['settings_paymentmethod_paypal_username']  = 'Paypal API Username';
$lang['settings_paymentmethod_paypal_password']  = 'Paypal API Password';
$lang['settings_paymentmethod_paypal_signature'] = 'API Signature';

$lang['settings_paymentmethod_stripe_api_secret_key']      = 'Stripe API Secret Key';
$lang['settings_paymentmethod_stripe_api_publishable_key'] = 'Stripe Publishable Key';
$lang['settings_limit_top_search_bar_results']             = 'Limitiere Such Leisten Ergebnisse auf';

# Quick Actions
$lang['qa_create_invoice']  = 'Erstelle Rechnung';
$lang['qa_create_task']     = 'Erstelle Aufgabe';
$lang['qa_create_client']   = 'Erstelle Kunde';
$lang['qa_create_contract'] = 'Erstelle Vertrag';
$lang['qa_create_kba']      = 'Erstelle Wissensbasis Artikel';
$lang['qa_create_survey']   = 'Erstelle Umfrage';
$lang['qa_create_ticket']   = 'Ticket eröffnen';
$lang['qa_create_staff']    = 'Erstelle Mitarbeiter';

## Clients
$lang['client_phonenumber'] = 'Telefon';

# Main Clients
$lang['clients_register']                          = 'Anmelden';
$lang['clients_profile_updated']                   = 'Das Profil wurde aktualisiert';
$lang['clients_successfully_registered']           = 'Vielen Dank für das Anmelden';
$lang['clients_account_created_but_not_logged_in'] = 'Ihr Konto wurde erstellt, aber Sie wurden nicht automatisch eingeloggt. Bitte versuchen Sie sich anzumelden';
# Tickets
$lang['clients_tickets_heading']                   = 'Support Tickets';

# Payments
// Uses on stripe page
$lang['payment_for_invoice'] = 'Bezahlung für Rechnung';
$lang['payment_total']       = 'Gesamtsumme: %s';

# Invoice
$lang['invoice_html_online_payment']             = 'Online Bezahlung';
$lang['invoice_html_online_payment_button_text'] = 'Bezahlen';
$lang['invoice_html_payment_modes_not_selected'] = 'Bitte wählen Sie eine Zahlungsart';
$lang['invoice_html_amount_blank']               = 'Die Gesamtsumme kann nicht leer oder Null sein';
$lang['invoice_html_offline_payment']            = 'Überweisung,... (Offline Zahlung)';
$lang['invoice_html_amount']                     = 'Betrag';


# Version 1.0.2
# Admin
#
# DataTables
$lang['dt_column_visibility_tooltip'] = 'Sie können die Spalten Sichtbarkeit parallel zur den Export Spalten definieren. Standardmäßig werden alle Spalten exportiert.';
$lang['dt_button_column_visibility']  = 'Spalten';
$lang['dt_button_reload']             = 'Aktualisieren';
$lang['dt_button_excel']              = 'Excel';
$lang['dt_button_csv']                = 'CSV';
$lang['dt_button_pdf']                = 'PDF';
$lang['dt_button_print']              = 'Drucken';
$lang['is_not_active_export']         = 'Nein';
$lang['is_active_export']             = 'Ja';

# Invoice
$lang['invoice_add_edit_advanced_options']               = 'Erweiterte Optionen';
$lang['invoice_add_edit_allowed_payment_modes']          = 'Erlaubte Zahlungsarten';
$lang['invoice_add_edit_recuring_invoices_from_invoice'] = 'Wiederkehrende Rechnungen aus dieser Rechnung';
$lang['invoice_add_edit_no_payment_modes_found']         = 'Keine Zahlungsmodalitäten gefunden';
$lang['invoice_html_total_pay']                          = 'Gesamtsumme: %s';

# Email templates
$lang['email_templates_table_heading_name'] = 'Template Name';
# General
$lang['discount_type']                      = 'Rabatt Art';
$lang['discount_type_after_tax']            = 'nach Steuern';
$lang['discount_type_before_tax']           = 'vor Steuern';
$lang['terms_and_conditions']               = 'Allgemeine Geschäftsbedingungen';
$lang['reference_no']                       = 'Referenz #';
$lang['no_discount']                        = 'Kein Rabatt';
$lang['view_stats_tooltip']                 = 'Zeige Schnellstatistik';
# Clients
$lang['zip_from_date']                      = 'Von Datum:';
$lang['zip_to_date']                        = 'Bis Datum:';
$lang['client_zip_payments']                = 'ZIP Payments';
$lang['client_zip_invoices']                = 'ZIP Rechnungen';
$lang['client_zip_estimates']               = 'ZIP Angebote';
$lang['client_zip_status']                  = 'Status';
$lang['client_zip_status_all']              = 'Alle';
$lang['client_zip_payment_modes']           = 'Zahlung erfolgte mit';
$lang['client_zip_no_data_found']           = 'Keine %s gefunden';

# Payments
$lang['payment_mode']         = 'Zahlungsart';
$lang['payment_view_heading'] = 'Zahlung';

# Settings
$lang['settings_allow_payment_amount_to_be_modified']               = 'Erlaube Kunde den Zahl-Betrag zu bearbeiten (für Online Bezahlungen)';
$lang['settings_survey_send_emails_per_cron_run']                   = 'Wieviele Mails sollen pro Stunde gesendet werden (Umfragen)';
$lang['settings_survey_send_emails_per_cron_run_tooltip']           = 'Diese Option greift beim Senden von Umfragen. Der Umfrage Cron läuft alle 5 Minuten. Sie können also definieren, wieviele Mails alle 5 Minuten gesendet werden.';
$lang['settings_delete_only_on_last_invoice']                       = 'Löschen einer Rechnung nur bei der letzten erlauben.';
$lang['settings_sales_estimate_prefix']                             = 'Angebots-Nummern Präfix';
$lang['settings_sales_next_estimate_number']                        = 'Nächste Angebot-Nr.';
$lang['settings_sales_next_estimate_number_tooltip']                = 'Setzen Sie das Feld auf 1, wenn Sie neu anfangen.';
$lang['settings_sales_decrement_estimate_number_on_delete']         = 'Herabsetzen der Angebotsnummer beim Löschen';
$lang['settings_sales_decrement_estimate_number_on_delete_tooltip'] = 'Möchten Sie die Nr. wieder zurücksetzen beim Löschen? zB. bei gesetzt auf JA: Wird das Angebot 15 gelöscht, ist die nächste Nr. wäre wiederum 15.';
$lang['settings_sales_estimate_number_format']                      = 'Angebots-Nummern Format';
$lang['settings_sales_estimate_number_format_year_based']           = 'Jahresbasiert';
$lang['settings_sales_estimate_number_format_number_based']         = 'Nummern-basiert (000001)';
$lang['settings_sales_estimate_year']                               = 'Angebots-Jahr (YYYY/000001)';
$lang['settings_sales_estimate_year_tooltip']                       = 'Aktuelles Angebots-Jahr. Im neuen Jahr zurücksetzen.';
$lang['settings_delete_only_on_last_estimate']                      = 'Löschen des Angebotes nur beim letzten möglich';
$lang['settings_cron_invoice_heading']                              = 'Rechnung ';
$lang['settings_send_test_email_heading']                           = 'Sende Test Email';
$lang['settings_send_test_email_subheading']                        = 'Sende eine Test-Mail um sicher zu gehen, dass die SMTP-Einstellungen korrekt sind.';
$lang['settings_send_test_email_string']                            = 'Email Adresse';
$lang['settings_smtp_settings_heading']                             = 'SMTP Einstellungen';
$lang['settings_smtp_settings_subheading']                          = 'Setup Haupt-Email';
$lang['settings_getaways_heading_notice']                           = 'Aus Sicherheitsgründen sind Online Bezahlmethoden nur dem benutzer mit der ID 1 sichtbar. Also dem allerersten Nutzer.';
$lang['settings_sales_heading_general']                             = 'General';
$lang['settings_sales_heading_invoice']                             = 'Rechnung';
$lang['settings_sales_heading_estimates']                           = 'Angebot';
$lang['settings_sales_heading_company']                             = 'Firma';
$lang['settings_sales_cron_invoice_heading']                        = 'Rechnung';

# Tasks
$lang['tasks_dt_datestart'] = 'Start Datum';
$lang['tasks_dt_priority']  = 'Priorität';

# Invoice General
$lang['invoice_discount'] = 'Rabatt';

# Tickets
$lang['ticket_settings_client'] = 'Kunde';

# Settings
$lang['settings_rtl_support_admin']                                   = 'RTL Admin Area (Rechts nach Links)';
$lang['settings_rtl_support_client']                                  = 'RTL Client Area (Rechts nach Links)';
$lang['acs_language_editor']                                          = 'Sprachen-Editor';
$lang['settings_estimate_auto_convert_to_invoice_on_client_accept']   = 'Automatische Konvertierung von Angebot zu Rechnung, nachdem der Kunde das Angebot akzeptiert hat.';
$lang['settings_exclude_estimate_from_client_area_with_draft_status'] = 'Ausschließen von Angeboten mit dem Status Entwurf aus dem Kundencenter.';

# Months
$lang['January']   = 'Januar';
$lang['February']  = 'Februar';
$lang['March']     = 'März';
$lang['April']     = 'April';
$lang['May']       = 'Mai';
$lang['June']      = 'Juni';
$lang['July']      = 'Juli';
$lang['August']    = 'August';
$lang['September'] = 'September';
$lang['October']   = 'Oktober';
$lang['November']  = 'November';
$lang['December']  = 'Dezember';

# Time ago function translate
$lang['time_ago_just_now']  = 'jetzt';
$lang['time_ago_minute']    = 'weniger als eine Minute';
$lang['time_ago_minutes']   = 'vor %s Minuten';
$lang['time_ago_hour']      = 'vor einer Stunde';
$lang['time_ago_hours']     = 'vor %s Stunden';
$lang['time_ago_yesterday'] = 'gestern';
$lang['time_ago_days']      = 'vor %s Tagen';
$lang['time_ago_week']      = 'vor einer Woche';
$lang['time_ago_weeks']     = 'vor %s Wochen';
$lang['time_ago_month']     = 'vor einem Monat';
$lang['time_ago_months']    = 'vor %s Monaten';
$lang['time_ago_year']      = 'vor einem Jahr';
$lang['time_ago_years']     = 'vor %s Jahren';


# Estimates
$lang['estimates']                          = 'Angebote';
$lang['estimate']                           = 'Angebot';
$lang['estimate_lowercase']                 = 'angebot';
$lang['create_new_estimate']                = 'Erstelle ein Angebot';
$lang['view_estimate']                      = 'Zeige Angebot';
$lang['estimate_number_changed']            = 'Das Angebot wurde erfolgreich erstellt, aber die Nummer hat sich geändert, da jemand anderes ebenfalls eines erstellt hat.';
$lang['estimate_sent_to_client_success']    = 'Das Angebot wurde erfolgreich an den Kunden versendet';
$lang['estimate_sent_to_client_fail']       = 'Problem beim Versenden des Angebotes';
$lang['estimate_reminder_send_problem']     = 'Problem beim Versenden der Erinnerung zum Angebot';
$lang['estimate_details']                   = 'Angebots-Details';
$lang['estimate_view']                      = 'Zeige Angebot';
$lang['estimate_select_customer']           = 'Kunde';
$lang['estimate_add_edit_number']           = 'Angebots-Nummer';
$lang['estimate_add_edit_date']             = 'Datum';
$lang['estimate_add_edit_expirydate']       = 'Gültig bis';
$lang['estimate_add_edit_currency']         = 'Währung';
$lang['estimate_add_edit_client_note']      = 'Kunden-Notiz';
$lang['estimate_add_edit_admin_note']       = 'Admin Notiz';
$lang['estimate_add_edit_new_item']         = 'Neues Item';
$lang['estimate_add_edit_search_item']      = 'Suche Items';
$lang['estimates_toggle_table_tooltip']     = 'Zeige Gesamte Tabelle';
$lang['estimate_add_edit_advanced_options'] = 'Erweiterte Optionen';
$lang['estimate_vat']                       = 'UsSt.ID';
$lang['estimate_to']                        = 'Zu';
$lang['estimates_list_all']                 = 'Alle';

$lang['estimate_invoiced_date']                  = 'Angebot berechnet am %s';
$lang['edit_estimate_tooltip']                   = 'Bearbeite Angebot';
$lang['delete_estimate_tooltip']                 = 'Lösche Angebot';
$lang['estimate_sent_to_email_tooltip']          = 'Sende per E-Mail';
$lang['estimate_already_send_to_client_tooltip'] = 'Dieses Angebot wurde bereits per E-Mail versendet %s';
$lang['send_overdue_notice_tooltip']             = 'Sende Erinnerung zum Angebot';
$lang['estimate_view_activity_tooltip']          = 'Aktivitäts-Log';

$lang['estimate_send_to_client_modal_heading']    = 'Sende dieses Angebot per E-Mail';
$lang['estimate_send_to_client_attach_pdf']       = 'Füge Angebot als PDF an';
$lang['estimate_send_to_client_preview_template'] = 'Vorschau der E-Mail Vorlage';

$lang['estimate_dt_table_heading_number']     = 'Angebot #';
$lang['estimate_dt_table_heading_date']       = 'Datum';
$lang['estimate_dt_table_heading_client']     = 'Kunde';
$lang['estimate_dt_table_heading_expirydate'] = 'Gültig bis';
$lang['estimate_dt_table_heading_amount']     = 'Betrag';
$lang['estimate_dt_table_heading_status']     = 'Status';

$lang['estimate_email_link_text']    = 'Link zum Angebot im Kundencenter';
$lang['estimate_convert_to_invoice'] = 'Umwandeln zu Rechnung';
# Home
$lang['home_unfinished_tasks']       = 'Undefinierte Aufgabe';

# Clients
$lang['client_estimates_tab'] = 'Angebot';
$lang['client_payments_tab']  = 'Zahlungen';


# Estimate General
$lang['estimate_pdf_heading']            = 'Angebot';
$lang['estimate_table_item_heading']     = 'Artikel';
$lang['estimate_table_quantity_heading'] = 'Stück';
$lang['estimate_table_rate_heading']     = 'Preis';
$lang['estimate_table_tax_heading']      = 'Steuer';
$lang['estimate_table_amount_heading']   = 'Gesamt';
$lang['estimate_subtotal']               = 'Netto Gesamt';
$lang['estimate_adjustment']             = 'Sonstige Kosten';
$lang['estimate_discount']               = 'Rabatt';
$lang['estimate_total']                  = 'Gesamt Kosten';
$lang['estimate_to']                     = 'An';
$lang['estimate_data_date']              = 'Datum';
$lang['estimate_data_expiry_date']       = 'Gültig bis';
$lang['estimate_note']                   = 'Bemerkungen:';
$lang['estimate_status_draft']           = 'Entwurf';
$lang['estimate_status_sent']            = 'Versendet';
$lang['estimate_status_declined']        = 'Abgelehnt';
$lang['estimate_status_accepted']        = 'Angenommen';
$lang['estimate_status_expired']         = 'Ausgelaufen';
$lang['estimate_note']                   = 'Notizen:';

# Quick create
$lang['qa_create_estimate'] = 'Erstelle Angebot';
$lang['qa_create_lead']     = 'Erstelle Lead';


## Clients
$lang['clients_estimate_dt_number']             = 'Angebot #';
$lang['clients_estimate_dt_date']               = 'Datum';
$lang['clients_estimate_dt_duedate']            = 'Gültig bis';
$lang['clients_estimate_dt_amount']             = 'Betrag';
$lang['clients_estimate_dt_status']             = 'Status';
$lang['clients_nav_estimates']                  = 'Angebot';
$lang['clients_decline_estimate']               = 'Ablehnen';
$lang['clients_accept_estimate']                = 'Akzeptieren';
$lang['clients_my_estimates']                   = 'Angebot';
$lang['clients_estimate_invoiced_successfuly']  = 'Angebot akzepiert. Die Rechnung wird erstellt.';
$lang['clients_estimate_accepted_not_invoiced'] = 'Vielen Dank das Sie unser Angebot angenommen haben.';
$lang['clients_estimate_declined']              = 'Angebot abgelehnt. Bitte teilen Sie uns mit wie wir Ihnen helfen können!';
$lang['clients_estimate_failed_action']         = 'Fehler beim Verändern des Angebotes.';
$lang['client_add_edit_profile']                = 'Profil';

# Version 1.0.3
# Admin
# Home
$lang['home_invoice_not_sent']        = 'Rechnung nocht nicht gesendet';
$lang['home_expired_estimates']       = 'Überfällige Angebote';
$lang['home_invoice_overdue']         = 'Rechnung überfällig';
$lang['home_payments_received_today'] = 'Erhaltene Anzahlungen Heute';

# Reports

# Custom Fields
$lang['custom_field']                          = 'Benutzerdefiniertes Feld';
$lang['custom_field_lowercase']                = 'benutzerdefiniertes feld';
$lang['custom_fields']                         = 'Benutzerdefinierte Felder';
$lang['custom_fields_lowercase']               = 'benutzerdefinierte felder';
$lang['new_custom_field']                      = 'Neues Benutzerdefiniertes Feld';
$lang['custom_field_name']                     = 'Feld Name';
$lang['custom_field_add_edit_type']            = 'Art';
$lang['custom_field_add_edit_belongs_top']     = 'Zurodnung des Feldes';
$lang['custom_field_add_edit_options']         = 'Optionen';
$lang['custom_field_add_edit_options_tooltip'] = 'Nur für Select-Typen verwenden. Füllen Sie das Feld, das durch die Optionen durch Komma trennen. zB. Apfel, Orange, Banane';
$lang['custom_field_add_edit_order']           = 'Reihenfolge';

$lang['custom_field_dt_field_to']       = 'Gehört zu';
$lang['custom_field_dt_field_name']     = 'Name';
$lang['custom_field_dt_field_type']     = 'Art';
$lang['custom_field_add_edit_active']   = 'Aktiv';
$lang['custom_field_add_edit_disabled'] = 'Deaktiviert';

# Ticket replies
$lang['ticket_reply']           = 'Ticket Antworten';
$lang['ticket_reply_lowercase'] = 'ticket antworten';

# Admin Customizer Sidebar
$lang['asc_custom_fields'] = 'Benutzerdefiniertes Feld';

# Contracts
$lang['contract_types']          = 'Vertragsarten';
$lang['contract_type']           = 'Vertragsart';
$lang['new_contract_type']       = 'Neue Vertragsart';
$lang['contract_type_lowercase'] = 'vertrag';
$lang['contract_type_name']      = 'Name';

$lang['contract_types_list_name'] = 'Vertragsarten';

# Customizer Menu
$lang['acs_contracts']      = 'Vertragsarten';
$lang['acs_contract_types'] = 'Vertragsarten Typen';

# Version 1.0.4
# Invoice Items
$lang['invoice_item_long_description']     = 'Lange Beschreibung';
# Customers
$lang['client_delete_invoices_warning']    = 'Dieser Kundenaccount hat Angebote oder Rechnungen. Sie können ihn daher nicht löschen. Alle Rechnungen / Angebote erst einem anderen Kunden zuweisen, hernach funktioniert löschen.';
$lang['clients_list_phone']                = 'Telefon';
$lang['client_expenses_tab']               = 'Betriebskosten';
$lang['customers_summary']                 = 'Kunden Zusammenfassung';
$lang['customers_summary_active']          = 'Aktiv';
$lang['customers_summary_inactive']        = 'Inaktiv';
$lang['customers_summary_logged_in_today'] = 'Heute angemeldet';

# Authentication
$lang['admin_auth_forgot_password_email']             = 'Benutzername';
$lang['admin_auth_forgot_password_heading']           = 'Kennwort vergessen';
$lang['admin_auth_login_heading']                     = 'Anmelden';
$lang['admin_auth_login_email']                       = 'E-Mail';
$lang['admin_auth_login_password']                    = 'Passwort';
$lang['admin_auth_login_remember_me']                 = 'Angemeldet bleiben';
$lang['admin_auth_login_button']                      = 'Anmelden';
$lang['admin_auth_login_fp']                          = 'Passwort vergessen?';
$lang['admin_auth_reset_password_heading']            = 'Passwort zurücksetzen';
$lang['admin_auth_reset_password']                    = 'Passwort';
$lang['admin_auth_reset_password_repeat']             = 'Passwort wiederholen';
$lang['admin_auth_invalid_email_or_password']         = 'Falscher Benutzer oder Kennwort';
$lang['admin_auth_inactive_account']                  = 'Deaktivierter Account';
# Calender
$lang['calendar_estimate']                            = 'Angebot';
$lang['calendar_invoice']                             = 'Rechnung';
$lang['calendar_contract']                            = 'Vertrag';
$lang['calendar_client_reminder']                     = 'Kunden Erinnerung';
$lang['calendar_event']                               = 'Termin';
$lang['calendar_task']                                = 'Aufgabe';
# Leads
$lang['lead_edit_delete_tooltip']                     = 'Lösche Lead';
$lang['lead_attachments']                             = 'Anhänge';
# Admin Customizer Sidebar
$lang['acs_finance']                                  = 'Finanzen';
# Settings
$lang['new_company_field_info']                       = 'Dieses Feld wird auf Rechnungen / Angeboten auf Firmenseite (links) angezeigt. Sie können keine Sonderzeichen (Punkte, Leerzeichen etc.) im Feld NAME verwenden.';
$lang['new_company_field_name']                       = 'Feld Name';
$lang['new_company_field_value']                      = 'Feld Wert';
$lang['new_company_field']                            = 'Neues Firmenfeld zufügen';
$lang['settings_number_padding_invoice_and_estimate'] = 'Rechnung / Angebot Nummern führende Null\'en. <br /> <small>zB. wenn dieser Wert auf 3 gesetzt ist, wird die Nr. formatiert auf: 005 oder 025</small>';
$lang['settings_show_sale_agent_on_invoices']         = 'Zeige Verkaufs-Mitarbeiter auf Rechnung';
$lang['settings_show_sale_agent_on_estimates']        = 'Zeige Verkaufs-Mitarbeiter auf Angebot';
$lang['settings_predefined_predefined_term']          = 'Vordefinierte AGB';
$lang['settings_predefined_clientnote']               = 'Vordefinierte Kunden Notiz';
$lang['settings_custom_pdf_logo_image_url']           = 'Benutzerdefiniertes PDF-Firmen-Logo (JPG - 210x60px)';
$lang['settings_custom_pdf_logo_image_url_tooltip']   = 'Achtung mit png-Bildern die Transparenz haben, je nach verwendeter php-imagick oder php-gd Versionen. Versuchen Sie eine Update von php-imagick und deaktiviere php-gd
. Wenn Sie dies leer lassen, wird das hochgeladene Logo verwendet.';

# General
$lang['sale_agent_string']               = 'Mitarbeiter';
$lang['amount_display_in_base_currency'] = 'Der Betrag wird in Ihrer Hauptwährung angezeigt';

# Leads
$lang['leads_summary']                   = 'Interessenten Zusammenfassung';

# Contracts
$lang['contract_value']                 = 'Vertragswert';
$lang['contract_trash']                 = 'Papierkorb';
$lang['contracts_view_trash']           = 'Zeige Papierkorb';
$lang['contracts_view_all']             = 'Alle';
$lang['contracts_view_exclude_trashed'] = 'Exklusive aller gelöschten Verträge';
$lang['contract_value_tooltip']         = 'Füge einen Vertragsvert hinzu. Er wird in der Standard Währung ausgewiesen.';
$lang['contract_trash_tooltip']         = 'Wenn Sie einen Vertrag in den Papierkorb schieben, wird er nicht im Kundencenter gezeigt, nicht in Statistiken einbezogen, und ebenfalls standardmäßig nicht gezeigt, wenn Sie alle Verträge anzeigen lassen.';

$lang['contract_renew_heading']               = 'Vertrag verlängern';
$lang['contract_summary_heading']             = 'Verträge Zusammenfassung';
$lang['contract_summary_expired']             = 'Abgelaufen';
$lang['contract_summary_active']              = 'Aktiv';
$lang['contract_summary_about_to_expire']     = 'Bald Auslaufend';
$lang['contract_summary_recently_added']      = 'Vertragsverlängerungen';
$lang['contract_summary_trash']               = 'Papierkorb';
$lang['contract_summary_by_type']             = 'Verträge nach Art';
$lang['contract_summary_by_type_value']       = 'Vertragsart mit Volumen';
$lang['contract_renewed_successfuly']         = 'Vertrag erfolgreich verlängert';
$lang['contract_renewed_fail']                = 'Problem while renewing the contract. Contact administrator';
$lang['no_contract_renewals_found']           = 'Keine Vertragsverlängerungen für diesen Vertrag gefunden';
$lang['no_contract_renewals_history_heading'] = 'Vertragsverlängerungen';
$lang['contract_renewed_by']                  = '%s hat den Vertrag verlängert.';
$lang['contract_renewal_deleted']             = 'Vertragsverlängerungen erfolgreich gelöscht';
$lang['contract_renewal_delete_fail']         = 'Fehler beim Löschen des Vertragsverlängerung. Bitte den Administrator kontaktieren.';

$lang['contract_renewal_new_value'] = 'Neuer Vertragswert %s';
$lang['contract_renewal_old_value'] = 'Alter Vertragswert %s';

$lang['contract_renewal_new_start_date'] = 'Neuer Vertragsbeginn: %s';
$lang['contract_renewal_old_start_date'] = 'Alter Vertragsbeginn war am %s';

$lang['contract_renewal_new_end_date'] = 'Neues Vertragsende %s';
$lang['contract_renewal_old_end_date'] = 'Altes Vertragsende war der %s';
$lang['contract_attachment']           = 'Anlagen';
$lang['contract_attachment_lowercase'] = 'anlagen';

# Admin Aside Menu
$lang['als_goals_tracking']     = 'Vertriebsziele';
$lang['als_expenses']           = 'Betriebsausgaben';
$lang['als_reports_expenses']   = 'Betriebsausgaben';
$lang['als_expenses_vs_income'] = 'Betriebsausgaben vs Einnahmen';

# Invoices
$lang['invoice_attach_file']           = 'Anlage hinzufügen';
$lang['invoice_mark_as_sent']          = 'Markiere als versendet';
$lang['invoice_marked_as_sent']        = 'Die Rechnung wurde erfolgreich als versendet markiert';
$lang['invoice_marked_as_sent_failed'] = 'Fehler beim Setzen auf versendet';

# Quick Actions
$lang['qa_new_goal']    = 'Stelle neues Vertriebsziel ein';
$lang['qa_new_expense'] = 'Betriebsausgaben hinzufügen';

# Goals Tracking
$lang['goals']                                         = 'Vertriebsziele';
$lang['goal']                                          = 'Vertriebsziel';
$lang['goals_tracking']                                = 'Vertriebsziel Auswertung';
$lang['new_goal']                                      = 'Neues Vertriebsziel';
$lang['goal_lowercase']                                = 'vertriebsziel';
$lang['goal_start_date']                               = 'Start Datum';
$lang['goal_end_date']                                 = 'End Datum';
$lang['goal_subject']                                  = 'Betreff';
$lang['goal_description']                              = 'Beschreibung';
$lang['goal_type']                                     = 'Vertriebsziel Art';
$lang['goal_achievement']                              = 'Leistung/Ziel';
$lang['goal_contract_type']                            = 'Vertrags Art';
$lang['goal_notify_when_fail']                         = 'Benachrichtigen Sie Mitarbeiter wenn das Ziel nicht erreicht wurde';
$lang['goal_notify_when_achieve']                      = 'Benachrichtigen Sie Mitarbeiter wenn das Ziel erreicht wurde';
$lang['goal_progress']                                 = 'Fortschritt';
$lang['goal_total']                                    = 'Gesamt: %s';
$lang['goal_result_heading']                           = 'Vertriebsziel Fortschritt';
$lang['goal_income_shown_in_base_currency']            = 'Die Gesamterträge werden in der Standardwährung gezeigt';
$lang['goal_notify_when_end_date_arrives']             = 'Die Mitarbeiter werden benachrichtigt sobald der Countdown anbricht.';
$lang['goal_staff_members_notified_about_achievement'] = 'Die Mitarbeiter werden benachrichtigt sobald das Vertriebsziel beendet wurde.';
$lang['goal_staff_members_notified_about_failure']     = 'Mitarbeiter werden über das Verfehlen benachrichtigt,';
$lang['goal_notify_staff_manualy']                     = 'Benachrichtige Mitarbeiter manuell';
$lang['goal_notify_staff_notified_manualy_success']    = 'Die Mitarbeiter wurden erfolgreich über das Vertriebsziel informiert';
$lang['goal_notify_staff_notified_manualy_fail']       = 'Fehler - Die Mitarbeiter wurden nicht über das Vertriebsziel informiert';

$lang['goal_achieved'] = 'Erreicht!';
$lang['goal_failed']   = 'Verfehlt';
$lang['goal_close']    = 'Fast erreicht!';

$lang['goal_type_total_income']                                         = 'Erreichtes Gesamteinkommen';
$lang['goal_type_convert_leads']                                        = 'Konvertiere X Interessenten';
$lang['goal_type_increase_customers_without_leads_conversions']         = 'Erhöhen Sie die Neukunden';
$lang['goal_type_increase_customers_without_leads_conversions_subtext'] = 'Interessenten Konvertierungen sind ausgeschlossen.';

$lang['goal_type_increase_customers_with_leads_conversions']         = 'Erhöhen Sie die Kundenanzahl';
$lang['goal_type_increase_customers_with_leads_conversions_subtext'] = 'Konvertierte Kunden sind inklusive';
$lang['goal_type_make_contracts_by_type_calc_database']              = 'Verträge nach Typ';
$lang['goal_type_make_contracts_by_type_calc_database_subtext']      = 'Wird ab dem Zeitpunkt berechnet wann Sie hinzugefügt wurden';
$lang['goal_type_make_contracts_by_type_calc_date']                  = 'Verträge nach Typ';
$lang['goal_type_make_contracts_by_type_calc_date_subtext']          = 'Ist nach dem Vertragsbeginn';
$lang['goal_type_total_estimates_converted']                         = 'X Angebote konvertiert';
$lang['goal_type_total_estimates_converted_subtext']                 = 'Angebote die in Rechnungen konvertiert wurden';
$lang['goal_type_income_subtext']                                    = 'Die Erträge werden in der Basiswährung berechnet werden (nicht konvertiert)';

# Payments
$lang['payment_transaction_id']                                      = 'Transaktions-ID';
# Settings Menu
$lang['acs_expenses']                                                = 'Betriebsausgaben';
$lang['acs_expense_categories']                                      = 'Betriebsausgaben Kategorien';
# Expeneses
$lang['expense_category']                                            = 'Betriebsausgaben Kategorien';
$lang['expense_category_lowercase']                                  = 'betriebsausgaben kategorien';
$lang['new_expense']                                                 = 'Erfasse Betriebsausgaben';
$lang['expense_add_edit_name']                                       = 'Kategorie Name';
$lang['expense_add_edit_description']                                = 'Kategorie Beschreibung';
$lang['expense_categories']                                          = 'Betriebsausgaben Kategorie';
$lang['new_expense_category']                                        = 'Neue Kategorie';
$lang['dt_expense_description']                                      = 'Beschreibung';
$lang['expense']                                                     = 'Betriebsausgabe';
$lang['expenses']                                                    = 'Betriebsausgaben';
$lang['expense_lowercase']                                           = 'betriebsausgabe';
$lang['expense_add_edit_tax']                                        = 'Steuer';
$lang['expense_add_edit_customer']                                   = 'Kunde';
$lang['expense_add_edit_currency']                                   = 'Währung';
$lang['expense_add_edit_note']                                       = 'Notizen';
$lang['expense_add_edit_date']                                       = 'Fällig am';
$lang['expense_add_edit_amount']                                     = 'Betrag';
$lang['expense_add_edit_billable']                                   = 'In Rechnung stellen';
$lang['expense_add_edit_attach_receipt']                             = 'Rechnung anfügen';
$lang['expense_add_edit_reference_no']                               = 'Referenz #';
$lang['expense_receipt']                                             = 'Betriebsausgaben Eingang';
$lang['expense_receipt_lowercase']                                   = 'betriebsausgaben eingang';
$lang['expense_dt_table_heading_category']                           = 'Kategorie';
$lang['expense_dt_table_heading_amount']                             = 'Menge';
$lang['expense_dt_table_heading_date']                               = 'Datum';
$lang['expense_dt_table_heading_reference_no']                       = 'Referenz #';
$lang['expense_dt_table_heading_customer']                           = 'Kunde';
$lang['expense_dt_table_heading_payment_mode']                       = 'Zahlungsart';
$lang['expense_converted_to_invoice']                                = 'Betriebsausgaben erfolgreich in eine Rechnung umgewandelt.';
$lang['expense_converted_to_invoice_fail']                           = 'Failed to convert this expense to invoice check error log.';
$lang['expense_copy_success']                                        = 'Betriebsausgaben erfolgreich kopiert.';
$lang['expense_copy_fail']                                           = 'Failed to copy expense. Please check the required fields and try again';
$lang['expenses_list_all']                                           = 'Alle';
$lang['expenses_list_billable']                                      = 'Fakturierbar';
$lang['expenses_list_non_billable']                                  = 'Nicht Fakturierbare';
$lang['expenses_list_invoiced']                                      = 'In Rechnung gestellt';
$lang['expenses_list_unbilled']                                      = 'Nicht abgerechnet';
$lang['expenses_list_recurring']                                     = 'Wiederkehrend';
$lang['expense_invoice_delete_not_allowed']                          = 'Sie können diese Kosten nicht löschen. Der Aufwand wird bereits in Rechnung gestellt';
$lang['expense_convert_to_invoice']                                  = 'Konvertiere zu einer Rechnung';
$lang['expense_edit']                                                = 'Bearbeite Betriebsausgabe';
$lang['expense_delete']                                              = 'Löschen';
$lang['expense_copy']                                                = 'Kopieren';
$lang['expense_invoice_not_created']                                 = 'Rechnugn nicht erstellt';
$lang['expense_billed']                                              = 'Abgerechnet';
$lang['expense_not_billed']                                          = 'Nicht Abgerechnet';
$lang['expense_customer']                                            = 'Kunde';
$lang['expense_note']                                                = 'Notizen:';
$lang['expense_date']                                                = 'Datum:';
$lang['expense_ref_noe']                                             = 'Ref #:';
$lang['expense_tax']                                                 = 'Steuer:';
$lang['expense_amount']                                              = 'Betrag:';
$lang['expense_recurring_indicator']                                 = 'Wiederkehrend';
$lang['expense_already_invoiced']                                    = 'Dieser Aufwand ist bereits in Rechnung gestellt';
$lang['expense_recurring_auto_create_invoice']                       = 'Auto Rechnung erstellen';
$lang['expense_recurring_send_custom_on_renew']                      = 'Senden Sie die Rechnung an Kunden E-Mail, wenn Kosten wiederholen';
$lang['expense_recurring_autocreate_invoice_tooltip']                = 'Wenn diese Option aktiviert wird, wird die Rechnung für den Kunden automatisch erstellt, wenn die Kosten erneuert werden.';
$lang['report_expenses_full']                                        = 'Komplette Auswertung';
$lang['expenses_yearly_by_categories']                               = 'Die Aufwendungen Jährlich nach Kategorien';
$lang['total_expenses_for']                                          = 'Gesamtaufwendungen für'; // year
$lang['expenses_report_for']                                         = 'Die Aufwendungen für'; // year
$lang['expense_report_info']                                         = 'Abrechenbare Aufwendungen werden in dem Bericht nicht berechnet.';
# Custom fields
$lang['custom_field_required']                                       = 'Pflichtfeld';
$lang['custom_field_show_on_pdf']                                    = 'Zeige PDF';
$lang['custom_field_leads']                                          = 'Leads';
$lang['custom_field_customers']                                      = 'Kunden';
$lang['custom_field_staff']                                          = 'Mitarbeiter';
$lang['custom_field_contracts']                                      = 'Verträge';
$lang['custom_field_tasks']                                          = 'Aufgaben';
$lang['custom_field_expenses']                                       = 'Expenses';
$lang['custom_field_invoice']                                        = 'Rechnungen';
$lang['custom_field_estimate']                                       = 'Angebot';
# Tickets
$lang['ticket_single_private_staff_notes']                           = 'Private Mitarbeiter Notizen';

//TODO goon
# Business News
$lang['business_news'] = 'News';

# Navigation
$lang['nav_todo_items']               = 'Aufgaben';
# Clients
# Contracts
$lang['clients_contracts_type']       = 'Vertragsart';


# Version 1.0.5
# General
$lang['no_tax']                             = 'keine Steuer';
$lang['numbers_not_formated_while_editing'] = 'Der Wert im Feld ist nicht formatiert während des Bearbeiten und sollte hier auch nicht formatiert werden.';
# Contracts
$lang['contracts_view_expired']             = 'Ausgelaufen';
$lang['contracts_view_without_dateend']     = 'Verträge ohne Enddatum';

# Email Templates
$lang['email_template_contracts_fields_heading'] = 'Verträge';
# Invoices General
$lang['invoice_estimate_general_options']        = 'Generelle Optionen';
$lang['invoice_table_item_description']          = 'Beschreibung';
$lang['invoice_recurring_indicator']             = 'Wiederholung';

# Estimates
$lang['estimate_convert_to_invoice_successfuly'] = 'Angebot erfolgreich zu rechnung konvertiert';
$lang['estimate_table_item_description']         = 'Beschreibung';

# Version 1.0.6
# Invoices
# Currencies
$lang['cant_delete_base_currency'] = 'Sie können nicht die Basiswährung löschen. Zuerst bitte eine neue Standardwährung definieren.';
$lang['invoice_copy']              = 'Kopiere Rechnung';
$lang['invoice_copy_success']      = 'Rechnung erfolgreich kopier';
$lang['invoice_copy_fail']         = 'Kopieren der Rechnung fehlgeschlagen';
$lang['invoice_due_after_help']    = 'Setze auf Null um Kalkulation zu vermeiden';

$lang['show_shipping_on_invoice'] = 'Versandadresse in Rechnung zeigen';

# Estimates
$lang['show_shipping_on_estimate']         = 'Versandadresse in Angebot zeigen';
$lang['is_invoiced_estimate_delete_error'] = 'Dieses Angebot wurde bereits in eine Rechnung gewandelt. Sie können es daher nicht löschen.';

# Customers & Invoices / Estimates
$lang['ship_to']                  = 'Versenden an';
$lang['customer_profile_details'] = 'Kunden Details';
$lang['billing_shipping']         = 'Rechnung & Versand';
$lang['billing_address']          = 'Rechnungs-Adresse';
$lang['shipping_address']         = 'Versand-Adresse';

$lang['billing_street']  = 'Straße';
$lang['billing_city']    = 'Stadt';
$lang['billing_state']   = 'Bundesland';
$lang['billing_zip']     = 'PLZ';
$lang['billing_country'] = 'Land';

$lang['shipping_street']                    = 'Straße';
$lang['shipping_city']                      = 'Stadt';
$lang['shipping_state']                     = 'Bundesland';
$lang['shipping_zip']                       = 'PLZ';
$lang['shipping_country']                   = 'Land';
$lang['get_shipping_from_customer_profile'] = 'Versanddetails von Kundenprofil holen';

# Customer
$lang['customer_file_from']                                    = 'Zeige von %s';
$lang['customer_default_currency']                             = 'Währung';
$lang['customer_no_attachments_found']                         = 'Keine Anlagen gefunden';
$lang['customer_update_address_info_on_invoices']              = 'Aktualisiere die Versand-/Rechnungsadresse Info auf allen bereits angelegten Rechnungen / Angeboten';
$lang['customer_update_address_info_on_invoices_help']         = 'Wenn Sie dieses Feld aktivieren, werden die Felder der Versand- und Rechnungsadressen in allen Rechnungen und Angeboten aktualisiert. Notiz: Rechnungen mit dem Status bezahlt betrifft dies nicht.';
$lang['setup_google_api_key_customer_map']                     = 'Google api Key erstellen, um Kundenkarte zu sehen';
$lang['customer_attachments_file']                             = 'Datei';
$lang['client_send_set_password_email']                        = 'Kennwort per E-Mail versenden';
$lang['customer_billing_same_as_profile']                      = 'Gleich wie Kunden Info';
$lang['customer_billing_copy']                                 = 'Kopiere Rechnungs-Adresse';
$lang['customer_map']                                          = 'Karte';
$lang['set_password_email_sent_to_client']                     = 'Email zum Passwort-Setzen erfolgreich an den Kunden versendet';
$lang['set_password_email_sent_to_client_and_profile_updated'] = 'Profil wurde aktualisiert und Email zum Passwort Setzen erfolgreich an Kunde versendet';
$lang['customer_attachments']                                  = 'Dateien';
$lang['customer_longitude']                                    = 'Längengrad (Google Maps)';
$lang['customer_latitude']                                     = 'Breitengrad (Google Maps)';

# Authentication
$lang['admin_auth_set_password']          = 'Passwort';
$lang['admin_auth_set_password_repeat']   = 'Wiederhole Passwort';
$lang['admin_auth_set_password_heading']  = 'Passwort festlegen';
$lang['password_set_email_subject']       = 'Kennwort für %s festlegen.';
# General
$lang['apply']                            = 'Anwenden';
$lang['department_calendar_id']           = 'Google Calendar ID';
$lang['kan_ban_string']                   = 'Kan Ban';
$lang['localization_default_language']    = 'Standard Sprache';
$lang['system_default_string']            = 'System Standard';
$lang['advanced_options']                 = 'Erweiterte Optionen';
# Expenses
$lang['expense_list_invoice']             = 'In rechnung gestellt';
$lang['expense_list_billed']              = 'Abgerechnet';
$lang['expense_list_unbilled']            = 'Nicht abgerechnet';
# Leads
$lang['lead_merge_custom_field']          = 'Als benutzerdefinierts Feld zusammen führen';
$lang['lead_merge_custom_field_existing'] = 'Mit existierendem Datenbank Feld zusammen führen';
$lang['lead_dont_merge_custom_field']     = 'Nicht zusammen führen';
$lang['no_lead_notes_found']              = 'Keine Lead Notize gefunden';
$lang['leads_view_list']                  = 'Liste';
$lang['lost_leads']                       = 'Verlorene Leads';
$lang['junk_leads']                       = 'Junk Leads';
$lang['lead_mark_as_lost']                = 'Markieren als verloren';
$lang['lead_unmark_as_lost']              = 'Lead als nicht mehr verloren markieren';
$lang['lead_marked_as_lost']              = 'Lead erfolgreich als verloren markiert';
$lang['lead_unmarked_as_lost']            = 'Lead erfolgreich als nicht verloren markiert';
$lang['leads_status_color']               = 'Farbe';

$lang['lead_mark_as_junk']     = 'Als Junk markieren';
$lang['lead_unmark_as_junk']   = 'Lead nicht als Junk markieren';
$lang['lead_marked_as_junk']   = 'Lead erfolgreich als Junk markiert.';
$lang['lead_unmarked_as_junk'] = 'Lead erfolgreich als kein Junk markiert.';

$lang['lead_not_found']                                                      = 'Lead nicht gefunden';
$lang['lead_lost']                                                           = 'Verloren';
$lang['lead_junk']                                                           = 'Junk';
$lang['leads_not_assigned']                                                  = 'Nicht zugewiesen';
# Contacts
$lang['contract_not_visible_to_client']                                      = 'Für den Kunden ausblenden';
$lang['contract_edit_overview']                                              = 'Vertragsdetails';
$lang['contract_attachments']                                                = 'Dokumente / Anlagen';
# Tasks
$lang['task_view_make_public']                                               = 'Öffentliche Aufgabe';
$lang['task_is_private']                                                     = 'Private Aufgabe';
$lang['task_is_private_help']                                                = 'Diese Aufgabe ist nur Zugewiesenen sichtbar, Followers, dem Ersteller und Adminis';
$lang['task_finished']                                                       = 'Beendet';
$lang['task_single_related']                                                 = 'Zugehörig';
$lang['task_unmark_as_complete']                                             = 'Unkomplett markieren';
$lang['task_unmarked_as_complete']                                           = 'Aufgabe wurde der Komplett-Status entzogen';
$lang['task_relation']                                                       = 'Zugehörig';
$lang['task_public']                                                         = 'Teamfreigabe';
$lang['task_public_help']                                                    = 'Wenn Sie diese Aufgabe öffentlich setzen,wird sie für alle Mitarbeiter sichtbar. Andernfalls nur für zugewiesene Mitarbeiter, Follower, dem Ersteller und dem Administrator';
# Settings
$lang['settings_general_favicon']                                            = 'Favicon';
$lang['settings_output_client_pdfs_from_admin_area_in_client_language']      = 'Output client PDF documents from admin area in client language';
$lang['settings_output_client_pdfs_from_admin_area_in_client_language_help'] = 'Wenn diese Option auf JA gesetzt ist und zB. die Standardsprache english ist, der Kunde aber deutsch eingestellt hat, wird das pdf Dokument in deutsch erstellt.';
$lang['settings_cron_surveys']                                               = 'Umfragen';
$lang['settings_default_tax']                                                = 'Standard Steuer';
$lang['setup_calendar_by_departments']                                       = 'Erstelle Kalender pro Abteilung';
$lang['settings_calendar']                                                   = 'Kalender';
$lang['settings_sales_invoice_due_after']                                    = 'Rechnung nach (Tagen)';
$lang['settings_google_api']                                                 = 'Google API Key';
$lang['settings_gcal_main_calendar_id']                                      = 'Google Calendar ID';
$lang['settings_gcal_main_calendar_id_help']                                 = 'Dies ist der Haupt-Firmen Kalender. Alle Termine dieses Kalender werden gezeigt.Wenn Sie eine Kalender pro Abteilung erstellen wollen, können Sie in der Abteilung die Google Calendar ID definieren.';

$lang['show_on_calendar']                  = 'Zeige auf dem Kalender';
$lang['show_invoices_on_calendar']         = 'Rechnungen';
$lang['show_estimates_on_calendar']        = 'Estimates';
$lang['show_contracts_on_calendar']        = 'Verträge';
$lang['show_tasks_on_calendar']            = 'Tasks';
$lang['show_client_reminders_on_calendar'] = 'Client Reminders';

# Leads
$lang['copy_custom_fields_convert_to_customer']                      = 'Copy custom fields to customer profile';
$lang['copy_custom_fields_convert_to_customer_help']                 = 'If any of the following custom fields do not exists for customer will be auto created with the same name otherwise only the value will be copied from the lead profile.';
$lang['lead_profile']                                                = 'Profil';
$lang['lead_is_client']                                              = 'Kunden';
$lang['leads_kan_ban_notes_title']                                   = 'Notizen';
$lang['leads_email_integration_folder_no_encryption']                = 'No Encryption';
$lang['leads_email_integration']                                     = 'Email Integration';
$lang['leads_email_active']                                          = 'Active';
$lang['leads_email_integration_imap']                                = 'IMAP Server';
$lang['leads_email_integration_email']                               = 'Email address (Login)';
$lang['leads_email_integration_password']                            = 'Password';
$lang['leads_email_integration_port']                                = 'Port';
$lang['leads_email_integration_default_source']                      = 'Default Source';
$lang['leads_email_integration_check_every']                         = 'Check Every (minutes)';
$lang['leads_email_integration_default_assigned']                    = 'Responsibe for new lead';
$lang['leads_email_encryption']                                      = 'Encryption';
$lang['leads_email_integration_updated']                             = 'Email Integration Updated';
$lang['leads_email_integration_default_status']                      = 'Default Status';
$lang['leads_email_integration_folder']                              = 'Folder';
$lang['leads_email_integration_notify_when_lead_imported']           = 'Notify when lead imported';
$lang['leads_email_integration_only_check_unseen_emails']            = 'Wähle nur nicht /* veröffentlicht */e Emails';
$lang['leads_email_integration_only_check_unseen_emails_help']       = 'Das Skript wird automatisch die Emails nach dem Markieren als geöffnet setzen. Verwendet, um zu verhindenr dass alle Mails immer und immer wieder markiert werden. Es ist nicht empfohlen, diese Option zu deaktiveren wenn Sie eine Menge Mails haben und eine Menge Weiterleitungen an die Mail haben, die Sie für Leads definiert haben.';
$lang['leads_email_integration_notify_when_lead_contact_more_times'] = 'Benachrichtigen, wenn Lead E-Mail mehrfach versendet.';
$lang['leads_email_integration_test_connection']                     = 'Test IMAP Verbindung';
$lang['lead_email_connection_ok']                                    = 'IMAP Verbindung hergestellt';
$lang['lead_email_connection_not_ok']                                = 'IMAP Verbindung nicht okay';
$lang['lead_email_activity']                                         = 'Email Aktivität';
$lang['leads_email_integration_notify_roles']                        = 'zu informierende Rollen';
$lang['leads_email_integration_notify_staff']                        = 'zu informierende Mitarbeiter';
$lang['lead_public']                                                 = 'Öffentlich';
# Knowledge Base

$lang['kb_group_color']                = 'Farbe';
$lang['kb_group_order']                = 'Bestellung';
# Utilities - BULK PDF Exporter
$lang['bulk_pdf_exporter']             = 'Massen PDF Exporter';
$lang['bulk_export_pdf_payments']      = 'Bezahlungen';
$lang['bulk_export_pdf_estimates']     = 'Angebote';
$lang['bulk_export_pdf_invoices']      = 'Rechnungen';
$lang['bulk_pdf_export_button']        = 'Export';
$lang['bulk_pdf_export_select_type']   = 'Typ wählen';
$lang['no_data_found_bulk_pdf_export'] = 'Keine Daten zum Exportieren gefunden';
$lang['bulk_export_status_all']        = 'Alle';
$lang['bulk_export_status']            = 'Status';
$lang['bulk_export_zip_payment_modes'] = 'Bezahlungen via';
$lang['bulk_export_include_tag']       = 'Schlagwort inkludieren';
$lang['bulk_export_include_tag_help']  = 'zB. Original oder Kopie. Das Schlagwort wird in der PDF ausgegeben. Empfohlen: Verwenden Sie nur einen Tag';
# Predefined replies
$lang['no_predefined_replies_found']   = 'Keine vordefinierten Antworten gefunden';
## Clients area
$lang['clients_contract_attachments']  = 'Anlagen/Dokumente';
# Backup
$lang['backup_type_full']              = 'Komplett-Backup';
$lang['backup_type_db']                = 'Datenbank Backup';

$lang['auto_backup_options_updated']     = 'Auto Backup Optionen aktualisiert';
$lang['auto_backup_every']               = 'Erstelle Backup alle X Tage';
$lang['auto_backup_enabled']             = 'Aktiviert (braucht Cron)';
$lang['auto_backup']                     = 'Auto Backup';
$lang['backup_delete']                   = 'Backup gelöscht';
$lang['create_backup']                   = 'Erstelle Backup';
$lang['backup_success']                  = 'Backup erfolgreich erstellt';
$lang['utility_backup']                  = 'Datenbank Backup';
$lang['utility_create_new_backup_db']    = 'Erstelle Datenbank Backup';
$lang['utility_backup_table_backupname'] = 'Backup';
$lang['utility_backup_table_backupsize'] = 'Backup Größe';
$lang['utility_backup_table_backupdate'] = 'Datum';
$lang['utility_db_backup_note']          = 'Notiz: Wegen Limits der Ausführungszeit und verfügbarem PHP-RAM, sehr große DBs zu backuppen könnte nicht funktioniere. Wenn die Datenbank sehr groß ist, backuppen Sie diese besser direkt vom SQL server oder via CLI, oder lassen Sie es Ihren Server Admin tun, wenn Sie kein Root sind.';

# Version 1.0.7
## Customers - portal
$lang['clients_nav_proposals'] = 'Vorschlag';
$lang['clients_nav_support']   = 'Support';
# General
$lang['more']                  = 'Mehr';
$lang['add_item']              = 'Hinzufügen';
$lang['goto_admin_area']       = 'Gehe zum Backend';
$lang['click_here_to_edit']    = 'Klicken Sie hier zum bearbeiten';
$lang['delete']                = 'Lösche %s';
$lang['welcome_top']           = 'Hallo %s!';

# Customers
$lang['customer_permissions']         = 'Berechtigungen';
$lang['customer_permission_invoice']  = 'Rechnungen';
$lang['customer_permission_estimate'] = 'Angebot';
$lang['customer_permission_proposal'] = 'Vorschlag';
$lang['customer_permission_contract'] = 'Verträge';
$lang['customer_permission_support']  = 'Support';


#Tasks
$lang['task_related_to'] = 'Zuordnung';

# Send file
$lang['custom_file_fail_send']    = 'Datei konnte nicht gesendet werden';
$lang['custom_file_success_send'] = 'Datei wurde erfolgreich gesendet an %s';
$lang['send_file_subject']        = 'E-Mail Betreff';
$lang['send_file_email']          = 'E-Mail Adresse';
$lang['send_file_message']        = 'Nachricht';
$lang['send_file']                = 'Sende Datei';
$lang['add_checklist_item']       = 'Checklisten Eintrag';
$lang['task_checklist_items']     = 'Checklisten Einträge';

# Import
$lang['default_pass_clients_import'] = 'Kennwort für alle importierten Benutzer';
$lang['simulate_import']             = 'Simuliere Import';
$lang['import_upload_failed']        = 'Hochladen fehlgeschlagen';
$lang['import_total_imported']       = 'Total importiert: %s';
$lang['import_leads']                = 'Leads importieren';
$lang['import_customers']            = 'Kunden importieren';
$lang['choose_csv_file']             = 'Wähle eine CSV Datei';
$lang['import']                      = 'Importieren';
$lang['lead_import_status']          = 'Status';
$lang['lead_import_source']          = 'Quelle';

# Bulk PDF Export
$lang['bulk_export_pdf_proposals'] = 'Vorschlag';

# Invoices
$lang['delete_invoice'] = 'Lösche Rechnung';

# Calendar
$lang['calendar_lead_reminder'] = 'Lead Erinnerung';

$lang['items']      = 'Items';
$lang['support']    = 'Support';
$lang['new_ticket'] = 'Neues Ticket';

# Reminders
$lang['client_edit_set_reminder_title'] = 'Kundenerinnerung hinzufügen';
$lang['lead_set_reminder_title']        = 'Lead Erinnerung hinzufügen';
$lang['set_reminder_tooltip']           = 'Mit dieser Option können Sie nie etwas über Ihre Kunden vergessen.';
$lang['client_reminders_tab']           = 'Erinnerungen';
$lang['leads_reminders_tab']            = 'Erinnerungen';

# Tickets
$lang['delete_ticket_reply']  = 'Lösche Antwort';
$lang['ticket_priority_edit'] = 'Bearbeite Priorität';
$lang['ticket_priority_add']  = 'Füge Priorität hinzu';
$lang['ticket_status_edit']   = 'Bearbeite Ticket Status';
$lang['ticket_service_edit']  = 'Bearbeite Ticket Service';
$lang['edit_department']      = 'Bearbeite Abteilung';

# Expenses
$lang['edit_expense_category']                                    = 'Bearbeite Betriebskosten Kategorie';
# Settings
$lang['customer_default_country']                                 = 'Standard Land';
$lang['settings_sales_require_client_logged_in_to_view_estimate'] = 'Erzwinge eingeloggt Status für Kunde, um Angebot einzusehen.';
$lang['set_reminder']                                             = 'Erinnerung aktisetzen';
$lang['set_reminder_date']                                        = 'Datum der Erinnerung';
$lang['reminder_description']                                     = 'beschreibung definieren';
$lang['reminder_notify_me_by_email']                              = 'Sende Mail auch für diese Erinnerung';
$lang['reminder_added_successfuly']                               = 'Erinnerung erfolgreich zugefügt. Sie werden rechtzeitig informiert.';
$lang['reminder_description']                                     = 'Beschreibung';
$lang['reminder_date']                                            = 'Datum';
$lang['reminder_staff']                                           = 'Erinnern';
$lang['reminder_is_notified']                                     = 'Ist erinnert?';
$lang['reminder_is_notified_boolean_no']                          = 'Nein';
$lang['reminder_is_notified_boolean_yes']                         = 'Ja';
$lang['reminder_set_to']                                          = 'Setze Erinnerung zu ';
$lang['reminder_deleted']                                         = 'Erinnerung erfolgreich gelöscht';
$lang['reminder_failed_to_delete']                                = 'Fehler beim Löschen der Erinnerung';
$lang['show_invoice_estimate_status_on_pdf']                      = 'Zeige Rechnung / Angebot Status in PDF'; //ToDo
$lang['email_piping_default_priority']                            = 'Default priority on piped ticket';
$lang['show_lead_reminders_on_calendar']                          = 'Lead Erinnerung';
$lang['tickets_piping']                                           = 'Email Piping';
$lang['email_piping_only_replies']                                = 'Only Replies Allowed by Email';
$lang['email_piping_only_registered']                             = 'Pipe Only on Registed Users';
$lang['email_piping_enabled']                                     = 'Enabled';

# Estimates
$lang['view_estimate_as_client']         = 'Zeige Kostenvoranschlag als Kunde';
$lang['estimate_mark_as']                = 'Markiere als %s';
$lang['estimate_status_changed_success'] = 'Kostenvoranschlag Status verändert!';
$lang['estimate_status_changed_fail']    = 'Fehler beim verändern des Status';
$lang['estimate_email_link_text']        = 'diesen Link!';

# Angebot
$lang['proposal_to']                            = 'Firma / Name';
$lang['proposal_date']                          = 'Datum';
$lang['proposal_address']                       = 'Adresse';
$lang['proposal_phone']                         = 'Telefon';
$lang['proposal_email']                         = 'E-Mail';
$lang['proposal_date_created']                  = 'Daum erstellt';
$lang['proposal_open_till']                     = 'Open Till';
$lang['proposal_status_open']                   = 'Offen';
$lang['proposal_status_accepted']               = 'Akzeptiert';
$lang['proposal_status_declined']               = 'Abgelehnt';
$lang['proposal_status_sent']                   = 'Sent';
$lang['proposal_expired']                       = 'Abgelaufen';
$lang['proposal_subject']                       = 'Thema/Betreff';
$lang['proposal_total']                         = 'Total';
$lang['proposal_status']                        = 'Status';
$lang['proposals_list_all']                     = 'Alle';
$lang['proposals_leads_related']                = 'Mit Leads Verbunden';
$lang['proposals_customers_related']            = 'Mit Kunden Verbunden';
$lang['proposal_related']                       = 'Verbunden';
$lang['proposal_for_lead']                      = 'Lead';
$lang['proposal_for_customer']                  = 'Kunden';
$lang['proposal']                               = 'Vorschlag';
$lang['proposal_lowercase']                     = 'vorschlag';
$lang['proposals']                              = 'Vorschlag';
$lang['proposals_lowercase']                    = 'vorschlag';
$lang['new_proposal']                           = 'Neuer Vorschlag';
$lang['proposal_currency']                      = 'Währung';
$lang['proposal_allow_comments']                = 'Erlaube Kommentare';
$lang['proposal_allow_comments_help']           = 'Aktivieren SIe die Funktion Kommentar kann der Kunde dieses sehen';
$lang['proposal_edit']                          = 'Bearbeiten';
$lang['proposal_pdf']                           = 'PDF';
$lang['proposal_send_to_email']                 = 'Sende per E-Mail';
$lang['proposal_send_to_email_title']           = 'Sende Angebot per E-Mail';
$lang['proposal_attach_pdf']                    = 'Füge PDF an';
$lang['proposal_preview_template']              = 'Vorschau des Templates';
$lang['proposal_view']                          = 'Zeige Angebot';
$lang['proposal_copy']                          = 'Kopieren';
$lang['proposal_delete']                        = 'Löschen';
$lang['proposal_mark_as_open']                  = 'Kennzeichne als offen';
$lang['proposal_mark_as_declined']              = 'Kennzeichne als abgelehnt';
$lang['proposal_mark_as_accepted']              = 'Kennzeichne als angenommen';
$lang['proposal_mark_as_sent']                  = 'Kennzeichne als versendet';
$lang['proposal_to']                            = 'Für';
$lang['proposal_add_comment']                   = 'Komentart hinzufügen';
$lang['proposal_sent_to_email_success']         = 'Angbeot erfolgreich per E-Mail versendet';
$lang['proposal_sent_to_email_fail']            = 'Fehler beim versenden des Angebotes';
$lang['proposal_copy_fail']                     = 'Fehler ebi kopieres des Angbotes';
$lang['proposal_copy_success']                  = 'Angbot erfolreich kopiert';
$lang['proposal_status_changed_success']        = 'Angbot Status erfolgreich verändert';
$lang['proposal_status_changed_fail']           = 'Fehler beim ändern des Status beim Angebot';
$lang['proposal_assigned']                      = 'Zugewiesen';
$lang['proposal_comments']                      = 'Kommentar';
$lang['proposal_convert']                       = 'Umwandeln';
$lang['proposal_convert_estimate']              = 'Kostenvoranschlag';
$lang['proposal_convert_invoice']               = 'Rechnung';
$lang['proposal_convert_to_estimate']           = 'Umwandeln zu Kostenvoranschlag';
$lang['proposal_convert_to_invoice']            = 'Umwandeln zu Rechnung';
$lang['proposal_convert_to_lead_disabled_help'] = 'Sie müssen den Lead zuerst in einen Kunden umwandeln - %s';
$lang['proposal_convert_not_related_help']      = 'The proposal needs to be related to customer in order to convert to %s';
$lang['proposal_converted_to_estimate_success'] = 'Angebot erfolgreich zu einem Kostenvoranschlag umgewandelt';
$lang['proposal_converted_to_invoice_success']  = 'Angebot erfolgreich zu einer Rechnung umgewandelt';
$lang['proposal_converted_to_estimate_fail']    = 'Angebot nicht erfolgreich zu einem Kostenvoranschlag umgewandelt';
$lang['proposal_converted_to_invoice_fail']     = 'Angebot nicht erfolgreich zu einer Rechnung umgewandelt';

# Angebot - view proposal template
$lang['proposal_total_info']   = 'Total %s';
$lang['proposal_accept_info']  = 'Akzeptiert';
$lang['proposal_decline_info'] = 'Abgelehnt';
$lang['proposal_pdf_info']     = 'PDF';

# Customers Portal
$lang['customer_reset_action']            = 'Zurücksetzen';
$lang['customer_reset_password_heading']  = 'Setzen das Kennwort zurück';
$lang['customer_forgot_password']         = 'Passwort vergessen?';
$lang['customer_forgot_password']         = 'Passwort vergessen?';
$lang['customer_reset_password']          = 'Passworr';
$lang['customer_reset_password_repeat']   = 'Wiederhole Passwort';
$lang['customer_forgot_password_email']   = 'E-Mail Address';
$lang['customer_forgot_password_submit']  = 'Absenden';
$lang['customer_ticket_subject']          = 'Betreff';

# Email templates
$lang['email_template_proposals_fields_heading'] = 'Vorschlag';

# Tasks
$lang['add_task_attachments']                 = 'Anlage';
$lang['task_view_attachments']                = 'Anlagen';
$lang['task_view_description']                = 'Description';
$lang['task_table_is_finished_indicator']     = 'Ja';
$lang['task_table_is_not_finished_indicator'] = 'Nein';
$lang['tasks_dt_finished']                    = 'Abgeschlossen';

# Customer Groups
$lang['customer_group_add_heading']  = 'Add New Customer Group';
$lang['customer_group_edit_heading'] = 'Edit Customer Group';
$lang['new_customer_group']          = 'New Customer Group';
$lang['customer_group_name']         = 'Name';
$lang['customer_groups']             = 'Gruppe';
$lang['customer_group']              = 'Kunden Gruppe';
$lang['customer_group_lowercase']    = 'kunden gruppe';

$lang['customer_have_invoices_by']       = 'Contains invoices by status %s';
$lang['customer_have_estimates_by']      = 'Contains estimates by status %s';
$lang['customer_have_contracts_by_type'] = 'Having contracts by type %s';

# Custom fields
$lang['custom_field_show_on_table']              = 'Zeige auf Tabelle';
$lang['custom_field_show_on_client_portal']      = 'Zeige im Frontend';
$lang['custom_field_show_on_client_portal_help'] = 'If this field is checked also will be shown in tables';
$lang['custom_field_visibility']                 = 'Visibility';

# Utilities # Menu Builder
$lang['utilities_menu_translate_name_help'] = 'You can add here also translate strings. So if staff/system have language other then the default the menu item names will be outputed in the staff language. Otherwise if the string dont exists in the translate file will be taken the string you enter here.';
$lang['utilities_menu_icon']                = 'Icon';
$lang['active_menu_items']                  = 'Active Menu Items';
$lang['inactive_menu_items']                = 'Inactive Menu Items';
$lang['utilities_menu_permission']          = 'Permission';
$lang['utilities_menu_url']                 = 'URL';
$lang['utilities_menu_name']                = 'Name';
$lang['utilities_menu_save']                = 'Save Menu';

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
$lang['ticket_date_created']        = 'Date Created';

#KB
$lang['edit_kb_group']             = 'Edit group';
# Leads
$lang['edit_source']               = 'Edit Source';
$lang['edit_status']               = 'Edit Status';
# Contacts
$lang['contract_type_edit']        = 'Edit Contract Type';
# Reports
$lang['report_by_customer_groups'] = 'Total Value By Customer Groups';
#Utilities
$lang['ticket_pipe_log']           = 'Ticket Pipe Log';
$lang['ticket_pipe_name']          = 'From Name';
$lang['ticket_pipe_email_to']      = 'To';
$lang['ticket_pipe_email']         = 'From Email';
$lang['ticket_pipe_subject']       = 'Subject';
$lang['ticket_pipe_message']       = 'Message';
$lang['ticket_pipe_date']          = 'Date';
$lang['ticket_pipe_status']        = 'Status';

# Home
$lang['home_invoice_paid']          = 'Rechnungen Bezahlt';
$lang['home_invoice_partialy_paid'] = 'Rechnungen teilweise bezahlt';
$lang['home_estimate_declined']     = 'Kostenvoranschlag abgelehnt';
$lang['home_estimate_accepted']     = 'Kostenvoranschlag akzeptiert';
$lang['home_estimate_sent']         = 'Kostenvoranschlag versendet';
$lang['home_latest_activity']       = 'Letzte Augaben';
$lang['home_my_tasks']              = 'Meine Aufgaben';
$lang['home_latest_activity']       = 'Letzte Aufgaben';
$lang['home_my_todo_items']         = 'Meine ToDo´s';
$lang['home_widget_view_all']       = 'Zeige alles';
$lang['home_stats_full_report']     = 'Komplette Aufzeichung';

# Validation - Customer Portal

$lang['form_validation_required']    = 'Das {field} Feld ist ein Pfichfeld.';
$lang['form_validation_valid_email'] = 'Das {field} muss eine E-Mailadresse sein.';
$lang['form_validation_matches']     = 'Das {field} das Feld stimt nicht mit {param} überein.';
$lang['form_validation_is_unique']   = 'Das {field} muss ein eindeutiger Wert sein.';

# Version 1.0.8
# Notifications & Leads/Estimates/Invoices Activity Log
$lang['not_event'] = 'Aufgabe startet heute - %s ...';
$lang['not_event_public'] = 'Team Aufgabe startet heute - %s ...';
$lang['not_contract_expiry_reminder'] = 'Vertragsauslauf Erinnerung- %s ...';
$lang['not_recurring_expense_cron_activity_heading'] = 'Einmalaufwendungen Cron-Job Aktivität';
$lang['not_recurring_invoices_cron_activity_heading'] = 'Wiederholungsrechnungen Cron Auftragsaktivität';
$lang['not_recurring_total_renewed'] = 'Insgesamt erneuert: %s';
$lang['not_recurring_expenses_action_taken_from'] = 'Aktion aus wiederkehrenden Kosten übernommen';
$lang['not_invoice_created'] = 'Rechnung erstellt:';
$lang['not_invoice_renewed'] = 'Erneuere Rechnung:';
$lang['not_expense_renewed'] = 'Erneuere Betriebsausgaben:';
$lang['not_invoice_sent_to_customer'] = 'Rechnung an den Kunden gesendet: %s';
$lang['not_invoice_sent_yes'] = 'Ja';
$lang['not_invoice_sent_not'] = 'Nein';
$lang['not_action_taken_from_recurring_invoice'] = 'Aktion aus wiederkehrenden Rechnung genommen:';
$lang['not_new_reminder_for'] = 'Neue Erinnerung für %s';
$lang['not_received_one_or_more_messages_lead'] = 'Empfangen eine weitere E-Mail-Nachricht vom Interessenten';
$lang['not_received_lead_imported_email_integration'] = 'Interessenten Importiert aus E-Mail Migration';
$lang['not_lead_imported_attachment'] = 'Import Anhang von E-Mail';
$lang['not_estimate_status_change'] = 'Import Anhang von E-Mail';
$lang['not_estimate_status_updated'] = 'Kostenvoranschlag aktualisiert: Von: %s zu %s';
$lang['not_goal_achieved_heading'] = 'Juhu! Wir haben unser Ziel erreicht!';
$lang['not_goal_failed_heading'] = 'Leider haben wir unser Ziel verfehlt!';
$lang['not_goal_message'] = 'Ziel: %s
<br />Ziel: %s
<br />Umgesetzt: %s
<br />Start Datum: %s
<br />End Datum: %s';
$lang['not_assigned_lead_to_you'] = '%s zugewiesener Interessent %s für Sie';
$lang['not_lead_activity_assigned_to'] = '%s zugeiwesen an %s';
$lang['not_lead_activity_attachment_deleted'] = 'Lösche Anlage';
$lang['not_lead_activity_status_updated'] = '%s aktualisiere Interessenten Status %s zu %s';
$lang['not_lead_activity_contacted'] = '%s Interessent kontakiert %s';
$lang['not_lead_activity_created'] = '%s erstelle Interessent';
$lang['not_lead_activity_marked_lost'] = 'Markiere als verloren';
$lang['not_lead_activity_unmarked_lost'] = 'Entferne Markierung als verloren';
$lang['not_lead_activity_marked_junk'] = 'Markiere als Spam';
$lang['not_lead_activity_unmarked_junk'] = 'Entferne Markierung als Spam';
$lang['not_lead_activity_added_attachment'] = 'Anlage hinzufügen';
$lang['not_lead_activity_email_change'] = 'Lead email was not the same with client email when this lead is converted to client.';
$lang['not_lead_activity_converted_email'] = 'Lead email changed. First lead email was: %s and added as customer with email %s';
$lang['not_lead_activity_converted'] = '%s konvertiere diesen Interessenten zum Kunden';
$lang['not_liked_your_post'] = '%s gefällt dein Eintrag %s ...';
$lang['not_commented_your_post'] = '%s hat deinen Eintrag kommentiert %s ...';
$lang['not_liked_your_comment'] = '%s Gefällt dein Kommentar %s ...';
$lang['not_proposal_assigned_to_you'] = 'Vorschlag zuwiesen an - %s ...';
$lang['not_proposal_comment_from_client'] = 'Neuer Kommentar des Kunden zu Ihrem Kostenvoranschlag %s ...';
$lang['not_proposal_proposal_accepted'] = 'Vorschlag Akzeptiert';
$lang['not_proposal_proposal_declined'] = 'Vorschlag Abgelehnt';
$lang['not_task_added_you_as_follower'] = 'hat sie als Follower zu einer Aufgabe hinzugefgt - %s ...';
$lang['not_task_added_someone_as_follower'] = '%s als Follower zur Aufgabe %s hinzugefügt ...';
$lang['not_task_added_himself_as_follower'] = 'Hat sich als Follower zur Aufgabe %s hinzugefügt...';
$lang['not_task_assigned_to_you'] = 'hat sie zu einer Aufgabe %s hinzugefügt ...';
$lang['not_task_assigned_someone'] = 'füge %s zu Aufgabe %s ...';
$lang['not_task_will_do_user'] = 'erledigt Aufgabe %s ...';
$lang['not_task_new_attachment'] = 'Neue Anlage hinzugefügt';
$lang['not_task_marked_as_complete'] = 'markiere Aufgabe als erledigt %s';
$lang['not_task_unmarked_as_complete'] = 'entferne markierung als Erledigt von dieser Aufgabe %s';
$lang['not_ticket_assigned_to_you'] = 'Ticket Ihnen zugewiesenen - %s ...';
$lang['not_ticket_reassigned_to_you'] = 'Ticket Ihnen entwiesenen- %s ...';
$lang['not_estimate_customer_accepted'] = 'Glückwunsch! Der Kunde hat den Kostenvoranschlag %s akzeptiert!';
$lang['not_estimate_customer_declined'] = 'Der Kunde hat den Kostenvoranschlag %s abgelehnt.';
$lang['estimate_activity_converted'] = 'wandel diesen kostenvoranschlag zu einer Rechnung um.<br /> %s';
$lang['estimate_activity_created'] = 'Erstelle den Kostenvoranschlag';
$lang['invoice_estimate_activity_removed_item'] = 'Entferne Eintrag <b>%s</b>';
$lang['estimate_activity_number_changed'] = 'Kostenvoranschlag Nummer gewechselt von %s zu %s';
$lang['invoice_activity_number_changed'] = 'Rechnungsnummer gewechselt von  %s zu %s';
$lang['invoice_estimate_activity_updated_item_short_description'] = 'Aktualisierte die Kurzbschreibung von %s zu %s';
$lang['invoice_estimate_activity_updated_item_long_description'] = 'Aktualisierte die lange Beschreibung von  <b>%s</b> zu <b>%s</b>';
$lang['invoice_estimate_activity_updated_item_rate'] = 'Aktualisierte Preis von  %s zu %s';
$lang['invoice_estimate_activity_updated_qty_item'] = 'Aktualisierte Anzahl <b>%s</b> von %s zu %s';
$lang['invoice_estimate_activity_added_item'] = 'Neue Position eingefügt <b>%s</b>';
$lang['estimate_activity_client_accepted_and_converted'] = 'Kunde hat den Kostenvoranschlag angenommen. Es wurde die Rechnung %s erstellt.';
$lang['estimate_activity_client_accepted'] = 'Kunde hat diesen Kostenvoranschlag angenommen';
$lang['estimate_activity_client_declined'] = 'Kunde hat diesen Kostenvoranschlag nicht angenommen';
$lang['estimate_activity_marked'] = 'markiere den Kostenvoranschlag als %s';
$lang['invoice_activity_status_updated'] = 'Rechnung akuslaiisert von %s zu %s';
$lang['invoice_activity_created'] = 'Erstellte neue Rechnung';
$lang['invoice_activity_from_expense'] = 'Konvertierte kostenvoranschlag zu Rechnung';
$lang['invoice_activity_recuring_created'] = '[Wiederkehrend] Rechnung erstellt von CRON';
$lang['invoice_activity_recuring_from_expense_created'] = '[Rechnugn von Kostenvoranschlag] Rechnung erstellt von CRON';
$lang['invoice_activity_sent_to_client_cron'] = 'Rechnung an den Kunden gesendet von CRON';
$lang['invoice_activity_sent_to_client'] = 'sendete Rechnung an Kunden';
$lang['invoice_activity_marked_as_sent'] = 'markierte Rechnung als versendet';
$lang['invoice_activity_payment_deleted'] = 'löschte Zahlung von Rechnung. Zahlung #%s, Total: %s';
$lang['invoice_activity_payment_made_by_client'] = 'Kunde machte eine Zahlung über <b>%s</b> - %s';
$lang['invoice_activity_payment_made_by_staff'] = 'Aufgezeichnet Zahlung von insgesamt <b>%s</b> - %s';
$lang['invoice_activity_added_attachment'] = 'Anlage anfügen';

# Navigation
$lang['top_search_placeholder'] = 'Suchen...';

# Staff
$lang['staff_profile_inactive_account'] = 'Dieses Mitarbeiterkonto ist deaktiviert';

# Estimates
$lang['copy_estimate'] = 'Kopiere Angebot';
$lang['estimate_copied_successfuly'] = 'Angebot erfolgreich kopiert';
$lang['estimate_copied_fail'] = 'Fehler beim Kopieren des Angebotes';

# Tasks
$lang['tasks_view_assigned_to_user'] = 'Aufgabe ist mir zugeordnet';
$lang['tasks_view_follower_by_user'] = 'Aufgaben den ich folge';
$lang['no_tasks_found'] = 'Keine Aufgaben / WVL gefunden';

# Leads
$lang['leads_dt_datecreated'] = 'Ersterllt';
$lang['leads_sort_by'] = 'Sortieren nach';
$lang['leads_sort_by_datecreated'] = 'Erstellt am';
$lang['leads_sort_by_kanban_order'] = 'Kan Ban Sortierung';

# Angebot
$lang['proposal_items_name'] = 'Artikel';
$lang['proposal_items_description'] = 'Beschreibung';
$lang['proposal_items_qty'] = 'Anz.';
$lang['proposal_items_rate'] = 'Preis';
$lang['proposal_items_tax'] = 'Steuer';
$lang['proposal_items_amount'] = 'Gesamt';

# Authentication
$lang['check_email_for_reseting_password'] = 'Check your email for further instructions resetting your password';
$lang['inactive_account'] = 'Inactive Account';
$lang['error_setting_new_password_key'] = 'Error setting new password';
$lang['password_reset_message'] = 'Your password has been reset. Please login now!';
$lang['password_reset_message_fail'] = 'Error resetting your password. Try again.';
$lang['password_reset_key_expired'] = 'Password key expired or invalid user';
$lang['admin_auth_reset_pass_repeat'] = 'Passwort wiederholen';
$lang['auth_reset_pass_email_not_found'] = 'Email nicht gefunden';
$lang['auth_reset_password_submit'] = 'Passwort zurücksetzen';

# Settings
$lang['settings_amount_to_words'] = 'Amount to words';
$lang['settings_amount_to_words_desc'] = 'Output total amount to words in invoice/estimate';
$lang['settings_amount_to_words_enabled'] = 'Aktivieren';
$lang['settings_total_to_words_lowercase'] = 'number words into lowercase';
$lang['settings_show_tax_per_item'] = 'Show TAX per item (Invoices/Estimates)';

# Reports
$lang['report_sales_months_three_months'] = 'letzten 3 Monate';
$lang['report_invoice_number'] = 'Rechnung #';
$lang['report_invoice_customer'] = 'Kunde';
$lang['report_invoice_date'] = 'Datum';
$lang['report_invoice_duedate'] = 'Fällig am';
$lang['report_invoice_amount'] = 'Betrag';
$lang['report_invoice_amount_with_tax'] = 'Betrag mit Steuern';
$lang['report_invoice_amount_open'] = 'Betrag offen';
$lang['report_invoice_status'] = 'Status';
$lang['report_invoice_total_amount_with_tax'] = 'Total mit Mwst.';
$lang['report_invoice_total_amount_without_tax'] = 'Total Netto';
$lang['report_invoice_total_taxes'] = 'Steuern';

#Version 1.0.9

# Home stats
$lang['home_stats_see_weekly_payments'] = 'Zeige aktuelle Zahlungen';
$lang['home_stats_by_project_status'] = 'Statistics by project status';
$lang['home_invoice_overview'] = 'Rechnungs Überblick';
$lang['home_estimate_overview'] = 'Kostenvoranschlag Überblick';
$lang['home_proposal_overview'] = 'Angebote Überblick';
$lang['home_lead_overview'] = 'Lead overview';
$lang['home_my_projects'] = 'Meine Projekte';
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

$lang['dt_entries'] = ' Einträge/n';
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
$lang['ticket_message_updated_successfuly'] = 'Nachricht erfolgreich aktualisiert';

# Invoices
$lang['invoice_task_item_project_tasks_not_included'] = 'Projects tasks are not included in this list.';
$lang['show_quantity_as'] = 'Show quantity as:';
$lang['quantity_as_qty'] = 'Anzahl';
$lang['quantity_as_hours'] = 'Stunden';
$lang['invoice_table_hours_heading'] = 'Stunden';
$lang['bill_tasks'] = 'Bezahlte Augabe';
$lang['invoice_estimate_sent_to_email'] = 'E-Mail';

# Estimates
$lang['estimate_table_hours_heading'] = 'Stunden';

# General
$lang['is_customer_indicator'] = 'Kunde';
$lang['print']            = 'Drucken';
$lang['customer_permission_projects']            = 'Projekte';
$lang['no_timers_found']            = 'Kein aktive Zeitaufzeichnung';
$lang['timers_started_confirm_logout']            = 'Tasks timers found started!<br /><br />Are you sure you want to logout without stoping the timers?';
$lang['confirm_logout']            = 'Abmelden';
$lang['timer_top_started']            = 'Gestartet um %s';

# Projects
$lang['cant_change_billing_type_billed_tasks_found'] = 'You cant change billing type. Billed tasks already found for this project.';
$lang['project_customer_permission_warning'] = 'The system indicated that the customer dont have permission for projects. The customer wont be able to see the project. Consider add permission in the customer profile tab Permissions.';
$lang['project_invoice_timesheet_start_time'] = 'Start time: %s';
$lang['project_invoice_timesheet_end_time'] = 'End time: %s';
$lang['project_invoice_timesheet_total_logged_time'] = 'Logged time: %s';
$lang['project_view_as_client'] = 'Zeige Projekt als Kunde';
$lang['project_mark_all_tasks_as_completed'] = 'Mark all tasks as completed and stop all timers (No notifications sent to project members)';
$lang['project_not_started_status_tasks_timers_found'] = 'Task timers found for this project but the project is with status Not Started. Recomended to change the project status to In Progress';
$lang['project_status'] = 'Status';
$lang['project_status_1'] = 'Not Started';
$lang['project_status_2'] = 'In Progress';
$lang['project_status_3'] = 'On Hold';
$lang['project_status_4'] = 'Finished';

$lang['project_file_uploaded_by_customer'] = 'Kunden';
$lang['project_file_dateadded'] = 'Date uploaded';
$lang['project_file_filename'] = 'Dateinamen';
$lang['project_file__filetype'] = 'Dateityp';
$lang['project_file_visible_to_customer'] = 'Anzeige für den Kunden';
$lang['project_file_uploaded_by'] = 'Hochgeladen von';
$lang['edit_project'] = 'Bearbeite Projekt';
$lang['copy_project'] = 'Kopiere Projekt';
$lang['delete_project'] = 'Lösche Projekte';
$lang['project_task_assigned_to_user'] = 'Aufgaben die mir zugeordnet wurden';
$lang['seconds'] = 'Sekunden';
$lang['hours'] = 'Stunden';
$lang['minutes'] = 'Minuten';
$lang['project']                 = 'Projekt';
$lang['project_lowercase']       = 'projekt';
$lang['projects']                = 'Projekte';
$lang['projects_lowercase']      = 'projekte';
$lang['project_settings']      = 'Projekt Einstellungen';
$lang['project_invoiced_successfuly']             = 'Projektrechnung erfolgreich gestellt';
$lang['new_project']             = 'Neues Projekt';
$lang['project_files']            = 'Dateien';
$lang['project_activity']            = 'Activity';
$lang['project_name']            = 'Projekt Name';
$lang['project_description']            = 'Projekt Beschreibung';
$lang['project_customer']            = 'Kunden';
$lang['project_start_date']            = 'Start Datum';
$lang['project_datecreated']            = 'Erstellt am';
$lang['project_deadline']            = 'Deadline';
$lang['project_billing_type']            = 'Zahlungsart';
$lang['project_billing_type_fixed_cost']            = 'Pauschal';
$lang['project_billing_type_project_hours']            = 'Stundenaufzeichung';
$lang['project_billing_type_project_task_hours']            = 'Aufgaben Aufzeichnung';
$lang['project_billing_type_project_task_hours_hourly_rate']            = 'Basierend auf Aufgabe Stundensatz';
$lang['project_rate_per_hour']            = 'Stundensatz';
$lang['project_total_cost']            = 'Kostengesamt';
$lang['project_members']            = 'Projekt Mitglieder';
$lang['project_member_removed']     = 'Projekt Mitglieder erfolgreich gelöscht';
$lang['project_overview']           = 'Projekt Überblick';
$lang['project_gant']            = 'Tabellen Übersicht';
$lang['project_milestones']            = 'Meilensteine';
$lang['project_milestone_order']            = 'Auftrag';
$lang['project_milestone_duedate_passed']            = 'Duedate passed';
$lang['record_timesheet']            = 'Zeiterfassung';
$lang['new_milestone']            = 'Neuer Meilenstein';
$lang['edit_milestone']            = 'Bearbeite Meilenstein';
$lang['milestone_name']            = 'Name';
$lang['milestone_due_date']            = 'Fällig bis';
$lang['project_milestone']            = 'Meilenstein';
$lang['project_notes']            = 'Notes';
$lang['project_timesheets']            = 'Zeiterfassungen';
$lang['project_timesheet']            = 'Zeiterfassung';
$lang['milestone_total_logged_time']            = 'Logged Time';
$lang['project_overview_total_logged_hours']            = 'Total Logged Hours';
$lang['milestones_uncategorized']            = 'Uncategorized';
$lang['milestone_no_tasks_found']            = 'No tasks found';
$lang['copy_project_discussions_not_included']            = 'Attachments and comments are not included';
$lang['project_copied_successfuly']            = 'Project data copied successfuly';
$lang['failed_to_copy_project']            = 'Failed to copy project';
$lang['copy_project_task_include_check_list_items']            = 'Copy checklist items';
$lang['copy_project_task_include_assignees']            = 'Copy the same assignees';
$lang['copy_project_task_include_followers']            = 'Copy the same followers';

$lang['project_days_left']            = 'Tage übrig';
$lang['project_open_tasks']            = 'offene Aufgaben';
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
$lang['project_activity_created'] = 'Erstelle ein Projekt';
$lang['project_activity_updated'] = 'Updatede ein Projekt';
$lang['project_activity_removed_team_member'] = 'lösche Teammitglied';
$lang['project_activity_added_team_member'] = 'hinzufügen eines Teammitglied';
$lang['project_activity_marked_all_tasks_as_complete'] = 'Markiere alle Aufgaben als erledigt';
$lang['project_activity_recorded_timesheet'] = 'Recorded timesheet';
$lang['project_activity_task_name'] = 'Aufaben:';
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

# Notifications
$lang['not_customer_uploaded_project_file'] = 'New file uploaded';
$lang['not_customer_created_new_project_discussion'] = 'New project discussion created';
$lang['not_customer_commented_on_project_discussion'] = 'New comment on project discussion';

# Customers area
$lang['clients_my_estimates'] = 'Meine Kostenvoranschläge';
$lang['client_no_reply'] = 'Keine Antwort';
$lang['clients_nav_projects'] = 'Projekte';
$lang['clients_my_projects'] = 'Meine Projekte';
$lang['client_profile_image'] = 'Profil Bild';

/////
$lang['sales_report_cancelled_invoices_not_included'] = 'Cancelled invoices are excluded from the report';
$lang['invoices_merge_cancel_merged_invoices'] = 'Mark merged invoices as cancelled instead of deleting';
$lang['invoice_marked_as_cancelled_successfuly'] = 'Invoice marked as cancelled successfully';
$lang['invoice_unmarked_as_cancelled'] = 'Invoice unmarked as cancelled successfully';

$lang['tasks_reminder_notification_before'] = 'Task deadline reminder before (Days)';
$lang['not_task_deadline_reminder'] = 'Task deadline reminder';
$lang['dt_length_menu_all'] = 'Alle';
$lang['task_not_finished'] = 'Nicht abgeschlossen';
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
$lang['invoice_total_tax'] = 'Total Steuer';
$lang['estimates_total_tax'] = 'Total Steuer';
$lang['report_invoice_total_tax'] = 'Total Steuer';
$lang['home_tickets'] = 'Tickets';
$lang['home_project_activity'] = 'letzte Projektaktivitäten';
$lang['home_project_activity_not_found'] = 'Keine Projektaktivitäten gefunden';
$lang['view_tracking'] = 'Zeige Tracking';
$lang['view_date'] = 'Datum';
$lang['view_ip'] = 'IP Addresse';
$lang['article_total_views'] = 'Total Views';
$lang['leads_source'] = 'Source';
$lang['invoices_available_for_merging'] = 'Invoices available for merging';
$lang['invoices_merge_discount'] = 'You will have to apply discount of total %s manualy to this invoice';
$lang['invoice_merge_number_warning'] = 'Merging invoices will create gaps in invoice numbers. Please do not merge invoices if you want no gaps in your invoice history. You also have the option of manually adjusting invoice numbers if you want to fill the gaps.';
$lang['invoice_mark_as'] = 'Mark as %s';
$lang['invoice_unmark_as'] = 'Unmark as %s';
$lang['invoice_status_cancelled'] = 'Abgebrochen';
$lang['tasks_reminder_notification_before_help'] = 'Notify task assignees about deadline before X days. The notification/email is sent only to the assignees.';
/* STOP TRANSLATING */
# Version 1.1.0
$lang['project_invoice_select_all_tasks'] = 'Select all tasks';
$lang['lead_company'] = 'Unternehmen';

# Version 1.1.1
$lang['admin_auth_forgot_password_button'] = 'Bestätigen';
$lang['task_assigned'] = 'Zugewiesen an';
$lang['switch_to_pipeline'] = 'Wechsel zu Pipline';
$lang['switch_to_list_view'] = 'Wechsel zu Liste';
$lang['estimates_pipeline'] = 'Kostenvoranschlag Pipeline';
$lang['estimates_pipeline_sort'] = 'Sorieren nach';
$lang['estimates_sort_expiry_date'] = 'Gültig bis Datum';
$lang['estimates_sort_pipeline'] = 'Pipeline Order';
$lang['estimates_sort_datecreated'] = 'Erstellt am';
$lang['estimates_sort_estimate_date'] = 'Kostenvoranschlag Datum';
$lang['estimate_set_reminder_title'] = 'Setze Kostenvoranschlag Erinnerung';
$lang['invoice_set_reminder_title'] = 'Setze Rechnung Erinnerung';
$lang['estimate_reminders'] = 'Erinnerungen';
$lang['invoice_reminders'] = 'Erinnerungen';
$lang['estimate_notes'] = 'Notizen';
$lang['estimate_add_note'] = 'Notiz hinzufügen';
$lang['dropdown_non_selected_tex'] = 'Nichts ausgewählt...';
$lang['auto_close_ticket_after'] = 'Ticket nach X Stunden schließen';
$lang['event_description'] = 'Beschreibung';
$lang['delete_event'] = 'Löschen';
$lang['not_new_ticket_created'] = 'Ein neues Ticket in der Abteilung eöffnet - %s';
$lang['receive_notification_on_new_ticket'] = 'Receive notification on new ticket opened';
$lang['receive_notification_on_new_ticket_help'] = 'All staff members which belong to the ticket department will receive notification that new ticket is opened';
$lang['event_updated'] = 'Ereignis erfolgreich aktualisiert!';
$lang['customer_contacts'] = 'Kontakte';
$lang['new_contact'] = 'Neuer Kontakt';
$lang['contact'] = 'Kontakt';
$lang['contact_lowercase'] = 'kontakt';
$lang['contact_primary'] = 'Haupt Ansprechpartner';
$lang['contact_position'] = 'Position';
$lang['contact_active'] = 'Aktiv';
$lang['client_company_info'] = 'Firmen Details';
$lang['proposal_save'] = 'Speichere Angebot';
$lang['calendar'] = 'Kalender';
$lang['settings_pdf'] = 'PDF';
$lang['settings_pdf_font'] = 'PDF Schriftart';
$lang['settings_pdf_table_heading_color'] = 'Items table heading color';
$lang['settings_pdf_table_heading_text_color'] = 'Items table heading text color';
$lang['settings_pdf_font_size'] = 'Default font size';
$lang['proposal_status_draft'] = 'Entwurf';
$lang['custom_field_contacts'] = 'Verträge';
$lang['company_primary_email'] = 'Standard E-Mail';
$lang['client_register_contact_info'] = 'Standard Kontakt Information';
$lang['client_register_company_info'] = 'Firmen Informationen';
$lang['contact_permissions_info'] = 'Achten Sie darauf, die entsprechenden Berechtigungen für diesen Kontakt zu setzen';
$lang['defaut_leads_kanban_sort'] = 'Strandard Leads Kan Ban Sortierung';
$lang['defaut_leads_kanban_sort_type'] = 'Sortieren';
$lang['order_ascending'] = 'Aufsteigend';
$lang['order_descending'] = 'Absteigend';
$lang['calendar_expand'] = 'erweitern';
$lang['proposal_reminders'] = 'Erinnerung';
$lang['proposal_set_reminder_title'] = 'Setzte zu diesem Vorschlag eine Erinnerung';
$lang['settings_allowed_upload_file_types'] = 'Erlaubte Dateitypen';
$lang['no_primary_contact'] = 'Dieser Kunde hat keinen Hauptansprechpartner. You need to setup primary contact login as customer. Its recomended all customers to have primary contacts.';
$lang['leads_merge_customer'] = 'Benutzerdefinierte Felder verbinden';
$lang['leads_merge_contact'] = 'Kontakt Felder verbinden';
$lang['leads_merge_as_contact_field'] = 'Merge as contact field';
$lang['lead_convert_to_client_phone'] = 'Telefon';
$lang['invoice_status_report_all'] = 'Alle';
$lang['import_contact_field'] = 'Kontakt Feld';
$lang['proposal_mark_as_draft'] = 'Markiere als Entwurf';

$lang['file_uploaded_success'] = 'There is no error, the file uploaded with success';
$lang['file_exceds_max_filesize'] = 'The uploaded file exceeds the upload_max_filesize directive in php.ini';
$lang['file_exceds_maxfile_size_in_form'] = 'The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form';
$lang['file_uploaded_partially'] = 'The uploaded file was only partially uploaded';
$lang['file_not_uploaded'] = 'No file was uploaded';
$lang['file_missing_temporary_folder'] = 'Missing a temporary folder';
$lang['file_failed_to_write_to_disk'] = 'Failed to write file to disk.';
$lang['file_php_extension_blocked'] = 'A PHP extension stopped the file upload.';
$lang['calendar_expand'] = 'Erweitern';
$lang['view_pdf'] = 'Zeige PDF';
$lang['expense_repeat_every'] = 'Wiederhole alle';

# Version 1.1.2
$lang['leads_switch_to_kanban'] = 'Wechseln zu Kan Ban';
$lang['survey_no_questions'] = 'Dieser Umfrage wurden bisher keine Fragen zugefügt.';
$lang['survey_submit'] = 'Senden';
$lang['contract_content'] = 'Vertrag';
$lang['contract_save'] = 'Vertrag speichern';
$lang['contract_send_to_email'] = 'Sende an E-Mail';
$lang['contract_send_to_client_modal_heading'] = 'SEnde Vertrag an E-Mail';
$lang['contract_send_to'] = 'Senden an';
$lang['contract_send_to_client_attach_pdf'] = 'PDF anhängen';
$lang['contract_send_to_client_preview_template'] = 'Vorschau Email Template';
$lang['include_attachments_to_email'] = 'Alagen der E-Mail hinzufügen';
$lang['contract_sent_to_client_success'] = 'Der Vertrag wurde erfolgreich an den Kunden versandt ';
$lang['contract_sent_to_client_fail'] = 'Senden des Vertrages fehlgeschlagen';

# Version 1.1.3
$lang['client_invalid_username_or_password'] = 'Ungültiger Nutzername oder Passwort';
$lang['client_old_password_incorect']     = 'Ihr altes Passwort ist nicht korrekt';
$lang['client_password_changed']          = 'Ihr Passwort wurde geändert';
$lang['check_for_new_version']          = 'Überprüfe auf neue Version';

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
$lang['dt_mass_delete_help'] = 'Use the checkboxes on the right side for mass delete.';
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
$lang['recaptcha_help_settings']= 'If fields are not filled or there is no internet connection, reCAPTCHA will not be used.';
$lang['project_overview_expenses'] = 'Total Expenses';
$lang['project_overview_expenses_billable'] = 'Billable Expenses';
$lang['project_overview_expenses_billed'] = 'Billed Expenses';
$lang['project_overview_expenses_unbilled'] = 'Unbilled Expenses';
$lang['announcement_date_list'] = 'Date';
$lang['project_setting_view_finance_overview'] = 'view finance overview';
$lang['show_all_tasks_for_project_member'] = 'Allow all staff to see all tasks related to projects (includes non-staff)';
$lang['user_note'] = 'User note';
$lang['not_staff_added_as_project_member'] = 'Added you as project member';
$lang['report_expenses_base_currency_select_explanation'] = 'You need to select currency becuase the system found different currencies used for expenses.';
