<?php

# Version 1.0.0
#
# General
$lang['id']                   = 'ID';
$lang['name']                 = '姓名';
$lang['options']              = '選項';
$lang['submit']               = '儲存';
$lang['added_successfully']   = '%s 新增成功.';
$lang['updated_successfully'] = '%s 更新成功.';
$lang['edit']                 = '編輯 %s';
$lang['add_new']              = '新增新的 %s';
$lang['deleted']              = '%s 刪除';
$lang['problem_deleting']     = '問題刪除 %s';
$lang['is_referenced']        = '%s 的身份證已經被用過了.';
$lang['close']                = '關閉';
$lang['send']                 = '發出';
$lang['cancel']               = '取消';
$lang['go_back']              = '回顧';
$lang['error_uploading_file'] = '檔案上傳錯誤';
$lang['load_more']            = '載入更多';
$lang['cant_delete_default']  = '不能刪除預設 %s';

# Invoice General
$lang['invoice_status_paid']                = '付款';
$lang['invoice_status_unpaid']              = '未付款';
$lang['invoice_status_overdue']             = '過期的';
$lang['invoice_status_not_paid_completely'] = '部分支付';

$lang['invoice_pdf_heading'] = '發票';

$lang['invoice_table_item_heading']            = '條款';
$lang['invoice_table_quantity_heading']        = '數量';
$lang['invoice_table_rate_heading']            = '估價';
$lang['invoice_table_tax_heading']             = '稅款';
$lang['invoice_table_amount_heading']          = '總額';
$lang['invoice_subtotal']                      = '小計';
$lang['invoice_adjustment']                    = '調整';
$lang['invoice_total']                         = '總數';
$lang['invoice_bill_to']                       = '付款方';
$lang['invoice_data_date']                     = '發票日期:';
$lang['invoice_data_duedate']                  = '截止日期:';
$lang['invoice_received_payments']             = '交易';
$lang['invoice_no_payments_found']             = '這張發票未付款';
$lang['invoice_note']                          = '註解:';
$lang['invoice_payments_table_number_heading'] = '支付 #';
$lang['invoice_payments_table_mode_heading']   = '支付方式';
$lang['invoice_payments_table_date_heading']   = '日期';
$lang['invoice_payments_table_amount_heading'] = '總額';


# Announcements
$lang['announcement']                 = '通告';
$lang['announcement_lowercase']       = '通告';
$lang['announcements']                = '通告';
$lang['announcements_lowercase']      = '通告';
$lang['new_announcement']             = '新的通告';
$lang['announcement_name']            = '通告名稱';
$lang['announcement_message']         = '訊息';
$lang['announcement_show_to_staff']   = '顯示員工';
$lang['announcement_show_to_clients'] = '顯示客戶';
$lang['announcement_show_my_name']    = '顯示我的名字';

# Clients
$lang['clients']                              = '客戶';
$lang['client']                               = '客戶';
$lang['new_client']                           = '新客戶';
$lang['client_lowercase']                     = '客戶';
$lang['client_firstname']                     = '姓';
$lang['client_lastname']                      = '名';
$lang['client_email']                         = '電子郵件';
$lang['client_company']                       = '公司';
$lang['client_vat_number']                    = '增值稅稅號';
$lang['client_address']                       = '地址';
$lang['client_city']                          = '城市';
$lang['client_postal_code']                   = '郵遞區號';
$lang['client_state']                         = '省份';
$lang['client_password']                      = '密碼';
$lang['client_password_change_populate_note'] = '注: 如果您填充這個欄位，密碼將被更改為該客戶.';
$lang['client_password_last_changed']         = '最後修改密碼:';
$lang['login_as_client']                      = '登入客戶';
$lang['client_invoices_tab']                  = '發票';
$lang['contracts_invoices_tab']               = '合約';
$lang['contracts_tickets_tab']                = '工單';
$lang['contracts_notes_tab']                  = '備註';
$lang['note_description']                     = '注意說明';

$lang['client_do_not_send_welcome_email'] = '請勿傳送歡迎郵件';

$lang['clients_notes_table_description_heading'] = '描述';
$lang['clients_notes_table_addedfrom_heading']   = '新增';
$lang['clients_notes_table_dateadded_heading']   = '新增日期';

$lang['clients_list_full_name']  = '全稱';
$lang['clients_list_last_login'] = '最後登入';

# Contracts
$lang['contracts']                = '合約';
$lang['contract']                 = '合約';
$lang['new_contract']             = '新合約';
$lang['contract_lowercase']       = '合約';
$lang['contract_start_date']      = '開始日期';
$lang['contract_end_date']        = '結束日期';
$lang['contract_subject']         = '項目';
$lang['contract_description']     = '描述';
$lang['contract_subject_tooltip'] = '客戶也可以看見項目';
$lang['contract_client_string']   = '客戶';
$lang['contract_attach']          = '附加檔案';

$lang['contract_list_client']     = '客戶';
$lang['contract_list_subject']    = '項目';
$lang['contract_list_start_date'] = '開始日期';
$lang['contract_list_end_date']   = '結束日期';

# Currencies
$lang['currencies']           = '貨幣';
$lang['currency']             = '貨幣';
$lang['new_currency']         = '新貨幣';
$lang['currency_lowercase']   = '貨幣';
$lang['base_currency_set']    = '這是你的基礎貨幣.';
$lang['make_base_currency']   = '使用基礎貨幣';
$lang['base_currency_string'] = '基本貨幣';

$lang['currency_list_name']   = '名稱';
$lang['currency_list_symbol'] = '符號';


$lang['currency_add_edit_description'] = '貨幣名稱';
$lang['currency_add_edit_rate']        = '符號';

$lang['currency_edit_heading'] = '編輯貨幣';
$lang['currency_add_heading']  = '新增新的貨幣';


# Department
$lang['departments']          = '部門';
$lang['department']           = '部門';
$lang['new_department']       = '新部門';
$lang['department_lowercase'] = '部門';

$lang['department_name']             = '部門名稱';
$lang['department_email']            = '部門郵件';
$lang['department_hide_from_client'] = '針對客戶隱藏';
$lang['department_list_name']        = '名稱';

# Email Templates
$lang['email_templates']                        = '電子郵件模板';
$lang['email_template']                         = '電子郵件模板';
$lang['email_template_lowercase']               = '電子郵件模板';
$lang['email_templates_lowercase']              = '電子郵件模板';
$lang['email_template_ticket_fields_heading']   = '工單';
$lang['email_template_invoices_fields_heading'] = '發票';
$lang['email_template_clients_fields_heading']  = '客戶';

$lang['template_name']                = '模板名稱';
$lang['template_subject']             = '項目';
$lang['template_fromname']            = '姓名';
$lang['template_fromemail']           = '電子郵件';
$lang['send_as_plain_text']           = '傳送純文字';
$lang['email_template_disabled']      = '禁用';
$lang['email_template_email_message'] = '電子郵件訊息';
$lang['available_merge_fields']       = '可合併欄位';
# Home
$lang['dashboard_string']                          = '主面板';
$lang['home_latest_todos']                         = '新的待辦事項';
$lang['home_no_latest_todos']                      = '暫不需要做的事項';
$lang['home_latest_finished_todos']                = '最新完成的任務';
$lang['home_no_finished_todos_found']              = '發現沒有完成所有的';
$lang['home_tickets_awaiting_reply_by_department'] = '各部門等待批覆的工單';
$lang['home_tickets_awaiting_reply_by_status']     = '等待狀態回覆的工單';
$lang['home_this_week_events']                     = '本週的事情';
$lang['home_upcoming_events_next_week']            = '下週即將舉行的活動';
$lang['home_event_added_by']                       = '增加的事件';
$lang['home_public_event']                         = '公開事件';
$lang['home_weekly_payment_records']               = '每週付款記錄';
$lang['home_weekend_ticket_opening_statistics']    = '每週空缺票統計';
# Newsfeed
$lang['whats_on_your_mind']                                 = '你有什麼想法?';
$lang['new_post']                                           = '崗位';
$lang['newsfeed_upload_tooltip']                            = '提示：將檔案移動至目標框上傳';
$lang['newsfeed_all_departments']                           = '所有部門';
$lang['newsfeed_pin_post']                                  = '置頂資訊';
$lang['newsfeed_unpin_post']                                = '取消置頂資訊';
$lang['newsfeed_delete_post']                               = '刪除';
$lang['newsfeed_published_post']                            = '發布時間';
$lang['newsfeed_you_like_this']                             = '你喜歡這個';
$lang['newsfeed_like_this']                                 = '喜歡這個';
$lang['newsfeed_one_other']                                 = '其他的';
$lang['newsfeed_you']                                       = '你';
$lang['newsfeed_and']                                       = '和';
$lang['newsfeed_you_and']                                   = '你 和';
$lang['newsfeed_like_this_saying']                          = '喜歡這個';
$lang['newsfeed_unlike_this_saying']                        = '不喜歡這個';
$lang['newsfeed_show_more_comments']                        = '顯示更多評論';
$lang['comment_this_post_placeholder']                      = '評論這篇文章..';
$lang['newsfeed_post_likes_modal_heading']                  = 'Coleques 誰喜歡這篇文章';
$lang['newsfeed_comment_likes_modal_heading']               = 'Coleques 誰喜歡這評論';
$lang['newsfeed_newsfeed_post_only_visible_to_departments'] = '這篇文章僅能看到下列部門: %s';
# Invoice Items
$lang['invoice_items']          = '發票項目';
$lang['invoice_item']           = '發票項目';
$lang['new_invoice_item']       = '新的項目';
$lang['invoice_item_lowercase'] = '發票項目';

$lang['invoice_items_list_description']    = '描述';
$lang['invoice_items_list_rate']           = '金額';
$lang['invoice_item_add_edit_description'] = '描述';
$lang['invoice_item_add_edit_rate']        = '金額';
$lang['invoice_item_edit_heading']         = '編輯項目';
$lang['invoice_item_add_heading']          = '新增新項';

# Invoices


$lang['invoices']                       = '發票';
$lang['invoice']                        = '發票';
$lang['invoice_lowercase']              = '發票';
$lang['create_new_invoice']             = '建立新的發票';
$lang['view_invoice']                   = '檢視發票';
$lang['invoice_payment_recorded']       = '發票的付款記錄';
$lang['invoice_payment_record_failed']  = '未記載付款發票';
$lang['invoice_sent_to_client_success'] = '給客戶傳送發票成功';
$lang['invoice_sent_to_client_fail']    = '傳送發票失敗';
$lang['invoice_reminder_send_problem']  = '傳送發票過期提醒';
$lang['invoice_overdue_reminder_sent']  = '發票逾期提醒傳送成功';

$lang['invoice_details']              = '發票明細';
$lang['invoice_view']                 = '檢視發票';
$lang['invoice_select_customer']      = '客戶';
$lang['invoice_add_edit_number']      = '發票號';
$lang['invoice_add_edit_date']        = '發票日期';
$lang['invoice_add_edit_duedate']     = '截止日期';
$lang['invoice_add_edit_currency']    = '貨幣';
$lang['invoice_add_edit_client_note'] = '客戶報告';
$lang['invoice_add_edit_admin_note']  = '請注意';

$lang['invoices_toggle_table_tooltip'] = '檢視完整表格';

$lang['edit_invoice_tooltip']                   = '編輯發票';
$lang['delete_invoice_tooltip']                 = '刪除發票。注：所有關於本發票付款將被刪除（如果有的話）.';
$lang['invoice_sent_to_email_tooltip']          = '傳送電子郵件';
$lang['invoice_already_send_to_client_tooltip'] = '這張發票已傳送給客戶 %s';
$lang['send_overdue_notice_tooltip']            = '傳送逾期公告';
$lang['invoice_view_activity_tooltip']          = '活動日誌';
$lang['invoice_record_payment']                 = '支付記錄';

$lang['invoice_send_to_client_modal_heading']    = '把這張發票發給客戶';
$lang['invoice_send_to_client_attach_pdf']       = '附上發票PDF';
$lang['invoice_send_to_client_preview_template'] = '預覽電子郵件模板';

$lang['invoice_dt_table_heading_number']  = '發票 #';
$lang['invoice_dt_table_heading_date']    = '日期';
$lang['invoice_dt_table_heading_client']  = '客戶';
$lang['invoice_dt_table_heading_duedate'] = '截止日期';
$lang['invoice_dt_table_heading_amount']  = '金額';
$lang['invoice_dt_table_heading_status']  = '狀態';

$lang['record_payment_for_invoice']              = '付款記錄';
$lang['record_payment_amount_received']          = '已收金額';
$lang['record_payment_date']                     = '付款日期';
$lang['record_payment_leave_note']               = '留個便條';
$lang['invoice_payments_received']               = '收到的款項';
$lang['invoice_record_payment_note_placeholder'] = '請注意';
$lang['no_payments_found']                       = '未發現該發票的付款';

# Payments
$lang['payments']                             = '付款';
$lang['payment']                              = '付款';
$lang['payment_lowercase']                    = '付款';
$lang['payments_table_number_heading']        = '付款 #';
$lang['payments_table_invoicenumber_heading'] = '發票 #';
$lang['payments_table_mode_heading']          = '支付方式';
$lang['payments_table_date_heading']          = '日期';
$lang['payments_table_amount_heading']        = '金額';
$lang['payments_table_client_heading']        = '客戶';
$lang['payment_not_exists']                   = '付款不存在';

$lang['payment_edit_for_invoice']     = '付款發票';
$lang['payment_edit_amount_received'] = '已收金額';
$lang['payment_edit_date']            = '付款日期';

# Knowledge Base
$lang['kb_article_add_edit_subject'] = '項目';
$lang['kb_article_add_edit_group']   = '分類';
$lang['kb_string']                   = '知識庫';
$lang['kb_article']                  = '條款';
$lang['kb_article_lowercase']        = '條款';
$lang['kb_article_new_article']      = '新條款';
$lang['kb_article_disabled']         = '禁用';
$lang['kb_article_description']      = '條款描述';

$lang['kb_no_articles_found']          = '沒有knowledgbase找到的物品';
$lang['kb_dt_article_name']            = '條款名稱';
$lang['kb_dt_group_name']              = '分類';
$lang['new_group']                     = '新建群組';
$lang['kb_group_add_edit_name']        = '組名';
$lang['kb_group_add_edit_description'] = '短描述';
$lang['kb_group_add_edit_disabled']    = '禁用';
$lang['kb_group_add_edit_note']        = '注：本組中的所有物品將被隱藏，如果檢查禁用';
$lang['group_table_name_heading']      = '名稱';
$lang['group_table_isactive_heading']  = '啟用';
$lang['kb_no_groups_found']            = '沒有找到的知識基礎組';

# Media
$lang['media_files'] = '資料夾';

# Payment modes
$lang['new_payment_mode']       = '新的支付方式';
$lang['payment_modes']          = '支付方式';
$lang['payment_mode']           = '支付方式';
$lang['payment_mode_lowercase'] = '支付方式';
$lang['payment_modes_dt_name']  = '付款方式名稱';

$lang['payment_mode_add_edit_name'] = '付款方式名稱';
$lang['payment_mode_edit_heading']  = '編輯付款方式';
$lang['payment_mode_add_heading']   = '增加新的付款方式';

# Predefined Ticket Replies
$lang['new_predefined_reply']              = '新的預定義的回覆';
$lang['predefined_replies']                = '預定義回答';
$lang['predefined_reply']                  = '預定義的回覆';
$lang['predefined_reply_lowercase']        = '預定義的回覆';
$lang['predefined_replies_dt_name']        = '預定義的回覆名稱';
$lang['predefined_reply_add_edit_name']    = '預定義的回覆名稱';
$lang['predefined_reply_add_edit_content'] = '回覆內容';

# Ticket Priorities
$lang['new_ticket_priority']           = '新的優先';
$lang['ticket_priorities']             = '工單的優先順序';
$lang['ticket_priority']               = '工單優先';
$lang['ticket_priority_lowercase']     = '工單優先';
$lang['no_ticket_priorities_found']    = '沒有發現優先順序';
$lang['ticket_priority_dt_name']       = '工單優先的名稱';
$lang['ticket_priority_add_edit_name'] = '優先順序名稱';

# Reports
$lang['kb_reports']                         = '知識庫文章報告';
$lang['sales_reports']                      = '銷售報告';
$lang['reports_choose_kb_group']            = '選擇組';
$lang['report_kb_yes']                      = '是';
$lang['report_kb_no']                       = '不是';
$lang['report_kb_no_votes']                 = '沒有投票';
$lang['report_this_week_leads_conversions'] = '本週機會轉換';
$lang['report_leads_sources_conversions']   = '來源';
$lang['report_leads_monthly_conversions']   = '每月';
$lang['sales_report_heading']               = '銷售報告';
$lang['report_sales_type_income']           = '總收入';

$lang['report_sales_type_customer']                       = '客戶報告';
$lang['report_sales_base_currency_select_explanation']    = '您需要選擇貨幣，因為你必須使用不同貨幣的發票';
$lang['report_sales_from_date']                           = '從';
$lang['report_sales_to_date']                             = '至';
$lang['report_sales_months_all_time']                     = '全部時間';
$lang['report_sales_months_six_months']                   = '過去的6個月';
$lang['report_sales_months_twelve_months']                = '過去的12個月';
$lang['reports_sales_generated_report']                   = '生成的報告';
$lang['reports_sales_dt_customers_client']                = '客戶';
$lang['reports_sales_dt_customers_total_invoices']        = '所有發票';
$lang['reports_sales_dt_items_customers_amount']          = '金額';
$lang['reports_sales_dt_items_customers_amount_with_tax'] = '稅後金額';

# Roles
$lang['new_role']           = '新角色';
$lang['all_roles']          = '所有的角色';
$lang['roles']              = '員工的角色';
$lang['role']               = '角色';
$lang['role_lowercase']     = '角色';
$lang['roles_total_users']  = '總使用者: ';
$lang['roles_dt_name']      = '角色名字';
$lang['role_add_edit_name'] = '角色名字';

# Service
$lang['new_service']           = '新的服務';
$lang['services']              = '服務';
$lang['service']               = '服務';
$lang['service_lowercase']     = '服務';
$lang['services_dt_name']      = '服務名稱';
$lang['service_add_edit_name'] = '服務名稱';

# Settings
$lang['settings']                    = '設定';
$lang['settings_updated']            = '設定更新';
$lang['settings_save']               = '儲存設定值';
$lang['settings_group_general']      = '基礎設定';
$lang['settings_group_localization'] = '本土化';
$lang['settings_group_tickets']      = '工單';
$lang['settings_group_sales']        = '財務';
$lang['settings_group_email']        = '郵件';
$lang['settings_group_clients']      = '客戶';
$lang['settings_group_newsfeed']     = '新鮮事';
$lang['settings_group_cronjob']      = 'Cron作業';

$lang['settings_yes']                                        = '是';
$lang['settings_no']                                         = '不是';
$lang['settings_clients_default_theme']                      = '違約客戶主題';
$lang['settings_clients_allow_registration']                 = '允許客戶註冊';
$lang['settings_clients_allow_kb_view_without_registration'] = '允許不註冊的知識庫';

$lang['settings_cron_send_overdue_reminder']                 = '傳送發票過期提醒';
$lang['settings_cron_send_overdue_reminder_tooltip']         = '傳送電子郵件到客戶時，逾期發票狀態更新，逾期從cron作業';
$lang['automatically_send_invoice_overdue_reminder_after']   = '自動傳送提醒（天）';
$lang['automatically_resend_invoice_overdue_reminder_after'] = '自動重新發送提醒（天）';

$lang['settings_email_host']      = 'SMTP主機';
$lang['settings_email_port']      = 'SMTP埠';
$lang['settings_email']           = '電子郵件';
$lang['settings_email_password']  = 'SMTP密碼';
$lang['settings_email_charset']   = '電子郵件字符集';
$lang['settings_email_signature'] = '電子郵件簽名';

$lang['settings_general_company_logo']                = '公司標誌';
$lang['settings_general_company_logo_tooltip']        = '推薦尺寸：150×32px';
$lang['settings_general_company_remove_logo_tooltip'] = '將公司的標誌';
$lang['settings_general_company_name']                = '公司名稱';
$lang['settings_general_company_main_domain']         = '公司的主要領域';
$lang['settings_general_use_knowledgebase']           = '利用知識庫';
$lang['settings_general_use_knowledgebase_tooltip']   = '如果您允許該選項知識庫將顯示在客戶上';
$lang['settings_general_tables_limit']                = '表格分頁極限';
$lang['settings_general_default_staff_role']          = '預設人員角色';
$lang['settings_general_default_staff_role_tooltip']  = '當您新增新的工作人員時，該角色將被預設選擇';

$lang['settings_localization_date_format']      = '日期格式';
$lang['settings_localization_default_timezone'] = '預設時區';
$lang['settings_localization_default_language'] = '預設語言';

$lang['settings_newsfeed_max_file_upload_post'] = '最大檔案上傳';

$lang['settings_reminders_contracts']         = '合約到期提醒';
$lang['settings_reminders_contracts_tooltip'] = '過期提醒通知天數';

$lang['settings_tickets_use_services']             = '使用服務';
$lang['settings_tickets_max_attachments']          = '最高票的附件';
$lang['settings_tickets_allow_departments_access'] = '讓員工只能進入員工部門的票';
$lang['settings_tickets_allowed_file_extensions']  = '允許附件副檔名';

$lang['settings_sales_general']                                    = '基礎設定';
$lang['settings_sales_general_note']                               = '基礎設定';
$lang['settings_sales_invoice_prefix']                             = '發票號碼字首';
$lang['settings_sales_decimal_separator']                          = '小數點分隔符';
$lang['settings_sales_thousand_separator']                         = '千位分隔符';
$lang['settings_sales_currency_placement']                         = '貨幣安置';
$lang['settings_sales_currency_placement_before']                  = '在金額前';
$lang['settings_sales_currency_placement_after']                   = '在金額後';
$lang['settings_sales_require_client_logged_in_to_view_invoice']   = '要求客戶登入檢視發票';
$lang['settings_sales_next_invoice_number']                        = '下一個發票號碼';
$lang['settings_sales_next_invoice_number_tooltip']                = '如果你想開始從開始此欄位設定為1';
$lang['settings_sales_decrement_invoice_number_on_delete']         = '刪除發票號碼';
$lang['settings_sales_decrement_invoice_number_on_delete_tooltip'] = '當上次發票被刪除時，你要減少發票號碼嗎？如果設定此選項是在發票刪除下一個發票號碼為15的發票號碼將減少未來14未來發票如果設定為NO的數量將保持15';
$lang['settings_sales_invoice_number_format']                      = '發票號碼格式';
$lang['settings_sales_invoice_number_format_year_based']           = '去年的基礎';
$lang['settings_sales_invoice_number_format_number_based']         = '數量為基礎（1 00000）';

$lang['settings_sales_company_info_note'] = '此資訊將顯示在發票/報價/付款和其他PDF檔案在公司的資訊是必需的';
$lang['settings_sales_company_name']      = '公司名稱';
$lang['settings_sales_address']           = '地址';
$lang['settings_sales_city']              = '城市';
$lang['settings_sales_country_code']      = '國家程式碼';
$lang['settings_sales_postal_code']       = '郵遞區號';
$lang['settings_sales_phonenumber']       = '電話';

# Leads
$lang['new_lead']       = '新銷售機會';
$lang['leads']          = '銷售機會';
$lang['lead']           = '銷售機會';
$lang['lead_lowercase'] = '銷售機會';
$lang['leads_all']      = '全部';

$lang['leads_canban_notes']  = '注：%';
$lang['leads_canban_source'] = '來源：%';

$lang['lead_new_source']            = '新來源';
$lang['lead_sources']               = '機會的來源';
$lang['lead_source']                = '機會的來源';
$lang['lead_source_lowercase']      = '機會的來源';
$lang['leads_sources_not_found']    = '沒有來源';
$lang['leads_sources_table_name']   = '來源名稱';
$lang['leads_source_add_edit_name'] = '來源名稱';

$lang['lead_new_status']         = '新機會狀態';
$lang['lead_status']             = '機會地位';
$lang['lead_status_lowercase']   = '機會地位';
$lang['leads_status_table_name'] = '狀態名稱';

$lang['leads_status_add_edit_name']  = '狀態名稱';
$lang['leads_status_add_edit_order'] = '排序';

$lang['lead_statuses_not_found'] = '無機會狀態發現';
$lang['leads_search']            = '搜尋引';

$lang['leads_table_total'] = '匯流排索：%';

$lang['leads_dt_name']         = '名字';
$lang['leads_dt_email']        = '電子郵件';
$lang['leads_dt_phonenumber']  = '電話';
$lang['leads_dt_assigned']     = '分配';
$lang['leads_dt_status']       = '狀態';
$lang['leads_dt_last_contact'] = '最後聯絡';

$lang['lead_add_edit_name']                = '名字';
$lang['lead_add_edit_email']               = '電子郵件地址';
$lang['lead_add_edit_phonenumber']         = '電話';
$lang['lead_add_edit_source']              = '來源';
$lang['lead_add_edit_status']              = '機會地位';
$lang['lead_add_edit_assigned']            = '分配';
$lang['lead_add_edit_datecontacted']       = '聯絡時間';
$lang['lead_add_edit_contacted_today']     = '今天已聯絡';
$lang['lead_add_edit_activity']            = '日誌';
$lang['lead_add_edit_notes']               = '備註';
$lang['lead_add_edit_add_note']            = '新增備註';
$lang['lead_not_contacted']                = '沒有聯絡過';
$lang['lead_add_edit_contacted_this_lead'] = '已聯絡';

# Misc
$lang['access_denied'] = '訪問拒絕';
$lang['prev']          = '上一頁';
$lang['next']          = '下一頁';

# Datatables
$lang['dt_paginate_first']    = '第一';
$lang['dt_paginate_last']     = '最後';
$lang['dt_paginate_next']     = '下一個';
$lang['dt_paginate_previous'] = '以前';
$lang['dt_search']            = '搜尋:';
$lang['dt_zero_records']      = '未找到匹配記錄';
$lang['dt_loading_records']   = '載入…';
$lang['dt_length_menu']       = '顯示_MENU_ ';
$lang['dt_info_filtered']     = '（從_MAX_總過濾{0}）';
$lang['dt_info_empty']        = '顯示0至0 0{0}';
$lang['dt_info']              = '顯示_START_到_TOTAL_的_END_{0}';
$lang['dt_empty_table']       = '沒有找到{0}';
$lang['dt_sort_ascending']    = '啟用排序列';
$lang['dt_sort_descending']   = '啟用排序列降';
# Invoice Activity Log
$lang['user_sent_overdue_reminder'] = '傳送發票過期提醒';

# Weekdays
$lang['wd_monday']    = '星期一';
$lang['wd_tuesday']   = '星期二';
$lang['wd_thursday']  = '星期四';
$lang['wd_wednesday'] = '星期三';
$lang['wd_friday']    = '星期五';
$lang['wd_saturday']  = '星期六';
$lang['wd_sunday']    = '星期日';

# Admin Left Sidebar
$lang['als_dashboard'] = '主面板';
$lang['als_clients']   = '客戶';
$lang['als_leads']     = '銷售機會';
$lang['als_contracts'] = '合約';
$lang['als_sales']     = '銷售';
$lang['als_staff']     = '工作人員';
$lang['als_tasks']     = '任務';
$lang['als_kb']        = '知識庫';

$lang['als_media']                 = '檔案';
$lang['als_reports']               = '報告';
$lang['als_reports_sales_submenu'] = '銷售';
$lang['als_reports_leads_submenu'] = '機會';
$lang['als_kb_articles_submenu']   = '知識庫文章';
$lang['als_utilities']             = '工具';
$lang['als_announcements_submenu'] = '通告';
$lang['als_calendar_submenu']      = '日曆';
$lang['als_activity_log_submenu']  = '活動日誌';

# Admin Customizer Sidebar
$lang['acs_ticket_priority_submenu']           = '工單優先';
$lang['acs_ticket_statuses_submenu']           = '工單的狀態';
$lang['acs_ticket_predefined_replies_submenu'] = '預設回覆';
$lang['acs_ticket_services_submenu']           = '服務';
$lang['acs_departments']                       = '部門';
$lang['acs_leads']                             = '機會';
$lang['acs_leads_sources_submenu']             = '來源';
$lang['acs_leads_statuses_submenu']            = '狀態';
$lang['acs_sales_taxes_submenu']               = '稅額';
$lang['acs_sales_currencies_submenu']          = '貨幣';
$lang['acs_sales_payment_modes_submenu']       = '支付方式';
$lang['acs_email_templates']                   = '郵件模板';
$lang['acs_roles']                             = '角色';
$lang['acs_settings']                          = '設定';

# Tickets
$lang['new_ticket']                                          = '開啟新的工單';
$lang['tickets']                                             = '工單';
$lang['ticket']                                              = '工單';
$lang['ticket_lowercase']                                    = '工單';
$lang['support_tickets']                                     = '工單';
$lang['support_ticket']                                      = '工單';
$lang['ticket_settings_to']                                  = '到';
$lang['ticket_settings_email']                               = '郵件地址';
$lang['ticket_settings_departments']                         = '部門';
$lang['ticket_settings_service']                             = '服務';
$lang['ticket_settings_priority']                            = '優先順序';
$lang['ticket_settings_subject']                             = '項目';
$lang['ticket_settings_assign_to']                           = '分配工單（預設為分配給當前使用者）';
$lang['ticket_add_body']                                     = '工單內容';
$lang['ticket_add_attachments']                              = '附件';
$lang['ticket_no_reply_yet']                                 = '還沒有回覆';
$lang['new_ticket_added_successfully']                       = '工單 #%s 新增成功';
$lang['replied_to_ticket_successfully']                      = '工單 #%s 回覆成功';
$lang['ticket_settings_updated_successfully']                = '工單設定更新成功';
$lang['ticket_settings_updated_successfully_and_reassigned'] = '工單設定成功更新 - 分配給部門 %s';
$lang['ticket_dt_subject']                                   = '項目';
$lang['ticket_dt_department']                                = '部門';
$lang['ticket_dt_service']                                   = '服務';
$lang['ticket_dt_submitter']                                 = '客戶';
$lang['ticket_dt_status']                                    = '狀態';
$lang['ticket_dt_priority']                                  = '優先順序';
$lang['ticket_dt_last_reply']                                = '最後回覆';

$lang['ticket_single_add_reply']                  = '增加回覆';
$lang['ticket_single_add_note']                   = '新增備註';
$lang['ticket_single_other_user_tickets']         = '其他的工單';
$lang['ticket_single_settings']                   = '設定';
$lang['ticket_single_priority']                   = '優先順序：%';
$lang['ticket_single_last_reply']                 = '最後回答：%';
$lang['ticket_single_ticket_note_by']             = '工單被 %s 備註';
$lang['ticket_single_note_added']                 = '注：%';
$lang['ticket_single_change_status']              = '改變工單狀態';
$lang['ticket_single_assign_to_me_on_update']     = '自動把工單分配給我';
$lang['ticket_single_insert_predefined_reply']    = '插入預設定的回覆';
$lang['ticket_single_insert_knowledge_base_link'] = '插入知識庫連結';
$lang['ticket_single_attachments']                = '附件';
$lang['ticket_single_add_response']               = '新增的回覆';
$lang['ticket_single_note_heading']               = '備註';
$lang['ticket_single_add_note']                   = '新增備註';
$lang['ticket_settings_none_assigned']            = '沒有';
$lang['ticket_status_changed_successfully']       = '工單狀態已改變';
$lang['ticket_status_changed_fail']               = '更改狀態發生錯誤';

$lang['ticket_staff_string']                = '員工';
$lang['ticket_client_string']               = '客戶';
$lang['ticket_posted']                      = '傳送人：%';
$lang['ticket_access_by_department_denied'] = '你沒有權訪問此工單，該工單屬於其他部門';

# Staff
$lang['new_staff']                       = '新加入的成員';
$lang['staff_members']                   = '工作人員';
$lang['staff_member']                    = '工作人員';
$lang['staff_member_lowercase']          = '工作人員';
$lang['staff_profile_updated']           = '你的個人資料已經更新';
$lang['staff_old_password_incorrect']    = '您的舊密碼不正確';
$lang['staff_password_changed']          = '您的密碼已更改';
$lang['staff_problem_changing_password'] = '更改有誤的密碼';
$lang['staff_profile_string']            = '個人檔案';

$lang['staff_cant_remove_main_admin']          = '無法刪除主管理員';
$lang['staff_cant_remove_yourself_from_admin'] = '你不能刪除自己的管理員角色';

$lang['staff_dt_name']       = '全稱';
$lang['staff_dt_email']      = '電子郵件';
$lang['staff_dt_last_Login'] = '最後登入';
$lang['staff_dt_active']     = '有效';

$lang['staff_add_edit_firstname']             = '姓';
$lang['staff_add_edit_lastname']              = '名字';
$lang['staff_add_edit_email']                 = '電子郵件';
$lang['staff_add_edit_phonenumber']           = '電話';
$lang['staff_add_edit_facebook']              = 'Facebook賬號';
$lang['staff_add_edit_linkedin']              = 'Linkedin賬號';
$lang['staff_add_edit_skype']                 = 'Skype賬號';
$lang['staff_add_edit_departments']           = '部門';
$lang['staff_add_edit_role']                  = '角色';
$lang['staff_add_edit_permissions']           = '許可權';
$lang['staff_add_edit_administrator']         = '管理員';
$lang['staff_add_edit_password']              = '密碼';
$lang['staff_add_edit_password_note']         = '注：如果您輸入此欄位，該成員將更改密碼';
$lang['staff_add_edit_password_last_changed'] = '上次更改密碼';
$lang['staff_add_edit_notes']                 = '備註';
$lang['staff_add_edit_note_description']      = '備註說明';

$lang['staff_notes_table_description_heading'] = '備註';
$lang['staff_notes_table_addedfrom_heading']   = '新增';
$lang['staff_notes_table_dateadded_heading']   = '新增日期';

$lang['staff_admin_profile']         = '這是管理配置檔案';
$lang['staff_profile_notifications'] = '通知';
$lang['staff_profile_departments']   = '部門';

$lang['staff_edit_profile_image']                      = '輪廓圖片';
$lang['staff_edit_profile_your_departments']           = '你的部門';
$lang['staff_edit_profile_change_your_password']       = '更改您的密碼';
$lang['staff_edit_profile_change_old_password']        = '舊密碼';
$lang['staff_edit_profile_change_new_password']        = '新密碼';
$lang['staff_edit_profile_change_repeat_new_password'] = '重複新密碼';

# Staff Tasks
$lang['new_task']       = '新的任務';
$lang['tasks']          = '任務';
$lang['task']           = '任務';
$lang['task_lowercase'] = '任務';
$lang['comment_string'] = '評論';

$lang['task_marked_as_complete'] = '任務標記為完成';
$lang['task_follower_removed']   = '任務追隨者刪除是否成功';
$lang['task_assignee_removed']   = '任務受讓人刪除是否成功';

$lang['task_no_assignees'] = '這個任務沒有受託人';
$lang['task_no_followers'] = '這項任務沒有追隨者';

$lang['task_list_all']            = '所有';
$lang['task_list_not_assigned']   = '不分配';
$lang['task_list_duedate_passed'] = '到期日期已過';
$lang['tasks_dt_name']            = '名稱';

$lang['task_single_priority']               = '優先順序';
$lang['task_single_start_date']             = '開始日期';
$lang['task_single_due_date']               = '到期日期';
$lang['task_single_finished']               = '完成了';
$lang['task_single_mark_as_complete']       = '標記為完成';
$lang['task_single_edit']                   = '編輯';
$lang['task_single_delete']                 = '刪除';
$lang['task_single_assignees']              = '受讓人';
$lang['task_single_assignees_select_title'] = '分配任務';
$lang['task_single_followers']              = '追隨者';
$lang['task_single_followers_select_title'] = '新增的追隨者';
$lang['task_single_add_new_comment']        = '新增評論';

$lang['task_add_edit_subject']     = '主題';
$lang['task_add_edit_priority']    = '優先順序';
$lang['task_priority_low']         = '低';
$lang['task_priority_medium']      = '中';
$lang['task_priority_high']        = '高';
$lang['task_priority_urgent']      = '緊急';
$lang['task_add_edit_start_date']  = '開始日期';
$lang['task_add_edit_due_date']    = '到期日期';
$lang['task_add_edit_description'] = '任務說明';

# Taxes
$lang['new_tax']       = '新稅';
$lang['taxes']         = '稅';
$lang['tax']           = '稅';
$lang['tax_lowercase'] = '稅';
$lang['tax_dt_name']   = '稅收的名字';
$lang['tax_dt_rate']   = '比例（百分比）';

$lang['tax_add_edit_name'] = '稅收的名字';
$lang['tax_add_edit_rate'] = '稅率（百分比）';
$lang['tax_edit_title']    = '編輯稅種';
$lang['tax_add_title']     = '新增新的稅種';

# Ticket Statuses
$lang['new_ticket_status']       = '新的工單狀態';
$lang['ticket_statuses']         = '工單的狀態';
$lang['ticket_status']           = '工單狀態';
$lang['ticket_status_lowercase'] = '工單狀態';

$lang['ticket_statuses_dt_name']      = '工單狀態';
$lang['no_ticket_statuses_found']     = '沒有發現工單狀態';
$lang['ticket_statuses_table_total']  = '總 %s';
$lang['ticket_status_add_edit_name']  = '工單狀態名稱';
$lang['ticket_status_add_edit_color'] = '選擇顏色';
$lang['ticket_status_add_edit_order'] = '狀態的順序';

# Todos
$lang['new_todo']                  = '新的待辦事項';
$lang['my_todos']                  = '我的所有事項';
$lang['todo']                      = '待辦事項';
$lang['todo_lowercase']            = '待辦事項';
$lang['todo_status_changed']       = '待辦事項狀態已改變';
$lang['todo_add_title']            = '新增新的待辦事項';
$lang['add_new_todo_description']  = '描述';
$lang['no_finished_todos_found']   = '沒有已完成的待辦事項';
$lang['no_unfinished_todos_found'] = '沒有待辦事項';
$lang['unfinished_todos_title']    = '未完成的待辦事項';
$lang['finished_todos_title']      = '最新完成的待辦事項';

# Utilities
$lang['utility_activity_log']                        = '活動日誌';
$lang['utility_activity_log_filter_by_date']         = '按日期篩選';
$lang['utility_activity_log_dt_description']         = '描述';
$lang['utility_activity_log_dt_date']                = '日期';
$lang['utility_activity_log_dt_staff']               = '工作人員';
$lang['utility_calendar_new_event_title']            = '新增新事件';
$lang['utility_calendar_new_event_start_date']       = '開始日期';
$lang['utility_calendar_new_event_end_date']         = '結束日期';
$lang['utility_calendar_new_event_make_public']      = '公佈';
$lang['utility_calendar_event_added_successfully']   = '新的事件新增成功';
$lang['utility_calendar_event_deleted_successfully'] = '成功刪除';
$lang['utility_calendar_new_event_placeholder']      = '活動名稱';


# Navigation
$lang['nav_notifications']          = '通知';
$lang['nav_my_profile']             = '我的個人資料';
$lang['nav_edit_profile']           = '編輯個人資料';
$lang['nav_logout']                 = '登出';
$lang['nav_no_notifications']       = '沒有新通知';
$lang['nav_view_all_notifications'] = '檢視所有通知';
$lang['nav_notifications_tooltip']  = '檢視通知';

# Footer
$lang['clients_copyright'] = '%s 版權所有';

# Contracts
$lang['clients_contracts']               = '合約';
$lang['clients_contracts_dt_subject']    = '主題';
$lang['clients_contracts_dt_start_date'] = '開始日期';
$lang['clients_contracts_dt_end_date']   = '結束日期';

# Home
$lang['clients_quick_invoice_info']           = '發票概述';
$lang['clients_home_currency_select_tooltip'] = '你需要選擇幣種因為你有發票使用不同的幣種';
# Invoices
$lang['clients_invoice_html_btn_download'] = '下載';

$lang['clients_my_invoices']        = '我的發票';
$lang['clients_invoice_dt_number']  = '發票號 #';
$lang['clients_invoice_dt_date']    = '日期';
$lang['clients_invoice_dt_duedate'] = '截止日期';
$lang['clients_invoice_dt_amount']  = '金額';
$lang['clients_invoice_dt_status']  = '狀態';

# Profile
$lang['clients_profile_heading'] = '配置檔案';

# Used for edit profile and register START
$lang['clients_firstname'] = '姓';
$lang['clients_lastname']  = '名';
$lang['clients_email']     = '郵件地址';
$lang['clients_company']   = '公司';
$lang['clients_vat']       = '增值稅稅號;';
$lang['clients_phone']     = '電話';
$lang['clients_country']   = '國家';
$lang['clients_city']      = '城市';
$lang['clients_address']   = '地址';
$lang['clients_zip']       = '郵政編碼';
$lang['clients_state']     = '狀態';

# Used for edit profile and register END

$lang['clients_register_password']        = '密碼';
$lang['clients_register_password_repeat'] = '在輸入一次';
$lang['clients_edit_profile_update_btn']  = '更新';

$lang['clients_edit_profile_change_password_heading'] = '修改密碼';
$lang['clients_edit_profile_old_password']            = '原密碼';
$lang['clients_edit_profile_new_password']            = '新密碼';
$lang['clients_edit_profile_new_password_repeat']     = '重複密碼';
$lang['clients_edit_profile_change_password_btn']     = '修改密碼;';
$lang['clients_profile_last_changed_password']        = '密碼最後一次被 %s 修改';

# Knowledge base
$lang['clients_knowledge_base']                    = '知識庫';
$lang['clients_knowledge_base_articles_not_found'] = '沒有發現相關文章';
$lang['clients_knowledge_base_find_useful']        = '你覺得這篇文章對你有幫助嗎？';
$lang['clients_knowledge_base_find_useful_yes']    = '有';
$lang['clients_knowledge_base_find_useful_no']     = '沒有';
$lang['clients_article_only_1_vote_today']         = '你可以在24小時內投票';
$lang['clients_article_voted_thanks_for_feedback'] = '謝謝你的反饋';

# Tickets
$lang['clients_ticket_open_subject']               = '新建工單';
$lang['clients_ticket_open_departments']           = '部門';
$lang['clients_tickets_heading']                   = '工單';
$lang['clients_ticket_open_service']               = '服務';
$lang['clients_ticket_open_priority']              = '優先順序';
$lang['clients_ticket_open_body']                  = '工單內容';
$lang['clients_ticket_attachments']                = '附件';
$lang['clients_single_ticket_string']              = '工單';
$lang['clients_single_ticket_replied']             = '回覆人: %s';
$lang['clients_single_ticket_information_heading'] = '工單資訊';

$lang['clients_tickets_dt_number']     = '工單 #';
$lang['clients_tickets_dt_subject']    = '主題';
$lang['clients_tickets_dt_department'] = '部門';
$lang['clients_tickets_dt_service']    = '服務';
$lang['clients_tickets_dt_status']     = '狀態';
$lang['clients_tickets_dt_last_reply'] = '最後的回答';

$lang['clients_ticket_single_department']        = '部門: %s';
$lang['clients_ticket_single_submitted']         = '提交: %s';
$lang['clients_ticket_single_status']            = '狀態:';
$lang['clients_ticket_single_priority']          = '優先: %s';
$lang['clients_ticket_single_add_reply_btn']     = '增加回覆';
$lang['clients_ticket_single_add_reply_heading'] = '增加回覆此工單';

# Login
$lang['clients_login_heading_no_register'] = '請登入';
$lang['clients_login_heading_register']    = '請登入或註冊';
$lang['clients_login_email']               = '電子郵件地址';
$lang['clients_login_password']            = '密碼';
$lang['clients_login_remember']            = '記住我';
$lang['clients_login_login_string']        = '進入';

# Register
$lang['clients_register_string']  = '註冊';
$lang['clients_register_heading'] = '註冊';

# Navigation
$lang['clients_nav_login']     = '進入';
$lang['clients_nav_register']  = '註冊';
$lang['clients_nav_invoices']  = '發票';
$lang['clients_nav_contracts'] = '合約';
$lang['clients_nav_kb']        = '知識庫';
$lang['clients_nav_profile']   = '配置檔案';
$lang['clients_nav_logout']    = '登出';
# Version 1.0.1
# Admin
#
# Payments
$lang['payment_receipt']                               = '付款收據';
$lang['payment_for_string']                            = '付款';
$lang['payment_date']                                  = '付款日期:';
$lang['payment_view_mode']                             = '支付方式:';
$lang['payment_total_amount']                          = '總計';
$lang['payment_table_invoice_number']                  = '發票號碼';
$lang['payment_table_invoice_date']                    = '發票日期;';
$lang['payment_table_invoice_amount_total']            = '發票金額;';
$lang['payment_table_payment_amount_total']            = '付款金額';
$lang['payments_table_transaction_id']                 = '事務ID: %s';
$lang['payment_getaway_token_not_found']               = '令牌未找到';
$lang['online_payment_recorded_success']               = '成功付款記錄';
$lang['online_payment_recorded_success_fail_database'] = '支付成功，但未能插入支付資料庫，聯絡管理員';

# Leads
$lang['lead_convert_to_client']                = '轉換到客戶';
$lang['lead_convert_to_email']                 = '電子郵件';
$lang['lead_convert_to_client_firstname']      = '姓';
$lang['lead_convert_to_client_lastname']       = '名';
$lang['lead_email_already_exists']             = '電子郵件已經存在於客戶資料';
$lang['lead_to_client_base_converted_success'] = '鉛轉化為客戶成功';
$lang['lead_have_client_profile']              = '已轉化為客戶.';
$lang['lead_converted_edit_client_profile']    = '編輯配置檔案';

# Invoices
$lang['view_invoice_as_customer_tooltip']                                     = '檢視發票為客戶';
$lang['invoice_add_edit_recurring']                                           = '反覆出現的發票？';
$lang['invoice_add_edit_recurring_no']                                        = '不';
$lang['invoice_add_edit_recurring_month']                                     = '每個月';
$lang['invoice_add_edit_recurring_months']                                    = '每個月';
$lang['invoices_list_all']                                                    = '所有';
$lang['invoices_list_not_have_payment']                                       = '沒有付款記錄的發票';
$lang['invoices_list_recurring']                                              = '經常性發票';
$lang['invoices_list_made_payment_by']                                        = '付款的 %s';
$lang['invoices_create_invoice_from_recurring_only_on_paid_invoices']         = '建立一個從主要週期性發票的新發票僅是付費狀態';
$lang['invoices_create_invoice_from_recurring_only_on_paid_invoices_tooltip'] = '建立僅在主發票與支付的地位主要重複發票新發票？如果該欄位設定為否，反覆出現的發票不符合身份支付新的發票不會被建立';
$lang['view_invoice_pdf_link_pay']                                            = '支付發票';

# Payment modes
$lang['payment_mode_add_edit_description']         = '銀行賬戶/說明';
$lang['payment_mode_add_edit_description_tooltip'] = '你可以在這裡設定銀行賬戶資訊。將HTML發票';
$lang['payment_modes_dt_description']              = '銀行賬戶/說明';
$lang['payment_modes_add_edit_announcement']       = '注：下面列出的付款方式是離線模式。線上支付模式可以配置在設定-> 支付介面';
$lang['payment_mode_add_edit_active']              = '有效';
$lang['payment_modes_dt_active']                   = '有效';

# Contracts
$lang['contract_not_found'] = '合約未找到。可能被刪除,檢查活動日誌';

# Settings
$lang['setting_bar_heading']                 = '設定';
$lang['settings_group_online_payment_modes'] = '支付模組';
$lang['settings_paymentmethod_mode_label']   = '符號';
$lang['settings_paymentmethod_active']       = '有效';
$lang['settings_paymentmethod_currencies']   = '逗號分隔貨幣';
$lang['settings_paymentmethod_testing_mode'] = '啟用測試模式';

$lang['settings_paymentmethod_paypal_username']  = '貝寶API使用者名稱';
$lang['settings_paymentmethod_paypal_password']  = '貝寶API密碼';
$lang['settings_paymentmethod_paypal_signature'] = 'API簽名';

$lang['settings_paymentmethod_stripe_api_secret_key']      = '條紋的API金鑰';
$lang['settings_paymentmethod_stripe_api_publishable_key'] = '條發布的關鍵';
$lang['settings_limit_top_search_bar_results']             = '限制高階搜尋欄的結果';

## Clients
$lang['client_phonenumber'] = '電話';

# Main Clients
$lang['clients_register']                          = '登記';
$lang['clients_profile_updated']                   = '您的配置檔案已更新';
$lang['clients_successfully_registered']           = '感謝您的註冊';
$lang['clients_account_created_but_not_logged_in'] = '您的帳戶已建立,但您沒有自動登入到我們的系統中.請嘗試登入';
# Tickets
$lang['clients_tickets_heading'] = '支援工單';

# Payments
// Uses on stripe page
$lang['payment_for_invoice'] = '付款發票';
$lang['payment_total']       = '總數: %s';

# Invoice
$lang['invoice_html_online_payment']             = '線上支付';
$lang['invoice_html_online_payment_button_text'] = '現在付款';
$lang['invoice_html_payment_modes_not_selected'] = '請選擇付款方式';
$lang['invoice_html_amount_blank']               = '總金額不能為空或零';
$lang['invoice_html_offline_payment']            = '線下支付';
$lang['invoice_html_amount']                     = '金額';


# Version 1.0.2
# Admin
#
# DataTables
$lang['dt_button_column_visibility'] = '顯示方式';
$lang['dt_button_reload']            = '重置';
$lang['dt_button_excel']             = 'Excel';
$lang['dt_button_csv']               = 'CSV';
$lang['dt_button_pdf']               = 'PDF';
$lang['dt_button_print']             = '列印';
$lang['is_not_active_export']        = 'No';
$lang['is_active_export']            = 'Yes';

# Invoice
$lang['invoice_add_edit_advanced_options']                = '高階選項';
$lang['invoice_add_edit_allowed_payment_modes']           = '此發票的付款方式';
$lang['invoice_add_edit_recurring_invoices_from_invoice'] = '這張發票是常用發票';
$lang['invoice_add_edit_no_payment_modes_found']          = '沒有發現付款方式.';
$lang['invoice_html_total_pay']                           = '總數: %s';

# Email templates
$lang['email_templates_table_heading_name'] = '模板名稱';
# General
$lang['discount_type']            = '折扣類型';
$lang['discount_type_after_tax']  = '稅後';
$lang['discount_type_before_tax'] = '稅前';
$lang['terms_and_conditions']     = '條款及條件';
$lang['reference_no']             = '參考 #';
$lang['no_discount']              = '無折扣';
$lang['view_stats_tooltip']       = '檢視快速統計';
# Clients
$lang['zip_from_date']            = '開始日期:';
$lang['zip_to_date']              = '結束日期:';
$lang['client_zip_payments']      = 'ZIP 付款';
$lang['client_zip_invoices']      = 'ZIP 發票';
$lang['client_zip_estimates']     = 'ZIP 報價';
$lang['client_zip_status']        = '現狀';
$lang['client_zip_status_all']    = '所有';
$lang['client_zip_payment_modes'] = '付款';
$lang['client_zip_no_data_found'] = '沒有發現 %s 發現';

# Payments
$lang['payment_mode']         = '支付方式';
$lang['payment_view_heading'] = '付款';

# Settings
$lang['settings_allow_payment_amount_to_be_modified']               = '允許客戶修改支付金額(用於線上支付)';
$lang['settings_delete_only_on_last_invoice']                       = '只允許刪除最後一張發票';
$lang['settings_sales_estimate_prefix']                             = '報價數的字首';
$lang['settings_sales_next_estimate_number']                        = '下一個報價數';
$lang['settings_sales_next_estimate_number_tooltip']                = '如果你想開始從開始此欄位設定為1';
$lang['settings_sales_decrement_estimate_number_on_delete']         = '我們刪除減縮報價數';
$lang['settings_sales_decrement_estimate_number_on_delete_tooltip'] = '你想在刪除最後一個報價數時減少報價數嗎？如果設定此選項是在報價刪除下一個報價數是15下報價數將減少到14下報價如果設定為NO的數量將保持15';
$lang['settings_sales_estimate_number_format']                      = '報價的數字格式';
$lang['settings_sales_estimate_number_format_year_based']           = '去年的基礎';
$lang['settings_sales_estimate_number_format_number_based']         = '基於數字(000001)';
$lang['settings_delete_only_on_last_estimate']                      = '刪除報價只允許在最後一張發票';
$lang['settings_send_test_email_heading']                           = '傳送測試電子郵件';
$lang['settings_send_test_email_subheading']                        = '傳送測試電子郵件確認您的SMTP設定正確設定.';
$lang['settings_send_test_email_string']                            = '電子郵件地址';
$lang['settings_smtp_settings_heading']                             = 'SMTP 設定';
$lang['settings_smtp_settings_subheading']                          = '設定的主要電子郵件';
$lang['settings_sales_heading_general']                             = '基礎設定';
$lang['settings_sales_heading_invoice']                             = '發票';
$lang['settings_sales_heading_estimates']                           = '報價';
$lang['settings_sales_cron_invoice_heading']                        = '';

# Tasks
$lang['tasks_dt_datestart'] = '開始日期';

# Invoice General
$lang['invoice_discount'] = '優惠';

# Settings
$lang['settings_rtl_support_admin']                                   = '管理介面邊側欄靠右';
$lang['settings_rtl_support_client']                                  = '客戶介面邊側欄靠右';
$lang['settings_estimate_auto_convert_to_invoice_on_client_accept']   = '報價客戶同意之後自動轉換髮票';
$lang['settings_exclude_estimate_from_client_area_with_draft_status'] = '排除客戶區的狀態報價';

# Months
$lang['January']   = '一月';
$lang['February']  = '二月';
$lang['March']     = '三月';
$lang['April']     = '四月';
$lang['May']       = '五月';
$lang['June']      = '六月';
$lang['July']      = '七月';
$lang['August']    = '八月';
$lang['September'] = '九月';
$lang['October']   = '十月';
$lang['November']  = '十一月';
$lang['December']  = '十二月';

# Time ago function translate
$lang['time_ago_just_now']  = '就剛剛';
$lang['time_ago_minute']    = '一分鐘前';
$lang['time_ago_minutes']   = '%s 分鐘前';
$lang['time_ago_hour']      = '一小時前';
$lang['time_ago_hours']     = '%s 小時前';
$lang['time_ago_yesterday'] = '昨天';
$lang['time_ago_days']      = '%s 天前';
$lang['time_ago_week']      = '一個星期前';
$lang['time_ago_weeks']     = '%s 星期前';
$lang['time_ago_month']     = '一個月前';
$lang['time_ago_months']    = '%s 月前';
$lang['time_ago_year']      = '一年前';
$lang['time_ago_years']     = '%s 年前';


# Estimates
$lang['estimates']                          = '報價';
$lang['estimate']                           = '報價';
$lang['estimate_lowercase']                 = '報價';
$lang['create_new_estimate']                = '創造新的報價';
$lang['view_estimate']                      = '檢視報價';
$lang['estimate_sent_to_client_success']    = '報價傳送成功的客戶';
$lang['estimate_sent_to_client_fail']       = '在傳送報價時的問題';
$lang['estimate_view']                      = '報價細節';
$lang['estimate_select_customer']           = '客戶';
$lang['estimate_add_edit_number']           = '報價數';
$lang['estimate_add_edit_date']             = '報價日期';
$lang['estimate_add_edit_expirydate']       = '到期日';
$lang['estimate_add_edit_currency']         = '貨幣';
$lang['estimate_add_edit_client_note']      = '客戶報告';
$lang['estimate_add_edit_admin_note']       = '請注意';
$lang['estimates_toggle_table_tooltip']     = '檢視完整表格';
$lang['estimate_add_edit_advanced_options'] = '高階選項';
$lang['estimate_to']                        = 'To';
$lang['estimates_list_all']                 = 'All';

$lang['estimate_invoiced_date']                  = '報價發票在 %s';
$lang['edit_estimate_tooltip']                   = '編輯報價';
$lang['delete_estimate_tooltip']                 = '刪除的報價';
$lang['estimate_sent_to_email_tooltip']          = '傳送電子郵件';
$lang['estimate_already_send_to_client_tooltip'] = '此報價已傳送至客戶 %s';
$lang['estimate_view_activity_tooltip']          = '活動日誌';

$lang['estimate_send_to_client_modal_heading']    = '向客戶傳送此報價';
$lang['estimate_send_to_client_attach_pdf']       = '檢查報價 PDF';
$lang['estimate_send_to_client_preview_template'] = '預覽電子郵件模板';

$lang['estimate_dt_table_heading_number']     = '報價 #';
$lang['estimate_dt_table_heading_date']       = '日期';
$lang['estimate_dt_table_heading_client']     = '客戶';
$lang['estimate_dt_table_heading_expirydate'] = '客戶';
$lang['estimate_dt_table_heading_amount']     = '金額';
$lang['estimate_dt_table_heading_status']     = '現狀';

$lang['estimate_convert_to_invoice'] = '轉化為發票';

# Clients
$lang['client_payments_tab'] = '付款';
# Estimate General
$lang['estimate_pdf_heading']            = '報價';
$lang['estimate_table_item_heading']     = '項目';
$lang['estimate_table_quantity_heading'] = '數量';
$lang['estimate_table_rate_heading']     = '金額';
$lang['estimate_table_tax_heading']      = '稅額';
$lang['estimate_table_amount_heading']   = '金額';
$lang['estimate_subtotal']               = '小計';
$lang['estimate_adjustment']             = '調整';
$lang['estimate_discount']               = '折扣';
$lang['estimate_total']                  = '總';
$lang['estimate_to']                     = '總';
$lang['estimate_data_date']              = '報價日期';
$lang['estimate_data_expiry_date']       = '到期日';
$lang['estimate_note']                   = '注:';
$lang['estimate_status_draft']           = '草案';
$lang['estimate_status_sent']            = '傳送';
$lang['estimate_status_declined']        = '拒絕';
$lang['estimate_status_accepted']        = '接受';
$lang['estimate_status_expired']         = '過期';
$lang['estimate_note']                   = '備註:';

## Clients
$lang['clients_estimate_dt_number']             = '報價 #';
$lang['clients_estimate_dt_date']               = '日期';
$lang['clients_estimate_dt_duedate']            = '報價日期';
$lang['clients_estimate_dt_amount']             = '金額';
$lang['clients_estimate_dt_status']             = '現狀';
$lang['clients_nav_estimates']                  = '報價';
$lang['clients_decline_estimate']               = '拒絕';
$lang['clients_accept_estimate']                = '接受';
$lang['clients_my_estimates']                   = '報價';
$lang['clients_estimate_invoiced_successfully'] = '接受報價. 這是報價的發票';
$lang['clients_estimate_accepted_not_invoiced'] = '謝謝你接受這個報價';
$lang['clients_estimate_declined']              = '被拒的報價.在到期日之前，你可以接受任何時間的報價';
$lang['clients_estimate_failed_action']         = '對這一報價未能回覆';
$lang['client_add_edit_profile']                = '簡介';

# Version 1.0.3

# Custom Fields
$lang['custom_field']                          = '自定義欄位';
$lang['custom_field_lowercase']                = '自定義欄位';
$lang['custom_fields']                         = '自定義欄位';
$lang['new_custom_field']                      = '新的自定義欄位';
$lang['custom_field_name']                     = '欄位名稱';
$lang['custom_field_add_edit_type']            = '型';
$lang['custom_field_add_edit_belongs_top']     = '所屬領域';
$lang['custom_field_add_edit_options']         = '選項';
$lang['custom_field_add_edit_options_tooltip'] = '僅用於選擇類型. 通過分離用逗號選項填充欄位. 如蘋果、橘子、香蕉';
$lang['custom_field_add_edit_order']           = '秩序';

$lang['custom_field_dt_field_to']       = '屬於';
$lang['custom_field_dt_field_name']     = '名稱';
$lang['custom_field_dt_field_type']     = '型';
$lang['custom_field_add_edit_active']   = '有效';
$lang['custom_field_add_edit_disabled'] = '沒有資格';

# Ticket replies
$lang['ticket_reply'] = '工單的回覆';

# Admin Customizer Sidebar
$lang['asc_custom_fields'] = '自定義欄位';

# Contracts
$lang['contract_types']          = '合約類型';
$lang['contract_type']           = '合約類型';
$lang['new_contract_type']       = '新合約類型';
$lang['contract_type_lowercase'] = '合約';
$lang['contract_type_name']      = '名稱';

$lang['contract_types_list_name'] = '合約類型';

# Customizer Menu
$lang['acs_contracts']      = '合約';
$lang['acs_contract_types'] = '合約類型';

# Version 1.0.4
# Invoice Items
$lang['invoice_item_long_description'] = '較長的描述';
# Customers
$lang['clients_list_phone']                = '電話';
$lang['client_expenses_tab']               = '報價';
$lang['customers_summary']                 = '客戶狀態';
$lang['customers_summary_active']          = '有效';
$lang['customers_summary_inactive']        = '無效';
$lang['customers_summary_logged_in_today'] = '今天的記錄';

# Authentication
$lang['admin_auth_forgot_password_email']     = '電子郵件地址';
$lang['admin_auth_forgot_password_heading']   = '忘記密碼';
$lang['admin_auth_login_heading']             = '登入';
$lang['admin_auth_login_email']               = '電子郵件地址';
$lang['admin_auth_login_password']            = '密碼';
$lang['admin_auth_login_remember_me']         = '記住我';
$lang['admin_auth_login_button']              = '登入';
$lang['admin_auth_login_fp']                  = '忘記密碼?';
$lang['admin_auth_reset_password_heading']    = '重置密碼';
$lang['admin_auth_reset_password']            = '密碼';
$lang['admin_auth_reset_password_repeat']     = '重複密碼';
$lang['admin_auth_invalid_email_or_password'] = '無效的電子郵件或密碼';
$lang['admin_auth_inactive_account']          = '無效帳戶';
# Calender
$lang['calendar_estimate']          = '報價';
$lang['calendar_invoice']           = '發票';
$lang['calendar_contract']          = '合約';
$lang['calendar_customer_reminder'] = '客戶的提醒';
$lang['calendar_event']             = '事件';
$lang['calendar_task']              = '任務';
# Leads
$lang['lead_edit_delete_tooltip'] = '刪除導致';
$lang['lead_attachments']         = '附件';
# Admin Customizer Sidebar
$lang['acs_finance'] = '財務';
# Settings
$lang['settings_show_sale_agent_on_invoices']       = '在發票上顯示銷售代理';
$lang['settings_show_sale_agent_on_estimates']      = '顯示銷售代理';
$lang['settings_predefined_predefined_term']        = '預定義的條款和條件';
$lang['settings_predefined_clientnote']             = '預定客戶的注意';
$lang['settings_custom_pdf_logo_image_url']         = '自定義 PDF 公司 Logo URL';
$lang['settings_custom_pdf_logo_image_url_tooltip'] = '你可能會有問題，PNG圖片透明處理的方式不同，這取決於PHP或PHP GD版本使用imagick。嘗試更新PHP imagick禁用PHP GD
。如果你離開這個領域的空白的上傳標誌將被使用.';

# General
$lang['sale_agent_string']               = '銷售代理';
$lang['amount_display_in_base_currency'] = '在您的基礎貨幣中顯示的金額';

# Leads
$lang['leads_summary'] = '總結線索';

# Contracts
$lang['contract_value']                       = '合約價值';
$lang['contract_trash']                       = '垃圾箱';
$lang['contracts_view_trash']                 = '檢視垃圾箱';
$lang['contracts_view_all']                   = '所有';
$lang['contracts_view_exclude_trashed']       = '排除的合約';
$lang['contract_value_tooltip']               = '新增合約. The value will be shown in your base currency.';
$lang['contract_trash_tooltip']               = '當你將所有的合約都列出來時,如果你把合約加在垃圾桶裡，不會顯示在客戶，不會被包含在圖表中，其他的資料也不會被顯示.';
$lang['contract_renew_heading']               = '續訂合約';
$lang['contract_summary_heading']             = '合約概況';
$lang['contract_summary_expired']             = '過期';
$lang['contract_summary_active']              = '有效';
$lang['contract_summary_about_to_expire']     = '即將到期';
$lang['contract_summary_recently_added']      = '最近新增';
$lang['contract_summary_trash']               = '垃圾箱';
$lang['contract_summary_by_type']             = '合約的類型';
$lang['contract_summary_by_type_value']       = '合約價值';
$lang['contract_renewed_successfully']        = '續約成功';
$lang['contract_renewed_fail']                = '同時更新合約的問題。聯絡管理員';
$lang['no_contract_renewals_found']           = '沒有發現本合約的續約';
$lang['no_contract_renewals_history_heading'] = '合約更新歷史';
$lang['contract_renewed_by']                  = '%s 新的合約';
$lang['contract_renewal_deleted']             = '成功刪除更新';
$lang['contract_renewal_delete_fail']         = '刪除合約更新失敗。聯絡管理員';
$lang['contract_renewal_new_value']           = '新合約價格: %s';
$lang['contract_renewal_old_value']           = '老合約價格: %s';
$lang['contract_renewal_new_start_date']      = '新的開始日期: %s';
$lang['contract_renewal_old_start_date']      = '老合約開始日期是: %s';
$lang['contract_renewal_new_end_date']        = '新的結束日期: %s';
$lang['contract_renewal_old_end_date']        = '老合約結束日期: %s';
$lang['contract_attachment']                  = '附件';

# Admin Aside Menu
$lang['als_expenses']           = '費用';
$lang['als_reports_expenses']   = '費用';
$lang['als_expenses_vs_income'] = '支出與收入';

# Invoices
$lang['invoice_attach_file']           = '附件';
$lang['invoice_mark_as_sent']          = '標記為傳送';
$lang['invoice_marked_as_sent']        = '發票上註明為已傳送成功';
$lang['invoice_marked_as_sent_failed'] = '未能按發票傳送';

# Payments
$lang['payment_transaction_id'] = '事務ID';
# Settings Menu
$lang['acs_expense_categories'] = '費用類別';
# Expenses
$lang['expense_category']                             = '費用類別';
$lang['expense_category_lowercase']                   = '費用類別';
$lang['new_expense']                                  = '記錄費用';
$lang['expense_add_edit_name']                        = '類別名稱';
$lang['expense_add_edit_description']                 = '類別描述';
$lang['expense_categories']                           = '費用類別';
$lang['new_expense_category']                         = '新的類別';
$lang['dt_expense_description']                       = '描述';
$lang['expense']                                      = '花費';
$lang['expenses']                                     = '花費';
$lang['expense_lowercase']                            = '花費';
$lang['expense_add_edit_customer']                    = '客戶';
$lang['expense_add_edit_note']                        = '備註';
$lang['expense_add_edit_date']                        = '費用日期';
$lang['expense_add_edit_amount']                      = '總額';
$lang['expense_add_edit_billable']                    = '計費';
$lang['expense_add_edit_attach_receipt']              = '附收據';
$lang['expense_add_edit_reference_no']                = '參考';
$lang['expense_receipt']                              = '費用收據';
$lang['expense_receipt_lowercase']                    = '費用收據';
$lang['expense_dt_table_heading_category']            = '類別';
$lang['expense_dt_table_heading_amount']              = '金額';
$lang['expense_dt_table_heading_date']                = '日期';
$lang['expense_dt_table_heading_reference_no']        = '參考';
$lang['expense_dt_table_heading_customer']            = '客戶';
$lang['expense_dt_table_heading_payment_mode']        = '支付方式';
$lang['expense_converted_to_invoice']                 = '成功轉換費用發票';
$lang['expense_converted_to_invoice_fail']            = '沒能把這個費用發票檢查錯誤日誌';
$lang['expense_copy_success']                         = '複製成功';
$lang['expense_copy_fail']                            = '複製費用失敗。請檢查所需的欄位，然後再試一次';
$lang['expenses_list_all']                            = '全部';
$lang['expenses_list_billable']                       = '計費';
$lang['expenses_list_non_billable']                   = '非結算';
$lang['expenses_list_invoiced']                       = '開發票';
$lang['expenses_list_unbilled']                       = '未開票';
$lang['expenses_list_recurring']                      = '經常性的';
$lang['expense_invoice_delete_not_allowed']           = '您不能刪除此費用。費用已開具發票';
$lang['expense_convert_to_invoice']                   = '轉換為發票';
$lang['expense_edit']                                 = '編輯費用';
$lang['expense_delete']                               = '刪除';
$lang['expense_copy']                                 = '複製';
$lang['expense_invoice_not_created']                  = '發票沒有建立';
$lang['expense_billed']                               = '收費';
$lang['expense_not_billed']                           = '不收費';
$lang['expense_customer']                             = '客戶';
$lang['expense_note']                                 = '注：';
$lang['expense_date']                                 = '日期：';
$lang['expense_ref_noe']                              = '參考號:';
$lang['expense_amount']                               = '金額：';
$lang['expense_recurring_indicator']                  = '反覆出現的';
$lang['expense_already_invoiced']                     = '此費用已開具發票';
$lang['expense_recurring_auto_create_invoice']        = '自動建立發票';
$lang['expense_recurring_send_custom_on_renew']       = '費用重複傳送發票到客戶郵件';
$lang['expense_recurring_autocreate_invoice_tooltip'] = '如果該選項被選中，客戶將自動建立，費用將被更新';
$lang['expenses_yearly_by_categories']                = '按類別分類費用';
$lang['total_expenses_for']                           = '總費用'; // year
$lang['expenses_report_for']                          = '費用'; // year
# Custom fields
$lang['custom_field_required']    = '要求';
$lang['custom_field_show_on_pdf'] = '顯示PDF';
$lang['custom_field_leads']       = '領導';
$lang['custom_field_customers']   = '客戶';
$lang['custom_field_staff']       = '工作人員';
$lang['custom_field_contracts']   = '合約';
$lang['custom_field_tasks']       = '任務';
$lang['custom_field_expenses']    = '費用';
$lang['custom_field_invoice']     = '發票';
$lang['custom_field_estimate']    = '報價';
# Tickets
$lang['ticket_single_private_staff_notes'] = '員工的私人備註';


# Business News
$lang['business_news'] = '商業新聞';

# Navigation
$lang['nav_todo_items'] = '所有的物品';
# Clients
# Contracts
$lang['clients_contracts_type'] = '合約類型';

# Version 1.0.5
# General
$lang['no_tax']                              = '無稅';
$lang['numbers_not_formatted_while_editing'] = '在輸入欄位的速率，同時編輯/新增項目，應保持不格式化不要嘗試在這裡手動格式化';
# Contracts
$lang['contracts_view_expired']         = '過期';
$lang['contracts_view_without_dateend'] = '沒有日期的合約';

# Email Templates
$lang['email_template_contracts_fields_heading'] = '合約';
# Invoices General
$lang['invoice_estimate_general_options'] = '基礎設定';
$lang['invoice_table_item_description']   = '描述';
$lang['invoice_recurring_indicator']      = '復發';

# Estimates
$lang['estimate_convert_to_invoice_successfully'] = '報價轉換髮票是否成功';
$lang['estimate_table_item_description']          = '描述';

# Version 1.0.6
# Invoices
# Currencies
$lang['cant_delete_base_currency'] = '你不能刪除基礎貨幣。你需要刪除這個分配新的基礎貨幣。';
$lang['invoice_copy']              = '發票副本';
$lang['invoice_copy_success']      = '發票複製成功';
$lang['invoice_copy_fail']         = '未能複製發票';
$lang['invoice_due_after_help']    = '設定為零，以避免計算';

$lang['show_shipping_on_invoice'] = '在發票中顯示發貨細節';

# Estimates
$lang['show_shipping_on_estimate']         = '顯示運費細節';
$lang['is_invoiced_estimate_delete_error'] = '這是報價發票。您不能刪除報價';

# Customers & Invoices / Estimates
$lang['ship_to']                  = '運送到';
$lang['customer_profile_details'] = '客戶詳細資訊';
$lang['billing_shipping']         = '物流資訊';
$lang['billing_address']          = '帳單地址';
$lang['shipping_address']         = '送貨地址';

$lang['billing_street']  = '街道';
$lang['billing_city']    = '城市';
$lang['billing_state']   = '州';
$lang['billing_zip']     = '郵遞區號';
$lang['billing_country'] = '國家';

$lang['shipping_street']                    = '街道';
$lang['shipping_city']                      = '城市';
$lang['shipping_state']                     = '州';
$lang['shipping_zip']                       = '郵遞區號';
$lang['shipping_country']                   = '國家';
$lang['get_shipping_from_customer_profile'] = '從客戶資料中獲取運輸資訊';

# Customer
$lang['customer_default_currency']                             = '預設的貨幣';
$lang['customer_update_address_info_on_invoices']              = '更新所有的發票/報價的運費/帳單資訊';
$lang['customer_update_address_info_on_invoices_help']         = '如果您檢查此欄位的運費和帳單資訊將被更新到所有的發票和報價。注：帶有狀態的發票不會受到影響';
$lang['setup_google_api_key_customer_map']                     = '設定谷歌應用程式介面以檢視客戶地圖';
$lang['customer_attachments_file']                             = '檔案';
$lang['client_send_set_password_email']                        = '傳送設定密碼電子郵件';
$lang['customer_billing_same_as_profile']                      = '相同的客戶資訊';
$lang['customer_billing_copy']                                 = '複製地址';
$lang['customer_map']                                          = '地圖';
$lang['set_password_email_sent_to_client']                     = '電子郵件設定密碼將傳送到客戶';
$lang['set_password_email_sent_to_client_and_profile_updated'] = '資料的更新和電子郵件設定密碼將傳送到客戶';
$lang['customer_attachments']                                  = '檔案';
$lang['customer_longitude']                                    = '經度（谷歌地圖）';
$lang['customer_latitude']                                     = '緯度（谷歌地圖）';

# Authentication
$lang['admin_auth_set_password']         = '密碼';
$lang['admin_auth_set_password_repeat']  = '重複密碼';
$lang['admin_auth_set_password_heading'] = '設定密碼';
# General
$lang['apply']                         = '應用';
$lang['department_calendar_id']        = '谷歌日曆ID';
$lang['localization_default_language'] = '預設語言';
$lang['system_default_string']         = '系統預設';
$lang['advanced_options']              = '高階選項';
# Expenses
$lang['expense_list_invoice']  = '開發票';
$lang['expense_list_billed']   = '安排';
$lang['expense_list_unbilled'] = '未開票';
# Leads
$lang['lead_merge_custom_field']          = '合併作為自定義欄位';
$lang['lead_merge_custom_field_existing'] = '合併現有的資料庫欄位';
$lang['lead_dont_merge_custom_field']     = '不合並';
$lang['lost_leads']                       = '失去了線索';
$lang['junk_leads']                       = '垃圾線索';
$lang['lead_mark_as_lost']                = '標記為丟失';
$lang['lead_unmark_as_lost']              = '成為取消標記';
$lang['lead_marked_as_lost']              = '標記丟失是否成功';
$lang['lead_unmarked_as_lost']            = '標示成功地減掉了';
$lang['leads_status_color']               = '顏色';

$lang['lead_mark_as_junk']     = '標記為垃圾';
$lang['lead_unmark_as_junk']   = '標記線索為垃圾';
$lang['lead_marked_as_junk']   = '標記線索為垃圾成功';
$lang['lead_unmarked_as_junk'] = '標記線索為垃圾成功';

$lang['lead_not_found']     = '沒有發現線索';
$lang['lead_lost']          = '丟失';
$lang['lead_junk']          = '垃圾';
$lang['leads_not_assigned'] = '不分配';
# Contacts
$lang['contract_not_visible_to_client'] = '隱藏客戶';
$lang['contract_edit_overview']         = '合約概況';
$lang['contract_attachments']           = '附件';
# Tasks
$lang['task_view_make_public']     = '公開';
$lang['task_is_private']           = '私人任務';
$lang['task_finished']             = '完成了';
$lang['task_single_related']       = '相關的';
$lang['task_unmark_as_complete']   = '標記為完成';
$lang['task_unmarked_as_complete'] = '任務標記為完成';
$lang['task_relation']             = '相關的';
$lang['task_public']               = '公開';
$lang['task_public_help']          = '如果設定此任務，任務將成為所有工作人員可見。否則只有會員，跟隨者，建立者或管理員可見';
# Settings
$lang['settings_general_favicon']                                            = '網站圖示';
$lang['settings_output_client_pdfs_from_admin_area_in_client_language']      = '從管理區的客戶語言輸出端PDF文件';
$lang['settings_output_client_pdfs_from_admin_area_in_client_language_help'] = '如果該選項設定為是和前。系統將預設語言是英語和客戶機，已經安裝語言法語PDF文件將在客戶語言輸出';
$lang['settings_default_tax']                                                = '預設稅';
$lang['setup_calendar_by_departments']                                       = '各部門設定日曆';
$lang['settings_calendar']                                                   = '日曆';
$lang['settings_sales_invoice_due_after']                                    = '發票到期期限（天）';
$lang['settings_google_api']                                                 = '谷歌的API金鑰';
$lang['settings_gcal_main_calendar_id']                                      = '谷歌日曆ID';
$lang['settings_gcal_main_calendar_id_help']                                 = '這是主要的公司日曆。所有這個日曆上的事件將被顯示。如果要指定基於部門的日曆，你可以在部門谷歌日曆ID新增';

$lang['show_on_calendar']                    = '顯示日曆';
$lang['show_invoices_on_calendar']           = '發票';
$lang['show_estimates_on_calendar']          = '報價';
$lang['show_contracts_on_calendar']          = '合約';
$lang['show_tasks_on_calendar']              = '任務';
$lang['show_customer_reminders_on_calendar'] = '客戶提醒';
# Leads
$lang['copy_custom_fields_convert_to_customer']                      = '複製自定義欄位到客戶簡介';
$lang['copy_custom_fields_convert_to_customer_help']                 = '如果不存在下列自定義域中，客戶將被自動建立，否則只能被複制從引線配置檔案';
$lang['lead_profile']                                                = '簡介';
$lang['lead_is_client']                                              = '客戶';
$lang['leads_email_integration_folder_no_encryption']                = '沒有加密';
$lang['leads_email_integration']                                     = '電子郵件整合';
$lang['leads_email_active']                                          = '有效';
$lang['leads_email_integration_imap']                                = 'IMAP伺服器';
$lang['leads_email_integration_email']                               = '電子郵件地址（登入）';
$lang['leads_email_integration_password']                            = '密碼';
$lang['leads_email_integration_default_source']                      = '預設源';
$lang['leads_email_integration_check_every']                         = '檢查每個(分鐘)';
$lang['leads_email_integration_default_assigned']                    = '負責新線索';
$lang['leads_email_encryption']                                      = '加密';
$lang['leads_email_integration_updated']                             = '整合電子郵件更新';
$lang['leads_email_integration_default_status']                      = '預設狀態';
$lang['leads_email_integration_folder']                              = '資料夾';
$lang['leads_email_integration_notify_when_lead_imported']           = '進入時通知';
$lang['leads_email_integration_only_check_unseen_emails']            = '只檢查沒開啟的郵件';
$lang['leads_email_integration_only_check_unseen_emails_help']       = '該指令碼將自動設定電子郵件開啟後檢查。這是用來防止和檢查所有的電子郵件，並再次。不標書勾選這個選項，如果你有很多的郵件和你安裝了大量轉發的電子郵件';
$lang['leads_email_integration_notify_when_lead_contact_more_times'] = '如果多次傳送電子郵件通知線索';
$lang['leads_email_integration_test_connection']                     = 'IMAP連線測試';
$lang['lead_email_connection_ok']                                    = 'IMAP連線好';
$lang['lead_email_connection_not_ok']                                = 'IMAP連線不好';
$lang['lead_email_activity']                                         = '電子郵件活動';
$lang['leads_email_integration_notify_roles']                        = '角色的通知';
$lang['leads_email_integration_notify_staff']                        = '工作人員通知';
$lang['lead_public']                                                 = '公開';
# Knowledge Base

$lang['kb_group_color'] = '顏色';
$lang['kb_group_order'] = '訂單';
# Utilities - BULK PDF Exporter
$lang['bulk_pdf_exporter']             = '批量PDF輸出';
$lang['bulk_export_pdf_payments']      = '支付';
$lang['bulk_export_pdf_estimates']     = '報價';
$lang['bulk_export_pdf_invoices']      = '發票';
$lang['bulk_pdf_export_button']        = '出口';
$lang['bulk_pdf_export_select_type']   = '選擇類型';
$lang['no_data_found_bulk_pdf_export'] = '未發現出口資料';
$lang['bulk_export_status_all']        = '全部';
$lang['bulk_export_status']            = '狀態';
$lang['bulk_export_zip_payment_modes'] = '支付由';
$lang['bulk_export_include_tag']       = '包括標籤';
$lang['bulk_export_include_tag_help']  = '原始或複製。標籤將在PDF輸出。標書只使用1標籤';

# Version 1.0.7
## Customers - portal
$lang['clients_nav_proposals'] = '提議';
$lang['clients_nav_support']   = '支援';
# General
$lang['more']            = '更多';
$lang['add_item']        = '新增物品';
$lang['goto_admin_area'] = '去管理區域';
$lang['delete']          = '刪除';
$lang['welcome_top']     = '歡迎';

# Customers
$lang['customer_permissions']         = '允許';
$lang['customer_permission_invoice']  = '發票';
$lang['customer_permission_estimate'] = '報價';
$lang['customer_permission_proposal'] = '提議';
$lang['customer_permission_contract'] = '合約';
$lang['customer_permission_support']  = '支援';


#Tasks
$lang['task_related_to'] = '有關';

# Send file
$lang['custom_file_fail_send']    = '傳送檔案失敗';
$lang['custom_file_success_send'] = '檔案被成功傳送到';
$lang['send_file_subject']        = '郵件主題';
$lang['send_file_email']          = '電子郵件地址';
$lang['send_file_message']        = '資訊';
$lang['send_file']                = '傳送檔案';
$lang['add_checklist_item']       = '項目清單';
$lang['task_checklist_items']     = '項目清單';

# Import
$lang['default_pass_clients_import'] = '所有客戶的預設密碼';
$lang['simulate_import']             = '模擬輸入';
$lang['import_upload_failed']        = '上傳失敗';
$lang['import_total_imported']       = '匯入總額: %s';
$lang['import_leads']                = '匯入銷售機會';
$lang['import_customers']            = '匯入客戶';
$lang['choose_csv_file']             = '選擇CSV檔案';
$lang['import']                      = '匯入';
$lang['lead_import_status']          = '狀態';
$lang['lead_import_source']          = '來源';

# Bulk PDF Export
$lang['bulk_export_pdf_proposals'] = 'Proposals';

# Invoices
$lang['delete_invoice'] = '刪除';
$lang['items']          = '發票項目';
$lang['support']        = '支援';
$lang['new_ticket']     = '新的工單';

# Reminders
$lang['calendar_lead_reminder']  = '機會提醒';
$lang['lead_set_reminder_title'] = '新增機會的提醒';
$lang['set_reminder_tooltip']    = '這個選擇讓你永遠不會忘記你的客戶.';
$lang['client_reminders_tab']    = '提醒';
$lang['leads_reminders_tab']     = '提醒';

# Tickets
$lang['delete_ticket_reply']  = '刪除回覆';
$lang['ticket_priority_edit'] = '編輯優先';
$lang['ticket_priority_add']  = '新增優先';
$lang['ticket_status_edit']   = '編輯工單狀態';
$lang['ticket_service_edit']  = '編輯工單服務';
$lang['edit_department']      = '編輯部門';

# Expenses
$lang['edit_expense_category'] = '編輯費用類別';
# Settings
$lang['customer_default_country']                                 = '預設的國家';
$lang['settings_sales_require_client_logged_in_to_view_estimate'] = '要求客戶登入檢視報價';
$lang['set_reminder']                                             = '設定提醒';
$lang['set_reminder_date']                                        = '通知日期';
$lang['reminder_description']                                     = '設定簡介';
$lang['reminder_notify_me_by_email']                              = '同時傳送電子郵件此提醒';
$lang['reminder_added_successfully']                              = '提示新增成功。你會及時通知.';
$lang['reminder_description']                                     = '描述';
$lang['reminder_date']                                            = '日期';
$lang['reminder_staff']                                           = '提醒';
$lang['reminder_is_notified']                                     = '通知？';
$lang['reminder_is_notified_boolean_no']                          = '不';
$lang['reminder_is_notified_boolean_yes']                         = '是';
$lang['reminder_set_to']                                          = '設定提醒';
$lang['reminder_deleted']                                         = '刪除成功提示';
$lang['reminder_failed_to_delete']                                = '無法刪除提示';
$lang['show_invoice_estimate_status_on_pdf']                      = '在PDF顯示發票/報價狀態';
$lang['email_piping_default_priority']                            = '在管道車票預設優先';
$lang['show_lead_reminders_on_calendar']                          = '機會的提醒';
$lang['tickets_piping']                                           = '電子郵件管道';
$lang['email_piping_only_replies']                                = '只允許通過電子郵件回答';
$lang['email_piping_only_registered']                             = 'Pipe 只有註冊使用者';

# Estimates
$lang['view_estimate_as_client']         = '檢視報價';
$lang['estimate_mark_as']                = '標記為 %s';
$lang['estimate_status_changed_success'] = '報價狀態改變';
$lang['estimate_status_changed_fail']    = '未能更改報價狀態';

# Proposals
$lang['proposal_to']                            = '公司 / 名稱';
$lang['proposal_date']                          = '開始日期';
$lang['proposal_address']                       = '地址';
$lang['proposal_phone']                         = '電話';
$lang['proposal_email']                         = '電子郵件';
$lang['proposal_date_created']                  = '建立日期';
$lang['proposal_open_till']                     = '截止日期';
$lang['proposal_status_open']                   = '開始';
$lang['proposal_status_accepted']               = '成功接受';
$lang['proposal_status_declined']               = '拒絕';
$lang['proposal_status_sent']                   = '傳送';
$lang['proposal_expired']                       = '過期';
$lang['proposal_subject']                       = '主題';
$lang['proposal_total']                         = '總計';
$lang['proposal_status']                        = '狀態';
$lang['proposals_list_all']                     = '所有';
$lang['proposals_leads_related']                = '資訊相關';
$lang['proposals_customers_related']            = '相關的客戶';
$lang['proposal_related']                       = '相關的';
$lang['proposal_for_lead']                      = '機會';
$lang['proposal_for_customer']                  = '客戶';
$lang['proposal']                               = '標書';
$lang['proposal_lowercase']                     = '提議';
$lang['proposals']                              = '標書';
$lang['proposals_lowercase']                    = '提議';
$lang['new_proposal']                           = '新標書';
$lang['proposal_currency']                      = '貨幣';
$lang['proposal_allow_comments']                = '允許評論';
$lang['proposal_allow_comments_help']           = '如果選中該選項的意見將在您的客戶檢視該提案被允許.';
$lang['proposal_edit']                          = '編輯';
$lang['proposal_pdf']                           = 'PDF';
$lang['proposal_send_to_email']                 = '傳送電子郵件';
$lang['proposal_send_to_email_title']           = '傳送標書到電子郵件';
$lang['proposal_attach_pdf']                    = '連線 PDF';
$lang['proposal_preview_template']              = '預覽模板';
$lang['proposal_view']                          = '檢視標書';
$lang['proposal_copy']                          = '複製';
$lang['proposal_delete']                        = '刪除';
$lang['proposal_to']                            = '公司名稱';
$lang['proposal_add_comment']                   = '新增評論';
$lang['proposal_sent_to_email_success']         = '標書傳送到電子郵件成功';
$lang['proposal_sent_to_email_fail']            = '未能傳送標書到電子郵件';
$lang['proposal_copy_fail']                     = '複製提案失敗';
$lang['proposal_copy_success']                  = '標書複製成功';
$lang['proposal_status_changed_success']        = '提案狀態成功更改';
$lang['proposal_status_changed_fail']           = '未能改變標書狀態';
$lang['proposal_assigned']                      = '分配';
$lang['proposal_comments']                      = '評論';
$lang['proposal_convert']                       = '轉換';
$lang['proposal_convert_estimate']              = '報價';
$lang['proposal_convert_invoice']               = '發票';
$lang['proposal_convert_to_estimate']           = '轉換為報價';
$lang['proposal_convert_to_invoice']            = '轉換為發票';
$lang['proposal_convert_to_lead_disabled_help'] = '您需要將領先優勢轉化為客戶，以建立％S';
$lang['proposal_convert_not_related_help']      = '該提案必須與客戶以轉換到％s';
$lang['proposal_converted_to_estimate_success'] = '標書轉化為成功的報價';
$lang['proposal_converted_to_invoice_success']  = '標書轉化為成功的發票';
$lang['proposal_converted_to_estimate_fail']    = '未能轉換標書報價';
$lang['proposal_converted_to_invoice_fail']     = '未能將提案轉化為發票';

# Proposals - view proposal template
$lang['proposal_total_info']   = '合計 %s';
$lang['proposal_accept_info']  = '接受';
$lang['proposal_decline_info'] = '拒絕';
$lang['proposal_pdf_info']     = 'PDF';

# Customers Portal
$lang['customer_reset_action']            = '重置';
$lang['customer_reset_password_heading']  = '重置您的密碼';
$lang['customer_forgot_password_heading'] = '忘記密碼';
$lang['customer_forgot_password']         = '忘記密碼？';
$lang['customer_reset_password']          = '密碼';
$lang['customer_reset_password_repeat']   = '重複密碼';
$lang['customer_forgot_password_email']   = '電子郵件地址';
$lang['customer_forgot_password_submit']  = '標書';
$lang['customer_ticket_subject']          = '主題';

# Email templates
$lang['email_template_proposals_fields_heading'] = '提議';

# Tasks
$lang['add_task_attachments']  = '附件';
$lang['task_view_attachments'] = '附件';
$lang['task_view_description'] = '描述';

# Customer Groups
$lang['customer_group_add_heading']  = '新增客戶群';
$lang['customer_group_edit_heading'] = '編輯使用者組';
$lang['new_customer_group']          = '新的客戶群';
$lang['customer_group_name']         = '名稱';
$lang['customer_groups']             = '組';
$lang['customer_group']              = '客戶群';
$lang['customer_group_lowercase']    = '客戶群';

$lang['customer_have_invoices_by']       = '包含發票的狀態 %s';
$lang['customer_have_estimates_by']      = '包含狀態％S報價';
$lang['customer_have_contracts_by_type'] = '有％S合約的類型';

# Custom fields
$lang['custom_field_show_on_table']              = '顯示錶';
$lang['custom_field_show_on_client_portal']      = '客戶入口網站';
$lang['custom_field_show_on_client_portal_help'] = '如果檢查該欄位，將顯示在表中';
$lang['custom_field_visibility']                 = '能見度';

# Knowledge Base
$lang['view_articles_list']     = '檢視文章';
$lang['view_articles_list_all'] = '所有的文章';
$lang['als_all_articles']       = '所有的文章';
$lang['als_kb_groups']          = '組';

# Spam Filter - Tickets
$lang['spam_filters']                 = '垃圾郵件過濾器';
$lang['spam_filter']                  = '垃圾郵件過濾器';
$lang['new_spam_filter']              = '新的垃圾郵件過濾器';
$lang['spam_filter_blocked_senders']  = '阻止發件人';
$lang['spam_filter_blocked_subjects'] = '封鎖物件';
$lang['spam_filter_blocked_phrases']  = '阻止短語';
$lang['spam_filter_content']          = '內容';
$lang['spamfilter_edit_heading']      = '編輯垃圾郵件過濾器';
$lang['spamfilter_add_heading']       = '新增垃圾郵件過濾';
$lang['spamfilter_type']              = '類型';
$lang['spamfilter_type_subject']      = '主題';
$lang['spamfilter_type_sender']       = '寄件人';
$lang['spamfilter_type_phrase']       = '短語';

# Tickets
$lang['block_sender']                = '阻止發件人';
$lang['sender_blocked']              = '發件人阻止';
$lang['sender_blocked_successfully'] = '發件人成功阻止';
$lang['ticket_date_created']         = '建立日期';

#KB
$lang['edit_kb_group'] = '編輯組';
# Leads
$lang['edit_source'] = '編輯來源';
$lang['edit_status'] = '編輯狀態';
# Contacts
$lang['contract_type_edit'] = '編輯合約類型';
# Reports
$lang['report_by_customer_groups'] = '客戶群體的總價值';
#Utilities
$lang['ticket_pipe_log']      = '工單日誌';
$lang['ticket_pipe_name']     = '從名字';
$lang['ticket_pipe_email_to'] = '至';
$lang['ticket_pipe_email']    = '從電子郵件';
$lang['ticket_pipe_subject']  = '主題';
$lang['ticket_pipe_message']  = '訊息';
$lang['ticket_pipe_date']     = '日期';
$lang['ticket_pipe_status']   = '狀態';

# Home
$lang['home_latest_activity']   = '最新活動';
$lang['home_my_tasks']          = '我的任務';
$lang['home_my_todo_items']     = '我的所有項目';
$lang['home_widget_view_all']   = '檢視所有';
$lang['home_stats_full_report'] = '完整的報告';

# Validation

$lang['form_validation_required']    = '{域}域是必需的.';
$lang['form_validation_valid_email'] = '{域}域必須包含一個有效的電子郵件地址.';
$lang['form_validation_matches']     = '{field} 欄位和 {param} 欄位不符.';
$lang['form_validation_is_unique']   = '{域}域必須包含一個唯一值.';

# Version 1.0.8
# Notifications & Leads/Estimates/Invoices Activity Log
$lang['not_event']                                    = '事件從今天開始 - %s ...';
$lang['not_event_public']                             = '公開事件從今天開始 - %s...';
$lang['not_contract_expiry_reminder']                 = '合約到期提醒 - %s...';
$lang['not_recurring_expense_cron_activity_heading']  = '經常性開支Cron作業活動';
$lang['not_recurring_invoices_cron_activity_heading'] = '反覆出現的發票Cron作業活動';
$lang['not_recurring_total_renewed']                  = '總更新: %s';
$lang['not_recurring_expenses_action_taken_from']     = '從一次性費用採取的行動';
$lang['not_invoice_created']                          = '發票建立:';
$lang['not_invoice_renewed']                          = '新的發票:';
$lang['not_expense_renewed']                          = '更新費用:';
$lang['not_invoice_sent_to_customer']                 = '發票傳送給客戶：%s 的';
$lang['not_invoice_sent_yes']                         = '是的';
$lang['not_invoice_sent_not']                         = '不';
$lang['not_action_taken_from_recurring_invoice']      = '從經常性發票採取的行動:';
$lang['not_new_reminder_for']                         = '％s的新提醒';
$lang['not_received_one_or_more_messages_lead']       = '收到一個電子郵件訊息';
$lang['not_received_lead_imported_email_integration'] = '主要匯入電子郵件整合';
$lang['not_lead_imported_attachment']                 = '從電子郵件附件匯入';
$lang['not_estimate_status_change']                   = '從電子郵件附件匯入';
$lang['not_estimate_status_updated']                  = '報價狀態更新:從 %s 到 %s';

$lang['not_assigned_lead_to_you']                                 = '分配給你的領導 %s';
$lang['not_lead_activity_assigned_to']                            = '%s 被分配給 %s';
$lang['not_lead_activity_attachment_deleted']                     = '刪除附件';
$lang['not_lead_activity_status_updated']                         = '%s 沒有領導活動狀態從 %s 到 %s';
$lang['not_lead_activity_contacted']                              = '%s 引導這個聯絡 %s';
$lang['not_lead_activity_created']                                = '%s 銷售機會';
$lang['not_lead_activity_marked_lost']                            = '標記為丟失';
$lang['not_lead_activity_unmarked_lost']                          = '標記為丟失';
$lang['not_lead_activity_marked_junk']                            = '標記為垃圾';
$lang['not_lead_activity_unmarked_junk']                          = '標記為垃圾';
$lang['not_lead_activity_added_attachment']                       = '新增附件';
$lang['not_lead_activity_converted_email']                        = '電子郵件改變了線索. 第一封電子郵件的線索是: %s 和增加作為客戶的電子郵件%s';
$lang['not_lead_activity_converted']                              = '%s 將這一轉變為顧客';
$lang['not_liked_your_post']                                      = '%s 喜歡你的文章 %s ...';
$lang['not_commented_your_post']                                  = '%s 評論你的文章 %s ...';
$lang['not_liked_your_comment']                                   = '%s 喜歡你的評論 %s ...';
$lang['not_proposal_assigned_to_you']                             = '分配給你的標書 - %s ...';
$lang['not_proposal_comment_from_client']                         = '客戶對提案的新評論 %s ...';
$lang['not_proposal_proposal_accepted']                           = '標書接受 - %s';
$lang['not_proposal_proposal_declined']                           = '拒絕標書 - %s';
$lang['not_task_added_you_as_follower']                           = '增加作為子賬號的任務 %s ...';
$lang['not_task_added_someone_as_follower']                       = '增加 %s任務給子賬號 %s ...';
$lang['not_task_added_himself_as_follower']                       = '增加自己子賬號的任務 %s ...';
$lang['not_task_assigned_to_you']                                 = '給你佈置一個任務 %s ...';
$lang['not_task_assigned_someone']                                = '分配 %s 給 任務 %s ...';
$lang['not_task_will_do_user']                                    = '要做的任務 %s ...';
$lang['not_task_new_attachment']                                  = '新的附件新增';
$lang['not_task_marked_as_complete']                              = '完成任務 %s';
$lang['not_task_unmarked_as_complete']                            = '標記任務完成 %s';
$lang['not_ticket_assigned_to_you']                               = '給你的工單- %s ...';
$lang['not_ticket_reassigned_to_you']                             = '工單分配給你 - %s ...';
$lang['not_estimate_customer_accepted']                           = '祝賀! 客戶接受報價的金額 %s';
$lang['not_estimate_customer_declined']                           = '客戶拒絕報價金額 %s';
$lang['estimate_activity_converted']                              = '將這一報價轉換為發票.<br /> %s';
$lang['estimate_activity_created']                                = '建立的報價';
$lang['invoice_estimate_activity_removed_item']                   = '刪除項目<b>%s</b>';
$lang['estimate_activity_number_changed']                         = '報價數額變化從 %s 到 %s';
$lang['invoice_activity_number_changed']                          = '發票號碼更改從 %s 到 %s';
$lang['invoice_estimate_activity_updated_item_short_description'] = '更新項目的簡短描述從 %s 到 %s';
$lang['invoice_estimate_activity_updated_item_long_description']  = '更新項目長描述從 <b>%s</b> 到 <b>%s</b>';
$lang['invoice_estimate_activity_updated_item_rate']              = '更新項目率從 %s 到 %s';
$lang['invoice_estimate_activity_updated_qty_item']               = '項目的更新數量為<b>%s</b> 從 %s 到 %s';
$lang['invoice_estimate_activity_added_item']                     = '新增新項<b>%s</b>';
$lang['invoice_estimate_activity_sent_to_client']                 = '把報價發給客戶';
$lang['estimate_activity_client_accepted_and_converted']          = '客戶接受這一報價。報價被轉換為發票號碼是 %s';
$lang['estimate_activity_client_accepted']                        = '客戶接受這一報價';
$lang['estimate_activity_client_declined']                        = '客戶拒絕這一報價';
$lang['estimate_activity_marked']                                 = '有標記的報價 %s';
$lang['invoice_activity_status_updated']                          = '發票狀態更新從 %s 到 %s';
$lang['invoice_activity_created']                                 = '建立發票';
$lang['invoice_activity_from_expense']                            = '把開支轉化為發票';
$lang['invoice_activity_recurring_created']                       = '通過CRON建立發票[經常性] ';
$lang['invoice_activity_recurring_from_expense_created']          = '使用CRON把開支轉化為發票';
$lang['invoice_activity_sent_to_client_cron']                     = '通過CRON傳送給客戶發票';
$lang['invoice_activity_sent_to_client']                          = '向客戶傳送發票';
$lang['invoice_activity_marked_as_sent']                          = '標記發票為已傳送';
$lang['invoice_activity_payment_deleted']                         = '已刪除的發票付款. 付款 #%s, 總金額 %s';
$lang['invoice_activity_payment_made_by_client']                  = '客戶付款的發票總額<b>%s</b> - %s';
$lang['invoice_activity_payment_made_by_staff']                   = '記錄付款總額 <b>%s</b> - %s';
$lang['invoice_activity_added_attachment']                        = '新增附件';

# Navigation
$lang['top_search_placeholder'] = '搜尋...';

# Staff
$lang['staff_profile_inactive_account'] = '這個工作人員帳戶是無效的';

# Estimates
$lang['copy_estimate']                = '複製報價';
$lang['estimate_copied_successfully'] = '報價複製成功';
$lang['estimate_copied_fail']         = '報價複製失敗';

# Tasks
$lang['tasks_view_assigned_to_user'] = '分配給我的任務';
$lang['tasks_view_follower_by_user'] = ' i\'m 下面的任務';
$lang['no_tasks_found']              = '沒有找到任務';

# Leads
$lang['leads_dt_datecreated']       = '建立';
$lang['leads_sort_by']              = '排序';
$lang['leads_sort_by_datecreated']  = '建立日期';
$lang['leads_sort_by_kanban_order'] = '訂單';

# Authentication
$lang['check_email_for_resetting_password'] = '檢查您的電子郵件，為進一步指示重置您的密碼';
$lang['inactive_account']                   = '無效帳戶';
$lang['error_setting_new_password_key']     = '設定新密碼時出錯';
$lang['password_reset_message']             = '您的密碼已重置。現在請登入!';
$lang['password_reset_message_fail']        = '您的密碼重置錯誤。再試一次.';
$lang['password_reset_key_expired']         = '密碼金鑰過期或無效的使用者';
$lang['auth_reset_pass_email_not_found']    = '未發現電子郵件';
$lang['auth_reset_password_submit']         = '重置密碼';

# Settings
$lang['settings_amount_to_words']          = '數量詞';
$lang['settings_amount_to_words_desc']     = '在發票/報價上寫出總金額';
$lang['settings_amount_to_words_enabled']  = '啟用';
$lang['settings_total_to_words_lowercase'] = '字數成小寫';
$lang['settings_show_tax_per_item']        = '顯示每件稅（發票/報價）';

# Reports
$lang['report_sales_months_three_months'] = '最近三個月';
$lang['report_invoice_number']            = '發票 #';
$lang['report_invoice_customer']          = '客戶';
$lang['report_invoice_date']              = '日期';
$lang['report_invoice_duedate']           = '到期日期';
$lang['report_invoice_amount']            = '金額';
$lang['report_invoice_amount_with_tax']   = '金額與稅收';
$lang['report_invoice_amount_open']       = 'amount open';
$lang['report_invoice_status']            = '狀態';

#Version 1.0.9

# Home stats
$lang['home_stats_by_project_status'] = '通過專案狀態統計';
$lang['home_invoice_overview']        = '發票概述';
$lang['home_estimate_overview']       = '估價概述';
$lang['home_proposal_overview']       = '方案概述';
$lang['home_lead_overview']           = '銷售機會概述';
$lang['home_my_projects']             = '我的專案';
$lang['home_announcements']           = '通告';

# Settings
$lang['settings_leads_kanban_limit']                                    = '設定引導看板限制';
$lang['settings_group_misc']                                            = '雜項';
$lang['show_projects_on_calendar']                                      = '在日曆上顯示專案';
$lang['settings_media_max_file_size_upload']                            = '最大檔案大小 (MB)';
$lang['settings_client_staff_add_edit_delete_task_comments_first_hour'] = '允許客戶/員工在第一個小時內新增/編輯任務註釋 (管理者不適用)';

# Email templates
$lang['email_template_only_domain_email'] = '只有域名的電子郵件';

# Announcements
$lang['dismiss_announcement']   = '駁回通知';
$lang['announcement_from']      = '來自:';
$lang['announcement_date']      = '發布日期: %s';
$lang['announcement_not_found'] = '沒有發現公告';
$lang['announcements_recent']   = '最新公告';

# General
$lang['zip_invoices']         = 'Zip 發票';
$lang['zip_estimates']        = 'Zip 報價';
$lang['zip_payments']         = 'Zip 付款';
$lang['setup_help']           = '幫助';
$lang['clients_list_company'] = '客戶';
$lang['dt_button_export']     = '輸出';

$lang['dt_entries']         = '記錄';
$lang['invoice_total_paid'] = '支付總額';
$lang['invoice_amount_due'] = '到期金額';

# Calendar
$lang['calendar_project'] = '專案';

# Leads
$lang['leads_import_assignee']     = '代理人';
$lang['customer_from_lead']        = '客戶從 %s';
$lang['lead_kan_ban_attachments']  = '附件 %s';
$lang['leads_sort_by_lastcontact'] = '最後聯絡';

# Tasks
$lang['task_comment_added']     = '成功新增評論';
$lang['task_duedate']           = '截止日期';
$lang['task_view_comments']     = '評論';
$lang['task_comment_updated']   = '評論更新';
$lang['task_visible_to_client'] = '可見客戶';
$lang['task_hourly_rate']       = '每小時收費';
$lang['hours']                  = '小時';
$lang['seconds']                = '秒';
$lang['minutes']                = '分鐘';
$lang['task_start_timer']       = '開始時間';
$lang['task_stop_timer']        = '結束時間';
$lang['task_billable']          = '賬單';
$lang['task_billable_yes']      = '賬單';
$lang['task_billable_no']       = '未收費';
$lang['task_billed']            = '已收費';
$lang['task_billed_yes']        = '已收費';
$lang['task_billed_no']         = '未收費';
$lang['task_user_logged_time']  = '你的記錄時間:';
$lang['task_total_logged_time'] = '總記錄時間:';
$lang['task_is_billed']         = '此任務結算與發票號碼 %s';
$lang['task_statistics']        = '統計';
$lang['task_milestone']         = '程序';

# Tickets
$lang['ticket_message_updated_successfully'] = '工單資訊更新成功';

# Invoices
$lang['invoice_task_item_project_tasks_not_included'] = '專案任務不包括在這個列表中.';
$lang['show_quantity_as']                             = '顯示數量:';
$lang['quantity_as_qty']                              = '數量';
$lang['quantity_as_hours']                            = '小時';
$lang['invoice_table_hours_heading']                  = '小時';
$lang['bill_tasks']                                   = 'Bill Tasks';
$lang['invoice_estimate_sent_to_email']               = '電子郵件';

# Estimates
$lang['estimate_table_hours_heading'] = '小時';

# General
$lang['is_customer_indicator']         = '客戶';
$lang['print']                         = '照片';
$lang['customer_permission_projects']  = '專案';
$lang['no_timers_found']               = '沒有建立開始時間';
$lang['timers_started_confirm_logout'] = '建立開始時間!<br />你確定你要登出還沒有結束的時間?';
$lang['confirm_logout']                = '登出';
$lang['timer_top_started']             = '開始在 %s';

# Projects
$lang['cant_change_billing_type_billed_tasks_found']   = '你不能改變賬單類型. 已經發現了這個項目的任務.';
$lang['project_customer_permission_warning']           = '該系統表明，客戶不具有項目的許可權. 顧客不能夠看到這個項目. 考慮在客戶配置檔案選項中許可權中新增許可權.';
$lang['project_invoice_timesheet_start_time']          = '開始時間: %s';
$lang['project_invoice_timesheet_end_time']            = '結束時間: %s';
$lang['project_invoice_timesheet_total_logged_time']   = '記錄時間: %s';
$lang['project_view_as_client']                        = '專案客戶';
$lang['project_mark_all_tasks_as_completed']           = '完成所有的任務，停止所有定時器 (沒有傳送給項目成員的通知)';
$lang['project_not_started_status_tasks_timers_found'] = '此項目發現任務計時器，但該項目尚未啟動. 建議更改項目狀態進展';
$lang['project_status']                                = '狀態';
$lang['project_status_1']                              = '尚未開始';
$lang['project_status_2']                              = '進行中';
$lang['project_status_3']                              = '延遲';
$lang['project_status_4']                              = '完成';

$lang['project_file_dateadded']                              = '上傳日期';
$lang['project_file_filename']                               = '檔名';
$lang['project_file__filetype']                              = '檔案類型';
$lang['project_file_visible_to_customer']                    = '可見客戶';
$lang['project_file_uploaded_by']                            = '上傳的';
$lang['edit_project']                                        = '編輯專案';
$lang['copy_project']                                        = '複製專案';
$lang['delete_project']                                      = '刪除專案';
$lang['project_task_assigned_to_user']                       = '分配給你的任務';
$lang['seconds']                                             = '秒';
$lang['hours']                                               = '小時';
$lang['minutes']                                             = '分鐘';
$lang['project']                                             = '項目';
$lang['project_lowercase']                                   = '項目';
$lang['projects']                                            = '項目';
$lang['projects_lowercase']                                  = '項目';
$lang['project_settings']                                    = '項目設定';
$lang['project_invoiced_successfully']                       = '成功項目發票';
$lang['new_project']                                         = '新專案';
$lang['project_files']                                       = '檔案';
$lang['project_activity']                                    = '啟用';
$lang['project_name']                                        = '專案名';
$lang['project_description']                                 = '專案描述';
$lang['project_customer']                                    = '客戶';
$lang['project_start_date']                                  = '開始日期';
$lang['project_datecreated']                                 = '建立日期';
$lang['project_deadline']                                    = '截止期限';
$lang['project_billing_type']                                = '賬單類型';
$lang['project_billing_type_fixed_cost']                     = '固定成本';
$lang['project_billing_type_project_hours']                  = '專案時間';
$lang['project_billing_type_project_task_hours']             = '任務時間';
$lang['project_billing_type_project_task_hours_hourly_rate'] = '基於任務的時薪';
$lang['project_rate_per_hour']                               = '每小時速度';
$lang['project_total_cost']                                  = '總成本';
$lang['project_members']                                     = '專案成員';
$lang['project_member_removed']                              = '專案成員刪除成功';
$lang['project_overview']                                    = '專案概述';
$lang['project_gant']                                        = '條狀檢視';
$lang['project_milestones']                                  = '程序';
$lang['project_milestone_order']                             = '訂購';
$lang['project_milestone_duedate_passed']                    = '通過交貨期';
$lang['record_timesheet']                                    = '工時表';
$lang['new_milestone']                                       = '新程序';
$lang['edit_milestone']                                      = '編輯程序';
$lang['milestone_name']                                      = '名稱';
$lang['milestone_due_date']                                  = '交貨期';
$lang['project_milestone']                                   = '程序';
$lang['project_notes']                                       = '備註';
$lang['project_timesheets']                                  = '時間表';
$lang['project_timesheet']                                   = '工時表';
$lang['milestone_total_logged_time']                         = '記錄時間';
$lang['project_overview_total_logged_hours']                 = '總記錄時間';
$lang['milestones_uncategorized']                            = '未分類';
$lang['milestone_no_tasks_found']                            = '沒有找到任務';
$lang['project_copied_successfully']                         = '專案資料複製成功';
$lang['failed_to_copy_project']                              = '複製項目失敗';
$lang['copy_project_task_include_check_list_items']          = '複製清單項目';
$lang['copy_project_task_include_assignees']                 = '複製相同的代理人';
$lang['copy_project_task_include_followers']                 = '複製相同的仿效者';

$lang['project_days_left']                                = '還剩幾天';
$lang['project_open_tasks']                               = '開啟任務';
$lang['timesheet_stop_timer']                             = '停止定時器';
$lang['failed_to_add_project_timesheet_end_time_smaller'] = '無法新增時間表。結束時間比開始時間小';
$lang['project_timesheet_user']                           = '成員';
$lang['project_timesheet_start_time']                     = '開始時間';
$lang['project_timesheet_end_time']                       = '結束時間';
$lang['project_timesheet_time_spend']                     = '花費的時間';
$lang['project_timesheet_task']                           = '任務';
$lang['project_invoices']                                 = '發票';
$lang['total_logged_hours_by_staff']                      = '總記錄時間';
$lang['invoice_project']                                  = '發票項目';
$lang['invoice_project_info']                             = '工程發票資訊';
$lang['invoice_project_data_single_line']                 = '一行';
$lang['invoice_project_data_task_per_item']               = '每項任務';
$lang['invoice_project_data_timesheets_individually']     = '分別所有的時間表';
$lang['invoice_project_item_name_data']                   = '物品的名稱';
$lang['invoice_project_description_data']                 = '描述';
$lang['invoice_project_projectname_taskname']             = '項目名 + 任務名';
$lang['invoice_project_all_tasks_total_logged_time']      = '所有的任務 + 每個任務的總記錄時間';
$lang['invoice_project_project_name_data']                = '項目名';
$lang['invoice_project_timesheet_individually_data']      = '時間表開始時間 + 結束時間 + 總記錄時間';
$lang['invoice_project_total_logged_time_data']           = '總記錄時間';

$lang['project_allow_client_to']                     = '允許客戶 %s';
$lang['project_setting_view_task_attachments']       = '檢視任務附件';
$lang['project_setting_view_task_checklist_items']   = '檢視任務清單項目';
$lang['project_setting_upload_files']                = '上傳檔案';
$lang['project_setting_view_task_comments']          = '檢視任務的意見';
$lang['project_setting_upload_on_tasks']             = '上傳任務附件';
$lang['project_setting_view_task_total_logged_time'] = '檢視任務總日誌時間';
$lang['project_setting_open_discussions']            = '開放的討論';
$lang['project_setting_comment_on_tasks']            = '項目任務';
$lang['project_setting_view_tasks']                  = '檢視任務';
$lang['project_setting_view_milestones']             = '檢視程序';
$lang['project_setting_view_gantt']                  = '條狀檢視';
$lang['project_setting_view_timesheets']             = '檢視時間表';
$lang['project_setting_view_activity_log']           = '檢視活動日誌';
$lang['project_setting_view_team_members']           = '檢視團隊成員';

$lang['project_discussion_visible_to_customer_yes'] = '看得見的';
$lang['project_discussion_visible_to_customer_no']  = '看不見的';

$lang['project_discussion_posted_on']        = '張貼在 %s';
$lang['project_discussion_posted_by']        = '發表於 %s';
$lang['project_discussion_failed_to_delete'] = '刪除討論失敗';
$lang['project_discussion_deleted']          = '成功刪除聊天';
$lang['project_discussion_no_activity']      = '沒有活動';
$lang['project_discussion']                  = '討論';
$lang['project_discussions']                 = '討論';
$lang['edit_discussion']                     = '建立討論';
$lang['new_project_discussion']              = '建立討論';
$lang['project_discussion_subject']          = '主題';
$lang['project_discussion_description']      = '類型';
$lang['project_discussion_show_to_customer'] = '可見客戶';
$lang['project_discussion_total_comments']   = '總的評論';
$lang['project_discussion_last_activity']    = '最後的活動';
$lang['discussion_add_comment']              = '新增評論';
$lang['discussion_newest']                   = '最新的';
$lang['discussion_oldest']                   = '以前的';
$lang['discussion_attachments']              = '附件';
$lang['discussion_send']                     = '傳送';
$lang['discussion_reply']                    = '回答';
$lang['discussion_edit']                     = '編輯';
$lang['discussion_edited']                   = '修改';
$lang['discussion_you']                      = '你';
$lang['discussion_save']                     = '儲存';
$lang['discussion_delete']                   = '刪除';
$lang['discussion_view_all_replies']         = '顯示全部回覆';
$lang['discussion_hide_replies']             = '隱藏回答';
$lang['discussion_no_comments']              = '沒有評論';
$lang['discussion_no_attachments']           = '沒有附件';
$lang['discussion_attachments_drop']         = '檔案上傳拖放';
$lang['project_note']                        = '備註';
$lang['project_note_private']                = '私人標註';
$lang['project_save_note']                   = '儲存備註';

# Project Activity
$lang['project_activity_created']                      = '建立專案';
$lang['project_activity_updated']                      = '更新的專案';
$lang['project_activity_removed_team_member']          = '移除團隊成員';
$lang['project_activity_added_team_member']            = '增加了新的團隊成員';
$lang['project_activity_marked_all_tasks_as_complete'] = '完成所有任務';
$lang['project_activity_recorded_timesheet']           = '記錄時間表';
$lang['project_activity_task_name']                    = '任務:';
$lang['project_activity_deleted_discussion']           = '刪除的討論';
$lang['project_activity_created_discussion']           = '建立的討論';
$lang['project_activity_updated_discussion']           = '更新的討論';
$lang['project_activity_commented_on_discussion']      = '評論的討論';
$lang['project_activity_deleted_discussion_comment']   = '刪除討論的評論';
$lang['project_activity_deleted_milestone']            = '刪除的程序';
$lang['project_activity_updated_milestone']            = '最新的程序';
$lang['project_activity_created_milestone']            = '建立新的程序';
$lang['project_activity_invoiced_project']             = '發票項目';
$lang['project_activity_task_marked_complete']         = '任務標記成功';
$lang['project_activity_task_unmarked_complete']       = '取消標記成功';
$lang['project_activity_task_deleted']                 = '項目已刪除';
$lang['project_activity_new_task_comment']             = '新增評論';
$lang['project_activity_new_task_attachment']          = '上傳附件';
$lang['project_activity_new_task_assignee']            = '增加了新的任務成員';
$lang['project_activity_task_assignee_removed']        = '刪除任務成員';
$lang['project_activity_task_timesheet_deleted']       = '刪除時間表';
$lang['project_activity_uploaded_file']                = '上傳項目檔案';
$lang['project_activity_status_updated']               = '更新項目狀態';
$lang['project_activity_visible_to_customer']          = '對客戶可見';
$lang['project_activity_project_file_removed']         = '刪除專案檔案';

# Customers area
$lang['clients_my_estimates'] = '報價';
$lang['client_no_reply']      = '無答覆';
$lang['clients_nav_projects'] = '專案';
$lang['clients_my_projects']  = '專案';
$lang['client_profile_image'] = '頭像';

/////
$lang['sales_report_cancelled_invoices_not_included'] = '取消被排除在報告中的發票';
$lang['invoices_merge_cancel_merged_invoices']        = '將合併的發票標記為取消而不是刪除';
$lang['invoice_marked_as_cancelled_successfully']     = '發票被標明為已被取消';
$lang['invoice_unmarked_as_cancelled']                = '發票標記為取消成功';

$lang['tasks_reminder_notification_before']                    = '設定截止日期前的提醒時間(天) ';
$lang['not_task_deadline_reminder']                            = '任務到期提醒';
$lang['dt_length_menu_all']                                    = '全部';
$lang['task_not_finished']                                     = '沒有完成';
$lang['task_billed_cant_start_timer']                          = '任務結束。定時器不能啟動';
$lang['invoice_task_billable_timers_found']                    = '根據工作時間開具發票';
$lang['project_timesheet_not_updated']                         = '時間表不受影響';
$lang['project_invoice_task_no_timers_found']                  = '沒有找到這個任務的計時器';
$lang['invoice_project_tasks_not_started']                     = '還沒有開始|開始日期: %s';
$lang['invoice_project_see_billed_tasks']                      = '檢視此發票上的任務';
$lang['invoice_project_all_billable_tasks_marked_as_finished'] = '所有已開帳單的任務將被標記為完成';
$lang['invoice_project_nothing_to_bill']                       = '沒有任務. 隨意新增任何你想新增的項目.';
$lang['invoice_project_start_date_tasks_not_passed']           = '被設定為在將來開始的任務不能開具賬單';
$lang['invoice_project_stop_all_timers']                       = '停止所有的定時器';
$lang['invoice_project_stop_billable_timers_only']             = '只有停止計費計時器';
$lang['project_tasks_total_timers_stopped']                    = '停止 %s 的所有定時器';
$lang['project_invoice_timers_started']                        = '發現有計費的任務在執行，發票不能創造。請停止任務定時器建立發票.';
$lang['task_start_timer_only_assignee']                        = '你不能啟動定時器，直到你被分配到這個任務!';
$lang['task_comments']                                         = '評論';
$lang['invoice_total_tax']                                     = '總稅額';
$lang['estimates_total_tax']                                   = '總稅額';
$lang['report_invoice_total_tax']                              = '總稅額';
$lang['home_tickets']                                          = '工單';
$lang['home_project_activity']                                 = '最新的項目活動記錄';
$lang['view_tracking']                                         = '檢視項目追蹤';
$lang['view_date']                                             = '日期';
$lang['view_ip']                                               = 'IP 地址';
$lang['article_total_views']                                   = '總閱讀量';
$lang['leads_source']                                          = '來源';
$lang['invoices_available_for_merging']                        = '可以合併的發票';
$lang['invoices_merge_discount']                               = '你必須為 %s 的所有發票手工新增折扣';
$lang['invoice_merge_number_warning']                          = '合併將導致發票在日曆上顯示錯誤.';
$lang['invoice_mark_as']                                       = '標記人 %s';
$lang['invoice_unmark_as']                                     = '取消人 %s';
$lang['invoice_status_cancelled']                              = '已取消';
$lang['tasks_reminder_notification_before_help']               = '在項目截止前X天提醒成員郵件只會傳送給被分配到此項目的成員.';

# Version 1.1.0
$lang['project_invoice_select_all_tasks'] = '選擇所有任務';
$lang['lead_company']                     = '公司';

# Version 1.1.1
$lang['admin_auth_forgot_password_button']       = '確認';
$lang['task_assigned']                           = '指派給';
$lang['switch_to_pipeline']                      = 'Switch to pipeline';
$lang['switch_to_list_view']                     = '切換到清單';
$lang['estimates_pipeline']                      = 'Estimates Pipeline';
$lang['estimates_pipeline_sort']                 = 'Sort By';
$lang['estimates_sort_expiry_date']              = 'Expiry Date';
$lang['estimates_sort_pipeline']                 = 'Pipeline Order';
$lang['estimates_sort_datecreated']              = 'Date Created';
$lang['estimates_sort_estimate_date']            = 'Estimate Date';
$lang['estimate_set_reminder_title']             = 'Set Estimate Reminder';
$lang['invoice_set_reminder_title']              = 'Set Invoice Reminder';
$lang['estimate_reminders']                      = 'Reminders';
$lang['invoice_reminders']                       = 'Reminders';
$lang['estimate_notes']                          = '備註';
$lang['estimate_add_note']                       = '增加備註';
$lang['dropdown_non_selected_tex']               = 'Nothing selected';
$lang['auto_close_ticket_after']                 = 'Auto close ticket after (Hours)';
$lang['event_description']                       = 'Description';
$lang['delete_event']                            = '刪除';
$lang['not_new_ticket_created']                  = 'New ticket opened in your department - %s';
$lang['receive_notification_on_new_ticket']      = 'Receive notification on new ticket opened';
$lang['receive_notification_on_new_ticket_help'] = 'All staff members which belong to the ticket department will receive notification that new ticket is opened';
$lang['event_updated']                           = 'Event updated successfully';
$lang['customer_contacts']                       = 'Contacts';
$lang['new_contact']                             = 'New Contact';
$lang['contact']                                 = 'Contact';
$lang['contact_lowercase']                       = 'contact';
$lang['contact_primary']                         = 'Primary contact';
$lang['contact_position']                        = 'Position';
$lang['contact_active']                          = 'Active';
$lang['client_company_info']                     = 'Company details';
$lang['proposal_save']                           = 'Save Proposal';
$lang['calendar']                                = '行事曆';
$lang['settings_pdf']                            = 'PDF';
$lang['settings_pdf_font']                       = 'PDF Font';
$lang['settings_pdf_table_heading_color']        = 'Items table heading color';
$lang['settings_pdf_table_heading_text_color']   = 'Items table heading text color';
$lang['settings_pdf_font_size']                  = 'Default font size';
$lang['proposal_status_draft']                   = 'Draft';
$lang['custom_field_contacts']                   = 'Contacts';
$lang['company_primary_email']                   = 'Primary email';
$lang['client_register_contact_info']            = 'Primary Contact Information';
$lang['client_register_company_info']            = 'Company Informations';
$lang['contact_permissions_info']                = 'Make sure to set appropriate permissions for this contact';
$lang['default_leads_kanban_sort']               = 'Default leads Kan Ban Sort';
$lang['default_leads_kanban_sort_type']          = 'Sort';
$lang['order_ascending']                         = 'Ascending';
$lang['order_descending']                        = 'Descending';
$lang['calendar_expand']                         = 'expand';
$lang['proposal_reminders']                      = 'Reminders';
$lang['proposal_set_reminder_title']             = 'Set proposal reminder';
$lang['settings_allowed_upload_file_types']      = 'Allowed file types';
$lang['no_primary_contact']                      = 'This customer dont have primary contact. You need to setup primary contact login as customer. Its recomended all customers to have primary contacts.';
$lang['leads_merge_customer']                    = 'Customer fields merging';
$lang['leads_merge_contact']                     = 'Contact fields merging';
$lang['leads_merge_as_contact_field']            = 'Merge as contact field';
$lang['lead_convert_to_client_phone']            = 'Phone';
$lang['invoice_status_report_all']               = 'All';
$lang['import_contact_field']                    = 'Contact field';

$lang['file_uploaded_success']             = 'There is no error, the file uploaded with success';
$lang['file_exceeds_max_filesize']         = 'The uploaded file exceeds the upload_max_filesize directive in php.ini';
$lang['file_exceeds_maxfile_size_in_form'] = 'The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form';
$lang['file_uploaded_partially']           = 'The uploaded file was only partially uploaded';
$lang['file_not_uploaded']                 = 'No file was uploaded';
$lang['file_missing_temporary_folder']     = 'Missing a temporary folder';
$lang['file_failed_to_write_to_disk']      = 'Failed to write file to disk.';
$lang['file_php_extension_blocked']        = 'A PHP extension stopped the file upload.';
$lang['calendar_expand']                   = 'Expand';
$lang['view_pdf']                          = 'View PDF';
$lang['expense_repeat_every']              = 'Repeat every';

# Version 1.1.2
$lang['leads_switch_to_kanban']                   = '切換到看板';
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
$lang['permission_view']                                  = '查看';
$lang['permission_edit']                                  = '編輯';
$lang['permission_create']                                = '建立';
$lang['permission_delete']                                = '刪除';
$lang['permission']                                       = '權限';
$lang['permissions']                                      = '權限';
$lang['access_denied']                                    = 'Access Danied';
$lang['proposals_pipeline']                               = 'Proposals Pipeline';
$lang['proposals_pipeline_sort']                          = 'Sort By';
$lang['proposals_sort_open_till']                         = 'Open Till';
$lang['proposals_sort_pipeline']                          = 'Pipeline Order';
$lang['proposals_sort_datecreated']                       = 'Date Created';
$lang['proposals_sort_proposal_date']                     = 'Proposal Date';
$lang['is_not_staff_member']                              = 'Not staff member';
$lang['lead_created']                                     = 'Created';
$lang['access_tickets_to_none_staff_members']             = 'Allow access to tickets for none staff members';
$lang['project_expenses']                                 = 'Expenses';
$lang['expense_currency']                                 = 'Currency';
$lang['currency_valid_code_help']                         = 'Make sure to enter valid currency ISO code.';
$lang['week']                                             = 'Week';
$lang['weeks']                                            = 'Weeks';
$lang['month']                                            = 'Month';
$lang['months']                                           = 'Months';
$lang['year']                                             = 'Year';
$lang['years']                                            = 'Years';
$lang['expense_report_category']                          = 'Category';
$lang['expense_paid_via']                                 = 'Paid Via %s';
$lang['item_as_expense']                                  = '[Expense]';
$lang['show_help_on_setup_menu']                          = 'Show help menu item on setup menu';
$lang['customers_summary_total']                          = 'Total Customers';
$lang['filter_by']                                        = 'Filter by';
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
$lang['show_proposals_on_calendar']                       = 'Proposals';
$lang['invoice_project_see_billed_expenses']              = 'See expenses who wil be billed on this invoice';
$lang['project_overview_expenses']                        = 'Total Expenses';
$lang['project_overview_expenses_billable']               = 'Billable Expenses';
$lang['project_overview_expenses_billed']                 = 'Billed Expenses';
$lang['project_overview_expenses_unbilled']               = 'Unbilled Expenses';
$lang['announcement_date_list']                           = 'Date';
$lang['project_setting_view_finance_overview']            = 'view finance overview';
$lang['project_setting_view_finance_overview']            = 'view finance overview';
$lang['show_all_tasks_for_project_member']                = 'Allow all staff to see all tasks related to projects (includes non-staff)';
$lang['not_staff_added_as_project_member']                = 'Added you as project member';
$lang['report_expenses_base_currency_select_explanation'] = 'You need to select currency because the system found different currencies used for expenses.';

# Version 1.1.6
$lang['project_activity_recorded_expense']   = 'Recorded Expense';
$lang['save_customer_and_add_contact']       = 'Save and create contact';
$lang['tickets_chart_weekly_opening_stats']  = 'Weekly Stats';
$lang['related_knowledgebase_articles']      = 'Related Articles';
$lang['detailed_overview']                   = 'Tasks Overview';
$lang['tasks_total_checklists_finished']     = 'Total checklist items marked as finished';
$lang['tasks_total_added_attachments']       = 'Total attachments added';
$lang['tasks_total_comments']                = 'Total comments';
$lang['task_finished_on_time']               = 'Finished on time?';
$lang['task_finished_on_time_indicator']     = 'Yes';
$lang['task_not_finished_on_time_indicator'] = 'No';
$lang['filter']                              = 'Filter';
$lang['task_filter_detailed_all_months']     = 'All Months';
$lang['kb_article_slug']                     = 'Slug';


# Version 1.1.7
$lang['email_template_ticket_warning']          = 'If ticket is imported with email piping and the contact does not exists in the CRM the fields wont be replaced.';
$lang['auto_stop_tasks_timers_on_new_timer']    = 'Stop all other started timers when starting new timer';
$lang['notification_when_customer_pay_invoice'] = 'Receive notification when customer pay invoice (built-in)';
$lang['not_invoice_payment_recorded']           = 'New invoice payment - %s';
$lang['email_template_contact_warning']         = 'If contact is not logged while making action the contact merge fields wont be replaced.';
$lang['change_role_permission_warning']         = '現在更改角色權限不會影響使用此角色的當前員工權限。';
$lang['task_copied_successfully']               = 'Task copied successfully';
$lang['failed_to_copy_task']                    = 'Failed to copy task';
$lang['not_project_file_uploaded']              = 'New project file added';
$lang['settings_calendar_color']                = '%s Color';
$lang['settings_calendar_colors_heading']       = 'Styling';
$lang['reminder']                               = 'Reminder';
$lang['back_to_tasks_list']                     = 'Back to tasks list';
$lang['copy_task_confirm']                      = 'Confirm';
$lang['changing_items_affect_warning']          = 'Changing item info wont affect on the created invoices/estimates.';
$lang['tax_is_used_in_expenses_warning']        = 'You cant update this tax because expenses transactions using this tax are found.';
$lang['note']                                   = '備註';
$lang['leads_staff_report_converted']           = 'Total converted leads';
$lang['leads_staff_report_created']             = 'Total created leads';
$lang['leads_staff_report_lost']                = 'Total lost leads';
$lang['client_go_to_dashboard']                 = 'Back to portal';
$lang['calendar_estimate_reminder']             = 'Estimate Reminder';
$lang['calendar_invoice_reminder']              = 'Invoice Reminder';
$lang['calendar_proposal_reminder']             = 'Proposal Reminder';
$lang['show_estimate_reminders_on_calendar']    = 'Estimate Reminders';
$lang['show_invoice_reminders_on_calendar']     = 'Invoice Reminders';
$lang['show_proposal_reminders_on_calendar']    = 'Proposal Reminders';
$lang['proposal_due_after']                     = 'Proposal Due After (days)';
$lang['project_progress']                       = 'Progress';
$lang['calculate_progress_through_tasks']       = 'Calculate progress through tasks';
$lang['allow_customer_to_change_ticket_status'] = 'Allow customer to change ticket status from customers area';
$lang['switch_to_general_report']               = '切換到員工報告';
$lang['switch_to_staff_report']                 = '切換到一般報告';
$lang['generate']                               = 'Generate';
$lang['from_date']                              = 'From date';
$lang['to_date']                                = 'To date';
$lang['not_results_found']                      = 'No results found';
$lang['lead_lock_after_convert_to_customer']    = 'Dont allow editing the lead after converting to customer (admins not applied)';
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
$lang['all_staff_members']                      = 'All staff members';
$lang['help_project_permissions']               = 'VIEW allows staff member to see ALL projects. If you only want them to see projects they are assigned (added as members), do not give VIEW permissions.';
$lang['help_tasks_permissions']                 = 'VIEW allows staff member to see ALL tasks. If you only want them to see tasks they are assigned to or following, do not give VIEW permissions.';
$lang['expense_recurring_days']                 = 'Day(s)';
$lang['expense_recurring_weeks']                = 'Week(s)';
$lang['expense_recurring_months']               = 'Month(s)';
$lang['expense_recurring_years']                = 'Years(s)';
$lang['reset_to_default_color']                 = 'Reset to default color';
$lang['pdf_logo_width']                         = 'Logo Width (PX)';
$lang['drop_files_here_to_upload']              = 'Drop files here to upload';
$lang['browser_not_support_drag_and_drop']      = 'Your browser does not support drag\'n\'drop file uploads';
$lang['remove_file']                            = 'Remove file';
$lang['you_can_not_upload_any_more_files']      = 'You can not upload any more files';
$lang['custom_field_only_admin']                = 'Restrict visibility for administrators only';
$lang['leads_default_source']                   = 'Default source';
$lang['clear_activity_log']                     = 'Clear log';
$lang['default_contact_permissions']            = 'Default contact permissions';
$lang['invoice_activity_marked_as_cancelled']   = 'marked invoice as cancelled';
$lang['invoice_activity_unmarked_as_cancelled'] = 'unmarked invoice as cancelled';
$lang['wait_text']                              = '請稍待...';
$lang['projects_summary']                       = 'Projects summary';
$lang['dept_imap_host']                         = 'IMAP Host';
$lang['dept_encryption']                        = 'Encryption';
$lang['dept_email_password']                    = 'Password';
$lang['dept_email_no_encryption']               = 'No Encryption';
$lang['failed_to_decrypt_password']             = 'Failed to decrypt password';
$lang['delete_mail_after_import']               = 'Delete mail after import?';
$lang['expiry_reminder_enabled']                = 'Send expiration reminder';
$lang['send_expiry_reminder_before']            = 'Send expiration reminder before (DAYS)';
$lang['not_expiry_reminder_sent']               = 'Expiry reminder sent';
$lang['send_expiry_reminder']                   = 'Sent expiration reminder';
$lang['sent_expiry_reminder_success']           = 'Expiration reminder successfully sent';
$lang['sent_expiry_reminder_fail']              = 'Failed to send expiration reminder';
$lang['leads_default_status']                   = 'Default status';
$lang['item_description_placeholder']           = 'Description';
$lang['item_long_description_placeholder']      = 'Long description';
$lang['item_quantity_placeholder']              = 'Quantity';
$lang['item_rate_placeholder']                  = 'Rate';
$lang['tickets_summary']                        = '工單摘要';
$lang['tasks_list_priority']                    = 'Priority';
$lang['ticket_status_db_2']                     = 'In Progress';
$lang['ticket_status_db_1']                     = 'Open';
$lang['ticket_status_db_3']                     = 'Answered';
$lang['ticket_status_db_4']                     = 'On Hold';
$lang['ticket_status_db_5']                     = 'Closed';
$lang['ticket_priority_db_1']                   = '低';
$lang['ticket_priority_db_2']                   = '中';
$lang['ticket_priority_db_3']                   = '高';
$lang['customer_have_projects_by']              = 'Contains projects by status %s';
$lang['customer_have_proposals_by']             = 'Contains proposals by status %s';
$lang['do_not_redirect_payment']                = 'Do not redirect me to the payment processor';
$lang['project_tickets']                        = '工單';
$lang['invoice_report']                         = 'Invoice Report';
$lang['payment_modes_report']                   = 'Payment Modes (Transactions)';
$lang['customer_admins']                        = 'Customer Admins';
$lang['assign_admin']                           = 'Assign admin';
$lang['customer_admin_date_assigned']           = 'Date Assigned';
$lang['customer_admin_login_as_client_message'] = 'Hello %s. You are added as admin to this customer.';
$lang['ticket_form_validation_file_size']       = 'File size must be less than %s';
$lang['has_transactions_currency_base_change']  = 'Changing the base currency is possible only if there are no transactions recorded in that currency. Delete the transactions to change the base currency';
$lang['customers_sort_all']                     = 'All';

# Version 1.1.9
$lang['use_recaptcha_customers_area']    = 'Allow recaptcha on customers area (Login/Register)';
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
$lang['task_copy']                                = '複製';
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
$lang['proposal_mark_as']                         = 'Mark as %s';
$lang['kb_report_total_answers']                  = 'Total';
$lang['ticket_message_edit']                      = 'Edit';
$lang['invoice_files']                            = 'Invoice Files';
$lang['estimate_files']                           = 'Estimate Files';
$lang['proposal_files']                           = 'Proposal Files';
$lang['invoices_awaiting_payment']                = 'Invoices Awaiting Payment';
$lang['tasks_not_finished']                       = 'Tasks Not Finished';
$lang['outstanding_invoices']                     = 'Outstanding Invoices';
$lang['past_due_invoices']                        = 'Past Due Invoices';
$lang['paid_invoices']                            = 'Paid Invoices';
$lang['invoice_estimate_year']                    = 'Year';
$lang['task_stats_logged_hours']                  = 'Logged Hours';
$lang['leads_converted_to_client']                = 'Converted Leads';
$lang['task_assigned_from']                       = 'This task is assigned to you by %s';
$lang['new_note']                                 = '新注記';
$lang['my_tickets_assigned']                      = 'Tickets assigned to me';
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
$lang['milestone_description']                      = 'Description';
$lang['description_visible_to_customer']            = 'Show description to customer';
$lang['upcoming_tasks']                             = 'Upcoming Tasks';
$lang['payment_credit_card_number']                 = 'Card Number';
$lang['payment_credit_card_expiration_date']        = 'Expiration Date';
$lang['payment_billing_email']                      = 'Email';
$lang['submit_payment']                             = 'Submit Payment';
$lang['custom_field_disallow_customer_to_edit']     = 'Disalow customer to edit this field';
$lang['project_due_notice']                         = '該項目逾期 %s 天';
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
$lang['notify_project_members_status_change']               = 'Notify project members that project status is changed';
$lang['not_project_status_updated']                         = 'Project status updated from %s to %s';
$lang['ticket_not_found']                                   = 'Ticket not found';
$lang['project_not_found']                                  = 'Project not found';
$lang['export_project_data']                                = 'Export project data';
$lang['total_project_members']                              = 'Total Project Members';
$lang['total_project_files']                                = 'Files attached';
$lang['total_project_discussions_created']                  = 'Discussions created';
$lang['project_member']                                     = 'Member';
$lang['total_project_discussions_comments']                 = 'Total discussion comments';
$lang['staff_total_task_assigned']                          = 'Total tasks assigned';
$lang['staff_total_comments_on_tasks']                      = 'Comments on tasks';
$lang['project_members_overview']                           = 'Project members overview';
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
$lang['do_not_send_invoice_payment_email_template_contact'] = 'Dont send invoice payment recorded email to customer contacts';
$lang['no_preview_available_for_file']                      = 'No preview available for this file.';
$lang['project_activity_deleted_file_discussion_comment']   = 'File discussion comment deleted';
$lang['email_template_discussion_info']                     = 'This template is used for both project discussion comments emails. (files discussions and regular discussions)';
$lang['format_a4_portrait_size']                            = 'Portrait';
$lang['only_show_contact_tickets']                          = 'In customers area only show tickets related to the logged in contact (Primary contact not applied)';
$lang['cancel_overdue_reminders_invoice']                   = 'Prevent sending overdue reminders for this invoice';
$lang['customer_shipping_address_notice']                   = 'Dont fill shipping address informations if you wont use shipping address on customer invoices';
$lang['timesheets_overview']                                = 'Timesheets overview';
$lang['invoice_status_draft']                               = 'Draft';
$lang['save_as_draft']                                      = 'Save as Draft';
$lang['convert_and_save_as_draft']                          = 'Convert and save as draft';
$lang['convert']                                            = 'Convert';
$lang['exclude_invoices_draft_from_client_area']            = 'Exclude invoices with draft status from customers area';
$lang['invoice_draft_status_info']                          = 'This invoice is with status Draft, status will be auto changed when you send the invoice to the customer or mark as sent.';
$lang['task_info']                                          = 'Task info';
$lang['recurring_tasks']                                    = 'Recurring';
// don't translate these, already translated
$lang['task_repeat_every']                         = $lang['expense_repeat_every'];
$lang['task_recurring_months']                     = $lang['expense_recurring_months'];
$lang['task_recurring_years']                      = $lang['expense_recurring_years'];
$lang['task_recurring_days']                       = $lang['expense_recurring_days'];
$lang['task_recurring_weeks']                      = $lang['expense_recurring_weeks'];
$lang['todays_tasks']                              = 'Today\'s tasks';
$lang['payment_mode_invoices_only']                = 'Invoices Only';
$lang['payment_mode_expenses_only']                = 'Expenses Only';
$lang['task_no_checklist_items_found']             = 'Checklist items not found for this task';
$lang['task_no_description']                       = 'No description for this task';
$lang['expenses_reminders']                        = 'Reminders';
$lang['expense_set_reminder_title']                = 'Set expense reminder';
$lang['calendar_expense_reminder']                 = 'Expense Reminder';
$lang['recurring_task']                            = 'Recurring Task';
$lang['disable_email_from_being_sent']             = 'Disable this email from being sent';
$lang['not_sent_indicator']                        = 'Not Sent';
$lang['proposal_status_revised']                   = 'Revised';
$lang['customer_currency_change_notice']           = 'If the customer use other currency then the base currency make sure you select the approprite currency for this customer. Changing the currency is not possible after transactions are recorded.';
$lang['click_to_add_content']                      = 'Click here to add content';
$lang['related_to_project']                        = 'This %s is related to %s: %s';
$lang['back_to_lead']                              = 'Back to lead';
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
$lang['leads_report_converted_notice']                        = 'Only leads thats belongs in the default status Client will be taken as converted leads, if the leads belongs to the default status client and its not converted to customer will be still counted as converted lead';
$lang['payment_method']                                       = 'Payment Method';
$lang['payment_method_info']                                  = 'Some payment gateways support different/multiple payment methods like Credit Card, Paypal, Bank.';

# Version 1.2.7
$lang['dropbox_app_key']                                    = 'Dropbox APP Key';
$lang['project_invoice_select_all_expenses']                = 'Select all expenses';
$lang['role_update_staff_permissions']                      = '更新使用此角色的所有員工權限';
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
$lang['actions']                                            = '動作';
$lang['project_mark_as']                                    = 'Mark as %s';
$lang['todo_edit_title']                                    = 'Edit todo item';
$lang['additional_action_required']                         = 'Additional action required!';
$lang['project_mark_tasks_finished_confirm']                = 'Confirm';
$lang['project_marked_as_success']                          = 'Project marked as %s successfully';
$lang['project_marked_as_failed']                           = 'Failed to mark project as %s';
$lang['auto_assign_customer_admin_after_lead_convert']      = 'Auto assign as admin to customer after convert';
$lang['auto_assign_customer_admin_after_lead_convert_help'] = 'If this option is set to YES the staff member that converted lead to customer will be auto assigned as customer admin. NOTE: This option will apply only on staff members that dont have permission for customers VIEW';
$lang['auto_close_tickets_disable']                         = 'Set 0 to disable';
$lang['task_checklist_item_completed_by']                   = 'Completed by %s';
$lang['staff_email_signature_help']                         = 'If empty default email signature from settings will be used';
$lang['default_task_priority']                              = 'Default Priority';
$lang['project_send_created_email']                         = '建立專案後傳送 Email 通知';

# Version 1.2.8
$lang['show_transactions_on_invoice_pdf']            = 'Show invoice payments (transactions) on PDF';
$lang['bulk_actions']                                = '批次處理';
$lang['additional_filters']                          = 'Additional Filters';
$lang['expenses_available_to_bill']                  = 'Expenses available to bill';
$lang['bulk_action_customers_groups_warning']        = 'If you dont select any group all groups assigned to the selected customers will be removed.';
$lang['customer_attachments_show_in_customers_area'] = 'Show to customers area';
$lang['customer_attachments_show_notice']            = 'Only files uploaded from customer profile have ability to show/hide in customers area.';
$lang['customer_profile_files']                      = '檔案';
$lang['no_files_found']                              = '沒有找到檔案';
$lang['custom_field_column']                         = 'Grid (Bootstrap Column eq. 12) - Max is 12';
$lang['task_status']                                 = '狀態';
$lang['task_status_1']                               = '尚未開始';
$lang['task_status_2']                               = '等待反饋';
$lang['task_status_3']                               = '測試中';
$lang['task_status_4']                               = '處理中';
$lang['task_status_5']                               = '完成';
$lang['task_mark_as']                                = 'Mark as %s';
$lang['task_marked_as_success']                      = 'Task marked as %s successfully';
$lang['search_tasks']                                = 'Search Tasks';
$lang['tasks_kanban_limit']                          = 'Limit tasks kan ban rows per status';
$lang['show_on_invoice_on_pdf']                      = 'Show %s on Invoice PDF';
$lang['show_pay_link_to_invoice_pdf']                = 'Show Pay Invoice link to PDF (Not applied if invoice status is Cancelled)';
$lang['no_leads_found']                              = 'No Leads Found';
$lang['created_today']                               = 'Created Today';
$lang['total_tasks_deleted']                         = 'Total Tasks Deleted: %s';
$lang['total_tickets_delete']                        = 'Total Tickets Deleted: %s';
$lang['format_letter_portrait']                      = 'Letter Portrait';
$lang['format_letter_landscape']                     = 'Letter Landscape';
$lang['period_datepicker']                           = 'Period';
$lang['total_by_hourly_rate']                        = 'Total By Hourly Rate';
$lang['staff_hourly_rate']                           = $lang['task_hourly_rate'];
// &#37; is for % so the system can confuse for the original fields like %s
$lang['remove_tax_name_from_item_table_help'] = 'eq. Item TAX 15&#37; will be shown as 15&#37; without the tax name (Not applied if multiple taxes with the same name and tax percent found for item)';
$lang['back_to_project']                      = 'Back to Project';
$lang['view_kanban']                          = 'View Kan Ban';
$lang['invoice_is_overdue']                   = 'This invoice is overdue by %s days';

# Version 1.2.9
$lang['time_decimal']                            = 'Time (decimal)';
$lang['time_h']                                  = 'Time (h)';
$lang['proposal_number_prefix']                  = 'Proposal Number Prefix';
$lang['settings_number_padding_prefix']          = 'Number padding zero\'s for prefix formats <br /> <small>eq. If this value is 3 the number will be formatted: 005 or 025</small>';
$lang['this_week_payments']                      = 'This Week Payments';
$lang['last_week_payments']                      = 'Last Week Payments';
$lang['not_published_new_post']                  = 'published new post';
$lang['expense_name']                            = 'Name';
$lang['expense_name_help']                       = 'For personal usage';
$lang['adjustments']                             = 'Adjustments';
$lang['payments_received']                       = 'Payments Received';
$lang['not_lead_activity_created_proposal']      = 'Created new proposal - %s';
$lang['lead_title']                              = 'Position';
$lang['lead_address']                            = 'Address';
$lang['lead_city']                               = 'City';
$lang['lead_state']                              = 'State';
$lang['lead_country']                            = 'Country';
$lang['lead_zip']                                = 'Zip Code';
$lang['lead_is_public_yes']                      = '是';
$lang['lead_is_public_no']                       = '否';
$lang['lead_info']                               = 'Lead Informations';
$lang['lead_general_info']                       = 'General Informations';
$lang['lead_latest_activity']                    = 'Latest Activity';
$lang['item_description_new_lines_notice']       = 'New lines are not supported for item description. Use the item long description instead.';
$lang['estimates_report']                        = 'Estimates Report';
$lang['confirm']                                 = '確認';
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
$lang['active_customers']                        = 'Active Customers';
$lang['inactive_active_customers']               = 'Inactive Customers';
$lang['include_proposal_items_merge_field_help'] = 'Include proposal items with merge field anywhere in proposal content as %s';
$lang['all_data_synced_successfully']            = 'All data synced successfully';
$lang['sync_now']                                = 'Sync Now';
$lang['sync_data']                               = 'Sync Data';
$lang['sync_proposals_up_to_date']               = 'All proposals are up to date, nothing to sync';
$lang['proposal_sync_1_info']                    = 'All proposal data is stored separately for each proposal after creation. Updating the %s info wont affect previous created proposals for this %s.';
$lang['proposal_sync_2_info']                    = 'If you recently updated your %s info you can sync all new data to associated proposals. Here is a list of fields you can sync.';

# Version 1.3.0
$lang['expense_include_additional_data_on_convert'] = 'Include additional details to item long description taken from this expense.';

# Version 1.4.0
$lang['calendar_events_limit']                              = 'Calendar Events Limit (Month and Week View)';
$lang['show_page_number_on_pdf']                            = 'Show page number on PDF';
$lang['customer_active_inactive_help']                      = 'Wont be shown in dropdowns when creating new records';
$lang['item_groups']                                        = '群組';
$lang['item_group']                                         = 'Item Group';
$lang['item_group_name']                                    = '群組名稱';
$lang['new_item_group']                                     = '新群組';
$lang['show_setup_menu_item_only_on_hover']                 = 'Show setup menu item only when hover with mouse on main sidebar area';
$lang['internal_article']                                   = 'Internal Article';
$lang['expenses_created_from_this_recurring_expense']       = 'Created expenses from this recurring expense';
$lang['convert_to_task']                                    = 'Convert To Task';
$lang['next_invoice_date']                                  = 'Next Invoice Date: %s';
$lang['next_expense_date']                                  = 'Next Expense Date: %s';
$lang['invoice_recurring_from']                             = 'This invoice is created from recurring invoice with number: %s';
$lang['expense_recurring_from']                             = 'This expense is created from the following recurring expense: %s';
$lang['child_invoices']                                     = 'Child Invoices';
$lang['child_expenses']                                     = 'Child Expenses';
$lang['no_announcements']                                   = 'No Announcements';
$lang['unit']                                               = 'Unit';
$lang['permission_view_own']                                = '查看 (Own)';
$lang['permission_global']                                  = '公開';
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
$lang['estimate_invoiced']                                  = 'Invoiced';
$lang['file_date_uploaded']                                 = 'Date Uploaded';
$lang['allow_contact_to_delete_files']                      = 'Allow contacts to delete own files uploaded from customers area';
$lang['file']                                               = '檔案';
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
$lang['form_lang_validation']                               = '語言';
$lang['form_lang_validation_help']                          = 'For Validation Messages';
$lang['form_btn_submit_text']                               = 'Submit button text';
$lang['form_success_submit_msg']                            = 'Message to show after form is successfully submitted';
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
$lang['company_vat_number']                                 = 'VAT Number';
$lang['not_lead_assigned_from_form']                        = 'New lead is assigned to you';
$lang['not_lead_activity_assigned_from_form']               = 'Lead assigned to %s';
$lang['form_allow_duplicate']                               = 'Allow duplicate %s to be inserted into database?';
$lang['track_duplicate_by_field']                           = 'Prevent duplicate on field';
$lang['and_track_duplicate_by_field']                       = '+ field (leave blank to track duplicates only by 1 field)';
$lang['create_the_duplicate_form_data_as_task']             = 'Create duplicate %s data as task and assign to responsible staff member';
$lang['create_the_duplicate_form_data_as_task_help']        = 'Used for further review on the submission and take the necessary action';
$lang['currently_selected']                                 = 'Currently Selected';
$lang['search_ajax_empty']                                  = 'Select and begin typing';
$lang['search_ajax_placeholder']                            = 'Type to search...';
$lang['search_ajax_searching']                              = 'Searching...';
$lang['search_ajax_initialized']                            = 'Start typing to search';
$lang['lead_description']                                   = 'Description';
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
$lang['ticket_linked_to_project']                                = 'This ticket is linked to project: %s';
$lang['only_own_files_contacts']                                 = 'Contacts see only own files uploaded in customer area (files uploaded in customer profile)';
$lang['only_own_files_contacts_help']                            = 'If you share the file manually from customer profile to other contacts they wil be able to see the file.';
$lang['share_file_with']                                         = 'Share File With';
$lang['file_share_visibility_notice']                            = 'This file is not shared with contacts, toggle visibility again to reload';
$lang['share_file_with_show']                                    = 'This file is shared with: %s';
$lang['allow_primary_contact_to_view_edit_billing_and_shipping'] = 'Allow primary contact to view/edit billing & shipping details';
$lang['estimate_due_after']                                      = 'Estimate Due After (days)';

# Version 1.6.0
$lang['my_timesheets']                                   = '我的時間表';
$lang['today']                                           = '今天';
$lang['open_in_dropbox']                                 = 'Open In Dropbox';
$lang['show_primary_contact']                            = 'Show primary contact full name on %s';
$lang['view_members_timesheets']                         = 'View all timesheets';
$lang['priority']                                        = '優先事項';
$lang['fetch_from_google']                               = 'Fetch from google';
$lang['customer_fetch_lat_lng_usage']                    = 'Fill address, city and country before fetching to get best result.';
$lang['g_search_address_not_found']                      = '找不到地址，請重試';
$lang['proposals_report']                                = '提案報告';
$lang['staff_members_open_tickets_to_all_contacts_help'] = 'If staff member don\'t have permission for customers VIEW only will be able to create new tickets from admin area to customer contacts where is assigned as customer admin.';
$lang['staff_members_open_tickets_to_all_contacts']      = '允許工作人員向所有聯絡人開工單嗎？';
$lang['charts_based_report']                             = '基於圖表的報告';
$lang['responsible_admin']                               = 'Responsible admin';
$lang['tags']                                            = 'Tags';
$lang['tag']                                             = 'Tag';
$lang['customer_map_notice']                             = 'Add longitude and latitude in the customer profile to show the map here';
$lang['default_view']                                    = 'Default View';
$lang['day']                                             = '天';
$lang['agenda']                                          = 'Agenda';
$lang['timesheet_tags']                                  = '時間表標籤';
$lang['show_more']                                       = 'Show more';
$lang['show_less']                                       = 'Show less';
$lang['project_completed_date']                          = 'Completed Date';
$lang['language']                                        = 'Language';
$lang['this_week']                                       = '本周';
$lang['last_week']                                       = '上週';
$lang['this_month']                                      = '本月';
$lang['last_month']                                      = '上月';
$lang['no_description_project']                          = '此項目暫無說明';
$lang['sales_string']                                    = 'Sales';
$lang['no_project_members']                              = 'No members for this project';
$lang['search_by_tags']                                  = 'Use # + tagname to search by tags';
$lang['project_status_5']                                = 'Cancelled';

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
$lang['tax_1']                                    = 'Tax 1';
$lang['tax_2']                                    = 'Tax 2';
$lang['total_with_tax']                           = 'Total with tax';
$lang['new_task_auto_assign_current_member']      = 'Auto assign task creator when new task is created';
$lang['new_task_auto_assign_current_member_help'] = 'Not applied if task is linked to project and the creator is not project member';
$lang['copy_project_tasks_status']                = 'Tasks Status';
$lang['tasks_summary']                            = 'Tasks Summary';
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
$lang['vault_entry_visible_creator']              = 'Visible only to me (administrator are not excluded)';
$lang['vault_entry_visible_administrators']       = 'Visible only to administrators';
$lang['my_reminders']                             = 'My Reminders';
$lang['reminder_related']                         = 'Related to';
$lang['event_notification']                       = 'Notification';
$lang['days']                                     = 'Days';
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
$lang['this_year']                                           = 'This Year';
$lang['last_year']                                           = 'Last Year';
$lang['customer_statement']                                  = 'Statement';
$lang['customer_statement_for']                              = 'Customer Statement For %s';
$lang['account_summary']                                     = 'Account Summary';
$lang['statement_beginning_balance']                         = 'Beginning Balance';
$lang['invoiced_amount']                                     = 'Invoiced Amount';
$lang['amount_paid']                                         = 'Amount Paid';
$lang['statement_from_to']                                   = '%s To %s';
$lang['customer_statement_info']                             = 'Showing all invoices and payments between %s and %s';
$lang['balance_due']                                         = 'Balance Due';
$lang['statement_heading_date']                              = 'Date';
$lang['statement_heading_details']                           = 'Details';
$lang['statement_heading_amount']                            = 'Amount';
$lang['statement_heading_payments']                          = 'Payments';
$lang['statement_heading_balance']                           = 'Balance';
$lang['statement_invoice_details']                           = 'Invoice %s - due on %s';
$lang['statement_payment_details']                           = 'Payment (%s) to invoice %s';
$lang['statement_bill_to']                                   = 'To';
$lang['send_to_email']                                       = 'Send to Email';
$lang['statement_sent_to_client_success']                    = 'The statement is sent successfully to the client';
$lang['statement_sent_to_client_fail']                       = 'Problem while sending the statement';
$lang['view_account_statement']                              = 'View Account Statement';
$lang['text_not_recommended_for_servers_limited_resources']  = 'Not recommended if the server have limited resources. Eq shared hosting';
$lang['tasks_bull_actions_assign_notice']                    = 'If the task is linked to project and the staff member you are assigning the task to is not project member this staff will be auto added as member.';
$lang['company_information']                                 = 'Company Information';
$lang['ticket_form']                                         = 'Ticket Form';
$lang['ticket_form_subject']                                 = 'Subject';
$lang['ticket_form_name']                                    = 'Your name';
$lang['ticket_form_email']                                   = 'Email Address';
$lang['ticket_form_department']                              = 'Department';
$lang['ticket_form_message']                                 = 'Message';
$lang['ticket_form_priority']                                = 'Priority';
$lang['ticket_form_service']                                 = 'Service';
$lang['ticket_form_submit']                                  = 'Submit';
$lang['ticket_form_attachments']                             = 'Attachments';

$lang['success_submit_msg']                       = 'Thank you for contacting us. We will get back to you shortly.';
$lang['vault_entry_share_on_projects']            = 'Share this vault entry in projects with project members';
$lang['project_shared_vault_entry_login_details'] = 'View Customer Site Login Details';
$lang['iso_code']                                 = 'ISO Code';
$lang['estimates_not_invoiced']                   = 'Not Invoiced';
$lang['show_on_ticket_form']                      = 'Show on ticket form';
$lang['cancel_upload']                            = 'Cancel Upload';
$lang['show_table_export_button']                 = 'Show table export button';
$lang['show_table_export_all']                    = 'To all staff members';
$lang['show_table_export_admins']                 = 'Only to administrators';
$lang['show_table_export_hide']                   = 'Hide export button for all staff members';
$lang['task_created_by']                          = 'Created by %s';
$lang['validation_extension_not_allowed']         = 'File extension not allowed';
$lang['allow_staff_view_proposals_assigned']      = 'Allow staff members to view proposals where they are assigned to';
$lang['task_users_working_on_tasks_multiple']     = 'Currently %s are working on this task';
$lang['task_users_working_on_tasks_single']       = 'Currently %s is working on this task';

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
$lang['contract_copy']                                 = '複製';
$lang['contract_copied_successfully']                  = 'Contract copied successfully';
$lang['contract_copied_fail']                          = 'Failed to copy contract';
$lang['project_marked_as_finished_to_contacts']        = 'Send <b>Project Marked as Finished</b> email to customer contacts';
$lang['only_admins']                                   = 'Only administrators';
$lang['new_notification']                              = 'New Notification!';
$lang['enable_desktop_notifications']                  = 'Enable Desktop Notifications';
$lang['save_and_send']                                 = 'Save & Send';
$lang['private']                                       = 'Private';
$lang['task_created_at']                               = 'Created at %s';
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
$lang['overview']                                = 'Overview';
$lang['timer_started_change_status_in_progress'] = 'Change task status to In Progress on timer started (applicable only if task status is Not Started)';
$lang['company_info_format']                     = 'Company Information Format (PDF and HTML)';
$lang['customer_info_format']                    = 'Customer Information Format (PDF and HTML)';
$lang['custom_field_info_format_embed_info']     = 'Custom fields for %s can be easily embedded into PDF and HTML documents by adding the merge fields into the page format at the following page: %s';
$lang['transfer_lead_notes_to_customer']         = 'Transfer lead notes to customer profile';
$lang['authorized_signature_text']               = 'Authorized Signature';
$lang['show_pdf_signature_invoice']              = 'Show PDF Signature on Invoice';
$lang['show_pdf_signature_estimate']             = 'Show PDF Signature on Estimate';
$lang['signature']                               = 'Signature';
$lang['signature_image']                         = 'Signature Image';
$lang['insert_checklist_templates']              = 'Insert Checklist Templates';
$lang['save_as_template']                        = 'Save as Template';
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
$lang['exclude_inactive']                                  = 'Exclude Inactive';
$lang['disable_all']                                       = 'Disable All';
$lang['enable_all']                                        = 'Enable All';
$lang['reccuring_invoice_option_gen_and_send']             = 'Generate and Autosend the renewed invoice to the customer';
$lang['reccuring_invoice_option_gen_unpaid']               = 'Generate a Unpaid Invoice';
$lang['reccuring_invoice_option_gen_draft']                = 'Generate a Draft Invoice';
$lang['event_created_by']                                  = 'This event is created by %s';

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
$lang['checklist_templates']                                    = '任務清單模板';
$lang['emails_tracking']                                        = 'Emails Tracking';
$lang['no_tracked_emails_sent']                                 = 'No tracked emails sent';
$lang['tracked_emails_sent']                                    = 'Tracked Emails Sent';
$lang['tracked_email_date']                                     = '日期';
$lang['tracked_email_subject']                                  = '標題';
$lang['tracked_email_to']                                       = '收件人';
$lang['tracked_email_opened']                                   = '已開啟';
$lang['tracked_email_not_opened']                               = '未開啟';
$lang['not_viewed_yet']                                         = 'This %s is not viewed yet by the customer';
$lang['undo']                                                   = '復原';
$lang['sign_document_validation']                               = 'Please sign the document.';
$lang['document_customer_signature_text']                       = 'Signature (Customer)';
$lang['accept_identity_confirmation_and_signature_sign']        = 'Require digital signature and identity confirmation on accept';
$lang['legal_bound_text']                                       = 'Legal Bound Text';
$lang['e_signature_sign']                                       = '登入';
$lang['is_signed']                                              = 'Signed';
$lang['is_not_signed']                                          = 'Not Signed';
$lang['download']                                               = '下載';
$lang['view_pdf_in_new_window']                                 = '在新頁籤檢視 PDF';
$lang['show_pdf_signature_contract']                            = 'Show PDF Signature on Contract';
$lang['document_signed_successfully']                           = 'You have successfully signed this document';
$lang['document_signed_info']                                   = 'This document is signed by %s on %s from IP address %s';
$lang['keep_signature']                                         = 'Keep Customer Signature';
$lang['view_contract']                                          = '檢視合約';
$lang['summary']                                                = '摘要';
$lang['discussion']                                             = '討論';
$lang['general_information']                                    = 'General Information';
$lang['proposal_information']                                   = 'Proposal Information';
$lang['contract_comments']                                      = '評論';
$lang['not_contract_comment_from_client']                       = 'New comment from customer on contract %s ...';
$lang['contract_files']                                         = '合約檔案';
$lang['date_signed']                                            = 'Date Signed';
$lang['clear_signature']                                        = 'Clear Signature';
$lang['recurring_has_ended']                                    = 'This recurring %s has ended.';
$lang['cycles_remaining']                                       = 'Cycles Remaining';
$lang['cycles_infinity']                                        = 'Infinity';
$lang['recurring_total_cycles']                                 = 'Total Cycles';
$lang['cycles_passed']                                          = 'Passed %s';
$lang['api_key_not_set_error_message']                          = 'API key not configured, click on the following link to configure API key: %s';
$lang['subscription']                                           = '訂閱';
$lang['subscription_lowercase']                                 = '訂閱';
$lang['subscriptions']                                          = '訂閱';
$lang['tax_is_used_in_subscriptions_warning']                   = 'You can\'t update this tax because is used by subscriptions.';
$lang['credit_card']                                            = '信用卡';
$lang['update_credit_card']                                     = '更新信用卡';
$lang['credit_card_update_info']                                = 'Want to update the credit card that we have on file? Provide the new details here. Your card information will never directly touch our server.';
$lang['update_card_details']                                    = 'Update Card Details';
$lang['update_card_btn']                                        = 'Update Card';
$lang['subscription_name']                                      = 'Subscription Name';
$lang['subscriptions_description']                              = '訂閱說明';
$lang['subscribe']                                              = 'Subscribe';
$lang['subscription_date']                                      = '日期';
$lang['first_billing_date']                                     = 'First Billing Date';
$lang['allow_primary_contact_to_update_credit_card']            = 'Allow primary contact to update stored credit card token?';
$lang['show_subscriptions_in_customers_area']                   = 'Show subscriptions in customers area?';
$lang['show_subscriptions_in_customers_area_help']              = 'This option is valid only for the customer primary contact.';
$lang['subscription_sent_to_email_success']                     = 'Subscription sent to email successfully';
$lang['subscription_sent_to_email_fail']                        = 'Failed to sent subscription to email';
$lang['new_subscription']                                       = 'New Subscription';
$lang['subscription_status']                                    = '狀態';
$lang['next_billing_cycle']                                     = '下一個帳單週期';
$lang['subscription_not_subscribed']                            = 'Not Subscribed';
$lang['send_subscription']                                      = 'Send Subscription';
$lang['subscription_will_send_to_primary_contact']              = 'The subscription will be sent to the primary contact.';
$lang['subscription_resumed']                                   = 'Subscription is set to active successfully';
$lang['subscription_canceled']                                  = 'Subscription Cancelled Successfully';
$lang['no_credit_card_found']                                   = '找不到信用卡';
$lang['cancel_immediately']                                     = '立即取消';
$lang['cancel_at_end_of_billing_period']                        = 'Cancel At The End Of Billing Period';
$lang['view_subscription']                                      = 'View Subscription';
$lang['subscription_future']                                    = '未來的';
$lang['subscription_active']                                    = '有效的';
$lang['subscription_past_due']                                  = 'Past Due';
$lang['subscription_canceled']                                  = '已取消';
$lang['subscription_unpaid']                                    = '未付款';
$lang['billing_plan']                                           = 'Billing Plan';
$lang['upcoming_invoice']                                       = '即將來臨的發票';
$lang['resume_now']                                             = 'Resume Now';
$lang['subscription_not_yet_subscribed']                        = 'Customer is not yet subscribed to this subscription.';
$lang['subscription_is_canceled_no_resume']                     = 'This subscription is canceled and cannot be resumed.';
$lang['subscription_will_be_canceled_at_end_of_billing_period'] = 'This subscription will be canceled at the end of billing period.';
$lang['customer_successfully_subscribed_to_subscription']       = 'Thank you for subscribing to %s';
$lang['date_subscribed']                                        = 'Date Subscribed';
$lang['reports']                                                = '報表';
$lang['subscriptions_summary']                                  = 'Subscriptions Summary';
$lang['calendar_only_assigned_tasks']                           = 'Show only tasks assigned to the logged in staff member';
$lang['invoice_activity_subscription_payment_succeeded']        = 'Subscription Payment Succeeded, email sent to: %s';
$lang['mail_engine']                                            = '郵件引擎';
$lang['settings_require_client_logged_in_to_view_contract']     = 'Require client to be logged in to view contract';
$lang['privacy_policy']                                         = '隱私政策';
$lang['gdpr_terms_agree']                                       = 'I agree to the <a href="%s" target="_blank">Terms & Conditions</a>';
$lang['terms_and_conditions_validation']                        = 'You must accept the Terms & Conditions in order to continue.';
$lang['gdpr']                                                   = 'General Data Protection Regulation (GDPR)';
$lang['data_removal_request_sent']                              = 'Data removal request successfully sent';
$lang['gdpr_consents']                                          = 'Consents';
$lang['gdpr_consent']                                           = 'Consent';
$lang['gdpr_consent_purpose']                                   = 'Purpose';
$lang['gdpr_consent_opt_in']                                    = '加入';
$lang['gdpr_consent_opt_out']                                   = '退出';
$lang['gdpr_consent_agree']                                     = '我同意';
$lang['gdpr_consent_disagree']                                  = '我不同意';
$lang['view_consent']                                           = '查看同意書';
$lang['transfer_consent']                                       = 'Transfer Consent';
$lang['view_public_form']                                       = '檢視公開表單';
$lang['update_consent']                                         = '更新同意書';
$lang['consent_last_updated']                                   = 'Last Updated: %s';
$lang['showing_search_result']                                  = 'Showing search results for: %s';
$lang['per_page']                                               = 'Per Page';
$lang['allow_staff_view_invoices_assigned']                     = 'Allow staff members to view invoices where they are assigned to';
$lang['allow_staff_view_estimates_assigned']                    = 'Allow staff members to view estimates where they are assigned to';
$lang['gdpr_right_to_be_informed']                              = '被告知權利';
$lang['gdpr_right_of_access']                                   = '存取權利';
$lang['gdpr_right_to_data_portability']                         = 'Right to data portability';
$lang['gdpr_right_to_erasure']                                  = 'Right to erasure';
$lang['edit_my_information']                                    = '編輯我的資訊';
$lang['export_my_data']                                         = '匯出我的資料';
$lang['request_data_removal']                                   = '要求資料移除';
$lang['explanation_for_data_removal']                           = 'Explanation for data removal';
$lang['briefly_describe_why_remove_data']                       = '簡單說明為何你要移除資料';
$lang['date_published']                                         = '發布日期';
$lang['view']                                                   = '檢視';
$lang['customer_is_subscribed_to_subscription_info']            = 'The customer is subscribed to this subscription';
$lang['save_last_order_for_tables'] = 'Save last order for tables';
$lang['date_created']                                           = 'Date Created';

# Version 2.0.1
$lang['company_logo_dark']                                      = '暗色系公司標誌';
$lang['customers_register_require_confirmation']                = 'Require registration confirmation from administrator after customer register';
$lang['customer_requires_registration_confirmation']            = '需要註冊確認';
$lang['confirm_registration']                                   = '確認註冊';
$lang['customer_registration_successfully_confirmed']           = '客戶註冊成功確認';
$lang['customer_register_account_confirmation_approval_notice'] = 'Thank you for registering, your account is pending approval and will be confirmed soon.';
$lang['after_subscription_payment_succeeded'] = 'After subscription payment is succeeded';
$lang['subscription_option_send_invoice'] = '傳送發票';
$lang['subscription_option_send_payment_receipt'] = '傳送付款收據';
$lang['subscription_option_send_payment_receipt_and_invoice'] = 'Send Invoice and Payment Receipt';
$lang['subscription_option_do_nothing'] = '什麽都不做';
$lang['gdpr_not_enabled'] = 'GDPR 未啟用';
$lang['enable_gdpr'] = '啟用 GDPR';
$lang['gdpr_right_to_rectification'] = 'Right to rectification';
$lang['test_sms_config'] = '測試 SMS 設定';
$lang['test_sms_message'] = '測試訊息';
$lang['send_test_sms'] = '傳送測試 SMS';
$lang['gdpr_short'] = 'GDPR';
$lang['allow_non_admin_staff_to_delete_ticket_attachments'] = 'Allow non-admin staff members to delete ticket attachments';

# Version 2.1.0
$lang['contract_number']                                = '合約編號';
$lang['project_changing_status_recurring_tasks_notice'] = 'You are changing the status to {0}, all recurring tasks will be cancelled';
$lang['not_contract_signed']                            = 'Contract with subject %s has been signed by the customer';
$lang['the_number_sign']                                = '#';
$lang['not_new_ticket_reply']                           = '客戶回覆工單 - %s';
$lang['receive_notification_on_new_ticket_replies']     = '當客戶回覆工單時收到通知';
$lang['receive_notification_on_new_ticket_reply_help']  = 'All staff members which belong to the ticket department will receive notification when customer reply to a ticket';
$lang['payment_gateway_enable_paypal']                  = '啟用 PayPal 付款';
$lang['project_member']                                 = '專案成員';
$lang['contract_notes']                                 = '附註';
$lang['contract_add_note']                              = '加入附註';

# Version 2.1.1
$lang['frequency']         = '頻率';
$lang['frequency_every']   = 'Every %s';
$lang['last_invoice_date'] = 'Last Invoice Date';
$lang['next_invoice_date_list'] = 'Next Invoice Date';
$lang['enter_new_card']    = 'Enter New Card';

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
$lang['import_items']                                                = '匯入品項';
$lang['total_items_deleted']                                         = 'Total items deleted: %s';
$lang['billable_amount']                                             = '可收費金額';
$lang['last_child_invoice_date']                                     = 'Last Child Invoice Date';
$lang['good_morning']                                                = '早安';
$lang['good_afternoon']                                              = '午安';
$lang['good_evening']                                                = '晚安';
$lang['description_in_invoice_item']                                 = 'Include description in invoice item';
$lang['description_in_invoice_item_help']                            = 'Useful if you want to include additional information on the subscription invoice, e.q. what this subscription includes.';
$lang['ticket_reminders']                                            = '工單提醒';
$lang['ticket_set_reminder_title']                                   = '設定工單提醒';
$lang['calendar_ticket_reminder']                                    = '工單提醒';
$lang['email_verification_required']                                 = '需要信箱驗證';
$lang['email_verification_required_message']                         = '您必須驗證信箱才可存取全部功能。';
$lang['email_verification_required_message_mail']                    = 'We have sent you an email with verification instructions, if you haven\'t received the email please check the spam folder or click <a href="%s">here</a> to resend the verification mail.';
$lang['email_already_verified']                                      = '您的信箱已驗正';
$lang['invalid_verification_key']                                    = '無效的驗證碼';
$lang['verification_key_expired']                                    = '驗證碼已過期';
$lang['email_successfully_verified']                                 = '您的信箱已成功驗證';
$lang['email_successfully_verified_but_required_admin_confirmation'] = '您的信箱已成功驗證，待管理員手動確認後即可登入。';
$lang['email_verification_mail_sent_successully']                    = 'We sent you an email with verification instructions';
$lang['create_reminder']                                             = '建立提醒';
$lang['no_reminders_for_this_task']                                  = '沒有這項任務的提醒';
$lang['reminder_for']                                                = 'Reminder for %s on %s';
$lang['no_description_provided']                                     = '沒有提供說明';
$lang['pay_with_card']                                               = '以信用卡付款';
$lang['not_customer_uploaded_file']                                  = 'New File(s) Uploaded in Profile';

# Version 2.2.1
$lang['customer_files_info_message'] = 'Files from projects and tasks linked to the customer are not shown on this table.';
$lang['ticket_import_reply_only'] = 'Try to import only the actual ticket reply (without quoted/forwarded message)';
$lang['learn_more'] = '瞭解更多';
$lang['sales_item']                  = '品項';

# Version 2.3.0

$lang['modules']                    = '模組';
$lang['module']                     = '模組';
$lang['module_description']         = '說明';
$lang['module_activate']            = '啟用';
$lang['module_deactivate']          = '未啟用';
$lang['module_uninstall']           = '反安裝';
$lang['module_upgrade_database']    = '升級資料庫';
$lang['module_settings']            = '設定';
$lang['module_version']             = '版本 %s';
$lang['module_by']                  = 'By %s';
$lang['staff_which_are_using_role'] = '使用此角色的員工';
$lang['copy']                       = '拷貝';
$lang['read_more']                  = '閱讀更多';
$lang['show_less']                  = '顯示較少';
$lang['project_progress_text']      = '專案進度';
$lang['timer_not_stopped_yet']                   = '這個計時器還未停止';
$lang['refunds']                                 = '退款';
$lang['refund']                                  = '退款';
$lang['refund_amount']                           = '退款金額';
$lang['not_refunds_found']                       = '沒有退款';
$lang['refunds_applied_cant_delete_credit_note'] = 'This credit note has refunds applied, you need first to delete the refunds in order to delete the credit note.';

# Version 2.3.2
$lang['create_recurring_from_child_error_message'] = 'You cannot set this %s as recurring because this %s is child from another recurring %s.';
$lang['statement_credit_note_refund']              = 'Credit Note Refund - %s';
$lang['no_validation']                             = 'No Validation';
$lang['lead_unique_validation_on']                 = 'Perform validation for duplicate lead on the following fields:';
$lang['phonenumber_exists']                        = '電話號碼已經存在';
$lang['company_exists']                            = '公司已經存在';
$lang['website_exists']                            = '網站已經存在';
$lang['send_payment_receipt_to_client']            = '傳送付款收據給客戶';
$lang['payment_sent_successfully']                 = '付款收據傳送成功。';
$lang['payment_sent_failed']                       = '付款收據傳送失敗。';

# Version 2.3.5
$lang['tags_update_replace_warning'] = 'Some tags are not updated because the name of the tag already exist';
$lang['attach_statement']            = 'Attach Customer Statement';

# Version 2.4.0
$lang['delete_credit_card']               = 'Delete Card';
$lang['delete_credit_card_info']          = 'You cannot delete the credit card as you have active subscriptions.';
$lang['credit_card_successfully_deleted'] = 'Credit card successfully deleted.';
$lang['subscription_incomplete']          = 'Incomplete';
$lang['subscription_incomplete_expired']  = 'Incomplete Expired';
$lang['credit_card_short']                = 'Card';
$lang['webhook_created']                  = 'Webhook created successfully.';
$lang['subscriptions_terms_info']         = 'Enter customer terms & conditions to be displayed to the customer before subscribe to the subscription.';
$lang['subscription_complete_payment']    = 'Complete Payment';
$lang['subscription_is_subscription_is_expired'] = 'This subscription is expired.';
$lang['subscription_plan_currency_does_not_match'] = 'Selected plan currency does not match currency selected below.';
$lang['subscription_first_billing_date_info'] = 'Leave blank to use date when the customer is subscribed to the subscription. This field must be future date, if you select date and the date is passed but customer is not yet subscribed, the date when the customer will subscribe will be used.';
$lang['stripe_subscription_select_plan'] = 'Select Stripe plan';

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
$lang['recaptcha_ignore_ips']               = 'Ignored IP Addresses';
$lang['recaptcha_ignore_ips_info']          = 'Enter coma separated IP addresses that you want the reCaptcha to skip validation.';
$lang['show_task_reminders_on_calendar']    = 'Task Reminders';
$lang['contracts_about_to_expire']          = 'Contracts Expiring Soon';
$lang['no_contracts_about_to_expire']       = 'There are no contracts that are going to expire in the next %s days.';
$lang['lead_value']                         = 'Lead value';
$lang['lead_value_tooltip']                 = 'Base currency will be used.';
$lang['leads_dt_lead_value']                = 'Lead Value';
$lang['leads_canban_lead_value']            = 'Lead Value: %s';
$lang['lead_add_edit_lead_value']           = 'Lead Value';

# Version 2.6.0
$lang['gantt_view_day'] = 'Days View';
$lang['gantt_view_week'] = 'Weeks View';
$lang['gantt_view_month'] = 'Months View';
$lang['gantt_view_year'] = 'Years View';

# Version 2.7.0
$lang['hour_of_day_perform_tasks_reminder_notification_help'] = '24 hours format eq. 9 for 9am or 15 for 3pm. It is used for recurring Task, Task reminders etc.';
$lang['clients_nav_contacts']                                 = '聯絡人';
$lang['clients_my_contacts']                                  = '聯絡人';
$lang['clients_my_contact']                                   = '聯絡人';
$lang['new_contact']                                          = '建立聯絡人';
$lang['customer_contact']                                     = '我的聯絡人';
$lang['clients_contact_added']                                = '聯絡人建立成功';
$lang['clients_contact_updated']                              = '聯絡人更新成功';
$lang['allow_primary_contact_to_manage_other_contacts']       = '允許主要聯絡人管理其他客戶聯絡人';
$lang['contact_form_validation_is_unique']                    = 'Contact with this {field} already exists in our system';
$lang['invoice_number_not_applied_on_draft']                  = 'If the invoice is saved as draft, the number won\'t be applied, instead, the next invoice number will be given when the invoice is sent to the customer or is marked as sent.';

$lang['two_factor_authentication_disabed']                    = 'Disabled';
$lang['enable_google_two_factor_authentication']              = 'Enable Google Authenticator';
$lang['set_google_two_factor_authentication_failed']          = 'Saving authentication failed, please try again';
$lang['enter_two_factor_auth_code_from_mobile']               = 'Enter authentication code from the Authenticator app';
$lang['staff_two_factor_authentication']                      = 'Two Factor Authentication';
$lang['google_authentication_code']                           = 'Enter code from Authenticator app';
$lang['set_two_factor_authentication_successful']             = 'Successfully updated two factor authentication settings';
$lang['set_two_factor_authentication_failed']                 = 'Could not update two factor authentication settings';
$lang['google_2fa_code_valid']                                = 'Successfuly verified the authentication';
$lang['google_2fa_code_invalid']                              = 'Invalid authentication code entered, try again.';
$lang['google_2fa_scan_qr_guide']                             = 'Scan the QR below with the Google Authenticator app on your mobile device, after that fill in the field below with the code generated in the app';
$lang['google_2fa_manul_input_secret']                        = 'Secret key for manual input';

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
$lang['projects_chart']              = '專案圖表';
$lang['overdue_by_days']             = 'OVERDUE BY %s DAYS';

$lang['two_checkout_payment_processing'] = 'Payment is been processed,you will be notified if successful';
$lang['two_checkout_payment_cancelled']  = 'Payment Cancelled';
$lang['two_checkout_merchant_code']      = 'Merchant Code';
$lang['two_checkout_secret_Key']         = 'Secret Code';
$lang['two_gateway_webhook_notice']      = 'The IPN Endpoint for 2Checkout is ( %s )';
$lang['something_went_wrong']            = 'Something went wrong. Try again';
$lang['imap_folder']                     = 'Folder';
$lang['retrieve_folders']                = 'Retrieve Folders';
$lang['email_to_ticket_config']          = 'Email to 工單 configuration';


# Version 2.8.0
$lang['enable_support_menu_badges']     = 'Enable support menu item badge';
$lang['item_copy_success']              = 'Item copied successfully';
$lang['item_copy_fail']                 = 'Failed to copy item';
$lang['attach_invoice_to_payment_receipt_email'] = 'Attach invoice PDF when sending payment receipt to email';

$lang['estimate_request']                       = '估價單';
$lang['estimate_requests']                      = '估價單';
$lang['estimate_request_form']                  = 'Estimate request form';
$lang['acs_estimate_request']                   = '估價單';
$lang['acs_estimate_request_forms']             = '表單';
$lang['estimate_request_forms']             = '估價表單';
$lang['estimate_request_notify_staff']          = 'Staff Members to Notify';
$lang['estimate_request_notify_when_submitted']     = 'Notify when estimate request submitted';
$lang['estimate_request_assignee']              = 'Responsible (Assignee)';
$lang['estimate_request_notify_roles']          = 'Roles to Notify';
$lang['custom_field_estimate_request']          = 'Estimate request';
$lang['new_estimate_request_submitted_from_form']     = 'New Estimate Request submitted from Form - %s';
$lang['acs_estimate_request_statuses_submenu']  = '狀態';
$lang['estimate_request_dt_email']              = 'Email';
$lang['estimate_request_dt_assigned']           = 'Assigned';
$lang['estimate_request_dt_status']             = 'Status';
$lang['estimate_request_dt_datecreated']        = 'Created';
$lang['estimate_request_attachments']           = 'Attachments';
$lang['estimate_request_new_status']            = 'New Status';
$lang['estimate_request_status_table_name']     = 'Status Name';
$lang['estimate_request_table_total']           = 'Total Request: %s';
$lang['estimate_request_statuses_not_found']    = 'No Estimate Request statuses found';
$lang['estimate_request_status_add_edit_name']  = 'Status Name';
$lang['estimate_request_status_color']          = 'Color';
$lang['estimate_request_status_add_edit_order'] = 'Status Order';
$lang['estimate_request_status']                = 'Status';
$lang['estimate_request_date_added']            = 'Date Created';
$lang['estmate_request_tags_updated']           = 'Tags Updated';
$lang['not_estimate_request_activity_status_updated'] = '%s updated estimate request status from %s to %s';
$lang['estimate_request_lowercase']             = 'estimate request';
$lang['estimate_request_form_email_field_is_required']     = 'Email field is required to be added on the form';
$lang['estimate_request_form_email_field_set_to_required'] = 'Mark the email field as required';
$lang['not_delete_estimate_request_default_status']        = 'Cannot delete core estimate request status';
$lang['mark_estimate_request_as']               = 'Mark as %s';
$lang['estimate_request_updated']              = 'Estimate Request Updated';
$lang['convert_estimate_request']               = 'Convert Estimate Request';
$lang['estimate_request_client_firstname']      = 'First Name';
$lang['estimate_request_client_lastname']       = 'Last Name';
$lang['estimate_request_email']                 = 'Email';
$lang['estimate_request_for_lead']              = 'Lead';
$lang['estimate_request_for_customer']          = 'Customer';
$lang['estimate_request_related']               = 'Related to';
$lang['estimate_request_client_created_success'] = 'Estimate Request Customer Created';
$lang['estimate_request_assigned']              = '指派員工';
$lang['not_estimate_request_activity_assigned_updated']       = 'Estimate Request Assigned to %s';
$lang['estimate_request_status_lowercase']      = 'estimate request status';
$lang['estimate_request_assigned_to_staff']     = 'Estimate Request has been assigned to you';

$lang['activity_due_reminder_is_sent']          = '%s sent invoice becoming due reminder';
$lang['invoice_due_notice_before']              = 'Send due reminder X days before due date';
$lang['overdue_notices']                        = 'Overdue Notices';
$lang['invoice_overdue_notices_info']           = 'Overdue notices are sent when the invoice becomes overdue.';
$lang['due_reminders']                          = 'Due Reminders';
$lang['due_reminders_for_invoices_info']        = 'Due reminders are sent to unpaid and partially paid invoices as reminder to the customer to pay the invoice before is due.';
$lang['expenses_list_made_payment_by']          = 'Made Payment by %s';

# Version 2.8.2
$lang['hide_task_checklist_items_completed']          = '隱藏完成的項目';
$lang['show_task_checklist_items_completed']          = '顯示完成的項目 %s';
$lang['task_checklist_assign']                        = '指派員工';
$lang['task_checklist_assigned']                      = '已指派 %s';

# Version 2.8.3
$lang['projects_send_contact_notification']                   = '發送聯絡人通知';
$lang['project_send_all_contacts_with_notifications_enabled'] = 'To all contacts with notifications for projects enabled';
$lang['project_do_not_send_contacts_notifications']           = '不發送通知';
$lang['project_send_specific_contacts_with_notification']     = '具體聯絡人';
$lang['project_contacts_to_notify']                           = '選擇要通知的聯絡人';
$lang['contract_signed_by']                                   = 'Signer Name';
$lang['contract_signed_date']                                 = 'Signed Date';
$lang['contract_signed_ip']                                   = 'IP Address';
$lang['show_estimate_request_in_customers_area']              = 'Show Estimate request link in customers area?';
$lang['customers_estimate_request_link_text']                 = 'Request Estimate';
$lang['total_expenses_deleted']                               = 'Total Expenses Deleted: %s';
$lang['estimate_convert_to_project']                          = 'Convert to Project';
$lang['estimate_items_convert_to_tasks']                      = 'Items that will be converted to tasks';

# Version 2.9.0
$lang['home_payment_records']                                 = 'Payment Records';
$lang['weekly']                                               = 'Weekly';
$lang['monthly']                                              = 'Monthly';
$lang['failed_to_update_timesheet']                           = 'Timesheet was not updated';
$lang['permission_create_timesheets']                         = '建立時間表';
$lang['permission_edit_timesheets']                           = '編輯時間表(公開)';
$lang['permission_edit_own_timesheets']                       = '編輯自己時間表';
$lang['permission_delete_timesheets']                         = '刪除時間表 (公開)';
$lang['permission_delete_own_timesheets']                     = '刪除自己時間表';
$lang['permission_edit_milestones']                           = '編輯里程碑';
$lang['permission_delete_milestones']                         = '刪除里程碑';
$lang['add_timesheet'] 										                    = '建立時間表';
$lang['submit_button_bg_color']                               = 'Submit button background color';
$lang['submit_button_text_color']                             = 'Submit button background text';
$lang['automatically_assign_ticket_to_first_staff_responding'] = 'Automatically assign the ticket to the first staff that post a reply?';

# Version 2.9.1
$lang['contract_signed_not_all_fields_editable'] = 'This contract is signed, hence not all fields can be edited until the signature is removed.';
$lang['form_submit_success_action']              = 'What should happen after a visitor submits this form';
$lang['form_submit_success_display_thank_you']   = 'Display thank you messsage';
$lang['form_submit_success_redirect_to_website'] = 'Redirect to another website';
$lang['form_submit_website_url']                 = 'Website URL';

