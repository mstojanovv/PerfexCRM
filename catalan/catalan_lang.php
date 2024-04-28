<?php

# Version 1.0.0
#
# General
$lang['id']                   = 'ID';
$lang['name']                 = 'Nom';
$lang['options']              = 'Opcions';
$lang['submit']               = 'Enviar';
$lang['added_successfully']   = '%s afegit amb èxit.';
$lang['updated_successfully'] = '%s actualitzat amb èxit.';
$lang['edit']                 = 'Editar %s';
$lang['add_new']              = 'Afegir nou %s';
$lang['deleted']              = '%s esborrat';
$lang['problem_deleting']     = 'Problema en eliminar %s';
$lang['is_referenced']        = 'ID de %s s\'està utilitzant.';
$lang['close']                = 'Tancar';
$lang['send']                 = 'Enviar';
$lang['cancel']               = 'Cancel·lar';
$lang['go_back']              = 'Tornar';
$lang['error_uploading_file'] = 'Error en pujar arxiu';
$lang['load_more']            = 'Carregar més';
$lang['cant_delete_default']  = 'No puc eliminar per defecte %s';

# Invoice General
$lang['invoice_status_paid']                = 'Pagat';
$lang['invoice_status_unpaid']              = 'No pagat';
$lang['invoice_status_overdue']             = 'Endarrerit';
$lang['invoice_status_not_paid_completely'] = 'Parcialment pagat';

$lang['invoice_pdf_heading'] = 'FACTURA';

$lang['invoice_table_item_heading']            = 'Article';
$lang['invoice_table_quantity_heading']        = 'Quantitat';
$lang['invoice_table_rate_heading']            = 'Tarifa';
$lang['invoice_table_tax_heading']             = 'Impost';
$lang['invoice_table_amount_heading']          = 'Quantitat';
$lang['invoice_subtotal']                      = 'Sub total';
$lang['invoice_adjustment']                    = 'Ajust';
$lang['invoice_total']                         = 'Total';
$lang['invoice_bill_to']                       = 'Cobrar a';
$lang['invoice_data_date']                     = 'Data factura:';
$lang['invoice_data_duedate']                  = 'Data venciment:';
$lang['invoice_received_payments']             = 'Transaccions';
$lang['invoice_no_payments_found']             = 'No s\'han trobat pagaments per aquesta factura';
$lang['invoice_note']                          = 'Nota:';
$lang['invoice_payments_table_number_heading'] = 'Pagament #';
$lang['invoice_payments_table_mode_heading']   = 'Forma de pagament';
$lang['invoice_payments_table_date_heading']   = 'Data';
$lang['invoice_payments_table_amount_heading'] = 'Quantitat';


# Announcements
$lang['announcement']                 = 'Anunci';
$lang['announcement_lowercase']       = 'anunci';
$lang['announcements']                = 'Anuncis';
$lang['announcements_lowercase']      = 'anuncis';
$lang['new_announcement']             = 'Nou avís';
$lang['announcement_name']            = 'Assumpte';
$lang['announcement_message']         = 'Missatge';
$lang['announcement_show_to_staff']   = 'Mostrar als empleats';
$lang['announcement_show_to_clients'] = 'Mostrar als clients';
$lang['announcement_show_my_name']    = 'Mostrar el meu nom';

# Clients
$lang['clients']                                 = 'Clients';
$lang['client']                                  = 'Client';
$lang['new_client']                              = 'Nou client';
$lang['client_lowercase']                        = 'client';
$lang['client_firstname']                        = 'Nom';
$lang['client_lastname']                         = 'Cognom';
$lang['client_email']                            = 'Email';
$lang['client_company']                          = 'Empresa';
$lang['client_vat_number']                       = 'NIF';
$lang['client_address']                          = 'Adreça';
$lang['client_city']                             = 'Població';
$lang['client_postal_code']                      = 'Codi postal';
$lang['client_state']                            = 'País';
$lang['client_password']                         = 'Contrasenya';
$lang['client_password_change_populate_note']    = 'Nota: Si omple aquests camps, canviarà la contrasenya d\'aquest client.';
$lang['client_password_last_changed']            = 'Darrera modificació de la contrasenya:';
$lang['login_as_client']                         = 'Accedir com a client';
$lang['client_invoices_tab']                     = 'Factures';
$lang['contracts_invoices_tab']                  = 'Contractes';
$lang['contracts_tickets_tab']                   = 'Tiquets';
$lang['contracts_notes_tab']                     = 'Notes';
$lang['note_description']                        = 'Descripció nota';
$lang['client_do_not_send_welcome_email']        = 'No enviar email de benvinguda';
$lang['clients_notes_table_description_heading'] = 'Descripció';
$lang['clients_notes_table_addedfrom_heading']   = 'Afegida per';
$lang['clients_notes_table_dateadded_heading']   = 'Agregada el';

$lang['clients_list_full_name']  = 'Nom complet';
$lang['clients_list_last_login'] = 'Últim accés';

# Contracts
$lang['contracts']                = 'Contractes';
$lang['contract']                 = 'Contracte';
$lang['new_contract']             = 'Nou contracte';
$lang['contract_lowercase']       = 'contracte';
$lang['contract_start_date']      = 'Data d\'inici';
$lang['contract_end_date']        = 'Data final';
$lang['contract_subject']         = 'Tema';
$lang['contract_description']     = 'Descripció';
$lang['contract_subject_tooltip'] = 'Tema visible també per al client';
$lang['contract_client_string']   = 'Client';
$lang['contract_attach']          = 'Adjuntar document';

$lang['contract_list_client']     = 'Client';
$lang['contract_list_subject']    = 'Tema';
$lang['contract_list_start_date'] = 'Data d\'inici';
$lang['contract_list_end_date']   = 'Data final';

# Currencies
$lang['currencies']           = 'Monedes';
$lang['currency']             = 'Moneda';
$lang['new_currency']         = 'Nova moneda';
$lang['currency_lowercase']   = 'moneda';
$lang['base_currency_set']    = 'Ara aquesta és la divisa base.';
$lang['make_base_currency']   = 'Establir com a moneda principal';
$lang['base_currency_string'] = 'Moneda principal';

$lang['currency_list_name']   = 'Nom';
$lang['currency_list_symbol'] = 'Símbol';


$lang['currency_add_edit_description'] = 'Nom moneda';
$lang['currency_add_edit_rate']        = 'Símbol';

$lang['currency_edit_heading'] = 'Canviar la moneda';
$lang['currency_add_heading']  = 'Afegir nova moneda';


# Department
$lang['departments']          = 'Departaments';
$lang['department']           = 'Departament';
$lang['new_department']       = 'Departament nou';
$lang['department_lowercase'] = 'Departament';

$lang['department_name']             = 'Nom del Departament';
$lang['department_email']            = 'Email del Departament';
$lang['department_hide_from_client'] = 'Amagar del client?';
$lang['department_list_name']        = 'Nom';

# Email Templates
$lang['email_templates']                        = 'Plantilles email';
$lang['email_template']                         = 'Plantilla email';
$lang['email_template_lowercase']               = 'plantilla email';
$lang['email_templates_lowercase']              = 'plantilles email';
$lang['email_template_ticket_fields_heading']   = 'Tiquets';
$lang['email_template_invoices_fields_heading'] = 'Factures';
$lang['email_template_clients_fields_heading']  = 'Clients';

$lang['template_name']                = 'Nom de la plantilla';
$lang['template_subject']             = 'Tema';
$lang['template_fromname']            = 'Des de nom';
$lang['template_fromemail']           = 'Des d\'email';
$lang['send_as_plain_text']           = 'Enviar com a text sense format';
$lang['email_template_disabled']      = 'Desactivat';
$lang['email_template_email_message'] = 'Missatge email';
$lang['available_merge_fields']       = 'Camps de combinació disponibles';
# Home
$lang['dashboard_string']                          = 'Tauler de control';
$lang['home_latest_todos']                         = 'Últimes Tasques';
$lang['home_no_latest_todos']                      = 'No s\'ha trobat cap tasca';
$lang['home_latest_finished_todos']                = 'Tasques Acabades Recentment';
$lang['home_no_finished_todos_found']              = 'No s\'han trobat tasques acabades';
$lang['home_tickets_awaiting_reply_by_department'] = 'Tiquets pendents de resposta pel departament';
$lang['home_tickets_awaiting_reply_by_status']     = 'Tiquets pendents de resposta per situació';
$lang['home_this_week_events']                     = 'Esdeveniments d\'aquesta setmana';
$lang['home_upcoming_events_next_week']            = 'Esdeveniments de la setmana que ve';
$lang['home_event_added_by']                       = 'Esdeveniment afegit per';
$lang['home_public_event']                         = 'Esdeveniment públic';
$lang['home_weekly_payment_records']               = 'Registres de Pagaments Setmanals';
$lang['home_weekend_ticket_opening_statistics']    = 'Estadística Setmanal de tiquets oberts';
# Newsfeed
$lang['whats_on_your_mind']                                 = 'Comparteix documents, idees..';
$lang['new_post']                                           = 'Enviar';
$lang['newsfeed_upload_tooltip']                            = 'Consell: Arrossega i deixa anar per pujar';
$lang['newsfeed_all_departments']                           = 'Tots els departaments';
$lang['newsfeed_pin_post']                                  = 'Ancorar publicació';
$lang['newsfeed_unpin_post']                                = 'Desancorar publicació';
$lang['newsfeed_delete_post']                               = 'Esborrar';
$lang['newsfeed_published_post']                            = 'Publicat';
$lang['newsfeed_you_like_this']                             = 'T\'agrada';
$lang['newsfeed_like_this']                                 = 'M\'agrada';
$lang['newsfeed_one_other']                                 = 'un altre';
$lang['newsfeed_you']                                       = 'Tú';
$lang['newsfeed_and']                                       = 'i';
$lang['newsfeed_you_and']                                   = 'vostè i';
$lang['newsfeed_like_this_saying']                          = 'M\'agrada';
$lang['newsfeed_unlike_this_saying']                        = 'No M\'agrada';
$lang['newsfeed_show_more_comments']                        = 'Mostrar més comentaris';
$lang['comment_this_post_placeholder']                      = 'Comentar aquest post ..';
$lang['newsfeed_post_likes_modal_heading']                  = 'amics que els agrada aquest post';
$lang['newsfeed_comment_likes_modal_heading']               = 'amics que els agrada aquest comentari';
$lang['newsfeed_newsfeed_post_only_visible_to_departments'] = 'Aquest blog només és visible pels següents departaments: %s';
# Invoice Items
$lang['invoice_items']                     = 'Articles de la factura';
$lang['invoice_item']                      = 'Article de la factura';
$lang['new_invoice_item']                  = 'Nou artícle';
$lang['invoice_item_lowercase']            = 'article de la factura';
$lang['invoice_items_list_description']    = 'Descripció';
$lang['invoice_items_list_rate']           = 'Tarifa';
$lang['invoice_item_add_edit_description'] = 'Descripció';
$lang['invoice_item_add_edit_rate']        = 'Tarifa';
$lang['invoice_item_edit_heading']         = 'Editar element';
$lang['invoice_item_add_heading']          = 'Afegir nou element';
# Invoices
$lang['invoices']                       = 'Factures';
$lang['invoice']                        = 'Factura';
$lang['invoice_lowercase']              = 'factura';
$lang['create_new_invoice']             = 'Crear Factura';
$lang['view_invoice']                   = 'Veure factura';
$lang['invoice_payment_recorded']       = 'Pagament de Factura registrat';
$lang['invoice_payment_record_failed']  = 'Error en registrar pagament factura';
$lang['invoice_sent_to_client_success'] = 'factura envíada al cliente';
$lang['invoice_sent_to_client_fail']    = 'Problema en enviar factura';
$lang['invoice_reminder_send_problem']  = 'Problema en enviar recordatori endarreriment factura';
$lang['invoice_overdue_reminder_sent']  = 'Recordatori de factura vençuda enviat';

$lang['invoice_details']              = 'Detalls de la factura';
$lang['invoice_view']                 = 'Veure factura';
$lang['invoice_select_customer']      = 'Client';
$lang['invoice_add_edit_number']      = 'Número de factura';
$lang['invoice_add_edit_date']        = 'Data de la factura';
$lang['invoice_add_edit_duedate']     = 'Data de venciment';
$lang['invoice_add_edit_currency']    = 'Moneda';
$lang['invoice_add_edit_client_note'] = 'Nota client';
$lang['invoice_add_edit_admin_note']  = 'Nota admin';

$lang['invoices_toggle_table_tooltip'] = 'Veure Taula completa';

$lang['edit_invoice_tooltip']                   = 'Editar factura';
$lang['delete_invoice_tooltip']                 = 'Eliminar la factura. Nota: S\'esborraran tots els pagaments relacionars amb aquesta factura (si n\'hi ha).';
$lang['invoice_sent_to_email_tooltip']          = 'Envia per email';
$lang['invoice_already_send_to_client_tooltip'] = 'AquEsta factura ja s\'ha enviat al client %s';
$lang['send_overdue_notice_tooltip']            = 'Enviar avís de venciment';
$lang['invoice_view_activity_tooltip']          = 'Registre d\'activitats';
$lang['invoice_record_payment']                 = 'Registrar Pagament';


$lang['invoice_send_to_client_modal_heading']    = 'Enviar aquesta factura al client';
$lang['invoice_send_to_client_attach_pdf']       = 'Adjuntar la factura en PDF';
$lang['invoice_send_to_client_preview_template'] = 'Vista prèvia de plantilla d\'email';

$lang['invoice_dt_table_heading_number']  = 'Factura #';
$lang['invoice_dt_table_heading_date']    = 'Data';
$lang['invoice_dt_table_heading_client']  = 'Client';
$lang['invoice_dt_table_heading_duedate'] = 'Data de venciment';
$lang['invoice_dt_table_heading_amount']  = 'Quantitat';
$lang['invoice_dt_table_heading_status']  = 'Estat';

$lang['record_payment_for_invoice']              = 'Registrar Pagament';
$lang['record_payment_amount_received']          = 'Quantitat rebuda';
$lang['record_payment_date']                     = 'Data de pagament';
$lang['record_payment_leave_note']               = 'Deixar una nota';
$lang['invoice_payments_received']               = 'Pagaments rebuts';
$lang['invoice_record_payment_note_placeholder'] = 'Nota Admin';
$lang['no_payments_found']                       = 'No s\'han trobat pagaments per aquesta factura';

# Payments
$lang['payments']                             = 'Pagaments';
$lang['payment']                              = 'Pagament';
$lang['payment_lowercase']                    = 'pagament';
$lang['payments_table_number_heading']        = 'Pagament #';
$lang['payments_table_invoicenumber_heading'] = 'Factura #';
$lang['payments_table_mode_heading']          = 'Forma de pagament';
$lang['payments_table_date_heading']          = 'Data';
$lang['payments_table_amount_heading']        = 'Quantitat';
$lang['payments_table_client_heading']        = 'Client';
$lang['payment_not_exists']                   = 'No existeix el pagament';
$lang['payment_edit_for_invoice']             = 'pagament de la factura';
$lang['payment_edit_amount_received']         = 'Quantitat rebuda';
$lang['payment_edit_date']                    = 'Data de pagament';
# Knowledge Base
$lang['kb_article_add_edit_subject']   = 'Tema';
$lang['kb_article_add_edit_group']     = 'Grup';
$lang['kb_string']                     = 'Base de dades articles';
$lang['kb_article']                    = 'Article';
$lang['kb_article_lowercase']          = 'article';
$lang['kb_article_new_article']        = 'Article nou';
$lang['kb_article_disabled']           = 'Deshabilitat';
$lang['kb_article_description']        = 'Descripció de l\'article';
$lang['kb_no_articles_found']          = 'No s\'han trobat articles a la base de dades';
$lang['kb_dt_article_name']            = 'Nom de l\'article';
$lang['kb_dt_group_name']              = 'Grup';
$lang['new_group']                     = 'Nou grup';
$lang['kb_group_add_edit_name']        = 'Nom del grup';
$lang['kb_group_add_edit_description'] = 'breu descripció';
$lang['kb_group_add_edit_disabled']    = 'Deshabilitat';
$lang['kb_group_add_edit_note']        = 'Nota: Tots els articles d\'aquest grup s\'amagaran si no es marca com a deshabilitat';
$lang['group_table_name_heading']      = 'Nom';
$lang['group_table_isactive_heading']  = 'Actiu';
$lang['kb_no_groups_found']            = 'No s\'han trobat Grups a base de dades';

# Media
$lang['media_files'] = 'Arxius';

# Payment modes
$lang['new_payment_mode']       = 'Nova forma de pagament';
$lang['payment_modes']          = 'Formes de pagament';
$lang['payment_mode']           = 'Forma de pagament';
$lang['payment_mode_lowercase'] = 'forma de pagament';
$lang['payment_modes_dt_name']  = 'Nom forma pagament';

$lang['payment_mode_add_edit_name'] = 'Nom forma pagament';
$lang['payment_mode_edit_heading']  = 'Editar forma pagament';
$lang['payment_mode_add_heading']   = 'Agregar nova forma pagament';

# Predefined Ticket Replies
$lang['new_predefined_reply']              = 'Nova resposta predefinida';
$lang['predefined_replies']                = 'Respostes predefinides';
$lang['predefined_reply']                  = 'Resposta predefinida';
$lang['predefined_reply_lowercase']        = 'respuesta predefinida';
$lang['predefined_replies_dt_name']        = 'Nom resposta predefinida';
$lang['predefined_reply_add_edit_name']    = 'Nom resposta predefinida';
$lang['predefined_reply_add_edit_content'] = 'Contingut resposta';

# Ticket Priorities
$lang['new_ticket_priority']           = 'Nova prioritat';
$lang['ticket_priorities']             = 'Prioritats tiquets';
$lang['ticket_priority']               = 'Prioritat tiquet';
$lang['ticket_priority_lowercase']     = 'prioritat tiquet';
$lang['no_ticket_priorities_found']    = 'No s\'han trobat prioritats tiquets';
$lang['ticket_priority_dt_name']       = 'Nom prioritat tiquets';
$lang['ticket_priority_add_edit_name'] = 'Nom prioritat';

# Reports
$lang['kb_reports']                         = 'Informes articles base coneixement';
$lang['sales_reports']                      = 'Informes de vendes';
$lang['reports_choose_kb_group']            = 'Triar grup';
$lang['report_kb_yes']                      = 'Sí';
$lang['report_kb_no']                       = 'No';
$lang['report_kb_no_votes']                 = 'Sense vots';
$lang['report_this_week_leads_conversions'] = 'Conversions probables clients d\'aquesta setmana';
$lang['report_leads_sources_conversions']   = 'Fonts';
$lang['report_leads_monthly_conversions']   = 'Mensual';
$lang['sales_report_heading']               = 'Informe de vendes';
$lang['report_sales_type_income']           = 'Ingressos totals';

$lang['report_sales_type_customer']                    = 'Informe de client';
$lang['report_sales_base_currency_select_explanation'] = 'Ha de seleccionar la moneda perquè té factures amb moneda diferent';
$lang['report_sales_from_date']                        = 'Des de';
$lang['report_sales_to_date']                          = 'Fins a';


$lang['report_sales_months_all_time']      = 'Tot el temps';
$lang['report_sales_months_six_months']    = 'Últims 6 mesos';
$lang['report_sales_months_twelve_months'] = 'Últims 12 mesos';
$lang['reports_sales_generated_report']    = 'Informe generat';



$lang['reports_sales_dt_customers_client']                = 'Client';
$lang['reports_sales_dt_customers_total_invoices']        = 'Total factures';
$lang['reports_sales_dt_items_customers_amount']          = 'Import';
$lang['reports_sales_dt_items_customers_amount_with_tax'] = 'Import amb impostos';

# Roles
$lang['new_role']           = 'Nou rol';
$lang['all_roles']          = 'Tots els rols';
$lang['roles']              = 'Rols';
$lang['role']               = 'Rol';
$lang['role_lowercase']     = 'rol';
$lang['roles_total_users']  = 'Total usuaris:';
$lang['roles_dt_name']      = 'Nom de rol';
$lang['role_add_edit_name'] = 'Nom de rol';

# Service
$lang['new_service']           = 'Nou Servei';
$lang['services']              = 'Serveis';
$lang['service']               = 'Servei';
$lang['service_lowercase']     = 'servei';
$lang['services_dt_name']      = 'Nom del Servei';
$lang['service_add_edit_name'] = 'Nom del Servei';

# Settings
$lang['settings']                    = 'Configuració';
$lang['settings_updated']            = 'Configuració actualitzada';
$lang['settings_save']               = 'Guardar configuració';
$lang['settings_group_general']      = 'General';
$lang['settings_group_localization'] = 'Localització';
$lang['settings_group_tickets']      = 'Entrades';
$lang['settings_group_sales']        = 'Formats PDF';
$lang['settings_group_email']        = 'Email';
$lang['settings_group_clients']      = 'Clients';
$lang['settings_group_newsfeed']     = 'Notícies';
$lang['settings_group_cronjob']      = 'Cron treball';

$lang['settings_yes']                                        = 'Sí';
$lang['settings_no']                                         = 'No';
$lang['settings_clients_default_theme']                      = 'Tema predeterminat clients';
$lang['settings_clients_allow_registration']                 = 'Permetre que els clients es registrin';
$lang['settings_clients_allow_kb_view_without_registration'] = 'Permetre veure base coneixement sense connexió';

$lang['settings_cron_send_overdue_reminder']                 = 'Enviar recordatori factura vençuda';
$lang['settings_cron_send_overdue_reminder_tooltip']         = 'Enviar email factura vençuda quan ​​estat factura actualitzi a vençuda en el CronJob';
$lang['automatically_send_invoice_overdue_reminder_after']   = 'Enviar automàticamente després recordatori (dies)';
$lang['automatically_resend_invoice_overdue_reminder_after'] = 'Tornar a enviar recordatori automàticament després de (dies)';

$lang['settings_email_host']      = 'Host SMTP';
$lang['settings_email_port']      = 'Port SMTP';
$lang['settings_email']           = 'Email';
$lang['settings_email_password']  = 'Contrasenya SMTP';
$lang['settings_email_charset']   = 'Joc de caràcters email';
$lang['settings_email_signature'] = 'Signatura email';

$lang['settings_general_company_logo']                = 'Logo empresa';
$lang['settings_general_company_logo_tooltip']        = 'Dimensions recomenades: 150 x 34px';
$lang['settings_general_company_remove_logo_tooltip'] = 'Retirar logo empresa';
$lang['settings_general_company_name']                = 'Nom empresa';
$lang['settings_general_company_main_domain']         = 'Domini principal empresa';
$lang['settings_general_use_knowledgebase']           = 'Usar base coneixement';
$lang['settings_general_use_knowledgebase_tooltip']   = 'Si permet aquesta opció la base de coneixements apareixerà als clients';
$lang['settings_general_tables_limit']                = 'Límit paginació taules';
$lang['settings_general_default_staff_role']          = 'Rol predeterminat del personal';
$lang['settings_general_default_staff_role_tooltip']  = 'Aquest rol es seleccionarà de forma predeterminada quan afegeixi un nou membre del personal';

$lang['settings_localization_date_format']      = 'Format data';
$lang['settings_localization_default_timezone'] = 'Zona horària predeterminada';
$lang['settings_localization_default_language'] = 'Idioma predeterminat';

$lang['settings_newsfeed_max_file_upload_post'] = 'Nombre màxim d\'arxius a carregar per article';

$lang['settings_reminders_contracts']         = 'Recordatori caducitat contracte';
$lang['settings_reminders_contracts_tooltip'] = 'Notificació recordatori de caducitat en dies';

$lang['settings_tickets_use_services']             = 'Ús tiquets serveis';
$lang['settings_tickets_max_attachments']          = 'Nombre màxim d\'adjunts per tiquet';
$lang['settings_tickets_allow_departments_access'] = 'Permetre al personal a accedir solament als tiquets que pertanyen a departaments de personal';
$lang['settings_tickets_allowed_file_extensions']  = 'S\'admeten extensiones arxius adjunts';

$lang['settings_sales_general']                                    = 'General';
$lang['settings_sales_general_note']                               = 'Configuració general';
$lang['settings_sales_invoice_prefix']                             = 'Prefix número factura';
$lang['settings_sales_decimal_separator']                          = 'Separador decimal';
$lang['settings_sales_thousand_separator']                         = 'Separador de milers';
$lang['settings_sales_currency_placement']                         = 'Col·locació moneda';
$lang['settings_sales_currency_placement_before']                  = 'Abans import';
$lang['settings_sales_currency_placement_after']                   = 'Després import';
$lang['settings_sales_require_client_logged_in_to_view_invoice']   = 'Requerir identificació client per veure factura';
$lang['settings_sales_next_invoice_number']                        = 'Número de factura següent';
$lang['settings_sales_next_invoice_number_tooltip']                = 'Posar 1 per tornar a començar';
$lang['settings_sales_decrement_invoice_number_on_delete']         = 'Reduir número factura en Eliminar';
$lang['settings_sales_decrement_invoice_number_on_delete_tooltip'] = 'Vol reduir el número de factura quan s\'elimina l\'última factura?';
$lang['settings_sales_invoice_number_format']                      = 'Format número de factura';
$lang['settings_sales_invoice_number_format_year_based']           = 'Basat en l\'any';
$lang['settings_sales_invoice_number_format_number_based']         = 'Basat en número (000001)';

$lang['settings_sales_company_info_note'] = 'Aquesta informació es mostrarà a factures / pressupostos / pagaments i altres documents PDF que requereixin informació de l\'empresa';
$lang['settings_sales_company_name']      = 'Nom de l\'Empresa';
$lang['settings_sales_address']           = 'Adreça';
$lang['settings_sales_city']              = 'Població';
$lang['settings_sales_country_code']      = 'Codi de país';
$lang['settings_sales_postal_code']       = 'Codi postal';
$lang['settings_sales_phonenumber']       = 'Telèfon';

# Leads
$lang['new_lead']       = 'Nou client potencial';
$lang['leads']          = 'Clients potencials';
$lang['lead']           = 'Client potencial';
$lang['lead_lowercase'] = 'client potencial';
$lang['leads_all']      = 'Tots';

$lang['leads_canban_notes']  = 'Notes: %s';
$lang['leads_canban_source'] = 'Font: %s';

$lang['lead_new_source']            = 'Nova font';
$lang['lead_sources']               = 'Fonts clients potencials';
$lang['lead_source']                = 'Font client potencial';
$lang['lead_source_lowercase']      = 'font client potencial';
$lang['leads_sources_not_found']    = 'No s\'han trobat fonts clients potencials';
$lang['leads_sources_table_name']   = 'Nom de la font';
$lang['leads_source_add_edit_name'] = 'Nom de la font';

$lang['lead_new_status']         = 'Nou estat client potencial';
$lang['lead_status']             = 'Estat client potencial';
$lang['lead_status_lowercase']   = 'estat client potencial';
$lang['leads_status_table_name'] = 'Nom estat';

$lang['leads_status_add_edit_name']  = 'Nom estat';
$lang['leads_status_add_edit_order'] = 'Ordre';

$lang['lead_statuses_not_found'] = 'No s\'han trobat estats client potencial';
$lang['leads_search']            = 'Cercar clients potencials';

$lang['leads_table_total'] = 'Total: %s';

$lang['leads_dt_name']         = 'Nom';
$lang['leads_dt_email']        = 'Email';
$lang['leads_dt_phonenumber']  = 'Telèfon';
$lang['leads_dt_assigned']     = 'Assignat';
$lang['leads_dt_status']       = 'Estat';
$lang['leads_dt_last_contact'] = 'Últim contacte';

$lang['lead_add_edit_name']                = 'Nom';
$lang['lead_add_edit_email']               = 'Email';
$lang['lead_add_edit_phonenumber']         = 'Telèfon';
$lang['lead_add_edit_source']              = 'Font';
$lang['lead_add_edit_status']              = 'Estat';
$lang['lead_add_edit_assigned']            = 'Assignat';
$lang['lead_add_edit_datecontacted']       = 'Data contacte';
$lang['lead_add_edit_contacted_today']     = 'Contactat avui';
$lang['lead_add_edit_activity']            = 'Registre activitats';
$lang['lead_add_edit_notes']               = 'Notes';
$lang['lead_add_edit_add_note']            = 'Afegir nota';
$lang['lead_not_contacted']                = 'No contactat';
$lang['lead_add_edit_contacted_this_lead'] = 'Contactat avui';
# Misc
$lang['access_denied'] = 'Accés denegat';
$lang['prev']          = 'Anterior';
$lang['next']          = 'Següent';

# Datatables
$lang['dt_paginate_first']    = 'Primer';
$lang['dt_paginate_last']     = 'Últim';
$lang['dt_paginate_next']     = 'Següent';
$lang['dt_paginate_previous'] = 'Anterior';
$lang['dt_empty_table']       = 'No {0} trobat';
$lang['dt_search']            = 'Cercar:';
$lang['dt_zero_records']      = 'No hi ha coincidències';
$lang['dt_loading_records']   = 'Carregant...';
$lang['dt_length_menu']       = 'Clients per pàgina _MENU_';
$lang['dt_info_filtered']     = '(Filtrat de _MAX_ total de {0})';
$lang['dt_info_empty']        = 'Mostrant 0 al 0 de 0 {0}';
$lang['dt_info']              = 'Mostrant des de _START_ fins a _END_ de _TOTAL_ {0}';
$lang['dt_empty_table']       = 'No {0} trobat';
$lang['dt_sort_ascending']    = 'Activar per a ordenar la columna ascendent';
$lang['dt_sort_descending']   = 'Activar per a ordenar la columna descendent';
# Invoice Activity Log
$lang['user_sent_overdue_reminder'] = '%s factura enviat recordatori vençuda';

# Weekdays
$lang['wd_monday']    = 'Dilluns';
$lang['wd_tuesday']   = 'Dimarts';
$lang['wd_thursday']  = 'Dijous';
$lang['wd_wednesday'] = 'Dimecres';
$lang['wd_friday']    = 'Divendres';
$lang['wd_saturday']  = 'Dissabte';
$lang['wd_sunday']    = 'Diumenge';

# Admin Left Sidebar
$lang['als_dashboard'] = 'Tauler';
$lang['als_clients']   = 'Clients';
$lang['als_leads']     = 'Potencials';

$lang['als_contracts'] = 'Contractes';

$lang['als_sales'] = 'Vendes';

$lang['als_staff'] = 'Personal';
$lang['als_tasks'] = 'Tasques';
$lang['als_kb']    = 'Base de dades';

$lang['als_media']                 = 'Mitjans de comunicació';
$lang['als_reports']               = 'Informes';
$lang['als_reports_sales_submenu'] = 'Ingressos';
$lang['als_reports_leads_submenu'] = 'Potencials';
$lang['als_kb_articles_submenu']   = 'Articles Base de Dades';
$lang['als_utilities']             = 'Utilitats';
$lang['als_announcements_submenu'] = 'Anuncis';
$lang['als_calendar_submenu']      = 'Calendari';
$lang['als_activity_log_submenu']  = 'Registre activitats';

# Admin Customizer Sidebar
$lang['acs_ticket_priority_submenu']           = 'Prioritat tiquets';
$lang['acs_ticket_statuses_submenu']           = 'Estats tiquets';
$lang['acs_ticket_predefined_replies_submenu'] = 'Respostes predefinides';
$lang['acs_ticket_services_submenu']           = 'Serveis';
$lang['acs_departments']                       = 'Departaments';
$lang['acs_leads']                             = 'Potencials';
$lang['acs_leads_sources_submenu']             = 'Fonts';
$lang['acs_leads_statuses_submenu']            = 'Estats';
$lang['acs_sales_taxes_submenu']               = 'Impostos';
$lang['acs_sales_currencies_submenu']          = 'Monedes';
$lang['acs_sales_payment_modes_submenu']       = 'Formes pagament';
$lang['acs_email_templates']                   = 'Plantilles email';
$lang['acs_roles']                             = 'Rols';
$lang['acs_settings']                          = 'Configuració';

# Tickets
$lang['new_ticket']                                          = 'Obrir nou tiquet';
$lang['tickets']                                             = 'Entrades';
$lang['ticket']                                              = 'Tiquet';
$lang['ticket_lowercase']                                    = 'tiquet';
$lang['support_tickets']                                     = 'Tiquets suport tècnic';
$lang['support_ticket']                                      = 'Tiquet suport tècnic';
$lang['ticket_settings_to']                                  = 'A';
$lang['ticket_settings_email']                               = 'Adreça email';
$lang['ticket_settings_departments']                         = 'Departament';
$lang['ticket_settings_service']                             = 'Servei';
$lang['ticket_settings_priority']                            = 'Prioritat';
$lang['ticket_settings_subject']                             = 'Tema';
$lang['ticket_settings_assign_to']                           = 'Assignar tiquets (per defecte és l\'usuari actual)';
$lang['ticket_add_body']                                     = 'Cos';
$lang['ticket_add_attachments']                              = 'Adjunts';
$lang['ticket_no_reply_yet']                                 = 'No hi ha resposta';
$lang['new_ticket_added_successfully']                       = 'Tiquet # %s afegit';
$lang['replied_to_ticket_successfully']                      = 'Tiquet # %s respost';
$lang['ticket_settings_updated_successfully']                = 'Configuració actualitzada';
$lang['ticket_settings_updated_successfully_and_reassigned'] = 'Configuració actualitzada – reassignat al departament de %s';
$lang['ticket_dt_subject']                                   = 'Tema';
$lang['ticket_dt_department']                                = 'Departament';
$lang['ticket_dt_service']                                   = 'Servei';
$lang['ticket_dt_submitter']                                 = 'Client';
$lang['ticket_dt_status']                                    = 'Estat';
$lang['ticket_dt_priority']                                  = 'Prioritat';
$lang['ticket_dt_last_reply']                                = 'Última resposta';

$lang['ticket_single_add_reply']                  = 'Afegir resposta';
$lang['ticket_single_add_note']                   = 'Afegir nota';
$lang['ticket_single_other_user_tickets']         = 'Altres tiquets';
$lang['ticket_single_settings']                   = 'Configuració';
$lang['ticket_single_priority']                   = 'Prioritat: %s';
$lang['ticket_single_last_reply']                 = 'Última resposta: %s';
$lang['ticket_single_ticket_note_by']             = 'Nota de %s';
$lang['ticket_single_note_added']                 = 'Nota afegida: %s';
$lang['ticket_single_change_status']              = 'Canviar estat';
$lang['ticket_single_assign_to_me_on_update']     = 'Assignar-me aquest tiquet en actualitzar';
$lang['ticket_single_insert_predefined_reply']    = 'Inserir resposta predefinida';
$lang['ticket_single_insert_knowledge_base_link'] = 'Inserir enllaç a base coneixement';
$lang['ticket_single_attachments']                = 'Arxius adjunts';
$lang['ticket_single_add_response']               = 'Afegir resposta';
$lang['ticket_single_note_heading']               = 'Nota';
$lang['ticket_single_add_note']                   = 'Afegir nota';
$lang['ticket_settings_none_assigned']            = 'Cap';
$lang['ticket_status_changed_successfully']       = 'Estat canviat';
$lang['ticket_status_changed_fail']               = 'Problema en canviar estat';

$lang['ticket_staff_string']                = 'Personal';
$lang['ticket_client_string']               = 'Client';
$lang['ticket_posted']                      = 'Publicat: %s';
$lang['ticket_access_by_department_denied'] = 'No té accés a aquets tiquet. Aquest tiquet és d\'un departament que no té assignat.';

# Staff
$lang['new_staff']                       = 'Nou membre del personal';
$lang['staff_members']                   = 'Membres del personal';
$lang['staff_member']                    = 'Membre de l\'equip';
$lang['staff_member_lowercase']          = 'membre de l\'equip';
$lang['staff_profile_updated']           = 'Perfil actualitzat';
$lang['staff_old_password_incorrect']    = 'Antiga contrasenya incorrecta';
$lang['staff_password_changed']          = 'Contrasenya canviada';
$lang['staff_problem_changing_password'] = 'Problema en canviar contrasenya';
$lang['staff_profile_string']            = 'Perfil';

$lang['staff_cant_remove_main_admin']          = 'No es pot treure administrador principal';
$lang['staff_cant_remove_yourself_from_admin'] = 'No pot treure\'s d\'administrador';

$lang['staff_dt_name']       = 'Nom complet';
$lang['staff_dt_email']      = 'Email';
$lang['staff_dt_last_Login'] = 'Últim accés';
$lang['staff_dt_active']     = 'Actiu';

$lang['staff_add_edit_firstname']             = 'Nom';
$lang['staff_add_edit_lastname']              = 'Cognom';
$lang['staff_add_edit_email']                 = 'Email';
$lang['staff_add_edit_phonenumber']           = 'Telèfon';
$lang['staff_add_edit_facebook']              = 'Facebook';
$lang['staff_add_edit_linkedin']              = 'LinkedIn';
$lang['staff_add_edit_skype']                 = 'Skype';
$lang['staff_add_edit_departments']           = 'Departaments';
$lang['staff_add_edit_role']                  = 'Rol';
$lang['staff_add_edit_permissions']           = 'Permisos';
$lang['staff_add_edit_administrator']         = 'Administrador';
$lang['staff_add_edit_password']              = 'Contrasenya';
$lang['staff_add_edit_password_note']         = 'Nota: Si omple aquests camps, es canviarà la contrasenya d\'aquest membre.';
$lang['staff_add_edit_password_last_changed'] = 'Últim canvi contrasenya';
$lang['staff_add_edit_notes']                 = 'Notes';
$lang['staff_add_edit_note_description']      = 'Descripció nota';

$lang['staff_notes_table_description_heading'] = 'Nota';
$lang['staff_notes_table_addedfrom_heading']   = 'Des de';
$lang['staff_notes_table_dateadded_heading']   = 'Data';

$lang['staff_admin_profile']         = 'Perfil administració';
$lang['staff_profile_notifications'] = 'Notificacions';
$lang['staff_profile_departments']   = 'Departaments';

$lang['staff_edit_profile_image']                      = 'Imatge de perfil';
$lang['staff_edit_profile_your_departments']           = 'Els seus departaments';
$lang['staff_edit_profile_change_your_password']       = 'Canviï contrasenya';
$lang['staff_edit_profile_change_old_password']        = 'Contrasenya anterior';
$lang['staff_edit_profile_change_new_password']        = 'Nova contrasenya';
$lang['staff_edit_profile_change_repeat_new_password'] = 'Repeteixi nova contrasenya';

# Staff Tasks
$lang['new_task']       = 'Nova tasca';
$lang['tasks']          = 'Tasques';
$lang['task']           = 'Tasca';
$lang['task_lowercase'] = 'tasca';
$lang['comment_string'] = 'Comentari';

$lang['task_marked_as_complete'] = 'Tasca marcada como a finalitzada';
$lang['task_follower_removed']   = 'Seguidor eliminat';
$lang['task_assignee_removed']   = 'Tasca eliminada';

$lang['task_no_assignees'] = 'No hi ha assignats';
$lang['task_no_followers'] = 'Sense seguidors';

$lang['task_list_all']            = 'Totes';
$lang['task_list_not_assigned']   = 'No assignada';
$lang['task_list_duedate_passed'] = 'Data vençuda';
$lang['tasks_dt_name']            = 'Nom';

$lang['task_single_priority']               = 'Prioritat';
$lang['task_single_start_date']             = 'Data inici';
$lang['task_single_due_date']               = 'Data venciment';
$lang['task_single_finished']               = 'Acabat';
$lang['task_single_mark_as_complete']       = 'Marcar como a finalitzada';
$lang['task_single_edit']                   = 'Editar';
$lang['task_single_delete']                 = 'Esborrar';
$lang['task_single_assignees']              = 'Cessionaris';
$lang['task_single_assignees_select_title'] = 'Assignar tasca a';
$lang['task_single_followers']              = 'Seguidors';
$lang['task_single_followers_select_title'] = 'Afegir Seguidors';
$lang['task_single_add_new_comment']        = 'Afegir comentari';

$lang['task_add_edit_subject']     = 'Tema';
$lang['task_add_edit_priority']    = 'Prioritat';
$lang['task_priority_low']         = 'Baixa';
$lang['task_priority_medium']      = 'Mitjana';
$lang['task_priority_high']        = 'Alta';
$lang['task_priority_urgent']      = 'Urgent';
$lang['task_add_edit_start_date']  = 'Data inici';
$lang['task_add_edit_due_date']    = 'Data venciment';
$lang['task_add_edit_description'] = 'Descripció tasca';

# Taxes
$lang['new_tax']       = 'Nou impost';
$lang['taxes']         = 'Impostos';
$lang['tax']           = 'Impost';
$lang['tax_lowercase'] = 'impost';
$lang['tax_dt_name']   = 'Nom impost';
$lang['tax_dt_rate']   = 'Taxa (percentatge)';

$lang['tax_add_edit_name'] = 'Nom impost';
$lang['tax_add_edit_rate'] = 'Taxa impost (tant per cent)';
$lang['tax_edit_title']    = 'Editar Impost';
$lang['tax_add_title']     = 'Afegir impost';

# Ticket Statuses
$lang['new_ticket_status']       = 'Nou estat tiquet';
$lang['ticket_statuses']         = 'Estats tiquets';
$lang['ticket_status']           = 'Estat tiquet';
$lang['ticket_status_lowercase'] = 'estat tiquet';

$lang['ticket_statuses_dt_name']      = 'Nom estat tiquet';
$lang['no_ticket_statuses_found']     = 'No s\'ha trobat tiquet d\'eatat';
$lang['ticket_statuses_table_total']  = 'Total %s';
$lang['ticket_status_add_edit_name']  = 'Nom tiquet estat';
$lang['ticket_status_add_edit_color'] = 'Seleccionar color';
$lang['ticket_status_add_edit_order'] = 'Estat ordre';

# Todos
$lang['new_todo']                  = 'Tasca nova';
$lang['my_todos']                  = 'Tasques meves';
$lang['todo']                      = 'Tasques';
$lang['todo_lowercase']            = 'tasques';
$lang['todo_status_changed']       = 'Estat tasca canviat';
$lang['todo_add_title']            = 'Afegir tasca nova';
$lang['add_new_todo_description']  = 'Descripció';
$lang['no_finished_todos_found']   = 'No s\'ha trobat cap tasca finalitzada';
$lang['no_unfinished_todos_found'] = 'No s\'ha trobat cap tasca pendent';
$lang['unfinished_todos_title']    = 'Tasques pendents';
$lang['finished_todos_title']      = 'Tasques finalitzades';

# Utilities
$lang['utility_activity_log']                        = 'Registre d\'activitats';
$lang['utility_activity_log_filter_by_date']         = 'Filtrar per data';
$lang['utility_activity_log_dt_description']         = 'Descripció';
$lang['utility_activity_log_dt_date']                = 'Data';
$lang['utility_activity_log_dt_staff']               = 'Personal';
$lang['utility_calendar_new_event_title']            = 'Afegir nou esdeveniment';
$lang['utility_calendar_new_event_start_date']       = 'Data d\'inici';
$lang['utility_calendar_new_event_end_date']         = 'Data final';
$lang['utility_calendar_new_event_make_public']      = 'Fer públic';
$lang['utility_calendar_event_added_successfully']   = 'Afegit nou esdeveniment';
$lang['utility_calendar_event_deleted_successfully'] = 'Esdeveniment eliminat';
$lang['utility_calendar_new_event_placeholder']      = 'Títol esdeveniment';


# Navigation
$lang['nav_notifications']          = 'Notificacions';
$lang['nav_my_profile']             = 'El meu perfil';
$lang['nav_edit_profile']           = 'Editar perfil';
$lang['nav_logout']                 = 'Tancar sessió';
$lang['nav_no_notifications']       = 'No s\'ha trobat cap notificació';
$lang['nav_view_all_notifications'] = 'Veure totes les notificacions';
$lang['nav_notifications_tooltip']  = 'Veure notificacions';

# Footer
$lang['clients_copyright'] = 'Drets d\'autor de %s';

# Contracts
$lang['clients_contracts']               = 'Contractes';
$lang['clients_contracts_dt_subject']    = 'Tema';
$lang['clients_contracts_dt_start_date'] = 'Data d\'inici';
$lang['clients_contracts_dt_end_date']   = 'Data final';

# Home
$lang['clients_quick_invoice_info']           = 'Informació ràpida factures';
$lang['clients_home_currency_select_tooltip'] = 'Ha de seleccionar la moneda perquè té factures amb moneda diferent';
# Invoices
$lang['clients_invoice_html_btn_download'] = 'Descarregar';

$lang['clients_my_invoices']        = 'Factures meves';
$lang['clients_invoice_dt_number']  = 'Factura #';
$lang['clients_invoice_dt_date']    = 'Data';
$lang['clients_invoice_dt_duedate'] = 'Data venciment';
$lang['clients_invoice_dt_amount']  = 'Import';
$lang['clients_invoice_dt_status']  = 'Estat';

# Profile
$lang['clients_profile_heading'] = 'Perfil';

# Used for edit profile and register START
$lang['clients_firstname'] = 'Nom';
$lang['clients_lastname']  = 'Cognom';
$lang['clients_email']     = 'Adreça email';
$lang['clients_company']   = 'Empresa';
$lang['clients_vat']       = 'NIF';
$lang['clients_phone']     = 'Telèfon';
$lang['clients_country']   = 'País';
$lang['clients_city']      = 'Població';
$lang['clients_address']   = 'Adreça';
$lang['clients_zip']       = 'Codi postal';
$lang['clients_state']     = 'Estat';

# Used for edit profile and register END

$lang['clients_register_password']        = 'Contrasenya';
$lang['clients_register_password_repeat'] = 'Repeteixi contrasenya';
$lang['clients_edit_profile_update_btn']  = 'Actualitzar';

$lang['clients_edit_profile_change_password_heading'] = 'Canviar contrasenya';
$lang['clients_edit_profile_old_password']            = 'Contrasenya anterior';
$lang['clients_edit_profile_new_password']            = 'Nova contrasenya';
$lang['clients_edit_profile_new_password_repeat']     = 'Repeteixi contrasenya';
$lang['clients_edit_profile_change_password_btn']     = 'Canviar contrasenya';
$lang['clients_profile_last_changed_password']        = 'Última modificació contrasenya %s';

# Knowledge base
$lang['clients_knowledge_base']                    = 'Base de dades clients';
$lang['clients_knowledge_base_articles_not_found'] = 'No s\ha trobat cap article a la base de dades';
$lang['clients_knowledge_base_find_useful']        = 'L\'ha trobat útil aquest article?';
$lang['clients_knowledge_base_find_useful_yes']    = 'Sí';
$lang['clients_knowledge_base_find_useful_no']     = 'No';
$lang['clients_article_only_1_vote_today']         = 'Pot votar un cop en 24 hores';
$lang['clients_article_voted_thanks_for_feedback'] = 'Gràcies per la seva opinió';

# Tickets
$lang['clients_ticket_open_subject']               = 'Crear tiquet de suport';
$lang['clients_ticket_open_departments']           = 'Departament';
$lang['clients_tickets_heading']                   = 'Tiquetsd de Suport';
$lang['clients_ticket_open_service']               = 'Servei';
$lang['clients_ticket_open_priority']              = 'Prioritat';
$lang['clients_ticket_open_body']                  = 'Cos tiquet';
$lang['clients_ticket_attachments']                = 'Adjunts';
$lang['clients_single_ticket_string']              = 'Tiquet';
$lang['clients_single_ticket_replied']             = 'Respost: %s';
$lang['clients_single_ticket_information_heading'] = 'Informació tiquets';

$lang['clients_tickets_dt_number']     = 'Tiquet #';
$lang['clients_tickets_dt_subject']    = 'Tema';
$lang['clients_tickets_dt_department'] = 'Departament';
$lang['clients_tickets_dt_service']    = 'Servei';
$lang['clients_tickets_dt_status']     = 'Estat';
$lang['clients_tickets_dt_last_reply'] = 'Última resposta';


$lang['clients_ticket_single_department']        = 'Departament: %s';
$lang['clients_ticket_single_submitted']         = 'Inscrit: %s';
$lang['clients_ticket_single_status']            = 'Estat:';
$lang['clients_ticket_single_priority']          = 'Prioritat: %s';
$lang['clients_ticket_single_add_reply_btn']     = 'Afegir resposta';
$lang['clients_ticket_single_add_reply_heading'] = 'Afegir resposta a aquest tiquet';

# Login
$lang['clients_login_heading_no_register'] = 'Iniciar sessió';
$lang['clients_login_heading_register']    = 'Si us plau, iniciï sessió o registri\'s';
$lang['clients_login_email']               = 'Adreça email';
$lang['clients_login_password']            = 'Contrasenya';
$lang['clients_login_remember']            = 'Recorda\'m';
$lang['clients_login_login_string']        = 'Iniciar sessió';

# Register
$lang['clients_register_string']  = 'Registre';
$lang['clients_register_heading'] = 'Registre';

# Navigation
$lang['clients_nav_login']     = 'Iniciar sessió';
$lang['clients_nav_register']  = 'Registre';
$lang['clients_nav_invoices']  = 'Factures';
$lang['clients_nav_contracts'] = 'Contractes';
$lang['clients_nav_kb']        = 'Base de dades';
$lang['clients_nav_profile']   = 'Perfil';
$lang['clients_nav_logout']    = 'Tancar sessió';

# Version 1.0.1
# Admin
#
# Payments
$lang['payment_receipt']                               = 'Rebut de pagament';
$lang['payment_for_string']                            = 'Pagament per';
$lang['payment_date']                                  = 'Data de pagament:';
$lang['payment_view_mode']                             = 'Forma de pagament:';
$lang['payment_total_amount']                          = 'Import total';
$lang['payment_table_invoice_number']                  = 'Número factura';
$lang['payment_table_invoice_date']                    = 'Data factura';
$lang['payment_table_invoice_amount_total']            = 'Import factura';
$lang['payment_table_payment_amount_total']            = 'Toral pagament';
$lang['payments_table_transaction_id']                 = 'ID transacció: %s';
$lang['payment_getaway_token_not_found']               = 'No s\ha trobat cap passarel·la de pagament';
$lang['online_payment_recorded_success']               = 'Pagament registrat';
$lang['online_payment_recorded_success_fail_database'] = 'Pagament realitzat correctament però no s\'ha pogut inserir en la base de dades, si us plau, contacti amb l\'administrador';

# Leads
$lang['lead_convert_to_client']                = 'Convertir a client';
$lang['lead_convert_to_email']                 = 'Email';
$lang['lead_convert_to_client_firstname']      = 'Nom';
$lang['lead_convert_to_client_lastname']       = 'Cognom';
$lang['lead_email_already_exists']             = 'Email client potencial ja existeix en les dades dels clients';
$lang['lead_to_client_base_converted_success'] = 'Client potencial convertit a client';
$lang['lead_have_client_profile']              = 'Aquest cvlient potencial té perfil de client.';
$lang['lead_converted_edit_client_profile']    = 'Editar perfil';

# Invoices
$lang['view_invoice_as_customer_tooltip']                                     = 'Veure factura como a client';
$lang['invoice_add_edit_recurring']                                           = 'Factura recurrent?';
$lang['invoice_add_edit_recurring_no']                                        = 'No';
$lang['invoice_add_edit_recurring_month']                                     = 'Cada %s mes';
$lang['invoice_add_edit_recurring_months']                                    = 'Cada %s mesos';
$lang['invoices_list_all']                                                    = 'Tot';
$lang['invoices_list_not_have_payment']                                       = 'Factures sense cap registre de pagament';
$lang['invoices_list_recurring']                                              = 'Factures recurrents';
$lang['invoices_list_made_payment_by']                                        = 'Pagament realitzat per %s';
$lang['invoices_create_invoice_from_recurring_only_on_paid_invoices']         = 'Crear la següent factura recurrent encara que l\'anterior no s\'hagi pagat';
$lang['invoices_create_invoice_from_recurring_only_on_paid_invoices_tooltip'] = '¿Crear la següent factura recurrent encara que l\'anterior no s\'hagi pagat?';
$lang['view_invoice_pdf_link_pay']                                            = 'Factura de pagament';

# Payment modes
$lang['payment_mode_add_edit_description']         = 'Comptes bancaris / Descripció';
$lang['payment_mode_add_edit_description_tooltip'] = 'Establir informació comptes bancaris. Es mostrarà en Factura HTML';
$lang['payment_modes_dt_description']              = 'Comptes bancaris / Descripció';
$lang['payment_modes_add_edit_announcement']       = 'Nota: Les formes de pagament que figuran a sota són formes offline. Les online es poden configurar a Preferències->passarel·les de pagament';
$lang['payment_mode_add_edit_active']              = 'Actiu';
$lang['payment_modes_dt_active']                   = 'Actiu';

# Contracts
$lang['contract_not_found'] = 'No s\'ha trobat el contracte. Pot haver estat eliminat, verifiqui el registre d\'activitats';

# Settings
$lang['setting_bar_heading']                 = 'Configuració';
$lang['settings_group_online_payment_modes'] = 'Passarel·la de pagament';
$lang['settings_paymentmethod_mode_label']   = 'Etiqueta';
$lang['settings_paymentmethod_active']       = 'Actiu';
$lang['settings_paymentmethod_currencies']   = 'Monedes separades per comes';
$lang['settings_paymentmethod_testing_mode'] = 'Habilitar mode de prova';

$lang['settings_paymentmethod_paypal_username']  = 'Nom usuari PayPal API';
$lang['settings_paymentmethod_paypal_password']  = 'Contrasenya PayPal API';
$lang['settings_paymentmethod_paypal_signature'] = 'Signatura API';

$lang['settings_paymentmethod_stripe_api_secret_key']      = 'Clau secreta';
$lang['settings_paymentmethod_stripe_api_publishable_key'] = 'Clau pública';
$lang['settings_limit_top_search_bar_results']             = 'Limitar resultats barra cerca a';

## Clients
$lang['client_phonenumber'] = 'Telèfon';

# Main Clients
$lang['clients_register']                          = 'Registre';
$lang['clients_profile_updated']                   = 'Perfil actualitzat';
$lang['clients_successfully_registered']           = 'Gràcies per registrar-se';
$lang['clients_account_created_but_not_logged_in'] = 'El compte s\'ha creat però no ha entrat al sistema automàticament, si us plau, intenti iniciar sessió';
# Tickets
$lang['clients_tickets_heading'] = 'Tiquets Suport Tècnic';

# Payments
// Uses on stripe page';
$lang['payment_for_invoice'] = 'Pagament factura';
$lang['payment_total']       = 'Total: %s';

# Invoice
$lang['invoice_html_online_payment']             = 'Pagament en línia';
$lang['invoice_html_online_payment_button_text'] = 'Pagui ara';
$lang['invoice_html_payment_modes_not_selected'] = 'Si us plau, seleccioni forma de pagament';
$lang['invoice_html_amount_blank']               = 'Import total no pot estar en blanc o ser zero';
$lang['invoice_html_offline_payment']            = 'Pagament en línia';
$lang['invoice_html_amount']                     = 'Import';


# Version 1.0.2
# Admin
#
# DataTables
$lang['dt_button_column_visibility'] = 'Visibilitat';
$lang['dt_button_reload']            = 'Actualitzar';
$lang['dt_button_excel']             = 'Excel';
$lang['dt_button_csv']               = 'CSV';
$lang['dt_button_pdf']               = 'PDF';
$lang['dt_button_print']             = 'Impressió';
$lang['is_not_active_export']        = 'No';
$lang['is_active_export']            = 'Sí';

# Invoice
$lang['invoice_add_edit_advanced_options']                = 'Opcions avançades';
$lang['invoice_add_edit_allowed_payment_modes']           = 'Formes de pagament permeses per aquesta factura';
$lang['invoice_add_edit_recurring_invoices_from_invoice'] = 'Factures recurrents d\'aquesta factura';
$lang['invoice_add_edit_no_payment_modes_found']          = 'No s\'ha trobat cap forma de pagament.';
$lang['invoice_html_total_pay']                           = 'Total: %s';

# Email templates
$lang['email_templates_table_heading_name'] = 'Nom de la plantilla';
# General
$lang['discount_type']            = 'Tipus descompte';
$lang['discount_type_after_tax']  = 'Després impost';
$lang['discount_type_before_tax'] = 'Abans impost';
$lang['terms_and_conditions']     = 'Termes i condicions';
$lang['reference_no']             = 'Referència #';
$lang['no_discount']              = 'Sense descompte';
$lang['view_stats_tooltip']       = 'Veure Estadístiques Ràpides';
# Clients
$lang['zip_from_date']            = 'Des de:';
$lang['zip_to_date']              = 'Fins a:';
$lang['client_zip_payments']      = 'Pagaments ZIP';
$lang['client_zip_invoices']      = 'Factures ZIP';
$lang['client_zip_estimates']     = 'Pressupostos ZIP';
$lang['client_zip_status']        = 'Estat';
$lang['client_zip_status_all']    = 'Totes';
$lang['client_zip_payment_modes'] = 'Pagament realitzat per';
$lang['client_zip_no_data_found'] = 'No s\'han trobat %s';

# Payments
$lang['payment_mode']         = 'Forma de pagament';
$lang['payment_view_heading'] = 'Pagament';

# Settings
$lang['settings_allow_payment_amount_to_be_modified']               = 'Permetre al client modificar la quantitat a pagar (per a pagaments en línia)';
$lang['settings_delete_only_on_last_invoice']                       = 'Solament es permet eliminar última factura';
$lang['settings_sales_estimate_prefix']                             = 'Format número pressupost';
$lang['settings_sales_next_estimate_number']                        = 'Següent número pressupost';
$lang['settings_sales_next_estimate_number_tooltip']                = 'Establir aquest camp a 1 si desitja començar des d\'inici';
$lang['settings_sales_decrement_estimate_number_on_delete']         = 'Número pressupost disminució quan esborra';
$lang['settings_sales_decrement_estimate_number_on_delete_tooltip'] = 'Vol disminuir número presupuesto quan elimina últim pressupost? P. ex. Si estableix opción a Sí i abans d\'esborrar el pressupost el següent número era 15 el següent número de pressupost disminuirà a 14. Si s\'estableix a NO el número continuarà en 15';
$lang['settings_sales_estimate_number_format']                      = 'Format de número de pressupost';
$lang['settings_sales_estimate_number_format_year_based']           = 'Any de base';
$lang['settings_sales_estimate_number_format_number_based']         = 'Número de base(000001)';
$lang['settings_delete_only_on_last_estimate']                      = 'Eliminar pressupost, permès només en l\'última factura';
$lang['settings_send_test_email_heading']                           = 'Enviar email de prova';
$lang['settings_send_test_email_subheading']                        = 'Enviar email de prova per a assegurar-se que la configuració SMTP és correcta.';
$lang['settings_send_test_email_string']                            = 'Adreça email';
$lang['settings_smtp_settings_heading']                             = 'Configuració SMTP';
$lang['settings_smtp_settings_subheading']                          = 'Configuració email principal';
$lang['settings_sales_heading_general']                             = 'General';
$lang['settings_sales_heading_invoice']                             = 'Factura';
$lang['settings_sales_heading_estimates']                           = 'Pressupostos';
$lang['settings_sales_cron_invoice_heading']                        = 'Factura';

# Tasks
$lang['tasks_dt_datestart'] = 'Data  d\'inici';

# Invoice General
$lang['invoice_discount'] = 'Descompte';

# Settings
$lang['settings_rtl_support_admin']                                   = 'RTL àrea administració (dreta a esquerra)';
$lang['settings_rtl_support_client']                                  = 'RTL àrea client (dreta a esquerra)';
$lang['settings_estimate_auto_convert_to_invoice_on_client_accept']   = 'Autoconversió pressupost a factura després que el client accepti';
$lang['settings_exclude_estimate_from_client_area_with_draft_status'] = 'Excloure pressupostos amb estat d\'esborrany de l\'àrea del client';

# Months
$lang['January']   = 'Gener';
$lang['February']  = 'Febrer';
$lang['March']     = 'Març';
$lang['April']     = 'Abril';
$lang['May']       = 'Maig';
$lang['June']      = 'Juny';
$lang['July']      = 'Juliol';
$lang['August']    = 'Agost';
$lang['September'] = 'Setembre';
$lang['October']   = 'Octubre';
$lang['November']  = 'Novembre';
$lang['December']  = 'Desembre';

# Time ago function translate
$lang['time_ago_just_now']  = 'Ara mateix';
$lang['time_ago_minute']    = 'Fa un minut';
$lang['time_ago_minutes']   = 'Fa %s minuts';
$lang['time_ago_hour']      = 'Fa una hora';
$lang['time_ago_hours']     = 'Fa %s hores';
$lang['time_ago_yesterday'] = 'Ahir';
$lang['time_ago_days']      = 'Fa %s díes';
$lang['time_ago_week']      = 'Fa una setmana';
$lang['time_ago_weeks']     = 'Fa %s setmanes';
$lang['time_ago_month']     = 'Fa un mes';
$lang['time_ago_months']    = 'Fa %s mesos';
$lang['time_ago_year']      = 'Fa un any';
$lang['time_ago_years']     = 'Fa %s anys';


# Estimates
$lang['estimates']                          = 'Pressupostos';
$lang['estimate']                           = 'Pressupost';
$lang['estimate_lowercase']                 = 'pressupost';
$lang['create_new_estimate']                = 'Crear Pressupost';
$lang['view_estimate']                      = 'Veure Pressupost';
$lang['estimate_sent_to_client_success']    = 'Pressupost enviat al client';
$lang['estimate_sent_to_client_fail']       = 'Problema en enviar pressupost';
$lang['estimate_view']                      = 'Veure Pressupost';
$lang['estimate_select_customer']           = 'Client';
$lang['estimate_add_edit_number']           = 'Número pressupost';
$lang['estimate_add_edit_date']             = 'Data pressupost';
$lang['estimate_add_edit_expirydate']       = 'Data caducitat';
$lang['estimate_add_edit_currency']         = 'Moneda';
$lang['estimate_add_edit_client_note']      = 'Nota client';
$lang['estimate_add_edit_admin_note']       = 'Nota admin';
$lang['estimates_toggle_table_tooltip']     = 'Veure Taula Completa';
$lang['estimate_add_edit_advanced_options'] = 'Opcions avançades';
$lang['estimate_to']                        = 'A';
$lang['estimates_list_all']                 = 'Tots';

$lang['estimate_invoiced_date']                  = 'Pressupost Factures en %s';
$lang['edit_estimate_tooltip']                   = 'Editar Pressupost';
$lang['delete_estimate_tooltip']                 = 'Eliminar Pressupost';
$lang['estimate_sent_to_email_tooltip']          = 'Enviar per email';
$lang['estimate_already_send_to_client_tooltip'] = 'Pressupost enviat al client %s';
$lang['send_overdue_notice_tooltip']             = 'Enviar avís de venciment';
$lang['estimate_view_activity_tooltip']          = 'Registre d\'activitats';

$lang['estimate_send_to_client_modal_heading']    = 'Enviar Pressupost al client';
$lang['estimate_send_to_client_attach_pdf']       = 'Adjuntar PDF';
$lang['estimate_send_to_client_preview_template'] = 'Vista prèvia plantilla email';

$lang['estimate_dt_table_heading_number']     = 'Pressupost #';
$lang['estimate_dt_table_heading_date']       = 'Data';
$lang['estimate_dt_table_heading_client']     = 'Client';
$lang['estimate_dt_table_heading_expirydate'] = 'Data caducitat';
$lang['estimate_dt_table_heading_amount']     = 'Import';
$lang['estimate_dt_table_heading_status']     = 'Estat';
$lang['estimate_convert_to_invoice']          = 'Convertir a Factura';

# Clients
$lang['client_payments_tab'] = 'Pagaments';

# Estimate General
$lang['estimate_pdf_heading']            = 'PRESSUPOST';
$lang['estimate_table_item_heading']     = 'Article';
$lang['estimate_table_quantity_heading'] = 'Quantitat';
$lang['estimate_table_rate_heading']     = 'Tarifa';
$lang['estimate_table_tax_heading']      = 'Impost';
$lang['estimate_table_amount_heading']   = 'Import';
$lang['estimate_subtotal']               = 'Sub total';
$lang['estimate_adjustment']             = 'Ajust';
$lang['estimate_discount']               = 'Descompte';
$lang['estimate_total']                  = 'Total';
$lang['estimate_to']                     = 'A';
$lang['estimate_data_date']              = 'Data pressupost';
$lang['estimate_data_expiry_date']       = 'Data venciment';
$lang['estimate_note']                   = 'Nota:';
$lang['estimate_status_draft']           = 'Esborrany';
$lang['estimate_status_sent']            = 'Expedit';
$lang['estimate_status_declined']        = 'Declinat';
$lang['estimate_status_accepted']        = 'Acceptat';
$lang['estimate_status_expired']         = 'Expirat';
$lang['estimate_note']                   = 'Nota:';

## Clients
$lang['clients_estimate_dt_number']             = 'Pressupost #';
$lang['clients_estimate_dt_date']               = 'Data';
$lang['clients_estimate_dt_duedate']            = 'Data caducitat';
$lang['clients_estimate_dt_amount']             = 'Import';
$lang['clients_estimate_dt_status']             = 'Estat';
$lang['clients_nav_estimates']                  = 'Pressupostos';
$lang['clients_decline_estimate']               = 'Disminució';
$lang['clients_accept_estimate']                = 'Acceptar';
$lang['clients_my_estimates']                   = 'Pressupostos';
$lang['clients_estimate_invoiced_successfully'] = 'Pressupost Acceptat. Aquí hi ha la factura d\'aquest Pressupost';
$lang['clients_estimate_accepted_not_invoiced'] = 'Gràcies per acceptar aquest Pressupost';
$lang['clients_estimate_declined']              = 'Pressupost declinat. Pot acceptar el Pressupost qualsevol moment abans de la data de caducitat';
$lang['clients_estimate_failed_action']         = 'No s\'ha pogut prendre cap decisió sobre aquest Pressupost';
$lang['client_add_edit_profile']                = 'Perfil';

# Version 1.0.3


# Custom Fields
$lang['custom_field']                          = 'Camp personalitzat';
$lang['custom_field_lowercase']                = 'camp personalitzat';
$lang['custom_fields']                         = 'Camps Personalitzats';
$lang['new_custom_field']                      = 'Nou camp personalitzat';
$lang['custom_field_name']                     = 'Nom del camp';
$lang['custom_field_add_edit_type']            = 'Tipus';
$lang['custom_field_add_edit_belongs_top']     = 'El camp pertany a';
$lang['custom_field_add_edit_options']         = 'Opcions';
$lang['custom_field_add_edit_options_tooltip'] = 'Utilitzar només per tipus Select i Checkbox. Ompli el camp separant les opcions amb coma. P. ex: poma,taronja,plàtan';
$lang['custom_field_add_edit_order']           = 'Ordre';

$lang['custom_field_dt_field_to']       = 'Pertany a';
$lang['custom_field_dt_field_name']     = 'Nom';
$lang['custom_field_dt_field_type']     = 'Tipus';
$lang['custom_field_add_edit_active']   = 'Actiu';
$lang['custom_field_add_edit_disabled'] = 'Inhabilitat';

# Ticket replies
$lang['ticket_reply'] = 'Resposta tiquet';

# Admin Customizer Sidebar
$lang['asc_custom_fields'] = 'Camps personalitzats';

# Contracts
$lang['contract_types']          = 'Tipus de contractes';
$lang['contract_type']           = 'Tipus de contracte';
$lang['new_contract_type']       = 'Nou tipus de contracte';
$lang['contract_type_lowercase'] = 'tipus de contracte';
$lang['contract_type_name']      = 'Nom';

$lang['contract_types_list_name'] = 'Tipus de contracte';

# Customizer Menu
$lang['acs_contracts']      = 'Contractes';
$lang['acs_contract_types'] = 'Tipus de contractes';

# Version 1.0.4
# Invoice Items
$lang['invoice_item_long_description'] = 'Descripció llarga';
# Customers
$lang['clients_list_phone']                = 'Telèfon';
$lang['client_expenses_tab']               = 'Despeses';
$lang['customers_summary']                 = 'Resum Clients';
$lang['customers_summary_active']          = 'Actius';
$lang['customers_summary_inactive']        = 'Inactius';
$lang['customers_summary_logged_in_today'] = 'Conectats actualment';

# Authentication
$lang['admin_auth_forgot_password_email']     = 'Adreça email';
$lang['admin_auth_forgot_password_heading']   = 'Ha oblidat la contrasenya';
$lang['admin_auth_login_heading']             = 'Iniciar sessió';
$lang['admin_auth_login_email']               = 'Adreça email';
$lang['admin_auth_login_password']            = 'Contrasenya';
$lang['admin_auth_login_remember_me']         = 'Recorda\'m';
$lang['admin_auth_login_button']              = 'Iniciar sessió';
$lang['admin_auth_login_fp']                  = 'Ha oblidat la contrasenya?';
$lang['admin_auth_reset_password_heading']    = 'Restablir la contrasenya';
$lang['admin_auth_reset_password']            = 'Contrasenya';
$lang['admin_auth_reset_password_repeat']     = 'Repeteixi la contrasenya';
$lang['admin_auth_invalid_email_or_password'] = 'Email o contrasenya invàlids';
$lang['admin_auth_inactive_account']          = 'Compte inactiu';
# Calender
$lang['calendar_estimate']          = 'Pressupost';
$lang['calendar_invoice']           = 'Factura';
$lang['calendar_contract']          = 'Contracte';
$lang['calendar_customer_reminder'] = 'Recordatori';
$lang['calendar_event']             = 'Esdeveniment';
$lang['calendar_task']              = 'Tasca';
# Leads
$lang['lead_edit_delete_tooltip'] = 'Eliminar potencial';
$lang['lead_attachments']         = 'Adjunts';
# Admin Customizer Sidebar
$lang['acs_finance'] = 'opcions pagaments';
# Settings
$lang['settings_show_sale_agent_on_invoices']       = 'Mostrar el responsable en la factura';
$lang['settings_show_sale_agent_on_estimates']      = 'Mostrar el responsable en Presupost';
$lang['settings_predefined_predefined_term']        = 'Termes i condicions predefinides';
$lang['settings_predefined_clientnote']             = 'Nota client predefinida';
$lang['settings_custom_pdf_logo_image_url']         = 'Logo URL empresa PDF personalitzat (JPG - 210x60px)';
$lang['settings_custom_pdf_logo_image_url_tooltip'] = 'Probablement tindrà problemes amb les imatges PNG amb transparència que es manegen de forma diferent depenent de php-imagick o la versión de php-gd utilitzat. Intenti actualitzar php-imagick i desactivar php-gd. SI deixa aquest camp en blanc s\'usarà el logo per defecte.';

# General
$lang['sale_agent_string']               = 'responsable';
$lang['amount_display_in_base_currency'] = 'Mostra import en moneda base';

# Leads
$lang['leads_summary'] = 'Resumen potencials';

# Contracts
$lang['contract_value']                 = 'Valor del contracte';
$lang['contract_trash']                 = 'Brossa';
$lang['contracts_view_trash']           = 'Veure brossa';
$lang['contracts_view_all']             = 'Tots';
$lang['contracts_view_exclude_trashed'] = 'Excloure contractes brossa';
$lang['contract_value_tooltip']         = 'Afegir valor contracte. El valor es mostrarà en moneda base.';
$lang['contract_trash_tooltip']         = 'Si afegeix contracte com a brossa, no es mostrarà en el costat del client, no s\'inclourà en el tauler ni altres estadístiques i tampoc es mostrarà per defecte quan es mostri una llista de tots els contractes.';

$lang['contract_renew_heading']               = 'Renovar contracte';
$lang['contract_summary_heading']             = 'Resum contracte';
$lang['contract_summary_expired']             = 'Expirat';
$lang['contract_summary_active']              = 'Actiu';
$lang['contract_summary_about_to_expire']     = 'A punt de caducar';
$lang['contract_summary_recently_added']      = 'Afegit recentment';
$lang['contract_summary_trash']               = 'Brossa';
$lang['contract_summary_by_type']             = 'Contractes per tipus';
$lang['contract_summary_by_type_value']       = 'Valor contractes per tipus';
$lang['contract_renewed_successfully']        = 'Contracte renovat';
$lang['contract_renewed_fail']                = 'Problema en renovar contracte. Contactar amb l\'administrador';
$lang['no_contract_renewals_found']           = 'No s\'han trobat renovacions d\'aquest contracte';
$lang['no_contract_renewals_history_heading'] = 'Historial renovació contracte';
$lang['contract_renewed_by']                  = '%s renovat aquest contracte';
$lang['contract_renewal_deleted']             = 'Renovació eliminada';
$lang['contract_renewal_delete_fail']         = 'No s\'ha pogut eliminar la renovación del contracte. Contactar amb l\'administrador';

$lang['contract_renewal_new_value'] = 'Nou valor del contracte: %s';
$lang['contract_renewal_old_value'] = 'Antic valor del contracte: %s';

$lang['contract_renewal_new_start_date'] = 'Nova data d\'inici: %​​s';
$lang['contract_renewal_old_start_date'] = 'Vella data d\'inici: %s';

$lang['contract_renewal_new_end_date'] = 'Nova data de finalització: %s';
$lang['contract_renewal_old_end_date'] = 'Data de finalització del contracte: %s';
$lang['contract_attachment']           = 'Adjunt';

# Admin Aside Menu
$lang['als_expenses']           = 'Despeses';
$lang['als_reports_expenses']   = 'Despeses';
$lang['als_expenses_vs_income'] = 'Despeses vs Ingressos';

# Invoices
$lang['invoice_attach_file']           = 'Adjuntar arxiu';
$lang['invoice_mark_as_sent']          = 'Marcar com a enviat';
$lang['invoice_marked_as_sent']        = 'Factura marcada com a enviada';
$lang['invoice_marked_as_sent_failed'] = 'Error en marcar factura enviada';

# Payments
$lang['payment_transaction_id'] = 'ID de transacció';
# Settings Menu
$lang['acs_expense_categories'] = 'Categories despeses';
# Expeneses
$lang['expense_category']                             = 'Categoria despesa';
$lang['expense_category_lowercase']                   = 'categoria despesa';
$lang['new_expense']                                  = 'Registrar despesa';
$lang['expense_add_edit_name']                        = 'Nom categoria';
$lang['expense_add_edit_description']                 = 'Descripció categoria';
$lang['expense_categories']                           = 'Categories despeses';
$lang['new_expense_category']                         = 'Nova categoria';
$lang['dt_expense_description']                       = 'Descripció';
$lang['expense']                                      = 'Despesa';
$lang['expenses']                                     = 'Despeses';
$lang['expense_lowercase']                            = 'despeses';
$lang['expense_add_edit_customer']                    = 'Client';
$lang['expense_add_edit_note']                        = 'Nota';
$lang['expense_add_edit_date']                        = 'Data despesa';
$lang['expense_add_edit_amount']                      = 'Import';
$lang['expense_add_edit_billable']                    = 'Facturable';
$lang['expense_add_edit_attach_receipt']              = 'adjuntar rebut pagament';
$lang['expense_add_edit_reference_no']                = 'Referència #';
$lang['expense_receipt']                              = 'Rebut despesa';
$lang['expense_receipt_lowercase']                    = 'rebut despesa';
$lang['expense_dt_table_heading_category']            = 'Categoria';
$lang['expense_dt_table_heading_amount']              = 'Import';
$lang['expense_dt_table_heading_date']                = 'Data';
$lang['expense_dt_table_heading_reference_no']        = 'Referència #';
$lang['expense_dt_table_heading_customer']            = 'Client';
$lang['expense_dt_table_heading_payment_mode']        = 'Forma pagament';
$lang['expense_converted_to_invoice']                 = 'Despesa convertida a factura';
$lang['expense_converted_to_invoice_fail']            = 'No s\'ha pogut convertir aquesta despesa a factura, comprovar registre errors.';
$lang['expense_copy_success']                         = 'Despesa copiada.';
$lang['expense_copy_fail']                            = 'No s\'ha pogut copiar despesa. Si us plau, comprovi els camps necessaris i torni a intentar-ho';
$lang['expenses_list_all']                            = 'Totes';
$lang['expenses_list_billable']                       = 'Facturable';
$lang['expenses_list_non_billable']                   = 'No facturable';
$lang['expenses_list_invoiced']                       = 'Facturat';
$lang['expenses_list_unbilled']                       = 'No facturat';
$lang['expenses_list_recurring']                      = 'Periòdic';
$lang['expense_invoice_delete_not_allowed']           = 'No pot eliminar aquesta despesa, ja ha estat facturada.';
$lang['expense_convert_to_invoice']                   = 'Convertir a factura';
$lang['expense_edit']                                 = 'Editar despesa';
$lang['expense_delete']                               = 'Esborrar';
$lang['expense_copy']                                 = 'Copiar';
$lang['expense_invoice_not_created']                  = 'No s\'ha creat la factura';
$lang['expense_billed']                               = 'facturat';
$lang['expense_not_billed']                           = 'No facturat';
$lang['expense_customer']                             = 'Client';
$lang['expense_note']                                 = 'Nota:';
$lang['expense_date']                                 = 'Data:';
$lang['expense_ref_noe']                              = 'Ref. #:';
$lang['expense_amount']                               = 'Import:';
$lang['expense_recurring_indicator']                  = 'Periòdic';
$lang['expense_already_invoiced']                     = 'Aquesta despesa ja s\'ha facturat';
$lang['expense_recurring_auto_create_invoice']        = 'Creació automàtica de factures';
$lang['expense_recurring_send_custom_on_renew']       = 'Enviar la factura al client per email quan es repeteixi la despesa';
$lang['expense_recurring_autocreate_invoice_tooltip'] = 'Si aquesta opció està marcada es crearà la factura per al client automàticament quan es renovi la despesa.';
$lang['expenses_yearly_by_categories']                = 'Despeses anuals per categories';
$lang['total_expenses_for']                           = 'Total despeses per'; // Any
$lang['expenses_report_for']                          = 'Despeses per'; // Any
# Custom fields
$lang['custom_field_required']    = 'Necessari';
$lang['custom_field_show_on_pdf'] = 'Mostrar PDF';
$lang['custom_field_leads']       = 'Potencials';
$lang['custom_field_customers']   = 'Clients';
$lang['custom_field_staff']       = 'Personal';
$lang['custom_field_contracts']   = 'Contractes';
$lang['custom_field_tasks']       = 'Tasques';
$lang['custom_field_expenses']    = 'Despeses';
$lang['custom_field_invoice']     = 'Factura';
$lang['custom_field_estimate']    = 'Pressupost';
# Tickets
$lang['ticket_single_private_staff_notes'] = 'Notas privades del personal';


# Business News
$lang['business_news'] = 'Noticies de negocis';

# Navigation
$lang['nav_todo_items'] = 'Tasques pendents';
# Clients
# Contracts
$lang['clients_contracts_type'] = 'Tipus de contracte';

# Version 1.0.5
# General
$lang['no_tax']                              = 'Sense impostos';
$lang['numbers_not_formatted_while_editing'] = 'La taxa en el camp d\'entrada no s\'ha formatat en editar/afegir l\'ítem i hauria de romandre sense formatar. No intenti formar-lo manualment aquí.';
# Contracts='
$lang['contracts_view_expired']         = 'Expirat';
$lang['contracts_view_without_dateend'] = 'Contractes sense data de finalització';

# Email Templates
$lang['email_template_contracts_fields_heading'] = 'Contractes';
# Invoices General='
$lang['invoice_estimate_general_options'] = 'Opcions generals';
$lang['invoice_table_item_description']   = 'Descripció';
$lang['invoice_recurring_indicator']      = 'Periòdic';

# Estimates
$lang['estimate_convert_to_invoice_successfully'] = 'Pressupost convertit a factura';
$lang['estimate_table_item_description']          = 'Descripció';

# Version 1.0.6
# Invoices
# Currencies
$lang['cant_delete_base_currency'] = 'No pot eliminar la moneda base. Es necessari assignar la nova moneda i després suprimir aquesta.';
$lang['invoice_copy']              = 'Còpia de la factura';
$lang['invoice_copy_success']      = 'Factura copiada';
$lang['invoice_copy_fail']         = 'No s\'ha pogut copiar la factura';
$lang['invoice_due_after_help']    = 'Establir a zero per a evitar el càlcul';

$lang['show_shipping_on_invoice'] = 'Mostrar els detalls de l\'enviament en la factura';

# Estimates
$lang['show_shipping_on_estimate']         = 'Mostrar els detalls de l\'enviament en els pressupostos';
$lang['is_invoiced_estimate_delete_error'] = 'Aquest pressupost s\'ha facturat. No pot eliminar el pressupost';

# Customers & Invoices / Estimates
$lang['ship_to']                  = 'Enviar a';
$lang['customer_profile_details'] = 'Detalls client';
$lang['billing_shipping']         = 'Tramesa facturació';
$lang['billing_address']          = 'Adreça facturació';
$lang['shipping_address']         = 'Adreça tramesa';

$lang['billing_street']  = 'Domicili';
$lang['billing_city']    = 'Població';
$lang['billing_state']   = 'Estat';
$lang['billing_zip']     = 'Codi postal';
$lang['billing_country'] = 'País';

$lang['shipping_street']                    = 'Domicili';
$lang['shipping_city']                      = 'Població';
$lang['shipping_state']                     = 'Estat';
$lang['shipping_zip']                       = 'Codi postal';
$lang['shipping_country']                   = 'País';
$lang['get_shipping_from_customer_profile'] = 'Obtenir detalls tramesa des del perfil de client';

# Customer
$lang['customer_default_currency']                             = 'Moneda predeterminada';
$lang['customer_update_address_info_on_invoices']              = 'Actualizar informació tramesa/facturació en factures/pressupostos anteriors';
$lang['customer_update_address_info_on_invoices_help']         = 'Si marca aquest camp la tramesa la informació de facturació s\'actualitzaran per a totes les factures y pressupostos. Nota: Les factures amb estat Abonat no es veuran afectades.';
$lang['setup_google_api_key_customer_map']                     = 'Configuraciar clau API de Google a fi de veure-la al mapa del client';
$lang['customer_attachments_file']                             = 'Arxiu';
$lang['client_send_set_password_email']                        = 'Enviar email establir contrasenya';
$lang['customer_billing_same_as_profile']                      = 'Igual que la informació del client';
$lang['customer_billing_copy']                                 = 'Copiar adreça de facturació';
$lang['customer_map']                                          = 'Mapa';
$lang['set_password_email_sent_to_client']                     = 'Email per a configurar la contrasenya enviat al client';
$lang['set_password_email_sent_to_client_and_profile_updated'] = 'Perfil actualitzat i email per a establir la contrasenya enviat al client';
$lang['customer_attachments']                                  = 'Arxius';
$lang['customer_longitude']                                    = 'Longitud (Google Maps)';
$lang['customer_latitude']                                     = 'Latitud (Google Maps)';

# Authentication
$lang['admin_auth_set_password']         = 'Contrasenya';
$lang['admin_auth_set_password_repeat']  = 'Repeteixi contrasenya';
$lang['admin_auth_set_password_heading'] = 'Establir contrasenya';
# General
$lang['apply']                         = 'Aplicar';
$lang['department_calendar_id']        = 'ID de Google Calendar';
$lang['localization_default_language'] = 'Idioma predeterminat';
$lang['system_default_string']         = 'Sistema per defecte';
$lang['advanced_options']              = 'Opcions avançades';
# Expenses
$lang['expense_list_invoice']  = 'Factura';
$lang['expense_list_billed']   = 'Facturat';
$lang['expense_list_unbilled'] = 'No facturat';
# Leads
$lang['lead_merge_custom_field']          = 'Combinar com a camp personalitzat';
$lang['lead_merge_custom_field_existing'] = 'Combinar amb el campo de base de dades';
$lang['lead_dont_merge_custom_field']     = 'No fusionar';
$lang['lost_leads']                       = 'Potencials perduts';
$lang['junk_leads']                       = 'Potencials escombraries';
$lang['lead_mark_as_lost']                = 'Marcar com a perdut';
$lang['lead_unmark_as_lost']              = 'No marcar potencial com a perdut';
$lang['lead_marked_as_lost']              = 'Potencial marcat com a perdut';
$lang['lead_unmarked_as_lost']            = 'Potencial desmarcat com a perdut';
$lang['leads_status_color']               = 'Color';

$lang['lead_mark_as_junk']     = 'Marcar com a escombraries';
$lang['lead_unmark_as_junk']   = 'Desmarcar potencial com a escombraries';
$lang['lead_marked_as_junk']   = 'Potencial marcat com a escombraries';
$lang['lead_unmarked_as_junk'] = 'Potencial desmarcat com a escombraries';

$lang['lead_not_found']     = 'Potencial no trobat';
$lang['lead_lost']          = 'Perdut';
$lang['lead_junk']          = 'Escombraries';
$lang['leads_not_assigned'] = 'No asignat';
# Contacts
$lang['contract_not_visible_to_client'] = 'Amagar dels clients';
$lang['contract_edit_overview']         = 'Contracte general';
$lang['contract_attachments']           = 'Arxius adjunts';
# Tasks
$lang['task_view_make_public']     = 'Fer públic';
$lang['task_is_private']           = 'Tasca privada';
$lang['task_finished']             = 'Acabada';
$lang['task_single_related']       = 'Relacionada';
$lang['task_unmark_as_complete']   = 'Desmarcar com a completa';
$lang['task_unmarked_as_complete'] = 'Tasca desmarcada com a completa';
$lang['task_relation']             = 'Relació';
$lang['task_public']               = 'Pública';
$lang['task_public_help']          = 'Si estableix aquesta tasca com a pública será visible per a tots els membres del personal. Altrament solament será visible per als membres que són cessionaris, seguidors, creadors o administradors';
# Settings
$lang['settings_general_favicon']                                            = 'Icona';
$lang['settings_output_client_pdfs_from_admin_area_in_client_language']      = 'Sortida de documents PDF a partir de client en l\'àrea d\'administració de l\'idioma del client';
$lang['settings_output_client_pdfs_from_admin_area_in_client_language_help'] = 'Si aquesta opció s\'estableix a Sí i p. ex. l\'idioma per defecte del sistema es anglès i el client en llengua de configuració francès els documents PDF s\'emetran en l\'idioma del client';

$lang['settings_default_tax']                = 'Impostos per defecte';
$lang['setup_calendar_by_departments']       = 'Configuració del calendari per als departaments';
$lang['settings_calendar']                   = 'Calendari';
$lang['settings_sales_invoice_due_after']    = 'Factura venç després de (dies)';
$lang['settings_google_api']                 = 'Google API Key';
$lang['settings_gcal_main_calendar_id']      = 'ID de Google Calendar';
$lang['settings_gcal_main_calendar_id_help'] = 'Aquest és el calendari de l\'empresa principal. Es mostraran tots els esdeveniments d\'aquest calendari. Si desitja especificar un calendari basat en els departaments pot agregar en el departament la ID de Google Calendar.';

$lang['show_on_calendar']                    = 'Mostrar en el Calendari';
$lang['show_invoices_on_calendar']           = 'Factures';
$lang['show_estimates_on_calendar']          = 'Pressupostos';
$lang['show_contracts_on_calendar']          = 'Contractes';
$lang['show_tasks_on_calendar']              = 'Tasques';
$lang['show_customer_reminders_on_calendar'] = 'Recordatoris Client';

# Leads
$lang['copy_custom_fields_convert_to_customer']                      = 'Copiar camps personalitzats al perfil del client';
$lang['copy_custom_fields_convert_to_customer_help']                 = 'Si qualsevol dels següents camps personalitzats no existeix per al client serà creat automàticament amb el mateix nom altrament només ea copiarà el valor a partir del perfil de potencial.';
$lang['lead_profile']                                                = 'Perfil';
$lang['lead_is_client']                                              = 'Client';
$lang['leads_email_integration_folder_no_encryption']                = 'Sense encriptar';
$lang['leads_email_integration']                                     = 'Integració email';
$lang['leads_email_active']                                          = 'Actiu';
$lang['leads_email_integration_imap']                                = 'Servidor IMAP';
$lang['leads_email_integration_email']                               = 'Adreça email (Entrar)';
$lang['leads_email_integration_password']                            = 'Contrasenya';
$lang['leads_email_integration_default_source']                      = 'Font predeterminada';
$lang['leads_email_integration_check_every']                         = 'Comprovem cada (minuts)';
$lang['leads_email_integration_default_assigned']                    = 'Responsable nou potencial';
$lang['leads_email_encryption']                                      = 'Encriptat';
$lang['leads_email_integration_updated']                             = 'Actualitzada integració email';
$lang['leads_email_integration_default_status']                      = 'Estat predeterminat';
$lang['leads_email_integration_folder']                              = 'Carpeta';
$lang['leads_email_integration_notify_when_lead_imported']           = 'Notificar quan s\'importi potencial';
$lang['leads_email_integration_only_check_unseen_emails']            = 'Verificar només missatges no oberts';
$lang['leads_email_integration_only_check_unseen_emails_help']       = 'L\'script configurarà automàticament l\'email com a obert després de verificar-lo. Això s\'utilitza per evitar la comprovació dels emails un cop i un altre. No es recomana desactivar aquesta opció si té molts emails i ha configurat molts reenviaments per als Potencials';
$lang['leads_email_integration_notify_when_lead_contact_more_times'] = 'Notificar si potencial envia email diverses vegades';
$lang['leads_email_integration_test_connection']                     = 'Prova de connexió IMAP';
$lang['lead_email_connection_ok']                                    = 'Consexió IMAP bona';
$lang['lead_email_connection_not_ok']                                = 'Connexió IMAP no OK';
$lang['lead_email_activity']                                         = 'Activitat email';
$lang['leads_email_integration_notify_roles']                        = 'Notificar rols';
$lang['leads_email_integration_notify_staff']                        = 'Notificar membres personal';
$lang['lead_public']                                                 = 'Públic';
# Knowledge Base

$lang['kb_group_color'] = 'Color';
$lang['kb_group_order'] = 'Ordre';
# Utilities - BULK PDF Exporter
$lang['bulk_pdf_exporter']             = 'Exportador PDF';
$lang['bulk_export_pdf_payments']      = 'Pagament';
$lang['bulk_export_pdf_estimates']     = 'Pressupostos';
$lang['bulk_export_pdf_invoices']      = 'Factures';
$lang['bulk_pdf_export_button']        = 'Exportar';
$lang['bulk_pdf_export_select_type']   = 'Seleccionar el tipus de';
$lang['no_data_found_bulk_pdf_export'] = 'No s\'han trobat dades per a exportar';
$lang['bulk_export_status_all']        = 'Tots';
$lang['bulk_export_status']            = 'Estat';
$lang['bulk_export_zip_payment_modes'] = 'Pagament realitzat per';
$lang['bulk_export_include_tag']       = 'Incloure etiqueta';
$lang['bulk_export_include_tag_help']  = 'P. ex. Original o còpia. L\'etiqueta es treurà del PDF. Es recomana usar només 1 etiqueta';

# Version 1.0.7
## Customers - portal
$lang['clients_nav_proposals'] = 'Propostes';
$lang['clients_nav_support']   = 'Soport Tècnic';
# General
$lang['more']            = 'Més';
$lang['add_item']        = 'Afegir article';
$lang['goto_admin_area'] = 'Anar a l\'àrea d\'administració';
$lang['delete']          = 'Eliminar %s';
$lang['welcome_top']     = 'Benvingut %s';

# Customers
$lang['customer_permissions']         = 'Permisos';
$lang['customer_permission_invoice']  = 'Factures';
$lang['customer_permission_estimate'] = 'Pressupost';
$lang['customer_permission_proposal'] = 'Propostes';
$lang['customer_permission_contract'] = 'Contractes';
$lang['customer_permission_support']  = 'Suport';


#Tasks
$lang['task_related_to'] = 'Relacionat amb';

# Send file
$lang['custom_file_fail_send']    = 'No s\'ha pogut enviar l\'arxiu';
$lang['custom_file_success_send'] = 'Arxiu envíat a %s';
$lang['send_file_subject']        = 'Asumpte del correu';
$lang['send_file_email']          = 'Adreça email';
$lang['send_file_message']        = 'Missatge';
$lang['send_file']                = 'Enviar arxiu';
$lang['add_checklist_item']       = 'Llista de verificació d\'articles';
$lang['task_checklist_items']     = 'Llista de verificació d\'articles';

# Import
$lang['default_pass_clients_import'] = 'Contrasenya per defecte per a tots els clients';
$lang['simulate_import']             = 'Simular importació';
$lang['import_upload_failed']        = 'Pujada fallada';
$lang['import_total_imported']       = 'Total importat: %s';
$lang['import_leads']                = 'Vendes d\'importació';
$lang['import_customers']            = 'Importació de clients';
$lang['choose_csv_file']             = 'Triï arcxiu CSV';
$lang['import']                      = 'Importar';
$lang['lead_import_status']          = 'Estat';
$lang['lead_import_source']          = 'Font';

# Bulk PDF Export
$lang['bulk_export_pdf_proposals'] = 'Propostes';

# Invoices
$lang['delete_invoice'] = 'Esborrar';

# Calendar
$lang['calendar_lead_reminder'] = 'Recordatori de potencial';

$lang['items']      = 'Articles';
$lang['support']    = 'Suport';
$lang['new_ticket'] = 'Nova incidència';

# Reminders
$lang['lead_set_reminder_title'] = 'Afegir recordatori de potencial';
$lang['set_reminder_tooltip']    = 'Aquesta opció li permet de no oblidar mai res dels seus clients.';
$lang['client_reminders_tab']    = 'Recordatoris';
$lang['leads_reminders_tab']     = 'Recordatoris';

# Tickets
$lang['delete_ticket_reply']  = 'Esborrar resposta';
$lang['ticket_priority_edit'] = 'Editar Prioritat';
$lang['ticket_priority_add']  = 'Afegir Prioritat';
$lang['ticket_status_edit']   = 'Editar Estat Tiquet';
$lang['ticket_service_edit']  = 'Editar Servei Tiquet';
$lang['edit_department']      = 'Editar Department';

# Expenses
$lang['edit_expense_category'] = 'Editar Categoria Despesa';
# Settings
$lang['customer_default_country']                                 = 'País per defecte';
$lang['settings_sales_require_client_logged_in_to_view_estimate'] = 'Necessari que el client estigui connectat (logges in) per a veure pressupost';
$lang['set_reminder']                                             = 'Establir recordatori';
$lang['set_reminder_date']                                        = 'Data de notificació';
$lang['reminder_description']                                     = 'Establir descipció';
$lang['reminder_notify_me_by_email']                              = 'Enviar un email també per aquest recordatori';
$lang['reminder_added_successfully']                              = 'Recordatori afegit. Se\'t notificarà amb temps.';
$lang['reminder_description']                                     = 'Descripció';
$lang['reminder_date']                                            = 'Data';
$lang['reminder_staff']                                           = 'Recordar';
$lang['reminder_is_notified']                                     = 'Es notifica?';
$lang['reminder_is_notified_boolean_no']                          = 'No';
$lang['reminder_is_notified_boolean_yes']                         = 'Sí';
$lang['reminder_set_to']                                          = 'Establir recordatori per a';
$lang['reminder_deleted']                                         = 'Recordatori eliminat';
$lang['reminder_failed_to_delete']                                = 'No s\'ha pogut eliminar el recordatori';
$lang['show_invoice_estimate_status_on_pdf']                      = 'Mostrar factura / estat de Pressupost en PDF';
$lang['email_piping_default_priority']                            = 'Prioritat per defecte en el tiquet enviat';
$lang['show_lead_reminders_on_calendar']                          = 'Recordatoris de potencial';
$lang['tickets_piping']                                           = 'Cessió per email';
$lang['email_piping_only_replies']                                = 'Només respostes permeses per email';
$lang['email_piping_only_registered']                             = 'Només Usuaris Registrats';

# Estimates
$lang['view_estimate_as_client']         = 'Veure pressupost com a client';
$lang['estimate_mark_as']                = 'Marcar com %s';
$lang['estimate_status_changed_success'] = 'Canvi estat pressupost';
$lang['estimate_status_changed_fail']    = 'No s\'ha pogut canviar estat pressupost';

# Proposals
$lang['proposal_to']                            = 'Nom empresa';
$lang['proposal_date']                          = 'Data';
$lang['proposal_address']                       = 'Adreça';
$lang['proposal_phone']                         = 'Telèfon';
$lang['proposal_email']                         = 'Email';
$lang['proposal_date_created']                  = 'Data creació';
$lang['proposal_open_till']                     = 'Obert fins';
$lang['proposal_status_open']                   = 'Obertes';
$lang['proposal_status_accepted']               = 'Acceptades';
$lang['proposal_status_declined']               = 'Declinades';
$lang['proposal_status_sent']                   = 'Trameses';
$lang['proposal_expired']                       = 'Expirat';
$lang['proposal_subject']                       = 'Tema';
$lang['proposal_total']                         = 'Total';
$lang['proposal_status']                        = 'Estat';
$lang['proposals_list_all']                     = 'Totes';
$lang['proposals_leads_related']                = 'Relacionats potencials';
$lang['proposals_customers_related']            = 'Relacionats clients';
$lang['proposal_related']                       = 'Relacionat';
$lang['proposal_for_lead']                      = 'Potencial';
$lang['proposal_for_customer']                  = 'Cliente';
$lang['proposal']                               = 'Proposta';
$lang['proposal_lowercase']                     = 'proposta';
$lang['proposals']                              = 'Propostes';
$lang['proposals_lowercase']                    = 'propostes';
$lang['new_proposal']                           = 'Nova Proposta';
$lang['proposal_currency']                      = 'Moneda';
$lang['proposal_allow_comments']                = 'Permetre comentaris';
$lang['proposal_allow_comments_help']           = 'Si marca aquesta opció es permetran comentaris quan els seus clients vegin la proposta.';
$lang['proposal_edit']                          = 'Editar';
$lang['proposal_pdf']                           = 'PDF';
$lang['proposal_send_to_email']                 = 'Enviar per email';
$lang['proposal_send_to_email_title']           = 'Enviar email Proposta';
$lang['proposal_attach_pdf']                    = 'adjuntar PDF';
$lang['proposal_preview_template']              = 'Vista prèvia de la plantilla';
$lang['proposal_view']                          = 'Veure Proposta';
$lang['proposal_copy']                          = 'Copiar';
$lang['proposal_delete']                        = 'Esborrar';
$lang['proposal_to']                            = 'A';
$lang['proposal_add_comment']                   = 'Agregar comentari';
$lang['proposal_sent_to_email_success']         = 'Proposta enviada a l\'email';
$lang['proposal_sent_to_email_fail']            = 'No s\'ha pogut enviar proposta a l\'email';
$lang['proposal_copy_fail']                     = 'No s\'ha pogut copiar proposta';
$lang['proposal_copy_success']                  = 'Proposta copiada';
$lang['proposal_status_changed_success']        = 'Estat de la propuesta canviat';
$lang['proposal_status_changed_fail']           = 'No s\'ha pogut canviar l\'estat de la proposta';
$lang['proposal_assigned']                      = 'Assignat';
$lang['proposal_comments']                      = 'Comentaris';
$lang['proposal_convert']                       = 'Convertir';
$lang['proposal_convert_estimate']              = 'Pressupost';
$lang['proposal_convert_invoice']               = 'Factura';
$lang['proposal_convert_to_estimate']           = 'Convertir a pressupost';
$lang['proposal_convert_to_invoice']            = 'Convertir a Factura';
$lang['proposal_convert_to_lead_disabled_help'] = 'Necessita convertir potencial a client per crear %s';
$lang['proposal_convert_not_related_help']      = 'La proposta ha d\'estar relacionada amb el client per convertir-la a %s';
$lang['proposal_converted_to_estimate_success'] = 'Proposta convertida a pressupost';
$lang['proposal_converted_to_invoice_success']  = 'Proposta convertida a factura';
$lang['proposal_converted_to_estimate_fail']    = 'No s\'ha pogut convertir proposta a pressupost';
$lang['proposal_converted_to_invoice_fail']     = 'No s\'ha pogut convertir la proposta a factura';

# Proposals - view proposal template
$lang['proposal_total_info']   = 'Total %s';
$lang['proposal_accept_info']  = 'Acceptar';
$lang['proposal_decline_info'] = 'Declinat';
$lang['proposal_pdf_info']     = 'PDF';

# Customers Portal
$lang['customer_reset_action']            = 'Reiniciar';
$lang['customer_reset_password_heading']  = 'Restablir contrasenya';
$lang['customer_forgot_password_heading'] = 'Se t\'ha oblidat la contrasenya';
$lang['customer_forgot_password']         = '¿Se t\'ha oblidat la contrasenya?';
$lang['customer_reset_password']          = 'Contrasenya';
$lang['customer_reset_password_repeat']   = 'Repatir contrasenya';
$lang['customer_forgot_password_email']   = 'Adreça email';
$lang['customer_forgot_password_submit']  = 'Enviar';
$lang['customer_ticket_subject']          = 'Tema';

# Email templates
$lang['email_template_proposals_fields_heading'] = 'propostes';

# Tasks
$lang['add_task_attachments']  = 'Fitxer adjunt';
$lang['task_view_attachments'] = 'Fitxers adjunts';
$lang['task_view_description'] = 'Descripció';

# Customer Groups
$lang['customer_group_add_heading']  = 'Afegir nou grup de clients';
$lang['customer_group_edit_heading'] = 'Editar Grup de Clients';
$lang['new_customer_group']          = 'Nou Grup de Clients';
$lang['customer_group_name']         = 'Nom';
$lang['customer_groups']             = 'Grups';
$lang['customer_group']              = 'Grup de clients';
$lang['customer_group_lowercase']    = 'grup de clients';

$lang['customer_have_invoices_by']       = 'Conté factures per estat %s';
$lang['customer_have_estimates_by']      = 'Conté pressuposts per estat %s';
$lang['customer_have_contracts_by_type'] = 'Tenir contractes per tipus %s';

# Custom fields
$lang['custom_field_show_on_table']              = 'Mostrar en taula';
$lang['custom_field_show_on_client_portal']      = 'Mostrar en el portal de clients';
$lang['custom_field_show_on_client_portal_help'] = 'Si aquest camp està marcat també es mostra en les taules';
$lang['custom_field_visibility']                 = 'Visibilitat';

# Knowledge Base
$lang['view_articles_list']     = 'Veure Articles';
$lang['view_articles_list_all'] = 'Tots els articles';
$lang['als_all_articles']       = 'Tots els articles';
$lang['als_kb_groups']          = 'Grups';

# Spam Filter - Tickets
$lang['spam_filters']                 = 'Filtres spam';
$lang['spam_filter']                  = 'Filtre spam';
$lang['new_spam_filter']              = 'Nou filtre spam';
$lang['spam_filter_blocked_senders']  = 'Remitents bloquejats';
$lang['spam_filter_blocked_subjects'] = 'Assumptes bloquejats';
$lang['spam_filter_blocked_phrases']  = 'Frases bloquejades';
$lang['spam_filter_content']          = 'Contingut';
$lang['spamfilter_edit_heading']      = 'Editar filtre email no desitjat';
$lang['spamfilter_add_heading']       = 'Afegir Filtre de Spam';
$lang['spamfilter_type']              = 'Tipus';
$lang['spamfilter_type_subject']      = 'Tema';
$lang['spamfilter_type_sender']       = 'Remitent';
$lang['spamfilter_type_phrase']       = 'Frase';

# Tickets
$lang['block_sender']                = 'Bloquejar remitent';
$lang['sender_blocked']              = 'Remitents bloquejats';
$lang['sender_blocked_successfully'] = 'Remitent bloquejat';
$lang['ticket_date_created']         = 'Data de creació';

#KB
$lang['edit_kb_group'] = 'Editar grup';
# Leads
$lang['edit_source'] = 'Modificar origen';
$lang['edit_status'] = 'Editar estat';
# Contacts
$lang['contract_type_edit'] = 'Editar tipus de contracte';
# Reports
$lang['report_by_customer_groups'] = 'Valor Total Per Grups de clients';
#Utilities
$lang['ticket_pipe_log']      = 'Registre tiquets';
$lang['ticket_pipe_name']     = 'Des de nom';
$lang['ticket_pipe_email_to'] = 'A';
$lang['ticket_pipe_email']    = 'Des d\'email';
$lang['ticket_pipe_subject']  = 'Tema';
$lang['ticket_pipe_message']  = 'Missatge';
$lang['ticket_pipe_date']     = 'Data';
$lang['ticket_pipe_status']   = 'Estat';

# Home
$lang['home_latest_activity']   = 'Activitat Recent';
$lang['home_my_tasks']          = 'Tasques meves';
$lang['home_my_todo_items']     = 'Resum Tasques';
$lang['home_widget_view_all']   = 'Veure-ho tot';
$lang['home_stats_full_report'] = 'Resum Complet';

# Validation - Customer Portal

$lang['form_validation_required']    = 'El camp {field} és necessari.';
$lang['form_validation_valid_email'] = 'El camp {field} ha d\'incloure una adreça email vàlida.';
$lang['form_validation_matches']     = 'El camp {field} no coincideix amb el campo {param}.';
$lang['form_validation_is_unique']   = 'El camp {field} ha de contenir un valor únic.';

# Version 1.0.8
# Notifications & Leads/Estimates/Invoices Activity Log
$lang['not_event']                                                = 'Inici de l\'esdeveniment d\'avui - %s ...';
$lang['not_event_public']                                         = 'L\'esdeveniment públic comença avui - %s ...';
$lang['not_contract_expiry_reminder']                             = 'Recordatori caducitat contracte - %s ...';
$lang['not_recurring_expense_cron_activity_heading']              = 'Despesa recurrent activitat treball Cron ';
$lang['not_recurring_invoices_cron_activity_heading']             = 'Factures recurrents activitat tasca Cron';
$lang['not_recurring_total_renewed']                              = 'Actualizat total: %s';
$lang['not_recurring_expenses_action_taken_from']                 = 'Acció presa per despesa recurrent';
$lang['not_invoice_created']                                      = 'Factura creada:';
$lang['not_invoice_renewed']                                      = 'Factura renovada:';
$lang['not_expense_renewed']                                      = 'Despesa renovada:';
$lang['not_invoice_sent_to_customer']                             = 'Factura enviada al client: %s';
$lang['not_invoice_sent_yes']                                     = 'Sí';
$lang['not_invoice_sent_not']                                     = 'No';
$lang['not_action_taken_from_recurring_invoice']                  = 'Acció presa factura recurrent:';
$lang['not_new_reminder_for']                                     = 'Nou recordatori per a %s';
$lang['not_received_one_or_more_messages_lead']                   = 'Rebut un altre email de potencial';
$lang['not_received_lead_imported_email_integration']             = 'Potencial importat d\'integració email';
$lang['not_lead_imported_attachment']                             = 'Annex importat d\'email';
$lang['not_estimate_status_change']                               = 'Estat pressupost canviat';
$lang['not_estimate_status_updated']                              = 'Estat pressupost actualitzat: des de: %s a %s';
$lang['not_assigned_lead_to_you']                                 = '%s potencial assignat %s a tu';
$lang['not_lead_activity_assigned_to']                            = '%s assignat a %s';
$lang['not_lead_activity_attachment_deleted']                     = 'Esborrar annex';
$lang['not_lead_activity_status_updated']                         = '%s actualitzar estat potencial des de %s a %s';
$lang['not_lead_activity_contacted']                              = '%s contactat potencial sobre %s';
$lang['not_lead_activity_created']                                = '%s potencial creat';
$lang['not_lead_activity_marked_lost']                            = 'Marcar com a perdut';
$lang['not_lead_activity_unmarked_lost']                          = 'desmarcar com a perdut';
$lang['not_lead_activity_marked_junk']                            = 'Marcar com a brossa';
$lang['not_lead_activity_unmarked_junk']                          = 'desmarcar com a brossa';
$lang['not_lead_activity_added_attachment']                       = 'Annex agregat';
$lang['not_lead_activity_converted_email']                        = 'Email potencial canviat. El primer email del potencial era: %s y afegit com a client amb email %s';
$lang['not_lead_activity_converted']                              = '%s Convertit aquest potencial a client';
$lang['not_liked_your_post']                                      = '%s li ha agradat el teu correu %s ...';
$lang['not_commented_your_post']                                  = '%s ha comentat la teva publicació %s ...';
$lang['not_liked_your_comment']                                   = '%s li ha agradat el teu comentari %s ...';
$lang['not_proposal_assigned_to_you']                             = 'Proposta assignada a tu - %s ...';
$lang['not_proposal_comment_from_client']                         = 'Nou comentari del client sobre la proposta %s ...';
$lang['not_proposal_proposal_accepted']                           = 'Proposta acceptada - %s';
$lang['not_proposal_proposal_declined']                           = 'Proposta rebutjada - %s';
$lang['not_task_added_you_as_follower']                           = 'T\'ha afegit com a seguidor en la tasca %s ...';
$lang['not_task_added_someone_as_follower']                       = 'Afegit %s com a seguidor en la tasca %s ...';
$lang['not_task_added_himself_as_follower']                       = 'afegit ell mateix com a seguidor en la tasca %s ...';
$lang['not_task_assigned_to_you']                                 = 'assignada tasca a tu %s ...';
$lang['not_task_assigned_someone']                                = 'asignat %s a la tasca %s ...';
$lang['not_task_will_do_user']                                    = 'Farà tasca %s ...';
$lang['not_task_new_attachment']                                  = 'Nou annex afegit';
$lang['not_task_marked_as_complete']                              = 'Tasca marcada com a completa %s';
$lang['not_task_unmarked_as_complete']                            = 'Tasca desmarcada com a completa %s';
$lang['not_ticket_assigned_to_you']                               = 'Tiquet assignat a tu - %s ...';
$lang['not_ticket_reassigned_to_you']                             = 'Tiquet reassignat a tu- %s ...';
$lang['not_estimate_customer_accepted']                           = 'Enhorabona! El client ha acceptat el pressupost número %s';
$lang['not_estimate_customer_declined']                           = 'El client ha rebutjat el pressupost número  %s';
$lang['estimate_activity_converted']                              = 'Convertit aquest pressupost en factura.<br /> %s';
$lang['estimate_activity_created']                                = 'Creat pressupost';
$lang['invoice_estimate_activity_removed_item']                   = 'Tret article <b>%s</b>';
$lang['estimate_activity_number_changed']                         = 'Número pressupost canviat des de %s a %s';
$lang['invoice_activity_number_changed']                          = 'Número de factura canviat des de %s a %s';
$lang['invoice_estimate_activity_updated_item_short_description'] = 'Actualitzar descripció curta de l\'article des de %s fins a %s';
$lang['invoice_estimate_activity_updated_item_long_description']  = 'Actualitzar descripción llarga de l\'article des de <b>%s</b> fins a <b>%s</b>';
$lang['invoice_estimate_activity_updated_item_rate']              = 'actualitzar tarifa de l\'article des de %s fins a %s';
$lang['invoice_estimate_activity_updated_qty_item']               = 'actualitzar qualitat articles <b>%s</b> des de %s fins a %s';
$lang['invoice_estimate_activity_added_item']                     = 'nou article agregat <b>%s</b>';
$lang['invoice_estimate_activity_sent_to_client']                 = 'enviar pressupost al client';
$lang['estimate_activity_client_accepted_and_converted']          = 'El client ha acceptat aquest pressupost. El pressupost es converteix en factura amb el número %s';
$lang['estimate_activity_client_accepted']                        = 'El client ha acceptat aquest pressupost';
$lang['estimate_activity_client_declined']                        = 'El client ha rebutjat aquest pressupost';
$lang['estimate_activity_marked']                                 = 'Pressupost marcat com a %s';
$lang['invoice_activity_status_updated']                          = 'Actualitzar estat factura des de %s fins a %s';
$lang['invoice_activity_created']                                 = 'Factura creada';
$lang['invoice_activity_from_expense']                            = 'convertit en factura des de despesa';
$lang['invoice_activity_recurring_created']                       = '[Recurrent] Factura creada per CRON';
$lang['invoice_activity_recurring_from_expense_created']          = '[Factura de despesa] Factura creada per CRON';
$lang['invoice_activity_sent_to_client_cron']                     = 'Factura enviada al cliente per CRON';
$lang['invoice_activity_sent_to_client']                          = 'enviar factura al client';
$lang['invoice_activity_marked_as_sent']                          = 'factura marcada com a enviada';
$lang['invoice_activity_payment_deleted']                         = 'suprimit el pagament de la factura. Pagament #%s, import total %s';
$lang['invoice_activity_payment_made_by_client']                  = 'El client a fet el pagament de la factura per un total de <b>%s</b> - %s';
$lang['invoice_activity_payment_made_by_staff']                   = 'pagament registrat en total de <b>%s</b> - %s';
$lang['invoice_activity_added_attachment']                        = 'Annex agregat';

# Navigation
$lang['top_search_placeholder'] = 'Cercar...';

# Staff
$lang['staff_profile_inactive_account'] = 'Aquest compte d\'empleat està inactiu';

# Estimates
$lang['copy_estimate']                = 'Còpia de pressupost';
$lang['estimate_copied_successfully'] = 'Pressupost copiat';
$lang['estimate_copied_fail']         = 'No s\'ha pogut copiar el pressupost';

# Tasks
$lang['tasks_view_assigned_to_user'] = 'Tasques assignades a mi';
$lang['tasks_view_follower_by_user'] = 'Tasques que segueixo';
$lang['no_tasks_found']              = 'No s\'han trobat tasques';

# Leads
$lang['leads_dt_datecreated']       = 'Creat';
$lang['leads_sort_by']              = 'Ordenar per';
$lang['leads_sort_by_datecreated']  = 'Data creació';
$lang['leads_sort_by_kanban_order'] = 'Ordre Kanban';

# Authentication
$lang['check_email_for_resetting_password'] = 'Si us plau, comprovi email per obtenir més instruccions per restablir la contrasenya';
$lang['inactive_account']                   = 'Compte Inactiu';
$lang['error_setting_new_password_key']     = 'Error de configuració de la nova contrasenya';
$lang['password_reset_message']             = 'Contrasenya restablerta. Si us plau, iniciï sessió ara!';
$lang['password_reset_message_fail']        = 'Error en restablir contrasenya. Torni a intentar-ho.';
$lang['password_reset_key_expired']         = 'Contrasenya expirada o usuari invàlid';
$lang['auth_reset_pass_email_not_found']    = 'No s\'ha trobat email';
$lang['auth_reset_password_submit']         = 'Restablir contrasenya';

# Settings
$lang['settings_amount_to_words']          = 'Import en paraules';
$lang['settings_amount_to_words_desc']     = 'Generar import en paraules en factura/pressupost';
$lang['settings_amount_to_words_enabled']  = 'Permetre';
$lang['settings_total_to_words_lowercase'] = 'total en lletra minúscula';
$lang['settings_show_tax_per_item']        = 'Mostrar impost per article (Factures/pressupostos)';

# Reports
$lang['report_sales_months_three_months'] = 'Últims 3 mesos';
$lang['report_invoice_number']            = 'Factura #';
$lang['report_invoice_customer']          = 'Client';
$lang['report_invoice_date']              = 'Data';
$lang['report_invoice_duedate']           = 'Data venciment';
$lang['report_invoice_amount']            = 'Import';
$lang['report_invoice_amount_with_tax']   = 'Import amb impost';
$lang['report_invoice_amount_open']       = 'Import obert';
$lang['report_invoice_status']            = 'Estat';
#Version 1.0.9

# Home stats
$lang['home_stats_by_project_status'] = 'Estadística per estat del projecte';
$lang['home_invoice_overview']        = 'Resum de les Factures';
$lang['home_estimate_overview']       = 'Resum dels Pressupostos';
$lang['home_proposal_overview']       = 'Resum de les Propostes';
$lang['home_lead_overview']           = 'Resum de Clients potencials';
$lang['home_my_projects']             = 'Projectes meus';
$lang['home_announcements']           = 'Anuncis';

# Settings
$lang['settings_leads_kanban_limit']                                    = 'Limit files potencials kanban per estats';
$lang['settings_group_misc']                                            = 'Misc';
$lang['show_projects_on_calendar']                                      = 'Mostrar projectes o calendari';
$lang['settings_media_max_file_size_upload']                            = 'Tamany màxim arxius per carregar en mitjans de comunicació (MB)';
$lang['settings_client_staff_add_edit_delete_task_comments_first_hour'] = 'Permetre al client/personal agregar/editar comentaris de tasca només en la primera hora (No aplica als administradors)';

# Email templates
$lang['email_template_only_domain_email'] = 'Només email domini';

# Announcements
$lang['dismiss_announcement']   = 'Anunci de comiat';
$lang['announcement_from']      = 'Des de:';
$lang['announcement_date']      = 'Data de publicació: %s';
$lang['announcement_not_found'] = 'No s\'ha trobat anunci';
$lang['announcements_recent']   = 'Anuncis recents';

# General
$lang['zip_invoices']         = 'Factures Zip';
$lang['zip_estimates']        = 'Estimació Zip';
$lang['zip_payments']         = 'Pagaments Zip';
$lang['setup_help']           = 'Ajuda';
$lang['clients_list_company'] = 'Empresa';
$lang['dt_button_export']     = 'Exportar';

$lang['dt_entries']         = 'entrades';
$lang['invoice_total_paid'] = 'Total pagat';
$lang['invoice_amount_due'] = 'Import a pagar';

# Calendar
$lang['calendar_project'] = 'Projecte';

# Leads
$lang['leads_import_assignee']     = 'Cessionari';
$lang['customer_from_lead']        = 'Client des de %s';
$lang['lead_kan_ban_attachments']  = 'Arxius adjunts %s';
$lang['leads_sort_by_lastcontact'] = 'Últim contacte';

# Tasks
$lang['task_comment_added']     = 'Comentari afegit';
$lang['task_duedate']           = 'Data de venciment';
$lang['task_view_comments']     = 'Comentaris';
$lang['task_comment_updated']   = 'Comentari actualitzat';
$lang['task_visible_to_client'] = 'Visible per al client';
$lang['task_hourly_rate']       = 'Tarifa per hora';
$lang['hours']                  = 'Hores';
$lang['seconds']                = 'Segons';
$lang['minutes']                = 'Minuts';
$lang['task_start_timer']       = 'Temporitzador d\'inici';
$lang['task_stop_timer']        = 'Aturar temporitzador';
$lang['task_billable']          = 'Facturable';
$lang['task_billable_yes']      = 'Facturable';
$lang['task_billable_no']       = 'No facturable';
$lang['task_billed']            = 'Facturada';
$lang['task_billed_yes']        = 'Facturada';
$lang['task_billed_no']         = 'No facturada';
$lang['task_user_logged_time']  = 'Temps registrat:';
$lang['task_total_logged_time'] = 'Total temps registrat:';
$lang['task_is_billed']         = 'Tasca facturada en la facture número %s';
$lang['task_statistics']        = 'Estadístiques';
$lang['task_milestone']         = 'Fita';

# Tickets
$lang['ticket_message_updated_successfully'] = 'Missatge actualitzat correctament';

# Invoices
$lang['invoice_task_item_project_tasks_not_included'] = 'Els projectes de les tasques no estan inclosos en aquesta llista.';
$lang['show_quantity_as']                             = 'Mostrar quantitat com:';
$lang['quantity_as_qty']                              = 'Quantitat';
$lang['quantity_as_hours']                            = 'Hores';
$lang['invoice_table_hours_heading']                  = 'Hores';
$lang['bill_tasks']                                   = 'Tasques factura';
$lang['invoice_estimate_sent_to_email']               = 'Enviar email';

# Estimates
$lang['estimate_table_hours_heading'] = 'Hores';

# General
$lang['is_customer_indicator']         = 'Client';
$lang['print']                         = 'Imprimir';
$lang['customer_permission_projects']  = 'Projectes';
$lang['no_timers_found']               = 'No s\'ha trobat cap temporitzador iniciat';
$lang['timers_started_confirm_logout'] = 'Temporitzador de tasques iniciat!<br /><br />¿Està segur que vol sortir sense aturar el temporitzador?';
$lang['confirm_logout']                = 'Sortir';
$lang['timer_top_started']             = 'Iniciat a les %s';

# Projects
$lang['cant_change_billing_type_billed_tasks_found']   = 'No es pot canviar el tipus de facturació. Ja s\'han trobat tasques facturades per aquest projecte.';
$lang['project_customer_permission_warning']           = 'El sistema indica que el contacte principal no té permís per a projectes. El contacte principal no podrà veure el projecte. Consideri la possibilitat d\'afegir el permís en el perfil del contacte.';
$lang['project_invoice_timesheet_start_time']          = 'Hora d\'inici: %s';
$lang['project_invoice_timesheet_end_time']            = 'Hora final: %s';
$lang['project_invoice_timesheet_total_logged_time']   = 'Temps d\'inici de sessió: %s';
$lang['project_view_as_client']                        = 'Veure el projecte como a cliente';
$lang['project_mark_all_tasks_as_completed']           = 'Marcar totes les àrees com a completades i aturar tots els temporitzadors (No hi ha notificacions enviades als membres del projecte)';
$lang['project_not_started_status_tasks_timers_found'] = 'S\'han trobat temporitzadors de tasca per aquest projecte, però el projecte està en l\'estat de No Iniciat. Es recomana canviar l\'estat del projecte a En Progrés';
$lang['project_status']                                = 'Estats';
$lang['project_status_1']                              = 'No iniciat';
$lang['project_status_2']                              = 'En progrés';
$lang['project_status_3']                              = 'En espera';
$lang['project_status_4']                              = 'Finalitzat';

$lang['project_file_dateadded']                              = 'Data upload';
$lang['project_file_filename']                               = 'Nom de l\'arxiu';
$lang['project_file__filetype']                              = 'Tipus d\'arxiu';
$lang['project_file_visible_to_customer']                    = 'Visible per al client';
$lang['project_file_uploaded_by']                            = 'Pujat per';
$lang['edit_project']                                        = 'Editar projecte';
$lang['copy_project']                                        = 'Copiar projecte';
$lang['delete_project']                                      = 'Esborrar projecte';
$lang['project_task_assigned_to_user']                       = 'Tasca assignada a tu';
$lang['seconds']                                             = 'Segons';
$lang['hours']                                               = 'Hores';
$lang['minutes']                                             = 'Minuts';
$lang['project']                                             = 'Projecte';
$lang['project_lowercase']                                   = 'projecte';
$lang['projects']                                            = 'Projectes';
$lang['projects_lowercase']                                  = 'projectes';
$lang['project_settings']                                    = 'Configuració del projecte';
$lang['project_invoiced_successfully']                       = 'Projecte facturat amb èxit';
$lang['new_project']                                         = 'Nou projecte';
$lang['project_files']                                       = 'Arxius';
$lang['project_activity']                                    = 'Activitat';
$lang['project_name']                                        = 'Nom del projecte';
$lang['project_description']                                 = 'Descripció del projecte';
$lang['project_customer']                                    = 'Client';
$lang['project_start_date']                                  = 'Data d\'inici';
$lang['project_datecreated']                                 = 'Data de creació';
$lang['project_deadline']                                    = 'Data límit';
$lang['project_billing_type']                                = 'Tipus de facturació';
$lang['project_billing_type_fixed_cost']                     = 'Preu fix';
$lang['project_billing_type_project_hours']                  = 'Hores del projecte';
$lang['project_billing_type_project_task_hours']             = 'Hores de les tasques';
$lang['project_billing_type_project_task_hours_hourly_rate'] = 'Basat en la tarifa de treball per hora';
$lang['project_rate_per_hour']                               = 'Tarifa per hora';
$lang['project_total_cost']                                  = 'Cost total';
$lang['project_members']                                     = 'Membres del projecte';
$lang['project_member_removed']                              = 'Membro del projecte eliminat';
$lang['project_overview']                                    = 'descripció del projecte';
$lang['project_gant']                                        = 'Vista Gantt';
$lang['project_milestones']                                  = 'Fites';
$lang['project_milestone_order']                             = 'Ordre';
$lang['project_milestone_duedate_passed']                    = 'Data de venciment expirada';
$lang['record_timesheet']                                    = 'Registre d\'horas';
$lang['new_milestone']                                       = 'Nova fita';
$lang['edit_milestone']                                      = 'Editar fita';
$lang['milestone_name']                                      = 'Nom';
$lang['milestone_due_date']                                  = 'Data de venciment';
$lang['project_milestone']                                   = 'Fita';
$lang['project_notes']                                       = 'Notes';
$lang['project_timesheets']                                  = 'Planilles';
$lang['project_timesheet']                                   = 'Planilla';
$lang['milestone_total_logged_time']                         = 'Temps registrat';
$lang['project_overview_total_logged_hours']                 = 'Total hores registrades';
$lang['milestones_uncategorized']                            = 'Sense categoria';
$lang['milestone_no_tasks_found']                            = 'No s\'ha trobat tasca';
$lang['project_copied_successfully']                         = 'Dades del projecte copiadeso correctament';
$lang['failed_to_copy_project']                              = 'No s\'ha pogut copiar el projecte';
$lang['copy_project_task_include_check_list_items']          = 'Copiar punts de la llista';
$lang['copy_project_task_include_assignees']                 = 'Copiar els mateixos cessionaris';
$lang['copy_project_task_include_followers']                 = 'Copiar els mateixos seguidors';

$lang['project_days_left']                                = 'Dies que falten';
$lang['project_open_tasks']                               = 'Tasques obertes';
$lang['timesheet_stop_timer']                             = 'Aturar temporitzador';
$lang['failed_to_add_project_timesheet_end_time_smaller'] = 'No s\'ha pogut agregar full horaris. L\'hora de finalització és menor que la d\'inici';
$lang['project_timesheet_user']                           = 'Membre';
$lang['project_timesheet_start_time']                     = 'Hora d\'inici';
$lang['project_timesheet_end_time']                       = 'Hora de finalització';
$lang['project_timesheet_time_spend']                     = 'Temps usat';
$lang['project_timesheet_task']                           = 'Tasca';
$lang['project_invoices']                                 = 'Factures';
$lang['total_logged_hours_by_staff']                      = 'Total de temps registrat';
$lang['invoice_project']                                  = 'Factura del projecte';
$lang['invoice_project_info']                             = 'Informació de la factura del projecte';
$lang['invoice_project_data_single_line']                 = 'Línia única';
$lang['invoice_project_data_task_per_item']               = 'Tasca per article';
$lang['invoice_project_data_timesheets_individually']     = 'Tots els fulls horaris individuals';
$lang['invoice_project_item_name_data']                   = 'Nom de l\'article';
$lang['invoice_project_description_data']                 = 'Descripció';
$lang['invoice_project_projectname_taskname']             = 'Nom del projecte + Nom de la tasca';
$lang['invoice_project_all_tasks_total_logged_time']      = 'Totes les tasques + temps total registrat per tasca';
$lang['invoice_project_project_name_data']                = 'Nom del projecte';
$lang['invoice_project_timesheet_individually_data']      = 'Hora d\'inici del full horari + hora de finalització + temps total registrat';
$lang['invoice_project_total_logged_time_data']           = 'Temps total registrat';

$lang['project_allow_client_to']                     = 'Permetre al client %s';
$lang['project_setting_view_task_attachments']       = 'arxius adjunts de tasques vistes';
$lang['project_setting_view_task_checklist_items']   = 'Llista de tasques vistes de l\'article';
$lang['project_setting_upload_files']                = 'Pujar arxius';
$lang['project_setting_view_task_comments']          = 'Comentaris de les tasques vistes';
$lang['project_setting_upload_on_tasks']             = 'Pujar arxius adjunts a les tasques';
$lang['project_setting_view_task_total_logged_time'] = 'Total temps registrat en tasques vistes';
$lang['project_setting_open_discussions']            = 'discusions obertes';
$lang['project_setting_comment_on_tasks']            = 'comentaris sobre les àrees del projecte';
$lang['project_setting_view_tasks']                  = 'tasques vistes';
$lang['project_setting_view_milestones']             = 'fites vistes';
$lang['project_setting_view_gantt']                  = 'Gantt vist';
$lang['project_setting_view_timesheets']             = 'Fulls horaris vistos';
$lang['project_setting_view_activity_log']           = 'veure registre d\'activitat';
$lang['project_setting_view_team_members']           = 'veure membres de l\'equip';

$lang['project_discussion_visible_to_customer_yes'] = 'Visible';
$lang['project_discussion_visible_to_customer_no']  = 'No Visible';

$lang['project_discussion_posted_on']        = 'Publicat en %s';
$lang['project_discussion_posted_by']        = 'Publicat per %s';
$lang['project_discussion_failed_to_delete'] = 'No s\'ha pogut eliminar la discussió';
$lang['project_discussion_deleted']          = 'Discussio eliminada correctament';
$lang['project_discussion_no_activity']      = 'Cap activitat';
$lang['project_discussion']                  = 'Discussió';
$lang['project_discussions']                 = 'Discussions';
$lang['edit_discussion']                     = 'Editar discussió';
$lang['new_project_discussion']              = 'Crear discussió';
$lang['project_discussion_subject']          = 'Tema';
$lang['project_discussion_description']      = 'descripció';
$lang['project_discussion_show_to_customer'] = 'Visible per al client';
$lang['project_discussion_total_comments']   = 'Comentaris totals';
$lang['project_discussion_last_activity']    = 'Última activitat';
$lang['discussion_add_comment']              = 'Agregar comentari';
$lang['discussion_newest']                   = 'El més recent';
$lang['discussion_oldest']                   = 'El més vell';
$lang['discussion_attachments']              = 'Arxius adjunts';
$lang['discussion_send']                     = 'Enviar';
$lang['discussion_reply']                    = 'Resposta';
$lang['discussion_edit']                     = 'Editar';
$lang['discussion_edited']                   = 'Modificar';
$lang['discussion_you']                      = 'Tu';
$lang['discussion_save']                     = 'Guardar';
$lang['discussion_delete']                   = 'Esborrar';
$lang['discussion_view_all_replies']         = 'Mostrar totes les respostes';
$lang['discussion_hide_replies']             = 'Ocultar respostes';
$lang['discussion_no_comments']              = 'Cap comentari';
$lang['discussion_no_attachments']           = 'Cap arxiu adjunt';
$lang['discussion_attachments_drop']         = 'Arrossegar i deixar anar per carregar l\'arxiu';
$lang['project_note']                        = 'Nota';
$lang['project_note_private']                = 'Notes privades';
$lang['project_save_note']                   = 'Guardar nota';

# Project Activity
$lang['project_activity_created']                      = 'Projecte creat';
$lang['project_activity_updated']                      = 'Projecte actualitzat';
$lang['project_activity_removed_team_member']          = 'Membro de l\'equip eliminat';
$lang['project_activity_added_team_member']            = 'Nou membre de l\'equip agregat';
$lang['project_activity_marked_all_tasks_as_complete'] = 'Marcades totes les tasques com a acabades';
$lang['project_activity_recorded_timesheet']           = 'Factura registrada';
$lang['project_activity_task_name']                    = 'Tasca:';
$lang['project_activity_deleted_discussion']           = 'Eliminar discussió';
$lang['project_activity_created_discussion']           = 'Dicussió creada';
$lang['project_activity_updated_discussion']           = 'Discussió actualitzada';
$lang['project_activity_commented_on_discussion']      = 'Observació de la discussió';
$lang['project_activity_deleted_discussion_comment']   = 'Observació de la discussió eliminada';
$lang['project_activity_deleted_milestone']            = 'Fites eliminades';
$lang['project_activity_updated_milestone']            = 'Actualizació fita';
$lang['project_activity_created_milestone']            = 'Nova fita creada';
$lang['project_activity_invoiced_project']             = 'Projecte facturat';
$lang['project_activity_task_marked_complete']         = 'Tasca marcada com a acabada';
$lang['project_activity_task_unmarked_complete']       = 'Tasca desmarcada com a acabada';
$lang['project_activity_task_deleted']                 = 'Tasca eliminada';
$lang['project_activity_new_task_comment']             = 'Tasca comentada a';
$lang['project_activity_new_task_attachment']          = 'Arxius adjunts carregats en la tasca';
$lang['project_activity_new_task_assignee']            = 'Nou cessionari de tasca afegit';
$lang['project_activity_task_assignee_removed']        = 'Cessionari de tasca eliminat';
$lang['project_activity_task_timesheet_deleted']       = 'Factura eliminada';
$lang['project_activity_uploaded_file']                = 'Pujar arxiu del projecte';
$lang['project_activity_status_updated']               = 'Actualitzat estat del projecte';
$lang['project_activity_visible_to_customer']          = 'Visible per al client';
$lang['project_activity_project_file_removed']         = 'Arxiu del projecte eliminat';

# Customers area
$lang['clients_my_estimates'] = 'Pressupostos meus';
$lang['client_no_reply']      = 'Sense resposta';
$lang['clients_nav_projects'] = 'Projectes';
$lang['clients_my_projects']  = 'Projectes meus';
$lang['client_profile_image'] = 'Imatge de perfil';

/////
$lang['sales_report_cancelled_invoices_not_included'] = 'Les factures cancel·lades s\'han exclòs de l\'informe';
$lang['invoices_merge_cancel_merged_invoices']        = 'Marcar factures fusionades com a cancel·lades en comptes d\'esborrarles';
$lang['invoice_marked_as_cancelled_successfully']     = 'Factura marcada com a cancel·lada';
$lang['invoice_unmarked_as_cancelled']                = 'Factura desmarcada com a cancel·lada';
//$lang['tasks_reminder_notification_before_help'] = 'Notificar cessionaris tasca quant a data límit abans de X dies. La notificació/email solament s\'envia als cessionaris.';
$lang['tasks_reminder_notification_before']                    = 'Recordar data límit tasca abans de (Dies)';
$lang['not_task_deadline_reminder']                            = 'Recordatori data límit tasca';
$lang['dt_length_menu_all']                                    = 'Tot';
$lang['task_not_finished']                                     = 'No Completat';
$lang['task_billed_cant_start_timer']                          = 'Tasca facturada. Es pot iniciar temporitzador';
$lang['invoice_task_billable_timers_found']                    = 'S\'han trobat temporitzadors iniciats';
$lang['project_timesheet_not_updated']                         = 'Full horaris no afectat';
$lang['project_invoice_task_no_timers_found']                  = 'No s\'han trobat temporitzadors per aquesta tasca';
$lang['invoice_project_tasks_not_started']                     = 'Encara no s\'ha iniciat | Data d\'inici: %s';
$lang['invoice_project_see_billed_tasks']                      = 'Veure tasques que s\'inclouran en aquesta factura';
$lang['invoice_project_all_billable_tasks_marked_as_finished'] = 'Totes les tasques facturades es marcaran com a finalitzades';
$lang['invoice_project_nothing_to_bill']                       = 'No hi ha tasques per facturar. Sent-te lliure d\'afegir el que vulguis en els ítems de la factura.';
$lang['invoice_project_start_date_tasks_not_passed']           = 'Tasques amb data d\'inici futura no es poden facturar';
$lang['invoice_project_stop_all_timers']                       = 'Aturar tots els temporitzadors';
$lang['invoice_project_stop_billable_timers_only']             = 'Aturar només els temporitzadors facturables';
$lang['project_tasks_total_timers_stopped']                    = 'Total temporitzadors aturats %s';
$lang['project_invoice_timers_started']                        = 'S\'han trobat temporitzadors de tasca en funcionament en tasques facturables, no es pot crear la factura. Si us plau atureu els temporitzadors de tasca per crear factura.';
$lang['task_start_timer_only_assignee']                        = 'Has d\'estar assignat a aquesta tasca per poder iniciar el temporitzador!';
$lang['task_comments']                                         = 'Comentaris';
$lang['invoice_total_tax']                                     = 'IVA Total';
$lang['estimates_total_tax']                                   = 'IVA Total';
$lang['report_invoice_total_tax']                              = 'IVA Total';
$lang['home_tickets']                                          = 'Tiquets';
$lang['home_project_activity']                                 = 'Activitat dels Projectes';
$lang['view_tracking']                                         = 'Seguiment vistes';
$lang['view_date']                                             = 'Data';
$lang['view_ip']                                               = 'Adreça IP';
$lang['article_total_views']                                   = 'Total Vistes';
$lang['leads_source']                                          = 'Font';
$lang['invoices_available_for_merging']                        = 'Factures disponibles per fusionar';
$lang['invoices_merge_discount']                               = 'Haurà d\'aplicar descompte de total %s a aquesta factura manualment';
$lang['invoice_merge_number_warning']                          = 'La fusió de factures crearà salts en la numeració. Si us plau no fusioni factures si no vol lapsus en l\'hitorial de facturació. També té l\'opció d\'ajustar manualment la numeració de les factures per evitar aquests lapsus.';
$lang['invoice_mark_as']                                       = 'Marcar com a %s';
$lang['invoice_unmark_as']                                     = 'Desmarcar com a %s';
$lang['invoice_status_cancelled']                              = 'Cancel·lat';
$lang['tasks_reminder_notification_before_help']               = 'Notificar data límit a cessionaris tasca X dies abans. La notificació/email solament s\'envia als cessionaris. Si la diferència entre la data d\'inici de la tasca i la des venciment és inferior llavors el recordatori no s\'enviarà';

# Version 1.1.0
$lang['project_invoice_select_all_tasks'] = 'Seleccionar todtes les tasques';
$lang['lead_company']                     = 'Empresa';

# Version 1.1.1
$lang['admin_auth_forgot_password_button']       = 'Confirmar';
$lang['task_assigned']                           = 'Assignat a';
$lang['switch_to_pipeline']                      = 'Canviar a pipeline';
$lang['switch_to_list_view']                     = 'Canviar a llista';
$lang['estimates_pipeline']                      = 'Pipeline pressupostos';
$lang['estimates_pipeline_sort']                 = 'Ordenar per';
$lang['estimates_sort_expiry_date']              = 'Data venciment';
$lang['estimates_sort_pipeline']                 = 'Ordre Pipeline';
$lang['estimates_sort_datecreated']              = 'Data Creació';
$lang['estimates_sort_estimate_date']            = 'Data pressupost';
$lang['estimate_set_reminder_title']             = 'Establir recordatori pressupost';
$lang['invoice_set_reminder_title']              = 'Establir recordatori factura';
$lang['estimate_reminders']                      = 'Recordatoris';
$lang['invoice_reminders']                       = 'Recordatoris';
$lang['estimate_notes']                          = 'Notes';
$lang['estimate_add_note']                       = 'Afegir Nota';
$lang['dropdown_non_selected_tex']               = 'Res seleccionat';
$lang['auto_close_ticket_after']                 = 'Autotancar tiquet després de (Hours)';
$lang['event_description']                       = 'Descripció';
$lang['delete_event']                            = 'Esborrar';
$lang['not_new_ticket_created']                  = 'Obert nou tiquet al teu departament - %s';
$lang['receive_notification_on_new_ticket']      = 'Rebre notificació de nou tiquet obert';
$lang['receive_notification_on_new_ticket_help'] = 'Tot el personal que pertany al departament del tiquet rebrà notificació que s\'ha obert nou tiquet';
$lang['event_updated']                           = 'Esdeveniment actualitzat amb èxit';
$lang['customer_contacts']                       = 'Contactes';
$lang['new_contact']                             = 'Nou Contacte';
$lang['contact']                                 = 'Contacte';
$lang['contact_lowercase']                       = 'contacte';
$lang['contact_primary']                         = 'Contacte Principal';
$lang['contact_position']                        = 'Posició';
$lang['contact_active']                          = 'Actiu';
$lang['client_company_info']                     = 'Detalls Empresa';
$lang['proposal_save']                           = 'Guardar Proposta';
$lang['calendar']                                = 'Calendari';
$lang['settings_pdf']                            = 'PDF';
$lang['settings_pdf_font']                       = 'PDF Font';
$lang['settings_pdf_table_heading_color']        = 'Taula color capçalera ítems';
$lang['settings_pdf_table_heading_text_color']   = 'Taula color text capçalera ítems';
$lang['settings_pdf_font_size']                  = 'Tamany lletra per defecte';
$lang['proposal_status_draft']                   = 'Esborrany';
$lang['custom_field_contacts']                   = 'Contactes';
$lang['company_primary_email']                   = 'Email Principal';
$lang['client_register_contact_info']            = 'Informació contacte principal';
$lang['client_register_company_info']            = 'Informacions Empresa';
$lang['contact_permissions_info']                = 'Asseguri\'s d\'establir els permisos pertinents per aquest contacte';
$lang['default_leads_kanban_sort']               = 'Ordre kanban de potencials per defecte';
$lang['default_leads_kanban_sort_type']          = 'Ordre';
$lang['order_ascending']                         = 'Ascendent';
$lang['order_descending']                        = 'Descendent';
$lang['calendar_expand']                         = 'expandir';
$lang['proposal_reminders']                      = 'Recordatoris';
$lang['proposal_set_reminder_title']             = 'Establir recordatori proposta';
$lang['settings_allowed_upload_file_types']      = 'Tipus d\'arxius permesos';
$lang['no_primary_contact']                      = 'Aquest client no té contacte principal. Ha de configurar el login del contacte principal com a client. Es recomana que tots els clients tinguin contactes principals.';
$lang['leads_merge_customer']                    = 'Fusió de camps de client';
$lang['leads_merge_contact']                     = 'Fusió de camps de contacte';
$lang['leads_merge_as_contact_field']            = 'Fusionar com a camp de contacte';
$lang['lead_convert_to_client_phone']            = 'Telèfon';
$lang['invoice_status_report_all']               = 'Tots';
$lang['import_contact_field']                    = 'Camp de Contacte';

$lang['file_uploaded_success']             = 'No hi ha cap error, s\'ha pujat el fitxer amb èxit';
$lang['file_exceeds_max_filesize']         = 'El fitxer pujat exedeix el tamany màxim segons la directiva de php.ini';
$lang['file_exceeds_maxfile_size_in_form'] = 'El fitxer pujat excedeix el tamany màxim segons la directiva especificada en el formulari HTML';
$lang['file_uploaded_partially']           = 'El fitxer nés s\'ha pujat parcialment';
$lang['file_not_uploaded']                 = 'No s\'ha pujat cap fitxer';
$lang['file_missing_temporary_folder']     = 'No hi ha carpeta temporal';
$lang['file_failed_to_write_to_disk']      = 'No s\'ha pogut guardar el fitxer al disc.';
$lang['file_php_extension_blocked']        = 'Una extensió PHP ha aturat la pujada del fitxer.';
$lang['calendar_expand']                   = 'Expandir';
$lang['view_pdf']                          = 'Veure PDF';
$lang['expense_repeat_every']              = 'Repetir cada';

# Version 1.1.2
$lang['leads_switch_to_kanban']                   = 'Canviar a kanban';
$lang['contract_content']                         = 'Contracte';
$lang['contract_save']                            = 'Guardar Contracte';
$lang['contract_send_to_email']                   = 'Enviar a email';
$lang['contract_send_to_client_modal_heading']    = 'Enviar contracte a email';
$lang['contract_send_to']                         = 'Enviar a';
$lang['contract_send_to_client_attach_pdf']       = 'Adjuntar PDF';
$lang['contract_send_to_client_preview_template'] = 'Vista prèvia plantilla Email';
$lang['include_attachments_to_email']             = 'Incloure annexos a email';
$lang['contract_sent_to_client_success']          = 'Contracte enviat al client amb èxit';
$lang['contract_sent_to_client_fail']             = 'No s\'ha pogut enviar contracte';

# Version 1.1.3
$lang['client_invalid_username_or_password'] = 'Usuari o contrasenya invàlids';
$lang['client_old_password_incorrect']       = 'L\'usuari vell és incorrecte';
$lang['client_password_changed']             = 'Contrasenya canviada';

# Version 1.1.4
$lang['total_leads_deleted']                              = 'Total potencials esborrats: %s';
$lang['total_clients_deleted']                            = 'Total clients esborrats: %s';
$lang['confirm_action_prompt']                            = 'Segur que vol executar aquesta acció?';
$lang['mass_delete']                                      = 'Exborrat massiu';
$lang['email_protocol']                                   = 'Protocol Email';
$lang['add_edit_members']                                 = 'Afegir/Editar Membres';
$lang['project_overview_logged_hours']                    = 'Hores connectat:';
$lang['project_overview_billable_hours']                  = 'Hores facturables:';
$lang['project_overview_billed_hours']                    = 'Hores facturades:';
$lang['project_overview_unbilled_hours']                  = 'Hores no facturades:';
$lang['calendar_first_day']                               = 'Primer dia';
$lang['permission_view']                                  = 'Veure';
$lang['permission_edit']                                  = 'Editar';
$lang['permission_create']                                = 'Crear';
$lang['permission_delete']                                = 'Esborrar';
$lang['permission']                                       = 'Permís';
$lang['permissions']                                      = 'Permisos';
$lang['proposals_pipeline']                               = 'Propostes Pipeline';
$lang['proposals_pipeline_sort']                          = 'Ordenar per';
$lang['proposals_sort_open_till']                         = 'Obert fins a';
$lang['proposals_sort_pipeline']                          = 'Ordre Pipeline';
$lang['proposals_sort_datecreated']                       = 'Data Creació';
$lang['proposals_sort_proposal_date']                     = 'Data Proposta';
$lang['is_not_staff_member']                              = 'No és membre del personal';
$lang['lead_created']                                     = 'Creat';
$lang['access_tickets_to_none_staff_members']             = 'No permetre l\'accés a tiquets a cap membre del personal';
$lang['project_expenses']                                 = 'Despeses';
$lang['expense_currency']                                 = 'Moneda';
$lang['currency_valid_code_help']                         = 'Asseguri\'s d\'entrar un codi de moneda vàlid.';
$lang['week']                                             = 'Setmana';
$lang['weeks']                                            = 'Setmanes';
$lang['month']                                            = 'Mes';
$lang['months']                                           = 'Mesos';
$lang['year']                                             = 'Any';
$lang['years']                                            = 'Anys';
$lang['expense_report_category']                          = 'Categoria';
$lang['expense_paid_via']                                 = 'Pagat Via %s';
$lang['item_as_expense']                                  = '[Despesa]';
$lang['show_help_on_setup_menu']                          = 'Mostrar ítem menú ajuda en el menú de configuració';
$lang['customers_summary_total']                          = 'Total Clients';
$lang['filter_by']                                        = 'Filtrar per';
$lang['re_captcha']                                       = 'reCAPTCHA';
$lang['recaptcha_site_key']                               = 'Clau lloc web';
$lang['recaptcha_secret_key']                             = 'Clau secreta';
$lang['recaptcha_error']                                  = 'El camp reCAPTCHA diu que ets un robot.';
$lang['smtp_username']                                    = 'Nom usuari SMTP';
$lang['smtp_username_help']                               = 'Omplir solament si el vostre client email usa nom usuari per connectar SMTP.';
$lang['pinned_project']                                   = 'Projecte fixat';
$lang['pin_project']                                      = 'Fixar Projecte';
$lang['unpin_project']                                    = 'Desclavar Projecte';
$lang['smtp_encryption']                                  = 'Encriptació Email';
$lang['smtp_encryption_none']                             = 'Cap';
$lang['show_proposals_on_calendar']                       = 'Propostes';
$lang['invoice_project_see_billed_expenses']              = 'Veure despeses que es carregaran en aquesta factura';
$lang['project_overview_expenses']                        = 'Total Despeses';
$lang['project_overview_expenses_billable']               = 'Despeses facturables';
$lang['project_overview_expenses_billed']                 = 'Despeses facturades';
$lang['project_overview_expenses_unbilled']               = 'Despeses no facturades';
$lang['announcement_date_list']                           = 'Data';
$lang['project_setting_view_finance_overview']            = 'veure resum finances';
$lang['show_all_tasks_for_project_member']                = 'Permetre que tot el personal pugui veure totes les tasques relacionades amb projectes (inclou no personal)';
$lang['not_staff_added_as_project_member']                = 'Afegit com a membre del projecte';
$lang['report_expenses_base_currency_select_explanation'] = 'Ha de seleccionar moneda perquè el sistema ha trobat que s\'han usat diverses monedes per a despeses.';

# Version 1.1.6
$lang['project_activity_recorded_expense']   = 'Despesa registrada';
$lang['save_customer_and_add_contact']       = 'Guardar i crear contacte';
$lang['tickets_chart_weekly_opening_stats']  = 'Estadístiques setmanals';
$lang['related_knowledgebase_articles']      = 'Articles relacionats';
$lang['detailed_overview']                   = 'Resum tasques';
$lang['tasks_total_checklists_finished']     = 'Total llista articles marcats com a acabats';
$lang['tasks_total_added_attachments']       = 'Total annexos afegits';
$lang['tasks_total_comments']                = 'Total comentaris';
$lang['task_finished_on_time']               = 'Acabat a temps?';
$lang['task_finished_on_time_indicator']     = 'Sí';
$lang['task_not_finished_on_time_indicator'] = 'No';
$lang['filter']                              = 'Filtre';
$lang['task_filter_detailed_all_months']     = 'Tots els mesos';
$lang['kb_article_slug']                     = 'Slug';

# Version 1.1.7
$lang['email_template_ticket_warning']          = 'Si el tiquet s\'importa amb email piping i el contacte no existeix en el CRM no se substiruiran els camps.';
$lang['auto_stop_tasks_timers_on_new_timer']    = 'Aturar tots els altres temporitzadors iniciats en iniciar-ne un de nou';
$lang['notification_when_customer_pay_invoice'] = 'Rebre notificació quan el client pagui la factura (incorporat)';
$lang['not_invoice_payment_recorded']           = 'Pagament nova factura - %s';
$lang['email_template_contact_warning']         = 'Si el contacte no està connectat en dur a terme l\'acció els camps de fusió del contacte no seran substituïts.';
$lang['change_role_permission_warning']         = 'Canviar els permisos de rol ara no afectarà els permisos actuals dels membres del personal que estan usant aquest rol.';
$lang['task_copied_successfully']               = 'Tasca copiada amb èxit';
$lang['failed_to_copy_task']                    = 'La còpia de la tasca ha fallat';
$lang['not_project_file_uploaded']              = 'Afegit arxiu del nou projecte';
$lang['settings_calendar_color']                = '%s Color';
$lang['settings_calendar_colors_heading']       = 'Estil';
$lang['reminder']                               = 'Recordatori';
$lang['back_to_tasks_list']                     = 'Tornar a la llista de tasques';
$lang['copy_task_confirm']                      = 'Confirmar';
$lang['changing_items_affect_warning']          = 'Canviar la informació de l\'ítem no afectarà les factures/pressupostos creats.';
$lang['tax_is_used_in_expenses_warning']        = 'No podeu actualitzar aquesta taxa perquè hi ha transaccions de despeses usant aquesta taxa.';
$lang['note']                                   = 'Nota';
$lang['leads_staff_report_converted']           = 'Total potencials convertits';
$lang['leads_staff_report_created']             = 'Total potencials creats';
$lang['leads_staff_report_lost']                = 'Total potencials perduts';
$lang['client_go_to_dashboard']                 = 'Tornar al portal';
$lang['show_estimate_reminders_on_calendar']    = 'Recordatoris pressupost';
$lang['show_invoice_reminders_on_calendar']     = 'Recordatoris factura';
$lang['calendar_estimate_reminder']             = 'Recordatori pressupost';
$lang['calendar_invoice_reminder']              = 'Recordatori factura';
$lang['show_proposal_reminders_on_calendar']    = 'Recordatoris proposta';
$lang['calendar_proposal_reminder']             = 'Recordatori proposta';
$lang['proposal_due_after']                     = 'Venciument Proposta després de (dies)';
$lang['project_progress']                       = 'Progrés';
$lang['calculate_progress_through_tasks']       = 'Calcular progrés durant tasques';
$lang['allow_customer_to_change_ticket_status'] = 'Permetre al client que canviï estat tiquet des de l\'àrea de clients';
$lang['switch_to_general_report']               = 'Canviar a informe del personal';
$lang['switch_to_staff_report']                 = 'Canviar a informe general';
$lang['generate']                               = 'Generar';
$lang['from_date']                              = 'Des de data';
$lang['to_date']                                = 'Fins a data';
$lang['not_results_found']                      = 'No s\'han trobat resultats';
$lang['lead_lock_after_convert_to_customer']    = 'No permetre l\'edició del potencial després de convertir-lo a client (No aplica als administradors)';
$lang['default_pipeline_sort']                  = 'Ordre pipeline per defecte';
$lang['toggle_full_view']                       = 'Canviar a vista completa';
$lang['not_estimate_invoice_deleted']           = 'Esborrada la factura creada';
$lang['not_task_new_comment']                   = 'comentat en tasca %s';
# Version 1.1.8
$lang['invoice_number_exists']                  = 'Aquest número de factura ja existgeix enguany.';
$lang['estimate_number_exists']                 = 'Aquest número de pressupost ja existeix enguany.';
$lang['email_exists']                           = 'Email ja existeix';
$lang['not_uploaded_project_file']              = 'Nou fitxer carregat';
$lang['not_created_new_project_discussion']     = 'Nou projecte discussió creat';
$lang['not_commented_on_project_discussion']    = 'Nou comentari del projecte discussió';
$lang['all_staff_members']                      = 'Tots el membres del personal';
$lang['help_project_permissions']               = 'La vista permet a tots els membres del personal de veure tots els projectes. Si vols que només puguin veure els projectes als quals estan assignats (afegits com a membres), no els donis permisos de vista.';
$lang['help_tasks_permissions']                 = 'La vista permet als membres del personal de veure totes les tasques. Si vols que només puguin veure les tasques a les quals estan assignat o segueixent, no els donis permisos de vista.';
$lang['expense_recurring_days']                 = 'Dia(es)';
$lang['expense_recurring_weeks']                = 'Setmana(es)';
$lang['expense_recurring_months']               = 'Mes(os)';
$lang['expense_recurring_years']                = 'Any(s)';
$lang['reset_to_default_color']                 = 'Restablir color per defecte';
$lang['pdf_logo_width']                         = 'Amplada del Logo (PX)';
$lang['drop_files_here_to_upload']              = 'Deixa anar fitxers aquí per pujar-los';
$lang['browser_not_support_drag_and_drop']      = 'El seu navegador no permet arrossegar/deixar anar fitxers per pujar-los';
$lang['remove_file']                            = 'Treure fitxer';
$lang['you_can_not_upload_any_more_files']      = 'Ja no pot pujar més fitxer';
$lang['custom_field_only_admin']                = 'Restringir visibilitat només per als administrators';
$lang['leads_default_source']                   = 'Font per defecte';
$lang['clear_activity_log']                     = 'Netejar registre';
$lang['default_contact_permissions']            = 'Permisos contacte per defecte';
$lang['invoice_activity_marked_as_cancelled']   = 'marcar factura com a cancel·lada';
$lang['invoice_activity_unmarked_as_cancelled'] = 'desnmarcar factura com a cancel·lada';
$lang['wait_text']                              = 'Esperi si us plau...';
$lang['projects_summary']                       = 'Resum Projectes';
$lang['dept_imap_host']                         = 'IMAP Host';
$lang['dept_encryption']                        = 'Encriptació';
$lang['dept_email_password']                    = 'Contrasenya';
$lang['dept_email_no_encryption']               = 'Sense Encriptació';
$lang['failed_to_decrypt_password']             = 'No s\ha pogut desencriptar la contrasenya';
$lang['delete_mail_after_import']               = 'Esborrar correu després d\'importar-lo?';
$lang['expiry_reminder_enabled']                = 'Enviar recordatori data caducitat';
$lang['send_expiry_reminder_before']            = 'Enviar recordatori data caducitat abans de (dies)';
$lang['not_expiry_reminder_sent']               = 'Enviat recordatori data caducitat';
$lang['send_expiry_reminder']                   = 'Enviar recordatori data caducitat';
$lang['sent_expiry_reminder_success']           = 'Recordatori data caducitat enviat amb èxit';
$lang['sent_expiry_reminder_fail']              = 'No s\'ha pogut enviar recordatori data caducitat';
$lang['leads_default_status']                   = 'Estat per defecte';
$lang['item_description_placeholder']           = 'Descripció';
$lang['item_long_description_placeholder']      = 'Descripció llarga';
$lang['item_quantity_placeholder']              = 'Quantitat';
$lang['item_rate_placeholder']                  = 'Índex';
$lang['tickets_summary']                        = 'Resum tiquets';
$lang['tasks_list_priority']                    = 'Prioritat';
$lang['ticket_status_db_2']                     = 'En Progrés';
$lang['ticket_status_db_1']                     = 'Obert';
$lang['ticket_status_db_3']                     = 'Respost';
$lang['ticket_status_db_4']                     = 'En espera';
$lang['ticket_status_db_5']                     = 'Tancat';
$lang['ticket_priority_db_1']                   = 'Baixa';
$lang['ticket_priority_db_2']                   = 'Mitjana';
$lang['ticket_priority_db_3']                   = 'Alta';
$lang['customer_have_projects_by']              = 'Conté projectes per estat %s';
$lang['customer_have_proposals_by']             = 'Conté propostes per estat %s';
$lang['do_not_redirect_payment']                = 'No redirigir-me al processador de pagament';
$lang['project_tickets']                        = 'Tiquets';
$lang['invoice_report']                         = 'Informe factures';
$lang['payment_modes_report']                   = 'Modalitats de pagament (Transaccions)';
$lang['customer_admins']                        = 'Administradors Clients';
$lang['assign_admin']                           = 'Assignar administrador';
$lang['customer_admin_date_assigned']           = 'Data Assignat';
$lang['customer_admin_login_as_client_message'] = 'Hola %s. Ha estat afegit com a administrador d\'aquest client.';
$lang['ticket_form_validation_file_size']       = 'El tamany del fitxer ha d\'ésser inferior a %s';
$lang['has_transactions_currency_base_change']  = 'El canvia de la moneda base només es pot fer si no hi ha transaccions registrades en aquesta moneda. Esborri les transaccions per canviar la moneda base';
$lang['customers_sort_all']                     = 'Tots';

# Version 1.1.9
$lang['use_recaptcha_customers_area']    = 'Permetre recaptcha en àrea clients (Login/Register)';
$lang['project_marked_as_finished']      = 'Projecte acomplert';
$lang['project_status_updated']          = 'Estat del Projecte status actualitzat';
$lang['remove_decimals_on_zero']         = 'Treure els decimals als nombres/diner amb zero decimals (2.00 esdevindrà 2, 2.25 romandrà 2.25)';
$lang['remove_tax_name_from_item_table'] = 'Treure el nom de la taxa de la fila de la taula de l\'article (Factures/Pressupostos)';

# Version 1.2.0
$lang['not_billable_expenses_by_categories']      = 'Despeses no facturables per categories';
$lang['billable_expenses_by_categories']          = 'Despeses facturables per categories';
$lang['format_letter_size']                       = 'A4 Paisatge';
$lang['pdf_formats']                              = 'Formats documents';
$lang['swap_pdf_info']                            = 'Intercanviar detalls Empresa/Client (Detalls Empresa a la dreta, detalls client a l\'esquerra)';
$lang['expenses_filter_by_categories']            = 'Per Categories';
$lang['task_copy']                                = 'Copiar';
$lang['estimate_status']                          = 'Estat';
$lang['expenses_report_exclude_billable']         = 'Excloure Despeses facturables';
$lang['expenses_total']                           = 'Total';
$lang['estimate_activity_added_attachment']       = 'Annex afegit';
$lang['show_to_customer']                         = 'Mostrar al client';
$lang['hide_from_customer']                       = 'Amagar al client';
$lang['expenses_report_total']                    = 'Total';
$lang['expenses_report']                          = 'Informe Despeses';
$lang['expenses_report_total_tax']                = 'Total Taxa';
$lang['expenses_detailed_report']                 = 'Informe detallat';
$lang['expense_not_billable']                     = 'No facturable';
$lang['notification_settings']                    = 'Configuració Notificació';
$lang['staff_with_roles']                         = 'Membres del personal amb rols';
$lang['specific_staff_members']                   = 'Membres del personal específics';
$lang['proposal_mark_as']                         = 'Marcar com a %s';
$lang['kb_report_total_answers']                  = 'Total';
$lang['ticket_message_edit']                      = 'Editar';
$lang['invoice_files']                            = 'Fitxers Factura';
$lang['estimate_files']                           = 'Fitxers Pressupost';
$lang['proposal_files']                           = 'Fitxers Proposta';
$lang['invoices_awaiting_payment']                = 'Factures pendents de pagament';
$lang['tasks_not_finished']                       = 'Tascas No completades';
$lang['outstanding_invoices']                     = 'Factures Destacades';
$lang['past_due_invoices']                        = 'Factures vençudes';
$lang['paid_invoices']                            = 'Factures pagades';
$lang['invoice_estimate_year']                    = 'Any';
$lang['task_stats_logged_hours']                  = 'Hores Connectat';
$lang['leads_converted_to_client']                = 'Potencials convertits';
$lang['task_assigned_from']                       = 'Aquesta tasca li ha estat assignada per %s';
$lang['new_note']                                 = 'Nova nota';
$lang['my_tickets_assigned']                      = 'Tiquets assignats a mi';
$lang['filter_by_assigned']                       = 'Per Membre Assignat';
$lang['staff_stats_total_logged_time']            = 'Total Temps Connectat';
$lang['staff_stats_last_month_total_logged_time'] = 'Temps connectat mes anterior';
$lang['staff_stats_this_month_total_logged_time'] = 'Temps connectat aquest mes';
$lang['staff_stats_last_week_total_logged_time']  = 'Temps connectat setmana anterior';
$lang['staff_stats_this_week_total_logged_time']  = 'Temps connectat aquesta setmana';
// Dont change this becuse are translated before for the projects timesheets and now are only used for readibility.
$lang['timesheet_user']       = $lang['project_timesheet_user'];
$lang['timesheet_start_time'] = $lang['project_timesheet_start_time'];
$lang['timesheet_end_time']   = $lang['project_timesheet_end_time'];
$lang['timesheet_time_spend'] = $lang['project_timesheet_time_spend'];
$lang['task_timesheets']      = $lang['project_timesheets'];
$lang['task_log_time_start']  = $lang['project_timesheet_start_time'];
$lang['task_log_time_end']    = $lang['project_timesheet_end_time'];
$lang['task_single_log_user'] = $lang['project_timesheet_user'];
# Version 1.2.2
$lang['milestone_description']                  = 'Descripció';
$lang['description_visible_to_customer']        = 'Mostrar descripció al client';
$lang['upcoming_tasks']                         = 'Tasques imminents';
$lang['payment_credit_card_number']             = 'Número de Targeta';
$lang['payment_credit_card_expiration_date']    = 'Data de caducitat';
$lang['payment_billing_email']                  = 'Email';
$lang['submit_payment']                         = 'Enviar pagament';
$lang['custom_field_disallow_customer_to_edit'] = 'Desautoritzar el client per a editar aquest camp';
$lang['project_due_notice']                     = 'Aquest projecte porta vençut %s dies';
$lang['not_lead_added_attachment']              = 'afegit nou annex al potencial %s';
$lang['lead_note_date_added']                   = 'Nota afegida: %s';
$lang['recurring_custom']                       = 'Client';
// Dont translate these, only added for better readibility already translated for the expenses custom recurring feature.
$lang['invoice_recurring_months'] = $lang['expense_recurring_months'];
$lang['invoice_recurring_years']  = $lang['expense_recurring_years'];
$lang['invoice_recurring_days']   = $lang['expense_recurring_days'];
$lang['invoice_recurring_weeks']  = $lang['expense_recurring_weeks'];

# Version 1.2.4
$lang['document_direction']                                 = 'Direcció';
$lang['notify_project_members_status_change']               = 'Notificar als membres del projecte que n\'ha canviat l\'estat';
$lang['not_project_status_updated']                         = 'Actualitzat l\'estat del Projecte des de %s fins a %s';
$lang['ticket_not_found']                                   = 'No s\'ha trobat el tiquet';
$lang['project_not_found']                                  = 'No s\'ha trobat el Projecte';
$lang['export_project_data']                                = 'Exportar dades projecte';
$lang['total_project_members']                              = 'Total Membres del Projecte';
$lang['total_project_files']                                = 'Arxius adjuntats';
$lang['total_project_discussions_created']                  = 'Discussions creades';
$lang['project_member']                                     = 'Membre';
$lang['total_project_discussions_comments']                 = 'Total comentaris discussió';
$lang['staff_total_task_assigned']                          = 'Total tasques assignades';
$lang['staff_total_comments_on_tasks']                      = 'Comentaris tasques';
$lang['project_members_overview']                           = 'Resum membres projecte';
$lang['project_milestones_overview']                        = 'Resum objectius';
$lang['total_tasks_in_milestones']                          = 'Total tasques assignades';
$lang['total_task_members_assigned']                        = 'Total membres assignats';
$lang['total_task_members_followers']                       = 'Total seguidors';
$lang['total_milestones']                                   = 'Total objectius';
$lang['total_project_worked_days']                          = 'Total dies treballats';
$lang['finance_overview']                                   = 'Resum Finances';
$lang['project_custom_fields']                              = 'Camps a mida';
$lang['total_tickets_related_to_project']                   = 'Total tiquets relacionats amb el projecte';
$lang['projects_total_invoices_created']                    = 'Total factures creades';
$lang['do_not_send_invoice_payment_email_template_contact'] = 'No enviar email de registre pagament fatura als contactes del client';
$lang['no_preview_available_for_file']                      = 'No hi ha vista prèvia d\'aquest arxiu.';
$lang['project_activity_deleted_file_discussion_comment']   = 'Esborrat comentari discussió arxiu';
$lang['email_template_discussion_info']                     = 'Aquesta plantilla s\'usa per ambdós emails comentaris discussió projecte. (discussions fitxers i discussions regulars)';
$lang['format_a4_portrait_size']                            = 'Retrat';
$lang['only_show_contact_tickets']                          = 'En el perfil del client mostrar només tiquets relacionats amb el contacte connectat (No aplica al contacte principal)';
$lang['cancel_overdue_reminders_invoice']                   = 'Impedir l\'enviament de recordatoris de vençuda per aquesta factura';
$lang['customer_shipping_address_notice']                   = 'No omplir informació adreça enviament si no les vol usar en la factura del client';
$lang['timesheets_overview']                                = 'Resum fulls de servei';
$lang['invoice_status_draft']                               = 'Esborrany';
$lang['save_as_draft']                                      = 'Guardar com a esborrany';
$lang['convert_and_save_as_draft']                          = 'Convertir i guardar com a esborrany';
$lang['convert']                                            = 'Convertir';
$lang['exclude_invoices_draft_from_client_area']            = 'Excloure factures amb estat d\'esborrany de l\'àrea de clients';
$lang['invoice_draft_status_info']                          = 'Aquesta factura té l\'estat d\'esborrany, aquest es canviarà automàticament quan enviï la factura al client o la marqui com a enviada.';
$lang['task_info']                                          = 'Informació tasca';
$lang['recurring_tasks']                                    = 'Recurrent';
// Dont translate these, already translated
$lang['task_repeat_every']     = $lang['expense_repeat_every'];
$lang['task_recurring_months'] = $lang['expense_recurring_months'];
$lang['task_recurring_years']  = $lang['expense_recurring_years'];
$lang['task_recurring_days']   = $lang['expense_recurring_days'];
$lang['task_recurring_weeks']  = $lang['expense_recurring_weeks'];

$lang['todays_tasks']                              = 'Tasques d\'avui';
$lang['payment_mode_invoices_only']                = 'Només Factures';
$lang['payment_mode_expenses_only']                = 'Només Despeses';
$lang['task_no_checklist_items_found']             = 'No s\'ha trobat llista ítems per aquesta tasca';
$lang['task_no_description']                       = 'No hi ha descripció per aquesta tasca';
$lang['expenses_reminders']                        = 'Recordatoris';
$lang['expense_set_reminder_title']                = 'Configurar recordatori despeses';
$lang['calendar_expense_reminder']                 = 'Recordatori Despesa';
$lang['recurring_task']                            = 'Tasca Recurrent';
$lang['disable_email_from_being_sent']             = 'Inhabilitar l\'enviament d\'aquest email';
$lang['not_sent_indicator']                        = 'No enviat';
$lang['proposal_status_revised']                   = 'Revisat';
$lang['customer_currency_change_notice']           = 'Si el client fa servir una moneda diferent de la base assegureu-vos de seleccionar la moneda apropiada per aquest client. No es pot canviar la moneda un cop s\'han registrat transaccions.';
$lang['click_to_add_content']                      = 'Clica aquí per afegir-hi contingut';
$lang['related_to_project']                        = 'Aquest %s està relcionat amb %s: %s';
$lang['back_to_lead']                              = 'Tornar a potencial';
$lang['add_task_timer_started_warning']            = 'Aturar el temporitzador iniciat per aquesta tasca per poder-hi afegir nou temporitzador manualment.';
$lang['sending_email_contact_permissions_warning'] = 'No s\'han pogut seleccionar contactes client automàticament. Si us plau, asseguri\'s que el client té contactes associats amb permisos %s';

# Version 1.2.6
$lang['currently_supported_currencies']                       = 'Monedes admeses actualment';
$lang['authorize_notice']                                     = 'Si estàs utilitzant l\'API de pagament Authorize.Net AIM es necessita SSL. Authorize.net només admet 1 moneda per compte. Asseguri\'s d\'afegir només una moneda associada al seu compte Authorize en el camp monedes.';
$lang['settings_paymentmethod_developer_mode']                = 'Mode Desenvolupador';
$lang['payment_cardholder_name']                              = 'Nom del titular de la targeta';
$lang['settings_paymentmethod_authorize_api_login_id']        = 'ID Login API';
$lang['settings_paymentmethod_mollie_api_key']                = 'Clau API';
$lang['settings_paymentmethod_authorize_api_transaction_key'] = 'ID Transacció API';
$lang['settings_paymentmethod_authorize_secret_key']          = 'Clau Secreta';
$lang['leads_report_converted_notice']                        = 'Només s\'agafaran com a potencials convertits els que pertanguin a l\'estat per defecte del Client, si el potencial pertany a l\'estat del client per defecte i no es convertit a client encara es comptarà com a potencial convertit';
$lang['payment_method']                                       = 'Mètode de pagament';
$lang['payment_method_info']                                  = 'Algunes passarel·les de pagament admeten diversos/múltiples mètodes de pagament com ara Targeta de Crèdit, Paypal, Banc.';

# Version 1.2.7
$lang['dropbox_app_key']                                    = 'Clau Dropbox APP';
$lang['project_invoice_select_all_expenses']                = 'Seleccionar totes les despeses';
$lang['role_update_staff_permissions']                      = 'Actualitzar els permisos de tot el personal que està usant aquest rol';
$lang['customer_active']                                    = 'Actiu';
$lang['note_updated_successfully']                          = 'Nota actualitzada amb èxit';
$lang['update_note']                                        = 'Actualitzar nota';
$lang['update_comment']                                     = 'Actualitzar comentari';
$lang['comment_updated_successfully']                       = 'Comentari actualitzat amb èxit';
$lang['staff_send_welcome_email']                           = 'Enviar email benvinguda';
$lang['proposal_warning_email_change']                      = 'Email canviat per %s. Aquest %s està relacionat amb proposta/es. Vol actualitzar tots els emails de proportes relacionats amb %s?';
$lang['update_proposal_email_yes']                          = 'Sí, actualitzar tots els emails relacionats.';
$lang['update_proposal_email_no']                           = 'No, ja ho actualitzaré manualment.';
$lang['proposals_emails_updated']                           = 'Tots els emails propostes relacionats amb aquest %s actualitzats a %s';
$lang['custom_field_company']                               = 'Empresa';
$lang['actions']                                            = 'Accions';
$lang['project_mark_as']                                    = 'Marar com a %s';
$lang['todo_edit_title']                                    = 'Editar item per fer';
$lang['additional_action_required']                         = 'Requereix acció addicional!';
$lang['project_mark_tasks_finished_confirm']                = 'Confirmar';
$lang['project_marked_as_success']                          = 'Projecte marcat com a %s amb èxit';
$lang['project_marked_as_failed']                           = 'No s\'ha pogut marcar projecte com a %s';
$lang['auto_assign_customer_admin_after_lead_convert']      = 'Assignar automàticament client com a admin després de conversió';
$lang['auto_assign_customer_admin_after_lead_convert_help'] = 'Si aquesta opció es configura a SÍ el membre del personal que ha convertit el potencial a client serà assignat automàticament com a admin client. NOTA: Aquesta opció només aplica al personal que no té permís de VISTA clients';
$lang['auto_close_tickets_disable']                         = 'Configurar a 0 per inhabilitar';
$lang['task_checklist_item_completed_by']                   = 'Completat per %s';
$lang['staff_email_signature_help']                         = 'Si està buit s\'usarà la firma d\'email de la configuració per defecte';
$lang['default_task_priority']                              = 'Prioritat per defecte';
$lang['project_send_created_email']                         = 'Enviar email de projecte creat';

# Version 1.2.8
$lang['show_transactions_on_invoice_pdf']            = 'Mostrar pagaments factures (transaccions) en PDF';
$lang['bulk_actions']                                = 'Accions voluminoses';
$lang['additional_filters']                          = 'Filtres addicionals';
$lang['expenses_available_to_bill']                  = 'Despeses dispolnibles per facturar';
$lang['bulk_action_customers_groups_warning']        = 'Si no selecciona algun grup tots els grups assignats als clients seleccionats seran eliminats.';
$lang['customer_attachments_show_in_customers_area'] = 'Mostrar en l\'àrea de clients';
$lang['customer_attachments_show_notice']            = 'Només els arxius pujats des del perfil del client es poden mostrar/amagar en l\'àrea de clients.';
$lang['customer_profile_files']                      = 'Arxius';
$lang['no_files_found']                              = 'No s\'han trobat arxius';
$lang['custom_field_column']                         = 'Quadrícula (grid) (Bootstrap Columna eq. 12) - Màx és 12';
$lang['task_status']                                 = 'Estat';
$lang['task_status_1']                               = 'No Iniciat';
$lang['task_status_2']                               = 'Esperant Feedback';
$lang['task_status_3']                               = 'Provant';
$lang['task_status_4']                               = 'En Progrés';
$lang['task_status_5']                               = 'Complet';
$lang['task_mark_as']                                = 'Marcar com a %s';
$lang['task_marked_as_success']                      = 'Tasca marcada com a %s amb èxit';
$lang['search_tasks']                                = 'Cercar Tasques';
$lang['tasks_kanban_limit']                          = 'Limitar files tasques kan ban per estat';
$lang['show_on_invoice_on_pdf']                      = 'Mostrar %s en Factura PDF';
$lang['show_pay_link_to_invoice_pdf']                = 'Mostrar enllaç pagament Factura al PDF (No aplica si l\'estat de la factura és Cancel·lada)';
$lang['no_leads_found']                              = 'No s\'han trobat potencials';
$lang['created_today']                               = 'Creat Avui';
$lang['total_tasks_deleted']                         = 'Total Tasques Esborrades: %s';
$lang['total_tickets_delete']                        = 'Total Tiquets Esborrats: %s';
$lang['format_letter_portrait']                      = 'Carta Retrat (Letter Portrait)';
$lang['format_letter_landscape']                     = 'Carta Paissatge (Letter Landscape)';
$lang['period_datepicker']                           = 'Període';
$lang['total_by_hourly_rate']                        = 'Total preu hora';
$lang['staff_hourly_rate']                           = $lang['task_hourly_rate'];
// &#37; is for % so the system can confuse for the original fields like %s
$lang['remove_tax_name_from_item_table_help'] = 'p. ex. Ítem TAXA 15&#37; es mostrarà 15&#37; sense el nom de la taxa (No aplica si hi ha múltiples taxes amb els mateix nom i tant per cent per ítem)';
$lang['back_to_project']                      = 'Tornar a Projecte';
$lang['view_kanban']                          = 'Vista Kan Ban';
$lang['invoice_is_overdue']                   = 'Aquesta factura fa %s dies que ha vençut';

# Version 1.2.9
$lang['time_decimal']                            = 'Hora (decimal)';
$lang['time_h']                                  = 'Hora (h)';
$lang['proposal_number_prefix']                  = 'Prefix Número Proposta';
$lang['settings_number_padding_prefix']          = 'Nombre de dígits total a completar amb zeros a l\'esquerra si escau <br /><small>p. ex. Si el valor és 3 el número tindrà el format: 005 o 025</small>';
$lang['this_week_payments']                      = 'Pagaments d\'aquesta setmana';
$lang['last_week_payments']                      = 'Pagaments setmana anterior';
$lang['not_published_new_post']                  = 'publicada nova notícia';
$lang['expense_name']                            = 'Nom';
$lang['expense_name_help']                       = 'Per a ús personal';
$lang['adjustments']                             = 'Modificacions';
$lang['payments_received']                       = 'Pagaments Rebuts';
$lang['not_lead_activity_created_proposal']      = 'Creada nova proposta - %s';
$lang['lead_title']                              = 'Posició';
$lang['lead_address']                            = 'Adreça';
$lang['lead_city']                               = 'Població';
$lang['lead_state']                              = 'Comunitat';
$lang['lead_country']                            = 'País';
$lang['lead_zip']                                = 'Codi postal';
$lang['lead_is_public_yes']                      = 'Sí';
$lang['lead_is_public_no']                       = 'No';
$lang['lead_info']                               = 'Informacions potencial';
$lang['lead_general_info']                       = 'Informació general';
$lang['lead_latest_activity']                    = 'Activitat recent';
$lang['item_description_new_lines_notice']       = 'No es disposa de més línies per a la descripció de l\'ítem. És millor que usi la descripció d\'ítem llarga.';
$lang['estimates_report']                        = 'Informe pressupostos';
$lang['confirm']                                 = 'Confirmar';
$lang['delete_staff']                            = 'Esborrar membre del personal';
$lang['delete_staff_info']                       = 'Some data for this staff member needs to be transfered to another user. Please select user where you want to transfer the data.';
$lang['estimate_items']                          = 'Ítems Pressupost';
$lang['no_proposals_found']                      = 'No s\'han trobat Propostes';
$lang['no_estimates_found']                      = 'No s\'han trobat Pressupostos';
$lang['pipeline_limit_status']                   = 'Limitar Pipeline per estat';
$lang['settings_update']                         = 'Actualització del Sistema';
$lang['purchase_key']                            = 'Clau de compra';
$lang['update_now']                              = 'Actualitzar ara';
$lang['update_available']                        = 'Hi ha una actualització disponible';
$lang['latest_version']                          = 'Última Versió';
$lang['your_version']                            = 'La seva Versió';
$lang['using_latest_version']                    = 'Està usant l\'última versió';
$lang['mark_as_active']                          = 'Marcar com a activa';
$lang['customer_inactive_message']               = 'Aquest és un perfil de client inactiu i algunes característiques poden estar deshabilitades';
$lang['active_customers']                        = 'Clients Actius';
$lang['inactive_active_customers']               = 'Clients Inactius';
$lang['include_proposal_items_merge_field_help'] = 'Incloure ítems proposta amb camp fusió a qualsevol lloc del contingut proposta com a %s';
$lang['all_data_synced_successfully']            = 'S\'han sincronitzat totes les dades amb èxit';
$lang['sync_now']                                = 'Sincronitzar ara';
$lang['sync_data']                               = 'Sincronitzar dades';
$lang['sync_proposals_up_to_date']               = 'Totes les propostes estan actualitzades, no hi ha res per sincronitzar';
$lang['proposal_sync_1_info']                    = 'Un cop creades, totes les dades de cada proposta s\'arxiven per separat. Actualitzar la info %s no afectarà les propostes per aquest %s creades prèviament.';
$lang['proposal_sync_2_info']                    = 'Si ha actualitzat recentment la seva info %s pot sincronitzar totes les dades noves de les propostes associades. Aquí hi ha una llista de camps que pot sincronitzar.';

# Version 1.3.0
$lang['expense_include_additional_data_on_convert'] = 'Incloure detalls addicionals a la descripció llarga de l\'ítem pres d\'aquesta despesa.';

# Version 1.4.0
$lang['calendar_events_limit']                              = 'Calendari Límit Esdeveniments (Vista Mensual i Setmanal)';
$lang['show_page_number_on_pdf']                            = 'Mostrar número de pàgina en el PDF';
$lang['customer_active_inactive_help']                      = 'No es mostarà als desplegables en crear nous registres';
$lang['item_groups']                                        = 'Grups';
$lang['item_group']                                         = 'Grup Ítem';
$lang['item_group_name']                                    = 'Nom Grup';
$lang['new_item_group']                                     = 'Nou Grup';
$lang['show_setup_menu_item_only_on_hover']                 = 'Mostrar ítem menú configuració només en passar ratolí pel cim de l\'àrea de la barra lateral principal';
$lang['internal_article']                                   = 'Article Intern';
$lang['expenses_created_from_this_recurring_expense']       = 'Despeses creades d\aquesta despesa recurrent';
$lang['convert_to_task']                                    = 'Convertir a Tasca';
$lang['next_invoice_date']                                  = 'Data pròxima factura: %s';
$lang['next_expense_date']                                  = 'Data pròxima despesa: %s';
$lang['invoice_recurring_from']                             = 'Aquesta factura ha estat creada de factura recurrent amb número: %s';
$lang['expense_recurring_from']                             = 'Aquesta despesa ha estat creada de la següent despesa recurrent: %s';
$lang['child_invoices']                                     = 'Factures filles';
$lang['child_expenses']                                     = 'Despeses filles';
$lang['no_announcements']                                   = 'Sense declaracions';
$lang['unit']                                               = 'Unitat';
$lang['permission_view_own']                                = 'Vista (Pròpia)';
$lang['permission_global']                                  = 'Global';
$lang['permission_customers_based_on_admins']               = 'Basat en admins client';
$lang['permission_payments_based_on_invoices']              = 'Basat en persmís VISTA (pròpia)';
$lang['permission_projects_based_on_assignee']              = 'Si el membre del personal no té permís de VISTA (Global) només se li mostraran projectes on se l\hagi afegit com a membre.';
$lang['permission_tasks_based_on_assignee']                 = 'Si el membre del personal no té permís de VISTA (Global) només se li mostraran tasques que estigui seguint, assignat, la tasca sigui pública o a Configuració->Configuració->Tasques->Permetre que tot el personal pugui veure totes les tasques relacionades amb projectes estigui establert a SÍ quan la tasca estigui vinvulada al projecte.';
$lang['settings_paymentmethod_default_selected_on_invoice'] = 'Seleccionat per defecte a factura';
$lang['paymentmethod_braintree_merchant_id']                = 'ID Venedor';
$lang['paymentmethod_braintree_private_key']                = 'Clau Privada';
$lang['paymentmethod_braintree_public_key']                 = 'Clau Pública';
$lang['company_requires_vat_number_field']                  = 'Empresa requereix l\ús del camp Número IVA';
$lang['no_company_view_profile']                            = 'Persona - Veure Perfil';
$lang['company_is_required']                                = 'Es requereix camp Empresa?';
$lang['estimate_invoiced']                                  = 'Facturat';
$lang['file_date_uploaded']                                 = 'Data Pujada';
$lang['allow_contact_to_delete_files']                      = 'Permetre als contactes esborrar arxius propis pujats des de l\àrea de clients';
$lang['file']                                               = 'Arxiu';
$lang['customer_contact_person_only_one_allowed']           = 'Quan el camp Empresa està buit només es permet 1 contacte. El sistema seleccionarà aquest client com a persona';
$lang['web_to_lead']                                        = 'Web a Potencial';
$lang['web_to_lead_form']                                   = 'Web a Formulari Potencial';
$lang['new_form']                                           = 'Nou Formulari';
$lang['form_name']                                          = 'Nom Formulari';
$lang['cf_option_in_use']                                   = 'Una opció que has tret s\'està usant i no es pot treure. L\'opció és autoannexar-la a les opcions existents.';
$lang['form_builder']                                       = 'Constructor de Formularis';
$lang['form_information']                                   = 'Formulari Informacions i Configuració';
$lang['form_builder_create_form_first']                     = 'Per poder usar el constructor de formularis primer heu de crear formulari .';
$lang['notify_assigned_user']                               = 'Persona responsable';
$lang['form_recaptcha']                                     = 'Usar Google Recaptcha';
$lang['form_lang_validation']                               = 'Llenguatge';
$lang['form_lang_validation_help']                          = 'Missatges Validació';
$lang['form_btn_submit_text']                               = 'Text botó Enviar';
$lang['form_success_submit_msg']                            = 'Missatge per mostrar després que s\'hagi enviat amb èxit el formulari';
$lang['total_submissions']                                  = 'Total Enviaments';
$lang['form_integration_code']                              = 'Codi Integració';
$lang['not_lead_imported_from_form']                        = 'Nou Potencial importat des del Formulari Web a Potencial - %s';
$lang['not_lead_activity_log_attachment']                   = 'Adjunts importats des de formulari - %s';
$lang['form_integration_code_help']                         = 'Copiar i Enganxar el codi a qualsevol lloc del vostre web per a mostrar el formulari, a més podeu ajustar els px d\'amplada i d\'altura px perquè encaixi en el vostre lloc web.';
$lang['invoice_not_found']                                  = 'Factura no trobada';
$lang['estimate_not_found']                                 = 'Pressupost no trobat';
$lang['expense_not_found']                                  = 'Despesa no trobada';
$lang['proposal_not_found']                                 = 'Proposta no trobada';
$lang['new_task_assigned_non_user']                         = 'Nova tasca que se t\'ha assignat - %s';
$lang['no_child_found']                                     = 'No s\'ha trobat cap Fill %s';
$lang['company_vat_number']                                 = 'Número IVA';
$lang['not_lead_assigned_from_form']                        = 'Nou Potencial que se t\'ha assignat';
$lang['not_lead_activity_assigned_from_form']               = 'Potencial assignat a %s';
$lang['form_allow_duplicate']                               = 'Permetre inserir duplicat %s a la base de dades?';
$lang['track_duplicate_by_field']                           = 'Evitar duplicat en el camp';
$lang['and_track_duplicate_by_field']                       = '+ camp (deixar en blanc per seguir duplicats només per 1 camp)';
$lang['create_the_duplicate_form_data_as_task']             = 'Crear duplicat dades %s com a tasca i assignar a membre personal responsable';
$lang['create_the_duplicate_form_data_as_task_help']        = 'Usat per repassar més a fons l\'enviament i prendre l\'acció necessària';
$lang['currently_selected']                                 = 'Seleccionat actualment';
$lang['search_ajax_empty']                                  = 'Seleccionar i començar a escriure';
$lang['search_ajax_placeholder']                            = 'Escriu per a cercar...';
$lang['search_ajax_searching']                              = 'Cercant...';
$lang['search_ajax_initialized']                            = 'Començar a exciure per a cercar';
$lang['lead_description']                                   = 'Descriptció';
$lang['lead_website']                                       = 'Lloc Web';
$lang['invoice_activity_auto_converted_from_estimate']      = 'Factura autocreada des de pressupost amb número %s';
$lang['hour_of_day_perform_auto_operations']                = 'Hora del dia per dur a terme operacions automàtiques';
$lang['hour_of_day_perform_auto_operations_format']         = 'Format 24 hores exemple: 9 per 9 del matí o 15 per 3 de la tarda';
$lang['inv_hour_of_day_perform_auto_operations_help']       = 'Usat per a factures recurrents, avisos de factures vençudes, etc..';
$lang['use_minified_files']                                 = 'Usar versió reduïda d\'arxius per a css i js (només arxius de sistema)';

# Version 1.5.0
$lang['logo_favicon_changed_notice']       = 'Detectat canvi de Logo o Favicon. Si encara veu el logo CRM original provi de buidar la memòria cau';
$lang['kb_search_articles']                = 'Cercar articles a la base de dades';
$lang['kb_search']                         = 'Cercar';
$lang['have_a_question']                   = 'Té alguna pregunta?';
$lang['card_expiration_year']              = 'Data venciment';
$lang['card_expiration_month']             = 'Mes venciment';
$lang['client_website']                    = 'Lloc Web';
$lang['search_project_members']            = 'Cercar membres del projecte...';
$lang['cf_translate_input_link_title']     = 'Títol';
$lang['cf_translate_input_link_url']       = 'URL';
$lang['cf_translate_input_link_tip']       = 'Clicar aquí per afegir un enllaç';
$lang['task_edit_delete_timesheet_notice'] = 'L\'horari de la tasca és %s, no pot %s l\'horari.';
$lang['department_username']               = 'Usuari IMAP';
$lang['department_username_help']          = 'Només ha d\'omplir aquest camp si el seu servidor IMAP usa nom d\'usuari per connectar-si en comptes de l\'adreça email. Tingui en compte que de totes maneres hi haurà d\'afegir l\'adreça email.';
$lang['total_tickets_deleted']             = 'Total tiquets esborrats: %s';

# Version 1.5.1
$lang['ticket_linked_to_project']                                = 'Aquest tiquet està vinculat a un projecte: %s';
$lang['only_own_files_contacts']                                 = 'Els contactes només veuen els arxius propis que han pujat a l\'àrea de clients (arxius pujats al perfil del client)';
$lang['only_own_files_contacts_help']                            = 'Si comparteix l\'arxiu manualment des del perfil de client amb altres contactes aquests podran veure l\'arxiu.';
$lang['share_file_with']                                         = 'Compartir arxiu amb';
$lang['file_share_visibility_notice']                            = 'Aquest arxiu no està compartit amb contactes, tornar a canviar a visibilitat per recarregar';
$lang['share_file_with_show']                                    = 'Aquest arxiu està compartit amb: %s';
$lang['allow_primary_contact_to_view_edit_billing_and_shipping'] = 'Permetre que el contacte principal degi/editi detalls facturació i enviament';
$lang['estimate_due_after']                                      = 'El pressupost venç passats (dies)';

# Version 1.6.0
$lang['my_timesheets']                                   = 'Els meus horaris';
$lang['today']                                           = 'Avui';
$lang['open_in_dropbox']                                 = 'Obrir a Dropbox';
$lang['show_primary_contact']                            = 'Mostrar nom complet del contacte principal a %s';
$lang['view_members_timesheets']                         = 'Veure tots els horaris';
$lang['priority']                                        = 'Prioritat';
$lang['fetch_from_google']                               = 'Anar a cercar a google';
$lang['customer_fetch_lat_lng_usage']                    = 'Omplir adreça, població i país abans d\'anar a cercar per a obtenir millor resultat.';
$lang['g_search_address_not_found']                      = 'No s\'ha pogut trobar l\'adreça, ho torni a provar si us plau';
$lang['proposals_report']                                = 'Informe Propostes';
$lang['staff_members_open_tickets_to_all_contacts_help'] = 'Si el membre del personl no té permís de VISTA clients només podrà crear tiquets nous a l\'àrea d\'administració a contactes client on estigui assignat com a administrador client.';
$lang['staff_members_open_tickets_to_all_contacts']      = 'Permetre als membres del personal obrir tiquets a tots els contactes?';
$lang['charts_based_report']                             = 'Informe basat en gràfics';
$lang['responsible_admin']                               = 'Administrador responsable';
$lang['tags']                                            = 'Etiquetes';
$lang['tag']                                             = 'Etiqueta';
$lang['customer_map_notice']                             = 'Afegir longitud i lalitud en el perfil de client per mostrar el mapa aquí';
$lang['default_view']                                    = 'Vista per defecte';
$lang['day']                                             = 'Dia';
$lang['agenda']                                          = 'Agenda';
$lang['timesheet_tags']                                  = 'Etiquetes horari';
$lang['show_more']                                       = 'Mostrar-ne més';
$lang['show_less']                                       = 'Mostrar-ne menys';
$lang['project_completed_date']                          = 'Data completada';
$lang['language']                                        = 'Llengua';
$lang['this_week']                                       = 'Aquesta setmana';
$lang['last_week']                                       = 'Setmana anterior';
$lang['this_month']                                      = 'Aquest mes';
$lang['last_month']                                      = 'Mes anterior';
$lang['no_description_project']                          = 'No hi ha descripció per aquest projecte';
$lang['sales_string']                                    = 'Vendes';
$lang['no_project_members']                              = 'No hi ha membres per aquest projecte';
$lang['search_by_tags']                                  = 'Usi # + nom etiqueta per a cercar per etiquetes';
$lang['project_status_5']                                = 'Cancel·lat';

# Version 1.7.0
$lang['not_activity_new_reminder_created']        = 'establir nou recordatori per %s amb data %s';
$lang['not_activity_new_task_created']            = 'Nova tasca creada - %s';
$lang['recurring_invoice_draft_notice']           = 'L\'estat d\'aquesta factura és esborrany, heu de marcar-la com a enviada. Les factures recurrents amb estat esborrany no seran recreades pel cron job.';
$lang['recurring_recreate_hour_notice']           = '%s seran recreades a l\'hora específica del dia d\'acord amb la configuració de Setup->Settings-Cron Job';
$lang['invoice_project_include_timesheets_notes'] = 'Incloure cada nota horari en la descripció articles';
$lang['events']                                   = 'Esdeveniments';
$lang['clear']                                    = 'Clear';
$lang['auto_mark_as_public']                      = 'Automarcar com a públic';
$lang['time_format']                              = 'Format hora';
$lang['time_format_24']                           = '24 hores';
$lang['time_format_12']                           = '12 hores';
$lang['delete_activity_log_older_then']           = 'Esborrar registre activitat sistema de més de X mesos';
$lang['mark_as_read']                             = 'Marcar com a llegit';
$lang['mark_all_as_read']                         = 'Marcar-ho tot com a llegit';
$lang['tax_1']                                    = 'Taxa 1';
$lang['tax_2']                                    = 'Taxa 2';
$lang['total_with_tax']                           = 'Total amb taxa';
$lang['new_task_auto_assign_current_member']      = 'Autodissenyar creador de tasca quan es creï una tasca nova';
$lang['new_task_auto_assign_current_member_help'] = 'No s\'aplica si la tasca està lligada al projecte i el seu creador no és un membre del projecte';
$lang['copy_project_tasks_status']                = 'Estats de les tasques';
$lang['tasks_summary']                            = 'Resum de les tasques';
$lang['vault']                                    = 'Vault';
$lang['new_vault_entry']                          = 'New Vault Entry';
$lang['server_address']                           = 'Adreça del servidor';
$lang['port']                                     = 'Port';
$lang['vault_username']                           = 'Usuari';
$lang['vault_password']                           = 'Contrasenya';
$lang['vault_description']                        = 'Descripció curta';
$lang['vault_entry']                              = 'Vault Entry';
$lang['no_port_provided']                         = 'No proporcionat';
$lang['view_password']                            = 'Veure contrasenya';
$lang['security_reasons_re_enter_password']       = 'Per raons de seguretat, si us plau, entreu la contrasenya';
$lang['password_change_fill_notice']              = 'Ompliu el camp contrasenya només si la voleu canviar';
$lang['vault_password_user_not_correct']          = 'Contrasenya incorrecta, torneu a provar si us plau';
$lang['no_vault_entries']                         = 'No hi ha entrades Vault per aquest client.';
$lang['vault_entry_created_from']                 = 'Aquesta entrada vault l\'ha creat %s';
$lang['vault_entry_last_update']                  = 'Última actualització per %s';
$lang['vault_entry_visible_to_all']               = 'Visible a tot el personal que té accés a aquest client';
$lang['vault_entry_visible_creator']              = 'Visible només per mi (no exclou l\'administrador)';
$lang['vault_entry_visible_administrators']       = 'Visible només als administradors';
$lang['my_reminders']                             = 'Els meus recordatoris';
$lang['reminder_related']                         = 'Relacionat amb';
$lang['event_notification']                       = 'Notificació';
$lang['days']                                     = 'Dies';
$lang['reminder_notification_placeholder']        = 'Eq. 30 minuts abans';
$lang['event_color']                              = 'Color esdeveniment';
$lang['group_by_task']                            = 'Agrupar segons tasca';
$lang['save']                                     = 'Desar';
$lang['disable_languages']                        = 'Deshabilitar idiomes';

# Version 1.8.0
$lang['not_customer_viewed_invoice']                         = 'S\'ha vist una factura amb número %s';
$lang['not_customer_viewed_estimate']                        = 'S\'ha vist un pressupost amb número %s';
$lang['not_customer_viewed_proposal']                        = 'S\'ha vist una oferta amb número %s';
$lang['display_inline']                                      = 'Display Inline';
$lang['email_header']                                        = 'Capçalera predefinida';
$lang['email_footer']                                        = 'Peu de pàgina predefinit';
$lang['exclude_proposal_from_client_area_with_draft_status'] = 'Excloure ofertes amb estat d\'esborrany de l\'àrea de clients';
$lang['pusher_app_key']                                      = 'APP Key';
$lang['pusher_app_secret']                                   = 'APP Secret';
$lang['pusher_app_id']                                       = 'APP ID';
$lang['pusher_cluster_notice']                               = 'Leave blank to use default pusher cluster.';
$lang['pusher_enable_realtime_notifications']                = 'Habilitar notificacions en temps real';
$lang['task_is_overdue']                                     = 'Aquesta tasca ja ha vençut';
$lang['this_year']                                           = 'Aquest any';
$lang['last_year']                                           = 'L\'any passat';
$lang['customer_statement']                                  = 'Extracte';
$lang['customer_statement_for']                              = 'Extracte client per a %s';
$lang['account_summary']                                     = 'Resum compte';
$lang['statement_beginning_balance']                         = 'Començament balanç';
$lang['invoiced_amount']                                     = 'Import facturat';
$lang['amount_paid']                                         = 'Import pagat';
$lang['statement_from_to']                                   = '%s a %s';
$lang['customer_statement_info']                             = 'Mostrant totes les factures i pagaments entre %s i %s';
$lang['balance_due']                                         = 'Saldo deutor';
$lang['statement_heading_date']                              = 'Data';
$lang['statement_heading_details']                           = 'Detalls';
$lang['statement_heading_amount']                            = 'Import';
$lang['statement_heading_payments']                          = 'Pagaments';
$lang['statement_heading_balance']                           = 'Balanç';
$lang['statement_invoice_details']                           = 'Factura %s - venç el %s';
$lang['statement_payment_details']                           = 'Pagament (%s) de factura %s';
$lang['statement_bill_to']                                   = 'A';
$lang['send_to_email']                                       = 'Enviar per Email';
$lang['statement_sent_to_client_success']                    = 'Extracte enviat al client';
$lang['statement_sent_to_client_fail']                       = 'Problema en enviar extracte';
$lang['view_account_statement']                              = 'Mostrar extracte compte';
$lang['text_not_recommended_for_servers_limited_resources']  = 'No es recomana si el servidor té pocs recursos. Per exemple hosting compartit';
$lang['tasks_bull_actions_assign_notice']                    = 'Si la tasca està vinculada al projecte i el membre del personal a qui estàs assignant la tasca no n\'és membre se li afegirà automàticament.';
$lang['company_information']                                 = 'Informació de l\'empresa';
$lang['ticket_form']                                         = 'Tiquet';
$lang['ticket_form_subject']                                 = 'Assumpte';
$lang['ticket_form_name']                                    = 'Nom';
$lang['ticket_form_email']                                   = 'Email';
$lang['ticket_form_department']                              = 'Departament';
$lang['ticket_form_message']                                 = 'Missatge';
$lang['ticket_form_priority']                                = 'Prioritat';
$lang['ticket_form_service']                                 = 'Servei';
$lang['ticket_form_submit']                                  = 'Enviar';
$lang['ticket_form_attachments']                             = 'Annexos';

$lang['success_submit_msg']                       = 'Gràcies per contactar-nos. En breu li respondrem.';
$lang['vault_entry_share_on_projects']            = 'Compartir aquesta entrada vault en projectes amb membres projecte';
$lang['project_shared_vault_entry_login_details'] = 'Mostrar detalls inici sessió web client';
$lang['iso_code']                                 = 'Codi ISO';
$lang['estimates_not_invoiced']                   = 'No facturat';
$lang['show_on_ticket_form']                      = 'Mostrar en el tiquet';
$lang['cancel_upload']                            = 'Cancel·lar pujada';
$lang['show_table_export_button']                 = 'Mostrar botó exportar taula';
$lang['show_table_export_all']                    = 'A tot el personal';
$lang['show_table_export_admins']                 = 'Solament als administradors';
$lang['show_table_export_hide']                   = 'Amagar botó exportar a tot el personal';
$lang['task_created_by']                          = 'Creat per %s';
$lang['validation_extension_not_allowed']         = 'Extensió arxiu no permesa';
$lang['allow_staff_view_proposals_assigned']      = 'Permetre al personal veure ofertes en les que hi estan assignats';
$lang['task_users_working_on_tasks_multiple']     = 'En aquest moment %s estan treballant en aquesta tasca';
$lang['task_users_working_on_tasks_single']       = 'En aquest moment %s està treballant en aquesta tasca';

# Version 1.9.0
$lang['estimated_hours']                               = 'Hores estimades';
$lang['two_factor_auth_failed_to_send_code']           = 'Ha fallat l\'enviament del codi d\'autenticació de dos passos a l\'email, la configuració SMTP no deu estar bé';
$lang['two_factor_auth_code_sent_successfully']        = 'S\'ha enviat un email a %s amb un codi per verificar el vostre login';
$lang['enable_two_factor_authentication']              = 'Habilitar Autenticació de dos Factors';
$lang['two_factor_authentication_info']                = 'Autenticació de dos factors provista per email, abans d\'habilitar-la assegureu-vos que la configuració SMTP és correcta i que el sistema pot enviar emails. S\'enviarà una clau d\'autenticació única per email quan feu login.';
$lang['timesheets_overview_all_members_notice_admins'] = 'El resum horaris per a tot el personal solament és vsible per als administradors.';
$lang['two_factor_authentication']                     = 'Autenticació de dos factors';
$lang['two_factor_authentication_code']                = 'Codi';
$lang['admin_two_factor_auth_heading']                 = 'Codi autenticació';
$lang['two_factor_code_not_valid']                     = 'Codi autenticació no vàlid';
$lang['back_to_login']                                 = 'Tornar a login';
$lang['enter_activity']                                = 'Entrar activitat';
$lang['attach_files']                                  = 'Adjuntar fitxers';
$lang['no_tags_used']                                  = 'Cap etiqueta usada pel sistema';
$lang['exclude_completed_tasks']                       = 'Excloure tasques acomplertes';
$lang['modal_width_class']                             = 'Classe amplada modal';
$lang['contract_copy']                                 = 'Copiar';
$lang['contract_copied_successfully']                  = 'Contracte copiat amb èxit';
$lang['contract_copied_fail']                          = 'No s\'ha pogut copiar el contracte';
$lang['project_marked_as_finished_to_contacts']        = 'Enviar email <b>Projecte marcat com a acabat</b> a contactes client';
$lang['only_admins']                                   = 'Solament administradors';
$lang['new_notification']                              = 'Nova notificació!';
$lang['enable_desktop_notifications']                  = 'Habilitar notificacions escriptori';
$lang['save_and_send']                                 = 'Guardar i enviar';
$lang['private']                                       = 'Privat';
$lang['task_created_at']                               = 'Creat a %s';
$lang['hide_notified_reminders_from_calendar']         = 'Amagar del calendari recordatoris notificats';
$lang['last_active']                                   = 'Última activació';
$lang['open_ticket']                                   = 'Tiquet obert';
$lang['task_add_description']                          = 'Afegir Descripció';
$lang['project_setting_create_tasks']                  = 'crear tasques';
$lang['project_setting_edit_tasks']                    = 'editar tasques (solament tasques creades pel contacte)';


# Version 1.9.2
$lang['items_report']                            = 'Informe productes';
$lang['reports_item']                            = 'Producte';
$lang['quantity_sold']                           = 'Quantitat venuda';
$lang['total_amount']                            = 'Import total';
$lang['avg_price']                               = 'Mitjana preu';
$lang['item_report_paid_invoices_notice']        = 'Informe productes solament es genera de factures pagades abans de descomptes i taxes';
$lang['overview']                                = 'Resum';
$lang['timer_started_change_status_in_progress'] = 'Canviar estat tasca a En Progres en temporitzador iniciat (solament aplica si estat tasca és No Iniciada)';
$lang['company_info_format']                     = 'Format Informació Empresa (PDF i HTML)';
$lang['customer_info_format']                    = 'Format Informació Client (PDF i HTML)';
$lang['custom_field_info_format_embed_info']     = 'Camps personalitzats per a %s es poden incrustar fàcilment en documents PDF i HTML mitjançant afegir els camps fusionats en el format de pàgina a la pàgina següent: %s';
$lang['transfer_lead_notes_to_customer']         = 'Transferir notes principals a perfil client';
$lang['authorized_signature_text']               = 'Signatura autoritzada';
$lang['show_pdf_signature_invoice']              = 'Mostrar Signatura PDF en Factura';
$lang['show_pdf_signature_estimate']             = 'Mostrar Signatura PDF en Pressupost';
$lang['signature']                               = 'Signatura';
$lang['signature_image']                         = 'Imatge Signatura';
$lang['insert_checklist_templates']              = 'Inserir plantilles llista de verificació';
$lang['save_as_template']                        = 'Guarda com a plantilla';
$lang['invoice_item_add_edit_rate_currency']     = 'Taxa - %s';
$lang['total_files_deleted']                     = 'Total arxius esborrats: %s';
$lang['invalid_transaction']                     = 'Transacció invàlida. Torneu a provar si us plau.';
$lang['payment_gateway_payu_money_key']          = 'PayU Money Key';
$lang['payment_gateway_payu_money_salt']         = 'PayU Money Salt';
$lang['settings_paymentmethod_description']      = 'Descripció pagament panell porta entrada';

# Version 1.9.3
$lang['default_ticket_reply_status']          = 'Estat per defecte seleccionat en respondre tiquet';
$lang['ticket_add_response_and_back_to_list'] = 'Tornar a llista tiquet després d\'enviar resposta';

# Version 1.9.4
$lang['default_task_status']                               = 'Estat per defecte quan s\'ha creat nova tasca';
$lang['custom_field_pdf_html_help']                        = 'Assegura\'t de comprovar el camp ' . $lang['custom_field_show_on_client_portal'] . ' si vols que els camps a mida siguin visibles a l\'àrea de clients i quan el client descarregui PDF o rebi PDF via email.';
$lang['auto']                                              = 'Auto';
$lang['email_queue']                                       = 'Cua Email';
$lang['email_queue_enabled']                               = 'Activar cua Email';
$lang['email_queue_skip_attachments']                      = 'No afegir emails amb adjunts a la cua.';
$lang['disable']                                           = 'Desactivar';
$lang['enable']                                            = 'Activar';
$lang['auto_dismiss_desktop_notifications_after']          = 'Desactiva automàticament les notificacions d\'escriptori passats X segons (0 per a desactivar)';
$lang['proposal_info_format']                              = 'Format Info Proposta (PDF i HTML)';
$lang['hide_tasks_on_main_tasks_table']                    = 'Amaga les tasques del projecte a la taula principal de tasques (àrea admin.)';
$lang['ticket_replies_order']                              = 'Ordre respostes tiquet';
$lang['ticket_replies_order_notice']                       = 'El missatge inicial del tiquet sempre es mostrarà com a primer.';
$lang['invoice_cancelled_email_disabled']                  = 'Factura cancel·lada. Desmarca cancel·lada per a activar email a client';
$lang['email_notifications']                               = 'Notificacions Email';
$lang['invoice_activity_record_payment_email_to_customer'] = 'Pagament registrat, email enviat a: %s';
$lang['exclude_inactive']                                  = 'Excloure Inactiu';
$lang['disable_all']                                       = 'Disactivar-ho tot';
$lang['enable_all']                                        = 'Actiar-ho tot';
$lang['reccuring_invoice_option_gen_and_send']             = 'Generar i enviar automàticament la factura renovada al client';
$lang['reccuring_invoice_option_gen_unpaid']               = 'Generar una factura impagada';
$lang['reccuring_invoice_option_gen_draft']                = 'Generar una factura a Factura Esborrany';
$lang['event_created_by']                                  = 'Aquest esdeveniment ha estat creat per %s';

# Version 1.9.5
$lang['customers_assigned_to_me']              = 'Clients que tinc assignats';
$lang['bcc_all_emails']                        = 'Ccòpia oculta de tots els Emails a';
$lang['confirmation_of_identity']              = 'Confirmació d\'Identitat';
$lang['accept_identity_confirmation']          = 'Demana confirmació d\'identitat en acceptar';
$lang['accepted_identity_info']                = 'Aquest %s s\'ha acceptat per %s a %s des d\adreça IP %s';
$lang['clear_this_information']                = 'Esborra aquesta informació';
$lang['new_task_auto_follower_current_member'] = 'Afegir automàticament el creador de la tasca com a seguidor de la tasca quan es crea una nova tasca';
$lang['expenses_report_net']                   = 'Import net (Subtotal)';
$lang['expense_field_billable_help']           = 'Si és facturable, %s es pot afegir a la descripció llarga de la factura.';
$lang['task_biillable_checked_on_creation']    = 'L\'opció Facturable està marcada per defecte quan es crea una nova tasca?';
$lang['pause_overdue_reminders']               = 'Pausa Recordatoris Vençuts';
$lang['resume_overdue_reminders']              = 'Reprendre Recordatoris Vençuts';

# Credit Notes
$lang['credit_notes']                                            = 'Notes de Crèdit';
$lang['credit_note']                                             = 'Nota de Crèdit';
$lang['credit_note_lowercase']                                   = 'nota de crèdit';
$lang['credit_note_not_found']                                   = 'No s\'ha trobat nota de crèdit';
$lang['credit_note_date']                                        = 'Data Nota de Crèdit';
$lang['credit_date']                                             = 'Data';
$lang['settings_sales_next_credit_note_number']                  = 'Següent Número de Nota de Crèdit';
$lang['credit_note_number_prefix']                               = 'Prefix Número Nota de Crèdit';
$lang['credit_note_number']                                      = 'Nota de Crèdit #';
$lang['credit_note_number_exists']                               = 'El número de Nota de Crèdit ja existeix';
$lang['show_shipping_on_credit_note']                            = 'Mostrar detalls enviament a la nota de crèdit';
$lang['credit_note_number_decrement_on_delete']                  = 'Disminuir número nota de crèdit en esborrar-la.';
$lang['credit_note_number_decrement_on_delete_help']             = 'Solament disminuirà el número si és l\'última nota de reèdit creada.';
$lang['credit_note_status']                                      = 'estat';
$lang['credit_note_status_open']                                 = 'obert';
$lang['credit_note_status_closed']                               = 'tancat';
$lang['credit_note_status_void']                                 = 'nul';
$lang['credit_note_mark_as_open']                                = 'Marcar com Obert';
$lang['new_credit_note']                                         = 'Nova nota de crèdit';
$lang['credit_note_amount']                                      = 'Import';
$lang['credit_note_remaining_credits']                           = 'Import pendent';
$lang['credit_note_client_note']                                 = 'Nota';
$lang['invoices_credited']                                       = 'Factures acreditades';
$lang['apply_credits']                                           = 'Aplicar Crèdits';
$lang['x_credits_available']                                     = '%s crèdits disponibles.';
$lang['credit_amount']                                           = 'Import Crèdit';
$lang['credits_available']                                       = 'Crèdits disponibles';
$lang['amount_to_credit']                                        = 'Import per acreditar';
$lang['invoice_credits_applied']                                 = 'Crèdits aplicats a la factura satisfactòriament';
$lang['applied_credits']                                         = 'Crèdits aplicats';
$lang['credit_amount_bigger_then_invoice_balance']               = 'L\'import total dels crèdits és més gran que el pendent de la factura';
$lang['credit_amount_bigger_then_credit_note_remaining_credits'] = 'L\'import total dels crèdits és més gran que els crèdits restants';
$lang['credited_invoices_not_found']                             = 'No s\'han trobat factures acreditades';
$lang['credit_invoice_number']                                   = 'Número de factura';
$lang['credits_used']                                            = 'Crèdits Usats';
$lang['credits_remaining']                                       = 'Crèdits Restants';
$lang['amount_credited']                                         = 'Import acreditat';
$lang['credits_applied_cant_delete_status_closed']               = 'Aquesta nota de crèdit té l\'estat tancat, primer ha d\'esborrar els crèdits abans d\'esborrar la nota de crèdit.';
$lang['credits_applied_cant_delete_credit_note']                 = 'Aquesta nota de crèdit té crèdits aplicats, primer ha d\'esborrar els crèdits abans d\'esborrar la nota de crèdit.';
$lang['credit_note_pdf_heading']                                 = 'Nota de crèdit';
$lang['show_status_on_pdf']                                      = 'Mostrar estat %s a documents PDF';
$lang['show_pdf_signature_credit_note']                          = 'Mostrar signatura PDF a Nota de Crèdit';
$lang['calendar_credit_note_reminder']                           = 'Recordatori de nota de crèdit';
$lang['show_credit_note_reminders_on_calendar']                  = 'Recordatoris de Nota de Crèdit';
$lang['reminders']                                               = 'Recordatoris';
$lang['invoice_activity_applied_credits']                        = 'Crèdits aplicats de %s des %s';
$lang['create_credit_note']                                      = 'Crear Nota de Crèdit';
$lang['confirm_invoice_credits_from_credit_note']                = 'Quan es creï una nota de crèdit d\'una factura impagada, l\'import de la nota de crèdit s\'aplicarà a aquesta factura. Esteu segur que voleu crear la nota de crèdit?';
$lang['credit_invoice_date']                                     = 'Data Factura';
$lang['apply_to_invoice']                                        = 'Aplicar a factura';
$lang['apply_credits_from']                                      = 'Aplicar Crèdits des %s';
$lang['credits_successfully_applied_to_invoices']                = 'Crèdits factures aplicats satisfactòriament';
$lang['credit_note_send_to_client_modal_heading']                = 'Enviar nota de crèdit a client';
$lang['credit_note_sent_to_client_success']                      = 'Nota de crèdit enviada al client satisfactòriament';
$lang['credit_note_sent_to_client_fail']                         = 'Problema en enviar nota de crèdit a email';
$lang['credit_note_no_invoices_available']                       = 'No hi ha factures disponibles per a aquest client.';
$lang['show_total_paid_on_invoice']                              = 'Mostrar Total Pagat a Factura';
$lang['show_credits_applied_on_invoice']                         = 'Mostrar Crèdits Aplicats a Factura';
$lang['show_amount_due_on_invoice']                              = 'Show Amount Due On Invoice';
$lang['customer_profile_update_credit_notes']                    = 'Actualitzar info enviament/facturació a totes kes notes de crèdit prèvies (No afecta les notes de crèdit tancades)';
$lang['zip_credit_notes']                                        = 'Notes de Crèdit Zip';
$lang['statement_credit_note_details']                           = 'Nota de crèdit %s';
$lang['statement_credits_applied_details']                       = 'Crèdits Aplicats de Nota de Crèdit %s - %s pel pagament de %s';
$lang['credit_note_files']                                       = 'Arxius Notes de Crèdit';
$lang['credit_notes_report']                                     = 'Informe Notes de Crèdit';

$lang['credit_note_set_reminder_title']     = $lang['invoice_set_reminder_title'];
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