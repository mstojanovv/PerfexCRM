<?php

# Version 1.0.0
# General
$lang['id']                   = 'ID';
$lang['name']                 = 'Име';
$lang['options']              = 'Опции';
$lang['submit']               = 'Потвърди';
$lang['added_successfully']   = '%s успешно добавен.';
$lang['updated_successfully'] = '%s успешно обновен.';
$lang['edit']                 = 'Редактирай %s';
$lang['add_new']              = 'Добави %s';
$lang['deleted']              = '%s изтрито';
$lang['problem_deleting']     = 'Проблем изтриване %s';
$lang['is_referenced']        = 'Това ID %s вече се използва.';
$lang['close']                = 'Затвори';
$lang['send']                 = 'Изпрати';
$lang['cancel']               = 'Отказ';
$lang['go_back']              = 'Назад';
$lang['error_uploading_file'] = 'Грешка при качването';
$lang['load_more']            = 'Виж още';
$lang['cant_delete_default']  = 'Не може да бъде изтрито %s';

# Invoice General
$lang['invoice_status_paid']                   = 'Платено';
$lang['invoice_status_unpaid']                 = 'Неплатено';
$lang['invoice_status_overdue']                = 'Просрочено';
$lang['invoice_status_not_paid_completely']    = 'Частично плащане';
$lang['invoice_pdf_heading']                   = 'ФАКТУРА - ОРИГИНАЛ';
$lang['invoice_table_item_heading']            = 'Описание на стоката/услугата';
$lang['invoice_table_quantity_heading']        = 'К-во';
$lang['invoice_table_rate_heading']            = 'Ед.цена';
$lang['invoice_table_tax_heading']             = 'Данъци';
$lang['invoice_table_amount_heading']          = 'Сума';
$lang['invoice_subtotal']                      = 'Данъчна основа';
$lang['invoice_adjustment']                    = 'Закръгляване';
$lang['invoice_total']                         = 'Обща стойност';
$lang['invoice_bill_to']                       = 'Получател';
$lang['invoice_data_date']                     = 'Дата на дан. събитие:';
$lang['invoice_data_duedate']                  = 'Крайна дата на издаване:';
$lang['invoice_received_payments']             = 'Транзакции';
$lang['invoice_no_payments_found']             = 'Няма намерени плащания';
$lang['invoice_note']                          = 'Забележка:';
$lang['invoice_payments_table_number_heading'] = 'Плащане №';
$lang['invoice_payments_table_mode_heading']   = 'Начини за плащане';
$lang['invoice_payments_table_date_heading']   = 'Дата';
$lang['invoice_payments_table_amount_heading'] = 'Сума';


# Announcements
$lang['announcement']                 = 'Анонс';
$lang['announcement_lowercase']       = 'анонс';
$lang['announcements']                = 'Анонси';
$lang['announcements_lowercase']      = 'анонси';
$lang['new_announcement']             = 'Нов анонс';
$lang['announcement_name']            = 'Наименование/тема за известяване';
$lang['announcement_message']         = 'Съобщение';
$lang['announcement_show_to_staff']   = 'Да се вижда от целият екип';
$lang['announcement_show_to_clients'] = 'Да се вижда от всички клиенти';
$lang['announcement_show_my_name']    = 'Покажи моето име';

# Clients
$lang['clients']                                 = 'Клиенти';
$lang['client']                                  = 'Клиент';
$lang['new_client']                              = 'Нов Клиент';
$lang['client_lowercase']                        = 'клиент';
$lang['client_firstname']                        = 'Име';
$lang['client_lastname']                         = 'Фамилия';
$lang['client_email']                            = 'Имейл';
$lang['client_company']                          = 'Компания';
$lang['client_vat_number']                       = 'ЕИК';
$lang['client_address']                          = 'Адрес';
$lang['client_city']                             = 'Град';
$lang['client_postal_code']                      = 'Пощенски код';
$lang['client_state']                            = 'Област';
$lang['client_password']                         = 'Парола';
$lang['client_password_change_populate_note']    = 'Note: if you populate this fields, password will be changed on this customer.';
$lang['client_password_last_changed']            = 'Password last changed:';
$lang['login_as_client']                         = 'Влез като клиент';
$lang['client_invoices_tab']                     = 'Фактури';
$lang['contracts_invoices_tab']                  = 'Договори';
$lang['contracts_tickets_tab']                   = 'Тикети';
$lang['contracts_notes_tab']                     = 'Бележки';
$lang['note_description']                        = 'Note description';
$lang['client_do_not_send_welcome_email']        = 'Не изпращай Welcome email';
$lang['clients_notes_table_description_heading'] = 'Описание';
$lang['clients_notes_table_addedfrom_heading']   = 'Добавено от';
$lang['clients_notes_table_dateadded_heading']   = 'От Дата';
$lang['clients_list_full_name']                  = 'Клиент';
$lang['clients_list_last_login']                 = 'Последно влизане';

# Contracts
$lang['contracts']                = 'Договори';
$lang['contract']                 = 'Договор';
$lang['new_contract']             = 'Нов Договор';
$lang['contract_lowercase']       = 'договор';
$lang['contract_start_date']      = 'Начална дата';
$lang['contract_end_date']        = 'Крайна дата';
$lang['contract_subject']         = 'Заглавие';
$lang['contract_description']     = 'Описание';
$lang['contract_subject_tooltip'] = 'Заглавието е видимо за клиента';
$lang['contract_client_string']   = 'Клиент';
$lang['contract_attach']          = 'Прикачи документ';
$lang['contract_list_client']     = 'Клиент';
$lang['contract_list_subject']    = 'Заглавие';
$lang['contract_list_start_date'] = 'Начална дата';
$lang['contract_list_end_date']   = 'Крайна дата';

# Currencies
$lang['currencies']                    = 'Валути';
$lang['currency']                      = 'Валута';
$lang['new_currency']                  = 'Нова Валута';
$lang['currency_lowercase']            = 'валута';
$lang['base_currency_set']             = 'Зададохте валута по подразбиране.';
$lang['make_base_currency']            = 'Направи основна валута';
$lang['base_currency_string']          = 'Основна валута';
$lang['currency_list_name']            = 'Име';
$lang['currency_list_symbol']          = 'Символ/Знак';
$lang['currency_add_edit_description'] = 'Наименование на валутата';
$lang['currency_add_edit_rate']        = 'Символ/Знак';
$lang['currency_edit_heading']         = 'Промени валутата';
$lang['currency_add_heading']          = 'Добави нова валута';


# Department
$lang['departments']                 = 'Отдели';
$lang['department']                  = 'Отдел';
$lang['new_department']              = 'Нов Отдел';
$lang['department_lowercase']        = 'отдел';
$lang['department_name']             = 'Наименование на отдела';
$lang['department_email']            = 'Имейл на отдела';
$lang['department_hide_from_client'] = 'Скрий от клиента?';
$lang['department_list_name']        = 'Име';

# Email Templates
$lang['email_templates']                        = 'Имейл Шаблони';
$lang['email_template']                         = 'Имейл Шаблони';
$lang['email_template_lowercase']               = 'Имейл Шаблони';
$lang['email_templates_lowercase']              = 'Имейл шаблони';
$lang['email_template_ticket_fields_heading']   = 'Тикети';
$lang['email_template_invoices_fields_heading'] = 'Фактури';
$lang['email_template_clients_fields_heading']  = 'Клиенти';
$lang['template_name']                          = 'Шаблон';
$lang['template_subject']                       = 'Тема';
$lang['template_fromname']                      = 'От';
$lang['template_fromemail']                     = 'Имейл';
$lang['send_as_plain_text']                     = 'Изпрати като неформатиран текст';
$lang['email_template_disabled']                = 'Забрани изпращеното на този темплейт';
$lang['email_template_email_message']           = 'Имейл съобщение';
$lang['available_merge_fields']                 = 'Преглед на всички променливи';

# Home
$lang['dashboard_string']                          = 'Главно Табло';
$lang['home_latest_todos']                         = 'Последни ангажименти';
$lang['home_no_latest_todos']                      = 'Нямате ангажименти';
$lang['home_latest_finished_todos']                = 'Последно завършени';
$lang['home_no_finished_todos_found']              = 'Нямате завършени ангажименти';
$lang['home_tickets_awaiting_reply_by_department'] = 'Отворени Тикети към всички отдели';
$lang['home_tickets_awaiting_reply_by_status']     = 'Всички Тикети в опашката по статус';
$lang['home_this_week_events']                     = 'Календарни събития тази седмица';
$lang['home_upcoming_events_next_week']            = 'Предстоящи събития';
$lang['home_event_added_by']                       = 'Събитието е добавено от';
$lang['home_public_event']                         = 'Публично';
$lang['home_weekly_payment_records']               = 'Потвърдени Плащания Седмично';
$lang['home_weekend_ticket_opening_statistics']    = 'Отворени Тикети Седмично';

# Newsfeed
$lang['whats_on_your_mind']                                 = 'Какво мислите?';
$lang['new_post']                                           = 'Публикувай';
$lang['newsfeed_upload_tooltip']                            = 'Съвет:Преплъзни файловете за качване';
$lang['newsfeed_all_departments']                           = 'Всички Отдели';
$lang['newsfeed_pin_post']                                  = 'Pin post';
$lang['newsfeed_unpin_post']                                = 'Unpin post';
$lang['newsfeed_delete_post']                               = 'Изтрий';
$lang['newsfeed_published_post']                            = 'Публикувано';
$lang['newsfeed_you_like_this']                             = 'Вие харесвате това';
$lang['newsfeed_like_this']                                 = 'харесват това';
$lang['newsfeed_one_other']                                 = 'друго';
$lang['newsfeed_you']                                       = 'Ти';
$lang['newsfeed_and']                                       = 'и';
$lang['newsfeed_you_and']                                   = 'Ти и';
$lang['newsfeed_like_this_saying']                          = 'Харесва ми!';
$lang['newsfeed_unlike_this_saying']                        = 'Не ми харесва!';
$lang['newsfeed_show_more_comments']                        = 'Зареди още';
$lang['comment_this_post_placeholder']                      = 'Коментираха тази публикация..';
$lang['newsfeed_post_likes_modal_heading']                  = 'Колеги които харесаха тази публикация';
$lang['newsfeed_comment_likes_modal_heading']               = 'Колеги които харесаха този коментар';
$lang['newsfeed_newsfeed_post_only_visible_to_departments'] = 'Тази публикация е видима само за следните отдели: %s';

# Invoice Items
$lang['invoice_items']                     = 'Артикули за продажба';
$lang['invoice_item']                      = 'Фактура Артикул';
$lang['new_invoice_item']                  = 'Нов Артикул';
$lang['invoice_item_lowercase']            = 'фактура артикул';
$lang['invoice_items_list_description']    = 'Описание';
$lang['invoice_items_list_rate']           = 'Ед.цена';
$lang['invoice_item_add_edit_description'] = 'Описание';
$lang['invoice_item_add_edit_rate']        = 'Ед.цена';
$lang['invoice_item_edit_heading']         = 'Редактирай елемент';
$lang['invoice_item_add_heading']          = 'Добави нов елемент';

# Invoices
$lang['invoices']                                = 'Фактури';
$lang['invoice']                                 = 'Фактура';
$lang['invoice_lowercase']                       = 'Фактура';
$lang['create_new_invoice']                      = 'Създай Нова Фактура';
$lang['view_invoice']                            = 'Виж Фактурата';
$lang['invoice_payment_recorded']                = 'Плащането по Фактурата е отбелязано';
$lang['invoice_payment_record_failed']           = 'Грешка: Плащането по фактурата не е възможно';
$lang['invoice_sent_to_client_success']          = 'Фактурата е изпратена успешно до клиента.';
$lang['invoice_sent_to_client_fail']             = 'Невъзможност за изпращане до клиента';
$lang['invoice_reminder_send_problem']           = 'Невъзможност за изпращане на подсещане до клиента';
$lang['invoice_overdue_reminder_sent']           = 'Подсещане за плащане е изпратено успешно до клиента';
$lang['invoice_details']                         = 'Справка Фактура';
$lang['invoice_view']                            = 'Виж Фактура';
$lang['invoice_select_customer']                 = 'Клиент';
$lang['invoice_add_edit_number']                 = 'Фактура Номер';
$lang['invoice_add_edit_date']                   = 'Издадена на';
$lang['invoice_add_edit_duedate']                = 'Крайна дата за издаване';
$lang['invoice_add_edit_currency']               = 'Валута';
$lang['invoice_add_edit_client_note']            = 'Клиент (Бележка)';
$lang['invoice_add_edit_admin_note']             = 'Забележка (не се вижда от клиента)';
$lang['invoices_toggle_table_tooltip']           = 'Виж цялата таблица';
$lang['edit_invoice_tooltip']                    = 'Промени Фактура';
$lang['delete_invoice_tooltip']                  = 'Изтрий фактурата. Забележка: Всички плащания ще бъдат изтрити.';
$lang['invoice_sent_to_email_tooltip']           = 'Изпрати по имейл';
$lang['invoice_already_send_to_client_tooltip']  = 'Фактурата е вече изпратена до %s';
$lang['send_overdue_notice_tooltip']             = 'Изпрати напомняне';
$lang['invoice_view_activity_tooltip']           = 'Виж Активност';
$lang['invoice_record_payment']                  = 'Запиши Плащане';
$lang['invoice_send_to_client_modal_heading']    = 'Изпрати тази фактура до клиента.';
$lang['invoice_send_to_client_attach_pdf']       = 'Прикачи PDF фактура';
$lang['invoice_send_to_client_preview_template'] = 'Прегледай Имейл Шаблона';
$lang['invoice_dt_table_heading_number']         = 'Фактура ';
$lang['invoice_dt_table_heading_date']           = 'Дата';
$lang['invoice_dt_table_heading_client']         = 'Клиент';
$lang['invoice_dt_table_heading_duedate']        = 'Крайна Дата';
$lang['invoice_dt_table_heading_amount']         = 'Сума';
$lang['invoice_dt_table_heading_status']         = 'Статус';
$lang['record_payment_for_invoice']              = 'Запиши Плащане за';
$lang['record_payment_amount_received']          = 'Сумата е платена';
$lang['record_payment_date']                     = 'Дата за плащане';
$lang['record_payment_leave_note']               = 'Остави Бележка';
$lang['invoice_payments_received']               = 'Плащанията са получени';
$lang['invoice_record_payment_note_placeholder'] = 'Забележка (не се вижда от клиента)';
$lang['no_payments_found']                       = 'Няма получени плащания по тази фактура';

# Payments
$lang['payments']                             = 'Ордери';
$lang['payment']                              = 'Ордер';
$lang['payment_lowercase']                    = 'ордер';
$lang['payments_table_number_heading']        = 'Ордер #';
$lang['payments_table_invoicenumber_heading'] = 'Фактура #';
$lang['payments_table_mode_heading']          = 'Начин за плащане';
$lang['payments_table_date_heading']          = 'Дата';
$lang['payments_table_amount_heading']        = 'Сума';
$lang['payments_table_client_heading']        = 'Клиент';
$lang['payment_not_exists']                   = 'Това плащане не съществува';
$lang['payment_edit_for_invoice']             = 'Плащане за фактура';
$lang['payment_edit_amount_received']         = 'Сумата е платена';
$lang['payment_edit_date']                    = 'Падеж';

# Knowledge Base
$lang['kb_article_add_edit_subject']   = 'Заглавие';
$lang['kb_article_add_edit_group']     = 'Категория';
$lang['kb_string']                     = 'Уики';
$lang['kb_article']                    = 'Статия';
$lang['kb_article_lowercase']          = 'статия';
$lang['kb_article_new_article']        = 'Нова статия';
$lang['kb_article_disabled']           = 'Неактивно';
$lang['kb_article_description']        = 'Съдържание';
$lang['kb_no_articles_found']          = 'Няма въведение статии';
$lang['kb_dt_article_name']            = 'Наименование на статията';
$lang['kb_dt_group_name']              = 'Категория';
$lang['new_group']                     = 'Нова Категория';
$lang['kb_group_add_edit_name']        = 'Категория Име';
$lang['kb_group_add_edit_description'] = 'Кратко Описание';
$lang['kb_group_add_edit_disabled']    = 'Неактивно';
$lang['kb_group_add_edit_note']        = 'Забележка: Всички статии ще бъдат скрити';
$lang['group_table_name_heading']      = 'Име';
$lang['group_table_isactive_heading']  = 'Активно';
$lang['kb_no_groups_found']            = 'Няма открити групи';

# Media
$lang['media_files'] = 'Приложения';

# Payment modes
$lang['new_payment_mode']           = 'Нов Начин на Плащане';
$lang['payment_modes']              = 'Начини на Плащания';
$lang['payment_mode']               = 'Начин на Плащане';
$lang['payment_mode_lowercase']     = 'начин на плащане';
$lang['payment_modes_dt_name']      = 'Начин на Плащане Наименование';
$lang['payment_mode_add_edit_name'] = 'Начин на плащане Наименование';
$lang['payment_mode_edit_heading']  = 'Промени начин на плащане';
$lang['payment_mode_add_heading']   = 'Добави начин на плащане';

# Predefined Ticket Replies
$lang['new_predefined_reply']              = 'Нов шаблонен отговор';
$lang['predefined_replies']                = 'Шаблонни отговори';
$lang['predefined_reply']                  = 'Шаблонен отговор';
$lang['predefined_reply_lowercase']        = 'шаблонен отговор';
$lang['predefined_replies_dt_name']        = 'Шаблонни отговори Наименование';
$lang['predefined_reply_add_edit_name']    = 'Шаблонен отговор Наименование';
$lang['predefined_reply_add_edit_content'] = 'Съдържание на шаблонния отговор';

# Ticket Priorities
$lang['new_ticket_priority']           = 'Нов Приоритет';
$lang['ticket_priorities']             = 'Приоритети на билета';
$lang['ticket_priority']               = 'Приоритет на билета';
$lang['ticket_priority_lowercase']     = 'приоритет на билета';
$lang['no_ticket_priorities_found']    = 'Няма въведени приоритети на билетите.';
$lang['ticket_priority_dt_name']       = 'Приоритет на Билетите';
$lang['ticket_priority_add_edit_name'] = 'Наименование на Приоритет';

# Reports
$lang['kb_reports']                                       = 'Уики статии доклад';
$lang['sales_reports']                                    = 'Справки Продажби';
$lang['reports_choose_kb_group']                          = 'Избери Група';
$lang['report_kb_yes']                                    = 'Да';
$lang['report_kb_no']                                     = 'Не';
$lang['report_kb_no_votes']                               = 'No votes yet';
$lang['report_this_week_leads_conversions']               = 'Нови клиенти тази седмица';
$lang['report_leads_sources_conversions']                 = 'Източници';
$lang['report_leads_monthly_conversions']                 = 'Месечно';
$lang['sales_report_heading']                             = 'Справки';
$lang['report_sales_type_income']                         = 'Общ Приход';
$lang['report_sales_type_customer']                       = 'Продажби по клиенти';
$lang['report_sales_base_currency_select_explanation']    = 'Моля изберете валута';
$lang['report_sales_from_date']                           = 'От';
$lang['report_sales_to_date']                             = 'До';
$lang['report_sales_months_all_time']                     = 'Всички продажби';
$lang['report_sales_months_six_months']                   = ' За последните 6 месеца';
$lang['report_sales_months_twelve_months']                = 'За последните 12 месеца';
$lang['reports_sales_generated_report']                   = 'Създаден репорт';
$lang['reports_sales_dt_customers_client']                = 'Клиент';
$lang['reports_sales_dt_customers_total_invoices']        = 'Общо Фактури';
$lang['reports_sales_dt_items_customers_amount']          = 'Сума';
$lang['reports_sales_dt_items_customers_amount_with_tax'] = 'Сума с Данъци';

# Roles
$lang['new_role']           = 'Добави нов тип акаунт';
$lang['all_roles']          = 'Всички типове права';
$lang['roles']              = 'Права на акаунтите';
$lang['role']               = 'Право';
$lang['role_lowercase']     = 'право';
$lang['roles_total_users']  = 'Общо акаунти: ';
$lang['roles_dt_name']      = 'Наименование на тип акаунт';
$lang['role_add_edit_name'] = 'Наименование на типовете акаунтите';

# Service
$lang['new_service']           = 'Нова Услуга';
$lang['services']              = 'Услуги';
$lang['service']               = 'Услуга';
$lang['service_lowercase']     = 'услуга';
$lang['services_dt_name']      = 'Услуга Наименование';
$lang['service_add_edit_name'] = 'Услуга Наименование';

# Settings
$lang['settings']                                                  = 'Настройки';
$lang['settings_updated']                                          = 'Настройките са обновени';
$lang['settings_save']                                             = 'Запази';
$lang['settings_group_general']                                    = 'Общи';
$lang['settings_group_localization']                               = 'Преводи';
$lang['settings_group_tickets']                                    = 'Тикети';
$lang['settings_group_sales']                                      = 'Финанси';
$lang['settings_group_email']                                      = 'Имейл';
$lang['settings_group_clients']                                    = 'Клиенти';
$lang['settings_group_newsfeed']                                   = 'Новини';
$lang['settings_group_cronjob']                                    = 'Автоматизация';
$lang['settings_yes']                                              = 'Да';
$lang['settings_no']                                               = 'Не';
$lang['settings_clients_default_theme']                            = 'Клиентска тема';
$lang['settings_clients_allow_registration']                       = 'Позволи регистрация на клиенти';
$lang['settings_clients_allow_kb_view_without_registration']       = 'Направи публична информацията на базата от знания (не изисква регистрация)';
$lang['settings_cron_send_overdue_reminder']                       = 'Send invoice overdue reminder';
$lang['settings_cron_send_overdue_reminder_tooltip']               = 'Send overdue email to client when invoice status updated to overdue from Cron Job';
$lang['automatically_send_invoice_overdue_reminder_after']         = 'Automatically send reminder after (days)';
$lang['automatically_resend_invoice_overdue_reminder_after']       = 'Automatically re-send reminder after (days)';
$lang['settings_email_host']                                       = 'SMTP Host';
$lang['settings_email_port']                                       = 'SMTP Port';
$lang['settings_email']                                            = 'SMTP Email';
$lang['settings_email_password']                                   = 'SMTP парола';
$lang['settings_email_charset']                                    = 'Charset';
$lang['settings_email_signature']                                  = 'Имейл подпис';
$lang['settings_general_company_logo']                             = 'Лого на дружеството';
$lang['settings_general_company_logo_tooltip']                     = 'Препоръчан размер: 150 x 32px';
$lang['settings_general_company_remove_logo_tooltip']              = 'Изтрий логото';
$lang['settings_general_company_name']                             = 'Наименование на дружеството';
$lang['settings_general_company_main_domain']                      = 'Основен домейн на дружеството';
$lang['settings_general_use_knowledgebase']                        = 'Използвай Уики';
$lang['settings_general_use_knowledgebase_tooltip']                = 'Уикито ще бъде активирано в клиентската част';
$lang['settings_general_tables_limit']                             = 'Tables Pagination Limit';
$lang['settings_general_default_staff_role']                       = 'Права за нов акаунт по подразбиране';
$lang['settings_general_default_staff_role_tooltip']               = 'Тези права ще бъдат маркирани, след като създадете нов акаунт';
$lang['settings_localization_date_format']                         = 'Формата на Датата';
$lang['settings_localization_default_timezone']                    = 'Timezone (по подразбиране)';
$lang['settings_localization_default_language']                    = 'Language (по подразбиране)';
$lang['settings_newsfeed_max_file_upload_post']                    = 'Максимален брой файлове за една публикация';
$lang['settings_reminders_contracts']                              = 'Уведомление за изтичане на договор';
$lang['settings_reminders_contracts_tooltip']                      = 'Уведомление за изтичане на договор,като трябва да се посочат колко дни';
$lang['settings_tickets_use_services']                             = 'Активирай Услуги';
$lang['settings_tickets_max_attachments']                          = 'Максимален брой приложения';
$lang['settings_tickets_allow_departments_access']                 = 'Достъп до тикетите само от отдела,към който чакат ред';
$lang['settings_tickets_allowed_file_extensions']                  = 'Позволени разширения';
$lang['settings_sales_general']                                    = 'Общи';
$lang['settings_sales_general_note']                               = 'Общи настройки за продажби и фактуриране';
$lang['settings_sales_invoice_prefix']                             = 'Фактура Префикс';
$lang['settings_sales_decimal_separator']                          = 'Decimal Separator';
$lang['settings_sales_thousand_separator']                         = 'Thousand Separator';
$lang['settings_sales_currency_placement']                         = 'Currency Placement';
$lang['settings_sales_currency_placement_before']                  = 'След сумата';
$lang['settings_sales_currency_placement_after']                   = 'Преди сумата';
$lang['settings_sales_require_client_logged_in_to_view_invoice']   = 'Изисквай клиента да бъде логнат в системата';
$lang['settings_sales_next_invoice_number']                        = 'Следващ пореден номер за Фактура';
$lang['settings_sales_next_invoice_number_tooltip']                = 'Set this field to 1 if you want to start from begining';
$lang['settings_sales_decrement_invoice_number_on_delete']         = 'Понижи номерацията за фактуриране при изтриване на последните фактури';
$lang['settings_sales_decrement_invoice_number_on_delete_tooltip'] = 'Do you want to decrement the invoice number when the last invoice is deleted? Ex. If is set this option to YES and before invoice delete the next invoice number is 15 the next invoice number will decrement to 14 for the next invoice if is set to NO the number will remain to 15';
$lang['settings_sales_invoice_number_format']                      = 'Фактура Номерация';
$lang['settings_sales_invoice_number_format_year_based']           = 'Серийна';
$lang['settings_sales_invoice_number_format_number_based']         = 'Стандартна (000001)';
$lang['settings_sales_company_info_note']                          = 'This information will be displayed on invoices/estimates/payments and other PDF documents where company info is required';
$lang['settings_sales_company_name']                               = 'Наименование на дружеството';
$lang['settings_sales_address']                                    = 'Адрес';
$lang['settings_sales_city']                                       = 'Град';
$lang['settings_sales_country_code']                               = 'Код на държавата';
$lang['settings_sales_postal_code']                                = 'Пощенски код';
$lang['settings_sales_phonenumber']                                = 'Телефон';

# Leads
$lang['new_lead']                          = 'Добави Заявка';
$lang['leads']                             = 'Сделки';
$lang['lead']                              = 'Сделка';
$lang['lead_lowercase']                    = 'сделка';
$lang['leads_all']                         = 'Всички';
$lang['leads_canban_notes']                = 'Бележка: %s';
$lang['leads_canban_source']               = 'Канал: %s';
$lang['lead_new_source']                   = 'Нов източник';
$lang['lead_sources']                      = 'Сделки Източници';
$lang['lead_source']                       = 'Сделки Източник';
$lang['lead_source_lowercase']             = 'запитвания източник';
$lang['leads_sources_not_found']           = 'Няма въведени източници на запитванията';
$lang['leads_sources_table_name']          = 'Наименование на източник на запитванията';
$lang['leads_source_add_edit_name']        = 'Наименование на източник';
$lang['lead_new_status']                   = 'Добави Етап';
$lang['lead_status']                       = 'Запитване статус';
$lang['lead_status_lowercase']             = 'запитване статус';
$lang['leads_status_table_name']           = 'Статус';
$lang['leads_status_add_edit_name']        = 'Етап/Статус Наименование';
$lang['leads_status_add_edit_order']       = 'Поредност';
$lang['lead_statuses_not_found']           = 'Няма въведени статуси на запитванията';
$lang['leads_search']                      = 'Търси запитвания';
$lang['leads_table_total']                 = 'Общо запитвания: %s';
$lang['leads_dt_name']                     = 'Име';
$lang['leads_dt_email']                    = 'Имейл';
$lang['leads_dt_phonenumber']              = 'Телефон';
$lang['leads_dt_assigned']                 = 'Търговец';
$lang['leads_dt_status']                   = 'Статус';
$lang['leads_dt_last_contact']             = 'Последен контакт';
$lang['lead_add_edit_name']                = 'Име';
$lang['lead_add_edit_email']               = 'Имейл';
$lang['lead_add_edit_phonenumber']         = 'Телефон';
$lang['lead_add_edit_source']              = 'Канал';
$lang['lead_add_edit_status']              = 'Етап';
$lang['lead_add_edit_assigned']            = 'Обслужван от';
$lang['lead_add_edit_datecontacted']       = 'Обслужен на';
$lang['lead_add_edit_contacted_today']     = 'Обслужен днес';
$lang['lead_add_edit_activity']            = 'История';
$lang['lead_add_edit_notes']               = 'Комуникация';
$lang['lead_add_edit_add_note']            = 'Добави съобщение';
$lang['lead_not_contacted']                = 'Не съм обслужил клиента все още.';
$lang['lead_add_edit_contacted_this_lead'] = 'Свързах се с клиента успешно.';

# Misc
$lang['access_denied'] = 'Забранен достъп';
$lang['prev']          = 'Предишна';
$lang['next']          = 'Следваща';

# Datatables
$lang['dt_paginate_first']    = 'Първа';
$lang['dt_paginate_last']     = 'Последна';
$lang['dt_paginate_next']     = 'Следваща';
$lang['dt_paginate_previous'] = 'Предишна';
$lang['dt_empty_table']       = 'No {0} found';
$lang['dt_search']            = 'Търсене:';
$lang['dt_zero_records']      = 'Няма намерени резултати';
$lang['dt_loading_records']   = 'Моля изчакайте...';
$lang['dt_length_menu']       = 'Покажи _MENU_ ';
$lang['dt_info_filtered']     = '(показани резултати от _MAX_ до {0})';
$lang['dt_info_empty']        = 'Покажи 0 до 0 от 0 {0}';
$lang['dt_info']              = 'Покажи _START_ до _END_ от _TOTAL_ {0}';
$lang['dt_empty_table']       = 'No {0} found';
$lang['dt_sort_ascending']    = 'activate to sort column ascending';
$lang['dt_sort_descending']   = 'activate to sort column descending';

# Invoice Activity Log
$lang['user_sent_overdue_reminder'] = '%s изпрати напомняне за плащане по фактура';

# Weekdays
$lang['wd_monday']    = 'Понеделник';
$lang['wd_tuesday']   = 'Вторник';
$lang['wd_thursday']  = 'Сряда';
$lang['wd_wednesday'] = 'Четвъртък';
$lang['wd_friday']    = 'Петък';
$lang['wd_saturday']  = 'Събота';
$lang['wd_sunday']    = 'Неделя';

# Admin Left Sidebar
$lang['als_dashboard']             = 'Главно Табло';
$lang['als_clients']               = 'Клиенти';
$lang['als_leads']                 = 'Сделки';
$lang['als_contracts']             = 'Договори';
$lang['als_sales']                 = 'Продажби';
$lang['als_staff']                 = 'Акаунти';
$lang['als_tasks']                 = 'Задачи';
$lang['als_kb']                    = 'Уики';
$lang['als_media']                 = 'Файлов Мениджър';
$lang['als_reports']               = 'Репорти';
$lang['als_reports_sales_submenu'] = 'Продажби';
$lang['als_reports_leads_submenu'] = 'Запитвания';
$lang['als_kb_articles_submenu']   = 'Статии';
$lang['als_utilities']             = 'Допълнителни';
$lang['als_announcements_submenu'] = 'Анонси';
$lang['als_calendar_submenu']      = 'Календар';
$lang['als_activity_log_submenu']  = 'Активност';

# Admin Customizer Sidebar
$lang['acs_ticket_priority_submenu']           = 'Приоритет на Билетите';
$lang['acs_ticket_statuses_submenu']           = 'Статуси на Билетите';
$lang['acs_ticket_predefined_replies_submenu'] = 'Шаблонни отговори';
$lang['acs_ticket_services_submenu']           = 'Услуги';
$lang['acs_departments']                       = 'Отдели';
$lang['acs_leads']                             = 'Запитвания';
$lang['acs_leads_sources_submenu']             = 'Източници';
$lang['acs_leads_statuses_submenu']            = 'Статуси';
$lang['acs_sales_taxes_submenu']               = 'Данъци';
$lang['acs_sales_currencies_submenu']          = 'Валути';
$lang['acs_sales_payment_modes_submenu']       = 'Начин за плащане';
$lang['acs_email_templates']                   = 'Имейл Шаблони';
$lang['acs_roles']                             = 'Права';
$lang['acs_settings']                          = 'Настройки';

# Tickets
$lang['new_ticket']                                          = 'Нов Тикет';
$lang['tickets']                                             = 'Тикети';
$lang['ticket']                                              = 'Тикет';
$lang['ticket_lowercase']                                    = 'тикет';
$lang['support_tickets']                                     = 'Тикети';
$lang['support_ticket']                                      = 'Тикет';
$lang['ticket_settings_to']                                  = 'До';
$lang['ticket_settings_email']                               = 'Имейл';
$lang['ticket_settings_departments']                         = 'Избор на Отдел';
$lang['ticket_settings_service']                             = 'Избор на Услуга';
$lang['ticket_settings_priority']                            = 'Приоритет';
$lang['ticket_settings_subject']                             = 'Заглавие';
$lang['ticket_settings_assign_to']                           = 'Отговорник от екипа (по подразбиране сте Вие)';
$lang['ticket_add_body']                                     = 'Съдържание на Билета';
$lang['ticket_add_attachments']                              = 'Приложения';
$lang['ticket_no_reply_yet']                                 = 'Без отговор';
$lang['new_ticket_added_successfully']                       = 'Билет #%s беше създаден успешно';
$lang['replied_to_ticket_successfully']                      = 'Коментар #%s беше записан успешно';
$lang['ticket_settings_updated_successfully']                = 'Настройките на билета са обновени';
$lang['ticket_settings_updated_successfully_and_reassigned'] = 'Настройките на билета са обновени - прехвърлен към %s';
$lang['ticket_dt_subject']                                   = 'Заглавие';
$lang['ticket_dt_department']                                = 'Отдел';
$lang['ticket_dt_service']                                   = 'Услуга';
$lang['ticket_dt_submitter']                                 = 'Клиент';
$lang['ticket_dt_status']                                    = 'Статус';
$lang['ticket_dt_priority']                                  = 'Приоритет';
$lang['ticket_dt_last_reply']                                = 'Последен отговор';
$lang['ticket_single_add_reply']                             = 'Отговори';
$lang['ticket_single_add_note']                              = 'Добави бележка';
$lang['ticket_single_other_user_tickets']                    = 'Още Тикети';
$lang['ticket_single_settings']                              = 'Настройки';
$lang['ticket_single_priority']                              = 'Приоритет: %s';
$lang['ticket_single_last_reply']                            = 'Последен отговор: %s';
$lang['ticket_single_ticket_note_by']                        = 'Бележка от %s';
$lang['ticket_single_note_added']                            = 'Бележката е добавена: %s';
$lang['ticket_single_change_status']                         = 'Промени статуса на';
$lang['ticket_single_assign_to_me_on_update']                = 'Пренасочи този билет към мен автоматично';
$lang['ticket_single_insert_predefined_reply']               = 'Използвай шаблонен отговор';
$lang['ticket_single_insert_knowledge_base_link']            = 'Изполвай линк от уики';
$lang['ticket_single_attachments']                           = 'Приложения';
$lang['ticket_single_add_response']                          = 'Добави отговор';
$lang['ticket_single_note_heading']                          = 'Коментар';
$lang['ticket_single_add_note']                              = 'Добави коментар';
$lang['ticket_settings_none_assigned']                       = 'Не е възложен';
$lang['ticket_status_changed_successfully']                  = 'Усшешно променен статус на билета';
$lang['ticket_status_changed_fail']                          = 'Проблем при промяна на статуса';
$lang['ticket_staff_string']                                 = 'От Екипът';
$lang['ticket_client_string']                                = 'Клиент';
$lang['ticket_posted']                                       = 'Публикувано: %s';
$lang['ticket_access_by_department_denied']                  = 'Нямате достъп до този билет. Този билет принадлежи на друг отдел';

# Staff
$lang['new_staff']                                     = 'Създай Нов Акаунт';
$lang['staff_members']                                 = 'Акаунти';
$lang['staff_member']                                  = 'Акаунт';
$lang['staff_member_lowercase']                        = 'Акаунт';
$lang['staff_profile_updated']                         = 'Вашият профил е обновен успешно';
$lang['staff_old_password_incorrect']                  = 'Вашата стара парола е неправилна';
$lang['staff_password_changed']                        = 'Вашата парола е променена успешно';
$lang['staff_problem_changing_password']               = 'Проблем при промяна на парола';
$lang['staff_profile_string']                          = 'Профил';
$lang['staff_cant_remove_main_admin']                  = 'Не може да се премахне главния администратор';
$lang['staff_cant_remove_yourself_from_admin']         = 'Не може да премахнете вашите администраторски права';
$lang['staff_dt_name']                                 = 'Име Фамилия';
$lang['staff_dt_email']                                = 'Имейл';
$lang['staff_dt_last_Login']                           = 'Последно влизане';
$lang['staff_dt_active']                               = 'Активност';
$lang['staff_add_edit_firstname']                      = 'Име';
$lang['staff_add_edit_lastname']                       = 'Фамилия';
$lang['staff_add_edit_email']                          = 'Имейл';
$lang['staff_add_edit_phonenumber']                    = 'Телефон';
$lang['staff_add_edit_facebook']                       = 'Facebook';
$lang['staff_add_edit_linkedin']                       = 'LinkedIn';
$lang['staff_add_edit_skype']                          = 'Skype';
$lang['staff_add_edit_departments']                    = 'Член на отдели';
$lang['staff_add_edit_role']                           = 'Вашата роля';
$lang['staff_add_edit_permissions']                    = 'Права';
$lang['staff_add_edit_administrator']                  = 'Администратор';
$lang['staff_add_edit_password']                       = 'Парола';
$lang['staff_add_edit_password_note']                  = 'Забележка: паролата ще бъде променена';
$lang['staff_add_edit_password_last_changed']          = 'Последна промяна на паролата';
$lang['staff_add_edit_notes']                          = 'Бележки';
$lang['staff_add_edit_note_description']               = 'Бележка Описание';
$lang['staff_notes_table_description_heading']         = 'Бележка';
$lang['staff_notes_table_addedfrom_heading']           = 'Добавен на';
$lang['staff_notes_table_dateadded_heading']           = 'Дата на добяване';
$lang['staff_admin_profile']                           = 'Това е Администраторски профил';
$lang['staff_profile_notifications']                   = 'Уведомления';
$lang['staff_profile_departments']                     = 'Отдели';
$lang['staff_edit_profile_image']                      = 'Аватар';
$lang['staff_edit_profile_your_departments']           = 'Твоите отдели';
$lang['staff_edit_profile_change_your_password']       = 'Промяна на парола';
$lang['staff_edit_profile_change_old_password']        = 'Стара парола';
$lang['staff_edit_profile_change_new_password']        = 'Нова парола';
$lang['staff_edit_profile_change_repeat_new_password'] = 'Повтори паролата';

# Staff Tasks
$lang['new_task']                           = 'Нова задача';
$lang['tasks']                              = 'Задачи';
$lang['task']                               = 'Задача';
$lang['task_lowercase']                     = 'задача';
$lang['comment_string']                     = 'Бележка';
$lang['task_marked_as_complete']            = 'Задачата е отбелязана като завършена';
$lang['task_follower_removed']              = 'Наблюдателят на задачата е премахнат успешно';
$lang['task_assignee_removed']              = 'Отговорникът на задачата е премахнат успешно';
$lang['task_no_assignees']                  = 'Няма избрани отговорници';
$lang['task_no_followers']                  = 'Няма избрани наблюдатели';
$lang['task_list_all']                      = 'Всички задачи';
$lang['task_list_not_assigned']             = 'Няма изпълнител';
$lang['task_list_duedate_passed']           = 'Крайният срок наближава';
$lang['tasks_dt_name']                      = 'Заглавие';
$lang['task_single_priority']               = 'Приоритет';
$lang['task_single_start_date']             = 'Създадена на';
$lang['task_single_due_date']               = 'Краен срок';
$lang['task_single_finished']               = 'Завършен';
$lang['task_single_mark_as_complete']       = 'Завърши задачата';
$lang['task_single_edit']                   = 'Промени';
$lang['task_single_delete']                 = 'Изтрий';
$lang['task_single_assignees']              = 'Отговорници';
$lang['task_single_assignees_select_title'] = 'Отнеси към';
$lang['task_single_followers']              = 'Наблюдатели';
$lang['task_single_followers_select_title'] = 'Наблюдатели';
$lang['task_single_add_new_comment']        = 'Добави Коментар';
$lang['task_add_edit_subject']              = 'Заглавие';
$lang['task_add_edit_priority']             = 'Приоритет';
$lang['task_priority_low']                  = 'Нисък';
$lang['task_priority_medium']               = 'Нормален';
$lang['task_priority_high']                 = 'Висок';
$lang['task_priority_urgent']               = 'Спешен';
$lang['task_add_edit_start_date']           = 'Начална дата';
$lang['task_add_edit_due_date']             = 'Крайна дата';
$lang['task_add_edit_description']          = 'Подробно разяснение';

# Taxes
$lang['new_tax']           = 'Нов Данък';
$lang['taxes']             = 'Данъци';
$lang['tax']               = 'Данъци';
$lang['tax_lowercase']     = 'данъци';
$lang['tax_dt_name']       = 'Данъци наименования';
$lang['tax_dt_rate']       = 'Ед.цена (проценти)';
$lang['tax_add_edit_name'] = 'Данъци Наименование';
$lang['tax_add_edit_rate'] = 'Данъци Стойност (проценти)';
$lang['tax_edit_title']    = 'Промени Данък';
$lang['tax_add_title']     = 'Добави Нов Данък';

# Ticket Statuses
$lang['new_ticket_status']            = 'Добави статус';
$lang['ticket_statuses']              = 'Билети статуси';
$lang['ticket_status']                = 'Билет Статус';
$lang['ticket_status_lowercase']      = 'билет статус';
$lang['ticket_statuses_dt_name']      = 'Наименование на статуси за билетите';
$lang['no_ticket_statuses_found']     = 'Няма открити статуси';
$lang['ticket_statuses_table_total']  = 'Всички %s';
$lang['ticket_status_add_edit_name']  = 'Наименование на статуси за билетите';
$lang['ticket_status_add_edit_color'] = 'Избери цвят';
$lang['ticket_status_add_edit_order'] = 'Поредност';

# Todos
$lang['new_todo']                  = 'Нов ангажимент';
$lang['my_todos']                  = 'Моите ангажименти';
$lang['todo']                      = 'Ангажиментът е';
$lang['todo_lowercase']            = 'ангажимент';
$lang['todo_status_changed']       = 'Успешно изпълнен ангажимент';
$lang['todo_add_title']            = 'Нов ангажимент';
$lang['add_new_todo_description']  = 'Въведете какво трябва да направите?';
$lang['no_finished_todos_found']   = 'Няма завършени ангажименти';
$lang['no_unfinished_todos_found'] = 'Няма въведени ангажименти';
$lang['unfinished_todos_title']    = 'Ангажименти Да свърша';
$lang['finished_todos_title']      = 'Последно завършени ангажименти';

# Utilities
$lang['utility_activity_log']                        = 'Регистър на дейността';
$lang['utility_activity_log_filter_by_date']         = 'Избери дата';
$lang['utility_activity_log_dt_description']         = 'Описание';
$lang['utility_activity_log_dt_date']                = 'Дата';
$lang['utility_activity_log_dt_staff']               = 'Акаунт';
$lang['utility_calendar_new_event_title']            = 'Неозаглавено събитие';
$lang['utility_calendar_new_event_start_date']       = 'Кога започва?';
$lang['utility_calendar_new_event_end_date']         = 'Кога приключва?';
$lang['utility_calendar_new_event_make_public']      = 'Видимо за всички';
$lang['utility_calendar_event_added_successfully']   = 'Събитието беше добавено';
$lang['utility_calendar_event_deleted_successfully'] = 'Събитието беше изтрито';
$lang['utility_calendar_new_event_placeholder']      = 'Заглавие (напр. Среща)';

# Navigation
$lang['nav_notifications']          = 'Известия';
$lang['nav_my_profile']             = 'Личен профил';
$lang['nav_edit_profile']           = 'Лични настройки';
$lang['nav_logout']                 = 'Изход';
$lang['nav_no_notifications']       = 'Нямате известия';
$lang['nav_view_all_notifications'] = 'Покажи всички известия';
$lang['nav_notifications_tooltip']  = 'Известия';

# Footer
$lang['clients_copyright'] = 'ERP система от %s';

# Contracts
$lang['clients_contracts']               = 'Договори';
$lang['clients_contracts_dt_subject']    = 'Заглавие';
$lang['clients_contracts_dt_start_date'] = 'Начална дата';
$lang['clients_contracts_dt_end_date']   = 'Крайна дата';

# Home
$lang['clients_quick_invoice_info']           = 'Справка Фактури';
$lang['clients_home_currency_select_tooltip'] = 'Необходимо е да посочите валута';

# Invoices
$lang['clients_invoice_html_btn_download'] = 'Изтегли';
$lang['clients_my_invoices']               = 'Моите Фактури';
$lang['clients_invoice_dt_number']         = 'Фактура №';
$lang['clients_invoice_dt_date']           = 'Начална Дата';
$lang['clients_invoice_dt_duedate']        = 'Крайна Дата';
$lang['clients_invoice_dt_amount']         = 'Сума';
$lang['clients_invoice_dt_status']         = 'Статус';

# Profile
$lang['clients_profile_heading'] = 'Клиентски Профил';

# Used for edit profile and register START

$lang['clients_firstname'] = 'Име';
$lang['clients_lastname']  = 'Фамилия';
$lang['clients_email']     = 'Имейл';
$lang['clients_company']   = 'Дружество';
$lang['clients_vat']       = 'ЕИК №';
$lang['clients_phone']     = 'Телефон';
$lang['clients_country']   = 'Държава';
$lang['clients_city']      = 'Град';
$lang['clients_address']   = 'Адрес';
$lang['clients_zip']       = 'Пощенски код';
$lang['clients_state']     = 'Област';

# Used for edit profile and register END

$lang['clients_register_password']                    = 'Парола';
$lang['clients_register_password_repeat']             = 'Повтори паролата';
$lang['clients_edit_profile_update_btn']              = 'Обнови';
$lang['clients_edit_profile_change_password_heading'] = 'Смени паролата';
$lang['clients_edit_profile_old_password']            = 'Стара Парола';
$lang['clients_edit_profile_new_password']            = 'Нова Парола';
$lang['clients_edit_profile_new_password_repeat']     = 'Повтори Паролата';
$lang['clients_edit_profile_change_password_btn']     = 'Смени Паролата';
$lang['clients_profile_last_changed_password']        = 'Последна промяна %s';

# Knowledge base
$lang['clients_knowledge_base']                    = 'Често Задавани Въпроси';
$lang['clients_knowledge_base_articles_not_found'] = 'Все още няма въведени често задавани въпроси и отговори';
$lang['clients_knowledge_base_find_useful']        = 'Намирате ли за полезно?';
$lang['clients_knowledge_base_find_useful_yes']    = 'Да';
$lang['clients_knowledge_base_find_useful_no']     = 'Не';
$lang['clients_article_only_1_vote_today']         = 'Може да гласувате само веднъж';
$lang['clients_article_voted_thanks_for_feedback'] = 'Вашето мнение е ценно за нас!';

# Tickets
$lang['clients_ticket_open_subject']               = 'Нова заявка';
$lang['clients_ticket_open_departments']           = 'Отдел';
$lang['clients_tickets_heading']                   = 'Поддръжка';
$lang['clients_ticket_open_service']               = 'Услуга';
$lang['clients_ticket_open_priority']              = 'Приоритет';
$lang['clients_ticket_open_body']                  = 'Тикет';
$lang['clients_ticket_attachments']                = 'Приложения';
$lang['clients_single_ticket_string']              = 'Тикет';
$lang['clients_single_ticket_replied']             = 'Отговорено: %s';
$lang['clients_single_ticket_information_heading'] = 'Информация за Заявки';
$lang['clients_tickets_dt_number']                 = 'Тикет #';
$lang['clients_tickets_dt_subject']                = 'Заглавие';
$lang['clients_tickets_dt_department']             = 'Отдел';
$lang['clients_tickets_dt_service']                = 'Услуга';
$lang['clients_tickets_dt_status']                 = 'Статус';
$lang['clients_tickets_dt_last_reply']             = 'Последен отговор';
$lang['clients_ticket_single_department']          = 'Отдел: %s';
$lang['clients_ticket_single_submitted']           = 'Изпратени: %s';
$lang['clients_ticket_single_status']              = 'Статус:';
$lang['clients_ticket_single_priority']            = 'Приоритет: %s';
$lang['clients_ticket_single_add_reply_btn']       = 'Добави коментар';
$lang['clients_ticket_single_add_reply_heading']   = 'Добави коментар по този билет';

# Login
$lang['clients_login_heading_no_register'] = 'Клиентски Профил';
$lang['clients_login_heading_register']    = 'Клиентски портал SW';
$lang['clients_login_email']               = 'Имейл';
$lang['clients_login_password']            = 'Парола';
$lang['clients_login_remember']            = 'Автоматичен вход';
$lang['clients_login_login_string']        = 'Вход';

# Register
$lang['clients_register_string']  = 'Регистрация';
$lang['clients_register_heading'] = 'Регистрация за клиенти';

# Navigation
$lang['clients_nav_login']     = 'Вход за клиенти';
$lang['clients_nav_register']  = 'Регистрация';
$lang['clients_nav_invoices']  = 'Фактури';
$lang['clients_nav_contracts'] = 'Договори';
$lang['clients_nav_kb']        = 'База от знания';
$lang['clients_nav_profile']   = 'Профил';
$lang['clients_nav_logout']    = 'Изход';


# Version 1.0.1
$lang['payment_receipt']                               = 'Приходен Ордер';
$lang['payment_for_string']                            = 'Относно';
$lang['payment_date']                                  = 'Дата на плащане:';
$lang['payment_view_mode']                             = 'Начин на плащане:';
$lang['payment_total_amount']                          = 'Обща сума';
$lang['payment_table_invoice_number']                  = 'Фактурa №';
$lang['payment_table_invoice_date']                    = 'Дата на Фактура';
$lang['payment_table_invoice_amount_total']            = 'Стойност на Фактура';
$lang['payment_table_payment_amount_total']            = 'Получена сума';
$lang['payments_table_transaction_id']                 = 'Транзакция ID: %s';
$lang['payment_getaway_token_not_found']               = 'Token Not Found';
$lang['online_payment_recorded_success']               = 'Плащането е отразено';
$lang['online_payment_recorded_success_fail_database'] = 'Плащането е успешно, но не е добавено в базата. Свържете се с администратор';

# Leads
$lang['lead_convert_to_client']                = 'Направи клиент';
$lang['lead_convert_to_email']                 = 'Имейл адрес';
$lang['lead_convert_to_client_firstname']      = 'Име';
$lang['lead_convert_to_client_lastname']       = 'Фамилия';
$lang['lead_email_already_exists']             = 'Този имейл вече съществува в клиентската база';
$lang['lead_to_client_base_converted_success'] = 'Запитването е конвертирано като нов клиент';
$lang['lead_have_client_profile']              = 'Това запитване има клиентски профил';
$lang['lead_converted_edit_client_profile']    = 'Редактирай профила';

# Invoices
$lang['view_invoice_as_customer_tooltip']                                     = 'Виж като клиент';
$lang['invoice_add_edit_recurring']                                           = 'Периодично издаване';
$lang['invoice_add_edit_recurring_no']                                        = 'Не е зададено';
$lang['invoice_add_edit_recurring_month']                                     = 'Всеки %s месец';
$lang['invoice_add_edit_recurring_months']                                    = 'На всеки %s месеца';
$lang['invoices_list_all']                                                    = 'Всички фактури';
$lang['invoices_list_not_have_payment']                                       = 'Фактури без отбелязано плащане';
$lang['invoices_list_recurring']                                              = 'Периодични Фактури';
$lang['invoices_list_made_payment_by']                                        = 'Плащането е извършено от %s';
$lang['invoices_create_invoice_from_recurring_only_on_paid_invoices']         = 'Create new invoice from main recurring invoice only if is with status Paid';
$lang['invoices_create_invoice_from_recurring_only_on_paid_invoices_tooltip'] = 'Create new invoice from the main recurring invoice only if the main invoice is with status paid? If this field is set to No and the recurring invoice is not with status paid the new invoice wont be created';
$lang['view_invoice_pdf_link_pay']                                            = 'Плащане на фактурата';

# Payment modes
$lang['payment_mode_add_edit_description']         = 'Банкови Сметки / Описание';
$lang['payment_mode_add_edit_description_tooltip'] = 'Може да сложите тук вашите банкови реквизити за да се показват в HTML Фактурите';
$lang['payment_modes_dt_description']              = 'Банкови Сметки / Описание';
$lang['payment_modes_add_edit_announcement']       = 'Това са всички възможни плащания в система. Ако желаете може да конфигурирате Онлайн плащания от Настройки-> Онлайн Плащания';
$lang['payment_mode_add_edit_active']              = 'Активно';
$lang['payment_modes_dt_active']                   = 'Активно';

# Contracts
$lang['contract_not_found'] = 'Договорът не е открит. Може би е изтрит, проверете в активността';

# Settings
$lang['setting_bar_heading']                               = 'Настройки';
$lang['settings_group_online_payment_modes']               = 'Онлайн Плащания';
$lang['settings_paymentmethod_mode_label']                 = 'Label';
$lang['settings_paymentmethod_active']                     = 'Активно';
$lang['settings_paymentmethod_currencies']                 = 'Coma Separated Currencies';
$lang['settings_paymentmethod_testing_mode']               = 'Enable Testing Mode';
$lang['settings_paymentmethod_paypal_username']            = 'Paypal API Username';
$lang['settings_paymentmethod_paypal_password']            = 'Paypal API Password';
$lang['settings_paymentmethod_paypal_signature']           = 'API Signature';
$lang['settings_paymentmethod_stripe_api_secret_key']      = 'Stripe API Secret Key';
$lang['settings_paymentmethod_stripe_api_publishable_key'] = 'Stripe Publishable Key';
$lang['settings_limit_top_search_bar_results']             = 'Limit Top Search Bar Results to';

## Clients
$lang['client_phonenumber'] = 'Телефон';

# Main Clients
$lang['clients_register']                          = 'Регистрация';
$lang['clients_profile_updated']                   = 'Профилът Ви беше обновен';
$lang['clients_successfully_registered']           = 'Благодарим Ви за регистрацията';
$lang['clients_account_created_but_not_logged_in'] = 'Your account has been created but you are not logged in our system automatically. Please try to login';

# Tickets
$lang['clients_tickets_heading'] = 'Техническа Поддръжка';

# Payments
$lang['payment_for_invoice'] = 'Плащане за Фактура';
$lang['payment_total']       = 'Общо: %s';

# Invoice
$lang['invoice_html_online_payment']             = 'Онлайн Плащане';
$lang['invoice_html_online_payment_button_text'] = 'Плати Сега';
$lang['invoice_html_payment_modes_not_selected'] = 'Моля изберете начин за плащане';
$lang['invoice_html_amount_blank']               = 'Общата стойност не може да бъде празна или нулева';
$lang['invoice_html_offline_payment']            = 'Начин на плащане';
$lang['invoice_html_amount']                     = 'Сума';

# Version 1.0.2
# DataTables
$lang['dt_button_column_visibility'] = 'Видимост';
$lang['dt_button_reload']            = 'Обнови';
$lang['dt_button_excel']             = 'Excel';
$lang['dt_button_csv']               = 'CSV';
$lang['dt_button_pdf']               = 'PDF';
$lang['dt_button_print']             = 'Принтирай';
$lang['is_not_active_export']        = 'Не';
$lang['is_active_export']            = 'Да';

# Invoice
$lang['invoice_add_edit_advanced_options']                = 'Разширени функционалности';
$lang['invoice_add_edit_allowed_payment_modes']           = 'Промени начина на плащане';
$lang['invoice_add_edit_recurring_invoices_from_invoice'] = 'Задай периодично издаване';
$lang['invoice_add_edit_no_payment_modes_found']          = 'No payment modes found.';
$lang['invoice_html_total_pay']                           = 'Общо: %s';

# Email templates
$lang['email_templates_table_heading_name'] = 'Шаблони наименования';

# General
$lang['discount_type']            = 'Вид Отстъпки';
$lang['discount_type_after_tax']  = 'След Данъци';
$lang['discount_type_before_tax'] = 'Преди Данъци';
$lang['terms_and_conditions']     = 'Общи разпоредби';
$lang['reference_no']             = 'Референция #';
$lang['no_discount']              = 'Без отстъпки';
$lang['view_stats_tooltip']       = 'Преглед на статистиката';

# Clients
$lang['zip_from_date']            = 'От дата:';
$lang['zip_to_date']              = 'До дата:';
$lang['client_zip_payments']      = 'ZIP Плащания';
$lang['client_zip_invoices']      = 'ZIP Фактури';
$lang['client_zip_estimates']     = 'ZIP Проформи';
$lang['client_zip_status']        = 'Статус';
$lang['client_zip_status_all']    = 'Всички';
$lang['client_zip_payment_modes'] = 'Плащането е направено от';
$lang['client_zip_no_data_found'] = 'No %s found';

# Payments
$lang['payment_mode']         = 'Начин за Плащане';
$lang['payment_view_heading'] = 'Плащане';

# Settings
$lang['settings_allow_payment_amount_to_be_modified'] = 'Всички клиенти да могат да променят стойността на сумата (за онлайн плащания)';

$lang['settings_delete_only_on_last_invoice']                       = 'Delete invoice allowed only on last invoice';
$lang['settings_sales_estimate_prefix']                             = 'Estimate Number Prefix';
$lang['settings_sales_next_estimate_number']                        = 'Next estimate Number';
$lang['settings_sales_next_estimate_number_tooltip']                = 'Set this field to 1 if you want to start from begining';
$lang['settings_sales_decrement_estimate_number_on_delete']         = 'Decrement estimate number on delete';
$lang['settings_sales_decrement_estimate_number_on_delete_tooltip'] = 'Do you want to decrement the estimate number when the last estimate is deleted? Ex. If is set this option to YES and before estimate delete the next estimate number is 15 the next estimate number will decrement to 14 for the next estimate if is set to NO the number will remain to 15';
$lang['settings_sales_estimate_number_format']                      = 'Estimate Number Format';
$lang['settings_sales_estimate_number_format_year_based']           = 'Year Based';
$lang['settings_sales_estimate_number_format_number_based']         = 'Number Based (000001)';
$lang['settings_delete_only_on_last_estimate']                      = 'Delete estimate allowed only on last invoice';
$lang['settings_send_test_email_heading']                           = 'Send Test Email';
$lang['settings_send_test_email_subheading']                        = 'Send test email to make sure that your SMTP settings is set correctly.';
$lang['settings_send_test_email_string']                            = 'Имейл Address';
$lang['settings_smtp_settings_heading']                             = 'SMTP Settings';
$lang['settings_smtp_settings_subheading']                          = 'Setup main email';
$lang['settings_sales_heading_general']                             = 'Общи';
$lang['settings_sales_heading_invoice']                             = 'Фактура';
$lang['settings_sales_heading_estimates']                           = 'Проформи';
$lang['settings_sales_cron_invoice_heading']                        = 'Фактура';

# Tasks
$lang['tasks_dt_datestart'] = 'Начална дата';

# Invoice General
$lang['invoice_discount'] = 'Отстъпка';

# Settings
$lang['settings_rtl_support_admin']                                   = 'RTL Admin Area (Right to Left) BETA';
$lang['settings_rtl_support_client']                                  = 'RTL Client Area (Right to Left) BETA';
$lang['settings_estimate_auto_convert_to_invoice_on_client_accept']   = 'Автоматично издай фактура, след като клиента потвърди че е получил проформата';
$lang['settings_exclude_estimate_from_client_area_with_draft_status'] = 'Exclude estimates with draft status from client area';

# Months
$lang['January']   = 'Януари';
$lang['February']  = 'Февруари';
$lang['March']     = 'Март';
$lang['April']     = 'Април';
$lang['May']       = 'Май';
$lang['June']      = 'Юни';
$lang['July']      = 'Юли';
$lang['August']    = 'Август';
$lang['September'] = 'Септември';
$lang['October']   = 'Октомври';
$lang['November']  = 'Ноември';
$lang['December']  = 'Декември';

# Time ago function translate
$lang['time_ago_just_now']  = 'Току що';
$lang['time_ago_minute']    = 'преди минута';
$lang['time_ago_minutes']   = '%s минути назад';
$lang['time_ago_hour']      = 'преди час';
$lang['time_ago_hours']     = '%s часа назад';
$lang['time_ago_yesterday'] = 'вчера';
$lang['time_ago_days']      = '%s дни назад';
$lang['time_ago_week']      = 'преди седмица';
$lang['time_ago_weeks']     = '%s седмици назад';
$lang['time_ago_month']     = 'преди месец';
$lang['time_ago_months']    = '%s месеца назад';
$lang['time_ago_year']      = 'преди година';
$lang['time_ago_years']     = '%s години назад';

# Estimates
$lang['estimates']                                = 'Проформи';
$lang['estimate']                                 = 'Проформа';
$lang['estimate_lowercase']                       = 'проформа';
$lang['create_new_estimate']                      = 'Нова Проформа';
$lang['view_estimate']                            = 'Виж проформа';
$lang['estimate_sent_to_client_success']          = 'Проформата е изпратена до клиента';
$lang['estimate_sent_to_client_fail']             = 'Възникна проблем при изпращане на проформата';
$lang['estimate_view']                            = 'Виж проформа';
$lang['estimate_select_customer']                 = 'Клиент';
$lang['estimate_add_edit_number']                 = 'Проформа №';
$lang['estimate_add_edit_date']                   = 'Издадена на';
$lang['estimate_add_edit_expirydate']             = 'Последна дата за издаване';
$lang['estimate_add_edit_currency']               = 'Валута';
$lang['estimate_add_edit_client_note']            = 'Начин на плащане';
$lang['estimate_add_edit_admin_note']             = 'Забележка (не се вижда от клиента)';
$lang['estimates_toggle_table_tooltip']           = 'Преглед на цялата таблица';
$lang['estimate_add_edit_advanced_options']       = 'Разширени Функционалности';
$lang['estimate_to']                              = 'До';
$lang['estimates_list_all']                       = 'Всички проформи';
$lang['estimate_invoiced_date']                   = 'Дата на издаване на проформата %s';
$lang['edit_estimate_tooltip']                    = 'Промени Проформа';
$lang['delete_estimate_tooltip']                  = 'Изтрий Проформа';
$lang['estimate_sent_to_email_tooltip']           = 'Изпрати по имейл';
$lang['estimate_already_send_to_client_tooltip']  = 'Проформата е вече изпратена до клиента от %s';
$lang['send_overdue_notice_tooltip']              = 'Изпрати напомняне за плащане';
$lang['estimate_view_activity_tooltip']           = 'Виж активността';
$lang['estimate_send_to_client_modal_heading']    = 'Изпрати до клиента';
$lang['estimate_send_to_client_attach_pdf']       = 'Прикачи PDF проформа';
$lang['estimate_send_to_client_preview_template'] = 'Прегледай имейл темплейта';
$lang['estimate_dt_table_heading_number']         = 'Проформа №';
$lang['estimate_dt_table_heading_date']           = 'Дата';
$lang['estimate_dt_table_heading_client']         = 'Клиент';
$lang['estimate_dt_table_heading_expirydate']     = 'Крайна дата за издаване';
$lang['estimate_dt_table_heading_amount']         = 'Сума';
$lang['estimate_dt_table_heading_status']         = 'Статус';
$lang['estimate_convert_to_invoice']              = 'Издай Фактура';

# Clients
$lang['client_payments_tab']  = 'Плащания';
$lang['client_reminders_tab'] = 'Напомняния';

# Estimate General
$lang['estimate_pdf_heading']            = 'ПРОФОРМА';
$lang['estimate_table_item_heading']     = 'Наименование на услуга/продукт';
$lang['estimate_table_quantity_heading'] = 'К-во';
$lang['estimate_table_rate_heading']     = 'Ед.цена';
$lang['estimate_table_tax_heading']      = 'Данъци';
$lang['estimate_table_amount_heading']   = 'Сума';
$lang['estimate_subtotal']               = 'Данъчна основа';
$lang['estimate_adjustment']             = 'Закръгляване';
$lang['estimate_discount']               = 'Отстъпка';
$lang['estimate_total']                  = 'Обща стойност';
$lang['estimate_to']                     = 'До';
$lang['estimate_data_date']              = 'Създадена на';
$lang['estimate_data_expiry_date']       = 'Крайна дата за издаване';
$lang['estimate_note']                   = 'Начин на плащане:';
$lang['estimate_status_draft']           = 'Чернови';
$lang['estimate_status_sent']            = 'Изпратени';
$lang['estimate_status_declined']        = 'Отхвърлени';
$lang['estimate_status_accepted']        = 'Приети';
$lang['estimate_status_expired']         = 'Изтичащи';
$lang['estimate_note']                   = 'Начин на плащане:';

## Clients
$lang['clients_estimate_dt_number']             = 'Проформа Фактура №';
$lang['clients_estimate_dt_date']               = 'Дата';
$lang['clients_estimate_dt_duedate']            = 'Крайна Дата';
$lang['clients_estimate_dt_amount']             = 'Сума';
$lang['clients_estimate_dt_status']             = 'Статус';
$lang['clients_nav_estimates']                  = 'Проформи';
$lang['clients_decline_estimate']               = 'Откажи';
$lang['clients_accept_estimate']                = 'Приеми';
$lang['clients_my_estimates']                   = 'Проформи';
$lang['clients_estimate_invoiced_successfully'] = 'Проформата е приета. Прегледайте създадената Фактура';
$lang['clients_estimate_accepted_not_invoiced'] = 'Благодарим Ви, че приемате Проформата!';
$lang['clients_estimate_declined']              = 'Проформата е отказана. Бихте могли да е потвърдите, преди крайният срок';
$lang['clients_estimate_failed_action']         = 'Грешка при маркирането като получена/отхвърлена';
$lang['client_add_edit_profile']                = 'Профил';

# Reports
# Custom Fields
$lang['custom_field']                          = 'Допълнително Поле';
$lang['custom_field_lowercase']                = 'допълнително поле';
$lang['custom_fields']                         = 'Допълнителни Полета';
$lang['new_custom_field']                      = 'Вмъкни допълнително поле';
$lang['custom_field_name']                     = 'Поле Наименование';
$lang['custom_field_add_edit_type']            = 'Вид';
$lang['custom_field_add_edit_belongs_top']     = 'Полето принадлежи към';
$lang['custom_field_add_edit_options']         = 'Опции';
$lang['custom_field_add_edit_options_tooltip'] = 'Only use for Select types. Populate the field by separating the options by coma. Ex. apple,orange,banana';
$lang['custom_field_add_edit_order']           = 'Поредност';
$lang['custom_field_dt_field_to']              = 'Принаджели на';
$lang['custom_field_dt_field_name']            = 'Име';
$lang['custom_field_dt_field_type']            = 'Вид';
$lang['custom_field_add_edit_active']          = 'Активно';
$lang['custom_field_add_edit_disabled']        = 'Неактивно';

# Ticket replies
$lang['ticket_reply'] = 'Отговори на билет';

# Admin Customizer Sidebar
$lang['asc_custom_fields'] = 'Нови Полета';

# Contracts
$lang['contract_types']           = 'Типове Договори';
$lang['contract_type']            = 'Тип Договор';
$lang['new_contract_type']        = 'Добави нов тип договор';
$lang['contract_type_lowercase']  = 'договор';
$lang['contract_type_name']       = 'Наименование на договора';
$lang['contract_types_list_name'] = 'Типове договори';

# Customizer Menu
$lang['acs_contracts']      = 'Договори';
$lang['acs_contract_types'] = 'Типове Договори';

# Version 1.0.4
# Invoice Items
$lang['invoice_item_long_description'] = 'Подробно описание';

# Customers
$lang['clients_list_phone']                = 'Телефон';
$lang['client_expenses_tab']               = 'Разходи';
$lang['customers_summary']                 = 'Клиентска информация';
$lang['customers_summary_active']          = 'Активни';
$lang['customers_summary_inactive']        = 'Изключен(и)';
$lang['customers_summary_logged_in_today'] = 'Активни днес';

# Authentication
$lang['admin_auth_forgot_password_email']     = 'Потребител';
$lang['admin_auth_forgot_password_heading']   = 'Забравена парола';
$lang['admin_auth_login_heading']             = 'Здравей!';
$lang['admin_auth_login_email']               = 'Имейл';
$lang['admin_auth_login_password']            = 'Парола';
$lang['admin_auth_login_remember_me']         = 'Автоматичен вход';
$lang['admin_auth_login_button']              = 'Вход';
$lang['admin_auth_login_fp']                  = 'Забравена парола';
$lang['admin_auth_reset_password_heading']    = 'Промяна на парола';
$lang['admin_auth_reset_password']            = 'Парола';
$lang['admin_auth_reset_password_repeat']     = 'Повтори Парола';
$lang['admin_auth_invalid_email_or_password'] = 'Невалиден мейл или парола';
$lang['admin_auth_inactive_account']          = 'Неактивен профил';

# Calender
$lang['calendar_estimate']          = 'Проформа';
$lang['calendar_invoice']           = 'Фактура';
$lang['calendar_contract']          = 'Договор';
$lang['calendar_customer_reminder'] = 'Client Reminder';
$lang['calendar_event']             = 'Събитие';
$lang['calendar_task']              = 'Задача';

# Leads
$lang['lead_edit_delete_tooltip'] = 'Изтриване';
$lang['lead_attachments']         = 'Файлове';

# Admin Customizer Sidebar
$lang['acs_finance'] = 'Финанси';

# Settings
$lang['settings_show_sale_agent_on_invoices']       = 'Покажи Името на Търговеца';
$lang['settings_show_sale_agent_on_estimates']      = 'Покажи Името на Търговеца';
$lang['settings_predefined_predefined_term']        = 'Предефенирани Общи Разпоредби';
$lang['settings_predefined_clientnote']             = 'Предефенирани бележки';
$lang['settings_custom_pdf_logo_image_url']         = 'Задаване на PDF лого URL (JPG - 210x60px)';
$lang['settings_custom_pdf_logo_image_url_tooltip'] = 'Probably you will have problems with PNG images with transparency that are handled in different way depending on the php-imagick or php-gd version used. Try to update php-imagick and disable php-gd
. If you leave this field blank the uploaded logo will be used.';

# General
$lang['sale_agent_string']               = 'Търговец';
$lang['amount_display_in_base_currency'] = 'Сумата е показана на зададена по подразбиране валута';

# Leads
$lang['leads_summary'] = 'Обзор на запитванията';

# Contracts
$lang['contract_value']                       = 'Договор Стойност';
$lang['contract_trash']                       = 'Архивиран';
$lang['contracts_view_trash']                 = 'Покажи архива';
$lang['contracts_view_all']                   = 'Всички договори';
$lang['contracts_view_exclude_trashed']       = 'Не показвай архива';
$lang['contract_value_tooltip']               = 'Добавете стойност на договора.';
$lang['contract_trash_tooltip']               = 'Ако архивирате договора, няма да бъде показван в клиентската зона и статистиките';
$lang['contract_renew_heading']               = 'Поднови Договор';
$lang['contract_summary_heading']             = 'Обзор на Договорите';
$lang['contract_summary_expired']             = 'Изтекли';
$lang['contract_summary_active']              = 'Активни';
$lang['contract_summary_about_to_expire']     = 'Скоро изтичащи';
$lang['contract_summary_recently_added']      = 'Наскоро добавени';
$lang['contract_summary_trash']               = 'Архив';
$lang['contract_summary_by_type']             = 'Договори по тип';
$lang['contract_summary_by_type_value']       = 'Договори обща стойност по тип';
$lang['contract_renewed_successfully']        = 'Договорът е подновен';
$lang['contract_renewed_fail']                = 'Проблем при подновяване на договора.Свържете се с администратор';
$lang['no_contract_renewals_found']           = 'Подновявания на договора не са открити';
$lang['no_contract_renewals_history_heading'] = 'Подновяване на Договора Хронология';
$lang['contract_renewed_by']                  = '%s поднови този договор';
$lang['contract_renewal_deleted']             = 'Подновяването е изтрито';
$lang['contract_renewal_delete_fail']         = 'Невъзможност за подновяване на договора. Свържете се с администратор';
$lang['contract_renewal_new_value']           = 'Нов Договор Стойност: %s';
$lang['contract_renewal_old_value']           = 'Предишен Договор Стойност: %s';
$lang['contract_renewal_new_start_date']      = 'Нова Начална дата: %s';
$lang['contract_renewal_old_start_date']      = 'Предната начална дата е била: %s';
$lang['contract_renewal_new_end_date']        = 'Нова Крайна дата: %s';
$lang['contract_renewal_old_end_date']        = 'Предната крайна дата е била: %s';
$lang['contract_attachment']                  = 'Приложения';

# Admin Aside Menu
$lang['als_expenses']           = 'Разходи';
$lang['als_reports_expenses']   = 'Разходи';
$lang['als_expenses_vs_income'] = 'Приходи/Разходи';

# Invoices
$lang['invoice_attach_file']           = 'Прикачи файл';
$lang['invoice_mark_as_sent']          = 'Изпратена';
$lang['invoice_marked_as_sent']        = 'Отбелязана като изпратена';
$lang['invoice_marked_as_sent_failed'] = 'Невъзможно отбелязване като изпратена';

# Payments
$lang['payment_transaction_id'] = 'Транзакция ID';

# Settings Menu
$lang['acs_expense_categories'] = 'Бюджетни пера';

# Expeneses
$lang['expense_category']                             = 'Бюджетно перо';
$lang['expense_category_lowercase']                   = 'Бюджетно перо';
$lang['new_expense']                                  = 'Запиши Разход';
$lang['expense_add_edit_name']                        = 'Наименование на бюджетно перо';
$lang['expense_add_edit_description']                 = 'Описание на перото';
$lang['expense_categories']                           = 'Бюджетни пера';
$lang['new_expense_category']                         = 'Нова категория';
$lang['dt_expense_description']                       = 'Описание';
$lang['expense']                                      = 'Разход';
$lang['expenses']                                     = 'Разходи';
$lang['expense_lowercase']                            = 'разход';
$lang['expense_add_edit_customer']                    = 'За Компания';
$lang['expense_add_edit_note']                        = 'Основание (име на получателя/основание за плащане)';
$lang['expense_add_edit_date']                        = 'Дата на заплащане';
$lang['expense_add_edit_amount']                      = 'Сума';
$lang['expense_add_edit_billable']                    = 'За префактуриране';
$lang['expense_add_edit_attach_receipt']              = 'Прикачи разходен документ';
$lang['expense_add_edit_reference_no']                = 'Разходен документ №';
$lang['expense_receipt']                              = 'Разходен Ордер';
$lang['expense_receipt_lowercase']                    = 'разходен ордер';
$lang['expense_dt_table_heading_category']            = 'Категория';
$lang['expense_dt_table_heading_amount']              = 'Сума';
$lang['expense_dt_table_heading_date']                = 'Дата';
$lang['expense_dt_table_heading_reference_no']        = 'Получател';
$lang['expense_dt_table_heading_customer']            = 'За Компания';
$lang['expense_dt_table_heading_payment_mode']        = 'Начин на Плащане';
$lang['expense_converted_to_invoice']                 = 'Разходът е успешно префактуриран към клиента, като е създадена Фактура-Оригинал';
$lang['expense_converted_to_invoice_fail']            = 'Failed to convert this expense to invoice check error log.';
$lang['expense_copy_success']                         = 'Разходът е фактуриран успешно.';
$lang['expense_copy_fail']                            = 'Failed to copy expense. Please check the required fields and try again';
$lang['expenses_list_all']                            = 'Всички';
$lang['expenses_list_billable']                       = 'За фактуриране';
$lang['expenses_list_non_billable']                   = 'Не се фактурира';
$lang['expenses_list_invoiced']                       = 'Фактурирано';
$lang['expenses_list_unbilled']                       = 'Нефактурирано';
$lang['expenses_list_recurring']                      = 'Периодично';
$lang['expense_invoice_delete_not_allowed']           = 'You cant delete this expense. The expense is already invoiced.';
$lang['expense_convert_to_invoice']                   = 'Създай Разхода като Фактура';
$lang['expense_edit']                                 = 'Промени Разход';
$lang['expense_delete']                               = 'Изтрий';
$lang['expense_copy']                                 = 'Копирай';
$lang['expense_invoice_not_created']                  = 'Фактурата не е създадена';
$lang['expense_billed']                               = 'Billed';
$lang['expense_not_billed']                           = 'Not Billed';
$lang['expense_customer']                             = 'Клиент';
$lang['expense_note']                                 = 'Коментари:';
$lang['expense_date']                                 = 'Дата:';
$lang['expense_ref_noe']                              = 'Реф #:';
$lang['expense_amount']                               = 'Сума:';
$lang['expense_recurring_indicator']                  = 'Периодично';
$lang['expense_already_invoiced']                     = 'Този разход е вече фактуриран';
$lang['expense_recurring_auto_create_invoice']        = 'Автоматично създаване на Фактура';
$lang['expense_recurring_send_custom_on_renew']       = 'Send the invoice to customer email when expense repeated';
$lang['expense_recurring_autocreate_invoice_tooltip'] = 'If this option is checked the invoice for the customer will be auto created when the expense will be renewed.';
$lang['expenses_yearly_by_categories']                = 'Годишни Разходи по Категории:';
$lang['total_expenses_for']                           = 'Общо разходи за';
$lang['expenses_report_for']                          = 'Разходи за';

# Custom fields
$lang['custom_field_required']    = 'Задължително';
$lang['custom_field_show_on_pdf'] = 'Покажи в PDF';
$lang['custom_field_leads']       = 'Запитвания';
$lang['custom_field_customers']   = 'Клиенти';
$lang['custom_field_staff']       = 'Акаунти';
$lang['custom_field_contracts']   = 'Договори';
$lang['custom_field_tasks']       = 'Задачи';
$lang['custom_field_expenses']    = 'Разходи';
$lang['custom_field_invoice']     = 'Фактура';
$lang['custom_field_estimate']    = 'Проформа';

# Tickets
$lang['ticket_single_private_staff_notes'] = 'Бележки (невидими за клиента)';

# Business News
$lang['business_news'] = 'Новини';

# Navigation
$lang['nav_todo_items'] = 'Ангажименти';

# Clients
# Contracts
$lang['clients_contracts_type'] = 'Типове договори';

# Version 1.0.5
# General
$lang['no_tax']                              = 'Без Данъци';
$lang['numbers_not_formatted_while_editing'] = 'The rate in the input field is not formated while edit/add item and should remain not formated dont try to format it manually in here.';

# Contracts
$lang['contracts_view_expired']         = 'Изтекли договори';
$lang['contracts_view_without_dateend'] = 'Безсрочни договори';

# Email Templates
$lang['email_template_contracts_fields_heading'] = 'Договори';

# Invoices General
$lang['invoice_estimate_general_options'] = 'Основни Настройки';
$lang['invoice_table_item_description']   = 'Описание';
$lang['invoice_recurring_indicator']      = 'Периодично';

# Estimates
$lang['estimate_convert_to_invoice_successfully'] = 'Успешно генерирахте фактура';
$lang['estimate_table_item_description']          = 'Описание';

# Version 1.0.6
# Invoices
# Currencies
$lang['cant_delete_base_currency'] = 'You cant delete the base currency. You need to assign new base currency the delete this.';
$lang['invoice_copy']              = 'Копирай Фактура';
$lang['invoice_copy_success']      = 'Фактурата е копирана';
$lang['invoice_copy_fail']         = 'Невъзможно копиране на фактурата';
$lang['invoice_due_after_help']    = 'Set zero to avoid calculation';
$lang['show_shipping_on_invoice']  = 'Показвай данни за доставка във фактурите';

# Estimates
$lang['show_shipping_on_estimate']         = 'Показвай данни за доставка във проформите';
$lang['is_invoiced_estimate_delete_error'] = 'This estimate is invoiced. You cant delete the estimate';

# Customers & Invoices / Estimates
$lang['ship_to']                            = 'Адрес за доставка';
$lang['customer_profile_details']           = 'Клиентска Информация';
$lang['billing_shipping']                   = 'Плащане & Доставка';
$lang['billing_address']                    = 'Адрес за фактуриране';
$lang['shipping_address']                   = 'Адрес за доставка';
$lang['billing_street']                     = 'Адрес';
$lang['billing_city']                       = 'Град';
$lang['billing_state']                      = 'Област';
$lang['billing_zip']                        = 'Пощенски Код';
$lang['billing_country']                    = 'Държава';
$lang['shipping_street']                    = 'Адрес';
$lang['shipping_city']                      = 'Град';
$lang['shipping_state']                     = 'Област';
$lang['shipping_zip']                       = 'Пощенски Код';
$lang['shipping_country']                   = 'Държава';
$lang['get_shipping_from_customer_profile'] = 'Вземи адресът за доставка от клиентския профил';

# Customer
$lang['customer_default_currency']                             = 'Основна Валута';
$lang['customer_update_address_info_on_invoices']              = 'Update the shipping/billing info on all previous invoices/estimates';
$lang['customer_update_address_info_on_invoices_help']         = 'If you check this field shipping and billing info will be updated to all invoices and estimates. Note: Invoices with status paid wont be affected.';
$lang['setup_google_api_key_customer_map']                     = 'Setup google api key in order to view to customer map';
$lang['customer_attachments_file']                             = 'Файл';
$lang['client_send_set_password_email']                        = 'Изпрати паролата по имейл';
$lang['customer_billing_same_as_profile']                      = 'Вземи от Клиентския профил';
$lang['customer_billing_copy']                                 = 'Вземи от Адрес за фактуриране';
$lang['customer_map']                                          = 'Карта';
$lang['set_password_email_sent_to_client']                     = 'Email to set password is successfuly sent to the client';
$lang['set_password_email_sent_to_client_and_profile_updated'] = 'Profile updated and email to set password is successfuly sent to the client';
$lang['customer_attachments']                                  = 'Приложения';

// Used in clients side also
$lang['customer_longitude'] = 'Геогр. ширина (Google Maps)';
$lang['customer_latitude']  = 'Геогр. дължина (Google Maps)';

# Authentication
$lang['admin_auth_set_password']         = 'Парола';
$lang['admin_auth_set_password_repeat']  = 'Повтори Парола';
$lang['admin_auth_set_password_heading'] = 'Промени парола';

# General
$lang['apply']                         = 'Запази';
$lang['department_calendar_id']        = 'Google Calendar ID';
$lang['localization_default_language'] = 'Основен език';
$lang['system_default_string']         = 'По подразбиране';
$lang['advanced_options']              = 'Разширени';

# Expenses
$lang['expense_list_invoice']  = 'Фактурирано';
$lang['expense_list_billed']   = 'Платимо';
$lang['expense_list_unbilled'] = 'Неплатимо';

# Leads
$lang['lead_merge_custom_field']          = 'Merge as custom field';
$lang['lead_merge_custom_field_existing'] = 'Merge with existing database field';
$lang['lead_dont_merge_custom_field']     = 'Dont merge';
$lang['lost_leads']                       = 'Некачествени Запитвания';
$lang['junk_leads']                       = 'Отказани Запитвания';
$lang['lead_mark_as_lost']                = 'Некачествено';
$lang['lead_unmark_as_lost']              = 'Отмени';
$lang['lead_marked_as_lost']              = 'Запитването е маркирано като некачествено';
$lang['lead_unmarked_as_lost']            = 'Запитването вече не е некачествено';
$lang['leads_status_color']               = 'Цвят';
$lang['lead_mark_as_junk']                = 'Отказано';
$lang['lead_unmark_as_junk']              = 'Отмени';
$lang['lead_marked_as_junk']              = 'Запитването е маркирано като отказано';
$lang['lead_unmarked_as_junk']            = 'Запитването вече не е отказано';
$lang['lead_not_found']                   = 'Запитването не е намерено';
$lang['lead_lost']                        = 'Некачествено';
$lang['lead_junk']                        = 'Отказано';
$lang['leads_not_assigned']               = 'Невъзложено';

# Contacts
$lang['contract_not_visible_to_client'] = 'Скрий от клиента?';
$lang['contract_edit_overview']         = 'Договор преглед';
$lang['contract_attachments']           = 'Приложения';

# Tasks
$lang['task_view_make_public']     = 'Направи публична';
$lang['task_is_private']           = 'Самостоятелна Задача';
$lang['task_finished']             = 'Завършена';
$lang['task_single_related']       = 'Относно';
$lang['task_unmark_as_complete']   = 'Отмени като завършена';
$lang['task_unmarked_as_complete'] = 'Задачата е отменена като завършена';
$lang['task_relation']             = 'Относно';
$lang['task_public']               = 'Публична задача';
$lang['task_public_help']          = 'Направи публична задача видима за всички потребители в системата, без значение дали са избрани като наблюдатели или отговорници';

# Settings
$lang['settings_general_favicon']                                            = 'Favicon';
$lang['settings_output_client_pdfs_from_admin_area_in_client_language']      = 'Output client PDF documents from admin area in client language';
$lang['settings_output_client_pdfs_from_admin_area_in_client_language_help'] = 'If this options is set to yes and ex. the system default language is english and client have setup language french the pdf documents will be outputed in the client language';
$lang['settings_default_tax']                                                = 'Данъци по подразбиране';
$lang['setup_calendar_by_departments']                                       = 'Настроики за календари по отдели';
$lang['settings_calendar']                                                   = 'Календар';
$lang['settings_sales_invoice_due_after']                                    = 'Падеж за фактурите (дни)';
$lang['settings_google_api']                                                 = 'Google API Key';
$lang['settings_gcal_main_calendar_id']                                      = 'Google Calendar ID';
$lang['settings_gcal_main_calendar_id_help']                                 = 'This is the main company calendar. All events from this calendar will be shown. If you want to specify a calendar based on departments you can add in the department Google Calendar ID.';
$lang['show_on_calendar']                                                    = 'Покажи на Календара';
$lang['show_invoices_on_calendar']                                           = 'Фактури';
$lang['show_estimates_on_calendar']                                          = 'Проформи';
$lang['show_contracts_on_calendar']                                          = 'Договори';
$lang['show_tasks_on_calendar']                                              = 'Задачи';
$lang['show_customer_reminders_on_calendar']                                 = 'Клиентски Напомняния';

# Leads
$lang['copy_custom_fields_convert_to_customer']                      = 'Копирай допълнителните полета в клиентския профил';
$lang['copy_custom_fields_convert_to_customer_help']                 = 'If any of the following custom fields do not exists for customer will be auto created with the same name otherwise only the value will be copied from the lead profile.';
$lang['lead_profile']                                                = 'Профил';
$lang['lead_is_client']                                              = 'Клиент';
$lang['leads_email_integration_folder_no_encryption']                = 'No Encryption';
$lang['leads_email_integration']                                     = 'Email Integration';
$lang['leads_email_active']                                          = 'Активност';
$lang['leads_email_integration_imap']                                = 'IMAP Server';
$lang['leads_email_integration_email']                               = 'Email address (Login)';
$lang['leads_email_integration_password']                            = 'Password';
$lang['leads_email_integration_default_source']                      = 'Default Source';
$lang['leads_email_integration_check_every']                         = 'Check Every (minutes)';
$lang['leads_email_integration_default_assigned']                    = 'Главен отговорник при ново запитване';
$lang['leads_email_encryption']                                      = 'Encryption';
$lang['leads_email_integration_updated']                             = 'Email Integration Updated';
$lang['leads_email_integration_default_status']                      = 'Default Status';
$lang['leads_email_integration_folder']                              = 'Folder';
$lang['leads_email_integration_notify_when_lead_imported']           = 'Notify when lead imported';
$lang['leads_email_integration_only_check_unseen_emails']            = 'Only check non opened emails';
$lang['leads_email_integration_only_check_unseen_emails_help']       = 'The script will auto set the email to opened after check. This is used to prevent checking all the emails again and again. Its not recomended to uncheck this option if you have a lot emails and you have setup a lot forwarding to the email you setup for leads';
$lang['leads_email_integration_notify_when_lead_contact_more_times'] = 'Notify if lead send email multiple times';
$lang['leads_email_integration_test_connection']                     = 'Test IMAP Connection';
$lang['lead_email_connection_ok']                                    = 'IMAP Connection is good';
$lang['lead_email_connection_not_ok']                                = 'IMAP Connection is not okey';
$lang['lead_email_activity']                                         = 'Кореспонденция';
$lang['leads_email_integration_notify_roles']                        = 'Roles to Notify';
$lang['leads_email_integration_notify_staff']                        = 'Staff Members to Notify';
$lang['lead_public']                                                 = 'Публично';

# Knowledge Base
$lang['kb_group_color'] = 'Цвят';
$lang['kb_group_order'] = 'Поредност';

# Utilities - BULK PDF Exporter
$lang['bulk_pdf_exporter']             = 'PDF Експорт';
$lang['bulk_export_pdf_payments']      = 'Плащания';
$lang['bulk_export_pdf_estimates']     = 'Проформи';
$lang['bulk_export_pdf_invoices']      = 'Фактури';
$lang['bulk_pdf_export_button']        = 'Експорт';
$lang['bulk_pdf_export_select_type']   = 'Избери тип';
$lang['no_data_found_bulk_pdf_export'] = 'Няма открита информация';
$lang['bulk_export_status_all']        = 'Всички';
$lang['bulk_export_status']            = 'Статус';
$lang['bulk_export_zip_payment_modes'] = 'Извършени плащания от';
$lang['bulk_export_include_tag']       = 'Етикет (Например:КОПИЕ)';
$lang['bulk_export_include_tag_help']  = 'Изпишете Оригинал или Копие. Всички документи ще бъдат генерирани със зададеният параметър';

# Version 1.0.7
## Customers - portal
$lang['clients_nav_proposals'] = 'Оферти';
$lang['clients_nav_support']   = 'Техническа помощ';

# General
$lang['more']            = 'Още';
$lang['add_item']        = 'Добави елемент';
$lang['goto_admin_area'] = 'Върни се към администрацията';
$lang['delete']          = 'Delete %s';
$lang['welcome_top']     = 'Welcome %s';

# Customers
$lang['customer_permissions']         = 'Достъп';
$lang['customer_permission_invoice']  = 'Фактури';
$lang['customer_permission_estimate'] = 'Проформи';
$lang['customer_permission_proposal'] = 'Оферти';
$lang['customer_permission_contract'] = 'Договори';
$lang['customer_permission_support']  = 'Поддръжка';


#Tasks
$lang['task_related_to'] = 'Свързана към';

# Send file
$lang['custom_file_fail_send']    = 'Failed to send file';
$lang['custom_file_success_send'] = 'Успешно изпратен файл до %s';
$lang['send_file_subject']        = 'Email относно';
$lang['send_file_email']          = 'Email адрес';
$lang['send_file_message']        = 'Съобщение';
$lang['send_file']                = 'Изпрати файл';
$lang['add_checklist_item']       = 'Добави точка в чеклиста';
$lang['task_checklist_items']     = 'Чеклист';

# Import
$lang['default_pass_clients_import'] = 'Временна парола за всички клиенти';
$lang['simulate_import']             = 'Тествай импорт процеса';
$lang['import_upload_failed']        = 'Upload Failed';
$lang['import_total_imported']       = 'Общо импортнати: %s';
$lang['import_leads']                = 'Импорт на сделки';
$lang['import_customers']            = 'Импорт на клиентска база';
$lang['choose_csv_file']             = 'Избери CSV файл';
$lang['import']                      = 'Импорт';
$lang['lead_import_status']          = 'Статус';
$lang['lead_import_source']          = 'Източник';

# Bulk PDF Export
$lang['bulk_export_pdf_proposals'] = 'Оферти';

# Invoices
$lang['delete_invoice'] = 'Delete';

# Calendar
$lang['calendar_lead_reminder'] = 'Напомняне за потенциален клиент';
$lang['items']                  = 'Каталог';
$lang['support']                = 'Поддръжка';
$lang['new_ticket']             = 'Нов билет';

# Reminders
$lang['lead_set_reminder_title'] = 'Ново напомняне';
$lang['set_reminder_tooltip']    = 'Тази опция ви позволява никога да не забравяте нещо за вашите клиенти.';
$lang['client_reminders_tab']    = 'Напомняне';
$lang['leads_reminders_tab']     = 'Предприети действия';

# Tickets
$lang['delete_ticket_reply']  = 'Изтрий коментара';
$lang['ticket_priority_edit'] = 'Промени Приоритет';
$lang['ticket_priority_add']  = 'Добави Приоритет';
$lang['ticket_status_edit']   = 'Промени Статус';
$lang['ticket_service_edit']  = 'Промени Услуга';
$lang['edit_department']      = 'Промени Отдела';

# Expenses
$lang['edit_expense_category'] = 'Промени Разходната категория';

# Settings
$lang['customer_default_country']                                 = 'Държава (по подразбиране)';
$lang['settings_sales_require_client_logged_in_to_view_estimate'] = 'Require client to be logged in to view estimate';
$lang['set_reminder']                                             = 'Ново напомняне';
$lang['set_reminder_date']                                        = 'Кога?';
$lang['reminder_description']                                     = 'Ново последващо действие';
$lang['reminder_notify_me_by_email']                              = 'Изпращане на напомнящ имейл';
$lang['reminder_added_successfully']                              = 'Ще получите напомняне за последващото действие.';
$lang['reminder_description']                                     = 'За какво?';
$lang['reminder_date']                                            = 'Дата';
$lang['reminder_staff']                                           = 'Отнесено до';
$lang['reminder_is_notified']                                     = 'Видяно?';
$lang['reminder_is_notified_boolean_no']                          = 'Не';
$lang['reminder_is_notified_boolean_yes']                         = 'Да';
$lang['reminder_set_to']                                          = 'Отнесено до';
$lang['reminder_deleted']                                         = 'Вие изтрихте напомнянето успешно.';
$lang['reminder_failed_to_delete']                                = 'Failed to delete the reminder';
$lang['show_invoice_estimate_status_on_pdf']                      = 'Show invoice/estimate status on PDF';
$lang['email_piping_default_priority']                            = 'Default priority on piped ticket';
$lang['show_lead_reminders_on_calendar']                          = 'Запитвания';
$lang['tickets_piping']                                           = 'Email Piping';
$lang['email_piping_only_replies']                                = 'Only Replies Allowed by Email';
$lang['email_piping_only_registered']                             = 'Pipe Only on Registed Users';

# Estimates
$lang['view_estimate_as_client']         = 'Виж Проформата като клиент';
$lang['estimate_mark_as']                = 'Промени статус %s';
$lang['estimate_status_changed_success'] = 'Статусът на Проформата е променен';
$lang['estimate_status_changed_fail']    = 'Failed to change estimate status';

# Proposals
$lang['proposal_to']                            = 'Дружество / Име';
$lang['proposal_date']                          = 'Дата';
$lang['proposal_address']                       = 'Адрес';
$lang['proposal_phone']                         = 'Телефон';
$lang['proposal_email']                         = 'Email';
$lang['proposal_date_created']                  = 'Създадено';
$lang['proposal_open_till']                     = 'Валидност';
$lang['proposal_status_open']                   = 'Одобрена';
$lang['proposal_status_accepted']               = 'Приета';
$lang['proposal_status_declined']               = 'Отхвърлена';
$lang['proposal_status_sent']                   = 'Изпратена';
$lang['proposal_expired']                       = 'Изтекла';
$lang['proposal_subject']                       = 'Относно';
$lang['proposal_total']                         = 'Обща сума';
$lang['proposal_status']                        = 'Статус';
$lang['proposals_list_all']                     = 'Всички';
$lang['proposals_leads_related']                = 'Отнесена до потенциален клиент';
$lang['proposals_customers_related']            = 'Отнесена до клиент';
$lang['proposal_related']                       = 'Отнесена към';
$lang['proposal_for_lead']                      = 'Потенциал';
$lang['proposal_for_customer']                  = 'Клиент';
$lang['proposal']                               = 'Оферта';
$lang['proposal_lowercase']                     = 'оферта';
$lang['proposals']                              = 'Оферти';
$lang['proposals_lowercase']                    = 'оферти';
$lang['new_proposal']                           = 'Направи Оферта';
$lang['proposal_currency']                      = 'Валута';
$lang['proposal_allow_comments']                = 'Позволи Коментари';
$lang['proposal_allow_comments_help']           = 'If you check this options comments will be allowed when your clients view the proposal.';
$lang['proposal_edit']                          = 'Промени';
$lang['proposal_pdf']                           = 'PDF';
$lang['proposal_send_to_email']                 = 'Изпрати до Email';
$lang['proposal_send_to_email_title']           = 'Изпрати офертата до Email';
$lang['proposal_attach_pdf']                    = 'Прикачи PDF';
$lang['proposal_preview_template']              = 'Виж темплейта';
$lang['proposal_view']                          = 'Виж като клиент';
$lang['proposal_copy']                          = 'Копирай';
$lang['proposal_delete']                        = 'Изтрий';
$lang['proposal_to']                            = 'До';
$lang['proposal_add_comment']                   = 'Добави коментар';
$lang['proposal_sent_to_email_success']         = 'Офертата беше изпратена успешно';
$lang['proposal_sent_to_email_fail']            = 'Failed to sent proposal to email';
$lang['proposal_copy_fail']                     = 'Failed to copy proposal';
$lang['proposal_copy_success']                  = 'Офертата беше копирана успешно';
$lang['proposal_status_changed_success']        = 'Статусът на Офертата беше променен успешно';
$lang['proposal_status_changed_fail']           = 'Failed to change proposal status';
$lang['proposal_assigned']                      = 'Отговорен';
$lang['proposal_comments']                      = 'Коментари';
$lang['proposal_convert']                       = 'Издай';
$lang['proposal_convert_estimate']              = 'Проформа';
$lang['proposal_convert_invoice']               = 'Фактура';
$lang['proposal_convert_to_estimate']           = 'Издай Проформа';
$lang['proposal_convert_to_invoice']            = 'Издай Фактура';
$lang['proposal_convert_to_lead_disabled_help'] = 'You need to convert the lead to customer in order to create %s';
$lang['proposal_convert_not_related_help']      = 'The proposal needs to be related to customer in order to convert to %s';
$lang['proposal_converted_to_estimate_success'] = 'Proposal converted to estimate successfuly';
$lang['proposal_converted_to_invoice_success']  = 'Proposal converted to invoice successfuly';
$lang['proposal_converted_to_estimate_fail']    = 'Failed to convert proposal to estimate';
$lang['proposal_converted_to_invoice_fail']     = 'Failed to convert proposal to invoice';

# Proposals - view proposal template
$lang['proposal_total_info']   = 'Общо %s';
$lang['proposal_accept_info']  = 'Приемам';
$lang['proposal_decline_info'] = 'Отхвърлям';
$lang['proposal_pdf_info']     = 'PDF файл';

# Customers Portal
$lang['customer_reset_action']            = 'Промени';
$lang['customer_reset_password_heading']  = 'Промени паролата';
$lang['customer_forgot_password_heading'] = 'Забравена парола';
$lang['customer_forgot_password']         = 'Забравена парола?';
$lang['customer_reset_password']          = 'Парола';
$lang['customer_reset_password_repeat']   = 'Повтори Парола';
$lang['customer_forgot_password_email']   = 'Email адрес';
$lang['customer_forgot_password_submit']  = 'Изпрати';
$lang['customer_ticket_subject']          = 'Заглавие';

# Email templates
$lang['email_template_proposals_fields_heading'] = 'Оферти';

# Tasks
$lang['add_task_attachments']  = 'Файл';
$lang['task_view_attachments'] = 'Файлове';
$lang['task_view_description'] = 'Относно';

# Customer Groups
$lang['customer_group_add_heading']      = 'Нова Клиентска група';
$lang['customer_group_edit_heading']     = 'Промени Клиентска група';
$lang['new_customer_group']              = 'Нова Клиентска група';
$lang['customer_group_name']             = 'Наименование на група';
$lang['customer_groups']                 = 'Групи';
$lang['customer_group']                  = 'Клиентска група';
$lang['customer_group_lowercase']        = 'клиентска група';
$lang['customer_have_invoices_by']       = 'Имат фактури със статус %s';
$lang['customer_have_estimates_by']      = 'Имат проформи със статус %s';
$lang['customer_have_contracts_by_type'] = 'Имат договор тип %s';

# Custom fields
$lang['custom_field_show_on_table']              = 'Show on table';
$lang['custom_field_show_on_client_portal']      = 'Show on client portal';
$lang['custom_field_show_on_client_portal_help'] = 'If this field is checked also will be shown in tables';
$lang['custom_field_visibility']                 = 'Видимост';

# Knowledge Base
$lang['view_articles_list']     = 'Списък статии';
$lang['view_articles_list_all'] = 'Всички статии';
$lang['als_all_articles']       = 'Всички Статии';
$lang['als_kb_groups']          = 'Категории';

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
$lang['block_sender']                = 'Block Sender';
$lang['sender_blocked']              = 'Sender Blocked';
$lang['sender_blocked_successfully'] = 'Sender Blocked Successfuly';
$lang['ticket_date_created']         = 'Date Created';

#KB
$lang['edit_kb_group'] = 'Edit group';

# Leads
$lang['edit_source'] = 'Edit Source';
$lang['edit_status'] = 'Edit Status';

# Contacts
$lang['contract_type_edit'] = 'Edit Contract Type';

# Reports
$lang['report_by_customer_groups'] = 'Отчет клиентски групи';

# Utilities
$lang['ticket_pipe_log']      = 'Билетна система';
$lang['ticket_pipe_name']     = 'From Name';
$lang['ticket_pipe_email_to'] = 'To';
$lang['ticket_pipe_email']    = 'From Email';
$lang['ticket_pipe_subject']  = 'Subject';
$lang['ticket_pipe_message']  = 'Message';
$lang['ticket_pipe_date']     = 'Date';
$lang['ticket_pipe_status']   = 'Status';

# Home
$lang['home_latest_activity']   = 'Последно';
$lang['home_my_tasks']          = 'Задачи';
$lang['home_my_todo_items']     = 'Ангажименти';
$lang['home_widget_view_all']   = 'Всичко';
$lang['home_stats_full_report'] = 'Подробен репорт';

# Tickets
$lang['ticket_message_updated_successfully'] = 'Съобщението е обновено успешно';

# Validation - Customer Portal
$lang['form_validation_required']    = '{field} полето е задължително.';
$lang['form_validation_valid_email'] = '{field} трябва да съдържа валиден email адрес.';
$lang['form_validation_matches']     = '{field} не съвпада с {param} ';
$lang['form_validation_is_unique']   = '{field} трябва да бъде уникално';

# Version 1.0.8
# Notifications & Leads/Estimates/Invoices Activity Log
$lang['not_event']                                                = 'Event start today - %s ...';
$lang['not_event_public']                                         = 'Public event start today - %s ...';
$lang['not_contract_expiry_reminder']                             = 'Изтекла валидност на договор - %s ...';
$lang['not_recurring_expense_cron_activity_heading']              = 'Периодични разходи от CronJob Активност';
$lang['not_recurring_invoices_cron_activity_heading']             = 'Периодични фактури от CronJob Активност';
$lang['not_recurring_total_renewed']                              = 'Общо подновени: %s';
$lang['not_recurring_expenses_action_taken_from']                 = 'Предприети действия относно повтарящи се разходи';
$lang['not_invoice_created']                                      = 'Създадени Фактури:';
$lang['not_invoice_renewed']                                      = 'Подновени Фактури:';
$lang['not_expense_renewed']                                      = 'Подновени Разходи:';
$lang['not_invoice_sent_to_customer']                             = 'Фактурата беше изпратена до клиент: %s';
$lang['not_invoice_sent_yes']                                     = 'Да';
$lang['not_invoice_sent_not']                                     = 'Не';
$lang['not_action_taken_from_recurring_invoice']                  = 'Предприети действия относно периодичните фактури:';
$lang['not_new_reminder_for']                                     = 'New Reminder for %s';
$lang['not_received_one_or_more_messages_lead']                   = 'Постъпило е ново съобщение';
$lang['not_received_lead_imported_email_integration']             = 'Постъпило е ново запитване';
$lang['not_lead_imported_attachment']                             = 'Добавен е прикачен файл от постъпило запитване';
$lang['not_estimate_status_change']                               = 'Изтеглен файл от имейла';
$lang['not_estimate_status_updated']                              = 'Обновен статус на Проформа: От: %s на %s';
$lang['not_assigned_lead_to_you']                                 = '%s възложи запитване %s на теб';
$lang['not_lead_activity_assigned_to']                            = '%s възложи на %s';
$lang['not_lead_activity_attachment_deleted']                     = 'Изтрити прикачени файлове';
$lang['not_lead_activity_status_updated']                         = '%s обнови статус на запитване от %s на %s';
$lang['not_lead_activity_contacted']                              = '%s се свързва с това запитване на %s';
$lang['not_lead_activity_created']                                = '%s създаде запитване';
$lang['not_lead_activity_marked_lost']                            = 'Отбелязано като загубено';
$lang['not_lead_activity_unmarked_lost']                          = 'Unmarked as lost';
$lang['not_lead_activity_marked_junk']                            = 'Marked as junk';
$lang['not_lead_activity_unmarked_junk']                          = 'Unmarked as junk';
$lang['not_lead_activity_added_attachment']                       = 'Добави файлове';
$lang['not_lead_activity_converted_email']                        = 'Lead email changed. First lead email was: %s and added as customer with email %s';
$lang['not_lead_activity_converted']                              = '%s направи сделка и превърна запитването в клиент';
$lang['not_liked_your_post']                                      = '%s хареса ваша публикация %s ...';
$lang['not_commented_your_post']                                  = '%s коментира на ваша публикация %s ...';
$lang['not_liked_your_comment']                                   = '%s хареса ваш коментар %s ...';
$lang['not_proposal_assigned_to_you']                             = 'Офертата е възложена на теб - %s ...';
$lang['not_proposal_comment_from_client']                         = 'Нов коментар от клиент по офертата %s ...';
$lang['not_proposal_proposal_accepted']                           = 'Офертата беше приета';
$lang['not_proposal_proposal_declined']                           = 'Офертата беше отказана';
$lang['not_task_added_you_as_follower']                           = 'добави теб за наблюдател върху задача %s ...';
$lang['not_task_added_someone_as_follower']                       = 'добави %s за наблюдател върху задача %s ...';
$lang['not_task_added_himself_as_follower']                       = 'е наблюдател за %s ...';
$lang['not_task_assigned_to_you']                                 = 'възложи задача на теб %s ...';
$lang['not_task_assigned_someone']                                = 'възложи %s задача %s ...';
$lang['not_task_will_do_user']                                    = 'създаде задача %s ...';
$lang['not_task_new_attachment']                                  = 'Добавени са прикачени файлове';
$lang['not_task_marked_as_complete']                              = 'отбеляза задачата като завършена %s';
$lang['not_task_unmarked_as_complete']                            = 'върна задачата отново за изпълнение %s';
$lang['not_ticket_assigned_to_you']                               = 'Билетът е зададен към теб - %s ...';
$lang['not_ticket_reassigned_to_you']                             = 'Билетът е отново зададен към теб - %s ...';
$lang['not_estimate_customer_accepted']                           = 'Поздравления! Клиентът прие Проформата с номер %s';
$lang['not_estimate_customer_declined']                           = 'Клиента отказа Проформата с номер %s';
$lang['estimate_activity_converted']                              = 'направи тази проформа към фактура.<br /> %s';
$lang['estimate_activity_created']                                = 'Създаде Проформата';
$lang['invoice_estimate_activity_removed_item']                   = 'премахна елемент <b>%s</b>';
$lang['estimate_activity_number_changed']                         = 'Номерацията на проформата е променена от %s на %s';
$lang['invoice_activity_number_changed']                          = 'Номерацията на фактурата е променена от %s на %s';
$lang['invoice_estimate_activity_updated_item_short_description'] = 'обнови описанието на елемента от %s на %s';
$lang['invoice_estimate_activity_updated_item_long_description']  = 'обнови подробното описание на елемента от <b>%s</b> на <b>%s</b>';
$lang['invoice_estimate_activity_updated_item_rate']              = 'updated item rate from %s to %s';
$lang['invoice_estimate_activity_updated_qty_item']               = 'updated quantity on item <b>%s</b> from %s to %s';
$lang['invoice_estimate_activity_added_item']                     = 'added new item <b>%s</b>';
$lang['invoice_estimate_activity_sent_to_client']                 = 'изпрати проформата на клиент';
$lang['estimate_activity_client_accepted_and_converted']          = 'Клиентът прие тази Проформа.Издадена е Фактура с номер %s';
$lang['estimate_activity_client_accepted']                        = 'Клиентът прие Проформата';
$lang['estimate_activity_client_declined']                        = 'Клиентът отказа Проформата';
$lang['estimate_activity_marked']                                 = 'отбеляза проформата като %s';
$lang['invoice_activity_status_updated']                          = 'Фактурата е обновена от %s на %s';
$lang['invoice_activity_created']                                 = 'създаде фактура';
$lang['invoice_activity_from_expense']                            = 'converted to invoice from expense';
$lang['invoice_activity_recurring_created']                       = '[Периодични] Фактури създадени от CRON';
$lang['invoice_activity_recurring_from_expense_created']          = '[Фактури от Разходи] Фактури създадени от CRON';
$lang['invoice_activity_sent_to_client_cron']                     = 'Фактури изпратени на клиенти от CRON';
$lang['invoice_activity_sent_to_client']                          = 'изпрати фактурата до клиент';
$lang['invoice_activity_marked_as_sent']                          = 'отбеляза фактурата за изпратена';
$lang['invoice_activity_payment_deleted']                         = 'deleted payment for the invoice. Payment #%s, total amount %s';
$lang['invoice_activity_payment_made_by_client']                  = 'Client made payment for the invoice from total <b>%s</b> - %s';
$lang['invoice_activity_payment_made_by_staff']                   = 'recorded payment from total <b>%s</b> - %s';
$lang['invoice_activity_added_attachment']                        = 'Добавен файл';

# Navigation
$lang['top_search_placeholder'] = 'Търсене...';

# Staff
$lang['staff_profile_inactive_account'] = 'Този акаунт е неактивен';

# Estimates
$lang['copy_estimate']                = 'Копирай Проформа';
$lang['estimate_copied_successfully'] = 'Проформата е копирана успешно';
$lang['estimate_copied_fail']         = 'Грешка при копиране на проформата';

# Tasks
$lang['tasks_view_assigned_to_user'] = 'Възложени за мен';
$lang['tasks_view_follower_by_user'] = 'Наблюдавани задачи';
$lang['no_tasks_found']              = 'Няма изходни данни';

# Leads
$lang['leads_dt_datecreated']       = 'Постъпило';
$lang['leads_sort_by']              = 'Подреди по';
$lang['leads_sort_by_datecreated']  = 'Дата на създаване';
$lang['leads_sort_by_kanban_order'] = 'Kan Ban подредба';

# Authentication
$lang['check_email_for_resetting_password'] = 'Проверете вашият имейл за да продължите с възстановяване на вашата паролата';
$lang['inactive_account']                   = 'Неактивен Акаунт';
$lang['error_setting_new_password_key']     = 'Възника грешка при опит за промяна на паролата.';
$lang['password_reset_message']             = 'Твоята парола беше променена успешно!';
$lang['password_reset_message_fail']        = 'Възника грешка при опит за промяна на паролата.Моля опитайте отново.';
$lang['password_reset_key_expired']         = 'Изтекъл линк за възстановяване на паролата. Моля започнете отначало.';
$lang['auth_reset_pass_email_not_found']    = 'Невалиден имейл';
$lang['auth_reset_password_submit']         = 'Възстанови парола';

# Settings
$lang['settings_amount_to_words']          = 'Словом';
$lang['settings_amount_to_words_desc']     = 'Output total amount to words in invoice/estimate';
$lang['settings_amount_to_words_enabled']  = 'Enable';
$lang['settings_total_to_words_lowercase'] = 'Number words into lowercase';
$lang['settings_show_tax_per_item']        = 'Show TAX per item (Invoices/Estimates)';

# Reports
$lang['report_sales_months_three_months'] = 'Последно тримесечие';
$lang['report_invoice_number']            = 'Фактура #';
$lang['report_invoice_customer']          = 'Клиент';
$lang['report_invoice_date']              = 'Създадена на';
$lang['report_invoice_duedate']           = 'Крайна дата';
$lang['report_invoice_amount']            = 'Сума';
$lang['report_invoice_amount_with_tax']   = 'Сума с данъци';
$lang['report_invoice_amount_open']       = 'Дължимо';
$lang['report_invoice_status']            = 'Статус';

# Version 1.0.9
# Home stats
$lang['home_stats_by_project_status'] = 'Статистика за статуса на проектите';
$lang['home_invoice_overview']        = 'Справка Фактури';
$lang['home_estimate_overview']       = 'Справка Проформи';
$lang['home_proposal_overview']       = 'Справка Оферти';
$lang['home_lead_overview']           = 'Справка Запитвания';
$lang['home_my_projects']             = 'Проекти';
$lang['home_announcements']           = 'Известия';

# Settings
$lang['settings_leads_kanban_limit']                                    = 'Limit leads Kan Ban rows per status';
$lang['settings_group_misc']                                            = 'Misc';
$lang['show_projects_on_calendar']                                      = 'Проекти';
$lang['settings_media_max_file_size_upload']                            = 'Max file size upload in Media (MB)';
$lang['settings_client_staff_add_edit_delete_task_comments_first_hour'] = 'Allow customer/staff to add/edit task comments only in the first hour (Administrators not applied)';

# Email templates
$lang['email_template_only_domain_email'] = 'Only domain email';

# Announcements
$lang['dismiss_announcement']   = 'Dismiss announcement';
$lang['dismiss_announcement']   = 'Dismiss announcement';
$lang['announcement_from']      = 'От:';
$lang['announcement_date']      = 'Публикувано на: %s';
$lang['announcement_not_found'] = 'Announcement not found';
$lang['announcements_recent']   = 'Recent Announcements';

# General
$lang['zip_invoices']         = 'Zip Фактури';
$lang['zip_estimates']        = 'Zip Проформи';
$lang['zip_payments']         = 'Zip Плащания';
$lang['setup_help']           = 'Помощ';
$lang['clients_list_company'] = 'Дружество';
$lang['dt_button_export']     = 'Експорт';
$lang['dt_entries']           = 'entries';
$lang['invoice_total_paid']   = 'Изплатени общо';
$lang['invoice_amount_due']   = 'Дължима сума';

# Calendar
$lang['calendar_project'] = 'Проект';

# Leads
$lang['leads_import_assignee']     = 'Търговец';
$lang['customer_from_lead']        = 'Клиент от %s';
$lang['lead_kan_ban_attachments']  = 'Файлове %s';
$lang['leads_sort_by_lastcontact'] = 'Последни обслужени';

# Tasks
$lang['task_comment_added']     = 'Коментарът е добавен успешно.';
$lang['task_duedate']           = 'Крайна дата';
$lang['task_view_comments']     = 'Коментари';
$lang['task_comment_updated']   = 'Коментарът е обновен';
$lang['task_visible_to_client'] = 'Видимо за клиента';
$lang['task_hourly_rate']       = 'Часова ставка';
$lang['hours']                  = 'Часове';
$lang['seconds']                = 'Секунди';
$lang['minutes']                = 'Минути';
$lang['task_start_timer']       = 'Пусни Брояча';
$lang['task_stop_timer']        = 'Спри Брояча';
$lang['task_billable']          = 'За фактуриране';
$lang['task_billable_yes']      = 'Платимо';
$lang['task_billable_no']       = 'Не платимо';
$lang['task_billed']            = 'Платимо';
$lang['task_billed_yes']        = 'Фактурирано';
$lang['task_billed_no']         = 'Нефактурирано ';
$lang['task_user_logged_time']  = 'Твоето отделено време:';
$lang['task_total_logged_time'] = 'Отделено време:';
$lang['task_is_billed']         = 'Тази задача е таксувана във Фактура %s';
$lang['task_statistics']        = 'Статистики';
$lang['task_milestone']         = 'Етап';

# Tickets
$lang['ticket_message_updated_successfully'] = 'Съобщението е обновено успешно';

# Invoices
$lang['invoice_task_item_project_tasks_not_included'] = 'Задачите от проекта не са включени в този списък';
$lang['show_quantity_as']                             = 'Покажи количеството като:';
$lang['quantity_as_qty']                              = 'К-во';
$lang['quantity_as_hours']                            = 'Часове';
$lang['invoice_table_hours_heading']                  = 'Часове';
$lang['bill_tasks']                                   = 'Bill Tasks';
$lang['invoice_estimate_sent_to_email']               = 'Email';

# Estimates
$lang['estimate_table_hours_heading'] = 'Часове';

# General
$lang['is_customer_indicator']         = 'Клиент';
$lang['print']                         = 'Print';
$lang['customer_permission_projects']  = 'Проекти';
$lang['no_timers_found']               = 'Няма стартирани броячи';
$lang['timers_started_confirm_logout'] = 'Има стартиран брояч!<br /><br />Сигурни ли сте че искате да излезете от системата без да го стопирате?';
$lang['confirm_logout']                = 'Изход';
$lang['timer_top_started']             = 'Започнато на %s';

# Projects
$lang['cant_change_billing_type_billed_tasks_found']         = 'You cant change billing type. Billed tasks already found for this project.';
$lang['project_customer_permission_warning']                 = 'The system indicated that the customer dont have permission for projects. The customer wont be able to see the project. Consider add permission in the customer profile tab Permissions.';
$lang['project_invoice_timesheet_start_time']                = 'Започната: %s';
$lang['project_invoice_timesheet_end_time']                  = 'Завършена: %s';
$lang['project_invoice_timesheet_total_logged_time']         = 'Logged time: %s';
$lang['project_view_as_client']                              = 'Виж проекта като клиент';
$lang['project_mark_all_tasks_as_completed']                 = 'Маркирай всичко като изпълнено и спри всички броячи';
$lang['project_not_started_status_tasks_timers_found']       = 'Има стартирван брояч за тази задача. Моля да промените статуса на изпълнение.';
$lang['project_status']                                      = 'Статус';
$lang['project_status_1']                                    = 'Предстои';
$lang['project_status_2']                                    = 'В изпълнение';
$lang['project_status_3']                                    = 'Възпрепятстван';
$lang['project_status_4']                                    = 'Завършен';
$lang['project_file_dateadded']                              = 'Дата на добавяне';
$lang['project_file_filename']                               = 'Наименование';
$lang['project_file__filetype']                              = 'Формат';
$lang['project_file_visible_to_customer']                    = 'Visible to Customer';
$lang['project_file_uploaded_by']                            = 'Добавен от';
$lang['edit_project']                                        = 'Промени проекта';
$lang['copy_project']                                        = 'Копирай проекта';
$lang['delete_project']                                      = 'Изтрий проекта';
$lang['project_task_assigned_to_user']                       = 'Задачата е възложена на теб';
$lang['seconds']                                             = 'Секунди';
$lang['hours']                                               = 'Часове';
$lang['minutes']                                             = 'Минути';
$lang['project']                                             = 'Проект';
$lang['project_lowercase']                                   = 'проект';
$lang['projects']                                            = 'Проекти';
$lang['projects_lowercase']                                  = 'проекти';
$lang['project_settings']                                    = 'Настройки за проекта';
$lang['project_invoiced_successfully']                       = 'Project Invoiced Successfuly';
$lang['new_project']                                         = 'Нов Проект';
$lang['project_files']                                       = 'Файлове';
$lang['project_activity']                                    = 'Дейност';
$lang['project_name']                                        = 'Проект';
$lang['project_description']                                 = 'Информация за проекта';
$lang['project_customer']                                    = 'Клиент';
$lang['project_start_date']                                  = 'Начало';
$lang['project_datecreated']                                 = 'Добавен на';
$lang['project_deadline']                                    = 'Краен срок';
$lang['project_billing_type']                                = 'Заплащане';
$lang['project_billing_type_fixed_cost']                     = 'Фиксирана цена';
$lang['project_billing_type_project_hours']                  = 'Отчитане на часове по проекта';
$lang['project_billing_type_project_task_hours']             = 'Отчитане на часове за задачи';
$lang['project_billing_type_project_task_hours_hourly_rate'] = 'При цена за човекочас';
$lang['project_rate_per_hour']                               = 'Цена за човекочас';
$lang['project_total_cost']                                  = 'Общо';
$lang['project_members']                                     = 'Работен Екип';
$lang['project_member_removed']                              = 'Успешно премахнахте изпълнител от екипа на проекта';
$lang['project_overview']                                    = 'Общ изглед';
$lang['project_gant']                                        = 'План';
$lang['project_milestones']                                  = 'Етапи';
$lang['project_milestone_order']                             = 'Поредност';
$lang['project_milestone_duedate_passed']                    = 'Duedate passed';
$lang['record_timesheet']                                    = 'Отчитане на работа';
$lang['new_milestone']                                       = 'Добави етап';
$lang['edit_milestone']                                      = 'Промени етап';
$lang['milestone_name']                                      = 'Наименование';
$lang['milestone_due_date']                                  = 'Крайна дата';
$lang['project_milestone']                                   = 'Етап';
$lang['project_notes']                                       = 'Бележки';
$lang['project_timesheets']                                  = 'График';
$lang['project_timesheet']                                   = 'Работен отчет';
$lang['milestone_total_logged_time']                         = 'Отделено време';
$lang['project_overview_total_logged_hours']                 = 'Отделени часове общо';
$lang['milestones_uncategorized']                            = 'Некатегоризирани';
$lang['milestone_no_tasks_found']                            = 'Няма намерени задачи';
$lang['project_copied_successfully']                         = 'Проектаната информация е копирана успешно';
$lang['failed_to_copy_project']                              = 'Невъзможност при изкопиране на проекта';
$lang['copy_project_task_include_check_list_items']          = 'Копирай чеклист точки';
$lang['copy_project_task_include_assignees']                 = 'Копирай същите изпълнители';
$lang['copy_project_task_include_followers']                 = 'Копирай същите наблюдатели';
$lang['project_days_left']                                   = 'Оставащи Дни';
$lang['project_open_tasks']                                  = 'Незавършени Задачи';
$lang['timesheet_stop_timer']                                = 'Спри брояча';
$lang['failed_to_add_project_timesheet_end_time_smaller']    = 'Failed to add timesheet. End time is smaller then start time';
$lang['project_timesheet_user']                              = 'Изпълнител';
$lang['project_timesheet_start_time']                        = 'Започната';
$lang['project_timesheet_end_time']                          = 'Завършена';
$lang['project_timesheet_time_spend']                        = 'Изработено време';
$lang['project_timesheet_task']                              = 'Задача';
$lang['project_invoices']                                    = 'Фактури';
$lang['total_logged_hours_by_staff']                         = 'Отделено време';
$lang['invoice_project']                                     = 'Издаване на Фактура';
$lang['invoice_project_info']                                = 'Преглед на Фактурата за Проекта';
$lang['invoice_project_data_single_line']                    = 'Single line';
$lang['invoice_project_data_task_per_item']                  = 'Task per item';
$lang['invoice_project_data_timesheets_individually']        = 'All timesheets individualy';
$lang['invoice_project_item_name_data']                      = 'Item name';
$lang['invoice_project_description_data']                    = 'Description';
$lang['invoice_project_projectname_taskname']                = 'Наименованието на проекта + Задачата';
$lang['invoice_project_all_tasks_total_logged_time']         = 'Всички задачи + отрабеното време за тях';
$lang['invoice_project_project_name_data']                   = 'Наименование на проекта';
$lang['invoice_project_timesheet_individually_data']         = 'Timesheet start time + end time + total logged time';
$lang['invoice_project_total_logged_time_data']              = 'Общо отработено време';
$lang['project_allow_client_to']                             = 'Позволи на клиента да %s';
$lang['project_setting_view_task_attachments']               = 'вижда файловете';
$lang['project_setting_view_task_checklist_items']           = 'вижда чеклистите';
$lang['project_setting_upload_files']                        = 'добавя файлове към проекта';
$lang['project_setting_view_task_comments']                  = 'вижда коментарите';
$lang['project_setting_upload_on_tasks']                     = 'добавя файлове по задачите';
$lang['project_setting_view_task_total_logged_time']         = 'вижда отработеното време за всяка задача';
$lang['project_setting_open_discussions']                    = 'създава дискусии';
$lang['project_setting_comment_on_tasks']                    = 'коментира по задачите';
$lang['project_setting_view_tasks']                          = 'вижда списъка със задачи';
$lang['project_setting_view_milestones']                     = 'вижда етапите по проекта';
$lang['project_setting_view_gantt']                          = 'вижда Графика на Gantt';
$lang['project_setting_view_timesheets']                     = 'вижда отчетите';
$lang['project_setting_view_activity_log']                   = 'вижда активността';
$lang['project_setting_view_team_members']                   = 'вижда екипа към проекта';
$lang['project_discussion_visible_to_customer_yes']          = 'Видимо';
$lang['project_discussion_visible_to_customer_no']           = 'Невидимо';
$lang['project_discussion_posted_on']                        = 'Публикувано на %s';
$lang['project_discussion_posted_by']                        = 'Публикувано от %s';
$lang['project_discussion_failed_to_delete']                 = 'Невъзможност за изтриване на дискусия';
$lang['project_discussion_deleted']                          = 'Дискусията е изтрита успешно';
$lang['project_discussion_no_activity']                      = 'Няма активност';
$lang['project_discussion']                                  = 'Дискусия';
$lang['project_discussions']                                 = 'Дискусии';
$lang['edit_discussion']                                     = 'Промени Дискусията';
$lang['new_project_discussion']                              = 'Нова Дискусия';
$lang['project_discussion_subject']                          = 'Заглавие';
$lang['project_discussion_description']                      = 'Коментар';
$lang['project_discussion_show_to_customer']                 = 'Видимо за клиента';
$lang['project_discussion_total_comments']                   = 'Общо Коментари';
$lang['project_discussion_last_activity']                    = 'Последно';
$lang['discussion_add_comment']                              = 'Добави коментар';
$lang['discussion_newest']                                   = 'Най-нови';
$lang['discussion_oldest']                                   = 'Най-стари';
$lang['discussion_attachments']                              = 'Приложения';
$lang['discussion_send']                                     = 'Изпрати';
$lang['discussion_reply']                                    = 'Отговори';
$lang['discussion_edit']                                     = 'Промени';
$lang['discussion_edited']                                   = 'Променено';
$lang['discussion_you']                                      = 'Ти';
$lang['discussion_save']                                     = 'Запази';
$lang['discussion_delete']                                   = 'Изтрий';
$lang['discussion_view_all_replies']                         = 'Виж всички реплики';
$lang['discussion_hide_replies']                             = 'Скрий репликите';
$lang['discussion_no_comments']                              = 'Няма коментари';
$lang['discussion_no_attachments']                           = 'Няма приложения';
$lang['discussion_attachments_drop']                         = 'Прикачи файл в зоната за качване на файлове';
$lang['project_note']                                        = 'Бележка';
$lang['project_note_private']                                = 'Скрити бележки';
$lang['project_save_note']                                   = 'Запази бележката';

# Project Activity
$lang['project_activity_created']                      = 'Създаде проекта';
$lang['project_activity_updated']                      = 'Обнови проекта';
$lang['project_activity_removed_team_member']          = 'Премахна един от изпълнителите';
$lang['project_activity_added_team_member']            = 'Добави нов изпълнител';
$lang['project_activity_marked_all_tasks_as_complete'] = 'Отбеляза всички задачи като завършени';
$lang['project_activity_recorded_timesheet']           = 'Отчита завършената работа';
$lang['project_activity_task_name']                    = 'Задача:';
$lang['project_activity_deleted_discussion']           = 'Изтри Дискусия';
$lang['project_activity_created_discussion']           = 'Създаде Дискусия';
$lang['project_activity_updated_discussion']           = 'Обнови Дискусия';
$lang['project_activity_commented_on_discussion']      = 'Коментира Дискусията';
$lang['project_activity_deleted_discussion_comment']   = 'Изтри коментар от дискусията';
$lang['project_activity_deleted_milestone']            = 'Премахна Етап от проекта';
$lang['project_activity_updated_milestone']            = 'Обнови Етап от проекта';
$lang['project_activity_created_milestone']            = 'Създаде нов етап за работа по проекта';
$lang['project_activity_invoiced_project']             = 'Фактурира проекта';
$lang['project_activity_task_marked_complete']         = 'Отбеляза задачата като завършена';
$lang['project_activity_task_unmarked_complete']       = 'Отбеляза задачата отново като незавършена';
$lang['project_activity_task_deleted']                 = 'Премахна задача';
$lang['project_activity_new_task_comment']             = 'Коментира по задача';
$lang['project_activity_new_task_attachment']          = 'Прикачи файлове към задачата';
$lang['project_activity_new_task_assignee']            = 'Добави наблюдател по задачата';
$lang['project_activity_task_assignee_removed']        = 'Премахна наблюдател по задачата';
$lang['project_activity_task_timesheet_deleted']       = 'Премахна работен отчет';
$lang['project_activity_uploaded_file']                = 'Прикачи файл към проекта';
$lang['project_activity_status_updated']               = 'Обнови статуса на проекта';
$lang['project_activity_visible_to_customer']          = 'Видим за клиента';
$lang['project_activity_project_file_removed']         = 'Премахна прикачен файл от този проект';

# Customers area
$lang['clients_my_estimates'] = 'Моите проформи';
$lang['client_no_reply']      = 'Няма добавени коментари';
$lang['clients_nav_projects'] = 'Проекти';
$lang['clients_my_projects']  = 'Моите проекти';
$lang['client_profile_image'] = 'Профилна снимка';


$lang['sales_report_cancelled_invoices_not_included'] = 'Анулирани Фактури не са включени в справката';
$lang['invoices_merge_cancel_merged_invoices']        = 'Mark merged invoices as cancelled instead of deleting';
$lang['invoice_marked_as_cancelled_successfully']     = 'Invoice marked as cancelled successfully';
$lang['invoice_unmarked_as_cancelled']                = 'Invoice unmarked as cancelled successfully';

$lang['tasks_reminder_notification_before']                    = 'Task deadline reminder before (Days)';
$lang['not_task_deadline_reminder']                            = 'Task deadline reminder';
$lang['dt_length_menu_all']                                    = 'Всички';
$lang['task_not_finished']                                     = 'Незавършено';
$lang['task_billed_cant_start_timer']                          = 'Task billed. Timer cant be start';
$lang['invoice_task_billable_timers_found']                    = 'Started timers found';
$lang['project_timesheet_not_updated']                         = 'Timesheet not affected';
$lang['project_invoice_task_no_timers_found']                  = 'No timers found for this task';
$lang['invoice_project_tasks_not_started']                     = 'Not yet started | Start Date: %s';
$lang['invoice_project_see_billed_tasks']                      = 'See tasks that will be billed on this invoice';
$lang['invoice_project_all_billable_tasks_marked_as_finished'] = 'All billed tasks will be marked as finished';
$lang['invoice_project_nothing_to_bill']                       = 'No tasks to bill. Feel free to add whatever you want in the invoice items.';
$lang['invoice_project_start_date_tasks_not_passed']           = 'Tasks with future start date cannot be billed';
$lang['invoice_project_stop_all_timers']                       = 'Stop all timers';
$lang['invoice_project_stop_billable_timers_only']             = 'Stop only billable timers';
$lang['project_tasks_total_timers_stopped']                    = 'Stopped total %s timers';
$lang['project_invoice_timers_started']                        = 'Task timers found running on billable tasks, invoice cannot be created. Please stop task timers to create invoice.';
$lang['task_start_timer_only_assignee']                        = 'You need to be asigned on this task to start the timer!';
$lang['task_comments']                                         = 'Коментари';
$lang['invoice_total_tax']                                     = 'ДДС';
$lang['estimates_total_tax']                                   = 'ДДС';
$lang['report_invoice_total_tax']                              = 'ДДС';
$lang['home_tickets']                                          = 'Билети';
$lang['home_project_activity']                                 = 'Последна активност по проекти';
$lang['view_tracking']                                         = 'Проследяване';
$lang['view_date']                                             = 'Дата/Час на преглеждане';
$lang['view_ip']                                               = 'IP Адрес';
$lang['article_total_views']                                   = 'Общ брой прегледи';
$lang['leads_source']                                          = 'Източник';
$lang['invoices_available_for_merging']                        = 'Invoices available for merging';
$lang['invoices_merge_discount']                               = 'You will have to apply discount of total %s manualy to this invoice';
$lang['invoice_merge_number_warning']                          = 'Merging invoices will create gaps in invoice numbers. Please do not merge invoices if you want no gaps in your invoice history. You also have the option of manually adjusting invoice numbers if you want to fill the gaps.';
$lang['invoice_mark_as']                                       = 'Промени като %s';
$lang['invoice_unmark_as']                                     = 'Върни като %s';
$lang['invoice_status_cancelled']                              = 'Анулирана';
$lang['tasks_reminder_notification_before_help']               = 'Notify task assignees about deadline before X days. The notification/email is sent only to the assignees.';

# Version 1.1.0
$lang['project_invoice_select_all_tasks'] = 'Маркирай всички задачи';
$lang['lead_company']                     = 'Дружество';

# Version 1.1.1
$lang['admin_auth_forgot_password_button']       = 'Потвърди';
$lang['task_assigned']                           = 'Изпълнител';
$lang['switch_to_pipeline']                      = 'Премини към карта';
$lang['switch_to_list_view']                     = 'Премини към списък';
$lang['estimates_pipeline']                      = 'Проформи Pipeline';
$lang['estimates_pipeline_sort']                 = 'Подреди по';
$lang['estimates_sort_expiry_date']              = 'Валидно до';
$lang['estimates_sort_pipeline']                 = 'Карта';
$lang['estimates_sort_datecreated']              = 'Дата на създаване';
$lang['estimates_sort_estimate_date']            = 'Дата на проформи';
$lang['estimate_set_reminder_title']             = 'Напомняне за Проформа';
$lang['invoice_set_reminder_title']              = 'Напомняне за Фактура';
$lang['estimate_reminders']                      = 'Напомняния';
$lang['invoice_reminders']                       = 'Напомняния';
$lang['estimate_notes']                          = 'Бележки';
$lang['estimate_add_note']                       = 'Нова Бележка';
$lang['dropdown_non_selected_tex']               = 'Nothing selected';
$lang['auto_close_ticket_after']                 = 'Автоматично затвори билета след (Часове)';
$lang['event_description']                       = 'Относно';
$lang['delete_event']                            = 'Изтриване';
$lang['not_new_ticket_created']                  = 'New ticket opened in your department - %s';
$lang['receive_notification_on_new_ticket']      = 'Receive notification on new ticket opened';
$lang['receive_notification_on_new_ticket_help'] = 'All staff members which belong to the ticket department will receive notification that new ticket is opened';
$lang['event_updated']                           = 'Event updated successfuly';
$lang['customer_contacts']                       = 'Контакти';
$lang['new_contact']                             = 'Нов Контакт';
$lang['contact']                                 = 'Контакт';
$lang['contact_lowercase']                       = 'контакт';
$lang['contact_primary']                         = 'Основен контакт';
$lang['contact_position']                        = 'Позиция';
$lang['contact_active']                          = 'Активност';
$lang['client_company_info']                     = 'Данни за дружеството';
$lang['proposal_save']                           = 'Запиши офертата';
$lang['calendar']                                = 'Календар';
$lang['settings_pdf']                            = 'PDF';
$lang['settings_pdf_font']                       = 'PDF шрифт';
$lang['settings_pdf_table_heading_color']        = 'Items table heading color';
$lang['settings_pdf_table_heading_text_color']   = 'Items table heading text color';
$lang['settings_pdf_font_size']                  = 'Размер на шрифта';
$lang['proposal_status_draft']                   = 'Чернова';
$lang['custom_field_contacts']                   = 'Контакти';
$lang['company_primary_email']                   = 'Основен имейл';
$lang['client_register_contact_info']            = 'Лични данни';
$lang['client_register_company_info']            = 'Данни за дружеството';
$lang['contact_permissions_info']                = 'Make sure to set appropriate permissions for this contact';
$lang['default_leads_kanban_sort']               = 'Default leads Kan Ban Sort';
$lang['default_leads_kanban_sort_type']          = 'Подреди';
$lang['order_ascending']                         = 'Възходящи';
$lang['order_descending']                        = 'Низходящи';
$lang['calendar_expand']                         = 'Разшири';
$lang['proposal_reminders']                      = 'Напомняния';
$lang['proposal_set_reminder_title']             = 'Относно';
$lang['settings_allowed_upload_file_types']      = 'Позволени разширения';
$lang['no_primary_contact']                      = 'This customer dont have primary contact. You need to setup primary contact login as customer. Its recomended all customers to have primary contacts.';
$lang['leads_merge_customer']                    = 'Customer fields merging';
$lang['leads_merge_contact']                     = 'Contact fields merging';
$lang['leads_merge_as_contact_field']            = 'Merge as contact field';
$lang['lead_convert_to_client_phone']            = 'Телефон';
$lang['invoice_status_report_all']               = 'All';
$lang['import_contact_field']                    = 'Contact field';
$lang['file_uploaded_success']                   = 'There is no error, the file uploaded with success';
$lang['file_exceeds_max_filesize']               = 'The uploaded file exceeds the upload_max_filesize directive in php.ini';
$lang['file_exceeds_maxfile_size_in_form']       = 'The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form';
$lang['file_uploaded_partially']                 = 'The uploaded file was only partially uploaded';
$lang['file_not_uploaded']                       = 'No file was uploaded';
$lang['file_missing_temporary_folder']           = 'Missing a temporary folder';
$lang['file_failed_to_write_to_disk']            = 'Failed to write file to disk.';
$lang['file_php_extension_blocked']              = 'A PHP extension stopped the file upload.';
$lang['calendar_expand']                         = 'Разшири';
$lang['view_pdf']                                = 'Виж PDF';
$lang['expense_repeat_every']                    = 'Повторяемост';

# Version 1.1.2
$lang['leads_switch_to_kanban']                   = 'Премини към Карта';
$lang['contract_content']                         = 'Договор';
$lang['contract_save']                            = 'Запиши договора';
$lang['contract_send_to_email']                   = 'Send to email';
$lang['contract_send_to_client_modal_heading']    = 'Send contract to email';
$lang['contract_send_to']                         = 'Send to';
$lang['contract_send_to_client_attach_pdf']       = 'Прикачи PDF';
$lang['contract_send_to_client_preview_template'] = 'Preview Email Template';
$lang['include_attachments_to_email']             = 'Include attachments to email';
$lang['contract_sent_to_client_success']          = 'The contract is successfully sent to the customer';
$lang['contract_sent_to_client_fail']             = 'Failed to send contract';

# Version 1.1.3
$lang['client_invalid_username_or_password'] = 'Невалидно потребителско име или парола';
$lang['client_old_password_incorrect']       = 'Your old password is incorrect';
$lang['client_password_changed']             = 'Your password has been changed';

# Version 1.1.4
$lang['total_leads_deleted']                              = 'Общ брой изтрити запитвания: %s';
$lang['total_clients_deleted']                            = 'Общ брой изтрити клиенти: %s';
$lang['confirm_action_prompt']                            = 'Потвърждавате ли изпълнението на това действие?';
$lang['mass_delete']                                      = 'Изтриване';
$lang['email_protocol']                                   = 'Email Protocol';
$lang['add_edit_members']                                 = 'Добавяне/Промяна';
$lang['project_overview_logged_hours']                    = 'Отработени часове:';
$lang['project_overview_billable_hours']                  = 'Платими часове:';
$lang['project_overview_billed_hours']                    = 'Платени часове:';
$lang['project_overview_unbilled_hours']                  = 'Неплатени часове:';
$lang['calendar_first_day']                               = 'First Day';
$lang['permission_view']                                  = 'View';
$lang['permission_edit']                                  = 'Edit';
$lang['permission_create']                                = 'Create';
$lang['permission_delete']                                = 'Delete';
$lang['permission']                                       = 'Permission';
$lang['permissions']                                      = 'Permissions';
$lang['proposals_pipeline']                               = 'Оферти Pipeline';
$lang['proposals_pipeline_sort']                          = 'Подреди По';
$lang['proposals_sort_open_till']                         = 'Отворени До';
$lang['proposals_sort_pipeline']                          = 'Дата на входиране';
$lang['proposals_sort_datecreated']                       = 'Дата на създаване';
$lang['proposals_sort_proposal_date']                     = 'Дата на офериране';
$lang['is_not_staff_member']                              = 'Not staff member';
$lang['lead_created']                                     = 'Постъпило';
$lang['access_tickets_to_none_staff_members']             = 'Allow access to tickets for none staff members';
$lang['project_expenses']                                 = 'Разходи';
$lang['expense_currency']                                 = 'Валута';
$lang['currency_valid_code_help']                         = 'Make sure to enter valid currency code.';
$lang['week']                                             = 'Седмица';
$lang['weeks']                                            = 'Седмици';
$lang['month']                                            = 'Месец';
$lang['months']                                           = 'Месеци';
$lang['year']                                             = 'Година';
$lang['years']                                            = 'Години';
$lang['expense_report_category']                          = 'Категория';
$lang['expense_paid_via']                                 = 'Платено чрез %s';
$lang['item_as_expense']                                  = '[Expense]';
$lang['show_help_on_setup_menu']                          = 'Show help menu item on setup menu';
$lang['customers_summary_total']                          = 'Броя клиенти';
$lang['filter_by']                                        = 'Подреди по';
$lang['re_captcha']                                       = 'reCAPTCHA';
$lang['recaptcha_site_key']                               = 'Site key';
$lang['recaptcha_secret_key']                             = 'Secret key';
$lang['recaptcha_error']                                  = 'The reCAPTCHA field is telling that you are a robot.';
$lang['smtp_username']                                    = 'SMTP Username';
$lang['smtp_username_help']                               = 'Fill only if your email client use username for SMTP login.';
$lang['pinned_project']                                   = 'Pinned Project';
$lang['pin_project']                                      = 'Pin Project';
$lang['unpin_project']                                    = 'Unpin Project';
$lang['smtp_encryption']                                  = 'Email Encryption';
$lang['smtp_encryption_none']                             = 'None';
$lang['show_proposals_on_calendar']                       = 'Оферти';
$lang['invoice_project_see_billed_expenses']              = 'See expenses who wil be billed on this invoice';
$lang['project_overview_expenses']                        = 'Общо Разходи';
$lang['project_overview_expenses_billable']               = 'Платими Разходи';
$lang['project_overview_expenses_billed']                 = 'Платени Разходи';
$lang['project_overview_expenses_unbilled']               = 'Неплатени Разходи';
$lang['announcement_date_list']                           = 'Дата';
$lang['project_setting_view_finance_overview']            = 'вижда финансова част';
$lang['show_all_tasks_for_project_member']                = 'Allow all staff to see all tasks related to projects (includes non-staff)';
$lang['not_staff_added_as_project_member']                = 'Добави теб към проекта';
$lang['report_expenses_base_currency_select_explanation'] = 'You need to select currency becuase the system found different currencies used for expenses.';

# Version 1.1.6
$lang['project_activity_recorded_expense']   = 'Записан разход';
$lang['save_customer_and_add_contact']       = 'Запази и създай контакт';
$lang['tickets_chart_weekly_opening_stats']  = 'Седмична статистика';
$lang['related_knowledgebase_articles']      = 'От Категорията';
$lang['detailed_overview']                   = 'Списък Задачи';
$lang['tasks_total_checklists_finished']     = 'Общ брой на завършените точки от чеклистите';
$lang['tasks_total_added_attachments']       = 'Общо добавени файлове';
$lang['tasks_total_comments']                = 'Общо коментари';
$lang['task_finished_on_time']               = 'В срок?';
$lang['task_finished_on_time_indicator']     = 'Да';
$lang['task_not_finished_on_time_indicator'] = 'Не';
$lang['filter']                              = 'Филтрирай';
$lang['task_filter_detailed_all_months']     = 'Всички месеци';
$lang['kb_article_slug']                     = 'Slug';

# Version 1.1.7
$lang['email_template_ticket_warning']          = 'If ticket is imported with email piping and the contact does not exists in the ERP the fields wont be replaced.';
$lang['auto_stop_tasks_timers_on_new_timer']    = 'Stop all other started timers when starting new timer';
$lang['notification_when_customer_pay_invoice'] = 'Receive notification when customer pay invoice (built-in)';
$lang['not_invoice_payment_recorded']           = 'Отразено плащане за Фактура - %s';
$lang['email_template_contact_warning']         = 'If contact is not logged while making action the contact merge fields wont be replaced.';
$lang['change_role_permission_warning']         = 'Changing role permissions wont affected current staff members permissions that are using this role.';
$lang['task_copied_successfully']               = 'Task copied successfully';
$lang['failed_to_copy_task']                    = 'Failed to copy task';
$lang['not_project_file_uploaded']              = 'New project file added';
$lang['settings_calendar_color']                = '%s цвят';
$lang['settings_calendar_colors_heading']       = 'Оформление';
$lang['reminder']                               = 'Напомняне';
$lang['back_to_tasks_list']                     = 'Върни се към списък задачи';
$lang['copy_task_confirm']                      = 'Потвърди';
$lang['changing_items_affect_warning']          = 'Changing item info wont affect on the created invoices/estimates.';
$lang['tax_is_used_in_expenses_warning']        = 'You cant update this tax because expenses transactions using this tax are found.';
$lang['note']                                   = 'Note';
$lang['leads_staff_report_converted']           = 'Общо направени сделки';
$lang['leads_staff_report_created']             = 'Общо създадени запитвания';
$lang['leads_staff_report_lost']                = 'Общо загубени запитвания';
$lang['client_go_to_dashboard']                 = 'Върни се към портала';
$lang['show_estimate_reminders_on_calendar']    = 'Проформи напомняния';
$lang['show_invoice_reminders_on_calendar']     = 'Фактури напомняния';
$lang['calendar_estimate_reminder']             = 'Проформа напомняне';
$lang['calendar_invoice_reminder']              = 'Фактура напомняне';
$lang['show_proposal_reminders_on_calendar']    = 'Оферти напомняния';
$lang['calendar_proposal_reminder']             = 'Оферта напомняне';
$lang['proposal_due_after']                     = 'Падеж за оферти (дни)';
$lang['project_progress']                       = 'Прогрес';
$lang['calculate_progress_through_tasks']       = 'Пресметни прогреса на изпълнение чрез завършване на задачите';
$lang['allow_customer_to_change_ticket_status'] = 'Позволи на клиента да смени статуса на билета през клиентския портал';
$lang['switch_to_general_report']               = 'Справка по търговци';
$lang['switch_to_staff_report']                 = 'Обща справка';
$lang['generate']                               = 'Генерирай';
$lang['from_date']                              = 'От дата';
$lang['to_date']                                = 'До дата';
$lang['not_results_found']                      = 'Няма открити резултати';
$lang['lead_lock_after_convert_to_customer']    = 'Dont allow editing the lead after converting to customer (admins not applied)';
$lang['default_pipeline_sort']                  = 'Default pipeline sort';
$lang['toggle_full_view']                       = 'Премини към подробен изглед';
$lang['not_estimate_invoice_deleted']           = 'изтри фактурата';
$lang['not_task_new_comment']                   = 'коментира по задача %s';

# Version 1.1.8
$lang['invoice_number_exists']                  = 'Този номер на Фактува вече съществува .';
$lang['estimate_number_exists']                 = 'Този номер на Проформа вече съществува.';
$lang['email_exists']                           = 'Този имейл вече съществува';
$lang['not_uploaded_project_file']              = 'Добави нов файл';
$lang['not_created_new_project_discussion']     = 'Отворена е дискусия по проекта';
$lang['not_commented_on_project_discussion']    = 'Върнат отговор по дискусия за проекта';
$lang['all_staff_members']                      = 'Всички членове на екипа';
$lang['help_project_permissions']               = 'VIEW allows staff member to see ALL projects. If you only want them to see projects they are assigned (added as members), do not give VIEW permissions.';
$lang['help_tasks_permissions']                 = 'VIEW allows staff member to see ALL tasks. If you only want them to see tasks they are assigned to or following, do not give VIEW permissions.';
$lang['expense_recurring_days']                 = 'Day(s)';
$lang['expense_recurring_weeks']                = 'Week(s)';
$lang['expense_recurring_months']               = 'Month(s)';
$lang['expense_recurring_years']                = 'Years(s)';
$lang['reset_to_default_color']                 = 'Reset to default color';
$lang['pdf_logo_width']                         = 'Logo Width (PX)';
$lang['drop_files_here_to_upload']              = 'Прикачи файл в зоната за качване на файлове';
$lang['browser_not_support_drag_and_drop']      = 'Вашият броузер не поддържа drag\'n\'drop на файлове';
$lang['remove_file']                            = 'Remove file';
$lang['you_can_not_upload_any_more_files']      = 'You can not upload any more files';
$lang['custom_field_only_admin']                = 'Ограничи да се вижда само от администратори';
$lang['leads_default_source']                   = 'Източник подразбиране';
$lang['clear_activity_log']                     = 'Изчисти лога';
$lang['default_contact_permissions']            = 'Права по подразбиране';
$lang['invoice_activity_marked_as_cancelled']   = 'marked invoice as cancelled';
$lang['invoice_activity_unmarked_as_cancelled'] = 'unmarked invoice as cancelled';
$lang['wait_text']                              = 'Моля изчакайте...';
$lang['projects_summary']                       = 'Информация за проекти';
$lang['dept_imap_host']                         = 'IMAP Host';
$lang['dept_encryption']                        = 'Encryption';
$lang['dept_email_password']                    = 'Password';
$lang['dept_email_no_encryption']               = 'No Encryption';
$lang['failed_to_decrypt_password']             = 'Failed to decrypt password';
$lang['delete_mail_after_import']               = 'Delete mail after import?';
$lang['expiry_reminder_enabled']                = 'Уведоми за изтичане на срока';
$lang['send_expiry_reminder_before']            = 'Изпрати уведомлението преди крайният срок (ДНИ)';
$lang['not_expiry_reminder_sent']               = 'Expiry reminder sent';
$lang['send_expiry_reminder']                   = 'Уведоми за изтичане на краен срок';
$lang['sent_expiry_reminder_success']           = 'Уведомлението е изпратено успешно';
$lang['sent_expiry_reminder_fail']              = 'Failed to send expiration reminder';
$lang['leads_default_status']                   = 'Статус по подразбиране';
$lang['item_description_placeholder']           = 'Продукт/Услуга';
$lang['item_long_description_placeholder']      = 'Подробно описание';
$lang['item_quantity_placeholder']              = 'Количество';
$lang['item_rate_placeholder']                  = 'Единична цена';
$lang['tickets_summary']                        = 'Билети към Техническа поддръжка - Обзор';
$lang['tasks_list_priority']                    = 'Приоритет';
$lang['ticket_status_db_2']                     = 'В процес';
$lang['ticket_status_db_1']                     = 'Отворени';
$lang['ticket_status_db_3']                     = 'Отговорени';
$lang['ticket_status_db_4']                     = 'Изчакващи';
$lang['ticket_status_db_5']                     = 'Затворени';
$lang['ticket_priority_db_1']                   = 'Нормален';
$lang['ticket_priority_db_2']                   = 'Висок';
$lang['ticket_priority_db_3']                   = 'Спешен';
$lang['customer_have_projects_by']              = 'Имат проекти със статус %s';
$lang['customer_have_proposals_by']             = 'Имат оферти със статус %s';
$lang['do_not_redirect_payment']                = 'Do not redirect me to the payment processor';
$lang['project_tickets']                        = 'Билети';
$lang['invoice_report']                         = 'Справка Фактури';
$lang['payment_modes_report']                   = 'Справка транзакции';
$lang['customer_admins']                        = 'Акаунт Мениджър';
$lang['assign_admin']                           = 'Добави';
$lang['customer_admin_date_assigned']           = 'Дата на Зачисляване';
$lang['customer_admin_login_as_client_message'] = 'Здравей %s. Вие сте добавен за акаунт мениджър на този клиент. За да прегледате информацията, влезте като клиент.';
$lang['ticket_form_validation_file_size']       = 'Размерът на файла трябва да е по малък от %s';
$lang['has_transactions_currency_base_change']  = 'Changing the base currency is possible only if there are no transactions recorded in that currency. Delete the transactions to change the base currency';
$lang['customers_sort_all']                     = 'Всички';

# Version 1.1.9
$lang['use_recaptcha_customers_area']    = 'Позволи recaptcha в клиентски портал (Login/Register)';
$lang['project_marked_as_finished']      = 'Завършен проект';
$lang['project_status_updated']          = 'Етапът на проекта е променен успешно';
$lang['remove_decimals_on_zero']         = 'Remove decimals on numbers/money with zero decimals (2.00 will become 2, 2.25 will stay 2.25)';
$lang['remove_tax_name_from_item_table'] = 'Remove the tax name from item table row (Invoices/Estimates)';

# Version 1.2.0
$lang['not_billable_expenses_by_categories']      = 'Not billable expenses by categories';
$lang['billable_expenses_by_categories']          = 'Billable expenses by categories';
$lang['format_letter_size']                       = 'A4 Landscape';
$lang['pdf_formats']                              = 'Document formats';
$lang['swap_pdf_info']                            = 'Размяна на данните за Клиент/Дружество (данни за дружество от дясно, данни за клиент от ляво)';
$lang['expenses_filter_by_categories']            = 'По категории';
$lang['task_copy']                                = 'Копирай';
$lang['estimate_status']                          = 'Status';
$lang['expenses_report_exclude_billable']         = 'Не показвай фактурираните разходи';
$lang['expenses_total']                           = 'Общо';
$lang['estimate_activity_added_attachment']       = 'Added attachment';
$lang['show_to_customer']                         = 'Покажи на клиента';
$lang['hide_from_customer']                       = 'Скрий от клиента';
$lang['expenses_report_total']                    = 'Общо';
$lang['expenses_report']                          = 'Справка Разходи';
$lang['expenses_report_total_tax']                = 'Начислени данъци (ДДС)';
$lang['expenses_detailed_report']                 = 'Подробен репорт';
$lang['expense_not_billable']                     = 'Не се Фактурира';
$lang['notification_settings']                    = 'Notification settings';
$lang['staff_with_roles']                         = 'Staff members with roles';
$lang['specific_staff_members']                   = 'Specific Staff Members';
$lang['proposal_mark_as']                         = 'Промени статуса на %s';
$lang['kb_report_total_answers']                  = 'Общо';
$lang['ticket_message_edit']                      = 'Промени';
$lang['invoice_files']                            = 'Фактури Файлове';
$lang['estimate_files']                           = 'Проформи Файлове';
$lang['proposal_files']                           = 'Оферти Файлове';
$lang['invoices_awaiting_payment']                = 'Неплатени Фактури';
$lang['tasks_not_finished']                       = 'Незавършени Задачи';
$lang['outstanding_invoices']                     = 'Неизплатени Суми';
$lang['past_due_invoices']                        = 'Просрочени Суми';
$lang['paid_invoices']                            = 'Изплатено';
$lang['invoice_estimate_year']                    = 'Година';
$lang['task_stats_logged_hours']                  = 'Logged Hours';
$lang['leads_converted_to_client']                = 'Сделки';
$lang['task_assigned_from']                       = 'Задачата е зададена към теб от %s';
$lang['new_note']                                 = 'Нова бележка';
$lang['my_tickets_assigned']                      = 'Билети зададени към мен';
$lang['filter_by_assigned']                       = 'По зададен изпълнител';
$lang['staff_stats_total_logged_time']            = 'Общо отработено';
$lang['staff_stats_last_month_total_logged_time'] = 'Месечно отработено';
$lang['staff_stats_this_month_total_logged_time'] = 'Последният месец';
$lang['staff_stats_last_week_total_logged_time']  = 'Седмично отработено';
$lang['staff_stats_this_week_total_logged_time']  = 'Последната седмица';

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
$lang['milestone_description']                  = 'Информация за етапа';
$lang['description_visible_to_customer']        = 'Покажи на клиента';
$lang['upcoming_tasks']                         = 'Предстоящи задачи';
$lang['payment_credit_card_number']             = 'Card Number';
$lang['payment_credit_card_expiration_date']    = 'Expiration Date';
$lang['payment_billing_email']                  = 'Email';
$lang['submit_payment']                         = 'Submit Payment';
$lang['custom_field_disallow_customer_to_edit'] = 'Disalow customer to edit this field';
$lang['project_due_notice']                     = 'Този проект е в просрочие с %s дни';
$lang['not_lead_added_attachment']              = 'added new attachment to lead %s';
$lang['lead_note_date_added']                   = 'Note added: %s';
$lang['recurring_custom']                       = 'Custom';

// Dont translate these, only added for better readibility already translated for the expenses custom recurring feature.
$lang['invoice_recurring_months'] = $lang['expense_recurring_months'];
$lang['invoice_recurring_years']  = $lang['expense_recurring_years'];
$lang['invoice_recurring_days']   = $lang['expense_recurring_days'];
$lang['invoice_recurring_weeks']  = $lang['expense_recurring_weeks'];

# Version 1.2.4
$lang['document_direction']                                 = 'Direction';
$lang['notify_project_members_status_change']               = 'Notify project members that project status is changed';
$lang['not_project_status_updated']                         = 'Project status updated from %s to %s';
$lang['ticket_not_found']                                   = 'Ticket not found';
$lang['project_not_found']                                  = 'Project not found';
$lang['export_project_data']                                = 'PDF Експорт';
$lang['total_project_members']                              = 'Общ брой на екипа';
$lang['total_project_files']                                = 'Прикачени файлове';
$lang['total_project_discussions_created']                  = 'Създадени Дискусии';
$lang['project_member']                                     = 'Изпълнител';
$lang['total_project_discussions_comments']                 = 'Общо направени коментари';
$lang['staff_total_task_assigned']                          = 'Общо зададени задачи';
$lang['staff_total_comments_on_tasks']                      = 'Коментари по задачи';
$lang['project_members_overview']                           = 'Списък на изпълнителите по проекта';
$lang['project_milestones_overview']                        = 'Списък на етапите по проекта';
$lang['total_tasks_in_milestones']                          = 'Общо задачи към етапите';
$lang['total_task_members_assigned']                        = 'Общо изпълнители по задачите';
$lang['total_task_members_followers']                       = 'Общо наблюдатели по задачите';
$lang['total_milestones']                                   = 'Общо Етапи';
$lang['total_project_worked_days']                          = 'Общо отработени дни';
$lang['finance_overview']                                   = 'Финансова част';
$lang['project_custom_fields']                              = 'Custom fields';
$lang['total_tickets_related_to_project']                   = 'Общо билети свързани към проекта';
$lang['projects_total_invoices_created']                    = 'Общо създадени Фактури';
$lang['do_not_send_invoice_payment_email_template_contact'] = 'Dont send invoice payment recorded email to customer contacts';
$lang['no_preview_available_for_file']                      = 'No preview available for this file.';
$lang['project_activity_deleted_file_discussion_comment']   = 'File discussion comment deleted';
$lang['email_template_discussion_info']                     = 'This template is used for both project discussion comments emails. (files discussions and regular discussions)';
$lang['format_a4_portrait_size']                            = 'Portrait';
$lang['only_show_contact_tickets']                          = 'In customer profile only show tickets related to the logged in contact (Primary contact not applied)';
$lang['cancel_overdue_reminders_invoice']                   = 'Prevent sending overdue reminders for this invoice';
$lang['customer_shipping_address_notice']                   = 'Dont fill shipping address informations if you wont use shipping address on customer invoices';
$lang['timesheets_overview']                                = 'Справка часове';
$lang['invoice_status_draft']                               = 'Чернова';
$lang['save_as_draft']                                      = 'Запази като Чернова';
$lang['convert_and_save_as_draft']                          = 'Convert and save as draft';
$lang['convert']                                            = 'Convert';
$lang['exclude_invoices_draft_from_client_area']            = 'Exclude invoices with draft status from customers area';
$lang['invoice_draft_status_info']                          = 'This invoice is with status Draft, status will be auto changed when you send the invoice to the customer or mark as sent.';
$lang['task_info']                                          = 'Информация за задачата';
$lang['recurring_tasks']                                    = 'Периодични задачи';

// Dont translate these, already translated
$lang['task_repeat_every']                         = $lang['expense_repeat_every'];
$lang['task_recurring_months']                     = $lang['expense_recurring_months'];
$lang['task_recurring_years']                      = $lang['expense_recurring_years'];
$lang['task_recurring_days']                       = $lang['expense_recurring_days'];
$lang['task_recurring_weeks']                      = $lang['expense_recurring_weeks'];
$lang['todays_tasks']                              = 'Задачи за днес';
$lang['payment_mode_invoices_only']                = 'Само Фактури';
$lang['payment_mode_expenses_only']                = 'Само Проформи';
$lang['task_no_checklist_items_found']             = 'Няма чеклисти в тази задача';
$lang['task_no_description']                       = 'Няма описание за тази задача';
$lang['expenses_reminders']                        = 'Напомняния';
$lang['expense_set_reminder_title']                = 'Напомняне за разход';
$lang['calendar_expense_reminder']                 = 'Разходи напомняния';
$lang['recurring_task']                            = 'Периодична Задача';
$lang['disable_email_from_being_sent']             = 'Disable this email from being sent';
$lang['not_sent_indicator']                        = 'Неизпратени';
$lang['proposal_status_revised']                   = 'Коригирана';
$lang['customer_currency_change_notice']           = 'If the customer use other currency then the base currency make sure you select the approprite currency for this customer. Changing the currency is not possible after transactions are recorded.';
$lang['click_to_add_content']                      = 'Click here to add content';
$lang['related_to_project']                        = 'This %s is related to %s: %s';
$lang['back_to_lead']                              = 'Back to lead';
$lang['add_task_timer_started_warning']            = 'Stop current started timer for this task to be able to add new timer manually.';
$lang['sending_email_contact_permissions_warning'] = 'Failed to auto select customer contacts. Please make sure that the customer have associated contacts with permission %s';

# Version 1.2.6
$lang['currently_supported_currencies']                       = 'Поддържани валути';
$lang['authorize_notice']                                     = 'SSL is required if you\'re using the Authorize.Net AIM payment API. Authorize.net only supports 1 currency per account. Make sure you add only 1 currency associated with your Authorize account in the currencies field.';
$lang['settings_paymentmethod_developer_mode']                = 'Developer Mode';
$lang['payment_cardholder_name']                              = 'Cardholder\'s Name';
$lang['settings_paymentmethod_authorize_api_login_id']        = 'API Login ID';
$lang['settings_paymentmethod_mollie_api_key']                = 'API Key';
$lang['settings_paymentmethod_authorize_api_transaction_key'] = 'API Transaction ID';
$lang['settings_paymentmethod_authorize_secret_key']          = 'Secret Key';
$lang['leads_report_converted_notice']                        = 'Only leads thats belongs in the default status Client will be taken as converted leads, if the leads belongs to the default status client and its not converted to customer will be still counted as converted lead';
$lang['payment_method']                                       = 'Payment Method';
$lang['payment_method_info']                                  = 'Some payment gateways support different/multiple payment methods like Credit Card, Paypal, Bank.';

# Version 1.2.7
$lang['dropbox_app_key']                                    = 'Dropbox APP Key';
$lang['project_invoice_select_all_expenses']                = 'Select all expenses';
$lang['role_update_staff_permissions']                      = 'Update all staff members permissions that are using this role';
$lang['customer_active']                                    = 'Active';
$lang['note_updated_successfully']                          = 'Note updated successfully';
$lang['update_note']                                        = 'Update note';
$lang['update_comment']                                     = 'Update comment';
$lang['comment_updated_successfully']                       = 'Comment updated successfully';
$lang['staff_send_welcome_email']                           = 'Send welcome email';
$lang['proposal_warning_email_change']                      = 'Email changed for %s. This %s is linked to proposal/s. Do you want to update all proposals emails linked to %s?';
$lang['update_proposal_email_yes']                          = 'Yes update all linked emails.';
$lang['update_proposal_email_no']                           = 'No, i will update manually.';
$lang['proposals_emails_updated']                           = 'All proposals emails linked to this %s updated to %s';
$lang['custom_field_company']                               = 'Дружество';
$lang['actions']                                            = 'Действия';
$lang['project_mark_as']                                    = 'Промени статуса на %s';
$lang['todo_edit_title']                                    = 'Промени ангажимент';
$lang['additional_action_required']                         = 'Additional action required!';
$lang['project_mark_tasks_finished_confirm']                = 'Потвърди';
$lang['project_marked_as_success']                          = 'Project marked as %s successfully';
$lang['project_marked_as_failed']                           = 'Failed to mark project as %s';
$lang['auto_assign_customer_admin_after_lead_convert']      = 'Auto assign as admin to customer after convert';
$lang['auto_assign_customer_admin_after_lead_convert_help'] = 'If this option is set to YES the staff member that converted lead to customer will be auto assigned as customer admin. NOTE: This option will apply only on staff members that dont have permission for customers VIEW';
$lang['auto_close_tickets_disable']                         = 'Set 0 to disable';
$lang['task_checklist_item_completed_by']                   = 'Завършено от %s';
$lang['staff_email_signature_help']                         = 'If empty default email signature from settings will be used';
$lang['default_task_priority']                              = 'Приоритет по подразбиране';
$lang['project_send_created_email']                         = 'Send project created email';

# Version 1.2.8
$lang['show_transactions_on_invoice_pdf']            = 'Show invoice payments (transactions) on PDF';
$lang['bulk_actions']                                = 'Масови действия';
$lang['additional_filters']                          = 'Още Филтри';
$lang['expenses_available_to_bill']                  = 'Expenses available to bill';
$lang['bulk_action_customers_groups_warning']        = 'If you dont select any group all groups assigned to the selected customers will be removed.';
$lang['customer_attachments_show_in_customers_area'] = 'Show to customers area';
$lang['customer_attachments_show_notice']            = 'Only files uploaded from customer profile have ability to show/hide in customers area.';
$lang['customer_profile_files']                      = 'Files';
$lang['no_files_found']                              = 'No Files Found';
$lang['custom_field_column']                         = 'Grid (Bootstrap Column eq. 12) - Max is 12';
$lang['task_status']                                 = 'Статус';
$lang['task_status_1']                               = 'В изпълнение';
$lang['task_status_2']                               = 'Изчаква коментар';
$lang['task_status_3']                               = 'Възпрепятствано';
$lang['task_status_4']                               = 'Отворена';
$lang['task_status_5']                               = 'Затворена';
$lang['task_mark_as']                                = 'Промени към %s';
$lang['task_marked_as_success']                      = 'Задачата е отбелязана като %s успешно';
$lang['search_tasks']                                = 'Търси Задачи';
$lang['tasks_kanban_limit']                          = 'Limit tasks kan ban rows per status';
$lang['show_on_invoice_on_pdf']                      = 'Show %s on Invoice PDF';
$lang['show_pay_link_to_invoice_pdf']                = 'Show Pay Invoice link to PDF (Not applied if invoice status is Cancelled)';
$lang['no_leads_found']                              = 'No Leads Found';
$lang['created_today']                               = 'Created Today';
$lang['total_tasks_deleted']                         = 'Total Tasks Deleted: %s';
$lang['total_tickets_delete']                        = 'Total Tickets Deleted: %s';
$lang['format_letter_portrait']                      = 'Letter Portrait';
$lang['format_letter_landscape']                     = 'Letter Landscape';
$lang['period_datepicker']                           = 'Период';
$lang['total_by_hourly_rate']                        = 'Общо по часова ставка';
$lang['staff_hourly_rate']                           = $lang['task_hourly_rate'];

// &#37; is for % so the system can confuse for the original fields like %s
$lang['remove_tax_name_from_item_table_help'] = 'eq. Item TAX 15&#37; will be shown as 15&#37; without the tax name (Not applied if multiple taxes with the same name and tax percent found for item)';
$lang['back_to_project']                      = 'Върни се към проекта';
$lang['view_kanban']                          = 'Виж Kan Ban';
$lang['invoice_is_overdue']                   = 'Тази фактура е в просрочие с %s дни';

# Version 1.2.9
$lang['time_decimal']                            = 'Time (decimal)';
$lang['time_h']                                  = 'Time (h)';
$lang['proposal_number_prefix']                  = 'Proposal Number Prefix';
$lang['settings_number_padding_prefix']          = 'Number padding zero\'s for prefix formats <br /> <small>eq. If this value is 3 the number will be formated: 005 or 025</small>';
$lang['this_week_payments']                      = 'Тази седмица плащания';
$lang['last_week_payments']                      = 'Последна седмица плащания';
$lang['not_published_new_post']                  = 'published new post';
$lang['expense_name']                            = 'Наименование';
$lang['expense_name_help']                       = 'За лични разходи';
$lang['adjustments']                             = 'Adjustments';
$lang['payments_received']                       = 'Справка плащания';
$lang['not_lead_activity_created_proposal']      = 'Създаде оферта - %s';
$lang['lead_title']                              = 'Позиция';
$lang['lead_address']                            = 'Адрес';
$lang['lead_city']                               = 'Град';
$lang['lead_state']                              = 'Област';
$lang['lead_country']                            = 'Държава';
$lang['lead_zip']                                = 'Пощенски код';
$lang['lead_is_public_yes']                      = 'Да';
$lang['lead_is_public_no']                       = 'Не';
$lang['lead_info']                               = 'Информация';
$lang['lead_general_info']                       = 'Обслужване';
$lang['lead_latest_activity']                    = 'Последна активност';
$lang['item_description_new_lines_notice']       = 'New lines are not supported for item description. Use the item long description instead.';
$lang['estimates_report']                        = 'Справка Проформи';
$lang['confirm']                                 = 'Потвърди';
$lang['delete_staff']                            = 'Delete Staff Member';
$lang['delete_staff_info']                       = 'Some data for this staff member needs to be transfered to another user. Please select user where you want to transfer the data.';
$lang['estimate_items']                          = 'Проформа артикули';
$lang['no_proposals_found']                      = 'Няма открити оферти';
$lang['no_estimates_found']                      = 'Няма открити проформи';
$lang['pipeline_limit_status']                   = 'Pipeline limit per status';
$lang['settings_update']                         = 'System Update';
$lang['purchase_key']                            = 'Purchase Key';
$lang['update_now']                              = 'Update Now';
$lang['update_available']                        = 'An update is available';
$lang['latest_version']                          = 'Latest Version';
$lang['your_version']                            = 'Your Version';
$lang['using_latest_version']                    = 'You are using the latest version';
$lang['mark_as_active']                          = 'Mark as active';
$lang['customer_inactive_message']               = 'This is inactive customer profile and some features may be disabled';
$lang['active_customers']                        = 'Активни Клиенти';
$lang['inactive_active_customers']               = 'Неактивни Клиенти';
$lang['include_proposal_items_merge_field_help'] = 'Include proposal items with merge field anywhere in proposal content as %s';
$lang['all_data_synced_successfully']            = 'All data synced successfully';
$lang['sync_now']                                = 'Sync Now';
$lang['sync_data']                               = 'Sync Data';
$lang['sync_proposals_up_to_date']               = 'All proposals are up to date, nothing to sync';
$lang['proposal_sync_1_info']                    = 'All proposal data is stored separately for each proposal after creation. Updating the %s info won\'t affect previous created proposals for this %s.';
$lang['proposal_sync_2_info']                    = 'If you recently updated your %s info you can sync all new data to associated proposals. Here is a list of fields you can sync.';

# Version 1.3.0
$lang['expense_include_additional_data_on_convert'] = 'Include additional details to item long description taken from this expense.';

# Version 1.4.0
$lang['calendar_events_limit']                              = 'Calendar Events Limit (Month and Week View)';
$lang['show_page_number_on_pdf']                            = 'Show page number on PDF';
$lang['customer_active_inactive_help']                      = 'Won\'t be shown in dropdowns when creating new records';
$lang['item_groups']                                        = 'Групи';
$lang['item_group']                                         = 'Отнеси към група';
$lang['item_group_name']                                    = 'Група';
$lang['new_item_group']                                     = 'Нова група';
$lang['show_setup_menu_item_only_on_hover']                 = 'Show setup menu item only when hover with mouse on main sidebar area';
$lang['internal_article']                                   = 'Вътрешно ползване';
$lang['expenses_created_from_this_recurring_expense']       = 'Created expenses from this recurring expense';
$lang['convert_to_task']                                    = 'Направи задача';
$lang['next_invoice_date']                                  = 'Дата на следваща Фактура: %s';
$lang['next_expense_date']                                  = 'Дата на следващ Разход: %s';
$lang['invoice_recurring_from']                             = 'Това е Фактура с периодично издаване от номер: %s';
$lang['expense_recurring_from']                             = 'Това е Разход с периодично издаване от номер: %s';
$lang['child_invoices']                                     = 'Child Invoices';
$lang['child_expenses']                                     = 'Child Expenses';
$lang['no_announcements']                                   = 'No Announcements';
$lang['unit']                                               = 'Брой';
$lang['permission_view_own']                                = 'View (Own)';
$lang['permission_global']                                  = 'Global';
$lang['permission_customers_based_on_admins']               = 'Based on customer admins';
$lang['permission_payments_based_on_invoices']              = 'Based on invoices VIEW (Own) permission';
$lang['permission_projects_based_on_assignee']              = 'If staff member do not have permission VIEW (Global) will be shown only projects where staff member is added as project member.';
$lang['permission_tasks_based_on_assignee']                 = 'If staff member do not have permission VIEW (Global) will be shown only tasks where staff member is follower,assigned, task is public or in Setup->Settings->Tasks-> Allow all staff to see all tasks related to projects is set to YES when task is linked to project.';
$lang['settings_paymentmethod_default_selected_on_invoice'] = 'Selected by default on invoice';
$lang['paymentmethod_braintree_merchant_id']                = 'Merchant ID';
$lang['paymentmethod_braintree_private_key']                = 'Private Key';
$lang['paymentmethod_braintree_public_key']                 = 'Public Key';
$lang['company_requires_vat_number_field']                  = 'Company requires the usage of the VAT Number field';
$lang['no_company_view_profile']                            = 'Person - View Profile';
$lang['company_is_required']                                = 'Company field is required?';
$lang['estimate_invoiced']                                  = 'Фактурирана';
$lang['file_date_uploaded']                                 = 'Входирано';
$lang['allow_contact_to_delete_files']                      = 'Allow contacts to delete own files uploaded from customers area';
$lang['file']                                               = 'File';
$lang['customer_contact_person_only_one_allowed']           = 'Only 1 contact is allowed when the company field is not filled. The system will cast this customer as person';
$lang['web_to_lead']                                        = 'Web to Lead';
$lang['web_to_lead_form']                                   = 'Web to Lead Form';
$lang['new_form']                                           = 'New Form';
$lang['form_name']                                          = 'Form Name';
$lang['cf_option_in_use']                                   = 'An option you removed is in use and cant be removed. The option is auto appended to the existing options.';
$lang['form_builder']                                       = 'Form Builder';
$lang['form_information']                                   = 'Form Information & Setup';
$lang['form_builder_create_form_first']                     = 'Create form first to be able to use the form builder.';
$lang['notify_assigned_user']                               = 'Responsible person';
$lang['form_recaptcha']                                     = 'Use Google Recaptcha';
$lang['form_lang_validation']                               = 'Language';
$lang['form_lang_validation_help']                          = 'For Validation Messages';
$lang['form_btn_submit_text']                               = 'Submit button text';
$lang['form_success_submit_msg']                            = 'Message to show after form is succcesfuly submitted';
$lang['total_submissions']                                  = 'Total Submissions';
$lang['form_integration_code']                              = 'Integration Code';
$lang['not_lead_imported_from_form']                        = 'New Lead Imported from Web to Lead Form - %s';
$lang['not_lead_activity_log_attachment']                   = 'Attachment Imported from form - %s';
$lang['form_integration_code_help']                         = 'Copy & Paste the code anywhere in your site to show the form, additionaly you can adjust the width and height px to fit for your website.';
$lang['invoice_not_found']                                  = 'Invoice not found';
$lang['estimate_not_found']                                 = 'Estimate not found';
$lang['expense_not_found']                                  = 'Expense not found';
$lang['proposal_not_found']                                 = 'Proposal not found';
$lang['new_task_assigned_non_user']                         = 'Имаш нова задача - %s';
$lang['no_child_found']                                     = 'No Child %s Found';
$lang['company_vat_number']                                 = 'ЕИК';
$lang['not_lead_assigned_from_form']                        = 'Имаш ново заявка от потенциален клиент';
$lang['not_lead_activity_assigned_from_form']               = 'Отговаря %s';
$lang['form_allow_duplicate']                               = 'Allow duplicate %s to be inserted into database?';
$lang['track_duplicate_by_field']                           = 'Prevent duplicate on field';
$lang['and_track_duplicate_by_field']                       = '+ field (leave blank to track duplicates only by 1 field)';
$lang['create_the_duplicate_form_data_as_task']             = 'Create duplicate %s data as task and assign to responsible staff member';
$lang['create_the_duplicate_form_data_as_task_help']        = 'Used for further review on the submission and take the necessary action';
$lang['currently_selected']                                 = 'Currently Selected';
$lang['search_ajax_empty']                                  = 'Select and begin typing';
$lang['search_ajax_placeholder']                            = 'Type to search...';
$lang['search_ajax_searching']                              = 'Търсене...';
$lang['search_ajax_initialized']                            = 'Start typing to search';
$lang['lead_description']                                   = 'Информация за заявки/въпроси';
$lang['lead_website']                                       = 'Уебсайт';
$lang['invoice_activity_auto_converted_from_estimate']      = 'Invoice auto created from estimate with number %s';
$lang['hour_of_day_perform_auto_operations']                = 'Hour of day to perform automatic operations';
$lang['hour_of_day_perform_auto_operations_format']         = '24 hours format eq. 9 for 9am or 15 for 3pm.';
$lang['inv_hour_of_day_perform_auto_operations_help']       = 'Used for recurring invoices, overdue notices etc..';
$lang['use_minified_files']                                 = 'Use minified files version for css and js (only system files)';

# Version 1.5.0
$lang['logo_favicon_changed_notice']       = 'Logo or Favicon change detected. If you still see the original CRM logo try to clear your browser cache';
$lang['kb_search_articles']                = 'База от знания';
$lang['kb_search']                         = 'Търси';
$lang['have_a_question']                   = 'Имаш въпрос?';
$lang['card_expiration_year']              = 'Expiration Year';
$lang['card_expiration_month']             = 'Expiration Month';
$lang['client_website']                    = 'Уебсайт';
$lang['search_project_members']            = 'Търси колеги от проекта...';
$lang['cf_translate_input_link_title']     = 'Title';
$lang['cf_translate_input_link_url']       = 'URL';
$lang['cf_translate_input_link_tip']       = 'Click here to add link';
$lang['task_edit_delete_timesheet_notice'] = 'Timesheet task is %s, you cant %s the timesheet.';
$lang['department_username']               = 'IMAP Username';
$lang['department_username_help']          = 'Only fill this field if your IMAP server use username to login instead email address. Note that you will still need to add email address.';
$lang['total_tickets_deleted']             = 'Total tickets deleted: %s';

# Version 1.5.1
$lang['ticket_linked_to_project']                                = 'Свързан към проект: %s';
$lang['only_own_files_contacts']                                 = 'Contacts see only own files uploaded in customer area (files uploaded in customer profile)';
$lang['only_own_files_contacts_help']                            = 'If you share the file manually from customer profile to other contacts they wil be able to see the file.';
$lang['share_file_with']                                         = 'Сподели файл';
$lang['file_share_visibility_notice']                            = 'This file is not shared with contacts, toggle visibility again to reload';
$lang['share_file_with_show']                                    = 'Споделен със: %s';
$lang['allow_primary_contact_to_view_edit_billing_and_shipping'] = 'Allow primary contact to view/edit billing & shipping details';
$lang['estimate_due_after']                                      = 'В просрочие след (дни)';

# Version 1.6.0
$lang['my_timesheets']                                   = 'Работно време';
$lang['today']                                           = 'Днес';
$lang['open_in_dropbox']                                 = 'Отвори в Dropbox';
$lang['show_primary_contact']                            = 'Покажи името на контакта %s';
$lang['view_members_timesheets']                         = 'Виж всички отчети';
$lang['priority']                                        = 'Приоритет';
$lang['fetch_from_google']                               = 'Изтегли от google';
$lang['customer_fetch_lat_lng_usage']                    = 'Fill address, city and country before fetching to get best result.';
$lang['g_search_address_not_found']                      = 'The address couldn\'t be found, please try again';
$lang['proposals_report']                                = 'Справка Оферти';
$lang['staff_members_open_tickets_to_all_contacts_help'] = 'If staff member don\'t have permission for customers VIEW only will be able to create new tickets from admin area to customer contacts where is assigned as customer admin.';
$lang['staff_members_open_tickets_to_all_contacts']      = 'Allow staff members to open tickets to all contacts?';
$lang['charts_based_report']                             = 'Статистически графики';
$lang['responsible_admin']                               = 'Администратор';
$lang['tags']                                            = 'Tags';
$lang['tag']                                             = 'Tag';
$lang['customer_map_notice']                             = 'Add longitude and latitude in the customer profile to show the map here';
$lang['default_view']                                    = 'Изглед по подразбиране';
$lang['day']                                             = 'Day';
$lang['agenda']                                          = 'Agenda';
$lang['timesheet_tags']                                  = 'Тагове';
$lang['show_more']                                       = 'Покажи повече';
$lang['show_less']                                       = 'Покажи съкратено';
$lang['project_completed_date']                          = 'Дата на завършване';
$lang['language']                                        = 'Language';
$lang['this_week']                                       = 'Тази седмица';
$lang['last_week']                                       = 'Последна седмица';
$lang['this_month']                                      = 'Този месец';
$lang['last_month']                                      = 'Последен месец';
$lang['no_description_project']                          = 'Липсва описание за проекта';
$lang['sales_string']                                    = 'Продажби';
$lang['no_project_members']                              = 'Няма добавени изпълнители за проекта';
$lang['search_by_tags']                                  = 'Use # + tagname to search by tags';
$lang['project_status_5']                                = 'Отменен(и)';

# Version 1.7.0
$lang['not_activity_new_reminder_created']        = 'set a new reminder for %s with date %s';
$lang['not_activity_new_task_created']            = 'Created new task - %s';
$lang['recurring_invoice_draft_notice']           = 'This invoice is with status draft, you need to mark this invoice as sent. Recurring invoices with status draft won\'t be recreated by cron job.';
$lang['recurring_recreate_hour_notice']           = '%s will be recreated on specific hour of the day based from the setting located at Setup->Settings-Cron Job';
$lang['invoice_project_include_timesheets_notes'] = 'Include each timesheet note in item description';
$lang['events']                                   = 'Събития';
$lang['clear']                                    = 'Изчистване';
$lang['auto_mark_as_public']                      = 'Auto mark as public';
$lang['time_format']                              = 'Time Format';
$lang['time_format_24']                           = '24 hours';
$lang['time_format_12']                           = '12 hours';
$lang['delete_activity_log_older_then']           = 'Delete system activity log older then X months';
$lang['mark_as_read']                             = 'Mark as Read';
$lang['mark_all_as_read']                         = 'Mark all as read';
$lang['tax_1']                                    = 'Tax 1';
$lang['tax_2']                                    = 'Tax 2';
$lang['total_with_tax']                           = 'Total with tax';
$lang['new_task_auto_assign_current_member']      = 'Auto assign task creator when new task is created';
$lang['new_task_auto_assign_current_member_help'] = 'Not applied if task is linked to project and the creator is not project member';
$lang['copy_project_tasks_status']                = 'Tasks Status';
$lang['tasks_summary']                            = 'Информация за задачи';
$lang['vault']                                    = 'Хостинг';
$lang['new_vault_entry']                          = 'Добави хостинг данни';
$lang['server_address']                           = 'Server Address';
$lang['port']                                     = 'Port';
$lang['vault_username']                           = 'Username';
$lang['vault_password']                           = 'Password';
$lang['vault_description']                        = 'Кратко описание';
$lang['vault_entry']                              = 'Vault Entry';
$lang['no_port_provided']                         = 'Not provided';
$lang['view_password']                            = 'View Password';
$lang['security_reasons_re_enter_password']       = 'For security reasons please enter your password below';
$lang['password_change_fill_notice']              = 'Only fill password field if you want to change the password';
$lang['vault_password_user_not_correct']          = 'Your password is not correct, please try again';
$lang['no_vault_entries']                         = 'Vault entries not found for this customer.';
$lang['vault_entry_created_from']                 = 'This vault entry is created by %s';
$lang['vault_entry_last_update']                  = 'Last updated by %s';
$lang['vault_entry_visible_to_all']               = 'Visible to all staff member who have access to this customer';
$lang['vault_entry_visible_creator']              = 'Visible only to me (administrator are not excluded)';
$lang['vault_entry_visible_administrators']       = 'Visible only to administrators';
$lang['my_reminders']                             = 'Моите напомняния';
$lang['reminder_related']                         = 'Относно';
$lang['event_notification']                       = 'Уведомление';
$lang['days']                                     = 'Дни';
$lang['reminder_notification_placeholder']        = 'Eq. 30 minutes before';
$lang['event_color']                              = 'Event Color';
$lang['group_by_task']                            = 'Group by Task';
$lang['save']                                     = 'Запази';
$lang['disable_languages']                        = 'Disable Languages';

# Version 1.8.0
$lang['not_customer_viewed_invoice']                         = 'Фактура с номер %s беше разгледана';
$lang['not_customer_viewed_estimate']                        = 'Проформа-Фактура с номер  %s беше разгледана';
$lang['not_customer_viewed_proposal']                        = 'Оферта %s беше разгледана';
$lang['display_inline']                                      = 'Display Inline';
$lang['email_header']                                        = 'Predefined Header';
$lang['email_footer']                                        = 'Predefined Footer';
$lang['exclude_proposal_from_client_area_with_draft_status'] = 'Exclude proposals with draft status from customers area';
$lang['pusher_app_key']                                      = 'APP Key';
$lang['pusher_app_secret']                                   = 'APP Secret';
$lang['pusher_app_id']                                       = 'APP ID';
$lang['pusher_cluster_notice']                               = 'Leave blank to use default pusher cluster.';
$lang['pusher_enable_realtime_notifications']                = 'Enable Real Time Notifications';
$lang['task_is_overdue']                                     = 'This task is overdue';
$lang['this_year']                                           = 'Тази година';
$lang['last_year']                                           = 'Последната година';
$lang['customer_statement']                                  = 'Отчет';
$lang['customer_statement_for']                              = 'Клиентски отчет за %s';
$lang['account_summary']                                     = 'Клиентски отчет';
$lang['statement_beginning_balance']                         = 'Начален баланс';
$lang['invoiced_amount']                                     = 'Фактурирано';
$lang['amount_paid']                                         = 'Платено';
$lang['statement_from_to']                                   = '%s на %s';
$lang['customer_statement_info']                             = 'Покажи всички фактури и плащания между %s и %s';
$lang['balance_due']                                         = 'Общия баланс';
$lang['statement_heading_date']                              = 'Дата';
$lang['statement_heading_details']                           = 'Операции';
$lang['statement_heading_amount']                            = 'Стойност';
$lang['statement_heading_payments']                          = 'Плащания';
$lang['statement_heading_balance']                           = 'Баланс';
$lang['statement_invoice_details']                           = 'Фактура %s - изтича на %s';
$lang['statement_payment_details']                           = 'Ордер (%s) за фактура %s';
$lang['statement_bill_to']                                   = 'На';
$lang['send_to_email']                                       = 'Изпрати до Email';
$lang['statement_sent_to_client_success']                    = 'The statement is sent successfully to the client';
$lang['statement_sent_to_client_fail']                       = 'Problem while sending the statement';
$lang['view_account_statement']                              = 'Преглед на подробен отчет за извършени плащания';
$lang['text_not_recommended_for_servers_limited_resources']  = 'Not recommended if the server have limited resources. Eq shared hosting';
$lang['tasks_bull_actions_assign_notice']                    = 'If the task is linked to project and the staff member you are assigning the task to is not project member this staff will be auto added as member.';
$lang['company_information']                                 = 'Данни за компанията';
$lang['ticket_form']                                         = 'Изпращане на билет';
$lang['ticket_form_subject']                                 = 'Относно';
$lang['ticket_form_name']                                    = 'Твоето име';
$lang['ticket_form_email']                                   = 'Email адрес';
$lang['ticket_form_department']                              = 'Отдел';
$lang['ticket_form_message']                                 = 'Съобщение';
$lang['ticket_form_priority']                                = 'Приоритет';
$lang['ticket_form_service']                                 = 'Услуги';
$lang['ticket_form_submit']                                  = 'Изпрати';
$lang['ticket_form_attachments']                             = 'Прикачени файлове';
$lang['success_submit_msg']                                  = 'Thank you for contacting us. We will get back to you shortly.';
$lang['vault_entry_share_on_projects']                       = 'Сподели данните за хостинг в проекта';
$lang['project_shared_vault_entry_login_details']            = 'View Customer Site Login Details';
$lang['iso_code']                                            = 'ISO Code';
$lang['estimates_not_invoiced']                              = 'Not Invoiced';
$lang['show_on_ticket_form']                                 = 'Show on ticket form';
$lang['cancel_upload']                                       = 'Cancel Upload';
$lang['show_table_export_button']                            = 'Show table export button';
$lang['show_table_export_all']                               = 'To all staff members';
$lang['show_table_export_admins']                            = 'Only to administrators';
$lang['show_table_export_hide']                              = 'Hide export button for all staff members';
$lang['task_created_by']                                     = 'Created by %s';
$lang['validation_extension_not_allowed']                    = 'File extension not allowed';
$lang['allow_staff_view_proposals_assigned']                 = 'Allow staff members to view proposals where they are assigned to';
$lang['task_users_working_on_tasks_multiple']                = 'Currently %s are working on this task';
$lang['task_users_working_on_tasks_single']                  = 'Currently %s is working on this task';

# Version 1.9.0
$lang['estimated_hours']                               = 'Estimated Hours';
$lang['two_factor_auth_failed_to_send_code']           = 'Failed to send two step authentication code to email, SMTP settings may not be configured properly';
$lang['two_factor_auth_code_sent_successfully']        = 'An email has been sent to %s with verification code to verify your login';
$lang['enable_two_factor_authentication']              = 'Enable Two Factor Authentication';
$lang['two_factor_authentication_info']                = 'Two factor authentication is provided by email, before enable two factor authentication make sure that your SMTP settings are properly configured and the system is able to send an email. Unique authentication key will be sent to email upon login.';
$lang['timesheets_overview_all_members_notice_admins'] = 'Timesheets overview for all staff members is only available for administrators.';
$lang['two_factor_authentication']                     = 'Two Factor Authentication';
$lang['two_factor_authentication_code']                = 'Code';
$lang['admin_two_factor_auth_heading']                 = 'Authentication Code';
$lang['two_factor_code_not_valid']                     = 'Authentication code not valid';
$lang['back_to_login']                                 = 'Go back to login';
$lang['enter_activity']                                = 'Enter Activity';
$lang['attach_files']                                  = 'Прикачи Файлове';
$lang['no_tags_used']                                  = 'No tags used by the system';
$lang['exclude_completed_tasks']                       = 'Exclude Completed Tasks';
$lang['modal_width_class']                             = 'Modal Width Class';
$lang['contract_copy']                                 = 'Copy';
$lang['contract_copied_successfully']                  = 'Contract copied successfully';
$lang['contract_copied_fail']                          = 'Failed to copy contract';
$lang['project_marked_as_finished_to_contacts']        = 'Send <b>Project Marked as Finished</b> email to customer contacts';
$lang['only_admins']                                   = 'Only administrators';
$lang['new_notification']                              = 'New Notification!';
$lang['enable_desktop_notifications']                  = 'Enable Desktop Notifications';
$lang['save_and_send']                                 = 'Запази & Изпрати';
$lang['private']                                       = 'За мен';
$lang['task_created_at']                               = 'Създадено на %s';
$lang['hide_notified_reminders_from_calendar']         = 'Hide notified reminders from calendar';
$lang['last_active']                                   = 'Последно активен';
$lang['open_ticket']                                   = 'Създай билет';
$lang['task_add_description']                          = 'Добави описание';
$lang['project_setting_create_tasks']                  = 'create tasks';
$lang['project_setting_edit_tasks']                    = 'edit tasks (only tasks created from contact)';

# Version 1.9.2
$lang['items_report']                            = 'Продажби по Каталог';
$lang['reports_item']                            = 'Елемент';
$lang['quantity_sold']                           = 'Продадено к-во';
$lang['total_amount']                            = 'Обща сума';
$lang['avg_price']                               = 'Средна цена';
$lang['item_report_paid_invoices_notice']        = 'Items report is generated only from paid invoices before discounts and taxes.';
$lang['overview']                                = 'Обзор';
$lang['timer_started_change_status_in_progress'] = 'Change task status to In Progress on timer started (applicable only if task status is Not Started)';
$lang['company_info_format']                     = 'Company Inforomation Format (PDF and HTML)';
$lang['customer_info_format']                    = 'Customer Information Format (PDF and HTML)';
$lang['custom_field_info_format_embed_info']     = 'Custom fields for %s can be easily embedded into PDF and HTML documents by adding the merge fields into the page format at the following page: %s';
$lang['transfer_lead_notes_to_customer']         = 'Transfer lead notes to customer profile';
$lang['authorized_signature_text']               = 'Оторизиран e-подпис';
$lang['show_pdf_signature_invoice']              = 'Show PDF Signature on Invoice';
$lang['show_pdf_signature_estimate']             = 'Show PDF Signature on Estimate';
$lang['signature']                               = 'Подпис';
$lang['signature_image']                         = 'Запазен е-подпис';
$lang['insert_checklist_templates']              = 'Вмъкни шаблон за чеклист';
$lang['save_as_template']                        = 'Запази като шаблон';
$lang['invoice_item_add_edit_rate_currency']     = 'Rate - %s';
$lang['total_files_deleted']                     = 'Total files deleted: %s';
$lang['invalid_transaction']                     = 'Invalid Transaction. Please try again.';
$lang['payment_gateway_payu_money_key']          = 'PayU Money Key';
$lang['payment_gateway_payu_money_salt']         = 'PayU Money Salt';
$lang['settings_paymentmethod_description']      = 'Gateway Dashbord Payment Description';

# Version 1.9.3
$lang['default_ticket_reply_status']          = 'Default status selected when replying to ticket';
$lang['ticket_add_response_and_back_to_list'] = 'Return to ticket list after response is submitted';

# Version 1.9.4
$lang['default_task_status']                               = 'Default status when new task is created';
$lang['custom_field_pdf_html_help']                        = 'Make sure you check ' . $lang['custom_field_show_on_client_portal'] . ' field if you want the custom fields to be visible to customers area and when customer download PDF or receive PDF via email.';
$lang['auto']                                              = 'Auto';
$lang['email_queue']                                       = 'Email Queue';
$lang['email_queue_enabled']                               = 'Enable Email Queue';
$lang['email_queue_skip_attachments']                      = 'Do not add emails with attachments in the queue.';
$lang['disable']                                           = 'Disable';
$lang['enable']                                            = 'Enable';
$lang['auto_dismiss_desktop_notifications_after']          = 'Auto Dismiss Desktop Notifications After X Seconds (0 to disable)';
$lang['proposal_info_format']                              = 'Proposal Info Format (PDF and HTML)';
$lang['hide_tasks_on_main_tasks_table']                    = 'Hide project tasks on main tasks table (admin area)';
$lang['ticket_replies_order']                              = 'Ticket Replies Order';
$lang['ticket_replies_order_notice']                       = 'The initial ticket message will be always shown as first.';
$lang['invoice_cancelled_email_disabled']                  = 'Invoice is cancelled. Unmark as cancelled to enable email to client';
$lang['email_notifications']                               = 'Email Notifications';
$lang['invoice_activity_record_payment_email_to_customer'] = 'Payment recorded, email sent to: %s';
$lang['exclude_inactive']                                  = 'Не показвай неактивни';
$lang['disable_all']                                       = 'Disable All';
$lang['enable_all']                                        = 'Enable All';
$lang['reccuring_invoice_option_gen_and_send']             = 'Generate and Autosend the renewed invoice to the customer';
$lang['reccuring_invoice_option_gen_unpaid']               = 'Generate a Unpaid Invoice';
$lang['reccuring_invoice_option_gen_draft']                = 'Generate a Draft Invoice';
$lang['event_created_by']                                  = 'This event is created by %s';

# Version 1.9.5
$lang['customers_assigned_to_me']              = 'Клиенти отнесени за мен';
$lang['bcc_all_emails']                        = 'BCC All Emails To';
$lang['confirmation_of_identity']              = 'Потвърждаване на самоличност';
$lang['accept_identity_confirmation']          = 'Require identity confirmation on accept';
$lang['accepted_identity_info']                = 'This %s is accepted by %s on %s from IP address %s';
$lang['clear_this_information']                = 'Clear This Information';
$lang['new_task_auto_follower_current_member'] = 'Auto add task creator as task follower when new task is created';
$lang['expenses_report_net']                   = 'Нетни разходи';
$lang['expense_field_billable_help']           = 'If billable, %s can be added to invoice long description.';
$lang['task_biillable_checked_on_creation']    = 'Billable option is by default checked when new task is created?';
$lang['pause_overdue_reminders']               = 'Спри нотификации за просрочие';
$lang['resume_overdue_reminders']              = 'Продължи нотификации за просрочие';

# Credit Notes
$lang['credit_notes']                                            = 'Кредитни';
$lang['credit_note']                                             = 'Кредитно известие';
$lang['credit_note_lowercase']                                   = 'кредитно известие';
$lang['credit_note_not_found']                                   = 'Кредитното известие не беше намерено';
$lang['credit_note_date']                                        = 'Дата на издаване';
$lang['credit_date']                                             = 'Дата';
$lang['settings_sales_next_credit_note_number']                  = 'Next Credit Note Number';
$lang['credit_note_number_prefix']                               = 'Credit Note Number Prefix';
$lang['credit_note_number']                                      = 'Кредитно известие #';
$lang['credit_note_number_exists']                               = 'Credit note number already exists';
$lang['show_shipping_on_credit_note']                            = 'Show shipping details on credit note';
$lang['credit_note_number_decrement_on_delete']                  = 'Decrement credit note number on delete.';
$lang['credit_note_number_decrement_on_delete_help']             = 'Number will be decremented only if is last credit note created.';
$lang['credit_note_status']                                      = 'Status';
$lang['credit_note_status_open']                                 = 'Отворено';
$lang['credit_note_status_closed']                               = 'Затворено';
$lang['credit_note_status_void']                                 = 'Невалидно';
$lang['credit_note_mark_as_open']                                = 'Направи отворено';
$lang['new_credit_note']                                         = 'Ново Кредитно известие';
$lang['credit_note_amount']                                      = 'Сума';
$lang['credit_note_remaining_credits']                           = 'Остатъчна сума';
$lang['credit_note_client_note']                                 = 'Забележка';
$lang['invoices_credited']                                       = 'Фактурирани Кредитни';
$lang['apply_credits']                                           = 'Apply Credits';
$lang['x_credits_available']                                     = '%s credits available.';
$lang['credit_amount']                                           = 'Стойност на Кредитното известие';
$lang['credits_available']                                       = 'Credits Available';
$lang['amount_to_credit']                                        = 'Amount to Credit';
$lang['invoice_credits_applied']                                 = 'Credits successfully applied to invoice';
$lang['applied_credits']                                         = 'Applied Credits';
$lang['credit_amount_bigger_then_invoice_balance']               = 'Total credits amount is bigger then invoice balance due';
$lang['credit_amount_bigger_then_credit_note_remaining_credits'] = 'Total credits amount is bigger then remaining credits';
$lang['credited_invoices_not_found']                             = 'Credited Invoices Not Found';
$lang['credit_invoice_number']                                   = 'Фактура Номер';
$lang['credits_used']                                            = 'Приспадната сума';
$lang['credits_remaining']                                       = 'Сума за плащане';
$lang['amount_credited']                                         = 'Сума за приспадане';
$lang['credits_applied_cant_delete_status_closed']               = 'This credit note is with status Closed, you need first to delete the credits in order to delete the credit note.';
$lang['credits_applied_cant_delete_credit_note']                 = 'This credit note has applied credits, you need first to delete the credits in order to delete the credit note.';
$lang['credit_note_pdf_heading']                                 = 'КРЕДИТНО ИЗВЕСТИЕ';
$lang['show_status_on_pdf']                                      = 'Show %s status on PDF documents';
$lang['show_pdf_signature_credit_note']                          = 'Show PDF Signature on Credit Note';
$lang['calendar_credit_note_reminder']                           = 'Напомняне';
$lang['show_credit_note_reminders_on_calendar']                  = 'Напомняния';
$lang['reminders']                                               = 'Напомняния';
$lang['invoice_activity_applied_credits']                        = 'applied credits of %s from %s';
$lang['create_credit_note']                                      = 'Създай Кредитно известие';
$lang['confirm_invoice_credits_from_credit_note']                = 'When creating credit note from non paid invoice, the credit note amount will get applied for this invoice. Are you sure that you want to create the credit note?';
$lang['credit_invoice_date']                                     = 'Invoice Date';
$lang['apply_to_invoice']                                        = 'Задай към Фактура';
$lang['apply_credits_from']                                      = 'Зададени Кредити от %s';
$lang['credits_successfully_applied_to_invoices']                = 'Invoices credits successfully applied';
$lang['credit_note_send_to_client_modal_heading']                = 'Изпрати кредитното известие на клиента';
$lang['credit_note_sent_to_client_success']                      = 'Credit note is sent successfully to the client';
$lang['credit_note_sent_to_client_fail']                         = 'Problem while sending credit note to email';
$lang['credit_note_no_invoices_available']                       = 'There are no available invoices for this customer.';
$lang['show_total_paid_on_invoice']                              = 'Show Total Paid On Invoice';
$lang['show_credits_applied_on_invoice']                         = 'Show Credits Applied On Invoice';
$lang['show_amount_due_on_invoice']                              = 'Show Amount Due On Invoice';
$lang['customer_profile_update_credit_notes']                    = 'Update the shipping/billing info on all previous credit notes (Closed credit notes not affected)';
$lang['zip_credit_notes']                                        = 'Zip Credit Notes';
$lang['statement_credit_note_details']                           = 'Кредитно известие %s';
$lang['statement_credits_applied_details']                       = 'Credits Applied from Credit Note %s - %s for payment of %s';
$lang['credit_note_files']                                       = 'Кредитно Файлове';
$lang['credit_notes_report']                                     = 'Справка Кредитни известия';
$lang['credit_note_set_reminder_title']                          = $lang['invoice_set_reminder_title'];
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
$lang['ticket_assigned']                          = 'Назначен';
$lang['dashboard_options']                        = 'Dashboard Options';
$lang['reset_dashboard']                          = 'Reset Dashboard';
$lang['widgets']                                  = 'Widgets';
$lang['s_chart']                                  = '%s диаграми';
$lang['quick_stats']                              = 'Бърза справка';
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
$lang['item_forgotten_in_preview']                = 'Забравихте ли да добавите този елемент?';
$lang['not_task_status_changed']                  = '%s - task status changed to %s';
$lang['not_project_activity_task_status_changed'] = 'Обновен статус на задачата';
$lang['reset']                                    = 'Reset';
$lang['save_message_as_predefined_reply']         = 'Запази като предефинирано съобщение';
$lang['inline_create_option']                     = 'Allow none admin staff members to create %s in %s create/edit area?';
$lang['inline_create']                            = 'Inline Create';
$lang['inline_create_option_predefined_replies']  = 'Allow none admin staff members to save predefined replies from ticket message';
$lang['reminders_view_none_admin']                = 'Showing your reminders and reminders created by you.';
$lang['show_tabs_and_options']                    = 'Всички опции';
$lang['no_milestones_found']                      = 'Няма зададени етапи';
$lang['lead_is_contact_create_task']              = 'Create task if email sender is already customer and assign to responsible staff member.';
$lang['existing_customer']                        = 'Съществуващ клиент';
$lang['use_company_name_instead']                 = 'Използвай наименованието на компанията';
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
$lang['timesheet_duration_instead']                = 'Въведи времето за изработка';
$lang['timesheet_date_instead']                    = 'Въведи кога е започнато и стартирано';
$lang['allow_non_admin_members_to_import_leads']   = 'Allow non-admin staff members to import leads';
$lang['project_hide_tasks_settings_info']          = 'Tasks are excluded from the main tasks table for this project, you can view the project tasks only in this area.';

# Version 1.9.9
$lang['ticket_create_no_contact']            = 'Билет до контакт';
$lang['ticket_create_to_contact']            = 'Билет до клиент';
$lang['showing_billable_tasks_from_project'] = 'Showing billable tasks from project';
$lang['no_billable_tasks_found']             = 'Billable tasks not found';
$lang['help_leads_permission_view']          = 'If this permission is not checked, a staff member will be only able to view leads to where is assigned, leads created by the staff member and leads that are marked as public';

# Version 2.0.0
$lang['customers']                                              = $lang['clients'];
$lang['knowledge_base']                                         = $lang['kb_string'];
$lang['staff']                                                  = $lang['als_staff'];
$lang['checklist_templates']                                    = $lang['task_checklist_items'];
$lang['emails_tracking']                                        = 'Проследяване на имейли';
$lang['no_tracked_emails_sent']                                 = 'No tracked emails sent';
$lang['tracked_emails_sent']                                    = 'Tracked Emails Sent';
$lang['tracked_email_date']                                     = 'Дата';
$lang['tracked_email_subject']                                  = 'Предмет';
$lang['tracked_email_to']                                       = 'До';
$lang['tracked_email_opened']                                   = 'Прочетен';
$lang['tracked_email_not_opened']                               = 'Непрочетен';
$lang['not_viewed_yet']                                         = 'Този % s не се вижда от клиента';
$lang['undo']                                                   = 'Отмяна';
$lang['sign_document_validation']                               = 'Моля, подпишете документа.';
$lang['document_customer_signature_text']                       = 'Подпис на клиента';
$lang['accept_identity_confirmation_and_signature_sign']        = 'Изискване за приемане на цифров подпис и потвърждение на самоличността';
$lang['legal_bound_text']                                       = 'Правно обвързан текст';
$lang['e_signature_sign']                                       = 'Подпис';
$lang['is_signed']                                              = 'Подписано';
$lang['is_not_signed']                                          = 'Без подпис';
$lang['download']                                               = 'Изтегляне';
$lang['view_pdf_in_new_window']                                 = 'Преглед на PDF в Нов раздел';
$lang['show_pdf_signature_contract']                            = 'Показване на PDF подпис на договора';
$lang['document_signed_successfully']                           = 'Вие подписахте този документ успешно';
$lang['document_signed_info']                                   = 'Този документ е подписан от% s на% s от IP адрес% s';
$lang['keep_signature']                                         = 'Запазване на клиентски подпис';
$lang['view_contract']                                          = 'Преглед на договора';
$lang['summary']                                                = 'Резюме';
$lang['discussion']                                             = 'Дискусия';
$lang['general_information']                                    = 'Обща информация';
$lang['proposal_information']                                   = 'Информация за предложението';
$lang['contract_comments']                                      = 'Коментари';
$lang['not_contract_comment_from_client']                       = 'Нов коментар от клиент по договор% s';
$lang['contract_files']                                         = 'Файлове към договора';
$lang['date_signed']                                            = 'Дата на подписване';
$lang['clear_signature']                                        = 'Изчистване на подпис';
$lang['recurring_has_ended']                                    = 'Това повтарящо се% s е приключило.';
$lang['cycles_remaining']                                       = 'Оставащи цикли';
$lang['cycles_infinity']                                        = 'Безкрайност';
$lang['recurring_total_cycles']                                 = 'Общо цикли';
$lang['cycles_passed']                                          = 'Преминал% s';
$lang['api_key_not_set_error_message']                          = 'Ключът API не е конфигуриран, кликнете върху следната връзка, за да конфигурирате API ключа:% s';
$lang['subscription']                                           = 'Абонамент';
$lang['subscription_lowercase']                                 = 'Абонамент';
$lang['subscriptions']                                          = 'Абонаменти';
$lang['tax_is_used_in_subscriptions_warning']                   = 'Не можете да актуализирате този данък, защото се използва от абонаменти.';
$lang['credit_card']                                            = 'Кредитна карта';
$lang['update_credit_card']                                     = 'Актуализиране на кредитната карта';
$lang['credit_card_update_info']                                = 'Искате да актуализирате кредитната си карта? Посочете тук новите подробности. Информацията за Вашата карта никога няма да достигне директно до нашия сървър.';
$lang['update_card_details']                                    = 'Актуализиране на данните за картата';
$lang['update_card_btn']                                        = 'Актуализиране на картата';
$lang['subscription_name']                                      = 'Име на абонамента';
$lang['subscriptions_description']                              = 'Описание';
$lang['subscribe']                                              = 'Абонирайте се';
$lang['subscription_date']                                      = 'Дата';
$lang['first_billing_date']                                     = 'Първа дата на фактуриране';
$lang['allow_primary_contact_to_update_credit_card']            = 'Да се ​​разреши ли основният контакт да актуализира запазеното означение за кредитната карта?';
$lang['show_subscriptions_in_customers_area']                   = 'Да се показват ли абонаменти в областта на клиентите';
$lang['show_subscriptions_in_customers_area_help']              = 'Тази опция е валидна само за основния контакт на клиента.';
$lang['subscription_sent_to_email_success']                     = 'Абонаментът е изпратен успешно по имейл.';
$lang['subscription_sent_to_email_fail']                        = 'Неуспешно изпращане на абонамента по имейл.';
$lang['new_subscription']                                       = 'Нов абонамент';
$lang['subscription_status']                                    = 'Статус';
$lang['next_billing_cycle']                                     = 'Следващ цикъл на плащане';
$lang['subscription_not_subscribed']                            = 'Не е абониран';
$lang['send_subscription']                                      = 'Изпращане на абонамен';
$lang['subscription_will_send_to_primary_contact']              = 'Абонаментът ще бъде изпратен до основния контакт.';
$lang['subscription_resumed']                                   = 'Абонаментът е активиран успешно.';
$lang['subscription_canceled']                                  = 'Абонаментът е анулиран успешно.';
$lang['no_credit_card_found']                                   = 'Не е намерена кредитна карта';
$lang['cancel_immediately']                                     = 'Незабавен отказ';
$lang['cancel_at_end_of_billing_period']                        = 'Анулиран краен период на плащане';
$lang['view_subscription']                                      = 'Преглед на абонамента';
$lang['subscription_future']                                    = 'Бъдеще';
$lang['subscription_active']                                    = 'Активен';
$lang['subscription_past_due']                                  = 'Минали периоди';
$lang['subscription_canceled']                                  = 'Анулиран';
$lang['subscription_unpaid']                                    = 'Неплатен';
$lang['billing_plan']                                           = 'План за плащане';
$lang['upcoming_invoice']                                       = 'Предстояща фактура';
$lang['resume_now']                                             = 'Подновяване';
$lang['subscription_not_yet_subscribed']                        = 'Клиентът все още не е абониран за този абонамент.';
$lang['subscription_is_canceled_no_resume']                     = 'Този абонамент е анулиран и не може да бъде възобновен.';
$lang['subscription_will_be_canceled_at_end_of_billing_period'] = 'Този абонамент ще бъде анулиран в края на периода на фактуриране.';
$lang['customer_successfully_subscribed_to_subscription']       = 'Благодарим Ви, че се абонирате за %s';
$lang['date_subscribed']                                        = 'Дата на абонамент';
$lang['reports']                                                = 'Отчети';
$lang['subscriptions_summary']                                  = 'Резюме на абонаментите';
$lang['calendar_only_assigned_tasks']                           = 'Показване само на задачите, зададени на членове на персонала, влезли в системата';
$lang['invoice_activity_subscription_payment_succeeded']        = 'Плащането на абонамента е успешно, изпратено по имейл: %s';
$lang['mail_engine']                                            = 'Mail Engine';
$lang['settings_require_client_logged_in_to_view_contract']     = 'Изискване клиентът да бъде влязъл в профила си, за да види договора';
$lang['privacy_policy']                                         = 'Декларация за поверителност';
$lang['gdpr_terms_agree']                                       = 'Съгласен съм с <a href="%s" target="_blank"> Общите условия </a>';
$lang['terms_and_conditions_validation']                        = 'Трябва да приемете Общите условия, за да продължите.';
$lang['gdpr']                                                   = 'Общ регламент за защита на данните (GDPR)';
$lang['data_removal_request_sent']                              = 'Заявката за премахване на данни е изпратена успешно.';
$lang['gdpr_consents']                                          = 'Съгласия';
$lang['gdpr_consent']                                           = 'Съгласие';
$lang['gdpr_consent_purpose']                                   = 'Цел';
$lang['gdpr_consent_opt_in']                                    = 'Включване';
$lang['gdpr_consent_opt_out']                                   = 'Изключване';
$lang['gdpr_consent_agree']                                     = 'Съгласен съм';
$lang['gdpr_consent_disagree']                                  = 'Не съм съгласен';
$lang['view_consent']                                           = 'Преглед на съгласието';
$lang['transfer_consent']                                       = 'Съгласие за прехвърляне';
$lang['view_public_form']                                       = 'Показване на публична форма';
$lang['update_consent']                                         = 'Актуализиране на съгласието';
$lang['consent_last_updated']                                   = 'Последна актуализация: %s';
$lang['showing_search_result']                                  = 'Показване на резултатите от търсенето за: %s';
$lang['per_page']                                               = 'На страница';
$lang['allow_staff_view_invoices_assigned']                     = 'Разрешаване на персонала да вижда фактурите, на които са назначени';
$lang['allow_staff_view_estimates_assigned']                    = 'Разрешаване на персонала да вижда прогнозите, на които са назначени';
$lang['gdpr_right_to_be_informed']                              = 'Право за информиране';
$lang['gdpr_right_of_access']                                   = 'Право на достъп';
$lang['gdpr_right_to_data_portability']                         = 'Право на преносимост на данни';
$lang['gdpr_right_to_erasure']                                  = 'Право за изтриване';
$lang['edit_my_information']                                    = 'Промяна на моята информация';
$lang['export_my_data']                                         = 'Експорт на моята информация';
$lang['request_data_removal']                                   = 'Искане за премахване на данни';
$lang['explanation_for_data_removal']                           = 'Основание за премахване на данните';
$lang['briefly_describe_why_remove_data']                       = 'Опишете накратко защо искате да премахнете данните си';
$lang['date_published']                                         = 'Дата на публикуване';
$lang['view']                                                   = 'Преглед';
$lang['customer_is_subscribed_to_subscription_info']            = 'Клиентът е абониран за този абонамент';
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
$lang['subscription_option_send_invoice']                       = 'Изпрати Фактура';
$lang['subscription_option_send_payment_receipt']               = 'Изпрати Приходен Ордер';
$lang['subscription_option_send_payment_receipt_and_invoice']   = 'Изпрати Фактура и Приходен ордер';
$lang['subscription_option_do_nothing']                         = 'Do Nothing';
$lang['gdpr_not_enabled']                                       = 'GDPR not enabled';
$lang['enable_gdpr']                                            = 'Активирай GDPR';
$lang['gdpr_right_to_rectification']                            = 'Right to rectification';
$lang['test_sms_config']                                        = 'Test SMS Config';
$lang['test_sms_message']                                       = 'Test Message';
$lang['send_test_sms']                                          = 'Send Test SMS';
$lang['gdpr_short']                                             = 'GDPR';
$lang['allow_non_admin_staff_to_delete_ticket_attachments']     = 'Allow non-admin staff members to delete ticket attachments';

# Version 2.1.0
$lang['contract_number']                                = 'Договор номер';
$lang['project_changing_status_recurring_tasks_notice'] = 'You are changing the status to {0}, all recurring tasks will be cancelled';
$lang['not_contract_signed']                            = 'Contract with subject %s has been signed by the customer';
$lang['the_number_sign']                                = '#';
$lang['not_new_ticket_reply']                           = 'Получен отговор на билет - %s';
$lang['receive_notification_on_new_ticket_replies']     = 'Receive notification when customer reply to a ticket';
$lang['receive_notification_on_new_ticket_reply_help']  = 'All staff members which belong to the ticket department will receive notification when customer reply to a ticket';
$lang['payment_gateway_enable_paypal']                  = 'Enable PayPal Payments';
$lang['project_member']                                 = 'Project Member';
$lang['contract_notes']                                 = 'Бележки';
$lang['contract_add_note']                              = 'Нова бележка';

# Version 2.1.1
$lang['frequency']              = 'Периодичност';
$lang['frequency_every']        = 'Всеки %s';
$lang['last_invoice_date']      = 'Последно фактуриране';
$lang['next_invoice_date_list'] = 'Next Invoice Date';
$lang['enter_new_card']         = 'Добави банкова карта';

# Version 2.2.0
$lang['save_and_record_payment']                                     = 'Запази & Отрази Плащането';
$lang['choose_from_google_drive']                                    = 'Избери от Google Drive';
$lang['open_in_google']                                              = 'Отвори в Google';
$lang['google_picker']                                               = 'Google Picker';
$lang['enable_google_picker']                                        = 'Enable Google Picker';
$lang['google_api_client_id']                                        = 'Google API Client ID';
$lang['subtract_tax_total_from_amount']                              = 'Извади всички данъци (%s) от сумата';
$lang['expense_subtract_info_text']                                  = 'Use this option to subtract the total tax amount from the expense amount, useful when you entered the expense amount with tax included (tax inclusive).';
$lang['company_exists_info']                                         = 'It looks that a customer with name %s already exists, if you still want to create the customer you can ignore this message.';
$lang['import_items']                                                = 'Import Items';
$lang['total_items_deleted']                                         = 'Total items deleted: %s';
$lang['billable_amount']                                             = 'Сума за фактуриране';
$lang['last_child_invoice_date']                                     = 'Last Child Invoice Date';
$lang['good_morning']                                                = 'Добро утро';
$lang['good_afternoon']                                              = 'Добър ден';
$lang['good_evening']                                                = 'Добър вечер';
$lang['description_in_invoice_item']                                 = 'Включи пълното описание във фактурата';
$lang['description_in_invoice_item_help']                            = 'Useful if you want to include additional information on the subscription invoice, e.q. what this subscription includes.';
$lang['ticket_reminders']                                            = 'Напомняния';
$lang['ticket_set_reminder_title']                                   = 'Задай напомняне';
$lang['calendar_ticket_reminder']                                    = 'Зададени напомняния';
$lang['email_verification_required']                                 = 'Изисква се верификация на вашия имейл';
$lang['email_verification_required_message']                         = 'За да имате достъп до всички налични функционалности в портала е необходимо да верифицирате имейла си.';
$lang['email_verification_required_message_mail']                    = 'Изпратихме Ви инструкции за верификация на Вашия имейл. В случай, че не го намирате, моля да проверите вашата Спам папка или натиснете <a href="%s">тук</a> за повторно изпращане.';
$lang['email_already_verified']                                      = 'Вашият имейл е верифициран успешно';
$lang['invalid_verification_key']                                    = 'Невалиден верифициращ ключ';
$lang['verification_key_expired']                                    = 'Изтекъл период на верифициращият ключ';
$lang['email_successfully_verified']                                 = 'Вашият имейл е верифициран успешно.';
$lang['email_successfully_verified_but_required_admin_confirmation'] = 'Вашият имейл е верифициран успешно и изчаква одобрение от администратор.';
$lang['email_verification_mail_sent_successully']                    = 'Изпратихме Ви имейл с инструкции за верификация';
$lang['create_reminder']                                             = 'Задай напомняне';
$lang['no_reminders_for_this_task']                                  = 'Няма открити напомняния';
$lang['reminder_for']                                                = 'Reminder for %s on %s';
$lang['no_description_provided']                                     = 'Няма открито описание';
$lang['pay_with_card']                                               = 'Плащане с карта';
$lang['not_customer_uploaded_file']                                  = 'New File(s) Uploaded in Profile';

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
