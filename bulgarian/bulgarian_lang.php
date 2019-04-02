<?php

# Version 1.0.0
#
# General
$lang['id']                   = 'ID';
$lang['name']                 = 'Име';
$lang['options']              = 'Настройки';
$lang['submit']               = 'Съхрани';
$lang['added_successfully']   = '%s е добавено успешно.';
$lang['updated_successfully'] = '%s е променено успешно.';
$lang['edit']                 = 'Промени %s';
$lang['add_new']              = 'Добави нов %s';
$lang['deleted']              = '%s е изтрита';
$lang['problem_deleting']     = 'Проблем при изтриване на %s';
$lang['is_referenced']        = 'ID на %s вече се използва.';
$lang['close']                = 'Затвори';
$lang['send']                 = 'Изпрати';
$lang['cancel']               = 'Откажи';
$lang['go_back']              = 'Обратно';
$lang['error_uploading_file'] = 'Грешка при качване на файл';
$lang['load_more']            = 'Зареди още';
$lang['cant_delete_default']  = 'Не може да се изтриe по подразбиране %s';

# Invoice General
$lang['invoice_status_paid']                   = 'Платена';
$lang['invoice_status_unpaid']                 = 'Неплатена';
$lang['invoice_status_overdue']                = 'Просрочени';
$lang['invoice_status_not_paid_completely']    = 'Частично платена';
$lang['invoice_pdf_heading']                   = 'Фактура';
$lang['invoice_table_item_heading']            = 'Продукт';
$lang['invoice_table_quantity_heading']        = 'Брой';
$lang['invoice_table_rate_heading']            = 'Ед.цена';
$lang['invoice_table_tax_heading']             = 'Данък';
$lang['invoice_table_amount_heading']          = 'Сума';
$lang['invoice_subtotal']                      = 'Междинна сума';
$lang['invoice_adjustment']                    = 'Донастройка';
$lang['invoice_total']                         = 'Общо';
$lang['invoice_bill_to']                       = 'Клиент';
$lang['invoice_data_date']                     = 'Дата на фактура:';
$lang['invoice_data_duedate']                  = 'Платима до:';
$lang['invoice_received_payments']             = 'Транзакции';
$lang['invoice_no_payments_found']             = 'Не е намерено плащане по фактурата';
$lang['invoice_note']                          = 'Бележка:';
$lang['invoice_payments_table_number_heading'] = 'Плащане #';
$lang['invoice_payments_table_mode_heading']   = 'Метод на плащане';
$lang['invoice_payments_table_date_heading']   = 'Дата';
$lang['invoice_payments_table_amount_heading'] = 'Сума';

# Announcements
$lang['announcement']                 = 'Съобщение';
$lang['announcement_lowercase']       = 'съобщение';
$lang['announcements']                = 'Съобщения';
$lang['announcements_lowercase']      = 'съобщения';
$lang['new_announcement']             = 'Ново съобщение';
$lang['announcement_name']            = 'Име';
$lang['announcement_message']         = 'Съобщение';
$lang['announcement_show_to_staff']   = 'Покажи за служители';
$lang['announcement_show_to_clients'] = 'Покажи за клиенти';
$lang['announcement_show_my_name']    = 'Покажи моето Име';

# Clients
$lang['clients']                                 = 'Клиенти';
$lang['client']                                  = 'Клиент';
$lang['new_client']                              = 'Нов клиент';
$lang['client_lowercase']                        = 'клиент';
$lang['client_firstname']                        = 'Име';
$lang['client_lastname']                         = 'Фамилия';
$lang['client_email']                            = 'E-mail';
$lang['client_company']                          = 'Фирма';
$lang['client_vat_number']                       = 'Булстат';
$lang['client_address']                          = 'Адрес';
$lang['client_city']                             = 'Град';
$lang['client_postal_code']                      = 'Пощенски код';
$lang['client_state']                            = 'Област';
$lang['client_password']                         = 'Парола';
$lang['client_password_change_populate_note']    = 'Забележка: Ако попълните това поле, паролата на този контакт ще бъде променена.';
$lang['client_password_last_changed']            = 'Последна промяна на парола:';
$lang['login_as_client']                         = 'Влезте като клиент';
$lang['client_invoices_tab']                     = 'Плащания';
$lang['contracts_invoices_tab']                  = 'Договори';
$lang['contracts_tickets_tab']                   = 'Билети';
$lang['contracts_notes_tab']                     = 'Бележки';
$lang['note_description']                        = 'Описание';
$lang['client_do_not_send_welcome_email']        = 'Не изпращай Е-mail за добре дошли';
$lang['clients_notes_table_description_heading'] = 'Описание';
$lang['clients_notes_table_addedfrom_heading']   = 'Добавено от';
$lang['clients_notes_table_dateadded_heading']   = 'Дата на добавяне';
$lang['clients_list_full_name']                  = 'Име';
$lang['clients_list_last_login']                 = 'Последно влизане';

# Contracts
$lang['contracts']                = 'Договори';
$lang['contract']                 = 'Договор';
$lang['new_contract']             = 'Нов договор';
$lang['contract_lowercase']       = 'договор';
$lang['contract_start_date']      = 'Начална дата';
$lang['contract_end_date']        = 'Крайна дата';
$lang['contract_subject']         = 'Тема';
$lang['contract_description']     = 'Описание';
$lang['contract_subject_tooltip'] = 'Темата е видима и за клиента';
$lang['contract_client_string']   = 'Клиент';
$lang['contract_attach']          = 'Добави документ';
$lang['contract_list_client']     = 'Клиент';
$lang['contract_list_subject']    = 'Тема';
$lang['contract_list_start_date'] = 'Начална дата';
$lang['contract_list_end_date']   = 'Крайна дата';

# Currencies
$lang['currencies']                    = 'Валути';
$lang['currency']                      = 'Валута';
$lang['new_currency']                  = 'Нова валута';
$lang['currency_lowercase']            = 'валута';
$lang['base_currency_set']             = 'Това е вашата базова валута.';
$lang['make_base_currency']            = 'Направи тази валута базова';
$lang['base_currency_string']          = 'Базова валута';
$lang['currency_list_name']            = 'Име';
$lang['currency_list_symbol']          = 'Символ';
$lang['currency_add_edit_description'] = 'Код на валута';
$lang['currency_add_edit_rate']        = 'Символ';
$lang['currency_edit_heading']         = 'Промени валута';
$lang['currency_add_heading']          = 'Добави нова валута';

# Department
$lang['departments']                 = 'Отдели';
$lang['department']                  = 'Отдел';
$lang['new_department']              = 'Нов Отдел';
$lang['department_lowercase']        = 'отдел';
$lang['department_name']             = 'Име на Отдел';
$lang['department_email']            = 'E-mail на отдел';
$lang['department_hide_from_client'] = 'Скрий отдел от клиент?';
$lang['department_list_name']        = 'Име';

# Email Templates
$lang['email_templates']                        = 'E-mail Шаблони';
$lang['email_template']                         = 'E-mail Шаблон';
$lang['email_template_lowercase']               = 'e-mail шаблон';
$lang['email_templates_lowercase']              = 'e-mail шаблони';
$lang['email_template_ticket_fields_heading']   = 'Билети';
$lang['email_template_invoices_fields_heading'] = 'Плащания';
$lang['email_template_clients_fields_heading']  = 'Клиенти';

$lang['template_name']                = 'Име на шаблон';
$lang['template_subject']             = 'Тема';
$lang['template_fromname']            = 'От Име';
$lang['template_fromemail']           = 'От -Email';
$lang['send_as_plain_text']           = 'Изпрати като базов текст';
$lang['email_template_disabled']      = 'Неактивен';
$lang['email_template_email_message'] = 'E-mail Съобщение';
$lang['available_merge_fields']       = 'Налични полета за сливане';
# Home
$lang['dashboard_string']                          = 'Табло за управление';
$lang['home_latest_todos']                         = 'Последнo за правене';
$lang['home_no_latest_todos']                      = 'Няма намерени неща за правене';
$lang['home_latest_finished_todos']                = 'Последно завършени за правене';
$lang['home_no_finished_todos_found']              = 'Няма намерени завършени за правене';
$lang['home_tickets_awaiting_reply_by_department'] = 'Билети очакваши отговор по Отдели';
$lang['home_tickets_awaiting_reply_by_status']     = 'Билети очакваши отговор по Статус';
$lang['home_this_week_events']                     = 'Събития тази седмица';
$lang['home_upcoming_events_next_week']            = 'Събития следващата седмица';
$lang['home_event_added_by']                       = 'Събития добавени от';
$lang['home_public_event']                         = 'Публично събитие';
$lang['home_weekly_payment_records']               = 'Записани седмични плащания';
$lang['home_weekend_ticket_opening_statistics']    = 'Статистика седмични отворени Билети';
# Newsfeed
$lang['whats_on_your_mind']                                 = 'Сподели документи, идеи..';
$lang['new_post']                                           = 'Нов Пост';
$lang['newsfeed_upload_tooltip']                            = 'Съвет: Провлачете и пуснете файлове за качванеnd';
$lang['newsfeed_all_departments']                           = 'Всички отдели';
$lang['newsfeed_pin_post']                                  = 'Закачи Пост';
$lang['newsfeed_unpin_post']                                = 'Откачи Пост';
$lang['newsfeed_delete_post']                               = 'Изтрии';
$lang['newsfeed_published_post']                            = 'Побликувани';
$lang['newsfeed_you_like_this']                             = 'Вие харесвате това';
$lang['newsfeed_like_this']                                 = 'Харсай това';
$lang['newsfeed_one_other']                                 = 'други';
$lang['newsfeed_you']                                       = 'Вие';
$lang['newsfeed_and']                                       = 'и';
$lang['newsfeed_you_and']                                   = 'Вие и';
$lang['newsfeed_like_this_saying']                          = 'Харесвам';
$lang['newsfeed_unlike_this_saying']                        = 'Вече не харесвам';
$lang['newsfeed_show_more_comments']                        = 'Покажи още коментари';
$lang['comment_this_post_placeholder']                      = 'Коментирай този пост..';
$lang['newsfeed_post_likes_modal_heading']                  = 'Колеги, които харесват този пост';
$lang['newsfeed_comment_likes_modal_heading']               = 'Колеги, които харсват този коментар';
$lang['newsfeed_newsfeed_post_only_visible_to_departments'] = 'Този пост е видим само за следните отдели: %s';

# Invoice Items
$lang['invoice_items']                     = 'Фактурирани Стоки/Услуги';
$lang['invoice_item']                      = 'Фактурирана Стока/Услуга';
$lang['new_invoice_item']                  = 'Нови Стоки/Услуги';
$lang['invoice_item_lowercase']            = 'фактурирана стока/услуга';
$lang['invoice_items_list_description']    = 'Описание';
$lang['invoice_items_list_rate']           = 'Сума';
$lang['invoice_item_add_edit_description'] = 'Описание';
$lang['invoice_item_add_edit_rate']        = 'Сума';
$lang['invoice_item_edit_heading']         = 'Промени Стоки/Услуги';
$lang['invoice_item_add_heading']          = 'Добави Стоки/Услуги';

# Invoices
$lang['invoices']                                = 'Фактури';
$lang['invoice']                                 = 'Фактура';
$lang['invoice_lowercase']                       = 'фактура';
$lang['create_new_invoice']                      = 'Създай нова фактура';
$lang['view_invoice']                            = 'Виж фактура';
$lang['invoice_payment_recorded']                = 'Записано плащане';
$lang['invoice_payment_record_failed']           = 'Записано неуспешно плащане по фактура';
$lang['invoice_sent_to_client_success']          = 'Фактурата е успешно изпратена на клиента';
$lang['invoice_sent_to_client_fail']             = 'Проблем при изпращане на фактура';
$lang['invoice_reminder_send_problem']           = 'Проблем при изпращане за просрочване по фактура';
$lang['invoice_overdue_reminder_sent']           = 'Напомнянето за просрочване на фактура  успешно изпратено';
$lang['invoice_details']                         = 'Детайли по плащане';
$lang['invoice_view']                            = 'Виж плащане';
$lang['invoice_select_customer']                 = 'Клиент';
$lang['invoice_add_edit_number']                 = 'Фактура номер';
$lang['invoice_add_edit_date']                   = 'Дата на плащане';
$lang['invoice_add_edit_duedate']                = 'Платима до';
$lang['invoice_add_edit_currency']               = 'Валута';
$lang['invoice_add_edit_client_note']            = 'Бележка на клиент';
$lang['invoice_add_edit_admin_note']             = 'Бележка на админ';
$lang['invoices_toggle_table_tooltip']           = 'Toggle Table';
$lang['edit_invoice_tooltip']                    = 'Промени плащане';
$lang['delete_invoice_tooltip']                  = 'Изтриване на плащане. Забележка: Всички плащания във връзка с тази фактура ще бъдат изтрити (ако има такива).';
$lang['invoice_sent_to_email_tooltip']           = 'Изпрати на Е-Mail';
$lang['invoice_already_send_to_client_tooltip']  = 'Тази фактура вече е изпратена на клиент %s';
$lang['send_overdue_notice_tooltip']             = 'Изпращане на напомняне за просрочено плащане';
$lang['invoice_view_activity_tooltip']           = 'Активност';
$lang['invoice_record_payment']                  = 'Записано плащане';
$lang['invoice_send_to_client_modal_heading']    = 'Изпрати плащане на клиент';
$lang['invoice_send_to_client_attach_pdf']       = 'Добави фактура като PDF';
$lang['invoice_send_to_client_preview_template'] = 'Прегледей E-mail Шаблон';
$lang['invoice_dt_table_heading_number']         = 'Фактура #';
$lang['invoice_dt_table_heading_date']           = 'Дата';
$lang['invoice_dt_table_heading_client']         = 'Клиент';
$lang['invoice_dt_table_heading_duedate']        = 'Платима до';
$lang['invoice_dt_table_heading_amount']         = 'Сума';
$lang['invoice_dt_table_heading_status']         = 'Статус';
$lang['record_payment_for_invoice']              = 'Записано плащане за';
$lang['record_payment_amount_received']          = 'Получена сума';
$lang['record_payment_date']                     = 'Дата на плащане';
$lang['record_payment_leave_note']               = 'Остави бележка';
$lang['invoice_payments_received']               = 'Получени плащания';
$lang['invoice_record_payment_note_placeholder'] = 'Бележка на админ';
$lang['no_payments_found']                       = 'Няма намерени плащания по тази фактура';

# Payments
$lang['payments']                             = 'Приходи';
$lang['payment']                              = 'Плащане';
$lang['payment_lowercase']                    = 'плащане';
$lang['payments_table_number_heading']        = 'Плащане #';
$lang['payments_table_invoicenumber_heading'] = 'Фактура #';
$lang['payments_table_mode_heading']          = 'Начин на плащане';
$lang['payments_table_date_heading']          = 'Дата';
$lang['payments_table_amount_heading']        = 'Сума';
$lang['payments_table_client_heading']        = 'Клиент';
$lang['payment_not_exists']                   = 'Плащането не съществува';
$lang['payment_edit_for_invoice']             = 'Плащане по фактура';
$lang['payment_edit_amount_received']         = 'Получена сума';
$lang['payment_edit_date']                    = 'Дата на плащане';

# Knowledge Base
$lang['kb_article_add_edit_subject']   = 'Тема';
$lang['kb_article_add_edit_group']     = 'Група';
$lang['kb_string']                     = 'Помощна база данни';
$lang['kb_article']                    = 'Статия';
$lang['kb_article_lowercase']          = 'статия';
$lang['kb_article_new_article']        = 'Нова статия';
$lang['kb_article_disabled']           = 'Деактивиране';
$lang['kb_article_description']        = 'Описание на статия';
$lang['kb_no_articles_found']          = 'Няма намерена статия в Помошната база данни';
$lang['kb_dt_article_name']            = 'Име на статията';
$lang['kb_dt_group_name']              = 'Група';
$lang['new_group']                     = 'Нова група';
$lang['kb_group_add_edit_name']        = 'Име на група';
$lang['kb_group_add_edit_description'] = 'Кратко описание';
$lang['kb_group_add_edit_disabled']    = 'Деактивиране';
$lang['kb_group_add_edit_note']        = 'Забележка: Всички статии в тази група ще бъдат скрити, ако е отметнато за деактивиране';
$lang['group_table_name_heading']      = 'Име';
$lang['group_table_isactive_heading']  = 'Активен';
$lang['kb_no_groups_found']            = 'Не са открити групи в Помощната база данни';

# Media
$lang['media_files'] = 'Files';

# Payment modes
$lang['new_payment_mode']           = 'Нов метод на плащане';
$lang['payment_modes']              = 'Методи на плащане';
$lang['payment_mode']               = 'Метод на плащане';
$lang['payment_mode_lowercase']     = 'методи на плащане';
$lang['payment_modes_dt_name']      = 'Име Методи на плащане';
$lang['payment_mode_add_edit_name'] = 'Име Методи на плащане';
$lang['payment_mode_edit_heading']  = 'Промени Методи на плащане';
$lang['payment_mode_add_heading']   = 'Добави нов Метод на плащане';

# Predefined Ticket Replies
$lang['new_predefined_reply']              = 'Нов предефиниран отговор';
$lang['predefined_replies']                = 'Предефинирани отговори';
$lang['predefined_reply']                  = 'Предефиниран отговор';
$lang['predefined_reply_lowercase']        = 'предефиниран отговор';
$lang['predefined_replies_dt_name']        = 'Име предефинирани отговори';
$lang['predefined_reply_add_edit_name']    = 'Име предефинирани отговори';
$lang['predefined_reply_add_edit_content'] = 'Отговор';

# Ticket Priorities
$lang['new_ticket_priority']           = 'Нов приоритет';
$lang['ticket_priorities']             = 'Билети приоритети';
$lang['ticket_priority']               = 'Билети приоритет';
$lang['ticket_priority_lowercase']     = 'билет приоритет';
$lang['no_ticket_priorities_found']    = 'Няма приоритатеи към билети';
$lang['ticket_priority_dt_name']       = 'Име приоритет на билет';
$lang['ticket_priority_add_edit_name'] = 'Име приоритет';

# Reports
$lang['kb_reports']                                       = 'Отчети от статии от базата знания';
$lang['sales_reports']                                    = 'Отчет продажби';
$lang['reports_choose_kb_group']                          = 'Избери група';
$lang['report_kb_yes']                                    = 'Да';
$lang['report_kb_no']                                     = 'Не';
$lang['report_kb_no_votes']                               = 'Няма гласове';
$lang['report_this_week_leads_conversions']               = 'Лийд конверсии Тази седмица ';
$lang['report_leads_sources_conversions']                 = 'Източници на конверсии';
$lang['report_leads_monthly_conversions']                 = 'Месечно';
$lang['sales_report_heading']                             = 'Отчет продажби';
$lang['report_sales_type_income']                         = 'Общ приход';
$lang['report_sales_type_customer']                       = 'Отчет клиенти';
$lang['report_sales_base_currency_select_explanation']    = 'Трябва да изберете валута, защото имате фактури с различна валута';
$lang['report_sales_from_date']                           = 'От дата';
$lang['report_sales_to_date']                             = 'До дата';
$lang['report_sales_months_all_time']                     = 'До сега';
$lang['report_sales_months_six_months']                   = 'Последни 6 месеца';
$lang['report_sales_months_twelve_months']                = 'Последни 12 месеца';
$lang['reports_sales_generated_report']                   = 'Генериран отчет';
$lang['reports_sales_dt_customers_client']                = 'Клиент';
$lang['reports_sales_dt_customers_total_invoices']        = 'Общо фактури';
$lang['reports_sales_dt_items_customers_amount']          = 'Сума';
$lang['reports_sales_dt_items_customers_amount_with_tax'] = 'Сума с данък';

# Roles
$lang['new_role']           = 'Нова роля';
$lang['all_roles']          = 'Всички роли';
$lang['roles']              = 'Роли на служители';
$lang['role']               = 'Роля';
$lang['role_lowercase']     = 'роля';
$lang['roles_total_users']  = 'Общо юзъри: ';
$lang['roles_dt_name']      = 'Име на роля';
$lang['role_add_edit_name'] = 'Име на роля';

# Service
$lang['new_service']           = 'Нова услуга';
$lang['services']              = 'Услуги';
$lang['service']               = 'Услуга';
$lang['service_lowercase']     = 'услуга';
$lang['services_dt_name']      = 'Име на услуга';
$lang['service_add_edit_name'] = 'Име на услуга';

# Settings
$lang['settings']                                                  = 'Настройки';
$lang['settings_updated']                                          = 'Настройките са обновни';
$lang['settings_save']                                             = 'Запази настройки';
$lang['settings_group_general']                                    = 'Главни';
$lang['settings_group_localization']                               = 'Локализация';
$lang['settings_group_tickets']                                    = 'Билети';
$lang['settings_group_sales']                                      = 'Финанси';
$lang['settings_group_email']                                      = 'E-mail';
$lang['settings_group_clients']                                    = 'Клиенти';
$lang['settings_group_newsfeed']                                   = 'Новости';
$lang['settings_group_cronjob']                                    = 'Cron Job';
$lang['settings_yes']                                              = 'Да';
$lang['settings_no']                                               = 'Не';
$lang['settings_clients_default_theme']                            = 'Тема по подразбиране на клиентите ';
$lang['settings_clients_allow_registration']                       = 'Разреши на Клиенти да се регистрират';
$lang['settings_clients_allow_kb_view_without_registration']       = 'Разреши достъп до помощната база данни без регистрация';
$lang['settings_cron_send_overdue_reminder']                       = 'Изпращане на напомняне за просрочие на фактура';
$lang['settings_cron_send_overdue_reminder_tooltip']               = 'Изпратете имейл на клиента, когато състоянието на фактурата бъде актуализирано в просрочено от Cron Job';
$lang['automatically_send_invoice_overdue_reminder_after']         = 'Автоматично изпращане на напомняне след (дни)';
$lang['automatically_resend_invoice_overdue_reminder_after']       = 'Автоматично повторно изпращане на напомнянето след (дни)';
$lang['settings_email_host']                                       = 'SMTP Host';
$lang['settings_email_port']                                       = 'SMTP Port';
$lang['settings_email']                                            = 'E-mail';
$lang['settings_email_password']                                   = 'SMTP Парола';
$lang['settings_email_charset']                                    = 'Email Charset';
$lang['settings_email_signature']                                  = 'Email Подпис';
$lang['settings_general_company_logo']                             = 'Лого на фирмата';
$lang['settings_general_company_logo_tooltip']                     = 'Препоръчителна разделитлна способност: 150 x 34px';
$lang['settings_general_company_remove_logo_tooltip']              = 'Изтрии лого на фирмата';
$lang['settings_general_company_name']                             = 'Име на фирмата';
$lang['settings_general_company_main_domain']                      = 'Сайт на фирмата';
$lang['settings_general_use_knowledgebase']                        = 'Използвай Помощната база данни';
$lang['settings_general_use_knowledgebase_tooltip']                = 'Ако разрешите тази опция, помощната база данни ще бъде показана и на клиента';
$lang['settings_general_tables_limit']                             = 'Tables Pagination Limit';
$lang['settings_general_default_staff_role']                       = 'Роля на служител по подразбиране';
$lang['settings_general_default_staff_role_tooltip']               = 'Когато добавите нов служител, тази роля ще бъде избрана по подразбиране';
$lang['settings_localization_date_format']                         = 'Формат на дата';
$lang['settings_localization_default_timezone']                    = 'Часова зона';
$lang['settings_localization_default_language']                    = 'Език';
$lang['settings_newsfeed_max_file_upload_post']                    = 'Максимално качване на файлове на публикация';
$lang['settings_reminders_contracts']                              = 'Напомняне преди изтичане на договора';
$lang['settings_reminders_contracts_tooltip']                      = 'Известие за напомняне за изтичане в дни';
$lang['settings_tickets_use_services']                             = 'Използвай услуги';
$lang['settings_tickets_max_attachments']                          = 'Максимални прикачени файлове за билети';
$lang['settings_tickets_allow_departments_access']                 = 'Позволете на служители достъп до билети, който принадлежат само на отдела им';
$lang['settings_tickets_allowed_file_extensions']                  = 'Разрешени разширения на прикачени файлове';
$lang['settings_sales_general']                                    = 'Главни';
$lang['settings_sales_general_note']                               = 'Главни настройки';
$lang['settings_sales_invoice_prefix']                             = 'Префикс фактура';
$lang['settings_sales_decimal_separator']                          = 'Десетичен разделител';
$lang['settings_sales_thousand_separator']                         = 'Хиляден разделител';
$lang['settings_sales_currency_placement']                         = 'Валута място';
$lang['settings_sales_currency_placement_before']                  = 'Преди сума';
$lang['settings_sales_currency_placement_after']                   = 'След сума';
$lang['settings_sales_require_client_logged_in_to_view_invoice']   = ' Клиента трябва да е в систмата за да види Фактура';
$lang['settings_sales_next_invoice_number']                        = 'Следващ номер на фактура';
$lang['settings_sales_next_invoice_number_tooltip']                = 'Задайте това поле на 1, ако искате да започнете от началото';
$lang['settings_sales_decrement_invoice_number_on_delete']         = 'Номер на фактурата се намалява при изтриване';
$lang['settings_sales_decrement_invoice_number_on_delete_tooltip'] = 'Искате ли да намалите номера на фактурата, когато последната фактура бъде изтрита?Напр. Ако е зададена тази опция на ДА при изтриване следващия номер на фактура е 15, следващият номер на фактурата ще намалее на 14. Ако е настроен на НЕ, номерът ще остане до 15. Ако имате настройка за изтриване само на последната фактура, НЕ сте трябва да зададете тази опция на Не също, за да запазите следващия номер на фактурата да не се намалява.';
$lang['settings_sales_invoice_number_format']                      = 'Формат номер на фактура';
$lang['settings_sales_invoice_number_format_year_based']           = 'Годишно базиран';
$lang['settings_sales_invoice_number_format_number_based']         = 'Номер базиран (000001)';
$lang['settings_sales_company_info_note']                          = 'Тази информация ще се показва на фактури / отчети / плащания и други PDF документи, където се изисква информация за фирмата';
$lang['settings_sales_company_name']                               = 'Име на фирмата';
$lang['settings_sales_address']                                    = 'Адрес';
$lang['settings_sales_city']                                       = 'Град';
$lang['settings_sales_country_code']                               = 'Код на Държава';
$lang['settings_sales_postal_code']                                = 'Пощенски код';
$lang['settings_sales_phonenumber']                                = 'Телефон';

# Leads
$lang['new_lead']                          = 'Нов Лийд';
$lang['leads']                             = 'Лийдове';
$lang['lead']                              = 'Лийд';
$lang['lead_lowercase']                    = 'лейд';
$lang['leads_all']                         = 'Всички';
$lang['leads_canban_notes']                = 'Бележки: %s';
$lang['leads_canban_source']               = 'Източник: %s';
$lang['lead_new_source']                   = 'Нов източник';
$lang['lead_sources']                      = 'Източници';
$lang['lead_source']                       = 'Източник';
$lang['lead_source_lowercase']             = 'източник';
$lang['leads_sources_not_found']           = 'Не са намерени източници';
$lang['leads_sources_table_name']          = 'Име на източник';
$lang['leads_source_add_edit_name']        = 'Име на източник';
$lang['lead_new_status']                   = 'Нов статус на Лийд';
$lang['lead_status']                       = 'Лийд статус';
$lang['lead_status_lowercase']             = 'лийд статус';
$lang['leads_status_table_name']           = 'Име на статус';
$lang['leads_status_add_edit_name']        = 'Име на статус';
$lang['leads_status_add_edit_order']       = 'Поръчка';
$lang['lead_statuses_not_found']           = 'Не са намерени статуси ';
$lang['leads_search']                      = 'Търсене на Лийд';
$lang['leads_table_total']                 = 'Общо Лийдове: %s';
$lang['leads_dt_name']                     = 'Име';
$lang['leads_dt_email']                    = 'E-mail';
$lang['leads_dt_phonenumber']              = 'Телефон';
$lang['leads_dt_assigned']                 = 'Зададен на';
$lang['leads_dt_status']                   = 'Статус';
$lang['leads_dt_last_contact']             = 'Последен контакт';
$lang['lead_add_edit_name']                = 'Име';
$lang['lead_add_edit_email']               = 'E-mail';
$lang['lead_add_edit_phonenumber']         = 'Телефон';
$lang['lead_add_edit_source']              = 'Източник';
$lang['lead_add_edit_status']              = 'Статус';
$lang['lead_add_edit_assigned']            = 'Зададен на';
$lang['lead_add_edit_datecontacted']       = 'Дата на свързване';
$lang['lead_add_edit_contacted_today']     = 'Контакт днес';
$lang['lead_add_edit_activity']            = 'Дейности';
$lang['lead_add_edit_notes']               = 'Бележки';
$lang['lead_add_edit_add_note']            = 'Добави бележка';
$lang['lead_not_contacted']                = 'Не съм се свързал с този Лийд';
$lang['lead_add_edit_contacted_this_lead'] = 'Свързах се с този Лийд';

# Misc
$lang['access_denied'] = 'Access denied';
$lang['prev']          = 'Prev';
$lang['next']          = 'next';

# Datatables
$lang['dt_paginate_first']    = 'Първа';
$lang['dt_paginate_last']     = 'Последна';
$lang['dt_paginate_next']     = 'Следваща';
$lang['dt_paginate_previous'] = 'Предишна';
$lang['dt_search']            = 'Търси...';
$lang['dt_zero_records']      = 'Няма намерени съответстващи записи';
$lang['dt_loading_records']   = 'Зарежда...';
$lang['dt_length_menu']       = 'Покажи _MENU_ резултати';
$lang['dt_info_filtered']     = '(филтрирано от _MAX_ общо {0})';
$lang['dt_info_empty']        = 'Показани от 0 до 0 от 0 {0}';
$lang['dt_info']              = 'Показани _START_ до _END_ от _TOTAL_ {0}';
$lang['dt_empty_table']       = 'Няма открити {0} ';
$lang['dt_sort_ascending']    = 'активирайте, за да подредите колоната във възходящ ред';
$lang['dt_sort_descending']   = 'активирайте, за да подредите колоната в низходящ ред';

# Invoice Activity Log
$lang['user_sent_overdue_reminder'] = '%s изпратено напомнян за просрочване на фактура';

# Weekdays
$lang['wd_monday']    = 'Понделник';
$lang['wd_tuesday']   = 'Вторник';
$lang['wd_thursday']  = 'Четвъртък';
$lang['wd_wednesday'] = 'Сряда';
$lang['wd_friday']    = 'Петък';
$lang['wd_saturday']  = 'Събота';
$lang['wd_sunday']    = 'Неделя';

# Admin Left Sidebar
$lang['als_dashboard']             = 'Табло';
$lang['als_clients']               = 'Клиенти';
$lang['als_leads']                 = 'Лийдове';
$lang['als_contracts']             = 'Договори';
$lang['als_sales']                 = 'Продажби';
$lang['als_staff']                 = 'Служители';
$lang['als_tasks']                 = 'Задачи';
$lang['als_kb']                    = 'Помощна база данни';
$lang['als_media']                 = 'Медиа';
$lang['als_reports']               = 'Репорти';
$lang['als_reports_sales_submenu'] = 'Продажби';
$lang['als_reports_leads_submenu'] = 'Лийдове';
$lang['als_kb_articles_submenu']   = 'KB Articles';
$lang['als_utilities']             = 'Допълнителни';
$lang['als_announcements_submenu'] = 'Съобщения';
$lang['als_calendar_submenu']      = 'Календар';
$lang['als_activity_log_submenu']  = 'Дейности';

# Admin Customizer Sidebar
$lang['acs_ticket_priority_submenu']           = 'Приоритети на Билет';
$lang['acs_ticket_statuses_submenu']           = 'Статуси на Билет';
$lang['acs_ticket_predefined_replies_submenu'] = 'Предифинирани отговори';
$lang['acs_ticket_services_submenu']           = 'Услуги';
$lang['acs_departments']                       = 'Отдели';
$lang['acs_leads']                             = 'Лийдове';
$lang['acs_leads_sources_submenu']             = 'Източници';
$lang['acs_leads_statuses_submenu']            = 'Статуси';
$lang['acs_sales_taxes_submenu']               = 'Данъци';
$lang['acs_sales_currencies_submenu']          = 'Валути';
$lang['acs_sales_payment_modes_submenu']       = 'Начини на плащане';
$lang['acs_email_templates']                   = 'Е-mail Шаблони';
$lang['acs_roles']                             = 'Роли';
$lang['acs_settings']                          = 'Настройки';

# Tickets
$lang['new_ticket']                                          = 'Нов билет';
$lang['tickets']                                             = 'Билети';
$lang['ticket']                                              = 'Билет';
$lang['ticket_lowercase']                                    = 'билет';
$lang['support_tickets']                                     = 'Билети поддръжка';
$lang['support_ticket']                                      = 'Билет поддръжка';
$lang['ticket_settings_to']                                  = 'Име';
$lang['ticket_settings_email']                               = 'E-mail адрес';
$lang['ticket_settings_departments']                         = 'Отдел';
$lang['ticket_settings_service']                             = 'Услуги';
$lang['ticket_settings_priority']                            = 'Приоритет';
$lang['ticket_settings_subject']                             = 'Тема';
$lang['ticket_settings_assign_to']                           = 'Възложи на (по подразбиране е текущият потребител)';
$lang['ticket_add_body']                                     = 'Текст на билет';
$lang['ticket_add_attachments']                              = 'Файлове';
$lang['ticket_no_reply_yet']                                 = 'Все още няма отговор';
$lang['new_ticket_added_successfully']                       = 'Билет #%s е добавен успешно';
$lang['replied_to_ticket_successfully']                      = 'Отговора на билет #%s е успешен';
$lang['ticket_settings_updated_successfully']                = 'Настройките на Билет са актуализирани успешно';
$lang['ticket_settings_updated_successfully_and_reassigned'] = 'Настройките на Билет са актуализирани успешно - пренасочени към отдел %s';
$lang['ticket_dt_subject']                                   = 'Тема';
$lang['ticket_dt_department']                                = 'Отдел';
$lang['ticket_dt_service']                                   = 'Услуга';
$lang['ticket_dt_submitter']                                 = 'Контакт';
$lang['ticket_dt_status']                                    = 'Статус';
$lang['ticket_dt_priority']                                  = 'Приоритет';
$lang['ticket_dt_last_reply']                                = 'Последен отговор';
$lang['ticket_single_add_reply']                             = 'Добави отговор';
$lang['ticket_single_add_note']                              = 'Добави бележка';
$lang['ticket_single_other_user_tickets']                    = 'Други билети';
$lang['ticket_single_settings']                              = 'Настройки';
$lang['ticket_single_priority']                              = 'Приоритет: %s';
$lang['ticket_single_last_reply']                            = 'Последен отговор: %s';
$lang['ticket_single_ticket_note_by']                        = 'Последна бележка от %s';
$lang['ticket_single_note_added']                            = 'Бележката е добавена: %s';
$lang['ticket_single_change_status']                         = 'Промени статус';
$lang['ticket_single_assign_to_me_on_update']                = 'Възложи ми този билет автоматично';
$lang['ticket_single_insert_predefined_reply']               = 'Вмъкнете предварително определен отговор';
$lang['ticket_single_insert_knowledge_base_link']            = 'Вмъкнете линк от помощната база данни';
$lang['ticket_single_attachments']                           = 'Файлове';
$lang['ticket_single_add_response']                          = 'Добавяне на отговор';
$lang['ticket_single_note_heading']                          = 'Бележка';
$lang['ticket_single_add_note']                              = 'Добави бележка';
$lang['ticket_settings_none_assigned']                       = 'Няма';
$lang['ticket_status_changed_successfully']                  = 'Статуса на билета е променен';
$lang['ticket_status_changed_fail']                          = 'Проблем при промяна Статуса на билета';
$lang['ticket_staff_string']                                 = 'Служители';
$lang['ticket_client_string']                                = 'Клиент';
$lang['ticket_posted']                                       = 'Публикувано: %s';
$lang['ticket_access_by_department_denied']                  = 'Нямате достъп до този билет. Този билет принадлежи на отдел, към който не сте назначени.';

# Staff
$lang['new_staff']                                     = 'Нов служител';
$lang['staff_members']                                 = 'Служители';
$lang['staff_member']                                  = 'Служител';
$lang['staff_member_lowercase']                        = 'служител';
$lang['staff_profile_updated']                         = 'Профила ви беше актуализиран';
$lang['staff_old_password_incorrect']                  = 'Старата ви парола не е правилна';
$lang['staff_password_changed']                        = 'Паролата ви беше променена';
$lang['staff_problem_changing_password']               = 'Проблем при промяна на парола';
$lang['staff_profile_string']                          = 'Профил';
$lang['staff_cant_remove_main_admin']                  = 'Не може да се премахне главен администратор';
$lang['staff_cant_remove_yourself_from_admin']         = 'Не може да се изтриете като администратор';
$lang['staff_dt_name']                                 = 'Име';
$lang['staff_dt_email']                                = 'E-mail';
$lang['staff_dt_last_Login']                           = 'Последно влизане';
$lang['staff_dt_active']                               = 'Активен';
$lang['staff_add_edit_firstname']                      = 'Име';
$lang['staff_add_edit_lastname']                       = 'Фамилия';
$lang['staff_add_edit_email']                          = 'E-mail';
$lang['staff_add_edit_phonenumber']                    = 'Телефон';
$lang['staff_add_edit_facebook']                       = 'Facebook';
$lang['staff_add_edit_linkedin']                       = 'LinkedIn';
$lang['staff_add_edit_skype']                          = 'Skype';
$lang['staff_add_edit_departments']                    = 'Отдели';
$lang['staff_add_edit_role']                           = 'Роля';
$lang['staff_add_edit_permissions']                    = 'Разрeшения';
$lang['staff_add_edit_administrator']                  = 'Администратор';
$lang['staff_add_edit_password']                       = 'Парола';
$lang['staff_add_edit_password_note']                  = 'Забележка: ако попълните това поле, паролата ще бъде променена за този член.';
$lang['staff_add_edit_password_last_changed']          = 'Последна промяна на парола';
$lang['staff_add_edit_notes']                          = 'Бележки';
$lang['staff_add_edit_note_description']               = 'Описание';
$lang['staff_notes_table_description_heading']         = 'Бележка';
$lang['staff_notes_table_addedfrom_heading']           = 'Добавено от';
$lang['staff_notes_table_dateadded_heading']           = 'Дата на добавяне';
$lang['staff_admin_profile']                           = 'Това е администраторски профил';
$lang['staff_profile_notifications']                   = 'Известия';
$lang['staff_profile_departments']                     = 'Отдели';
$lang['staff_edit_profile_image']                      = 'Снимка';
$lang['staff_edit_profile_your_departments']           = 'Отдели';
$lang['staff_edit_profile_change_your_password']       = 'Промени парола';
$lang['staff_edit_profile_change_old_password']        = 'Стара парола';
$lang['staff_edit_profile_change_new_password']        = 'Нова парола';
$lang['staff_edit_profile_change_repeat_new_password'] = 'Повтори нова парола';

# Staff Tasks
$lang['new_task']                           = 'Нова задача';
$lang['tasks']                              = 'Задачи';
$lang['task']                               = 'Задача';
$lang['task_lowercase']                     = 'задача';
$lang['comment_string']                     = 'Коментар';
$lang['task_marked_as_complete']            = 'Задачата е маркирана като изпълнена';
$lang['task_follower_removed']              = 'Последователят на задачата е изтрит успешно';
$lang['task_assignee_removed']              = 'Изпълнителят е изтрит успешно';
$lang['task_no_assignees']                  = 'Няма назначени изпълнители по задачата';
$lang['task_no_followers']                  = 'Няма последователи по задачата';
$lang['task_list_all']                      = 'Всички';
$lang['task_list_not_assigned']             = 'Без изпълнители';
$lang['task_list_duedate_passed']           = 'Крайният срок е просрочен';
$lang['tasks_dt_name']                      = 'Име';
$lang['task_single_priority']               = 'Приоритет';
$lang['task_single_start_date']             = 'Дата на започване';
$lang['task_single_due_date']               = 'Краен срок';
$lang['task_single_finished']               = 'Завършени';
$lang['task_single_mark_as_complete']       = 'Маркирай като изпълнена';
$lang['task_single_edit']                   = 'Промени';
$lang['task_single_delete']                 = 'Изтрии';
$lang['task_single_assignees']              = 'Изпълнители';
$lang['task_single_assignees_select_title'] = 'Назначи изпълнител на';
$lang['task_single_followers']              = 'Последователи';
$lang['task_single_followers_select_title'] = 'Добави последователи';
$lang['task_single_add_new_comment']        = 'Добави коментар';
$lang['task_add_edit_subject']              = 'Тема';
$lang['task_add_edit_priority']             = 'Приоритет';
$lang['task_priority_low']                  = 'Нисък';
$lang['task_priority_medium']               = 'Среден';
$lang['task_priority_high']                 = 'Висок';
$lang['task_priority_urgent']               = 'Спешен';
$lang['task_add_edit_start_date']           = 'Начална дата';
$lang['task_add_edit_due_date']             = 'Крайна дата';
$lang['task_add_edit_description']          = 'Описание на задача';

# Taxes
$lang['new_tax']           = 'Нов данък';
$lang['taxes']             = 'Данъци';
$lang['tax']               = 'Данък';
$lang['tax_lowercase']     = 'данък';
$lang['tax_dt_name']       = 'Име на данък';
$lang['tax_dt_rate']       = 'Сума (процент)';
$lang['tax_add_edit_name'] = 'Име на данък';
$lang['tax_add_edit_rate'] = 'Сума (процент)';
$lang['tax_edit_title']    = 'Промени данък';
$lang['tax_add_title']     = 'Добави нов данък';

# Ticket Statuses
$lang['new_ticket_status']            = 'Нов статус на Билет';
$lang['ticket_statuses']              = 'Статуси';
$lang['ticket_status']                = 'Статус';
$lang['ticket_status_lowercase']      = 'статус';
$lang['ticket_statuses_dt_name']      = 'Име на статус';
$lang['no_ticket_statuses_found']     = 'Няма открити статуси на билети';
$lang['ticket_statuses_table_total']  = 'Общо %s';
$lang['ticket_status_add_edit_name']  = 'Име на статус';
$lang['ticket_status_add_edit_color'] = 'Избри цвят';
$lang['ticket_status_add_edit_order'] = 'Подреди по статус';

# Todos
$lang['new_todo']                  = 'Ново за правене';
$lang['my_todos']                  = 'Моите задачи за правене';
$lang['todo']                      = 'За правене';
$lang['todo_lowercase']            = 'за правене';
$lang['todo_status_changed']       = 'Статус за правене променен';
$lang['todo_add_title']            = 'Добави ново за правене';
$lang['add_new_todo_description']  = 'Описание';
$lang['no_finished_todos_found']   = 'Няма завършени задачи за правене';
$lang['no_unfinished_todos_found'] = 'Няма намерени задачи за правене';
$lang['unfinished_todos_title']    = 'Незавършени неща за правене';
$lang['finished_todos_title']      = 'Последни завършени неща за правене';

# Utilities
$lang['utility_activity_log']                        = 'Дневник дейности';
$lang['utility_activity_log_filter_by_date']         = 'Филтриране по дата';
$lang['utility_activity_log_dt_description']         = 'Описание';
$lang['utility_activity_log_dt_date']                = 'Дата';
$lang['utility_activity_log_dt_staff']               = 'Служители';
$lang['utility_calendar_new_event_title']            = 'Добави ново събитие';
$lang['utility_calendar_new_event_start_date']       = 'Начална дата';
$lang['utility_calendar_new_event_end_date']         = 'Крайна дата';
$lang['utility_calendar_new_event_make_public']      = 'Публично събитие';
$lang['utility_calendar_event_added_successfully']   = 'Ново събитие е добавно успешно';
$lang['utility_calendar_event_deleted_successfully'] = 'Събитието е изтрито';
$lang['utility_calendar_new_event_placeholder']      = 'Заглавие на събитието';

# Navigation
$lang['nav_notifications']          = 'Известия';
$lang['nav_my_profile']             = 'Моят профил';
$lang['nav_edit_profile']           = 'Промени профил';
$lang['nav_logout']                 = 'Излез';
$lang['nav_no_notifications']       = 'Няма извстия';
$lang['nav_view_all_notifications'] = 'Виж всички известия';
$lang['nav_notifications_tooltip']  = 'Виж известия';

# Footer
$lang['clients_copyright'] = 'Copyright %s';

# Contracts
$lang['clients_contracts']               = 'Договори';
$lang['clients_contracts_dt_subject']    = 'Тема';
$lang['clients_contracts_dt_start_date'] = 'Начална дата';
$lang['clients_contracts_dt_end_date']   = 'Крайна дата';

# Home
$lang['clients_quick_invoice_info']           = 'Кратка информация по фактура';
$lang['clients_home_currency_select_tooltip'] = 'Трябва да изберете валута, защото имате фактури с различна валута';

# Invoices
$lang['clients_invoice_html_btn_download'] = 'Изтегли';
$lang['clients_my_invoices']               = 'Фактури';
$lang['clients_invoice_dt_number']         = 'Фактура #';
$lang['clients_invoice_dt_date']           = 'Дата';
$lang['clients_invoice_dt_duedate']        = 'Платима до';
$lang['clients_invoice_dt_amount']         = 'Сума';
$lang['clients_invoice_dt_status']         = 'Статус';

# Profile
$lang['clients_profile_heading'] = 'Profile';

# Used for edit profile and register START
$lang['clients_firstname'] = 'Име';
$lang['clients_lastname']  = 'Фамилия';
$lang['clients_email']     = 'E-mail';
$lang['clients_company']   = 'Фирма';
$lang['clients_vat']       = 'Булстат';
$lang['clients_phone']     = 'Телефон';
$lang['clients_country']   = 'Държава';
$lang['clients_city']      = 'Град';
$lang['clients_address']   = 'Адрес';
$lang['clients_zip']       = 'Пощенски код';
$lang['clients_state']     = 'Област';
# Used for edit profile and register END

$lang['clients_register_password']                    = 'Парола';
$lang['clients_register_password_repeat']             = 'Повтори Парола Password';
$lang['clients_edit_profile_update_btn']              = 'Обнови';
$lang['clients_edit_profile_change_password_heading'] = 'Промени парола';
$lang['clients_edit_profile_old_password']            = 'Стара парола';
$lang['clients_edit_profile_new_password']            = 'Нова парола';
$lang['clients_edit_profile_new_password_repeat']     = 'Повтори парола';
$lang['clients_edit_profile_change_password_btn']     = 'Промени парола';
$lang['clients_profile_last_changed_password']        = 'Последна промяна на Парола %s';

# Knowledge base
$lang['clients_knowledge_base']                    = 'Помощна база данни';
$lang['clients_knowledge_base_articles_not_found'] = 'Няма намерени статии в Помощна база данни';
$lang['clients_knowledge_base_find_useful']        = 'Статията полезна ли ви беше?';
$lang['clients_knowledge_base_find_useful_yes']    = 'Да';
$lang['clients_knowledge_base_find_useful_no']     = 'Не';
$lang['clients_article_only_1_vote_today']         = 'Може да гласувате веднъв на 24 часа';
$lang['clients_article_voted_thanks_for_feedback'] = 'Благодарим ви за мнението';

# Tickets
$lang['clients_ticket_open_subject']               = 'Отвори билет';
$lang['clients_ticket_open_departments']           = 'Отдел';
$lang['clients_tickets_heading']                   = 'Билети поддръжка';
$lang['clients_ticket_open_service']               = 'Service';
$lang['clients_ticket_open_priority']              = 'Приоритет';
$lang['clients_ticket_open_body']                  = 'Напишете нещо';
$lang['clients_ticket_attachments']                = 'Файлове';
$lang['clients_single_ticket_string']              = 'Билет';
$lang['clients_single_ticket_replied']             = 'Отговорен: %s';
$lang['clients_single_ticket_information_heading'] = 'Информация за билета';
$lang['clients_tickets_dt_number']                 = 'Номер #';
$lang['clients_tickets_dt_subject']                = 'Тема';
$lang['clients_tickets_dt_department']             = 'Отдел';
$lang['clients_tickets_dt_service']                = 'Услуга';
$lang['clients_tickets_dt_status']                 = 'Статус';
$lang['clients_tickets_dt_last_reply']             = 'Последен отговор';
$lang['clients_ticket_single_department']          = 'Отдел: %s';
$lang['clients_ticket_single_submitted']           = 'Подаден: %s';
$lang['clients_ticket_single_status']              = 'Статус:';
$lang['clients_ticket_single_priority']            = 'Приоритет: %s';
$lang['clients_ticket_single_add_reply_btn']       = 'Добави отговор';
$lang['clients_ticket_single_add_reply_heading']   = 'Добави отговор към този билет';

# Login
$lang['clients_login_heading_no_register'] = 'Моля влезте в системата';
$lang['clients_login_heading_register']    = 'Моля влезте или се регистрирайте';
$lang['clients_login_email']               = 'E-mail Адрес';
$lang['clients_login_password']            = 'Парола';
$lang['clients_login_remember']            = 'Запомни ме';
$lang['clients_login_login_string']        = 'Влез';

# Register
$lang['clients_register_string']  = 'Регистрирай се';
$lang['clients_register_heading'] = 'Регистрирай се';

# Navigation
$lang['clients_nav_login']     = 'Влез';
$lang['clients_nav_register']  = 'Регистрирай се';
$lang['clients_nav_invoices']  = 'Фактури';
$lang['clients_nav_contracts'] = 'Договори';
$lang['clients_nav_kb']        = 'Помощна база данни';
$lang['clients_nav_profile']   = 'Профил';
$lang['clients_nav_logout']    = 'Излез';

# Version 1.0.1
$lang['payment_receipt']                               = 'Касова бележка';
$lang['payment_for_string']                            = 'Плащане за';
$lang['payment_date']                                  = 'Дата на плащане:';
$lang['payment_view_mode']                             = 'Метод на плащане:';
$lang['payment_total_amount']                          = 'Обща сума';
$lang['payment_table_invoice_number']                  = 'Номер на фактура';
$lang['payment_table_invoice_date']                    = 'Дата на фактура';
$lang['payment_table_invoice_amount_total']            = 'Сума на фактура';
$lang['payment_table_payment_amount_total']            = 'Обща сума';
$lang['payments_table_transaction_id']                 = 'Транзакция ID: %s';
$lang['payment_getaway_token_not_found']               = 'Token не  намерен';
$lang['online_payment_recorded_success']               = 'Плащанто е записано успешно';
$lang['online_payment_recorded_success_fail_database'] = 'Плащането е успешно, но плащането не е вкарано в базата данни, свържете се с администратора';

# Leads
$lang['lead_convert_to_client']                = 'Промени в клиент';
$lang['lead_convert_to_email']                 = 'E-mail';
$lang['lead_convert_to_client_firstname']      = 'Име';
$lang['lead_convert_to_client_lastname']       = 'Фамилия';
$lang['lead_email_already_exists']             = 'Лийд Е-mail вече съществува';
$lang['lead_to_client_base_converted_success'] = 'Лийд е променен в клиент успешно';
$lang['lead_have_client_profile']              = 'Този Лийд има профил на клиент.';
$lang['lead_converted_edit_client_profile']    = 'Промени профил';

# Invoices
$lang['view_invoice_as_customer_tooltip']                                     = 'Виж фактура като клиент';
$lang['invoice_add_edit_recurring']                                           = 'Повтаряща се фактура?';
$lang['invoice_add_edit_recurring_no']                                        = 'Не';
$lang['invoice_add_edit_recurring_month']                                     = 'Всеки %s месец';
$lang['invoice_add_edit_recurring_months']                                    = 'Всички %s месеци';
$lang['invoices_list_all']                                                    = 'Всички';
$lang['invoices_list_not_have_payment']                                       = 'Фактури по които няма плащания';
$lang['invoices_list_recurring']                                              = 'Повтарящи се плащания';
$lang['invoices_list_made_payment_by']                                        = 'Направено плащане от %s';
$lang['invoices_create_invoice_from_recurring_only_on_paid_invoices']         = 'Създайте нова фактура от повтаряща се фактура, само ако фактурата е със статут на платена?';
$lang['invoices_create_invoice_from_recurring_only_on_paid_invoices_tooltip'] = 'Ако това поле е настроено на Да и повтарящите се фактури не са със статус ПЛАТЕНА, новата фактура няма да бъде създадена.';
$lang['view_invoice_pdf_link_pay']                                            = 'Плати фактура';

# Payment modes
$lang['payment_mode_add_edit_description']         = 'Банкова сметка / Описание';
$lang['payment_mode_add_edit_description_tooltip'] = 'Можете да зададете тук информация за банкови сметки. Ще се показва в HTML фактура';
$lang['payment_modes_dt_description']              = 'Банкова сметка / Описание';
$lang['payment_modes_add_edit_announcement']       = 'Забележка: Изброените по-долу режими на плащане са офлайн режими. Режимите за онлайн плащане могат да бъдат конфигурирани в Настройки -> Payment Gateways';
$lang['payment_mode_add_edit_active']              = 'Активен';
$lang['payment_modes_dt_active']                   = 'Активен';

# Contracts
$lang['contract_not_found'] = 'Договорът не е намерен. Може би е изтрит, проверете историята на дейностите';

# Settings
$lang['setting_bar_heading']                               = 'Настройки';
$lang['settings_group_online_payment_modes']               = 'Payment Gateways';
$lang['settings_paymentmethod_mode_label']                 = 'Етикет';
$lang['settings_paymentmethod_active']                     = 'Активен';
$lang['settings_paymentmethod_currencies']                 = 'Валути (coma separated)';
$lang['settings_paymentmethod_testing_mode']               = 'Вклучи за Тест';
$lang['settings_paymentmethod_paypal_username']            = 'PayPal API Username';
$lang['settings_paymentmethod_paypal_password']            = 'PayPal API Password';
$lang['settings_paymentmethod_paypal_signature']           = 'API Signature';
$lang['settings_paymentmethod_stripe_api_secret_key']      = 'Stripe API Secret Key';
$lang['settings_paymentmethod_stripe_api_publishable_key'] = 'Stripe Publishable Key';
$lang['settings_limit_top_search_bar_results']             = 'Limit Top Search Bar Results to';

## Clients
$lang['client_phonenumber'] = 'Телефон';

# Main Clients
$lang['clients_register']                          = 'Регистрация';
$lang['clients_profile_updated']                   = 'Вашият профил беше актуализиран';
$lang['clients_successfully_registered']           = 'Благодарим ви за рагистрацията';
$lang['clients_account_created_but_not_logged_in'] = 'Профилът ви е създаден, но не сте влезли в системата ни автоматично. Моля, опитайте да влезете сега';

# Tickets
$lang['clients_tickets_heading'] = 'Билети по поддръжка';

# Payments
$lang['payment_for_invoice'] = 'Плащания по фактура';
$lang['payment_total']       = 'Общо: %s';

# Invoice
$lang['invoice_html_online_payment']             = 'Онлайн плащане';
$lang['invoice_html_online_payment_button_text'] = 'Плати сега';
$lang['invoice_html_payment_modes_not_selected'] = 'Моля изберете начин на плащане';
$lang['invoice_html_amount_blank']               = 'Обшата сума не може да е празна или нула';
$lang['invoice_html_offline_payment']            = 'Офлайн плащане';
$lang['invoice_html_amount']                     = 'Сума';
# Version 1.0.2
# DataTables
$lang['dt_button_column_visibility'] = 'Видимост';
$lang['dt_button_reload']            = 'Презареди';
$lang['dt_button_excel']             = 'Excel';
$lang['dt_button_csv']               = 'CSV';
$lang['dt_button_pdf']               = 'PDF';
$lang['dt_button_print']             = 'Принтирай';
$lang['is_not_active_export']        = 'Не';
$lang['is_active_export']            = 'Да';

# Invoice
$lang['invoice_add_edit_advanced_options']                = 'Допълнителни настройки';
$lang['invoice_add_edit_allowed_payment_modes']           = 'Разрешени режими на плащане за тази фактура';
$lang['invoice_add_edit_recurring_invoices_from_invoice'] = 'Създадени фактури от тази повтаряща се фактура';
$lang['invoice_add_edit_no_payment_modes_found']          = 'Няма намерени начини на плащане.';
$lang['invoice_html_total_pay']                           = 'Общо: %s';

# Email templates
$lang['email_templates_table_heading_name'] = 'Име на шаблон';

# General
$lang['discount_type']            = 'Тип на отстъпка';
$lang['discount_type_after_tax']  = 'След данък';
$lang['discount_type_before_tax'] = 'Педи данък';
$lang['terms_and_conditions']     = 'Правила и Условия';
$lang['reference_no']             = 'Референтен #';
$lang['no_discount']              = 'Без отстъпка';
$lang['view_stats_tooltip']       = 'Виж бърза статистика';

# Clients
$lang['zip_from_date']            = 'От дата:';
$lang['zip_to_date']              = 'До дата:';
$lang['client_zip_payments']      = 'Изтегли Плащания като ZIP';
$lang['client_zip_invoices']      = 'Изтегли Фактури като ZIP';
$lang['client_zip_estimates']     = 'Изтегли Оферти като ZIP ';
$lang['client_zip_status']        = 'Статус';
$lang['client_zip_status_all']    = 'Всички';
$lang['client_zip_payment_modes'] = 'Плащане направено по';
$lang['client_zip_no_data_found'] = 'Няма %s намерени';

# Payments
$lang['payment_mode']         = 'Метод на плащане';
$lang['payment_view_heading'] = 'Плащане';

# Settings
$lang['settings_allow_payment_amount_to_be_modified']               = 'Позволи на клиента да променя сумата за плащане (за онлайн плащания)';
$lang['settings_delete_only_on_last_invoice']                       = 'Изтриване на фактура, разрешено само при последната фактура';
$lang['settings_sales_estimate_prefix']                             = 'Префикс номер на Оферта';
$lang['settings_sales_next_estimate_number']                        = 'Следващ номер на Оферта';
$lang['settings_sales_next_estimate_number_tooltip']                = 'Задайте това поле на 1, ако искате да започнете от началото';
$lang['settings_sales_decrement_estimate_number_on_delete']         = 'Номер на Оферта се намалява при изтриването';
$lang['settings_sales_decrement_estimate_number_on_delete_tooltip'] = 'Искате ли да намалите номера на Оферта, когато последната Оферта бъде изтрита? Напр. Ако е зададена тази опция на ДА и изтриете Офертата следващото число е 15, то следващото число ще намалее до 14. Ако е настроено на НЕ, номерът ще остане 15. Ако имате настройка за изтриване само при последна оценка, НЕ трябва да зададете тази опция на Не също, за да запазите следващото число.';
$lang['settings_sales_estimate_number_format']                      = 'Формат на номера на Оферта';
$lang['settings_sales_estimate_number_format_year_based']           = 'Годишно базирана';
$lang['settings_sales_estimate_number_format_number_based']         = 'Номер базирана (000001)';
$lang['settings_delete_only_on_last_estimate']                      = 'Изтриването на Оферта е позволено само за последната фактура';
$lang['settings_send_test_email_heading']                           = 'Изпрати тест E-mail';
$lang['settings_send_test_email_subheading']                        = 'Изпратете тестов Е-mail за да се уверите, че вашите SMTP настройки са зададени правилно.';
$lang['settings_send_test_email_string']                            = 'E-mail Адрес';
$lang['settings_smtp_settings_heading']                             = 'SMTP Настройки';
$lang['settings_smtp_settings_subheading']                          = 'Настрой главен Е-mail';
$lang['settings_sales_heading_general']                             = 'Главни';
$lang['settings_sales_heading_invoice']                             = 'Фактура';
$lang['settings_sales_heading_estimates']                           = 'Оферта';
$lang['settings_sales_cron_invoice_heading']                        = 'Фактура';

# Tasks
$lang['tasks_dt_datestart'] = 'Начална дата';

# Invoice General
$lang['invoice_discount'] = 'Отстъпка';

# Settings
$lang['settings_rtl_support_admin']                                   = 'RTL Admin Area (Right to Left)';
$lang['settings_rtl_support_client']                                  = 'RTL Customers Area (Right to Left)';
$lang['settings_estimate_auto_convert_to_invoice_on_client_accept']   = 'Auto convert the estimate to invoice after client accept';
$lang['settings_exclude_estimate_from_client_area_with_draft_status'] = 'Exclude estimates with draft status from customers area';

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
$lang['time_ago_just_now']  = 'Преди малко';
$lang['time_ago_minute']    = 'Преди една минута';
$lang['time_ago_minutes']   = 'Преди %s минути';
$lang['time_ago_hour']      = 'Преди един час';
$lang['time_ago_hours']     = 'преди %s часа';
$lang['time_ago_yesterday'] = 'вчера';
$lang['time_ago_days']      = 'преди %s дни';
$lang['time_ago_week']      = 'преди седмица';
$lang['time_ago_weeks']     = 'преди %s седмици';
$lang['time_ago_month']     = 'преди месец';
$lang['time_ago_months']    = 'преди %s месеца';
$lang['time_ago_year']      = 'преди една година';
$lang['time_ago_years']     = 'преди %s години';

# Estimates
$lang['estimates']                                = 'Оферти';
$lang['estimate']                                 = 'Оферта';
$lang['estimate_lowercase']                       = 'оферта';
$lang['create_new_estimate']                      = 'Нова Оферта';
$lang['view_estimate']                            = 'Виж Оферта';
$lang['estimate_sent_to_client_success']          = 'Офертата е изпратена на клиента успешно';
$lang['estimate_sent_to_client_fail']             = 'Проблем при изпращанто на Оферта';
$lang['estimate_view']                            = 'Виж Оферта';
$lang['estimate_select_customer']                 = 'Клиент';
$lang['estimate_add_edit_number']                 = 'Оферта номер';
$lang['estimate_add_edit_date']                   = 'Оферта дата';
$lang['estimate_add_edit_expirydate']             = 'Дата на изтичане';
$lang['estimate_add_edit_currency']               = 'Валута';
$lang['estimate_add_edit_client_note']            = 'Бележка клиент';
$lang['estimate_add_edit_admin_note']             = 'Бележка админ';
$lang['estimates_toggle_table_tooltip']           = 'Toggle Table';
$lang['estimate_add_edit_advanced_options']       = 'Разширени настройки';
$lang['estimate_to']                              = 'До';
$lang['estimates_list_all']                       = 'Всички';
$lang['estimate_invoiced_date']                   = 'Оферта е фактурирана на %s';
$lang['edit_estimate_tooltip']                    = 'Промени Оферта';
$lang['delete_estimate_tooltip']                  = 'Изтрии Оферта';
$lang['estimate_sent_to_email_tooltip']           = 'Изпрати по E-mail';
$lang['estimate_already_send_to_client_tooltip']  = 'Тази Оферта вече е изпратена на %s';
$lang['estimate_view_activity_tooltip']           = 'Дневник промени';
$lang['estimate_send_to_client_modal_heading']    = 'Изпрати Оферта към клиент';
$lang['estimate_send_to_client_attach_pdf']       = 'Добави Оферта PDF';
$lang['estimate_send_to_client_preview_template'] = 'Прегледай E-mail Шаблон';
$lang['estimate_dt_table_heading_number']         = 'Оферта #';
$lang['estimate_dt_table_heading_date']           = 'Дата';
$lang['estimate_dt_table_heading_client']         = 'Клиент';
$lang['estimate_dt_table_heading_expirydate']     = 'Дата на изтичане';
$lang['estimate_dt_table_heading_amount']         = 'Сума';
$lang['estimate_dt_table_heading_status']         = 'Статус';
$lang['estimate_convert_to_invoice']              = 'Промени на Фактура';

# Clients
$lang['client_payments_tab'] = 'Плащания';

# Estimate General
$lang['estimate_pdf_heading']            = 'Оферта';
$lang['estimate_table_item_heading']     = 'Стока/Услуга';
$lang['estimate_table_quantity_heading'] = 'Мярка';
$lang['estimate_table_rate_heading']     = 'Ед. цена';
$lang['estimate_table_tax_heading']      = 'ДДС';
$lang['estimate_table_amount_heading']   = 'Сума';
$lang['estimate_subtotal']               = 'Междинна сума';
$lang['estimate_adjustment']             = 'Корекция';
$lang['estimate_discount']               = 'Намаление';
$lang['estimate_total']                  = 'Общо';
$lang['estimate_to']                     = 'До';
$lang['estimate_data_date']              = 'Дата на създаване';
$lang['estimate_data_expiry_date']       = 'Дата на изтичане';
$lang['estimate_note']                   = 'Бележка:';
$lang['estimate_status_draft']           = 'Чернови';
$lang['estimate_status_sent']            = 'Изпратени';
$lang['estimate_status_declined']        = 'Отхвърлени';
$lang['estimate_status_accepted']        = 'Приети';
$lang['estimate_status_expired']         = 'Изтекли';
$lang['estimate_note']                   = 'Бележка:';

## Clients
$lang['clients_estimate_dt_number']             = 'Оферта #';
$lang['clients_estimate_dt_date']               = 'Дата';
$lang['clients_estimate_dt_duedate']            = 'Крайна дата';
$lang['clients_estimate_dt_amount']             = 'Сума';
$lang['clients_estimate_dt_status']             = 'Статус';
$lang['clients_nav_estimates']                  = 'Оферти';
$lang['clients_decline_estimate']               = 'Отхвърли';
$lang['clients_accept_estimate']                = 'Приеми';
$lang['clients_my_estimates']                   = 'Оферти';
$lang['clients_estimate_invoiced_successfully'] = 'Благодаря ви, че приехте Офертата. Моля, прегледайте създадената фактура към Офертата';
$lang['clients_estimate_accepted_not_invoiced'] = 'Благодаря ви, че приехте Офертата';
$lang['clients_estimate_declined']              = 'Офертата е отказана. Можете да приемете Офертата по всяко време преди датата на изтичане';
$lang['clients_estimate_failed_action']         = 'Неуспешно предприемане на действия по тази Оферта';
$lang['client_add_edit_profile']                = 'Профил';

# Custom Fields
$lang['custom_field']                          = 'Потребителско поле';
$lang['custom_field_lowercase']                = 'потребителско поле';
$lang['custom_fields']                         = 'Потребителски полета';
$lang['new_custom_field']                      = 'Ново потребителско поле';
$lang['custom_field_name']                     = 'Име на поле';
$lang['custom_field_add_edit_type']            = 'Тип';
$lang['custom_field_add_edit_belongs_top']     = 'Полето пренадлежи на';
$lang['custom_field_add_edit_options']         = 'Опции';
$lang['custom_field_add_edit_options_tooltip'] = 'Използвайте само за селектиран на чекбоксове. Попълнете полето, като разделите опциите със запетая. Напр. ябълка, портокал, банан "Only use for Select, Checkbox types. Populate the field by separating the options by coma. eq. apple,orange,banana';
$lang['custom_field_add_edit_order']           = 'Подредба';
$lang['custom_field_dt_field_to']              = 'Принадлежи на';
$lang['custom_field_dt_field_name']            = 'Име';
$lang['custom_field_dt_field_type']            = 'Тип';
$lang['custom_field_add_edit_active']          = 'Активен';
$lang['custom_field_add_edit_disabled']        = 'Неактивен';

# Ticket replies
$lang['ticket_reply'] = 'Отговор на билет';

# Admin Customizer Sidebar
$lang['asc_custom_fields'] = 'Потребителски полета';

# Contracts
$lang['contract_types']           = 'Типове договори';
$lang['contract_type']            = 'Тип на договор';
$lang['new_contract_type']        = 'Нов тип на договор';
$lang['contract_type_lowercase']  = 'договор';
$lang['contract_type_name']       = 'Име';
$lang['contract_types_list_name'] = 'Тип на договор';

# Customizer Menu
$lang['acs_contracts']      = 'Договори';
$lang['acs_contract_types'] = 'Типове договори ';

# Version 1.0.4
# Invoice Items
$lang['invoice_item_long_description'] = 'Дълго описание';

# Customers
$lang['clients_list_phone']                = 'Телефон';
$lang['client_expenses_tab']               = 'Разходи';
$lang['customers_summary']                 = 'Клиенти обобщение';
$lang['customers_summary_active']          = 'Активни контакти';
$lang['customers_summary_inactive']        = 'Неактивни контакти';
$lang['customers_summary_logged_in_today'] = 'Контакти били активни днес';

# Authentication
$lang['admin_auth_forgot_password_email']     = 'E-mail Адрес';
$lang['admin_auth_forgot_password_heading']   = 'Забравена парола';
$lang['admin_auth_login_heading']             = 'Влез';
$lang['admin_auth_login_email']               = 'E-mail Адрес';
$lang['admin_auth_login_password']            = 'Парола';
$lang['admin_auth_login_remember_me']         = 'Запомни ме';
$lang['admin_auth_login_button']              = 'Влез';
$lang['admin_auth_login_fp']                  = 'Забравена парола?';
$lang['admin_auth_reset_password_heading']    = 'Смени парола';
$lang['admin_auth_reset_password']            = 'Парола';
$lang['admin_auth_reset_password_repeat']     = 'Повторете паролата';
$lang['admin_auth_invalid_email_or_password'] = 'Невалиден Е-mail или Парола';
$lang['admin_auth_inactive_account']          = 'Неактивен акаунт';

# Calender
$lang['calendar_estimate']          = 'Оферта';
$lang['calendar_invoice']           = 'Фактура';
$lang['calendar_contract']          = 'Договор';
$lang['calendar_customer_reminder'] = 'Напомняне клиент';
$lang['calendar_event']             = 'Събитие';
$lang['calendar_task']              = 'Задача';

# Leads
$lang['lead_edit_delete_tooltip'] = 'Изтрии Лийд';
$lang['lead_attachments']         = 'Файлове';

# Admin Customizer Sidebar
$lang['acs_finance'] = 'Финанси';

# Settings
$lang['settings_show_sale_agent_on_invoices']       = 'Добави служител към фактура';
$lang['settings_show_sale_agent_on_estimates']      = 'Добави служител към Офертата';
$lang['settings_predefined_predefined_term']        = 'Предифинирани Правила и условия';
$lang['settings_predefined_clientnote']             = 'Предифинирани клиентски бележки';
$lang['settings_custom_pdf_logo_image_url']         = 'Персонализиран PDF с фирмено лого URL';
$lang['settings_custom_pdf_logo_image_url_tooltip'] = 'Вероятно ще имате проблеми с PNG изображения с прозрачност, които се обработват по различен начин в зависимост от използваната версия на php-imagick или php-gd. Опитайте се да обновите php-imagick и да забраните php-gd
, Ако оставите това поле празно, ще се използва качено лого.';

# General
$lang['sale_agent_string']               = 'Служител';
$lang['amount_display_in_base_currency'] = 'Сумата се показва в основната валута - Използвайте този отчет само ако използвате 1 валута за плащания и разходи.';
# Leads
$lang['leads_summary'] = 'Обобщение Лийдове';

# Contracts
$lang['contract_value']                       = 'Стойност на договор';
$lang['contract_trash']                       = 'Кошче';
$lang['contracts_view_trash']                 = 'Виж кошче';
$lang['contracts_view_all']                   = 'Всички';
$lang['contracts_view_exclude_trashed']       = 'Не включвай изтрити договори';
$lang['contract_value_tooltip']               = 'Ще се използва основната валута.';
$lang['contract_trash_tooltip']               = 'Ако добавите договор към кошчето, той няма да се показва на клиента, няма да бъдете включени в таблици и други статистики, а по подразбиране няма да се показва и с всички договори.';
$lang['contract_summary_active']              = 'Активно';
$lang['contract_renew_heading']               = 'Поднови договор';
$lang['contract_summary_heading']             = 'Резюме на договора';
$lang['contract_summary_expired']             = 'Изтекъл';
$lang['contract_summary_about_to_expire']     = 'Пред изтичане';
$lang['contract_summary_recently_added']      = 'Наскоро добавен';
$lang['contract_summary_trash']               = 'Кошче';
$lang['contract_summary_by_type']             = 'Договори по тип';
$lang['contract_summary_by_type_value']       = 'Стойност на договори по тип';
$lang['contract_renewed_successfully']        = 'Успешно подновени договори';
$lang['contract_renewed_fail']                = 'Проблем при подновяване на договора. Свържете се с администратор';
$lang['no_contract_renewals_found']           = 'Не са намерени подновявания за този договор';
$lang['no_contract_renewals_history_heading'] = 'История на подновяване на договора';
$lang['contract_renewed_by']                  = '%s поднови този договор';
$lang['contract_renewal_deleted']             = 'Подновяването е изтрито успешно';
$lang['contract_renewal_delete_fail']         = 'Изтриването на подновяването на договора не бе успешно. Свържете се с администратор';
$lang['contract_renewal_new_value']           = 'Нова стойност на договора: %s';
$lang['contract_renewal_old_value']           = 'Стойност на стар договор: %s';
$lang['contract_renewal_new_start_date']      = 'Нова начална дата: %s';
$lang['contract_renewal_old_start_date']      = 'Старата начална дата на договора беше до: %s';
$lang['contract_renewal_new_end_date']        = 'Нова крайна дата: %s';
$lang['contract_renewal_old_end_date']        = 'Датата на приключване на договора беше до: %s';
$lang['contract_attachment']                  = 'Файлове';

# Admin Aside Menu
$lang['als_expenses']           = 'Разходи';
$lang['als_reports_expenses']   = 'Разходи';
$lang['als_expenses_vs_income'] = 'Разходи с/у Приходи';

# Invoices
$lang['invoice_attach_file']           = 'Прикачи файл';
$lang['invoice_mark_as_sent']          = 'Маркирай като изпратено';
$lang['invoice_marked_as_sent']        = 'Фактурата е маркирана като изпратена успешно';
$lang['invoice_marked_as_sent_failed'] = 'Маркирането на Фактурата като изпратена е неуспешно';

# Payments
$lang['payment_transaction_id'] = 'Транзакция ID';

# Expenses
$lang['acs_expense_categories']                       = 'Категории Разходи';
$lang['expense_category']                             = 'Категория Разход';
$lang['expense_category_lowercase']                   = 'категория разход';
$lang['new_expense']                                  = 'Нов Разход';
$lang['expense_add_edit_name']                        = 'Име на категория';
$lang['expense_add_edit_description']                 = 'Описание категория';
$lang['expense_categories']                           = 'Категории разходи';
$lang['new_expense_category']                         = 'Нова категория';
$lang['dt_expense_description']                       = 'Описание';
$lang['expense']                                      = 'Разход';
$lang['expenses']                                     = 'Разходи';
$lang['expense_lowercase']                            = 'разход';
$lang['expense_add_edit_customer']                    = 'Клиент';
$lang['expense_add_edit_note']                        = 'Бележка';
$lang['expense_add_edit_date']                        = 'Дата';
$lang['expense_add_edit_amount']                      = 'Сума';
$lang['expense_add_edit_billable']                    = 'Платим';
$lang['expense_add_edit_attach_receipt']              = 'Добави разписка';
$lang['expense_add_edit_reference_no']                = 'Референция #';
$lang['expense_receipt']                              = 'Разход бележка';
$lang['expense_receipt_lowercase']                    = 'разход бележка';
$lang['expense_dt_table_heading_category']            = 'Категория';
$lang['expense_dt_table_heading_amount']              = 'Сума';
$lang['expense_dt_table_heading_date']                = 'Дата';
$lang['expense_dt_table_heading_reference_no']        = 'Референция #';
$lang['expense_dt_table_heading_customer']            = 'Клиент';
$lang['expense_dt_table_heading_payment_mode']        = 'Метод на плащане';
$lang['expense_converted_to_invoice']                 = 'Разходът е успешно преобразуван във фактура';
$lang['expense_converted_to_invoice_fail']            = 'Неуспешно преобразуване на този разход във фактура. Виж лога на грешките в регистъра.';
$lang['expense_copy_success']                         = 'Разходът се копира успешно.';
$lang['expense_copy_fail']                            = 'Неуспешно копиране на разход. Моля, проверете задължителните полета и опитайте отново';
$lang['expenses_list_all']                            = 'Всички';
$lang['expenses_list_billable']                       = 'Платими';
$lang['expenses_list_non_billable']                   = 'Неплатими';
$lang['expenses_list_invoiced']                       = 'Фактурирани';
$lang['expenses_list_unbilled']                       = 'Не фактурирани';
$lang['expenses_list_recurring']                      = 'Повтарящи';
$lang['expense_invoice_delete_not_allowed']           = 'Не можете да изтриете този разход. Разходите вече са фактурирани.';
$lang['expense_convert_to_invoice']                   = 'Промени във фактура';
$lang['expense_edit']                                 = 'Промени разход';
$lang['expense_delete']                               = 'Изтрии';
$lang['expense_copy']                                 = 'Копирай';
$lang['expense_invoice_not_created']                  = 'Не е създадена фактура';
$lang['expense_billed']                               = 'Платимо';
$lang['expense_not_billed']                           = 'Неплатено';
$lang['expense_customer']                             = 'Клиент';
$lang['expense_note']                                 = 'Бележка:';
$lang['expense_date']                                 = 'Дата:';
$lang['expense_ref_noe']                              = 'Референтен #:';
$lang['expense_amount']                               = 'Сума:';
$lang['expense_recurring_indicator']                  = 'Повтарящ';
$lang['expense_already_invoiced']                     = 'Този разход вече е фактуриран';
$lang['expense_recurring_auto_create_invoice']        = 'Автоматично създаване на фактура';
$lang['expense_recurring_send_custom_on_renew']       = 'Изпратете фактурата на имейл на клиента, когато разходите се подновят';
$lang['expense_recurring_autocreate_invoice_tooltip'] = 'Ако е избрана тази опция, фактурата за клиента ще бъде автоматично създадена, когато разходът бъде подновен.';
$lang['expenses_yearly_by_categories']                = 'Годишни разходи по категории';
$lang['total_expenses_for']                           = 'Общо разходи за'; // year
$lang['expenses_report_for']                          = 'Разходи за'; // year

# Custom fields
$lang['custom_field_required']    = 'Задължително';
$lang['custom_field_show_on_pdf'] = 'Покажи на PDF';
$lang['custom_field_leads']       = 'Лийдове';
$lang['custom_field_customers']   = 'Клиенти';
$lang['custom_field_staff']       = 'Служители';
$lang['custom_field_contracts']   = 'Договори';
$lang['custom_field_tasks']       = 'Задачи';
$lang['custom_field_expenses']    = 'Разходи';
$lang['custom_field_invoice']     = 'Фактура';
$lang['custom_field_estimate']    = 'Оферта';

# Tickets
$lang['ticket_single_private_staff_notes'] = 'Лични бележки служители';

# Business News
$lang['business_news'] = 'Бизнес новини';

# Navigation
$lang['nav_todo_items'] = 'Неща за правене';

# Contracts
$lang['clients_contracts_type'] = 'Тип на договора';

# Version 1.0.5
# General
$lang['no_tax']                              = 'Без данък';
$lang['numbers_not_formatted_while_editing'] = 'Номерът в полето за въвеждане не е форматиран, докато редактирате / добавяте елемент и трябва да остане неформатиран, не се опитвайте да го форматирате тук.';
# Contracts
$lang['contracts_view_expired']         = 'Изтекло';
$lang['contracts_view_without_dateend'] = 'Договори без крайна дата';

# Email Templates
$lang['email_template_contracts_fields_heading'] = 'Договори';

# Invoices General
$lang['invoice_estimate_general_options'] = 'Главни настройки';
$lang['invoice_table_item_description']   = 'Описание';
$lang['invoice_recurring_indicator']      = 'Повтарящо';

# Estimates
$lang['estimate_convert_to_invoice_successfully'] = 'Офертата е превърната успешно във фактурата';
$lang['estimate_table_item_description']          = 'Описание';

# Version 1.0.6
# Invoices
# Currencies
$lang['cant_delete_base_currency'] = 'Не можете да изтриете основната валута. Трябва да зададете нова базова валута, след което да извършите изтриване.';
$lang['invoice_copy']              = 'Копирай фактура';
$lang['invoice_copy_success']      = 'Фактурата успешно копирана';
$lang['invoice_copy_fail']         = 'Копирането на фактурата се провали';
$lang['invoice_due_after_help']    = 'Задайте нула, за да избегнете изчислението';
$lang['show_shipping_on_invoice']  = 'Показване на данните за доставка във фактурата';

# Estimates
$lang['show_shipping_on_estimate']         = 'Показване на данните за доставка в прогнозите';
$lang['is_invoiced_estimate_delete_error'] = 'Тази Оферта е фактурирана. Не можете да изтриете приблизителната оценка';

# Customers & Invoices / Estimates
$lang['ship_to']                            = 'Достави на';
$lang['customer_profile_details']           = 'Клиент детайли';
$lang['billing_shipping']                   = 'Доставка';
$lang['billing_address']                    = 'Адрес';
$lang['shipping_address']                   = 'Адрес на изпълнение';
$lang['billing_street']                     = 'Улица';
$lang['billing_city']                       = 'Град';
$lang['billing_state']                      = 'Област';
$lang['billing_zip']                        = 'Пощенски код';
$lang['billing_country']                    = 'Държава';
$lang['shipping_street']                    = 'Улица';
$lang['shipping_city']                      = 'Град';
$lang['shipping_state']                     = 'Област';
$lang['shipping_zip']                       = 'Пощенски код';
$lang['shipping_country']                   = 'Държава';
$lang['get_shipping_from_customer_profile'] = 'Вземи адрес от профила на клиент';

# Customer
$lang['customer_default_currency']                             = 'Валута по подразбиране';
$lang['customer_update_address_info_on_invoices']              = 'Актуализирайте данните за доставка / таксуване за всички предишни фактури / приблизителни оценки';
$lang['customer_update_address_info_on_invoices_help']         = 'Ако поставите отметка в това поле, доставката и данните за таксуването ще бъдат актуализирани до всички фактури и прогнози. Забележка: Фактурите със статут платени не се променят.';
$lang['setup_google_api_key_customer_map']                     = 'Setup google api key in order to view to customer map';
$lang['customer_attachments_file']                             = 'Файлове';
$lang['client_send_set_password_email']                        = 'Изпрати имейл на настройка на паролата';
$lang['customer_billing_same_as_profile']                      = 'Същото като информацията за клиента';
$lang['customer_billing_copy']                                 = 'Копиране на адрес за фактуриране';
$lang['customer_map']                                          = 'Карта';
$lang['set_password_email_sent_to_client']                     = 'Имейлът за задаване на парола е изпратен успешно';
$lang['set_password_email_sent_to_client_and_profile_updated'] = 'Профилът е актуализиран и имейлът за задаване на парола е изпратен успешно';
$lang['customer_attachments']                                  = 'Файлове';
$lang['customer_longitude']                                    = 'Longitude (Google Maps)';
$lang['customer_latitude']                                     = 'Latitude (Google Maps)';

# Authentication
$lang['admin_auth_set_password']         = 'Парола';
$lang['admin_auth_set_password_repeat']  = 'Повтори парола';
$lang['admin_auth_set_password_heading'] = 'Парола';

# General
$lang['apply']                         = 'Apply';
$lang['department_calendar_id']        = 'Google Calendar ID';
$lang['localization_default_language'] = 'Default Language';
$lang['system_default_string']         = 'System Default';
$lang['advanced_options']              = 'Advanced Options';

# Expenses
$lang['expense_list_invoice']  = 'Фактуриран';
$lang['expense_list_billed']   = 'Платен';
$lang['expense_list_unbilled'] = 'Неплатен';

# Leads
$lang['lead_merge_custom_field']          = 'Обединяване като персонализирано поле';
$lang['lead_merge_custom_field_existing'] = 'Обединяване с полето на базата данни';
$lang['lead_dont_merge_custom_field']     = 'Не обдинявай';
$lang['lost_leads']                       = 'изгубни лийдове';
$lang['junk_leads']                       = 'Нежелани лийдове';
$lang['lead_mark_as_lost']                = 'Маркирай лийд като изгубен';
$lang['lead_unmark_as_lost']              = 'Демаркирайте лийд като загубено';
$lang['lead_marked_as_lost']              = 'Лийд е маркирано като успешно изгубено';
$lang['lead_unmarked_as_lost']            = 'Лийд е демаркирано като успешно изгубено';
$lang['leads_status_color']               = 'Цвят';
$lang['lead_mark_as_junk']                = 'Маркирай като нежелано';
$lang['lead_unmark_as_junk']              = 'Демаркирай като нежелано';
$lang['lead_marked_as_junk']              = 'Лийд е маркиран успешно като нежелан';
$lang['lead_unmarked_as_junk']            = 'Лийд е демаркиран успешно като нежелан';
$lang['lead_not_found']                   = 'Лийд н е намерен';
$lang['lead_lost']                        = 'Изгубен';
$lang['lead_junk']                        = 'Нежелан';
$lang['leads_not_assigned']               = 'Не е зададен';

# Contacts
$lang['contract_not_visible_to_client'] = 'Скрий от клиент';
$lang['contract_edit_overview']         = 'Виж клиент';
$lang['contract_attachments']           = 'Файлове';

# Tasks
$lang['task_view_make_public']     = 'Направи публична';
$lang['task_is_private']           = 'Лична задача';
$lang['task_finished']             = 'Завършена';
$lang['task_single_related']       = 'Свързани';
$lang['task_unmark_as_complete']   = 'Демаркирай като завършена';
$lang['task_unmarked_as_complete'] = 'Задачата е демаркирана като завършена';
$lang['task_relation']             = 'Свързани';
$lang['task_public']               = 'Публична';
$lang['task_public_help']          = 'Ако зададете тази задача като Публична, тя ще бъде видима за всички членове на персонала. В противен случай ще бъде видима само за членове, които са назначни към задача, последователи, създатели или администратори';

# Settings
$lang['settings_general_favicon']                                            = 'Favicon';
$lang['settings_output_client_pdfs_from_admin_area_in_client_language']      = 'Output client PDF documents from admin area in client language';
$lang['settings_output_client_pdfs_from_admin_area_in_client_language_help'] = 'If this options is set to yes and eq. the system default language is English and client have setup language french the pdf documents will be outputted in the client language';
$lang['settings_default_tax']                                                = 'Default Tax';
$lang['setup_calendar_by_departments']                                       = 'Setup calendar by Departments';
$lang['settings_calendar']                                                   = 'Календар';
$lang['settings_sales_invoice_due_after']                                    = 'Invoice due after (days)';
$lang['settings_google_api']                                                 = 'Google API Key';
$lang['settings_gcal_main_calendar_id']                                      = 'Google Calendar ID';
$lang['settings_gcal_main_calendar_id_help']                                 = 'This is the main company calendar. All events from this calendar will be shown. If you want to specify a calendar based on departments you can add in the department Google Calendar ID.';
$lang['show_on_calendar']                                                    = 'Покажи на календар';
$lang['show_invoices_on_calendar']                                           = 'Фактури';
$lang['show_estimates_on_calendar']                                          = 'Оферти';
$lang['show_contracts_on_calendar']                                          = 'Договори';
$lang['show_tasks_on_calendar']                                              = 'Задачи';
$lang['show_customer_reminders_on_calendar']                                 = 'Клиентски напомняния';

# Leads
$lang['copy_custom_fields_convert_to_customer']                      = 'Copy custom fields to customer profile';
$lang['copy_custom_fields_convert_to_customer_help']                 = 'If any of the following custom fields do not exists for customer will be auto created with the same name otherwise only the value will be copied from the lead profile.';
$lang['lead_profile']                                                = 'Профил';
$lang['lead_is_client']                                              = 'Клиент';
$lang['leads_email_integration_folder_no_encryption']                = 'No Encryption';
$lang['leads_email_integration']                                     = 'Email Integration';
$lang['leads_email_active']                                          = 'Active';
$lang['leads_email_integration_imap']                                = 'IMAP Server';
$lang['leads_email_integration_email']                               = 'Email address (Login)';
$lang['leads_email_integration_password']                            = 'Password';
$lang['leads_email_integration_default_source']                      = 'Default Source';
$lang['leads_email_integration_check_every']                         = 'Check Every (minutes)';
$lang['leads_email_integration_default_assigned']                    = 'Responsible for new lead';
$lang['leads_email_encryption']                                      = 'Encryption';
$lang['leads_email_integration_updated']                             = 'Email Integration Updated';
$lang['leads_email_integration_default_status']                      = 'Default Status';
$lang['leads_email_integration_folder']                              = 'Folder';
$lang['leads_email_integration_notify_when_lead_imported']           = 'Notify when lead imported';
$lang['leads_email_integration_only_check_unseen_emails']            = 'Only check non opened emails';
$lang['leads_email_integration_only_check_unseen_emails_help']       = 'The script will auto set the email to opened after check. This is used to prevent checking all the emails again and again. Its not recommended to uncheck this option if you have a lot emails and you have setup a lot forwarding to the email you setup for leads';
$lang['leads_email_integration_notify_when_lead_contact_more_times'] = 'Notify if lead send email multiple times';
$lang['leads_email_integration_test_connection']                     = 'Test IMAP Connection';
$lang['lead_email_connection_ok']                                    = 'IMAP Connection is good';
$lang['lead_email_connection_not_ok']                                = 'IMAP Connection is not OK';
$lang['lead_email_activity']                                         = 'Email Activity';
$lang['leads_email_integration_notify_roles']                        = 'Roles to Notify';
$lang['leads_email_integration_notify_staff']                        = 'Staff Members to Notify';
$lang['lead_public']                                                 = 'Public';

# Knowledge Base
$lang['kb_group_color'] = 'Color';
$lang['kb_group_order'] = 'Order';

# Utilities - BULK PDF Exporter
$lang['bulk_pdf_exporter']             = 'Bulk PDF Export';
$lang['bulk_export_pdf_payments']      = 'Плащания';
$lang['bulk_export_pdf_estimates']     = 'Оферти';
$lang['bulk_export_pdf_invoices']      = 'Фактури';
$lang['bulk_pdf_export_button']        = 'Експорт';
$lang['bulk_pdf_export_select_type']   = 'Select Type';
$lang['no_data_found_bulk_pdf_export'] = 'No data found for export';
$lang['bulk_export_status_all']        = 'Всички';
$lang['bulk_export_status']            = 'Статус';
$lang['bulk_export_zip_payment_modes'] = 'Направени плащания от';
$lang['bulk_export_include_tag']       = 'Include Tag';
$lang['bulk_export_include_tag_help']  = 'eq. Original or Copy. The tag will be outputted in the PDF. Recommended to use only 1 tag';

# Version 1.0.7
## Customers - portal
$lang['clients_nav_proposals'] = 'Предложения';
$lang['clients_nav_support']   = 'Връзка с нас';

# General
$lang['more']            = 'Още';
$lang['add_item']        = 'Добави нещо';
$lang['goto_admin_area'] = 'Отиди в Админ';
$lang['delete']          = 'Изтрии %s';
$lang['welcome_top']     = 'Здравей %s';

# Customers
$lang['customer_permissions']         = 'Разршения';
$lang['customer_permission_invoice']  = 'Фактури';
$lang['customer_permission_estimate'] = 'Оферти';
$lang['customer_permission_proposal'] = 'Предложения';
$lang['customer_permission_contract'] = 'Договори';
$lang['customer_permission_support']  = 'Обслужване Клиенти';

#Tasks
$lang['task_related_to'] = 'Свързан с:';

# Send file
$lang['custom_file_fail_send']    = 'Failed to send file';
$lang['custom_file_success_send'] = 'The file is successfully send to %s';
$lang['send_file_subject']        = 'Email Subject';
$lang['send_file_email']          = 'Email Address';
$lang['send_file_message']        = 'Message';
$lang['send_file']                = 'Send File';
$lang['add_checklist_item']       = 'Checklist Item';
$lang['task_checklist_items']     = 'Checklist Items';

# Import
$lang['default_pass_clients_import'] = 'Default password for all contacts';
$lang['simulate_import']             = 'Симулирай Импорт';
$lang['import_upload_failed']        = 'Качването неуспешно';
$lang['import_total_imported']       = 'Общо импортирани: %s';
$lang['import_leads']                = 'Импортирай Лийдове';
$lang['import_customers']            = 'Импортирай Клиенти';
$lang['choose_csv_file']             = 'Избери CSV Файл';
$lang['import']                      = 'Импортирай';
$lang['lead_import_status']          = 'Статус';
$lang['lead_import_source']          = 'Източник';

# Bulk PDF Export
$lang['bulk_export_pdf_proposals'] = 'Предложения';

# Invoices
$lang['delete_invoice'] = 'Изтрии';
$lang['items']          = 'Стоки/Услуги';
$lang['support']        = 'Обслужване';
$lang['new_ticket']     = 'Нов Билет';

# Reminders
$lang['calendar_lead_reminder']  = 'Lead Reminder';
$lang['lead_set_reminder_title'] = 'Set Lead Reminder';
$lang['set_reminder_tooltip']    = 'This option allows you to never forget anything about your customers.';
$lang['client_reminders_tab']    = 'Напомняния';
$lang['leads_reminders_tab']     = 'Напомняния';

# Tickets
$lang['delete_ticket_reply']  = 'Delete Reply';
$lang['ticket_priority_edit'] = 'Edit Priority';
$lang['ticket_priority_add']  = 'Add Priority';
$lang['ticket_status_edit']   = 'Edit Ticket Status';
$lang['ticket_service_edit']  = 'Edit Ticket Service';
$lang['edit_department']      = 'Edit Department';

# Expenses
$lang['edit_expense_category'] = 'Edit Expense Category';

# Settings
$lang['customer_default_country']                                 = 'Default Country';
$lang['settings_sales_require_client_logged_in_to_view_estimate'] = 'Require client to be logged in to view estimate';
$lang['set_reminder']                                             = 'Set Reminder';
$lang['set_reminder_date']                                        = 'Date to be notified';
$lang['reminder_description']                                     = 'Set description';
$lang['reminder_notify_me_by_email']                              = 'Send also an email for this reminder';
$lang['reminder_added_successfully']                              = 'Reminder added successfully. You will be notified in time.';
$lang['reminder_description']                                     = 'Описание';
$lang['reminder_date']                                            = 'Дата';
$lang['reminder_staff']                                           = 'Напомняне';
$lang['reminder_is_notified']                                     = 'Is notified?';
$lang['reminder_is_notified_boolean_no']                          = 'Не';
$lang['reminder_is_notified_boolean_yes']                         = 'Да';
$lang['reminder_set_to']                                          = 'Set reminder to';
$lang['reminder_deleted']                                         = 'Reminder deleted successfully';
$lang['reminder_failed_to_delete']                                = 'Failed to delete the reminder';
$lang['show_invoice_estimate_status_on_pdf']                      = 'Show invoice/estimate status on PDF';
$lang['email_piping_default_priority']                            = 'Default priority on piped ticket';
$lang['show_lead_reminders_on_calendar']                          = 'Лийд Напомняния';
$lang['tickets_piping']                                           = 'Email Piping';
$lang['email_piping_only_replies']                                = 'Only Replies Allowed by Email';
$lang['email_piping_only_registered']                             = 'Pipe Only on Registered Users';

# Estimates
$lang['view_estimate_as_client']         = 'Вижте Офертата като клиент';
$lang['estimate_mark_as']                = 'Маркирай като %s';
$lang['estimate_status_changed_success'] = 'Статус на Оферта е променен';
$lang['estimate_status_changed_fail']    = 'Смяната на статус се провали';

# Proposals
$lang['proposal_to']                            = 'Фирма / Име';
$lang['proposal_date']                          = 'Дата';
$lang['proposal_address']                       = 'Адрес';
$lang['proposal_phone']                         = 'Телефон';
$lang['proposal_email']                         = 'E-mail';
$lang['proposal_date_created']                  = 'Дата на създаван';
$lang['proposal_open_till']                     = 'Валидно до';
$lang['proposal_status_open']                   = 'Отворени';
$lang['proposal_status_accepted']               = 'Приети';
$lang['proposal_status_declined']               = 'Отказани';
$lang['proposal_status_sent']                   = 'Изпратени';
$lang['proposal_expired']                       = 'Изтекли';
$lang['proposal_subject']                       = 'Тема';
$lang['proposal_total']                         = 'Общо';
$lang['proposal_status']                        = 'Статус';
$lang['proposals_list_all']                     = 'Всичко';
$lang['proposals_leads_related']                = 'Свързани Лийдове';
$lang['proposals_customers_related']            = 'Свързани с клиенти';
$lang['proposal_related']                       = 'Свързани';
$lang['proposal_for_lead']                      = 'Лийд';
$lang['proposal_for_customer']                  = 'Клиент';
$lang['proposal']                               = 'Предложение';
$lang['proposal_lowercase']                     = 'предложение';
$lang['proposals']                              = 'Предложения';
$lang['proposals_lowercase']                    = 'предложения';
$lang['new_proposal']                           = 'Ново предложение';
$lang['proposal_currency']                      = 'Валута';
$lang['proposal_allow_comments']                = 'Разрeши коментари';
$lang['proposal_allow_comments_help']           = 'Ако изберете тази опция, коментарите ще бъдат разрешени, когато клиентът ви прегледа предложението.';
$lang['proposal_edit']                          = 'Промени';
$lang['proposal_pdf']                           = 'PDF';
$lang['proposal_send_to_email']                 = 'Изпрати по E-mail';
$lang['proposal_send_to_email_title']           = 'Изпрати по E-mail';
$lang['proposal_attach_pdf']                    = 'Добави PDF';
$lang['proposal_preview_template']              = 'Прегледай шаблон';
$lang['proposal_view']                          = 'Виж предложението';
$lang['proposal_copy']                          = 'Копирай';
$lang['proposal_delete']                        = 'Изтрий';
$lang['proposal_to']                            = 'До';
$lang['proposal_add_comment']                   = 'Добави коментар';
$lang['proposal_sent_to_email_success']         = 'Предложението беше изпратено по Е-mail успешно';
$lang['proposal_sent_to_email_fail']            = 'Провалено изпращане на предложение по Е-mail';
$lang['proposal_copy_fail']                     = 'Провалено копиране на предложение';
$lang['proposal_copy_success']                  = 'Предложението е копирано успешно';
$lang['proposal_status_changed_success']        = 'Статуса на предложението е променен успешно';
$lang['proposal_status_changed_fail']           = 'Провалена промяна на статус на предложението';
$lang['proposal_assigned']                      = 'Зададен на';
$lang['proposal_comments']                      = 'Коментари';
$lang['proposal_convert']                       = 'Конвертирай';
$lang['proposal_convert_estimate']              = 'Оферта';
$lang['proposal_convert_invoice']               = 'Фактура';
$lang['proposal_convert_to_estimate']           = 'Конвертирай в Оферта';
$lang['proposal_convert_to_invoice']            = 'Конвертирай във Фактура';
$lang['proposal_convert_to_lead_disabled_help'] = 'Трябва да конвертирате Лийд до клиент, за да създадете %s';
$lang['proposal_convert_not_related_help']      = 'Предложението трябва да бъде свързано с клиент, за да се превърне в %s';
$lang['proposal_converted_to_estimate_success'] = 'Предложението е конвертирано в Оферта успешно';
$lang['proposal_converted_to_invoice_success']  = 'Предложението е конвертирано във фактура успешно';
$lang['proposal_converted_to_estimate_fail']    = 'Предложението не е конвертирано в Оферта успешно';
$lang['proposal_converted_to_invoice_fail']     = 'Предложението не е конвертирано във фактура успешно';

# Proposals - view proposal template
$lang['proposal_total_info']   = 'Общо %s';
$lang['proposal_accept_info']  = 'Приеми';
$lang['proposal_decline_info'] = 'Откажи';
$lang['proposal_pdf_info']     = 'PDF';

# Customers Portal
$lang['customer_reset_action']            = 'Нулиране';
$lang['customer_reset_password_heading']  = 'Възстановете парола';
$lang['customer_forgot_password_heading'] = 'Забравена парола';
$lang['customer_forgot_password']         = 'Забравена парола?';
$lang['customer_reset_password']          = 'Парола';
$lang['customer_reset_password_repeat']   = 'Повторете паролата';
$lang['customer_forgot_password_email']   = 'E-mail Адрес';
$lang['customer_forgot_password_submit']  = 'Изпрати';
$lang['customer_ticket_subject']          = 'Тема';

# Email templates
$lang['email_template_proposals_fields_heading'] = 'Proposals';

# Tasks
$lang['add_task_attachments']  = 'Прикачен файл';
$lang['task_view_attachments'] = 'Прикачени файлове';
$lang['task_view_description'] = 'Описание';

# Customer Groups
$lang['customer_group_add_heading']      = 'Add New Customer Group';
$lang['customer_group_edit_heading']     = 'Edit Customer Group';
$lang['new_customer_group']              = 'New Customer Group';
$lang['customer_group_name']             = 'Name';
$lang['customer_groups']                 = 'Groups';
$lang['customer_group']                  = 'Customer Group';
$lang['customer_group_lowercase']        = 'customer group';
$lang['customer_have_invoices_by']       = 'Contains invoices by status %s';
$lang['customer_have_estimates_by']      = 'Contains estimates by status %s';
$lang['customer_have_contracts_by_type'] = 'Having contracts by type %s';

# Custom fields
$lang['custom_field_show_on_table']              = 'Show on table';
$lang['custom_field_show_on_client_portal']      = 'Show on client portal';
$lang['custom_field_show_on_client_portal_help'] = 'If this field is checked also will be shown in tables';
$lang['custom_field_visibility']                 = 'Visibility';

# Knowledge Base
$lang['view_articles_list']     = 'View Articles';
$lang['view_articles_list_all'] = 'All Articles';
$lang['als_all_articles']       = 'Articles';
$lang['als_kb_groups']          = 'Groups';

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
$lang['sender_blocked_successfully'] = 'Sender Blocked Successfully';
$lang['ticket_date_created']         = 'Създаден';

#KB
$lang['edit_kb_group'] = 'Edit group';

# Leads
$lang['edit_source'] = 'Промени източник';
$lang['edit_status'] = 'Промени статус';

# Contacts
$lang['contract_type_edit'] = 'Edit Contract Type';

# Reports
$lang['report_by_customer_groups'] = 'Total Value By Customer Groups';

#Utilities
$lang['ticket_pipe_log']      = 'Ticket Pipe Log';
$lang['ticket_pipe_name']     = 'От име';
$lang['ticket_pipe_email_to'] = 'До';
$lang['ticket_pipe_email']    = 'От E-mail';
$lang['ticket_pipe_subject']  = 'Тема';
$lang['ticket_pipe_message']  = 'Съобщение';
$lang['ticket_pipe_date']     = 'Дата';
$lang['ticket_pipe_status']   = 'Статус';

# Home
$lang['home_latest_activity']   = 'Последна активност';
$lang['home_my_tasks']          = 'Моите задачи';
$lang['home_latest_activity']   = 'Последна активност';
$lang['home_my_todo_items']     = 'Моите задължения';
$lang['home_widget_view_all']   = 'Виж всички';
$lang['home_stats_full_report'] = 'Пълен отчет';

# Validation
$lang['form_validation_required']    = 'The {field} field is required.';
$lang['form_validation_valid_email'] = 'The {field} field must contain a valid email address.';
$lang['form_validation_matches']     = 'The {field} field does not match the {param} field.';
$lang['form_validation_is_unique']   = 'The {field} field must contain a unique value.';

# Version 1.0.8
# Notifications & Leads/Estimates/Invoices Activity Log
$lang['not_event']                                    = 'Събития от календара днес - %s ...';
$lang['not_event_public']                             = 'Събитие, което започва днес - %s ...';
$lang['not_contract_expiry_reminder']                 = 'Contract expiry reminder - %s ...';
$lang['not_recurring_expense_cron_activity_heading']  = 'Recurring Expenses Cron Job Activity';
$lang['not_recurring_invoices_cron_activity_heading'] = 'Recurring Invoices Cron Job Activity';
$lang['not_recurring_total_renewed']                  = 'Общо подновени: %s';
$lang['not_recurring_expenses_action_taken_from']     = 'Action taken from recurring expense';
$lang['not_invoice_created']                          = 'Фактурата е създадена:';
$lang['not_invoice_renewed']                          = 'Подновена фактура:';
$lang['not_expense_renewed']                          = 'Подновен разход:';
$lang['not_invoice_sent_to_customer']                 = 'Фактурата е изпратена на клиент: %s';
$lang['not_invoice_sent_yes']                         = 'Да';
$lang['not_invoice_sent_not']                         = 'Не';
$lang['not_action_taken_from_recurring_invoice']      = 'Action taken from recurring invoice:';
$lang['not_new_reminder_for']                         = 'Ново напомняне за %s';
$lang['not_received_one_or_more_messages_lead']       = 'Received one more email message from lead';
$lang['not_received_lead_imported_email_integration'] = 'Lead Imported From Email Integration';
$lang['not_lead_imported_attachment']                 = 'Imported attachment from email';
$lang['not_estimate_status_change']                   = 'Imported attachment from email';
$lang['not_estimate_status_updated']                  = 'Estimate Status Updated: From: %s to %s';
$lang['not_assigned_lead_to_you']                                 = 'възложен лийд %s на вас';
$lang['not_lead_activity_assigned_to']                            = '%s възложена на %s';
$lang['not_lead_activity_attachment_deleted']                     = 'Изтрит файл';
$lang['not_lead_activity_status_updated']                         = '%s променен статус на лийд от %s на %s';
$lang['not_lead_activity_contacted']                              = '%s се свърза с лейд на %s';
$lang['not_lead_activity_created']                                = '%s създаде лийд';
$lang['not_lead_activity_marked_lost']                            = 'Маркиран като изгубен';
$lang['not_lead_activity_unmarked_lost']                          = 'Unmarked as lost';
$lang['not_lead_activity_marked_junk']                            = 'Marked as junk';
$lang['not_lead_activity_unmarked_junk']                          = 'Unmarked as junk';
$lang['not_lead_activity_added_attachment']                       = 'Added attachment';
$lang['not_lead_activity_converted_email']                        = 'Lead email changed. First lead email was: %s and added as customer with email %s';
$lang['not_lead_activity_converted']                              = '%s Converted this lead to customer';
$lang['not_liked_your_post']                                      = '%s liked your post %s ...';
$lang['not_commented_your_post']                                  = '%s commented on your post %s ...';
$lang['not_liked_your_comment']                                   = '%s liked your comment %s ...';
$lang['not_proposal_assigned_to_you']                             = 'Proposal assigned to you - %s ...';
$lang['not_proposal_comment_from_client']                         = 'New comment from customer on proposal %s ...';
$lang['not_proposal_proposal_accepted']                           = 'Proposal Accepted - %s';
$lang['not_proposal_proposal_declined']                           = 'Proposal Declined - %s';
$lang['not_task_added_you_as_follower']                           = 'added you as follower on task %s ...';
$lang['not_task_added_someone_as_follower']                       = 'added %s as follower on task %s ...';
$lang['not_task_added_himself_as_follower']                       = 'added himself as follower on task %s ...';
$lang['not_task_assigned_to_you']                                 = 'assigned a task to you %s ...';
$lang['not_task_assigned_someone']                                = 'assigned %s to task %s ...';
$lang['not_task_will_do_user']                                    = 'will do task %s ...';
$lang['not_task_new_attachment']                                  = 'New Attachment Added';
$lang['not_task_marked_as_complete']                              = 'marked task as complete %s';
$lang['not_task_unmarked_as_complete']                            = 'unmarked task as complete %s';
$lang['not_ticket_assigned_to_you']                               = 'Ticket assigned to you - %s ...';
$lang['not_ticket_reassigned_to_you']                             = 'Ticket reassigned to you - %s ...';
$lang['not_estimate_customer_accepted']                           = 'Congratulations! Client accepted estimate with number %s';
$lang['not_estimate_customer_declined']                           = 'Client declined estimate with number %s';
$lang['estimate_activity_converted']                              = 'converted this estimate to invoice.<br /> %s';
$lang['estimate_activity_created']                                = 'Created the estimate';
$lang['invoice_estimate_activity_removed_item']                   = 'removed item <b>%s</b>';
$lang['estimate_activity_number_changed']                         = 'Estimate number changed from %s to %s';
$lang['invoice_activity_number_changed']                          = 'Invoice number changed from %s to %s';
$lang['invoice_estimate_activity_updated_item_short_description'] = 'updated item short description from %s to %s';
$lang['invoice_estimate_activity_updated_item_long_description']  = 'updated item long description from <b>%s</b> to <b>%s</b>';
$lang['invoice_estimate_activity_updated_item_rate']              = 'updated item rate from %s to %s';
$lang['invoice_estimate_activity_updated_qty_item']               = 'updated quantity on item <b>%s</b> from %s to %s';
$lang['invoice_estimate_activity_added_item']                     = 'added new item <b>%s</b>';
$lang['invoice_estimate_activity_sent_to_client']                 = 'sent estimate to client';
$lang['estimate_activity_client_accepted_and_converted']          = 'Customer accepted this estimate. Estimate is converted to invoice with number %s';
$lang['estimate_activity_client_accepted']                        = 'Customer accepted this estimate';
$lang['estimate_activity_client_declined']                        = 'Client declined this estimate';
$lang['estimate_activity_marked']                                 = 'marked estimate as %s';
$lang['invoice_activity_status_updated']                          = 'Invoice status updated from %s to %s';
$lang['invoice_activity_created']                                 = 'created the invoice';
$lang['invoice_activity_from_expense']                            = 'converted to invoice from expense';
$lang['invoice_activity_recurring_created']                       = '[Recurring] Invoice created by CRON';
$lang['invoice_activity_recurring_from_expense_created']          = '[Invoice From Expense] Invoice created by CRON';
$lang['invoice_activity_sent_to_client_cron']                     = 'Invoice sent to customer by CRON';
$lang['invoice_activity_sent_to_client']                          = 'sent invoice to customer';
$lang['invoice_activity_marked_as_sent']                          = 'marked invoice as sent';
$lang['invoice_activity_payment_deleted']                         = 'deleted payment for the invoice. Payment #%s, total amount %s';
$lang['invoice_activity_payment_made_by_client']                  = 'Client made payment for the invoice from total <b>%s</b> - %s';
$lang['invoice_activity_payment_made_by_staff']                   = 'recorded payment from total <b>%s</b> - %s';
$lang['invoice_activity_added_attachment']                        = 'Added attachment';

# Navigation
$lang['top_search_placeholder'] = 'Търси...';

# Staff
$lang['staff_profile_inactive_account'] = 'This staff member account is inactive';

# Estimates
$lang['copy_estimate']                = 'Копирай оферта';
$lang['estimate_copied_successfully'] = 'Офертата е копирана успешно';
$lang['estimate_copied_fail']         = 'Провалено копиране на оферта';

# Tasks
$lang['tasks_view_assigned_to_user'] = 'Задачи поверени на мен';
$lang['tasks_view_follower_by_user'] = 'Задачите които следвам';
$lang['no_tasks_found']              = 'Няма намерени задачи';

# Leads
$lang['leads_dt_datecreated']       = 'Създадена';
$lang['leads_sort_by']              = 'Сортирай по';
$lang['leads_sort_by_datecreated']  = 'Дата на създаване';
$lang['leads_sort_by_kanban_order'] = 'Kan Ban Order';

# Authentication
$lang['check_email_for_resetting_password'] = 'Check your email for further instructions resetting your password';
$lang['inactive_account']                   = 'Inactive Account';
$lang['error_setting_new_password_key']     = 'Error setting new password';
$lang['password_reset_message']             = 'Your password has been reset. Please login now!';
$lang['password_reset_message_fail']        = 'Error resetting your password. Try again.';
$lang['password_reset_key_expired']         = 'Password key expired or invalid user';
$lang['auth_reset_pass_email_not_found']    = 'Email not found';
$lang['auth_reset_password_submit']         = 'Reset Password';

# Settings
$lang['settings_amount_to_words']          = 'Сума в думи';
$lang['settings_amount_to_words_desc']     = 'Изведете общата сума за думи във фактури/оферти';
$lang['settings_amount_to_words_enabled']  = 'Активирай';
$lang['settings_total_to_words_lowercase'] = 'Number words into lowercase';
$lang['settings_show_tax_per_item']        = 'Show TAX per item';

# Reports
$lang['report_sales_months_three_months'] = 'Последни 3 месеца';
$lang['report_invoice_number']            = 'Фактура #';
$lang['report_invoice_customer']          = 'Клиент';
$lang['report_invoice_date']              = 'Дата';
$lang['report_invoice_duedate']           = 'Крайна дата';
$lang['report_invoice_amount']            = 'Сума';
$lang['report_invoice_amount_with_tax']   = 'Сума с данък';
$lang['report_invoice_amount_open']       = 'Отворена сума';
$lang['report_invoice_status']            = 'Статус';

#Version 1.0.9

# Home stats
$lang['home_stats_by_project_status'] = 'Статистика по статус на проекти';
$lang['home_invoice_overview']        = 'Статистика фактури';
$lang['home_estimate_overview']       = 'Статистика оферти';
$lang['home_proposal_overview']       = 'Статистика предложения';
$lang['home_lead_overview']           = 'Статистика лийдове';
$lang['home_my_projects']             = 'Моите проекти';
$lang['home_announcements']           = 'Съобщения';

# Settings
$lang['settings_leads_kanban_limit']                                    = 'Limit leads kan ban rows per status';
$lang['settings_group_misc']                                            = 'Misc';
$lang['show_projects_on_calendar']                                      = 'Проекти';
$lang['settings_media_max_file_size_upload']                            = 'Max file size upload in Media (MB)';
$lang['settings_client_staff_add_edit_delete_task_comments_first_hour'] = 'Allow customer/staff to add/edit task comments only in the first hour (administrators not applied)';

# Email templates
$lang['email_template_only_domain_email'] = 'Only domain email';

# Announcements
$lang['dismiss_announcement']   = 'Скрий съобщение';
$lang['announcement_from']      = 'От:';
$lang['announcement_date']      = 'Дата на публикуване: %s';
$lang['announcement_not_found'] = 'Съобщението не е намерено';
$lang['announcements_recent']   = 'Последни съобщения';

# General
$lang['zip_invoices']         = 'Изтегли в Zip Фактури';
$lang['zip_estimates']        = 'Изтегли в Zip Оферти';
$lang['zip_payments']         = 'Изтегли в Zip Плащания';
$lang['setup_help']           = 'Помощ';
$lang['clients_list_company'] = 'Фирма';
$lang['dt_button_export']     = 'Експорт';
$lang['dt_entries']           = 'записи';
$lang['invoice_total_paid']   = 'Общо платено';
$lang['invoice_amount_due']   = 'Сума за плащане';

# Calendar
$lang['calendar_project'] = 'Проект';

# Leads
$lang['leads_import_assignee']     = 'Отговорник (Възложено на)';
$lang['customer_from_lead']        = 'Клиент от %s';
$lang['lead_kan_ban_attachments']  = 'Файлове: %s';
$lang['leads_sort_by_lastcontact'] = 'Последен контакт';

# Tasks
$lang['task_comment_added']     = 'Добавен коментар';
$lang['task_duedate']           = 'Крайна дата';
$lang['task_view_comments']     = 'Коментари';
$lang['task_comment_updated']   = 'Коментара е актуализиран';
$lang['task_visible_to_client'] = 'Видим за клиент';
$lang['task_hourly_rate']       = 'Часова ставка';
$lang['hours']                  = 'Часове';
$lang['seconds']                = 'Секунди';
$lang['minutes']                = 'Минути';
$lang['task_start_timer']       = 'Старт на таймер';
$lang['task_stop_timer']        = 'Спри таймер';
$lang['task_billable']          = 'Платежен';
$lang['task_billable_yes']      = 'Платежен';
$lang['task_billable_no']       = 'Не платим';
$lang['task_billed']            = 'Платен';
$lang['task_billed_yes']        = 'Платен';
$lang['task_billed_no']         = 'Не платим';
$lang['task_user_logged_time']  = 'Вашето общо време:';
$lang['task_total_logged_time'] = 'Вашето общо време по задача:';
$lang['task_is_billed']         = 'Тази задача е платена на фактура %s';
$lang['task_statistics']        = 'Статистики';
$lang['task_milestone']         = 'Етапи';

# Tickets
$lang['ticket_message_updated_successfully'] = 'Message updated successfully';

# Invoices
$lang['invoice_task_item_project_tasks_not_included'] = 'Проектите не са включени в този списък.';
$lang['show_quantity_as']                             = 'Покажете количеството като:';
$lang['quantity_as_qty']                              = 'Колич.';
$lang['quantity_as_hours']                            = 'Час';
$lang['invoice_table_hours_heading']                  = 'Часове';
$lang['bill_tasks']                                   = 'Калкулирай задачи';
$lang['invoice_estimate_sent_to_email']               = 'E-mail до';

# Estimates
$lang['estimate_table_hours_heading'] = 'Часове';

# General
$lang['is_customer_indicator']         = 'Клиент';
$lang['print']                         = 'Принтирай';
$lang['customer_permission_projects']  = 'Проекти';
$lang['no_timers_found']               = 'Няма стартирани таймери';
$lang['timers_started_confirm_logout'] = 'Started tasks timers found!<br />Are you sure you want to logout without stopping the timers?';
$lang['confirm_logout']                = 'Излез';
$lang['timer_top_started']             = 'Стартиран в %s';

# Projects
$lang['cant_change_billing_type_billed_tasks_found']         = 'Не можете да променяте вида на фактурирането. Вече са намерени Фактурирани задачи за този проект.';
$lang['project_customer_permission_warning']                 = 'Системата посочва, че основният контакт няма разрешение за проекти. Основният контакт няма да може да види проекта. Consider add permission in the contact profile.';
$lang['project_invoice_timesheet_start_time']                = 'Начално време: %s';
$lang['project_invoice_timesheet_end_time']                  = 'Крайно време: %s';
$lang['project_invoice_timesheet_total_logged_time']         = 'Прекарано овреме: %s';
$lang['project_view_as_client']                              = 'Виж проекта като клиент';
$lang['project_mark_all_tasks_as_completed']                 = 'Маркирайте всички задачи като завършени и спрете всички таймери (Няма изпратени съобщения до членовете на проекта)';
$lang['project_not_started_status_tasks_timers_found']       = 'Намерени са таймерит за задачите по този проект, но проектът е със статус Не е започнат. Препоръчително е да промените статуса на проекта В Прогрес';
$lang['project_status']                                      = 'Статус';
$lang['project_status_1']                                    = 'Не е започнат';
$lang['project_status_2']                                    = 'В прогрес';
$lang['project_status_3']                                    = 'На изчакване';
$lang['project_status_4']                                    = 'Приключен';
$lang['project_file_dateadded']                              = 'Дата на качване';
$lang['project_file_filename']                               = 'Име на файл';
$lang['project_file__filetype']                              = 'Тип на файл';
$lang['project_file_visible_to_customer']                    = 'Видим за клиент';
$lang['project_file_uploaded_by']                            = 'Качен от';
$lang['edit_project']                                        = 'Промени проект';
$lang['copy_project']                                        = 'Копирай проект';
$lang['delete_project']                                      = 'Изтрий проект';
$lang['project_task_assigned_to_user']                       = 'Задачи назначени към Теб';
$lang['seconds']                                             = 'Секунди';
$lang['hours']                                               = 'Часове';
$lang['minutes']                                             = 'Минути';
$lang['project']                                             = 'Проект';
$lang['project_lowercase']                                   = 'проект';
$lang['projects']                                            = 'Проекти';
$lang['projects_lowercase']                                  = 'проекти';
$lang['project_settings']                                    = 'Настройки на проект';
$lang['project_invoiced_successfully']                       = 'Проекта е фактуриран успешно';
$lang['new_project']                                         = 'Нов проект';
$lang['project_files']                                       = 'Файлове';
$lang['project_activity']                                    = 'Активност';
$lang['project_name']                                        = 'Име на проект';
$lang['project_description']                                 = 'Описание';
$lang['project_customer']                                    = 'Клиент';
$lang['project_start_date']                                  = 'Начална дата';
$lang['project_datecreated']                                 = 'Дата на създаване';
$lang['project_deadline']                                    = 'Краен срок';
$lang['project_billing_type']                                = 'Метод на фактуриране';
$lang['project_billing_type_fixed_cost']                     = 'Фиксирана цена';
$lang['project_billing_type_project_hours']                  = 'Часов за проекта';
$lang['project_billing_type_project_task_hours']             = 'Време по задачата';
$lang['project_billing_type_project_task_hours_hourly_rate'] = 'Въз основа на почасова ставка на задачата';
$lang['project_rate_per_hour']                               = 'Оцени на час';
$lang['project_total_cost']                                  = 'Обща цена';
$lang['project_members']                                     = 'Отговорници';
$lang['project_member_removed']                              = 'Членът на проекта е премахнат успешно';
$lang['project_overview']                                    = 'Общо за Проекта';
$lang['project_gant']                                        = 'Виж календар';
$lang['project_milestones']                                  = 'Етапи';
$lang['project_milestone_order']                             = 'Order';
$lang['project_milestone_duedate_passed']                    = 'Крайна дата прескочена';
$lang['record_timesheet']                                    = 'График';
$lang['new_milestone']                                       = 'Нов етап';
$lang['edit_milestone']                                      = 'Промени етап';
$lang['milestone_name']                                      = 'Име';
$lang['milestone_due_date']                                  = 'Крайна дата';
$lang['project_milestone']                                   = 'Етап';
$lang['project_notes']                                       = 'Бележки';
$lang['project_timesheets']                                  = 'Графици';
$lang['project_timesheet']                                   = 'График';
$lang['milestone_total_logged_time']                         = 'Регистрирано време';
$lang['project_overview_total_logged_hours']                 = 'Общо регистрирни часове';
$lang['milestones_uncategorized']                            = 'Некатегоризирани';
$lang['milestone_no_tasks_found']                            = 'Няма намерени задачи';
$lang['project_copied_successfully']                         = 'Данните от проекта са копирани успешно';
$lang['failed_to_copy_project']                              = 'Неуспешно копиране на проекта';
$lang['copy_project_task_include_check_list_items']          = 'Копиране на елементи от контролен списък';
$lang['copy_project_task_include_assignees']                 = 'Copy the same assignees';
$lang['copy_project_task_include_followers']                 = 'Copy the same followers';
$lang['project_days_left']                                   = 'Оставащи дни';
$lang['project_open_tasks']                                  = 'Отворени задачи';
$lang['timesheet_stop_timer']                                = 'Спри таймер';
$lang['failed_to_add_project_timesheet_end_time_smaller']    = 'Неуспешно добавяне на график. Крайното време е по-малко от началното време';
$lang['project_timesheet_user']                              = 'Член';
$lang['project_timesheet_start_time']                        = 'Начален час';
$lang['project_timesheet_end_time']                          = 'Краен час';
$lang['project_timesheet_time_spend']                        = 'Прекарано време';
$lang['project_timesheet_task']                              = 'Задача';
$lang['project_invoices']                                    = 'Плащания';
$lang['total_logged_hours_by_staff']                         = 'Общо прекарано време';
$lang['invoice_project']                                     = 'Фактурирай проекта';
$lang['invoice_project_info']                                = 'Информация за фактурата на проекта';
$lang['invoice_project_data_single_line']                    = 'Единична линия';
$lang['invoice_project_data_task_per_item']                  = 'Задача за всеки елемент';
$lang['invoice_project_data_timesheets_individually']        = 'Всички графици поотделно';
$lang['invoice_project_item_name_data']                      = 'Име на продукта';
$lang['invoice_project_description_data']                    = 'Описание';
$lang['invoice_project_projectname_taskname']                = 'Име на проекта + Име на задачата';
$lang['invoice_project_all_tasks_total_logged_time']         = 'Всички задачи + общо регистрирано време на задача';
$lang['invoice_project_project_name_data']                   = 'Име на проект';
$lang['invoice_project_timesheet_individually_data']         = 'Начално време на график + краен час + общо регистрирано време';
$lang['invoice_project_total_logged_time_data']              = 'Общо регистрирано време';
$lang['project_allow_client_to']                             = 'Разреши на клиента да %s';
$lang['project_setting_view_task_attachments']               = 'преглед на прикачени файлове към задача';
$lang['project_setting_view_task_checklist_items']           = 'виж задачите от чеклиста';
$lang['project_setting_upload_files']                        = 'качи файлове';
$lang['project_setting_view_task_comments']                  = 'виж коментарите по задачата';
$lang['project_setting_upload_on_tasks']                     = 'качи файлове към задачата';
$lang['project_setting_view_task_total_logged_time']         = 'виж общо регистрирано време по задачата';
$lang['project_setting_open_discussions']                    = 'отворени дискусии';
$lang['project_setting_comment_on_tasks']                    = 'коментари по задачите от проекта';
$lang['project_setting_view_tasks']                          = 'виж задачи';
$lang['project_setting_view_milestones']                     = 'виж етапи';
$lang['project_setting_view_gantt']                          = 'виж календар';
$lang['project_setting_view_timesheets']                     = 'виж графици';
$lang['project_setting_view_activity_log']                   = 'виж дневник на дейности';
$lang['project_setting_view_team_members']                   = 'вижте членовете на екипа';
$lang['project_discussion_visible_to_customer_yes']          = 'Видимо';
$lang['project_discussion_visible_to_customer_no']           = 'Не се вижда';
$lang['project_discussion_posted_on']                        = 'Публикувано на %s';
$lang['project_discussion_posted_by']                        = 'Публикувано от %s';
$lang['project_discussion_failed_to_delete']                 = 'Неуспешно изтриване на дискусия';
$lang['project_discussion_deleted']                          = 'Дискусията бе изтрита успешно';
$lang['project_discussion_no_activity']                      = 'Няма активност';
$lang['project_discussion']                                  = 'Дискусия';
$lang['project_discussions']                                 = 'Дискусии';
$lang['edit_discussion']                                     = 'Промени дискусия';
$lang['new_project_discussion']                              = 'нова дискусия';
$lang['project_discussion_subject']                          = 'Тема';
$lang['project_discussion_description']                      = 'Описание';
$lang['project_discussion_show_to_customer']                 = 'Видима за клиент';
$lang['project_discussion_total_comments']                   = 'Общо коментари';
$lang['project_discussion_last_activity']                    = 'Последна активност';
$lang['discussion_add_comment']                              = 'Добави коментар';
$lang['discussion_newest']                                   = 'Най-новите';
$lang['discussion_oldest']                                   = 'Най-старите';
$lang['discussion_attachments']                              = 'Файлове';
$lang['discussion_send']                                     = 'Изпрати';
$lang['discussion_reply']                                    = 'Отговори';
$lang['discussion_edit']                                     = 'Промни';
$lang['discussion_edited']                                   = 'Променено';
$lang['discussion_you']                                      = 'Вие';
$lang['discussion_save']                                     = 'Съхрани';
$lang['discussion_delete']                                   = 'Изтрий';
$lang['discussion_view_all_replies']                         = 'Покажи всички отговори';
$lang['discussion_hide_replies']                             = 'Скрий отговори';
$lang['discussion_no_comments']                              = 'Няма коментари';
$lang['discussion_no_attachments']                           = 'Няма файлове';
$lang['discussion_attachments_drop']                         = 'Плъзнете и пуснете, за да качите файл';
$lang['project_note']                                        = 'Бележка';
$lang['project_note_private']                                = 'Лични бележки';
$lang['project_save_note']                                   = 'Съхрани бележка';

# Project Activity
$lang['project_activity_created']                      = 'Проектът е създаден ';
$lang['project_activity_updated']                      = 'Проектът е актуализиран';
$lang['project_activity_removed_team_member']          = 'Изтрит е член на екипа';
$lang['project_activity_added_team_member']            = 'Добавен е нов член на екипа';
$lang['project_activity_marked_all_tasks_as_complete'] = 'Всички задачи са маркирани като завършени';
$lang['project_activity_recorded_timesheet']           = 'Записан график';
$lang['project_activity_task_name']                    = 'Задача:';
$lang['project_activity_deleted_discussion']           = 'Изтрита дискусия';
$lang['project_activity_created_discussion']           = 'Създадена дискусия';
$lang['project_activity_updated_discussion']           = 'Актуализирана дискусия';
$lang['project_activity_commented_on_discussion']      = 'Коментар по дискусията';
$lang['project_activity_deleted_discussion_comment']   = 'Изтрит коментар по дискусия';
$lang['project_activity_deleted_milestone']            = 'Изтрит етап';
$lang['project_activity_updated_milestone']            = 'Актуализиран етап';
$lang['project_activity_created_milestone']            = 'Създаден е нов етап';
$lang['project_activity_invoiced_project']             = 'Фактуриран проект';
$lang['project_activity_task_marked_complete']         = 'Задачата е маркирана като завършена';
$lang['project_activity_task_unmarked_complete']       = 'Задачата е отмаркирана като завършена';
$lang['project_activity_task_deleted']                 = 'Задачата е изтрита';
$lang['project_activity_new_task_comment']             = 'Коментар по задачата';
$lang['project_activity_new_task_attachment']          = 'Качен е прикачен файл по задача';
$lang['project_activity_new_task_assignee']            = 'Добавен нов изпълнител към задачата';
$lang['project_activity_task_assignee_removed']        = 'Премахнат е изпълнител към задачата';
$lang['project_activity_task_timesheet_deleted']       = 'Изтрит график';
$lang['project_activity_uploaded_file']                = 'Качен файл по проекта';
$lang['project_activity_status_updated']               = 'Актуализирано състояние на проекта';
$lang['project_activity_visible_to_customer']          = 'Видимо за клиент';
$lang['project_activity_project_file_removed']         = 'Изтрит файл по проект';

# Customers area
$lang['clients_my_estimates']                                  = 'Оферти';
$lang['client_no_reply']                                       = 'No Reply';
$lang['clients_nav_projects']                                  = 'Проекти';
$lang['clients_my_projects']                                   = 'Проекти';
$lang['client_profile_image']                                  = 'Снимка на профила';
$lang['sales_report_cancelled_invoices_not_included']          = 'Cancelled invoices are excluded from the report';
$lang['invoices_merge_cancel_merged_invoices']                 = 'Mark merged invoices as cancelled instead of deleting';
$lang['invoice_marked_as_cancelled_successfully']              = 'Invoice marked as cancelled successfully';
$lang['invoice_unmarked_as_cancelled']                         = 'Invoice unmarked as cancelled successfully';
$lang['tasks_reminder_notification_before']                    = 'Task deadline reminder before (Days)';
$lang['not_task_deadline_reminder']                            = 'Task deadline reminder';
$lang['dt_length_menu_all']                                    = 'All';
$lang['task_not_finished']                                     = 'Not Completed';
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
$lang['task_start_timer_only_assignee']                        = 'You need to be assigned on this task to start timer!';
$lang['task_comments']                                         = 'Коментари';
$lang['invoice_total_tax']                                     = 'Общо ДДС';
$lang['estimates_total_tax']                                   = 'Общо ДДС';
$lang['report_invoice_total_tax']                              = 'Общо ДДС';
$lang['home_tickets']                                          = 'Билети';
$lang['home_project_activity']                                 = 'Последна Активност по Проекти';
$lang['view_tracking']                                         = 'Views Tracking';
$lang['view_date']                                             = 'Дата';
$lang['view_ip']                                               = 'IP Address';
$lang['article_total_views']                                   = 'Общо показвания';
$lang['leads_source']                                          = 'Източник';
$lang['invoices_available_for_merging']                        = 'Фактури налични за сливане';
$lang['invoices_merge_discount']                               = 'You will have to apply discount of total %s manually to this invoice';
$lang['invoice_merge_number_warning']                          = 'Merging invoices will create gaps in invoice numbers. Please do not merge invoices if you want no gaps in your invoice history. You also have the option of manually adjusting invoice numbers if you want to fill the gaps.';
$lang['invoice_mark_as']                                       = 'Маркирай като %s';
$lang['invoice_unmark_as']                                     = 'Отаркирай като %s';
$lang['invoice_status_cancelled']                              = 'Отказана';
$lang['tasks_reminder_notification_before_help']               = 'Notify task assignees about deadline before X days. The notification/email is sent only to the assignees. If the difference between task start date and task due date is smaller then the reminders day no notification will be sent.';

# Version 1.1.0
$lang['project_invoice_select_all_tasks'] = 'Избери всички задачи';
$lang['lead_company']                     = 'Фирма';

# Version 1.1.1
$lang['admin_auth_forgot_password_button']       = 'Потвърди';
$lang['task_assigned']                           = 'Зададен на';
$lang['switch_to_pipeline']                      = 'Превключи на pipeline';
$lang['switch_to_list_view']                     = 'Превключи на лист';
$lang['estimates_pipeline']                      = 'Estimates Pipeline';
$lang['estimates_pipeline_sort']                 = 'Сортирай по';
$lang['estimates_sort_expiry_date']              = 'Крайна дата';
$lang['estimates_sort_pipeline']                 = 'Pipeline Order';
$lang['estimates_sort_datecreated']              = 'Дата на създаване';
$lang['estimates_sort_estimate_date']            = 'Прогнозна дата';
$lang['estimate_set_reminder_title']             = 'Set Estimate Reminder';
$lang['invoice_set_reminder_title']              = 'Set Invoice Reminder';
$lang['estimate_reminders']                      = 'Напомняния';
$lang['invoice_reminders']                       = 'Напомняния';
$lang['estimate_notes']                          = 'Бележки';
$lang['estimate_add_note']                       = 'Добави бележка';
$lang['dropdown_non_selected_tex']               = 'Нищо не е избрано';
$lang['auto_close_ticket_after']                 = 'Auto close ticket after (Hours)';
$lang['event_description']                       = 'Описание';
$lang['delete_event']                            = 'Изтрии';
$lang['not_new_ticket_created']                  = 'New ticket opened in your department - %s';
$lang['receive_notification_on_new_ticket']      = 'Receive notification on new ticket opened';
$lang['receive_notification_on_new_ticket_help'] = 'All staff members which belong to the ticket department will receive notification that new ticket is opened';
$lang['event_updated']                           = 'Event updated successfully';
$lang['customer_contacts']                       = 'Контакти';
$lang['new_contact']                             = 'Нов контакт';
$lang['contact']                                 = 'Контакт';
$lang['contact_lowercase']                       = 'контакт';
$lang['contact_primary']                         = 'Главен контакт';
$lang['contact_position']                        = 'Позиция';
$lang['contact_active']                          = 'Активен';
$lang['client_company_info']                     = 'Инфо за фирма';
$lang['proposal_save']                           = 'Запази предложение';
$lang['calendar']                                = 'Календар';
$lang['settings_pdf']                            = 'PDF';
$lang['settings_pdf_font']                       = 'PDF Font';
$lang['settings_pdf_table_heading_color']        = 'Items table heading color';
$lang['settings_pdf_table_heading_text_color']   = 'Items table heading text color';
$lang['settings_pdf_font_size']                  = 'Default font size';
$lang['proposal_status_draft']                   = 'Чернови';
$lang['custom_field_contacts']                   = 'Контакти';
$lang['company_primary_email']                   = 'Primary Email';
$lang['client_register_contact_info']            = 'Primary Contact Information';
$lang['client_register_company_info']            = 'Company Information';
$lang['contact_permissions_info']                = 'Make sure to set appropriate permissions for this contact';
$lang['default_leads_kanban_sort']               = 'Default leads kan ban sort';
$lang['default_leads_kanban_sort_type']          = 'Sort';
$lang['order_ascending']                         = 'Ascending';
$lang['order_descending']                        = 'Descending';
$lang['calendar_expand']                         = 'уголеми';
$lang['proposal_reminders']                      = 'Напомняние';
$lang['proposal_set_reminder_title']             = 'Set Proposal Reminder';
$lang['settings_allowed_upload_file_types']      = 'Allowed file types';
$lang['no_primary_contact']                      = 'This customer does have primary contact. You need to setup primary contact login as customer. Its recommended all customers to have primary contacts.';
$lang['leads_merge_customer']                    = 'Customer fields merging';
$lang['leads_merge_contact']                     = 'Contact fields merging';
$lang['leads_merge_as_contact_field']            = 'Merge as contact field';
$lang['lead_convert_to_client_phone']            = 'Phone';
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
$lang['calendar_expand']                         = 'Уголеми';
$lang['view_pdf']                                = 'View PDF';
$lang['expense_repeat_every']                    = 'Repeat every';

# Version 1.1.2
$lang['leads_switch_to_kanban']                   = 'Превключи на kan ban';
$lang['contract_content']                         = 'Contract';
$lang['contract_save']                            = 'Save Contract';
$lang['contract_send_to_email']                   = 'Send to email';
$lang['contract_send_to_client_modal_heading']    = 'Send contract to email';
$lang['contract_send_to']                         = 'Send to';
$lang['contract_send_to_client_attach_pdf']       = 'Attach PDF';
$lang['contract_send_to_client_preview_template'] = 'Preview Email Template';
$lang['include_attachments_to_email']             = 'Include attachments to email';
$lang['contract_sent_to_client_success']          = 'The contract is successfully sent to the customer';
$lang['contract_sent_to_client_fail']             = 'Failed to send contract';

# Version 1.1.3
$lang['client_invalid_username_or_password'] = 'Invalid username or password';
$lang['client_old_password_incorrect']       = 'Your old password is incorrect';
$lang['client_password_changed']             = 'Your password has been changed';

# Version 1.1.4
$lang['total_leads_deleted']                              = 'Total leads deleted: %s';
$lang['total_clients_deleted']                            = 'Total customers deleted: %s';
$lang['confirm_action_prompt']                            = 'Are you sure you want to perform this action?';
$lang['mass_delete']                                      = 'Mass Delete';
$lang['email_protocol']                                   = 'Email Protocol';
$lang['add_edit_members']                                 = 'Add/Edit Members';
$lang['project_overview_logged_hours']                    = 'Logged Hours:';
$lang['project_overview_billable_hours']                  = 'Billable Hours:';
$lang['project_overview_billed_hours']                    = 'Billed Hours:';
$lang['project_overview_unbilled_hours']                  = 'Unbilled Hours:';
$lang['calendar_first_day']                               = 'First Day';
$lang['permission_view']                                  = 'View';
$lang['permission_edit']                                  = 'Edit';
$lang['permission_create']                                = 'Create';
$lang['permission_delete']                                = 'Delete';
$lang['permission']                                       = 'Permission';
$lang['permissions']                                      = 'Permissions';
$lang['proposals_pipeline']                               = 'Предложения Pipeline';
$lang['proposals_pipeline_sort']                          = 'Sort By';
$lang['proposals_sort_open_till']                         = 'Open Till';
$lang['proposals_sort_pipeline']                          = 'Pipeline Order';
$lang['proposals_sort_datecreated']                       = 'Date Created';
$lang['proposals_sort_proposal_date']                     = 'Proposal Date';
$lang['is_not_staff_member']                              = 'Not Staff Member';
$lang['lead_created']                                     = 'Created';
$lang['access_tickets_to_none_staff_members']             = 'Allow access to tickets for non staff members';
$lang['project_expenses']                                 = 'Разходи';
$lang['expense_currency']                                 = 'Валута';
$lang['currency_valid_code_help']                         = 'Make sure to enter valid currency ISO code.';
$lang['week']                                             = 'Седмица';
$lang['weeks']                                            = 'Седмици';
$lang['month']                                            = 'Месец';
$lang['months']                                           = 'Месеци';
$lang['year']                                             = 'Година';
$lang['years']                                            = 'Години';
$lang['expense_report_category']                          = 'Категория';
$lang['expense_paid_via']                                 = 'Платен през %s';
$lang['item_as_expense']                                  = '[Разход]';
$lang['show_help_on_setup_menu']                          = 'Show help menu item on setup menu';
$lang['customers_summary_total']                          = 'Общо клиенти';
$lang['filter_by']                                        = 'Филтрирай по';
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
$lang['show_proposals_on_calendar']                       = 'Предложения';
$lang['invoice_project_see_billed_expenses']              = 'See expenses that will be billed on this invoice';
$lang['project_overview_expenses']                        = 'Общо разходи';
$lang['project_overview_expenses_billable']               = 'Платими разходи';
$lang['project_overview_expenses_billed']                 = 'Платени разходи';
$lang['project_overview_expenses_unbilled']               = 'Неплатими разходи';
$lang['announcement_date_list']                           = 'Дата';
$lang['project_setting_view_finance_overview']            = 'Виж финансов резултат';
$lang['show_all_tasks_for_project_member']                = 'Allow all staff to see all tasks related to projects (includes non-staff)';
$lang['not_staff_added_as_project_member']                = 'Added you as project member';
$lang['report_expenses_base_currency_select_explanation'] = 'You need to select currency because the system found different currencies used for expenses.';

# Version 1.1.6
$lang['project_activity_recorded_expense']   = 'Записан разход';
$lang['save_customer_and_add_contact']       = 'Save and create contact';
$lang['tickets_chart_weekly_opening_stats']  = 'Weekly Stats';
$lang['related_knowledgebase_articles']      = 'Related Articles';
$lang['detailed_overview']                   = 'Общ Преглед';
$lang['tasks_total_checklists_finished']     = 'Total checklist items marked as finished';
$lang['tasks_total_added_attachments']       = 'Общо файлове';
$lang['tasks_total_comments']                = 'Общо коментари';
$lang['task_finished_on_time']               = 'Приключени навреме?';
$lang['task_finished_on_time_indicator']     = 'Да';
$lang['task_not_finished_on_time_indicator'] = 'Не';
$lang['filter']                              = 'Филтър';
$lang['task_filter_detailed_all_months']     = 'Всички месеци';
$lang['kb_article_slug']                     = 'Slug';

# Version 1.1.7
$lang['email_template_ticket_warning']          = 'If ticket is imported with email piping and the contact does not exists in the CRM the fields won\'t be replaced.';
$lang['auto_stop_tasks_timers_on_new_timer']    = 'Stop all other started timers when starting new timer';
$lang['notification_when_customer_pay_invoice'] = 'Receive notification when customer pay invoice (built-in)';
$lang['not_invoice_payment_recorded']           = 'New invoice payment - %s';
$lang['email_template_contact_warning']         = 'If contact is not logged while making action the contact merge fields won\'t be replaced.';
$lang['change_role_permission_warning']         = 'Changing role permissions won\'t affected current staff members permissions that are using this role.';
$lang['task_copied_successfully']               = 'Task copied successfully';
$lang['failed_to_copy_task']                    = 'Failed to copy task';
$lang['not_project_file_uploaded']              = 'New project file added';
$lang['settings_calendar_color']                = '%s Color';
$lang['settings_calendar_colors_heading']       = 'Styling';
$lang['reminder']                               = 'Reminder';
$lang['back_to_tasks_list']                     = 'Back to tasks list';
$lang['copy_task_confirm']                      = 'Confirm';
$lang['changing_items_affect_warning']          = 'Changing item info won\'t affect on the created invoices/estimates/proposals/credit notes.';
$lang['tax_is_used_in_expenses_warning']        = 'You can\'t update this tax because the tax is used by expenses transactions.';
$lang['note']                                   = 'Note';
$lang['leads_staff_report_converted']           = 'Total converted leads';
$lang['leads_staff_report_created']             = 'Total created leads';
$lang['leads_staff_report_lost']                = 'Total lost leads';
$lang['client_go_to_dashboard']                 = 'Back to portal';
$lang['show_estimate_reminders_on_calendar']    = 'Estimate Reminders';
$lang['show_invoice_reminders_on_calendar']     = 'Invoice Reminders';
$lang['show_proposal_reminders_on_calendar']    = 'Proposal Reminders';
$lang['calendar_estimate_reminder']             = 'Estimate Reminder';
$lang['calendar_invoice_reminder']              = 'Invoice Reminder';
$lang['calendar_proposal_reminder']             = 'Proposal Reminder';
$lang['proposal_due_after']                     = 'Proposal Due After (days)';
$lang['project_progress']                       = 'Прогрес';
$lang['calculate_progress_through_tasks']       = 'Calculate progress through tasks';
$lang['allow_customer_to_change_ticket_status'] = 'Allow customer to change ticket status from customers area';
$lang['switch_to_general_report']               = 'Switch to staff report';
$lang['switch_to_staff_report']                 = 'Switch to general report';
$lang['generate']                               = 'Generate';
$lang['from_date']                              = 'From date';
$lang['to_date']                                = 'To date';
$lang['not_results_found']                      = 'No results found';
$lang['lead_lock_after_convert_to_customer']    = 'Do not allow leads to be edited after they are converted to customers (administrators not applied)';
$lang['default_pipeline_sort']                  = 'Default pipeline sort';
$lang['toggle_full_view']             = 'Toggle full view';
$lang['not_estimate_invoice_deleted'] = 'deleted the created invoice';
$lang['not_task_new_comment']         = 'commented on task %s';

# Version 1.1.8
$lang['invoice_number_exists']                  = 'This invoice number exists for the ongoing year.';
$lang['estimate_number_exists']                 = 'This estimate number exists for the ongoing year.';
$lang['email_exists']                           = 'Email already exists';
$lang['not_uploaded_project_file']              = 'New file uploaded';
$lang['not_created_new_project_discussion']     = 'New project discussion created';
$lang['not_commented_on_project_discussion']    = 'New comment on project discussion';
$lang['all_staff_members']                      = 'Всички служители';
$lang['help_project_permissions']               = 'VIEW allows staff member to see ALL projects. If you only want them to see projects they are assigned (added as members), do not give VIEW permissions.';
$lang['help_tasks_permissions']                 = 'VIEW allows staff member to see ALL tasks. If you only want them to see tasks they are assigned to or following, do not give VIEW permissions.';
$lang['expense_recurring_days']                 = 'Day(s)';
$lang['expense_recurring_weeks']                = 'Week(s)';
$lang['expense_recurring_months']               = 'Month(s)';
$lang['expense_recurring_years']                = 'Years(s)';
$lang['reset_to_default_color']                 = 'Reset to default color';
$lang['pdf_logo_width']                         = 'Logo Width (PX)';
$lang['drop_files_here_to_upload']              = 'Сложете файловете тук за добавяне';
$lang['browser_not_support_drag_and_drop']      = 'Your browser does not support drag\'n\'drop file uploads';
$lang['remove_file']                            = 'Remove file';
$lang['you_can_not_upload_any_more_files']      = 'You can not upload any more files';
$lang['custom_field_only_admin']                = 'Restrict visibility for administrators only';
$lang['leads_default_source']                   = 'Default source';
$lang['clear_activity_log']                     = 'Clear log';
$lang['default_contact_permissions']            = 'Default contact permissions';
$lang['invoice_activity_marked_as_cancelled']   = 'marked invoice as cancelled';
$lang['invoice_activity_unmarked_as_cancelled'] = 'unmarked invoice as cancelled';
$lang['wait_text']                              = 'Please wait...';
$lang['projects_summary']                       = 'Общо за проекта';
$lang['dept_imap_host']                         = 'IMAP Host';
$lang['dept_encryption']                        = 'Encryption';
$lang['dept_email_password']                    = 'Password';
$lang['dept_email_no_encryption']               = 'No Encryption';
$lang['failed_to_decrypt_password']             = 'Failed to decrypt password';
$lang['delete_mail_after_import']               = 'Delete mail after import?';
$lang['expiry_reminder_enabled']                = 'Send expiration reminder';
$lang['send_expiry_reminder_before']            = 'Send expiration reminder before (DAYS)';
$lang['not_expiry_reminder_sent']               = 'Expiry reminder sent';
$lang['send_expiry_reminder']                   = 'Send expiration reminder';
$lang['sent_expiry_reminder_success']           = 'Expiration reminder successfully sent';
$lang['sent_expiry_reminder_fail']              = 'Failed to send expiration reminder';
$lang['leads_default_status']                   = 'Статус по подразбиране';
$lang['item_description_placeholder']           = 'Описание';
$lang['item_long_description_placeholder']      = 'Дълго описание';
$lang['item_quantity_placeholder']              = 'Количество';
$lang['item_rate_placeholder']                  = 'Ед. цена';
$lang['tickets_summary']                        = 'Обща информация';
$lang['tasks_list_priority']                    = 'Приоритет';
$lang['ticket_status_db_2']                     = 'Обработва се';
$lang['ticket_status_db_1']                     = 'Отворен';
$lang['ticket_status_db_3']                     = 'Отговорен';
$lang['ticket_status_db_4']                     = 'На изчакване';
$lang['ticket_status_db_5']                     = 'Приключени';
$lang['ticket_priority_db_1']                   = 'Нисък';
$lang['ticket_priority_db_2']                   = 'Среден';
$lang['ticket_priority_db_3']                   = 'Висок';
$lang['customer_have_projects_by']              = 'Contains projects by status %s';
$lang['customer_have_proposals_by']             = 'Contains proposals by status %s';
$lang['do_not_redirect_payment']                = 'Do not redirect me to the payment processor';
$lang['project_tickets']                        = 'Връзка с екипа';
$lang['invoice_report']                         = 'Invoices Report';
$lang['payment_modes_report']                   = 'Payment Modes (Transactions)';
$lang['customer_admins']                        = 'Customer Admins';
$lang['assign_admin']                           = 'Assign admin';
$lang['customer_admin_date_assigned']           = 'Date Assigned';
$lang['customer_admin_login_as_client_message'] = 'Hello %s. You are added as admin to this customer.';
$lang['ticket_form_validation_file_size']       = 'File size must be less than %s';
$lang['has_transactions_currency_base_change']  = 'Changing the base currency is possible only if there are no transactions recorded in that currency. Delete the transactions to change the base currency';
$lang['customers_sort_all']                     = 'All';

# Version 1.1.9
$lang['use_recaptcha_customers_area']    = 'Enable reCAPTCHA on customers area (Login/Register)';
$lang['project_marked_as_finished']      = 'Project completed';
$lang['project_status_updated']          = 'Project status updated';
$lang['remove_decimals_on_zero']         = 'Remove decimals on numbers/money with zero decimals (2.00 will become 2, 2.25 will stay 2.25)';
$lang['remove_tax_name_from_item_table'] = 'Remove the tax name from item table row';

# Version 1.2.0
$lang['not_billable_expenses_by_categories']      = 'Not billable expenses by categories';
$lang['billable_expenses_by_categories']          = 'Billable expenses by categories';
$lang['format_letter_size']                       = 'A4 Landscape';
$lang['pdf_formats']                              = 'Document formats';
$lang['swap_pdf_info']                            = 'Swap Company/Customer Details (company details to right side, customer details to left side)';
$lang['expenses_filter_by_categories']            = 'By Categories';
$lang['task_copy']                                = 'Copy';
$lang['estimate_status']                          = 'Status';
$lang['expenses_report_exclude_billable']         = 'Exclude Billable Expenses';
$lang['expenses_total']                           = 'Total';
$lang['estimate_activity_added_attachment']       = 'Added attachment';
$lang['show_to_customer']                         = 'Show to customer';
$lang['hide_from_customer']                       = 'Hide from customer';
$lang['expenses_report_total']                    = 'Total';
$lang['expenses_report']                          = 'Expenses report';
$lang['expenses_report_total_tax']                = 'Total Tax';
$lang['expenses_detailed_report']                 = 'Detailed Report';
$lang['expense_not_billable']                     = 'Not Billable';
$lang['notification_settings']                    = 'Notification settings';
$lang['staff_with_roles']                         = 'Staff members with roles';
$lang['specific_staff_members']                   = 'Specific Staff Members';
$lang['proposal_mark_as']                         = 'Маркирай като %s';
$lang['kb_report_total_answers']                  = 'Общо';
$lang['ticket_message_edit']                      = 'Промени';
$lang['invoice_files']                            = 'Invoice Files';
$lang['estimate_files']                           = 'Estimate Files';
$lang['proposal_files']                           = 'Proposal Files';
$lang['invoices_awaiting_payment']                = 'Фактури очакващи плащане';
$lang['tasks_not_finished']                       = 'Незавършени задачи';
$lang['outstanding_invoices']                     = 'Просрочени Фактури';
$lang['past_due_invoices']                        = 'Фактури за плащане';
$lang['paid_invoices']                            = 'Платени фактури';
$lang['invoice_estimate_year']                    = 'Година';
$lang['task_stats_logged_hours']                  = 'Часове';
$lang['leads_converted_to_client']                = 'Конвертирани лийдове';
$lang['task_assigned_from']                       = 'Тази задача е възложена на теб от %s';
$lang['new_note']                                 = 'Нова бележка';
$lang['my_tickets_assigned']                      = 'Билети възложени на мен';
$lang['filter_by_assigned']                       = 'By Assigned Member';
$lang['staff_stats_total_logged_time']            = 'Total Logged Time';
$lang['staff_stats_last_month_total_logged_time'] = 'Last Month Logged Time';
$lang['staff_stats_this_month_total_logged_time'] = 'This Month Logged Time';
$lang['staff_stats_last_week_total_logged_time']  = 'Last Week Logged Time';
$lang['staff_stats_this_week_total_logged_time']  = 'This Week Logged Time';
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
$lang['milestone_description']                      = 'Описание';
$lang['description_visible_to_customer']            = 'Покажи описанието на клиента';
$lang['upcoming_tasks']                             = 'Предстоящи задачи';
$lang['paymentmethod_two_checkout_account_number']  = 'Account Number (Seller ID)';
$lang['paymentmethod_two_checkout_private_key']     = 'Private Key';
$lang['paymentmethod_two_checkout_publishable_key'] = 'Publishable Key';
$lang['payment_credit_card_number']                 = 'Card Number';
$lang['payment_credit_card_expiration_date']        = 'Expiration Date';
$lang['payment_billing_email']                      = 'Email';
$lang['submit_payment']                             = 'Submit Payment';
$lang['2checkout_notice_payment']                   = 'Credit card details are processed via secure token provided from 2Checkout';
$lang['2checkout_usage_notice']                     = 'SSL is required if you\'re using the 2Checkout payment API. It is required to safely call the tokenization and authorizations. The system will function without SSL, however, this will place you out of compliance, which risks deactivation of your API permissions.';
$lang['custom_field_disallow_customer_to_edit']     = 'Disallow customer to edit this field';
$lang['project_due_notice']                         = 'This project is overdue by %s days';
$lang['not_lead_added_attachment']                  = 'added new attachment to lead %s';
$lang['lead_note_date_added']                       = 'Note added: %s';
$lang['recurring_custom']                           = 'Custom';
// don't translate these, only added for better readability already translated for the expenses custom recurring feature.
$lang['invoice_recurring_months'] = $lang['expense_recurring_months'];
$lang['invoice_recurring_years']  = $lang['expense_recurring_years'];
$lang['invoice_recurring_days']   = $lang['expense_recurring_days'];
$lang['invoice_recurring_weeks']  = $lang['expense_recurring_weeks'];

# Version 1.2.4
$lang['document_direction']                                 = 'Direction';
$lang['notify_project_members_status_change']               = 'Информирайте членовете на проекта, че статуса на проекта е променен';
$lang['not_project_status_updated']                         = 'Статуса на Проекта е променен от %s на %s';
$lang['ticket_not_found']                                   = 'Ticket not found';
$lang['project_not_found']                                  = 'Проекта не е намерен';
$lang['export_project_data']                                = 'Export project data';
$lang['total_project_members']                              = 'Общо членове на проекта';
$lang['total_project_files']                                = 'Прикрепени файлове';
$lang['total_project_discussions_created']                  = 'Discussions created';
$lang['project_member']                                     = 'Член';
$lang['total_project_discussions_comments']                 = 'Total discussion comments';
$lang['staff_total_task_assigned']                          = 'Total tasks assigned';
$lang['staff_total_comments_on_tasks']                      = 'Comments on tasks';
$lang['project_members_overview']                           = 'Преглед членове на проекта';
$lang['project_milestones_overview']                        = 'Milestones overview';
$lang['total_tasks_in_milestones']                          = 'Total tasks assigned';
$lang['total_task_members_assigned']                        = 'Total members assigned';
$lang['total_task_members_followers']                       = 'Total followers';
$lang['total_milestones']                                   = 'Total milestones';
$lang['total_project_worked_days']                          = 'Total days worked';
$lang['finance_overview']                                   = 'Finance Overview';
$lang['project_custom_fields']                              = 'Custom fields';
$lang['total_tickets_related_to_project']                   = 'Total tickets linked to project';
$lang['projects_total_invoices_created']                    = 'Total invoices created';
$lang['do_not_send_invoice_payment_email_template_contact'] = 'Do not send invoice payment recorded email to customer contacts';
$lang['no_preview_available_for_file']                      = 'No preview available for this file.';
$lang['project_activity_deleted_file_discussion_comment']   = 'File discussion comment deleted';
$lang['email_template_discussion_info']                     = 'This template is used for both project discussion comments emails. (files discussions and regular discussions)';
$lang['format_a4_portrait_size']                            = 'Portrait';
$lang['only_show_contact_tickets']                          = 'In customers area only show tickets related to the logged in contact (Primary contact not applied)';
$lang['cancel_overdue_reminders_invoice']                   = 'Prevent sending overdue reminders for this invoice';
$lang['customer_shipping_address_notice']                   = 'Do not fill shipping address information if you won\'t use shipping address on customer invoices';
$lang['timesheets_overview']                                = 'Timesheets overview';
$lang['invoice_status_draft']                               = 'Чернови';
$lang['save_as_draft']                                      = 'Запази като чернова';
$lang['convert_and_save_as_draft']                          = 'Конвертирай и запази като чернова';
$lang['convert']                                            = 'Конвертирай';
$lang['exclude_invoices_draft_from_client_area']            = 'Exclude invoices with draft status from customers area';
$lang['invoice_draft_status_info']                          = 'This invoice is with status Draft, status will be auto changed when you send the invoice to the customer or mark as sent.';
$lang['task_info']                                          = 'Информация за задачата';
$lang['recurring_tasks']                                    = 'Повтарящи';
// don't translate these, already translated
$lang['task_repeat_every']                         = $lang['expense_repeat_every'];
$lang['task_recurring_months']                     = $lang['expense_recurring_months'];
$lang['task_recurring_years']                      = $lang['expense_recurring_years'];
$lang['task_recurring_days']                       = $lang['expense_recurring_days'];
$lang['task_recurring_weeks']                      = $lang['expense_recurring_weeks'];
$lang['todays_tasks']                              = 'Задачи от Днес';
$lang['payment_mode_invoices_only']                = 'Само фактури';
$lang['payment_mode_expenses_only']                = 'Само разходи';
$lang['task_no_checklist_items_found']             = 'Checklist items not found for this task';
$lang['task_no_description']                       = 'Няма описание за задачата';
$lang['expenses_reminders']                        = 'Напомняния';
$lang['expense_set_reminder_title']                = 'Добави напомняне за разход';
$lang['calendar_expense_reminder']                 = 'Напомняния за разходи';
$lang['recurring_task']                            = 'Повтарящи задачи';
$lang['disable_email_from_being_sent']             = 'Disable this email from being sent';
$lang['not_sent_indicator']                        = 'Неизпратени';
$lang['proposal_status_revised']                   = 'Променени';
$lang['customer_currency_change_notice']           = 'If the customer use other currency then the base currency make sure you select the appropriate currency for this customer. Changing the currency is not possible after transactions are recorded.';
$lang['click_to_add_content']                      = 'Click here to add content';
$lang['related_to_project']                        = 'Тaзи %s е свързанa с %s: %s';
$lang['back_to_lead']                              = 'Обратно към Лийд';
$lang['add_task_timer_started_warning']            = 'Stop current started timer for this task to be able to add new timer manually.';
$lang['sending_email_contact_permissions_warning'] = 'Failed to auto select customer contacts. Please make sure that the customer have associated contacts with permission %s';

# Version 1.2.6
$lang['currently_supported_currencies']                       = 'Currently supported currencies';
$lang['authorize_notice']                                     = 'SSL is required if you\'re using the Authorize.Net AIM payment API. Authorize.net only supports 1 currency per account. Make sure you add only 1 currency associated with your Authorize account in the currencies field.';
$lang['settings_paymentmethod_developer_mode']                = 'Developer Mode';
$lang['payment_cardholder_name']                              = 'Cardholder\'s Name';
$lang['settings_paymentmethod_authorize_api_login_id']        = 'API Login ID';
$lang['settings_paymentmethod_mollie_api_key']                = 'API Key';
$lang['settings_paymentmethod_authorize_api_transaction_key'] = 'API Transaction ID';
$lang['settings_paymentmethod_authorize_secret_key']          = 'Secret Key';
$lang['leads_report_converted_notice']                        = 'Only leads that belongs in the default Customer status will be taken as converted leads, if the leads belongs to the default status client and its not converted to customer will be still counted as converted lead';
$lang['payment_method']                                       = 'Payment Method';
$lang['payment_method_info']                                  = 'Some payment gateways support different/multiple payment methods like Credit Card, PayPal, Bank.';

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
$lang['custom_field_company']                               = 'Company';
$lang['actions']                                            = 'Actions';
$lang['project_mark_as']                                    = 'Mark as %s';
$lang['todo_edit_title']                                    = 'Edit todo item';
$lang['additional_action_required']                         = 'Additional action required!';
$lang['project_mark_tasks_finished_confirm']                = 'Confirm';
$lang['project_marked_as_success']                          = 'Project marked as %s successfully';
$lang['project_marked_as_failed']                           = 'Failed to mark project as %s';
$lang['auto_assign_customer_admin_after_lead_convert']      = 'Auto assign as admin to customer after convert';
$lang['auto_assign_customer_admin_after_lead_convert_help'] = 'If this option is set to YES the staff member that converted lead to customer will be auto assigned as customer admin. NOTE: This option will apply only on staff members that do not have permission for customers VIEW';
$lang['auto_close_tickets_disable']                         = 'Set 0 to disable';
$lang['task_checklist_item_completed_by']                   = 'Completed by %s';
$lang['staff_email_signature_help']                         = 'If empty default email signature from settings will be used';
$lang['default_task_priority']                              = 'Default Priority';
$lang['project_send_created_email']                         = 'Send project created email';

# Version 1.2.8
$lang['show_transactions_on_invoice_pdf']            = 'Show invoice payments (transactions) on PDF';
$lang['bulk_actions']                                = 'Bulk Actions';
$lang['additional_filters']                          = 'Additional Filters';
$lang['expenses_available_to_bill']                  = 'Expenses available to bill';
$lang['bulk_action_customers_groups_warning']        = 'If you do not select any group all groups assigned to the selected customers will be removed.';
$lang['customer_attachments_show_in_customers_area'] = 'Show to customers area';
$lang['customer_attachments_show_notice']            = 'Only files uploaded from customer profile have ability to show/hide in customers area.';
$lang['customer_profile_files']                      = 'Файлове';
$lang['no_files_found']                              = 'Няма открити файлове';
$lang['custom_field_column']                         = 'Grid (Bootstrap Column eq. 12) - Max is 12';
$lang['task_status']                                 = 'Статус';
$lang['task_status_1']                               = 'Не е старирана';
$lang['task_status_2']                               = 'Завършена/Неплатена';
$lang['task_status_3']                               = 'Завършена/Чака оферта';
$lang['task_status_4']                               = 'Изпълнява се';
$lang['task_status_5']                               = 'Завършена/Платена';
$lang['task_mark_as']                                = 'Маркирай като %s';
$lang['task_marked_as_success']                      = 'Задачата е маркирана като %s ';
$lang['search_tasks']                                = 'Търси задача';
$lang['tasks_kanban_limit']                          = 'Limit tasks kan ban rows per status';
$lang['show_on_invoice_on_pdf']                      = 'Show %s on Invoice PDF';
$lang['show_pay_link_to_invoice_pdf']                = 'Show Pay Invoice link to PDF (Not applied if invoice status is Cancelled)';
$lang['no_leads_found']                              = 'Няма намерени Лийдове';
$lang['created_today']                               = 'Създадени днес';
$lang['total_tasks_deleted']                         = 'Общо изтрити задачи: %s';
$lang['total_tickets_delete']                        = 'Общо изтрити Билети: %s';
$lang['total_tickets_delete']                        = 'Общо изтрити Билети: %s';
$lang['format_letter_portrait']                      = 'Letter Portrait';
$lang['format_letter_landscape']                     = 'Letter Landscape';
$lang['period_datepicker']                           = 'Период';
$lang['total_by_hourly_rate']                        = 'Total By Hourly Rate';
$lang['staff_hourly_rate']                           = $lang['task_hourly_rate'];
// &#37; is for % so the system can confuse for the original fields like %s
$lang['remove_tax_name_from_item_table_help'] = 'eq. Item TAX 15&#37; will be shown as 15&#37; without the tax name (Not applied if multiple taxes with the same name and tax percent found for item)';
$lang['back_to_project']                      = 'Back to Project';
$lang['view_kanban']                          = 'Виж Kan Ban';
$lang['invoice_is_overdue']                   = 'This invoice is overdue by %s days';

# Version 1.2.9
$lang['time_decimal']                            = 'Time (decimal)';
$lang['time_h']                                  = 'Time (h)';
$lang['proposal_number_prefix']                  = 'Proposal Number Prefix';
$lang['settings_number_padding_prefix']          = 'Number padding zero\'s for prefix formats <br /> <small>eq. If this value is 3 the number will be formatted: 005 or 025</small>';
$lang['this_week_payments']                      = 'Плащания тази седмица';
$lang['last_week_payments']                      = 'Плащания миналата седмица';
$lang['not_published_new_post']                  = 'published new post';
$lang['expense_name']                            = 'Име';
$lang['expense_name_help']                       = 'За лична нужда';
$lang['adjustments']                             = 'Донастройка';
$lang['payments_received']                       = 'Получени Плащания';
$lang['not_lead_activity_created_proposal']      = 'Създадено ново Предложение - %s';
$lang['lead_title']                              = 'Позиция';
$lang['lead_address']                            = 'Адрес';
$lang['lead_city']                               = 'Град';
$lang['lead_state']                              = 'State';
$lang['lead_country']                            = 'Държава';
$lang['lead_zip']                                = 'Zip Code';
$lang['lead_is_public_yes']                      = 'Да';
$lang['lead_is_public_no']                       = 'Не';
$lang['lead_info']                               = 'Информация за Лийд';
$lang['lead_general_info']                       = 'Главна Информация';
$lang['lead_latest_activity']                    = 'Последна Активност';
$lang['item_description_new_lines_notice']       = 'New lines are not supported for item description. Use the item long description instead.';
$lang['estimates_report']                        = 'Estimates Report';
$lang['confirm']                                 = 'Потвърди';
$lang['delete_staff']                            = 'Delete Staff Member';
$lang['delete_staff_info']                       = 'Some data for this staff member needs to be transferred to another user. Please select user where you want to transfer the data.';
$lang['estimate_items']                          = 'Estimate Items';
$lang['no_proposals_found']                      = 'No Proposals Found';
$lang['no_estimates_found']                      = 'No Estimates Found';
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
$lang['sync_now']                                = 'Синхронизирай сега';
$lang['sync_data']                               = 'Синхронизирай инфо';
$lang['sync_proposals_up_to_date']               = 'Всички Предложения са вече Синхронизирани';
$lang['proposal_sync_1_info']                    = 'All proposal data is stored separately for each proposal after creation. Updating the %s info won\'t affect previous created proposals for this %s.';
$lang['proposal_sync_2_info']                    = 'If you recently updated your %s info you can sync all new data to associated proposals. Here is a list of fields you can sync.';

# Version 1.3.0
$lang['expense_include_additional_data_on_convert'] = 'Include additional details to item long description taken from this expense.';

# Version 1.4.0
$lang['calendar_events_limit']                              = 'Calendar Events Limit (Month and Week View)';
$lang['show_page_number_on_pdf']                            = 'Show page number on PDF';
$lang['customer_active_inactive_help']                      = 'Won\'t be shown in dropdowns when creating new records';
$lang['item_groups']                                        = 'Groups';
$lang['item_group']                                         = 'Item Group';
$lang['item_group_name']                                    = 'Group Name';
$lang['new_item_group']                                     = 'New Group';
$lang['show_setup_menu_item_only_on_hover']                 = 'Show setup menu item only when hover with mouse on main sidebar area';
$lang['internal_article']                                   = 'Internal Article';
$lang['expenses_created_from_this_recurring_expense']       = 'Created expenses from this recurring expense';
$lang['convert_to_task']                                    = 'Промени в Задача';
$lang['next_invoice_date']                                  = 'Next Invoice Date: %s';
$lang['next_expense_date']                                  = 'Next Expense Date: %s';
$lang['invoice_recurring_from']                             = 'This invoice is created from recurring invoice with number: %s';
$lang['expense_recurring_from']                             = 'This expense is created from the following recurring expense: %s';
$lang['child_invoices']                                     = 'Child Invoices';
$lang['child_expenses']                                     = 'Child Expenses';
$lang['no_announcements']                                   = 'No Announcements';
$lang['unit']                                               = 'Мярка';
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
$lang['file_date_uploaded']                                 = 'Date Uploaded';
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
$lang['form_lang_validation_help']                          = 'For validation messages';
$lang['form_btn_submit_text']                               = 'Submit button text';
$lang['form_success_submit_msg']                            = 'Message to show after form is succcesfully submitted';
$lang['total_submissions']                                  = 'Total Submissions';
$lang['form_integration_code']                              = 'Integration Code';
$lang['not_lead_imported_from_form']                        = 'New Lead Imported from Web to Lead Form - %s';
$lang['not_lead_activity_log_attachment']                   = 'Attachment Imported from form - %s';
$lang['form_integration_code_help']                         = 'Copy & Paste the code anywhere in your site to show the form, additionally you can adjust the width and height px to fit for your website.';
$lang['invoice_not_found']                                  = 'Invoice not found';
$lang['estimate_not_found']                                 = 'Estimate not found';
$lang['expense_not_found']                                  = 'Expense not found';
$lang['proposal_not_found']                                 = 'Proposal not found';
$lang['new_task_assigned_non_user']                         = 'New task is assigned to you - %s';
$lang['no_child_found']                                     = 'No Child %s Found';
$lang['company_vat_number']                                 = 'Булстат';
$lang['not_lead_assigned_from_form']                        = 'New lead is assigned to you';
$lang['not_lead_activity_assigned_from_form']               = 'Lead assigned to %s';
$lang['form_allow_duplicate']                               = 'Allow duplicate %s to be inserted into database?';
$lang['track_duplicate_by_field']                           = 'Prevent duplicate on field';
$lang['and_track_duplicate_by_field']                       = '+ field (leave blank to track duplicates only by 1 field)';
$lang['create_the_duplicate_form_data_as_task']             = 'Create duplicate %s data as task and assign to responsible staff member';
$lang['create_the_duplicate_form_data_as_task_help']        = 'Used for further review on the submission and take the necessary action';
$lang['currently_selected']                                 = 'Currently Selected';
$lang['search_ajax_empty']                                  = 'Започнете да пишете за търсене';
$lang['search_ajax_placeholder']                            = 'Търсене';
$lang['search_ajax_searching']                              = 'Търсене...';
$lang['search_ajax_initialized']                            = 'Започнете да пишете за търсене';
$lang['lead_description']                                   = 'Описание';
$lang['lead_website']                                       = 'Website';
$lang['invoice_activity_auto_converted_from_estimate']      = 'Invoice auto created from estimate with number %s';
$lang['hour_of_day_perform_auto_operations']                = 'Hour of day to perform automatic operations';
$lang['hour_of_day_perform_auto_operations_format']         = '24 hours format eq. 9 for 9am or 15 for 3pm.';
$lang['inv_hour_of_day_perform_auto_operations_help']       = 'Used for recurring invoices, overdue notices etc..';
$lang['use_minified_files']                                 = 'Use minified files version for css and js (only system files)';

# Version 1.5.0
$lang['logo_favicon_changed_notice']       = 'Logo or Favicon change detected. If you still see the original CRM logo try to clear your browser cache';
$lang['kb_search_articles']                = 'Search Knowledge Base Articles';
$lang['kb_search']                         = 'Search';
$lang['have_a_question']                   = 'Have a question?';
$lang['card_expiration_year']              = 'Expiration Year';
$lang['card_expiration_month']             = 'Expiration Month';
$lang['client_website']                    = 'Website';
$lang['search_project_members']            = 'Search Project Members...';
$lang['cf_translate_input_link_title']     = 'Title';
$lang['cf_translate_input_link_url']       = 'URL';
$lang['cf_translate_input_link_tip']       = 'Click here to add link';
$lang['task_edit_delete_timesheet_notice'] = 'Timesheet task is %s, you cant %s the timesheet.';
$lang['department_username']               = 'IMAP Username';
$lang['department_username_help']          = 'Only fill this field if your IMAP server use username to login instead email address. Note that you will still need to add email address.';
$lang['total_tickets_deleted']             = 'Total tickets deleted: %s';

# Version 1.5.1
$lang['ticket_linked_to_project']                                = 'Този Билет е свързан с проект: %s';
$lang['only_own_files_contacts']                                 = 'Contacts see only own files uploaded in customer area (files uploaded in customer profile)';
$lang['only_own_files_contacts_help']                            = 'If you share the file manually from customer profile to other contacts they wil be able to see the file.';
$lang['share_file_with']                                         = 'Share File With';
$lang['file_share_visibility_notice']                            = 'This file is not shared with contacts, toggle visibility again to reload';
$lang['share_file_with_show']                                    = 'This file is shared with: %s';
$lang['allow_primary_contact_to_view_edit_billing_and_shipping'] = 'Allow primary contact to view/edit billing & shipping details';
$lang['estimate_due_after']                                      = 'Estimate Due After (days)';

# Version 1.6.0
$lang['my_timesheets']                                   = 'My Timesheets';
$lang['today']                                           = 'Днес';
$lang['open_in_dropbox']                                 = 'Open In Dropbox';
$lang['show_primary_contact']                            = 'Show primary contact full name on %s';
$lang['view_members_timesheets']                         = 'View all timesheets';
$lang['priority']                                        = 'Приоритет';
$lang['fetch_from_google']                               = 'Fetch from google';
$lang['customer_fetch_lat_lng_usage']                    = 'Fill address, city and country before fetching to get best result.';
$lang['g_search_address_not_found']                      = 'The address couldn\'t be found, please try again';
$lang['proposals_report']                                = 'Proposals Report';
$lang['staff_members_open_tickets_to_all_contacts_help'] = 'If staff member don\'t have permission for customers VIEW only will be able to create new tickets from admin area to customer contacts where is assigned as customer admin.';
$lang['staff_members_open_tickets_to_all_contacts']      = 'Allow staff members to open tickets to all contacts?';
$lang['charts_based_report']                             = 'Charts Based Report';
$lang['responsible_admin']                               = 'Responsible admin';
$lang['tags']                                            = 'Tags';
$lang['tag']                                             = 'Tag';
$lang['customer_map_notice']                             = 'Add longitude and latitude to show the map here.';
$lang['default_view']                                    = 'Default View';
$lang['day']                                             = 'Day';
$lang['agenda']                                          = 'Agenda';
$lang['timesheet_tags']                                  = 'Timesheet Tags';
$lang['show_more']                                       = 'Show more';
$lang['show_less']                                       = 'Show less';
$lang['project_completed_date']                          = 'Completed Date';
$lang['language']                                        = 'Language';
$lang['this_week']                                       = 'Тази седмица';
$lang['last_week']                                       = 'Миналата седмица';
$lang['this_month']                                      = 'Този месец';
$lang['last_month']                                      = 'Последния месец';
$lang['no_description_project']                          = 'Няма описание по този проект';
$lang['sales_string']                                    = 'Финанси';
$lang['no_project_members']                              = 'No members for this project';
$lang['search_by_tags']                                  = 'Use # + tagname to search by tags';
$lang['project_status_5']                                = 'Отказан';

# Version 1.7.0
$lang['not_activity_new_reminder_created']        = 'set a new reminder for %s with date %s';
$lang['not_activity_new_task_created']            = 'Created new task - %s';
$lang['recurring_invoice_draft_notice']           = 'This invoice is with status draft, you need to mark this invoice as sent. Recurring invoices with status draft won\'t be recreated by cron job.';
$lang['recurring_recreate_hour_notice']           = '%s will be recreated on specific hour of the day based from the setting located at Setup->Settings-Cron Job';
$lang['invoice_project_include_timesheets_notes'] = 'Include each timesheet note in item description';
$lang['events']                                   = 'Events';
$lang['clear']                                    = 'Clear';
$lang['auto_mark_as_public']                      = 'Auto mark as public';
$lang['time_format']                              = 'Time Format';
$lang['time_format_24']                           = '24 hours';
$lang['time_format_12']                           = '12 hours';
$lang['delete_activity_log_older_then']           = 'Delete system activity log older then X months';
$lang['mark_as_read']                             = 'Mark as Read';
$lang['mark_all_as_read']                         = 'Mark all as read';
$lang['tax_1']                                    = 'Данък 1';
$lang['tax_2']                                    = 'Данък 2';
$lang['total_with_tax']                           = 'Общо с ДДС';
$lang['new_task_auto_assign_current_member']      = 'Auto assign task creator when new task is created';
$lang['new_task_auto_assign_current_member_help'] = 'Not applied if task is linked to project and the creator is not project member';
$lang['copy_project_tasks_status']                = 'Статус';
$lang['tasks_summary']                            = 'Задачи';
$lang['vault']                                    = 'Vault';
$lang['new_vault_entry']                          = 'New Vault Entry';
$lang['server_address']                           = 'Server Address';
$lang['port']                                     = 'Port';
$lang['vault_username']                           = 'Username';
$lang['vault_password']                           = 'Password';
$lang['vault_description']                        = 'Short Description';
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
$lang['vault_entry_visible_creator']              = 'Visible only to me (administrators are not excluded)';
$lang['vault_entry_visible_administrators']       = 'Visible only to administrators';
$lang['my_reminders']                             = 'Моите напомняния';
$lang['reminder_related']                         = 'Свързано с';
$lang['event_notification']                       = 'Notification';
$lang['days']                                     = 'Дни';
$lang['reminder_notification_placeholder']        = 'Eq. 30 minutes before';
$lang['event_color']                              = 'Event Color';
$lang['group_by_task']                            = 'Group by Task';
$lang['save']                                     = 'Save';
$lang['disable_languages']                        = 'Disable Languages';

# Version 1.8.0
$lang['not_customer_viewed_invoice']                         = 'An invoice with number %s has been viewed';
$lang['not_customer_viewed_estimate']                        = 'An estimate with number %s has been viewed';
$lang['not_customer_viewed_proposal']                        = 'An proposal with number %s has been viewed';
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
$lang['last_year']                                           = 'Миналата година';
$lang['customer_statement']                                  = 'Извлечение клиент';
$lang['customer_statement_for']                              = 'Извлечение за Клиент - %s';
$lang['account_summary']                                     = 'Извлечение Клиент';
$lang['statement_beginning_balance']                         = 'Стартов Баланс';
$lang['invoiced_amount']                                     = 'Фактурирана сума';
$lang['amount_paid']                                         = 'Платена сума';
$lang['statement_from_to']                                   = '%s до %s';
$lang['customer_statement_info']                             = 'Показани са всички Фактури и Плащания за периода от %s до %s';
$lang['balance_due']                                         = 'Сума за плащане';
$lang['statement_heading_date']                              = 'Дата';
$lang['statement_heading_details']                           = 'Детайли';
$lang['statement_heading_amount']                            = 'Сума';
$lang['statement_heading_payments']                          = 'Плащания';
$lang['statement_heading_balance']                           = 'Баланс';
$lang['statement_invoice_details']                           = 'Фактура %s - за плащане на %s';
$lang['statement_payment_details']                           = 'Payment (%s) to invoice %s';
$lang['statement_bill_to']                                   = 'До';
$lang['send_to_email']                                       = 'Изпрати на E-mail';
$lang['statement_sent_to_client_success']                    = 'Извлечението е изпратено успешно до клиент';
$lang['statement_sent_to_client_fail']                       = 'Problem while sending the statement';
$lang['view_account_statement']                              = 'Виж Извлечение';
$lang['text_not_recommended_for_servers_limited_resources']  = 'Not recommended if the server have limited resources. Eq shared hosting';
$lang['tasks_bull_actions_assign_notice']                    = 'If the task is linked to project and the staff member you are assigning the task to is not project member this staff will be auto added as member.';
$lang['company_information']                                 = 'Company Information';
$lang['ticket_form']                                         = 'Ticket Form';
$lang['ticket_form_subject']                                 = 'Тема';
$lang['ticket_form_name']                                    = 'Вашето име';
$lang['ticket_form_email']                                   = 'E-mail Адрес';
$lang['ticket_form_department']                              = 'Отдел';
$lang['ticket_form_message']                                 = 'Съобщение';
$lang['ticket_form_priority']                                = 'Приоритет';
$lang['ticket_form_service']                                 = 'Service';
$lang['ticket_form_submit']                                  = 'Съхрани';
$lang['ticket_form_attachments']                             = 'Добавени файлове';
$lang['success_submit_msg']                                  = 'Благодаря Ви, че се свързахте с нас. Ще се свържем с Вас възможно най-скоро.';
$lang['vault_entry_share_on_projects']                       = 'Share this vault entry in projects with project members';
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
$lang['attach_files']                                  = 'Attach Files';
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
$lang['save_and_send']                                 = 'Save & Send';
$lang['private']                                       = 'Private';
$lang['task_created_at']                               = 'Създадена на: %s';
$lang['hide_notified_reminders_from_calendar']         = 'Hide notified reminders from calendar';
$lang['last_active']                                   = 'Last Active';
$lang['open_ticket']                                   = 'Open Ticket';
$lang['task_add_description']                          = 'Add Description';
$lang['project_setting_create_tasks']                  = 'create tasks';
$lang['project_setting_edit_tasks']                    = 'edit tasks (only tasks created from contact)';

# Version 1.9.2
$lang['items_report']                            = 'Items Report';
$lang['reports_item']                            = 'Item';
$lang['quantity_sold']                           = 'Quantity Sold';
$lang['total_amount']                            = 'Total Amount';
$lang['avg_price']                               = 'Average Price';
$lang['item_report_paid_invoices_notice']        = 'Items report is generated only from paid invoices before discounts and taxes.';
$lang['overview']                                = 'Общо инфо';
$lang['timer_started_change_status_in_progress'] = 'Change task status to In Progress on timer started (valid only if task status is Not Started)';
$lang['company_info_format']                     = 'Company Information Format (PDF and HTML)';
$lang['customer_info_format']                    = 'Customer Information Format (PDF and HTML)';
$lang['custom_field_info_format_embed_info']     = 'Custom fields for %s can be easily embedded into PDF and HTML documents by adding the merge fields into the page format at the following page: %s';
$lang['transfer_lead_notes_to_customer']         = 'Transfer lead notes to customer profile';
$lang['authorized_signature_text']               = 'Оторизиран Подпис';
$lang['show_pdf_signature_invoice']              = 'Покажи PDF Подпис на фактура';
$lang['show_pdf_signature_estimate']             = 'Покажи PDF Подпис на Предложение';
$lang['signature']                               = 'Подпис';
$lang['signature_image']                         = 'Signature Image';
$lang['insert_checklist_templates']              = 'Insert Checklist Templates';
$lang['save_as_template']                        = 'Save as Template';
$lang['scroll_responsive_tables_help']           = 'Tables with large amount of data will have horizontal scroll instead rows wrapped in + icon.';
$lang['scroll_responsive_tables']                = 'Activate Scroll Responsive Tables';
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
$lang['email_queue_skip_attachments']                      = 'Do not add emails with attachments in the queue?';
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
$lang['exclude_inactive']                                  = 'Exclude Inactive';
$lang['disable_all']                                       = 'Disable All';
$lang['enable_all']                                        = 'Enable All';
$lang['reccuring_invoice_option_gen_and_send']             = 'Generate and autosend the renewed invoice to the customer';
$lang['reccuring_invoice_option_gen_unpaid']               = 'Generate a Unpaid Invoice';
$lang['reccuring_invoice_option_gen_draft']                = 'Generate a Draft Invoice';
$lang['event_created_by']                                  = 'This event is created by %s';

# Version 1.9.5
$lang['customers_assigned_to_me']              = 'Клиенти възложени на мен';
$lang['bcc_all_emails']                        = 'BCC All Emails To';
$lang['confirmation_of_identity']              = 'Confirmation Of Identity';
$lang['accept_identity_confirmation']          = 'Require identity confirmation on accept';
$lang['accepted_identity_info']                = 'Това %s е прието от %s на %s от следния IP адрес %s';
$lang['clear_this_information']                = 'Clear This Information';
$lang['new_task_auto_follower_current_member'] = 'Auto add task creator as task follower when new task is created';
$lang['expenses_report_net']                   = 'Net Amount (Subtotal)';
$lang['expense_field_billable_help']           = 'If billable, %s can be added to invoice long description.';
$lang['task_biillable_checked_on_creation']    = 'Billable option is by default checked when new task is created? (only from admin area)';
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
$lang['reminders']                                               = 'Напомняния';
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

$lang['credit_note_set_reminder_title']     = 'Set Credit Note Reminder';
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
$lang['ticket_assigned']                          = 'Възложен';
$lang['dashboard_options']                        = 'Изглед работен плот';
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
$lang['document_customer_signature_text']                       = 'Подпис (Клиент)';
$lang['accept_identity_confirmation_and_signature_sign']        = 'Require digital signature and identity confirmation on accept';
$lang['legal_bound_text']                                       = 'Legal Bound Text';
$lang['e_signature_sign']                                       = 'Подпиши';
$lang['is_signed']                                              = 'Подписано';
$lang['is_not_signed']                                          = 'Не е подписано';
$lang['download']                                               = 'Свали';
$lang['view_pdf_in_new_window']                                 = 'Виж PDF в нов таб';
$lang['show_pdf_signature_contract']                            = 'Покажи PDF Подпис на Договор';
$lang['document_signed_successfully']                           = 'Вие успешно подписахте този документ';
$lang['document_signed_info']                                   = 'This document is signed by %s on %s from IP address %s';
$lang['keep_signature']                                         = 'Keep Customer Signature';
$lang['view_contract']                                          = 'View Contract';
$lang['summary']                                                = 'Summary';
$lang['discussion']                                             = 'Discussion';
$lang['general_information']                                    = 'General Information';
$lang['proposal_information']                                   = 'Информция за предложението';
$lang['contract_comments']                                      = 'Коментари';
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
$lang['subscription']                                           = 'Абонамент';
$lang['subscription_lowercase']                                 = 'абонамент';
$lang['subscriptions']                                          = 'Абонаменти';
$lang['tax_is_used_in_subscriptions_warning']                   = 'You can\'t update this tax because is used by subscriptions.';
$lang['credit_card']                                            = 'Кредитна карта';
$lang['update_credit_card']                                     = 'Обнови кредитна карта';
$lang['credit_card_update_info']                                = 'Want to update the credit card that we have on file? Provide the new details here. Your card information will never directly touch our server.';
$lang['update_card_details']                                    = 'Обнови детайли на картата';
$lang['update_card_btn']                                        = 'Обнови картата';
$lang['subscription_name']                                      = 'Име на абонамент';
$lang['subscriptions_description']                              = 'Описание';
$lang['subscribe']                                              = 'Абонирай се';
$lang['subscription_date']                                      = 'Дата';
$lang['first_billing_date']                                     = 'First Billing Date';
$lang['allow_primary_contact_to_update_credit_card']            = 'Allow primary contact to update stored credit card token?';
$lang['show_subscriptions_in_customers_area']                   = 'Show subscriptions in customers area?';
$lang['show_subscriptions_in_customers_area_help']              = 'This option is valid only for the customer primary contact.';
$lang['subscription_sent_to_email_success']                     = 'Subscription sent to email successfully';
$lang['subscription_sent_to_email_fail']                        = 'Failed to sent subscription to email';
$lang['new_subscription']                                       = 'Нов абонамент';
$lang['subscription_status']                                    = 'Статус';
$lang['next_billing_cycle']                                     = 'Next Billing Cycle';
$lang['subscription_not_subscribed']                            = 'Не абониран';
$lang['send_subscription']                                      = 'Изпрати абонамент';
$lang['subscription_will_send_to_primary_contact']              = 'Абонаментът ще бъде изпратен на главния контакт.';
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
$lang['billable_amount']                                             = 'Сума за плащане';
$lang['last_child_invoice_date']                                     = 'Last Child Invoice Date';
$lang['good_morning']                                                = 'Добро утро';
$lang['good_afternoon']                                              = 'Добър ден';
$lang['good_evening']                                                = 'Добър вечер';
$lang['description_in_invoice_item']                                 = 'Include description in invoice item';
$lang['description_in_invoice_item_help']                            = 'Useful if you want to include additional information on the subscription invoice, e.q. what this subscription includes.';
$lang['ticket_reminders']                                            = 'Напомняние';
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
$lang['create_reminder']                                             = 'Създай напомняне';
$lang['no_reminders_for_this_task']                                  = 'Няма напомняния по тази задача';
$lang['reminder_for']                                                = 'Напомняне за %s на %s';
$lang['no_description_provided']                                     = 'Няма описание';
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
