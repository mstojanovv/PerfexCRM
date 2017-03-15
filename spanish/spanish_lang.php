<?php
# Version 1.0.0
#
# General
$lang['id']                   = 'ID';
$lang['name']                 = 'Nombre';
$lang['options']              = 'Opciones';
$lang['submit']               = 'Enviar';
$lang['added_successfully']    = '%s añadido con éxito.';
$lang['updated_successfully']  = '%s actualizado con éxito.';
$lang['edit']                 = 'Editar %s';
$lang['add_new']              = 'Añadir %s';
$lang['deleted']              = '%s borrado';
$lang['problem_deleting']     = 'Problema al eliminar %s';
$lang['is_referenced']        = 'El ID de la %s ya está utilizando.';
$lang['close']                = 'Cerrar';
$lang['send']                 = 'Enviar';
$lang['cancel']               = 'Cancelar';
$lang['go_back']              = 'Volver';
$lang['error_uploading_file'] = 'Error al subir el archivo';
$lang['load_more']            = 'Cargar más';
$lang['cant_delete_default']  = 'No me puedo eliminar por defecto %s';

# Invoice General
$lang['invoice_status_paid']                = 'Pagada';
$lang['invoice_status_unpaid']              = 'Por Pagar';
$lang['invoice_status_overdue']             = 'Retrasada';
$lang['invoice_status_not_paid_completely'] = 'Pagada Parcialmente';

$lang['invoice_pdf_heading'] = 'FACTURA';

$lang['invoice_table_item_heading']            = 'Artículo';
$lang['invoice_table_quantity_heading']        = 'Cantidad';
$lang['invoice_table_rate_heading']            = 'Precio';
$lang['invoice_table_tax_heading']             = 'Impuesto';
$lang['invoice_table_amount_heading']          = 'Valor';
$lang['invoice_subtotal']                      = 'Total';
$lang['invoice_adjustment']                    = 'Ajuste';
$lang['invoice_total']                         = 'Total a Pagar';
$lang['invoice_vat']                           = 'NIF';
$lang['invoice_bill_to']                       = 'Facturado a';
$lang['invoice_data_date']                     = 'Fecha de la Factura:';
$lang['invoice_data_duedate']                  = 'Fecha de Vencimiento:';
$lang['invoice_received_payments']             = 'Pagos Recibidos';
$lang['invoice_no_payments_found']             = 'No se han encontrado pagos para esta factura.';
$lang['invoice_note']                          = 'Nota:';
$lang['invoice_payments_table_number_heading'] = 'Pago #';
$lang['invoice_payments_table_mode_heading']   = 'Modo de Pago';
$lang['invoice_payments_table_date_heading']   = 'Fecha';
$lang['invoice_payments_table_amount_heading'] = 'Valor';


# Announcements
$lang['announcement']                 = 'Anuncio';
$lang['announcement_lowercase']       = 'anuncio';
$lang['announcements']                = 'Anuncios';
$lang['announcements_lowercase']      = 'anuncios';
$lang['new_announcement']             = 'Nuevo Aviso';
$lang['announcement_name']            = 'Nombre del Anuncio';
$lang['announcement_message']         = 'Mensaje';
$lang['announcement_show_to_staff']   = 'Mostrar a los Empleados';
$lang['announcement_show_to_clients'] = 'Mostrar a los Clientes';
$lang['announcement_show_my_name']    = 'Mostrar mi Nombre';

# Clients
$lang['clients']                               = 'Clientes';
$lang['client']                                = 'Cliente';
$lang['new_client']                            = 'Nuevo Cliente';
$lang['client_lowercase']                      = 'cliente';
$lang['client_delete_tooltip']                 = 'Se eliminarán todos los datos de los clientes. Los contratos, tickets. NOTA: Si las facturas encontraron al cliente suele ser borrado. Es necesario asignar esta facturas a otro cliente para mantener el número de factura';
$lang['customer_delete_invoices_warning']      = 'Este cliente tiene facturas en la cuenta. Usted no puede eliminar este cliente. Cambiar todas las facturas a otro cliente y a continuación, elimine.';
$lang['client_firstname']                      = 'Nombre';
$lang['client_lastname']                       = 'Apellido';
$lang['client_email']                          = 'Email';
$lang['client_company']                        = 'Empresa';
$lang['client_vat_number']                     = 'NIF';
$lang['client_address']                        = 'Dirección';
$lang['client_city']                           = 'Localidad';
$lang['client_postal_code']                    = 'Código Postal';
$lang['client_state']                          = 'Provincia';
$lang['client_password']                       = 'Contraseña';
$lang['client_password_change_populate_note']  = 'Nota: Si rellena estos campos, la contraseña será cambiada para este cliente.';
$lang['client_password_last_changed']          = 'Último Cambio de la Contraseña:';
$lang['login_as_client']                       = 'Entrar como Cliente';
$lang['client_invoices_tab']                   = 'Facturas';
$lang['contracts_invoices_tab']                = 'Facturas';
$lang['contracts_tickets_tab']                 = 'Tickets';
$lang['contracts_notes_tab']                   = 'Notas';
$lang['client_invoice_number_table_heading']   = 'Nº Factura';
$lang['client_invoice_date_table_heading']     = 'Fecha';
$lang['client_invoice_due_date_table_heading'] = 'Fecha de Vencimiento';
$lang['client_string_table_heading']           = 'Cliente';
$lang['client_amount_table_heading']           = 'Valor';
$lang['client_status_table_heading']           = 'Estado';
$lang['note_description']                      = 'Descripción Nota';

$lang['client_string_contracts_table_heading']      = 'Cliente';
$lang['client_start_date_contracts_table_heading']  = 'Fecha de Inicio';
$lang['client_end_date_contracts_table_heading']    = 'Fecha Final';
$lang['client_description_contracts_table_heading'] = 'Descripción';
$lang['client_do_not_send_welcome_email']           = 'No enviar email de bienvenida';

$lang['clients_notes_table_description_heading'] = 'Descripción';
$lang['clients_notes_table_addedfrom_heading']   = 'Añadida Desde';
$lang['clients_notes_table_dateadded_heading']   = 'Fecha Agregada';

$lang['clients_list_full_name']   = 'Nombre Completo';
$lang['clients_list_last_login']  = 'Último Acceso';

# Contracts
$lang['contracts']                = 'Contratos';
$lang['contract']                 = 'Contrato';
$lang['new_contract']             = 'Nuevo Contrato';
$lang['contract_lowercase']       = 'contrato';
$lang['contract_start_date']      = 'Fecha de Inicio';
$lang['contract_end_date']        = 'Fecha Final';
$lang['contract_subject']         = 'Tema';
$lang['contract_description']     = 'Descripción';
$lang['contract_subject_tooltip'] = 'Tema también es visible para el cliente';
$lang['contract_client_string']   = 'Cliente';
$lang['contract_attach']          = 'Documento Adjunto';

$lang['contract_list_client']     = 'Cliente';
$lang['contract_list_subject']    = 'Tema';
$lang['contract_list_start_date'] = 'Fecha de Inicio';
$lang['contract_list_end_date']   = 'Fecha Final';

# Currencies
$lang['currencies']           = 'Monedas';
$lang['currency']             = 'Moneda';
$lang['new_currency']         = 'Nueva Moneda';
$lang['currency_lowercase']   = 'moneda';
$lang['base_currency_set']    = 'Esta es ahora su divisa base.';
$lang['make_base_currency']   = 'Hacer moneda base';
$lang['base_currency_string'] = 'Moneda base';

$lang['currency_list_name']   = 'Nombre';
$lang['currency_list_symbol'] = 'Símbolo';


$lang['currency_add_edit_description'] = 'Nombre moneda';
$lang['currency_add_edit_rate']        = 'Símbolo';

$lang['currency_edit_heading'] = 'Cambiar la moneda';
$lang['currency_add_heading']  = 'Añadir nueva moneda';


# Department
$lang['departments']          = 'Departamentos';
$lang['department']           = 'Departamento';
$lang['new_department']       = 'Nuevo Departamento';
$lang['department_lowercase'] = 'departamento';

$lang['department_name']             = 'Nombre del Departamento';
$lang['department_email']            = 'Email del Departamento';
$lang['department_hide_from_client'] = 'Esconder del Cliente?';
$lang['department_list_name']        = 'Nombre';

# Email Templates
$lang['email_templates']                        = 'Plantillas de email';
$lang['email_template']                         = 'Plantilla de email';
$lang['email_template_lowercase']               = 'plantilla de email';
$lang['email_templates_lowercase']              = 'Plantillas de email';
$lang['email_template_ticket_fields_heading']   = 'Tickets';
$lang['email_template_invoices_fields_heading'] = 'Facturas';
$lang['email_template_clients_fields_heading']  = 'Clientes';

$lang['template_name']                                      = 'Nombre de la plantilla';
$lang['template_subject']                                   = 'Tema';
$lang['template_fromname']                                  = 'Nombre de Envío';
$lang['template_fromemail']                                 = 'Desde el email';
$lang['send_as_plain_text']                                 = 'Enviar como texto sin formato';
$lang['email_template_disabled']                             = 'Desactivar el envío de este correo';
$lang['email_template_email_message']                       = 'Mensaje de email';
$lang['available_merge_fields']                             = 'campos de combinación disponibles';
# Home
$lang['dashboard_string']                                   = 'Panel Principal';
$lang['home_latest_todos']                                  = 'Últimas Tareas';
$lang['home_no_latest_todos']                               = 'No Existen Tareas';
$lang['home_latest_finished_todos']                         = 'Tareas Acabadas Recientemente';
$lang['home_no_finished_todos_found']                       = 'No Existen Tareas Terminadas';
$lang['home_todo_heading']                                  = 'Para hacer artículos';
$lang['home_tickets_awaiting_reply_by_department']          = 'Incidencias en espera de respuesta por el departamento';
$lang['home_tickets_awaiting_reply_by_status']              = 'Incidencias en espera de respuesta por situación';
$lang['home_this_week_events']                              = 'Esta semana los eventos';
$lang['home_upcoming_events_next_week']                     = 'Próximos eventos de la próxima semana';
$lang['home_event_added_by']                                = 'Evento añadida por';
$lang['home_public_event']                                  = 'Evento Público';
$lang['home_weekly_payment_records']                        = 'Resumen de Pagos Semanales';
$lang['home_weekend_ticket_opening_statistics']             = 'Estadísticas de Tickets Semanal';
# Newsfeed
$lang['whats_on_your_mind']                                 = '¿Qué tienes en mente?';
$lang['new_post']                                           = 'Enviar';
$lang['newsfeed_upload_tooltip']                            = 'Consejo: Arrastre y suelte archivos para subir';
$lang['newsfeed_all_departments']                           = 'Todos los Departamentos';
$lang['newsfeed_pin_post']                                  = 'Fijar la Publicación';
$lang['newsfeed_unpin_post']                                = 'Desanclar Publicación';
$lang['newsfeed_delete_post']                               = 'Borrar';
$lang['newsfeed_published_post']                            = 'Publicado';
$lang['newsfeed_you_like_this']                             = 'Te Gusta';
$lang['newsfeed_like_this']                                 = 'Me Gusta';
$lang['newsfeed_one_other']                                 = 'Gtro';
$lang['newsfeed_you']                                       = 'Tú';
$lang['newsfeed_and']                                       = 'y';
$lang['newsfeed_you_and']                                   = 'Usted y';
$lang['newsfeed_like_this_saying']                          = 'Me Gusta';
$lang['newsfeed_unlike_this_saying']                        = 'No me gusta esto';
$lang['newsfeed_show_more_comments']                        = 'Mostrar más comentarios';
$lang['comment_this_post_placeholder']                      = 'Comentar este post ..';
$lang['newsfeed_post_likes_modal_heading']                  = 'Colegas que les gusta este post';
$lang['newsfeed_comment_likes_modal_heading']               = 'Colegas que les gusta este comentario';
$lang['newsfeed_newsfeed_post_only_visible_to_departments'] = 'Este blog es sólo visible para los siguientes departamentos: %s';
# Invoice Items
$lang['invoice_items']                                      = 'Artículos de la Factura';
$lang['invoice_item']                                       = 'Artículo de la Factura';
$lang['new_invoice_item']                                   = 'Nuevo Artículo';
$lang['invoice_item_lowercase']                             = 'Artículo de la factura';

$lang['invoice_items_list_description'] = 'Descripción';
$lang['invoice_items_list_rate']        = 'Precio';
$lang['invoice_items_list_tax']         = 'Impuesto';

$lang['invoice_item_add_edit_description'] = 'Descripción';
$lang['invoice_item_add_edit_rate']        = 'Precio';
$lang['invoice_item_add_edit_tax']         = 'Impuesto';
$lang['invoice_item_add_edit_tax_select']  = 'Seleccione Impuesto';

$lang['invoice_item_edit_heading'] = 'Editar Elemento';
$lang['invoice_item_add_heading']  = 'Nuevo Elemento';

# Invoices


$lang['invoices']                       = 'Facturas';
$lang['invoice']                        = 'Factura';
$lang['invoice_lowercase']              = 'factura';
$lang['create_new_invoice']             = 'Crear Factura';
$lang['view_invoice']                   = 'Ver Factura';
$lang['invoice_payment_recorded']       = 'Factura de pagos registrado';
$lang['invoice_payment_record_failed']  = 'Error al registrar la factura de pago';
$lang['invoice_sent_to_client_success'] = 'La factura se ha enviado con éxito al cliente';
$lang['invoice_sent_to_client_fail']    = 'Problema al enviar la factura';
$lang['invoice_reminder_send_problem']  = 'Problema con la factura enviar recordatorio de retraso';
$lang['invoice_overdue_reminder_sent']  = 'Recordatorio de factura vencida enviado con éxito';

$lang['invoice_details']              = 'Detalles de la Factura';
$lang['invoice_view']                 = 'Ver Factura';
$lang['invoice_select_customer']      = 'Cliente';
$lang['invoice_add_edit_number']      = 'Número de Factura';
$lang['invoice_add_edit_date']        = 'Fecha de la Factura';
$lang['invoice_add_edit_duedate']     = 'Fecha de Vencimiento';
$lang['invoice_add_edit_currency']    = 'Moneda';
$lang['invoice_add_edit_client_note'] = 'Nota para el Cliente';
$lang['invoice_add_edit_admin_note']  = 'Nota del Comercial';

$lang['invoice_add_edit_search_item']  = 'Búsqueda Artículos';
$lang['invoices_toggle_table_tooltip'] = 'Ver Tabla completa';

$lang['edit_invoice_tooltip']                   = 'Editar factura';
$lang['delete_invoice_tooltip']                 = 'Eliminar la factura. Nota: Se borrarán todos los pagos con respecto a esta factura (si lo hay).';
$lang['invoice_sent_to_email_tooltip']          = 'Envía Factura por Email';
$lang['invoice_already_send_to_client_tooltip'] = 'Esta factura ya se ha enviado al cliente %s';
$lang['send_overdue_notice_tooltip']            = 'Enviar Aviso de Vencimiento';
$lang['invoice_view_activity_tooltip']          = 'Registro de Actividades';
$lang['invoice_record_payment']                 = 'Registrar Pago';

$lang['invoice_send_to_client_modal_heading']    = 'Enviar esta factura al cliente';
$lang['invoice_send_to_client_attach_pdf']       = 'Adjuntar la factura en PDF';
$lang['invoice_send_to_client_preview_template'] = 'Vista previa de plantilla de email';

$lang['invoice_dt_table_heading_number']  = 'Nº Factura';
$lang['invoice_dt_table_heading_date']    = 'Fecha';
$lang['invoice_dt_table_heading_client']  = 'Cliente';
$lang['invoice_dt_table_heading_duedate'] = 'Fecha de Vencimiento';
$lang['invoice_dt_table_heading_amount']  = 'Valor';
$lang['invoice_dt_table_heading_status']  = 'Estado';

$lang['record_payment_for_invoice']              = 'Registrar Pago';
$lang['record_payment_amount_received']          = 'Valor Recibido';
$lang['record_payment_date']                     = 'Fecha de Pago';
$lang['record_payment_leave_note']               = 'Dejar una Nota';
$lang['invoice_payments_received']               = 'Pagos Recibidos';
$lang['invoice_record_payment_note_placeholder'] = 'Nota del Comercial';
$lang['no_payments_found']                       = 'No se han encontrado Pagos para esta factura';
$lang['invoice_email_link_text']                 = 'Ver Factura';

# Payments
$lang['payments']                             = 'Pagos';
$lang['payment']                              = 'Pago';
$lang['payment_lowercase']                    = 'pago';
$lang['payments_table_number_heading']        = 'Pago Nº:';
$lang['payments_table_invoicenumber_heading'] = 'Factura Nº:';
$lang['payments_table_mode_heading']          = 'Modo de Pago';
$lang['payments_table_date_heading']          = 'Fecha';
$lang['payments_table_amount_heading']        = 'Valor';
$lang['payments_table_client_heading']        = 'Cliente';
$lang['payment_not_exists']                   = 'El pago no existe';

$lang['payment_edit_for_invoice']     = 'El pago de la factura';
$lang['payment_edit_amount_received'] = 'Valor Recibido';
$lang['payment_edit_date']            = 'Fecha de Pago';
$lang['payment_edit_lave_note']       = 'Deja Nota';


# Knowledge Base
$lang['kb_article_add_edit_subject'] = 'Tema';
$lang['kb_article_add_edit_group']   = 'Grupo';
$lang['kb_string']                   = 'Base de conocimiento';
$lang['kb_article']                  = 'Artículo';
$lang['kb_article_lowercase']        = 'artículo';
$lang['kb_article_new_article']      = 'Artículo nuevo';
$lang['kb_article_disabled']         = 'Deshabilitado';
$lang['kb_article_description']      = 'Descripción del artículo';

$lang['kb_table']                      = 'Lista';
$lang['kb_no_articles_found']          = 'No hay artículos encontrados en la Base de conocimientos';
$lang['kb_dt_article_name']            = 'Nombre del artículo';
$lang['kb_dt_group_name']              = 'Grupo';
$lang['new_group']                     = 'Nuevo grupo';
$lang['kb_group_add_edit_name']        = 'Nombre del grupo';
$lang['kb_group_add_edit_description'] = 'breve descripción';
$lang['kb_group_add_edit_disabled']    = 'Deshabilitado';
$lang['kb_group_add_edit_note']        = 'Nota: Todos los artículos en este grupo se ocultarán si no se marca como desabilitado';
$lang['group_table_name_heading']      = 'Nombre';
$lang['group_table_isactive_heading']  = 'Activo';
$lang['kb_no_groups_found']            = 'No hay Grupos de base de conocimientos encontrados';

# Mail Lists
$lang['mail_lists']                           = 'Las listas de correo';
$lang['mail_list']                            = 'Lista de correo';
$lang['new_mail_list']                        = 'Lista de correo nuevo';
$lang['mail_list_lowercase']                  = 'lista de correo';
$lang['custom_field_deleted_success']         = 'campo personalizado eliminado';
$lang['custom_field_deleted_fail']            = 'Problema al eliminar campo personalizado';
$lang['email_removed_from_list']              = 'email eliminado de la lista';
$lang['email_remove_fail']                    = 'email eliminado de la lista';
$lang['staff_mail_lists']                     = 'Listas de Correo del Personal';
$lang['clients_mail_lists']                   = 'Listas de Correo de Los clientes';
$lang['mail_list_total_imported']             = 'correos electrónicos importados totales: %s';
$lang['mail_list_total_duplicate']            = 'Total de mensajes de email duplicados: %s';
$lang['mail_list_total_failed_to_insert']     = 'Los correos electrónicos no pudo insertar: %s';
$lang['mail_list_total_invalid']              = 'dirección de correo no válida: %s';
$lang['cant_edit_mail_list']                  = 'Usted no puede editar esta lista, esta lista se rellena automáticamente';
$lang['mail_list_add_edit_name']              = 'Nombre de lista de correo';
$lang['mail_list_add_edit_customfield']       = 'Añadir campo personalizado';
$lang['mail_lists_viewing_emails']            = 'Visualización de la lista de mensajes de email';
$lang['mail_lists_view_email_email_heading']  = 'Email';
$lang['mail_lists_view_email_date_heading']   = 'Fecha Agregada';
$lang['add_new_email_to']                     = 'Agregar nuevo email a %s';
$lang['import_emails_to']                     = 'Importación de Los correos electrónicos %s';
$lang['mail_list_new_email_edit_add_label']   = 'Email';
$lang['mail_list_import_file']                = 'Importar archivo';
$lang['mail_list_available_custom_fields']    = 'Campos personalizados disponibles';
$lang['submit_import_emails']                 = 'Los correos electrónicos de importación';
$lang['btn_import_emails']                    = 'Los correos electrónicos de importación (Excel)';
$lang['btn_add_email_to_list']                = 'Añadir a esta lista de email';
$lang['mail_lists_dt_list_name']              = 'Lista de Nombres';
$lang['mail_lists_dt_datecreated']            = 'Fecha de la Creación';
$lang['mail_lists_dt_creator']                = 'Crear';
$lang['email_added_to_mail_list_successfully'] = 'Email añadió a la lista';
$lang['email_is_duplicate_mail_list']         = 'email ya existe en esta lista';

# Media
$lang['media_files']            = 'Archivos';

# Payment modes
$lang['new_payment_mode']       = 'Nueva Forma de Pago';
$lang['payment_modes']          = 'Forma de Pago';
$lang['payment_mode']           = 'Forma de Pago';
$lang['payment_mode_lowercase'] = 'forma de pago';
$lang['payment_modes_dt_name']  = 'Nombre de la forma de pago';

$lang['payment_mode_add_edit_name'] = 'Nombre de la Forma de Pago';
$lang['payment_mode_edit_heading']  = 'Editar Forma de Pago';
$lang['payment_mode_add_heading']   = 'Agregar Nueva Forma de Pago';

# Predefined Ticket Replies
$lang['new_predefined_reply']              = 'Nueva respuesta predefinida';
$lang['predefined_replies']                = 'Respuesta predefinida';
$lang['predefined_reply']                  = 'Responder predefinido';
$lang['predefined_reply_lowercase']        = 'Respuesta predefinido';
$lang['predefined_replies_dt_name']        = 'Respuesta predefinida Nombre';
$lang['predefined_reply_add_edit_name']    = 'Respuesta predefinida Nombre';
$lang['predefined_reply_add_edit_content'] = 'Responder contenido';

# Ticket Priorities
$lang['new_ticket_priority']           = 'Nueva Prioridad';
$lang['ticket_priorities']             = 'Prioridades de tickets';
$lang['ticket_priority']               = 'Prioridad de tickets';
$lang['ticket_priority_lowercase']     = 'Prioridad de tickets';
$lang['no_ticket_priorities_found']    = 'No se han encontrado Prioridades de tickets';
$lang['ticket_priority_dt_name']       = 'Prioridad Nombre de tickets';
$lang['ticket_priority_add_edit_name'] = 'Nombre del tipo de prioridad';

# Reports
$lang['kb_reports']                         = 'Informes de artículos de';
$lang['sales_reports']                      = 'Informes de Ventas';
$lang['reports_choose_kb_group']            = 'Elegir Grupo';
$lang['reports_sales_select_report_type']   = 'Seleccione el tipo de informe';
$lang['report_kb_yes']                      = 'Sí';
$lang['report_kb_no']                       = 'No';
$lang['report_kb_no_votes']                 = 'Sin votos';
$lang['report_this_week_leads_conversions'] = 'Esta semana Leads Convertidos';
$lang['report_leads_sources_conversions']   = 'Fuentes';
$lang['report_leads_monthly_conversions']   = 'Mensual';
$lang['sales_report_heading']               = 'Informe de Ventas';
$lang['report_sales_type_income']           = 'Ingresos Totales';

$lang['report_sales_type_customer']                    = 'Informe de Ventas por Tipo de Cliente';
$lang['report_sales_base_currency_select_explanation'] = 'Es necesario seleccionar la moneda por que usted tiene facturas con moneda diferente';
$lang['report_sales_from_date']                        = 'Desde la Fecha';
$lang['report_sales_to_date']                          = 'Hasta la Fecha';


$lang['report_sales_months_all_time']      = 'Desde';
$lang['report_sales_months_six_months']    = 'Últimos 6 meses';
$lang['report_sales_months_twelve_months'] = 'Últimos 12 meses';
$lang['report_sales_months_custom']        = 'Personalizado';
$lang['reports_sales_generated_report']    = 'Informe generado';



$lang['reports_sales_dt_customers_client']                = 'Cliente';
$lang['reports_sales_dt_customers_total_invoices']        = 'Las facturas totales';
$lang['reports_sales_dt_items_customers_amount']          = 'Valor';
$lang['reports_sales_dt_items_customers_amount_with_tax'] = 'Valor con Impuestos';

# Roles
$lang['new_role']           = 'Nuevo Cargo';
$lang['all_roles']          = 'Todos los Cargos';
$lang['roles']              = 'Cargos';
$lang['role']               = 'Cargo';
$lang['role_lowercase']     = 'cargo';
$lang['roles_total_users']  = 'Total de Usuarios:';
$lang['roles_dt_name']      = 'Nombre del Cargo';
$lang['role_add_edit_name'] = 'Nombre del Cargo';

# Service
$lang['new_service']           = 'Nuevo Servicio';
$lang['services']              = 'Servicios';
$lang['service']               = 'Servicio';
$lang['service_lowercase']     = 'servicio';
$lang['services_dt_name']      = 'Nombre del Servicio';
$lang['service_add_edit_name'] = 'Nombre del Servicio';

# Settings
$lang['settings']                     = 'Ajustes';
$lang['settings_updated']             = 'Configuración de Actualizada';
$lang['settings_save']                = 'Guardar Ajustes';
$lang['settings_group_general']       = 'General';
$lang['settings_group_localization']  = 'Localización';
$lang['settings_group_tickets']       = 'Tickets';
$lang['settings_group_sales']         = 'Financiero';
$lang['settings_group_email']         = 'Email';
$lang['settings_group_clients']       = 'Clientes';
$lang['settings_group_newsfeed']      = 'Noticias';
$lang['settings_group_cronjob']       = 'Cron job';

$lang['settings_yes']                                        = 'Sí';
$lang['settings_no']                                         = 'No';
$lang['settings_clients_default_theme']                      = 'Tema predeterminado clientes';
$lang['settings_clients_allow_registration']                 = 'Permitir que los clientes se registren';
$lang['settings_clients_allow_kb_view_without_registration'] = 'Permitir que la base de conocimientos sea visto sin conexión';

$lang['settings_cron_send_overdue_reminder']                 = 'Enviará recordatorio para la factura vencida';
$lang['settings_cron_send_overdue_reminder_tooltip']         = 'Enviar email al cliente cuando atrasados ??estado de la factura actualiza al atraso de trabajo Cron';
$lang['automatically_send_invoice_overdue_reminder_after']   = 'Enviar automáticamente después de recordatorio (días)';
$lang['automatically_resend_invoice_overdue_reminder_after'] = 'Automáticamente volver a enviar recordatorio después de (días)';

$lang['settings_email_host']      = 'Host SMTP';
$lang['settings_email_port']      = 'Puerto SMTP';
$lang['settings_email']           = 'email SMTP';
$lang['settings_email_password']  = 'Contraseña SMTP';
$lang['settings_email_charset']   = 'Juego de caracteres de email';
$lang['settings_email_signature'] = 'Firma de email';

$lang['settings_general_company_logo']                = 'Logo de la compañía';
$lang['settings_general_company_logo_tooltip']        = 'Dimensiones recomendadas: 150 x 34px';
$lang['settings_general_company_remove_logo_tooltip'] = 'Retire logotipo de la empresa';
$lang['settings_general_company_name']                = 'Nombre de la empresa';
$lang['settings_general_company_main_domain']         = 'Dominio principal de la Compañía';
$lang['settings_general_use_knowledgebase']           = 'Usar la base de conocimiento';
$lang['settings_general_use_knowledgebase_tooltip']   = 'Si permite esta Opciones la base de conocimientos se le aparecen también en el lado de los clientes';
$lang['settings_general_tables_limit']                = 'Mesas de límites de paginación';
$lang['settings_general_default_staff_role']          = 'El role por defecto del personal';
$lang['settings_general_default_staff_role_tooltip']  = 'Al añadir un nuevo miembro del personal de este papel se seleccionará de forma predeterminada';

$lang['settings_localization_date_format']      = 'Formato de fecha';
$lang['settings_localization_default_timezone'] = 'La zona horaria predeterminada';
$lang['settings_localization_default_language'] = 'Idioma predeterminado';

$lang['settings_newsfeed_max_file_upload_post']    = 'Archivos máximo de carga en el post';
$lang['settings_newsfeed_max_file_size']           = 'El tamaño máximo de los archivos (MB)';

$lang['settings_reminders_contracts']         = 'Contrato de caducidad recordatorio';
$lang['settings_reminders_contracts_tooltip'] = 'Notificación de aviso de caducidad en días';

$lang['settings_tickets_use_services']             = 'Usar el sistema de tickets';
$lang['settings_tickets_max_attachments']          = 'Ajuste tamaño máximo ficheros adjuntos para los billetes';
$lang['settings_tickets_allow_departments_access'] = 'Que el personal solo pueda acceder a los tickets de su departamento';
$lang['settings_tickets_allowed_file_extensions']  = 'Se admiten las extensiones de archivos adjuntos';

$lang['settings_sales_general']                                    = 'General';
$lang['settings_sales_general_note']                               = 'Configuración general';
$lang['settings_sales_invoice_prefix']                             = 'Número de factura Prefijo';
$lang['settings_sales_decimal_separator']                          = 'Separador Decimal';
$lang['settings_sales_thousand_separator']                         = 'Separador de Miles';
$lang['settings_sales_currency_placement']                         = 'Colocación moneda';
$lang['settings_sales_currency_placement_before']                  = 'Antes del Valor';
$lang['settings_sales_currency_placement_after']                   = 'Después del Valor';
$lang['settings_sales_require_client_logged_in_to_view_invoice']   = 'Requerir cliente que se haya identificado para ver la factura';
$lang['settings_sales_next_invoice_number']                        = 'Siguiente número de factura';
$lang['settings_sales_next_invoice_number_tooltip']                = 'Establecer este campo a 1 si desea empezar de inicio';
$lang['settings_sales_decrement_invoice_number_on_delete']         = 'Disminuir el número de factura en Eliminar';
$lang['settings_sales_decrement_invoice_number_on_delete_tooltip'] = '¿Quieres disminuir el número de factura cuando se elimina la última factura? Ex. Si se establece esta opción en Sí y antes de la factura borrar el siguiente número de la factura es 15 el siguiente número de la factura disminuirá a 14 para la próxima factura si se establece en NO el número permanecerá hasta el 15';
$lang['settings_sales_invoice_number_format']                      = 'Formato de número de factura';
$lang['settings_sales_invoice_number_format_year_based']           = 'Basada en el año';
$lang['settings_sales_invoice_number_format_number_based']         = 'Basado número (000001)';

$lang['settings_sales_company_info_note']    = 'Todos estos datos se mostrarán en las facturas / presupuestos / pagos y otros documentos PDF donde se requiere información de la empresa';
$lang['settings_sales_company_name']         = 'Nombre de la Empresa';
$lang['settings_sales_address']              = 'Dirección';
$lang['settings_sales_city']                 = 'Localidad';
$lang['settings_sales_country_code']         = 'País';
$lang['settings_sales_postal_code']          = 'Código Postal';
$lang['settings_sales_phonenumber']          = 'Teléfono';

# Leads
$lang['new_lead']       = 'Nuevo Contacto';
$lang['leads']          = 'Contactos';
$lang['lead']           = 'Contacto';
$lang['lead_lowercase'] = 'contacto';
$lang['leads_all']      = 'Todos';

$lang['leads_canban_notes']  = 'Notas: %s';
$lang['leads_canban_source'] = 'Fuente: %s';

$lang['lead_new_source']            = 'Nueva Fuente';
$lang['lead_sources']               = 'Fuentes de Contacto';
$lang['lead_source']                = 'Fuente Principal';
$lang['lead_source_lowercase']      = 'fuente principal';
$lang['leads_sources_not_found']    = 'No se encontraron fuentes de derivaciones';
$lang['leads_sources_table_name']   = 'Nombre de la fuente';
$lang['leads_source_add_edit_name'] = 'Nombre de la fuente';

$lang['lead_new_status']         = 'Nuevo Estado del Contacto';
$lang['lead_statuss']            = 'Estado del Contacto';
$lang['lead_status']             = 'Estado del Contacto';
$lang['lead_status_lowercase']   = 'estado de contacto';
$lang['leads_status_table_name'] = 'Nombre Estado';

$lang['leads_status_add_edit_name']  = 'Nombre Estado';
$lang['leads_status_add_edit_order'] = 'Orden';

$lang['lead_statuses_not_found']      = 'No se encontraron las derivaciones estados';
$lang['leads_search']                 = 'Buscar Contactos';

$lang['leads_table_total'] = 'Ventas totales: %s';

$lang['leads_dt_name']         = 'Nombre';
$lang['leads_dt_email']        = 'Email';
$lang['leads_dt_phonenumber']  = 'Teléfono';
$lang['leads_dt_assigned']     = 'Asignado';
$lang['leads_dt_status']       = 'Estado';
$lang['leads_dt_last_contact'] = 'Último Contacto';

$lang['lead_add_edit_name']                 = 'Nombre';
$lang['lead_add_edit_email']                = 'Dirección de correo';
$lang['lead_add_edit_phonenumber']          = 'Teléfono';
$lang['lead_add_edit_source']               = 'Fuente';
$lang['lead_add_edit_status']               = 'Estado del Contacto';
$lang['lead_add_edit_assigned']             = 'Asignado';
$lang['lead_add_edit_datecontacted']        = 'Fecha contactado';
$lang['lead_add_edit_contacted_today']      = 'contactado Hoy';
$lang['lead_add_edit_activity']             = 'Registro de actividades';
$lang['lead_add_edit_notes']                = 'Notas';
$lang['lead_add_edit_add_note']             = 'Añadir la nota';
$lang['lead_not_contacted']                 = 'No me he puesto en contacto este Contacto';
$lang['lead_add_edit_contacted_this_lead']  = 'Me puse en contacto con este Contacto';
$lang['lead_confirmation_canban_contacted'] = '¿Usted se ha puesto en contacto con este Contacto?';

# Misc
$lang['access_denied']              = 'Que da acceso denegado';
$lang['prev']                       = 'Anterior';
$lang['next']                       = 'Siguiente';

# Datatables
$lang['dt_paginate_first']          = 'Primero';
$lang['dt_paginate_last']           = 'Último';
$lang['dt_paginate_next']           = 'Siguiente';
$lang['dt_paginate_previous']       = 'Anterior';
$lang['dt_empty_table']             = 'No {0} encontrado';
$lang['dt_search']                  = 'Buscar:';
$lang['dt_zero_records']            = 'No se encontraron coincidencias';
$lang['dt_loading_records']         = 'Cargando...';
$lang['dt_length_menu']             = 'Clientes por Página _MENU_';
$lang['dt_info_filtered']           = '(Filtrado de _MAX_ total de {0})';
$lang['dt_info_empty']              = 'Mostrando 0 al 0 de 0 {0}';
$lang['dt_info']                    = 'Mostrando desde _START_ hasta _END_ de _TOTAL_ {0}';
$lang['dt_empty_table']             = 'No {0} encontrado';
$lang['dt_sort_ascending']          = 'Activar para ordenar la columna ascendente';
$lang['dt_sort_descending']         = 'Activar para ordenar la columna descendente';
# Invoice Activity Log
$lang['user_sent_overdue_reminder'] = '%s factura enviada recordatorio de retraso';

# Weekdays
$lang['wd_monday']    = 'Lunes';
$lang['wd_tuesday']   = 'Martes';
$lang['wd_wednesday'] = 'Miércoles';
$lang['wd_thursday']  = 'Jueves';
$lang['wd_friday']    = 'Viernes';
$lang['wd_saturday']  = 'Sábado';
$lang['wd_sunday']    = 'Domingo';

# Admin Left Sidebar
$lang['als_dashboard'] = 'Tablero';
$lang['als_clients']   = 'Clientes';
$lang['als_leads']     = 'Contactos';

$lang['als_contracts'] = 'Contratos';

$lang['als_all_tickets'] = 'Todas los billetes';
$lang['als_sales']       = 'Ventas';

$lang['als_staff'] = 'Personal';
$lang['als_tasks'] = 'Tareas';
$lang['als_kb']    = 'Base de Conocimiento';

$lang['als_surveys']               = 'Encuestas';
$lang['als_media']                 = 'Medios de comunicación';
$lang['als_reports']               = 'Informes';
$lang['als_reports_sales_submenu'] = 'Ventas';
$lang['als_reports_leads_submenu'] = 'Contactos';
$lang['als_kb_articles_submenu']   = 'Artículos de KB';
$lang['als_utilities']             = 'Utilidades';
$lang['als_announcements_submenu'] = 'Anuncios';
$lang['als_mail_lists_submenu']    = 'Las listas de correo';
$lang['als_calendar_submenu']      = 'Calendario';
$lang['als_activity_log_submenu']  = 'Registro de actividades';

# Admin Customizer Sidebar
$lang['acs_tickets']                           = 'Tickets';
$lang['acs_ticket_priority_submenu']           = 'prioridad de billetes';
$lang['acs_ticket_statuses_submenu']           = 'Los estados de billetes';
$lang['acs_ticket_predefined_replies_submenu'] = 'Respuestas Predefinidas';
$lang['acs_ticket_services_submenu']           = 'Servicios';
$lang['acs_departments']                       = 'Departamentos';
$lang['acs_leads']                             = 'Contactos';
$lang['acs_leads_sources_submenu']             = 'Fuentes';
$lang['acs_leads_statuses_submenu']            = 'Estados';
$lang['acs_sales_taxes_submenu']               = 'Impuestos';
$lang['acs_sales_currencies_submenu']          = 'Monedas';
$lang['acs_sales_payment_modes_submenu']       = 'Modos de pago';
$lang['acs_email_templates']                   = 'Plantillas de email';
$lang['acs_roles']                             = 'Roles';
$lang['acs_settings']                          = 'Ajustes';

# Tickets
$lang['new_ticket']                                         = 'Abrir un nuevo Ticket';
$lang['tickets']                                            = 'Tickets';
$lang['ticket']                                             = 'ticket';
$lang['ticket_lowercase']                                   = 'ticket';
$lang['support_tickets']                                    = 'Tickets de Soporte';
$lang['support_ticket']                                     = 'Ticket de soporte';
$lang['ticket_settings_to']                                 = 'Para';
$lang['ticket_settings_email']                              = 'Dirección de correo';
$lang['ticket_settings_departments']                        = 'Departamento';
$lang['ticket_settings_service']                            = 'Servicio';
$lang['ticket_settings_priority']                           = 'Prioridad';
$lang['ticket_settings_subject']                            = 'Tema';
$lang['ticket_settings_assign_to']                          = 'Asignar tickets (por defecto es el usuario actual)';
$lang['ticket_settings_assign_to_you']                      = 'Tú';
$lang['ticket_settings_select_client']                      = 'Seleccione Cliente';
$lang['ticket_add_body']                                    = 'Cuerpo de tickets';
$lang['ticket_add_attachments']                             = 'Archivos Adjuntos';
$lang['ticket_no_reply_yet']                                = 'Sin respuesta, todavía';
$lang['new_ticket_added_successfully']                        = 'Ticket # %s añadido con éxito';
$lang['replied_to_ticket_successfully']                       = 'Respondido al ticket # %s con éxito';
$lang['ticket_settings_updated_successfully']                = 'Ajustes del ticket actualizados con éxito';
$lang['ticket_settings_updated_successfully_and_reassigned'] = 'Ajustes del ticket actualizados – reasignado al departamento de %s';
$lang['ticket_dt_subject']                                  = 'Tema';
$lang['ticket_dt_department']                               = 'Departamento';
$lang['ticket_dt_service']                                  = 'Servicio';
$lang['ticket_dt_submitter']                                = 'Cliente';
$lang['ticket_dt_status']                                   = 'Estado';
$lang['ticket_dt_priority']                                 = 'Prioridad';
$lang['ticket_dt_last_reply']                               = 'Última Respuesta';

$lang['ticket_single_add_reply']                  = 'Añadir Respuesta';
$lang['ticket_single_add_note']                   = 'Añadir la nota';
$lang['ticket_single_other_user_tickets']         = 'Otros tickets';
$lang['ticket_single_settings']                   = 'Ajustes';
$lang['ticket_single_priority']                   = 'Prioridad: %s';
$lang['ticket_single_last_reply']                 = 'Última respuesta: %s';
$lang['ticket_single_change_status_top']          = 'Cambiar Estado';
$lang['ticket_single_ticket_note_by']             = 'Venta de tickets nota de %s';
$lang['ticket_single_note_added']                 = 'Nota añadida: %s';
$lang['ticket_single_change_status']              = 'Cambiar Estado';
$lang['ticket_single_assign_to_me_on_update']     = 'Asignarme este ticket a mi directamente si algo pasa';
$lang['ticket_single_insert_predefined_reply']    = 'Insertar respuesta predefinida';
$lang['ticket_single_insert_knowledge_base_link'] = 'Inserte el enlace a la base de conocimiento';
$lang['ticket_single_attachments']                = 'Archivos Adjuntos';
$lang['ticket_single_add_response']               = 'Añadir Respuesta';
$lang['ticket_single_note_heading']               = 'Nota';
$lang['ticket_single_add_note']                   = 'Añadir Nota';
$lang['ticket_settings_none_assigned']            = 'Ningúna';
$lang['ticket_status_changed_successfully']        = 'Estado del Ticket Cambiado';
$lang['ticket_status_changed_fail']               = 'Problema en el cambio de estado de tickets';

$lang['ticket_staff_string']                    = 'Personal';
$lang['ticket_client_string']                   = 'Cliente';
$lang['ticket_posted']                          = 'Publicado: %s';
$lang['ticket_insert_predefined_reply_heading'] = 'Insertar respuesta predefinida';
$lang['ticket_kb_link_heading']                 = 'Inserte el enlace a la base de conocimiento';
$lang['ticket_access_by_department_denied']     = 'Usted no tiene acceso a este billete. Este billete es de departamento que no le esta asignado.';

# Staff
$lang['new_staff']                       = 'Nuevo Miembro del Personal';
$lang['staff_members']                   = 'Los miembros del personal';
$lang['staff_member']                    = 'Miembro del equipo';
$lang['staff_member_lowercase']          = 'miembro del equipo';
$lang['staff_profile_updated']           = 'Tu perfil ha sido actualizado';
$lang['staff_old_password_incorrect']     = 'Su antigua contraseña es incorrecta';
$lang['staff_password_changed']          = 'Su contraseña ha sido cambiada';
$lang['staff_problem_changing_password'] = 'Problema cambiar su contraseña';
$lang['staff_profile_string']            = 'Perfil';

$lang['staff_cant_remove_main_admin']          = 'No puede quitarse de administrador principal';
$lang['staff_cant_remove_yourself_from_admin'] = 'Usted no puede darse la función de administrador';

$lang['staff_dt_name']       = 'Nombre Completo';
$lang['staff_dt_email']      = 'Email';
$lang['staff_dt_last_Login'] = 'Último Acceso';
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
$lang['staff_add_edit_password_note']         = 'Nota: Si rellena estos campos, la contraseña será cambiada en este miembro.';
$lang['staff_add_edit_password_last_changed'] = 'Contraseña cambió por última vez';
$lang['staff_add_edit_notes']                 = 'Notas';
$lang['staff_add_edit_note_description']      = 'Descripción';

$lang['staff_notes_table_description_heading'] = 'Nota';
$lang['staff_notes_table_addedfrom_heading']   = 'Desde añadido';
$lang['staff_notes_table_dateadded_heading']   = 'Fecha Agregada';

$lang['staff_admin_profile']         = 'Este es el perfil de administración';
$lang['staff_profile_notifications'] = 'Notificaciones';
$lang['staff_profile_departments']   = 'Departamentos';

$lang['staff_edit_profile_image']                     = 'Imagen de perfil';
$lang['staff_edit_profile_your_departments']          = 'Sus Departamentos';
$lang['staff_edit_profile_change_your_password']      = 'Cambia tu Contraseña';
$lang['staff_edit_profile_change_old_password']       = 'Contraseña Anterior';
$lang['staff_edit_profile_change_new_password']       = 'Nueva contraseña';
$lang['staff_edit_profile_change_repet_new_password'] = 'Repita la nueva contraseña';

# Surveys
$lang['new_survey']                    = 'Nueva Encuesta';
$lang['surveys']                       = 'Encuestas';
$lang['survey']                        = 'Encuesta';
$lang['survey_lowercase']              = 'encuesta';
$lang['survey_no_mail_lists_selected'] = 'No hay listas de correo seleccionados';
$lang['survey_send_success_note']      = 'Todos los correos electrónicos de la encuesta ( %s) seran enviados vía la Cron Job con intervalos de 5 minutos';
$lang['survey_result']                 = 'Resultado Encuesta: %s';
$lang['question_string']               = 'Pregunta';
$lang['question_field_string']         = 'Campo';

$lang['survey_list_view_tooltip']         = 'Ver Resultados';
$lang['survey_list_view_results_tooltip'] = 'Ver Resultados';

$lang['survey_add_edit_subject']                   = 'Sujetos de la encuesta';
$lang['survey_add_edit_email_description']         = 'Descripción encuesta (E-mail Descripción)';
$lang['survey_include_survey_link']                = 'Incluir enlace de la encuesta en la descripción';
$lang['survey_available_mail_lists_custom_fields'] = 'campos personalizados disponibles a partir de listas de email';
$lang['survey_mail_lists_custom_fields_tooltip']   = 'Los campos personalizados se pueden utilizar para el editar el email. CONSEJO: Haga clic en el editor de email y, a continuación, seleccione en el menú desplegable para ser añadido de forma automática.';
$lang['survey_add_edit_short_description_view']    = 'Encuesta breve descripción (Ver descripción)';
$lang['survey_add_edit_from']                      = 'A partir de (desplegable en el email)';
$lang['survey_add_edit_redirect_url']              = 'URL de redireccionamiento encuesta';
$lang['survey_add_edit_red_url_note']              = 'Cuando la encuesta ha acabado donde redirigir al usuario? (dejar en blanco para este sitio url)';
$lang['survey_add_edit_disabled']                  = 'Deshabilitado';
$lang['survey_add_edit_only_for_logged_in']        = 'Sólo iniciar sesión para los participantes (personal, clientes)';
$lang['send_survey_string']                        = 'Enviar Encuesta';
$lang['survey_send_mail_list_clients']             = 'Clientes';
$lang['survey_send_mail_list_staff']               = 'Personal';
$lang['survey_send_mail_lists_string']             = 'Las listas de correo';
$lang['survey_send_mail_lists_note_logged_in']     = 'Nota: Si va a enviar la encuesta a las listas de correo sólo para los que inicien sesión los participantes tienen que estar sin marcar';
$lang['survey_send_string']                        = 'Enviar';

$lang['survey_send_to_total']  = 'Enviar a un total de %s mensajes de email';
$lang['survey_send_till_now']  = 'Hasta Ahora';
$lang['survey_send_finished']  = 'Enviar encuesta terminó: %s';
$lang['survey_added_to_queue'] = 'Se añade esta encuesta a la cola de Cron Job en %s';

$lang['survey_questions_string']          = 'Preguntas de la encuesta';
$lang['survey_insert_field']              = 'Insertar Campo';
$lang['survey_field_checkbox']            = 'Caja';
$lang['survey_field_radio']               = 'Radio';
$lang['survey_field_input']               = 'Campo de Cntrada';
$lang['survey_field_textarea']            = 'Área de Texto';
$lang['survey_question_required']         = 'Necesario';
$lang['survey_question_only_for_preview'] = 'Sólo para la vista previa';
$lang['survey_create_first']              = 'Es necesario crear la primera encuesta, entonces usted será capaz de insertar las preguntas.';


$lang['survey_dt_name']               = 'Nombre';
$lang['survey_dt_total_questions']    = 'Total de Preguntas';
$lang['survey_dt_total_participants'] = 'Total de Participantes';
$lang['survey_dt_date_created']       = 'Fecha de Creación';
$lang['survey_dt_active']             = 'Activo';

$lang['survey_text_questions_results'] = 'Resultado de las preguntas de la encuesta';
$lang['survey_view_all_answers']       = 'Ver todas las respuestas';

# Staff Tasks
$lang['new_task']       = 'Nueva Tarea';
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
$lang['task_list_not_assigned']   = 'Por Asignado';
$lang['task_list_duedate_passed'] = 'Debido fecha pasada';
$lang['tasks_dt_name']            = 'Nombre';

$lang['task_single_priority']               = 'Prioridad';
$lang['task_single_start_date']             = 'Fecha de Inicio';
$lang['task_single_due_date']               = 'Fecha de Vencimiento';
$lang['task_single_finished']               = 'Terminado';
$lang['task_single_mark_as_complete']       = 'Marcar como Completa';
$lang['task_single_edit']                   = 'Editar';
$lang['task_single_delete']                 = 'Borrar';
$lang['task_single_assignees']              = 'Comercial';
$lang['task_single_assignees_select_title'] = 'Asignar tareas para';
$lang['task_single_followers']              = 'Seguidores';
$lang['task_single_followers_select_title'] = 'Añadir Seguidores';
$lang['task_single_insert_media_link']      = 'Insertar Media Link';
$lang['task_single_add_new_comment']        = 'Agregar comentario';

$lang['task_add_edit_subject']     = 'Tema';
$lang['task_add_edit_priority']    = 'Prioridad';
$lang['task_priority_low']         = 'Bajo';
$lang['task_priority_medium']      = 'Medio';
$lang['task_priority_high']        = 'Alto';
$lang['task_priority_urgent']      = 'Urgente';
$lang['task_add_edit_start_date']  = 'Fecha de Inicio';
$lang['task_add_edit_due_date']    = 'Fecha de Vencimiento';
$lang['task_add_edit_description'] = 'Descripción de la tarea';

# Taxes
$lang['new_tax']       = 'Nuevo Impuesto';
$lang['taxes']         = 'Impuestos';
$lang['tax']           = 'Impuesto';
$lang['tax_lowercase'] = 'impuesto';
$lang['tax_dt_name']   = 'Nombre de Impuestos';
$lang['tax_dt_rate']   = 'Tasa (porcentaje)';

$lang['tax_add_edit_name'] = 'Nombre de Impuestos';
$lang['tax_add_edit_rate'] = 'Tasa de impuestos (por ciento)';
$lang['tax_edit_title']    = 'Editar Impuesto';
$lang['tax_add_title']     = 'Añadir nuevo impuesto';

# Ticket Statuses
$lang['new_ticket_status']       = 'Nuevo estado de tickets';
$lang['ticket_statuses']         = 'Estados de los tickets';
$lang['ticket_status']           = 'Estado del ticket';
$lang['ticket_status_lowercase'] = 'estado del ticket';

$lang['ticket_statuses_dt_name']      = 'Nombre Estado del Ticket';
$lang['no_ticket_statuses_found']     = 'No se encontraron estados de los tickets';
$lang['ticket_statuses_table_total']  = 'Total %s';
$lang['ticket_status_add_edit_name']  = 'Nombre Estado del Ticket';
$lang['ticket_status_add_edit_color'] = 'Seleccionar color';
$lang['ticket_status_add_edit_order'] = 'Estado de la orden';

# Todos
$lang['new_todo']                  = 'Nueva Tarea';
$lang['my_todos']                  = 'Los artículos de Mis Tareas pendientes';
$lang['todo']                      = 'Tareas artículos';
$lang['todo_lowercase']            = 'Tareas';
$lang['todo_status_changed']       = 'Tarea ha cambiado de estado';
$lang['todo_add_title']            = 'Agregar nueva tarea';
$lang['add_new_todo_description']  = 'Descripción';
$lang['no_finished_todos_found']   = 'No se encontraron Tareas completadas';
$lang['no_unfinished_todos_found'] = 'No se encontraron tareas';
$lang['unfinished_todos_title']    = 'Tareas sin terminar';
$lang['finished_todos_title']      = 'Tareas Completadas Recientemente';

# Authentication
$lang['password_changed_email_subject']             = 'Su contraseña ha sido cambiada';
$lang['password_reset_email_subject']               = 'Restablecer la contraseña de %s';
# Utilities
$lang['utility_activity_log']                       = 'Registro de actividades';
$lang['utility_activity_log_filter_by_date']        = 'Filtrar por fecha';
$lang['utility_activity_log_dt_description']        = 'Descripción';
$lang['utility_activity_log_dt_date']               = 'Fecha';
$lang['utility_activity_log_dt_staff']              = 'Personal';
$lang['utility_calendar_new_event_title']           = 'Agregar un nuevo evento';
$lang['utility_calendar_new_event_start_date']      = 'Fecha de Inicio';
$lang['utility_calendar_new_event_end_date']        = 'Fecha Final';
$lang['utility_calendar_new_event_make_public']     = 'Hacer Público';
$lang['utility_calendar_event_added_successfully']   = 'Nuevo evento añadido con éxito';
$lang['utility_calendar_event_deleted_successfully'] = 'Evento eliminado';
$lang['utility_calendar_new_event_placeholder']     = 'Título del evento';


# Navigation
$lang['nav_notifications']          = 'Notificaciones';
$lang['nav_my_profile']             = 'Mi perfil';
$lang['nav_edit_profile']           = 'Editar perfil';
$lang['nav_logout']                 = 'Cerrar sesión';
$lang['nav_no_notifications']       = 'No se encontraron notificaciones';
$lang['nav_view_all_notifications'] = 'Ver todas las notificaciones';
$lang['nav_customizer_tooltip']     = 'Personalización de la configuración';
$lang['nav_notifications_tooltip']  = 'Ver notificaciones';

## Clients
$lang['clients_required_field'] = 'Campo Obligatorio';

# Footer
$lang['clients_copyright'] = 'Derechos de autor de %s';

# Announcements
$lang['clients_announcement_from']  = 'De:';
$lang['clients_announcement_added'] = 'Adicional:';

# Contracts
$lang['clients_contracts']               = 'Contratos';
$lang['clients_contracts_dt_subject']    = 'Tema';
$lang['clients_contracts_dt_start_date'] = 'Fecha de Inicio';
$lang['clients_contracts_dt_end_date']   = 'Fecha Final';

# Home
$lang['clients_quick_invoice_info']                = 'Rápida Información de Las facturas';
$lang['clients_home_currency_select_tooltip']      = 'Es necesario seleccionar la moneda por que usted tiene facturas con moneda diferente';
# Invoices
$lang['clients_invoice_html_btn_download'] = 'Descargar';

$lang['clients_my_invoices']        = 'Mis Facturas';
$lang['clients_invoice_dt_number']  = 'Nº Factura';
$lang['clients_invoice_dt_date']    = 'Fecha';
$lang['clients_invoice_dt_duedate'] = 'Fecha de Vencimiento';
$lang['clients_invoice_dt_amount']  = 'Valor';
$lang['clients_invoice_dt_status']  = 'Estado';

# Profile
$lang['clients_profile_heading'] = 'Perfil';

# Used for edit profile and register START
$lang['clients_firstname'] = 'Nombre';
$lang['clients_lastname']  = 'Apellido';
$lang['clients_email']     = 'Dirección de correo';
$lang['clients_company']   = 'Empresa';
$lang['clients_vat']       = 'NIF';
$lang['clients_phone']     = 'Teléfono';
$lang['clients_country']   = 'País';
$lang['clients_city']      = 'Localidad';
$lang['clients_address']   = 'Dirección';
$lang['clients_zip']       = 'Código Postal';
$lang['clients_state']     = 'Provincia';

# Used for edit profile and register END

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
$lang['clients_ticket_open_subject']                = 'Crear Ticket';
$lang['clients_ticket_open_departments']            = 'Departamento';
$lang['clients_tickets_heading']                    = 'Tickets de Soporte';
$lang['clients_ticket_open_service']                = 'Servicio';
$lang['clients_ticket_open_priority']               = 'Prioridad';
$lang['clients_latest_tickets']                     = 'Las tickets más recientes';
$lang['clients_ticket_open_body']                   = 'Cuerpo de tickets';
$lang['clients_ticket_attachments']                 = 'Archivos adjuntos';
$lang['clients_ticket_posted']                      = 'Publicado: %s';
$lang['clients_single_ticket_string']               = 'Ticket';
$lang['clients_single_ticket_replied']              = 'Respondió: %s';
$lang['clients_single_ticket_information_heading'] = 'Información sobre los tickets';

$lang['clients_tickets_dt_number']     = 'Ticket #';
$lang['clients_tickets_dt_subject']    = 'Tema';
$lang['clients_tickets_dt_department'] = 'Departamento';
$lang['clients_tickets_dt_service']    = 'Servicio';
$lang['clients_tickets_dt_status']     = 'Estado';
$lang['clients_tickets_dt_last_reply'] = 'última respuesta';


$lang['clients_ticket_single_department']        = 'Departamento: %s';
$lang['clients_ticket_single_submitted']          = 'Inscrito: %s';
$lang['clients_ticket_single_status']            = 'Estado:';
$lang['clients_ticket_single_priority']          = 'Prioridad: %s';
$lang['clients_ticket_single_add_reply_btn']     = 'Añadir respuesta';
$lang['clients_ticket_single_add_reply_heading'] = 'Añadir respuesta a esta entrada';

# Login
$lang['clients_login_heading_no_register'] = 'Por favor Iniciar sesión';
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
$lang['clients_nav_kb']        = 'Base de Conocimiento';
$lang['clients_nav_profile']   = 'Perfil';
$lang['clients_nav_logout']    = 'Cerrar Sesión';

# Datatables
$lang['clients_dt_paginate_first']    = 'Primero';
$lang['clients_dt_paginate_last']     = 'Último';
$lang['clients_dt_paginate_next']     = 'Siguiente';
$lang['clients_dt_paginate_previous'] = 'Anterior';
$lang['clients_dt_empty_table']       = 'No {0} encontrado';
$lang['clients_dt_search']            = 'Buscar:';
$lang['clients_dt_zero_records']      = 'No se encontraron coincidencias';
$lang['clients_dt_loading_records']   = 'Cargando...';
$lang['clients_dt_length_menu']       = 'Muéstrame el menu_';
$lang['clients_dt_info_filtered']     = '(Filtrado de _MAX_ total de {0})';
$lang['clients_dt_info_empty']        = 'Mostrando 0 al 0 de 0 {0}';
$lang['clients_dt_info']              = 'Mostrando desde _START_ hasta _END_ de _TOTAL_ {0}';
$lang['clients_dt_empty_table']       = 'No {0} encontrado';
$lang['clients_dt_sort_ascending']    = 'Activar para ordenar la columna ascendente';
$lang['clients_dt_sort_descending']   = 'Activar para ordenar la columna descendente';


# Version 1.0.1
# Admin
#
# Payments
$lang['payment_receipt']                               = 'Recibo de Pago';
$lang['payment_for_string']                            = 'Pago por';
$lang['payment_date']                                  = 'Fecha de Pago:';
$lang['payment_view_mode']                             = 'Modo de Pago:';
$lang['payment_total_amount']                          = 'Valor Total';
$lang['payment_table_invoice_number']                  = 'Número de la Factura';
$lang['payment_table_invoice_date']                    = 'Fecha de la Factura';
$lang['payment_table_invoice_amount_total']            = 'Total de la Factura';
$lang['payment_table_payment_amount_total']            = 'Valor del pago';
$lang['payments_table_transaction_id']                 = 'ID de transacción: %s';
$lang['payment_getaway_token_not_found']               = 'Sin Pasarella de Pago';
$lang['online_payment_recorded_success']               = 'Pago registrado con éxito';
$lang['online_payment_recorded_success_fail_database'] = 'El pago se realiza correctamente pero no se pudo insertar el pago en la base de datos, por favor, contacta al administrador';

# Leads
$lang['lead_convert_to_client']                   = 'Convertir en Cliente';
$lang['lead_convert_to_email']                    = 'Email';
$lang['lead_convert_to_client_firstname']         = 'Nombre';
$lang['lead_convert_to_client_lastname']          = 'Apellido';
$lang['lead_email_already_exists']                = 'El email Contacto ya existe en los datos de los clientes';
$lang['lead_to_client_base_converted_success']    = 'El Contacto se ha convertido a cliente exitosamente';
$lang['lead_have_client_profile']                 = 'Este Contacto tiene un perfil de cliente.';
$lang['lead_converted_edit_client_profile']       = 'Editar Perfil';

# Invoices
$lang['view_invoice_as_customer_tooltip']                                     = 'Ver factura como cliente';
$lang['invoice_add_edit_recurring']                                           = 'Facturas Recurrentes?';
$lang['invoice_add_edit_recurring_no']                                        = 'No';
$lang['invoice_add_edit_recurring_month']                                     = 'Cada %s mes';
$lang['invoice_add_edit_recurring_months']                                    = 'Cada %s meses';
$lang['invoices_list_all']                                                    = 'Todas';
$lang['invoices_list_not_have_payment']                                       = 'Facturas con ningún registro de pago';
$lang['invoices_list_recurring']                                               = 'Las facturas recurrentes';
$lang['invoices_list_made_payment_by']                                        = 'Pago realizado por %s';
$lang['invoices_create_invoice_from_recurring_only_on_paid_invoices']         = 'Crear la siguiente factura recurrente aunque la anterior no haya sido pagada';
$lang['invoices_create_invoice_from_recurring_only_on_paid_invoices_tooltip'] = '¿Crear la siguiente factura recurrente aunque la anterior no haya sido pagada?';
$lang['send_renewed_invoice_from_recurring_to_email']                         = 'Enviar automáticamente la factura de renovacion para el cliente';
$lang['view_invoice_pdf_link_pay']                                            = 'Enlace para Pago de la Factura';

# Payment modes
$lang['payment_mode_add_edit_description']         = 'Cuentas Cancarias / Descripción';
$lang['payment_mode_add_edit_description_tooltip'] = 'Se puede establecer aquí la información de cuentas bancarias. Se mostrará en HTML Factura';
$lang['payment_modes_dt_description']              = 'Cuentas bancarias / Descripción';
$lang['payment_modes_add_edit_announcement']       = 'Nota: Los modos de pago que figuran a continuación son los modos offline. Los modos de pago en línea se pueden configurar en Preferencias->pasarelas de pago';
$lang['payment_mode_add_edit_active']              = 'Activo';
$lang['payment_modes_dt_active']                   = 'Activo';

# Contracts
$lang['contract_not_found'] = 'Contrato no encontrado. Tal vez se ha eliminado, verifique el registro de actividades';

# Settings
$lang['setting_bar_heading']                 = 'Preparar';
$lang['settings_group_online_payment_modes'] = 'Pasarela de pago';
$lang['settings_paymentmethod_mode_label']   = 'Etiqueta';
$lang['settings_paymentmethod_active']       = 'Activo';
$lang['settings_paymentmethod_currencies']   = 'Coma Separado Monedas';
$lang['settings_paymentmethod_testing_mode'] = 'Habilitar el Modo de prueba';

$lang['settings_paymentmethod_paypal_username']  = 'PayPal API nombre de usuario';
$lang['settings_paymentmethod_paypal_password']  = 'PayPal API contraseña';
$lang['settings_paymentmethod_paypal_signature'] = 'Firma API';

$lang['settings_paymentmethod_stripe_api_secret_key']      = 'Raya API clave secreta';
$lang['settings_paymentmethod_stripe_api_publishable_key'] = 'Raya clave publica';
$lang['settings_limit_top_search_bar_results']             = 'Limite de los resultados de la barra de busqueda';

# Quick Actions
$lang['qa_create_invoice']  = 'Crear Factura';
$lang['qa_create_task']     = 'Crear Tarea';
$lang['qa_create_client']   = 'Crear Cliente';
$lang['qa_create_contract'] = 'Crear Contrato';
$lang['qa_create_kba']      = 'Crear Artículo en la Base de Conocimientos';
$lang['qa_create_survey']   = 'Crear Encuesta';
$lang['qa_create_ticket']   = 'Crear Ticket';
$lang['qa_create_staff']    = 'Crear Empleado';

## Clients
$lang['client_phonenumber'] = 'Teléfono';

# Main Clients
$lang['clients_register']                          = 'Registro';
$lang['clients_profile_updated']                   = 'Tu perfil ha sido actualizado';
$lang['clients_successfully_registered']           = 'Gracias por su registro';
$lang['clients_account_created_but_not_logged_in'] = 'Su cuenta ha sido creada, pero no ha entrado en nuestro sistema de forma automática. Por favor, intente iniciar la sesión';
# Tickets
$lang['clients_tickets_heading']                   = 'Tickets de Soporte Técnico';

# Payments
// Uses on stripe page';
$lang['payment_for_invoice'] = 'El pago de la factura';
$lang['payment_total']       = 'Total: %s';

# Invoice
$lang['invoice_html_online_payment']             = 'Pago en línea';
$lang['invoice_html_online_payment_button_text'] = 'Pague Ahora';
$lang['invoice_html_payment_modes_not_selected'] = 'Por favor, seleccione el modo de pago';
$lang['invoice_html_amount_blank']               = 'El valor total no puede estar en blanco o vacio';
$lang['invoice_html_offline_payment']            = 'Forma de Pago';
$lang['invoice_html_amount']                     = 'Valor';


# Version 1.0.2
# Admin
#
# DataTables
$lang['dt_button_column_visibility']  = 'Visibilidad';
$lang['dt_button_reload']             = 'Actualizar';
$lang['dt_button_excel']              = 'Excel';
$lang['dt_button_csv']                = 'CSV';
$lang['dt_button_pdf']                = 'PDF';
$lang['dt_button_print']              = 'Impresión';
$lang['is_not_active_export']         = 'No';
$lang['is_active_export']             = 'Sí';

# Invoice
$lang['invoice_add_edit_advanced_options']               = 'Opciones avanzadas';
$lang['invoice_add_edit_allowed_payment_modes']          = 'Modos de pago permitidos para esta factura';
$lang['invoice_add_edit_recurring_invoices_from_invoice'] = 'Facturas recurrentes de esta factura';
$lang['invoice_add_edit_no_payment_modes_found']         = 'No se encontraron modos de pago.';
$lang['invoice_html_total_pay']                          = 'Total: %s';

# Email templates
$lang['email_templates_table_heading_name'] = 'Nombre de la plantilla';
# General
$lang['discount_type']                      = 'Tipo de Descuento';
$lang['discount_type_after_tax']            = 'Después del Impuesto';
$lang['discount_type_before_tax']           = 'Antes del Impuesto';
$lang['terms_and_conditions']               = 'Términos y Condiciones';
$lang['reference_no']                       = 'Referencia #';
$lang['no_discount']                        = 'Sin Descuento';
$lang['view_stats_tooltip']                 = 'Ver Estadísticas Rápidas';
# Clients
$lang['zip_from_date']                      = 'De la fecha:';
$lang['zip_to_date']                        = 'Hasta la fecha:';
$lang['client_zip_payments']                = 'Los pagos ZIP';
$lang['client_zip_invoices']                = 'Las facturas ZIP';
$lang['client_zip_estimates']               = 'Las presupuestos ZIP';
$lang['client_zip_status']                  = 'Estado';
$lang['client_zip_status_all']              = 'Todas';
$lang['client_zip_payment_modes']           = 'Pago realizado por';
$lang['client_zip_no_data_found']           = 'No se han encontrado %s';

# Payments
$lang['payment_mode']         = 'Forma de pago';
$lang['payment_view_heading'] = 'Pago';

# Settings
$lang['settings_allow_payment_amount_to_be_modified']               = 'Permitir al cliente para modificar la cantidad a pagar (para pagos en línea)';
$lang['settings_survey_send_emails_per_cron_run']                   = 'La cantidad de mensajes de email enviados por el CRON Job (encuestas)';
$lang['settings_survey_send_emails_per_cron_run_tooltip']           = 'Esta opción se utiliza cuando se envía encuestas. La Encuesta de cron Job se ejecuta cada 5 minutos. Puede establecer la cantidad de email que se envía cada 5 minutos';
$lang['settings_delete_only_on_last_invoice']                       = 'Eliminar factura permitido sólomente en la última factura';
$lang['settings_sales_estimate_prefix']                             = 'Formato de Número de presupuesto';
$lang['settings_sales_next_estimate_number']                        = 'Siguiente Número de presupuesto';
$lang['settings_sales_next_estimate_number_tooltip']                = 'Establecer este campo a 1 si desea empezar de inicio';
$lang['settings_sales_decrement_estimate_number_on_delete']         = 'Número de presupuesto de disminucion cuando borra';
$lang['settings_sales_decrement_estimate_number_on_delete_tooltip'] = '¿Quieres disminuir el número de presupuesto cuando se elimina la última Presupuesto? Ex. Si se establece esta opción en Sí (antes)la Presupuesto borra el siguiente número de presupuesto es de 15 el siguiente número presupuesto disminuirá a 14 para la siguiente Presupuesto si se establece en NO el número permanecerá en 15';
$lang['settings_sales_estimate_number_format']                      = 'Formato de número de presupuesto';
$lang['settings_sales_estimate_number_format_year_based']           = 'Año de base';
$lang['settings_sales_estimate_number_format_number_based']         = 'Número de base(000001)';
$lang['settings_delete_only_on_last_estimate']                      = 'Eliminar Presupuesto, permitido sólo en la última factura';
$lang['settings_cron_invoice_heading']                              = 'Factura';
$lang['settings_send_test_email_heading']                           = 'Enviar email de prueba';
$lang['settings_send_test_email_subheading']                        = 'Enviar email de prueba para asegurarse de que la configuración de SMTP se ha establecido correctamente.';
$lang['settings_send_test_email_string']                            = 'Dirección de correo';
$lang['settings_smtp_settings_heading']                             = 'Configuración de SMTP';
$lang['settings_smtp_settings_subheading']                          = 'Configuración de email principal';
$lang['settings_sales_heading_general']                             = 'General';
$lang['settings_sales_heading_invoice']                             = 'Factura';
$lang['settings_sales_heading_estimates']                           = 'Presupuestos';
$lang['settings_sales_heading_company']                             = 'Empresa';
$lang['settings_sales_cron_invoice_heading']                        = 'Factura';

# Tasks
$lang['tasks_dt_datestart'] = 'Fecha de Inicio';
$lang['tasks_dt_priority']  = 'Prioridad';

# Invoice General
$lang['invoice_discount'] = 'Descuento';

# Settings
$lang['settings_rtl_support_admin']                                   = 'RTL área de administración (de derecha a izquierda) BETA';
$lang['settings_rtl_support_client']                                  = 'RTL Área del Cliente (derecha a izquierda) BETA';
$lang['acs_language_editor']                                          = 'Editor de idiomas';
$lang['settings_estimate_auto_convert_to_invoice_on_client_accept']   = 'Auto convertir la Presupuesto a factura después de aceptar al cliente';
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
$lang['time_ago_just_now']  = 'Ahora Mismo';
$lang['time_ago_minute']    = 'Hace un minuto';
$lang['time_ago_minutes']   = 'Hace %s minutos';
$lang['time_ago_hour']      = 'Hace una hora';
$lang['time_ago_hours']     = 'Hace %s horas';
$lang['time_ago_yesterday'] = 'Ayer';
$lang['time_ago_days']      = 'Hace %s días';
$lang['time_ago_week']      = 'Hace una semana';
$lang['time_ago_weeks']     = 'Hace %s semanas';
$lang['time_ago_month']     = 'Hace un mes';
$lang['time_ago_months']    = 'Hace %s meses';
$lang['time_ago_year']      = 'Hace un año';
$lang['time_ago_years']     = 'Hace %s años';


# Estimates
$lang['estimates']                          = 'Presupuestos';
$lang['estimate']                           = 'Presupuesto';
$lang['estimate_lowercase']                 = 'presupuesto';
$lang['create_new_estimate']                = 'Crear Presupuesto';
$lang['view_estimate']                      = 'Ver Presupuesto';
$lang['estimate_sent_to_client_success']    = 'La Presupuesto ha sido enviada con éxito al cliente';
$lang['estimate_sent_to_client_fail']       = 'Problema al enviar la Presupuesto';
$lang['estimate_reminder_send_problem']     = 'Problema con la Presupuesto al enviar recordatorio de retraso';
$lang['estimate_details']                   = 'Presupuesto Detalles';
$lang['estimate_view']                      = 'Ver Presupuesto';
$lang['estimate_select_customer']           = 'Cliente';
$lang['estimate_add_edit_number']           = 'Número Presupuesto';
$lang['estimate_add_edit_date']             = 'Fecha del Presupuesto';
$lang['estimate_add_edit_expirydate']       = 'Fecha de Caducidad';
$lang['estimate_add_edit_currency']         = 'Moneda';
$lang['estimate_add_edit_client_note']      = 'Nota Cliente';
$lang['estimate_add_edit_admin_note']       = 'Nota del Admin';
$lang['estimate_add_edit_new_item']         = 'Nuevo Artículo';
$lang['estimate_add_edit_search_item']      = 'búsqueda Artículos';
$lang['estimates_toggle_table_tooltip']     = 'Ver Tabla Completa';
$lang['estimate_add_edit_advanced_options'] = 'Opciones Avanzadas';
$lang['estimate_vat']                       = 'NIF';
$lang['estimate_to']                        = 'Para';
$lang['estimates_list_all']                 = 'Todas';

$lang['estimate_invoiced_date']                  = 'Presupuesto Facturas en %s';
$lang['edit_estimate_tooltip']                   = 'Editar Presupuesto';
$lang['delete_estimate_tooltip']                 = 'Eliminar Presupuesto';
$lang['estimate_sent_to_email_tooltip']          = 'Envía por email';
$lang['estimate_already_send_to_client_tooltip'] = 'Esta Presupuesto ya se envío al cliente %s';
$lang['send_overdue_notice_tooltip']             = 'Enviar aviso de vencimiento';
$lang['estimate_view_activity_tooltip']          = 'Registro de actividades';

$lang['estimate_send_to_client_modal_heading']    = 'Enviar esta Presupuesto al cliente';
$lang['estimate_send_to_client_attach_pdf']       = 'Adjuntar Presupuesto PDF';
$lang['estimate_send_to_client_preview_template'] = 'Vista previa de plantilla de email';

$lang['estimate_dt_table_heading_number']     = 'Presupuesto #';
$lang['estimate_dt_table_heading_date']       = 'Fecha';
$lang['estimate_dt_table_heading_client']     = 'Cliente';
$lang['estimate_dt_table_heading_expirydate'] = 'Fecha de Caducidad';
$lang['estimate_dt_table_heading_amount']     = 'Valor';
$lang['estimate_dt_table_heading_status']     = 'Estado';

$lang['estimate_email_link_text']    = 'Ver Presupuesto';
$lang['estimate_convert_to_invoice'] = 'Convertir a Factura';
# Home
$lang['home_unfinished_tasks']       = 'Tareas Pendientes';

# Clients
$lang['client_estimates_tab'] = 'Presupuestos';
$lang['client_payments_tab']  = 'Pagos';


# Estimate General
$lang['estimate_pdf_heading']            = 'Presupuesto';
$lang['estimate_table_item_heading']     = 'Artículo';
$lang['estimate_table_quantity_heading'] = 'Cantidad';
$lang['estimate_table_rate_heading']     = 'Precio';
$lang['estimate_table_tax_heading']      = 'Impuesto';
$lang['estimate_table_amount_heading']   = 'Valor';
$lang['estimate_subtotal']               = 'Total Neto';
$lang['estimate_adjustment']             = 'Ajuste';
$lang['estimate_discount']               = 'Descuento';
$lang['estimate_total']                  = 'Total';
$lang['estimate_to']                     = 'Para';
$lang['estimate_data_date']              = 'Fecha del Presupuesto';
$lang['estimate_data_expiry_date']       = 'Fecha de Caducidad';
$lang['estimate_note']                   = 'Nota:';
$lang['estimate_status_draft']           = 'Borrador';
$lang['estimate_status_sent']            = 'Enviado';
$lang['estimate_status_declined']        = 'Rechazado';
$lang['estimate_status_accepted']        = 'Aceptado';
$lang['estimate_status_expired']         = 'Expirado';
$lang['estimate_note']                   = 'Nota:';

# Quick create
$lang['qa_create_estimate'] = 'Crear Presupuesto';
$lang['qa_create_lead']     = 'Crear Contacto';


## Clients
$lang['clients_estimate_dt_number']             = 'Presupuesto Nº';
$lang['clients_estimate_dt_date']               = 'Fecha';
$lang['clients_estimate_dt_duedate']            = 'Fecha de Caducidad';
$lang['clients_estimate_dt_amount']             = 'Valor';
$lang['clients_estimate_dt_status']             = 'Estado';
$lang['clients_nav_estimates']                  = 'Presupuestos';
$lang['clients_decline_estimate']               = 'No Aceptar';
$lang['clients_accept_estimate']                = 'Aceptar';
$lang['clients_my_estimates']                   = 'Presupuestos';
$lang['clients_estimate_invoiced_successfully']  = 'Presupuesto Aceptado. Aquí está la factura de esta Presupuesto';
$lang['clients_estimate_accepted_not_invoiced'] = 'Gracias por aceptar esta Presupuesto';
$lang['clients_estimate_declined']              = 'Presupuesto Rechazado. Puede aceptar la Presupuesto en cualquier momento antes de la fecha de caducidad';
$lang['clients_estimate_failed_action']         = 'No se pudo tomar una decisión sobre esta Presupuesto';
$lang['client_add_edit_profile']                = 'Perfil';

# Version 1.0.3


# Custom Fields
$lang['custom_field']                          = 'Campo personalizado';
$lang['custom_field_lowercase']                = 'campo personalizado';
$lang['custom_fields']                         = 'Campos Personalizados';
$lang['custom_fields_lowercase']               = 'campos personalizados';
$lang['new_custom_field']                      = 'Nuevo campo personalizado';
$lang['custom_field_name']                     = 'Nombre del campo';
$lang['custom_field_add_edit_type']            = 'Tipo';
$lang['custom_field_add_edit_belongs_top']     = 'El campo pertenece
';
$lang['custom_field_add_edit_options']         = 'Opciones';
$lang['custom_field_add_edit_options_tooltip'] = 'Utilice únicamente para ciertos tipos. Rellene el campo las Opciones mediante la separación de coma. Ex. manzana, naranja, plátano';
$lang['custom_field_add_edit_order']           = 'Orden';

$lang['custom_field_dt_field_to']       = 'Pertenece a';
$lang['custom_field_dt_field_name']     = 'Nombre';
$lang['custom_field_dt_field_type']     = 'Tipo';
$lang['custom_field_add_edit_active']   = 'Activo';
$lang['custom_field_add_edit_disabled'] = 'Discapacitado';

# Ticket replies
$lang['ticket_reply']           = 'Respuesta de tickets';
$lang['ticket_reply_lowercase'] = 'respuesta de tickets';

# Admin Customizer Sidebar
$lang['asc_custom_fields'] = 'Campos Personalizados';

# Contracts
$lang['contract_types']          = 'Tipos de Contratos';
$lang['contract_type']           = 'Tipo de Contrato';
$lang['new_contract_type']       = 'Nuevo Tipo de Contrato';
$lang['contract_type_lowercase'] = 'contrato';
$lang['contract_type_name']      = 'Nombre';

$lang['contract_types_list_name'] = 'Tipo de Contrato';

# Customizer Menu
$lang['acs_contracts']      = 'Contratos';
$lang['acs_contract_types'] = 'Tipos de contratos';

# Version 1.0.4
# Invoice Items
$lang['invoice_item_long_description']     = 'Descripción Larga';
# Customers
$lang['client_delete_invoices_warning']    = 'Este cliente tiene facturas o presupuestos en su cuenta. Usted no puede eliminar este cliente. Cambie todas las facturas a otro cliente y a continuación, elimine.';
$lang['clients_list_phone']                = 'Teléfono';
$lang['client_expenses_tab']               = 'Gastos';
$lang['customers_summary']                 = 'Resumen de los Clientes';
$lang['customers_summary_active']          = 'Contactos Activos';
$lang['customers_summary_inactive']        = 'Contactos Inactivos';
$lang['customers_summary_logged_in_today'] = 'Conectados Actualmente';

# Authentication
$lang['admin_auth_forgot_password_email']             = 'Dirección de Correo';
$lang['admin_auth_forgot_password_heading']           = 'Se te olvidó tu contraseña';
$lang['admin_auth_login_heading']                     = 'Iniciar Sesión';
$lang['admin_auth_login_email']                       = 'Dirección de Correo';
$lang['admin_auth_login_password']                    = 'Contraseña';
$lang['admin_auth_login_remember_me']                 = 'Recuérdame';
$lang['admin_auth_login_button']                      = 'Iniciar Sesión';
$lang['admin_auth_login_fp']                          = '¿Se olvidó de la contraseña?';
$lang['admin_auth_reset_password_heading']            = 'Restablecer la Contraseña';
$lang['admin_auth_reset_password']                    = 'Contraseña';
$lang['admin_auth_reset_password_repeat']             = 'Repite la Contraseña';
$lang['admin_auth_invalid_email_or_password']         = 'email o contraseña no válidos';
$lang['admin_auth_inactive_account']                  = 'Cuenta Inactiva';
# Calender
$lang['calendar_estimate']                            = 'Presupuesto';
$lang['calendar_invoice']                             = 'Factura';
$lang['calendar_contract']                            = 'Contrato';
$lang['calendar_customer_reminder']                   = 'Recordatorio al Cliente';
$lang['calendar_event']                               = 'Evento';
$lang['calendar_task']                                = 'Tarea';
# Leads
$lang['lead_edit_delete_tooltip']                     = 'Eliminar Contacto';
$lang['lead_attachments']                             = 'Archivos Adjuntos';
# Admin Customizer Sidebar
$lang['acs_finance']                                  = 'Presupuestos';
# Settings
$lang['settings_show_sale_agent_on_invoices']         = 'Mostrar el comercial en la factura';
$lang['settings_show_sale_agent_on_estimates']        = 'Mostrar el comercial en Presupuesto';
$lang['settings_predefined_predefined_term']          = 'Términos y condiciones predefinidos';
$lang['settings_predefined_clientnote']               = 'Nota cliente predefinido';
$lang['settings_custom_pdf_logo_image_url']           = 'PDF personalizado Compania Logo URL (JPG - 210x60px)';
$lang['settings_custom_pdf_logo_image_url_tooltip']   = 'Probablemente va a tener problemas con las imágenes PNG con transparencia que se manejan en forma diferente dependiendo de la php-imagick o la versión de php-gd utilizado. Intente actualizar php-imagick y desactivar php-gd
. SI deja este campo en blanco el logo por defecto sera usado.';

# General
$lang['sale_agent_string']               = 'Comercial';
$lang['amount_display_in_base_currency'] = 'Valor se muestra en su moneda base';

# Leads
$lang['leads_summary']                                         = 'Resumen de Contactos';

# Contracts
$lang['contract_value']                 = 'Valor del Contrato';
$lang['contract_trash']                 = 'Basura';
$lang['contracts_view_trash']           = 'Ver Basura';
$lang['contracts_view_all']             = 'Todas';
$lang['contracts_view_exclude_trashed'] = 'Excluir los contratos basura';
$lang['contract_value_tooltip']         = 'Añadir valor del contrato. El valor se mostrará en su moneda base.';
$lang['contract_trash_tooltip']         = 'Si agrega contrato como basura, no será mostrado en el lado del cliente, no será incluido en el tablero y otras estadísticas y también por defecto suele ser mostrado cuando se mostrará una lista de todos los contratos.';

$lang['contract_renew_heading']               = 'Renovar Contrato';
$lang['contract_summary_heading']             = 'Resumen de Contrato';
$lang['contract_summary_expired']             = 'Expirado';
$lang['contract_summary_active']              = 'Activo';
$lang['contract_summary_about_to_expire']     = 'A punto de caducar';
$lang['contract_summary_recently_added']      = 'Recientemente añadido';
$lang['contract_summary_trash']               = 'Basura';
$lang['contract_summary_by_type']             = 'Por Tipo de Contratos';
$lang['contract_summary_by_type_value']       = 'Pedidos abiertos por valor de Tipo';
$lang['contract_renewed_successfully']         = 'Contrato renovado exitosamente';
$lang['contract_renewed_fail']                = 'Problema al renovar el contrato. Contactar con el administrador';
$lang['no_contract_renewals_found']           = 'Las renovaciones de los contratos de esta no se encuentra';
$lang['no_contract_renewals_history_heading'] = 'Renovación de Contrato Historia';
$lang['contract_renewed_by']                  = '%s renovado este contrato';
$lang['contract_renewal_deleted']             = 'Renovación eliminada con éxito';
$lang['contract_renewal_delete_fail']         = 'No se pudo eliminar la renovación del contrato. Contactar con el administrador';

$lang['contract_renewal_new_value'] = 'Nuevo valor del contrato: %s';
$lang['contract_renewal_old_value'] = 'Antiguo Contrato Valor: %s';

$lang['contract_renewal_new_start_date'] = 'Nueva Fecha de Inicio:% ??s';
$lang['contract_renewal_old_start_date'] = 'Fecha de inicio del contrato de edad fue: %s';

$lang['contract_renewal_new_end_date'] = 'Nueva Fecha de finalización: %s';
$lang['contract_renewal_old_end_date'] = 'La fecha de finalización del contrato fue: %s';
$lang['contract_attachment']           = 'Adjunto archivo';
$lang['contract_attachment_lowercase'] = 'adjunto archivo';

# Admin Aside Menu
$lang['als_goals_tracking']     = 'Objetivos de Seguimiento';
$lang['als_expenses']           = 'Gastos';
$lang['als_reports_expenses']   = 'Gastos';
$lang['als_expenses_vs_income'] = 'Gastos vs Ingresos';

# Invoices
$lang['invoice_attach_file']           = 'Adjuntar Archivo';
$lang['invoice_mark_as_sent']          = 'Marcar como Enviado';
$lang['invoice_marked_as_sent']        = 'Factura marcado como enviado con éxito';
$lang['invoice_marked_as_sent_failed'] = 'Error al marcar la factura en que fue enviado';

# Quick Actions
$lang['qa_new_goal']    = 'Nueva Meta';
$lang['qa_new_expense'] = 'Registrar Gasto';

# Goals Tracking
$lang['goals']                                         = 'Metas';
$lang['goal']                                          = 'Meta';
$lang['goals_tracking']                                = 'objetivos de seguimiento';
$lang['new_goal']                                      = 'Nueva Meta';
$lang['goal_lowercase']                                = 'meta';
$lang['goal_start_date']                               = 'Fecha Inicial';
$lang['goal_end_date']                                 = 'Fecha Final';
$lang['goal_subject']                                  = 'Asunto';
$lang['goal_description']                              = 'Descripción';
$lang['goal_type']                                     = 'Tipo de objetivo';
$lang['goal_achievement']                              = 'Logro';
$lang['goal_contract_type']                            = 'tipo de contrato';
$lang['goal_notify_when_fail']                         = 'Notificar a los miembros del personal cuando no logró alcanzar una meta';
$lang['goal_notify_when_achieve']                      = 'Notificar a los miembros del personal cuando se alcanza una meta';
$lang['goal_progress']                                 = 'Progreso';
$lang['goal_total']                                    = 'Total: %s';
$lang['goal_result_heading']                           = 'Progreso de la meta';
$lang['goal_income_shown_in_base_currency']            = 'Los ingresos totales se muestra en la divisa de base';
$lang['goal_notify_when_end_date_arrives']             = 'Los miembros del personal serán notificados cuando llega la fecha de finalización.';
$lang['goal_staff_members_notified_about_achievement'] = 'Los miembros del personal son notificados acerca de este logro de la meta';
$lang['goal_staff_members_notified_about_failure']     = 'Algunos miembros del personal son notificados sobre el fracaso';
$lang['goal_notify_staff_manually']                     = 'Notificar a los Miembros del Personal manualmente';
$lang['goal_notify_staff_notified_manually_success']    = 'Los miembros del personal son notificados acerca del resultado de la meta';
$lang['goal_notify_staff_notified_manually_fail']       = 'No se ha podido notificar a los miembros del personal acerca del resultado de la meta';

$lang['goal_achieved'] = 'Conseguido';
$lang['goal_failed']   = 'Fallado';
$lang['goal_close']    = 'Cerrado';

$lang['goal_type_total_income']                                         = 'Total de ingresos logradas';
$lang['goal_type_convert_leads']                                        = 'Convertir X Contactos';
$lang['goal_type_increase_customers_without_leads_conversions']         = 'Aumentar el número de clientes';
$lang['goal_type_increase_customers_without_leads_conversions_subtext'] = 'Converion excluida del Contacto';

$lang['goal_type_increase_customers_with_leads_conversions']         = 'Aumentar el número de clientes';
$lang['goal_type_increase_customers_with_leads_conversions_subtext'] = 'conversion de Contacto permitida';
$lang['goal_type_make_contracts_by_type_calc_database']              = 'Hacer contratos por Tipo';
$lang['goal_type_make_contracts_by_type_calc_database_subtext']      = 'Se calcula a partir de la fecha añadido a la base de datos';
$lang['goal_type_make_contracts_by_type_calc_date']                  = 'Hacer contratos por Tipo';
$lang['goal_type_make_contracts_by_type_calc_date_subtext']          = 'Se calcula a partir de la fecha de inicio del contrato';
$lang['goal_type_total_estimates_converted']                         = 'X presupuestos de conversiones';
$lang['goal_type_total_estimates_converted_subtext']                 = 'Se tomará sólo presupuestos que se convertirán en facturas';
$lang['goal_type_income_subtext']                                    = 'Los ingresos se calcularán en su moneda base (no convertido)';
# Payments
$lang['payment_transaction_id']                                      = 'ID de la Transacción';
# Settings Menu
$lang['acs_expenses']                                                = 'Gastos';
$lang['acs_expense_categories']                                      = 'Categorías de Gastos';
# Expeneses
$lang['expense_category']                                            = 'Categoría del gasto';
$lang['expense_category_lowercase']                                  = 'categoría de gastos';
$lang['new_expense']                                                 = 'Registrar Gasto';
$lang['expense_add_edit_name']                                       = 'Nombre de la Categoría';
$lang['expense_add_edit_description']                                = 'Descripción de categoría';
$lang['expense_categories']                                          = 'Categorías de gastos';
$lang['new_expense_category']                                        = 'Nueva Categoría';
$lang['dt_expense_description']                                      = 'Descripción';
$lang['expense']                                                     = 'Gastos';
$lang['expenses']                                                    = 'Gastos';
$lang['expense_lowercase']                                           = 'gastos';
$lang['expense_add_edit_tax']                                        = 'Impuesto';
$lang['expense_add_edit_customer']                                   = 'Cliente';
$lang['expense_add_edit_currency']                                   = 'Moneda';
$lang['expense_add_edit_note']                                       = 'Nota';
$lang['expense_add_edit_date']                                       = 'Fecha de gastos';
$lang['expense_add_edit_amount']                                     = 'Valor';
$lang['expense_add_edit_billable']                                   = 'facturable';
$lang['expense_add_edit_attach_receipt']                             = 'adjuntar recibo de pago';
$lang['expense_add_edit_reference_no']                               = 'Referencia #';
$lang['expense_receipt']                                             = 'Recibo de gastos';
$lang['expense_receipt_lowercase']                                   = 'recibo de expensas';
$lang['expense_dt_table_heading_category']                           = 'Categoría';
$lang['expense_dt_table_heading_amount']                             = 'Valor';
$lang['expense_dt_table_heading_date']                               = 'Fecha';
$lang['expense_dt_table_heading_reference_no']                       = 'Referencia #';
$lang['expense_dt_table_heading_customer']                           = 'Cliente';
$lang['expense_dt_table_heading_payment_mode']                       = 'Modo de Pago';
$lang['expense_converted_to_invoice']                                = 'Gasto convertido a factura';
$lang['expense_converted_to_invoice_fail']                           = 'No se pudo convertir este gasto a factura comprobar el registro de errores.';
$lang['expense_copy_success']                                        = 'El gasto se copió con éxito.';
$lang['expense_copy_fail']                                           = 'No se pudo copiar gasto. Por favor, compruebe los campos necesarios y vuelva a intentarlo';
$lang['expenses_list_all']                                           = 'Todas';
$lang['expenses_list_billable']                                      = 'Facturable';
$lang['expenses_list_non_billable']                                  = 'No Facturable';
$lang['expenses_list_invoiced']                                      = 'Facturado';
$lang['expenses_list_unbilled']                                      = 'Por Facturar';
$lang['expenses_list_recurring']                                     = 'Periódico';
$lang['expense_invoice_delete_not_allowed']                          = 'Usted no puede eliminar este gasto. El gasto ya se ha facturado.';
$lang['expense_convert_to_invoice']                                  = 'Convertir a la factura';
$lang['expense_edit']                                                = 'Edición de Gastos';
$lang['expense_delete']                                              = 'Borrar';
$lang['expense_copy']                                                = 'Copia';
$lang['expense_invoice_not_created']                                 = 'No se ha creado la factura';
$lang['expense_billed']                                              = 'Facturado';
$lang['expense_not_billed']                                          = 'Por Facturar';
$lang['expense_customer']                                            = 'Cliente';
$lang['expense_note']                                                = 'Nota:';
$lang['expense_date']                                                = 'Fecha:';
$lang['expense_ref_noe']                                             = 'Nº Ref:';
$lang['expense_tax']                                                 = 'Impuesto:';
$lang['expense_amount']                                              = 'Valor:';
$lang['expense_recurring_indicator']                                 = 'Periódico';
$lang['expense_already_invoiced']                                    = 'Este gasto ya se factura';
$lang['expense_recurring_auto_create_invoice']                       = 'Creación automática de facturas';
$lang['expense_recurring_send_custom_on_renew']                      = 'Enviar la factura al cliente por email cuando el gasto se repite';
$lang['expense_recurring_autocreate_invoice_tooltip']                = 'Si esta opción está marcada la factura para el cliente se ha creado automáticamente cuando se renovó el gasto.';
$lang['report_expenses_full']                                        = 'Resumen Completo';
$lang['expenses_yearly_by_categories']                               = 'Los gastos anuales por Categorías';
$lang['total_expenses_for']                                          = 'Los gastos totales por // año ';
$lang['expenses_report_for']                                         = 'Los gastos por // año';
# Custom fields
$lang['custom_field_required']                                       = 'Necesario';
$lang['custom_field_show_on_pdf']                                    = 'Mostrar en PDF';
$lang['custom_field_leads']                                          = 'Contactos';
$lang['custom_field_customers']                                      = 'Clientes';
$lang['custom_field_staff']                                          = 'Personal';
$lang['custom_field_contracts']                                      = 'Contratos';
$lang['custom_field_tasks']                                          = 'Tareas';
$lang['custom_field_expenses']                                       = 'Gastos';
$lang['custom_field_invoice']                                        = 'Factura';
$lang['custom_field_estimate']                                       = 'Estimar';
# Tickets
$lang['ticket_single_private_staff_notes']                           = 'Notas privadas del personal';


# Business News
$lang['business_news'] = 'Noticias de negocios en internet';

# Navigation
$lang['nav_todo_items']               = 'Tareas';
# Clients
# Contracts
$lang['clients_contracts_type']       = 'Tipo de Contrato';

# Version 1.0.5
# General
$lang['no_tax']                             = 'Sin Impuestos';
$lang['numbers_not_formatted_while_editing'] = 'La tasa en el campo de entrada no está formateada, editar/añadir el artículo y debe seguir siendo no formateado. No intente dar formato manualmente aquí.';
# Contracts='
$lang['contracts_view_expired']             = 'Expirado';
$lang['contracts_view_without_dateend']     = 'Los contratos sin fecha de finalización';

# Email Templates
$lang['email_template_contracts_fields_heading'] = 'Contratos';
# Invoices General='
$lang['invoice_estimate_general_options']        = 'Opciones Generales';
$lang['invoice_table_item_description']          = 'Descripción';
$lang['invoice_recurring_indicator']             = 'Periódico';

# Estimates
$lang['estimate_convert_to_invoice_successfully'] = 'Presupuesto se convirtió a factura con éxito';
$lang['estimate_table_item_description']         = 'Descripción';

# Version 1.0.6
# Invoices
# Currencies
$lang['cant_delete_base_currency'] = 'Usted no puede eliminar la moneda base. Es necesario asignar la nueva moneda de referencia u Después suprimir esta.';
$lang['invoice_copy']              = 'Copia de la factura';
$lang['invoice_copy_success']      = 'Factura copiada con éxito';
$lang['invoice_copy_fail']         = 'No se pudo copiar la factura';
$lang['invoice_due_after_help']    = 'Ajuste a cero para evitar el cálculo';

$lang['show_shipping_on_invoice'] = 'Mostrar los detalles del envío en la factura';

# Estimates
$lang['show_shipping_on_estimate']         = 'Mostrar los detalles del envío en las presupuestos';
$lang['is_invoiced_estimate_delete_error'] = 'Esta Presupuesto se factura. Usted no puede eliminar la Presupuesto';

# Customers & Invoices / Estimates
$lang['ship_to']                  = 'Dirección de Envío';
$lang['customer_profile_details'] = 'Detalles del Cliente';
$lang['billing_shipping']         = 'Envío de Factura';
$lang['billing_address']          = 'Dirección de Cobro';
$lang['shipping_address']         = 'Dirección de Envío';

$lang['billing_street']  = 'Calle';
$lang['billing_city']    = 'Localidad';
$lang['billing_state']   = 'Provincia';
$lang['billing_zip']     = 'Código postal';
$lang['billing_country'] = 'País';

$lang['shipping_street']                    = 'Calle';
$lang['shipping_city']                      = 'Localidad';
$lang['shipping_state']                     = 'Provincia';
$lang['shipping_zip']                       = 'Código Postal';
$lang['shipping_country']                   = 'País';
$lang['get_shipping_from_customer_profile'] = 'Obtener detalles del envío desde el perfil de cliente';

# Customer
$lang['customer_file_from']                                    = 'Mostrando de %s';
$lang['customer_default_currency']                             = 'moneda predeterminada';
$lang['customer_no_attachments_found']                         = 'No se encontraron archivos adjuntos';
$lang['customer_update_address_info_on_invoices']              = 'Actualizar la información de envío / facturación en todas las facturas / presupuestos anteriores';
$lang['customer_update_address_info_on_invoices_help']         = 'Si marca este campo el envío y la información de facturación se actualizarán para todas las facturas y presupuestos. Nota: Las facturas con estado Abonado suele verse afectados.';
$lang['setup_google_api_key_customer_map']                     = 'Configuración clave API de Google con el fin de ver al mapa del cliente';
$lang['customer_attachments_file']                             = 'Archivo';
$lang['client_send_set_password_email']                        = 'Enviar email para configurar contraseña';
$lang['customer_billing_same_as_profile']                      = 'Igual que la información del cliente';
$lang['customer_billing_copy']                                 = 'Copiar dirección de facturación';
$lang['customer_map']                                          = 'Mapa';
$lang['set_password_email_sent_to_client']                     = 'email para configurar la contraseña se envía exitosamente al cliente';
$lang['set_password_email_sent_to_client_and_profile_updated'] = 'Perfil actualizado y el email para establecer la contraseña está enviado con éxito al cliente';
$lang['customer_attachments']                                  = 'Archivos';
$lang['customer_longitude']                                    = 'Longitud (Mapas)';
$lang['customer_latitude']                                     = 'Latitud (Mapas)';

# Authentication
$lang['admin_auth_set_password']          = 'Contraseña';
$lang['admin_auth_set_password_repeat']   = 'Repite la contraseña';
$lang['admin_auth_set_password_heading']  = 'Establecer contraseña';
$lang['password_set_email_subject']       = 'Establecer una nueva contraseña en %s';
# General
$lang['apply']                            = 'Aplicar';
$lang['department_calendar_id']           = 'ID de Google Calendar';
$lang['kan_ban_string']                   = 'Kan Ban';
$lang['localization_default_language']    = 'Idioma predeterminado';
$lang['system_default_string']            = 'Sistema por defecto';
$lang['advanced_options']                 = 'Opciones Avanzadas';
# Expenses
$lang['expense_list_invoice']             = 'Facturado';
$lang['expense_list_billed']              = 'Facturado';
$lang['expense_list_unbilled']            = 'No Facturado';
# Leads
$lang['lead_merge_custom_field']          = 'Combinar como campo personalizado';
$lang['lead_merge_custom_field_existing'] = 'Combinar con el campo de base de datos existente';
$lang['lead_dont_merge_custom_field']     = 'No fusionar';
$lang['no_lead_notes_found']              = 'No hay notas de Contacto encontradas';
$lang['leads_view_list']                  = 'Lista';
$lang['lost_leads']                       = 'Contactos perdidos';
$lang['junk_leads']                       = 'Contactos basura';
$lang['lead_mark_as_lost']                = 'Marcar como Perdido';
$lang['lead_unmark_as_lost']              = 'no marcar El Contacto como perdido';
$lang['lead_marked_as_lost']              = 'El Contacto marcado como perdido exitosamente';
$lang['lead_unmarked_as_lost']            = 'El Contacto no marcado como perdido exitosamente';
$lang['leads_status_color']               = 'Color';

$lang['lead_mark_as_junk']     = 'Marcar como Basura';
$lang['lead_unmark_as_junk']   = 'No marcar el Contacto como basura';
$lang['lead_marked_as_junk']   = 'Contacto marcado como basura con éxito';
$lang['lead_unmarked_as_junk'] = 'Contacto desmarcado como basura con éxito';

$lang['lead_not_found']                                                      = 'Contacto No Encontrado';
$lang['lead_lost']                                                           = 'Perdido';
$lang['lead_junk']                                                           = 'Basura';
$lang['leads_not_assigned']                                                  = 'No asignado';
# Contacts
$lang['contract_not_visible_to_client']                                      = 'Esconder de los clientes';
$lang['contract_edit_overview']                                              = 'contrato general';
$lang['contract_attachments']                                                = 'Archivos adjuntos';
# Tasks
$lang['task_view_make_public']                                               = 'Hacer público';
$lang['task_is_private']                                                     = 'Tarea privada';
$lang['task_finished']                                                       = 'Terminado';
$lang['task_single_related']                                                 = 'Relacionado';
$lang['task_unmark_as_complete']                                             = 'Desmarcar como Completa';
$lang['task_unmarked_as_complete']                                           = 'Tarea sin marcar como completa';
$lang['task_relation']                                                       = 'Relacionado';
$lang['task_public']                                                         = 'Público';
$lang['task_public_help']                                                    = 'Si se establece esta tarea pública será visible para todos los miembros del personal. De lo contrario será visible sólo para usuarios que están asignados, seguidores, creador o administradores';
# Settings
$lang['settings_general_favicon']                                            = 'Icono';
$lang['settings_output_client_pdfs_from_admin_area_in_client_language']      = 'Salida de documentos PDF a partir de cliente en el área de administración del idioma del cliente';
$lang['settings_output_client_pdfs_from_admin_area_in_client_language_help'] = 'Si esta opción está establecida en Sí y ex. el idioma por defecto del sistema es Inglés y el cliente en lengua de configuración francés los documentos PDF se outputed en el idioma del cliente';
$lang['settings_cron_surveys']                                               = 'Encuestas';
$lang['settings_default_tax']                                                = 'Impuestos por defecto';
$lang['setup_calendar_by_departments']                                       = 'Configuración del calendario para los Departamentos';
$lang['settings_calendar']                                                   = 'Calendario';
$lang['settings_sales_invoice_due_after']                                    = 'Factura vence después de (días)';
$lang['settings_google_api']                                                 = 'Google API Key';
$lang['settings_gcal_main_calendar_id']                                      = 'ID de Google Calendar';
$lang['settings_gcal_main_calendar_id_help']                                 = 'Este es el calendario de la empresa principal. Se mostrarán todos los eventos de este calendario. Si desea especificar un calendario basado en los departamentos puede agregar en el departamento de ID de Google Calendar.';

$lang['show_on_calendar']                  = 'Mostrar en el Calendario';
$lang['show_invoices_on_calendar']         = 'Facturas';
$lang['show_estimates_on_calendar']        = 'Presupuestos';
$lang['show_contracts_on_calendar']        = 'Contratos';
$lang['show_tasks_on_calendar']            = 'Tareas';
$lang['show_customer_reminders_on_calendar'] = 'Alertas a Clientes';

# Leads
$lang['copy_custom_fields_convert_to_customer']                      = 'Copiar campos personalizados al perfil del cliente';
$lang['copy_custom_fields_convert_to_customer_help']                 = 'Si cualquiera de los siguientes campos personalizados no existe para el cliente será automático creada con el mismo nombre de otro modo sólo el valor se copiará a partir del perfil de Lead.';
$lang['lead_profile']                                                = 'Perfil';
$lang['lead_is_client']                                              = 'Cliente';
$lang['leads_kan_ban_notes_title']                                   = 'Notas';
$lang['leads_email_integration_folder_no_encryption']                = 'Sin Cifrado';
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
$lang['leads_email_integration_notify_when_lead_imported']           = 'Notificar cuando el Contacto importada';
$lang['leads_email_integration_only_check_unseen_emails']            = 'marque sólo mensajes de email no abiertos';
$lang['leads_email_integration_only_check_unseen_emails_help']       = 'El guión fijará automática del email para abrir después de cheque. Esto se utiliza para evitar que la comprobación de todos los mensajes de email y otra vez. No es recomendado para desactivar esta opción si usted tiene muchos mensajes de email y tiene una configuración de reenvío mucho a la configuración de email que para los Leads';
$lang['leads_email_integration_notify_when_lead_contact_more_times'] = 'Notificará si el email Contacto enviar varias veces';
$lang['leads_email_integration_test_connection']                     = 'Prueba de conexión IMAP';
$lang['lead_email_connection_ok']                                    = 'Conexión IMAP es buena';
$lang['lead_email_connection_not_ok']                                = 'Conexión IMAP no es okey';
$lang['lead_email_activity']                                         = 'Actividad de email';
$lang['leads_email_integration_notify_roles']                        = 'Papeles para notificar';
$lang['leads_email_integration_notify_staff']                        = 'Los miembros del personal que notificar';
$lang['lead_public']                                                 = 'Público';
# Knowledge Base

$lang['kb_group_color']                = 'Color';
$lang['kb_group_order']                = 'Orden';
# Utilities - BULK PDF Exporter
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
$lang['bulk_export_include_tag']       = 'incluir Tag';
$lang['bulk_export_include_tag_help']  = 'Ex. Original o copia. La etiqueta se sacara del PDF. Recomendado usar sólo 1 etiqueta';
# Predefined replies
$lang['no_predefined_replies_found']   = 'Sin respuestas predefinidas encontradas';
## Clients area
$lang['clients_contract_attachments']  = 'Archivos adjuntos';
# Backup
$lang['backup_type_full']              = 'Copia de seguridad completa';
$lang['backup_type_db']                = 'Copia de seguridad de base de datos';

$lang['auto_backup_options_updated']     = 'Opciones de copia de seguridad automática actualizada';
$lang['auto_backup_every']               = 'Crear copia de seguridad cada X días';
$lang['auto_backup_enabled']             = 'Habilitado (Requiere Cron)';
$lang['auto_backup']                     = 'Copia de seguridad automática';
$lang['backup_delete']                   = 'Copia eliminado';
$lang['create_backup']                   = 'Crear copia de seguridad';
$lang['backup_success']                  = 'La copia de seguridad se realizo con éxito';
$lang['utility_backup']                  = 'Copia de seguridad de base de datos';
$lang['utility_create_new_backup_db']    = 'Crear copia de seguridad de base de datos';
$lang['utility_backup_table_backupname'] = 'Copia de seguridad';
$lang['utility_backup_table_backupsize'] = 'El tamaño de la copia de seguridad';
$lang['utility_backup_table_backupdate'] = 'Fecha';
$lang['utility_db_backup_note']          = 'Nota: Debido al tiempo de ejecución limitado y memoria disponible para PHP, las copias de seguridad de bases de datos muy grandes puede no ser posible. Si su base de datos es muy grande es posible que necesite hacer copias de seguridad directamente desde su servidor SQL a través de la línea de comandos, o que su administrador del servidor que lo haga por usted si usted no tiene privilegios de root.';

# Version 1.0.7
## Customers - portal
$lang['clients_nav_proposals'] = 'Propuestas';
$lang['clients_nav_support']   = 'Soporte Técnico';
# General
$lang['more']                  = 'Más';
$lang['add_item']              = 'Añadir artículo';
$lang['goto_admin_area']       = 'Ir al área de administración';
$lang['click_here_to_edit']    = 'Haga clic aquí para editar';
$lang['delete']                = 'Eliminar %s';
$lang['welcome_top']           = 'Bienvenido %s';

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
$lang['import_leads']                = 'Importación de Contactos';
$lang['import_customers']            = 'Importación de Clientes';
$lang['choose_csv_file']             = 'Elija Archivo CSV';
$lang['import']                      = 'Importar';
$lang['lead_import_status']          = 'Estado';
$lang['lead_import_source']          = 'Fuente';

# Bulk PDF Export
$lang['bulk_export_pdf_proposals'] = 'Propuestas';

# Invoices
$lang['delete_invoice'] = 'Borrar';

# Calendar
$lang['calendar_lead_reminder'] = 'Recordatorio de Contacto';

$lang['items']      = 'Artículos';
$lang['support']    = 'Soporte';
$lang['new_ticket'] = 'Nuevo Ticket';

# Reminders
$lang['client_edit_set_reminder_title'] = 'Añadir recordatorio al cliente';
$lang['lead_set_reminder_title']        = 'Añadir recordatorio de Contacto';
$lang['set_reminder_tooltip']           = 'Esta opción le permite no olvidar nada acerca de sus clientes.';
$lang['client_reminders_tab']           = 'Recordatorios';
$lang['leads_reminders_tab']            = 'Recordatorios';

# Tickets
$lang['delete_ticket_reply']  = 'Borrar Respuesta';
$lang['ticket_priority_edit'] = 'Editar prioridad';
$lang['ticket_priority_add']  = 'Añadir prioridad';
$lang['ticket_status_edit']   = 'Estado edición de tickets';
$lang['ticket_service_edit']  = 'Edición de tickets';
$lang['edit_department']      = 'Edición Departamento';

# Expenses
$lang['edit_expense_category']                                    = 'Editar Categoría del gasto';
# Settings
$lang['customer_default_country']                                 = 'País predeterminado';
$lang['settings_sales_require_client_logged_in_to_view_estimate'] = 'Requerir al cliente estar registrado para ver Presupuesto';
$lang['set_reminder']                                             = 'Ha configurado un recordatorio';
$lang['set_reminder_date']                                        = 'Fecha de ser notificado';
$lang['reminder_description']                                     = 'Descripción conjunto';
$lang['reminder_notify_me_by_email']                              = 'Enviar también un email para este recordatorio';
$lang['reminder_added_successfully']                               = 'Recordatorio añadido con éxito. Se le notificará en el tiempo.';
$lang['reminder_description']                                     = 'Descripción';
$lang['reminder_date']                                            = 'Fecha';
$lang['reminder_staff']                                           = 'Recordar';
$lang['reminder_is_notified']                                     = 'Se notifica?';
$lang['reminder_is_notified_boolean_no']                          = 'No';
$lang['reminder_is_notified_boolean_yes']                         = 'Sí';
$lang['reminder_set_to']                                          = 'Establecer recordatorio para';
$lang['reminder_deleted']                                         = 'Recordatorio elimina exitosamente';
$lang['reminder_failed_to_delete']                                = 'No se pudo eliminar el recordatorio';
$lang['show_invoice_estimate_status_on_pdf']                      = 'Mostrar factura / estado de Presupuesto en PDF';
$lang['email_piping_default_priority']                            = 'prioridad por defecto en el billete entubada';
$lang['show_lead_reminders_on_calendar']                          = 'Recordatorios de Contacto';
$lang['tickets_piping']                                           = 'Cesion por email';
$lang['email_piping_only_replies']                                = 'Sólo respuestas permitidas por email';
$lang['email_piping_only_registered']                             = 'Sólo seciones de Usuarios Registrados';

# Estimates
$lang['view_estimate_as_client']         = 'Ver presupuesto como cliente';
$lang['estimate_mark_as']                = 'Marcar como %s';
$lang['estimate_status_changed_success'] = 'Presupuesto cambio de estado';
$lang['estimate_status_changed_fail']    = 'No se pudo cambiar el estado de la Presupuesto';
$lang['estimate_email_link_text']        = 'Ver Presupuesto';

# Proposals
$lang['proposal_to']                            = 'Nombre de la Empresa';
$lang['proposal_date']                          = 'Fecha';
$lang['proposal_address']                       = 'Dirección';
$lang['proposal_phone']                         = 'Teléfono';
$lang['proposal_email']                         = 'Email';
$lang['proposal_date_created']                  = 'Fecha de Creación';
$lang['proposal_open_till']                     = 'Valida Hasta';
$lang['proposal_status_open']                   = 'Abierta';
$lang['proposal_status_accepted']               = 'Aceptada';
$lang['proposal_status_declined']               = 'Rechazada';
$lang['proposal_status_sent']                   = 'Enviada';
$lang['proposal_expired']                       = 'Expirada';
$lang['proposal_subject']                       = 'Tema';
$lang['proposal_total']                         = 'Total';
$lang['proposal_status']                        = 'Estado';
$lang['proposals_list_all']                     = 'Todas';
$lang['proposals_leads_related']                = 'Contactos Relacionados';
$lang['proposals_customers_related']            = 'Clientes Relacionados';
$lang['proposal_related']                       = 'Relacionado';
$lang['proposal_for_lead']                      = 'Contacto';
$lang['proposal_for_customer']                  = 'Cliente';
$lang['proposal']                               = 'Propuesta';
$lang['proposal_lowercase']                     = 'propuesta';
$lang['proposals']                              = 'Propuestas';
$lang['proposals_lowercase']                    = 'propuestas';
$lang['new_proposal']                           = 'Nueva Propuesta';
$lang['proposal_currency']                      = 'Moneda';
$lang['proposal_allow_comments']                = 'Permitir Comentarios';
$lang['proposal_allow_comments_help']           = 'Si marca esta opción se permitirán comentarios cuando sus clientes ver la propuesta.';
$lang['proposal_edit']                          = 'Editar';
$lang['proposal_pdf']                           = 'PDF';
$lang['proposal_send_to_email']                 = 'Envía por email';
$lang['proposal_send_to_email_title']           = 'Enviar a email Propuesta';
$lang['proposal_attach_pdf']                    = 'Adjuntar PDF';
$lang['proposal_preview_template']              = 'Vista previa de la plantilla';
$lang['proposal_view']                          = 'Ver Propuesta';
$lang['proposal_copy']                          = 'Copia';
$lang['proposal_delete']                        = 'Borrar';
$lang['proposal_to']                            = 'Para';
$lang['proposal_add_comment']                   = 'Agregar Comentario';
$lang['proposal_sent_to_email_success']         = 'Propuesta enviada por email con éxito';
$lang['proposal_sent_to_email_fail']            = 'No se ha podido propuesta enviada al email';
$lang['proposal_copy_fail']                     = 'No se pudo copiar propuesta';
$lang['proposal_copy_success']                  = 'Propuesta copiada con éxito';
$lang['proposal_status_changed_success']        = 'El estado de la propuesta ha cambiado con éxito';
$lang['proposal_status_changed_fail']           = 'No se pudo cambiar el estado de la propuesta';
$lang['proposal_assigned']                      = 'Asignado';
$lang['proposal_comments']                      = 'Comentarios';
$lang['proposal_convert']                       = 'Convertir';
$lang['proposal_convert_estimate']              = 'A Presupuesto';
$lang['proposal_convert_invoice']               = 'A Factura';
$lang['proposal_convert_to_estimate']           = 'Convertir a Presupuesto';
$lang['proposal_convert_to_invoice']            = 'Convertir a Factura';
$lang['proposal_convert_to_lead_disabled_help'] = 'Es necesario para convertir el Contacto a cliente con el fin de crear %s';
$lang['proposal_convert_not_related_help']      = 'La propuesta tiene que estar relacionada a el cliente con el fin de convertir a %s';
$lang['proposal_converted_to_estimate_success'] = 'Propuesta convierte para estimar exitosamente';
$lang['proposal_converted_to_invoice_success']  = 'Propuesta convertida a factura con éxito';
$lang['proposal_converted_to_estimate_fail']    = 'No se pudo convertir propuesta a presupuesto';
$lang['proposal_converted_to_invoice_fail']     = 'No se pudo convertir la propuesta a factura';

# Proposals - view proposal template
$lang['proposal_total_info']   = 'Total %s';
$lang['proposal_accept_info']  = 'Aceptado';
$lang['proposal_decline_info'] = 'Rechazado';
$lang['proposal_pdf_info']     = 'PDF';

# Customers Portal
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
$lang['add_task_attachments']                 = 'Adjuntar Archivo';
$lang['task_view_attachments']                = 'Archivos Adjuntos';
$lang['task_view_description']                = 'Descripción';

# Customer Groups
$lang['customer_group_add_heading']  = 'Añadir nuevo grupo de clientes';
$lang['customer_group_edit_heading'] = 'Editar Grupo de Clientes';
$lang['new_customer_group']          = 'Nuevo Grupo de Clientes';
$lang['customer_group_name']         = 'Nombre';
$lang['customer_groups']             = 'Tipo de Cliente';
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

# Utilities # Menu Builder
$lang['utilities_menu_translate_name_help'] = 'Puede añadir aquí también para traducir cadenas. Así que si el personal / sistema tiene idioma distinto el valor por defecto los nombres de los elementos del menú se veran en el lenguaje personal. De lo contrario, si no existe la cadena en el archivo traducir, será tomada la cadena que introduzca aquí.';
$lang['utilities_menu_icon']                = 'Icono';
$lang['active_menu_items']                  = 'Elementos de menú activos';
$lang['inactive_menu_items']                = 'Elementos de menú inactivos';
$lang['utilities_menu_permission']          = 'Permisos';
$lang['utilities_menu_url']                 = 'URL';
$lang['utilities_menu_name']                = 'Nombre';
$lang['utilities_menu_save']                = 'Guardar Menú';

# Knowledge Base
$lang['view_articles_list']     = 'Ver Artículos';
$lang['view_articles_list_all'] = 'Todos los Artículos';
$lang['als_add_article']        = 'Añadir Artículo';
$lang['als_all_articles']       = 'Todos los Artículos';
$lang['als_kb_groups']          = 'Grupos';

# Customizer Menu
$lang['menu_builder']            = 'Configuración del menú';
$lang['main_menu']               = 'Menú principal';
$lang['setup_menu']              = 'Menú de configuración';
$lang['utilities_menu_url_help'] = '%s se auto añade a la URL';

# Spam Filter - Tickets
$lang['spam_filters']                 = 'Los filtros de spam';
$lang['spam_filter']                  = 'Filtro de spam';
$lang['new_spam_filter']              = 'Nuevo filtro de spam';
$lang['spam_filter_blocked_senders']  = 'Los remitentes bloqueados';
$lang['spam_filter_blocked_subjects'] = 'Los sujetos bloqueados';
$lang['spam_filter_blocked_phrases']  = 'Frases bloqueadas';
$lang['spam_filter_content']          = 'Contenido';
$lang['spamfilter_edit_heading']      = 'Editar filtro de correo no deseado';
$lang['spamfilter_add_heading']       = 'Añadir Filtro de Spam';
$lang['spamfilter_type']              = 'Tipo';
$lang['spamfilter_type_subject']      = 'Tema';
$lang['spamfilter_type_sender']       = 'Remitente';
$lang['spamfilter_type_phrase']       = 'Frase';

# Tickets
$lang['block_sender']               = 'Bloquear remitente';
$lang['sender_blocked']             = 'remitentes bloqueados';
$lang['sender_blocked_successfully'] = 'Remitente bloqueado exitosamente';
$lang['ticket_date_created']        = 'fecha de creacion';

#KB
$lang['edit_kb_group']             = 'Editar Grupo';
# Leads
$lang['edit_source']               = 'Modificar Origen';
$lang['edit_status']               = 'Editar Estado';
# Contacts
$lang['contract_type_edit']        = 'Editar Tipo de Contrato';
# Reports
$lang['report_by_customer_groups'] = 'Valor Total Por Grupos de clientes';
#Utilities
$lang['ticket_pipe_log']           = 'Registro de tickets';
$lang['ticket_pipe_name']          = 'De';
$lang['ticket_pipe_email_to']      = 'Para';
$lang['ticket_pipe_email']         = 'Del Email';
$lang['ticket_pipe_subject']       = 'Tema';
$lang['ticket_pipe_message']       = 'Mensaje';
$lang['ticket_pipe_date']          = 'Fecha';
$lang['ticket_pipe_status']        = 'Estado';

# Home
$lang['home_latest_activity']       = 'Actividad Reciente';
$lang['home_my_tasks']              = 'Mis Tareas';
$lang['home_latest_activity']       = 'Actividad Reciente';
$lang['home_my_todo_items']         = 'Resumen de las Tareas';
$lang['home_widget_view_all']       = 'Ver todo';
$lang['home_stats_full_report']     = 'Resumen Completo';

# Validation - Customer Portal

$lang['form_validation_required']    = 'Se requiere que el campo {field}.';
$lang['form_validation_valid_email'] = 'El {field} campo debe contener una dirección válida de email.';
$lang['form_validation_matches']     = 'El campo {field} no coincide con el campo {param}.';
$lang['form_validation_is_unique']   = 'El campo {field} debe contener un valor único.';

# Version 1.0.8
# Notifications & Leads/Estimates/Invoices Activity Log
$lang['not_event'] = 'Inicio del evento de hoy - %s ...';
$lang['not_event_public'] = 'Evento público da comienzo hoy - %s ...';
$lang['not_contract_expiry_reminder'] = 'Recordatorio de caducidad del contrato - %s ...';
$lang['not_recurring_expense_cron_activity_heading'] = 'Gastos recurrente Actividad de trabajo Cron ';
$lang['not_recurring_invoices_cron_activity_heading'] = 'Facturas recurrentes Actividad de tarea Cron';
$lang['not_recurring_total_renewed'] = 'Actualizado Total: %s';
$lang['not_recurring_expenses_action_taken_from'] = 'Accion tomada por gastos recurrente';
$lang['not_invoice_created'] = 'Factura Creada:';
$lang['not_invoice_renewed'] = 'Factura Renovada:';
$lang['not_expense_renewed'] = 'Gasto Renovado:';
$lang['not_invoice_sent_to_customer'] = 'Factura enviada al cliente: %s';
$lang['not_invoice_sent_yes'] = 'Si';
$lang['not_invoice_sent_not'] = 'No';
$lang['not_action_taken_from_recurring_invoice'] = 'Accion tomada de la factura recurrente:';
$lang['not_new_reminder_for'] = 'Nuevo recordatorio para %s';
$lang['not_received_one_or_more_messages_lead'] = 'Se ha recibido un mensaje de email de más de una ventaja';
$lang['not_received_lead_imported_email_integration'] = 'Ventaja importada de integración de email';
$lang['not_lead_imported_attachment'] = 'Anexos importado de email';
$lang['not_estimate_status_change'] = 'Anexos importado de email';
$lang['not_estimate_status_updated'] = 'Estado presupuesto de actualización: desde: %s a %s';
$lang['not_goal_message_success'] = 'Felicitaciones! Alcazamos el Nuevo objetivo.<br />Tipo de objetivo: %s
<br />Objetivo Alcanzado: %s
<br />Total Alcanzado: %s
<br />Fecha Inicio: %s
<br />Fecha Fin: %s';
$lang['not_assigned_lead_to_you'] = 'ventaja asignada %s para ti';
$lang['not_lead_activity_assigned_to'] = '%s asignada para %s';
$lang['not_lead_activity_attachment_deleted'] = 'Borrar anexo';
$lang['not_lead_activity_status_updated'] = '%s actualizar ventaja de estado desde %s a %s';
$lang['not_lead_activity_contacted'] = '%s puesta en contacto esta ventaja sobre %s';
$lang['not_lead_activity_created'] = '%s crear ventaja';
$lang['not_lead_activity_marked_lost'] = 'Marcado como perdido';
$lang['not_lead_activity_unmarked_lost'] = 'desmarcado como perdido';
$lang['not_lead_activity_marked_junk'] = 'Marcado como basura';
$lang['not_lead_activity_unmarked_junk'] = 'desmarcado como basura';
$lang['not_lead_activity_added_attachment'] = 'Anexo agregado';
$lang['not_lead_activity_converted_email'] = 'Ventaja de email cambiada. La primera ventaja de correo electronico fue: %s y añadido como cliente con el email %s';
$lang['not_lead_activity_converted'] = '%s Convertir esta ventaja para el cliente';
$lang['not_liked_your_post'] = '%s le gustó su %s ...';
$lang['not_commented_your_post'] = '%s comentó tu publicación %s ...';
$lang['not_liked_your_comment'] = '%s le gustó su comentario %s ...';
$lang['not_proposal_assigned_to_you'] = 'Propuesta asignada por ti - %s ...';
$lang['not_proposal_comment_from_client'] = 'Nuevo comentario sobre la propuesta del cliente%s ...';
$lang['not_proposal_proposal_accepted'] = 'Propuesta aceptada';
$lang['not_proposal_proposal_declined'] = 'Propuesta rechazada';
$lang['not_task_added_you_as_follower'] = 'Te añadió como seguidor en la tarea %s ...';
$lang['not_task_added_someone_as_follower'] = 'añadido como seguidor en la tarea %s ...';
$lang['not_task_added_himself_as_follower'] = 'añadido el mismo como seguidor en la tarea %s ...';
$lang['not_task_assigned_to_you'] = 'asignada una tarea para ti %s ...';
$lang['not_task_assigned_someone'] = 'asignada%s a la tarea %s ...';
$lang['not_task_will_do_user'] = 'Hara la tarea %s ...';
$lang['not_task_new_attachment'] = 'Nuevo anexo añadido';
$lang['not_task_marked_as_complete'] = 'Marca tarea como complete %s';
$lang['not_task_unmarked_as_complete'] = 'Desmarcar tarea como completa %s';
$lang['not_ticket_assigned_to_you'] = 'Boleto asignado para ti - %s ...';
$lang['not_ticket_reassigned_to_you'] = 'Boleto no asignado para ti- %s ...';
$lang['not_estimate_customer_accepted'] = 'Felicidades! El cliente acepto la presupuesto con el número %s';
$lang['not_estimate_customer_declined'] = 'El cliente rechazo la Presupuesto con el número  %s';
$lang['estimate_activity_converted'] = 'convertido esta Presupuesto para facturar.<br /> %s';
$lang['estimate_activity_created'] = 'Creado el Presupuesto';
$lang['invoice_estimate_activity_removed_item'] = 'Artículo quitado <b>%s</b>';
$lang['estimate_activity_number_changed'] = 'Numero presupuesto cambiado  desde %s a %s';
$lang['invoice_activity_number_changed'] = 'Numero de facture cambiado desde %s a %s';
$lang['invoice_estimate_activity_updated_item_short_description'] = 'actualizar descripción corta del artículo desde %s a %s';
$lang['invoice_estimate_activity_updated_item_long_description'] = 'actualizar descripción larga del artículo desde <b>%s</b> a <b>%s</b>';
$lang['invoice_estimate_activity_updated_item_rate'] = 'actualizar precio del artículo desde %s a %s';
$lang['invoice_estimate_activity_updated_qty_item'] = 'actualizar calidad de artículos <b>%s</b> desde %s a %s';
$lang['invoice_estimate_activity_added_item'] = 'nuevo artículo agregado <b>%s</b>';
$lang['invoice_estimate_activity_sent_to_client'] = 'enviar Presupuesto al cliente';
$lang['estimate_activity_client_accepted_and_converted'] = 'El cliente aceptó esta Presupuesto. La Presupuesto es convertida para facturar con el número %s';
$lang['estimate_activity_client_accepted'] = 'El cliente ha aceptado esta Presupuesto';
$lang['estimate_activity_client_declined'] = 'El cliente ha rechazado esta Presupuesto';
$lang['estimate_activity_marked'] = 'Presupuesto marcada como %s';
$lang['invoice_activity_status_updated'] = 'Actualizar estado de factura desde %s a %s';
$lang['invoice_activity_created'] = 'Factura creada';
$lang['invoice_activity_from_expense'] = 'convertido para facturar el costo';
$lang['invoice_activity_recurring_created'] = '[Recurrente] Factura creada por CRON';
$lang['invoice_activity_recurring_from_expense_created'] = '[Factura de costo] Factura creada por CRON';
$lang['invoice_activity_sent_to_client_cron'] = 'Factura enviada al cliente por CRON';
$lang['invoice_activity_sent_to_client'] = 'enviar facture al cliente';
$lang['invoice_activity_marked_as_sent'] = 'factura marcada como enviada';
$lang['invoice_activity_payment_deleted'] = 'suprimido el pago de la factura. Pago #%s, cantidad total %s';
$lang['invoice_activity_payment_made_by_client'] = 'El cliente hizo el pago de la factura por un total de <b>%s</b> - %s';
$lang['invoice_activity_payment_made_by_staff'] = 'pago registrado en total de <b>%s</b> - %s';
$lang['invoice_activity_added_attachment'] = 'Anexo agregado';

# Navigation
$lang['top_search_placeholder'] = 'Buscar...';

# Staff
$lang['staff_profile_inactive_account'] = 'Esta cuenta de empleado es inactiva ';

# Estimates
$lang['copy_estimate'] = 'Copia de Presupuesto';
$lang['estimate_copied_successfully'] = 'Presupuesto copiada con éxito';
$lang['estimate_copied_fail'] = 'Falló la copia de Presupuesto';

# Tasks
$lang['tasks_view_assigned_to_user'] = 'Tareas asignadas para mi';
$lang['tasks_view_follower_by_user'] = 'Tareas que estoy siguiendo';
$lang['no_tasks_found'] = 'Sin Tareas';

# Leads
$lang['leads_dt_datecreated'] = 'Creado';
$lang['leads_sort_by'] = 'Ordenar por';
$lang['leads_sort_by_datecreated'] = 'Fecha creación';
$lang['leads_sort_by_kanban_order'] = 'Orden de Kan Ban';

# Proposals
$lang['proposal_items_name'] = 'Artículo';
$lang['proposal_items_description'] = 'Descripción';
$lang['proposal_items_qty'] = 'Cantidad';
$lang['proposal_items_rate'] = 'Precio';
$lang['proposal_items_tax'] = 'Impuesto';
$lang['proposal_items_amount'] = 'Valor';

# Authentication
$lang['check_email_for_resetting_password'] = 'Por favor, comprueba tu email para obtener más instrucciones para restablecer la contraseña';
$lang['inactive_account'] = 'Cuenta Inactiva';
$lang['error_setting_new_password_key'] = 'Error de configuración de la nueva contraseña';
$lang['password_reset_message'] = 'Tu contraseña ha sido restablecida. Por favor inicie sesión ahora!';
$lang['password_reset_message_fail'] = 'Error de restablecer tu contraseña. Intente de nuevo.';
$lang['password_reset_key_expired'] = 'La contraseña ha expirado o usuario inválido';
$lang['admin_auth_reset_pass_repeat'] = 'Repita la Contraseña';
$lang['auth_reset_pass_email_not_found'] = 'email no encontrado';
$lang['auth_reset_password_submit'] = 'Restablecer contraseña';

# Settings
$lang['settings_amount_to_words'] = 'Cantidad de Palabras';
$lang['settings_amount_to_words_desc'] = 'Salida de la cantidad total de palabras en la facture / presupuesto';
$lang['settings_amount_to_words_enabled'] = 'Permitir';
$lang['settings_total_to_words_lowercase'] = 'Numero de palabras en minúsculas';
$lang['settings_show_tax_per_item'] = 'Mostrar impuesto por artículo';

# Reports
$lang['report_sales_months_three_months'] = 'Los últimos 3 meses';
$lang['report_invoice_number'] = 'Nº Factura';
$lang['report_invoice_customer'] = 'Cliente';
$lang['report_invoice_date'] = 'Fecha';
$lang['report_invoice_duedate'] = 'Fecha de Vencimiento';
$lang['report_invoice_amount'] = 'Valor';
$lang['report_invoice_amount_with_tax'] = 'Valor con Impuesto';
$lang['report_invoice_amount_open'] = 'Valor Abierto';
$lang['report_invoice_status'] = 'Estado';
$lang['report_invoice_total_amount_with_tax'] = 'Total del Valor con Impuesto';
$lang['report_invoice_total_amount_without_tax'] = 'Total del Valor sin Impuesto';
$lang['report_invoice_total_taxes'] = 'Impuestos';

#Version 1.0.9

# Home stats
$lang['home_stats_by_project_status'] = 'Estadística por Estados de los Proyectos';
$lang['home_invoice_overview'] = 'Resumen de las Facturas';
$lang['home_estimate_overview'] = 'Resumen de los Presupuestos';
$lang['home_proposal_overview'] = 'Resumen de las Propuestas';
$lang['home_lead_overview'] = 'Resumen de Posibles Clientes';
$lang['home_my_projects'] = 'Mis Proyectos';
$lang['home_announcements'] = 'Anuncios';

# Settings
$lang['settings_leads_kanban_limit'] = 'Limites por ventajas de filas de estados por Kan Ban';
$lang['settings_group_misc'] = 'Misc';
$lang['show_projects_on_calendar'] = 'Mostrar proyectos o calendario';
$lang['settings_media_max_file_size_upload'] = 'Tamaño máximo de archivos de carga en los medios de comunicación (MB)';
$lang['settings_client_staff_add_edit_delete_task_comments_first_hour'] = 'Permitir al cliente/personal para agregar/ editar comentarios de tarea sólo en la primera hora (Los administradores no aplican)';

# Email templates
$lang['email_template_only_domain_email'] = 'Solo correo electronico de dominio';

# Announcements
$lang['dismiss_announcement'] = 'Anuncio de despedida';
$lang['dismiss_announcement'] = 'Anuncio de despedida';
$lang['announcement_from'] = 'Desde:';
$lang['announcement_date'] = 'Fecha de publicación: %s';
$lang['announcement_not_found'] = 'Anuncio no encontrado';
$lang['announcements_recents'] = 'Anuncios recientes';

# General
$lang['zip_invoices'] = 'Facturas en Zip';
$lang['zip_estimates'] = 'Presupuestos en Zip';
$lang['zip_payments'] = 'Pagos en Zip';
$lang['setup_help'] = 'Ayuda';
$lang['clients_list_company'] = 'Empresa';
$lang['dt_button_export'] = 'Exportar';

$lang['dt_entries'] = 'Entradas';
$lang['invoice_total_paid'] = 'Total Pagado';
$lang['invoice_amount_due'] = 'Valor a Pagar';
$lang['report_invoice_discount'] = 'Descuentos';

# Calendar
$lang['calendar_project'] = 'Proyecto';

# Leads
$lang['leads_import_assignee'] = 'Comercial';
$lang['customer_from_lead'] = 'Cliente desde %s';
$lang['lead_kan_ban_attachments'] = 'Archivos Adjuntos %s';
$lang['leads_sort_by_lastcontact'] = 'Último Contacto';

# Tasks
$lang['task_comment_added'] = 'Comentario añadido recientemente';
$lang['task_duedate'] = 'Fecha de Vencimiento';
$lang['task_view_comments'] = 'Comentarios';
$lang['task_comment_updated'] = 'Comentario Actualizado';
$lang['task_visible_to_client'] = 'Visible para el cliente';
$lang['task_hourly_rate'] = 'Precio por Hora';
$lang['hours'] = 'Horas';
$lang['seconds'] = 'Segundos';
$lang['minutes'] = 'Minutos';
$lang['task_start_timer'] = 'Iniciar Temporizador';
$lang['task_stop_timer'] = 'Detener Temporizador';
$lang['task_billable_help'] = 'Si marca la tarea facturable se mostrará la hora cuando se creo la factura de artículos';
$lang['task_billable'] = 'Facturable';
$lang['task_billable_yes'] = 'Facturable';
$lang['task_billable_no'] = 'No Facturable';
$lang['task_billed'] = 'Facturada';
$lang['task_billed_yes'] = 'Facturada';
$lang['task_billed_no'] = 'No Facturada';
$lang['task_user_logged_time'] = 'Tiempo registrado:';
$lang['task_total_logged_time'] = 'Total de tiempo registrado:';
$lang['task_is_billed'] = 'Esta tarea es facturada en la facture numero %s';
$lang['task_statistics'] = 'Estadísticas';
$lang['task_milestone'] = 'Hito';

# Tickets
$lang['ticket_message_updated_successfully'] = 'Mensaje actualizado correctamente';

# Invoices
$lang['invoice_task_item_project_tasks_not_included'] = 'Los proyectos de las tareas no están incluidos en esta lista.';
$lang['show_quantity_as'] = 'Mostrar la cantidad como:';
$lang['quantity_as_qty'] = 'Unidad';
$lang['quantity_as_hours'] = 'Horas';
$lang['invoice_table_hours_heading'] = 'Horas';
$lang['bill_tasks'] = 'Tareas Bill';
$lang['invoice_estimate_sent_to_email'] = 'email';

# Estimates
$lang['estimate_table_hours_heading'] = 'Horas';

# General
$lang['is_customer_indicator'] = 'Cliente';
$lang['print']            = 'Imprimir';
$lang['customer_permission_projects']            = 'Proyectos';
$lang['no_timers_found']            = 'No se encontraron temporizadores corriendo';
$lang['timers_started_confirm_logout']            = 'Temporizador de tareas iniciado!<br /><br />¿Está seguro que quiere salir sin detener el temporizador?';
$lang['confirm_logout']            = 'Salir';
$lang['timer_top_started'] = 'Empezó a las %s';

# Projects
$lang['cant_change_billing_type_billed_tasks_found'] = 'No se puede cambiar el tipo de facturación. Tareas facturadas ya encontradas para este proyecto.';
$lang['project_customer_permission_warning'] = 'El sistema indicó que el cliente no tiene el permiso para los proyectos. El cliente no será capaz de ver el proyecto. Considere la posibilidad de añadir el permiso de configuración del perfil del cliente.';
$lang['project_invoice_timesheet_start_time'] = 'Hora de inicio: %s';
$lang['project_invoice_timesheet_end_time'] = 'Hora final: %s';
$lang['project_invoice_timesheet_total_logged_time'] = 'Tiempo de inicio de session: %s';
$lang['project_view_as_client'] = 'Ver el proyecto como cliente';
$lang['project_mark_all_tasks_as_completed'] = 'Marcar todas last areas como completadas y detener todos los temporadizadores (No hay notificaciones enviadas a los miembros del proyecto)';
$lang['project_not_started_status_tasks_timers_found'] = 'Tareas del temporadizador encontrada para este proyecto pero el proyecto no esta con el estado inicio. Recomendar cambiar el estado del proyecto en el progreso';
$lang['project_status'] = 'Estados';
$lang['project_status_1'] = 'No Iniciado';
$lang['project_status_2'] = 'En Desarrollo';
$lang['project_status_3'] = 'En Espera';
$lang['project_status_4'] = 'Finalizado';

$lang['project_file_uploaded_by_customer'] = 'Cliente';
$lang['project_file_dateadded'] = 'Fecha de la Subida';
$lang['project_file_filename'] = 'Nombre del Archivo';
$lang['project_file__filetype'] = 'Tipo del Archivo';
$lang['project_file_visible_to_customer'] = 'Visible para el cliente';
$lang['project_file_uploaded_by'] = 'Subido por';
$lang['edit_project'] = 'Editar Proyecto';
$lang['copy_project'] = 'Copiar Proyecto';
$lang['delete_project'] = 'Borrar Proyecto';
$lang['project_task_assigned_to_user'] = 'Tareas asignadas para ti';
$lang['seconds'] = 'Segundos';
$lang['hours'] = 'Horas';
$lang['minutes'] = 'Minutos';
$lang['project']                 = 'Proyecto';
$lang['project_lowercase']       = 'proyecto';
$lang['projects']                = 'Proyectos';
$lang['projects_lowercase']      = 'proyectos';
$lang['project_settings']      = 'Ajustes del Proyecto';
$lang['project_invoiced_successfully']             = 'Facturas del proyecto con éxito';
$lang['new_project']             = 'Nuevo Proyecto';
$lang['project_files']            = 'Archivos';
$lang['project_activity']            = 'Actividad';
$lang['project_name']            = 'Nombre del Proyecto';
$lang['project_description']            = 'Descripción del Proyecto';
$lang['project_customer']            = 'Cliente';
$lang['project_start_date']            = 'Fecha de Inicio';
$lang['project_datecreated']            = 'Fecha de Creación';
$lang['project_deadline']            = 'Fecha Tope';
$lang['project_billing_type']            = 'Tipo de Facturación';
$lang['project_billing_type_fixed_cost']            = 'Precio fijo';
$lang['project_billing_type_project_hours']            = 'Horas del Proyecto';
$lang['project_billing_type_project_task_hours']            = 'Horas de las tareas';
$lang['project_billing_type_project_task_hours_hourly_rate']            = 'Base de la precio del trabajo por hora';
$lang['project_rate_per_hour']            = 'Precio Hora';
$lang['project_total_cost']            = 'Coste Total';
$lang['project_members']            = 'Miembros del Proyecto';
$lang['project_member_removed']     = 'Miembro del proyecto eliminado correctamente';
$lang['project_overview']           = 'Descripción del proyecto';
$lang['project_gant']            = 'Vista Gantt';
$lang['project_milestones']            = 'Hitos';
$lang['project_milestone_order']            = 'Orden';
$lang['project_milestone_duedate_passed']            = 'La fecha de vencimiento expirada';
$lang['record_timesheet']            = 'Registro de Horas';
$lang['new_milestone']            = 'Nuevo Hito';
$lang['edit_milestone']            = 'Editar Hito';
$lang['milestone_name']            = 'Nombre';
$lang['milestone_due_date']            = 'Fecha de Vencimiento';
$lang['project_milestone']            = 'Hito';
$lang['project_notes']            = 'Notas';
$lang['project_timesheets']            = 'Hoja de Tiempos';
$lang['project_timesheet']            = 'Hoja de Tiempo';
$lang['milestone_total_logged_time']            = 'Tiempo Registrado';
$lang['project_overview_total_logged_hours']            = 'Registro Total de Horas';
$lang['milestones_uncategorized']            = 'Sin Categoría';
$lang['milestone_no_tasks_found']            = 'Sin Tarea';
$lang['project_copied_successfully']            = 'Los datos del proyecto se han copiado correctamente';
$lang['failed_to_copy_project']            = 'No se pudo copiar el proyecto';
$lang['copy_project_task_include_check_list_items']            = 'Copiar puntos de la lista';
$lang['copy_project_task_include_assignees']            = 'Copiar los mismos ejecutivos de ventas';
$lang['copy_project_task_include_followers']            = 'Copiar los mismo seguidores';

$lang['project_days_left']            = 'Dias restantes';
$lang['project_open_tasks']            = 'Tareas Abiertas';
$lang['timesheet_stop_timer']            = 'Detener Temporadizador';
$lang['failed_to_add_project_timesheet_end_time_smaller']            = 'No se pudo agregar las Hoja de Tiempos. La hora de finalizacion es menor que el tiempo de inicio';
$lang['project_timesheet_user']            = 'Miembro';
$lang['project_timesheet_start_time']            = 'Hora de inicio';
$lang['project_timesheet_end_time']            = 'Hora de finalización';
$lang['project_timesheet_time_spend']            = 'Tiempo usado';
$lang['project_timesheet_task']            = 'Tarea';
$lang['project_invoices']                = 'Facturas';
$lang['total_logged_hours_by_staff']            = 'Total de tiempo registrado';
$lang['invoice_project']            = 'Factura del Proyecto';
$lang['invoice_project_info']            = 'Información de la facture del proyecto';
$lang['invoice_project_data_single_line']            = 'Línea Única';
$lang['invoice_project_data_task_per_item']            = 'Tarea por artículo';
$lang['invoice_project_data_timesheets_individually']            = 'Todas las Hoja de Tiempos individual';
$lang['invoice_project_item_name_data']            = 'Nombre del artículo';
$lang['invoice_project_description_data']            = 'Descripción';
$lang['invoice_project_projectname_taskname']            = 'Nombre del proyecto + Nombre de la tarea';
$lang['invoice_project_all_tasks_total_logged_time']            = 'Todas las tareas + tiempo total registrado por tarea';
$lang['invoice_project_project_name_data']            = 'Nombre del proyecto';
$lang['invoice_project_timesheet_individually_data']            = 'Hora de inicio de la Hoja de Tiempo + hora de finalizacion + tiempo total registrado';
$lang['invoice_project_total_logged_time_data']            = 'Tiempo total registrado';

$lang['project_allow_client_to'] = 'Permitir al Cliente %s';
$lang['project_setting_view_task_attachments'] = 'archivos adjuntos de tareas vistas';
$lang['project_setting_view_task_checklist_items'] = 'Lista de tareas vistas del artículo';
$lang['project_setting_upload_files'] = 'Subir Archivos';
$lang['project_setting_view_task_comments'] = 'comentarios de las tareas vistas';
$lang['project_setting_upload_on_tasks'] = 'subir archivos adjuntos a las tareas';
$lang['project_setting_view_task_total_logged_time'] = 'Total del tiempo registrado en tareas vistas';
$lang['project_setting_open_discussions'] = 'discusiones abiertas';
$lang['project_setting_comment_on_tasks'] = 'comentarios sobre last areas del proyecto';
$lang['project_setting_view_tasks'] = 'Tareas Vistas';
$lang['project_setting_view_milestones'] = 'Hitos Vistos';
$lang['project_setting_view_gantt'] = 'Gantt Visto';
$lang['project_setting_view_timesheets'] = 'Hoja de Tiempos vistas';
$lang['project_setting_view_activity_log'] = 'ver registro de actividad';
$lang['project_setting_view_team_members'] = 'ver los miembros del equipo';

$lang['project_discussion_visible_to_customer_yes']                 = 'Visible';
$lang['project_discussion_visible_to_customer_no']                 = 'No Visible';

$lang['project_discussion_posted_on']                 = 'Publicado en %s';
$lang['project_discussion_posted_by']                 = 'Publicado por %s';
$lang['project_discussion_failed_to_delete']                 = 'No se pudo eliminar la discusión';
$lang['project_discussion_deleted']                 = 'La discussion se ha eliminado correctamente';
$lang['project_discussion_no_activity']                 = 'Ningúna actividad';
$lang['project_discussion']                 = 'Discusión';
$lang['project_discussions']                 = 'Discusiones';
$lang['edit_discussion'] = 'Crear Discusión';
$lang['new_project_discussion'] = 'Crear Discusión';
$lang['project_discussion_subject'] = 'Tema';
$lang['project_discussion_description'] = 'Descripción';
$lang['project_discussion_show_to_customer'] = 'Visible para el cliente';
$lang['project_discussion_total_comments'] = 'Comentarios totales';
$lang['project_discussion_last_activity'] = 'Ultima actividad';
$lang['discussion_add_comment'] = 'Agregar Comentario';
$lang['discussion_newest'] = 'El mas Reciente';
$lang['discussion_oldest'] = 'El mas Antiguo';
$lang['discussion_attachments'] = 'Archivos Adjuntos';
$lang['discussion_send'] = 'Enviar';
$lang['discussion_reply'] = 'Respuesta';
$lang['discussion_edit'] = 'Editar';
$lang['discussion_edited'] = 'Modificar';
$lang['discussion_you'] = 'Tu';
$lang['discussion_save'] = 'Guardar';
$lang['discussion_delete'] = 'Borrar';
$lang['discussion_view_all_replies'] = 'Enseñar todas las respuestas';
$lang['discussion_hide_replies'] = 'Ocultar respuestas';
$lang['discussion_no_comments'] = 'Ningún comentario';
$lang['discussion_no_attachments'] = 'Ningún archivo adjunto';
$lang['discussion_attachments_drop'] = 'Arrastrar y soltar para cargar el archivo';
$lang['project_note'] = 'Nota';
$lang['project_note_private'] = 'Notas Privadas';
$lang['project_save_note'] = 'Guardar Nota';

# Project Activity
$lang['project_activity_created'] = 'Proyecto Creado';
$lang['project_activity_updated'] = 'Proyecto Actualizado';
$lang['project_activity_removed_team_member'] = 'Miembro del equipo eliminado';
$lang['project_activity_added_team_member'] = 'Nuevo miembro del equipo agregado';
$lang['project_activity_marked_all_tasks_as_complete'] = 'Marcadas todas las tareas como completas';
$lang['project_activity_recorded_timesheet'] = 'Factura registrada';
$lang['project_activity_task_name'] = 'Tarea:';
$lang['project_activity_deleted_discussion'] = 'Eliminar Discusión';
$lang['project_activity_created_discussion'] = 'Discusión creada';
$lang['project_activity_updated_discussion'] = 'Discusión actualizada';
$lang['project_activity_commented_on_discussion'] = 'Observación de la discusión';
$lang['project_activity_deleted_discussion_comment'] = 'Observación de la discussion eliminada';
$lang['project_activity_deleted_milestone'] = 'Hitos eliminados';
$lang['project_activity_updated_milestone'] = 'Actualización de hito';
$lang['project_activity_created_milestone'] = 'Nuevo hito creado';
$lang['project_activity_invoiced_project'] = 'Proyecto facturado';
$lang['project_activity_task_marked_complete'] = 'Tarea marcada como completa';
$lang['project_activity_task_unmarked_complete'] = 'Tarea desmarcada como completa';
$lang['project_activity_task_deleted'] = 'Tarea Eliminada';
$lang['project_activity_new_task_comment'] = 'Tarea comentada en';
$lang['project_activity_new_task_attachment'] = 'Archivos adjuntos cargados en la tarea';
$lang['project_activity_new_task_assignee'] = 'Nuevo ejecutivo de tarea añadido';
$lang['project_activity_task_assignee_removed'] = 'Cesonario de tarea eliminado';
$lang['project_activity_task_timesheet_deleted'] = 'Factura eliminada';
$lang['project_activity_uploaded_file'] = 'Subir archivo del proyecto';
$lang['project_activity_status_updated'] = 'Subir estado del proyecto';
$lang['project_activity_visible_to_customer'] = 'Visible para el cliente';
$lang['project_activity_project_file_removed'] = 'Archivo del proyecto eliminado';

# Notifications - DEPRECED - THESE notifications are depreced and will be removed in further released dont translate them
$lang['not_customer_uploaded_project_file'] = 'Nuevo Archivo Cargado';
$lang['not_customer_created_new_project_discussion'] = 'Nueva discusión creada del proyecto';
$lang['not_customer_commented_on_project_discussion'] = 'Nuevo comentario en la discusión del proyecto';

# Customers area
$lang['clients_my_estimates'] = 'Mis Presupuestos';
$lang['client_no_reply'] = 'Sin Respuesta';
$lang['clients_nav_projects'] = 'Proyectos';
$lang['clients_my_projects'] = 'Mis Proyectos';
$lang['client_profile_image'] = 'Imagen de Perfil';

/////
$lang['sales_report_cancelled_invoices_not_included'] = 'Facturas canceladas no están incluídas en el Informe';
$lang['invoices_merge_cancel_merged_invoices'] = 'Marcar las facturas como canceladas en vez de eliminarla';
$lang['invoice_marked_as_cancelled_successfully'] = 'Facturas marcadas como canceladas exitosamente';
$lang['invoice_unmarked_as_cancelled'] = 'Facturas marcadas como no-canceladas exitosamente.';
$lang['tasks_reminder_notification_before_help'] = 'Avisar a los empleados asignados sobre sus tareas a X días antes de su fecha límite. La notificación de correo es solo enviado al empleado asignado.';
$lang['tasks_reminder_notification_before'] = 'Recordatorio de fecha tope de la Tarea (Días)';
$lang['not_task_deadline_reminder'] = 'Recordatorio de fecha tope de Tareas';
$lang['dt_length_menu_all'] = 'Todo';
$lang['task_not_finished'] = 'No Terminada';
$lang['task_billed_cant_start_timer'] = 'Tarea facturado. El temporizador no puede ser iniciado.';
$lang['invoice_task_billable_timers_found'] = 'Temporizadores iniciadas encontrados';
$lang['project_timesheet_not_updated'] = 'Hoja de horas no ha sido afectada';
$lang['project_invoice_task_no_timers_found'] = 'No se han encontrado para esta tarea temporizadores';
$lang['invoice_project_tasks_not_started'] = 'No ha empezado | Fecha Inicio: %s';
$lang['invoice_project_see_billed_tasks'] = 'Ver las tareas que serán facturados en la factura actual';
$lang['invoice_project_all_billable_tasks_marked_as_finished'] = 'Todas las tareas facturados serán marcados como completadas';
$lang['invoice_project_nothing_to_bill'] = 'No hay tareas para facturar. Siéntase libre de añadir lo que quieras en las posiciones de factura.';
$lang['invoice_project_start_date_tasks_not_passed'] = 'Las tareas con fecha de inicio en el futuro no se pueden facturar';
$lang['invoice_project_stop_all_timers'] = 'Detener todos los temporizadores';
$lang['invoice_project_stop_billable_timers_only'] = 'Detener los temporizadores facturables';
$lang['project_tasks_total_timers_stopped'] = 'Total de temporizadores detenidos %s';
$lang['project_invoice_timers_started'] = 'Temporizadores activos en tareas facturables, no permitirá crear una factura. Favor de detener el temporizador para crear la factura.';
$lang['task_start_timer_only_assignee'] = 'Tienes que estar asignado a esta tarea para poder iniciar un Temporizador!';
$lang['task_comments'] = 'Comentarios';
$lang['invoice_total_tax'] = 'Impuesto Total';
$lang['estimates_total_tax'] = 'Impuesto Total';
$lang['report_invoice_total_tax'] = 'Impuesto Total';
$lang['home_tickets'] = 'Tickets';
$lang['home_project_activity'] = 'Actividad de los Proyectos';
$lang['home_project_activity_not_found'] = 'No se encontraron actividades en los proyectos';
$lang['view_tracking'] = 'Verificación Vistas';
$lang['view_date'] = 'Fecha';
$lang['view_ip'] = 'Dirección IP';
$lang['article_total_views'] = 'Total Vistas';
$lang['leads_source'] = 'Fuente';
$lang['invoices_available_for_merging'] = 'Facturas disponible para combinar';
$lang['invoices_merge_discount'] = 'Usted tendrá que aplicar el descuento del total manualmente a la factura %s';
$lang['invoice_merge_number_warning'] = 'La combinación de facturas creará lagunas en los números de factura. Por favor, si no quieres lagunas en su historial de facturas, no combines facturas. Nota: También tienes la opción de ajustar manualmente los números de factura si desea llenar los vacíos.';
$lang['invoice_mark_as'] = 'Marcar como %s';
$lang['invoice_unmark_as'] = 'Desmarcar como %s';
$lang['invoice_status_cancelled'] = 'Canceladas';
$lang['tasks_reminder_notification_before_help'] = 'Notificar a los usuarios asignados a tareas X días antes de la fecha tope. La notificación/correo solo se envía al usuario asignado.';

# Version 1.1.0
$lang['project_invoice_select_all_tasks'] = 'Seleccionar todas las tareas';
$lang['lead_company'] = 'Empresa';

# Version 1.1.1
$lang['admin_auth_forgot_password_button'] = 'Confirmar';
$lang['task_assigned'] = 'Asignar a';
$lang['switch_to_pipeline'] = 'Visualizar como pipeline';
$lang['switch_to_list_view'] = 'Visualizar como lista';
$lang['estimates_pipeline'] = 'Pipeline Presupuestos';
$lang['estimates_pipeline_sort'] = 'Ordenar por';
$lang['estimates_sort_expiry_date'] = 'Fecha vencimiento';
$lang['estimates_sort_pipeline'] = 'Orden del Pipeline';
$lang['estimates_sort_datecreated'] = 'Fecha creación';
$lang['estimates_sort_estimate_date'] = 'Fecha estimada';
$lang['estimate_set_reminder_title'] = 'Programar recordatorio de presupuesto';
$lang['invoice_set_reminder_title'] = 'Programar recordatorio de Factura';
$lang['estimate_reminders'] = 'Recordatorio';
$lang['invoice_reminders'] = 'Recordatorio';
$lang['estimate_notes'] = 'Notas';
$lang['estimate_add_note'] = 'Agregar notas';
$lang['dropdown_non_selected_tex'] = 'Nada seleccionado';
$lang['auto_close_ticket_after'] = 'Automáticamente cerrar el ticket Después de (Horas)';
$lang['event_description'] = 'Descripción';
$lang['delete_event'] = 'Eliminar';
$lang['not_new_ticket_created'] = 'Nuevo Ticket creado pata tu departamento - %s';
$lang['receive_notification_on_new_ticket'] = 'Recibir notificaciones de tickets nuevos';
$lang['receive_notification_on_new_ticket_help'] = 'Todos los empleados que pertenezcan al departamento van a recibir una notificación';
$lang['event_updated'] = 'Evento actualizado exitosamente';
$lang['customer_contacts'] = 'Contactos';
$lang['new_contact'] = 'Nuevo Contacto';
$lang['contact'] = 'Contacto';
$lang['contact_lowercase'] = 'contacto';
$lang['contact_primary'] = 'Contacto Principal';
$lang['contact_position'] = 'Posición/Cargo';
$lang['contact_active'] = 'Activo';
$lang['client_company_info'] = 'Detalles de la Empresa';
$lang['proposal_save'] = 'Guardar Propuesta';
$lang['calendar'] = 'Calendario';
$lang['settings_pdf'] = 'PDF';
$lang['settings_pdf_font'] = 'Fuente PDF';
$lang['settings_pdf_table_heading_color'] = 'Los productos encabezamiento de la tabla de colores';
$lang['settings_pdf_table_heading_text_color'] = 'Los productos encabezamiento de la tabla de color de texto';
$lang['settings_pdf_font_size'] = 'Tamaño de letra predeterminado';
$lang['proposal_status_draft'] = 'Borrador';
$lang['custom_field_contacts'] = 'Contactos';
$lang['company_primary_email'] = 'Email Principal';
$lang['client_register_contact_info'] = 'Información del contacto principal';
$lang['client_register_company_info'] = 'Datos de la compañía';
$lang['contact_permissions_info'] = 'Asegúrese de establecer los permisos apropiados para este contacto';
$lang['default_leads_kanban_sort'] = 'Default leads Kan Ban Sort';
$lang['default_leads_kanban_sort_type'] = 'Ordenar por';
$lang['order_ascending'] = 'Ascendente';
$lang['order_descending'] = 'Descendente';
$lang['calendar_expand'] = 'expandir';
$lang['proposal_reminders'] = 'Recordatorios';
$lang['proposal_set_reminder_title'] = 'Programar recordatorio de la propuesta';
$lang['settings_allowed_upload_file_types'] = 'Tipos de archivos permitidos';
$lang['no_primary_contact'] = 'Este cliente no tienen contacto principal. Necesita configurar por lo menos un contacto principal para el cliente. Se recomienda que todos los clientes tengan contactos primarios.';
$lang['leads_merge_customer'] = 'Los campos personalizados que se fusionan';
$lang['leads_merge_contact'] = 'Campos de contactos que se fusionan';
$lang['leads_merge_as_contact_field'] = 'Combinar como campo de contacto';
$lang['lead_convert_to_client_phone'] = 'Teléfono';
$lang['invoice_status_report_all'] = 'Todos';
$lang['import_contact_field'] = 'Campo de Contacto';

$lang['file_uploaded_success'] = 'No hay error, el archivo cargó exitosamente';
$lang['file_exceeds_max_filesize'] = 'El archivo subido excede la directiva upload_max_filesize';
$lang['file_exceeds_maxfile_size_in_form'] = 'El archivo subido excede la directiva MAX_FILE_SIZE que se especificó en el formulario HTML';
$lang['file_uploaded_partially'] = 'El archivo subido se ha subido sólo parcialmente';
$lang['file_not_uploaded'] = 'No se cargó ningún archivo';
$lang['file_missing_temporary_folder'] = 'Falta una carpeta temporal';
$lang['file_failed_to_write_to_disk'] = 'No se ha podido escribir el archivo en el disco.';
$lang['file_php_extension_blocked'] = 'Una extensión de PHP detuvo la subida del archivo.';
$lang['calendar_expand'] = 'Expandir';
$lang['view_pdf'] = 'Ver PDF';
$lang['expense_repeat_every'] = 'Repite cada';

# Version 1.1.2
$lang['leads_switch_to_kanban'] = 'Visualizar como kan ban';
$lang['survey_no_questions'] = 'Esta encuesta no contiene preguntas.';
$lang['survey_submit'] = 'Enviar';
$lang['contract_content'] = 'Contrato';
$lang['contract_save'] = 'Guardar Contrato';
$lang['contract_send_to_email'] = 'Enviar por Email';
$lang['contract_send_to_client_modal_heading'] = 'Enviar Contrato por Correo';
$lang['contract_send_to'] = 'Enviar a';
$lang['contract_send_to_client_attach_pdf'] = 'Agregar PDF';
$lang['contract_send_to_client_preview_template'] = 'Vista previa de plantilla de email';
$lang['include_attachments_to_email'] = 'Incluir archivos adjuntos al email';
$lang['contract_sent_to_client_success'] = 'El contrato se ha enviado al cliente';
$lang['contract_sent_to_client_fail'] = 'hubo un error al enviar el contrato';

# Version 1.1.3
$lang['client_invalid_username_or_password'] = 'usuario o contraseña invalido';
$lang['client_old_password_incorrect']     = 'Su antigua contraseña es incorrecta';
$lang['client_password_changed']          = 'Su contraseña ha sido cambiada';

# Version 1.1.4
$lang['total_leads_deleted'] = 'Total de Contactos eliminados: %s';
$lang['total_clients_deleted'] = 'Total de clientes eliminados: %s';
$lang['confirm_action_prompt'] = 'Estás seguro de querer realizar ésta acción?';
$lang['mass_delete'] = 'Eliminación Masiva';
$lang['email_protocol'] = 'Protocolo de Email';
$lang['add_edit_members'] = 'Agregar/Editar Miembro';
$lang['project_overview_logged_hours'] = 'Horas Registradas:';
$lang['project_overview_billable_hours'] = 'Horas Facturables:';
$lang['project_overview_billed_hours'] = 'Horas Facturadas:';
$lang['project_overview_unbilled_hours'] = 'Horas no facturadas:';
$lang['calendar_first_day'] = 'Primer Día';
$lang['permission_view'] = 'Ver';
$lang['permission_edit'] = 'Editar';
$lang['permission_create'] = 'Crear';
$lang['permission_delete'] = 'Eliminar';
$lang['permission'] = 'Permiso';
$lang['permissions'] = 'Permisos';
$lang['proposals_pipeline'] = 'Pipeline Propuestas';
$lang['proposals_pipeline_sort'] = 'Ordenar por';
$lang['proposals_sort_open_till'] = 'Valido Hasta';
$lang['proposals_sort_pipeline'] = 'Orden del Pipeline';
$lang['proposals_sort_datecreated'] = 'Fecha Creada';
$lang['proposals_sort_proposal_date'] = 'Fecha Propuesta';
$lang['is_not_staff_member'] = 'No miembro del personal';
$lang['lead_created'] = 'Contacto Creado';
$lang['access_tickets_to_none_staff_members'] = 'Permitir acceso a los tickets a personas que no son parte del personal.';
$lang['project_expenses'] = 'Gastos';
$lang['expense_currency'] = 'Moneda';
$lang['currency_valid_code_help'] = 'Asegúrese de introducir el código de moneda válida.';
$lang['week'] = 'Semana';
$lang['weeks'] = 'Semanas';
$lang['month'] = 'Més';
$lang['months'] = 'Meses';
$lang['year'] = 'Año';
$lang['years'] = 'Años';
$lang['expense_report_category'] = 'Categoría';
$lang['expense_paid_via'] = 'Pago realizado por %s';
$lang['item_as_expense'] = '[Gasto]';
$lang['show_help_on_setup_menu'] = 'Mostrar el menú de ayuda.';
$lang['customers_summary_total'] = 'Total de Clientes';
$lang['filter_by'] = 'Filtrar por';
$lang['re_captcha'] = 'reCAPTCHA';
$lang['recaptcha_site_key'] = 'Site key';
$lang['recaptcha_secret_key'] = 'Secret key';
$lang['recaptcha_error'] = 'Favor de completar la sección del reCAPTCHA.';
$lang['smtp_username'] = 'SMTP Username';
$lang['smtp_username_help'] = 'Fill only if your email client use username for SMTP login.';
$lang['pinned_project']= 'Proyecto Pinned';
$lang['pin_project']= 'Pin Project';
$lang['unpin_project']= 'Unpin Project';
$lang['smtp_encryption']= 'Email Encryption';
$lang['smtp_encryption_none']= 'Nada';
$lang['show_proposals_on_calendar']= 'Propuestas';
$lang['invoice_project_see_billed_expenses']= 'Ver gastos que serán facturados en esta factura';
$lang['project_overview_expenses'] = 'Total Gastos';
$lang['project_overview_expenses_billable'] = 'Gastos Facturables';
$lang['project_overview_expenses_billed'] = 'Gastos Facturados';
$lang['project_overview_expenses_unbilled'] = 'Gastos sin facturar';
$lang['announcement_date_list'] = 'Fecha';
$lang['project_setting_view_finance_overview'] = 'Ver Resumen Financiero';
$lang['show_all_tasks_for_project_member'] = 'Permitir todo el personal a visualizar todas las tareas relacionadas con éste proyecto. (Esto incluye usuarios que no son parte del personal.)';
$lang['not_staff_added_as_project_member'] = 'Te acaba de agregar como un miembro del projecto';
$lang['report_expenses_base_currency_select_explanation'] = 'Tienes que elegir un tipo de moneda, pues el sistema encontró que se está utilizando varios tipos de moneda con relación a gastos.';

# Version 1.1.6
$lang['project_activity_recorded_expense'] = 'Gasto Registrado';
$lang['save_customer_and_add_contact'] = 'Guardar y Crear Contacto';
$lang['tickets_chart_weekly_opening_stats'] = 'Estadísticas Semanal';
$lang['related_knowledgebase_articles'] = 'Articulos Relacionados';
$lang['detailed_overview'] = 'Detalles de Tareas';
$lang['tasks_total_checklists_finished'] = 'Total de artículos marcados como lista de verificación completada';
$lang['tasks_total_added_attachments'] = 'Total de archivos adjuntos agregados';
$lang['tasks_total_comments'] = 'Total de comentarios';
$lang['task_finished_on_time'] = 'Terminado a tiempo?';
$lang['task_finished_on_time_indicator'] = 'Si';
$lang['task_not_finished_on_time_indicator'] = 'No';
$lang['task_filter_fetch_month_by'] = 'Buscar por Mes';
$lang['filter'] = 'Filtrar';
$lang['task_filter_detailed_all_months'] = 'Todos los Meses';
$lang['kb_article_slug'] = 'Slug';

# Version 1.1.7
$lang['email_template_ticket_warning'] = 'If ticket is imported with email piping and the contact does not exists in the CRM the fields wont be replaced.';
$lang['auto_stop_tasks_timers_on_new_timer'] = 'Detener todos los demás temporizadores para iniciar un nuevo temporizador.';
$lang['notification_when_customer_pay_invoice'] = 'Recibir notificación cuando un cliente hace un pago. (built-in)';
$lang['not_invoice_payment_recorded'] = 'Nuevo Pago de Factura - %s';
$lang['email_template_contact_warning'] = 'If contact is not logged while making action the contact merge fields wont be replaced.';
$lang['theme_style'] = 'Estilo del Tema';
$lang['change_role_permission_warning'] = 'Changing role permissions now wont affected current staff members permissions that are using this role.';
$lang['task_copied_successfully'] = 'Tarea copiada exitosamente';
$lang['failed_to_copy_task'] = 'Error al copiar la tarea';
$lang['not_project_file_uploaded'] = 'Nuevo archivo agregado al proyecto';
$lang['settings_calendar_color'] = '%s Color';
$lang['settings_calendar_colors_heading'] = 'Estilo';
$lang['reminder'] = 'Recordatorio';
$lang['back_to_tasks_list'] = 'Volver atrás a lista de tareas';
$lang['copy_task_confirm'] = 'Confirmar';
$lang['changing_items_affect_warning'] = 'Cambiando la información del articulo no afectará a las facturas/sresupuestos ya creadas.';
$lang['tax_is_used_in_expenses_warning'] = 'No puedes actualizar este el monto del impuesto porque existen transacciones con este valor.';
$lang['note'] = 'Nota';
$lang['leads_staff_report_converted'] = 'Total de Contactos Convertidos';
$lang['leads_staff_report_created'] = 'Total de Contactos Creados';
$lang['leads_staff_report_lost'] = 'Total de Contactos Perdidos';
$lang['client_go_to_dashboard'] = 'Atrás a la portal';
$lang['show_estimate_reminders_on_calendar'] = 'Recordatorio de Estimación';
$lang['show_invoice_reminders_on_calendar'] = 'Recordatorio de Factura';
$lang['calendar_estimate_reminder'] = 'Recordatorio de Estimación';
$lang['calendar_invoice_reminder'] = 'Recordatorio de Factura';
$lang['show_proposal_reminders_on_calendar'] = 'Recordatorio de Propuesta';
$lang['calendar_proposal_reminder'] = 'Recordatorio de Propuesta';
$lang['proposal_due_after']= 'Propuesta vence Después de (días)';
$lang['project_progress']= 'Progreso';
$lang['calculate_progress_through_tasks']= 'Calcular el progreso a través de tareas';
$lang['allow_customer_to_change_ticket_status']= 'Permitir que los clientes cambién los estados de los tickets utilizando su portal';
$lang['switch_to_general_report']= 'Visualizar Informe del Personal';
$lang['switch_to_staff_report']= 'Visualizar Informe General';
$lang['generate']= 'Generar';
$lang['from_date']= 'Desde la Fecha';
$lang['to_date']= 'Hasta la Fecha';
$lang['not_results_found']= 'No se encontraron resultados';
$lang['lead_lock_after_convert_to_customer']= 'No Permitir editar los Contactos después de hacer sido convertido a cliente (no le aplica a los admins)';
$lang['default_pipeline_sort'] = 'Sorteo por defecto';
$lang['not_goal_message_failed'] = 'No logramos alcanzar la meta!<br /> Tipo Meta: %s
<br />Logro de los Objetivos: %s
<br />Rendimiento Total: %s
<br />Fecha Inicio: %s
<br />Fecha Fin: %s';
$lang['toggle_full_view'] = 'Ver vista grande';
$lang['not_estimate_invoice_deleted'] = 'eliminó la factura creada';
$lang['not_task_new_comment'] = 'comento en la tarea %s';
# Version 1.1.8
$lang['invoice_number_exists'] = 'Este número de factura existe para el año en curso.';
$lang['estimate_number_exists'] = 'Este número de estimación exist para el año en curso.';
$lang['email_exists'] = 'Email ya enviado';
$lang['not_uploaded_project_file'] = 'Nuevo archivo cargado';
$lang['not_created_new_project_discussion'] = 'Nueva conversación de proyecto creada';
$lang['not_commented_on_project_discussion'] = 'Nuevo comentario en una conversación de proyecto';
$lang['all_staff_members'] = 'Todos los Empleados';
$lang['help_project_permissions'] = 'VIEW allows staff member to see ALL projects. If you only want them to see projects they are assigned (added as members), do not give VIEW permissions.';
$lang['help_tasks_permissions'] = 'VIEW allows staff member to see ALL tasks. If you only want them to see tasks they are assigned to or following, do not give VIEW permissions.';
$lang['expense_recurring_days'] = 'Día(s)';
$lang['expense_recurring_weeks'] = 'Semana(s)';
$lang['expense_recurring_months'] = 'Mes(es)';
$lang['expense_recurring_years'] = 'Año(s)';
$lang['reset_to_default_color'] = 'Reset to default color';
$lang['pdf_logo_width'] = 'Logo Width (PX)';
$lang['drop_files_here_to_upload'] = 'Dejar caer archivo aqui para cargar';
$lang['browser_not_support_drag_and_drop'] = 'Tu navegador no soporte la opción de dejar caer archivo para cargar.';
$lang['remove_file'] = 'Eliminar Archivo';
$lang['you_can_not_upload_any_more_files'] = 'Ya no puedes cargars archivos.';
$lang['custom_field_only_admin'] = 'Restrict visibility for administrators only';
$lang['leads_default_source'] = 'Fuente por defecto';
$lang['clear_activity_log'] = 'Limpiar el log';
$lang['default_contact_permissions'] = 'Permisos de contacto por defecto';
$lang['invoice_activity_marked_as_cancelled'] = 'marcar factura como cancelada';
$lang['invoice_activity_unmarked_as_cancelled'] = 'Desmarcar factura como cancelada';
$lang['wait_text'] = 'Por favor espere...';
$lang['projects_summary'] = 'Resumen de Proyectos';
$lang['dept_imap_host'] = 'IMAP Host';
$lang['dept_encryption'] = 'Encryption';
$lang['dept_email_password'] = 'Contraseña';
$lang['dept_email_no_encryption'] = 'No Encryption';
$lang['failed_to_decrypt_password'] = 'Failed to decrypt password';
$lang['delete_mail_after_import'] = 'Delete mail after import?';
$lang['expiry_reminder_enabled'] = 'Enviar recordatorio de expiración';
$lang['send_expiry_reminder_before'] = 'Enviar recordatorio de expiración antes (Días)';
$lang['not_expiry_reminder_sent'] = 'Notificación de Recordatorio de Expiración enviada';
$lang['send_expiry_reminder'] = 'Recordatorio de caducidad enviado';
$lang['sent_expiry_reminder_success'] = 'Recordatorio de caducidad enviado con éxito';
$lang['sent_expiry_reminder_fail'] = 'Error al enviar recordatorio de expiración';
$lang['leads_default_status'] = 'estados por defecto';
$lang['item_description_placeholder'] = 'Descripción';
$lang['item_long_description_placeholder'] = 'Descripción Larga';
$lang['item_quantity_placeholder'] = 'Cantidad';
$lang['item_rate_placeholder'] = 'Calificar';
$lang['tickets_summary'] = 'Resumen de Tickets';
$lang['tasks_list_priority'] = 'Prioridad';
$lang['ticket_status_db_2'] = 'En Progreso';
$lang['ticket_status_db_1'] = 'Abierto';
$lang['ticket_status_db_3'] = 'Contestado';
$lang['ticket_status_db_4'] = 'En Espera';
$lang['ticket_status_db_5'] = 'Cerrado';
$lang['ticket_priority_db_1'] = 'Bajo';
$lang['ticket_priority_db_2'] = 'Medio';
$lang['ticket_priority_db_3'] = 'Alto';
$lang['customer_have_projects_by'] = ' %s';
$lang['customer_have_proposals_by'] = ' %s';
$lang['do_not_redirect_payment'] = 'No me envie al procesador de pagos';
$lang['project_tickets'] = 'Tickets';
$lang['invoice_report'] = 'Informe de Facturas';
$lang['payment_modes_report'] = 'Métodos de Pagos (transacciones)';
$lang['customer_admins'] = 'Comercial';
$lang['assign_admin'] = 'Asignar Comercial';
$lang['customer_admin_date_assigned'] = 'Fecha Asignada';
$lang['customer_admin_login_as_client_message'] = 'Hola %s. Te hemos agregado como ejecutivo de cuentas a este cliente.';
$lang['ticket_form_validation_file_size'] = 'Tamaño del archivo debe ser menor de %s';
$lang['has_transactions_currency_base_change'] = 'Cambio de la moneda base es posible sólo si no hay operaciones registradas en esa moneda. Eliminar las operaciones para cambiar la moneda base.';
$lang['customers_sort_all'] = 'Todos';

# Version 1.1.9
$lang['use_recaptcha_customers_area'] = 'Allow recaptcha on customers area (Login/Register)';
$lang['project_marked_as_finished'] = 'Proyecto completado';
$lang['project_status_updated'] = 'Estado del Proyecto actualizado';
$lang['remove_decimals_on_zero'] = 'Remove decimals on numbers/money with zero decimals (2.00 will become 2, 2.25 will stay 2.25)';
$lang['remove_tax_name_from_item_table'] = 'Remove the tax name from item table row';

# Version 1.2.0
$lang['not_billable_expenses_by_categories'] = 'No facturables gastos por categorías';
$lang['billable_expenses_by_categories'] = 'Los gastos facturables por categorías';
$lang['format_letter_size'] = 'A4 Landscape';
$lang['pdf_formats'] = 'Formatos de Documentos';
$lang['swap_pdf_info'] = 'Swap Company/Customer Details (company details to right side, customer details to left side)';
$lang['invoice_estimate_pdf_text_color'] = 'Invoice/Estimate text color';
$lang['expenses_filter_by_categories'] = 'Por Categorías';
$lang['task_copy'] = 'Copiar';
$lang['estimate_status'] = 'Estados';
$lang['expenses_report_exclude_billable'] = 'Excluir Gastos Facturables';
$lang['expenses_total'] = 'Total';
$lang['estimate_activity_added_attachment'] = 'Added attachment';
$lang['show_to_customer'] = 'Mostrar al cliente';
$lang['hide_from_customer'] = 'Ocultar al cliente';
$lang['expenses_report_total'] = 'Total';
$lang['expenses_report'] = 'Informe de Gastos';
$lang['expenses_report_tax'] = 'Impuesto';
$lang['expenses_report_total_tax'] = 'Total Impuesto';
$lang['expenses_detailed_report'] = 'Informe Detallado';
$lang['expense_not_billable'] = 'No Facturable';
$lang['notification_settings'] = 'Configuración de las notificaciones';
$lang['staff_with_roles'] = 'Personal con roles';
$lang['specific_staff_members'] = 'Personal Específico';
$lang['proposal_mark_as'] = 'Marcar como %s';
$lang['kb_report_total_answers'] = 'Total';
$lang['ticket_message_edit'] = 'Editar';
$lang['invoice_files'] = 'Archivos de Facturas';
$lang['estimate_files'] = 'Archivos de Presupuestos';
$lang['proposal_files'] = 'Archivos de Propuestas';
$lang['invoices_awaiting_payment'] = 'Facturas por cobrar';
$lang['tasks_not_finished'] = 'Tareas sin completar';
$lang['outstanding_invoices'] = 'Facturas Pendientes';
$lang['past_due_invoices'] = 'Facturas Vencidas';
$lang['paid_invoices'] = 'Facturas Pagadas';
$lang['invoice_estimate_year'] = 'Año';
$lang['no_results_text_search_dropdown'] = 'No se encontraron resultados';
$lang['task_stats_logged_hours'] = 'Horas Registradas';
$lang['leads_converted_to_client'] = 'Contactos Convertidos';
$lang['task_assigned_from'] = 'Esta tarea fue asignada a ti por parte de %s';
$lang['auto_check_for_new_notifications'] = 'Auto check for new notifications (Seconds - Set 0 to disable)';
$lang['recurring_ends_on'] = 'Termina en (Leave blank for never)';
$lang['new_note'] = 'Crear Nota';
$lang['my_tickets_assigned'] = 'Tickets asignados a mí';
$lang['filter_by_assigned'] = 'Por Personal Asignado';
$lang['staff_stats_total_logged_time'] = 'Tiempo Total Registrado';
$lang['staff_stats_last_month_total_logged_time'] = 'Tiempo Total Registrado Mes Anterior';
$lang['staff_stats_this_month_total_logged_time'] = 'Tiempo Total Registrado Mes Actual';
$lang['staff_stats_last_week_total_logged_time'] = 'Tiempo Total Registrado Semana Anterior';
$lang['staff_stats_this_week_total_logged_time'] = 'Tiempo Total Registrado Semana Actual';
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
$lang['milestone_description'] = 'Descripción';
$lang['description_visible_to_customer'] = 'Mostrar descripción al cliente';
$lang['upcoming_tasks'] = 'Las tareas próximas';
$lang['paymentmethod_two_checkout_account_number'] = 'Account Number (Seller ID)';
$lang['paymentmethod_two_checkout_private_key'] = 'Private Key';
$lang['paymentmethod_two_checkout_publishable_key'] = 'Publishable Key';
$lang['payment_credit_card_number'] = 'Card Number';
$lang['payment_credit_card_expiration_date'] = 'Expiration Date';
$lang['payment_billing_email'] = 'Email';
$lang['payment_billing_name'] = 'Billing Name';
$lang['submit_payment'] = 'Enviar Pago';
$lang['2checkout_notice_payment'] = 'Credit card details are processed via secure token provided from 2Checkout';
$lang['2checkout_usage_notice'] = 'SSL is required if you\'re using the 2Checkout payment API. It is required to safely call the tokenization and authorizations. The system will function without SSL, however, this will place you out of compliance, which risks deactivation of your API permissions.';
$lang['custom_field_disallow_customer_to_edit'] = 'No permitir al cliente para editar este campo';
$lang['project_due_notice'] = 'Este proyecto esta atrasado por %s días';
$lang['not_lead_added_attachment'] = 'agregó un nuevo archivo al Contacto %s';
$lang['lead_note_date_added'] = 'Nota agregada: %s';
$lang['recurring_custom'] = 'Personalizado';
// Dont translate these, only added for better readibility already translated for the expenses custom recurring feature.
$lang['invoice_recurring_months'] = $lang['expense_recurring_months'];
$lang['invoice_recurring_years'] = $lang['expense_recurring_years'];
$lang['invoice_recurring_days'] = $lang['expense_recurring_days'];
$lang['invoice_recurring_weeks'] = $lang['expense_recurring_weeks'];

# Version 1.2.4
$lang['document_direction'] = 'Tipo Lectura';
$lang['notify_project_members_status_change'] = 'Notificar a los miembros del proyecto que se cambió el estado del proyecto';
$lang['not_project_status_updated'] = 'El estado del proyecto cambio de %s a %s';
$lang['ticket_not_found'] = 'Ticket no encontrado';
$lang['project_not_found'] = 'Proyecto no encontrado';
$lang['export_project_data'] = 'Exportar data del proyecto';
$lang['total_project_members'] = 'Total de Miembros en el Proyecto';
$lang['total_project_files'] = 'Archivos adjuntos';
$lang['total_project_discussions_created'] = 'Discusiones creadas';
$lang['project_member'] = 'Miembro';
$lang['total_project_discussions_comments'] = 'Total de comentarios del proyecto';
$lang['staff_total_task_assigned'] = 'Total tareas asignadas';
$lang['staff_total_comments_on_tasks'] = 'Comentarios de Tareas';
$lang['project_members_overview'] = 'Visión general de los miembros del proyecto';
$lang['project_milestones_overview'] = 'Resumen de los hitos';
$lang['total_tasks_in_milestones'] = 'Total de tareas asignadas';
$lang['total_task_members_assigned'] = 'Total miembros asignados';
$lang['total_task_members_followers'] = 'Total seguidores';
$lang['total_milestones'] = 'Total Hitos';
$lang['total_project_worked_days'] = 'Total de días trabajados';
$lang['finance_overview'] = 'Resumen Financiero';
$lang['project_custom_fields'] = 'Campos Personalizados';
$lang['total_tickets_related_to_project'] = 'Total de tickets vinculado a un proyecto';
$lang['projects_total_invoices_created'] = 'Total de Facturas creadas';
$lang['total_invoiced_amount'] = 'Total de Facturas creadas';
$lang['do_not_send_invoice_payment_email_template_contact'] = 'No enviar correo de pago registrado al cliente.';
$lang['no_preview_available_for_file'] = 'No hay vista previa disponible para este archivo.';
$lang['project_activity_deleted_file_discussion_comment'] = 'Comentario sobre discusión archivo eliminado';
$lang['file_not_found'] = 'Archivo no encontrado';
$lang['email_template_discussion_info'] = 'This template is used for both project discussion comments emails. (files discussions and regular discussions)';
$lang['format_a4_portrait_size'] = 'Portrait';
$lang['only_show_contact_tickets'] = 'En el perfil del cliente, solo mostrar tickets relacionados con el usuario conectado. (No se aplica al cliente principal)';
$lang['cancel_overdue_reminders_invoice'] = 'Impedir el envío de recordatorios pendientes para esta factura';
$lang['customer_shipping_address_notice'] = 'No llene la dirección de envío si no vas a utilizar la dirección de envío de facturas de clientes';
$lang['timesheets_overview'] = 'Resumen de tabla de tiempos';
$lang['invoice_status_draft'] = 'Borrador';
$lang['save_as_draft'] = 'Guardar como borrador';
$lang['convert_and_save_as_draft'] = 'Convertir y guardar como borrador';
$lang['convert'] = 'Convertir';
$lang['exclude_invoices_draft_from_client_area'] = 'Excluir las facturas del portal del cliente si contiene estados de borrador.';
$lang['invoice_draft_status_info'] = 'Esta factura tiene un estados de borrador, el estados será cambiado automáticamente cuando envíes la factura al cliente o la marques como enviada.';
$lang['task_info'] = 'Información de Tarea';
$lang['recurring_tasks'] = 'Recurrente';
// Dont translate these, already translated
$lang['task_repeat_every'] = $lang['expense_repeat_every'];
$lang['task_recurring_months'] = $lang['expense_recurring_months'];
$lang['task_recurring_years'] = $lang['expense_recurring_years'];
$lang['task_recurring_days'] = $lang['expense_recurring_days'];
$lang['task_recurring_weeks'] = $lang['expense_recurring_weeks'];
$lang['todays_tasks'] = 'Tareas de hoy';
$lang['payment_mode_invoices_only'] = 'Solo Facturas';
$lang['payment_mode_expenses_only'] = 'Solo Gastos';
$lang['task_no_checklist_items_found'] = 'puntos de la lista que no se encuentran para esta tarea.';
$lang['task_no_description'] = 'Esta tarea no tiene descripción';
$lang['expenses_reminders'] = 'Recordatorios';
$lang['expense_set_reminder_title'] = 'Establecer el recordatorio de gasto';
$lang['calendar_expense_reminder'] = 'Recordatorio de gastos';
$lang['recurring_task'] = 'Tarea Recurrente';
$lang['disable_email_from_being_sent'] = 'Desactivar que este email se envíe';
$lang['not_sent_indicator'] =  'No Enviado';
$lang['proposal_status_revised'] =  'En Estudio';
$lang['customer_currency_change_notice'] =  'Si el cliente utilice otra moneda a continuación, asegúrese que la moneda base este correctamente seleccionada para este cliente. Cambio de la moneda no es posible después de las transacciones se registran.';
$lang['click_to_add_content'] =  'Hacer clic aqui para agregar contenido';
$lang['related_to_project'] =  'Esta %s está relacionada al %s: %s';
$lang['back_to_lead'] =  'Atrás a los Contactos';
$lang['add_task_timer_started_warning'] =  'Detener el temporizador de la tarea actual para poder agregar un temporizador manual nuevo.';
$lang['sending_email_contact_permissions_warning'] =  'No se pudo elegir un contacto automático para el cliente. Por favor, asegúrese de que los contactos que tiene el cliente tengan permisos %s';

# Version 1.2.6
$lang['currently_supported_currencies'] = 'Monedas soportadas actualmente';
$lang['authorize_notice'] = 'SSL is required if you\'re using the Authorize.Net AIM payment API. Authorize.net only supports 1 currency per account. Make sure you add only 1 currency associated with your Authorize account in the currencies field.';
$lang['settings_paymentmethod_developer_mode'] = 'Developer Mode';
$lang['payment_cardholder_name'] = 'Cardholder\'s Name';
$lang['settings_paymentmethod_authorize_api_login_id'] =  'API Login ID';
$lang['settings_paymentmethod_mollie_api_key'] =  'API Key';
$lang['settings_paymentmethod_authorize_api_transaction_key'] =  'API Transaction ID';
$lang['settings_paymentmethod_authorize_secret_key'] =  'Secret Key';
$lang['leads_report_converted_notice'] =  'Only leads thats belongs in the default status Client will be taken as converted leads, if the leads belongs to the default status client and its not converted to customer will be still counted as converted lead';
$lang['payment_method'] = 'Forma de Pago';
$lang['payment_method_info'] = 'Some payment gateways support different/multiple payment methods like Credit Card, Paypal, Bank.';

# Version 1.2.7
$lang['dropbox_app_key'] = 'Dropbox APP Key';
$lang['project_invoice_select_all_expenses'] = 'Elegir todos los gastos';
$lang['role_update_staff_permissions'] = 'Actualizar todos los permisos del personal que están utilizando éste rol';
$lang['customer_active'] = 'Activo';
$lang['note_updated_successfully'] = 'Nota actualizada exitosamente';
$lang['update_note'] = 'Actualizar Nota';
$lang['update_comment'] = 'Actualizar comentario';
$lang['comment_updated_successfully'] = 'Comentario actualizado exitosamente.';
$lang['staff_send_welcome_email'] = 'Enviar correo de bienvenida';
$lang['proposal_warning_email_change'] = 'Email actualizado para %s. Este %s esta vinculado a presupuestos. Quieres actualizar todos los Emails vinculado a presupuestos de %s?';
$lang['update_proposal_email_yes'] = 'Sí, actualiza todos los emails vinculados.';
$lang['update_proposal_email_no'] = 'No, yo lo actualizaré manualmente.';
$lang['proposals_emails_updated'] = 'Todos los emails vinculados a presupuestos de %s han sido actualizado a %s';
$lang['custom_field_company'] = 'Empresa';
$lang['actions'] = 'Acciones';
$lang['project_mark_as'] = 'Marcar como %s';
$lang['todo_edit_title'] = 'Editar lista de quehaceres';
$lang['additional_action_required'] = 'Acción adicional requerida!';
$lang['project_mark_tasks_finished_confirm'] = 'Confirmar';
$lang['project_marked_as_success'] = 'Proyecto marcado como %s exitosamente';
$lang['project_marked_as_failed'] = 'Hubo un error al marcar el proyecto como %s';
$lang['auto_assign_customer_admin_after_lead_convert'] = 'Auto asignar como administrador del cliente Después de convertir';
$lang['auto_assign_customer_admin_after_lead_convert_help'] = 'Si esta opción se establece como SI el personal que convirtió el Contacto a cliente se auto asignado como administrador del cliente. NOTA: Esta opción sólo se aplicará al personal que no dispone del permiso para VER los clientes';
$lang['auto_close_tickets_disable'] = 'Indicar 0 para deshabilitar';
$lang['task_checklist_item_completed_by'] = 'Completado por %s';
$lang['staff_email_signature_help'] = 'Si está vacío, se utilizará por defecto la configuración de firma de correo electrónico';
$lang['customer_sales'] = 'Ventas';
$lang['default_task_priority'] = 'Prioridad por defecto';
$lang['project_send_created_email'] = 'Enviar correo de creación de proyecto';
$lang['survey_send_to_lists'] = 'Encuesta enviar a la listas';
$lang['survey_send_notice'] = 'Los correos serán enviados utilizado el CRON JOB por hora.';
$lang['view_permission_auto_checked'] = 'VIEW permission auto checked. You need to select VIEW permission if you want to use the EDIT, CREATE and DELETE properly. EDIT, CREATE, DELETE cant be used without VIEW because VIEW is global permission and the user wont be able to open the data and perform the actions.';
$lang['custom_field_company_info'] = 'Edita los campos personalizados para la empresa en Setup->Settings->Company';

# Version 1.2.8
$lang['show_transactions_on_invoice_pdf'] = 'Show invoice payments (transactions) on PDF';
$lang['bulk_actions'] = 'Acciones Masivas';
$lang['additional_filters'] = 'Filtros Adicionales';
$lang['expenses_available_to_bill'] = 'Gastos disponibles para facturar';
$lang['bulk_action_customers_groups_warning'] = 'If you dont select any group all groups assigned to the selected customers will be removed.';
$lang['customer_attachments_show_in_customers_area'] = 'Show to customers area';
$lang['customer_attachments_show_notice'] = 'Only files uploaded from customer profile have ability to show/hide in customers area.';
$lang['customer_profile_files'] = 'Archivos';
$lang['no_files_found'] = 'No Files Found';
$lang['survey_customers_all'] = 'Todos los Clientes';
$lang['custom_field_column'] = 'Grid (Bootstrap Column eq. 12) - Max is 12';
$lang['task_status'] = 'Estado';
$lang['task_status_1'] = 'Por Iniciar';
$lang['task_status_2'] = 'Espera de Respuesta';
$lang['task_status_3'] = 'Testear';
$lang['task_status_4'] = 'En Progreso';
$lang['task_status_5'] = 'Completo';
$lang['task_mark_as'] = 'Marcar como %s';
$lang['task_marked_as_success'] = 'Task marked as %s successfully';
$lang['task_drag_drop_notice'] = 'Drag & Drop is used only to easily change %s. The order wont be applied for this area.';
$lang['search_tasks'] = 'Buscar Tareas';
$lang['tasks_kanban_limit'] = 'Limit tasks kan ban rows per status';
$lang['show_on_invoice_on_pdf'] = 'Show %s on Invoice PDF';
$lang['show_pay_link_to_invoice_pdf'] = 'Show Pay Invoice link to PDF (Not applied if invoice status is Cancelled)';
$lang['no_leads_found'] = 'No Leads Found';
$lang['created_today'] = 'Creado Hoy';
$lang['total_tasks_deleted'] = 'Total Tasks Deleted: %s';
$lang['total_tickets_delete'] = 'Total Tickets Deleted: %s';
$lang['total_tickets_delete'] = 'Total Tickets Deleted: %s';
$lang['format_letter_portrait'] = 'Letter Portrait';
$lang['format_letter_landscape'] = 'Letter Landscape';
$lang['period_datepicker'] = 'Periodo';
$lang['total_by_hourly_rate'] = 'Total By Hourly Rate';
$lang['staff_hourly_rate'] = $lang['task_hourly_rate'];
// &#37; is for % so the system can confuse for the original fields like %s
$lang['remove_tax_name_from_item_table_help'] = 'eq. Item TAX 15&#37; will be shown as 15&#37; without the tax name (Not applied if multiple taxes with the same name and tax percent found for item)';
$lang['back_to_project'] = 'Volver al Proyecto';
$lang['view_kanban'] = 'Ver Kan Ban';
$lang['invoice_is_overdue'] = 'This invoice is overdue by %s days';

# Version 1.2.9
$lang['time_decimal'] = 'Hora (decimal)';
$lang['time_h'] = 'Hora (h)';
$lang['proposal_number_prefix'] = 'Proposal Number Prefix';
$lang['settings_number_padding_prefix'] = 'Number padding zero\'s for prefix formats <br /> <small>eq. If this value is 3 the number will be formated: 005 or 025</small>';
$lang['this_week_payments'] = 'Pagos de Esta Semana';
$lang['last_week_payments'] = 'Pagos de la Última Semana';
$lang['not_published_new_post'] = 'published new post';
$lang['expense_name'] = 'Nombre';
$lang['expense_name_help'] = 'For personal usage';
$lang['adjustments'] = 'Ajustes';
$lang['tax_breakdown'] = 'Tax Breakdown';
$lang['payments_received'] = 'Pagos Recibidos';
$lang['not_lead_activity_created_proposal'] = 'Creada Nueva Propuesta - %s';
$lang['lead_title'] = 'Posición';
$lang['lead_address'] = 'Dirección';
$lang['lead_city'] = 'Localidad';
$lang['lead_state'] = 'Provincia';
$lang['lead_country'] = 'País';
$lang['lead_zip'] = 'Código Postal';
$lang['lead_is_public_yes'] = 'Sí';
$lang['lead_is_public_no'] = 'No';
$lang['lead_info'] = 'Informaciones del Contacto';
$lang['lead_general_info'] = 'Informaciones Generales';
$lang['lead_latest_activity'] = 'Última Actividad';
$lang['item_description_new_lines_notice'] = 'New lines are not supported for item description. Use the item long description instead.';
$lang['estimates_report'] = 'Informe de Presupuestos';
$lang['confirm'] = 'Confirmar';
$lang['delete_staff'] = 'Delete Staff Member';
$lang['delete_staff_info'] = 'Some data for this staff member needs to be transfered to another user. Please select user where you want to transfer the data.';
$lang['estimate_items'] = 'Articulos del Presupuesto';
$lang['no_proposals_found'] = 'Sin Propuestas';
$lang['no_estimates_found'] = 'Sin Presupuestos';
$lang['pipeline_limit_status'] = 'Pipeline limit per status';
$lang['settings_update'] = 'Actualización del Sistema';
$lang['purchase_key'] = 'Purchase Key';
$lang['update_now'] = 'Actualizar Ahora';
$lang['update_available'] = 'An update is available';
$lang['latest_version'] = 'Latest Version';
$lang['your_version'] = 'Your Version';
$lang['using_latest_version'] = 'You are using the latest version';
$lang['mark_as_active'] = 'Mark as active';
$lang['customer_inactive_message'] = 'This is inactive customer profile and some features may be disabled';
$lang['active_customers'] = 'Clientes Activos';
$lang['inactive_active_customers'] = 'Clientes Desactivados';
$lang['include_proposal_items_merge_field_help'] = 'Include proposal items with merge field anywhere in proposal content as %s';
$lang['all_data_synced_successfully'] = 'All data synced successfully';
$lang['sync_now'] = 'Sincronizar Ahora';
$lang['sync_data'] = 'Sincronizar Datos';
$lang['sync_proposals_up_to_date'] = 'All proposals are up to date, nothing to sync';
$lang['proposal_sync_1_info'] = 'All proposal data is stored separately for each proposal after creation. Updating the %s info wont affect previous created proposals for this %s.';
$lang['proposal_sync_2_info'] = 'If you recently updated your %s info you can sync all new data to associated proposals. Here is a list of fields you can sync.';

# Version 1.3.0
$lang['expense_include_additional_data_on_convert'] = 'Include additional details to item long description taken from this expense.';

# Version 1.4.0
$lang['calendar_events_limit'] = 'Calendar Events Limit (Month and Week View)';
$lang['show_page_number_on_pdf'] = 'Show page number on PDF';
$lang['customer_active_inactive_help'] = 'Wont be shown in dropdowns when creating new records';
$lang['item_groups'] = 'Grupos';
$lang['item_group'] = 'Item Group';
$lang['item_group_name'] = 'Nombre del Grupo';
$lang['new_item_group'] = 'Nuevo Grupo';
$lang['show_setup_menu_item_only_on_hover'] = 'Show setup menu item only when hover with mouse on main sidebar area';
$lang['internal_article'] = 'Internal Article';
$lang['expenses_created_from_this_recurring_expense'] = 'Created expenses from this recurring expense';
$lang['convert_to_task'] = 'CONVERTIR A TAREA';
$lang['next_invoice_date'] = 'Next Invoice Date: %s';
$lang['next_expense_date'] = 'Next Expense Date: %s';
$lang['invoice_recurring_from'] = 'This invoice is created from recurring invoice with number: %s';
$lang['expense_recurring_from'] = 'This expense is created from the following recurring expense: %s';
$lang['child_invoices'] = 'Child Invoices';
$lang['child_expenses'] = 'Child Expenses';
$lang['no_announcements'] = 'No Announcements';
$lang['unit'] = 'Unidad';
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
$lang['estimate_invoiced'] = 'Facturado';
$lang['file_date_uploaded'] = 'Date Uploaded';
$lang['allow_contact_to_delete_files'] = 'Allow contacts to delete own files uploaded from customers area';
$lang['file'] = 'Archivo';
$lang['customer_contact_person_only_one_allowed'] = 'Only 1 contact is allowed when the company field is not filled. The system will cast this customer as person';
$lang['web_to_lead'] = 'Web to Contacto';
$lang['web_to_lead_form'] = 'Web to Contacto Form';
$lang['new_form'] = 'New Form';
$lang['form_name'] = 'Form Name';
$lang['cf_option_in_use'] = 'An option you removed is in use and cant be removed. The option is auto appended to the existing options.';
$lang['form_builder'] = 'Form Builder';
$lang['form_informations'] = 'Form Informations & Setup';
$lang['form_builder_create_form_first'] = 'Create form first to be able to use the form builder.';
$lang['notify_assigned_user'] = 'Responsible person';
$lang['form_recaptcha'] = 'Use Google Recaptcha';
$lang['form_lang_validation'] = 'Lenguaje';
$lang['form_lang_validation_help'] = 'For Validation Messages';
$lang['form_btn_submit_text'] = 'Submit button text';
$lang['form_success_submit_msg'] = 'Message to show after form is succcesfuly submitted';
$lang['total_submissions'] = 'Total Submissions';
$lang['form_integration_code'] = 'Integration Code';
$lang['not_lead_imported_from_form'] = 'New Lead Imported from Web to Lead Form - %s';
$lang['not_lead_activity_log_attachment'] = 'Attachment Imported from form - %s';
$lang['form_integration_code_help'] = 'Copy & Paste the code anywhere in your site to show the form, additionaly you can adjust the width and height px to fit for your website.';
$lang['invoice_not_found'] = 'Invoice not found';
$lang['estimate_not_found'] = 'Estimate not found';
$lang['expense_not_found'] = 'Expense not found';
$lang['proposal_not_found'] = 'Proposal not found';
$lang['new_task_assigned_non_user'] = 'New task is assigned to you - %s';
$lang['no_child_found'] = 'No Child %s Found';
$lang['company_vat_number'] = 'NIF';
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
$lang['search_ajax_searching'] = 'Buscando...';
$lang['search_ajax_initialized'] = 'Start typing to search';
$lang['lead_description'] = 'Descripción';
$lang['lead_website'] = 'Website';
$lang['invoice_activity_auto_converted_from_estimate'] = 'Invoice auto created from estimate with number %s';
$lang['hour_of_day_perform_auto_operations'] = 'Hour of day to perform automatic operations';
$lang['hour_of_day_perform_auto_operations_format'] = '24 hours format eq. 9 for 9am or 15 for 3pm.';
$lang['inv_hour_of_day_perform_auto_operations_help'] = 'Used for recurring invoices, overdue notices etc..';
$lang['use_minified_files'] = 'Use minified files version for css and js (only system files)';

# Version 1.5.0
$lang['logo_favicon_changed_notice'] = 'Logo or Favicon change detected. If you still see the original CRM logo try to clear your browser cache';
$lang['kb_search_articles'] = 'Buscar en la Base de Conocimiento';
$lang['kb_search'] = 'Buscar';
$lang['have_a_question'] = '¿Qué necesitas saber?';
$lang['card_expiration_year'] = 'Año de expiración';
$lang['card_expiration_month'] = 'Mes de expiración';
$lang['client_website'] = 'Website';
$lang['search_project_members'] = 'Search Project Members...';
$lang['cf_translate_input_link_title'] = 'Título';
$lang['cf_translate_input_link_url'] = 'URL';
$lang['cf_translate_input_link_tip'] = 'Click aquí para agregar link';
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
$lang['today'] = 'Hoy';
$lang['open_in_dropbox'] = 'Open In Dropbox';
$lang['show_primary_contact'] = 'Mostrar el nombre completo del contacto principal en %s';
$lang['view_members_timesheets'] = 'Ver todas las hojas de tiempo';
$lang['priority'] = 'Prioridad';
$lang['fetch_from_google'] = 'Fetch from google';
$lang['customer_fetch_lat_lng_usage'] = 'Fill address, city and country before fetching to get best result.';
$lang['g_search_address_not_found'] = 'The address couldn\'t be found, please try again';
$lang['proposals_report'] = 'Reporte de Propuestas';
$lang['staff_members_open_tickets_to_all_contacts_help'] = 'If staff member don\'t have permission for customers VIEW only will be able to create new tickets from admin area to customer contacts where is assigned as customer admin.';
$lang['staff_members_open_tickets_to_all_contacts'] = 'Allow staff members to open tickets to all contacts?';
$lang['charts_based_report'] = 'Charts Based Report';
$lang['delete_backups_older_then'] = 'Auto delete backups older then X days (set 0 to disable)';
$lang['responsible_admin'] = 'Responsible admin';
$lang['tags'] = 'Tags';
$lang['tag'] = 'Tag';
$lang['customer_map_notice'] = 'Add longitude and latitude in the customer profile to show the map here';
$lang['default_view'] = 'Default View';
$lang['day'] = 'Días';
$lang['agenda'] = 'Calendário';
$lang['timesheet_tags'] = 'Timesheet Tags';
$lang['show_more'] = 'Ver Más';
$lang['show_less'] = 'Ver Menos';
$lang['project_completed_date'] = 'Completed Date';
$lang['language'] = 'Lenguaje';
$lang['this_week'] = 'Esta Semana';
$lang['last_week'] = 'Última Semana';
$lang['this_month'] = 'Este Mes';
$lang['last_month'] = 'Último Mes';
$lang['no_description_project'] = 'No description for this project';
$lang['sales_string'] = 'Ventas';
$lang['no_project_members'] = 'No existen Miembros en este Proyecto';
$lang['search_by_tags'] = 'Use # + tagname to search by tags';
$lang['project_status_5'] = 'Cancelado';
