<?php

# Version 1.0.0
#
# General
$lang['id']                   = 'ИД';
$lang['name']                 = 'Имя';
$lang['options']              = 'Опции';
$lang['submit']               = 'Сохранить';
$lang['added_successfully']   = '%s успешно добавлено.';
$lang['updated_successfully'] = '%s обновлено.';
$lang['edit']                 = 'Изменить %s';
$lang['add_new']              = 'Добавить %s';
$lang['deleted']              = '%s удалено';
$lang['problem_deleting']     = 'Проблема удаления %s';
$lang['is_referenced']        = 'Идентификатор ИД %s уже используется.';
$lang['close']                = 'Закрыть';
$lang['send']                 = 'Отправить';
$lang['cancel']               = 'Отмена';
$lang['go_back']              = 'Вернуться назад';
$lang['error_uploading_file'] = 'Ошибка при загрузки файла';
$lang['load_more']            = 'Загрузить еще';
$lang['cant_delete_default']  = 'Не могу удалить по умолчанию %s';

# Invoice General
$lang['invoice_status_paid']                   = 'Оплачено';
$lang['invoice_status_unpaid']                 = 'Не оплачено';
$lang['invoice_status_overdue']                = 'Просрочено';
$lang['invoice_status_not_paid_completely']    = 'Частично оплачено';
$lang['invoice_pdf_heading']                   = 'СЧЕТ';
$lang['invoice_table_item_heading']            = 'Счет';
$lang['invoice_table_quantity_heading']        = 'Количество';
$lang['invoice_table_rate_heading']            = 'Стоимость';
$lang['invoice_table_tax_heading']             = 'Налог';
$lang['invoice_table_amount_heading']          = 'Сумма';
$lang['invoice_subtotal']                      = 'Подытог';
$lang['invoice_adjustment']                    = 'Корректировка';
$lang['invoice_total']                         = 'Итого';
$lang['invoice_bill_to']                       = 'Детали';
$lang['invoice_data_date']                     = 'Дата формирования счета:';
$lang['invoice_data_duedate']                  = 'Оплатить до:';
$lang['invoice_received_payments']             = 'Транзакции';
$lang['invoice_no_payments_found']             = 'Оплата по счету не проводилась';
$lang['invoice_note']                          = 'Заметка:';
$lang['invoice_payments_table_number_heading'] = 'Платеж #';
$lang['invoice_payments_table_mode_heading']   = 'Способ оплаты';
$lang['invoice_payments_table_date_heading']   = 'Дата';
$lang['invoice_payments_table_amount_heading'] = 'Сумма';

# Announcements
$lang['announcement']                 = 'Объявление';
$lang['announcement_lowercase']       = 'объявление';
$lang['announcements']                = 'Объявления';
$lang['announcements_lowercase']      = 'объявления';
$lang['new_announcement']             = 'Новое объявление';
$lang['announcement_name']            = 'Тема';
$lang['announcement_message']         = 'Сообщение';
$lang['announcement_show_to_staff']   = 'Показать сотрудникам';
$lang['announcement_show_to_clients'] = 'Показать клиентам';
$lang['announcement_show_my_name']    = 'Показывать мое имя';

# Clients
$lang['clients']                                 = 'Клиенты';
$lang['client']                                  = 'Клиент';
$lang['new_client']                              = 'Новый клиент';
$lang['client_lowercase']                        = 'клиент';
$lang['client_firstname']                        = 'Имя';
$lang['client_lastname']                         = 'Фамилия';
$lang['client_email']                            = 'Эл. почта';
$lang['client_company']                          = 'Компания';
$lang['client_vat_number']                       = 'ИНН';
$lang['client_address']                          = 'Адрес';
$lang['client_city']                             = 'Город';
$lang['client_postal_code']                      = 'Почтовый индекс';
$lang['client_state']                            = 'Регион';
$lang['client_password']                         = 'Пароль';
$lang['client_password_change_populate_note']    = 'Примечание: при заполнении этого поля, пароль будет изменен для контакта.';
$lang['client_password_last_changed']            = 'Последнее изменение пароля:';
$lang['login_as_client']                         = 'Войти как клиент';
$lang['client_invoices_tab']                     = 'Счета';
$lang['contracts_invoices_tab']                  = 'Договоры';
$lang['contracts_tickets_tab']                   = 'Тикеты';
$lang['contracts_notes_tab']                     = 'Заметки';
$lang['note_description']                        = 'Примечание';
$lang['client_do_not_send_welcome_email']        = 'Не отправлять приветственное эл. письмо';
$lang['clients_notes_table_description_heading'] = 'Описание';
$lang['clients_notes_table_addedfrom_heading']   = 'Добавил(а)';
$lang['clients_notes_table_dateadded_heading']   = 'Добавлено';
$lang['clients_list_full_name']                  = 'Полное имя';
$lang['clients_list_last_login']                 = 'Последний вход';

# Contracts
$lang['contracts']                = 'Договоры';
$lang['contract']                 = 'Договор';
$lang['new_contract']             = 'Новый договор';
$lang['contract_lowercase']       = 'договор';
$lang['contract_start_date']      = 'Дата начала';
$lang['contract_end_date']        = 'Дата окончания';
$lang['contract_subject']         = 'Заголовок';
$lang['contract_description']     = 'Описание';
$lang['contract_subject_tooltip'] = 'Заголовок виден клиенту';
$lang['contract_client_string']   = 'Клиент';
$lang['contract_attach']          = 'Прикрепить документ';
$lang['contract_list_client']     = 'Клиент';
$lang['contract_list_subject']    = 'Заголовок';
$lang['contract_list_start_date'] = 'Дата начала';
$lang['contract_list_end_date']   = 'Дата окончания';

# Currencies
$lang['currencies']                    = 'Валюта';
$lang['currency']                      = 'Валюта';
$lang['new_currency']                  = 'Новая валюта';
$lang['currency_lowercase']            = 'валюта';
$lang['base_currency_set']             = 'Теперь это основная валюта.';
$lang['make_base_currency']            = 'Отметить как основная валюта';
$lang['base_currency_string']          = 'Основная валюта';
$lang['currency_list_name']            = 'Название';
$lang['currency_list_symbol']          = 'Символ';
$lang['currency_add_edit_description'] = 'Код валюты';
$lang['currency_add_edit_rate']        = 'Символ';
$lang['currency_edit_heading']         = 'Изменить валюту';
$lang['currency_add_heading']          = 'Добавить валюту';

# Department
$lang['departments']                 = 'Отделы';
$lang['department']                  = 'Отдел';
$lang['new_department']              = 'Новый отдел';
$lang['department_lowercase']        = 'отдел';
$lang['department_name']             = 'Название отдела';
$lang['department_email']            = 'Эл. почта отдела';
$lang['department_hide_from_client'] = 'Скрыть от клиента?';
$lang['department_list_name']        = 'Название';

# Email Templates
$lang['email_templates']                        = 'Шаблоны писем';
$lang['email_template']                         = 'Шаблон письма';
$lang['email_template_lowercase']               = 'шаблон письма';
$lang['email_templates_lowercase']              = 'шаблоны писем';
$lang['email_template_ticket_fields_heading']   = 'Тикеты';
$lang['email_template_invoices_fields_heading'] = 'Счета';
$lang['email_template_clients_fields_heading']  = 'Клиенты';

$lang['template_name']                          = 'Название шаблона';
$lang['template_subject']                       = 'Тема';
$lang['template_fromname']                      = 'Отправитель';
$lang['template_fromemail']                     = 'Эл. почта отправителя';
$lang['send_as_plain_text']                     = 'Отправить как обычный текст';
$lang['email_template_disabled']                = 'Отключить';
$lang['email_template_email_message']           = 'Сообщение';
$lang['available_merge_fields']                 = 'Доступные шорткоды';

# Home
$lang['dashboard_string']                          = 'Консоль';
$lang['home_latest_todos']                         = 'Новые задачи';
$lang['home_no_latest_todos']                      = 'Нет задач';
$lang['home_latest_finished_todos']                = 'Последние выполненные задачи';
$lang['home_no_finished_todos_found']              = 'Нет выполненных задач';
$lang['home_tickets_awaiting_reply_by_department'] = 'Тикеты в ожидании ответа отделом';
$lang['home_tickets_awaiting_reply_by_status']     = 'Тикеты в ожидании ответа по статусу';
$lang['home_this_week_events']                     = 'События на этой неделе';
$lang['home_upcoming_events_next_week']            = 'Предстоящие события на следующей неделе';
$lang['home_event_added_by']                       = 'Событие добавлено';
$lang['home_public_event']                         = 'Открытое мероприятие';
$lang['home_weekly_payment_records']               = 'Еженедельные платежные отчеты';
$lang['home_weekend_ticket_opening_statistics']    = 'Еженедельная статистика открытых тикетов';

# Newsfeed
$lang['whats_on_your_mind']                                 = 'Обмен документами, идеи..';
$lang['new_post']                                           = 'Отправить';
$lang['newsfeed_upload_tooltip']                            = 'Совет: перетащите файлы, чтобы загрузить';
$lang['newsfeed_all_departments']                           = 'Все отделы';
$lang['newsfeed_pin_post']                                  = 'Закрепить';
$lang['newsfeed_unpin_post']                                = 'Открепить';
$lang['newsfeed_delete_post']                               = 'Удалить';
$lang['newsfeed_published_post']                            = 'Добавлено';
$lang['newsfeed_you_like_this']                             = 'Вам понравилось';
$lang['newsfeed_like_this']                                 = 'Нравится';
$lang['newsfeed_one_other']                                 = 'другие';
$lang['newsfeed_you']                                       = 'Вы';
$lang['newsfeed_and']                                       = 'и';
$lang['newsfeed_you_and']                                   = 'Вам и';
$lang['newsfeed_like_this_saying']                          = 'Нравится';
$lang['newsfeed_unlike_this_saying']                        = 'Не нравится';
$lang['newsfeed_show_more_comments']                        = 'Показать еще комментарии';
$lang['comment_this_post_placeholder']                      = 'Ваш комментарий..';
$lang['newsfeed_post_likes_modal_heading']                  = 'Коллеги, которым понравилось';
$lang['newsfeed_comment_likes_modal_heading']               = 'Коллеги, которым нравится этот комментарий';
$lang['newsfeed_newsfeed_post_only_visible_to_departments'] = 'Эта запись отображается только для следующих отделов: %s';

# Invoice Items
$lang['invoice_items']                     = 'Счета';
$lang['invoice_item']                      = 'Счет';
$lang['new_invoice_item']                  = 'Новая позиция';
$lang['invoice_item_lowercase']            = 'счет';
$lang['invoice_items_list_description']    = 'Описание';
$lang['invoice_items_list_rate']           = 'Стоимость';
$lang['invoice_item_add_edit_description'] = 'Описание';
$lang['invoice_item_add_edit_rate']        = 'Стоимость';
$lang['invoice_item_edit_heading']         = 'Изменить';
$lang['invoice_item_add_heading']          = 'Добавить';

# Invoices
$lang['invoices']                                = 'Счета на оплату';
$lang['invoice']                                 = 'Счет на оплату';
$lang['invoice_lowercase']                       = 'счет на оплату';
$lang['create_new_invoice']                      = 'Создать новый счет';
$lang['view_invoice']                            = 'Посмотреть счет';
$lang['invoice_payment_recorded']                = 'Зарегистрирована оплата счета';
$lang['invoice_payment_record_failed']           = 'Не удалось зафиксировать оплату';
$lang['invoice_sent_to_client_success']          = 'Счет успешно отправлен клиенту';
$lang['invoice_sent_to_client_fail']             = 'Не удалось отправить счет';
$lang['invoice_reminder_send_problem']           = 'Не удалось отправить напоминание о просроченном счете';
$lang['invoice_overdue_reminder_sent']           = 'Напоминание о просроченном счете успешно отправлено';
$lang['invoice_details']                         = 'Информация о счете';
$lang['invoice_view']                            = 'Посмотреть';
$lang['invoice_select_customer']                 = 'Клиент';
$lang['invoice_add_edit_number']                 = 'Номер счета';
$lang['invoice_add_edit_date']                   = 'Дата счета';
$lang['invoice_add_edit_duedate']                = 'Оплата до';
$lang['invoice_add_edit_currency']               = 'Валюта';
$lang['invoice_add_edit_client_note']            = 'Примечание клиента';
$lang['invoice_add_edit_admin_note']             = 'Примечание администратора';
$lang['invoices_toggle_table_tooltip']           = 'Таблица';
$lang['edit_invoice_tooltip']                    = 'Изменить счет';
$lang['delete_invoice_tooltip']                  = 'Удалить счет. Примечание: все платежи по этому счету будут удалены (если таковые имеются).';
$lang['invoice_sent_to_email_tooltip']           = 'Отправить по эл. почте';
$lang['invoice_already_send_to_client_tooltip']  = 'Этот счет уже отправлен клиенту %s';
$lang['send_overdue_notice_tooltip']             = 'Отправить уведомление о просрочке платежа';
$lang['invoice_view_activity_tooltip']           = 'Журнал операций';
$lang['invoice_record_payment']                  = 'Зарегистрировать платеж';
$lang['invoice_send_to_client_modal_heading']    = 'Отправить счет клиенту';
$lang['invoice_send_to_client_attach_pdf']       = 'Прикрепить счет в формате PDF';
$lang['invoice_send_to_client_preview_template'] = 'Предпросмотр отправляемого сообщения';
$lang['invoice_dt_table_heading_number']         = 'Счет #';
$lang['invoice_dt_table_heading_date']           = 'Дата';
$lang['invoice_dt_table_heading_client']         = 'Клиент';
$lang['invoice_dt_table_heading_duedate']        = 'Оплата до';
$lang['invoice_dt_table_heading_amount']         = 'Сумма';
$lang['invoice_dt_table_heading_status']         = 'Статус';
$lang['record_payment_for_invoice']              = 'Запись оплаты для';
$lang['record_payment_amount_received']          = 'Полученная сумма';
$lang['record_payment_date']                     = 'Дата оплаты';
$lang['record_payment_leave_note']               = 'Оставить примечание';
$lang['invoice_payments_received']               = 'Полученные платежи';
$lang['invoice_record_payment_note_placeholder'] = 'Примечание администратора';
$lang['no_payments_found']                       = 'Платежи по этому счету не найдены';

# Payments
$lang['payments']                             = 'Платежи';
$lang['payment']                              = 'Платеж';
$lang['payment_lowercase']                    = 'платеж';
$lang['payments_table_number_heading']        = 'Платеж #';
$lang['payments_table_invoicenumber_heading'] = 'Счет #';
$lang['payments_table_mode_heading']          = 'Способ оплаты';
$lang['payments_table_date_heading']          = 'Дата';
$lang['payments_table_amount_heading']        = 'Сумма';
$lang['payments_table_client_heading']        = 'Клиент';
$lang['payment_not_exists']                   = 'Платеж не существует';
$lang['payment_edit_for_invoice']             = 'Оплата счета';
$lang['payment_edit_amount_received']         = 'Полученная сумма';
$lang['payment_edit_date']                    = 'Дата оплаты';

# Knowledge Base
$lang['kb_article_add_edit_subject']   = 'Тема';
$lang['kb_article_add_edit_group']     = 'Группа';
$lang['kb_string']                     = 'База знаний';
$lang['kb_article']                    = 'Статья';
$lang['kb_article_lowercase']          = 'статья';
$lang['kb_article_new_article']        = 'Новая статья';
$lang['kb_article_disabled']           = 'Откл.';
$lang['kb_article_description']        = 'Описание статьи';
$lang['kb_no_articles_found']          = 'Статьи не найдены';
$lang['kb_dt_article_name']            = 'Название статьи';
$lang['kb_dt_group_name']              = 'Группа';
$lang['new_group']                     = 'Новая группа';
$lang['kb_group_add_edit_name']        = 'Название группы';
$lang['kb_group_add_edit_description'] = 'Краткое описание';
$lang['kb_group_add_edit_disabled']    = 'Откл.';
$lang['kb_group_add_edit_note']        = 'Примечание: все статьи в этой группе будут скрыты, если установлен флажок "Откл."';
$lang['group_table_name_heading']      = 'Название';
$lang['group_table_isactive_heading']  = 'Активно';
$lang['kb_no_groups_found']            = 'Группы не найдены';

# Media
$lang['media_files'] = 'Файлы';

# Payment modes
$lang['new_payment_mode']           = 'Новый способ оплаты';
$lang['payment_modes']              = 'Способы оплаты';
$lang['payment_mode']               = 'Способ оплаты';
$lang['payment_mode_lowercase']     = 'способ оплаты';
$lang['payment_modes_dt_name']      = 'Название способа оплаты';
$lang['payment_mode_add_edit_name'] = 'Название способа оплаты';
$lang['payment_mode_edit_heading']  = 'Изменить способ оплаты';
$lang['payment_mode_add_heading']   = 'Добавить способ оплаты';

# Predefined Ticket Replies
$lang['new_predefined_reply']              = 'Новый заготовленный ответ';
$lang['predefined_replies']                = 'Готовые ответы';
$lang['predefined_reply']                  = 'Готовый ответ';
$lang['predefined_reply_lowercase']        = 'готовый ответ';
$lang['predefined_replies_dt_name']        = 'Название заготовленного ответа';
$lang['predefined_reply_add_edit_name']    = 'Название заготовленного ответа';
$lang['predefined_reply_add_edit_content'] = 'Ответ';

# Ticket Priorities
$lang['new_ticket_priority']           = 'Новый приоритет';
$lang['ticket_priorities']             = 'Приоритеты тикетов';
$lang['ticket_priority']               = 'Приоритет тикета';
$lang['ticket_priority_lowercase']     = 'приоритет тикета';
$lang['no_ticket_priorities_found']    = 'Приоритеты отсутствуют';
$lang['ticket_priority_dt_name']       = 'Название приоритета';
$lang['ticket_priority_add_edit_name'] = 'Название приоритета';

# Reports
$lang['kb_reports']                                       = 'Отчеты по статьям';
$lang['sales_reports']                                    = 'Отчеты по продажам';
$lang['reports_choose_kb_group']                          = 'Выберите группу';
$lang['report_kb_yes']                                    = 'Да';
$lang['report_kb_no']                                     = 'Нет';
$lang['report_kb_no_votes']                               = 'Голосов еще нет';
$lang['report_this_week_leads_conversions']               = 'Конверсия за эту неделю';
$lang['report_leads_sources_conversions']                 = 'Источник конверсии';
$lang['report_leads_monthly_conversions']                 = 'За месяц';
$lang['sales_report_heading']                             = 'Отчет по продажам';
$lang['report_sales_type_income']                         = 'Общий доход';
$lang['report_sales_type_customer']                       = 'Отчет по клиентам';
$lang['report_sales_base_currency_select_explanation']    = 'Вы должны выбрать валюту, потому что у вас есть счета в разной валюте';
$lang['report_sales_from_date']                           = 'От';
$lang['report_sales_to_date']                             = 'До настоящего времени';
$lang['report_sales_months_all_time']                     = 'За все время';
$lang['report_sales_months_six_months']                   = 'За последние 6 месяцев';
$lang['report_sales_months_twelve_months']                = 'За последние 12 месяцев';
$lang['reports_sales_generated_report']                   = 'Сформированный отчет';
$lang['reports_sales_dt_customers_client']                = 'Клиент';
$lang['reports_sales_dt_customers_total_invoices']        = 'Всего счетов';
$lang['reports_sales_dt_items_customers_amount']          = 'Сумма';
$lang['reports_sales_dt_items_customers_amount_with_tax'] = 'Сумма с учетом налога';

# Roles
$lang['new_role']           = 'Новая роль';
$lang['all_roles']          = 'Все роли';
$lang['roles']              = 'Роли сотрудников';
$lang['role']               = 'Роль';
$lang['role_lowercase']     = 'роль';
$lang['roles_total_users']  = 'Всего пользователей: ';
$lang['roles_dt_name']      = 'Название роли';
$lang['role_add_edit_name'] = 'Название роли';

# Service
$lang['new_service']           = 'Новая услуга';
$lang['services']              = 'Услуги';
$lang['service']               = 'Услуга';
$lang['service_lowercase']     = 'услуга';
$lang['services_dt_name']      = 'Название услуги';
$lang['service_add_edit_name'] = 'Название услуги';

# Settings
$lang['settings']                                                  = 'Настройки';
$lang['settings_updated']                                          = 'Настройки сохранены';
$lang['settings_save']                                             = 'Сохранить';
$lang['settings_group_general']                                    = 'Общие';
$lang['settings_group_localization']                               = 'Локализация';
$lang['settings_group_tickets']                                    = 'Тикеты';
$lang['settings_group_sales']                                      = 'Финансы';
$lang['settings_group_email']                                      = 'Эл. почта';
$lang['settings_group_clients']                                    = 'Клиенты';
$lang['settings_group_newsfeed']                                   = 'Новости';
$lang['settings_group_cronjob']                                    = 'Планировщик задач';
$lang['settings_yes']                                              = 'Да';
$lang['settings_no']                                               = 'Нет';
$lang['settings_clients_default_theme']                            = 'Тема для клиентов по умолчанию';
$lang['settings_clients_allow_registration']                       = 'Разрешить регистрацию клиентам';
$lang['settings_clients_allow_kb_view_without_registration']       = 'Разрешить просмотр базы знаний без регистрации';
$lang['settings_cron_send_overdue_reminder']                       = 'Отправлять напоминание о просроченном счете';
$lang['settings_cron_send_overdue_reminder_tooltip']               = 'Отправить письмо клиенту, когда статус счета обновлен на просроченный';
$lang['automatically_send_invoice_overdue_reminder_after']         = 'Отправить напоминание через (дней)';
$lang['automatically_resend_invoice_overdue_reminder_after']       = 'Повторно оправить напоминание через (дней)';
$lang['settings_email_host']                                       = 'Хост SMTP';
$lang['settings_email_port']                                       = 'Порт SMTP';
$lang['settings_email']                                            = 'Эл. почта';
$lang['settings_email_password']                                   = 'Пароль SMTP';
$lang['settings_email_charset']                                    = 'Кодировка письма';
$lang['settings_email_signature']                                  = 'Подпись в письме';
$lang['settings_general_company_logo']                             = 'Логотип компании';
$lang['settings_general_company_logo_tooltip']                     = 'Рекомендуемые размеры: 150 x 34px';
$lang['settings_general_company_remove_logo_tooltip']              = 'Удалить логотип';
$lang['settings_general_company_name']                             = 'Название компании';
$lang['settings_general_company_main_domain']                      = 'Основной сайт';
$lang['settings_general_use_knowledgebase']                        = 'Использование базы знаний';
$lang['settings_general_use_knowledgebase_tooltip']                = 'База знаний для чтения буде доступна клиентам';
$lang['settings_general_tables_limit']                             = 'Лимит страниц в таблице';
$lang['settings_general_default_staff_role']                       = 'Роль сотрудника по умолчанию';
$lang['settings_general_default_staff_role_tooltip']               = 'При добавлении нового сотрудника эта роль будет применена по умолчанию';
$lang['settings_localization_date_format']                         = 'Формат даты';
$lang['settings_localization_default_timezone']                    = 'Часовой пояс по умолчанию';
$lang['settings_localization_default_language']                    = 'Язык по умолчанию';
$lang['settings_newsfeed_max_file_upload_post']                    = 'Максимальный размер файлов (MB)';
$lang['settings_reminders_contracts']                              = 'Напоминание об истечении договора';
$lang['settings_reminders_contracts_tooltip']                      = 'Уведомление о напоминании об истечении в днях';
$lang['settings_tickets_use_services']                             = 'Использовать услуги';
$lang['settings_tickets_max_attachments']                          = 'Максимальное количество вложений в тикете';
$lang['settings_tickets_allow_departments_access']                 = 'Разрешить сотрудникам доступ только к тикетам, которые были направлены в их отдел';
$lang['settings_tickets_allowed_file_extensions']                  = 'Допустимые расширения для вложений';
$lang['settings_sales_general']                                    = 'Общие';
$lang['settings_sales_general_note']                               = 'Общие настройки';
$lang['settings_sales_invoice_prefix']                             = 'Префикс номера счета';
$lang['settings_sales_decimal_separator']                          = 'Десятичный разделитель';
$lang['settings_sales_thousand_separator']                         = 'Разделитель тысяч';
$lang['settings_sales_currency_placement']                         = 'Размещение валюты';
$lang['settings_sales_currency_placement_before']                  = 'Перед суммой';
$lang['settings_sales_currency_placement_after']                   = 'После суммы';
$lang['settings_sales_require_client_logged_in_to_view_invoice']   = 'Потребовать от клиента войти в систему для просмотра счета';
$lang['settings_sales_next_invoice_number']                        = 'Следующий номер счета';
$lang['settings_sales_next_invoice_number_tooltip']                = 'Установите в этом поле значение 1, чтобы счета начинались с самого начала';
$lang['settings_sales_decrement_invoice_number_on_delete']         = 'Менять номера существующих счетов после удаления др. счета';
$lang['settings_sales_decrement_invoice_number_on_delete_tooltip'] = 'Уменьшить номер последнего счета, если предпоследний счет удален? Напр.: Счет под номером 14 удаляется, тогда для счета под номером 15 будет изменен номер на 14. Если у вас в опции Удаление счета разрешено только для последнего счета стоит НЕТ, то для этой опции вы должны также выбрать НЕТ, чтобы номер последнего счета не изменялся.';
$lang['settings_sales_invoice_number_format']                      = 'Формат номера счета';
$lang['settings_sales_invoice_number_format_year_based']           = 'Год';
$lang['settings_sales_invoice_number_format_number_based']         = 'Номер (000001)';
$lang['settings_sales_company_info_note']                          = 'Эта информация будет отображаться на накладных/сметах/платежах и других документах в формате PDF, где информация о компании обязательна';
$lang['settings_sales_company_name']                               = 'Название компании';
$lang['settings_sales_address']                                    = 'Адрес';
$lang['settings_sales_city']                                       = 'Город';
$lang['settings_sales_country_code']                               = 'Страна';
$lang['settings_sales_postal_code']                                = 'Почтовый индекс';
$lang['settings_sales_phonenumber']                                = 'Телефон';

# Leads
$lang['new_lead']                          = 'Новый лид';
$lang['leads']                             = 'Лиды';
$lang['lead']                              = 'Лид';
$lang['lead_lowercase']                    = 'лид';
$lang['leads_all']                         = 'Все';
$lang['leads_canban_notes']                = 'Примечание: %s';
$lang['leads_canban_source']               = 'Источник: %s';
$lang['lead_new_source']                   = 'Новый источник';
$lang['lead_sources']                      = 'Источники лидов';
$lang['lead_source']                       = 'Источник лида';
$lang['lead_source_lowercase']             = 'источник лида';
$lang['leads_sources_not_found']           = 'Источники не найдены';
$lang['leads_sources_table_name']          = 'Источник';
$lang['leads_source_add_edit_name']        = 'Источник';
$lang['lead_new_status']                   = 'Новый статус';
$lang['lead_status']                       = 'Статус';
$lang['lead_status_lowercase']             = 'статус';
$lang['leads_status_table_name']           = 'Статус';
$lang['leads_status_add_edit_name']        = 'Название статуса';
$lang['leads_status_add_edit_order']       = 'Порядок';
$lang['lead_statuses_not_found']           = 'Статусы не найдены';
$lang['leads_search']                      = 'Поиск лидов';
$lang['leads_table_total']                 = 'Всего лидов: %s';
$lang['leads_dt_name']                     = 'Имя';
$lang['leads_dt_email']                    = 'Эл. почта';
$lang['leads_dt_phonenumber']              = 'Телефон';
$lang['leads_dt_assigned']                 = 'Прикреплен к';
$lang['leads_dt_status']                   = 'Статус';
$lang['leads_dt_last_contact']             = 'Последний контакт';
$lang['lead_add_edit_name']                = 'Имя';
$lang['lead_add_edit_email']               = 'Эл. почта';
$lang['lead_add_edit_phonenumber']         = 'Телефон';
$lang['lead_add_edit_source']              = 'Источник';
$lang['lead_add_edit_status']              = 'Статус';
$lang['lead_add_edit_assigned']            = 'Прикреплен к';
$lang['lead_add_edit_datecontacted']       = 'Дата контакта';
$lang['lead_add_edit_contacted_today']     = 'Связались сегодня';
$lang['lead_add_edit_activity']            = 'Журнал операций';
$lang['lead_add_edit_notes']               = 'Примечания';
$lang['lead_add_edit_add_note']            = 'Добавить примечание';
$lang['lead_not_contacted']                = 'Я не связывался с контактом';
$lang['lead_add_edit_contacted_this_lead'] = 'Я связался с контактом';

# Misc
$lang['access_denied'] = 'Доступ запрещен';
$lang['prev']          = 'назад';
$lang['next']          = 'далее';

# Datatables
$lang['dt_paginate_first']    = 'В начало';
$lang['dt_paginate_last']     = 'В конец';
$lang['dt_paginate_next']     = 'Далее';
$lang['dt_paginate_previous'] = 'Назад';
$lang['dt_search']            = 'Поиск:';
$lang['dt_zero_records']      = 'Нет подходящих записей';
$lang['dt_loading_records']   = 'Загружаем...';
$lang['dt_length_menu']       = 'Показать _MENU_ записей';
$lang['dt_info_filtered']     = '(отфильтровано из _MAX_ {0})';
$lang['dt_info_empty']        = 'Показано 0-0 из 0 ';
$lang['dt_info']              = 'Показано _START_ - _END_ из _TOTAL_ ';
$lang['dt_empty_table']       = 'Ничего не нашли';
$lang['dt_sort_ascending']    = 'активируйте, чтобы сортировать по возрастанию';
$lang['dt_sort_descending']   = 'активируйте, чтобы сортировать по убыванию';

# Invoice Activity Log
$lang['user_sent_overdue_reminder'] = '%s отправлено уведомление о просроченном платеже';

# Weekdays
$lang['wd_monday']    = 'Понедельник';
$lang['wd_tuesday']   = 'Вторник';
$lang['wd_thursday']  = 'Четверг';
$lang['wd_wednesday'] = 'Среда';
$lang['wd_friday']    = 'Пятница';
$lang['wd_saturday']  = 'Суббота';
$lang['wd_sunday']    = 'Воскресенье';

# Admin Left Sidebar
$lang['als_dashboard']             = 'Консоль';
$lang['als_clients']               = 'Клиенты';
$lang['als_leads']                 = 'Лиды';
$lang['als_contracts']             = 'Договоры';
$lang['als_sales']                 = 'Продажи';
$lang['als_staff']                 = 'Сотрудники';
$lang['als_tasks']                 = 'Задачи';
$lang['als_kb']                    = 'База знаний';
$lang['als_media']                 = 'Медиафайлы';
$lang['als_reports']               = 'Отчеты';
$lang['als_reports_sales_submenu'] = 'Продажи';
$lang['als_reports_leads_submenu'] = 'Лиды';
$lang['als_kb_articles_submenu']   = 'Статьи БЗ';
$lang['als_utilities']             = 'Утилиты';
$lang['als_announcements_submenu'] = 'Объявления';
$lang['als_calendar_submenu']      = 'Календарь';
$lang['als_activity_log_submenu']  = 'Журнал операций';

# Admin Customizer Sidebar
$lang['acs_ticket_priority_submenu']           = 'Приоритет';
$lang['acs_ticket_statuses_submenu']           = 'Статусы';
$lang['acs_ticket_predefined_replies_submenu'] = 'Готовые ответы';
$lang['acs_ticket_services_submenu']           = 'Услуги';
$lang['acs_departments']                       = 'Отделы';
$lang['acs_leads']                             = 'Лиды';
$lang['acs_leads_sources_submenu']             = 'Источники';
$lang['acs_leads_statuses_submenu']            = 'Статусы';
$lang['acs_sales_taxes_submenu']               = 'Налоговые ставки';
$lang['acs_sales_currencies_submenu']          = 'Валюты';
$lang['acs_sales_payment_modes_submenu']       = 'Способы оплаты';
$lang['acs_email_templates']                   = 'Шаблоны писем';
$lang['acs_roles']                             = 'Роли';
$lang['acs_settings']                          = 'Настройки';

# Tickets
$lang['new_ticket']                                          = 'Открыть тикет';
$lang['tickets']                                             = 'Тикеты';
$lang['ticket']                                              = 'Тикет';
$lang['ticket_lowercase']                                    = 'тикет';
$lang['support_tickets']                                     = 'Поддержка тикетов';
$lang['support_ticket']                                      = 'Поддержка тикета';
$lang['ticket_settings_to']                                  = 'От';
$lang['ticket_settings_email']                               = 'Эл. почты';
$lang['ticket_settings_departments']                         = 'Выберите отдел';
$lang['ticket_settings_service']                             = 'Услуга';
$lang['ticket_settings_priority']                            = 'Приоритет';
$lang['ticket_settings_subject']                             = 'Тема';
$lang['ticket_settings_assign_to']                           = 'Назначить тикет (по умолчанию это текущий пользователь)';
$lang['ticket_add_body']                                     = 'Сообщение';
$lang['ticket_add_attachments']                              = 'Вложения';
$lang['ticket_no_reply_yet']                                 = 'Нет ответа';
$lang['new_ticket_added_successfully']                       = 'Тикет #%s успешно добавлен';
$lang['replied_to_ticket_successfully']                      = 'Ответ на тикет #%s добавлен';
$lang['ticket_settings_updated_successfully']                = 'Настройки тикета обновлены';
$lang['ticket_settings_updated_successfully_and_reassigned'] = 'Настройки тикета обновлены - переведен в отдел %s';
$lang['ticket_dt_subject']                                   = 'Тема';
$lang['ticket_dt_department']                                = 'Отдел';
$lang['ticket_dt_service']                                   = 'Услуга';
$lang['ticket_dt_submitter']                                 = 'Клиент';
$lang['ticket_dt_status']                                    = 'Статус';
$lang['ticket_dt_priority']                                  = 'Приоритет';
$lang['ticket_dt_last_reply']                                = 'Последний ответ';
$lang['ticket_single_add_reply']                             = 'Ответить';
$lang['ticket_single_add_note']                              = 'Добавить примечание';
$lang['ticket_single_other_user_tickets']                    = 'Другие тикеты';
$lang['ticket_single_settings']                              = 'Настройки';
$lang['ticket_single_priority']                              = 'Приоритет: %s';
$lang['ticket_single_last_reply']                            = 'Последний ответ: %s';
$lang['ticket_single_ticket_note_by']                        = 'Примечание от %s';
$lang['ticket_single_note_added']                            = 'Примечание добавлено: %s';
$lang['ticket_single_change_status']                         = 'Выберите статус';
$lang['ticket_single_assign_to_me_on_update']                = 'Назначить этот тикет мне автоматически';
$lang['ticket_single_insert_predefined_reply']               = 'Вставить готовый ответ';
$lang['ticket_single_insert_knowledge_base_link']            = 'Вставить ссылку на статью в базе знаний';
$lang['ticket_single_attachments']                           = 'Вложения';
$lang['ticket_single_add_response']                          = 'Добавить ответ';
$lang['ticket_single_note_heading']                          = 'Примечание';
$lang['ticket_single_add_note']                              = 'Добавить примечание';
$lang['ticket_settings_none_assigned']                       = 'Ничего';
$lang['ticket_status_changed_successfully']                  = 'Статус тикета изменен';
$lang['ticket_status_changed_fail']                          = 'Проблема изменения статуса';
$lang['ticket_staff_string']                                 = 'Сотрудники';
$lang['ticket_client_string']                                = 'Клиент';
$lang['ticket_posted']                                       = 'Добавлено: %s';
$lang['ticket_access_by_department_denied']                  = 'У Вас нет доступа к этому тикету. Данный тикет относится к другому отделу.';

# Staff
$lang['new_staff']                                     = 'Новый сотрудник';
$lang['staff_members']                                 = 'Сотрудники';
$lang['staff_member']                                  = 'Сотрудник';
$lang['staff_member_lowercase']                        = 'сотрудник';
$lang['staff_profile_updated']                         = 'Ваш профиль обновлен';
$lang['staff_old_password_incorrect']                  = 'Ваш старый пароль неверный';
$lang['staff_password_changed']                        = 'Ваш пароль был изменен';
$lang['staff_problem_changing_password']               = 'При изменении пароля возникли проблемы';
$lang['staff_profile_string']                          = 'Профиль';
$lang['staff_cant_remove_main_admin']                  = 'Не удается удалить главного администратора';
$lang['staff_cant_remove_yourself_from_admin']         = 'Вы не можете удалить себя в роли администратора';
$lang['staff_dt_name']                                 = 'Имя и Фамилия';
$lang['staff_dt_email']                                = 'Эл. почта';
$lang['staff_dt_last_Login']                           = 'Последний вход';
$lang['staff_dt_active']                               = 'Активный';
$lang['staff_add_edit_firstname']                      = 'Имя';
$lang['staff_add_edit_lastname']                       = 'Фамилия';
$lang['staff_add_edit_email']                          = 'Эл. почта';
$lang['staff_add_edit_phonenumber']                    = 'Телефон';
$lang['staff_add_edit_facebook']                       = 'Facebook';
$lang['staff_add_edit_linkedin']                       = 'LinkedIn';
$lang['staff_add_edit_skype']                          = 'Skype';
$lang['staff_add_edit_departments']                    = 'Отдел';
$lang['staff_add_edit_role']                           = 'Роль';
$lang['staff_add_edit_permissions']                    = 'Права сотрудника';
$lang['staff_add_edit_administrator']                  = 'Администратор';
$lang['staff_add_edit_password']                       = 'Пароль';
$lang['staff_add_edit_password_note']                  = 'Примечание: если вы измените это поле, пароль пользователя будет изменен.';
$lang['staff_add_edit_password_last_changed']          = 'Последнее изменение пароля';
$lang['staff_add_edit_notes']                          = 'Примечания';
$lang['staff_add_edit_note_description']               = 'Описание примечания';
$lang['staff_notes_table_description_heading']         = 'Примечание';
$lang['staff_notes_table_addedfrom_heading']           = 'Добавил(а)';
$lang['staff_notes_table_dateadded_heading']           = 'Дата добавления';
$lang['staff_admin_profile']                           = 'Это профиль администратора';
$lang['staff_profile_notifications']                   = 'Уведомления';
$lang['staff_profile_departments']                     = 'Отделы';
$lang['staff_edit_profile_image']                      = 'Фото';
$lang['staff_edit_profile_your_departments']           = 'Отделы';
$lang['staff_edit_profile_change_your_password']       = 'Изменить пароль';
$lang['staff_edit_profile_change_old_password']        = 'Старый пароль';
$lang['staff_edit_profile_change_new_password']        = 'Новый пароль';
$lang['staff_edit_profile_change_repeat_new_password'] = 'Повторите новый пароль';

# Staff Tasks
$lang['new_task']                           = 'Новая задача';
$lang['tasks']                              = 'Задачи';
$lang['task']                               = 'Задача';
$lang['task_lowercase']                     = 'задача';
$lang['comment_string']                     = 'Комментарий';
$lang['task_marked_as_complete']            = 'Задача выполнена';
$lang['task_follower_removed']              = 'Задача успешно удалена';
$lang['task_assignee_removed']              = 'Задача успешно удалена';
$lang['task_no_assignees']                  = 'Никто не назначен';
$lang['task_no_followers']                  = 'Никто не подписан';
$lang['task_list_all']                      = 'Все';
$lang['task_list_not_assigned']             = 'Не назначены';
$lang['task_list_duedate_passed']           = 'Дата отправления';
$lang['tasks_dt_name']                      = 'Название';
$lang['task_single_priority']               = 'Приоритет';
$lang['task_single_start_date']             = 'Дата начала';
$lang['task_single_due_date']               = 'Срок';
$lang['task_single_finished']               = 'Завершенный';
$lang['task_single_mark_as_complete']       = 'Отметить как завершенный';
$lang['task_single_edit']                   = 'Редактировать';
$lang['task_single_delete']                 = 'Удалить';
$lang['task_single_assignees']              = 'Исполнители';
$lang['task_single_assignees_select_title'] = 'Добавить исполнителя';
$lang['task_single_followers']              = 'Наблюдатели';
$lang['task_single_followers_select_title'] = 'Добавить наблюдателей';
$lang['task_single_add_new_comment']        = 'Добавить комментарий';
$lang['task_add_edit_subject']              = 'Название задачи';
$lang['task_add_edit_priority']             = 'Приоритет';
$lang['task_priority_low']                  = 'Низкий';
$lang['task_priority_medium']               = 'Средний';
$lang['task_priority_high']                 = 'Высокий';
$lang['task_priority_urgent']               = 'Неотложный';
$lang['task_add_edit_start_date']           = 'Дата начала';
$lang['task_add_edit_due_date']             = 'Срок';
$lang['task_add_edit_description']          = 'Описание задания';

# Taxes
$lang['new_tax']           = 'Новый налог';
$lang['taxes']             = 'Налоги';
$lang['tax']               = 'Налог';
$lang['tax_lowercase']     = 'налог';
$lang['tax_dt_name']       = 'Название налога';
$lang['tax_dt_rate']       = 'Ставка (процент)';
$lang['tax_add_edit_name'] = 'Название налога';
$lang['tax_add_edit_rate'] = 'Ставка (процент)';
$lang['tax_edit_title']    = 'Изменить налог';
$lang['tax_add_title']     = 'Добавить налог';

# Ticket Statuses
$lang['new_ticket_status']            = 'Добавить статус';
$lang['ticket_statuses']              = 'Статусы';
$lang['ticket_status']                = 'Статус тикета';
$lang['ticket_status_lowercase']      = 'статус тикета';
$lang['ticket_statuses_dt_name']      = 'Название статуса';
$lang['no_ticket_statuses_found']     = 'Статусы не найдены';
$lang['ticket_statuses_table_total']  = 'Всего %s';
$lang['ticket_status_add_edit_name']  = 'Название статуса';
$lang['ticket_status_add_edit_color'] = 'Цвет';
$lang['ticket_status_add_edit_order'] = 'Позиция статуса';

# Todos
$lang['new_todo']                  = 'Новое задание';
$lang['my_todos']                  = 'Список моих заданий';
$lang['todo']                      = 'Задание';
$lang['todo_lowercase']            = 'задание';
$lang['todo_status_changed']       = 'Статус изменен';
$lang['todo_add_title']            = 'Добавить новое задание';
$lang['add_new_todo_description']  = 'Описание';
$lang['no_finished_todos_found']   = 'Нет выполненных заданий';
$lang['no_unfinished_todos_found'] = 'Нет личных заданий';
$lang['unfinished_todos_title']    = 'Незаконченные задания';
$lang['finished_todos_title']      = 'Последние выполненные задания';

# Utilities
$lang['utility_activity_log']                        = 'Журнал операций';
$lang['utility_activity_log_filter_by_date']         = 'Фильтр по дате';
$lang['utility_activity_log_dt_description']         = 'Описание';
$lang['utility_activity_log_dt_date']                = 'Дата';
$lang['utility_activity_log_dt_staff']               = 'Сотрудник';
$lang['utility_calendar_new_event_title']            = 'Добавить новое событие';
$lang['utility_calendar_new_event_start_date']       = 'Дата начала';
$lang['utility_calendar_new_event_end_date']         = 'Дата окончания';
$lang['utility_calendar_new_event_make_public']      = 'Для всех';
$lang['utility_calendar_event_added_successfully']   = 'Новое событие успешно добавлено';
$lang['utility_calendar_event_deleted_successfully'] = 'Событие удалено';
$lang['utility_calendar_new_event_placeholder']      = 'Заголовок события';

# Navigation
$lang['nav_notifications']          = 'Уведомления';
$lang['nav_my_profile']             = 'Мой профиль';
$lang['nav_edit_profile']           = 'Изменить профиль';
$lang['nav_logout']                 = 'Выйти';
$lang['nav_no_notifications']       = 'Нет уведомлений';
$lang['nav_view_all_notifications'] = 'Посмотреть все уведомления';
$lang['nav_notifications_tooltip']  = 'Посмотреть уведомления';

# Footer
$lang['clients_copyright'] = '© Все права защищены. %s';

# Contracts
$lang['clients_contracts']               = 'Договоры';
$lang['clients_contracts_dt_subject']    = 'Тема';
$lang['clients_contracts_dt_start_date'] = 'Дата начала';
$lang['clients_contracts_dt_end_date']   = 'Дата окончания';

# Home
$lang['clients_quick_invoice_info']           = 'Краткая информация о счетах';
$lang['clients_home_currency_select_tooltip'] = 'Вам необходимо выбрать основную валюту, потому что у вас есть счета в другой валюте';

# Invoices
$lang['clients_invoice_html_btn_download'] = 'Скачать';
$lang['clients_my_invoices']               = 'Счета на оплату';
$lang['clients_invoice_dt_number']         = 'Счет #';
$lang['clients_invoice_dt_date']           = 'Дата';
$lang['clients_invoice_dt_duedate']        = 'Дата оплаты';
$lang['clients_invoice_dt_amount']         = 'Сумма';
$lang['clients_invoice_dt_status']         = 'Статус';

# Profile
$lang['clients_profile_heading'] = 'Профиль';

# Used for edit profile and register START
$lang['clients_firstname'] = 'Имя';
$lang['clients_lastname']  = 'Фамилия';
$lang['clients_email']     = 'Эл. почта';
$lang['clients_company']   = 'Компания';
$lang['clients_vat']       = 'ИНН';
$lang['clients_phone']     = 'Телефон';
$lang['clients_country']   = 'Страна';
$lang['clients_city']      = 'Город';
$lang['clients_address']   = 'Адрес';
$lang['clients_zip']       = 'Индекс';
$lang['clients_state']     = 'Область';
# Used for edit profile and register END

$lang['clients_register_password']                    = 'Пароль';
$lang['clients_register_password_repeat']             = 'Повторите пароль';
$lang['clients_edit_profile_update_btn']              = 'Обновить';
$lang['clients_edit_profile_change_password_heading'] = 'Изменить пароль';
$lang['clients_edit_profile_old_password']            = 'Старый пароль';
$lang['clients_edit_profile_new_password']            = 'Новый пароль';
$lang['clients_edit_profile_new_password_repeat']     = 'Повторите пароль';
$lang['clients_edit_profile_change_password_btn']     = 'Изменить пароль';
$lang['clients_profile_last_changed_password']        = 'Последнее изменение пароля %s';

# Knowledge base
$lang['clients_knowledge_base']                    = 'База знаний';
$lang['clients_knowledge_base_articles_not_found'] = 'Нет записей';
$lang['clients_knowledge_base_find_useful']        = 'Вы нашли эту статью полезной?';
$lang['clients_knowledge_base_find_useful_yes']    = 'Да';
$lang['clients_knowledge_base_find_useful_no']     = 'Нет';
$lang['clients_article_only_1_vote_today']         = 'Вы можете голосовать раз в 24 часа';
$lang['clients_article_voted_thanks_for_feedback'] = 'Спасибо за ваш отзыв!';

# Tickets
$lang['clients_ticket_open_subject']               = 'Открыть тикет';
$lang['clients_ticket_open_departments']           = 'Отдел';
$lang['clients_tickets_heading']                   = 'Поддержка тикетов';
$lang['clients_ticket_open_service']               = 'Услуга';
$lang['clients_ticket_open_priority']              = 'Приоритет';
$lang['clients_ticket_open_body']                  = 'Сообщение';
$lang['clients_ticket_attachments']                = 'Вложения';
$lang['clients_single_ticket_string']              = 'Тикет';
$lang['clients_single_ticket_replied']             = 'Ответил(а): %s';
$lang['clients_single_ticket_information_heading'] = 'Информация';
$lang['clients_tickets_dt_number']                 = 'Тикет #';
$lang['clients_tickets_dt_subject']                = 'Тема';
$lang['clients_tickets_dt_department']             = 'Отдел';
$lang['clients_tickets_dt_service']                = 'Услуга';
$lang['clients_tickets_dt_status']                 = 'Статус';
$lang['clients_tickets_dt_last_reply']             = 'Последний ответ';
$lang['clients_ticket_single_department']          = 'Отдел: %s';
$lang['clients_ticket_single_submitted']           = 'Отправлено: %s';
$lang['clients_ticket_single_status']              = 'Статус:';
$lang['clients_ticket_single_priority']            = 'Приоритет: %s';
$lang['clients_ticket_single_add_reply_btn']       = 'Ответить';
$lang['clients_ticket_single_add_reply_heading']   = 'Ответить на тикет';

# Login
$lang['clients_login_heading_no_register'] = 'Авторизация';
$lang['clients_login_heading_register']    = 'Пожалуйста, войдите или зарегистрируйтесь';
$lang['clients_login_email']               = 'Эл. почта';
$lang['clients_login_password']            = 'Пароль';
$lang['clients_login_remember']            = 'Запомнить меня';
$lang['clients_login_login_string']        = 'Войти';

# Register
$lang['clients_register_string']  = 'Регистрация';
$lang['clients_register_heading'] = 'Регистрация';

# Navigation
$lang['clients_nav_login']     = 'Войти';
$lang['clients_nav_register']  = 'Регистрация';
$lang['clients_nav_invoices']  = 'Счета на оплату';
$lang['clients_nav_contracts'] = 'Договоры';
$lang['clients_nav_kb']        = 'База знаний';
$lang['clients_nav_profile']   = 'Профиль';
$lang['clients_nav_logout']    = 'Выйти';

# Version 1.0.1
$lang['payment_receipt']                               = 'Квитанция об оплате';
$lang['payment_for_string']                            = 'Оплата';
$lang['payment_date']                                  = 'Дата оплаты:';
$lang['payment_view_mode']                             = 'Способ оплаты:';
$lang['payment_total_amount']                          = 'Итого';
$lang['payment_table_invoice_number']                  = 'Номер счета';
$lang['payment_table_invoice_date']                    = 'Дата счета';
$lang['payment_table_invoice_amount_total']            = 'Сумма счета';
$lang['payment_table_payment_amount_total']            = 'Сумма платежа';
$lang['payments_table_transaction_id']                 = 'Транзакция ID: %s';
$lang['payment_getaway_token_not_found']               = 'Не найдено';
$lang['online_payment_recorded_success']               = 'Оплата зарегистрирована';
$lang['online_payment_recorded_success_fail_database'] = 'Оплата прошла успешно, но не удалось вставить платеж в базу данных, обратитесь к администратору';

# Leads
$lang['lead_convert_to_client']                = 'Конвертировать в клиента';
$lang['lead_convert_to_email']                 = 'Эл. почта';
$lang['lead_convert_to_client_firstname']      = 'Имя';
$lang['lead_convert_to_client_lastname']       = 'Фамилия';
$lang['lead_email_already_exists']             = 'Эл. почта уже существует в списках клиентов';
$lang['lead_to_client_base_converted_success'] = 'Контакт успешно преобразован в клиента';
$lang['lead_have_client_profile']              = 'У этого контакта есть профиль клиента.';
$lang['lead_converted_edit_client_profile']    = 'Изменить профиль';

# Invoices
$lang['view_invoice_as_customer_tooltip']                                     = 'Посмотреть счет как клиент';
$lang['invoice_add_edit_recurring']                                           = 'Повторить счет?';
$lang['invoice_add_edit_recurring_no']                                        = 'Нет';
$lang['invoice_add_edit_recurring_month']                                     = 'Каждый %s месяц';
$lang['invoice_add_edit_recurring_months']                                    = 'Каждые %s месяцев';
$lang['invoices_list_all']                                                    = 'Все';
$lang['invoices_list_not_have_payment']                                       = 'Счет без оплаты';
$lang['invoices_list_recurring']                                              = 'Повторяющиеся счета';
$lang['invoices_list_made_payment_by']                                        = 'Произведена оплата по %s';
$lang['invoices_create_invoice_from_recurring_only_on_paid_invoices']         = 'Создать новую накладную с текущими счетом, только если счет со статусом оплачен?';
$lang['invoices_create_invoice_from_recurring_only_on_paid_invoices_tooltip'] = 'Если в этом поле установлено значение да и повторяющиеся счета не со статусом оплачен, новый счет не будет создан.';
$lang['view_invoice_pdf_link_pay']                                            = 'Оплатить счет';

# Payment modes
$lang['payment_mode_add_edit_description']         = 'Банковский счет / Описание';
$lang['payment_mode_add_edit_description_tooltip'] = 'Вы можете здесь указать банковские реквизиты. Будет отображаться на странице счета';
$lang['payment_modes_dt_description']              = 'Банковские счета / Описание';
$lang['payment_modes_add_edit_announcement']       = 'Примечание: способы оплаты, перечисленные ниже относятся к оффлайновым методам. Онлайн-оплата может быть настроена в разделе Настройки -> Настройки -> Системы оплаты';
$lang['payment_mode_add_edit_active']              = 'Активно';
$lang['payment_modes_dt_active']                   = 'Активно';

# Contracts
$lang['contract_not_found'] = 'Договор не найден. Может быть его удалили, проверьте журнал активности';

# Settings
$lang['setting_bar_heading']                               = 'Настройка';
$lang['settings_group_online_payment_modes']               = 'Системы оплаты';
$lang['settings_paymentmethod_mode_label']                 = 'Название';
$lang['settings_paymentmethod_active']                     = 'Активность';
$lang['settings_paymentmethod_currencies']                 = 'Валюты (разделенные запятыми)';
$lang['settings_paymentmethod_testing_mode']               = 'Включить режим тестирования';
$lang['settings_paymentmethod_paypal_username']            = 'Имя пользователя PayPal API';
$lang['settings_paymentmethod_paypal_password']            = 'Пароль PayPal API';
$lang['settings_paymentmethod_paypal_signature']           = 'Подпись API';
$lang['settings_paymentmethod_stripe_api_secret_key']      = 'Секретный ключ Stripe API';
$lang['settings_paymentmethod_stripe_api_publishable_key'] = 'Публичный ключ Stripe';
$lang['settings_limit_top_search_bar_results']             = 'Лимит результатов поиска в панели поиска';

## Clients
$lang['client_phonenumber'] = 'Телефон';

# Main Clients
$lang['clients_register']                          = 'Регистрация';
$lang['clients_profile_updated']                   = 'Ваш профиль был обновлен';
$lang['clients_successfully_registered']           = 'Спасибо за регистрацию';
$lang['clients_account_created_but_not_logged_in'] = 'Ваша учетная запись была создана, но вы не вошли в систему автоматически. Пожалуйста, попробуйте войти в систему';

# Tickets
$lang['clients_tickets_heading'] = 'Тикеты поддержки';

# Payments
$lang['payment_for_invoice'] = 'Оплата счета';
$lang['payment_total']       = 'Итого: %s';

# Invoice
$lang['invoice_html_online_payment']             = 'Онлайн оплата';
$lang['invoice_html_online_payment_button_text'] = 'Оплатить сейчас';
$lang['invoice_html_payment_modes_not_selected'] = 'Пожалуйста, выберите способ оплаты';
$lang['invoice_html_amount_blank']               = 'Общая сумма не может быть пустой или с нулевым значением';
$lang['invoice_html_offline_payment']            = 'Оффлайн оплаты';
$lang['invoice_html_amount']                     = 'Сумма';
# Version 1.0.2
# DataTables
$lang['dt_button_column_visibility'] = 'Видимость';
$lang['dt_button_reload']            = 'Обновить';
$lang['dt_button_excel']             = 'Excel';
$lang['dt_button_csv']               = 'CSV';
$lang['dt_button_pdf']               = 'PDF';
$lang['dt_button_print']             = 'Печать';
$lang['is_not_active_export']        = 'Нет';
$lang['is_active_export']            = 'Да';

# Invoice
$lang['invoice_add_edit_advanced_options']                = 'Дополнительные опции';
$lang['invoice_add_edit_allowed_payment_modes']           = 'Доступные способы оплаты счета';
$lang['invoice_add_edit_recurring_invoices_from_invoice'] = 'Создать счет из повторяющегося счета';
$lang['invoice_add_edit_no_payment_modes_found']          = 'Способы оплаты не найдены.';
$lang['invoice_html_total_pay']                           = 'Итого: %s';

# Email templates
$lang['email_templates_table_heading_name'] = 'Шаблоны';

# General
$lang['discount_type']            = 'Тип скидки';
$lang['discount_type_after_tax']  = 'После';
$lang['discount_type_before_tax'] = 'До налога';
$lang['terms_and_conditions']     = 'Условия';
$lang['reference_no']             = 'Ссылка #';
$lang['no_discount']              = 'Нет скидки';
$lang['view_stats_tooltip']       = 'Краткая статистика';

# Clients
$lang['zip_from_date']            = 'От даты:';
$lang['zip_to_date']              = 'До даты:';
$lang['client_zip_payments']      = 'Платежи';
$lang['client_zip_invoices']      = 'Счета';
$lang['client_zip_estimates']     = 'Сметы';
$lang['client_zip_status']        = 'Статус';
$lang['client_zip_status_all']    = 'Все';
$lang['client_zip_payment_modes'] = 'Оплата от';
$lang['client_zip_no_data_found'] = 'Ничего не нашли';

# Payments
$lang['payment_mode']         = 'Способ оплаты';
$lang['payment_view_heading'] = 'Оплата';

# Settings
$lang['settings_allow_payment_amount_to_be_modified']               = 'Разрешить клиенту изменять сумму оплаты (для онлайн платежей)';
$lang['settings_delete_only_on_last_invoice']                       = 'Удаление разрешено только для последнего счета';
$lang['settings_sales_estimate_prefix']                             = 'Префикс сметы';
$lang['settings_sales_next_estimate_number']                        = 'Следующий номер сметы';
$lang['settings_sales_next_estimate_number_tooltip']                = 'Установите в этом поле значение 1, Если вы хотите начать с начала';
$lang['settings_sales_decrement_estimate_number_on_delete']         = 'Менять номера существующих смет после удаления др. смет';
$lang['settings_sales_decrement_estimate_number_on_delete_tooltip'] = 'Уменьшить номер последней сметы, если предпоследняя смета удалена? Напр.: Смета под номером 14 удаляется, тогда для сметы под номером 15 будет изменен номер на 14. Если у вас в опции Удаление разрешено только для последней сметы стоит НЕТ, то для этой опции вы должны также выбрать НЕТ, чтобы номер последней сметы не изменялся.';
$lang['settings_sales_estimate_number_format']                      = 'Формат нумерации смет';
$lang['settings_sales_estimate_number_format_year_based']           = 'Год';
$lang['settings_sales_estimate_number_format_number_based']         = 'Номер (000001)';
$lang['settings_delete_only_on_last_estimate']                      = 'Удаление сметы разрешено только в последнем счете на оплату';
$lang['settings_send_test_email_heading']                           = 'Отправить тестовое письмо';
$lang['settings_send_test_email_subheading']                        = 'Отправить тестовое письмо, чтобы убедиться, что настройки SMTP настроены правильно.';
$lang['settings_send_test_email_string']                            = 'Эл. почта';
$lang['settings_smtp_settings_heading']                             = 'Настройки SMTP';
$lang['settings_smtp_settings_subheading']                          = 'Настройки почты';
$lang['settings_sales_heading_general']                             = 'Основные';
$lang['settings_sales_heading_invoice']                             = 'Счет на оплату';
$lang['settings_sales_heading_estimates']                           = 'Сметы';
$lang['settings_sales_cron_invoice_heading']                        = 'Счет на оплату';

# Tasks
$lang['tasks_dt_datestart'] = 'Дата начала';

# Invoice General
$lang['invoice_discount'] = 'Скидка';

# Settings
$lang['settings_rtl_support_admin']                                   = 'RTL в панели админ. (Справа налево)';
$lang['settings_rtl_support_client']                                  = 'RTL в кабинете клиента (Справа налево)';
$lang['settings_estimate_auto_convert_to_invoice_on_client_accept']   = 'Автоматически преобразовать смету в счет на оплату, после того, как клиент утвердит ее.';
$lang['settings_exclude_estimate_from_client_area_with_draft_status'] = 'Исключить сметы со статусом "черновик" от клиентов';

# Months
$lang['January']   = 'Январь';
$lang['February']  = 'Февраль';
$lang['March']     = 'Март';
$lang['April']     = 'Апрель';
$lang['May']       = 'Май';
$lang['June']      = 'Июнь';
$lang['July']      = 'Июль';
$lang['August']    = 'Август';
$lang['September'] = 'Сентябрь';
$lang['October']   = 'Октябрь';
$lang['November']  = 'Ноябрь';
$lang['December']  = 'Декабрь';

# Time ago function translate
$lang['time_ago_just_now']  = 'только что';
$lang['time_ago_minute']    = 'минуту назад';
$lang['time_ago_minutes']   = '%s минут назад';
$lang['time_ago_hour']      = 'час назад';
$lang['time_ago_hours']     = '%s час. назад';
$lang['time_ago_yesterday'] = 'вчера';
$lang['time_ago_days']      = '%s дн. назад';
$lang['time_ago_week']      = 'неделю назад';
$lang['time_ago_weeks']     = '%s нед. назад';
$lang['time_ago_month']     = 'месяц назад';
$lang['time_ago_months']    = '%s мес. назад';
$lang['time_ago_year']      = 'год назад';
$lang['time_ago_years']     = '%s год. назад';

# Estimates
$lang['estimates']                                = 'Сметы';
$lang['estimate']                                 = 'Смета';
$lang['estimate_lowercase']                       = 'Смета';
$lang['create_new_estimate']                      = 'Добавить смету';
$lang['view_estimate']                            = 'Посмотреть смету';
$lang['estimate_sent_to_client_success']          = 'Смета отправлена клиенту';
$lang['estimate_sent_to_client_fail']             = 'Проблемы при отправке сметы';
$lang['estimate_view']                            = 'Посмотреть смету';
$lang['estimate_select_customer']                 = 'Клиент';
$lang['estimate_add_edit_number']                 = 'Номер сметы';
$lang['estimate_add_edit_date']                   = 'Дата сметы';
$lang['estimate_add_edit_expirydate']             = 'Срок действия';
$lang['estimate_add_edit_currency']               = 'Валюта';
$lang['estimate_add_edit_client_note']            = 'Примечание клиента';
$lang['estimate_add_edit_admin_note']             = 'Примечание администратора';
$lang['estimates_toggle_table_tooltip']           = 'Таблица';
$lang['estimate_add_edit_advanced_options']       = 'Дополнительные опции';
$lang['estimate_to']                              = 'Для';
$lang['estimates_list_all']                       = 'Все';
$lang['estimate_invoiced_date']                   = 'Смета выставлена на %s';
$lang['edit_estimate_tooltip']                    = 'Изменить смету';
$lang['delete_estimate_tooltip']                  = 'Удалить смету';
$lang['estimate_sent_to_email_tooltip']           = 'Отправить на почту';
$lang['estimate_already_send_to_client_tooltip']  = 'Эта смета уже отправлена клиенту %s';
$lang['estimate_view_activity_tooltip']           = 'Журнал операций';
$lang['estimate_send_to_client_modal_heading']    = 'Отправить смету клиенту';
$lang['estimate_send_to_client_attach_pdf']       = 'Приложить смету в формате PDF';
$lang['estimate_send_to_client_preview_template'] = 'Предварительный просмотр сообщения';
$lang['estimate_dt_table_heading_number']         = 'Смета #';
$lang['estimate_dt_table_heading_date']           = 'Дата';
$lang['estimate_dt_table_heading_client']         = 'Клиент';
$lang['estimate_dt_table_heading_expirydate']     = 'Действует до';
$lang['estimate_dt_table_heading_amount']         = 'Сумма';
$lang['estimate_dt_table_heading_status']         = 'Статус';
$lang['estimate_convert_to_invoice']              = 'Преобразовать в счет на оплату';

# Clients
$lang['client_payments_tab'] = 'Платежи';

# Estimate General
$lang['estimate_pdf_heading']            = 'СМЕТА';
$lang['estimate_table_item_heading']     = 'Позиция';
$lang['estimate_table_quantity_heading'] = 'Количество';
$lang['estimate_table_rate_heading']     = 'Стоимость';
$lang['estimate_table_tax_heading']      = 'Налог';
$lang['estimate_table_amount_heading']   = 'Сумма';
$lang['estimate_subtotal']               = 'Подытог';
$lang['estimate_adjustment']             = 'Корректировка';
$lang['estimate_discount']               = 'Скидка';
$lang['estimate_total']                  = 'Итого';
$lang['estimate_to']                     = 'Для';
$lang['estimate_data_date']              = 'Дата сметы';
$lang['estimate_data_expiry_date']       = 'Действует до';
$lang['estimate_status_draft']           = 'Черновик';
$lang['estimate_status_sent']            = 'Отправить';
$lang['estimate_status_declined']        = 'Отклонено';
$lang['estimate_status_accepted']        = 'Принято';
$lang['estimate_status_expired']         = 'Просрочено';
$lang['estimate_note']                   = 'Примечание:';

## Clients
$lang['clients_estimate_dt_number']             = 'Смета #';
$lang['clients_estimate_dt_date']               = 'Дата';
$lang['clients_estimate_dt_duedate']            = 'Действует до';
$lang['clients_estimate_dt_amount']             = 'Сумма';
$lang['clients_estimate_dt_status']             = 'Статус';
$lang['clients_nav_estimates']                  = 'Сметы';
$lang['clients_decline_estimate']               = 'Отклонить';
$lang['clients_accept_estimate']                = 'Принять';
$lang['clients_my_estimates']                   = 'Сметы';
$lang['clients_estimate_invoiced_successfully'] = 'Спасибо, что приняли смету. Пожалуйста, ознакомьтесь с созданным счетом';
$lang['clients_estimate_accepted_not_invoiced'] = 'Спасибо, что приняли смету';
$lang['clients_estimate_declined']              = 'Смета отклонена. Вы можете принять смету до окончания срока действия';
$lang['clients_estimate_failed_action']         = 'Не удалось принять решение по этой смете';
$lang['client_add_edit_profile']                = 'Профиль';

# Custom Fields
$lang['custom_field']                          = 'Произвольное поле';
$lang['custom_field_lowercase']                = 'произвольное поле';
$lang['custom_fields']                         = 'Произвольные поля';
$lang['new_custom_field']                      = 'Новое поле';
$lang['custom_field_name']                     = 'Название поля';
$lang['custom_field_add_edit_type']            = 'Тип';
$lang['custom_field_add_edit_belongs_top']     = 'Поле принадлежит';
$lang['custom_field_add_edit_options']         = 'Опции';
$lang['custom_field_add_edit_options_tooltip'] = 'Используется только для типов Выбрать, Чекбокс. Заполните поле, параметры укажите через запятую. Напр.: яблоко,апельсин,банан';
$lang['custom_field_add_edit_order']           = 'Порядок';
$lang['custom_field_dt_field_to']              = 'Принадлежит';
$lang['custom_field_dt_field_name']            = 'Название';
$lang['custom_field_dt_field_type']            = 'Тип';
$lang['custom_field_add_edit_active']          = 'Активно';
$lang['custom_field_add_edit_disabled']        = 'Отключено';

# Ticket replies
$lang['ticket_reply'] = 'Ответить';

# Admin Customizer Sidebar
$lang['asc_custom_fields'] = 'Произвольные поля';

# Contracts
$lang['contract_types']           = 'Типы договоров';
$lang['contract_type']            = 'Тип договора';
$lang['new_contract_type']        = 'Новый тип';
$lang['contract_type_lowercase']  = 'договор';
$lang['contract_type_name']       = 'Название';
$lang['contract_types_list_name'] = 'Тип договора';

# Customizer Menu
$lang['acs_contracts']      = 'Договоры';
$lang['acs_contract_types'] = 'Типы договоров';

# Version 1.0.4
# Invoice Items
$lang['invoice_item_long_description'] = 'Полное описание';

# Customers
$lang['clients_list_phone']                = 'Телефон';
$lang['client_expenses_tab']               = 'Расходы';
$lang['customers_summary']                 = 'Клиенты';
$lang['customers_summary_active']          = 'Активные контакты';
$lang['customers_summary_inactive']        = 'Неактивные контакты';
$lang['customers_summary_logged_in_today'] = 'Контакты, заходившие сегодня';

# Authentication
$lang['admin_auth_forgot_password_email']     = 'Эл. почта';
$lang['admin_auth_forgot_password_heading']   = 'Забыли пароль';
$lang['admin_auth_login_heading']             = 'Авторизация';
$lang['admin_auth_login_email']               = 'Эл. почта';
$lang['admin_auth_login_password']            = 'Пароль';
$lang['admin_auth_login_remember_me']         = 'Запомнить меня';
$lang['admin_auth_login_button']              = 'Войти';
$lang['admin_auth_login_fp']                  = 'Забыли пароль?';
$lang['admin_auth_reset_password_heading']    = 'Сбросить пароль';
$lang['admin_auth_reset_password']            = 'Пароль';
$lang['admin_auth_reset_password_repeat']     = 'Повторите пароль';
$lang['admin_auth_invalid_email_or_password'] = 'Неверный адрес эл. почты или пароль';
$lang['admin_auth_inactive_account']          = 'Профиль не активен';

# Calender
$lang['calendar_estimate']          = 'Смета';
$lang['calendar_invoice']           = 'Счет на оплату';
$lang['calendar_contract']          = 'Договор';
$lang['calendar_customer_reminder'] = 'Напоминание клиенту';
$lang['calendar_event']             = 'Событие';
$lang['calendar_task']              = 'Задача';

# Leads
$lang['lead_edit_delete_tooltip'] = 'Удалить лид';
$lang['lead_attachments']         = 'Вложения';

# Admin Customizer Sidebar
$lang['acs_finance'] = 'Финансы';

# Settings
$lang['settings_show_sale_agent_on_invoices']       = 'Показать менеджера в счете на оплату';
$lang['settings_show_sale_agent_on_estimates']      = 'Показать менеджера в смете';
$lang['settings_predefined_predefined_term']        = 'Стандартные условия';
$lang['settings_predefined_clientnote']             = 'Стандартное примечание клиента';
$lang['settings_custom_pdf_logo_image_url']         = 'Логотип компании в документах PDF (JPG - 210x60px)';
$lang['settings_custom_pdf_logo_image_url_tooltip'] = 'Возможны проблемы с прозрачностью изображений PNG. Попробуйте обновить PHP-Imagick и отключить PHP-Gd. Если оставить это поле пустым, то будет использоваться загруженный логотип.';

# General
$lang['sale_agent_string']               = 'Ведущий менеджер';
$lang['amount_display_in_base_currency'] = 'Сумма показана в Вашей основной валюте - используется только в этом отчете, если Вы используете 1 валюту для платежей и расходов.';
# Leads
$lang['leads_summary'] = 'Все лиды';

# Contracts
$lang['contract_value']                       = 'Сумма договора';
$lang['contract_trash']                       = 'Корзина';
$lang['contracts_view_trash']                 = 'Посмотреть корзину';
$lang['contracts_view_all']                   = 'Все';
$lang['contracts_view_exclude_trashed']       = 'Исключить договоры в корзине';
$lang['contract_value_tooltip']               = 'Будет использоваться основная валюта.';
$lang['contract_trash_tooltip']               = 'Если вы добавите договор в корзину, он не будет отображаться на стороне клиента, не будет включен в графики и другие характеристики, а также по умолчанию не будет отображаться в списке договоров.';
$lang['contract_summary_active']              = 'Активность';
$lang['contract_renew_heading']               = 'Продлить договор';
$lang['contract_summary_heading']             = 'Все договоры';
$lang['contract_summary_expired']             = 'Истек срок действия';
$lang['contract_summary_about_to_expire']     = 'Истекает срок действия';
$lang['contract_summary_recently_added']      = 'Недавно добавленные';
$lang['contract_summary_trash']               = 'Корзина';
$lang['contract_summary_by_type']             = 'Договоры по типу';
$lang['contract_summary_by_type_value']       = 'Сумма договоров по типу';
$lang['contract_renewed_successfully']        = 'Договор продлен успешно';
$lang['contract_renewed_fail']                = 'Не удалось продлить договор. Обратитесь к администратору';
$lang['no_contract_renewals_found']           = 'Договор для продления не найден';
$lang['no_contract_renewals_history_heading'] = 'История продления договора';
$lang['contract_renewed_by']                  = '%s продлил(а) договор';
$lang['contract_renewal_deleted']             = 'Продление удалено';
$lang['contract_renewal_delete_fail']         = 'Не удалось удалить продление. Обратитесь к администратору';
$lang['contract_renewal_new_value']           = 'Новая сумма договора: %s';
$lang['contract_renewal_old_value']           = 'Старая сумма договора: %s';
$lang['contract_renewal_new_start_date']      = 'Новая дата начала: %s';
$lang['contract_renewal_old_start_date']      = 'Старая дата начала договора: %s';
$lang['contract_renewal_new_end_date']        = 'Новая дата окончания: %s';
$lang['contract_renewal_old_end_date']        = 'Старая дата окончания: %s';
$lang['contract_attachment']                  = 'Вложение';

# Admin Aside Menu
$lang['als_expenses']           = 'Расходы';
$lang['als_reports_expenses']   = 'Расходы';
$lang['als_expenses_vs_income'] = 'Расходы и Доходы';

# Invoices
$lang['invoice_attach_file']           = 'Прикрепить файл';
$lang['invoice_mark_as_sent']          = 'Отметить как отправленное';
$lang['invoice_marked_as_sent']        = 'Счет успешно отмечен как отправленный';
$lang['invoice_marked_as_sent_failed'] = 'Не удалось отметить счет';

# Payments
$lang['payment_transaction_id'] = 'ID транзакции';

# Expeneses
$lang['acs_expense_categories']                       = 'Категории расходов';
$lang['expense_category']                             = 'Категория расходов';
$lang['expense_category_lowercase']                   = 'категория расходов';
$lang['new_expense']                                  = 'Добавить расходы';
$lang['expense_add_edit_name']                        = 'Название категории';
$lang['expense_add_edit_description']                 = 'Описание категории';
$lang['expense_categories']                           = 'Категории расходов';
$lang['new_expense_category']                         = 'Новая категория';
$lang['dt_expense_description']                       = 'Описание';
$lang['expense']                                      = 'Расход';
$lang['expenses']                                     = 'Расходы';
$lang['expense_lowercase']                            = 'расходы';
$lang['expense_add_edit_customer']                    = 'Клиент';
$lang['expense_add_edit_note']                        = 'Примечание';
$lang['expense_add_edit_date']                        = 'Дата расхода';
$lang['expense_add_edit_amount']                      = 'Сумма';
$lang['expense_add_edit_billable']                    = 'Оплачен';
$lang['expense_add_edit_attach_receipt']              = 'Прикрепить квитанцию';
$lang['expense_add_edit_reference_no']                = 'Ссылка #';
$lang['expense_receipt']                              = 'Квитанция расхода';
$lang['expense_receipt_lowercase']                    = 'квитанция расхода';
$lang['expense_dt_table_heading_category']            = 'Категория';
$lang['expense_dt_table_heading_amount']              = 'Сумма';
$lang['expense_dt_table_heading_date']                = 'Дата';
$lang['expense_dt_table_heading_reference_no']        = 'Ссылка #';
$lang['expense_dt_table_heading_customer']            = 'Клиент';
$lang['expense_dt_table_heading_payment_mode']        = 'Способ оплаты';
$lang['expense_converted_to_invoice']                 = 'Расходы успешно преобразованы в счет на оплату';
$lang['expense_converted_to_invoice_fail']            = 'Не удалось преобразовать эти расходы в счет, проверьте журнал ошибок.';
$lang['expense_copy_success']                         = 'Расходы успешно скопированы.';
$lang['expense_copy_fail']                            = 'Не удалось скопировать расходы. Пожалуйста, проверьте обязательные поля и попробуйте снова';
$lang['expenses_list_all']                            = 'Все';
$lang['expenses_list_billable']                       = 'Оплачен';
$lang['expenses_list_non_billable']                   = 'Не оплачен';
$lang['expenses_list_invoiced']                       = 'Выставлен';
$lang['expenses_list_unbilled']                       = 'Не выставлен';
$lang['expenses_list_recurring']                      = 'Повторяющийся';
$lang['expense_invoice_delete_not_allowed']           = 'Вы не можете удалить этот расход. Уже выставлен счет.';
$lang['expense_convert_to_invoice']                   = 'Преобразовать в счет на оплату';
$lang['expense_edit']                                 = 'Изменить расход';
$lang['expense_delete']                               = 'Удалить';
$lang['expense_copy']                                 = 'Копировать';
$lang['expense_invoice_not_created']                  = 'Счет на оплату не создан';
$lang['expense_billed']                               = 'Оплачен';
$lang['expense_not_billed']                           = 'Счет не оплачен';
$lang['expense_customer']                             = 'Клиент';
$lang['expense_note']                                 = 'Примечание:';
$lang['expense_date']                                 = 'Дата:';
$lang['expense_ref_noe']                              = 'Ссылка #:';
$lang['expense_amount']                               = 'Сумма:';
$lang['expense_recurring_indicator']                  = 'Повторяющийся';
$lang['expense_already_invoiced']                     = 'Этот расход уже включен в счет';
$lang['expense_recurring_auto_create_invoice']        = 'Автоматически создать счет на оплату';
$lang['expense_recurring_send_custom_on_renew']       = 'Отправить счет на эл. почту клиента при повторении расходов';
$lang['expense_recurring_autocreate_invoice_tooltip'] = 'Счет будет автоматически создан, если расходы будут обновлены.';
$lang['expenses_yearly_by_categories']                = 'Ежегодные расходы по категориям';
$lang['total_expenses_for']                           = 'Всего расходов за'; // year
$lang['expenses_report_for']                          = 'Расходы за'; // year

# Custom fields
$lang['custom_field_required']    = 'Обязательно';
$lang['custom_field_show_on_pdf'] = 'Показать в PDF';
$lang['custom_field_leads']       = 'Лиды';
$lang['custom_field_customers']   = 'Клиенты';
$lang['custom_field_staff']       = 'Сотрудники';
$lang['custom_field_contracts']   = 'Договоры';
$lang['custom_field_tasks']       = 'Задачи';
$lang['custom_field_expenses']    = 'Расходы';
$lang['custom_field_invoice']     = 'Счет на оплату';
$lang['custom_field_estimate']    = 'Смета';

# Tickets
$lang['ticket_single_private_staff_notes'] = 'Примечание (невидимое для клиентов)';

# Business News
$lang['business_news'] = 'Новости';

# Navigation
$lang['nav_todo_items'] = 'Личные задания';

# Contracts
$lang['clients_contracts_type'] = 'Тип договора';

# Version 1.0.5
# General
$lang['no_tax']                              = 'Без налога';
$lang['numbers_not_formatted_while_editing'] = 'Ставка в этом поле не будет отформатирована. Не пытайтесь отформатировать ставку здесь вручную.';
# Contracts
$lang['contracts_view_expired']         = 'Истек срок действия';
$lang['contracts_view_without_dateend'] = 'Договор без ограничения по времени';

# Email Templates
$lang['email_template_contracts_fields_heading'] = 'Договоры';

# Invoices General
$lang['invoice_estimate_general_options'] = 'Общие настройки';
$lang['invoice_table_item_description']   = 'Описание';
$lang['invoice_recurring_indicator']      = 'Повторяющийся';

# Estimates
$lang['estimate_convert_to_invoice_successfully'] = 'Смета преобразована в счет на оплату';
$lang['estimate_table_item_description']          = 'Описание';

# Version 1.0.6
# Invoices
# Currencies
$lang['cant_delete_base_currency'] = 'Вы не можете удалить базовую валюту. Вам необходимо назначить новую базовую валюту, чтобы удалить эту.';
$lang['invoice_copy']              = 'Копировать счет';
$lang['invoice_copy_success']      = 'Счет на оплату успешно скопирован';
$lang['invoice_copy_fail']         = 'Не удалось скопировать счет на оплату';
$lang['invoice_due_after_help']    = 'Установите ноль, чтобы не делать расчет';
$lang['show_shipping_on_invoice']  = 'Отображать детали доставки в счете';

# Estimates
$lang['show_shipping_on_estimate']         = 'Показать детали доставки в смете';
$lang['is_invoiced_estimate_delete_error'] = 'Смета выставлена в счет на оплату. Вы не можете ее удалить.';

# Customers & Invoices / Estimates
$lang['ship_to']                            = 'Адрес получателя';
$lang['customer_profile_details']           = 'Сведения о клиенте';
$lang['billing_shipping']                   = 'Оплата и доставка';
$lang['billing_address']                    = 'Платежный адрес';
$lang['shipping_address']                   = 'Адрес доставки';
$lang['billing_street']                     = 'Улица';
$lang['billing_city']                       = 'Город';
$lang['billing_state']                      = 'Регион';
$lang['billing_zip']                        = 'Почтовый индекс';
$lang['billing_country']                    = 'Страна';
$lang['shipping_street']                    = 'Улица';
$lang['shipping_city']                      = 'Город';
$lang['shipping_state']                     = 'Область';
$lang['shipping_zip']                       = 'Почтовый индекс';
$lang['shipping_country']                   = 'Страна';
$lang['get_shipping_from_customer_profile'] = 'Узнать подробности доставки из профиля клиента';

# Customer
$lang['customer_default_currency']                             = 'Валюта по умолчанию';
$lang['customer_update_address_info_on_invoices']              = 'Обновить информацию об оплате и доставке для всех предыдущих счетов/смет';
$lang['customer_update_address_info_on_invoices_help']         = 'Если вы отметите это поле, то информация о доставке и оплате будет обновлена для всех счетов и смет. Примечание: счета, имеющие статус Оплачен, не будут затронуты.';
$lang['setup_google_api_key_customer_map']                     = 'Установите ключ Google API, чтобы отображалась карта клиента.';
$lang['customer_attachments_file']                             = 'Файл';
$lang['client_send_set_password_email']                        = 'Отправить пароль на почту';
$lang['customer_billing_same_as_profile']                      = 'Такая же информация о клиенте';
$lang['customer_billing_copy']                                 = 'Скопировать платежный адрес';
$lang['customer_map']                                          = 'Карта';
$lang['set_password_email_sent_to_client']                     = 'Письмо с паролем успешно отправлено клиенту';
$lang['set_password_email_sent_to_client_and_profile_updated'] = 'Профиль обновлен и письмо с паролем отправлено контакту';
$lang['customer_attachments']                                  = 'Файлы';
$lang['customer_longitude']                                    = 'Долгота (карта Google)';
$lang['customer_latitude']                                     = 'Широта (карта Google)';

# Authentication
$lang['admin_auth_set_password']         = 'Пароль';
$lang['admin_auth_set_password_repeat']  = 'Повторите пароль';
$lang['admin_auth_set_password_heading'] = 'Установка пароля';

# General
$lang['apply']                         = 'Применить';
$lang['department_calendar_id']        = 'ID календаря Google';
$lang['localization_default_language'] = 'Язык по умолчанию';
$lang['system_default_string']         = 'Системные настройки по умолчанию';
$lang['advanced_options']              = 'Дополнительные опции';

# Expenses
$lang['expense_list_invoice']  = 'Счет на оплату';
$lang['expense_list_billed']   = 'Оплачен';
$lang['expense_list_unbilled'] = 'Счет не выставлен';

# Leads
$lang['lead_merge_custom_field']          = 'Объединить как произвольное поле';
$lang['lead_merge_custom_field_existing'] = 'Объединить с полем в базе данных';
$lang['lead_dont_merge_custom_field']     = 'Не объединять';
$lang['lost_leads']                       = 'Потерянные лиды';
$lang['junk_leads']                       = 'Спам';
$lang['lead_mark_as_lost']                = 'Отметить как потерянный';
$lang['lead_unmark_as_lost']              = 'Снять отметку потерянный';
$lang['lead_marked_as_lost']              = 'Лид отмечен как потерянный';
$lang['lead_unmarked_as_lost']            = 'Отметка "потерянный" снята';
$lang['leads_status_color']               = 'Цвет';
$lang['lead_mark_as_junk']                = 'Отметить как спам';
$lang['lead_unmark_as_junk']              = 'Снять отметку спам';
$lang['lead_marked_as_junk']              = 'Лид отмечен как спам';
$lang['lead_unmarked_as_junk']            = 'Отметка спам снята';
$lang['lead_not_found']                   = 'Контакт не найден';
$lang['lead_lost']                        = 'Потерян';
$lang['lead_junk']                        = 'Спам';
$lang['leads_not_assigned']               = 'Не назначен';

# Contacts
$lang['contract_not_visible_to_client'] = 'Скрыть от клиента';
$lang['contract_edit_overview']         = 'Обзор договора';
$lang['contract_attachments']           = 'Вложения';

# Tasks
$lang['task_view_make_public']     = 'Общая задача';
$lang['task_is_private']           = 'Частная задача';
$lang['task_finished']             = 'Завершено';
$lang['task_single_related']       = 'Связь';
$lang['task_unmark_as_complete']   = 'Снять отметку о выполнении';
$lang['task_unmarked_as_complete'] = 'Задача не отмечена как выполнена';
$lang['task_relation']             = 'Связь';
$lang['task_public']               = 'Для всех';
$lang['task_public_help']          = 'Если поставить отметку, то задача будет видна всем сотрудникам. В противном случае, она будет видна только тем, кто имеет отношение к данной задаче.';

# Settings
$lang['settings_general_favicon']                                            = 'Иконка сайта';
$lang['settings_output_client_pdfs_from_admin_area_in_client_language']      = 'Выводить клиентские документы PDF из области администрирования на языке клиента';
$lang['settings_output_client_pdfs_from_admin_area_in_client_language_help'] = 'Если установлено как "да", то система будет выводить документы на языке клиента, независимо от языка системы.';
$lang['settings_default_tax']                                                = 'Налог по умолчанию';
$lang['setup_calendar_by_departments']                                       = 'Настройки календаря для отделов';
$lang['settings_calendar']                                                   = 'Календарь';
$lang['settings_sales_invoice_due_after']                                    = 'Срок платежа (дней)';
$lang['settings_google_api']                                                 = 'Ключ Google API Key';
$lang['settings_gcal_main_calendar_id']                                      = 'ИД календаря Google';
$lang['settings_gcal_main_calendar_id_help']                                 = 'Это главный календарь компании. Если вы хотите указать календарь отдела, то вы можете добавить его в настройках отдела (ИД календаря Google).';
$lang['show_on_calendar']                                                    = 'Показать в календаре';
$lang['show_invoices_on_calendar']                                           = 'Счета на оплату';
$lang['show_estimates_on_calendar']                                          = 'Сметы';
$lang['show_contracts_on_calendar']                                          = 'Договоры';
$lang['show_tasks_on_calendar']                                              = 'Задачи';
$lang['show_customer_reminders_on_calendar']                                 = 'Напоминания клиенту';

# Leads
$lang['copy_custom_fields_convert_to_customer']                      = 'Скопировать произвольные поля в профиль клиента';
$lang['copy_custom_fields_convert_to_customer_help']                 = 'Если какой-либо из следующих пользовательских полей не существует, то он будет автоматически создан с тем же именем, в противном случае только значение будет скопировано из профиля лида.';
$lang['lead_profile']                                                = 'Профиль';
$lang['lead_is_client']                                              = 'Клиент';
$lang['leads_email_integration_folder_no_encryption']                = 'Нет шифрования';
$lang['leads_email_integration']                                     = 'Интеграция почты';
$lang['leads_email_active']                                          = 'Активный';
$lang['leads_email_integration_imap']                                = 'Сервер IMAP';
$lang['leads_email_integration_email']                               = 'Адрес эл. почты (логин)';
$lang['leads_email_integration_password']                            = 'Пароль';
$lang['leads_email_integration_default_source']                      = 'Источник по умолчанию';
$lang['leads_email_integration_check_every']                         = 'Проверять каждые (минуты)';
$lang['leads_email_integration_default_assigned']                    = 'Ответственный за нового лида';
$lang['leads_email_encryption']                                      = 'Шифрование';
$lang['leads_email_integration_updated']                             = 'Интеграция обновлена';
$lang['leads_email_integration_default_status']                      = 'Статус по умолчанию';
$lang['leads_email_integration_folder']                              = 'Папка';
$lang['leads_email_integration_notify_when_lead_imported']           = 'Уведомлять, когда лид импортирован';
$lang['leads_email_integration_only_check_unseen_emails']            = 'Проверять только открытые письма';
$lang['leads_email_integration_only_check_unseen_emails_help']       = 'Почта будет автоматически открываться после проверки. Это используется для предотвращения проверки всех писем снова и снова. Не рекомендуется снимать галочку, если у вас много писем и вы должны перенастроить перенаправление писем для лидов.';
$lang['leads_email_integration_notify_when_lead_contact_more_times'] = 'Уведомлять, если лид отправляет письма несколько раз';
$lang['leads_email_integration_test_connection']                     = 'Тестировать соединение IMAP';
$lang['lead_email_connection_ok']                                    = 'Успешное соединение IMAP';
$lang['lead_email_connection_not_ok']                                = 'Ошибка соединения IMAP';
$lang['lead_email_activity']                                         = 'Активность';
$lang['leads_email_integration_notify_roles']                        = 'Уведомлять пользователей с ролями';
$lang['leads_email_integration_notify_staff']                        = 'Уведомлять сотрудников';
$lang['lead_public']                                                 = 'Публичный';

# Knowledge Base
$lang['kb_group_color'] = 'Цвет';
$lang['kb_group_order'] = 'Позиция';

# Utilities - BULK PDF Exporter
$lang['bulk_pdf_exporter']             = 'Массовый экспорт в PDF';
$lang['bulk_export_pdf_payments']      = 'Платежи';
$lang['bulk_export_pdf_estimates']     = 'Сметы';
$lang['bulk_export_pdf_invoices']      = 'Счета на оплату';
$lang['bulk_pdf_export_button']        = 'Экспорт';
$lang['bulk_pdf_export_select_type']   = 'Выберите тип';
$lang['no_data_found_bulk_pdf_export'] = 'Нет данных для экспорта';
$lang['bulk_export_status_all']        = 'Все';
$lang['bulk_export_status']            = 'Статус';
$lang['bulk_export_zip_payment_modes'] = 'Тип платежей';
$lang['bulk_export_include_tag']       = 'Включить тег';
$lang['bulk_export_include_tag_help']  = 'Напр. Оригинал или копия. Тег будет выводиться в документе PDF. Рекомендуется использовать только 1 тег';


# Version 1.0.7
## Customers - portal
$lang['clients_nav_proposals'] = 'Предложения';
$lang['clients_nav_support']   = 'Поддержка';

# General
$lang['more']            = 'Еще';
$lang['add_item']        = 'Добавить позицию';
$lang['goto_admin_area'] = 'Перейти в панель управления';
$lang['delete']          = 'Удалить %s';
$lang['welcome_top']     = 'Привет, %s';

# Customers
$lang['customer_permissions']         = 'Разрешить доступ к';
$lang['customer_permission_invoice']  = 'Счета на оплату';
$lang['customer_permission_estimate'] = 'Сметы';
$lang['customer_permission_proposal'] = 'Предложения';
$lang['customer_permission_contract'] = 'Договоры';
$lang['customer_permission_support']  = 'Поддержка';

#Tasks
$lang['task_related_to'] = 'Задача связана с';

# Send file
$lang['custom_file_fail_send']    = 'Не удалось отправить файл';
$lang['custom_file_success_send'] = 'Файл успешно отправлен %s';
$lang['send_file_subject']        = 'Тема письма';
$lang['send_file_email']          = 'Эл. почта';
$lang['send_file_message']        = 'Сообщение';
$lang['send_file']                = 'Отправить файл';
$lang['add_checklist_item']       = 'Добавить в чек-лист';
$lang['task_checklist_items']     = 'Чек-лист';

# Import
$lang['default_pass_clients_import'] = 'Пароль по умолчанию для всех контактов';
$lang['simulate_import']             = 'Имитация импорта';
$lang['import_upload_failed']        = 'Загрузка не удалась';
$lang['import_total_imported']       = 'Всего импортировано: %s';
$lang['import_leads']                = 'Импорт контактов';
$lang['import_customers']            = 'Импорт клиентов';
$lang['choose_csv_file']             = 'Выберите файл CSV';
$lang['import']                      = 'Импорт';
$lang['lead_import_status']          = 'Статус';
$lang['lead_import_source']          = 'Источник';

# Bulk PDF Export
$lang['bulk_export_pdf_proposals'] = 'Предложения';

# Invoices
$lang['delete_invoice'] = 'Удалить';
$lang['items']      = 'Позиции';
$lang['support']    = 'Поддержка';
$lang['new_ticket'] = 'Новый тикет';

# Reminders
$lang['calendar_lead_reminder']  = 'Напоминание контакта';
$lang['lead_set_reminder_title'] = 'Добавить напоминание лиду';
$lang['set_reminder_tooltip']    = 'Эта опция позволяет вам никогда ничего не забывать о своих клиентах.';
$lang['client_reminders_tab']    = 'Напоминания';
$lang['leads_reminders_tab']     = 'Напоминания';

# Tickets
$lang['delete_ticket_reply']  = 'Удалить ответ';
$lang['ticket_priority_edit'] = 'Изменить приоритет';
$lang['ticket_priority_add']  = 'Добавить приоритет';
$lang['ticket_status_edit']   = 'Изменить статус тикета';
$lang['ticket_service_edit']  = 'Изменить услугу тикета';
$lang['edit_department']      = 'Изменить отдел';

# Expenses
$lang['edit_expense_category'] = 'Изменить категорию расхода';

# Settings
$lang['customer_default_country']                                 = 'Страна по умолчанию';
$lang['settings_sales_require_client_logged_in_to_view_estimate'] = 'Потребовать от клиента войти в систему для просмотра сметы';
$lang['set_reminder']                                             = 'Установить напоминание';
$lang['set_reminder_date']                                        = 'Дата уведомления';
$lang['reminder_description']                                     = 'Описание';
$lang['reminder_notify_me_by_email']                              = 'Отправить также по эл. почте это напоминание';
$lang['reminder_added_successfully']                              = 'Напоминание успешно добавлено. Вы будете уведомлены.';
$lang['reminder_description']                                     = 'Описание';
$lang['reminder_date']                                            = 'Дата';
$lang['reminder_staff']                                           = 'Напомнить';
$lang['reminder_is_notified']                                     = 'Истекло';
$lang['reminder_is_notified_boolean_no']                          = 'Нет';
$lang['reminder_is_notified_boolean_yes']                         = 'Да';
$lang['reminder_set_to']                                          = 'Установить напоминание';
$lang['reminder_deleted']                                         = 'Напоминание успешно удалено';
$lang['reminder_failed_to_delete']                                = 'Не удалось удалить напоминание';
$lang['show_invoice_estimate_status_on_pdf']                      = 'Отображать статус счета/сметы в документе PDF';
$lang['email_piping_default_priority']                            = 'Тикеты по электронной почте';
$lang['show_lead_reminders_on_calendar']                          = 'Напоминания лидам';
$lang['tickets_piping']                                           = 'Тикеты на почту';
$lang['email_piping_only_replies']                                = 'Ответы разрешены только по почте';
$lang['email_piping_only_registered']                             = 'Только для зарегистрированных пользователей';

# Estimates
$lang['view_estimate_as_client']         = 'Посмотреть смету как клиент';
$lang['estimate_mark_as']                = 'Отметить как %s';
$lang['estimate_status_changed_success'] = 'Статус сметы изменен';
$lang['estimate_status_changed_fail']    = 'Не удалось изменить статус сметы';

# Proposals
$lang['proposal_to']                            = 'Компания / ФИО';
$lang['proposal_date']                          = 'Дата';
$lang['proposal_address']                       = 'Адрес';
$lang['proposal_phone']                         = 'Телефон';
$lang['proposal_email']                         = 'Эл. почта';
$lang['proposal_date_created']                  = 'Дата создания';
$lang['proposal_open_till']                     = 'Открыто до';
$lang['proposal_status_open']                   = 'Открыто';
$lang['proposal_status_accepted']               = 'Принято';
$lang['proposal_status_declined']               = 'Отклонено';
$lang['proposal_status_sent']                   = 'Отправлено';
$lang['proposal_expired']                       = 'Истекло';
$lang['proposal_subject']                       = 'Тема';
$lang['proposal_total']                         = 'Итого';
$lang['proposal_status']                        = 'Статус';
$lang['proposals_list_all']                     = 'Все';
$lang['proposals_leads_related']                = 'Привязанные контакты';
$lang['proposals_customers_related']            = 'Привязанные клиенты';
$lang['proposal_related']                       = 'Для';
$lang['proposal_for_lead']                      = 'Контакта';
$lang['proposal_for_customer']                  = 'Клиента';
$lang['proposal']                               = 'Предложение';
$lang['proposal_lowercase']                     = 'предложение';
$lang['proposals']                              = 'Предложения';
$lang['proposals_lowercase']                    = 'предложения';
$lang['new_proposal']                           = 'Новое предложение';
$lang['proposal_currency']                      = 'Валюта';
$lang['proposal_allow_comments']                = 'Разрешить комментарии';
$lang['proposal_allow_comments_help']           = 'Если вы отметите эту опцию, клиенты смогут комментировать это предложение.';
$lang['proposal_edit']                          = 'Изменить';
$lang['proposal_pdf']                           = 'PDF';
$lang['proposal_send_to_email']                 = 'Отправить по эл. почте';
$lang['proposal_send_to_email_title']           = 'Отправить предложение по эл. почте';
$lang['proposal_attach_pdf']                    = 'Прикрепить PDF';
$lang['proposal_preview_template']              = 'Предварительный просмотр';
$lang['proposal_view']                          = 'Посмотреть предложение';
$lang['proposal_copy']                          = 'Копировать';
$lang['proposal_delete']                        = 'Удалить';
$lang['proposal_to']                            = 'Для';
$lang['proposal_add_comment']                   = 'Добавить комментарий';
$lang['proposal_sent_to_email_success']         = 'Предложение отправлено по эл. почте';
$lang['proposal_sent_to_email_fail']            = 'Ошибка при отправке предложения';
$lang['proposal_copy_fail']                     = 'Ошибка при копировании';
$lang['proposal_copy_success']                  = 'Предложение копировано';
$lang['proposal_status_changed_success']        = 'Статус предложения изменен';
$lang['proposal_status_changed_fail']           = 'Ошибка при смене статуса';
$lang['proposal_assigned']                      = 'Закреплено за';
$lang['proposal_comments']                      = 'Комментарии';
$lang['proposal_convert']                       = 'Конвертировать';
$lang['proposal_convert_estimate']              = 'В смету';
$lang['proposal_convert_invoice']               = 'В счет на оплату';
$lang['proposal_convert_to_estimate']           = 'Конвертировать в смету';
$lang['proposal_convert_to_invoice']            = 'Конвертировать в счет на оплату';
$lang['proposal_convert_to_lead_disabled_help'] = 'Вы должны конвертировать контакт в клиента, чтобы создать %s';
$lang['proposal_convert_not_related_help']      = 'Предложение должно быть связано с клиентом, чтобы конвертировать %s';
$lang['proposal_converted_to_estimate_success'] = 'Предложение конвертировано в смету';
$lang['proposal_converted_to_invoice_success']  = 'Предложение конвертировано в счет на оплату';
$lang['proposal_converted_to_estimate_fail']    = 'Ошибка конвертации в смету';
$lang['proposal_converted_to_invoice_fail']     = 'Ошибка конвертации в счет на оплату';

# Proposals - view proposal template
$lang['proposal_total_info']   = 'Итого: %s';
$lang['proposal_accept_info']  = 'Принять';
$lang['proposal_decline_info'] = 'Отклонить';
$lang['proposal_pdf_info']     = 'Скачать в PDF';

# Customers Portal
$lang['customer_reset_action']            = 'Сбросить';
$lang['customer_reset_password_heading']  = 'Сброс пароля';
$lang['customer_forgot_password_heading'] = 'Восстановление доступа';
$lang['customer_forgot_password']         = 'Забыли пароль?';
$lang['customer_reset_password']          = 'Пароль';
$lang['customer_reset_password_repeat']   = 'Повторите пароль';
$lang['customer_forgot_password_email']   = 'Эл. почта';
$lang['customer_forgot_password_submit']  = 'Отправить';
$lang['customer_ticket_subject']          = 'Тема';

# Email templates
$lang['email_template_proposals_fields_heading'] = 'Предложения';

# Tasks
$lang['add_task_attachments']  = 'Вложение';
$lang['task_view_attachments'] = 'Вложения';
$lang['task_view_description'] = 'Описание';

# Customer Groups
$lang['customer_group_add_heading']      = 'Добавить новую группу клиентов';
$lang['customer_group_edit_heading']     = 'Изменить группу клиентов';
$lang['new_customer_group']              = 'Новая группа клиентов';
$lang['customer_group_name']             = 'Название';
$lang['customer_groups']                 = 'Группы';
$lang['customer_group']                  = 'Группа клиента';
$lang['customer_group_lowercase']        = 'группа клиента';
$lang['customer_have_invoices_by']       = 'Счета на оплату по статусу %s';
$lang['customer_have_estimates_by']      = 'Сметы по статусу %s';
$lang['customer_have_contracts_by_type'] = 'Договоры по типу %s';

# Custom fields
$lang['custom_field_show_on_table']              = 'Таблица';
$lang['custom_field_show_on_client_portal']      = 'Показать в клиентской области';
$lang['custom_field_show_on_client_portal_help'] = 'Если поле отмечено, то будет отображаться в таблицах';
$lang['custom_field_visibility']                 = 'Видимость';

# Knowledge Base
$lang['view_articles_list']     = 'Посмотреть статьи';
$lang['view_articles_list_all'] = 'Все статьи';
$lang['als_all_articles']       = 'Статьи';
$lang['als_kb_groups']          = 'Группы';

# Spam Filter - Tickets
$lang['spam_filters']                 = 'Спам фильтры';
$lang['spam_filter']                  = 'Спам фильтр';
$lang['new_spam_filter']              = 'Новый спам фильтр';
$lang['spam_filter_blocked_senders']  = 'Заблокированные отправители';
$lang['spam_filter_blocked_subjects'] = 'Заблокированные темы';
$lang['spam_filter_blocked_phrases']  = 'Заблокированные ключевые слова';
$lang['spam_filter_content']          = 'Контент';
$lang['spamfilter_edit_heading']      = 'Изменить фильтр';
$lang['spamfilter_add_heading']       = 'Добавить спам фильтр';
$lang['spamfilter_type']              = 'Тип';
$lang['spamfilter_type_subject']      = 'Тема';
$lang['spamfilter_type_sender']       = 'Отправитель';
$lang['spamfilter_type_phrase']       = 'Ключевое слово';

# Tickets
$lang['block_sender']                = 'Блокировать отправителя';
$lang['sender_blocked']              = 'Заблокированный отправитель';
$lang['sender_blocked_successfully'] = 'Отправитель успешно заблокирован';
$lang['ticket_date_created']         = 'Дата создания';

#KB
$lang['edit_kb_group'] = 'Изменить группу';

# Leads
$lang['edit_source'] = 'Изменить источник';
$lang['edit_status'] = 'Изменить статус';

# Contacts
$lang['contract_type_edit'] = 'Изменить статус договора';

# Reports
$lang['report_by_customer_groups'] = 'Общая сумма по группам клиентов';

# Utilities
$lang['ticket_pipe_log']      = 'Журнал тикетов по почте';
$lang['ticket_pipe_name']     = 'От';
$lang['ticket_pipe_email_to'] = 'Для';
$lang['ticket_pipe_email']    = 'Отправитель';
$lang['ticket_pipe_subject']  = 'Тема';
$lang['ticket_pipe_message']  = 'Сообщение';
$lang['ticket_pipe_date']     = 'Дата';
$lang['ticket_pipe_status']   = 'Статус';

# Home
$lang['home_latest_activity']   = 'Последняя активность';
$lang['home_my_tasks']          = 'Мои задачи';
$lang['home_my_todo_items']     = 'Список моих дел';
$lang['home_widget_view_all']   = 'Посмотреть все';
$lang['home_stats_full_report'] = 'Полный отчет';

# Validation
$lang['form_validation_required']    = '{field} обязательно для заполнения.';
$lang['form_validation_valid_email'] = '{field} поле должно содержать корректный адрес эл. почты.';
$lang['form_validation_matches']     = '{field} поле не соответствует параметрам {param}.';
$lang['form_validation_is_unique']   = '{field} поле должно содержать уникальное значение.';

# Version 1.0.8
# Notifications & Leads/Estimates/Invoices Activity Log
$lang['not_event']                                                = 'Сегодня в календаре событий - %s ...';
$lang['not_event_public']                                         = 'Общественные события, которые начинаются сегодня - %s ...';
$lang['not_contract_expiry_reminder']                             = 'Напоминание об истечении срока действия договора - %s ...';
$lang['not_recurring_expense_cron_activity_heading']              = 'Действия планировщика с повторяющимися расходами';
$lang['not_recurring_invoices_cron_activity_heading']             = 'Действия планировщика с повторяющимися счетами';
$lang['not_recurring_total_renewed']                              = 'Всего продлено: %s';
$lang['not_recurring_expenses_action_taken_from']                 = 'Выбранное действие при повторяющихся расходах';
$lang['not_invoice_created']                                      = 'Счет создан:';
$lang['not_invoice_renewed']                                      = 'Счет обновлен:';
$lang['not_expense_renewed']                                      = 'Расход обновлен:';
$lang['not_invoice_sent_to_customer']                             = 'Клиенту отправлен счет на оплату: %s';
$lang['not_invoice_sent_yes']                                     = 'Да';
$lang['not_invoice_sent_not']                                     = 'Нет';
$lang['not_action_taken_from_recurring_invoice']                  = 'Выбранное действие при повторяющихся счетах:';
$lang['not_new_reminder_for']                                     = 'Новое напоминание для %s';
$lang['not_received_one_or_more_messages_lead']                   = 'Получено новое сообщение от лида';
$lang['not_received_lead_imported_email_integration']             = 'Контакты импортированы по почтовой интеграции';
$lang['not_lead_imported_attachment']                             = 'Вложение импортировано из почты';
$lang['not_estimate_status_change']                               = 'Вложение импортировано из почты';
$lang['not_estimate_status_updated']                              = 'Статус сметы обновлен: от: %s на %s';
$lang['not_assigned_lead_to_you']                                 = 'контакт %s закреплен за вами';
$lang['not_lead_activity_assigned_to']                            = '%s закреплен за %s';
$lang['not_lead_activity_attachment_deleted']                     = 'Файл удален';
$lang['not_lead_activity_status_updated']                         = '%s обновлен статус контакта, от %s до %s';
$lang['not_lead_activity_contacted']                              = '%s связался с контактом %s';
$lang['not_lead_activity_created']                                = '%s создал(а) контакт';
$lang['not_lead_activity_marked_lost']                            = 'Отметил(а) как новый';
$lang['not_lead_activity_unmarked_lost']                          = 'Снял(а) отметку "новый"';
$lang['not_lead_activity_marked_junk']                            = 'Отметил(а) как спам';
$lang['not_lead_activity_unmarked_junk']                          = 'Снял(а) отметку "спам"';
$lang['not_lead_activity_added_attachment']                       = 'Новое вложение';
$lang['not_lead_activity_converted_email']                        = 'Эл. почта контакта изменена. Старая эл. почта контакта: %s и добавлена новая %s';
$lang['not_lead_activity_converted']                              = '%s Конвертировал(а) контакт в клиента';
$lang['not_liked_your_post']                                      = '%s понравилась ваша запись %s ...';
$lang['not_commented_your_post']                                  = '%s прокомментировал(а) вашу запись %s ...';
$lang['not_liked_your_comment']                                   = '%s понравился ваш комментарий %s ...';
$lang['not_proposal_assigned_to_you']                             = 'Предложение прикреплено к вам - %s ...';
$lang['not_proposal_comment_from_client']                         = 'Новый комментарий клиента на предложение %s ...';
$lang['not_proposal_proposal_accepted']                           = 'Предложение принято - %s';
$lang['not_proposal_proposal_declined']                           = 'Предложение отклонено - %s';
$lang['not_task_added_you_as_follower']                           = 'добавил(а) вас как участника в задаче %s ...';
$lang['not_task_added_someone_as_follower']                       = 'добавил(а) %s как участника в задаче %s ...';
$lang['not_task_added_himself_as_follower']                       = 'добавил(а) себя как участник задачи %s ...';
$lang['not_task_assigned_to_you']                                 = 'поставил(а) вам задачу %s ...';
$lang['not_task_assigned_someone']                                = 'поставил(а) %s задачу %s ...';
$lang['not_task_will_do_user']                                    = 'выполнит задачу %s ...';
$lang['not_task_new_attachment']                                  = 'Новое вложение добавлено';
$lang['not_task_marked_as_complete']                              = 'отметил(а) задачу как "завершенная" %s';
$lang['not_task_unmarked_as_complete']                            = 'снял(а) отметку о завершении задачи %s';
$lang['not_ticket_assigned_to_you']                               = 'Тикет прикреплен к вам - %s ...';
$lang['not_ticket_reassigned_to_you']                             = 'Тикет повторно назначен вам - %s ...';
$lang['not_estimate_customer_accepted']                           = 'Поздравляем! Клиент принял смету с номером %s';
$lang['not_estimate_customer_declined']                           = 'Клиент отклонил смету под номером %s';
$lang['estimate_activity_converted']                              = 'конвертировал(а) смету в счет на оплату.<br /> %s';
$lang['estimate_activity_created']                                = 'Создал(а) смету';
$lang['invoice_estimate_activity_removed_item']                   = 'удалил(а) позицию <b>%s</b>';
$lang['estimate_activity_number_changed']                         = 'Номер сметы изменен с %s на %s';
$lang['invoice_activity_number_changed']                          = 'Номер счета изменен с %s на %s';
$lang['invoice_estimate_activity_updated_item_short_description'] = 'обновлено краткое описание с %s на %s';
$lang['invoice_estimate_activity_updated_item_long_description']  = 'обновлено полное описание с <b>%s</b> на <b>%s</b>';
$lang['invoice_estimate_activity_updated_item_rate']              = 'обновлена ставка с %s на %s';
$lang['invoice_estimate_activity_updated_qty_item']               = 'обновлено количество <b>%s</b> с %s на %s';
$lang['invoice_estimate_activity_added_item']                     = 'добавлена новая позиция <b>%s</b>';
$lang['invoice_estimate_activity_sent_to_client']                 = 'смета отправлена клиенту';
$lang['estimate_activity_client_accepted_and_converted']          = 'Клиент принял смету. Смета конвертирована в счет на оплату %s';
$lang['estimate_activity_client_accepted']                        = 'Клиент принял смету';
$lang['estimate_activity_client_declined']                        = 'Клиент отклонил смету';
$lang['estimate_activity_marked']                                 = 'отметил(а) смету как %s';
$lang['invoice_activity_status_updated']                          = 'Статус счета изменен с %s на %s';
$lang['invoice_activity_created']                                 = 'создал(а) счет на оплату';
$lang['invoice_activity_from_expense']                            = 'преобразовано в счет из расхода';
$lang['invoice_activity_recurring_created']                       = '[Повторяющийся] Счет создан планировщиком';
$lang['invoice_activity_recurring_from_expense_created']          = '[Счет из расходов] Счет создан планировщиком';
$lang['invoice_activity_sent_to_client_cron']                     = 'Планировщик отправил счет клиенту';
$lang['invoice_activity_sent_to_client']                          = 'счет отправлен клиенту';
$lang['invoice_activity_marked_as_sent']                          = 'счет отмечен как "отправленный"';
$lang['invoice_activity_payment_deleted']                         = 'удалена оплата счета. Платеж #%s, сумма %s';
$lang['invoice_activity_payment_made_by_client']                  = 'Клиент осуществил оплату счета <b>%s</b> - %s';
$lang['invoice_activity_payment_made_by_staff']                   = 'платеж зарегистрирован в сумме <b>%s</b> - %s';
$lang['invoice_activity_added_attachment']                        = 'Добавлен файл';

# Navigation
$lang['top_search_placeholder'] = 'Поиск...';

# Staff
$lang['staff_profile_inactive_account'] = 'Профиль сотрудника не активен';

# Estimates
$lang['copy_estimate']                = 'Копировать смету';
$lang['estimate_copied_successfully'] = 'Смета успешно копирована';
$lang['estimate_copied_fail']         = 'Ошибка при копировании';

# Tasks
$lang['tasks_view_assigned_to_user'] = 'Задачи закрепленные за мной';
$lang['tasks_view_follower_by_user'] = 'Задачи, которые я отслеживаю';
$lang['no_tasks_found']              = 'Задачи не найдены';

# Leads
$lang['leads_dt_datecreated']       = 'Добавлен';
$lang['leads_sort_by']              = 'Сортировать по';
$lang['leads_sort_by_datecreated']  = 'Дата создания';
$lang['leads_sort_by_kanban_order'] = 'Сортировка канбан';

# Authentication
$lang['check_email_for_resetting_password'] = 'Проверьте вашу эл. почту для дальнейших инструкций по восстановлению пароля';
$lang['inactive_account']                   = 'Неактивный профиль';
$lang['error_setting_new_password_key']     = 'Ошибка при установке нового пароля';
$lang['password_reset_message']             = 'Ваш пароль был сброшен. Пожалуйста, войдите!';
$lang['password_reset_message_fail']        = 'Ошибка при сбросе пароля. Попробуйте снова.';
$lang['password_reset_key_expired']         = 'Пароль недействителен';
$lang['auth_reset_pass_email_not_found']    = 'Почта не найдена';
$lang['auth_reset_password_submit']         = 'Сбросить пароль';

# Settings
$lang['settings_amount_to_words']          = 'Количество слов';
$lang['settings_amount_to_words_desc']     = 'Общее количество слов в счете/смете';
$lang['settings_amount_to_words_enabled']  = 'Включить';
$lang['settings_total_to_words_lowercase'] = 'Количество слов в нижнем регистре';
$lang['settings_show_tax_per_item']        = 'Показать налог для каждого пункта';

# Reports
$lang['report_sales_months_three_months'] = 'За последние 3 месяца';
$lang['report_invoice_number']            = 'Счет #';
$lang['report_invoice_customer']          = 'Клиент';
$lang['report_invoice_date']              = 'Дата';
$lang['report_invoice_duedate']           = 'Оплата до';
$lang['report_invoice_amount']            = 'Сумма';
$lang['report_invoice_amount_with_tax']   = 'Сумма с учетом налога';
$lang['report_invoice_amount_open']       = 'Открытая сумма';
$lang['report_invoice_status']            = 'Статус';

#Version 1.0.9

# Home stats
$lang['home_stats_by_project_status'] = 'Статистика по статусам проектов';
$lang['home_invoice_overview']        = 'Обзор счетов';
$lang['home_estimate_overview']       = 'Обзор смет';
$lang['home_proposal_overview']       = 'Обзор предложений';
$lang['home_lead_overview']           = 'Обзор контактов';
$lang['home_my_projects']             = 'Мои проекты';
$lang['home_announcements']           = 'Объявления';

# Settings
$lang['settings_leads_kanban_limit']                                    = 'Ограничение приводит к запрету строк на каждый статус';
$lang['settings_group_misc']                                            = 'Разное';
$lang['show_projects_on_calendar']                                      = 'Проекты';
$lang['settings_media_max_file_size_upload']                            = 'Максимальный размер файла для загрузки (MB)';
$lang['settings_client_staff_add_edit_delete_task_comments_first_hour'] = 'Разрешить клиентам/сотрудникам добавлять/редактировать комментарии только в первый час (к администраторам это не применяется)';

# Email templates
$lang['email_template_only_domain_email'] = 'Только эл. почта для домена';

# Announcements
$lang['dismiss_announcement']   = 'Отклонить объявление';
$lang['announcement_from']      = 'От:';
$lang['announcement_date']      = 'Дата публикации: %s';
$lang['announcement_not_found'] = 'Объявление не найдено';
$lang['announcements_recent']   = 'Последние объявления';

# General
$lang['zip_invoices']         = 'Счета';
$lang['zip_estimates']        = 'Сметы';
$lang['zip_payments']         = 'Платежи';
$lang['setup_help']           = 'Помощь';
$lang['clients_list_company'] = 'Компания';
$lang['dt_button_export']     = 'Экспорт';
$lang['dt_entries']           = 'записей';
$lang['invoice_total_paid']   = 'Общая сумма выплат';
$lang['invoice_amount_due']   = 'Сумма к оплате';

# Calendar
$lang['calendar_project'] = 'Проект';

# Leads
$lang['leads_import_assignee']     = 'Закреплены за';
$lang['customer_from_lead']        = 'Клиент от %s';
$lang['lead_kan_ban_attachments']  = 'Вложения: %s';
$lang['leads_sort_by_lastcontact'] = 'Последний контакт';

# Tasks
$lang['task_comment_added']     = 'Комментарий добавлен';
$lang['task_duedate']           = 'Выполнить до';
$lang['task_view_comments']     = 'Комментарии';
$lang['task_comment_updated']   = 'Комментарий обновлен';
$lang['task_visible_to_client'] = 'Видимый клиенту';
$lang['task_hourly_rate']       = 'Почасовая ставка';
$lang['hours']                  = 'Часы';
$lang['seconds']                = 'Секунды';
$lang['minutes']                = 'Минуты';
$lang['task_start_timer']       = 'Запуск таймера';
$lang['task_stop_timer']        = 'Остановить таймер';
$lang['task_billable']          = 'Оплачиваемое';
$lang['task_billable_yes']      = 'Да';
$lang['task_billable_no']       = 'Нет';
$lang['task_billed']            = 'Оплачен';
$lang['task_billed_yes']        = 'Оплачен по счету';
$lang['task_billed_no']         = 'Не оплачено';
$lang['task_user_logged_time']  = 'Ваше время работы:';
$lang['task_total_logged_time'] = 'Общее время работы:';
$lang['task_is_billed']         = 'На эту задачу выставлен счет на оплату с номером %s';
$lang['task_statistics']        = 'Статистика';
$lang['task_milestone']         = 'Этап';

# Tickets
$lang['ticket_message_updated_successfully'] = 'Сообщение обновлено';

# Invoices
$lang['invoice_task_item_project_tasks_not_included'] = 'Задачи проекта не включены в этот список.';
$lang['show_quantity_as']                             = 'Показать количество:';
$lang['quantity_as_qty']                              = 'Кол-во';
$lang['quantity_as_hours']                            = 'Часы';
$lang['invoice_table_hours_heading']                  = 'Часы';
$lang['bill_tasks']                                   = 'Задачи';
$lang['invoice_estimate_sent_to_email']               = 'Отправить';

# Estimates
$lang['estimate_table_hours_heading'] = 'Часы';

# General
$lang['is_customer_indicator']         = 'Клиент';
$lang['print']                         = 'Печать';
$lang['customer_permission_projects']  = 'Проекты';
$lang['no_timers_found']               = 'Нет запущенных таймеров';
$lang['timers_started_confirm_logout'] = 'Таймер не остановлен!<br />Вы уверены, что хотите выйти без остановки таймера?';
$lang['confirm_logout']                = 'Выйти';
$lang['timer_top_started']             = 'Запущен %s';

# Projects
$lang['cant_change_billing_type_billed_tasks_found']         = 'Вы не можете изменить тип счета. У этого проекта есть задачи.';
$lang['project_customer_permission_warning']                 = 'В системе указано, что контакт не имеете разрешение на проекты. Контакт не сможет увидеть проект. Рассмотрите возможность добавить разрешение в профиле контакта.';
$lang['project_invoice_timesheet_start_time']                = 'Время начала: %s';
$lang['project_invoice_timesheet_end_time']                  = 'Время окончания: %s';
$lang['project_invoice_timesheet_total_logged_time']         = 'Время работы: %s';
$lang['project_view_as_client']                              = 'Посмотреть проект как клиент';
$lang['project_mark_all_tasks_as_completed']                 = 'Отметить все задачи как завершенные и остановить все таймеры (Без уведомления участникам проекта)';
$lang['project_not_started_status_tasks_timers_found']       = 'Найдены запущенные таймеры задач для этого проекта, но проект имеет статус Не запущен. Рекомендуется изменить статус проекта на - В процессе';
$lang['project_status']                                      = 'Статус';
$lang['project_status_1']                                    = 'Не начат';
$lang['project_status_2']                                    = 'В процессе';
$lang['project_status_3']                                    = 'В ожидании';
$lang['project_status_4']                                    = 'Завершено';
$lang['project_file_dateadded']                              = 'Дата загрузки';
$lang['project_file_filename']                               = 'Название файла';
$lang['project_file__filetype']                              = 'Тип файла';
$lang['project_file_visible_to_customer']                    = 'Видимый клиенту';
$lang['project_file_uploaded_by']                            = 'Загружен';
$lang['edit_project']                                        = 'Изменить проект';
$lang['copy_project']                                        = 'Копировать проект';
$lang['delete_project']                                      = 'Удалить проект';
$lang['project_task_assigned_to_user']                       = 'Задача закреплена за вами';
$lang['seconds']                                             = 'Секунды';
$lang['hours']                                               = 'Часы';
$lang['minutes']                                             = 'Минуты';
$lang['project']                                             = 'Проект';
$lang['project_lowercase']                                   = 'проект';
$lang['projects']                                            = 'Проекты';
$lang['projects_lowercase']                                  = 'проекты';
$lang['project_settings']                                    = 'Настройки проекта';
$lang['project_invoiced_successfully']                       = 'Счет на оплату за проект выставлен клиенту';
$lang['new_project']                                         = 'Добавить проект';
$lang['project_files']                                       = 'Файлы';
$lang['project_activity']                                    = 'Активность';
$lang['project_name']                                        = 'Название проекта';
$lang['project_description']                                 = 'Описание проекта';
$lang['project_customer']                                    = 'Клиент';
$lang['project_start_date']                                  = 'Дата начала';
$lang['project_datecreated']                                 = 'Дата создания';
$lang['project_deadline']                                    = 'Выполнить до';
$lang['project_billing_type']                                = 'Тип оплаты';
$lang['project_billing_type_fixed_cost']                     = 'Фиксированная ставка';
$lang['project_billing_type_project_hours']                  = 'Почасовая за проект';
$lang['project_billing_type_project_task_hours']             = 'Почасовая за задачи';
$lang['project_billing_type_project_task_hours_hourly_rate'] = 'На основе почасовой ставки за задачи';
$lang['project_rate_per_hour']                               = 'Стоимость часа';
$lang['project_total_cost']                                  = 'Общая сумма';
$lang['project_members']                                     = 'Участники проекта';
$lang['project_member_removed']                              = 'Участник проекта успешно удален';
$lang['project_overview']                                    = 'Обзор проекта';
$lang['project_gant']                                        = 'Планирование';
$lang['project_milestones']                                  = 'Этапы';
$lang['project_milestone_order']                             = 'Порядок';
$lang['project_milestone_duedate_passed']                    = 'Срок прошел';
$lang['record_timesheet']                                    = 'Табель';
$lang['new_milestone']                                       = 'Новый этап';
$lang['edit_milestone']                                      = 'Изменить этап';
$lang['milestone_name']                                      = 'Название';
$lang['milestone_due_date']                                  = 'Выполнить до';
$lang['project_milestone']                                   = 'Этап';
$lang['project_notes']                                       = 'Заметки';
$lang['project_timesheets']                                  = 'Табели';
$lang['project_timesheet']                                   = 'Табель';
$lang['milestone_total_logged_time']                         = 'Рабочее время';
$lang['project_overview_total_logged_hours']                 = 'Общее рабочее время';
$lang['milestones_uncategorized']                            = 'Без категории';
$lang['milestone_no_tasks_found']                            = 'Задачи не найдены';
$lang['project_copied_successfully']                         = 'Данные проекта скопированы успешно';
$lang['failed_to_copy_project']                              = 'Ошибка копирования проекта';
$lang['copy_project_task_include_check_list_items']          = 'Копировать список позиций';
$lang['copy_project_task_include_assignees']                 = 'Скопировать с теми же исполнителями';
$lang['copy_project_task_include_followers']                 = 'Скопировать с теми же наблюдателями';
$lang['project_days_left']                                   = 'Осталось дней';
$lang['project_open_tasks']                                  = 'Открытых задач';
$lang['timesheet_stop_timer']                                = 'Остановить таймер';
$lang['failed_to_add_project_timesheet_end_time_smaller']    = 'Не удалось добавить табель. Время окончания меньше времени начала';
$lang['project_timesheet_user']                              = 'Участник';
$lang['project_timesheet_start_time']                        = 'Время начала';
$lang['project_timesheet_end_time']                          = 'Время окончания';
$lang['project_timesheet_time_spend']                        = 'Затраченное время';
$lang['project_timesheet_task']                              = 'Задача';
$lang['project_invoices']                                    = 'Счета на оплату';
$lang['total_logged_hours_by_staff']                         = 'Общее рабочее время';
$lang['invoice_project']                                     = 'Счет на оплату проекта';
$lang['invoice_project_info']                                = 'Информация о счете проекта';
$lang['invoice_project_data_single_line']                    = 'Общий счет на оплату';
$lang['invoice_project_data_task_per_item']                  = 'Счет по позициям задач';
$lang['invoice_project_data_timesheets_individually']        = 'Каждый табель индивидуально';
$lang['invoice_project_item_name_data']                      = 'Название позиции';
$lang['invoice_project_description_data']                    = 'Описание';
$lang['invoice_project_projectname_taskname']                = 'Название проекта + Название задачи';
$lang['invoice_project_all_tasks_total_logged_time']         = 'Все задачи + общее время на задачу';
$lang['invoice_project_project_name_data']                   = 'Название проекта';
$lang['invoice_project_timesheet_individually_data']         = 'Время начала работы + время окончания + общее время работы';
$lang['invoice_project_total_logged_time_data']              = 'Общее рабочее время';
$lang['project_allow_client_to']                             = 'Разрешить клиенту %s';
$lang['project_setting_view_task_attachments']               = 'видеть вложения в задачах';
$lang['project_setting_view_task_checklist_items']           = 'видеть список задач';
$lang['project_setting_upload_files']                        = 'загружать файлы';
$lang['project_setting_view_task_comments']                  = 'видеть комментарии к задаче';
$lang['project_setting_upload_on_tasks']                     = 'добавлять вложения в задачах';
$lang['project_setting_view_task_total_logged_time']         = 'видеть общее время работы над задачей';
$lang['project_setting_open_discussions']                    = 'добавлять обсуждения';
$lang['project_setting_comment_on_tasks']                    = 'комментировать задачи проекта';
$lang['project_setting_view_tasks']                          = 'видеть задачи';
$lang['project_setting_view_milestones']                     = 'видеть этапы';
$lang['project_setting_view_gantt']                          = 'видеть планирование';
$lang['project_setting_view_timesheets']                     = 'видеть табели';
$lang['project_setting_view_activity_log']                   = 'видеть журнал операций';
$lang['project_setting_view_team_members']                   = 'видеть участников проекта';
$lang['project_discussion_visible_to_customer_yes']          = 'Видимо для всех';
$lang['project_discussion_visible_to_customer_no']           = 'Не видимо';
$lang['project_discussion_posted_on']                        = 'Опубликовано %s';
$lang['project_discussion_posted_by']                        = 'Добавил(а) %s';
$lang['project_discussion_failed_to_delete']                 = 'Ошибка при удалении';
$lang['project_discussion_deleted']                          = 'Обсуждение удалено';
$lang['project_discussion_no_activity']                      = 'Нет активности';
$lang['project_discussion']                                  = 'Обсуждение';
$lang['project_discussions']                                 = 'Обсуждения';
$lang['edit_discussion']                                     = 'Добавить обсуждение';
$lang['new_project_discussion']                              = 'Добавить обсуждение';
$lang['project_discussion_subject']                          = 'Тема';
$lang['project_discussion_description']                      = 'Описание';
$lang['project_discussion_show_to_customer']                 = 'Видимо для клиента';
$lang['project_discussion_total_comments']                   = 'Всего комментариев';
$lang['project_discussion_last_activity']                    = 'Последняя активность';
$lang['discussion_add_comment']                              = 'Добавить комментарий';
$lang['discussion_newest']                                   = 'Новые';
$lang['discussion_oldest']                                   = 'Старые';
$lang['discussion_attachments']                              = 'Вложения';
$lang['discussion_send']                                     = 'Отправить';
$lang['discussion_reply']                                    = 'Ответ';
$lang['discussion_edit']                                     = 'Изменить';
$lang['discussion_edited']                                   = 'Изменено';
$lang['discussion_you']                                      = 'Вы';
$lang['discussion_save']                                     = 'Сохранить';
$lang['discussion_delete']                                   = 'Удалить';
$lang['discussion_view_all_replies']                         = 'Показать все ответы';
$lang['discussion_hide_replies']                             = 'Скрыть ответы';
$lang['discussion_no_comments']                              = 'Нет комментариев';
$lang['discussion_no_attachments']                           = 'Нет вложений';
$lang['discussion_attachments_drop']                         = 'Перенесите файл в эту область или нажмите, чтобы загрузить файл';
$lang['project_note']                                        = 'Примечание';
$lang['project_note_private']                                = 'Частные примечания';
$lang['project_save_note']                                   = 'Сохранить примечание';

# Project Activity
$lang['project_activity_created']                      = 'Создан проект';
$lang['project_activity_updated']                      = 'Проект обновлен';
$lang['project_activity_removed_team_member']          = 'Удален участник';
$lang['project_activity_added_team_member']            = 'Добавлен новый участник';
$lang['project_activity_marked_all_tasks_as_complete'] = 'Все задачи отмечены как выполнены';
$lang['project_activity_recorded_timesheet']           = 'Записан табель';
$lang['project_activity_task_name']                    = 'Задача:';
$lang['project_activity_deleted_discussion']           = 'Удалено обсуждение';
$lang['project_activity_created_discussion']           = 'Создано обсуждение';
$lang['project_activity_updated_discussion']           = 'Обновлено обсуждение';
$lang['project_activity_commented_on_discussion']      = 'Прокомментировал(а) обсуждение';
$lang['project_activity_deleted_discussion_comment']   = 'Удалил(а) комментарий в обсуждении';
$lang['project_activity_deleted_milestone']            = 'Удален этап';
$lang['project_activity_updated_milestone']            = 'Обновлен этап';
$lang['project_activity_created_milestone']            = 'Создан новый этап';
$lang['project_activity_invoiced_project']             = 'Счет на оплату проекта';
$lang['project_activity_task_marked_complete']         = 'Задание выполнено';
$lang['project_activity_task_unmarked_complete']       = 'Отметка о выполнении задания';
$lang['project_activity_task_deleted']                 = 'Задание удалено';
$lang['project_activity_new_task_comment']             = 'Комментарий к заданию';
$lang['project_activity_new_task_attachment']          = 'Загружен файл к заданию';
$lang['project_activity_new_task_assignee']            = 'Добавлен новый участник задания';
$lang['project_activity_task_assignee_removed']        = 'Удален участник задания';
$lang['project_activity_task_timesheet_deleted']       = 'Удален табель';
$lang['project_activity_uploaded_file']                = 'В проект загружен файл';
$lang['project_activity_status_updated']               = 'Статус проекта обновлен';
$lang['project_activity_visible_to_customer']          = 'Активность видна для клиента';
$lang['project_activity_project_file_removed']         = 'Файл удален из проекта';

# Customers area
$lang['clients_my_estimates']                                  = 'Сметы';
$lang['client_no_reply']                                       = 'Нет ответа';
$lang['clients_nav_projects']                                  = 'Проекты';
$lang['clients_my_projects']                                   = 'Проекты';
$lang['client_profile_image']                                  = 'Фото';
$lang['sales_report_cancelled_invoices_not_included']          = 'Отмененные счета на оплату исключены из отчета';
$lang['invoices_merge_cancel_merged_invoices']                 = 'Отметить объединенные счета как отмененные, вместо удаления';
$lang['invoice_marked_as_cancelled_successfully']              = 'Счет на оплату отменен';
$lang['invoice_unmarked_as_cancelled']                         = 'Счет на оплату восстановлен';
$lang['tasks_reminder_notification_before']                    = 'Напомнить о сроке сдачи за (Дней)';
$lang['not_task_deadline_reminder']                            = 'Напоминание о сроке сдачи';
$lang['dt_length_menu_all']                                    = 'Все';
$lang['task_not_finished']                                     = 'Не выполнено';
$lang['task_billed_cant_start_timer']                          = 'Задача оплачена. Нельзя включить таймер';
$lang['invoice_task_billable_timers_found']                    = 'Найдены включенные таймеры';
$lang['project_timesheet_not_updated']                         = 'Табель не учитывается';
$lang['project_invoice_task_no_timers_found']                  = 'Таймеры для этой задачи не найдены';
$lang['invoice_project_tasks_not_started']                     = 'Не начато | Дата начала: %s';
$lang['invoice_project_see_billed_tasks']                      = 'Посмотрите задачи, которые будут указаны в счете на оплату';
$lang['invoice_project_all_billable_tasks_marked_as_finished'] = 'Все выбранные задачи будут отмечены как завершенные';
$lang['invoice_project_nothing_to_bill']                       = 'Задач для оплаты нет. Добавьте вручную позиции в счете на оплату.';
$lang['invoice_project_start_date_tasks_not_passed']           = 'Нельзя добавить задачу с будущей датой';
$lang['invoice_project_stop_all_timers']                       = 'Остановить все таймеры';
$lang['invoice_project_stop_billable_timers_only']             = 'Остановка только оплачиваемые таймеры';
$lang['project_tasks_total_timers_stopped']                    = 'Всего остановлено %s таймеров';
$lang['project_invoice_timers_started']                        = 'Найдены работающие таймеры на оплачиваемых заданиях, нельзя создать счет на оплату. Пожалуйста, остановите все таймеры и сформируйте счет.';
$lang['task_start_timer_only_assignee']                        = 'Вы должны быть участником этой задачи, чтобы запустить таймер!';
$lang['task_comments']                                         = 'Комментарии';
$lang['invoice_total_tax']                                     = 'Совокупный налог';
$lang['estimates_total_tax']                                   = 'Совокупный налог';
$lang['report_invoice_total_tax']                              = 'Совокупный налог';
$lang['home_tickets']                                          = 'Тикеты';
$lang['home_project_activity']                                 = 'Последняя активность в проектах';
$lang['view_tracking']                                         = 'Отслеживание';
$lang['view_date']                                             = 'Дата';
$lang['view_ip']                                               = 'IP адрес';
$lang['article_total_views']                                   = 'Всего просмотров';
$lang['leads_source']                                          = 'Источник';
$lang['invoices_available_for_merging']                        = 'Счета доступны для объединения';
$lang['invoices_merge_discount']                               = 'Вам придется применить скидку от общей суммы %s вручную к этому счету';
$lang['invoice_merge_number_warning']                          = 'Объединение счетов создаст пробелы в номерах счетов. Пожалуйста, не объединяйте счета, если Вы не хотите  пробелов в вашей истории счетов. У вас также есть возможность регулировки вручную номеров счетов, если вы хотите заполнить пробелы.';
$lang['invoice_mark_as']                                       = 'Отметить как %s';
$lang['invoice_unmark_as']                                     = 'Снять отметку %s';
$lang['invoice_status_cancelled']                              = 'Отменено';
$lang['tasks_reminder_notification_before_help']               = 'Послать уведомление исполнителям о крайнем сроке за X дней. Уведомление/письмо отсылается только исполнителям. Если разница между датой начала задачи и сроком выполнения меньше, чем количество дней для уведомления, то уведомление не будет отправлено.';

# Version 1.1.0
$lang['project_invoice_select_all_tasks'] = 'Выбрать все задачи';
$lang['lead_company']                     = 'Компания';

# Version 1.1.1
$lang['admin_auth_forgot_password_button']       = 'Подтвердить';
$lang['task_assigned']                           = 'Участники';
$lang['switch_to_pipeline']                      = 'Переключиться на колонки';
$lang['switch_to_list_view']                     = 'Переключиться на список';
$lang['estimates_pipeline']                      = 'Сметы колонкой';
$lang['estimates_pipeline_sort']                 = 'Сортировать по';
$lang['estimates_sort_expiry_date']              = 'Дата окончания срока';
$lang['estimates_sort_pipeline']                 = 'Передано на производство';
$lang['estimates_sort_datecreated']              = 'Дата создания';
$lang['estimates_sort_estimate_date']            = 'Дата сметы';
$lang['estimate_set_reminder_title']             = 'Добавить напоминание';
$lang['invoice_set_reminder_title']              = 'Добавить напоминание';
$lang['estimate_reminders']                      = 'Напоминания';
$lang['invoice_reminders']                       = 'Напоминания';
$lang['estimate_notes']                          = 'Примечания';
$lang['estimate_add_note']                       = 'Добавить примечание';
$lang['dropdown_non_selected_tex']               = 'Ничего не выбрано';
$lang['auto_close_ticket_after']                 = 'Авто закрытие тикета через (Часы)';
$lang['event_description']                       = 'Описание';
$lang['delete_event']                            = 'Удалить';
$lang['not_new_ticket_created']                  = 'Новый тикет в вашем отделе - %s';
$lang['receive_notification_on_new_ticket']      = 'Получите уведомление о новом открытом тикете';
$lang['receive_notification_on_new_ticket_help'] = 'Все сотрудники, которые состоят в отделе тикета, получат уведомление, о том, что новый тикет открыт';
$lang['event_updated']                           = 'Событие успешно обновлено';
$lang['customer_contacts']                       = 'Контакты';
$lang['new_contact']                             = 'Новый контакт';
$lang['contact']                                 = 'Контакт';
$lang['contact_lowercase']                       = 'контакт';
$lang['contact_primary']                         = 'Первичный контакт';
$lang['contact_position']                        = 'Должность';
$lang['contact_active']                          = 'Активность';
$lang['client_company_info']                     = 'Информация о компании';
$lang['proposal_save']                           = 'Сохранить предложение';
$lang['calendar']                                = 'Календарь';
$lang['settings_pdf']                            = 'PDF';
$lang['settings_pdf_font']                       = 'Шрифт PDF';
$lang['settings_pdf_table_heading_color']        = 'Цвет элементов заголовка таблицы';
$lang['settings_pdf_table_heading_text_color']   = 'Цвет текста элементов заголовка таблицы';
$lang['settings_pdf_font_size']                  = 'Размер шрифта по умолчанию';
$lang['proposal_status_draft']                   = 'Черновик';
$lang['custom_field_contacts']                   = 'Контакты';
$lang['company_primary_email']                   = 'Основная эл. почта';
$lang['client_register_contact_info']            = 'Информация об основном контакте';
$lang['client_register_company_info']            = 'Информация о компании';
$lang['contact_permissions_info']                = 'Настройте соответствующие разрешения для этого контакта';
$lang['default_leads_kanban_sort']               = 'Сортировка по умолчанию';
$lang['default_leads_kanban_sort_type']          = 'Сортировка';
$lang['order_ascending']                         = 'По возрастанию';
$lang['order_descending']                        = 'По убыванию';
$lang['calendar_expand']                         = 'Развернуть';
$lang['proposal_reminders']                      = 'Напоминания';
$lang['proposal_set_reminder_title']             = 'Добавить напоминание';
$lang['settings_allowed_upload_file_types']      = 'Разрешенные типы файлов';
$lang['no_primary_contact']                      = 'У этого клиента нет основного контакта. Это нужно настроить. Рекомендуется всем клиентам иметь основные контакты.';
$lang['leads_merge_customer']                    = 'Объединение клиентских полей';
$lang['leads_merge_contact']                     = 'Объединение контактных полей';
$lang['leads_merge_as_contact_field']            = 'Объединить в качестве контактного поля';
$lang['lead_convert_to_client_phone']            = 'Телефон';
$lang['invoice_status_report_all']               = 'Все';
$lang['import_contact_field']                    = 'Поле контакты';
$lang['file_uploaded_success']                   = 'Файл загружен успешно';
$lang['file_exceeds_max_filesize']               = 'Загруженный файл превышает параметр upload_max_filesize в файле php.ini';
$lang['file_exceeds_maxfile_size_in_form']       = 'Загруженный файл превышает параметр MAX_FILE_SIZE который была указан в HTML-форме';
$lang['file_uploaded_partially']                 = 'Загружаемый файл был загружен частично';
$lang['file_not_uploaded']                       = 'Ни один файл не был загружен';
$lang['file_missing_temporary_folder']           = 'Отсутствует временная папка';
$lang['file_failed_to_write_to_disk']            = 'Не удалось записать файл на диск.';
$lang['file_php_extension_blocked']              = 'Расширение PHP остановило загрузку файла.';
$lang['calendar_expand']                         = 'Расширить';
$lang['view_pdf']                                = 'Посмотреть PDF';
$lang['expense_repeat_every']                    = 'Повторять каждые';

# Version 1.1.2
$lang['leads_switch_to_kanban']                   = 'Режим канбан';
$lang['contract_content']                         = 'Договор';
$lang['contract_save']                            = 'Сохранить договор';
$lang['contract_send_to_email']                   = 'Отправить на почту';
$lang['contract_send_to_client_modal_heading']    = 'Отправить договор по почте';
$lang['contract_send_to']                         = 'Отправить';
$lang['contract_send_to_client_attach_pdf']       = 'Прикрепить PDF';
$lang['contract_send_to_client_preview_template'] = 'Просмотр шаблона письма';
$lang['include_attachments_to_email']             = 'Включить вложения в письмо';
$lang['contract_sent_to_client_success']          = 'Договор успешно отправлен клиенту';
$lang['contract_sent_to_client_fail']             = 'Не удалось отправить договор';

# Version 1.1.3
$lang['client_invalid_username_or_password'] = 'Неправильное имя пользователя или пароль';
$lang['client_old_password_incorrect']       = 'Ваш старый пароль неверный';
$lang['client_password_changed']             = 'Ваш пароль был изменен';

# Version 1.1.4
$lang['total_leads_deleted']                              = 'Всего лидов удалено: %s';
$lang['total_clients_deleted']                            = 'Всего клиентов удалено: %s';
$lang['confirm_action_prompt']                            = 'Вы уверены, что хотите выполнить это действие?';
$lang['mass_delete']                                      = 'Массовое удаление';
$lang['email_protocol']                                   = 'Протокол эл. почты';
$lang['add_edit_members']                                 = 'Добавить/изменить участников';
$lang['project_overview_logged_hours']                    = 'Рабочих часов:';
$lang['project_overview_billable_hours']                  = 'Оплачиваемые часы:';
$lang['project_overview_billed_hours']                    = 'Оплаченные часы:';
$lang['project_overview_unbilled_hours']                  = 'Неоплаченные часы:';
$lang['calendar_first_day']                               = 'Первый день';
$lang['permission_view']                                  = 'Просмотр';
$lang['permission_edit']                                  = 'Изменить';
$lang['permission_create']                                = 'Добавить';
$lang['permission_delete']                                = 'Удалить';
$lang['permission']                                       = 'Права';
$lang['permissions']                                      = 'Права';
$lang['proposals_pipeline']                               = 'Передано на производство ';
$lang['proposals_pipeline_sort']                          = 'Сортировать по';
$lang['proposals_sort_open_till']                         = 'Открыто до';
$lang['proposals_sort_pipeline']                          = 'Передано на производство';
$lang['proposals_sort_datecreated']                       = 'Дата создания';
$lang['proposals_sort_proposal_date']                     = 'Дата предложения';
$lang['is_not_staff_member']                              = 'Не сотрудник';
$lang['lead_created']                                     = 'Сформировано';
$lang['access_tickets_to_none_staff_members']             = 'Разрешить доступ не сотрудникам';
$lang['project_expenses']                                 = 'Расходы';
$lang['expense_currency']                                 = 'Валюта';
$lang['currency_valid_code_help']                         = 'Введите правильный код валюты.';
$lang['week']                                             = 'Неделя';
$lang['weeks']                                            = 'Недель';
$lang['month']                                            = 'Месяц';
$lang['months']                                           = 'Месяцев';
$lang['year']                                             = 'Год';
$lang['years']                                            = 'Лет';
$lang['expense_report_category']                          = 'Категория';
$lang['expense_paid_via']                                 = 'Оплата через %s';
$lang['item_as_expense']                                  = '[Расход]';
$lang['show_help_on_setup_menu']                          = 'Показать пункт меню справки в меню настроек';
$lang['customers_summary_total']                          = 'Всего клиентов';
$lang['filter_by']                                        = 'Фильтр по';
$lang['re_captcha']                                       = 'reCAPTCHA';
$lang['recaptcha_site_key']                               = 'Ключ сайта';
$lang['recaptcha_secret_key']                             = 'Секретный ключ';
$lang['recaptcha_error']                                  = 'Поле reCAPTCHA сделало предположение, что вы робот.';
$lang['smtp_username']                                    = 'Имя пользователя SMTP';
$lang['smtp_username_help']                               = 'Заполните, только если ваш почтовый клиент использует имя пользователя для авторизации SMTP.';
$lang['pinned_project']                                   = 'Закрепленные проекты';
$lang['pin_project']                                      = 'Прикрепить проект';
$lang['unpin_project']                                    = 'Открепить проект';
$lang['smtp_encryption']                                  = 'Шифрование почты';
$lang['smtp_encryption_none']                             = 'Ничего';
$lang['show_proposals_on_calendar']                       = 'Предложения';
$lang['invoice_project_see_billed_expenses']              = 'Увидеть расходы, которые будут оплачиваться по этому счету';
$lang['project_overview_expenses']                        = 'Суммарные расходы';
$lang['project_overview_expenses_billable']               = 'Оплачиваемые расходы';
$lang['project_overview_expenses_billed']                 = 'Оплаченные расходы';
$lang['project_overview_expenses_unbilled']               = 'Неоплаченные расходы';
$lang['announcement_date_list']                           = 'Дата';
$lang['project_setting_view_finance_overview']            = 'посмотреть финансовый обзор';
$lang['show_all_tasks_for_project_member']                = 'Позволяет всем сотрудникам видеть все задачи, связанные с проектами (включая нештатных)';
$lang['not_staff_added_as_project_member']                = 'Добавил вас в качестве участника проекта';
$lang['report_expenses_base_currency_select_explanation'] = 'Вы должны выбрать валюту, поскольку система используются различные валюты для расходов.';

# Version 1.1.6
$lang['project_activity_recorded_expense']   = 'Добавлен расход';
$lang['save_customer_and_add_contact']       = 'Сохранить и добавить контакт';
$lang['tickets_chart_weekly_opening_stats']  = 'Еженедельная статистика';
$lang['related_knowledgebase_articles']      = 'Похожие статьи';
$lang['detailed_overview']                   = 'Обзор задач';
$lang['tasks_total_checklists_finished']     = 'Количество выполненных пунктов';
$lang['tasks_total_added_attachments']       = 'Общее количество вложений';
$lang['tasks_total_comments']                = 'Всего комментариев';
$lang['task_finished_on_time']               = 'Закончено вовремя?';
$lang['task_finished_on_time_indicator']     = 'Да';
$lang['task_not_finished_on_time_indicator'] = 'Нет';
$lang['filter']                              = 'Фильтр';
$lang['task_filter_detailed_all_months']     = 'Все месяцы';
$lang['kb_article_slug']                     = 'Ярлык';

# Version 1.1.7
$lang['email_template_ticket_warning']          = 'Если тикет импортируется с помощью почты (email piping) и контакт не сущестует в системе, то поля не будут заменены.';
$lang['auto_stop_tasks_timers_on_new_timer']    = 'Остановить все активные таймеры при запуске нового таймера';
$lang['notification_when_customer_pay_invoice'] = 'Уведомлять при оплате счета клиентом (встроенный метод)';
$lang['not_invoice_payment_recorded']           = 'Новая оплата счета - %s';
$lang['email_template_contact_warning']         = 'Если контакт не зарегистрирован, то объединение полей не будет выполнено.';
$lang['change_role_permission_warning']         = 'Изменение разрешений для роли не повлияет на нынешних сотрудников, которые используют эту роль.';
$lang['task_copied_successfully']               = 'Задача успешно скопирована';
$lang['failed_to_copy_task']                    = 'Не удалось скопировать задачу';
$lang['not_project_file_uploaded']              = 'Добавлен новый файл проекта';
$lang['settings_calendar_color']                = '%s - цвет';
$lang['settings_calendar_colors_heading']       = 'Внешний вид';
$lang['reminder']                               = 'Напоминание';
$lang['back_to_tasks_list']                     = 'Вернуться к списку задач';
$lang['copy_task_confirm']                      = 'Подтвердить';
$lang['changing_items_affect_warning']          = 'Изменение информации не влияет на создание счета/сметы/предложения.';
$lang['tax_is_used_in_expenses_warning']        = 'Вы не можете обновить этот налог, потому что найдены транзакции с использованием этого налога.';
$lang['note']                                   = 'Примечание';
$lang['leads_staff_report_converted']           = 'Всего конвертировано лидов';
$lang['leads_staff_report_created']             = 'Всего добавлено лидов';
$lang['leads_staff_report_lost']                = 'Всего потеряно лидов';
$lang['client_go_to_dashboard']                 = 'Вернуться';
$lang['show_estimate_reminders_on_calendar']    = 'Напоминания о сметах';
$lang['show_invoice_reminders_on_calendar']     = 'Напоминания о счетах';
$lang['show_proposal_reminders_on_calendar']    = 'Напоминания о предложениях';
$lang['calendar_estimate_reminder']             = 'Напоминания о сметах';
$lang['calendar_invoice_reminder']              = 'Напоминание о счетах';
$lang['calendar_proposal_reminder']             = 'Напоминание о предложениях';
$lang['proposal_due_after']                     = 'Срок действия предложения (дней)';
$lang['project_progress']                       = 'Прогресс';
$lang['calculate_progress_through_tasks']       = 'Рассчитать прогресс выполнения задач';
$lang['allow_customer_to_change_ticket_status'] = 'Разрешить клиенту изменять статус тикета из клиентского аккаунта';
$lang['switch_to_general_report']               = 'Переключить на отчет сотрудника';
$lang['switch_to_staff_report']                 = 'Переключить на полный отчет';
$lang['generate']                               = 'Генерировать';
$lang['from_date']                              = 'От даты';
$lang['to_date']                                = 'До даты';
$lang['not_results_found']                      = 'Результатов не найдено';
$lang['lead_lock_after_convert_to_customer']    = 'Не разрешать редактирование лида после преобразования в клиента (к администраторам это не применяется)';
$lang['default_pipeline_sort']                  = 'Сортировка по умолчанию';
$lang['toggle_full_view']                       = 'Полный просмотр';
$lang['not_estimate_invoice_deleted']           = 'удалил созданный счет';
$lang['not_task_new_comment']                   = 'прокомментировал задачу %s';

# Version 1.1.8
$lang['invoice_number_exists']                  = 'Этот счет актуален для текущего года.';
$lang['estimate_number_exists']                 = 'Это число сметы актуально для текущего года.';
$lang['email_exists']                           = 'Этот эл. адрес уже существует';
$lang['not_uploaded_project_file']              = 'Загружен новый файл';
$lang['not_created_new_project_discussion']     = 'Создано новое обсуждение проекта';
$lang['not_commented_on_project_discussion']    = 'Новый комментарий по обсуждению проекта';
$lang['all_staff_members']                      = 'Все сотрудники';
$lang['help_project_permissions']               = 'ПРОСМОТР позволяет видеть сотрудникам Все проекты. Сотрудники могут видеть только свои проекты, для этого не включайте им разрешение на ПРОСМОТР.';
$lang['help_tasks_permissions']                 = 'ПРОСМОТР позволяет видеть сотрудникам Все задачи. Сотрудники могут видеть только свои проекты, для этого не включайте им разрешение на ПРОСМОТР.';
$lang['expense_recurring_days']                 = 'День(ей)';
$lang['expense_recurring_weeks']                = 'Неделя(ь)';
$lang['expense_recurring_months']               = 'Месяц(ев)';
$lang['expense_recurring_years']                = 'Год(а)';
$lang['reset_to_default_color']                 = 'Восстановить цвет по умолчанию';
$lang['pdf_logo_width']                         = 'Ширина логотипа (PX)';
$lang['drop_files_here_to_upload']              = 'Перетащите сюда файлы для загрузки';
$lang['browser_not_support_drag_and_drop']      = 'Ваш браузер не поддерживает перетаскивание файлов для загрузки';
$lang['remove_file']                            = 'Удалить файл';
$lang['you_can_not_upload_any_more_files']      = 'Вы не можете загружать больше файлов';
$lang['custom_field_only_admin']                = 'Ограничить видимость только для администраторов';
$lang['leads_default_source']                   = 'Источник по умолчанию';
$lang['clear_activity_log']                     = 'Очистить журнал';
$lang['default_contact_permissions']            = 'Права по умолчанию';
$lang['invoice_activity_marked_as_cancelled']   = 'счет отмечен как отмененный';
$lang['invoice_activity_unmarked_as_cancelled'] = 'счет не отмечен как отмененный';
$lang['wait_text']                              = 'Пожалуйста, подождите...';
$lang['projects_summary']                       = 'Проекты';
$lang['dept_imap_host']                         = 'Хост IMAP';
$lang['dept_encryption']                        = 'Шифрование';
$lang['dept_email_password']                    = 'Пароль';
$lang['dept_email_no_encryption']               = 'Нет шифрования';
$lang['failed_to_decrypt_password']             = 'Не удалось расшифровать пароль';
$lang['delete_mail_after_import']               = 'Удалить письмо после импорта?';
$lang['expiry_reminder_enabled']                = 'Отправить напоминание об истечении';
$lang['send_expiry_reminder_before']            = 'Отправить напоминание об истечении за (дней)';
$lang['not_expiry_reminder_sent']               = 'Напоминание об истечении было отправлено';
$lang['send_expiry_reminder']                   = 'Отправлено напоминание об истечении срока действия';
$lang['sent_expiry_reminder_success']           = 'Напоминание об истечении срока успешно отправлено';
$lang['sent_expiry_reminder_fail']              = 'Не удалось отправить напоминание об истечении срока действия';
$lang['leads_default_status']                   = 'Статус по умолчанию';
$lang['item_description_placeholder']           = 'Описание';
$lang['item_long_description_placeholder']      = 'Полное описание';
$lang['item_quantity_placeholder']              = 'Количество';
$lang['item_rate_placeholder']                  = 'Ставка';
$lang['tickets_summary']                        = 'Тикеты';
$lang['tasks_list_priority']                    = 'Приоритет';
$lang['ticket_status_db_2']                     = 'В процессе';
$lang['ticket_status_db_1']                     = 'Открыт';
$lang['ticket_status_db_3']                     = 'Отвечен';
$lang['ticket_status_db_4']                     = 'В ожидании';
$lang['ticket_status_db_5']                     = 'Закрыт';
$lang['ticket_priority_db_1']                   = 'Низкий';
$lang['ticket_priority_db_2']                   = 'Средний';
$lang['ticket_priority_db_3']                   = 'Высокий';
$lang['customer_have_projects_by']              = 'Содержит проекты по статусу %s';
$lang['customer_have_proposals_by']             = 'Содержит предложения по статусу %s';
$lang['do_not_redirect_payment']                = 'Не перенаправлять меня к процессору оплаты';
$lang['project_tickets']                        = 'Тикеты';
$lang['invoice_report']                         = 'Отчет по счетам';
$lang['payment_modes_report']                   = 'Способы оплаты (Платежи)';
$lang['customer_admins']                        = 'Администратор по работе с клиентами';
$lang['assign_admin']                           = 'Назначить администратора';
$lang['customer_admin_date_assigned']           = 'Назначение даты';
$lang['customer_admin_login_as_client_message'] = 'Здравствуйте %s. Вы добавлены в качестве администратора для этого клиента.';
$lang['ticket_form_validation_file_size']       = 'Размер файла должен быть меньше, чем %s';
$lang['has_transactions_currency_base_change']  = 'Изменение основной валюты возможно только, если нет никаких операций, которые привязаны к этой валюте. Удалить операции, чтобы изменить основную валюту';
$lang['customers_sort_all']                     = 'Все';

# Version 1.1.9
$lang['use_recaptcha_customers_area']    = 'Резрешить reCAPTCHA для клиентской области (Вход/Регистрация)';
$lang['project_marked_as_finished']      = 'Проект завершен';
$lang['project_status_updated']          = 'Статус проекта обновлен';
$lang['remove_decimals_on_zero']         = 'Убрать лишние цифры в виде нулей после запятой (2.00 будет как 2, а 2.25 останется как 2.25)';
$lang['remove_tax_name_from_item_table'] = 'Удалить название налога из строки таблицы';

# Version 1.2.0
$lang['not_billable_expenses_by_categories']      = 'Неоплачиваемые расходы по категориям';
$lang['billable_expenses_by_categories']          = 'Оплачиваемые расходы по категориям';
$lang['format_letter_size']                       = 'A4 Альбомная';
$lang['pdf_formats']                              = 'Форматы документов';
$lang['swap_pdf_info']                            = 'Разделить информацию о Компания/Клиент (информация о компании с правой стороны, информация о клиенте с левой стороны)';
$lang['expenses_filter_by_categories']            = 'По категориям';
$lang['task_copy']                                = 'Копия';
$lang['estimate_status']                          = 'Статус';
$lang['expenses_report_exclude_billable']         = 'Исключить оплачиваемые расходы';
$lang['expenses_total']                           = 'Всего';
$lang['estimate_activity_added_attachment']       = 'Добавлено вложение';
$lang['show_to_customer']                         = 'Показать клиенту';
$lang['hide_from_customer']                       = 'Скрыть от клиента';
$lang['expenses_report_total']                    = 'Всего';
$lang['expenses_report']                          = 'Отчет о расходах';
$lang['expenses_report_total_tax']                = 'Общий налог';
$lang['expenses_detailed_report']                 = 'Детальный отчет';
$lang['expense_not_billable']                     = 'Неплатежеспособный';
$lang['notification_settings']                    = 'Настройки уведомлений';
$lang['staff_with_roles']                         = 'Сотрудники с ролями';
$lang['specific_staff_members']                   = 'Специальные сотрудники';
$lang['proposal_mark_as']                         = 'Отметить как %s';
$lang['kb_report_total_answers']                  = 'Всего';
$lang['ticket_message_edit']                      = 'Изменить';
$lang['invoice_files']                            = 'Файлы счетов';
$lang['estimate_files']                           = 'Файлы сметы';
$lang['proposal_files']                           = 'Файлы предложения';
$lang['invoices_awaiting_payment']                = 'Счета в ожидании оплаты';
$lang['tasks_not_finished']                       = 'Незавершенные задачи';
$lang['outstanding_invoices']                     = 'Неоплаченные счета';
$lang['past_due_invoices']                        = 'Просроченные счета';
$lang['paid_invoices']                            = 'Оплаченные счета';
$lang['invoice_estimate_year']                    = 'Год';
$lang['task_stats_logged_hours']                  = 'Время работы';
$lang['leads_converted_to_client']                = 'Конвертированные лиды';
$lang['task_assigned_from']                       = 'Эта задача назначена вам %s';
$lang['new_note']                                 = 'Новое примечание';
$lang['my_tickets_assigned']                      = 'Тикеты которые назначены мне';
$lang['filter_by_assigned']                       = 'По исполнителю';
$lang['staff_stats_total_logged_time']            = 'Общее время работы';
$lang['staff_stats_last_month_total_logged_time'] = 'Время работы за последний месяц';
$lang['staff_stats_this_month_total_logged_time'] = 'Время работы в этом месяце';
$lang['staff_stats_last_week_total_logged_time']  = 'Время работы за последнюю неделю';
$lang['staff_stats_this_week_total_logged_time']  = 'Время работы за эту неделю';
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
$lang['description_visible_to_customer']            = 'Показать описание для клиента';
$lang['upcoming_tasks']                             = 'Предстоящие задачи';
$lang['payment_credit_card_number']                 = 'Номер карты';
$lang['payment_credit_card_expiration_date']        = 'Срок годности';
$lang['payment_billing_email']                      = 'Эл. почта';
$lang['submit_payment']                             = 'Оплатить';
$lang['custom_field_disallow_customer_to_edit']     = 'Запретить клиенту редактировать это поле';
$lang['project_due_notice']                         = 'Этот проект просрочен на %s дн.';
$lang['not_lead_added_attachment']                  = 'добавлено новое вложение %s';
$lang['lead_note_date_added']                       = 'Добавлено примечание: %s';
$lang['recurring_custom']                           = 'Произвольно';
// don't translate these, only added for better readability already translated for the expenses custom recurring feature.
$lang['invoice_recurring_months'] = $lang['expense_recurring_months'];
$lang['invoice_recurring_years']  = $lang['expense_recurring_years'];
$lang['invoice_recurring_days']   = $lang['expense_recurring_days'];
$lang['invoice_recurring_weeks']  = $lang['expense_recurring_weeks'];

# Version 1.2.4
$lang['document_direction']                                 = 'Направление';
$lang['notify_project_members_status_change']               = 'Уведомлять участников проекта о статусе проекта';
$lang['not_project_status_updated']                         = 'Статус проекта обновлен с %s на %s';
$lang['ticket_not_found']                                   = 'Тикет не найден';
$lang['project_not_found']                                  = 'Проект не найден';
$lang['export_project_data']                                = 'Экспорт данных проекта';
$lang['total_project_members']                              = 'Всего участников проекта';
$lang['total_project_files']                                = 'Вложенные файлы';
$lang['total_project_discussions_created']                  = 'Создано обсуждений';
$lang['project_member']                                     = 'Участник';
$lang['total_project_discussions_comments']                 = 'Всего комментариев';
$lang['staff_total_task_assigned']                          = 'Назначение общих задач';
$lang['staff_total_comments_on_tasks']                      = 'Комментарии к задачам';
$lang['project_members_overview']                           = 'Участники проекта';
$lang['project_milestones_overview']                        = 'Этапы';
$lang['total_tasks_in_milestones']                          = 'Назначение общих задач';
$lang['total_task_members_assigned']                        = 'Общее число участников';
$lang['total_task_members_followers']                       = 'Всего подписчиков';
$lang['total_milestones']                                   = 'Всего этапов';
$lang['total_project_worked_days']                          = 'Всего рабочих дней';
$lang['finance_overview']                                   = 'Финансы';
$lang['project_custom_fields']                              = 'Произвольные поля';
$lang['total_tickets_related_to_project']                   = 'Всего задач, связанных с проектом';
$lang['projects_total_invoices_created']                    = 'Всего созданных счетов';
$lang['do_not_send_invoice_payment_email_template_contact'] = 'Не отправляйте оплату счета по почте контактам клиента.';
$lang['no_preview_available_for_file']                      = 'Предварительный просмотр недоступен для этого файла.';
$lang['project_activity_deleted_file_discussion_comment']   = 'Файл для обсуждения удален';
$lang['email_template_discussion_info']                     = 'Этот шаблон используется для обсуждения проекта(обсуждение файлов и обычные обсуждения)';
$lang['format_a4_portrait_size']                            = 'Портрет';
$lang['only_show_contact_tickets']                          = 'В профиле клиента отображаются только связанные тикеты (основной контакт не применяется)';
$lang['cancel_overdue_reminders_invoice']                   = 'Предотвратить отправку просроченных напоминаний для этого счета';
$lang['customer_shipping_address_notice']                   = 'Не заполняйте адрес доставки, если вы не будете использовать адрес доставки в клиентских счетах';
$lang['timesheets_overview']                                = 'Табели';
$lang['invoice_status_draft']                               = 'Черновик';
$lang['save_as_draft']                                      = 'Сохранить как черновик';
$lang['convert_and_save_as_draft']                          = 'Конвертировать и сохранить как черновик';
$lang['convert']                                            = 'Конвертировать';
$lang['exclude_invoices_draft_from_client_area']            = 'Исключить счета в статусе Черновик из клиентской зоны';
$lang['invoice_draft_status_info']                          = 'Для счета в статусе Черновик, статус будет изменен автоматически при отправке счета клиенту или когда счет отмечен как Отправлен.';
$lang['task_info']                                          = 'Информация о задаче';
$lang['recurring_tasks']                                    = 'Повторяющиеся';
// don't translate these, already translated
$lang['task_repeat_every']                         = $lang['expense_repeat_every'];
$lang['task_recurring_months']                     = $lang['expense_recurring_months'];
$lang['task_recurring_years']                      = $lang['expense_recurring_years'];
$lang['task_recurring_days']                       = $lang['expense_recurring_days'];
$lang['task_recurring_weeks']                      = $lang['expense_recurring_weeks'];
$lang['todays_tasks']                              = 'Сегодняшние задачи';
$lang['payment_mode_invoices_only']                = 'Только счета';
$lang['payment_mode_expenses_only']                = 'Только расходы';
$lang['task_no_checklist_items_found']             = 'Отсутствует чек-лист для этой задачи';
$lang['task_no_description']                       = 'Отсутствует описание для этой задачи';
$lang['expenses_reminders']                        = 'Напоминания';
$lang['expense_set_reminder_title']                = 'Настроить напоминание о расходах';
$lang['calendar_expense_reminder']                 = 'Напоминание о расходах';
$lang['recurring_task']                            = 'Повторяющаяся задача';
$lang['disable_email_from_being_sent']             = 'Отключить эту электронную почту от отправки';
$lang['not_sent_indicator']                        = 'Не отправлено';
$lang['proposal_status_revised']                   = 'Исправлено';
$lang['customer_currency_change_notice']           = 'Если клиент использует другую валюту, то убедитесь, что вы выбрали соответствующую валюту для этого клиента. Изменение валюты невозможно после операций, которые уже записаны.';
$lang['click_to_add_content']                      = 'Нажмите здесь, чтобы добавить содержимое';
$lang['related_to_project']                        = '%s относится к %s: %s';
$lang['back_to_lead']                              = 'Назад к лиду';
$lang['add_task_timer_started_warning']            = 'Остановите текущий таймер для этой задачи, чтобы добавить новый таймер вручную.';
$lang['sending_email_contact_permissions_warning'] = 'Не удалось автоматически выбрать контакты клиента. Пожалуйста, убедитесь, что клиент имеет связанные контакты с разрешением %s';

# Version 1.2.6
$lang['currently_supported_currencies']                       = 'Поддерживаемые валюты';
$lang['authorize_notice']                                     = 'Защитное соединение SSL является обязательным, если вы используете Authorize.Net AIM payment API. Authorize.net поддерживает только одну валюту на один аккаунт. Убедитесь, что выдобавили только одну валюту, которая указана в вашей учетной записи Authorize в настройках валюты.';
$lang['settings_paymentmethod_developer_mode']                = 'Режим разработчика';
$lang['payment_cardholder_name']                              = 'Имя владельца карты';
$lang['settings_paymentmethod_authorize_api_login_id']        = 'Логин API';
$lang['settings_paymentmethod_mollie_api_key']                = 'Ключ API';
$lang['settings_paymentmethod_authorize_api_transaction_key'] = 'ИД транзакции API';
$lang['settings_paymentmethod_authorize_secret_key']          = 'Секретный ключ';
$lang['leads_report_converted_notice']                        = 'Только лиды, которые имеют по умолчанию статус Клиент, будут приняты в качестве конвертированных лидов, даже если лиды имеют статус Клиент, но не конвертированы в клиента, то он всеравно будет считаться конвертированным лидом';
$lang['payment_method']                                       = 'Способ оплаты';
$lang['payment_method_info']                                  = 'Некоторые платежные шлюзы поддерживают различные способы оплаты, такие как кредитная карта, PayPal, банковский перевод.';

# Version 1.2.7
$lang['dropbox_app_key']                                    = 'Ключ Dropbox';
$lang['project_invoice_select_all_expenses']                = 'Выбрать все расходы';
$lang['role_update_staff_permissions']                      = 'Обновить права всех сотрудников, которые используют эту роль';
$lang['customer_active']                                    = 'Активный';
$lang['note_updated_successfully']                          = 'Примечание обновлено успешно';
$lang['update_note']                                        = 'Обновить примечание';
$lang['update_comment']                                     = 'Обновить комментарий';
$lang['comment_updated_successfully']                       = 'Комментарий обновлен успешно';
$lang['staff_send_welcome_email']                           = 'Отправить приветственное письмо';
$lang['proposal_warning_email_change']                      = 'Эл. почта изменена для %s. %s связан с предложением(и). Вы хотите обновить все предложения, связанные с почтой %s?';
$lang['update_proposal_email_yes']                          = 'Да, обновить все связанные эл. письма.';
$lang['update_proposal_email_no']                           = 'Нет, я буду обновлять вручную.';
$lang['proposals_emails_updated']                           = 'Все предложения связаные с %s обновлены на %s';
$lang['custom_field_company']                               = 'Компания';
$lang['actions']                                            = 'Действия';
$lang['project_mark_as']                                    = 'Отметить как %s';
$lang['todo_edit_title']                                    = 'Редактирование';
$lang['additional_action_required']                         = 'Требуется дополнительное действие!';
$lang['project_mark_tasks_finished_confirm']                = 'Подтвердить';
$lang['project_marked_as_success']                          = 'Проект успешно отмечен как %s';
$lang['project_marked_as_failed']                           = 'Не удалось отметить проект как %s';
$lang['auto_assign_customer_admin_after_lead_convert']      = 'Автоматически назначить сотрудника в качестве администратора для клиента после конвертирования';
$lang['auto_assign_customer_admin_after_lead_convert_help'] = 'Если этот параметр установлен как ДА, то пользователь который конвертировал лида на клиента, будет автоматически назначен в качестве администратора для клиента. ПРИМЕЧАНИЕ: Этот параметр будет применяться только к сотрудникам, которые не имеют разрешения на ПРОСМОТР клиентов';
$lang['auto_close_tickets_disable']                         = 'Установите 0 для отключения';
$lang['task_checklist_item_completed_by']                   = 'Завершено %s';
$lang['staff_email_signature_help']                         = 'Если подпись для письма не указана, то будет использоваться подпись из настроек';
$lang['default_task_priority']                              = 'Приоритет по умолчанию';
$lang['project_send_created_email']                         = 'Отправить проект, созданный по эл. почте';

# Version 1.2.8
$lang['show_transactions_on_invoice_pdf']            = 'Отображать оплаченные счета (транзакции) в файле в PDF';
$lang['bulk_actions']                                = 'Массовые действия';
$lang['additional_filters']                          = 'Дополнительные фильтры';
$lang['expenses_available_to_bill']                  = 'Расходы, доступные для выставления счета';
$lang['bulk_action_customers_groups_warning']        = 'Если вы не выберите любую группу, тогда все группы, назначенные для выбранных клиентов будут удалены.';
$lang['customer_attachments_show_in_customers_area'] = 'Отображать в клиентской области';
$lang['customer_attachments_show_notice']            = 'Только файлы, загруженные из профиля клиента будут отображаться/скрыты в клиентской области.';
$lang['customer_profile_files']                      = 'Файлы';
$lang['no_files_found']                              = 'Файлы не найдены';
$lang['custom_field_column']                         = 'Сетка (Колонка, напр. 12) - Максимально 12';
$lang['task_status']                                 = 'Статус';
$lang['task_status_1']                               = 'Не начата';
$lang['task_status_2']                               = 'В ожидании ответа';
$lang['task_status_3']                               = 'На проверке';
$lang['task_status_4']                               = 'В процессе';
$lang['task_status_5']                               = 'Завершена';
$lang['task_mark_as']                                = 'Отметить как %s';
$lang['task_marked_as_success']                      = 'Задача отмечена как %s успешно';
$lang['search_tasks']                                = 'Поиск задач';
$lang['tasks_kanban_limit']                          = 'Количество задач в строках канбан в статусе';
$lang['show_on_invoice_on_pdf']                      = 'Показывать %s в счете PDF';
$lang['show_pay_link_to_invoice_pdf']                = 'Отображать ссылку Оплатить счет в файле PDF (Не применяется для счетов в статусе Отменен)';
$lang['no_leads_found']                              = 'Лиды не найдены';
$lang['created_today']                               = 'Создано сегодня';
$lang['total_tasks_deleted']                         = 'Всего удалено задач: %s';
$lang['total_tickets_delete']                        = 'Всего удалено тикетов: %s';
$lang['format_letter_portrait']                      = 'Вертикальная ориентация';
$lang['format_letter_landscape']                     = 'Горизонтальная ориентация';
$lang['period_datepicker']                           = 'Период';
$lang['total_by_hourly_rate']                        = 'Всего по почасовой ставке';
$lang['staff_hourly_rate']                           = $lang['task_hourly_rate'];
// &#37; is for % so the system can confuse for the original fields like %s
$lang['remove_tax_name_from_item_table_help'] = 'напр. НАЛОГ 15&#37; будет отображаться как 15&#37; без названия налога (Не применяется, если есть несколько налогов с одинаковым названием и процентом)';
$lang['back_to_project']                      = 'Вернуться к проекту';
$lang['view_kanban']                          = 'Канбан';
$lang['invoice_is_overdue']                   = 'Данный счет просрочен на %s дн.';

# Version 1.2.9
$lang['time_decimal']                            = 'Время (десятичный)';
$lang['time_h']                                  = 'Время (часы)';
$lang['proposal_number_prefix']                  = 'Префикс номера предложения';
$lang['settings_number_padding_prefix']          = 'Если это значение равно 3, то число будет отформатировано в виде: 005 или 025.';
$lang['this_week_payments']                      = 'Платежи на этой неделе';
$lang['last_week_payments']                      = 'Платежи на прошлой неделе';
$lang['not_published_new_post']                  = 'опубликована новая запись';
$lang['expense_name']                            = 'Имя';
$lang['expense_name_help']                       = 'Для личного использования';
$lang['adjustments']                             = 'Корректировки';
$lang['payments_received']                       = 'Полученные платежи';
$lang['not_lead_activity_created_proposal']      = 'Создано новое предложение - %s';
$lang['lead_title']                              = 'Должность';
$lang['lead_address']                            = 'Адрес';
$lang['lead_city']                               = 'Город';
$lang['lead_state']                              = 'Регион';
$lang['lead_country']                            = 'Страна';
$lang['lead_zip']                                = 'Почтовый индекс';
$lang['lead_is_public_yes']                      = 'Да';
$lang['lead_is_public_no']                       = 'Нет';
$lang['lead_info']                               = 'Информация о лиде';
$lang['lead_general_info']                       = 'Общая информация';
$lang['lead_latest_activity']                    = 'Последняя активность';
$lang['item_description_new_lines_notice']       = 'Новые строки не поддерживаются в описании. Вместо этого используйте длинное описание.';
$lang['estimates_report']                        = 'Отчет по сметам';
$lang['confirm']                                 = 'Подтвердить';
$lang['delete_staff']                            = 'Удалить сотрудника';
$lang['delete_staff_info']                       = 'Некоторые данные этого сотрудника должны быть переданы другому пользователю. Пожалуйста, выберите пользователя, которому вы хотите передать данные.';
$lang['estimate_items']                          = 'Сметы';
$lang['no_proposals_found']                      = 'Предложения не найдены';
$lang['no_estimates_found']                      = 'Сметы не найдены';
$lang['pipeline_limit_status']                   = 'Ограничение конвейера для каждого статуса';
$lang['settings_update']                         = 'Обновление системы';
$lang['purchase_key']                            = 'Ключ покупки';
$lang['update_now']                              = 'Обновить сейчас';
$lang['update_available']                        = 'Доступно обновление';
$lang['latest_version']                          = 'Последняя версия';
$lang['your_version']                            = 'Ваша версия';
$lang['using_latest_version']                    = 'Вы используете последнюю версию';
$lang['mark_as_active']                          = 'Отметить как активный';
$lang['customer_inactive_message']               = 'Это неактивный профиль клиента и некоторые функции могут быть отключены';
$lang['active_customers']                        = 'Активные клиенты';
$lang['inactive_active_customers']               = 'Неактивные клиенты';
$lang['include_proposal_items_merge_field_help'] = 'Включить предложения со слиянием поля в любом месте содержимого предложения в виде %s';
$lang['all_data_synced_successfully']            = 'Все данные успешно синхронизированы';
$lang['sync_now']                                = 'Синхронизировать сейчас';
$lang['sync_data']                               = 'Синхронизация данных';
$lang['sync_proposals_up_to_date']               = 'Все предложения актуальны, ничего не синхронизировано';
$lang['proposal_sync_1_info']                    = 'Все данные предложений хранятся отдельно для каждого предложения после создания. Обновление информации %s не повлияет на предыдущие созданные предложения для этого %s.';
$lang['proposal_sync_2_info']                    = 'Если вы недавно обновили информацию %s, то тогда вы можете синхронизировать все новые данные для соответствующих заявок. Ниже приведен список полей, которые можно синхронизировать.';

# Version 1.3.0
$lang['expense_include_additional_data_on_convert'] = 'Включить дополнительные детали для длинного описания взятого из этих расходов.';

# Version 1.4.0
$lang['calendar_events_limit']                              = 'Лимит событий календаря (Просмотр по месяцам и неделям)';
$lang['show_page_number_on_pdf']                            = 'Показать номер страницы в файле PDF';
$lang['customer_active_inactive_help']                      = 'Будет показано в выпадающем списке при создании новых записей';
$lang['item_groups']                                        = 'Группы';
$lang['item_group']                                         = 'Группа';
$lang['item_group_name']                                    = 'Название группы';
$lang['new_item_group']                                     = 'Новая группа';
$lang['show_setup_menu_item_only_on_hover']                 = 'Показать настройки элемента меню, только после того, как на элемент навели курсор мыши в сайдбаре';
$lang['internal_article']                                   = 'Внутренняя статья';
$lang['expenses_created_from_this_recurring_expense']       = 'Созданные расходы из этих повторяющихся расходов';
$lang['convert_to_task']                                    = 'Преобразовать в задачу';
$lang['next_invoice_date']                                  = 'Следующая дата для счета: %s';
$lang['next_expense_date']                                  = 'Следующая дата расходов: %s';
$lang['invoice_recurring_from']                             = 'Данный счет создается из повторяющихся счетов с номером: %s';
$lang['expense_recurring_from']                             = 'Эти расходы создаются из следующих повторяющихся расходов: %s';
$lang['child_invoices']                                     = 'Дочерние счета';
$lang['child_expenses']                                     = 'Дочерние расходы';
$lang['no_announcements']                                   = 'Нет объявлений';
$lang['unit']                                               = 'Ед.изм.';
$lang['permission_view_own']                                = 'Просмотр (свое)';
$lang['permission_global']                                  = 'Глобально';
$lang['permission_customers_based_on_admins']               = 'Также, как и для администраторов';
$lang['permission_payments_based_on_invoices']              = 'На основании разрешения на ПРОСМОТР счетов (своих)';
$lang['permission_projects_based_on_assignee']              = 'Если сотрудник не имеет разрешения на ПРОСМОТР (глобально), то тогда будут показаны только те проекты, для которых сотрудник добавлен в качестве участника проекта.';
$lang['permission_tasks_based_on_assignee']                 = 'Если сотрудник не имеет разрешения на ПРОСМОТР (глобально), то тогда будут показаны только те задачи, для которых сотрудник назначен как наблюдатель, или вы можете установить ДА в разделе Настройки->Специальные настройки->Задачи->Разрешить всем сотрудникам видеть все задачи, связанные с проектами.';
$lang['settings_paymentmethod_default_selected_on_invoice'] = 'Выбранный по умолчанию для счета';
$lang['paymentmethod_braintree_merchant_id']                = 'ID продавца';
$lang['paymentmethod_braintree_private_key']                = 'Секретный ключ';
$lang['paymentmethod_braintree_public_key']                 = 'Открытый ключ';
$lang['company_requires_vat_number_field']                  = 'Для компаний обязательно нужно указывать Номер НДС';
$lang['no_company_view_profile']                            = 'Человек - просмотр профиля';
$lang['company_is_required']                                = 'Поле компания является обязательным?';
$lang['estimate_invoiced']                                  = 'Счет выставлен';
$lang['file_date_uploaded']                                 = 'Дата загрузки';
$lang['allow_contact_to_delete_files']                      = 'Разрешить контактам удалять собственные файлы, загруженные в клиентской зоне';
$lang['file']                                               = 'Файл';
$lang['customer_contact_person_only_one_allowed']           = 'Только 1 контакт разрешен, если поле Компания не заполнено. Система отбросит этого клиента как человека';
$lang['web_to_lead']                                        = 'Интеграция формы лидов';
$lang['web_to_lead_form']                                   = 'Форма лида';
$lang['new_form']                                           = 'Новая форма';
$lang['form_name']                                          = 'Название формы';
$lang['cf_option_in_use']                                   = 'Параметр который используется не может быть удален. Параметр автоматически добавляется к существующим параметрам.';
$lang['form_builder']                                       = 'Конструктор форм';
$lang['form_information']                                   = 'Параметры формы';
$lang['form_builder_create_form_first']                     = 'Создайте сначала форму, чтобы потом использовать Конструктор форм.';
$lang['notify_assigned_user']                               = 'Ответственный человек';
$lang['form_recaptcha']                                     = 'Использовать Google reCaptcha';
$lang['form_lang_validation']                               = 'Язык';
$lang['form_lang_validation_help']                          = 'Для проверки правильности сообщений';
$lang['form_btn_submit_text']                               = 'Текст на кнопке Отправить';
$lang['form_success_submit_msg']                            = 'Сообщение после успешной отправки формы';
$lang['total_submissions']                                  = 'Всего отправок';
$lang['form_integration_code']                              = 'Код интеграции';
$lang['not_lead_imported_from_form']                        = 'Новый лид импортирован из формы лидов - %s';
$lang['not_lead_activity_log_attachment']                   = 'Вложение импортировано из формы - %s';
$lang['form_integration_code_help']                         = 'Скопируйте & вставьте код в любом месте вашего сайта, чтобы показать форму, кроме того вы можете регулировать высоту и ширину для лучшего отображения формы на сайте.';
$lang['invoice_not_found']                                  = 'Счет не найден';
$lang['estimate_not_found']                                 = 'Смета не найдена';
$lang['expense_not_found']                                  = 'Расход не найден';
$lang['proposal_not_found']                                 = 'Предложение не найдено';
$lang['new_task_assigned_non_user']                         = 'Новая задача назначена вам - %s';
$lang['no_child_found']                                     = 'Дочерние %s не найдены';
$lang['company_vat_number']                                 = 'ИНН';
$lang['not_lead_assigned_from_form']                        = 'Новый лид назначен вам';
$lang['not_lead_activity_assigned_from_form']               = 'Лид назначен %s';
$lang['form_allow_duplicate']                               = 'Разрешить дубликат %s для вставки в базу данных?';
$lang['track_duplicate_by_field']                           = 'Предотвратить дублирование для поля';
$lang['and_track_duplicate_by_field']                       = '+ поле (оставьте поле пустым для отслеживания дубликатов только по 1 полю)';
$lang['create_the_duplicate_form_data_as_task']             = 'Создать дубликат %s в виде задачи и назначить ответственного сотрудника';
$lang['create_the_duplicate_form_data_as_task_help']        = 'Используется для дальнейшего рассмотрения на размещение и принятия необходимых мер';
$lang['currently_selected']                                 = 'Выбранный в данный момент';
$lang['search_ajax_empty']                                  = 'Выберите и начните вводить';
$lang['search_ajax_placeholder']                            = 'Введите запрос для поиска...';
$lang['search_ajax_searching']                              = 'Поиск...';
$lang['search_ajax_initialized']                            = 'Начните вводить для поиска';
$lang['lead_description']                                   = 'Описание';
$lang['lead_website']                                       = 'Сайт';
$lang['invoice_activity_auto_converted_from_estimate']      = 'Счет автоматически создается из сметы с номером %s';
$lang['hour_of_day_perform_auto_operations']                = 'Час на протяжении дня для выполнения автоматических действий.';
$lang['hour_of_day_perform_auto_operations_format']         = '24-часовой формат например. 9 для 9 утра или 15 для 3 pm.';
$lang['inv_hour_of_day_perform_auto_operations_help']       = 'Используется для повторяющихся счетов, уведомлений о просроченности и т.д.';
$lang['use_minified_files']                                 = 'Используйте минимизированные версии файлов css и js (только системные файлы)';

# Version 1.5.0
$lang['logo_favicon_changed_notice']       = 'Обнаружено изменение логотипа или иконки сайта. Если вы все еще видите оригинальный логотип CRM, то попробуйте очистить кэш браузера';
$lang['kb_search_articles']                = 'Поиск статьи в Базе знаний';
$lang['kb_search']                         = 'Поиск';
$lang['have_a_question']                   = 'Есть вопрос?';
$lang['card_expiration_year']              = 'Год окончания срока';
$lang['card_expiration_month']             = 'Месяц окончания срока';
$lang['client_website']                    = 'Сайт';
$lang['search_project_members']            = 'Поиск участников проекта...';
$lang['cf_translate_input_link_title']     = 'Заголовок';
$lang['cf_translate_input_link_url']       = 'Ссылка';
$lang['cf_translate_input_link_tip']       = 'Нажмите здесь, чтобы добавить ссылку';
$lang['task_edit_delete_timesheet_notice'] = 'Задача в табеле %s, вы не можете %s табель.';
$lang['department_username']               = 'Имя пользователя IMAP';
$lang['department_username_help']          = 'Заполните это поле только в том случае, если ваш сервер IMAP использует имя пользователя для входа вместо адреса эл. почты. Обратите внимание, что вам все равно нужно добавить адрес эл. почты.';
$lang['total_tickets_deleted']             = 'Всего удалено тикетов: %s';

# Version 1.5.1
$lang['ticket_linked_to_project']                                = 'Этот тикет связан с проектом: %s';
$lang['only_own_files_contacts']                                 = 'Контакты могут видеть только собственные файлы, загруженные в клиентской области (файлы загруженные в профиле клиента)';
$lang['only_own_files_contacts_help']                            = 'Если вы делитесь файлом вручную из профиля клиента, то другие контакты смогут увидеть этот файл.';
$lang['share_file_with']                                         = 'Использовать файл совместно с';
$lang['file_share_visibility_notice']                            = 'Этот файл не используется совместно с контактами, переключите видимость снова, чтобы перезагрузить';
$lang['share_file_with_show']                                    = 'Этот файл используется совместно с: %s';
$lang['allow_primary_contact_to_view_edit_billing_and_shipping'] = 'Разрешить основному контакту видеть/редактировать информацию о платежах/доставке';
$lang['estimate_due_after']                                      = 'Сроки для сметы (дни)';

# Version 1.6.0
$lang['my_timesheets']                                   = 'Мои табели';
$lang['today']                                           = 'Сегодня';
$lang['open_in_dropbox']                                 = 'Открыть в Dropbox';
$lang['show_primary_contact']                            = 'Показать полное имя первичного контакта на %s';
$lang['view_members_timesheets']                         = 'Посмотреть все табели';
$lang['priority']                                        = 'Приоритет';
$lang['fetch_from_google']                               = 'Загрузить из google';
$lang['customer_fetch_lat_lng_usage']                    = 'Укажите адрес, город и страну перед загрузкой, чтобы получить наилучший результат.';
$lang['g_search_address_not_found']                      = 'Адрес не найден, пожалуйста, попробуйте еще раз';
$lang['proposals_report']                                = 'Отчет о предложениях';
$lang['staff_members_open_tickets_to_all_contacts_help'] = 'Если сотрудник не имеет разрешение на ПРОСМОТР клиентов, то он будет иметь только возможность создавать новые тикеты из админки для контактов клиента, для которых назначен как администратор клиента.';
$lang['staff_members_open_tickets_to_all_contacts']      = 'Разрешить сотрудникам открывать тикеты для всех контактов?';
$lang['charts_based_report']                             = 'Графики на основе отчетов';
$lang['responsible_admin']                               = 'Ответственный администратор';
$lang['tags']                                            = 'Теги';
$lang['tag']                                             = 'Тег';
$lang['customer_map_notice']                             = 'Укажите долготу и широту в профиле клиента, чтобы показать здесь карту';
$lang['default_view']                                    = 'Вид по умолчанию';
$lang['day']                                             = 'День';
$lang['agenda']                                          = 'Повестка дня';
$lang['timesheet_tags']                                  = 'Теги';
$lang['show_more']                                       = 'Показать больше';
$lang['show_less']                                       = 'Показать меньше';
$lang['project_completed_date']                          = 'Дата завершения';
$lang['language']                                        = 'Язык';
$lang['this_week']                                       = 'На этой неделе';
$lang['last_week']                                       = 'На прошлой неделе';
$lang['this_month']                                      = 'Этот месяц';
$lang['last_month']                                      = 'Прошлый месяц';
$lang['no_description_project']                          = 'Нет описания для этого проекта';
$lang['sales_string']                                    = 'Продажи';
$lang['no_project_members']                              = 'В этом проекте нет сотрудников';
$lang['search_by_tags']                                  = 'Используйте # + имя тега для поиска по ключевым словам';
$lang['project_status_5']                                = 'Отменено';

# Version 1.7.0
$lang['not_activity_new_reminder_created']        = 'установите новое напоминание для %s с датой %s';
$lang['not_activity_new_task_created']            = 'Создана новая задача - %s';
$lang['recurring_invoice_draft_notice']           = 'Этот счет-фактура имеет статус черновика, поэтому вы должны отметить его как отправленный. Повторяющиеся счета в статусе черновик не создаются в планировщике задач.';
$lang['recurring_recreate_hour_notice']           = '%s будут воссозданы в определенное время на основе настроек указанных в разделе Настройка->Настройки->Планировщик задач';
$lang['invoice_project_include_timesheets_notes'] = 'Включить примечание каждого табеля в описание';
$lang['events']                                   = 'События';
$lang['clear']                                    = 'Очистить';
$lang['auto_mark_as_public']                      = 'Автоматическая отметка как общедоступное';
$lang['time_format']                              = 'Формат времени';
$lang['time_format_24']                           = '24 часа';
$lang['time_format_12']                           = '12 часов';
$lang['delete_activity_log_older_then']           = 'Удалить системный журнал активности старше X месяцев';
$lang['mark_as_read']                             = 'Отметить, как прочитанное';
$lang['mark_all_as_read']                         = 'Отметить все как прочитанное';
$lang['tax_1']                                    = 'Налог 1';
$lang['tax_2']                                    = 'Налог 2';
$lang['total_with_tax']                           = 'Итого с налогом';
$lang['new_task_auto_assign_current_member']      = 'Автоматически назначить автора задачи при создании новой задачи';
$lang['new_task_auto_assign_current_member_help'] = 'Не применяется, если задача связана с проектом, а автор не является участником проекта';
$lang['copy_project_tasks_status']                = 'Состояние задач';
$lang['tasks_summary']                            = 'Сведения о задачах';
$lang['vault']                                    = 'Хранилище';
$lang['new_vault_entry']                          = 'Новое хранилище';
$lang['server_address']                           = 'Адрес сервера';
$lang['port']                                     = 'Порт';
$lang['vault_username']                           = 'Имя пользователя';
$lang['vault_password']                           = 'Пароль';
$lang['vault_description']                        = 'Краткое описание';
$lang['vault_entry']                              = 'Запись в хранилище';
$lang['no_port_provided']                         = 'Не предоставлено';
$lang['view_password']                            = 'Просмотр пароля';
$lang['security_reasons_re_enter_password']       = 'По соображениям безопасности, пожалуйста, введите свой пароль ниже';
$lang['password_change_fill_notice']              = 'Укажите новый пароль если вы хотите изменить пароль';
$lang['vault_password_user_not_correct']          = 'Неправильный пароль. Повторите попытку.';
$lang['no_vault_entries']                         = 'Хранилище записей не найдено для этого клиента.';
$lang['vault_entry_created_from']                 = 'Эта хранилище записей создана %s';
$lang['vault_entry_last_update']                  = 'Последнее обновление: %s';
$lang['vault_entry_visible_to_all']               = 'Доступно всем сотрудникам, имеющим доступ к этому клиенту';
$lang['vault_entry_visible_creator']              = 'Доступно только мне (администратор не исключается)';
$lang['vault_entry_visible_administrators']       = 'Доступно только для администраторов';
$lang['my_reminders']                             = 'Мои напоминания';
$lang['reminder_related']                         = 'Относится к';
$lang['event_notification']                       = 'Уведомление';
$lang['days']                                     = 'Дней';
$lang['reminder_notification_placeholder']        = 'Напоминить за 30 минут до';
$lang['event_color']                              = 'Цвет события';
$lang['group_by_task']                            = 'По задачам';
$lang['save']                                     = 'Сохранить';
$lang['disable_languages']                        = 'Отключить языки';

# Version 1.8.0
$lang['not_customer_viewed_invoice']                         = 'Счет с номером %s просмотрен';
$lang['not_customer_viewed_estimate']                        = 'Смета с номером %s просмотрена';
$lang['not_customer_viewed_proposal']                        = 'Предложение с номером %s просмотрено';
$lang['display_inline']                                      = 'Показать внутри';
$lang['email_header']                                        = 'Предопределенный заголовок';
$lang['email_footer']                                        = 'Предопределенный футер';
$lang['exclude_proposal_from_client_area_with_draft_status'] = 'Исключить предложения в статусе черновика из клиентской области';
$lang['pusher_app_key']                                      = 'Ключ APP';
$lang['pusher_app_secret']                                   = 'Секретный APP';
$lang['pusher_app_id']                                       = 'ИД APP';
$lang['pusher_cluster_notice']                               = 'Оставьте пустым, чтобы использовать пушер-кластер по умолчанию.';
$lang['pusher_enable_realtime_notifications']                = 'Включить оповещения в реальном времени';
$lang['task_is_overdue']                                     = 'Эта задача просрочена';
$lang['this_year']                                           = 'Текущий год';
$lang['last_year']                                           = 'Предыдущий год';
$lang['customer_statement']                                  = 'Выписка по счету';
$lang['customer_statement_for']                              = 'Выписка клиента по %s';
$lang['account_summary']                                     = 'Информация о счете';
$lang['statement_beginning_balance']                         = 'Начальный баланс';
$lang['invoiced_amount']                                     = 'Сумма счета';
$lang['amount_paid']                                         = 'Оплаченная сумма';
$lang['statement_from_to']                                   = '%s до %s';
$lang['customer_statement_info']                             = 'Показаны все счета и платежи между %s и %s';
$lang['balance_due']                                         = 'Задолженность';
$lang['statement_heading_date']                              = 'Дата';
$lang['statement_heading_details']                           = 'Подробности';
$lang['statement_heading_amount']                            = 'Сумма';
$lang['statement_heading_payments']                          = 'Платежи';
$lang['statement_heading_balance']                           = 'Баланс';
$lang['statement_invoice_details']                           = 'Счет %s - на %s';
$lang['statement_payment_details']                           = 'Платеж (%s) для счета %s';
$lang['statement_bill_to']                                   = 'Для';
$lang['send_to_email']                                       = 'Отправить по электронной почте';
$lang['statement_sent_to_client_success']                    = 'Выписка успешно отправлена клиенту';
$lang['statement_sent_to_client_fail']                       = 'Проблема при отправке выписки';
$lang['view_account_statement']                              = 'Просмотреть выписку по счетам';
$lang['text_not_recommended_for_servers_limited_resources']  = 'Не рекомендуется, если у сервера ограниченные ресурсы. Напр. виртуальный хостинг';
$lang['tasks_bull_actions_assign_notice']                    = 'Если задача связана с проектом, а сотрудник, которому вы назначили задачу, не является членом проекта, то тогда этот сотрудник будет автоматически добавлен в качестве члена проекта.';
$lang['company_information']                                 = 'Информация о компании';
$lang['ticket_form']                                         = 'Форма тикета';
$lang['ticket_form_subject']                                 = 'Тема';
$lang['ticket_form_name']                                    = 'Ваше имя';
$lang['ticket_form_email']                                   = 'Адрес электронной почты';
$lang['ticket_form_department']                              = 'Отдел';
$lang['ticket_form_message']                                 = 'Сообщение';
$lang['ticket_form_priority']                                = 'Приоритет';
$lang['ticket_form_service']                                 = 'Услуга';
$lang['ticket_form_submit']                                  = 'Отправить';
$lang['ticket_form_attachments']                             = 'Вложения';
$lang['success_submit_msg']                                  = 'Спасибо, что обратились к нам. Мы скоро с вами свяжемся.';
$lang['vault_entry_share_on_projects']                       = 'Поделиться этими данными с участниками проекта';
$lang['project_shared_vault_entry_login_details']            = 'Пароли и доступы';
$lang['iso_code']                                            = 'Код ISO';
$lang['estimates_not_invoiced']                              = 'Не выставлен счет';
$lang['show_on_ticket_form']                                 = 'Показать в форме тикета';
$lang['cancel_upload']                                       = 'Отменить загрузку';
$lang['show_table_export_button']                            = 'Показать кнопку экспорта таблицы';
$lang['show_table_export_all']                               = 'Для всех сотрудников';
$lang['show_table_export_admins']                            = 'Только для администраторов';
$lang['show_table_export_hide']                              = 'Скрыть кнопку экспорта для всех сотрудников';
$lang['task_created_by']                                     = 'Создано %s';
$lang['validation_extension_not_allowed']                    = 'Расширение файла не разрешено';
$lang['allow_staff_view_proposals_assigned']                 = 'Разрешить сотрудникам просматривать предложения, для которых они назначены';
$lang['task_users_working_on_tasks_multiple']                = 'В настоящее время %s работают над этим заданием';
$lang['task_users_working_on_tasks_single']                  = 'В настоящее время %s работает над этим заданием';

# Version 1.9.0
$lang['estimated_hours']                               = 'Оценка в часах';
$lang['two_factor_auth_failed_to_send_code']           = 'Не удалось отправить код аутентификации по электронной почте, настройки SMTP могут быть неправильно настроены';
$lang['two_factor_auth_code_sent_successfully']        = 'Письмо было отправлено %s с кодом верификации для проверки вашей авторизации';
$lang['enable_two_factor_authentication']              = 'Включить двухфакторную аутентификацию';
$lang['two_factor_authentication_info']                = 'Двухфакторная аутентификация предоставляется по электронной почте, прежде чем активировать двухфакторную аутентификацию, убедитесь, что ваши настройки SMTP настроены правильно и система может отправить электронное письмо. Уникальный ключ аутентификации будет отправлен по электронной почте при входе в систему.';
$lang['timesheets_overview_all_members_notice_admins'] = 'Табели для всех сотрудников доступны только для администраторов.';
$lang['two_factor_authentication']                     = 'Двухфакторная аутентификация';
$lang['two_factor_authentication_code']                = 'Код';
$lang['admin_two_factor_auth_heading']                 = 'Код аутентификации';
$lang['two_factor_code_not_valid']                     = 'Недействительный код аутентификации';
$lang['back_to_login']                                 = 'Вернуться назад к авторизации';
$lang['enter_activity']                                = 'Введите активность';
$lang['attach_files']                                  = 'Вложенные файлы';
$lang['no_tags_used']                                  = 'Нет меток, используемых системой';
$lang['exclude_completed_tasks']                       = 'Исключить завершенные задачи';
$lang['modal_width_class']                             = 'Ширина модального окна';
$lang['contract_copy']                                 = 'Копировать';
$lang['contract_copied_successfully']                  = 'Договор успешно скопирован';
$lang['contract_copied_fail']                          = 'Не удалось скопировать договор';
$lang['project_marked_as_finished_to_contacts']        = 'Отправить письмо <b>Проект отмечен как завершенный</b> контактам клиента';
$lang['only_admins']                                   = 'Только администраторы';
$lang['new_notification']                              = 'Новое уведомление!';
$lang['enable_desktop_notifications']                  = 'Включить уведомления';
$lang['save_and_send']                                 = 'Сохранить и отправить';
$lang['private']                                       = 'Частный';
$lang['task_created_at']                               = 'Создана %s';
$lang['hide_notified_reminders_from_calendar']         = 'Скрыть показанные уведомления из календаря';
$lang['last_active']                                   = 'Последняя активность';
$lang['open_ticket']                                   = 'Открыть тикет';
$lang['task_add_description']                          = 'Добавить описание';
$lang['project_setting_create_tasks']                  = 'создать задачи';
$lang['project_setting_edit_tasks']                    = 'редактировать задачи (только задачи созданные для контакта)';

# Version 1.9.2
$lang['items_report']                            = 'Отчет о продажах';
$lang['reports_item']                            = 'Продажа';
$lang['quantity_sold']                           = 'Количество продаж';
$lang['total_amount']                            = 'Итого';
$lang['avg_price']                               = 'Средняя цена';
$lang['item_report_paid_invoices_notice']        = 'Отчет о продажах создается только с оплаченных счетов до скидок и налогов.';
$lang['overview']                                = 'Обзор';
$lang['timer_started_change_status_in_progress'] = 'Изменить статус задачи на Выполняется при запуске таймера (применимо, только если статус задачи Не выполняется)';
$lang['company_info_format']                     = 'Формат информации о компании (PDF и HTML)';
$lang['customer_info_format']                    = 'Формат информации о клиентах (PDF и HTML)';
$lang['custom_field_info_format_embed_info']     = 'Произвольные поля для %s могут быть легко встроены в документы PDF и HTML добавив поля на следующей странице: %s';
$lang['transfer_lead_notes_to_customer']         = 'Переносить примечания лида в профиль клиента';
$lang['authorized_signature_text']               = 'Подпись уполномоченного лица';
$lang['show_pdf_signature_invoice']              = 'Показать подпись PDF в счете';
$lang['show_pdf_signature_estimate']             = 'Показать подпись PDF в смете';
$lang['signature']                               = 'Подпись';
$lang['signature_image']                         = 'Изображение подписи';
$lang['insert_checklist_templates']              = 'Вставить шаблоны списков';
$lang['save_as_template']                        = 'Сохранить как шаблон';
$lang['scroll_responsive_tables_help']           = 'Таблицы с большим количеством данных будут иметь горизонтальную прокрутку, а строки будут иметь иконку +';
$lang['scroll_responsive_tables']                = 'Активировать прокручиваемые динамичные таблицы';
$lang['invoice_item_add_edit_rate_currency']     = 'Ставка - %s';
$lang['total_files_deleted']                     = 'Всего удалено файлов: %s';
$lang['invalid_transaction']                     = 'Недействительная транзакция. Пожалуйста, попробуйте еще раз.';
$lang['payment_gateway_payu_money_key']          = 'Ключ PayU';
$lang['payment_gateway_payu_money_salt']         = 'Соль PayU';
$lang['settings_paymentmethod_description']      = 'Описание платежного метода';

# Version 1.9.3
$lang['default_ticket_reply_status']          = 'Статус по умолчанию при ответе на тикет';
$lang['ticket_add_response_and_back_to_list'] = 'Вернуться в список тикетов после отправки ответа';

# Version 1.9.4
$lang['default_task_status']                               = 'Статус по умолчанию при создании новой задачи';
$lang['custom_field_pdf_html_help']                        = 'Убедитесь, что вы отметили поле ' . $lang['custom_field_show_on_client_portal'] . ' если хотите, чтобы пользовательские поля были видимыми в клиентской области и когда клиент загружает PDF или получает PDF по почте.';
$lang['auto']                                              = 'Автоматически';
$lang['email_queue']                                       = 'Очередь писем';
$lang['email_queue_enabled']                               = 'Включить очередь писем';
$lang['email_queue_skip_attachments']                      = 'Не добавлять письма с вложениями в очередь.';
$lang['disable']                                           = 'Выключить';
$lang['enable']                                            = 'Включить';
$lang['auto_dismiss_desktop_notifications_after']          = 'Автоматически закрыть уведомления на рабочем столе после X секунд (0 чтобы отключить)';
$lang['proposal_info_format']                              = 'Формат информации предложения (PDF и HTML)';
$lang['hide_tasks_on_main_tasks_table']                    = 'Скрыть задачи проекта в таблице основных задач (область администратора)';
$lang['ticket_replies_order']                              = 'Сортировка ответов тикета';
$lang['ticket_replies_order_notice']                       = 'Первоначальное сообщение тикета всегда будет отображаться как первое.';
$lang['invoice_cancelled_email_disabled']                  = 'Счет отменен. Снимите выделение как отмененное, чтобы включить письмо клиенту';
$lang['email_notifications']                               = 'Уведомления по эл. почте';
$lang['invoice_activity_record_payment_email_to_customer'] = 'Платеж зарегистрирован, отправлено письмо на: %s';
$lang['exclude_inactive']                                  = 'Исключить неактивные';
$lang['disable_all']                                       = 'Отключить все';
$lang['enable_all']                                        = 'Включить все';
$lang['reccuring_invoice_option_gen_and_send']             = 'Создание и автоотправление обновленного счета для клиента';
$lang['reccuring_invoice_option_gen_unpaid']               = 'Создать неоплаченный счет';
$lang['reccuring_invoice_option_gen_draft']                = 'Создать черновик счета';
$lang['event_created_by']                                  = 'Это событие создано %s';

# Version 1.9.5
$lang['customers_assigned_to_me']              = 'Клиенты, назначенные на меня';
$lang['bcc_all_emails']                        = 'BCC (cкрытая копия) - скрытые получатели письма, чьи адреса не показываются другим получателям.';
$lang['confirmation_of_identity']              = 'Подтверждение личности';
$lang['accept_identity_confirmation']          = 'Требовать подтверждения личности при принятии';
$lang['accepted_identity_info']                = 'Это %s принимается %s на %s от IP %s';
$lang['clear_this_information']                = 'Очистить эту информацию';
$lang['new_task_auto_follower_current_member'] = 'Автоматическое добавление автора задачи в качестве наблюдателя задачи при создании новой задачи';
$lang['expenses_report_net']                   = 'Чистая сумма (Промежуточный итог)';
$lang['expense_field_billable_help']           = 'Если Оплачиваемое, %s может быть добавлено в длинное описание счета.';
$lang['task_biillable_checked_on_creation']    = 'Опция Оплачиваемое по умолчанию проверяется при создании новой задачи?';
$lang['pause_overdue_reminders']               = 'Остановить напоминания о просроченности';
$lang['resume_overdue_reminders']              = 'Возобновить напоминания о просроченности';
# Credit Notes
$lang['credit_notes']                                            = 'Кредитные записи';
$lang['credit_note']                                             = 'Кредитная запись';
$lang['credit_note_lowercase']                                   = 'кредитная запись';
$lang['credit_note_not_found']                                   = 'Кредитная запись не найдена';
$lang['credit_note_date']                                        = 'Дата кредитной записи';
$lang['credit_date']                                             = 'Дата';
$lang['settings_sales_next_credit_note_number']                  = 'Следующий номер кредитной записи';
$lang['credit_note_number_prefix']                               = 'Префикс номера кредитной записи';
$lang['credit_note_number']                                      = 'Кредитная запись #';
$lang['credit_note_number_exists']                               = 'Номер кредитной записи уже существует';
$lang['show_shipping_on_credit_note']                            = 'Показать данные о доставке по кредитной записи';
$lang['credit_note_number_decrement_on_delete']                  = 'Уменьшить номер кредитной записи при удалении.';
$lang['credit_note_number_decrement_on_delete_help']             = 'Число будет уменьшаться только в том случае, если создана последняя кредитная запись.';
$lang['credit_note_status']                                      = 'Статус';
$lang['credit_note_status_open']                                 = 'Открыт';
$lang['credit_note_status_closed']                               = 'Закрыт';
$lang['credit_note_status_void']                                 = 'Недействительный';
$lang['credit_note_mark_as_open']                                = 'Отметить как открытый';
$lang['new_credit_note']                                         = 'Новая кредитная запись';
$lang['credit_note_amount']                                      = 'Сумма';
$lang['credit_note_remaining_credits']                           = 'Остаток суммы';
$lang['credit_note_client_note']                                 = 'Примечание';
$lang['invoices_credited']                                       = 'Кредитные счета';
$lang['apply_credits']                                           = 'Применить кредиты';
$lang['x_credits_available']                                     = '%s доступных кредитов.';
$lang['credit_amount']                                           = 'Сумма кредита';
$lang['credits_available']                                       = 'Доступные кредиты';
$lang['amount_to_credit']                                        = 'Сумма кредита';
$lang['invoice_credits_applied']                                 = 'Кредиты успешно применены к счету';
$lang['applied_credits']                                         = 'Примененные кредиты';
$lang['credit_amount_bigger_then_invoice_balance']               = 'Общая сумма кредитов больше, чем остаток в счете';
$lang['credit_amount_bigger_then_credit_note_remaining_credits'] = 'Сумма кредитов больше, чем оставшиеся кредиты';
$lang['credited_invoices_not_found']                             = 'Кредитные счета не найдены';
$lang['credit_invoice_number']                                   = 'Номер счета';
$lang['credits_used']                                            = 'Используемые кредиты';
$lang['credits_remaining']                                       = 'Остаток кредита';
$lang['amount_credited']                                         = 'Сумма кредита';
$lang['credits_applied_cant_delete_status_closed']               = 'Эта кредитная запись находится в статусе Закрыто, вам необходимо сначала удалить кредиты, чтобы удалить кредитную запись.';
$lang['credits_applied_cant_delete_credit_note']                 = 'Эта кредитная запись содержит кредиты, вы должны сначала удалить кредиты, чтобы удалить кредитную запись.';
$lang['credit_note_pdf_heading']                                 = 'КРЕДИТНАЯ ЗАПИСЬ';
$lang['show_status_on_pdf']                                      = 'Отображать статус %s в документах PDF';
$lang['show_pdf_signature_credit_note']                          = 'Отображать подпись PDF в кредитной записи';
$lang['calendar_credit_note_reminder']                           = 'Напоминание о кредитных записях';
$lang['show_credit_note_reminders_on_calendar']                  = 'Напоминания о кредитных записях';
$lang['reminders']                                               = 'Напоминания';
$lang['invoice_activity_applied_credits']                        = 'применены кредиты %s из %s';
$lang['create_credit_note']                                      = 'Создать кредитную запись';
$lang['confirm_invoice_credits_from_credit_note']                = 'При создании кредитной записи из неоплаченного счета, сумма кредита будет применена для этого счета?';
$lang['credit_invoice_date']                                     = 'Дата счета';
$lang['apply_to_invoice']                                        = 'Применить к счету';
$lang['apply_credits_from']                                      = 'Применить кредиты по номеру %s';
$lang['credits_successfully_applied_to_invoices']                = 'Кредит успешно применен к счету';
$lang['credit_note_send_to_client_modal_heading']                = 'Отправить кредитную запись клиенту';
$lang['credit_note_sent_to_client_success']                      = 'Кредитная запись успешно отправлена клиенту';
$lang['credit_note_sent_to_client_fail']                         = 'Не удалось отправить кредитную запись на почту';
$lang['credit_note_no_invoices_available']                       = 'По этому клиенту нет доступных счетов.';
$lang['show_total_paid_on_invoice']                              = 'Отображать полную оплату по счету';
$lang['show_credits_applied_on_invoice']                         = 'Показать кредиты, применяемые в счете';
$lang['show_amount_due_on_invoice']                              = 'Показать сумму в счете';
$lang['customer_profile_update_credit_notes']                    = 'Обновить информацию о доставке/оплате по всем предыдущим кредитным записям (закрытые кредиты не будут учитываться)';
$lang['zip_credit_notes']                                        = 'Кредитные записи';
$lang['statement_credit_note_details']                           = 'Кредитная запись %s';
$lang['statement_credits_applied_details']                       = 'Кредиты применены из кредитной записи %s - %s для оплаты %s';
$lang['credit_note_files']                                       = 'Файлы кредитной записи';
$lang['credit_notes_report']                                     = 'Отчет по кредитным записям';

$lang['credit_note_set_reminder_title']                          = 'Настройка напоминаний';
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
$lang['ticket_assigned']                          = 'Назначено';
$lang['dashboard_options']                        = 'Настройки дашборда';
$lang['reset_dashboard']                          = 'Сбросить';
$lang['widgets']                                  = 'Виджеты';
$lang['s_chart']                                  = 'Диаграмма %s';
$lang['quick_stats']                              = 'Быстрая статистика';
$lang['user_widget']                              = 'Пользовательский виджет';
$lang['widgets_visibility_help_text']             = 'Эти виджеты отображаются только если они содержат данные и не имеют опций, чтобы их скрыть или отображать.';
$lang['show_project_on_estimate']                 = 'Отображать название проекта в смете';
$lang['show_project_on_invoice']                  = 'Отображать название проекта в счете';
$lang['show_project_on_credit_note']              = 'Отображать название проекта в кредитной записи';
$lang['visible_tabs']                             = 'Видимые вкладки';
$lang['all']                                      = 'Все';
$lang['view_widgetable_area']                     = 'Просмотр сайдбара';
$lang['hide_widgetable_area']                     = 'Скрыть сайдбар';
$lang['no_items_warning']                         = 'Введите хотя бы один элемент.';
$lang['item_forgotten_in_preview']                = 'Вы забыли добавить этот элемент?';
$lang['not_task_status_changed']                  = '%s - статус задачи изменен на %s';
$lang['not_project_activity_task_status_changed'] = 'Изменен статус задачи';
$lang['reset']                                    = 'Сбросить';
$lang['save_message_as_predefined_reply']         = 'Сохранить сообщение как готовый ответ';
$lang['inline_create_option']                     = 'Разрешить сотрудникам (не админам) создавать %s в разделе %s?';
$lang['inline_create']                            = 'Внутреннее создание';
$lang['inline_create_option_predefined_replies']  = 'Разрешить сотрудникам (не админам) сохранять готовые ответы из тикетов';
$lang['reminders_view_none_admin']                = 'Отображение ваших напоминаний и напоминаний, созданных вами.';
$lang['show_tabs_and_options']                    = 'Отображать Вкладки & Параметры';
$lang['no_milestones_found']                      = 'Этот проект не имеет никаких этапов';
$lang['lead_is_contact_create_task']              = 'Создайте задачу, если отправитель письма уже является клиентом и назначьте ответственного сотрудника.';
$lang['existing_customer']                        = 'Существующий клиент';
$lang['use_company_name_instead']                 = 'Вместо этого использовать название компании';
$lang['customer_delete_transactions_warning']     = 'У этого клиента есть транзакции, %s, вы должны удалить транзакции или перейти к другому клиенту, чтобы выполнить это действие.';

# Version 1.9.8
$lang['sending_email_contact_permissions_warning'] = 'Не удалось выбрать контакты клиента. Убедитесь, что у клиента есть активные контакты и связанные контакты с уведомлениями на почту для %s включены.';
$lang['help_leads_create_permission']              = 'Все сотрудники могут создавать потенциальные лиды, кроме пользователей, отмеченных как Не сотрудники';
$lang['help_leads_edit_permission']                = 'Каждый кто имеет доступ к конкретному лиду, может редактировать информацию о лиде';
$lang['triggers']                                  = 'Триггеры';
$lang['notice_only_one_active_sms_gateway']        = 'Разрешен только 1 активный шлюз SMS';
$lang['sms_trigger_disable_tip']                   = 'Оставьте содержимое пустым, чтобы отключить определенный триггер.';
$lang['tables']                                    = 'Таблицы';
$lang['only_project_tasks']                        = 'Только задачи связанные с проектом';
$lang['download_all']                              = 'Скачать все';
$lang['settings_sales_credit_note_number_format']  = 'Формат номера кредитной записи';
$lang['sms_reminder_sent_to']                      = 'SMS-напоминание отправлено на %s';
$lang['ideal_customer_statement_descriptor']       = 'Распознаватель дескрипторов (указано в выписке клиента)';
$lang['payment_received_awaiting_confirmation']    = 'Ваш платеж был получен и ожидает подтверждения.';
$lang['discount_fixed_amount']                     = 'Фиксированная сумма';
$lang['timesheet_duration_instead']                = 'Введите продолжительность';
$lang['timesheet_date_instead']                    = 'Ввести время начала и окончания';
$lang['allow_non_admin_members_to_import_leads']   = 'Разрешить сотрудникам (не админам) импортировать лиды';
$lang['project_hide_tasks_settings_info']          = 'Задачи исключеные из таблицы основных задач для этого проекта, вы можете просматривать задачи проекта только в этой области.';

# Version 1.9.9
$lang['ticket_create_no_contact']            = 'Тикет без контакта';
$lang['ticket_create_to_contact']            = 'Тикет для контакта';
$lang['showing_billable_tasks_from_project'] = 'Отображение оплачиваемых задач из проекта';
$lang['no_billable_tasks_found']             = 'Оплачиваемые задачи не найдены';
$lang['help_leads_permission_view']          = 'Если это разрешение не отмечено, тогда сотрудник сможет просматривать только назначенные лиды, созданные сотрудником и лиды, которые отмечены как общедоступные';

# Version 2.0.0

$lang['customers']                                              = $lang['clients'];
$lang['knowledge_base']                                         = $lang['kb_string'];
$lang['staff']                                                  = $lang['als_staff'];
$lang['checklist_templates']                                    = 'Шаблоны списков заданий';
$lang['emails_tracking']                                        = 'Отслеживание писем';
$lang['no_tracked_emails_sent']                                 = 'Нет отслеживаемых отправленных писем';
$lang['tracked_emails_sent']                                    = 'Отслеживаемые отправленные письма';
$lang['tracked_email_date']                                     = 'Дата';
$lang['tracked_email_subject']                                  = 'Тема';
$lang['tracked_email_to']                                       = 'Для';
$lang['tracked_email_opened']                                   = 'Открыто';
$lang['tracked_email_not_opened']                               = 'Не открыто';
$lang['not_viewed_yet']                                         = 'Это письмо %s еще не просмотрено клиентом';
$lang['undo']                                                   = 'Назад';
$lang['sign_document_validation']                               = 'Подпишите документ.';
$lang['document_customer_signature_text']                       = 'Подпись (Клиент)';
$lang['accept_identity_confirmation_and_signature_sign']        = 'Требовать подтверждения цифровой подписи и удостоверения личности';
$lang['legal_bound_text']                                       = 'Юридический текст';
$lang['e_signature_sign']                                       = 'Подпись';
$lang['is_signed']                                              = 'Подписано';
$lang['is_not_signed']                                          = 'Не подписано';
$lang['download']                                               = 'Скачать';
$lang['view_pdf_in_new_window']                                 = 'Просмотреть PDF в новой вкладке';
$lang['show_pdf_signature_contract']                            = 'Показать подпись в договоре';
$lang['document_signed_successfully']                           = 'Вы успешно подписали этот документ';
$lang['document_signed_info']                                   = 'Этот документ подписан %s в %s с IP-адреса %s';
$lang['keep_signature']                                         = 'Клиент должен поставить подпись';
$lang['view_contract']                                          = 'Просмотр договора';
$lang['summary']                                                = 'Обзор';
$lang['discussion']                                             = 'Обсуждение';
$lang['general_information']                                    = 'Общая информация';
$lang['proposal_information']                                   = 'Заявка';
$lang['contract_comments']                                      = 'Комментарии';
$lang['not_contract_comment_from_client']                       = 'Новый комментарий от клиента по договору %s ...';
$lang['contract_files']                                         = 'Файлы договора';
$lang['date_signed']                                            = 'Дата подписания';
$lang['clear_signature']                                        = 'Очистить подпись';
$lang['recurring_has_ended']                                    = 'Этот повторяющийся %s был завершен.';
$lang['cycles_remaining']                                       = 'Оставшиеся циклы';
$lang['cycles_infinity']                                        = 'Бесконечно';
$lang['recurring_total_cycles']                                 = 'Всего циклов';
$lang['cycles_passed']                                          = 'Пройдено %s';
$lang['api_key_not_set_error_message']                          = 'Не настроен ключ API, кликните на следующую ссылку, чтобы настроить ключ API: %s';
$lang['subscription']                                           = 'Подписка';
$lang['subscription_lowercase']                                 = 'подписка';
$lang['subscriptions']                                          = 'Подписки';
$lang['tax_is_used_in_subscriptions_warning']                   = 'Вы не можете обновить этот налог, потому что он используется подписками.';
$lang['credit_card']                                            = 'Кредитная карта';
$lang['update_credit_card']                                     = 'Обновление кредитной карты';
$lang['credit_card_update_info']                                = 'Хотите обновить кредитную карту? Предоставьте здесь новые данные.';
$lang['update_card_details']                                    = 'Обновить информацию о карте';
$lang['update_card_btn']                                        = 'Обновить карту';
$lang['subscription_name']                                      = 'Название подписки';
$lang['subscriptions_description']                              = 'Описание';
$lang['subscribe']                                              = 'Подписаться';
$lang['subscription_date']                                      = 'Дата';
$lang['first_billing_date']                                     = 'Первая дата выставления счета';
$lang['allow_primary_contact_to_update_credit_card']            = 'Разрешить основному контакту обновлять сохраненный токен кредитной карты?';
$lang['show_subscriptions_in_customers_area']                   = 'Показать подписки в области клиентов?';
$lang['show_subscriptions_in_customers_area_help']              = 'Эта опция действительна только для основного контакта клиента.';
$lang['subscription_sent_to_email_success']                     = 'Подписка успешно отправлена по эл. почте';
$lang['subscription_sent_to_email_fail']                        = 'Не удалось отправить подписку на эл. почту';
$lang['new_subscription']                                       = 'Новая подписка';
$lang['subscription_status']                                    = 'Статус';
$lang['next_billing_cycle']                                     = 'Следующий платежный цикл';
$lang['subscription_not_subscribed']                            = 'Не подписано';
$lang['send_subscription']                                      = 'Отправить подписку';
$lang['subscription_will_send_to_primary_contact']              = 'Подписка будет отправлена на основной контакт.';
$lang['subscription_resumed']                                   = 'Подписка успешно активирована';
$lang['subscription_canceled']                                  = 'Подписка успешно отменена';
$lang['no_credit_card_found']                                   = 'Кредитная карта не найдена';
$lang['cancel_immediately']                                     = 'Немедленно отменить';
$lang['cancel_at_end_of_billing_period']                        = 'Отмена в конце платежного периода';
$lang['view_subscription']                                      = 'Просмотр подписки';
$lang['subscription_future']                                    = 'Будущий';
$lang['subscription_active']                                    = 'Активный';
$lang['subscription_past_due']                                  = 'Просрочено';
$lang['subscription_canceled']                                  = 'Отменено';
$lang['subscription_unpaid']                                    = 'Неоплачено';
$lang['billing_plan']                                           = 'Тарифный план';
$lang['upcoming_invoice']                                       = 'Предстоящие счета';
$lang['resume_now']                                             = 'Продолжить';
$lang['subscription_not_yet_subscribed']                        = 'Клиент еще не подписался на эту подписку.';
$lang['subscription_is_canceled_no_resume']                     = 'Эта подписка отменена и не может быть возобновлена.';
$lang['subscription_will_be_canceled_at_end_of_billing_period'] = 'Эта подписка будет отменена в конце платежного периода.';
$lang['customer_successfully_subscribed_to_subscription']       = 'Благодарим вас за подписку %s';
$lang['date_subscribed']                                        = 'Дата подписания';
$lang['reports']                                                = 'Отчеты';
$lang['subscriptions_summary']                                  = 'Подписки';
$lang['calendar_only_assigned_tasks']                           = 'Показывать только задания, назначенные зарегистрированному сотруднику';
$lang['invoice_activity_subscription_payment_succeeded']        = 'Подтверждение оплаты подписки, отправлено письмо: %s';
$lang['mail_engine']                                            = 'Почтовый движок';
$lang['settings_require_client_logged_in_to_view_contract']     = 'Требовать от клиента входа в систему для просмотра договора';
$lang['privacy_policy']                                         = 'Политика конфиденциальности';
$lang['gdpr_terms_agree']                                       = 'Я принимаю <a href="%s" target="_blank">Условия & Правила</a>';
$lang['terms_and_conditions_validation']                        = 'Вы должны принять Условия и Правила, чтобы продолжить.';
$lang['gdpr']                                                   = 'Общие правила защиты данных (GDPR)';
$lang['data_removal_request_sent']                              = 'Запрос на удаление данных успешно отправлен';
$lang['gdpr_consents']                                          = 'Соглашения';
$lang['gdpr_consent']                                           = 'Соглашение';
$lang['gdpr_consent_purpose']                                   = 'Цель';
$lang['gdpr_consent_opt_in']                                    = 'Принять';
$lang['gdpr_consent_opt_out']                                   = 'Отказаться';
$lang['gdpr_consent_agree']                                     = 'Я согласен';
$lang['gdpr_consent_disagree']                                  = 'Я не согласен';
$lang['view_consent']                                           = 'Просмотр соглашения';
$lang['transfer_consent']                                       = 'Соглашение на передачу';
$lang['view_public_form']                                       = 'Просмотреть общедоступную форму';
$lang['update_consent']                                         = 'Обновить соглашение';
$lang['consent_last_updated']                                   = 'Последнее обновление: %s';
$lang['showing_search_result']                                  = 'Отображение результатов поиска: %s';
$lang['per_page']                                               = 'На странице';
$lang['allow_staff_view_invoices_assigned']                     = 'Разрешить сотрудникам просматривать счета-фактуры, где они назначены';
$lang['allow_staff_view_estimates_assigned']                    = 'Позвольте сотрудникам просматривать сметы, для которых они назначены';
$lang['gdpr_right_to_be_informed']                              = 'Право на получение информации';
$lang['gdpr_right_of_access']                                   = 'Право на доступ';
$lang['gdpr_right_to_data_portability']                         = 'Право на перенос данных';
$lang['gdpr_right_to_erasure']                                  = 'Право на удаление';
$lang['edit_my_information']                                    = 'Изменить мою информацию';
$lang['export_my_data']                                         = 'Экспорт моих данных';
$lang['request_data_removal']                                   = 'Удаление данных';
$lang['explanation_for_data_removal']                           = 'Объяснение для удаления данных';
$lang['briefly_describe_why_remove_data']                       = 'Кратко опишите, почему вы хотите удалить данные';
$lang['date_published']                                         = 'Дата публикации';
$lang['view']                                                   = 'Просмотр';
$lang['customer_is_subscribed_to_subscription_info']            = 'Клиент подписался на эту подписку';
$lang['save_last_order_for_tables']                             = 'Сохранить последнюю сортировку для таблиц';
$lang['date_created']                                           = 'Дата создания';

# Version 2.0.1
$lang['company_logo_dark']                                      = 'Темный логотип компании';
$lang['customers_register_require_confirmation']                = 'Администратор должен подтвердить регистрацию клиента';
$lang['customer_requires_registration_confirmation']            = 'Требуется подтверждение регистрации';
$lang['confirm_registration']                                   = 'Подтвердить регистрацию';
$lang['customer_registration_successfully_confirmed']           = 'Регистрация клиента успешно подтверждена';
$lang['customer_register_account_confirmation_approval_notice'] = 'Благодарим вас за регистрацию, ваша учетная запись находится в ожидании подтверждения и будет подтверждена в ближайшее время.';
$lang['after_subscription_payment_succeeded']                   = 'После успешной оплаты подписки';
$lang['subscription_option_send_invoice']                       = 'Отправить счет';
$lang['subscription_option_send_payment_receipt']               = 'Отправить квитанцию об оплате';
$lang['subscription_option_send_payment_receipt_and_invoice']   = 'Отправить счет и квитанцию об оплате';
$lang['subscription_option_do_nothing']                         = 'Ничего не делать';
$lang['gdpr_not_enabled']                                       = 'GDPR не включен';
$lang['enable_gdpr']                                            = 'Включить GDPR';
$lang['gdpr_right_to_rectification']                            = 'Право на изменение';
$lang['test_sms_config']                                        = 'Тестировать параметры СМС';
$lang['test_sms_message']                                       = 'Тестовое сообщение';
$lang['send_test_sms']                                          = 'Отправить тестовое СМС';
$lang['gdpr_short']                                             = 'GDPR';
$lang['allow_non_admin_staff_to_delete_ticket_attachments']     = 'Разрешить сотрудникам, не являющимся администраторами, удалять вложения к тикетам';

# Version 2.1.0
$lang['contract_number']                                = 'Номер договора';
$lang['project_changing_status_recurring_tasks_notice'] = 'Вы сменили статус на {0}, все повторяющиеся задачи будут отменены';
$lang['not_contract_signed']                            = 'Договор с темой %s был подписан клиентом';
$lang['the_number_sign']                                = '#';
$lang['not_new_ticket_reply']                           = 'Клиент ответил в тикете - %s';
$lang['receive_notification_on_new_ticket_replies']     = 'Получать уведомление, когда клиент отвечает на тикет';
$lang['receive_notification_on_new_ticket_reply_help']  = 'Все сотрудники, которые входят в отдел поддержки, получат уведомление, когда клиент ответил в тикете';
$lang['payment_gateway_enable_paypal']                  = 'Включить PayPal платежи';
$lang['project_member']                                 = 'Участник проекта';
$lang['contract_notes']                                 = 'Заметки';
$lang['contract_add_note']                              = 'Добавить заметку';

# Version 2.1.1
$lang['frequency']              = 'Частота';
$lang['frequency_every']        = 'Каждый %s';
$lang['last_invoice_date']      = 'Дата последнего счета';
$lang['next_invoice_date_list'] = 'Следующая дата выставления счета';
$lang['enter_new_card']         = 'Введите новую карту';

# Version 2.2.0
$lang['save_and_record_payment']                                     = 'Сохранить и записать платеж';
$lang['choose_from_google_drive']                                    = 'Выберите из Google Диска';
$lang['open_in_google']                                              = 'Открыть в Google';
$lang['google_picker']                                               = 'Google Picker';
$lang['enable_google_picker']                                        = 'Включить Google Picker';
$lang['google_api_client_id']                                        = 'Идентификатор клиента Google API';
$lang['subtract_tax_total_from_amount']                              = 'Вычесть сумму налога (%s) из суммы';
$lang['expense_subtract_info_text']                                  = 'Используйте этот вариант, чтобы вычесть общую сумму налога из суммы расходов. Полезно когда вы ввели сумму расходов с включенным налогом (включая налог).';
$lang['company_exists_info']                                         = 'Похоже, что клиент с именем %s уже существует, если вы все еще хотите создать клиента, вы можете игнорировать это сообщение.';
$lang['import_items']                                                = 'Импорт';
$lang['total_items_deleted']                                         = 'Всего удалено: %s';
$lang['billable_amount']                                             = 'Сумма к оплате';
$lang['last_child_invoice_date']                                     = 'Дата последнего дочернего счета';
$lang['good_morning']                                                = 'Доброе утро,';
$lang['good_afternoon']                                              = 'Добрый день,';
$lang['good_evening']                                                = 'Добрый вечер,';
$lang['description_in_invoice_item']                                 = 'Включить описание в счет';
$lang['description_in_invoice_item_help']                            = 'Полезно, если вы хотите включить дополнительную информацию в счет подписки, например, что включает эта подписка.';
$lang['ticket_reminders']                                            = 'Напоминания';
$lang['ticket_set_reminder_title']                                   = 'Установить напоминание для тикета';
$lang['calendar_ticket_reminder']                                    = 'Напоминания тикетов';
$lang['email_verification_required']                                 = 'Требуется подтверждение по эл. почте';
$lang['email_verification_required_message']                         = 'Чтобы получить доступ ко всем доступным функциям портала, сначала необходимо подтвердить свою эл. почту.';
$lang['email_verification_required_message_mail']                    = 'Мы отправили вам эл. письмо с инструкциями для подтверждения, если вы не получили письмо, пожалуйста, проверьте папку со спамом или нажмите <a href="%s">здесь</a> чтобы отправить письмо повторно.';
$lang['email_already_verified']                                      = 'Ваша эл. почта уже подтверждена';
$lang['invalid_verification_key']                                    = 'Неверный ключ подтверждения';
$lang['verification_key_expired']                                    = 'Ключ подтверждения истек';
$lang['email_successfully_verified']                                 = 'Ваша эл. почта была успешно подтверждена.';
$lang['email_successfully_verified_but_required_admin_confirmation'] = 'Ваша эл. почта была успешно подтверждена, вы сможете войти в систему после того, как администратор подтвердит вашу учетную запись вручную.';
$lang['email_verification_mail_sent_successully']                    = 'Мы отправили вам эл. письмо с инструкциями для подтверждения';
$lang['create_reminder']                                             = 'Создать напоминание';
$lang['no_reminders_for_this_task']                                  = 'Отсутствуют напоминания для этой задачи';
$lang['reminder_for']                                                = 'Напоминание для %s на %s';
$lang['no_description_provided']                                     = 'Нет описания';
$lang['pay_with_card']                                               = 'Оплатить картой';
$lang['not_customer_uploaded_file']                                  = 'Новый файл(ы) загружен(ы) в профиль';

# Version 2.2.1
$lang['customer_files_info_message'] = 'Файлы из проектов и задач, связанных с клиентом, в этой таблице не отображаются.';
$lang['ticket_import_reply_only']    = 'Попробуйте импортировать только фактический ответ на тикет (без цитируемого/перенаправленного сообщения)';
$lang['learn_more']                  = 'Подробнее';
$lang['sales_item']                  = 'Продажа';


# Version 2.3.0

$lang['modules']                                 = 'Модули';
$lang['module']                                  = 'Модуль';
$lang['module_description']                      = 'Описание';
$lang['module_activate']                         = 'Активировать';
$lang['module_deactivate']                       = 'Дезактивировать';
$lang['module_uninstall']                        = 'Удалить';
$lang['module_upgrade_database']                 = 'Обновить базу данных';
$lang['module_settings']                         = 'Настройки';
$lang['module_version']                          = 'Версия %s';
$lang['module_by']                               = 'от %s';
$lang['staff_which_are_using_role']              = 'Сотрудники, использующие эту роль';
$lang['copy']                                    = 'Копировать';
$lang['read_more']                               = 'Подробнее';
$lang['show_less']                               = 'Показать меньше';
$lang['project_progress_text']                   = 'Прогресс выполнения проекта';
$lang['timer_not_stopped_yet']                   = 'Этот таймер еще не остановлен';
$lang['refunds']                                 = 'Возвраты';
$lang['refund']                                  = 'Возврат';
$lang['refund_amount']                           = 'Сумма возврата';
$lang['not_refunds_found']                       = 'Возвраты не найдены';
$lang['refunds_applied_cant_delete_credit_note'] = 'На этот кредит возмещены деньги, вам нужно сначала удалить возвраты.';

# Version 2.3.2
$lang['create_recurring_from_child_error_message'] = 'Вы не можете установить %s как повторяющийся, потому что %s является дочерним по отношению к другим повторяющимся %s.';
$lang['statement_credit_note_refund']              = 'Возврат кредитной ноты - %s';
$lang['no_validation']                             = 'Нет подтверждения';
$lang['lead_unique_validation_on']                 = 'Выполните проверку на дублирование лида в следующих полях:';
$lang['phonenumber_exists']                        = 'Номер телефона уже существует';
$lang['company_exists']                            = 'Компания уже существует';
$lang['website_exists']                            = 'Сайт уже существует';
$lang['send_payment_receipt_to_client']            = 'Отправить клиенту платежную квитанцию';
$lang['payment_sent_successfully']                 = 'Квитанция об оплате успешно отправлена.';
$lang['payment_sent_failed']                       = 'Не удалось отправить квитанцию об оплате.';

# Version 2.3.5
$lang['tags_update_replace_warning'] = 'Некоторые теги не обновляются, потому что имя тега уже существует.';
$lang['attach_statement']            = 'Прикрепить клиентскую выписку';

# Version 2.4.0
$lang['delete_credit_card']                        = 'Удалить карту';
$lang['delete_credit_card_info']                   = 'Вы не можете удалить кредитную карту, так как у вас есть активные подписки.';
$lang['credit_card_successfully_deleted']          = 'Карта успешно удалена.';
$lang['subscription_incomplete']                   = 'Незавершенный';
$lang['subscription_incomplete_expired']           = 'Неполный истек';
$lang['credit_card_short']                         = 'Карта';
$lang['webhook_created']                           = 'Вебхук создан успешно.';
$lang['subscriptions_terms_info']                  = 'Введите условия использования, которые будут отображаться клиенту перед подпиской.';
$lang['subscription_complete_payment']             = 'Платеж завершен';
$lang['subscription_is_subscription_is_expired']   = 'Срок действия этой подписки истек.';
$lang['subscription_plan_currency_does_not_match'] = 'Валюта выбранного плана не соответствует валюте, выбранной ниже.';
$lang['subscription_first_billing_date_info']      = 'Оставьте поле пустым, чтобы использовать дату, когда клиент подписывается. Это поле должно быть будущей датой, если вы выбрали дату и она наступила, но клиент еще не подписан, то будет использоваться дата, когда клиент подпишется.';
$lang['stripe_subscription_select_plan']           = 'Выберите план Stripe';

# Version 2.4.1
$lang['contract_content_permission_edit_warning'] = 'Ваши текущие разрешения не позволяют вам редактировать содержимое договора. Свяжитесь с администратором, чтобы получить разрешение на редактирование договоров.';
$lang['mark_as_signed']                           = 'Отметить как подписанное';
$lang['unmark_as_signed']                         = 'Убрать подпись';
$lang['marked_as_signed']                         = 'Отмечен как подписанный';
$lang['contract_marked_as_signed_info']           = 'Этот контракт подписан вручную.';
$lang['save_and_send_later']                      = 'Сохранить и отправить позже';
$lang['schedule']                                 = 'График';
$lang['schedule_email_for']                       = 'Отправить расписание по Email для %s';
$lang['schedule_date']                            = 'Когда вы хотите отправить письмо?';
$lang['email_scheduled_successfully']             = 'График успешно отправлен на Email';
$lang['invoice_will_be_sent_at']                  = 'Счет будет отправлен по адресу %s';

# Version 2.5.0
$lang['recaptcha_ignore_ips']               = 'Игнорируемые IP-адреса';
$lang['recaptcha_ignore_ips_info']          = 'Введите IP-адреса через запятую, которые reCaptcha должна игнорировать.';
$lang['show_task_reminders_on_calendar']    = 'Напоминания о задачах';
$lang['contracts_about_to_expire']          = 'Договоры скоро истекают';
$lang['no_contracts_about_to_expire']       = 'Нет никаких договоров, срок действия которых истекает в ближайшие %s дня(ей).';
$lang['lead_value']                         = 'Значение лида';
$lang['lead_value_tooltip']                 = 'Будет использоваться базовая валюта.';
$lang['leads_dt_lead_value']                = 'Значение лида';
$lang['leads_canban_lead_value']            = 'Значение лида: %s';
$lang['lead_add_edit_lead_value']           = 'Значение лида';

# Version 2.6.0
$lang['gantt_view_day'] = 'Обзор за день';
$lang['gantt_view_week'] = 'Обзор за неделю';
$lang['gantt_view_month'] = 'Обзор за месяц';
$lang['gantt_view_year'] = 'Обзор за год';

# Version 2.7.0

$lang['hour_of_day_perform_tasks_reminder_notification_help'] = '24-часовой формат экв. 9 для 9 утра или 15 для 15:00. Используется для повторяющихся задач, напоминаний о задачах и т.д.';
$lang['clients_nav_contacts']                                 = 'Контакты';
$lang['clients_my_contacts']                                  = 'Контакты';
$lang['clients_my_contact']                                   = 'Контакт';
$lang['new_contact']                                          = 'Новый контакт';
$lang['customer_contact']                                     = 'Мои контакты';
$lang['clients_contact_added']                                = 'Контакт успешно добавлен';
$lang['clients_contact_updated']                              = 'Контакт успешно обновлен';
$lang['allow_primary_contact_to_manage_other_contacts']       = 'Разрешить основному контакту управлять другими контактами клиентов';
$lang['contact_form_validation_is_unique']                    = 'Контакт с этим {field} уже существует';
$lang['invoice_number_not_applied_on_draft']                  = 'Если счет сохранен как черновик, то номер не будет применен, вместо этого будет указан следующий номер счета, когда счет будет отправлен клиенту или помечен как отправленный.';

$lang['two_factor_authentication_disabed']                    = 'Отключено';
$lang['enable_google_two_factor_authentication']              = 'Включить Google Authenticator';
$lang['set_google_two_factor_authentication_failed']          = 'Не удалось сохранить аутентификацию, попробуйте еще раз';
$lang['enter_two_factor_auth_code_from_mobile']               = 'Введите код аутентификации из приложения Authenticator';
$lang['staff_two_factor_authentication']                      = 'Двухфакторная аутентификация';
$lang['google_authentication_code']                           = 'Введите код из приложения Authenticator';
$lang['set_two_factor_authentication_successful']             = 'Успешно обновлены настройки двухфакторной аутентификации';
$lang['set_two_factor_authentication_failed']                 = 'Не удалось обновить настройки двухфакторной аутентификации';
$lang['google_2fa_code_valid']                                = 'Успешно проверена аутентификация';
$lang['google_2fa_code_invalid']                              = 'Введен неверный код аутентификации, попробуйте еще раз.';
$lang['google_2fa_scan_qr_guide']                             = 'Отсканируйте QR-код ниже с помощью приложения Google Authenticator на вашем мобильном устройстве, после чего заполните поле ниже кодом, сгенерированным в приложении.';
$lang['google_2fa_manul_input_secret']                        = 'Секретный ключ для ручного ввода';


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
