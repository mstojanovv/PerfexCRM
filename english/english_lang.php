<?php
# Version 1.0.0
#
# General
$lang['id']                   = 'ID';
$lang['name']                 = 'Name';
$lang['options']              = 'Options';
$lang['submit']               = 'Save';
$lang['added_successfully']    = '%s added successfully.';
$lang['updated_successfully']  = '%s updated successfully.';
$lang['edit']                 = 'Edit %s';
$lang['add_new']              = 'Add new %s';
$lang['deleted']              = '%s deleted';
$lang['problem_deleting']     = 'Problem deleting %s';
$lang['is_referenced']        = 'The ID of the %s is already using.';
$lang['close']                = 'Close';
$lang['send']                 = 'Send';
$lang['cancel']               = 'Cancel';
$lang['go_back']              = 'Go Back';
$lang['error_uploading_file'] = 'Error uploading file';
$lang['load_more']            = 'Load More';
$lang['cant_delete_default']  = 'Cant delete default %s';

# Invoice General
$lang['invoice_status_paid']                = 'Paid';
$lang['invoice_status_unpaid']              = 'Unpaid';
$lang['invoice_status_overdue']             = 'Overdue';
$lang['invoice_status_not_paid_completely'] = 'Partially Paid';

$lang['invoice_pdf_heading'] = 'INVOICE';

$lang['invoice_table_item_heading']            = 'Item';
$lang['invoice_table_quantity_heading']        = 'Qty';
$lang['invoice_table_rate_heading']            = 'Rate';
$lang['invoice_table_tax_heading']             = 'Tax';
$lang['invoice_table_amount_heading']          = 'Amount';
$lang['invoice_subtotal']                      = 'Sub Total';
$lang['invoice_adjustment']                    = 'Adjustment';
$lang['invoice_total']                         = 'Total';
$lang['invoice_vat']                           = 'VAT Number';
$lang['invoice_bill_to']                       = 'Bill To';
$lang['invoice_data_date']                     = 'Invoice Date:';
$lang['invoice_data_duedate']                  = 'Due Date:';
$lang['invoice_received_payments']             = 'Transactions';
$lang['invoice_no_payments_found']             = 'No payments found for this invoice';
$lang['invoice_note']                          = 'Note:';
$lang['invoice_payments_table_number_heading'] = 'Payment #';
$lang['invoice_payments_table_mode_heading']   = 'Payment Mode';
$lang['invoice_payments_table_date_heading']   = 'Date';
$lang['invoice_payments_table_amount_heading'] = 'Amount';


# Announcements
$lang['announcement']                 = 'Announcement';
$lang['announcement_lowercase']       = 'announcement';
$lang['announcements']                = 'Announcements';
$lang['announcements_lowercase']      = 'announcements';
$lang['new_announcement']             = 'New Announcement';
$lang['announcement_name']            = 'Subject';
$lang['announcement_message']         = 'Message';
$lang['announcement_show_to_staff']   = 'Show to staff';
$lang['announcement_show_to_clients'] = 'Show to clients';
$lang['announcement_show_my_name']    = 'Show my name';

# Clients
$lang['clients']                               = 'Customers';
$lang['client']                                = 'Customer';
$lang['new_client']                            = 'New Customer';
$lang['client_lowercase']                      = 'customer';
$lang['client_delete_tooltip']                 = 'All customer data will be deleted. Contracts,tickets,notes. NOTE: If invoices found customer won\'t be deleted. You need to assign this invoices to another customer to keep the invoice number';
$lang['customer_delete_invoices_warning']      = 'This customer have invoices on the account. You cant delete this customer. Change all invoices to another customer in a future then delete.';
$lang['client_firstname']                      = 'First Name';
$lang['client_lastname']                       = 'Last Name';
$lang['client_email']                          = 'Email';
$lang['client_company']                        = 'Company';
$lang['client_vat_number']                     = 'VAT Number';
$lang['client_address']                        = 'Address';
$lang['client_city']                           = 'City';
$lang['client_postal_code']                    = 'Zip Code';
$lang['client_state']                          = 'State';
$lang['client_password']                       = 'Password';
$lang['client_password_change_populate_note']  = 'Note: if you populate this fields, password will be changed on this contact.';
$lang['client_password_last_changed']          = 'Password last changed:';
$lang['login_as_client']                       = 'Login as client';
$lang['client_invoices_tab']                   = 'Invoices';
$lang['contracts_invoices_tab']                = 'Contracts';
$lang['contracts_tickets_tab']                 = 'Tickets';
$lang['contracts_notes_tab']                   = 'Notes';
$lang['client_invoice_number_table_heading']   = 'Invoice #';
$lang['client_invoice_date_table_heading']     = 'Date';
$lang['client_invoice_due_date_table_heading'] = 'Due Date';
$lang['client_string_table_heading']           = 'Customer';
$lang['client_amount_table_heading']           = 'Amount';
$lang['client_status_table_heading']           = 'Status';
$lang['note_description']                      = 'Note description';

$lang['client_string_contracts_table_heading']      = 'Customer';
$lang['client_start_date_contracts_table_heading']  = 'Start Date';
$lang['client_end_date_contracts_table_heading']    = 'End Date';
$lang['client_description_contracts_table_heading'] = 'Description';
$lang['client_do_not_send_welcome_email']           = 'Do not send welcome email';

$lang['clients_notes_table_description_heading'] = 'Description';
$lang['clients_notes_table_addedfrom_heading']   = 'Added From';
$lang['clients_notes_table_dateadded_heading']   = 'Date Added';
$lang['clients_list_full_name']   = 'Full Name';
$lang['clients_list_last_login']  = 'Last Login';

# Contracts
$lang['contracts']                = 'Contracts';
$lang['contract']                 = 'Contract';
$lang['new_contract']             = 'New Contract';
$lang['contract_lowercase']       = 'contract';
$lang['contract_start_date']      = 'Start Date';
$lang['contract_end_date']        = 'End Date';
$lang['contract_subject']         = 'Subject';
$lang['contract_description']     = 'Description';
$lang['contract_subject_tooltip'] = 'Subject is also visible to customer';
$lang['contract_client_string']   = 'Customer';
$lang['contract_attach']          = 'Attach document';

$lang['contract_list_client']     = 'Customer';
$lang['contract_list_subject']    = 'Subject';
$lang['contract_list_start_date'] = 'Start Date';
$lang['contract_list_end_date']   = 'End Date';

# Currencies
$lang['currencies']           = 'Currencies';
$lang['currency']             = 'Currency';
$lang['new_currency']         = 'New Currency';
$lang['currency_lowercase']   = 'currency';
$lang['base_currency_set']    = 'This is now your base currency.';
$lang['make_base_currency']   = 'Make base currency';
$lang['base_currency_string'] = 'Base Currency';

$lang['currency_list_name']   = 'Name';
$lang['currency_list_symbol'] = 'Symbol';


$lang['currency_add_edit_description'] = 'Currency Code';
$lang['currency_add_edit_rate']        = 'Symbol';

$lang['currency_edit_heading'] = 'Edit Currency';
$lang['currency_add_heading']  = 'Add New Currency';


# Department
$lang['departments']          = 'Departments';
$lang['department']           = 'Department';
$lang['new_department']       = 'New Department';
$lang['department_lowercase'] = 'department';

$lang['department_name']             = 'Department Name';
$lang['department_email']            = 'Department Email';
$lang['department_hide_from_client'] = 'Hide from client?';
$lang['department_list_name']        = 'Name';

# Email Templates
$lang['email_templates']                        = 'Email Templates';
$lang['email_template']                         = 'Email Template';
$lang['email_template_lowercase']               = 'email template';
$lang['email_templates_lowercase']              = 'email templates';
$lang['email_template_ticket_fields_heading']   = 'Tickets';
$lang['email_template_invoices_fields_heading'] = 'Invoices';
$lang['email_template_clients_fields_heading']  = 'Customers';

$lang['template_name']                                      = 'Template Name';
$lang['template_subject']                                   = 'Subject';
$lang['template_fromname']                                  = 'From Name';
$lang['template_fromemail']                                 = 'From Email';
$lang['send_as_plain_text']                                 = 'Send as Plaintext';
$lang['email_template_disabled']                             = 'Disabled';
$lang['email_template_email_message']                       = 'Email message';
$lang['available_merge_fields']                             = 'Available merge fields';
# Home
$lang['dashboard_string']                                   = 'Dashboard';
$lang['home_latest_todos']                                  = 'Latest to do\'s';
$lang['home_no_latest_todos']                               = 'No todos found';
$lang['home_latest_finished_todos']                         = 'Latest finished to do\'s';
$lang['home_no_finished_todos_found']                       = 'No finished todos found';
$lang['home_todo_heading']                                  = 'To do items';
$lang['home_tickets_awaiting_reply_by_department']          = 'Tickets Awaiting Reply by Department';
$lang['home_tickets_awaiting_reply_by_status']              = 'Tickets Awaiting Reply by Status';
$lang['home_this_week_events']                              = 'This Week events';
$lang['home_upcoming_events_next_week']                     = 'Upcoming events Next Week';
$lang['home_event_added_by']                                = 'Event added by';
$lang['home_public_event']                                  = 'Public event';
$lang['home_weekly_payment_records']                        = 'Weekly Payment Records';
$lang['home_weekend_ticket_opening_statistics']             = 'Weekly Ticket Openings Statistics';
# Newsfeed
$lang['whats_on_your_mind']                                 = 'Share documents, ideas..';
$lang['new_post']                                           = 'Post';
$lang['newsfeed_upload_tooltip']                            = 'Tip:Drag and drop files to upload';
$lang['newsfeed_all_departments']                           = 'All Departments';
$lang['newsfeed_pin_post']                                  = 'Pin post';
$lang['newsfeed_unpin_post']                                = 'Unpin post';
$lang['newsfeed_delete_post']                               = 'Delete';
$lang['newsfeed_published_post']                            = 'Published';
$lang['newsfeed_you_like_this']                             = 'You like this';
$lang['newsfeed_like_this']                                 = 'like this';
$lang['newsfeed_one_other']                                 = 'other';
$lang['newsfeed_you']                                       = 'You';
$lang['newsfeed_and']                                       = 'and';
$lang['newsfeed_you_and']                                   = 'You and';
$lang['newsfeed_like_this_saying']                          = 'Like this';
$lang['newsfeed_unlike_this_saying']                        = 'Unlike this';
$lang['newsfeed_show_more_comments']                        = 'Show more comments';
$lang['comment_this_post_placeholder']                      = 'Comment this post..';
$lang['newsfeed_post_likes_modal_heading']                  = 'Colleagues who like this post';
$lang['newsfeed_comment_likes_modal_heading']               = 'Colleagues who like this comment';
$lang['newsfeed_newsfeed_post_only_visible_to_departments'] = 'This post is only visible to the following departments: %s';
# Invoice Items
$lang['invoice_items']                                      = 'Invoice Items';
$lang['invoice_item']                                       = 'Invoice Item';
$lang['new_invoice_item']                                   = 'New Item';
$lang['invoice_item_lowercase']                             = 'invoice item';

$lang['invoice_items_list_description'] = 'Description';
$lang['invoice_items_list_rate']        = 'Rate';
$lang['invoice_items_list_tax']         = 'Tax';

$lang['invoice_item_add_edit_description'] = 'Description';
$lang['invoice_item_add_edit_rate']        = 'Rate';
$lang['invoice_item_add_edit_tax']         = 'Tax';
$lang['invoice_item_add_edit_tax_select']  = 'Select Tax';

$lang['invoice_item_edit_heading'] = 'Edit Item';
$lang['invoice_item_add_heading']  = 'Add New Item';

# Invoices


$lang['invoices']                       = 'Invoices';
$lang['invoice']                        = 'Invoice';
$lang['invoice_lowercase']              = 'invoice';
$lang['create_new_invoice']             = 'Create New Invoice';
$lang['view_invoice']                   = 'View Invoice';

$lang['invoice_payment_recorded']       = 'Invoice Payment Recorded';
$lang['invoice_payment_record_failed']  = 'Failed to Record Invoice Payment';
$lang['invoice_sent_to_client_success'] = 'The invoice is sent successfully to the client';
$lang['invoice_sent_to_client_fail']    = 'Problem while sending the invoice';
$lang['invoice_reminder_send_problem']  = 'Problem sending invoice overdue reminder';
$lang['invoice_overdue_reminder_sent']  = 'Invoice Overdue Reminder Successfully Sent';

$lang['invoice_details']              = 'Invoice Details';
$lang['invoice_view']                 = 'View Invoice';
$lang['invoice_select_customer']      = 'Customer';
$lang['invoice_add_edit_number']      = 'Invoice Number';
$lang['invoice_add_edit_date']        = 'Invoice Date';
$lang['invoice_add_edit_duedate']     = 'Due Date';
$lang['invoice_add_edit_currency']    = 'Currency';
$lang['invoice_add_edit_client_note'] = 'Client Note';
$lang['invoice_add_edit_admin_note']  = 'Admin Note';

$lang['invoice_add_edit_search_item']  = 'Search Items';
$lang['invoices_toggle_table_tooltip'] = 'Toggle Table';

$lang['edit_invoice_tooltip']                   = 'Edit Invoice';
$lang['delete_invoice_tooltip']                 = 'Delete Invoice. Note: All payments regarding to this invoice will be deleted (if any).';
$lang['invoice_sent_to_email_tooltip']          = 'Send to Email';
$lang['invoice_already_send_to_client_tooltip'] = 'This invoice is already sent to the client %s';
$lang['send_overdue_notice_tooltip']            = 'Send Overdue Notice';
$lang['invoice_view_activity_tooltip']          = 'Activity Log';
$lang['invoice_record_payment']                 = 'Record Payment';

$lang['invoice_send_to_client_modal_heading']    = 'Send invoice to client';
$lang['invoice_send_to_client_attach_pdf']       = 'Attach Invoice PDF';
$lang['invoice_send_to_client_preview_template'] = 'Preview Email Template';

$lang['invoice_dt_table_heading_number']  = 'Invoice #';
$lang['invoice_dt_table_heading_date']    = 'Date';
$lang['invoice_dt_table_heading_client']  = 'Customer';
$lang['invoice_dt_table_heading_duedate'] = 'Due Date';
$lang['invoice_dt_table_heading_amount']  = 'Amount';
$lang['invoice_dt_table_heading_status']  = 'Status';

$lang['record_payment_for_invoice']              = 'Record Payment for';
$lang['record_payment_amount_received']          = 'Amount Received';
$lang['record_payment_date']                     = 'Payment Date';
$lang['record_payment_leave_note']               = 'Leave a note';
$lang['invoice_payments_received']               = 'Payments Received';
$lang['invoice_record_payment_note_placeholder'] = 'Admin Note';
$lang['no_payments_found']                       = 'No Payments found for this invoice';
$lang['invoice_email_link_text']                 = 'View Invoice';

# Payments
$lang['payments']                             = 'Payments';
$lang['payment']                              = 'Payment';
$lang['payment_lowercase']                    = 'payment';
$lang['payments_table_number_heading']        = 'Payment #';
$lang['payments_table_invoicenumber_heading'] = 'Invoice #';
$lang['payments_table_mode_heading']          = 'Payment Mode';
$lang['payments_table_date_heading']          = 'Date';
$lang['payments_table_amount_heading']        = 'Amount';
$lang['payments_table_client_heading']        = 'Customer';
$lang['payment_not_exists']                   = 'The payment does not exists';

$lang['payment_edit_for_invoice']     = 'Payment for Invoice';
$lang['payment_edit_amount_received'] = 'Amount Received';
$lang['payment_edit_date']            = 'Payment Date';
$lang['payment_edit_lave_note']       = 'Leave Note';


# Knowledge Base
$lang['kb_article_add_edit_subject'] = 'Subject';
$lang['kb_article_add_edit_group']   = 'Group';
$lang['kb_string']                   = 'Knowledge Base';
$lang['kb_article']                  = 'Article';
$lang['kb_article_lowercase']        = 'article';
$lang['kb_article_new_article']      = 'New Article';
$lang['kb_article_disabled']         = 'Disabled';
$lang['kb_article_description']      = 'Article description';

$lang['kb_table']                      = 'List';
$lang['kb_no_articles_found']          = 'No knowledge base articles found';
$lang['kb_dt_article_name']            = 'Article Name';
$lang['kb_dt_group_name']              = 'Group';
$lang['new_group']                     = 'New Group';
$lang['kb_group_add_edit_name']        = 'Group Name';
$lang['kb_group_add_edit_description'] = 'Short description';
$lang['kb_group_add_edit_disabled']    = 'Disabled';
$lang['kb_group_add_edit_note']        = 'Note: All articles in this group will be hidden if disabled is checked';
$lang['group_table_name_heading']      = 'Name';
$lang['group_table_isactive_heading']  = 'Active';
$lang['kb_no_groups_found']            = 'No knowledge base groups found';

# Mail Lists
$lang['mail_lists']                           = 'Mail Lists';
$lang['mail_list']                            = 'Mail List';
$lang['new_mail_list']                        = 'New Mail List';
$lang['mail_list_lowercase']                  = 'mail list';
$lang['custom_field_deleted_success']         = 'Custom field deleted';
$lang['custom_field_deleted_fail']            = 'Problem deleting custom field';
$lang['email_removed_from_list']              = 'Email removed from list';
$lang['email_remove_fail']                    = 'Email removed from list';
$lang['staff_mail_lists']                     = 'Staff Mail List';
$lang['clients_mail_lists']                   = 'Clients Mail List';
$lang['mail_list_total_imported']             = 'Total emails imported: %s';
$lang['mail_list_total_duplicate']            = 'Total duplicate emails: %s';
$lang['mail_list_total_failed_to_insert']     = 'Emails failed to insert: %s';
$lang['mail_list_total_invalid']              = 'Invalid email address: %s';
$lang['cant_edit_mail_list']                  = 'You cant edit this list, this list is populated automatically';
$lang['mail_list_add_edit_name']              = 'Mail List Name';
$lang['mail_list_add_edit_customfield']       = 'Add custom field';
$lang['mail_lists_viewing_emails']            = 'Viewing Emails From List';
$lang['mail_lists_view_email_email_heading']  = 'Email';
$lang['mail_lists_view_email_date_heading']   = 'Date Added';
$lang['add_new_email_to']                     = 'Add New Email to %s';
$lang['import_emails_to']                     = 'Import Emails to %s';
$lang['mail_list_new_email_edit_add_label']   = 'Email';
$lang['mail_list_import_file']                = 'Import File';
$lang['mail_list_available_custom_fields']    = 'Available Custom Fields';
$lang['submit_import_emails']                 = 'Import Emails';
$lang['btn_import_emails']                    = 'Import Emails (Excel)';
$lang['btn_add_email_to_list']                = 'Add Email to This List';
$lang['mail_lists_dt_list_name']              = 'List Name';
$lang['mail_lists_dt_datecreated']            = 'Date Created';
$lang['mail_lists_dt_creator']                = 'Creator';
$lang['email_added_to_mail_list_successfully'] = 'Email added to list';
$lang['email_is_duplicate_mail_list']         = 'Email already exists in this list';

# Media
$lang['media_files']            = 'Files';

# Payment modes
$lang['new_payment_mode']       = 'New Payment Mode';
$lang['payment_modes']          = 'Payment Modes';
$lang['payment_mode']           = 'Payment Mode';
$lang['payment_mode_lowercase'] = 'payment mode';
$lang['payment_modes_dt_name']  = 'Payment Mode Name';

$lang['payment_mode_add_edit_name'] = 'Payment Mode Name';
$lang['payment_mode_edit_heading']  = 'Edit Payment Mode';
$lang['payment_mode_add_heading']   = 'Add New Payment Mode';

# Predefined Ticket Replies
$lang['new_predefined_reply']              = 'New Predefined Reply';
$lang['predefined_replies']                = 'Predefined Replies';
$lang['predefined_reply']                  = 'Predefined Reply';
$lang['predefined_reply_lowercase']        = 'predefined reply';
$lang['predefined_replies_dt_name']        = 'Predefined Reply Name';
$lang['predefined_reply_add_edit_name']    = 'Predefined Reply Name';
$lang['predefined_reply_add_edit_content'] = 'Reply Content';

# Ticket Priorities
$lang['new_ticket_priority']           = 'New Priority';
$lang['ticket_priorities']             = 'Ticket Priorities';
$lang['ticket_priority']               = 'Ticket Priority';
$lang['ticket_priority_lowercase']     = 'ticket priority';
$lang['no_ticket_priorities_found']    = 'No Ticket Priorities Found';
$lang['ticket_priority_dt_name']       = 'Ticket Priority Name';
$lang['ticket_priority_add_edit_name'] = 'Priority Name';

# Reports
$lang['kb_reports']                         = 'Knowledge base articles reports';
$lang['sales_reports']                      = 'Sales Reports';
$lang['reports_choose_kb_group']            = 'Choose Group';
$lang['reports_sales_select_report_type']   = 'Select Report Type';
$lang['report_kb_yes']                      = 'Yes';
$lang['report_kb_no']                       = 'No';
$lang['report_kb_no_votes']                 = 'No votes yet';
$lang['report_this_week_leads_conversions'] = 'This Week Leads Conversions';
$lang['report_leads_sources_conversions']   = 'Sources Conversion';
$lang['report_leads_monthly_conversions']   = 'Monthly';
$lang['sales_report_heading']               = 'Sales Report';
$lang['report_sales_type_income']           = 'Total Income';

$lang['report_sales_type_customer']                    = 'Customers Report';
$lang['report_sales_base_currency_select_explanation'] = 'You need to select currency because you have invoices with different currency';
$lang['report_sales_from_date']                        = 'From Date';
$lang['report_sales_to_date']                          = 'To Date';


$lang['report_sales_months_all_time']      = 'All Time';
$lang['report_sales_months_six_months']    = 'Last 6 months';
$lang['report_sales_months_twelve_months'] = 'Last 12 months';
$lang['report_sales_months_custom']        = 'Custom';
$lang['reports_sales_generated_report']    = 'Generated Report';



$lang['reports_sales_dt_customers_client']                = 'Customer';
$lang['reports_sales_dt_customers_total_invoices']        = 'Total Invoices';
$lang['reports_sales_dt_items_customers_amount']          = 'Amount';
$lang['reports_sales_dt_items_customers_amount_with_tax'] = 'Amount with Tax';

# Roles
$lang['new_role']           = 'New Role';
$lang['all_roles']          = 'All Role';
$lang['roles']              = 'Staff Roles';
$lang['role']               = 'Role';
$lang['role_lowercase']     = 'role';
$lang['roles_total_users']  = 'Total Users: ';
$lang['roles_dt_name']      = 'Role Name';
$lang['role_add_edit_name'] = 'Role Name';

# Service
$lang['new_service']           = 'New Service';
$lang['services']              = 'Services';
$lang['service']               = 'Service';
$lang['service_lowercase']     = 'service';
$lang['services_dt_name']      = 'Service Name';
$lang['service_add_edit_name'] = 'Service Name';

# Settings
$lang['settings']                     = 'Settings';
$lang['settings_updated']             = 'Settings Updated';
$lang['settings_save']                = 'Save Settings';
$lang['settings_group_general']       = 'General';
$lang['settings_group_localization']  = 'Localization';
$lang['settings_group_tickets']       = 'Tickets';
$lang['settings_group_sales']         = 'Finance';
$lang['settings_group_email']         = 'Email';
$lang['settings_group_clients']       = 'Customers';
$lang['settings_group_newsfeed']      = 'News feed';
$lang['settings_group_cronjob']       = 'Cron Job';

$lang['settings_yes']                                        = 'Yes';
$lang['settings_no']                                         = 'No';
$lang['settings_clients_default_theme']                      = 'Default customers theme';
$lang['settings_clients_allow_registration']                 = 'Allow customers to register';
$lang['settings_clients_allow_kb_view_without_registration'] = 'Allow knowledge base to be viewed without registration';

$lang['settings_cron_send_overdue_reminder']                 = 'Send invoice overdue reminder';
$lang['settings_cron_send_overdue_reminder_tooltip']         = 'Send overdue email to client when invoice status updated to overdue from Cron Job';
$lang['automatically_send_invoice_overdue_reminder_after']   = 'Auto send reminder after (days)';
$lang['automatically_resend_invoice_overdue_reminder_after'] = 'Auto re-send reminder after (days)';

$lang['settings_email_host']      = 'SMTP Host';
$lang['settings_email_port']      = 'SMTP Port';
$lang['settings_email']           = 'SMTP Email';
$lang['settings_email_password']  = 'SMTP Password';
$lang['settings_email_charset']   = 'Email Charset';
$lang['settings_email_signature'] = 'Email Signature';

$lang['settings_general_company_logo']                = 'Company Logo';
$lang['settings_general_company_logo_tooltip']        = 'Recommended dimensions: 150 x 34px';
$lang['settings_general_company_remove_logo_tooltip'] = 'Remove company logo';
$lang['settings_general_company_name']                = 'Company Name';
$lang['settings_general_company_main_domain']         = 'Company Main Domain';
$lang['settings_general_use_knowledgebase']           = 'Use Knowledge Base';
$lang['settings_general_use_knowledgebase_tooltip']   = 'If you allow this options knowledge base will be shown also on clients side';
$lang['settings_general_tables_limit']                = 'Tables Pagination Limit';
$lang['settings_general_default_staff_role']          = 'Default Staff Role';
$lang['settings_general_default_staff_role_tooltip']  = 'When you add new staff member this role will be selected by default';

$lang['settings_localization_date_format']      = 'Date Format';
$lang['settings_localization_default_timezone'] = 'Default Timezone';
$lang['settings_localization_default_language'] = 'Default Language';


$lang['settings_newsfeed_max_file_upload_post']    = 'Maximum files upload on post';
$lang['settings_newsfeed_max_file_size']           = 'Maximum files size (MB)';

$lang['settings_reminders_contracts']         = 'Contract expiration reminder before';
$lang['settings_reminders_contracts_tooltip'] = 'Expiration reminder notification in days';

$lang['settings_tickets_use_services']             = 'Use Services';
$lang['settings_tickets_max_attachments']          = 'Maximum ticket attachments';
$lang['settings_tickets_allow_departments_access'] = 'Allow staff to access only ticket that belongs to staff departments';
$lang['settings_tickets_allowed_file_extensions']  = 'Allowed attachments file extensions';

$lang['settings_sales_general']                                    = 'General';
$lang['settings_sales_general_note']                               = 'General settings';
$lang['settings_sales_invoice_prefix']                             = 'Invoice Number Prefix';
$lang['settings_sales_decimal_separator']                          = 'Decimal Separator';
$lang['settings_sales_thousand_separator']                         = 'Thousand Separator';
$lang['settings_sales_currency_placement']                         = 'Currency Placement';
$lang['settings_sales_currency_placement_before']                  = 'Before Amount';
$lang['settings_sales_currency_placement_after']                   = 'After Amount';
$lang['settings_sales_require_client_logged_in_to_view_invoice']   = 'Require client to be logged in to view invoice';
$lang['settings_sales_next_invoice_number']                        = 'Next Invoice Number';
$lang['settings_sales_next_invoice_number_tooltip']                = 'Set this field to 1 if you want to start from beginning';
$lang['settings_sales_decrement_invoice_number_on_delete']         = 'Decrement invoice number on delete';
$lang['settings_sales_decrement_invoice_number_on_delete_tooltip'] = 'Do you want to decrement the invoice number when the last invoice is deleted? eq. If is set this option to YES and before invoice delete the next invoice number is 15 the next invoice number will decrement to 14. If is set to NO the number will remain to 15.  If you have setup delete only on last invoice to NO you should set this option to NO too to keep the next invoice number not decremented.';
$lang['settings_sales_invoice_number_format']                      = 'Invoice Number Format';
$lang['settings_sales_invoice_number_format_year_based']           = 'Year Based';
$lang['settings_sales_invoice_number_format_number_based']         = 'Number Based (000001)';


$lang['settings_sales_company_info_note']    = 'These information will be displayed on invoices/estimates/payments and other PDF documents where company info is required';
$lang['settings_sales_company_name']         = 'Company Name';
$lang['settings_sales_address']              = 'Address';
$lang['settings_sales_city']                 = 'City';
$lang['settings_sales_country_code']         = 'Country Code';
$lang['settings_sales_postal_code']          = 'Zip Code';
$lang['settings_sales_phonenumber']          = 'Phone';

# Leads
$lang['new_lead']       = 'New Lead';
$lang['leads']          = 'Leads';
$lang['lead']           = 'Lead';
$lang['lead_lowercase'] = 'lead';
$lang['leads_all']      = 'All';

$lang['leads_canban_notes']  = 'Notes: %s';
$lang['leads_canban_source'] = 'Source: %s';

$lang['lead_new_source']            = 'New Source';
$lang['lead_sources']               = 'Lead Sources';
$lang['lead_source']                = 'Lead Source';
$lang['lead_source_lowercase']      = 'lead source';
$lang['leads_sources_not_found']    = 'No leads sources found';
$lang['leads_sources_table_name']   = 'Source Name';
$lang['leads_source_add_edit_name'] = 'Source Name';

$lang['lead_new_status']         = 'New Lead Status';
$lang['lead_statuss']            = 'Lead Status';
$lang['lead_status']             = 'Lead Status';
$lang['lead_status_lowercase']   = 'lead status';
$lang['leads_status_table_name'] = 'Status Name';

$lang['leads_status_add_edit_name']  = 'Status Name';
$lang['leads_status_add_edit_order'] = 'Order';

$lang['lead_statuses_not_found']      = 'No leads statuses found';
$lang['leads_search']                 = 'Search Leads';

$lang['leads_table_total'] = 'Total Leads: %s';

$lang['leads_dt_name']         = 'Name';
$lang['leads_dt_email']        = 'Email';
$lang['leads_dt_phonenumber']  = 'Phone';
$lang['leads_dt_assigned']     = 'Assigned';
$lang['leads_dt_status']       = 'Status';
$lang['leads_dt_last_contact'] = 'Last Contact';

$lang['lead_add_edit_name']                 = 'Name';
$lang['lead_add_edit_email']                = 'Email Address';
$lang['lead_add_edit_phonenumber']          = 'Phone';
$lang['lead_add_edit_source']               = 'Source';
$lang['lead_add_edit_status']               = 'Lead Status';
$lang['lead_add_edit_assigned']             = 'Assigned';
$lang['lead_add_edit_datecontacted']        = 'Date Contacted';
$lang['lead_add_edit_contacted_today']      = 'Contacted Today';
$lang['lead_add_edit_activity']             = 'Activity Log';
$lang['lead_add_edit_notes']                = 'Notes';
$lang['lead_add_edit_add_note']             = 'Add note';
$lang['lead_not_contacted']                 = 'I have not contacted this lead';
$lang['lead_add_edit_contacted_this_lead']  = 'I got in touch with this lead';
$lang['lead_confirmation_canban_contacted'] = 'Have you got in touch with this lead?';

# Misc
$lang['access_denied']              = 'Access denied';
$lang['prev']                       = 'Prev';
$lang['next']                       = 'next';

# Datatables
$lang['dt_paginate_first']          = 'First';
$lang['dt_paginate_last']           = 'Last';
$lang['dt_paginate_next']           = 'Next';
$lang['dt_paginate_previous']       = 'Previous';
$lang['dt_empty_table']             = 'No {0} found';
$lang['dt_search']                  = 'Search...';
$lang['dt_zero_records']            = 'No matching records found';
$lang['dt_loading_records']         = 'Loading...';
$lang['dt_length_menu']             = 'Show _MENU_ entries';
$lang['dt_info_filtered']           = '(filtered from _MAX_ total {0})';
$lang['dt_info_empty']              = 'Showing 0 to 0 of 0 {0}';
$lang['dt_info']                    = 'Showing _START_ to _END_ of _TOTAL_ {0}';
$lang['dt_empty_table']             = 'No {0} found';
$lang['dt_sort_ascending']          = ' activate to sort column ascending';
$lang['dt_sort_descending']         = ' activate to sort column descending';
# Invoice Activity Log
$lang['user_sent_overdue_reminder'] = '%s sent invoice overdue reminder';

# Weekdays
$lang['wd_monday']    = 'Monday';
$lang['wd_tuesday']   = 'Tuesday';
$lang['wd_thursday']  = 'Thursday';
$lang['wd_wednesday'] = 'Wednesday';
$lang['wd_friday']    = 'Friday';
$lang['wd_saturday']  = 'Saturday';
$lang['wd_sunday']    = 'Sunday';

# Admin Left Sidebar
$lang['als_dashboard'] = 'Dashboard';
$lang['als_clients']   = 'Customers';
$lang['als_leads']     = 'Leads';

$lang['als_contracts'] = 'Contracts';

$lang['als_all_tickets'] = 'All Tickets';
$lang['als_sales']       = 'Sales';

$lang['als_staff'] = 'Staff';
$lang['als_tasks'] = 'Tasks';
$lang['als_kb']    = 'Knowledge Base';

$lang['als_surveys']               = 'Surveys';
$lang['als_media']                 = 'Media';
$lang['als_reports']               = 'Reports';
$lang['als_reports_sales_submenu'] = 'Sales';
$lang['als_reports_leads_submenu'] = 'Leads';
$lang['als_kb_articles_submenu']   = 'KB Articles';
$lang['als_utilities']             = 'Utilities';
$lang['als_announcements_submenu'] = 'Announcements';
$lang['als_mail_lists_submenu']    = 'Mail Lists';
$lang['als_calendar_submenu']      = 'Calendar';
$lang['als_activity_log_submenu']  = 'Activity Log';

# Admin Customizer Sidebar
$lang['acs_tickets']                           = 'Tickets';
$lang['acs_ticket_priority_submenu']           = 'Ticket Priority';
$lang['acs_ticket_statuses_submenu']           = 'Ticket Statuses';
$lang['acs_ticket_predefined_replies_submenu'] = 'Predefined Replies';
$lang['acs_ticket_services_submenu']           = 'Services';
$lang['acs_departments']                       = 'Departments';
$lang['acs_leads']                             = 'Leads';
$lang['acs_leads_sources_submenu']             = 'Sources';
$lang['acs_leads_statuses_submenu']            = 'Statuses';
$lang['acs_sales_taxes_submenu']               = 'Tax Rates';
$lang['acs_sales_currencies_submenu']          = 'Currencies';
$lang['acs_sales_payment_modes_submenu']       = 'Payment Modes';
$lang['acs_email_templates']                   = 'Email Templates';
$lang['acs_roles']                             = 'Roles';
$lang['acs_settings']                          = 'Settings';

# Tickets
$lang['new_ticket']                                         = 'Open New Ticket';
$lang['tickets']                                            = 'Tickets';
$lang['ticket']                                             = 'Ticket';
$lang['ticket_lowercase']                                   = 'ticket';
$lang['support_tickets']                                    = 'Support Tickets';
$lang['support_ticket']                                     = 'Support Ticket';
$lang['ticket_settings_to']                                 = 'To';
$lang['ticket_settings_email']                              = 'Email address';
$lang['ticket_settings_departments']                        = 'Department';
$lang['ticket_settings_service']                            = 'Service';
$lang['ticket_settings_priority']                           = 'Priority';
$lang['ticket_settings_subject']                            = 'Subject';
$lang['ticket_settings_assign_to']                          = 'Assign ticket (default is current user)';
$lang['ticket_settings_assign_to_you']                      = 'You';
$lang['ticket_settings_select_client']                      = 'Select Client';
$lang['ticket_add_body']                                    = 'Ticket Body';
$lang['ticket_add_attachments']                             = 'Attachments';
$lang['ticket_no_reply_yet']                                = 'No Reply Yet';
$lang['new_ticket_added_successfully']                        = 'Ticket #%s added successfully';
$lang['replied_to_ticket_successfully']                       = 'Replied to ticket #%s successfully';
$lang['ticket_settings_updated_successfully']                = 'Ticket settings updated successfully';
$lang['ticket_settings_updated_successfully_and_reassigned'] = 'Ticket settings updated successfully - reassigned to department %s';
$lang['ticket_dt_subject']                                  = 'Subject';
$lang['ticket_dt_department']                               = 'Department';
$lang['ticket_dt_service']                                  = 'Service';
$lang['ticket_dt_submitter']                                = 'Customer';
$lang['ticket_dt_status']                                   = 'Status';
$lang['ticket_dt_priority']                                 = 'Priority';
$lang['ticket_dt_last_reply']                               = 'Last Reply';

$lang['ticket_single_add_reply']                  = 'Add Reply';
$lang['ticket_single_add_note']                   = 'Add note';
$lang['ticket_single_other_user_tickets']         = 'Other Tickets';
$lang['ticket_single_settings']                   = 'Settings';
$lang['ticket_single_priority']                   = 'Priority: %s';
$lang['ticket_single_last_reply']                 = 'Last Reply: %s';
$lang['ticket_single_change_status_top']          = 'Change Status';
$lang['ticket_single_ticket_note_by']             = 'Ticket note by %s';
$lang['ticket_single_note_added']                 = 'Note added: %s';
$lang['ticket_single_change_status']              = 'Change Status';
$lang['ticket_single_assign_to_me_on_update']     = 'Assign this ticket to me automatically';
$lang['ticket_single_insert_predefined_reply']    = 'Insert predefined reply';
$lang['ticket_single_insert_knowledge_base_link'] = 'Insert knowledge base link';
$lang['ticket_single_attachments']                = 'Attachments';
$lang['ticket_single_add_response']               = 'Add Response';
$lang['ticket_single_note_heading']               = 'Note';
$lang['ticket_single_add_note']                   = 'Add note';
$lang['ticket_settings_none_assigned']            = 'None';
$lang['ticket_status_changed_successfully']        = 'Ticket Status Changed';
$lang['ticket_status_changed_fail']               = 'Problem Changing Ticket Status';

$lang['ticket_staff_string']                    = 'Staff';
$lang['ticket_client_string']                   = 'Customer';
$lang['ticket_posted']                          = 'Posted: %s';
$lang['ticket_insert_predefined_reply_heading'] = 'Insert predefined reply';
$lang['ticket_kb_link_heading']                 = 'Insert knowledge base link';
$lang['ticket_access_by_department_denied']     = 'You do not have access to this ticket. This ticket belongs to department that you are not assigned.';

# Staff
$lang['new_staff']                       = 'New Staff Member';
$lang['staff_members']                   = 'Staff Members';
$lang['staff_member']                    = 'Staff Member';
$lang['staff_member_lowercase']          = 'staff member';
$lang['staff_profile_updated']           = 'Your Profile has Been Updated';
$lang['staff_old_password_incorrect']     = 'Your old password is incorrect';
$lang['staff_password_changed']          = 'Your password has been changed';
$lang['staff_problem_changing_password'] = 'Problem changing your password';
$lang['staff_profile_string']            = 'Profile';

$lang['staff_cant_remove_main_admin']          = 'Cant remove main administrator';
$lang['staff_cant_remove_yourself_from_admin'] = 'You cant remove yourself the administrator role';

$lang['staff_dt_name']       = 'Full Name';
$lang['staff_dt_email']      = 'Email';
$lang['staff_dt_last_Login'] = 'Last Login';
$lang['staff_dt_active']     = 'Active';

$lang['staff_add_edit_firstname']             = 'First Name';
$lang['staff_add_edit_lastname']              = 'Last Name';
$lang['staff_add_edit_email']                 = 'Email';
$lang['staff_add_edit_phonenumber']           = 'Phone';
$lang['staff_add_edit_facebook']              = 'Facebook';
$lang['staff_add_edit_linkedin']              = 'LinkedIn';
$lang['staff_add_edit_skype']                 = 'Skype';
$lang['staff_add_edit_departments']           = 'Member departments';
$lang['staff_add_edit_role']                  = 'Role';
$lang['staff_add_edit_permissions']           = 'Permissions';
$lang['staff_add_edit_administrator']         = 'Administrator';
$lang['staff_add_edit_password']              = 'Password';
$lang['staff_add_edit_password_note']         = 'Note: if you populate this fields, password will be changed on this member.';
$lang['staff_add_edit_password_last_changed'] = 'Password last changed';
$lang['staff_add_edit_notes']                 = 'Notes';
$lang['staff_add_edit_note_description']      = 'Note description';

$lang['staff_notes_table_description_heading'] = 'Note';
$lang['staff_notes_table_addedfrom_heading']   = 'Added From';
$lang['staff_notes_table_dateadded_heading']   = 'Date Added';

$lang['staff_admin_profile']         = 'This is admin profile';
$lang['staff_profile_notifications'] = 'Notifications';
$lang['staff_profile_departments']   = 'Departments';

$lang['staff_edit_profile_image']                     = 'Profile Image';
$lang['staff_edit_profile_your_departments']          = 'Departments';
$lang['staff_edit_profile_change_your_password']      = 'Change your password';
$lang['staff_edit_profile_change_old_password']       = 'Old password';
$lang['staff_edit_profile_change_new_password']       = 'New password';
$lang['staff_edit_profile_change_repeat_new_password'] = 'Repeat new password';

# Surveys
$lang['new_survey']                    = 'New Survey';
$lang['surveys']                       = 'Surveys';
$lang['survey']                        = 'Survey';
$lang['survey_lowercase']              = 'survey';
$lang['survey_no_mail_lists_selected'] = 'No mail lists selected';
$lang['survey_send_success_note']      = 'All Survey Emails(%s) will be send via CRON';
$lang['survey_result']                 = 'Result for Survey: %s';
$lang['question_string']               = 'Question';
$lang['question_field_string']         = 'Field';

$lang['survey_list_view_tooltip']         = 'View Survey';
$lang['survey_list_view_results_tooltip'] = 'View Results';

$lang['survey_add_edit_subject']                   = 'Survey subject';
$lang['survey_add_edit_email_description']         = 'Survey description (Email Description)';
$lang['survey_include_survey_link']                = 'Include survey link in description';
$lang['survey_available_mail_lists_custom_fields'] = 'Available custom fields from email lists';
$lang['survey_mail_lists_custom_fields_tooltip']   = 'Custom fields can be used for email editor.';
$lang['survey_add_edit_short_description_view']    = 'Survey short description (View Description)';
$lang['survey_add_edit_from']                      = 'From (displayed in email)';
$lang['survey_add_edit_redirect_url']              = 'Survey redirect URL';
$lang['survey_add_edit_red_url_note']              = 'When user finish survey where to be redirected (leave blank for this site url)';
$lang['survey_add_edit_disabled']                  = 'Disabled';
$lang['survey_add_edit_only_for_logged_in']        = 'Only for logged in participants (staff,customers)';
$lang['send_survey_string']                        = 'Send Survey';
$lang['survey_send_mail_list_clients']             = 'Customers';
$lang['survey_send_mail_list_staff']               = 'Staff';
$lang['survey_send_mail_lists_string']             = 'Mail Lists';
$lang['survey_send_mail_lists_note_logged_in']     = 'Note: If you are sending survey to mail lists Only for logged in participants need to be unchecked';
$lang['survey_send_string']                        = 'Send';

$lang['survey_send_to_total']  = 'Send to total %s emails';
$lang['survey_send_till_now']  = 'Till now';
$lang['survey_send_finished']  = 'Survey send finished: %s';
$lang['survey_added_to_queue'] = 'This survey is added to cron queue on %s';

$lang['survey_questions_string']          = 'Questions';
$lang['survey_insert_field']              = 'Insert Field';
$lang['survey_field_checkbox']            = 'Checkbox';
$lang['survey_field_radio']               = 'Radio';
$lang['survey_field_input']               = 'Input Field';
$lang['survey_field_textarea']            = 'Text area';
$lang['survey_question_required']         = 'Required';
$lang['survey_question_only_for_preview'] = 'Only for preview';
$lang['survey_create_first']              = 'You need to create the survey first then you will be able to insert the questions.';


$lang['survey_dt_name']               = 'Name';
$lang['survey_dt_total_questions']    = 'Total Questions';
$lang['survey_dt_total_participants'] = 'Total Participants';
$lang['survey_dt_date_created']       = 'Date Created';
$lang['survey_dt_active']             = 'Active';

$lang['survey_text_questions_results'] = 'Text questions result';
$lang['survey_view_all_answers']       = 'View all answers';

# Staff Tasks
$lang['new_task']       = 'New Task';
$lang['tasks']          = 'Tasks';
$lang['task']           = 'Task';
$lang['task_lowercase'] = 'task';
$lang['comment_string'] = 'Comment';

$lang['task_marked_as_complete'] = 'Task marked as complete';
$lang['task_follower_removed']   = 'Task follower removed successfully';
$lang['task_assignee_removed']   = 'Task assignee removed successfully';

$lang['task_no_assignees'] = 'No assignees for this task';
$lang['task_no_followers'] = 'No followers for this task';

$lang['task_list_all']            = 'All';
$lang['task_list_not_assigned']   = 'Not Assigned';
$lang['task_list_duedate_passed'] = 'Due Date Passed';
$lang['tasks_dt_name']            = 'Name';
$lang['task_single_priority']               = 'Priority';
$lang['task_single_start_date']             = 'Start Date';
$lang['task_single_due_date']               = 'Due Date';
$lang['task_single_finished']               = 'Finished';
$lang['task_single_mark_as_complete']       = 'Mark as complete';
$lang['task_single_edit']                   = 'Edit';
$lang['task_single_delete']                 = 'Delete';
$lang['task_single_assignees']              = 'Assignees';
$lang['task_single_assignees_select_title'] = 'Assign task to';
$lang['task_single_followers']              = 'Followers';
$lang['task_single_followers_select_title'] = 'Add Followers';
$lang['task_single_insert_media_link']      = 'Insert Media Link';
$lang['task_single_add_new_comment']        = 'Add Comment';

$lang['task_add_edit_subject']     = 'Subject';
$lang['task_add_edit_priority']    = 'Priority';
$lang['task_priority_low']         = 'Low';
$lang['task_priority_medium']      = 'Medium';
$lang['task_priority_high']        = 'High';
$lang['task_priority_urgent']      = 'Urgent';
$lang['task_add_edit_start_date']  = 'Start Date';
$lang['task_add_edit_due_date']    = 'Due Date';
$lang['task_add_edit_description'] = 'Task Description';

# Taxes
$lang['new_tax']       = 'New Tax';
$lang['taxes']         = 'Taxes';
$lang['tax']           = 'Tax';
$lang['tax_lowercase'] = 'tax';
$lang['tax_dt_name']   = 'Tax Name';
$lang['tax_dt_rate']   = 'Rate (percent)';

$lang['tax_add_edit_name'] = 'Tax Name';
$lang['tax_add_edit_rate'] = 'Tax Rate (percent)';
$lang['tax_edit_title']    = 'Edit Tax';
$lang['tax_add_title']     = 'Add New Tax';

# Ticket Statuses
$lang['new_ticket_status']       = 'New Ticket Status';
$lang['ticket_statuses']         = 'Ticket Statuses';
$lang['ticket_status']           = 'Ticket Status';
$lang['ticket_status_lowercase'] = 'ticket status';

$lang['ticket_statuses_dt_name']      = 'Ticket Status Name';
$lang['no_ticket_statuses_found']     = 'No ticket statuses found';
$lang['ticket_statuses_table_total']  = 'Total %s';
$lang['ticket_status_add_edit_name']  = 'Ticket Status Name';
$lang['ticket_status_add_edit_color'] = 'Pick Color';
$lang['ticket_status_add_edit_order'] = 'Status Order';

# Todos
$lang['new_todo']                  = 'New To Do';
$lang['my_todos']                  = 'My To Do Items';
$lang['todo']                      = 'Todo Item';
$lang['todo_lowercase']            = 'todo';
$lang['todo_status_changed']       = 'Todo Status Changed';
$lang['todo_add_title']            = 'Add New Todo';
$lang['add_new_todo_description']  = 'Description';
$lang['no_finished_todos_found']   = 'No finished todos found';
$lang['no_unfinished_todos_found'] = 'No todos found';
$lang['unfinished_todos_title']    = 'Unfinished to do\'s';
$lang['finished_todos_title']      = 'Latest finished to do\'s';

# Authentication
$lang['password_changed_email_subject']             = 'Your password has been changed';
$lang['password_reset_email_subject']               = 'Reset your password on %s';
# Utilities
$lang['utility_activity_log']                       = 'Activity Log';
$lang['utility_activity_log_filter_by_date']        = 'Filter by date';
$lang['utility_activity_log_dt_description']        = 'Description';
$lang['utility_activity_log_dt_date']               = 'Date';
$lang['utility_activity_log_dt_staff']              = 'Staff';
$lang['utility_calendar_new_event_title']           = 'Add new event';
$lang['utility_calendar_new_event_start_date']      = 'Start Date';
$lang['utility_calendar_new_event_end_date']        = 'End Date';
$lang['utility_calendar_new_event_make_public']     = 'Public Event';
$lang['utility_calendar_event_added_successfully']   = 'New event added successfully';
$lang['utility_calendar_event_deleted_successfully'] = 'Event deleted';
$lang['utility_calendar_new_event_placeholder']     = 'Event title';


# Navigation
$lang['nav_notifications']          = 'Notifications';
$lang['nav_my_profile']             = 'My Profile';
$lang['nav_edit_profile']           = 'Edit Profile';
$lang['nav_logout']                 = 'Logout';
$lang['nav_no_notifications']       = 'No notifications found';
$lang['nav_view_all_notifications'] = 'View all notifications';
$lang['nav_customizer_tooltip']     = 'Customize Settings';
$lang['nav_notifications_tooltip']  = 'View Notifications';

## Clients
$lang['clients_required_field'] = 'This field is required';

# Footer
$lang['clients_copyright'] = 'Copyright %s';

# Announcements
$lang['clients_announcement_from']  = 'From: ';
$lang['clients_announcement_added'] = 'Added: ';

# Contracts
$lang['clients_contracts']               = 'Contracts';
$lang['clients_contracts_dt_subject']    = 'Subject';
$lang['clients_contracts_dt_start_date'] = 'Start Date';
$lang['clients_contracts_dt_end_date']   = 'End Date';

# Home
$lang['clients_quick_invoice_info']                = 'Quick Invoices Info';
$lang['clients_home_currency_select_tooltip']      = 'You need to select currency because you have invoices with different currency';

# Invoices
$lang['clients_invoice_html_btn_download'] = 'Download';

$lang['clients_my_invoices']        = 'Invoices';
$lang['clients_invoice_dt_number']  = 'Invoice #';
$lang['clients_invoice_dt_date']    = 'Date';
$lang['clients_invoice_dt_duedate'] = 'Due Date';
$lang['clients_invoice_dt_amount']  = 'Amount';
$lang['clients_invoice_dt_status']  = 'Status';

# Profile
$lang['clients_profile_heading'] = 'Profile';

# Used for edit profile and register START
$lang['clients_firstname'] = 'First Name';
$lang['clients_lastname']  = 'Last Name';
$lang['clients_email']     = 'Email Address';
$lang['clients_company']   = 'Company';
$lang['clients_vat']       = 'VAT Number';
$lang['clients_phone']     = 'Phone';
$lang['clients_country']   = 'Country';
$lang['clients_city']      = 'City';
$lang['clients_address']   = 'Address';
$lang['clients_zip']       = 'Zip';
$lang['clients_state']     = 'State';
# Used for edit profile and register END

$lang['clients_register_password']        = 'Password';
$lang['clients_register_password_repeat'] = 'Repeat Password';
$lang['clients_edit_profile_update_btn']  = 'Update';

$lang['clients_edit_profile_change_password_heading'] = 'Change Password';
$lang['clients_edit_profile_old_password']            = 'Old Password';
$lang['clients_edit_profile_new_password']            = 'New Password';
$lang['clients_edit_profile_new_password_repeat']     = 'Repeat Password';
$lang['clients_edit_profile_change_password_btn']     = 'Change Password';
$lang['clients_profile_last_changed_password']        = 'Password last changed %s';

# Knowledge base
$lang['clients_knowledge_base']                    = 'Knowledge Base';
$lang['clients_knowledge_base_articles_not_found'] = 'No knowledge base articles found';
$lang['clients_knowledge_base_find_useful']        = 'Did you find this article useful?';
$lang['clients_knowledge_base_find_useful_yes']    = 'Yes';
$lang['clients_knowledge_base_find_useful_no']     = 'No';
$lang['clients_article_only_1_vote_today']         = 'You can vote once in 24 hours';
$lang['clients_article_voted_thanks_for_feedback'] = 'Thanks for your feedback';

# Tickets
$lang['clients_ticket_open_subject']                = 'Open Ticket';
$lang['clients_ticket_open_departments']            = 'Department';
$lang['clients_tickets_heading']                    = 'Support Tickets';
$lang['clients_ticket_open_service']                = 'Service';
$lang['clients_ticket_open_priority']               = 'Priority';
$lang['clients_latest_tickets']                     = 'Latest Tickets';
$lang['clients_ticket_open_body']                   = 'Ticket Body';
$lang['clients_ticket_attachments']                 = 'Attachments';
$lang['clients_ticket_posted']                      = 'Posted: %s';
$lang['clients_single_ticket_string']               = 'Ticket';
$lang['clients_single_ticket_replied']              = 'Replied: %s';
$lang['clients_single_ticket_information_heading'] = 'Ticket Information';

$lang['clients_tickets_dt_number']     = 'Ticket #';
$lang['clients_tickets_dt_subject']    = 'Subject';
$lang['clients_tickets_dt_department'] = 'Department';
$lang['clients_tickets_dt_service']    = 'Service';
$lang['clients_tickets_dt_status']     = 'Status';
$lang['clients_tickets_dt_last_reply'] = 'Last Reply';

$lang['clients_ticket_single_department']        = 'Department: %s';
$lang['clients_ticket_single_submitted']          = 'Submitted: %s';
$lang['clients_ticket_single_status']            = 'Status:';
$lang['clients_ticket_single_priority']          = 'Priority: %s';
$lang['clients_ticket_single_add_reply_btn']     = 'Add Reply';
$lang['clients_ticket_single_add_reply_heading'] = 'Add reply to this ticket';

# Login
$lang['clients_login_heading_no_register'] = 'Please login';
$lang['clients_login_heading_register']    = 'Please login or register';
$lang['clients_login_email']               = 'Email Address';
$lang['clients_login_password']            = 'Password';
$lang['clients_login_remember']            = 'Remember me';
$lang['clients_login_login_string']        = 'Login';

# Register
$lang['clients_register_string']  = 'Register';
$lang['clients_register_heading'] = 'Register';

# Navigation
$lang['clients_nav_login']     = 'Login';
$lang['clients_nav_register']  = 'Register';
$lang['clients_nav_invoices']  = 'Invoices';
$lang['clients_nav_contracts'] = 'Contracts';
$lang['clients_nav_kb']        = 'Knowledge Base';
$lang['clients_nav_profile']   = 'Profile';
$lang['clients_nav_logout']    = 'Logout';

# Datatables
$lang['clients_dt_paginate_first']    = 'First';
$lang['clients_dt_paginate_last']     = 'Last';
$lang['clients_dt_paginate_next']     = 'Next';
$lang['clients_dt_paginate_previous'] = 'Previous';
$lang['clients_dt_empty_table']       = 'No {0} found';
$lang['clients_dt_search']            = 'Search:';
$lang['clients_dt_zero_records']      = 'No matching records found';
$lang['clients_dt_loading_records']   = 'Loading...';
$lang['clients_dt_length_menu']       = 'Show _MENU_ ';
$lang['clients_dt_info_filtered']     = '(filtered from _MAX_ total {0})';
$lang['clients_dt_info_empty']        = 'Showing 0 to 0 of 0 {0}';
$lang['clients_dt_info']              = 'Showing _START_ to _END_ of _TOTAL_ {0}';
$lang['clients_dt_empty_table']       = 'No {0} found';
$lang['clients_dt_sort_ascending']    = 'activate to sort column ascending';
$lang['clients_dt_sort_descending']   = 'activate to sort column descending';


# Version 1.0.1
# Admin
#
# Payments
$lang['payment_receipt']                               = 'Payment Receipt';
$lang['payment_for_string']                            = 'Payment For';
$lang['payment_date']                                  = 'Payment Date:';
$lang['payment_view_mode']                             = 'Payment Mode:';
$lang['payment_total_amount']                          = 'Total Amount';
$lang['payment_table_invoice_number']                  = 'Invoice Number';
$lang['payment_table_invoice_date']                    = 'Invoice Date';
$lang['payment_table_invoice_amount_total']            = 'Invoice Amount';
$lang['payment_table_payment_amount_total']            = 'Payment Amount';
$lang['payments_table_transaction_id']                 = 'Transaction ID: %s';
$lang['payment_getaway_token_not_found']               = 'Token Not Found';
$lang['online_payment_recorded_success']               = 'Payment recorded successfully';
$lang['online_payment_recorded_success_fail_database'] = 'Payment is successful but failed to insert payment to database, contact administrator';

# Leads
$lang['lead_convert_to_client']                   = 'Convert to customer';
$lang['lead_convert_to_email']                    = 'Email';
$lang['lead_convert_to_client_firstname']         = 'First Name';
$lang['lead_convert_to_client_lastname']          = 'Last Name';
$lang['lead_email_already_exists']                = 'Lead email already exists in customers data';
$lang['lead_to_client_base_converted_success']    = 'Lead converted to customer successfully';
$lang['lead_have_client_profile']                 = 'This lead have customer profile.';
$lang['lead_converted_edit_client_profile']       = 'Edit Profile';

# Invoices
$lang['view_invoice_as_customer_tooltip']                                     = 'View invoice as customer';
$lang['invoice_add_edit_recurring']                                           = 'Recurring Invoice?';
$lang['invoice_add_edit_recurring_no']                                        = 'No';
$lang['invoice_add_edit_recurring_month']                                     = 'Every %s month';
$lang['invoice_add_edit_recurring_months']                                    = 'Every %s months';
$lang['invoices_list_all']                                                    = 'All';
$lang['invoices_list_not_have_payment']                                       = 'Invoices with no payment records';
$lang['invoices_list_recurring']                                               = 'Recurring Invoices';
$lang['invoices_list_made_payment_by']                                        = 'Made Payment by %s';
$lang['invoices_create_invoice_from_recurring_only_on_paid_invoices']         = 'Create new invoice from recurring invoice only if the invoice is with status paid?';
$lang['invoices_create_invoice_from_recurring_only_on_paid_invoices_tooltip'] = 'If this field is set to YES and the recurring invoices is not with status PAID, the new invoice will NOT be created.';
$lang['send_renewed_invoice_from_recurring_to_email']                         = 'Auto send the renewed invoice to the customer';
$lang['view_invoice_pdf_link_pay']                                            = 'Pay Invoice';

# Payment modes
$lang['payment_mode_add_edit_description']         = 'Bank Accounts / Description';
$lang['payment_mode_add_edit_description_tooltip'] = 'You can set here bank accounts information. Will be shown on HTML Invoice';
$lang['payment_modes_dt_description']              = 'Bank Accounts / Description';
$lang['payment_modes_add_edit_announcement']       = 'Note: Payment modes listed below are offline modes. Online payment modes can be configured in Setup -> Settings -> Payment Gateways';
$lang['payment_mode_add_edit_active']              = 'Active';
$lang['payment_modes_dt_active']                   = 'Active';

# Contracts
$lang['contract_not_found'] = 'Contract not found. Maybe is deleted, check activity log';

# Settings
$lang['setting_bar_heading']                 = 'Setup';
$lang['settings_group_online_payment_modes'] = 'Payment Gateways';
$lang['settings_paymentmethod_mode_label']   = 'Label';
$lang['settings_paymentmethod_active']       = 'Active';
$lang['settings_paymentmethod_currencies']   = 'Currencies (coma separated)';
$lang['settings_paymentmethod_testing_mode'] = 'Enable Test Mode';

$lang['settings_paymentmethod_paypal_username']  = 'PayPal API Username';
$lang['settings_paymentmethod_paypal_password']  = 'PayPal API Password';
$lang['settings_paymentmethod_paypal_signature'] = 'API Signature';

$lang['settings_paymentmethod_stripe_api_secret_key']      = 'Stripe API Secret Key';
$lang['settings_paymentmethod_stripe_api_publishable_key'] = 'Stripe Publishable Key';
$lang['settings_limit_top_search_bar_results']             = 'Limit Top Search Bar Results to';

# Quick Actions
$lang['qa_create_invoice']  = 'Create Invoice';
$lang['qa_create_task']     = 'Create Task';
$lang['qa_create_client']   = 'Create Customer';
$lang['qa_create_contract'] = 'Create Contract';
$lang['qa_create_kba']      = 'Create Knowledge Base Article';
$lang['qa_create_survey']   = 'Create Survey';
$lang['qa_create_ticket']   = 'Open Ticket';
$lang['qa_create_staff']    = 'Create Staff Member';

## Clients
$lang['client_phonenumber'] = 'Phone';

# Main Clients
$lang['clients_register']                          = 'Register';
$lang['clients_profile_updated']                   = 'Your profile has been updated';
$lang['clients_successfully_registered']           = 'Thank your for registering';
$lang['clients_account_created_but_not_logged_in'] = 'Your account has been created but you are not logged in our system automatically. Please try to login';
# Tickets
$lang['clients_tickets_heading']                   = 'Support Tickets';

# Payments
// Uses on stripe page
$lang['payment_for_invoice'] = 'Payment for Invoice';
$lang['payment_total']       = 'Total: %s';

# Invoice
$lang['invoice_html_online_payment']             = 'Online Payment';
$lang['invoice_html_online_payment_button_text'] = 'Pay Now';
$lang['invoice_html_payment_modes_not_selected'] = 'Please Select Payment Mode';
$lang['invoice_html_amount_blank']               = 'Total amount cant be blank or zero';
$lang['invoice_html_offline_payment']            = 'Offline Payment';
$lang['invoice_html_amount']                     = 'Amount';


# Version 1.0.2
# Admin
#
# DataTables
$lang['dt_button_column_visibility']  = 'Visibility';
$lang['dt_button_reload']             = 'Reload';
$lang['dt_button_excel']              = 'Excel';
$lang['dt_button_csv']                = 'CSV';
$lang['dt_button_pdf']                = 'PDF';
$lang['dt_button_print']              = 'Print';
$lang['is_not_active_export']         = 'No';
$lang['is_active_export']             = 'Yes';

# Invoice
$lang['invoice_add_edit_advanced_options']               = 'Advanced Options';
$lang['invoice_add_edit_allowed_payment_modes']          = 'Allowed payment modes for this invoice';
$lang['invoice_add_edit_recurring_invoices_from_invoice'] = 'Created invoices from this recurring invoice';
$lang['invoice_add_edit_no_payment_modes_found']         = 'No payment modes found.';
$lang['invoice_html_total_pay']                          = 'Total: %s';

# Email templates
$lang['email_templates_table_heading_name'] = 'Template Name';
# General
$lang['discount_type']                      = 'Discount Type';
$lang['discount_type_after_tax']            = 'After Tax';
$lang['discount_type_before_tax']           = 'Before Tax';
$lang['terms_and_conditions']               = 'Terms & Conditions';
$lang['reference_no']                       = 'Reference #';
$lang['no_discount']                        = 'No discount';
$lang['view_stats_tooltip']                 = 'View Quick Stats';
# Clients
$lang['zip_from_date']                      = 'From Date:';
$lang['zip_to_date']                        = 'To Date:';
$lang['client_zip_payments']                = 'ZIP Payments';
$lang['client_zip_invoices']                = 'ZIP Invoices';
$lang['client_zip_estimates']               = 'ZIP Estimates';
$lang['client_zip_status']                  = 'Status';
$lang['client_zip_status_all']              = 'All';
$lang['client_zip_payment_modes']           = 'Payment made by';
$lang['client_zip_no_data_found']           = 'No %s found';

# Payments
$lang['payment_mode']         = 'Payment Mode';
$lang['payment_view_heading'] = 'Payment';

# Settings
$lang['settings_allow_payment_amount_to_be_modified']               = 'Allow customer to modify the amount to pay (for online payments)';
$lang['settings_survey_send_emails_per_cron_run']                   = 'How much emails to sent per hour';
$lang['settings_survey_send_emails_per_cron_run_tooltip']           = 'This option is used when sending Surveys. The Survey cron will sent X emails per hour. Some hosting providers have limit for sending emails per hour.';
$lang['settings_delete_only_on_last_invoice']                       = 'Delete invoice allowed only on last invoice';
$lang['settings_sales_estimate_prefix']                             = 'Estimate Number Prefix';
$lang['settings_sales_next_estimate_number']                        = 'Next estimate Number';
$lang['settings_sales_next_estimate_number_tooltip']                = 'Set this field to 1 if you want to start from beginning';
$lang['settings_sales_decrement_estimate_number_on_delete']         = 'Decrement estimate number on delete';
$lang['settings_sales_decrement_estimate_number_on_delete_tooltip'] = 'Do you want to decrement the estimate number when the last estimate is deleted? eq. If is set this option to YES and before estimate delete the next estimate number is 15 the next estimate number will decrement to 14.If is set to NO the number will remain to 15. If you have setup delete only on last estimate to NO you should set this option to NO too to keep the next estimate number not decremented.';
$lang['settings_sales_estimate_number_format']                      = 'Estimate Number Format';
$lang['settings_sales_estimate_number_format_year_based']           = 'Year Based';
$lang['settings_sales_estimate_number_format_number_based']         = 'Number Based (000001)';
$lang['settings_delete_only_on_last_estimate']                      = 'Delete estimate allowed only on last invoice';
$lang['settings_cron_invoice_heading']                              = 'Invoice';
$lang['settings_send_test_email_heading']                           = 'Send Test Email';
$lang['settings_send_test_email_subheading']                        = 'Send test email to make sure that your SMTP settings is set correctly.';
$lang['settings_send_test_email_string']                            = 'Email Address';
$lang['settings_smtp_settings_heading']                             = 'SMTP Settings';
$lang['settings_smtp_settings_subheading']                          = 'Setup main email';

$lang['settings_sales_heading_general']                             = 'General';
$lang['settings_sales_heading_invoice']                             = 'Invoice';
$lang['settings_sales_heading_estimates']                           = 'Estimates';
$lang['settings_sales_heading_company']                             = 'Company';
$lang['settings_sales_cron_invoice_heading']                        = 'Invoice';

# Tasks
$lang['tasks_dt_datestart'] = 'Start Date';
$lang['tasks_dt_priority']  = 'Priority';

# Invoice General
$lang['invoice_discount'] = 'Discount';

# Settings
$lang['settings_rtl_support_admin']                                   = 'RTL Admin Area (Right to Left)';
$lang['settings_rtl_support_client']                                  = 'RTL Customers Area (Right to Left)';
$lang['acs_language_editor']                                          = 'Language Editor';
$lang['settings_estimate_auto_convert_to_invoice_on_client_accept']   = 'Auto convert the estimate to invoice after client accept';
$lang['settings_exclude_estimate_from_client_area_with_draft_status'] = 'Exclude estimates with draft status from customers area';

# Months
$lang['January']   = 'January';
$lang['February']  = 'February';
$lang['March']     = 'March';
$lang['April']     = 'April';
$lang['May']       = 'May';
$lang['June']      = 'June';
$lang['July']      = 'July';
$lang['August']    = 'August';
$lang['September'] = 'September';
$lang['October']   = 'October';
$lang['November']  = 'November';
$lang['December']  = 'December';

# Time ago function translate
$lang['time_ago_just_now']  = 'Just now';
$lang['time_ago_minute']    = 'one minute ago';
$lang['time_ago_minutes']   = '%s minutes ago';
$lang['time_ago_hour']      = 'an hour ago';
$lang['time_ago_hours']     = '%s hrs ago';
$lang['time_ago_yesterday'] = 'yesterday';
$lang['time_ago_days']      = '%s days ago';
$lang['time_ago_week']      = 'a week ago';
$lang['time_ago_weeks']     = '%s weeks ago';
$lang['time_ago_month']     = 'a month ago';
$lang['time_ago_months']    = '%s months ago';
$lang['time_ago_year']      = 'one year ago';
$lang['time_ago_years']     = '%s years ago';


# Estimates
$lang['estimates']                          = 'Estimates';
$lang['estimate']                           = 'Estimate';
$lang['estimate_lowercase']                 = 'estimate';
$lang['create_new_estimate']                = 'Create New Estimate';
$lang['view_estimate']                      = 'View estimate';
$lang['estimate_sent_to_client_success']    = 'The estimate is sent successfully to the client';
$lang['estimate_sent_to_client_fail']       = 'Problem while sending the estimate';
$lang['estimate_reminder_send_problem']     = 'Problem sending estimate overdue reminder';
$lang['estimate_details']                   = 'Estimate Details';
$lang['estimate_view']                      = 'View estimate';
$lang['estimate_select_customer']           = 'Customer';
$lang['estimate_add_edit_number']           = 'Estimate Number';
$lang['estimate_add_edit_date']             = 'Estimate Date';
$lang['estimate_add_edit_expirydate']       = 'Expiry Date';
$lang['estimate_add_edit_currency']         = 'Currency';
$lang['estimate_add_edit_client_note']      = 'Client Note';
$lang['estimate_add_edit_admin_note']       = 'Admin Note';
$lang['estimate_add_edit_new_item']         = 'New Item';
$lang['estimate_add_edit_search_item']      = 'Search Items';
$lang['estimates_toggle_table_tooltip']     = 'Toggle Table';
$lang['estimate_add_edit_advanced_options'] = 'Advanced Options';
$lang['estimate_vat']                       = 'VAT Number';
$lang['estimate_to']                        = 'To';
$lang['estimates_list_all']                 = 'All';

$lang['estimate_invoiced_date']                  = 'Estimate Invoiced on %s';
$lang['edit_estimate_tooltip']                   = 'Edit Estimate';
$lang['delete_estimate_tooltip']                 = 'Delete Estimate';
$lang['estimate_sent_to_email_tooltip']          = 'Send to Email';
$lang['estimate_already_send_to_client_tooltip'] = 'This estimate is already sent to the client %s';
$lang['estimate_view_activity_tooltip']          = 'Activity Log';

$lang['estimate_send_to_client_modal_heading']    = 'Send estimate to client';
$lang['estimate_send_to_client_attach_pdf']       = 'Attach estimate PDF';
$lang['estimate_send_to_client_preview_template'] = 'Preview Email Template';

$lang['estimate_dt_table_heading_number']     = 'Estimate #';
$lang['estimate_dt_table_heading_date']       = 'Date';
$lang['estimate_dt_table_heading_client']     = 'Customer';
$lang['estimate_dt_table_heading_expirydate'] = 'Expiry Date';
$lang['estimate_dt_table_heading_amount']     = 'Amount';
$lang['estimate_dt_table_heading_status']     = 'Status';

$lang['estimate_email_link_text']    = 'View Estimate';
$lang['estimate_convert_to_invoice'] = 'Convert to Invoice';
# Home
$lang['home_unfinished_tasks']       = 'Unfinished Tasks';

# Clients
$lang['client_estimates_tab'] = 'Estimates';
$lang['client_payments_tab']  = 'Payments';


# Estimate General
$lang['estimate_pdf_heading']            = 'ESTIMATE';
$lang['estimate_table_item_heading']     = 'Item';
$lang['estimate_table_quantity_heading'] = 'Qty';
$lang['estimate_table_rate_heading']     = 'Rate';
$lang['estimate_table_tax_heading']      = 'Tax';
$lang['estimate_table_amount_heading']   = 'Amount';
$lang['estimate_subtotal']               = 'Sub Total';
$lang['estimate_adjustment']             = 'Adjustment';
$lang['estimate_discount']               = 'Discount';
$lang['estimate_total']                  = 'Total';
$lang['estimate_to']                     = 'To';
$lang['estimate_data_date']              = 'Estimate Date';
$lang['estimate_data_expiry_date']       = 'Expiry Date';
$lang['estimate_note']                   = 'Note:';
$lang['estimate_status_draft']           = 'Draft';
$lang['estimate_status_sent']            = 'Sent';
$lang['estimate_status_declined']        = 'Declined';
$lang['estimate_status_accepted']        = 'Accepted';
$lang['estimate_status_expired']         = 'Expired';
$lang['estimate_note']                   = 'Note:';

# Quick create
$lang['qa_create_estimate'] = 'Create Estimate';
$lang['qa_create_lead']     = 'Create Lead';


## Clients
$lang['clients_estimate_dt_number']             = 'Estimate #';
$lang['clients_estimate_dt_date']               = 'Date';
$lang['clients_estimate_dt_duedate']            = 'Expiry Date';
$lang['clients_estimate_dt_amount']             = 'Amount';
$lang['clients_estimate_dt_status']             = 'Status';
$lang['clients_nav_estimates']                  = 'Estimates';
$lang['clients_decline_estimate']               = 'Decline';
$lang['clients_accept_estimate']                = 'Accept';
$lang['clients_my_estimates']                   = 'Estimates';
$lang['clients_estimate_invoiced_successfully']  = 'Thank you for accepting the estimate. Please review the created invoice for the estimate';
$lang['clients_estimate_accepted_not_invoiced'] = 'Thank you for accepting this estimate';
$lang['clients_estimate_declined']              = 'Estimate declined. You can accept the estimate any time before expiry date';
$lang['clients_estimate_failed_action']         = 'Failed to take action on this estimate';
$lang['client_add_edit_profile']                = 'Profile';

# Custom Fields
$lang['custom_field']                          = 'Custom field';
$lang['custom_field_lowercase']                = 'custom field';
$lang['custom_fields']                         = 'Custom Fields';
$lang['custom_fields_lowercase']               = 'custom fields';
$lang['new_custom_field']                      = 'New Custom Field';
$lang['custom_field_name']                     = 'Field Name';
$lang['custom_field_add_edit_type']            = 'Type';
$lang['custom_field_add_edit_belongs_top']     = 'Field Belongs to';
$lang['custom_field_add_edit_options']         = 'Options';
$lang['custom_field_add_edit_options_tooltip'] = 'Only use for Select, Checkbox types. Populate the field by separating the options by coma. eq. apple,orange,banana';
$lang['custom_field_add_edit_order']           = 'Order';

$lang['custom_field_dt_field_to']       = 'Belongs to';
$lang['custom_field_dt_field_name']     = 'Name';
$lang['custom_field_dt_field_type']     = 'Type';
$lang['custom_field_add_edit_active']   = 'Active';
$lang['custom_field_add_edit_disabled'] = 'Disabled';

# Ticket replies
$lang['ticket_reply']           = 'Ticket Reply';
$lang['ticket_reply_lowercase'] = 'ticket reply';

# Admin Customizer Sidebar
$lang['asc_custom_fields'] = 'Custom Fields';

# Contracts
$lang['contract_types']          = 'Contracts Types';
$lang['contract_type']           = 'Contract type';
$lang['new_contract_type']       = 'New Contract Type';
$lang['contract_type_lowercase'] = 'contract';
$lang['contract_type_name']      = 'Name';

$lang['contract_types_list_name'] = 'Contract Type';

# Customizer Menu
$lang['acs_contracts']      = 'Contracts';
$lang['acs_contract_types'] = 'Contract Types';

# Version 1.0.4
# Invoice Items
$lang['invoice_item_long_description']     = 'Long Description';
# Customers
$lang['client_delete_invoices_warning']    = 'This client have invoices or estimates on the account. You cant delete this client. Change all invoices to another client in a future then delete.';
$lang['clients_list_phone']                = 'Phone';
$lang['client_expenses_tab']               = 'Expenses';
$lang['customers_summary']                 = 'Customers Summary';
$lang['customers_summary_active']          = 'Active Contacts';
$lang['customers_summary_inactive']        = 'Inactive Contacts';
$lang['customers_summary_logged_in_today'] = 'Contacts Logged In Today';

# Authentication
$lang['admin_auth_forgot_password_email']             = 'Email Address';
$lang['admin_auth_forgot_password_heading']           = 'Forgot Password';
$lang['admin_auth_login_heading']                     = 'Login';
$lang['admin_auth_login_email']                       = 'Email Address';
$lang['admin_auth_login_password']                    = 'Password';
$lang['admin_auth_login_remember_me']                 = 'Remember me';
$lang['admin_auth_login_button']                      = 'Login';
$lang['admin_auth_login_fp']                          = 'Forgot Password?';
$lang['admin_auth_reset_password_heading']            = 'Reset Password';
$lang['admin_auth_reset_password']                    = 'Password';
$lang['admin_auth_reset_password_repeat']             = 'Repeat Password';
$lang['admin_auth_invalid_email_or_password']         = 'Invalid email or password';
$lang['admin_auth_inactive_account']                  = 'Inactive Account';
# Calender
$lang['calendar_estimate']                            = 'Estimate';
$lang['calendar_invoice']                             = 'Invoice';
$lang['calendar_contract']                            = 'Contract';
$lang['calendar_customer_reminder']                     = 'Client Reminder';
$lang['calendar_event']                               = 'Event';
$lang['calendar_task']                                = 'Task';
# Leads
$lang['lead_edit_delete_tooltip']                     = 'Delete Lead';
$lang['lead_attachments']                             = 'Attachments';
# Admin Customizer Sidebar
$lang['acs_finance']                                  = 'Finance';
# Settings

$lang['settings_show_sale_agent_on_invoices']         = 'Show Sale Agent on Invoice';
$lang['settings_show_sale_agent_on_estimates']        = 'Show Sale Agent on Estimate';
$lang['settings_predefined_predefined_term']          = 'Predefined Terms & Conditions';
$lang['settings_predefined_clientnote']               = 'Predefined Client Note';
$lang['settings_custom_pdf_logo_image_url']           = 'Custom PDF Company Logo URL';
$lang['settings_custom_pdf_logo_image_url_tooltip']   = 'Probably you will have problems with PNG images with transparency that are handled in different way depending on the php-imagick or php-gd version used. Try to update php-imagick and disable php-gd
. If you leave this field blank the uploaded logo will be used.';

# General
$lang['sale_agent_string']               = 'Sale Agent';
$lang['amount_display_in_base_currency'] = 'Amount is displayed in your base currency - Only use this report if you are using 1 currency for payments and expenses.';
# Leads
$lang['leads_summary']                                         = 'Leads Summary';

# Contracts
$lang['contract_value']                 = 'Contract Value';
$lang['contract_trash']                 = 'Trash';
$lang['contracts_view_trash']           = 'View Trash';
$lang['contracts_view_all']             = 'All';
$lang['contracts_view_exclude_trashed'] = 'Exclude Trashed Contracts';
$lang['contract_value_tooltip']         = 'Base currency will be used.';
$lang['contract_trash_tooltip']         = 'If you add contract to trash, won\'t be shown on client side, won\'t be included in chart and other stats and also by default won\'t be shown when you will list all contracts.';
$lang['contract_summary_active']              = 'Active';
$lang['contract_renew_heading']               = 'Renew Contract';
$lang['contract_summary_heading']             = 'Contract Summary';
$lang['contract_summary_expired']             = 'Expired';
$lang['contract_summary_about_to_expire']     = 'About to Expire';
$lang['contract_summary_recently_added']      = 'Recently Added';
$lang['contract_summary_trash']               = 'Trash';
$lang['contract_summary_by_type']             = 'Contracts by Type';
$lang['contract_summary_by_type_value']       = 'Contracts Value by Type';
$lang['contract_renewed_successfully']         = 'Contract renewed successfully';
$lang['contract_renewed_fail']                = 'Problem while renewing the contract. Contact administrator';
$lang['no_contract_renewals_found']           = 'Renewals for this contract is not found';
$lang['no_contract_renewals_history_heading'] = 'Contract Renewal History';
$lang['contract_renewed_by']                  = '%s renewed this contract';
$lang['contract_renewal_deleted']             = 'Renewal successfully deleted';
$lang['contract_renewal_delete_fail']         = 'Failed to delete contract renewal. Contact administrator';

$lang['contract_renewal_new_value'] = 'New Contract Value: %s';
$lang['contract_renewal_old_value'] = 'Old Contract Value: %s';

$lang['contract_renewal_new_start_date'] = 'New Start Date: %s';
$lang['contract_renewal_old_start_date'] = 'Old Contract Start Date was: %s';

$lang['contract_renewal_new_end_date'] = 'New End Date: %s';
$lang['contract_renewal_old_end_date'] = 'Old Contract End Date was: %s';
$lang['contract_attachment']           = 'Attachment';
$lang['contract_attachment_lowercase'] = 'attachment';

# Admin Aside Menu
$lang['als_goals_tracking']     = 'Goals Tracking';
$lang['als_expenses']           = 'Expenses';
$lang['als_reports_expenses']   = 'Expenses';
$lang['als_expenses_vs_income'] = 'Expenses vs Income';

# Invoices
$lang['invoice_attach_file']           = 'Attach File';
$lang['invoice_mark_as_sent']          = 'Mark as Sent';
$lang['invoice_marked_as_sent']        = 'Invoice marked as sent successfully';
$lang['invoice_marked_as_sent_failed'] = 'Failed to mark invoice as sent';

# Quick Actions
$lang['qa_new_goal']    = 'Setup New Goal';
$lang['qa_new_expense'] = 'Record Expense';

# Goals Tracking
$lang['goals']                                         = 'Goals';
$lang['goal']                                          = 'Goal';
$lang['goals_tracking']                                = 'Goals Tracking';
$lang['new_goal']                                      = 'New Goal';
$lang['goal_lowercase']                                = 'goal';
$lang['goal_start_date']                               = 'Start Date';
$lang['goal_end_date']                                 = 'End Date';
$lang['goal_subject']                                  = 'Subject';
$lang['goal_description']                              = 'Description';
$lang['goal_type']                                     = 'Goal Type';
$lang['goal_achievement']                              = 'Achievement';
$lang['goal_contract_type']                            = 'Contract Type';
$lang['goal_notify_when_fail']                         = 'Notify staff members when goal failed to achieve';
$lang['goal_notify_when_achieve']                      = 'Notify staff members when goal achieve';
$lang['goal_progress']                                 = 'Progress';
$lang['goal_total']                                    = 'Total: %s';
$lang['goal_result_heading']                           = 'Goal Progress';
$lang['goal_income_shown_in_base_currency']            = 'Total income is shown in your base currency';
$lang['goal_notify_when_end_date_arrives']             = 'The staff members will be notified when the end date arrives (Requires CRON).';
$lang['goal_staff_members_notified_about_achievement'] = 'The staff members are notified about this goal achievement';
$lang['goal_staff_members_notified_about_failure']     = 'Staff member are notified about the failure';
$lang['goal_notify_staff_manually']                     = 'Notify Staff Members Manually';
$lang['goal_notify_staff_notified_manually_success']    = 'The staff members are notified about this goal result';
$lang['goal_notify_staff_notified_manually_fail']       = 'Failed to notify staff members about this goal result';

$lang['goal_achieved'] = 'Achieved';
$lang['goal_failed']   = 'Failed';
$lang['goal_close']    = 'Very Close';

$lang['goal_type_total_income']                                         = 'Achieve Total Income';
$lang['goal_type_convert_leads']                                        = 'Convert X Leads';
$lang['goal_type_increase_customers_without_leads_conversions']         = 'Increase Customer Number';
$lang['goal_type_increase_customers_without_leads_conversions_subtext'] = 'Leads Conversion is Excluded';

$lang['goal_type_increase_customers_with_leads_conversions']         = 'Increase Customer Number';
$lang['goal_type_increase_customers_with_leads_conversions_subtext'] = 'Leads Conversions is Included';
$lang['goal_type_make_contracts_by_type_calc_database']              = 'Make Contracts By Type';
$lang['goal_type_make_contracts_by_type_calc_database_subtext']      = 'Is calculated from the date added to database';
$lang['goal_type_make_contracts_by_type_calc_date']                  = 'Make Contracts By Type';
$lang['goal_type_make_contracts_by_type_calc_date_subtext']          = 'Is calculated from the contract start date';
$lang['goal_type_total_estimates_converted']                         = 'X Estimates Conversion ';
$lang['goal_type_total_estimates_converted_subtext']                 = 'Will be taken only estimates that will be converted to invoices';
$lang['goal_type_income_subtext']                                    = 'Income will be calculated in your base currency (not converted)';
# Payments
$lang['payment_transaction_id']                                      = 'Transaction ID';
# Settings Menu
$lang['acs_expenses']                                                = 'Expenses';
$lang['acs_expense_categories']                                      = 'Expenses Categories';
# Expenses
$lang['expense_category']                                            = 'Expense Category';
$lang['expense_category_lowercase']                                  = 'expense category';
$lang['new_expense']                                                 = 'Record Expense';
$lang['expense_add_edit_name']                                       = 'Category Name';
$lang['expense_add_edit_description']                                = 'Category Description';
$lang['expense_categories']                                          = 'Expense Categories';
$lang['new_expense_category']                                        = 'New Category';
$lang['dt_expense_description']                                      = 'Description';
$lang['expense']                                                     = 'Expense';
$lang['expenses']                                                    = 'Expenses';
$lang['expense_lowercase']                                           = 'expense';
$lang['expense_add_edit_tax']                                        = 'Tax';
$lang['expense_add_edit_customer']                                   = 'Customer';
$lang['expense_add_edit_currency']                                   = 'Currency';
$lang['expense_add_edit_note']                                       = 'Note';
$lang['expense_add_edit_date']                                       = 'Expense Date';
$lang['expense_add_edit_amount']                                     = 'Amount';
$lang['expense_add_edit_billable']                                   = 'Billable';
$lang['expense_add_edit_attach_receipt']                             = 'Attach Receipt';
$lang['expense_add_edit_reference_no']                               = 'Reference #';
$lang['expense_receipt']                                             = 'Expense Receipt';
$lang['expense_receipt_lowercase']                                   = 'expense receipt';
$lang['expense_dt_table_heading_category']                           = 'Category';
$lang['expense_dt_table_heading_amount']                             = 'Amount';
$lang['expense_dt_table_heading_date']                               = 'Date';
$lang['expense_dt_table_heading_reference_no']                       = 'Reference #';
$lang['expense_dt_table_heading_customer']                           = 'Customer';
$lang['expense_dt_table_heading_payment_mode']                       = 'Payment Mode';
$lang['expense_converted_to_invoice']                                = 'Expense successfully converted to invoice';
$lang['expense_converted_to_invoice_fail']                           = 'Failed to convert this expense to invoice check error log.';
$lang['expense_copy_success']                                        = 'The expense is copied successfully.';
$lang['expense_copy_fail']                                           = 'Failed to copy expense. Please check the required fields and try again';
$lang['expenses_list_all']                                           = 'All';
$lang['expenses_list_billable']                                      = 'Billable';
$lang['expenses_list_non_billable']                                  = 'Non Billable';
$lang['expenses_list_invoiced']                                      = 'Invoiced';
$lang['expenses_list_unbilled']                                      = 'Not Invoiced';
$lang['expenses_list_recurring']                                     = 'Recurring';
$lang['expense_invoice_delete_not_allowed']                          = 'You cant delete this expense. The expense is already invoiced.';
$lang['expense_convert_to_invoice']                                  = 'Convert To Invoice';
$lang['expense_edit']                                                = 'Edit Expense';
$lang['expense_delete']                                              = 'Delete';
$lang['expense_copy']                                                = 'Copy';
$lang['expense_invoice_not_created']                                 = 'Invoice Not Created';
$lang['expense_billed']                                              = 'Billed';
$lang['expense_not_billed']                                          = 'Invoice Not Paid';
$lang['expense_customer']                                            = 'Customer';
$lang['expense_note']                                                = 'Note:';
$lang['expense_date']                                                = 'Date:';
$lang['expense_ref_noe']                                             = 'Ref #:';
$lang['expense_tax']                                                 = 'Tax:';
$lang['expense_amount']                                              = 'Amount:';
$lang['expense_recurring_indicator']                                 = 'Recurring';
$lang['expense_already_invoiced']                                    = 'This expense is already invoiced';
$lang['expense_recurring_auto_create_invoice']                       = 'Auto Create Invoice';
$lang['expense_recurring_send_custom_on_renew']                      = 'Send the invoice to customer email when expense re-created';
$lang['expense_recurring_autocreate_invoice_tooltip']                = 'If this option is checked the invoice for the customer will be auto created when the expense will be renewed.';
$lang['report_expenses_full']                                        = 'Full Report';
$lang['expenses_yearly_by_categories']                               = 'Expenses Yearly by Categories';
$lang['total_expenses_for']                                          = 'Total Expenses for'; // year
$lang['expenses_report_for']                                         = 'Expenses for'; // year
# Custom fields
$lang['custom_field_required']                                       = 'Required';
$lang['custom_field_show_on_pdf']                                    = 'Show on PDF';
$lang['custom_field_leads']                                          = 'Leads';
$lang['custom_field_customers']                                      = 'Customers';
$lang['custom_field_staff']                                          = 'Staff';
$lang['custom_field_contracts']                                      = 'Contracts';
$lang['custom_field_tasks']                                          = 'Tasks';
$lang['custom_field_expenses']                                       = 'Expenses';
$lang['custom_field_invoice']                                        = 'Invoice';
$lang['custom_field_estimate']                                       = 'Estimate';
# Tickets
$lang['ticket_single_private_staff_notes']                           = 'Private Staff Notes';


# Business News
$lang['business_news'] = 'Business News';

# Navigation
$lang['nav_todo_items']               = 'Todo items';
# Clients
# Contracts
$lang['clients_contracts_type']       = 'Contract Type';
# Version 1.0.5
# General
$lang['no_tax']                             = 'No Tax';
$lang['numbers_not_formatted_while_editing'] = 'The rate in the input field is not formatted while edit/add item and should remain not formatted do not try to format it manually in here.';
# Contracts
$lang['contracts_view_expired']             = 'Expired';
$lang['contracts_view_without_dateend']     = 'Contracts Without Date End';

# Email Templates
$lang['email_template_contracts_fields_heading'] = 'Contracts';
# Invoices General
$lang['invoice_estimate_general_options']        = 'General Options';
$lang['invoice_table_item_description']          = 'Description';
$lang['invoice_recurring_indicator']             = 'Recurring';

# Estimates
$lang['estimate_convert_to_invoice_successfully'] = 'Estimate converted to invoice successfully';
$lang['estimate_table_item_description']         = 'Description';

# Version 1.0.6
# Invoices
# Currencies
$lang['cant_delete_base_currency'] = 'You cant delete the base currency. You need to assign new base currency the delete this.';
$lang['invoice_copy']              = 'Copy Invoice';
$lang['invoice_copy_success']      = 'Invoice copied successfully';
$lang['invoice_copy_fail']         = 'Failed to copy invoice';
$lang['invoice_due_after_help']    = 'Set zero to avoid calculation';

$lang['show_shipping_on_invoice'] = 'Show shipping details in invoice';

# Estimates
$lang['show_shipping_on_estimate']         = 'Show shipping details in estimate';
$lang['is_invoiced_estimate_delete_error'] = 'This estimate is invoiced. You cant delete the estimate';

# Customers & Invoices / Estimates
$lang['ship_to']                  = 'Ship to';
$lang['customer_profile_details'] = 'Customer Details';
$lang['billing_shipping']         = 'Billing & Shipping';
$lang['billing_address']          = 'Billing Address';
$lang['shipping_address']         = 'Shipping Address';

$lang['billing_street']  = 'Street';
$lang['billing_city']    = 'City';
$lang['billing_state']   = 'State';
$lang['billing_zip']     = 'Zip Code';
$lang['billing_country'] = 'Country';

$lang['shipping_street']                    = 'Street';
$lang['shipping_city']                      = 'City';
$lang['shipping_state']                     = 'State';
$lang['shipping_zip']                       = 'Zip Code';
$lang['shipping_country']                   = 'Country';
$lang['get_shipping_from_customer_profile'] = 'Get shipping details from customer profile';

# Customer
$lang['customer_file_from']                                    = 'Showing from %s';
$lang['customer_default_currency']                             = 'Default Currency';
$lang['customer_no_attachments_found']                         = 'No attachments found';
$lang['customer_update_address_info_on_invoices']              = 'Update the shipping/billing info on all previous invoices/estimates';
$lang['customer_update_address_info_on_invoices_help']         = 'If you check this field shipping and billing info will be updated to all invoices and estimates. Note: Invoices with status paid won\'t be affected.';
$lang['setup_google_api_key_customer_map']                     = 'Setup google api key in order to view to customer map';
$lang['customer_attachments_file']                             = 'File';
$lang['client_send_set_password_email']                        = 'Send SET password email';
$lang['customer_billing_same_as_profile']                      = 'Same as Customer Info';
$lang['customer_billing_copy']                                 = 'Copy Billing Address';
$lang['customer_map']                                          = 'Map';
$lang['set_password_email_sent_to_client']                     = 'Email to set password is successfully sent to contact';
$lang['set_password_email_sent_to_client_and_profile_updated'] = 'Profile updated and email to set password is successfully sent to contact';
$lang['customer_attachments']                                  = 'Files';
$lang['customer_longitude']                                    = 'Longitude (Google Maps)';
$lang['customer_latitude']                                     = 'Latitude (Google Maps)';

# Authentication
$lang['admin_auth_set_password']          = 'Password';
$lang['admin_auth_set_password_repeat']   = 'Repeat Password';
$lang['admin_auth_set_password_heading']  = 'Set Password';
$lang['password_set_email_subject']       = 'Set new password on %s';
# General
$lang['apply']                            = 'Apply';
$lang['department_calendar_id']           = 'Google Calendar ID';
$lang['kan_ban_string']                   = 'Kan Ban';
$lang['localization_default_language']    = 'Default Language';
$lang['system_default_string']            = 'System Default';
$lang['advanced_options']                 = 'Advanced Options';
# Expenses
$lang['expense_list_invoice']             = 'Invoiced';
$lang['expense_list_billed']              = 'Billed';
$lang['expense_list_unbilled']            = 'Not Invoiced';
# Leads
$lang['lead_merge_custom_field']          = 'Merge as custom field';
$lang['lead_merge_custom_field_existing'] = 'Merge with database field';
$lang['lead_dont_merge_custom_field']     = 'Do not merge';
$lang['no_lead_notes_found']              = 'No lead notes found';
$lang['leads_view_list']                  = 'List';
$lang['lost_leads']                       = 'Lost Leads';
$lang['junk_leads']                       = 'Junk Leads';
$lang['lead_mark_as_lost']                = 'Mark as lost';
$lang['lead_unmark_as_lost']              = 'Unmark Lead as lost';
$lang['lead_marked_as_lost']              = 'Lead marked as lost successfully';
$lang['lead_unmarked_as_lost']            = 'Lead unmarked as lost successfully';
$lang['leads_status_color']               = 'Color';

$lang['lead_mark_as_junk']     = 'Mark as junk';
$lang['lead_unmark_as_junk']   = 'Unmark Lead as junk';
$lang['lead_marked_as_junk']   = 'Lead marked as junk successfully';
$lang['lead_unmarked_as_junk'] = 'Lead unmarked as junk successfully';

$lang['lead_not_found']                                                      = 'Lead Not Found';
$lang['lead_lost']                                                           = 'Lost';
$lang['lead_junk']                                                           = 'Junk';
$lang['leads_not_assigned']                                                  = 'Not Assigned';
# Contacts
$lang['contract_not_visible_to_client']                                      = 'Hide from customer';
$lang['contract_edit_overview']                                              = 'Contract Overview';
$lang['contract_attachments']                                                = 'Attachments';
# Tasks
$lang['task_view_make_public']                                               = 'Make public';
$lang['task_is_private']                                                     = 'Private Task';
$lang['task_finished']                                                       = 'Finished';
$lang['task_single_related']                                                 = 'Related';
$lang['task_unmark_as_complete']                                             = 'Unmark as complete';
$lang['task_unmarked_as_complete']                                           = 'Task unmarked as complete';
$lang['task_relation']                                                       = 'Related';
$lang['task_public']                                                         = 'Public';
$lang['task_public_help']                                                    = 'If you set this task to public will be visible for all staff members. Otherwise will be only visible to members who are assignees,followers,creator or administrators';
# Settings
$lang['settings_general_favicon']                                            = 'Favicon';
$lang['settings_output_client_pdfs_from_admin_area_in_client_language']      = 'Output client PDF documents from admin area in client language';
$lang['settings_output_client_pdfs_from_admin_area_in_client_language_help'] = 'If this options is set to yes and eq. the system default language is English and client have setup language french the pdf documents will be outputted in the client language';
$lang['settings_cron_surveys']                                               = 'Surveys';
$lang['settings_default_tax']                                                = 'Default Tax';
$lang['setup_calendar_by_departments']                                       = 'Setup calendar by Departments';
$lang['settings_calendar']                                                   = 'Calendar';
$lang['settings_sales_invoice_due_after']                                    = 'Invoice due after (days)';
$lang['settings_google_api']                                                 = 'Google API Key';
$lang['settings_gcal_main_calendar_id']                                      = 'Google Calendar ID';
$lang['settings_gcal_main_calendar_id_help']                                 = 'This is the main company calendar. All events from this calendar will be shown. If you want to specify a calendar based on departments you can add in the department Google Calendar ID.';

$lang['show_on_calendar']                  = 'Show on Calendar';
$lang['show_invoices_on_calendar']         = 'Invoices';
$lang['show_estimates_on_calendar']        = 'Estimates';
$lang['show_contracts_on_calendar']        = 'Contracts';
$lang['show_tasks_on_calendar']            = 'Tasks';
$lang['show_customer_reminders_on_calendar'] = 'Customer Reminders';

# Leads
$lang['copy_custom_fields_convert_to_customer']                      = 'Copy custom fields to customer profile';
$lang['copy_custom_fields_convert_to_customer_help']                 = 'If any of the following custom fields do not exists for customer will be auto created with the same name otherwise only the value will be copied from the lead profile.';
$lang['lead_profile']                                                = 'Profile';
$lang['lead_is_client']                                              = 'Customer';
$lang['leads_kan_ban_notes_title']                                   = 'Notes';
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

$lang['kb_group_color']                = 'Color';
$lang['kb_group_order']                = 'Order';
# Utilities - BULK PDF Exporter
$lang['bulk_pdf_exporter']             = 'Bulk PDF Export';
$lang['bulk_export_pdf_payments']      = 'Payments';
$lang['bulk_export_pdf_estimates']     = 'Estimates';
$lang['bulk_export_pdf_invoices']      = 'Invoices';
$lang['bulk_pdf_export_button']        = 'Export';
$lang['bulk_pdf_export_select_type']   = 'Select Type';
$lang['no_data_found_bulk_pdf_export'] = 'No data found for export';
$lang['bulk_export_status_all']        = 'All';
$lang['bulk_export_status']            = 'Status';
$lang['bulk_export_zip_payment_modes'] = 'Made payments by';
$lang['bulk_export_include_tag']       = 'Include Tag';
$lang['bulk_export_include_tag_help']  = 'eq. Original or Copy. The tag will be outputted in the PDF. Recommended to use only 1 tag';
# Predefined replies
$lang['no_predefined_replies_found']   = 'No predefined replies found';
## Clients area
$lang['clients_contract_attachments']  = 'Attachments';
# Backup
$lang['backup_type_full']              = 'Full Backup';
$lang['backup_type_db']                = 'Database Backup';

$lang['auto_backup_options_updated']     = 'Auto backup options updated';
$lang['auto_backup_every']               = 'Create backup every X days';
$lang['auto_backup_enabled']             = 'Enabled (Requires Cron)';
$lang['auto_backup']                     = 'Auto backup';
$lang['backup_delete']                   = 'Backup Deleted';
$lang['create_backup']                   = 'Create Backup';
$lang['backup_success']                  = 'Backup is made successfully';
$lang['utility_backup']                  = 'Database Backup';
$lang['utility_create_new_backup_db']    = 'Create Database Backup';
$lang['utility_backup_table_backupname'] = 'Backup';
$lang['utility_backup_table_backupsize'] = 'Backup size';
$lang['utility_backup_table_backupdate'] = 'Date';
$lang['utility_db_backup_note']          = 'Note: Due to the limited execution time and memory available to PHP, backing up very large databases may not be possible. If your database is very large you might need to backup directly from your SQL server via the command line, or have your server admin do it for you if you do not have root privileges.';

# Version 1.0.7
## Customers - portal
$lang['clients_nav_proposals'] = 'Proposals';
$lang['clients_nav_support']   = 'Support';
# General
$lang['more']                  = 'More';
$lang['add_item']              = 'Add Item';
$lang['goto_admin_area']       = 'Go to admin area';
$lang['click_here_to_edit']    = 'Click here to edit';
$lang['delete']                = 'Delete %s';
$lang['welcome_top']           = 'Welcome %s';

# Customers
$lang['customer_permissions']         = 'Permissions';
$lang['customer_permission_invoice']  = 'Invoices';
$lang['customer_permission_estimate'] = 'Estimate';
$lang['customer_permission_proposal'] = 'Proposals';
$lang['customer_permission_contract'] = 'Contracts';
$lang['customer_permission_support']  = 'Support';


#Tasks
$lang['task_related_to'] = 'Related To';

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
$lang['simulate_import']             = 'Simulate Import';
$lang['import_upload_failed']        = 'Upload Failed';
$lang['import_total_imported']       = 'Total Imported: %s';
$lang['import_leads']                = 'Import Leads';
$lang['import_customers']            = 'Import Customers';
$lang['choose_csv_file']             = 'Choose CSV File';
$lang['import']                      = 'Import';
$lang['lead_import_status']          = 'Status';
$lang['lead_import_source']          = 'Source';

# Bulk PDF Export
$lang['bulk_export_pdf_proposals'] = 'Proposals';

# Invoices
$lang['delete_invoice'] = 'Delete';

# Calendar
$lang['calendar_lead_reminder'] = 'Lead Reminder';

$lang['items']      = 'Items';
$lang['support']    = 'Support';
$lang['new_ticket'] = 'New Ticket';

# Reminders
$lang['client_edit_set_reminder_title'] = 'Add customer reminder';
$lang['lead_set_reminder_title']        = 'Add lead reminder';
$lang['set_reminder_tooltip']           = 'This option allows you to never forget anything about your customers.';
$lang['client_reminders_tab']           = 'Reminders';
$lang['leads_reminders_tab']            = 'Reminders';

# Tickets
$lang['delete_ticket_reply']  = 'Delete Reply';
$lang['ticket_priority_edit'] = 'Edit Priority';
$lang['ticket_priority_add']  = 'Add Priority';
$lang['ticket_status_edit']   = 'Edit Ticket Status';
$lang['ticket_service_edit']  = 'Edit Ticket Service';
$lang['edit_department']      = 'Edit Department';

# Expenses
$lang['edit_expense_category']                                    = 'Edit Expense Category';
# Settings
$lang['customer_default_country']                                 = 'Default Country';
$lang['settings_sales_require_client_logged_in_to_view_estimate'] = 'Require client to be logged in to view estimate';
$lang['set_reminder']                                             = 'Set Reminder';
$lang['set_reminder_date']                                        = 'Date to be notified';
$lang['reminder_description']                                     = 'Set description';
$lang['reminder_notify_me_by_email']                              = 'Send also an email for this reminder';
$lang['reminder_added_successfully']                               = 'Reminder added successfully. You will be notified in time.';
$lang['reminder_description']                                     = 'Description';
$lang['reminder_date']                                            = 'Date';
$lang['reminder_staff']                                           = 'Remind';
$lang['reminder_is_notified']                                     = 'Is notified?';
$lang['reminder_is_notified_boolean_no']                          = 'No';
$lang['reminder_is_notified_boolean_yes']                         = 'Yes';
$lang['reminder_set_to']                                          = 'Set reminder to';
$lang['reminder_deleted']                                         = 'Reminder deleted successfully';
$lang['reminder_failed_to_delete']                                = 'Failed to delete the reminder';
$lang['show_invoice_estimate_status_on_pdf']                      = 'Show invoice/estimate status on PDF';
$lang['email_piping_default_priority']                            = 'Default priority on piped ticket';
$lang['show_lead_reminders_on_calendar']                          = 'Lead Reminders';
$lang['tickets_piping']                                           = 'Email Piping';
$lang['email_piping_only_replies']                                = 'Only Replies Allowed by Email';
$lang['email_piping_only_registered']                             = 'Pipe Only on Registered Users';

# Estimates
$lang['view_estimate_as_client']         = 'View estimate as customer';
$lang['estimate_mark_as']                = 'Mark as %s';
$lang['estimate_status_changed_success'] = 'Estimate status changed';
$lang['estimate_status_changed_fail']    = 'Failed to change estimate status';
$lang['estimate_email_link_text']        = 'View Estimate';

# Proposals
$lang['proposal_to']                            = 'Company / Name';
$lang['proposal_date']                          = 'Date';
$lang['proposal_address']                       = 'Address';
$lang['proposal_phone']                         = 'Phone';
$lang['proposal_email']                         = 'Email';
$lang['proposal_date_created']                  = 'Date Created';
$lang['proposal_open_till']                     = 'Open Till';
$lang['proposal_status_open']                   = 'Open';
$lang['proposal_status_accepted']               = 'Accepted';
$lang['proposal_status_declined']               = 'Declined';
$lang['proposal_status_sent']                   = 'Sent';
$lang['proposal_expired']                       = 'Expired';
$lang['proposal_subject']                       = 'Subject';
$lang['proposal_total']                         = 'Total';
$lang['proposal_status']                        = 'Status';
$lang['proposals_list_all']                     = 'All';
$lang['proposals_leads_related']                = 'Leads Related';
$lang['proposals_customers_related']            = 'Customers Related';
$lang['proposal_related']                       = 'Related';
$lang['proposal_for_lead']                      = 'Lead';
$lang['proposal_for_customer']                  = 'Customer';
$lang['proposal']                               = 'Proposal';
$lang['proposal_lowercase']                     = 'proposal';
$lang['proposals']                              = 'Proposals';
$lang['proposals_lowercase']                    = 'proposals';
$lang['new_proposal']                           = 'New Proposal';
$lang['proposal_currency']                      = 'Currency';
$lang['proposal_allow_comments']                = 'Allow Comments';
$lang['proposal_allow_comments_help']           = 'If you check this options comments will be allowed when your clients view the proposal.';

$lang['proposal_edit']                          = 'Edit';
$lang['proposal_pdf']                           = 'PDF';
$lang['proposal_send_to_email']                 = 'Send to Email';
$lang['proposal_send_to_email_title']           = 'Send Proposal to Email';
$lang['proposal_attach_pdf']                    = 'Attach PDF';
$lang['proposal_preview_template']              = 'Preview Template';
$lang['proposal_view']                          = 'View Proposal';
$lang['proposal_copy']                          = 'Copy';
$lang['proposal_delete']                        = 'Delete';
$lang['proposal_to']                            = 'To';
$lang['proposal_add_comment']                   = 'Add Comment';
$lang['proposal_sent_to_email_success']         = 'Proposal sent to email successfully';
$lang['proposal_sent_to_email_fail']            = 'Failed to sent proposal to email';
$lang['proposal_copy_fail']                     = 'Failed to copy proposal';
$lang['proposal_copy_success']                  = 'Proposal copied successfully';
$lang['proposal_status_changed_success']        = 'Proposal status changed successfully';
$lang['proposal_status_changed_fail']           = 'Failed to change proposal status';
$lang['proposal_assigned']                      = 'Assigned';
$lang['proposal_comments']                      = 'Comments';
$lang['proposal_convert']                       = 'Convert';
$lang['proposal_convert_estimate']              = 'Estimate';
$lang['proposal_convert_invoice']               = 'Invoice';
$lang['proposal_convert_to_estimate']           = 'Convert to Estimate';
$lang['proposal_convert_to_invoice']            = 'Convert to Invoice';
$lang['proposal_convert_to_lead_disabled_help'] = 'You need to convert the lead to customer in order to create %s';
$lang['proposal_convert_not_related_help']      = 'The proposal needs to be related to customer in order to convert to %s';
$lang['proposal_converted_to_estimate_success'] = 'Proposal converted to estimate successfully';
$lang['proposal_converted_to_invoice_success']  = 'Proposal converted to invoice successfully';
$lang['proposal_converted_to_estimate_fail']    = 'Failed to convert proposal to estimate';
$lang['proposal_converted_to_invoice_fail']     = 'Failed to convert proposal to invoice';

# Proposals - view proposal template
$lang['proposal_total_info']   = 'Total %s';
$lang['proposal_accept_info']  = 'Accept';
$lang['proposal_decline_info'] = 'Decline';
$lang['proposal_pdf_info']     = 'PDF';

# Customers Portal
$lang['customer_reset_action']            = 'Reset';
$lang['customer_reset_password_heading']  = 'Reset your password';
$lang['customer_forgot_password_heading'] = 'Forgot Password';
$lang['customer_forgot_password']         = 'Forgot Password?';
$lang['customer_reset_password']          = 'Password';
$lang['customer_reset_password_repeat']   = 'Repeat Password';
$lang['customer_forgot_password_email']   = 'Email Address';
$lang['customer_forgot_password_submit']  = 'Submit';
$lang['customer_ticket_subject']          = 'Subject';

# Email templates
$lang['email_template_proposals_fields_heading'] = 'Proposals';

# Tasks
$lang['add_task_attachments']                 = 'Attachment';
$lang['task_view_attachments']                = 'Attachments';
$lang['task_view_description']                = 'Description';

# Customer Groups
$lang['customer_group_add_heading']  = 'Add New Customer Group';
$lang['customer_group_edit_heading'] = 'Edit Customer Group';
$lang['new_customer_group']          = 'New Customer Group';
$lang['customer_group_name']         = 'Name';
$lang['customer_groups']             = 'Groups';
$lang['customer_group']              = 'Customer Group';
$lang['customer_group_lowercase']    = 'customer group';

$lang['customer_have_invoices_by']       = 'Contains invoices by status %s';
$lang['customer_have_estimates_by']      = 'Contains estimates by status %s';
$lang['customer_have_contracts_by_type'] = 'Having contracts by type %s';

# Custom fields
$lang['custom_field_show_on_table']              = 'Show on table';
$lang['custom_field_show_on_client_portal']      = 'Show on client portal';
$lang['custom_field_show_on_client_portal_help'] = 'If this field is checked also will be shown in tables';
$lang['custom_field_visibility']                 = 'Visibility';

# Utilities # Menu Builder
$lang['utilities_menu_translate_name_help'] = 'You can add here also translate strings. So if staff/system have language other then the default the menu item names will be outputted in the staff language. Otherwise if the string do not exists in the translate file will be taken the string you enter here.';
$lang['utilities_menu_icon']                = 'Icon';
$lang['active_menu_items']                  = 'Active Menu Items';
$lang['inactive_menu_items']                = 'Inactive Menu Items';
$lang['utilities_menu_permission']          = 'Permission';
$lang['utilities_menu_url']                 = 'URL';
$lang['utilities_menu_name']                = 'Name';
$lang['utilities_menu_save']                = 'Save Menu';

# Knowledge Base
$lang['view_articles_list']     = 'View Articles';
$lang['view_articles_list_all'] = 'All Articles';
$lang['als_add_article']        = 'Add Article';
$lang['als_all_articles']       = 'Articles';
$lang['als_kb_groups']          = 'Groups';

# Customizer Menu
$lang['menu_builder']            = 'Menu Setup';
$lang['main_menu']               = 'Main Menu';
$lang['setup_menu']              = 'Setup Menu';
$lang['utilities_menu_url_help'] = '%s is auto appended to the url';

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
$lang['block_sender']               = 'Block Sender';
$lang['sender_blocked']             = 'Sender Blocked';
$lang['sender_blocked_successfully'] = 'Sender Blocked Successfully';
$lang['ticket_date_created']        = 'Created';

#KB
$lang['edit_kb_group']             = 'Edit group';
# Leads
$lang['edit_source']               = 'Edit Source';
$lang['edit_status']               = 'Edit Status';
# Contacts
$lang['contract_type_edit']        = 'Edit Contract Type';
# Reports
$lang['report_by_customer_groups'] = 'Total Value By Customer Groups';
#Utilities
$lang['ticket_pipe_log']           = 'Ticket Pipe Log';
$lang['ticket_pipe_name']          = 'From Name';
$lang['ticket_pipe_email_to']      = 'To';
$lang['ticket_pipe_email']         = 'From Email';
$lang['ticket_pipe_subject']       = 'Subject';
$lang['ticket_pipe_message']       = 'Message';
$lang['ticket_pipe_date']          = 'Date';
$lang['ticket_pipe_status']        = 'Status';

# Home
$lang['home_latest_activity']       = 'Latest Activity';
$lang['home_my_tasks']              = 'My Tasks';
$lang['home_latest_activity']       = 'Latest Activity';
$lang['home_my_todo_items']         = 'My To Do Items';
$lang['home_widget_view_all']       = 'View All';
$lang['home_stats_full_report']     = 'Full Report';

# Validation

$lang['form_validation_required']    = 'The {field} field is required.';
$lang['form_validation_valid_email'] = 'The {field} field must contain a valid email address.';
$lang['form_validation_matches']     = 'The {field} field does not match the {param} field.';
$lang['form_validation_is_unique']   = 'The {field} field must contain a unique value.';

# Version 1.0.8
# Notifications & Leads/Estimates/Invoices Activity Log
$lang['not_event'] = 'Calendar event today - %s ...';
$lang['not_event_public'] = 'Public event start today - %s ...';
$lang['not_contract_expiry_reminder'] = 'Contract expiry reminder - %s ...';
$lang['not_recurring_expense_cron_activity_heading'] = 'Recurring Expenses Cron Job Activity';
$lang['not_recurring_invoices_cron_activity_heading'] = 'Recurring Invoices Cron Job Activity';
$lang['not_recurring_total_renewed'] = 'Total Renewed: %s';
$lang['not_recurring_expenses_action_taken_from'] = 'Action taken from recurring expense';
$lang['not_invoice_created'] = 'Invoice Created:';
$lang['not_invoice_renewed'] = 'Renewed Invoice:';
$lang['not_expense_renewed'] = 'Renewed Expense:';
$lang['not_invoice_sent_to_customer'] = 'Invoice Sent to Customer: %s';
$lang['not_invoice_sent_yes'] = 'Yes';
$lang['not_invoice_sent_not'] = 'No';
$lang['not_action_taken_from_recurring_invoice'] = 'Action taken from recurring invoice:';
$lang['not_new_reminder_for'] = 'New Reminder for %s';
$lang['not_received_one_or_more_messages_lead'] = 'Received one more email message from lead';
$lang['not_received_lead_imported_email_integration'] = 'Lead Imported From Email Integration';
$lang['not_lead_imported_attachment'] = 'Imported attachment from email';
$lang['not_estimate_status_change'] = 'Imported attachment from email';
$lang['not_estimate_status_updated'] = 'Estimate Status Updated: From: %s to %s';
$lang['not_goal_message_success'] = 'Congratulations! We achieved new goal.<br /> Goal Type: %s
<br />Goal Achievement: %s
<br />Total Achievement: %s
<br />Start Date: %s
<br />End Date: %s';
$lang['not_assigned_lead_to_you'] = 'assigned lead %s to you';
$lang['not_lead_activity_assigned_to'] = '%s assigned to %s';
$lang['not_lead_activity_attachment_deleted'] = 'Deleted Attachment';
$lang['not_lead_activity_status_updated'] = '%s updated lead status from %s to %s';
$lang['not_lead_activity_contacted'] = '%s contacted this lead on %s';
$lang['not_lead_activity_created'] = '%s created lead';
$lang['not_lead_activity_marked_lost'] = 'Marked as lost';
$lang['not_lead_activity_unmarked_lost'] = 'Unmarked as lost';
$lang['not_lead_activity_marked_junk'] = 'Marked as junk';
$lang['not_lead_activity_unmarked_junk'] = 'Unmarked as junk';
$lang['not_lead_activity_added_attachment'] = 'Added attachment';
$lang['not_lead_activity_converted_email'] = 'Lead email changed. First lead email was: %s and added as customer with email %s';
$lang['not_lead_activity_converted'] = '%s Converted this lead to customer';
$lang['not_liked_your_post'] = '%s liked your post %s ...';
$lang['not_commented_your_post'] = '%s commented on your post %s ...';
$lang['not_liked_your_comment'] = '%s liked your comment %s ...';
$lang['not_proposal_assigned_to_you'] = 'Proposal assigned to you - %s ...';
$lang['not_proposal_comment_from_client'] = 'New comment from customer on proposal %s ...';
$lang['not_proposal_proposal_accepted'] = 'Proposal Accepted';
$lang['not_proposal_proposal_declined'] = 'Proposal Declined';
$lang['not_task_added_you_as_follower'] = 'added you as follower on task %s ...';
$lang['not_task_added_someone_as_follower'] = 'added %s as follower on task %s ...';
$lang['not_task_added_himself_as_follower'] = 'added himself as follower on task %s ...';
$lang['not_task_assigned_to_you'] = 'assigned a task to you %s ...';
$lang['not_task_assigned_someone'] = 'assigned %s to task %s ...';
$lang['not_task_will_do_user'] = 'will do task %s ...';
$lang['not_task_new_attachment'] = 'New Attachment Added';
$lang['not_task_marked_as_complete'] = 'marked task as complete %s';
$lang['not_task_unmarked_as_complete'] = 'unmarked task as complete %s';
$lang['not_ticket_assigned_to_you'] = 'Ticket assigned to you - %s ...';
$lang['not_ticket_reassigned_to_you'] = 'Ticket reassigned to you - %s ...';
$lang['not_estimate_customer_accepted'] = 'Congratulations! Client accepted estimate with number %s';
$lang['not_estimate_customer_declined'] = 'Client declined estimate with number %s';
$lang['estimate_activity_converted'] = 'converted this estimate to invoice.<br /> %s';
$lang['estimate_activity_created'] = 'Created the estimate';
$lang['invoice_estimate_activity_removed_item'] = 'removed item <b>%s</b>';
$lang['estimate_activity_number_changed'] = 'Estimate number changed from %s to %s';
$lang['invoice_activity_number_changed'] = 'Invoice number changed from %s to %s';
$lang['invoice_estimate_activity_updated_item_short_description'] = 'updated item short description from %s to %s';
$lang['invoice_estimate_activity_updated_item_long_description'] = 'updated item long description from <b>%s</b> to <b>%s</b>';
$lang['invoice_estimate_activity_updated_item_rate'] = 'updated item rate from %s to %s';
$lang['invoice_estimate_activity_updated_qty_item'] = 'updated quantity on item <b>%s</b> from %s to %s';
$lang['invoice_estimate_activity_added_item'] = 'added new item <b>%s</b>';
$lang['invoice_estimate_activity_sent_to_client'] = 'sent estimate to client';
$lang['estimate_activity_client_accepted_and_converted'] = 'Customer accepted this estimate. Estimate is converted to invoice with number %s';
$lang['estimate_activity_client_accepted'] = 'Customer accepted this estimate';
$lang['estimate_activity_client_declined'] = 'Client declined this estimate';
$lang['estimate_activity_marked'] = 'marked estimate as %s';
$lang['invoice_activity_status_updated'] = 'Invoice status updated from %s to %s';
$lang['invoice_activity_created'] = 'created the invoice';
$lang['invoice_activity_from_expense'] = 'converted to invoice from expense';
$lang['invoice_activity_recurring_created'] = '[Recurring] Invoice created by CRON';
$lang['invoice_activity_recurring_from_expense_created'] = '[Invoice From Expense] Invoice created by CRON';
$lang['invoice_activity_sent_to_client_cron'] = 'Invoice sent to customer by CRON';
$lang['invoice_activity_sent_to_client'] = 'sent invoice to customer';
$lang['invoice_activity_marked_as_sent'] = 'marked invoice as sent';
$lang['invoice_activity_payment_deleted'] = 'deleted payment for the invoice. Payment #%s, total amount %s';
$lang['invoice_activity_payment_made_by_client'] = 'Client made payment for the invoice from total <b>%s</b> - %s';
$lang['invoice_activity_payment_made_by_staff'] = 'recorded payment from total <b>%s</b> - %s';
$lang['invoice_activity_added_attachment'] = 'Added attachment';

# Navigation
$lang['top_search_placeholder'] = 'Search...';

# Staff
$lang['staff_profile_inactive_account'] = 'This staff member account is inactive';

# Estimates
$lang['copy_estimate'] = 'Copy Estimate';
$lang['estimate_copied_successfully'] = 'Estimate copied successfully';
$lang['estimate_copied_fail'] = 'Failed to copy estimate';

# Tasks
$lang['tasks_view_assigned_to_user'] = 'Tasks assigned to me';
$lang['tasks_view_follower_by_user'] = 'Tasks i\'m following';
$lang['no_tasks_found'] = 'No Tasks Found';

# Leads
$lang['leads_dt_datecreated'] = 'Created';
$lang['leads_sort_by'] = 'Sort By';
$lang['leads_sort_by_datecreated'] = 'Date Created';
$lang['leads_sort_by_kanban_order'] = 'Kan Ban Order';

# Proposals
$lang['proposal_items_name'] = 'Item';
$lang['proposal_items_description'] = 'Description';
$lang['proposal_items_qty'] = 'Qty';
$lang['proposal_items_rate'] = 'Rate';
$lang['proposal_items_tax'] = 'Tax';
$lang['proposal_items_amount'] = 'Amount';

# Authentication
$lang['check_email_for_resetting_password'] = 'Check your email for further instructions resetting your password';
$lang['inactive_account'] = 'Inactive Account';
$lang['error_setting_new_password_key'] = 'Error setting new password';
$lang['password_reset_message'] = 'Your password has been reset. Please login now!';
$lang['password_reset_message_fail'] = 'Error resetting your password. Try again.';
$lang['password_reset_key_expired'] = 'Password key expired or invalid user';
$lang['admin_auth_reset_pass_repeat'] = 'Password Repeat';
$lang['auth_reset_pass_email_not_found'] = 'Email not found';
$lang['auth_reset_password_submit'] = 'Reset Password';

# Settings
$lang['settings_amount_to_words'] = 'Amount to words';
$lang['settings_amount_to_words_desc'] = 'Output total amount to words in invoice/estimate';
$lang['settings_amount_to_words_enabled'] = 'Enable';
$lang['settings_total_to_words_lowercase'] = 'Number words into lowercase';
$lang['settings_show_tax_per_item'] = 'Show TAX per item';

# Reports
$lang['report_sales_months_three_months'] = 'Last 3 months';
$lang['report_invoice_number'] = 'Invoice #';
$lang['report_invoice_customer'] = 'Customer';
$lang['report_invoice_date'] = 'Date';
$lang['report_invoice_duedate'] = 'Due Date';
$lang['report_invoice_amount'] = 'Amount';
$lang['report_invoice_amount_with_tax'] = 'Amount with tax';
$lang['report_invoice_amount_open'] = 'Amount open';
$lang['report_invoice_status'] = 'Status';
$lang['report_invoice_total_amount_with_tax'] = 'Total amount with tax';
$lang['report_invoice_total_amount_without_tax'] = 'Total amount without tax';
$lang['report_invoice_total_taxes'] = 'Taxes';

#Version 1.0.9

# Home stats
$lang['home_stats_by_project_status'] = 'Statistics by Project Status';
$lang['home_invoice_overview'] = 'Invoice overview';
$lang['home_estimate_overview'] = 'Estimate overview';
$lang['home_proposal_overview'] = 'Proposal overview';
$lang['home_lead_overview'] = 'Leads Overview';

$lang['home_my_projects'] = 'My Projects';
$lang['home_announcements'] = 'Announcements';

# Settings
$lang['settings_leads_kanban_limit'] = 'Limit leads kan ban rows per status';
$lang['settings_group_misc'] = 'Misc';
$lang['show_projects_on_calendar'] = 'Projects';
$lang['settings_media_max_file_size_upload'] = 'Max file size upload in Media (MB)';
$lang['settings_client_staff_add_edit_delete_task_comments_first_hour'] = 'Allow customer/staff to add/edit task comments only in the first hour (administrators not applied)';

# Email templates
$lang['email_template_only_domain_email'] = 'Only domain email';

# Announcements
$lang['dismiss_announcement'] = 'Dismiss announcement';
$lang['dismiss_announcement'] = 'Dismiss announcement';
$lang['announcement_from'] = 'From:';
$lang['announcement_date'] = 'Date posted: %s';
$lang['announcement_not_found'] = 'Announcement not found';
$lang['announcements_recent'] = 'Recent Announcements';

# General
$lang['zip_invoices'] = 'Zip Invoices';
$lang['zip_estimates'] = 'Zip Estimates';
$lang['zip_payments'] = 'Zip Payments';
$lang['setup_help'] = 'Help';
$lang['clients_list_company'] = 'Company';
$lang['dt_button_export'] = 'Export';

$lang['dt_entries'] = 'entries';
$lang['invoice_total_paid'] = 'Total Paid';
$lang['invoice_amount_due'] = 'Amount Due';
$lang['report_invoice_discount'] = 'Discounts';

# Calendar
$lang['calendar_project'] = 'Project';

# Leads
$lang['leads_import_assignee'] = 'Responsible (Assignee)';
$lang['customer_from_lead'] = 'Customer from %s';
$lang['lead_kan_ban_attachments'] = 'Attachments: %s';
$lang['leads_sort_by_lastcontact'] = 'Last Contact';

# Tasks
$lang['task_comment_added'] = 'Comment successfully added';
$lang['task_duedate'] = 'Due Date';
$lang['task_view_comments'] = 'Comments';
$lang['task_comment_updated'] = 'Comment updated';
$lang['task_visible_to_client'] = 'Visible to customer';
$lang['task_hourly_rate'] = 'Hourly Rate';
$lang['hours'] = 'Hours';
$lang['seconds'] = 'Seconds';
$lang['minutes'] = 'Minutes';
$lang['task_start_timer'] = 'Start Timer';
$lang['task_stop_timer'] = 'Stop Timer';
$lang['task_billable_help'] = 'If you check billable the task will be shown when creating invoice as items';
$lang['task_billable'] = 'Billable';
$lang['task_billable_yes'] = 'Billable';
$lang['task_billable_no'] = 'Not Billable';
$lang['task_billed'] = 'Billed';
$lang['task_billed_yes'] = 'Billed';
$lang['task_billed_no'] = 'Not Billed';
$lang['task_user_logged_time'] = 'Your logged time:';
$lang['task_total_logged_time'] = 'Total logged time:';
$lang['task_is_billed'] = 'This task is billed on invoice with number %s';
$lang['task_statistics'] = 'Statistics';
$lang['task_milestone'] = 'Milestone';

# Tickets
$lang['ticket_message_updated_successfully'] = 'Message updated successfully';

# Invoices
$lang['invoice_task_item_project_tasks_not_included'] = 'Projects tasks are not included in this list.';
$lang['show_quantity_as'] = 'Show quantity as:';
$lang['quantity_as_qty'] = 'Qty';
$lang['quantity_as_hours'] = 'Hours';
$lang['invoice_table_hours_heading'] = 'Hours';
$lang['bill_tasks'] = 'Bill Tasks';
$lang['invoice_estimate_sent_to_email'] = 'Email to';

# Estimates
$lang['estimate_table_hours_heading'] = 'Hours';

# General
$lang['is_customer_indicator'] = 'Customer';
$lang['print']            = 'Print';
$lang['customer_permission_projects']            = 'Projects';
$lang['no_timers_found']            = 'No started timers found';
$lang['timers_started_confirm_logout']            = 'Tasks timers found started!<br /><br />Are you sure you want to logout without stopping the timers?';
$lang['confirm_logout']            = 'Logout';
$lang['timer_top_started']            = 'Started at %s';

# Projects
$lang['cant_change_billing_type_billed_tasks_found'] = 'You cant change billing type. Billed tasks already found for this project.';
$lang['project_customer_permission_warning'] = 'The system indicated that the primary contact do not have permission for projects. The primary contact won\'t be able to see the project. Consider add permission in the contact profile.';
$lang['project_invoice_timesheet_start_time'] = 'Start time: %s';
$lang['project_invoice_timesheet_end_time'] = 'End time: %s';
$lang['project_invoice_timesheet_total_logged_time'] = 'Logged time: %s';
$lang['project_view_as_client'] = 'View project as customer';
$lang['project_mark_all_tasks_as_completed'] = 'Mark all tasks as completed and stop all timers (No notifications sent to project members)';
$lang['project_not_started_status_tasks_timers_found'] = 'Task timers found for this project but the project is with status Not Started. Recommended to change the project status to In Progress';
$lang['project_status'] = 'Status';
$lang['project_status_1'] = 'Not Started';
$lang['project_status_2'] = 'In Progress';
$lang['project_status_3'] = 'On Hold';
$lang['project_status_4'] = 'Finished';

$lang['project_file_uploaded_by_customer'] = 'Customer';
$lang['project_file_dateadded'] = 'Date uploaded';
$lang['project_file_filename'] = 'Filename';
$lang['project_file__filetype'] = 'File type';
$lang['project_file_visible_to_customer'] = 'Visible to Customer';
$lang['project_file_uploaded_by'] = 'Uploaded by';
$lang['edit_project'] = 'Edit Project';
$lang['copy_project'] = 'Copy Project';
$lang['delete_project'] = 'Delete Project';
$lang['project_task_assigned_to_user'] = 'Task assigned to you';
$lang['seconds'] = 'Seconds';
$lang['hours'] = 'Hours';
$lang['minutes'] = 'Minutes';
$lang['project']                 = 'Project';
$lang['project_lowercase']       = 'project';
$lang['projects']                = 'Projects';
$lang['projects_lowercase']      = 'projects';
$lang['project_settings']      = 'Project settings';
$lang['project_invoiced_successfully']             = 'Project Invoiced Successfully';
$lang['new_project']             = 'New Project';
$lang['project_files']            = 'Files';
$lang['project_activity']            = 'Activity';
$lang['project_name']            = 'Project Name';
$lang['project_description']            = 'Project Description';
$lang['project_customer']            = 'Customer';
$lang['project_start_date']            = 'Start Date';
$lang['project_datecreated']            = 'Date Created';
$lang['project_deadline']            = 'Deadline';
$lang['project_billing_type']            = 'Billing Type';
$lang['project_billing_type_fixed_cost']            = 'Fixed Rate';
$lang['project_billing_type_project_hours']            = 'Project Hours';
$lang['project_billing_type_project_task_hours']            = 'Task Hours';
$lang['project_billing_type_project_task_hours_hourly_rate']            = 'Based on task hourly rate';
$lang['project_rate_per_hour']            = 'Rate Per Hour';
$lang['project_total_cost']            = 'Total Rate';
$lang['project_members']            = 'Project Members';
$lang['project_member_removed']     = 'Project member removed successfully';
$lang['project_overview']           = 'Project Overview';
$lang['project_gant']            = 'Gantt View';
$lang['project_milestones']            = 'Milestones';
$lang['project_milestone_order']            = 'Order';
$lang['project_milestone_duedate_passed']            = 'Due date passed';
$lang['record_timesheet']            = 'Timesheet';
$lang['new_milestone']            = 'New Milestone';
$lang['edit_milestone']            = 'Edit Milestone';
$lang['milestone_name']            = 'Name';
$lang['milestone_due_date']            = 'Due date';
$lang['project_milestone']            = 'Milestone';
$lang['project_notes']            = 'Notes';
$lang['project_timesheets']            = 'Timesheets';
$lang['project_timesheet']            = 'Timesheet';
$lang['milestone_total_logged_time']            = 'Logged Time';
$lang['project_overview_total_logged_hours']            = 'Total Logged Hours';
$lang['milestones_uncategorized']            = 'Uncategorized';
$lang['milestone_no_tasks_found']            = 'No tasks found';
$lang['project_copied_successfully']            = 'Project data copied successfully';
$lang['failed_to_copy_project']            = 'Failed to copy project';
$lang['copy_project_task_include_check_list_items']            = 'Copy checklist items';
$lang['copy_project_task_include_assignees']            = 'Copy the same assignees';
$lang['copy_project_task_include_followers']            = 'Copy the same followers';

$lang['project_days_left']            = 'Days Left';
$lang['project_open_tasks']            = 'Open Tasks';
$lang['timesheet_stop_timer']            = 'Stop Timer';
$lang['failed_to_add_project_timesheet_end_time_smaller']            = 'Failed to add timesheet. End time is smaller then start time';
$lang['project_timesheet_user']            = 'Member';
$lang['project_timesheet_start_time']            = 'Start Time';
$lang['project_timesheet_end_time']            = 'End Time';
$lang['project_timesheet_time_spend']            = 'Time Spent';
$lang['project_timesheet_task']            = 'Task';
$lang['project_invoices']                = 'Invoices';
$lang['total_logged_hours_by_staff']            = 'Total Logged Time';
$lang['invoice_project']            = 'Invoice Project';
$lang['invoice_project_info']            = 'Project Invoice Info';
$lang['invoice_project_data_single_line']            = 'Single line';
$lang['invoice_project_data_task_per_item']            = 'Task per item';
$lang['invoice_project_data_timesheets_individually']            = 'All timesheets individually';
$lang['invoice_project_item_name_data']            = 'Item name';
$lang['invoice_project_description_data']            = 'Description';
$lang['invoice_project_projectname_taskname']            = 'Project name + Task name';
$lang['invoice_project_all_tasks_total_logged_time']            = 'All tasks + total logged time per task';
$lang['invoice_project_project_name_data']            = 'Project name';
$lang['invoice_project_timesheet_individually_data']            = 'Timesheet start time + end time + total logged time';
$lang['invoice_project_total_logged_time_data']            = 'Total logged time';

$lang['project_allow_client_to'] = 'Allow customer to %s';
$lang['project_setting_view_task_attachments'] = 'view task attachments';
$lang['project_setting_view_task_checklist_items'] = 'view task checklist items';
$lang['project_setting_upload_files'] = 'upload files';
$lang['project_setting_view_task_comments'] = 'view task comments';
$lang['project_setting_upload_on_tasks'] = 'upload attachments on tasks';
$lang['project_setting_view_task_total_logged_time'] = 'view task total logged time';
$lang['project_setting_open_discussions'] = 'open discussions';
$lang['project_setting_comment_on_tasks'] = 'comment on project tasks';
$lang['project_setting_view_tasks'] = 'view tasks';
$lang['project_setting_view_milestones'] = 'view milestones';
$lang['project_setting_view_gantt'] = 'view Gantt';
$lang['project_setting_view_timesheets'] = 'view timesheets';
$lang['project_setting_view_activity_log'] = 'view activity log';
$lang['project_setting_view_team_members'] = 'view team members';

$lang['project_discussion_visible_to_customer_yes']                 = 'Visible';
$lang['project_discussion_visible_to_customer_no']                 = 'Not Visible';

$lang['project_discussion_posted_on']                 = 'Posted on %s';
$lang['project_discussion_posted_by']                 = 'Posted by %s';
$lang['project_discussion_failed_to_delete']                 = 'Failed to delete discussion';
$lang['project_discussion_deleted']                 = 'Discussion deleted successfully';
$lang['project_discussion_no_activity']                 = 'No Activity';
$lang['project_discussion']                 = 'Discussion';
$lang['project_discussions']                 = 'Discussions';
$lang['edit_discussion'] = 'Edit Discussion';
$lang['new_project_discussion'] = 'Create Discussion';
$lang['project_discussion_subject'] = 'Subject';
$lang['project_discussion_description'] = 'Description';
$lang['project_discussion_show_to_customer'] = 'Visible to Customer';
$lang['project_discussion_total_comments'] = 'Total Comments';
$lang['project_discussion_last_activity'] = 'Last Activity';
$lang['discussion_add_comment'] = 'Add comment';
$lang['discussion_newest'] = 'Newest';
$lang['discussion_oldest'] = 'Oldest';
$lang['discussion_attachments'] = 'Attachments';
$lang['discussion_send'] = 'Send';
$lang['discussion_reply'] = 'Answer';
$lang['discussion_edit'] = 'Edit';
$lang['discussion_edited'] = 'Modified';
$lang['discussion_you'] = 'You';
$lang['discussion_save'] = 'Save';
$lang['discussion_delete'] = 'Delete';
$lang['discussion_view_all_replies'] = 'Show all replies';
$lang['discussion_hide_replies'] = 'Hide replies';
$lang['discussion_no_comments'] = 'No comments';
$lang['discussion_no_attachments'] = 'No attachments';
$lang['discussion_attachments_drop'] = 'Drag and drop to upload file';
$lang['project_note'] = 'Note';
$lang['project_note_private'] = 'Private notes';
$lang['project_save_note'] = 'Save note';

# Project Activity
$lang['project_activity_created'] = 'Created the project';
$lang['project_activity_updated'] = 'Updated project';
$lang['project_activity_removed_team_member'] = 'Removed team member';
$lang['project_activity_added_team_member'] = 'Added new team member';
$lang['project_activity_marked_all_tasks_as_complete'] = 'Marked all tasks as complete';
$lang['project_activity_recorded_timesheet'] = 'Recorded timesheet';
$lang['project_activity_task_name'] = 'Task:';
$lang['project_activity_deleted_discussion'] = 'Deleted Discussion';
$lang['project_activity_created_discussion'] = 'Created discussion';
$lang['project_activity_updated_discussion'] = 'Updated discussion';
$lang['project_activity_commented_on_discussion'] = 'Commented on discussion';
$lang['project_activity_deleted_discussion_comment'] = 'Deleted discussion comment';
$lang['project_activity_deleted_milestone'] = 'Deleted milestone';
$lang['project_activity_updated_milestone'] = 'Updated milestone';
$lang['project_activity_created_milestone'] = 'Created new milestone';
$lang['project_activity_invoiced_project'] = 'Invoiced project';
$lang['project_activity_task_marked_complete'] = 'Task marked as complete';
$lang['project_activity_task_unmarked_complete'] = 'Task unmarked as complete';
$lang['project_activity_task_deleted'] = 'Task deleted';
$lang['project_activity_new_task_comment'] = 'Commented on task';
$lang['project_activity_new_task_attachment'] = 'Uploaded attachment on task';
$lang['project_activity_new_task_assignee'] = 'Added new task assignee';
$lang['project_activity_task_assignee_removed'] = 'Removed task assignee';
$lang['project_activity_task_timesheet_deleted'] = 'Removed timesheet';
$lang['project_activity_uploaded_file'] = 'Uploaded project file';
$lang['project_activity_status_updated'] = 'Updated project status';
$lang['project_activity_visible_to_customer'] = 'Visible to customer';
$lang['project_activity_project_file_removed'] = 'Removed project file';

# Notifications - Deprecated - THESE notifications are Deprecated and will be removed in further released don't translate them
$lang['not_customer_uploaded_project_file'] = 'New file uploaded';
$lang['not_customer_created_new_project_discussion'] = 'New project discussion created';
$lang['not_customer_commented_on_project_discussion'] = 'New comment on project discussion';

# Customers area
$lang['clients_my_estimates'] = 'Estimates';
$lang['client_no_reply'] = 'No Reply';
$lang['clients_nav_projects'] = 'Projects';
$lang['clients_my_projects'] = 'Projects';
$lang['client_profile_image'] = 'Profile image';

/////
$lang['sales_report_cancelled_invoices_not_included'] = 'Cancelled invoices are excluded from the report';
$lang['invoices_merge_cancel_merged_invoices'] = 'Mark merged invoices as cancelled instead of deleting';
$lang['invoice_marked_as_cancelled_successfully'] = 'Invoice marked as cancelled successfully';
$lang['invoice_unmarked_as_cancelled'] = 'Invoice unmarked as cancelled successfully';

$lang['tasks_reminder_notification_before'] = 'Task deadline reminder before (Days)';
$lang['not_task_deadline_reminder'] = 'Task deadline reminder';
$lang['dt_length_menu_all'] = 'All';
$lang['task_not_finished'] = 'Not Completed';
$lang['task_billed_cant_start_timer'] = 'Task billed. Timer cant be start';
$lang['invoice_task_billable_timers_found'] = 'Started timers found';
$lang['project_timesheet_not_updated'] = 'Timesheet not affected';
$lang['project_invoice_task_no_timers_found'] = 'No timers found for this task';
$lang['invoice_project_tasks_not_started'] = 'Not yet started | Start Date: %s';
$lang['invoice_project_see_billed_tasks'] = 'See tasks that will be billed on this invoice';
$lang['invoice_project_all_billable_tasks_marked_as_finished'] = 'All billed tasks will be marked as finished';
$lang['invoice_project_nothing_to_bill'] = 'No tasks to bill. Feel free to add whatever you want in the invoice items.';
$lang['invoice_project_start_date_tasks_not_passed'] = 'Tasks with future start date cannot be billed';
$lang['invoice_project_stop_all_timers'] = 'Stop all timers';
$lang['invoice_project_stop_billable_timers_only'] = 'Stop only billable timers';
$lang['project_tasks_total_timers_stopped'] = 'Stopped total %s timers';
$lang['project_invoice_timers_started'] = 'Task timers found running on billable tasks, invoice cannot be created. Please stop task timers to create invoice.';
$lang['task_start_timer_only_assignee'] = 'You need to be assigned on this task to start timer!';
$lang['task_comments'] = 'Comments';
$lang['invoice_total_tax'] = 'Total Tax';
$lang['estimates_total_tax'] = 'Total Tax';
$lang['report_invoice_total_tax'] = 'Total Tax';
$lang['home_tickets'] = 'Tickets';
$lang['home_project_activity'] = 'Latest Project Activity';
$lang['home_project_activity_not_found'] = 'No projects activity found';
$lang['view_tracking'] = 'Views Tracking';
$lang['view_date'] = 'Date';
$lang['view_ip'] = 'IP Address';
$lang['article_total_views'] = 'Total Views';
$lang['leads_source'] = 'Source';
$lang['invoices_available_for_merging'] = 'Invoices available for merging';
$lang['invoices_merge_discount'] = 'You will have to apply discount of total %s manually to this invoice';
$lang['invoice_merge_number_warning'] = 'Merging invoices will create gaps in invoice numbers. Please do not merge invoices if you want no gaps in your invoice history. You also have the option of manually adjusting invoice numbers if you want to fill the gaps.';
$lang['invoice_mark_as'] = 'Mark as %s';
$lang['invoice_unmark_as'] = 'Unmark as %s';
$lang['invoice_status_cancelled'] = 'Cancelled';
$lang['tasks_reminder_notification_before_help'] = 'Notify task assignees about deadline before X days. The notification/email is sent only to the assignees. If the difference between task start date and task due date is smaller then the reminders day no notification will be sent.';

# Version 1.1.0
$lang['project_invoice_select_all_tasks'] = 'Select all tasks';
$lang['lead_company'] = 'Company';

# Version 1.1.1
$lang['admin_auth_forgot_password_button'] = 'Confirm';
$lang['task_assigned'] = 'Assigned to';
$lang['switch_to_pipeline'] = 'Switch to pipeline';
$lang['switch_to_list_view'] = 'Switch to list';
$lang['estimates_pipeline'] = 'Estimates Pipeline';
$lang['estimates_pipeline_sort'] = 'Sort By';
$lang['estimates_sort_expiry_date'] = 'Expiry Date';
$lang['estimates_sort_pipeline'] = 'Pipeline Order';
$lang['estimates_sort_datecreated'] = 'Date Created';
$lang['estimates_sort_estimate_date'] = 'Estimate Date';
$lang['estimate_set_reminder_title'] = 'Set Estimate Reminder';
$lang['invoice_set_reminder_title'] = 'Set Invoice Reminder';
$lang['estimate_reminders'] = 'Reminders';
$lang['invoice_reminders'] = 'Reminders';
$lang['estimate_notes'] = 'Notes';
$lang['estimate_add_note'] = 'Add Note';
$lang['dropdown_non_selected_tex'] = 'Nothing selected';
$lang['auto_close_ticket_after'] = 'Auto close ticket after (Hours)';
$lang['event_description'] = 'Description';
$lang['delete_event'] = 'Delete';
$lang['not_new_ticket_created'] = 'New ticket opened in your department - %s';
$lang['receive_notification_on_new_ticket'] = 'Receive notification on new ticket opened';
$lang['receive_notification_on_new_ticket_help'] = 'All staff members which belong to the ticket department will receive notification that new ticket is opened';
$lang['event_updated'] = 'Event updated successfully';
$lang['customer_contacts'] = 'Contacts';
$lang['new_contact'] = 'New Contact';
$lang['contact'] = 'Contact';
$lang['contact_lowercase'] = 'contact';
$lang['contact_primary'] = 'Primary Contact';
$lang['contact_position'] = 'Position';
$lang['contact_active'] = 'Active';
$lang['client_company_info'] = 'Company details';
$lang['proposal_save'] = 'Save Proposal';
$lang['calendar'] = 'Calendar';
$lang['settings_pdf'] = 'PDF';
$lang['settings_pdf_font'] = 'PDF Font';
$lang['settings_pdf_table_heading_color'] = 'Items table heading color';
$lang['settings_pdf_table_heading_text_color'] = 'Items table heading text color';
$lang['settings_pdf_font_size'] = 'Default font size';
$lang['proposal_status_draft'] = 'Draft';
$lang['custom_field_contacts'] = 'Contacts';
$lang['company_primary_email'] = 'Primary Email';
$lang['client_register_contact_info'] = 'Primary Contact Information';
$lang['client_register_company_info'] = 'Company Information';
$lang['contact_permissions_info'] = 'Make sure to set appropriate permissions for this contact';
$lang['default_leads_kanban_sort'] = 'Default leads kan ban sort';
$lang['default_leads_kanban_sort_type'] = 'Sort';
$lang['order_ascending'] = 'Ascending';
$lang['order_descending'] = 'Descending';
$lang['calendar_expand'] = 'expand';
$lang['proposal_reminders'] = 'Reminders';
$lang['proposal_set_reminder_title'] = 'Set proposal reminder';
$lang['settings_allowed_upload_file_types'] = 'Allowed file types';
$lang['no_primary_contact'] = 'This customer does have primary contact. You need to setup primary contact login as customer. Its recommended all customers to have primary contacts.';
$lang['leads_merge_customer'] = 'Customer fields merging';
$lang['leads_merge_contact'] = 'Contact fields merging';
$lang['leads_merge_as_contact_field'] = 'Merge as contact field';
$lang['lead_convert_to_client_phone'] = 'Phone';
$lang['invoice_status_report_all'] = 'All';
$lang['import_contact_field'] = 'Contact field';


$lang['file_uploaded_success'] = 'There is no error, the file uploaded with success';
$lang['file_exceeds_max_filesize'] = 'The uploaded file exceeds the upload_max_filesize directive in php.ini';
$lang['file_exceeds_maxfile_size_in_form'] = 'The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form';
$lang['file_uploaded_partially'] = 'The uploaded file was only partially uploaded';
$lang['file_not_uploaded'] = 'No file was uploaded';
$lang['file_missing_temporary_folder'] = 'Missing a temporary folder';
$lang['file_failed_to_write_to_disk'] = 'Failed to write file to disk.';
$lang['file_php_extension_blocked'] = 'A PHP extension stopped the file upload.';
$lang['calendar_expand'] = 'expand';
$lang['view_pdf'] = 'View PDF';
$lang['expense_repeat_every'] = 'Repeat every';

# Version 1.1.2
$lang['leads_switch_to_kanban'] = 'Switch to kan ban';
$lang['survey_no_questions'] = 'This survey does not have questions added yet.';
$lang['survey_submit'] = 'Submit';
$lang['contract_content'] = 'Contract';
$lang['contract_save'] = 'Save Contract';
$lang['contract_send_to_email'] = 'Send to email';
$lang['contract_send_to_client_modal_heading'] = 'Send contract to email';
$lang['contract_send_to'] = 'Send to';
$lang['contract_send_to_client_attach_pdf'] = 'Attach PDF';
$lang['contract_send_to_client_preview_template'] = 'Preview Email Template';
$lang['include_attachments_to_email'] = 'Include attachments to email';
$lang['contract_sent_to_client_success'] = 'The contract is successfully sent to the customer';
$lang['contract_sent_to_client_fail'] = 'Failed to send contract';

# Version 1.1.3
$lang['client_invalid_username_or_password'] = 'Invalid username or password';
$lang['client_old_password_incorrect']     = 'Your old password is incorrect';
$lang['client_password_changed']          = 'Your password has been changed';

# Version 1.1.4
$lang['total_leads_deleted'] = 'Total leads deleted: %s';
$lang['total_clients_deleted'] = 'Total customers deleted: %s';
$lang['confirm_action_prompt'] = 'Are you sure you want to perform this action?';
$lang['mass_delete'] = 'Mass Delete';
$lang['email_protocol'] = 'Email Protocol';
$lang['add_edit_members'] = 'Add/Edit Members';
$lang['project_overview_logged_hours'] = 'Logged Hours:';
$lang['project_overview_billable_hours'] = 'Billable Hours:';
$lang['project_overview_billed_hours'] = 'Billed Hours:';
$lang['project_overview_unbilled_hours'] = 'Unbilled Hours:';
$lang['calendar_first_day'] = 'First Day';
$lang['permission_view'] = 'View';
$lang['permission_edit'] = 'Edit';
$lang['permission_create'] = 'Create';
$lang['permission_delete'] = 'Delete';
$lang['permission'] = 'Permission';
$lang['permissions'] = 'Permissions';
$lang['proposals_pipeline'] = 'Proposals Pipeline';
$lang['proposals_pipeline_sort'] = 'Sort By';
$lang['proposals_sort_open_till'] = 'Open Till';
$lang['proposals_sort_pipeline'] = 'Pipeline Order';
$lang['proposals_sort_datecreated'] = 'Date Created';
$lang['proposals_sort_proposal_date'] = 'Proposal Date';
$lang['is_not_staff_member'] = 'Not Staff Member';
$lang['lead_created'] = 'Created';
$lang['access_tickets_to_none_staff_members'] = 'Allow access to tickets for non staff members';
$lang['project_expenses'] = 'Expenses';
$lang['expense_currency'] = 'Currency';
$lang['currency_valid_code_help'] = 'Make sure to enter valid currency ISO code.';
$lang['week'] = 'Week';
$lang['weeks'] = 'Weeks';
$lang['month'] = 'Month';
$lang['months'] = 'Months';
$lang['year'] = 'Year';
$lang['years'] = 'Years';
$lang['expense_report_category'] = 'Category';
$lang['expense_paid_via'] = 'Paid Via %s';
$lang['item_as_expense'] = '[Expense]';
$lang['show_help_on_setup_menu'] = 'Show help menu item on setup menu';
$lang['customers_summary_total'] = 'Total Customers';
$lang['filter_by'] = 'Filter by';
$lang['re_captcha'] = 'reCAPTCHA';
$lang['recaptcha_site_key'] = 'Site key';
$lang['recaptcha_secret_key'] = 'Secret key';
$lang['recaptcha_error'] = 'The reCAPTCHA field is telling that you are a robot.';
$lang['smtp_username'] = 'SMTP Username';
$lang['smtp_username_help'] = 'Fill only if your email client use username for SMTP login.';
$lang['pinned_project']= 'Pinned Project';
$lang['pin_project']= 'Pin Project';
$lang['unpin_project']= 'Unpin Project';
$lang['smtp_encryption']= 'Email Encryption';
$lang['smtp_encryption_none']= 'None';
$lang['show_proposals_on_calendar']= 'Proposals';
$lang['invoice_project_see_billed_expenses']= 'See expenses that will be billed on this invoice';
$lang['project_overview_expenses'] = 'Total Expenses';
$lang['project_overview_expenses_billable'] = 'Billable Expenses';
$lang['project_overview_expenses_billed'] = 'Billed Expenses';
$lang['project_overview_expenses_unbilled'] = 'Unbilled Expenses';
$lang['announcement_date_list'] = 'Date';
$lang['project_setting_view_finance_overview'] = 'view finance overview';
$lang['show_all_tasks_for_project_member'] = 'Allow all staff to see all tasks related to projects (includes non-staff)';
$lang['not_staff_added_as_project_member'] = 'Added you as project member';
$lang['report_expenses_base_currency_select_explanation'] = 'You need to select currency because the system found different currencies used for expenses.';

# Version 1.1.6
$lang['project_activity_recorded_expense'] = 'Recorded Expense';
$lang['save_customer_and_add_contact'] = 'Save and create contact';
$lang['tickets_chart_weekly_opening_stats'] = 'Weekly Stats';
$lang['related_knowledgebase_articles'] = 'Related Articles';
$lang['detailed_overview'] = 'Tasks Overview';
$lang['tasks_total_checklists_finished'] = 'Total checklist items marked as finished';
$lang['tasks_total_added_attachments'] = 'Total attachments added';
$lang['tasks_total_comments'] = 'Total comments';
$lang['task_finished_on_time'] = 'Finished on time?';
$lang['task_finished_on_time_indicator'] = 'Yes';
$lang['task_not_finished_on_time_indicator'] = 'No';
$lang['task_filter_fetch_month_by'] = 'Fetch month from';
$lang['filter'] = 'Filter';
$lang['task_filter_detailed_all_months'] = 'All Months';
$lang['kb_article_slug'] = 'Slug';

# Version 1.1.7
$lang['email_template_ticket_warning'] = 'If ticket is imported with email piping and the contact does not exists in the CRM the fields won\'t be replaced.';
$lang['auto_stop_tasks_timers_on_new_timer'] = 'Stop all other started timers when starting new timer';
$lang['notification_when_customer_pay_invoice'] = 'Receive notification when customer pay invoice (built-in)';
$lang['not_invoice_payment_recorded'] = 'New invoice payment - %s';
$lang['email_template_contact_warning'] = 'If contact is not logged while making action the contact merge fields won\'t be replaced.';
$lang['theme_style'] = 'Theme Style';
$lang['change_role_permission_warning'] = 'Changing role permissions won\'t affected current staff members permissions that are using this role.';
$lang['task_copied_successfully'] = 'Task copied successfully';
$lang['failed_to_copy_task'] = 'Failed to copy task';
$lang['not_project_file_uploaded'] = 'New project file added';
$lang['settings_calendar_color'] = '%s Color';
$lang['settings_calendar_colors_heading'] = 'Styling';
$lang['reminder'] = 'Reminder';
$lang['back_to_tasks_list'] = 'Back to tasks list';
$lang['copy_task_confirm'] = 'Confirm';
$lang['changing_items_affect_warning'] = 'Changing item info won\'t affect on the created invoices/estimates/proposals.';
$lang['tax_is_used_in_expenses_warning'] = 'You cant update this tax because expenses transactions using this tax are found.';
$lang['note'] = 'Note';
$lang['leads_staff_report_converted'] = 'Total converted leads';
$lang['leads_staff_report_created'] = 'Total created leads';
$lang['leads_staff_report_lost'] = 'Total lost leads';
$lang['client_go_to_dashboard'] = 'Back to portal';
$lang['show_estimate_reminders_on_calendar'] = 'Estimate Reminders';
$lang['show_invoice_reminders_on_calendar'] = 'Invoice Reminders';
$lang['calendar_estimate_reminder'] = 'Estimate Reminder';
$lang['calendar_invoice_reminder'] = 'Invoice Reminder';
$lang['show_proposal_reminders_on_calendar'] = 'Proposal Reminders';
$lang['calendar_proposal_reminder'] = 'Proposal Reminder';
$lang['proposal_due_after']= 'Proposal Due After (days)';
$lang['project_progress']= 'Progress';
$lang['calculate_progress_through_tasks']= 'Calculate progress through tasks';
$lang['allow_customer_to_change_ticket_status']= 'Allow customer to change ticket status from customers area';
$lang['switch_to_general_report']= 'Switch to staff report';
$lang['switch_to_staff_report']= 'Switch to general report';
$lang['generate']= 'Generate';
$lang['from_date']= 'From date';
$lang['to_date']= 'To date';
$lang['not_results_found']= 'No results found';
$lang['lead_lock_after_convert_to_customer']= 'Do not allow editing the lead after converting to customer (administrators not applied)';
$lang['default_pipeline_sort'] = 'Default pipeline sort';
$lang['not_goal_message_failed'] = 'We failed to achieve goal!<br /> Goal Type: %s
<br />Goal Achievement: %s
<br />Total Achievement: %s
<br />Start Date: %s
<br />End Date: %s';
$lang['toggle_full_view'] = 'Toggle full view';
$lang['not_estimate_invoice_deleted'] = 'deleted the created invoice';
$lang['not_task_new_comment'] = 'commented on task %s';

# Version 1.1.8
$lang['invoice_number_exists'] = 'This invoice number exists for the ongoing year.';
$lang['estimate_number_exists'] = 'This estimate number exists for the ongoing year.';
$lang['email_exists'] = 'Email already exists';
$lang['not_uploaded_project_file'] = 'New file uploaded';
$lang['not_created_new_project_discussion'] = 'New project discussion created';
$lang['not_commented_on_project_discussion'] = 'New comment on project discussion';
$lang['all_staff_members'] = 'All staff members';
$lang['help_project_permissions'] = 'VIEW allows staff member to see ALL projects. If you only want them to see projects they are assigned (added as members), do not give VIEW permissions.';
$lang['help_tasks_permissions'] = 'VIEW allows staff member to see ALL tasks. If you only want them to see tasks they are assigned to or following, do not give VIEW permissions.';
$lang['expense_recurring_days'] = 'Day(s)';
$lang['expense_recurring_weeks'] = 'Week(s)';
$lang['expense_recurring_months'] = 'Month(s)';
$lang['expense_recurring_years'] = 'Years(s)';
$lang['reset_to_default_color'] = 'Reset to default color';
$lang['pdf_logo_width'] = 'Logo Width (PX)';
$lang['drop_files_here_to_upload'] = 'Drop files here to upload';
$lang['browser_not_support_drag_and_drop'] = 'Your browser does not support drag\'n\'drop file uploads';
$lang['remove_file'] = 'Remove file';
$lang['you_can_not_upload_any_more_files'] = 'You can not upload any more files';
$lang['custom_field_only_admin'] = 'Restrict visibility for administrators only';
$lang['leads_default_source'] = 'Default source';
$lang['clear_activity_log'] = 'Clear log';
$lang['default_contact_permissions'] = 'Default contact permissions';
$lang['invoice_activity_marked_as_cancelled'] = 'marked invoice as cancelled';
$lang['invoice_activity_unmarked_as_cancelled'] = 'unmarked invoice as cancelled';
$lang['wait_text'] = 'Please wait...';
$lang['projects_summary'] = 'Projects summary';
$lang['dept_imap_host'] = 'IMAP Host';
$lang['dept_encryption'] = 'Encryption';
$lang['dept_email_password'] = 'Password';
$lang['dept_email_no_encryption'] = 'No Encryption';
$lang['failed_to_decrypt_password'] = 'Failed to decrypt password';
$lang['delete_mail_after_import'] = 'Delete mail after import?';
$lang['expiry_reminder_enabled'] = 'Send expiration reminder';
$lang['send_expiry_reminder_before'] = 'Send expiration reminder before (DAYS)';
$lang['not_expiry_reminder_sent'] = 'Expiry reminder sent';
$lang['send_expiry_reminder'] = 'Sent expiration reminder';
$lang['sent_expiry_reminder_success'] = 'Expiration reminder successfully sent';
$lang['sent_expiry_reminder_fail'] = 'Failed to send expiration reminder';
$lang['leads_default_status'] = 'Default status';
$lang['item_description_placeholder'] = 'Description';
$lang['item_long_description_placeholder'] = 'Long description';
$lang['item_quantity_placeholder'] = 'Quantity';
$lang['item_rate_placeholder'] = 'Rate';
$lang['tickets_summary'] = 'Tickets Summary';
$lang['tasks_list_priority'] = 'Priority';
$lang['ticket_status_db_2'] = 'In Progress';
$lang['ticket_status_db_1'] = 'Open';
$lang['ticket_status_db_3'] = 'Answered';
$lang['ticket_status_db_4'] = 'On Hold';
$lang['ticket_status_db_5'] = 'Closed';
$lang['ticket_priority_db_1'] = 'Low';
$lang['ticket_priority_db_2'] = 'Medium';
$lang['ticket_priority_db_3'] = 'High';
$lang['customer_have_projects_by'] = 'Contains projects by status %s';
$lang['customer_have_proposals_by'] = 'Contains proposals by status %s';
$lang['do_not_redirect_payment'] = 'Do not redirect me to the payment processor';
$lang['project_tickets'] = 'Tickets';
$lang['invoice_report'] = 'Invoices Report';
$lang['payment_modes_report'] = 'Payment Modes (Transactions)';
$lang['customer_admins'] = 'Customer Admins';
$lang['assign_admin'] = 'Assign admin';
$lang['customer_admin_date_assigned'] = 'Date Assigned';
$lang['customer_admin_login_as_client_message'] = 'Hello %s. You are added as admin to this customer.';
$lang['ticket_form_validation_file_size'] = 'File size must be less than %s';
$lang['has_transactions_currency_base_change'] = 'Changing the base currency is possible only if there are no transactions recorded in that currency. Delete the transactions to change the base currency';
$lang['customers_sort_all'] = 'All';

# Version 1.1.9
$lang['use_recaptcha_customers_area'] = 'Allow recaptcha on customers area (Login/Register)';
$lang['project_marked_as_finished'] = 'Project completed';
$lang['project_status_updated'] = 'Project status updated';
$lang['remove_decimals_on_zero'] = 'Remove decimals on numbers/money with zero decimals (2.00 will become 2, 2.25 will stay 2.25)';
$lang['remove_tax_name_from_item_table'] = 'Remove the tax name from item table row';

# Version 1.2.0
$lang['not_billable_expenses_by_categories'] = 'Not billable expenses by categories';
$lang['billable_expenses_by_categories'] = 'Billable expenses by categories';
$lang['format_letter_size'] = 'A4 Landscape';
$lang['pdf_formats'] = 'Document formats';
$lang['swap_pdf_info'] = 'Swap Company/Customer Details (company details to right side, customer details to left side)';
$lang['invoice_estimate_pdf_text_color'] = 'Invoice/Estimate text color';
$lang['expenses_filter_by_categories'] = 'By Categories';
$lang['task_copy'] = 'Copy';
$lang['estimate_status'] = 'Status';
$lang['expenses_report_exclude_billable'] = 'Exclude Billable Expenses';
$lang['expenses_total'] = 'Total';
$lang['estimate_activity_added_attachment'] = 'Added attachment';
$lang['show_to_customer'] = 'Show to customer';
$lang['hide_from_customer'] = 'Hide from customer';
$lang['expenses_report_total'] = 'Total';
$lang['expenses_report'] = 'Expenses report';
$lang['expenses_report_tax'] = 'Tax';
$lang['expenses_report_total_tax'] = 'Total Tax';
$lang['expenses_detailed_report'] = 'Detailed Report';
$lang['expense_not_billable'] = 'Not Billable';
$lang['notification_settings'] = 'Notification settings';
$lang['staff_with_roles'] = 'Staff members with roles';
$lang['specific_staff_members'] = 'Specific Staff Members';
$lang['proposal_mark_as'] = 'Mark as %s';
$lang['kb_report_total_answers'] = 'Total';
$lang['ticket_message_edit'] = 'Edit';
$lang['invoice_files'] = 'Invoice Files';
$lang['estimate_files'] = 'Estimate Files';
$lang['proposal_files'] = 'Proposal Files';
$lang['invoices_awaiting_payment'] = 'Invoices Awaiting Payment';
$lang['tasks_not_finished'] = 'Tasks Not Finished';
$lang['outstanding_invoices'] = 'Outstanding Invoices';
$lang['past_due_invoices'] = 'Past Due Invoices';
$lang['paid_invoices'] = 'Paid Invoices';
$lang['invoice_estimate_year'] = 'Year';
$lang['no_results_text_search_dropdown'] = 'No Results Matched';
$lang['task_stats_logged_hours'] = 'Logged Hours';
$lang['leads_converted_to_client'] = 'Converted Leads';
$lang['task_assigned_from'] = 'This task is assigned to you by %s';
$lang['auto_check_for_new_notifications'] = 'Auto check for new notifications (Seconds - Set 0 to disable)';
$lang['recurring_ends_on'] = 'Ends On (Leave blank for never)';
$lang['new_note'] = 'New Note';
$lang['my_tickets_assigned'] = 'Tickets assigned to me';
$lang['filter_by_assigned'] = 'By Assigned Member';
$lang['staff_stats_total_logged_time'] = 'Total Logged Time';
$lang['staff_stats_last_month_total_logged_time'] = 'Last Month Logged Time';
$lang['staff_stats_this_month_total_logged_time'] = 'This Month Logged Time';
$lang['staff_stats_last_week_total_logged_time'] = 'Last Week Logged Time';
$lang['staff_stats_this_week_total_logged_time'] = 'This Week Logged Time';
// Dont change this because are translated before for the projects timesheets and now are only used for readability.
$lang['timesheet_user'] = $lang['project_timesheet_user'];
$lang['timesheet_start_time'] = $lang['project_timesheet_start_time'];
$lang['timesheet_end_time'] = $lang['project_timesheet_end_time'];
$lang['timesheet_time_spend'] = $lang['project_timesheet_time_spend'];
$lang['task_timesheets'] = $lang['project_timesheets'];
$lang['task_log_time_start'] = $lang['project_timesheet_start_time'];
$lang['task_log_time_end'] = $lang['project_timesheet_end_time'];
$lang['task_single_log_user'] = $lang['project_timesheet_user'];

# Version 1.2.2
$lang['milestone_description'] = 'Description';
$lang['description_visible_to_customer'] = 'Show description to customer';
$lang['upcoming_tasks'] = 'Upcoming Tasks';
$lang['paymentmethod_two_checkout_account_number'] = 'Account Number (Seller ID)';
$lang['paymentmethod_two_checkout_private_key'] = 'Private Key';
$lang['paymentmethod_two_checkout_publishable_key'] = 'Publishable Key';
$lang['payment_credit_card_number'] = 'Card Number';
$lang['payment_credit_card_expiration_date'] = 'Expiration Date';
$lang['payment_billing_email'] = 'Email';
$lang['payment_billing_name'] = 'Billing Name';
$lang['submit_payment'] = 'Submit Payment';
$lang['2checkout_notice_payment'] = 'Credit card details are processed via secure token provided from 2Checkout';
$lang['2checkout_usage_notice'] = 'SSL is required if you\'re using the 2Checkout payment API. It is required to safely call the tokenization and authorizations. The system will function without SSL, however, this will place you out of compliance, which risks deactivation of your API permissions.';
$lang['custom_field_disallow_customer_to_edit'] = 'Disallow customer to edit this field';
$lang['project_due_notice'] = 'This project is overdue by %s days';
$lang['not_lead_added_attachment'] = 'added new attachment to lead %s';
$lang['lead_note_date_added'] = 'Note added: %s';
$lang['recurring_custom'] = 'Custom';
// don't translate these, only added for better readability already translated for the expenses custom recurring feature.
$lang['invoice_recurring_months'] = $lang['expense_recurring_months'];
$lang['invoice_recurring_years'] = $lang['expense_recurring_years'];
$lang['invoice_recurring_days'] = $lang['expense_recurring_days'];
$lang['invoice_recurring_weeks'] = $lang['expense_recurring_weeks'];

# Version 1.2.4
$lang['document_direction'] = 'Direction';
$lang['notify_project_members_status_change'] = 'Notify project members that status is changed';
$lang['not_project_status_updated'] = 'Project status updated from %s to %s';
$lang['ticket_not_found'] = 'Ticket not found';
$lang['project_not_found'] = 'Project not found';
$lang['export_project_data'] = 'Export project data';
$lang['total_project_members'] = 'Total Project Members';
$lang['total_project_files'] = 'Files attached';
$lang['total_project_discussions_created'] = 'Discussions created';
$lang['project_member'] = 'Member';
$lang['total_project_discussions_comments'] = 'Total discussion comments';
$lang['staff_total_task_assigned'] = 'Total tasks assigned';
$lang['staff_total_comments_on_tasks'] = 'Comments on tasks';
$lang['project_members_overview'] = 'Project members overview';
$lang['project_milestones_overview'] = 'Milestones overview';
$lang['total_tasks_in_milestones'] = 'Total tasks assigned';
$lang['total_task_members_assigned'] = 'Total members assigned';
$lang['total_task_members_followers'] = 'Total followers';
$lang['total_milestones'] = 'Total milestones';
$lang['total_project_worked_days'] = 'Total days worked';
$lang['finance_overview'] = 'Finance Overview';
$lang['project_custom_fields'] = 'Custom fields';
$lang['total_tickets_related_to_project'] = 'Total tickets linked to project';
$lang['projects_total_invoices_created'] = 'Total invoices created';
$lang['total_invoiced_amount'] = 'Total invoices created';
$lang['do_not_send_invoice_payment_email_template_contact'] = 'Do not send invoice payment recorded email to customer contacts';
$lang['no_preview_available_for_file'] = 'No preview available for this file.';
$lang['project_activity_deleted_file_discussion_comment'] = 'File discussion comment deleted';
$lang['file_not_found'] = 'File not found';
$lang['email_template_discussion_info'] = 'This template is used for both project discussion comments emails. (files discussions and regular discussions)';
$lang['format_a4_portrait_size'] = 'Portrait';
$lang['only_show_contact_tickets'] = 'In customers area only show tickets related to the logged in contact (Primary contact not applied)';
$lang['cancel_overdue_reminders_invoice'] = 'Prevent sending overdue reminders for this invoice';
$lang['customer_shipping_address_notice'] = 'Do not fill shipping address information if you won\'t use shipping address on customer invoices';
$lang['timesheets_overview'] = 'Timesheets overview';
$lang['invoice_status_draft'] = 'Draft';
$lang['save_as_draft'] = 'Save as Draft';
$lang['convert_and_save_as_draft'] = 'Convert and save as draft';
$lang['convert'] = 'Convert';
$lang['exclude_invoices_draft_from_client_area'] = 'Exclude invoices with draft status from customers area';
$lang['invoice_draft_status_info'] = 'This invoice is with status Draft, status will be auto changed when you send the invoice to the customer or mark as sent.';
$lang['task_info'] = 'Task Info';
$lang['recurring_tasks'] = 'Recurring';
// don't translate these, already translated
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
$lang['calendar_expense_reminder'] = 'Expense Reminders';
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
$lang['currently_supported_currencies'] = 'Currently supported currencies';
$lang['authorize_notice'] = 'SSL is required if you\'re using the Authorize.Net AIM payment API. Authorize.net only supports 1 currency per account. Make sure you add only 1 currency associated with your Authorize account in the currencies field.';
$lang['settings_paymentmethod_developer_mode'] = 'Developer Mode';
$lang['payment_cardholder_name'] = 'Cardholder\'s Name';
$lang['settings_paymentmethod_authorize_api_login_id'] =  'API Login ID';
$lang['settings_paymentmethod_mollie_api_key'] =  'API Key';
$lang['settings_paymentmethod_authorize_api_transaction_key'] =  'API Transaction ID';
$lang['settings_paymentmethod_authorize_secret_key'] =  'Secret Key';
$lang['leads_report_converted_notice'] =  'Only leads that belongs in the default status Client will be taken as converted leads, if the leads belongs to the default status client and its not converted to customer will be still counted as converted lead';
$lang['payment_method'] = 'Payment Method';
$lang['payment_method_info'] = 'Some payment gateways support different/multiple payment methods like Credit Card, PayPal, Bank.';

# Version 1.2.7
$lang['dropbox_app_key'] = 'Dropbox APP Key';
$lang['project_invoice_select_all_expenses'] = 'Select all expenses';
$lang['role_update_staff_permissions'] = 'Update all staff members permissions that are using this role';
$lang['customer_active'] = 'Active';
$lang['note_updated_successfully'] = 'Note updated successfully';
$lang['update_note'] = 'Update note';
$lang['update_comment'] = 'Update comment';
$lang['comment_updated_successfully'] = 'Comment updated successfully';
$lang['staff_send_welcome_email'] = 'Send welcome email';
$lang['proposal_warning_email_change'] = 'Email changed for %s. This %s is linked to proposal/s. Do you want to update all proposals emails linked to %s?';
$lang['update_proposal_email_yes'] = 'Yes update all linked emails.';
$lang['update_proposal_email_no'] = 'No, i will update manually.';
$lang['proposals_emails_updated'] = 'All proposals emails linked to this %s updated to %s';
$lang['custom_field_company'] = 'Company';
$lang['actions'] = 'Actions';
$lang['project_mark_as'] = 'Mark as %s';
$lang['todo_edit_title'] = 'Edit todo item';
$lang['additional_action_required'] = 'Additional action required!';
$lang['project_mark_tasks_finished_confirm'] = 'Confirm';
$lang['project_marked_as_success'] = 'Project marked as %s successfully';
$lang['project_marked_as_failed'] = 'Failed to mark project as %s';
$lang['auto_assign_customer_admin_after_lead_convert'] = 'Auto assign as admin to customer after convert';
$lang['auto_assign_customer_admin_after_lead_convert_help'] = 'If this option is set to YES the staff member that converted lead to customer will be auto assigned as customer admin. NOTE: This option will apply only on staff members that do not have permission for customers VIEW';
$lang['auto_close_tickets_disable'] = 'Set 0 to disable';
$lang['task_checklist_item_completed_by'] = 'Completed by %s';
$lang['staff_email_signature_help'] = 'If empty default email signature from settings will be used';
$lang['customer_sales'] = 'Sales';
$lang['default_task_priority'] = 'Default Priority';
$lang['project_send_created_email'] = 'Send project created email';
$lang['survey_send_to_lists'] = 'Survey send lists';
$lang['survey_send_notice'] = 'Emails will be send via CRON JOB per hour.';
$lang['view_permission_auto_checked'] = 'VIEW permission auto checked. You need to select VIEW permission if you want to use the EDIT, CREATE and DELETE properly. EDIT, CREATE, DELETE cant be used without VIEW because VIEW is global permission and the user won\'t be able to open the data and perform the actions.';
$lang['custom_field_company_info'] = 'Edit custom fields for company in Setup->Settings->Company';

# Version 1.2.8
$lang['show_transactions_on_invoice_pdf'] = 'Show invoice payments (transactions) on PDF';
$lang['bulk_actions'] = 'Bulk Actions';
$lang['additional_filters'] = 'Additional Filters';
$lang['expenses_available_to_bill'] = 'Expenses available to bill';
$lang['bulk_action_customers_groups_warning'] = 'If you do not select any group all groups assigned to the selected customers will be removed.';
$lang['customer_attachments_show_in_customers_area'] = 'Show to customers area';
$lang['customer_attachments_show_notice'] = 'Only files uploaded from customer profile have ability to show/hide in customers area.';
$lang['customer_profile_files'] = 'Files';
$lang['no_files_found'] = 'No Files Found';
$lang['survey_customers_all'] = 'All Customers';
$lang['custom_field_column'] = 'Grid (Bootstrap Column eq. 12) - Max is 12';
$lang['task_status'] = 'Status';
$lang['task_status_1'] = 'Not Started';
$lang['task_status_2'] = 'Awaiting Feedback';
$lang['task_status_3'] = 'Testing';
$lang['task_status_4'] = 'In Progress';
$lang['task_status_5'] = 'Complete';
$lang['task_mark_as'] = 'Mark as %s';
$lang['task_marked_as_success'] = 'Task marked as %s successfully';
$lang['task_drag_drop_notice'] = 'Drag & Drop is used only to easily change %s. The order won\'t be applied for this area.';
$lang['search_tasks'] = 'Search Tasks';
$lang['tasks_kanban_limit'] = 'Limit tasks kan ban rows per status';
$lang['show_on_invoice_on_pdf'] = 'Show %s on Invoice PDF';
$lang['show_pay_link_to_invoice_pdf'] = 'Show Pay Invoice link to PDF (Not applied if invoice status is Cancelled)';
$lang['no_leads_found'] = 'No Leads Found';
$lang['created_today'] = 'Created Today';
$lang['total_tasks_deleted'] = 'Total Tasks Deleted: %s';
$lang['total_tickets_delete'] = 'Total Tickets Deleted: %s';
$lang['total_tickets_delete'] = 'Total Tickets Deleted: %s';
$lang['format_letter_portrait'] = 'Letter Portrait';
$lang['format_letter_landscape'] = 'Letter Landscape';
$lang['period_datepicker'] = 'Period';
$lang['total_by_hourly_rate'] = 'Total By Hourly Rate';
$lang['staff_hourly_rate'] = $lang['task_hourly_rate'];
// &#37; is for % so the system can confuse for the original fields like %s
$lang['remove_tax_name_from_item_table_help'] = 'eq. Item TAX 15&#37; will be shown as 15&#37; without the tax name (Not applied if multiple taxes with the same name and tax percent found for item)';
$lang['back_to_project'] = 'Back to Project';
$lang['view_kanban'] = 'View Kan Ban';
$lang['invoice_is_overdue'] = 'This invoice is overdue by %s days';

# Version 1.2.9
$lang['time_decimal'] = 'Time (decimal)';
$lang['time_h'] = 'Time (h)';
$lang['proposal_number_prefix'] = 'Proposal Number Prefix';
$lang['settings_number_padding_prefix'] = 'Number padding zero\'s for prefix formats <br /> <small>eq. If this value is 3 the number will be formatted: 005 or 025</small>';
$lang['this_week_payments'] = 'This Week Payments';
$lang['last_week_payments'] = 'Last Week Payments';
$lang['not_published_new_post'] = 'published new post';
$lang['expense_name'] = 'Name';
$lang['expense_name_help'] = 'For personal usage';
$lang['adjustments'] = 'Adjustments';
$lang['tax_breakdown'] = 'Tax Breakdown';
$lang['payments_received'] = 'Payments Received';
$lang['not_lead_activity_created_proposal'] = 'Created new proposal - %s';
$lang['lead_title'] = 'Position';
$lang['lead_address'] = 'Address';
$lang['lead_city'] = 'City';
$lang['lead_state'] = 'State';
$lang['lead_country'] = 'Country';
$lang['lead_zip'] = 'Zip Code';
$lang['lead_is_public_yes'] = 'Yes';
$lang['lead_is_public_no'] = 'No';
$lang['lead_info'] = 'Lead Information';
$lang['lead_general_info'] = 'General Information';
$lang['lead_latest_activity'] = 'Latest Activity';
$lang['item_description_new_lines_notice'] = 'New lines are not supported for item description. Use the item long description instead.';
$lang['estimates_report'] = 'Estimates Report';
$lang['confirm'] = 'Confirm';
$lang['delete_staff'] = 'Delete Staff Member';
$lang['delete_staff_info'] = 'Some data for this staff member needs to be transferred to another user. Please select user where you want to transfer the data.';
$lang['estimate_items'] = 'Estimate Items';
$lang['no_proposals_found'] = 'No Proposals Found';
$lang['no_estimates_found'] = 'No Estimates Found';
$lang['pipeline_limit_status'] = 'Pipeline limit per status';
$lang['settings_update'] = 'System Update';
$lang['purchase_key'] = 'Purchase Key';
$lang['update_now'] = 'Update Now';
$lang['update_available'] = 'An update is available';
$lang['latest_version'] = 'Latest Version';
$lang['your_version'] = 'Your Version';
$lang['using_latest_version'] = 'You are using the latest version';
$lang['mark_as_active'] = 'Mark as active';
$lang['customer_inactive_message'] = 'This is inactive customer profile and some features may be disabled';
$lang['active_customers'] = 'Active Customers';
$lang['inactive_active_customers'] = 'Inactive Customers';
$lang['include_proposal_items_merge_field_help'] = 'Include proposal items with merge field anywhere in proposal content as %s';
$lang['all_data_synced_successfully'] = 'All data synced successfully';
$lang['sync_now'] = 'Sync Now';
$lang['sync_data'] = 'Sync Data';
$lang['sync_proposals_up_to_date'] = 'All proposals are up to date, nothing to sync';
$lang['proposal_sync_1_info'] = 'All proposal data is stored separately for each proposal after creation. Updating the %s info won\'t affect previous created proposals for this %s.';
$lang['proposal_sync_2_info'] = 'If you recently updated your %s info you can sync all new data to associated proposals. Here is a list of fields you can sync.';

# Version 1.3.0
$lang['expense_include_additional_data_on_convert'] = 'Include additional details to item long description taken from this expense.';

# Version 1.4.0
$lang['calendar_events_limit'] = 'Calendar Events Limit (Month and Week View)';
$lang['show_page_number_on_pdf'] = 'Show page number on PDF';
$lang['customer_active_inactive_help'] = 'Won\'t be shown in dropdowns when creating new records';
$lang['item_groups'] = 'Groups';
$lang['item_group'] = 'Item Group';
$lang['item_group_name'] = 'Group Name';
$lang['new_item_group'] = 'New Group';
$lang['show_setup_menu_item_only_on_hover'] = 'Show setup menu item only when hover with mouse on main sidebar area';
$lang['internal_article'] = 'Internal Article';
$lang['expenses_created_from_this_recurring_expense'] = 'Created expenses from this recurring expense';
$lang['convert_to_task'] = 'Convert To Task';
$lang['next_invoice_date'] = 'Next Invoice Date: %s';
$lang['next_expense_date'] = 'Next Expense Date: %s';
$lang['invoice_recurring_from'] = 'This invoice is created from recurring invoice with number: %s';
$lang['expense_recurring_from'] = 'This expense is created from the following recurring expense: %s';
$lang['child_invoices'] = 'Child Invoices';
$lang['child_expenses'] = 'Child Expenses';
$lang['no_announcements'] = 'No Announcements';
$lang['unit'] = 'Unit';
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
$lang['estimate_invoiced'] = 'Invoiced';
$lang['file_date_uploaded'] = 'Date Uploaded';
$lang['allow_contact_to_delete_files'] = 'Allow contacts to delete own files uploaded from customers area';
$lang['file'] = 'File';
$lang['customer_contact_person_only_one_allowed'] = 'Only 1 contact is allowed when the company field is not filled. The system will cast this customer as person';
$lang['web_to_lead'] = 'Web to Lead';
$lang['web_to_lead_form'] = 'Web to Lead Form';
$lang['new_form'] = 'New Form';
$lang['form_name'] = 'Form Name';
$lang['cf_option_in_use'] = 'An option you removed is in use and cant be removed. The option is auto appended to the existing options.';
$lang['form_builder'] = 'Form Builder';
$lang['form_information'] = 'Form Information & Setup';
$lang['form_builder_create_form_first'] = 'Create form first to be able to use the form builder.';
$lang['notify_assigned_user'] = 'Responsible person';
$lang['form_recaptcha'] = 'Use Google Recaptcha';
$lang['form_lang_validation'] = 'Language';
$lang['form_lang_validation_help'] = 'For validation messages';
$lang['form_btn_submit_text'] = 'Submit button text';
$lang['form_success_submit_msg'] = 'Message to show after form is succcesfully submitted';
$lang['total_submissions'] = 'Total Submissions';
$lang['form_integration_code'] = 'Integration Code';
$lang['not_lead_imported_from_form'] = 'New Lead Imported from Web to Lead Form - %s';
$lang['not_lead_activity_log_attachment'] = 'Attachment Imported from form - %s';
$lang['form_integration_code_help'] = 'Copy & Paste the code anywhere in your site to show the form, additionally you can adjust the width and height px to fit for your website.';
$lang['invoice_not_found'] = 'Invoice not found';
$lang['estimate_not_found'] = 'Estimate not found';
$lang['expense_not_found'] = 'Expense not found';
$lang['proposal_not_found'] = 'Proposal not found';
$lang['new_task_assigned_non_user'] = 'New task is assigned to you - %s';
$lang['no_child_found'] = 'No Child %s Found';
$lang['company_vat_number'] = 'VAT Number';
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
$lang['search_ajax_searching'] = 'Searching...';
$lang['search_ajax_initialized'] = 'Start typing to search';
$lang['lead_description'] = 'Description';
$lang['lead_website'] = 'Website';
$lang['invoice_activity_auto_converted_from_estimate'] = 'Invoice auto created from estimate with number %s';
$lang['hour_of_day_perform_auto_operations'] = 'Hour of day to perform automatic operations';
$lang['hour_of_day_perform_auto_operations_format'] = '24 hours format eq. 9 for 9am or 15 for 3pm.';
$lang['inv_hour_of_day_perform_auto_operations_help'] = 'Used for recurring invoices, overdue notices etc..';
$lang['use_minified_files'] = 'Use minified files version for css and js (only system files)';

# Version 1.5.0
$lang['logo_favicon_changed_notice'] = 'Logo or Favicon change detected. If you still see the original CRM logo try to clear your browser cache';
$lang['kb_search_articles'] = 'Search Knowledge Base Articles';
$lang['kb_search'] = 'Search';
$lang['have_a_question'] = 'Have a question?';
$lang['card_expiration_year'] = 'Expiration Year';
$lang['card_expiration_month'] = 'Expiration Month';
$lang['client_website'] = 'Website';
$lang['search_project_members'] = 'Search Project Members...';
$lang['cf_translate_input_link_title'] = 'Title';
$lang['cf_translate_input_link_url'] = 'URL';
$lang['cf_translate_input_link_tip'] = 'Click here to add link';
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
$lang['today'] = 'Today';
$lang['open_in_dropbox'] = 'Open In Dropbox';
$lang['show_primary_contact'] = 'Show primary contact full name on %s';
$lang['view_members_timesheets'] = 'View all timesheets';
$lang['priority'] = 'Priority';
$lang['fetch_from_google'] = 'Fetch from google';
$lang['customer_fetch_lat_lng_usage'] = 'Fill address, city and country before fetching to get best result.';
$lang['g_search_address_not_found'] = 'The address couldn\'t be found, please try again';
$lang['proposals_report'] = 'Proposals Report';
$lang['staff_members_open_tickets_to_all_contacts_help'] = 'If staff member don\'t have permission for customers VIEW only will be able to create new tickets from admin area to customer contacts where is assigned as customer admin.';
$lang['staff_members_open_tickets_to_all_contacts'] = 'Allow staff members to open tickets to all contacts?';
$lang['charts_based_report'] = 'Charts Based Report';
$lang['delete_backups_older_then'] = 'Auto delete backups older then X days (set 0 to disable)';
$lang['responsible_admin'] = 'Responsible admin';
$lang['tags'] = 'Tags';
$lang['tag'] = 'Tag';
$lang['customer_map_notice'] = 'Add longitude and latitude in the customer profile to show the map here';
$lang['default_view'] = 'Default View';
$lang['day'] = 'Day';
$lang['agenda'] = 'Agenda';
$lang['timesheet_tags'] = 'Timesheet Tags';
$lang['show_more'] = 'Show more';
$lang['show_less'] = 'Show less';
$lang['project_completed_date'] = 'Completed Date';
$lang['language'] = 'Language';
$lang['this_week'] = 'This Week';
$lang['last_week'] = 'Last Week';
$lang['this_month'] = 'This Month';
$lang['last_month'] = 'Last Month';
$lang['no_description_project'] = 'No description for this project';
$lang['sales_string'] = 'Sales';
$lang['no_project_members'] = 'No members for this project';
$lang['search_by_tags'] = 'Use # + tagname to search by tags';
$lang['project_status_5'] = 'Cancelled';

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