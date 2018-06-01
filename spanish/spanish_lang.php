<?php

# version 1.0.0
#
# General
$lang['id']                   = 'ID';
$lang['name']                 = 'Nombre';
$lang['options']              = 'Opciones';
$lang['submit']               = 'Guardar';
$lang['added_successfully']   = '%s añadido con éxito.';
$lang['updated_successfully'] = '%s actualizado con éxito.';
$lang['edit']                 = 'Editar %s';
$lang['add_new']              = 'Añadir %s';
$lang['deleted']              = '%s borrado';
$lang['problem_deleting']     = 'Problema al eliminar %s';
$lang['is_referenced']        = 'El iD de la %s ya está utilizando.';
$lang['close']                = 'Cerrar';
$lang['send']                 = 'Enviar';
$lang['cancel']               = 'Cancelar';
$lang['go_back']              = 'Volver';
$lang['error_uploading_file'] = 'Error al subir el archivo';
$lang['load_more']            = 'Cargar más';
$lang['cant_delete_default']  = 'No me puedo eliminar por defecto %s';

# Invoice general
$lang['invoice_status_paid']                = 'Pagada';
$lang['invoice_status_unpaid']              = 'Por pagar';
$lang['invoice_status_overdue']             = 'Retrasada';
$lang['invoice_status_not_paid_completely'] = 'Pagada parcialmente';

$lang['invoice_pdf_heading'] = 'FACTURA';

$lang['invoice_table_item_heading']            = 'Artículo';
$lang['invoice_table_quantity_heading']        = 'Cantidad';
$lang['invoice_table_rate_heading']            = 'Precio';
$lang['invoice_table_tax_heading']             = 'Impuesto';
$lang['invoice_table_amount_heading']          = 'Valor';
$lang['invoice_subtotal']                      = 'Total';
$lang['invoice_adjustment']                    = 'Ajuste';
$lang['invoice_total']                         = 'Total a pagar';
$lang['invoice_bill_to']                       = 'Facturado a';
$lang['invoice_data_date']                     = 'Fecha de la factura:';
$lang['invoice_data_duedate']                  = 'Fecha de vencimiento:';
$lang['invoice_received_payments']             = 'Pagos recibidos';
$lang['invoice_no_payments_found']             = 'No se han encontrado pagos para esta factura';
$lang['invoice_note']                          = 'Nota:';
$lang['invoice_payments_table_number_heading'] = 'Pago #';
$lang['invoice_payments_table_mode_heading']   = 'Modo de pago';
$lang['invoice_payments_table_date_heading']   = 'Fecha';
$lang['invoice_payments_table_amount_heading'] = 'Valor';


# Announcements
$lang['announcement']                 = 'Anuncio';
$lang['announcement_lowercase']       = 'anuncio';
$lang['announcements']                = 'Anuncios';
$lang['announcements_lowercase']      = 'anuncios';
$lang['new_announcement']             = 'Nuevo aviso';
$lang['announcement_name']            = 'Nombre del anuncio';
$lang['announcement_message']         = 'Mensaje';
$lang['announcement_show_to_staff']   = 'Mostrar a los empleados';
$lang['announcement_show_to_clients'] = 'Mostrar a los clientes';
$lang['announcement_show_my_name']    = 'Mostrar mi nombre';

# Clients
$lang['clients']                              = 'Clientes';
$lang['client']                               = 'Cliente';
$lang['new_client']                           = 'Nuevo cliente';
$lang['client_lowercase']                     = 'cliente';
$lang['client_firstname']                     = 'Nombre';
$lang['client_lastname']                      = 'Apellido';
$lang['client_email']                         = 'Email';
$lang['client_company']                       = 'Empresa';
$lang['client_vat_number']                    = 'NIT';
$lang['client_address']                       = 'Dirección';
$lang['client_city']                          = 'Localidad';
$lang['client_postal_code']                   = 'Código postal';
$lang['client_state']                         = 'Provincia';
$lang['client_password']                      = 'Contraseña';
$lang['client_password_change_populate_note'] = 'Nota: Si rellena estos campos, la contraseña será cambiada para este cliente.';
$lang['client_password_last_changed']         = 'Último cambio de la contraseña:';
$lang['login_as_client']                      = 'Entrar como cliente';
$lang['client_invoices_tab']                  = 'Facturas';
$lang['contracts_invoices_tab']               = 'Facturas';
$lang['contracts_tickets_tab']                = 'Tickets';
$lang['contracts_notes_tab']                  = 'Notas';
$lang['note_description']                     = 'Nota de descripción';
$lang['client_do_not_send_welcome_email']     = 'No enviar email de bienvenida';

$lang['clients_notes_table_description_heading'] = 'Descripción';
$lang['clients_notes_table_addedfrom_heading']   = 'Añadida desde';
$lang['clients_notes_table_dateadded_heading']   = 'Fecha agregada';

$lang['clients_list_full_name']  = 'Nombre completo';
$lang['clients_list_last_login'] = 'Último acceso';

# Contracts
$lang['contracts']                = 'Contratos';
$lang['contract']                 = 'Contrato';
$lang['new_contract']             = 'Nuevo contrato';
$lang['contract_lowercase']       = 'contrato';
$lang['contract_start_date']      = 'Fecha de inicio';
$lang['contract_end_date']        = 'Fecha final';
$lang['contract_subject']         = 'Tema';
$lang['contract_description']     = 'Descripción';
$lang['contract_subject_tooltip'] = 'Tema también es visible para el cliente.';
$lang['contract_client_string']   = 'Cliente';
$lang['contract_attach']          = 'Documento adjunto';

$lang['contract_list_client']     = 'Cliente';
$lang['contract_list_subject']    = 'Tema';
$lang['contract_list_start_date'] = 'Fecha de inicio';
$lang['contract_list_end_date']   = 'Fecha final';

# Currencies
$lang['currencies']           = 'Monedas';
$lang['currency']             = 'Moneda';
$lang['new_currency']         = 'Nueva moneda';
$lang['currency_lowercase']   = 'moneda';
$lang['base_currency_set']    = 'Esta es ahora su divisa base.';
$lang['make_base_currency']   = 'Hacer moneda base';
$lang['base_currency_string'] = 'Moneda base';

$lang['currency_list_name']   = 'Nombre';
$lang['currency_list_symbol'] = 'Símbolo';


$lang['currency_add_edit_description'] = 'Nombre de la moneda';
$lang['currency_add_edit_rate']        = 'Símbolo';

$lang['currency_edit_heading'] = 'Cambiar la moneda';
$lang['currency_add_heading']  = 'Añadir nueva moneda';


# Department
$lang['departments']          = 'Departamentos';
$lang['department']           = 'Departamento';
$lang['new_department']       = 'Nuevo departamento';
$lang['department_lowercase'] = 'departamento';

$lang['department_name']             = 'Nombre del departamento';
$lang['department_email']            = 'Email del departamento';
$lang['department_hide_from_client'] = 'Esconder del cliente?';
$lang['department_list_name']        = 'Nombre';

# Email templates
$lang['email_templates']                        = 'Plantillas de email';
$lang['email_template']                         = 'Plantilla de email';
$lang['email_template_lowercase']               = 'plantilla de email';
$lang['email_templates_lowercase']              = 'plantillas de email';
$lang['email_template_ticket_fields_heading']   = 'Tickets';
$lang['email_template_invoices_fields_heading'] = 'Facturas';
$lang['email_template_clients_fields_heading']  = 'Clientes';

$lang['template_name']                = 'Nombre de la plantilla';
$lang['template_subject']             = 'Tema';
$lang['template_fromname']            = 'Nombre de envío';
$lang['template_fromemail']           = 'Desde el email';
$lang['send_as_plain_text']           = 'Enviar como texto sin formato';
$lang['email_template_disabled']      = 'Desactivar el envío de este correo';
$lang['email_template_email_message'] = 'Mensaje de email';
$lang['available_merge_fields']       = 'campos de combinación disponibles';
# Home
$lang['dashboard_string']                          = 'Panel principal';
$lang['home_latest_todos']                         = 'Últimas tareas';
$lang['home_no_latest_todos']                      = 'No existen tareas';
$lang['home_latest_finished_todos']                = 'Tareas acabadas recientemente';
$lang['home_no_finished_todos_found']              = 'No existen tareas terminadas';
$lang['home_tickets_awaiting_reply_by_department'] = 'Incidencias en espera de respuesta por el departamento';
$lang['home_tickets_awaiting_reply_by_status']     = 'Incidencias en espera de respuesta por situación';
$lang['home_this_week_events']                     = 'Esta semana los eventos';
$lang['home_upcoming_events_next_week']            = 'Próximos eventos de la próxima semana';
$lang['home_event_added_by']                       = 'Evento añadida por';
$lang['home_public_event']                         = 'Evento público';
$lang['home_weekly_payment_records']               = 'Resumen de pagos semanales';
$lang['home_weekend_ticket_opening_statistics']    = 'Estadísticas de tickets semanal';
# Newsfeed
$lang['whats_on_your_mind']                                 = '¿Qué tienes en mente?';
$lang['new_post']                                           = 'Enviar';
$lang['newsfeed_upload_tooltip']                            = 'Consejo: Arrastre y suelte archivos para subir.';
$lang['newsfeed_all_departments']                           = 'Todos los departamentos';
$lang['newsfeed_pin_post']                                  = 'Fijar la publicación';
$lang['newsfeed_unpin_post']                                = 'Desanclar publicación';
$lang['newsfeed_delete_post']                               = 'Borrar';
$lang['newsfeed_published_post']                            = 'Publicado';
$lang['newsfeed_you_like_this']                             = 'Te gusta';
$lang['newsfeed_like_this']                                 = 'Me gusta';
$lang['newsfeed_one_other']                                 = 'Gtro';
$lang['newsfeed_you']                                       = 'Tú';
$lang['newsfeed_and']                                       = 'y';
$lang['newsfeed_you_and']                                   = 'Usted y';
$lang['newsfeed_like_this_saying']                          = 'Me gusta';
$lang['newsfeed_unlike_this_saying']                        = 'No me gusta esto';
$lang['newsfeed_show_more_comments']                        = 'Mostrar más comentarios';
$lang['comment_this_post_placeholder']                      = 'Comentar este post';
$lang['newsfeed_post_likes_modal_heading']                  = 'Colegas que les gusta este post';
$lang['newsfeed_comment_likes_modal_heading']               = 'Colegas que les gusta este comentario';
$lang['newsfeed_newsfeed_post_only_visible_to_departments'] = 'Este blog es sólo visible para los siguientes departamentos: %s';
# Invoice items
$lang['invoice_items']          = 'Artículos de la factura';
$lang['invoice_item']           = 'Artículo de la factura';
$lang['new_invoice_item']       = 'Nuevo artículo';
$lang['invoice_item_lowercase'] = 'artículo de la factura';

$lang['invoice_items_list_description'] = 'Descripción';
$lang['invoice_items_list_rate']        = 'Precio';

$lang['invoice_item_add_edit_description'] = 'Descripción';
$lang['invoice_item_add_edit_rate']        = 'Precio';
$lang['invoice_item_edit_heading']         = 'Editar elemento';
$lang['invoice_item_add_heading']          = 'Nuevo elemento';

# Invoices


$lang['invoices']                       = 'Facturas';
$lang['invoice']                        = 'Factura';
$lang['invoice_lowercase']              = 'factura';
$lang['create_new_invoice']             = 'Crear factura';
$lang['view_invoice']                   = 'Ver factura';
$lang['invoice_payment_recorded']       = 'Factura de pagos registrado';
$lang['invoice_payment_record_failed']  = 'Error al registrar la factura de pago';
$lang['invoice_sent_to_client_success'] = 'La factura se ha enviado con éxito al cliente';
$lang['invoice_sent_to_client_fail']    = 'Problema al enviar la factura';
$lang['invoice_reminder_send_problem']  = 'Problema con la factura enviar recordatorio de retraso';
$lang['invoice_overdue_reminder_sent']  = 'Recordatorio de factura vencida enviado con éxito';

$lang['invoice_details']              = 'Detalles de la factura';
$lang['invoice_view']                 = 'Ver factura';
$lang['invoice_select_customer']      = 'Cliente';
$lang['invoice_add_edit_number']      = 'Número de factura';
$lang['invoice_add_edit_date']        = 'Fecha de la factura';
$lang['invoice_add_edit_duedate']     = 'Fecha de vencimiento';
$lang['invoice_add_edit_currency']    = 'Moneda';
$lang['invoice_add_edit_client_note'] = 'Nota para el cliente';
$lang['invoice_add_edit_admin_note']  = 'Nota del comercial';

$lang['invoices_toggle_table_tooltip'] = 'Ver tabla completa.';

$lang['edit_invoice_tooltip']                   = 'Editar factura.';
$lang['delete_invoice_tooltip']                 = 'Eliminar la factura. Nota: Se borrarán todos los pagos con respecto a esta factura (si los hay).';
$lang['invoice_sent_to_email_tooltip']          = 'Envía factura por email.';
$lang['invoice_already_send_to_client_tooltip'] = 'Esta factura ya se ha enviado al cliente %s .';
$lang['send_overdue_notice_tooltip']            = 'Enviar aviso de vencimiento.';
$lang['invoice_view_activity_tooltip']          = 'Registro de actividades.';
$lang['invoice_record_payment']                 = 'Registrar pago';

$lang['invoice_send_to_client_modal_heading']    = 'Enviar esta factura al cliente';
$lang['invoice_send_to_client_attach_pdf']       = 'Adjuntar la factura en PDF';
$lang['invoice_send_to_client_preview_template'] = 'Vista previa de plantilla de email';

$lang['invoice_dt_table_heading_number']  = 'Nº factura';
$lang['invoice_dt_table_heading_date']    = 'Fecha';
$lang['invoice_dt_table_heading_client']  = 'Cliente';
$lang['invoice_dt_table_heading_duedate'] = 'Fecha de vencimiento';
$lang['invoice_dt_table_heading_amount']  = 'Valor';
$lang['invoice_dt_table_heading_status']  = 'Estado';

$lang['record_payment_for_invoice']              = 'Registrar pago';
$lang['record_payment_amount_received']          = 'Valor recibido';
$lang['record_payment_date']                     = 'Fecha de pago';
$lang['record_payment_leave_note']               = 'Dejar una nota';
$lang['invoice_payments_received']               = 'Pagos recibidos';
$lang['invoice_record_payment_note_placeholder'] = 'Nota del comercial';
$lang['no_payments_found']                       = 'No se han encontrado pagos para esta factura';

# Payments
$lang['payments']                             = 'Pagos';
$lang['payment']                              = 'Pago';
$lang['payment_lowercase']                    = 'pago';
$lang['payments_table_number_heading']        = 'Pago nº:';
$lang['payments_table_invoicenumber_heading'] = 'Factura nº:';
$lang['payments_table_mode_heading']          = 'Modo de pago';
$lang['payments_table_date_heading']          = 'Fecha';
$lang['payments_table_amount_heading']        = 'Valor';
$lang['payments_table_client_heading']        = 'Cliente';
$lang['payment_not_exists']                   = 'El pago no existe';
$lang['payment_edit_for_invoice']             = 'El pago de la factura';
$lang['payment_edit_amount_received']         = 'Valor recibido';
$lang['payment_edit_date']                    = 'Fecha de pago';


# Knowledge base
$lang['kb_article_add_edit_subject'] = 'Tema';
$lang['kb_article_add_edit_group']   = 'Grupo';
$lang['kb_string']                   = 'Base de conocimiento';
$lang['kb_article']                  = 'Artículo';
$lang['kb_article_lowercase']        = 'artículo';
$lang['kb_article_new_article']      = 'Artículo nuevo';
$lang['kb_article_disabled']         = 'Deshabilitado';
$lang['kb_article_description']      = 'Descripción del artículo';

$lang['kb_no_articles_found']          = 'No hay artículos encontrados en la base de conocimientos';
$lang['kb_dt_article_name']            = 'Nombre del artículo';
$lang['kb_dt_group_name']              = 'Grupo';
$lang['new_group']                     = 'Nuevo grupo';
$lang['kb_group_add_edit_name']        = 'Nombre del grupo';
$lang['kb_group_add_edit_description'] = 'Breve descripción';
$lang['kb_group_add_edit_disabled']    = 'Deshabilitado';
$lang['kb_group_add_edit_note']        = 'Nota: Todos los artículos en este grupo se ocultarán si no se marca como desabilitado.';
$lang['group_table_name_heading']      = 'Nombre';
$lang['group_table_isactive_heading']  = 'Activo';
$lang['kb_no_groups_found']            = 'No hay grupos de base de conocimientos encontrados';

# Mail lists
$lang['mail_lists']                            = 'Las listas de correo';
$lang['mail_list']                             = 'Lista de correo';
$lang['new_mail_list']                         = 'Lista de correo nuevo';
$lang['mail_list_lowercase']                   = 'lista de correo';
$lang['custom_field_deleted_success']          = 'Campo personalizado eliminado';
$lang['custom_field_deleted_fail']             = 'Problema al eliminar campo personalizado';
$lang['email_removed_from_list']               = 'email eliminado de la lista';
$lang['email_remove_fail']                     = 'email eliminado de la lista';
$lang['staff_mail_lists']                      = 'Listas de correo del equipo';
$lang['clients_mail_lists']                    = 'Listas de correo de los clientes';
$lang['mail_list_total_imported']              = 'Correos electrónicos importados totales: %s';
$lang['mail_list_total_duplicate']             = 'Total de mensajes de email duplicados: %s';
$lang['mail_list_total_failed_to_insert']      = 'Los correos electrónicos no pudo insertar: %s';
$lang['mail_list_total_invalid']               = 'Dirección de correo no válida: %s';
$lang['cant_edit_mail_list']                   = 'Usted no puede editar esta lista, esta lista se rellena automáticamente';
$lang['mail_list_add_edit_name']               = 'Nombre de lista de correo';
$lang['mail_list_add_edit_customfield']        = 'Añadir campo personalizado';
$lang['mail_lists_view_email_email_heading']   = 'Email';
$lang['mail_lists_view_email_date_heading']    = 'Fecha agregada';
$lang['add_new_email_to']                      = 'Agregar nuevo email a %s';
$lang['import_emails_to']                      = 'Importación de los correos electrónicos %s';
$lang['mail_list_new_email_edit_add_label']    = 'Email';
$lang['mail_list_import_file']                 = 'Importar archivo';
$lang['mail_list_available_custom_fields']     = 'Campos personalizados disponibles';
$lang['submit_import_emails']                  = 'Los correos electrónicos de importación';
$lang['btn_import_emails']                     = 'Los correos electrónicos de importación (Excel)';
$lang['btn_add_email_to_list']                 = 'Añadir a esta lista de email';
$lang['mail_lists_dt_list_name']               = 'Lista de nombres';
$lang['mail_lists_dt_datecreated']             = 'Fecha de creación';
$lang['mail_lists_dt_creator']                 = 'Crear';
$lang['email_added_to_mail_list_successfully'] = 'Email añadió a la lista';
$lang['email_is_duplicate_mail_list']          = 'Email ya existe en esta lista';

# Media
$lang['media_files'] = 'Archivos';

# Payment modes
$lang['new_payment_mode']       = 'Nueva forma de pago';
$lang['payment_modes']          = 'Forma de pago';
$lang['payment_mode']           = 'Forma de pago';
$lang['payment_mode_lowercase'] = 'forma de pago';
$lang['payment_modes_dt_name']  = 'Nombre de la forma de pago';

$lang['payment_mode_add_edit_name'] = 'Nombre de la forma de pago';
$lang['payment_mode_edit_heading']  = 'Editar forma de pago';
$lang['payment_mode_add_heading']   = 'Agregar nueva forma de pago';

# Predefined ticket replies
$lang['new_predefined_reply']              = 'Nueva respuesta predefinida';
$lang['predefined_replies']                = 'Respuesta predefinida';
$lang['predefined_reply']                  = 'Responder predefinido';
$lang['predefined_reply_lowercase']        = 'Respuesta predefinido';
$lang['predefined_replies_dt_name']        = 'Respuesta predefinida nombre';
$lang['predefined_reply_add_edit_name']    = 'Respuesta predefinida nombre';
$lang['predefined_reply_add_edit_content'] = 'Responder contenido';

# Ticket priorities
$lang['new_ticket_priority']           = 'Nueva prioridad';
$lang['ticket_priorities']             = 'Prioridades de tickets';
$lang['ticket_priority']               = 'Prioridad de tickets';
$lang['ticket_priority_lowercase']     = 'prioridad de tickets';
$lang['no_ticket_priorities_found']    = 'No se han encontrado prioridades de tickets';
$lang['ticket_priority_dt_name']       = 'Prioridad nombre de tickets';
$lang['ticket_priority_add_edit_name'] = 'Nombre del tipo de prioridad';

# Reports
$lang['kb_reports']                                       = 'Informes de artículos de';
$lang['sales_reports']                                    = 'Informes de ventas';
$lang['reports_choose_kb_group']                          = 'Elegir grupo';
$lang['report_kb_yes']                                    = 'Sí';
$lang['report_kb_no']                                     = 'No';
$lang['report_kb_no_votes']                               = 'Sin votos';
$lang['report_this_week_leads_conversions']               = 'prospectos convertidos sta semana';
$lang['report_leads_sources_conversions']                 = 'Fuentes';
$lang['report_leads_monthly_conversions']                 = 'Mensual';
$lang['sales_report_heading']                             = 'Informe de ventas';
$lang['report_sales_type_income']                         = 'Ingresos totales';
$lang['report_sales_type_customer']                       = 'Informe de ventas por tipo de cliente';
$lang['report_sales_base_currency_select_explanation']    = 'Es necesario seleccionar la moneda por que usted tiene facturas con moneda diferente';
$lang['report_sales_from_date']                           = 'Desde la fecha';
$lang['report_sales_to_date']                             = 'Hasta la fecha';
$lang['report_sales_months_all_time']                     = 'Desde';
$lang['report_sales_months_six_months']                   = 'Últimos 6 meses';
$lang['report_sales_months_twelve_months']                = 'Últimos 12 meses';
$lang['reports_sales_generated_report']                   = 'Informe generado';
$lang['reports_sales_dt_customers_client']                = 'Cliente';
$lang['reports_sales_dt_customers_total_invoices']        = 'Las facturas totales';
$lang['reports_sales_dt_items_customers_amount']          = 'Valor';
$lang['reports_sales_dt_items_customers_amount_with_tax'] = 'Valor con impuestos';

# Roles
$lang['new_role']           = 'Nuevo cargo';
$lang['all_roles']          = 'Todos los cargos';
$lang['roles']              = 'Cargos';
$lang['role']               = 'Cargo';
$lang['role_lowercase']     = 'cargo';
$lang['roles_total_users']  = 'Total de usuarios:';
$lang['roles_dt_name']      = 'Nombre del cargo';
$lang['role_add_edit_name'] = 'Nombre del cargo';

# Service
$lang['new_service']           = 'Nuevo servicio';
$lang['services']              = 'Servicios';
$lang['service']               = 'Servicio';
$lang['service_lowercase']     = 'servicio';
$lang['services_dt_name']      = 'Nombre del servicio';
$lang['service_add_edit_name'] = 'Nombre del servicio';

# Settings
$lang['settings']                    = 'Ajustes';
$lang['settings_updated']            = 'Configuración de actualizada';
$lang['settings_save']               = 'Guardar ajustes';
$lang['settings_group_general']      = 'General';
$lang['settings_group_localization'] = 'Localización';
$lang['settings_group_tickets']      = 'Tickets';
$lang['settings_group_sales']        = 'Financiero';
$lang['settings_group_email']        = 'Email';
$lang['settings_group_clients']      = 'Clientes';
$lang['settings_group_newsfeed']     = 'Noticias';
$lang['settings_group_cronjob']      = 'Cron Job';

$lang['settings_yes']                                        = 'Sí';
$lang['settings_no']                                         = 'No';
$lang['settings_clients_default_theme']                      = 'Tema predeterminado clientes';
$lang['settings_clients_allow_registration']                 = 'Permitir que los clientes se registren';
$lang['settings_clients_allow_kb_view_without_registration'] = 'Permitir que la base de conocimientos sea visto sin conexión';

$lang['settings_cron_send_overdue_reminder']                 = 'Enviar recordatorio para facturas vencidas';
$lang['settings_cron_send_overdue_reminder_tooltip']         = 'Enviar email al cliente cuando esté atrasado? el estado de la factura se actualiza con el atraso.';
$lang['automatically_send_invoice_overdue_reminder_after']   = 'Enviar automáticamente recordatorio después de X días';
$lang['automatically_resend_invoice_overdue_reminder_after'] = 'Volver a enviar recordatorio automáticamente después de X días';

$lang['settings_email_host']      = 'Servidor SMTP';
$lang['settings_email_port']      = 'Puerto SMTP';
$lang['settings_email']           = 'Email';
$lang['settings_email_password']  = 'Contraseña';
$lang['settings_email_charset']   = 'Juego de caracteres de email';
$lang['settings_email_signature'] = 'Firma de email';

$lang['settings_general_company_logo']                = 'Logo de la compañía';
$lang['settings_general_company_logo_tooltip']        = 'Dimensiones recomendadas: 150 x 34px.';
$lang['settings_general_company_remove_logo_tooltip'] = 'Retire logotipo de la empresa.';
$lang['settings_general_company_name']                = 'Nombre de la empresa';
$lang['settings_general_company_main_domain']         = 'Dominio principal de la compañía';
$lang['settings_general_use_knowledgebase']           = 'Usar la base de conocimiento';
$lang['settings_general_use_knowledgebase_tooltip']   = 'Si permite esta opciones la base de conocimientos también aparecerá en el área de clientes.';
$lang['settings_general_tables_limit']                = 'Límites tablas de paginación';
$lang['settings_general_default_staff_role']          = 'Rol por defecto para miembros';
$lang['settings_general_default_staff_role_tooltip']  = 'Al añadir un nuevo miembro del personal de este papel se seleccionará de forma predeterminada.';

$lang['settings_localization_date_format']      = 'Formato de fecha';
$lang['settings_localization_default_timezone'] = 'La zona horaria predeterminada';
$lang['settings_localization_default_language'] = 'Idioma predeterminado';

$lang['settings_newsfeed_max_file_upload_post'] = 'Archivos máximos de carga en el post';

$lang['settings_reminders_contracts']         = 'Contrato de caducidad recordatorio';
$lang['settings_reminders_contracts_tooltip'] = 'Notificación de aviso de caducidad en X días.';

$lang['settings_tickets_use_services']             = 'Usar el sistema de tickets';
$lang['settings_tickets_max_attachments']          = 'Tamaño máximo de los archivos adjuntos en los tickets';
$lang['settings_tickets_allow_departments_access'] = 'Que el personal solo pueda acceder a los tickets de su departamento';
$lang['settings_tickets_allowed_file_extensions']  = 'Admitir en los archivos adjuntos las extensiones:';

$lang['settings_sales_general']                                    = 'General';
$lang['settings_sales_general_note']                               = 'Configuración general';
$lang['settings_sales_invoice_prefix']                             = 'Formato de prefijo para factura';
$lang['settings_sales_decimal_separator']                          = 'Separador decimal';
$lang['settings_sales_thousand_separator']                         = 'Separador de miles';
$lang['settings_sales_currency_placement']                         = 'Colocación moneda';
$lang['settings_sales_currency_placement_before']                  = 'Antes del valor';
$lang['settings_sales_currency_placement_after']                   = 'Después del valor';
$lang['settings_sales_require_client_logged_in_to_view_invoice']   = 'Requerir que el cliente se identifique para ver la factura';
$lang['settings_sales_next_invoice_number']                        = 'Siguiente número de factura';
$lang['settings_sales_next_invoice_number_tooltip']                = 'Establecer este campo en 1 si desea empezar de inicio.';
$lang['settings_sales_decrement_invoice_number_on_delete']         = 'Disminuir el número de factura al eliminar';
$lang['settings_sales_decrement_invoice_number_on_delete_tooltip'] = '¿Quieres disminuir el número de factura cuando se elimine la última factura?';
$lang['settings_sales_invoice_number_format']                      = 'Formato de número de factura';
$lang['settings_sales_invoice_number_format_year_based']           = 'Basada en el año';
$lang['settings_sales_invoice_number_format_number_based']         = 'Basado número (000001)';

$lang['settings_sales_company_info_note'] = 'Todos estos datos se mostrarán en las facturas, presupuestos, pagos y otros documentos donde se requiera información de la empresa.';
$lang['settings_sales_company_name']      = 'Nombre de la empresa';
$lang['settings_sales_address']           = 'Dirección';
$lang['settings_sales_city']              = 'Localidad';
$lang['settings_sales_country_code']      = 'País';
$lang['settings_sales_postal_code']       = 'Código postal';
$lang['settings_sales_phonenumber']       = 'Teléfono';

# Leads
$lang['new_lead']       = 'Nuevo prospecto';
$lang['leads']          = 'Prospectos';
$lang['lead']           = 'Prospecto';
$lang['lead_lowercase'] = 'prospectos';
$lang['leads_all']      = 'Todos';

$lang['leads_canban_notes']  = 'Notas: %s';
$lang['leads_canban_source'] = 'Fuente: %s';

$lang['lead_new_source']            = 'Nueva fuente';
$lang['lead_sources']               = 'Fuentes de contacto';
$lang['lead_source']                = 'Fuente principal';
$lang['lead_source_lowercase']      = 'fuente principal';
$lang['leads_sources_not_found']    = 'No se encontraron fuentes de derivaciones';
$lang['leads_sources_table_name']   = 'Nombre de la fuente';
$lang['leads_source_add_edit_name'] = 'Nombre de la fuente';

$lang['lead_new_status']         = 'Nuevo estado del contacto';
$lang['lead_status']             = 'Estado del contacto';
$lang['lead_status_lowercase']   = 'estado de contacto';
$lang['leads_status_table_name'] = 'Nombre estado';

$lang['leads_status_add_edit_name']  = 'Nombre estado';
$lang['leads_status_add_edit_order'] = 'Orden';

$lang['lead_statuses_not_found'] = 'No se encontraron las derivaciones estados';
$lang['leads_search']            = 'Buscar prospectos';

$lang['leads_table_total'] = 'Ventas totales: %s';

$lang['leads_dt_name']         = 'Nombre';
$lang['leads_dt_email']        = 'Email';
$lang['leads_dt_phonenumber']  = 'Teléfono';
$lang['leads_dt_assigned']     = 'Asignado';
$lang['leads_dt_status']       = 'Estado';
$lang['leads_dt_last_contact'] = 'Último contacto';

$lang['lead_add_edit_name']                = 'Nombre';
$lang['lead_add_edit_email']               = 'Dirección de correo';
$lang['lead_add_edit_phonenumber']         = 'Teléfono';
$lang['lead_add_edit_source']              = 'Fuente';
$lang['lead_add_edit_status']              = 'Estado del contacto';
$lang['lead_add_edit_assigned']            = 'Asignado';
$lang['lead_add_edit_datecontacted']       = 'Fecha contactado';
$lang['lead_add_edit_contacted_today']     = 'Contactado hoy';
$lang['lead_add_edit_activity']            = 'Registro de actividades';
$lang['lead_add_edit_notes']               = 'Notas';
$lang['lead_add_edit_add_note']            = 'Añadir la nota';
$lang['lead_not_contacted']                = 'No me he puesto en contacto este contacto';
$lang['lead_add_edit_contacted_this_lead'] = 'Me puse en contacto con este contacto';

# Misc
$lang['access_denied'] = 'Que da acceso denegado';
$lang['prev']          = 'Anterior';
$lang['next']          = 'Siguiente';

# Datatables
$lang['dt_paginate_first']    = 'Primero';
$lang['dt_paginate_last']     = 'Último';
$lang['dt_paginate_next']     = 'Siguiente';
$lang['dt_paginate_previous'] = 'Anterior';
$lang['dt_empty_table']       = 'No {0} encontrado';
$lang['dt_search']            = 'Buscar:';
$lang['dt_zero_records']      = 'No se encontraron coincidencias';
$lang['dt_loading_records']   = 'Cargando…';
$lang['dt_length_menu']       = 'Clientes por página _MENU_';
$lang['dt_info_filtered']     = '(Filtrado de _MAX_ total de {0})';
$lang['dt_info_empty']        = 'Mostrando 0 al 0 de 0 {0}';
$lang['dt_info']              = 'Mostrando desde _START_ hasta _END_ de _TOTAL_ {0}';
$lang['dt_empty_table']       = 'No {0} encontrado';
$lang['dt_sort_ascending']    = 'Activar para ordenar la columna ascendente';
$lang['dt_sort_descending']   = 'Activar para ordenar la columna descendente';
# Invoice activity log
$lang['user_sent_overdue_reminder'] = '%s factura enviada recordatorio de retraso';

# Weekdays
$lang['wd_monday']    = 'Lunes';
$lang['wd_tuesday']   = 'Martes';
$lang['wd_wednesday'] = 'Miércoles';
$lang['wd_thursday']  = 'Jueves';
$lang['wd_friday']    = 'Viernes';
$lang['wd_saturday']  = 'Sábado';
$lang['wd_sunday']    = 'Domingo';

# Admin left sidebar
$lang['als_dashboard'] = 'Tablero';
$lang['als_clients']   = 'Clientes';
$lang['als_leads']     = 'Prospectos';

$lang['als_contracts'] = 'Contratos';

$lang['als_sales'] = 'Ventas';

$lang['als_staff'] = 'Equipo';
$lang['als_tasks'] = 'Tareas';
$lang['als_kb']    = 'Base de conocimiento';

$lang['als_surveys']               = 'Encuestas';
$lang['als_media']                 = 'Multimedia';
$lang['als_reports']               = 'Informes';
$lang['als_reports_sales_submenu'] = 'Ventas';
$lang['als_reports_leads_submenu'] = 'Prospectos';
$lang['als_kb_articles_submenu']   = 'Artículos de kB';
$lang['als_utilities']             = 'Utilidades';
$lang['als_announcements_submenu'] = 'Anuncios';
$lang['als_calendar_submenu']      = 'Calendario';
$lang['als_activity_log_submenu']  = 'Registro de actividades';

# Admin customizer sidebar
$lang['acs_ticket_priority_submenu']           = 'Prioridad de tickets';
$lang['acs_ticket_statuses_submenu']           = 'Los estados de tickets';
$lang['acs_ticket_predefined_replies_submenu'] = 'Respuestas predefinidas';
$lang['acs_ticket_services_submenu']           = 'Servicios';
$lang['acs_departments']                       = 'Departamentos';
$lang['acs_leads']                             = 'Prospectos';
$lang['acs_leads_sources_submenu']             = 'Fuentes';
$lang['acs_leads_statuses_submenu']            = 'Estados';
$lang['acs_sales_taxes_submenu']               = 'Impuestos';
$lang['acs_sales_currencies_submenu']          = 'Monedas';
$lang['acs_sales_payment_modes_submenu']       = 'Modos de pago';
$lang['acs_email_templates']                   = 'Plantillas de email';
$lang['acs_roles']                             = 'Roles';
$lang['acs_settings']                          = 'Ajustes';

# Tickets
$lang['new_ticket']                                          = 'Abrir un nuevo ticket';
$lang['tickets']                                             = 'Tickets';
$lang['ticket']                                              = 'ticket';
$lang['ticket_lowercase']                                    = 'ticket';
$lang['support_tickets']                                     = 'Tickets de soporte';
$lang['support_ticket']                                      = 'Ticket de soporte';
$lang['ticket_settings_to']                                  = 'Para';
$lang['ticket_settings_email']                               = 'Dirección de correo';
$lang['ticket_settings_departments']                         = 'Departamento';
$lang['ticket_settings_service']                             = 'Servicio';
$lang['ticket_settings_priority']                            = 'Prioridad';
$lang['ticket_settings_subject']                             = 'Tema';
$lang['ticket_settings_assign_to']                           = 'Asignar tickets (por defecto es el usuario actual)';
$lang['ticket_add_body']                                     = 'Cuerpo de tickets';
$lang['ticket_add_attachments']                              = 'Archivos adjuntos';
$lang['ticket_no_reply_yet']                                 = 'Sin respuesta, todavía';
$lang['new_ticket_added_successfully']                       = 'Ticket # %s añadido con éxito';
$lang['replied_to_ticket_successfully']                      = 'Respondido al ticket # %s con éxito';
$lang['ticket_settings_updated_successfully']                = 'Ajustes del ticket actualizados con éxito';
$lang['ticket_settings_updated_successfully_and_reassigned'] = 'Ajustes del ticket actualizados – reasignado al departamento de %s';
$lang['ticket_dt_subject']                                   = 'Tema';
$lang['ticket_dt_department']                                = 'Departamento';
$lang['ticket_dt_service']                                   = 'Servicio';
$lang['ticket_dt_submitter']                                 = 'Cliente';
$lang['ticket_dt_status']                                    = 'Estado';
$lang['ticket_dt_priority']                                  = 'Prioridad';
$lang['ticket_dt_last_reply']                                = 'Última respuesta';

$lang['ticket_single_add_reply']                  = 'Añadir respuesta';
$lang['ticket_single_add_note']                   = 'Añadir la nota';
$lang['ticket_single_other_user_tickets']         = 'Otros tickets';
$lang['ticket_single_settings']                   = 'Ajustes';
$lang['ticket_single_priority']                   = 'Prioridad: %s';
$lang['ticket_single_last_reply']                 = 'Última respuesta: %s';
$lang['ticket_single_ticket_note_by']             = 'Venta de tickets nota de %s';
$lang['ticket_single_note_added']                 = 'Nota añadida: %s';
$lang['ticket_single_change_status']              = 'Cambiar estado';
$lang['ticket_single_assign_to_me_on_update']     = 'Asignarme este ticket a mi directamente si algo pasa';
$lang['ticket_single_insert_predefined_reply']    = 'Insertar respuesta predefinida';
$lang['ticket_single_insert_knowledge_base_link'] = 'Inserte el enlace a la base de conocimiento';
$lang['ticket_single_attachments']                = 'Archivos adjuntos';
$lang['ticket_single_add_response']               = 'Añadir respuesta';
$lang['ticket_single_note_heading']               = 'Nota';
$lang['ticket_single_add_note']                   = 'Añadir nota';
$lang['ticket_settings_none_assigned']            = 'Ningúna';
$lang['ticket_status_changed_successfully']       = 'Estado del ticket cambiado';
$lang['ticket_status_changed_fail']               = 'Problema en el cambio de estado de tickets';

$lang['ticket_staff_string']                = 'Equipo';
$lang['ticket_client_string']               = 'Cliente';
$lang['ticket_posted']                      = 'Publicado: %s';
$lang['ticket_access_by_department_denied'] = 'Usted no tiene acceso a este ticket. Éste es de un departamento que no le está asignado.';

# Staff
$lang['new_staff']                       = 'Nuevo miembro del equipo';
$lang['staff_members']                   = 'Miembros del equipo';
$lang['staff_member']                    = 'Miembro del equipo';
$lang['staff_member_lowercase']          = 'miembro del equipo';
$lang['staff_profile_updated']           = 'Tu perfil ha sido actualizado';
$lang['staff_old_password_incorrect']    = 'Su antigua contraseña es incorrecta';
$lang['staff_password_changed']          = 'Su contraseña ha sido cambiada';
$lang['staff_problem_changing_password'] = 'Problema cambiar su contraseña';
$lang['staff_profile_string']            = 'Perfil';

$lang['staff_cant_remove_main_admin']          = 'No puede quitarse de administrador principal';
$lang['staff_cant_remove_yourself_from_admin'] = 'Usted no puede darse la función de administrador';

$lang['staff_dt_name']       = 'Nombre completo';
$lang['staff_dt_email']      = 'Email';
$lang['staff_dt_last_Login'] = 'Último acceso';
$lang['staff_dt_active']     = 'Activo';

$lang['staff_add_edit_firstname']             = 'Nombre';
$lang['staff_add_edit_lastname']              = 'Apellido';
$lang['staff_add_edit_email']                 = 'Email';
$lang['staff_add_edit_phonenumber']           = 'Teléfono';
$lang['staff_add_edit_facebook']              = 'Facebook';
$lang['staff_add_edit_linkedin']              = 'LinkedIn';
$lang['staff_add_edit_skype']                 = 'Skype';
$lang['staff_add_edit_departments']           = 'Departamentos';
$lang['staff_add_edit_role']                  = 'Cargo';
$lang['staff_add_edit_permissions']           = 'Permisos';
$lang['staff_add_edit_administrator']         = 'Administrador';
$lang['staff_add_edit_password']              = 'Contraseña';
$lang['staff_add_edit_password_note']         = 'Nota: Si rellena estos campos, la contraseña será cambiada para este miembro.';
$lang['staff_add_edit_password_last_changed'] = 'Contraseña cambió por última vez';
$lang['staff_add_edit_notes']                 = 'Notas';
$lang['staff_add_edit_note_description']      = 'Descripción';

$lang['staff_notes_table_description_heading'] = 'Nota';
$lang['staff_notes_table_addedfrom_heading']   = 'Desde añadido';
$lang['staff_notes_table_dateadded_heading']   = 'Fecha agregada';

$lang['staff_admin_profile']         = 'Este es el perfil de administración';
$lang['staff_profile_notifications'] = 'Notificaciones';
$lang['staff_profile_departments']   = 'Departamentos';

$lang['staff_edit_profile_image']                      = 'Imagen de perfil';
$lang['staff_edit_profile_your_departments']           = 'Sus departamentos';
$lang['staff_edit_profile_change_your_password']       = 'Cambia tu contraseña';
$lang['staff_edit_profile_change_old_password']        = 'Contraseña anterior';
$lang['staff_edit_profile_change_new_password']        = 'Nueva contraseña';
$lang['staff_edit_profile_change_repeat_new_password'] = 'Repita la nueva contraseña';

# Surveys
$lang['new_survey']                    = 'Nueva encuesta';
$lang['surveys']                       = 'Encuestas';
$lang['survey']                        = 'Encuesta';
$lang['survey_lowercase']              = 'encuesta';
$lang['survey_no_mail_lists_selected'] = 'No hay listas de correo seleccionados';
$lang['survey_send_success_note']      = 'Todos los correos electrónicos de la encuesta ( %s) seran enviados vía la Cron Job con intervalos de 5 minutos';
$lang['survey_result']                 = 'Resultado encuesta: %s';
$lang['question_string']               = 'Pregunta';
$lang['question_field_string']         = 'Campo';

$lang['survey_list_view_tooltip']         = 'Ver resultados.';
$lang['survey_list_view_results_tooltip'] = 'Ver resultados.';

$lang['survey_add_edit_subject']                   = 'Sujetos de la encuesta';
$lang['survey_add_edit_email_description']         = 'Descripción encuesta (asunto del email)';
$lang['survey_include_survey_link']                = 'Incluir enlace de la encuesta en la descripción';
$lang['survey_available_mail_lists_custom_fields'] = 'Campos personalizados disponibles a partir de listas de email';
$lang['survey_mail_lists_custom_fields_tooltip']   = 'Los campos personalizados se pueden utilizar para el editar el email.';
$lang['survey_add_edit_short_description_view']    = 'Encuesta breve descripción (ver descripción)';
$lang['survey_add_edit_from']                      = 'A partir de (desplegable en el email)';
$lang['survey_add_edit_redirect_url']              = 'URL de redireccionamiento encuesta';
$lang['survey_add_edit_red_url_note']              = 'Cuando la encuesta ha acabado donde redirigir al usuario? (dejar en blanco para este sitio URL).';
$lang['survey_add_edit_disabled']                  = 'Deshabilitado';
$lang['survey_add_edit_only_for_logged_in']        = 'Sólo iniciar sesión para los participantes (personal, clientes)';
$lang['send_survey_string']                        = 'Enviar encuesta';
$lang['survey_send_mail_list_clients']             = 'Clientes';
$lang['survey_send_mail_list_staff']               = 'Equipo';
$lang['survey_send_mail_lists_string']             = 'Las listas de correo';
$lang['survey_send_mail_lists_note_logged_in']     = 'Nota: Si va a enviar la encuesta a las listas de correo sólo para los que inicien sesión los participantes tienen que estar sin marcar.';
$lang['survey_send_string']                        = 'Enviar';

$lang['survey_send_to_total']  = 'Enviar a un total de %s mensajes de email';
$lang['survey_send_till_now']  = 'Hasta ahora';
$lang['survey_send_finished']  = 'Enviar encuesta terminó: %s';
$lang['survey_added_to_queue'] = 'Se añade esta encuesta a la cola de Cron Job en %s';

$lang['survey_questions_string']          = 'Preguntas de la encuesta';
$lang['survey_insert_field']              = 'Insertar campo';
$lang['survey_field_checkbox']            = 'Caja';
$lang['survey_field_radio']               = 'Radio';
$lang['survey_field_input']               = 'Campo de entrada';
$lang['survey_field_textarea']            = 'Área de texto';
$lang['survey_question_required']         = 'Necesario';
$lang['survey_question_only_for_preview'] = 'Sólo para la vista previa';
$lang['survey_create_first']              = 'Es necesario crear la primera encuesta, entonces usted será capaz de insertar las preguntas.';


$lang['survey_dt_name']               = 'Nombre';
$lang['survey_dt_total_questions']    = 'Total de preguntas';
$lang['survey_dt_total_participants'] = 'Total de participantes';
$lang['survey_dt_date_created']       = 'Fecha de creación';
$lang['survey_dt_active']             = 'Activo';

$lang['survey_text_questions_results'] = 'Resultado de las preguntas de la encuesta';
$lang['survey_view_all_answers']       = 'Ver todas las respuestas';

# Staff tasks
$lang['new_task']       = 'Nueva tarea';
$lang['tasks']          = 'Tareas';
$lang['task']           = 'Tarea';
$lang['task_lowercase'] = 'tarea';
$lang['comment_string'] = 'Comentario';

$lang['task_marked_as_complete'] = 'Tarea marcada como completa';
$lang['task_follower_removed']   = 'Seguidor tarea eliminado exitosamente';
$lang['task_assignee_removed']   = 'El asignado a la tarea se ha eliminado exitosamente';

$lang['task_no_assignees'] = 'No hay asignados para esta tarea';
$lang['task_no_followers'] = 'Sin seguidores para esta tarea';

$lang['task_list_all']            = 'Todas';
$lang['task_list_not_assigned']   = 'Por asignado';
$lang['task_list_duedate_passed'] = 'Debido fecha pasada';
$lang['tasks_dt_name']            = 'Nombre';

$lang['task_single_priority']               = 'Prioridad';
$lang['task_single_start_date']             = 'Fecha de inicio';
$lang['task_single_due_date']               = 'Fecha de vencimiento';
$lang['task_single_finished']               = 'Terminado';
$lang['task_single_mark_as_complete']       = 'Marcar como completa';
$lang['task_single_edit']                   = 'Editar';
$lang['task_single_delete']                 = 'Borrar';
$lang['task_single_assignees']              = 'Comercial';
$lang['task_single_assignees_select_title'] = 'Asignar tareas para';
$lang['task_single_followers']              = 'Seguidores';
$lang['task_single_followers_select_title'] = 'Añadir seguidores';
$lang['task_single_add_new_comment']        = 'Agregar comentario';

$lang['task_add_edit_subject']     = 'Tema';
$lang['task_add_edit_priority']    = 'Prioridad';
$lang['task_priority_low']         = 'Bajo';
$lang['task_priority_medium']      = 'Medio';
$lang['task_priority_high']        = 'Alto';
$lang['task_priority_urgent']      = 'Urgente';
$lang['task_add_edit_start_date']  = 'Fecha de inicio';
$lang['task_add_edit_due_date']    = 'Fecha de vencimiento';
$lang['task_add_edit_description'] = 'Descripción de la tarea';

# Taxes
$lang['new_tax']       = 'Nuevo impuesto';
$lang['taxes']         = 'Impuestos';
$lang['tax']           = 'Impuesto';
$lang['tax_lowercase'] = 'impuesto';
$lang['tax_dt_name']   = 'Nombre de impuestos';
$lang['tax_dt_rate']   = 'Tasa (porcentaje)';

$lang['tax_add_edit_name'] = 'Nombre de impuestos';
$lang['tax_add_edit_rate'] = 'Tasa de impuestos (por ciento)';
$lang['tax_edit_title']    = 'Editar impuesto';
$lang['tax_add_title']     = 'Añadir nuevo impuesto';

# Ticket statuses
$lang['new_ticket_status']       = 'Nuevo estado de tickets';
$lang['ticket_statuses']         = 'Estados de los tickets';
$lang['ticket_status']           = 'Estado del ticket';
$lang['ticket_status_lowercase'] = 'estado del ticket';

$lang['ticket_statuses_dt_name']      = 'Nombre estado del ticket';
$lang['no_ticket_statuses_found']     = 'No se encontraron estados de los tickets';
$lang['ticket_statuses_table_total']  = 'Total %s';
$lang['ticket_status_add_edit_name']  = 'Nombre estado del ticket';
$lang['ticket_status_add_edit_color'] = 'Seleccionar color';
$lang['ticket_status_add_edit_order'] = 'Estado de la orden';

# Todos
$lang['new_todo']                  = 'Nueva tarea';
$lang['my_todos']                  = 'Los artículos de mis tareas pendientes';
$lang['todo']                      = 'Tareas artículos';
$lang['todo_lowercase']            = 'Tareas';
$lang['todo_status_changed']       = 'Tarea ha cambiado de estado';
$lang['todo_add_title']            = 'Agregar nueva tarea';
$lang['add_new_todo_description']  = 'Descripción';
$lang['no_finished_todos_found']   = 'No se encontraron tareas completadas';
$lang['no_unfinished_todos_found'] = 'No se encontraron tareas';
$lang['unfinished_todos_title']    = 'Tareas sin terminar';
$lang['finished_todos_title']      = 'Tareas completadas recientemente';

# Utilities
$lang['utility_activity_log']                        = 'Registro de actividades';
$lang['utility_activity_log_filter_by_date']         = 'Filtrar por fecha';
$lang['utility_activity_log_dt_description']         = 'Descripción';
$lang['utility_activity_log_dt_date']                = 'Fecha';
$lang['utility_activity_log_dt_staff']               = 'Equipo';
$lang['utility_calendar_new_event_title']            = 'Agregar un nuevo evento';
$lang['utility_calendar_new_event_start_date']       = 'Fecha de inicio';
$lang['utility_calendar_new_event_end_date']         = 'Fecha final';
$lang['utility_calendar_new_event_make_public']      = 'Hacer público';
$lang['utility_calendar_event_added_successfully']   = 'Nuevo evento añadido con éxito';
$lang['utility_calendar_event_deleted_successfully'] = 'Evento eliminado';
$lang['utility_calendar_new_event_placeholder']      = 'Título del evento';


# Navigation
$lang['nav_notifications']          = 'Notificaciones';
$lang['nav_my_profile']             = 'Mi perfil';
$lang['nav_edit_profile']           = 'Editar perfil';
$lang['nav_logout']                 = 'Cerrar sesión';
$lang['nav_no_notifications']       = 'No se encontraron notificaciones';
$lang['nav_view_all_notifications'] = 'Ver todas las notificaciones';
$lang['nav_notifications_tooltip']  = 'Ver notificaciones';

# Footer
$lang['clients_copyright'] = 'Derechos de autor de %s';

# Contracts
$lang['clients_contracts']               = 'Contratos';
$lang['clients_contracts_dt_subject']    = 'Tema';
$lang['clients_contracts_dt_start_date'] = 'Fecha de inicio';
$lang['clients_contracts_dt_end_date']   = 'Fecha final';

# Home
$lang['clients_quick_invoice_info']           = 'Información rápida de la factura';
$lang['clients_home_currency_select_tooltip'] = 'Es necesario seleccionar la moneda por que usted tiene facturas con moneda diferente';
# Invoices
$lang['clients_invoice_html_btn_download'] = 'Descargar';

$lang['clients_my_invoices']        = 'Mis facturas';
$lang['clients_invoice_dt_number']  = 'Nº factura';
$lang['clients_invoice_dt_date']    = 'Fecha';
$lang['clients_invoice_dt_duedate'] = 'Fecha de vencimiento';
$lang['clients_invoice_dt_amount']  = 'Valor';
$lang['clients_invoice_dt_status']  = 'Estado';

# Profile
$lang['clients_profile_heading'] = 'Perfil';

# Used for edit profile and register sTART
$lang['clients_firstname'] = 'Nombre';
$lang['clients_lastname']  = 'Apellido';
$lang['clients_email']     = 'Dirección de correo';
$lang['clients_company']   = 'Empresa';
$lang['clients_vat']       = 'NIT';
$lang['clients_phone']     = 'Teléfono';
$lang['clients_country']   = 'País';
$lang['clients_city']      = 'Ciudad';
$lang['clients_address']   = 'Dirección';
$lang['clients_zip']       = 'Código postal';
$lang['clients_state']     = 'Departamento';

# Used for edit profile and register eND

$lang['clients_register_password']        = 'Contraseña';
$lang['clients_register_password_repeat'] = 'Repite la contraseña';
$lang['clients_edit_profile_update_btn']  = 'Actualizar';

$lang['clients_edit_profile_change_password_heading'] = 'Cambia la contraseña';
$lang['clients_edit_profile_old_password']            = 'Contraseña anterior';
$lang['clients_edit_profile_new_password']            = 'nueva contraseña';
$lang['clients_edit_profile_new_password_repeat']     = 'Repite la contraseña';
$lang['clients_edit_profile_change_password_btn']     = 'Cambia la contraseña';
$lang['clients_profile_last_changed_password']        = 'Contraseña últimos modificados %s';

# Knowledge base
$lang['clients_knowledge_base']                    = 'Base de conocimiento';
$lang['clients_knowledge_base_articles_not_found'] = 'No hay artículos de la base de conocimientos encontrados';
$lang['clients_knowledge_base_find_useful']        = '¿Le ha resultado útil este artículo?';
$lang['clients_knowledge_base_find_useful_yes']    = 'Sí';
$lang['clients_knowledge_base_find_useful_no']     = 'No';
$lang['clients_article_only_1_vote_today']         = 'Se puede votar una vez en 24 horas';
$lang['clients_article_voted_thanks_for_feedback'] = 'Gracias por su colaboración';

# Tickets
$lang['clients_ticket_open_subject']               = 'Crear ticket';
$lang['clients_ticket_open_departments']           = 'Departamento';
$lang['clients_tickets_heading']                   = 'Tickets de soporte';
$lang['clients_ticket_open_service']               = 'Servicio';
$lang['clients_ticket_open_priority']              = 'Prioridad';
$lang['clients_ticket_open_body']                  = 'Cuerpo de tickets';
$lang['clients_ticket_attachments']                = 'Archivos adjuntos';
$lang['clients_single_ticket_string']              = 'Ticket';
$lang['clients_single_ticket_replied']             = 'Respondió: %s';
$lang['clients_single_ticket_information_heading'] = 'Información sobre los tickets';

$lang['clients_tickets_dt_number']     = 'Ticket #';
$lang['clients_tickets_dt_subject']    = 'Tema';
$lang['clients_tickets_dt_department'] = 'Departamento';
$lang['clients_tickets_dt_service']    = 'Servicio';
$lang['clients_tickets_dt_status']     = 'Estado';
$lang['clients_tickets_dt_last_reply'] = 'última respuesta';


$lang['clients_ticket_single_department']        = 'Departamento: %s';
$lang['clients_ticket_single_submitted']         = 'Inscrito: %s';
$lang['clients_ticket_single_status']            = 'Estado:';
$lang['clients_ticket_single_priority']          = 'Prioridad: %s';
$lang['clients_ticket_single_add_reply_btn']     = 'Añadir respuesta';
$lang['clients_ticket_single_add_reply_heading'] = 'Añadir respuesta a esta entrada';

# Login
$lang['clients_login_heading_no_register'] = 'Por favor iniciar sesión';
$lang['clients_login_heading_register']    = 'Por favor, inicie sesión o regístrese';
$lang['clients_login_email']               = 'Dirección de correo';
$lang['clients_login_password']            = 'Contraseña';
$lang['clients_login_remember']            = 'Recuérdame';
$lang['clients_login_login_string']        = 'Iniciar sesión';

# Register
$lang['clients_register_string']  = 'Registro';
$lang['clients_register_heading'] = 'Registro';

# Navigation
$lang['clients_nav_login']     = 'Iniciar sesión';
$lang['clients_nav_register']  = 'Registro';
$lang['clients_nav_invoices']  = 'Facturas';
$lang['clients_nav_contracts'] = 'Contratos';
$lang['clients_nav_kb']        = 'Base de conocimiento';
$lang['clients_nav_profile']   = 'Perfil';
$lang['clients_nav_logout']    = 'Cerrar sesión';

# version 1.0.1
# Admin
#
# Payments
$lang['payment_receipt']                               = 'Recibo de pago';
$lang['payment_for_string']                            = 'Pago por';
$lang['payment_date']                                  = 'Fecha de pago:';
$lang['payment_view_mode']                             = 'Modo de pago:';
$lang['payment_total_amount']                          = 'Valor total';
$lang['payment_table_invoice_number']                  = 'Número de la factura';
$lang['payment_table_invoice_date']                    = 'Fecha de la factura';
$lang['payment_table_invoice_amount_total']            = 'Total de la factura';
$lang['payment_table_payment_amount_total']            = 'Valor del pago';
$lang['payments_table_transaction_id']                 = 'ID de transacción: %s';
$lang['payment_getaway_token_not_found']               = 'Sin pasarela de pago';
$lang['online_payment_recorded_success']               = 'Pago registrado con éxito';
$lang['online_payment_recorded_success_fail_database'] = 'El pago se realiza correctamente pero no se pudo insertar el pago en la base de datos, por favor, contacta al administrador.';

# Leads
$lang['lead_convert_to_client']                = 'Convertir en cliente';
$lang['lead_convert_to_email']                 = 'Email';
$lang['lead_convert_to_client_firstname']      = 'Nombre';
$lang['lead_convert_to_client_lastname']       = 'Apellido';
$lang['lead_email_already_exists']             = 'El email contacto ya existe en los datos de los clientes';
$lang['lead_to_client_base_converted_success'] = 'El contacto se ha convertido a cliente exitosamente';
$lang['lead_have_client_profile']              = 'Este contacto tiene un perfil de cliente';
$lang['lead_converted_edit_client_profile']    = 'Editar perfil';

# Invoices
$lang['view_invoice_as_customer_tooltip']                                     = 'Ver factura como cliente';
$lang['invoice_add_edit_recurring']                                           = 'Facturas recurrentes?';
$lang['invoice_add_edit_recurring_no']                                        = 'No';
$lang['invoice_add_edit_recurring_month']                                     = 'Cada %s mes';
$lang['invoice_add_edit_recurring_months']                                    = 'Cada %s meses';
$lang['invoices_list_all']                                                    = 'Todas';
$lang['invoices_list_not_have_payment']                                       = 'Facturas con ningún registro de pago';
$lang['invoices_list_recurring']                                              = 'Facturas recurrentes';
$lang['invoices_list_made_payment_by']                                        = 'Pago realizado por %s';
$lang['invoices_create_invoice_from_recurring_only_on_paid_invoices']         = 'Crear la siguiente factura recurrente aunque la anterior no haya sido pagada';
$lang['invoices_create_invoice_from_recurring_only_on_paid_invoices_tooltip'] = '¿Crear la siguiente factura recurrente aunque la anterior no haya sido pagada?';
$lang['view_invoice_pdf_link_pay']                                            = 'Enlace para pago de la factura';

# Payment modes
$lang['payment_mode_add_edit_description']         = 'Cuentas bancarias / descripción';
$lang['payment_mode_add_edit_description_tooltip'] = 'Se puede establecer aquí la información de cuentas bancarias. Se mostrará la factura en HTmL.';
$lang['payment_modes_dt_description']              = 'Cuentas bancarias / descripción';
$lang['payment_modes_add_edit_announcement']       = 'Nota: Los modos de pago que figuran a continuación son los modos offline. Los modos de pago en línea se pueden configurar en preferencias -> pasarelas de pago.';
$lang['payment_mode_add_edit_active']              = 'Activo';
$lang['payment_modes_dt_active']                   = 'Activo';

# Contracts
$lang['contract_not_found'] = 'Contrato no encontrado. Tal vez se ha eliminado, verifique el registro de actividades';

# Settings
$lang['setting_bar_heading']                 = 'Configuración';
$lang['settings_group_online_payment_modes'] = 'Pasarela de pago';
$lang['settings_paymentmethod_mode_label']   = 'Etiqueta';
$lang['settings_paymentmethod_active']       = 'Activo';
$lang['settings_paymentmethod_currencies']   = 'Monedas';
$lang['settings_paymentmethod_testing_mode'] = 'Habilitar el modo de prueba';

$lang['settings_paymentmethod_paypal_username']  = 'PayPal API nombre de usuario';
$lang['settings_paymentmethod_paypal_password']  = 'PayPal API contraseña';
$lang['settings_paymentmethod_paypal_signature'] = 'Firma API';

$lang['settings_paymentmethod_stripe_api_secret_key']      = 'Stripe API clave secreta';
$lang['settings_paymentmethod_stripe_api_publishable_key'] = 'Stripe clave publica';
$lang['settings_limit_top_search_bar_results']             = 'Límite de los resultados de la barra de busqueda';

## Clients
$lang['client_phonenumber'] = 'Teléfono';

# Main clients
$lang['clients_register']                          = 'Registro';
$lang['clients_profile_updated']                   = 'Tu perfil ha sido actualizado';
$lang['clients_successfully_registered']           = 'Gracias por su registro';
$lang['clients_account_created_but_not_logged_in'] = 'Su cuenta ha sido creada, pero no ha entrado en nuestro sistema de forma automática. por favor, intente iniciar la sesión.';
# Tickets
$lang['clients_tickets_heading'] = 'Tickets de soporte técnico';

# Payments
// uses on Strippe page';
$lang['payment_for_invoice'] = 'El pago de la factura';
$lang['payment_total']       = 'Total: %s';

# Invoice
$lang['invoice_html_online_payment']             = 'Pago en línea';
$lang['invoice_html_online_payment_button_text'] = 'Pague ahora';
$lang['invoice_html_payment_modes_not_selected'] = 'Por favor, seleccione el modo de pago';
$lang['invoice_html_amount_blank']               = 'El valor total no puede estar en blanco o vacio';
$lang['invoice_html_offline_payment']            = 'Forma de pago';
$lang['invoice_html_amount']                     = 'Valor';


# version 1.0.2
# Admin
#
# DataTables
$lang['dt_button_column_visibility'] = 'Visibilidad';
$lang['dt_button_reload']            = 'Actualizar';
$lang['dt_button_excel']             = 'Excel';
$lang['dt_button_csv']               = 'CSV';
$lang['dt_button_pdf']               = 'PDF';
$lang['dt_button_print']             = 'Impresión';
$lang['is_not_active_export']        = 'No';
$lang['is_active_export']            = 'Sí';

# Invoice
$lang['invoice_add_edit_advanced_options']                = 'Opciones avanzadas';
$lang['invoice_add_edit_allowed_payment_modes']           = 'Modos de pago permitidos para esta factura';
$lang['invoice_add_edit_recurring_invoices_from_invoice'] = 'Facturas recurrentes de esta factura';
$lang['invoice_add_edit_no_payment_modes_found']          = 'No se encontraron modos de pago.';
$lang['invoice_html_total_pay']                           = 'Total: %s';

# Email templates
$lang['email_templates_table_heading_name'] = 'Nombre de la plantilla';
# General
$lang['discount_type']            = 'Tipo de descuento';
$lang['discount_type_after_tax']  = 'Después del impuesto';
$lang['discount_type_before_tax'] = 'Antes del impuesto';
$lang['terms_and_conditions']     = 'Términos y condiciones';
$lang['reference_no']             = 'Referencia #';
$lang['no_discount']              = 'Sin descuento';
$lang['view_stats_tooltip']       = 'Ver estadísticas rápidas';
# Clients
$lang['zip_from_date']            = 'De la fecha:';
$lang['zip_to_date']              = 'Hasta la fecha:';
$lang['client_zip_payments']      = 'Los pagos ZIP';
$lang['client_zip_invoices']      = 'Las facturas ZIP';
$lang['client_zip_estimates']     = 'Las presupuestos ZIP';
$lang['client_zip_status']        = 'Estado';
$lang['client_zip_status_all']    = 'Todas';
$lang['client_zip_payment_modes'] = 'Pago realizado por';
$lang['client_zip_no_data_found'] = 'No se han encontrado %s';

# Payments
$lang['payment_mode']         = 'Forma de pago';
$lang['payment_view_heading'] = 'Pago';

# Settings
$lang['settings_allow_payment_amount_to_be_modified']               = 'Permitir al cliente modificar la cantidad a pagar (para pagos en línea)';
$lang['settings_survey_send_emails_per_cron_run']                   = 'Cantidad de mensajes de email enviados por el Cron Job (encuestas)';
$lang['settings_survey_send_emails_per_cron_run_tooltip']           = 'Esta opción se utiliza cuando se envían encuestas. La encuesta de Cron Job se ejecuta cada 5 minutos. puede establecer la cantidad de email que se envía cada 5 minutos.';
$lang['settings_delete_only_on_last_invoice']                       = 'Eliminar factura (permitido sólamente en la última factura)';
$lang['settings_sales_estimate_prefix']                             = 'Formato de prefijo para presupuesto';
$lang['settings_sales_next_estimate_number']                        = 'Siguiente número de presupuesto';
$lang['settings_sales_next_estimate_number_tooltip']                = 'Establecer este campo a 1 si desea empezar de inicio.';
$lang['settings_sales_decrement_estimate_number_on_delete']         = 'Número de presupuesto de disminucion cuando borra';
$lang['settings_sales_decrement_estimate_number_on_delete_tooltip'] = '¿Quieres disminuir el número de presupuesto cuando se elimine el último presupuesto?';
$lang['settings_sales_estimate_number_format']                      = 'Formato de número de presupuesto';
$lang['settings_sales_estimate_number_format_year_based']           = 'Año de base';
$lang['settings_sales_estimate_number_format_number_based']         = 'Número de base (000001)';
$lang['settings_delete_only_on_last_estimate']                      = 'Eliminar presupuesto, permitido sólo en la última factura';
$lang['settings_send_test_email_heading']                           = 'Enviar email de prueba';
$lang['settings_send_test_email_subheading']                        = 'Enviar email de prueba para asegurarse de que la configuración de SMTP se ha establecido correctamente.';
$lang['settings_send_test_email_string']                            = 'Dirección de correo';
$lang['settings_smtp_settings_heading']                             = 'Configuración de SMTP';
$lang['settings_smtp_settings_subheading']                          = 'Configuración de email principal';
$lang['settings_sales_heading_general']                             = 'General';
$lang['settings_sales_heading_invoice']                             = 'Factura';
$lang['settings_sales_heading_estimates']                           = 'Presupuestos';
$lang['settings_sales_cron_invoice_heading']                        = 'Factura';

# Tasks
$lang['tasks_dt_datestart'] = 'Fecha de inicio';

# Invoice general
$lang['invoice_discount'] = 'Descuento';

# Settings
$lang['settings_rtl_support_admin']                                   = 'RTL área de administración (de derecha a izquierda) bETA';
$lang['settings_rtl_support_client']                                  = 'RTL área del cliente (derecha a izquierda) bETA';
$lang['settings_estimate_auto_convert_to_invoice_on_client_accept']   = 'Auto convertir el presupuesto en factura después de aceptada por el cliente';
$lang['settings_exclude_estimate_from_client_area_with_draft_status'] = 'Excluir las presupuestos con el estado de basura del área del cliente';

# Months
$lang['January']   = 'Enero';
$lang['February']  = 'Febrero';
$lang['March']     = 'Marzo';
$lang['April']     = 'Abril';
$lang['May']       = 'Mayo';
$lang['June']      = 'Junio';
$lang['July']      = 'Julio';
$lang['August']    = 'Agosto';
$lang['September'] = 'Septiembre';
$lang['October']   = 'Octubre';
$lang['November']  = 'Noviembre';
$lang['December']  = 'Diciembre';

# Time ago function translate
$lang['time_ago_just_now']  = 'ahora mismo';
$lang['time_ago_minute']    = 'hace un minuto';
$lang['time_ago_minutes']   = 'hace %s minutos';
$lang['time_ago_hour']      = 'hace una hora';
$lang['time_ago_hours']     = 'hace %s horas';
$lang['time_ago_yesterday'] = 'ayer';
$lang['time_ago_days']      = 'hace %s días';
$lang['time_ago_week']      = 'hace una semana';
$lang['time_ago_weeks']     = 'hace %s semanas';
$lang['time_ago_month']     = 'hace un mes';
$lang['time_ago_months']    = 'hace %s meses';
$lang['time_ago_year']      = 'hace un año';
$lang['time_ago_years']     = 'hace %s años';


# Estimates
$lang['estimates']                          = 'Presupuestos';
$lang['estimate']                           = 'Presupuesto';
$lang['estimate_lowercase']                 = 'presupuesto';
$lang['create_new_estimate']                = 'Crear presupuesto';
$lang['view_estimate']                      = 'Ver presupuesto';
$lang['estimate_sent_to_client_success']    = 'EL presupuesto ha sido enviado con éxito al cliente';
$lang['estimate_sent_to_client_fail']       = 'Problema al enviar el presupuesto';
$lang['estimate_view']                      = 'Ver presupuesto';
$lang['estimate_select_customer']           = 'Cliente';
$lang['estimate_add_edit_number']           = 'Número presupuesto';
$lang['estimate_add_edit_date']             = 'Fecha del presupuesto';
$lang['estimate_add_edit_expirydate']       = 'Fecha de caducidad';
$lang['estimate_add_edit_currency']         = 'Moneda';
$lang['estimate_add_edit_client_note']      = 'Nota cliente';
$lang['estimate_add_edit_admin_note']       = 'Nota del admin';
$lang['estimates_toggle_table_tooltip']     = 'Ver tabla completa';
$lang['estimate_add_edit_advanced_options'] = 'Opciones avanzadas';
$lang['estimate_to']                        = 'Para';
$lang['estimates_list_all']                 = 'Todas';

$lang['estimate_invoiced_date']                  = 'Presupuesto facturas en %s';
$lang['edit_estimate_tooltip']                   = 'Editar presupuesto';
$lang['delete_estimate_tooltip']                 = 'Eliminar presupuesto';
$lang['estimate_sent_to_email_tooltip']          = 'Envía por email';
$lang['estimate_already_send_to_client_tooltip'] = 'Este presupuesto ya se envío al cliente %s';
$lang['estimate_view_activity_tooltip']          = 'Registro de actividades';

$lang['estimate_send_to_client_modal_heading']    = 'Enviar este presupuesto al cliente';
$lang['estimate_send_to_client_attach_pdf']       = 'Adjuntar presupuesto PDF';
$lang['estimate_send_to_client_preview_template'] = 'Vista previa de plantilla de email';

$lang['estimate_dt_table_heading_number']     = 'Presupuesto #';
$lang['estimate_dt_table_heading_date']       = 'Fecha';
$lang['estimate_dt_table_heading_client']     = 'Cliente';
$lang['estimate_dt_table_heading_expirydate'] = 'Fecha de caducidad';
$lang['estimate_dt_table_heading_amount']     = 'Valor';
$lang['estimate_dt_table_heading_status']     = 'Estado';
$lang['estimate_convert_to_invoice']          = 'Convertir a factura';

# Clients
$lang['client_payments_tab'] = 'Pagos';

# Estimate general
$lang['estimate_pdf_heading']            = 'Presupuesto';
$lang['estimate_table_item_heading']     = 'Artículo';
$lang['estimate_table_quantity_heading'] = 'Cantidad';
$lang['estimate_table_rate_heading']     = 'Precio';
$lang['estimate_table_tax_heading']      = 'Impuesto';
$lang['estimate_table_amount_heading']   = 'Valor';
$lang['estimate_subtotal']               = 'Total neto';
$lang['estimate_adjustment']             = 'Ajuste';
$lang['estimate_discount']               = 'Descuento';
$lang['estimate_total']                  = 'Total';
$lang['estimate_to']                     = 'Para';
$lang['estimate_data_date']              = 'Fecha del presupuesto';
$lang['estimate_data_expiry_date']       = 'Fecha de caducidad';
$lang['estimate_note']                   = 'Nota:';
$lang['estimate_status_draft']           = 'Borrador';
$lang['estimate_status_sent']            = 'Enviado';
$lang['estimate_status_declined']        = 'Rechazado';
$lang['estimate_status_accepted']        = 'Aceptado';
$lang['estimate_status_expired']         = 'Expirado';
$lang['estimate_note']                   = 'Nota:';

## Clients
$lang['clients_estimate_dt_number']             = 'Presupuesto nº';
$lang['clients_estimate_dt_date']               = 'Fecha';
$lang['clients_estimate_dt_duedate']            = 'Fecha de caducidad';
$lang['clients_estimate_dt_amount']             = 'Valor';
$lang['clients_estimate_dt_status']             = 'Estado';
$lang['clients_nav_estimates']                  = 'Presupuestos';
$lang['clients_decline_estimate']               = 'No aceptar';
$lang['clients_accept_estimate']                = 'Aceptar';
$lang['clients_my_estimates']                   = 'Presupuestos';
$lang['clients_estimate_invoiced_successfully'] = 'Presupuesto aceptado. Aquí está la factura de estepresupuesto';
$lang['clients_estimate_accepted_not_invoiced'] = 'Gracias por aceptar este presupuesto';
$lang['clients_estimate_declined']              = 'Presupuesto rechazado. puede aceptar el presupuesto en cualquier momento antes de la fecha de caducidad';
$lang['clients_estimate_failed_action']         = 'No se pudo tomar una decisión sobre este presupuesto';
$lang['client_add_edit_profile']                = 'Perfil';

# version 1.0.3


# Custom fields
$lang['custom_field']                      = 'Campo personalizado';
$lang['custom_field_lowercase']            = 'campo personalizado';
$lang['custom_fields']                     = 'Campos personalizados';
$lang['new_custom_field']                  = 'Nuevo campo personalizado';
$lang['custom_field_name']                 = 'Nombre del campo';
$lang['custom_field_add_edit_type']        = 'Tipo';
$lang['custom_field_add_edit_belongs_top'] = 'El campo pertenece
';
$lang['custom_field_add_edit_options']         = 'Opciones';
$lang['custom_field_add_edit_options_tooltip'] = 'Utilice únicamente para ciertos tipos. Rellene el campo con las opciones separadas por comas. Ej. Manzana, naranja, plátano';
$lang['custom_field_add_edit_order']           = 'Orden';

$lang['custom_field_dt_field_to']       = 'Pertenece a';
$lang['custom_field_dt_field_name']     = 'Nombre';
$lang['custom_field_dt_field_type']     = 'Tipo';
$lang['custom_field_add_edit_active']   = 'Activo';
$lang['custom_field_add_edit_disabled'] = 'Deshabilitar';

# Ticket replies
$lang['ticket_reply'] = 'Respuesta de tickets';

# Admin customizer sidebar
$lang['asc_custom_fields'] = 'Campos personalizados';

# Contracts
$lang['contract_types']          = 'Tipos de contratos';
$lang['contract_type']           = 'Tipo de contrato';
$lang['new_contract_type']       = 'Nuevo tipo de contrato';
$lang['contract_type_lowercase'] = 'contrato';
$lang['contract_type_name']      = 'Nombre';

$lang['contract_types_list_name'] = 'Tipo de contrato';

# Customizer menu
$lang['acs_contracts']      = 'Contratos';
$lang['acs_contract_types'] = 'Tipos de contratos';

# Version 1.0.4
# Invoice items
$lang['invoice_item_long_description'] = 'Descripción larga';
# Customers
$lang['clients_list_phone']                = 'Teléfono';
$lang['client_expenses_tab']               = 'Gastos';
$lang['customers_summary']                 = 'Resumen de los clientes';
$lang['customers_summary_active']          = 'Contactos activos';
$lang['customers_summary_inactive']        = 'Contactos inactivos';
$lang['customers_summary_logged_in_today'] = 'Conectados actualmente';

# Authentication
$lang['admin_auth_forgot_password_email']     = 'Dirección de correo';
$lang['admin_auth_forgot_password_heading']   = 'Se te olvidó tu contraseña';
$lang['admin_auth_login_heading']             = 'Iniciar sesión';
$lang['admin_auth_login_email']               = 'Dirección de correo';
$lang['admin_auth_login_password']            = 'Contraseña';
$lang['admin_auth_login_remember_me']         = 'Recuérdame';
$lang['admin_auth_login_button']              = 'Iniciar sesión';
$lang['admin_auth_login_fp']                  = '¿Se olvidó de la contraseña?';
$lang['admin_auth_reset_password_heading']    = 'Restablecer la contraseña';
$lang['admin_auth_reset_password']            = 'Contraseña';
$lang['admin_auth_reset_password_repeat']     = 'Repite la contraseña';
$lang['admin_auth_invalid_email_or_password'] = 'email o contraseña no válidos';
$lang['admin_auth_inactive_account']          = 'Cuenta inactiva';
# Calender
$lang['calendar_estimate']          = 'Presupuesto';
$lang['calendar_invoice']           = 'Factura';
$lang['calendar_contract']          = 'Contrato';
$lang['calendar_customer_reminder'] = 'Recordatorio al cliente';
$lang['calendar_event']             = 'Evento';
$lang['calendar_task']              = 'Tarea';
# Leads
$lang['lead_edit_delete_tooltip'] = 'Eliminar contacto';
$lang['lead_attachments']         = 'Archivos adjuntos';
# Admin customizer sidebar
$lang['acs_finance'] = 'Presupuestos';
# Settings
$lang['settings_show_sale_agent_on_invoices']       = 'Mostrar el agente en la factura';
$lang['settings_show_sale_agent_on_estimates']      = 'Mostrar el agente en presupuesto';
$lang['settings_predefined_predefined_term']        = 'Términos y condiciones predefinidos';
$lang['settings_predefined_clientnote']             = 'Nota predefinido';
$lang['settings_custom_pdf_logo_image_url']         = 'PDF personalizado, URL del logo ce la compañía';
$lang['settings_custom_pdf_logo_image_url_tooltip'] = 'Probablemente va a tener problemas con las imágenes pNG con transparencia. Asegúrate de insetar el URL de una imagen en jPG con fondo blanco preferiblemente.';

# General
$lang['sale_agent_string']               = 'Agente';
$lang['amount_display_in_base_currency'] = 'Valor se muestra en su moneda base';

# Leads
$lang['leads_summary'] = 'Resumen de prospectos';

# Contracts
$lang['contract_value']                 = 'Valor del contrato';
$lang['contract_trash']                 = 'Basura';
$lang['contracts_view_trash']           = 'Ver basura';
$lang['contracts_view_all']             = 'Todas';
$lang['contracts_view_exclude_trashed'] = 'Excluir los contratos basura';
$lang['contract_value_tooltip']         = 'Añadir valor del contrato. El valor se mostrará en su moneda base.';
$lang['contract_trash_tooltip']         = 'Si envía un contrato a la basura, no será mostrado en el lado del cliente.';

$lang['contract_renew_heading']               = 'Renovar contrato';
$lang['contract_summary_heading']             = 'Resumen de contrato';
$lang['contract_summary_expired']             = 'Expirado';
$lang['contract_summary_active']              = 'Activo';
$lang['contract_summary_about_to_expire']     = 'A punto de caducar';
$lang['contract_summary_recently_added']      = 'Recientemente añadido';
$lang['contract_summary_trash']               = 'Basura';
$lang['contract_summary_by_type']             = 'Por tipo de contratos';
$lang['contract_summary_by_type_value']       = 'Pedidos abiertos por valor de tipo';
$lang['contract_renewed_successfully']        = 'Contrato renovado exitosamente';
$lang['contract_renewed_fail']                = 'Problema al renovar el contrato. Contactar al administrador';
$lang['no_contract_renewals_found']           = 'No se encuentran renovaciones de contratos';
$lang['no_contract_renewals_history_heading'] = 'Historial de renovación de contrato';
$lang['contract_renewed_by']                  = '%s renovado este contrato';
$lang['contract_renewal_deleted']             = 'Renovación eliminada con éxito';
$lang['contract_renewal_delete_fail']         = 'No se pudo eliminar la renovación del contrato. Contactar al administrador';
$lang['contract_renewal_new_value']           = 'Nuevo valor del contrato: %s';
$lang['contract_renewal_old_value']           = 'Valor antiguo contrato: %s';
$lang['contract_renewal_new_start_date']      = 'Nueva fecha de inicio:% ??s';
$lang['contract_renewal_old_start_date']      = 'La anterior fecha de inicio del contrato fue: %s';
$lang['contract_renewal_new_end_date']        = 'Nueva fecha de finalización: %s';
$lang['contract_renewal_old_end_date']        = 'La fecha de finalización del contrato fue: %s';
$lang['contract_attachment']                  = 'Adjunto archivo';

# Admin aside menu
$lang['als_goals_tracking']     = 'Objetivos de seguimiento';
$lang['als_expenses']           = 'Gastos';
$lang['als_reports_expenses']   = 'Gastos';
$lang['als_expenses_vs_income'] = 'Gastos vs ingresos';

# Invoices
$lang['invoice_attach_file']           = 'Adjuntar archivo';
$lang['invoice_mark_as_sent']          = 'Marcar como enviado';
$lang['invoice_marked_as_sent']        = 'Factura marcado como enviado con éxito';
$lang['invoice_marked_as_sent_failed'] = 'Error al marcar la factura en que fue enviado';

# Goals tracking
$lang['goals']                                         = 'Metas';
$lang['goal']                                          = 'Meta';
$lang['goals_tracking']                                = 'Objetivos de seguimiento';
$lang['new_goal']                                      = 'Nueva meta';
$lang['goal_lowercase']                                = 'meta';
$lang['goal_start_date']                               = 'Fecha inicial';
$lang['goal_end_date']                                 = 'Fecha final';
$lang['goal_subject']                                  = 'Asunto';
$lang['goal_description']                              = 'Descripción';
$lang['goal_type']                                     = 'Tipo de objetivo';
$lang['goal_achievement']                              = 'Logro';
$lang['goal_contract_type']                            = 'Tipo de contrato';
$lang['goal_notify_when_fail']                         = 'Notificar a los miembros del personal cuando no logró alcanzar una meta';
$lang['goal_notify_when_achieve']                      = 'Notificar a los miembros del personal cuando se alcanza una meta';
$lang['goal_progress']                                 = 'Progreso';
$lang['goal_total']                                    = 'Total: %s';
$lang['goal_result_heading']                           = 'Progreso de la meta';
$lang['goal_income_shown_in_base_currency']            = 'Los ingresos totales se muestra en la divisa de base';
$lang['goal_notify_when_end_date_arrives']             = 'Los miembros del personal serán notificados cuando llega la fecha de finalización';
$lang['goal_staff_members_notified_about_achievement'] = 'Los miembros del personal son notificados acerca de este logro de la meta';
$lang['goal_staff_members_notified_about_failure']     = 'Algunos miembros del personal son notificados sobre el fracaso';
$lang['goal_notify_staff_manually']                    = 'Notificar a los miembros del equipo manualmente';
$lang['goal_notify_staff_notified_manually_success']   = 'Los miembros del personal son notificados acerca del resultado de la meta';
$lang['goal_notify_staff_notified_manually_fail']      = 'No se ha podido notificar a los miembros del personal acerca del resultado de la meta';

$lang['goal_achieved'] = 'Conseguido';
$lang['goal_failed']   = 'Fallado';
$lang['goal_close']    = 'Cerrado';

$lang['goal_type_total_income']                                         = 'Total de ingresos logradas';
$lang['goal_type_convert_leads']                                        = 'Convertir X prospectos';
$lang['goal_type_increase_customers_without_leads_conversions']         = 'Aumentar el número de clientes';
$lang['goal_type_increase_customers_without_leads_conversions_subtext'] = 'Conversion excluida del contacto';

$lang['goal_type_increase_customers_with_leads_conversions']         = 'Aumentar el número de clientes';
$lang['goal_type_increase_customers_with_leads_conversions_subtext'] = 'Conversión de contacto permitida';
$lang['goal_type_make_contracts_by_type_calc_database']              = 'Hacer contratos por tipo';
$lang['goal_type_make_contracts_by_type_calc_database_subtext']      = 'Se calcula a partir de la fecha añadido a la base de datos';
$lang['goal_type_make_contracts_by_type_calc_date']                  = 'Hacer contratos por tipo';
$lang['goal_type_make_contracts_by_type_calc_date_subtext']          = 'Se calcula a partir de la fecha de inicio del contrato';
$lang['goal_type_total_estimates_converted']                         = 'X presupuestos de conversiones';
$lang['goal_type_total_estimates_converted_subtext']                 = 'Se tomará sólo presupuestos que se convertirán en facturas';
$lang['goal_type_income_subtext']                                    = 'Los ingresos se calcularán en su moneda base (no convertido)';
# Payments
$lang['payment_transaction_id'] = 'ID de la transacción';
# Settings menu
$lang['acs_expense_categories'] = 'Categorías de gastos';
# Expeneses
$lang['expense_category']                             = 'Categoría del gasto';
$lang['expense_category_lowercase']                   = 'categoría de gastos';
$lang['new_expense']                                  = 'Registrar gasto';
$lang['expense_add_edit_name']                        = 'Nombre de la categoría';
$lang['expense_add_edit_description']                 = 'Descripción de categoría';
$lang['expense_categories']                           = 'Categorías de gastos';
$lang['new_expense_category']                         = 'Nueva categoría';
$lang['dt_expense_description']                       = 'Descripción';
$lang['expense']                                      = 'Gastos';
$lang['expenses']                                     = 'Gastos';
$lang['expense_lowercase']                            = 'gastos';
$lang['expense_add_edit_customer']                    = 'Cliente';
$lang['expense_add_edit_note']                        = 'Nota';
$lang['expense_add_edit_date']                        = 'Fecha de gastos';
$lang['expense_add_edit_amount']                      = 'Valor';
$lang['expense_add_edit_billable']                    = 'facturable';
$lang['expense_add_edit_attach_receipt']              = 'adjuntar recibo de pago';
$lang['expense_add_edit_reference_no']                = 'Referencia #';
$lang['expense_receipt']                              = 'Recibo de gastos';
$lang['expense_receipt_lowercase']                    = 'recibo de expensas';
$lang['expense_dt_table_heading_category']            = 'Categoría';
$lang['expense_dt_table_heading_amount']              = 'Valor';
$lang['expense_dt_table_heading_date']                = 'Fecha';
$lang['expense_dt_table_heading_reference_no']        = 'Referencia #';
$lang['expense_dt_table_heading_customer']            = 'Cliente';
$lang['expense_dt_table_heading_payment_mode']        = 'Modo de pago';
$lang['expense_converted_to_invoice']                 = 'Gasto convertido a factura';
$lang['expense_converted_to_invoice_fail']            = 'No se pudo convertir este gasto a factura comprobar el registro de errores.';
$lang['expense_copy_success']                         = 'El gasto se copió con éxito.';
$lang['expense_copy_fail']                            = 'No se pudo copiar gasto. por favor, compruebe los campos necesarios y vuelva a intentarlo';
$lang['expenses_list_all']                            = 'Todas';
$lang['expenses_list_billable']                       = 'Facturable';
$lang['expenses_list_non_billable']                   = 'No facturable';
$lang['expenses_list_invoiced']                       = 'Facturado';
$lang['expenses_list_unbilled']                       = 'Por facturar';
$lang['expenses_list_recurring']                      = 'Periódico';
$lang['expense_invoice_delete_not_allowed']           = 'Usted no puede eliminar este gasto. El gasto ya se ha facturado.';
$lang['expense_convert_to_invoice']                   = 'Convertir a la factura';
$lang['expense_edit']                                 = 'Edición de gastos';
$lang['expense_delete']                               = 'Borrar';
$lang['expense_copy']                                 = 'Copia';
$lang['expense_invoice_not_created']                  = 'No se ha creado la factura';
$lang['expense_billed']                               = 'Facturado';
$lang['expense_not_billed']                           = 'Por facturar';
$lang['expense_customer']                             = 'Cliente';
$lang['expense_note']                                 = 'Nota:';
$lang['expense_date']                                 = 'Fecha:';
$lang['expense_ref_noe']                              = 'Nº ref:';
$lang['expense_amount']                               = 'Valor:';
$lang['expense_recurring_indicator']                  = 'Periódico';
$lang['expense_already_invoiced']                     = 'Este gasto ya se factura';
$lang['expense_recurring_auto_create_invoice']        = 'Creación automática de facturas';
$lang['expense_recurring_send_custom_on_renew']       = 'Enviar la factura al cliente por email cuando el gasto se repite';
$lang['expense_recurring_autocreate_invoice_tooltip'] = 'Si esta opción está marcada la factura para el cliente se ha creado automáticamente cuando se renovó el gasto.';
$lang['expenses_yearly_by_categories']                = 'Los gastos anuales por categorías';
$lang['total_expenses_for']                           = 'Los gastos totales por // año ';
$lang['expenses_report_for']                          = 'Los gastos por // año';
# Custom fields
$lang['custom_field_required']    = 'Necesario';
$lang['custom_field_show_on_pdf'] = 'Mostrar en PDF';
$lang['custom_field_leads']       = 'Prospectos';
$lang['custom_field_customers']   = 'Clientes';
$lang['custom_field_staff']       = 'Equipo';
$lang['custom_field_contracts']   = 'Contratos';
$lang['custom_field_tasks']       = 'Tareas';
$lang['custom_field_expenses']    = 'Gastos';
$lang['custom_field_invoice']     = 'Factura';
$lang['custom_field_estimate']    = 'Estimar';
# Tickets
$lang['ticket_single_private_staff_notes'] = 'Notas privadas del personal';


# Business news
$lang['business_news'] = 'Noticias de negocios en internet';

# Navigation
$lang['nav_todo_items'] = 'Tareas';
# Clients
# Contracts
$lang['clients_contracts_type'] = 'Tipo de contrato';

# version 1.0.5
# General
$lang['no_tax']                              = 'Sin impuestos';
$lang['numbers_not_formatted_while_editing'] = 'La tasa en el campo de entrada no está formateada, editar/añadir el artículo y debe seguir siendo no formateado. No intente dar formato manualmente aquí.';
# Contracts='
$lang['contracts_view_expired']         = 'Expirado';
$lang['contracts_view_without_dateend'] = 'Los contratos sin fecha de finalización';

# Email templates
$lang['email_template_contracts_fields_heading'] = 'Contratos';
# Invoices general='
$lang['invoice_estimate_general_options'] = 'Opciones generales';
$lang['invoice_table_item_description']   = 'Descripción';
$lang['invoice_recurring_indicator']      = 'Periódico';

# Estimates
$lang['estimate_convert_to_invoice_successfully'] = 'Presupuesto se convirtió a factura con éxito';
$lang['estimate_table_item_description']          = 'Descripción';

# version 1.0.6
# Invoices
# Currencies
$lang['cant_delete_base_currency'] = 'Usted no puede eliminar la moneda base. Es necesario asignar la nueva moneda de referencia y después suprimir esta.';
$lang['invoice_copy']              = 'Copia de la factura';
$lang['invoice_copy_success']      = 'Factura copiada con éxito';
$lang['invoice_copy_fail']         = 'No se pudo copiar la factura';
$lang['invoice_due_after_help']    = 'Ajuste a cero para evitar el cálculo.';

$lang['show_shipping_on_invoice'] = 'Mostrar los detalles del envío en la factura';

# Estimates
$lang['show_shipping_on_estimate']         = 'Mostrar los detalles del envío en las presupuestos';
$lang['is_invoiced_estimate_delete_error'] = 'Este presupuesto está facturado. No se puede eliminar el presupuesto';

# Customers & invoices / estimates
$lang['ship_to']                  = 'Dirección de envío';
$lang['customer_profile_details'] = 'Detalles del cliente';
$lang['billing_shipping']         = 'Envío de factura';
$lang['billing_address']          = 'Dirección de cobro';
$lang['shipping_address']         = 'Dirección de envío';

$lang['billing_street']  = 'Calle';
$lang['billing_city']    = 'Localidad';
$lang['billing_state']   = 'Departamento';
$lang['billing_zip']     = 'Código postal';
$lang['billing_country'] = 'País';

$lang['shipping_street']                    = 'Calle';
$lang['shipping_city']                      = 'Localidad';
$lang['shipping_state']                     = 'Departamento';
$lang['shipping_zip']                       = 'Código postal';
$lang['shipping_country']                   = 'País';
$lang['get_shipping_from_customer_profile'] = 'Obtener detalles del envío desde el perfil de cliente';

# Customer
$lang['customer_default_currency']                             = 'Moneda predeterminada';
$lang['customer_update_address_info_on_invoices']              = 'Actualizar la información de envío / facturación en todas las facturas / presupuestos anteriores';
$lang['customer_update_address_info_on_invoices_help']         = 'Si marca este campo el envío y la información de facturación se actualizarán para todas las facturas y presupuestos. Nota: Las facturas con estado abonado suele verse afectados.';
$lang['setup_google_api_key_customer_map']                     = 'Configuración clave API de Google Con el fin de ver al mapa del cliente';
$lang['customer_attachments_file']                             = 'Archivo';
$lang['client_send_set_password_email']                        = 'Enviar email para configurar contraseña';
$lang['customer_billing_same_as_profile']                      = 'Igual que la información del cliente';
$lang['customer_billing_copy']                                 = 'Copiar dirección de facturación';
$lang['customer_map']                                          = 'Mapa';
$lang['set_password_email_sent_to_client']                     = 'Email para configurar la contraseña se ha enviado exitosamente al cliente';
$lang['set_password_email_sent_to_client_and_profile_updated'] = 'Perfil actualizado. El email para establecer la contraseña ha sido enviado con éxito al cliente';
$lang['customer_attachments']                                  = 'Archivos';
$lang['customer_longitude']                                    = 'Longitud (mapas)';
$lang['customer_latitude']                                     = 'Latitud (mapas)';

# Authentication
$lang['admin_auth_set_password']         = 'Contraseña';
$lang['admin_auth_set_password_repeat']  = 'Repite la contraseña';
$lang['admin_auth_set_password_heading'] = 'Establecer contraseña';
# General
$lang['apply']                         = 'Aplicar';
$lang['department_calendar_id']        = 'ID de Google Calendar';
$lang['localization_default_language'] = 'Idioma predeterminado';
$lang['system_default_string']         = 'Sistema por defecto';
$lang['advanced_options']              = 'Opciones avanzadas';
# Expenses
$lang['expense_list_invoice']  = 'Facturado';
$lang['expense_list_billed']   = 'Facturado';
$lang['expense_list_unbilled'] = 'No facturado';
# Leads
$lang['lead_merge_custom_field']          = 'Combinar como campo personalizado';
$lang['lead_merge_custom_field_existing'] = 'Combinar con el campo de base de datos existente';
$lang['lead_dont_merge_custom_field']     = 'No fusionar';
$lang['lost_leads']                       = 'Prospectos perdidos';
$lang['junk_leads']                       = 'Prospectos basura';
$lang['lead_mark_as_lost']                = 'Marcar como perdido';
$lang['lead_unmark_as_lost']              = 'No marcar el contacto como perdido';
$lang['lead_marked_as_lost']              = 'Contacto marcado como perdido exitosamente';
$lang['lead_unmarked_as_lost']            = 'Contacto no marcado como perdido exitosamente';
$lang['leads_status_color']               = 'Color';

$lang['lead_mark_as_junk']     = 'Marcar como basura';
$lang['lead_unmark_as_junk']   = 'No marcar el contacto como basura';
$lang['lead_marked_as_junk']   = 'Contacto marcado como basura con éxito';
$lang['lead_unmarked_as_junk'] = 'Contacto desmarcado como basura con éxito';

$lang['lead_not_found']     = 'Contacto no encontrado';
$lang['lead_lost']          = 'Perdido';
$lang['lead_junk']          = 'Basura';
$lang['leads_not_assigned'] = 'No asignado';
# Contacts
$lang['contract_not_visible_to_client'] = 'Esconder de los clientes';
$lang['contract_edit_overview']         = 'contrato general';
$lang['contract_attachments']           = 'Archivos adjuntos';
# Tasks
$lang['task_view_make_public']     = 'Hacer público';
$lang['task_is_private']           = 'Tarea privada';
$lang['task_finished']             = 'Terminado';
$lang['task_single_related']       = 'Relacionado';
$lang['task_unmark_as_complete']   = 'Desmarcar como completa';
$lang['task_unmarked_as_complete'] = 'Tarea sin marcar como completa';
$lang['task_relation']             = 'Relacionado';
$lang['task_public']               = 'Público';
$lang['task_public_help']          = 'Si se establece esta tarea pública será visible para todos los miembros del personal, de lo contrario será visible sólo para usuarios que están asignados, seguidores, creador o administradores.';
# Settings
$lang['settings_general_favicon']                                            = 'Icono';
$lang['settings_output_client_pdfs_from_admin_area_in_client_language']      = 'Idioma de salida de documentos PDF';
$lang['settings_output_client_pdfs_from_admin_area_in_client_language_help'] = 'Si esta opción está establecida en sí y el idioma por defecto del sistema es inglés y el cliente tiene asignada una lengua diferente los documentos PDF se enviarán en el idioma del cliente.';
$lang['settings_cron_surveys']                                               = 'Encuestas';
$lang['settings_default_tax']                                                = 'Impuestos por defecto';
$lang['setup_calendar_by_departments']                                       = 'Configuración del calendario por los departamentos.';
$lang['settings_calendar']                                                   = 'Calendario';
$lang['settings_sales_invoice_due_after']                                    = 'Factura vence después de X días';
$lang['settings_google_api']                                                 = 'Google API key';
$lang['settings_gcal_main_calendar_id']                                      = 'ID de Google Calendar';
$lang['settings_gcal_main_calendar_id_help']                                 = 'Este es el calendario prinipal de la empresa. Se mostrarán todos los eventos de este calendario. Si desea especificar un calendario basado en los departamentos puede agregar en el departamento un iD de Google Calendar.';

$lang['show_on_calendar']                    = 'Mostrar en el calendario';
$lang['show_invoices_on_calendar']           = 'Facturas';
$lang['show_estimates_on_calendar']          = 'Presupuestos';
$lang['show_contracts_on_calendar']          = 'Contratos';
$lang['show_tasks_on_calendar']              = 'Tareas';
$lang['show_customer_reminders_on_calendar'] = 'Recordatorio de clientes';

# Leads
$lang['copy_custom_fields_convert_to_customer']                      = 'Copiar campos personalizados al perfil del cliente';
$lang['copy_custom_fields_convert_to_customer_help']                 = 'Si cualquiera de los siguientes campos personalizados no existe para el cliente, será automáticamente creado con el mismo nombre, de otro modo sólo se copiará el valor del perfil del contacto.';
$lang['lead_profile']                                                = 'Perfil';
$lang['lead_is_client']                                              = 'Cliente';
$lang['leads_email_integration_folder_no_encryption']                = 'Sin cifrado';
$lang['leads_email_integration']                                     = 'Integración de email';
$lang['leads_email_active']                                          = 'Activo';
$lang['leads_email_integration_imap']                                = 'servidor IMAP';
$lang['leads_email_integration_email']                               = 'dirección de correo (Entrar)';
$lang['leads_email_integration_password']                            = 'Contraseña';
$lang['leads_email_integration_default_source']                      = 'Fuente predeterminada';
$lang['leads_email_integration_check_every']                         = 'Comprobamos cada (minutos)';
$lang['leads_email_integration_default_assigned']                    = 'Responsibe para la nueva pista';
$lang['leads_email_encryption']                                      = 'Cifrado';
$lang['leads_email_integration_updated']                             = 'Actualizado integración de email';
$lang['leads_email_integration_default_status']                      = 'Estado predeterminado';
$lang['leads_email_integration_folder']                              = 'Carpeta';
$lang['leads_email_integration_notify_when_lead_imported']           = 'Notificar cuando el contacto importada';
$lang['leads_email_integration_only_check_unseen_emails']            = 'marque sólo mensajes de email no abiertos';
$lang['leads_email_integration_only_check_unseen_emails_help']       = 'El guión fijará automáticamente el email para abrir después de chequeado. Esto se utiliza para evitar la comprobación de todos los mensajes de email y otra vez. No es recomendado desactivar esta opción si usted tiene muchos mensajes de email y tiene una configuración de reenvío.';
$lang['leads_email_integration_notify_when_lead_contact_more_times'] = 'Notificará si el email contacto enviar varias veces';
$lang['leads_email_integration_test_connection']                     = 'Prueba de conexión IMAP';
$lang['lead_email_connection_ok']                                    = 'Conexión IMAP es buena';
$lang['lead_email_connection_not_ok']                                = 'Conexión IMAP no es okey';
$lang['lead_email_activity']                                         = 'Actividad de email';
$lang['leads_email_integration_notify_roles']                        = 'Papeles para notificar';
$lang['leads_email_integration_notify_staff']                        = 'Los miembros del personal que notificar';
$lang['lead_public']                                                 = 'Público';
# Knowledge base

$lang['kb_group_color'] = 'Color';
$lang['kb_group_order'] = 'Orden';
# Utilities - BULK PDF exporter
$lang['bulk_pdf_exporter']             = 'Exportador en maza PDF';
$lang['bulk_export_pdf_payments']      = 'Pagos';
$lang['bulk_export_pdf_estimates']     = 'Presupuestos';
$lang['bulk_export_pdf_invoices']      = 'Facturas';
$lang['bulk_pdf_export_button']        = 'Exportar';
$lang['bulk_pdf_export_select_type']   = 'Seleccionar el tipo de';
$lang['no_data_found_bulk_pdf_export'] = 'No se han encontrado para la exportación de datos';
$lang['bulk_export_status_all']        = 'Todas';
$lang['bulk_export_status']            = 'Estado';
$lang['bulk_export_zip_payment_modes'] = 'Los pagos realizados por';
$lang['bulk_export_include_tag']       = 'Incluir tag';
$lang['bulk_export_include_tag_help']  = 'Ex. Original o copia. La etiqueta se sacara del PDF. Recomendado usar sólo 1 etiqueta';
# Backup
$lang['auto_backup_options_updated']     = 'Opciones de copia de seguridad automática actualizada';
$lang['auto_backup_every']               = 'Crear copia de seguridad cada X días';
$lang['auto_backup_enabled']             = 'Habilitado (requiere Cron)';
$lang['auto_backup']                     = 'Copia de seguridad automática';
$lang['backup_delete']                   = 'Copia eliminado';
$lang['backup_success']                  = 'La copia de seguridad se realizo con éxito';
$lang['utility_backup']                  = 'Copia de seguridad de base de datos';
$lang['utility_create_new_backup_db']    = 'Crear copia de seguridad de base de datos';
$lang['utility_backup_table_backupname'] = 'Copia de seguridad';
$lang['utility_backup_table_backupsize'] = 'El tamaño de la copia de seguridad';
$lang['utility_backup_table_backupdate'] = 'Fecha';
$lang['utility_db_backup_note']          = 'Nota: Debido al tiempo de ejecución limitado y memoria disponible para pHP, las copias de seguridad de una base de datos muy grande pueden no ser posibles. Si su base de datos es muy grande, es posible que necesite hacer copias de seguridad directamente desde su servidor sQL a través de la línea de comandos, o que su administrador del servidor lo haga por usted.';

# version 1.0.7
## Customers - portal
$lang['clients_nav_proposals'] = 'Propuestas';
$lang['clients_nav_support']   = 'Soporte técnico';
# General
$lang['more']            = 'Más';
$lang['add_item']        = 'Añadir artículo';
$lang['goto_admin_area'] = 'Ir al área de administración';
$lang['delete']          = 'Eliminar %s';
$lang['welcome_top']     = 'Bienvenido %s';

# Customers
$lang['customer_permissions']         = 'Permisos';
$lang['customer_permission_invoice']  = 'Facturas';
$lang['customer_permission_estimate'] = 'Estimar';
$lang['customer_permission_proposal'] = 'Propuestas';
$lang['customer_permission_contract'] = 'Contratos';
$lang['customer_permission_support']  = 'Soporte';


#Tasks
$lang['task_related_to'] = 'Relacionado con';

# Send file
$lang['custom_file_fail_send']    = 'No se pudo enviar el archivo';
$lang['custom_file_success_send'] = 'El archivo se envía con éxito a %s';
$lang['send_file_subject']        = 'Asunto del correo';
$lang['send_file_email']          = 'Dirección de correo';
$lang['send_file_message']        = 'Mensaje';
$lang['send_file']                = 'Enviar archivo';
$lang['add_checklist_item']       = 'Lista de verificación de artículos';
$lang['task_checklist_items']     = 'Lista de verificación de artículos';

# Import
$lang['default_pass_clients_import'] = 'Contraseña por defecto para todos los clientes';
$lang['simulate_import']             = 'Simular importación';
$lang['import_upload_failed']        = 'Subida fallida';
$lang['import_total_imported']       = 'Total importado: %s';
$lang['import_leads']                = 'Importación de prospectos';
$lang['import_customers']            = 'Importación de clientes';
$lang['choose_csv_file']             = 'Elija archivo cSV';
$lang['import']                      = 'Importar';
$lang['lead_import_status']          = 'Estado';
$lang['lead_import_source']          = 'Fuente';

# Bulk PDF export
$lang['bulk_export_pdf_proposals'] = 'Propuestas';

# Invoices
$lang['delete_invoice'] = 'Borrar';
$lang['items']          = 'Artículos';
$lang['support']        = 'Soporte';
$lang['new_ticket']     = 'Nuevo ticket';

# Reminders
$lang['calendar_lead_reminder']  = 'Recordatorio de contacto';
$lang['lead_set_reminder_title'] = 'Añadir recordatorio de contacto';
$lang['set_reminder_tooltip']    = 'Esta opción le permite no olvidar nada acerca de sus clientes.';
$lang['client_reminders_tab']    = 'Recordatorios';
$lang['leads_reminders_tab']     = 'Recordatorios';

# Tickets
$lang['delete_ticket_reply']  = 'Borrar respuesta';
$lang['ticket_priority_edit'] = 'Editar prioridad';
$lang['ticket_priority_add']  = 'Añadir prioridad';
$lang['ticket_status_edit']   = 'Estado edición de tickets';
$lang['ticket_service_edit']  = 'Edición de tickets';
$lang['edit_department']      = 'Edición departamento';

# Expenses
$lang['edit_expense_category'] = 'Editar categoría del gasto';
# Settings
$lang['customer_default_country']                                 = 'País predeterminado';
$lang['settings_sales_require_client_logged_in_to_view_estimate'] = 'Requerir al cliente estar registrado para ver presupuesto';
$lang['set_reminder']                                             = 'Ha configurado un recordatorio';
$lang['set_reminder_date']                                        = 'Fecha de ser notificado';
$lang['reminder_description']                                     = 'Descripción conjunto';
$lang['reminder_notify_me_by_email']                              = 'Enviar también un email para este recordatorio';
$lang['reminder_added_successfully']                              = 'Recordatorio añadido con éxito';
$lang['reminder_description']                                     = 'Descripción';
$lang['reminder_date']                                            = 'Fecha';
$lang['reminder_staff']                                           = 'Recordar';
$lang['reminder_is_notified']                                     = 'Se notifica?';
$lang['reminder_is_notified_boolean_no']                          = 'No';
$lang['reminder_is_notified_boolean_yes']                         = 'Sí';
$lang['reminder_set_to']                                          = 'Establecer recordatorio para';
$lang['reminder_deleted']                                         = 'Recordatorio elimina exitosamente';
$lang['reminder_failed_to_delete']                                = 'No se pudo eliminar el recordatorio';
$lang['show_invoice_estimate_status_on_pdf']                      = 'Mostrar estado de factura/presupuesto en el PDF';
$lang['email_piping_default_priority']                            = 'Prioridad por defecto en el ticket entubada';
$lang['show_lead_reminders_on_calendar']                          = 'Recordatorios de prospectos';
$lang['tickets_piping']                                           = 'Cesion por email';
$lang['email_piping_only_replies']                                = 'Sólo respuestas permitidas por email';
$lang['email_piping_only_registered']                             = 'Sólo seciones de usuarios registrados';

# Estimates
$lang['view_estimate_as_client']         = 'Ver presupuesto como cliente';
$lang['estimate_mark_as']                = 'Marcar como %s';
$lang['estimate_status_changed_success'] = 'Presupuesto cambio de estado';
$lang['estimate_status_changed_fail']    = 'No se pudo cambiar el estado de la presupuesto';

# Proposals
$lang['proposal_to']                            = 'Nombre de la empresa';
$lang['proposal_date']                          = 'Fecha';
$lang['proposal_address']                       = 'Dirección';
$lang['proposal_phone']                         = 'Teléfono';
$lang['proposal_email']                         = 'Email';
$lang['proposal_date_created']                  = 'Fecha de creación';
$lang['proposal_open_till']                     = 'Valida hasta';
$lang['proposal_status_open']                   = 'Abierta';
$lang['proposal_status_accepted']               = 'Aceptada';
$lang['proposal_status_declined']               = 'Rechazada';
$lang['proposal_status_sent']                   = 'Enviada';
$lang['proposal_expired']                       = 'Expirada';
$lang['proposal_subject']                       = 'Tema';
$lang['proposal_total']                         = 'Total';
$lang['proposal_status']                        = 'Estado';
$lang['proposals_list_all']                     = 'Todas';
$lang['proposals_leads_related']                = 'Prospectos relacionados';
$lang['proposals_customers_related']            = 'Clientes relacionados';
$lang['proposal_related']                       = 'Relacionado';
$lang['proposal_for_lead']                      = 'Contacto';
$lang['proposal_for_customer']                  = 'Cliente';
$lang['proposal']                               = 'Propuesta';
$lang['proposal_lowercase']                     = 'propuesta';
$lang['proposals']                              = 'Propuestas';
$lang['proposals_lowercase']                    = 'propuestas';
$lang['new_proposal']                           = 'Nueva propuesta';
$lang['proposal_currency']                      = 'Moneda';
$lang['proposal_allow_comments']                = 'Permitir comentarios';
$lang['proposal_allow_comments_help']           = 'Si marca esta opción se permitirán comentarios cuando sus clientes vean propuesta.';
$lang['proposal_edit']                          = 'Editar';
$lang['proposal_pdf']                           = 'PDF';
$lang['proposal_send_to_email']                 = 'Envía por email';
$lang['proposal_send_to_email_title']           = 'Enviar a email propuesta';
$lang['proposal_attach_pdf']                    = 'Adjuntar PDF';
$lang['proposal_preview_template']              = 'Vista previa de la plantilla';
$lang['proposal_view']                          = 'Ver propuesta';
$lang['proposal_copy']                          = 'Copia';
$lang['proposal_delete']                        = 'Borrar';
$lang['proposal_to']                            = 'Para';
$lang['proposal_add_comment']                   = 'Agregar comentario';
$lang['proposal_sent_to_email_success']         = 'Propuesta enviada por email con éxito';
$lang['proposal_sent_to_email_fail']            = 'No se ha podido propuesta enviada al email';
$lang['proposal_copy_fail']                     = 'No se pudo copiar propuesta';
$lang['proposal_copy_success']                  = 'Propuesta copiada con éxito';
$lang['proposal_status_changed_success']        = 'El estado de la propuesta ha cambiado con éxito';
$lang['proposal_status_changed_fail']           = 'No se pudo cambiar el estado de la propuesta';
$lang['proposal_assigned']                      = 'Asignado';
$lang['proposal_comments']                      = 'Comentarios';
$lang['proposal_convert']                       = 'Convertir';
$lang['proposal_convert_estimate']              = 'A presupuesto';
$lang['proposal_convert_invoice']               = 'A factura';
$lang['proposal_convert_to_estimate']           = 'Convertir a presupuesto';
$lang['proposal_convert_to_invoice']            = 'Convertir a factura';
$lang['proposal_convert_to_lead_disabled_help'] = 'Es necesario para convertir el contacto en cliente con el fin de crear %s';
$lang['proposal_convert_not_related_help']      = 'La propuesta tiene que estar relacionada al cliente con el fin de convertir a %s';
$lang['proposal_converted_to_estimate_success'] = 'Propuesta convierte para estimar exitosamente';
$lang['proposal_converted_to_invoice_success']  = 'Propuesta convertida a factura con éxito';
$lang['proposal_converted_to_estimate_fail']    = 'No se pudo convertir propuesta a presupuesto';
$lang['proposal_converted_to_invoice_fail']     = 'No se pudo convertir la propuesta a factura';

# Proposals - view proposal template
$lang['proposal_total_info']   = 'Total %s';
$lang['proposal_accept_info']  = 'Aceptado';
$lang['proposal_decline_info'] = 'Rechazado';
$lang['proposal_pdf_info']     = 'PDF';

# Customers portal
$lang['customer_reset_action']            = 'Reiniciar';
$lang['customer_reset_password_heading']  = 'Restablecer su contraseña';
$lang['customer_forgot_password_heading'] = 'Se te olvidó tu contraseña';
$lang['customer_forgot_password']         = '¿Se te olvidó tu contraseña?';
$lang['customer_reset_password']          = 'Contraseña';
$lang['customer_reset_password_repeat']   = 'Repite la contraseña';
$lang['customer_forgot_password_email']   = 'Dirección de correo';
$lang['customer_forgot_password_submit']  = 'Enviar';
$lang['customer_ticket_subject']          = 'Tema';

# Email templates
$lang['email_template_proposals_fields_heading'] = 'Propuestas';

# Tasks
$lang['add_task_attachments']  = 'Adjuntar archivo';
$lang['task_view_attachments'] = 'Archivos adjuntos';
$lang['task_view_description'] = 'Descripción';

# Customer groups
$lang['customer_group_add_heading']  = 'Añadir nuevo grupo de clientes';
$lang['customer_group_edit_heading'] = 'Editar grupo de clientes';
$lang['new_customer_group']          = 'Nuevo grupo de clientes';
$lang['customer_group_name']         = 'Nombre';
$lang['customer_groups']             = 'Tipo de cliente';
$lang['customer_group']              = 'Grupo de clientes';
$lang['customer_group_lowercase']    = 'grupo de clientes';

$lang['customer_have_invoices_by']       = ' %s';
$lang['customer_have_estimates_by']      = ' %s';
$lang['customer_have_contracts_by_type'] = 'Tener contratos por tipo %s';

# Custom fields
$lang['custom_field_show_on_table']              = 'Mostrar en tabla';
$lang['custom_field_show_on_client_portal']      = 'Mostrar en el portal de clientes';
$lang['custom_field_show_on_client_portal_help'] = 'Si este campo está marcado también se muestra en las tablas';
$lang['custom_field_visibility']                 = 'Visibilidad';

# Utilities # Menu builder
$lang['utilities_menu_translate_name_help'] = 'Puede añadir cadenas traduciadas aquí. Así que si el personal / sistema tiene un idioma distinto al valor por defecto, los nombres de los elementos del menú se veran en el lenguaje personal, de lo contrario, si no existe la tradución, será tomada la cadena que introduzca aquí.';
$lang['utilities_menu_icon']                = 'Icono';
$lang['active_menu_items']                  = 'Elementos de menú activos';
$lang['inactive_menu_items']                = 'Elementos de menú inactivos';
$lang['utilities_menu_url']                 = 'URL';
$lang['utilities_menu_name']                = 'Nombre';
$lang['utilities_menu_save']                = 'Guardar menú';

# Knowledge base
$lang['view_articles_list']     = 'Ver artículos';
$lang['view_articles_list_all'] = 'Todos los artículos';
$lang['als_all_articles']       = 'Todos los artículos';
$lang['als_kb_groups']          = 'Grupos';

# Customizer menu
$lang['menu_builder']            = 'Configuración del menú';
$lang['main_menu']               = 'Menú principal';
$lang['setup_menu']              = 'Menú de configuración';
$lang['utilities_menu_url_help'] = '%s se auto añade a la URL';

# Spam filter - tickets
$lang['spam_filters']                 = 'Los filtros de spam';
$lang['spam_filter']                  = 'Filtro de spam';
$lang['new_spam_filter']              = 'Nuevo filtro de spam';
$lang['spam_filter_blocked_senders']  = 'Los remitentes bloqueados';
$lang['spam_filter_blocked_subjects'] = 'Los sujetos bloqueados';
$lang['spam_filter_blocked_phrases']  = 'Frases bloqueadas';
$lang['spam_filter_content']          = 'Contenido';
$lang['spamfilter_edit_heading']      = 'Editar filtro de correo no deseado';
$lang['spamfilter_add_heading']       = 'Añadir filtro de spam';
$lang['spamfilter_type']              = 'Tipo';
$lang['spamfilter_type_subject']      = 'Tema';
$lang['spamfilter_type_sender']       = 'Remitente';
$lang['spamfilter_type_phrase']       = 'Frase';

# Tickets
$lang['block_sender']                = 'Bloquear remitente';
$lang['sender_blocked']              = 'Remitentes bloqueados';
$lang['sender_blocked_successfully'] = 'Remitente bloqueado exitosamente';
$lang['ticket_date_created']         = 'Fecha de creacion';

#KB
$lang['edit_kb_group'] = 'Editar grupo';
# Leads
$lang['edit_source'] = 'Modificar origen';
$lang['edit_status'] = 'Editar estado';
# Contacts
$lang['contract_type_edit'] = 'Editar tipo de contrato';
# Reports
$lang['report_by_customer_groups'] = 'Valor total por grupos de clientes';
#Utilities
$lang['ticket_pipe_log']      = 'Registro de tickets';
$lang['ticket_pipe_name']     = 'De';
$lang['ticket_pipe_email_to'] = 'Para';
$lang['ticket_pipe_email']    = 'Del email';
$lang['ticket_pipe_subject']  = 'Tema';
$lang['ticket_pipe_message']  = 'Mensaje';
$lang['ticket_pipe_date']     = 'Fecha';
$lang['ticket_pipe_status']   = 'Estado';

# Home
$lang['home_latest_activity']   = 'Actividad reciente';
$lang['home_my_tasks']          = 'Mis tareas';
$lang['home_latest_activity']   = 'Actividad reciente';
$lang['home_my_todo_items']     = 'Resumen de las tareas';
$lang['home_widget_view_all']   = 'Ver todo';
$lang['home_stats_full_report'] = 'Resumen completo';

# validation - customer portal

$lang['form_validation_required']    = 'Se requiere que el campo {field}.';
$lang['form_validation_valid_email'] = 'El {field} campo debe contener una dirección válida de email.';
$lang['form_validation_matches']     = 'El campo {field} no coincide con el campo {param}.';
$lang['form_validation_is_unique']   = 'El campo {field} debe contener un valor único.';

# version 1.0.8
# Notifications & leads/Estimates/Invoices activity log
$lang['not_event']                                    = 'Inicio del evento de hoy - %s …';
$lang['not_event_public']                             = 'Evento público da comienzo hoy - %s …';
$lang['not_contract_expiry_reminder']                 = 'Recordatorio de caducidad del contrato - %s …';
$lang['not_recurring_expense_cron_activity_heading']  = 'Gastos recurrente actividad de trabajo Cron ';
$lang['not_recurring_invoices_cron_activity_heading'] = 'Facturas recurrentes actividad de tarea Cron';
$lang['not_recurring_total_renewed']                  = 'Actualizado total: %s';
$lang['not_recurring_expenses_action_taken_from']     = 'Accion tomada por gastos recurrente';
$lang['not_invoice_created']                          = 'Factura creada:';
$lang['not_invoice_renewed']                          = 'Factura renovada:';
$lang['not_expense_renewed']                          = 'Gasto renovado:';
$lang['not_invoice_sent_to_customer']                 = 'Factura enviada al cliente: %s';
$lang['not_invoice_sent_yes']                         = 'Sí';
$lang['not_invoice_sent_not']                         = 'No';
$lang['not_action_taken_from_recurring_invoice']      = 'Accion tomada de la factura recurrente:';
$lang['not_new_reminder_for']                         = 'Nuevo recordatorio para %s';
$lang['not_received_one_or_more_messages_lead']       = 'Se ha recibido un mensaje de email de más de una ventaja';
$lang['not_received_lead_imported_email_integration'] = 'Ventaja importada de integración de email';
$lang['not_lead_imported_attachment']                 = 'Anexos importado de email';
$lang['not_estimate_status_change']                   = 'Anexos importado de email';
$lang['not_estimate_status_updated']                  = 'Estado de actualización de presupuesto: Desde: %s a %s';
$lang['not_goal_message_success']                     = 'Felicitaciones! alcazamos el nuevo objetivo.<br />Tipo de objetivo: %s
<br />Objetivo alcanzado: %s
<br />Total alcanzado: %s
<br />Fecha inicio: %s
<br />Fecha fin: %s';
$lang['not_assigned_lead_to_you']                                 = 'Ventaja asignada %s para ti';
$lang['not_lead_activity_assigned_to']                            = '%s asignada para %s';
$lang['not_lead_activity_attachment_deleted']                     = 'Borrar anexo';
$lang['not_lead_activity_status_updated']                         = '%s actualizar ventaja de estado desde %s a %s';
$lang['not_lead_activity_contacted']                              = '%s puesta en contacto esta ventaja sobre %s';
$lang['not_lead_activity_created']                                = '%s crear ventaja';
$lang['not_lead_activity_marked_lost']                            = 'Marcado como perdido';
$lang['not_lead_activity_unmarked_lost']                          = 'desmarcado como perdido';
$lang['not_lead_activity_marked_junk']                            = 'Marcado como basura';
$lang['not_lead_activity_unmarked_junk']                          = 'desmarcado como basura';
$lang['not_lead_activity_added_attachment']                       = 'Anexo agregado';
$lang['not_lead_activity_converted_email']                        = 'Ventaja de email cambiada. La primera ventaja de correo electronico fue: %s y añadido como cliente con el email %s';
$lang['not_lead_activity_converted']                              = '%s convirtió esta ventaja para el cliente';
$lang['not_liked_your_post']                                      = '%s le gustó su %s …';
$lang['not_commented_your_post']                                  = '%s comentó tu publicación %s …';
$lang['not_liked_your_comment']                                   = '%s le gustó su comentario %s …';
$lang['not_proposal_assigned_to_you']                             = 'Propuesta asignada por ti - %s …';
$lang['not_proposal_comment_from_client']                         = 'Nuevo comentario sobre la propuesta del cliente%s …';
$lang['not_proposal_proposal_accepted']                           = 'Propuesta aceptada - %s';
$lang['not_proposal_proposal_declined']                           = 'Propuesta rechazada - %s';
$lang['not_task_added_you_as_follower']                           = 'Te añadió como seguidor en la tarea %s …';
$lang['not_task_added_someone_as_follower']                       = 'añadido como seguidor en la tarea %s …';
$lang['not_task_added_himself_as_follower']                       = 'Añadido el mismo como seguidor en la tarea %s …';
$lang['not_task_assigned_to_you']                                 = 'Asignada una tarea para ti %s …';
$lang['not_task_assigned_someone']                                = 'Asignada %s a la tarea %s …';
$lang['not_task_will_do_user']                                    = 'Hara la tarea %s …';
$lang['not_task_new_attachment']                                  = 'Nuevo anexo añadido';
$lang['not_task_marked_as_complete']                              = 'Marca tarea como complete %s';
$lang['not_task_unmarked_as_complete']                            = 'Desmarcar tarea como completa %s';
$lang['not_ticket_assigned_to_you']                               = 'Ticket asignado para ti - %s …';
$lang['not_ticket_reassigned_to_you']                             = 'Ticket no asignado para ti- %s …';
$lang['not_estimate_customer_accepted']                           = 'Felicidades! el cliente acepto la presupuesto con el número %s';
$lang['not_estimate_customer_declined']                           = 'El cliente rechazo el presupuesto con el número  %s';
$lang['estimate_activity_converted']                              = 'Presupuesto convertido.<br /> %s';
$lang['estimate_activity_created']                                = 'Presupuesto creado';
$lang['invoice_estimate_activity_removed_item']                   = 'Artículo quitado <b>%s</b>';
$lang['estimate_activity_number_changed']                         = 'Numero presupuesto cambiado desde %s a %s';
$lang['invoice_activity_number_changed']                          = 'Numero de factura cambiado desde %s a %s';
$lang['invoice_estimate_activity_updated_item_short_description'] = 'Actualizar descripción corta del artículo desde %s a %s';
$lang['invoice_estimate_activity_updated_item_long_description']  = 'Actualizar descripción larga del artículo desde <b>%s</b> a <b>%s</b>';
$lang['invoice_estimate_activity_updated_item_rate']              = 'Actualizar precio del artículo desde %s a %s';
$lang['invoice_estimate_activity_updated_qty_item']               = 'Actualizar calidad de artículos <b>%s</b> desde %s a %s';
$lang['invoice_estimate_activity_added_item']                     = 'Nuevo artículo agregado <b>%s</b>';
$lang['invoice_estimate_activity_sent_to_client']                 = 'Enviar presupuesto al cliente';
$lang['estimate_activity_client_accepted_and_converted']          = 'El cliente aceptó este presupuesto y se ha convertido en la factura número %s';
$lang['estimate_activity_client_accepted']                        = 'El cliente ha aceptado este presupuesto';
$lang['estimate_activity_client_declined']                        = 'El cliente ha rechazado este presupuesto';
$lang['estimate_activity_marked']                                 = 'Presupuesto marcada como %s';
$lang['invoice_activity_status_updated']                          = 'Actualizar estado de factura desde %s a %s';
$lang['invoice_activity_created']                                 = 'Factura creada';
$lang['invoice_activity_from_expense']                            = 'convertido para facturar el costo';
$lang['invoice_activity_recurring_created']                       = '[Recurrente] factura creada por Cron';
$lang['invoice_activity_recurring_from_expense_created']          = '[Factura de costo] factura creada por Cron';
$lang['invoice_activity_sent_to_client_cron']                     = 'Factura enviada al cliente por Cron';
$lang['invoice_activity_sent_to_client']                          = 'Enviar facture al cliente';
$lang['invoice_activity_marked_as_sent']                          = 'Factura marcada como enviada';
$lang['invoice_activity_payment_deleted']                         = 'Suprimido el pago de la factura. pago #%s, cantidad total %s';
$lang['invoice_activity_payment_made_by_client']                  = 'El cliente hizo el pago de la factura por un total de <b>%s</b> - %s';
$lang['invoice_activity_payment_made_by_staff']                   = 'pago registrado en total de <b>%s</b> - %s';
$lang['invoice_activity_added_attachment']                        = 'Anexo agregado';

# Navigation
$lang['top_search_placeholder'] = 'Buscar…';

# Staff
$lang['staff_profile_inactive_account'] = 'Esta cuenta de empleado es inactiva ';

# Estimates
$lang['copy_estimate']                = 'Copia de presupuesto';
$lang['estimate_copied_successfully'] = 'Presupuesto copiado con éxito';
$lang['estimate_copied_fail']         = 'Falló la copia de presupuesto';

# Tasks
$lang['tasks_view_assigned_to_user'] = 'Tareas asignadas para mi';
$lang['tasks_view_follower_by_user'] = 'Tareas que estoy siguiendo';
$lang['no_tasks_found']              = 'Sin tareas';

# Leads
$lang['leads_dt_datecreated']       = 'Creado';
$lang['leads_sort_by']              = 'Ordenar por';
$lang['leads_sort_by_datecreated']  = 'Fecha creación';
$lang['leads_sort_by_kanban_order'] = 'Orden de Kan Ban';

# Authentication
$lang['check_email_for_resetting_password'] = 'Por favor, comprueba tu email para obtener más instrucciones para restablecer la contraseña';
$lang['inactive_account']                   = 'Cuenta inactiva';
$lang['error_setting_new_password_key']     = 'Error de configuración de la nueva contraseña';
$lang['password_reset_message']             = 'Tu contraseña ha sido restablecida. por favor inicie sesión ahora!';
$lang['password_reset_message_fail']        = 'Error de restablecer tu contraseña. Intente de nuevo.';
$lang['password_reset_key_expired']         = 'La contraseña ha expirado o usuario inválido';
$lang['auth_reset_pass_email_not_found']    = 'Email no encontrado';
$lang['auth_reset_password_submit']         = 'Restablecer contraseña';

# Settings
$lang['settings_amount_to_words']          = 'Cantidad de palabras';
$lang['settings_amount_to_words_desc']     = 'Cantidad total en palabras en la factura/presupuesto';
$lang['settings_amount_to_words_enabled']  = 'Permitir';
$lang['settings_total_to_words_lowercase'] = 'Numero de palabras en minúsculas';
$lang['settings_show_tax_per_item']        = 'Mostrar impuesto por artículo';

# Reports
$lang['report_sales_months_three_months'] = 'Los últimos 3 meses';
$lang['report_invoice_number']            = 'Nº de factura';
$lang['report_invoice_customer']          = 'Cliente';
$lang['report_invoice_date']              = 'Fecha';
$lang['report_invoice_duedate']           = 'Fecha de vencimiento';
$lang['report_invoice_amount']            = 'Valor';
$lang['report_invoice_amount_with_tax']   = 'Valor con impuesto';
$lang['report_invoice_amount_open']       = 'Valor abierto';
$lang['report_invoice_status']            = 'Estado';

#Version 1.0.9

# Home stats
$lang['home_stats_by_project_status'] = 'Estadística por estados de los proyectos';
$lang['home_invoice_overview']        = 'Resumen de las facturas';
$lang['home_estimate_overview']       = 'Resumen de los presupuestos';
$lang['home_proposal_overview']       = 'Resumen de las propuestas';
$lang['home_lead_overview']           = 'Resumen de posibles clientes';
$lang['home_my_projects']             = 'Mis proyectos';
$lang['home_announcements']           = 'Anuncios';

# Settings
$lang['settings_leads_kanban_limit']                                    = 'Limites de prospectos por estados en filas Kan Ban';
$lang['settings_group_misc']                                            = 'Misc';
$lang['show_projects_on_calendar']                                      = 'Proyectos';
$lang['settings_media_max_file_size_upload']                            = 'Tamaño máximo de archivos de cargados a multimedia (mb)';
$lang['settings_client_staff_add_edit_delete_task_comments_first_hour'] = 'Permitir al cliente/equipo para agregar/editar comentarios de tarea sólo en la primera hora (no aplican para los administradores)';

# Email templates
$lang['email_template_only_domain_email'] = 'Solo correo electronico de dominio';

# Announcements
$lang['dismiss_announcement']   = 'Anuncio de despedida';
$lang['dismiss_announcement']   = 'Anuncio de despedida';
$lang['announcement_from']      = 'Desde:';
$lang['announcement_date']      = 'Fecha de publicación: %s';
$lang['announcement_not_found'] = 'Anuncio no encontrado';
$lang['announcements_recent']   = 'Anuncios recientes';

# General
$lang['zip_invoices']         = 'Facturas en Zip';
$lang['zip_estimates']        = 'Presupuestos en Zip';
$lang['zip_payments']         = 'Pagos en Zip';
$lang['setup_help']           = 'Ayuda';
$lang['clients_list_company'] = 'Empresa';
$lang['dt_button_export']     = 'Exportar';

$lang['dt_entries']         = 'entradas';
$lang['invoice_total_paid'] = 'Total pagado';
$lang['invoice_amount_due'] = 'Valor a pagar';

# Calendar
$lang['calendar_project'] = 'Proyecto';

# Leads
$lang['leads_import_assignee']     = 'Comercial';
$lang['customer_from_lead']        = 'Cliente desde %s';
$lang['lead_kan_ban_attachments']  = 'Archivos adjuntos %s';
$lang['leads_sort_by_lastcontact'] = 'Último contacto';

# Tasks
$lang['task_comment_added']     = 'Comentario añadido recientemente';
$lang['task_duedate']           = 'Fecha de vencimiento';
$lang['task_view_comments']     = 'Comentarios';
$lang['task_comment_updated']   = 'Comentario actualizado';
$lang['task_visible_to_client'] = 'Visible para el cliente';
$lang['task_hourly_rate']       = 'Precio por hora';
$lang['hours']                  = 'Horas';
$lang['seconds']                = 'Segundos';
$lang['minutes']                = 'Minutos';
$lang['task_start_timer']       = 'Iniciar temporizador';
$lang['task_stop_timer']        = 'Detener temporizador';
$lang['task_billable']          = 'Facturable';
$lang['task_billable_yes']      = 'Facturable';
$lang['task_billable_no']       = 'No facturable';
$lang['task_billed']            = 'Facturada';
$lang['task_billed_yes']        = 'Facturada';
$lang['task_billed_no']         = 'No facturada';
$lang['task_user_logged_time']  = 'Tiempo registrado:';
$lang['task_total_logged_time'] = 'Total de tiempo registrado:';
$lang['task_is_billed']         = 'Esta tarea es facturada en la facture numero %s';
$lang['task_statistics']        = 'Estadísticas';
$lang['task_milestone']         = 'Hito';

# Tickets
$lang['ticket_message_updated_successfully'] = 'Mensaje actualizado correctamente';

# Invoices
$lang['invoice_task_item_project_tasks_not_included'] = 'Los proyectos de las tareas no están incluidos en esta lista.';
$lang['show_quantity_as']                             = 'Mostrar la cantidad como:';
$lang['quantity_as_qty']                              = 'Unidad';
$lang['quantity_as_hours']                            = 'Horas';
$lang['invoice_table_hours_heading']                  = 'Horas';
$lang['bill_tasks']                                   = 'Tareas facturables';
$lang['invoice_estimate_sent_to_email']               = 'Email';

# Estimates
$lang['estimate_table_hours_heading'] = 'Horas';

# General
$lang['is_customer_indicator']         = 'Cliente';
$lang['print']                         = 'Imprimir';
$lang['customer_permission_projects']  = 'Proyectos';
$lang['no_timers_found']               = 'No se encontraron temporizadores corriendo';
$lang['timers_started_confirm_logout'] = 'Temporizador de tareas iniciado!<br /><br />¿Está seguro que quiere salir sin detener el temporizador?';
$lang['confirm_logout']                = 'Salir';
$lang['timer_top_started']             = 'Empezó a las %s';

# Projects
$lang['cant_change_billing_type_billed_tasks_found']         = 'No se puede cambiar el tipo de facturación. Tareas facturadas ya encontradas para este proyecto.';
$lang['project_customer_permission_warning']                 = 'El sistema indicó que el cliente no tiene el permiso para los proyectos. El cliente no será capaz de ver el proyecto. Considere la posibilidad de añadir el permiso en la configuración del perfil del cliente.';
$lang['project_invoice_timesheet_start_time']                = 'Hora de inicio: %s';
$lang['project_invoice_timesheet_end_time']                  = 'Hora final: %s';
$lang['project_invoice_timesheet_total_logged_time']         = 'Tiempo de inicio de session: %s';
$lang['project_view_as_client']                              = 'Ver el proyecto como cliente';
$lang['project_mark_all_tasks_as_completed']                 = 'Marcar todas last areas como completadas y detener todos los temporadizadores (no hay notificaciones enviadas a los miembros del proyecto)';
$lang['project_not_started_status_tasks_timers_found']       = 'Tareas del temporadizador encontrada para este proyecto, pero el proyecto no está con el estado iniciado. Recomendamos cambiar el estado del proyecto en el progreso';
$lang['project_status']                                      = 'Estados';
$lang['project_status_1']                                    = 'No iniciado';
$lang['project_status_2']                                    = 'En desarrollo';
$lang['project_status_3']                                    = 'En espera';
$lang['project_status_4']                                    = 'Finalizado';
$lang['project_file_dateadded']                              = 'Fecha de la subida';
$lang['project_file_filename']                               = 'Nombre del archivo';
$lang['project_file__filetype']                              = 'Tipo del archivo';
$lang['project_file_visible_to_customer']                    = 'Visible para el cliente';
$lang['project_file_uploaded_by']                            = 'Subido por';
$lang['edit_project']                                        = 'Editar proyecto';
$lang['copy_project']                                        = 'Copiar proyecto';
$lang['delete_project']                                      = 'Borrar proyecto';
$lang['project_task_assigned_to_user']                       = 'Tareas asignadas para ti';
$lang['seconds']                                             = 'Segundos';
$lang['hours']                                               = 'Horas';
$lang['minutes']                                             = 'Minutos';
$lang['project']                                             = 'Proyecto';
$lang['project_lowercase']                                   = 'proyecto';
$lang['projects']                                            = 'Proyectos';
$lang['projects_lowercase']                                  = 'proyectos';
$lang['project_settings']                                    = 'Ajustes del poyecto';
$lang['project_invoiced_successfully']                       = 'Facturas del proyecto con éxito';
$lang['new_project']                                         = 'Nuevo proyecto';
$lang['project_files']                                       = 'Archivos';
$lang['project_activity']                                    = 'Actividad';
$lang['project_name']                                        = 'Nombre del proyecto';
$lang['project_description']                                 = 'Descripción del proyecto';
$lang['project_customer']                                    = 'Cliente';
$lang['project_start_date']                                  = 'Fecha de inicio';
$lang['project_datecreated']                                 = 'Fecha de creación';
$lang['project_deadline']                                    = 'Fecha de entrega';
$lang['project_billing_type']                                = 'Tipo de facturación';
$lang['project_billing_type_fixed_cost']                     = 'Precio fijo';
$lang['project_billing_type_project_hours']                  = 'Horas del proyecto';
$lang['project_billing_type_project_task_hours']             = 'Horas de las tareas';
$lang['project_billing_type_project_task_hours_hourly_rate'] = 'Base de la precio del trabajo por hora';
$lang['project_rate_per_hour']                               = 'Precio hora';
$lang['project_total_cost']                                  = 'Coste total';
$lang['project_members']                                     = 'Miembros del proyecto';
$lang['project_member_removed']                              = 'Miembro del proyecto eliminado correctamente';
$lang['project_overview']                                    = 'Descripción';
$lang['project_gant']                                        = 'Vista gantt';
$lang['project_milestones']                                  = 'Procesos';
$lang['project_milestone_order']                             = 'Orden';
$lang['project_milestone_duedate_passed']                    = 'La fecha de vencimiento expirada';
$lang['record_timesheet']                                    = 'Registro de horas';
$lang['new_milestone']                                       = 'Nuevo proceso';
$lang['edit_milestone']                                      = 'Editar proceso';
$lang['milestone_name']                                      = 'Nombre';
$lang['milestone_due_date']                                  = 'Fecha de vencimiento';
$lang['project_milestone']                                   = 'Procesos';
$lang['project_notes']                                       = 'Notas';
$lang['project_timesheets']                                  = 'Tiempos';
$lang['project_timesheet']                                   = 'Tiempo';
$lang['milestone_total_logged_time']                         = 'Tiempo registrado';
$lang['project_overview_total_logged_hours']                 = 'Registro total de horas';
$lang['milestones_uncategorized']                            = 'Sin categoría';
$lang['milestone_no_tasks_found']                            = 'Sin tarea';
$lang['project_copied_successfully']                         = 'Los datos del proyecto se han copiado correctamente';
$lang['failed_to_copy_project']                              = 'No se pudo copiar el proyecto';
$lang['copy_project_task_include_check_list_items']          = 'Copiar puntos de la lista';
$lang['copy_project_task_include_assignees']                 = 'Copiar los mismos ejecutivos de ventas';
$lang['copy_project_task_include_followers']                 = 'Copiar los mismo seguidores';

$lang['project_days_left']                                = 'Dias restantes';
$lang['project_open_tasks']                               = 'Tareas abiertas';
$lang['timesheet_stop_timer']                             = 'Detener temporadizador';
$lang['failed_to_add_project_timesheet_end_time_smaller'] = 'No se pudo agregar la hoja de tiempos. La hora de finalizacion es menor que el tiempo de inicio';
$lang['project_timesheet_user']                           = 'Miembro';
$lang['project_timesheet_start_time']                     = 'Hora de inicio';
$lang['project_timesheet_end_time']                       = 'Hora de finalización';
$lang['project_timesheet_time_spend']                     = 'Tiempo usado';
$lang['project_timesheet_task']                           = 'Tarea';
$lang['project_invoices']                                 = 'Facturas';
$lang['total_logged_hours_by_staff']                      = 'Total de tiempo registrado';
$lang['invoice_project']                                  = 'Factura del proyecto';
$lang['invoice_project_info']                             = 'Información de la facture del proyecto';
$lang['invoice_project_data_single_line']                 = 'Línea única';
$lang['invoice_project_data_task_per_item']               = 'Tarea por artículo';
$lang['invoice_project_data_timesheets_individually']     = 'Todas las hoja de tiempos individuales';
$lang['invoice_project_item_name_data']                   = 'Nombre del artículo';
$lang['invoice_project_description_data']                 = 'Descripción';
$lang['invoice_project_projectname_taskname']             = 'Nombre del proyecto + nombre de la tarea';
$lang['invoice_project_all_tasks_total_logged_time']      = 'Todas las tareas + tiempo total registrado por tarea';
$lang['invoice_project_project_name_data']                = 'Nombre del proyecto';
$lang['invoice_project_timesheet_individually_data']      = 'Hora de inicio de la hoja de tiempo + hora de finalizacion + tiempo total registrado';
$lang['invoice_project_total_logged_time_data']           = 'Tiempo total registrado';

$lang['project_allow_client_to']                     = 'Permitir al cliente %s';
$lang['project_setting_view_task_attachments']       = 'adjuntar archivos a tareas vistas';
$lang['project_setting_view_task_checklist_items']   = 'ver listas en las tareas';
$lang['project_setting_upload_files']                = 'subir archivos';
$lang['project_setting_view_task_comments']          = 'ver comentarios de las tareas';
$lang['project_setting_upload_on_tasks']             = 'subir archivos adjuntos a las tareas';
$lang['project_setting_view_task_total_logged_time'] = 'ver el total del tiempo registrado en tareas';
$lang['project_setting_open_discussions']            = 'abrir discusiones';
$lang['project_setting_comment_on_tasks']            = 'comentarios sobre last areas del proyecto';
$lang['project_setting_view_tasks']                  = 'ver tareas';
$lang['project_setting_view_milestones']             = 'ver procesos';
$lang['project_setting_view_gantt']                  = 'ver gantt';
$lang['project_setting_view_timesheets']             = 'ver hoja de tiempos';
$lang['project_setting_view_activity_log']           = 'ver registro de actividad';
$lang['project_setting_view_team_members']           = 'ver los miembros del equipo';

$lang['project_discussion_visible_to_customer_yes'] = 'Visible';
$lang['project_discussion_visible_to_customer_no']  = 'No visible';

$lang['project_discussion_posted_on']        = 'Publicado en %s';
$lang['project_discussion_posted_by']        = 'Publicado por %s';
$lang['project_discussion_failed_to_delete'] = 'No se pudo eliminar la discusión';
$lang['project_discussion_deleted']          = 'La discussion se ha eliminado correctamente';
$lang['project_discussion_no_activity']      = 'Ningúna actividad';
$lang['project_discussion']                  = 'Discusión';
$lang['project_discussions']                 = 'Discusiones';
$lang['edit_discussion']                     = 'Editar discusión';
$lang['new_project_discussion']              = 'Crear discusión';
$lang['project_discussion_subject']          = 'Tema';
$lang['project_discussion_description']      = 'Descripción';
$lang['project_discussion_show_to_customer'] = 'Visible para el cliente';
$lang['project_discussion_total_comments']   = 'Comentarios totales';
$lang['project_discussion_last_activity']    = 'Ultima actividad';
$lang['discussion_add_comment']              = 'Agregar comentario';
$lang['discussion_newest']                   = 'El más reciente';
$lang['discussion_oldest']                   = 'El más antiguo';
$lang['discussion_attachments']              = 'Archivos adjuntos';
$lang['discussion_send']                     = 'Enviar';
$lang['discussion_reply']                    = 'Respuesta';
$lang['discussion_edit']                     = 'Editar';
$lang['discussion_edited']                   = 'Modificar';
$lang['discussion_you']                      = 'Tú';
$lang['discussion_save']                     = 'Guardar';
$lang['discussion_delete']                   = 'Borrar';
$lang['discussion_view_all_replies']         = 'Enseñar todas las respuestas';
$lang['discussion_hide_replies']             = 'Ocultar respuestas';
$lang['discussion_no_comments']              = 'Ningún comentario';
$lang['discussion_no_attachments']           = 'Ningún archivo adjunto';
$lang['discussion_attachments_drop']         = 'Arrastrar y soltar para cargar el archivo';
$lang['project_note']                        = 'Nota';
$lang['project_note_private']                = 'Notas privadas';
$lang['project_save_note']                   = 'Guardar nota';

# Project activity
$lang['project_activity_created']                      = 'Proyecto creado';
$lang['project_activity_updated']                      = 'Proyecto actualizado';
$lang['project_activity_removed_team_member']          = 'Miembro del equipo eliminado';
$lang['project_activity_added_team_member']            = 'Nuevo miembro del equipo agregado';
$lang['project_activity_marked_all_tasks_as_complete'] = 'Marcadas todas las tareas como completas';
$lang['project_activity_recorded_timesheet']           = 'Factura registrada';
$lang['project_activity_task_name']                    = 'Tarea:';
$lang['project_activity_deleted_discussion']           = 'Eliminar discusión';
$lang['project_activity_created_discussion']           = 'Discusión creada';
$lang['project_activity_updated_discussion']           = 'Discusión actualizada';
$lang['project_activity_commented_on_discussion']      = 'Observación de la discusión';
$lang['project_activity_deleted_discussion_comment']   = 'Observación de la discussion eliminada';
$lang['project_activity_deleted_milestone']            = 'Procesos eliminados';
$lang['project_activity_updated_milestone']            = 'Actualización de proceso';
$lang['project_activity_created_milestone']            = 'Nuevo proceso creado';
$lang['project_activity_invoiced_project']             = 'Proyecto facturado';
$lang['project_activity_task_marked_complete']         = 'Tarea marcada como completa';
$lang['project_activity_task_unmarked_complete']       = 'Tarea desmarcada como completa';
$lang['project_activity_task_deleted']                 = 'Tarea eliminada';
$lang['project_activity_new_task_comment']             = 'Tarea comentada en';
$lang['project_activity_new_task_attachment']          = 'Archivos adjuntos cargados en la tarea';
$lang['project_activity_new_task_assignee']            = 'Nuevo ejecutivo de tarea añadido';
$lang['project_activity_task_assignee_removed']        = 'Cesonario de tarea eliminado';
$lang['project_activity_task_timesheet_deleted']       = 'Factura eliminada';
$lang['project_activity_uploaded_file']                = 'Subir archivo del proyecto';
$lang['project_activity_status_updated']               = 'Subir estado del proyecto';
$lang['project_activity_visible_to_customer']          = 'Visible para el cliente';
$lang['project_activity_project_file_removed']         = 'Archivo del proyecto eliminado';

# Customers area
$lang['clients_my_estimates'] = 'Mis presupuestos';
$lang['client_no_reply']      = 'Sin respuesta';
$lang['clients_nav_projects'] = 'Proyectos';
$lang['clients_my_projects']  = 'Mis proyectos';
$lang['client_profile_image'] = 'Imagen de perfil';

/////
$lang['sales_report_cancelled_invoices_not_included']          = 'Facturas canceladas no están incluídas en el informe';
$lang['invoices_merge_cancel_merged_invoices']                 = 'Marcar las facturas como canceladas en vez de eliminarla';
$lang['invoice_marked_as_cancelled_successfully']              = 'Facturas marcadas como canceladas exitosamente';
$lang['invoice_unmarked_as_cancelled']                         = 'Facturas marcadas como no-canceladas exitosamente.';
$lang['tasks_reminder_notification_before_help']               = 'Avisar a los empleados asignados sobre sus tareas a X días antes de su fecha límite. La notificación de correo es solo enviado al empleado asignado.';
$lang['tasks_reminder_notification_before']                    = 'Recordatorio de fecha tope de la tarea X días';
$lang['not_task_deadline_reminder']                            = 'Recordatorio de fecha tope de tareas';
$lang['dt_length_menu_all']                                    = 'Todo';
$lang['task_not_finished']                                     = 'No terminada';
$lang['task_billed_cant_start_timer']                          = 'Tarea facturado. El temporizador no puede ser iniciado.';
$lang['invoice_task_billable_timers_found']                    = 'Temporizadores iniciadas encontrados';
$lang['project_timesheet_not_updated']                         = 'Hoja de horas no ha sido afectada';
$lang['project_invoice_task_no_timers_found']                  = 'No se han encontrado para esta tarea temporizadores';
$lang['invoice_project_tasks_not_started']                     = 'No ha empezado | fecha inicio: %s';
$lang['invoice_project_see_billed_tasks']                      = 'Ver las tareas que serán facturados en la factura actual';
$lang['invoice_project_all_billable_tasks_marked_as_finished'] = 'Todas las tareas facturados serán marcados como completadas';
$lang['invoice_project_nothing_to_bill']                       = 'No hay tareas para facturar';
$lang['invoice_project_start_date_tasks_not_passed']           = 'Las tareas con fecha de inicio en el futuro no se pueden facturar';
$lang['invoice_project_stop_all_timers']                       = 'Detener todos los temporizadores';
$lang['invoice_project_stop_billable_timers_only']             = 'Detener los temporizadores facturables';
$lang['project_tasks_total_timers_stopped']                    = 'Total de temporizadores detenidos %s';
$lang['project_invoice_timers_started']                        = 'Temporizadores activos en tareas facturables, no permitirá crear una factura. Por favor de detener el temporizador para crear la factura.';
$lang['task_start_timer_only_assignee']                        = 'Tienes que estar asignado a esta tarea para poder iniciar un temporizador!';
$lang['task_comments']                                         = 'Comentarios';
$lang['invoice_total_tax']                                     = 'Impuesto total';
$lang['estimates_total_tax']                                   = 'Impuesto total';
$lang['report_invoice_total_tax']                              = 'Impuesto total';
$lang['home_tickets']                                          = 'Tickets';
$lang['home_project_activity']                                 = 'Actividad de los proyectos';
$lang['view_tracking']                                         = 'Verificación vistas';
$lang['view_date']                                             = 'Fecha';
$lang['view_ip']                                               = 'Dirección iP';
$lang['article_total_views']                                   = 'Total vistas';
$lang['leads_source']                                          = 'Fuente';
$lang['invoices_available_for_merging']                        = 'Facturas disponible para combinar';
$lang['invoices_merge_discount']                               = 'Usted tendrá que aplicar el descuento del total manualmente a la factura %s';
$lang['invoice_merge_number_warning']                          = 'La combinación de facturas creará lagunas en los números de factura. por favor, si no quieres lagunas en su historial de facturas, no combines facturas. Nota: También tienes la opción de ajustar manualmente los números de factura si desea llenar los vacíos.';
$lang['invoice_mark_as']                                       = 'Marcar como %s';
$lang['invoice_unmark_as']                                     = 'Desmarcar como %s';
$lang['invoice_status_cancelled']                              = 'Canceladas';
$lang['tasks_reminder_notification_before_help']               = 'Notificar a los usuarios asignados a las tareas X días antes de la fecha entrega. La notificación/correo solo se envía al usuario asignado.';

# version 1.1.0
$lang['project_invoice_select_all_tasks'] = 'Seleccionar todas las tareas';
$lang['lead_company']                     = 'Empresa';

# version 1.1.1
$lang['admin_auth_forgot_password_button']       = 'Confirmar';
$lang['task_assigned']                           = 'Asignar a';
$lang['switch_to_pipeline']                      = 'Visualizar como pipeline';
$lang['switch_to_list_view']                     = 'Visualizar como lista';
$lang['estimates_pipeline']                      = 'Pipeline presupuestos';
$lang['estimates_pipeline_sort']                 = 'Ordenar por';
$lang['estimates_sort_expiry_date']              = 'Fecha vencimiento';
$lang['estimates_sort_pipeline']                 = 'Orden del pipeline';
$lang['estimates_sort_datecreated']              = 'Fecha creación';
$lang['estimates_sort_estimate_date']            = 'Fecha estimada';
$lang['estimate_set_reminder_title']             = 'Programar recordatorio de presupuesto';
$lang['invoice_set_reminder_title']              = 'Programar recordatorio de factura';
$lang['estimate_reminders']                      = 'Recordatorio';
$lang['invoice_reminders']                       = 'Recordatorio';
$lang['estimate_notes']                          = 'Notas';
$lang['estimate_add_note']                       = 'Agregar notas';
$lang['dropdown_non_selected_tex']               = 'Nada seleccionado';
$lang['auto_close_ticket_after']                 = 'Automáticamente cerrar el ticket después de X horas';
$lang['event_description']                       = 'Descripción';
$lang['delete_event']                            = 'Eliminar';
$lang['not_new_ticket_created']                  = 'Nuevo ticket creado pata tu departamento - %s';
$lang['receive_notification_on_new_ticket']      = 'Recibir notificaciones de tickets nuevos';
$lang['receive_notification_on_new_ticket_help'] = 'Todos los empleados que pertenezcan al departamento van a recibir una notificación.';
$lang['event_updated']                           = 'Evento actualizado exitosamente';
$lang['customer_contacts']                       = 'Contactos';
$lang['new_contact']                             = 'Nuevo contacto';
$lang['contact']                                 = 'Contacto';
$lang['contact_lowercase']                       = 'contacto';
$lang['contact_primary']                         = 'Contacto principal';
$lang['contact_position']                        = 'Posición/Cargo';
$lang['contact_active']                          = 'Activo';
$lang['client_company_info']                     = 'Detalles de la empresa';
$lang['proposal_save']                           = 'Guardar propuesta';
$lang['calendar']                                = 'Calendario';
$lang['settings_pdf']                            = 'PDF';
$lang['settings_pdf_font']                       = 'Fuente PDF';
$lang['settings_pdf_table_heading_color']        = 'Los productos encabezamiento de la tabla de colores';
$lang['settings_pdf_table_heading_text_color']   = 'Los productos encabezamiento de la tabla de color de texto';
$lang['settings_pdf_font_size']                  = 'Tamaño de letra predeterminado';
$lang['proposal_status_draft']                   = 'Borrador';
$lang['custom_field_contacts']                   = 'Contactos';
$lang['company_primary_email']                   = 'Email principal';
$lang['client_register_contact_info']            = 'Información del contacto principal';
$lang['client_register_company_info']            = 'Datos de la compañía';
$lang['contact_permissions_info']                = 'Asegúrese de establecer los permisos apropiados para este contacto';
$lang['default_leads_kanban_sort']               = 'Orden de contacto Kan Ban por defecto';
$lang['default_leads_kanban_sort_type']          = 'Ordenar por';
$lang['order_ascending']                         = 'Ascendente';
$lang['order_descending']                        = 'Descendente';
$lang['calendar_expand']                         = 'Expandir';
$lang['proposal_reminders']                      = 'Recordatorios';
$lang['proposal_set_reminder_title']             = 'Programar recordatorio de la propuesta';
$lang['settings_allowed_upload_file_types']      = 'Tipos de archivos permitidos';
$lang['no_primary_contact']                      = 'Este cliente no tienen contacto principal. Necesita configurar por lo menos un contacto principal para el cliente. Se recomienda que todos los clientes tengan contactos primarios.';
$lang['leads_merge_customer']                    = 'Los campos personalizados que se fusionan';
$lang['leads_merge_contact']                     = 'Campos de prospectos que se fusionan';
$lang['leads_merge_as_contact_field']            = 'Combinar como campo de prospectos';
$lang['lead_convert_to_client_phone']            = 'Teléfono';
$lang['invoice_status_report_all']               = 'Todos';
$lang['import_contact_field']                    = 'Campo de contacto';

$lang['file_uploaded_success']             = 'El archivo se cargó exitosamente';
$lang['file_exceeds_max_filesize']         = 'El archivo subido excede la directiva peso máximo permitido (upload_max_filesize)';
$lang['file_exceeds_maxfile_size_in_form'] = 'El archivo subido excede la directiva mAX_FILE_SIZE que se especificó en el formulario HTmL';
$lang['file_uploaded_partially']           = 'El archivo subido se ha subido sólo parcialmente';
$lang['file_not_uploaded']                 = 'No se cargó ningún archivo';
$lang['file_missing_temporary_folder']     = 'Falta una carpeta temporal';
$lang['file_failed_to_write_to_disk']      = 'No se ha podido escribir el archivo en el disco.';
$lang['file_php_extension_blocked']        = 'Una extensión de pHP detuvo la subida del archivo.';
$lang['calendar_expand']                   = 'Expandir';
$lang['view_pdf']                          = 'Ver PDF';
$lang['expense_repeat_every']              = 'Repite cada';

# version 1.1.2
$lang['leads_switch_to_kanban']                   = 'Visualizar como Kan Ban';
$lang['survey_no_questions']                      = 'Esta encuesta no contiene preguntas.';
$lang['survey_submit']                            = 'Enviar';
$lang['contract_content']                         = 'Contrato';
$lang['contract_save']                            = 'Guardar contrato';
$lang['contract_send_to_email']                   = 'Enviar por email';
$lang['contract_send_to_client_modal_heading']    = 'Enviar contrato por correo';
$lang['contract_send_to']                         = 'Enviar a';
$lang['contract_send_to_client_attach_pdf']       = 'Agregar PDF';
$lang['contract_send_to_client_preview_template'] = 'Vista previa de plantilla de email';
$lang['include_attachments_to_email']             = 'Incluir archivos adjuntos al email';
$lang['contract_sent_to_client_success']          = 'El contrato se ha enviado al cliente';
$lang['contract_sent_to_client_fail']             = 'Hubo un error al enviar el contrato';

# version 1.1.3
$lang['client_invalid_username_or_password'] = 'Usuario o contraseña invalido';
$lang['client_old_password_incorrect']       = 'Su antigua contraseña es incorrecta';
$lang['client_password_changed']             = 'Su contraseña ha sido cambiada';

# version 1.1.4
$lang['total_leads_deleted']                              = 'Total de prospectos eliminados: %s';
$lang['total_clients_deleted']                            = 'Total de prospectos eliminados: %s';
$lang['confirm_action_prompt']                            = 'Estás seguro de querer realizar ésta acción?';
$lang['mass_delete']                                      = 'Eliminación masiva';
$lang['email_protocol']                                   = 'Protocolo de email';
$lang['add_edit_members']                                 = 'Agregar/Editar miembro';
$lang['project_overview_logged_hours']                    = 'Horas registradas:';
$lang['project_overview_billable_hours']                  = 'Horas facturables:';
$lang['project_overview_billed_hours']                    = 'Horas facturadas:';
$lang['project_overview_unbilled_hours']                  = 'Horas no facturadas:';
$lang['calendar_first_day']                               = 'Primer día';
$lang['permission_view']                                  = 'Ver';
$lang['permission_edit']                                  = 'Editar';
$lang['permission_create']                                = 'Crear';
$lang['permission_delete']                                = 'Eliminar';
$lang['permission']                                       = 'Permiso';
$lang['permissions']                                      = 'Permisos';
$lang['proposals_pipeline']                               = 'Pipeline propuestas';
$lang['proposals_pipeline_sort']                          = 'Ordenar por';
$lang['proposals_sort_open_till']                         = 'Valido hasta';
$lang['proposals_sort_pipeline']                          = 'Orden del pipeline';
$lang['proposals_sort_datecreated']                       = 'Fecha creada';
$lang['proposals_sort_proposal_date']                     = 'Fecha propuesta';
$lang['is_not_staff_member']                              = 'No miembro del personal';
$lang['lead_created']                                     = 'Contacto creado';
$lang['access_tickets_to_none_staff_members']             = 'Permitir acceso a los tickets a personas que no son parte del personal';
$lang['project_expenses']                                 = 'Gastos';
$lang['expense_currency']                                 = 'Moneda';
$lang['currency_valid_code_help']                         = 'Asegúrese de introducir el código de moneda válida.';
$lang['week']                                             = 'Semana';
$lang['weeks']                                            = 'Semanas';
$lang['month']                                            = 'Més';
$lang['months']                                           = 'Meses';
$lang['year']                                             = 'Año';
$lang['years']                                            = 'Años';
$lang['expense_report_category']                          = 'Categoría';
$lang['expense_paid_via']                                 = 'Pago realizado por %s';
$lang['item_as_expense']                                  = '[Gasto]';
$lang['show_help_on_setup_menu']                          = 'Mostrar el menú de ayuda';
$lang['customers_summary_total']                          = 'Total de clientes';
$lang['filter_by']                                        = 'Filtrar por';
$lang['re_captcha']                                       = 'reCAPTCHA';
$lang['recaptcha_site_key']                               = 'Site key';
$lang['recaptcha_secret_key']                             = 'Secret key';
$lang['recaptcha_error']                                  = 'Favor de completar la sección del reCAPTCHA.';
$lang['smtp_username']                                    = 'Username';
$lang['smtp_username_help']                               = 'Llene solo si su cliente de email requiere username.';
$lang['pinned_project']                                   = 'Proyecto fijado';
$lang['pin_project']                                      = 'Pin project';
$lang['unpin_project']                                    = 'Unpin project';
$lang['smtp_encryption']                                  = 'Encriptación';
$lang['smtp_encryption_none']                             = 'Nada';
$lang['show_proposals_on_calendar']                       = 'Propuestas';
$lang['invoice_project_see_billed_expenses']              = 'Ver gastos que serán facturados en esta factura';
$lang['project_overview_expenses']                        = 'Total gastos';
$lang['project_overview_expenses_billable']               = 'Gastos facturables';
$lang['project_overview_expenses_billed']                 = 'Gastos facturados';
$lang['project_overview_expenses_unbilled']               = 'Gastos sin facturar';
$lang['announcement_date_list']                           = 'Fecha';
$lang['project_setting_view_finance_overview']            = 'ver resumen financiero';
$lang['show_all_tasks_for_project_member']                = 'Permitir visualizar todas las tareas relacionadas con éste proyecto a todo el personal (esto incluye usuarios que no son parte del personal.)';
$lang['not_staff_added_as_project_member']                = 'Te acaba de agregar como un miembro del projecto';
$lang['report_expenses_base_currency_select_explanation'] = 'Tienes que elegir un tipo de moneda, pues el sistema encontró que se está utilizando varios tipos de moneda con relación a gastos.';

# version 1.1.6
$lang['project_activity_recorded_expense']   = 'Gasto registrado';
$lang['save_customer_and_add_contact']       = 'Guardar y crear contacto';
$lang['tickets_chart_weekly_opening_stats']  = 'Estadísticas semanal';
$lang['related_knowledgebase_articles']      = 'Articulos relacionados';
$lang['detailed_overview']                   = 'Detalles de tareas';
$lang['tasks_total_checklists_finished']     = 'Total de artículos marcados como lista de verificación completada';
$lang['tasks_total_added_attachments']       = 'Total de archivos adjuntos agregados';
$lang['tasks_total_comments']                = 'Total de comentarios';
$lang['task_finished_on_time']               = 'Terminado a tiempo?';
$lang['task_finished_on_time_indicator']     = 'Sí';
$lang['task_not_finished_on_time_indicator'] = 'No';
$lang['filter']                              = 'Filtrar';
$lang['task_filter_detailed_all_months']     = 'Todos los meses';
$lang['kb_article_slug']                     = 'Ruta';

# version 1.1.7
$lang['email_template_ticket_warning']          = 'Si el ticket es importado desde un email usando "piping" y el contacto no existe en e sistema, los campos serán remplasados.';
$lang['auto_stop_tasks_timers_on_new_timer']    = 'Detener todos los demás temporizadores para iniciar un nuevo temporizador';
$lang['notification_when_customer_pay_invoice'] = 'Recibir notificación cuando un cliente hace un pago';
$lang['not_invoice_payment_recorded']           = 'Nuevo pago de factura - %s';
$lang['email_template_contact_warning']         = 'If contact is not logged while making action the contact merge fields wont be replaced.';
$lang['theme_style']                            = 'Estilo del tema';
$lang['change_role_permission_warning']         = 'Cambiar permisos en los roles ahora no afecta los miembor actuales del equipo que usen el mismo rol.';
$lang['task_copied_successfully']               = 'Tarea copiada exitosamente';
$lang['failed_to_copy_task']                    = 'Error al copiar la tarea';
$lang['not_project_file_uploaded']              = 'Nuevo archivo agregado al proyecto';
$lang['settings_calendar_color']                = 'Color de %s';
$lang['settings_calendar_colors_heading']       = 'Estilo';
$lang['reminder']                               = 'Recordatorio';
$lang['back_to_tasks_list']                     = 'Volver atrás a lista de tareas';
$lang['copy_task_confirm']                      = 'Confirmar';
$lang['changing_items_affect_warning']          = 'Cambiando la información del articulo no afectará a las facturas/presupuestos ya creados.';
$lang['tax_is_used_in_expenses_warning']        = 'No puedes actualizar este el monto del impuesto porque existen transacciones con este valor.';
$lang['note']                                   = 'Nota';
$lang['leads_staff_report_converted']           = 'Total de prospectos convertidos';
$lang['leads_staff_report_created']             = 'Total de prospectos creados';
$lang['leads_staff_report_lost']                = 'Total de prospectos perdidos';
$lang['client_go_to_dashboard']                 = 'Atrás a la portal';
$lang['calendar_estimate_reminder']             = 'Recordatorio de estimados';
$lang['calendar_invoice_reminder']              = 'Recordatorio de factura';
$lang['calendar_proposal_reminder']             = 'Recordatorio de propuestas';
$lang['show_estimate_reminders_on_calendar']    = 'Recordatorio de estimados';
$lang['show_invoice_reminders_on_calendar']     = 'Recordatorio de factura';
$lang['show_proposal_reminders_on_calendar']    = 'Recordatorio de propuestas';
$lang['proposal_due_after']                     = 'Propuesta vence después de X días';
$lang['project_progress']                       = 'Progreso';
$lang['calculate_progress_through_tasks']       = 'Calcular el progreso a través de tareas';
$lang['allow_customer_to_change_ticket_status'] = 'Permitir que los clientes cambien el estado de los tickets utilizando su portal';
$lang['switch_to_general_report']               = 'Visualizar informe del equipo';
$lang['switch_to_staff_report']                 = 'Visualizar informe general';
$lang['generate']                               = 'Generar';
$lang['from_date']                              = 'Desde la fecha';
$lang['to_date']                                = 'Hasta la fecha';
$lang['not_results_found']                      = 'No se encontraron resultados';
$lang['lead_lock_after_convert_to_customer']    = 'No permitir editar los prospectos después de hacer sido convertido a cliente (no le aplica a los administradores)';
$lang['default_pipeline_sort']                  = 'Orden por defecto';
$lang['not_goal_message_failed']                = 'No logramos alcanzar la meta!<br /> tipo meta: %s
<br />Logro de los objetivos: %s
<br />Rendimiento total: %s
<br />Fecha inicio: %s
<br />Fecha fin: %s';
$lang['toggle_full_view']             = 'Ver vista grande';
$lang['not_estimate_invoice_deleted'] = 'Eliminó la factura creada';
$lang['not_task_new_comment']         = 'Comento en la tarea %s';
# version 1.1.8
$lang['invoice_number_exists']                  = 'Este número de factura existe para el año en curso.';
$lang['estimate_number_exists']                 = 'Este número de estimación existe para el año en curso.';
$lang['email_exists']                           = 'Email ya enviado';
$lang['not_uploaded_project_file']              = 'Nuevo archivo cargado';
$lang['not_created_new_project_discussion']     = 'Nueva conversación de proyecto creada';
$lang['not_commented_on_project_discussion']    = 'Nuevo comentario en una conversación de proyecto';
$lang['all_staff_members']                      = 'Todos los empleados';
$lang['help_project_permissions']               = 'VER permite a los miembros del equipo ver todos los proyecto. Si usted solo quiere que ellos vean los proyectos a los que han sido asignado, agréguelos como miembros y no genere ningún persmiso de vER.';
$lang['help_tasks_permissions']                 = 'VER permite a los miembros del equipo ver todas las tareas. Si usted solo quiere que ellos vean las tareas a las que han sido asignado, agréguelos como miembros y no genere ningún persmiso de vER.';
$lang['expense_recurring_days']                 = 'Día(s)';
$lang['expense_recurring_weeks']                = 'Semana(s)';
$lang['expense_recurring_months']               = 'Mes(es)';
$lang['expense_recurring_years']                = 'Año(s)';
$lang['reset_to_default_color']                 = 'Volver al color por defecto';
$lang['pdf_logo_width']                         = 'Ancho del logo (px)';
$lang['drop_files_here_to_upload']              = 'Dejar caer archivo aqui para cargar';
$lang['browser_not_support_drag_and_drop']      = 'Tu navegador no soporte la opción de dejar caer archivo para cargar.';
$lang['remove_file']                            = 'Eliminar archivo';
$lang['you_can_not_upload_any_more_files']      = 'Ya no puedes cargars archivos.';
$lang['custom_field_only_admin']                = 'Visible solo para los administradores';
$lang['leads_default_source']                   = 'Fuente por defecto';
$lang['clear_activity_log']                     = 'Limpiar el log';
$lang['default_contact_permissions']            = 'Permisos de contacto por defecto';
$lang['invoice_activity_marked_as_cancelled']   = 'Marcar factura como cancelada';
$lang['invoice_activity_unmarked_as_cancelled'] = 'Desmarcar factura como cancelada';
$lang['wait_text']                              = 'Por favor espere…';
$lang['projects_summary']                       = 'Resumen de proyectos';
$lang['dept_imap_host']                         = 'IMAP host';
$lang['dept_encryption']                        = 'Encryption';
$lang['dept_email_password']                    = 'Contraseña';
$lang['dept_email_no_encryption']               = 'No encriptado';
$lang['failed_to_decrypt_password']             = 'Fallo para desencriptar password';
$lang['delete_mail_after_import']               = 'Borrar correo después de importarlo?';
$lang['expiry_reminder_enabled']                = 'Enviar recordatorio de expiración';
$lang['send_expiry_reminder_before']            = 'Enviar recordatorio de expiración antes X días';
$lang['not_expiry_reminder_sent']               = 'Notificación de recordatorio de expiración enviada';
$lang['send_expiry_reminder']                   = 'Recordatorio de caducidad enviado';
$lang['sent_expiry_reminder_success']           = 'Recordatorio de caducidad enviado con éxito';
$lang['sent_expiry_reminder_fail']              = 'Error al enviar recordatorio de expiración';
$lang['leads_default_status']                   = 'Estados por defecto';
$lang['item_description_placeholder']           = 'Descripción';
$lang['item_long_description_placeholder']      = 'Descripción larga';
$lang['item_quantity_placeholder']              = 'Cantidad';
$lang['item_rate_placeholder']                  = 'Calificar';
$lang['tickets_summary']                        = 'Resumen de tickets';
$lang['tasks_list_priority']                    = 'Prioridad';
$lang['ticket_status_db_2']                     = 'En progreso';
$lang['ticket_status_db_1']                     = 'Abierto';
$lang['ticket_status_db_3']                     = 'Contestado';
$lang['ticket_status_db_4']                     = 'En espera';
$lang['ticket_status_db_5']                     = 'Cerrado';
$lang['ticket_priority_db_1']                   = 'Bajo';
$lang['ticket_priority_db_2']                   = 'Medio';
$lang['ticket_priority_db_3']                   = 'Alto';
$lang['customer_have_projects_by']              = ' %s';
$lang['customer_have_proposals_by']             = ' %s';
$lang['do_not_redirect_payment']                = 'No me envie al procesador de pagos';
$lang['project_tickets']                        = 'Tickets';
$lang['invoice_report']                         = 'Informe de facturas';
$lang['payment_modes_report']                   = 'Métodos de pagos (transacciones)';
$lang['customer_admins']                        = 'Comercial';
$lang['assign_admin']                           = 'Asignar comercial';
$lang['customer_admin_date_assigned']           = 'Fecha asignada';
$lang['customer_admin_login_as_client_message'] = 'Hola %s. Te hemos agregado como ejecutivo de cuentas a este cliente.';
$lang['ticket_form_validation_file_size']       = 'Tamaño del archivo debe ser menor de %s';
$lang['has_transactions_currency_base_change']  = 'Cambio de la moneda base es posible sólo si no hay operaciones registradas en esa moneda. Eliminar las operaciones para cambiar la moneda base.';
$lang['customers_sort_all']                     = 'Todos';

# version 1.1.9
$lang['use_recaptcha_customers_area']    = 'Aceptar reCaptcha en el área de cliente (login/register)';
$lang['project_marked_as_finished']      = 'Proyecto completado';
$lang['project_status_updated']          = 'Estado del proyecto actualizado';
$lang['remove_decimals_on_zero']         = 'Remover decimales en numeros/dinero con ceros (2.00 será 2, 2.25 seguirá siendo 2.25)';
$lang['remove_tax_name_from_item_table'] = 'Remover nombre del impuesto de la fila de ítems de la tabla';

# version 1.2.0
$lang['not_billable_expenses_by_categories']      = 'No facturables gastos por categorías';
$lang['billable_expenses_by_categories']          = 'Los gastos facturables por categorías';
$lang['format_letter_size']                       = 'A4 vertical';
$lang['pdf_formats']                              = 'Formatos de documentos';
$lang['swap_pdf_info']                            = 'Intercambiar posición de los datos de la compañíay con los datos del cliente';
$lang['expenses_filter_by_categories']            = 'Por categorías';
$lang['task_copy']                                = 'Copiar';
$lang['estimate_status']                          = 'Estados';
$lang['expenses_report_exclude_billable']         = 'Excluir gastos facturables';
$lang['expenses_total']                           = 'Total';
$lang['estimate_activity_added_attachment']       = 'Agregar adjunto';
$lang['show_to_customer']                         = 'Mostrar al cliente';
$lang['hide_from_customer']                       = 'Ocultar al cliente';
$lang['expenses_report_total']                    = 'Total';
$lang['expenses_report']                          = 'Informe de gastos';
$lang['expenses_report_total_tax']                = 'Total impuesto';
$lang['expenses_detailed_report']                 = 'Informe detallado';
$lang['expense_not_billable']                     = 'No facturable';
$lang['notification_settings']                    = 'Configuración de las notificaciones';
$lang['staff_with_roles']                         = 'Equipo con roles';
$lang['specific_staff_members']                   = 'Equipo específico';
$lang['proposal_mark_as']                         = 'Marcar como %s';
$lang['kb_report_total_answers']                  = 'Total';
$lang['ticket_message_edit']                      = 'Editar';
$lang['invoice_files']                            = 'Archivos de facturas';
$lang['estimate_files']                           = 'Archivos de presupuestos';
$lang['proposal_files']                           = 'Archivos de propuestas';
$lang['invoices_awaiting_payment']                = 'Facturas por cobrar';
$lang['tasks_not_finished']                       = 'Tareas sin completar';
$lang['outstanding_invoices']                     = 'Facturas pendientes';
$lang['past_due_invoices']                        = 'Facturas vencidas';
$lang['paid_invoices']                            = 'Facturas pagadas';
$lang['invoice_estimate_year']                    = 'Año';
$lang['task_stats_logged_hours']                  = 'Horas registradas';
$lang['leads_converted_to_client']                = 'Prospectos convertidos';
$lang['task_assigned_from']                       = 'Esta tarea fue asignada a ti por parte de %s';
$lang['new_note']                                 = 'Crear nota';
$lang['my_tickets_assigned']                      = 'Tickets asignados a mí';
$lang['filter_by_assigned']                       = 'Por equipo asignado';
$lang['staff_stats_total_logged_time']            = 'Tiempo total registrado';
$lang['staff_stats_last_month_total_logged_time'] = 'Tiempo total registrado mes anterior';
$lang['staff_stats_this_month_total_logged_time'] = 'Tiempo total registrado mes actual';
$lang['staff_stats_last_week_total_logged_time']  = 'Tiempo total registrado semana anterior';
$lang['staff_stats_this_week_total_logged_time']  = 'Tiempo total registrado semana actual';
// dont change this becuse are translated before for the projects timesheets and now are only used for readability.
$lang['timesheet_user']       = $lang['project_timesheet_user'];
$lang['timesheet_start_time'] = $lang['project_timesheet_start_time'];
$lang['timesheet_end_time']   = $lang['project_timesheet_end_time'];
$lang['timesheet_time_spend'] = $lang['project_timesheet_time_spend'];
$lang['task_timesheets']      = $lang['project_timesheets'];
$lang['task_log_time_start']  = $lang['project_timesheet_start_time'];
$lang['task_log_time_end']    = $lang['project_timesheet_end_time'];
$lang['task_single_log_user'] = $lang['project_timesheet_user'];
# version 1.2.2
$lang['milestone_description']                      = 'Descripción';
$lang['description_visible_to_customer']            = 'Mostrar descripción al cliente';
$lang['upcoming_tasks']                             = 'Las tareas próximas';
$lang['paymentmethod_two_checkout_account_number']  = 'Account number (seller iD)';
$lang['paymentmethod_two_checkout_private_key']     = 'Private key';
$lang['paymentmethod_two_checkout_publishable_key'] = 'Publishable key';
$lang['payment_credit_card_number']                 = 'Tarjeta número';
$lang['payment_credit_card_expiration_date']        = 'Fecha de expiración';
$lang['payment_billing_email']                      = 'Email';
$lang['submit_payment']                             = 'Enviar pago';
$lang['2checkout_notice_payment']                   = 'Credit card details are processed via secure token provided from 2Checkout';
$lang['2checkout_usage_notice']                     = 'SSL is required if you\'re using the 2Checkout payment API. It is required to safely call the tokenization and authorizations. The system will function without sSL, however, this will place you out of compliance, which risks deactivation of your API permissions.';
$lang['custom_field_disallow_customer_to_edit']     = 'No permitir al cliente para editar este campo';
$lang['project_due_notice']                         = 'Este proyecto esta atrasado por %s días';
$lang['not_lead_added_attachment']                  = 'agregó un nuevo archivo al contacto %s';
$lang['lead_note_date_added']                       = 'Nota agregada: %s';
$lang['recurring_custom']                           = 'Personalizado';
// dont translate these, only added for better readability already translated for the expenses custom recurring feature.
$lang['invoice_recurring_months'] = $lang['expense_recurring_months'];
$lang['invoice_recurring_years']  = $lang['expense_recurring_years'];
$lang['invoice_recurring_days']   = $lang['expense_recurring_days'];
$lang['invoice_recurring_weeks']  = $lang['expense_recurring_weeks'];

# version 1.2.4
$lang['document_direction']                                 = 'Tipo lectura';
$lang['notify_project_members_status_change']               = 'Notificar a los miembros del proyecto que se cambió el estado del proyecto';
$lang['not_project_status_updated']                         = 'El estado del proyecto cambio de %s a %s';
$lang['ticket_not_found']                                   = 'Ticket no encontrado';
$lang['project_not_found']                                  = 'Proyecto no encontrado';
$lang['export_project_data']                                = 'Exportar data del proyecto';
$lang['total_project_members']                              = 'Total de miembros en el proyecto';
$lang['total_project_files']                                = 'Archivos adjuntos';
$lang['total_project_discussions_created']                  = 'Discusiones creadas';
$lang['project_member']                                     = 'Miembro';
$lang['total_project_discussions_comments']                 = 'Total de comentarios del proyecto';
$lang['staff_total_task_assigned']                          = 'Total tareas asignadas';
$lang['staff_total_comments_on_tasks']                      = 'Comentarios de tareas';
$lang['project_members_overview']                           = 'Visión general de los miembros del proyecto';
$lang['project_milestones_overview']                        = 'Resumen de los procesos';
$lang['total_tasks_in_milestones']                          = 'Total de tareas asignadas';
$lang['total_task_members_assigned']                        = 'Total miembros asignados';
$lang['total_task_members_followers']                       = 'Total seguidores';
$lang['total_milestones']                                   = 'Total de procesos';
$lang['total_project_worked_days']                          = 'Total de días trabajados';
$lang['finance_overview']                                   = 'Resumen financiero';
$lang['project_custom_fields']                              = 'Campos personalizados';
$lang['total_tickets_related_to_project']                   = 'Total de tickets vinculado a un proyecto';
$lang['projects_total_invoices_created']                    = 'Total de facturas creadas';
$lang['do_not_send_invoice_payment_email_template_contact'] = 'No enviar correo de pago registrado al cliente.';
$lang['no_preview_available_for_file']                      = 'No hay vista previa disponible para este archivo.';
$lang['project_activity_deleted_file_discussion_comment']   = 'Comentario sobre discusión archivo eliminado';
$lang['email_template_discussion_info']                     = 'This template is used for both project discussion comments emails. (files discussions and regular discussions)';
$lang['format_a4_portrait_size']                            = 'Vertical';
$lang['only_show_contact_tickets']                          = 'En el perfil del cliente, sólo mostrar tickets relacionados con el usuario conectado (no se aplica al cliente principal)';
$lang['cancel_overdue_reminders_invoice']                   = 'Impedir el envío de recordatorios pendientes para esta factura';
$lang['customer_shipping_address_notice']                   = 'No llene la dirección de envío si no vas a utilizar envío de facturas.';
$lang['timesheets_overview']                                = 'Resumen de tabla de tiempos';
$lang['invoice_status_draft']                               = 'Borrador';
$lang['save_as_draft']                                      = 'Guardar como borrador';
$lang['convert_and_save_as_draft']                          = 'Convertir y guardar como borrador';
$lang['convert']                                            = 'Convertir';
$lang['exclude_invoices_draft_from_client_area']            = 'Excluir las facturas en estado de borrador del portal del cliente';
$lang['invoice_draft_status_info']                          = 'Esta factura tiene un estados de borrador, el estados será cambiado automáticamente cuando envíes la factura al cliente o la marques como enviada.';
$lang['task_info']                                          = 'Información de tarea';
$lang['recurring_tasks']                                    = 'Recurrente';
// dont translate these, already translated
$lang['task_repeat_every']                         = $lang['expense_repeat_every'];
$lang['task_recurring_months']                     = $lang['expense_recurring_months'];
$lang['task_recurring_years']                      = $lang['expense_recurring_years'];
$lang['task_recurring_days']                       = $lang['expense_recurring_days'];
$lang['task_recurring_weeks']                      = $lang['expense_recurring_weeks'];
$lang['todays_tasks']                              = 'Tareas de hoy';
$lang['payment_mode_invoices_only']                = 'Solo facturas';
$lang['payment_mode_expenses_only']                = 'Solo gastos';
$lang['task_no_checklist_items_found']             = 'Puntos de la lista que no se encuentran para esta tarea.';
$lang['task_no_description']                       = 'Esta tarea no tiene descripción';
$lang['expenses_reminders']                        = 'Recordatorios';
$lang['expense_set_reminder_title']                = 'Establecer el recordatorio de gasto';
$lang['calendar_expense_reminder']                 = 'Recordatorio de gastos';
$lang['recurring_task']                            = 'Tarea recurrente';
$lang['disable_email_from_being_sent']             = 'Desactivar que este email se envíe';
$lang['not_sent_indicator']                        = 'No enviado';
$lang['proposal_status_revised']                   = 'En estudio';
$lang['customer_currency_change_notice']           = 'Si el cliente utiliza otra moneda a continuación, asegúrese que la moneda base este correctamente seleccionada para este cliente. El cambio de la moneda no es posible después de que las transacciones se registran.';
$lang['click_to_add_content']                      = 'Hacer clic aqui para agregar contenido';
$lang['related_to_project']                        = 'Esta %s está relacionada al %s: %s';
$lang['back_to_lead']                              = 'Atrás a los prospectos';
$lang['add_task_timer_started_warning']            = 'Detener el temporizador de la tarea actual para poder agregar un temporizador manual nuevo.';
$lang['sending_email_contact_permissions_warning'] = 'No se pudo elegir un contacto automático para el cliente. por favor, asegúrese de que los contactos que tiene el cliente tengan permisos %s';

# version 1.2.6
$lang['currently_supported_currencies']                       = 'Monedas soportadas actualmente';
$lang['authorize_notice']                                     = 'SSL is required if you\'re using the authorize.Net aIM payment API. Authorize.net only supports 1 currency per account. Make sure you add only 1 currency associated with your authorize account in the currencies field.';
$lang['settings_paymentmethod_developer_mode']                = 'Modo de desarrollador';
$lang['payment_cardholder_name']                              = 'Cardholder\'s name';
$lang['settings_paymentmethod_authorize_api_login_id']        = 'API login iD';
$lang['settings_paymentmethod_mollie_api_key']                = 'API key';
$lang['settings_paymentmethod_authorize_api_transaction_key'] = 'API transaction iD';
$lang['settings_paymentmethod_authorize_secret_key']          = 'Secret key';
$lang['leads_report_converted_notice']                        = 'Only leads thats belongs in the default status client will be taken as converted leads, if the leads belongs to the default status client and its not converted to customer will be still counted as converted lead';
$lang['payment_method']                                       = 'Forma de pago';
$lang['payment_method_info']                                  = 'Some payment gateways support different/multiple payment methods like credit card, PayPal, bank.';

# version 1.2.7
$lang['dropbox_app_key']                                    = 'Dropbox APP key';
$lang['project_invoice_select_all_expenses']                = 'Elegir todos los gastos';
$lang['role_update_staff_permissions']                      = 'Actualizar todos los permisos del personal que están utilizando éste rol';
$lang['customer_active']                                    = 'Activo';
$lang['note_updated_successfully']                          = 'Nota actualizada exitosamente';
$lang['update_note']                                        = 'Actualizar nota';
$lang['update_comment']                                     = 'Actualizar comentario';
$lang['comment_updated_successfully']                       = 'Comentario actualizado exitosamente.';
$lang['staff_send_welcome_email']                           = 'Enviar correo de bienvenida';
$lang['proposal_warning_email_change']                      = 'Email actualizado para %s. Este %s esta vinculado a presupuestos. quieres actualizar todos los emails vinculado a presupuestos de %s?';
$lang['update_proposal_email_yes']                          = 'Sí, actualiza todos los emails vinculados.';
$lang['update_proposal_email_no']                           = 'No, yo lo actualizaré manualmente.';
$lang['proposals_emails_updated']                           = 'Todos los emails vinculados a presupuestos de %s han sido actualizado a %s';
$lang['custom_field_company']                               = 'Empresa';
$lang['actions']                                            = 'Acciones';
$lang['project_mark_as']                                    = 'Marcar como %s';
$lang['todo_edit_title']                                    = 'Editar lista de quehaceres';
$lang['additional_action_required']                         = 'Acción adicional requerida!';
$lang['project_mark_tasks_finished_confirm']                = 'Confirmar';
$lang['project_marked_as_success']                          = 'Proyecto marcado como %s exitosamente';
$lang['project_marked_as_failed']                           = 'Hubo un error al marcar el proyecto como %s';
$lang['auto_assign_customer_admin_after_lead_convert']      = 'Auto asignar como administrador del cliente después de convertir';
$lang['auto_assign_customer_admin_after_lead_convert_help'] = 'Si esta opción se establece como sí el personal que convirtió el contacto a cliente se auto asigna como administrador del cliente. NOTA: Esta opción sólo se aplicará al personal que no dispone del permiso para vER los clientes.';
$lang['auto_close_tickets_disable']                         = 'Indicar 0 para deshabilitar.';
$lang['task_checklist_item_completed_by']                   = 'Completado por %s';
$lang['staff_email_signature_help']                         = 'Si está vacío, se utilizará por defecto la configuración de firma de correo electrónico';
$lang['default_task_priority']                              = 'Prioridad por defecto';
$lang['project_send_created_email']                         = 'Enviar correo de creación de proyecto';
$lang['survey_send_to_lists']                               = 'Encuesta enviar a la listas';
$lang['survey_send_notice']                                 = 'Los correos serán enviados utilizado el Cron Job por hora.';

# version 1.2.8
$lang['show_transactions_on_invoice_pdf']            = 'Mostrar pagos de la factura (transacciones) en el PDF';
$lang['bulk_actions']                                = 'Acciones masivas';
$lang['additional_filters']                          = 'Filtros adicionales';
$lang['expenses_available_to_bill']                  = 'Gastos disponibles para facturar';
$lang['bulk_action_customers_groups_warning']        = 'Si usted seleciona cualquier grupo, todos los grupos asignados para el cliene selecionado se removeran.';
$lang['customer_attachments_show_in_customers_area'] = 'Mostrar en área del cliente';
$lang['customer_attachments_show_notice']            = 'Only files uploaded from customer profile have ability to show/hide in customers area.';
$lang['customer_profile_files']                      = 'Archivos';
$lang['no_files_found']                              = 'No files found';
$lang['survey_customers_all']                        = 'Todos los clientes';
$lang['custom_field_column']                         = 'Grid (Bootstrap column Ej. 12) - max is 12';
$lang['task_status']                                 = 'Estado';
$lang['task_status_1']                               = 'Por iniciar';
$lang['task_status_2']                               = 'Espera de respuesta';
$lang['task_status_3']                               = 'Testear';
$lang['task_status_4']                               = 'En progreso';
$lang['task_status_5']                               = 'Completo';
$lang['task_mark_as']                                = 'Marcar como %s';
$lang['task_marked_as_success']                      = 'Tarea marcada com %s exitosa';
$lang['search_tasks']                                = 'Buscar tareas';
$lang['tasks_kanban_limit']                          = 'Limitar tareas en fila Kan Ban por estado';
$lang['show_on_invoice_on_pdf']                      = 'Show %s on invoice PDF';
$lang['show_pay_link_to_invoice_pdf']                = 'Mostrar el link de pago en el PDF de la factura (no aplica si la factura está cancelada)';
$lang['no_leads_found']                              = 'No leads found';
$lang['created_today']                               = 'Creado hoy';
$lang['total_tasks_deleted']                         = 'Total de tareas eliminadas: %s';
$lang['total_tickets_delete']                        = 'Total de tickets eliminados: %s';
$lang['total_tickets_delete']                        = 'Total de tickets eliminados: %s';
$lang['format_letter_portrait']                      = 'Carta vertical';
$lang['format_letter_landscape']                     = 'Carta horizontal';
$lang['period_datepicker']                           = 'Periodo';
$lang['total_by_hourly_rate']                        = 'Total por tarifa de horas';
$lang['staff_hourly_rate']                           = $lang['task_hourly_rate'];
// &#37; is for % so the system can confuse for the original fields like %s
$lang['remove_tax_name_from_item_table_help'] = 'El impuesto del ítem del 19&#37; se mostrará como 19&#37; sin el nombre de impuesto (no aplica si los valores de taxes son diferentes en cada ítem).';
$lang['back_to_project']                      = 'Volver al proyecto';
$lang['view_kanban']                          = 'Ver Kan Ban';
$lang['invoice_is_overdue']                   = 'This invoice is overdue by %s days';

# version 1.2.9
$lang['time_decimal']                            = 'Hora (decimal)';
$lang['time_h']                                  = 'Hora (h)';
$lang['proposal_number_prefix']                  = 'Formato de prefijo para propuestas';
$lang['settings_number_padding_prefix']          = 'Número de dígitos totales de cifras <br /> <small>Ej. Si este valor es 3 el número será formateado: 005 or 025</small>';
$lang['this_week_payments']                      = 'Pagos de esta semana';
$lang['last_week_payments']                      = 'Pagos de la última semana';
$lang['not_published_new_post']                  = 'published new post';
$lang['expense_name']                            = 'Nombre';
$lang['expense_name_help']                       = 'Para uso personal';
$lang['adjustments']                             = 'Ajustes';
$lang['payments_received']                       = 'Pagos recibidos';
$lang['not_lead_activity_created_proposal']      = 'Creada nueva propuesta - %s';
$lang['lead_title']                              = 'Posición';
$lang['lead_address']                            = 'Dirección';
$lang['lead_city']                               = 'Localidad';
$lang['lead_state']                              = 'Departamento';
$lang['lead_country']                            = 'País';
$lang['lead_zip']                                = 'Código postal';
$lang['lead_is_public_yes']                      = 'Sí';
$lang['lead_is_public_no']                       = 'No';
$lang['lead_info']                               = 'Informaciones del contacto';
$lang['lead_general_info']                       = 'Informaciones generales';
$lang['lead_latest_activity']                    = 'Última actividad';
$lang['item_description_new_lines_notice']       = 'New lines are not supported for item description. Use the item long description instead.';
$lang['estimates_report']                        = 'Informe de presupuestos';
$lang['confirm']                                 = 'Confirmar';
$lang['delete_staff']                            = 'Borar miembro del equipo';
$lang['delete_staff_info']                       = 'Alguna información de este miembro necesita ser transferida a otro usuario. por favor selecione el usuario al que le desea transferir la información.';
$lang['estimate_items']                          = 'Articulos del presupuesto';
$lang['no_proposals_found']                      = 'Sin propuestas';
$lang['no_estimates_found']                      = 'Sin presupuestos';
$lang['pipeline_limit_status']                   = 'Pipeline limit per status';
$lang['settings_update']                         = 'Actualización del sistema';
$lang['purchase_key']                            = 'Purchase key';
$lang['update_now']                              = 'Actualizar ahora';
$lang['update_available']                        = 'Actualización disponible';
$lang['latest_version']                          = 'Última versión';
$lang['your_version']                            = 'Su versión';
$lang['using_latest_version']                    = 'Está usando la versión más reciente';
$lang['mark_as_active']                          = 'Marcad como activo';
$lang['customer_inactive_message']               = 'This is inactive customer profile and some features may be disabled';
$lang['active_customers']                        = 'Clientes activos';
$lang['inactive_active_customers']               = 'Clientes desactivados';
$lang['include_proposal_items_merge_field_help'] = 'Include proposal items with merge field anywhere in proposal content as %s';
$lang['all_data_synced_successfully']            = 'Información sincronizada existosamente';
$lang['sync_now']                                = 'Sincronizar ahora';
$lang['sync_data']                               = 'Sincronizar datos';
$lang['sync_proposals_up_to_date']               = 'All proposals are up to date, nothing to sync';
$lang['proposal_sync_1_info']                    = 'All proposal data is stored separately for each proposal after creation. Updating the %s info wont affect previous created proposals for this %s.';
$lang['proposal_sync_2_info']                    = 'If you recently updated your %s info you can sync all new data to associated proposals. Here is a list of fields you can sync.';

# version 1.3.0
$lang['expense_include_additional_data_on_convert'] = 'Include additional details to item long description taken from this expense.';

# version 1.4.0
$lang['calendar_events_limit']                              = 'Límite de eventos de calendario (vista mes y semana)';
$lang['show_page_number_on_pdf']                            = 'Mostrar número de la página en el PDF';
$lang['customer_active_inactive_help']                      = 'Wont be shown in dropdowns when creating new records';
$lang['item_groups']                                        = 'Grupos';
$lang['item_group']                                         = 'Grupo del ítem';
$lang['item_group_name']                                    = 'Nombre del grupo';
$lang['new_item_group']                                     = 'Nuevo grupo';
$lang['show_setup_menu_item_only_on_hover']                 = 'Mostrar configuración de los ítems del menú sólo cuando esté "sobre" la opción con mouse en el área principal de la barra lateral';
$lang['internal_article']                                   = 'Artículo interno';
$lang['expenses_created_from_this_recurring_expense']       = 'Created expenses from this recurring expense';
$lang['convert_to_task']                                    = 'Convertir en tarea';
$lang['next_invoice_date']                                  = 'Next invoice date: %s';
$lang['next_expense_date']                                  = 'Next expense date: %s';
$lang['invoice_recurring_from']                             = 'This invoice is created from recurring invoice with number: %s';
$lang['expense_recurring_from']                             = 'This expense is created from the following recurring expense: %s';
$lang['child_invoices']                                     = 'Child invoices';
$lang['child_expenses']                                     = 'Child expenses';
$lang['no_announcements']                                   = 'No announcements';
$lang['unit']                                               = 'Unidad';
$lang['permission_view_own']                                = 'View (own)';
$lang['permission_global']                                  = 'Global';
$lang['permission_customers_based_on_admins']               = 'Based on customer admins';
$lang['permission_payments_based_on_invoices']              = 'Based on invoices VIEW (own) permission';
$lang['permission_projects_based_on_assignee']              = 'If staff member do not have permission VIEW (global) will be shown only projects where staff member is added as project member.';
$lang['permission_tasks_based_on_assignee']                 = 'If staff member do not have permission VIEW (global) will be shown only tasks where staff member is follower, assigned, task is public or in setup -> settings -> tasks -> allow all staff to see all tasks related to projects is set to YES when task is linked to project.';
$lang['settings_paymentmethod_default_selected_on_invoice'] = 'Selecar por defecto en las facturas';
$lang['paymentmethod_braintree_merchant_id']                = 'Merchant iD';
$lang['paymentmethod_braintree_private_key']                = 'Private key';
$lang['paymentmethod_braintree_public_key']                 = 'Public key';
$lang['company_requires_vat_number_field']                  = 'La compañía requiere usar el numero de identificación en el campo nIT?';
$lang['no_company_view_profile']                            = 'Person - view profile';
$lang['company_is_required']                                = 'Requerir campo de la compañía?';
$lang['estimate_invoiced']                                  = 'Facturado';
$lang['file_date_uploaded']                                 = 'Date uploaded';
$lang['allow_contact_to_delete_files']                      = 'Permitir a los contactos eliminar sus propios archivos subidos del área del cliente';
$lang['file']                                               = 'Archivo';
$lang['customer_contact_person_only_one_allowed']           = 'Only 1 contact is allowed when the company field is not filled. The system will cast this customer as person';
$lang['web_to_lead']                                        = 'Contacto desde web';
$lang['web_to_lead_form']                                   = 'Formulario de contacto desde la web';
$lang['new_form']                                           = 'Nuevo formulario';
$lang['form_name']                                          = 'Nombre del formulario';
$lang['cf_option_in_use']                                   = 'An option you removed is in use and cant be removed. The option is auto appended to the existing options.';
$lang['form_builder']                                       = 'Form builder';
$lang['form_information']                                   = 'Form informations & setup';
$lang['form_builder_create_form_first']                     = 'Create form first to be able to use the form builder.';
$lang['notify_assigned_user']                               = 'Responsible person';
$lang['form_recaptcha']                                     = 'Use Google reCaptcha';
$lang['form_lang_validation']                               = 'Lenguaje';
$lang['form_lang_validation_help']                          = 'For validation messages';
$lang['form_btn_submit_text']                               = 'Submit button text';
$lang['form_success_submit_msg']                            = 'Message to show after form is succcesfuly submitted';
$lang['total_submissions']                                  = 'Total submissions';
$lang['form_integration_code']                              = 'Integration code';
$lang['not_lead_imported_from_form']                        = 'New lead imported from Web to lead form - %s';
$lang['not_lead_activity_log_attachment']                   = 'Attachment imported from form - %s';
$lang['form_integration_code_help']                         = 'Copy & paste the code anywhere in your site to show the form, additionaly you can adjust the width and height px to fit for your website.';
$lang['invoice_not_found']                                  = 'Invoice not found';
$lang['estimate_not_found']                                 = 'Estimate not found';
$lang['expense_not_found']                                  = 'Expense not found';
$lang['proposal_not_found']                                 = 'Proposal not found';
$lang['new_task_assigned_non_user']                         = 'New task is assigned to you - %s';
$lang['no_child_found']                                     = 'No child %s found';
$lang['company_vat_number']                                 = 'NIT';
$lang['not_lead_assigned_from_form']                        = 'New lead is assigned to you';
$lang['not_lead_activity_assigned_from_form']               = 'Lead assigned to %s';
$lang['form_allow_duplicate']                               = 'Allow duplicate %s to be inserted into database?';
$lang['track_duplicate_by_field']                           = 'Prevent duplicate on field';
$lang['and_track_duplicate_by_field']                       = '+ field (leave blank to track duplicates only by 1 field)';
$lang['create_the_duplicate_form_data_as_task']             = 'Create duplicate %s data as task and assign to responsible staff member';
$lang['create_the_duplicate_form_data_as_task_help']        = 'Used for further review on the submission and take the necessary action';
$lang['currently_selected']                                 = 'Currently selected';
$lang['search_ajax_empty']                                  = 'Select and begin typing';
$lang['search_ajax_placeholder']                            = 'Type to search…';
$lang['search_ajax_searching']                              = 'Buscando…';
$lang['search_ajax_initialized']                            = 'Start typing to search';
$lang['lead_description']                                   = 'Descripción';
$lang['lead_website']                                       = 'Website';
$lang['invoice_activity_auto_converted_from_estimate']      = 'Invoice auto created from estimate with number %s';
$lang['hour_of_day_perform_auto_operations']                = 'Hora del día para llevar a cabo operaciones automáticas';
$lang['hour_of_day_perform_auto_operations_format']         = 'Formato de 24 horas.';
$lang['inv_hour_of_day_perform_auto_operations_help']       = 'Usado para facturas recurrentes, recordatorios de vencimiento, etc…';
$lang['use_minified_files']                                 = 'Usar archviso en versión "minified" para cSS y jS';

# version 1.5.0
$lang['logo_favicon_changed_notice']       = 'Camboio de logo o favicon detectado.';
$lang['kb_search_articles']                = 'Buscar en la base de conocimiento';
$lang['kb_search']                         = 'Buscar';
$lang['have_a_question']                   = '¿Qué necesitas saber?';
$lang['card_expiration_year']              = 'Año de expiración';
$lang['card_expiration_month']             = 'Mes de expiración';
$lang['client_website']                    = 'Website';
$lang['search_project_members']            = 'Buscar miembros del proyecto';
$lang['cf_translate_input_link_title']     = 'Título';
$lang['cf_translate_input_link_url']       = 'URL';
$lang['cf_translate_input_link_tip']       = 'Click aquí para agregar link';
$lang['task_edit_delete_timesheet_notice'] = 'Timesheet task is %s, you cant %s the timesheet.';
$lang['department_username']               = 'IMAP username';
$lang['department_username_help']          = 'Only fill this field if your IMAP server use username to login instead email address. Note that you will still need to add email address.';
$lang['total_tickets_deleted']             = 'Total tickets deleted: %s';

# version 1.5.1
$lang['ticket_linked_to_project']                                = 'This ticket is linked to project: %s';
$lang['only_own_files_contacts']                                 = 'Los contacts sólo pueden ver sus propios archivos subidod en el área del cliente';
$lang['only_own_files_contacts_help']                            = 'Si usted comparte los archivos manualmente desde el perfil del cliente a otros contactosIf you share the file manually from customer profile to other contacts they wil be able to see the file.';
$lang['share_file_with']                                         = 'Share file With';
$lang['file_share_visibility_notice']                            = 'This file is not shared with contacts, toggle visibility again to reload';
$lang['share_file_with_show']                                    = 'This file is shared with: %s';
$lang['allow_primary_contact_to_view_edit_billing_and_shipping'] = 'Permitir al contacto principal ver/editar los detalles de facturación y envíos?';
$lang['estimate_due_after']                                      = 'Estimate due after (days)';

# version 1.6.0
$lang['my_timesheets']                                   = 'Mis tiempos';
$lang['today']                                           = 'Hoy';
$lang['open_in_dropbox']                                 = 'Abrir en dropbox';
$lang['show_primary_contact']                            = 'Mostrar el nombre completo del contacto principal en %s';
$lang['view_members_timesheets']                         = 'Ver todas las hojas de tiempo';
$lang['priority']                                        = 'Prioridad';
$lang['fetch_from_google']                               = 'Fetch from Google';
$lang['customer_fetch_lat_lng_usage']                    = 'Fill address, city and country before fetching to get best result.';
$lang['g_search_address_not_found']                      = 'The address couldn\'t be found, please try again';
$lang['proposals_report']                                = 'Reporte de propuestas';
$lang['staff_members_open_tickets_to_all_contacts_help'] = 'If staff member don\'t have permission for customers VIEW only will be able to create new tickets from admin area to customer contacts where is assigned as customer admin.';
$lang['staff_members_open_tickets_to_all_contacts']      = 'Permitir a los miembors del equipo abrir los tiquetes de todos los contactos?';
$lang['charts_based_report']                             = 'Charts based report';
$lang['delete_backups_older_then']                       = 'Borrado automático de backups con más de X días de antigüedad (0 para desactivar)';
$lang['responsible_admin']                               = 'Administrador responsable';
$lang['tags']                                            = 'Tags';
$lang['tag']                                             = 'Tag';
$lang['customer_map_notice']                             = 'Add longitude and latitude in the customer profile to show the map here';
$lang['default_view']                                    = 'Vista por defecto';
$lang['day']                                             = 'Días';
$lang['agenda']                                          = 'Calendario';
$lang['timesheet_tags']                                  = 'Timesheet tags';
$lang['show_more']                                       = 'Ver más';
$lang['show_less']                                       = 'Ver menos';
$lang['project_completed_date']                          = 'Completed date';
$lang['language']                                        = 'Lenguaje';
$lang['this_week']                                       = 'Esta semana';
$lang['last_week']                                       = 'Última semana';
$lang['this_month']                                      = 'Este mes';
$lang['last_month']                                      = 'Último mes';
$lang['no_description_project']                          = 'No hay description para este proyecto';
$lang['sales_string']                                    = 'Ventas';
$lang['no_project_members']                              = 'No existen miembros en este proyecto';
$lang['search_by_tags']                                  = 'Use # + tagname to search by tags';
$lang['project_status_5']                                = 'Cancelado';

# version 1.7.0
$lang['not_activity_new_reminder_created']        = 'set a new reminder for %s with date %s';
$lang['not_activity_new_task_created']            = 'Created new task - %s';
$lang['recurring_invoice_draft_notice']           = 'This invoice is with status draft, you need to mark this invoice as sent. Recurring invoices with status draft won\'t be recreated by Cron Job.';
$lang['recurring_recreate_hour_notice']           = '%s will be recreated on specific hour of the day based from the setting located at setup->Settings-Cron Job';
$lang['invoice_project_include_timesheets_notes'] = 'Include each timesheet note in item description';
$lang['events']                                   = 'Events';
$lang['clear']                                    = 'Clear';
$lang['auto_mark_as_public']                      = 'Auto mark as public';
$lang['time_format']                              = 'Format de tiempo';
$lang['time_format_24']                           = '24 hours';
$lang['time_format_12']                           = '12 hours';
$lang['delete_activity_log_older_then']           = 'Borrar actividad del sistema con mas de X meses de antigüedad';
$lang['mark_as_read']                             = 'Mark as read';
$lang['mark_all_as_read']                         = 'Mark all as read';
$lang['tax_1']                                    = 'Impuesto 1';
$lang['tax_2']                                    = 'Impuesto 2';
$lang['total_with_tax']                           = 'Total with tax';
$lang['new_task_auto_assign_current_member']      = 'Auto asignar tareas al creador cuando se agregue una nueva';
$lang['new_task_auto_assign_current_member_help'] = 'Not applied if task is linked to project and the creator is not project member';
$lang['copy_project_tasks_status']                = 'Tasks status';
$lang['tasks_summary']                            = 'Listado de tareas';
$lang['vault']                                    = 'Vault';
$lang['new_vault_entry']                          = 'New vault entry';
$lang['server_address']                           = 'Server address';
$lang['port']                                     = 'Port';
$lang['vault_username']                           = 'Username';
$lang['vault_password']                           = 'Password';
$lang['vault_description']                        = 'Short description';
$lang['vault_entry']                              = 'Vault entry';
$lang['no_port_provided']                         = 'Not provided';
$lang['view_password']                            = 'View password';
$lang['security_reasons_re_enter_password']       = 'For security reasons please enter your password below';
$lang['password_change_fill_notice']              = 'Only fill password field if you want to change the password';
$lang['vault_password_user_not_correct']          = 'Your password is not correct, please try again';
$lang['no_vault_entries']                         = 'Vault entries not found for this customer.';
$lang['vault_entry_created_from']                 = 'This vault entry is created by %s';
$lang['vault_entry_last_update']                  = 'Last updated by %s';
$lang['vault_entry_visible_to_all']               = 'Visible to all staff member who have access to this customer';
$lang['vault_entry_visible_creator']              = 'Visible only to me (administrator are not excluded)';
$lang['vault_entry_visible_administrators']       = 'Visible only to administrators';
$lang['my_reminders']                             = 'Mis recordatorios';
$lang['reminder_related']                         = 'Related to';
$lang['event_notification']                       = 'Notificaciones';
$lang['days']                                     = 'Days';
$lang['reminder_notification_placeholder']        = 'Ej. 30 minutos antes';
$lang['event_color']                              = 'Event color';
$lang['group_by_task']                            = 'Agrupar por tarea';
$lang['save']                                     = 'Save';
$lang['disable_languages']                        = 'Desactivar languajes';

# version 1.8.0
$lang['not_customer_viewed_invoice']                         = 'La factura con el número %s ha sido vista';
$lang['not_customer_viewed_estimate']                        = 'El presupuesto con el número %s ha sido visto';
$lang['not_customer_viewed_proposal']                        = 'La propuesta con el número %s ha sido vista';
$lang['display_inline']                                      = 'Display inline';
$lang['email_header']                                        = 'Cabecera predefinida';
$lang['email_footer']                                        = 'Pie predefinido';
$lang['exclude_proposal_from_client_area_with_draft_status'] = 'Excluir propuestas con el estado "boceto" del área del cliente';
$lang['pusher_app_key']                                      = 'APP key';
$lang['pusher_app_secret']                                   = 'APP secret';
$lang['pusher_app_id']                                       = 'APP iD';
$lang['pusher_cluster_notice']                               = 'Deja en blanco si no usarás un pusher cluster por defecto.';
$lang['pusher_enable_realtime_notifications']                = 'Habilitar notificaciones en tiempo real';
$lang['task_is_overdue']                                     = 'Esta tarea está vencida';
$lang['this_year']                                           = 'Este año';
$lang['last_year']                                           = 'El año pasado';
$lang['customer_statement']                                  = 'Resumen';
$lang['customer_statement_for']                              = 'Resumen del cliente para %s';
$lang['account_summary']                                     = 'Saldo de cuenta';
$lang['statement_beginning_balance']                         = 'Comenzando balance';
$lang['invoiced_amount']                                     = 'Total facturado';
$lang['amount_paid']                                         = 'Total pagado';
$lang['statement_from_to']                                   = '%s a %s';
$lang['customer_statement_info']                             = 'Mostrando todas las facturas y pagos entre %s y %s';
$lang['balance_due']                                         = 'Balance vencido';
$lang['statement_heading_date']                              = 'Fecha';
$lang['statement_heading_details']                           = 'Detalles';
$lang['statement_heading_amount']                            = 'Monto';
$lang['statement_heading_payments']                          = 'Pagos';
$lang['statement_heading_balance']                           = 'Balance';
$lang['statement_invoice_details']                           = 'Factura %s - vence el %s';
$lang['statement_payment_details']                           = 'Pago (%s) para la factura %s';
$lang['statement_bill_to']                                   = 'Para';
$lang['send_to_email']                                       = 'Enviar por mail';
$lang['statement_sent_to_client_success']                    = 'El estado de cuenta fue enviado al cliente satisfactoriamente';
$lang['statement_sent_to_client_fail']                       = 'Problem while sending the statement';
$lang['view_account_statement']                              = 'Ver resumen de cuenta';
$lang['text_not_recommended_for_servers_limited_resources']  = 'No recomendado si su servidor tiene recursos limitados.';
$lang['tasks_bull_actions_assign_notice']                    = 'If the task is linked to project and the staff member you are assigning the task to is not project member this staff will be auto added as member.';
$lang['company_information']                                 = 'Información de la empresa';
$lang['ticket_form']                                         = 'Ticket de ';
$lang['ticket_form_subject']                                 = 'Tema';
$lang['ticket_form_name']                                    = 'Nombre';
$lang['ticket_form_email']                                   = 'Email';
$lang['ticket_form_department']                              = 'Departmento';
$lang['ticket_form_message']                                 = 'Mensaje';
$lang['ticket_form_priority']                                = 'Prioridad';
$lang['ticket_form_service']                                 = 'Servicio';
$lang['ticket_form_submit']                                  = 'Enviar';
$lang['ticket_form_attachments']                             = 'Adjuntos';

$lang['success_submit_msg']                       = 'Gracias por contactarnos.  responderemos a la brevedad.';
$lang['vault_entry_share_on_projects']            = 'Compartir esta entrada en proyectos con los mismbros del mismo';
$lang['project_shared_vault_entry_login_details'] = 'Ver los detalles de login del sitio de clientes';
$lang['iso_code']                                 = 'Código iSO';
$lang['estimates_not_invoiced']                   = 'No facturado';
$lang['show_on_ticket_form']                      = 'Mostrar en ticket de ';
$lang['cancel_upload']                            = 'Cancelar subida';
$lang['show_table_export_button']                 = 'Mostrar el botón de exportar';
$lang['show_table_export_all']                    = 'A todos los miembros del staff';
$lang['show_table_export_admins']                 = 'Sólo a administradores';
$lang['show_table_export_hide']                   = 'Esconder el botón de exportación para el personal';
$lang['task_created_by']                          = 'Creado por %s';
$lang['validation_extension_not_allowed']         = 'Esta extesión de archivo no es válida';
$lang['allow_staff_view_proposals_assigned']      = 'Permitir a los miembros del equipo ver propuestas a las que están asigados';
$lang['task_users_working_on_tasks_multiple']     = '%s están trabajando en esta tarea ahora';
$lang['task_users_working_on_tasks_single']       = 'Ahora %s está trabajando en esta tarea.';

# version 1.9.0
$lang['estimated_hours']                               = 'Horas estimadas';
$lang['two_factor_auth_failed_to_send_code']           = 'Falla al enviar el código de autenticación de dos pasos por mail.  los ajustes de SMTP pueden no estar bien configurados.';
$lang['two_factor_auth_code_sent_successfully']        = 'Un correo ha sido enviado a %s con el código para verificar su ingreso al sistema';
$lang['enable_two_factor_authentication']              = 'Habilitar autenticación de dos pasos';
$lang['two_factor_authentication_info']                = 'La autenticación de dos pasos es provista por mail, antes de habilitarla, asegúrese de que los ajustes SMTP están correctamente configurados y el sistema es capaz de enviar mails de manera satisfactoria. Una clave de autenticación única será enviada al ingresar al sistema.';
$lang['timesheets_overview_all_members_notice_admins'] = 'La vista de tiempos de todos los miembros del equipo están disponibles sólamente para administradores.';
$lang['two_factor_authentication']                     = 'Autenticación de dos pasos';
$lang['two_factor_authentication_code']                = 'Código';
$lang['admin_two_factor_auth_heading']                 = 'Código de autenticación';
$lang['two_factor_code_not_valid']                     = 'El código de autenticación no es válido';
$lang['back_to_login']                                 = 'Volver a la página de ingreso';
$lang['enter_activity']                                = 'Entrar actividad';
$lang['attach_files']                                  = 'Adjuntar archivos';
$lang['no_tags_used']                                  = 'No hay etiquetas usadas por el sistema.';
$lang['exclude_completed_tasks']                       = 'Ecluír tareas completadas.';
$lang['modal_width_class']                             = 'Ancho de la clase modal';
$lang['contract_copy']                                 = 'Copiar';
$lang['contract_copied_successfully']                  = 'El contrato se ha copiado correctamente';
$lang['contract_copied_fail']                          = 'Error al copiar el contrato.';
$lang['project_marked_as_finished_to_contacts']        = 'Enviar un mail de <b>proyecto finalizado</b> a los contactos del cliente.';
$lang['only_admins']                                   = 'Sólo administradores';
$lang['new_notification']                              = '¡Nueva notificación!';
$lang['enable_desktop_notifications']                  = 'Habilitar notificaciones de escritorio';
$lang['save_and_send']                                 = 'Guardar y enviar';
$lang['private']                                       = 'Privado';
$lang['task_created_at']                               = 'Creada el %s';
$lang['hide_notified_reminders_from_calendar']         = 'Esconer los recordatorios notificados del calendario';
$lang['last_active']                                   = 'Último activo';
$lang['open_ticket']                                   = 'Abrir ticket';
$lang['task_add_description']                          = 'Agregar descripción';
$lang['project_setting_create_tasks']                  = 'crear tareas';
$lang['project_setting_edit_tasks']                    = 'editar tareas (sólo tareas creadas por el contacto)';

# version 1.9.2
$lang['items_report']                            = 'Items report';
$lang['reports_item']                            = 'Item';
$lang['quantity_sold']                           = 'Quantity sold';
$lang['total_amount']                            = 'Total amount';
$lang['avg_price']                               = 'Average price';
$lang['item_report_paid_invoices_notice']        = 'Items report is generated only from paid invoices before discounts and taxes.';
$lang['overview']                                = 'Overview';
$lang['timer_started_change_status_in_progress'] = 'Cambiar el estatus de la tarea a "en progreso" al iniciar el temporizador';
$lang['company_info_format']                     = 'Información de la compañía (PDF y HTmL)';
$lang['customer_info_format']                    = 'Customer information format (PDF and HTmL)';
$lang['custom_field_info_format_embed_info']     = 'Custom fields for %s can be easily embedded into PDF and HTmL documents by adding the merge fields into the page format at the following page: %s';
$lang['transfer_lead_notes_to_customer']         = 'Transfer lead notes to customer profile';
$lang['authorized_signature_text']               = 'Authorized signature';
$lang['show_pdf_signature_invoice']              = 'Mostrar firma en el PDF de la factura';
$lang['show_pdf_signature_estimate']             = 'Mostrar firma en el PDF del presupuesto';
$lang['signature']                               = 'Signature';
$lang['signature_image']                         = 'Signature image';
$lang['insert_checklist_templates']              = 'Insert checklist templates';
$lang['save_as_template']                        = 'Save as template';
$lang['scroll_responsive_tables_help']           = 'Tablas con gran cantidad de información tendrá un deslizador horizontal en vez de columnas.';
$lang['scroll_responsive_tables']                = 'Activar tablas ajustables';
$lang['invoice_item_add_edit_rate_currency']     = 'Rate - %s';
$lang['total_files_deleted']                     = 'Total files deleted: %s';
$lang['invalid_transaction']                     = 'Invalid transaction. please try again.';
$lang['payment_gateway_payu_money_key']          = 'PayU money key';
$lang['payment_gateway_payu_money_salt']         = 'PayU money salt';
$lang['settings_paymentmethod_description']      = 'Gateway dashbord payment description';

# version 1.9.3
$lang['default_ticket_reply_status']          = 'Estatus por defecto cuando se conteste un ticket';
$lang['ticket_add_response_and_back_to_list'] = 'Return to ticket list after response is submitted';

# version 1.9.4
$lang['default_task_status']                               = 'Estatus por defecto de una nueva tarea';
$lang['custom_field_pdf_html_help']                        = 'Make sure you check ' . $lang['custom_field_show_on_client_portal'] . ' field if you want the custom fields to be visible to customers area and when customer download PDF or receive PDF via email.';
$lang['auto']                                              = 'Auto';
$lang['email_queue']                                       = 'Email queue';
$lang['email_queue_enabled']                               = 'Enable email queue';
$lang['email_queue_skip_attachments']                      = 'Do not add emails with attachments in the queue.';
$lang['disable']                                           = 'Disable';
$lang['enable']                                            = 'Enable';
$lang['auto_dismiss_desktop_notifications_after']          = 'Auto olvidar notificaciones de escritorio después de X segundos (0 para desactivar)';
$lang['proposal_info_format']                              = 'Proposal info format (PDF and HTmL)';
$lang['hide_tasks_on_main_tasks_table']                    = 'Ocultar tareas del proyecto en la tabla de tareas (admin área)';
$lang['ticket_replies_order']                              = 'Orden de tickets contestados';
$lang['ticket_replies_order_notice']                       = 'El ticket inicial se mostrará siempre como el primero.';
$lang['invoice_cancelled_email_disabled']                  = 'Invoice is cancelled. Unmark as cancelled to enable email to client';
$lang['email_notifications']                               = 'Email notifications';
$lang['invoice_activity_record_payment_email_to_customer'] = 'Payment recorded, email sent to: %s';
$lang['exclude_inactive']                                  = 'Exclude inactive';
$lang['disable_all']                                       = 'Disable all';
$lang['enable_all']                                        = 'Enable all';
$lang['reccuring_invoice_option_gen_and_send']             = 'Generar y enviar automáticamente la renovación de la factura al cliente';
$lang['reccuring_invoice_option_gen_unpaid']               = 'Generar una factura no pagada';
$lang['reccuring_invoice_option_gen_draft']                = 'Generar un borrador de la factura';
$lang['event_created_by']                                  = 'Este evento es creado por %s';

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
$lang['credit_note_set_reminder_title']                          = 'Set Credit Note Reminder';
$lang['credit_note_add_edit_client_note']                        = $lang['invoice_add_edit_client_note'];
$lang['credit_note_bill_to']                                     = $lang['invoice_bill_to'];
$lang['credit_note_prefix']                                      = $lang['settings_sales_invoice_prefix'];
$lang['credit_note_admin_note']                                  = $lang['invoice_add_edit_admin_note'];
$lang['credit_note_total']                                       = $lang['invoice_total'];
$lang['credit_note_adjustment']                                  = $lang['invoice_adjustment'];
$lang['credit_note_discount']                                    = $lang['invoice_discount'];
$lang['credit_note_subtotal']                                    = $lang['invoice_subtotal'];
$lang['credit_note_table_quantity_heading']                      = $lang['invoice_table_quantity_heading'];
$lang['credit_note_table_hours_heading']                         = $lang['invoice_table_hours_heading'];
$lang['credit_note_table_item_heading']                          = $lang['invoice_table_item_heading'];
$lang['credit_note_table_item_description']                      = $lang['invoice_table_item_description'];
$lang['credit_note_table_rate_heading']                          = $lang['invoice_table_rate_heading'];
$lang['credit_note_table_tax_heading']                           = $lang['invoice_table_tax_heading'];
$lang['credit_note_table_amount_heading']                        = $lang['invoice_table_amount_heading'];
$lang['credit_notes_list_all']                                   = $lang['invoices_list_all'];

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
$lang['save_last_order_for_tables'] = 'Save last order for tables';
$lang['date_created']                                           = 'Date Created';

# Version 2.0.1
$lang['company_logo_dark']                                      = 'Company Logo Dark';
$lang['customers_register_require_confirmation']                = 'Require registration confirmation from administrator after customer register';
$lang['customer_requires_registration_confirmation']            = 'Requires Registration Confirmation';
$lang['confirm_registration']                                   = 'Confirm Registration';
$lang['customer_registration_successfully_confirmed']           = 'Customer registration successfully confirmed';
$lang['customer_register_account_confirmation_approval_notice'] = 'Thank you for registering, your account is pending approval and will be confirmed soon.';
$lang['after_subscription_payment_succeeded'] = 'After subscription payment is succeeded';
$lang['subscription_option_send_invoice'] = 'Send Invoice';
$lang['subscription_option_send_payment_receipt'] = 'Send Payment Receipt';
$lang['subscription_option_send_payment_receipt_and_invoice'] = 'Send Invoice and Payment Receipt';
$lang['subscription_option_do_nothing'] = 'Do Nothing';
$lang['gdpr_not_enabled'] = 'GDPR not enabled';
$lang['enable_gdpr'] = 'Enable GDPR';
$lang['gdpr_right_to_rectification'] = 'Right to rectification';
$lang['test_sms_config'] = 'Test SMS Config';
$lang['test_sms_message'] = 'Test Message';
$lang['send_test_sms'] = 'Send Test SMS';
$lang['gdpr_short'] = 'GDPR';
$lang['allow_non_admin_staff_to_delete_ticket_attachments'] = 'Allow non-admin staff members to delete ticket attachments';
