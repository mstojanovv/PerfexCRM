<?php
# Version 1.0.0
#
# General
$lang['id']                   = 'ID';
$lang['name']                 = '名前';
$lang['options']              = 'オプション';
$lang['submit']               = '保存';
$lang['added_successfully']    = '%s追加成功';
$lang['updated_successfully']  = '%sアップデート完了';
$lang['edit']                 = '%s編集';
$lang['add_new']              = '新しく%sの追加';
$lang['deleted']              = '%s排除';
$lang['problem_deleting']     = '%s問題削除';
$lang['is_referenced']        = 'IDの%sは既に使用済み';
$lang['close']                = '閉める';
$lang['send']                 = '送る';
$lang['cancel']               = 'キャンセル';
$lang['go_back']              = '戻る';
$lang['error_uploading_file'] = 'エラーアップローディングファイル';
$lang['load_more']            = 'もっとロードする';
$lang['cant_delete_default']  = 'デフォルトの％を削除できません';

# Invoice General
$lang['invoice_status_paid']                = '支払い済み';
$lang['invoice_status_unpaid']              = '未払い';
$lang['invoice_status_overdue']             = '延滞請求書';
$lang['invoice_status_not_paid_completely'] = '一部支払い済み';

$lang['invoice_pdf_heading'] = '請求書';

$lang['invoice_table_item_heading']            = '製品';
$lang['invoice_table_quantity_heading']        = '数量';
$lang['invoice_table_rate_heading']            = '価格';
$lang['invoice_table_tax_heading']             = '税金';
$lang['invoice_table_amount_heading']          = '総量';
$lang['invoice_subtotal']                      = '小計';
$lang['invoice_adjustment']                    = '調整';
$lang['invoice_total']                         = '合計金額';
$lang['invoice_vat']                           = 'VAT数';
$lang['invoice_bill_to']                       = '支払先';
$lang['invoice_data_date']                     = '請求先住所:';
$lang['invoice_data_duedate']                  = '期日:';
$lang['invoice_received_payments']             = '取引';
$lang['invoice_no_payments_found']             = 'こちらの請求書の支払は見つかりません';
$lang['invoice_note']                          = '注釈:';
$lang['invoice_payments_table_number_heading'] = '支払い #';
$lang['invoice_payments_table_mode_heading']   = '支払モード';
$lang['invoice_payments_table_date_heading']   = '日付';
$lang['invoice_payments_table_amount_heading'] = '総量';


# Announcements
$lang['announcement']                 = '発表';
$lang['announcement_lowercase']       = '発表';
$lang['announcements']                = '発表';
$lang['announcements_lowercase']      = '発表';
$lang['new_announcement']             = '新しい発表';
$lang['announcement_name']            = '題目';
$lang['announcement_message']         = '伝言';
$lang['announcement_show_to_staff']   = '社員に見せる';
$lang['announcement_show_to_clients'] = 'クライアントに見せる';
$lang['announcement_show_my_name']    = '私の名前を見せる';

# Clients
$lang['clients']                               = '顧客';
$lang['client']                                = '顧客';
$lang['new_client']                            = '新しい顧客';
$lang['client_lowercase']                      = '顧客';
$lang['client_delete_tooltip']                 = '全ての顧客情報は消去されます。契約、チケット、注意。 NB:インボイスが検索された際には、顧客は削除されません。このインボイス番号を確保するためには、こちらのインボイスを他の顧客にあてがう必要があります。';
$lang['customer_delete_invoices_warning']      = 'こちらの顧客はアカウントにインボイスがあります。こちらの顧客を削除する事は出来ません。将来的に全てのインボイスを他の顧客に変更し、削除して下さい。';
$lang['client_firstname']                      = '名';
$lang['client_lastname']                       = '姓';
$lang['client_email']                          = 'メール';
$lang['client_company']                        = '会社';
$lang['client_vat_number']                     = 'VAT 数';
$lang['client_address']                        = '住所';
$lang['client_city']                           = '都市';
$lang['client_postal_code']                    = '郵便番号';
$lang['client_state']                          = '州';
$lang['client_password']                       = 'パスワード';
$lang['client_password_change_populate_note']  = 'NB: こちらのフィールドに追加する場合、こちらの問い合わせ先のパスワードは変更します。';
$lang['client_password_last_changed']          = 'パスワードの最終変更:';
$lang['login_as_client']                       = 'クライアントとしてログイン';
$lang['client_invoices_tab']                   = '請求書';
$lang['contracts_invoices_tab']                = '契約';
$lang['contracts_tickets_tab']                 = 'チケット';
$lang['contracts_notes_tab']                   = '注釈';
$lang['client_invoice_number_table_heading']   = '請求書 #';
$lang['client_invoice_date_table_heading']     = '日付';
$lang['client_invoice_due_date_table_heading'] = '期日';
$lang['client_string_table_heading']           = '顧客';
$lang['client_amount_table_heading']           = '総量';
$lang['client_status_table_heading']           = 'ステータス';
$lang['note_description']                      = '記述注意';

$lang['client_string_contracts_table_heading']      = '顧客';
$lang['client_start_date_contracts_table_heading']  = '開始日';
$lang['client_end_date_contracts_table_heading']    = '終了日';
$lang['client_description_contracts_table_heading'] = '記述';
$lang['client_do_not_send_welcome_email']           = 'ウエルカムメールを送らないこと';

$lang['clients_notes_table_description_heading'] = '記述';
$lang['clients_notes_table_addedfrom_heading']   = 'ここから追加';
$lang['clients_notes_table_dateadded_heading']   = '日付追加';
$lang['clients_list_full_name']   = 'フルネーム';
$lang['clients_list_last_login']  = '最終ログイン';

# Contracts
$lang['contracts']                = '契約';
$lang['contract']                 = '契約';
$lang['new_contract']             = '新しい契約';
$lang['contract_lowercase']       = '契約';
$lang['contract_start_date']      = '開始日';
$lang['contract_end_date']        = '終了日';
$lang['contract_subject']         = '題目';
$lang['contract_description']     = '記述';
$lang['contract_subject_tooltip'] = '題目は顧客からも見ることができます';
$lang['contract_client_string']   = '顧客';
$lang['contract_attach']          = '文書の添付';

$lang['contract_list_client']     = '顧客';
$lang['contract_list_subject']    = '題目';
$lang['contract_list_start_date'] = '開始日';
$lang['contract_list_end_date']   = '終了日';

# Currencies
$lang['currencies']           = '通貨';
$lang['currency']             = '通貨';
$lang['new_currency']         = '新しい通貨';
$lang['currency_lowercase']   = '通貨';
$lang['base_currency_set']    = 'こちらがあなたの基準通貨です';
$lang['make_base_currency']   = '基準通貨作成';
$lang['base_currency_string'] = '基準通貨';

$lang['currency_list_name']   = '名前';
$lang['currency_list_symbol'] = '記号';


$lang['currency_add_edit_description'] = '通貨コード';
$lang['currency_add_edit_rate']        = '記号';

$lang['currency_edit_heading'] = '通貨編集';
$lang['currency_add_heading']  = '新しい通貨の追加';


# Department
$lang['departments']          = '部';
$lang['department']           = '部';
$lang['new_department']       = '新しい部';
$lang['department_lowercase'] = '部';

$lang['department_name']             = '部の名前';
$lang['department_email']            = '部のメール';
$lang['department_hide_from_client'] = 'クライアントから非表示にするか?';
$lang['department_list_name']        = '名前';

# Email Templates
$lang['email_templates']                        = 'メールテンプレート';
$lang['email_template']                         = 'メールテンプレート';
$lang['email_template_lowercase']               = 'メールテンプレート';
$lang['email_templates_lowercase']              = 'メールテンプレート';
$lang['email_template_ticket_fields_heading']   = 'チケット';
$lang['email_template_invoices_fields_heading'] = '請求書';
$lang['email_template_clients_fields_heading']  = '顧客';

$lang['template_name']                                      = 'テンプレート名';
$lang['template_subject']                                   = '題目';
$lang['template_fromname']                                  = '名前から';
$lang['template_fromemail']                                 = 'メールから';
$lang['send_as_plain_text']                                 = '平文として送る';
$lang['email_template_disabled']                             = '無効にする';
$lang['email_template_email_message']                       = 'メールのメッセージ';
$lang['available_merge_fields']                             = 'フィールドの合併が可能である';
# Home
$lang['dashboard_string']                                   = 'ダッシュボード';
$lang['home_latest_todos']                                  = '最終やるべき事';
$lang['home_no_latest_todos']                               = 'やるべき事は見つかりません';
$lang['home_latest_finished_todos']                         = '最新のやり終えた\’sすべき事';
$lang['home_no_finished_todos_found']                       = 'やり終えた事は見つかりません';
$lang['home_todo_heading']                                  = 'すべき項目';
$lang['home_tickets_awaiting_reply_by_department']          = 'チケット待ちを部場が返事をする';
$lang['home_tickets_awaiting_reply_by_status']              = 'チケット待ちをステータスにより返事をする';
$lang['home_this_week_events']                              = '今週のイベント';
$lang['home_upcoming_events_next_week']                     = '来週のイベント';
$lang['home_event_added_by']                                = '～による追加イベント';
$lang['home_public_event']                                  = '公共イベント';
$lang['home_weekly_payment_records']                        = '週一回の支払い記録';
$lang['home_weekend_ticket_opening_statistics']             = '週ごとのチケットのオープニング統計値';
# Newsfeed
$lang['whats_on_your_mind']                                 = 'ドキュメント、アイディアの共有..';
$lang['new_post']                                           = 'ポスト';
$lang['newsfeed_upload_tooltip']                            = 'ヒント：アップロードするためにファイルをドラッグアンドドロップする';
$lang['newsfeed_all_departments']                           = '全ての部';
$lang['newsfeed_pin_post']                                  = '投稿ポストを貼り出す';
$lang['newsfeed_unpin_post']                                = '投稿ポストを貼り出さない';
$lang['newsfeed_delete_post']                               = '削除';
$lang['newsfeed_published_post']                            = '公開された';
$lang['newsfeed_you_like_this']                             = 'あなたはこれが好きである';
$lang['newsfeed_like_this']                                 = 'これが好きである';
$lang['newsfeed_one_other']                                 = 'その他方';
$lang['newsfeed_you']                                       = 'あなた';
$lang['newsfeed_and']                                       = 'そして';
$lang['newsfeed_you_and']                                   = 'あなたと';
$lang['newsfeed_like_this_saying']                          = 'このような';
$lang['newsfeed_unlike_this_saying']                        = 'これとは違い';
$lang['newsfeed_show_more_comments']                        = 'コメントをもっと見せる';
$lang['comment_this_post_placeholder']                      = 'この投稿ポストにコメントする..';
$lang['newsfeed_post_likes_modal_heading']                  = 'この投稿ポストが好きな同僚';
$lang['newsfeed_comment_likes_modal_heading']               = 'このコメントが好きな同僚';
$lang['newsfeed_newsfeed_post_only_visible_to_departments'] = 'この投稿ポストは下記の部のみ一覧可能である：%';
# Invoice Items
$lang['invoice_items']                                      = '請求書のアイテム';
$lang['invoice_item']                                       = '請求書のアイテム';
$lang['new_invoice_item']                                   = '新しい請求書のアイテム';
$lang['invoice_item_lowercase']                             = '請求書のアイテム';

$lang['invoice_items_list_description'] = '種類';
$lang['invoice_items_list_rate']        = '価格';
$lang['invoice_items_list_tax']         = '税金';

$lang['invoice_item_add_edit_description'] = '種類';
$lang['invoice_item_add_edit_rate']        = '価格';
$lang['invoice_item_add_edit_tax']         = '税金';
$lang['invoice_item_add_edit_tax_select']  = '税金を選択する';

$lang['invoice_item_edit_heading'] = 'アイテムを編集する';
$lang['invoice_item_add_heading']  = '新しいアイテムを追加する';

# Invoices


$lang['invoices']                       = '請求書';
$lang['invoice']                        = '請求書';
$lang['invoice_lowercase']              = '請求書';
$lang['create_new_invoice']             = '新しい請求書を作成する';
$lang['view_invoice']                   = '請求書を見る';

$lang['invoice_payment_recorded']       = '請求書の支払いは記録されました';
$lang['invoice_payment_record_failed']  = '請求書の支払い記録に失敗しました';
$lang['invoice_sent_to_client_success'] = 'この請求書はクライアントに無事に送付されました';
$lang['invoice_sent_to_client_fail']    = 'この請求書を送付中に問題発生';
$lang['invoice_reminder_send_problem']  = '請求書の期限超過のリマインダーを送信中に問題が発生しました';
$lang['invoice_overdue_reminder_sent']  = '請求書の期限超過のリマインダーが送られました';

$lang['invoice_details']              = '請求書の詳細';
$lang['invoice_view']                 = '請求書を見る';
$lang['invoice_select_customer']      = '顧客';
$lang['invoice_add_edit_number']      = '請求書の番号';
$lang['invoice_add_edit_date']        = '請求書の日付';
$lang['invoice_add_edit_duedate']     = '期日';
$lang['invoice_add_edit_currency']    = '通貨';
$lang['invoice_add_edit_client_note'] = 'クライアント注釈';
$lang['invoice_add_edit_admin_note']  = '管理上の注釈';

$lang['invoice_add_edit_search_item']  = 'アイテムを捜索する';
$lang['invoices_toggle_table_tooltip'] = 'Toggle Table';

$lang['edit_invoice_tooltip']                   = '請求書の編集';
$lang['delete_invoice_tooltip']                 = '請求書を削除。NB:この請求書に関する全ての支払いは削除されます。';
$lang['invoice_sent_to_email_tooltip']          = 'メールに送る';
$lang['invoice_already_send_to_client_tooltip'] = 'この請求書はクライアント%sに送られました';
$lang['send_overdue_notice_tooltip']            = '未払い通知を送る';
$lang['invoice_view_activity_tooltip']          = '活動記録';
$lang['invoice_record_payment']                 = '支払記録';

$lang['invoice_send_to_client_modal_heading']    = 'クライアントに請求書を送る';
$lang['invoice_send_to_client_attach_pdf']       = 'PDF 請求書添付';
$lang['invoice_send_to_client_preview_template'] = 'メールテンプレートのプレビューする';

$lang['invoice_dt_table_heading_number']  = '請求書 #';
$lang['invoice_dt_table_heading_date']    = '日付';
$lang['invoice_dt_table_heading_client']  = '顧客';
$lang['invoice_dt_table_heading_duedate'] = '期日';
$lang['invoice_dt_table_heading_amount']  = '価格';
$lang['invoice_dt_table_heading_status']  = 'ステータス';

$lang['record_payment_for_invoice']              = '支払元の記録';
$lang['record_payment_amount_received']          = '量を受取りました';
$lang['record_payment_date']                     = '支払日';
$lang['record_payment_leave_note']               = '注釈を残す';
$lang['invoice_payments_received']               = '支払を受取りました';
$lang['invoice_record_payment_note_placeholder'] = '管理上の注釈';
$lang['no_payments_found']                       = 'こちらの請求書の支払いは見つかりません';
$lang['invoice_email_link_text']                 = '請求書を見る';

# Payments
$lang['payments']                             = '支払い';
$lang['payment']                              = '支払い';
$lang['payment_lowercase']                    = '支払い';
$lang['payments_table_number_heading']        = '支払い #';
$lang['payments_table_invoicenumber_heading'] = '請求書 #';
$lang['payments_table_mode_heading']          = '支払い方法';
$lang['payments_table_date_heading']          = '日付';
$lang['payments_table_amount_heading']        = '価格';
$lang['payments_table_client_heading']        = '顧客';
$lang['payment_not_exists']                   = 'この支払いは存在しない';

$lang['payment_edit_for_invoice']     = '請求書への支払い';
$lang['payment_edit_amount_received'] = '量を受取りました';
$lang['payment_edit_date']            = '支払日';
$lang['payment_edit_lave_note']       = '注釈を残す';


# Knowledge Base
$lang['kb_article_add_edit_subject'] = '題目';
$lang['kb_article_add_edit_group']   = '団体';
$lang['kb_string']                   = '知識ベース';
$lang['kb_article']                  = '記事';
$lang['kb_article_lowercase']        = '記事';
$lang['kb_article_new_article']      = '新しい記事';
$lang['kb_article_disabled']         = '機能停止';
$lang['kb_article_description']      = '記事説明';

$lang['kb_table']                      = 'リスト';
$lang['kb_no_articles_found']          = '知識ベース記事は見つかりません';
$lang['kb_dt_article_name']            = '記事名';
$lang['kb_dt_group_name']              = '団体';
$lang['new_group']                     = '新しい団体';
$lang['kb_group_add_edit_name']        = '団体名';
$lang['kb_group_add_edit_description'] = '短い記述';
$lang['kb_group_add_edit_disabled']    = '機能停止';
$lang['kb_group_add_edit_note']        = 'NB: この団体に及ぶ全ての記事に機能停止が検査された場合は非表示る';
$lang['group_table_name_heading']      = '名前';
$lang['group_table_isactive_heading']  = '活発な';
$lang['kb_no_groups_found']            = ' 知識ベース団体は発見されていない';

# Mail Lists
$lang['mail_lists']                           = 'メールリスト';
$lang['mail_list']                            = 'メールリスト';
$lang['new_mail_list']                        = '新しいメールリスト';
$lang['mail_list_lowercase']                  = 'メールリスト';
$lang['custom_field_deleted_success']         = '税関のフィールドの削除';
$lang['custom_field_deleted_fail']            = '税関のフィールドの問題削除';
$lang['email_removed_from_list']              = 'リストからメール削除';
$lang['email_remove_fail']                    = 'リストからメール削除';
$lang['staff_mail_lists']                     = 'スタッフのメールリスト';
$lang['clients_mail_lists']                   = 'クライアントのメールリスト';
$lang['mail_list_total_imported']             = 'インポートされた全てのメール: %s';
$lang['mail_list_total_duplicate']            = '総重複メール: %s';
$lang['mail_list_total_failed_to_insert']     = '書き込みに失敗したメール: %s';
$lang['mail_list_total_invalid']              = '無効なメールアドレス: %s';
$lang['cant_edit_mail_list']                  = 'このリストは自動的に変化するため、リストの編集はできません';
$lang['mail_list_add_edit_name']              = 'メールリスト名';
$lang['mail_list_add_edit_customfield']       = '税関のフィールド追加';
$lang['mail_lists_viewing_emails']            = 'リストからのメールを表示する';
$lang['mail_lists_view_email_email_heading']  = 'メール';
$lang['mail_lists_view_email_date_heading']   = '日付追加';
$lang['add_new_email_to']                     = '%s に新しいメールの追加';
$lang['import_emails_to']                     = '%s にメールをインポートする';
$lang['mail_list_new_email_edit_add_label']   = 'メール';
$lang['mail_list_import_file']                = 'ファイルをインポートする';
$lang['mail_list_available_custom_fields']    = '有効な税関のフィールド';
$lang['submit_import_emails']                 = 'メールをインポートする';
$lang['btn_import_emails']                    = 'メールをインポートする (Excel)';
$lang['btn_add_email_to_list']                = 'このリストにメールを追加';
$lang['mail_lists_dt_list_name']              = 'ネームリスト';
$lang['mail_lists_dt_datecreated']            = '日付作成';
$lang['mail_lists_dt_creator']                = 'クリエイター';
$lang['email_added_to_mail_list_successfully'] = 'リストにメールを追加';
$lang['email_is_duplicate_mail_list']         = 'リストに既に存在するメール';

# Media
$lang['media_files']            = 'ファイル';

# Payment modes
$lang['new_payment_mode']       = '新しい支払い方法';
$lang['payment_modes']          = '支払方法';
$lang['payment_mode']           = '支払方法';
$lang['payment_mode_lowercase'] = '支払方法';
$lang['payment_modes_dt_name']  = '支払方法名';

$lang['payment_mode_add_edit_name'] = '支払方法名';
$lang['payment_mode_edit_heading']  = '支払方法編集';
$lang['payment_mode_add_heading']   = '新しい支払方法追加';

# Predefined Ticket Replies
$lang['new_predefined_reply']              = '新しい所定の返事';
$lang['predefined_replies']                = '所定の返事';
$lang['predefined_reply']                  = '所定の返事';
$lang['predefined_reply_lowercase']        = '所定の返事';
$lang['predefined_replies_dt_name']        = '所定の返事名';
$lang['predefined_reply_add_edit_name']    = '所定の返事名';
$lang['predefined_reply_add_edit_content'] = '内容の返信';

# Ticket Priorities
$lang['new_ticket_priority']           = '新しい優先事項';
$lang['ticket_priorities']             = 'チケットの優先事項';
$lang['ticket_priority']               = 'チケットの優先事項';
$lang['ticket_priority_lowercase']     = 'チケットの優先事項';
$lang['no_ticket_priorities_found']    = 'チケットの優先事項は見つかりません';
$lang['ticket_priority_dt_name']       = 'チケットの優先事項名';
$lang['ticket_priority_add_edit_name'] = ' 優先事項名';

# Reports
$lang['kb_reports']                         = '知識基点項目の報告';
$lang['sales_reports']                      = '販売報告';
$lang['reports_choose_kb_group']            = '団体を選択する';
$lang['reports_sales_select_report_type']   = '報告基準を選択する';
$lang['report_kb_yes']                      = 'はい';
$lang['report_kb_no']                       = 'いいえ';
$lang['report_kb_no_votes']                 = '投票は済んでおりません';
$lang['report_this_week_leads_conversions'] = '今週は変更を導く';
$lang['report_leads_sources_conversions']   = '変更の原因';
$lang['report_leads_monthly_conversions']   = '毎月';
$lang['sales_report_heading']               = '販売報告';
$lang['report_sales_type_income']           = '総所得';

$lang['report_sales_type_customer']                    = '顧客報告';
$lang['report_sales_base_currency_select_explanation'] = '請求書の通貨が異なるため、通貨を選択する必要があります';
$lang['report_sales_from_date']                        = '日付から';
$lang['report_sales_to_date']                          = '日付まで';


$lang['report_sales_months_all_time']      = '常に';
$lang['report_sales_months_six_months']    = '過去6ヶ月';
$lang['report_sales_months_twelve_months'] = '過去12ヶ月';
$lang['report_sales_months_custom']        = '税関';
$lang['reports_sales_generated_report']    = '報告が発生する';



$lang['reports_sales_dt_customers_client']                = '顧客';
$lang['reports_sales_dt_customers_total_invoices']        = '総請求書';
$lang['reports_sales_dt_items_customers_amount']          = '価格';
$lang['reports_sales_dt_items_customers_amount_with_tax'] = '総量プラス税';

# Roles
$lang['new_role']           = '新しい役割';
$lang['all_roles']          = '全ての役割';
$lang['roles']              = 'スタッフの役割';
$lang['role']               = '役割';
$lang['role_lowercase']     = '役割';
$lang['roles_total_users']  = '全利用者: ';
$lang['roles_dt_name']      = '役割名';
$lang['role_add_edit_name'] = '役割名';

# Service
$lang['new_service']           = '新しいサービス';
$lang['services']              = 'サービス';
$lang['service']               = 'サービス';
$lang['service_lowercase']     = 'サービス';
$lang['services_dt_name']      = 'サービス名';
$lang['service_add_edit_name'] = 'サービス名';

# Settings
$lang['settings']                     = 'セッティング';
$lang['settings_updated']             = 'セッティングアップデート';
$lang['settings_save']                = 'セッティングの保存';
$lang['settings_group_general']       = '全般的な';
$lang['settings_group_localization']  = '位置確認';
$lang['settings_group_tickets']       = 'チケット';
$lang['settings_group_sales']         = '財務';
$lang['settings_group_email']         = 'メール';
$lang['settings_group_clients']       = '顧客';
$lang['settings_group_newsfeed']      = 'ニュースフィード';
$lang['settings_group_cronjob']       = 'Cron Job';

$lang['settings_yes']                                        = 'はい';
$lang['settings_no']                                         = 'いいえ';
$lang['settings_clients_default_theme']                      = '顧客テーマのデフォルト';
$lang['settings_clients_allow_registration']                 = '顧客を登録可能とする';
$lang['settings_clients_allow_kb_view_without_registration'] = '登録外でも知識ベースから許可する';

$lang['settings_cron_send_overdue_reminder']                 = '延滞通知請求書を送る';
$lang['settings_cron_send_overdue_reminder_tooltip']         = '請求書ステータスがcron jobから延滞した場合、遅滞メールをクライアントに送る';
$lang['automatically_send_invoice_overdue_reminder_after']   = '（日数）後に延滞通知を自動送信する';
$lang['automatically_resend_invoice_overdue_reminder_after'] = '（日数）後に再び延滞通知を自動送信する';

$lang['settings_email_host']      = 'SMTP ホスト';
$lang['settings_email_port']      = 'SMTP ポート';
$lang['settings_email']           = 'SMTP メール';
$lang['settings_email_password']  = 'SMTP パスワード';
$lang['settings_email_charset']   = 'メール文字式';
$lang['settings_email_signature'] = 'メールシグネチャー';

$lang['settings_general_company_logo']                = '会社ロゴ';
$lang['settings_general_company_logo_tooltip']        = '推奨する大きさ: 150 x 34px';
$lang['settings_general_company_remove_logo_tooltip'] = '会社のロゴを取り除く';
$lang['settings_general_company_name']                = '会社名';
$lang['settings_general_company_main_domain']         = '会社のメインドメイン';
$lang['settings_general_use_knowledgebase']           = '知識ベースを使用';
$lang['settings_general_use_knowledgebase_tooltip']   = 'このオプションを許可する場合、クライアント側にも知識ベースが表示されます';
$lang['settings_general_tables_limit']                = 'テーブルパジネーション（レイアウトを決める事）の限度';
$lang['settings_general_default_staff_role']          = '規定のスタッフの役割';
$lang['settings_general_default_staff_role_tooltip']  = '新しいスタッフメンバーを追加する場合、デフォルトによりこの役割が選択されます';

$lang['settings_localization_date_format']      = '日付フォーマット';
$lang['settings_localization_default_timezone'] = 'デフォルトタイムゾーン';
$lang['settings_localization_default_language'] = 'デフォルト言語';


$lang['settings_newsfeed_max_file_upload_post']    = '掲載する最大アップロードファイル数';
$lang['settings_newsfeed_max_file_size']           = '最大ファイルサイズ (MB)';

$lang['settings_reminders_contracts']         = '契約満期延滞通知';
$lang['settings_reminders_contracts_tooltip'] = '数日以内の満期延滞警告';

$lang['settings_tickets_use_services']             = 'サービスを使用する';
$lang['settings_tickets_max_attachments']          = '最大チケット添付';
$lang['settings_tickets_allow_departments_access'] = 'スタッフ部に属し、チケットを保有しているスタッフのみアクセスを許可します';
$lang['settings_tickets_allowed_file_extensions']  = '拡張ファイルの添付許可';

$lang['settings_sales_general']                                    = '概要';
$lang['settings_sales_general_note']                               = '一般的なセッティング';
$lang['settings_sales_invoice_prefix']                             = '請求書番号接頭数';
$lang['settings_sales_decimal_separator']                          = '10進数セパレーター';
$lang['settings_sales_thousand_separator']                         = '千のセパレーター';
$lang['settings_sales_currency_placement']                         = '通貨配列';
$lang['settings_sales_currency_placement_before']                  = '～前に';
$lang['settings_sales_currency_placement_after']                   = '～の後に';
$lang['settings_sales_require_client_logged_in_to_view_invoice']   = 'クライアントは、インボイス請求書を見るためにはログインする必要があります';
$lang['settings_sales_next_invoice_number']                        = '次の請求書数';
$lang['settings_sales_next_invoice_number_tooltip']                = '最初からやり直したたい場合は、この分野を１にセットする';
$lang['settings_sales_decrement_invoice_number_on_delete']         = '削除する請求書数を減少させる';
$lang['settings_sales_decrement_invoice_number_on_delete_tooltip'] = '最終インボイスが削除された場合、インボイス数を減少させたいでしょうか？Eq.　このオプションにはいとお答えしインボイス削除前の次のインボイス数が15の場合、次のインボイス数は14となります。いいえとお答えした場合は、インボイス数は15となります。いいえと定めた最終インボイスのみに削除をセットアップした場合、次のインボイス数が減少されないためにこのオプションをいいえに設定すべきである。';
$lang['settings_sales_invoice_number_format']                      = '請求書数フォーマット';
$lang['settings_sales_invoice_number_format_year_based']           = '年ごとに';
$lang['settings_sales_invoice_number_format_number_based']         = '数ごとに (000001)';


$lang['settings_sales_company_info_note']    = 'これらの情報は請求書/見積書/支払いそして会社情報が要求される他のPDFドキュメントに表示される';
$lang['settings_sales_company_name']         = '会社名';
$lang['settings_sales_address']              = '住所';
$lang['settings_sales_city']                 = '市';
$lang['settings_sales_country_code']         = '国コード';
$lang['settings_sales_postal_code']          = '郵便番号';
$lang['settings_sales_phonenumber']          = '電話番号';

# Leads
$lang['new_lead']       = '新しいリード';
$lang['leads']          = 'リード';
$lang['lead']           = 'リード';
$lang['lead_lowercase'] = 'リード';
$lang['leads_all']      = '全て';

$lang['leads_canban_notes']  = '注釈: %s';
$lang['leads_canban_source'] = '発信元: %s';

$lang['lead_new_source']            = '新しい注釈';
$lang['lead_sources']               = 'リード発信元';
$lang['lead_source']                = 'リード発信元';
$lang['lead_source_lowercase']      = 'リード発信元';
$lang['leads_sources_not_found']    = 'リード発信元は見つかりません';
$lang['leads_sources_table_name']   = '発信元名';
$lang['leads_source_add_edit_name'] = '発信元名';

$lang['lead_new_status']         = '新しいリードステータス';
$lang['lead_statuss']            = 'リードステータス';
$lang['lead_status']             = 'リードステータス';
$lang['lead_status_lowercase']   = 'リードステータス';
$lang['leads_status_table_name'] = 'ステータス名';

$lang['leads_status_add_edit_name']  = 'ステータス名';
$lang['leads_status_add_edit_order'] = '注文';

$lang['lead_statuses_not_found']      = 'リードステータス未確認';
$lang['leads_search']                 = 'リード検索';

$lang['leads_table_total'] = '総リード: %s';

$lang['leads_dt_name']         = '名前';
$lang['leads_dt_email']        = 'メール';
$lang['leads_dt_phonenumber']  = '電話番号';
$lang['leads_dt_assigned']     = '割り当てられた';
$lang['leads_dt_status']       = 'ステータス';
$lang['leads_dt_last_contact'] = '最終接触';

$lang['lead_add_edit_name']                 = '名前';
$lang['lead_add_edit_email']                = 'メールアドレス';
$lang['lead_add_edit_phonenumber']          = '電話番号';
$lang['lead_add_edit_source']               = '発信元';
$lang['lead_add_edit_status']               = 'リードステータス';
$lang['lead_add_edit_assigned']             = '割り当てられた';
$lang['lead_add_edit_datecontacted']        = 'ご連絡頂いた日';
$lang['lead_add_edit_contacted_today']      = '本日連絡済み';
$lang['lead_add_edit_activity']             = '活動記録';
$lang['lead_add_edit_notes']                = '注釈';
$lang['lead_add_edit_add_note']             = '注釈追加';
$lang['lead_not_contacted']                 = 'このリードにはまだ連絡を取っておりません';
$lang['lead_add_edit_contacted_this_lead']  = 'このリードには連絡を取りました';
$lang['lead_confirmation_canban_contacted'] = 'このリードに連絡を取り合いましたか?';

# Misc
$lang['access_denied']              = 'アクセス拒否';
$lang['prev']                       = '前';
$lang['next']                       = '次';

# Datatables
$lang['dt_paginate_first']          = '初め';
$lang['dt_paginate_last']           = '終わり';
$lang['dt_paginate_next']           = '次';
$lang['dt_paginate_previous']       = '前';
$lang['dt_empty_table']             = '見つかりません{0}';
$lang['dt_search']                  = '検索する:';
$lang['dt_zero_records']            = '適合記録は検索されませんでした';
$lang['dt_loading_records']         = 'ローディング...';
$lang['dt_length_menu']             = '_MENU_ 項目を表示する';
$lang['dt_info_filtered']           = '(フィルター処理したものから‐最大限‐全体 {0})';
$lang['dt_info_empty']              = '0の0から0を表示する{0}';
$lang['dt_info']                    = '_START_ to _END_ of _TOTAL_ までを表示する{0}';
$lang['dt_empty_table']             = '見つかりません{0}';
$lang['dt_sort_ascending']          = '短い列を上昇させる';
$lang['dt_sort_descending']         = '短い列を下降させる';
# Invoice Activity Log
$lang['user_sent_overdue_reminder'] = '% 請求書遅滞通知を送る';

# Weekdays
$lang['wd_monday']    = '月曜日';
$lang['wd_tuesday']   = '火曜日';
$lang['wd_thursday']  = '木曜日';
$lang['wd_wednesday'] = '水曜日';
$lang['wd_friday']    = '金曜日';
$lang['wd_saturday']  = '土曜日';
$lang['wd_sunday']    = '日曜日';

# Admin Left Sidebar
$lang['als_dashboard'] = 'ダッシュボード';
$lang['als_clients']   = '顧客';
$lang['als_leads']     = 'リード';

$lang['als_contracts'] = 'コントラクト';

$lang['als_all_tickets'] = '全てのチケット';
$lang['als_sales']       = 'セールス';

$lang['als_staff'] = 'スタッフ';
$lang['als_tasks'] = 'タスク';
$lang['als_kb']    = '知識ベース';

$lang['als_surveys']               = '調査';
$lang['als_media']                 = 'メディア';
$lang['als_reports']               = 'レポート';
$lang['als_reports_sales_submenu'] = 'セールス';
$lang['als_reports_leads_submenu'] = 'リード';
$lang['als_kb_articles_submenu']   = '知識ベース記事';
$lang['als_utilities']             = 'ユーティリティー';
$lang['als_announcements_submenu'] = '発表';
$lang['als_mail_lists_submenu']    = 'メールリスト';
$lang['als_calendar_submenu']      = 'カレンダー';
$lang['als_activity_log_submenu']  = '活動記録';

# Admin Customizer Sidebar
$lang['acs_tickets']                           = 'チケット';
$lang['acs_ticket_priority_submenu']           = 'チケット優先';
$lang['acs_ticket_statuses_submenu']           = 'チケットステータス';
$lang['acs_ticket_predefined_replies_submenu'] = '定義済み返答';
$lang['acs_ticket_services_submenu']           = 'サービス';
$lang['acs_departments']                       = '部';
$lang['acs_leads']                             = 'リード';
$lang['acs_leads_sources_submenu']             = '発信元';
$lang['acs_leads_statuses_submenu']            = 'ステータス';
$lang['acs_sales_taxes_submenu']               = '税レート';
$lang['acs_sales_currencies_submenu']          = '通貨';
$lang['acs_sales_payment_modes_submenu']       = '支払方法';
$lang['acs_email_templates']                   = 'メールテンプレート';
$lang['acs_roles']                             = '役割';
$lang['acs_settings']                          = 'セッティング';

# Tickets
$lang['new_ticket']                                         = '新しいチケットを開ける';
$lang['tickets']                                            = 'チケット';
$lang['ticket']                                             = 'チケット';
$lang['ticket_lowercase']                                   = 'チケット';
$lang['support_tickets']                                    = 'サポートチケット';
$lang['support_ticket']                                     = 'サポートチケット';
$lang['ticket_settings_to']                                 = '～へ';
$lang['ticket_settings_email']                              = 'メールアドレス';
$lang['ticket_settings_departments']                        = '部';
$lang['ticket_settings_service']                            = 'サービス';
$lang['ticket_settings_priority']                           = '優先';
$lang['ticket_settings_subject']                            = '題目';
$lang['ticket_settings_assign_to']                          = 'チケットを割り当てる（デフォルトは現在のユーザーである）';
$lang['ticket_settings_assign_to_you']                      = 'あなた';
$lang['ticket_settings_select_client']                      = 'クライアントを選択する';
$lang['ticket_add_body']                                    = 'チケット本体';
$lang['ticket_add_attachments']                             = '添付書類';
$lang['ticket_no_reply_yet']                                = '返信未受領';
$lang['new_ticket_added_successfully']                        = 'チケット #%s 追加成功';
$lang['replied_to_ticket_successfully']                       = 'チケット #%s 返信成功';
$lang['ticket_settings_updated_successfully']                = 'チケットアップデート成功';
$lang['ticket_settings_updated_successfully_and_reassigned'] = 'チケットアップデート設定成功‐部 %s に転任させる/再譲渡する';
$lang['ticket_dt_subject']                                  = '題目';
$lang['ticket_dt_department']                               = '部';
$lang['ticket_dt_service']                                  = 'サービス';
$lang['ticket_dt_submitter']                                = '顧客';
$lang['ticket_dt_status']                                   = 'ステータス';
$lang['ticket_dt_priority']                                 = '優先';
$lang['ticket_dt_last_reply']                               = '最終返信';

$lang['ticket_single_add_reply']                  = '返信追加';
$lang['ticket_single_add_note']                   = '注釈追加';
$lang['ticket_single_other_user_tickets']         = '他のチケッ';
$lang['ticket_single_settings']                   = 'セッティング';
$lang['ticket_single_priority']                   = '優先: %s';
$lang['ticket_single_last_reply']                 = '最終返答: %s';
$lang['ticket_single_change_status_top']          = 'ステータス変更';
$lang['ticket_single_ticket_note_by']             = 'チケット %s により注記されている';
$lang['ticket_single_note_added']                 = '注釈追加: %s';
$lang['ticket_single_change_status']              = 'ステータス変更';
$lang['ticket_single_assign_to_me_on_update']     = 'このチケットを私に自動的に割り当てる';
$lang['ticket_single_insert_predefined_reply']    = '定義済返答を差し込む';
$lang['ticket_single_insert_knowledge_base_link'] = '知識ベースリンクを差し込む';
$lang['ticket_single_attachments']                = 'アタッチメント';
$lang['ticket_single_add_response']               = '返答追加';
$lang['ticket_single_note_heading']               = '注釈';
$lang['ticket_single_add_note']                   = '注釈追加';
$lang['ticket_settings_none_assigned']            = 'なし';
$lang['ticket_status_changed_successfully']        = 'チケットステータス変更済み';
$lang['ticket_status_changed_fail']               = 'チケットステータス変更問題';

$lang['ticket_staff_string']                    = 'スタッフ';
$lang['ticket_client_string']                   = '顧客';
$lang['ticket_posted']                          = '掲示される: %s';
$lang['ticket_insert_predefined_reply_heading'] = '定義済返答を掲載する';
$lang['ticket_kb_link_heading']                 = '知識ベースリンクを差し込む';
$lang['ticket_access_by_department_denied']     = 'このチケットを利用する権利がありません。このチケットはあなたが割り当てられていない部に属します。';

# Staff
$lang['new_staff']                       = '新スタッフメンバー';
$lang['staff_members']                   = 'スタッフメンバー';
$lang['staff_member']                    = 'スタッフメンバー';
$lang['staff_member_lowercase']          = 'スタッフメンバー';
$lang['staff_profile_updated']           = 'あなたのプロファイルはアップデートされています';
$lang['staff_old_password_incorrect']     = 'あなたの古いパスワードは正しくありません';
$lang['staff_password_changed']          = 'あなたのパスワードは変更されました';
$lang['staff_problem_changing_password'] = '問題発生　パスワードを変更して下さい';
$lang['staff_profile_string']            = 'プロファイル';

$lang['staff_cant_remove_main_admin']          = '主要部の管理者を移動させる事ができません';
$lang['staff_cant_remove_yourself_from_admin'] = 'あなたはあなた自身を管理者から移動させる事はできません';

$lang['staff_dt_name']       = 'フルネーム';
$lang['staff_dt_email']      = 'メール';
$lang['staff_dt_last_Login'] = '最終ログイン';
$lang['staff_dt_active']     = 'アクティブな';

$lang['staff_add_edit_firstname']             = '名';
$lang['staff_add_edit_lastname']              = '姓';
$lang['staff_add_edit_email']                 = 'メール';
$lang['staff_add_edit_phonenumber']           = '電話番号';
$lang['staff_add_edit_facebook']              = 'Facebook';
$lang['staff_add_edit_linkedin']              = 'LinkedIn';
$lang['staff_add_edit_skype']                 = 'Skype';
$lang['staff_add_edit_departments']           = 'メンバー事業部';
$lang['staff_add_edit_role']                  = '役割';
$lang['staff_add_edit_permissions']           = '許可';
$lang['staff_add_edit_administrator']         = '管理者';
$lang['staff_add_edit_password']              = 'パスワード';
$lang['staff_add_edit_password_note']         = 'NB: このフィールドに追加する場合、このメンバーによりパスワードは変更されます';
$lang['staff_add_edit_password_last_changed'] = 'パスワード最終変更';
$lang['staff_add_edit_notes']                 = '注釈';
$lang['staff_add_edit_note_description']      = '種類に注意する';

$lang['staff_notes_table_description_heading'] = '注釈';
$lang['staff_notes_table_addedfrom_heading']   = '～から追加された';
$lang['staff_notes_table_dateadded_heading']   = '日付追加';

$lang['staff_admin_profile']         = 'こちらは管理上のプロファイルです';
$lang['staff_profile_notifications'] = '通知書';
$lang['staff_profile_departments']   = '部';

$lang['staff_edit_profile_image']                     = 'プロファイルイメージ';
$lang['staff_edit_profile_your_departments']          = '部';
$lang['staff_edit_profile_change_your_password']      = 'パスワードを変更して下さい';
$lang['staff_edit_profile_change_old_password']       = '古いパスワード';
$lang['staff_edit_profile_change_new_password']       = '新しいパスワード';
$lang['staff_edit_profile_change_repeat_new_password'] = '新しいパスワードを繰り返して下さい';

# Surveys
$lang['new_survey']                    = '新しい調査';
$lang['surveys']                       = '調査';
$lang['survey']                        = '調査';
$lang['survey_lowercase']              = '調査';
$lang['survey_no_mail_lists_selected'] = 'メールリストは選択されていません';
$lang['survey_send_success_note']      = '全ての調査メール (%s) はCRONを通して送られる';
$lang['survey_result']                 = '調査の結果: %s';
$lang['question_string']               = '質問';
$lang['question_field_string']         = 'フィールド';

$lang['survey_list_view_tooltip']         = '調査を一覧する';
$lang['survey_list_view_results_tooltip'] = '結果を一覧する';

$lang['survey_add_edit_subject']                   = '調査を行う';
$lang['survey_add_edit_email_description']         = ' 調査記述（メール記述）';
$lang['survey_include_survey_link']                = '調査リンク記述を含む';
$lang['survey_available_mail_lists_custom_fields'] = 'メールリストからのカスタムフィールドを利用できます';
$lang['survey_mail_lists_custom_fields_tooltip']   = 'カスタムフィールドはメール編集者から使用可能です';
$lang['survey_add_edit_short_description_view']    = '調査短記述 (説明を一覧せよ)';
$lang['survey_add_edit_from']                      = '～から（メールに表示されている）';
$lang['survey_add_edit_redirect_url']              = '調査をURLに変える';
$lang['survey_add_edit_red_url_note']              = '利用者が調査を終えた時どこへ転換するか（このurlサイトに空白を残すこと）';
$lang['survey_add_edit_disabled']                  = '機能不可';
$lang['survey_add_edit_only_for_logged_in']        = 'ログインした参加者のみ（スタッフ、顧客）';
$lang['send_survey_string']                        = ' 調査を送る';
$lang['survey_send_mail_list_clients']             = '顧客';
$lang['survey_send_mail_list_staff']               = 'スタッフ';
$lang['survey_send_mail_lists_string']             = 'メールリスト';
$lang['survey_send_mail_lists_note_logged_in']     = 'NB: メールリストの中のログインした参加者のみに調査を送っている場合は、チェックを入れないでおく必要があります';
$lang['survey_send_string']                        = '送る';

$lang['survey_send_to_total']  = '全ての %s メールを送信する';
$lang['survey_send_till_now']  = '今まで';
$lang['survey_send_finished']  = '調査送信完了: %s';
$lang['survey_added_to_queue'] = 'この調査は %s のcron queueに加わっている';

$lang['survey_questions_string']          = '質問';
$lang['survey_insert_field']              = 'フィールドを加える';
$lang['survey_field_checkbox']            = 'チェックボックス';
$lang['survey_field_radio']               = 'ラジオ';
$lang['survey_field_input']               = 'フィールドをインプットする';
$lang['survey_field_textarea']            = 'テキスト領域';
$lang['survey_question_required']         = '必須の';
$lang['survey_question_only_for_preview'] = 'プレビューのみ';
$lang['survey_create_first']              = 'まず調査を作成してから質問を加える事ができます';


$lang['survey_dt_name']               = '名前';
$lang['survey_dt_total_questions']    = '総質問';
$lang['survey_dt_total_participants'] = '合計参加者';
$lang['survey_dt_date_created']       = '日付作成';
$lang['survey_dt_active']             = 'アクティブな';

$lang['survey_text_questions_results'] = '本文質問の結果';
$lang['survey_view_all_answers']       = '全ての回答を見る';

# Staff Tasks
$lang['new_task']       = '新しいタスク';
$lang['tasks']          = 'タスク';
$lang['task']           = 'タスク';
$lang['task_lowercase'] = 'タスク';
$lang['comment_string'] = 'コメント';

$lang['task_marked_as_complete'] = 'タスクが完成しているとマーク/はっきりしている';
$lang['task_follower_removed']   = 'タスクフォロワー摘出完了';
$lang['task_assignee_removed']   = 'タスク指名者摘出完了';

$lang['task_no_assignees'] = 'このタスクに指名者はいません';
$lang['task_no_followers'] = 'このタスクにフォロワーはいません';

$lang['task_list_all']            = '全て';
$lang['task_list_not_assigned']   = 'アサインされていない';
$lang['task_list_duedate_passed'] = '期日経過';
$lang['tasks_dt_name']            = '名前';

$lang['task_single_priority']               = '優先';
$lang['task_single_start_date']             = '開始日';
$lang['task_single_due_date']               = '期日';
$lang['task_single_finished']               = '完了';
$lang['task_single_mark_as_complete']       = '完了済みとマークする';
$lang['task_single_edit']                   = '編集';
$lang['task_single_delete']                 = '削除';
$lang['task_single_assignees']              = '指名者';
$lang['task_single_assignees_select_title'] = 'タスクを割り当てる';
$lang['task_single_followers']              = 'フォロワー';
$lang['task_single_followers_select_title'] = 'フォロワーを追加する';
$lang['task_single_insert_media_link']      = 'メディアリンクを加える';
$lang['task_single_add_new_comment']        = 'コメントを追加する';

$lang['task_add_edit_subject']     = '題目';
$lang['task_add_edit_priority']    = '優先';
$lang['task_priority_low']         = '低い';
$lang['task_priority_medium']      = 'ミディアム';
$lang['task_priority_high']        = '高い';
$lang['task_priority_urgent']      = '緊急な';
$lang['task_add_edit_start_date']  = '開始日';
$lang['task_add_edit_due_date']    = '締切日';
$lang['task_add_edit_description'] = 'タスクの説明';

# Taxes
$lang['new_tax']       = '新しい税';
$lang['taxes']         = '税';
$lang['tax']           = '税';
$lang['tax_lowercase'] = '税';
$lang['tax_dt_name']   = '税金名';
$lang['tax_dt_rate']   = 'レート（パーセント）';

$lang['tax_add_edit_name'] = '税金名';
$lang['tax_add_edit_rate'] = '税レート（パーセント）';
$lang['tax_edit_title']    = '税を編集する';
$lang['tax_add_title']     = '新しい税を追加する';

# Ticket Statuses
$lang['new_ticket_status']       = '新しいチケットステータス';
$lang['ticket_statuses']         = 'チケットステータス';
$lang['ticket_status']           = 'チケットステータス';
$lang['ticket_status_lowercase'] = 'チケットステータス';

$lang['ticket_statuses_dt_name']      = 'チケットステータス名';
$lang['no_ticket_statuses_found']     = 'チケットステータスは見つかりません';
$lang['ticket_statuses_table_total']  = '合計 %s';
$lang['ticket_status_add_edit_name']  = 'チケットステータス名';
$lang['ticket_status_add_edit_color'] = '色を選ぶ';
$lang['ticket_status_add_edit_order'] = 'ステータスを整理する';

# Todos
$lang['new_todo']                  = '新しいすべき事';
$lang['my_todos']                  = 'すべき事アイテム';
$lang['todo']                      = 'すべき事アイテム';
$lang['todo_lowercase']            = 'すべき事';
$lang['todo_status_changed']       = 'すべき事ステータスを変更する';
$lang['todo_add_title']            = '新しいすべき事を追加する';
$lang['add_new_todo_description']  = '説明';
$lang['no_finished_todos_found']   = 'やり終えた事は見つかりません';
$lang['no_unfinished_todos_found'] = 'すべき事は見つかりません';
$lang['unfinished_todos_title']    = 'すべき事未完了';
$lang['finished_todos_title']      = '最新のやり終えた事';

# Authentication
$lang['password_changed_email_subject']             = 'あなたのパスワードは変更されました';
$lang['password_reset_email_subject']               = '%s にパスワードをリセットして下さい';
# Utilities
$lang['utility_activity_log']                       = '活動記録';
$lang['utility_activity_log_filter_by_date']        = '日付でフィルタリング';
$lang['utility_activity_log_dt_description']        = '説明';
$lang['utility_activity_log_dt_date']               = '日付';
$lang['utility_activity_log_dt_staff']              = 'スタッフ';
$lang['utility_calendar_new_event_title']           = '新しいイベントを追加する';
$lang['utility_calendar_new_event_start_date']      = '開始日';
$lang['utility_calendar_new_event_end_date']        = '最終日';
$lang['utility_calendar_new_event_make_public']     = '公にする';
$lang['utility_calendar_event_added_successfully']   = '新しいイベントの追加成功';
$lang['utility_calendar_event_deleted_successfully'] = 'イベント削除';
$lang['utility_calendar_new_event_placeholder']     = 'イベントのタイトル';


# Navigation
$lang['nav_notifications']          = '警告';
$lang['nav_my_profile']             = '私のプロファイル';
$lang['nav_edit_profile']           = 'プロファイル編集';
$lang['nav_logout']                 = 'ログアウト';
$lang['nav_no_notifications']       = '通知はありません';
$lang['nav_view_all_notifications'] = '全ての通知を見る';
$lang['nav_customizer_tooltip']     = 'カスタマイズセッティング';
$lang['nav_notifications_tooltip']  = '通知を見る';

## Clients
$lang['clients_required_field'] = 'このフィールドは必須である';

# Footer
$lang['clients_copyright'] = 'コピーライト %s';

# Announcements
$lang['clients_announcement_from']  = '～から: ';
$lang['clients_announcement_added'] = '～に追加する: ';

# Contracts
$lang['clients_contracts']               = '契約';
$lang['clients_contracts_dt_subject']    = '題目';
$lang['clients_contracts_dt_start_date'] = '開始日';
$lang['clients_contracts_dt_end_date']   = '最終日';

# Home
$lang['clients_quick_invoice_info']                = '急ぎの請求書の情報';
$lang['clients_home_currency_select_tooltip']      = '貴方の請求書は異なる通貨を適用しているため、他の通貨を選択する必要があります';

# Invoices
$lang['clients_invoice_html_btn_download'] = 'ダウンロード';

$lang['clients_my_invoices']        = '請求書';
$lang['clients_invoice_dt_number']  = '請求書 #';
$lang['clients_invoice_dt_date']    = '日付';
$lang['clients_invoice_dt_duedate'] = '締切日';
$lang['clients_invoice_dt_amount']  = '価格';
$lang['clients_invoice_dt_status']  = 'ステータス';

# Profile
$lang['clients_profile_heading'] = 'プロファイル';

# Used for edit profile and register START
$lang['clients_firstname'] = '名';
$lang['clients_lastname']  = '姓';
$lang['clients_email']     = 'メールアドレス';
$lang['clients_company']   = '会社';
$lang['clients_vat']       = 'VAT 数';
$lang['clients_phone']     = '電話番号';
$lang['clients_country']   = '国';
$lang['clients_city']      = '市';
$lang['clients_address']   = '住所';
$lang['clients_zip']       = '郵便番号';
$lang['clients_state']     = '州';
# Used for edit profile and register END

$lang['clients_register_password']        = 'パスワード';
$lang['clients_register_password_repeat'] = 'パスワードを繰り返す';
$lang['clients_edit_profile_update_btn']  = 'アップデート';

$lang['clients_edit_profile_change_password_heading'] = 'パスワードを変更する';
$lang['clients_edit_profile_old_password']            = '古いパスワード';
$lang['clients_edit_profile_new_password']            = '新しいパスワード';
$lang['clients_edit_profile_new_password_repeat']     = 'パスワードを繰り返す';
$lang['clients_edit_profile_change_password_btn']     = 'パスワードを変更する';
$lang['clients_profile_last_changed_password']        = 'パスワード最終変更 %s';

# Knowledge base
$lang['clients_knowledge_base']                    = '知識ベース';
$lang['clients_knowledge_base_articles_not_found'] = '知識ベース項目は見つからない';
$lang['clients_knowledge_base_find_useful']        = 'この記事は役立ちましたか?';
$lang['clients_knowledge_base_find_useful_yes']    = 'はい';
$lang['clients_knowledge_base_find_useful_no']     = 'いいえ';
$lang['clients_article_only_1_vote_today']         = '24時間以内に一度表明できる';
$lang['clients_article_voted_thanks_for_feedback'] = 'フィードバックを有難うございます';

# Tickets
$lang['clients_ticket_open_subject']                = 'オープンチケット';
$lang['clients_ticket_open_departments']            = '部';
$lang['clients_tickets_heading']                    = 'サポートチケット';
$lang['clients_ticket_open_service']                = 'サービス';
$lang['clients_ticket_open_priority']               = '優先';
$lang['clients_latest_tickets']                     = '最新のチケット';
$lang['clients_ticket_open_body']                   = 'チケット本体';
$lang['clients_ticket_attachments']                 = '添付書類';
$lang['clients_ticket_posted']                      = 'ポスト済み: %s';
$lang['clients_single_ticket_string']               = 'チケット';
$lang['clients_single_ticket_replied']              = '返信済: %s';
$lang['clients_single_ticket_information_heading'] = 'チケット情報';

$lang['clients_tickets_dt_number']     = 'チケット #';
$lang['clients_tickets_dt_subject']    = '題目';
$lang['clients_tickets_dt_department'] = '部';
$lang['clients_tickets_dt_service']    = 'サービス';
$lang['clients_tickets_dt_status']     = 'ステータス';
$lang['clients_tickets_dt_last_reply'] = '最終返信';

$lang['clients_ticket_single_department']        = '部: %s';
$lang['clients_ticket_single_submitted']          = '提出済: %s';
$lang['clients_ticket_single_status']            = 'ステータス:';
$lang['clients_ticket_single_priority']          = '優先: %s';
$lang['clients_ticket_single_add_reply_btn']     = '返信を追加する';
$lang['clients_ticket_single_add_reply_heading'] = 'このチケットに返信を追加する';

# Login
$lang['clients_login_heading_no_register'] = 'ログインして下さい';
$lang['clients_login_heading_register']    = 'ログイン又は登録して下さい';
$lang['clients_login_email']               = 'メールアドレス';
$lang['clients_login_password']            = 'パスワード';
$lang['clients_login_remember']            = '覚えている';
$lang['clients_login_login_string']        = 'ログイン';

# Register
$lang['clients_register_string']  = '登録';
$lang['clients_register_heading'] = '登録';

# Navigation
$lang['clients_nav_login']     = 'ログイン';
$lang['clients_nav_register']  = '登録';
$lang['clients_nav_invoices']  = '請求書';
$lang['clients_nav_contracts'] = '契約';
$lang['clients_nav_kb']        = '知識ベース';
$lang['clients_nav_profile']   = 'プロファイル';
$lang['clients_nav_logout']    = 'ログアウト';

# Datatables
$lang['clients_dt_paginate_first']    = '初め';
$lang['clients_dt_paginate_last']     = '最後';
$lang['clients_dt_paginate_next']     = '次';
$lang['clients_dt_paginate_previous'] = '前';
$lang['clients_dt_empty_table']       = '{0} 見つかりませんでした';
$lang['clients_dt_search']            = '検索する:';
$lang['clients_dt_zero_records']      = '適合する記録は見つかりませんでした';
$lang['clients_dt_loading_records']   = 'ローディング中...';
$lang['clients_dt_length_menu']       = '_MENU_ を見せる ';
$lang['clients_dt_info_filtered']     = '(filtered from _MAX_ total {0})';
$lang['clients_dt_info_empty']        = '0の0から0を表示する {0}';
$lang['clients_dt_info']              = 'Showing _START_ to _END_ of _TOTAL_ {0}';
$lang['clients_dt_empty_table']       = '{0} 見つかりません';
$lang['clients_dt_sort_ascending']    = '短い列を上昇させる';
$lang['clients_dt_sort_descending']   = ' 短い列を下降させる';


# Version 1.0.1
# Admin
#
# Payments
$lang['payment_receipt']                               = '支払領収書';
$lang['payment_for_string']                            = '～へ支払う';
$lang['payment_date']                                  = '支払日時:';
$lang['payment_view_mode']                             = '支払モード:';
$lang['payment_total_amount']                          = '総額';
$lang['payment_table_invoice_number']                  = '請求書数';
$lang['payment_table_invoice_date']                    = '請求書日';
$lang['payment_table_invoice_amount_total']            = '請求書量';
$lang['payment_table_payment_amount_total']            = '支払額';
$lang['payments_table_transaction_id']                 = '取引ID: %s';
$lang['payment_getaway_token_not_found']               = 'Tokenは見当たらない';
$lang['online_payment_recorded_success']               = '支払記憶生億';
$lang['online_payment_recorded_success_fail_database'] = '支払は成功しているがデーターベースに書き込みを失敗したため、管理者に連絡して下さい';

# Leads
$lang['lead_convert_to_client']                   = '顧客に転換する';
$lang['lead_convert_to_email']                    = 'メール';
$lang['lead_convert_to_client_firstname']         = '名';
$lang['lead_convert_to_client_lastname']          = '姓';
$lang['lead_email_already_exists']                = '顧客データーに既にリードのメールは存続している';
$lang['lead_to_client_base_converted_success']    = '顧客へリードが転換されました';
$lang['lead_have_client_profile']                 = 'このリードは顧客プロファイルがある';
$lang['lead_converted_edit_client_profile']       = 'プロファイルを編集する';

# Invoices
$lang['view_invoice_as_customer_tooltip']                                     = '顧客として請求書を見る';
$lang['invoice_add_edit_recurring']                                           = '反復請求書?';
$lang['invoice_add_edit_recurring_no']                                        = 'いいえ';
$lang['invoice_add_edit_recurring_month']                                     = '毎 %s 月';
$lang['invoice_add_edit_recurring_months']                                    = '毎 %s 月';
$lang['invoices_list_all']                                                    = '全て';
$lang['invoices_list_not_have_payment']                                       = '請求書の支払記録なし';
$lang['invoices_list_recurring']                                               = '反復請求書';
$lang['invoices_list_made_payment_by']                                        = '%s より支払作成';
$lang['invoices_create_invoice_from_recurring_only_on_paid_invoices']         = '請求書がステータスにより支払われている場合のみ、反復請求書より新しい請求書を作成しますか?';
$lang['invoices_create_invoice_from_recurring_only_on_paid_invoices_tooltip'] = 'もしこの分野がはいにセットされており、反復請求書がステータスより支払われていない場合、新しい請求書は作成されません。';
$lang['send_renewed_invoice_from_recurring_to_email']                         = '新たな請求書を顧客に自動送信する';
$lang['view_invoice_pdf_link_pay']                                            = '請求書を支払う';

# Payment modes
$lang['payment_mode_add_edit_description']         = '銀行口座/説明';
$lang['payment_mode_add_edit_description_tooltip'] = 'ここに銀行口座情報をセットする事ができる。HTML請求書に示される';
$lang['payment_modes_dt_description']              = '銀行口座/説明';
$lang['payment_modes_add_edit_announcement']       = 'NB: 下記にリストされている支払モードはオフラインモードである。オンライン支払モードはセットアップの中で設定できる -> セッティング -> 支払ゲートウェイ';
$lang['payment_mode_add_edit_active']              = 'アクティブな';
$lang['payment_modes_dt_active']                   = 'アクティブな';

# Contracts
$lang['contract_not_found'] = '契約は見つかりません。削除された可能性あり、アクティビティーログを確認して下さい';

# Settings
$lang['setting_bar_heading']                 = 'セットアップ';
$lang['settings_group_online_payment_modes'] = '支払ゲートウェイ';
$lang['settings_paymentmethod_mode_label']   = 'ラベル';
$lang['settings_paymentmethod_active']       = 'アクティブな';
$lang['settings_paymentmethod_currencies']   = '通貨（コマ分離）';
$lang['settings_paymentmethod_testing_mode'] = 'テストモードを有効にする';

$lang['settings_paymentmethod_paypal_username']  = 'PayPal API ユーザーネイム';
$lang['settings_paymentmethod_paypal_password']  = 'PayPal API パスワード';
$lang['settings_paymentmethod_paypal_signature'] = 'API 署名';

$lang['settings_paymentmethod_stripe_api_secret_key']      = 'Stripe API 秘密キー';
$lang['settings_paymentmethod_stripe_api_publishable_key'] = 'Stripe パブリッシュキー';
$lang['settings_limit_top_search_bar_results']             = '～の結果にトップサーチバーを限定する';

# Quick Actions
$lang['qa_create_invoice']  = '請求書を作成する';
$lang['qa_create_task']     = 'タスクを作成する';
$lang['qa_create_client']   = '顧客を作成する';
$lang['qa_create_contract'] = '契約を作成する';
$lang['qa_create_kba']      = '知識ベース項目を作成する';
$lang['qa_create_survey']   = '調査を作成する';
$lang['qa_create_ticket']   = 'チケットを開く';
$lang['qa_create_staff']    = 'スタッフメンバーを作成する';

## Clients
$lang['client_phonenumber'] = '電話';

# Main Clients
$lang['clients_register']                          = '登録する';
$lang['clients_profile_updated']                   = 'あなたのプロファイルはアップデートされました';
$lang['clients_successfully_registered']           = 'ご登録ありがとうございます';
$lang['clients_account_created_but_not_logged_in'] = 'あなたのアカウントは作成されましたが、弊社のシステムには自動的にログインされていません。ログインして下さい。';
# Tickets
$lang['clients_tickets_heading']                   = 'サポートチケット';

# Payments
// Uses on stripe page
$lang['payment_for_invoice'] = '請求書用の支払';
$lang['payment_total']       = '合計金額: %s';

# Invoice
$lang['invoice_html_online_payment']             = 'オンライン支払';
$lang['invoice_html_online_payment_button_text'] = '今支払う';
$lang['invoice_html_payment_modes_not_selected'] = '支払モードを選択して下さい';
$lang['invoice_html_amount_blank']               = '総額は空白またはゼロでも可能である';
$lang['invoice_html_offline_payment']            = 'オフライン支払';
$lang['invoice_html_amount']                     = '価格';


# Version 1.0.2
# Admin
#
# DataTables
$lang['dt_button_column_visibility']  = '可視性';
$lang['dt_button_reload']             = 'リロード';
$lang['dt_button_excel']              = 'Excel';
$lang['dt_button_csv']                = 'CSV';
$lang['dt_button_pdf']                = 'PDF';
$lang['dt_button_print']              = 'プリント';
$lang['is_not_active_export']         = 'いいえ';
$lang['is_active_export']             = 'はい';

# Invoice
$lang['invoice_add_edit_advanced_options']               = 'アドバンスオプション';
$lang['invoice_add_edit_allowed_payment_modes']          = 'この請求書に対して支払を許可します';
$lang['invoice_add_edit_recurring_invoices_from_invoice'] = 'この反復請求書から請求書を作成します';
$lang['invoice_add_edit_no_payment_modes_found']         = '支払モードは見つかりませんでした';
$lang['invoice_html_total_pay']                          = '合計金額: %s';

# Email templates
$lang['email_templates_table_heading_name'] = 'テンプレート名';
# General
$lang['discount_type']                      = 'ディスカウントタイプ';
$lang['discount_type_after_tax']            = '税後';
$lang['discount_type_before_tax']           = '税前';
$lang['terms_and_conditions']               = '契約条件';
$lang['reference_no']                       = '参照 #';
$lang['no_discount']                        = 'ディスカウントなし';
$lang['view_stats_tooltip']                 = 'クイック統計を見る';
# Clients
$lang['zip_from_date']                      = '～の日から:';
$lang['zip_to_date']                        = '～の日まで:';
$lang['client_zip_payments']                = 'ZIP 支払';
$lang['client_zip_invoices']                = 'ZIP 請求書';
$lang['client_zip_estimates']               = 'ZIP 見積書';
$lang['client_zip_status']                  = 'ステータス';
$lang['client_zip_status_all']              = '全て';
$lang['client_zip_payment_modes']           = '～により支払が作成された';
$lang['client_zip_no_data_found']           = ' %s 見つかりませんでした';

# Payments
$lang['payment_mode']         = '支払モード';
$lang['payment_view_heading'] = '支払';

# Settings
$lang['settings_allow_payment_amount_to_be_modified']               = '顧客に支払（オンライン支払）の総額の修正を許可します';
$lang['settings_survey_send_emails_per_cron_run']                   = 'どのくらいのメールを毎時送信するか';
$lang['settings_survey_send_emails_per_cron_run_tooltip']           = 'このオプションは調査を送る時に使われる。この調査クローンは毎時Xメールとして送信される。いくつかのホスティングプロバイダーは毎時送信するメールに制限があります。';
$lang['settings_delete_only_on_last_invoice']                       = '最後の請求書のみ請求書の削除を許可する';
$lang['settings_sales_estimate_prefix']                             = '見積り数プレフィックス';
$lang['settings_sales_next_estimate_number']                        = '次の見積り数';
$lang['settings_sales_next_estimate_number_tooltip']                = '初めからスタートするためには、このフィールドを1にセットして下さい';
$lang['settings_sales_decrement_estimate_number_on_delete']         = 'デクリメント推定数を削除する';
$lang['settings_sales_decrement_estimate_number_on_delete_tooltip'] = '最終見積りが削除された場合、推定数を減少させたいですか？
eq.もしこのオプションがはいとセットされ見積りが削除される前であれば、次の推定数は15であり次の推定数は14に減少される。もしいいえにセットされた場合は数字は15のままである。もし最後の見積りをいいえのみに削除することをセットアップした場合、次の推定数を減少させないためにこのオプションをいいえにセットすべきである。
';
$lang['settings_sales_estimate_number_format']                      = '見積数フォーマット';
$lang['settings_sales_estimate_number_format_year_based']           = '年基準';
$lang['settings_sales_estimate_number_format_number_based']         = '数基準 (000001)';
$lang['settings_delete_only_on_last_estimate']                      = '最後の請求書のみ見積りの削除を許可する';
$lang['settings_cron_invoice_heading']                              = '請求書';
$lang['settings_send_test_email_heading']                           = 'テストメールを送る';
$lang['settings_send_test_email_subheading']                        = 'SMPTセッティングが正しくセットされているかを確認するためにテストメールを送る';
$lang['settings_send_test_email_string']                            = 'メールアドレス';
$lang['settings_smtp_settings_heading']                             = 'SMTP セッティング';
$lang['settings_smtp_settings_subheading']                          = 'メインメールをセットアップする';

$lang['settings_sales_heading_general']                             = '概要';
$lang['settings_sales_heading_invoice']                             = '請求書';
$lang['settings_sales_heading_estimates']                           = '見積書';
$lang['settings_sales_heading_company']                             = '会社';
$lang['settings_sales_cron_invoice_heading']                        = '請求書';

# Tasks
$lang['tasks_dt_datestart'] = '開始日';
$lang['tasks_dt_priority']  = '優先';

# Invoice General
$lang['invoice_discount'] = 'ディスカウント';

# Settings
$lang['settings_rtl_support_admin']                                   = 'RTL 管理エリア（右から左）';
$lang['settings_rtl_support_client']                                  = 'RTL 顧客エリア（右から左）';
$lang['acs_language_editor']                                          = '言語編集者';
$lang['settings_estimate_auto_convert_to_invoice_on_client_accept']   = 'クライアントが受諾した場合、請求書に自動的に見積りを変更する';
$lang['settings_exclude_estimate_from_client_area_with_draft_status'] = '顧客エリアから見積りとドラフトステータスを排除する';

# Months
$lang['January']   = '1月';
$lang['February']  = '2月';
$lang['March']     = '3月';
$lang['April']     = '4月';
$lang['May']       = '5月';
$lang['June']      = '6月';
$lang['July']      = '7月';
$lang['August']    = '8月';
$lang['September'] = '9月';
$lang['October']   = '10月';
$lang['November']  = '11月';
$lang['December']  = '12月';

# Time ago function translate
$lang['time_ago_just_now']  = 'たった今';
$lang['time_ago_minute']    = '一分前';
$lang['time_ago_minutes']   = '%s 分前';
$lang['time_ago_hour']      = '一時間前';
$lang['time_ago_hours']     = '%s 時前';
$lang['time_ago_yesterday'] = '昨日';
$lang['time_ago_days']      = '%s 日前';
$lang['time_ago_week']      = '一週間前';
$lang['time_ago_weeks']     = '%s 週前';
$lang['time_ago_month']     = '一ヶ月前';
$lang['time_ago_months']    = '%s ヶ月前';
$lang['time_ago_year']      = '一年前';
$lang['time_ago_years']     = '%s 年前';


# Estimates
$lang['estimates']                          = '見積書';
$lang['estimate']                           = '見積書';
$lang['estimate_lowercase']                 = '見積書';
$lang['create_new_estimate']                = '新しい見積書を作成する';
$lang['view_estimate']                      = '見積りを見る';
$lang['estimate_sent_to_client_success']    = 'クライアントに見積りが正しく送られた';
$lang['estimate_sent_to_client_fail']       = '見積りを送信中に問題が発生';
$lang['estimate_reminder_send_problem']     = '見積りの期限超過リマインダーを送信中に問題発生';
$lang['estimate_details']                   = '見積り詳細';
$lang['estimate_view']                      = '見積りを見る';
$lang['estimate_select_customer']           = '顧客';
$lang['estimate_add_edit_number']           = '見積り数';
$lang['estimate_add_edit_date']             = '見積り予定日';
$lang['estimate_add_edit_expirydate']       = '有効期限';
$lang['estimate_add_edit_currency']         = '通貨';
$lang['estimate_add_edit_client_note']      = 'クライアント注釈';
$lang['estimate_add_edit_admin_note']       = 'アドミン注釈';
$lang['estimate_add_edit_new_item']         = '新しいアイテム';
$lang['estimate_add_edit_search_item']      = 'アイテムを検索する';
$lang['estimates_toggle_table_tooltip']     = 'トグルテーブル';
$lang['estimate_add_edit_advanced_options'] = 'アドバンスオプション';
$lang['estimate_vat']                       = 'VAT 数';
$lang['estimate_to']                        = '請求先住所:';
$lang['estimates_list_all']                 = '全て';

$lang['estimate_invoiced_date']                  = '%s に請求書を見積もる';
$lang['edit_estimate_tooltip']                   = '見積りを編集する';
$lang['delete_estimate_tooltip']                 = '見積りを削除する';
$lang['estimate_sent_to_email_tooltip']          = 'メールに送る';
$lang['estimate_already_send_to_client_tooltip'] = 'クライアントに既にこの見積りは送られました %s';
$lang['estimate_view_activity_tooltip']          = '活動記録';

$lang['estimate_send_to_client_modal_heading']    = 'クライアントに見積りを送る';
$lang['estimate_send_to_client_attach_pdf']       = 'PDFに見積りを付ける';
$lang['estimate_send_to_client_preview_template'] = 'メールテンプレートをプレビューする';

$lang['estimate_dt_table_heading_number']     = '見積書 #';
$lang['estimate_dt_table_heading_date']       = '日付';
$lang['estimate_dt_table_heading_client']     = '顧客';
$lang['estimate_dt_table_heading_expirydate'] = '有効期限';
$lang['estimate_dt_table_heading_amount']     = '価格';
$lang['estimate_dt_table_heading_status']     = 'ステータス';

$lang['estimate_email_link_text']    = '見積書を見る';
$lang['estimate_convert_to_invoice'] = '請求書を変更する';
# Home
$lang['home_unfinished_tasks']       = '未完了タスク';

# Clients
$lang['client_estimates_tab'] = '見積書';
$lang['client_payments_tab']  = '支払';


# Estimate General
$lang['estimate_pdf_heading']            = '見積書';
$lang['estimate_table_item_heading']     = 'アイテム';
$lang['estimate_table_quantity_heading'] = '数量';
$lang['estimate_table_rate_heading']     = '単価';
$lang['estimate_table_tax_heading']      = '税';
$lang['estimate_table_amount_heading']   = '価格';
$lang['estimate_subtotal']               = '小計';
$lang['estimate_adjustment']             = '調整';
$lang['estimate_discount']               = 'ディスカウント';
$lang['estimate_total']                  = '合計金額';
$lang['estimate_to']                     = '請求先住所:';
$lang['estimate_data_date']              = '見積書日';
$lang['estimate_data_expiry_date']       = '有効期限';
$lang['estimate_note']                   = '注釈:';
$lang['estimate_status_draft']           = 'ドラフト';
$lang['estimate_status_sent']            = '送信済み';
$lang['estimate_status_declined']        = '拒否された';
$lang['estimate_status_accepted']        = '容認された';
$lang['estimate_status_expired']         = '期限切れ';
$lang['estimate_note']                   = '注釈:';

# Quick create
$lang['qa_create_estimate'] = '見積りを作成する';
$lang['qa_create_lead']     = 'リードを作成する';


## Clients
$lang['clients_estimate_dt_number']             = '見積書 #';
$lang['clients_estimate_dt_date']               = '日付';
$lang['clients_estimate_dt_duedate']            = '有効期限';
$lang['clients_estimate_dt_amount']             = '価格';
$lang['clients_estimate_dt_status']             = 'ステータス';
$lang['clients_nav_estimates']                  = '見積書';
$lang['clients_decline_estimate']               = '拒否する';
$lang['clients_accept_estimate']                = '容認する';
$lang['clients_my_estimates']                   = '見積書';
$lang['clients_estimate_invoiced_successfully']  = '見積りを受諾頂きありがとうございます。見積りのために作成された請求書をレビューして';
$lang['clients_estimate_accepted_not_invoiced'] = 'この見積りを受諾頂きありがとうございます';
$lang['clients_estimate_declined']              = '推定値は減少しました。見積りは有効期限前のいつでも受諾する事ができます';
$lang['clients_estimate_failed_action']         = 'この見積りに取り掛かる事ができませんでした';
$lang['client_add_edit_profile']                = 'プロファイル';

# Custom Fields
$lang['custom_field']                          = 'カスタムフィールド';
$lang['custom_field_lowercase']                = 'カスタムフィールド';
$lang['custom_fields']                         = 'カスタムフィールド';
$lang['custom_fields_lowercase']               = 'カスタムフィールド';
$lang['new_custom_field']                      = ' 新しいカスタムフィールド';
$lang['custom_field_name']                     = 'フィールド名';
$lang['custom_field_add_edit_type']            = 'タイプ';
$lang['custom_field_add_edit_belongs_top']     = 'フィールドは ～ に属する';
$lang['custom_field_add_edit_options']         = 'オプション';
$lang['custom_field_add_edit_options_tooltip'] = '選択のみに使用する、チェックボックスタイプ。コマによりオプションを分けフィールドに入力する。Eq.りんご、オレンジ、バナナ';
$lang['custom_field_add_edit_order']           = '注文';

$lang['custom_field_dt_field_to']       = '～に属する';
$lang['custom_field_dt_field_name']     = '名前';
$lang['custom_field_dt_field_type']     = 'タイプ';
$lang['custom_field_add_edit_active']   = 'アクティブ';
$lang['custom_field_add_edit_disabled'] = '無効';

# Ticket replies
$lang['ticket_reply']           = 'チケット応答';
$lang['ticket_reply_lowercase'] = 'チケット応答';

# Admin Customizer Sidebar
$lang['asc_custom_fields'] = 'カスタムフィールド';

# Contracts
$lang['contract_types']          = '契約形式';
$lang['contract_type']           = '契約形式';
$lang['new_contract_type']       = ' 新しい契約形式';
$lang['contract_type_lowercase'] = '契約';
$lang['contract_type_name']      = '名前';

$lang['contract_types_list_name'] = '契約形式';

# Customizer Menu
$lang['acs_contracts']      = '契約';
$lang['acs_contract_types'] = '契約形式';

# Version 1.0.4
# Invoice Items
$lang['invoice_item_long_description']     = '長い記述';
# Customers
$lang['client_delete_invoices_warning']    = 'こちらのクライアントは請求書又はアカウントの見積りがあります。こちらのクライアントを削除できません。全ての請求書を将来的に他のクライアントに変更し、削除して下さい。';
$lang['clients_list_phone']                = '電話番号';
$lang['client_expenses_tab']               = '経費';
$lang['customers_summary']                 = 'カスタマーサマリー';
$lang['customers_summary_active']          = '頻繁に取引している';
$lang['customers_summary_inactive']        = '停止中の取引';
$lang['customers_summary_logged_in_today'] = '今日ログされたコンタクト';

# Authentication
$lang['admin_auth_forgot_password_email']             = 'メールアドレス';
$lang['admin_auth_forgot_password_heading']           = 'パスワードを忘れた';
$lang['admin_auth_login_heading']                     = 'ログイン';
$lang['admin_auth_login_email']                       = 'メールアドレス';
$lang['admin_auth_login_password']                    = 'パスワード';
$lang['admin_auth_login_remember_me']                 = '覚えておく事';
$lang['admin_auth_login_button']                      = 'ログイン';
$lang['admin_auth_login_fp']                          = 'パスワードを忘れましたか?';
$lang['admin_auth_reset_password_heading']            = 'パスワードをリセットする';
$lang['admin_auth_reset_password']                    = 'パスワード';
$lang['admin_auth_reset_password_repeat']             = 'パスワードを繰り返す';
$lang['admin_auth_invalid_email_or_password']         = '無効メール又はパスワード';
$lang['admin_auth_inactive_account']                  = '休眠口座';
# Calender
$lang['calendar_estimate']                            = '見積書';
$lang['calendar_invoice']                             = '請求書';
$lang['calendar_contract']                            = '契約';
$lang['calendar_customer_reminder']                     = 'クライアントリマインダー';
$lang['calendar_event']                               = 'イベント';
$lang['calendar_task']                                = 'タスク';
# Leads
$lang['lead_edit_delete_tooltip']                     = 'リードを削除する';
$lang['lead_attachments']                             = '添付';
# Admin Customizer Sidebar
$lang['acs_finance']                                  = 'ファイナンス';
# Settings

$lang['settings_show_sale_agent_on_invoices']         = '請求書に販売代理人を表示する';
$lang['settings_show_sale_agent_on_estimates']        = '見積りに販売代理人を表示する';
$lang['settings_predefined_predefined_term']          = '定義済み契約条件';
$lang['settings_predefined_clientnote']               = '定義済みクライアント注記';
$lang['settings_custom_pdf_logo_image_url']           = 'PDF会社ロゴURLをカスタマイズする';
$lang['settings_custom_pdf_logo_image_url_tooltip']   = 'Probably you will have problems with PNG images with transparency that are handled in different way depending on the php-imagick or php-gd version used. Try to update php-imagick and disable php-gd
. If you leave this field blank the uploaded logo will be used.';

# General
$lang['sale_agent_string']               = '販売代理人';
$lang['amount_display_in_base_currency'] = '総額は基準通貨にディスプレイされています – 支払いと費用に1通貨を使用している時のみこのレポートを使う';
# Leads
$lang['leads_summary']                                         = 'リードサマリー';

# Contracts
$lang['contract_value']                 = '契約値';
$lang['contract_trash']                 = 'ゴミ箱';
$lang['contracts_view_trash']           = 'ゴミ箱を表示する';
$lang['contracts_view_all']             = '全て';
$lang['contracts_view_exclude_trashed'] = '駄目になった契約を除外する';
$lang['contract_value_tooltip']         = '基準通貨が使用される';
$lang['contract_trash_tooltip']         = 'もし契約をゴミ箱に追加した場合、クライアント側には表示されず、チャートや他の統計にも含まれず又デフォルトにより全ての契約を記入しても表示されません';
$lang['contract_summary_active']              = 'アクティブ';
$lang['contract_renew_heading']               = '契約を新しくする';
$lang['contract_summary_heading']             = '契約概要';
$lang['contract_summary_expired']             = '失効した';
$lang['contract_summary_about_to_expire']     = 'そろそろ期限が切れる';
$lang['contract_summary_recently_added']      = '最近追加した';
$lang['contract_summary_trash']               = 'ゴミ';
$lang['contract_summary_by_type']             = 'タイプによる契約';
$lang['contract_summary_by_type_value']       = 'タイプによる契約価値';
$lang['contract_renewed_successfully']         = '契約の更新に成功しました';
$lang['contract_renewed_fail']                = '契約更新中に問題発生。管理者に連絡。';
$lang['no_contract_renewals_found']           = 'この契約の更新は見つかっていません';
$lang['no_contract_renewals_history_heading'] = '契約更新の歴史';
$lang['contract_renewed_by']                  = 'この契約を更新した %s';
$lang['contract_renewal_deleted']             = '更新成功を削除する';
$lang['contract_renewal_delete_fail']         = '契約更新の削除失敗。管理者に連絡。';

$lang['contract_renewal_new_value'] = '新しい契約価値: %s';
$lang['contract_renewal_old_value'] = '古い契約価値: %s';

$lang['contract_renewal_new_start_date'] = '新しい開始日: %s';
$lang['contract_renewal_old_start_date'] = '古い契約開始日は: %s';

$lang['contract_renewal_new_end_date'] = '新しい終了日: %s';
$lang['contract_renewal_old_end_date'] = '古い契約の終了日: %s';
$lang['contract_attachment']           = 'アタッチメント';
$lang['contract_attachment_lowercase'] = 'アタッチメント';

# Admin Aside Menu
$lang['als_goals_tracking']     = 'ゴールトラッキング';
$lang['als_expenses']           = '費用';
$lang['als_reports_expenses']   = '費用';
$lang['als_expenses_vs_income'] = '費用vs所得';

# Invoices
$lang['invoice_attach_file']           = 'ファイルをアタッチする';
$lang['invoice_mark_as_sent']          = '送信済みとマークする';
$lang['invoice_marked_as_sent']        = '請求書は無事に送られたとマークしてある';
$lang['invoice_marked_as_sent_failed'] = '請求書が送信済みとマーク失敗';

# Quick Actions
$lang['qa_new_goal']    = '新しい目標をセットアップする';
$lang['qa_new_expense'] = '費用を記録する';

# Goals Tracking
$lang['goals']                                         = 'ゴール';
$lang['goal']                                          = 'ゴール';
$lang['goals_tracking']                                = 'ゴールトラッキング';
$lang['new_goal']                                      = '新しいゴール';
$lang['goal_lowercase']                                = 'ゴール';
$lang['goal_start_date']                               = '開始日';
$lang['goal_end_date']                                 = '終了日';
$lang['goal_subject']                                  = '題目';
$lang['goal_description']                              = '説明';
$lang['goal_type']                                     = 'ゴールタイプ';
$lang['goal_achievement']                              = '達成';
$lang['goal_contract_type']                            = '契約タイプ';
$lang['goal_notify_when_fail']                         = '目標に達成できなかった場合はスタッフメンバーに通知する';
$lang['goal_notify_when_achieve']                      = '目標を達成した場合はスタッフメンバーに通知する';
$lang['goal_progress']                                 = 'ゴール進展';
$lang['goal_total']                                    = '合計: %s';
$lang['goal_result_heading']                           = 'ゴール進展';
$lang['goal_income_shown_in_base_currency']            = '総所得は基準通貨に表示されている';
$lang['goal_notify_when_end_date_arrives']             = 'スタッフメンバーは終了日が来たら通知される (Requires CRON).';
$lang['goal_staff_members_notified_about_achievement'] = 'スタッフメンバーはこのゴール達成に対し通知される';
$lang['goal_staff_members_notified_about_failure']     = 'スタッフメンバーは失敗に対し通知される';
$lang['goal_notify_staff_manually']                     = '手動でスタッフメンバーに通知する';
$lang['goal_notify_staff_notified_manually_success']    = 'スタッフメンバーはこのゴールの結果を通知される';
$lang['goal_notify_staff_notified_manually_fail']       = 'スタッフメンバーにこのゴールの結果を通知する事に失敗する';

$lang['goal_achieved'] = '達成した';
$lang['goal_failed']   = '失敗した';
$lang['goal_close']    = 'ほぼ';

$lang['goal_type_total_income']                                         = '総所得に達成する';
$lang['goal_type_convert_leads']                                        = 'X リードに変換する';
$lang['goal_type_increase_customers_without_leads_conversions']         = '顧客数を増やす';
$lang['goal_type_increase_customers_without_leads_conversions_subtext'] = 'リードコンバージョンは除外されている';

$lang['goal_type_increase_customers_with_leads_conversions']         = '顧客数を増やす';
$lang['goal_type_increase_customers_with_leads_conversions_subtext'] = 'リードコンバージョンは含まれている';
$lang['goal_type_make_contracts_by_type_calc_database']              = 'タイプごとに契約を作成する';
$lang['goal_type_make_contracts_by_type_calc_database_subtext']      = '日付がデータベースに追加されたか計算された';
$lang['goal_type_make_contracts_by_type_calc_date']                  = 'タイプごとに契約を作成する';
$lang['goal_type_make_contracts_by_type_calc_date_subtext']          = '開始日より計算されている';
$lang['goal_type_total_estimates_converted']                         = 'X 見積りコンバージョン ';
$lang['goal_type_total_estimates_converted_subtext']                 = '請求書に変換される見積りのみが取られます';
$lang['goal_type_income_subtext']                                    = '所得は基礎通貨に計算される（変換されていない）';
# Payments
$lang['payment_transaction_id']                                      = '取引 ID';
# Settings Menu
$lang['acs_expenses']                                                = '経費';
$lang['acs_expense_categories']                                      = '経費カテゴリー';
# Expeneses
$lang['expense_category']                                            = '経費カテゴリー';
$lang['expense_category_lowercase']                                  = '経費カテゴリー';
$lang['new_expense']                                                 = '経費を記録する';
$lang['expense_add_edit_name']                                       = 'カテゴリー名';
$lang['expense_add_edit_description']                                = 'カテゴリー説明';
$lang['expense_categories']                                          = '経費カテゴリー';
$lang['new_expense_category']                                        = '新しいカテゴリー';
$lang['dt_expense_description']                                      = '説明';
$lang['expense']                                                     = '経費';
$lang['expenses']                                                    = '経費';
$lang['expense_lowercase']                                           = '経費';
$lang['expense_add_edit_tax']                                        = '税';
$lang['expense_add_edit_customer']                                   = '顧客';
$lang['expense_add_edit_currency']                                   = '通貨';
$lang['expense_add_edit_note']                                       = '注釈';
$lang['expense_add_edit_date']                                       = '経費日';
$lang['expense_add_edit_amount']                                     = '価格';
$lang['expense_add_edit_billable']                                   = '支払い請求可能な';
$lang['expense_add_edit_attach_receipt']                             = '領収書を付ける';
$lang['expense_add_edit_reference_no']                               = '参照 #';
$lang['expense_receipt']                                             = '経費レシート';
$lang['expense_receipt_lowercase']                                   = '経費レシート';
$lang['expense_dt_table_heading_category']                           = 'カテゴリー';
$lang['expense_dt_table_heading_amount']                             = '価格';
$lang['expense_dt_table_heading_date']                               = '日付';
$lang['expense_dt_table_heading_reference_no']                       = '参照 #';
$lang['expense_dt_table_heading_customer']                           = '顧客';
$lang['expense_dt_table_heading_payment_mode']                       = '支払モード';
$lang['expense_converted_to_invoice']                                = '経費は請求書に転換成功';
$lang['expense_converted_to_invoice_fail']                           = 'この経費を請求書に転換失敗,　エラーロゴを確認する';
$lang['expense_copy_success']                                        = 'この経費は確実に複写されている';
$lang['expense_copy_fail']                                           = '経費の複写に失敗。必須フィールドを確認しもう一度やり直して下さい。';
$lang['expenses_list_all']                                           = '全て';
$lang['expenses_list_billable']                                      = '支払い請求可能な';
$lang['expenses_list_non_billable']                                  = '支払い請求不可能な';
$lang['expenses_list_invoiced']                                      = '請求';
$lang['expenses_list_unbilled']                                      = '請求されていない';
$lang['expenses_list_recurring']                                     = '反復';
$lang['expense_invoice_delete_not_allowed']                          = 'この経費を削減できる。この経費は請求済みである';
$lang['expense_convert_to_invoice']                                  = '請求書に転換する';
$lang['expense_edit']                                                = '軽費に編集する';
$lang['expense_delete']                                              = '削除する';
$lang['expense_copy']                                                = '複写する';
$lang['expense_invoice_not_created']                                 = '請求書は作成されていない';
$lang['expense_billed']                                              = '請求';
$lang['expense_not_billed']                                          = '請求未払い';
$lang['expense_customer']                                            = '顧客';
$lang['expense_note']                                                = '注釈:';
$lang['expense_date']                                                = '日付:';
$lang['expense_ref_noe']                                             = 'Ref #:';
$lang['expense_tax']                                                 = '税:';
$lang['expense_amount']                                              = '総額:';
$lang['expense_recurring_indicator']                                 = '反復';
$lang['expense_already_invoiced']                                    = 'この経費は既に請求済み';
$lang['expense_recurring_auto_create_invoice']                       = '請求書自動作成';
$lang['expense_recurring_send_custom_on_renew']                      = '請求が繰り返された場合、この請求書を顧客メールに送る';
$lang['expense_recurring_autocreate_invoice_tooltip']                = 'このオプションが顧客への請求書を確認した場合、請求が新しく変更された場合に自動作成される。';
$lang['report_expenses_full']                                        = '全記録';
$lang['expenses_yearly_by_categories']                               = 'カテゴリー毎の年間経費';
$lang['total_expenses_for']                                          = '～の総経費'; // year
$lang['expenses_report_for']                                         = '～の経費'; // year
# Custom fields
$lang['custom_field_required']                                       = '必須の';
$lang['custom_field_show_on_pdf']                                    = 'PDFに表示する';
$lang['custom_field_leads']                                          = 'リード';
$lang['custom_field_customers']                                      = '顧客';
$lang['custom_field_staff']                                          = 'スタッフ';
$lang['custom_field_contracts']                                      = '契約';
$lang['custom_field_tasks']                                          = 'タスク';
$lang['custom_field_expenses']                                       = '経費';
$lang['custom_field_invoice']                                        = '請求書';
$lang['custom_field_estimate']                                       = '見積書';
# Tickets
$lang['ticket_single_private_staff_notes']                           = 'プライベートスタッフ注記';


# Business News
$lang['business_news'] = 'ビジネスニュース';

# Navigation
$lang['nav_todo_items']               = 'やるべき事アイテム';
# Clients
# Contracts
$lang['clients_contracts_type']       = '契約タイプ';
# Version 1.0.5
# General
$lang['no_tax']                             = '税なし';
$lang['numbers_not_formatted_while_editing'] = 'インプットフィールドのレートは編集/アイテム追加時にフォーマット化されておらず、又フォーマットされぬようすべきでありここでは手動でフォーマット化もしないで下さい。';
# Contracts
$lang['contracts_view_expired']             = '期限切れ';
$lang['contracts_view_without_dateend']     = '終了日なしの契約';

# Email Templates
$lang['email_template_contracts_fields_heading'] = '契約';
# Invoices General
$lang['invoice_estimate_general_options']        = '一般のオプション';
$lang['invoice_table_item_description']          = '記述';
$lang['invoice_recurring_indicator']             = '繰り返し起きる';

# Estimates
$lang['estimate_convert_to_invoice_successfully'] = '請求書に見積り転換成功';
$lang['estimate_table_item_description']         = '記述';

# Version 1.0.6
# Invoices
# Currencies
$lang['cant_delete_base_currency'] = '基準通貨を削除する事はできません。新しい基準通貨をあてがった後にこちらを削除して下さい。';
$lang['invoice_copy']              = '請求書を複写する';
$lang['invoice_copy_success']      = '請求書の複写成功';
$lang['invoice_copy_fail']         = '請求書の複写失敗';
$lang['invoice_due_after_help']    = '計算ミスを避けるためにゼロにセットする';

$lang['show_shipping_on_invoice'] = '請求書に発送の詳細を表示する';

# Estimates
$lang['show_shipping_on_estimate']         = '見積りに発送の詳細を表示する';
$lang['is_invoiced_estimate_delete_error'] = 'この見積りは請求済みである。見積りを削除できます。';

# Customers & Invoices / Estimates
$lang['ship_to']                  = '配送先:';
$lang['customer_profile_details'] = '顧客詳細';
$lang['billing_shipping']         = '請求書と発送';
$lang['billing_address']          = '請求書送付先住所';
$lang['shipping_address']         = '発送先';

$lang['billing_street']  = '番地';
$lang['billing_city']    = '市';
$lang['billing_state']   = '州';
$lang['billing_zip']     = '郵便番号';
$lang['billing_country'] = '国';

$lang['shipping_street']                    = '番地';
$lang['shipping_city']                      = '市';
$lang['shipping_state']                     = '州';
$lang['shipping_zip']                       = '郵便番号';
$lang['shipping_country']                   = '国';
$lang['get_shipping_from_customer_profile'] = '送付先の詳細を顧客プロファイルから得る';

# Customer
$lang['customer_file_from']                                    = '%s から表示する';
$lang['customer_default_currency']                             = 'デフォルト通貨';
$lang['customer_no_attachments_found']                         = '添付は見つかりませんでした';
$lang['customer_update_address_info_on_invoices']              = '全ての以前の請求書/見積書から発送/請求をアップデートする';
$lang['customer_update_address_info_on_invoices_help']         = 'このフィールドの発送と請求書確認した際、情報は全ての請求書と見積書にアップデートされる. Note: Invoices with status paid wont be affected.';
$lang['setup_google_api_key_customer_map']                     = '顧客の地図を一覧するためにGoogle APIキーをセットアップして下さい';
$lang['customer_attachments_file']                             = 'ファイル';
$lang['client_send_set_password_email']                        = 'SETパスワードをメールに送る';
$lang['customer_billing_same_as_profile']                      = '顧客情報を同一';
$lang['customer_billing_copy']                                 = '請求書送付先住所を複写する';
$lang['customer_map']                                          = '地図';
$lang['set_password_email_sent_to_client']                     = 'パスワードをセットするためのメールは連絡先に送られた';
$lang['set_password_email_sent_to_client_and_profile_updated'] = 'パスワードをセットするためのプロファイルアップデートとメールは連絡先に送られました';
$lang['customer_attachments']                                  = 'ファイル';
$lang['customer_longitude']                                    = '経度 (Google Maps)';
$lang['customer_latitude']                                     = '緯度 (Google Maps)';

# Authentication
$lang['admin_auth_set_password']          = 'パスワード';
$lang['admin_auth_set_password_repeat']   = 'パスワードを繰り返す';
$lang['admin_auth_set_password_heading']  = 'パスワードをセットする';
$lang['password_set_email_subject']       = '%s に新しいパスワードをセットする';
# General
$lang['apply']                            = '適用する';
$lang['department_calendar_id']           = 'Google ルカレンダー ID';
$lang['kan_ban_string']                   = 'Kan Ban';
$lang['localization_default_language']    = 'デフォルト言語';
$lang['system_default_string']            = 'システムデフォルト';
$lang['advanced_options']                 = '高度なオプション';
# Expenses
$lang['expense_list_invoice']             = '請求された';
$lang['expense_list_billed']              = '請求済み';
$lang['expense_list_unbilled']            = '請求されていない';
# Leads
$lang['lead_merge_custom_field']          = '顧客フィールドとして結合する';
$lang['lead_merge_custom_field_existing'] = 'データーベースとして結合する';
$lang['lead_dont_merge_custom_field']     = '結合させないで下さい';
$lang['no_lead_notes_found']              = 'リードノートは見つかりません';
$lang['leads_view_list']                  = 'リスト';
$lang['lost_leads']                       = 'リードを失う';
$lang['junk_leads']                       = 'ジャンクリード';
$lang['lead_mark_as_lost']                = '無くなったとものとしてマークする';
$lang['lead_unmark_as_lost']              = '無くなったとものとしてリードを無標する';
$lang['lead_marked_as_lost']              = '損失としてマークに成功したリード';
$lang['lead_unmarked_as_lost']            = '損失として不標に成功したリード';
$lang['leads_status_color']               = '色';

$lang['lead_mark_as_junk']     = '廃品としてマークする';
$lang['lead_unmark_as_junk']   = '廃品としてリードを無標にする';
$lang['lead_marked_as_junk']   = 'ジャンクとしてマークに成功したリード';
$lang['lead_unmarked_as_junk'] = 'ジャンクとして不標に成功したリード';

$lang['lead_not_found']                                                      = 'リードは見つかりません　';
$lang['lead_lost']                                                           = '失われた';
$lang['lead_junk']                                                           = 'ジャンク';
$lang['leads_not_assigned']                                                  = '割り当てられていない';
# Contacts
$lang['contract_not_visible_to_client']                                      = '顧客から非表示にする';
$lang['contract_edit_overview']                                              = '契約を概観する';
$lang['contract_attachments']                                                = 'アタッチメント';
# Tasks
$lang['task_view_make_public']                                               = '公表する';
$lang['task_is_private']                                                     = 'プライベートタスク';
$lang['task_finished']                                                       = '終わる';
$lang['task_single_related']                                                 = '関連した';
$lang['task_unmark_as_complete']                                             = '完了済みとを無標にする';
$lang['task_unmarked_as_complete']                                           = '完了済みとタスクを無標にする';
$lang['task_relation']                                                       = '関連した';
$lang['task_public']                                                         = '公共の';
$lang['task_public_help']                                                    = 'このタスクを公開にセットした場合、全てのスタッフメンバーに周知されます。又は担当者、フォロワー、クリエイター並びに管理者のみに周知されます。';
# Settings
$lang['settings_general_favicon']                                            = 'ファビコン';
$lang['settings_output_client_pdfs_from_admin_area_in_client_language']      = '管理エリアのクライアントの言語によりクライアントのPDFドキュメントをアウトプットします。';
$lang['settings_output_client_pdfs_from_admin_area_in_client_language_help'] = 'このオプションがはいとeq.にセットされた場合、このシステムのデフォルト言語は英語でありクライアントはフランス語にセットアップされ、後にpdfドキュメントはクライアントの言語にアットプットされます';
$lang['settings_cron_surveys']                                               = '調査';
$lang['settings_default_tax']                                                = 'デフォルト税';
$lang['setup_calendar_by_departments']                                       = '部ごとにカレンダーはセットアップされる';
$lang['settings_calendar']                                                   = 'カレンダー';
$lang['settings_sales_invoice_due_after']                                    = '期日（日）後に請求する';
$lang['settings_google_api']                                                 = 'Google API キー';
$lang['settings_gcal_main_calendar_id']                                      = 'Google カレンダー ID';
$lang['settings_gcal_main_calendar_id_help']                                 = 'こちらは主会社のカレンダーです。このカレンダーにおける全てのイベントは表示されます。部によりカレンダーを特定されたい場合は、Google カレンダー ID に部を追加する事ができます。';

$lang['show_on_calendar']                  = 'カレンダーに表示する';
$lang['show_invoices_on_calendar']         = '請求書';
$lang['show_estimates_on_calendar']        = '見積書';
$lang['show_contracts_on_calendar']        = '契約';
$lang['show_tasks_on_calendar']            = 'タスク';
$lang['show_customer_reminders_on_calendar'] = 'カスタマーリマインダー';

# Leads
$lang['copy_custom_fields_convert_to_customer']                      = '顧客プロファイルを顧客フィールドへ複写する';
$lang['copy_custom_fields_convert_to_customer_help']                 = 'もし顧客フィールドに顧客が存在しない場合、同じ名前が自動的に作成され又は価値のみがリードプロファイルに複写されます';
$lang['lead_profile']                                                = 'プロファイル';
$lang['lead_is_client']                                              = '顧客';
$lang['leads_kan_ban_notes_title']                                   = '注釈';
$lang['leads_email_integration_folder_no_encryption']                = '暗号化なし';
$lang['leads_email_integration']                                     = 'メール統合';
$lang['leads_email_active']                                          = 'アクティブ';
$lang['leads_email_integration_imap']                                = 'IMAP サーバー';
$lang['leads_email_integration_email']                               = 'メールアドレス（ログイン）';
$lang['leads_email_integration_password']                            = 'パスワード';
$lang['leads_email_integration_default_source']                      = 'デフォルトの発信源';
$lang['leads_email_integration_check_every']                         = '毎（分）事に確認する';
$lang['leads_email_integration_default_assigned']                    = '新しいリードに責任がある';
$lang['leads_email_encryption']                                      = '暗号化';
$lang['leads_email_integration_updated']                             = 'メール統合アップデート';
$lang['leads_email_integration_default_status']                      = 'デフォルトステータス';
$lang['leads_email_integration_folder']                              = 'フォルダー';
$lang['leads_email_integration_notify_when_lead_imported']           = 'リードが輸入されたら注釈する';
$lang['leads_email_integration_only_check_unseen_emails']            = '未開封メールのみ確認する';
$lang['leads_email_integration_only_check_unseen_emails_help']       = 'スクリプトは確認後に自動でメールが開くようにセットされています。こちらは繰り返してメールを確認する事を防ぐために使われています。もし膨大なメールがあり、又リードのためにセットアップし、メールへ転送するようセットアップされている場合は、このオプションをチェックマークから外す事はお勧めしません';
$lang['leads_email_integration_notify_when_lead_contact_more_times'] = 'リードがメールを数回送信している場合は通知する';
$lang['leads_email_integration_test_connection']                     = 'IMAP コネクションテストをする';
$lang['lead_email_connection_ok']                                    = 'IMAP コネション良好';
$lang['lead_email_connection_not_ok']                                = 'IMAP コネクションはOKではない';
$lang['lead_email_activity']                                         = 'メールアクティビティー';
$lang['leads_email_integration_notify_roles']                        = '通知するための役割';
$lang['leads_email_integration_notify_staff']                        = '通知するためのスタッフメンバー';
$lang['lead_public']                                                 = '公共の';
# Knowledge Base

$lang['kb_group_color']                = '色';
$lang['kb_group_order']                = '注文';
# Utilities - BULK PDF Exporter
$lang['bulk_pdf_exporter']             = 'バルクPDFエクスポート';
$lang['bulk_export_pdf_payments']      = '支払';
$lang['bulk_export_pdf_estimates']     = '見積書';
$lang['bulk_export_pdf_invoices']      = '請求書';
$lang['bulk_pdf_export_button']        = 'エクスポート';
$lang['bulk_pdf_export_select_type']   = 'タイプを選ぶ';
$lang['no_data_found_bulk_pdf_export'] = 'エクスポート用のデーターは見つかりません';
$lang['bulk_export_status_all']        = '全て';
$lang['bulk_export_status']            = 'ステータス';
$lang['bulk_export_zip_payment_modes'] = '～により支払われた';
$lang['bulk_export_include_tag']       = 'タグ付き';
$lang['bulk_export_include_tag_help']  = 'eq. オリジナル又は複写。　タグはPDFにアウトプットされます。１つのタグのみを使用する事をお勧めします。';
# Predefined replies
$lang['no_predefined_replies_found']   = '事前に定義された返答は見つかっていません';
## Clients area
$lang['clients_contract_attachments']  = 'アタッチメント';
# Backup
$lang['backup_type_full']              = '全バックアップ';
$lang['backup_type_db']                = 'データーベースバックアップ';

$lang['auto_backup_options_updated']     = '自動バックアップオプションはアップデートされました';
$lang['auto_backup_every']               = '毎 X 日にバックアップを作成する';
$lang['auto_backup_enabled']             = '有効にする (Cron が必須)';
$lang['auto_backup']                     = '自動バックアップ';
$lang['backup_delete']                   = 'バックアップ削除';
$lang['create_backup']                   = 'バックアップを作成する';
$lang['backup_success']                  = 'バックアップの作成成功';
$lang['utility_backup']                  = 'データーベースバックアップ';
$lang['utility_create_new_backup_db']    = 'データーベースのバックアップを作成する';
$lang['utility_backup_table_backupname'] = 'バックアップ';
$lang['utility_backup_table_backupsize'] = 'バックアップのサイズ';
$lang['utility_backup_table_backupdate'] = '日付';
$lang['utility_db_backup_note']          = 'NB: 実行時間のリミットとPHPにあるメモリーにより、膨大なデーターベースのバックアップは可能ではありません。もしデーターベースが膨大である場合、コマンドラインから貴方のSQLサーバーを直接バックアップするか、又はルート権がなければ貴方の管理サーバーよりバックアップする必要があります。';

# Version 1.0.7
## Customers - portal
$lang['clients_nav_proposals'] = '提案書';
$lang['clients_nav_support']   = 'サポート';
# General
$lang['more']                  = 'もっと多くの';
$lang['add_item']              = 'アイテムを追加する';
$lang['goto_admin_area']       = '管理エリアへ行く';
$lang['click_here_to_edit']    = '編者する為にここをクリックする';
$lang['delete']                = '%s を削除する';
$lang['welcome_top']           = '%s をウェルカム';

# Customers
$lang['customer_permissions']         = '許可';
$lang['customer_permission_invoice']  = '請求書';
$lang['customer_permission_estimate'] = '見積書';
$lang['customer_permission_proposal'] = '提案書';
$lang['customer_permission_contract'] = '契約';
$lang['customer_permission_support']  = 'サポート';


#Tasks
$lang['task_related_to'] = '関連する';

# Send file
$lang['custom_file_fail_send']    = 'ファイル送信に失敗する';
$lang['custom_file_success_send'] = 'このファイルは %s に送られた';
$lang['send_file_subject']        = 'メール題目';
$lang['send_file_email']          = 'メールアドレス';
$lang['send_file_message']        = 'メッセージ';
$lang['send_file']                = 'ファイルを送る';
$lang['add_checklist_item']       = 'チックリストアイテム';
$lang['task_checklist_items']     = 'チックリストアイテム';

# Import
$lang['default_pass_clients_import'] = '全てのクライアントにパスワードをデフォルトする';
$lang['simulate_import']             = 'インポートをシミュレーションする';
$lang['import_upload_failed']        = 'アップロードに失敗する';
$lang['import_total_imported']       = '全インポートされた: %s';
$lang['import_leads']                = 'リードをインポートする';
$lang['import_customers']            = '顧客をインポートする';
$lang['choose_csv_file']             = 'CSVファイルを選択する';
$lang['import']                      = 'インポート';
$lang['lead_import_status']          = 'ステータス';
$lang['lead_import_source']          = '発信源';

# Bulk PDF Export
$lang['bulk_export_pdf_proposals'] = '提案書';

# Invoices
$lang['delete_invoice'] = '削除する';

# Calendar
$lang['calendar_lead_reminder'] = 'リマインダーをリードする';

$lang['items']      = 'アイテム';
$lang['support']    = 'サポート';
$lang['new_ticket'] = '新しいチケット';

# Reminders
$lang['client_edit_set_reminder_title'] = '顧客リマインダーを追加する';
$lang['lead_set_reminder_title']        = 'リードリマインダーをを追加する';
$lang['set_reminder_tooltip']           = 'このオプションは貴方の顧客について忘れる事がありません';
$lang['client_reminders_tab']           = 'リマインダー';
$lang['leads_reminders_tab']            = 'リマインダー';

# Tickets
$lang['delete_ticket_reply']  = '返信を削除する';
$lang['ticket_priority_edit'] = '優先を編集する';
$lang['ticket_priority_add']  = '優先を追加する';
$lang['ticket_status_edit']   = 'チケットステータスを編集する';
$lang['ticket_service_edit']  = 'チケットサービスを編集する';
$lang['edit_department']      = '部を編集する';

# Expenses
$lang['edit_expense_category']                                    = '経費カテゴリーを編集する';
# Settings
$lang['customer_default_country']                                 = 'デフォルト国';
$lang['settings_sales_require_client_logged_in_to_view_estimate'] = 'クライアントに見積りを見る為にログインするよう要求する';
$lang['set_reminder']                                             = 'リマインダーを送る';
$lang['set_reminder_date']                                        = '通知される日付';
$lang['reminder_description']                                     = '記述をセットする';
$lang['reminder_notify_me_by_email']                              = 'このリマインダーにメールも送る';
$lang['reminder_added_successfully']                               = 'リマインダーの追加成功。そのうち通知されます。';
$lang['reminder_description']                                     = '記述';
$lang['reminder_date']                                            = '日付';
$lang['reminder_staff']                                           = 'リマインドする';
$lang['reminder_is_notified']                                     = '通知されましたか?';
$lang['reminder_is_notified_boolean_no']                          = 'いいえ';
$lang['reminder_is_notified_boolean_yes']                         = 'はい';
$lang['reminder_set_to']                                          = '～にリマインダーをセットする';
$lang['reminder_deleted']                                         = 'リマインダーの削除成功';
$lang['reminder_failed_to_delete']                                = 'リマインダーの削除失敗';
$lang['show_invoice_estimate_status_on_pdf']                      = '請求書/見積書ステータスをPDFに表示する';
$lang['email_piping_default_priority']                            = 'パイプされたチケットの優先はデフォルトレベルです';
$lang['show_lead_reminders_on_calendar']                          = 'リードリマインダー';
$lang['tickets_piping']                                           = 'メールパイピング';
$lang['email_piping_only_replies']                                = 'メールのみの返答を許可する';
$lang['email_piping_only_registered']                             = '登録されたユーザーのみパイプする';

# Estimates
$lang['view_estimate_as_client']         = '顧客として見積りを表示する';
$lang['estimate_mark_as']                = '%s とマークする';
$lang['estimate_status_changed_success'] = '見積りステータス変更';
$lang['estimate_status_changed_fail']    = '見積りステータスの変更失敗';
$lang['estimate_email_link_text']        = '見積りを表示する';

# Proposals
$lang['proposal_to']                            = '会社 / 名';
$lang['proposal_date']                          = '日付';
$lang['proposal_address']                       = '住所';
$lang['proposal_phone']                         = '電話';
$lang['proposal_email']                         = 'メール';
$lang['proposal_date_created']                  = '作られた日付';
$lang['proposal_open_till']                     = '～まで営業している';
$lang['proposal_status_open']                   = '営業している';
$lang['proposal_status_accepted']               = '認めた';
$lang['proposal_status_declined']               = '低下した';
$lang['proposal_status_sent']                   = '送った';
$lang['proposal_expired']                       = '期限切れ';
$lang['proposal_subject']                       = '項目';
$lang['proposal_total']                         = '合計金額';
$lang['proposal_status']                        = 'ステータス';
$lang['proposals_list_all']                     = '全て';
$lang['proposals_leads_related']                = '関連しているリード';
$lang['proposals_customers_related']            = '顧客関連';
$lang['proposal_related']                       = '関連している';
$lang['proposal_for_lead']                      = 'リード';
$lang['proposal_for_customer']                  = '顧客';
$lang['proposal']                               = '提案書';
$lang['proposal_lowercase']                     = '提案書';
$lang['proposals']                              = '提案書';
$lang['proposals_lowercase']                    = '提案書';
$lang['new_proposal']                           = '新しい提案書';
$lang['proposal_currency']                      = '通貨';
$lang['proposal_allow_comments']                = 'コメントを許可する';
$lang['proposal_allow_comments_help']           = 'このオプションを確認すると、あなたのクライアントが提案書を見る時にコメントが許可される';

$lang['proposal_edit']                          = '編集する';
$lang['proposal_pdf']                           = 'PDF';
$lang['proposal_send_to_email']                 = 'メールに送る';
$lang['proposal_send_to_email_title']           = '提案書をメールに送る';
$lang['proposal_attach_pdf']                    = 'PDF に添付する';
$lang['proposal_preview_template']              = 'テンプレートをプレビューする';
$lang['proposal_view']                          = '提案書を表示する';
$lang['proposal_copy']                          = '複写する';
$lang['proposal_delete']                        = '削除する';
$lang['proposal_to']                            = '～へ';
$lang['proposal_add_comment']                   = 'コメントを追加する';
$lang['proposal_sent_to_email_success']         = '提案書はメールに送信されました';
$lang['proposal_sent_to_email_fail']            = '提案書をメールに送る事を失敗しました';
$lang['proposal_copy_fail']                     = '提案書を複写失敗しました';
$lang['proposal_copy_success']                  = '提案書の複写成功しました';
$lang['proposal_status_changed_success']        = '提案書のステータス変更に成功しました';
$lang['proposal_status_changed_fail']           = '提案書のステータス変更に失敗しました';
$lang['proposal_assigned']                      = '割り当てられた';
$lang['proposal_comments']                      = 'コメント';
$lang['proposal_convert']                       = '変換する';
$lang['proposal_convert_estimate']              = '見積書';
$lang['proposal_convert_invoice']               = '請求書';
$lang['proposal_convert_to_estimate']           = '見積りに変換する';
$lang['proposal_convert_to_invoice']            = '請求書に変換する';
$lang['proposal_convert_to_lead_disabled_help'] = '%s を作成するために顧客へのリードを変換する必要があります';
$lang['proposal_convert_not_related_help']      = '提案書は %s を変換するために顧客と関連している必要がある';
$lang['proposal_converted_to_estimate_success'] = '提案書は見積りに変換されました';
$lang['proposal_converted_to_invoice_success']  = '提案書は請求書に変換されました';
$lang['proposal_converted_to_estimate_fail']    = '提案書の見積り変換に失敗しました';
$lang['proposal_converted_to_invoice_fail']     = '提案書の請求書変換に失敗しました';

# Proposals - view proposal template
$lang['proposal_total_info']   = '合計 %s';
$lang['proposal_accept_info']  = '認める';
$lang['proposal_decline_info'] = '低下する';
$lang['proposal_pdf_info']     = 'PDF';

# Customers Portal
$lang['customer_reset_action']            = 'リセットする';
$lang['customer_reset_password_heading']  = 'パスワードをリセットする';
$lang['customer_forgot_password_heading'] = 'パスワードを忘れる';
$lang['customer_forgot_password']         = 'パスワードを忘れましたか?';
$lang['customer_reset_password']          = 'パスワード';
$lang['customer_reset_password_repeat']   = 'パスワードを繰り返す';
$lang['customer_forgot_password_email']   = 'メールアドレス';
$lang['customer_forgot_password_submit']  = '提出する';
$lang['customer_ticket_subject']          = '項目';

# Email templates
$lang['email_template_proposals_fields_heading'] = '提案書';

# Tasks
$lang['add_task_attachments']                 = 'アタッチメント';
$lang['task_view_attachments']                = 'アタッチメント';
$lang['task_view_description']                = '記述';

# Customer Groups
$lang['customer_group_add_heading']  = '新しい顧客グループを追加する';
$lang['customer_group_edit_heading'] = '顧客グループを編集する';
$lang['new_customer_group']          = '新しい顧客グループ';
$lang['customer_group_name']         = '名前';
$lang['customer_groups']             = 'グループ';
$lang['customer_group']              = '顧客グループ';
$lang['customer_group_lowercase']    = '顧客グループ';

$lang['customer_have_invoices_by']       = '%s ステータスによる請求書が含まれます';
$lang['customer_have_estimates_by']      = '%s ステータスによる見積りが含まれます';
$lang['customer_have_contracts_by_type'] = '%s タイプによる契約があります';

# Custom fields
$lang['custom_field_show_on_table']              = 'テーブルに表示する';
$lang['custom_field_show_on_client_portal']      = 'クライアントポータルに表示する';
$lang['custom_field_show_on_client_portal_help'] = 'このフィールドが確認されるとテーブルにも表示されます';
$lang['custom_field_visibility']                 = '可視性';

# Utilities # Menu Builder
$lang['utilities_menu_translate_name_help'] = '翻訳ストリングスをここに追加できます。もしスタッフ/システムに他の言語があれば、デフォルトのメニューアイテム名がスタッフの言語にアウトプットされます。';
$lang['utilities_menu_icon']                = 'アイコン';
$lang['active_menu_items']                  = 'メニューアイテムをアクティブする';
$lang['inactive_menu_items']                = 'メニューアイテムを非アクティブする';
$lang['utilities_menu_permission']          = '許可';
$lang['utilities_menu_url']                 = 'URL';
$lang['utilities_menu_name']                = '名前';
$lang['utilities_menu_save']                = 'メニューを保存する';

# Knowledge Base
$lang['view_articles_list']     = '記事を表示する';
$lang['view_articles_list_all'] = '全ての記事';
$lang['als_add_article']        = '記事を追加する';
$lang['als_all_articles']       = '記事';
$lang['als_kb_groups']          = 'グループ';

# Customizer Menu
$lang['menu_builder']            = 'メニューをセットアップ';
$lang['main_menu']               = 'メインメニュー';
$lang['setup_menu']              = 'メニューをセットアップする';
$lang['utilities_menu_url_help'] = '%s は URL に自動添付されました';

# Spam Filter - Tickets
$lang['spam_filters']                 = 'スパムフィルター';
$lang['spam_filter']                  = 'スパムフィルター';
$lang['new_spam_filter']              = '新しいスパムフィルター';
$lang['spam_filter_blocked_senders']  = '送信者をブロックする';
$lang['spam_filter_blocked_subjects'] = '題目をブロックする';
$lang['spam_filter_blocked_phrases']  = 'フレーズをブロックする';
$lang['spam_filter_content']          = 'コンテンツ';
$lang['spamfilter_edit_heading']      = 'スパムフィルターを編集する';
$lang['spamfilter_add_heading']       = 'スパムフィルターを追加する';
$lang['spamfilter_type']              = 'タイプ';
$lang['spamfilter_type_subject']      = '題目';
$lang['spamfilter_type_sender']       = '送信者';
$lang['spamfilter_type_phrase']       = 'フレーズ';

# Tickets
$lang['block_sender']               = '送信者をブロックする';
$lang['sender_blocked']             = '送信者はブロックされました';
$lang['sender_blocked_successfully'] = '送信者のブロックに成功しました';
$lang['ticket_date_created']        = '日付作成';

#KB
$lang['edit_kb_group']             = 'グループを編集する';
# Leads
$lang['edit_source']               = '発信元を編集する';
$lang['edit_status']               = 'ステータスを編集する';
# Contacts
$lang['contract_type_edit']        = '契約タイプを編集する';
# Reports
$lang['report_by_customer_groups'] = '顧客グループによる総合価値';
#Utilities
$lang['ticket_pipe_log']           = 'チケットパイプログ';
$lang['ticket_pipe_name']          = '名前から';
$lang['ticket_pipe_email_to']      = '～へ';
$lang['ticket_pipe_email']         = 'メールから';
$lang['ticket_pipe_subject']       = '題目';
$lang['ticket_pipe_message']       = 'メッセージ';
$lang['ticket_pipe_date']          = '日付';
$lang['ticket_pipe_status']        = 'ステータス';

# Home
$lang['home_latest_activity']       = '最新活動';
$lang['home_my_tasks']              = '私のタスク';
$lang['home_latest_activity']       = '最新活動';
$lang['home_my_todo_items']         = '私のすべきアイテム';
$lang['home_widget_view_all']       = '全てを表示する';
$lang['home_stats_full_report']     = '全報告';

# Validation

$lang['form_validation_required']    = '{field} フィールドは必須です';
$lang['form_validation_valid_email'] = 'この {field} フィールドは有効はメールアドレスが含まれていなければなりません';
$lang['form_validation_matches']     = 'この {field} フィールドは {param} フィールドと合いません';
$lang['form_validation_is_unique']   = 'この {field} フィールドはユニークバリューが含まれなければなりません';

# Version 1.0.8
# Notifications & Leads/Estimates/Invoices Activity Log
$lang['not_event'] = '今日のカレンダーイベント - %s ...';
$lang['not_event_public'] = '本日開始する公のイベント - %s ...';
$lang['not_contract_expiry_reminder'] = '契約切れリマインダー - %s ...';
$lang['not_recurring_expense_cron_activity_heading'] = 'Cronジョブアクティビティーは発生する経費があります';
$lang['not_recurring_invoices_cron_activity_heading'] = 'Cronジョブアクティビティーは発生するインボイスがあります';
$lang['not_recurring_total_renewed'] = '総再発: %s';
$lang['not_recurring_expenses_action_taken_from'] = '発生している経費より行動を取る';
$lang['not_invoice_created'] = '請求書は作成されました:';
$lang['not_invoice_renewed'] = '新たな請求書:';
$lang['not_expense_renewed'] = '新たな経費:';
$lang['not_invoice_sent_to_customer'] = '請求書は顧客に送られました: %s';
$lang['not_invoice_sent_yes'] = 'はい';
$lang['not_invoice_sent_not'] = 'いいえ';
$lang['not_action_taken_from_recurring_invoice'] = ' 発生した請求書からアクションは取られました:';
$lang['not_new_reminder_for'] = '%s への新しいリマインダー';
$lang['not_received_one_or_more_messages_lead'] = 'リードからもう一つのメールアドレスを受けとりました';
$lang['not_received_lead_imported_email_integration'] = 'メールの統合によりインポートされたリード';
$lang['not_lead_imported_attachment'] = 'メールよりアタッチメントをインポートされました';
$lang['not_estimate_status_change'] = 'メールよりアタッチメントをインポートされました';
$lang['not_estimate_status_updated'] = 'ステータスアップデートを見積もる: From: %s to %s';
$lang['not_goal_message_success'] = 'おめでとうございます! 新しい目標を達成致しました。<br /> ゴールタイプを: %s
<br />目標達成: %s
<br />総合達成: %s
<br />開始日: %s
<br />終了日: %s';
$lang['not_assigned_lead_to_you'] = 'リード %s をあなたに割り当てた';
$lang['not_lead_activity_assigned_to'] = '%s を %s に割り当てた';
$lang['not_lead_activity_attachment_deleted'] = 'アタッチメントを削除する';
$lang['not_lead_activity_status_updated'] = '%s リードステータスをアップデート from %s to %s';
$lang['not_lead_activity_contacted'] = '%s のこのリードは %s 契約されました';
$lang['not_lead_activity_created'] = '%s 契約リード';
$lang['not_lead_activity_marked_lost'] = '失ったものとしてマークする';
$lang['not_lead_activity_unmarked_lost'] = '失ったものとして不標する';
$lang['not_lead_activity_marked_junk'] = 'ジャンクとしてマークする';
$lang['not_lead_activity_unmarked_junk'] = 'ジャンクとして不標する';
$lang['not_lead_activity_added_attachment'] = 'アタッチメントを追加しました';
$lang['not_lead_activity_converted_email'] = 'リードメールは変更されました。初めのリードメールは： %s とメール %s の顧客として追加されました。';
$lang['not_lead_activity_converted'] = 'このリードは顧客に %s 変換されました';
$lang['not_liked_your_post'] = '%s あなたのポストが好きです %s ...';
$lang['not_commented_your_post'] = '%s あなたのポスト %s にのコメントがされました...';
$lang['not_liked_your_comment'] = '%s あなたのポストが好きです %s ...';
$lang['not_proposal_assigned_to_you'] = '提案書があなたにアサインされました - %s ...';
$lang['not_proposal_comment_from_client'] = '%s 提案書に基づく顧客からの新しい ...';
$lang['not_proposal_proposal_accepted'] = '提案書を受け入れました';
$lang['not_proposal_proposal_declined'] = '提案書は断られました';
$lang['not_task_added_you_as_follower'] = '%s のタスクのフォロワーとしてあなたを追加しました';
$lang['not_task_added_someone_as_follower'] = '%s を %s のタスクのフォロワーとして追加しました ...';
$lang['not_task_added_himself_as_follower'] = '%s のタスクのフォロワーとして彼自身を追加しました...';
$lang['not_task_assigned_to_you'] = 'あなたにタスクをアサインしました %s ...';
$lang['not_task_assigned_someone'] = '%s タスクするために %s をアサインしました ...';
$lang['not_task_will_do_user'] = '%s タスクを致します...';
$lang['not_task_new_attachment'] = '新しいアタッチメントが追加されました';
$lang['not_task_marked_as_complete'] = 'タスク完了とマークする %s';
$lang['not_task_unmarked_as_complete'] = 'タスク完了と不標する %s';
$lang['not_ticket_assigned_to_you'] = 'チケットがあなたにアサインされています - %s ...';
$lang['not_ticket_reassigned_to_you'] = 'チケットがあなたにアサインされています - %s ...';
$lang['not_estimate_customer_accepted'] = 'おめでとうございます！クライアントが見積りの %s 数を受け入れました';
$lang['not_estimate_customer_declined'] = 'クライアントが見積りの %s 数を断りました';
$lang['estimate_activity_converted'] = 'この見積りを請求書に転換する<br /> %s';
$lang['estimate_activity_created'] = 'この見積りを作成する';
$lang['invoice_estimate_activity_removed_item'] = 'アイテムを取り去る <b>%s</b>';
$lang['estimate_activity_number_changed'] = '%s から %s へ見積り数変更されました';
$lang['invoice_activity_number_changed'] = '%s から %s 請求書数変更されました';
$lang['invoice_estimate_activity_updated_item_short_description'] = '%s から %s の短い項目アイテムをアップデートされました';
$lang['invoice_estimate_activity_updated_item_long_description'] = '<b>%s</b> to <b>%s</b>の長い項目アイテムをアップデートする';
$lang['invoice_estimate_activity_updated_item_rate'] = '%s から %s へアイテムレートをアップデートしました';
$lang['invoice_estimate_activity_updated_qty_item'] = '%s から %s へアイテム<b>%s</b>の量をアップデートしました';
$lang['invoice_estimate_activity_added_item'] = '新しいアイテム<b>%s</b>を追加しました';
$lang['invoice_estimate_activity_sent_to_client'] = 'クライアントに見積りを送る';
$lang['estimate_activity_client_accepted_and_converted'] = '顧客はこの見積りを受け入れました。見積りは %s 数の請求書に転換されます';
$lang['estimate_activity_client_accepted'] = '顧客はこの見積りを受け入れました';
$lang['estimate_activity_client_declined'] = '顧客はこの見積りを断りました';
$lang['estimate_activity_marked'] = '%s と見積りをマークする';
$lang['invoice_activity_status_updated'] = '%s から %s へと請求書ステータスをアップデートされました';
$lang['invoice_activity_created'] = '請求書を作成しました';
$lang['invoice_activity_from_expense'] = '経費より請求書を転換しました';
$lang['invoice_activity_recurring_created'] = '[Recurring] CRONより請求書が作成されました';
$lang['invoice_activity_recurring_from_expense_created'] = '[Invoice From Expense] 請求書はCRONより作成されました';
$lang['invoice_activity_sent_to_client_cron'] = '請求書はCRONにより顧客に送られました';
$lang['invoice_activity_sent_to_client'] = '顧客に請求書を送りました';
$lang['invoice_activity_marked_as_sent'] = '送信済みと請求書をマークしました';
$lang['invoice_activity_payment_deleted'] = '請求書の支払を消去しました。支払#%s、総額%s';
$lang['invoice_activity_payment_made_by_client'] = '顧客は合計<b>%s</b> - %s からインボイス請求書の支払を済ませました';
$lang['invoice_activity_payment_made_by_staff'] = '合計<b>%s</b>からの支払を記録しました - %s';
$lang['invoice_activity_added_attachment'] = 'アタッチメントを追加しました';

# Navigation
$lang['top_search_placeholder'] = '検索する...';

# Staff
$lang['staff_profile_inactive_account'] = 'このスタッフメンバーのアカウントは機能していません';

# Estimates
$lang['copy_estimate'] = '見積書を複写する';
$lang['estimate_copied_successfully'] = '見積書の複写完了';
$lang['estimate_copied_fail'] = '見積書の複写に失敗しました';

# Tasks
$lang['tasks_view_assigned_to_user'] = '私にアサインされたタスク';
$lang['tasks_view_follower_by_user'] = '私がフォローしているタスク';
$lang['no_tasks_found'] = 'タスクは見つかりません';

# Leads
$lang['leads_dt_datecreated'] = '作られた';
$lang['leads_sort_by'] = '並べ替える';
$lang['leads_sort_by_datecreated'] = '日付作成';
$lang['leads_sort_by_kanban_order'] = 'Kan Ban 順序';

# Proposals
$lang['proposal_items_name'] = 'アイテム';
$lang['proposal_items_description'] = '記述';
$lang['proposal_items_qty'] = '数量';
$lang['proposal_items_rate'] = '単価';
$lang['proposal_items_tax'] = '税';
$lang['proposal_items_amount'] = '価格';

# Authentication
$lang['check_email_for_resetting_password'] = 'パスワードをリセットするさらなる指示のメールを確認して下さい';
$lang['inactive_account'] = '無効なアカウント';
$lang['error_setting_new_password_key'] = '新しいパスワードの設定に失敗';
$lang['password_reset_message'] = 'あなたのパスワードはリセットされました。今ログインして下さい!';
$lang['password_reset_message_fail'] = '新しいパスワードの設定に失敗しました。もう一度やり直して下さい。';
$lang['password_reset_key_expired'] = 'パスワードキーは期限切れ又は無効なユーザーです';
$lang['admin_auth_reset_pass_repeat'] = 'パスワードを繰り返えす';
$lang['auth_reset_pass_email_not_found'] = 'メールは見つかりません';
$lang['auth_reset_password_submit'] = 'パスワードをリセットする';

# Settings
$lang['settings_amount_to_words'] = '用語に達する';
$lang['settings_amount_to_words_desc'] = '合計量を請求書/見積りの用語にアウトプットする';
$lang['settings_amount_to_words_enabled'] = '有効にする';
$lang['settings_total_to_words_lowercase'] = '数用語を小文字に変える';
$lang['settings_show_tax_per_item'] = 'アイテムごとの税を表示する';

# Reports
$lang['report_sales_months_three_months'] = '過去3ヶ月';
$lang['report_invoice_number'] = '請求書 #';
$lang['report_invoice_customer'] = '顧客';
$lang['report_invoice_date'] = '日付';
$lang['report_invoice_duedate'] = '締切日';
$lang['report_invoice_amount'] = '価格';
$lang['report_invoice_amount_with_tax'] = '税を加えた額';
$lang['report_invoice_amount_open'] = '量公開する';
$lang['report_invoice_status'] = 'ステータス';
$lang['report_invoice_total_amount_with_tax'] = '税を加えた総額';
$lang['report_invoice_total_amount_without_tax'] = ' 税抜きの総額';
$lang['report_invoice_total_taxes'] = '税';

#Version 1.0.9

# Home stats
$lang['home_stats_by_project_status'] = 'プロジェクトステータスの統計';
$lang['home_invoice_overview'] = '請求書を概観する';
$lang['home_estimate_overview'] = '見積りを概観する';
$lang['home_proposal_overview'] = '提案書を概観する';
$lang['home_lead_overview'] = 'リードを概観する';

$lang['home_my_projects'] = '私のプロジェクト';
$lang['home_announcements'] = '告知';

# Settings
$lang['settings_leads_kanban_limit'] = 'ステータスごとのkanban行のリードを限定する';
$lang['settings_group_misc'] = 'Misc';
$lang['show_projects_on_calendar'] = 'プロジェクト';
$lang['settings_media_max_file_size_upload'] = 'メディア(MB)に最大ファイルサイズがアップロードされる';
$lang['settings_client_staff_add_edit_delete_task_comments_first_hour'] = '顧客/スタッフにタスクのコメントを最初の一時間のみ追加/編集する事を許可する（管理者は適応しません）';

# Email templates
$lang['email_template_only_domain_email'] = 'ドメインメールのみ';

# Announcements
$lang['dismiss_announcement'] = '告知を却下する';
$lang['dismiss_announcement'] = '告知を却下する';
$lang['announcement_from'] = '～から:';
$lang['announcement_date'] = 'ポストされた日付: %s';
$lang['announcement_not_found'] = '告知は見つかりません';
$lang['announcements_recent'] = '最新の告知';

# General
$lang['zip_invoices'] = '請求書をZIPする';
$lang['zip_estimates'] = '見積書をZIPする';
$lang['zip_payments'] = '支払をZIPする';
$lang['setup_help'] = 'ヘルプ';
$lang['clients_list_company'] = '会社';
$lang['dt_button_export'] = 'エクスポート';

$lang['dt_entries'] = 'エントリー';
$lang['invoice_total_paid'] = '支払総額';
$lang['invoice_amount_due'] = '未払額';
$lang['report_invoice_discount'] = 'ディスカウント';

# Calendar
$lang['calendar_project'] = 'プロジェクト';

# Leads
$lang['leads_import_assignee'] = '責任がある（担当者）';
$lang['customer_from_lead'] = '%s からの顧客';
$lang['lead_kan_ban_attachments'] = 'アタッチメント: %s';
$lang['leads_sort_by_lastcontact'] = '最終接触';

# Tasks
$lang['task_comment_added'] = 'コメント追加成功';
$lang['task_duedate'] = '締切日';
$lang['task_view_comments'] = 'コメント';
$lang['task_comment_updated'] = 'コメントはアップデートされました';
$lang['task_visible_to_client'] = '顧客に見える';
$lang['task_hourly_rate'] = '毎時のレート';
$lang['hours'] = '時';
$lang['seconds'] = '秒';
$lang['minutes'] = '分';
$lang['task_start_timer'] = 'タイマーを始める';
$lang['task_stop_timer'] = 'タイマーを止める';
$lang['task_billable_help'] = '支払請求可能なタスクを確認した場合、アイテムとして請求書作成時に表示される';
$lang['task_billable'] = '支払請求可能な';
$lang['task_billable_yes'] = '支払請求可能な';
$lang['task_billable_no'] = '支払請求可能ではない';
$lang['task_billed'] = '請求される';
$lang['task_billed_yes'] = '請求される';
$lang['task_billed_no'] = '請求されない';
$lang['task_user_logged_time'] = 'あなたのログした時間:';
$lang['task_total_logged_time'] = '合計ログ時間:';
$lang['task_is_billed'] = 'このタスクは請求書 %s 数に請求されました';
$lang['task_statistics'] = '統計';
$lang['task_milestone'] = 'マイルストーン';

# Tickets
$lang['ticket_message_updated_successfully'] = 'メッセージのアップデート成功';

# Invoices
$lang['invoice_task_item_project_tasks_not_included'] = 'プロジェクのタスクはこのリストには含まれていません';
$lang['show_quantity_as'] = '～として量を表示する:';
$lang['quantity_as_qty'] = '数量';
$lang['quantity_as_hours'] = '時';
$lang['invoice_table_hours_heading'] = '時';
$lang['bill_tasks'] = '請求するタスク';
$lang['invoice_estimate_sent_to_email'] = '～にメールする';

# Estimates
$lang['estimate_table_hours_heading'] = '時';

# General
$lang['is_customer_indicator'] = '顧客';
$lang['print']            = '複写する';
$lang['customer_permission_projects']            = 'プロジェクト';
$lang['no_timers_found']            = '始まったタイマーは見つかりません';
$lang['timers_started_confirm_logout']            = 'タスクタイマーは見つかりました、始めて下さい！<br /><br />タイマーを止めずに本当にログアウトしたいですか？';
$lang['confirm_logout']            = 'ログアウト';
$lang['timer_top_started']            = '%s から始める';

# Projects
$lang['cant_change_billing_type_billed_tasks_found'] = '請求タイプを変える事はできません。このプロジェクトの請求タスクは既に見つかっています。';
$lang['project_customer_permission_warning'] = 'このシステムは最初のコンタクトはプロジェクトの許可がない事を示しています。最初のコンタクトはプロジェクトを見る事ができません。コンタクトプロファイルに許可を追加することを検討して下さい。';
$lang['project_invoice_timesheet_start_time'] = '開始時間: %s';
$lang['project_invoice_timesheet_end_time'] = '終了時間: %s';
$lang['project_invoice_timesheet_total_logged_time'] = 'ログした時間: %s';
$lang['project_view_as_client'] = '顧客としてプロジェクトを表示する';
$lang['project_mark_all_tasks_as_completed'] = '全てのタスクを完了しそしてタイマーを全て止めた事とマークする（プロジェクトメンバーへの通告は送られていません）';
$lang['project_not_started_status_tasks_timers_found'] = 'このプロジェクトのタスクタイマーは見つかりましたが、このプロジェクトはまだ始まっていないというステータスになっています。進行中というプロジェクトステータスに変更することをお勧めします。';
$lang['project_status'] = 'ステータス';
$lang['project_status_1'] = '始まっていません';
$lang['project_status_2'] = '進行中';
$lang['project_status_3'] = 'ホールド中';
$lang['project_status_4'] = '終了しました';

$lang['project_file_uploaded_by_customer'] = '顧客';
$lang['project_file_dateadded'] = '日付はアップロードされました';
$lang['project_file_filename'] = 'ファイル名';
$lang['project_file__filetype'] = 'ファイルタイプ';
$lang['project_file_visible_to_customer'] = '顧客に見える';
$lang['project_file_uploaded_by'] = '～によりアップロードされた';
$lang['edit_project'] = 'プロジェクトを編集する';
$lang['copy_project'] = 'プロジェクトを複写する';
$lang['delete_project'] = 'プロジェクトを削除する';
$lang['project_task_assigned_to_user'] = 'あなたにタスクが割り当てられました';
$lang['seconds'] = '秒';
$lang['hours'] = '時';
$lang['minutes'] = '分';
$lang['project']                 = 'プロジェクト';
$lang['project_lowercase']       = 'プロジェクト';
$lang['projects']                = 'プロジェクト';
$lang['projects_lowercase']      = 'プロジェクト';
$lang['project_settings']      = 'プロジェクトセッティング';
$lang['project_invoiced_successfully']             = 'プロジェクトの請求成功';
$lang['new_project']             = '新しいプロジェクト';
$lang['project_files']            = 'ファイル';
$lang['project_activity']            = 'アクティビティー';
$lang['project_name']            = 'プロジェクト名';
$lang['project_description']            = 'プロジェクト記述';
$lang['project_customer']            = '顧客';
$lang['project_start_date']            = '開始日';
$lang['project_datecreated']            = '日付作成';
$lang['project_deadline']            = 'デッドライン';
$lang['project_billing_type']            = '請求タイプ';
$lang['project_billing_type_fixed_cost']            = '固定レート';
$lang['project_billing_type_project_hours']            = 'プロジェクト時間';
$lang['project_billing_type_project_task_hours']            = 'タスク時間';
$lang['project_billing_type_project_task_hours_hourly_rate']            = '毎時レートのタスクに基づく';
$lang['project_rate_per_hour']            = '毎時のレート';
$lang['project_total_cost']            = '総合レート';
$lang['project_members']            = 'プロジェクトメンバー';
$lang['project_member_removed']     = 'プロジェクトメンバーの排除成功';
$lang['project_overview']           = 'プロジェクト概要';
$lang['project_gant']            = 'Gantt 覧';
$lang['project_milestones']            = 'マイルストーン';
$lang['project_milestone_order']            = '順位';
$lang['project_milestone_duedate_passed']            = '締切日が過ぎました';
$lang['record_timesheet']            = 'タイムシート';
$lang['new_milestone']            = '新しいマイルストーン';
$lang['edit_milestone']            = 'マイルストーンを編集する';
$lang['milestone_name']            = '名前';
$lang['milestone_due_date']            = '締切日';
$lang['project_milestone']            = 'マイルストーン';
$lang['project_notes']            = '注釈';
$lang['project_timesheets']            = 'タイムシート';
$lang['project_timesheet']            = 'タイムシート';
$lang['milestone_total_logged_time']            = 'ログした時間';
$lang['project_overview_total_logged_hours']            = 'ログした合計時間';
$lang['milestones_uncategorized']            = '分類されていない';
$lang['milestone_no_tasks_found']            = 'タスクは見つかりません';
$lang['project_copied_successfully']            = 'プロジェクトデーターの複写成功';
$lang['failed_to_copy_project']            = 'プロジェクトの複写失敗';
$lang['copy_project_task_include_check_list_items']            = 'チェックリストアイテムを複写する';
$lang['copy_project_task_include_assignees']            = '同じ担当者/’sを複写する';
$lang['copy_project_task_include_followers']            = '同じフォロワーを複写する';

$lang['project_days_left']            = '残りの日数';
$lang['project_open_tasks']            = 'オープンタスク';
$lang['timesheet_stop_timer']            = 'タイマーを止める';
$lang['failed_to_add_project_timesheet_end_time_smaller']            = 'タイムシートに追加を失敗する。終了時間は開始時間より小さい';
$lang['project_timesheet_user']            = 'メンバー';
$lang['project_timesheet_start_time']            = '開始時間';
$lang['project_timesheet_end_time']            = '終了時間';
$lang['project_timesheet_time_spend']            = '費やした時間';
$lang['project_timesheet_task']            = 'タスク';
$lang['project_invoices']                = '請求書';
$lang['total_logged_hours_by_staff']            = 'ログした合計時間';
$lang['invoice_project']            = '請求書プロジェクト';
$lang['invoice_project_info']            = 'プロジェクト請求書の情報';
$lang['invoice_project_data_single_line']            = 'シングルライン';
$lang['invoice_project_data_task_per_item']            = 'アイテムごとのタスク';
$lang['invoice_project_data_timesheets_individually']            = '個々の全てのタイムシート';
$lang['invoice_project_item_name_data']            = 'アイテム名';
$lang['invoice_project_description_data']            = '記述';
$lang['invoice_project_projectname_taskname']            = 'プロジェクト名 + タスク名';
$lang['invoice_project_all_tasks_total_logged_time']            = '全てのタスク + タスクごとのログした合計時間';
$lang['invoice_project_project_name_data']            = 'プロジェクト名';
$lang['invoice_project_timesheet_individually_data']            = 'タイムシート開始時間 + 終了時間 + ログした合計時間';
$lang['invoice_project_total_logged_time_data']            = 'ログした合計時間';

$lang['project_allow_client_to'] = '%s に顧客を許可する';
$lang['project_setting_view_task_attachments'] = 'タスクアタッチメントを表示する';
$lang['project_setting_view_task_checklist_items'] = 'タスクチェックリストアイテムを表示する';
$lang['project_setting_upload_files'] = 'アップロードファイル';
$lang['project_setting_view_task_comments'] = 'タスクコメントを表示する';
$lang['project_setting_upload_on_tasks'] = 'タスクのアタッチメントをアップロードする';
$lang['project_setting_view_task_total_logged_time'] = 'ログした合計時間のタスクを表示する';
$lang['project_setting_open_discussions'] = 'オープンディスカッション';
$lang['project_setting_comment_on_tasks'] = 'プロジェクトタスクのコメント';
$lang['project_setting_view_tasks'] = 'タスクを見る';
$lang['project_setting_view_milestones'] = 'マイルストーンを見る';
$lang['project_setting_view_gantt'] = 'Gantt を見る';
$lang['project_setting_view_timesheets'] = 'タイムシートを見る';
$lang['project_setting_view_activity_log'] = 'アクティビティーログを見る';
$lang['project_setting_view_team_members'] = 'チームメンバーを見る';

$lang['project_discussion_visible_to_customer_yes']                 = '見える';
$lang['project_discussion_visible_to_customer_no']                 = '見えない';

$lang['project_discussion_posted_on']                 = '%s にポストされた';
$lang['project_discussion_posted_by']                 = '%s にポストされた';
$lang['project_discussion_failed_to_delete']                 = 'ディスカッションの削除に失敗する';
$lang['project_discussion_deleted']                 = 'ディスカッションの削除成功';
$lang['project_discussion_no_activity']                 = 'アクティビティーなし';
$lang['project_discussion']                 = 'ディスカッション';
$lang['project_discussions']                 = 'ディスカッション';
$lang['edit_discussion'] = 'ディスカッションを作成する';
$lang['new_project_discussion'] = 'ディスカッションを作成する';
$lang['project_discussion_subject'] = '項目';
$lang['project_discussion_description'] = '記述';
$lang['project_discussion_show_to_customer'] = '顧客に見える';
$lang['project_discussion_total_comments'] = '全コメント';
$lang['project_discussion_last_activity'] = '最終活動';
$lang['discussion_add_comment'] = 'コメントを追加する';
$lang['discussion_newest'] = '最新の';
$lang['discussion_oldest'] = '一番古い';
$lang['discussion_attachments'] = 'アタッチメント';
$lang['discussion_send'] = '送る';
$lang['discussion_reply'] = '答える';
$lang['discussion_edit'] = '編集する';
$lang['discussion_edited'] = '修正する';
$lang['discussion_you'] = 'あなた';
$lang['discussion_save'] = '保存する';
$lang['discussion_delete'] = '削除する';
$lang['discussion_view_all_replies'] = '全ての返信を表示する';
$lang['discussion_hide_replies'] = '返信を非表示にする';
$lang['discussion_no_comments'] = 'コメントなし';
$lang['discussion_no_attachments'] = 'アタッチメントなし';
$lang['discussion_attachments_drop'] = 'アップロードファイルにドラッグとドロップする';
$lang['project_note'] = '注釈';
$lang['project_note_private'] = 'プライベート注釈';
$lang['project_save_note'] = '注釈を保存する';

# Project Activity
$lang['project_activity_created'] = 'プロジェクトを作成しました';
$lang['project_activity_updated'] = 'プロジェクトはアップデートされました';
$lang['project_activity_removed_team_member'] = 'チームメンバーを外しました';
$lang['project_activity_added_team_member'] = '新しいチームメンバーを追加しました';
$lang['project_activity_marked_all_tasks_as_complete'] = '完了と全てのタスクをマークする';
$lang['project_activity_recorded_timesheet'] = 'タイムシートを記録しました';
$lang['project_activity_task_name'] = 'タスク:';
$lang['project_activity_deleted_discussion'] = 'ディスカッションを削除しました';
$lang['project_activity_created_discussion'] = 'ディスカッションを作成しました';
$lang['project_activity_updated_discussion'] = 'ディスカッションをアップデートしました';
$lang['project_activity_commented_on_discussion'] = 'ディスカッションにコメントしました';
$lang['project_activity_deleted_discussion_comment'] = 'ディスカッションのコメントを削除しました';
$lang['project_activity_deleted_milestone'] = 'マイルストーンを削除しました';
$lang['project_activity_updated_milestone'] = 'マイルストーンをアップデートしました';
$lang['project_activity_created_milestone'] = '新しいマイルストーンを作成しました';
$lang['project_activity_invoiced_project'] = 'プロジェクトを請求しました';
$lang['project_activity_task_marked_complete'] = 'タスク完了とマークしました';
$lang['project_activity_task_unmarked_complete'] = 'タスク完了とマークしておりません';
$lang['project_activity_task_deleted'] = 'タスクは削除されました';
$lang['project_activity_new_task_comment'] = 'タスクにコメントをしました';
$lang['project_activity_new_task_attachment'] = 'タスクにアタッチメントをアップロードしました';
$lang['project_activity_new_task_assignee'] = '新しいタスク担当者を追加しました';
$lang['project_activity_task_assignee_removed'] = 'タスクの担当者を外しました';
$lang['project_activity_task_timesheet_deleted'] = 'タイムシートを取り外しました';
$lang['project_activity_uploaded_file'] = 'プロジェクトのファイルをアップロードしました';
$lang['project_activity_status_updated'] = 'プロジェクトステータスをアップロードしました';
$lang['project_activity_visible_to_customer'] = '顧客に見える';
$lang['project_activity_project_file_removed'] = 'プロジェクトファイルを取り外す';

# Notifications - DEPRECED - THESE notifications are depreced and will be removed in further released dont translate them
$lang['not_customer_uploaded_project_file'] = '新しいファイルをアップロードしました';
$lang['not_customer_created_new_project_discussion'] = '新しいプロジェクトのディスカッションを作成しました';
$lang['not_customer_commented_on_project_discussion'] = 'プロジェクトディスカッションの新しいコメント';

# Customers area
$lang['clients_my_estimates'] = '見積書';
$lang['client_no_reply'] = '返信なし';
$lang['clients_nav_projects'] = 'プロジェクト';
$lang['clients_my_projects'] = 'プロジェクト';
$lang['client_profile_image'] = 'プロファイルイメージ';

/////
$lang['sales_report_cancelled_invoices_not_included'] = 'キャンセルされた請求書は記録から除外されました';
$lang['invoices_merge_cancel_merged_invoices'] = '削除ではなくキャンセルされたと結合された請求書をマークする';
$lang['invoice_marked_as_cancelled_successfully'] = '請求書はキャンセルされたとマークされました';
$lang['invoice_unmarked_as_cancelled'] = '請求書はキャンセルされたと無標されました';

$lang['tasks_reminder_notification_before'] = 'タスクのデッドライン前リマインダー （日）';
$lang['not_task_deadline_reminder'] = 'タスクのデッドラインリマインダー';
$lang['dt_length_menu_all'] = '全て';
$lang['task_not_finished'] = '完了していません';
$lang['task_billed_cant_start_timer'] = 'タスクは請求されました。タイマーを始める事はできません';
$lang['invoice_task_billable_timers_found'] = '始まったタイマーは見つかりました';
$lang['project_timesheet_not_updated'] = 'タイムシートは影響を受けておりません';
$lang['project_invoice_task_no_timers_found'] = 'このタスクにはタイマーは見つかっておりません';
$lang['invoice_project_tasks_not_started'] = 'まだ始まっていませんＩ開始日: %s';
$lang['invoice_project_see_billed_tasks'] = 'この請求書に請求されるタスクを見て下さい';
$lang['invoice_project_all_billable_tasks_marked_as_finished'] = '全て請求されるタスクは、終了しているとマークされます';
$lang['invoice_project_nothing_to_bill'] = '請求するタスクはありません。請求書アイテムに気軽に何でも追加して下さい。';
$lang['invoice_project_start_date_tasks_not_passed'] = '将来の開始日のタスクを請求できません';
$lang['invoice_project_stop_all_timers'] = '全てのタイマーを止めて下さい';
$lang['invoice_project_stop_billable_timers_only'] = '請求可能なタイマーのみを止めて下さい';
$lang['project_tasks_total_timers_stopped'] = '総合 %s タイマーを止めました';
$lang['project_invoice_timers_started'] = '請求できるタスクにおよぶタスクタイマーを見つけました、請求書は作成できません。請求書を作成するためにタスクタイマーを止めて下さい。';
$lang['task_start_timer_only_assignee'] = 'タイマーを始めるためにこのタスクにアサインする必要があります!';
$lang['task_comments'] = 'コメント';
$lang['invoice_total_tax'] = '合計税';
$lang['estimates_total_tax'] = '合計税';
$lang['report_invoice_total_tax'] = '合計税';
$lang['home_tickets'] = 'チケット';
$lang['home_project_activity'] = '最新のプロジェクトアクティビティー';
$lang['home_project_activity_not_found'] = 'プロジェクトアクティビティーは見つかっていません';
$lang['view_tracking'] = 'トラッキングを表示する';
$lang['view_date'] = '日付';
$lang['view_ip'] = 'IP アドレス';
$lang['article_total_views'] = '総合表示';
$lang['leads_source'] = '発信元';
$lang['invoices_available_for_merging'] = 'マージ用の請求書は利用できます';
$lang['invoices_merge_discount'] = 'この請求書に合計％のディスカウントに自動的に応じなければならない';
$lang['invoice_merge_number_warning'] = '結合請求書はインボイス/請求書＃にギャップを作成します。 インボイス/請求書の経歴にギャップを作りたくなければ、請求書を結合しないで下さい。ギャップを埋めたい場合は請求書数を自動で調整するオプションがあります。';
$lang['invoice_mark_as'] = '%s とマークする';
$lang['invoice_unmark_as'] = '%s と無標する';
$lang['invoice_status_cancelled'] = 'キャンセルされた';
$lang['tasks_reminder_notification_before_help'] = 'タスク担当者にX日の前のデッドラインについて通告する。通告/メールは担当者/’sのみに送られます。タスクの開始日とタスクの締切日が小さければリマインダー日の通告は送られません。';

# Version 1.1.0
$lang['project_invoice_select_all_tasks'] = '全てのタスクを選択する';
$lang['lead_company'] = '会社';

# Version 1.1.1
$lang['admin_auth_forgot_password_button'] = '確約する';
$lang['task_assigned'] = '～にアサインされた';
$lang['switch_to_pipeline'] = 'パイプラインに切り替える';
$lang['switch_to_list_view'] = 'リストに転換する';
$lang['estimates_pipeline'] = '見積りのパイプライン';
$lang['estimates_pipeline_sort'] = '～よりソートする';
$lang['estimates_sort_expiry_date'] = '有効期限';
$lang['estimates_sort_pipeline'] = 'パイプラインオーダー';
$lang['estimates_sort_datecreated'] = '日付は作成されました';
$lang['estimates_sort_estimate_date'] = '推定日';
$lang['estimate_set_reminder_title'] = '見積りのリマインダーをセットする';
$lang['invoice_set_reminder_title'] = '請求書のリマインダーをセットする';
$lang['estimate_reminders'] = 'リマインダー';
$lang['invoice_reminders'] = 'リマインダー';
$lang['estimate_notes'] = '注釈';
$lang['estimate_add_note'] = '注釈を追加する';
$lang['dropdown_non_selected_tex'] = '何も選択されていません';
$lang['auto_close_ticket_after'] = 'チケットを後に自動終了する (時)';
$lang['event_description'] = '記述';
$lang['delete_event'] = '削除する';
$lang['not_new_ticket_created'] = '新しいチケットをあなたの部で開く - %s';
$lang['receive_notification_on_new_ticket'] = '新しいチケットを開けた時に通知を受ける';
$lang['receive_notification_on_new_ticket_help'] = 'チケット部に属する全てのスタッフメンバーは新しいチケットを開けた時に通知を受ける';
$lang['event_updated'] = 'イベントはアップデートされました';
$lang['customer_contacts'] = 'コンタクト';
$lang['new_contact'] = '新しいコンタクト';
$lang['contact'] = 'コンタクト';
$lang['contact_lowercase'] = 'コンタクト';
$lang['contact_primary'] = 'プライマリーコンタクト';
$lang['contact_position'] = 'ポジション';
$lang['contact_active'] = 'アクティブ';
$lang['client_company_info'] = '会社詳細';
$lang['proposal_save'] = '提案書を保存する';
$lang['calendar'] = 'カレンダー';
$lang['settings_pdf'] = 'PDF';
$lang['settings_pdf_font'] = 'PDF フォント';
$lang['settings_pdf_table_heading_color'] = 'アイテムテーブheading色';
$lang['settings_pdf_table_heading_text_color'] = ' アイテムテーブルheading text色';
$lang['settings_pdf_font_size'] = 'デフォルトフォントサイズ';
$lang['proposal_status_draft'] = '下書き';
$lang['custom_field_contacts'] = 'コンタクト';
$lang['company_primary_email'] = '最初のメール';
$lang['client_register_contact_info'] = 'プライマリーコンタクト情報';
$lang['client_register_company_info'] = '会社情報';
$lang['contact_permissions_info'] = 'このコンタクトに適切は許可をセットする事';
$lang['default_leads_kanban_sort'] = 'デフォルトはKanban ソートをリードする';
$lang['default_leads_kanban_sort_type'] = 'ソートする';
$lang['order_ascending'] = '上昇する';
$lang['order_descending'] = '下向きの';
$lang['calendar_expand'] = '膨らむ';
$lang['proposal_reminders'] = 'リマインダー';
$lang['proposal_set_reminder_title'] = '提案書のリマインダーをセットする';
$lang['settings_allowed_upload_file_types'] = 'ファイルタイプを許可しました';
$lang['no_primary_contact'] = 'こちらの顧客はプライマリーコンタクトがあります。顧客としてプライマリーコンタクトログインにセットアップする必要があります。全ての顧客にプライマリーコンタクトをもつことをお勧めします。';
$lang['leads_merge_customer'] = '顧客フィールドを結合しています';
$lang['leads_merge_contact'] = ' コンタクトフィールドを結合しています';
$lang['leads_merge_as_contact_field'] = 'コンタクトフィールドとして結合しました';
$lang['lead_convert_to_client_phone'] = '電話';
$lang['invoice_status_report_all'] = '全て';
$lang['import_contact_field'] = 'コンタクトフィールド';


$lang['file_uploaded_success'] = 'エラーはありません、ファイルはアップロードに成功しました';
$lang['file_exceeds_max_filesize'] = 'アップロードファイルは、 php.ini の指向アップロード-最大-ファイルサイズを超えました';
$lang['file_exceeds_maxfile_size_in_form'] = 'アップロードファイルはHTMLフォームに特化された MAX_FILE_SIZE 指向を超えました';
$lang['file_uploaded_partially'] = 'アップロードファイルは一部分のみアップロードされました';
$lang['file_not_uploaded'] = 'ファイルはアップロードされていません';
$lang['file_missing_temporary_folder'] = '一時的はフォルダーは見つかりません';
$lang['file_failed_to_write_to_disk'] = 'ディスクにファイルを書く事に失敗しました';
$lang['file_php_extension_blocked'] = 'PHP 拡張子はファイルのアップロードを停止しました';
$lang['calendar_expand'] = '膨らむ';
$lang['view_pdf'] = 'PDF を見る';
$lang['expense_repeat_every'] = '全てをリピートする';

# Version 1.1.2
$lang['leads_switch_to_kanban'] = 'kan banにスイッチする';
$lang['survey_no_questions'] = 'この調査は質問をまだ追加していません';
$lang['survey_submit'] = '提出する';
$lang['contract_content'] = '契約';
$lang['contract_save'] = '契約を保存する';
$lang['contract_send_to_email'] = 'メールに送る';
$lang['contract_send_to_client_modal_heading'] = 'メールに契約をを送る';
$lang['contract_send_to'] = '～へ送る';
$lang['contract_send_to_client_attach_pdf'] = 'PDF を添付する';
$lang['contract_send_to_client_preview_template'] = 'メールテンプレートをプレビューする';
$lang['include_attachments_to_email'] = 'メールにアタッチメントを含む';
$lang['contract_sent_to_client_success'] = '契約は顧客に確実に送られました';
$lang['contract_sent_to_client_fail'] = '契約を送るのを失敗しました';

# Version 1.1.3
$lang['client_invalid_username_or_password'] = '無効なユーザー名又はパスワード';
$lang['client_old_password_incorrect']     = 'あなたの古いパスワードは不正解です';
$lang['client_password_changed']          = 'あなたのパスワードは変更しました';

# Version 1.1.4
$lang['total_leads_deleted'] = '合計リードは削除されました: %s';
$lang['total_clients_deleted'] = '全顧客は削除されました: %s';
$lang['confirm_action_prompt'] = 'このアクションを本当に行いますか?';
$lang['mass_delete'] = '大部分を削除します';
$lang['email_protocol'] = 'メールプロトコール';
$lang['add_edit_members'] = 'メンバーを追加/編集する';
$lang['project_overview_logged_hours'] = 'ログしていた時間:';
$lang['project_overview_billable_hours'] = '請求可能時間:';
$lang['project_overview_billed_hours'] = '請求した時間:';
$lang['project_overview_unbilled_hours'] = '請求していない時間:';
$lang['calendar_first_day'] = '初日';
$lang['permission_view'] = '見る';
$lang['permission_edit'] = '編集する';
$lang['permission_create'] = '作成する';
$lang['permission_delete'] = '削除する';
$lang['permission'] = '許可';
$lang['permissions'] = '許可';
$lang['proposals_pipeline'] = '提案書のパイプライン';
$lang['proposals_pipeline_sort'] = 'ソート';
$lang['proposals_sort_open_till'] = '～まで開いている';
$lang['proposals_sort_pipeline'] = 'パイプラインオーダー';
$lang['proposals_sort_datecreated'] = '日付を作成する';
$lang['proposals_sort_proposal_date'] = '提案日';
$lang['is_not_staff_member'] = 'スタッフメンバーではありません';
$lang['lead_created'] = '作成された';
$lang['access_tickets_to_none_staff_members'] = 'スタッフメンバーではない方にもチケットへのアクセスを許可する';
$lang['project_expenses'] = '経費';
$lang['expense_currency'] = '通貨';
$lang['currency_valid_code_help'] = '有効は通貨コードを入れて下さい。';
$lang['week'] = '週';
$lang['weeks'] = '週';
$lang['month'] = '月';
$lang['months'] = '月';
$lang['year'] = '年';
$lang['years'] = '年';
$lang['expense_report_category'] = 'カテゴリー';
$lang['expense_paid_via'] = '%s から支払う';
$lang['item_as_expense'] = '[経費]';
$lang['show_help_on_setup_menu'] = 'セットアップメニューにヘルプメニューアイテムを表示する';
$lang['customers_summary_total'] = '合計顧客数';
$lang['filter_by'] = '～にフィルターされた';
$lang['re_captcha'] = 'reCAPTCHA';
$lang['recaptcha_site_key'] = 'サイトキー';
$lang['recaptcha_secret_key'] = '秘密のキー';
$lang['recaptcha_error'] = 'reCAPTCHA フィールドはあなたはロボットではないと伝えています';
$lang['smtp_username'] = 'SMTP ユーザー名';
$lang['smtp_username_help'] = 'メールクライアントがユーザー名をSMTPログインと使用している場合のみ記入して下さい';
$lang['pinned_project']= 'ピンプロジェクト';
$lang['pin_project']= 'ピンプロジェクト';
$lang['unpin_project']= 'ピンされていないプロジェクト';
$lang['smtp_encryption']= 'メール暗号化';
$lang['smtp_encryption_none']= '～ない';
$lang['show_proposals_on_calendar']= '提案書';
$lang['invoice_project_see_billed_expenses']= 'この請求書に請求される経費を見る';
$lang['project_overview_expenses'] = '総経費';
$lang['project_overview_expenses_billable'] = '請求できる経費';
$lang['project_overview_expenses_billed'] = '請求した経費';
$lang['project_overview_expenses_unbilled'] = '請求していない経費';
$lang['announcement_date_list'] = '日付';
$lang['project_setting_view_finance_overview'] = '財政の概観を表示する';
$lang['show_all_tasks_for_project_member'] = '全てのスタッフにプロジェクトに関する全てのタスクを見る事を許可する（スタッフ以外も含む）';
$lang['not_staff_added_as_project_member'] = 'あなたをプロジェクトメンバーに追加しました';
$lang['report_expenses_base_currency_select_explanation'] = 'システムが経費に使用する通貨が異なる事を見つけたため、通貨を選択する必要があります';

# Version 1.1.6
$lang['project_activity_recorded_expense'] = '記録された経費';
$lang['save_customer_and_add_contact'] = 'コンタクトを保存と作成する';
$lang['tickets_chart_weekly_opening_stats'] = '週の統計値';
$lang['related_knowledgebase_articles'] = '関連している項目';
$lang['detailed_overview'] = 'タスクを概観する';
$lang['tasks_total_checklists_finished'] = '全チェックリストアイテムを完了したとマークする';
$lang['tasks_total_added_attachments'] = '全体のアタッチメントが追加されました　';
$lang['tasks_total_comments'] = '全体のコメント';
$lang['task_finished_on_time'] = '時間内に終わりましたか?';
$lang['task_finished_on_time_indicator'] = 'はい';
$lang['task_not_finished_on_time_indicator'] = 'いいえ';
$lang['task_filter_fetch_month_by'] = '～から拡大した月';
$lang['filter'] = 'フィルター';
$lang['task_filter_detailed_all_months'] = '全ての月';
$lang['kb_article_slug'] = 'スラッグ';

# Version 1.1.7
$lang['email_template_ticket_warning'] = 'もしチケットがメールパイピングとしてインポートされ、コンタクトがCRMに存在しない場合はフィールドは取り替えられません';
$lang['auto_stop_tasks_timers_on_new_timer'] = '新しいタイマーが始まったら、他の始まったタイマーを止めて下さい';
$lang['notification_when_customer_pay_invoice'] = '顧客が請求書を支払った時に通告を受けます (built-in)';
$lang['not_invoice_payment_recorded'] = '新しい請求書支払 - %s';
$lang['email_template_contact_warning'] = 'コンタクトの行動を取るコンタクトがログされていない場合、フィールドの結合は取り替えられません';
$lang['theme_style'] = 'テーマスタイル';
$lang['change_role_permission_warning'] = '役目を変える許可は現在のスタッフメンバーには影響しません　許可はこの役割を使用しています';
$lang['task_copied_successfully'] = 'タスクは複写されました';
$lang['failed_to_copy_task'] = 'タスクの複写に失敗しました';
$lang['not_project_file_uploaded'] = '新しいプロジェクトファイルが追加されました';
$lang['settings_calendar_color'] = '%s 色';
$lang['settings_calendar_colors_heading'] = 'スタイリング';
$lang['reminder'] = 'リマインダー';
$lang['back_to_tasks_list'] = 'タスクリストに戻る';
$lang['copy_task_confirm'] = '確約する';
$lang['changing_items_affect_warning'] = 'アイテム情報の変更は作成された請求書/見積書/企画書には影響しません';
$lang['tax_is_used_in_expenses_warning'] = 'この税を使用している経費のトランザクションを見つけたため、この税をアップデートできます';
$lang['note'] = '注釈';
$lang['leads_staff_report_converted'] = '転換した全てのリード';
$lang['leads_staff_report_created'] = '作成した全てのリード';
$lang['leads_staff_report_lost'] = '失った全てのリード';
$lang['client_go_to_dashboard'] = 'ポータルへ戻る';
$lang['show_estimate_reminders_on_calendar'] = '見積りのリマインダー';
$lang['show_invoice_reminders_on_calendar'] = '請求書のリマインダー';
$lang['calendar_estimate_reminder'] = '見積りのリマインダー';
$lang['calendar_invoice_reminder'] = '請求書のリマインダー';
$lang['show_proposal_reminders_on_calendar'] = '企画案のリマインダー';
$lang['calendar_proposal_reminder'] = '企画案のリマインダー';
$lang['proposal_due_after']= '企画案の締切後 （日）';
$lang['project_progress']= '進捗';
$lang['calculate_progress_through_tasks']= 'タスクから成長を計算する';
$lang['allow_customer_to_change_ticket_status']= '顧客の顧客エリアからチケットステータスを変更する事を許可する';
$lang['switch_to_general_report']= 'スタッフレポートに切り替える';
$lang['switch_to_staff_report']= 'ジェネラルレポートに切り替える';
$lang['generate']= '生成する';
$lang['from_date']= '日付から';
$lang['to_date']= '日付まで';
$lang['not_results_found']= '結果は見つかりません';
$lang['lead_lock_after_convert_to_customer']= '顧客に転換された後にリードの編集を許可しないで下さい (admins not applied)';
$lang['default_pipeline_sort'] = 'デフォルトパイプラインソート';
$lang['not_goal_message_failed'] = '私達は目標達成に失敗しました!<br /> 目標タイプ: %s
<br />目標達成: %s
<br />トータルアチーブメント: %s
<br />開始日: %s
<br />終了日: %s';
$lang['toggle_full_view'] = 'トグルスイッチの全表示';
$lang['not_estimate_invoice_deleted'] = '作成した請求書を削除する';
$lang['not_task_new_comment'] = 'タスク %s にコメントしました';

# Version 1.1.8
$lang['invoice_number_exists'] = 'この請求書＃は進行していると年に存在します';
$lang['estimate_number_exists'] = 'この見積りは進行していると年に存在します';
$lang['email_exists'] = 'メールは既に存在します';
$lang['not_uploaded_project_file'] = '新しいファイルはアップロードされました';
$lang['not_created_new_project_discussion'] = '新しいプロジェクトのディスカッションは作成されました';
$lang['not_commented_on_project_discussion'] = 'プロジェクトディスカッションの新しいコメント';
$lang['all_staff_members'] = '全てのスタッフメンバー';
$lang['help_project_permissions'] = 'VIEWはスタッフメンバーに全てのプロジェクトを見る事を許可します。彼らに彼らがアサインした（メンバーとして追加された）プロジェクトのみを見せたい場合は、VIEW許可を与えないで下さい。';
$lang['help_tasks_permissions'] = 'VIEWはスタッフメンバーに全てのタスクを見る事を許可しています。彼らに彼らがアサインした又はフォローしているプロジェクトのみを見せたい場合は、VIEW許可を与えないで下さい。';
$lang['expense_recurring_days'] = '日';
$lang['expense_recurring_weeks'] = '週';
$lang['expense_recurring_months'] = '月';
$lang['expense_recurring_years'] = '年';
$lang['reset_to_default_color'] = 'デフォルト色にレセットする';
$lang['pdf_logo_width'] = 'ロゴ幅 (PX)';
$lang['drop_files_here_to_upload'] = 'アップロードするためにファイルをここにドロップする';
$lang['browser_not_support_drag_and_drop'] = 'あなたのブラウザーはドラッグアンドドロップファイルのアップロードをサポートしません';
$lang['remove_file'] = 'ファイルを取り除く';
$lang['you_can_not_upload_any_more_files'] = 'これ以上ファイルをアップロードできません';
$lang['custom_field_only_admin'] = '管理者のみに透視化を強化する';
$lang['leads_default_source'] = 'デフォルトの発信元';
$lang['clear_activity_log'] = 'ログをクリアにする';
$lang['default_contact_permissions'] = 'デフォルトのコンタクトを許可する';
$lang['invoice_activity_marked_as_cancelled'] = 'キャンセル済みと請求書をマークする';
$lang['invoice_activity_unmarked_as_cancelled'] = 'キャンセル済みと請求書を不標する';
$lang['wait_text'] = 'お待ちください...';
$lang['projects_summary'] = 'プロジェクトの概要';
$lang['dept_imap_host'] = 'IMAP ホスト';
$lang['dept_encryption'] = '暗号化';
$lang['dept_email_password'] = 'パスワード';
$lang['dept_email_no_encryption'] = '暗号化はありません';
$lang['failed_to_decrypt_password'] = 'パスワードの解読に失敗しました';
$lang['delete_mail_after_import'] = 'インポートした後にメールを消去しますか?';
$lang['expiry_reminder_enabled'] = '期限切れリマインダーを送る';
$lang['send_expiry_reminder_before'] = '期限切れリマインダーを（日）前に送る';
$lang['not_expiry_reminder_sent'] = '満期日リマインダーを送りました';
$lang['send_expiry_reminder'] = '期限切れリマインダーを送りました';
$lang['sent_expiry_reminder_success'] = '期限切れリマインダーは送られました';
$lang['sent_expiry_reminder_fail'] = '期限切れリマインダーの送信に失敗しました';
$lang['leads_default_status'] = 'デフォルトのステータス';
$lang['item_description_placeholder'] = '記述';
$lang['item_long_description_placeholder'] = '長い 記述';
$lang['item_quantity_placeholder'] = '数量';
$lang['item_rate_placeholder'] = '単価';
$lang['tickets_summary'] = 'チケットの概要';
$lang['tasks_list_priority'] = '優先';
$lang['ticket_status_db_2'] = '進行中の';
$lang['ticket_status_db_1'] = '開ける';
$lang['ticket_status_db_3'] = '答えました';
$lang['ticket_status_db_4'] = '保留中の';
$lang['ticket_status_db_5'] = '閉める';
$lang['ticket_priority_db_1'] = '低い';
$lang['ticket_priority_db_2'] = '中間の';
$lang['ticket_priority_db_3'] = '高い';
$lang['customer_have_projects_by'] = 'ステータスによるプロジェクトを含む %s';
$lang['customer_have_proposals_by'] = ' ステータスによる企画案を含む %s';
$lang['do_not_redirect_payment'] = '支払プロセッサを私にリダイレクトしないで下さい';
$lang['project_tickets'] = 'チケット';
$lang['invoice_report'] = '請求書のレポート';
$lang['payment_modes_report'] = '支払モード (トランザクション)';
$lang['customer_admins'] = '顧客の管理';
$lang['assign_admin'] = '陣営をアサインする';
$lang['customer_admin_date_assigned'] = '日付はアサインされました';
$lang['customer_admin_login_as_client_message'] = 'こんにちは%s。こちらの顧客にあなたは管理者として追加されました';
$lang['ticket_form_validation_file_size'] = 'ファイルサイズは%sより少なければならない';
$lang['has_transactions_currency_base_change'] = '基礎通貨を変える事は、トランザクションがその通貨で記録されている場合のみ可能です。基礎通貨を変える場合はトランザクションを削除して下さい。';
$lang['customers_sort_all'] = '全て';

# Version 1.1.9
$lang['use_recaptcha_customers_area'] = 'Recaptcha を顧客エリアに許可します（ログイン/登録）';
$lang['project_marked_as_finished'] = 'プロジェクト完了';
$lang['project_status_updated'] = 'プロジェクトステータスのアップデートされました';
$lang['remove_decimals_on_zero'] = '小数点以下の数/0の少数金額を外してください（2.00は2,2.25になり2.25は残ります）';
$lang['remove_tax_name_from_item_table'] = 'アイテムテーブル行から税名を外して下さい';

# Version 1.2.0
$lang['not_billable_expenses_by_categories'] = 'カテゴリーにより請求可能経費ではありません';
$lang['billable_expenses_by_categories'] = 'カテゴリーによる請求可能経費です';
$lang['format_letter_size'] = 'A4 ランドスケープ';
$lang['pdf_formats'] = 'ドキュメントフォーマット';
$lang['swap_pdf_info'] = '会社/顧客の詳細をスワップする（会社情報を右側に、顧客情報を左側に）';
$lang['invoice_estimate_pdf_text_color'] = '請求書/見積書のテキスト色';
$lang['expenses_filter_by_categories'] = 'カテゴリーにより';
$lang['task_copy'] = '複写する';
$lang['estimate_status'] = 'ステータス';
$lang['expenses_report_exclude_billable'] = '請求可能経費を含まない';
$lang['expenses_total'] = '合計金額';
$lang['estimate_activity_added_attachment'] = 'アタッチメントを追加しました';
$lang['show_to_customer'] = '顧客を見せる';
$lang['hide_from_customer'] = '顧客からは非表示にする';
$lang['expenses_report_total'] = '合計金額';
$lang['expenses_report'] = '経費レポート';
$lang['expenses_report_tax'] = '税';
$lang['expenses_report_total_tax'] = '合計税';
$lang['expenses_detailed_report'] = 'レポートの詳細';
$lang['expense_not_billable'] = '請求不可';
$lang['notification_settings'] = '通告セッティング';
$lang['staff_with_roles'] = '役割のあるスタッフメンバー';
$lang['specific_staff_members'] = '特定のスタッフメンバー';
$lang['proposal_mark_as'] = '%s とマークする';
$lang['kb_report_total_answers'] = '合計';
$lang['ticket_message_edit'] = '編集する';
$lang['invoice_files'] = '請求書ファイル';
$lang['estimate_files'] = '見積りファイル';
$lang['proposal_files'] = '企画案ファイル';
$lang['invoices_awaiting_payment'] = '請求書未支払';
$lang['tasks_not_finished'] = 'タスクは終わっていません';
$lang['outstanding_invoices'] = '未払い負債の請求書';
$lang['past_due_invoices'] = '期限経過請求書';
$lang['paid_invoices'] = '支払済み請求書';
$lang['invoice_estimate_year'] = '年';
$lang['no_results_text_search_dropdown'] = '結果は合致しません';
$lang['task_stats_logged_hours'] = 'ログしていた時間';
$lang['leads_converted_to_client'] = 'リードに転換した';
$lang['task_assigned_from'] = '%s によりあなたにこのタスクがアサインされました';
$lang['auto_check_for_new_notifications'] = '新しい通知には自動チックを付ける（秒 – 無効にするために0にセットする）';
$lang['recurring_ends_on'] = '～で終わる (ないように空白にしておく)';
$lang['new_note'] = '新しい注釈';
$lang['my_tickets_assigned'] = '私にチケットがアサインされた';
$lang['filter_by_assigned'] = 'アサインされているメンバーより';
$lang['staff_stats_total_logged_time'] = 'ログした合計時間';
$lang['staff_stats_last_month_total_logged_time'] = 'ログした先月の時間';
$lang['staff_stats_this_month_total_logged_time'] = 'ログした今月の時間';
$lang['staff_stats_last_week_total_logged_time'] = 'ログした先週の時間';
$lang['staff_stats_this_week_total_logged_time'] = 'ログした今週の時間';
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
$lang['milestone_description'] = '記述';
$lang['description_visible_to_customer'] = '顧客に記述を表示する';
$lang['upcoming_tasks'] = '次回のタスク';
$lang['paymentmethod_two_checkout_account_number'] = 'アカウント数（売り手ID）';
$lang['paymentmethod_two_checkout_private_key'] = 'プライベートキー';
$lang['paymentmethod_two_checkout_publishable_key'] = 'Publishable キー';
$lang['payment_credit_card_number'] = 'カード数';
$lang['payment_credit_card_expiration_date'] = '有効期限';
$lang['payment_billing_email'] = 'メール';
$lang['payment_billing_name'] = '請求書名';
$lang['submit_payment'] = '支払を提出する';
$lang['2checkout_notice_payment'] = 'クレジットカードの情報は2checkoutから提供された保護されたtokenにより必要な処理が行われた';
$lang['2checkout_usage_notice'] = 'SSLはあなたが2Checkout支払 APIを使用しているか要求しています。トークン化と承認を安全に招集する事が要求されます。システムはSSLなしでも機能しますが、あなたをコンプライアンスから外しその際にはあなたのAPI許可を解除するリスクがあります。';
$lang['custom_field_disallow_customer_to_edit'] = '顧客がこのフィールドを編集することを許可しません';
$lang['project_due_notice'] = 'このプロジェクトは %s 日から期限経過しています';
$lang['not_lead_added_attachment'] = 'リード %s に新しいアタッチメントを追加しました';
$lang['lead_note_date_added'] = '注釈は追加されました: %s';
$lang['recurring_custom'] = 'カスタム';
// Dont translate these, only added for better readability already translated for the expenses custom recurring feature.
$lang['invoice_recurring_months'] = $lang['expense_recurring_months'];
$lang['invoice_recurring_years'] = $lang['expense_recurring_years'];
$lang['invoice_recurring_days'] = $lang['expense_recurring_days'];
$lang['invoice_recurring_weeks'] = $lang['expense_recurring_weeks'];

# Version 1.2.4
$lang['document_direction'] = '方向';
$lang['notify_project_members_status_change'] = 'プロジェクトステータスが変更したことをプロジェクトメンバーに通告する';
$lang['not_project_status_updated'] = 'プロジェクトステータスが %s から %s にアップデートされました';
$lang['ticket_not_found'] = 'チケットは見つかりませんでした';
$lang['project_not_found'] = 'プロジェクトは見つかりませんでした';
$lang['export_project_data'] = 'プロジェクトデーターをエクスポートする';
$lang['total_project_members'] = '全プロジェクトメンバー';
$lang['total_project_files'] = 'ファイルをアタッチしました';
$lang['total_project_discussions_created'] = 'ディスカッションは作成されました';
$lang['project_member'] = 'メンバー';
$lang['total_project_discussions_comments'] = '全てのディスカッションのコメント';
$lang['staff_total_task_assigned'] = '全てのタスクはアサインされました';
$lang['staff_total_comments_on_tasks'] = 'タスクのコメント';
$lang['project_members_overview'] = 'プロジェクトメンバーを概観する';
$lang['project_milestones_overview'] = 'マイルストーンを概観する';
$lang['total_tasks_in_milestones'] = '全てのタスクはアサインされました';
$lang['total_task_members_assigned'] = 'トータルメンバーはアサインされました';
$lang['total_task_members_followers'] = '全フォロワー';
$lang['total_milestones'] = '全マイルストーン';
$lang['total_project_worked_days'] = '働いた全日数';
$lang['finance_overview'] = '財政を概観する';
$lang['project_custom_fields'] = '顧客フィールド';
$lang['total_tickets_related_to_project'] = '全チケットをプロジェクトにリンクしました';
$lang['projects_total_invoices_created'] = '全請求は作成されました';
$lang['total_invoiced_amount'] = '全請求は作成されました';
$lang['do_not_send_invoice_payment_email_template_contact'] = '顧客コンタクトに請求書支払記録メールをおくらないで下さい';
$lang['no_preview_available_for_file'] = 'このファイルにプレビューはありません';
$lang['project_activity_deleted_file_discussion_comment'] = 'ファイルのディスカッションコメントは削除されました';
$lang['file_not_found'] = 'ファイルは見つかりません';
$lang['email_template_discussion_info'] = 'このテンプレートはディスカッションコメントメール両方に使用されました。（ファイルのディスカッションと通常ディスカッション）';
$lang['format_a4_portrait_size'] = 'ポートレイト';
$lang['only_show_contact_tickets'] = '顧客プロファイルはログインコンタクトに基づくチケットのみを表示しています（以前のコンタクトは適応していません）';
$lang['cancel_overdue_reminders_invoice'] = 'この請求書に期限経過リマインダーを送る事を避ける';
$lang['customer_shipping_address_notice'] = '顧客の請求書に送り先住所を使用しない場合は、送り先住所の情報を書き込まないで下さい';
$lang['timesheets_overview'] = 'タイムシートを概観する';
$lang['invoice_status_draft'] = 'ドラフト';
$lang['save_as_draft'] = 'ドラフトとして保存する';
$lang['convert_and_save_as_draft'] = 'ドラフトきをして転換し保存する';
$lang['convert'] = '転換する';
$lang['exclude_invoices_draft_from_client_area'] = 'ドラフトの請求書を顧客エリアから外す';
$lang['invoice_draft_status_info'] = 'この請求書はステータスドラフト中であり、ステータスは請求書を顧客に送る又は送信済みをマークした場合、自動変更します';
$lang['task_info'] = 'タスクの詳細';
$lang['recurring_tasks'] = '繰り返し送る';
// Dont translate these, already translated
$lang['task_repeat_every'] = $lang['expense_repeat_every'];
$lang['task_recurring_months'] = $lang['expense_recurring_months'];
$lang['task_recurring_years'] = $lang['expense_recurring_years'];
$lang['task_recurring_days'] = $lang['expense_recurring_days'];
$lang['task_recurring_weeks'] = $lang['expense_recurring_weeks'];
$lang['todays_tasks'] = 'Today\'s tasks';
$lang['payment_mode_invoices_only'] = 'Invoices Only';
$lang['payment_mode_expenses_only'] = 'Expenses Only';
$lang['task_no_checklist_items_found'] = 'Checklist items not found for this task';
$lang['task_no_description'] = 'No description for this task';
$lang['expenses_reminders'] = 'Reminders';
$lang['expense_set_reminder_title'] = 'Set expense reminder';
$lang['calendar_expense_reminder'] = 'Expense Reminder';
$lang['recurring_task'] = 'Recurring Task';
$lang['disable_email_from_being_sent'] = 'Disable this email from being sent';
$lang['not_sent_indicator'] =  'Not Sent';
$lang['proposal_status_revised'] =  'Revised';
$lang['customer_currency_change_notice'] =  'If the customer use other currency then the base currency make sure you select the appropriate currency for this customer. Changing the currency is not possible after transactions are recorded.';
$lang['click_to_add_content'] =  'Click here to add content';
$lang['related_to_project'] =  'This %s is related to %s: %s';
$lang['back_to_lead'] =  'Back to lead';
$lang['add_task_timer_started_warning'] =  'Stop current started timer for this task to be able to add new timer manually.';
$lang['sending_email_contact_permissions_warning'] =  'Failed to auto select customer contacts. Please make sure that the customer have associated contacts with permission %s';

# Version 1.2.6
$lang['currently_supported_currencies'] = '現在通貨により支えられている';
$lang['authorize_notice'] = 'SSLはあなたが権限を使用しているか要求しています。NET AIM支払API。Authorize.netはアカウントごとの1通貨のみをサポートしています。通貨フィールドの中のあなたの認可されたアカウントの関連された1通貨のみを追加して下さい';
$lang['settings_paymentmethod_developer_mode'] = '開発者モード';
$lang['payment_cardholder_name'] = 'カード保持者名';
$lang['settings_paymentmethod_authorize_api_login_id'] =  'API ログイン ID';
$lang['settings_paymentmethod_mollie_api_key'] =  'API キー';
$lang['settings_paymentmethod_authorize_api_transaction_key'] =  'API 転換 ID';
$lang['settings_paymentmethod_authorize_secret_key'] =  'Secret キー';
$lang['leads_report_converted_notice'] =  'デフォルトステータスに属するリードのみクライアントは転換したリードとして受け止め、リードがデフォルトステータスクライアントに属する場合は又顧客に転換していない場合は、転換したリードとしてカウントされる。';
$lang['payment_method'] = '支払モード';
$lang['payment_method_info'] = '支払ゲートウェイはクレジットカード、ペイパル、銀行のような異なる/多数の支払モードをサポートする。';

# Version 1.2.7
$lang['dropbox_app_key'] = 'Dropbox APP キー';
$lang['project_invoice_select_all_expenses'] = '全ての経費を選択する';
$lang['role_update_staff_permissions'] = 'この役割を使用している全てのスタッフメンバーの許可をアップデートする';
$lang['customer_active'] = 'アクティブ';
$lang['note_updated_successfully'] = '注釈はアップデートされました';
$lang['update_note'] = '注釈はアップデートする';
$lang['update_comment'] = 'コメントをアップデートする';
$lang['comment_updated_successfully'] = 'コメントはアップデートされました';
$lang['staff_send_welcome_email'] = 'ウェルカムメールを送る';
$lang['proposal_warning_email_change'] = '%s にメールを変更しました。この %s は企画案にリンクされました。 %s にリンクされた全ての企画案メールをアップデートしたいですか？?';
$lang['update_proposal_email_yes'] = 'はい、リンクされたメールを全てアップデートする';
$lang['update_proposal_email_no'] = 'いいえ、私は手動でアップデートします';
$lang['proposals_emails_updated'] = '全てのこの%sにリンクされた企画案メールをに%sアップデートしました';
$lang['custom_field_company'] = '会社';
$lang['actions'] = 'アクション';
$lang['project_mark_as'] = '%s とマークする';
$lang['todo_edit_title'] = 'すべき事アイテムを編集する';
$lang['additional_action_required'] = '追加活動が必須である!';
$lang['project_mark_tasks_finished_confirm'] = '確約する';
$lang['project_marked_as_success'] = 'プロジェクトは %s とマークされました';
$lang['project_marked_as_failed'] = 'プロジェクトを %s とマークすることに失敗しました';
$lang['auto_assign_customer_admin_after_lead_convert'] = '転換後に顧客を管理に自動的にアサインする';
$lang['auto_assign_customer_admin_after_lead_convert_help'] = 'このオプションがはいにセットされているならば、顧客のリードに転換されたスタッフメンバーは顧客の管理に自動的にアサインされます。注釈注記：このオプションは顧客VIEWの許可を持たないスタッフメンバーのみに適応します';
$lang['auto_close_tickets_disable'] = '無効にするために 0 にセットします';
$lang['task_checklist_item_completed_by'] = '%s により完了しました';
$lang['staff_email_signature_help'] = 'このフィールドが空である場合、セッティングメニューでセットアップされたデフォルトメールシグネチャーは使用されます';
$lang['customer_sales'] = 'セールス';
$lang['default_task_priority'] = 'デフォルト優先';
$lang['project_send_created_email'] = 'プロジェクト作成メールを送る';
$lang['survey_send_to_lists'] = '調査を送るリスト';
$lang['survey_send_notice'] = '毎時 CRON JOB としてメールは送られる';
$lang['view_permission_auto_checked'] = 'VIEW許可は自動で確認されます。EDIT, CREATEと DELETEを適正に使用したい場合はVIEW許可を選択する必要があります。　VIEWはグローバル許可でありユーザーはデーターを開ける事ができずアクションを実行できないため、EDIT, CREATE, DELETEはVIEWなしでは使用できません。';
$lang['custom_field_company_info'] = 'セットアップ->セッティング->会社　会社のために顧客フィールドを編集する';

# Version 1.2.8
$lang['show_transactions_on_invoice_pdf'] = 'PDFに請求書支払（転換）を表示する';
$lang['bulk_actions'] = 'バルクアクション';
$lang['additional_filters'] = '追加フィルター';
$lang['expenses_available_to_bill'] = '請求書に経費を使用できる';
$lang['bulk_action_customers_groups_warning'] = 'グループを選択しない場合、顧客としてアサインされた全てのグループは取り除かれる';
$lang['customer_attachments_show_in_customers_area'] = '顧客エリア　に表示する';
$lang['customer_attachments_show_notice'] = '顧客ファイルからアップロードされたファイルのみ顧客エリアに表示/非表示する機能がある';
$lang['customer_profile_files'] = 'ファイル';
$lang['no_files_found'] = 'ファイルは見つかりません';
$lang['survey_customers_all'] = '全ての顧客';
$lang['custom_field_column'] = 'グリッド（ブートストラップコルムeq.12）- 最大は12である';
$lang['task_status'] = 'ステータス';
$lang['task_status_1'] = '始まっていません';
$lang['task_status_2'] = 'フィードバックを待っています';
$lang['task_status_3'] = 'テスト中';
$lang['task_status_4'] = '進行中';
$lang['task_status_5'] = '完了した';
$lang['task_mark_as'] = '%s とマークする';
$lang['task_marked_as_success'] = '%s とタスクをマークしました';
$lang['task_drag_drop_notice'] = 'ドラッグとドロップは%sと簡単に変更可能の時に使用する。オーダーはこのエリアでは応じられません';
$lang['search_tasks'] = 'タスクをサーチする';
$lang['tasks_kanban_limit'] = 'タスクkan ban列ステータスごとを限定する';
$lang['show_on_invoice_on_pdf'] = '請求書のPDFに %s を表示する';
$lang['show_pay_link_to_invoice_pdf'] = 'PDFにリンクした支払インボイス/請求書表示する (インボイス/請求書ステータスに適応していないものはキャンセルされます)';
$lang['no_leads_found'] = 'リードは見つかりません';
$lang['created_today'] = '今日作成されました';
$lang['total_tasks_deleted'] = '総タスクは削除されました: %s';
$lang['total_tickets_delete'] = '総チケットは削除されました: %s';
$lang['total_tickets_delete'] = '総チケットは削除されました: %s';
$lang['format_letter_portrait'] = 'レターポートレイト';
$lang['format_letter_landscape'] = 'レターランドスケープ';
$lang['period_datepicker'] = '期間';
$lang['total_by_hourly_rate'] = '時給の総額';
$lang['staff_hourly_rate'] = $lang['task_hourly_rate'];
// &#37; is for % so the system can confuse for the original fields like %s
$lang['remove_tax_name_from_item_table_help'] = 'eq. Item TAX 15&#37; will be shown as 15&#37; without the tax name (Not applied if multiple taxes with the same name and tax percent found for item)';
$lang['back_to_project'] = 'プロジェクトに戻る';
$lang['view_kanban'] = 'Kan Banを表示する';
$lang['invoice_is_overdue'] = 'この請求書は %s 日が期日である';

# Version 1.2.9
$lang['time_decimal'] = '時間（少数）';
$lang['time_h'] = '時間 (時)';
$lang['proposal_number_prefix'] = '企画案数を前に置く';
$lang['settings_number_padding_prefix'] = 'プレフィックスフォーマットのゼロにパディングされた数 <br /> <small>eq. 価値が3である場合、数は書式化されます：005 or 025</small>';
$lang['this_week_payments'] = '今週の支払';
$lang['last_week_payments'] = '先週の支払';
$lang['not_published_new_post'] = '新しいポストが公開された';
$lang['expense_name'] = '名前';
$lang['expense_name_help'] = '個人利用用';
$lang['adjustments'] = '調整';
$lang['tax_breakdown'] = '税の明細';
$lang['payments_received'] = '支払を受け取る';
$lang['not_lead_activity_created_proposal'] = '新しい企画案を作成しました - %s';
$lang['lead_title'] = 'ポジション';
$lang['lead_address'] = '住所';
$lang['lead_city'] = '市';
$lang['lead_state'] = '州';
$lang['lead_country'] = '国';
$lang['lead_zip'] = '郵便番号';
$lang['lead_is_public_yes'] = 'はい';
$lang['lead_is_public_no'] = 'いいえ';
$lang['lead_info'] = 'リード情報';
$lang['lead_general_info'] = '概説';
$lang['lead_latest_activity'] = '最新の活動';
$lang['item_description_new_lines_notice'] = '新しいラインはアイテム記述/説明を支持されていません。';
$lang['estimates_report'] = '見積りレポート';
$lang['confirm'] = '確約する';
$lang['delete_staff'] = 'スタッフメンバーを削除する';
$lang['delete_staff_info'] = 'このスタッフメンバーのいくつかのデーターは他のユーザーに移す必要があります。データーを移したい場合はユーザーを選択して下さい';
$lang['estimate_items'] = 'アイテムを見積もる';
$lang['no_proposals_found'] = '企画案は見つかりません';
$lang['no_estimates_found'] = '見積りは見つかりません';
$lang['pipeline_limit_status'] = 'ステータスごとのパイプラインリミット';
$lang['settings_update'] = 'システムをアップデート';
$lang['purchase_key'] = 'Purchase Key';
$lang['update_now'] = '今アップデートして下さい';
$lang['update_available'] = 'アップデートは有効です';
$lang['latest_version'] = '最新のバージョン';
$lang['your_version'] = 'あなたのバージョン';
$lang['using_latest_version'] = 'あなたは最新のバージョンを使用しています';
$lang['mark_as_active'] = 'アクティブとマークする';
$lang['customer_inactive_message'] = 'これは使われていない顧客プロファイルであり、いくつかの機能は無効です';
$lang['active_customers'] = 'アクティブな顧客';
$lang['inactive_active_customers'] = '非アクティブな顧客';
$lang['include_proposal_items_merge_field_help'] = '%s と企画案のコンテントに結合したフィールド企画案のアイテムを含みます';
$lang['all_data_synced_successfully'] = 'データーの同期化に成功しました';
$lang['sync_now'] = '今同期化して下さい';
$lang['sync_data'] = '同期化データー';
$lang['sync_proposals_up_to_date'] = '企画案は最新である、同期化するものはありません';
$lang['proposal_sync_1_info'] = '全ての企画案は個々の企画案が作成された後、別々に保存されます。アップデートした%s情報は以前に作成した企画案の%sには影響しません。';
$lang['proposal_sync_2_info'] = 'あなたの%S情報を最近アップデートした場合、関連付けされた企画案に全ての新しいデーターを同期化する事ができます。こちらが同期化できるリストのフィールドになります';

# Version 1.3.0
$lang['expense_include_additional_data_on_convert'] = 'この経費から長い説明がもたれたアイテムへの追加の詳細を含みます';

# Version 1.4.0
$lang['calendar_events_limit'] = 'カレンダーイベントのリミット（月と週の表示）';
$lang['show_page_number_on_pdf'] = 'PDFにページ数を表示する';
$lang['customer_active_inactive_help'] = '新しい記録を作成した時はドロップダウンに表示されません';
$lang['item_groups'] = 'グループ';
$lang['item_group'] = 'アイテムグループ';
$lang['item_group_name'] = 'グループ名';
$lang['new_item_group'] = ' 新しいグループ';
$lang['show_setup_menu_item_only_on_hover'] = 'フーバーがマウスメインのサイドバーエリアにある場合のみセットアップメニューを表示する';
$lang['internal_article'] = '内部の記事';
$lang['expenses_created_from_this_recurring_expense'] = 'この発生している経費から経費を作成する';
$lang['convert_to_task'] = 'タスクに転換する';
$lang['next_invoice_date'] = '次回のインボイスを送る日: %s';
$lang['next_expense_date'] = '次回の必要経費として請求する日: %s';
$lang['invoice_recurring_from'] = 'この請求書は数と共に発生している請求書から作成されています: %s';
$lang['expense_recurring_from'] = 'この経費は下記の発生している経費から作成されています: %s';
$lang['child_invoices'] = 'チャイルドインボイス';
$lang['child_expenses'] = 'チャイルド経費 ';
$lang['no_announcements'] = 'アナウンスメントはありません';
$lang['unit'] = '単位';
$lang['permission_view_own'] = '見る （自身の）';
$lang['permission_global'] = 'グローバル';
$lang['permission_customers_based_on_admins'] = '顧客管理に基づく';
$lang['permission_payments_based_on_invoices'] = '請求書VIEW（自身の）に基づく許可';
$lang['permission_projects_based_on_assignee'] = 'スタッフメンバーにVIEW（グローバル）の許可がない場合、スタッフメンバーがプロジェクトメンバーとして追加されたプロジェクトのみが表示されます';
$lang['permission_tasks_based_on_assignee'] = 'スタッフメンバーにVIEW（グローバル）の許可がない場合、スタッフメンバーがフォロワー、アサインされた、タスクは公けであり又はセットアップ->セッティング->タスク->にあるタスクのみが表示されます　全てのスタッフにタスクがプロジェクトにリンクされたプロジェクトがはいにセットされた全てのタスクを見る事を許可します。';
$lang['settings_paymentmethod_default_selected_on_invoice'] = '請求書のデフォルトから選択されました';
$lang['paymentmethod_braintree_merchant_id'] = 'マーチャント ID';
$lang['paymentmethod_braintree_private_key'] = 'プライベートキー';
$lang['paymentmethod_braintree_public_key'] = 'パブリックキー';
$lang['company_requires_vat_number_field'] = '会社はVAT数フィールドの使用を要求しています';
$lang['no_company_view_profile'] = '人 - プロファイルを表示します';
$lang['company_is_required'] = '会社フィールドは必須ですか?';
$lang['estimate_invoiced'] = '請求書された';
$lang['file_date_uploaded'] = '日付はアップロードされました';
$lang['allow_contact_to_delete_files'] = '顧客エリアからご自身のアップロードされたファイルのコンタクトを削除することを許可します';
$lang['file'] = 'ファイル';
$lang['customer_contact_person_only_one_allowed'] = '会社フィールドが満杯でない場合1コンタクトのみを許可します。システムはこの顧客を一人としてキャストを行います。';
$lang['web_to_lead'] = 'ウェブをリードへ';
$lang['web_to_lead_form'] = 'ウェブをリードフォームへ';
$lang['new_form'] = '新しいフォーム';
$lang['form_name'] = 'フォーム名';
$lang['cf_option_in_use'] = 'あなたが動かしたオプションは使用されているか又は動かせません。このオプションは存在するオプションに自動的に添付されました。';
$lang['form_builder'] = 'フォームビルダー';
$lang['form_information'] = 'フォーム情報とセットアップ';
$lang['form_builder_create_form_first'] = 'フォームビルダーを使えるようにするために、フォームを始めに作成して下さい。';
$lang['notify_assigned_user'] = '責任者';
$lang['form_recaptcha'] = 'Google Recaptcha を使用する';
$lang['form_lang_validation'] = '言語';
$lang['form_lang_validation_help'] = '検証メッセージのために';
$lang['form_btn_submit_text'] = 'ボタンテキストを提出する';
$lang['form_success_submit_msg'] = 'フォーム後のメッセージを表示は提出されました';
$lang['total_submissions'] = '総提案';
$lang['form_integration_code'] = '統合コード';
$lang['not_lead_imported_from_form'] = 'リードフォーム用のウェブから新しいリードがインポートされました - %s';
$lang['not_lead_activity_log_attachment'] = 'フォームから添付がインポートされました - %s';
$lang['form_integration_code_help'] = 'フォームを表示　するためにあなたのサイトのどこにでもコードの複写と貼り付けて下さい、さらにあなたのウェブサイトに合うように幅と高さpxの調整ができます。';
$lang['invoice_not_found'] = '請求書は見つかりません';
$lang['estimate_not_found'] = '見積りは見つかりません';
$lang['expense_not_found'] = '経費は見つかりません';
$lang['proposal_not_found'] = '企画案は見つかりません';
$lang['new_task_assigned_non_user'] = '新しいタスクが貴方にアサインされました - %s';
$lang['no_child_found'] = 'チャイルド %s は見つかりません';
$lang['company_vat_number'] = 'VAT 数';
$lang['not_lead_assigned_from_form'] = '新しいリードが貴女にアサインされました';
$lang['not_lead_activity_assigned_from_form'] = '%s にリードがアサインされました';
$lang['form_allow_duplicate'] = '複合 %s をデーターベースに挿入することを許可しますか?';
$lang['track_duplicate_by_field'] = 'フィールドの複合を防ぐ';
$lang['and_track_duplicate_by_field'] = '+ フィールド（1フィールドのみによる複合をトラックするために空白にする）';
$lang['create_the_duplicate_form_data_as_task'] = 'タスクとして複合 %s データーを作成し責任スタッフメンバーにアサインする。';
$lang['create_the_duplicate_form_data_as_task_help'] = '提案のさらなるレビューを使用し必要な行動を取る';
$lang['currently_selected'] = '現在選択された';
$lang['search_ajax_empty'] = '選択しタイピングを始める';
$lang['search_ajax_placeholder'] = '検索するためにタイプする...';
$lang['search_ajax_searching'] = '検索しています...';
$lang['search_ajax_initialized'] = '検索するためにタイプを始める';
$lang['lead_description'] = '記述';
$lang['lead_website'] = 'ウェブサイト';
$lang['invoice_activity_auto_converted_from_estimate'] = '数 %s の見積りから請求書は自動的に作成されました';
$lang['hour_of_day_perform_auto_operations'] = '自動オペレーションを実行するための一日の時間';
$lang['hour_of_day_perform_auto_operations_format'] = '24時間フォーマットeq.　9は午前9時又は15は午後3時';
$lang['inv_hour_of_day_perform_auto_operations_help'] = '発生している請求書を使用する、遅滞を注記するetc..';
$lang['use_minified_files'] = 'CSSとJSに縮小されたファイルバージョンを使用する（システムファイルのみ）';

# Version 1.5.0
$lang['logo_favicon_changed_notice'] = 'ロゴ又はファビコンの変化が検出されました。オリジナルのCRMロゴを見る場合はあなたのブラウザーキャッシュをクリアにして下さい';
$lang['kb_search_articles'] = '知識ベース項目/品目を検索して下さい';
$lang['kb_search'] = '検索する';
$lang['have_a_question'] = '質問はありますか?';
$lang['card_expiration_year'] = '有効年';
$lang['card_expiration_month'] = '有効月';
$lang['client_website'] = 'ウェブサイト';
$lang['search_project_members'] = 'プロジェクトメンバーを検索する...';
$lang['cf_translate_input_link_title'] = 'タイトル';
$lang['cf_translate_input_link_url'] = 'URL';
$lang['cf_translate_input_link_tip'] = 'リンクに追加するためにここをクリックする';
$lang['task_edit_delete_timesheet_notice'] = 'タイムシートタスクは %s です、あなたは %s をタイムシートにできます。';
$lang['department_username'] = 'IMAP ユーザー名';
$lang['department_username_help'] = 'あなたのIMAPサーバーがログインする際にメールアドレスではなくユーザー名を使用している場合、このフィールドを記入して下さい';
$lang['total_tickets_deleted'] = '全チケットは削除されました: %s';

# Version 1.5.1
$lang['ticket_linked_to_project'] = 'このチケットはプロジェクトにリンクされています: %s';
$lang['only_own_files_contacts'] = 'コンタクトは顧客エリア内のアップロードされたファイルのみを見る事ができます';
$lang['only_own_files_contacts_help'] = '顧客プロファイルに他のコンタクトから手動でファイルをシェアーした場合、彼らはファイルを見る事ができます';
$lang['share_file_with'] = 'このファイルとシェアーする';
$lang['file_share_visibility_notice'] = 'このファイルはコンタクトとシェアーされていません、リロードするためにもう一度可視性をトグルスイッチして下さい';
$lang['share_file_with_show'] = 'このファイルはとシェアーされています: %s';
$lang['allow_primary_contact_to_view_edit_billing_and_shipping'] = '最初のコンタクトを請求書の作成/発送の詳細に表示/編集する事を許可する';
$lang['estimate_due_after'] = '期日からを推定する （日）';

# Version 1.6.0
$lang['my_timesheets'] = '私のタイムシート';
$lang['today'] = '今日';
$lang['open_in_dropbox'] = 'Dropbox に開ける';
$lang['show_primary_contact'] = '%s の最初のコンタクトをフルネームで表示する';
$lang['view_members_timesheets'] = '全てのタイムシートを表示する';
$lang['priority'] = '優先事項';
$lang['fetch_from_google'] = 'Google からフェッチする';
$lang['customer_fetch_lat_lng_usage'] = '最高の結果を得るために、フェッチングの前に住所、市や国を記入する。';
$lang['g_search_address_not_found'] = 'その住所は見つかりませんでした。もう一度やり直して下さい。';
$lang['proposals_report'] = '提案報告書';
$lang['staff_members_open_tickets_to_all_contacts_help'] = 'もしスタッフメンバーが顧客VIEWのみの許可を得ていなければ、管理エリアの顧客管理にアサインされている顧客コンタクトより新しいチケットを作成する事ができます。';
$lang['staff_members_open_tickets_to_all_contacts'] = 'スタッフメンバーが全てのコンタクトのチケットを開く事を許可しますか?';
$lang['charts_based_report'] = '報告書に基づくチャート';
$lang['delete_backups_older_then'] = 'X日以後、バックアップは自動的に削除されます （無効にするために0にセットする）';
$lang['responsible_admin'] = '責任のある管理';
$lang['tags'] = 'タグ';
$lang['tag'] = 'タグ';
$lang['customer_map_notice'] = 'ここに地図を表示するために、顧客プロファイルに経度と緯度を追加する';
$lang['default_view'] = 'デフォルト表示';
$lang['day'] = '日';
$lang['agenda'] = 'アジェンダ';
$lang['timesheet_tags'] = 'タイムシートタグ';
$lang['show_more'] = 'もっと表示する';
$lang['show_less'] = '表示を少なくする';
$lang['project_completed_date'] = '完了した日';
$lang['language'] = '言語';
$lang['this_week'] = '今週';
$lang['last_week'] = '先週';
$lang['this_month'] = '今月';
$lang['last_month'] = '先月';
$lang['no_description_project'] = 'このプロジェクトの記述はありません';
$lang['sales_string'] = '販売';
$lang['no_project_members'] = 'このプロジェクトにはメンバーがいません';
$lang['search_by_tags'] = 'タグより検索する場合は＃とタグ名を使用する';
$lang['project_status_5'] = 'キャンセルしました';

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