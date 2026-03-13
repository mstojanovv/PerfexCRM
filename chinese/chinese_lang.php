<?php

# Version 1.0.0
#
# 常规
$lang['id']                   = 'ID';  // 保持英文缩写不变
$lang['name']                 = '名称';
$lang['options']              = '操作选项';
$lang['submit']               = '保存';  // 已翻译
$lang['added_successfully']   = '%s 添加成功';
$lang['updated_successfully'] = '%s 更新成功';
$lang['edit']                 = '编辑 %s';
$lang['add_new']              = '添加新 %s';
$lang['deleted']              = '%s 已删除';
$lang['problem_deleting']     = '删除 %s 时出现问题';
$lang['is_referenced']        = '该 %s 的 ID 已被使用';
$lang['close']                = '关闭';
$lang['send']                 = '发送';
$lang['cancel']               = '取消';
$lang['go_back']              = '返回';
$lang['error_uploading_file'] = '文件上传错误';
$lang['load_more']            = '加载更多';
$lang['cant_delete_default']  = '无法删除默认 %s';
# 发票概述
# 发票通用
$lang['invoice_status_paid']                   = '已支付';
$lang['invoice_status_unpaid']                 = '未支付';
$lang['invoice_status_overdue']                = '已逾期';
$lang['invoice_status_not_paid_completely']    = '部分支付';
$lang['invoice_pdf_heading']                   = '发票';
$lang['invoice_table_item_heading']            = '项目';
$lang['invoice_table_quantity_heading']        = '数量';
$lang['invoice_table_rate_heading']            = '单价';
$lang['invoice_table_tax_heading']             = '税额';
$lang['invoice_table_amount_heading']          = '金额';
$lang['invoice_subtotal']                      = '小计';
$lang['invoice_adjustment']                    = '调整项';
$lang['invoice_total']                         = '总计';
$lang['invoice_bill_to']                       = '账单接收方';
$lang['invoice_data_date']                     = '发票日期：';
$lang['invoice_data_duedate']                  = '到期日：';
$lang['invoice_received_payments']             = '交易记录';
$lang['invoice_no_payments_found']             = '未找到该发票的付款记录';
$lang['invoice_note']                          = '备注：';
$lang['invoice_payments_table_number_heading'] = '支付编号';
$lang['invoice_payments_table_mode_heading']   = '付款方式';
$lang['invoice_payments_table_date_heading']   = '日期';
$lang['invoice_payments_table_amount_heading'] = '金额';
# 公告
$lang['announcement']                 = '公告';
$lang['announcement_lowercase']       = '公告';
$lang['announcements']                = '公告列表';
$lang['announcements_lowercase']      = '公告';
$lang['new_announcement']             = '新建公告';
$lang['announcement_name']            = '公告标题';
$lang['announcement_message']         = '公告内容';
$lang['announcement_show_to_staff']   = '向员工显示';
$lang['announcement_show_to_clients'] = '向客户显示';
$lang['announcement_show_my_name']    = '显示发布人姓名';
# 客户
$lang['clients']                                 = '客户';
$lang['client']                                  = '客户';
$lang['new_client']                              = '新客户';
$lang['client_lowercase']                        = '客户';
$lang['client_firstname']                        = '姓氏';
$lang['client_lastname']                         = '名字';
$lang['client_email']                            = '电子邮箱';
$lang['client_company']                          = '公司';
$lang['client_vat_number']                       = '增值税号';
$lang['client_address']                          = '地址';
$lang['client_city']                             = '城市';
$lang['client_postal_code']                      = '邮政编码';
$lang['client_state']                            = '州/省';
$lang['client_password']                         = '密码';
$lang['client_password_change_populate_note']    = '注意：填写此字段将修改该联系人的密码';
$lang['client_password_last_changed']            = '最后密码修改时间：';
$lang['login_as_client']                         = '以客户身份登录';
$lang['client_invoices_tab']                     = '发票';
$lang['contracts_invoices_tab']                  = '合同';
$lang['contracts_tickets_tab']                   = '工单';
$lang['contracts_notes_tab']                     = '备注';
$lang['note_description']                        = '备注内容';
$lang['client_do_not_send_welcome_email']        = '不发送欢迎邮件';
$lang['clients_notes_table_description_heading'] = '描述';
$lang['clients_notes_table_addedfrom_heading']   = '添加人';
$lang['clients_notes_table_dateadded_heading']   = '添加日期';
$lang['clients_list_full_name']                  = '全名';
$lang['clients_list_last_login']                 = '最后登录时间';

# 合同
$lang['contracts']                = '合同';
$lang['contract']                 = '合同';
$lang['new_contract']             = '新建合同';
$lang['contract_lowercase']       = '合同';
$lang['contract_start_date']      = '开始日期';
$lang['contract_end_date']        = '结束日期';
$lang['contract_subject']         = '合同标题';
$lang['contract_description']     = '合同描述';
$lang['contract_subject_tooltip'] = '客户可见合同标题';
$lang['contract_client_string']   = '客户';
$lang['contract_attach']          = '附加文档';
$lang['contract_list_client']     = '客户';
$lang['contract_list_subject']    = '合同标题';
$lang['contract_list_start_date'] = '开始日期';
$lang['contract_list_end_date']   = '结束日期';

# 货币
$lang['currencies']                    = '货币';
$lang['currency']                      = '货币';
$lang['new_currency']                  = '新建货币';
$lang['currency_lowercase']            = '货币';
$lang['base_currency_set']             = '已设为基准货币';
$lang['make_base_currency']            = '设为基准货币';
$lang['base_currency_string']          = '基准货币';
$lang['currency_list_name']            = '名称';
$lang['currency_list_symbol']          = '符号';
$lang['currency_add_edit_description'] = '货币代码';
$lang['currency_add_edit_rate']        = '符号';
$lang['currency_edit_heading']         = '编辑货币';
$lang['currency_add_heading']          = '添加新货币';

# 部门
$lang['departments']                 = '部门';
$lang['department']                  = '部门'; 
$lang['new_department']              = '新建工单分类';
$lang['department_lowercase']        = '部门'; // 根据上下文可能需要调整为"该部门"
$lang['department_name']             = '工单分类名称';
$lang['department_email']            = '工单接收邮箱';
$lang['department_hide_from_client'] = '对客户隐藏？';
$lang['department_list_name']        = '名称';

# 邮件模板
$lang['email_templates']                        = '邮件模板';
$lang['email_template']                         = '邮件模板';
$lang['email_template_lowercase']               = '邮件模板';  // 根据上下文可能需要调整为"该邮件模板"
$lang['email_templates_lowercase']              = '邮件模板';  // 根据上下文可能需要调整为"多个邮件模板"
$lang['email_template_ticket_fields_heading']   = '工单';
$lang['email_template_invoices_fields_heading'] = '发票';
$lang['email_template_clients_fields_heading']  = '客户';
$lang['template_name']                = '模板名称';
$lang['template_subject']             = '邮件主题';
$lang['template_fromname']            = '发件人名称';
$lang['template_fromemail']           = '发件邮箱';
$lang['send_as_plain_text']           = '以纯文本格式发送';
$lang['email_template_disabled']      = '已停用';
$lang['email_template_email_message'] = '邮件正文';
$lang['available_merge_fields']       = '可用合并字段';
# 首页
$lang['dashboard_string']                          = '仪表盘-控制面板';
$lang['home_latest_todos']                         = '最新待办事项';
$lang['home_no_latest_todos']                      = '未找到待办事项';
$lang['home_latest_finished_todos']                = '最新已完成事项';
$lang['home_no_finished_todos_found']              = '未找到已完成事项';
$lang['home_tickets_awaiting_reply_by_department'] = '按部门分类的待回复工单';
$lang['home_tickets_awaiting_reply_by_status']     = '按状态分类的待回复工单';
$lang['home_this_week_events']                     = '本周活动';
$lang['home_upcoming_events_next_week']            = '下周活动预告';
$lang['home_event_added_by']                       = '活动创建人';
$lang['home_public_event']                         = '公开活动';
$lang['home_weekly_payment_records']               = '每周收款记录';
$lang['home_weekend_ticket_opening_statistics']    = '工单开启周统计';

# 新闻动态
$lang['whats_on_your_mind']                                 = '分享文档、想法...';
$lang['new_post']                                           = '发布';
$lang['newsfeed_upload_tooltip']                            = '提示：拖放文件即可上传';
$lang['newsfeed_all_departments']                           = '所有部门';
$lang['newsfeed_pin_post']                                  = '置顶帖子';
$lang['newsfeed_unpin_post']                                = '取消置顶';
$lang['newsfeed_delete_post']                               = '删除';
$lang['newsfeed_published_post']                            = '已发布';
$lang['newsfeed_you_like_this']                             = '已点赞';
$lang['newsfeed_like_this']                                 = '点赞';
$lang['newsfeed_one_other']                                 = '等人';
$lang['newsfeed_you']                                       = '您';
$lang['newsfeed_and']                                       = '和';
$lang['newsfeed_you_and']                                   = '您和';
$lang['newsfeed_like_this_saying']                          = '赞';
$lang['newsfeed_unlike_this_saying']                        = '取消赞';
$lang['newsfeed_show_more_comments']                        = '显示更多评论';
$lang['comment_this_post_placeholder']                      = '评论此帖子...';
$lang['newsfeed_post_likes_modal_heading']                  = '点赞同事';
$lang['newsfeed_comment_likes_modal_heading']               = '点赞评论的同事';
$lang['newsfeed_newsfeed_post_only_visible_to_departments'] = '该帖子仅对以下部门可见：%s';

# 发票项目
$lang['invoice_items']                     = '发票项目';
$lang['invoice_item']                      = '发票项目';
$lang['new_invoice_item']                  = '新增项目';
$lang['invoice_item_lowercase']            = '发票项目';
$lang['invoice_items_list_description']    = '项目描述';
$lang['invoice_items_list_rate']           = '单价';
$lang['invoice_item_add_edit_description'] = '项目描述';
$lang['invoice_item_add_edit_rate']        = '单价';
$lang['invoice_item_edit_heading']         = '编辑项目';
$lang['invoice_item_add_heading']          = '添加新项目';

# 发票管理
$lang['invoices']                                = '发票';
$lang['invoice']                                 = '发票';
$lang['invoice_lowercase']                       = '发票';
$lang['create_new_invoice']                      = '创建新发票';
$lang['view_invoice']                            = '查看发票';
$lang['invoice_payment_recorded']                = '发票付款记录已保存';
$lang['invoice_payment_record_failed']           = '发票付款记录保存失败';
$lang['invoice_sent_to_client_success']          = '发票已成功发送给客户';
$lang['invoice_sent_to_client_fail']             = '发送发票时出现问题';
$lang['invoice_reminder_send_problem']           = '发送逾期提醒时出现问题';
$lang['invoice_overdue_reminder_sent']           = '发票逾期提醒已发送';
$lang['invoice_details']                         = '发票详情';
$lang['invoice_view']                            = '查看发票';
$lang['invoice_select_customer']                 = '客户';
$lang['invoice_add_edit_number']                 = '发票编号';
$lang['invoice_add_edit_date']                   = '发票日期';
$lang['invoice_add_edit_duedate']                = '到期日';
$lang['invoice_add_edit_currency']               = '货币';
$lang['invoice_add_edit_client_note']            = '客户备注';
$lang['invoice_add_edit_admin_note']             = '管理员备注';
$lang['invoices_toggle_table_tooltip']           = '切换表格视图';
$lang['edit_invoice_tooltip']                    = '编辑发票';
$lang['delete_invoice_tooltip']                  = '删除发票（注意：所有相关付款记录将被删除）';
$lang['invoice_sent_to_email_tooltip']           = '发送至邮箱';
$lang['invoice_already_send_to_client_tooltip']  = '该发票已于%s发送给客户';
$lang['send_overdue_notice_tooltip']             = '发送逾期通知';
$lang['invoice_view_activity_tooltip']           = '活动日志';
$lang['invoice_record_payment']                  = '记录支付';
$lang['invoice_send_to_client_modal_heading']    = '发送发票给客户';
$lang['invoice_send_to_client_attach_pdf']       = '附加PDF发票';
$lang['invoice_send_to_client_preview_template'] = '预览邮件模板';
$lang['invoice_dt_table_heading_number']         = '发票编号';
$lang['invoice_dt_table_heading_date']           = '创建时间';
$lang['invoice_dt_table_heading_client']         = '客户';
$lang['invoice_dt_table_heading_duedate']        = '到期日';
$lang['invoice_dt_table_heading_amount']         = '金额';
$lang['invoice_dt_table_heading_status']         = '状态';
$lang['record_payment_for_invoice']              = '记录支付-发票';
$lang['record_payment_amount_received']          = '收款金额';
$lang['record_payment_date']                     = '支付日期';
$lang['record_payment_leave_note']               = '添加备注';
$lang['invoice_payments_received']               = '已收款项';
$lang['invoice_record_payment_note_placeholder'] = '管理员备注';
$lang['no_payments_found']                       = '未找到付款记录';

# 支付管理
$lang['payments']                             = '付款';
$lang['payment']                              = '支付';
$lang['payment_lowercase']                    = '支付';
$lang['payments_table_number_heading']        = '支付编号';
$lang['payments_table_invoicenumber_heading'] = '发票编号';
$lang['payments_table_mode_heading']          = '付款方式';
$lang['payments_table_date_heading']          = '日期';
$lang['payments_table_amount_heading']        = '金额';
$lang['payments_table_client_heading']        = '客户';
$lang['payment_not_exists']                   = '付款记录不存在';
$lang['payment_edit_for_invoice']             = '发票付款记录';
$lang['payment_edit_amount_received']         = '收款金额';
$lang['payment_edit_date']                    = '支付日期';

# 知识库
$lang['kb_article_add_edit_subject']   = '标题';
$lang['kb_article_add_edit_group']     = '分组';
$lang['kb_string']                     = '知识库';
$lang['kb_article']                    = '文章';
$lang['kb_article_lowercase']          = '文章';
$lang['kb_article_new_article']        = '新建文章';
$lang['kb_article_disabled']           = '已禁用';
$lang['kb_article_description']        = '文章描述';
$lang['kb_no_articles_found']          = '未找到知识库文章';
$lang['kb_dt_article_name']            = '文章标题';
$lang['kb_dt_group_name']              = '分组';
$lang['new_group']                     = '新建分组';
$lang['kb_group_add_edit_name']        = '分组名称';
$lang['kb_group_add_edit_description'] = '简要描述';
$lang['kb_group_add_edit_disabled']    = '禁用';
$lang['kb_group_add_edit_note']        = '注意：勾选禁用将隐藏该分组下所有文章';
$lang['group_table_name_heading']      = '名称';
$lang['group_table_isactive_heading']  = '启用状态';
$lang['kb_no_groups_found']            = '未找到知识库分组';

# 媒体文件
$lang['media_files'] = '文件';

# 收款方式
$lang['new_payment_mode']           = '新建收款方式';
$lang['payment_modes']              = '收款方式';
$lang['payment_mode']               = '收款方式';
$lang['payment_mode_lowercase']     = '收款方式';
$lang['payment_modes_dt_name']      = '收款方式';
$lang['payment_mode_add_edit_name'] = '收款方式名称';
$lang['payment_mode_edit_heading']  = '编辑收款方式';
$lang['payment_mode_add_heading']   = '添加收款方式';

# 预设回复
$lang['new_predefined_reply']              = '新建预设回复';
$lang['predefined_replies']                = '预设回复';
$lang['predefined_reply']                  = '预设回复';
$lang['predefined_reply_lowercase']        = '预设回复';
$lang['predefined_replies_dt_name']        = '预设回复名称';
$lang['predefined_reply_add_edit_name']    = '回复名称';
$lang['predefined_reply_add_edit_content'] = '回复内容';

# 工单优先级
$lang['new_ticket_priority']           = '新建优先级';
$lang['ticket_priorities']             = '工单优先级';
$lang['ticket_priority']               = '工单优先级';
$lang['ticket_priority_lowercase']     = '工单优先级';
$lang['no_ticket_priorities_found']    = '未找到工单优先级设置';
$lang['ticket_priority_dt_name']       = '优先级名称';
$lang['ticket_priority_add_edit_name'] = '优先级名称';

# 报表
$lang['kb_reports']                                       = '知识库文章报表';
$lang['sales_reports']                                    = '销售报表';
$lang['reports_choose_kb_group']                          = '选择分组';
$lang['report_kb_yes']                                    = '是';
$lang['report_kb_no']                                     = '否';
$lang['report_kb_no_votes']                               = '暂无投票';
$lang['report_this_week_leads_conversions']               = '本周线索转化';
$lang['report_leads_sources_conversions']                 = '来源转化率';
$lang['report_leads_monthly_conversions']                 = '月度转化';
$lang['sales_report_heading']                             = '销售报表';
$lang['report_sales_type_income']                         = '总收入';
$lang['report_sales_type_customer']                       = '客户报表';
$lang['report_sales_base_currency_select_explanation']    = '由于存在多币种发票，请选择基准货币';
$lang['report_sales_from_date']                           = '开始日期';
$lang['report_sales_to_date']                             = '结束日期';
$lang['report_sales_months_all_time']                     = '全部时间';
$lang['report_sales_months_six_months']                   = '最近6个月';
$lang['report_sales_months_twelve_months']                = '最近12个月';
$lang['reports_sales_generated_report']                   = '已生成报表';
$lang['reports_sales_dt_customers_client']                = '客户';
$lang['reports_sales_dt_customers_total_invoices']        = '发票总数';
$lang['reports_sales_dt_items_customers_amount']          = '金额';
$lang['reports_sales_dt_items_customers_amount_with_tax'] = '含税金额';

# 角色
$lang['new_role']           = '新建角色';
$lang['all_roles']          = '所有角色';
$lang['roles']              = '员工角色';
$lang['role']               = '角色';
$lang['role_lowercase']     = '角色';
$lang['roles_total_users']  = '总用户数：';
$lang['roles_dt_name']      = '角色名称';
$lang['role_add_edit_name'] = '角色名称';

# 服务
$lang['new_service']           = '新建服务';
$lang['services']              = '服务项目';
$lang['service']               = '服务';
$lang['service_lowercase']     = '服务';
$lang['services_dt_name']      = '服务名称';
$lang['service_add_edit_name'] = '服务名称';

# 系统设置
$lang['settings']                                                  = '系统设置';
$lang['settings_updated']                                          = '设置已更新';
$lang['settings_save']                                             = '保存设置';
$lang['settings_group_general']                                    = '常规设置';
$lang['settings_group_localization']                               = '本地化设置';
$lang['settings_group_tickets']                                    = '工单设置';
$lang['settings_group_sales']                                      = '财务设置';
$lang['settings_group_email']                                      = '邮件设置';
$lang['settings_group_clients']                                    = '客户设置';
$lang['settings_group_newsfeed']                                   = '动态设置';
$lang['settings_group_cronjob']                                    = '定时任务';
$lang['settings_yes']                                              = '是';
$lang['settings_no']                                               = '否';

# 客户设置
$lang['settings_clients_default_theme']                            = '默认客户主题';
$lang['settings_clients_allow_registration']                       = '允许客户注册';
$lang['settings_clients_allow_kb_view_without_registration']       = '允许未注册用户查看知识库';

# 定时任务设置
$lang['settings_cron_send_overdue_reminder']                       = '发送发票逾期提醒';
$lang['settings_cron_send_overdue_reminder_tooltip']               = '通过定时任务在发票状态变更为逾期时发送提醒邮件';
$lang['automatically_send_invoice_overdue_reminder_after']         = '自动发送提醒(天后)';
$lang['automatically_resend_invoice_overdue_reminder_after']       = '自动重发提醒(天后)';

# 邮件设置
$lang['settings_email_host']                                       = 'SMTP服务器';
$lang['settings_email_port']                                       = 'SMTP端口';
$lang['settings_email']                                            = '邮箱账号';
$lang['settings_email_password']                                   = 'SMTP密码';
$lang['settings_email_charset']                                    = '邮件编码';
$lang['settings_email_signature']                                  = '邮件签名';

# 常规设置
$lang['settings_general_company_logo']                             = '公司Logo';
$lang['settings_general_company_logo_tooltip']                     = '推荐尺寸: 150 x 34像素';
$lang['settings_general_company_remove_logo_tooltip']              = '移除公司Logo';
$lang['settings_general_company_name']                             = '公司名称';
$lang['settings_general_company_main_domain']                      = '公司主域名';
$lang['settings_general_use_knowledgebase']                        = '启用知识库';
$lang['settings_general_use_knowledgebase_tooltip']                = '启用后客户端将显示知识库功能';
$lang['settings_general_tables_limit']                             = '表格分页条数';
$lang['settings_general_default_staff_role']                       = '默认员工角色';
$lang['settings_general_default_staff_role_tooltip']               = '新增员工时将自动分配此角色';

# 本地化设置
$lang['settings_localization_date_format']                         = '日期格式';
$lang['settings_localization_default_timezone']                    = '默认时区';
$lang['settings_localization_default_language']                    = '默认语言';

# 动态设置
$lang['settings_newsfeed_max_file_upload_post']                    = '单次动态最大上传文件数';

# 合同提醒
$lang['settings_reminders_contracts']                              = '合同到期前提醒(天)';
$lang['settings_reminders_contracts_tooltip']                      = '到期前多少天发送提醒通知';

# 工单设置
$lang['settings_tickets_use_services']                             = '启用服务项目';
$lang['settings_tickets_max_attachments']                          = '工单最大附件数';
$lang['settings_tickets_allow_departments_access']                 = '限制员工仅访问所属部门工单';
$lang['settings_tickets_allowed_file_extensions']                  = '允许的附件扩展名';

# 财务设置
$lang['settings_sales_general']                                    = '常规';
$lang['settings_sales_general_note']                               = '常规财务设置';
$lang['settings_sales_invoice_prefix']                             = '发票编号前缀';
$lang['settings_sales_decimal_separator']                          = '小数点符号';
$lang['settings_sales_thousand_separator']                         = '千分位符号';
$lang['settings_sales_currency_placement']                         = '货币符号位置';
$lang['settings_sales_currency_placement_before']                  = '金额前';
$lang['settings_sales_currency_placement_after']                   = '金额后';
$lang['settings_sales_require_client_logged_in_to_view_invoice']   = '要求客户登录才能查看发票';
$lang['settings_sales_next_invoice_number']                        = '下一发票编号';
$lang['settings_sales_next_invoice_number_tooltip']                = '如需重新开始编号，请将此值设为1';
$lang['settings_sales_decrement_invoice_number_on_delete']         = '删除发票时递减编号';
$lang['settings_sales_decrement_invoice_number_on_delete_tooltip'] = '当删除最后一张发票时是否递减发票编号？例如：设为"是"时，若当前下一发票编号为15，删除后将变为14。设为"否"则保持15不变。若同时设置了"仅允许删除最后一张发票"为否，建议此项也设为否以保持编号连续性。';
$lang['settings_sales_invoice_number_format']                      = '发票编号格式';
$lang['settings_sales_invoice_number_format_year_based']           = '基于年份';
$lang['settings_sales_invoice_number_format_number_based']         = '基于数字(000001)';
$lang['settings_sales_company_info_note']                          = '这些信息将显示在发票、报价单、付款单等PDF文档中';
$lang['settings_sales_company_name']                               = '公司名称';
$lang['settings_sales_address']                                    = '地址';
$lang['settings_sales_city']                                       = '城市';
$lang['settings_sales_country_code']                               = '国家代码';
$lang['settings_sales_postal_code']                                = '邮政编码';
$lang['settings_sales_phonenumber']                                = '联系电话';

# 线索
$lang['new_lead']                          = '新建线索';
$lang['leads']                             = '线索';
$lang['lead']                              = '线索';
$lang['lead_lowercase']                    = '线索';
$lang['leads_all']                         = '全部线索';
$lang['leads_canban_notes']                = '备注：%s';
$lang['leads_canban_source']               = '来源：%s';

# 线索来源
$lang['lead_new_source']                   = '新建来源';
$lang['lead_sources']                      = '线索来源';
$lang['lead_source']                       = '线索来源';
$lang['lead_source_lowercase']             = '线索来源';
$lang['leads_sources_not_found']           = '未找到线索来源';
$lang['leads_sources_table_name']          = '来源名称';
$lang['leads_source_add_edit_name']        = '来源名称';

# 线索状态
$lang['lead_new_status']                   = '新建状态';
$lang['lead_status']                       = '线索状态';
$lang['lead_status_lowercase']             = '线索状态';
$lang['leads_status_table_name']           = '状态名称';
$lang['leads_status_add_edit_name']        = '状态名称';
$lang['leads_status_add_edit_order']       = '排序';
$lang['lead_statuses_not_found']           = '未找到线索状态';

# 线索列表
$lang['leads_search']                      = '搜索线索';
$lang['leads_table_total']                 = '总线索数：%s';
$lang['leads_dt_name']                     = '姓名';
$lang['leads_dt_email']                    = '邮箱';
$lang['leads_dt_phonenumber']              = '电话';
$lang['leads_dt_assigned']                 = '负责人';
$lang['leads_dt_status']                   = '状态';
$lang['leads_dt_last_contact']             = '最后联系';

# 线索详情
$lang['lead_add_edit_name']                = '姓名';
$lang['lead_add_edit_email']               = '电子邮箱';
$lang['lead_add_edit_phonenumber']         = '联系电话';
$lang['lead_add_edit_source']              = '来源';
$lang['lead_add_edit_status']              = '状态';
$lang['lead_add_edit_assigned']            = '负责人';
$lang['lead_add_edit_datecontacted']       = '联系日期';
$lang['lead_add_edit_contacted_today']     = '今日已联系';
$lang['lead_add_edit_activity']            = '活动记录';
$lang['lead_add_edit_notes']               = '备注';
$lang['lead_add_edit_add_note']            = '添加备注';
$lang['lead_not_contacted']                = '我尚未联系此线索';
$lang['lead_add_edit_contacted_this_lead'] = '我已联系此线索';

# 杂项
$lang['access_denied'] = '访问被拒绝';
$lang['prev']          = '上一页';
$lang['next']          = '下一页';

# 数据表格
$lang['dt_paginate_first']    = '首页';
$lang['dt_paginate_last']     = '末页';
$lang['dt_paginate_next']     = '下一页';
$lang['dt_paginate_previous'] = '上一页';
$lang['dt_search']            = '搜索...';
$lang['dt_zero_records']      = '未找到匹配记录';
$lang['dt_loading_records']   = '加载中...';
$lang['dt_length_menu']       = '显示 _MENU_ 条记录';
$lang['dt_info_filtered']     = '（从 _MAX_ 条{0}中筛选）';
$lang['dt_info_empty']        = '显示 0 到 0 条，共 0 条{0}';
$lang['dt_info']              = '显示 _START_ 到 _END_ 条，共 _TOTAL_ 条{0}';
$lang['dt_empty_table']       = '未找到{0}';
$lang['dt_sort_ascending']    = '点击升序排列';
$lang['dt_sort_descending']   = '点击降序排列';

# 发票活动日志
$lang['user_sent_overdue_reminder'] = '%s 发送了发票逾期提醒';

# 星期
$lang['wd_monday']    = '星期一';
$lang['wd_tuesday']   = '星期二';
$lang['wd_wednesday'] = '星期三';
$lang['wd_thursday']  = '星期四';
$lang['wd_friday']    = '星期五';
$lang['wd_saturday']  = '星期六';
$lang['wd_sunday']    = '星期日';

# 管理左侧边栏
$lang['als_dashboard']             = '仪表盘';
$lang['als_clients']               = '客户';
$lang['als_leads']                 = '线索';
$lang['als_contracts']             = '合同';
$lang['als_sales']                 = '销售';
$lang['als_staff']                 = '员工';
$lang['als_tasks']                 = '任务';
$lang['als_kb']                    = '知识库';
$lang['als_media']                 = '媒体库';
$lang['als_reports']               = '报告';
$lang['als_reports_sales_submenu'] = '销售报表';
$lang['als_reports_leads_submenu'] = '线索报表';
$lang['als_kb_articles_submenu']   = '知识库文章';
$lang['als_utilities']             = '工具';
$lang['als_announcements_submenu'] = '公告管理';
$lang['als_calendar_submenu']      = '日历';
$lang['als_activity_log_submenu']  = '活动日志';
# 管理员自定义侧边栏
$lang['acs_ticket_priority_submenu']           = '工单优先级';
$lang['acs_ticket_statuses_submenu']           = '工单状态';
$lang['acs_ticket_predefined_replies_submenu'] = '预设回复';
$lang['acs_ticket_services_submenu']           = '服务项目';
$lang['acs_departments']                       = '部门管理';
$lang['acs_leads']                             = '线索';
$lang['acs_leads_sources_submenu']             = '线索来源';
$lang['acs_leads_statuses_submenu']            = '线索状态';
$lang['acs_sales_taxes_submenu']               = '税率设置';
$lang['acs_sales_currencies_submenu']          = '货币设置';
$lang['acs_sales_payment_modes_submenu']       = '收款方式';
$lang['acs_email_templates']                   = '邮件模板';
$lang['acs_roles']                             = '角色权限';
$lang['acs_settings']                          = '系统设置';

# 工单管理
$lang['new_ticket']                                          = '新建工单';
$lang['tickets']                                             = '工单';
$lang['ticket']                                              = '工单';
$lang['ticket_lowercase']                                    = '工单';
$lang['support_tickets']                                     = '支持工单';
$lang['support_ticket']                                      = '支持工单';
$lang['ticket_settings_to']                                  = '联系人';
$lang['ticket_settings_email']                               = '邮箱地址';
$lang['ticket_settings_departments']                         = '所属部门';
$lang['ticket_settings_service']                             = '服务类型';
$lang['ticket_settings_priority']                            = '优先级';
$lang['ticket_settings_subject']                             = '主题';
$lang['ticket_settings_assign_to']                           = '分配工单（默认为当前用户）';
$lang['ticket_add_body']                                     = '工单内容';
$lang['ticket_add_attachments']                              = '附件';
$lang['ticket_no_reply_yet']                                 = '暂无回复';
$lang['new_ticket_added_successfully']                       = '工单 #%s 创建成功';
$lang['replied_to_ticket_successfully']                      = '工单 #%s 回复成功';
$lang['ticket_settings_updated_successfully']                = '工单设置更新成功';
$lang['ticket_settings_updated_successfully_and_reassigned'] = '工单设置更新成功 - 已重新分配到 %s 部门';
$lang['ticket_dt_subject']                                   = '主题';
$lang['ticket_dt_department']                                = '问题分类';
$lang['ticket_dt_service']                                   = '服务';
$lang['ticket_dt_submitter']                                 = '提交人';
$lang['ticket_dt_status']                                    = '状态';
$lang['ticket_dt_priority']                                  = '优先级';
$lang['ticket_dt_last_reply']                                = '最后回复';
$lang['ticket_single_add_reply']                             = '添加回复';
$lang['ticket_single_add_note']                              = '添加备注';
$lang['ticket_single_other_user_tickets']                    = '其他工单';
$lang['ticket_single_settings']                              = '设置';
$lang['ticket_single_priority']                              = '优先级：%s';
$lang['ticket_single_last_reply']                            = '最后回复：%s';
$lang['ticket_single_ticket_note_by']                        = '%s 添加的备注';
$lang['ticket_single_note_added']                            = '备注添加时间：%s';
$lang['ticket_single_change_status']                         = '变更状态';
$lang['ticket_single_assign_to_me_on_update']                = '更新时自动分配给我';
$lang['ticket_single_insert_predefined_reply']               = '插入预设回复';
$lang['ticket_single_insert_knowledge_base_link']            = '插入知识库链接';
$lang['ticket_single_attachments']                           = '附件';
$lang['ticket_single_add_response']                          = '添加回复';
$lang['ticket_single_note_heading']                          = '内部备注';
$lang['ticket_single_add_note']                              = '添加备注';
$lang['ticket_settings_none_assigned']                       = '未分配';
$lang['ticket_status_changed_successfully']                  = '工单状态已更新';
$lang['ticket_status_changed_fail']                          = '工单状态更新失败';
$lang['ticket_staff_string']                                 = '客服人员';
$lang['ticket_client_string']                                = '客户';
$lang['ticket_posted']                                       = '提交时间：%s';
$lang['ticket_access_by_department_denied']                  = '您无权访问此工单。该工单属于您未分配的部门。';

# 员工管理
$lang['new_staff']                                     = '新增员工';
$lang['staff_members']                                 = '员工列表';
$lang['staff_member']                                  = '员工';
$lang['staff_member_lowercase']                        = '员工';
$lang['staff_profile_updated']                         = '个人资料已更新';
$lang['staff_old_password_incorrect']                  = '旧密码错误';
$lang['staff_password_changed']                        = '密码已更新';
$lang['staff_problem_changing_password']               = '密码修改失败';
$lang['staff_profile_string']                          = '个人资料';
$lang['staff_cant_remove_main_admin']                  = '无法移除主管理员';
$lang['staff_cant_remove_yourself_from_admin']         = '不能移除自己的管理员权限';
$lang['staff_dt_name']                                 = '姓名';
$lang['staff_dt_email']                                = '邮箱';
$lang['staff_dt_last_Login']                           = '最后登录';
$lang['staff_dt_active']                               = '激活状态';
$lang['staff_add_edit_firstname']                      = '姓氏';
$lang['staff_add_edit_lastname']                       = '名字';
$lang['staff_add_edit_email']                          = '电子邮箱';
$lang['staff_add_edit_phonenumber']                    = '联系电话';
$lang['staff_add_edit_facebook']                       = 'Facebook';
$lang['staff_add_edit_linkedin']                       = 'LinkedIn';
$lang['staff_add_edit_skype']                          = 'Skype';
$lang['staff_add_edit_departments']                    = '所属部门';
$lang['staff_add_edit_role']                           = '角色';
$lang['staff_add_edit_permissions']                    = '权限设置';
$lang['staff_add_edit_administrator']                  = '管理员';
$lang['staff_add_edit_password']                       = '密码';
$lang['staff_add_edit_password_note']                  = '注意：填写此字段将修改该员工密码';
$lang['staff_add_edit_password_last_changed']          = '最后密码修改时间';
$lang['staff_add_edit_notes']                          = '备注信息';
$lang['staff_add_edit_note_description']               = '备注内容';
$lang['staff_notes_table_description_heading']         = '备注';
$lang['staff_notes_table_addedfrom_heading']           = '添加人';
$lang['staff_notes_table_dateadded_heading']           = '添加时间';
$lang['staff_admin_profile']                           = '管理员资料页';
$lang['staff_profile_notifications']                   = '通知设置';
$lang['staff_profile_departments']                     = '管理部门';
$lang['staff_edit_profile_image']                      = '头像设置';
$lang['staff_edit_profile_your_departments']           = '所属部门';
$lang['staff_edit_profile_change_your_password']       = '修改密码';
$lang['staff_edit_profile_change_old_password']        = '当前密码';
$lang['staff_edit_profile_change_new_password']        = '新密码';
$lang['staff_edit_profile_change_repeat_new_password'] = '确认新密码';

# 员工任务
$lang['new_task']                           = '新建任务';
$lang['task_repeat_every']                  = '每隔';
$lang['tasks']                              = '任务管理';
$lang['task']                               = '任务';
$lang['task_lowercase']                     = '任务';
$lang['comment_string']                     = '评论';
$lang['task_marked_as_complete']            = '任务标记为已完成';
$lang['task_follower_removed']              = '任务关注者已移除';
$lang['task_assignee_removed']              = '任务负责人已移除';
$lang['task_no_assignees']                  = '此任务暂无负责人';
$lang['task_no_followers']                  = '此任务暂无关注者';
$lang['task_list_all']                      = '全部任务';
$lang['task_list_not_assigned']             = '未分配任务';
$lang['task_list_duedate_passed']           = '已过期任务';
$lang['tasks_dt_name']                      = '任务名称';
$lang['task_single_priority']               = '优先级';
$lang['task_single_start_date']             = '开始日期';
$lang['task_single_due_date']               = '截止日期';
$lang['task_single_finished']               = '完成状态';
$lang['task_single_mark_as_complete']       = '标记为完成';
$lang['task_single_edit']                   = '编辑任务';
$lang['task_single_delete']                 = '删除任务';
$lang['task_single_assignees']              = '负责人';
$lang['task_single_assignees_select_title'] = '分配任务给';
$lang['task_single_followers']              = '关注者';
$lang['task_single_followers_select_title'] = '添加关注者';
$lang['task_single_add_new_comment']        = '添加评论';
$lang['task_add_edit_subject']              = '任务主题';
$lang['task_add_edit_priority']             = '优先级';
$lang['task_priority_low']                  = '低';
$lang['task_priority_medium']               = '中';
$lang['task_priority_high']                 = '高';
$lang['task_priority_urgent']               = '紧急';
$lang['task_add_edit_start_date']           = '开始日期';
$lang['task_add_edit_due_date']             = '截止日期';
$lang['task_add_edit_description']          = '任务描述';

# 税率管理
$lang['new_tax']           = '新增税率';
$lang['taxes']             = '税率设置';
$lang['tax']               = '税率';
$lang['tax_lowercase']     = '税率';
$lang['tax_dt_name']       = '税率名称';
$lang['tax_dt_rate']       = '税率（百分比）';
$lang['tax_add_edit_name'] = '税率名称';
$lang['tax_add_edit_rate'] = '税率（百分比）';
$lang['tax_edit_title']    = '编辑税率';
$lang['tax_add_title']     = '添加新税率';

# 工单状态
$lang['new_ticket_status']            = '新建工单状态';
$lang['ticket_statuses']              = '工单状态';
$lang['ticket_status']                = '工单状态';
$lang['ticket_status_lowercase']      = '工单状态';
$lang['ticket_statuses_dt_name']      = '状态名称';
$lang['no_ticket_statuses_found']     = '未找到工单状态';
$lang['ticket_statuses_table_total']  = '总计 %s 项';
$lang['ticket_status_add_edit_name']  = '状态名称';
$lang['ticket_status_add_edit_color'] = '选择颜色';
$lang['ticket_status_add_edit_order'] = '状态排序';

# 待办事项
$lang['new_todo']                  = '新建待办事项';
$lang['my_todos']                  = '我的待办事项';
$lang['todo']                      = '待办事项';
$lang['todo_lowercase']            = '待办事项';
$lang['todo_status_changed']       = '待办事项状态已更新';
$lang['todo_add_title']            = '添加待办事项';
$lang['add_new_todo_description']  = '事项描述';
$lang['no_finished_todos_found']   = '暂无已完成事项';
$lang['no_unfinished_todos_found'] = '暂无待办事项';
$lang['unfinished_todos_title']    = '未完成事项';
$lang['finished_todos_title']      = '最近完成事项';

# 实用工具
$lang['utility_activity_log']                        = '操作日志';
$lang['utility_activity_log_filter_by_date']         = '按日期筛选';
$lang['utility_activity_log_dt_description']         = '操作描述';
$lang['utility_activity_log_dt_date']                = '操作时间';
$lang['utility_activity_log_dt_staff']               = '操作人员';
$lang['utility_calendar_new_event_title']            = '添加新事件';
$lang['utility_calendar_new_event_start_date']       = '开始日期';
$lang['utility_calendar_new_event_end_date']         = '结束日期';
$lang['utility_calendar_new_event_make_public']      = '公开事件';
$lang['utility_calendar_event_added_successfully']   = '事件添加成功';
$lang['utility_calendar_event_deleted_successfully'] = '事件已删除';
$lang['utility_calendar_new_event_placeholder']      = '事件标题';

# 导航栏
$lang['nav_notifications']          = '系统通知';
$lang['nav_my_profile']             = '个人中心';
$lang['nav_edit_profile']           = '编辑资料';
$lang['nav_logout']                 = '安全退出';
$lang['nav_no_notifications']       = '暂无通知';
$lang['nav_view_all_notifications'] = '查看全部通知';
$lang['nav_notifications_tooltip']  = '查看通知中心';

# 页脚
$lang['clients_copyright'] = '版权所有 © %s';

# 合同
$lang['clients_contracts']               = '我的合同';
$lang['clients_contracts_dt_subject']    = '合同主题';
$lang['clients_contracts_dt_start_date'] = '生效日期';
$lang['clients_contracts_dt_end_date']   = '到期日期';

# 首页
$lang['clients_quick_invoice_info']           = '账单概览';
$lang['clients_home_currency_select_tooltip'] = '请选择货币单位（您的账单包含多种货币）';

# 发票管理
$lang['clients_invoice_html_btn_download'] = '下载';
$lang['clients_my_invoices']               = '我的账单';
$lang['clients_invoice_dt_number']         = '账单编号';
$lang['clients_invoice_dt_date']           = '创建时间';
$lang['clients_invoice_dt_duedate']        = '截止日期';
$lang['clients_invoice_dt_amount']         = '金额';
$lang['clients_invoice_dt_status']         = '状态';

# 个人资料
$lang['clients_profile_heading'] = '资料信息';

# 资料编辑/注册字段 START
$lang['clients_firstname'] = '姓氏';
$lang['clients_lastname']  = '名字';
$lang['clients_email']     = '电子邮箱';
$lang['clients_company']   = '公司名称';
$lang['clients_vat']       = '增值税号';
$lang['clients_phone']     = '联系电话';
$lang['clients_country']   = '国家/地区';
$lang['clients_city']      = '城市';
$lang['clients_address']   = '详细地址';
$lang['clients_zip']       = '邮政编码';
$lang['clients_state']     = '省份';
# 资料编辑/注册字段 END

$lang['clients_register_password']                    = '设置密码';
$lang['clients_register_password_repeat']             = '确认密码';
$lang['clients_edit_profile_update_btn']              = '更新资料';
$lang['clients_edit_profile_change_password_heading'] = '修改密码';
$lang['clients_edit_profile_old_password']            = '当前密码';
$lang['clients_edit_profile_new_password']            = '新密码';
$lang['clients_edit_profile_new_password_repeat']     = '确认新密码';
$lang['clients_edit_profile_change_password_btn']     = '确认修改';
$lang['clients_profile_last_changed_password']        = '最后修改时间：%s';
# 知识库
$lang['clients_knowledge_base']                    = '帮助中心';
$lang['clients_knowledge_base_articles_not_found'] = '未找到帮助文章';
$lang['clients_knowledge_base_find_useful']        = '这篇文章对您有帮助吗？';
$lang['clients_knowledge_base_find_useful_yes']    = '有帮助';
$lang['clients_knowledge_base_find_useful_no']     = '无帮助';
$lang['clients_article_only_1_vote_today']         = '24小时内只能投票一次';
$lang['clients_article_voted_thanks_for_feedback'] = '感谢您的反馈';

# 工单
$lang['clients_ticket_open_subject']               = '提交工单';
$lang['clients_ticket_open_departments']           = '问题分类';
$lang['clients_tickets_heading']                   = '我的工单';
$lang['clients_ticket_open_service']               = '服务项目';
$lang['clients_ticket_open_priority']              = '优先级';
$lang['clients_ticket_open_body']                  = '问题描述';
$lang['clients_ticket_attachments']                = '附件';
$lang['clients_single_ticket_string']              = '工单详情';
$lang['clients_single_ticket_replied']             = '已回复：%s';
$lang['clients_single_ticket_information_heading'] = '工单信息';
$lang['clients_tickets_dt_number']                 = '工单编号';
$lang['clients_tickets_dt_subject']                = '主题';
$lang['clients_tickets_dt_department']             = '问题分类';
$lang['clients_tickets_dt_service']                = '服务';
$lang['clients_tickets_dt_status']                 = '状态';
$lang['clients_tickets_dt_last_reply']             = '最后回复';
$lang['clients_ticket_single_department']          = '部门：%s';
$lang['clients_ticket_single_submitted']           = '提交时间：%s';
$lang['clients_ticket_single_status']              = '状态：';
$lang['clients_ticket_single_priority']            = '优先级：%s';
$lang['clients_ticket_single_add_reply_btn']       = '添加回复';
$lang['clients_ticket_single_add_reply_heading']   = '回复工单';

# 登录/注册
$lang['clients_login_heading_no_register'] = '用户登录';
$lang['clients_login_heading_register']    = '用户管理中心登录';
$lang['clients_login_email']               = '电子邮箱';
$lang['clients_login_password']            = '密码';
$lang['clients_login_remember']            = '记住我';
$lang['clients_login_login_string']        = '登录';
$lang['clients_register_string']           = '注册';
$lang['clients_register_heading']          = '用户注册';

# 导航菜单
$lang['clients_nav_login']     = '登录';
$lang['clients_nav_register']  = '注册';
$lang['clients_nav_invoices']  = '账单';
$lang['clients_nav_contracts'] = '合同';
$lang['clients_nav_kb']        = '知识库';
$lang['clients_nav_profile']   = '我的资料';
$lang['clients_nav_logout']    = '退出登录';

# 支付相关
$lang['payment_receipt']                               = '付款凭证';
$lang['payment_for_string']                            = '付款项目';
$lang['payment_date']                                  = '付款日期：';
$lang['payment_view_mode']                             = '付款方式：';
$lang['payment_total_amount']                          = '总金额';
$lang['payment_table_invoice_number']                  = '发票编号';
$lang['payment_table_invoice_date']                    = '发票日期';
$lang['payment_table_invoice_amount_total']            = '发票金额';
$lang['payment_table_payment_amount_total']            = '实付金额';
$lang['payments_table_transaction_id']                 = '交易ID：%s';
$lang['payment_getaway_token_not_found']               = '支付令牌无效';
$lang['online_payment_recorded_success']               = '付款记录成功';
$lang['online_payment_recorded_success_fail_database'] = '支付成功但记录保存失败，请联系管理员';

# 线索管理
$lang['lead_convert_to_client']                = '转为客户';
$lang['lead_convert_to_email']                 = '邮箱';
$lang['lead_convert_to_client_firstname']      = '姓氏';
$lang['lead_convert_to_client_lastname']       = '名字';
$lang['lead_email_already_exists']             = '该邮箱已存在于客户数据中';
$lang['lead_to_client_base_converted_success'] = '线索已成功转为客户';
$lang['lead_have_client_profile']              = '该线索已有客户资料';
$lang['lead_converted_edit_client_profile']    = '编辑资料';

# 发票管理
$lang['view_invoice_as_customer_tooltip']                                     = '客户视角预览';
$lang['invoice_add_edit_recurring']                                           = '定期发票？';
$lang['invoice_add_edit_recurring_no']                                        = '否';
$lang['invoice_add_edit_recurring_month']                                     = '每%s个月';
$lang['invoice_add_edit_recurring_months']                                    = '每%s个月';
$lang['invoices_list_all']                                                    = '全部';
$lang['invoices_list_not_have_payment']                                       = '未支付发票';
$lang['invoices_list_recurring']                                              = '定期发票';
$lang['invoices_list_made_payment_by']                                        = '付款人：%s';
$lang['invoices_create_invoice_from_recurring_only_on_paid_invoices']         = '仅当定期发票状态为已支付时才生成新发票？';
$lang['invoices_create_invoice_from_recurring_only_on_paid_invoices_tooltip'] = '如果设为"是"，则只有当定期发票状态为"已支付"时才会生成新发票';
$lang['view_invoice_pdf_link_pay']                                            = '立即支付';

# 付款方式
$lang['payment_mode_add_edit_description']         = '银行账户/备注';
$lang['payment_mode_add_edit_description_tooltip'] = '可填写银行账户信息，将显示在HTML发票中';
$lang['payment_modes_dt_description']              = '银行账户/备注';
$lang['payment_modes_add_edit_announcement']       = '注意：以下为线下付款方式。在线支付网关请在设置->支付网关中配置';
$lang['payment_mode_add_edit_active']              = '启用';
$lang['payment_modes_dt_active']                   = '状态';

# 合同
$lang['contract_not_found'] = '合同未找到，可能已被删除，请查看活动日志';

# 系统设置
$lang['setting_bar_heading']                               = '设置';
$lang['settings_group_online_payment_modes']               = '支付网关';
$lang['settings_paymentmethod_mode_label']                 = '显示名称';
$lang['settings_paymentmethod_active']                     = '启用';
$lang['settings_paymentmethod_currencies']                 = '支持货币(逗号分隔)';
$lang['settings_paymentmethod_testing_mode']               = '测试模式';
$lang['settings_paymentmethod_paypal_username']            = 'PayPal API用户名';
$lang['settings_paymentmethod_paypal_password']            = 'PayPal API密码';
$lang['settings_paymentmethod_paypal_signature']           = 'API签名';
$lang['settings_paymentmethod_stripe_api_secret_key']      = 'Stripe API密钥';
$lang['settings_paymentmethod_stripe_api_publishable_key'] = 'Stripe公钥';
$lang['settings_limit_top_search_bar_results']             = '顶部搜索栏结果限制';

# 客户信息
$lang['client_phonenumber'] = '联系电话';

# 客户账户
$lang['clients_register']                          = '注册';
$lang['clients_profile_updated']                   = '资料已更新';
$lang['clients_successfully_registered']           = '注册成功';
$lang['clients_account_created_but_not_logged_in'] = '账户创建成功，但未能自动登录，请尝试手动登录';

# 支付信息
$lang['payment_for_invoice'] = '发票支付';
$lang['payment_total']       = '总计：%s';

# 发票页面
$lang['invoice_html_online_payment']             = '在线支付';
$lang['invoice_html_online_payment_button_text'] = '立即支付';
$lang['invoice_html_payment_modes_not_selected'] = '请选择付款方式';
$lang['invoice_html_amount_blank']               = '金额不能为空或零';
$lang['invoice_html_offline_payment']            = '线下支付';
$lang['invoice_html_amount']                     = '金额';

# 数据表格
$lang['dt_button_column_visibility'] = '列显示';
$lang['dt_button_reload']            = '刷新';
$lang['dt_button_excel']             = '导出Excel';
$lang['dt_button_csv']               = '导出CSV';
$lang['dt_button_pdf']               = '导出PDF';
$lang['dt_button_print']             = '打印';
$lang['is_not_active_export']        = '否';
$lang['is_active_export']            = '是';

# 账单设置
$lang['invoice_add_edit_advanced_options']                = '高级选项';
$lang['invoice_add_edit_allowed_payment_modes']           = '允许的付款方式';
$lang['invoice_add_edit_recurring_invoices_from_invoice'] = '此周期账单生成的子账单';
$lang['invoice_add_edit_no_payment_modes_found']          = '未找到付款方式';
$lang['invoice_html_total_pay']                           = '总计：%s';

# 邮件模板
$lang['email_templates_table_heading_name'] = '模板名称';

# 通用设置
$lang['discount_type']            = '折扣类型';
$lang['discount_type_after_tax']  = '税后折扣';
$lang['discount_type_before_tax'] = '税前折扣';
$lang['terms_and_conditions']     = '条款与条件';
$lang['reference_no']             = '参考编号';
$lang['no_discount']              = '无折扣';
$lang['view_stats_tooltip']       = '查看数据概览';

# 客户功能
$lang['zip_from_date']            = '起始日期：';
$lang['zip_to_date']              = '截止日期：';
$lang['client_zip_payments']      = '导出付款记录';
$lang['client_zip_invoices']      = '导出账单';
$lang['client_zip_estimates']     = '导出报价单';
$lang['client_zip_status']        = '状态筛选';
$lang['client_zip_status_all']    = '全部状态';
$lang['client_zip_payment_modes'] = '付款方式';
$lang['client_zip_no_data_found'] = '未找到%s';

# 支付管理
$lang['payment_mode']         = '付款方式';
$lang['payment_view_heading'] = '支付详情';

# 系统设置
$lang['settings_allow_payment_amount_to_be_modified'] = '允许客户修改支付金额（在线支付）';

$lang['settings_delete_only_on_last_invoice']                       = '仅允许删除最新账单';
$lang['settings_sales_estimate_prefix']                             = '报价单前缀';
$lang['settings_sales_next_estimate_number']                        = '下一个报价单编号';
$lang['settings_sales_next_estimate_number_tooltip']                = '重置为1可重新开始编号';
$lang['settings_sales_decrement_estimate_number_on_delete']         = '删除报价单时递减编号';
$lang['settings_sales_decrement_estimate_number_on_delete_tooltip'] = '删除最新报价单后是否递减编号？设为"否"将保持当前编号';
$lang['settings_sales_estimate_number_format']                      = '报价单编号格式';
$lang['settings_sales_estimate_number_format_year_based']           = '年度编号（2023-0001）';
$lang['settings_sales_estimate_number_format_number_based']         = '顺序编号（000001）';
$lang['settings_delete_only_on_last_estimate']                      = '仅允许删除最新报价单';
$lang['settings_send_test_email_heading']                           = '发送测试邮件';
$lang['settings_send_test_email_subheading']                        = '测试SMTP配置是否正常';
$lang['settings_send_test_email_string']                            = '收件邮箱';
$lang['settings_smtp_settings_heading']                             = 'SMTP设置';
$lang['settings_smtp_settings_subheading']                          = '配置系统邮箱';
$lang['settings_sales_heading_general']                             = '常规设置';
$lang['settings_sales_heading_invoice']                             = '账单设置';
$lang['settings_sales_heading_estimates']                           = '报价单设置';
$lang['settings_sales_cron_invoice_heading']                        = '定时账单设置';

# 任务管理
$lang['tasks_dt_datestart'] = '开始日期';

# 账单通用
$lang['invoice_discount'] = '折扣';

# 系统设置扩展
$lang['settings_rtl_support_admin']                                   = '管理端RTL支持（从右到左）';
$lang['settings_rtl_support_client']                                  = '客户端RTL支持（从右到左）';
$lang['settings_estimate_auto_convert_to_invoice_on_client_accept']   = '客户接受后自动转为账单';
$lang['settings_exclude_estimate_from_client_area_with_draft_status'] = '草稿状态报价单不对客户可见';

# 月份名称
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

# 时间描述
$lang['time_ago_just_now']  = '刚刚';
$lang['time_ago_minute']    = '1分钟前';
$lang['time_ago_minutes']   = '%s分钟前';
$lang['time_ago_hour']      = '1小时前';
$lang['time_ago_hours']     = '%s小时前';
$lang['time_ago_yesterday'] = '昨天';
$lang['time_ago_days']      = '%s天前';
$lang['time_ago_week']      = '1周前';
$lang['time_ago_weeks']     = '%s周前';
$lang['time_ago_month']     = '1个月前';
$lang['time_ago_months']    = '%s个月前';
$lang['time_ago_year']      = '1年前';
$lang['time_ago_years']     = '%s年前';

# 报价单管理
$lang['estimates']                                = '报价';
$lang['estimate']                                 = '报价单';
$lang['estimate_lowercase']                       = '报价单';
$lang['create_new_estimate']                      = '新建报价';
$lang['view_estimate']                            = '查看报价';
$lang['estimate_sent_to_client_success']          = '报价单已成功发送至客户';
$lang['estimate_sent_to_client_fail']             = '报价单发送失败';
$lang['estimate_view']                            = '查看报价';
$lang['estimate_select_customer']                 = '选择客户';
$lang['estimate_add_edit_number']                 = '报价单编号';
$lang['estimate_add_edit_date']                   = '报价日期';
$lang['estimate_add_edit_expirydate']             = '有效期至';
$lang['estimate_add_edit_currency']               = '货币类型';
$lang['estimate_add_edit_client_note']            = '客户备注';
$lang['estimate_add_edit_admin_note']             = '内部备注';
$lang['estimates_toggle_table_tooltip']           = '切换表格视图';
$lang['estimate_add_edit_advanced_options']       = '高级设置';
$lang['estimate_to']                              = '致';
$lang['estimates_list_all']                       = '全部报价';
$lang['estimate_invoiced_date']                   = '已于 %s 转为正式账单';
$lang['edit_estimate_tooltip']                    = '编辑报价单';
$lang['delete_estimate_tooltip']                  = '删除报价单';
$lang['estimate_sent_to_email_tooltip']           = '发送至邮箱';
$lang['estimate_already_send_to_client_tooltip']  = '该报价单已于 %s 发送给客户';
$lang['estimate_view_activity_tooltip']           = '查看操作记录';
$lang['estimate_send_to_client_modal_heading']    = '发送报价单给客户';
$lang['estimate_send_to_client_attach_pdf']       = '附加PDF格式报价单';
$lang['estimate_send_to_client_preview_template'] = '预览邮件模板';
$lang['estimate_dt_table_heading_number']         = '报价编号';
$lang['estimate_dt_table_heading_date']           = '日期';
$lang['estimate_dt_table_heading_client']         = '客户';
$lang['estimate_dt_table_heading_expirydate']     = '有效期';
$lang['estimate_dt_table_heading_amount']         = '金额';
$lang['estimate_dt_table_heading_status']         = '状态';
$lang['estimate_convert_to_invoice']              = '转为正式账单';

# 客户面板
$lang['client_payments_tab'] = '付款记录';

# 报价单通用
$lang['estimate_pdf_heading']            = '报价单';
$lang['estimate_table_item_heading']     = '项目';
$lang['estimate_table_quantity_heading'] = '数量';
$lang['estimate_table_rate_heading']     = '单价';
$lang['estimate_table_tax_heading']      = '税额';
$lang['estimate_table_amount_heading']   = '金额';
$lang['estimate_subtotal']               = '小计';
$lang['estimate_adjustment']             = '调整项';
$lang['estimate_discount']               = '折扣';
$lang['estimate_total']                  = '总计';
$lang['estimate_to']                     = '致';
$lang['estimate_data_date']              = '报价日期';
$lang['estimate_data_expiry_date']       = '有效期至';
$lang['estimate_note']                   = '备注：';
$lang['estimate_status_draft']           = '草稿';
$lang['estimate_status_sent']            = '待确认';
$lang['estimate_status_declined']        = '已拒绝';
$lang['estimate_status_accepted']        = '已确认';
$lang['estimate_status_expired']         = '已过期';
$lang['estimate_note']                   = '备注：';

## 客户面板
$lang['clients_estimate_dt_number']             = '报价编号';
$lang['clients_estimate_dt_date']               = '创建日期';
$lang['clients_estimate_dt_duedate']            = '有效期';
$lang['clients_estimate_dt_amount']             = '金额';
$lang['clients_estimate_dt_status']             = '状态';
$lang['clients_nav_estimates']                  = '报价单';
$lang['clients_decline_estimate']               = '拒绝';
$lang['clients_accept_estimate']                = '接受';
$lang['clients_my_estimates']                   = '我的报价单';
$lang['clients_estimate_invoiced_successfully'] = '感谢接受报价，请查看根据此报价生成的账单';
$lang['clients_estimate_accepted_not_invoiced'] = '感谢接受此报价单';
$lang['clients_estimate_declined']              = '报价已拒绝，有效期前仍可接受';
$lang['clients_estimate_failed_action']         = '操作失败，请重试';
$lang['client_add_edit_profile']                = '客户资料';

# 自定义字段
$lang['custom_field']                          = '自定义字段';
$lang['custom_field_lowercase']                = '自定义字段';
$lang['custom_fields']                         = '自定义字段';
$lang['new_custom_field']                      = '新建字段';
$lang['custom_field_name']                     = '字段名称';
$lang['custom_field_add_edit_type']            = '字段类型';
$lang['custom_field_add_edit_belongs_top']     = '所属模块';
$lang['custom_field_add_edit_options']         = '选项配置';
$lang['custom_field_add_edit_options_tooltip'] = '仅适用于下拉/复选框类型。用逗号分隔选项，例：苹果,橙子,香蕉';
$lang['custom_field_add_edit_order']           = '排序';
$lang['custom_field_dt_field_to']              = '所属模块';
$lang['custom_field_dt_field_name']            = '字段名';
$lang['custom_field_dt_field_type']            = '类型';
$lang['custom_field_add_edit_active']          = '启用';
$lang['custom_field_add_edit_disabled']        = '禁用';

# 工单回复
$lang['ticket_reply'] = '工单回复';

# 后台侧边栏
$lang['asc_custom_fields'] = '自定义字段';

# 合同
$lang['contract_types']           = '合同类型';
$lang['contract_type']            = '合同类型';
$lang['new_contract_type']        = '新建合同类型';
$lang['contract_type_lowercase']  = '合同';
$lang['contract_type_name']       = '类型名称';
$lang['contract_types_list_name'] = '合同类型';

# 自定义菜单
$lang['acs_contracts']      = '合同';
$lang['acs_contract_types'] = '合同类型';

# 账单明细
$lang['invoice_item_long_description'] = '详细描述';

# 客户管理
$lang['clients_list_phone']                = '联系电话';
$lang['client_expenses_tab']               = '支出记录';
$lang['customers_summary']                 = '客户概览';
$lang['customers_summary_active']          = '活跃联系人';
$lang['customers_summary_inactive']        = '不活跃联系人';
$lang['customers_summary_logged_in_today'] = '今日登录的联系人';

# 身份验证
$lang['admin_auth_forgot_password_email']     = '电子邮箱';
$lang['admin_auth_forgot_password_heading']   = '找回密码';
$lang['admin_auth_login_heading']             = '系统登录';
$lang['admin_auth_login_email']               = '电子邮箱';
$lang['admin_auth_login_password']            = '密码';
$lang['admin_auth_login_remember_me']         = '记住账号';
$lang['admin_auth_login_button']              = '登录';
$lang['admin_auth_login_fp']                  = '忘记密码？';
$lang['admin_auth_reset_password_heading']    = '重置密码';
$lang['admin_auth_reset_password']            = '新密码';
$lang['admin_auth_reset_password_repeat']     = '确认新密码';
$lang['admin_auth_invalid_email_or_password'] = '邮箱或密码错误';
$lang['admin_auth_inactive_account']          = '账号未激活';

# 日历模块
$lang['calendar_estimate']          = '报价单';
$lang['calendar_invoice']           = '账单';
$lang['calendar_contract']          = '合同';
$lang['calendar_customer_reminder'] = '客户提醒';
$lang['calendar_event']             = '日程';
$lang['calendar_task']              = '任务';

# 线索管理
$lang['lead_edit_delete_tooltip'] = '删除线索';
$lang['lead_attachments']         = '附件';

# 后台侧边栏
$lang['acs_finance'] = '财务';

# 系统设置
$lang['settings_show_sale_agent_on_invoices']       = '账单显示销售代表';
$lang['settings_show_sale_agent_on_estimates']      = '报价单显示销售代表';
$lang['settings_predefined_predefined_term']        = '预设条款与条件';
$lang['settings_predefined_clientnote']             = '预设客户备注';
$lang['settings_custom_pdf_logo_image_url']         = 'PDF自定义Logo地址';
$lang['settings_custom_pdf_logo_image_url_tooltip'] = '注意：使用透明PNG图片时可能因php-imagick/php-gd版本差异出现兼容性问题，建议更新php-imagick并禁用php-gd。留空则使用默认Logo';

# 通用术语
$lang['sale_agent_string']               = '销售代表';
$lang['amount_display_in_base_currency'] = '金额以基准货币显示（仅适用于单币种场景）';

# 线索概览
$lang['leads_summary'] = '线索统计';

# 合同
$lang['contract_value']                       = '合同金额';
$lang['contract_trash']                       = '回收站';
$lang['contracts_view_trash']                 = '查看回收站';
$lang['contracts_view_all']                   = '全部合同';
$lang['contracts_view_exclude_trashed']       = '排除已删除合同';
$lang['contract_value_tooltip']               = '（使用基准货币计算）';
$lang['contract_trash_tooltip']               = '移入回收站的合同：客户不可见｜不参与统计｜默认列表不显示';
$lang['contract_summary_active']              = '生效中';
$lang['contract_renew_heading']               = '续签合同';
$lang['contract_summary_heading']             = '合同概览';
$lang['contract_summary_expired']             = '已过期';
$lang['contract_summary_about_to_expire']     = '即将到期';
$lang['contract_summary_recently_added']      = '新增合同';
$lang['contract_summary_trash']               = '回收站';
$lang['contract_summary_by_type']             = '按类型统计';
$lang['contract_summary_by_type_value']       = '按类型统计金额';
$lang['contract_renewed_successfully']        = '合同续签成功';
$lang['contract_renewed_fail']                = '合同续签失败，请联系管理员';
$lang['no_contract_renewals_found']           = '未找到续签记录';
$lang['no_contract_renewals_history_heading'] = '续签历史';
$lang['contract_renewed_by']                  = '由 %s 续签';
$lang['contract_renewal_deleted']             = '续签记录已删除';
$lang['contract_renewal_delete_fail']         = '续签记录删除失败，请联系管理员';
$lang['contract_renewal_new_value']           = '新合同金额：%s';
$lang['contract_renewal_old_value']           = '原合同金额：%s';
$lang['contract_renewal_new_start_date']      = '新起始日期：%s';
$lang['contract_renewal_old_start_date']      = '原起始日期：%s';
$lang['contract_renewal_new_end_date']        = '新截止日期：%s';
$lang['contract_renewal_old_end_date']        = '原截止日期：%s';
$lang['contract_attachment']                  = '合同附件';

# 后台侧边菜单
$lang['als_expenses']           = '财务管理';
$lang['als_reports_expenses']   = '支出报表';
$lang['als_expenses_vs_income'] = '收支对比';

# 账单管理
$lang['invoice_attach_file']           = '添加附件';
$lang['invoice_mark_as_sent']          = '标记为已发送';
$lang['invoice_marked_as_sent']        = '账单标记为已发送';
$lang['invoice_marked_as_sent_failed'] = '标记操作失败';

# 支付管理
$lang['payment_transaction_id'] = '交易流水号';

# 财务管理
$lang['acs_expense_categories']                       = '费用分类';
$lang['expense_category']                             = '费用分类';
$lang['expense_category_lowercase']                   = '费用分类';
$lang['new_expense']                                  = '登记支出';
$lang['expense_add_edit_name']                        = '分类名称';
$lang['expense_add_edit_description']                 = '分类说明';
$lang['expense_categories']                           = '费用分类';
$lang['new_expense_category']                         = '新建分类';
$lang['dt_expense_description']                       = '费用说明';
$lang['expense']                                      = '支出';
$lang['expenses']                                     = '支出';
$lang['expense_lowercase']                            = '费用小写';
$lang['expense_add_edit_customer']                    = '关联客户';
$lang['expense_add_edit_note']                        = '备注';
$lang['expense_add_edit_date']                        = '费用日期';
$lang['expense_add_edit_amount']                      = '金额';
$lang['expense_add_edit_billable']                    = '可计费';
$lang['expense_add_edit_attach_receipt']              = '上传凭证';
$lang['expense_add_edit_reference_no']                = '参考编号';
$lang['expense_receipt']                              = '费用凭证';
$lang['expense_receipt_lowercase']                    = '费用凭证';
$lang['expense_dt_table_heading_category']            = '费用分类';
$lang['expense_dt_table_heading_amount']              = '金额';
$lang['expense_dt_table_heading_date']                = '日期';
$lang['expense_dt_table_heading_reference_no']        = '参考编号';
$lang['expense_dt_table_heading_customer']            = '关联客户';
$lang['expense_dt_table_heading_payment_mode']        = '付款方式';
$lang['expense_converted_to_invoice']                 = '费用已成功转为账单';
$lang['expense_converted_to_invoice_fail']            = '转换失败，请查看错误日志';
$lang['expense_copy_success']                         = '费用记录复制成功';
$lang['expense_copy_fail']                            = '复制失败，请检查必填项';
$lang['expenses_list_all']                            = '全部支出';
$lang['expenses_list_billable']                       = '可计费';
$lang['expenses_list_non_billable']                   = '不可计费';
$lang['expenses_list_invoiced']                       = '已开票费用';
$lang['expenses_list_unbilled']                       = '未计费';
$lang['expenses_list_recurring']                      = '周期性费用';
$lang['expense_invoice_delete_not_allowed']           = '禁止删除：该费用已开票';
$lang['expense_convert_to_invoice']                   = '转为账单';
$lang['expense_edit']                                 = '编辑费用';
$lang['expense_delete']                               = '删除费用';
$lang['expense_copy']                                 = '复制费用';
$lang['expense_invoice_not_created']                  = '未生成账单';
$lang['expense_billed']                               = '已计费';
$lang['expense_not_billed']                           = '未计费';
$lang['expense_customer']                             = '关联客户：';
$lang['expense_note']                                 = '备注：';
$lang['expense_date']                                 = '日期：';
$lang['expense_ref_noe']                              = '参考号：';
$lang['expense_amount']                               = '金额：';
$lang['expense_recurring_indicator']                  = '周期性';
$lang['expense_already_invoiced']                     = '该费用已生成账单';
$lang['expense_recurring_auto_create_invoice']        = '自动生成账单';
$lang['expense_recurring_send_custom_on_renew']       = '费用续期时自动发送账单给客户';
$lang['expense_recurring_autocreate_invoice_tooltip'] = '启用后，费用续期时将自动为客户生成账单';
$lang['expenses_yearly_by_categories']                = '年度费用分类统计';
$lang['total_expenses_for']                           = '年度费用总额'; // 年份参数
$lang['expenses_report_for']                          = '费用报表年份'; // 年份参数

# 自定义字段
$lang['custom_field_required']    = '必填项';
$lang['custom_field_show_on_pdf'] = '在PDF中显示';
$lang['custom_field_leads']       = '线索';
$lang['custom_field_customers']   = '客户';
$lang['custom_field_staff']       = '员工';
$lang['custom_field_contracts']   = '合同';
$lang['custom_field_tasks']       = '任务';
$lang['custom_field_expenses']    = '费用';
$lang['custom_field_invoice']     = '账单';
$lang['custom_field_estimate']    = '报价单';

# 工单系统
$lang['ticket_single_private_staff_notes'] = '内部备注（仅员工可见）';

# 商业动态
$lang['business_news'] = '行业资讯';

# 导航栏
$lang['nav_todo_items'] = '待办事项';

# 合同
$lang['clients_contracts_type'] = '合同类型';

# 版本 1.0.5
# 通用设置
$lang['no_tax']                              = '不含税';
$lang['numbers_not_formatted_while_editing'] = '编辑时数字不自动格式化，请勿手动添加格式';

# 合同状态
$lang['contracts_view_expired']         = '已过期';
$lang['contracts_view_without_dateend'] = '无截止日期合同';

# 邮件模板
$lang['email_template_contracts_fields_heading'] = '合同';

# 账单设置
$lang['invoice_estimate_general_options'] = '通用设置';
$lang['invoice_table_item_description']   = '项目描述';
$lang['invoice_recurring_indicator']      = '周期性账单';

# 报价单管理
$lang['estimate_convert_to_invoice_successfully'] = '报价单成功转为账单';
$lang['estimate_table_item_description']          = '项目描述';

# 版本 1.0.6
# 货币设置
$lang['cant_delete_base_currency'] = '不可删除基准货币，请先指定新基准货币';
$lang['invoice_copy']              = '复制账单';
$lang['invoice_copy_success']      = '账单复制成功';
$lang['invoice_copy_fail']         = '账单复制失败';
$lang['invoice_due_after_help']    = '设为0则不自动计算';
$lang['show_shipping_on_invoice']  = '账单显示物流信息';

# 报价单设置
$lang['show_shipping_on_estimate']         = '报价单显示物流信息';
$lang['is_invoiced_estimate_delete_error'] = '该报价单已转为账单，不可删除';

# 客户与账单/报价单
$lang['ship_to']                            = '收货地址';
$lang['customer_profile_details']           = '客户详情';
$lang['billing_shipping']                   = '账单与物流';
$lang['billing_address']                    = '账单地址';
$lang['shipping_address']                   = '物流地址';
$lang['billing_street']                     = '街道';
$lang['billing_city']                       = '城市';
$lang['billing_state']                      = '省份';
$lang['billing_zip']                        = '邮编';
$lang['billing_country']                    = '国家';
$lang['shipping_street']                    = '街道';
$lang['shipping_city']                      = '城市';
$lang['shipping_state']                     = '省份';
$lang['shipping_zip']                       = '邮编';
$lang['shipping_country']                   = '国家';
$lang['get_shipping_from_customer_profile'] = '从客户档案获取物流信息';

# 客户管理
$lang['customer_default_currency']                             = '默认货币';
$lang['customer_update_address_info_on_invoices']              = '更新历史账单/报价单的收发货信息';
$lang['customer_update_address_info_on_invoices_help']         = '勾选后将更新所有历史账单和报价单的物流/账单地址（已支付账单不受影响）';
$lang['setup_google_api_key_customer_map']                     = '需配置Google API密钥以查看客户地图';
$lang['customer_attachments_file']                             = '附件';
$lang['client_send_set_password_email']                        = '发送密码设置邮件';
$lang['customer_billing_same_as_profile']                      = '同客户信息';
$lang['customer_billing_copy']                                 = '复制账单地址';
$lang['customer_map']                                          = '客户地图';
$lang['set_password_email_sent_to_client']                     = '密码设置邮件已发送至联系人';
$lang['set_password_email_sent_to_client_and_profile_updated'] = '资料已更新且密码设置邮件已发送';
$lang['customer_attachments']                                  = '客户附件';
$lang['customer_longitude']                                    = '经度（Google地图）';
$lang['customer_latitude']                                     = '纬度（Google地图）';

# 身份验证
$lang['admin_auth_set_password']         = '设置密码';
$lang['admin_auth_set_password_repeat']  = '确认密码';
$lang['admin_auth_set_password_heading'] = '密码设置';

# 通用设置
$lang['apply']                         = '应用';
$lang['department_calendar_id']        = 'Google日历ID';
$lang['localization_default_language'] = '默认语言';
$lang['system_default_string']         = '系统默认';
$lang['advanced_options']              = '高级设置';

# 财务管理
$lang['expense_list_invoice']  = '该费用已开票';
$lang['expense_list_billed']   = '已计费';
$lang['expense_list_unbilled'] = '未开票';

# 线索管理
$lang['lead_merge_custom_field']          = '合并为自定义字段';
$lang['lead_merge_custom_field_existing'] = '合并至现有字段';
$lang['lead_dont_merge_custom_field']     = '不合并';
$lang['lost_leads']                       = '流失线索';
$lang['junk_leads']                       = '垃圾线索';
$lang['lead_mark_as_lost']                = '标记为流失';
$lang['lead_unmark_as_lost']              = '取消流失标记';
$lang['lead_marked_as_lost']              = '线索已标记为流失';
$lang['lead_unmarked_as_lost']            = '已取消流失标记';
$lang['leads_status_color']               = '状态颜色';
$lang['lead_mark_as_junk']                = '标记为垃圾';
$lang['lead_unmark_as_junk']              = '取消垃圾标记';
$lang['lead_marked_as_junk']              = '线索已标记为垃圾';
$lang['lead_unmarked_as_junk']            = '已取消垃圾标记';
$lang['lead_not_found']                   = '未找到线索';
$lang['lead_lost']                        = '已流失';
$lang['lead_junk']                        = '垃圾线索';
$lang['leads_not_assigned']               = '未分配';

# 联系人管理
$lang['contract_not_visible_to_client'] = '对客户隐藏';
$lang['contract_edit_overview']         = '合同概览';
$lang['contract_attachments']           = '合同附件';

# 任务管理
$lang['task_view_make_public']     = '设为公开';
$lang['task_is_private']           = '私有任务';
$lang['task_finished']             = '已完成';
$lang['task_single_related']       = '关联项';
$lang['task_unmark_as_complete']   = '标记未完成';
$lang['task_unmarked_as_complete'] = '任务状态已更新';
$lang['task_relation']             = '关联对象';
$lang['task_public']               = '公开可见';
$lang['task_public_help']          = '公开任务全员可见，非公开任务仅限负责人/关注者/创建者/管理员可见';

# 系统设置
$lang['settings_general_favicon']                                            = '网站图标';
$lang['settings_output_client_pdfs_from_admin_area_in_client_language']      = '按客户语言生成PDF';
$lang['settings_output_client_pdfs_from_admin_area_in_client_language_help'] = '启用后，若客户语言为法语（系统默认英语），则从后台生成的PDF将自动采用客户语言';
$lang['settings_default_tax']                                                = '默认税率';
$lang['setup_calendar_by_departments']                                       = '按部门设置日历';
$lang['settings_calendar']                                                   = '日历设置';
$lang['settings_sales_invoice_due_after']                                    = '账单到期天数';
$lang['settings_google_api']                                                 = 'Google API密钥';
$lang['settings_gcal_main_calendar_id']                                      = '主日历ID';
$lang['settings_gcal_main_calendar_id_help']                                 = '此为公司主日历，将显示所有事件。如需按部门设置日历，请在部门设置中添加Google日历ID';
$lang['show_on_calendar']                                                    = '日历显示项';
$lang['show_invoices_on_calendar']                                           = '账单';
$lang['show_estimates_on_calendar']                                          = '报价单';
$lang['show_contracts_on_calendar']                                          = '合同';
$lang['show_tasks_on_calendar']                                              = '任务';
$lang['show_customer_reminders_on_calendar']                                 = '客户提醒';

# 线索管理
$lang['copy_custom_fields_convert_to_customer']                      = '转换时复制自定义字段';
$lang['copy_custom_fields_convert_to_customer_help']                 = '若客户档案无对应字段将自动创建，否则仅复制字段值';
$lang['lead_profile']                                                = '线索档案';
$lang['lead_is_client']                                              = '已转化客户';
$lang['leads_email_integration_folder_no_encryption']                = '不加密';
$lang['leads_email_integration']                                     = '邮件集成';
$lang['leads_email_active']                                          = '启用集成';
$lang['leads_email_integration_imap']                                = 'IMAP服务器';
$lang['leads_email_integration_email']                               = '邮箱账号';
$lang['leads_email_integration_password']                            = '邮箱密码';
$lang['leads_email_integration_default_source']                      = '默认来源';
$lang['leads_email_integration_check_every']                         = '检查间隔(分钟)';
$lang['leads_email_integration_default_assigned']                    = '默认负责人';
$lang['leads_email_encryption']                                      = '加密方式';
$lang['leads_email_integration_updated']                             = '邮件集成已更新';
$lang['leads_email_integration_default_status']                      = '默认状态';
$lang['leads_email_integration_folder']                              = '监控文件夹';
$lang['leads_email_integration_notify_when_lead_imported']           = '线索导入时通知';
$lang['leads_email_integration_only_check_unseen_emails']            = '仅检查未读邮件';
$lang['leads_email_integration_only_check_unseen_emails_help']       = '脚本将自动标记已检邮件（推荐开启）。若邮件量大且设置多路转发，关闭此选项可能导致重复处理';
$lang['leads_email_integration_notify_when_lead_contact_more_times'] = '重复联系时通知';
$lang['leads_email_integration_test_connection']                     = '测试IMAP连接';
$lang['lead_email_connection_ok']                                    = 'IMAP连接正常';
$lang['lead_email_connection_not_ok']                                = 'IMAP连接异常';
$lang['lead_email_activity']                                         = '邮件动态';
$lang['leads_email_integration_notify_roles']                        = '通知角色';
$lang['leads_email_integration_notify_staff']                        = '通知人员';
$lang['lead_public']                                                 = '公开线索';

# 知识库
$lang['kb_group_color'] = '分类颜色';
$lang['kb_group_order'] = '排序';

# 工具 - 批量PDF导出
$lang['bulk_pdf_exporter']             = '批量PDF导出';
$lang['bulk_export_pdf_payments']      = '收款记录';
$lang['bulk_export_pdf_estimates']     = '报价单';
$lang['bulk_export_pdf_invoices']      = '账单';
$lang['bulk_pdf_export_button']        = '开始导出';
$lang['bulk_pdf_export_select_type']   = '选择类型';
$lang['no_data_found_bulk_pdf_export'] = '无导出数据';
$lang['bulk_export_status_all']        = '全部状态';
$lang['bulk_export_status']            = '状态筛选';
$lang['bulk_export_zip_payment_modes'] = '付款方式';
$lang['bulk_export_include_tag']       = '标签标记';
$lang['bulk_export_include_tag_help']  = '例：原件/复印件。该标记将显示在PDF中，建议仅使用1种标记';

# 版本 1.0.7
## 客户门户
$lang['clients_nav_proposals'] = '方案';
$lang['clients_nav_support']   = '工单';

# 通用
$lang['more']            = '更多';
$lang['add_item']        = '添加项目';
$lang['goto_admin_area'] = '进入后台';
$lang['delete']          = '删除 %s';
$lang['welcome_top']     = '欢迎您，%s';

# 客户权限
$lang['customer_permissions']         = '权限管理';
$lang['customer_permission_invoice']  = '账单权限';
$lang['customer_permission_estimate'] = '报价单权限';
$lang['customer_permission_proposal'] = '方案权限';
$lang['customer_permission_contract'] = '合同权限';
$lang['customer_permission_support']  = '支持中心权限';

# 任务管理
$lang['task_related_to'] = '关联对象';

# 文件发送
$lang['custom_file_fail_send']    = '文件发送失败';
$lang['custom_file_success_send'] = '文件已成功发送至 %s';
$lang['send_file_subject']        = '邮件主题';
$lang['send_file_email']          = '收件邮箱';
$lang['send_file_message']        = '消息内容';
$lang['send_file']                = '发送文件';
$lang['add_checklist_item']       = '添加检查项';
$lang['task_checklist_items']     = '任务检查项';

# 数据导入
$lang['default_pass_clients_import'] = '默认联系人密码';
$lang['simulate_import']             = '模拟导入';
$lang['import_upload_failed']        = '文件上传失败';
$lang['import_total_imported']       = '成功导入：%s 条';
$lang['import_leads']                = '导入线索';
$lang['import_customers']            = '导入客户';
$lang['choose_csv_file']             = '选择CSV文件';
$lang['import']                      = '开始导入';
$lang['lead_import_status']          = '状态';
$lang['lead_import_source']          = '来源';

# 批量导出增强
$lang['bulk_export_pdf_proposals'] = '方案';

# 账单管理
$lang['delete_invoice'] = '删除账单';
$lang['items']          = '项目';
$lang['support']        = '工单';
$lang['new_ticket']     = '新建工单';

# 提醒功能
$lang['calendar_lead_reminder']  = '线索提醒';
$lang['lead_set_reminder_title'] = '设置线索提醒';
$lang['set_reminder_tooltip']    = '此功能助您永不遗漏客户事项';
$lang['client_reminders_tab']    = '提醒事项';
$lang['leads_reminders_tab']     = '提醒事项';

# 工单管理
$lang['delete_ticket_reply']  = '删除回复';
$lang['ticket_priority_edit'] = '编辑优先级';
$lang['ticket_priority_add']  = '新增优先级';
$lang['ticket_status_edit']   = '编辑工单状态';
$lang['ticket_service_edit']  = '编辑服务类型';
$lang['edit_department']      = '编辑部门';

# 财务管理
$lang['edit_expense_category'] = '编辑费用分类';

# 系统设置
$lang['customer_default_country']                                 = '默认国家';
$lang['settings_sales_require_client_logged_in_to_view_estimate'] = '客户需登录查看报价';
$lang['set_reminder']                                             = '设置提醒';
$lang['set_reminder_date']                                        = '提醒日期';
$lang['reminder_description']                                     = '提醒内容';
$lang['reminder_notify_me_by_email']                              = '同时发送邮件提醒';
$lang['reminder_added_successfully']                              = '提醒设置成功，到期将通知您';
$lang['reminder_description']                                     = '提醒事项';
$lang['reminder_date']                                            = '提醒时间';
$lang['reminder_staff']                                           = '提醒对象';
$lang['reminder_is_notified']                                     = '已通知？';
$lang['reminder_is_notified_boolean_no']                          = '未通知';
$lang['reminder_is_notified_boolean_yes']                         = '已通知';
$lang['reminder_set_to']                                          = '设置提醒给';
$lang['reminder_deleted']                                         = '提醒已删除';
$lang['reminder_failed_to_delete']                                = '删除提醒失败';
$lang['show_invoice_estimate_status_on_pdf']                      = 'PDF显示账单/报价状态';
$lang['email_piping_default_priority']                            = '邮件导入工单默认优先级';
$lang['show_lead_reminders_on_calendar']                          = '线索提醒';
$lang['tickets_piping']                                           = '邮件自动导入';
$lang['email_piping_only_replies']                                = '仅允许邮件回复';
$lang['email_piping_only_registered']                             = '仅导入注册用户邮件';

# 报价单管理
$lang['view_estimate_as_client']         = '客户视角预览';
$lang['estimate_mark_as']                = '标记为 %s';
$lang['estimate_status_changed_success'] = '报价单状态更新成功';
$lang['estimate_status_changed_fail']    = '报价单状态更新失败';

# 方案管理
$lang['proposal_to']                            = '公司/姓名';
$lang['proposal_date']                          = '日期';
$lang['proposal_address']                       = '地址';
$lang['proposal_phone']                         = '电话';
$lang['proposal_email']                         = '邮箱';
$lang['proposal_date_created']                  = '创建日期';
$lang['proposal_open_till']                     = '有效期至';
$lang['proposal_status_open']                   = '待处理';
$lang['proposal_status_accepted']               = '已接受';
$lang['proposal_status_declined']               = '已拒绝';
$lang['proposal_status_sent']                   = '已发送';
$lang['proposal_expired']                       = '已过期';
$lang['proposal_subject']                       = '主题';
$lang['proposal_total']                         = '总计';
$lang['proposal_status']                        = '状态';
$lang['proposals_list_all']                     = '全部方案';
$lang['proposals_leads_related']                = '关联线索';
$lang['proposals_customers_related']            = '关联客户';
$lang['proposal_related']                       = '关联对象';
$lang['proposal_for_lead']                      = '关联线索';
$lang['proposal_for_customer']                  = '关联客户';
$lang['proposal']                               = '方案';
$lang['proposal_lowercase']                     = '方案';
$lang['proposals']                              = '方案';
$lang['proposals_lowercase']                    = '方案';
$lang['new_proposal']                           = '新建方案';
$lang['proposal_currency']                      = '货币';
$lang['proposal_allow_comments']                = '开放评论';
$lang['proposal_allow_comments_help']           = '启用后，客户查看方案时可添加评论';
$lang['proposal_edit']                          = '编辑';
$lang['proposal_pdf']                           = '生成PDF';
$lang['proposal_send_to_email']                 = '邮件发送';
$lang['proposal_send_to_email_title']           = '发送方案至邮箱';
$lang['proposal_attach_pdf']                    = '附加PDF';
$lang['proposal_preview_template']              = '预览模板';
$lang['proposal_view']                          = '查看方案';
$lang['proposal_copy']                          = '复制';
$lang['proposal_delete']                        = '删除';
$lang['proposal_to']                            = '接收方';
$lang['proposal_add_comment']                   = '添加评论';
$lang['proposal_sent_to_email_success']         = '方案发送成功';
$lang['proposal_sent_to_email_fail']            = '方案发送失败';
$lang['proposal_copy_fail']                     = '方案复制失败';
$lang['proposal_copy_success']                  = '方案复制成功';
$lang['proposal_status_changed_success']        = '方案状态更新成功';
$lang['proposal_status_changed_fail']           = '方案状态更新失败';
$lang['proposal_assigned']                      = '负责人';
$lang['proposal_comments']                      = '评论记录';
$lang['proposal_convert']                       = '转换';
$lang['proposal_convert_estimate']              = '报价单';
$lang['proposal_convert_invoice']               = '账单';
$lang['proposal_convert_to_estimate']           = '转为报价单';
$lang['proposal_convert_to_invoice']            = '转为账单';
$lang['proposal_convert_to_lead_disabled_help'] = '需先将线索转为客户才能创建%s';
$lang['proposal_convert_not_related_help']      = '方案需关联客户才能转为%s';
$lang['proposal_converted_to_estimate_success'] = '方案已成功转为报价单';
$lang['proposal_converted_to_invoice_success']  = '方案已成功转为账单';
$lang['proposal_converted_to_estimate_fail']    = '转为报价单失败';
$lang['proposal_converted_to_invoice_fail']     = '转为账单失败';

# 方案模板
$lang['proposal_total_info']   = '总计 %s';
$lang['proposal_accept_info']  = '接受方案';
$lang['proposal_decline_info'] = '拒绝方案';
$lang['proposal_pdf_info']     = 'PDF文档';

# 客户门户
$lang['customer_reset_action']            = '重置';
$lang['customer_reset_password_heading']  = '密码重置';
$lang['customer_forgot_password_heading'] = '忘记密码';
$lang['customer_forgot_password']         = '忘记密码？';
$lang['customer_reset_password']          = '新设密码';
$lang['customer_reset_password_repeat']   = '确认密码';
$lang['customer_forgot_password_email']   = '邮箱地址';
$lang['customer_forgot_password_submit']  = '提交申请';
$lang['customer_ticket_subject']          = '工单主题';

# 邮件模板
$lang['email_template_proposals_fields_heading'] = '方案';

# 任务管理
$lang['add_task_attachments']  = '添加附件';
$lang['task_view_attachments'] = '附件列表';
$lang['task_view_description'] = '任务描述';

# 客户分类
$lang['customer_group_add_heading']      = '新建客户分类';
$lang['customer_group_edit_heading']     = '编辑客户分类';
$lang['new_customer_group']              = '新建分组';
$lang['customer_group_name']             = '分组名称';
$lang['customer_groups']                 = '客户分类';
$lang['customer_group']                  = '客户分类';
$lang['customer_group_lowercase']        = '客户分类';
$lang['customer_have_invoices_by']       = '包含状态为 %s 的账单';
$lang['customer_have_estimates_by']      = '包含状态为 %s 的报价单';
$lang['customer_have_contracts_by_type'] = '包含类型为 %s 的合同';

# 自定义字段
$lang['custom_field_show_on_table']              = '表格中显示';
$lang['custom_field_show_on_client_portal']      = '客户门户显示';
$lang['custom_field_show_on_client_portal_help'] = '启用后同时会在表格中显示';
$lang['custom_field_visibility']                 = '可见性设置';

# 知识库
$lang['view_articles_list']     = '文章列表';
$lang['view_articles_list_all'] = '全部文章';
$lang['als_all_articles']       = '知识库文章';
$lang['als_kb_groups']          = '分类管理';

# 工单垃圾邮件过滤
$lang['spam_filters']                 = '垃圾邮件过滤';
$lang['spam_filter']                  = '过滤器';
$lang['new_spam_filter']              = '新建过滤器';
$lang['spam_filter_blocked_senders']  = '发件人黑名单';
$lang['spam_filter_blocked_subjects'] = '主题关键词';
$lang['spam_filter_blocked_phrases']  = '内容关键词';
$lang['spam_filter_content']          = '过滤内容';
$lang['spamfilter_edit_heading']      = '编辑过滤器';
$lang['spamfilter_add_heading']       = '添加过滤器';
$lang['spamfilter_type']              = '过滤类型';
$lang['spamfilter_type_subject']      = '主题过滤';
$lang['spamfilter_type_sender']       = '发件人过滤';
$lang['spamfilter_type_phrase']       = '关键词过滤';

# 工单管理
$lang['block_sender']                = '屏蔽发件人';
$lang['sender_blocked']              = '已屏蔽';
$lang['sender_blocked_successfully'] = '发件人屏蔽成功';
$lang['ticket_date_created']         = '创建日期';

# 知识库
$lang['edit_kb_group'] = '编辑分类';

# 线索管理
$lang['edit_source'] = '编辑来源';
$lang['edit_status'] = '编辑状态';

# 合同
$lang['contract_type_edit'] = '编辑合同类型';

# 报表统计
$lang['report_by_customer_groups'] = '客户分类总价值报表';
# 系统工具
$lang['ticket_pipe_log']      = '工单管道日志';
$lang['ticket_pipe_name']     = '发件人名称';
$lang['ticket_pipe_email_to'] = '收件地址';
$lang['ticket_pipe_email']    = '发件邮箱';
$lang['ticket_pipe_subject']  = '邮件主题';
$lang['ticket_pipe_message']  = '消息内容';
$lang['ticket_pipe_date']     = '处理日期';
$lang['ticket_pipe_status']   = '处理状态';

# 首页仪表盘
$lang['home_latest_activity']   = '最近动态';
$lang['home_my_tasks']          = '我的任务';
$lang['home_my_todo_items']     = '待办事项';
$lang['home_widget_view_all']   = '查看全部';
$lang['home_stats_full_report'] = '完整报表';

# 表单验证
$lang['form_validation_required']    = '{field} 字段为必填项';
$lang['form_validation_valid_email'] = '{field} 字段需包含有效邮箱地址';
$lang['form_validation_matches']     = '{field} 字段与 {param} 字段不匹配';
$lang['form_validation_is_unique']   = '{field} 字段值必须唯一';
# 版本 1.0.8
# 通知与线索/报价单/账单动态记录
$lang['not_event']                                                = '日程提醒 - 今日活动：%s ...';
$lang['not_event_public']                                         = '公共活动开始 - %s ...';
$lang['not_contract_expiry_reminder']                             = '合同到期提醒 - %s ...';
$lang['not_recurring_expense_cron_activity_heading']              = '定期费用定时任务动态';
$lang['not_recurring_invoices_cron_activity_heading']             = '定期账单定时任务动态';
$lang['not_recurring_total_renewed']                              = '总计续期：%s';
$lang['not_recurring_expenses_action_taken_from']                 = '操作源自定期费用';
$lang['not_invoice_created']                                      = '账单已创建：';
$lang['not_invoice_renewed']                                      = '续期账单：';
$lang['not_expense_renewed']                                      = '续期费用：';
$lang['not_invoice_sent_to_customer']                             = '账单已发送至客户：%s';
$lang['not_invoice_sent_yes']                                     = '已发送';
$lang['not_invoice_sent_not']                                     = '未发送';
$lang['not_action_taken_from_recurring_invoice']                  = '操作源自定期账单：';
$lang['not_new_reminder_for']                                     = '新提醒：%s';
$lang['not_received_one_or_more_messages_lead']                   = '收到来自线索的新消息';
$lang['not_received_lead_imported_email_integration']             = '通过邮件集成导入线索';
$lang['not_lead_imported_attachment']                             = '从邮件导入附件';
$lang['not_estimate_status_change']                               = '从邮件导入附件';
$lang['not_estimate_status_updated']                              = '报价单状态更新：从 %s 变更为 %s';
$lang['not_assigned_lead_to_you']                                 = '已将线索 %s 分配给您';
$lang['not_lead_activity_assigned_to']                            = '%s 分配给 %s';
$lang['not_lead_activity_attachment_deleted']                     = '附件已删除';
$lang['not_lead_activity_status_updated']                         = '%s 将线索状态从 %s 更新为 %s';
$lang['not_lead_activity_contacted']                              = '%s 于 %s 联系此线索';
$lang['not_lead_activity_created']                                = '%s 创建了线索';
$lang['not_lead_activity_marked_lost']                            = '标记为流失';
$lang['not_lead_activity_unmarked_lost']                          = '取消流失标记';
$lang['not_lead_activity_marked_junk']                            = '标记为垃圾';
$lang['not_lead_activity_unmarked_junk']                          = '取消垃圾标记';
$lang['not_lead_activity_added_attachment']                       = '添加了附件';
$lang['not_lead_activity_converted_email']                        = '线索邮箱变更。原邮箱：%s，现作为客户添加：%s';
$lang['not_lead_activity_converted']                              = '%s 将此线索转为客户';
$lang['not_liked_your_post']                                      = '%s 点赞了您的动态：%s ...';
$lang['not_commented_your_post']                                  = '%s 评论了您的动态：%s ...';
$lang['not_liked_your_comment']                                   = '%s 点赞了您的评论：%s ...';
$lang['not_proposal_assigned_to_you']                             = '方案分配给您 - %s ...';
$lang['not_proposal_comment_from_client']                         = '客户在方案 %s 发表新评论...';
$lang['not_proposal_proposal_accepted']                           = '方案已接受 - %s';
$lang['not_proposal_proposal_declined']                           = '方案已拒绝 - %s';
$lang['not_task_added_you_as_follower']                           = '将您添加为任务关注者：%s ...';
$lang['not_task_added_someone_as_follower']                       = '将 %s 添加为任务关注者：%s ...';
$lang['not_task_added_himself_as_follower']                       = '自行关注任务：%s ...';
$lang['not_task_assigned_to_you']                                 = '任务已分配给您：%s ...';
$lang['not_task_assigned_someone']                                = '任务分配：%s 负责 %s ...';
$lang['not_task_will_do_user']                                    = '将执行任务：%s ...';
$lang['not_task_new_attachment']                                  = '新增任务附件';
$lang['not_task_marked_as_complete']                              = '标记任务完成：%s';
$lang['not_task_unmarked_as_complete']                            = '取消任务完成标记：%s';
$lang['not_ticket_assigned_to_you']                               = '工单分配给您 - %s ...';
$lang['not_ticket_reassigned_to_you']                             = '工单重新分配给您 - %s ...';
$lang['not_estimate_customer_accepted']                           = '恭喜！客户已接受报价单 %s';
$lang['not_estimate_customer_declined']                           = '客户已拒绝报价单 %s';
$lang['estimate_activity_converted']                              = '将此报价单转为账单<br />%s';
$lang['estimate_activity_created']                                = '创建报价单';
$lang['invoice_estimate_activity_removed_item']                   = '删除服务项 <b>%s</b>';
$lang['estimate_activity_number_changed']                         = '报价单编号从 %s 变更为 %s';
$lang['invoice_activity_number_changed']                          = '账单编号从 %s 变更为 %s';
$lang['invoice_estimate_activity_updated_item_short_description'] = '服务项摘要从 %s 更新为 %s';
$lang['invoice_estimate_activity_updated_item_long_description']  = '服务项描述从 <b>%s</b> 更新为 <b>%s</b>';
$lang['invoice_estimate_activity_updated_item_rate']              = '服务项单价从 %s 更新为 %s';
$lang['invoice_estimate_activity_updated_qty_item']               = '更新 <b>%s</b> 数量：从 %s 变更为 %s';
$lang['invoice_estimate_activity_added_item']                     = '新增服务项 <b>%s</b>';
$lang['invoice_estimate_activity_sent_to_client']                 = '向客户发送报价单';
$lang['estimate_activity_client_accepted_and_converted']          = '客户接受报价单，已转为账单（编号 %s）';
$lang['estimate_activity_client_accepted']                        = '客户接受此报价单';
$lang['estimate_activity_client_declined']                        = '客户拒绝此报价单';
$lang['estimate_activity_marked']                                 = '标记报价单为 %s';
$lang['invoice_activity_status_updated']                          = '账单状态从 %s 更新为 %s';
$lang['invoice_activity_created']                                 = '创建账单';
$lang['invoice_activity_from_expense']                            = '从费用记录生成账单';
$lang['invoice_activity_recurring_created']                       = '[定期账单] 系统自动生成';
$lang['invoice_activity_recurring_from_expense_created']          = '[费用转账单] 系统自动生成';
$lang['invoice_activity_sent_to_client_cron']                     = '系统自动发送账单至客户';
$lang['invoice_activity_sent_to_client']                          = '向客户发送账单';
$lang['invoice_activity_marked_as_sent']                          = '标记账单为已发送';
$lang['invoice_activity_payment_deleted']                         = '删除账单付款记录（#%s，金额 %s）';
$lang['invoice_activity_payment_made_by_client']                  = '客户完成支付 <b>%s</b> - %s';
$lang['invoice_activity_payment_made_by_staff']                   = '记录客户付款 <b>%s</b> - %s';
$lang['invoice_activity_added_attachment']                        = '添加附件';

# 导航栏
$lang['top_search_placeholder'] = '搜索...';

# 员工管理
$lang['staff_profile_inactive_account'] = '该员工账号已停用';

# 报价单
$lang['copy_estimate']                = '复制报价单';
$lang['estimate_copied_successfully'] = '报价单复制成功';
$lang['estimate_copied_fail']         = '报价单复制失败';

# 任务管理
$lang['tasks_view_assigned_to_user'] = '分配给我的任务';
$lang['tasks_view_follower_by_user'] = '我关注的任务';
$lang['no_tasks_found']              = '未找到任务';

# 线索
$lang['leads_dt_datecreated']       = '创建时间';
$lang['leads_sort_by']              = '排序方式';
$lang['leads_sort_by_datecreated']  = '按创建时间';
$lang['leads_sort_by_kanban_order'] = '看板顺序';

# 认证授权
$lang['check_email_for_resetting_password'] = '请查看您的邮箱获取密码重置指引';
$lang['inactive_account']                   = '账号未激活';
$lang['error_setting_new_password_key']     = '设置新密码出错';
$lang['password_reset_message']             = '密码已重置，请立即登录！';
$lang['password_reset_message_fail']        = '密码重置失败，请重试';
$lang['password_reset_key_expired']         = '密码重置链接已过期或无效';
$lang['auth_reset_pass_email_not_found']    = '邮箱不存在';
$lang['auth_reset_password_submit']         = '重置密码';

# 系统设置
$lang['settings_amount_to_words']          = '金额转文字';
$lang['settings_amount_to_words_desc']     = '在发票/报价单中将总金额转为文字';
$lang['settings_amount_to_words_enabled']  = '启用';
$lang['settings_total_to_words_lowercase'] = '金额文字小写显示';
$lang['settings_show_tax_per_item']        = '显示单项税费';

# 报表统计
$lang['report_sales_months_three_months'] = '最近3个月';
$lang['report_invoice_number']            = '发票编号';
$lang['report_invoice_customer']          = '客户';
$lang['report_invoice_date']              = '日期';
$lang['report_invoice_duedate']           = '到期日';
$lang['report_invoice_amount']            = '金额';
$lang['report_invoice_amount_with_tax']   = '含税金额';
$lang['report_invoice_amount_open']       = '未付金额';
$lang['report_invoice_status']            = '状态';

# 版本1.0.9

# 首页统计
$lang['home_stats_by_project_status'] = '项目状态统计';
$lang['home_invoice_overview']        = '发票概览';
$lang['home_estimate_overview']       = '报价单概览';
$lang['home_proposal_overview']       = '提案概览';
$lang['home_lead_overview']           = '线索概览';
$lang['home_my_projects']             = '我的项目';
$lang['home_announcements']           = '公告通知';

# 系统设置
$lang['settings_leads_kanban_limit']                                    = '看板每状态显示行数限制';
$lang['settings_group_misc']                                            = '杂项设置';
$lang['show_projects_on_calendar']                                      = '显示项目';
$lang['settings_media_max_file_size_upload']                            = '媒体文件最大上传大小(MB)';
$lang['settings_client_staff_add_edit_delete_task_comments_first_hour'] = '允许客户/员工仅在任务创建后1小时内编辑评论(管理员不受限)';

# 邮件模板
$lang['email_template_only_domain_email'] = '仅限域名邮箱';

# 公告通知
$lang['dismiss_announcement']   = '忽略公告';
$lang['announcement_from']      = '发布人：';
$lang['announcement_date']      = '发布日期：%s';
$lang['announcement_not_found'] = '公告不存在';
$lang['announcements_recent']   = '近期公告';

# 通用
$lang['zip_invoices']         = '打包发票';
$lang['zip_estimates']        = '打包报价单';
$lang['zip_payments']         = '打包收款记录';
$lang['setup_help']           = '帮助中心';
$lang['clients_list_company'] = '公司名称';
$lang['dt_button_export']     = '导出';
$lang['dt_entries']           = '记录';
$lang['invoice_total_paid']   = '已付总额';
$lang['invoice_amount_due']   = '应付金额';

# 日历
$lang['calendar_project'] = '项目';

# 线索
$lang['leads_import_assignee']     = '负责人';
$lang['customer_from_lead']        = '来自%s的客户';
$lang['lead_kan_ban_attachments']  = '附件：%s';
$lang['leads_sort_by_lastcontact'] = '最后联系时间';

# 任务管理
$lang['task_comment_added']     = '评论添加成功';
$lang['task_duedate']           = '截止日期';
$lang['task_view_comments']     = '评论';
$lang['task_comment_updated']   = '评论已更新';
$lang['task_visible_to_client'] = '对客户可见';
$lang['task_hourly_rate']       = '小时费率';
$lang['hours']                  = '小时';
$lang['seconds']                = '秒';
$lang['minutes']                = '分钟';
$lang['task_start_timer']       = '开始计时';
$lang['task_stop_timer']        = '停止计时';
$lang['task_billable']          = '可计费';
$lang['task_billable_yes']      = '可计费';
$lang['task_billable_no']       = '不计费';
$lang['task_billed']            = '已计费';
$lang['task_billed_yes']        = '已计费';
$lang['task_billed_no']         = '未计费';
$lang['task_user_logged_time']  = '您的记录时间：';
$lang['task_total_logged_time'] = '总记录时间：';
$lang['task_is_billed']         = '该任务已计入发票%s';
$lang['task_statistics']        = '统计信息';
$lang['task_milestone']         = '里程碑';

# 工单
$lang['ticket_message_updated_successfully'] = '消息更新成功';

# 账单
$lang['invoice_task_item_project_tasks_not_included'] = '项目任务未包含在此列表中';
$lang['show_quantity_as']                             = '数量显示方式：';
$lang['quantity_as_qty']                              = '数量';
$lang['quantity_as_hours']                            = '小时';
$lang['invoice_table_hours_heading']                  = '小时数';
$lang['bill_tasks']                                   = '计费任务';
$lang['invoice_estimate_sent_to_email']               = '发送至邮箱';

# 报价单
$lang['estimate_table_hours_heading'] = '小时数';

# 通用
$lang['is_customer_indicator']         = '客户';
$lang['print']                         = '打印';
$lang['customer_permission_projects']  = '项目';
$lang['no_timers_found']               = '未找到启动的计时器';
$lang['timers_started_confirm_logout'] = '检测到任务计时器正在运行！<br />确定要停止计时器前退出吗？';
$lang['confirm_logout']                = '退出登录';
$lang['timer_top_started']             = '启动于 %s';
# 项目
$lang['cant_change_billing_type_billed_tasks_found']         = '无法更改计费类型，该项目已存在已计费任务。';
$lang['project_customer_permission_warning']                 = '系统提示主要联系人无项目权限。主要联系人将无法查看项目，请考虑在联系人资料中添加权限。';
$lang['project_invoice_timesheet_start_time']                = '开始时间：%s';
$lang['project_invoice_timesheet_end_time']                  = '结束时间：%s';
$lang['project_invoice_timesheet_total_logged_time']         = '计费时间：%s';
$lang['project_view_as_client']                              = '以客户视角查看项目';
$lang['project_mark_all_tasks_as_completed']                 = '标记所有任务为已完成（同时停止所有计时器，不通知项目成员）';
$lang['project_not_started_status_tasks_timers_found']       = '检测到任务计时器，但项目状态为"未开始"。建议将项目状态改为"进行中"';
$lang['project_status']                                      = '状态';
$lang['project_status_1']                                    = '未开始';
$lang['project_status_2']                                    = '进行中';
$lang['project_status_3']                                    = '已暂停';
$lang['project_status_4']                                    = '已完成';
$lang['project_file_dateadded']                              = '上传日期';
$lang['project_file_filename']                               = '文件名';
$lang['project_file__filetype']                              = '文件类型';
$lang['project_file_visible_to_customer']                    = '对客户可见';
$lang['project_file_uploaded_by']                            = '上传者';
$lang['edit_project']                                        = '编辑项目';
$lang['copy_project']                                        = '复制项目';
$lang['delete_project']                                      = '删除项目';
$lang['project_task_assigned_to_user']                       = '您有新的任务分配';
$lang['seconds']                                             = '秒';
$lang['hours']                                               = '小时';
$lang['minutes']                                             = '分钟';
$lang['project']                                             = '项目';
$lang['project_lowercase']                                   = '项目';
$lang['projects']                                            = '项目';
$lang['projects_lowercase']                                  = '项目';
$lang['project_settings']                                    = '项目设置';
$lang['project_invoiced_successfully']                       = '项目账单生成成功';
$lang['new_project']                                         = '新建项目';
$lang['project_files']                                       = '文件';
$lang['project_activity']                                    = '项目记录';
$lang['project_name']                                        = '项目名称';
$lang['project_description']                                 = '项目描述';
$lang['project_customer']                                    = '客户';
$lang['project_start_date']                                  = '开始日期';
$lang['project_datecreated']                                 = '创建日期';
$lang['project_deadline']                                    = '截止日期';
$lang['project_billing_type']                                = '计费类型';
$lang['project_billing_type_fixed_cost']                     = '固定费用';
$lang['project_billing_type_project_hours']                  = '项目工时';
$lang['project_billing_type_project_task_hours']             = '任务工时';
$lang['project_billing_type_project_task_hours_hourly_rate'] = '基于任务小时费率';
$lang['project_rate_per_hour']                               = '每小时费率';
$lang['project_total_cost']                                  = '总费用';
$lang['project_members']                                     = '成员';
$lang['project_member_removed']                              = '项目成员移除成功';
$lang['project_overview']                                    = '概览';
$lang['project_gant']                                        = '甘特图';
$lang['project_milestones']                                  = '里程碑';
$lang['project_milestone_order']                             = '排序';
$lang['project_milestone_duedate_passed']                    = '已超截止日期';
$lang['record_timesheet']                                    = '工时记录';
$lang['new_milestone']                                       = '新建里程碑';
$lang['edit_milestone']                                      = '编辑里程碑';
$lang['milestone_name']                                      = '里程碑名称';
$lang['milestone_due_date']                                  = '截止日期';
$lang['project_milestone']                                   = '里程碑';
$lang['project_notes']                                       = '备注';
$lang['project_timesheets']                                  = '工时表';
$lang['project_timesheet']                                   = '工时表';
$lang['milestone_total_logged_time']                         = '记录时间';
$lang['project_overview_total_logged_hours']                 = '总记录小时数';
$lang['milestones_uncategorized']                            = '未分类';
$lang['milestone_no_tasks_found']                            = '未找到任务';
$lang['project_copied_successfully']                         = '项目数据复制成功';
$lang['failed_to_copy_project']                              = '复制项目失败';
$lang['copy_project_task_include_check_list_items']          = '复制检查清单项';
$lang['copy_project_task_include_assignees']                 = '复制相同分配人员';
$lang['copy_project_task_include_followers']                 = '复制相同关注者';
$lang['project_days_left']                                   = '剩余天数';
$lang['project_open_tasks']                                  = '未完成的任务';
$lang['timesheet_stop_timer']                                = '停止计时器';
$lang['failed_to_add_project_timesheet_end_time_smaller']    = '添加时间表失败：结束时间早于开始时间';
$lang['project_timesheet_user']                              = '成员';
$lang['project_timesheet_start_time']                        = '开始时间';
$lang['project_timesheet_end_time']                          = '结束时间';
$lang['project_timesheet_time_spend']                        = '耗时';
$lang['project_timesheet_task']                              = '任务';
$lang['project_invoices']                                    = '账单';
$lang['total_logged_hours_by_staff']                         = '员工总记录时间';
$lang['invoice_project']                                     = '项目账单';
$lang['invoice_project_info']                                = '项目账单信息';
$lang['invoice_project_data_single_line']                    = '单行';
$lang['invoice_project_data_task_per_item']                  = '逐项任务';
$lang['invoice_project_data_timesheets_individually']        = '单独列出所有时间表';
$lang['invoice_project_item_name_data']                      = '服务项名称';
$lang['invoice_project_description_data']                    = '描述';
$lang['invoice_project_projectname_taskname']                = '项目名称 + 任务名称';
$lang['invoice_project_all_tasks_total_logged_time']         = '所有任务 + 每项任务总耗时';
$lang['invoice_project_project_name_data']                   = '项目名称';
$lang['invoice_project_timesheet_individually_data']         = '时间表（开始时间 + 结束时间 + 总耗时）';
$lang['invoice_project_total_logged_time_data']              = '总记录时间';
$lang['project_allow_client_to']                             = '允许客户%s';
$lang['project_setting_view_task_attachments']               = '查看任务附件';
$lang['project_setting_view_task_checklist_items']           = '查看任务检查清单项';
$lang['project_setting_upload_files']                        = '上传文件';
$lang['project_setting_view_task_comments']                  = '查看任务评论';
$lang['project_setting_upload_on_tasks']                     = '在任务中上传附件';
$lang['project_setting_view_task_total_logged_time']         = '查看任务总耗时';
$lang['project_setting_open_discussions']                    = '发起讨论';
$lang['project_setting_comment_on_tasks']                    = '评论项目任务';
$lang['project_setting_view_tasks']                          = '查看任务';
$lang['project_setting_view_milestones']                     = '查看里程碑';
$lang['project_setting_view_gantt']                          = '查看甘特图';
$lang['project_setting_view_timesheets']                     = '查看时间表';
$lang['project_setting_view_activity_log']                   = '查看活动日志';
$lang['project_setting_view_team_members']                   = '查看团队成员';
$lang['project_discussion_visible_to_customer_yes']          = '可见';
$lang['project_discussion_visible_to_customer_no']           = '不可见';
$lang['project_discussion_posted_on']                        = '发布于 %s';
$lang['project_discussion_posted_by']                        = '发布者：%s';
$lang['project_discussion_failed_to_delete']                 = '删除讨论失败';
$lang['project_discussion_deleted']                          = '讨论已成功删除';
$lang['project_discussion_no_activity']                      = '无活动';
$lang['project_discussion']                                  = '讨论';
$lang['project_discussions']                                 = '讨论区';
$lang['edit_discussion']                                     = '编辑讨论';
$lang['new_project_discussion']                              = '创建讨论';
$lang['project_discussion_subject']                          = '主题';
$lang['project_discussion_description']                      = '描述';
$lang['project_discussion_show_to_customer']                 = '对客户可见';
$lang['project_discussion_total_comments']                   = '评论总数';
$lang['project_discussion_last_activity']                    = '最后活动';
$lang['discussion_add_comment']                              = '添加评论';
$lang['discussion_newest']                                   = '最新';
$lang['discussion_oldest']                                   = '最早';
$lang['discussion_attachments']                              = '附件';
$lang['discussion_send']                                     = '发送';
$lang['discussion_reply']                                    = '回复';
$lang['discussion_edit']                                     = '编辑';
$lang['discussion_edited']                                   = '已修改';
$lang['discussion_you']                                      = '您';
$lang['discussion_save']                                     = '保存';
$lang['discussion_delete']                                   = '删除';
$lang['discussion_view_all_replies']                         = '显示全部回复';
$lang['discussion_hide_replies']                             = '隐藏回复';
$lang['discussion_no_comments']                              = '暂无评论';
$lang['discussion_no_attachments']                           = '暂无附件';
$lang['discussion_attachments_drop']                         = '拖放文件到此处上传';
$lang['project_note']                                        = '笔记';
$lang['project_note_private']                                = '个人笔记';
$lang['project_save_note']                                   = '保存笔记';

# 项目活动
$lang['project_activity_created']                      = '创建了项目';
$lang['project_activity_updated']                      = '更新了项目';
$lang['project_activity_removed_team_member']          = '移除了团队成员';
$lang['project_activity_added_team_member']            = '新增了团队成员';
$lang['project_activity_marked_all_tasks_as_complete'] = '将所有任务标记为完成';
$lang['project_activity_recorded_timesheet']           = '记录了时间表';
$lang['project_activity_task_name']                    = '任务：';
$lang['project_activity_deleted_discussion']           = '删除了讨论';
$lang['project_activity_created_discussion']           = '创建了讨论';
$lang['project_activity_updated_discussion']           = '更新了讨论';
$lang['project_activity_commented_on_discussion']      = '评论了讨论';
$lang['project_activity_deleted_discussion_comment']   = '删除了讨论评论';
$lang['project_activity_deleted_milestone']            = '删除了里程碑';
$lang['project_activity_updated_milestone']            = '更新了里程碑';
$lang['project_activity_created_milestone']            = '创建了里程碑';
$lang['project_activity_invoiced_project']             = '为项目生成了账单';
$lang['project_activity_task_marked_complete']         = '任务标记为完成';
$lang['project_activity_task_unmarked_complete']       = '任务取消完成状态';
$lang['project_activity_task_deleted']                 = '删除了任务';
$lang['project_activity_new_task_comment']             = '评论了任务';
$lang['project_activity_new_task_attachment']          = '上传了任务附件';
$lang['project_activity_new_task_assignee']            = '新增了任务负责人';
$lang['project_activity_task_assignee_removed']        = '移除了任务负责人';
$lang['project_activity_task_timesheet_deleted']       = '删除了时间记录';
$lang['project_activity_uploaded_file']                = '上传了项目文件';
$lang['project_activity_status_updated']               = '更新了项目状态';
$lang['project_activity_visible_to_customer']          = '对客户可见';
$lang['project_activity_project_file_removed']         = '移除了项目文件';

# 客户区域
$lang['clients_my_estimates']                                  = '我的报价单';
$lang['client_no_reply']                                       = '无需回复';
$lang['clients_nav_projects']                                  = '项目';
$lang['clients_my_projects']                                   = '我的项目';
$lang['client_profile_image']                                  = '头像';
$lang['sales_report_cancelled_invoices_not_included']          = '已取消发票不计入报表';

# 发票管理
$lang['invoices_merge_cancel_merged_invoices']                 = '将合并发票标记为取消而非删除';
$lang['invoice_marked_as_cancelled_successfully']              = '发票取消标记成功';
$lang['invoice_unmarked_as_cancelled']                         = '发票取消标记已移除';
$lang['invoice_mark_as']                                       = '标记为%s';
$lang['invoice_unmark_as']                                     = '取消%s标记';
$lang['invoice_status_cancelled']                              = '已取消';
$lang['invoices_available_for_merging']                        = '可合并发票';
$lang['invoices_merge_discount']                               = '您需要手动为此发票添加总计%s的折扣';
$lang['invoice_merge_number_warning']                          = '合并发票会导致发票编号不连续。如需保持编号连续性请勿合并，或可手动调整编号填补空缺。';

# 任务管理
$lang['tasks_reminder_notification_before']                    = '任务截止提醒提前量(天)';
$lang['not_task_deadline_reminder']                            = '任务截止提醒';
$lang['task_not_finished']                                     = '未完成';
$lang['task_billed_cant_start_timer']                          = '任务已计费，无法启动计时器';
$lang['task_comments']                                         = '任务评论';
$lang['task_start_timer_only_assignee']                        = '只有任务负责人可启动计时器！';
$lang['tasks_reminder_notification_before_help']               = '在截止前X天通知任务负责人。仅发送给负责人，若任务周期短于提醒天数则不发送。';

# 项目跟踪
$lang['project_timesheet_not_updated']                         = '工时表未更新';
$lang['project_invoice_task_no_timers_found']                  = '未发现该任务的计时记录';
$lang['invoice_project_tasks_not_started']                     = '未开始 | 开始日期: %s';
$lang['invoice_project_see_billed_tasks']                      = '查看本次发票包含的任务';
$lang['invoice_project_all_billable_tasks_marked_as_finished'] = '所有计费任务将标记为已完成';
$lang['invoice_project_nothing_to_bill']                       = '无待计费任务，可手动添加发票项目';
$lang['invoice_project_start_date_tasks_not_passed']           = '开始日期未到的任务不可计费';
$lang['invoice_project_stop_all_timers']                       = '停止所有计时器';
$lang['invoice_project_stop_billable_timers_only']             = '仅停止可计费计时器';
$lang['project_tasks_total_timers_stopped']                    = '已停止%s个计时器';
$lang['project_invoice_timers_started']                        = '发现可计费任务计时器仍在运行，请停止计时后创建发票';

# 数据报表
$lang['dt_length_menu_all']                                    = '全部';
$lang['invoice_total_tax']                                     = '税费合计';
$lang['estimates_total_tax']                                   = '税费合计';
$lang['report_invoice_total_tax']                              = '税费合计';
$lang['home_tickets']                                          = '工单';
$lang['home_project_activity']                                 = '最新项目动态';

# 浏览追踪
$lang['view_tracking']                                         = '浏览记录';
$lang['view_date']                                             = '浏览日期';
$lang['view_ip']                                               = 'IP地址';
$lang['article_total_views']                                   = '总浏览数';

# 线索
$lang['leads_source']                                          = '来源渠道';
# 版本1.1.0
$lang['project_invoice_select_all_tasks'] = '选择所有任务';
$lang['lead_company']                     = '公司名称';

# 版本1.1.1
$lang['admin_auth_forgot_password_button']       = '确认';
$lang['task_assigned']                           = '负责人';
$lang['switch_to_pipeline']                      = '切换为管道视图';
$lang['switch_to_list_view']                     = '切换为列表视图';
$lang['estimates_pipeline']                      = '报价单管道';
$lang['estimates_pipeline_sort']                 = '排序方式';
$lang['estimates_sort_expiry_date']              = '按到期日';
$lang['estimates_sort_pipeline']                 = '按管道顺序';
$lang['estimates_sort_datecreated']              = '按创建日期';
$lang['estimates_sort_estimate_date']            = '按报价日期';
$lang['estimate_set_reminder_title']             = '设置报价单提醒';
$lang['invoice_set_reminder_title']              = '设置发票提醒';
$lang['estimate_reminders']                      = '提醒事项';
$lang['invoice_reminders']                       = '提醒事项';
$lang['estimate_notes']                          = '备注';
$lang['estimate_add_note']                       = '添加备注';
$lang['dropdown_non_selected_tex']               = '未选择任何项';
$lang['auto_close_ticket_after']                 = '自动关闭工单(小时)';
$lang['event_description']                       = '活动描述';
$lang['delete_event']                            = '删除活动';
$lang['not_new_ticket_created']                  = '您所在部门有新工单 - %s';
$lang['receive_notification_on_new_ticket']      = '接收新工单通知';
$lang['receive_notification_on_new_ticket_help'] = '所属部门的所有员工将收到新工单通知';
$lang['event_updated']                           = '活动更新成功';
$lang['customer_contacts']                       = '联系人';
$lang['new_contact']                             = '新建联系人';
$lang['contact']                                 = '联系人';
$lang['contact_lowercase']                       = '联系人';
$lang['contact_primary']                         = '主要联系人';
$lang['contact_position']                        = '职位';
$lang['contact_active']                          = '启用';
$lang['client_company_info']                     = '公司信息';
$lang['proposal_save']                           = '保存提案';
$lang['calendar']                                = '日历';
$lang['settings_pdf']                            = 'PDF设置';
$lang['settings_pdf_font']                       = 'PDF字体';
$lang['settings_pdf_table_heading_color']        = '表格标题背景色';
$lang['settings_pdf_table_heading_text_color']   = '表格标题文字颜色';
$lang['settings_pdf_font_size']                  = '默认字体大小';
$lang['proposal_status_draft']                   = '草稿';
$lang['custom_field_contacts']                   = '联系人字段';
$lang['company_primary_email']                   = '主要联系人邮箱';
$lang['client_register_contact_info']            = '主要联系人信息';
$lang['client_register_company_info']            = '公司信息';
$lang['contact_permissions_info']                = '请确保为此联系人设置适当权限';
$lang['default_leads_kanban_sort']               = '线索看板默认排序';
$lang['default_leads_kanban_sort_type']          = '排序方式';
$lang['order_ascending']                         = '升序';
$lang['order_descending']                        = '降序';
$lang['calendar_expand']                         = '展开';
$lang['proposal_reminders']                      = '提案提醒';
$lang['proposal_set_reminder_title']             = '设置提案提醒';
$lang['settings_allowed_upload_file_types']      = '允许上传的文件类型';
$lang['no_primary_contact']                      = '该客户未设置主要联系人。需要设置主要联系人才能以客户身份登录。建议所有客户都应设置主要联系人。';
$lang['leads_merge_customer']                    = '客户字段合并';
$lang['leads_merge_contact']                     = '联系人字段合并';
$lang['leads_merge_as_contact_field']            = '合并为联系人字段';
$lang['lead_convert_to_client_phone']            = '电话';
$lang['invoice_status_report_all']               = '全部';
$lang['import_contact_field']                    = '联系人字段';
$lang['file_uploaded_success']                   = '文件上传成功';
$lang['file_exceeds_max_filesize']               = '文件大小超过php.ini中upload_max_filesize限制';
$lang['file_exceeds_maxfile_size_in_form']       = '文件大小超过HTML表单中MAX_FILE_SIZE限制';
$lang['file_uploaded_partially']                 = '文件只有部分被上传';
$lang['file_not_uploaded']                       = '没有文件被上传';
$lang['file_missing_temporary_folder']           = '缺少临时文件夹';
$lang['file_failed_to_write_to_disk']            = '写入磁盘失败';
$lang['file_php_extension_blocked']              = 'PHP扩展阻止了文件上传';
$lang['view_pdf']                                = '查看PDF';
$lang['expense_repeat_every']                    = '重复周期';

# 版本1.1.2
$lang['leads_switch_to_kanban']                   = '切换为看板视图';
$lang['contract_content']                         = '合同内容';
$lang['contract_save']                            = '保存合同';
$lang['contract_send_to_email']                   = '发送至邮箱';
$lang['contract_send_to_client_modal_heading']    = '发送合同至客户邮箱';
$lang['contract_send_to']                         = '发送给';
$lang['contract_send_to_client_attach_pdf']       = '附加PDF合同';
$lang['contract_send_to_client_preview_template'] = '预览邮件模板';
$lang['include_attachments_to_email']             = '包含附件';
$lang['contract_sent_to_client_success']          = '合同已成功发送给客户';
$lang['contract_sent_to_client_fail']             = '合同发送失败';

# 版本1.1.3
$lang['client_invalid_username_or_password'] = '用户名或密码错误';
$lang['client_old_password_incorrect']       = '旧密码不正确';
$lang['client_password_changed']             = '密码修改成功';

# 版本1.1.4
$lang['total_leads_deleted']                              = '已删除线索总数：%s';
$lang['total_clients_deleted']                            = '已删除客户总数：%s';
$lang['confirm_action_prompt']                            = '确认执行此操作？';
$lang['mass_delete']                                      = '批量删除';
$lang['email_protocol']                                   = '邮件协议';
$lang['add_edit_members']                                 = '添加/编辑成员';
$lang['project_overview_logged_hours']                    = '已记录小时数：';
$lang['project_overview_billable_hours']                  = '可计费小时数：';
$lang['project_overview_billed_hours']                    = '已计费小时数：';
$lang['project_overview_unbilled_hours']                  = '未计费小时数：';
$lang['calendar_first_day']                               = '周起始日';
$lang['permission_view']                                  = '查看';
$lang['permission_edit']                                  = '编辑';
$lang['permission_create']                                = '创建';
$lang['permission_delete']                                = '删除';
$lang['permission']                                       = '权限';
$lang['permissions']                                      = '权限设置';
$lang['proposals_pipeline']                               = '提案管道';
$lang['proposals_pipeline_sort']                          = '排序方式';
$lang['proposals_sort_open_till']                         = '按截止日期';
$lang['proposals_sort_pipeline']                          = '按管道顺序';
$lang['proposals_sort_datecreated']                       = '按创建日期';
$lang['proposals_sort_proposal_date']                     = '按提案日期';
$lang['is_not_staff_member']                              = '非管理员';
$lang['lead_created']                                     = '创建时间';
$lang['access_tickets_to_none_staff_members']             = '允许非员工成员访问工单';
$lang['project_expenses']                                 = '项目费用';
$lang['expense_currency']                                 = '货币';
$lang['currency_valid_code_help']                         = '请确保输入有效的货币ISO代码';
$lang['week']                                             = '周';
$lang['weeks']                                            = '周';
$lang['month']                                            = '月';
$lang['months']                                           = '月';
$lang['year']                                             = '年';
$lang['years']                                            = '年';
$lang['expense_report_category']                          = '费用分类';
$lang['expense_paid_via']                                 = '付款方式：%s';
$lang['item_as_expense']                                  = '[费用项]';
$lang['show_help_on_setup_menu']                          = '在设置菜单显示帮助项';
$lang['customers_summary_total']                          = '客户总数';
$lang['filter_by']                                        = '筛选条件';
$lang['re_captcha']                                       = '验证码';
$lang['recaptcha_site_key']                               = '站点密钥';
$lang['recaptcha_secret_key']                             = '安全密钥';
$lang['recaptcha_error']                                  = '验证码验证失败';
$lang['smtp_username']                                    = 'SMTP用户名';
$lang['smtp_username_help']                               = '仅当邮件客户端使用SMTP用户名登录时填写';
$lang['pinned_project']                                   = '置顶项目';
$lang['pin_project']                                      = '置顶项目';
$lang['unpin_project']                                    = '取消置顶';
$lang['smtp_encryption']                                  = '邮件加密方式';
$lang['smtp_encryption_none']                             = '无加密';
$lang['show_proposals_on_calendar']                       = '提案日历';
$lang['invoice_project_see_billed_expenses']              = '查看本次发票包含的费用';
$lang['project_overview_expenses']                        = '总费用';
$lang['project_overview_expenses_billable']               = '可计费费用';
$lang['project_overview_expenses_billed']                 = '已计费费用';
$lang['project_overview_expenses_unbilled']               = '未计费费用';
$lang['announcement_date_list']                           = '日期';
$lang['project_setting_view_finance_overview']            = '查看财务概览';
$lang['show_all_tasks_for_project_member']                = '允许所有成员查看项目相关任务(含非员工)';
$lang['not_staff_added_as_project_member']                = '已将您添加为项目成员';
$lang['report_expenses_base_currency_select_explanation'] = '由于系统检测到费用使用多种货币，请选择基准货币';

# 版本1.1.6
$lang['project_activity_recorded_expense']   = '记录费用';
$lang['save_customer_and_add_contact']       = '保存并创建联系人'; 
$lang['tickets_chart_weekly_opening_stats']  = '工单周统计';
$lang['related_knowledgebase_articles']      = '相关文章';
$lang['detailed_overview']                   = '任务概览';
$lang['tasks_total_checklists_finished']     = '已完成检查项总数';
$lang['tasks_total_added_attachments']       = '附件总数';
$lang['tasks_total_comments']                = '评论总数';
$lang['task_finished_on_time']               = '按时完成？';
$lang['task_finished_on_time_indicator']     = '是';
$lang['task_not_finished_on_time_indicator'] = '否';
$lang['filter']                              = '筛选';
$lang['task_filter_detailed_all_months']     = '所有月份';
$lang['kb_article_slug']                     = 'URL别名';

# 版本1.1.7
$lang['email_template_ticket_warning']          = '如果工单是通过邮件导入且联系人不存在CRM中，字段将不会被替换';
$lang['auto_stop_tasks_timers_on_new_timer']    = '启动新计时器时自动停止其他计时器';
$lang['notification_when_customer_pay_invoice'] = '客户支付发票时接收通知(系统内置)';
$lang['not_invoice_payment_recorded']           = '新发票支付 - %s';
$lang['email_template_contact_warning']         = '如果联系人未登录进行操作，联系人合并字段将不会被替换';
$lang['change_role_permission_warning']         = '更改角色权限不会影响当前使用该角色的员工权限';
$lang['task_copied_successfully']               = '任务复制成功';
$lang['failed_to_copy_task']                    = '任务复制失败';
$lang['not_project_file_uploaded']              = '新增项目文件';
$lang['settings_calendar_color']                = '%s颜色';
$lang['settings_calendar_colors_heading']       = '样式设置';
$lang['reminder']                               = '提醒';
$lang['back_to_tasks_list']                     = '返回任务列表';
$lang['copy_task_confirm']                      = '确认';
$lang['changing_items_affect_warning']          = '修改项目信息不会影响已创建的发票/报价单/提案/贷记单';
$lang['tax_is_used_in_expenses_warning']        = '无法更新该税种，因其已被费用交易使用';
$lang['note']                                   = '备注';
$lang['leads_staff_report_converted']           = '已转化线索总数';
$lang['leads_staff_report_created']             = '已创建线索总数';
$lang['leads_staff_report_lost']                = '已丢失线索总数';
$lang['client_go_to_dashboard']                 = '返回首页';
$lang['show_estimate_reminders_on_calendar']    = '报价单提醒';
$lang['show_invoice_reminders_on_calendar']     = '发票提醒';
$lang['show_proposal_reminders_on_calendar']    = '提案提醒';
$lang['calendar_estimate_reminder']             = '报价单提醒';
$lang['calendar_invoice_reminder']              = '发票提醒';
$lang['calendar_proposal_reminder']             = '提案提醒';
$lang['proposal_due_after']                     = '提案有效期(天)';
$lang['project_progress']                       = '进度';
$lang['calculate_progress_through_tasks']       = '通过任务计算进度';
$lang['allow_customer_to_change_ticket_status'] = '允许客户在客户区域更改工单状态';
$lang['switch_to_general_report']               = '切换至总体报表';
$lang['switch_to_staff_report']                 = '切换至员工报表';
$lang['generate']                               = '生成';
$lang['from_date']                              = '开始日期';
$lang['to_date']                                = '结束日期';
$lang['not_results_found']                      = '未找到结果';
$lang['lead_lock_after_convert_to_customer']    = '线索转化为客户后禁止编辑(管理员除外)';
$lang['default_pipeline_sort']                  = '默认管道排序';
$lang['toggle_full_view']                       = '切换全屏视图';
$lang['not_estimate_invoice_deleted']           = '删除了已创建的发票';
$lang['not_task_new_comment']                   = '评论了任务 %s';

# 版本1.1.8
$lang['invoice_number_exists']                  = '该发票编号在当前年度已存在';
$lang['estimate_number_exists']                 = '该报价单编号在当前年度已存在';
$lang['email_exists']                           = '邮箱已存在';
$lang['not_uploaded_project_file']              = '上传了新项目文件';
$lang['not_created_new_project_discussion']     = '创建了新项目讨论';
$lang['not_commented_on_project_discussion']    = '评论了项目讨论';
$lang['all_staff_members']                      = '全体员工';
$lang['help_project_permissions']               = '查看权限允许员工查看所有项目。如仅允许查看分配项目(作为成员)，请不要授予查看权限';
$lang['help_tasks_permissions']                 = '查看权限允许员工查看所有任务。如仅允许查看分配或关注的任务，请不要授予查看权限';
$lang['expense_recurring_days']                 = '天';
$lang['expense_recurring_weeks']                = '周';
$lang['expense_recurring_months']               = '月';
$lang['expense_recurring_years']                = '年';
$lang['reset_to_default_color']                 = '重置为默认颜色';
$lang['pdf_logo_width']                         = 'Logo宽度(像素)';
$lang['drop_files_here_to_upload']              = '拖放文件到此处上传';
$lang['browser_not_support_drag_and_drop']      = '您的浏览器不支持拖放上传';
$lang['remove_file']                            = '移除文件';
$lang['you_can_not_upload_any_more_files']      = '无法上传更多文件';
$lang['custom_field_only_admin']                = '仅管理员可见';
$lang['leads_default_source']                   = '默认来源';
$lang['clear_activity_log']                     = '清除日志';
$lang['default_contact_permissions']            = '默认联系人权限';
$lang['invoice_activity_marked_as_cancelled']   = '将发票标记为已取消';
$lang['invoice_activity_unmarked_as_cancelled'] = '取消发票的已取消标记';
$lang['wait_text']                              = '请稍候...';
$lang['projects_summary']                       = '项目汇总';
$lang['dept_imap_host']                         = 'IMAP主机';
$lang['dept_encryption']                        = '加密方式';
$lang['dept_email_password']                    = '密码';
$lang['dept_email_no_encryption']               = '不加密';
$lang['failed_to_decrypt_password']             = '密码解密失败';
$lang['delete_mail_after_import']               = '导入后删除邮件？';
$lang['expiry_reminder_enabled']                = '发送到期提醒';
$lang['send_expiry_reminder_before']            = '提前发送到期提醒(天)';
$lang['not_expiry_reminder_sent']               = '已发送到期提醒';
$lang['send_expiry_reminder']                   = '发送到期提醒';
$lang['sent_expiry_reminder_success']           = '到期提醒发送成功';
$lang['sent_expiry_reminder_fail']              = '到期提醒发送失败';
$lang['leads_default_status']                   = '默认状态';
$lang['item_description_placeholder']           = '描述';
$lang['item_long_description_placeholder']      = '详细描述';
$lang['item_quantity_placeholder']              = '数量';
$lang['item_rate_placeholder']                  = '单价';
$lang['tickets_summary']                        = '工单汇总';
$lang['tasks_list_priority']                    = '优先级';
$lang['ticket_status_db_2']                     = '处理中';
$lang['ticket_status_db_1']                     = '待处理';
$lang['ticket_status_db_3']                     = '已回复';
$lang['ticket_status_db_4']                     = '挂起';
$lang['ticket_status_db_5']                     = '已关闭';
$lang['ticket_priority_db_1']                   = '低';
$lang['ticket_priority_db_2']                   = '中';
$lang['ticket_priority_db_3']                   = '高';
$lang['customer_have_projects_by']              = '包含状态为%s的项目';
$lang['customer_have_proposals_by']             = '包含状态为%s的提案';
$lang['do_not_redirect_payment']                = '不跳转至支付页面';
$lang['project_tickets']                        = '项目工单';
$lang['invoice_report']                         = '发票报表';
$lang['payment_modes_report']                   = '付款方式报表(交易)';
$lang['customer_admins']                        = '客户管理员';
$lang['assign_admin']                           = '分配管理员';
$lang['customer_admin_date_assigned']           = '分配日期';
$lang['customer_admin_login_as_client_message'] = '您好 %s，您已被添加为该客户的管理员';
$lang['ticket_form_validation_file_size']       = '文件大小必须小于 %s';
$lang['has_transactions_currency_base_change']  = '只有在没有该货币的交易记录时才能更改基准货币。请删除交易记录后再更改基准货币';
$lang['customers_sort_all']                     = '全部';
# 版本1.1.9
$lang['use_recaptcha_customers_area']    = '在客户区域启用验证码(登录/注册)';
$lang['project_marked_as_finished']      = '项目已完成';
$lang['project_status_updated']          = '项目状态已更新';
$lang['remove_decimals_on_zero']         = '去除零小数位(2.00显示为2，2.25仍显示2.25)';
$lang['remove_tax_name_from_item_table'] = '从表格行中移除税种名称';

# Version 1.2.0
$lang['not_billable_expenses_by_categories']      = '按类别分类的不可报销费用';
$lang['billable_expenses_by_categories']          = '按类别分类的可报销费用';
$lang['format_letter_size']                       = 'A4横向';
$lang['pdf_formats']                              = '文档格式';
$lang['swap_pdf_info']                            = '交换公司/客户信息位置（公司信息显示在右侧，客户信息显示在左侧）';
$lang['expenses_filter_by_categories']            = '按类别筛选';
$lang['task_copy']                                = '复制';
$lang['estimate_status']                          = '状态';
$lang['expenses_report_exclude_billable']         = '排除可报销费用';
$lang['expenses_total']                           = '总计';
$lang['estimate_activity_added_attachment']       = '添加了附件';
$lang['show_to_customer']                         = '对客户可见';
$lang['hide_from_customer']                       = '对客户隐藏';
$lang['expenses_report_total']                    = '总计';
$lang['expenses_report']                          = '费用报告';
$lang['expenses_report_total_tax']                = '税费总计';
$lang['expenses_detailed_report']                 = '详细报告';
$lang['expense_not_billable']                     = '不可报销';
$lang['notification_settings']                    = '通知设置';
$lang['staff_with_roles']                         = '具有角色的员工';
$lang['specific_staff_members']                   = '特定员工成员';
$lang['proposal_mark_as']                         = '标记为%s';
$lang['kb_report_total_answers']                  = '总计';
$lang['ticket_message_edit']                      = '编辑';
$lang['invoice_files']                            = '发票文件';
$lang['estimate_files']                           = '报价单文件';
$lang['proposal_files']                           = '提案文件';
$lang['invoices_awaiting_payment']                = '待支付发票';
$lang['tasks_not_finished']                       = '未完成的任务';
$lang['outstanding_invoices']                     = '未结发票';
$lang['past_due_invoices']                        = '逾期发票';
$lang['paid_invoices']                            = '已付款发票';
$lang['invoice_estimate_year']                    = '年度';
$lang['task_stats_logged_hours']                  = '记录工时';
$lang['leads_converted_to_client']                = '已转化线索';
$lang['task_assigned_from']                       = '此任务由%s分配给您';
$lang['new_note']                                 = '新建备注';
$lang['my_tickets_assigned']                      = '分配给我的工单';
$lang['filter_by_assigned']                       = '按负责人筛选';
$lang['staff_stats_total_logged_time']            = '总记录时间';
$lang['staff_stats_last_month_total_logged_time'] = '上月记录时间';
$lang['staff_stats_this_month_total_logged_time'] = '本月记录时间';
$lang['staff_stats_last_week_total_logged_time']  = '上周记录时间';
$lang['staff_stats_this_week_total_logged_time']  = '本周记录时间';
// 无需修改此处翻译，因为这些变量已在项目时间表模块中翻译过，此处仅用于代码可读性
$lang['timesheet_user']       = $lang['project_timesheet_user'];       // 人员（复用项目时间表用户翻译）
$lang['timesheet_start_time'] = $lang['project_timesheet_start_time']; // 开始时间（复用项目时间表开始时间翻译）
$lang['timesheet_end_time']   = $lang['project_timesheet_end_time'];   // 结束时间（复用项目时间表结束时间翻译）
$lang['timesheet_time_spend'] = $lang['project_timesheet_time_spend']; // 耗时（复用项目时间表耗时翻译）
$lang['task_timesheets']      = $lang['project_timesheets'];           // 时间表（复用项目时间表翻译）
$lang['task_log_time_start']  = $lang['project_timesheet_start_time']; // 记录开始时间（复用项目时间表开始时间翻译）
$lang['task_log_time_end']    = $lang['project_timesheet_end_time'];   // 记录结束时间（复用项目时间表结束时间翻译）
$lang['task_single_log_user'] = $lang['project_timesheet_user'];       // 记录人员（复用项目时间表用户翻译）

# 版本1.2.2
$lang['milestone_description']                  = '里程碑描述';
$lang['description_visible_to_customer']        = '向客户显示描述';
$lang['upcoming_tasks']                         = '待办任务';
$lang['payment_credit_card_number']             = '信用卡号';
$lang['payment_credit_card_expiration_date']    = '有效期';
$lang['payment_billing_email']                  = '账单邮箱';
$lang['submit_payment']                         = '提交支付';
$lang['custom_field_disallow_customer_to_edit'] = '禁止客户编辑此字段';
$lang['project_due_notice']                     = '该项目已逾期%s天';
$lang['not_lead_added_attachment']              = '为线索%s添加了新附件';
$lang['lead_note_date_added']                   = '备注添加时间：%s';
$lang['recurring_custom']                       = '自定义周期';
// 无需翻译，这些变量已为"费用自定义周期"功能翻译过，此处仅用于提高代码可读性
$lang['invoice_recurring_months'] = $lang['expense_recurring_months']; // 月（复用费用周期月份翻译）
$lang['invoice_recurring_years']  = $lang['expense_recurring_years'];  // 年（复用费用周期年份翻译）
$lang['invoice_recurring_days']   = $lang['expense_recurring_days'];   // 天（复用费用周期天数翻译）
$lang['invoice_recurring_weeks']  = $lang['expense_recurring_weeks'];  // 周（复用费用周期周数翻译）

# 版本1.2.4
$lang['document_direction']                                 = '文档方向';
$lang['notify_project_members_status_change']               = '通知项目成员状态变更';
$lang['not_project_status_updated']                         = '项目状态从 %s 更新为 %s';
$lang['ticket_not_found']                                   = '未找到工单';
$lang['project_not_found']                                  = '未找到项目';
$lang['export_project_data']                                = '导出项目数据';
$lang['total_project_members']                              = '项目成员总数';
$lang['total_project_files']                                = '附件总数';
$lang['total_project_discussions_created']                  = '创建的讨论数';
$lang['project_member']                                     = '项目成员';
$lang['total_project_discussions_comments']                 = '讨论评论总数';
$lang['staff_total_task_assigned']                          = '分配的任务总数';
$lang['staff_total_comments_on_tasks']                      = '任务评论数';
$lang['project_members_overview']                           = '项目成员概览';
$lang['project_milestones_overview']                        = '里程碑概览';
$lang['total_tasks_in_milestones']                          = '分配的任务总数';
$lang['total_task_members_assigned']                        = '分配成员总数';
$lang['total_task_members_followers']                       = '关注者总数';
$lang['total_milestones']                                   = '里程碑总数';
$lang['total_project_worked_days']                          = '工作总天数';
$lang['finance_overview']                                   = '财务概览';
$lang['project_custom_fields']                              = '自定义字段';
$lang['total_tickets_related_to_project']                   = '关联工单总数';
$lang['projects_total_invoices_created']                    = '创建的发票总数';
$lang['do_not_send_invoice_payment_email_template_contact'] = '不向客户联系人发送发票付款记录邮件';
$lang['no_preview_available_for_file']                      = '此文件无预览';
$lang['project_activity_deleted_file_discussion_comment']   = '删除文件讨论评论';
$lang['email_template_discussion_info']                     = '此模板用于项目讨论评论邮件(文件讨论和常规讨论)';
$lang['format_a4_portrait_size']                            = '纵向A4尺寸';
$lang['only_show_contact_tickets']                          = '在客户区域仅显示登录联系人相关的工单(主要联系人除外)';
$lang['cancel_overdue_reminders_invoice']                   = '禁止发送此发票的逾期提醒';
$lang['customer_shipping_address_notice']                   = '如果不在客户发票上使用运输地址，请不要填写运输地址信息';
$lang['timesheets_overview']                                = '工时表概览';
$lang['invoice_status_draft']                               = '草稿';
$lang['save_as_draft']                                      = '保存为草稿';
$lang['convert_and_save_as_draft']                          = '转换并保存为草稿';
$lang['convert']                                            = '转换';
$lang['exclude_invoices_draft_from_client_area']            = '从客户区域排除草稿状态的发票';
$lang['invoice_draft_status_info']                          = '此发票为草稿状态，当发送给客户或标记为已发送时状态将自动变更';
$lang['task_info']                                          = '任务信息';
$lang['recurring_tasks']                                    = '周期性任务';
$lang['todays_tasks']                                       = '今日任务';
$lang['payment_mode_invoices_only']                         = '仅发票';
$lang['payment_mode_expenses_only']                         = '仅费用';
$lang['task_no_checklist_items_found']                      = '此任务无检查项';
$lang['task_no_description']                                = '此任务无描述';
$lang['expenses_reminders']                                 = '费用提醒';
$lang['expense_set_reminder_title']                         = '设置费用提醒';
$lang['calendar_expense_reminder']                          = '费用提醒';
$lang['recurring_task']                                     = '周期性任务';
$lang['disable_email_from_being_sent']                      = '禁止发送此邮件';
$lang['not_sent_indicator']                                 = '未发送';
$lang['proposal_status_revised']                            = '已修订';
$lang['customer_currency_change_notice']                    = '如果客户使用的货币与基础货币不同，请确保为此客户选择适当的货币。记录交易后无法更改货币。';
$lang['click_to_add_content']                               = '点击添加内容';
$lang['related_to_project']                                 = '此 %s 关联到 %s: %s';
$lang['back_to_lead']                                       = '返回线索';
$lang['add_task_timer_started_warning']                     = '请停止当前任务计时器才能手动添加新计时器';
$lang['sending_email_contact_permissions_warning']          = '自动选择客户联系人失败。请确保客户有关联的联系人并具有 %s 权限';
$lang['task_repeat_every']                         = $lang['expense_repeat_every'];
$lang['task_recurring_months']                     = $lang['expense_recurring_months'];
$lang['task_recurring_years']                      = $lang['expense_recurring_years'];
$lang['task_recurring_days']                       = $lang['expense_recurring_days'];
$lang['task_recurring_weeks']                      = $lang['expense_recurring_weeks'];
# 版本1.2.6
$lang['currently_supported_currencies']                       = '当前支持的货币';
$lang['authorize_notice']                                     = '如果使用Authorize.Net AIM支付API需要SSL。Authorize.net每个账户仅支持一种货币。请确保在货币字段中仅添加与您Authorize账户关联的一种货币。';
$lang['settings_paymentmethod_developer_mode']                = '开发者模式';
$lang['payment_cardholder_name']                              = '持卡人姓名';
$lang['settings_paymentmethod_authorize_api_login_id']        = 'API登录ID';
$lang['settings_paymentmethod_mollie_api_key']                = 'API密钥';
$lang['settings_paymentmethod_authorize_api_transaction_key'] = 'API交易ID';
$lang['settings_paymentmethod_authorize_secret_key']          = '安全密钥';
$lang['leads_report_converted_notice']                        = '只有属于默认客户状态的线索才会被视为已转换线索，如果线索属于默认状态客户但未转换为客户，仍将计为已转换线索';
$lang['payment_method']                                       = '付款方式';
$lang['payment_method_info']                                  = '某些支付网关支持不同/多种付款方式，如信用卡、PayPal、银行转账。';

# 版本1.2.7
$lang['dropbox_app_key']                                    = 'Dropbox应用密钥';
$lang['project_invoice_select_all_expenses']                = '选择所有费用';
$lang['role_update_staff_permissions']                      = '更新使用此角色的所有员工权限';
$lang['customer_active']                                    = '活跃客户';
$lang['note_updated_successfully']                          = '备注更新成功';
$lang['update_note']                                        = '更新备注';
$lang['update_comment']                                     = '更新评论';
$lang['comment_updated_successfully']                       = '评论更新成功';
$lang['staff_send_welcome_email']                           = '发送欢迎邮件';
$lang['proposal_warning_email_change']                      = '%s的邮箱已变更。此%s关联到提案。是否更新所有关联提案的邮箱？';
$lang['update_proposal_email_yes']                          = '是，更新所有关联邮箱';
$lang['update_proposal_email_no']                           = '否，我将手动更新';
$lang['proposals_emails_updated']                           = '所有关联此%s的提案邮箱已更新为%s';
$lang['custom_field_company']                               = '公司';
$lang['actions']                                            = '操作';
$lang['project_mark_as']                                    = '标记为%s';
$lang['todo_edit_title']                                    = '编辑待办事项';
$lang['additional_action_required']                         = '需要额外操作！';
$lang['project_mark_tasks_finished_confirm']                = '确认';
$lang['project_marked_as_success']                          = '项目成功标记为%s';
$lang['project_marked_as_failed']                           = '项目标记为%s失败';
$lang['auto_assign_customer_admin_after_lead_convert']      = '线索转换后自动分配为客户管理员';
$lang['auto_assign_customer_admin_after_lead_convert_help'] = '设为"是"时，转换线索的员工将自动成为客户管理员。注意：仅对没有客户查看权限的员工生效';
$lang['auto_close_tickets_disable']                         = '设为0则禁用';
$lang['task_checklist_item_completed_by']                   = '由%s完成';
$lang['staff_email_signature_help']                         = '留空则使用设置中的默认邮件签名';
$lang['default_task_priority']                              = '默认优先级';
$lang['project_send_created_email']                         = '发送项目创建邮件';

# 版本1.2.8
$lang['show_transactions_on_invoice_pdf']            = '在PDF中显示发票付款记录';
$lang['bulk_actions']                                = '批量操作';
$lang['additional_filters']                          = '附加筛选';
$lang['expenses_available_to_bill']                  = '可计费的费用';
$lang['bulk_action_customers_groups_warning']        = '如不选择任何分组，将移除所选客户的所有分组';
$lang['customer_attachments_show_in_customers_area'] = '在客户区域显示';
$lang['customer_attachments_show_notice']            = '仅客户资料页上传的文件可设置客户区域可见性';
$lang['customer_profile_files']                      = '文件';
$lang['no_files_found']                              = '未找到文件';
$lang['custom_field_column']                         = '网格列数(Bootstrap列如12) - 最大12';
$lang['task_status']                                 = '状态';
$lang['task_status_1']                               = '未开始';
$lang['task_status_2']                               = '等待反馈';
$lang['task_status_3']                               = '测试中';
$lang['task_status_4']                               = '进行中';
$lang['task_status_5']                               = '已完成';
$lang['task_mark_as']                                = '标记为%s';
$lang['task_marked_as_success']                      = '任务成功标记为%s';
$lang['search_tasks']                                = '搜索任务';
$lang['tasks_kanban_limit']                          = '看板每状态显示任务数限制';
$lang['show_on_invoice_on_pdf']                      = '在发票PDF中显示%s';
$lang['show_pay_link_to_invoice_pdf']                = '在PDF显示支付链接(发票状态为已取消时不适用)';
$lang['no_leads_found']                              = '未找到线索';
$lang['created_today']                               = '今日创建';
$lang['total_tasks_deleted']                         = '删除任务总数：%s';
$lang['total_tickets_delete']                        = '删除工单总数：%s';
$lang['format_letter_portrait']                      = 'Letter纵向';
$lang['format_letter_landscape']                     = 'Letter横向';
$lang['period_datepicker']                           = '时间段';
$lang['total_by_hourly_rate']                        = '按小时费率总计';
$lang['staff_hourly_rate']                           = $lang['task_hourly_rate'];
$lang['remove_tax_name_from_item_table_help']        = '例如：项目税15%将显示为15%(不包含税种名称)(同一项目存在同名同税率的多税种时不适用)';
$lang['back_to_project']                             = '返回项目';
$lang['view_kanban']                                 = '查看看板';
$lang['invoice_is_overdue']                          = '此发票已逾期%s天';

# 版本1.2.9
$lang['time_decimal']                            = '时间(十进制)';
$lang['time_h']                                  = '时间(小时)';
$lang['proposal_number_prefix']                  = '提案编号前缀';
$lang['settings_number_padding_prefix']          = '前缀格式的数字补零<br/><small>例如：设为3则格式化为：005或025</small>';
$lang['this_week_payments']                      = '本周收款';
$lang['last_week_payments']                      = '上周收款';
$lang['not_published_new_post']                  = '发布了新文章';
$lang['expense_name']                            = '费用名称';
$lang['expense_name_help']                       = '仅个人使用';
$lang['adjustments']                             = '调整项';
$lang['payments_received']                       = '已收款项';
$lang['not_lead_activity_created_proposal']      = '创建新提案 - %s';
$lang['lead_title']                              = '职位';
$lang['lead_address']                            = '地址';
$lang['lead_city']                               = '城市';
$lang['lead_state']                              = '省份';
$lang['lead_country']                            = '国家';
$lang['lead_zip']                                = '邮编';
$lang['lead_is_public_yes']                      = '公开';
$lang['lead_is_public_no']                       = '不公开';
$lang['lead_info']                               = '线索信息';
$lang['lead_general_info']                       = '基本信息';
$lang['lead_latest_activity']                    = '最近活动';
$lang['item_description_new_lines_notice']       = '项目描述不支持换行，请使用详细描述字段';
$lang['estimates_report']                        = '报价单报表';
$lang['confirm']                                 = '确认';
$lang['delete_staff']                            = '删除员工';
$lang['delete_staff_info']                       = '需要将此员工的数据转移给其他用户，请选择接收用户';
$lang['estimate_items']                          = '报价单项目';
$lang['no_proposals_found']                      = '未找到提案';
$lang['no_estimates_found']                      = '未找到报价单';
$lang['pipeline_limit_status']                   = '每状态管道限制数';
$lang['settings_update']                         = '系统更新';
$lang['purchase_key']                            = '购买密钥';
$lang['update_now']                              = '立即更新';
$lang['update_available']                        = '有可用更新';
$lang['latest_version']                          = '最新版本';
$lang['your_version']                            = '当前版本';
$lang['using_latest_version']                    = '您使用的是最新版本';
$lang['mark_as_active']                          = '标记为活跃';
$lang['customer_inactive_message']               = '此为非活跃客户，部分功能可能受限';
$lang['active_customers']                        = '活跃客户';
$lang['inactive_active_customers']               = '非活跃客户';
$lang['include_proposal_items_merge_field_help'] = '在提案内容中使用%s合并字段包含提案项目';
$lang['all_data_synced_successfully']            = '数据同步成功';
$lang['sync_now']                                = '立即同步';
$lang['sync_data']                               = '同步数据';
$lang['sync_proposals_up_to_date']               = '所有提案均为最新状态，无需同步';
$lang['proposal_sync_1_info']                    = '提案创建后所有数据独立存储。更新%s信息不会影响此前创建的提案';
$lang['proposal_sync_2_info']                    = '如最近更新了%s信息，可将新数据同步至关联提案。以下是可同步的字段列表';

# 版本1.3.0
$lang['expense_include_additional_data_on_convert'] = '转换时在项目详细描述中包含此费用的附加信息';

# 版本1.4.0
$lang['calendar_events_limit']                              = '日历事件显示限制(月视图和周视图)';
$lang['show_page_number_on_pdf']                            = '在PDF上显示页码';
$lang['customer_active_inactive_help']                      = '创建新记录时不会显示在下拉选项中';
$lang['item_groups']                                        = '项目分组';
$lang['item_group']                                         = '项目分组';
$lang['item_group_name']                                    = '分组名称';
$lang['new_item_group']                                     = '新建分组';
$lang['show_setup_menu_item_only_on_hover']                 = '仅在鼠标悬停时显示设置菜单项';
$lang['internal_article']                                   = '内部文章';
$lang['expenses_created_from_this_recurring_expense']       = '由此定期费用创建的费用记录';
$lang['convert_to_task']                                    = '转换为任务';
$lang['next_invoice_date']                                  = '下次发票日期: %s';
$lang['next_expense_date']                                  = '下次费用日期: %s';
$lang['invoice_recurring_from']                             = '此发票由定期发票创建，编号为: %s';
$lang['expense_recurring_from']                             = '此费用由以下定期费用创建: %s';
$lang['child_invoices']                                     = '子发票';
$lang['child_expenses']                                     = '子费用';
$lang['no_announcements']                                   = '暂无公告';
$lang['unit']                                               = '单位';
$lang['permission_view_own']                                = '查看(自己的)';
$lang['permission_global']                                  = '全局权限';
$lang['permission_customers_based_on_admins']               = '基于客户管理员';
$lang['permission_payments_based_on_invoices']              = '基于发票查看(自己的)权限';
$lang['permission_projects_based_on_assignee']              = '若无全局查看权限，仅显示分配给该员工的项目';
$lang['permission_tasks_based_on_assignee']                 = '若无全局查看权限，仅显示分配给/关注的任务、公开任务或项目关联任务(当设置中允许查看所有项目任务时)';
$lang['settings_paymentmethod_default_selected_on_invoice'] = '在发票上默认选中';
$lang['paymentmethod_braintree_merchant_id']                = '商户ID';
$lang['paymentmethod_braintree_private_key']                = '私钥';
$lang['paymentmethod_braintree_public_key']                 = '公钥';
$lang['company_requires_vat_number_field']                  = '公司必须填写增值税号';
$lang['no_company_view_profile']                            = '个人 - 查看资料';
$lang['company_is_required']                                = '公司字段是否必填？';
$lang['estimate_invoiced']                                  = '已开票';
$lang['file_date_uploaded']                                 = '上传日期';
$lang['allow_contact_to_delete_files']                      = '允许联系人删除自己在客户区域上传的文件';
$lang['file']                                               = '文件';
$lang['customer_contact_person_only_one_allowed']           = '未填写公司字段时仅允许1个联系人，系统将视此客户为个人';
$lang['web_to_lead']                                        = '网页转线索';
$lang['web_to_lead_form']                                   = '网页转线索表单';
$lang['new_form']                                           = '新建表单';
$lang['form_name']                                          = '表单名称';
$lang['cf_option_in_use']                                   = '您删除的选项正在使用中无法移除，系统已自动将其追加到现有选项中';
$lang['form_builder']                                       = '表单构建器';
$lang['form_information']                                   = '表单信息与设置';
$lang['form_builder_create_form_first']                     = '请先创建表单以使用表单构建器';
$lang['notify_assigned_user']                               = '负责人';
$lang['form_recaptcha']                                     = '使用Google验证码';
$lang['form_lang_validation']                               = '语言';
$lang['form_lang_validation_help']                          = '用于验证消息显示';
$lang['form_btn_submit_text']                               = '提交按钮文字';
$lang['form_success_submit_msg']                            = '表单提交成功后显示的消息';
$lang['total_submissions']                                  = '总提交数';
$lang['form_integration_code']                              = '集成代码';
$lang['not_lead_imported_from_form']                        = '新线索从网页表单导入 - %s';
$lang['not_lead_activity_log_attachment']                   = '从表单导入的附件 - %s';
$lang['form_integration_code_help']                         = '复制此代码到网站任意位置以显示表单，可调整宽度和高度像素以适应您的网站';
$lang['invoice_not_found']                                  = '未找到发票';
$lang['estimate_not_found']                                 = '未找到报价单';
$lang['expense_not_found']                                  = '未找到费用';
$lang['proposal_not_found']                                 = '未找到提案';
$lang['new_task_assigned_non_user']                         = '新任务已分配给您 - %s';
$lang['no_child_found']                                     = '未找到子%s';
$lang['company_vat_number']                                 = '增值税号';
$lang['not_lead_assigned_from_form']                        = '新线索已分配给您';
$lang['not_lead_activity_assigned_from_form']               = '线索已分配给%s';
$lang['form_allow_duplicate']                               = '允许重复%s插入数据库？';
$lang['track_duplicate_by_field']                           = '根据字段防止重复';
$lang['and_track_duplicate_by_field']                       = '+ 字段(留空则仅根据1个字段查重)';
$lang['create_the_duplicate_form_data_as_task']             = '将重复的%s数据创建为任务并分配给负责人';
$lang['create_the_duplicate_form_data_as_task_help']        = '用于进一步审核提交内容并采取必要措施';
$lang['currently_selected']                                 = '当前已选';
$lang['search_ajax_empty']                                  = '选择并开始输入';
$lang['search_ajax_placeholder']                            = '输入搜索内容...';
$lang['search_ajax_searching']                              = '搜索中...';
$lang['search_ajax_initialized']                            = '开始输入以搜索';
$lang['lead_description']                                   = '描述';
$lang['lead_website']                                       = '网站';
$lang['invoice_activity_auto_converted_from_estimate']      = '发票自动从报价单创建，编号%s';
$lang['hour_of_day_perform_auto_operations']                = '执行自动操作的小时';
$lang['hour_of_day_perform_auto_operations_format']         = '24小时制，如9表示上午9点，15表示下午3点';
$lang['inv_hour_of_day_perform_auto_operations_help']       = '用于定期发票、逾期通知等自动操作';
$lang['use_minified_files']                                 = '使用压缩版的css和js文件(仅系统文件)';

# 版本1.5.0
$lang['logo_favicon_changed_notice']       = '检测到Logo或网站图标变更，若仍显示原Logo请清除浏览器缓存';
$lang['kb_search_articles']                = '搜索知识库文章';
$lang['kb_search']                         = '搜索';
$lang['have_a_question']                   = '有问题吗？';
$lang['card_expiration_year']              = '到期年份';
$lang['card_expiration_month']             = '到期月份';
$lang['client_website']                    = '网站';
$lang['search_project_members']            = '搜索项目成员...';
$lang['cf_translate_input_link_title']     = '链接标题';
$lang['cf_translate_input_link_url']       = '链接地址';
$lang['cf_translate_input_link_tip']       = '点击添加链接';
$lang['task_edit_delete_timesheet_notice'] = '工时表任务已%s，您无法%s此工时表';
$lang['department_username']               = 'IMAP用户名';
$lang['department_username_help']          = '仅当IMAP服务器使用用户名而非邮箱登录时填写此字段，仍需填写邮箱地址';
$lang['total_tickets_deleted']             = '删除工单总数: %s';

# 版本1.5.1
$lang['ticket_linked_to_project']                                = '此工单关联到项目: %s';
$lang['only_own_files_contacts']                                 = '联系人仅能查看自己在客户区域上传的文件(客户资料页上传的文件)';
$lang['only_own_files_contacts_help']                            = '如果您通过客户资料页手动共享文件给其他联系人，他们将能够查看该文件';
$lang['share_file_with']                                         = '共享文件给';
$lang['file_share_visibility_notice']                            = '此文件未与联系人共享，切换可见性以刷新';
$lang['share_file_with_show']                                    = '此文件已共享给: %s';
$lang['allow_primary_contact_to_view_edit_billing_and_shipping'] = '允许主要联系人查看/编辑账单和运输信息';
$lang['estimate_due_after']                                      = '报价单有效期(天)';

# 版本1.6.0
$lang['my_timesheets']                                   = '我的工时表';
$lang['today']                                           = '今日';
$lang['open_in_dropbox']                                 = '在Dropbox中打开';
$lang['show_primary_contact']                            = '在%s显示主要联系人全名';
$lang['view_members_timesheets']                         = '查看所有工时表';
$lang['priority']                                        = '优先级';
$lang['fetch_from_google']                               = '从Google获取';
$lang['customer_fetch_lat_lng_usage']                    = '获取最佳结果前请先填写地址、城市和国家';
$lang['g_search_address_not_found']                      = '未找到该地址，请重试';
$lang['proposals_report']                                = '提案报表';
$lang['staff_members_open_tickets_to_all_contacts_help'] = '若无客户查看权限，员工仅能为自己管理的客户联系人创建工单';
$lang['staff_members_open_tickets_to_all_contacts']      = '允许员工为所有联系人创建工单？';
$lang['charts_based_report']                             = '图表报表';
$lang['responsible_admin']                               = '负责管理员';
$lang['tags']                                            = '标签';
$lang['tag']                                             = '标签';
$lang['customer_map_notice']                             = '添加经纬度以显示地图';
$lang['default_view']                                    = '默认视图';
$lang['day']                                             = '日视图';
$lang['agenda']                                          = '议程视图';
$lang['timesheet_tags']                                  = '工时表标签';
$lang['show_more']                                       = '显示更多';
$lang['show_less']                                       = '显示更少';
$lang['project_completed_date']                          = '完成日期';
$lang['language']                                        = '语言';
$lang['this_week']                                       = '本周';
$lang['last_week']                                       = '上周';
$lang['this_month']                                      = '本月';
$lang['last_month']                                      = '上月';
$lang['no_description_project']                          = '此项目无描述';
$lang['sales_string']                                    = '销售';
$lang['no_project_members']                              = '此项目无成员';
$lang['search_by_tags']                                  = '使用#+标签名搜索';
$lang['project_status_5']                                = '已取消';

# 版本1.7.0
$lang['not_activity_new_reminder_created']        = '为%s设置了新提醒，日期%s';
$lang['not_activity_new_task_created']            = '创建了新任务 - %s';
$lang['recurring_invoice_draft_notice']           = '此发票为草稿状态，需标记为已发送。草稿状态的定期发票不会被定时任务重新创建';
$lang['recurring_recreate_hour_notice']           = '%s将在设置->定时任务中指定的小时重新创建';
$lang['invoice_project_include_timesheets_notes'] = '在项目描述中包含每项工时表备注';
$lang['events']                                   = '活动';
$lang['clear']                                    = '清空';
$lang['auto_mark_as_public']                      = '自动标记为公开';
$lang['time_format']                              = '时间格式';
$lang['time_format_24']                           = '24小时制';
$lang['time_format_12']                           = '12小时制';
$lang['delete_activity_log_older_then']           = '删除早于X个月的系统活动日志';
$lang['mark_as_read']                             = '标记为已读';
$lang['mark_all_as_read']                         = '全部标记为已读';
$lang['tax_1']                                    = '税种1';
$lang['tax_2']                                    = '税种2';
$lang['total_with_tax']                           = '含税总计';
$lang['new_task_auto_assign_current_member']      = '创建新任务时自动分配给创建者';
$lang['new_task_auto_assign_current_member_help'] = '如任务关联到项目且创建者非项目成员时不适用';
$lang['copy_project_tasks_status']                = '任务状态';
$lang['tasks_summary']                            = '任务汇总';
$lang['vault']                                    = '密码库';
$lang['new_vault_entry']                          = '新建密码库条目';
$lang['server_address']                           = '登录地址';
$lang['port']                                     = '端口';
$lang['vault_username']                           = '用户名';
$lang['vault_password']                           = '密码';
$lang['vault_description']                        = '简短描述';
$lang['vault_entry']                              = '密码库条目';
$lang['no_port_provided']                         = '未提供';
$lang['view_password']                            = '查看密码';
$lang['security_reasons_re_enter_password']       = '出于安全考虑，请重新输入密码';
$lang['password_change_fill_notice']              = '仅需在修改密码时填写密码字段';
$lang['vault_password_user_not_correct']          = '密码错误，请重试';
$lang['no_vault_entries']                         = '未找到此客户的密码库条目';
$lang['vault_entry_created_from']                 = '此条目由%s创建';
$lang['vault_entry_last_update']                  = '最后更新者 %s';
$lang['vault_entry_visible_to_all']               = '对此客户有访问权限的所有员工可见';
$lang['vault_entry_visible_creator']              = '仅我可见(管理员除外)';
$lang['vault_entry_visible_administrators']       = '仅管理员可见';
$lang['my_reminders']                             = '我的提醒';
$lang['reminder_related']                         = '关联对象';
$lang['event_notification']                       = '通知';
$lang['days']                                     = '天';
$lang['reminder_notification_placeholder']        = '例如：提前30分钟';
$lang['event_color']                              = '活动颜色';
$lang['group_by_task']                            = '按任务分组';
$lang['save']                                     = '保存';
$lang['disable_languages']                        = '禁用语言';

# 版本 1.8.0
$lang['not_customer_viewed_invoice']                         = '编号为%s的发票已被查看';
$lang['not_customer_viewed_estimate']                        = '编号为%s的报价单已被查看';
$lang['not_customer_viewed_proposal']                        = '编号为%s的提案已被查看';
$lang['display_inline']                                      = '内联显示';
$lang['email_header']                                        = '预定义页眉';
$lang['email_footer']                                        = '预定义页脚';
$lang['exclude_proposal_from_client_area_with_draft_status'] = '从客户区域排除草稿状态的提案';
$lang['pusher_app_key']                                      = '应用密钥';
$lang['pusher_app_secret']                                   = '应用密钥';
$lang['pusher_app_id']                                       = '应用ID';
$lang['pusher_cluster_notice']                               = '留空使用默认集群';
$lang['pusher_enable_realtime_notifications']                = '启用实时通知';
$lang['task_is_overdue']                                     = '该任务已逾期';
$lang['this_year']                                           = '今年';
$lang['last_year']                                           = '去年';
$lang['customer_statement']                                  = '对账单';
$lang['customer_statement_for']                              = '%s的客户对账单';
$lang['account_summary']                                     = '账户摘要';
$lang['statement_beginning_balance']                         = '期初余额';
$lang['invoiced_amount']                                     = '发票金额';
$lang['amount_paid']                                         = '已付金额';
$lang['statement_from_to']                                   = '%s至%s';
$lang['customer_statement_info']                             = '显示%s至%s期间的所有发票和付款';
$lang['balance_due']                                         = '应付余额';
$lang['statement_heading_date']                              = '日期';
$lang['statement_heading_details']                           = '详情';
$lang['statement_heading_amount']                            = '金额';
$lang['statement_heading_payments']                          = '付款';
$lang['statement_heading_balance']                           = '余额';
$lang['statement_invoice_details']                           = '发票%s - 到期日%s';
$lang['statement_payment_details']                           = '付款(%s)至发票%s';
$lang['statement_bill_to']                                   = '致';
$lang['send_to_email']                                       = '发送至邮箱';
$lang['statement_sent_to_client_success']                    = '对账单已成功发送给客户';
$lang['statement_sent_to_client_fail']                       = '发送对账单时出错';
$lang['view_account_statement']                              = '查看账户对账单';
$lang['text_not_recommended_for_servers_limited_resources']  = '服务器资源有限时不建议使用（如共享主机）';
$lang['tasks_bull_actions_assign_notice']                    = '如果任务关联项目且分配对象非项目成员，将自动添加为成员';
$lang['company_information']                                 = '公司信息';
$lang['ticket_form']                                         = '工单表单';
$lang['ticket_form_subject']                                 = '工单主题';
$lang['ticket_form_name']                                    = '您的姓名';
$lang['ticket_form_email']                                   = '邮箱地址';
$lang['ticket_form_department']                              = '工单类型';
$lang['ticket_form_message']                                 = '工单描述';
$lang['ticket_form_priority']                                = '优先级';
$lang['ticket_form_service']                                 = '服务';
$lang['ticket_form_submit']                                  = '提交';
$lang['ticket_form_attachments']                             = '附件';
$lang['success_submit_msg']                                  = '感谢联系我们，我们将尽快回复您';
$lang['vault_entry_share_on_projects']                       = '在项目中共享该保险库条目';
$lang['project_shared_vault_entry_login_details']            = '查看客户网站登录详情';
$lang['iso_code']                                            = 'ISO代码';
$lang['estimates_not_invoiced']                              = '未支付';
$lang['show_on_ticket_form']                                 = '显示在工单表单';
$lang['cancel_upload']                                       = '取消上传';
$lang['show_table_export_button']                            = '显示表格导出按钮';
$lang['show_table_export_all']                               = '对所有员工显示';
$lang['show_table_export_admins']                            = '仅对管理员显示';
$lang['show_table_export_hide']                              = '对所有员工隐藏导出按钮';
$lang['task_created_by']                                     = '由%s创建';
$lang['validation_extension_not_allowed']                    = '不允许的文件扩展名';
$lang['allow_staff_view_proposals_assigned']                 = '允许员工查看分配给自己的提案';
$lang['task_users_working_on_tasks_multiple']                = '当前有%s正在处理该任务';
$lang['task_users_working_on_tasks_single']                  = '当前有%s正在处理该任务';

# 版本 1.9.0
$lang['estimated_hours']                               = '预计小时数';
$lang['two_factor_auth_failed_to_send_code']           = '发送两步验证码失败，SMTP设置可能未正确配置';
$lang['two_factor_auth_code_sent_successfully']        = '验证码已发送至%s，请验证登录';
$lang['enable_two_factor_authentication']              = '启用邮箱两步验证';
$lang['two_factor_authentication_info']                = '两步验证通过邮箱实现，启用前请确保SMTP设置正确。登录时将发送唯一验证码至邮箱。';
$lang['timesheets_overview_all_members_notice_admins'] = '所有员工的工时表概览仅对管理员可用';
$lang['two_factor_authentication']                     = '两步验证';
$lang['two_factor_authentication_code']                = '验证码';
$lang['admin_two_factor_auth_heading']                 = '验证码';
$lang['two_factor_code_not_valid']                     = '验证码无效';
$lang['back_to_login']                                 = '返回登录';
$lang['enter_activity']                                = '输入活动';
$lang['attach_files']                                  = '附加文件';
$lang['no_tags_used']                                  = '系统未使用标签';
$lang['exclude_completed_tasks']                       = '排除已完成任务';
$lang['modal_width_class']                             = '模态框宽度类';
$lang['contract_copy']                                 = '复制';
$lang['contract_copied_successfully']                  = '合同复制成功';
$lang['contract_copied_fail']                          = '合同复制失败';
$lang['project_marked_as_finished_to_contacts']        = '发送<b>项目标记为完成</b>邮件给客户联系人';
$lang['only_admins']                                   = '仅管理员';
$lang['new_notification']                              = '新通知！';
$lang['enable_desktop_notifications']                  = '启用桌面通知';
$lang['save_and_send']                                 = '保存并发送';
$lang['private']                                       = '私有';
$lang['task_created_at']                               = '创建于%s';
$lang['hide_notified_reminders_from_calendar']         = '从日历隐藏已通知的提醒';
$lang['last_active']                                   = '最后活跃';
$lang['open_ticket']                                   = '开放工单';
$lang['task_add_description']                          = '添加描述';
$lang['project_setting_create_tasks']                  = '创建任务';
$lang['project_setting_edit_tasks']                    = '编辑任务（仅限联系人创建的任务）';

# 版本 1.9.2
$lang['items_report']                            = '物品报告';
$lang['reports_item']                            = '物品';
$lang['quantity_sold']                           = '销售数量';
$lang['total_amount']                            = '总金额';
$lang['avg_price']                               = '平均价格';
$lang['item_report_paid_invoices_notice']        = '物品报告仅基于折扣和税前已付发票生成';
$lang['overview']                                = '概览';
$lang['timer_started_change_status_in_progress'] = '计时开始时将任务状态改为进行中（仅当任务状态为未开始时有效）';
$lang['company_info_format']                     = '公司信息格式（PDF和HTML）';
$lang['customer_info_format']                    = '客户信息格式（PDF和HTML）';
$lang['custom_field_info_format_embed_info']     = '可以通过添加合并字段将%s的自定义字段嵌入到PDF和HTML文档中，页面格式设置路径：%s';
$lang['transfer_lead_notes_to_customer']         = '将潜在客户备注转移至客户资料';
$lang['authorized_signature_text']               = '授权签名';
$lang['show_pdf_signature_invoice']              = '在发票PDF上显示签名';
$lang['show_pdf_signature_estimate']             = '在报价单PDF上显示签名';
$lang['signature']                               = '签名';
$lang['signature_image']                         = '签名图片';
$lang['insert_checklist_templates']              = '插入清单模板';
$lang['save_as_template']                        = '另存为模板';
$lang['invoice_item_add_edit_rate_currency']     = '费率 - %s';
$lang['total_files_deleted']                     = '已删除文件总数：%s';
$lang['invalid_transaction']                     = '无效交易，请重试';
$lang['payment_gateway_payu_money_key']          = 'PayU Money密钥';
$lang['payment_gateway_payu_money_salt']         = 'PayU Money盐值';
$lang['settings_paymentmethod_description']      = '网关仪表盘付款描述';

# 版本 1.9.3
$lang['default_ticket_reply_status']          = '回复工单时默认选择的状态';
$lang['ticket_add_response_and_back_to_list'] = '提交响应后返回工单列表';

# 版本 1.9.4
$lang['default_task_status']                               = '创建新任务时的默认状态';
$lang['custom_field_pdf_html_help']                        = '确保勾选' . $lang['custom_field_show_on_client_portal'] . '字段，以便客户在下载PDF或通过邮件接收PDF时能看到自定义字段';
$lang['auto']                                              = '自动';
$lang['email_queue']                                       = '邮件队列';
$lang['email_queue_enabled']                               = '启用邮件队列';
$lang['email_queue_skip_attachments']                      = '不将带附件的邮件加入队列？';
$lang['disable']                                           = '禁用';
$lang['enable']                                            = '启用';
$lang['auto_dismiss_desktop_notifications_after']          = 'X秒后自动关闭桌面通知（0表示禁用）';
$lang['proposal_info_format']                              = '提案信息格式（PDF和HTML）';
$lang['hide_tasks_on_main_tasks_table']                    = '在主任务表中隐藏项目任务（管理员区域）';
$lang['ticket_replies_order']                              = '工单回复顺序';
$lang['ticket_replies_order_notice']                       = '初始工单消息始终显示在最前';
$lang['invoice_cancelled_email_disabled']                  = '发票已取消。取消标记以启用客户邮件';
$lang['email_notifications']                               = '邮件通知';
$lang['invoice_activity_record_payment_email_to_customer'] = '记录付款，邮件已发送至：%s';
$lang['exclude_inactive']                                  = '排除非活跃';
$lang['disable_all']                                       = '全部禁用';
$lang['enable_all']                                        = '全部启用';
$lang['reccuring_invoice_option_gen_and_send']             = '生成并自动发送续期发票给客户';
$lang['reccuring_invoice_option_gen_unpaid']               = '生成未付发票';
$lang['reccuring_invoice_option_gen_draft']                = '生成草稿发票';
$lang['event_created_by']                                  = '该事件由%s创建';

# 版本 1.9.5
$lang['customers_assigned_to_me']              = '分配给我的客户';
$lang['bcc_all_emails']                        = '密送所有邮件至';
$lang['confirmation_of_identity']              = '身份确认';
$lang['accept_identity_confirmation']          = '接受时需要身份确认';
$lang['accepted_identity_info']                = '该%s由%s于%s从IP地址%s接受';
$lang['clear_this_information']                = '清除该信息';
$lang['new_task_auto_follower_current_member'] = '创建新任务时自动添加创建者为任务关注者';
$lang['expenses_report_net']                   = '净额（小计）';
$lang['expense_field_billable_help']           = '如可计费，可将%s添加至发票长描述';
$lang['task_biillable_checked_on_creation']    = '创建新任务时默认勾选可计费选项？（仅限管理员区域）';
$lang['pause_overdue_reminders']               = '暂停逾期提醒';
$lang['resume_overdue_reminders']              = '恢复逾期提醒';
# 信用票据
$lang['credit_notes']                                            = '信用票据';
$lang['credit_note']                                             = '信用票据';
$lang['credit_note_lowercase']                                   = '信用票据';
$lang['credit_note_not_found']                                   = '未找到信用票据';
$lang['credit_note_date']                                        = '信用票据日期';
$lang['credit_date']                                             = '日期';
$lang['settings_sales_next_credit_note_number']                  = '下一信用票据编号';
$lang['credit_note_number_prefix']                               = '信用票据编号前缀';
$lang['credit_note_number']                                      = '信用票据编号';
$lang['credit_note_number_exists']                               = '信用票据编号已存在';
$lang['show_shipping_on_credit_note']                            = '在信用票据上显示配送详情';
$lang['credit_note_number_decrement_on_delete']                  = '删除时递减信用票据编号';
$lang['credit_note_number_decrement_on_delete_help']             = '仅当是最后创建的信用票据时编号才会递减';
$lang['credit_note_status']                                      = '状态';
$lang['credit_note_status_open']                                 = '开放';
$lang['credit_note_status_closed']                               = '已关闭';
$lang['credit_note_status_void']                                 = '作废';
$lang['credit_note_mark_as_open']                                = '标记为开放';
$lang['new_credit_note']                                         = '新建信用票据';
$lang['credit_note_amount']                                      = '金额';
$lang['credit_note_remaining_credits']                           = '剩余金额';
$lang['credit_note_client_note']                                 = '备注';
$lang['invoices_credited']                                       = '已贷记发票';
$lang['apply_credits']                                           = '应用贷记';
$lang['x_credits_available']                                     = '可用贷记：%s';
$lang['credit_amount']                                           = '贷记金额';
$lang['credits_available']                                       = '可用贷记';
$lang['amount_to_credit']                                        = '贷记金额';
$lang['invoice_credits_applied']                                 = '贷记已成功应用至发票';
$lang['applied_credits']                                         = '已应用贷记';
$lang['credit_amount_bigger_then_invoice_balance']               = '贷记总额大于发票应付余额';
$lang['credit_amount_bigger_then_credit_note_remaining_credits'] = '贷记总额大于剩余贷记';
$lang['credited_invoices_not_found']                             = '未找到已贷记发票';
$lang['credit_invoice_number']                                   = '发票编号';
$lang['credits_used']                                            = '已用贷记';
$lang['credits_remaining']                                       = '剩余贷记';
$lang['amount_credited']                                         = '已贷记金额';
$lang['credits_applied_cant_delete_status_closed']               = '该信用票据状态为已关闭，需先删除贷记才能删除信用票据';
$lang['credits_applied_cant_delete_credit_note']                 = '该信用票据已应用贷记，需先删除贷记才能删除信用票据';
$lang['credit_note_pdf_heading']                                 = '信用票据';
$lang['show_status_on_pdf']                                      = '在PDF文档上显示%s状态';
$lang['show_pdf_signature_credit_note']                          = '在信用票据PDF上显示签名';
$lang['calendar_credit_note_reminder']                           = '信用票据提醒';
$lang['show_credit_note_reminders_on_calendar']                  = '信用票据提醒';
$lang['reminders']                                               = '提醒';
$lang['invoice_activity_applied_credits']                        = '应用了来自%s的贷记%s';
$lang['create_credit_note']                                      = '创建信用票据';
$lang['confirm_invoice_credits_from_credit_note']                = '从未付发票创建信用票据时，信用票据金额将应用于该发票。确认创建信用票据？';
$lang['credit_invoice_date']                                     = '发票日期';
$lang['apply_to_invoice']                                        = '应用至发票';
$lang['apply_credits_from']                                      = '应用来自%s的贷记';
$lang['credits_successfully_applied_to_invoices']                = '发票贷记应用成功';
$lang['credit_note_send_to_client_modal_heading']                = '发送信用票据给客户';
$lang['credit_note_sent_to_client_success']                      = '信用票据已成功发送给客户';
$lang['credit_note_sent_to_client_fail']                         = '发送信用票据时出错';
$lang['credit_note_no_invoices_available']                       = '该客户无可用发票';
$lang['show_total_paid_on_invoice']                              = '在发票上显示总付款';
$lang['show_credits_applied_on_invoice']                         = '在发票上显示已应用贷记';
$lang['show_amount_due_on_invoice']                              = '在发票上显示应付金额';
$lang['customer_profile_update_credit_notes']                    = '更新所有历史信用票据的配送/账单信息（已关闭票据不受影响）';
$lang['zip_credit_notes']                                        = '压缩信用票据';
$lang['statement_credit_note_details']                           = '信用票据%s';
$lang['statement_credits_applied_details']                       = '应用自信用票据%s-%s的贷记，支付%s';
$lang['credit_note_files']                                       = '信用票据文件';
$lang['credit_notes_report']                                     = '信用票据报告';
$lang['credit_note_set_reminder_title']     = '设置信用票据提醒';
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

# 版本 1.9.7
$lang['ticket_assigned']                          = '已分配';
$lang['dashboard_options']                        = '仪表盘选项';
$lang['reset_dashboard']                          = '重置仪表盘';
$lang['widgets']                                  = '小工具';
$lang['s_chart']                                  = '%s图表';
$lang['quick_stats']                              = '快速统计';
$lang['user_widget']                              = '用户小工具';
$lang['widgets_visibility_help_text']             = '仅当有足够数据时显示的小工具无法设置隐藏/显示选项。';
$lang['show_project_on_estimate']                 = '在报价单显示项目名称';
$lang['show_project_on_invoice']                  = '在发票显示项目名称';
$lang['show_project_on_credit_note']              = '在信用票据显示项目名称';
$lang['visible_tabs']                             = '可见标签页';
$lang['all']                                      = '全部';
$lang['view_widgetable_area']                     = '查看小工具区域';
$lang['hide_widgetable_area']                     = '隐藏小工具区域';
$lang['no_items_warning']                         = '请至少输入一个项目。';
$lang['item_forgotten_in_preview']                = '您是否忘记添加此项目？';
$lang['not_task_status_changed']                  = '%s - 任务状态变更为%s';
$lang['not_project_activity_task_status_changed'] = '任务状态变更';
$lang['reset']                                    = '重置';
$lang['save_message_as_predefined_reply']         = '将消息保存为预设回复';
$lang['inline_create_option']                     = '允许非管理员员工在%s创建/编辑区域创建%s？';
$lang['inline_create']                            = '行内创建';
$lang['inline_create_option_predefined_replies']  = '允许非管理员员工从工单消息保存预设回复';
$lang['reminders_view_none_admin']                = '显示您创建的提醒和分配给您的提醒。';
$lang['show_tabs_and_options']                    = '显示标签页和选项';
$lang['no_milestones_found']                      = '该项目无里程碑';
$lang['lead_is_contact_create_task']              = '如果邮件发送者已是客户，则创建任务并分配给负责员工。';
$lang['existing_customer']                        = '现有客户';
$lang['use_company_name_instead']                 = '改用公司名称';
$lang['customer_delete_transactions_warning']     = '该客户存在交易记录%s，您必须先删除交易记录或转移至其他客户才能执行此操作。';

# 版本 1.9.8
$lang['sending_email_contact_permissions_warning'] = '自动选择客户联系人失败。请确保客户有活跃联系人且已启用%s的邮件通知。';
$lang['help_leads_create_permission']              = '所有员工（标记为非员工的成员除外）均可创建潜在客户';
$lang['help_leads_edit_permission']                = '有权访问特定潜在客户的任何人都可编辑大部分信息';
$lang['triggers']                                  = '触发器';
$lang['notice_only_one_active_sms_gateway']        = '仅允许启用1个短信网关';
$lang['sms_trigger_disable_tip']                   = '留空内容可禁用特定触发器。';
$lang['tables']                                    = '表格';
$lang['only_project_tasks']                        = '仅项目相关任务';
$lang['download_all']                              = '全部下载';
$lang['settings_sales_credit_note_number_format']  = '信用票据编号格式';
$lang['sms_reminder_sent_to']                      = '短信提醒已发送至%s';
$lang['ideal_customer_statement_descriptor']       = '账单描述（显示在客户银行对账单）';
$lang['payment_received_awaiting_confirmation']    = '您的付款已收到，正在等待确认。';
$lang['discount_fixed_amount']                     = '固定金额';
$lang['timesheet_duration_instead']                = '改为输入时间时长';
$lang['timesheet_date_instead']                    = '改为设置开始和结束时间';
$lang['allow_non_admin_members_to_import_leads']   = '允许非管理员员工导入潜在客户';
$lang['project_hide_tasks_settings_info']          = '该项目的任务已从主任务表排除，您只能在此区域查看项目任务。';

# 版本 1.9.9
$lang['ticket_create_no_contact']            = '无联系人工单';
$lang['ticket_create_to_contact']            = '创建联系人工单';
$lang['showing_billable_tasks_from_project'] = '显示项目中的可计费任务';
$lang['no_billable_tasks_found']             = '未找到可计费任务';
$lang['help_leads_permission_view']          = '如未勾选此权限，员工仅能查看分配给自己、自己创建的及标记为公开的潜在客户';

# 版本 2.0.0
$lang['customers']                                              = $lang['clients'];
$lang['knowledge_base']                                         = $lang['kb_string'];
$lang['staff']                                                  = $lang['als_staff'];
$lang['checklist_templates']                                    = '任务清单模板';
$lang['emails_tracking']                                        = '邮件追踪';
$lang['no_tracked_emails_sent']                                 = '未发送追踪邮件';
$lang['tracked_emails_sent']                                    = '已发送追踪邮件';
$lang['tracked_email_date']                                     = '日期';
$lang['tracked_email_subject']                                  = '主题';
$lang['tracked_email_to']                                       = '收件人';
$lang['tracked_email_opened']                                   = '已打开';
$lang['tracked_email_not_opened']                               = '未打开';
$lang['not_viewed_yet']                                         = '客户尚未查看此%s';
$lang['undo']                                                   = '撤销';
$lang['sign_document_validation']                               = '请签署文件';
$lang['document_customer_signature_text']                       = '签名（客户）';
$lang['accept_identity_confirmation_and_signature_sign']        = '接受时需要数字签名和身份确认';
$lang['legal_bound_text']                                       = '法律约束文本';
$lang['e_signature_sign']                                       = '签署';
$lang['is_signed']                                              = '已签署';
$lang['is_not_signed']                                          = '未签署';
$lang['download']                                               = '下载';
$lang['view_pdf_in_new_window']                                 = '在新标签页查看PDF';
$lang['show_pdf_signature_contract']                            = '在合同PDF显示签名';
$lang['document_signed_successfully']                           = '您已成功签署本文件';
$lang['document_signed_info']                                   = '本文件由%s于%s签署，IP地址%s';
$lang['keep_signature']                                         = '保留客户签名';
$lang['view_contract']                                          = '查看合同';
$lang['summary']                                                = '摘要';
$lang['discussion']                                             = '讨论区';
$lang['general_information']                                    = '基本信息';
$lang['proposal_information']                                   = '提案信息';
$lang['contract_comments']                                      = '评论';
$lang['not_contract_comment_from_client']                       = '客户对合同%s的新评论...';
$lang['contract_files']                                         = '合同文件';
$lang['date_signed']                                            = '签署日期';
$lang['clear_signature']                                        = '清除签名';
$lang['recurring_has_ended']                                    = '此周期性%s已结束';
$lang['cycles_remaining']                                       = '剩余周期';
$lang['cycles_infinity']                                        = '无限期';
$lang['recurring_total_cycles']                                 = '总周期数';
$lang['cycles_passed']                                          = '已完成%s';
$lang['api_key_not_set_error_message']                          = 'API密钥未配置，点击链接配置：%s';
$lang['subscription']                                           = '订阅';
$lang['subscription_lowercase']                                 = '订阅';
$lang['subscriptions']                                          = '订阅';
$lang['tax_is_used_in_subscriptions_warning']                   = '无法更新此税种，因其被订阅使用';
$lang['credit_card']                                            = '信用卡';
$lang['update_credit_card']                                     = '更新信用卡';
$lang['credit_card_update_info']                                = '需要更新存档的信用卡信息？在此提供新信息。您的卡信息绝不会直接存储在我们的服务器上';
$lang['update_card_details']                                    = '更新卡片信息';
$lang['update_card_btn']                                        = '更新卡片';
$lang['subscription_name']                                      = '订阅名称';
$lang['subscriptions_description']                              = '描述';
$lang['subscribe']                                              = '订阅';
$lang['subscription_date']                                      = '日期';
$lang['first_billing_date']                                     = '首次账单日期';
$lang['allow_primary_contact_to_update_credit_card']            = '允许主要联系人更新存储的信用卡令牌？';
$lang['show_subscriptions_in_customers_area']                   = '在客户区域显示订阅？';
$lang['show_subscriptions_in_customers_area_help']              = '此选项仅对客户主要联系人有效';
$lang['subscription_sent_to_email_success']                     = '订阅已成功发送至邮箱';
$lang['subscription_sent_to_email_fail']                        = '发送订阅至邮箱失败';
$lang['new_subscription']                                       = '新建订阅';
$lang['subscription_status']                                    = '状态';
$lang['next_billing_cycle']                                     = '下次账单周期';
$lang['subscription_not_subscribed']                            = '未订阅';
$lang['send_subscription']                                      = '发送订阅';
$lang['subscription_will_send_to_primary_contact']              = '订阅将发送给主要联系人';
$lang['subscription_resumed']                                   = '订阅已成功激活';
$lang['subscription_canceled']                                  = '订阅已取消';
$lang['no_credit_card_found']                                   = '未找到信用卡';
$lang['cancel_immediately']                                     = '立即取消';
$lang['cancel_at_end_of_billing_period']                        = '在账单周期结束时取消';
$lang['view_subscription']                                      = '查看订阅';
$lang['subscription_future']                                    = '待生效';
$lang['subscription_active']                                    = '活跃中';
$lang['subscription_past_due']                                  = '逾期未付';
$lang['subscription_canceled']                                  = '已取消';
$lang['subscription_unpaid']                                    = '未支付';
$lang['billing_plan']                                           = '计费方案';
$lang['upcoming_invoice']                                       = '待生成发票';
$lang['resume_now']                                             = '立即恢复';
$lang['subscription_not_yet_subscribed']                        = '客户尚未订阅此服务';
$lang['subscription_is_canceled_no_resume']                     = '此订阅已取消且无法恢复';
$lang['subscription_will_be_canceled_at_end_of_billing_period'] = '此订阅将在账单周期结束时取消';
$lang['customer_successfully_subscribed_to_subscription']       = '感谢您订阅%s';
$lang['date_subscribed']                                        = '订阅日期';
$lang['reports']                                                = '报表';
$lang['subscriptions_summary']                                  = '订阅摘要';
$lang['calendar_only_assigned_tasks']                           = '仅显示分配给当前员工的任务';
$lang['invoice_activity_subscription_payment_succeeded']        = '订阅支付成功，邮件已发送至：%s';
$lang['mail_engine']                                            = '邮件引擎';
$lang['settings_require_client_logged_in_to_view_contract']     = '要求客户登录后才能查看合同';
$lang['privacy_policy']                                         = '隐私政策';
$lang['gdpr_terms_agree']                                       = '我同意<a href="%s" target="_blank">条款与条件</a>';
$lang['terms_and_conditions_validation']                        = '必须接受条款与条件才能继续';
$lang['gdpr']                                                   = '通用数据保护条例(GDPR)';
$lang['data_removal_request_sent']                              = '数据删除请求已成功发送';
$lang['gdpr_consents']                                          = '同意书';
$lang['gdpr_consent']                                           = '同意';
$lang['gdpr_consent_purpose']                                   = '目的';
$lang['gdpr_consent_opt_in']                                    = '选择加入';
$lang['gdpr_consent_opt_out']                                   = '选择退出';
$lang['gdpr_consent_agree']                                     = '我同意';
$lang['gdpr_consent_disagree']                                  = '我不同意';
$lang['view_consent']                                           = '查看同意书';
$lang['transfer_consent']                                       = '转移同意书';
$lang['view_public_form']                                       = '查看公开表单';
$lang['update_consent']                                         = '更新同意书';
$lang['consent_last_updated']                                   = '最后更新：%s';
$lang['showing_search_result']                                  = '显示搜索结果：%s';
$lang['per_page']                                               = '每页显示';
$lang['allow_staff_view_invoices_assigned']                     = '允许员工查看分配给的发票';
$lang['allow_staff_view_estimates_assigned']                    = '允许员工查看分配给的报价单';
$lang['gdpr_right_to_be_informed']                              = '知情权';
$lang['gdpr_right_of_access']                                   = '访问权';
$lang['gdpr_right_to_data_portability']                         = '数据可携权';
$lang['gdpr_right_to_erasure']                                  = '被遗忘权';
$lang['edit_my_information']                                    = '编辑我的信息';
$lang['export_my_data']                                         = '导出我的数据';
$lang['request_data_removal']                                   = '请求删除数据';
$lang['explanation_for_data_removal']                           = '数据删除说明';
$lang['briefly_describe_why_remove_data']                       = '简要说明删除数据的原因';
$lang['date_published']                                         = '发布日期';
$lang['view']                                                   = '查看';
$lang['customer_is_subscribed_to_subscription_info']            = '客户已订阅此服务';
$lang['save_last_order_for_tables']                             = '保存表格的最后排序';
$lang['date_created']                                           = '创建日期';

# 版本 2.0.1
$lang['company_logo_dark']                                      = '深色公司标志';
$lang['customers_register_require_confirmation']                = '客户注册后需管理员确认';
$lang['customer_requires_registration_confirmation']            = '需要注册确认';
$lang['confirm_registration']                                   = '确认注册';
$lang['customer_registration_successfully_confirmed']           = '客户注册已成功确认';
$lang['customer_register_account_confirmation_approval_notice'] = '感谢注册，您的账户正在等待审核，将很快确认。';
$lang['after_subscription_payment_succeeded']                   = '订阅支付成功后';
$lang['subscription_option_send_invoice']                       = '发送发票';
$lang['subscription_option_send_payment_receipt']               = '发送付款收据';
$lang['subscription_option_send_payment_receipt_and_invoice']   = '发送发票和付款收据';
$lang['subscription_option_do_nothing']                         = '不执行任何操作';
$lang['gdpr_not_enabled']                                       = '未启用GDPR';
$lang['enable_gdpr']                                            = '启用GDPR';
$lang['gdpr_right_to_rectification']                            = '更正权';
$lang['test_sms_config']                                        = '测试短信配置';
$lang['test_sms_message']                                       = '测试消息';
$lang['send_test_sms']                                          = '发送测试短信';
$lang['gdpr_short']                                             = 'GDPR';
$lang['allow_non_admin_staff_to_delete_ticket_attachments']     = '允许非管理员员工删除工单附件';

# 版本 2.1.0
$lang['contract_number']                                = '合同编号';
$lang['project_changing_status_recurring_tasks_notice'] = '您正在将状态更改为{0}，所有周期性任务将被取消';
$lang['not_contract_signed']                            = '主题为%s的合同已被客户签署';
$lang['the_number_sign']                                = '#';
$lang['not_new_ticket_reply']                           = '客户回复了工单 - %s';
$lang['receive_notification_on_new_ticket_replies']     = '客户回复工单时接收通知';
$lang['receive_notification_on_new_ticket_reply_help']  = '工单所属部门的所有员工将在客户回复工单时收到通知';
$lang['payment_gateway_enable_paypal']                  = '启用PayPal支付';
$lang['project_member']                                 = '项目成员';
$lang['contract_notes']                                 = '备注';
$lang['contract_add_note']                              = '添加备注';

# 版本 2.1.1
$lang['frequency']              = '频率';
$lang['frequency_every']        = '每%s';
$lang['last_invoice_date']      = '最后发票日期';
$lang['next_invoice_date_list'] = '下次发票日期';
$lang['enter_new_card']         = '输入新卡片';

# 版本 2.2.0
$lang['save_and_record_payment']                                     = '保存并记录付款';
$lang['choose_from_google_drive']                                    = '从Google Drive选择';
$lang['open_in_google']                                              = '在Google中打开';
$lang['google_picker']                                               = 'Google选择器';
$lang['enable_google_picker']                                        = '启用Google选择器';
$lang['google_api_client_id']                                        = 'Google API客户端ID';
$lang['subtract_tax_total_from_amount']                              = '从金额中扣除税金总额(%s)';
$lang['expense_subtract_info_text']                                  = '当您输入的费用金额已含税时使用此选项(税后金额)';
$lang['company_exists_info']                                         = '检测到已存在名为%s的客户，如仍需创建可忽略此提示';
$lang['import_items']                                                = '导入项目';
$lang['total_items_deleted']                                         = '已删除项目总数：%s';
$lang['billable_amount']                                             = '可计费金额';
$lang['last_child_invoice_date']                                     = '最后子发票日期';
$lang['good_morning']                                                = '早上好';
$lang['good_afternoon']                                              = '下午好';
$lang['good_evening']                                                = '晚上好';
$lang['description_in_invoice_item']                                 = '在发票项目中包含描述';
$lang['description_in_invoice_item_help']                            = '适用于需要在订阅发票中包含附加信息的情况，例如订阅包含的内容';
$lang['ticket_reminders']                                            = '提醒';
$lang['ticket_set_reminder_title']                                   = '设置工单提醒';
$lang['calendar_ticket_reminder']                                    = '工单提醒';
$lang['email_verification_required']                                 = '需要邮箱验证';
$lang['email_verification_required_message']                         = '为使用门户所有功能，请先验证您的邮箱';
$lang['email_verification_required_message_mail']                    = '我们已发送验证邮件，如未收到请检查垃圾箱或<a href="%s">点击此处</a>重新发送';
$lang['email_already_verified']                                      = '您的邮箱已验证';
$lang['invalid_verification_key']                                    = '无效的验证密钥';
$lang['verification_key_expired']                                    = '验证密钥已过期';
$lang['email_successfully_verified']                                 = '您的邮箱已验证成功';
$lang['email_successfully_verified_but_required_admin_confirmation'] = '邮箱验证成功，待管理员手动确认后即可登录';
$lang['email_verification_mail_sent_successully']                    = '验证邮件已发送';
$lang['create_reminder']                                             = '创建提醒';
$lang['no_reminders_for_this_task']                                  = '此任务无提醒';
$lang['reminder_for']                                                = '%s的提醒 - %s';
$lang['no_description_provided']                                     = '未提供描述';
$lang['pay_with_card']                                               = '信用卡支付';
$lang['not_customer_uploaded_file']                                  = '客户资料中上传了新文件';

# 版本 2.2.1
$lang['customer_files_info_message'] = '来自项目和任务的客户相关文件不在此表中显示';
$lang['ticket_import_reply_only']    = '仅导入实际工单回复(不含引用/转发内容)';
$lang['learn_more']                  = '了解更多';
$lang['sales_item']                  = '销售项目';

# 版本 2.3.0
$lang['modules']                                 = '模块';
$lang['module']                                  = '模块';
$lang['module_description']                      = '描述';
$lang['module_activate']                         = '激活';
$lang['module_deactivate']                       = '停用';
$lang['module_uninstall']                        = '卸载';
$lang['module_upgrade_database']                 = '升级数据库';
$lang['module_settings']                         = '设置';
$lang['module_version']                          = '版本 %s';
$lang['module_by']                               = '由 %s 开发';
$lang['staff_which_are_using_role']              = '使用此角色的员工';
$lang['copy']                                    = '复制';
$lang['read_more']                               = '查看更多';
$lang['show_less']                               = '收起';
$lang['project_progress_text']                   = '项目进度';
$lang['timer_not_stopped_yet']                   = '计时器尚未停止';
$lang['refunds']                                 = '退款';
$lang['refund']                                  = '退款';
$lang['refund_amount']                           = '退款金额';
$lang['not_refunds_found']                       = '未找到退款记录';
$lang['refunds_applied_cant_delete_credit_note'] = '该信用票据已关联退款记录，需先删除退款才能删除票据';

# 版本 2.3.2
$lang['create_recurring_from_child_error_message'] = '无法设为循环%s，因为该%s是另一个循环%s的子项';
$lang['statement_credit_note_refund']              = '信用票据退款 - %s';
$lang['no_validation']                             = '不验证';
$lang['lead_unique_validation_on']                 = '对以下字段执行潜在客户查重验证:';
$lang['phonenumber_exists']                        = '电话号码已存在';
$lang['company_exists']                            = '公司已存在';
$lang['website_exists']                            = '网站已存在';
$lang['send_payment_receipt_to_client']            = '发送付款凭证给客户';
$lang['payment_sent_successfully']                 = '付款凭证发送成功';
$lang['payment_sent_failed']                       = '付款凭证发送失败';

# 版本 2.3.5
$lang['tags_update_replace_warning'] = '部分标签未更新，因标签名称已存在';
$lang['attach_statement']            = '附加客户对账单';

# 版本 2.4.0
$lang['delete_credit_card']                        = '删除卡片';
$lang['delete_credit_card_info']                   = '存在有效订阅时无法删除信用卡';
$lang['credit_card_successfully_deleted']          = '信用卡删除成功';
$lang['subscription_incomplete']                   = '未完成';
$lang['subscription_incomplete_expired']           = '未完成已过期';
$lang['credit_card_short']                         = '卡片';
$lang['webhook_created']                           = 'Webhook创建成功';
$lang['subscriptions_terms_info']                  = '输入客户条款，将在订阅前展示给客户';
$lang['subscription_complete_payment']             = '完成付款';
$lang['subscription_is_subscription_is_expired']   = '该订阅已过期';
$lang['subscription_plan_currency_does_not_match'] = '所选方案货币与下方货币不匹配';
$lang['subscription_first_billing_date_info']      = '留空将使用客户订阅日期。必须选择未来日期，如日期已过但客户未订阅，将使用实际订阅日期';
$lang['stripe_subscription_select_plan']           = '选择Stripe方案';

# 版本 2.4.1
$lang['contract_content_permission_edit_warning'] = '您当前权限无法编辑合同内容，请联系管理员';
$lang['mark_as_signed']                 = '标记为已签署';
$lang['unmark_as_signed']               = '取消签署标记';
$lang['marked_as_signed']               = '已标记为签署';
$lang['contract_marked_as_signed_info'] = '该合同已手动标记为签署';
$lang['save_and_send_later']            = '保存并稍后发送';
$lang['schedule']                       = '定时发送';
$lang['schedule_email_for']             = '为%s定时发送邮件';
$lang['schedule_date']                  = '请选择发送时间';
$lang['email_scheduled_successfully']   = '邮件定时发送设置成功';
$lang['invoice_will_be_sent_at']        = '发票将于%s发送';

# 版本 2.5.0
$lang['recaptcha_ignore_ips']            = '忽略IP地址';
$lang['recaptcha_ignore_ips_info']       = '输入逗号分隔的IP地址，这些地址将跳过reCaptcha验证';
$lang['show_task_reminders_on_calendar'] = '任务提醒';
$lang['contracts_about_to_expire']       = '即将到期合同';
$lang['no_contracts_about_to_expire']    = '未来%s天内没有即将到期的合同';
$lang['lead_value']                      = '潜在客户价值';
$lang['lead_value_tooltip']              = '将使用基础货币';
$lang['leads_dt_lead_value']             = '价值';
$lang['leads_canban_lead_value']         = '客户价值: %s';
$lang['lead_add_edit_lead_value']        = '潜在客户价值';

# 版本 2.6.0
$lang['gantt_view_day']   = '日视图';
$lang['gantt_view_week']  = '周视图';
$lang['gantt_view_month'] = '月视图';
$lang['gantt_view_year']  = '年视图';

# 版本 2.7.0
$lang['hour_of_day_perform_tasks_reminder_notification_help'] = '24小时制(如9表示上午9点，15表示下午3点)，用于循环任务、任务提醒等';
$lang['clients_nav_contacts']                                 = '联系人';
$lang['clients_my_contacts']                                  = '我的联系人';
$lang['clients_my_contact']                                   = '联系人';
$lang['new_contact']                                          = '增加联系人';
$lang['customer_contact']                                     = '我的联系人';
$lang['clients_contact_added']                                = '联系人添加成功';
$lang['clients_contact_updated']                              = '联系人更新成功';
$lang['allow_primary_contact_to_manage_other_contacts']       = '允许主要联系人管理其他客户联系人';
$lang['contact_form_validation_is_unique']                    = '系统中已存在使用该{field}的联系人';
$lang['invoice_number_not_applied_on_draft']                  = '发票保存为草稿时不应用编号，将在发送给客户或标记为已发送时分配编号';
$lang['two_factor_authentication_disabed']                    = '已禁用';
$lang['enable_google_two_factor_authentication']              = '启用Google身份验证器';
$lang['set_google_two_factor_authentication_failed']          = '保存验证设置失败，请重试';
$lang['enter_two_factor_auth_code_from_mobile']               = '输入身份验证器应用中的验证码';
$lang['staff_two_factor_authentication']                      = '双重认证';
$lang['google_authentication_code']                           = '输入验证器应用中的代码';
$lang['set_two_factor_authentication_successful']             = '双重认证设置更新成功';
$lang['set_two_factor_authentication_failed']                 = '无法更新双重认证设置';
$lang['google_2fa_code_valid']                                = '验证成功';
$lang['google_2fa_code_invalid']                              = '验证码无效，请重试';
$lang['google_2fa_scan_qr_guide']                             = '使用手机Google身份验证器扫描下方二维码，然后在下方输入应用中生成的验证码';
$lang['google_2fa_manul_input_secret']                        = '手动输入密钥';

# 版本 2.7.1
$lang['templates']                                   = '模板';
$lang['add_template']                                = '添加模板';
$lang['edit_template']                               = '编辑模板';
$lang['template_added']                              = '模板添加成功';
$lang['template_updated']                            = '模板更新成功';
$lang['template_name']                               = '模板标题';
$lang['template_content']                            = '模板内容';
$lang['insert_template']                             = '插入模板';
$lang['items_table_amounts_exclude_currency_symbol'] = '金额列不显示货币符号';

$lang['multiplies_of']               = '时间单位';
$lang['round_off_task_timer_option'] = '任务计时取整方式';
$lang['task_timer_dont_round_off']   = '不取整';
$lang['task_timer_round_up']         = '向上取整';
$lang['task_timer_round_down']       = '向下取整';
$lang['task_timer_round_nearest']    = '四舍五入';
$lang['calendar_task_reminder']      = '任务提醒';
$lang['projects_chart']              = '项目图表';
$lang['overdue_by_days']             = '已逾期%s天';

$lang['two_checkout_payment_processing'] = '支付处理中，成功后将通知您';
$lang['two_checkout_payment_cancelled']  = '支付已取消';
$lang['two_checkout_merchant_code']      = '商户代码';
$lang['two_checkout_secret_Key']         = '安全密钥';
$lang['two_gateway_webhook_notice']      = '2Checkout的IPN端点是( %s )';
$lang['something_went_wrong']            = '出错了，请重试';
$lang['imap_folder']                     = '邮件文件夹';
$lang['retrieve_folders']                = '获取文件夹';
$lang['email_to_ticket_config']          = '邮件转工单配置';

# 版本 2.8.0
$lang['enable_support_menu_badges']              = '启用支持菜单徽章';
$lang['item_copy_success']                       = '项目复制成功';
$lang['item_copy_fail']                          = '项目复制失败';
$lang['attach_invoice_to_payment_receipt_email'] = '发送付款回执邮件时附加发票PDF';

$lang['estimate_request']                                  = '估价请求';
$lang['estimate_requests']                                 = '估价请求';
$lang['estimate_request_form']                             = '估价请求表单';
$lang['acs_estimate_request']                              = '估价请求';
$lang['acs_estimate_request_forms']                        = '表单';
$lang['estimate_request_forms']                            = '估价请求表单';
$lang['estimate_request_notify_staff']                     = '通知员工';
$lang['estimate_request_notify_when_submitted']            = '提交估价请求时通知';
$lang['estimate_request_assignee']                         = '负责人';
$lang['estimate_request_notify_roles']                     = '通知角色';
$lang['custom_field_estimate_request']                     = '估价请求';
$lang['new_estimate_request_submitted_from_form']          = '新估价请求通过表单提交 - %s';
$lang['acs_estimate_request_statuses_submenu']             = '状态';
$lang['estimate_request_dt_email']                         = '邮箱';
$lang['estimate_request_dt_assigned']                      = '分配人';
$lang['estimate_request_dt_status']                        = '状态';
$lang['estimate_request_dt_datecreated']                   = '创建时间';
$lang['estimate_request_attachments']                      = '附件';
$lang['estimate_request_new_status']                       = '新状态';
$lang['estimate_request_status_table_name']                = '状态名称';
$lang['estimate_request_table_total']                      = '总请求: %s';
$lang['estimate_request_statuses_not_found']               = '未找到估价请求状态';
$lang['estimate_request_status_add_edit_name']             = '状态名称';
$lang['estimate_request_status_color']                     = '颜色';
$lang['estimate_request_status_add_edit_order']            = '状态排序';
$lang['estimate_request_status']                           = '状态';
$lang['estimate_request_date_added']                       = '创建日期';
$lang['estmate_request_tags_updated']                      = '标签已更新';
$lang['not_estimate_request_activity_status_updated']      = '%s 将估价请求状态从 %s 更新为 %s';
$lang['estimate_request_lowercase']                        = '估价请求';
$lang['estimate_request_form_email_field_is_required']     = '表单必须包含邮箱字段';
$lang['estimate_request_form_email_field_set_to_required'] = '将邮箱字段设为必填';
$lang['not_delete_estimate_request_default_status']        = '无法删除系统默认估价请求状态';
$lang['mark_estimate_request_as']                          = '标记为 %s';
$lang['estimate_request_updated']                          = '估价请求已更新';
$lang['convert_estimate_request']                          = '转换估价请求';
$lang['estimate_request_client_firstname']                 = '名';
$lang['estimate_request_client_lastname']                  = '姓';
$lang['estimate_request_email']                            = '邮箱';
$lang['estimate_request_for_lead']                         = '潜在客户';
$lang['estimate_request_for_customer']                     = '客户';
$lang['estimate_request_related']                          = '关联对象';
$lang['estimate_request_client_created_success']           = '估价请求客户创建成功';
$lang['estimate_request_assigned']                         = '分配员工';
$lang['not_estimate_request_activity_assigned_updated']    = '估价请求已分配给 %s';
$lang['estimate_request_status_lowercase']                 = '估价请求状态';
$lang['estimate_request_assigned_to_staff']                = '估价请求已分配给您';

$lang['activity_due_reminder_is_sent']   = '%s 发送了到期提醒';
$lang['invoice_due_notice_before']       = '到期前X天发送提醒';
$lang['overdue_notices']                 = '逾期通知';
$lang['invoice_overdue_notices_info']    = '发票逾期后会发送逾期通知';
$lang['due_reminders']                   = '到期提醒';
$lang['due_reminders_for_invoices_info'] = '到期提醒会发送给未付或部分支付的发票，提醒客户在到期前付款';
$lang['expenses_list_made_payment_by']   = '付款人: %s';

# 版本 2.8.2
$lang['hide_task_checklist_items_completed'] = '隐藏已完成项';
$lang['show_task_checklist_items_completed'] = '显示已完成项 %s';
$lang['task_checklist_assign']               = '分配员工';
$lang['task_checklist_assigned']             = '分配给 %s';

# 版本 2.8.2
$lang['custom_field_add_edit_default_value'] = '默认值';

# 版本 2.8.3
$lang['projects_send_contact_notification']                   = '发送联系人通知';
$lang['project_send_all_contacts_with_notifications_enabled'] = '发送给所有启用了项目通知的联系人';
$lang['project_do_not_send_contacts_notifications']           = '不发送通知';
$lang['project_send_specific_contacts_with_notification']     = '特定联系人';
$lang['project_contacts_to_notify']                           = '选择要通知的联系人';
$lang['contract_signed_by']                                   = '签署人姓名';
$lang['contract_signed_date']                                 = '签署日期';
$lang['contract_signed_ip']                                   = 'IP地址';
$lang['show_estimate_request_in_customers_area']              = '在客户区域显示估价请求链接？';
$lang['customers_estimate_request_link_text']                 = '请求报价';
$lang['total_expenses_deleted']                               = '已删除费用总数：%s';
$lang['estimate_convert_to_project']                          = '转为项目';
$lang['estimate_items_convert_to_tasks']                      = '将转为任务的条目';
$lang['proposal_signed_by']                        = '签署人姓名';
$lang['proposal_signed_date']                      = '签署日期';
$lang['proposal_signed_ip']                        = 'IP地址';
$lang['hide_milestone_from_customer']              = '对客户隐藏';
$lang['hide_milestone_from_customer_help']         = '选择对客户隐藏里程碑后，整个里程碑及其相关任务都将隐藏';
$lang['automatically_stop_task_timer_after_hours'] = '自动停止任务计时器(小时)';

# Version 2.9.0
$lang['home_payment_records']                                  = '收款记录';
$lang['weekly']                                                = '每周';
$lang['monthly']                                               = '每月';
$lang['failed_to_update_timesheet']                            = '时间表更新失败';
$lang['permission_create_timesheets']                          = '创建时间表';
$lang['permission_edit_timesheets']                            = '编辑时间表 (全局)';
$lang['permission_edit_own_timesheets']                        = '编辑自己的时间表';
$lang['permission_delete_timesheets']                          = '删除时间表 (全局)';
$lang['permission_delete_own_timesheets']                      = '删除自己的时间表';
$lang['permission_edit_milestones']                            = '编辑里程碑';
$lang['permission_delete_milestones']                          = '删除里程碑';
$lang['add_timesheet']                                         = '添加时间表';
$lang['submit_button_bg_color']                                = '提交按钮背景颜色';
$lang['submit_button_text_color']                              = '提交按钮文字颜色'; // 修正了原文的 'background text' 为更合理的 '文字颜色'
$lang['automatically_assign_ticket_to_first_staff_responding'] = '是否将工单自动分配给第一个回复的员工？';

# Version 2.9.1
$lang['contract_signed_not_all_fields_editable'] = '此合同已签署，因此在签名移除前并非所有字段都可编辑。';
$lang['form_submit_success_action']              = '访客提交此表单后应执行的操作';
$lang['form_submit_success_display_thank_you']   = '显示感谢信息';
$lang['form_submit_success_redirect_to_website'] = '重定向到其他网站';
$lang['form_submit_website_url']                 = '网站 URL';
$lang['lead_name_prefix']                        = '线索名称前缀';
$lang['lead_name_prefix_help']                   = '对于通过表单新创建的线索，其名称将添加此前缀文本以便于识别。';

# Version 2.9.2
$lang['open_google_map']                                  = '在谷歌地图中打开';
$lang['milestone_start_date']                             = '开始日期';
$lang['send_reminder_for_completed_but_not_billed_tasks'] = '发送关于已完成但未计费任务的邮件提醒';
$lang['staff_to_notify_completed_but_not_billed_tasks']   = '选择要接收提醒的员工';
$lang['reminder_for_completed_but_not_billed_tasks_days'] = '选择每周发送提醒的日期';
$lang['notifications']                                    = '通知';
$lang['merged']                                           = '已合并';
$lang['ticket_merged_notice']                             = '此工单已合并到 ID 为 %s 的工单中'; // 注意：%s 是占位符，代表工单ID
$lang['view_primary_ticket']                              = '查看主要工单';
$lang['merge_tickets']                                    = '合并工单';
$lang['primary_ticket']                                   = '主要工单';
$lang['primary_ticket_status']                            = '主要工单状态';
$lang['tickets_merged']                                   = '工单合并成功';
$lang['cannot_merge_into_merged_ticket']                  = '已合并到其他工单的工单不能用作主要工单';
$lang['merge_ticket_ids_field_label']                     = '要合并的工单 #';
$lang['merge_ticket_ids_field_placeholder']               = '例如：5 或 5,6';
$lang['cannot_merge_tickets_with_ids']                    = '工单 %s 已合并到另一个工单中'; // %s 是占位符，代表工单ID
$lang['ticket_merged_tickets_header']                     = '此工单包含 %s 个已合并的工单'; // %s 是占位符，代表数量
$lang['batch_payments_table_invoice_number_heading']      = '发票编号';
$lang['batch_payments_table_payment_date_heading']        = '付款日期';
$lang['batch_payments_table_payment_mode_heading']        = '付款方式';
$lang['batch_payments_table_transaction_id_heading']      = '交易 ID';
$lang['batch_payments_table_amount_received_heading']     = '已收金额';
$lang['batch_payments_table_invoice_balance_due']         = '发票未付余额';
$lang['add_batch_payments']                               = '添加付款';
$lang['batch_payment_filter_by_customer']                 = '按客户筛选发票';
$lang['batch_payments']                                   = '批量付款';
$lang['batch_payment_added_successfully']                 = '您已成功添加 %s 笔付款'; // %s 是占位符，代表数量
$lang['batch_payments_send_invoice_payment_recorded']     = '不向客户联系人发送“发票付款已记录”邮件';
$lang['invoice_batch_payments']                           = '批量付款';
$lang['staff_is_currently_replying']                      = '%s 正在回复此工单。'; // %s 是占位符，代表员工姓名

# 版本 2.9.4
$lang['permission_view_timesheet_report']                  = '查看工时表报告';
$lang['timesheets_overview_all_members_notice_permission'] = '查看所有员工的工时表概览仅限具有查看工时表报告权限的员工和管理员';
$lang['show_project_on_proposal']                          = '在提案中显示项目名称';
$lang['ticket_reports_staff']                              = '员工';
$lang['ticket_reports_total_assigned']                     = '总分配工单数';
$lang['ticket_reports_open_tickets']                       = '未解决工单';
$lang['ticket_reports_closed_tickets']                     = '已关闭工单';
$lang['ticket_reports_replies_to_tickets']                 = '工单回复数';
$lang['ticket_reports_average_reply_time']                 = '平均回复时间';
$lang['home_tickets_report']                               = '员工工单报告数据统计';
$lang['ticket_reports_average_reply_time_help']            = '从分配工单起的平均响应时间';
$lang['created_by']                                        = '创建人';

$lang['staff_related_ticket_notification_to_assignee_only']      = '仅向工单分配人发送员工相关工单通知';
$lang['staff_related_ticket_notification_to_assignee_only_help'] = '如果设为是且工单未分配人员，通知将发送给工单所属部门的所有员工';

$lang['import_expenses']                                         = '导入支出';
$lang['show_pdf_signature_proposal']                             = '在提案PDF中显示签名';
$lang['enable_honeypot_spam_validation']                         = '启用Honeypot反垃圾验证';

# 版本 3.0.0
$lang['contracts_view_marked_as_signed'] = '标记为已签署';
$lang['contracts_view_signed']           = '已签署';
$lang['contracts_view_not_expired']      = '未过期';
$lang['contract_information']            = '合同信息';
$lang['receipt']                         = '收据';
$lang['search_proposals']                = '搜索提案';
$lang['search_estimates']                = '搜索报价单';
$lang['quick_create']                    = '快速创建';

# 版本 3.0.5
$lang['subscription_last_sent']                             = '最后发送时间';
$lang['automatically_set_logged_in_staff_sales_agent']      = '自动将登录员工设为销售代理';
$lang['automatically_set_logged_in_staff_sales_agent_help'] = '适用于：报价单、发票、提案';
$lang['permission_view_all_templates']                      = '查看所有模板';
$lang['settings_contract_sign_reminder_every_days_info']    = '合同首次发送给客户后，系统会定期向客户联系人发送签署提醒，合同签署后自动停止发送。';
$lang['contract_sign_reminder_every_days']                  = '发送签署提醒间隔(天)';
$lang['contract_sign_reminders']                            = '签署提醒';
$lang['payment_gateway_fee_percentage']                     = '百分比费用';
$lang['payment_gateway_fee_fixed']                          = '固定费用';
$lang['payment_attempt_amount']                             = '发票总额';
$lang['payment_attempt_fee']                                = '支付手续费';
$lang['feature']                                            = '功能特性';
$lang['capabilities']                                       = '功能权限';

# 版本 3.1.0
$lang['filter_boolean_yes'] = '是';
$lang['filter_boolean_no'] = '否';
$lang['filter_matchtype_and'] = '且';
$lang['filter_matchtype_or'] = '或';
$lang['filter_share'] = '与团队成员共享？';
$lang['filter_mark_as_default'] = '设为默认';
$lang['filter_unmark_as_default'] = '取消默认';
$lang['filter_save'] = '保存筛选';
$lang['filter_name'] = '筛选名称';
$lang['filter_apply'] = '应用';
$lang['filter_apply_and_save'] = '应用并保存';
$lang['filter_use_dynamic_dates'] = '使用动态日期';
$lang['filter_new'] = '新建筛选';
$lang['filter_clear_active'] = '清除筛选条件';
$lang['filter_edit'] = '编辑';
$lang['filter_create'] = '创建筛选';
$lang['filter_update'] = '更新筛选';
$lang['filter_delete'] = '删除筛选';
$lang['filter_cannot_be_shared'] = '此筛选包含可能并非所有用户都可用的规则，因此无法与团队成员共享。';
$lang['filter_add_rule'] = '添加规则';
$lang['filter_operator_is_empty'] = '为空';
$lang['filter_operator_is_not_empty'] = '不为空';
$lang['filter_operator_equal'] = '等于';
$lang['filter_operator_not_equal'] = '不等于';
$lang['filter_operator_begins_with'] = '开头为';
$lang['filter_operator_not_begins_with'] = '开头不为';
$lang['filter_operator_contains'] = '包含';
$lang['filter_operator_not_contains'] = '不包含';
$lang['filter_operator_ends_with'] = '结尾为';
$lang['filter_operator_not_ends_with'] = '结尾不为';
$lang['filter_operator_in'] = '在...中';
$lang['filter_operator_not_in'] = '不在...中';
$lang['filter_operator_between'] = '在...之间';
$lang['filter_operator_not_between'] = '不在...之间';
$lang['filter_operator_dynamic'] = '动态';
$lang['filter_operator_greater'] = '大于';
$lang['filter_operator_greater_or_equal'] = '大于等于';
$lang['filter_operator_less'] = '小于';
$lang['filter_operator_less_or_equal'] = '小于等于';
$lang['no_filters_found'] = '没有保存的筛选，请创建新筛选。';
$lang['staff_logged_in_public_ticket_warning'] = '您当前以员工身份登录，如需以员工身份回复工单，请通过管理区域进行操作。';

# Version 3.1.2
$lang['allow_non_admin_members_to_delete_tickets_and_replies'] = '允许非管理员员工删除工单和回复';
$lang['default_filter_info'] = '该筛选仅对您的账户标记为默认。';
$lang['required_register_fields'] = '注册必填字段（客户区域）';

# Version 3.1.6
$lang['allow_non_admin_members_to_edit_ticket_messages'] = '允许非管理员员工删除工单和回复';
$lang['proposal_auto_convert_to_invoice_on_client_accept'] = '客户接受后自动将提案转为发票（仅限关联客户的提案）';
$lang['invoice_activity_auto_converted_from_proposal'] = '发票自动从提案生成，提案编号：%s';
$lang['clients_proposal_invoiced_successfully'] = '感谢接受提案。请查看为该提案生成的发票';
# Version 3.2.0
$lang['ideal_payment_failure_message'] = '支付失败或已取消。';
$lang['ideal_api_publishable_key'] = 'Stripe 公开密钥';
$lang['ideal_api_secret_key'] = 'Stripe API 密钥';
$lang['filters'] = '筛选';
$lang['view_financial_stats'] = '查看财务统计';
$lang['timesheet_summary'] = '工时表摘要';
$lang['timesheet_detailed_overview'] = '已记录工时表和工时的详细概览';
$lang['ticket_request_history'] = '请求历史';
$lang['integrations'] = '集成功能';
$lang['settings_group_other'] = '其他';
$lang['settings_group_configure_features'] = '功能配置';
$lang['disable_ticket_public_url'] = '禁用工单公开链接';
# Version 3.2.1
$lang['ideal_gateway_keys_not_configured'] = '未配置 iDEAL 支付网关 API。';
$lang['ideal_gateway_cannot_be_activated_keys_not_configured'] = '因未配置 Stripe 公开密钥/API 密钥，无法激活 iDEAL 支付网关。';
$lang['company_logo_light'] = '公司浅色LOGO';
$lang['welcome_back_sign_in'] = '欢迎回来，请登录您的仪表盘';
# Version 3.3.0
$lang['settings_ai'] = '人工智能';
$lang['settings_group_ai'] = 'AI集成';
$lang['settings_ai_general'] = '通用设置';
$lang['settings_ai_provider'] = '服务提供商';
$lang['settings_ai_system_prompt'] = '系统提示词';
$lang['settings_ai_system_prompt_help'] = '提供关于您公司和支持工单处理方式的背景信息，以帮助AI生成更准确的回复。';
$lang['settings_ai_enable_ticket_summarization'] = '启用工单摘要功能';
$lang['settings_ai_enable_ticket_summarization_help'] = '启用AI工单摘要功能可自动生成工单对话的摘要。';
$lang['settings_ai_enable_ticket_reply_suggestions'] = '启用工单回复建议';
$lang['settings_ai_enable_ticket_reply_suggestions_help'] = '启用AI工单回复建议可基于工单对话自动生成给客户的回复。';
$lang['ticket_summarization_disabled'] = '工单摘要功能已禁用';
$lang['ticket_reply_suggestion_disabled'] = '工单回复建议已禁用';

$lang['openai_api_key']              = 'OpenAI API Key';
$lang['openai_model']                = 'OpenAI 模型';
$lang['openai']                      = 'OpenAI';
$lang['ticket_summarize_ai']         = '摘要 (AI)';
$lang['ticket_suggest_reply']        = '建议回复 (AI)';
$lang['ticket_rephrase_reply']       = '改写 (AI)';
$lang['ai_ticket_summary']           = '工单摘要 (AI)';
$lang['openai_max_token']            = '最大输出 Token';
$lang['warn_ticket_thread_too_long'] = '该工单包含大量信息。处理如此长的工单可能需要更多输入 Token，这可能会影响响应的准确性或效率。是否要继续？';
$lang['text_enhancement_make_friendly'] = '更友好';
$lang['text_enhancement_make_formal']   = '更正式';
$lang['text_enhancement_make_polite']   = '更礼貌';

$lang['openai_fine_tuning']          = 'OpenAI 微调';
$lang['openai_fine_tuning_description'] = '使用您的知识库和预定义回复内容微调 OpenAI 模型，以获得更准确的响应。';
$lang['knowledge_base_data']         = '知识库数据';
$lang['fine_tuning_source_data']     = '微调源数据';
$lang['available_articles']          = '可用文章';
$lang['fine_tuning_min_requirements'] = '进行微调需要至少 10 篇知识库文章或预定义回复。';
$lang['fine_tuning_min_articles']    = '您需要至少 10 篇知识库文章才能进行微调。'; # 保留英文版本键，中文化
$lang['start_fine_tuning']           = '开始微调';
$lang['fine_tuning_jobs']            = '微调任务';
$lang['current_fine_tuning_job']     = '当前微调任务';
$lang['last_fine_tuning_job']        = '上一次微调任务';
$lang['job_id']                      = '任务 ID';
$lang['status']                      = '状态';
$lang['fine_tuned_model']            = '微调模型';
$lang['created_at']                  = '创建时间';
$lang['finished_at']                 = '完成时间';
$lang['loading_job_status']          = '正在加载任务状态...';
$lang['refresh_status']              = '刷新状态';
$lang['fine_tuned_models']           = '已微调模型';
$lang['enable_fine_tuning']          = '启用微调';
$lang['no_fine_tuned_models']        = '暂无可用微调模型';
$lang['model_id']                    = '模型 ID';
$lang['owned_by']                    = '所属者';
$lang['options']                     = '选项';
$lang['active']                      = '激活';
$lang['set_as_active']               = '设为激活';
$lang['processing']                  = '处理中...';
$lang['error_processing_request']    = '请求处理出错';
$lang['fine_tuning_completed']       = '微调成功完成！';
$lang['fine_tuning_enabled']         = '微调功能已启用';
$lang['fine_tuning_disabled']        = '微调功能已禁用';
$lang['fine_tuned_model_set']        = '已设置微调模型为激活状态';
$lang['confirm_delete_fine_tuned_model'] = '确定要删除此微调模型吗？此操作不可撤销。';
$lang['fine_tuned_model_deleted']    = '微调模型已删除';
$lang['fine_tuned_model_delete_failed'] = '删除微调模型失败';
$lang['fine_tuning_settings']        = '微调设置';
$lang['fine_tuning_base_model']      = '微调基础模型';
$lang['fine_tuning_base_model_help'] = '选择与 OpenAI 微调兼容的模型。';
$lang['fine_tuning_base_model_description'] = '将用于微调的基础模型。不同模型具有不同能力和价格。';
$lang['advanced_features']           = '高级功能';
$lang['refine_tuning']               = '重新微调';
$lang['refine_tuning_description']   = '使用新的知识库内容更新现有微调模型。';
$lang['refine_tuning_job_started']   = '重新微调任务已成功启动！';
$lang['refine_tuning_job_failed']    = '启动重新微调任务失败';
$lang['checkpoint']                  = '检查点';
$lang['fine_tuning_job_in_progress'] = '已有微调任务正在进行中';
$lang['fine_tuning_job_started']     = '微调任务已成功启动！';
$lang['retrain_model']               = '重新训练模型';
$lang['retrain_model_description']   = '使用最新内容创建新的微调模型。之前的微调模型将被删除。';
$lang['model_is_recommended']        = '推荐';

# 3.4.0
$lang['settings_group_einvoice']                                = 'e-Invoice';
$lang['settings_einvoice_templates']                            = 'e-Invoice Templates';
$lang['einvoice']                                               = 'e-Invoice';
$lang['settings_einvoice_default_template']                     = 'Default e-Invoice template';
$lang['settings_einvoice_default_credit_note_template']         = 'Default e-Invoice template for credit note';
$lang['settings_einvoice_send_as_invoice_email_attachment']     = 'Send e-Invoice as invoice attachment with email';
$lang['settings_einvoice_send_as_credit_note_email_attachment'] = 'Send e-Invoice as credit note attachment with email';
$lang['einvoice_new_template']                          = 'New e-Invoice template';
$lang['einvoice_template_invalid_xml']                  = 'The entered XML content is invalid. Please fix';
$lang['einvoice_template_invalid_xml_on_submit']        = 'Invalid XML. Please correct errors before submitting.';
$lang['einvoice_template_invalid_json']                 = 'The entered JSON content is invalid. Please fix the JSON syntax.';
$lang['einvoice_template_invalid_mustache']             = 'The template contains invalid Mustache syntax. Please check your template variables.';
$lang['xml_error']                                      = 'XML Error';
$lang['einvoice_no_template_set']                       = 'No e-Invoice template set. Please set one in the settings.';
$lang['einvoice_module_permission_bulk']                = 'Bulk export';
$lang['einvoice_module_bulk_export']                    = 'e-Invoice Export';
$lang['template_type']                        = 'Type';
$lang['template_variables']                   = 'Template variables';
$lang['validate_template']                    = 'Validate Template';
$lang['validating']                           = 'Validating...';
$lang['saving']                               = 'Saving...';
$lang['template_validation_success']          = 'Template validation successful!';
$lang['template_content_required']            = 'Template content is required.';

$lang['item_is_optional'] = 'This item is optional';
$lang['item_is_selected'] = 'Selected';
$lang['note_title'] = 'Note Title';
$lang['note_content'] = 'Note Content';
$lang['enabled_languages'] = 'Enabled Languages';

$lang['csv_export'] = 'CSV Export';
$lang['csv_exports'] = 'CSV Exports';
$lang['contacts'] = 'Contacts';
$lang['csv_export_select_type'] = 'Export Type';
$lang['csv_export_all_time'] = 'All Time';
$lang['csv_export_three_months'] = 'Last 3 Months';
$lang['csv_export_six_months'] = 'Last 6 Months';
$lang['csv_export_twelve_months'] = 'Last 12 Months';
$lang['csv_export_from_date'] = 'From Date';
$lang['csv_export_to_date'] = 'To Date';
$lang['csv_export_button'] = 'Export';