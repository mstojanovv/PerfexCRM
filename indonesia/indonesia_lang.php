<?php
# Version 1.0.0
#
# General
$lang['id']                   = 'ID';
$lang['name']                 = 'Nama';
$lang['options']              = 'Pilihan';
$lang['submit']               = 'Simpan';
$lang['added_successfuly']    = '%s berhasil ditambahkan.';
$lang['updated_successfuly']  = '%s berhasil diperbarui.';
$lang['edit']                 = 'Mengedit %s';
$lang['add_new']              = 'Tambahkan %s baru';
$lang['deleted']              = '%s dihapus';
$lang['problem_deleting']     = 'Soal menghapus %s';
$lang['is_referenced']        = 'ID dari %s sudah menggunakan.';
$lang['close']                = 'Tutup';
$lang['send']                 = 'Kirim';
$lang['cancel']               = 'Membatalkan';
$lang['go_back']              = 'Kembali';
$lang['error_uploading_file'] = 'Kesalahan mengunggah file';
$lang['load_more']            = 'Muat lebih';
$lang['cant_delete_default']  = 'Tidak dapat menghapus bawaan %s';

# Tagihan General
$lang['invoice_status_paid']                = 'Lunas';
$lang['invoice_status_unpaid']              = 'Belum Dibayar';
$lang['invoice_status_overdue']             = 'Terlambat';
$lang['invoice_status_not_paid_completely'] = 'Sebagian Dibayar';

$lang['invoice_pdf_heading'] = 'INVOICE';

$lang['invoice_table_item_heading']            = 'Barang';
$lang['invoice_table_quantity_heading']        = 'qty';
$lang['invoice_table_rate_heading']            = 'Menilai';
$lang['invoice_table_tax_heading']             = 'Pajak';
$lang['invoice_table_amount_heading']          = 'Jumlah';
$lang['invoice_subtotal']                      = 'Subtotal';
$lang['invoice_adjustment']                    = 'Pengaturan';
$lang['invoice_total']                         = 'Total';
$lang['invoice_vat']                           = 'Jumlah PPN';
$lang['invoice_bill_to']                       = 'Pembayaran kepada';
$lang['invoice_data_date']                     = 'Tanggal Invoice:';
$lang['invoice_data_duedate']                  = 'Batas tanggal terakhir:';
$lang['invoice_received_payments']             = 'Transaksi';
$lang['invoice_no_payments_found']             = 'Tidak ada Pembayaran ditemukan untuk Invoice ini';
$lang['invoice_note']                          = 'Catatan:';
$lang['invoice_payments_table_number_heading'] = 'Pembayaran #';
$lang['invoice_payments_table_mode_heading']   = 'Model Pembayaran';
$lang['invoice_payments_table_date_heading']   = 'Tanggal';
$lang['invoice_payments_table_amount_heading'] = 'Jumlah';


# Pengumuman
$lang['announcement']                 = 'Pengumuman';
$lang['announcement_lowercase']       = 'pengumuman';
$lang['announcements']                = 'Pengumuman';
$lang['announcements_lowercase']      = 'pengumuman';
$lang['new_announcement']             = 'Pengumuman baru';
$lang['announcement_name']            = 'Nama Pengumuman';
$lang['announcement_message']         = 'Pesan';
$lang['announcement_show_to_staff']   = 'Tampilkan untuk Staf';
$lang['announcement_show_to_clients'] = 'Menunjukkan kepada klien';
$lang['announcement_show_my_name']    = 'Tampilkan nama saya';

# Clients
$lang['clients']                               = 'Pelanggan';
$lang['client']                                = 'Pelanggan';
$lang['new_client']                            = 'Pelanggan Baru';
$lang['client_lowercase']                      = 'Pelanggan';
$lang['client_delete_tooltip']                 = 'Semua Data Pelanggan akan dihapus. Kontrak, tiket, catatan. CATATAN: Jika Invoice menemukan pelanggan tidak akan dihapus. Anda perlu menetapkan Invoice ini untuk pelanggan lain untuk menjaga nomor Invoice';
$lang['customer_delete_invoices_warning']      = 'Pelanggan ini memiliki Invoice pada account. Anda tidak bisa menghapus pelanggan ini. Ubah Semua Invoice untuk pelanggan lain di masa depan maka hapus.';
$lang['client_firstname']                      = 'Nama Depan';
$lang['client_lastname']                       = 'Nama Lengkap';
$lang['client_email']                          = 'Email';
$lang['client_company']                        = 'Perusahaan';
$lang['client_vat_number']                     = 'Jumlah PPN';
$lang['client_address']                        = 'Alamat';
$lang['client_city']                           = 'Kota';
$lang['client_postal_code']                    = 'Kode Pos';
$lang['client_state']                          = 'Negara';
$lang['client_password']                       = 'Kata sandi';
$lang['client_password_change_populate_note']  = 'Catatan: jika Anda mengisi bidang, password akan berubah pada pelanggan ini.';
$lang['client_password_last_changed']          = 'Sandi lalu berubah:';
$lang['login_as_client']                       = 'Masuk sbg klien';
$lang['client_invoices_tab']                   = 'Invoice';
$lang['contracts_invoices_tab']                = 'Kontrak';
$lang['contracts_tickets_tab']                 = 'Tiket';
$lang['contracts_notes_tab']                   = 'Catatan';
$lang['client_invoice_number_table_heading']   = 'Faktur #';
$lang['client_invoice_date_table_heading']     = 'Tanggal';
$lang['client_invoice_due_date_table_heading'] = 'Batas tanggal terakhir';
$lang['client_string_table_heading']           = 'Pelanggan';
$lang['client_amount_table_heading']           = 'Jumlah';
$lang['client_status_table_heading']           = 'Status';
$lang['note_description']                      = 'Catatan Deskripsi';

$lang['client_string_contracts_table_heading']      = 'Pelanggan';
$lang['client_start_date_contracts_table_heading']  = 'Tanggal Mulai';
$lang['client_end_date_contracts_table_heading']    = 'Tanggal Akhir';
$lang['client_description_contracts_table_heading'] = 'Deskripsi';
$lang['client_do_not_send_welcome_email']           = 'Jangan Mengirim email selamat datang';

$lang['clients_notes_table_description_heading'] = 'Deskripsi';
$lang['clients_notes_table_addedfrom_heading']   = 'Ditambahkan Dari';
$lang['clients_notes_table_dateadded_heading']   = 'Tanggal Ditambahkan';

$lang['clients_list_full_name']   = 'Nama lengkap';
$lang['clients_list_last_login']  = 'Login terakhir';

# Kontrak
$lang['contracts']                = 'Kontrak';
$lang['contract']                 = 'Kontrak';
$lang['new_contract']             = 'Kontrak Baru';
$lang['contract_lowercase']       = 'Kontrak';
$lang['contract_start_date']      = 'Mulai tanggal';
$lang['contract_end_date']        = 'Tanggal akhir';
$lang['contract_subject']         = 'Subyek';
$lang['contract_description']     = 'Deskripsi';
$lang['contract_subject_tooltip'] = 'Judul juga terlihat oleh pelanggan';
$lang['contract_client_string']   = 'Pelanggan';
$lang['contract_attach']          = 'Lampirkan Dokumen';

$lang['contract_list_client']     = 'Pelanggan';
$lang['contract_list_subject']    = 'Subyek';
$lang['contract_list_start_date'] = 'Mulai tanggal';
$lang['contract_list_end_date']   = 'Tanggal akhir';

# Currencies
$lang['currencies']           = 'Mata Uang';
$lang['currency']             = 'Mata uang';
$lang['new_currency']         = 'Mata Uang Baru';
$lang['currency_lowercase']   = 'mata uang';
$lang['base_currency_set']    = 'Ini sekarang mata uang dasar Anda.';
$lang['make_base_currency']   = 'Membuat mata uang dasar';
$lang['base_currency_string'] = 'Dasar Mata uang';

$lang['currency_list_name']   = 'Nama';
$lang['currency_list_symbol'] = 'Simbol';


$lang['currency_add_edit_description'] = 'Nama mata Uang';
$lang['currency_add_edit_rate']        = 'Simbol';

$lang['currency_edit_heading'] = 'mengedit Mata';
$lang['currency_add_heading']  = 'Menambahkan Mata uang baru';


# Department
$lang['departments']          = 'departemen';
$lang['department']           = 'Departemen';
$lang['new_department']       = 'Departemen baru';
$lang['department_lowercase'] = 'departemen';

$lang['department_name']             = 'nama departemen';
$lang['department_email']            = 'Departemen E-mail';
$lang['department_hide_from_client'] = 'Sembunyikan dari klien?';
$lang['department_list_name']        = 'Nama';

# Email Templates
$lang['email_templates']                        = 'Template email';
$lang['email_template']                         = 'Template email';
$lang['email_template_lowercase']               = 'template email';
$lang['email_templates_lowercase']              = 'template email';
$lang['email_template_ticket_fields_heading']   = 'Tiket';
$lang['email_template_invoices_fields_heading'] = 'Invoice';
$lang['email_template_clients_fields_heading']  = 'Pelanggan';

$lang['template_name']                                      = 'Nama Template';
$lang['template_subject']                                   = 'Subyek';
$lang['template_fromname']                                  = 'Dari nama';
$lang['template_fromemail']                                 = 'Dari email';
$lang['send_as_plain_text']                                 = 'Kirim sbg Plain Text';
$lang['email_template_disabed']                             = 'Nonaktif';
$lang['email_template_email_message']                       = 'Pesan email';
$lang['email_template_merge_fields']                        = 'menggabungkan bidang';
$lang['available_merge_fields']                             = 'kolom gabungan tersedia';
# Home
$lang['dashboard_string']                                   = 'Dasbor';
$lang['home_latest_todos']                                  = 'todo terbaru\'s';
$lang['home_no_latest_todos']                               = 'Tidak ada todo ditemukan';
$lang['home_latest_finished_todos']                         = 'Terbaru selesai todo\'s';
$lang['home_no_finished_todos_found']                       = 'Tidak ada todo selesai ditemukan';
$lang['home_todo_heading']                                  = 'Untuk melakukan item';
$lang['home_tickets_awaiting_reply_by_department']          = 'Tiket menunggu balasan oleh departemen';
$lang['home_tickets_awaiting_reply_by_status']              = 'Tiket menunggu balasan menurut status';
$lang['home_this_week_events']                              = 'Minggu peristiwa ini';
$lang['home_upcoming_events_next_week']                     = 'acara mendatang minggu depan';
$lang['home_event_added_by']                                = 'Acara ditambah';
$lang['home_public_event']                                  = 'acara publik';
$lang['home_weekly_payment_records']                        = 'Rangkuman Pembayaran Mingguan';
$lang['home_weekend_ticket_opening_statistics']             = 'Rangkuman Pembayaran Mingguan';
# Newsfeed
$lang['whats_on_your_mind']                                 = 'Berbagi dokumen, ide..';
$lang['new_post']                                           = 'Pos';
$lang['newsfeed_upload_tooltip']                            = 'Tip: Tarik dan lepaskan file untuk meng-upload';
$lang['newsfeed_all_departments']                           = 'Semua Departemen';
$lang['newsfeed_pin_post']                                  = 'Pin Pos';
$lang['newsfeed_unpin_post']                                = 'Lepaskan pin pos';
$lang['newsfeed_delete_post']                               = 'Menghapus';
$lang['newsfeed_published_post']                            = 'Diterbitkan';
$lang['newsfeed_you_like_this']                             = 'Anda menyukai ini';
$lang['newsfeed_like_this']                                 = 'sukai ini';
$lang['newsfeed_one_other']                                 = 'lain';
$lang['newsfeed_you']                                       = 'Kamu';
$lang['newsfeed_and']                                       = 'dan';
$lang['newsfeed_you_and']                                   = 'Kamu dan';
$lang['newsfeed_like_this_saying']                          = 'Unlike';
$lang['newsfeed_unlike_this_saying']                        = 'Tidak menyukai ini';
$lang['newsfeed_show_more_comments']                        = 'Tampilkan lebih banyak komentar';
$lang['comment_this_post_placeholder']                      = 'Komentar posting ini..';
$lang['newsfeed_post_likes_modal_heading']                  = 'Teman yang menyukai postingan ini';
$lang['newsfeed_comment_likes_modal_heading']               = 'Teman yang menyukai komentar ini';
$lang['newsfeed_newsfeed_post_only_visible_to_departments'] = 'Posting ini hanya dapat dilihat oleh departemen berikut: %s';
# Tagihan Items
$lang['invoice_items']                                      = 'Produk Invoice';
$lang['invoice_item']                                       = 'Invoice Barang';
$lang['new_invoice_item']                                   = 'Barang baru';
$lang['invoice_item_lowercase']                             = 'Item Invoice';

$lang['invoice_items_list_description'] = 'Deskripsi';
$lang['invoice_items_list_rate']        = 'Menilai';
$lang['invoice_items_list_tax']         = 'Pajak';

$lang['invoice_item_add_edit_description'] = 'Deskripsi';
$lang['invoice_item_add_edit_rate']        = 'Menilai';
$lang['invoice_item_add_edit_tax']         = 'Pajak';
$lang['invoice_item_add_edit_tax_select']  = 'Pilih Pajak';

$lang['invoice_item_edit_heading'] = 'Mengedit Barang';
$lang['invoice_item_add_heading']  = 'Menambahkan Barang baru';

# Tagihan


$lang['invoices']                       = 'Invoice';
$lang['invoice']                        = 'Invoice';
$lang['invoice_lowercase']              = 'Invoice';
$lang['create_new_invoice']             = 'Buat Baru Tagihan';
$lang['view_invoice']                   = 'Lihat Faktur';
$lang['invoice_number_changed']         = 'Faktur berhasil dibuat, tetapi jumlah ini berubah karena seseorang menambahkan Invoice baru sebelum Anda.';
$lang['invoice_payment_recorded']       = 'Faktur Pembayaran Direkam';
$lang['invoice_payment_record_failed']  = 'Gagal Rekam Faktur Pembayaran';
$lang['invoice_sent_to_client_success'] = 'Invoice dikirim berhasil untuk klien';
$lang['invoice_sent_to_client_fail']    = 'Masalah saat mengirim Invoice';
$lang['invoice_reminder_send_problem']  = 'Masalah mengirim Invoice pengingat jatuh tempo';
$lang['invoice_overdue_reminder_sent']  = 'Faktur Reminder tempo Berhasil Dikirim';

$lang['invoice_details']              = 'Detail Invoice';
$lang['invoice_view']                 = 'Lihat Faktur';
$lang['invoice_select_customer']      = 'Pelanggan';
$lang['invoice_add_edit_number']      = 'Nomor Invoice';
$lang['invoice_add_edit_date']        = 'Tanggal Invoice';
$lang['invoice_add_edit_duedate']     = 'Batas tanggal terakhir';
$lang['invoice_add_edit_currency']    = 'Mata uang';
$lang['invoice_add_edit_client_note'] = 'Catatan Klien';
$lang['invoice_add_edit_admin_note']  = 'Catatan Admin';

$lang['invoice_add_edit_search_item']  = 'Cari Produk';
$lang['invoices_toggle_table_tooltip'] = 'Alih Tabel';

$lang['edit_invoice_tooltip']                   = 'Edit Faktur';
$lang['delete_invoice_tooltip']                 = 'Hapus Faktur. Catatan: Semua Pembayaran mengenai Invoice ini akan dihapus (jika ada).';
$lang['invoice_sent_to_email_tooltip']          = 'Kirim ke Email';
$lang['invoice_already_send_to_client_tooltip'] = 'Invoice ini sudah dikirim ke klien% s';
$lang['send_overdue_notice_tooltip']            = 'Kirim tempo Pemberitahuan';
$lang['invoice_view_activity_tooltip']          = 'Log aktivitas';
$lang['invoice_record_payment']                 = 'Pembayaran Rekam';

$lang['invoice_send_to_client_modal_heading']    = 'Kirim Invoice ini ke klien';
$lang['invoice_send_to_client_attach_pdf']       = 'Melampirkan Faktur PDF';
$lang['invoice_send_to_client_preview_template'] = 'Template Email Preview';

$lang['invoice_dt_table_heading_number']  = 'Invoice #';
$lang['invoice_dt_table_heading_date']    = 'Tanggal';
$lang['invoice_dt_table_heading_client']  = 'Pelanggan';
$lang['invoice_dt_table_heading_duedate'] = 'Batas tanggal terakhir';
$lang['invoice_dt_table_heading_amount']  = 'Jumlah';
$lang['invoice_dt_table_heading_status']  = 'Status';

$lang['record_payment_for_invoice']              = 'Rekam Pembayaran';
$lang['record_payment_amount_received']          = 'jumlah Diterima';
$lang['record_payment_date']                     = 'Tanggal Pembayaran';
$lang['record_payment_leave_note']               = 'Meninggalkan catatan';
$lang['invoice_payments_received']               = 'Pembayaran diterima';
$lang['invoice_record_payment_note_placeholder'] = 'Catatan admin';
$lang['no_payments_found']                       = 'Tidak ada Pembayaran ditemukan untuk Invoice ini';
$lang['invoice_email_link_text']                 = 'Lihat Faktur';

# Pembayaran
$lang['payments']                             = 'Pembayaran';
$lang['payment']                              = 'Pembayaran';
$lang['payment_lowercase']                    = 'Pembayaran';
$lang['payments_table_number_heading']        = 'Pembayaran #';
$lang['payments_table_invoicenumber_heading'] = 'Invoice #';
$lang['payments_table_mode_heading']          = 'Tipe Pembayaran';
$lang['payments_table_date_heading']          = 'Tanggal';
$lang['payments_table_amount_heading']        = 'Jumlah';
$lang['payments_table_client_heading']        = 'Pelanggan';
$lang['payment_not_exists']                   = 'Tidak ada Pembayaran';

$lang['payment_edit_for_invoice']     = 'Pembayaran untuk Faktur';
$lang['payment_edit_amount_received'] = 'jumlah Diterima';
$lang['payment_edit_date']            = 'Tanggal Pembayaran';
$lang['payment_edit_lave_note']       = 'Tinggalkan Catatan';


# Pengetahuan Dasar
$lang['kb_article_add_edit_subject'] = 'Subyek';
$lang['kb_article_add_edit_group']   = 'Kelompok';
$lang['kb_string']                   = 'Pengetahuan';
$lang['kb_article']                  = 'Artikel';
$lang['kb_article_lowercase']        = 'artikel';
$lang['kb_article_new_article']      = 'Pasal baru';
$lang['kb_article_disabled']         = 'Nonaktif';
$lang['kb_article_description']      = 'Pasal deskripsi';

$lang['kb_table']                      = 'Daftar';
$lang['kb_no_articles_found']          = 'Tidak knowledgbase articles found';
$lang['kb_dt_article_name']            = 'Pasal Nama';
$lang['kb_dt_group_name']              = 'Kelompok';
$lang['new_group']                     = 'Grup baru';
$lang['kb_group_add_edit_name']        = 'Nama grup';
$lang['kb_group_add_edit_description'] = 'Deskripsi Singkat';
$lang['kb_group_add_edit_disabled']    = 'Nonaktif';
$lang['kb_group_add_edit_note']        = 'Catatan: Semua artikel dalam kelompok ini akan disembunyikan jika dinonaktifkan diperiksa';
$lang['group_table_name_heading']      = 'Nama';
$lang['group_table_isactive_heading']  = 'Aktif';
$lang['kb_no_groups_found']            = 'Tidak ada kelompok basis pengetahuan yang ditemukan';

# Mail Lists
$lang['mail_lists']                           = 'Daftar Mail';
$lang['mail_list']                            = 'Daftar Mail';
$lang['new_mail_list']                        = 'Daftar Mail baru';
$lang['mail_list_lowercase']                  = 'daftar email';
$lang['custom_field_deleted_success']         = 'bidang khusus menghapus';
$lang['custom_field_deleted_fail']            = 'Masalah menghapus bidang khusus';
$lang['email_removed_from_list']              = 'Email dihapus dari daftar';
$lang['email_remove_fail']                    = 'Email dihapus dari daftar';
$lang['staff_mail_lists']                     = 'Staf Mail Daftar';
$lang['clients_mail_lists']                   = 'Klien Daftar Email';
$lang['mail_list_total_imported']             = 'Jumlah email yang diimpor:% s';
$lang['mail_list_total_duplicate']            = 'Total duplikat email:% s';
$lang['mail_list_total_failed_to_insert']     = 'Email gagal memasukkan:% s';
$lang['mail_list_total_invalid']              = 'Alamat email tidak valid:% s ';
$lang['cant_edit_mail_list']                  = 'Anda tidak dapat mengedit daftar ini, daftar ini dihuni secara otomatis';
$lang['mail_list_add_edit_name']              = 'Daftar Nama Mail';
$lang['mail_list_add_edit_customfield']       = 'Tambahkan bidang kustom';
$lang['mail_lists_viewing_emails']            = 'Melihat Email Dari Daftar';
$lang['mail_lists_view_email_email_heading']  = 'E-mail';
$lang['mail_lists_view_email_date_heading']   = 'Tanggal Ditambahkan';
$lang['add_new_email_to']                     = 'Tambah Baru Email ke% s';
$lang['import_emails_to']                     = 'Impor Email ke% s';
$lang['mail_list_new_email_edit_add_label']   = 'E-mail';
$lang['mail_list_import_file']                = 'impor Berkas';
$lang['mail_list_available_custom_fields']    = 'Tersedia Fields Kustom';
$lang['submit_import_emails']                 = 'impor Email';
$lang['btn_import_emails']                    = 'Impor Email (Excel)';
$lang['btn_add_email_to_list']                = 'Tambahkan Email ke Daftar ini';
$lang['mail_lists_dt_list_name']              = 'Daftar nama';
$lang['mail_lists_dt_datecreated']            = 'Tanggal Diciptakan';
$lang['mail_lists_dt_creator']                = 'Pencipta';
$lang['email_added_to_mail_list_successfuly'] = 'Email ditambahkan ke daftar';
$lang['email_is_duplicate_mail_list']         = 'Email sudah ada di daftar ini';

# Pembayaran modes
$lang['new_payment_mode']       = 'arsip';
$lang['payment_modes']          = 'Mode Pembayaran';
$lang['payment_mode']           = 'Mode Pembayaran';
$lang['payment_mode_lowercase'] = 'Mode Pembayaran';
$lang['payment_modes_dt_name']  = 'Mode Pembayaran Pembayaran Nama Mode';

$lang['payment_mode_add_edit_name'] = 'Pembayaran Nama Mode';
$lang['payment_mode_edit_heading']  = 'Modus Pembayaran mengedit';
$lang['payment_mode_add_heading']   = 'Tambahkan Baru Pembayaran Modus';

# Predefined Tiket Replies
$lang['new_predefined_reply']              = 'Baru Predefined Balas';
$lang['predefined_replies']                = 'Tanggapan yang telah ditetapkan';
$lang['predefined_reply']                  = 'yang telah ditetapkan Balas';
$lang['predefined_reply_lowercase']        = 'balasan yang telah ditetapkan';
$lang['predifined_replies_dt_name']        = 'Balas telah ditetapkan Nama';
$lang['predifined_reply_add_edit_name']    = 'Balas telah ditetapkan Nama';
$lang['predifined_reply_add_edit_content'] = 'Balas Konten';

# Tiket Priorities
$lang['new_ticket_priority']           = 'Prioritas baru';
$lang['ticket_priorities']             = 'Prioritas tiket';
$lang['ticket_priority']               = 'Prioritas tiket';
$lang['ticket_priority_lowercase']     = 'prioritas tiket';
$lang['no_ticket_priorities_found']    = 'Tidak ada Prioritas Tiket Ditemukan';
$lang['ticket_priority_dt_name']       = 'Tiket Nama Prioritas';
$lang['ticket_priority_add_edit_name'] = 'prioritas Nama';

# Reports
$lang['kb_reports']                         = 'laporan artikel basis pengetahuan';
$lang['sales_reports']                      = 'Laporan penjualan';
$lang['reports_choose_kb_group']            = 'Pilih Grup';
$lang['reports_sales_select_report_type']   = 'Pilih Jenis Laporan';
$lang['report_kb_yes']                      = 'iya nih';
$lang['report_kb_no']                       = 'Tidak';
$lang['report_kb_no_votes']                 = 'Belum ada suara';
$lang['report_this_week_leads_conversions'] = 'Minggu ini Potensial Konversi';
$lang['report_leads_sources_conversions']   = 'sumber';
$lang['report_leads_monthly_conversions']   = 'Bulanan';
$lang['sales_report_heading']               = 'Laporan penjualan';
$lang['report_sales_type_income']           = 'Jumlah pemasukan';

$lang['report_sales_type_customer']                    = 'customer';
$lang['report_sales_base_currency_select_explanation'] = 'Anda perlu memilih mata uang karena Anda memiliki Invoice dengan mata uang yang berbeda';
$lang['report_sales_from_date']                        = 'Dari tanggal';
$lang['report_sales_to_date']                          = 'Saat ini';


$lang['report_sales_months_all_time']      = 'Sepanjang waktu';
$lang['report_sales_months_six_months']    = '6 bulan lalu';
$lang['report_sales_months_twelve_months'] = '12 bulan lalu';
$lang['report_sales_months_custom']        = 'Adat';
$lang['reports_sales_generated_report']    = 'dihasilkan Laporan';



$lang['reports_sales_dt_customers_client']                = 'Pelanggan';
$lang['reports_sales_dt_customers_total_invoices']        = 'total Faktur';
$lang['reports_sales_dt_items_customers_amount']          = 'Jumlah';
$lang['reports_sales_dt_items_customers_amount_with_tax'] = 'Jumlah dengan Pajak';

# Roles
$lang['new_role']           = 'Peran baru';
$lang['all_roles']          = 'Semua Peran';
$lang['roles']              = 'Peran staf';
$lang['role']               = 'Peran';
$lang['role_lowercase']     = 'peran';
$lang['roles_total_users']  = 'Total Pengguna:';
$lang['roles_dt_name']      = 'Nama peran';
$lang['role_add_edit_name'] = 'Nama peran';

# Layanan
$lang['new_service']           = 'Layanan baru';
$lang['services']              = 'Jasa';
$lang['service']               = 'Layanan';
$lang['service_lowercase']     = 'service';
$lang['services_dt_name']      = 'Nama layanan';
$lang['service_add_edit_name'] = 'Nama layanan';

# Settings
$lang['settings']                     = 'pengaturan';
$lang['settings_updated']             = 'pengaturan Updated';
$lang['settings_save']                = 'Simpan Pengaturan';
$lang['settings_group_general']       = 'Umum';
$lang['settings_group_localization']  = 'lokalisasi';
$lang['settings_group_tickets']       = 'tiket';
$lang['settings_group_sales']         = 'Keuangan';
$lang['settings_group_email']         = 'E-mail';
$lang['settings_group_clients']       = 'pelanggan';
$lang['settings_group_newsfeed']      = 'news feed';
$lang['settings_group_cronjob']       = 'cron Job';

$lang['settings_yes']                                        = 'ya';
$lang['settings_no']                                         = 'Tidak';
$lang['settings_clients_default_theme']                      = 'Tema bawaan pelanggan';
$lang['settings_clients_allow_registration']                 = 'Memungkinkan pelanggan untuk mendaftarkan';
$lang['settings_clients_allow_kb_view_without_registration'] = 'Memungkinkan pelanggan untuk mendaftarkan';

$lang['settings_cron_send_overdue_reminder']                 = 'Kirim Invoice pengingat jatuh tempo';
$lang['settings_cron_send_overdue_reminder_tooltip']         = 'Kirim email terlambat ke klien saat status Invoice diperbarui untuk terlambat dari Cron Job';
$lang['automatically_send_invoice_overdue_reminder_after']   = 'Secara otomatis mengirim pengingat setelah (hari)';
$lang['automatically_resend_invoice_overdue_reminder_after'] = 'Secara otomatis mengirim ulang pengingat setelah (hari)';

$lang['settings_email_host']      = 'SMTP host';
$lang['settings_email_port']      = 'SMTP Pelabuhan';
$lang['settings_email']           = 'SMTP Email';
$lang['settings_email_password']  = 'SMTP Sandi';
$lang['settings_email_charset']   = 'email Charset';
$lang['settings_email_signature'] = 'email Signature';

$lang['settings_general_company_logo']                = 'Logo perusahaan';
$lang['settings_general_company_logo_tooltip']        = 'Rekomendasi dimensi: 150 x 32px';
$lang['settings_general_company_remove_logo_tooltip'] = 'Hapus logo perusahaan';
$lang['settings_general_company_name']                = 'Nama Perusahaan';
$lang['settings_general_company_main_domain']         = 'Perusahaan Main Domain';
$lang['settings_general_use_knowledgebase']           = 'Basis Pengetahuan Gunakan';
$lang['settings_general_use_knowledgebase_tooltip']   = 'Jika Anda membiarkan dasar pilihan pengetahuan ini akan ditampilkan juga pada sisi klien';
$lang['settings_general_tables_limit']                = 'Tabel Pagination Batas';
$lang['settings_general_default_staff_role']          = 'Standar Staf Peran';
$lang['settings_general_default_staff_role_tooltip']  = 'Bila Anda menambahkan anggota staf baru peran ini akan dipilih secara default';

$lang['settings_localization_date_format']      = 'Format tanggal';
$lang['settings_localization_default_timezone'] = 'Timezone bawaan';
$lang['settings_localization_default_language'] = 'Bahasa default';

$lang['settings_newsfeed_max_file_upload_post']    = 'file maksimum upload di posting';
$lang['settings_newsfeed_max_file_size']           = 'Maksimum ukuran file (MB)';

$lang['settings_reminders_contracts']         = 'pengingat kedaluwarsa kontrak';
$lang['settings_reminders_contracts_tooltip'] = 'Berakhirnya pemberitahuan pengingat di hari';

$lang['settings_tickets_use_services']             = 'Gunakan Layanan';
$lang['settings_tickets_max_attachments']          = 'lampiran tiket maksimum';
$lang['settings_tickets_allow_departments_access'] = 'Memungkinkan staf untuk mengakses hanya tiket yang dimiliki staf departemen';
$lang['settings_tickets_allowed_file_extensions']  = 'Diizinkan ekstensi file lampiran';

$lang['settings_sales_general']                                    = 'Umum';
$lang['settings_sales_general_note']                               = 'Pengaturan Umum';
$lang['settings_sales_invoice_prefix']                             = 'Faktur Nomor Awalan';
$lang['settings_sales_decimal_separator']                          = 'desimal Separator';
$lang['settings_sales_thousand_separator']                         = 'Thousand Separator';
$lang['settings_sales_currency_placement']                         = 'Penempatan mata uang';
$lang['settings_sales_currency_placement_before']                  = 'sebelum Jumlah';
$lang['settings_sales_currency_placement_after']                   = 'setelah Jumlah';
$lang['settings_sales_require_client_logged_in_to_view_invoice']   = 'Memerlukan klien untuk login untuk melihat Invoice';
$lang['settings_sales_next_invoice_number']                        = 'Berikutnya Faktur Nomor';
$lang['settings_sales_next_invoice_number_tooltip']                = 'Mengatur bidang ini untuk 1 jika Anda ingin mulai dari awal';
$lang['settings_sales_decrement_invoice_number_on_delete']         = 'nomor Invoice kenaikan di delete';
$lang['settings_sales_decrement_invoice_number_on_delete_tooltip'] = 'Apakah Anda ingin pengurangan nomor Invoice ketika Invoice terakhir dihapus? Ex. Jika diatur opsi ini untuk YES dan sebelum invoice menghapus nomor Invoice berikutnya adalah 15 nomor Invoice berikutnya akan pengurangan sampai 14 untuk Invoice berikutnya jika diatur ke Tidak jumlahnya akan tetap 15. Jika Anda memiliki setup menghapus hanya pada Invoice terakhir tidak ada Anda harus mengatur opsi ini untuk tidak terlalu untuk menjaga nomor Invoice berikutnya tidak dikurangi.
';
$lang['settings_sales_invoice_number_format']                      = 'Jumlah Format Faktur';
$lang['settings_sales_invoice_number_format_year_based']           = 'Berbasis tahun';
$lang['settings_sales_invoice_number_format_number_based']         = 'Jumlah Berdasarkan (000.001)';
$lang['settings_sales_invoice_year']                               = 'Faktur Tahun (YYYY / 000001)';
$lang['settings_sales_invoice_year_tooltip']                       = 'Invoice tahun berjalan. Ulang ini ketika tahun baru tiba.';

$lang['settings_sales_company_info_heading'] = 'Perusahaan';
$lang['settings_sales_company_info_note']    = 'informasi ini akan ditampilkan pada Invoice / perkiraan / Pembayaran dan dokumen PDF lainnya di mana info perusahaan diperlukan';
$lang['settings_sales_company_name']         = 'Nama Perusahaan';
$lang['settings_sales_address']              = 'Alamat';
$lang['settings_sales_city']                 = 'Kota';
$lang['settings_sales_country_code']         = 'Kode negara';
$lang['settings_sales_postal_code']          = 'Kode Pos';
$lang['settings_sales_phonenumber']          = 'Telepon';

# Potensial
$lang['new_lead']       = 'Potensial baru';
$lang['leads']          = 'Potensial';
$lang['lead']           = 'Potensial';
$lang['lead_lowercase'] = 'potensial';
$lang['leads_all']      = 'Semua';

$lang['leads_canban_notes']  = 'Catatan:% s';
$lang['leads_canban_source'] = 'Sumber:% s';

$lang['lead_new_source']            = 'Sumber Baru';
$lang['lead_sources']               = 'Sumber Utama';
$lang['lead_source']                = 'Sumber Potensial';
$lang['lead_source_lowercase']      = 'sumber potensial';
$lang['leads_sources_not_found']    = 'Tidak ada sumber potensial ditemukan';
$lang['leads_sources_table_name']   = 'Nama Sumber';
$lang['leads_source_add_edit_name'] = 'Nama Sumber';

$lang['lead_new_status']         = 'Status Potensial baru';
$lang['lead_statuss']            = 'Status Potensial';
$lang['lead_status']             = 'Status Potensial';
$lang['lead_status_lowercase']   = 'status potensial';
$lang['leads_status_table_name'] = 'Status Nama';

$lang['leads_status_add_edit_name']  = 'Status Nama';
$lang['leads_status_add_edit_order'] = 'Memesan';

$lang['lead_statuses_not_found']      = 'Tidak ada lead status ditemukan';
$lang['lead_noted_added_successfuly'] = 'Potensial catatan berhasil ditambahkan';
$lang['lead_status_updated']          = 'Cari Potensial';
$lang['leads_search']                 = 'Cari Potensial';

$lang['leads_table_total'] = 'Total Potensial: %s';

$lang['leads_dt_name']         = 'Nama';
$lang['leads_dt_email']        = 'E-mail';
$lang['leads_dt_phonenumber']  = 'Telepon';
$lang['leads_dt_assigned']     = 'Ditugaskan';
$lang['leads_dt_status']       = 'Status';
$lang['leads_dt_last_contact'] = 'Hubungi terakhir';

$lang['lead_add_edit_name']                 = 'Nama';
$lang['lead_add_edit_email']                = 'Alamat email';
$lang['lead_add_edit_phonenumber']          = 'Telepon';
$lang['lead_add_edit_source']               = 'sumber';
$lang['lead_add_edit_status']               = 'Status Potensial';
$lang['lead_add_edit_assigned']             = 'Ditugaskan';
$lang['lead_add_edit_datecontacted']        = 'Tanggal Dihubungi';
$lang['lead_add_edit_contected_today']      = 'dihubungi Hari ini';
$lang['lead_add_edit_activity']             = 'Log Aktivitas';
$lang['lead_add_edit_notes']                = 'Catatan';
$lang['lead_add_edit_add_note']             = 'Menambahkan Catatan';
$lang['lead_not_contacted']                 = 'Saya belum menghubungi Potensial ini';
$lang['lead_add_edit_contected_this_lead']  = 'Saya telah menghubungi potensial ini';
$lang['lead_confirmation_canban_contacted'] = 'Apakah anda telah menghubungi potensi ini?';

# Misc
$lang['activity_log_when_cron_job'] = 'Cron Job';
$lang['access_denied']              = 'Akses ditolak';
$lang['prev']                       = 'sebelumnya';
$lang['next']                       = 'berikutnya';

# Datatables
$lang['dt_paginate_first']          = 'Pertama';
$lang['dt_paginate_last']           = 'Terakhir';
$lang['dt_paginate_next']           = 'Berikutnya';
$lang['dt_paginate_previous']       = 'Sebelumnya';
$lang['dt_empty_table']             = 'Tidak ada {0} ditemukan';
$lang['dt_search']                  = 'Pencarian:';
$lang['dt_zero_records']            = 'Tidak ada catatan yang cocok ditemukan';
$lang['dt_loading_records']         = 'Pemuatan...';
$lang['dt_length_menu']             = 'Lihat _MENU_ entri';
$lang['dt_info_filtered']           = '(Disaring dari _MAC_ Total {0})';
$lang['dt_info_empty']              = 'Menampilkan 0 sampai 0 dari 0 {0}';
$lang['dt_info']                    = 'Menampilkan _START_ untuk _END_ dari _TOTAL_ {0}';
$lang['dt_empty_table']             = 'Tidak ada {0} ditemukan';
$lang['dt_sort_ascending']          = 'aktifkan untuk mengurutkan kolom menaik';
$lang['dt_sort_descending']         = 'aktifkan untuk menyortir kolom menurun';
# Tagihan Aktivitas Log
$lang['user_sent_overdue_reminder'] = '%s mengirim Invoice pengingat jatuh tempo';

# Weekdays
$lang['wd_monday']    = 'Senin';
$lang['wd_tuesday']   = 'Selasa';
$lang['wd_thursday']  = 'Kamis';
$lang['wd_wednesday'] = 'Rabu';
$lang['wd_friday']    = 'Jumat';
$lang['wd_saturday']  = 'Sabtu';
$lang['wd_sunday']    = 'Minggu';

# Admin Left Sidebar
$lang['als_dashboard'] = 'Dasbor';
$lang['als_clients']   = 'Pelanggan';
$lang['als_leads']     = 'Potensial';

$lang['als_contracts'] = 'Kontrak';

$lang['als_all_tickets'] = 'Semua Tiket';
$lang['als_sales']       = 'Penjualan';

$lang['als_staff'] = 'Staf';
$lang['als_tasks'] = 'Tugas';
$lang['als_kb']    = 'Pengetahuan';

$lang['als_surveys']               = 'Survei';
$lang['als_media']                 = 'Media';
$lang['als_reports']               = 'Laporan';
$lang['als_reports_sales_submenu'] = 'Penjualan';
$lang['als_reports_leads_submenu'] = 'Potensial';
$lang['als_kb_articles_submenu']   = 'KB Artikel';
$lang['als_utilities']             = 'Kegunaan';
$lang['als_announcements_submenu'] = 'Pengumuman';
$lang['als_mail_lists_submenu']    = 'Daftar Mail';
$lang['als_calendar_submenu']      = 'Kalender';
$lang['als_activity_log_submenu']  = 'Log aktivitas';

# Admin Customizer Sidebar
$lang['acs_tickets']                           = 'Tiket';
$lang['acs_ticket_priority_submenu']           = 'Prioritas Tiket';
$lang['acs_ticket_statuses_submenu']           = 'Status Tiket';
$lang['acs_ticket_predefined_replies_submenu'] = 'Tanggapan yang telah ditetapkan';
$lang['acs_ticket_services_submenu']           = 'Jasa';
$lang['acs_departments']                       = 'Departemen';
$lang['acs_leads']                             = 'Potensial';
$lang['acs_leads_sources_submenu']             = 'Sumber';
$lang['acs_leads_statuses_submenu']            = 'Status';
$lang['acs_sales_taxes_submenu']               = 'Pajak';
$lang['acs_sales_currencies_submenu']          = 'Mata Uang';
$lang['acs_sales_payment_modes_submenu']       = 'Tipe Pembayaran';
$lang['acs_email_templates']                   = 'Template email';
$lang['acs_roles']                             = 'Peran';
$lang['acs_settings']                          = 'Pengaturan';

# Tiket
$lang['new_ticket']                                         = 'Buka Tiket Baru';
$lang['tickets']                                            = 'Tiket';
$lang['ticket']                                             = 'Tiket';
$lang['ticket_lowercase']                                   = 'tiket';
$lang['support_tickets']                                    = 'Dukungan Tiket';
$lang['support_ticket']                                     = 'Dukungan Tiket';
$lang['ticket_settings_to']                                 = 'Untuk';
$lang['ticket_settings_email']                              = 'Alamat email';
$lang['ticket_settings_departments']                        = 'Departemen';
$lang['ticket_settings_service']                            = 'Layanan';
$lang['ticket_settings_priority']                           = 'Prioritas';
$lang['ticket_settings_subject']                            = 'Subyek';
$lang['ticket_settings_assign_to']                          = 'Menetapkan tiket (default adalah pengguna saat)';
$lang['ticket_settings_assign_to_you']                      = 'Kamu';
$lang['ticket_settings_select_client']                      = 'Pilih Klien';
$lang['ticket_add_body']                                    = 'tubuh tiket';
$lang['ticket_add_attachments']                             = 'lampiran';
$lang['ticket_no_reply_yet']                                = 'Tidak ada balasan';
$lang['new_ticket_added_succesfuly']                        = 'Tiket #% s berhasil ditambahkan';
$lang['replied_to_ticket_succesfuly']                       = 'Balasan untuk tiket berhasil';
$lang['ticket_note_added_successfuly']                      = 'Catatan tiket berhasil ditambahkan';
$lang['ticket_note_deleted_successfuly']                    = 'Catatan tiket berhasil dihapus';
$lang['ticket_settings_updated_successfuly']                = 'Pengaturan tiket berhasil diperbarui';
$lang['ticket_settings_updated_successfuly_and_reassigned'] = 'Pengaturan tiket diperbarui berhasil - Ditugaskan untuk departemen% s';
$lang['ticket_dt_subject']                                  = 'Subyek';
$lang['ticket_dt_department']                               = 'Departemen';
$lang['ticket_dt_service']                                  = 'Layanan';
$lang['ticket_dt_submitter']                                = 'Pelanggan';
$lang['ticket_dt_status']                                   = 'Status';
$lang['ticket_dt_priority']                                 = 'Prioritas';
$lang['ticket_dt_last_reply']                               = 'Balasan terakhir';

$lang['ticket_single_add_reply']                  = 'Tambahkan Balas';
$lang['ticket_single_add_note']                   = 'Menambahkan catatan';
$lang['ticket_single_other_user_tickets']         = 'Tiket lain';
$lang['ticket_single_settings']                   = 'pengaturan';
$lang['ticket_single_priority']                   = 'Prioritas:% s';
$lang['ticket_single_last_reply']                 = 'Balasan terakhir:% s';
$lang['ticket_single_change_status_top']          = 'Merubah status';
$lang['ticket_single_ticket_note_by']             = 'Catatan tiket oleh% s';
$lang['ticket_single_note_added']                 = 'Catatan ditambahkan:% s';
$lang['ticket_single_change_status']              = 'Merubah status';
$lang['ticket_single_assign_to_me_on_update']     = 'Menetapkan tiket ini kepada saya secara otomatis';
$lang['ticket_single_insert_predefined_reply']    = 'Masukkan balasan yang telah ditetapkan';
$lang['ticket_single_insert_knowledge_base_link'] = 'Menyisipkan link basis pengetahuan';
$lang['ticket_single_attachments']                = 'lampiran';
$lang['ticket_single_add_response']               = 'Tambahkan Response';
$lang['ticket_single_note_heading']               = 'Catatan';
$lang['ticket_single_add_note']                   = 'Menambahkan catatan';
$lang['ticket_settings_none_assigned']            = 'tak satupun';
$lang['ticket_status_changed_successfuly']        = 'Status tiket Berubah';
$lang['ticket_status_changed_fail']               = 'Masalah Mengubah Status Tiket';

$lang['ticket_staff_string']                    = 'Staf';
$lang['ticket_client_string']                   = 'Pelanggan';
$lang['ticket_posted']                          = 'Dikirim:% s';
$lang['ticket_insert_predefined_reply_heading'] = 'Masukkan balasan yang telah ditetapkan';
$lang['ticket_kb_link_heading']                 = 'Menyisipkan link basis pengetahuan';
$lang['ticket_access_by_department_denied']     = 'Anda tidak memiliki akses ke tiket ini. tiket ini milik departemen bahwa Anda tidak Ditugaskan.';

# Staff
$lang['new_staff']                       = 'Anggota Baru Staf';
$lang['staff_members']                   = 'Anggota karyawan';
$lang['staff_member']                    = 'Anggota staff';
$lang['staff_member_lowercase']          = 'anggota staff';
$lang['staff_profile_updated']           = 'Profil Anda telah Telah Diperbarui';
$lang['staff_old_password_incorect']     = 'password lama Anda tidak benar';
$lang['staff_password_changed']          = 'Kata sandi Anda telah diubah';
$lang['staff_problem_changing_password'] = 'Masalah mengubah sandi';
$lang['staff_profile_string']            = 'Profil';

$lang['staff_cant_remove_main_admin']          = 'Tidak dapat menghapus administrator utama';
$lang['staff_cant_remove_yourself_from_admin'] = 'Anda tidak dapat menghapus diri sendiri peran administrator';

$lang['staff_dt_name']       = 'Nama lengkap';
$lang['staff_dt_email']      = 'E-mail';
$lang['staff_dt_last_Login'] = 'Login terakhir';
$lang['staff_dt_active']     = 'Aktif';

$lang['staff_add_edit_firstname']             = 'Nama depan';
$lang['staff_add_edit_lastname']              = 'Nama keluarga';
$lang['staff_add_edit_email']                 = 'Email';
$lang['staff_add_edit_phonenumber']           = 'Telepon';
$lang['staff_add_edit_facebook']              = 'Facebook';
$lang['staff_add_edit_linkedin']              = 'LinkedIn';
$lang['staff_add_edit_skype']                 = 'skype';
$lang['staff_add_edit_departments']           = 'departemen anggota';
$lang['staff_add_edit_role']                  = 'Peran';
$lang['staff_add_edit_permissions']           = 'izin';
$lang['staff_add_edit_administrator']         = 'Administrator';
$lang['staff_add_edit_password']              = 'Kata sandi';
$lang['staff_add_edit_password_note']         = 'Catatan: jika Anda mengisi bidang, password akan berubah pada anggota ini.';
$lang['staff_add_edit_password_last_changed'] = 'Sandi lalu berubah';
$lang['staff_add_edit_notes']                 = 'Catatan';
$lang['staff_add_edit_note_description']      = 'Catatan deskripsi';

$lang['staff_notes_table_description_heading'] = 'Catatan';
$lang['staff_notes_table_addedfrom_heading']   = 'ditambahkan Dari';
$lang['staff_notes_table_dateadded_heading']   = 'Tanggal Ditambahkan';

$lang['staff_admin_profile']         = 'Ini adalah profil admin';
$lang['staff_profile_notifications'] = 'pemberitahuan';
$lang['staff_profile_departments']   = 'departemen';

$lang['staff_edit_profile_image']                     = 'profil Gambar';
$lang['staff_edit_profile_your_departments']          = 'Departemen kami';
$lang['staff_edit_profile_change_your_password']      = 'Ubah password Anda';
$lang['staff_edit_profile_change_old_password']       = 'Password lama';
$lang['staff_edit_profile_change_new_password']       = 'Kata sandi baru';
$lang['staff_edit_profile_change_repet_new_password'] = 'sandi baru Ulangi';

# Surveys
$lang['new_survey']                    = 'Survei baru';
$lang['surveys']                       = 'Survei';
$lang['survey']                        = 'penelitian';
$lang['survey_lowercase']              = 'penelitian';
$lang['survey_no_mail_lists_selected'] = 'Tidak ada daftar email yang dipilih';
$lang['survey_send_success_note']      = 'Semua Survei Email (% s) akan dikirim melalui pekerjaan CRON dengan interval waktu 5 menit';
$lang['survey_result']                 = 'Hasil Survei';
$lang['question_string']               = 'Pertanyaan';
$lang['question_field_string']         = 'Bidang';

$lang['survey_list_view_tooltip']         = 'Lihat Survey';
$lang['survey_list_view_results_tooltip'] = 'Lihat hasil';

$lang['survey_add_edit_subject']                   = 'Subjek Survei';
$lang['survey_add_edit_email_description']         = 'Deskripsi survei (Email Keterangan)';
$lang['survey_include_survey_link']                = 'Menyertakan link survei di deskripsi';
$lang['survey_available_mail_lists_custom_fields'] = 'bidang kustom yang tersedia dari daftar email';
$lang['survey_mail_lists_custom_fields_tooltip']   = 'bidang kustom dapat digunakan untuk redaksi email. TIP: Klik pada editor email dan kemudian pilih dari drop down menu yang akan ditambahkan secara otomatis.';
$lang['survey_add_edit_short_description_view']    = 'Survey deskripsi singkat (Lihat Keterangan)';
$lang['survey_add_edit_from']                      = 'Dari (ditampilkan dalam email)';
$lang['survey_add_edit_redirect_url']              = 'URL redirect survei';
$lang['survey_add_edit_red_url_note']              = 'Ketika survei pengguna finish di mana akan diarahkan (kosongkan url situs ini) ';
$lang['survey_add_edit_disabled']                  = 'Nonaktif';
$lang['survey_add_edit_only_for_logged_in']        = 'Hanya untuk login peserta (staf, pelanggan)';
$lang['send_survey_string']                        = 'Kirim Survey';
$lang['survey_send_mail_list_clients']             = 'pelanggan';
$lang['survey_send_mail_list_staff']               = 'Staf';
$lang['survey_send_mail_lists_string']             = 'Daftar Mail';
$lang['survey_send_mail_lists_note_logged_in']     = 'Catatan: Jika Anda mengirim survei untuk daftar email Hanya untuk login peserta harus dicentang';
$lang['survey_send_string']                        = 'Kirim';

$lang['survey_send_to_total']  = 'Kirim untuk total% s email';
$lang['survey_send_till_now']  = 'Sampai sekarang';
$lang['survey_send_finished']  = 'Survey send selesai:% s';
$lang['survey_added_to_queue'] = 'Survei ini ditambahkan ke cron antrian di% s';

$lang['survey_questions_string']          = 'pertanyaan';
$lang['survey_insert_field']              = 'Insert Lapangan';
$lang['survey_field_checkbox']            = 'kotak centang';
$lang['survey_field_radio']               = 'Radio';
$lang['survey_field_input']               = 'Bidang masukan';
$lang['survey_field_textarea']            = 'textarea';
$lang['survey_question_required']         = 'Wajib';
$lang['survey_question_only_for_preview'] = 'Hanya untuk pratinjau';
$lang['survey_create_first']              = 'Anda perlu membuat survei pertama maka Anda akan dapat memasukkan pertanyaan.';


$lang['survey_dt_name']               = 'Nama';
$lang['survey_dt_total_questions']    = 'Total Pertanyaan';
$lang['survey_dt_total_participants'] = 'Jumlah Peserta';
$lang['survey_dt_date_created']       = 'Tanggal Diciptakan';
$lang['survey_dt_active']             = 'Aktif';

$lang['survey_text_questions_results'] = 'Pertanyaan teks hasil';
$lang['survey_view_all_answers']       = 'Lihat Semua jawaban';

# Staff Tugas
$lang['new_task']       = 'Tugas baru';
$lang['tasks']          = 'Tugas';
$lang['task']           = 'Tugas';
$lang['task_lowercase'] = 'tugas';
$lang['comment_string'] = 'Komentar';

$lang['task_marked_as_complete'] = 'Tugas ditandai sbg lengkap';
$lang['task_follower_removed']   = 'Tugas follower berhasil dihapus';
$lang['task_assignee_removed']   = 'Tugas penerima berhasil dihapus';

$lang['task_no_assignees'] = 'Tidak ada yang Ditugaskan untuk tugas ini';
$lang['task_no_followers'] = 'Tidak ada pengikut untuk tugas ini';

$lang['task_list_all']            = 'Semua';
$lang['task_list_finished']       = 'Jadi';
$lang['task_list_unfinished']     = 'Belum selesai';
$lang['task_list_not_assigned']   = 'tidak Ditugaskan';
$lang['task_list_duedate_passed'] = 'Karena Tanggal Lulus';
$lang['tasks_dt_name']            = 'Nama';

$lang['task_single_priority']               = 'Prioritas';
$lang['task_single_start_date']             = 'Tanggal mulai';
$lang['task_single_due_date']               = 'Batas tanggal terakhir';
$lang['task_single_finished']               = 'Jadi';
$lang['task_single_mark_as_complete']       = 'Tanda selesai';
$lang['task_single_edit']                   = 'mengedit';
$lang['task_single_delete']                 = 'Menghapus';
$lang['task_single_assignees']              = 'Pmberi Tugas';
$lang['task_single_assignees_select_title'] = 'Memberikan tugas untuk';
$lang['task_single_followers']              = 'pengikut';
$lang['task_single_followers_select_title'] = 'Tambahkan Pengikut';
$lang['task_single_insert_media_link']      = 'Insert Media Link';
$lang['task_single_add_new_comment']        = 'Tambahkan komentar';

$lang['task_add_edit_subject']     = 'Subyek';
$lang['task_add_edit_priority']    = 'Prioritas';
$lang['task_priority_low']         = 'Rendah';
$lang['task_priority_medium']      = 'Medium';
$lang['task_priority_high']        = 'Tinggi';
$lang['task_priority_urgent']      = 'Penting';
$lang['task_add_edit_start_date']  = 'Mulai tanggal';
$lang['task_add_edit_due_date']    = 'Batas tanggal terakhir';
$lang['task_add_edit_description'] = 'Deskripsi Tugas';

# Taxes
$lang['new_tax']       = 'Pajak baru';
$lang['taxes']         = 'Pajak';
$lang['tax']           = 'Pajak';
$lang['tax_lowercase'] = 'Pajak';
$lang['tax_dt_name']   = 'Nama pajak';
$lang['tax_dt_rate']   = 'Tingkat (persen)';

$lang['tax_add_edit_name'] = 'Nama pajak';
$lang['tax_add_edit_rate'] = 'Tarif Pajak (persen)';
$lang['tax_edit_title']    = 'mengedit Pajak';
$lang['tax_add_title']     = 'Tambahkan Pajak Baru';

# Tiket Statuses
$lang['new_ticket_status']       = 'Status Tiket baru';
$lang['ticket_statuses']         = 'Status tiket';
$lang['ticket_status']           = 'Status tiket';
$lang['ticket_status_lowercase'] = 'status tiket';

$lang['ticket_statuses_dt_name']      = 'Tiket Status Nama';
$lang['no_ticket_statuses_found']     = 'Ada status tiket yang ditemukan';
$lang['ticket_statuses_table_total']  = 'Total% s';
$lang['ticket_status_add_edit_name']  = 'Tiket Status Nama';
$lang['ticket_status_add_edit_color'] = 'Pilih Warna';
$lang['ticket_status_add_edit_order'] = 'Pesanan Status';

# Todos
$lang['new_todo']                  = 'Todo Baru';
$lang['my_todos']                  = 'Todo Item saya';
$lang['todo']                      = 'Todo Item';
$lang['todo_lowercase']            = 'melakukan';
$lang['todo_status_changed']       = 'Todo Status Berubah';
$lang['todo_add_title']            = 'Tambahkan Todo Baru';
$lang['add_new_todo_description']  = 'Deskripsi';
$lang['no_finished_todos_found']   = 'Tidak ada todo selesai ditemukan';
$lang['no_unfinished_todos_found'] = 'Tidak ada todo ditemukan';
$lang['unfinished_todos_title']    = 'Todo yang belum selesai';
$lang['finished_todos_title']      = 'Todo Terbaru selesai';

# Authentication
$lang['password_changed_email_subject']             = 'Kata sandi Anda telah diubah';
$lang['password_reset_email_subject']               = 'Reset password Anda pada% s';
# Utilities
$lang['utility_activity_log']                       = 'Log aktivitas';
$lang['utility_activity_log_filter_by_date']        = 'Filter berdasarkan tanggal';
$lang['utility_activity_log_dt_description']        = 'Deskripsi';
$lang['utility_activity_log_dt_date']               = 'Tanggal';
$lang['utility_activity_log_dt_staff']              = 'Staf';
$lang['utility_calendar_new_event_title']           = 'Tambahkan acara baru';
$lang['utility_calendar_new_event_start_date']      = 'Mulai tanggal';
$lang['utility_calendar_new_event_end_date']        = 'Tanggal akhir';
$lang['utility_calendar_new_event_make_public']     = 'Buat publik';
$lang['utility_calendar_event_added_successfuly']   = 'Acara baru berhasil ditambahkan';
$lang['utility_calendar_event_deleted_successfuly'] = 'Acara Dihapus';
$lang['utility_calendar_new_event_placeholder']     = 'Judul Acara';


# Navigation
$lang['nav_notifications']          = 'pemberitahuan';
$lang['nav_my_profile']             = 'Profil saya';
$lang['nav_edit_profile']           = 'Edit Profil';
$lang['nav_logout']                 = 'Keluar';
$lang['nav_no_notifications']       = 'Tidak ada pemberitahuan ditemukan';
$lang['nav_view_all_notifications'] = 'Lihat Semua pemberitahuan';
$lang['nav_customizer_tooltip']     = 'Sesuaikan Pengaturan';
$lang['nav_notifications_tooltip']  = 'Lihat Pemberitahuan';
$lang['nav_sidebar_toggle_tooltip'] = 'Beralih Sidebar';



## Clients
#

$lang['clients_required_field'] = 'Bagian ini diperlukan';

# Footer
$lang['clients_copyright'] = 'Copyright% s';

# Pengumuman
$lang['clients_announcement_from']  = 'Dari:';
$lang['clients_announcement_added'] = 'ditambahkan: ';

# Kontrak
$lang['clients_contracts']               = 'Kontrak';
$lang['clients_contracts_dt_subject']    = 'Subyek';
$lang['clients_contracts_dt_start_date'] = 'Mulai tanggal';
$lang['clients_contracts_dt_end_date']   = 'Tanggal akhir';

# Home
$lang['clients_quick_invoice_info']                = 'Info Faktur Cepat';
$lang['clients_home_currency_select_tooltip']      = 'Anda perlu memilih mata uang karena Anda memiliki Invoice dengan mata uang yang berbeda';
$lang['clients_report_sales_months_all_time']      = 'Sepanjang waktu';
$lang['clients_report_sales_months_six_months']    = '6 bulan lalu';
$lang['clients_report_sales_months_twelve_months'] = '12 bulan lalu';
$lang['clients_report_sales_months_custom']        = 'Adat';
$lang['clients_report_select_from_date']           = 'Dari tanggal';
$lang['clients_report_select_to_date']             = 'Saat ini';

# Tagihan
$lang['clients_invoice_html_btn_download'] = 'Download';

$lang['clients_my_invoices']        = 'Faktur saya';
$lang['clients_invoice_dt_number']  = 'Invoice #';
$lang['clients_invoice_dt_date']    = 'Tanggal';
$lang['clients_invoice_dt_duedate'] = 'Batas tanggal terakhir';
$lang['clients_invoice_dt_amount']  = 'Jumlah';
$lang['clients_invoice_dt_status']  = 'Status';

# Profil
$lang['clients_profile_heading'] = 'Profil';

# Used untuk edit profile and register START
$lang['clients_firstname'] = 'Nama depan';
$lang['clients_lastname']  = 'Nama belakang';
$lang['clients_email']     = 'Alamat email';
$lang['clients_company']   = 'Perusahaan';
$lang['clients_vat']       = 'Jumlah PPN';
$lang['clients_phone']     = 'Telepon';
$lang['clients_country']   = 'Negara';
$lang['clients_city']      = 'Kota';
$lang['clients_address']   = 'Alamat';
$lang['clients_zip']       = 'Zip';
$lang['clients_state']     = 'Daerah';

# Used untuk edit profile and register END

$lang['clients_register_password']        = 'Password';
$lang['clients_register_password_repeat'] = 'Ulangi Password';
$lang['clients_edit_profile_update_btn']  = 'Update';

$lang['clients_edit_profile_change_password_heading'] = 'Rubah Password';
$lang['clients_edit_profile_old_password']            = 'Password Lama';
$lang['clients_edit_profile_new_password']            = 'Password Baru';
$lang['clients_edit_profile_new_password_repeat']     = 'Ulangi Password';
$lang['clients_edit_profile_change_password_btn']     = 'Rubah Password';
$lang['clients_profile_last_changed_password']        = 'Password last changed %s';

# Knowledge base
$lang['clients_knowledge_base']                    = 'Pengetahuan Dasar';
$lang['clients_knowledge_base_articles_not_found'] = 'Tidak ada pengetahuan dasar ditemukan';
$lang['clients_knowledge_base_find_useful']        = 'Apakah artikel yang anda temukan ini berguna?';
$lang['clients_knowledge_base_find_useful_yes']    = 'Iya';
$lang['clients_knowledge_base_find_useful_no']     = 'Tidak';
$lang['clients_article_only_1_vote_today']         = 'Anda dapat memilih satu kali dalam 24 jam';
$lang['clients_article_voted_thanks_for_feedback'] = 'Terima kasih atas tanggapan Anda';

# Tiket
$lang['clients_ticket_open_subject']                = 'Dibuka Tiket';
$lang['clients_ticket_open_departments']            = 'Department';
$lang['clients_tickets_heading']                    = 'Dukungan Tiket';
$lang['clients_ticket_open_service']                = 'Layanan';
$lang['clients_ticket_open_priority']               = 'Prioritas';
$lang['clients_latest_tickets']                     = 'Tiket terbaru';
$lang['clients_ticket_open_body']                   = 'Tiket Body';
$lang['clients_ticket_attachments']                 = 'Lampiran';
$lang['clients_ticket_posted']                      = 'Dikirim:% s';
$lang['clients_single_ticket_string']               = 'Tiket';
$lang['clients_single_ticket_replied']              = 'Membalas: %s';
$lang['clients_single_ticket_informations_heading'] = 'Informasi Tiket';

$lang['clients_tickets_dt_number']     = 'Tiket #';
$lang['clients_tickets_dt_subject']    = 'Judul';
$lang['clients_tickets_dt_department'] = 'Department';
$lang['clients_tickets_dt_service']    = 'Layanan';
$lang['clients_tickets_dt_status']     = 'Status';
$lang['clients_tickets_dt_last_reply'] = 'Balasan Terakhir';

$lang['clients_ticket_single_department']        = 'Department: %s';
$lang['clients_ticket_single_submited']          = 'Submited: %s';
$lang['clients_ticket_single_status']            = 'Status:';
$lang['clients_ticket_single_priority']          = 'Prioritas: %s';
$lang['clients_ticket_single_add_reply_btn']     = 'Tambah Balasan';
$lang['clients_ticket_single_add_reply_heading'] = 'Tambah Balasan ke tiket ini';

# Login
$lang['clients_login_heading_no_register'] = 'Mohon login';
$lang['clients_login_heading_register']    = 'Mohon login atau register';
$lang['clients_login_email']               = 'Alamat Email';
$lang['clients_login_password']            = 'Password';
$lang['clients_login_remember']            = 'Remember me';
$lang['clients_login_login_string']        = 'Login';

# Mendaftar
$lang['clients_register_string']  = 'Mendaftar';
$lang['clients_register_heading'] = 'Mendaftar';

# Navigation
$lang['clients_nav_login']     = 'Login';
$lang['clients_nav_register']  = 'Mendaftar';
$lang['clients_nav_invoices']  = 'Tagihan';
$lang['clients_nav_contracts'] = 'Kontrak';
$lang['clients_nav_kb']        = 'Pengetahuan Dasar';
$lang['clients_nav_profile']   = 'Profil';
$lang['clients_nav_logout']    = 'Logout';

# Datatables
$lang['clients_dt_paginate_first']    = 'Pertama';
$lang['clients_dt_paginate_last']     = 'Terakhir';
$lang['clients_dt_paginate_next']     = 'Berikutnya';
$lang['clients_dt_paginate_previous'] = 'Sebelumnya';
$lang['clients_dt_empty_table']       = 'Tidak {0} found';
$lang['clients_dt_search']            = 'Cari:';
$lang['clients_dt_zero_records']      = 'Tidak ada catatan yang cocok ditemukan';
$lang['clients_dt_loading_records']   = 'Memuat...';
$lang['clients_dt_length_menu']       = 'Tampilkan _MENU_ ';
$lang['clients_dt_info_filtered']     = '(filtered from _MAX_ total {0})';
$lang['clients_dt_info_empty']        = 'Showing 0 untuk 0 of 0 {0}';
$lang['clients_dt_info']              = 'Showing _START_ untuk _END_ of _TOTAL_ {0}';
$lang['clients_dt_empty_table']       = 'Tidak {0} found';
$lang['clients_dt_sort_ascending']    = 'activate untuk sort column ascending';
$lang['clients_dt_sort_descending']   = 'activate untuk sort column descending';


# Version 1.0.1
# Admin
#
# Pembayaran
$lang['payment_receipt']                               = 'Tanda Terima';
$lang['payment_for_string']                            = 'Pembayaran Untuk';
$lang['payment_date']                                  = 'Pembayaran Tanggal:';
$lang['payment_view_mode']                             = 'Tipe Pembayaran:';
$lang['payment_total_amount']                          = 'Jumlah total';
$lang['payment_table_invoice_number']                  = 'Nomor Tagihan';
$lang['payment_table_invoice_date']                    = 'Tanggal Tagihan';
$lang['payment_table_invoice_amount_total']            = 'Jumlah jumlah';
$lang['payment_table_payment_amount_total']            = 'Pembayaran Jumlah';
$lang['payments_table_transaction_id']                 = 'Transaction ID: %s';
$lang['payment_getaway_token_not_found']               = 'Token Tidak ditemukan';
$lang['online_payment_recorded_success']               = 'Pembayaran recorded successfuly';
$lang['online_payment_recorded_success_fail_database'] = 'Pembayaran is successful but failed untuk insert payment untuk database, contact administrator';

# Potensial
$lang['lead_convert_to_client']                   = 'Convert untuk customer';
$lang['lead_convert_to_email']                    = 'Email';
$lang['lead_convert_to_client_firstname']         = 'Nama Pertama';
$lang['lead_convert_to_client_lastname']          = 'Nama Terakhir';
$lang['lead_email_already_exists']                = 'Potensial emailsudah ada dalam data pelanggan';
$lang['lead_to_client_base_converted_success']    = 'Potensial dikonversi ke customer berhasil';
$lang['lead_already_converted']                   = 'Konversi untuk customer';
$lang['lead_have_client_profile']                 = 'Potensial ini memiliki profil pelanggan.';
$lang['lead_converted_edit_client_profile']       = 'Edit Profil';
$lang['lead_is_client_cant_change_status_canban'] = 'Potensial ini dikonversi pelanggan untuk review. Anda tidak dapat mengubah statusnya.';

# Tagihan
$lang['view_invoice_as_customer_tooltip']                                     = 'Lihat invoice sbg customer';
$lang['invoice_add_edit_recurring']                                           = 'Tagihan Berulang?';
$lang['invoice_add_edit_recurring_no']                                        = 'Tidak';
$lang['invoice_add_edit_recurring_month']                                     = 'Setiap %s bulan';
$lang['invoice_add_edit_recurring_months']                                    = 'Setiap %s bulanan';
$lang['invoices_list_all']                                                    = 'Semua';
$lang['invoices_list_not_sent']                                               = 'Tagihan Tidak Dikirim';
$lang['invoices_list_not_have_payment']                                       = 'Tidak ada catatan tagihan pembayaran';
$lang['invoices_list_recuring']                                               = 'Tagihan Berulang';
$lang['invoices_list_made_payment_by']                                        = 'Buat Pembayaran oleh %s';
$lang['invoices_create_invoice_from_recurring_only_on_paid_invoices']         = 'Buat faktur baru dari faktur berulang utama hanya jika adalah status Dibayar';
$lang['invoices_create_invoice_from_recurring_only_on_paid_invoices_tooltip'] = 'Membuat faktur baru dari faktur berulang utama hanya jika faktur utama adalah status dibayar? Jika bidang ini diatur untuk review TIDAK dan faktur berulang tidak dengan statusnya membayar faktur baru tidak akan dibuat';
$lang['send_renewed_invoice_from_recurring_to_email']                         = 'Mengirim tagihan perpanjangan otomatis ke pelanggan';
$lang['view_invoice_pdf_link_pay']                                            = 'Bayar Tagihan';

# Pembayaran modes
$lang['payment_mode_add_edit_description']         = 'Akun Bank / Deskripsi';
$lang['payment_mode_add_edit_description_tooltip'] = 'Anda dapat mengatur di sini info rek bank. Akan ditampilkan di HTML Tagihan';
$lang['payment_modes_dt_description']              = 'Akun Bank / Deskripsi';
$lang['payment_modes_add_edit_announcement']       = 'Catatan: Pembayaran mode yang tercantum di bawah adalah offline mode. mode Pembayaran online dapat dikonfigurasi di Settings-> Payment Gateways';
$lang['payment_mode_add_edit_active']              = 'Aktif';
$lang['payment_modes_dt_active']                   = 'Aktif';

# Kontrak
$lang['contract_not_found'] = 'Kontrak not found. Maybe is deleted, check activity log';

# Settings
$lang['setting_bar_heading']                 = 'Setup';
$lang['settings_group_online_payment_modes'] = 'Payment Gateways';
$lang['settings_paymentmethod_mode_label']   = 'Label';
$lang['settings_paymentmethod_active']       = 'Aktif';
$lang['settings_paymentmethod_currencies']   = 'Mata Uang dipisahkan koma';
$lang['settings_paymentmethod_testing_mode'] = 'Aktifkan Mode Test';

$lang['settings_paymentmethod_paypal_username']  = 'Paypal API Username';
$lang['settings_paymentmethod_paypal_password']  = 'Paypal API Password';
$lang['settings_paymentmethod_paypal_signature'] = 'API Signature';

$lang['settings_paymentmethod_stripe_api_secret_key']      = 'Stripe API Secret Key';
$lang['settings_paymentmethod_stripe_api_publishable_key'] = 'Stripe Publishable Key';
$lang['settings_limit_top_search_bar_results']             = 'Batasi Top Search Bar Hasil untuk';

# Quick Actions
$lang['qa_create_invoice']  = 'Buat Tagihan';
$lang['qa_create_task']     = 'Buat Tugas';
$lang['qa_create_client']   = 'Buat Customer';
$lang['qa_create_contract'] = 'Buat Kontrak';
$lang['qa_create_kba']      = 'Buat Pengetahuan Dasar Artikel';
$lang['qa_create_survey']   = 'Buat Survey';
$lang['qa_create_ticket']   = 'Dibuka Tiket';
$lang['qa_create_staff']    = 'Buat Staff Member';

## Clients
$lang['client_phonenumber'] = 'Telepon';

# Main Clients
$lang['clients_register']                          = 'Mendaftar';
$lang['clients_profile_updated']                   = 'Profil Anda telah diperbarui';
$lang['clients_successfully_registered']           = 'Terima kasih atas pendaftarannya';
$lang['clients_account_created_but_not_logged_in'] = 'Akun Anda telah dibuat tetapi Anda belum login sistem anda secara otomatis. Mohon mencoba untuk login';
# Tiket
$lang['clients_tickets_heading']                   = 'Dukungan Tiket';

# Pembayaran
// Uses di stripe page
$lang['payment_for_invoice'] = 'Pembayaran untuk Tagihan';
$lang['payment_total']       = 'Total: %s';

# Tagihan
$lang['invoice_html_online_payment']             = 'Pembayaran Online';
$lang['invoice_html_online_payment_button_text'] = 'Bayar sekarang';
$lang['invoice_html_payment_modes_not_selected'] = 'Mohon Select Pembayaran Mode';
$lang['invoice_html_amount_blank']               = 'Jumlah total tidak boleh kosong atau nol';
$lang['invoice_html_offline_payment']            = 'Pembayaran Offline';
$lang['invoice_html_amount']                     = 'Jumlah';


# Version 1.0.2
# Admin
#
# DataTables
$lang['dt_column_visibility_tooltip'] = 'Anda dapat menggunakan visibilitas kolom juga untuk menyesuaikan kolom ekspor. Secara default semua kolom akan diekspor.';
$lang['dt_button_column_visibility']  = 'Visibilitas';
$lang['dt_button_reload']             = 'Muat Ulang';
$lang['dt_button_excel']              = 'Excel';
$lang['dt_button_csv']                = 'CSV';
$lang['dt_button_pdf']                = 'PDF';
$lang['dt_button_print']              = 'Print';
$lang['is_not_active_export']         = 'Tidak';
$lang['is_active_export']             = 'Iya';

# Tagihan
$lang['invoice_add_edit_advanced_options']               = 'Pilihan advanced';
$lang['invoice_add_edit_allowed_payment_modes']          = 'mode pembayaran diperbolehkan untuk faktur ini';
$lang['invoice_add_edit_recuring_invoices_from_invoice'] = 'faktur ini berulang';
$lang['invoice_add_edit_no_payment_modes_found']         = 'tidak ada cara pembayaran yang ditemukan.';
$lang['invoice_html_total_pay']                          = 'Total: %s';

# Email templates
$lang['email_templates_table_heading_name'] = 'Nama Template';
# General
$lang['discount_type']                      = 'Tipe Diskon';
$lang['discount_type_after_tax']            = 'Setelah Pajak';
$lang['discount_type_before_tax']           = 'Sebelum Pajak';
$lang['terms_and_conditions']               = 'Syarat & Ketentuan';
$lang['reference_no']                       = 'Referensi #';
$lang['no_discount']                        = 'Tidak ada diskon';
$lang['view_stats_tooltip']                 = 'Lihat Statistik Cepat';
# Clients
$lang['zip_from_date']                      = 'Dari Tanggal:';
$lang['zip_to_date']                        = 'Ke Tanggal:';
$lang['client_zip_payments']                = 'ZIP Pembayaran';
$lang['client_zip_invoices']                = 'ZIP Tagihan';
$lang['client_zip_estimates']               = 'ZIP Estimasi';
$lang['client_zip_status']                  = 'Status';
$lang['client_zip_status_all']              = 'Semua';
$lang['client_zip_payment_modes']           = 'Pembayaran oleh mode';
$lang['client_zip_no_data_found']           = 'Tidak %s found';

# Pembayaran
$lang['payment_mode']         = 'Tipe Pembayaran';
$lang['payment_view_heading'] = 'Pembayaran';

# Settings
$lang['settings_allow_payment_amount_to_be_modified']               = 'Memungkinkan untuk review pelanggan memodifikasi jumlah untuk membayar (review untuk pembayaran online)';
$lang['settings_survey_send_emails_per_cron_run']                   = 'Berapa banyak email yang dikirim per jam (Survei)';
$lang['settings_survey_send_emails_per_cron_run_tooltip']           = 'Pilihan ini digunakan saat mengirim Survei. Survei cron berjalan setiap 5 menit. Jadi Anda dapat mengatur berapa banyak email dikirim setiap 5 menit';
$lang['settings_delete_only_on_last_invoice']                       = 'menghapus faktur diperbolehkan hanya untuk faktur terakhir';
$lang['settings_sales_estimate_prefix']                             = 'Estimasi Nomor Awalan';
$lang['settings_sales_next_estimate_number']                        = 'Berikutnya Jumlah estimasi';
$lang['settings_sales_next_estimate_number_tooltip']                = 'Mengatur bidang untuk review ini 1 jika Anda ingin mulai untuk review dari awal';
$lang['settings_sales_decrement_estimate_number_on_delete']         = 'Perkiraan penurunan jumlah yang di hapus';
$lang['settings_sales_decrement_estimate_number_on_delete_tooltip'] = 'Apakah Anda ingin penurunan untuk review jumlah perkiraan saat estimasi terakhir dihapus? Ex. Jika diatur opsi untuk review ini YES dan sebelum perkiraan menghapus jumlah perkiraan berikutnya adalah 15 jumlah perkiraan berikutnya akan pengurangan untuk review 14 perkiraan berikutnya jika diatur untuk review NO nomor akan tetap untuk review 15';
$lang['settings_sales_estimate_number_format']                      = 'Estimasi Jumlah Format';
$lang['settings_sales_estimate_number_format_year_based']           = 'Berbasis tahun';
$lang['settings_sales_estimate_number_format_number_based']         = 'Jumlah Berdasarkan (000.001)';
$lang['settings_sales_estimate_year']                               = 'Estimasi Tahun (YYYY / 000001)';
$lang['settings_sales_estimate_year_tooltip']                       = 'estimasi tahun berjalan. ketika tahun baru ini baru tiba.';
$lang['settings_delete_only_on_last_estimate']                      = 'menghapus perkiraan faktur terakhir yang diperbolehkan';
$lang['settings_cron_invoice_heading']                              = 'Tagihan';
$lang['settings_send_test_email_heading']                           = 'Kirim Test Email';
$lang['settings_send_test_email_subheading']                        = 'Kirim test email untuk memastikan bahwa pengaturan SMTP Anda diatur dengan benar.';
$lang['settings_send_test_email_string']                            = 'Alamat Email';
$lang['settings_smtp_settings_heading']                             = 'Pengaturan SMTP';
$lang['settings_smtp_settings_subheading']                          = 'Mempersiapkan email utama';
$lang['settings_getaways_heading_notice']                           = 'Alasan pembayaran online untuk keamanan berlibur hanya terlihat untuk pengguna dengan ID 1. Yang berarti bagi pengguna yang memasang CRM.';
$lang['settings_sales_heading_general']                             = 'General';
$lang['settings_sales_heading_invoice']                             = 'Tagihan';
$lang['settings_sales_heading_estimates']                           = 'Estimasi';
$lang['settings_sales_heading_company']                             = 'Perusahaan';
$lang['settings_sales_cron_invoice_heading']                        = 'Tagihan';

# Tugas
$lang['tasks_dt_datestart'] = 'Tanggal Mulai';
$lang['tasks_dt_priority']  = 'Prioritas';

# Tagihan General
$lang['invoice_discount'] = 'Diskon';

# Tiket
$lang['ticket_settings_client'] = 'Customer';

# Settings
$lang['settings_rtl_support_admin']                                   = 'Lokasi RTL Admin (Kanan ke kiri)';
$lang['settings_rtl_support_client']                                  = 'Klein di Area RTL (Kanan ke kiri)';
$lang['acs_language_editor']                                          = 'Bahasa Editor';
$lang['settings_estimate_auto_convert_to_invoice_on_client_accept']   = 'Auto convert estimasi untuk faktur setelah klien menerima';
$lang['settings_exclude_estimate_from_client_area_with_draft_status'] = 'Kecualikan perkiraan dengan rancangan Status dari wilayah klien';

# Months
$lang['January']   = 'Januari';
$lang['February']  = 'Februari';
$lang['March']     = 'Maret';
$lang['April']     = 'April';
$lang['May']       = 'Mei';
$lang['June']      = 'Juni';
$lang['July']      = 'Juli';
$lang['August']    = 'Agustus';
$lang['September'] = 'September';
$lang['October']   = 'Oktober';
$lang['November']  = 'November';
$lang['December']  = 'Desember';

# Time ago function translate
$lang['time_ago_just_now']  = 'Baru saja';
$lang['time_ago_minute']    = 'satu menit yang lalu';
$lang['time_ago_minutes']   = '%s menit yang lalu';
$lang['time_ago_hour']      = 'satu jam yang lalu';
$lang['time_ago_hours']     = '%s jam yang lalu';
$lang['time_ago_yesterday'] = 'kemarin';
$lang['time_ago_days']      = '%s hari yang lalu';
$lang['time_ago_week']      = 'seminggu yang lalu';
$lang['time_ago_weeks']     = '%s minggu yang lalu';
$lang['time_ago_month']     = 'sebulan yang lalu';
$lang['time_ago_months']    = '%s bulan yang lalu';
$lang['time_ago_year']      = 'setahun yang lalu';
$lang['time_ago_years']     = '%s tahun lalu';


# Estimasi
$lang['estimates']                          = 'Estimasi';
$lang['estimate']                           = 'Estimasi';
$lang['estimate_lowercase']                 = 'estimasi';
$lang['create_new_estimate']                = 'Buat Estimasi Baru';
$lang['view_estimate']                      = 'Lihat estimasi';
$lang['estimate_number_changed']            = 'Estimasi berhasil dibuat tetapi jumlah ini berubah karena seseorang menambahkan perkiraan baru sebelum Anda.';
$lang['estimate_sent_to_client_success']    = 'Estimasi tersebut berhasil dikirim ke klien';
$lang['estimate_sent_to_client_fail']       = 'Masalah saat mengirim estimasi';
$lang['estimate_reminder_send_problem']     = 'Masalah pengiriman estimasi pengingat jatuh tempo';
$lang['estimate_details']                   = 'Estimasi Detil';
$lang['estimate_view']                      = 'Lihat Estimasi';
$lang['estimate_select_customer']           = 'Pelanggan';
$lang['estimate_add_edit_number']           = 'Nomor Estimasi';
$lang['estimate_add_edit_date']             = 'Estimasi Tanggal';
$lang['estimate_add_edit_expirydate']       = 'Expiry Tanggal';
$lang['estimate_add_edit_currency']         = 'Mata uang';
$lang['estimate_add_edit_client_note']      = 'Catatan Klien';
$lang['estimate_add_edit_admin_note']       = 'Catatan Admin';
$lang['estimate_add_edit_new_item']         = 'Item Baru';
$lang['estimate_add_edit_search_item']      = 'Cari Items';
$lang['estimates_toggle_table_tooltip']     = 'Beralih Tabel';
$lang['estimate_add_edit_advanced_options'] = 'Opsi Lanjutan';
$lang['estimate_vat']                       = 'VAT Number';
$lang['estimate_to']                        = 'Ke';
$lang['estimates_list_all']                 = 'Semua';

$lang['estimate_invoiced_date']                  = 'Estimasi Invoiced %s';
$lang['edit_estimate_tooltip']                   = 'Edit Estimasi';
$lang['delete_estimate_tooltip']                 = 'Hapus Estimasi';
$lang['estimate_sent_to_email_tooltip']          = 'kirim untuk Email';
$lang['estimate_already_send_to_client_tooltip'] = 'Perkiraan ini sudah dikirim untuk review klien% s';
$lang['send_overdue_notice_tooltip']             = 'Kirim Akhir Pemberitahuan';
$lang['estimate_view_activity_tooltip']          = 'Aktivitas Log';

$lang['estimate_send_to_client_modal_heading']    = 'Kirim perkiraan ini untuk review klien';
$lang['estimate_send_to_client_attach_pdf']       = 'Lampirkan Perkiraan PDF';
$lang['estimate_send_to_client_preview_template'] = 'Melihat Template Email';

$lang['estimate_dt_table_heading_number']     = 'Estimasi #';
$lang['estimate_dt_table_heading_date']       = 'Tanggal';
$lang['estimate_dt_table_heading_client']     = 'Pelanggan';
$lang['estimate_dt_table_heading_expirydate'] = 'Expiry Tanggal';
$lang['estimate_dt_table_heading_amount']     = 'Jumlah';
$lang['estimate_dt_table_heading_status']     = 'Status';

$lang['estimate_email_link_text']    = 'Lihat Estimasi';
$lang['estimate_convert_to_invoice'] = 'Konversi ke Tagihan';
# Home
$lang['home_unfinished_tasks']       = 'Tugas Belum selesai';

# Clients
$lang['client_estimates_tab'] = 'Estimasi';
$lang['client_payments_tab']  = 'Pembayaran';


# Estimasi General
$lang['estimate_pdf_heading']            = 'Memperkirakan';
$lang['estimate_table_item_heading']     = 'Item';
$lang['estimate_table_quantity_heading'] = 'Qty';
$lang['estimate_table_rate_heading']     = 'Menilai';
$lang['estimate_table_tax_heading']      = 'Tax';
$lang['estimate_table_amount_heading']   = 'Jumlah';
$lang['estimate_subtotal']               = 'Sub Total';
$lang['estimate_adjustment']             = 'Adjustment';
$lang['estimate_discount']               = 'Diskon';
$lang['estimate_total']                  = 'Total';
$lang['estimate_to']                     = 'Ke';
$lang['estimate_data_date']              = 'Tanggal Estimasi';
$lang['estimate_data_expiry_date']       = 'Tanggal kadaluwarsa';
$lang['estimate_note']                   = 'Catatan:';
$lang['estimate_status_draft']           = 'Draft';
$lang['estimate_status_sent']            = 'Dikirim';
$lang['estimate_status_declined']        = 'Ditolak';
$lang['estimate_status_accepted']        = 'Diterima';
$lang['estimate_status_expired']         = 'Kedaluwarsa';
$lang['estimate_note']                   = 'Catatan:';

# Quick create
$lang['qa_create_estimate'] = 'Buat Estimasi';
$lang['qa_create_lead']     = 'Buat Potensial';


## Clients
$lang['clients_estimate_dt_number']             = 'Estimasi #';
$lang['clients_estimate_dt_date']               = 'Tanggal';
$lang['clients_estimate_dt_duedate']            = 'Tanggal kadaluwarsa';
$lang['clients_estimate_dt_amount']             = 'Jumlah';
$lang['clients_estimate_dt_status']             = 'Status';
$lang['clients_nav_estimates']                  = 'Estimasi';
$lang['clients_decline_estimate']               = 'Menurun';
$lang['clients_accept_estimate']                = 'Menerima';
$lang['clients_my_estimates']                   = 'Estimasi';
$lang['clients_estimate_invoiced_successfuly']  = 'Estimasi diterima. Berikut adalah perkiraan dari faktur ini';
$lang['clients_estimate_accepted_not_invoiced'] = 'Terima kasih telah menerima perkiraan ini';
$lang['clients_estimate_declined']              = 'Estimasi menurun. Anda dapat menerima perkiraan setiap saat sebelum tanggal kadaluwarsa';
$lang['clients_estimate_failed_action']         = 'gagal mengambil tindakan untuk perkiraan ini';
$lang['client_add_edit_profile']                = 'Profil';

# Version 1.0.3
# Admin
# Home
$lang['home_invoice_not_sent']        = 'Tagihan Tidak Dikirim';
$lang['home_expired_estimates']       = 'Estimasi Kedaluwarsa';
$lang['home_invoice_overdue']         = 'Tagihan Terlambat';
$lang['home_payments_received_today'] = 'Pembayaran Diterima Hari ini';

# Reports

# Custom Fields
$lang['custom_field']                          = 'Custom field';
$lang['custom_field_lowercase']                = 'custom field';
$lang['custom_fields']                         = 'Custom Fields';
$lang['custom_fields_lowercase']               = 'custom fields';
$lang['new_custom_field']                      = 'Custom field baru';
$lang['custom_field_name']                     = 'Nama Field';
$lang['custom_field_add_edit_type']            = 'Jenis';
$lang['custom_field_add_edit_belongs_top']     = 'Field Milik';
$lang['custom_field_add_edit_options']         = 'Pilihan';
$lang['custom_field_add_edit_options_tooltip'] = 'Hanya gunakan untuk Pilih jenis. Mengisi lapangan dengan memisahkan pilihan oleh koma. Ex. apel, jeruk, pisang';
$lang['custom_field_add_edit_order']           = 'Order';

$lang['custom_field_dt_field_to']       = 'Untuk Milik';
$lang['custom_field_dt_field_name']     = 'Nama';
$lang['custom_field_dt_field_type']     = 'Jenis';
$lang['custom_field_add_edit_active']   = 'Aktif';
$lang['custom_field_add_edit_disabled'] = 'Disabled';

# Tiket replies
$lang['ticket_reply']           = 'Tiket Balasan';
$lang['ticket_reply_lowercase'] = 'ticket reply';

# Admin Customizer Sidebar
$lang['asc_custom_fields'] = 'Custom Fields';

# Kontrak
$lang['contract_types']          = 'Jenis Kontrak';
$lang['contract_type']           = 'Jenis Kontrak';
$lang['new_contract_type']       = 'Tipe Kontrak Baru';
$lang['contract_type_lowercase'] = 'kontrak';
$lang['contract_type_name']      = 'Nama';

$lang['contract_types_list_name'] = 'Jenis Kontrak';

# Customizer Menu
$lang['acs_contracts']      = 'Kontrak';
$lang['acs_contract_types'] = 'Jenis Kontrak';

# Version 1.0.4
# Tagihan Items
$lang['invoice_item_long_description']     = 'Deskripsi Panjang';
# Customers
$lang['client_delete_invoices_warning']    = 'Klien ini memiliki Invoice dan perkiraan pada account. Anda tidak bisa menghapus klien ini. Ubah Semua Invoice untuk klien lain di masa depan kemudian hapus.';
$lang['clients_list_phone']                = 'Telepon';
$lang['client_expenses_tab']               = 'Pengeluaran';
$lang['customers_summary']                 = 'Customers Ringkasan';
$lang['customers_summary_active']          = 'Aktif';
$lang['customers_summary_inactive']        = 'Inactive';
$lang['customers_summary_logged_in_today'] = 'Login hari ini';

# Authentication
$lang['admin_auth_forgot_password_email']             = 'Alamat Email';
$lang['admin_auth_forgot_password_heading']           = 'Lupa kata sandi';
$lang['admin_auth_login_heading']                     = 'Login';
$lang['admin_auth_login_email']                       = 'Alamat Email';
$lang['admin_auth_login_password']                    = 'Kata Sandi';
$lang['admin_auth_login_remember_me']                 = 'Ingat saya';
$lang['admin_auth_login_button']                      = 'Login';
$lang['admin_auth_login_fp']                          = 'Lupa kata sandi?';
$lang['admin_auth_reset_password_heading']            = 'Ulang Kata sandi';
$lang['admin_auth_reset_password']                    = 'Password';
$lang['admin_auth_reset_password_repeat']             = 'Ulangi Password';
$lang['admin_auth_invalid_email_or_password']         = 'Invalid email atau password';
$lang['admin_auth_inactive_account']                  = 'Akun tidak aktif';
# Calender
$lang['calendar_estimate']                            = 'Estimasi';
$lang['calendar_invoice']                             = 'Tagihan';
$lang['calendar_contract']                            = 'Kontrak';
$lang['calendar_client_reminder']                     = 'Klien Reminder';
$lang['calendar_event']                               = 'Kegiatan';
$lang['calendar_task']                                = 'Tugas';
# Potensial
$lang['lead_edit_delete_tooltip']                     = 'Hapus Potensial';
$lang['lead_attachments']                             = 'Lampiran';
# Admin Customizer Sidebar
$lang['acs_finance']                                  = 'Keuangan';
# Settings
$lang['new_company_field_info']                       = 'Bidang ini akan ditampilkan di faktur / memperkirakan di sisi perusahaan (left). Anda tidak diizinkan untuk menambahkan karakter (titik, garis, tanda-tanda dll) di kolom NAME .';
$lang['new_company_field_name']                       = 'Kolom Nama';
$lang['new_company_field_value']                      = 'Kolom Nilai';
$lang['new_company_field']                            = 'Kolom Tambah Perusahaan Baru';
$lang['settings_number_padding_invoice_and_estimate'] = 'Tagihan/Estimasi Nomor Padding Kosong. <br /> <small>Contoh. Jika nilai ini adalah 3 nomor akan diformat: 005 atau 025</small>';
$lang['settings_show_sale_agent_on_invoices']         = 'Tampilkan Agen Sales di Tagihan';
$lang['settings_show_sale_agent_on_estimates']        = 'Tampilkan Agen Sales di Estimasi';
$lang['settings_predefined_predefined_term']          = 'Syarat & Ketentuan Telah Ditentukan';
$lang['settings_predefined_clientnote']               = 'Catatan Klien Telah Ditentukan';
$lang['settings_custom_pdf_logo_image_url']           = 'Kustom PDF Logo Perusahaan URL (JPG - 210x60px)';
$lang['settings_custom_pdf_logo_image_url_tooltip']   = 'Mungkin Anda akan memiliki masalah dengan gambar PNG dengan transparansi yang ditangani dengan cara yang berbeda tergantung di php-Imagick atau versi php-gd digunakan. Cobalah untuk memperbarui php-Imagick dan menonaktifkan php-gd
. Jika kolom ini kosong logo upload akan digunakan.';

# General
$lang['sale_agent_string']               = 'Agen Sales';
$lang['amount_display_in_base_currency'] = 'Jumlah is displayed in your base currency';

# Potensial
$lang['leads_summary']                                         = 'Potensial Ringkasan';

# Kontrak
$lang['contract_value']                 = 'Kontrak Nilai';
$lang['contract_trash']                 = 'Sampah';
$lang['contracts_view_trash']           = 'Lihat Sampah';
$lang['contracts_view_all']             = 'Semua';
$lang['contracts_view_exclude_trashed'] = 'Kecualikan Kontrak dibuang';
$lang['contract_value_tooltip']         = 'Tambah nilai kontrak. nilai akan ditampilkan dalam mata uang dasar Anda.';
$lang['contract_trash_tooltip']         = 'Jika Anda menambahkan kontrak untuk review sampah, tidak akan ditampilkan sisi di client, tidak akan dimasukkan dalam grafik dan statistik lain dan juga secara default tidak akan ditampilkan ketika Anda akan daftar semua kontrak.';

$lang['contract_renew_heading']               = 'Perbarui Kontrak';
$lang['contract_summary_heading']             = 'Ringkasan Kontrak';
$lang['contract_summary_expired']             = 'Kadaluwarsa';
$lang['contract_summary_active']              = 'Aktif';
$lang['contract_summary_about_to_expire']     = 'Tentang Kadaluarsa';
$lang['contract_summary_recently_added']      = 'Baru saja Ditambah';
$lang['contract_summary_trash']               = 'Sampah';
$lang['contract_summary_by_type']             = 'Kontrak berdasarkan Jenis';
$lang['contract_summary_by_type_value']       = 'Nilai Kontrak berdasarkan Jenis';
$lang['contract_renewed_successfuly']         = 'Pembaruan Kontrak Berhasil';
$lang['contract_renewed_fail']                = 'Masalah saat memperbaharui kontrak. Hubungi administrator';
$lang['no_contract_renewals_found']           = 'Perpanjangan kontrak ini tidak ditemukan';
$lang['no_contract_renewals_history_heading'] = 'Riwayat Pembaruan Kontrak';
$lang['contract_renewed_by']                  = '%s diperpanjang kontraknya';
$lang['contract_renewal_deleted']             = 'Pembaruan berhasil dihapus';
$lang['contract_renewal_delete_fail']         = 'Gagal menghapus perpanjangan kontrak. Hubungi administrator';

$lang['contract_renewal_new_value'] = 'Nilai Kontrak Baru: %s';
$lang['contract_renewal_old_value'] = 'Nilai Kontrak Lama: %s';

$lang['contract_renewal_new_start_date'] = 'Tanggal Mulai Baru: %s';
$lang['contract_renewal_old_start_date'] = 'Kontrak Lama dimulai pada: %s';

$lang['contract_renewal_new_end_date'] = 'Tanggal Akhir Baru: %s';
$lang['contract_renewal_old_end_date'] = 'Kontrak Lama diakhiri pada: %s';
$lang['contract_attachment']           = 'Lampiran';
$lang['contract_attachment_lowercase'] = 'lampiran';

# Admin Aside Menu
$lang['als_goals_tracking']     = 'Goals Tracking';
$lang['als_expenses']           = 'Pengeluaran';
$lang['als_reports_expenses']   = 'Pengeluaran';
$lang['als_expenses_vs_income'] = 'Pengeluaran vs Income';

# Tagihan
$lang['invoice_attach_file']           = 'Attach File';
$lang['invoice_mark_as_sent']          = 'Tandai sbg Dikirim';
$lang['invoice_marked_as_sent']        = 'Tagihan marked as sent successfully';
$lang['invoice_marked_as_sent_failed'] = 'Gagal untuk tandai invoice sbg terkirim';

# Quick Actions
$lang['qa_new_goal']    = 'Setup Baru Goal';
$lang['qa_new_expense'] = 'Merekam Pengeluaran';

# Goals Tracking
$lang['goals']                                         = 'Goals';
$lang['goal']                                          = 'Goal';
$lang['goals_tracking']                                = 'Goals Tracking';
$lang['new_goal']                                      = 'Goal Baru';
$lang['goal_lowercase']                                = 'goal';
$lang['goal_start_date']                               = 'Mulai Tanggal';
$lang['goal_end_date']                                 = 'Akhir Tanggal';
$lang['goal_subject']                                  = 'Judul';
$lang['goal_description']                              = 'Deskripsi';
$lang['goal_type']                                     = 'Goal Jenis';
$lang['goal_achievement']                              = 'Prestasi';
$lang['goal_contract_type']                            = 'Jenis Kontrak';
$lang['goal_notify_when_fail']                         = 'Memberitahu anggota staf ketika goal gagal dicapai';
$lang['goal_notify_when_achieve']                      = 'Beritahu anggota staf ketika tujuan tercapai';
$lang['goal_progress']                                 = 'Progress';
$lang['goal_total']                                    = 'Total: %s';
$lang['goal_result_heading']                           = 'Goal Progress';
$lang['goal_income_shown_in_base_currency']            = 'Jumlah penghasilan ditampilkan dalam mata uang dasar Anda';
$lang['goal_notify_when_end_date_arrives']             = 'Anggota staf akan diberitahu ketika tanggal akhir tiba.';
$lang['goal_staff_members_notified_about_achievement'] = 'Anggota staf akan diberitahu tentang pencapaian tujuan ini';
$lang['goal_staff_members_notified_about_failure']     = 'anggota staf diberitahu tentang kegagalan';
$lang['goal_notify_staff_manualy']                     = 'Beritahu Anggota Staf manual';
$lang['goal_notify_staff_notified_manualy_success']    = 'Anggota staf akan diberitahu tentang hasil tujuan ini';
$lang['goal_notify_staff_notified_manualy_fail']       = 'Gagal untuk memberitahu anggota staf tentang hasil tujuan ini';

$lang['goal_achieved'] = 'Achieved';
$lang['goal_failed']   = 'Gagal';
$lang['goal_close']    = 'Very Close';

$lang['goal_type_total_income']                                         = 'Mencapai Penghasilan Total';
$lang['goal_type_convert_leads']                                        = 'Convert X Potensial';
$lang['goal_type_increase_customers_without_leads_conversions']         = 'Tingkatkan Jumlah Pelanggan';
$lang['goal_type_increase_customers_without_leads_conversions_subtext'] = 'Tidak Termasuk konversi Potensial';

$lang['goal_type_increase_customers_with_leads_conversions']         = 'Tingkatkan Jumlah Pelanggan';
$lang['goal_type_increase_customers_with_leads_conversions_subtext'] = 'Termasuk konversi Potensial';
$lang['goal_type_make_contracts_by_type_calc_database']              = 'Membuat Kontrak berdasarkan jenis';
$lang['goal_type_make_contracts_by_type_calc_database_subtext']      = 'Dihitung dari tanggal ditambahkan ke database';
$lang['goal_type_make_contracts_by_type_calc_date']                  = 'Make Kontrak By Jenis';
$lang['goal_type_make_contracts_by_type_calc_date_subtext']          = 'Dihitung dari tanggal mulai kontrak';
$lang['goal_type_total_estimates_converted']                         = 'X Estimasi Conversion ';
$lang['goal_type_total_estimates_converted_subtext']                 = 'Akan diambil hanya estimasi yang akan dikonversi ke tagihan';
$lang['goal_type_income_subtext']                                    = 'Income will be calculated in your base currency (not converted)';
# Pembayaran
$lang['payment_transaction_id']                                      = 'Transaction ID';
# Settings Menu
$lang['acs_expenses']                                                = 'Pengeluaran';
$lang['acs_expense_categories']                                      = 'Pengeluaran Categories';
# Expeneses
$lang['expense_category']                                            = 'Pengeluaran Kategori';
$lang['expense_category_lowercase']                                  = 'expense category';
$lang['new_expense']                                                 = 'Merekam Pengeluaran';
$lang['expense_add_edit_name']                                       = 'Kategori Nama';
$lang['expense_add_edit_description']                                = 'Kategori Deskripsi';
$lang['expense_categories']                                          = 'Pengeluaran Categories';
$lang['new_expense_category']                                        = 'Baru Kategori';
$lang['dt_expense_description']                                      = 'Deskripsi';
$lang['expense']                                                     = 'Pengeluaran';
$lang['expenses']                                                    = 'Pengeluaran';
$lang['expense_lowercase']                                           = 'expense';
$lang['expense_add_edit_tax']                                        = 'Tax';
$lang['expense_add_edit_customer']                                   = 'Customer';
$lang['expense_add_edit_currency']                                   = 'Mata uang';
$lang['expense_add_edit_note']                                       = 'Catatan';
$lang['expense_add_edit_date']                                       = 'Pengeluaran Tanggal';
$lang['expense_add_edit_amount']                                     = 'Jumlah';
$lang['expense_add_edit_billable']                                   = 'Billable';
$lang['expense_add_edit_attach_receipt']                             = 'Lampirkan Tanda Terima';
$lang['expense_add_edit_reference_no']                               = 'Reference #';
$lang['expense_receipt']                                             = 'Tanda Terima Pengeluaran';
$lang['expense_receipt_lowercase']                                   = 'tanda terima pengeluaran';
$lang['expense_dt_table_heading_category']                           = 'Kategori';
$lang['expense_dt_table_heading_amount']                             = 'Jumlah';
$lang['expense_dt_table_heading_date']                               = 'Tanggal';
$lang['expense_dt_table_heading_reference_no']                       = 'Reference #';
$lang['expense_dt_table_heading_customer']                           = 'Customer';
$lang['expense_dt_table_heading_payment_mode']                       = 'Pembayaran Mode';
$lang['expense_converted_to_invoice']                                = 'Pengeluaran successfuly converted untuk invoice';
$lang['expense_converted_to_invoice_fail']                           = 'Gagal untuk convert this expense untuk invoice check error log.';
$lang['expense_copy_success']                                        = 'The expense is copied successfuly.';
$lang['expense_copy_fail']                                           = 'Gagal untuk copy expense. Mohon check the required fields and try again';
$lang['expenses_list_all']                                           = 'Semua';
$lang['expenses_list_billable']                                      = 'Billable';
$lang['expenses_list_non_billable']                                  = 'Non Billable';
$lang['expenses_list_invoiced']                                      = 'Invoiced';
$lang['expenses_list_unbilled']                                      = 'Unbilled';
$lang['expenses_list_recurring']                                     = 'Berulang';
$lang['expense_invoice_delete_not_allowed']                          = 'You cant delete this expense. The expense is already invoiced.';
$lang['expense_convert_to_invoice']                                  = 'Convert Ke Tagihan';
$lang['expense_edit']                                                = 'Edit Pengeluaran';
$lang['expense_delete']                                              = 'Hapus';
$lang['expense_copy']                                                = 'Salin';
$lang['expense_invoice_not_created']                                 = 'Tagihan Belum Dibuat';
$lang['expense_billed']                                              = 'Billed';
$lang['expense_not_billed']                                          = 'Tagihan Belum Dibayar';
$lang['expense_customer']                                            = 'Customer';
$lang['expense_note']                                                = 'Catatan:';
$lang['expense_date']                                                = 'Tanggal:';
$lang['expense_ref_noe']                                             = 'Ref #:';
$lang['expense_tax']                                                 = 'Tax:';
$lang['expense_amount']                                              = 'Jumlah:';
$lang['expense_recurring_indicator']                                 = 'Berulang';
$lang['expense_already_invoiced']                                    = 'This expense is already invoiced';
$lang['expense_recurring_auto_create_invoice']                       = 'Auto Buat Tagihan';
$lang['expense_recurring_send_custom_on_renew']                      = 'Send the invoice untuk customer email when expense repeated';
$lang['expense_recurring_autocreate_invoice_tooltip']                = 'If this option is checked the invoice untuk the customer will be auto created when the expense will be renewed.';
$lang['report_expenses_full']                                        = 'Semua Laporan';
$lang['expenses_yearly_by_categories']                               = 'Pengeluaran Yearly by Categories';
$lang['total_expenses_for']                                          = 'Total Pengeluaran untuk'; // year
$lang['expenses_report_for']                                         = 'Pengeluaran untuk'; // year
$lang['expense_report_info']                                         = 'Billable expenses are not calculated in the report.';
# Custom fields
$lang['custom_field_required']                                       = 'Required';
$lang['custom_field_show_on_pdf']                                    = 'Tampilkan di PDF';
$lang['custom_field_leads']                                          = 'Potensial';
$lang['custom_field_customers']                                      = 'Customers';
$lang['custom_field_staff']                                          = 'Staff';
$lang['custom_field_contracts']                                      = 'Kontrak';
$lang['custom_field_tasks']                                          = 'Tugas';
$lang['custom_field_expenses']                                       = 'Pengeluaran';
$lang['custom_field_invoice']                                        = 'Tagihan';
$lang['custom_field_estimate']                                       = 'Estimasi';
# Tiket
$lang['ticket_single_private_staff_notes']                           = 'Private Staff Notes';


# Business News
$lang['business_news'] = 'Business News';

# Navigation
$lang['nav_todo_items']               = 'Todo items';
# Clients
# Kontrak
$lang['clients_contracts_type']       = 'Jenis Kontrak';
# Version 1.0.5
# General
$lang['no_tax']                             = 'Tanpa Pajak';
$lang['numbers_not_formated_while_editing'] = 'Tingkat di bidang input tidak diformat saat mengedit / add item dan harus tetap tidak diformat dont mencoba Format untuk review secara manual di sini.';
# Kontrak
$lang['contracts_view_expired']             = 'Kedaluwarsa';
$lang['contracts_view_without_dateend']     = 'Kontrak Without Tanggal Akhir';

# Email Templates
$lang['email_template_contracts_fields_heading'] = 'Kontrak';
# Tagihan General
$lang['invoice_estimate_general_options']        = 'General Options';
$lang['invoice_table_item_description']          = 'Deskripsi';
$lang['invoice_recurring_indicator']             = 'Berulang';

# Estimasi
$lang['estimate_convert_to_invoice_successfuly'] = 'Estimasi converted untuk invoice successfuly';
$lang['estimate_table_item_description']         = 'Deskripsi';

# Version 1.0.6
# Tagihan
# Currencies
$lang['cant_delete_base_currency'] = 'Anda tidak dapat menghapus mata uang dasar. Anda perlu uang dasar baru assign untuk review yang menghapus ini.';
$lang['invoice_copy']              = 'Salin Tagihan';
$lang['invoice_copy_success']      = 'Tagihan copied successfuly';
$lang['invoice_copy_fail']         = 'Gagal untuk copy invoice';
$lang['invoice_due_after_help']    = 'Set zero untuk avoid calculation';

$lang['show_shipping_on_invoice'] = 'Tampilkan shipping details in invoice';

# Estimasi
$lang['show_shipping_on_estimate']         = 'Lihat rincian estimasi pengiriman';
$lang['is_invoiced_estimate_delete_error'] = 'Perkiraan ini ditagih. Anda tidak dapat menghapus estimasi';

# Customers & Tagihan / Estimasi
$lang['ship_to']                  = 'Mengirimkan untuk';
$lang['customer_profile_details'] = 'Detil Customer';
$lang['billing_shipping']         = 'Tagihan & Pengiriman';
$lang['billing_address']          = 'Alamat Tagihan';
$lang['shipping_address']         = 'Alamat Pengiriman';

$lang['billing_street']  = 'Jalan';
$lang['billing_city']    = 'Kota';
$lang['billing_state']   = 'Daerah';
$lang['billing_zip']     = 'Zip Code';
$lang['billing_country'] = 'Negara';

$lang['shipping_street']                    = 'Jalan';
$lang['shipping_city']                      = 'Kota';
$lang['shipping_state']                     = 'Daerah';
$lang['shipping_zip']                       = 'Zip Code';
$lang['shipping_country']                   = 'Negara';
$lang['get_shipping_from_customer_profile'] = 'Dapatkan rincian pengiriman dari profil pelanggan';

# Customer
$lang['customer_file_from']                                    = 'Menampilkan dari %s';
$lang['customer_default_currency']                             = 'Mata uang standar';
$lang['customer_no_attachments_found']                         = 'Lampiran tidak ditemukan';
$lang['customer_update_address_info_on_invoices']              = 'Update Info pengiriman / penagihan melakukan semua faktur sebelumnya / perkiraan';
$lang['customer_update_address_info_on_invoices_help']         = 'Jika Anda memeriksa pengiriman bidang ini dan info penagihan akan diperbarui untuk review semua faktur dan perkiraan. Catatan: Tagihan status dibayar tidak akan terpengaruh.';
$lang['setup_google_api_key_customer_map']                     = 'Pengaturan google kunci api untuk melihat ke peta pelanggan';
$lang['customer_attachments_file']                             = 'File';
$lang['client_send_set_password_email']                        = 'Kirim email SET password';
$lang['customer_billing_same_as_profile']                      = 'Sama seperti Info Pelanggan';
$lang['customer_billing_copy']                                 = 'Salin Alamat Penagihan';
$lang['customer_map']                                          = 'Map';
$lang['set_password_email_sent_to_client']                     = 'Email untuk mengatur password berhasil dikirim ke klien';
$lang['set_password_email_sent_to_client_and_profile_updated'] = 'Profil diperbarui dan email untuk mengatur password berhasil dikirim ke klien';
$lang['customer_attachments']                                  = 'Files';
$lang['customer_longitude']                                    = 'Longitude (Google Maps)';
$lang['customer_latitude']                                     = 'Latitude (Google Maps)';

# Authentication
$lang['admin_auth_set_password']          = 'Password';
$lang['admin_auth_set_password_repeat']   = 'Ulangi Password';
$lang['admin_auth_set_password_heading']  = 'Set Password';
$lang['password_set_email_subject']       = 'Set new password di %s';
# General
$lang['apply']                            = 'Terapkan';
$lang['department_calendar_id']           = 'Google Calendar ID';
$lang['kan_ban_string']                   = 'Kan Ban';
$lang['localization_default_language']    = 'Bahasa Standar';
$lang['system_default_string']            = 'Default Sistem';
$lang['advanced_options']                 = 'Opsi Lanjutan';
# Pengeluaran
$lang['expense_list_invoice']             = 'Invoiced';
$lang['expense_list_billed']              = 'Billed';
$lang['expense_list_unbilled']            = 'Unbilled';
# Potensial
$lang['lead_merge_custom_field']          = 'Gabung sbg kolom khusus';
$lang['lead_merge_custom_field_existing'] = 'Merge with existing database field';
$lang['lead_dont_merge_custom_field']     = 'Jangan Gabung';
$lang['no_lead_notes_found']              = 'Tidak ada catatan Potensial ditemukan';
$lang['leads_view_list']                  = 'Daftar';
$lang['lost_leads']                       = 'Potensial Kalah';
$lang['junk_leads']                       = 'Junk Potensial';
$lang['lead_mark_as_lost']                = 'Tandai sbg kalah';
$lang['lead_unmark_as_lost']              = 'Hapus tanda sbg kalah';
$lang['lead_marked_as_lost']              = 'Potensial berhasil ditandai sbg kalah';
$lang['lead_unmarked_as_lost']            = 'Potensial berhasil hapus tanda sbg kalah';
$lang['leads_status_color']               = 'Warna';

$lang['lead_mark_as_junk']     = 'Tandai sbg junk';
$lang['lead_unmark_as_junk']   = 'Hapus tanda Potensial sbg junk';
$lang['lead_marked_as_junk']   = 'Potensial ditandai sbg junk berhasil';
$lang['lead_unmarked_as_junk'] = 'Potensial tidak ditandai sbg junk berhasil';

$lang['lead_not_found']                                                      = 'Potensial Tidak ditemukan';
$lang['lead_lost']                                                           = 'Kalah';
$lang['lead_junk']                                                           = 'Junk';
$lang['leads_not_assigned']                                                  = 'Tidak Ditugaskan';
# Contacts
$lang['contract_not_visible_to_client']                                      = 'Sembunyikan dari customer';
$lang['contract_edit_overview']                                              = 'Kontrak Ikhtisar';
$lang['contract_attachments']                                                = 'Lampiran';
# Tugas
$lang['task_view_make_public']                                               = 'Buat Publik';
$lang['task_is_private']                                                     = 'Tugas Pribadi';
$lang['task_is_private_help']                                                = 'Tugas ini hanya dapat dilihat pmbri tugas, pengikut, pencipta dan administrator';
$lang['task_finished']                                                       = 'Selesai';
$lang['task_single_related']                                                 = 'Terkait';
$lang['task_unmark_as_complete']                                             = 'Tandai sbg belum selesai';
$lang['task_unmarked_as_complete']                                           = 'Tugas ditandai sbg blum selesai';
$lang['task_relation']                                                       = 'Terkait';
$lang['task_public']                                                         = 'Publik';
$lang['task_public_help']                                                    = 'Jika Anda mengatur tugas ini kepada publik akan dapat dilihat oleh Semua anggota staf. Jika tidak akan hanya terlihat anggota yang assignees, pengikut, pencipta atau administrator';
# Settings
$lang['settings_general_favicon']                                            = 'Favicon';
$lang['settings_output_client_pdfs_from_admin_area_in_client_language']      = 'Output dokumen klien PDF dari daerah admin dalam bahasa klien';
$lang['settings_output_client_pdfs_from_admin_area_in_client_language_help'] = 'Jika opsi ini diatur ke ya dan ex. bahasa default sistem Inggris dan klien telah bahasa penyiapan Perancis dokumen pdf akan dikeluarkan dalam bahasa klien';
$lang['settings_cron_surveys']                                               = 'Survei';
$lang['settings_default_tax']                                                = 'Default Tax';
$lang['setup_calendar_by_departments']                                       = 'Setup kalender by Departments';
$lang['settings_calendar']                                                   = 'Calendar';
$lang['settings_sales_invoice_due_after']                                    = 'Tagihan due after (days)';
$lang['settings_google_api']                                                 = 'Google API Key';
$lang['settings_gcal_main_calendar_id']                                      = 'Google Calendar ID';
$lang['settings_gcal_main_calendar_id_help']                                 = 'Ini adalah kalender utama perusahaan. Semua Semua acara dari Kalender ini akan ditampilkan. Jika Anda ingin menentukan kalender berdasarkan departemen Anda dapat menambahkan di departemen Google ID Kalender.';

$lang['show_on_calendar']                  = 'Tampilkan di Calendar';
$lang['show_invoices_on_calendar']         = 'Tagihan';
$lang['show_estimates_on_calendar']        = 'Estimasi';
$lang['show_contracts_on_calendar']        = 'Kontrak';
$lang['show_tasks_on_calendar']            = 'Tugas';
$lang['show_client_reminders_on_calendar'] = 'Klien Reminders';

# Potensial
$lang['copy_custom_fields_convert_to_customer']                      = 'Salin custom fields untuk customer profile';
$lang['copy_custom_fields_convert_to_customer_help']                 = 'Jika salah satu bidang khusus berikut tidak ada pelanggan untuk review akan otomatis dibuat dengan nama di sama jika tidak hanya nilai akan disalin dari profil Potensial.';
$lang['lead_profile']                                                = 'Profil';
$lang['lead_is_client']                                              = 'Customer';
$lang['leads_kan_ban_notes_title']                                   = 'Notes';
$lang['leads_email_integration_folder_no_encryption']                = 'Tidak Enkripsi';
$lang['leads_email_integration']                                     = 'Integrasi Email';
$lang['leads_email_active']                                          = 'Aktif';
$lang['leads_email_integration_imap']                                = 'IMAP Server';
$lang['leads_email_integration_email']                               = 'Email address (Login)';
$lang['leads_email_integration_password']                            = 'Password';
$lang['leads_email_integration_port']                                = 'Port';
$lang['leads_email_integration_default_source']                      = 'Sumber Bawaan';
$lang['leads_email_integration_check_every']                         = 'Periksa Setiap (menit)';
$lang['leads_email_integration_default_assigned']                    = 'Bertanggung jawab untuk Potensial baru';
$lang['leads_email_encryption']                                      = 'Enkripsi';
$lang['leads_email_integration_updated']                             = 'Email Integration Updated';
$lang['leads_email_integration_default_status']                      = 'Default Status';
$lang['leads_email_integration_folder']                              = 'Folder';
$lang['leads_email_integration_notify_when_lead_imported']           = 'Notify when lead imported';
$lang['leads_email_integration_only_check_unseen_emails']            = 'Only check non opened emails';
$lang['leads_email_integration_only_check_unseen_emails_help']       = 'The script will auto set the email untuk opened after check. This is used untuk prevent checking all the emails again and again. Its not recomended untuk uncheck this option if you have a lot emails and you have setup a lot forwarding untuk the email you setup untuk leads';
$lang['leads_email_integration_notify_when_lead_contact_more_times'] = 'Notify if lead send email multiple times';
$lang['leads_email_integration_test_connection']                     = 'Test IMAP Connection';
$lang['lead_email_connection_ok']                                    = 'IMAP Connection is good';
$lang['lead_email_connection_not_ok']                                = 'IMAP Connection is not okey';
$lang['lead_email_activity']                                         = 'Email Aktivitas';
$lang['leads_email_integration_notify_roles']                        = 'Beritahu Peranan';
$lang['leads_email_integration_notify_staff']                        = 'Beritahu Staf Anggota';
$lang['lead_public']                                                 = 'Publik';
# Pengetahuan Dasar

$lang['kb_group_color']                = 'Warna';
$lang['kb_group_order']                = 'Order';
# Utilities - BULK PDF Exporter
$lang['bulk_pdf_exporter']             = 'Bulk PDF Exporter';
$lang['bulk_export_pdf_payments']      = 'Pembayaran';
$lang['bulk_export_pdf_estimates']     = 'Estimasi';
$lang['bulk_export_pdf_invoices']      = 'Tagihan';
$lang['bulk_pdf_export_button']        = 'Ekspor';
$lang['bulk_pdf_export_select_type']   = 'Select Jenis';
$lang['no_data_found_bulk_pdf_export'] = 'Tidak data found untuk export';
$lang['bulk_export_status_all']        = 'Semua';
$lang['bulk_export_status']            = 'Status';
$lang['bulk_export_zip_payment_modes'] = 'Lakukan pembayaran dengan';
$lang['bulk_export_include_tag']       = 'Sertakan Tag';
$lang['bulk_export_include_tag_help']  = 'Ex. Original atau Salin. The tag will be outputed in the PDF. Recomended untuk use only 1 tag';
# Predefined replies
$lang['no_predefined_replies_found']   = 'Tak ada balasan yg ditetapkan ditemukan';
## Clients area
$lang['clients_contract_attachments']  = 'Lampiran';
# Backup
$lang['backup_type_full']              = 'Full Backup';
$lang['backup_type_db']                = 'Database Backup';

$lang['auto_backup_options_updated']     = 'Auto backup options updated';
$lang['auto_backup_every']               = 'Buat backup every X days';
$lang['auto_backup_enabled']             = 'Diaktifkan (Requires Cron)';
$lang['auto_backup']                     = 'Auto backup';
$lang['backup_delete']                   = 'Backup Deleted';
$lang['create_backup']                   = 'Buat Backup';
$lang['backup_success']                  = 'Backup is made successfuly';
$lang['utility_backup']                  = 'Database Backup';
$lang['utility_create_new_backup_db']    = 'Buat Database Backup';
$lang['utility_backup_table_backupname'] = 'Backup';
$lang['utility_backup_table_backupsize'] = 'Backup size';
$lang['utility_backup_table_backupdate'] = 'Tanggal';
$lang['utility_db_backup_note']          = 'Catatan: Karena waktu eksekusi terbatas dan memori yang tersedia untuk PHP, back up database yang sangat besar tidak mungkin. Jika database Anda sangat besar Anda mungkin perlu untuk backup langsung dari SQL server Anda melalui baris perintah, ATAU memiliki admin server Anda melakukannya untuk Anda jika Anda tidak memiliki hak akses root.';

# Version 1.0.7
## Customers - portal
$lang['clients_nav_proposals'] = 'Proposal';
$lang['clients_nav_support']   = 'Dukungan';
# General
$lang['more']                  = 'Lebih';
$lang['add_item']              = 'Tambah Item';
$lang['goto_admin_area']       = 'Pergi ke Admin Area';
$lang['click_here_to_edit']    = 'Klik disini untuk sunting';
$lang['delete']                = 'Hapus %s';
$lang['welcome_top']           = 'Halo %s';

# Customers
$lang['customer_permissions']         = 'Hak Akses';
$lang['customer_permission_invoice']  = 'Tagihan';
$lang['customer_permission_estimate'] = 'Estimasi';
$lang['customer_permission_proposal'] = 'Proposal';
$lang['customer_permission_contract'] = 'Kontrak';
$lang['customer_permission_support']  = 'Dukungan';


#Tugas
$lang['task_related_to'] = 'Terkait Ke';

# Send file
$lang['custom_file_fail_send']    = 'Gagal untuk send file';
$lang['custom_file_success_send'] = 'File tersebut berhasil dikirim ke %s';
$lang['send_file_subject']        = 'Email Judul';
$lang['send_file_email']          = 'Alamat Email';
$lang['send_file_message']        = 'Pesan';
$lang['send_file']                = 'Kirim File';
$lang['add_checklist_item']       = 'Checklist Item';
$lang['task_checklist_items']     = 'Checklist Items';

# Import
$lang['default_pass_clients_import'] = 'Default Password untuk all customers';
$lang['simulate_import']             = 'Simulate Import';
$lang['import_upload_failed']        = 'Upload Gagal';
$lang['import_total_imported']       = 'Total Imported: %s';
$lang['import_leads']                = 'Import Potensial';
$lang['import_customers']            = 'Import Customers';
$lang['choose_csv_file']             = 'Choose CSV File';
$lang['import']                      = 'Import';
$lang['lead_import_status']          = 'Status';
$lang['lead_import_source']          = 'Source';

# Bulk PDF Ekspor
$lang['bulk_export_pdf_proposals'] = 'Proposal';

# Tagihan
$lang['delete_invoice'] = 'Hapus';

# Calendar
$lang['calendar_lead_reminder'] = 'Potensial Reminder';

$lang['items']      = 'Item';
$lang['support']    = 'Dukungan';
$lang['new_ticket'] = 'Tiket Baru';

# Reminders
$lang['client_edit_set_reminder_title'] = 'Tambah Pengingat Pelanggan';
$lang['lead_set_reminder_title']        = 'Tambah Pengingat Potensial';
$lang['set_reminder_tooltip']           = 'Opsi ini memungkinkan Anda untuk tidak pernah lupa apa-apa tentang pelanggan Anda.';
$lang['client_reminders_tab']           = 'Pengingat';
$lang['leads_reminders_tab']            = 'Pengingat';

# Tiket
$lang['delete_ticket_reply']  = 'Hapus Balasan';
$lang['ticket_priority_edit'] = 'Edit Prioritas';
$lang['ticket_priority_add']  = 'Tambah Prioritas';
$lang['ticket_status_edit']   = 'Edit Tiket Status';
$lang['ticket_service_edit']  = 'Edit Tiket Layanan';
$lang['edit_department']      = 'Edit Department';

# Pengeluaran
$lang['edit_expense_category']                                    = 'Edit Pengeluaran Kategori';
# Settings
$lang['customer_default_country']                                 = 'Default Negara';
$lang['settings_sales_require_client_logged_in_to_view_estimate'] = 'Require client untuk be logged in untuk lihat estimate';
$lang['set_reminder']                                             = 'Set Reminder';
$lang['set_reminder_date']                                        = 'Tanggal untuk be notified';
$lang['reminder_description']                                     = 'Set description';
$lang['reminder_notify_me_by_email']                              = 'Send also an email untuk this pengingat';
$lang['reminder_added_successfuly']                               = 'Reminder added successfuly. You will be notified in time.';
$lang['reminder_description']                                     = 'Deskripsi';
$lang['reminder_date']                                            = 'Tanggal';
$lang['reminder_staff']                                           = 'Remind';
$lang['reminder_is_notified']                                     = 'Is notified?';
$lang['reminder_is_notified_boolean_no']                          = 'Tidak';
$lang['reminder_is_notified_boolean_yes']                         = 'Iya';
$lang['reminder_set_to']                                          = 'Set pengingat untuk';
$lang['reminder_deleted']                                         = 'Reminder deleted successfuly';
$lang['reminder_failed_to_delete']                                = 'Gagal untuk delete the pengingat';
$lang['show_invoice_estimate_status_on_pdf']                      = 'Tampilkan invoice/estimate status di PDF';
$lang['email_piping_default_priority']                            = 'Default priority di piped ticket';
$lang['show_lead_reminders_on_calendar']                          = 'Potensial Reminders';
$lang['tickets_piping']                                           = 'Email Piping';
$lang['email_piping_only_replies']                                = 'Hanya Balasan Diizinkan oleh Email';
$lang['email_piping_only_registered']                             = 'Pipe Only di Registed Users';
$lang['email_piping_enabled']                                     = 'Diaktifkan';

# Estimasi
$lang['view_estimate_as_client']         = 'Lihat estimasi sbg customer';
$lang['estimate_mark_as']                = 'Tandai sbg %s';
$lang['estimate_status_changed_success'] = 'Status Estimasi Dirubah';
$lang['estimate_status_changed_fail']    = 'Gagal untuk merubah estimasi status';
$lang['estimate_email_link_text']        = 'Lihat Estimasi';

# Proposal
$lang['proposal_to']                            = 'Perusahaan / Nama';
$lang['proposal_date']                          = 'Tanggal';
$lang['proposal_address']                       = 'Address';
$lang['proposal_phone']                         = 'Telepon';
$lang['proposal_email']                         = 'Email';
$lang['proposal_date_created']                  = 'Tanggal Dibuat';
$lang['proposal_open_till']                     = 'Dibuka Till';
$lang['proposal_status_open']                   = 'Dibuka';
$lang['proposal_status_accepted']               = 'Diterima';
$lang['proposal_status_declined']               = 'Ditolak';
$lang['proposal_status_sent']                   = 'Dikirim';
$lang['proposal_expired']                       = 'Kedaluwarsa';
$lang['proposal_subject']                       = 'Judul';
$lang['proposal_total']                         = 'Total';
$lang['proposal_status']                        = 'Status';
$lang['proposals_list_all']                     = 'Semua';
$lang['proposals_leads_related']                = 'Potensial Terkait';
$lang['proposals_customers_related']            = 'Customers Terkait';
$lang['proposal_related']                       = 'Terkait';
$lang['proposal_for_lead']                      = 'Potensial';
$lang['proposal_for_customer']                  = 'Customer';
$lang['proposal']                               = 'Proposal';
$lang['proposal_lowercase']                     = 'proposal';
$lang['proposals']                              = 'Proposal';
$lang['proposals_lowercase']                    = 'proposal';
$lang['new_proposal']                           = 'Proposal Baru';
$lang['proposal_currency']                      = 'Mata uang';
$lang['proposal_allow_comments']                = 'Izinkan Komentar';
$lang['proposal_allow_comments_help']           = 'Jika Anda memeriksa pilihan ini komentar akan diizinkan ketika klien Anda melihat proposal.';
$lang['proposal_edit']                          = 'Edit';
$lang['proposal_pdf']                           = 'PDF';
$lang['proposal_send_to_email']                 = 'Kirim ke Email';
$lang['proposal_send_to_email_title']           = 'Kirim Proposal ke Email';
$lang['proposal_attach_pdf']                    = 'Lampirkan PDF';
$lang['proposal_preview_template']              = 'Pratinjau Template';
$lang['proposal_view']                          = 'Lihat Proposal';
$lang['proposal_copy']                          = 'Salin';
$lang['proposal_delete']                        = 'Hapus';
$lang['proposal_mark_as_open']                  = 'Tandai sbg Dibuka';
$lang['proposal_mark_as_declined']              = 'Tandai sbg Ditolak';
$lang['proposal_mark_as_accepted']              = 'Tandai sbg Diterima';
$lang['proposal_mark_as_sent']                  = 'Tandai sbg Dikirim';
$lang['proposal_to']                            = 'Ke';
$lang['proposal_add_comment']                   = 'Tambah Komentar';
$lang['proposal_sent_to_email_success']         = 'Proposal berhasil dikirim ke email';
$lang['proposal_sent_to_email_fail']            = 'Gagal mengirimkan proposal ke email';
$lang['proposal_copy_fail']                     = 'Gagal menyalin Proposal';
$lang['proposal_copy_success']                  = 'Proposal berhasil disalin';
$lang['proposal_status_changed_success']        = 'Status Proposal berhasil diubah';
$lang['proposal_status_changed_fail']           = 'Gagal mengubah status proposal';
$lang['proposal_assigned']                      = 'Ditugaskan';
$lang['proposal_comments']                      = 'Komentar';
$lang['proposal_convert']                       = 'Convert';
$lang['proposal_convert_estimate']              = 'Estimasi';
$lang['proposal_convert_invoice']               = 'Tagihan';
$lang['proposal_convert_to_estimate']           = 'Convert ke Estimasi';
$lang['proposal_convert_to_invoice']            = 'Convert ke Tagihan';
$lang['proposal_convert_to_lead_disabled_help'] = 'Anda perlu mengkonversi Potensial kepada pelanggan dalam rangka menciptakan %s';
$lang['proposal_convert_not_related_help']      = 'Proposal harus terkait dengan pelanggan untuk mengkonversi ke %s';
$lang['proposal_converted_to_estimate_success'] = 'Proposal berhasil dikonersi jadi Estimasi';
$lang['proposal_converted_to_invoice_success']  = 'Proposal berhasil dikonersi jadi Invoice';
$lang['proposal_converted_to_estimate_fail']    = 'Gagal mengkonversi Proposal ke Estimasi';
$lang['proposal_converted_to_invoice_fail']     = 'Gagal mengkonversi Proposal ke Invoice';

# Proposal - lihat proposal template
$lang['proposal_total_info']   = 'Total %s';
$lang['proposal_accept_info']  = 'Terima';
$lang['proposal_decline_info'] = 'Tolak';
$lang['proposal_pdf_info']     = 'PDF';

# Customers Portal
$lang['customer_reset_action']            = 'Reset';
$lang['customer_reset_password_heading']  = 'Mereset password Anda';
$lang['customer_forgot_password_heading'] = 'Lupa Password';
$lang['customer_forgot_password']         = 'Lupa Password?';
$lang['customer_reset_password']          = 'Password';
$lang['customer_reset_password_repeat']   = 'Ulangi Password';
$lang['customer_forgot_password_email']   = 'Alamat Email';
$lang['customer_forgot_password_submit']  = 'Submit';
$lang['customer_ticket_subject']          = 'Judul';

# Email templates
$lang['email_template_proposals_fields_heading'] = 'Proposal';

# Tugas
$lang['add_task_attachments']                 = 'Attachment';
$lang['task_view_attachments']                = 'Lampiran';
$lang['task_view_description']                = 'Deskripsi';
$lang['task_table_is_finished_indicator']     = 'Iya';
$lang['task_table_is_not_finished_indicator'] = 'Tidak';
$lang['tasks_dt_finished']                    = 'Selesai';

# Customer Groups
$lang['customer_group_add_heading']  = 'Tambah Group Pelanggan Baru';
$lang['customer_group_edit_heading'] = 'Edit Group Pelanggan';
$lang['new_customer_group']          = 'Group Pelanggan Baru';
$lang['customer_group_name']         = 'Nama';
$lang['customer_groups']             = 'Groups';
$lang['customer_group']              = 'Group Pelanggan';
$lang['customer_group_lowercase']    = 'group pelanggan';

$lang['customer_have_invoices_by']       = 'Berisi faktur berdasarkan status %s';
$lang['customer_have_estimates_by']      = 'Berisi estimasi berdasarkan status %s';
$lang['customer_have_contracts_by_type'] = 'Memiliki kontrak menurut jenis %s';

# Custom fields
$lang['custom_field_show_on_table']              = 'Tampilkan di tabel';
$lang['custom_field_show_on_client_portal']      = 'Tampilkan di Portal klien';
$lang['custom_field_show_on_client_portal_help'] = 'Jika bidang ini diperiksa juga akan ditampilkan dalam tabel';
$lang['custom_field_visibility']                 = 'Visibilitas';

# Utilities # Menu Builder
$lang['utilities_menu_translate_name_help'] = 'Anda dapat menambahkan di sini juga menerjemahkan string. Jadi jika staf / sistem memiliki bahasa lainnya maka default nama item menu akan dicetak, dalam bahasa staf. Sebaliknya jika Dont tali ada di menerjemahkan file akan diambil string Anda masukkan di sini.';
$lang['utilities_menu_icon']                = 'Icon';
$lang['active_menu_items']                  = 'Aktif Menu Items';
$lang['inactive_menu_items']                = 'Inactive Menu Items';
$lang['utilities_menu_permission']          = 'Permission';
$lang['utilities_menu_url']                 = 'URL';
$lang['utilities_menu_name']                = 'Nama';
$lang['utilities_menu_save']                = 'Save Menu';

# Pengetahuan Dasar
$lang['view_articles_list']     = 'Lihat Artikel';
$lang['view_articles_list_all'] = 'Semua Artikel';
$lang['als_add_article']        = 'Tambah Artikel';
$lang['als_all_articles']       = 'Semua Artikel';
$lang['als_kb_groups']          = 'Groups';

# Customizer Menu
$lang['menu_builder']            = 'Menu Setup';
$lang['main_menu']               = 'Main Menu';
$lang['setup_menu']              = 'Setup Menu';
$lang['utilities_menu_url_help'] = '%s is auto appended untuk the url';

# Spam Filter - Tiket
$lang['spam_filters']                 = 'Spam Filters';
$lang['spam_filter']                  = 'Spam Filter';
$lang['new_spam_filter']              = 'Baru Spam Filter';
$lang['spam_filter_blocked_senders']  = 'Blocked Senders';
$lang['spam_filter_blocked_subjects'] = 'Blocked Subjects';
$lang['spam_filter_blocked_phrases']  = 'Blocked Phrases';
$lang['spam_filter_content']          = 'Content';
$lang['spamfilter_edit_heading']      = 'Edit Spam Filter';
$lang['spamfilter_add_heading']       = 'Tambah Spam Filter';
$lang['spamfilter_type']              = 'Jenis';
$lang['spamfilter_type_subject']      = 'Judul';
$lang['spamfilter_type_sender']       = 'Sender';
$lang['spamfilter_type_phrase']       = 'Phrase';

# Tiket
$lang['block_sender']               = 'Block Sender';
$lang['sender_blocked']             = 'Sender Blocked';
$lang['sender_blocked_successfuly'] = 'Sender Blocked Successfuly';
$lang['ticket_date_created']        = 'Tanggal Dibuat';

#KB
$lang['edit_kb_group']             = 'Edit group';
# Potensial
$lang['edit_source']               = 'Edit Source';
$lang['edit_status']               = 'Edit Status';
# Contacts
$lang['contract_type_edit']        = 'Edit Kontrak Jenis';
# Reports
$lang['report_by_customer_groups'] = 'Total Nilai By Customer Groups';
#Utilities
$lang['ticket_pipe_log']           = 'Tiket Pipe Log';
$lang['ticket_pipe_name']          = 'Dari Nama';
$lang['ticket_pipe_email_to']      = 'Ke';
$lang['ticket_pipe_email']         = 'Dari Email';
$lang['ticket_pipe_subject']       = 'Judul';
$lang['ticket_pipe_message']       = 'Message';
$lang['ticket_pipe_date']          = 'Tanggal';
$lang['ticket_pipe_status']        = 'Status';

# Home
$lang['home_invoice_paid']          = 'Tagihan Dibayar';
$lang['home_invoice_partialy_paid'] = 'Tagihan Partially Dibayar';
$lang['home_estimate_declined']     = 'Estimasi Ditolak';
$lang['home_estimate_accepted']     = 'Estimasi Diterima';
$lang['home_estimate_sent']         = 'Estimasi Dikirim';
$lang['home_latest_activity']       = 'Aktivitas Terakhir';
$lang['home_my_tasks']              = 'Tugas Saya';
$lang['home_latest_activity']       = 'Aktivitas Terakhir';
$lang['home_my_todo_items']         = 'My Todo Items';
$lang['home_widget_view_all']       = 'Lihat Semua';
$lang['home_stats_full_report']     = 'Full Report';

# Validation - Customer Portal

$lang['form_validation_required']    = 'The {field} field is required.';
$lang['form_validation_valid_email'] = 'The {field} field must contain a valid email address.';
$lang['form_validation_matches']     = 'The {field} field does not match the {param} field.';
$lang['form_validation_is_unique']   = 'The {field} field must contain a unique value.';

# Version 1.0.8
# Notifications & Potensial/Estimasi/Tagihan Aktivitas Log
$lang['not_event'] = 'Kegiatan start today - %s ...';
$lang['not_event_public'] = 'Public event start today - %s ...';
$lang['not_contract_expiry_reminder'] = 'Kontrak expiry pengingat - %s ...';
$lang['not_recurring_expense_cron_activity_heading'] = 'Berulang Pengeluaran Cron Job Aktivitas';
$lang['not_recurring_invoices_cron_activity_heading'] = 'Berulang Tagihan Cron Job Aktivitas';
$lang['not_recurring_total_renewed'] = 'Total Renewed: %s';
$lang['not_recurring_expenses_action_taken_from'] = 'Action taken from recurring expense';
$lang['not_invoice_created'] = 'Tagihan Dibuat:';
$lang['not_invoice_renewed'] = 'Tagihan Diperbarui:';
$lang['not_expense_renewed'] = 'Pengeluaran Diperbarui:';
$lang['not_invoice_sent_to_customer'] = 'Tagihan Dikirim untuk Pelanggan: %s';
$lang['not_invoice_sent_yes'] = 'Iya';
$lang['not_invoice_sent_not'] = 'Tidak';
$lang['not_action_taken_from_recurring_invoice'] = 'Tindakan yg diambil dari faktur berulang:';
$lang['not_new_reminder_for'] = 'Pengingat Baru untuk %s';
$lang['not_received_one_or_more_messages_lead'] = 'Menerima satu lagi pesan email dari lead';
$lang['not_received_lead_imported_email_integration'] = 'Potensial Imported Dari Integrasi Email';
$lang['not_lead_imported_attachment'] = 'Impor lampiran dari email';
$lang['not_estimate_status_change'] = 'Di impor lampiran dari email';
$lang['not_estimate_status_updated'] = 'Status Estimasi Diperbarui: Dari: %s untuk %s';
$lang['not_goal_achieved_heading'] = 'Selamat! Kami mencapai Goal baru.';
$lang['not_goal_failed_heading'] = 'Kami gagal mencapai Goal!';
$lang['not_goal_message'] = 'Jenis Goal: %s
<br />Goal Prestasi: %s
<br />Total Achivement: %s
<br />Mulai Tanggal: %s
<br />Akhir Tanggal: %s';
$lang['not_assigned_lead_to_you'] = '%s lead Ditugaskan %s untuk kamu';
$lang['not_lead_activity_assigned_to'] = '%s Ditugaskan untuk %s';
$lang['not_lead_activity_attachment_deleted'] = 'Hapus Lampiran';
$lang['not_lead_activity_status_updated'] = '%s Perbarui Potensial statusmu dari %s ke %s';
$lang['not_lead_activity_contacted'] = '%s lead ini dihubungi pada %s';
$lang['not_lead_activity_created'] = '%s lead dibuat';
$lang['not_lead_activity_marked_lost'] = 'Marked as lost';
$lang['not_lead_activity_unmarked_lost'] = 'Unmarked as lost';
$lang['not_lead_activity_marked_junk'] = 'Marked as junk';
$lang['not_lead_activity_unmarked_junk'] = 'Unmarked as junk';
$lang['not_lead_activity_added_attachment'] = 'Ditambah attachment';
$lang['not_lead_activity_email_change'] = 'Potensial email was not the same with client email when this lead is converted untuk client.';
$lang['not_lead_activity_converted_email'] = 'Potensial email changed. Pertama lead email was: %s and added sbg customer with email %s';
$lang['not_lead_activity_converted'] = '%s Converted this lead untuk customer';
$lang['not_liked_your_post'] = '%s liked your post %s ...';
$lang['not_commented_your_post'] = '%s commented di your post %s ...';
$lang['not_liked_your_comment'] = '%s liked your komentar %s ...';
$lang['not_proposal_assigned_to_you'] = 'Proposal Ditugaskan untuk Anda - %s ...';
$lang['not_proposal_comment_from_client'] = 'Baru komentar from customer di proposal %s ...';
$lang['not_proposal_proposal_accepted'] = 'Proposal Diterima';
$lang['not_proposal_proposal_declined'] = 'Proposal Ditolak';
$lang['not_task_added_you_as_follower'] = 'added you as follower di task %s ...';
$lang['not_task_added_someone_as_follower'] = 'added %s as follower di task %s ...';
$lang['not_task_added_himself_as_follower'] = 'added himself as follower di task %s ...';
$lang['not_task_assigned_to_you'] = 'assigned a task untuk you %s ...';
$lang['not_task_assigned_someone'] = 'assigned %s untuk task %s ...';
$lang['not_task_will_do_user'] = 'akan melakukan tugas %s ...';
$lang['not_task_new_attachment'] = 'Lampiran Baru Ditambah';
$lang['not_task_marked_as_complete'] = 'tugas ditandai selesai %s';
$lang['not_task_unmarked_as_complete'] = 'hapus tanda selesai %s';
$lang['not_ticket_assigned_to_you'] = 'Tiket Ditugaskan untuk Anda - %s ...';
$lang['not_ticket_reassigned_to_you'] = 'Tiket kembali Ditugaskan untuk Anda - %s ...';
$lang['not_estimate_customer_accepted'] = 'Selamat! Klien menerima estimasi dengan nomor %s';
$lang['not_estimate_customer_declined'] = 'Klien menolak perkiraan dengan nomor %s';
$lang['estimate_activity_converted'] = 'Estimasi ini dikonversi jadi invoice.<br /> %s';
$lang['estimate_activity_created'] = 'Estimasi Dibuat';
$lang['invoice_estimate_activity_removed_item'] = 'Hapus item <b>%s</b>';
$lang['estimate_activity_number_changed'] = 'Estimasi number changed from %s untuk %s';
$lang['invoice_activity_number_changed'] = 'Tagihan number changed from %s untuk %s';
$lang['invoice_estimate_activity_updated_item_short_description'] = 'updated item short description from %s untuk %s';
$lang['invoice_estimate_activity_updated_item_long_description'] = 'updated item long description from <b>%s</b> untuk <b>%s</b>';
$lang['invoice_estimate_activity_updated_item_rate'] = 'updated item rate from %s untuk %s';
$lang['invoice_estimate_activity_updated_qty_item'] = 'updated quantity di item <b>%s</b> from %s untuk %s';
$lang['invoice_estimate_activity_added_item'] = 'item baru ditambah <b>%s</b>';
$lang['invoice_estimate_activity_sent_to_client'] = 'sent estimate untuk client';
$lang['estimate_activity_client_accepted_and_converted'] = 'Pelanggan menerima estimasi ini. Estimasi diubah jadi invoice dengan nomor %s';
$lang['estimate_activity_client_accepted'] = 'Pelanggan menerima estimasi ini';
$lang['estimate_activity_client_declined'] = 'Klien menolak estimasi ini';
$lang['estimate_activity_marked'] = 'estimasi ditandai sbg %s';
$lang['invoice_activity_status_updated'] = 'Status Invoice diperbarui dari %s ke %s';
$lang['invoice_activity_created'] = 'Invoice Dibuat';
$lang['invoice_activity_from_expense'] = 'converted untuk invoice from expense';
$lang['invoice_activity_recuring_created'] = '[Berulang] Tagihan created by CRON';
$lang['invoice_activity_recuring_from_expense_created'] = '[Tagihan Dari Pengeluaran] Tagihan created by CRON';
$lang['invoice_activity_sent_to_client_cron'] = 'Tagihan sent untuk customer by CRON';
$lang['invoice_activity_sent_to_client'] = 'sent invoice untuk customer';
$lang['invoice_activity_marked_as_sent'] = 'marked invoice as sent';
$lang['invoice_activity_payment_deleted'] = 'deleted payment untuk the invoice. Pembayaran #%s, total amount %s';
$lang['invoice_activity_payment_made_by_client'] = 'Klien melakukan pembayaran untuk invoice dari jumlah <b>%s</b> - %s';
$lang['invoice_activity_payment_made_by_staff'] = 'mencatat pembayaran dari jumlah <b>%s</b> - %s';
$lang['invoice_activity_added_attachment'] = 'Lampiran Ditambah';

# Navigation
$lang['top_search_placeholder'] = 'Cari...';

# Staff
$lang['staff_profile_inactive_account'] = 'Akun anggota staf ini tidak aktif';

# Estimasi
$lang['copy_estimate'] = 'Salin Estimasi';
$lang['estimate_copied_successfuly'] = 'Estimasi copied successfuly';
$lang['estimate_copied_fail'] = 'Gagal untuk copy estimate';

# Tugas
$lang['tasks_view_assigned_to_user'] = 'Tugas ditguaskan untuk saya';
$lang['tasks_view_follower_by_user'] = 'Tugas i\'m mengikuti';
$lang['no_tasks_found'] = 'Tidak Tugas Ditemukan';

# Potensial
$lang['leads_dt_datecreated'] = 'Dibuat';
$lang['leads_sort_by'] = 'Sort by';
$lang['leads_sort_by_datecreated'] = 'Tanggal Dibuat';
$lang['leads_sort_by_kanban_order'] = 'Kan Ban Order';

# Proposal
$lang['proposal_items_name'] = 'Item';
$lang['proposal_items_description'] = 'Deskripsi';
$lang['proposal_items_qty'] = 'Qty';
$lang['proposal_items_rate'] = 'Rate';
$lang['proposal_items_tax'] = 'Tax';
$lang['proposal_items_amount'] = 'Jumlah';

# Authentication
$lang['check_email_for_reseting_password'] = 'Periksa email Anda untuk petunjuk lebih lanjut ulang kata sandi Anda';
$lang['inactive_account'] = 'Akun tidak aktif';
$lang['error_setting_new_password_key'] = 'Kesalahan pengaturan kata sandi baru';
$lang['password_reset_message'] = 'Sandi Anda telah disetel ulang. Silahkan login sekarang!';
$lang['password_reset_message_fail'] = 'Kesalahan Setel ulang sandi Anda. Coba lagi.';
$lang['password_reset_key_expired'] = 'Kunci password kadaluwarsa atau pengguna tidak valid';
$lang['admin_auth_reset_pass_repeat'] = 'Ulangi Password';
$lang['auth_reset_pass_email_not_found'] = 'Email tidak ditemukan';
$lang['auth_reset_password_submit'] = 'Reset Password';

# Settings
$lang['settings_amount_to_words'] = 'Jumlah Kata-Kata';
$lang['settings_amount_to_words_desc'] = 'Jumlah total output ke kata-kata dalam faktur/estimasi';
$lang['settings_amount_to_words_enabled'] = 'Aktifkan';
$lang['settings_total_to_words_lowercase'] = 'Jumlah kata-kata menjadi huruf kecil';
$lang['settings_show_tax_per_item'] = 'Tampilkan PAJAK per item (Tagihan/Estimasi)';

# Reports
$lang['report_sales_months_three_months'] = '3 Bulan terakhir';
$lang['report_invoice_number'] = 'Tagihan #';
$lang['report_invoice_customer'] = 'Customer';
$lang['report_invoice_date'] = 'Tanggal';
$lang['report_invoice_duedate'] = 'Jatuh Tempo';
$lang['report_invoice_amount'] = 'Jumlah';
$lang['report_invoice_amount_with_tax'] = 'Jumlah dengan pajak';
$lang['report_invoice_amount_open'] = 'Jumlah terbuka';
$lang['report_invoice_status'] = 'Status';
$lang['report_invoice_total_amount_with_tax'] = 'Total jumlah dengan pajak';
$lang['report_invoice_total_amount_without_tax'] = 'Jumlah total tanpa pajak';
$lang['report_invoice_total_taxes'] = 'Pajak';

#Version 1.0.9

# Home stats
$lang['home_stats_see_weekly_payments'] = 'See weekly payments';
$lang['home_stats_by_project_status'] = 'Statistics by project status';
$lang['home_invoice_overview'] = 'Ikhtisar Tagihan';
$lang['home_estimate_overview'] = 'Ikhtisar Estimasi';
$lang['home_proposal_overview'] = 'Ikhtisar Proposal';
$lang['home_lead_overview'] = 'Ikhtisar Potensial';
$lang['home_my_projects'] = 'Proyek Saya';
$lang['home_announcements'] = 'Pengumuman';

# Settings
$lang['settings_leads_kanban_limit'] = 'Batas Potensial Kanban baris per Status';
$lang['settings_group_misc'] = 'Misc';
$lang['show_projects_on_calendar'] = 'Tampilkan projects di kalender';
$lang['settings_media_max_file_size_upload'] = 'Max file size upload in Media (MB)';
$lang['settings_client_staff_add_edit_delete_task_comments_first_hour'] = 'Memungkinkan pelanggan / staf untuk menambahkan komentar / mengedit tugas hanya dalam satu jam pertama (Administrator tidak diterapkan)';

# Email templates
$lang['email_template_only_domain_email'] = 'Hanya email domain';

# Pengumuman
$lang['dismiss_announcement'] = 'Pemberhentian pengumuman';
$lang['dismiss_announcement'] = 'Pemberhentian pengumuman';
$lang['announcement_from'] = 'Dari:';
$lang['announcement_date'] = 'Tanggal posted: %s';
$lang['announcement_not_found'] = 'Pengumuman tidak ada';
$lang['announcements_recents'] = 'Pengumuman Terbaru';

# General
$lang['zip_invoices'] = 'Zip Tagihan';
$lang['zip_estimates'] = 'Zip Estimasi';
$lang['zip_payments'] = 'Zip Pembayaran';
$lang['setup_help'] = 'Help';
$lang['clients_list_company'] = 'Perusahaan';
$lang['dt_button_export'] = 'Ekspor';

$lang['dt_entries'] = 'entries';
$lang['invoice_total_paid'] = 'Total Dibayar';
$lang['invoice_amount_due'] = 'Jumlah harus dibayar';
$lang['report_invoice_discount'] = 'Diskon';

# Calendar
$lang['calendar_project'] = 'Proyek';

# Potensial
$lang['leads_import_assignee'] = 'Assignee';
$lang['customer_from_lead'] = 'Customer from %s';
$lang['lead_kan_ban_attachments'] = 'Lampiran %s';
$lang['leads_sort_by_lastcontact'] = 'Kontak Terakhir';

# Tugas
$lang['task_comment_added'] = 'Komentar berhasil ditambahkan';
$lang['task_duedate'] = 'Jatuh Tempo';
$lang['task_view_comments'] = 'Komentar';
$lang['task_comment_updated'] = 'Komentar diperbarui';
$lang['task_visible_to_client'] = 'Terlihat untuk customer';
$lang['task_hourly_rate'] = 'Nilai Per Jam';
$lang['hours'] = 'Jam';
$lang['seconds'] = 'Kalender';
$lang['minutes'] = 'Menit';
$lang['task_start_timer'] = 'Mulai Timer';
$lang['task_stop_timer'] = 'Stop Timer';
$lang['task_billable_help'] = 'Jika Anda memeriksa tugas ditagih akan ditampilkan saat membuat faktur sbg item';
$lang['task_billable'] = 'Billable';
$lang['task_billable_yes'] = 'Billable';
$lang['task_billable_no'] = 'Not Billable';
$lang['task_billed'] = 'Billed';
$lang['task_billed_yes'] = 'Billed';
$lang['task_billed_no'] = 'Not Billed';
$lang['task_user_logged_time'] = 'Your logged time:';
$lang['task_total_logged_time'] = 'Total logged time:';
$lang['task_is_billed'] = 'Tugas ini ditagih di faktur dengan nomor %s';
$lang['task_statistics'] = 'Statistik';
$lang['task_milestone'] = 'Milestone';

# Tiket
$lang['ticket_message_updated_successfuly'] = 'Pesan berhasil diperbarui';

# Tagihan
$lang['invoice_task_item_project_tasks_not_included'] = 'Tugas proyek tidak termasuk dalam daftar ini.';
$lang['show_quantity_as'] = 'Tampilkan quantity as:';
$lang['quantity_as_qty'] = 'Qty';
$lang['quantity_as_hours'] = 'Jam';
$lang['invoice_table_hours_heading'] = 'Jam';
$lang['bill_tasks'] = 'Bill Tugas';
$lang['invoice_estimate_sent_to_email'] = 'Email';

# Estimasi
$lang['estimate_table_hours_heading'] = 'Jam';

# General
$lang['is_customer_indicator'] = 'Customer';
$lang['print']            = 'Print';
$lang['customer_permission_projects']            = 'Proyek';
$lang['no_timers_found']            = 'Belum mulai timer ditemukan';
$lang['timers_started_confirm_logout']            = 'Timer Tugas Berlangsung Ditemukan! <br /><br />Apakah Anda yakin ingin log out tanpa menghentikan timer?';
$lang['confirm_logout']            = 'Logout';
$lang['timer_top_started']            = 'Dimulai pada %s';

# Proyek
$lang['cant_change_billing_type_billed_tasks_found'] = 'Anda tidak dapat mengubah jenis penagihan. tugas tertagih sudah ditemukan proyek ini.';
$lang['project_customer_permission_warning'] = 'Sistem ini menunjukkan bahwa pelanggan tidak memiliki izin untuk proyek-proyek. Pelanggan tidak akan dapat melihat proyek. Pertimbangkan menambahkan izin di profil pelanggan Izin tab.';
$lang['project_invoice_timesheet_start_time'] = 'Mulai time: %s';
$lang['project_invoice_timesheet_end_time'] = 'Akhir time: %s';
$lang['project_invoice_timesheet_total_logged_time'] = 'Logged time: %s';
$lang['project_view_as_client'] = 'Lihat project sbg customer';
$lang['project_mark_all_tasks_as_completed'] = 'Tandai semua tugas sbg selesai dan menghentikan semua timer (Tidak ada pemberitahuan dikirim kepada anggota proyek)';
$lang['project_not_started_status_tasks_timers_found'] = 'Tugas timer ditemukan proyek ini, tetapi proyek ini dengan status yang tidak dimulai. Dianjurkan untuk mengubah status proyek untuk kemajuan';
$lang['project_status'] = 'Status';
$lang['project_status_1'] = 'Belum Dimulai';
$lang['project_status_2'] = 'On Progress';
$lang['project_status_3'] = 'Tertahan';
$lang['project_status_4'] = 'Selesai';

$lang['project_file_uploaded_by_customer'] = 'Customer';
$lang['project_file_dateadded'] = 'Tanggal diunggah';
$lang['project_file_filename'] = 'Filename';
$lang['project_file__filetype'] = 'Filetype';
$lang['project_file_visible_to_customer'] = 'Terlihat untuk Customer';
$lang['project_file_uploaded_by'] = 'Diunggah oleh';
$lang['edit_project'] = 'Edit Proyek';
$lang['copy_project'] = 'Salin Proyek';
$lang['delete_project'] = 'Hapus Proyek';
$lang['project_task_assigned_to_user'] = 'Tugas Ditugaskan untuk Anda';
$lang['seconds'] = 'Detik';
$lang['hours'] = 'Jam';
$lang['minutes'] = 'Menit';
$lang['project']                 = 'Proyek';
$lang['project_lowercase']       = 'proyek';
$lang['projects']                = 'Proyek';
$lang['projects_lowercase']      = 'proyek';
$lang['project_settings']      = 'Proyek pengaturan';
$lang['project_invoiced_successfuly']             = 'Tagihan Proyek Berhasil';
$lang['new_project']             = 'Baru Proyek';
$lang['project_files']            = 'Files';
$lang['project_activity']            = 'Aktivitas';
$lang['project_name']            = 'Proyek Nama';
$lang['project_description']            = 'Deskripsi Proyek';
$lang['project_customer']            = 'Customer';
$lang['project_start_date']            = 'Mulai Tanggal';
$lang['project_datecreated']            = 'Tanggal Dibuat';
$lang['project_deadline']            = 'Deadline';
$lang['project_billing_type']            = 'Jenis penagihan';
$lang['project_billing_type_fixed_cost']            = 'Harga Tetap';
$lang['project_billing_type_project_hours']            = 'Jam Proyek';
$lang['project_billing_type_project_task_hours']            = 'Jam Tugas';
$lang['project_billing_type_project_task_hours_hourly_rate']            = 'Berdasarkan tugas tarif per jam';
$lang['project_rate_per_hour']            = 'Harga Per Jam';
$lang['project_total_cost']            = 'Total biaya';
$lang['project_members']            = 'Proyek Members';
$lang['project_member_removed']     = 'Proyek member removed successfuly';
$lang['project_overview']           = 'Proyek Ikhtisar';
$lang['project_gant']            = 'Matriks';
$lang['project_milestones']            = 'Milestones';
$lang['project_milestone_order']            = 'Order';
$lang['project_milestone_duedate_passed']            = 'Jatuh Tempo berlalu';
$lang['record_timesheet']            = 'Timesheet';
$lang['new_milestone']            = 'Baru Milestone';
$lang['edit_milestone']            = 'Edit Milestone';
$lang['milestone_name']            = 'Nama';
$lang['milestone_due_date']            = 'Jatuh Tempo';
$lang['project_milestone']            = 'Milestone';
$lang['project_notes']            = 'Notes';
$lang['project_timesheets']            = 'Timesheets';
$lang['project_timesheet']            = 'Timesheet';
$lang['milestone_total_logged_time']            = 'Logged Time';
$lang['project_overview_total_logged_hours']            = 'Total Logged Jam';
$lang['milestones_uncategorized']            = 'Tak Berkategori';
$lang['milestone_no_tasks_found']            = 'Tidak tasks found';
$lang['copy_project_discussions_not_included']            = 'Lampiran and comments are not included';
$lang['project_copied_successfuly']            = 'Proyek data copied successfuly';
$lang['failed_to_copy_project']            = 'Gagal untuk copy project';
$lang['copy_project_task_include_check_list_items']            = 'Salin checklist items';
$lang['copy_project_task_include_assignees']            = 'Salin the same assignees';
$lang['copy_project_task_include_followers']            = 'Salin the same followers';

$lang['project_days_left']            = 'Waktu Tersisa';
$lang['project_open_tasks']            = 'Tugas Dibuka';
$lang['timesheet_stop_timer']            = 'Stop Timer';
$lang['failed_to_add_project_timesheet_end_time_smaller']            = 'Gagal untuk menambah timesheet. Waktu akhir lebih kecil dari waktu mulai';
$lang['project_timesheet_user']            = 'Member';
$lang['project_timesheet_start_time']            = 'Waktu Mulai';
$lang['project_timesheet_end_time']            = 'Waktu Akhir';
$lang['project_timesheet_time_spend']            = 'Waktu yg dihabiskan';
$lang['project_timesheet_task']            = 'Tugas';
$lang['project_invoices']                = 'Tagihan';
$lang['total_logged_hours_by_staff']            = 'Total Logged Time';
$lang['invoice_project']            = 'Tagihan Proyek';
$lang['invoice_project_info']            = 'Proyek Tagihan Info';
$lang['invoice_project_data_single_line']            = 'Single line';
$lang['invoice_project_data_task_per_item']            = 'Tugas per item';
$lang['invoice_project_data_timesheets_individualy']            = 'Semua timesheets individualy';
$lang['invoice_project_item_name_data']            = 'Nama Item';
$lang['invoice_project_description_data']            = 'Deskripsi';
$lang['invoice_project_projectname_taskname']            = 'Nama Proyek + Nama Tugas';
$lang['invoice_project_all_tasks_total_logged_time']            = 'Semua tasks + total logged time per task';
$lang['invoice_project_project_name_data']            = 'Nama Proyek';
$lang['invoice_project_timesheet_indivudualy_data']            = 'Timesheet start time + end time + total logged time';
$lang['invoice_project_total_logged_time_data']            = 'Total logged time';

$lang['project_allow_client_to'] = 'Allow customer untuk %s';
$lang['project_setting_view_task_attachments'] = 'lihat task attachments';
$lang['project_setting_view_task_checklist_items'] = 'lihat task checklist items';
$lang['project_setting_upload_files'] = 'upload files';
$lang['project_setting_view_task_comments'] = 'lihat task comments';
$lang['project_setting_upload_on_tasks'] = 'upload attachments di tasks';
$lang['project_setting_view_task_total_logged_time'] = 'lihat task total logged time';
$lang['project_setting_open_discussions'] = 'buka diskusi';
$lang['project_setting_comment_on_tasks'] = 'komentar di tugas proyek';
$lang['project_setting_view_tasks'] = 'lihat tasks';
$lang['project_setting_view_milestones'] = 'lihat milestones';
$lang['project_setting_view_gantt'] = 'lihat Gantt';
$lang['project_setting_view_timesheets'] = 'lihat timesheets';
$lang['project_setting_view_activity_log'] = 'lihat activity log';
$lang['project_setting_view_team_members'] = 'lihat team members';

$lang['project_discussion_visible_to_customer_yes']                 = 'Terlihat';
$lang['project_discussion_visible_to_customer_no']                 = 'Tak Terlihat';

$lang['project_discussion_posted_on']                 = 'Diposting pada %s';
$lang['project_discussion_posted_by']                 = 'Diposting oleh %s';
$lang['project_discussion_failed_to_delete']                 = 'Gagal untuk delete discussion';
$lang['project_discussion_deleted']                 = 'Diskusi deleted successfuly';
$lang['project_discussion_no_activity']                 = 'Tidak Aktivitas';
$lang['project_discussion']                 = 'Diskusi';
$lang['project_discussions']                 = 'Diskusi';
$lang['edit_discussion'] = 'Buat Diskusi';
$lang['new_project_discussion'] = 'Buat Diskusi';
$lang['project_discussion_subject'] = 'Judul';
$lang['project_discussion_description'] = 'Deskripsi';
$lang['project_discussion_show_to_customer'] = 'Terlihat untuk Pelanggan';
$lang['project_discussion_total_comments'] = 'Total Komentar';
$lang['project_discussion_last_activity'] = 'Aktivitas Terakhir';
$lang['discussion_add_comment'] = 'Tambah komentar';
$lang['discussion_newest'] = 'Terbaru';
$lang['discussion_oldest'] = 'Terlama';
$lang['discussion_attachments'] = 'Lampiran';
$lang['discussion_send'] = 'Send';
$lang['discussion_reply'] = 'Jawab';
$lang['discussion_edit'] = 'Edit';
$lang['discussion_edited'] = 'Diubah';
$lang['discussion_you'] = 'Anda';
$lang['discussion_save'] = 'Simpan';
$lang['discussion_delete'] = 'Hapus';
$lang['discussion_view_all_replies'] = 'Tampilkan all replies';
$lang['discussion_hide_replies'] = 'Sembunyikan balasan';
$lang['discussion_no_comments'] = 'Tidak ada komentar';
$lang['discussion_no_attachments'] = 'Tidak ada lampiran';
$lang['discussion_attachments_drop'] = 'Drag dan drop untuk mengupload file';
$lang['project_note'] = 'Catatan';
$lang['project_note_private'] = 'Catatan pribadi';
$lang['project_save_note'] = 'Simpan Catatan';

# Proyek Aktivitas
$lang['project_activity_created'] = 'Proyek Dibuat';
$lang['project_activity_updated'] = 'Proyek Diperbarui';
$lang['project_activity_removed_team_member'] = 'Hapus Anggota tim';
$lang['project_activity_added_team_member'] = 'Anggota tim baru ditambah';
$lang['project_activity_marked_all_tasks_as_complete'] = 'Ditandai semua tugas sbg selesai';
$lang['project_activity_recorded_timesheet'] = 'Recorded timesheet';
$lang['project_activity_task_name'] = 'Tugas:';
$lang['project_activity_deleted_discussion'] = 'Diskusi Dihapus';
$lang['project_activity_created_discussion'] = 'Diskusi Dibuat';
$lang['project_activity_updated_discussion'] = 'Diskusi Diperbarui';
$lang['project_activity_commented_on_discussion'] = 'Komentar Diskusi';
$lang['project_activity_deleted_discussion_comment'] = 'Dihapus komentar diskusi';
$lang['project_activity_deleted_milestone'] = 'Deleted milestone';
$lang['project_activity_updated_milestone'] = 'Updated milestone';
$lang['project_activity_created_milestone'] = 'Dibuat new milestone';
$lang['project_activity_invoiced_project'] = 'Invoiced project';
$lang['project_activity_task_marked_complete'] = 'Tugas marked as complete';
$lang['project_activity_task_unmarked_complete'] = 'Tugas unmarked as complete';
$lang['project_activity_task_deleted'] = 'Tugas deleted';
$lang['project_activity_new_task_comment'] = 'Commented di task';
$lang['project_activity_new_task_attachment'] = 'Uploaded attachment di task';
$lang['project_activity_new_task_assignee'] = 'Ditambah new task assignee';
$lang['project_activity_task_assignee_removed'] = 'Removed task assignee';
$lang['project_activity_task_timesheet_deleted'] = 'Removed timesheet';
$lang['project_activity_uploaded_file'] = 'Uploaded project file';
$lang['project_activity_status_updated'] = 'Updated project status';
$lang['project_activity_visible_to_customer'] = 'Terlihat untuk customer';
$lang['project_activity_project_file_removed'] = 'Removed project file';

# Notifications
$lang['not_customer_uploaded_project_file'] = 'Baru file uploaded';
$lang['not_customer_created_new_project_discussion'] = 'Baru project discussion created';
$lang['not_customer_commented_on_project_discussion'] = 'Baru komentar di project discussion';

# Customers area
$lang['clients_my_estimates'] = 'Estimasi Saya';
$lang['client_no_reply'] = 'Tidak Balasan';
$lang['clients_nav_projects'] = 'Proyek';
$lang['clients_my_projects'] = 'Proyek Saya';
$lang['client_profile_image'] = 'Gambar Profil';

/////
$lang['sales_report_cancelled_invoices_not_included'] = 'Tagihan Dibatalkan dikecualikan dari laporan';
$lang['invoices_merge_cancel_merged_invoices'] = 'Tandai tagihan gabungan sbg dibatalkan bukan menghapusnya';
$lang['invoice_marked_as_cancelled_successfuly'] = 'Tagihan ditandai sbg dibatalkan berhasil';
$lang['invoice_unmarked_as_cancelled'] = 'Tagihan tidak ditandai sbg dibatalkan berhasil';

$lang['tasks_reminder_notification_before'] = 'Tugas deadline pengingat before (Days)';
$lang['not_task_deadline_reminder'] = 'Tugas deadline pengingat';
$lang['dt_length_menu_all'] = 'Semua';
$lang['task_not_finished'] = 'Not Completed';
$lang['task_billed_cant_start_timer'] = 'Tugas billed. Timer cant be start';
$lang['invoice_task_billable_timers_found'] = 'Started timers found';
$lang['project_timesheet_not_updated'] = 'Timesheet not affected';
$lang['project_invoice_task_no_timers_found'] = 'Tidak ada timer ditemukan tugas ini';
$lang['invoice_project_tasks_not_started'] = 'Belum dimulai | Mulai Tanggal: %s';
$lang['invoice_project_see_billed_tasks'] = 'Lihat tugas-tugas yang akan ditagihkan ke faktur ini';
$lang['invoice_project_all_billable_tasks_marked_as_finished'] = 'Semua billed tasks will be marked as finished';
$lang['invoice_project_nothing_to_bill'] = 'Tidak tasks untuk bill. Feel free untuk add whatever you want in the invoice items.';
$lang['invoice_project_start_date_tasks_not_passed'] = 'Tugas with future start date cannot be billed';
$lang['invoice_project_stop_all_timers'] = 'Stop all timers';
$lang['invoice_project_stop_billabe_timers_only'] = 'Stop only billable timers';
$lang['project_tasks_total_timers_stopped'] = 'Stopped total %s timers';
$lang['project_invoice_timers_started'] = 'Tugas timers found running di billable tasks, invoice cannot be created. Mohon stop task timers untuk create invoice.';
$lang['task_start_timer_only_assignee'] = 'You need untuk be asigned di this task untuk start the timer!';
$lang['task_comments'] = 'Komentar';
$lang['invoice_total_tax'] = 'Jumlah Pajak';
$lang['estimates_total_tax'] = 'Jumlah Pajak';
$lang['report_invoice_total_tax'] = 'Jumlah Pajak';
$lang['home_tickets'] = 'Tiket';
$lang['home_project_activity'] = 'Aktivitas Proyek Terkini';
$lang['home_project_activity_not_found'] = 'Tidak ada aktivitas proyek';
$lang['view_tracking'] = 'Lihat Tracking';
$lang['view_date'] = 'Tanggal';
$lang['view_ip'] = 'IP Address';
$lang['article_total_views'] = 'Total Views';
$lang['leads_source'] = 'Sumber';
$lang['invoices_available_for_merging'] = 'Tagihan tersedia digabung';
$lang['invoices_merge_discount'] = 'Anda akan harus menerapkan diskon dari jumlah %s manual ke faktur ini';
$lang['invoice_merge_number_warning'] = 'Penggabungan faktur akan menciptakan kesenjangan dalam nomor faktur. Jangan menggabungkan faktur jika Anda ingin ada kesenjangan dalam sejarah faktur. Anda juga memiliki pilihan untuk secara manual menyesuaikan nomor faktur jika Anda ingin mengisi kesenjangan.';
$lang['invoice_mark_as'] = 'Tandai sbg %s';
$lang['invoice_unmark_as'] = 'Hapus tanda sbg %s';
$lang['invoice_status_cancelled'] = 'Dibatalkan';
$lang['tasks_reminder_notification_before_help'] = 'Beritahu pemberi tugas tentang batas waktu sebelum hari X. Pemberitahuan/email dikirim hanya untuk pihak yang ditunjuk.';

# Version 1.1.0
$lang['project_invoice_select_all_tasks'] = 'Pilih Semua tugas';
$lang['lead_company'] = 'Perusahaan';

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
$lang['event_updated'] = 'Event updated successfuly';
$lang['customer_contacts'] = 'Contacts';
$lang['new_contact'] = 'New Contact';
$lang['contact'] = 'Contact';
$lang['contact_lowercase'] = 'contact';
$lang['contact_primary'] = 'Primary contact';
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
$lang['company_primary_email'] = 'Primary email';
$lang['client_register_contact_info'] = 'Primary Contact Information';
$lang['client_register_company_info'] = 'Company Informations';
$lang['contact_permissions_info'] = 'Make sure to set appropriate permissions for this contact';
$lang['defaut_leads_kanban_sort'] = 'Default leads Kan Ban Sort';
$lang['defaut_leads_kanban_sort_type'] = 'Sort';
$lang['order_ascending'] = 'Ascending';
$lang['order_descending'] = 'Descending';
$lang['calendar_expand'] = 'expand';
$lang['proposal_reminders'] = 'Reminders';
$lang['proposal_set_reminder_title'] = 'Set proposal reminder';
$lang['settings_allowed_upload_file_types'] = 'Allowed file types';
$lang['no_primary_contact'] = 'This customer dont have primary contact. You need to setup primary contact login as customer. Its recomended all customers to have primary contacts.';
$lang['leads_merge_customer'] = 'Customer fields merging';
$lang['leads_merge_contact'] = 'Contact fields merging';
$lang['leads_merge_as_contact_field'] = 'Merge as contact field';
$lang['lead_convert_to_client_phone'] = 'Phone';
$lang['invoice_status_report_all'] = 'All';
$lang['import_contact_field'] = 'Contact field';
$lang['proposal_mark_as_draft'] = 'Mark as Draft';

$lang['file_uploaded_success'] = 'There is no error, the file uploaded with success';
$lang['file_exceds_max_filesize'] = 'The uploaded file exceeds the upload_max_filesize directive in php.ini';
$lang['file_exceds_maxfile_size_in_form'] = 'The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form';
$lang['file_uploaded_partially'] = 'The uploaded file was only partially uploaded';
$lang['file_not_uploaded'] = 'No file was uploaded';
$lang['file_missing_temporary_folder'] = 'Missing a temporary folder';
$lang['file_failed_to_write_to_disk'] = 'Failed to write file to disk.';
$lang['file_php_extension_blocked'] = 'A PHP extension stopped the file upload.';
$lang['calendar_expand'] = 'Expand';
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
$lang['client_old_password_incorect']     = 'Your old password is incorrect';
$lang['client_password_changed']          = 'Your password has been changed';
$lang['check_for_new_version']          = 'Check for new version';

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
$lang['dt_mass_delete_help'] = 'Use the checkboxes on the right side for mass delete.';
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
$lang['is_not_staff_member'] = 'Not staff member';
$lang['lead_created'] = 'Created';
$lang['access_tickets_to_none_staff_members'] = 'Allow access to tickets for none staff members';
$lang['project_expenses'] = 'Expenses';
$lang['expense_currency'] = 'Currency';
$lang['currency_valid_code_help'] = 'Make sure to enter valid currency code.';
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
$lang['invoice_project_see_billed_expenses']= 'See expenses who wil be billed on this invoice';
$lang['recaptcha_help_settings']= 'If fields are not filled or there is no internet connection, reCAPTCHA will not be used.';
$lang['project_overview_expenses'] = 'Total Expenses';
$lang['project_overview_expenses_billable'] = 'Billable Expenses';
$lang['project_overview_expenses_billed'] = 'Billed Expenses';
$lang['project_overview_expenses_unbilled'] = 'Unbilled Expenses';
$lang['announcement_date_list'] = 'Date';
$lang['project_setting_view_finance_overview'] = 'view finance overview';
$lang['show_all_tasks_for_project_member'] = 'Allow all staff to see all tasks related to projects (includes non-staff)';
$lang['user_note'] = 'User note';
$lang['not_staff_added_as_project_member'] = 'Added you as project member';
$lang['report_expenses_base_currency_select_explanation'] = 'You need to select currency becuase the system found different currencies used for expenses.';

/* STOP TRANSLATING */
?>
