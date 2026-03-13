<?php

# Version 1.0.0
#
# General
$lang['id']                                       = 'ID';
$lang['name']                                     = 'Nimi';
$lang['options']                                  = 'Asetukset';
$lang['submit']                                   = 'Tallenna';
$lang['added_successfully']                       = '%s lisättiin onnistuneesti.';
$lang['updated_successfully']                     = '%s päivitettiin onnistuneesti.';
$lang['edit']                                     = 'Muokkaa %s';
$lang['add_new']                                  = 'Lisää uusi %s';
$lang['deleted']                                  = '%s poistettu';
$lang['problem_deleting']                         = 'Ongelmia poistaessa %s';
$lang['is_referenced']                            = '%s:n ID on jo käytössä.';
$lang['close']                                    = 'Sulje';
$lang['send']                                     = 'Lähetä';
$lang['cancel']                                   = 'Peruuta';
$lang['go_back']                                  = 'Mene takaisin';
$lang['error_uploading_file']                     = 'Virhe lähetettäessä tiedostoa';
$lang['load_more']                                = 'Lataa lisää';
$lang['cant_delete_default']                      = 'Ei voida poistaa oletusta %s';

# Invoice General
$lang['invoice_status_paid']                      = 'Maksettu';
$lang['invoice_status_unpaid']                    = 'Maksamaton';
$lang['invoice_status_overdue']                   = 'Myöhässä';
$lang['invoice_status_not_paid_completely']       = 'Osittain maksettu';
$lang['invoice_pdf_heading']                      = 'LASKU';
$lang['invoice_table_item_heading']               = 'Tuote';
$lang['invoice_table_quantity_heading']           = 'Määrä';
$lang['invoice_table_rate_heading']               = 'Hinta';
$lang['invoice_table_tax_heading']                = 'Vero';
$lang['invoice_table_amount_heading']             = 'Määrä';
$lang['invoice_subtotal']                         = 'Yhteensä';
$lang['invoice_adjustment']                       = 'Säätö';
$lang['invoice_total']                            = 'Yhteensä';
$lang['invoice_bill_to']                          = 'Laskutetaan';
$lang['invoice_data_date']                        = 'Laskun päivämäärä:';
$lang['invoice_data_duedate']                     = 'Laskun eräpäivä:';
$lang['invoice_received_payments']                = 'Tapahtumat';
$lang['invoice_no_payments_found']                = 'Tälle laskulle ei löytynyt maksuja';
$lang['invoice_note']                             = 'Merkintä:';
$lang['invoice_payments_table_number_heading']    = 'Maksu #';
$lang['invoice_payments_table_mode_heading']      = 'Maksutapa';
$lang['invoice_payments_table_date_heading']      = 'Päivä';
$lang['invoice_payments_table_amount_heading']    = 'Summa';

# Announcements
$lang['announcement']                             = 'Ilmoitus';
$lang['announcement_lowercase']                   = 'ilmoitus';
$lang['announcements']                            = 'Ilmoitukset';
$lang['announcements_lowercase']                  = 'ilmoitukset';
$lang['new_announcement']                         = 'Luo uusi ilmoitus';
$lang['announcement_name']                        = 'Aihe';
$lang['announcement_message']                     = 'Viesti';
$lang['announcement_show_to_staff']               = 'Näytä Ylläpidolle';
$lang['announcement_show_to_clients']             = 'Näytä Asiakkaille';
$lang['announcement_show_my_name']                = 'Näytä nimeni';

# Clients
$lang['clients']                                  = 'Asiakkaat';
$lang['client']                                   = 'Asiakas';
$lang['new_client']                               = 'Luo uusi asiakas';
$lang['client_lowercase']                         = 'asiakas';
$lang['client_firstname']                         = 'Etunimi';
$lang['client_lastname']                          = 'Sukunimi';
$lang['client_email']                             = 'Sähköposti';
$lang['client_company']                           = 'Yritys tai Yhdistys';
$lang['client_vat_number']                        = 'ALV-numero';
$lang['client_address']                           = 'Osoite';
$lang['client_city']                              = 'Kaupunki';
$lang['client_postal_code']                       = 'Postinumero';
$lang['client_state']                             = 'Osavaltio';
$lang['client_password']                          = 'Salasana';
$lang['client_password_change_populate_note']     = 'Huomaa: Jos täytät tämän kentän, salasana vaihdetaan tämän yhteystiedon yhteydessä.';
$lang['client_password_last_changed']             = 'Salasana vaihdettiin viimeksi:';
$lang['login_as_client']                          = 'Kirjaudu asiakkaana';
$lang['client_invoices_tab']                      = 'Laskut';
$lang['contracts_invoices_tab']                   = 'Sopimukset';
$lang['contracts_tickets_tab']                    = 'Tiketit';
$lang['contracts_notes_tab']                      = 'Huomautukset';
$lang['note_description']                         = 'Huomautuksen kuvaus';
$lang['client_do_not_send_welcome_email']         = 'Älä lähetä tervetulosähköpostia';
$lang['clients_notes_table_description_heading']  = 'Kuvaus';
$lang['clients_notes_table_addedfrom_heading']    = 'Lisääjä';
$lang['clients_notes_table_dateadded_heading']    = 'Lisäyspäivämäärä';
$lang['clients_list_full_name']                   = 'Koko nimi';
$lang['clients_list_last_login']                  = 'Viimeinen kirjautuminen';

# Contracts
$lang['contracts']                                = 'Sopimukset';
$lang['contract']                                 = 'Sopimus';
$lang['new_contract']                             = 'Luo uusi Sopimus';
$lang['contract_lowercase']                       = 'sopimus';
$lang['contract_start_date']                      = 'Aloituspäivä';
$lang['contract_end_date']                        = 'Päättymispäivä';
$lang['contract_subject']                         = 'Aihe';
$lang['contract_description']                     = 'Kuvaus';
$lang['contract_subject_tooltip']                 = 'Aihe näkyy myös asiakkaalle';
$lang['contract_client_string']                   = 'Asiakas';
$lang['contract_attach']                          = 'Liitä dokumentti';
$lang['contract_list_client']                     = 'Asiakas';
$lang['contract_list_subject']                    = 'Aihe';
$lang['contract_list_start_date']                 = 'Aloituspäivä';
$lang['contract_list_end_date']                   = 'Päättymispäivä';

# Currencies
$lang['currencies']                               = 'Valuutat';
$lang['currency']                                 = 'Valuutta';
$lang['new_currency']                             = 'Uusi valuutta';
$lang['currency_lowercase']                       = 'valuutta';
$lang['base_currency_set']                        = 'Tämä on nyt oletusvaluuttasi.';
$lang['make_base_currency']                       = 'Tee oletusvaluutaksi';
$lang['base_currency_string']                     = 'Oletusvaluutta';
$lang['currency_list_name']                       = 'Nimi';
$lang['currency_list_symbol']                     = 'Symboli';
$lang['currency_add_edit_description']            = 'Valuutan koodi';
$lang['currency_add_edit_rate']                   = 'Kurssi';
$lang['currency_edit_heading']                    = 'Muokkaa valuuttaa';
$lang['currency_add_heading']                     = 'Lisää uusi valuutta';

# Department
$lang['departments']                              = 'Osastot';
$lang['department']                               = 'osasto';
$lang['new_department']                           = 'Luo uusi osasto';
$lang['department_lowercase']                     = 'osasto';
$lang['department_name']                          = 'Osaston nimi';
$lang['department_email']                         = 'Osaston sähköposti';
$lang['department_hide_from_client']              = 'Piilota asiakkaalta?';
$lang['department_list_name']                     = 'Nimi';

# Email Templates
$lang['email_templates']                          = 'Sähköpostimallit';
$lang['email_template']                           = 'Sähköpostimalli';
$lang['email_template_lowercase']                 = 'sähköpostimalli';
$lang['email_templates_lowercase']                = 'sähköpostimallit';
$lang['email_template_ticket_fields_heading']     = 'Tiketit';
$lang['email_template_invoices_fields_heading']   = 'Laskut';
$lang['email_template_clients_fields_heading']    = 'Asiakkaat';

$lang['template_name']                            = 'Mallin nimi';
$lang['template_subject']                         = 'Aihe';
$lang['template_fromname']                        = 'Lähettäjän nimi';
$lang['template_fromemail']                       = 'Lähettäjän sähköposti';
$lang['send_as_plain_text']                       = 'Lähetä selkeänä tekstinä';
$lang['email_template_disabled']                  = 'Poistettu käytöstä';
$lang['email_template_email_message']             = 'Sähköpostiviesti';
$lang['available_merge_fields']                   = 'Käytettävissä olevat yhdistämiskentät';
# Home
$lang['dashboard_string']                         = 'Ohjausnäkymä';
$lang['home_latest_todos']                        = 'Viimeisimmät tehtävät';
$lang['home_no_latest_todos']                     = 'Tehtäviä ei löytynyt';
$lang['home_latest_finished_todos']               = 'Viimeksi valmistuneet tehtävät';
$lang['home_no_finished_todos_found']             = 'Valmiita tehtäviä ei löytynyt';
$lang['home_tickets_awaiting_reply_by_department'] = 'Tiketit, jotka odottavat osaston vastausta';
$lang['home_tickets_awaiting_reply_by_status']    = 'Tiketit, jotka odottavat vastausta tilan mukaan';
$lang['home_this_week_events']                    = 'Tämän viikon tapahtumat';
$lang['home_upcoming_events_next_week']           = 'Tulevat tapahtumat ensi viikolla';
$lang['home_event_added_by']                      = 'Tapahtuman lisääjä';
$lang['home_public_event']                        = 'Julkinen tapahtuma';
$lang['home_weekly_payment_records']              = 'Viikkomaksutiedot';
$lang['home_weekend_ticket_opening_statistics']   = 'Viikonlopun palvelupyyntöjen avaustilastot';
# Newsfeed
$lang['whats_on_your_mind']                       = 'Jaa dokumentteja tai ideoita..';
$lang['new_post']                                 = 'Luo uusi viesti';
$lang['newsfeed_upload_tooltip']                  = 'Vihje: Vedä ja pudota tiedostot ladataksesi';
$lang['newsfeed_all_departments']                 = 'Kaikki Osastot';
$lang['newsfeed_pin_post']                        = 'Kiinnitä viesti';
$lang['newsfeed_unpin_post']                      = 'Irrota viesti';
$lang['newsfeed_delete_post']                     = 'Poista';
$lang['newsfeed_published_post']                  = 'Julkaistu';
$lang['newsfeed_you_like_this']                   = 'Sinä tykkäät tästä';
$lang['newsfeed_like_this']                       = 'tykkää tästä';
$lang['newsfeed_one_other']                       = 'muu';
$lang['newsfeed_you']                             = 'Sinä';
$lang['newsfeed_and']                             = 'ja';
$lang['newsfeed_you_and']                         = 'Sinä ja';
$lang['newsfeed_like_this_saying']                = 'Tykkää tästä';
$lang['newsfeed_unlike_this_saying']              = 'Poista tykkäys';
$lang['newsfeed_show_more_comments']              = 'Näytä lisää kommentteja';
$lang['comment_this_post_placeholder']            = 'Kommentoi tätä viestiä..';
$lang['newsfeed_post_likes_modal_heading']        = 'Kollegat, jotka pitävät tästä viestistä';
$lang['newsfeed_comment_likes_modal_heading']     = 'Kollegat, jotka pitävät tästä kommentista';
$lang['newsfeed_newsfeed_post_only_visible_to_departments'] = 'Tämä viesti on näkyvissä vain seuraaville osastoille: %s';

# Invoice Items
$lang['invoice_items']                            = 'Laskuerät';
$lang['invoice_item']                             = 'Laskuerä';
$lang['new_invoice_item']                         = 'Uusi tuote';
$lang['invoice_item_lowercase']                   = 'laskuerä';
$lang['invoice_items_list_description']           = 'Kuvaus';
$lang['invoice_items_list_rate']                  = 'Hinta';
$lang['invoice_item_add_edit_description']        = 'Kuvaus';
$lang['invoice_item_add_edit_rate']               = 'Hinta';
$lang['invoice_item_edit_heading']                = 'Muokkaa tuotetta';
$lang['invoice_item_add_heading']                 = 'Lisää uusi tuote';

# Invoices
$lang['invoices']                                 = 'Laskut';
$lang['invoice']                                  = 'Lasku';
$lang['invoice_lowercase']                        = 'lasku';
$lang['create_new_invoice']                       = 'Luo uusi lasku';
$lang['view_invoice']                             = 'Näytä lasku';
$lang['invoice_payment_recorded']                 = 'Laskun maksu tallennettu';
$lang['invoice_payment_record_failed']            = 'Laskun maksamisen tallennus epäonnistui';
$lang['invoice_sent_to_client_success']           = 'Lasku lähetetty onnistuneesti asiakkaalle';
$lang['invoice_sent_to_client_fail']              = 'Ongelma laskun lähettämisessä';
$lang['invoice_reminder_send_problem']            = 'Ongelma laskun erääntyneen muistutuksen lähettämisessä';
$lang['invoice_overdue_reminder_sent']            = 'Myöhästyneen laskun muistutus on lähetetty onnistuneesti';
$lang['invoice_details']                          = 'Laskun erittely';
$lang['invoice_view']                             = 'Näytä lasku';
$lang['invoice_select_customer']                  = 'Asiakas';
$lang['invoice_add_edit_number']                  = 'Laskun numero';
$lang['invoice_add_edit_date']                    = 'Laskun päivämäärä';
$lang['invoice_add_edit_duedate']                 = 'Eräpäivä';
$lang['invoice_add_edit_currency']                = 'Valuutta';
$lang['invoice_add_edit_client_note']             = 'Asiakkaalle huomautus';
$lang['invoice_add_edit_admin_note']              = 'Ylläpidon huomautus';
$lang['invoices_toggle_table_tooltip']            = 'Vaihda taulukko';
$lang['edit_invoice_tooltip']                     = 'Muokkaa laskua';
$lang['delete_invoice_tooltip']                   = 'Poista lasku. Huomaa: kaikki tähän laskuun liittyvät maksut poistetaan (jos niitä on).';
$lang['invoice_sent_to_email_tooltip']            = 'Lähetä sähköpostilla';
$lang['invoice_already_send_to_client_tooltip']   = 'Tämä lasku on jo lähetetty asiakkaalle %s';
$lang['send_overdue_notice_tooltip']              = 'Lähetä erääntynyt ilmoitus';
$lang['invoice_view_activity_tooltip']            = 'Aktiviteettiloki';
$lang['invoice_record_payment']                   = 'Tallenna maksu';
$lang['invoice_send_to_client_modal_heading']     = 'Lähetä lasku asiakkaalle';
$lang['invoice_send_to_client_attach_pdf']        = 'Liitä laskun PDF';
$lang['invoice_send_to_client_preview_template']  = 'Esikatsele sähköpostimallia';
$lang['invoice_dt_table_heading_number']          = 'Lasku #';
$lang['invoice_dt_table_heading_date']            = 'Päivä';
$lang['invoice_dt_table_heading_client']          = 'Asiakas';
$lang['invoice_dt_table_heading_duedate']         = 'Eräpäivä';
$lang['invoice_dt_table_heading_amount']          = 'Summa';
$lang['invoice_dt_table_heading_status']          = 'Tila';
$lang['record_payment_for_invoice']               = 'Tallenna maksu';
$lang['record_payment_amount_received']           = 'Vastaanotettu summa';
$lang['record_payment_date']                      = 'Maksupäivä';
$lang['record_payment_leave_note']                = 'Jätä huomautus';
$lang['invoice_payments_received']                = 'Maksut vastaanotettu';
$lang['invoice_record_payment_note_placeholder']  = 'Ylläpidon huomautus';
$lang['no_payments_found']                        = 'Tälle laskulle ei löytynyt maksuja';

# Payments
$lang['payments']                                 = 'Maksut';
$lang['payment']                                  = 'Maksu';
$lang['payment_lowercase']                        = 'maksu';
$lang['payments_table_number_heading']            = 'Maksu #';
$lang['payments_table_invoicenumber_heading']     = 'Lasku #';
$lang['payments_table_mode_heading']              = 'Maksutapa';
$lang['payments_table_date_heading']              = 'Päivä';
$lang['payments_table_amount_heading']            = 'Summa';
$lang['payments_table_client_heading']            = 'Asiakas';
$lang['payment_not_exists']                       = 'Maksua ei ole olemassa';
$lang['payment_edit_for_invoice']                 = 'Laskun maksu';
$lang['payment_edit_amount_received']             = 'Vastaanotettu summa';
$lang['payment_edit_date']                        = 'Maksupäivä';

# Knowledge Base
$lang['kb_article_add_edit_subject']              = 'Aihe';
$lang['kb_article_add_edit_group']                = 'Ryhmä';
$lang['kb_string']                                = 'Tietopankki';
$lang['kb_article']                               = 'Artikkeli';
$lang['kb_article_lowercase']                     = 'artikkeli';
$lang['kb_article_new_article']                   = 'Luo uusi artikkeli';
$lang['kb_article_disabled']                      = 'Poissa käytöstä';
$lang['kb_article_description']                   = 'Artikkelin kuvaus';
$lang['kb_no_articles_found']                     = 'Tietopankin artikkeleita ei löytynyt';
$lang['kb_dt_article_name']                       = 'Artikkelin nimi';
$lang['kb_dt_group_name']                         = 'Ryhmä';
$lang['new_group']                                = 'Uusi ryhmä';
$lang['kb_group_add_edit_name']                   = 'Ryhmän nimi';
$lang['kb_group_add_edit_description']            = 'Lyhyt kuvaus';
$lang['kb_group_add_edit_disabled']               = 'Poistettu käytöstä';
$lang['kb_group_add_edit_note']                   = 'Huomaa: Kaikki tämän ryhmän artikkelit piilotetaan, jos käytöstä on valittu';
$lang['group_table_name_heading']                 = 'Nimi';
$lang['group_table_isactive_heading']             = 'Aktiivinen';
$lang['kb_no_groups_found']                       = 'Tietopankin ryhmiä ei löytynyt';

# Media
$lang['media_files']                              = 'Tiedostot';

# Payment modes
$lang['new_payment_mode']                         = 'Uusi maksutapa';
$lang['payment_modes']                            = 'Maksutavat';
$lang['payment_mode']                             = 'Maksutapa';
$lang['payment_mode_lowercase']                   = 'maksutapa';
$lang['payment_modes_dt_name']                    = 'Maksutavan nimi';
$lang['payment_mode_add_edit_name']               = 'Maksutavan nimi';
$lang['payment_mode_edit_heading']                = 'Muokkaa maksutapaa';
$lang['payment_mode_add_heading']                 = 'Lisää maksutapa';

# Predefined Ticket Replies
$lang['new_predefined_reply']                     = 'Uusi ennalta määritetty vastaus';
$lang['predefined_replies']                       = 'Ennalta määritetyt vastaukset';
$lang['predefined_reply']                         = 'Ennalta määritelty vastaus';
$lang['predefined_reply_lowercase']               = 'ennalta määritelty vastaus';
$lang['predefined_replies_dt_name']               = 'Ennalta määritetyn vastauksen aihe';
$lang['predefined_reply_add_edit_name']           = 'Ennalta määritetyn vastauksen aihe';
$lang['predefined_reply_add_edit_content']        = 'Vastauksen sisältö';

# Ticket Priorities
$lang['new_ticket_priority']                      = 'Uusi prioriteetti';
$lang['ticket_priorities']                        = 'Palvelupyyntöjen prioriteetit';
$lang['ticket_priority']                          = 'Palvelupyynnön prioriteetti';
$lang['ticket_priority_lowercase']                = 'palvelupyynnön prioriteetti';
$lang['no_ticket_priorities_found']               = 'Palvelupyyntöprioriteetteja ei löytynyt';
$lang['ticket_priority_dt_name']                  = 'Palvelupyynnön prioriteetin nimi';
$lang['ticket_priority_add_edit_name']            = 'Prioriteetin nimi';

# Reports
$lang['kb_reports']                               = 'Tietopankin artikkeleita koskevat raportit';
$lang['sales_reports']                            = 'Myyntiraportit';
$lang['reports_choose_kb_group']                  = 'Valitse ryhmä';
$lang['report_kb_yes']                            = 'Kyllä';
$lang['report_kb_no']                             = 'Ei';
$lang['report_kb_no_votes']                       = 'Ei ääniä vielä';
$lang['report_this_week_leads_conversions']       = 'Tämän viikon liiditulokset';
$lang['report_leads_sources_conversions']         = 'Lähteiden muuntaminen';
$lang['report_leads_monthly_conversions']         = 'Kuukausittain';
$lang['sales_report_heading']                     = 'Myyntiraportti';
$lang['report_sales_type_income']                 = 'Kokonaistulot';
$lang['report_sales_type_customer']               = 'Asiakasraportit';
$lang['report_sales_base_currency_select_explanation'] = 'Sinun on valittava valuutta, koska sinulla on eri valuutan laskut';
$lang['report_sales_from_date']                   = 'Päivämäärästä';
$lang['report_sales_to_date']                     = 'Päättymispäivään';
$lang['report_sales_months_all_time']             = 'Koko ajalta';
$lang['report_sales_months_six_months']           = 'Viimeiset 6 kuukautta';
$lang['report_sales_months_twelve_months']        = 'Viimeiset 12 kuukautta';
$lang['reports_sales_generated_report']           = 'Luotu raportti';
$lang['reports_sales_dt_customers_client']        = 'Asiakas';
$lang['reports_sales_dt_customers_total_invoices'] = 'Laskut yhteensä';
$lang['reports_sales_dt_items_customers_amount']  = 'Määrä';
$lang['reports_sales_dt_items_customers_amount_with_tax'] = 'Määrä veroineen';

# Roles
$lang['new_role']                                 = 'Uusi rooli';
$lang['all_roles']                                = 'Kaikki roolit';
$lang['roles']                                    = 'Ylläpitoroolit';
$lang['role']                                     = 'Rooli';
$lang['role_lowercase']                           = 'rooli';
$lang['roles_total_users']                        = 'Käyttäjiä yhteensä: ';
$lang['roles_dt_name']                            = 'Roolinimi';
$lang['role_add_edit_name']                       = 'Roolinimi';

# Service
$lang['new_service']                              = 'Luo uusi palvelu';
$lang['services']                                 = 'Palvelut';
$lang['service']                                  = 'Palvelu';
$lang['service_lowercase']                        = 'palvelu';
$lang['services_dt_name']                         = 'Palvelun nimi';
$lang['service_add_edit_name']                    = 'Palvelun nimi';

# Settings
$lang['settings']                                 = 'Asetukset';
$lang['settings_updated']                         = 'Asetukset päivitetty';
$lang['settings_save']                            = 'Tallenna asetukset';
$lang['settings_group_general']                   = 'Yleinen';
$lang['settings_group_localization']              = 'Lokalisointi';
$lang['settings_group_tickets']                   = 'Tiketit';
$lang['settings_group_sales']                     = 'Myynti';
$lang['settings_group_email']                     = 'Sähköposti';
$lang['settings_group_clients']                   = 'Asiakkaat';
$lang['settings_group_newsfeed']                  = 'Uutisvirta';
$lang['settings_group_cronjob']                   = 'Cron Job';
$lang['settings_yes']                             = 'Kyllä';
$lang['settings_no']                              = 'Ei';
$lang['settings_clients_default_theme']           = 'Oletusasiakkaiden teema';
$lang['settings_clients_allow_registration']      = 'Salli asiakkaiden rekisteröityä';
$lang['settings_clients_allow_kb_view_without_registration'] = 'Salli tietopankin lukeminen ilman rekisteröitymistä';
$lang['settings_cron_send_overdue_reminder']      = 'Lähetä laskun muistutus';
$lang['settings_cron_send_overdue_reminder_tooltip'] = 'Lähetä erääntynyt sähköposti asiakkaalle, kun laskun tila päivitetään myöhässä Cron Jobilta';
$lang['automatically_send_invoice_overdue_reminder_after'] = 'Lähetä muistutus automaattisesti (päivän kuluttua)';
$lang['automatically_resend_invoice_overdue_reminder_after'] = 'Lähetä muistutus uudelleen automaattisesti (päivän) kuluttua';
$lang['settings_email_host']                      = 'SMTP-isäntä';
$lang['settings_email_port']                      = 'SMTP-portti';
$lang['settings_email']                           = 'Sähköposti';
$lang['settings_email_password']                  = 'SMTP-salasana';
$lang['settings_email_charset']                   = 'Sähköpostin merkistö';
$lang['settings_email_signature']                 = 'Sähköpostin allekirjoitus';
$lang['settings_general_company_logo']            = 'Yrityksen logo';
$lang['settings_general_company_logo_tooltip']    = 'Suositellut mitat: 150 x 34px';
$lang['settings_general_company_remove_logo_tooltip'] = 'Poista yrityksen logo';
$lang['settings_general_company_name']            = 'Yrityksen nimi';
$lang['settings_general_company_main_domain']     = 'Yrityksen päätoimialue';
$lang['settings_general_use_knowledgebase']       = 'Käytä tietopankkia';
$lang['settings_general_use_knowledgebase_tooltip'] = 'Jos sallit tämän vaihtoehdon, tietopankki näkyy myös asiakaspuolella';
$lang['settings_general_tables_limit']            = 'Taulukoiden sivuraja';
$lang['settings_general_default_staff_role']      = 'Henkilöstön oletusrooli';
$lang['settings_general_default_staff_role_tooltip'] = 'Kun lisäät uuden työntekijän, tämä rooli valitaan oletuksena';
$lang['settings_localization_date_format']        = 'Päivämäärämuoto';
$lang['settings_localization_default_timezone']   = 'Oletusaikavyöhyke';
$lang['settings_localization_default_language']   = 'Oletuskieli';
$lang['settings_newsfeed_max_file_upload_post']   = 'Suurin sallittu tiedostojen lähetys postauksessa';
$lang['settings_reminders_contracts']             = 'Muistutus sopimuksen voimassaolosta ennen';
$lang['settings_reminders_contracts_tooltip']     = 'Vanhentumisilmoitus päivissä';
$lang['settings_tickets_use_services']            = 'Käytä palveluita';
$lang['settings_tickets_max_attachments']         = 'Suurin palvelupyyntöjen liitetiedosto';
$lang['settings_tickets_allow_departments_access'] = 'Anna henkilöstölle pääsy vain palvelupyynnöille, jotka kuuluvat henkilöstöosastoille';
$lang['settings_tickets_allowed_file_extensions'] = 'Sallitut liitetiedostotunnisteet';
$lang['settings_sales_general']                   = 'Yleinen';
$lang['settings_sales_general_note']              = 'Yleiset asetukset';
$lang['settings_sales_invoice_prefix']            = 'Laskun numeerinen etuliite';
$lang['settings_sales_decimal_separator']         = 'Desimaalierotin';
$lang['settings_sales_thousand_separator']        = 'Tuhannen erotin';
$lang['settings_sales_currency_placement']        = 'Valuuttapaikka';
$lang['settings_sales_currency_placement_before'] = 'Ennen määrää';
$lang['settings_sales_currency_placement_after']  = 'Määrän jälkeen';
$lang['settings_sales_require_client_logged_in_to_view_invoice'] = 'Vaadi asiakkaan kirjautumaan sisään nähdäkseen laskun';
$lang['settings_sales_next_invoice_number']       = 'Seuraava laskun numero';
$lang['settings_sales_next_invoice_number_tooltip'] = 'Aseta tämä kenttä arvoon 1, jos haluat aloittaa alusta';
$lang['settings_sales_decrement_invoice_number_on_delete'] = 'Pienennä laskun numeroa poiston yhteydessä';
$lang['settings_sales_decrement_invoice_number_on_delete_tooltip'] = 'Haluatko pienentää laskun numeroa, kun viimeinen lasku poistetaan? esim. Jos tämän asetuksen arvo on KYLLÄ ja ennen laskun poistamista seuraavan laskun numero on 15, seuraavan laskun numero pienenee arvoon 14. Jos asetukseksi on EI, numero pysyy 15. Jos olet asettanut asetukset, poista vain viimeisestä laskusta EI, numeroa ei pienennetä.';
$lang['settings_sales_invoice_number_format']     = 'Laskunumeromuoto';
$lang['settings_sales_invoice_number_format_year_based'] = 'Vuosiperusteinen';
$lang['settings_sales_invoice_number_format_number_based'] = 'Numero perustuu (000001)';
$lang['settings_sales_company_info_note']         = 'Nämä tiedot näkyvät laskuissa / arvioissa / maksuissa ja muissa PDF-asiakirjoissa, joissa vaaditaan yritystietoja';
$lang['settings_sales_company_name']              = 'Yrityksen nimi';
$lang['settings_sales_address']                   = 'Osoite';
$lang['settings_sales_city']                      = 'Kaupunki';
$lang['settings_sales_country_code']              = 'Maatunnus';
$lang['settings_sales_postal_code']               = 'Postinumero';
$lang['settings_sales_phonenumber']               = 'Puhelin';

# Leads
$lang['new_lead']                                 = 'Luo uusi liidi';
$lang['leads']                                    = 'Liidit';
$lang['lead']                                     = 'Liidi';
$lang['lead_lowercase']                           = 'liidi';
$lang['leads_all']                                = 'Kaikki';
$lang['leads_canban_notes']                       = 'Merkintöjä: %s';
$lang['leads_canban_source']                      = 'Lähde: %s';
$lang['lead_new_source']                          = 'Uusi lähde';
$lang['lead_sources']                             = 'Liidin lähteet';
$lang['lead_source']                              = 'Liidin lähde';
$lang['lead_source_lowercase']                    = 'liidin lähde';
$lang['leads_sources_not_found']                  = 'Ei liidin lähteitä löytynyt';
$lang['leads_sources_table_name']                 = 'Lähteen nimi';
$lang['leads_source_add_edit_name']               = 'Lähteen nimi';
$lang['lead_new_status']                          = 'Uusi liidin tila';
$lang['lead_status']                              = 'Liidin tila';
$lang['lead_status_lowercase']                    = 'liidin tila';
$lang['leads_status_table_name']                  = 'Tilan nimi';
$lang['leads_status_add_edit_name']               = 'Tilan nimi';
$lang['leads_status_add_edit_order']              = 'Järjestys';
$lang['lead_statuses_not_found']                  = 'Liidien tiloja ei löytynyt';
$lang['leads_search']                             = 'Etsi liidejä';
$lang['leads_table_total']                        = 'Yhteensä liidejä: %s';
$lang['leads_dt_name']                            = 'Nimi';
$lang['leads_dt_email']                           = 'Sähköposti';
$lang['leads_dt_phonenumber']                     = 'Puhelin';
$lang['leads_dt_assigned']                        = 'Osoitettu';
$lang['leads_dt_status']                          = 'Tila';
$lang['leads_dt_last_contact']                    = 'Viimeinen kontakti';
$lang['lead_add_edit_name']                       = 'Nimi';
$lang['lead_add_edit_email']                      = 'Sähköpostiosoite';
$lang['lead_add_edit_phonenumber']                = 'Puhelin';
$lang['lead_add_edit_source']                     = 'Lähde';
$lang['lead_add_edit_status']                     = 'Tila';
$lang['lead_add_edit_assigned']                   = 'Osoitettu';
$lang['lead_add_edit_datecontacted']              = 'Päivä jolloin otettu yhteyttä';
$lang['lead_add_edit_contacted_today']            = 'Otettu yhteyttä tänään';
$lang['lead_add_edit_activity']                   = 'Aktiviteettiloki';
$lang['lead_add_edit_notes']                      = 'Merkintöjä';
$lang['lead_add_edit_add_note']                   = 'Lisää merkintä';
$lang['lead_not_contacted']                       = 'En ole ottanut yhteyttä tähän liidiin';
$lang['lead_add_edit_contacted_this_lead']        = 'Otin yhteyttä tähän liidiin';

# Misc
$lang['access_denied']                            = 'Pääsy evätty';
$lang['prev']                                     = 'Edellinen';
$lang['next']                                     = 'Seuraava';

# Datatables
$lang['dt_paginate_first']                        = 'Ensimmäinen';
$lang['dt_paginate_last']                         = 'Viimeisin';
$lang['dt_paginate_next']                         = 'Seuraava';
$lang['dt_paginate_previous']                     = 'Edellinen';
$lang['dt_search']                                = 'Etsi...';
$lang['dt_zero_records']                          = 'Vastaavia tuloksia ei löytynyt';
$lang['dt_loading_records']                       = 'Lataa...';
$lang['dt_length_menu']                           = 'Näytä _MENU_ kohdetta';
$lang['dt_info_filtered']                         = '(suodatettu _MAX_ kohteen joukosta)';
$lang['dt_info_empty']                            = 'Näytetään 0 - 0 / 0 {0}';
$lang['dt_info']                                  = 'Näytetään _START_ - _END_ / _TOTAL_ {0}';
$lang['dt_empty_table']                           = 'Yhtään kohdetta {0} ei löytynyt';
$lang['dt_sort_ascending']                        = ' lajittele sarake nousevasti';
$lang['dt_sort_descending']                       = ' lajittele sarake laskevasti';

# Invoice Activity Log
$lang['user_sent_overdue_reminder']               = '%s lähetti laskun erääntyneen muistutuksen';

# Weekdays
$lang['wd_monday']                                = 'Maanantai';
$lang['wd_tuesday']                               = 'Tiistai';
$lang['wd_thursday']                              = 'Torstai';
$lang['wd_wednesday']                             = 'Keskiviikko';
$lang['wd_friday']                                = 'Perjantai';
$lang['wd_saturday']                              = 'Lauantai';
$lang['wd_sunday']                                = 'Sunnuntai';

# Admin Left Sidebar
$lang['als_dashboard']                            = 'Ohjausnäkymä';
$lang['als_clients']                              = 'Asiakkaat';
$lang['als_leads']                                = 'Liidit';
$lang['als_contracts']                            = 'Sopimukset';
$lang['als_sales']                                = 'Myynnit';
$lang['als_staff']                                = 'Henkilöstö';
$lang['als_tasks']                                = 'Tehtävät';
$lang['als_kb']                                   = 'Tietopankki';
$lang['als_media']                                = 'Media';
$lang['als_reports']                              = 'Raportit';
$lang['als_reports_sales_submenu']                = 'Myynti';
$lang['als_reports_leads_submenu']                = 'Liidit';
$lang['als_kb_articles_submenu']                  = 'Tietopankin artikkelit';
$lang['als_utilities']                            = 'Apuohjelmat';
$lang['als_announcements_submenu']                = 'Ilmoitukset';
$lang['als_calendar_submenu']                     = 'Kalenteri';
$lang['als_activity_log_submenu']                 = 'Aktiviteettiloki';


# Admin Customizer Sidebar
$lang['acs_ticket_priority_submenu']              = 'Palvelupyynnön prioriteetti';
$lang['acs_ticket_statuses_submenu']              = 'Palvelupyynnön tilat';
$lang['acs_ticket_predefined_replies_submenu']    = 'Ennalta määritetyt vastaukset';
$lang['acs_ticket_services_submenu']              = 'Palvelut';
$lang['acs_departments']                          = 'Osastot';
$lang['acs_leads']                                = 'Liidit';
$lang['acs_leads_sources_submenu']                = 'Lähteet';
$lang['acs_leads_statuses_submenu']               = 'Tilat';
$lang['acs_sales_taxes_submenu']                  = 'Verokannat';
$lang['acs_sales_currencies_submenu']             = 'Valuutat';
$lang['acs_sales_payment_modes_submenu']          = 'Maksutavat';
$lang['acs_email_templates']                      = 'Sähköpostimallit';
$lang['acs_roles']                                = 'Roolit';
$lang['acs_settings']                             = 'Asetukset';

# Tickets
$lang['new_ticket']                               = 'Avaa uusi palvelupyyntö';
$lang['tickets']                                  = 'Palvelupyynnöt';
$lang['ticket']                                   = 'Palvelupyyntö';
$lang['ticket_lowercase']                         = 'palvelupyyntö';
$lang['support_tickets']                          = 'Tukipyynnöt';
$lang['support_ticket']                           = 'Tukipyyntö';
$lang['ticket_settings_to']                       = 'Nimi';
$lang['ticket_settings_email']                    = 'Sähköpostiosoite';
$lang['ticket_settings_departments']              = 'Osasto';
$lang['ticket_settings_service']                  = 'Palvelu';
$lang['ticket_settings_priority']                 = 'Prioriteetti';
$lang['ticket_settings_subject']                  = 'Aihe';
$lang['ticket_settings_assign_to']                = 'Vastuuhenkilö (oletus on nykyinen käyttäjä)';
$lang['ticket_add_body']                          = 'Palvelupyynnön sisältö';
$lang['ticket_add_attachments']                   = 'Liitteet';
$lang['ticket_no_reply_yet']                      = 'Ei vastausta vielä';
$lang['new_ticket_added_successfully']            = 'Palvelupyyntö #%s lisättiin onnistuneesti';
$lang['replied_to_ticket_successfully']           = 'Vastasi palvelupyyntöön #%s onnistuneesti';
$lang['ticket_settings_updated_successfully']     = 'Palvelupyyntöasetukset päivitetty onnistuneesti';
$lang['ticket_settings_updated_successfully_and_reassigned'] = 'Palvelupyyntöasetukset päivitetty onnistuneesti - jaettu osastolle %s';
$lang['ticket_dt_subject']                        = 'Aihe';
$lang['ticket_dt_department']                     = 'Osasto';
$lang['ticket_dt_service']                        = 'Palvelu';
$lang['ticket_dt_submitter']                      = 'Kontakti';
$lang['ticket_dt_status']                         = 'Tila';
$lang['ticket_dt_priority']                       = 'Prioriteetti';
$lang['ticket_dt_last_reply']                     = 'Viimeisin vastaus';
$lang['ticket_single_add_reply']                  = 'Lisää vastaus';
$lang['ticket_single_add_note']                   = 'Lisää merkintä';
$lang['ticket_single_other_user_tickets']         = 'Muut palvelupyynnöt';
$lang['ticket_single_settings']                   = 'Asetukset';
$lang['ticket_single_priority']                   = 'Prioriteetti: %s';
$lang['ticket_single_last_reply']                 = 'Viimeisin vastaus: %s';
$lang['ticket_single_ticket_note_by']             = 'Palvelupyynnön merkintä %s';
$lang['ticket_single_note_added']                 = 'Merkintä lisätty: %s';
$lang['ticket_single_change_status']              = 'Muuta tilaa';
$lang['ticket_single_assign_to_me_on_update']     = 'Osoita tämä palvelupyyntö minulle automaattisesti';
$lang['ticket_single_insert_predefined_reply']    = 'Lisää ennalta määritetty vastaus';
$lang['ticket_single_insert_knowledge_base_link'] = 'Lisää tietopankin linkki';
$lang['ticket_single_attachments']                = 'Liitteet';
$lang['ticket_single_add_response']               = 'Lisää vastaus';
$lang['ticket_single_note_heading']               = 'Merkintä';
$lang['ticket_single_add_note']                   = 'Lisää Merkintä';
$lang['ticket_settings_none_assigned']            = 'Ei mitään';
$lang['ticket_status_changed_successfully']       = 'Palvelupyynnön tila muuttunut';
$lang['ticket_status_changed_fail']               = 'Ongelma palvelupyynnön tilan muuttamisessa';
$lang['ticket_staff_string']                      = 'Ylläpito';
$lang['ticket_client_string']                     = 'Asiakas';
$lang['ticket_posted']                            = 'Lähettäjä: %s';
$lang['ticket_access_by_department_denied']       = 'Sinulla ei ole pääsyä tähän palvelupyyntöön. Tämä palvelupyyntö kuuluu osastoon, johon sinua ei ole määritetty.';

# Staff
$lang['new_staff']                                = 'Luo uusi henkilöstön jäsen';
$lang['staff_members']                            = 'Henkilöstön jäsenet';
$lang['staff_member']                             = 'Henkilöstön jäsen';
$lang['staff_member_lowercase']                   = 'henkilöstön jäsen';
$lang['staff_profile_updated']                    = 'Profiilisi on päivitetty';
$lang['staff_old_password_incorrect']             = 'Vanha salasanasi on väärä';
$lang['staff_password_changed']                   = 'Salasanasi on vaihdettu';
$lang['staff_problem_changing_password']          = 'Ongelma salasanasi vaihtamisessa';
$lang['staff_profile_string']                     = 'Profiili';
$lang['staff_cant_remove_main_admin']             = 'Päävalvojaa ei voi poistaa';
$lang['staff_cant_remove_yourself_from_admin']    = 'Et voi poistaa itseltäsi järjestelmänvalvojan roolia';
$lang['staff_dt_name']                            = 'Koko nimi';
$lang['staff_dt_email']                           = 'Sähköposti';
$lang['staff_dt_last_Login']                      = 'Viimeisin kirjautuminen';
$lang['staff_dt_active']                          = 'Aktiivinen';
$lang['staff_add_edit_firstname']                 = 'Etunimi';
$lang['staff_add_edit_lastname']                  = 'Sukunimi';
$lang['staff_add_edit_email']                     = 'Sähköposti';
$lang['staff_add_edit_phonenumber']               = 'Puhelin';
$lang['staff_add_edit_facebook']                  = 'Facebook';
$lang['staff_add_edit_linkedin']                  = 'LinkedIn';
$lang['staff_add_edit_skype']                     = 'Skype';
$lang['staff_add_edit_departments']               = 'Osastot';
$lang['staff_add_edit_role']                      = 'Rooli';
$lang['staff_add_edit_permissions']               = 'Oikeudet';
$lang['staff_add_edit_administrator']             = 'Järjestelmänvalvoja';
$lang['staff_add_edit_password']                  = 'Salasana';
$lang['staff_add_edit_password_note']             = 'Huomaa: Jos täytät tämän kentän, tämän jäsenen salasana vaihdetaan.';
$lang['staff_add_edit_password_last_changed']     = 'Salasana vaihdettiin viimeksi';
$lang['staff_add_edit_notes']                     = 'Merkintöjä';
$lang['staff_add_edit_note_description']          = 'Merkinnän kuvaus';
$lang['staff_notes_table_description_heading']    = 'Merkintä';
$lang['staff_notes_table_addedfrom_heading']      = 'Lisääjä';
$lang['staff_notes_table_dateadded_heading']      = 'Lisäyspäivämäärä';
$lang['staff_admin_profile']                      = 'Tämä on järjestelmänvalvojan profiili';
$lang['staff_profile_notifications']              = 'Ilmoitukset';
$lang['staff_profile_departments']                = 'Osastot';
$lang['staff_edit_profile_image']                 = 'Profiilikuva';
$lang['staff_edit_profile_your_departments']      = 'Osastot';
$lang['staff_edit_profile_change_your_password']  = 'Vaihda salasanasi';
$lang['staff_edit_profile_change_old_password']   = 'Vanha salasana';
$lang['staff_edit_profile_change_new_password']   = 'Uusi salasana';
$lang['staff_edit_profile_change_repeat_new_password'] = 'Toista uusi salasana';


# Staff Tasks
$lang['new_task']                                 = 'Luo uusi tehtävä';
$lang['tasks']                                    = 'Tehtävät';
$lang['task']                                     = 'Tehtävä';
$lang['task_lowercase']                           = 'tehtävä';
$lang['comment_string']                           = 'Kommentti';
$lang['task_marked_as_complete']                  = 'Tehtävä merkitty valmiiksi';
$lang['task_follower_removed']                    = 'Tehtävän seuraaja poistettu onnistuneesti';
$lang['task_assignee_removed']                    = 'Tehtävän vastuuhenkilö poistettu onnistuneesti';
$lang['task_no_assignees']                        = 'Ei vastuuhenkilöitä tähän tehtävään';
$lang['task_no_followers']                        = 'Ei seuraajia tälle tehtävälle';
$lang['task_list_all']                            = 'Kaikki';
$lang['task_list_not_assigned']                   = 'Ei määritetty';
$lang['task_list_duedate_passed']                 = 'Eräpäivä ylittynyt';
$lang['tasks_dt_name']                            = 'Nimi';
$lang['task_single_priority']                     = 'Prioriteetti';
$lang['task_single_start_date']                   = 'Aloituspäivä';
$lang['task_single_due_date']                     = 'Eräpäivä';
$lang['task_single_finished']                     = 'Päättynyt';
$lang['task_single_mark_as_complete']             = 'Merkitse valmiiksi';
$lang['task_single_edit']                         = 'Muokkaa';
$lang['task_single_delete']                       = 'Poista';
$lang['task_single_assignees']                    = 'Vastuuhenkilöt';
$lang['task_single_assignees_select_title']       = 'Määritä tehtävä seuraaville';
$lang['task_single_followers']                    = 'Seuraajat';
$lang['task_single_followers_select_title']       = 'Lisää seuraaja';
$lang['task_single_add_new_comment']              = 'Lisää kommentti';
$lang['task_add_edit_subject']                    = 'Aihe';
$lang['task_add_edit_priority']                   = 'Prioriteetti';
$lang['task_priority_low']                        = 'Matala';
$lang['task_priority_medium']                     = 'Keskitaso';
$lang['task_priority_high']                       = 'Korkea';
$lang['task_priority_urgent']                     = 'Kiireinen';
$lang['task_add_edit_start_date']                 = 'Aloituspäivä';
$lang['task_add_edit_due_date']                   = 'Eräpäivä';
$lang['task_add_edit_description']                = 'Tehtävän kuvaus';

# Taxes
$lang['new_tax']                                  = 'Uusi vero';
$lang['taxes']                                    = 'Verot';
$lang['tax']                                      = 'Vero';
$lang['tax_lowercase']                            = 'vero';
$lang['tax_dt_name']                              = 'Veron nimi';
$lang['tax_dt_rate']                              = 'Veroprosentti';
$lang['tax_add_edit_name']                        = 'Veron nimi';
$lang['tax_add_edit_rate']                        = 'Veroprosentti';
$lang['tax_edit_title']                           = 'Muokkaa veroa';
$lang['tax_add_title']                            = 'Lisää uusi vero';

# Ticket Statuses
$lang['new_ticket_status']                        = 'Uuden palvelupyynnön tila';
$lang['ticket_statuses']                          = 'Palvelupyynnön tilat';
$lang['ticket_status']                            = 'Palvelupyynnön tila';
$lang['ticket_status_lowercase']                  = 'palvelupyynnön tila';
$lang['ticket_statuses_dt_name']                  = 'Palvelupyynnön tilan nimi';
$lang['no_ticket_statuses_found']                 = 'Palvelupyynnön tiloja ei löytynyt';
$lang['ticket_statuses_table_total']              = 'Kaikki yhteensä %s';
$lang['ticket_status_add_edit_name']              = 'Palvelupyynnön tilan nimi';
$lang['ticket_status_add_edit_color']             = 'Valitse väri';
$lang['ticket_status_add_edit_order']             = 'Tilajärjestys';

# Todos
$lang['new_todo']                                 = 'Luo uusi tehtävä';
$lang['my_todos']                                 = 'Oma muistilista';
$lang['todo']                                     = 'Tehtävä';
$lang['todo_lowercase']                           = 'tehtävä';
$lang['todo_status_changed']                      = 'Tehtävän tila muuttui';
$lang['todo_add_title']                           = 'Lisää uusi tehtävä';
$lang['add_new_todo_description']                 = 'Kuvaus';
$lang['no_finished_todos_found']                  = 'Valmiita tehtäviä ei löytynyt';
$lang['no_unfinished_todos_found']                = 'Tehtäviä ei löytynyt';
$lang['unfinished_todos_title']                   = 'Keskeneräiset tehtävät';
$lang['finished_todos_title']                     = 'Viimeksi valmistuneet tehtävät';

# Utilities
$lang['utility_activity_log']                     = 'Aktiviteettiloki';
$lang['utility_activity_log_filter_by_date']      = 'Suodata päivämäärän mukaan';
$lang['utility_activity_log_dt_description']      = 'Kuvaus';
$lang['utility_activity_log_dt_date']             = 'Päivä';
$lang['utility_activity_log_dt_staff']            = 'Henkilöstö';
$lang['utility_calendar_new_event_title']         = 'Lisää uusi tapahtuma';
$lang['utility_calendar_new_event_start_date']    = 'Aloituspäivä';
$lang['utility_calendar_new_event_end_date']      = 'Päättymispäivä';
$lang['utility_calendar_new_event_make_public']   = 'Julkinen tapahtuma';
$lang['utility_calendar_event_added_successfully'] = 'Uusi tapahtuma lisätty onnistuneesti';
$lang['utility_calendar_event_deleted_successfully'] = 'Tapahtuma poistettu';
$lang['utility_calendar_new_event_placeholder']   = 'Tapahtuman otsikko';

# Navigation
$lang['nav_notifications']                        = 'Ilmoitukset';
$lang['nav_my_profile']                           = 'Profiilini';
$lang['nav_edit_profile']                         = 'Muokkaa profiilia';
$lang['nav_logout']                               = 'Kirjaudu ulos';
$lang['nav_no_notifications']                     = 'Ilmoituksia ei löytynyt';
$lang['nav_view_all_notifications']               = 'Näytä kaikki ilmoitukset';
$lang['nav_notifications_tooltip']                = 'Näytä ilmoitukset';

# Footer
$lang['clients_copyright']                        = '- Tekijänoikeus %s';

# Contracts
$lang['clients_contracts']                        = 'Sopimukset';
$lang['clients_contracts_dt_subject']             = 'Aihe';
$lang['clients_contracts_dt_start_date']          = 'Aloituspäivä';
$lang['clients_contracts_dt_end_date']            = 'Päättymispäivä';

# Home
$lang['clients_quick_invoice_info']               = 'Pikalaskutiedot';
$lang['clients_home_currency_select_tooltip']     = 'Sinun on valittava valuutta, koska sinulla on eri valuutalla laskuja';

# Invoices
$lang['clients_invoice_html_btn_download']        = 'Lataa';
$lang['clients_my_invoices']                      = 'Laskut';
$lang['clients_invoice_dt_number']                = 'Lasku #';
$lang['clients_invoice_dt_date']                  = 'Päivä';
$lang['clients_invoice_dt_duedate']               = 'Eräpäivä';
$lang['clients_invoice_dt_amount']                = 'Summa';
$lang['clients_invoice_dt_status']                = 'Tila';

# Profile
$lang['clients_profile_heading']                  = 'Profiili';

# Used for edit profile and register START
$lang['clients_firstname']                        = 'Etunimi';
$lang['clients_lastname']                         = 'Sukunimi';
$lang['clients_email']                            = 'Sähköpostiosoite';
$lang['clients_company']                          = 'Yritys tai Yhdistys';
$lang['clients_vat']                              = 'ALV-numero';
$lang['clients_phone']                            = 'Puhelin';
$lang['clients_country']                          = 'Maa';
$lang['clients_city']                             = 'Kaupunki';
$lang['clients_address']                          = 'Osoite';
$lang['clients_zip']                              = 'Postinumero';
$lang['clients_state']                            = 'Osavaltio';
# Used for edit profile and register END

$lang['clients_register_password']                = 'Salasana';
$lang['clients_register_password_repeat']         = 'Toista salasana';
$lang['clients_edit_profile_update_btn']          = 'Päivitä';
$lang['clients_edit_profile_change_password_heading'] = 'Muuta salasana';
$lang['clients_edit_profile_old_password']        = 'Vanha salasana';
$lang['clients_edit_profile_new_password']        = 'Uusi salasana';
$lang['clients_edit_profile_new_password_repeat'] = 'Toista salasana';
$lang['clients_edit_profile_change_password_btn'] = 'Muuta salasana';
$lang['clients_profile_last_changed_password']    = 'Salasana vaihdettiin viimeksi %s';

# Knowledge base
$lang['clients_knowledge_base']                   = 'Tietopankki';
$lang['clients_knowledge_base_articles_not_found'] = 'Tietopankin artikkeleita ei löytynyt';
$lang['clients_knowledge_base_find_useful']       = 'Löysitkö tämän artikkelin hyödylliseksi?';
$lang['clients_knowledge_base_find_useful_yes']   = 'Kyllä';
$lang['clients_knowledge_base_find_useful_no']    = 'En';
$lang['clients_article_only_1_vote_today']        = 'Voit äänestää vain kerran 24 tunnissa';
$lang['clients_article_voted_thanks_for_feedback'] = 'Kiitos palautteestasi';

# Tickets
$lang['clients_ticket_open_subject']              = 'Luo uusi palvelupyyntö';
$lang['clients_ticket_open_departments']          = 'Osasto';
$lang['clients_tickets_heading']                  = 'Tukipyynnöt';
$lang['clients_ticket_open_service']              = 'Palvelu';
$lang['clients_ticket_open_priority']             = 'Prioriteetti';
$lang['clients_ticket_open_body']                 = 'Palvelupyynnön sisältö';
$lang['clients_ticket_attachments']               = 'Liitteet';
$lang['clients_single_ticket_string']             = 'Palvelupyyntö';
$lang['clients_single_ticket_replied']            = 'Vastasi: %s';
$lang['clients_single_ticket_information_heading'] = 'Palvelupyynnön tiedot';
$lang['clients_tickets_dt_number']                = 'Palvelupyyntö #';
$lang['clients_tickets_dt_subject']               = 'Aihe';
$lang['clients_tickets_dt_department']            = 'Osasto';
$lang['clients_tickets_dt_service']               = 'Palvelu';
$lang['clients_tickets_dt_status']                = 'Tila';
$lang['clients_tickets_dt_last_reply']            = 'Viimeisin vastaus';
$lang['clients_ticket_single_department']         = 'Osasto: %s';
$lang['clients_ticket_single_submitted']          = 'Lähetetty: %s';
$lang['clients_ticket_single_status']             = 'Tila:';
$lang['clients_ticket_single_priority']           = 'Prioriteetti: %s';
$lang['clients_ticket_single_add_reply_btn']      = 'Lisää vastaus';
$lang['clients_ticket_single_add_reply_heading']  = 'Lisää vastaus tähän palvelupyyntöön';

# Login
$lang['clients_login_heading_no_register']        = 'Kirjaudu sisään, ole hyvä';
$lang['clients_login_heading_register']           = 'Kirjaudu sisään tai luo tili';
$lang['clients_login_email']                      = 'Sähköpostiosoite';
$lang['clients_login_password']                   = 'Salasana';
$lang['clients_login_remember']                   = 'Muista minut';
$lang['clients_login_login_string']               = 'Kirjaudu sisään';

# Register
$lang['clients_register_string']                  = 'Luo tili';
$lang['clients_register_heading']                 = 'Luo tili';

# Navigation
$lang['clients_nav_login']                        = 'Kirjaudu sisään';
$lang['clients_nav_register']                     = 'Luo tili';
$lang['clients_nav_invoices']                     = 'Laskut';
$lang['clients_nav_contracts']                    = 'Sopimukset';
$lang['clients_nav_kb']                           = 'Tietopankki';
$lang['clients_nav_profile']                      = 'Profiili';
$lang['clients_nav_logout']                       = 'Kirjaudu ulos';

# Version 1.0.1
$lang['payment_receipt']                          = 'Maksukuitti';
$lang['payment_for_string']                       = 'Maksu';
$lang['payment_date']                             = 'Maksupäivä:';
$lang['payment_view_mode']                        = 'Maksutapa:';
$lang['payment_total_amount']                     = 'Kokonaismäärä';
$lang['payment_table_invoice_number']             = 'Laskun numero';
$lang['payment_table_invoice_date']               = 'Laskun päivämäärä';
$lang['payment_table_invoice_amount_total']       = 'Laskun määrä';
$lang['payment_table_payment_amount_total']       = 'Maksun määrä';
$lang['payments_table_transaction_id']            = 'Tapahtuman ID: %s';
$lang['payment_getaway_token_not_found']          = 'Tunnusta ei löydy';
$lang['online_payment_recorded_success']          = 'Maksu tallennettu onnistuneesti';
$lang['online_payment_recorded_success_fail_database'] = 'Maksu onnistui, mutta maksun lisääminen tietokantaan epäonnistui. Ota yhteyttä järjestelmänvalvojaan.';

# Leads
$lang['lead_convert_to_client']                   = 'Muunna asiakkaaksi';
$lang['lead_convert_to_email']                    = 'Sähköposti';
$lang['lead_convert_to_client_firstname']         = 'Etunimi';
$lang['lead_convert_to_client_lastname']          = 'Sukunimi';
$lang['lead_email_already_exists']                = 'Liidin sähköpostiosoite on jo olemassa asiakastiedoissa';
$lang['lead_to_client_base_converted_success']    = 'Liidi muunnettu asiakkaaksi onnistuneesti';
$lang['lead_have_client_profile']                 = 'Tällä liidillä on asiakasprofiili.';
$lang['lead_converted_edit_client_profile']       = 'Muokkaa profiilia';

# Invoices
$lang['view_invoice_as_customer_tooltip']         = 'Näytä lasku asiakkaana';
$lang['invoice_add_edit_recurring']               = 'Toistuva lasku?';
$lang['invoice_add_edit_recurring_no']            = 'Ei';
$lang['invoice_add_edit_recurring_month']         = 'Joka %s kuukausi';
$lang['invoice_add_edit_recurring_months']        = 'Joka %s kuukausi';
$lang['invoices_list_all']                        = 'Kaikki';
$lang['invoices_list_not_have_payment']           = 'Laskut ilman maksutietueita';
$lang['invoices_list_recurring']                  = 'Toistuvat laskut';
$lang['invoices_list_made_payment_by']            = 'Tee maksu käyttäen %s';
$lang['invoices_create_invoice_from_recurring_only_on_paid_invoices'] = 'Luo uusi lasku toistuvasta laskusta vain, jos laskun tila on maksettu?';
$lang['invoices_create_invoice_from_recurring_only_on_paid_invoices_tooltip'] = 'Jos tämän kentän arvo on KYLLÄ ja toistuvien laskujen tila ei ole MAKSETTU, uutta laskua EI luoda.';
$lang['view_invoice_pdf_link_pay']                = 'Maksa lasku';

# Payment modes
$lang['payment_mode_add_edit_description']        = 'Pankkitilit / kuvaus';
$lang['payment_mode_add_edit_description_tooltip'] = 'Voit asettaa tähän pankkitilitiedot. Näytetään HTML-laskussa';
$lang['payment_modes_dt_description']             = 'Pankkitilit / kuvaus';
$lang['payment_modes_add_edit_announcement']      = 'Huomaa: Alla luetellut maksutavat ovat offline-tilassa. Maksuyhdyskäytävät voidaan määrittää kohdassa Asetukset-> Asetukset-> Maksuyhdyskäytävät';
$lang['payment_mode_add_edit_active']             = 'Aktiivinen';
$lang['payment_modes_dt_active']                  = 'Aktiivinen';

# Contracts
$lang['contract_not_found']                       = 'Sopimusta ei löytynyt. Se on saattanut tulla poistetuksi, tarkista aktiviteettiloki.';

# Settings
$lang['setting_bar_heading']                      = 'Asetukset';
$lang['settings_group_online_payment_modes']      = 'Maksuyhdyskäytävät';
$lang['settings_paymentmethod_mode_label']        = 'Etiketti';
$lang['settings_paymentmethod_active']            = 'Aktiivinen';
$lang['settings_paymentmethod_currencies']        = 'Valuutat (pilkuin erotettu)';
$lang['settings_paymentmethod_testing_mode']      = 'Ota testitila käyttöön';
$lang['settings_paymentmethod_paypal_username']   = 'PayPal API-käyttäjänimi';
$lang['settings_paymentmethod_paypal_password']   = 'PayPal API-salasana';
$lang['settings_paymentmethod_paypal_signature']  = 'API-allekirjoitus';
$lang['settings_paymentmethod_stripe_api_secret_key'] = 'Stripe API -salainen avain';
$lang['settings_paymentmethod_stripe_api_publishable_key'] = 'Stripe -julkinen avain';
$lang['settings_limit_top_search_bar_results']    = 'Rajoita suosituimpien hakupalkkien tulokset arvoon';

## Clients
$lang['client_phonenumber']                       = 'Puhelin';

# Main Clients
$lang['clients_register']                         = 'Luo tili';
$lang['clients_profile_updated']                  = 'Profiilisi on päivitetty';
$lang['clients_successfully_registered']          = 'Kiitos rekisteröitymisestä';
$lang['clients_account_created_but_not_logged_in'] = 'Tilisi on luotu, mutta et ole kirjautunut järjestelmään automaattisesti. Yritä kirjautua sisään';

# Tickets
$lang['clients_tickets_heading']                  = 'Tukipyynnöt';

# Payments
$lang['payment_for_invoice']                      = 'Laskun maksu';
$lang['payment_total']                            = 'Yhteensä: %s';

# Invoice
$lang['invoice_html_online_payment']              = 'Verkkomaksut';
$lang['invoice_html_online_payment_button_text']  = 'Maksa nyt';
$lang['invoice_html_payment_modes_not_selected']  = 'Valitse maksutapa';
$lang['invoice_html_amount_blank']                = 'Kokonaissumma ei voi olla tyhjä tai nolla';
$lang['invoice_html_offline_payment']             = 'Offline-maksu';
$lang['invoice_html_amount']                      = 'Summa';
# Version 1.0.2
# DataTables
$lang['dt_button_column_visibility']              = 'Näkyvyys';
$lang['dt_button_reload']                         = 'Lataa uudelleen';
$lang['dt_button_excel']                          = 'Excel';
$lang['dt_button_csv']                            = 'CSV';
$lang['dt_button_pdf']                            = 'PDF';
$lang['dt_button_print']                          = 'Tulosta';
$lang['is_not_active_export']                     = 'Ei';
$lang['is_active_export']                         = 'Kyllä';

# Invoice
$lang['invoice_add_edit_advanced_options']        = 'Edistyneet asetukset';
$lang['invoice_add_edit_allowed_payment_modes']   = 'Tämän laskun sallitut maksutavat';
$lang['invoice_add_edit_recurring_invoices_from_invoice'] = 'Tästä toistuvasta laskusta luodut laskut';
$lang['invoice_add_edit_no_payment_modes_found']  = 'Maksutapoja ei löytynyt.';
$lang['invoice_html_total_pay']                   = 'Yhteensä: %s';

# Email templates
$lang['email_templates_table_heading_name']       = 'Mallin nimi';

# General
$lang['discount_type']                            = 'Alennustyyppi';
$lang['discount_type_after_tax']                  = 'Verojen jälkeen';
$lang['discount_type_before_tax']                 = 'Ennen veroja';
$lang['terms_and_conditions']                     = 'Yleiset sopimusehdot';
$lang['reference_no']                             = 'Viite #';
$lang['no_discount']                              = 'Ei alennusta';
$lang['view_stats_tooltip']                       = 'Näytä pikatilastot';

# Clients
$lang['zip_from_date']                            = 'Alkaen:';
$lang['zip_to_date']                              = 'Päättyen:';
$lang['client_zip_payments']                      = 'Pakkaa maksut (ZIP)';
$lang['client_zip_invoices']                      = 'Pakkaa laskut (ZIP)';
$lang['client_zip_estimates']                     = 'Pakkaa tarjoukset (ZIP)';
$lang['client_zip_status']                        = 'Tila';
$lang['client_zip_status_all']                    = 'Kaikki';
$lang['client_zip_payment_modes']                 = 'Maksutavat';
$lang['client_zip_no_data_found']                 = '%s ei löytynyt';

# Payments
$lang['payment_mode']                             = 'Maksutapa';
$lang['payment_view_heading']                     = 'Maksu';

# Settings
$lang['settings_allow_payment_amount_to_be_modified'] = 'Salli asiakkaan muuttaa maksettavaa summaa (online-maksut)';

$lang['settings_delete_only_on_last_invoice']     = 'Laskun poistaminen sallittu vain viimeisestä laskusta';
$lang['settings_sales_estimate_prefix']           = 'Tarjouksen etuliite';
$lang['settings_sales_next_estimate_number']      = 'Seuraava tarjouksen numero';
$lang['settings_sales_next_estimate_number_tooltip'] = 'Aseta tämä kenttä arvoon 1, jos haluat aloittaa alusta';
$lang['settings_sales_decrement_estimate_number_on_delete'] = 'Pienennä tarjouksen numeroa poistettaessa';
$lang['settings_sales_decrement_estimate_number_on_delete_tooltip'] = 'Haluatko pienentää tarjouksen numeroa, kun viimeinen tarjous poistetaan? Esim. Jos tämän asetuksen arvoksi on asetettu KYLLÄ ja ennen poistamista seuraavan tarjouksen numero on 15, seuraava numero pienenee arvoon 14. Jos asetetaan EI, numero pysyy 15.';
$lang['settings_sales_estimate_number_format']    = 'Tarjouksen numeromuoto';
$lang['settings_sales_estimate_number_format_year_based'] = 'Vuosiperusteinen';
$lang['settings_sales_estimate_number_format_number_based'] = 'Numeroperusteinen (000001)';
$lang['settings_delete_only_on_last_estimate']    = 'Tarjouksen poistaminen sallittu vain viimeisestä tarjouksesta';
$lang['settings_send_test_email_heading']         = 'Lähetä testisähköposti';
$lang['settings_send_test_email_subheading']      = 'Lähetä testiviesti varmistaaksesi, että SMTP-asetukset on asetettu oikein.';
$lang['settings_send_test_email_string']          = 'Sähköpostiosoite';
$lang['settings_smtp_settings_heading']           = 'SMTP-asetukset';
$lang['settings_smtp_settings_subheading']        = 'Määritä lähettäjän sähköposti';
$lang['settings_sales_heading_general']           = 'Yleinen';
$lang['settings_sales_heading_invoice']           = 'Lasku';
$lang['settings_sales_heading_estimates']         = 'Tarjoukset';
$lang['settings_sales_cron_invoice_heading']      = 'Lasku';

# Tasks
$lang['tasks_dt_datestart']                       = 'Aloituspäivä';

# Invoice General
$lang['invoice_discount']                         = 'Alennus';

# Settings
$lang['settings_rtl_support_admin']               = 'RTL-järjestelmänvalvojan alue (oikealta vasemmalle)';
$lang['settings_rtl_support_client']              = 'RTL-asiakasalue (oikealta vasemmalle)';
$lang['settings_estimate_auto_convert_to_invoice_on_client_accept'] = 'Muunna tarjous automaattisesti laskuksi, kun asiakas on hyväksynyt sen';
$lang['settings_exclude_estimate_from_client_area_with_draft_status'] = 'Piilota asiakasnäkymästä tarjoukset, jotka ovat luonnostilassa';

# Months
$lang['January']                                  = 'Tammikuu';
$lang['February']                                 = 'Helmikuu';
$lang['March']                                    = 'Maaliskuu';
$lang['April']                                    = 'Huhtikuu';
$lang['May']                                      = 'Toukokuu';
$lang['June']                                     = 'Kesäkuu';
$lang['July']                                     = 'Heinäkuu';
$lang['August']                                   = 'Elokuu';
$lang['September']                                = 'Syyskuu';
$lang['October']                                  = 'Lokakuu';
$lang['November']                                 = 'Marraskuu';
$lang['December']                                 = 'Joulukuu';

# Time ago function translate
$lang['time_ago_just_now']                        = 'Juuri nyt';
$lang['time_ago_minute']                          = 'minuutti sitten';
$lang['time_ago_minutes']                         = '%s minuuttia sitten';
$lang['time_ago_hour']                            = 'tunti sitten';
$lang['time_ago_hours']                           = '%s tuntia sitten';
$lang['time_ago_yesterday']                       = 'eilen';
$lang['time_ago_days']                            = '%s päivää sitten';
$lang['time_ago_week']                            = 'viikko sitten';
$lang['time_ago_weeks']                           = '%s viikkoa sitten';
$lang['time_ago_month']                           = 'kuukausi sitten';
$lang['time_ago_months']                          = '%s kuukautta sitten';
$lang['time_ago_year']                            = 'vuosi sitten';
$lang['time_ago_years']                           = '%s vuotta sitten';

# Estimates
$lang['estimates']                                = 'Tarjoukset';
$lang['estimate']                                 = 'Tarjous';
$lang['estimate_lowercase']                       = 'tarjous';
$lang['create_new_estimate']                      = 'Luo uusi tarjous';
$lang['view_estimate']                            = 'Näytä tarjous';
$lang['estimate_sent_to_client_success']          = 'Tarjous lähetetty onnistuneesti asiakkaalle';
$lang['estimate_sent_to_client_fail']             = 'Ongelma tarjouksen lähettämisessä';
$lang['estimate_view']                            = 'Näytä tarjous';
$lang['estimate_select_customer']                 = 'Asiakas';
$lang['estimate_add_edit_number']                 = 'Tarjouksen numero';
$lang['estimate_add_edit_date']                   = 'Tarjouksen päivämäärä';
$lang['estimate_add_edit_expirydate']             = 'Viimeinen voimassaolopäivä';
$lang['estimate_add_edit_currency']               = 'Valuutta';
$lang['estimate_add_edit_client_note']            = 'Asiakkaan merkintä';
$lang['estimate_add_edit_admin_note']             = 'Järjestelmänvalvojan merkintä';
$lang['estimates_toggle_table_tooltip']           = 'Vaihda taulukko';
$lang['estimate_add_edit_advanced_options']       = 'Edistyneet asetukset';
$lang['estimate_to']                              = 'Saaja:';
$lang['estimates_list_all']                       = 'Kaikki';
$lang['estimate_invoiced_date']                   = 'Tarjous laskutettu %s';
$lang['edit_estimate_tooltip']                    = 'Muokkaa tarjousta';
$lang['delete_estimate_tooltip']                  = 'Poista tarjous';
$lang['estimate_sent_to_email_tooltip']           = 'Lähetä sähköpostilla';
$lang['estimate_already_send_to_client_tooltip']  = 'Tämä tarjous on jo lähetetty asiakkaalle %s';
$lang['estimate_view_activity_tooltip']           = 'Aktiviteettiloki';
$lang['estimate_send_to_client_modal_heading']    = 'Lähetä tarjous asiakkaalle';
$lang['estimate_send_to_client_attach_pdf']       = 'Liitä tarjouksen PDF';
$lang['estimate_send_to_client_preview_template'] = 'Esikatsele sähköpostimallia';
$lang['estimate_dt_table_heading_number']         = 'Tarjous #';
$lang['estimate_dt_table_heading_date']           = 'Päivä';
$lang['estimate_dt_table_heading_client']         = 'Asiakas';
$lang['estimate_dt_table_heading_expirydate']     = 'Viimeinen voimassaolopäivä';
$lang['estimate_dt_table_heading_amount']         = 'Summa';
$lang['estimate_dt_table_heading_status']         = 'Tila';
$lang['estimate_convert_to_invoice']              = 'Muunna laskuksi';

# Clients
$lang['client_payments_tab']                      = 'Maksut';

# Estimate General
$lang['estimate_pdf_heading']                     = 'TARJOUS';
$lang['estimate_table_item_heading']              = 'Tuote';
$lang['estimate_table_quantity_heading']          = 'Määrä';
$lang['estimate_table_rate_heading']              = 'Hinta';
$lang['estimate_table_tax_heading']               = 'Vero';
$lang['estimate_table_amount_heading']            = 'Määrä';
$lang['estimate_subtotal']                        = 'Välisumma';
$lang['estimate_adjustment']                      = 'Säätö';
$lang['estimate_discount']                        = 'Alennus';
$lang['estimate_total']                           = 'Yhteensä';
$lang['estimate_to']                              = 'Tarjous kohteelle';
$lang['estimate_data_date']                       = 'Tarjouksen päivämäärä';
$lang['estimate_data_expiry_date']                = 'Viimeinen voimassaolopäivä';
$lang['estimate_note']                            = 'Merkintä:';
$lang['estimate_status_draft']                    = 'Luonnos';
$lang['estimate_status_sent']                     = 'Lähetetty';
$lang['estimate_status_declined']                 = 'Hylätty';
$lang['estimate_status_accepted']                 = 'Hyväksytty';
$lang['estimate_status_expired']                  = 'Vanhentunut';
$lang['estimate_note']                            = 'Merkintä:';

## Clients
$lang['clients_estimate_dt_number']               = 'Tarjous #';
$lang['clients_estimate_dt_date']                 = 'Päivä';
$lang['clients_estimate_dt_duedate']              = 'Viimeinen voimassaolopäivä';
$lang['clients_estimate_dt_amount']               = 'Summa';
$lang['clients_estimate_dt_status']               = 'Tila';
$lang['clients_nav_estimates']                    = 'Tarjoukset';
$lang['clients_decline_estimate']                 = 'Hylkää';
$lang['clients_accept_estimate']                  = 'Hyväksy';
$lang['clients_my_estimates']                     = 'Tarjoukset';
$lang['clients_estimate_invoiced_successfully']   = 'Kiitos tarjouksen hyväksymisestä. Tarkista tarjouksesta luotu lasku.';
$lang['clients_estimate_accepted_not_invoiced']   = 'Kiitos, että hyväksyit tämän tarjouksen.';
$lang['clients_estimate_declined']                = 'Tarjous hylätty. Voit hyväksyä tarjouksen milloin tahansa ennen viimeistä voimassaolopäivää.';
$lang['clients_estimate_failed_action']           = 'Tämän tarjouksen käsittely epäonnistui.';
$lang['client_add_edit_profile']                  = 'Profiili';

# Custom Fields
$lang['custom_field']                             = 'Mukautettu kenttä';
$lang['custom_field_lowercase']                   = 'mukautettu kenttä';
$lang['custom_fields']                            = 'Muokatut kentät';
$lang['new_custom_field']                         = 'Uusi mukautettu kenttä';
$lang['custom_field_name']                        = 'Kentän nimi';
$lang['custom_field_add_edit_type']               = 'Tyyppi';
$lang['custom_field_add_edit_belongs_top']        = 'Kenttä kuuluu';
$lang['custom_field_add_edit_options']            = 'Vaihtoehdot';
$lang['custom_field_add_edit_options_tooltip']    = 'Käytä vain Select-, Checkbox-tyyppejä. Täytä kenttä erottamalla vaihtoehdot toisistaan pilkulla. esim. omena, appelsiini, banaani';
$lang['custom_field_add_edit_order']              = 'Järjestys';
$lang['custom_field_dt_field_to']                 = 'Kuuluu';
$lang['custom_field_dt_field_name']               = 'Nimi';
$lang['custom_field_dt_field_type']               = 'Tyyppi';
$lang['custom_field_add_edit_active']             = 'Aktiivinen';
$lang['custom_field_add_edit_disabled']           = 'Poistettu käytöstä';

# Ticket replies
$lang['ticket_reply']                             = 'Palvelupyyntövastaus';

# Admin Customizer Sidebar
$lang['asc_custom_fields']                        = 'Muokatut kentät';

# Contracts
$lang['contract_types']                           = 'Sopimustyypit';
$lang['contract_type']                            = 'Sopimustyyppi';
$lang['new_contract_type']                        = 'Luo uusi sopimustyyppi';
$lang['contract_type_lowercase']                  = 'sopimustyyppi';
$lang['contract_type_name']                       = 'Nimi';
$lang['contract_types_list_name']                 = 'Sopimustyyppi';

# Customizer Menu
$lang['acs_contracts']                            = 'Sopimukset';
$lang['acs_contract_types']                       = 'Sopimustyypit';

# Version 1.0.4
# Invoice Items
$lang['invoice_item_long_description']            = 'Pitkä kuvaus';

# Customers
$lang['clients_list_phone']                       = 'Puhelin';
$lang['client_expenses_tab']                      = 'Kulut';
$lang['customers_summary']                        = 'Asiakkaiden yhteenveto';
$lang['customers_summary_active']                 = 'Aktiiviset yhteystiedot';
$lang['customers_summary_inactive']               = 'Passiiviset yhteystiedot';
$lang['customers_summary_logged_in_today']        = 'Yhteystiedot kirjautuneet tänään';

# Authentication
$lang['admin_auth_forgot_password_email']         = 'Sähköpostiosoite';
$lang['admin_auth_forgot_password_heading']       = 'Unohtunut salasana';
$lang['admin_auth_login_heading']                 = 'Kirjaudu sisään';
$lang['admin_auth_login_email']                   = 'Sähköpostiosoite';
$lang['admin_auth_login_password']                = 'Salasana';
$lang['admin_auth_login_remember_me']             = 'Muista minut';
$lang['admin_auth_login_button']                  = 'Kirjaudu sisään';
$lang['admin_auth_login_fp']                      = 'Unohtunut salasana?';
$lang['admin_auth_reset_password_heading']        = 'Nollaa salasana';
$lang['admin_auth_reset_password']                = 'Salasana';
$lang['admin_auth_reset_password_repeat']         = 'Toista salasana';
$lang['admin_auth_invalid_email_or_password']     = 'Virheellinen sähköpostiosoite tai salasana';
$lang['admin_auth_inactive_account']              = 'Epäaktiivinen tili';

# Calender
$lang['calendar_estimate']                        = 'Tarjous';
$lang['calendar_invoice']                         = 'Lasku';
$lang['calendar_contract']                        = 'Sopimus';
$lang['calendar_customer_reminder']               = 'Asiakasmuistutus';
$lang['calendar_event']                           = 'Tapahtuma';
$lang['calendar_task']                            = 'Tehtävä';

# Leads
$lang['lead_edit_delete_tooltip']                 = 'Poista Liidi';
$lang['lead_attachments']                         = 'Liitteet';

# Admin Customizer Sidebar
$lang['acs_finance']                              = 'Rahoitus';

# Settings
$lang['settings_show_sale_agent_on_invoices']     = 'Näytä myyntiedustaja laskulla';
$lang['settings_show_sale_agent_on_estimates']    = 'Näytä myyntiedustaja tarjouksella';
$lang['settings_predefined_predefined_term']      = 'Ennalta määritellyt käyttöehdot';
$lang['settings_predefined_clientnote']           = 'Ennalta määritetty asiakaskohtainen huomautus';
$lang['settings_custom_pdf_logo_image_url']       = 'Mukautettu PDF yrityksen logo URL-osoite';
$lang['settings_custom_pdf_logo_image_url_tooltip'] = 'Todennäköisesti sinulla on ongelmia läpinäkyvissä PNG-kuvissa, joita käsitellään eri tavalla käytetyn php-imagick- tai php-gd-version mukaan. Yritä päivittää php-imagick ja poistaa php-gd käytöstä
. Jos jätät tämän kentän tyhjäksi, ladattua logoa käytetään.';

# General
$lang['sale_agent_string']                        = 'Myyntiedustaja';
$lang['amount_display_in_base_currency']          = 'Määrä näkyy perusvaluutassa - Käytä tätä raporttia vain, jos käytät yhtä valuuttaa maksuihin ja kuluihin.';
# Leads
$lang['leads_summary']                            = 'Liidien yhteenveto';

# Contracts
$lang['contract_value']                           = 'Sopimuksen arvo';
$lang['contract_trash']                           = 'Roskakori';
$lang['contracts_view_trash']                     = 'Näytä roskakori';
$lang['contracts_view_all']                       = 'Kaikki';
$lang['contracts_view_exclude_trashed']           = 'Piilota roskakorissa olevat sopimukset';
$lang['contract_value_tooltip']                   = 'Käytetään perusvaluuttaa.';
$lang['contract_trash_tooltip']                   = 'Jos siirrät sopimuksen roskakoriin, sitä ei näytetä asiakkaalle, se ei sisälly tilastoihin eikä sitä näytetä oletusarvoisesti sopimuslistauksessa.';
$lang['contract_summary_active']                  = 'Aktiivinen';
$lang['contract_renew_heading']                   = 'Uusi sopimus';
$lang['contract_summary_heading']                 = 'Sopimusten yhteenveto';
$lang['contract_summary_expired']                 = 'Päättynyt';
$lang['contract_summary_about_to_expire']         = 'Päättymässä pian';
$lang['contract_summary_recently_added']          = 'Viimeksi lisätyt';
$lang['contract_summary_trash']                   = 'Roskakori';
$lang['contract_summary_by_type']                 = 'Sopimukset tyypin mukaan';
$lang['contract_summary_by_type_value']           = 'Sopimusten arvo tyypin mukaan';
$lang['contract_renewed_successfully']            = 'Sopimus uusittu onnistuneesti';
$lang['contract_renewed_fail']                    = 'Ongelma sopimuksen uusimisessa. Ota yhteyttä järjestelmänvalvojaan';
$lang['no_contract_renewals_found']               = 'Tälle sopimukselle ei löytynyt uusimisia.';
$lang['no_contract_renewals_history_heading']     = 'Sopimuksen uusimishistoria';
$lang['contract_renewed_by']                      = '%s uusi tämän sopimuksen';
$lang['contract_renewal_deleted']                 = 'Uusiminen poistettiin onnistuneesti.';
$lang['contract_renewal_delete_fail']             = 'Sopimuksen uusimisen poistaminen epäonnistui. Ota yhteyttä järjestelmänvalvojaan';
$lang['contract_renewal_new_value']               = 'Uuden sopimuksen arvo: %s';
$lang['contract_renewal_old_value']               = 'Vanhan sopimuksen arvo: %s';
$lang['contract_renewal_new_start_date']          = 'Uusi aloituspäivä: %s';
$lang['contract_renewal_old_start_date']          = 'Vanhan sopimuksen alkamispäivä oli: %s';
$lang['contract_renewal_new_end_date']            = 'Uusi päättymispäivä: %s';
$lang['contract_renewal_old_end_date']            = 'Vanhan sopimuksen päättymispäivä oli: %s';
$lang['contract_attachment']                      = 'Liitteet';

# Admin Aside Menu
$lang['als_expenses']                             = 'Kulut';
$lang['als_reports_expenses']                     = 'Kulut';
$lang['als_expenses_vs_income']                   = 'Kulut vs. tulot';

# Invoices
$lang['invoice_attach_file']                      = 'Liitä tiedosto';
$lang['invoice_mark_as_sent']                     = 'Merkitse lähetetyksi';
$lang['invoice_marked_as_sent']                   = 'Lasku merkitty: lähetetty onnistuneesti';
$lang['invoice_marked_as_sent_failed']            = 'Laskua ei merkitty lähetetyksi';

# Payments
$lang['payment_transaction_id']                   = 'Tapahtuman ID';

# Expenses
$lang['acs_expense_categories']                   = 'Kulukategoriat';
$lang['expense_category']                         = 'Kulukategoria';
$lang['expense_category_lowercase']               = 'kulukategoria';
$lang['new_expense']                              = 'Uusi kulu';
$lang['expense_add_edit_name']                    = 'Kategorian nimi';
$lang['expense_add_edit_description']             = 'Kategorian kuvaus';
$lang['expense_categories']                       = 'Kulukategoriat';
$lang['new_expense_category']                     = 'Uusi kategoria';
$lang['dt_expense_description']                   = 'Kuvaus';
$lang['expense']                                  = 'Kulu';
$lang['expenses']                                 = 'Kulut';
$lang['expense_lowercase']                        = 'kulu';
$lang['expense_add_edit_customer']                = 'Asiakas';
$lang['expense_add_edit_note']                    = 'Merkintä';
$lang['expense_add_edit_date']                    = 'Kulupäivä';
$lang['expense_add_edit_amount']                  = 'Määrä';
$lang['expense_add_edit_billable']                = 'Laskutettava';
$lang['expense_add_edit_attach_receipt']          = 'Liitä kuitti';
$lang['expense_add_edit_reference_no']            = 'Viite #';
$lang['expense_receipt']                          = 'Kuitti';
$lang['expense_receipt_lowercase']                = 'kuitti';
$lang['expense_dt_table_heading_category']        = 'Kategoria';
$lang['expense_dt_table_heading_amount']          = 'Määrä';
$lang['expense_dt_table_heading_date']            = 'Päivä';
$lang['expense_dt_table_heading_reference_no']    = 'Viite #';
$lang['expense_dt_table_heading_customer']        = 'Asiakas';
$lang['expense_dt_table_heading_payment_mode']    = 'Maksutapa';
$lang['expense_converted_to_invoice']             = 'Kulu muunnettu onnistuneesti laskuksi';
$lang['expense_converted_to_invoice_fail']        = 'Tätä kulua ei pystytty muuntamaan laskuksi. Tarkista virheloki.';
$lang['expense_copy_success']                     = 'Kulu kopioitu onnistuneesti.';
$lang['expense_copy_fail']                        = 'Kulun kopiointi epäonnistui. Tarkista pakolliset kentät ja yritä uudelleen.';
$lang['expenses_list_all']                        = 'Kaikki';
$lang['expenses_list_billable']                   = 'Laskutettava';
$lang['expenses_list_non_billable']               = 'Ei laskutettava';
$lang['expenses_list_invoiced']                   = 'Laskutettu';
$lang['expenses_list_unbilled']                   = 'Ei laskutettu';
$lang['expenses_list_recurring']                  = 'Toistuva';
$lang['expense_invoice_delete_not_allowed']       = 'Et voi poistaa tätä kulua. Kulu on jo laskutettu.';
$lang['expense_convert_to_invoice']               = 'Muunna laskuksi';
$lang['expense_edit']                             = 'Muokkaa kulua';
$lang['expense_delete']                           = 'Poista';
$lang['expense_copy']                             = 'Kopioi';
$lang['expense_invoice_not_created']              = 'Laskua ei ole luotu';
$lang['expense_billed']                           = 'Laskutettu';
$lang['expense_not_billed']                       = 'Ei laskutettu';
$lang['expense_customer']                         = 'Asiakas';
$lang['expense_note']                             = 'Merkintä:';
$lang['expense_date']                             = 'Päivä:';
$lang['expense_ref_noe']                          = 'Viite #:';
$lang['expense_amount']                           = 'Määrä:';
$lang['expense_recurring_indicator']              = 'Toistuva';
$lang['expense_already_invoiced']                 = 'Tämä kulu on jo laskutettu';
$lang['expense_recurring_auto_create_invoice']    = 'Luo lasku automaattisesti';
$lang['expense_recurring_send_custom_on_renew']   = 'Lähetä lasku asiakkaalle, kun kulu uusitaan';
$lang['expense_recurring_autocreate_invoice_tooltip'] = 'Jos tämä vaihtoehto valitaan, lasku luodaan automaattisesti, kun toistuva kulu uusitaan.';
$lang['expenses_yearly_by_categories']            = 'Kulut vuosittain luokittain';
$lang['total_expenses_for']                           = 'Kokonaiskulut vuodelle'; // year
$lang['expenses_report_for']                          = 'Kulut vuodelle'; // year

# Custom fields
$lang['custom_field_required']                    = 'Vaadittu';
$lang['custom_field_show_on_pdf']                 = 'Näytä PDF:llä';
$lang['custom_field_leads']                       = 'Liidit';
$lang['custom_field_customers']                   = 'Asiakkaat';
$lang['custom_field_staff']                       = 'Henkilöstö';
$lang['custom_field_contracts']                   = 'Sopimukset';
$lang['custom_field_tasks']                       = 'Tehtävät';
$lang['custom_field_expenses']                    = 'Kulut';
$lang['custom_field_invoice']                     = 'Lasku';
$lang['custom_field_estimate']                    = 'Tarjous';

# Tickets
$lang['ticket_single_private_staff_notes']        = 'Sisäiset muistiinpanot';

# Business News
$lang['business_news']                            = 'Talousuutiset';

# Navigation
$lang['nav_todo_items']                           = '"Todo" listaus';

# Contracts
$lang['clients_contracts_type']                   = 'Sopimustyyppi';

# Version 1.0.5
# General
$lang['no_tax']                                   = 'Ei veroa';
$lang['numbers_not_formatted_while_editing']      = 'Syöttökentän numeroa ei muotoilla muokkauksen aikana. Älä yritä muotoilla sitä manuaalisesti.';
# Contracts
$lang['contracts_view_expired']                   = 'Vanhentunut';
$lang['contracts_view_without_dateend']           = 'Sopimukset ilman päättymispäivämäärää';

# Email Templates
$lang['email_template_contracts_fields_heading']  = 'Sopimukset';

# Invoices General
$lang['invoice_estimate_general_options']         = 'Yleiset vaihtoehdot';
$lang['invoice_table_item_description']           = 'Kuvaus';
$lang['invoice_recurring_indicator']              = 'Toistuva';

# Estimates
$lang['estimate_convert_to_invoice_successfully'] = 'Tarjous muunnettu laskuksi onnistuneesti';
$lang['estimate_table_item_description']          = 'Kuvaus';

# Version 1.0.6
# Invoices
# Currencies
$lang['cant_delete_base_currency']                = 'Et voi poistaa perusvaluuttaa. Sinun on määritettävä uusi perusvaluutta ja suoritettava poisto.';
$lang['invoice_copy']                             = 'Kopioi lasku';
$lang['invoice_copy_success']                     = 'Lasku kopioitiin onnistuneesti';
$lang['invoice_copy_fail']                        = 'Laskun kopiointi epäonnistui';
$lang['invoice_due_after_help']                   = 'Aseta nolla välttääksesi laskennan';
$lang['show_shipping_on_invoice']                 = 'Näytä toimitustiedot laskussa';

# Estimates
$lang['show_shipping_on_estimate']                = 'Näytä toimitustiedot tarjouksella';
$lang['is_invoiced_estimate_delete_error']        = 'Tämä tarjous on jo laskutettu. Et voi poistaa tarjousta.';

# Customers & Invoices / Estimates
$lang['ship_to']                                  = 'Lähetä osoitteeseen';
$lang['customer_profile_details']                 = 'Asiakkaan tiedot';
$lang['billing_shipping']                         = 'Laskutus ja postitus';
$lang['billing_address']                          = 'Laskutusosoite';
$lang['shipping_address']                         = 'Toimitusosoite';
$lang['billing_street']                           = 'Katu';
$lang['billing_city']                             = 'Kaupunki';
$lang['billing_state']                            = 'Osavaltio';
$lang['billing_zip']                              = 'Postinumero';
$lang['billing_country']                          = 'Maa';
$lang['shipping_street']                          = 'Katu';
$lang['shipping_city']                            = 'Kaupunki';
$lang['shipping_state']                           = 'Osavaltio';
$lang['shipping_zip']                             = 'Postinumero';
$lang['shipping_country']                         = 'Maa';
$lang['get_shipping_from_customer_profile']       = 'Hanki kuljetustiedot asiakasprofiilista';

# Customer
$lang['customer_default_currency']                = 'Oletusvaluutta';
$lang['customer_update_address_info_on_invoices'] = 'Päivitä kaikkien aikaisempien laskujen/tarjousten toimitus-/laskutustiedot';
$lang['customer_update_address_info_on_invoices_help'] = 'Jos valitset tämän kentän, toimitus- ja laskutustiedot päivitetään kaikkiin laskuihin ja tarjouksiin. Huomaa: Laskut, joiden tila on maksettu, eivät muutu.';
$lang['setup_google_api_key_customer_map']        = 'Aseta Google API -avain nähdäksesi asiakaskartan';
$lang['customer_attachments_file']                = 'Tiedosto';
$lang['client_send_set_password_email']           = 'Lähetä asiakkaalle "aseta uusi salasana" sähköposti';
$lang['customer_billing_same_as_profile']         = 'Sama kuin asiakasinfo';
$lang['customer_billing_copy']                    = 'Kopioi laskutusosoite';
$lang['customer_map']                             = 'Kartta';
$lang['set_password_email_sent_to_client']        = 'Sähköposti salasanan asettamiseksi lähetettiin onnistuneesti yhteyshenkilölle';
$lang['set_password_email_sent_to_client_and_profile_updated'] = 'Profiili päivitetty ja salasanan asettamista koskeva sähköposti lähetetty onnistuneesti yhteyshenkilölle';
$lang['customer_attachments']                     = 'Tiedostot';
$lang['customer_longitude']                       = 'Pituusaste (Google Maps)';
$lang['customer_latitude']                        = 'Leveysaste (Google Maps)';

# Authentication
$lang['admin_auth_set_password']                  = 'Salasana';
$lang['admin_auth_set_password_repeat']           = 'Toista salasana';
$lang['admin_auth_set_password_heading']          = 'Aseta salasana';

# General
$lang['apply']                                    = 'Lisää';
$lang['department_calendar_id']                   = 'Google Calendar ID';
$lang['localization_default_language']            = 'Oletuskieli';
$lang['system_default_string']                    = 'Järjestelmän oletusarvo';
$lang['advanced_options']                         = 'Edistyneet asetukset';

# Expenses
$lang['expense_list_invoice']                     = 'Laskutettu';
$lang['expense_list_billed']                      = 'Laskutetaan';
$lang['expense_list_unbilled']                    = 'Ei laskua';

# Leads
$lang['lead_merge_custom_field']                  = 'Yhdistä mukautetuksi kentäksi';
$lang['lead_merge_custom_field_existing']         = 'Yhdistä tietokantakenttään';
$lang['lead_dont_merge_custom_field']             = 'Älä yhdistä';
$lang['lost_leads']                               = 'Hävityt liidit';
$lang['junk_leads']                               = 'Roskaliidit';
$lang['lead_mark_as_lost']                        = 'Merkitse hävityksi';
$lang['lead_unmark_as_lost']                      = 'Poista merkintä hävityksi';
$lang['lead_marked_as_lost']                      = 'Liidi merkitty hävityksi onnistuneesti';
$lang['lead_unmarked_as_lost']                    = 'Liidin merkintä hävityksi poistettu onnistuneesti';
$lang['leads_status_color']                       = 'Väri';
$lang['lead_mark_as_junk']                        = 'Merkitse roskaksi';
$lang['lead_unmark_as_junk']                      = 'Poista merkintä roskaksi';
$lang['lead_marked_as_junk']                      = 'Liidi merkitty roskaksi onnistuneesti';
$lang['lead_unmarked_as_junk']                    = 'Liidin merkintä roskaksi poistettu onnistuneesti';
$lang['lead_not_found']                           = 'Liidiä ei löytynyt';
$lang['lead_lost']                                = 'Hävitty';
$lang['lead_junk']                                = 'Roskaa';
$lang['leads_not_assigned']                       = 'Ei määritetty';

# Contacts
$lang['contract_not_visible_to_client']           = 'Piilota asiakkaalta';
$lang['contract_edit_overview']                   = 'Sopimuskatsaus';
$lang['contract_attachments']                     = 'Liitteet';

# Tasks
$lang['task_view_make_public']                    = 'Tee julkiseksi';
$lang['task_is_private']                          = 'Yksityinen tehtävä';
$lang['task_finished']                            = 'Valmistunut';
$lang['task_single_related']                      = 'Liittyy kohteeseen';
$lang['task_unmark_as_complete']                  = 'Poista valmis-merkintä';
$lang['task_unmarked_as_complete']                = 'Tehtävän valmis-merkintä poistettu';
$lang['task_relation']                            = 'Liittyy kohteeseen';
$lang['task_public']                              = 'Julkinen';
$lang['task_public_help']                         = 'Jos asetat tämän tehtävän julkiseksi, se on näkyvissä kaikille henkilöstön jäsenille. Muuten se on näkyvissä vain jäsenille, jotka ovat vastuuhenkilöitä, seuraajia, luojia tai järjestelmänvalvojia';

# Settings
$lang['settings_general_favicon']                 = 'Favicon';
$lang['settings_output_client_pdfs_from_admin_area_in_client_language'] = 'Tulosta asiakkaan PDF-dokumentit ylläpitoalueelta asiakkaan kielellä';
$lang['settings_output_client_pdfs_from_admin_area_in_client_language_help'] = 'Jos tämä vaihtoehto on asetettu kylläksi ja esim. järjestelmän oletuskieli on englanti ja asiakas on asettanut kieleksi ranskan, PDF-dokumentit tulostetaan asiakkaan kielellä';
$lang['settings_default_tax']                     = 'Oletusvero';
$lang['setup_calendar_by_departments']            = 'Määritä kalenteri osastoittain';
$lang['settings_calendar']                        = 'Kalenteri';
$lang['settings_sales_invoice_due_after']         = 'Laskun eräpäivä (päivän kuluttua)';
$lang['settings_google_api']                      = 'Google API -avain';
$lang['settings_gcal_main_calendar_id']           = 'Google-kalenterin ID';
$lang['settings_gcal_main_calendar_id_help']      = 'Tämä on yrityksen pääkalenteri. Kaikki tämän kalenterin tapahtumat näytetään. Jos haluat määrittää kalenterin osastojen perusteella, voit lisätä osaston Google-kalenterin ID:n.';
$lang['show_on_calendar']                         = 'Näytä kalenterissa';
$lang['show_invoices_on_calendar']                = 'Laskut';
$lang['show_estimates_on_calendar']               = 'Tarjoukset';
$lang['show_contracts_on_calendar']               = 'Sopimukset';
$lang['show_tasks_on_calendar']                   = 'Tehtävät';
$lang['show_customer_reminders_on_calendar']      = 'Asiakasmuistutukset';

# Leads
$lang['copy_custom_fields_convert_to_customer']   = 'Kopioi mukautetut kentät asiakasprofiiliin';
$lang['copy_custom_fields_convert_to_customer_help'] = 'Jos jokin seuraavista mukautetuista kentistä ei ole olemassa asiakkaalle, se luodaan automaattisesti samalla nimellä, muuten vain arvo kopioidaan liidiprofiilista.';
$lang['lead_profile']                             = 'Profiili';
$lang['lead_is_client']                           = 'Asiakas';
$lang['leads_email_integration_folder_no_encryption'] = 'Ei salausta';
$lang['leads_email_integration']                  = 'Sähköpostien integrointi';
$lang['leads_email_active']                       = 'Aktiivinen';
$lang['leads_email_integration_imap']             = 'IMAP-palvelin';
$lang['leads_email_integration_email']            = 'Sähköpostiosoite (käyttäjätunnus)';
$lang['leads_email_integration_password']         = 'Salasana';
$lang['leads_email_integration_default_source']   = 'Oletuslähde';
$lang['leads_email_integration_check_every']      = 'Tarkista välein (minuuttia)';
$lang['leads_email_integration_default_assigned'] = 'Uuden liidin vastuuhenkilö';
$lang['leads_email_encryption']                   = 'Salaus';
$lang['leads_email_integration_updated']          = 'Sähköposti-integraatio päivitetty';
$lang['leads_email_integration_default_status']   = 'Oletustila';
$lang['leads_email_integration_folder']           = 'Kansio';
$lang['leads_email_integration_notify_when_lead_imported'] = 'Ilmoita kun liidi on tuotu';
$lang['leads_email_integration_only_check_unseen_emails'] = 'Tarkista vain avaamattomat sähköpostit';
$lang['leads_email_integration_only_check_unseen_emails_help'] = 'Skripti asettaa automaattisesti sähköpostin luetuksi tarkistuksen jälkeen. Tätä käytetään estämään samojen sähköpostien tarkistaminen uudelleen. Tämän vaihtoehdon poistaminen ei ole suositeltavaa, jos sähköposteja on paljon.';
$lang['leads_email_integration_notify_when_lead_contact_more_times'] = 'Ilmoita jos liidi lähettää sähköpostia useita kertoja';
$lang['leads_email_integration_test_connection']  = 'Testaa IMAP-yhteys';
$lang['lead_email_connection_ok']                 = 'IMAP-yhteys on kunnossa';
$lang['lead_email_connection_not_ok']             = 'IMAP-yhteys ei toimi';
$lang['lead_email_activity']                      = 'Sähköpostitapahtumat';
$lang['leads_email_integration_notify_roles']     = 'Ilmoitettavat roolit';
$lang['leads_email_integration_notify_staff']     = 'Ilmoitettavat henkilöt';
$lang['lead_public']                              = 'Julkinen';

# Knowledge Base
$lang['kb_group_color']                           = 'Väri';
$lang['kb_group_order']                           = 'Järjestys';

# Utilities - BULK PDF Exporter
$lang['bulk_pdf_exporter']                        = 'PDF-joukkovienti';
$lang['bulk_export_pdf_payments']                 = 'Maksut';
$lang['bulk_export_pdf_estimates']                = 'Tarjoukset';
$lang['bulk_export_pdf_invoices']                 = 'Laskut';
$lang['bulk_pdf_export_button']                   = 'Vie';
$lang['bulk_pdf_export_select_type']              = 'Valitse tyyppi';
$lang['no_data_found_bulk_pdf_export']            = 'Vientiä varten ei löytynyt tietoja';
$lang['bulk_export_status_all']                   = 'Kaikki';
$lang['bulk_export_status']                       = 'Tila';
$lang['bulk_export_zip_payment_modes']            = 'Maksut tehty';
$lang['bulk_export_include_tag']                  = 'Sisällytä tunniste';
$lang['bulk_export_include_tag_help']             = 'esim. Alkuperäinen tai Kopio. Tunniste tulostetaan PDF:ään. Suositeltavaa käyttää vain yhtä tunnistetta';


# Version 1.0.7
## Customers - portal
$lang['clients_nav_proposals']                    = 'Ehdotukset';
$lang['clients_nav_support']                      = 'Tuki';

# General
$lang['more']                                     = 'Lisää';
$lang['add_item']                                 = 'Lisää tuote';
$lang['goto_admin_area']                          = 'Siirry järjestelmänvalvojan alueelle';
$lang['delete']                                   = 'Poista %s';
$lang['welcome_top']                              = 'Tervetuloa %s';

# Customers
$lang['customer_permissions']                     = 'Oikeudet';
$lang['customer_permission_invoice']              = 'Laskut';
$lang['customer_permission_estimate']             = 'Tarjoukset';
$lang['customer_permission_proposal']             = 'Ehdotukset';
$lang['customer_permission_contract']             = 'Sopimukset';
$lang['customer_permission_support']              = 'Tuki';

#Tasks
$lang['task_related_to']                          = 'Liittyen';

# Send file
$lang['custom_file_fail_send']                    = 'Tiedoston lähettäminen epäonnistui';
$lang['custom_file_success_send']                 = 'Tiedoston lähetys onnistui %s';
$lang['send_file_subject']                        = 'Sähköpostin aihe';
$lang['send_file_email']                          = 'Sähköpostiosoite';
$lang['send_file_message']                        = 'Viesti';
$lang['send_file']                                = 'Lähetä tiedosto';
$lang['add_checklist_item']                       = 'Uusi kohta';
$lang['task_checklist_items']                     = 'Tarkistuslistan kohdat';

# Import
$lang['default_pass_clients_import']              = 'Oletussalasana kaikille yhteystiedoille';
$lang['simulate_import']                          = 'Simuloi tuontia';
$lang['import_upload_failed']                     = 'Lähettäminen epäonnistui';
$lang['import_total_imported']                    = 'Tuodut yhteensä: %s';
$lang['import_leads']                             = 'Tuo liidejä';
$lang['import_customers']                         = 'Tuo asiakkaita';
$lang['choose_csv_file']                          = 'Valitse CSV tiedosto';
$lang['import']                                   = 'Tuonti';
$lang['lead_import_status']                       = 'Tila';
$lang['lead_import_source']                       = 'Lähde';

# Bulk PDF Export
$lang['bulk_export_pdf_proposals']                = 'Ehdotukset';

# Invoices
$lang['delete_invoice']                           = 'Poista';
$lang['items']                                    = 'Tuotteet';
$lang['support']                                  = 'Tuki';
$lang['new_ticket']                               = 'Luo uusi palvelupyyntö';

# Reminders
$lang['calendar_lead_reminder']                   = 'Liidimuistutus';
$lang['lead_set_reminder_title']                  = 'Aseta liidimuistutus';
$lang['set_reminder_tooltip']                     = 'Tämän vaihtoehdon avulla et voi koskaan unohtaa mitään asiakkaistasi.';
$lang['client_reminders_tab']                     = 'Muistutukset';
$lang['leads_reminders_tab']                      = 'Muistutukset';

# Tickets
$lang['delete_ticket_reply']                      = 'Poista vastaus';
$lang['ticket_priority_edit']                     = 'Muokkaa prioriteettia';
$lang['ticket_priority_add']                      = 'Lisää prioriteetti';
$lang['ticket_status_edit']                       = 'Muokkaa palvelupyynnön tilaa';
$lang['ticket_service_edit']                      = 'Muokkaa palvelupyynnön palvelua';
$lang['edit_department']                          = 'Muokkaa osastoa';

# Expenses
$lang['edit_expense_category']                    = 'Muokkaa kululuokkaa';

# Settings
$lang['customer_default_country']                 = 'Oletusmaa';
$lang['settings_sales_require_client_logged_in_to_view_estimate'] = 'Vaadi asiakkaan kirjautuminen nähdäkseen tarjouksen';
$lang['set_reminder']                             = 'Aseta muistutus';
$lang['set_reminder_date']                        = 'Ilmoituspäivä';
$lang['reminder_description']                     = 'Aseta kuvaus';
$lang['reminder_notify_me_by_email']              = 'Lähetä myös muistutus sähköpostitse';
$lang['reminder_added_successfully']              = 'Muistutus lisätty onnistuneesti. Sinulle ilmoitetaan ajoissa.';
$lang['reminder_description']                     = 'Kuvaus';
$lang['reminder_date']                            = 'Päivä';
$lang['reminder_staff']                           = 'Muistuta';
$lang['reminder_is_notified']                     = 'On ilmoitettu?';
$lang['reminder_is_notified_boolean_no']          = 'Ei';
$lang['reminder_is_notified_boolean_yes']         = 'Kyllä';
$lang['reminder_set_to']                          = 'Aseta muistutus';
$lang['reminder_deleted']                         = 'Muistutus poistettu onnistuneesti';
$lang['reminder_failed_to_delete']                = 'Muistutuksen poistaminen epäonnistui';
$lang['show_invoice_estimate_status_on_pdf']      = 'Näytä laskun/tarjouksen tila PDF:ssä';
$lang['email_piping_default_priority']            = 'Oletusprioriteetti (Piping)';
$lang['show_lead_reminders_on_calendar']          = 'Liidimuistutukset';
$lang['tickets_piping']                           = 'Sähköpostin putkitus (Piping)';
$lang['email_piping_only_replies']                = 'Vain sähköpostitse sallitut vastaukset';
$lang['email_piping_only_registered']             = 'Piping vain rekisteröityneille käyttäjille';

# Estimates
$lang['view_estimate_as_client']                  = 'Näytä tarjous asiakkaana';
$lang['estimate_mark_as']                         = 'Merkitse: %s';
$lang['estimate_status_changed_success']          = 'Tarjouksen tila muuttunut';
$lang['estimate_status_changed_fail']             = 'Tarjouksen tilan muuttaminen epäonnistui';

# Proposals
$lang['proposal_to']                              = 'Yritys / Nimi';
$lang['proposal_date']                            = 'Päivä';
$lang['proposal_address']                         = 'Osoite';
$lang['proposal_phone']                           = 'Puhelin';
$lang['proposal_email']                           = 'Sähköposti';
$lang['proposal_date_created']                    = 'Päivämäärä jolloin luotu';
$lang['proposal_open_till']                       = 'Avoin vielä';
$lang['proposal_status_open']                     = 'Avoin';
$lang['proposal_status_accepted']                 = 'Hyväksytty';
$lang['proposal_status_declined']                 = 'Hylätty';
$lang['proposal_status_sent']                     = 'Lähetetty';
$lang['proposal_expired']                         = 'Vanhentunut';
$lang['proposal_subject']                         = 'Aihe';
$lang['proposal_total']                           = 'Yhteensä';
$lang['proposal_status']                          = 'Tila';
$lang['proposals_list_all']                       = 'Kaikki';
$lang['proposals_leads_related']                  = 'Liittyvät liidit';
$lang['proposals_customers_related']              = 'Liittyvät asiakkaat';
$lang['proposal_related']                         = 'Liittyvät';
$lang['proposal_for_lead']                        = 'Liidi';
$lang['proposal_for_customer']                    = 'Asiakas';
$lang['proposal']                                 = 'Ehdotus';
$lang['proposal_lowercase']                       = 'ehdotus';
$lang['proposals']                                = 'Ehdotukset';
$lang['proposals_lowercase']                      = 'ehdotukset';
$lang['new_proposal']                             = 'Luo uusi ehdotus';
$lang['proposal_currency']                        = 'Valuutta';
$lang['proposal_allow_comments']                  = 'Salli kommentit';
$lang['proposal_allow_comments_help']             = 'Jos valitset tämän vaihtoehdon, kommentit sallitaan, kun asiakas tarkastelee ehdotusta.';
$lang['proposal_edit']                            = 'Muokkaa';
$lang['proposal_pdf']                             = 'PDF';
$lang['proposal_send_to_email']                   = 'Lähetä sähköpostiin';
$lang['proposal_send_to_email_title']             = 'Lähetä ehdotus sähköpostiin';
$lang['proposal_attach_pdf']                      = 'Liitä PDF';
$lang['proposal_preview_template']                = 'Esikatsele mallia';
$lang['proposal_view']                            = 'Näytä ehdotus';
$lang['proposal_copy']                            = 'Kopioi';
$lang['proposal_delete']                          = 'Poista';
$lang['proposal_to']                              = 'Vastaanottajan nimi:';
$lang['proposal_add_comment']                     = 'Lisää kommentti';
$lang['proposal_sent_to_email_success']           = 'Ehdotus lähetetty sähköpostiin onnistuneesti';
$lang['proposal_sent_to_email_fail']              = 'Ehdotuksen lähettäminen sähköpostiin epäonnistui';
$lang['proposal_copy_fail']                       = 'Ehdotuksen kopiointi epäonnistui';
$lang['proposal_copy_success']                    = 'Ehdotus kopioitu onnistuneesti';
$lang['proposal_status_changed_success']          = 'Ehdotuksen tila muuttui onnistuneesti';
$lang['proposal_status_changed_fail']             = 'Ehdotuksen tilaa ei voitu muuttaa';
$lang['proposal_assigned']                        = 'Määrätyt';
$lang['proposal_comments']                        = 'Kommentit';
$lang['proposal_convert']                         = 'Muunna';
$lang['proposal_convert_estimate']                = 'Tarjous';
$lang['proposal_convert_invoice']                 = 'Lasku';
$lang['proposal_convert_to_estimate']             = 'Muunna tarjoukseksi';
$lang['proposal_convert_to_invoice']              = 'Muunna laskuksi';
$lang['proposal_convert_to_lead_disabled_help']   = 'Sinun on muunnettava liidi asiakkaaksi luodaksesi %s';
$lang['proposal_convert_not_related_help']        = 'Ehdotuksen on liityttävä asiakkaaseen muuntaaksesi sen kohteeksi %s';
$lang['proposal_converted_to_estimate_success']   = 'Ehdotus muunnettu tarjoukseksi onnistuneesti';
$lang['proposal_converted_to_invoice_success']    = 'Ehdotus muunnettu laskuksi onnistuneesti';
$lang['proposal_converted_to_estimate_fail']      = 'Ehdotuksen muuntaminen tarjoukseksi epäonnistui';
$lang['proposal_converted_to_invoice_fail']       = 'Ehdotuksen muuntaminen laskuksi epäonnistui';

# Proposals - view proposal template
$lang['proposal_total_info']                      = 'Yhteensä %s';
$lang['proposal_accept_info']                     = 'Hyväksy ehdotus';
$lang['proposal_decline_info']                    = 'Hylkää ehdotus';
$lang['proposal_pdf_info']                        = 'PDF';

# Customers Portal
$lang['customer_reset_action']                    = 'Nollaa';
$lang['customer_reset_password_heading']          = 'Nollaa salasana';
$lang['customer_forgot_password_heading']         = 'Unohtunut salasana';
$lang['customer_forgot_password']                 = 'Unohtuiko salasana?';
$lang['customer_reset_password']                  = 'Salasana';
$lang['customer_reset_password_repeat']           = 'Toista salasana';
$lang['customer_forgot_password_email']           = 'Sähköpostiosoite';
$lang['customer_forgot_password_submit']          = 'Lähetä';
$lang['customer_ticket_subject']                  = 'Aihe';

# Email templates
$lang['email_template_proposals_fields_heading']  = 'Ehdotukset';

# Tasks
$lang['add_task_attachments']                     = 'Liite';
$lang['task_view_attachments']                    = 'Liitteet';
$lang['task_view_description']                    = 'Kuvaus';

# Customer Groups
$lang['customer_group_add_heading']               = 'Lisää uusi asiakasryhmä';
$lang['customer_group_edit_heading']              = 'Muokkaa asiakasryhmää';
$lang['new_customer_group']                       = 'Uusi asiakasryhmä';
$lang['customer_group_name']                      = 'Nimi';
$lang['customer_groups']                          = 'Ryhmät';
$lang['customer_group']                           = 'Asiakasryhmä';
$lang['customer_group_lowercase']                 = 'asiakasryhmä';
$lang['customer_have_invoices_by']                = 'Sisältää laskuja tilan mukaan %s';
$lang['customer_have_estimates_by']               = 'Sisältää tarjouksia tilan mukaan %s';
$lang['customer_have_contracts_by_type']          = 'Sopimustyypeittäin %s';

# Custom fields
$lang['custom_field_show_on_table']               = 'Näytä taulukossa';
$lang['custom_field_show_on_client_portal']       = 'Näytä asiakasportaalissa';
$lang['custom_field_show_on_client_portal_help']  = 'Jos tämä kenttä on valittu, myös taulukot näytetään';
$lang['custom_field_visibility']                  = 'Näkyvyys';

# Knowledge Base
$lang['view_articles_list']                       = 'Näytä artikkelit';
$lang['view_articles_list_all']                   = 'Kaikki artikkelit';
$lang['als_all_articles']                         = 'Artikkelit';
$lang['als_kb_groups']                            = 'Ryhmät';

# Spam Filter - Tickets
$lang['spam_filters']                             = 'Roskapostisuodattimet';
$lang['spam_filter']                              = 'Roskapostisuodatin';
$lang['new_spam_filter']                          = 'Uusi roskapostisuodatin';
$lang['spam_filter_blocked_senders']              = 'Estetyt lähettäjät';
$lang['spam_filter_blocked_subjects']             = 'Estetyt aiheet';
$lang['spam_filter_blocked_phrases']              = 'Estetyt lauseet';
$lang['spam_filter_content']                      = 'Sisältö';
$lang['spamfilter_edit_heading']                  = 'Muokkaa roskapostisuodatinta';
$lang['spamfilter_add_heading']                   = 'Lisää roskapostisuodatin';
$lang['spamfilter_type']                          = 'Tyyppi';
$lang['spamfilter_type_subject']                  = 'Aihe';
$lang['spamfilter_type_sender']                   = 'Lähettäjä';
$lang['spamfilter_type_phrase']                   = 'Lause';

# Tickets
$lang['block_sender']                             = 'Estä lähettäjä';
$lang['sender_blocked']                           = 'Lähettäjä estetty';
$lang['sender_blocked_successfully']              = 'Lähettäjä estetty onnistuneesti';
$lang['ticket_date_created']                      = 'Luotu';

#KB
$lang['edit_kb_group']                            = 'Muokkaa ryhmää';

# Leads
$lang['edit_source']                              = 'Muokkaa lähdettä';
$lang['edit_status']                              = 'Muokkaa tilaa';

# Contacts
$lang['contract_type_edit']                       = 'Muokkaa sopimustyyppiä';

# Reports
$lang['report_by_customer_groups']                = 'Kokonaissumma asiakasryhmittäin';

#Utilities
$lang['ticket_pipe_log']                          = 'Palvelupyynnön putkiloki';
$lang['ticket_pipe_name']                         = 'Nimeltä';
$lang['ticket_pipe_email_to']                     = 'Vastaanottaja';
$lang['ticket_pipe_email']                        = 'Sähköpostista';
$lang['ticket_pipe_subject']                      = 'Aihe';
$lang['ticket_pipe_message']                      = 'Viesti';
$lang['ticket_pipe_date']                         = 'Päivä';
$lang['ticket_pipe_status']                       = 'Tila';

# Home
$lang['home_latest_activity']                     = 'Viimeisin toiminta';
$lang['home_my_tasks']                            = 'Omat tehtävät';
$lang['home_latest_activity']                     = 'Viimeisin toiminta';
$lang['home_my_todo_items']                       = 'Oma muistilista';
$lang['home_widget_view_all']                     = 'Näytä kaikki';
$lang['home_stats_full_report']                   = 'Koko raportti';

# Validation
$lang['form_validation_required']                 = '{field} kenttä vaaditaan.';
$lang['form_validation_valid_email']              = '{field} kentän on sisällettävä kelvollinen sähköpostiosoite.';
$lang['form_validation_matches']                  = '{field} kenttä ei vastaa {param} -kenttää.';
$lang['form_validation_is_unique']                = '{field} kentän on sisällettävä yksilöivä arvo.';

# Version 1.0.8
# Notifications & Leads/Estimates/Invoices Activity Log
$lang['not_event']                                = 'Kalenteritapahtuma tänään - %s ...';
$lang['not_event_public']                         = 'Julkinen tapahtuma alkaa tänään - %s ...';
$lang['not_contract_expiry_reminder']             = 'Muistutus sopimuksen päättymisestä - %s ...';
$lang['not_recurring_expense_cron_activity_heading'] = 'Toistuvien kulujen Cron Job -aktiviteetti';
$lang['not_recurring_invoices_cron_activity_heading'] = 'Toistuvien laskujen Cron Job -aktiviteetti';
$lang['not_recurring_total_renewed']              = 'Yhteensä uusittu: %s';
$lang['not_recurring_expenses_action_taken_from'] = 'Toimi tehty toistuvasta kulusta';
$lang['not_invoice_created']                      = 'Lasku luotu:';
$lang['not_invoice_renewed']                      = 'Uusittu lasku:';
$lang['not_expense_renewed']                      = 'Uusittu kulu:';
$lang['not_invoice_sent_to_customer']             = 'Lasku lähetetty asiakkaalle: %s';
$lang['not_invoice_sent_yes']                     = 'Kyllä';
$lang['not_invoice_sent_not']                     = 'Ei';
$lang['not_action_taken_from_recurring_invoice']  = 'Toimi tehty toistuvasta laskusta:';
$lang['not_new_reminder_for']                     = 'Uusi muistutus kohteelle %s';
$lang['not_received_one_or_more_messages_lead']   = 'Vastaanotettu uusi sähköposti liidiltä';
$lang['not_received_lead_imported_email_integration'] = 'Liidi tuotu sähköposti-integraatiosta';
$lang['not_lead_imported_attachment']             = 'Tuotu liite sähköpostista';
$lang['not_estimate_status_change']               = 'Tarjouksen tila päivitetty';
$lang['not_estimate_status_updated']              = 'Tarjouksen tila päivitetty: %s -> %s';
$lang['not_assigned_lead_to_you']                 = 'liidi %s on osoitettu sinulle';
$lang['not_lead_activity_assigned_to']            = '%s osoitettu kohteelle %s';
$lang['not_lead_activity_attachment_deleted']     = 'Liite poistettu';
$lang['not_lead_activity_status_updated']         = '%s päivitti liidin tilan: %s -> %s';
$lang['not_lead_activity_contacted']              = '%s otti yhteyttä tähän liidiin %s';
$lang['not_lead_activity_created']                = '%s loi liidin';
$lang['not_lead_activity_marked_lost']            = 'Merkitty hävityksi';
$lang['not_lead_activity_unmarked_lost']          = 'Merkintä hävityksi poistettu';
$lang['not_lead_activity_marked_junk']            = 'Merkitty roskaksi';
$lang['not_lead_activity_unmarked_junk']          = 'Merkintä roskaksi poistettu';
$lang['not_lead_activity_added_attachment']       = 'Liite lisätty';
$lang['not_lead_activity_converted_email']        = 'Liidin sähköposti muutettu. Alkuperäinen sähköposti oli %s ja asiakkaaksi lisätty sähköpostilla %s';
$lang['not_lead_activity_converted']              = '%s muunsi tämän liidin asiakkaaksi';
$lang['not_liked_your_post']                      = '%s tykkäsi julkaisustasi %s ...';
$lang['not_commented_your_post']                  = '%s kommentoi julkaisuasi %s ...';
$lang['not_liked_your_comment']                   = '%s tykkäsi kommentistasi %s ...';
$lang['not_proposal_assigned_to_you']             = 'Ehdotus on osoitettu sinulle - %s ...';
$lang['not_proposal_comment_from_client']         = 'Uusi kommentti asiakkaalta ehdotukseen %s ...';
$lang['not_proposal_proposal_accepted']           = 'Ehdotus hyväksytty - %s';
$lang['not_proposal_proposal_declined']           = 'Ehdotus hylätty - %s';
$lang['not_task_added_you_as_follower']           = 'lisäsi sinut seuraajaksi tehtävään %s ...';
$lang['not_task_added_someone_as_follower']       = 'lisäsi %s seuraajaksi tehtävään %s ...';
$lang['not_task_added_himself_as_follower']       = 'lisäsi itsensä seuraajaksi tehtävään %s ...';
$lang['not_task_assigned_to_you']                 = 'osoitti tehtävän sinulle %s ...';
$lang['not_task_assigned_someone']                = 'osoitti %s tehtävään %s ...';
$lang['not_task_will_do_user']                    = 'tekee tehtävän %s ...';
$lang['not_task_new_attachment']                  = 'Uusi liite lisätty';
$lang['not_task_marked_as_complete']              = 'merkitsi tehtävän valmiiksi %s';
$lang['not_task_unmarked_as_complete']            = 'poisti tehtävän valmis-merkinnän %s';
$lang['not_ticket_assigned_to_you']               = 'Palvelupyyntö on osoitettu sinulle - %s ...';
$lang['not_ticket_reassigned_to_you']             = 'Palvelupyyntö on osoitettu sinulle uudelleen - %s ...';
$lang['not_estimate_customer_accepted']           = 'Onnittelut! Asiakas hyväksyi tarjouksen numero %s';
$lang['not_estimate_customer_declined']           = 'Asiakas hylkäsi tarjouksen numero %s';
$lang['estimate_activity_converted']              = 'muunsi tämän tarjouksen laskuksi.<br /> %s';
$lang['estimate_activity_created']                = 'Loi tarjouksen';
$lang['invoice_estimate_activity_removed_item']   = 'poisti tuotteen <b>%s</b>';
$lang['estimate_activity_number_changed']         = 'Tarjouksen numero muutettu: %s -> %s';
$lang['invoice_activity_number_changed']          = 'Laskun numero muutettu: %s -> %s';
$lang['invoice_estimate_activity_updated_item_short_description'] = 'päivitti tuotteen lyhyen kuvauksen: %s -> %s';
$lang['invoice_estimate_activity_updated_item_long_description'] = 'päivitti tuotteen pitkän kuvauksen: <b>%s</b> -> <b>%s</b>';
$lang['invoice_estimate_activity_updated_item_rate'] = 'päivitti tuotteen hinnan: %s -> %s';
$lang['invoice_estimate_activity_updated_qty_item'] = 'päivitti tuotteen <b>%s</b> määrän: %s -> %s';
$lang['invoice_estimate_activity_added_item']     = 'lisäsi uuden tuotteen <b>%s</b>';
$lang['invoice_estimate_activity_sent_to_client'] = 'lähetti tarjouksen asiakkaalle';
$lang['estimate_activity_client_accepted_and_converted'] = 'Asiakas hyväksyi tämän tarjouksen. Tarjous on muunnettu laskuksi numero %s';
$lang['estimate_activity_client_accepted']        = 'Asiakas hyväksyi tämän tarjouksen';
$lang['estimate_activity_client_declined']        = 'Asiakas hylkäsi tämän tarjouksen';
$lang['estimate_activity_marked']                 = 'merkitsi tarjouksen tilaksi %s';
$lang['invoice_activity_status_updated']          = 'Laskun tila päivitetty: %s -> %s';
$lang['invoice_activity_created']                 = 'loi laskun';
$lang['invoice_activity_from_expense']            = 'muunnettu laskuksi kulusta';
$lang['invoice_activity_recurring_created']       = '[Toistuva] Lasku luotu CRON-ajastuksella';
$lang['invoice_activity_recurring_from_expense_created'] = '[Lasku kulusta] Lasku luotu CRON-ajastuksella';
$lang['invoice_activity_sent_to_client_cron']     = 'Lasku lähetetty asiakkaalle CRON-ajastuksella';
$lang['invoice_activity_sent_to_client']          = 'lähetti laskun asiakkaalle';
$lang['invoice_activity_marked_as_sent']          = 'merkitsi laskun lähetetyksi';
$lang['invoice_activity_payment_deleted']         = 'poisti laskun maksun. Maksu #%s, kokonaissumma %s';
$lang['invoice_activity_payment_made_by_client']  = 'Asiakas suoritti laskun maksun yhteensä <b>%s</b> - %s';
$lang['invoice_activity_payment_made_by_staff']   = 'kirjasi maksun yhteensä <b>%s</b> - %s';
$lang['invoice_activity_added_attachment']        = 'Lisäsi liitteen';

# Navigation
$lang['top_search_placeholder']                   = 'Etsi...';

# Staff
$lang['staff_profile_inactive_account']           = 'Tämä työntekijän tili ei ole aktiivinen';

# Estimates
$lang['copy_estimate']                            = 'Kopioi tarjous';
$lang['estimate_copied_successfully']             = 'Tarjous kopioitu onnistuneesti';
$lang['estimate_copied_fail']                     = 'Tarjouksen kopiointi epäonnistui';

# Tasks
$lang['tasks_view_assigned_to_user']              = 'Minulle osoitetut tehtävät';
$lang['tasks_view_follower_by_user']              = 'Tehtävät joita seuraan';
$lang['no_tasks_found']                           = 'Tehtäviä ei löytynyt';

# Leads
$lang['leads_dt_datecreated']                     = 'Luotu';
$lang['leads_sort_by']                            = 'Lajittele';
$lang['leads_sort_by_datecreated']                = 'Luontipäivämäärä';
$lang['leads_sort_by_kanban_order']               = 'Kanban-järjestys';

# Authentication
$lang['check_email_for_resetting_password']       = 'Tarkista sähköpostistasi lisätietoja salasanasi palauttamiseksi';
$lang['inactive_account']                         = 'Passiivinen tili';
$lang['error_setting_new_password_key']           = 'Virhe uuden salasanan asettamisessa';
$lang['password_reset_message']                   = 'Salasanasi on nollattu. Ole hyvä ja kirjaudu nyt!';
$lang['password_reset_message_fail']              = 'Virhe salasanan palauttamisessa. Yritä uudelleen.';
$lang['password_reset_key_expired']               = 'Salasanan avain vanhentunut tai virheellinen käyttäjä';
$lang['auth_reset_pass_email_not_found']          = 'Sähköpostiosoitetta ei löytynyt';
$lang['auth_reset_password_submit']               = 'Nollaa salasana';

# Settings
$lang['settings_amount_to_words']                 = 'Määrä sanoihin';
$lang['settings_amount_to_words_desc']            = 'Tulosta loppusumma sanoina laskussa/tarjouksessa';
$lang['settings_amount_to_words_enabled']         = 'Ota käyttöön';
$lang['settings_total_to_words_lowercase']        = 'Numerot sanoina pienillä kirjaimilla';
$lang['settings_show_tax_per_item']               = 'Näytä vero per tuote';

# Reports
$lang['report_sales_months_three_months']         = 'Viimeiset 3 kuukautta';
$lang['report_invoice_number']                    = 'Lasku #';
$lang['report_invoice_customer']                  = 'Asiakas';
$lang['report_invoice_date']                      = 'Päivä';
$lang['report_invoice_duedate']                   = 'Eräpäivä';
$lang['report_invoice_amount']                    = 'Määrä';
$lang['report_invoice_amount_with_tax']           = 'Määrä veroineen';
$lang['report_invoice_amount_open']               = 'Määrä avoin';
$lang['report_invoice_status']                    = 'Tila';

#Version 1.0.9

# Home stats
$lang['home_stats_by_project_status']             = 'Tilastot projektin tilan mukaan';
$lang['home_invoice_overview']                    = 'Laskujen yleiskatsaus';
$lang['home_estimate_overview']                   = 'Tarjousten yleiskatsaus';
$lang['home_proposal_overview']                   = 'Ehdotusten yleiskatsaus';
$lang['home_lead_overview']                       = 'Liidien yleiskatsaus';
$lang['home_my_projects']                         = 'Omat projektini';
$lang['home_announcements']                       = 'Ilmoitukset';

# Settings
$lang['settings_leads_kanban_limit']              = 'Rajoita liidien Kanban-rivejä tilaa kohti';
$lang['settings_group_misc']                      = 'Muut';
$lang['show_projects_on_calendar']                = 'Projektit';
$lang['settings_media_max_file_size_upload']      = 'Tiedoston enimmäiskoon lähetys mediassa (Mt)';
$lang['settings_client_staff_add_edit_delete_task_comments_first_hour'] = 'Salli asiakkaan/henkilöstön lisätä/muokata tehtäväkommentteja vain ensimmäisen tunnin aikana (ei koske ylläpitäjiä)';

# Email templates
$lang['email_template_only_domain_email']         = 'Vain verkkotunnuksen sähköposti';

# Announcements
$lang['dismiss_announcement']                     = 'Hylkää ilmoitus';
$lang['announcement_from']                        = 'Lähettäjä:';
$lang['announcement_date']                        = 'Lähettämispäivä: %s';
$lang['announcement_not_found']                   = 'Ilmoitusta ei löytynyt';
$lang['announcements_recent']                     = 'Viimeaikaiset ilmoitukset';

# General
$lang['zip_invoices']                             = 'Pakkaa laskut .zip';
$lang['zip_estimates']                            = 'Pakkaa tarjoukset (.zip)';
$lang['zip_payments']                             = 'Pakkaa maksut (.zip)';
$lang['setup_help']                               = 'Apua';
$lang['clients_list_company']                     = 'Yritys tai Yhdistys';
$lang['dt_button_export']                         = 'Vie';
$lang['dt_entries']                               = 'kohdetta';
$lang['invoice_total_paid']                       = 'Maksettu yhteensä';
$lang['invoice_amount_due']                       = 'Maksettava summa';

# Calendar
$lang['calendar_project']                         = 'Projekti';

# Leads
$lang['leads_import_assignee']                    = 'Vastuuhenkilö';
$lang['customer_from_lead']                       = 'Asiakas alkaen %s';
$lang['lead_kan_ban_attachments']                 = 'Liitteet: %s';
$lang['leads_sort_by_lastcontact']                = 'Viimeisin yhteydenotto';

# Tasks
$lang['task_comment_added']                       = 'Kommentti lisätty onnistuneesti';
$lang['task_duedate']                             = 'Eräpäivä';
$lang['task_view_comments']                       = 'Kommentit';
$lang['task_comment_updated']                     = 'Kommentti päivitetty';
$lang['task_visible_to_client']                   = 'Näkyy asiakkaalle';
$lang['task_hourly_rate']                         = 'Tuntihinta';
$lang['hours']                                    = 'Tunnit';
$lang['seconds']                                  = 'Sekuntia';
$lang['minutes']                                  = 'Minuutit';
$lang['task_start_timer']                         = 'Käynnistä ajastin';
$lang['task_stop_timer']                          = 'Pysäytä ajastin';
$lang['task_billable']                            = 'Laskutettava';
$lang['task_billable_yes']                        = 'Laskutettava';
$lang['task_billable_no']                         = 'Ei laskutettava';
$lang['task_billed']                              = 'Laskutettu';
$lang['task_billed_yes']                          = 'Laskutettu';
$lang['task_billed_no']                           = 'Ei laskutettu vielä';
$lang['task_user_logged_time']                    = 'Sinun kirjattu aika:';
$lang['task_total_logged_time']                   = 'Yhteensä kirjattu aika:';
$lang['task_is_billed']                           = 'Tämä tehtävä laskutetaan laskulla numerolla %s';
$lang['task_statistics']                          = 'Tilastot';
$lang['task_milestone']                           = 'Tehtävän tavoite';

# Tickets
$lang['ticket_message_updated_successfully']      = 'Viesti päivitetty onnistuneesti';

# Invoices
$lang['invoice_task_item_project_tasks_not_included'] = 'Projektitehtävät eivät sisälly tähän luetteloon.';
$lang['show_quantity_as']                         = 'Näytä määrä muodossa:';
$lang['quantity_as_qty']                          = 'Määrä';
$lang['quantity_as_hours']                        = 'Tunnit';
$lang['invoice_table_hours_heading']              = 'Tunnit';
$lang['bill_tasks']                               = 'Laskun tehtävät';
$lang['invoice_estimate_sent_to_email']           = 'Lähetä sähköposti';

# Estimates
$lang['estimate_table_hours_heading']             = 'Tunnit';

# General
$lang['is_customer_indicator']                    = 'Asiakas';
$lang['print']                                    = 'Tulosta';
$lang['customer_permission_projects']             = 'Projektit';
$lang['no_timers_found']                          = 'Käynnistettyjä ajastimia ei löytynyt';
$lang['timers_started_confirm_logout']            = 'Aloitettujen tehtävien ajastimia löytyi! <br/> Haluatko varmasti kirjautua ulos pysäyttämättä ajastimia?';
$lang['confirm_logout']                           = 'Kirjaudu ulos';
$lang['timer_top_started']                        = 'Alkaen: %s';

# Projects
$lang['cant_change_billing_type_billed_tasks_found'] = 'Laskutustapaa ei voi muuttaa. Projektiin sisältyy jo laskutettuja tehtäviä.';
$lang['project_customer_permission_warning']      = 'Järjestelmä ilmoitti, että ensisijaisella yhteyshenkilöllä ei ole oikeutta projekteihin. Ensisijainen yhteyshenkilö ei pysty näkemään projektia. Harkitse oikeuksien lisäämistä yhteyshenkilön profiiliin.';
$lang['project_invoice_timesheet_start_time']     = 'Aloitusaika: %s';
$lang['project_invoice_timesheet_end_time']       = 'Päättymisaika: %s';
$lang['project_invoice_timesheet_total_logged_time'] = 'Kirjattu aika: %s';
$lang['project_view_as_client']                   = 'Näytä projekti asiakkaana';
$lang['project_mark_all_tasks_as_completed']      = 'Merkitse kaikki tehtävät valmiiksi ja lopeta kaikki ajastimet (projektin jäsenille ei lähetetä ilmoituksia)';
$lang['project_not_started_status_tasks_timers_found'] = 'Projektille löytyi käynnissä olevia tehtäväajastimia, vaikka projektia ei ole aloitettu. Suositellaan muuttamaan projektin tilaksi "Käynnissä".';
$lang['project_status']                           = 'Tila';
$lang['project_status_1']                         = 'Ei alkanut';
$lang['project_status_2']                         = 'Käynnissä';
$lang['project_status_3']                         = 'Odottaa';
$lang['project_status_4']                         = 'Valmis';
$lang['project_file_dateadded']                   = 'Latauspäivämäärä';
$lang['project_file_filename']                    = 'Tiedoston nimi';
$lang['project_file__filetype']                   = 'Tiedostotyyppi';
$lang['project_file_visible_to_customer']         = 'Näkyy asiakkaalle';
$lang['project_file_uploaded_by']                 = 'Lähettäjä';
$lang['edit_project']                             = 'Muokkaa projektia';
$lang['copy_project']                             = 'Kopioi projekti';
$lang['delete_project']                           = 'Poista projekti';
$lang['project_task_assigned_to_user']            = 'Tehtävä annettu sinulle';
$lang['seconds']                                  = 'Sekuntia';
$lang['hours']                                    = 'Tunteja';
$lang['minutes']                                  = 'Minuutit';
$lang['project']                                  = 'Projekti';
$lang['project_lowercase']                        = 'projekti';
$lang['projects']                                 = 'Projektit';
$lang['projects_lowercase']                       = 'projektit';
$lang['project_settings']                         = 'Projektin asetukset';
$lang['project_invoiced_successfully']            = 'Projekti laskutettiin onnistuneesti';
$lang['new_project']                              = 'Luo uusi projekti';
$lang['project_files']                            = 'Tiedostot';
$lang['project_activity']                         = 'Toiminta';
$lang['project_name']                             = 'Projektin nimi';
$lang['project_description']                      = 'Kuvaus';
$lang['project_customer']                         = 'Asiakas';
$lang['project_start_date']                       = 'Aloituspäivä';
$lang['project_datecreated']                      = 'Luontipäivämäärä';
$lang['project_deadline']                         = 'Määräaika';
$lang['project_billing_type']                     = 'Laskutustyyppi';
$lang['project_billing_type_fixed_cost']          = 'Kiinteä hinta';
$lang['project_billing_type_project_hours']       = 'Projektin tunnit';
$lang['project_billing_type_project_task_hours']  = 'Tehtävän tunnit';
$lang['project_billing_type_project_task_hours_hourly_rate'] = 'Perustuu tehtävän tuntihintaan';
$lang['project_rate_per_hour']                    = 'Hinta tunnissa';
$lang['project_total_cost']                       = 'Kokonaissumma';
$lang['project_members']                          = 'Jäsenet';
$lang['project_member_removed']                   = 'Projektin jäsen poistettu onnistuneesti';
$lang['project_overview']                         = 'Projektin yleiskatsaus';
$lang['project_gant']                             = 'Gantt-kaavio';
$lang['project_milestones']                       = 'Tavoitteet';
$lang['project_milestone_order']                  = 'Järjestys';
$lang['project_milestone_duedate_passed']         = 'Määräaika ylittynyt';
$lang['record_timesheet']                         = 'Kellokortti';
$lang['new_milestone']                            = 'Uusi tavoite';
$lang['edit_milestone']                           = 'Muokkaa tavoitetta';
$lang['milestone_name']                           = 'Nimi';
$lang['milestone_due_date']                       = 'Määräaika';
$lang['project_milestone']                        = 'Tavoite';
$lang['project_notes']                            = 'Muistiinpanot';
$lang['project_timesheets']                       = 'Kellokortit';
$lang['project_timesheet']                        = 'Kellokortti';
$lang['milestone_total_logged_time']              = 'Kirjattu aika';
$lang['project_overview_total_logged_hours']      = 'Kirjatut tunnit yhteensä';
$lang['milestones_uncategorized']                 = 'Luokittelematon';
$lang['milestone_no_tasks_found']                 = 'Tehtäviä ei löytynyt';
$lang['project_copied_successfully']              = 'Projektitiedot kopioitiin onnistuneesti';
$lang['failed_to_copy_project']                   = 'Projektin kopiointi epäonnistui';
$lang['copy_project_task_include_check_list_items'] = 'Kopioi tarkistuslistat';
$lang['copy_project_task_include_assignees']      = 'Kopioi samat edustajat';
$lang['copy_project_task_include_followers']      = 'Kopioi samat seuraajat';
$lang['project_days_left']                        = 'Päivää jäljellä';
$lang['project_open_tasks']                       = 'Avoimet tehtävät';
$lang['timesheet_stop_timer']                     = 'Pysäytä ajastin';
$lang['failed_to_add_project_timesheet_end_time_smaller'] = 'Merkinnän lisääminen epäonnistui. Päättymisaika on aiempi kuin aloitusaika.';
$lang['project_timesheet_user']                   = 'Jäsen';
$lang['project_timesheet_start_time']             = 'Aloitusaika';
$lang['project_timesheet_end_time']               = 'Päättymisaika';
$lang['project_timesheet_time_spend']             = 'Käytetty aika';
$lang['project_timesheet_task']                   = 'Tehtävä';
$lang['project_invoices']                         = 'Laskut';
$lang['total_logged_hours_by_staff']              = 'Kirjattu aika yhteensä';
$lang['invoice_project']                          = 'Laskuta projekti';
$lang['invoice_project_info']                     = 'Projektilaskun tiedot';
$lang['invoice_project_data_single_line']         = 'Yksi rivi';
$lang['invoice_project_data_task_per_item']       = 'Tehtävä tuotetta kohti';
$lang['invoice_project_data_timesheets_individually'] = 'Kaikki tuntilomakkeet erikseen';
$lang['invoice_project_item_name_data']           = 'Tuotteen nimi';
$lang['invoice_project_description_data']         = 'Kuvaus';
$lang['invoice_project_projectname_taskname']     = 'Projektin nimi + Tehtävän nimi';
$lang['invoice_project_all_tasks_total_logged_time'] = 'Kaikki tehtävät + kirjattu aika kokonaistehtävää kohti';
$lang['invoice_project_project_name_data']        = 'Projektin nimi';
$lang['invoice_project_timesheet_individually_data'] = 'Aloitusaika + päättymisaika + kokonaiskirjausaika';
$lang['invoice_project_total_logged_time_data']   = 'Yhteensä kirjattu aika';
$lang['project_allow_client_to']                  = 'Salli asiakkaan %s';
$lang['project_setting_view_task_attachments']    = 'tarkastella tehtävien liitetiedostoja';
$lang['project_setting_view_task_checklist_items'] = 'tarkastella tehtävien tarkistuslistoja';
$lang['project_setting_upload_files']             = 'lähettää tiedostoja';
$lang['project_setting_view_task_comments']       = 'tarkastella tehtävän kommentteja';
$lang['project_setting_upload_on_tasks']          = 'lähettää liitteitä tehtäviin';
$lang['project_setting_view_task_total_logged_time'] = 'tarkastella tehtävän kirjautumisaikaa kokonaisuudessaan';
$lang['project_setting_open_discussions']         = 'keskustelut';
$lang['project_setting_comment_on_tasks']         = 'kommentoida projektiin';
$lang['project_setting_view_tasks']               = 'tarkastella tehtäviä';
$lang['project_setting_view_milestones']          = 'tarkastella tavoitteita';
$lang['project_setting_view_gantt']               = 'nähdä Gantt-kaavion';
$lang['project_setting_view_timesheets']          = 'nähdä tuntilomakkeet';
$lang['project_setting_view_activity_log']        = 'tarkastella aktiviteettilokia';
$lang['project_setting_view_team_members']        = 'tarkastella tiimin jäseniä';
$lang['project_discussion_visible_to_customer_yes'] = 'Näkyvä';
$lang['project_discussion_visible_to_customer_no'] = 'Ei näkyvä';
$lang['project_discussion_posted_on']             = 'Lähetetty %s';
$lang['project_discussion_posted_by']             = 'Lähettänyt %s';
$lang['project_discussion_failed_to_delete']      = 'Keskustelun poistaminen epäonnistui';
$lang['project_discussion_deleted']               = 'Keskustelu poistettu onnistuneesti';
$lang['project_discussion_no_activity']           = 'Ei toimintaa';
$lang['project_discussion']                       = 'Keskustelu';
$lang['project_discussions']                      = 'Keskustelut';
$lang['edit_discussion']                          = 'Muokkaa keskustelua';
$lang['new_project_discussion']                   = 'Luo keskustelu';
$lang['project_discussion_subject']               = 'Aihe';
$lang['project_discussion_description']           = 'Kuvaus';
$lang['project_discussion_show_to_customer']      = 'Näkyy asiakkaalle';
$lang['project_discussion_total_comments']        = 'Kommentteja yhteensä';
$lang['project_discussion_last_activity']         = 'Viimeinen toiminta';
$lang['discussion_add_comment']                   = 'Lisää kommentti';
$lang['discussion_newest']                        = 'Uusin';
$lang['discussion_oldest']                        = 'Vanhin';
$lang['discussion_attachments']                   = 'Liitteet';
$lang['discussion_send']                          = 'Lähetä';
$lang['discussion_reply']                         = 'Vastaa';
$lang['discussion_edit']                          = 'Muokkaa';
$lang['discussion_edited']                        = 'Muokattu';
$lang['discussion_you']                           = 'Sinä';
$lang['discussion_save']                          = 'Tallenna keskustelu';
$lang['discussion_delete']                        = 'Poista';
$lang['discussion_view_all_replies']              = 'Näytä kaikki vastaukset';
$lang['discussion_hide_replies']                  = 'Piilota vastaukset';
$lang['discussion_no_comments']                   = 'Ei kommentteja';
$lang['discussion_no_attachments']                = 'Ei liitteitä';
$lang['discussion_attachments_drop']              = 'Lataa tiedosto vetämällä ja pudottamalla';
$lang['project_note']                             = 'Merkintä';
$lang['project_note_private']                     = 'Yksityiset muistiinpanot';
$lang['project_save_note']                        = 'Tallenna muistiinpano';

# Project Activity
$lang['project_activity_created']                 = 'Loi projektin';
$lang['project_activity_updated']                 = 'Päivitti projektin';
$lang['project_activity_removed_team_member']     = 'Poisti tiimin jäsenen';
$lang['project_activity_added_team_member']       = 'Lisäsi uuden tiimin jäsenen';
$lang['project_activity_marked_all_tasks_as_complete'] = 'Merkitsi kaikki tehtävät valmiiksi';
$lang['project_activity_recorded_timesheet']      = 'Tallensi tuntilomakkeen';
$lang['project_activity_task_name']               = 'Tehtävä:';
$lang['project_activity_deleted_discussion']      = 'Poisti keskustelun';
$lang['project_activity_created_discussion']      = 'Loi keskustelun';
$lang['project_activity_updated_discussion']      = 'Päivitti keskustelun';
$lang['project_activity_commented_on_discussion'] = 'Kommentoi keskustelua';
$lang['project_activity_deleted_discussion_comment'] = 'Poisti keskustelukommentin';
$lang['project_activity_deleted_milestone']       = 'Poisti tavoitteen';
$lang['project_activity_updated_milestone']       = 'Päivitti tavoitteen';
$lang['project_activity_created_milestone']       = 'Loi uuden tavoitteen';
$lang['project_activity_invoiced_project']        = 'Laskutti projektin';
$lang['project_activity_task_marked_complete']    = 'Tehtävä merkitty valmiiksi';
$lang['project_activity_task_unmarked_complete']  = 'Tehtävä merkitty keskeneräiseksi';
$lang['project_activity_task_deleted']            = 'Tehtävä poistettu';
$lang['project_activity_new_task_comment']        = 'Kommentoi tehtävää';
$lang['project_activity_new_task_attachment']     = 'Lisäsi liitteen tehtävään';
$lang['project_activity_new_task_assignee']       = 'Lisäsi uuden vastuuhenkilön';
$lang['project_activity_task_assignee_removed']   = 'Poisti vastuuhenkilön';
$lang['project_activity_task_timesheet_deleted']  = 'Poisti tuntikirjauksen';
$lang['project_activity_uploaded_file']           = 'Latasi projektitiedoston';
$lang['project_activity_status_updated']          = 'Päivitti projektin tilan';
$lang['project_activity_visible_to_customer']     = 'Näkyy asiakkaalle';
$lang['project_activity_project_file_removed']    = 'Poisti projektitiedoston';

# Customers area
$lang['clients_my_estimates']                     = 'Tarjoukset';
$lang['client_no_reply']                          = 'Ei vastausta';
$lang['clients_nav_projects']                     = 'Projektit';
$lang['clients_my_projects']                      = 'Projektit';
$lang['client_profile_image']                     = 'Profiilikuva';
$lang['sales_report_cancelled_invoices_not_included'] = 'Peruutetut laskut jätetään pois raportista';
$lang['invoices_merge_cancel_merged_invoices']    = 'Merkitse yhdistetyt laskut peruutettuina poiston sijaan';
$lang['invoice_marked_as_cancelled_successfully'] = 'Lasku peruutettu onnistuneesti';
$lang['invoice_unmarked_as_cancelled']            = 'Lasku on merkitty peruuttamatta onnistuneesti';
$lang['tasks_reminder_notification_before']       = 'Tehtävän määräajan muistutus (päivää ennen)';
$lang['not_task_deadline_reminder']               = 'Tehtävän määräajan muistutus';
$lang['dt_length_menu_all']                       = 'Kaikki';
$lang['task_not_finished']                        = 'Ei valmis';
$lang['task_billed_cant_start_timer']             = 'Tehtävä on jo laskutettu. Ajastinta ei voi käynnistää.';
$lang['invoice_task_billable_timers_found']       = 'Käynnissä olevia ajastimia löytyi.';
$lang['project_timesheet_not_updated']            = 'Tuntilomakkeeseen ei vaikuta.';
$lang['project_invoice_task_no_timers_found']     = 'Tehtävälle ei löytynyt ajastimia.';
$lang['invoice_project_tasks_not_started']        = 'Ei vielä aloitettu | Aloituspäivä: %s';
$lang['invoice_project_see_billed_tasks']         = 'Näytä laskutettavat tehtävät';
$lang['invoice_project_all_billable_tasks_marked_as_finished'] = 'Kaikki laskutetut tehtävät merkitään valmiiksi.';
$lang['invoice_project_nothing_to_bill']          = 'Ei laskutettavia tehtäviä. Voit lisätä laskun rivejä manuaalisesti.';
$lang['invoice_project_start_date_tasks_not_passed'] = 'Tulevaisuuteen merkattuja tehtäviä ei voida laskuttaa.';
$lang['invoice_project_stop_all_timers']          = 'Pysäytä kaikki ajastimet';
$lang['invoice_project_stop_billable_timers_only'] = 'Pysäytä vain laskutettavat ajastimet';
$lang['project_tasks_total_timers_stopped']       = 'Pysäytetty yhteensä %s ajastinta';
$lang['project_invoice_timers_started']           = 'Laskutettavilla tehtävillä löytyi käynnissä olevia ajastimia, laskua ei voida luoda. Pysäytä tehtävien ajastimet luodaksesi laskun.';
$lang['task_start_timer_only_assignee']           = 'Sinun täytyy olla määritetty tähän tehtävään voidaksesi käynnistää ajastimen!';
$lang['task_comments']                            = 'Kommentit';
$lang['invoice_total_tax']                        = 'Vero yhteensä';
$lang['estimates_total_tax']                      = 'Vero yhteensä';
$lang['report_invoice_total_tax']                 = 'Vero yhteensä';
$lang['home_tickets']                             = 'Tiketit';
$lang['home_project_activity']                    = 'Viimeisin projektitoiminta';
$lang['view_tracking']                            = 'Näkymien seuranta';
$lang['view_date']                                = 'Päivä';
$lang['view_ip']                                  = 'IP-osoite';
$lang['article_total_views']                      = 'Näyttökertoja yhteensä';
$lang['leads_source']                             = 'Lähde';
$lang['invoices_available_for_merging']           = 'Yhdistettävissä olevat laskut';
$lang['invoices_merge_discount']                  = 'Sinun on sovellettava alennusta kokonaismäärästä %s manuaalisesti tähän laskuun';
$lang['invoice_merge_number_warning']             = 'Laskujen yhdistäminen luo aukkoja laskun numeroihin. Älä yhdistä laskuja, jos et halua puutteita laskuhistoriassasi. Voit myös säätää laskunumeroita manuaalisesti, jos haluat täyttää aukot.';
$lang['invoice_mark_as']                          = 'Merkitse %s';
$lang['invoice_unmark_as']                        = 'Poista merkintä %s';
$lang['invoice_status_cancelled']                 = 'Peruttu';
$lang['tasks_reminder_notification_before_help']  = 'Ilmoita vastuuhenkilölle määräajasta X päivää ennen. Ilmoitus lähetetään vain vastuuhenkilöille. Jos tehtävän aloituspäivän ja eräpäivän välinen ero on pienempi kuin X, muistutusta ei lähetetä.';

# Version 1.1.0
$lang['project_invoice_select_all_tasks']         = 'Valitse kaikki tehtävät';
$lang['lead_company']                             = 'Yritys tai Yhdistys';

# Version 1.1.1
$lang['admin_auth_forgot_password_button']        = 'Vahvista';
$lang['task_assigned']                            = 'Osoitettu';
$lang['switch_to_pipeline']                       = 'Vaihda putkinäkymään';
$lang['switch_to_list_view']                      = 'Vaihda luettelonäkymään';
$lang['estimates_pipeline']                       = 'Tarjousten putkinäkymä';
$lang['estimates_pipeline_sort']                  = 'Lajittele';
$lang['estimates_sort_expiry_date']               = 'Viimeinen voimassaolopäivä';
$lang['estimates_sort_pipeline']                  = 'Putkinäkymän järjestys';
$lang['estimates_sort_datecreated']               = 'Luontipäivämäärä';
$lang['estimates_sort_estimate_date']             = 'Tarjouksen päivämäärä';
$lang['estimate_set_reminder_title']              = 'Aseta tarjouksen muistutus';
$lang['invoice_set_reminder_title']               = 'Aseta laskun muistutus';
$lang['estimate_reminders']                       = 'Muistutukset';
$lang['invoice_reminders']                        = 'Muistutukset';
$lang['estimate_notes']                           = 'Muistiinpanot';
$lang['estimate_add_note']                        = 'Lisää muistiinpano';
$lang['dropdown_non_selected_tex']                = 'Ei valintaa';
$lang['auto_close_ticket_after']                  = 'Sulje palvelupyyntö automaattisesti (tuntia)';
$lang['event_description']                        = 'Kuvaus';
$lang['delete_event']                             = 'Poista';
$lang['not_new_ticket_created']                   = 'Uusi palvelupyyntö avattiin osastollasi - %s';
$lang['receive_notification_on_new_ticket']       = 'Vastaanota ilmoitus uudesta avatusta palvelupyynnöstä';
$lang['receive_notification_on_new_ticket_help']  = 'Kaikki osastoon kuuluvat henkilöstön jäsenet saavat ilmoituksen uuden palvelupyynnön avaamisesta.';
$lang['event_updated']                            = 'Tapahtuma päivitetty onnistuneesti';
$lang['customer_contacts']                        = 'Kontakti';
$lang['new_contact']                              = 'Lisää uusi kontakti';
$lang['contact']                                  = 'Kontakti';
$lang['contact_lowercase']                        = 'kontakti';
$lang['contact_primary']                          = 'Ensisijainen yhteyshenkilö';
$lang['contact_position']                         = 'Asema';
$lang['contact_active']                           = 'Aktiivinen';
$lang['client_company_info']                      = 'Yritystiedot';
$lang['proposal_save']                            = 'Tallenna ehdotus';
$lang['calendar']                                 = 'Kalenteri';
$lang['settings_pdf']                             = 'PDF';
$lang['settings_pdf_font']                        = 'PDF Fontti';
$lang['settings_pdf_table_heading_color']         = 'Tuotteet taulukon otsikon väri';
$lang['settings_pdf_table_heading_text_color']    = 'Kohteet taulukon otsikon tekstin väri';
$lang['settings_pdf_font_size']                   = 'Oletus fonttikoko';
$lang['proposal_status_draft']                    = 'Luonnos';
$lang['custom_field_contacts']                    = 'Kontaktit';
$lang['company_primary_email']                    = 'Ensisijainen sähköposti';
$lang['client_register_contact_info']             = 'Yhteystiedot';
$lang['client_register_company_info']             = 'Yrityksen Tai Yhdistyksen tiedot';
$lang['contact_permissions_info']                 = 'Varmista, että olet asettanut asianmukaiset oikeudet tälle kontaktille';
$lang['default_leads_kanban_sort']                = 'Liidien Kanban-näkymän oletusjärjestys';
$lang['default_leads_kanban_sort_type']           = 'Järjestys';
$lang['order_ascending']                          = 'Nouseva';
$lang['order_descending']                         = 'Laskeva';
$lang['calendar_expand']                          = 'laajenna';
$lang['proposal_reminders']                       = 'Muistutukset';
$lang['proposal_set_reminder_title']              = 'Aseta ehdotusmuistutus';
$lang['settings_allowed_upload_file_types']       = 'Sallitut tiedostotyypit';
$lang['no_primary_contact']                       = 'Tällä asiakkaalla on ensisijainen yhteyshenkilö. Sinun on määritettävä ensisijainen yhteyshenkilön sisäänkirjautuminen asiakkaana. On suositeltavaa kaikille asiakkaille käyttää ensisijaisia kontakteja.';
$lang['leads_merge_customer']                     = 'Yhdistä asiakaskentät';
$lang['leads_merge_contact']                      = 'Yhdistä yhteyskentät';
$lang['leads_merge_as_contact_field']             = 'Yhdistä yhteyskentäksi';
$lang['lead_convert_to_client_phone']             = 'Puhelin';
$lang['invoice_status_report_all']                = 'Kaikki';
$lang['import_contact_field']                     = 'Yhteyskenttä';
$lang['file_uploaded_success']                    = 'Tiedosto ladattu onnistuneesti.';
$lang['file_exceeds_max_filesize']                = 'Ladattu tiedosto ylittää php.ini-tiedoston upload_max_filesize-asetuksen.';
$lang['file_exceeds_maxfile_size_in_form']        = 'Ladattu tiedosto ylittää MAX_FILE_SIZE-asetuksen.';
$lang['file_uploaded_partially']                  = 'Tiedosto ladattiin vain osittain.';
$lang['file_not_uploaded']                        = 'Tiedostoa ei ladattu.';
$lang['file_missing_temporary_folder']            = 'Väliaikainen kansio puuttuu.';
$lang['file_failed_to_write_to_disk']             = 'Tiedoston kirjoittaminen levylle epäonnistui.';
$lang['file_php_extension_blocked']               = 'PHP-laajennus esti tiedoston lataamisen.';
$lang['calendar_expand']                          = 'laajenna';
$lang['view_pdf']                                 = 'Näytä PDF';
$lang['expense_repeat_every']                     = 'Toista joka';

# Version 1.1.2
$lang['leads_switch_to_kanban']                   = 'Vaihda Kanban-näkymään';
$lang['contract_content']                         = 'Sopimuksen sisältö';
$lang['contract_save']                            = 'Tallenna sopimus';
$lang['contract_send_to_email']                   = 'Lähetä sähköpostiin';
$lang['contract_send_to_client_modal_heading']    = 'Lähetä sopimus sähköpostiin';
$lang['contract_send_to']                         = 'Lähetä seuraavalle';
$lang['contract_send_to_client_attach_pdf']       = 'Liitä PDF';
$lang['contract_send_to_client_preview_template'] = 'Esikatsele sähköpostimallia';
$lang['include_attachments_to_email']             = 'Lisää liitteitä sähköpostiin';
$lang['contract_sent_to_client_success']          = 'Sopimus lähetettiin onnistuneesti asiakkaalle';
$lang['contract_sent_to_client_fail']             = 'Sopimuksen lähettäminen epäonnistui';

# Version 1.1.3
$lang['client_invalid_username_or_password']      = 'Väärä käyttäjänimi tai salasana';
$lang['client_old_password_incorrect']            = 'Vanha salasanasi on väärä';
$lang['client_password_changed']                  = 'Salasanasi on vaihdettu';

# Version 1.1.4
$lang['total_leads_deleted']                      = 'Yhteensä liidejä poistettu: %s';
$lang['total_clients_deleted']                    = 'Yhteensä asiakkaita poistettu: %s';
$lang['confirm_action_prompt']                    = 'Haluatko varmasti suorittaa tämän toiminnon?';
$lang['mass_delete']                              = 'Joukko-poisto';
$lang['email_protocol']                           = 'Sähköpostiprotokolla';
$lang['add_edit_members']                         = 'Lisää/muokkaa jäseniä';
$lang['project_overview_logged_hours']            = 'Kirjatut tunnit:';
$lang['project_overview_billable_hours']          = 'Laskutettavat tunnit:';
$lang['project_overview_billed_hours']            = 'Laskutetut tunnit:';
$lang['project_overview_unbilled_hours']          = 'Laskuttamattomat tunnit:';
$lang['calendar_first_day']                       = 'Ensimmäinen päivä';
$lang['permission_view']                          = 'Näytä';
$lang['permission_edit']                          = 'Muokkaa';
$lang['permission_create']                        = 'Luo';
$lang['permission_delete']                        = 'Poista';
$lang['permission']                               = 'Oikeus';
$lang['permissions']                              = 'Oikeudet';
$lang['proposals_pipeline']                       = 'Ehdotusten putkinäkymä';
$lang['proposals_pipeline_sort']                  = 'Lajittele';
$lang['proposals_sort_open_till']                 = 'Avoinna kunnes';
$lang['proposals_sort_pipeline']                  = 'Putkinäkymän järjestys';
$lang['proposals_sort_datecreated']               = 'Luontipäivämäärä';
$lang['proposals_sort_proposal_date']             = 'Ehdotuksen päivämäärä';
$lang['is_not_staff_member']                      = 'Ei henkilöstön jäsen';
$lang['lead_created']                             = 'Luotu';
$lang['access_tickets_to_none_staff_members']     = 'Salli muiden kuin henkilöstön jäsenten pääsy tiketteihin';
$lang['project_expenses']                         = 'Kulut';
$lang['expense_currency']                         = 'Valuutta';
$lang['currency_valid_code_help']                 = 'Varmista, että syötät voimassa olevan valuutan ISO-koodin.';
$lang['week']                                     = 'Viikko';
$lang['weeks']                                    = 'Viikkoa';
$lang['month']                                    = 'Kuukausi';
$lang['months']                                   = 'Kuukautta';
$lang['year']                                     = 'Vuosi';
$lang['years']                                    = 'Vuotta';
$lang['expense_report_category']                  = 'Kategoria';
$lang['expense_paid_via']                         = 'Maksettu palvelulla %s';
$lang['item_as_expense']                          = '[Kulu]';
$lang['show_help_on_setup_menu']                  = 'Näytä ohjevalikko asetusvalikossa';
$lang['customers_summary_total']                  = 'Asiakkaita yhteensä';
$lang['filter_by']                                = 'Suodata';
$lang['re_captcha']                               = 'reCAPTCHA';
$lang['recaptcha_site_key']                       = 'Sivustoavain';
$lang['recaptcha_secret_key']                     = 'Salainen avain';
$lang['recaptcha_error']                          = 'reCAPTCHA vahvistus epäonnistui.';
$lang['smtp_username']                            = 'SMTP-käyttäjänimi';
$lang['smtp_username_help']                       = 'Täytä vain, jos sähköpostiohjelmasi käyttää käyttäjänimeä SMTP-kirjautumiseen.';
$lang['pinned_project']                           = 'Kiinnitetty projekti';
$lang['pin_project']                              = 'Kiinnitä projekti';
$lang['unpin_project']                            = 'Poista kiinnitys projektista';
$lang['smtp_encryption']                          = 'Sähköpostin salaus';
$lang['smtp_encryption_none']                     = 'Ei mitään';
$lang['show_proposals_on_calendar']               = 'Ehdotukset';
$lang['invoice_project_see_billed_expenses']      = 'Näytä laskutettavat kulut';
$lang['project_overview_expenses']                = 'Kulut yhteensä';
$lang['project_overview_expenses_billable']       = 'Laskutettavat kulut';
$lang['project_overview_expenses_billed']         = 'Laskutetut kulut';
$lang['project_overview_expenses_unbilled']       = 'Laskuttamattomat kulut';
$lang['announcement_date_list']                   = 'Päivä';
$lang['project_setting_view_finance_overview']    = 'tarkastella talouden yleisnäkymää';
$lang['show_all_tasks_for_project_member']        = 'Salli kaikkien henkilöstön jäsenten nähdä kaikki projektiin liittyvät tehtävät';
$lang['not_staff_added_as_project_member']        = 'Lisäsi sinut projektin jäseneksi';
$lang['report_expenses_base_currency_select_explanation'] = 'Sinun on valittava valuutta, koska järjestelmä löysi erilaisia valuuttoja, joita käytetään kuluihin.';

# Version 1.1.6
$lang['project_activity_recorded_expense']        = 'Tallennetut kulut';
$lang['save_customer_and_add_contact']            = 'Tallenna ja luo yhteystieto';
$lang['tickets_chart_weekly_opening_stats']       = 'Viikkotilastot';
$lang['related_knowledgebase_articles']           = 'Aiheeseen liittyvät artikkelit';
$lang['detailed_overview']                        = 'Yksityiskohtainen yleiskatsaus';
$lang['tasks_total_checklists_finished']          = 'Valmiit tarkistuslistan kohdat yhteensä';
$lang['tasks_total_added_attachments']            = 'Lisätyt liitteet yhteensä';
$lang['tasks_total_comments']                     = 'Kommentit yhteensä';
$lang['task_finished_on_time']                    = 'Valmistui ajoissa?';
$lang['task_finished_on_time_indicator']          = 'Kyllä';
$lang['task_not_finished_on_time_indicator']      = 'Ei';
$lang['filter']                                   = 'Suodatin';
$lang['task_filter_detailed_all_months']          = 'Kaikki kuukaudet';
$lang['kb_article_slug']                          = 'Slug';

# Version 1.1.7
$lang['email_template_ticket_warning']            = 'Jos palvelupyyntö tuodaan sähköpostiputkituksella ja yhteystietoa ei ole olemassa CRM:ssä, kenttiä ei korvata.';
$lang['auto_stop_tasks_timers_on_new_timer']      = 'Pysäytä kaikki muut käynnissä olevat ajastimet uuden ajastimen käynnistyessä';
$lang['notification_when_customer_pay_invoice']   = 'Vastaanota ilmoitus, kun asiakas maksaa laskun (sisäänrakennettu)';
$lang['not_invoice_payment_recorded']             = 'Uusi laskun maksu - %s';
$lang['email_template_contact_warning']           = 'Jos yhteystieto ei ole kirjautuneena toimenpiteen aikana, yhteystiedon yhdistämiskenttiä ei korvata.';
$lang['change_role_permission_warning']           = 'Roolin oikeuksien muuttaminen ei vaikuta nykyisiin henkilöihin, joilla on tämä rooli.';
$lang['task_copied_successfully']                 = 'Tehtävä kopioitu onnistuneesti';
$lang['failed_to_copy_task']                      = 'Tehtävän kopiointi epäonnistui';
$lang['not_project_file_uploaded']                = 'Uusi projektitiedosto lisätty';
$lang['settings_calendar_color']                  = '%s Väri';
$lang['settings_calendar_colors_heading']         = 'Tyylittely';
$lang['reminder']                                 = 'Muistutus';
$lang['back_to_tasks_list']                       = 'Takaisin tehtäväluetteloon';
$lang['copy_task_confirm']                        = 'Vahvista';
$lang['changing_items_affect_warning']            = 'Tuotetietojen muuttaminen ei vaikuta jo luotuihin laskuihin/tarjouksiin/ehdotuksiin.';
$lang['tax_is_used_in_expenses_warning']          = 'Et voi muuttaa tätä veroa, koska sitä käytetään kuluissa.';
$lang['note']                                     = 'Muistiinpano';
$lang['leads_staff_report_converted']             = 'Yhteensä muutetut liidit';
$lang['leads_staff_report_created']               = 'Yhteensä luodut liidit';
$lang['leads_staff_report_lost']                  = 'Yhteensä kadonneet liidit';
$lang['client_go_to_dashboard']                   = 'Takaisin portaaliin';
$lang['show_estimate_reminders_on_calendar']      = 'Tarjousmuistutukset';
$lang['show_invoice_reminders_on_calendar']       = 'Laskumuistutukset';
$lang['show_proposal_reminders_on_calendar']      = 'Ehdotusmuistutukset';
$lang['calendar_estimate_reminder']               = 'Tarjousmuistutus';
$lang['calendar_invoice_reminder']                = 'Laskumuistutus';
$lang['calendar_proposal_reminder']               = 'Ehdotusmuistutus';
$lang['proposal_due_after']                       = 'Ehdotus voimassa (päivää)';
$lang['project_progress']                         = 'Edistyminen';
$lang['calculate_progress_through_tasks']         = 'Laske edistyminen tehtävien avulla';
$lang['allow_customer_to_change_ticket_status']   = 'Salli asiakkaan muuttaa palvelupyynnön tilaa asiakasalueelta';
$lang['switch_to_general_report']                 = 'Vaihda henkilöstöraporttiin';
$lang['switch_to_staff_report']                   = 'Vaihda yleiseen raporttiin';
$lang['generate']                                 = 'Luo';
$lang['from_date']                                = 'Alkaen päivästä';
$lang['to_date']                                  = 'Päivään';
$lang['not_results_found']                        = 'Tuloksia ei löytynyt';
$lang['lead_lock_after_convert_to_customer']      = 'Älä salli liidien muokkaamista sen jälkeen, kun ne on muutettu asiakkaiksi (ei koske järjestelmänvalvojia)';
$lang['default_pipeline_sort']                    = 'Putkinäkymän oletusjärjestys';
$lang['toggle_full_view']                         = 'Vaihda koko näkymä';
$lang['not_estimate_invoice_deleted']             = 'poisti luodun laskun';
$lang['not_task_new_comment']                     = 'kommentoi tehtävää %s';

# Version 1.1.8
$lang['invoice_number_exists']                    = 'Tämä laskunumero on jo olemassa käynnissä olevana vuotena.';
$lang['estimate_number_exists']                   = 'Tämä tarjousnumero on jo olemassa kuluvalle vuodelle.';
$lang['email_exists']                             = 'Sähköpostiosoite on jo olemassa';
$lang['not_uploaded_project_file']                = 'Uusi tiedosto lähetetty';
$lang['not_created_new_project_discussion']       = 'Uusi projektikeskustelu luotu';
$lang['not_commented_on_project_discussion']      = 'Uusi kommentti projektikeskusteluun';
$lang['all_staff_members']                        = 'Kaikki henkilöstön jäsenet';
$lang['help_project_permissions']                 = 'NÄKYVYYS sallii henkilöstön jäsenen nähdä KAIKKI projektit. Jos haluat, että he näkevät vain projektit, joihin heidät on määritetty (lisätty jäseniksi), älä anna NÄKYVYYS-oikeuksia.';
$lang['help_tasks_permissions']                   = 'NÄKYVYYS sallii henkilöstön jäsenen nähdä KAIKKI tehtävät. Jos haluat, että he näkevät vain tehtävät, joihin heidät on määritetty tai joita he seuraavat, älä anna NÄKYVYYS-oikeuksia.';
$lang['expense_recurring_days']                   = 'Päivää';
$lang['expense_recurring_weeks']                  = 'Viikkoa';
$lang['expense_recurring_months']                 = 'Kuukautta';
$lang['expense_recurring_years']                  = 'Vuotta';
$lang['reset_to_default_color']                   = 'Palauta oletusväri';
$lang['pdf_logo_width']                           = 'Logon leveys (PX)';
$lang['drop_files_here_to_upload']                = 'Pudota tiedostot tähän lähettääksesi ne';
$lang['browser_not_support_drag_and_drop']        = 'Selaimesi ei tue raahaa ja pudota -tiedostojen lähetystä';
$lang['remove_file']                              = 'Poista tiedosto';
$lang['you_can_not_upload_any_more_files']        = 'Et voi lähettää enää tiedostoja';
$lang['custom_field_only_admin']                  = 'Rajoita näkyvyyttä vain järjestelmänvalvojille';
$lang['leads_default_source']                     = 'Oletuslähde';
$lang['clear_activity_log']                       = 'Tyhjennä loki';
$lang['default_contact_permissions']              = 'Kontaktin oletusoikeudet';
$lang['invoice_activity_marked_as_cancelled']     = 'merkitsi laskun peruutetuksi';
$lang['invoice_activity_unmarked_as_cancelled']   = 'poisti laskun peruutettu-merkinnän';
$lang['wait_text']                                = 'Odota...';
$lang['projects_summary']                         = 'Projektien yhteenveto';
$lang['dept_imap_host']                           = 'IMAP-isäntä';
$lang['dept_encryption']                          = 'Salaus';
$lang['dept_email_password']                      = 'Salasana';
$lang['dept_email_no_encryption']                 = 'Ei salausta';
$lang['failed_to_decrypt_password']               = 'Salasanan purkaminen epäonnistui';
$lang['delete_mail_after_import']                 = 'Poistetaanko viestit tuonnin jälkeen?';
$lang['expiry_reminder_enabled']                  = 'Lähetä vanhentumismuistutus';
$lang['send_expiry_reminder_before']              = 'Lähetä vanhentumismuistutus ennen (PÄIVÄÄ)';
$lang['not_expiry_reminder_sent']                 = 'Vanhentumismuistutus lähetetty';
$lang['send_expiry_reminder']                     = 'Lähetä vanhentumismuistutus';
$lang['sent_expiry_reminder_success']             = 'Vanhentumismuistutus lähetetty onnistuneesti';
$lang['sent_expiry_reminder_fail']                = 'Vanhentumismuistutuksen lähetys epäonnistui';
$lang['leads_default_status']                     = 'Oletustila';
$lang['item_description_placeholder']             = 'Kuvaus';
$lang['item_long_description_placeholder']        = 'Pitkä kuvaus';
$lang['item_quantity_placeholder']                = 'Määrä';
$lang['item_rate_placeholder']                    = 'Hinta';
$lang['tickets_summary']                          = 'Palvelupyyntöjen yhteenveto';
$lang['tasks_list_priority']                      = 'Prioriteetti';
$lang['ticket_status_db_2']                       = 'Käynnissä';
$lang['ticket_status_db_1']                       = 'Avoin';
$lang['ticket_status_db_3']                       = 'Vastattu';
$lang['ticket_status_db_4']                       = 'Odottaa';
$lang['ticket_status_db_5']                       = 'Suljettu';
$lang['ticket_priority_db_1']                     = 'Matala';
$lang['ticket_priority_db_2']                     = 'Keskitaso';
$lang['ticket_priority_db_3']                     = 'Korkea';
$lang['customer_have_projects_by']                = 'Sisältää projekteja tilan mukaan %s';
$lang['customer_have_proposals_by']               = 'Sisältää ehdotuksia tilan mukaan %s';
$lang['do_not_redirect_payment']                  = 'Älä ohjaa maksuun';
$lang['project_tickets']                          = 'Palvelupyynnöt';
$lang['invoice_report']                           = 'Laskuraportti';
$lang['payment_modes_report']                     = 'Maksutavat (tapahtumat)';
$lang['customer_admins']                          = 'Asiakkaan ylläpitäjät';
$lang['assign_admin']                             = 'Määritä ylläpitäjä';
$lang['customer_admin_date_assigned']             = 'Määrityspäivä';
$lang['customer_admin_login_as_client_message']   = 'Hei %s. Sinut on lisätty tämän asiakkaan ylläpitäjäksi.';
$lang['ticket_form_validation_file_size']         = 'Tiedostokoon on oltava pienempi kuin %s';
$lang['has_transactions_currency_base_change']    = 'Perusvaluutan vaihtaminen on mahdollista vain, jos tapahtumia ei ole kirjattu kyseisessä valuutassa. Poista tapahtumat vaihtaaksesi perusvaluutan.';
$lang['customers_sort_all']                       = 'Kaikki';

# Version 1.1.9
$lang['use_recaptcha_customers_area']             = 'Ota reCAPTCHA käyttöön asiakaspuolella (Kirjautuminen/Rekisteröityminen)';
$lang['project_marked_as_finished']               = 'Projekti valmis';
$lang['project_status_updated']                   = 'Projektin tila päivitetty';
$lang['remove_decimals_on_zero']                  = 'Poista desimaalit kokonaisluvuista (esim. 2.00 muuttuu muotoon 2)';
$lang['remove_tax_name_from_item_table']          = 'Poista veron nimi tuotetaulukon riviltä';

# Version 1.2.0
$lang['not_billable_expenses_by_categories']      = 'Ei-laskutettavat kulut kategorioittain';
$lang['billable_expenses_by_categories']          = 'Laskutettavat kulut kategorioittain';
$lang['format_letter_size']                       = 'A4 Vaaka';
$lang['pdf_formats']                              = 'Asiakirjamuodot';
$lang['swap_pdf_info']                            = 'Vaihda yrityksen ja asiakkaan tietojen paikkaa (yritys oikealla, asiakas vasemmalla)';
$lang['expenses_filter_by_categories']            = 'Kategorioittain';
$lang['task_copy']                                = 'Kopioi';
$lang['estimate_status']                          = 'Tila';
$lang['expenses_report_exclude_billable']         = 'Sulje pois laskutettavat kulut';
$lang['expenses_total']                           = 'Yhteensä';
$lang['estimate_activity_added_attachment']       = 'Liite lisätty';
$lang['show_to_customer']                         = 'Näytä asiakkaalle';
$lang['hide_from_customer']                       = 'Piilota asiakkaalta';
$lang['expenses_report_total']                    = 'Yhteensä';
$lang['expenses_report']                          = 'Kuluraportti';
$lang['expenses_report_total_tax']                = 'Vero yhteensä';
$lang['expenses_detailed_report']                 = 'Yksityiskohtainen raportti';
$lang['expense_not_billable']                     = 'Ei-laskutettava';
$lang['notification_settings']                    = 'Ilmoitusasetukset';
$lang['staff_with_roles']                         = 'Henkilöstö rooleittain';
$lang['specific_staff_members']                   = 'Tietyt henkilöstön jäsenet';
$lang['proposal_mark_as']                         = 'Merkitse %s';
$lang['kb_report_total_answers']                  = 'Yhteensä';
$lang['ticket_message_edit']                      = 'Muokkaa';
$lang['invoice_files']                            = 'Laskutiedostot';
$lang['estimate_files']                           = 'Tarjoustiedostot';
$lang['proposal_files']                           = 'Ehdotustiedostot';
$lang['invoices_awaiting_payment']                = 'Maksua odottavat laskut';
$lang['tasks_not_finished']                       = 'Tehtävät jotka eivät ole vielä valmiina';
$lang['outstanding_invoices']                     = 'Maksamatta olevat laskut';
$lang['past_due_invoices']                        = 'Erääntyneet laskut';
$lang['paid_invoices']                            = 'Maksetut laskut';
$lang['invoice_estimate_year']                    = 'Vuosi';
$lang['task_stats_logged_hours']                  = 'Kirjattuja tunteja';
$lang['leads_converted_to_client']                = 'Muunnetut liidit';
$lang['task_assigned_from']                       = '%s on antanut sinulle tämän tehtävän';
$lang['new_note']                                 = 'Uusi huomautus';
$lang['my_tickets_assigned']                      = 'Minulle annetut tiketit';
$lang['filter_by_assigned']                       = 'Nimittänyt jäsen';
$lang['staff_stats_total_logged_time']            = 'Yhteensä kirjattu aika';
$lang['staff_stats_last_month_total_logged_time'] = 'Viime kuussa kirjattu aika';
$lang['staff_stats_this_month_total_logged_time'] = 'Tässä kuussa kirjattu aika';
$lang['staff_stats_last_week_total_logged_time']  = 'Viime viikolla kirjattu aika';
$lang['staff_stats_this_week_total_logged_time']  = 'Tällä viikolla kirjattu aika';
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
$lang['milestone_description']                    = 'Kuvaus';
$lang['description_visible_to_customer']          = 'Näytä kuvaus asiakkaalle';
$lang['upcoming_tasks']                           = 'Tulevat tehtävät';
$lang['paymentmethod_two_checkout_account_number'] = 'Tilinumero (Myyjän ID)';
$lang['paymentmethod_two_checkout_private_key']   = 'Yksityinen avain';
$lang['paymentmethod_two_checkout_publishable_key'] = 'Julkaistava avain';
$lang['payment_credit_card_number']               = 'Kortin numero';
$lang['payment_credit_card_expiration_date']      = 'Viimeinen käyttöpäivä';
$lang['payment_billing_email']                    = 'Sähköposti';
$lang['submit_payment']                           = 'Lähetä maksu';
$lang['2checkout_notice_payment']                 = 'Luottokorttitiedot käsitellään 2Checkoutin tarjoaman suojatun palvelun avulla';
$lang['2checkout_usage_notice']                   = 'SSL vaaditaan, jos käytät 2Checkout-maksusovellusliittymää. Tokenointi ja valtuutukset on tehtävä suojatun yhteyden kautta. Järjestelmä toimii ilman SSL:ää, mutta tämä voi johtaa siihen, ettei järjestelmä ole vaatimustenmukainen, mikä voi aiheuttaa sovellusliittymäoikeuksien deaktivoinnin.';
$lang['custom_field_disallow_customer_to_edit']   = 'Älä salli asiakkaan muokata tätä kenttää';
$lang['project_due_notice']                       = 'Tämä projekti on myöhässä %s päivää';
$lang['not_lead_added_attachment']                = 'lisätty uusi liite liidiin %s';
$lang['lead_note_date_added']                     = 'Huomautus lisätty: %s';
$lang['recurring_custom']                         = 'Mukautettu';
// don't translate these, only added for better readability already translated for the expenses custom recurring feature.
$lang['invoice_recurring_months'] = $lang['expense_recurring_months'];
$lang['invoice_recurring_years']  = $lang['expense_recurring_years'];
$lang['invoice_recurring_days']   = $lang['expense_recurring_days'];
$lang['invoice_recurring_weeks']  = $lang['expense_recurring_weeks'];

# Version 1.2.4
$lang['document_direction']                       = 'Dokumentin suunta';
$lang['notify_project_members_status_change']     = 'Ilmoita projektin jäsenille tilan muuttumisesta';
$lang['not_project_status_updated']               = 'Projektin tila päivitetty: %s -> %s';
$lang['ticket_not_found']                         = 'Palvelupyyntöä ei löytynyt';
$lang['project_not_found']                        = 'Projektia ei löytynyt';
$lang['export_project_data']                      = 'Vie projektitiedot';
$lang['total_project_members']                    = 'Projektin jäseniä yhteensä';
$lang['total_project_files']                      = 'Tiedostot liitteenä';
$lang['total_project_discussions_created']        = 'Luodut keskustelut';
$lang['project_member']                           = 'Jäsen';
$lang['total_project_discussions_comments']       = 'Keskustelujen kommentit yhteensä';
$lang['staff_total_task_assigned']                = 'Osoitettuja tehtäviä yhteensä';
$lang['staff_total_comments_on_tasks']            = 'Kommentteja tehtävissä';
$lang['project_members_overview']                 = 'Projektin jäsenten yleiskatsaus';
$lang['project_milestones_overview']              = 'Tavoitteiden yleiskatsaus';
$lang['total_tasks_in_milestones']                = 'Tehtäviä tavoitteissa yhteensä';
$lang['total_task_members_assigned']              = 'Osoitettuja jäseniä yhteensä';
$lang['total_task_members_followers']             = 'Seuraajia yhteensä';
$lang['total_milestones']                         = 'Tavoitteita yhteensä';
$lang['total_project_worked_days']                = 'Työpäiviä yhteensä';
$lang['finance_overview']                         = 'Talouden yleisnäkymä';
$lang['project_custom_fields']                    = 'Muokatut kentät';
$lang['total_tickets_related_to_project']         = 'Projektiin linkitettyjen palvelupyyntöjen kokonaismäärä';
$lang['projects_total_invoices_created']          = 'Luotuja laskuja yhteensä';
$lang['do_not_send_invoice_payment_email_template_contact'] = 'Älä lähetä maksusuoritus-sähköpostia asiakaskontakteille';
$lang['no_preview_available_for_file']            = 'Tälle tiedostolle ei ole esikatselua saatavilla.';
$lang['project_activity_deleted_file_discussion_comment'] = 'Tiedoston keskustelun kommentti poistettu';
$lang['email_template_discussion_info']           = 'Tätä mallia käytetään molemmissa projektikeskustelujen kommenttisähköposteissa. (arkistoi keskustelut ja säännölliset keskustelut)';
$lang['format_a4_portrait_size']                  = 'Pystysuunta';
$lang['only_show_contact_tickets']                = 'Näytä asiakaspuolella vain kirjautuneeseen yhteyshenkilöön liittyvät tiketit (ei koske ensisijaista yhteyshenkilöä)';
$lang['cancel_overdue_reminders_invoice']         = 'Estä tämän laskun erääntymismuistutusten lähettäminen';
$lang['customer_shipping_address_notice']         = 'Älä täytä toimitusosoitetietoja, jos et käytä toimitusosoitetta asiakaslaskuissa.';
$lang['timesheets_overview']                      = 'Tuntilomakkeiden yleiskatsaus';
$lang['invoice_status_draft']                     = 'Luonnos';
$lang['save_as_draft']                            = 'Tallenna luonnoksena';
$lang['convert_and_save_as_draft']                = 'Muunna ja tallenna luonnoksena';
$lang['convert']                                  = 'Muunna';
$lang['exclude_invoices_draft_from_client_area']  = 'Piilota luonnos-tilassa olevat laskut asiakaspuolelta';
$lang['invoice_draft_status_info']                = 'Laskun tila on Luonnos. Tila muuttuu automaattisesti, kun lähetät laskun asiakkaalle tai merkitset sen lähetetyksi.';
$lang['task_info']                                = 'Tehtävän tiedot';
$lang['recurring_tasks']                          = 'Toistuvat tehtävät';
// don't translate these, already translated
$lang['task_repeat_every']                         = $lang['expense_repeat_every'];
$lang['task_recurring_months']                     = $lang['expense_recurring_months'];
$lang['task_recurring_years']                      = $lang['expense_recurring_years'];
$lang['task_recurring_days']                       = $lang['expense_recurring_days'];
$lang['task_recurring_weeks']                      = $lang['expense_recurring_weeks'];
$lang['todays_tasks']                             = 'Tämän päivän tehtävät';
$lang['payment_mode_invoices_only']               = 'Vain laskut';
$lang['payment_mode_expenses_only']               = 'Vain kulut';
$lang['task_no_checklist_items_found']            = 'Tehtävälle ei löytynyt tarkistuslistan kohtia.';
$lang['task_no_description']                      = 'Ei tehtävän kuvausta.';
$lang['expenses_reminders']                       = 'Muistutukset';
$lang['expense_set_reminder_title']               = 'Aseta kulun muistutus';
$lang['calendar_expense_reminder']                = 'Kulujen muistutukset';
$lang['recurring_task']                           = 'Toistuva tehtävä';
$lang['disable_email_from_being_sent']            = 'Poista tämän sähköpostin lähettäminen käytöstä';
$lang['not_sent_indicator']                       = 'Ei lähetetty';
$lang['proposal_status_revised']                  = 'Tarkistettu';
$lang['customer_currency_change_notice']          = 'Jos asiakas käyttää muuta valuuttaa kuin perusvaluuttaa, varmista, että valitset tälle asiakkaalle sopivan valuutan. Valuutan muuttaminen ei ole mahdollista tapahtumien tallentamisen jälkeen.';
$lang['click_to_add_content']                     = 'Klikkaa tähän lisätäksesi sisältöä';
$lang['related_to_project']                       = 'Tämä %s liittyy kohteeseen %s: %s';
$lang['back_to_lead']                             = 'Takaisin liidiin';
$lang['add_task_timer_started_warning']           = 'Pysäytä tämän tehtävän käynnissä oleva ajastin voidaksesi lisätä uuden ajastimen manuaalisesti.';
$lang['sending_email_contact_permissions_warning'] = 'Asiakkaan yhteystietojen automaattinen valinta epäonnistui. Varmista, että asiakkaalla on liitettyjä yhteystietoja oikeudella %s';

# Version 1.2.6
$lang['currently_supported_currencies']           = 'Tällä hetkellä tuetut valuutat';
$lang['authorize_notice']                         = 'SSL vaaditaan, jos käytät Authorize.Net AIM -maksu-API:a. Authorize.net tukee vain yhtä valuuttaa per tili. Varmista, että lisäät valuuttojen kenttään vain yhden valuutan, joka liittyy Authorize-tilillesi.';
$lang['settings_paymentmethod_developer_mode']    = 'Kehittäjätila';
$lang['payment_cardholder_name']                  = 'Kortinhaltijan nimi';
$lang['settings_paymentmethod_authorize_api_login_id'] = 'API-kirjautumistunnus';
$lang['settings_paymentmethod_mollie_api_key']    = 'API-avain';
$lang['settings_paymentmethod_authorize_api_transaction_key'] = 'API-tapahtumatunnus';
$lang['settings_paymentmethod_authorize_secret_key'] = 'Salainen avain';
$lang['leads_report_converted_notice']            = 'Vain oletusarvoiseen asiakastilaan kuuluvat liidit lasketaan muunnetuiksi liideiksi.';
$lang['payment_method']                           = 'Maksutapa';
$lang['payment_method_info']                      = 'Jotkut maksuyhdyskäytävät tukevat useita maksutapoja, kuten luottokorttia, PayPalia ja pankkisiirtoa.';

# Version 1.2.7
$lang['dropbox_app_key']                          = 'Dropbox API -avain';
$lang['project_invoice_select_all_expenses']      = 'Valitse kaikki kulut';
$lang['role_update_staff_permissions']            = 'Päivitä kaikkien tätä roolia käyttävien henkilöstön jäsenten oikeudet';
$lang['customer_active']                          = 'Aktiivinen';
$lang['note_updated_successfully']                = 'Muistiinpano päivitetty onnistuneesti';
$lang['update_note']                              = 'Päivitä muistiinpano';
$lang['update_comment']                           = 'Päivitä kommentti';
$lang['comment_updated_successfully']             = 'Kommentti päivitetty onnistuneesti';
$lang['staff_send_welcome_email']                 = 'Lähetä tervetulosähköposti';
$lang['proposal_warning_email_change']            = 'Sähköpostiosoite muutettu kohteelle %s. Tämä %s on linkitetty ehdotuksiin. Haluatko päivittää kaikkien linkitettyjen ehdotusten sähköpostiosoitteet?';
$lang['update_proposal_email_yes']                = 'Kyllä, päivitä kaikki linkitetyt sähköpostit.';
$lang['update_proposal_email_no']                 = 'Ei, päivitän manuaalisesti.';
$lang['proposals_emails_updated']                 = 'Kaikki tähän kohteeseen %s linkitetyt ehdotusten sähköpostit on päivitetty muotoon %s.';
$lang['custom_field_company']                     = 'Yritys tai Yhdistys';
$lang['actions']                                  = 'Toiminnot';
$lang['project_mark_as']                          = 'Merkkaa %s';
$lang['todo_edit_title']                          = 'Muokkaa tehtävää';
$lang['additional_action_required']               = 'Lisätoimenpiteitä vaaditaan!';
$lang['project_mark_tasks_finished_confirm']      = 'Vahvista';
$lang['project_marked_as_success']                = 'Projekti merkitty tilaan %s onnistuneesti';
$lang['project_marked_as_failed']                 = 'Projektin merkitseminen tilaan %s epäonnistui';
$lang['auto_assign_customer_admin_after_lead_convert'] = 'Määritä asiakkaan ylläpitäjäksi automaattisesti muunnon jälkeen';
$lang['auto_assign_customer_admin_after_lead_convert_help'] = 'Jos tämä vaihtoehto on asetettu KYLLÄ, henkilöstön jäsen, joka muutti liidin asiakkaaksi, määritetään automaattisesti asiakkaan ylläpitäjäksi.';
$lang['auto_close_tickets_disable']               = 'Aseta 0 poistaaksesi käytöstä';
$lang['task_checklist_item_completed_by']         = 'Valmistunut henkilön %s toimesta';
$lang['staff_email_signature_help']               = 'Jos tyhjä, käytetään järjestelmän yleistä allekirjoitusta.';
$lang['default_task_priority']                    = 'Oletusprioriteetti';
$lang['project_send_created_email']               = 'Lähetä sähköposti projektin luomisesta';


# Version 1.2.8
$lang['show_transactions_on_invoice_pdf']         = 'Näytä laskun maksut (tapahtumat) PDF:ssä';
$lang['bulk_actions']                             = 'Massatoimet';
$lang['additional_filters']                       = 'Lisäsuodattimet';
$lang['expenses_available_to_bill']               = 'Laskutettavissa olevat kulut';
$lang['bulk_action_customers_groups_warning']     = 'Jos et valitse mitään ryhmää, kaikki valittujen asiakkaiden ryhmät poistetaan.';
$lang['customer_attachments_show_in_customers_area'] = 'Näytä asiakaspuolella';
$lang['customer_attachments_show_notice']         = 'Vain asiakasprofiilista ladatut tiedostot voidaan näyttää tai piilottaa asiakaspuolella.';
$lang['customer_profile_files']                   = 'Tiedostot';
$lang['no_files_found']                           = 'Tiedostoja ei löytynyt';
$lang['custom_field_column']                      = 'Ruudukko (Bootstrap-sarake, esim. 12) - Enintään 12';
$lang['task_status']                              = 'Tila';
$lang['task_status_1']                            = 'Ei alkanut';
$lang['task_status_2']                            = 'Odottaa palautetta';
$lang['task_status_3']                            = 'Testissä';
$lang['task_status_4']                            = 'Käynnissä';
$lang['task_status_5']                            = 'Valmis';
$lang['task_mark_as']                             = 'Merkitse: %s';
$lang['task_marked_as_success']                   = 'Tehtävä merkitty tilaan %s onnistuneesti';
$lang['search_tasks']                             = 'Etsi tehtäviä';
$lang['tasks_kanban_limit']                       = 'Rajoita Kanban-tehtävärivien määrää per tila';
$lang['show_on_invoice_on_pdf']                   = 'Näytä %s laskun PDF:ssä';
$lang['show_pay_link_to_invoice_pdf']             = 'Näytä "Maksa lasku" -linkki PDF:ssä (ei koske peruutettuja laskuja)';
$lang['no_leads_found']                           = 'Liidejä ei löytynyt';
$lang['created_today']                            = 'Luotu tänään';
$lang['total_tasks_deleted']                      = 'Tehtäviä poistettu yhteensä: %s';
$lang['total_tickets_delete']                     = 'Tikettejä poistettu yhteensä: %s';
$lang['format_letter_portrait']                   = 'Letter Pystysuunta';
$lang['format_letter_landscape']                  = 'Letter Vaakasuunta';
$lang['period_datepicker']                        = 'Ajalta';
$lang['total_by_hourly_rate']                     = 'Yhteensä tuntihinnalla';
$lang['staff_hourly_rate']                           = $lang['task_hourly_rate'];
// &#37; is for % so the system can confuse for the original fields like %s
$lang['remove_tax_name_from_item_table_help']     = 'esim. Tuote VERON 15&#37; näytetään 15&#37;:na ilman veron nimeä (Ei sovelleta, jos tuotteelle löytyy useita veroja samalla nimellä ja veroprosentilla)';
$lang['back_to_project']                          = 'Takaisin projektiin';
$lang['view_kanban']                              = 'Näytä Kanban';
$lang['invoice_is_overdue']                       = 'Tämä lasku on myöhässä %s päivää';

# Version 1.2.9
$lang['time_decimal']                             = 'Aika (desimaali)';
$lang['time_h']                                   = 'Aika (h)';
$lang['proposal_number_prefix']                   = 'Ehdotuksen numeron etuliite';
$lang['settings_number_padding_prefix']           = 'Numeron täyttö nollilla etuliitteen muodoille <br /> <small>esim. Jos tämä arvo on 3, numero muotoillaan: 005 tai 025</small>';
$lang['this_week_payments']                       = 'Tämän viikon maksut';
$lang['last_week_payments']                       = 'Viime viikon maksut';
$lang['not_published_new_post']                   = 'julkaisi uuden viestin';
$lang['expense_name']                             = 'Nimi';
$lang['expense_name_help']                        = 'Henkilökohtaiseen käyttöön';
$lang['adjustments']                              = 'säädöt';
$lang['payments_received']                        = 'Maksut vastaanotettu';
$lang['not_lead_activity_created_proposal']       = 'Loi uuden ehdotuksen - %s';
$lang['lead_title']                               = 'Asema';
$lang['lead_address']                             = 'Osoite';
$lang['lead_city']                                = 'Kaupunki';
$lang['lead_state']                               = 'Osavaltio';
$lang['lead_country']                             = 'Maa';
$lang['lead_zip']                                 = 'Postinumero';
$lang['lead_is_public_yes']                       = 'Kyllä';
$lang['lead_is_public_no']                        = 'Ei';
$lang['lead_info']                                = 'Liidin tiedot';
$lang['lead_general_info']                        = 'Yleistä tietoa';
$lang['lead_latest_activity']                     = 'Viimeisin toiminta';
$lang['item_description_new_lines_notice']        = 'Uudet rivit eivät ole tuettuja tuotteen kuvauksessa. Käytä sen sijaan tuotteen pitkää kuvausta.';
$lang['estimates_report']                         = 'Arviointiraportti';
$lang['confirm']                                  = 'Vahvista';
$lang['delete_staff']                             = 'Poista toimihenkilö';
$lang['delete_staff_info']                        = 'Osa tämän henkilön tiedoista on siirrettävä toiselle käyttäjälle. Valitse käyttäjä, jolle tiedot siirretään.';
$lang['estimate_items']                           = 'Tarjouksen tuotteet';
$lang['no_proposals_found']                       = 'Ehdotuksia ei löytynyt';
$lang['no_estimates_found']                       = 'Tarjouksia ei löytynyt';
$lang['pipeline_limit_status']                    = 'Putkinäkymän raja per tila';
$lang['settings_update']                          = 'Järjestelmän päivitys';
$lang['purchase_key']                             = 'Ostoavain';
$lang['update_now']                               = 'Päivitä nyt';
$lang['update_available']                         = 'Päivitys on saatavilla';
$lang['latest_version']                           = 'Viimeisin versio';
$lang['your_version']                             = 'Sinun versiosi';
$lang['using_latest_version']                     = 'Sinulla on viimeisin versio';
$lang['mark_as_active']                           = 'Merkkaa aktiiviseksi';
$lang['customer_inactive_message']                = 'Tämä on passiivinen asiakasprofiili, ja jotkut ominaisuudet voivat olla poissa käytöstä';
$lang['active_customers']                         = 'Aktiiviset asiakkaat';
$lang['inactive_active_customers']                = 'Passiiviset asiakkaat';
$lang['include_proposal_items_merge_field_help']  = 'Sisällytä ehdotuksen tuotteet yhdistämiskentällä mihin tahansa ehdotuksen sisältöön muodossa %s';
$lang['all_data_synced_successfully']             = 'Kaikki tiedot synkronoitu onnistuneesti';
$lang['sync_now']                                 = 'Synkronoi nyt';
$lang['sync_data']                                = 'Synkronoi tiedot';
$lang['sync_proposals_up_to_date']                = 'Kaikki ehdotukset ovat ajan tasalla, ei mitään synkronoitavaa';
$lang['proposal_sync_1_info']                     = 'Kaikki ehdotuksen tiedot tallennetaan erikseen jokaiselle ehdotukselle luomisen jälkeen. %s-tietojen päivittäminen ei vaikuta aiemmin luotuihin ehdotuksiin tälle %s:lle.';
$lang['proposal_sync_2_info']                     = 'Jos olet äskettäin päivittänyt %s-tietosi, voit synkronoida kaikki uudet tiedot liittyviin ehdotuksiin. Tässä on luettelo kentistä, joita voit synkronoida.';

# Version 1.3.0
$lang['expense_include_additional_data_on_convert'] = 'Sisällytä lisätiedot tuotteen pitkään kuvaukseen tästä kulusta.';

# Version 1.4.0
$lang['calendar_events_limit']                    = 'Kalenteritapahtumien raja (kuukausi- ja viikonäkymä)';
$lang['show_page_number_on_pdf']                  = 'Näytä sivunumero PDF:ssä';
$lang['customer_active_inactive_help']            = 'Ei näytetä avattavissa luetteloissa uusia tietueita luotaessa';
$lang['item_groups']                              = 'Ryhmät';
$lang['item_group']                               = 'Tuote ryhmät';
$lang['item_group_name']                          = 'Ryhmän nimi';
$lang['new_item_group']                           = 'Uusi ryhmä';
$lang['show_setup_menu_item_only_on_hover']       = 'Näytä asetusvalikon kohta vain, kun hiiri on pääsivupalkin alueella';
$lang['internal_article']                         = 'Sisäinen artikkeli';
$lang['expenses_created_from_this_recurring_expense'] = 'Tästä toistuvasta kulusta luodut kulut';
$lang['convert_to_task']                          = 'Muunna tehtäväksi';
$lang['next_invoice_date']                        = 'Seuraava laskun päivämäärä: %s';
$lang['next_expense_date']                        = 'Seuraava kulun päivämäärä: %s';
$lang['invoice_recurring_from']                   = 'Tämä lasku on luotu toistuvasta laskusta numerolla: %s';
$lang['expense_recurring_from']                   = 'Tämä kulu on luotu seuraavasta toistuvasta kulusta: %s';
$lang['child_invoices']                           = 'Alilaskut';
$lang['child_expenses']                           = 'Alikulut';
$lang['no_announcements']                         = 'Ei ilmoituksia';
$lang['unit']                                     = 'Yksikkö';
$lang['permission_view_own']                      = 'Näytä (Oma)';
$lang['permission_global']                        = 'Globaali';
$lang['permission_customers_based_on_admins']     = 'Asiakkaan ylläpitäjien perusteella';
$lang['permission_payments_based_on_invoices']    = 'Laskujen NÄYTÄ (Oma) -oikeuden perusteella';
$lang['permission_projects_based_on_assignee']    = 'Jos henkilöstön jäsenellä ei ole NÄYTÄ (Globaali) -oikeutta, näytetään vain projektit, joihin henkilöstön jäsen on lisätty projektin jäsenenä.';
$lang['permission_tasks_based_on_assignee']       = 'Jos henkilöstön jäsenellä ei ole NÄYTÄ (Globaali) -oikeutta, näytetään vain tehtävät, joissa henkilöstön jäsen on seuraaja, määritetty, tehtävä on julkinen tai Asetukset->Asetukset->Tehtävät-> Salli kaikille henkilöstölle nähdä kaikki projekteihin liittyvät tehtävät on asetettu KYLLÄ, kun tehtävä on linkitetty projektiin.';
$lang['settings_paymentmethod_default_selected_on_invoice'] = 'Valittu oletuksena laskussa';
$lang['paymentmethod_braintree_merchant_id']      = 'Kauppias-ID';
$lang['paymentmethod_braintree_private_key']      = 'Yksityinen avain';
$lang['paymentmethod_braintree_public_key']       = 'Julkinen avain';
$lang['company_requires_vat_number_field']        = 'Yritys vaatii ALV-numeron käyttöä.';
$lang['no_company_view_profile']                  = 'Henkilö - Näytä profiili';
$lang['company_is_required']                      = 'Yritys on pakollinen kenttä?';
$lang['estimate_invoiced']                        = 'Laskutettu';
$lang['file_date_uploaded']                       = 'Latauspäivämäärä';
$lang['allow_contact_to_delete_files']            = 'Salli yhteyshenkilöiden poistaa omia asiakaspuolelle lataamiaan tiedostoja.';
$lang['file']                                     = 'Tiedosto';
$lang['customer_contact_person_only_one_allowed'] = 'Vain 1 yhteyshenkilö sallitaan, jos yrityskenttä on tyhjä. Järjestelmä käsittelee tämän asiakkaan yksityishenkilönä.';
$lang['web_to_lead']                              = 'Web-liidi';
$lang['web_to_lead_form']                         = 'Web-liidilomake';
$lang['new_form']                                 = 'Uusi lomake';
$lang['form_name']                                = 'Lomakkeen nimi';
$lang['cf_option_in_use']                         = 'Poistamasi vaihtoehto on käytössä, eikä sitä voi poistaa. Se on lisätty automaattisesti takaisin vaihtoehtoihin.';
$lang['form_builder']                             = 'Lomakkeen rakennustyökalu';
$lang['form_information']                         = 'Lomakkeen tiedot ja asetukset';
$lang['form_builder_create_form_first']           = 'Luo ensin lomake voidaksesi käyttää rakennustyökalua.';
$lang['notify_assigned_user']                     = 'Vastuuhenkilö';
$lang['form_recaptcha']                           = 'Käytä Google reCAPTCHA:aa';
$lang['form_lang_validation']                     = 'Kieli';
$lang['form_lang_validation_help']                = 'Vahvistusviestejä varten';
$lang['form_btn_submit_text']                     = 'Lähetä-painikkeen teksti';
$lang['form_success_submit_msg']                  = 'Lomakkeen lähetyksen jälkeen näytettävä viesti';
$lang['total_submissions']                        = 'Lähetyksiä yhteensä';
$lang['form_integration_code']                    = 'Integraatiokoodi';
$lang['not_lead_imported_from_form']              = 'Uusi liidi tuotu Webistä - %s';
$lang['not_lead_activity_log_attachment']         = 'Liite tuotu lomakkeesta - %s';
$lang['form_integration_code_help']               = 'Kopioi ja liitä koodi verkkosivustollesi. Voit muuttaa leveyttä ja korkeutta sivustollesi sopivaksi.';
$lang['invoice_not_found']                        = 'Laskua ei löytynyt';
$lang['estimate_not_found']                       = 'Tarjousta ei löytynyt';
$lang['expense_not_found']                        = 'Kulua ei löytynyt';
$lang['proposal_not_found']                       = 'Ehdotusta ei löytynyt';
$lang['new_task_assigned_non_user']               = 'Uusi tehtävä on osoitettu sinulle - %s';
$lang['no_child_found']                           = 'Alikohdetta %s ei löytynyt';
$lang['company_vat_number']                       = 'ALV-numero';
$lang['not_lead_assigned_from_form']              = 'Uusi liidi on osoitettu sinulle';
$lang['not_lead_activity_assigned_from_form']     = 'Liidi osoitettiin vastuuhenkilölle %s';
$lang['form_allow_duplicate']                     = 'Salli useiden %s tietojen tallentaminen tietokantaan?';
$lang['track_duplicate_by_field']                 = 'Estä duplikaatit kentän perusteella';
$lang['and_track_duplicate_by_field']             = '+ kenttä (jätä tyhjäksi, jos tarkistetaan vain yhden perusteella)';
$lang['create_the_duplicate_form_data_as_task']   = 'Luo duplikaatti %s tehtävänä ja osoita vastuuhenkilölle';
$lang['create_the_duplicate_form_data_as_task_help'] = 'Käytetään tarkempaan tarkistukseen ja jatkotoimenpiteisiin';
$lang['currently_selected']                       = 'Tällä hetkellä valittu';
$lang['search_ajax_empty']                        = 'Valitse ja aloita kirjoittaminen';
$lang['search_ajax_placeholder']                  = 'Kirjoita etsiäksesi...';
$lang['search_ajax_searching']                    = 'Etsii...';
$lang['search_ajax_initialized']                  = 'Aloita kirjoittaminen etsiäksesi';
$lang['lead_description']                         = 'Kuvaus';
$lang['lead_website']                             = 'Verkkosivusto';
$lang['invoice_activity_auto_converted_from_estimate'] = 'Lasku luotiin automaattisesti tarjouksesta numero %s';
$lang['hour_of_day_perform_auto_operations']      = 'Kellonaika, jolloin suoritetaan automaattiset toiminnot';
$lang['hour_of_day_perform_auto_operations_format'] = '24 tunnin muoto (esim. 9 tai 15).';
$lang['inv_hour_of_day_perform_auto_operations_help'] = 'Käytetään toistuviin laskuihin, erääntymisilmoituksiin jne.';
$lang['use_minified_files']                       = 'Käytä minimoituja (minified) tiedostoversioita CSS- ja JS-tiedostoille (vain järjestelmän tiedostot)';

# Version 1.5.0
$lang['logo_favicon_changed_notice']              = 'Logo tai Favicon on muuttunut. Jos näet edelleen vanhan logon, tyhjennä selaimen välimuisti.';
$lang['kb_search_articles']                       = 'Hae tietopankin artikkeleita';
$lang['kb_search']                                = 'Hae';
$lang['have_a_question']                          = 'Onko sinulla kysyttävää?';
$lang['card_expiration_year']                     = 'Vanhentumisvuosi';
$lang['card_expiration_month']                    = 'Vanhentumiskuukausi';
$lang['client_website']                           = 'Verkkosivusto';
$lang['search_project_members']                   = 'Hae projektin jäseniä...';
$lang['cf_translate_input_link_title']            = 'Otsikko';
$lang['cf_translate_input_link_url']              = 'URL';
$lang['cf_translate_input_link_tip']              = 'Klikkaa tästä lisätäksesi linkin';
$lang['task_edit_delete_timesheet_notice']        = 'Tuntilomakkeen tehtävä on %s, et voi %s sitä.';
$lang['department_username']                      = 'IMAP-käyttäjänimi';
$lang['department_username_help']                 = 'Täytä tämä kenttä vain, jos IMAP-palvelimesi käyttää käyttäjänimeä sähköpostiosoitteen sijaan. Sähköpostiosoite on silti lisättävä.';
$lang['total_tickets_deleted']                    = 'Palvelupyyntöjä poistettu yhteensä: %s';

# Version 1.5.1
$lang['ticket_linked_to_project']                 = 'Tämä palvelupyyntö on linkitetty projektiin: %s';
$lang['only_own_files_contacts']                  = 'Yhteyshenkilöt näkevät vain omat asiakaspuolelle lataamansa tiedostot.';
$lang['only_own_files_contacts_help']             = 'Jos jaat tiedoston manuaalisesti asiakasprofiilista muille yhteyshenkilöille, he voivat nähdä sen.';
$lang['share_file_with']                          = 'Jaa tiedosto kohteelle';
$lang['file_share_visibility_notice']             = 'Tätä tiedostoa ei ole jaettu yhteyshenkilöille. Vaihda näkyvyyttä uudelleen päivittääksesi.';
$lang['share_file_with_show']                     = 'Tämä tiedosto on jaettu seuraaville: %s';
$lang['allow_primary_contact_to_view_edit_billing_and_shipping'] = 'Salli ensisijaisen yhteyshenkilön nähdä ja muokata laskutus- ja toimitustietoja';
$lang['estimate_due_after']                       = 'Tarjouksen voimassaoloaika (päivää)';

# Version 1.6.0
$lang['my_timesheets']                            = 'Omat tuntikirjaukset';
$lang['today']                                    = 'Tänään';
$lang['open_in_dropbox']                          = 'Avaa Dropboxissa';
$lang['show_primary_contact']                     = 'Näytä ensisijaisen yhteyshenkilön koko nimi %s';
$lang['view_members_timesheets']                  = 'Näytä kaikki tuntikirjaukset';
$lang['priority']                                 = 'Prioriteetti';
$lang['fetch_from_google']                        = 'Hae Google-palvelusta';
$lang['customer_fetch_lat_lng_usage']             = 'Täytä osoite, kaupunki ja maa ennen hakemista saadaksesi parhaan tuloksen.';
$lang['g_search_address_not_found']               = 'Osoitetta ei löytynyt. Yritä uudelleen';
$lang['proposals_report']                         = 'Ehdotusraportti';
$lang['staff_members_open_tickets_to_all_contacts_help'] = 'Jos henkilöstön jäsenellä ei ole oikeutta asiakkaisiin, VIEW-oikeudella voi luoda vain uusia tikettejä hallintapuolelta asiakaskontakteihin, joihin hänet on määritetty asiakashallinnassa.';
$lang['staff_members_open_tickets_to_all_contacts'] = 'Annetaanko henkilöstölle mahdollisuus avata tikettejä kaikille yhteyshenkilöille?';
$lang['charts_based_report']                      = 'Kaavioihin perustuva raportti';
$lang['responsible_admin']                        = 'Vastuullinen ylläpitäjä';
$lang['tags']                                     = 'Tunnisteet';
$lang['tag']                                      = 'Tunniste';
$lang['customer_map_notice']                      = 'Lisää pituus- ja leveysasteet näyttääksesi kartan tässä.';
$lang['default_view']                             = 'Oletusnäkymä';
$lang['day']                                      = 'Päivä';
$lang['agenda']                                   = 'Esityslista';
$lang['timesheet_tags']                           = 'Tuntikirjausten tunnisteet';
$lang['show_more']                                = 'Näytä lisää';
$lang['show_less']                                = 'Näytä vähemmän';
$lang['project_completed_date']                   = 'Valmistuspäivämäärä';
$lang['language']                                 = 'Kieli';
$lang['this_week']                                = 'Tämä viikko';
$lang['last_week']                                = 'Viime viikko';
$lang['this_month']                               = 'Tässä kuussa';
$lang['last_month']                               = 'Viime kuukausi';
$lang['no_description_project']                   = 'Ei kuvausta tälle projektille';
$lang['sales_string']                             = 'Myynti';
$lang['no_project_members']                       = 'Ei jäseniä tässä projektissa';
$lang['search_by_tags']                           = 'Käytä # + -tunnusta hakeaksesi tunnisteiden perusteella';
$lang['project_status_5']                         = 'Peruttu';

# Version 1.7.0
$lang['not_activity_new_reminder_created']        = 'asetti uuden muistutuksen kohteelle %s päivälle %s';
$lang['not_activity_new_task_created']            = 'Loi uuden tehtävän - %s';
$lang['recurring_invoice_draft_notice']           = 'Tämä lasku on Luonnos-tilassa. Sinun on merkittävä lasku lähetetyksi. Luonnos-tilassa olevia toistuvia laskuja ei luoda uudelleen automaattisesti.';
$lang['recurring_recreate_hour_notice']           = '%s luodaan uudelleen tiettyyn kellonaikaan Cron Job -asetusten mukaisesti (Asetukset -> Asetukset -> Cron Job).';
$lang['invoice_project_include_timesheets_notes'] = 'Sisällytä jokainen tuntikirjausmerkintä tuotteen kuvaukseen';
$lang['events']                                   = 'Tapahtumat';
$lang['clear']                                    = 'Tyhjennä';
$lang['auto_mark_as_public']                      = 'Merkitse automaattisesti julkiseksi';
$lang['time_format']                              = 'Aikamuoto';
$lang['time_format_24']                           = '24 tuntia';
$lang['time_format_12']                           = '12 tuntia';
$lang['delete_activity_log_older_then']           = 'Poista järjestelmän aktiviteettiloki, joka on vanhempi kuin X kuukautta';
$lang['mark_as_read']                             = 'Merkitse luetuksi';
$lang['mark_all_as_read']                         = 'Merkitse kaikki luetuksi';
$lang['tax_1']                                    = 'Vero 1';
$lang['tax_2']                                    = 'Vero 2';
$lang['total_with_tax']                           = 'Yhteensä veroineen';
$lang['new_task_auto_assign_current_member']      = 'Määritä tehtävän luoja automaattisesti vastuuhenkilöksi, kun uusi tehtävä luodaan';
$lang['new_task_auto_assign_current_member_help'] = 'Ei koske tehtäviä, jotka on linkitetty projektiin, jos luoja ei ole projektin jäsen.';
$lang['copy_project_tasks_status']                = 'Tehtävien tila';
$lang['tasks_summary']                            = 'Tehtävien yhteenveto';
$lang['vault']                                    = 'Holvi';
$lang['new_vault_entry']                          = 'Uusi holvimerkintä';
$lang['server_address']                           = 'Palvelimen osoite';
$lang['port']                                     = 'Portti';
$lang['vault_username']                           = 'Käyttäjänimi';
$lang['vault_password']                           = 'Salasana';
$lang['vault_description']                        = 'Lyhyt kuvaus';
$lang['vault_entry']                              = 'Holvimerkintä';
$lang['no_port_provided']                         = 'Ei annettu';
$lang['view_password']                            = 'Näytä salasana';
$lang['security_reasons_re_enter_password']       = 'Kirjoita salasanasi turvallisuussyistä';
$lang['password_change_fill_notice']              = 'Täytä salasanakenttä vain, jos haluat vaihtaa salasanan.';
$lang['vault_password_user_not_correct']          = 'Salasanasi on virheellinen. Yritä uudelleen.';
$lang['no_vault_entries']                         = 'Holvimerkintöjä ei löytynyt tälle asiakkaalle.';
$lang['vault_entry_created_from']                 = 'Tämän holvimerkinnän on luonut %s';
$lang['vault_entry_last_update']                  = 'Viimeksi päivittänyt %s';
$lang['vault_entry_visible_to_all']               = 'Näkyvissä kaikille henkilöstön jäsenille, joilla on pääsy tähän asiakkaaseen.';
$lang['vault_entry_visible_creator']              = 'Näkyvissä vain minulle (ei koske ylläpitäjiä).';
$lang['vault_entry_visible_administrators']       = 'Näkyvissä vain ylläpitäjille.';
$lang['my_reminders']                             = 'Muistutukseni';
$lang['reminder_related']                         = 'Liittyen';
$lang['event_notification']                       = 'Ilmoitus';
$lang['days']                                     = 'Päivää';
$lang['reminder_notification_placeholder']        = 'Esim. 30 minuuttia ennen';
$lang['event_color']                              = 'Tapahtuman väri';
$lang['group_by_task']                            = 'Ryhmittele tehtävän mukaan';
$lang['save']                                     = 'Tallenna';
$lang['disable_languages']                        = 'Poista kielet käytöstä';


# Version 1.8.0
$lang['not_customer_viewed_invoice']              = 'Lasku numerolla %s on katsottu';
$lang['not_customer_viewed_estimate']             = 'Tarjous numero %s on katsottu';
$lang['not_customer_viewed_proposal']             = 'Ehdotus numero %s on katsottu';
$lang['display_inline']                           = 'Näytä riveillä (inline)';
$lang['email_header']                             = 'Valmis ylätunniste';
$lang['email_footer']                             = 'Valmis alatunniste';
$lang['exclude_proposal_from_client_area_with_draft_status'] = 'Piilota luonnos-tilassa olevat ehdotukset asiakaspuolelta.';
$lang['pusher_app_key']                           = 'Sovelluksen avain';
$lang['pusher_app_secret']                        = 'Sovelluksen salaisuus';
$lang['pusher_app_id']                            = 'Sovelluksen ID';
$lang['pusher_cluster_notice']                    = 'Jätä tyhjäksi käyttääksesi oletusarvoista Pusher-klusteria.';
$lang['pusher_enable_realtime_notifications']     = 'Ota käyttöön reaaliaikaiset ilmoitukset';
$lang['task_is_overdue']                          = 'Tämä tehtävä on myöhässä';
$lang['this_year']                                = 'Tämä vuosi';
$lang['last_year']                                = 'Viime vuonna';
$lang['customer_statement']                       = 'Tiliote';
$lang['customer_statement_for']                   = 'Tiliote kohteelle %s';
$lang['account_summary']                          = 'Tilin yhteenveto';
$lang['statement_beginning_balance']              = 'Alkusaldo';
$lang['invoiced_amount']                          = 'Laskutettu summa';
$lang['amount_paid']                              = 'Maksettu summa';
$lang['statement_from_to']                        = '%s - %s';
$lang['customer_statement_info']                  = 'Näytetään kaikki laskut ja maksut väliltä %s - %s';
$lang['balance_due']                              = 'Erääntyvä saldo';
$lang['statement_heading_date']                   = 'Päivä';
$lang['statement_heading_details']                = 'Lisätiedot';
$lang['statement_heading_amount']                 = 'Summa';
$lang['statement_heading_payments']               = 'Maksut';
$lang['statement_heading_balance']                = 'Saldo';
$lang['statement_invoice_details']                = 'Lasku %s - erääntyy %s';
$lang['statement_payment_details']                = 'Maksu (%s) laskulle %s';
$lang['statement_bill_to']                        = 'Laskutusosoite';
$lang['send_to_email']                            = 'Lähetä sähköpostiin';
$lang['statement_sent_to_client_success']         = 'Tiliote lähetettiin onnistuneesti asiakkaalle.';
$lang['statement_sent_to_client_fail']            = 'Virhe tiliotteen lähettämisessä.';
$lang['view_account_statement']                   = 'Näytä tiliote';
$lang['text_not_recommended_for_servers_limited_resources'] = 'Ei suositella, jos palvelimella on rajoitetut resurssit. Esim. jaettu hostaus';
$lang['tasks_bull_actions_assign_notice']         = 'Jos tehtävä on linkitetty projektiin ja henkilöstö, jolle määrität tehtävän, ei ole projektin jäsen, tämä henkilöstö lisätään automaattisesti jäseneksi.';
$lang['company_information']                      = 'Yrityksen tai Yhdistyksen tiedot';
$lang['ticket_form']                              = 'Palvelupyyntö henkilöltä';
$lang['ticket_form_subject']                      = 'Aihe';
$lang['ticket_form_name']                         = 'Sinun nimesi';
$lang['ticket_form_email']                        = 'Sähköpostiosoite';
$lang['ticket_form_department']                   = 'Osasto';
$lang['ticket_form_message']                      = 'Viesti';
$lang['ticket_form_priority']                     = 'Prioriteetti';
$lang['ticket_form_service']                      = 'Palvelu';
$lang['ticket_form_submit']                       = 'Lähetä';
$lang['ticket_form_attachments']                  = 'Liitteet';
$lang['success_submit_msg']                       = 'Kiitos yhteydenotostasi. Saamme takaisin pikapuoliin.';
$lang['vault_entry_share_on_projects']            = 'Jaa tämä holvikohta projektiin projektin jäsenten kanssa';
$lang['project_shared_vault_entry_login_details'] = 'Tarkastele asiakassivun kirjautumistietoja';
$lang['iso_code']                                 = 'ISO-koodi';
$lang['estimates_not_invoiced']                   = 'Ei vielä laskutettu';
$lang['show_on_ticket_form']                      = 'Näytä palvelupyyntölomakkeessa';
$lang['cancel_upload']                            = 'Peruuta lähetys';
$lang['show_table_export_button']                 = 'Näytä taulukon vientipainike';
$lang['show_table_export_all']                    = 'Kaikille henkilökunnan jäsenille';
$lang['show_table_export_admins']                 = 'Vain järjestelmänvalvojille';
$lang['show_table_export_hide']                   = 'Piilota vientipainike kaikilta työntekijöiltä';
$lang['task_created_by']                          = 'Luonut %s';
$lang['validation_extension_not_allowed']         = 'Tiedostotunnistetta ei sallita';
$lang['allow_staff_view_proposals_assigned']      = 'Antakaa henkilöstön jäsenten katsoa ehdotuksia, joihin heidät on määrätty';
$lang['task_users_working_on_tasks_multiple']     = 'Tällä hetkellä %s työskentelee näiden tehtävien parissa';
$lang['task_users_working_on_tasks_single']       = 'Tällä hetkellä %s työskentelee tämän tehtävän parissa';

# Version 1.9.0
$lang['estimated_hours']                          = 'Tuntiarvio';
$lang['two_factor_auth_failed_to_send_code']      = 'Kaksivaiheisen todennuskoodin lähettäminen epäonnistui. Tarkista SMTP-asetukset.';
$lang['two_factor_auth_code_sent_successfully']   = 'Vahvistuskoodi on lähetetty sähköpostiisi %s.';
$lang['enable_two_factor_authentication']         = 'Ota kaksivaiheinen todennus käyttöön';
$lang['two_factor_authentication_info']           = 'Kaksivaiheinen todennus toimitetaan sähköpostitse. Varmista, että SMTP-asetukset on määritetty oikein. Yksilöllinen todennuskoodi lähetetään sähköpostiisi sisäänkirjautumisen yhteydessä.';
$lang['timesheets_overview_all_members_notice_admins'] = 'Kaikkien henkilöstön jäsenten tuntilomakkeet ovat nähtävissä vain ylläpitäjille.';
$lang['two_factor_authentication']                = 'Kaksivaiheinen todennus';
$lang['two_factor_authentication_code']           = 'Koodi';
$lang['admin_two_factor_auth_heading']            = 'Todennuskoodi';
$lang['two_factor_code_not_valid']                = 'Todennuskoodi ei kelpaa';
$lang['back_to_login']                            = 'Palaa takaisin sisäänkirjautumiseen';
$lang['enter_activity']                           = 'Syötä aktiviteettia';
$lang['attach_files']                             = 'Liitä tiedostot';
$lang['no_tags_used']                             = 'Järjestelmä ei käytä tunnisteita';
$lang['exclude_completed_tasks']                  = 'Sulje pois suoritetut tehtävät';
$lang['modal_width_class']                        = 'Modaalileveysluokka';
$lang['contract_copy']                            = 'Kopioi';
$lang['contract_copied_successfully']             = 'Sopimus kopioitiin onnistuneesti';
$lang['contract_copied_fail']                     = 'Sopimuksen kopiointi epäonnistui';
$lang['project_marked_as_finished_to_contacts']   = 'Lähetä "Projekti valmis" -sähköposti asiakkaan yhteyshenkilöille';
$lang['only_admins']                              = 'Vain ylläpitäjät';
$lang['new_notification']                         = 'Uusi ilmoitus';
$lang['enable_desktop_notifications']             = 'Ota työpöytäilmoitukset käyttöön';
$lang['save_and_send']                            = 'Tallenna ja lähetä';
$lang['private']                                  = 'Yksityinen';
$lang['task_created_at']                          = 'Luotu %s';
$lang['hide_notified_reminders_from_calendar']    = 'Piilota ilmoitetut muistutukset kalenterista';
$lang['last_active']                              = 'Viimeksi aktiivinen';
$lang['open_ticket']                              = 'Avaa palvelupyyntö';
$lang['task_add_description']                     = 'Lisää kuvaus';
$lang['project_setting_create_tasks']             = 'luoda tehtäviä';
$lang['project_setting_edit_tasks']               = 'muokata tehtäviä (vain omat tehtävät)';

# Version 1.9.2
$lang['items_report']                             = 'Tuoteraportti';
$lang['reports_item']                             = 'Tuote';
$lang['quantity_sold']                            = 'Myyty määrä';
$lang['total_amount']                             = 'Yhteensä';
$lang['avg_price']                                = 'Keskiarvohinta';
$lang['item_report_paid_invoices_notice']         = 'Tuoteraportti luodaan vain maksetuista laskuista ennen alennuksia ja veroja.';
$lang['overview']                                 = 'Yleiskatsaus';
$lang['timer_started_change_status_in_progress']  = 'Vaihda tehtävän tilaksi "Käynnissä", kun ajastin käynnistetään (vain jos tila on "Ei alkanut")';
$lang['company_info_format']                      = 'Yrityksen tietojen muoto (PDF ja HTML)';
$lang['customer_info_format']                     = 'Asiakkaan tietojen muoto (PDF ja HTML)';
$lang['custom_field_info_format_embed_info']      = 'Kohteen %s mukautetut kentät voidaan upottaa PDF- ja HTML-asiakirjoihin lisäämällä yhdistämiskentät sivulla %s.';
$lang['transfer_lead_notes_to_customer']          = 'Siirrä liidin muistiinpanot asiakasprofiiliin';
$lang['authorized_signature_text']                = 'Valtuutettu allekirjoitus';
$lang['show_pdf_signature_invoice']               = 'Näytä PDF-allekirjoitus laskussa';
$lang['show_pdf_signature_estimate']              = 'Näytä PDF-allekirjoitus tarjouksessa';
$lang['signature']                                = 'Allekirjoitus';
$lang['signature_image']                          = 'Allekirjoituskuva';
$lang['insert_checklist_templates']               = 'Lisää tarkistuslistan malleja';
$lang['save_as_template']                         = 'Tallenna malliksi';
$lang['scroll_responsive_tables_help']            = 'Suuret taulukot ovat vaakasuunnassa vieritettäviä rivien rivityksen sijaan.';
$lang['scroll_responsive_tables']                 = 'Ota käyttöön vieritettävät taulukot';
$lang['invoice_item_add_edit_rate_currency']      = 'Hinta - %s';
$lang['total_files_deleted']                      = 'Tiedostoja poistettu yhteensä: %s';
$lang['invalid_transaction']                      = 'Virheellinen tapahtuma. Yritä uudelleen.';
$lang['payment_gateway_payu_money_key']           = 'PayU Money Key';
$lang['payment_gateway_payu_money_salt']          = 'PayU Money Salt';
$lang['settings_paymentmethod_description']       = 'Maksun kuvaus yhdyskäytävässä';

# Version 1.9.3
$lang['default_ticket_reply_status']              = 'Palvelupyynnön oletustila vastatessa';
$lang['ticket_add_response_and_back_to_list']     = 'Palaa palvelupyyntölistaan vastauksen lähettämisen jälkeen';

# Version 1.9.4
$lang['default_task_status']                      = 'Tehtävän oletustila uutta tehtävää luotaessa';
$lang['custom_field_pdf_html_help']               = 'Varmista, että olet valinnut "' . $lang['custom_field_show_on_client_portal'] . '", jos haluat kenttien näkyvän asiakaspuolella ja PDF-dokumenteissa.';
$lang['auto']                                     = 'Auto';
$lang['email_queue']                              = 'Sähköpostijono';
$lang['email_queue_enabled']                      = 'Ota sähköpostijono käyttöön';
$lang['email_queue_skip_attachments']             = 'Älä lisää liitteitä sisältäviä sähköposteja jonoon?';
$lang['disable']                                  = 'Poista käytöstä';
$lang['enable']                                   = 'Ota käyttöön';
$lang['auto_dismiss_desktop_notifications_after'] = 'Sulje työpöytäilmoitukset automaattisesti X sekunnin kuluttua (0 = pois käytöstä)';
$lang['proposal_info_format']                     = 'Ehdotuksen tietojen muoto (PDF ja HTML)';
$lang['hide_tasks_on_main_tasks_table']           = 'Piilota projektitehtävät päätehtävien taulukosta (järjestelmänvalvojan alue)';
$lang['ticket_replies_order']                     = 'Palvelupyyntövastausten järjestys';
$lang['ticket_replies_order_notice']              = 'Alkuperäinen palvelupyyntöviesti näytetään aina ensimmäisenä.';
$lang['invoice_cancelled_email_disabled']         = 'Lasku on peruutettu. Poista peruutettu-merkintä voidaksesi lähettää sähköpostia asiakkaalle.';
$lang['email_notifications']                      = 'Sähköposti-ilmoitukset';
$lang['invoice_activity_record_payment_email_to_customer'] = 'Maksu tallennettu, sähköposti lähetetty: %s';
$lang['exclude_inactive']                         = 'Sulje pois epäaktiiviset';
$lang['disable_all']                              = 'Poista kaikki käytöstä';
$lang['enable_all']                               = 'Ota kaikki käyttöön';
$lang['reccuring_invoice_option_gen_and_send']    = 'Luo ja lähetä uusittu lasku automaattisesti asiakkaalle';
$lang['reccuring_invoice_option_gen_unpaid']      = 'Luo maksamaton lasku';
$lang['reccuring_invoice_option_gen_draft']       = 'Luo luonnos-tilassa oleva lasku';
$lang['event_created_by']                         = 'Tämän tapahtuman loi %s';

# Version 1.9.5
$lang['customers_assigned_to_me']                 = 'Minulle määritetyt asiakkaat';
$lang['bcc_all_emails']                           = 'Piilokopioi (BCC) kaikki sähköpostit osoitteeseen';
$lang['confirmation_of_identity']                 = 'Identiteetin vahvistus';
$lang['accept_identity_confirmation']             = 'Vaadi identiteetin vahvistus hyväksyttäessä';
$lang['accepted_identity_info']                   = 'Tämä %s on hyväksytty henkilön %s toimesta %s IP-osoitteesta %s';
$lang['clear_this_information']                   = 'Tyhjennä nämä tiedot';
$lang['new_task_auto_follower_current_member']    = 'Lisää tehtävän luoja automaattisesti seuraajaksi, kun uusi tehtävä luodaan';
$lang['expenses_report_net']                      = 'Nettosumma (välisumma)';
$lang['expense_field_billable_help']              = 'Jos laskutettava, %s voidaan lisätä laskun pitkään kuvaukseen.';
$lang['task_biillable_checked_on_creation']       = 'Onko "Laskutettava"-vaihtoehto oletuksena valittuna uutta tehtävää luotaessa? (vain hallintapuolella)';
$lang['pause_overdue_reminders']                  = 'Pysäytä erääntymismuistutukset';
$lang['resume_overdue_reminders']                 = 'Jatka erääntymismuistutuksia';
# Credit Notes
$lang['credit_notes']                             = 'Hyvityslaskut';
$lang['credit_note']                              = 'Hyvityslasku';
$lang['credit_note_lowercase']                    = 'hyvityslasku';
$lang['credit_note_not_found']                    = 'Hyvityslaskua ei löytynyt';
$lang['credit_note_date']                         = 'Hyvityslaskun päivämäärä';
$lang['credit_date']                              = 'Päivä';
$lang['settings_sales_next_credit_note_number']   = 'Seuraavan hyvityslaskun numero';
$lang['credit_note_number_prefix']                = 'Hyvityslaskun numeron etuliite';
$lang['credit_note_number']                       = 'Hyvityslasku #';
$lang['credit_note_number_exists']                = 'Hyvityslaskun numero on jo olemassa';
$lang['show_shipping_on_credit_note']             = 'Näytä toimitustiedot hyvityslaskussa';
$lang['credit_note_number_decrement_on_delete']   = 'Pienennä hyvityslaskun numeroa poistettaessa.';
$lang['credit_note_number_decrement_on_delete_help'] = 'Numeroa pienennetään vain, jos se on viimeisin luotu hyvityslasku.';
$lang['credit_note_status']                       = 'Tila';
$lang['credit_note_status_open']                  = 'Avoin';
$lang['credit_note_status_closed']                = 'Suljettu';
$lang['credit_note_status_void']                  = 'Mitätön';
$lang['credit_note_mark_as_open']                 = 'Merkitse avoimeksi';
$lang['new_credit_note']                          = 'Uusi hyvityslasku';
$lang['credit_note_amount']                       = 'Määrä';
$lang['credit_note_remaining_credits']            = 'Jäljellä oleva määrä';
$lang['credit_note_client_note']                  = 'Merkintä';
$lang['invoices_credited']                        = 'Hyvitetyt laskut';
$lang['apply_credits']                            = 'Käytä hyvityksiä';
$lang['x_credits_available']                      = '%s hyvitystä käytettävissä.';
$lang['credit_amount']                            = 'Hyvityksen määrä';
$lang['credits_available']                        = 'Hyvityksiä käytettävissä';
$lang['amount_to_credit']                         = 'Hyvitettävä määrä';
$lang['invoice_credits_applied']                  = 'Hyvitykset lisätty laskulle onnistuneesti';
$lang['applied_credits']                          = 'Käytetyt hyvitykset';
$lang['credit_amount_bigger_then_invoice_balance'] = 'Hyvitysten kokonaismäärä on suurempi kuin laskun erääntyvä saldo';
$lang['credit_amount_bigger_then_credit_note_remaining_credits'] = 'Hyvitysten kokonaismäärä on suurempi kuin jäljellä olevat hyvitykset';
$lang['credited_invoices_not_found']              = 'Hyvitettyjä laskuja ei löytynyt';
$lang['credit_invoice_number']                    = 'Laskun numero';
$lang['credits_used']                             = 'Käytetyt hyvitykset';
$lang['credits_remaining']                        = 'Jäljellä olevat hyvitykset';
$lang['amount_credited']                          = 'Hyvitetty määrä';
$lang['credits_applied_cant_delete_status_closed'] = 'Tämän hyvityslaskun tila on Suljettu. Sinun on ensin poistettava hyvitykset voidaksesi poistaa hyvityslaskun.';
$lang['credits_applied_cant_delete_credit_note']  = 'Tässä hyvityslaskussa on käytettyjä hyvityksiä. Sinun on ensin poistettava hyvitykset voidaksesi poistaa hyvityslaskun.';
$lang['credit_note_pdf_heading']                  = 'HYVITYSLASKU';
$lang['show_status_on_pdf']                       = 'Näytä %s tila PDF-asiakirjoissa';
$lang['show_pdf_signature_credit_note']           = 'Näytä PDF-allekirjoitus hyvityslaskussa';
$lang['calendar_credit_note_reminder']            = 'Hyvityslaskun muistutus';
$lang['show_credit_note_reminders_on_calendar']   = 'Hyvityslaskun muistutukset';
$lang['reminders']                                = 'Muistutukset';
$lang['invoice_activity_applied_credits']         = 'lisäsi hyvityksiä %s kohteesta %s';
$lang['create_credit_note']                       = 'Luo hyvityslasku';
$lang['confirm_invoice_credits_from_credit_note'] = 'Kun luot hyvityslaskun maksamattomasta laskusta, hyvityslaskun summa lisätään tälle laskulle. Oletko varma, että haluat luoda hyvityslaskun?';
$lang['credit_invoice_date']                      = 'Laskun päivämäärä';
$lang['apply_to_invoice']                         = 'Lisää laskulle';
$lang['apply_credits_from']                       = 'Lisää hyvitykset kohteesta %s';
$lang['credits_successfully_applied_to_invoices'] = 'Laskun hyvitykset lisätty onnistuneesti';
$lang['credit_note_send_to_client_modal_heading'] = 'Lähetä hyvityslasku asiakkaalle';
$lang['credit_note_sent_to_client_success']       = 'Hyvityslasku on lähetetty onnistuneesti asiakkaalle';
$lang['credit_note_sent_to_client_fail']          = 'Virhe lähetettäessä hyvityslaskua sähköpostitse';
$lang['credit_note_no_invoices_available']        = 'Tälle asiakkaalle ei ole saatavilla olevia laskuja.';
$lang['show_total_paid_on_invoice']               = 'Näytä laskulla maksettu summa yhteensä';
$lang['show_credits_applied_on_invoice']          = 'Näytä laskulla käytetyt hyvitykset';
$lang['show_amount_due_on_invoice']               = 'Näytä laskulla summan määrä';
$lang['customer_profile_update_credit_notes']     = 'Päivitä toimitus-/laskutustiedot kaikissa aiemmissa hyvityslaskuissa (ei koske suljettuja hyvityslaskuja)';
$lang['zip_credit_notes']                         = 'Pakkaa hyvityslaskut .zip-tiedostoksi';
$lang['statement_credit_note_details']            = 'Hyvityslasku %s';
$lang['statement_credits_applied_details']        = 'Hyvitykset lisätty hyvityslaskusta %s - %s maksuna summalle %s';
$lang['credit_note_files']                        = 'Hyvityslaskun tiedostot';
$lang['credit_notes_report']                      = 'Hyvityslaskujen raportti';

$lang['credit_note_set_reminder_title']           = 'Aseta hyvityslaskun muistutus';
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
$lang['ticket_assigned']                          = 'Määritetty';
$lang['dashboard_options']                        = 'Hallintapaneelin asetukset';
$lang['reset_dashboard']                          = 'Nollaa hallintapaneeli';
$lang['widgets']                                  = 'Widgetit';
$lang['s_chart']                                  = '%s-kaavio';
$lang['quick_stats']                              = 'Pikatilastot';
$lang['user_widget']                              = 'Käyttäjän widget';
$lang['widgets_visibility_help_text']             = 'Widgetejä, jotka näytetään vain, jos niissä on riittävästi tietoa, ei voi piilottaa tai näyttää manuaalisesti.';
$lang['show_project_on_estimate']                 = 'Näytä projektin nimi tarjouksessa';
$lang['show_project_on_invoice']                  = 'Näytä projektin nimi laskussa';
$lang['show_project_on_credit_note']              = 'Näytä projektin nimi hyvityslaskussa';
$lang['visible_tabs']                             = 'Näkyvät välilehdet';
$lang['all']                                      = 'Kaikki';
$lang['view_widgetable_area']                     = 'Näytä Widgetable-alue';
$lang['hide_widgetable_area']                     = 'Piilota Widgetable-alue';
$lang['no_items_warning']                         = 'Kirjoita ainakin yksi kohde.';
$lang['item_forgotten_in_preview']                = 'Oletko unohtanut lisätä tämän tuotteen?';
$lang['not_task_status_changed']                  = '%s - tehtävän tilaksi muutettu %s';
$lang['not_project_activity_task_status_changed'] = 'Tehtävän tila muuttui';
$lang['reset']                                    = 'Nollaa';
$lang['save_message_as_predefined_reply']         = 'Tallenna viesti valmiiksi vastaukseksi';
$lang['inline_create_option']                     = 'Salli muiden kuin ylläpitäjien luoda %s kohdassa %s (luonti/muokkaus)?';
$lang['inline_create']                            = 'Luo riveillä (Inline)';
$lang['inline_create_option_predefined_replies']  = 'Salli muiden kuin ylläpitäjien tallentaa valmiita vastauksia palvelupyyntöviesteistä';
$lang['reminders_view_none_admin']                = 'Näytetään omat muistutuksesi ja sinun luomasi muistutukset.';
$lang['show_tabs_and_options']                    = 'Näytä välilehdet ja asetukset';
$lang['no_milestones_found']                      = 'Projektilla ei ole vielä tavoitteita';
$lang['lead_is_contact_create_task']              = 'Luo tehtävä, jos sähköpostin lähettäjä on jo asiakas, ja määritä se vastuuhenkilölle.';
$lang['existing_customer']                        = 'Olemassa oleva asiakas';
$lang['use_company_name_instead']                 = 'Käytä sen sijaan yrityksen nimeä';
$lang['customer_delete_transactions_warning']     = 'Tällä asiakkaalla on tapahtumia (%s). Sinun on poistettava tapahtumat tai siirrettävä ne toiselle asiakkaalle voidaksesi suorittaa tämän toiminnon.';

# Version 1.9.8
$lang['sending_email_contact_permissions_warning'] = 'Asiakkaan yhteyshenkilöiden automaattinen valinta epäonnistui. Varmista, että asiakkaalla on aktiivisia yhteyshenkilöitä ja että sähköposti-ilmoitukset (%s) on otettu käyttöön heille.';
$lang['help_leads_create_permission']             = 'Kaikki henkilöstön jäsenet voivat luoda liidejä, lukuun ottamatta niitä, joita ei ole merkitty henkilöstön jäseniksi.';
$lang['help_leads_edit_permission']               = 'Kaikki, joilla on pääsy tiettyyn liidiin, voivat muokata useimpia liidin tietoja.';
$lang['triggers']                                 = 'Liipaisimet';
$lang['templates']                                = 'Mallit';
$lang['add_template']                             = 'Lisää malli';
$lang['edit_template']                            = 'Muokkaa mallia';
$lang['template_added']                           = 'Malli lisättiin onnistuneesti';
$lang['template_updated']                         = 'Malli päivitettiin onnistuneesti';
$lang['notice_only_one_active_sms_gateway']       = 'Vain yksi aktiivinen SMS-yhdyskäytävä on sallittu';
$lang['template_content']                         = 'Mallin sisältö';
$lang['insert_template']                          = 'Lisää';
$lang['items_table_amounts_exclude_currency_symbol'] = 'Jätä valuuttasymboli pois tuotetaulukon summasta';
$lang['multiplies_of']                            = 'Moninkertaiset';
$lang['round_off_task_timer_option']              = 'Pyöristä tehtäväajastin';
$lang['task_timer_dont_round_off']                = 'Älä pyöristä';
$lang['task_timer_round_up']                      = 'Pyöristä ylöspäin';
$lang['task_timer_round_down']                    = 'Pyöristä alaspäin';
$lang['task_timer_round_nearest']                 = 'Pyöristä lähimpään';
$lang['calendar_task_reminder']                   = 'Tehtävämuistutus';
$lang['projects_chart']                           = 'Projektikaavio';
$lang['overdue_by_days']                          = 'MYÖHÄSSÄ %s PÄIVÄÄ';
$lang['two_checkout_payment_processing']          = 'Maksua käsitellään, saat ilmoituksen jos se onnistuu';
$lang['two_checkout_payment_cancelled']           = 'Maksu peruttu';
$lang['two_checkout_merchant_code']               = 'Kauppiaskoodi';
$lang['two_checkout_secret_Key']                  = 'Salainen koodi';
$lang['two_gateway_webhook_notice']               = '2Checkout IPN-päätepiste on ( %s )';
$lang['something_went_wrong']                     = 'Jokin meni pieleen. Yritä uudelleen';
$lang['imap_folder']                              = 'Kansio';
$lang['retrieve_folders']                         = 'Hae kansiot';
$lang['email_to_ticket_config']                   = 'Sähköpostista palvelupyyntöön määritykset';
$lang['sms_trigger_disable_tip']                  = 'Jätä sisältö tyhjäksi poistaaksesi tietyn käynnistimen käytöstä.';
$lang['tables']                                   = 'Taulukot';
$lang['only_project_tasks']                       = 'Vain projektiin liittyvät tehtävät';
$lang['download_all']                             = 'Lataa KAIKKI';
$lang['settings_sales_credit_note_number_format'] = 'Hyvityslaskun numeromuoto';
$lang['sms_reminder_sent_to']                     = 'SMS-muistutus lähetetty vastaanottajalle %s';
$lang['ideal_customer_statement_descriptor']      = 'Tiliotekuvaus (näkyy asiakkaan tiliotteessa)';
$lang['payment_received_awaiting_confirmation']   = 'Maksusi vastaanotettiin ja se odottaa vielä vahvistusta.';
$lang['discount_fixed_amount']                    = 'Kiinteä määrä';
$lang['timesheet_duration_instead']               = 'Syötä sen sijaan ajan kesto';
$lang['timesheet_date_instead']                   = 'Aseta sen sijaan aloitus- ja lopetusaika';
$lang['allow_non_admin_members_to_import_leads']  = 'Salli muiden kuin järjestelmänvalvojien henkilöstön tuoda liidejä';
$lang['project_hide_tasks_settings_info']         = 'Tehtävät on suljettu pois tämän projektin päätehtävätaulukosta, voit tarkastella projektin tehtäviä vain tällä alueella.';

# Version 1.9.9
$lang['ticket_create_no_contact']                 = 'Palvelupyyntö ilman kontaktia';
$lang['ticket_create_to_contact']                 = 'Palvelupyyntö yhteystietoihin';
$lang['showing_billable_tasks_from_project']      = 'Näytetään laskutettavat tehtävät projektista';
$lang['no_billable_tasks_found']                  = 'Laskutettavia tehtäviä ei löytynyt';
$lang['help_leads_permission_view']               = 'Jos tätä lupaa ei tarkisteta, toimihenkilö voi tarkastella vain liidejä mihin on osoitettu, työntekijän luomia liidejä ja julkisiksi merkittyjä liidejä';

# Version 2.0.0

$lang['customers']                                              = $lang['clients'];
$lang['knowledge_base']                                         = $lang['kb_string'];
$lang['staff']                                                  = $lang['als_staff'];
$lang['checklist_templates']                      = 'Tehtäväluettelomallit';
$lang['emails_tracking']                          = 'Sähköpostien seuranta';
$lang['no_tracked_emails_sent']                   = 'Seurattuja sähköposteja ei lähetetty';
$lang['tracked_emails_sent']                      = 'Seuratut sähköpostit lähetetty';
$lang['tracked_email_date']                       = 'Päivä';
$lang['tracked_email_subject']                    = 'Aihe';
$lang['tracked_email_to']                         = 'Vastaanottaja';
$lang['tracked_email_opened']                     = 'Avattu';
$lang['tracked_email_not_opened']                 = 'Ei avattu';
$lang['not_viewed_yet']                           = 'Asiakas ei ole vielä nähnyt %s';
$lang['undo']                                     = 'Peru';
$lang['sign_document_validation']                 = 'Ole hyvä ja allekirjoita asiakirja.';
$lang['document_customer_signature_text']         = 'Allekirjoitus (asiakas)';
$lang['accept_identity_confirmation_and_signature_sign'] = 'Vaadi hyväksymisen yhteydessä digitaalinen allekirjoitus ja henkilöllisyysvahvistusta';
$lang['legal_bound_text']                         = 'Lakisääteinen teksti';
$lang['e_signature_sign']                         = 'Allekirjoita';
$lang['is_signed']                                = 'Allekirjoitettu';
$lang['is_not_signed']                            = 'Ei allekirjoitettu';
$lang['download']                                 = 'Lataa';
$lang['view_pdf_in_new_window']                   = 'Näytä PDF uudessa välilehdessä';
$lang['show_pdf_signature_contract']              = 'Näytä PDF-allekirjoitus sopimuksessa';
$lang['document_signed_successfully']             = 'Olet allekirjoittanut tämän asiakirjan onnistuneesti';
$lang['document_signed_info']                     = 'Tämä asiakirjan on allekirjoittanut %s %s IP-osoitteesta %s';
$lang['keep_signature']                           = 'Pidä asiakkaan allekirjoitus';
$lang['view_contract']                            = 'Näytä sopimus';
$lang['summary']                                  = 'Yhteenveto';
$lang['discussion']                               = 'Keskustelu';
$lang['general_information']                      = 'Yleistä tietoa';
$lang['proposal_information']                     = 'Ehdotuksen tiedot';
$lang['contract_comments']                        = 'Kommentit';
$lang['not_contract_comment_from_client']         = 'Uusi kommentti asiakkaalta sopimuksessa %s ...';
$lang['contract_files']                           = 'Sopimustiedostot';
$lang['date_signed']                              = 'Allekirjoituspäivämäärä';
$lang['clear_signature']                          = 'Tyhjennä allekirjoitus';
$lang['recurring_has_ended']                      = 'Tämä toistuva %s on päättynyt.';
$lang['cycles_remaining']                         = 'Jäljellä olevat syklit';
$lang['custom_field_add_edit_default_value']      = 'Oletusarvo';
$lang['cycles_infinity']                          = 'Loputtomasti';
$lang['recurring_total_cycles']                   = 'Syklien kokonaismäärä';
$lang['cycles_passed']                            = 'Läpäissyt %s';
$lang['api_key_not_set_error_message']            = 'API-avainta ei ole määritetty. Napsauta seuraavaa linkkiä määrittääksesi API-avaimen: %s';
$lang['subscription']                             = 'Tilaus';
$lang['subscription_lowercase']                   = 'tilaus';
$lang['subscriptions']                            = 'Tilaukset';
$lang['tax_is_used_in_subscriptions_warning']     = 'Et voi päivittää tätä veroa, koska tilaukset käyttävät sitä.';
$lang['credit_card']                              = 'Luottokortti';
$lang['update_credit_card']                       = 'Päivitä luottokortti';
$lang['credit_card_update_info']                  = 'Haluatko päivittää tiedoissamme olevan luottokortin? Anna uudet tiedot täällä. Korttitietosi eivät tule koskaan koskemaan suoraan palvelimeemme.';
$lang['update_card_details']                      = 'Päivitä kortin tiedot';
$lang['update_card_btn']                          = 'Päivitä kortti';
$lang['subscription_name']                        = 'Tilauksen nimi';
$lang['subscriptions_description']                = 'Kuvaus';
$lang['subscribe']                                = 'Tilaa';
$lang['subscription_date']                        = 'Päivä';
$lang['first_billing_date']                       = 'Ensimmäinen laskutuspäivä';
$lang['allow_primary_contact_to_update_credit_card'] = 'Sallitaanko ensisijaisen yhteyshenkilön päivittää tallennetun luottokorttitunnuksen?';
$lang['show_subscriptions_in_customers_area']     = 'Näytä tilaukset asiakasalueella?';
$lang['show_subscriptions_in_customers_area_help'] = 'Tämä vaihtoehto on voimassa vain asiakkaan ensisijaisessa yhteyshenkilössä.';
$lang['subscription_sent_to_email_success']       = 'Tilaus lähetetty sähköpostiin onnistuneesti';
$lang['subscription_sent_to_email_fail']          = 'Tilauksen lähettäminen sähköpostiin epäonnistui';
$lang['new_subscription']                         = 'Uusi tilaus';
$lang['subscription_status']                      = 'Tila';
$lang['next_billing_cycle']                       = 'Seuraava laskutusjakso';
$lang['subscription_not_subscribed']              = 'Ei tilattu';
$lang['send_subscription']                        = 'Lähetä tilaus';
$lang['subscription_will_send_to_primary_contact'] = 'Tilaus lähetetään ensisijaiselle yhteyshenkilölle.';
$lang['subscription_resumed']                     = 'Tilaus on asetettu aktiiviseksi onnistuneesti';
$lang['subscription_canceled']                    = 'Tilaus peruutettu onnistuneesti';
$lang['no_credit_card_found']                     = 'Luottokorttia ei löytynyt';
$lang['cancel_immediately']                       = 'Peruuta välittömästi';
$lang['cancel_at_end_of_billing_period']          = 'Peruuta laskutusjakson lopussa';
$lang['view_subscription']                        = 'Näytä tilaus';
$lang['subscription_future']                      = 'Tuleva';
$lang['subscription_active']                      = 'Aktiivinen';
$lang['subscription_past_due']                    = 'Erääntynyt';
$lang['subscription_canceled']                    = 'Peruttu';
$lang['subscription_unpaid']                      = 'Maksamaton';
$lang['billing_plan']                             = 'Laskutussuunnitelma';
$lang['upcoming_invoice']                         = 'Tuleva lasku';
$lang['resume_now']                               = 'Jatka nyt';
$lang['subscription_not_yet_subscribed']          = 'Asiakas ei ole vielä tilannut tätä palvelua.';
$lang['subscription_is_canceled_no_resume']       = 'Tämä tilaus on peruutettu eikä sitä voida jatkaa.';
$lang['subscription_will_be_canceled_at_end_of_billing_period'] = 'Tämä tilaus peruutetaan laskutuskauden lopussa.';
$lang['customer_successfully_subscribed_to_subscription'] = 'Kiitos tilaamisesta %s';
$lang['date_subscribed']                          = 'Tilauspäivämäärä';
$lang['reports']                                  = 'Raportit';
$lang['subscriptions_summary']                    = 'Tilausten yhteenveto';
$lang['calendar_only_assigned_tasks']             = 'Näytä vain kirjautuneelle työntekijälle määritetyt tehtävät';
$lang['invoice_activity_subscription_payment_succeeded'] = 'Tilausmaksu onnistui, sähköposti lähetetty: %s';
$lang['mail_engine']                              = 'Sähköpostimoottori';
$lang['settings_require_client_logged_in_to_view_contract'] = 'Vaadi asiakas kirjautuneeksi sisään nähdäkseen sopimuksen';
$lang['privacy_policy']                           = 'Tietosuojakäytäntö';
$lang['gdpr_terms_agree']                         = 'Hyväksyn <a href="%s" target="_blank">käyttöehdot</a>';
$lang['terms_and_conditions_validation']          = 'Sinun on hyväksyttävä käyttöehdot jatkaaksesi.';
$lang['gdpr']                                     = 'Yleinen tietosuoja-asetus (GDPR)';
$lang['data_removal_request_sent']                = 'Tietojen poistopyyntö lähetetty onnistuneesti';
$lang['gdpr_consents']                            = 'Suostumukset';
$lang['gdpr_consent']                             = 'Suostumus';
$lang['gdpr_consent_purpose']                     = 'Tarkoitus';
$lang['gdpr_consent_opt_in']                      = 'Suostumus';
$lang['gdpr_consent_opt_out']                     = 'Kieltäytyminen';
$lang['gdpr_consent_agree']                       = 'Hyväksyn';
$lang['gdpr_consent_disagree']                    = 'En hyväksy';
$lang['view_consent']                             = 'Näytä suostumus';
$lang['transfer_consent']                         = 'Siirrä suostumus';
$lang['view_public_form']                         = 'Näytä julkinen lomake';
$lang['update_consent']                           = 'Päivitä suostumus';
$lang['update_consent']                           = 'Päivitä suostumus';
$lang['consent_last_updated']                     = 'Viimeksi päivitetty: %s';
$lang['showing_search_result']                    = 'Näytetään hakutulokset haulle: %s';
$lang['per_page']                                 = 'Per sivu';
$lang['allow_staff_view_invoices_assigned']       = 'Anna henkilöstön jäsenille mahdollisuus tarkastella laskuja, joihin heidät on määritetty';
$lang['allow_staff_view_estimates_assigned']      = 'Anna henkilöstön jäsenille mahdollisuus tarkastella tarjouksia, joihin heidät on määritetty';
$lang['gdpr_right_to_be_informed']                = 'Oikeus saada tietoa';
$lang['gdpr_right_of_access']                     = 'Oikeus omiin tietoihin';
$lang['gdpr_right_to_data_portability']           = 'Oikeus tietojen siirrettävyyteen';
$lang['gdpr_right_to_erasure']                    = 'Oikeus poistaa';
$lang['edit_my_information']                      = 'Muokkaa tietojani';
$lang['export_my_data']                           = 'Vie tietoni';
$lang['request_data_removal']                     = 'Pyydä tietojen poistoa';
$lang['explanation_for_data_removal']             = 'Selitys tietojen poistamiseen';
$lang['briefly_describe_why_remove_data']         = 'Kuvaile lyhyesti, miksi haluat poistaa tiedot';
$lang['date_published']                           = 'Julkaisupäivä';
$lang['view']                                     = 'Näytä';
$lang['customer_is_subscribed_to_subscription_info'] = 'Asiakas on tilannut tämän tilauksen';
$lang['save_last_order_for_tables']               = 'Tallenna viimeinen taulukkojen tilaus';
$lang['date_created']                             = 'Päivämäärä luotu';

# Version 2.0.1
$lang['company_logo_dark']                        = 'Yrityksen tumma logo';
$lang['customers_register_require_confirmation']  = 'Vaatii rekisteröintivahvistusta järjestelmänvalvojalta asiakasrekisteröinnin jälkeen';
$lang['customer_requires_registration_confirmation'] = 'Vaatii rekisteröinnin vahvistuksen';
$lang['confirm_registration']                     = 'Vahvista rekisteröinti';
$lang['customer_registration_successfully_confirmed'] = 'Asiakasrekisteröinnin vahvistus onnistunut';
$lang['subscription_last_sent']                   = 'Viimeksi lähetetty';
$lang['automatically_set_logged_in_staff_sales_agent'] = 'Aseta kirjautunut henkilökunta automaattisesti myyntiedustajaksi';
$lang['automatically_set_logged_in_staff_sales_agent_help'] = 'Koskee: Tarjoukset, laskut, ehdotukset';
$lang['permission_view_all_templates']            = 'Näytä kaikki mallit';
$lang['settings_contract_sign_reminder_every_days_info'] = 'Allekirjoitusmuistutukset lähetetään asiakkaan yhteyshenkilöille sen jälkeen, kun sopimus on lähetetty asiakkaalle, ja ne pysäytetään automaattisesti kun sopimus on allekirjoitettu.';
$lang['contract_sign_reminder_every_days']        = 'Lähetä allekirjoitusmuistutus joka (päivä)';
$lang['contract_sign_reminders']                  = 'Allekirjoitusmuistutukset';
$lang['payment_gateway_fee_percentage']           = 'Prosenttimaksu';
$lang['payment_gateway_fee_fixed']                = 'Kiinteä maksu';
$lang['payment_attempt_amount']                   = 'Laskun summa';
$lang['payment_attempt_fee']                      = 'Käsittelymaksu';
$lang['feature']                                  = 'Ominaisuus';
$lang['capabilities']                             = 'Ominaisuudet';
$lang['filter_boolean_yes']                       = 'Kyllä';
$lang['filter_boolean_no']                        = 'Ei';
$lang['filter_matchtype_and']                     = 'ja';
$lang['filter_matchtype_or']                      = 'tai';
$lang['filter_share']                             = 'Jaa muiden tiimin jäsenten kanssa?';
$lang['filter_mark_as_default']                   = 'Merkitse oletukseksi';
$lang['filter_unmark_as_default']                 = 'Poista oletusmerkintä';
$lang['filter_save']                              = 'Tallenna suodatin';
$lang['filter_name']                              = 'Suodattimen nimi';
$lang['filter_apply']                             = 'Käytä';
$lang['filter_apply_and_save']                    = 'Käytä ja tallenna';
$lang['filter_use_dynamic_dates']                 = 'Käytä dynaamisia päivämääriä';
$lang['filter_new']                               = 'Uusi suodatin';
$lang['filter_clear_active']                      = 'Tyhjennä suodatin';
$lang['filter_edit']                              = 'Muokkaa';
$lang['filter_create']                            = 'Luo suodatin';
$lang['filter_update']                            = 'Päivitä suodatin';
$lang['filter_delete']                            = 'Poista suodatin';
$lang['filter_cannot_be_shared']                  = 'Tätä suodatinta ei voida jakaa muiden tiimin jäsenten kanssa, koska se sisältää sääntöjä, jotka eivät välttämättä ole saatavilla kaikille käyttäjille.';
$lang['filter_add_rule']                          = 'Lisää sääntö';
$lang['filter_operator_is_empty']                 = 'on tyhjä';
$lang['filter_operator_is_not_empty']             = 'ei ole tyhjä';
$lang['filter_operator_equal']                    = 'yhtä suuri';
$lang['filter_operator_not_equal']                = 'ei yhtä suuri';
$lang['filter_operator_begins_with']              = 'alkaa';
$lang['filter_operator_not_begins_with']          = 'ei ala';
$lang['filter_operator_contains']                 = 'sisältää';
$lang['filter_operator_not_contains']             = 'ei sisällä';
$lang['filter_operator_ends_with']                = 'päättyy';
$lang['filter_operator_not_ends_with']            = 'ei pääty';
$lang['filter_operator_in']                       = 'sisällä';
$lang['filter_operator_not_in']                   = 'ei sisällä';
$lang['filter_operator_between']                  = 'välillä';
$lang['filter_operator_not_between']              = 'ei välillä';
$lang['filter_operator_dynamic']                  = 'dynaaminen';
$lang['filter_operator_greater']                  = 'suurempi';
$lang['filter_operator_greater_or_equal']         = 'suurempi tai yhtä suuri';
$lang['filter_operator_less']                     = 'pienempi';
$lang['filter_operator_less_or_equal']            = 'pienempi tai yhtä suuri';
$lang['no_filters_found']                         = 'Tallennettuja suodattimia ei löytynyt, aloita luomalla uusi suodatin.';
$lang['staff_logged_in_public_ticket_warning']    = 'Olet kirjautunut henkilöstön jäsenenä, jos haluat vastata palvelupyyntöön henkilöstön jäsenenä, sinun on vastattava hallinta-alueen kautta.';
$lang['customer_register_account_confirmation_approval_notice'] = 'Kiitos rekisteröinnistä, tilisi odottaa hyväksyntää ja vahvistetaan pian.';
$lang['after_subscription_payment_succeeded']     = 'Tilauksen jälkeen maksaminen on onnistunut';
$lang['subscription_option_send_invoice']         = 'Lähetä lasku';
$lang['subscription_option_send_payment_receipt'] = 'Lähetä maksukuitti';
$lang['subscription_option_send_payment_receipt_and_invoice'] = 'Lähetä lasku ja maksukuitti';
$lang['subscription_option_do_nothing']           = 'Älä tee mitään';
$lang['gdpr_not_enabled']                         = 'GDPR ei ole käytössä';
$lang['enable_gdpr']                              = 'Ota käyttöön GDPR';
$lang['gdpr_right_to_rectification']              = 'Oikeus oikaisuun';
$lang['test_sms_config']                          = 'Testaa SMS-asetukset';
$lang['test_sms_message']                         = 'Testiviesti';
$lang['send_test_sms']                            = 'Lähetä testitekstiviesti';
$lang['gdpr_short']                               = 'GDPR';
$lang['allow_non_admin_staff_to_delete_ticket_attachments'] = 'Salli muiden kuin ylläpitäjien poistaa palvelupyynnön liitteet';

# Version 2.1.0
$lang['contract_number']                          = 'Sopimusnumero';
$lang['project_changing_status_recurring_tasks_notice'] = 'Olet muuttamassa tilaa arvoon {0}, kaikki toistuvat tehtävät peruutetaan';
$lang['not_contract_signed']                      = 'Asiakas on allekirjoittanut sopimuksen %s';
$lang['the_number_sign']                          = '#';
$lang['not_new_ticket_reply']                     = 'Asiakas vastasi palvelupyyntöön - %s';
$lang['receive_notification_on_new_ticket_replies'] = 'Vastaanota ilmoitus, kun asiakas vastaa palvelupyyntöön';
$lang['receive_notification_on_new_ticket_reply_help'] = 'Kaikki palvelupyyntöosastolle kuuluvat henkilökunnan jäsenet saavat ilmoituksen, kun asiakas vastaa palvelupyyntöön';
$lang['payment_gateway_enable_paypal']            = 'Ota PayPal-maksut käyttöön';
$lang['project_member']                           = 'Jäsen';
$lang['contract_notes']                           = 'Huomautuksia';
$lang['contract_add_note']                        = 'Lisää huomautus';

# Version 2.1.1
$lang['frequency']                                = 'Tiheys';
$lang['frequency_every']                          = 'Joka %s';
$lang['last_invoice_date']                        = 'Viimeinen laskun päivämäärä';
$lang['next_invoice_date_list']                   = 'Seuraava laskun päivämäärä';
$lang['enter_new_card']                           = 'Syötä uusi kortti';

# Version 2.2.0
$lang['save_and_record_payment']                  = 'Tallenna ja kirjaa maksu';
$lang['choose_from_google_drive']                 = 'Valitse Google Drivesta';
$lang['open_in_google']                           = 'Avaa Googlessa';
$lang['google_picker']                            = 'Google-valitsin';
$lang['enable_google_picker']                     = 'Ota käyttöön Google-valitsin';
$lang['google_api_client_id']                     = 'Google API Client ID';
$lang['subtract_tax_total_from_amount']           = 'Vähennä ALV:n kokonaissumma (%s) loppusummasta';
$lang['expense_subtract_info_text']               = 'Käytä tätä vaihtoehtoa vähentääksesi veron kokonaismäärän kulun summasta. Hyödyllinen, jos syötit kulun summan sisältäen veron (verollinen hinta).';
$lang['company_exists_info']                      = 'Näyttää silti, että asiakas nimellä %s on jo olemassa. Jos haluat silti luoda asiakkaan, voit jättää tämän huomautuksen huomiotta.';
$lang['import_items']                             = 'Tuo tuotteita';
$lang['total_items_deleted']                      = 'Tuotteita poistettu yhteensä: %s';
$lang['billable_amount']                          = 'Laskutettava summa';
$lang['last_child_invoice_date']                  = 'Viimeisimmän alilaskun päivämäärä';
$lang['good_morning']                             = 'Hyvää huomenta';
$lang['good_afternoon']                           = 'Hyvää iltapäivää';
$lang['good_evening']                             = 'Hyvää iltaa';
$lang['description_in_invoice_item']              = 'Sisällytä kuvaus laskuun';
$lang['description_in_invoice_item_help']         = 'Hyödyllinen, jos haluat sisällyttää lisätietoja tilauslaskuun, esim. mitä tilaus sisältää.';
$lang['ticket_reminders']                         = 'Muistutukset';
$lang['ticket_set_reminder_title']                = 'Aseta palvelupyynnön muistutus';
$lang['calendar_ticket_reminder']                 = 'Palvelupyynnön muistutukset';
$lang['email_verification_required']              = 'Sähköpostiosoitteen vahvistus vaaditaan';
$lang['email_verification_required_message']      = 'Vahvista sähköpostiosoitteesi voidaksesi käyttää kaikkia portaalin ominaisuuksia.';
$lang['email_verification_required_message_mail'] = 'Olemme lähettäneet sinulle sähköpostiviestin, jossa on vahvistusohjeet. Jos et ole saanut viestiä, tarkista roskapostikansio tai klikkaa <a href="%s">tästä</a> lähettääksesi vahvistusviestin uudelleen.';
$lang['email_already_verified']                   = 'Sähköpostiosoitteesi on jo vahvistettu';
$lang['invalid_verification_key']                 = 'Virheellinen vahvistusavain';
$lang['verification_key_expired']                 = 'Vahvistusavain on vanhentunut';
$lang['email_successfully_verified']              = 'Sähköpostiosoitteesi on vahvistettu onnistuneesti.';
$lang['email_successfully_verified_but_required_admin_confirmation'] = 'Sähköpostiosoitteesi on vahvistettu onnistuneesti. Voit kirjautua sisään, kun ylläpitäjä on vahvistanut tilisi manuaalisesti.';
$lang['email_verification_mail_sent_successully'] = 'Lähetimme sinulle sähköpostiviestin, jossa on vahvistusohjeet';
$lang['create_reminder']                          = 'Luo muistutus';
$lang['no_reminders_for_this_task']               = 'Ei muistutuksia tälle tehtävälle';
$lang['reminder_for']                             = 'Muistutus kohteelle %s päivälle %s';
$lang['no_description_provided']                  = 'Ei kuvausta annettu';
$lang['pay_with_card']                            = 'Maksa kortilla';
$lang['not_customer_uploaded_file']               = 'Uusia tiedostoja ladattu profiiliin';

# Version 2.2.1
$lang['customer_files_info_message']              = 'Asiakkaaseen liitettyjen projektien ja tehtävien tiedostoja ei ole esitetty tässä taulukossa.';
$lang['ticket_import_reply_only']                 = 'Yritä tuoda vain varsinainen palvelupyyntövastaus (ilman lainattua/välitettyä viestiä)';
$lang['learn_more']                               = 'Opi lisää';
$lang['sales_item']                               = 'Tuote';

$lang['fine_tuning_settings']                     = 'Hienosäätöasetukset';

$lang['fine_tuning_base_model_help']              = 'Valitse malli, joka on yhteensopiva OpenAI-hienosäädön kanssa.';
# Version 2.3.0

$lang['refine_tuning']                            = 'Uudelleenhienosäätö';
$lang['refine_tuning_description']                = 'Päivitä olemassa oleva hienosäädetty malli uudella tietopohjan sisällöllä.';
$lang['refine_tuning_job_started']                = 'Uudelleenhienosäätetyö on aloitettu onnistuneesti!';
$lang['refine_tuning_job_failed']                 = 'Uudelleenhienosäätetyön aloitus epäonnistui';
$lang['checkpoint']                               = 'Tarkistuspiste';
$lang['fine_tuning_job_in_progress']              = 'Hienosäätetyö on jo käynnissä.';
$lang['fine_tuning_job_started']                  = 'Hienosäätetyö on aloitettu onnistuneesti!';
$lang['modules']                                  = 'Moduulit';
$lang['module']                                   = 'Moduuli';
$lang['module_description']                       = 'Kuvaus';
$lang['module_activate']                          = 'Aktivoi';
$lang['module_deactivate']                        = 'Poista käytöstä';
$lang['module_uninstall']                         = 'Poista asennus';
$lang['module_upgrade_database']                  = 'Päivitä tietokanta';
$lang['module_settings']                          = 'Asetukset';
$lang['module_version']                           = 'Versio %s';
$lang['module_by']                                = 'Tehnyt %s';
$lang['staff_which_are_using_role']               = 'Henkilöstö, joka käyttää tätä roolia';
$lang['copy']                                     = 'Kopioi';
$lang['read_more']                                = 'Lue lisää';
$lang['show_less']                                = 'Näytä vähemmän';
$lang['project_progress_text']                    = 'Projektin eteneminen prosenteissa';
$lang['timer_not_stopped_yet']                    = 'Tätä ajastinta ei ole vielä pysäytetty';
$lang['refunds']                                  = 'Palautukset';
$lang['refund']                                   = 'Palauta';
$lang['refund_amount']                            = 'Palautettu summa';
$lang['not_refunds_found']                        = 'Palautuksia ei löytynyt';
$lang['refunds_applied_cant_delete_credit_note']  = 'Tässä hyvityslaskussa on suoritettu hyvityksiä, hyvitykset on ensin poistettava hyvityslaskun poistamiseksi.';

# Version 2.3.2
$lang['create_recurring_from_child_error_message'] = 'Et voi asettaa tätä %s toistuvaksi, koska tämä %s on lapsi toisesta toistuvasta %s.';
$lang['statement_credit_note_refund']             = 'Luoton palautus - %s';
$lang['no_validation']                            = 'Ei validointia';
$lang['lead_unique_validation_on']                = 'Suorita kaksoiskappaleen validointi seuraavissa kentissä:';
$lang['phonenumber_exists']                       = 'Puhelinnumero on jo olemassa';
$lang['company_exists']                           = 'Yritys on jo olemassa';
$lang['website_exists']                           = 'Verkkosivusto on jo olemassa';
$lang['send_payment_receipt_to_client']           = 'Lähetä maksukuitti asiakkaalle';
$lang['payment_sent_successfully']                = 'Maksukuitti lähetetty onnistuneesti.';
$lang['payment_sent_failed']                      = 'Maksukuitin lähettäminen epäonnistui.';

# Version 2.3.5
$lang['tags_update_replace_warning']              = 'Joitakin tunnisteita ei päivitetä, koska tunnisteen nimi on jo olemassa';
$lang['attach_statement']                         = 'Liitä asiakaslausunto';

# Version 2.4.0
$lang['delete_credit_card']                       = 'Poista kortti';
$lang['delete_credit_card_info']                  = 'Luottokorttia ei voi poistaa, koska sinulla on aktiivisia tilauksia.';
$lang['credit_card_successfully_deleted']         = 'Luottokortti poistettu onnistuneesti.';
$lang['subscription_incomplete']                  = 'Puutteellinen';
$lang['subscription_incomplete_expired']          = 'Puutteellinen (Vanhentunut)';
$lang['credit_card_short']                        = 'Kortti';
$lang['webhook_created']                          = 'Webhook on luotu onnistuneesti.';
$lang['subscriptions_terms_info']                 = 'Kirjoita asiakkaan ehdot, jotka näytetään asiakkaalle ennen tilaamista.';
$lang['subscription_complete_payment']            = 'Suorita maksu';
$lang['subscription_is_subscription_is_expired']  = 'Tämä tilaus on vanhentunut.';
$lang['subscription_plan_currency_does_not_match'] = 'Valittu suunnitelman valuutta ei vastaa alla valittua valuuttaa.';
$lang['subscription_first_billing_date_info']     = 'Jätä tyhjä käyttääksesi päivämäärää, kun asiakas on tilannut tilauksen. Tämän kentän on oltava tuleva päivämäärä, jos valitset päivämäärän ja päivämäärä on ohitettu, mutta asiakasta ei ole vielä tilattu, tilaajan päivämäärää käytetään.';
$lang['stripe_subscription_select_plan']          = 'Valitse Stripe-suunnitelma';

# Version 2.4.1
$lang['contract_content_permission_edit_warning'] = 'Nykyiset käyttöoikeutesi eivät salli sinun muokata sopimuksen sisältöä. Ota yhteyttä järjestelmänvalvojaan, joka voi antaa sinulle luvan muokata sopimuksia.';
$lang['mark_as_signed']                           = 'Merkitse allekirjoitetuksi';
$lang['unmark_as_signed']                         = 'Poista allekirjoitusmerkintä';
$lang['marked_as_signed']                         = 'Merkitty allekirjoitetuksi';
$lang['contract_marked_as_signed_info']           = 'Tämä sopimus on merkitty manuaalisesti allekirjoitetuksi.';
$lang['save_and_send_later']                      = 'Tallenna ja lähetä myöhemmin';
$lang['schedule']                                 = 'Aikatauluta';
$lang['schedule_email_for']                       = 'Aikatauluta sähköposti %s';
$lang['schedule_date']                            = 'Koska haluat lähettää sähköpostin?';
$lang['email_scheduled_successfully']             = 'Sähköpostiaikataulu onnistui';
$lang['invoice_will_be_sent_at']                  = 'Lasku lähetetään %s aikaan';

# Version 2.5.0
$lang['recaptcha_ignore_ips']                     = 'Ohitetut IP-osoitteet';
$lang['recaptcha_ignore_ips_info']                = 'Anna pilkulla erotetut IP-osoitteet, joille reCaptcha-varmennusta ei suoriteta.';
$lang['show_task_reminders_on_calendar']          = 'Tehtävämuistutukset';
$lang['contracts_about_to_expire']                = 'Pian vanhenevat sopimukset';
$lang['no_contracts_about_to_expire']             = 'Ei sopimuksia, jotka vanhenevat seuraavan %s päivän aikana.';
$lang['lead_value']                               = 'Liidin arvo';
$lang['lead_value_tooltip']                       = 'Käytetään perusvaluuttaa.';
$lang['leads_dt_lead_value']                      = 'Liidin arvo';
$lang['leads_canban_lead_value']                  = 'Arvo: %s';
$lang['lead_add_edit_lead_value']                 = 'Liidin arvo';

# Version 2.6.0
$lang['gantt_view_day']                           = 'Päivänäkymä';
$lang['gantt_view_week']                          = 'Viikkonäkymä';
$lang['gantt_view_month']                         = 'Kuukausinäkymä';
$lang['gantt_view_year']                          = 'Vuosinäkymä';

# Version 2.7.0
$lang['hour_of_day_perform_tasks_reminder_notification_help'] = '24 tunnin muoto (esim. 9 tai 15). Käytetään toistuviin tehtäviin, tehtävämuistutuksiin jne.';
$lang['clients_nav_contacts']                     = 'Yhteyshenkilöt';
$lang['clients_my_contacts']                      = 'Yhteyshenkilöt';
$lang['clients_my_contact']                       = 'Yhteyshenkilö';
$lang['new_contact']                              = 'Uusi yhteyshenkilö';
$lang['customer_contact']                         = 'Omat yhteyshenkilöt';
$lang['clients_contact_added']                    = 'Yhteyshenkilö lisätty onnistuneesti';
$lang['clients_contact_updated']                  = 'Yhteyshenkilö päivitetty onnistuneesti';
$lang['allow_primary_contact_to_manage_other_contacts'] = 'Salli ensisijaisen yhteyshenkilön hallinnoida muita asiakkaan yhteyshenkilöitä';
$lang['contact_form_validation_is_unique']        = 'Yhteyshenkilö tällä {field}-tiedolla on jo olemassa järjestelmässämme';
$lang['invoice_number_not_applied_on_draft']      = 'Jos lasku tallennetaan luonnoksena, sille ei anneta numeroa. Seuraava vapaa laskunumero annetaan, kun lasku lähetetään asiakkaalle tai merkitään lähetetyksi.';

$lang['two_factor_authentication_disabed']        = 'Pois käytöstä';
$lang['enable_google_two_factor_authentication']  = 'Ota käyttöön Google Authenticator';
$lang['set_google_two_factor_authentication_failed'] = 'Tunnistautumisen tallentaminen epäonnistui, yritä uudelleen';
$lang['enter_two_factor_auth_code_from_mobile']   = 'Syötä tunnistautumiskoodi Authenticator-sovelluksesta';
$lang['staff_two_factor_authentication']          = 'Kaksivaiheinen todennus';
$lang['google_authentication_code']               = 'Syötä koodi Authenticator-sovelluksesta';
$lang['set_two_factor_authentication_successful'] = 'Kaksivaiheisen todennuksen asetukset päivitetty onnistuneesti';
$lang['set_two_factor_authentication_failed']     = 'Kaksivaiheisen todennuksen asetuksia ei voitu päivittää';
$lang['google_2fa_code_valid']                    = 'Tunnistautuminen vahvistettu onnistuneesti';
$lang['google_2fa_code_invalid']                  = 'Virheellinen tunnistautumiskoodi, yritä uudelleen.';
$lang['google_2fa_scan_qr_guide']                 = 'Skannaa alla oleva QR-koodi mobiililaitteesi Google Authenticator -sovelluksella ja syötä sen jälkeen sovelluksen luoma koodi alla olevaan kenttään.';
$lang['google_2fa_manul_input_secret']            = 'Salainen avain manuaalista syöttöä varten';

# Version 2.8.0
$lang['enable_support_menu_badges']               = 'Ota käyttöön tukivalikon merkki';
$lang['item_copy_success']                        = 'Tuote kopioitu onnistuneesti';
$lang['item_copy_fail']                           = 'Tuotteen kopiointi epäonnistui';
$lang['attach_invoice_to_payment_receipt_email']  = 'Liitä laskun PDF-tiedosto, kun lähetät maksukuitin sähköpostitse';

$lang['estimate_request']                         = 'Tarjouspyyntö';
$lang['estimate_requests']                        = 'Tarjouspyynnöt';
$lang['estimate_request_form']                    = 'Tarjouspyyntölomake';
$lang['acs_estimate_request']                     = 'Tarjouspyyntö';
$lang['acs_estimate_request_forms']               = 'Lomakkeet';
$lang['estimate_request_forms']                   = 'Tarjouspyyntölomakkeet';
$lang['estimate_request_notify_staff']            = 'Henkilöstön jäsenet, joille ilmoitetaan';
$lang['estimate_request_notify_when_submitted']   = 'Ilmoita, kun tarjouspyyntö on lähetetty';
$lang['estimate_request_assignee']                = 'Vastuullinen (vastuuhenkilö)';
$lang['estimate_request_notify_roles']            = 'Roolit, joille ilmoitetaan';
$lang['custom_field_estimate_request']            = 'Tarjouspyyntö';
$lang['new_estimate_request_submitted_from_form'] = 'Uusi tarjouspyyntö lähetetty lomakkeella - %s';
$lang['acs_estimate_request_statuses_submenu']    = 'Tilat';
$lang['estimate_request_dt_email']                = 'Sähköposti';
$lang['estimate_request_dt_assigned']             = 'Vastuuhenkilö';
$lang['estimate_request_dt_status']               = 'Tila';
$lang['estimate_request_dt_datecreated']          = 'Luotu';
$lang['estimate_request_attachments']             = 'Liitteet';
$lang['estimate_request_new_status']              = 'Uusi tila';
$lang['estimate_request_status_table_name']       = 'Tilan nimi';
$lang['estimate_request_table_total']             = 'Pyyntöjä yhteensä: %s';
$lang['estimate_request_statuses_not_found']      = 'Tarjouspyyntöjen tiloja ei löytynyt';
$lang['estimate_request_status_add_edit_name']    = 'Tilan nimi';
$lang['estimate_request_status_color']            = 'Väri';
$lang['estimate_request_status_add_edit_order']   = 'Tilan järjestys';
$lang['estimate_request_status']                  = 'Tila';
$lang['estimate_request_date_added']              = 'Luontipäivämäärä';
$lang['estmate_request_tags_updated']             = 'Tunnisteet päivitetty';
$lang['not_estimate_request_activity_status_updated'] = '%s päivitti tarjouspyynnön tilan kohteesta %s kohteeseen %s';
$lang['estimate_request_lowercase']               = 'tarjouspyyntö';
$lang['estimate_request_form_email_field_is_required'] = 'Sähköpostikenttä on pakollinen lomakkeella';
$lang['estimate_request_form_email_field_set_to_required'] = 'Merkitse sähköpostikenttä pakolliseksi';
$lang['not_delete_estimate_request_default_status'] = 'Järjestelmän oletustarjouspyyntötilaa ei voi poistaa';
$lang['mark_estimate_request_as']                 = 'Merkitse tilaksi %s';
$lang['estimate_request_updated']                 = 'Tarjouspyyntö päivitetty';
$lang['convert_estimate_request']                 = 'Muunna tarjouspyyntö';
$lang['estimate_request_client_firstname']        = 'Etunimi';
$lang['estimate_request_client_lastname']         = 'Sukunimi';
$lang['estimate_request_email']                   = 'Sähköposti';
$lang['estimate_request_for_lead']                = 'Liidi';
$lang['estimate_request_for_customer']            = 'Asiakas';
$lang['estimate_request_related']                 = 'Liittyy';
$lang['estimate_request_client_created_success']  = 'Tarjouspyynnön asiakas luotu';
$lang['estimate_request_assigned']                = 'Henkilöstö määritetty';
$lang['not_estimate_request_activity_assigned_updated'] = 'Tarjouspyyntö määritetty kohteelle %s';
$lang['estimate_request_status_lowercase']        = 'tarjouspyynnön tila';
$lang['estimate_request_assigned_to_staff']       = 'Tarjouspyyntö on määritetty sinulle';

$lang['activity_due_reminder_is_sent']            = '%s lähetti muistutuksen laskun erääntymisestä';
$lang['invoice_due_notice_before']                = 'Lähetä erääntymismuistutus X päivää ennen eräpäivää';
$lang['overdue_notices']                          = 'Erääntymisilmoitukset';
$lang['invoice_overdue_notices_info']             = 'Erääntymisilmoitukset lähetetään, kun lasku erääntyy.';
$lang['due_reminders']                            = 'Erääntymismuistutukset';
$lang['due_reminders_for_invoices_info']          = 'Erääntymismuistutukset lähetetään maksamattomille ja osittain maksetuille laskuille muistutuksena asiakkaalle laskun maksamisesta ennen eräpäivää.';
$lang['expenses_list_made_payment_by']            = 'Maksun suoritti %s';

# Version 2.8.2
$lang['hide_task_checklist_items_completed']      = 'Piilota suoritetut kohdat';
$lang['show_task_checklist_items_completed']      = 'Näytä suoritetut kohdat %s';
$lang['task_checklist_assign']                    = 'Määritä henkilöstö';
$lang['task_checklist_assigned']                  = 'Määritetty kohteelle %s';

# Version 2.8.3
$lang['projects_send_contact_notification']       = 'Lähetä ilmoituksia yhteystiedoille';
$lang['project_send_all_contacts_with_notifications_enabled'] = 'Kaikille yhteyshenkilöille, joilla on ilmoitukset projekteista';
$lang['project_do_not_send_contacts_notifications'] = 'Älä lähetä ilmoituksia';
$lang['project_send_specific_contacts_with_notification'] = 'Tietyt yhteystiedot';
$lang['project_contacts_to_notify']               = 'Valitse yhteystiedot, joille ilmoitetaan';
$lang['contract_signed_by']                       = 'Allekirjoittajan nimi';
$lang['contract_signed_date']                     = 'Allekirjoituspäivämäärä';
$lang['contract_signed_ip']                       = 'IP-osoite';
$lang['show_estimate_request_in_customers_area']  = 'Näytetäänkö tarjouspyyntölinkki asiakasalueella?';
$lang['customers_estimate_request_link_text']     = 'Pyydä tarjous';
$lang['total_expenses_deleted']                   = 'Poistetut kulut yhteensä: %s';
$lang['estimate_convert_to_project']              = 'Muunna projektiksi';
$lang['estimate_items_convert_to_tasks']          = 'Kohteet, jotka muunnetaan tehtäviksi';

$lang['proposal_signed_by']                       = 'Allekirjoittajan nimi';
$lang['proposal_signed_date']                     = 'Allekirjoituspäivämäärä';
$lang['proposal_signed_ip']                       = 'IP-osoite';
$lang['hide_milestone_from_customer']             = 'Piilota asiakkaalta';
$lang['hide_milestone_from_customer_help']        = 'Kun päätät piilottaa virstanpylvään asiakasalueelta, koko virstanpylväs ja sen tehtävät piilotetaan';
$lang['automatically_stop_task_timer_after_hours'] = 'Pysäytä tehtäväajastin automaattisesti (tuntia)';

# Version 2.9.0
$lang['home_payment_records']                     = 'Maksutiedot';
$lang['weekly']                                   = 'Viikoittain';
$lang['monthly']                                  = 'Kuukausittain';
$lang['failed_to_update_timesheet']               = 'Työaikataulukkoa ei päivitetty';
$lang['permission_create_timesheets']             = 'Luo työaikalomakkeet';
$lang['permission_edit_timesheets']               = 'Muokkaa työaikalomakkeita (maailmanlaajuinen)';
$lang['permission_edit_own_timesheets']           = 'Muokkaa omia työaikalomakkeita';
$lang['permission_delete_timesheets']             = 'Poista työaikalomakkeet (maailmanlaajuinen)';
$lang['permission_delete_own_timesheets']         = 'Poista omat työaikalomakkeet';
$lang['permission_edit_milestones']               = 'Muokkaa virstanpylväitä';
$lang['permission_delete_milestones']             = 'Poista virstanpylväät';
$lang['add_timesheet']                            = 'Lisää työaikalomake';
$lang['submit_button_bg_color']                   = 'Lähetä-painikkeen taustaväri';
$lang['submit_button_text_color']                 = 'Lähetä-painikkeen taustateksti';
$lang['automatically_assign_ticket_to_first_staff_responding'] = 'Määritetäänkö palvelupyyntö automaattisesti ensimmäiselle vastauksen lähettäneelle henkilökunnalle?';

# Version 2.9.1
$lang['contract_signed_not_all_fields_editable']  = 'Tämä sopimus on allekirjoitettu, joten kaikkia kenttiä ei voi muokata ennen kuin allekirjoitus on poistettu.';
$lang['form_submit_success_action']               = 'Mitä pitäisi tapahtua sen jälkeen, kun vierailija on lähettänyt tämän lomakkeen';
$lang['form_submit_success_display_thank_you']    = 'Näytä kiitosviesti';
$lang['form_submit_success_redirect_to_website']  = 'Ohjaa toiselle sivustolle';
$lang['form_submit_website_url']                  = 'Nettisivun URL';
$lang['lead_name_prefix']                         = 'Pääotsikon etuliite';
$lang['lead_name_prefix_help']                    = 'Jokaisen lomakkeen kautta luodun uuden liidin kohdalla liidin nimen eteen lisätään teksti, joka on lisätty kenttään tunnistamisen helpottamiseksi.';

# Version 2.9.2
$lang['open_google_map']                          = 'Avaa Google Mapsissa';
$lang['milestone_start_date']                     = 'Aloituspäivämäärä';
$lang['send_reminder_for_completed_but_not_billed_tasks'] = 'Lähetä sähköpostimuistutus valmistuneista, mutta laskuttamattomista laskutettavista tehtävistä';
$lang['staff_to_notify_completed_but_not_billed_tasks'] = 'Valitse henkilöstön jäsenet, joille muistutus lähetetään';
$lang['reminder_for_completed_but_not_billed_tasks_days'] = 'Valitse viikonpäivät, jolloin muistutus lähetetään';
$lang['notifications']                            = 'Ilmoitukset';
$lang['merged']                                   = 'Yhdistetty';
$lang['ticket_merged_notice']                     = 'Tämä palvelupyyntö on yhdistetty palvelupyyntöön, jonka ID on';
$lang['view_primary_ticket']                      = 'Näytä ensisijainen palvelupyyntö';
$lang['merge_tickets']                            = 'Yhdistä palvelupyynnöt';
$lang['primary_ticket']                           = 'Ensisijainen palvelupyyntö';
$lang['primary_ticket_status']                    = 'Ensisijaisen palvelupyynnön tila';
$lang['tickets_merged']                           = 'Palvelupyynnöt yhdistetty onnistuneesti';
$lang['cannot_merge_into_merged_ticket']          = 'Toiseen palvelupyyntöön yhdistettyä palvelupyyntöä ei voi käyttää ensisijaisena palvelupyyntönä';
$lang['merge_ticket_ids_field_label']             = 'Yhdistä palvelupyyntö #';
$lang['merge_ticket_ids_field_placeholder']       = 'esim. 5 tai 5,6';
$lang['cannot_merge_tickets_with_ids']            = 'Palvelupyyntö %s on jo yhdistetty toiseen palvelupyyntöön';
$lang['ticket_merged_tickets_header']             = 'Tämä palvelupyyntö sisältää %s yhdistettyä palvelupyyntöä';
$lang['batch_payments_table_invoice_number_heading'] = 'Laskun numero';
$lang['batch_payments_table_payment_date_heading'] = 'Maksupäivä';
$lang['batch_payments_table_payment_mode_heading'] = 'Maksutapa';
$lang['batch_payments_table_transaction_id_heading'] = 'Tapahtuman ID';
$lang['batch_payments_table_amount_received_heading'] = 'Vastaanotettu summa';
$lang['batch_payments_table_invoice_balance_due'] = 'Laskun erääntyvä saldo';
$lang['add_batch_payments']                       = 'Lisää maksut';
$lang['batch_payment_filter_by_customer']         = 'Suodata laskut asiakkaan mukaan';
$lang['batch_payments']                           = 'Erämaksut';
$lang['batch_payment_added_successfully']         = 'Olet lisännyt %s maksua onnistuneesti';
$lang['batch_payments_send_invoice_payment_recorded'] = 'Älä lähetä "maksu kirjattu" -sähköpostia asiakkaan yhteyshenkilöille';
$lang['invoice_batch_payments']                   = 'Erämaksu';
$lang['staff_is_currently_replying']              = '%s vastaa tällä hetkellä palvelupyyntöön.';

# Versio 2.9.4
$lang['permission_view_timesheet_report']         = 'Näytä työaikataulujen raportti';
$lang['timesheets_overview_all_members_notice_permission'] = 'Kaikkien henkilöstön jäsenten työaikataulujen yleiskatsaus on käytettävissä vain henkilöstöllä, jolla on oikeus tarkastella työaikatauluraportteja, ja järjestelmänvalvojilla.';
$lang['show_project_on_proposal']                 = 'Näytä projektin nimi ehdotuksessa';
$lang['ticket_reports_staff']                     = 'Henkilöstön jäsen';
$lang['ticket_reports_total_assigned']            = 'Myönnettyjen palvelupyyntöjen kokonaismäärä';
$lang['ticket_reports_open_tickets']              = 'Avoimet palvelupyynnöt';
$lang['ticket_reports_closed_tickets']            = 'Suljetut palvelupyynnöt';
$lang['ticket_reports_replies_to_tickets']        = 'Vastaukset palvelupyyntöihin';
$lang['ticket_reports_average_reply_time']        = 'Keskimääräinen vastausaika';
$lang['home_tickets_report']                      = 'Henkilökunnan palvelupyyntöraportti';
$lang['ticket_reports_average_reply_time_help'] 			= "Myönnettyjen palvelupyyntöjen keskimääräinen vastausaika.";
$lang['created_by'] 										= "Luonut";

$lang['staff_related_ticket_notification_to_assignee_only'] = 'Lähetä henkilökuntaan liittyvät palvelupyyntöilmoitukset vain palvelupyynnön vastaanottajalle';
$lang['staff_related_ticket_notification_to_assignee_only_help'] = 'Jos tämä vaihtoehto on asetettu arvoon Kyllä ja palvelupyynnöllä ei ole vastaanottajaa, ilmoitus lähetetään kaikelle henkilökunnalle, joka kuuluu palvelupyyntöosastoon';
$lang['import_expenses']                          = 'Kulujen tuonti';
$lang['show_pdf_signature_proposal']              = 'Näytä PDF-allekirjoitus ehdotuksessa';
$lang['enable_honeypot_spam_validation']          = 'Ota käyttöön Honeypot-roskapostin validointi';

# Versio 3.0.0
$lang['contracts_view_marked_as_signed']          = 'Merkitty allekirjoitetuksi';
$lang['contracts_view_signed']                    = 'allekirjoitettu';
$lang['contracts_view_not_expired']               = 'Ei vanhentunut';
$lang['contract_information']                     = 'Sopimusta koskevat tiedot';
$lang['receipt']                                  = 'Kuitti';
$lang['search_proposals']                         = 'Ehdotusten haku';
$lang['search_estimates']                         = 'Hae tarjouksia';
$lang['quick_create']                             = 'Pikaluo';

# Version 3.1.2
$lang['allow_non_admin_members_to_delete_tickets_and_replies'] = 'Salli muiden kuin ylläpitäjien poistaa palvelupyyntöjä ja vastauksia';
$lang['default_filter_info']                      = 'Suodatin merkitään oletukseksi vain sinun tilillesi.';
$lang['required_register_fields']                 = 'Pakolliset kentät rekisteröitymiseen (asiakaspuoli)';

# Version 3.1.6
$lang['allow_non_admin_members_to_edit_ticket_messages'] = 'Salli muiden kuin ylläpitäjien muokata palvelupyyntöviestejä';
$lang['proposal_auto_convert_to_invoice_on_client_accept'] = 'Muunna ehdotus automaattisesti laskuksi asiakkaan hyväksynnän jälkeen (vain asiakkaisiin liittyvät ehdotukset)';
$lang['invoice_activity_auto_converted_from_proposal'] = 'Lasku on luotu automaattisesti ehdotuksesta numero %s';
$lang['clients_proposal_invoiced_successfully']   = 'Kiitos ehdotuksen hyväksymisestä. Tarkista ehdotuksesta luotu lasku.';

# Version 3.2.0
$lang['ideal_payment_failure_message']            = 'Maksu epäonnistui tai peruutettiin.';
$lang['ideal_api_publishable_key']                = 'Stripe -julkinen avain';
$lang['ideal_api_secret_key']                     = 'Stripe API -salainen avain';
$lang['filters']                                  = 'Suodattimet';
$lang['view_financial_stats']                     = 'Näytä taloustiedot';
$lang['timesheet_summary']                        = 'Tuntikirjausten yhteenveto';
$lang['timesheet_detailed_overview']              = 'Yksityiskohtainen katsaus tuntikirjauksiin ja tunteihin';
$lang['ticket_request_history']                   = 'Pyyntöhistoria';
$lang['integrations']                             = 'Integraatiot';
$lang['settings_group_other']                     = 'Muut';
$lang['settings_group_configure_features']        = 'Määritä ominaisuudet';
$lang['disable_ticket_public_url']                = 'Poista palvelupyynnön julkinen URL käytöstä';

# Version 3.2.1
$lang['ideal_gateway_keys_not_configured']        = 'iDEAL-maksutavan API-avaimia ei ole määritetty.';
$lang['ideal_gateway_cannot_be_activated_keys_not_configured'] = 'iDEAL-maksutapaa ei voi aktivoida, koska Stripen julkista/API-avainta ei ole määritetty.';
$lang['company_logo_light']                       = 'Yrityksen logo (vaalea)';
$lang['welcome_back_sign_in']                     = 'Tervetuloa, kirjaudu sisään hallintapaneeliisi';

# Version 3.3.0
$lang['settings_ai']                              = 'Tekoäly';
$lang['settings_group_ai']                        = 'Tekoälyintegraatio';
$lang['settings_ai_general']                      = 'Yleiset';
$lang['settings_ai_provider']                     = 'Palveluntarjoaja';
$lang['settings_ai_system_prompt']                = 'Järjestelmäkehote (System Prompt)';
$lang['settings_ai_system_prompt_help']           = 'Anna taustatietoja yrityksestäsi ja siitä, miten käsittelet tukipyyntöjä, jotta tekoäly voi luoda parempia vastauksia.';
$lang['settings_ai_enable_ticket_summarization']  = 'Ota käyttöön tukipyyntöjen yhteenveto';
$lang['settings_ai_enable_ticket_summarization_help'] = 'Ota käyttöön tekoälyn tukipyyntöjen yhteenvetotoiminto, joka luo automaattisesti yhteenvedon tukipyyntökeskustelusta.';
$lang['settings_ai_enable_ticket_reply_suggestions'] = 'Ota käyttöön vastaussuositukset';
$lang['settings_ai_enable_ticket_reply_suggestions_help'] = 'Ota käyttöön tekoälyn vastaussuositukset, jotka luovat automaattisesti vastausehdotuksen asiakkaalle keskustelun perusteella.';
$lang['ticket_summarization_disabled']            = 'Tukipyyntöjen yhteenveto on poistettu käytöstä';
$lang['ticket_reply_suggestion_disabled']         = 'Vastaussuositukset on poistettu käytöstä';

$lang['openai_api_key']                           = 'OpenAI API-avain';
$lang['openai_model']                             = 'OpenAI-malli';
$lang['openai']                                   = 'OpenAI';
$lang['ticket_summarize_ai']                      = 'Tiivistä (Tekoäly)';
$lang['ticket_suggest_reply']                     = 'Ehdotu vastausta (Tekoäly)';
$lang['ticket_rephrase_reply']                    = 'Muotoile uudelleen (Tekoäly)';
$lang['ai_ticket_summary']                        = 'Tukipyynnön yhteenveto (Tekoäly)';
$lang['openai_max_token']                         = 'Maksimi ulostulotunnisteet (Tokens)';
$lang['warn_ticket_thread_too_long']              = 'Tämä tukipyyntö sisältää huomattavan määrän tietoa. Näin pitkän tukipyynnön käsittely saattaa vaatia enemmän tunnisteita, mikä voi vaikuttaa vastauksen tarkkuuteen tai tehokkuuteen. Haluatko jatkaa?';
$lang['text_enhancement_make_friendly']           = 'Tee ystävällisemmäksi';
$lang['text_enhancement_make_formal']             = 'Tee virallisemmaksi';
$lang['text_enhancement_make_polite']             = 'Tee kohteliaammaksi';

$lang['openai_fine_tuning']                       = 'OpenAI Hienosäätö (Fine-Tuning)';
$lang['fine_tuning_source_data']                  = 'Hienosäädön lähdedata';
$lang['available_articles']                       = 'Saatavilla olevat artikkelit';
$lang['fine_tuning_min_articles']                 = 'Tarvitset vähintään 10 tietopankkiartikkelia hienosäätöä varten.';
$lang['start_fine_tuning']                        = 'Aloita hienosäätö';
$lang['last_fine_tuning_job']                     = 'Viimeisin hienosäätöajo';
$lang['job_id']                                   = 'Ajon ID';
$lang['status']                                   = 'Tila';
$lang['fine_tuned_model']                         = 'Hienosäädetty malli';
$lang['created_at']                               = 'Luotu';
$lang['finished_at']                              = 'Valmistunut';
$lang['loading_job_status']                       = 'Ladataan ajon tilaa...';
$lang['refresh_status']                           = 'Päivitä tila';
$lang['fine_tuned_models']                        = 'Hienosäädetyt mallit';
$lang['enable_fine_tuning']                       = 'Ota hienosäätö käyttöön';
$lang['no_fine_tuned_models']                     = 'Ei hienosäädettyjä malleja vielä.';
$lang['model_id']                                 = 'Mallin ID';
$lang['owned_by']                                 = 'Omistaja';
$lang['options']                                  = 'Valinnat';
$lang['active']                                   = 'Aktiivinen';
$lang['set_as_active']                            = 'Aseta aktiiviseksi';
$lang['processing']                               = 'Käsitellään...';
$lang['error_processing_request']                 = 'Virhe pyyntöä käsiteltäessä';
$lang['fine_tuning_completed']                    = 'Hienosäätö valmistui onnistuneesti!';
$lang['fine_tuning_enabled']                      = 'Hienosäätö on otettu käyttöön';
$lang['fine_tuning_disabled']                     = 'Hienosäätö on poistettu käytöstä';
$lang['fine_tuned_model_set']                     = 'Hienosäädetty malli on asetettu aktiiviseksi';
$lang['confirm_delete_fine_tuned_model']          = 'Haluatko varmasti poistaa tämän hienosäädetyn mallin? Tätä toimintoa ei voi peruuttaa.';
$lang['fine_tuned_model_deleted']                 = 'Hienosäädetty malli on poistettu';
$lang['fine_tuned_model_delete_failed']           = 'Hienosäädetyn mallin poistaminen epäonnistui';
$lang['fine_tuning_base_model']                   = 'Hienosäädön perusmalli';
$lang['fine_tuning_base_model_description']       = 'Tämä on perusmalli, jota käytetään hienosäätöön. Eri malleilla on eri ominaisuudet ja hintaluokat.';
$lang['advanced_features']                        = 'Lisäominaisuudet';
$lang['openai_fine_tuning_description']           = 'Hienosäädä OpenAI-malleja tietopankkisi ja valmiiden vastausten avulla tarkempien vastausten saamiseksi.';
$lang['retrain_model']                            = 'Kouluta malli uudelleen';
$lang['retrain_model_description']                = 'Luo uusi hienosäädetty malli uusimmalla sisällöllä. Edelliset hienosäädetyt mallit poistetaan.';
$lang['model_is_recommended']                     = 'Suositeltu';

# 3.4.0
$lang['settings_group_einvoice']                  = 'Verkkolasku';
$lang['settings_einvoice_templates']              = 'Verkkolaskupohjat';
$lang['einvoice']                                 = 'Verkkolasku';
$lang['settings_einvoice_default_template']       = 'Verkkolaskun oletuspohja';
$lang['settings_einvoice_default_credit_note_template'] = 'Hyvityslaskun oletusverkkolaskupohja';
$lang['settings_einvoice_send_as_invoice_email_attachment'] = 'Lähetä verkkolasku laskun liitteenä sähköpostitse';
$lang['settings_einvoice_send_as_credit_note_email_attachment'] = 'Lähetä verkkolasku hyvityslaskun liitteenä sähköpostitse';
$lang['einvoice_new_template']                    = 'Uusi verkkolaskupohja';
$lang['einvoice_template_invalid_xml']            = 'Syötetty XML-sisältö on virheellistä. Korjaa se.';
$lang['einvoice_template_invalid_xml_on_submit']  = 'Virheellinen XML. Korjaa virheet ennen lähettämistä.';
$lang['einvoice_template_invalid_json']           = 'Syötetty JSON-sisältö on virheellistä. Tarkista JSON-syntaksi.';
$lang['einvoice_template_invalid_mustache']       = 'Malli sisältää virheellistä Mustache-syntaksia. Tarkista mallin muuttujat.';
$lang['xml_error']                                = 'XML-virhe';
$lang['einvoice_no_template_set']                 = 'Verkkolaskupohjaa ei ole asetettu. Aseta sellainen asetuksista.';
$lang['einvoice_module_permission_bulk']          = 'Joukkolähetys';
$lang['einvoice_module_bulk_export']              = 'Verkkolaskujen vienti';
$lang['template_type']                            = 'Tyyppi';
$lang['template_variables']                       = 'Mallin muuttujat';
$lang['validate_template']                        = 'Validoi malli';
$lang['validating']                               = 'Validoidaan...';
$lang['saving']                                   = 'Tallennetaan...';
$lang['template_validation_success']              = 'Mallin validointi onnistui!';
$lang['template_content_required']                = 'Mallin sisältö on pakollinen.';

$lang['item_is_optional']                         = 'Tämä kohde on valinnainen';
$lang['item_is_selected']                         = 'Valittu';
$lang['note_title']                               = 'Muistiinpanon otsikko';
$lang['note_content']                             = 'Muistiinpanon sisältö';
$lang['enabled_languages']                        = 'Käytössä olevat kielet';

$lang['csv_export']                               = 'CSV-vienti';
$lang['csv_exports']                              = 'CSV-viennit';
$lang['contacts']                                 = 'Yhteystiedot';
$lang['csv_export_select_type']                   = 'Vientityyppi';
$lang['csv_export_all_time']                      = 'Kaikki';
$lang['csv_export_three_months']                  = 'Viimeiset 3 kuukautta';
$lang['csv_export_six_months']                    = 'Viimeiset 6 kuukautta';
$lang['csv_export_twelve_months']                 = 'Viimeiset 12 kuukautta';
$lang['csv_export_from_date']                     = 'Alkaen päivämäärästä';
$lang['csv_export_to_date']                       = 'Päättyen päivämäärään';
$lang['csv_export_button']                        = 'Vie';
