<?php

# Version 1.0.0
# General

$lang['id']                   = 'ID';
$lang['name']                 = 'Nom';
$lang['options']              = 'Options';
$lang['submit']               = 'Enregistrer';
$lang['added_successfully']   = '%s ajouté avec succès';
$lang['updated_successfully'] = '%s mis à jour avec succès';
$lang['edit']                 = 'Editer %s';
$lang['add_new']              = 'Ajout %s';
$lang['deleted']              = '%s supprimé';
$lang['problem_deleting']     = 'Erreur de suppression %s';
$lang['is_referenced']        = 'L\'identifiant %s est déjà utilisé';
$lang['close']                = 'Fermer';
$lang['send']                 = 'Envoyer';
$lang['cancel']               = 'Annuler';
$lang['go_back']              = 'Retour';
$lang['error_uploading_file'] = 'Erreur de chargement du fichier';
$lang['load_more']            = 'Charger plus';
$lang['cant_delete_default']  = 'Impossible de supprimer par défaut %s';

# Invoice General
$lang['invoice_status_paid']                   = 'Payée';
$lang['invoice_status_unpaid']                 = 'Impayée';
$lang['invoice_status_overdue']                = 'Echue';
$lang['invoice_status_not_paid_completely']    = 'Partiellement payée';
$lang['invoice_pdf_heading']                   = 'FACTURE';
$lang['invoice_table_item_heading']            = 'Désignation';
$lang['invoice_table_quantity_heading']        = 'Qté.';
$lang['invoice_table_rate_heading']            = 'Prix unitaire';
$lang['invoice_table_tax_heading']             = 'Taxe';
$lang['invoice_table_amount_heading']          = 'Montant HT';
$lang['invoice_subtotal']                      = 'Total HT';
$lang['invoice_adjustment']                    = 'Ajustement';
$lang['invoice_total']                         = 'Total TTC';
$lang['invoice_bill_to']                       = 'Destinataire';
$lang['invoice_data_date']                     = 'Date de facture :';
$lang['invoice_data_duedate']                  = 'Date d\'échéance :';
$lang['invoice_received_payments']             = 'Transactions';
$lang['invoice_no_payments_found']             = 'Aucun règlement trouvé pour cette facture';
$lang['invoice_note']                          = 'Note:';
$lang['invoice_payments_table_number_heading'] = 'Règlement #';
$lang['invoice_payments_table_mode_heading']   = 'Mode de règlement';
$lang['invoice_payments_table_date_heading']   = 'Date de facture';
$lang['invoice_payments_table_amount_heading'] = 'Montant';

# Annonces
$lang['announcement']                 = 'Annonce';
$lang['announcement_lowercase']       = 'annonce';
$lang['announcements']                = 'Annonces';
$lang['announcements_lowercase']      = 'annonces';
$lang['new_announcement']             = 'Ajouter une annonce';
$lang['announcement_name']            = 'Titre de l\'annonce';
$lang['announcement_message']         = 'Message';
$lang['announcement_show_to_staff']   = 'Diffuser pour les collaborateurs';
$lang['announcement_show_to_clients'] = 'Diffuser pour les clients';
$lang['announcement_show_my_name']    = 'Afficher mon nom';

# Clients
$lang['clients']                                 = 'Clients';
$lang['client']                                  = 'Client';
$lang['new_client']                              = 'Ajouter un client';
$lang['client_lowercase']                        = 'client';
$lang['client_firstname']                        = 'Prénom';
$lang['client_lastname']                         = 'Nom';
$lang['client_email']                            = 'Email';
$lang['client_company']                          = 'Société';
$lang['client_vat_number']                       = 'TVA';
$lang['client_address']                          = 'Adresse';
$lang['client_city']                             = 'Ville';
$lang['client_postal_code']                      = 'Code Postal';
$lang['client_state']                            = 'Région';
$lang['client_password']                         = 'Mot de passe';
$lang['client_password_change_populate_note']    = 'Remarque : si vous remplissez ce champ, le mot de passe de ce client sera modifié.';
$lang['client_password_last_changed']            = 'Dernière modification du mot de passe :';
$lang['login_as_client']                         = 'Afficher l\'espace client';
$lang['client_invoices_tab']                     = 'Factures';
$lang['contracts_invoices_tab']                  = 'Contrats';
$lang['contracts_tickets_tab']                   = 'Tickets';
$lang['contracts_notes_tab']                     = 'Notes';
$lang['note_description']                        = 'Description Note';
$lang['client_do_not_send_welcome_email']        = 'Ne pas envoyer un email de bienvenue';
$lang['clients_notes_table_description_heading'] = 'Description';
$lang['clients_notes_table_addedfrom_heading']   = 'Ajouté par';
$lang['clients_notes_table_dateadded_heading']   = 'Ajouté le';
$lang['clients_list_full_name']                  = 'Client';
$lang['clients_list_last_login']                 = 'Dernière connexion';

# Contrats
$lang['contracts']                = 'Contrats';
$lang['contract']                 = 'Contrat';
$lang['new_contract']             = 'Nouveau Contrat';
$lang['contract_lowercase']       = 'contrat';
$lang['contract_start_date']      = 'Date de début';
$lang['contract_end_date']        = 'Date de fin';
$lang['contract_subject']         = 'Sujet';
$lang['contract_description']     = 'Description';
$lang['contract_subject_tooltip'] = 'Le sujet est aussi visible au client';
$lang['contract_client_string']   = 'Client';
$lang['contract_attach']          = 'Pièce jointe';
$lang['contract_list_client']     = 'Client';
$lang['contract_list_subject']    = 'Sujet';
$lang['contract_list_start_date'] = 'Date de début';
$lang['contract_list_end_date']   = 'Date de fin';

# Devises
$lang['currencies']                    = 'Devises';
$lang['currency']                      = 'Devise';
$lang['new_currency']                  = 'Ajouter une devise';
$lang['currency_lowercase']            = 'devise';
$lang['base_currency_set']             = 'Ceci est maintenant votre devise de base.';
$lang['make_base_currency']            = 'Etablir comme devise principale';
$lang['base_currency_string']          = 'Devise principale';
$lang['currency_list_name']            = 'Nom';
$lang['currency_list_symbol']          = 'Symbole';
$lang['currency_add_edit_description'] = 'Nom de la devise';
$lang['currency_add_edit_rate']        = 'Symbol';
$lang['currency_edit_heading']         = 'Editer la devise';
$lang['currency_add_heading']          = 'Ajouter une devise';

# Department
$lang['departments']                 = 'Départements';
$lang['department']                  = 'Département';
$lang['new_department']              = 'Nouveau Département';
$lang['department_lowercase']        = 'département';
$lang['department_name']             = 'Nom du département';
$lang['department_email']            = 'Email du département';
$lang['department_hide_from_client'] = 'Ne pas afficher aux clients ?';
$lang['department_list_name']        = 'Nom';

# Email Templates
$lang['email_templates']                        = 'Modèles d\'emails';
$lang['email_template']                         = 'Modèle d\'email';
$lang['email_template_lowercase']               = 'modèle d\'email';
$lang['email_templates_lowercase']              = 'modèles d\'emails';
$lang['email_template_ticket_fields_heading']   = 'Tickets';
$lang['email_template_invoices_fields_heading'] = 'Factures';
$lang['email_template_clients_fields_heading']  = 'Clients';
$lang['template_name']                          = 'Nom du modèle';
$lang['template_subject']                       = 'Objet';
$lang['template_fromname']                      = 'De';
$lang['template_fromemail']                     = 'Depuis l\'email';
$lang['send_as_plain_text']                     = 'Envoyer au format texte brut';
$lang['email_template_disabled']                = 'Désactiver';
$lang['email_template_email_message']           = 'Message Email';
$lang['available_merge_fields']                 = 'Champs de fusion disponibles';

# Home
$lang['dashboard_string']                          = 'Tableau de bord';
$lang['home_latest_todos']                         = 'Derniers todos';
$lang['home_no_latest_todos']                      = 'Aucun todo trouvé';
$lang['home_latest_finished_todos']                = 'Derniers todos accomplis';
$lang['home_no_finished_todos_found']              = 'Aucun todo accompli trouvé';
$lang['home_tickets_awaiting_reply_by_department'] = 'Tickets en attente de réponse (par catégorie)';
$lang['home_tickets_awaiting_reply_by_status']     = 'Tickets en attente de réponse (par statut)';
$lang['home_this_week_events']                     = 'Événements Hebdomadaires';
$lang['home_upcoming_events_next_week']            = 'Événements à venir pour la semaine prochaine';
$lang['home_event_added_by']                       = 'Événement ajouté par';
$lang['home_public_event']                         = 'Événement public';
$lang['home_weekly_payment_records']               = 'Encaissements hebdomadaire';
$lang['home_weekend_ticket_opening_statistics']    = 'Statistiques hebdomadaires des ouvertures de tickets';

# Newsfeed
$lang['whats_on_your_mind']                                 = 'Exprimez vous ?';
$lang['new_post']                                           = 'Publier';
$lang['newsfeed_upload_tooltip']                            = 'Astuce: glissez et déposez les fichiers à télécharger';
$lang['newsfeed_all_departments']                           = 'Tous les départements';
$lang['newsfeed_pin_post']                                  = 'Epingler';
$lang['newsfeed_unpin_post']                                = 'Détacher';
$lang['newsfeed_delete_post']                               = 'Supprimer';
$lang['newsfeed_published_post']                            = 'Publié le';
$lang['newsfeed_you_like_this']                             = 'Vous aimez ce post';
$lang['newsfeed_like_this']                                 = 'J\'aime';
$lang['newsfeed_one_other']                                 = 'autre';
$lang['newsfeed_you']                                       = 'Vous';
$lang['newsfeed_and']                                       = 'et';
$lang['newsfeed_you_and']                                   = 'Vous et';
$lang['newsfeed_like_this_saying']                          = 'J\'aime';
$lang['newsfeed_unlike_this_saying']                        = 'Je n\'aime plus';
$lang['newsfeed_show_more_comments']                        = 'Afficher plus de commentaires';
$lang['comment_this_post_placeholder']                      = 'Ajouter un commentaire..';
$lang['newsfeed_post_likes_modal_heading']                  = 'Collègues qui aiment ce post';
$lang['newsfeed_comment_likes_modal_heading']               = 'collègues qui aiment ce commentaire';
$lang['newsfeed_newsfeed_post_only_visible_to_departments'] = 'Ce poste est visible seulement pour les départements suivants: %s';

# Invoice Items
$lang['invoice_items']                     = 'Articles facture';
$lang['invoice_item']                      = 'Article facture';
$lang['new_invoice_item']                  = 'Ajouter un article';
$lang['invoice_item_lowercase']            = 'article facture';
$lang['invoice_items_list_description']    = 'Désignation';
$lang['invoice_items_list_rate']           = 'Prix unitaire';
$lang['invoice_item_add_edit_description'] = 'Désignation';
$lang['invoice_item_add_edit_rate']        = 'Prix unitaire';
$lang['invoice_item_edit_heading']         = 'Edition de l\'article';
$lang['invoice_item_add_heading']          = 'Ajouter un article';

# Factures
$lang['invoices']                                = 'Factures';
$lang['invoice']                                 = 'Facture';
$lang['invoice_lowercase']                       = 'facture';
$lang['create_new_invoice']                      = 'Créer une facture';
$lang['view_invoice']                            = 'Voir la facture';
$lang['invoice_payment_recorded']                = 'Règlement de facture enregistré';
$lang['invoice_payment_record_failed']           = 'Échec de l\'enregistrement du règlement de la facture';
$lang['invoice_sent_to_client_success']          = 'La facture a été envoyée avec succès au client';
$lang['invoice_sent_to_client_fail']             = 'Problème lors de l\'envoi de la facture';
$lang['invoice_reminder_send_problem']           = 'Problème lors de l\'envoi de la facture de rappel';
$lang['invoice_overdue_reminder_sent']           = 'Facture de rappel envoyée avec succès';
$lang['invoice_details']                         = 'Détails de la facture';
$lang['invoice_view']                            = 'Voir la facture';
$lang['invoice_select_customer']                 = 'Client';
$lang['invoice_add_edit_number']                 = 'Numéro de facture';
$lang['invoice_add_edit_date']                   = 'Date de facture';
$lang['invoice_add_edit_duedate']                = 'Date d\'échéance';
$lang['invoice_add_edit_currency']               = 'Devise';
$lang['invoice_add_edit_client_note']            = 'Note Client';
$lang['invoice_add_edit_admin_note']             = 'Note Admin';
$lang['invoices_toggle_table_tooltip']           = 'Afficher le tableau complet';
$lang['edit_invoice_tooltip']                    = 'Editer la facture';
$lang['delete_invoice_tooltip']                  = 'Facture supprimée. Remarque: Tous les règlements concernant cette facture seront supprimés (le cas échéant).';
$lang['invoice_sent_to_email_tooltip']           = 'Envoyer par email';
$lang['invoice_already_send_to_client_tooltip']  = 'Cette facture a déjà été envoyée au client %s';
$lang['send_overdue_notice_tooltip']             = 'Envoyer un avis de retard';
$lang['invoice_view_activity_tooltip']           = 'Historique de la facture';
$lang['invoice_record_payment']                  = 'Enregistrer un règlement';
$lang['invoice_send_to_client_modal_heading']    = 'Envoyer la facture au client';
$lang['invoice_send_to_client_attach_pdf']       = 'Joindre la version PDF';
$lang['invoice_send_to_client_preview_template'] = 'Aperçu du modèle d\'email';
$lang['invoice_dt_table_heading_number']         = 'Numéro';
$lang['invoice_dt_table_heading_date']           = 'Date de facture';
$lang['invoice_dt_table_heading_client']         = 'Client';
$lang['invoice_dt_table_heading_duedate']        = 'Date d\'échéance';
$lang['invoice_dt_table_heading_amount']         = 'Montant';
$lang['invoice_dt_table_heading_status']         = 'Statut';
$lang['record_payment_for_invoice']              = 'Enregistrer un règlement pour';
$lang['record_payment_amount_received']          = 'Montant reçu';
$lang['record_payment_date']                     = 'Date de règlement';
$lang['record_payment_leave_note']               = 'Ajouter une note';
$lang['invoice_payments_received']               = 'Règlements reçus';
$lang['invoice_record_payment_note_placeholder'] = 'Note Admin';
$lang['no_payments_found']                       = 'Aucun règlement trouvé pour cette facture';

# Payments
$lang['payments']                             = 'Règlements';
$lang['payment']                              = 'Règlement';
$lang['payment_lowercase']                    = 'règlement';
$lang['payments_table_number_heading']        = 'Règlement N°';
$lang['payments_table_invoicenumber_heading'] = 'Facture';
$lang['payments_table_mode_heading']          = 'Mode de règlement';
$lang['payments_table_date_heading']          = 'Date';
$lang['payments_table_amount_heading']        = 'Montant';
$lang['payments_table_client_heading']        = 'Client';
$lang['payment_not_exists']                   = 'Le règlement n\'existe pas';
$lang['payment_edit_for_invoice']             = 'Règlement pour la facture N°';
$lang['payment_edit_amount_received']         = 'Montant reçu';
$lang['payment_edit_date']                    = 'Date du règlement';

# FAQ
$lang['kb_article_add_edit_subject']   = 'Sujet';
$lang['kb_article_add_edit_group']     = 'Rubrique';
$lang['kb_string']                     = 'FAQ';
$lang['kb_article']                    = 'Article';
$lang['kb_article_lowercase']          = 'article';
$lang['kb_article_new_article']        = 'Ajouter un article';
$lang['kb_article_disabled']           = 'Désactiver';
$lang['kb_article_description']        = 'Article description';
$lang['kb_no_articles_found']          = 'Aucun article trouvé';
$lang['kb_dt_article_name']            = 'Article';
$lang['kb_dt_group_name']              = 'Rubrique';
$lang['new_group']                     = 'Créer une rubrique';
$lang['kb_group_add_edit_name']        = 'Nom de la rubrique';
$lang['kb_group_add_edit_description'] = 'Description courte';
$lang['kb_group_add_edit_disabled']    = 'Désactiver';
$lang['kb_group_add_edit_note']        = 'Remarque : Tous les articles de cette rubrique ne seront pas affichés si la fonction "désactiver" est sélectionnée';
$lang['group_table_name_heading']      = 'Nom';
$lang['group_table_isactive_heading']  = 'Active';
$lang['kb_no_groups_found']            = 'Aucune rubrique trouvée';

# Media
$lang['media_files'] = 'Pièces jointes';

# Payment modes
$lang['new_payment_mode']           = 'Ajouter un mode de règlement';
$lang['payment_modes']              = 'Modes de règlement';
$lang['payment_mode']               = 'Mode de règlement';
$lang['payment_mode_lowercase']     = 'mode de règlement';
$lang['payment_modes_dt_name']      = 'Nom du mode de règlement';
$lang['payment_mode_add_edit_name'] = 'Nom du mode de règlement';
$lang['payment_mode_edit_heading']  = 'Editer le mode de règlement';
$lang['payment_mode_add_heading']   = 'Ajouter un nouveau mode de règlement';

# Predefined Ticket Replies
$lang['new_predefined_reply']              = 'Nouvelle réponse prédéfinie';
$lang['predefined_replies']                = 'Réponses prédéfinies';
$lang['predefined_reply']                  = 'Réponse prédéfinie';
$lang['predefined_reply_lowercase']        = 'réponse prédéfinie';
$lang['predefined_replies_dt_name']        = 'Nom de la réponse prédéfinie';
$lang['predefined_reply_add_edit_name']    = 'Nom de la réponse prédéfinie';
$lang['predefined_reply_add_edit_content'] = 'Contenu de la réponse';

# Ticket Priorities
$lang['new_ticket_priority']           = 'Nouvelle priorité';
$lang['ticket_priorities']             = 'Priorités des tickets';
$lang['ticket_priority']               = 'Priorité du ticket';
$lang['ticket_priority_lowercase']     = 'Priorité du ticket';
$lang['no_ticket_priorities_found']    = 'Aucune priorité de ticket trouvée';
$lang['ticket_priority_dt_name']       = 'Nom de la priorité du ticket';
$lang['ticket_priority_add_edit_name'] = 'Nom de la priorité';

# Reports
$lang['kb_reports']                                       = 'Rapports des articles du FAQ';
$lang['sales_reports']                                    = 'Rapports de ventes';
$lang['reports_choose_kb_group']                          = 'Choisir une rubrique';
$lang['report_kb_yes']                                    = 'Oui';
$lang['report_kb_no']                                     = 'Non';
$lang['report_kb_no_votes']                               = 'Aucun vote pour l\'instant';
$lang['report_this_week_leads_conversions']               = 'Prospects convertis de la semaine';
$lang['report_leads_sources_conversions']                 = 'Sources';
$lang['report_leads_monthly_conversions']                 = 'Mensuel';
$lang['sales_report_heading']                             = 'Rapport de Ventes';
$lang['report_sales_type_income']                         = 'Revenu total';
$lang['report_sales_type_customer']                       = 'Rapport Client';
$lang['report_sales_base_currency_select_explanation']    = 'Vous devez sélectionner une devise car vous avez des factures avec des devises différentes.';
$lang['report_sales_from_date']                           = 'Depuis';
$lang['report_sales_to_date']                             = 'Jusqu\'à';
$lang['report_sales_months_all_time']                     = 'Depuis le début';
$lang['report_sales_months_six_months']                   = '6 derniers mois';
$lang['report_sales_months_twelve_months']                = '12 derniers mois';
$lang['reports_sales_generated_report']                   = 'Rapport généré';
$lang['reports_sales_dt_customers_client']                = 'Client';
$lang['reports_sales_dt_customers_total_invoices']        = 'Total Factures';
$lang['reports_sales_dt_items_customers_amount']          = 'Montant HT';
$lang['reports_sales_dt_items_customers_amount_with_tax'] = 'Montant TTC';

# Roles
$lang['new_role']           = 'Ajouter un rôle';
$lang['all_roles']          = 'Tous les rôles';
$lang['roles']              = 'Rôles collaborateurs';
$lang['role']               = 'Rôle';
$lang['role_lowercase']     = 'rôle';
$lang['roles_total_users']  = 'Total utilisateurs : ';
$lang['roles_dt_name']      = 'Rôle';
$lang['role_add_edit_name'] = 'Rôle';

# Service
$lang['new_service']           = 'Nouveau service';
$lang['services']              = 'Services';
$lang['service']               = 'Service';
$lang['service_lowercase']     = 'service';
$lang['services_dt_name']      = 'Nom du service';
$lang['service_add_edit_name'] = 'Nom du service';

# Settings
$lang['settings']                                                  = 'Paramètres';
$lang['settings_updated']                                          = 'Paramètres mis à jour';
$lang['settings_save']                                             = 'Enregistrer les réglages';
$lang['settings_group_general']                                    = 'Général';
$lang['settings_group_localization']                               = 'Localisation';
$lang['settings_group_tickets']                                    = 'Tickets';
$lang['settings_group_sales']                                      = 'Facturation';
$lang['settings_group_email']                                      = 'Email';
$lang['settings_group_clients']                                    = 'Clients';
$lang['settings_group_newsfeed']                                   = 'Fil d\'actualité';
$lang['settings_group_cronjob']                                    = 'Cron Job';
$lang['settings_yes']                                              = 'Oui';
$lang['settings_no']                                               = 'Non';
$lang['settings_clients_default_theme']                            = 'Thème client par défaut';
$lang['settings_clients_allow_registration']                       = 'Autoriser les clients à s\'enregistrer';
$lang['settings_clients_allow_kb_view_without_registration']       = 'Autoriser l\'affichage du FAQ hors inscription au CRM.';
$lang['settings_cron_send_overdue_reminder']                       = 'Envoyer un rappel pour les factures échues';
$lang['settings_cron_send_overdue_reminder_tooltip']               = 'Envoyer un email de relance automatique au client lorsque que le délai de règlement de la facture est échu.';
$lang['automatically_send_invoice_overdue_reminder_after']         = 'Envoyer automatiquement une relance après (jours)';
$lang['automatically_resend_invoice_overdue_reminder_after']       = 'Réenvoyer automatiquement une relance après (jours)';
$lang['settings_email_host']                                       = 'Serveur SMTP';
$lang['settings_email_port']                                       = 'Port SMTP';
$lang['settings_email']                                            = 'Email';
$lang['settings_email_password']                                   = 'Mot de passe SMTP';
$lang['settings_email_charset']                                    = 'Type d\'encodage';
$lang['settings_email_signature']                                  = 'Signature Email';
$lang['settings_general_company_logo']                             = 'Logo de la société';
$lang['settings_general_company_logo_tooltip']                     = 'Dimensions recommandées : 150 x 34px';
$lang['settings_general_company_remove_logo_tooltip']              = 'Retirer le logo';
$lang['settings_general_company_name']                             = 'Nom de la société';
$lang['settings_general_company_main_domain']                      = 'Site internet';
$lang['settings_general_use_knowledgebase']                        = 'Afficher la rubrique FAQ';
$lang['settings_general_use_knowledgebase_tooltip']                = 'En sélectionnant OUI, la rubrique FAQ sera également visible sur l\'espace client.';
$lang['settings_general_tables_limit']                             = 'Nombre de lignes affichées par défaut dans vos tableaux';
$lang['settings_general_default_staff_role']                       = 'Rôle collaborateur par défaut';
$lang['settings_general_default_staff_role_tooltip']               = 'Lorsque vous ajoutez un nouveau collaborateur cette fonction sera sélectionnée par défaut';
$lang['settings_localization_date_format']                         = 'Format de date';
$lang['settings_localization_default_timezone']                    = 'Fuseau horaire';
$lang['settings_localization_default_language']                    = 'Langue par défaut';
$lang['settings_newsfeed_max_file_upload_post']                    = 'Nombre maximum de fichiers à télécharger par article';
$lang['settings_reminders_contracts']                              = 'Rappel d\'expiration de contrat';
$lang['settings_reminders_contracts_tooltip']                      = 'Notification de rappel d\'expiration en jours';
$lang['settings_tickets_use_services']                             = 'Utiliser ce service';
$lang['settings_tickets_max_attachments']                          = 'Nombre maximum de pièces jointes par ticket';
$lang['settings_tickets_allow_departments_access']                 = 'Autoriser au collaborateur uniquement l\'accès aux tickets correspondants à son département';
$lang['settings_tickets_allowed_file_extensions']                  = 'Types de fichiers autorisés pour les pièces jointes';
$lang['settings_sales_general']                                    = 'Général';
$lang['settings_sales_general_note']                               = 'Préférences générales';
$lang['settings_sales_invoice_prefix']                             = 'Préfixe numéro de facture';
$lang['settings_sales_decimal_separator']                          = 'Séparateur décimal';
$lang['settings_sales_thousand_separator']                         = 'Séparateur des milliers';
$lang['settings_sales_currency_placement']                         = 'Position de la devise';
$lang['settings_sales_currency_placement_before']                  = 'Avant le montant';
$lang['settings_sales_currency_placement_after']                   = 'Après le montant';
$lang['settings_sales_require_client_logged_in_to_view_invoice']   = 'Exiger que le client soit connecté pour voir la facture';
$lang['settings_sales_next_invoice_number']                        = 'Prochain numéro de facture';
$lang['settings_sales_next_invoice_number_tooltip']                = 'Réglez ce champ sur 1 si vous voulez commencer à partir du début';
$lang['settings_sales_decrement_invoice_number_on_delete']         = 'Incrémenter le numéro de facture lors de la suppression';
$lang['settings_sales_decrement_invoice_number_on_delete_tooltip'] = 'Voulez-vous décrémenter le numéro de facture lorsque la dernière facture est supprimée ?  Ex. Si vous sélectionnez cette option sur OUI, la facture numéro 15 supprimée, le prochain numéro de facture sera le 14. Si vous sélectionnez  cette option sur NON la prochaine facture gardera le numéro 15.';
$lang['settings_sales_invoice_number_format']                      = 'Format de numérotation de facture';
$lang['settings_sales_invoice_number_format_year_based']           = 'Année et base de numéro';
$lang['settings_sales_invoice_number_format_number_based']         = 'Base de numéro (000001)';
$lang['settings_sales_company_info_note']                          = 'Ces informations seront affichées sur les factures/devis/règlements et autres documents PDF où les infos de l\'entreprise sont nécessaires.';
$lang['settings_sales_company_name']                               = 'Nom de la société';
$lang['settings_sales_address']                                    = 'Adresse';
$lang['settings_sales_city']                                       = 'Ville';
$lang['settings_sales_country_code']                               = 'Code Pays';
$lang['settings_sales_postal_code']                                = 'Code Postal';
$lang['settings_sales_phonenumber']                                = 'Téléphone';

# Prospects
$lang['new_lead']                          = 'Ajouter un prospect';
$lang['leads']                             = 'Prospects';
$lang['lead']                              = 'Prospect';
$lang['lead_lowercase']                    = 'prospect';
$lang['leads_all']                         = 'Tous';
$lang['leads_canban_notes']                = 'Notes: %s';
$lang['leads_canban_source']               = 'Source: %s';
$lang['lead_new_source']                   = 'Ajouter une source';
$lang['lead_sources']                      = 'Sources des prospects';
$lang['lead_source']                       = 'Source du prospect';
$lang['lead_source_lowercase']             = 'source du prospect';
$lang['leads_sources_not_found']           = 'Aucune source de prospects trouvée';
$lang['leads_sources_table_name']          = 'Nom de la source';
$lang['leads_source_add_edit_name']        = 'Nom de la source';
$lang['lead_new_status']                   = 'Ajouter un statut de prospect';
$lang['lead_status']                       = 'Statut du prospect';
$lang['lead_status_lowercase']             = 'statut du prospect';
$lang['leads_status_table_name']           = 'Nom du statut';
$lang['leads_status_add_edit_name']        = 'Nom du statut';
$lang['leads_status_add_edit_order']       = 'Ordre';
$lang['lead_statuses_not_found']           = 'Aucun statut de prospect trouvé';
$lang['leads_search']                      = 'Rechercher un prospect';
$lang['leads_table_total']                 = 'Total Prospects : %s';
$lang['leads_dt_name']                     = 'Nom';
$lang['leads_dt_email']                    = 'Email';
$lang['leads_dt_phonenumber']              = 'Téléphone';
$lang['leads_dt_assigned']                 = 'Attribuer à';
$lang['leads_dt_status']                   = 'Statut';
$lang['leads_dt_last_contact']             = 'Dernier contact';
$lang['lead_add_edit_name']                = 'Nom';
$lang['lead_add_edit_email']               = 'Email';
$lang['lead_add_edit_phonenumber']         = 'Téléphone';
$lang['lead_add_edit_source']              = 'Source';
$lang['lead_add_edit_status']              = 'Statut du prospect';
$lang['lead_add_edit_assigned']            = 'Attribuer à';
$lang['lead_add_edit_datecontacted']       = 'Date de contact';
$lang['lead_add_edit_contacted_today']     = 'Contacté aujourd\'hui';
$lang['lead_add_edit_activity']            = 'Historique';
$lang['lead_add_edit_notes']               = 'Notes';
$lang['lead_add_edit_add_note']            = 'Ajouter une note';
$lang['lead_not_contacted']                = 'Je n\'ai pas contacté ce prospect';
$lang['lead_add_edit_contacted_this_lead'] = 'Je suis entré en contact avec ce prospect';

# Misc
$lang['access_denied'] = 'Accès refusé';
$lang['prev']          = 'Précédent';
$lang['next']          = 'Suivant';

# Datatables
$lang['dt_paginate_first']    = 'Première';
$lang['dt_paginate_last']     = 'Dernière';
$lang['dt_paginate_next']     = 'Suivante';
$lang['dt_paginate_previous'] = 'Précédente';
$lang['dt_empty_table']       = 'Aucun {0} trouvé';
$lang['dt_search']            = 'Rechercher :';
$lang['dt_zero_records']      = 'Aucun enregistrement correspondant trouvé';
$lang['dt_loading_records']   = 'Chargement...';
$lang['dt_length_menu']       = 'Voir _MENU_ ';
$lang['dt_info_filtered']     = '(Filtré à parir de _MAX_ total {0})';
$lang['dt_info_empty']        = 'Affichage de 0 à 0 sur 0 {0}';
$lang['dt_info']              = 'Affichage de _START_ à _END_ sur _TOTAL_ {0}';
$lang['dt_empty_table']       = 'Aucun {0} trouvé';
$lang['dt_sort_ascending']    = 'activer pour trier la colonne ascendante';
$lang['dt_sort_descending']   = 'activer pour trier la colonne descendante';

# Invoice Activity Log
$lang['user_sent_overdue_reminder'] = '%s rappel de la facture échue envoyé';

# Weekdays
$lang['wd_monday']    = 'Lundi';
$lang['wd_tuesday']   = 'Mardi';
$lang['wd_wednesday'] = 'Mercredi';
$lang['wd_thursday']  = 'Jeudi';
$lang['wd_friday']    = 'Vendredi';
$lang['wd_saturday']  = 'Samedi';
$lang['wd_sunday']    = 'Dimanche';

# Admin Left Sidebar
$lang['als_dashboard']             = 'Tableau de bord';
$lang['als_clients']               = 'Clients';
$lang['als_leads']                 = 'Prospects';
$lang['als_contracts']             = 'Contrats';
$lang['als_sales']                 = 'Commercial';
$lang['als_staff']                 = 'Collaborateurs';
$lang['als_tasks']                 = 'Tâches';
$lang['als_kb']                    = 'FAQ';
$lang['als_media']                 = 'Média';
$lang['als_reports']               = 'Rapports';
$lang['als_reports_sales_submenu'] = 'Ventes';
$lang['als_reports_leads_submenu'] = 'Prospects';
$lang['als_kb_articles_submenu']   = 'Articles (FAQ)';
$lang['als_utilities']             = 'Utilitaires';
$lang['als_announcements_submenu'] = 'Annonces';
$lang['als_calendar_submenu']      = 'Calendrier';
$lang['als_activity_log_submenu']  = 'Journal d\'activité';

# Admin Customizer Sidebar
$lang['acs_ticket_priority_submenu']           = 'Priorité ticket ';
$lang['acs_ticket_statuses_submenu']           = 'Statut ticket';
$lang['acs_ticket_predefined_replies_submenu'] = 'Réponses prédéfinies';
$lang['acs_ticket_services_submenu']           = 'Services';
$lang['acs_departments']                       = 'Départements';
$lang['acs_leads']                             = 'Prospects';
$lang['acs_leads_sources_submenu']             = 'Sources';
$lang['acs_leads_statuses_submenu']            = 'Statuts';
$lang['acs_sales_taxes_submenu']               = 'Taxes';
$lang['acs_sales_currencies_submenu']          = 'Devises';
$lang['acs_sales_payment_modes_submenu']       = 'Modes de règlement';
$lang['acs_email_templates']                   = 'Modèles d\'emails';
$lang['acs_roles']                             = 'Rôles';
$lang['acs_settings']                          = 'Configuration';

# Tickets
$lang['new_ticket']                                          = 'Ouvrir un nouveau ticket';
$lang['tickets']                                             = 'Tickets';
$lang['ticket']                                              = 'Ticket';
$lang['ticket_lowercase']                                    = 'ticket';
$lang['support_tickets']                                     = 'Support Tickets';
$lang['support_ticket']                                      = 'Support Ticket';
$lang['ticket_settings_to']                                  = 'Pour';
$lang['ticket_settings_email']                               = 'Email';
$lang['ticket_settings_departments']                         = 'Département';
$lang['ticket_settings_service']                             = 'Service';
$lang['ticket_settings_priority']                            = 'Priorité';
$lang['ticket_settings_subject']                             = 'Sujet';
$lang['ticket_settings_assign_to']                           = 'Attribuer un ticket (utilisateur en cours par défaut)';
$lang['ticket_add_body']                                     = 'Contenu du ticket';
$lang['ticket_add_attachments']                              = 'Pièces jointes';
$lang['ticket_no_reply_yet']                                 = 'Pas de réponse pour l\'instant';
$lang['new_ticket_added_successfully']                       = 'Ticket #%s ajouté avec succès';
$lang['replied_to_ticket_successfully']                      = 'ticket #%s répondu avec succès';
$lang['ticket_settings_updated_successfully']                = 'Paramètres du ticket mis à jour avec succès';
$lang['ticket_settings_updated_successfully_and_reassigned'] = 'Paramètres du ticket mis à jour avec succès - attribués au département % s ';
$lang['ticket_dt_subject']                                   = 'Sujet';
$lang['ticket_dt_department']                                = 'Département';
$lang['ticket_dt_service']                                   = 'Service';
$lang['ticket_dt_submitter']                                 = 'Client';
$lang['ticket_dt_status']                                    = 'Statut';
$lang['ticket_dt_priority']                                  = 'Priorité';
$lang['ticket_dt_last_reply']                                = 'Dernière réponse';
$lang['ticket_single_add_reply']                             = 'Ajouter une réponse';
$lang['ticket_single_add_note']                              = 'Ajouter une note';
$lang['ticket_single_other_user_tickets']                    = 'Autres tickets';
$lang['ticket_single_settings']                              = 'Réglages';
$lang['ticket_single_priority']                              = 'Priorité: %s';
$lang['ticket_single_last_reply']                            = 'Dernière réponse : %s';
$lang['ticket_single_ticket_note_by']                        = 'Note du ticket par %s';
$lang['ticket_single_note_added']                            = 'Note ajoutée : %s';
$lang['ticket_single_change_status']                         = 'Changer le statut';
$lang['ticket_single_assign_to_me_on_update']                = 'M\'assigner ce ticket automatiquement';
$lang['ticket_single_insert_predefined_reply']               = 'Insérer une réponse prédéfinie';
$lang['ticket_single_insert_knowledge_base_link']            = 'Insérer le lien du FAQ';
$lang['ticket_single_attachments']                           = 'Pièces jointes';
$lang['ticket_single_add_response']                          = 'Ajouter une réponse';
$lang['ticket_single_note_heading']                          = 'Note';
$lang['ticket_single_add_note']                              = 'Ajouter une note';
$lang['ticket_settings_none_assigned']                       = 'Aucun';
$lang['ticket_status_changed_successfully']                  = 'Le statut du ticket a été changé';
$lang['ticket_status_changed_fail']                          = 'Problème lors du changement de statut du ticket';
$lang['ticket_staff_string']                                 = 'Collaborateur';
$lang['ticket_client_string']                                = 'Client';
$lang['ticket_posted']                                       = 'Publié: %s';
$lang['ticket_access_by_department_denied']                  = 'Vous n\'avez pas accès à ce ticket. Celui-ci appartient au département auquel vous n\'êtes pas affecté.';

# Staff
$lang['new_staff']                                     = 'Ajouter un collaborateur';
$lang['staff_members']                                 = 'Collaborateurs';
$lang['staff_member']                                  = 'Collaborateur';
$lang['staff_member_lowercase']                        = 'collaborateur';
$lang['staff_profile_updated']                         = 'Votre profil a été mis à jour';
$lang['staff_old_password_incorrect']                  = 'Votre ancien mot de passe est incorrect';
$lang['staff_password_changed']                        = 'Votre mot de passe a été changé';
$lang['staff_problem_changing_password']               = 'Problème pour modifier votre mot de passe';
$lang['staff_profile_string']                          = 'Profil';
$lang['staff_cant_remove_main_admin']                  = 'Impossible de supprimer l\'administrateur principal';
$lang['staff_cant_remove_yourself_from_admin']         = 'Vous ne pouvez pas vous retirer du rôle d\'administrateur';
$lang['staff_dt_name']                                 = 'Prénom / Nom';
$lang['staff_dt_email']                                = 'Email';
$lang['staff_dt_last_Login']                           = 'Dernière connexion';
$lang['staff_dt_active']                               = 'Actif';
$lang['staff_add_edit_firstname']                      = 'Prénom';
$lang['staff_add_edit_lastname']                       = 'Nom';
$lang['staff_add_edit_email']                          = 'Email';
$lang['staff_add_edit_phonenumber']                    = 'Téléphone';
$lang['staff_add_edit_facebook']                       = 'Facebook';
$lang['staff_add_edit_linkedin']                       = 'LinkedIn';
$lang['staff_add_edit_skype']                          = 'Skype';
$lang['staff_add_edit_departments']                    = 'Membre du département';
$lang['staff_add_edit_role']                           = 'Rôle';
$lang['staff_add_edit_permissions']                    = 'Permissions des modules :';
$lang['staff_add_edit_administrator']                  = 'Définir comme administrateur';
$lang['staff_add_edit_password']                       = 'Mot de passe';
$lang['staff_add_edit_password_note']                  = 'Remarque: si vous remplissez les champs, le mot de passe de ce collaborateur sera modifié.';
$lang['staff_add_edit_password_last_changed']          = 'Dernière modification du mot de passe';
$lang['staff_add_edit_notes']                          = 'Notes';
$lang['staff_add_edit_note_description']               = 'Note description';
$lang['staff_notes_table_description_heading']         = 'Note';
$lang['staff_notes_table_addedfrom_heading']           = 'Ajouté par';
$lang['staff_notes_table_dateadded_heading']           = 'Ajouté le';
$lang['staff_admin_profile']                           = 'Ceci est le profil administrateur';
$lang['staff_profile_notifications']                   = 'Notifications';
$lang['staff_profile_departments']                     = 'Départements';
$lang['staff_edit_profile_image']                      = 'Image Profil';
$lang['staff_edit_profile_your_departments']           = 'Votre département';
$lang['staff_edit_profile_change_your_password']       = 'Modifier votre mot de passe';
$lang['staff_edit_profile_change_old_password']        = 'Ancien mot de passe';
$lang['staff_edit_profile_change_new_password']        = 'Nouveau mot de passe';
$lang['staff_edit_profile_change_repeat_new_password'] = 'Répeter le mot de passe';

# Staff Tasks
$lang['new_task']                           = 'Ajouter une tâche';
$lang['tasks']                              = 'Tâches';
$lang['task']                               = 'Tâche';
$lang['task_lowercase']                     = 'tâche';
$lang['comment_string']                     = 'Commentaire';
$lang['task_marked_as_complete']            = 'Tâche marquée comme étant accomplie';
$lang['task_follower_removed']              = 'Tâche du gestionnaire supprimée avec succès';
$lang['task_assignee_removed']              = 'Affectation de la tâche supprimée avec succès';
$lang['task_no_assignees']                  = 'Aucun collaborateur assigné pour cette tâche';
$lang['task_no_followers']                  = 'Aucun gestionnaire pour cette tâche';
$lang['task_list_all']                      = 'Toutes';
$lang['task_list_not_assigned']             = 'Non affectées';
$lang['task_list_duedate_passed']           = 'Dates d\'échéance dépassées';
$lang['tasks_dt_name']                      = 'Nom';
$lang['task_single_priority']               = 'Priorité';
$lang['task_single_start_date']             = 'Date de début';
$lang['task_single_due_date']               = 'Date de fin';
$lang['task_single_finished']               = 'Accomplie le';
$lang['task_single_mark_as_complete']       = 'Marquer comme accomplie';
$lang['task_single_edit']                   = 'Editer la tâche';
$lang['task_single_delete']                 = 'Supprimer la tâche';
$lang['task_single_assignees']              = 'Collaborateurs assignés';
$lang['task_single_assignees_select_title'] = 'Attribuer la tâche à';
$lang['task_single_followers']              = 'Gestionnaire';
$lang['task_single_followers_select_title'] = 'Ajouter un collaborateur';
$lang['task_single_add_new_comment']        = 'Ajouter un commentaire';
$lang['task_add_edit_subject']              = 'Sujet';
$lang['task_add_edit_priority']             = 'Priorité';
$lang['task_priority_low']                  = 'Basse';
$lang['task_priority_medium']               = 'Moyenne';
$lang['task_priority_high']                 = 'Haute';
$lang['task_priority_urgent']               = 'Importante';
$lang['task_add_edit_start_date']           = 'Date de début';
$lang['task_add_edit_due_date']             = 'Date de fin';
$lang['task_add_edit_description']          = 'Description de la tâche';

# Taxes
$lang['new_tax']           = 'Ajouter une taxe';
$lang['taxes']             = 'Taxes';
$lang['tax']               = 'Taxe';
$lang['tax_lowercase']     = 'taxe';
$lang['tax_dt_name']       = 'Nom';
$lang['tax_dt_rate']       = 'Taux (pourcentage)';
$lang['tax_add_edit_name'] = 'Nom';
$lang['tax_add_edit_rate'] = 'Taux (pourcentage)';
$lang['tax_edit_title']    = 'Editer la taxe';
$lang['tax_add_title']     = 'Ajouter une taxe';

# Ticket Statuses
$lang['new_ticket_status']            = 'Nouveau statut ticket';
$lang['ticket_statuses']              = 'Statuts ticket';
$lang['ticket_status']                = 'Statut ticket';
$lang['ticket_status_lowercase']      = 'statut ticket';
$lang['ticket_statuses_dt_name']      = 'Nom du statut ticket';
$lang['no_ticket_statuses_found']     = 'Aucun statut ticket trouvé';
$lang['ticket_statuses_table_total']  = 'Total %s';
$lang['ticket_status_add_edit_name']  = 'Nom du statut ticket';
$lang['ticket_status_add_edit_color'] = 'Choisissez une couleur';
$lang['ticket_status_add_edit_order'] = 'Statut de la commande';

# Todos
$lang['new_todo']                  = 'Nouveau todo';
$lang['my_todos']                  = 'Mes points todos';
$lang['todo']                      = 'Point todo';
$lang['todo_lowercase']            = 'todo';
$lang['todo_status_changed']       = 'Statut todo changé';
$lang['todo_add_title']            = 'Ajouter un nouveau todo';
$lang['add_new_todo_description']  = 'Description';
$lang['no_finished_todos_found']   = 'Aucun todo accompli trouvé';
$lang['no_unfinished_todos_found'] = 'Aucun todo trouvé';
$lang['unfinished_todos_title']    = 'Todos non accomplis';
$lang['finished_todos_title']      = 'Derniers todos accomplis';


# Utilities
$lang['utility_activity_log']                        = 'Journal d\'activités';
$lang['utility_activity_log_filter_by_date']         = 'Filtrer par date';
$lang['utility_activity_log_dt_description']         = 'Description';
$lang['utility_activity_log_dt_date']                = 'Date';
$lang['utility_activity_log_dt_staff']               = 'Collaborateur';
$lang['utility_calendar_new_event_title']            = 'Ajouter un événement';
$lang['utility_calendar_new_event_start_date']       = 'Date de début';
$lang['utility_calendar_new_event_end_date']         = 'Date de fin';
$lang['utility_calendar_new_event_make_public']      = 'Rendre public';
$lang['utility_calendar_event_added_successfully']   = 'Nouvel événement ajouté avec succès';
$lang['utility_calendar_event_deleted_successfully'] = 'événement supprimé';
$lang['utility_calendar_new_event_placeholder']      = 'Titre de l\'événement';

# Navigation
$lang['nav_notifications']          = 'Notifications';
$lang['nav_my_profile']             = 'Mon compte';
$lang['nav_edit_profile']           = 'Editer mon compte';
$lang['nav_logout']                 = 'Déconnexion';
$lang['nav_no_notifications']       = 'Aucune notification trouvée';
$lang['nav_view_all_notifications'] = 'Voir toutes les notifications';
$lang['nav_notifications_tooltip']  = 'Voir les notifications';

# Footer
$lang['clients_copyright'] = 'Copyright %s';

# Contrats
$lang['clients_contracts']               = 'Contrats';
$lang['clients_contracts_dt_subject']    = 'Sujet';
$lang['clients_contracts_dt_start_date'] = 'Date de début';
$lang['clients_contracts_dt_end_date']   = 'Date de fin';

# Home
$lang['clients_quick_invoice_info']           = 'Synthèse de facturation';
$lang['clients_home_currency_select_tooltip'] = 'Vous devez sélectionner une devise car vous avez des factures avec des devises différentes';

# Factures
$lang['clients_invoice_html_btn_download'] = 'Télécharger';
$lang['clients_my_invoices']               = 'Mes Factures';
$lang['clients_invoice_dt_number']         = 'Numéro';
$lang['clients_invoice_dt_date']           = 'Date de facture';
$lang['clients_invoice_dt_duedate']        = 'Date d\'échéance';
$lang['clients_invoice_dt_amount']         = 'Montant';
$lang['clients_invoice_dt_status']         = 'Statut';

# Profile
$lang['clients_profile_heading'] = 'Profil';

# Used for edit profile and register START
$lang['clients_firstname'] = 'Prénom';
$lang['clients_lastname']  = 'Nom';
$lang['clients_email']     = 'Email';
$lang['clients_company']   = 'Société';
$lang['clients_vat']       = 'Numéro de TVA';
$lang['clients_phone']     = 'Téléphone';
$lang['clients_country']   = 'Pays';
$lang['clients_city']      = 'Ville';
$lang['clients_address']   = 'Adresse';
$lang['clients_zip']       = 'Code Postal';
$lang['clients_state']     = 'Région';

# Used for edit profile and register END
$lang['clients_register_password']                    = 'Mot de passe';
$lang['clients_register_password_repeat']             = 'Répéter le mot de passe';
$lang['clients_edit_profile_update_btn']              = 'Mettre à jour';
$lang['clients_edit_profile_change_password_heading'] = 'Changer le mot de passe';
$lang['clients_edit_profile_old_password']            = 'Ancien mot de passe';
$lang['clients_edit_profile_new_password']            = 'Nouveau mot de passe';
$lang['clients_edit_profile_new_password_repeat']     = 'Répéter le mot de passe';
$lang['clients_edit_profile_change_password_btn']     = 'Mettre à jour';
$lang['clients_profile_last_changed_password']        = 'Dernière modification du mot de passe %s';

# Knowledge base
$lang['clients_knowledge_base']                    = 'FAQ';
$lang['clients_knowledge_base_articles_not_found'] = 'Aucun article du FAQ trouvé';
$lang['clients_knowledge_base_find_useful']        = 'Avez-vous trouvé cet article utile ?';
$lang['clients_knowledge_base_find_useful_yes']    = 'Oui';
$lang['clients_knowledge_base_find_useful_no']     = 'Non';
$lang['clients_article_only_1_vote_today']         = 'Vous ne pouvez voter qu\'une seule fois en 24 heures';
$lang['clients_article_voted_thanks_for_feedback'] = 'Merci pour votre retour';

# Tickets
$lang['clients_ticket_open_subject']               = 'Ouvrir un ticket';
$lang['clients_ticket_open_departments']           = 'Département';
$lang['clients_tickets_heading']                   = 'Support Tickets';
$lang['clients_ticket_open_service']               = 'Service';
$lang['clients_ticket_open_priority']              = 'Priorité';
$lang['clients_ticket_open_body']                  = 'Contenu du ticket';
$lang['clients_ticket_attachments']                = 'Pièces jointes';
$lang['clients_single_ticket_string']              = 'Ticket';
$lang['clients_single_ticket_replied']             = 'Répondu le: %s';
$lang['clients_single_ticket_information_heading'] = 'Ticket Informations';
$lang['clients_tickets_dt_number']                 = 'Ticket #';
$lang['clients_tickets_dt_subject']                = 'Sujet';
$lang['clients_tickets_dt_department']             = 'Département';
$lang['clients_tickets_dt_service']                = 'Service';
$lang['clients_tickets_dt_status']                 = 'Statut';
$lang['clients_tickets_dt_last_reply']             = 'Dernière réponse';
$lang['clients_ticket_single_department']          = 'Departement: %s';
$lang['clients_ticket_single_submitted']           = 'Soumis: %s';
$lang['clients_ticket_single_status']              = 'Statut:';
$lang['clients_ticket_single_priority']            = 'Priorité: %s';
$lang['clients_ticket_single_add_reply_btn']       = 'Ajouter une réponse';
$lang['clients_ticket_single_add_reply_heading']   = 'Ajouter une réponse pour ce ticket';

# Login
$lang['clients_login_heading_no_register'] = 'Espace client';
$lang['clients_login_heading_register']    = 'Veuillez vous connecter ou vous inscrire';
$lang['clients_login_email']               = 'Email';
$lang['clients_login_password']            = 'Mot de passe';
$lang['clients_login_remember']            = 'Se souvenir de moi';
$lang['clients_login_login_string']        = 'Connexion';

# Register
$lang['clients_register_string']  = 'S\'enregister';
$lang['clients_register_heading'] = 'S\'enregister';

# Navigation
$lang['clients_nav_login']     = 'Login';
$lang['clients_nav_register']  = 'S\'enregister';
$lang['clients_nav_invoices']  = 'Factures';
$lang['clients_nav_contracts'] = 'Contrats';
$lang['clients_nav_kb']        = 'FAQ';
$lang['clients_nav_profile']   = 'Mon compte';
$lang['clients_nav_logout']    = 'Déconnexion';

# Version 1.0.1
$lang['payment_receipt']                               = 'Reçu de paiement';
$lang['payment_for_string']                            = 'Récapitulatif';
$lang['payment_date']                                  = 'Date du règlement :';
$lang['payment_view_mode']                             = 'Mode de règlement :';
$lang['payment_total_amount']                          = 'Montant du règlement';
$lang['payment_table_invoice_number']                  = 'Numéro';
$lang['payment_table_invoice_date']                    = 'Date de facture';
$lang['payment_table_invoice_amount_total']            = 'Montant de la facture';
$lang['payment_table_payment_amount_total']            = 'Montant du règlement';
$lang['payments_table_transaction_id']                 = 'Transaction ID: %s';
$lang['payment_getaway_token_not_found']               = 'Token introuvable';
$lang['online_payment_recorded_success']               = 'Règlement enregistré avec succès';
$lang['online_payment_recorded_success_fail_database'] = 'Le règlement est validé, mais n\'a pas pu être enregistré dans la base de données, veuillez contacter l\'administrateur.';

# Prospects
$lang['lead_convert_to_client']                = 'Convertir en client';
$lang['lead_convert_to_email']                 = 'Email';
$lang['lead_convert_to_client_firstname']      = 'Prénom';
$lang['lead_convert_to_client_lastname']       = 'Nom';
$lang['lead_email_already_exists']             = 'L\’Email prospect existe déjà dans les données clients';
$lang['lead_to_client_base_converted_success'] = 'Prospect converti en client';
$lang['lead_have_client_profile']              = 'Ce prospect a un profil client.';
$lang['lead_converted_edit_client_profile']    = 'Editer le profil';

# Factures
$lang['view_invoice_as_customer_tooltip']                                     = 'Affichage client';
$lang['invoice_add_edit_recurring']                                           = 'Facture récurrente ?';
$lang['invoice_add_edit_recurring_no']                                        = 'Non';
$lang['invoice_add_edit_recurring_month']                                     = 'Tous les %s mois';
$lang['invoice_add_edit_recurring_months']                                    = 'Tous les %s mois';
$lang['invoices_list_all']                                                    = 'Toutes';
$lang['invoices_list_not_have_payment']                                       = 'Factures sans enregistrement de paiement';
$lang['invoices_list_recurring']                                              = 'Factures récurrentes';
$lang['invoices_list_made_payment_by']                                        = 'Paiement effectué par %s';
$lang['invoices_create_invoice_from_recurring_only_on_paid_invoices']         = 'Créer une nouvelle facture sur la base de la facture récurrente seulement si celle-ci a le statut “payée”';
$lang['invoices_create_invoice_from_recurring_only_on_paid_invoices_tooltip'] = 'Pour créer une nouvelle facture sur la base de la facture récurrente seulement si la facture principale a le statut “payée”? Si vous sélectionnez l\’option NON et que la facture récurrente n\’a pas le statut « payée », la nouvelle facture ne sera pas créée.';
$lang['view_invoice_pdf_link_pay']                                            = 'Régler la facture';

# Payment modes
$lang['payment_mode_add_edit_description']         = 'Coordonnées bancaires / Description';
$lang['payment_mode_add_edit_description_tooltip'] = 'Vous pouvez renseigner ici les coordonnées bancaires. Elles seront affichées sur les factures en ligne';
$lang['payment_modes_dt_description']              = 'Coordonnées bancaires / Description';
$lang['payment_modes_add_edit_announcement']       = 'Remarque : Les modes de règlement indiqués ci-dessous concernent les modes hors ligne. Les modes de règlement en ligne peuvent être configurés dans : Paramètres -> Configuration -> Passerelles de paiement.';
$lang['payment_mode_add_edit_active']              = 'Actif';
$lang['payment_modes_dt_active']                   = 'Actif';

# Contrats
$lang['contract_not_found'] = 'Contract introuvable. Veuillez verifier dans le journal d\'activité si celui-ci n\'a pas été supprimé';

# Settings
$lang['setting_bar_heading']                               = 'Paramètres';
$lang['settings_group_online_payment_modes']               = 'Passerelles de paiements';
$lang['settings_paymentmethod_mode_label']                 = 'Etiquette';
$lang['settings_paymentmethod_active']                     = 'Activer';
$lang['settings_paymentmethod_currencies']                 = 'Devise (séparée par une virgule)';
$lang['settings_paymentmethod_testing_mode']               = 'Activer le mode test';
$lang['settings_paymentmethod_paypal_username']            = 'Identifiant API Paypal';
$lang['settings_paymentmethod_paypal_password']            = 'Mot de passe API Paypal';
$lang['settings_paymentmethod_paypal_signature']           = 'Signature API';
$lang['settings_paymentmethod_stripe_api_secret_key']      = 'Clé secrète API Stripe';
$lang['settings_paymentmethod_stripe_api_publishable_key'] = 'Clé public Stripe';
$lang['settings_limit_top_search_bar_results']             = 'Nombre limite de résultats dans la barre de recherche';

## Clients
$lang['client_phonenumber'] = 'Téléphone';

# Main Clients
$lang['clients_register']                          = 'Inscription';
$lang['clients_profile_updated']                   = 'Votre profil a été mis à jour';
$lang['clients_successfully_registered']           = 'Merci de votre inscription';
$lang['clients_account_created_but_not_logged_in'] = 'Votre compte a été créé, mais vous n\'êtes pas automatiquement connecté dans notre système. Veuillez essayer de vous connecter.';

# Tickets
$lang['clients_tickets_heading'] = 'Support Tickets';

# Payments
$lang['payment_for_invoice'] = 'Règlement de la facture';
$lang['payment_total']       = 'Total: %s';

# Invoice
$lang['invoice_html_online_payment']             = 'Paiement en ligne';
$lang['invoice_html_online_payment_button_text'] = 'Payer maintenant';
$lang['invoice_html_payment_modes_not_selected'] = 'Veuillez sélectionner un mode de règlement';
$lang['invoice_html_amount_blank']               = 'Le montant total ne peut pas être vide ou à zéro';
$lang['invoice_html_offline_payment']            = 'Informations bancaire';
$lang['invoice_html_amount']                     = 'Montant';

# Version 1.0.2
# Admin
# DataTables
$lang['dt_button_column_visibility'] = 'Affichage';
$lang['dt_button_reload']            = 'Actualiser';
$lang['dt_button_excel']             = 'Excel';
$lang['dt_button_csv']               = 'CSV';
$lang['dt_button_pdf']               = 'PDF';
$lang['dt_button_print']             = 'Imprimer';
$lang['is_not_active_export']        = 'Non';
$lang['is_active_export']            = 'Oui';

# Invoice
$lang['invoice_add_edit_advanced_options']                = 'Options avancées';
$lang['invoice_add_edit_allowed_payment_modes']           = 'Autoriser les moyens de règlement pour cette facture';
$lang['invoice_add_edit_recurring_invoices_from_invoice'] = 'Factures récurrentes de cette facture';
$lang['invoice_add_edit_no_payment_modes_found']          = 'Aucun moyens de règlement trouvés.';
$lang['invoice_html_total_pay']                           = 'Total: %s';

# Email templates
$lang['email_templates_table_heading_name'] = 'Liste des modèles';

# General
$lang['discount_type']            = 'Type de remise';
$lang['discount_type_after_tax']  = 'Après la taxe';
$lang['discount_type_before_tax'] = 'Avant la taxe';
$lang['terms_and_conditions']     = 'Conditions générales de vente';
$lang['reference_no']             = 'Référence';
$lang['no_discount']              = 'Aucune remise';
$lang['view_stats_tooltip']       = 'Voir l\'analyse de la facturation';

# Clients
$lang['zip_from_date']            = 'A partir de la date:';
$lang['zip_to_date']              = 'Jusqu\'à la date:';
$lang['client_zip_payments']      = 'Exporter en ZIP';
$lang['client_zip_invoices']      = 'Exporter en  ZIP';
$lang['client_zip_estimates']     = 'Exporter en ZIP';
$lang['client_zip_status']        = 'Statut';
$lang['client_zip_status_all']    = 'Tous';
$lang['client_zip_payment_modes'] = 'Règlement effectué par:';
$lang['client_zip_no_data_found'] = 'Aucun(e) %s trouvé(e)';

# Payments
$lang['payment_mode']         = 'Mode de règlement';
$lang['payment_view_heading'] = 'Règlement';

# Settings
$lang['settings_allow_payment_amount_to_be_modified']               = 'Autoriser les clients à modifier le montant à régler (pour les paiements en ligne)';
$lang['settings_delete_only_on_last_invoice']                       = 'Autoriser la supression d\'une facture uniquement sur la dernière facture';
$lang['settings_sales_estimate_prefix']                             = 'Préfixe numéro de devis';
$lang['settings_sales_next_estimate_number']                        = 'Prochain numéro de devis';
$lang['settings_sales_next_estimate_number_tooltip']                = 'Réglez ce champ sur 1 si vous voulez commencer à partir du début';
$lang['settings_sales_decrement_estimate_number_on_delete']         = 'Décrémenter le numéro de facture lors de la suppression';
$lang['settings_sales_decrement_estimate_number_on_delete_tooltip'] = 'Voulez-vous décrémenter le numéro de facture lorsque la dernière facture est supprimée ?  Ex. Si vous sélectionnez cette option sur OUI, la facture numéro 15 supprimée, le prochain numéro de facture sera le 14. Si vous sélectionnez  cette option sur NON la prochaine facture gardera le numéro 15.';
$lang['settings_sales_estimate_number_format']                      = 'Format de numérotation des devis';
$lang['settings_sales_estimate_number_format_year_based']           = 'Année et base de numéro';
$lang['settings_sales_estimate_number_format_number_based']         = 'Base de numéro (000001)';
$lang['settings_delete_only_on_last_estimate']                      = 'Autoriser la supression d\'un devis uniquement sur le dernier devis';
$lang['settings_send_test_email_heading']                           = 'Envoyer un email test';
$lang['settings_send_test_email_subheading']                        = 'Envoyer un email test afin de vous assurer que vos paramètres SMTP sont correctement définis.';
$lang['settings_send_test_email_string']                            = 'Adresse Email Test';
$lang['settings_smtp_settings_heading']                             = 'Paramètres SMTP';
$lang['settings_smtp_settings_subheading']                          = 'Configuration de l\'email principal';
$lang['settings_sales_heading_general']                             = 'Général';
$lang['settings_sales_heading_invoice']                             = 'Facture';
$lang['settings_sales_heading_estimates']                           = 'Devis';
$lang['settings_sales_cron_invoice_heading']                        = 'Facture';

# Tasks
$lang['tasks_dt_datestart'] = 'Date de début';

# Invoice General
$lang['invoice_discount'] = 'Remise';

# Settings
$lang['settings_rtl_support_admin']                                   = 'RTL Espace Admin (de droite à gauche)';
$lang['settings_rtl_support_client']                                  = 'RTL Espace Client (de droite à gauche)';
$lang['settings_estimate_auto_convert_to_invoice_on_client_accept']   = 'Convertir automatiquement les devis en facture après la validation du client';
$lang['settings_exclude_estimate_from_client_area_with_draft_status'] = 'Exclure les devis avec le statut brouillon de l\'espace client';

# Months
$lang['January']   = 'Janvier';
$lang['February']  = 'Février';
$lang['March']     = 'Mars';
$lang['April']     = 'Avril';
$lang['May']       = 'Mai';
$lang['June']      = 'Juin';
$lang['July']      = 'Juillet';
$lang['August']    = 'Août';
$lang['September'] = 'Septembre';
$lang['October']   = 'Octobre';
$lang['November']  = 'Novembre';
$lang['December']  = 'Décembre';

# Time ago function translate
$lang['time_ago_just_now']  = 'A l\'instant';
$lang['time_ago_minute']    = 'Il y a 1 minute';
$lang['time_ago_minutes']   = 'Il y a %s minutes';
$lang['time_ago_hour']      = 'Il y a 1 heure';
$lang['time_ago_hours']     = 'Il y a %s heures';
$lang['time_ago_yesterday'] = 'hier';
$lang['time_ago_days']      = 'Il y a %s jours';
$lang['time_ago_week']      = 'Il y a 1 semaine';
$lang['time_ago_weeks']     = 'Il y a %s semaines';
$lang['time_ago_month']     = 'Il y a 1 mois';
$lang['time_ago_months']    = 'Il y a %s mois';
$lang['time_ago_year']      = 'Il y a 1 an';
$lang['time_ago_years']     = 'Il y a %s ans';

# Devis
$lang['estimates']                                = 'Devis';
$lang['estimate']                                 = 'Devis';
$lang['estimate_lowercase']                       = 'devis';
$lang['create_new_estimate']                      = 'Créer un devis';
$lang['view_estimate']                            = 'Voir le devis';
$lang['estimate_sent_to_client_success']          = 'Devis envoyé au client avec succès';
$lang['estimate_sent_to_client_fail']             = 'Problème lors de l\'envoi du devis';
$lang['estimate_view']                            = 'Voir le devis';
$lang['estimate_select_customer']                 = 'Client';
$lang['estimate_add_edit_number']                 = 'Devis Numéro';
$lang['estimate_add_edit_date']                   = 'Date de devis';
$lang['estimate_add_edit_expirydate']             = 'Date de validité';
$lang['estimate_add_edit_currency']               = 'Devise';
$lang['estimate_add_edit_client_note']            = 'Note Client';
$lang['estimate_add_edit_admin_note']             = 'Note Admin';
$lang['estimates_toggle_table_tooltip']           = 'Afficher le tableau complet';
$lang['estimate_add_edit_advanced_options']       = 'Options avancées';
$lang['estimate_to']                              = 'À';
$lang['estimates_list_all']                       = 'Tous';
$lang['estimate_invoiced_date']                   = 'Devis facturé le %s';
$lang['edit_estimate_tooltip']                    = 'Editer le devis';
$lang['delete_estimate_tooltip']                  = 'Supprimer';
$lang['estimate_sent_to_email_tooltip']           = 'Envoyer par email';
$lang['estimate_already_send_to_client_tooltip']  = 'Ce devis a déjà été envoyé au client %s';
$lang['estimate_view_activity_tooltip']           = 'Historique du devis';
$lang['estimate_send_to_client_modal_heading']    = 'Envoyer ce devis au client';
$lang['estimate_send_to_client_attach_pdf']       = 'Joindre la version PDF';
$lang['estimate_send_to_client_preview_template'] = 'Aperçu du modèle d\'email';
$lang['estimate_dt_table_heading_number']         = 'Numéro';
$lang['estimate_dt_table_heading_date']           = 'Date de devis';
$lang['estimate_dt_table_heading_client']         = 'Client';
$lang['estimate_dt_table_heading_expirydate']     = 'Date de validité';
$lang['estimate_dt_table_heading_amount']         = 'Montant';
$lang['estimate_dt_table_heading_status']         = 'Statut';
$lang['estimate_convert_to_invoice']              = 'Convertir en facture';

# Clients
$lang['client_payments_tab'] = 'Règlements';

# Estimate General
$lang['estimate_pdf_heading']            = 'DEVIS';
$lang['estimate_table_item_heading']     = 'Désignation';
$lang['estimate_table_quantity_heading'] = 'Qté.';
$lang['estimate_table_rate_heading']     = 'Prix unitaire';
$lang['estimate_table_tax_heading']      = 'Taxe';
$lang['estimate_table_amount_heading']   = 'Montant HT';
$lang['estimate_subtotal']               = 'Total HT';
$lang['estimate_adjustment']             = 'Ajustement';
$lang['estimate_discount']               = 'Remise';
$lang['estimate_total']                  = 'Total TTC';
$lang['estimate_to']                     = 'À';
$lang['estimate_data_date']              = 'Date de devis';
$lang['estimate_data_expiry_date']       = 'Date de validité';
$lang['estimate_note']                   = 'Note:';
$lang['estimate_status_draft']           = 'Brouillon';
$lang['estimate_status_sent']            = 'Envoyé';
$lang['estimate_status_declined']        = 'Decliné';
$lang['estimate_status_accepted']        = 'Accepté';
$lang['estimate_status_expired']         = 'Expiré';
$lang['estimate_note']                   = 'Note:';

## Clients
$lang['clients_estimate_dt_number']             = 'Numéro';
$lang['clients_estimate_dt_date']               = 'Date de devis';
$lang['clients_estimate_dt_duedate']            = 'Date de validité';
$lang['clients_estimate_dt_amount']             = 'Montant';
$lang['clients_estimate_dt_status']             = 'Statut';
$lang['clients_nav_estimates']                  = 'Devis';
$lang['clients_decline_estimate']               = 'Décliner';
$lang['clients_accept_estimate']                = 'Accepter';
$lang['clients_my_estimates']                   = 'Devis';
$lang['clients_estimate_invoiced_successfully'] = 'Devis accepté. Voici la facture de ce devis';
$lang['clients_estimate_accepted_not_invoiced'] = 'Nous vous remercions d\'avoir accepté ce devis';
$lang['clients_estimate_declined']              = 'Devis décliné. Vous pouvez accepter ce devis à tout moment avant la date d\'expiration';
$lang['clients_estimate_failed_action']         = 'Impossible de prendre une décision sur ce devis';
$lang['client_add_edit_profile']                = 'Profil';

# Version 1.0.3
# Champs personnalisés
$lang['custom_field']                          = 'Champ personnalisé';
$lang['custom_field_lowercase']                = 'champ personnalisé';
$lang['custom_fields']                         = 'Champs personnalisés';
$lang['new_custom_field']                      = 'Ajouter un champ';
$lang['custom_field_name']                     = 'Nom du champ';
$lang['custom_field_add_edit_type']            = 'Type de champ';
$lang['custom_field_add_edit_belongs_top']     = 'Champ lié à';
$lang['custom_field_add_edit_options']         = 'Options';
$lang['custom_field_add_edit_options_tooltip'] = 'Option pour les menus déroulants. Renseigner ce champ en séparant les options par une virgule. Ex. pomme,orange,banane';
$lang['custom_field_add_edit_order']           = 'Ordre';
$lang['custom_field_dt_field_to']              = 'Appartient à';
$lang['custom_field_dt_field_name']            = 'Nom';
$lang['custom_field_dt_field_type']            = 'Type';
$lang['custom_field_add_edit_active']          = 'Actif';
$lang['custom_field_add_edit_disabled']        = 'Désactiver';

# Ticket replies
$lang['ticket_reply'] = 'Réponse ticket';

# Admin Customizer Sidebar
$lang['asc_custom_fields'] = 'Champs personnalisés';

# Contrats
$lang['contract_types']           = 'Types de contrats';
$lang['contract_type']            = 'Type de contrat';
$lang['new_contract_type']        = 'Nouveau type de contrat';
$lang['contract_type_lowercase']  = 'contrat';
$lang['contract_type_name']       = 'Nom';
$lang['contract_types_list_name'] = 'Type de contrat';

# Customizer Menu
$lang['acs_contracts']      = 'Contrats';
$lang['acs_contract_types'] = 'Types de contrats';

# Version 1.0.4
# Invoice Items
$lang['invoice_item_long_description'] = 'Description';

# Clients
$lang['clients_list_phone']                = 'Téléphone';
$lang['client_expenses_tab']               = 'Dépenses';
$lang['customers_summary']                 = 'Synthèse des Clients';
$lang['customers_summary_active']          = 'Contacts Actifs';
$lang['customers_summary_inactive']        = 'Contacts Inactifs';
$lang['customers_summary_logged_in_today'] = 'Connectés aujourd\'hui';

# Authentification
$lang['admin_auth_forgot_password_email']     = 'Email';
$lang['admin_auth_forgot_password_heading']   = 'Mot de passe oublié';
$lang['admin_auth_login_heading']             = 'Connexion';
$lang['admin_auth_login_email']               = 'Email';
$lang['admin_auth_login_password']            = 'Mot de passe';
$lang['admin_auth_login_remember_me']         = 'Se souvenir de moi';
$lang['admin_auth_login_button']              = 'Connexion';
$lang['admin_auth_login_fp']                  = 'Mot de passe oublié ?';
$lang['admin_auth_reset_password_heading']    = 'Réinitialiser le mot de passe';
$lang['admin_auth_reset_password']            = 'Mot de passe';
$lang['admin_auth_reset_password_repeat']     = 'Répéter le mot de passe';
$lang['admin_auth_invalid_email_or_password'] = 'Email ou mot de passe invalide';
$lang['admin_auth_inactive_account']          = 'Compte inactif';

# Calendrier
$lang['calendar_estimate']          = 'Devis';
$lang['calendar_invoice']           = 'Facture';
$lang['calendar_contract']          = 'Contrat';
$lang['calendar_customer_reminder'] = 'Rappel client';
$lang['calendar_event']             = 'Evenement';
$lang['calendar_task']              = 'Tâche';

# Prospects
$lang['lead_edit_delete_tooltip'] = 'Supprimer';
$lang['lead_attachments']         = 'Pièces jointes';

# Admin Customizer Sidebar
$lang['acs_finance'] = 'Finance';

# Settings
$lang['settings_show_sale_agent_on_invoices']       = 'Indiquer le contact commercial sur les factures';
$lang['settings_show_sale_agent_on_estimates']      = 'Indiquer le contact commercial sur les devis';
$lang['settings_predefined_predefined_term']        = 'Termes et conditions générales par défaut';
$lang['settings_predefined_clientnote']             = 'Note client par défaut';
$lang['settings_custom_pdf_logo_image_url']         = 'Lien URL du logo personnalisé pour les documents PDF';
$lang['settings_custom_pdf_logo_image_url_tooltip'] = 'Vous aurez probablement des problèmes avec les images de type PNG. L\'affichage de la transparence varie différemment en fonction de la version de php-imagick ou de php-gd utilisée. Essayez de mettre à jour php-imagick et désactivez php-gd. Si vous laissez ce champ vide le logo téléchargé sera utilisé par défaut.';

# General
$lang['sale_agent_string']               = 'Contact commercial';
$lang['amount_display_in_base_currency'] = 'Le montant est affiché dans votre devise de base';

# Prospects
$lang['leads_summary'] = 'Synthèse des prospects';

# Contrats
$lang['contract_value']                       = 'Valeur du contrat';
$lang['contract_trash']                       = 'Corbeille';
$lang['contracts_view_trash']                 = 'Voir la corbeille';
$lang['contracts_view_all']                   = 'Tous';
$lang['contracts_view_exclude_trashed']       = 'Exclure les contrats mis à la corbeille';
$lang['contract_value_tooltip']               = 'Ajouter la valeur du contrat. La valeur sera affichée dans votre devise de base.';
$lang['contract_trash_tooltip']               = 'Si vous ajoutez le contrat à la corbeille, il ne sera pas affiché sur l\'espace client, ni inclu dans le tableau et autres statistiques. Il ne sera pas affiché par défaut lorsque vous aurez la liste de tous les contrats.';
$lang['contract_renew_heading']               = 'Renouveler le contrat';
$lang['contract_summary_heading']             = 'Synthèse des contrats';
$lang['contract_summary_expired']             = 'Expiré';
$lang['contract_summary_active']              = 'Actif';
$lang['contract_summary_about_to_expire']     = 'Sur le point d\'expirer';
$lang['contract_summary_recently_added']      = 'Récemment ajouté';
$lang['contract_summary_trash']               = 'Corbeille';
$lang['contract_summary_by_type']             = 'Contrats par type';
$lang['contract_summary_by_type_value']       = 'Valeur contrats par type';
$lang['contract_renewed_successfully']        = 'Contrat renouvelé avec succès';
$lang['contract_renewed_fail']                = 'Problème lors du renouvellement du contrat. Veuillez contacter l\'administrateur';
$lang['no_contract_renewals_found']           = 'Le renouvellement du contrat est introuvable';
$lang['no_contract_renewals_history_heading'] = 'Historique des contrats renouvelés';
$lang['contract_renewed_by']                  = '%s a renouvelé ce contrat';
$lang['contract_renewal_deleted']             = 'Renouvellement supprimé';
$lang['contract_renewal_delete_fail']         = 'Echec de la supression du contrat renouvelé. Veuillez contacter l\'administrateur';
$lang['contract_renewal_new_value']           = 'Nouvelle valeur du contrat: %s';
$lang['contract_renewal_old_value']           = 'Ancienne valeur du contrat: %s';
$lang['contract_renewal_new_start_date']      = 'Nouvelle date de début du contrat: %s';
$lang['contract_renewal_old_start_date']      = 'L\'ancienne date de début du contrat était: %s';
$lang['contract_renewal_new_end_date']        = 'Nouvelle date de fin du contrat: %s';
$lang['contract_renewal_old_end_date']        = 'L\'ancienne date de fin du contrat était: %s';
$lang['contract_attachment']                  = 'Pièce jointe';

# Admin Aside Menu
$lang['als_expenses']           = 'Dépenses';
$lang['als_reports_expenses']   = 'Dépenses';
$lang['als_expenses_vs_income'] = 'Dépenses vs Ventes';

# Factures
$lang['invoice_attach_file']           = 'Pièce jointe';
$lang['invoice_mark_as_sent']          = 'Marquer comme envoyée';
$lang['invoice_marked_as_sent']        = 'Facture marquée comme envoyée';
$lang['invoice_marked_as_sent_failed'] = 'Echec pour marquer la facture comme envoyée';

# Payments
$lang['payment_transaction_id'] = 'Référence de transaction';

# Settings Menu
$lang['acs_expense_categories'] = 'Catégories dépenses';

# Dépenses
$lang['expense_category']                             = 'Catégorie d\'dépenses';
$lang['expense_category_lowercase']                   = 'catégorie d\'dépenses';
$lang['new_expense']                                  = 'Enregistrer un dépenses';
$lang['expense_add_edit_name']                        = 'Nom de l\'dépenses';
$lang['expense_add_edit_description']                 = 'Description';
$lang['expense_categories']                           = 'Catégories d\'dépenses';
$lang['new_expense_category']                         = 'Ajouter une catégorie';
$lang['dt_expense_description']                       = 'Description';
$lang['expense']                                      = 'Dépense';
$lang['expenses']                                     = 'Dépenses';
$lang['expense_lowercase']                            = 'dépenses';
$lang['expense_add_edit_customer']                    = 'Client';
$lang['expense_add_edit_note']                        = 'Note';
$lang['expense_add_edit_date']                        = 'Date de l\'dépenses';
$lang['expense_add_edit_amount']                      = 'Montant';
$lang['expense_add_edit_billable']                    = 'Facturable';
$lang['expense_add_edit_attach_receipt']              = 'Joindre un reçu';
$lang['expense_add_edit_reference_no']                = 'Référence';
$lang['expense_receipt']                              = 'Reçu de l\'dépenses';
$lang['expense_receipt_lowercase']                    = 'reçu de l\'dépenses';
$lang['expense_dt_table_heading_category']            = 'Catégorie';
$lang['expense_dt_table_heading_amount']              = 'Montant';
$lang['expense_dt_table_heading_date']                = 'Date';
$lang['expense_dt_table_heading_reference_no']        = 'Référence';
$lang['expense_dt_table_heading_customer']            = 'Client';
$lang['expense_dt_table_heading_payment_mode']        = 'Mode de règlement';
$lang['expense_converted_to_invoice']                 = 'Dépense convertie en facture avec succès';
$lang['expense_converted_to_invoice_fail']            = 'Échec de la conversion de cette dépense à facturer. Vérifiez le journal des erreurs.';
$lang['expense_copy_success']                         = 'Dépense dupliquée avec succès.';
$lang['expense_copy_fail']                            = 'Échec de duplication de la dépense. Vérifiez les champs requis et essayez à nouveau.';
$lang['expenses_list_all']                            = 'Toutes';
$lang['expenses_list_billable']                       = 'Facturable';
$lang['expenses_list_non_billable']                   = 'Non Facturables';
$lang['expenses_list_invoiced']                       = 'Facturées';
$lang['expenses_list_unbilled']                       = 'Non Facturée';
$lang['expenses_list_recurring']                      = 'Récurrentes';
$lang['expense_invoice_delete_not_allowed']           = 'Impossible de supprimer cette dépense. Celle-ci a déjà été facturée.';
$lang['expense_convert_to_invoice']                   = 'Convertir en facture';
$lang['expense_edit']                                 = 'Editer la dépense';
$lang['expense_delete']                               = 'Supprimer';
$lang['expense_copy']                                 = 'Dupliquer';
$lang['expense_invoice_not_created']                  = 'Facture non créée';
$lang['expense_billed']                               = 'Facturée';
$lang['expense_not_billed']                           = 'Non facturée';
$lang['expense_customer']                             = 'Client';
$lang['expense_note']                                 = 'Note:';
$lang['expense_date']                                 = 'Date:';
$lang['expense_ref_noe']                              = 'Ref #:';
$lang['expense_amount']                               = 'Montant :';
$lang['expense_recurring_indicator']                  = 'Récurrent';
$lang['expense_already_invoiced']                     = 'Cette dépense est déjà facturée';
$lang['expense_recurring_auto_create_invoice']        = 'Création automatique de la facture';
$lang['expense_recurring_send_custom_on_renew']       = 'Envoyer la facture au client quand la dépense est récurrente';
$lang['expense_recurring_autocreate_invoice_tooltip'] = 'Si cette option est cochée la facture pour le client sera automatiquement créée lors du renouvellement de la dépense.';
$lang['expenses_yearly_by_categories']                = 'Dépenses annuelles par catégories';
$lang['total_expenses_for']                           = 'Total dépenses pour'; // année
$lang['expenses_report_for']                          = 'Dépenses pour'; // année
# Custom fields
$lang['custom_field_required']    = 'Requis';
$lang['custom_field_show_on_pdf'] = 'Afficher sur les documents PDF';
$lang['custom_field_leads']       = 'Prospects';
$lang['custom_field_customers']   = 'Clients';
$lang['custom_field_staff']       = 'Collaborateurs';
$lang['custom_field_contracts']   = 'Contrats';
$lang['custom_field_tasks']       = 'Tâches';
$lang['custom_field_expenses']    = 'Dépenses';
$lang['custom_field_invoice']     = 'Facture';
$lang['custom_field_estimate']    = 'Devis';

# Tickets
$lang['ticket_single_private_staff_notes'] = 'Notes privées collaborateurs';

# Business News
$lang['business_news'] = 'Les nouvelles de DKS';

# Navigation
$lang['nav_todo_items'] = 'Articles todos';

# Contrats
$lang['clients_contracts_type'] = 'Type de contrat';

# Version 1.0.5
# General
$lang['no_tax']                              = 'Aucune taxe';
$lang['numbers_not_formatted_while_editing'] = 'Le taux dans le champ de saisie est non formatable et doit rester non formaté. Ne pas essayer de la formater manuellement.';

# Contrats
$lang['contracts_view_expired']         = 'Expiré';
$lang['contracts_view_without_dateend'] = 'Contrats sans date de fin';

# Email Templates
$lang['email_template_contracts_fields_heading'] = 'Contrats';

# Factures General
$lang['invoice_estimate_general_options'] = 'Options générales';
$lang['invoice_table_item_description']   = 'Description';
$lang['invoice_recurring_indicator']      = 'Récurrent';

# Devis
$lang['estimate_convert_to_invoice_successfully'] = 'Devis converti en facture avec succès';
$lang['estimate_table_item_description']          = 'Description';

# Version 1.0.6
# Currencies
$lang['cant_delete_base_currency'] = 'Vous ne pouvez pas supprimer votre devise de base. Vous devez selectionner une nouvelle devise de base avant de la supprimer.';
$lang['invoice_copy']              = 'Dupliquer';
$lang['invoice_copy_success']      = 'Facture dupliquée avec succès';
$lang['invoice_copy_fail']         = 'Impossible de dupliquer la facture';
$lang['invoice_due_after_help']    = 'Définir zéro pour éviter le calcul';
$lang['show_shipping_on_invoice']  = 'Afficher les informations d\'expédition sur la facture';

# Devis
$lang['show_shipping_on_estimate']         = 'Afficher les informations d\'expédition sur le devis';
$lang['is_invoiced_estimate_delete_error'] = 'Ce devis est facturé. Vous ne pouvez pas supprimer ce devis';

# Clients & Factures / Devis
$lang['ship_to']                            = 'Envoyer à';
$lang['customer_profile_details']           = 'Informations Générales';
$lang['billing_shipping']                   = 'Facturation & Expédition';
$lang['billing_address']                    = 'Adresse de facturation';
$lang['shipping_address']                   = 'Adresse d\'expédition';
$lang['billing_street']                     = 'Rue';
$lang['billing_city']                       = 'Ville';
$lang['billing_state']                      = 'Région';
$lang['billing_zip']                        = 'Code Postal';
$lang['billing_country']                    = 'Pays';
$lang['shipping_street']                    = 'Rue';
$lang['shipping_city']                      = 'Ville';
$lang['shipping_state']                     = 'Région';
$lang['shipping_zip']                       = 'Code Postal';
$lang['shipping_country']                   = 'Pays';
$lang['get_shipping_from_customer_profile'] = 'Obtenez les détails d\'expédition à partir du profil client';

# Client
$lang['customer_default_currency']                             = 'Devise par défaut';
$lang['customer_update_address_info_on_invoices']              = 'Mettre à jour les informations de facturation et d\'expédition sur toutes les factures et tous les devis.';
$lang['customer_update_address_info_on_invoices_help']         = 'Si vous sélectionnez cette option les informations de facturation et d\'expédition seront mises à jour sur toutes les factures et tous les devis. Remarque : les factures avec le statut payée ne seront pas affectées.';
$lang['setup_google_api_key_customer_map']                     = 'Paramétrez votre clé google api pour visualiser la carte client';
$lang['customer_attachments_file']                             = 'Fichier';
$lang['client_send_set_password_email']                        = 'Envoyer un email de configuration du mot de passe';
$lang['customer_billing_same_as_profile']                      = 'Identique à l\'adresse principale';
$lang['customer_billing_copy']                                 = 'Copier l\'adresse de facturation';
$lang['customer_map']                                          = 'Map';
$lang['set_password_email_sent_to_client']                     = 'L\'email de création du mot de passe a été envoyé avec succès au client';
$lang['set_password_email_sent_to_client_and_profile_updated'] = 'L\'email de mise à jour du profil et de création du mot de passe a été envoyé avec succès au client';
$lang['customer_attachments']                                  = 'Pièces jointes';
$lang['customer_longitude']                                    = 'Longitude (Google Maps)';
$lang['customer_latitude']                                     = 'Latitude (Google Maps)';

# Authentication
$lang['admin_auth_set_password']         = 'Mot de passe';
$lang['admin_auth_set_password_repeat']  = 'Répétez le mot de passe';
$lang['admin_auth_set_password_heading'] = 'Création du mot de passe';

# General
$lang['apply']                         = 'Appliquer';
$lang['department_calendar_id']        = 'ID calendrier Google';
$lang['localization_default_language'] = 'Langue par défaut';
$lang['system_default_string']         = 'Système par défaut';
$lang['advanced_options']              = 'Options avancées';

# Dépenses
$lang['expense_list_invoice']  = 'Facturée';
$lang['expense_list_billed']   = 'Facturée';
$lang['expense_list_unbilled'] = 'Non facturée';

# Prospects
$lang['lead_merge_custom_field']          = 'Fusionner comme champ personnalisé';
$lang['lead_merge_custom_field_existing'] = 'Fusionner avec le champ de base de données existant';
$lang['lead_dont_merge_custom_field']     = 'Ne pas fusionner';
$lang['lost_leads']                       = 'Prospects perdus';
$lang['junk_leads']                       = 'Prospects caducs';
$lang['lead_mark_as_lost']                = 'Marquer comme perdu';
$lang['lead_unmark_as_lost']              = 'Marquer comme retrouvé';
$lang['lead_marked_as_lost']              = 'Marqué comme perdu avec succès';
$lang['lead_unmarked_as_lost']            = 'Prospect marqué comme retrouvé avec succès';
$lang['leads_status_color']               = 'Couleur';
$lang['lead_mark_as_junk']                = 'Marquer comme caduc';
$lang['lead_unmark_as_junk']              = 'Marquer comme actif';
$lang['lead_marked_as_junk']              = 'Prospect marqué comme caduc avec succès';
$lang['lead_unmarked_as_junk']            = 'Prospect marqué comme actif avec succès';
$lang['lead_not_found']                   = 'Prospect introuvable';
$lang['lead_lost']                        = 'Perdu';
$lang['lead_junk']                        = 'Caduc';
$lang['leads_not_assigned']               = 'Non affecté';

# Contacts
$lang['contract_not_visible_to_client'] = 'Ne pas afficher au client';
$lang['contract_edit_overview']         = 'Vue d\'ensemble du contrat';
$lang['contract_attachments']           = 'Pièces jointes';

# Tasks
$lang['task_view_make_public']     = 'Rendre public';
$lang['task_is_private']           = 'Tâche privée';
$lang['task_finished']             = 'Accomplie';
$lang['task_single_related']       = 'Attribuée à';
$lang['task_unmark_as_complete']   = 'Marquer comme non accomplie';
$lang['task_unmarked_as_complete'] = 'Tâche marquée comme non accomplie avec succès';
$lang['task_relation']             = 'Liée à';
$lang['task_public']               = 'Public';
$lang['task_public_help']          = 'Si vous definissez cette tâche comme public, elle sera visible par tous les collaborateurs. Autrement elle sera seulement visible par les utilisateurs concernés, followers, auteurs et administrateurs';

# Settings
$lang['settings_general_favicon']                                            = 'Favicon';
$lang['settings_output_client_pdfs_from_admin_area_in_client_language']      = 'Exporter les documents PDF clients à partir du CRM dans la langue selectionnée par le client.';
$lang['settings_output_client_pdfs_from_admin_area_in_client_language_help'] = 'Si vous selectionnez cette option sur OUI et par exemple la langue par défaut du CRM est l\'anglais et que la langue par défaut du client est en français, l\'exportation des documents seront en français.';
$lang['settings_default_tax']                                                = 'Taxe par défaut';
$lang['setup_calendar_by_departments']                                       = 'Configurer le calendrier par département';
$lang['settings_calendar']                                                   = 'Calendrier';
$lang['settings_sales_invoice_due_after']                                    = 'Echéance de règlement (en jours)';
$lang['settings_google_api']                                                 = 'Clé API Google';
$lang['settings_gcal_main_calendar_id']                                      = 'ID calendrier Google';
$lang['settings_gcal_main_calendar_id_help']                                 = 'Ceci est le calendrier principal de la société. Tous les événements de ce calendrier seront affichés. Si vous souhaitez configurer un calendrier à un département spécifique vous pouvez l\'ajouter dans votre calendrier Google.';
$lang['show_on_calendar']                                                    = 'Afficher sur le calendrier :';
$lang['show_invoices_on_calendar']                                           = 'Factures';
$lang['show_estimates_on_calendar']                                          = 'Devis';
$lang['show_contracts_on_calendar']                                          = 'Contrats';
$lang['show_tasks_on_calendar']                                              = 'Tâches';
$lang['show_customer_reminders_on_calendar']                                 = 'Rappels clients';

# Prospects
$lang['copy_custom_fields_convert_to_customer']                      = 'Copier les champs personnalisés au profil client';
$lang['copy_custom_fields_convert_to_customer_help']                 = 'Si l\'un des champs personnalisés suivants n\'existe pas pour le client il sera automatiquement créé avec le même nom autrement seule la valeur sera copiée à partir du profil prospect.';
$lang['lead_profile']                                                = 'Profil';
$lang['lead_is_client']                                              = 'Client';
$lang['leads_email_integration_folder_no_encryption']                = 'Aucun cryptage';
$lang['leads_email_integration']                                     = 'Intégration email';
$lang['leads_email_active']                                          = 'Actif';
$lang['leads_email_integration_imap']                                = 'Serveur IMAP';
$lang['leads_email_integration_email']                               = 'Adresse Email (connexion)';
$lang['leads_email_integration_password']                            = 'Mot de passe';
$lang['leads_email_integration_default_source']                      = 'Source par défaut';
$lang['leads_email_integration_check_every']                         = 'Vérifier toutes les (minutes)';
$lang['leads_email_integration_default_assigned']                    = 'Responsable du nouveau prospect';
$lang['leads_email_encryption']                                      = 'Cryptage';
$lang['leads_email_integration_updated']                             = 'Mise à jour intégration email';
$lang['leads_email_integration_default_status']                      = 'Statut par défaut';
$lang['leads_email_integration_folder']                              = 'Dossier';
$lang['leads_email_integration_notify_when_lead_imported']           = 'Notifier lorsque le prospect est importé';
$lang['leads_email_integration_only_check_unseen_emails']            = 'Ne vérifie que les emails non ouverts';
$lang['leads_email_integration_only_check_unseen_emails_help']       = 'Le script configurera automatiquement l\'ouverture de l\'email après vérification. Il est utilisé pour empêcher la vérification systématique et répétitive de tous les emails. Il est recommandé de ne pas décocher cette option si vous avez beaucoup d\'emails et que vous avez configuré beaucoup de transferts pour les mailings prospects';
$lang['leads_email_integration_notify_when_lead_contact_more_times'] = 'Notifier si le prospect envoie l\'email plusieurs fois';
$lang['leads_email_integration_test_connection']                     = 'Tester la connexion IMAP ';
$lang['lead_email_connection_ok']                                    = 'Bonne connexion IMAP';
$lang['lead_email_connection_not_ok']                                = 'Erreur de connexion IMAP';
$lang['lead_email_activity']                                         = 'Email activité';
$lang['leads_email_integration_notify_roles']                        = 'Rôles à notifier';
$lang['leads_email_integration_notify_staff']                        = 'Collaborateurs à notifier';
$lang['lead_public']                                                 = 'Public';

# Knowledge Base
$lang['kb_group_color'] = 'Couleur';
$lang['kb_group_order'] = 'Ordre';

# Utilities - BULK PDF Exporter
$lang['bulk_pdf_exporter']             = 'Exportation PDF';
$lang['bulk_export_pdf_payments']      = 'Règlements';
$lang['bulk_export_pdf_estimates']     = 'Devis';
$lang['bulk_export_pdf_invoices']      = 'Factures';
$lang['bulk_pdf_export_button']        = 'Exporter';
$lang['bulk_pdf_export_select_type']   = 'Sélectionner un type';
$lang['no_data_found_bulk_pdf_export'] = 'Aucune donnée trouvée pour l\'exportation';
$lang['bulk_export_status_all']        = 'Tous';
$lang['bulk_export_status']            = 'Statut';
$lang['bulk_export_zip_payment_modes'] = 'Règlement effectué par:';
$lang['bulk_export_include_tag']       = 'Inclure une étiquette';
$lang['bulk_export_include_tag_help']  = 'Ex. Original ou Copie. L\'étiquette sera incluse dans le PDF. Il est recommandé d\'utiliser un seul mot.';

# Version 1.0.7
## Clients - portal
$lang['clients_nav_proposals'] = 'Offres';
$lang['clients_nav_support']   = 'Support';

# General
$lang['more']            = 'Options';
$lang['add_item']        = 'Ajouter un article';
$lang['goto_admin_area'] = 'Retour au tableau de bord';
$lang['delete']          = 'Supprimer %s';
$lang['welcome_top']     = 'Bonjour %s';

# Clients
$lang['customer_permissions']         = 'Permissions';
$lang['customer_permission_invoice']  = 'Factures';
$lang['customer_permission_estimate'] = 'Devis';
$lang['customer_permission_proposal'] = 'Offres';
$lang['customer_permission_contract'] = 'Contrats';
$lang['customer_permission_support']  = 'Support';

#Tasks
$lang['task_related_to'] = 'Lier à';

# Send file
$lang['custom_file_fail_send']    = 'Echec de l\'envoi du fichier';
$lang['custom_file_success_send'] = 'Fichier envoyé avec succès à %s';
$lang['send_file_subject']        = 'Sujet email';
$lang['send_file_email']          = 'Adresse email ';
$lang['send_file_message']        = 'Message';
$lang['send_file']                = 'Fichier envoyé';
$lang['add_checklist_item']       = 'Ajouter une checklist';
$lang['task_checklist_items']     = 'Checklist';

# Import
$lang['default_pass_clients_import'] = 'Mot de passe par défaut pour tous les clients';
$lang['simulate_import']             = 'Simuler l\'importation';
$lang['import_upload_failed']        = 'Télécharger les échecs';
$lang['import_total_imported']       = 'Total Importé: %s';
$lang['import_leads']                = 'Importer des prospects';
$lang['import_customers']            = 'Importer des clients';
$lang['choose_csv_file']             = 'Importer un fichier CSV';
$lang['import']                      = 'Importer';
$lang['lead_import_status']          = 'Statut';
$lang['lead_import_source']          = 'Source';

# Bulk PDF Export
$lang['bulk_export_pdf_proposals'] = 'Offres';

# Factures
$lang['delete_invoice'] = 'Supprimer';

# Calendar
$lang['calendar_lead_reminder'] = 'Rappel prospect';
$lang['items']                  = 'Articles';
$lang['support']                = 'Support';
$lang['new_ticket']             = 'Nouveau Ticket';

# Reminders
$lang['lead_set_reminder_title'] = 'Ajouter un rappel prospect';
$lang['set_reminder_tooltip']    = 'Cette option vous permet de ne jamais rien oublier sur un client.';
$lang['client_reminders_tab']    = 'Rappels';
$lang['leads_reminders_tab']     = 'Rappels';

# Tickets
$lang['delete_ticket_reply']  = 'Supprimer la réponse';
$lang['ticket_priority_edit'] = 'Editer la priorité';
$lang['ticket_priority_add']  = 'Ajouter une priorité';
$lang['ticket_status_edit']   = 'Editer un statut ticket';
$lang['ticket_service_edit']  = 'Editer un service ticket';
$lang['edit_department']      = 'Editer le département';

# Dépenses
$lang['edit_expense_category'] = 'Editer la catégorie d\'dépenses';

# Settings
$lang['customer_default_country']                                 = 'Pays par défaut';
$lang['settings_sales_require_client_logged_in_to_view_estimate'] = 'Exiger que le client soit connecté pour voir le devis';
$lang['set_reminder']                                             = 'Paramétrer un rappel';
$lang['set_reminder_date']                                        = 'Date de notification';
$lang['reminder_description']                                     = 'Description';
$lang['reminder_notify_me_by_email']                              = 'Envoyer également un email de notification pour ce rappel';
$lang['reminder_added_successfully']                              = 'Rappel ajouté avec succès. Vous recevrez une notification.';
$lang['reminder_description']                                     = 'Description';
$lang['reminder_date']                                            = 'Date';
$lang['reminder_staff']                                           = 'Rappel';
$lang['reminder_is_notified']                                     = 'Notifié';
$lang['reminder_is_notified_boolean_no']                          = 'Non';
$lang['reminder_is_notified_boolean_yes']                         = 'Oui';
$lang['reminder_set_to']                                          = 'Paramétrer un rappel pour';
$lang['reminder_deleted']                                         = 'Rappel supprimé';
$lang['reminder_failed_to_delete']                                = 'Echec lors de la supression du rappel';
$lang['show_invoice_estimate_status_on_pdf']                      = 'Afficher le statut des factures et des devis sur le PDF';
$lang['email_piping_default_priority']                            = 'Priorité par défaut sur le ticket pipe';
$lang['show_lead_reminders_on_calendar']                          = 'Rappels prospect';
$lang['tickets_piping']                                           = 'Email Pipe';
$lang['email_piping_only_replies']                                = 'Seules réponses autorisées par email';
$lang['email_piping_only_registered']                             = 'Pipe seulement sur les utilisateurs enregistrés';

# Devis
$lang['view_estimate_as_client']         = 'Affichage client';
$lang['estimate_mark_as']                = 'Marquer comme %s';
$lang['estimate_status_changed_success'] = 'Statut devis modifié';
$lang['estimate_status_changed_fail']    = 'Echec lors de la modification du statut devis';

#Offres
$lang['proposal_to']                            = 'Société / Nom';
$lang['proposal_date']                          = 'Date';
$lang['proposal_address']                       = 'Adresse';
$lang['proposal_phone']                         = 'Téléphone';
$lang['proposal_email']                         = 'Email';
$lang['proposal_date_created']                  = 'Date de création';
$lang['proposal_open_till']                     = 'Date de validité';
$lang['proposal_status_open']                   = 'Ouverte';
$lang['proposal_status_accepted']               = 'Acceptée';
$lang['proposal_status_declined']               = 'Déclinée';
$lang['proposal_status_sent']                   = 'Envoyée';
$lang['proposal_expired']                       = 'Expirée';
$lang['proposal_subject']                       = 'Sujet';
$lang['proposal_total']                         = 'Total';
$lang['proposal_status']                        = 'Statut';
$lang['proposals_list_all']                     = 'Toutes';
$lang['proposals_leads_related']                = 'Prospects liés à';
$lang['proposals_customers_related']            = 'Clients liés à';
$lang['proposal_related']                       = 'Liée à';
$lang['proposal_for_lead']                      = 'Prospect';
$lang['proposal_for_customer']                  = 'Client';
$lang['proposal']                               = 'Offre';
$lang['proposal_lowercase']                     = 'offre';
$lang['proposals']                              = 'Offres';
$lang['proposals_lowercase']                    = 'offres';
$lang['new_proposal']                           = 'Créer une offre';
$lang['proposal_currency']                      = 'Devise';
$lang['proposal_allow_comments']                = 'Autoriser les commentaires';
$lang['proposal_allow_comments_help']           = 'Si vous selectionnez cette option les commentaires seront vivibles par le client lors de l\'affichage de l\'offre.';
$lang['proposal_edit']                          = 'Editer';
$lang['proposal_pdf']                           = 'PDF';
$lang['proposal_send_to_email']                 = 'Envoyer par email';
$lang['proposal_send_to_email_title']           = 'Envoyé l\'offre par email';
$lang['proposal_attach_pdf']                    = 'PDF joint';
$lang['proposal_preview_template']              = 'Aperçu du modèle';
$lang['proposal_view']                          = 'Affichage client';
$lang['proposal_copy']                          = 'Dupliquer';
$lang['proposal_delete']                        = 'Supprimer';
$lang['proposal_to']                            = 'Pour';
$lang['proposal_add_comment']                   = 'Ajouter un commentaire';
$lang['proposal_sent_to_email_success']         = 'Offre envoyeé par email avec succès';
$lang['proposal_sent_to_email_fail']            = 'Echec lors de l\'envoi de la offre par email';
$lang['proposal_copy_fail']                     = 'Echec lors de la duplication de l\'offre';
$lang['proposal_copy_success']                  = 'Offre dupliquée avec succès';
$lang['proposal_status_changed_success']        = 'Statut de l\'offre modifié avec succès';
$lang['proposal_status_changed_fail']           = 'Echec lors de la modification du statut de l\'offre';
$lang['proposal_assigned']                      = 'Attribuer à';
$lang['proposal_comments']                      = 'Commentaires';
$lang['proposal_convert']                       = 'Convertir';
$lang['proposal_convert_estimate']              = 'Devis';
$lang['proposal_convert_invoice']               = 'Facture';
$lang['proposal_convert_to_estimate']           = 'Convertir en devis';
$lang['proposal_convert_to_invoice']            = 'Convertir en facture';
$lang['proposal_convert_to_lead_disabled_help'] = 'Vous devez convertir le prospect en client afin de créer %s';
$lang['proposal_convert_not_related_help']      = 'L\'offre doit être liée à un client afin de le convertir en %s';
$lang['proposal_converted_to_estimate_success'] = 'Offre convertie en devis avec succès';
$lang['proposal_converted_to_invoice_success']  = 'Offre convertie en facture avec succès';
$lang['proposal_converted_to_estimate_fail']    = 'Echec de la conversion de l\'offre en devis';
$lang['proposal_converted_to_invoice_fail']     = 'Echec de la conversion de l\'offre en facture';

# Offres - voir template offre
$lang['proposal_total_info']   = 'Total %s';
$lang['proposal_accept_info']  = 'Accepter';
$lang['proposal_decline_info'] = 'Décliner';
$lang['proposal_pdf_info']     = 'PDF';

# Clients Portal
$lang['customer_reset_action']            = 'Réinitialiser';
$lang['customer_reset_password_heading']  = 'Réinitialiser votre mot de passe';
$lang['customer_forgot_password_heading'] = 'Mot de passe oublié';
$lang['customer_forgot_password']         = 'Mot de passe oublié ?';
$lang['customer_reset_password']          = 'Mot de passe';
$lang['customer_reset_password_repeat']   = 'Répéter le mot de passe';
$lang['customer_forgot_password_email']   = 'Email';
$lang['customer_forgot_password_submit']  = 'Soumettre';
$lang['customer_ticket_subject']          = 'Sujet';

# Email templates
$lang['email_template_proposals_fields_heading'] = 'Offres';

# Tasks
$lang['add_task_attachments']  = 'Joindre un fichier';
$lang['task_view_attachments'] = 'Pièce(s) jointe(s)';
$lang['task_view_description'] = 'Description';

# Customer Groups
$lang['customer_group_add_heading']      = 'Ajouter une nouvelle catégorie';
$lang['customer_group_edit_heading']     = 'Editer la catégorie client';
$lang['new_customer_group']              = 'Ajouter une catégorie de client';
$lang['customer_group_name']             = 'Type de catégorie';
$lang['customer_groups']                 = 'Catégories';
$lang['customer_group']                  = 'Catégorie de client';
$lang['customer_group_lowercase']        = 'catégorie de client';
$lang['customer_have_invoices_by']       = 'Factures avec le statut %s';
$lang['customer_have_estimates_by']      = 'Devis avec le statut %s';
$lang['customer_have_contracts_by_type'] = 'Avoir des contrats par type %s';

# Custom fields
$lang['custom_field_show_on_table']              = 'Afficher dans les tableaux';
$lang['custom_field_show_on_client_portal']      = 'Afficher sur l\'espace client';
$lang['custom_field_show_on_client_portal_help'] = 'Si ce champ est coché, il sera également affiché dans les listes';
$lang['custom_field_visibility']                 = 'Affichage';

# Knowledge Base
$lang['view_articles_list']     = 'Liste des articles';
$lang['view_articles_list_all'] = 'Liste des articles';
$lang['als_all_articles']       = 'Liste des articles';
$lang['als_kb_groups']          = 'Rubriques';

# Spam Filter - Tickets
$lang['spam_filters']                 = 'Filtres spam';
$lang['spam_filter']                  = 'Filtre spam';
$lang['new_spam_filter']              = 'Nouveau filtre spam';
$lang['spam_filter_blocked_senders']  = 'Expéditeurs bloqués';
$lang['spam_filter_blocked_subjects'] = 'Sujets bloqués';
$lang['spam_filter_blocked_phrases']  = 'Phrases bloquées';
$lang['spam_filter_content']          = 'Contenu';
$lang['spamfilter_edit_heading']      = 'Editer le filtre spam';
$lang['spamfilter_add_heading']       = 'Ajouter un filtre spam';
$lang['spamfilter_type']              = 'Type';
$lang['spamfilter_type_subject']      = 'Sujet';
$lang['spamfilter_type_sender']       = 'Expéditeur';
$lang['spamfilter_type_phrase']       = 'Phrase';

# Tickets
$lang['block_sender']                = 'Bloquer l\'expéditeur';
$lang['sender_blocked']              = 'Expéditeur bloqué';
$lang['sender_blocked_successfully'] = 'Expéditeur bloqué avec succès';
$lang['ticket_date_created']         = 'Date de création';

#KB
$lang['edit_kb_group'] = 'Editer la catégorie';

# Prospects
$lang['edit_source'] = 'Editer la source';
$lang['edit_status'] = 'Editer le statut';

# Contacts
$lang['contract_type_edit'] = 'Editer le type de contrat';

# Reports
$lang['report_by_customer_groups'] = 'Valeur totale par type de catégories clients';

#Utilities
$lang['ticket_pipe_log']      = 'Connexion ticket Pipe';
$lang['ticket_pipe_name']     = 'A partir du nom';
$lang['ticket_pipe_email_to'] = 'au nom';
$lang['ticket_pipe_email']    = 'A partir de l\'email';
$lang['ticket_pipe_subject']  = 'Sujet';
$lang['ticket_pipe_message']  = 'Message';
$lang['ticket_pipe_date']     = 'Date';
$lang['ticket_pipe_status']   = 'Statut';

# Home
$lang['home_latest_activity']   = 'Dernières activités';
$lang['home_my_tasks']          = 'Mes Tâches';
$lang['home_my_todo_items']     = 'Liste todo';
$lang['home_widget_view_all']   = 'Tout Voir';
$lang['home_stats_full_report'] = 'Rapport Complet';

# Validation
$lang['form_validation_required']    = 'Le champ {field} est requis.';
$lang['form_validation_valid_email'] = 'Le champ {field} doit contenir une adresse email valide.';
$lang['form_validation_matches']     = 'Le champ {field} field does not match the {param} field.';
$lang['form_validation_is_unique']   = 'Le champ {field} doit contenir une valeur unique.';

# Version 1.0.8

# Notifications & Prospects/Devis/Factures Activity Log
$lang['not_event']                                                = 'Evénement démarre aujourd\'hui - %s ...';
$lang['not_event_public']                                         = 'Evénement public démarre aujourd\'hui - %s ...';
$lang['not_contract_expiry_reminder']                             = 'Rappel de l\'expiration du contrat - %s ...';
$lang['not_recurring_expense_cron_activity_heading']              = 'Dépenses récurrentes du Cron Job Activité';
$lang['not_recurring_invoices_cron_activity_heading']             = 'Factures récurrentes du Cron Job Activité';
$lang['not_recurring_total_renewed']                              = 'Total renouvelé: %s';
$lang['not_recurring_expenses_action_taken_from']                 = 'Mesure prise en fonction des dépenses récurrents';
$lang['not_invoice_created']                                      = 'Facture créée:';
$lang['not_invoice_renewed']                                      = 'Facture renouvelée:';
$lang['not_expense_renewed']                                      = 'Dépense renouvelée:';
$lang['not_invoice_sent_to_customer']                             = 'Facture envoyée au client: %s';
$lang['not_invoice_sent_yes']                                     = 'Oui';
$lang['not_invoice_sent_not']                                     = 'Non';
$lang['not_action_taken_from_recurring_invoice']                  = 'Mesure prise en fonction des factures récurrentes:';
$lang['not_new_reminder_for']                                     = 'Nouveau rappel pour %s';
$lang['not_received_one_or_more_messages_lead']                   = 'message email reçu de votre prospect';
$lang['not_received_lead_imported_email_integration']             = 'Prospect importé de l\'intégration email';
$lang['not_lead_imported_attachment']                             = 'Pièces jointes importées de l\email';
$lang['not_estimate_status_change']                               = 'Pièces jointes importées de l\email';
$lang['not_estimate_status_updated']                              = 'Mise à jour statut devis: de: %s à %s';
$lang['not_assigned_lead_to_you']                                 = 'vous a assigné le prospect %s';
$lang['not_lead_activity_assigned_to']                            = '%s assigné à %s';
$lang['not_lead_activity_attachment_deleted']                     = 'Supprimer les pièces jointes';
$lang['not_lead_activity_status_updated']                         = '%s a mis à jour le statut prospect de %s à %s';
$lang['not_lead_activity_contacted']                              = '%s à contacté ce prospect sur %s';
$lang['not_lead_activity_created']                                = '%s a créé un prospect';
$lang['not_lead_activity_marked_lost']                            = 'Marquer comme perdu';
$lang['not_lead_activity_unmarked_lost']                          = 'Marquer comme retrouvé';
$lang['not_lead_activity_marked_junk']                            = 'Marquer comme caduc';
$lang['not_lead_activity_unmarked_junk']                          = 'Marquer comme actif';
$lang['not_lead_activity_added_attachment']                       = 'Ajouter une pièce jointe';
$lang['not_lead_activity_converted_email']                        = 'L\'email du prospect a été modifié. Le premier email du prospect était: %s et  a été ajouté comme client avec l\'email %s';
$lang['not_lead_activity_converted']                              = '%s a converti ce prospect en client';
$lang['not_liked_your_post']                                      = '%s a aimé votre publication %s ...';
$lang['not_commented_your_post']                                  = '%s a commenté votre publication %s ...';
$lang['not_liked_your_comment']                                   = '%s a aimé votre commentaire %s ...';
$lang['not_proposal_assigned_to_you']                             = 'Offre assignée à vous - %s ...';
$lang['not_proposal_comment_from_client']                         = 'Nouveau commentaire du client sur l\'offre %s ...';
$lang['not_proposal_proposal_accepted']                           = 'Offre acceptée - %s';
$lang['not_proposal_proposal_declined']                           = 'Offre déclinée - %s';
$lang['not_task_added_you_as_follower']                           = 'vous a ajouté comme follower sur la tâche %s ...';
$lang['not_task_added_someone_as_follower']                       = 'a ajouté %s comme follower sur la tâche %s ...';
$lang['not_task_added_himself_as_follower']                       = 's\'est ajouté comme follower sur la tâche %s ...';
$lang['not_task_assigned_to_you']                                 = 'vous a assigné une tâche %s ...';
$lang['not_task_assigned_someone']                                = 'a assigné %s à la tâche %s ...';
$lang['not_task_will_do_user']                                    = 'exécutera la tâche %s ...';
$lang['not_task_new_attachment']                                  = 'Nouvelle pièce jointe ajoutée';
$lang['not_task_marked_as_complete']                              = 'a marqué la tâche comme accomplie %s';
$lang['not_task_unmarked_as_complete']                            = 'marquer la tâche comme non accomplie %s';
$lang['not_ticket_assigned_to_you']                               = 'un ticket vous a été assigné - %s ...';
$lang['not_ticket_reassigned_to_you']                             = 'un ticket vous a été réassigné - %s ...';
$lang['not_estimate_customer_accepted']                           = 'Félicitation! Le client a accepté le devis numéro %s';
$lang['not_estimate_customer_declined']                           = 'Le client a refusé le devis numéro %s';
$lang['estimate_activity_converted']                              = 'a converti ce devis en facture.<br /> %s';
$lang['estimate_activity_created']                                = 'a créé le devis';
$lang['invoice_estimate_activity_removed_item']                   = 'article supprimé <b>%s</b>';
$lang['estimate_activity_number_changed']                         = 'Numéro de devis modifié de %s à %s';
$lang['invoice_activity_number_changed']                          = 'Numéro de facture modifié de %s à %s';
$lang['invoice_estimate_activity_updated_item_short_description'] = 'description courte de l\'article mise à jour de %s à %s';
$lang['invoice_estimate_activity_updated_item_long_description']  = 'description longue de l\'article mise à jour de <b>%s</b> à <b>%s</b>';
$lang['invoice_estimate_activity_updated_item_rate']              = 'mise à jour du taux de l\'article de %s a %s';
$lang['invoice_estimate_activity_updated_qty_item']               = 'modification de la quantité sur l\'article <b>%s</b> de %s a %s';
$lang['invoice_estimate_activity_added_item']                     = 'a ajouté un nouvel article <b>%s</b>';
$lang['invoice_estimate_activity_sent_to_client']                 = 'Envoyer le devis au client';
$lang['estimate_activity_client_accepted_and_converted']          = 'Le client a accepté le devis. Le devis a été converti en facture numéro %s';
$lang['estimate_activity_client_accepted']                        = 'Le client a accepté ce devis';
$lang['estimate_activity_client_declined']                        = 'Le client a refusé ce devis';
$lang['estimate_activity_marked']                                 = 'devis marqué comme %s';
$lang['invoice_activity_status_updated']                          = 'Statut de la facture mis à jour de %s à %s';
$lang['invoice_activity_created']                                 = 'a créé la facture';
$lang['invoice_activity_from_expense']                            = 'converti en facture à partir de la dépense';
$lang['invoice_activity_recurring_created']                       = '[Réccurent] Facture créée par CRON';
$lang['invoice_activity_recurring_from_expense_created']          = '[Facture à partir de la dépense] Facture créée par CRON';
$lang['invoice_activity_sent_to_client_cron']                     = 'Facture envoyée au client par CRON';
$lang['invoice_activity_sent_to_client']                          = 'facture envoyée au client';
$lang['invoice_activity_marked_as_sent']                          = 'facture marquée comme envoyée';
$lang['invoice_activity_payment_deleted']                         = 'Règlement supprimé pour cette facture. Règlement #%s, montant total %s';
$lang['invoice_activity_payment_made_by_client']                  = 'Client made payment for the invoice from total <b>%s</b> - %s';
$lang['invoice_activity_payment_made_by_staff']                   = 'règlement enregistré à partir du total <b>%s</b> - %s';
$lang['invoice_activity_added_attachment']                        = 'Pièce jointe ajoutée';
$lang['invoice_total_paid']                                       = 'Total réglé';
$lang['invoice_amount_due']                                       = 'Solde à régler';

# Navigation
$lang['top_search_placeholder'] = 'Rechercher...';

# Staff
$lang['staff_profile_inactive_account'] = 'Ce compte collaborateur est inactif';

# Devis
$lang['copy_estimate']                = 'Dupliquer le devis';
$lang['estimate_copied_successfully'] = 'Devis dupliqué avec succès';
$lang['estimate_copied_fail']         = 'Echec lors de la duplication du devis';

# Tasks
$lang['tasks_view_assigned_to_user'] = 'Tâches qui me sont assignées';
$lang['tasks_view_follower_by_user'] = 'Tâches dont je suis le follower';
$lang['no_tasks_found']              = 'Aucune tâche trouvée';

# Prospects
$lang['leads_dt_datecreated']       = 'Créé le';
$lang['leads_sort_by']              = 'Trier par';
$lang['leads_sort_by_datecreated']  = 'Date de création';
$lang['leads_sort_by_kanban_order'] = 'Trier par KanBan';

# Authentication
$lang['check_email_for_resetting_password'] = 'Vérifiez votre email pour plus d\'instructions concernant la réinitialisation de votre mot de passe';
$lang['inactive_account']                   = 'Compte inactif';
$lang['error_setting_new_password_key']     = 'Erreur de réglage pour le nouveau mot de passe';
$lang['password_reset_message']             = 'Votre mot de passe a été réinitialisé. Veuillez vous connecter à nouveau!';
$lang['password_reset_message_fail']        = 'Erreur de réinitialisation de votre mot de passe. Veuillez essayer à nouveau.';
$lang['password_reset_key_expired']         = 'Mot de passe expiré ou identifiant invalide';
$lang['auth_reset_pass_email_not_found']    = 'Email introuvable';
$lang['auth_reset_password_submit']         = 'Réinitialiser le mot de passe';

# Settings
$lang['settings_amount_to_words']          = 'Montant en lettres';
$lang['settings_amount_to_words_desc']     = 'Afficher le montant total en lettres sur les factures et les devis';
$lang['settings_amount_to_words_enabled']  = 'Activer';
$lang['settings_total_to_words_lowercase'] = 'Afficher les lettres en minuscules';
$lang['settings_show_tax_per_item']        = 'Afficher la taxe par ligne d\'article';

# Reports
$lang['report_sales_months_three_months'] = '3 derniers mois';
$lang['report_invoice_number']            = 'Numéro';
$lang['report_invoice_customer']          = 'Client';
$lang['report_invoice_date']              = 'Date de facture';
$lang['report_invoice_duedate']           = 'Date d\'échéance';
$lang['report_invoice_amount']            = 'Montant HT';
$lang['report_invoice_amount_with_tax']   = 'Montant TTC';
$lang['report_invoice_amount_open']       = 'Solde à payer';
$lang['report_invoice_status']            = 'Statut';

#Version 1.0.9
# Home stats
$lang['home_stats_by_project_status'] = 'Statistique par statut de projet';
$lang['home_invoice_overview']        = 'Aperçu des factures';
$lang['home_estimate_overview']       = 'Aperçu des devis';
$lang['home_proposal_overview']       = 'Aperçu des offres';
$lang['home_lead_overview']           = 'Aperçu des prospects';
$lang['home_my_projects']             = 'Mes Projets';
$lang['home_announcements']           = 'Annonces';

# Settings
$lang['settings_leads_kanban_limit']                                    = 'Nombre maximum de lignes par statut pout les prospects KanBan';
$lang['settings_group_misc']                                            = 'Divers';
$lang['show_projects_on_calendar']                                      = 'Afficher les projets sur le calendrier';
$lang['settings_media_max_file_size_upload']                            = 'Taille maximale des fichiers envoyés dans la rubrique Media (MB)';
$lang['settings_client_staff_add_edit_delete_task_comments_first_hour'] = 'Permettre au client/collaborateur d\'ajouter/éditer un commentaire sur une tâche seulement durant la première heure (hors administrateurs)';

# Email templates
$lang['email_template_only_domain_email'] = 'Email principal';

# Announcements
$lang['dismiss_announcement']   = 'Annonce rejetée';
$lang['announcement_from']      = 'De:';
$lang['announcement_date']      = 'Date postée: %s';
$lang['announcement_not_found'] = 'Annonce non trouvée';
$lang['announcements_recent']   = 'Annonces récentes';

# General
$lang['zip_invoices']         = 'Exporter en ZIP';
$lang['zip_estimates']        = 'Exporter en ZIP';
$lang['zip_payments']         = 'Exporter en ZIP';
$lang['setup_help']           = 'Documentation';
$lang['clients_list_company'] = 'Société';
$lang['dt_button_export']     = 'Exporter';
$lang['dt_entries']           = 'enregistrement';
$lang['invoice_total_paid']   = 'Total payé';
$lang['invoice_amount_due']   = 'Solde à payer';

# Calendar
$lang['calendar_project'] = 'Projet';

# Leads
$lang['leads_import_assignee']     = 'Attribution';
$lang['customer_from_lead']        = 'Client de %s';
$lang['lead_kan_ban_attachments']  = 'Pièces jointes %s';
$lang['leads_sort_by_lastcontact'] = 'Dernier contact';

# Tasks
$lang['task_comment_added']     = 'Commentaire ajouté avec succès';
$lang['task_duedate']           = 'Date d\'échéance';
$lang['task_view_comments']     = 'Commentaires';
$lang['task_comment_updated']   = 'Commentaire mis à jour';
$lang['task_visible_to_client'] = 'Visible par le client';
$lang['task_hourly_rate']       = 'Taux horaire';
$lang['hours']                  = 'Heures';
$lang['seconds']                = 'Secondes';
$lang['minutes']                = 'Minutes';
$lang['task_start_timer']       = 'Démarrer le compteur';
$lang['task_stop_timer']        = 'Arrêter le compteur';
$lang['task_billable']          = 'Facturable';
$lang['task_billable_yes']      = 'Facturable';
$lang['task_billable_no']       = 'Non Facturable';
$lang['task_billed']            = 'Facturée';
$lang['task_billed_yes']        = 'Facturée';
$lang['task_billed_no']         = 'Non facturée';
$lang['task_user_logged_time']  = 'l\'heure de votre connexion:';
$lang['task_total_logged_time'] = 'Temps total de connexion:';
$lang['task_is_billed']         = 'Cette tâche est comptabilisée sur la facture numéro %s';
$lang['task_statistics']        = 'Statistiques';
$lang['task_milestone']         = 'Etape';

# Tickets
$lang['ticket_message_updated_successfully'] = 'Message mis à jour avec succès';

# Invoices
$lang['invoice_task_item_project_tasks_not_included'] = 'Les tâches des projets ne sont pas incluses dans cette liste.';
$lang['show_quantity_as']                             = 'Type d\'affichage des quantités:';
$lang['quantity_as_qty']                              = 'Qté.';
$lang['quantity_as_hours']                            = 'Heures';
$lang['invoice_table_hours_heading']                  = 'Heures';
$lang['bill_tasks']                                   = 'Facturer une tâche';
$lang['invoice_estimate_sent_to_email']               = 'Email';

# Estimates
$lang['estimate_table_hours_heading'] = 'Heures';

# General
$lang['is_customer_indicator']         = 'Client';
$lang['print']                         = 'Imprimer';
$lang['customer_permission_projects']  = 'Projets';
$lang['no_timers_found']               = 'Aucun compteur démarré trouvé';
$lang['timers_started_confirm_logout'] = 'Des compteurs de tâches démarrés ont été trouvés!<br />Etes-vous sûr de vouloir vous déconnecter sans avoir arrêté les compteurs?';
$lang['confirm_logout']                = 'Se déconnecter';
$lang['timer_top_started']             = 'Démarrer à %s';

# Projects
$lang['cant_change_billing_type_billed_tasks_found']         = 'Vous ne pouvez pas changer le type de facturation. Des tâches facturées ont déjà été trouvées pour ce projet.';
$lang['project_customer_permission_warning']                 = 'Le système indique que le client ne dispose pas d\'autorisation pour les projets. Le client ne pourra pas voir le projet. Veuillez ajouter une permission dans le profil client onglet Autorisations.';
$lang['project_invoice_timesheet_start_time']                = 'Heure de début: %s';
$lang['project_invoice_timesheet_end_time']                  = 'Heure de fin: %s';
$lang['project_invoice_timesheet_total_logged_time']         = 'temps de connexion: %s';
$lang['project_view_as_client']                              = 'Voir le projet comme un client';
$lang['project_mark_all_tasks_as_completed']                 = 'Marquer toutes les tâches comme accomplies et arrêter tous les compteurs (aucune notification envoyée aux membres du projet)';
$lang['project_not_started_status_tasks_timers_found']       = 'Compteur de tâche trouvé sur un projet dans le statut n\'est pas commencé. Il est recommandé de modifier le statut actuel du projet pour le statut: en cours';
$lang['project_status']                                      = 'Statut';
$lang['project_status_1']                                    = 'Non commencé';
$lang['project_status_2']                                    = 'En cours';
$lang['project_status_3']                                    = 'En attente';
$lang['project_status_4']                                    = 'Fini';
$lang['project_file_dateadded']                              = 'Date de téléchargement';
$lang['project_file_filename']                               = 'Nom de fichier';
$lang['project_file__filetype']                              = 'Type de fichier';
$lang['project_file_visible_to_customer']                    = 'Visible par la clientèle';
$lang['project_file_uploaded_by']                            = 'Téléchargé par';
$lang['edit_project']                                        = 'Editer le projet';
$lang['copy_project']                                        = 'Dupliquer le projet';
$lang['delete_project']                                      = 'Supprimer le projet';
$lang['project_task_assigned_to_user']                       = 'Tâche assignée à vous';
$lang['seconds']                                             = 'Secondes';
$lang['hours']                                               = 'Heures';
$lang['minutes']                                             = 'Minutes';
$lang['project']                                             = 'Projet';
$lang['project_lowercase']                                   = 'projet';
$lang['projects']                                            = 'Projets';
$lang['projects_lowercase']                                  = 'projets';
$lang['project_settings']                                    = 'Paramètres du projet';
$lang['project_invoiced_successfully']                       = 'Projet facturé avec succès';
$lang['new_project']                                         = 'Créer un projet';
$lang['project_files']                                       = 'Fichiers';
$lang['project_activity']                                    = 'Activité';
$lang['project_name']                                        = 'Nom du projet';
$lang['project_description']                                 = 'Description du projet';
$lang['project_customer']                                    = 'Client';
$lang['project_start_date']                                  = 'Date de début';
$lang['project_datecreated']                                 = 'Date de création';
$lang['project_deadline']                                    = 'Date de fin';
$lang['project_billing_type']                                = 'Type de facturation';
$lang['project_billing_type_fixed_cost']                     = 'Coût fixe';
$lang['project_billing_type_project_hours']                  = 'Heures de projet';
$lang['project_billing_type_project_task_hours']             = 'Heures de tâches';
$lang['project_billing_type_project_task_hours_hourly_rate'] = 'Basé sur le taux horaire de la tâche';
$lang['project_rate_per_hour']                               = 'Tarif horaire';
$lang['project_total_cost']                                  = 'Coût total';
$lang['project_members']                                     = 'Membres du projet';
$lang['project_member_removed']                              = 'Membre du projet retiré avec succès';
$lang['project_overview']                                    = 'Synthèse du projet';
$lang['project_gant']                                        = 'Diagramme de Gantt';
$lang['project_milestones']                                  = 'Etapes';
$lang['project_milestone_order']                             = 'Ordre';
$lang['project_milestone_duedate_passed']                    = 'Date d\'échéance passée';
$lang['record_timesheet']                                    = 'Ajouter une feuille de temps';
$lang['new_milestone']                                       = 'Ajouter une étape';
$lang['edit_milestone']                                      = 'Editer l\'étape';
$lang['milestone_name']                                      = 'Nom';
$lang['milestone_due_date']                                  = 'Date d\'échéance';
$lang['project_milestone']                                   = 'Etape';
$lang['project_notes']                                       = 'Notes';
$lang['project_timesheets']                                  = 'Feuilles de temps';
$lang['project_timesheet']                                   = 'Feuille de temps';
$lang['milestone_total_logged_time']                         = 'Temps connecté';
$lang['project_overview_total_logged_hours']                 = 'Total des heures connectées';
$lang['milestones_uncategorized']                            = 'Non classé';
$lang['milestone_no_tasks_found']                            = 'Aucune tâche trouvée';
$lang['project_copied_successfully']                         = 'Les données du projet sont copiées avec succès';
$lang['failed_to_copy_project']                              = 'La duplication du projet a échoué';
$lang['copy_project_task_include_check_list_items']          = 'Copier les articles de la checklist';
$lang['copy_project_task_include_assignees']                 = 'Copier les mêmes attributions';
$lang['copy_project_task_include_followers']                 = 'Copier les mêmes followers';
$lang['project_days_left']                                   = 'Jours restants';
$lang['project_open_tasks']                                  = 'Tâches ouvertes';
$lang['timesheet_stop_timer']                                = 'Arrêter le compteur';
$lang['failed_to_add_project_timesheet_end_time_smaller']    = 'Echec lors de l\'ajout de la timesheet. L\'heure de fin est nférieure à l\'heure de début';
$lang['project_timesheet_user']                              = 'Collaborateur';
$lang['project_timesheet_start_time']                        = 'Heure de début';
$lang['project_timesheet_end_time']                          = 'Heure de fin';
$lang['project_timesheet_time_spend']                        = 'Temps passé';
$lang['project_timesheet_task']                              = 'Tâche';
$lang['project_invoices']                                    = 'Factures';
$lang['total_logged_hours_by_staff']                         = 'Temps total de connexion';
$lang['invoice_project']                                     = 'Facturer le projet';
$lang['invoice_project_info']                                = 'Info projet de facturation';
$lang['invoice_project_data_single_line']                    = 'Ligne unique';
$lang['invoice_project_data_task_per_item']                  = 'Tâche par article';
$lang['invoice_project_data_timesheets_individually']        = 'Toutes les feuilles de temps séparées';
$lang['invoice_project_item_name_data']                      = 'Nom de l\'article';
$lang['invoice_project_description_data']                    = 'Description';
$lang['invoice_project_projectname_taskname']                = 'Nom du projet + nom de la tâche';
$lang['invoice_project_all_tasks_total_logged_time']         = 'Toutes les tâches + temps total de connexion par tâche';
$lang['invoice_project_project_name_data']                   = 'Nom du projet';
$lang['invoice_project_timesheet_individually_data']         = 'Feuille de temps heure de début + heure de fin + temps total de connexion';
$lang['invoice_project_total_logged_time_data']              = 'Temps total de connexion';
$lang['project_allow_client_to']                             = 'Autoriser les clients à %s';
$lang['project_setting_view_task_attachments']               = 'voir les pièces-jointes de la tâche';
$lang['project_setting_view_task_checklist_items']           = 'voir les points de la checklist';
$lang['project_setting_upload_files']                        = 'télécharger des fichiers';
$lang['project_setting_view_task_comments']                  = 'voir les commentaires de la tâche';
$lang['project_setting_upload_on_tasks']                     = 'télécharger des pièces jointes sur les tâches';
$lang['project_setting_view_task_total_logged_time']         = 'voir le temps total de connexion sur la tâche';
$lang['project_setting_open_discussions']                    = 'ouvrir des discussions';
$lang['project_setting_comment_on_tasks']                    = 'commenter les tâches du projet';
$lang['project_setting_view_tasks']                          = 'voir les tâches';
$lang['project_setting_view_milestones']                     = 'voir les étapes';
$lang['project_setting_view_gantt']                          = 'voir le diagramme de Gantt';
$lang['project_setting_view_timesheets']                     = 'voir les feuilles de temps';
$lang['project_setting_view_activity_log']                   = 'voir le journal d\'activité';
$lang['project_setting_view_team_members']                   = 'voir les membres de l\'équipe';
$lang['project_discussion_visible_to_customer_yes']          = 'Visible';
$lang['project_discussion_visible_to_customer_no']           = 'Invisible';
$lang['project_discussion_posted_on']                        = 'Publié le %s';
$lang['project_discussion_posted_by']                        = 'Publié par %s';
$lang['project_discussion_failed_to_delete']                 = 'Impossible de supprimer la discussion';
$lang['project_discussion_deleted']                          = 'Discussion supprimée avec succès';
$lang['project_discussion_no_activity']                      = 'Aucune activité';
$lang['project_discussion']                                  = 'Discussion';
$lang['project_discussions']                                 = 'Discussions';
$lang['edit_discussion']                                     = 'Créer une discussion';
$lang['new_project_discussion']                              = 'Créer une discussion';
$lang['project_discussion_subject']                          = 'Sujet';
$lang['project_discussion_description']                      = 'Description';
$lang['project_discussion_show_to_customer']                 = 'Visible par la clientèle';
$lang['project_discussion_total_comments']                   = 'Total Commentaires';
$lang['project_discussion_last_activity']                    = 'Dernière Activité';
$lang['discussion_add_comment']                              = 'Ajouter un commentaire';
$lang['discussion_newest']                                   = 'Les plus récentes';
$lang['discussion_oldest']                                   = 'Les plus anciennes';
$lang['discussion_attachments']                              = 'Pièces jointes';
$lang['discussion_send']                                     = 'Envoyer';
$lang['discussion_reply']                                    = 'Répondre';
$lang['discussion_edit']                                     = 'Editer';
$lang['discussion_edited']                                   = 'Modifié';
$lang['discussion_you']                                      = 'Vous';
$lang['discussion_save']                                     = 'Enregistrer';
$lang['discussion_delete']                                   = 'Supprimer';
$lang['discussion_view_all_replies']                         = 'Voir toutes les réponses';
$lang['discussion_hide_replies']                             = 'Masquer les réponses';
$lang['discussion_no_comments']                              = 'Aucun commentaire';
$lang['discussion_no_attachments']                           = 'Aucune pièce jointe';
$lang['discussion_attachments_drop']                         = 'Glisser-déposer pour télécharger le fichier';
$lang['project_note']                                        = 'Note';
$lang['project_note_private']                                = 'Notes privées';
$lang['project_save_note']                                   = 'Enregistrer la note';

# Project Activity
$lang['project_activity_created']                      = 'a créé un projet';
$lang['project_activity_updated']                      = 'Projet mis à jour';
$lang['project_activity_removed_team_member']          = 'Retirer le membre de l\'équipe';
$lang['project_activity_added_team_member']            = 'Nouveau membre de l\'équipe ajouté';
$lang['project_activity_marked_all_tasks_as_complete'] = 'Marquer toutes les tâches comme accomplies';
$lang['project_activity_recorded_timesheet']           = 'Feuille de temps enregistrée';
$lang['project_activity_task_name']                    = 'Tâche:';
$lang['project_activity_deleted_discussion']           = 'Discussion supprimée';
$lang['project_activity_created_discussion']           = 'Discussion créée';
$lang['project_activity_updated_discussion']           = 'Discussion mise à jour';
$lang['project_activity_commented_on_discussion']      = 'Commenté sur la discussion';
$lang['project_activity_deleted_discussion_comment']   = 'Commentaire de la discussion supprimé';
$lang['project_activity_deleted_milestone']            = 'Etape supprimée';
$lang['project_activity_updated_milestone']            = 'Etape mise à jour';
$lang['project_activity_created_milestone']            = 'Nouvelle étape créée';
$lang['project_activity_invoiced_project']             = 'Projet facturé';
$lang['project_activity_task_marked_complete']         = 'Tâche marquée comme accomplie';
$lang['project_activity_task_unmarked_complete']       = 'Tâche non marquée comme accomplie';
$lang['project_activity_task_deleted']                 = 'Tâche supprimée';
$lang['project_activity_new_task_comment']             = 'Commenté sur la tâche';
$lang['project_activity_new_task_attachment']          = 'Pièce jointe téléchargée sur la tâche';
$lang['project_activity_new_task_assignee']            = 'Nouvelle attribution de tâche ajoutée';
$lang['project_activity_task_assignee_removed']        = 'Attribution de tâche supprimée';
$lang['project_activity_task_timesheet_deleted']       = 'Feuille de temps supprimé';
$lang['project_activity_uploaded_file']                = 'Fichier projet téléchargé';
$lang['project_activity_status_updated']               = 'Statut projet mis à jour';
$lang['project_activity_visible_to_customer']          = 'Affiché au client';
$lang['project_activity_project_file_removed']         = 'Fichier projet supprimé';

# Customers area
$lang['clients_my_estimates']                                  = 'Mes devis';
$lang['client_no_reply']                                       = 'Pas de réponse';
$lang['clients_nav_projects']                                  = 'Projets';
$lang['clients_my_projects']                                   = 'Mes Projets';
$lang['client_profile_image']                                  = 'Image du profil';
$lang['sales_report_cancelled_invoices_not_included']          = 'Les factures annulées sont exclues du rapport';
$lang['invoices_merge_cancel_merged_invoices']                 = ' Marquer les factures fusionnées comme annulées au lieu de les supprimer';
$lang['invoice_marked_as_cancelled_successfully']              = 'Facture marquée comme annulée';
$lang['invoice_unmarked_as_cancelled']                         = 'Facture non marquée commme annulée';
$lang['tasks_reminder_notification_before']                    = 'Rappel deadline de la tâche avant (Jours)';
$lang['not_task_deadline_reminder']                            = 'Rappel deadline de la tâche';
$lang['dt_length_menu_all']                                    = 'Tous';
$lang['task_not_finished']                                     = 'Non achevée';
$lang['task_billed_cant_start_timer']                          = 'Tâche facturée. Le compteur ne peut pas être démarré';
$lang['invoice_task_billable_timers_found']                    = 'Compteur démarré trouvé';
$lang['project_timesheet_not_updated']                         = 'Timesheet non affecté';
$lang['project_invoice_task_no_timers_found']                  = 'Aucun compteur pour cette tâche';
$lang['invoice_project_tasks_not_started']                     = 'Pas encore commencé | Date de début: %s';
$lang['invoice_project_see_billed_tasks']                      = 'Voir les tâches qui seront comptabilisées sur la facture';
$lang['invoice_project_all_billable_tasks_marked_as_finished'] = 'Toutes les tâches facturées seront marquées comme finies';
$lang['invoice_project_nothing_to_bill']                       = 'Aucune tâche à facturer. Vous pouvez ajouter ce que vous voulez dans les points de facture.';
$lang['invoice_project_start_date_tasks_not_passed']           = 'Les Tâches qui débuteront prochainement ne peuvent pas être facturées';
$lang['invoice_project_stop_all_timers']                       = 'Arrêter tous les compteurs';
$lang['invoice_project_stop_billable_timers_only']             = 'Arrêter seulement les compteurs facturables';
$lang['project_tasks_total_timers_stopped']                    = 'Stopped total %s timers';
$lang['project_invoice_timers_started']                        = 'Compteurs de tâche en cours d\'exécution trouvés sur les tâches facturables, vous ne pouvez pas créer de facture. Veuillez arrêter les compteurs de tâche.';
$lang['task_start_timer_only_assignee']                        = 'Vous devez être assigné à cette tâche pour démarrer le compteur!';
$lang['task_comments']                                         = 'Commentaires';
$lang['invoice_total_tax']                                     = 'Total Taxe';
$lang['estimates_total_tax']                                   = 'Total Taxe';
$lang['report_invoice_total_tax']                              = 'Total Taxe';
$lang['home_tickets']                                          = 'Tickets';
$lang['home_project_activity']                                 = 'Dernières activités projets';
$lang['view_tracking']                                         = 'Suivi des vues';
$lang['view_date']                                             = 'Date';
$lang['view_ip']                                               = 'Adresse IP ';
$lang['article_total_views']                                   = 'Vues totales';
$lang['leads_source']                                          = 'Source';
$lang['invoices_available_for_merging']                        = 'Factures disponibles pour la fusion';
$lang['invoices_merge_discount']                               = 'Vous devrez appliquer une réduction manuellement au total % s  sur cette facture';
$lang['invoice_merge_number_warning']                          = 'La fusion des factures va créer un écart dans les numéros de facture. Vous avez également la possibilité de régler manuellement les numéros de facture si vous voulez éviter les écarts.';
$lang['invoice_mark_as']                                       = 'Marquer comme %s';
$lang['invoice_unmark_as']                                     = 'Enlever le statut de %s';
$lang['invoice_status_cancelled']                              = 'Supprimé';
$lang['tasks_reminder_notification_before_help']               = 'Notifier les attributions de tâches sur la deadline X jours avant. La notification/email est uniquement envoyée aux collaborateurs assignés.';

# Version 1.1.0
$lang['project_invoice_select_all_tasks'] = 'Sélectionnez toutes les tâches';
$lang['lead_company']                     = 'Société';

# Version 1.1.1
$lang['admin_auth_forgot_password_button']       = 'Confirmer';
$lang['task_assigned']                           = 'Affecté à';
$lang['switch_to_pipeline']                      = 'Basculer sur pipeline';
$lang['switch_to_list_view']                     = 'Basculer en mode liste';
$lang['estimates_pipeline']                      = 'Pipeline devis';
$lang['estimates_pipeline_sort']                 = 'Trier par';
$lang['estimates_sort_expiry_date']              = 'Date d\'expiration';
$lang['estimates_sort_pipeline']                 = 'Commande Pipeline';
$lang['estimates_sort_datecreated']              = 'Date de création';
$lang['estimates_sort_estimate_date']            = 'Date de devis';
$lang['estimate_set_reminder_title']             = 'Définir rappel de devis';
$lang['invoice_set_reminder_title']              = 'Définir rappel de facturation';
$lang['estimate_reminders']                      = 'Rappels';
$lang['invoice_reminders']                       = 'Rappels';
$lang['estimate_notes']                          = 'Notes';
$lang['estimate_add_note']                       = 'Ajouter Note';
$lang['dropdown_non_selected_tex']               = 'Aucune sélection';
$lang['auto_close_ticket_after']                 = 'Fermer automatiquement le ticket après (Heures)';
$lang['event_description']                       = 'Description';
$lang['delete_event']                            = 'Supprimer';
$lang['not_new_ticket_created']                  = 'Nouveau ticket ouvert dans votre service - %s';
$lang['receive_notification_on_new_ticket']      = 'Recevoir une notification à l\'ouverture d\'un nouveau ticket';
$lang['receive_notification_on_new_ticket_help'] = 'Tous les membres du personnel faisant partie du service du ticket recevront une notification';
$lang['event_updated']                           = 'Évènement actualisé';
$lang['customer_contacts']                       = 'Contacts';
$lang['new_contact']                             = 'Nouveau Contact';
$lang['contact']                                 = 'Contact';
$lang['contact_lowercase']                       = 'contact';
$lang['contact_primary']                         = 'Contact principal';
$lang['contact_position']                        = 'Position';
$lang['contact_active']                          = 'Active';
$lang['client_company_info']                     = 'Info société';
$lang['proposal_save']                           = 'Sauvegarder offre';
$lang['calendar']                                = 'Calendrier';
$lang['settings_pdf']                            = 'PDF';
$lang['settings_pdf_font']                       = 'Police PDF';
$lang['settings_pdf_table_heading_color']        = 'Couleur de l\'en-tête des tableaux d\'élément';
$lang['settings_pdf_table_heading_text_color']   = 'Couleur du texte d\'en-tête des tableaux d\'élément';
$lang['settings_pdf_font_size']                  = 'Taille de police par défault';
$lang['proposal_status_draft']                   = 'Brouillon';
$lang['custom_field_contacts']                   = 'Contacts';
$lang['company_primary_email']                   = 'E-mail principal';
$lang['client_register_contact_info']            = 'Information du contact principal';
$lang['client_register_company_info']            = 'Informations de l\'entreprise';
$lang['contact_permissions_info']                = 'Assurez-vous de définir les permissions appropriées pour ce contact';
$lang['default_leads_kanban_sort']               = 'Triage KanBan des cibles par défaut';
$lang['default_leads_kanban_sort_type']          = 'Tri';
$lang['order_ascending']                         = 'Croissant';
$lang['order_descending']                        = 'Décroissant';
$lang['calendar_expand']                         = 'agrandir';
$lang['proposal_reminders']                      = 'Rappels';
$lang['proposal_set_reminder_title']             = 'Définir les rappels de offre';
$lang['settings_allowed_upload_file_types']      = 'Types de fichiers autorisés';
$lang['no_primary_contact']                      = 'Aucun contact principal n\'est défini pour ce client. Vous devez configurer le login du contact principal sur client. Son recommandé à tous les clients d\'avoir des contacts primaires.';
$lang['leads_merge_customer']                    = 'champs de fusion clients';
$lang['leads_merge_contact']                     = 'champs Contact fusion';
$lang['leads_merge_as_contact_field']            = 'Fusionner comme champ de contact';
$lang['lead_convert_to_client_phone']            = 'Téléphone';
$lang['invoice_status_report_all']               = 'Tous';
$lang['import_contact_field']                    = 'Champ Contact';
$lang['file_uploaded_success']                   = 'Il n\'y a pas d\'erreur, le fichier téléchargé avec succès';
$lang['file_exceeds_max_filesize']               = 'Le fichier téléchargé excède la directive upload_max_filesize dans php.ini';
$lang['file_exceeds_maxfile_size_in_form']       = 'Le fichier téléchargé excède la MAX_FILE_SIZE qui a été spécifié dans le formulaire HTML';
$lang['file_uploaded_partially']                 = 'Le fichier n\'a été que partiellement téléchargé';
$lang['file_not_uploaded']                       = 'Aucun fichier a été téléchargé';
$lang['file_missing_temporary_folder']           = 'Dossier temporaire introuvable';
$lang['file_failed_to_write_to_disk']            = 'Impossible d\'écrire le fichier sur le disque';
$lang['file_php_extension_blocked']              = 'Une extension PHP a arrêté le téléchargement de fichier.';
$lang['calendar_expand']                         = 'Déployer';
$lang['view_pdf']                                = 'Voir PDF';
$lang['expense_repeat_every']                    = 'Répéter chaque';

# Version 1.1.2
$lang['leads_switch_to_kanban']                   = 'Basculer en  mode "kanban"';
$lang['contract_content']                         = 'contrat';
$lang['contract_save']                            = 'Enregistrer contrat';
$lang['contract_send_to_email']                   = 'Envoyer à un courriel';
$lang['contract_send_to_client_modal_heading']    = 'Envoyer contrat courriel';
$lang['contract_send_to']                         = 'Envoyer à';
$lang['contract_send_to_client_attach_pdf']       = 'Joindre PDF';
$lang['contract_send_to_client_preview_template'] = 'Email précédent';
$lang['contract_send_to_client_preview_template'] = 'Aperçu Email Template';
$lang['include_attachments_to_email']             = 'Inclure les pièces jointes au courrier électronique';
$lang['contract_sent_to_client_success']          = 'Le contrat est envoyé avec succès au client';
$lang['contract_sent_to_client_fail']             = 'Échec de l\'envoi contrat';

# Version 1.1.3
$lang['client_invalid_username_or_password'] = 'nom d\'utilisateur ou mot de passe invalide';
$lang['client_old_password_incorrect']       = 'Votre ancien mot de passe est incorrect';
$lang['client_password_changed']             = 'Votre mot de passe a été modifié';

# Version 1.1.4
$lang['total_leads_deleted']                              = 'Nombre total de cibles supprimées: %s';
$lang['total_clients_deleted']                            = 'Nombre total de clients supprimés: %s';
$lang['confirm_action_prompt']                            = 'Êtes-vous sûr de vouloir confirmer cette action?';
$lang['mass_delete']                                      = 'Suppression massive';
$lang['email_protocol']                                   = 'Protocole e-mail';
$lang['add_edit_members']                                 = 'Ajouter/Modifier Membres';
$lang['project_overview_logged_hours']                    = 'Heures de connexion:';
$lang['project_overview_billable_hours']                  = 'Heures facturables:';
$lang['project_overview_billed_hours']                    = 'Heures facturées:';
$lang['project_overview_unbilled_hours']                  = 'Heures non facturées:';
$lang['calendar_first_day']                               = 'Premier jour';
$lang['permission_view']                                  = 'Affichage';
$lang['permission_edit']                                  = 'Modifier';
$lang['permission_create']                                = 'Créer';
$lang['permission_delete']                                = 'Supprimer';
$lang['permission']                                       = 'Permission';
$lang['permissions']                                      = 'Permissions';
$lang['proposals_pipeline']                               = 'Pipeline de offres';
$lang['proposals_pipeline_sort']                          = 'Trier par';
$lang['proposals_sort_open_till']                         = 'Ouvert jusqu\'au';
$lang['proposals_sort_pipeline']                          = 'Commande Pipeline';
$lang['proposals_sort_datecreated']                       = 'Date de création';
$lang['proposals_sort_proposal_date']                     = 'Date de offre';
$lang['is_not_staff_member']                              = 'Ce n\'est pas un membre du personnel';
$lang['lead_created']                                     = 'Créé';
$lang['access_tickets_to_none_staff_members']             = 'Permet aux non membres du personnel d\'accéder aux tickets';
$lang['project_expenses']                                 = 'Dépenses';
$lang['expense_currency']                                 = 'Devise';
$lang['currency_valid_code_help']                         = 'Assurez-vous de bien saisir un code devise valide.';
$lang['week']                                             = 'Semaine';
$lang['weeks']                                            = 'Semaines';
$lang['month']                                            = 'Mois';
$lang['months']                                           = 'Mois';
$lang['year']                                             = 'Année';
$lang['years']                                            = 'Années';
$lang['expense_report_category']                          = 'Catégorie';
$lang['expense_paid_via']                                 = 'Payé via %s';
$lang['item_as_expense']                                  = '[Expense]';
$lang['show_help_on_setup_menu']                          = 'Afficher le menu d\'aide sur le menu de configuration';
$lang['customers_summary_total']                          = 'Nombre total de clients';
$lang['filter_by']                                        = 'Filtrer par';
$lang['re_captcha']                                       = 'nouveau CAPTCHA';
$lang['recaptcha_site_key']                               = 'Clé public';
$lang['recaptcha_secret_key']                             = 'Clé secrète';
$lang['recaptcha_error']                                  = 'Le champ nouveau CAPTCHA aparraît pour vérifier que vous n\'êtes pas un robot.';
$lang['smtp_username']                                    = 'Nom utilisateur SMTP';
$lang['smtp_username_help']                               = 'Ne remplissez ce champ que si votre client mail utilise un nom d\'utilisateur pour la connexion SMTP.';
$lang['pinned_project']                                   = 'Projet épinglé';
$lang['pin_project']                                      = 'Épingler projet';
$lang['unpin_project']                                    = 'Détacher le projet';
$lang['smtp_encryption']                                  = 'Encryption e-mail';
$lang['smtp_encryption_none']                             = 'Aucun';
$lang['show_proposals_on_calendar']                       = 'Offres';
$lang['invoice_project_see_billed_expenses']              = 'Afficher les dépenses qui seront facturés sur cette facture';
$lang['project_overview_expenses']                        = 'Total des dépenses';
$lang['project_overview_expenses_billable']               = 'Dépenses facturables';
$lang['project_overview_expenses_billed']                 = 'Dépenses facturés';
$lang['project_overview_expenses_unbilled']               = 'Dépenses non facturés';
$lang['announcement_date_list']                           = 'Date';
$lang['project_setting_view_finance_overview']            = 'afficher la vue d\'ensemble des finances';
$lang['show_all_tasks_for_project_member']                = 'Permettre à tout le personnel de visualiser toutes les tâches en rapport avec les projects (même les non-membres)';
$lang['not_staff_added_as_project_member']                = 'Vous a ajouté en tant que membre de projet';
$lang['report_expenses_base_currency_select_explanation'] = 'Vous devez sélectionner une devise car le system a trouvé différentes devises pour les dépenses.';

# Version 1.1.6
$lang['project_activity_recorded_expense']   = 'Dépense enregistrée';
$lang['save_customer_and_add_contact']       = 'Sauvegarder et créer contact';
$lang['tickets_chart_weekly_opening_stats']  = 'Stats hedomadaires';
$lang['related_knowledgebase_articles']      = 'Articles associés';
$lang['detailed_overview']                   = 'Vue d\'ensemble des tâches';
$lang['tasks_total_checklists_finished']     = 'Nombre total d\'éléments cochés comme terminé';
$lang['tasks_total_added_attachments']       = 'Nombre total de fichiers joints';
$lang['tasks_total_comments']                = 'Total de commentaires';
$lang['task_finished_on_time']               = 'Fini à temps?';
$lang['task_finished_on_time_indicator']     = 'Oui';
$lang['task_not_finished_on_time_indicator'] = 'Non';
$lang['filter']                              = 'Filtrer';
$lang['task_filter_detailed_all_months']     = 'Tous les mois';
$lang['kb_article_slug']                     = 'Slug';

# Version 1.1.7
$lang['email_template_ticket_warning']          = 'Si le ticket est importé avec un piping mail et que le contact n\'existe pas dans le CRM, les champs ne seront pas replacés.';
$lang['auto_stop_tasks_timers_on_new_timer']    = 'Arrêter toutes les minuterie lancées lorsque\'une nouvelle minuterie démarre';
$lang['notification_when_customer_pay_invoice'] = 'Recevoir des notifications lorsque le client paye la facture (intégré)';
$lang['not_invoice_payment_recorded']           = 'Paiement de nouvelle facture %s';
$lang['email_template_contact_warning']         = 'Si le contact n\'est pas connecté pendant que l\'action  a lieu, les champs fusionnés ne seront pas replacés.';
$lang['change_role_permission_warning']         = 'Le changement des permissions de rôle n\'affecteront pas les permissions des membres qui utilisent ce role.';
$lang['task_copied_successfully']               = 'La tâche à bien été copiée';
$lang['failed_to_copy_task']                    = 'Échec de la duplication de la tâche';
$lang['not_project_file_uploaded']              = 'Nouveau fichier projet ajouté';
$lang['settings_calendar_color']                = 'Couleur %s';
$lang['settings_calendar_colors_heading']       = 'Style';
$lang['reminder']                               = 'Rappel';
$lang['back_to_tasks_list']                     = 'Retour à la liste de tâches';
$lang['copy_task_confirm']                      = 'Confirmer';
$lang['changing_items_affect_warning']          = 'La modification des infos n\'affectera les factures/devis.';
$lang['tax_is_used_in_expenses_warning']        = 'Vous ne pouvez pas mettre à jour cette taxe car elle est appliquée à certains dépenses.';
$lang['note']                                   = 'Note';
$lang['leads_staff_report_converted']           = 'Nombre total de cibles converties';
$lang['leads_staff_report_created']             = 'Nombre total de cibles converties';
$lang['leads_staff_report_lost']                = 'Nombre total de cibles perdues';
$lang['client_go_to_dashboard']                 = 'Revenir au portail';
$lang['show_estimate_reminders_on_calendar']    = 'Rappel des devis';
$lang['show_invoice_reminders_on_calendar']     = 'Rappels des factures';
$lang['calendar_estimate_reminder']             = 'Rappel de devis';
$lang['calendar_invoice_reminder']              = 'Rappel des facture';
$lang['show_proposal_reminders_on_calendar']    = 'Rappels des offres';
$lang['calendar_proposal_reminder']             = 'Rappel d\'offre';
$lang['proposal_due_after']                     = 'Offre due après (jours)';
$lang['project_progress']                       = 'Progression';
$lang['calculate_progress_through_tasks']       = 'Calculer la progression à travers les tâches';
$lang['allow_customer_to_change_ticket_status'] = 'Permettre au client de modifier le statut du ticket dans l\'espace client.';
$lang['switch_to_general_report']               = 'Basculer vers rapport du personnel';
$lang['switch_to_staff_report']                 = 'Basculer vers rapport général';
$lang['generate']                               = 'Générer';
$lang['from_date']                              = 'Date de départ';
$lang['to_date']                                = 'Date de fin';
$lang['not_results_found']                      = 'Aucun résultat';
$lang['lead_lock_after_convert_to_customer']    = 'Ne pas permettre de modifier la cible une fois qu\'elle a été convertie en client (admins pas appliqués)';
$lang['default_pipeline_sort']                  = 'Trie du pipeline par défaut';
$lang['toggle_full_view']                       = 'Basculer en plein écran';
$lang['not_estimate_invoice_deleted']           = 'a supprimé la facture émise';
$lang['not_task_new_comment']                   = 'a commenté la tâche %s';

# Version 1.1.8
$lang['invoice_number_exists']                  = 'Ce numéro de facture existe pour l\'année en cours.';
$lang['estimate_number_exists']                 = 'Ce numéro de devis existe pour l\'année en cours.';
$lang['email_exists']                           = 'cet e-mail  existe déjà';
$lang['not_uploaded_project_file']              = 'Nouveau fichier mis en ligne';
$lang['not_created_new_project_discussion']     = 'Nouvelle discussion de projet créée';
$lang['not_commented_on_project_discussion']    = 'Nouveau commentaire sur la discussion du projet';
$lang['all_staff_members']                      = 'Tous les membres du personnel';
$lang['help_project_permissions']               = 'Le personnel peut voir TOUS les projets sur cet AFFICHAGE. Si vous souhaitez qu\'ils puissent seulement voir les projets qui leur sont affectés (en tant que membre), n\'accordez aucune autorisation d\'AFFICHAGE.';
$lang['help_tasks_permissions']                 = 'VUE permet aux membres du personnel de consulter TOUTES les tâches. Si vous souhaitez qu\'ils puissent seulement voir les tâches qui leur sont affectées ou qu\'ils suivent, n\'accordez aucune autorisation d\'AFFICHAGE.';
$lang['expense_recurring_days']                 = 'Jour(s)';
$lang['expense_recurring_weeks']                = 'Semaine(s)';
$lang['expense_recurring_months']               = 'Mois';
$lang['expense_recurring_years']                = 'Année(s)';
$lang['reset_to_default_color']                 = 'Rétablir la couleur par défaut';
$lang['pdf_logo_width']                         = 'Largeur du logo (PX)';
$lang['drop_files_here_to_upload']              = 'Déposez ici les fichiers que vous souhaitez mettre en ligne';
$lang['browser_not_support_drag_and_drop']      = 'Votre navigateur ne prend pas en charge la fonction glisser-déplacer pour la mise en ligne de vos fichiers';
$lang['remove_file']                            = 'Supprimer fichier';
$lang['you_can_not_upload_any_more_files']      = 'Vous ne pouvez plus charger de fichier';
$lang['custom_field_only_admin']                = 'Ne restreindre que la visibilité des administrateurs';
$lang['leads_default_source']                   = 'Source par défaut';
$lang['clear_activity_log']                     = 'Effacer journal';
$lang['default_contact_permissions']            = 'Permissions de contact par défaut';
$lang['invoice_activity_marked_as_cancelled']   = 'a coché la suppression de la facture';
$lang['invoice_activity_unmarked_as_cancelled'] = 'a défini la décoché la suppression de la facture';
$lang['wait_text']                              = 'Veuillez patienter...';
$lang['projects_summary']                       = 'Sommaire des projets';
$lang['dept_imap_host']                         = 'Hôte IMAP';
$lang['dept_encryption']                        = 'Cryptage';
$lang['dept_email_password']                    = 'Mot de passe';
$lang['dept_email_no_encryption']               = 'Pas de Cryptage';
$lang['failed_to_decrypt_password']             = 'Le décryptage du mot de passe a échoué';
$lang['delete_mail_after_import']               = 'Supprimer l’e-mail après l’importation?';
$lang['expiry_reminder_enabled']                = 'Envoyer un rappel d’expiration';
$lang['send_expiry_reminder_before']            = 'Envoyer un rappel d’expiration avant (JOURS)';
$lang['not_expiry_reminder_sent']               = 'Rappel d’expiration envoyé';
$lang['send_expiry_reminder']                   = 'A envoyé un rappel d’expiration';
$lang['sent_expiry_reminder_success']           = 'Rappel d’expiration bien envoyé';
$lang['sent_expiry_reminder_fail']              = 'Échec de l’envoi du rappel d’expiration';
$lang['leads_default_status']                   = 'Statut par défaut';
$lang['item_description_placeholder']           = 'Désignation de l\'article';
$lang['item_long_description_placeholder']      = 'Description longue';
$lang['item_quantity_placeholder']              = 'Quantité';
$lang['item_rate_placeholder']                  = 'Prix HT';
$lang['tickets_summary']                        = 'Sommaire des tickets';
$lang['tasks_list_priority']                    = 'Priorité';
$lang['ticket_status_db_2']                     = 'En cours';
$lang['ticket_status_db_1']                     = 'Ouvert';
$lang['ticket_status_db_3']                     = 'Réponse envoyée';
$lang['ticket_status_db_4']                     = 'Un instant';
$lang['ticket_status_db_5']                     = 'Fermé';
$lang['ticket_priority_db_1']                   = 'Faible';
$lang['ticket_priority_db_2']                   = 'Moyen';
$lang['ticket_priority_db_3']                   = 'Élevé';
$lang['customer_have_projects_by']              = 'Contient les statuts par projets %s';
$lang['customer_have_proposals_by']             = 'Contient les offres statut %s';
$lang['do_not_redirect_payment']                = 'Ne me redirigez pas vers la page de règlement';
$lang['project_tickets']                        = 'Tickets';
$lang['invoice_report']                         = 'Rapport de facturation';
$lang['payment_modes_report']                   = 'Modes de paiement (transactions)';
$lang['customer_admins']                        = 'Admins client';
$lang['assign_admin']                           = 'Affecter admin';
$lang['customer_admin_date_assigned']           = 'Date d’affectation';
$lang['customer_admin_login_as_client_message'] = 'Bonjour %s. Vous avez été ajouté en tant qu\'administrateur à ce client.';
$lang['ticket_form_validation_file_size']       = 'La taille du fichier doit être inférieure à %s';
$lang['has_transactions_currency_base_change']  = 'La devise par défaut ne peut être modifiée que s\'il n\'existe aucune transaction enregistrée dans cette devise. Supprimer les transactions pour changer la devise initiale';
$lang['customers_sort_all']                     = 'Tout';

# Version 1.1.9
$lang['use_recaptcha_customers_area']    = 'Autoriser une nouvelle vérification captcha sur l’espace client (Login/Inscription)';
$lang['project_marked_as_finished']      = 'Projet terminé';
$lang['project_status_updated']          = 'Statut du projet mis à jour';
$lang['remove_decimals_on_zero']         = 'Supprimer les décimales sur les nombres/devises à zéro décimal (2,00 deviendra 2 et 2,25 sera inchangé)';
$lang['remove_tax_name_from_item_table'] = 'Supprimer le nom de la taxe de la ligne item du tableau';

# Version 1.2.0
$lang['not_billable_expenses_by_categories']      = 'Dépenses non facturables par catégories';
$lang['billable_expenses_by_categories']          = 'Dépenses facturables par catégories';
$lang['format_letter_size']                       = 'A4 Paysage';
$lang['pdf_formats']                              = 'Formats des documents';
$lang['swap_pdf_info']                            = 'Intervertir les infos de l’entreprise et du client (mettre les infos de l’entreprise à droite et celles du client à gauche)';
$lang['expenses_filter_by_categories']            = 'Par Catégories';
$lang['task_copy']                                = 'Dupliquer';
$lang['estimate_status']                          = 'Statut';
$lang['expenses_report_exclude_billable']         = 'Exclure les dépense facturables';
$lang['expenses_total']                           = 'Total';
$lang['estimate_activity_added_attachment']       = 'Fichier joint ajouté';
$lang['show_to_customer']                         = 'Afficher au client';
$lang['hide_from_customer']                       = 'Masquer au client';
$lang['expenses_report_total']                    = 'Total';
$lang['expenses_report']                          = 'Rapport d\'dépenses';
$lang['expenses_report_total_tax']                = 'Taxe totale';
$lang['expenses_detailed_report']                 = 'Rapport détaillé';
$lang['expense_not_billable']                     = 'Non facturable';
$lang['notification_settings']                    = 'Paramétrage de notification';
$lang['staff_with_roles']                         = 'Membres du personnel accrédités d’un rôle';
$lang['specific_staff_members']                   = 'Membres du personnel spécifique';
$lang['proposal_mark_as']                         = 'Définir comme %s';
$lang['kb_report_total_answers']                  = 'Total';
$lang['ticket_message_edit']                      = 'Modifier';
$lang['invoice_files']                            = 'Fichiers des factures';
$lang['estimate_files']                           = 'Fichiers des devis';
$lang['proposal_files']                           = 'Fichiers d’offre';
$lang['invoices_awaiting_payment']                = 'factures en attente de paiement';
$lang['tasks_not_finished']                       = 'La tâche n’est pas terminée';
$lang['outstanding_invoices']                     = 'Factures en attente';
$lang['past_due_invoices']                        = 'Factures échues';
$lang['paid_invoices']                            = 'Factures payées';
$lang['invoice_estimate_year']                    = 'Année';
$lang['task_stats_logged_hours']                  = 'Heures du journal';
$lang['leads_converted_to_client']                = 'Cibles converties';
$lang['task_assigned_from']                       = 'Cette tâche vous a été affectée par %s';
$lang['new_note']                                 = 'Nouvelle note';
$lang['my_tickets_assigned']                      = 'Tickets qui m’ont été affectés';
$lang['filter_by_assigned']                       = 'Par membres affectés';
$lang['staff_stats_total_logged_time']            = 'Temps total de suivi du temps';
$lang['staff_stats_last_month_total_logged_time'] = 'Temps de connexion du mois dernier';
$lang['staff_stats_this_month_total_logged_time'] = 'Temps de connexion du mois en cours';
$lang['staff_stats_last_week_total_logged_time']  = 'Temps de connexion de la semaine dernière';
$lang['staff_stats_this_week_total_logged_time']  = 'Temps de connexion de cette semaine';

// Dont change this becuse are translated before for the projects timesheets and now are only used for readability.
$lang['timesheet_user']       = $lang['project_timesheet_user'];
$lang['timesheet_start_time'] = $lang['project_timesheet_start_time'];
$lang['timesheet_end_time']   = $lang['project_timesheet_end_time'];
$lang['timesheet_time_spend'] = $lang['project_timesheet_time_spend'];
$lang['task_timesheets']      = $lang['project_timesheets'];
$lang['task_log_time_start']  = $lang['project_timesheet_start_time'];
$lang['task_log_time_end']    = $lang['project_timesheet_end_time'];
$lang['task_single_log_user'] = $lang['project_timesheet_user'];

# Version 1.2.2
$lang['milestone_description']                  = 'Description';
$lang['description_visible_to_customer']        = 'Afficher la description au client';
$lang['upcoming_tasks']                         = 'Tâches à venir';
$lang['payment_credit_card_number']             = 'Numéro de carte';
$lang['payment_credit_card_expiration_date']    = 'Date d’expiration';
$lang['payment_billing_email']                  = 'E-mail';
$lang['submit_payment']                         = 'Paiement';
$lang['custom_field_disallow_customer_to_edit'] = 'Ne pas autoriser le client à modifier ce champ';
$lang['project_due_notice']                     = 'Ce projet est en souffrance depuis %s jours';
$lang['not_lead_added_attachment']              = 'a ajouté une nouvelle pièce jointe pour la cible %s';
$lang['lead_note_date_added']                   = 'Note ajoutée : %s';
$lang['recurring_custom']                       = 'Personnalisé';

// Dont translate these, only added for better readability already translated for the expenses custom recurring feature.
$lang['invoice_recurring_months'] = $lang['expense_recurring_months'];
$lang['invoice_recurring_years']  = $lang['expense_recurring_years'];
$lang['invoice_recurring_days']   = $lang['expense_recurring_days'];
$lang['invoice_recurring_weeks']  = $lang['expense_recurring_weeks'];

# Version 1.2.4
$lang['document_direction']                                 = 'Direction';
$lang['notify_project_members_status_change']               = 'Notifier les membres que l\'état du projet est modifié';
$lang['not_project_status_updated']                         = 'État du projet mis à jour de %s à %s';
$lang['ticket_not_found']                                   = 'Ticket introuvable';
$lang['project_not_found']                                  = 'Project introuvable';
$lang['export_project_data']                                = 'Exporte les données du projet';
$lang['total_project_members']                              = 'Nombre de membres total du project';
$lang['total_project_files']                                = 'Fichiers joints';
$lang['total_project_discussions_created']                  = 'Discussions crées';
$lang['project_member']                                     = 'Membre';
$lang['total_project_discussions_comments']                 = 'Nombre de commentaires total';
$lang['staff_total_task_assigned']                          = 'Nombre total de tâches affectées';
$lang['staff_total_comments_on_tasks']                      = 'Commentaires sur les tâches';
$lang['project_members_overview']                           = 'Vue d\'ensemble des membres du projet';
$lang['project_milestones_overview']                        = 'Vue d\'ensemble des étapes majeures';
$lang['total_tasks_in_milestones']                          = 'Nombre total de tâches affectées';
$lang['total_task_members_assigned']                        = 'Nombre total de membres affectés';
$lang['total_task_members_followers']                       = 'Total suiveurs';
$lang['total_milestones']                                   = 'Total des étapes majeures';
$lang['total_project_worked_days']                          = 'Total de jours travaillés';
$lang['finance_overview']                                   = 'Vue d\'ensemble des finances';
$lang['project_custom_fields']                              = 'Champs personnalisés';
$lang['total_tickets_related_to_project']                   = 'Nombre total de tickets liés au projet';
$lang['projects_total_invoices_created']                    = 'Nombre total de factures crées';
$lang['do_not_send_invoice_payment_email_template_contact'] = 'Ne pas envoyer l\'e-mail enregistré des paiements aux contacts des clients';
$lang['no_preview_available_for_file']                      = 'Aucun aperçu disponible pour ce fichier.';
$lang['project_activity_deleted_file_discussion_comment']   = 'Commentaire de discussion du fichier supprimé';
$lang['email_template_discussion_info']                     = 'Ce modèle est utilisé pour les e-mails de commentaire de chaue discussion de projet. (fichiers discussions et discussions ordinnaires)';
$lang['format_a4_portrait_size']                            = 'Portrait';
$lang['only_show_contact_tickets']                          = 'Dans le profil client uniquement, afficher les tickets liés au contact connecté (contact primaire non appliqué)';
$lang['cancel_overdue_reminders_invoice']                   = 'Empêcher l\'envoi de rappels pour cette facture';
$lang['customer_shipping_address_notice']                   = 'Ne pas remplir l\'adresse d\'expédition si vous n\'utilisez l\'adresse d\'expédition sur les factures du client';
$lang['timesheets_overview']                                = 'Vue d\'ensemble des feuilles de présence ';
$lang['invoice_status_draft']                               = 'Brouillon';
$lang['save_as_draft']                                      = 'Sauvegarder en tant que brouillon';
$lang['convert_and_save_as_draft']                          = 'Convertir et sauvegarder en tant que brouillon';
$lang['convert']                                            = 'Convertir';
$lang['exclude_invoices_draft_from_client_area']            = 'Exclure de la zone des clients les factures dont le statut est "Brouillon"';
$lang['invoice_draft_status_info']                          = 'Le statut de cette facture est "Brouillon", celui-ci sera modifié lorsque vous envoyez la facture au client ou lorsque vous la définissez comme "envoyée".';
$lang['task_info']                                          = 'Info de la tâche';
$lang['recurring_tasks']                                    = 'Récurrent';

// Dont translate these, already translated
$lang['task_repeat_every']                         = $lang['expense_repeat_every'];
$lang['task_recurring_months']                     = $lang['expense_recurring_months'];
$lang['task_recurring_years']                      = $lang['expense_recurring_years'];
$lang['task_recurring_days']                       = $lang['expense_recurring_days'];
$lang['task_recurring_weeks']                      = $lang['expense_recurring_weeks'];
$lang['todays_tasks']                              = 'Tâches d\'aujourd\'hui';
$lang['payment_mode_invoices_only']                = 'Factures uniquement';
$lang['payment_mode_expenses_only']                = 'Dépenses uniquement';
$lang['task_no_checklist_items_found']             = 'Éléments de la liste de contrôle introuvables pour cette tâche';
$lang['task_no_description']                       = 'Aucune description pour cette tâche';
$lang['expenses_reminders']                        = 'Relances';
$lang['expense_set_reminder_title']                = 'Définir relance d\'dépenses';
$lang['calendar_expense_reminder']                 = 'Relance d\'dépenses';
$lang['recurring_task']                            = 'Tâches récurrentes';
$lang['disable_email_from_being_sent']             = 'Désactiver l\'envoi cet e-mail';
$lang['not_sent_indicator']                        = 'Non envoyé';
$lang['proposal_status_revised']                   = 'Contrôlé';
$lang['customer_currency_change_notice']           = 'Si le client utilise une autre devise que celle définie par défaut, assurez-vous de sélectionner la devise adéquate pour ce client. Il est impossible de modifier la devise si les transactions sont enregistrées.';
$lang['click_to_add_content']                      = 'Cliquez ici pour ajouter du contenu';
$lang['related_to_project']                        = 'Ce %s est associé à %s : %s';
$lang['back_to_lead']                              = 'Revenir à la cible';
$lang['add_task_timer_started_warning']            = 'Désactiver la minuterie lancée pour cette tâche afin de pouvoir ajouter une nouvelle minuterie manuellement.';
$lang['sending_email_contact_permissions_warning'] = 'Échec de la sélection automatique des contacts clients. Veuillez vous assurer que le client dispose de contacts associés à la permission %s';

# Version 1.2.6
$lang['currently_supported_currencies']                       = 'Devises actuellement prises en charge';
$lang['authorize_notice']                                     = 'Le protocole SSL est requis si vous utilisez l\'API de paiement Authorize.net AIM. Authorize.net ne prend en charge qu\'une devise par compte. Assurez-vous de n\'ajouter qu\'une devise associée à votre compte Authorize.net dans le champ "Devise".';
$lang['settings_paymentmethod_developer_mode']                = 'Mode développeur';
$lang['payment_cardholder_name']                              = 'Propriétaire de la carte';
$lang['settings_paymentmethod_authorize_api_login_id']        = 'ID Login API';
$lang['settings_paymentmethod_mollie_api_key']                = 'Clé API';
$lang['settings_paymentmethod_authorize_api_transaction_key'] = 'ID transaction API';
$lang['settings_paymentmethod_authorize_secret_key']          = 'Clé secrète';
$lang['leads_report_converted_notice']                        = 'Seules les cibles appartenant à la liste des Client par défaut seront considérées comme des cibles converties, si une cible apparaît dans la liste des Client par défaut sans être convertie, le client sera quand même comptabilisé comme une cible';
$lang['payment_method']                                       = 'Méthode de paiement';
$lang['payment_method_info']                                  = 'Certaines passerelles de paiement prennent en charge différent/plusieurs méthodes de paiement comme les cartes de crédit, Paypal, virement banquaire.';

# Version 1.2.7
$lang['dropbox_app_key']                                    = 'Clé APP Dropbox APP';
$lang['project_invoice_select_all_expenses']                = 'Sélectionner toutes les dépenses';
$lang['role_update_staff_permissions']                      = 'Mise à jour de toutes les autorisations des membres du personnel qui utilisent ce rôle';
$lang['customer_active']                                    = 'Actif';
$lang['note_updated_successfully']                          = 'Échec de la mise à jour';
$lang['update_note']                                        = 'Note de mise à jour';
$lang['update_comment']                                     = 'Commentaire de mise à jour';
$lang['comment_updated_successfully']                       = 'Commentaire actualisé';
$lang['staff_send_welcome_email']                           = 'Envoyer e-mail de bienvenue';
$lang['proposal_warning_email_change']                      = 'E-mail modifié comme ceci : %s. Ce %s est lié à une/des offre(s). Souhaitez-vous mettre à jour tous les e-mail liés à %s?';
$lang['update_proposal_email_yes']                          = 'Oui, mettre à jour tous les e-mail liés.';
$lang['update_proposal_email_no']                           = 'Non, je ferai les mises à jour manuellement.';
$lang['proposals_emails_updated']                           = 'Tous les e-mails liés à ce %s on été mis à jour comme ceci : %s';
$lang['custom_field_company']                               = 'Entreprise';
$lang['actions']                                            = 'Actions';
$lang['project_mark_as']                                    = 'Marquer comme %s';
$lang['todo_edit_title']                                    = 'Modifier élément todo';
$lang['additional_action_required']                         = 'Une action supplémentaire est requise !';
$lang['project_mark_tasks_finished_confirm']                = 'Confirmer';
$lang['project_marked_as_success']                          = 'Projet bien défini comme %s';
$lang['project_marked_as_failed']                           = 'Impossible de définir le projet comme %s';
$lang['auto_assign_customer_admin_after_lead_convert']      = 'Affectation en tant qu\'admin client une fois la conversion confirmée';
$lang['auto_assign_customer_admin_after_lead_convert_help'] = 'Si cette option est OUI, le membre du personnel ayant converti la cible en client sera automatiquement défini comme admin du client. REMARQUE : Cette option sera applicable uniquement sur les membres du personnel qui ne disposent d\'aucune permission pour l\'AFFICHAGE clients';
$lang['auto_close_tickets_disable']                         = 'Mettre 0 pour désactiver';
$lang['task_checklist_item_completed_by']                   = 'Réalisé par %s';
$lang['staff_email_signature_help']                         = 'Si ce champ est vide, la signature e-mail défini dans les paramètres par défaut sera utilisée';
$lang['default_task_priority']                              = 'Priorité par défaut';
$lang['project_send_created_email']                         = 'Envoyé l\'e-mail de projet créé';

# Version 1.2.8
$lang['show_transactions_on_invoice_pdf']            = 'Afficher les paiements sur factures (transactions) en PDF';
$lang['bulk_actions']                                = 'Actions en masse';
$lang['additional_filters']                          = 'Filtres Additionnels';
$lang['expenses_available_to_bill']                  = 'Dépenses éligibles à la facturation';
$lang['bulk_action_customers_groups_warning']        = 'Si vous ne sélectionnez aucun groupe tous les groupes liés à ce clients seronts supprimés.';
$lang['customer_attachments_show_in_customers_area'] = 'Afficher dans l\'espace client';
$lang['customer_attachments_show_notice']            = 'Seuls les fichiers téléversé depuis l\'espace client seront affiché ou caché dans ce même espace.';
$lang['customer_profile_files']                      = 'Fichiers';
$lang['no_files_found']                              = 'Aucun Fichier trouvé';
$lang['custom_field_column']                         = 'Grille (Bootstrap colonne eq. 12) - Max à 12';
$lang['task_status']                                 = 'Statut';
$lang['task_status_1']                               = 'Non commencée';
$lang['task_status_2']                               = 'Attente de Feedback';
$lang['task_status_3']                               = 'En Test';
$lang['task_status_4']                               = 'En cours';
$lang['task_status_5']                               = 'Achevée';
$lang['task_mark_as']                                = 'Marquer comme %s';
$lang['task_marked_as_success']                      = 'Tâche marquée comme %s avec succès';
$lang['search_tasks']                                = 'Recherche de Tâches';
$lang['tasks_kanban_limit']                          = 'Limiter les rangées de tâches "kanban" par statut';
$lang['show_on_invoice_on_pdf']                      = 'Afficher %s sur les factures PDF';
$lang['show_pay_link_to_invoice_pdf']                = 'Afficher le lien de paiement sur les factures PDF (Pas d\'application sur facture annulée)';
$lang['no_leads_found']                              = 'Pas de prospects trouvés';
$lang['created_today']                               = 'Ajouté aujourd\'hui';
$lang['total_tasks_deleted']                         = 'Total de Tâches Effacées: %s';
$lang['total_tickets_delete']                        = 'Total des Tickets Effacés: %s';
$lang['format_letter_portrait']                      = 'Mode Portrait';
$lang['format_letter_landscape']                     = 'Mode Paysage';
$lang['period_datepicker']                           = 'Période';
$lang['total_by_hourly_rate']                        = 'Total Par Taux Horaire';
$lang['staff_hourly_rate']                           = $lang['task_hourly_rate'];

// &#37; is for % so the system can confuse for the original fields like %s
$lang['remove_tax_name_from_item_table_help'] = 'ex. Article TAXE 15&#37; sera affiché 15&#37; sans le nom de la taxe (Non appliqué si plusieurs taxes ont le même nom et le même pourcentage pour cet article)';
$lang['back_to_project']                      = 'Retour au Projet';
$lang['view_kanban']                          = 'Afficher en KanBan';
$lang['invoice_is_overdue']                   = 'Cette facture est en retard de paiement de %s jours';

# Version 1.2.9
$lang['time_decimal']                            = 'Temps (décimal)';
$lang['time_h']                                  = 'Temps (h)';
$lang['proposal_number_prefix']                  = 'Numéro de Prefix de Devis';
$lang['settings_number_padding_prefix']          = 'Remplissage de nombres zero pour le format de prefix <br /> <small>ex. Si la valeur est à 3 le nombre sera formaté en: 005 ou 025</small>';
$lang['this_week_payments']                      = 'Paiements de cette semaine';
$lang['last_week_payments']                      = 'Paiements de la semaine passée';
$lang['not_published_new_post']                  = 'Nouveau article publié';
$lang['expense_name']                            = 'Nom';
$lang['expense_name_help']                       = 'A usage personnel';
$lang['adjustments']                             = 'Ajustements';
$lang['payments_received']                       = 'Paiements reçus';
$lang['not_lead_activity_created_proposal']      = 'Nouveau devis créé - %s';
$lang['lead_title']                              = 'Position';
$lang['lead_address']                            = 'Adresse';
$lang['lead_city']                               = 'Ville';
$lang['lead_state']                              = 'Région';
$lang['lead_country']                            = 'Pays';
$lang['lead_zip']                                = 'Code Postal';
$lang['lead_is_public_yes']                      = 'Oui';
$lang['lead_is_public_no']                       = 'Non';
$lang['lead_info']                               = 'Informations du Lead';
$lang['lead_general_info']                       = 'Informations Générales';
$lang['lead_latest_activity']                    = 'Dernières Activités';
$lang['item_description_new_lines_notice']       = 'Le retour à la ligne n\'est pas supporté dans le case DESIGNATION. La description vous permet le retour à la ligne.';
$lang['estimates_report']                        = 'Rapports de Devis';
$lang['confirm']                                 = 'Confirmer';
$lang['delete_staff']                            = 'Supprimer ce membre du Staff';
$lang['delete_staff_info']                       = 'Les données de ce membre doivent être transférées sur un autre membre. Veuillez sélectionner un utilisateur pour le transfert de ces données.';
$lang['estimate_items']                          = 'Articles de Devis';
$lang['no_proposals_found']                      = 'Aucune offre trouvée';
$lang['no_estimates_found']                      = 'Pas de Devis trouvé';
$lang['pipeline_limit_status']                   = 'Limite de Pipeline par statut';
$lang['settings_update']                         = 'Mise à jour';
$lang['purchase_key']                            = 'Clé d\'dépenses';
$lang['update_now']                              = 'Mettre à jour maintenant';
$lang['update_available']                        = 'Une mise à jour est disponible';
$lang['latest_version']                          = 'Dernière Version';
$lang['your_version']                            = 'Votre Version';
$lang['using_latest_version']                    = 'Vous utilisez la dernière version';
$lang['mark_as_active']                          = 'Marquer comme active';
$lang['customer_inactive_message']               = 'Ce profil client est inactif et certaines fontionnalités sont limitées';
$lang['active_customers']                        = 'Clients Actifs';
$lang['inactive_active_customers']               = 'Clients Inactifs';
$lang['include_proposal_items_merge_field_help'] = 'Inclure les éléments de l\'offre avec le champ de fusion n\'importe où dans le contenu de l\'offre comme %s';
$lang['all_data_synced_successfully']            = 'Toutes les données synchronisées avec succés';
$lang['sync_now']                                = 'Synchroniser Maintenant';
$lang['sync_data']                               = 'Synchroniser les Données';
$lang['sync_proposals_up_to_date']               = 'Toutes les offres sont à jour';
$lang['proposal_sync_1_info']                    = 'Toutes les données des offres sont enregistrées séparemment après la création. Mettre à jour les infos de %s n\'affectera pas les offres précédentes pour ce %s.';
$lang['proposal_sync_2_info']                    = 'Si vous avez recemment mis à jour vos infos de %s vous pouvez synchroniser toutes les données liées à cette offre. Voici les liste des champs qui peuvent être synchronisés.';

# Version 1.3.0
$lang['expense_include_additional_data_on_convert'] = 'Inclure les informations additionnelles à la description longue de cet article depuis cette dépense.';

# Version 1.4.0
$lang['calendar_events_limit']                              = 'Limite du Calendrier des Evènements (Vue par Mois et par Semaine)';
$lang['show_page_number_on_pdf']                            = 'Afficher le numéro de la page sur le PDF';
$lang['customer_active_inactive_help']                      = 'Ne sera pas affiché dans le menu déroulant en créant un nouvel enregistrement';
$lang['item_groups']                                        = 'Groupes';
$lang['item_group']                                         = 'Groupe d\'article';
$lang['item_group_name']                                    = 'Nom du groupe';
$lang['new_item_group']                                     = 'Nouveau Groupe';
$lang['show_setup_menu_item_only_on_hover']                 = 'Afficher l\'élément du menu de configuration seulement lors du survol de la souris sur la sidebar';
$lang['internal_article']                                   = 'Article Interne';
$lang['expenses_created_from_this_recurring_expense']       = 'Dépenses créés depuis cet dépenses récurrent';
$lang['convert_to_task']                                    = 'Convertir en Tâche';
$lang['next_invoice_date']                                  = 'Prochaine date de Facture: %s';
$lang['next_expense_date']                                  = 'Prochaine date de Dépense: %s';
$lang['invoice_recurring_from']                             = 'Cette facture est créée depuis la facture récurrente avec le numéro: %s';
$lang['expense_recurring_from']                             = 'Cette dépense est créée depuis cette dépense récurrente: %s';
$lang['child_invoices']                                     = 'Factures Parentes';
$lang['child_expenses']                                     = 'Dépenses Parents';
$lang['no_announcements']                                   = 'Aucune Annonces';
$lang['unit']                                               = 'Unité';
$lang['permission_view_own']                                = 'Afficher (Votre)';
$lang['permission_global']                                  = 'Globale';
$lang['permission_customers_based_on_admins']               = 'Basé sur les admins de client';
$lang['permission_payments_based_on_invoices']              = 'Basé sur l\'autorisation (vos) de visualisation des factures';
$lang['permission_projects_based_on_assignee']              = 'Si les membres du personnel ne disposent pas d\'une vue d\'autorisation (globale), seuls les projets auxquels le membre du personnel est ajouté en tant que membre du projet.';
$lang['permission_tasks_based_on_assignee']                 = 'Si le membre du personnel n\'a pas l\'autorisation afficher (Globale) sera affiché seulement les tâches où le membre du personnel est suiveur, assigné, la tâche est public ou dans réglage->paramètres->tâches-> Autoriser tout le personnel à voir toutes les tâches liées aux projets est défini sur OUI lorsque la tâche est liée au projet.';
$lang['settings_paymentmethod_default_selected_on_invoice'] = 'Sélectionné par défaut sur facture';
$lang['paymentmethod_braintree_merchant_id']                = 'ID du Marchand';
$lang['paymentmethod_braintree_private_key']                = 'Clé privée';
$lang['paymentmethod_braintree_public_key']                 = 'Clé Public';
$lang['company_requires_vat_number_field']                  = 'La société exige l\'utilisation du champ Numéro de TVA';
$lang['no_company_view_profile']                            = 'Particulier - Afficher le Profil';
$lang['company_is_required']                                = 'Le champ Société est obligatoire?';
$lang['estimate_invoiced']                                  = 'Facturé';
$lang['file_date_uploaded']                                 = 'Date du téléversement';
$lang['allow_contact_to_delete_files']                      = 'Autoriser les contacts à supprimer leurs propres fichiers téléchargés depuis la zone clients';
$lang['file']                                               = 'Fichier';
$lang['customer_contact_person_only_one_allowed']           = 'Un seul contact est autorisé lorsque le champ d\'entreprise n\'est pas rempli. Le système émettra ce client comme personne';
$lang['web_to_lead']                                        = 'Piste Web';
$lang['web_to_lead_form']                                   = 'Formulaire de piste Web';
$lang['new_form']                                           = 'Nouveau Formulaire';
$lang['form_name']                                          = 'Nom du Formulaire';
$lang['cf_option_in_use']                                   = 'Une option que vous avez supprimée est en cours d\'utilisation et ne peut pas être supprimée. L\'option est automatiquement ajoutée aux options existantes.';
$lang['form_builder']                                       = 'Générateur de formulaire';
$lang['form_information']                                   = 'Informations & Réglages du formulaire';
$lang['form_builder_create_form_first']                     = 'Créez d\'abord le formulaire pour pouvoir utiliser le générateur de formulaires.';
$lang['notify_assigned_user']                               = 'Responsable';
$lang['form_recaptcha']                                     = 'utiliser Google Recaptcha';
$lang['form_lang_validation']                               = 'Langage';
$lang['form_lang_validation_help']                          = 'Pour les messages de validation';
$lang['form_btn_submit_text']                               = 'Texte du bouton Envoyer';
$lang['form_success_submit_msg']                            = 'Le message à montrer après le formulaire est soumis succesfuly';
$lang['total_submissions']                                  = 'Total des soumissions';
$lang['form_integration_code']                              = 'Code d\'intégration';
$lang['not_lead_imported_from_form']                        = 'Nouvelle piste importé depuis le formulaire - %s';
$lang['not_lead_activity_log_attachment']                   = 'Pièce jointe importée du formulaire - %s';
$lang['form_integration_code_help']                         = 'Copier et coller le code n\'importe où dans votre site pour afficher le formulaire, plus vous pouvez ajuster la largeur et la hauteur px pour s\'adapter à votre site Web.';
$lang['invoice_not_found']                                  = 'Facture introuvable';
$lang['estimate_not_found']                                 = 'Devis introuvable';
$lang['expense_not_found']                                  = 'Dépense introuvable';
$lang['proposal_not_found']                                 = 'Offre introuvable';
$lang['new_task_assigned_non_user']                         = 'Nouvelle tâche vous est assignée - %s';
$lang['no_child_found']                                     = 'Pas de parents %s trouvés';
$lang['company_vat_number']                                 = 'TVA';
$lang['not_lead_assigned_from_form']                        = 'Le nouveau prospect vous est attribué';
$lang['not_lead_activity_assigned_from_form']               = 'Prospect attribué à %s';
$lang['form_allow_duplicate']                               = 'Autoriser les doublons de  %s à être insérés dans la base de données?';
$lang['track_duplicate_by_field']                           = 'Empêcher les doublons sur le champ';
$lang['and_track_duplicate_by_field']                       = '+ champ (Laisser vierge pour suivre les doublons seulement par 1 champ)';
$lang['create_the_duplicate_form_data_as_task']             = 'Créer des données dupliquées en %s comme tâche et assigner à un membre du personnel responsable';
$lang['create_the_duplicate_form_data_as_task_help']        = 'Utilisé pour un examen plus approfondi de la soumission et prendre les mesures nécessaires';
$lang['currently_selected']                                 = 'Sélectionné actuellement';
$lang['search_ajax_empty']                                  = 'Sélectionner et commencer à écrire';
$lang['search_ajax_placeholder']                            = 'Saisissez votre recherche...';
$lang['search_ajax_searching']                              = 'Recherche...';
$lang['search_ajax_initialized']                            = 'Taper pour rechercher';
$lang['lead_description']                                   = 'Description';
$lang['lead_website']                                       = 'Site web';
$lang['invoice_activity_auto_converted_from_estimate']      = 'Facture auto générée à partir du devis avec le nombre %s';
$lang['hour_of_day_perform_auto_operations']                = 'Heure du jour pour effectuer des opérations automatiques';
$lang['hour_of_day_perform_auto_operations_format']         = '24 heures format ex. 9 pour 9h ou 15 pour 3h.';
$lang['inv_hour_of_day_perform_auto_operations_help']       = 'Utilisé pour les factures récurrentes, les avis en souffrance etc..';
$lang['use_minified_files']                                 = 'Utiliser la version des fichiers minifiés pour css et js (uniquement les fichiers système)';

# Version 1.5.0
$lang['logo_favicon_changed_notice']       = 'Changement de logo ou favicon détecté. Si vous apercevez encore l\'original, tenter de vider le cache de votre navigateur';
$lang['kb_search_articles']                = 'Recherche dans la base de connaissances';
$lang['kb_search']                         = 'Recherche';
$lang['have_a_question']                   = 'Vous avez une question?';
$lang['card_expiration_year']              = 'Année d\'expiration';
$lang['card_expiration_month']             = 'Mois d\'expiration';
$lang['client_website']                    = 'Site web';
$lang['search_project_members']            = 'Recherche les membres du projet';
$lang['cf_translate_input_link_title']     = 'Titre';
$lang['cf_translate_input_link_url']       = 'URL';
$lang['cf_translate_input_link_tip']       = 'Cliquez ici pour ajouter un lien';
$lang['task_edit_delete_timesheet_notice'] = 'La tâche de la timesheet est %s, vous ne pouvez %s la timesheet.';
$lang['department_username']               = 'IMAP Login';
$lang['department_username_help']          = 'Remplissez uniquement ce champ si votre serveur IMAP utilise votre adresse comme login. Vous devez tout de même ajouter votre adresse mail.';
$lang['total_tickets_deleted']             = 'Nombre de tickets supprimé: %s';

# Version 1.5.1
$lang['ticket_linked_to_project']                                = 'Ce ticket est lié à un projet: %s';
$lang['only_own_files_contacts']                                 = 'Vos contacts voient untiquement leurs propres fichiers uploadés';
$lang['only_own_files_contacts_help']                            = 'Si vous partagez ce fichier manuellement depuis un client vers les autres contacts, le fichier sera visible de tous.';
$lang['share_file_with']                                         = 'Partager le fichier avec';
$lang['file_share_visibility_notice']                            = 'Ce fichier n\'est pas partager avec vos contacts, changer la visibilité et recharger';
$lang['share_file_with_show']                                    = 'Ce fichier est partagé avec: %s';
$lang['allow_primary_contact_to_view_edit_billing_and_shipping'] = 'Permettre au contact principale de voir et éditer les informations de facturations et livraisons';
$lang['estimate_due_after']                                      = 'Echéance du devis après (jours)';

# Version 1.6.0
$lang['my_timesheets']                                   = 'Ma Feuille de temps';
$lang['today']                                           = 'Aujourd\'hui';
$lang['open_in_dropbox']                                 = 'Ouvrir dans Dropbox';
$lang['show_primary_contact']                            = 'Voir le nom complet du contact principale sur %s';
$lang['view_members_timesheets']                         = 'Voir toutes les feuilles de temps';
$lang['priority']                                        = 'Priorité';
$lang['fetch_from_google']                               = 'Aller chercher depuis Google';
$lang['customer_fetch_lat_lng_usage']                    = 'Remplir l\'adresse, ville et pays avant de récupérer les meilleurs résultats.';
$lang['g_search_address_not_found']                      = 'L\'adresse est introuvable, merci de réessayer';
$lang['proposals_report']                                = 'Rapport des offres';
$lang['staff_members_open_tickets_to_all_contacts_help'] = 'Si un collègue ne possède pas les permissions requises pour le client, il ne pourra créé un ticket uniquement dans la partie ADMIN du client auquel il est assigné.';
$lang['staff_members_open_tickets_to_all_contacts']      = 'Permettre au personnel d\'ouvrir des tickets à tous les contacts?';
$lang['charts_based_report']                             = 'Rapport via graphique';
$lang['responsible_admin']                               = 'Admin responsable';
$lang['tags']                                            = 'Tags';
$lang['tag']                                             = 'Tag';
$lang['customer_map_notice']                             = 'Ajouter la longitude et latitude dans le profil client pour voir la carte ici';
$lang['default_view']                                    = 'Vue par défaut';
$lang['day']                                             = 'Jour';
$lang['agenda']                                          = 'Agenda';
$lang['timesheet_tags']                                  = 'Tag des feuilles de temps';
$lang['show_more']                                       = 'Voir plus';
$lang['show_less']                                       = 'Voir moins';
$lang['project_completed_date']                          = 'Date complète';
$lang['language']                                        = 'Langue';
$lang['this_week']                                       = 'Cette semaine';
$lang['last_week']                                       = 'Semaine dernière';
$lang['this_month']                                      = 'Ce mois';
$lang['last_month']                                      = 'Mois dernier';
$lang['no_description_project']                          = 'Aucune description pour ce projet';
$lang['sales_string']                                    = 'Ventes';
$lang['no_project_members']                              = 'Aucun membres pour ce projet';
$lang['search_by_tags']                                  = 'Utilisez # + tagname pour rechercher par tags';
$lang['project_status_5']                                = 'Annulé';

# Version 1.7.0
$lang['not_activity_new_reminder_created']        = 'Définir un nouveau rappel pour %s avec la date %s';
$lang['not_activity_new_task_created']            = 'Nouvelle tâche créée - %s';
$lang['recurring_invoice_draft_notice']           = 'Cette facture concerne le projet de statut, vous devez marquer cette facture comme envoyée. Les factures récurrentes avec statut ne seront pas recréées par le travail de cron.';
$lang['recurring_recreate_hour_notice']           = '%s sera recréé à l\'heure spécifique du jour en fonction du paramètre situé à l\'installation-> Paramètre-Cron Job';
$lang['invoice_project_include_timesheets_notes'] = 'Inclure chaque note de feuille de temps dans la description de l\'élément';
$lang['events']                                   = 'Événements';
$lang['clear']                                    = 'Supprimer';
$lang['auto_mark_as_public']                      = 'Marquer automatiquement comme public';
$lang['time_format']                              = 'Format de l\'heure';
$lang['time_format_24']                           = '24 heures';
$lang['time_format_12']                           = '12 heures';
$lang['delete_activity_log_older_then']           = 'Supprimer le journal d\'activité du système plus ancien que X mois';
$lang['mark_as_read']                             = 'Marquer comme lu';
$lang['mark_all_as_read']                         = 'tout marquer comme lu';
$lang['tax_1']                                    = 'Taxe 1';
$lang['tax_2']                                    = 'Taxe 2';
$lang['total_with_tax']                           = 'Total avec impôts';
$lang['new_task_auto_assign_current_member']      = 'Récepteur de tâches d\'attribution automatique lorsque la nouvelle tâche est créée';
$lang['new_task_auto_assign_current_member_help'] = 'Non appliqué si la tâche est liée au projet et le créateur n\'est pas membre du projet';
$lang['copy_project_tasks_status']                = 'Copier le statut des tâches';
$lang['tasks_summary']                            = 'Sommaire des tâches';
$lang['vault']                                    = 'Coffre Fort';
$lang['new_vault_entry']                          = 'Ajouter des données';
$lang['server_address']                           = 'Adresse du serveur';
$lang['port']                                     = 'Port';
$lang['vault_username']                           = 'Nom d\'utilisateur';
$lang['vault_password']                           = 'Mot de passe ';
$lang['vault_description']                        = 'Brève description';
$lang['vault_entry']                              = 'Entrée de coffre-fort';
$lang['no_port_provided']                         = 'Non fourni';
$lang['view_password']                            = 'Afficher le mot de passe';
$lang['security_reasons_re_enter_password']       = 'Pour des raisons de sécurité, veuillez entrer votre mot de passe ci-dessous';
$lang['password_change_fill_notice']              = 'Ne remplissez que le mot de passe si vous souhaitez modifier le mot de passe';
$lang['vault_password_user_not_correct']          = 'Votre mot de passe n\'est pas correct, veuillez réessayer';
$lang['no_vault_entries']                         = 'Coffre fort vide.';
$lang['vault_entry_created_from']                 = 'Cette entrée de coffre-fort est créée par %s';
$lang['vault_entry_last_update']                  = 'Dernière mise à jour par %s';
$lang['vault_entry_visible_to_all']               = 'Visible à tous les membres du personnel';
$lang['vault_entry_visible_creator']              = 'Visible uniquement pour moi (l\'administrateur n\'est pas exclu)';
$lang['vault_entry_visible_administrators']       = 'Visible uniquement pour les administrateurs';
$lang['my_reminders']                             = 'Mes rappels';
$lang['reminder_related']                         = 'Relatif à';
$lang['event_notification']                       = 'Notification';
$lang['days']                                     = 'Journées';
$lang['reminder_notification_placeholder']        = 'Rappel 30 minutes avant';
$lang['event_color']                              = 'Couleur de l\'événement';
$lang['group_by_task']                            = 'Grouper par tâche';
$lang['save']                                     = 'Sauvegarder';
$lang['disable_languages']                        = 'Désactiver les langues';

# Version 1.8.0
$lang['not_customer_viewed_invoice']                         = 'La facture %s a été consultée';
$lang['not_customer_viewed_estimate']                        = 'Le devis %s a été consulté';
$lang['not_customer_viewed_proposal']                        = 'L\'offre %s a été consultée';
$lang['display_inline']                                      = 'Affichage en ligne';
$lang['email_header']                                        = 'Header prédéfini';
$lang['email_footer']                                        = 'Footer prédéfini';
$lang['exclude_proposal_from_client_area_with_draft_status'] = 'Exclure les offres en brouillon de l\'espace client';
$lang['pusher_app_key']                                      = 'APP Key';
$lang['pusher_app_secret']                                   = 'APP Secret';
$lang['pusher_app_id']                                       = 'APP ID';
$lang['pusher_cluster_notice']                               = 'Laisser vide pour utiliser les paramètres par défaut.';
$lang['pusher_enable_realtime_notifications']                = 'Activer les notifivations en direct';
$lang['task_is_overdue']                                     = 'Cette tache a expiré';
$lang['this_year']                                           = 'Cette année';
$lang['last_year']                                           = 'Année précédente';
$lang['customer_statement']                                  = 'Relevé de compte';
$lang['customer_statement_for']                              = 'Relevé de compte pour %s';
$lang['account_summary']                                     = 'Relevé de compte';
$lang['statement_beginning_balance']                         = 'Montant initial du solde';
$lang['invoiced_amount']                                     = 'Montant de facture';
$lang['amount_paid']                                         = 'Montant payé';
$lang['statement_from_to']                                   = '%s à %s';
$lang['customer_statement_info']                             = 'Montrer toutes les factures et paiements entre le %s et %s';
$lang['balance_due']                                         = 'Solde du';
$lang['statement_heading_date']                              = 'Date';
$lang['statement_heading_details']                           = 'Détails';
$lang['statement_heading_amount']                            = 'Montant';
$lang['statement_heading_payments']                          = 'Paiement';
$lang['statement_heading_balance']                           = 'Solde';
$lang['statement_invoice_details']                           = 'Facture %s - du le %s';
$lang['statement_payment_details']                           = 'Paiement (%s) de la facture %s';
$lang['statement_bill_to']                                   = 'A';
$lang['send_to_email']                                       = 'Envoyer par email';
$lang['statement_sent_to_client_success']                    = 'Le document a été envoyé au client';
$lang['statement_sent_to_client_fail']                       = 'Un problème est survenu lors de l\'envoi du document';
$lang['view_account_statement']                              = 'Voir le compte facture';
$lang['text_not_recommended_for_servers_limited_resources']  = 'Non recommandé si le serveur a des ressources limitées.';
$lang['tasks_bull_actions_assign_notice']                    = 'Si la tâche est liée à un projet et que vous la lié à un collègue ne faisant pas partie du projet, celu-ci fera automatiquement partie du projet';
$lang['company_information']                                 = 'Information de société';
$lang['ticket_form']                                         = 'Formulaire du ticket';
$lang['ticket_form_subject']                                 = 'Sujet';
$lang['ticket_form_name']                                    = 'Votre nom';
$lang['ticket_form_email']                                   = 'Adresse mail';
$lang['ticket_form_department']                              = 'Département';
$lang['ticket_form_message']                                 = 'Message';
$lang['ticket_form_priority']                                = 'Priorité';
$lang['ticket_form_service']                                 = 'Service';
$lang['ticket_form_submit']                                  = 'Envoyer';
$lang['ticket_form_attachments']                             = 'Fichier joint';

$lang['success_submit_msg']                       = 'Merci de nous avoir contacté. Nous revenons vers vous rapidement.';
$lang['vault_entry_share_on_projects']            = 'Partager ces données de projets avec les membres du projet';
$lang['project_shared_vault_entry_login_details'] = 'Voir les détails de connexion du client';
$lang['iso_code']                                 = 'Code ISO';
$lang['estimates_not_invoiced']                   = 'Pas facturé';
$lang['show_on_ticket_form']                      = 'Montrer le ticket sur le formulaire';
$lang['cancel_upload']                            = 'Annuler upload';
$lang['show_table_export_button']                 = 'Montrer le bouton d\'exportation';
$lang['show_table_export_all']                    = 'A tous les membres du staff';
$lang['show_table_export_admins']                 = 'Seulement les admins';
$lang['show_table_export_hide']                   = 'Cacher le boutton export à tous les membres du staff';
$lang['task_created_by']                          = 'Créé par %s';
$lang['validation_extension_not_allowed']         = 'Extension de fichier non permise';
$lang['allow_staff_view_proposals_assigned']      = 'Permettre aux membres du staff de voir les offres auxquels ils sont assignés';
$lang['task_users_working_on_tasks_multiple']     = '%s travaille actuellement sur cette tâche';
$lang['task_users_working_on_tasks_single']       = '%s travail actuellement sur cette tâche';

# Version 1.9.0
$lang['estimated_hours']                               = 'Heures estimées';
$lang['two_factor_auth_failed_to_send_code']           = 'Erreur de l\'envoie du code par email, les informations SMTP ne doivent pas être bien configurée';
$lang['two_factor_auth_code_sent_successfully']        = 'Un email a été envoyé à %s avec le code de vérification pour vérifier votre login';
$lang['enable_two_factor_authentication']              = 'Autoriser l\'authentification en deux étapes';
$lang['two_factor_authentication_info']                = 'L\'authentification en deux temps est réalisée par email, avant d\'activer cette option soyez certains de votre configuration SMTP. Une clé d\'authentification unique sera envoyée à l\'adresse email lors de la connexion.';
$lang['timesheets_overview_all_members_notice_admins'] = 'La liste complète des feuilles de temps de tous les utilisateurs ne sont visibles que par les administrateurs.';
$lang['two_factor_authentication']                     = 'Authentification en deux temps';
$lang['two_factor_authentication_code']                = 'Code';
$lang['admin_two_factor_auth_heading']                 = 'Code d\'authentification';
$lang['two_factor_code_not_valid']                     = 'Code authentification non valide';
$lang['back_to_login']                                 = 'Retourner à la page de connexion';
$lang['enter_activity']                                = 'Entrer les activités';
$lang['attach_files']                                  = 'Attacher un fichier';
$lang['no_tags_used']                                  = 'Aucun tags utilisé par le système';
$lang['exclude_completed_tasks']                       = 'Exclure les tâches accomplies';
$lang['modal_width_class']                             = 'Modal Width Class';
$lang['contract_copy']                                 = 'Dupliquer';
$lang['contract_copied_successfully']                  = 'Contrat copié avec succès';
$lang['contract_copied_fail']                          = 'Erreur lors de la copie du contrat';
$lang['project_marked_as_finished_to_contacts']        = 'Envoyer <b>Projet marqué comme fini</b> au client';
$lang['only_admins']                                   = 'Seulement les administrateurs';
$lang['new_notification']                              = 'Nouvelle notification!';
$lang['enable_desktop_notifications']                  = 'Permettre les nofifications sur le bureau';
$lang['save_and_send']                                 = 'Enregistrer et envoyer';
$lang['private']                                       = 'Privé';
$lang['task_created_at']                               = 'Créé à %s';
$lang['hide_notified_reminders_from_calendar']         = 'Cacher les rappels du calendrier';
$lang['last_active']                                   = 'Dernière active';
$lang['open_ticket']                                   = 'Ouvrir Ticket';
$lang['task_add_description']                          = 'Ajouter une description';
$lang['project_setting_create_tasks']                  = 'Créer tâche';
$lang['project_setting_edit_tasks']                    = 'éditer tâches (seulement les tâches créé par le contact)';

# Version 1.9.2
$lang['items_report']                            = 'Rapport article';
$lang['reports_item']                            = 'Article';
$lang['quantity_sold']                           = 'Quantité vendue';
$lang['total_amount']                            = 'Montant total';
$lang['avg_price']                               = 'Prix moyen';
$lang['item_report_paid_invoices_notice']        = 'Le rapport de l\'article est généré uniquement sur les factures soldées hors remises et taxes.';
$lang['overview']                                = 'Vue d\'ensemble';
$lang['timer_started_change_status_in_progress'] = 'Changer le statut de la tâche en \"en cours\" lors du lancement d\'un timer (applicable uniquement si le statut de la tâche est à l\'arrêt)';
$lang['company_info_format']                     = 'Format des informations de l\'entreprise (PDF et HTML)';
$lang['customer_info_format']                    = 'Format des informations du client (PDF et HTML)';
$lang['custom_field_info_format_embed_info']     = 'Les champs personnalisés %s peuvent facilement être intégrée dans les documents PDF et HTML en ajoutant le nom du champ à l\'intérieur de la page : %s';
$lang['transfer_lead_notes_to_customer']         = 'Transférer les notes associées aux Prospects vers leur fiche client.';
$lang['authorized_signature_text']               = 'Signature autorisée';
$lang['show_pdf_signature_invoice']              = 'Montrer la signature sur la facture PDF';
$lang['show_pdf_signature_estimate']             = 'Montrer la signature sur le devis PDF';
$lang['signature']                               = 'Signature';
$lang['signature_image']                         = 'Signature Image';
$lang['insert_checklist_templates']              = 'Insérer la Checklist ';
$lang['save_as_template']                        = 'Sauvegarder en tant que Template';
$lang['invoice_item_add_edit_rate_currency']     = 'Taux - %s';
$lang['total_files_deleted']                     = 'Total de fichiers supprimés: %s';
$lang['invalid_transaction']                     = 'Transaction non valide. Merci de réessayer.';
$lang['payment_gateway_payu_money_key']          = 'PayU Money Key';
$lang['payment_gateway_payu_money_salt']         = 'PayU Money Salt';
$lang['settings_paymentmethod_description']      = 'Gateway Dashbord Payment Description';

# Version 1.9.3
$lang['default_ticket_reply_status']          = 'Statut par défaut lors d\'une réponse au ticket.';
$lang['ticket_add_response_and_back_to_list'] = 'Retourner à la liste des tickets une fois la réponse envoyée';


# Version 1.9.4

$lang['default_task_status']                               = 'Status par défault a la création de tâche';
$lang['custom_field_pdf_html_help']                        = 'Soyez sure que le champ ' . $lang['custom_field_show_on_client_portal'] . ' soit coché si vous voulez que ce champ soit visible auprès du client lorsque le client télécharge le PDF.';
$lang['auto']                                              = 'Auto';
$lang['email_queue']                                       = 'File d\'attente email';
$lang['email_queue_enabled']                               = 'Activer la file d\'attente des emails';
$lang['email_queue_skip_attachments']                      = 'Ne pas mettre des emails avec pièces jointes dans la file d\'attente.';
$lang['disable']                                           = 'Désactiver';
$lang['enable']                                            = 'Activer';
$lang['auto_dismiss_desktop_notifications_after']          = 'Rejet automatique des notifications après X seconds (0 pour désactiver)';
$lang['proposal_info_format']                              = 'Format des infos sur les offres (PDF et HTML)';
$lang['hide_tasks_on_main_tasks_table']                    = 'Cacher les tâches des projets sur la liste principale (tableau de bord)';
$lang['ticket_replies_order']                              = 'Ticket Replies Order';
$lang['ticket_replies_order_notice']                       = 'Le message initial du ticket sera toujours placé en premier.';
$lang['invoice_cancelled_email_disabled']                  = 'Facture supprimée. Enlever l\'état supprimer pour envoyer un mail au client';
$lang['email_notifications']                               = 'Notifications email';
$lang['invoice_activity_record_payment_email_to_customer'] = 'Enregistrement d\'un paiement, email envoyé à: %s';
$lang['exclude_inactive']                                  = 'Exclure les inactifs';
$lang['disable_all']                                       = 'Désactiver tout';
$lang['enable_all']                                        = 'Activer tout';
$lang['reccuring_invoice_option_gen_and_send']             = 'Générer et envoyer automatiquement la nouvelle facture au client';
$lang['reccuring_invoice_option_gen_unpaid']               = 'Générer une facture impayée';
$lang['reccuring_invoice_option_gen_draft']                = 'Générer une facture brouillon';
$lang['event_created_by']                                  = 'Cet événnement a été créé par %s';

# Version 1.9.5
$lang['customers_assigned_to_me']              = 'Client assigné à moi';
$lang['bcc_all_emails']                        = 'BCC Tous les emails';
$lang['confirmation_of_identity']              = 'Confirmation de l\'identité';
$lang['accept_identity_confirmation']          = 'Requiert la confirmation de l\'identité pour l\'acceptation.';
$lang['accepted_identity_info']                = '%s a été accepté par %s sur %s depuis l\'adresse IP %s';
$lang['clear_this_information']                = 'Supprimer cette information';
$lang['new_task_auto_follower_current_member'] = 'Ajouter automatiquement le créateur de la tâche comme follower de la tâche lorsqu\'une nouvelle tâche a été créée';
$lang['expenses_report_net']                   = 'Montant net (Sous total)';
$lang['expense_field_billable_help']           = 'Si facturable, %s peut être ajouté à la facture en longue description.';
$lang['task_biillable_checked_on_creation']    = 'Option facturable est par défault activé quant une nouvelle tâche est créée';
$lang['pause_overdue_reminders']               = 'Mettre en pause les rappels de retard';
$lang['resume_overdue_reminders']              = 'Reprendre les rappels de retard';
# Credit Notes
$lang['credit_notes']                                            = 'Notes de crédit';
$lang['credit_note']                                             = 'Note de crédit';
$lang['credit_note_lowercase']                                   = 'note de crédit';
$lang['credit_note_not_found']                                   = 'Note de crédit introuvable';
$lang['credit_note_date']                                        = 'Date de la note de crédit';
$lang['credit_date']                                             = 'Date';
$lang['settings_sales_next_credit_note_number']                  = 'Numéro suivant de la NC';
$lang['credit_note_number_prefix']                               = 'Préfix de la NC';
$lang['credit_note_number']                                      = 'Note de crédit #';
$lang['credit_note_number_exists']                               = 'Le numéro de la NC existe déjà';
$lang['show_shipping_on_credit_note']                            = 'Montrer les détails de livraison sur la NC';
$lang['credit_note_number_decrement_on_delete']                  = 'Décrémenter le numéro de la NC après suppression.';
$lang['credit_note_number_decrement_on_delete_help']             = 'Le numéro sera décrémenté seulement si c\'est la dernière NC.';
$lang['credit_note_status']                                      = 'Status';
$lang['credit_note_status_open']                                 = 'Ouvert';
$lang['credit_note_status_closed']                               = 'Fermé';
$lang['credit_note_status_void']                                 = 'Annulé';
$lang['credit_note_mark_as_open']                                = 'Marqué comme ouverte';
$lang['new_credit_note']                                         = 'Nouvelle note de crédit';
$lang['credit_note_amount']                                      = 'Montant';
$lang['credit_note_remaining_credits']                           = 'Montant restant';
$lang['credit_note_client_note']                                 = 'Note';
$lang['invoices_credited']                                       = 'Facture créditée';
$lang['apply_credits']                                           = 'Appliquer le montant';
$lang['x_credits_available']                                     = '%s crédits disponible.';
$lang['credit_amount']                                           = 'Montant de la NC';
$lang['credits_available']                                       = 'Crédits disponible';
$lang['amount_to_credit']                                        = 'Montant vers Crédit';
$lang['invoice_credits_applied']                                 = 'Crédits appliqué avec succès à la facture';
$lang['applied_credits']                                         = 'Crédits disponible';
$lang['credit_amount_bigger_then_invoice_balance']               = 'Le montant total de la NC est plus élevé que le motant du';
$lang['credit_amount_bigger_then_credit_note_remaining_credits'] = 'Total credits amount is bigger then remaining credits';
$lang['credited_invoices_not_found']                             = 'NC de la facture introuvable';
$lang['credit_invoice_number']                                   = 'Numéro de facture';
$lang['credits_used']                                            = 'Crédits utilisés';
$lang['credits_remaining']                                       = 'Crédits restant';
$lang['amount_credited']                                         = 'Montant crédité';
$lang['credits_applied_cant_delete_status_closed']               = 'Cette NC a le status de "fermé", vous devez d\'abord supprimer le crédit pour ensuite supprimer la note de crédit.';
$lang['credits_applied_cant_delete_credit_note']                 = 'Cette NC dispose d\'un crédit, vous devez d\'abord supprimer le crédit avant de pouvoir supprimer la NC.';
$lang['credit_note_pdf_heading']                                 = 'Note de Crédit';
$lang['show_status_on_pdf']                                      = 'Montrer le statut %s sur le document PDF';
$lang['show_pdf_signature_credit_note']                          = 'Montrer la signature PDF sur la NC';
$lang['calendar_credit_note_reminder']                           = 'Rappel de la NC';
$lang['show_credit_note_reminders_on_calendar']                  = 'Rappels des NC';
$lang['reminders']                                               = 'Rappels';
$lang['invoice_activity_applied_credits']                        = 'application du crédit de %s à %s';
$lang['create_credit_note']                                      = 'Créer une note de crédit';
$lang['confirm_invoice_credits_from_credit_note']                = 'Lorsque vous créez une note de crédit sur une facture impayée, le montant de la NC s\'appliquera pour cette facture. Etes-vous sûre de vouloir créer la note de crédit?';
$lang['credit_invoice_date']                                     = 'Date facture';
$lang['apply_to_invoice']                                        = 'Appliquer à la facture';
$lang['apply_credits_from']                                      = 'Appliquer le Crédit de %s';
$lang['credits_successfully_applied_to_invoices']                = 'Le crédit a été appliqué correctement appliqué à la facture';
$lang['credit_note_send_to_client_modal_heading']                = 'Envoyer la note de crédit au client';
$lang['credit_note_sent_to_client_success']                      = 'Note de crédit envoyée au client avec succès';
$lang['credit_note_sent_to_client_fail']                         = 'Une erreur est survenue lors de l\'envoi de la NC au client';
$lang['credit_note_no_invoices_available']                       = 'Il n\'y a aucune facture disponible pour ce client.';
$lang['show_total_paid_on_invoice']                              = 'Montrer le montant payé sur la facture';
$lang['show_credits_applied_on_invoice']                         = 'Montrer le crédit appliqué à la facture';
$lang['show_amount_due_on_invoice']                              = 'Montrer le montant du sur la facture';
$lang['customer_profile_update_credit_notes']                    = 'Mettre a jour les informations de facturation/livraison sur toutes les NC précédentes (NC fermé non affecté)';
$lang['zip_credit_notes']                                        = 'Exporter en ZIP';
$lang['statement_credit_note_details']                           = 'Note de crédit %s';
$lang['statement_credits_applied_details']                       = 'Crédits appliqué depuis la NC %s - %s pour le paiement de %s';
$lang['credit_note_files']                                       = 'Note de crédit fichier';
$lang['credit_notes_report']                                     = 'Rapport des notes de crédit';

$lang['credit_note_set_reminder_title']     = 'Ajouter un rappel pour la note de crédit';
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
$lang['ticket_assigned']                          = 'Assigné';
$lang['dashboard_options']                        = 'Editer le tableau de bord';
$lang['reset_dashboard']                          = 'Réinitialiser le tableau de bord';
$lang['widgets']                                  = 'Widgets';
$lang['s_chart']                                  = '%s graphique';
$lang['quick_stats']                              = 'Statistique rapide';
$lang['user_widget']                              = 'Widget utilisateur';
$lang['widgets_visibility_help_text']             = 'Widgets montré uniquement si il y a assez de données. Pas de possibilité de cacher ou montrer.';
$lang['show_project_on_estimate']                 = 'Afficher le nom du projet sur le devis';
$lang['show_project_on_invoice']                  = 'Afficher le nom du projet sur la facture';
$lang['show_project_on_credit_note']              = 'Afficher le nom du projet sur la NC';
$lang['visible_tabs']                             = 'Fenêtre visible';
$lang['all']                                      = 'Tous';
$lang['view_widgetable_area']                     = 'Voir les zones de widgets';
$lang['hide_widgetable_area']                     = 'Cacher les zones de widgets';
$lang['no_items_warning']                         = 'Entrer au moins un article.';
$lang['item_forgotten_in_preview']                = 'Avez vous oublié d\'ajouter cet article ?';
$lang['not_task_status_changed']                  = '%s - statut de la tâche changé en %s';
$lang['not_project_activity_task_status_changed'] = 'Statut de la tâche modifié';
$lang['reset']                                    = 'Reset';
$lang['save_message_as_predefined_reply']         = 'Sauvegarder le message comme réponse prédéfinie';
$lang['inline_create_option']                     = 'Autoriser le staff a créer %s dans %s la zone création/édition?';
$lang['inline_create']                            = 'Création en ligne';
$lang['inline_create_option_predefined_replies']  = 'Autoriser le staff a sauvegarder les réponses automatiques des tickets.';
$lang['reminders_view_none_admin']                = 'Afficher vos propres rappels ainsi que vos rappels créés.';
$lang['show_tabs_and_options']                    = 'Montrer les fenêtres & Options';
$lang['no_milestones_found']                      = 'Ce projet n\'a pas d\'étapes';
$lang['lead_is_contact_create_task']              = 'Créer une tâche si l\'expéditeur de l\'email est déjà client et assigné à un collègue.';
$lang['existing_customer']                        = 'Client existant';
$lang['use_company_name_instead']                 = 'Utilisez le nom de la société';
$lang['customer_delete_transactions_warning']     = 'Ce client a des transations, %s, vous devez supprimer les transactions ou les déplacer à un autre client afin d\'effectuer cette action.';

# Version 1.9.8
$lang['sending_email_contact_permissions_warning'] = 'Echec de la sélection automatique des contacts des sociétés. Assurez-vous que la société dispose de contacts actifs et ayant une adresse mail reliée au centre de notifications pour %s activé.';
$lang['help_leads_create_permission']              = 'Tout le staff peu créer des leads,  exepté les membres marqué comme n\'étant pas des membres staff';
$lang['help_leads_edit_permission']                = 'Tous ceux qui ont accès aux prospects spécifique peuvent éditer la plus part des informations associés aux prospects';
$lang['triggers']                                  = 'Déclencheurs';
$lang['notice_only_one_active_sms_gateway']        = 'Une seule passerelle SMS active est autorisée';
$lang['sms_trigger_disable_tip']                   = 'Laissez le contenu vide pour désactiver le déclencheur spécifique.';
$lang['tables']                                    = 'Tableaux';
$lang['only_project_tasks']                        = 'Seulement les tâches liées au projet';
$lang['download_all']                              = 'Télécharger tout';
$lang['settings_sales_credit_note_number_format']  = 'Format de numéro des notes de crédit';
$lang['sms_reminder_sent_to']                      = 'Rappel SMS envoyé à %s';
$lang['ideal_customer_statement_descriptor']       = 'Description du document (Affiché dans le document du client)';
$lang['payment_received_awaiting_confirmation']    = 'Votre paiement a été envoyé et est en attente de confirmation.';
$lang['discount_fixed_amount']                     = 'Montant fixe';
$lang['timesheet_duration_instead']                = 'Encoder le temps utilisé';
$lang['timesheet_date_instead']                    = 'Encoder l\'heure de début et de fin';
$lang['allow_non_admin_members_to_import_leads']   = 'Autoriser les membres du personnel à importer des prospects';
$lang['project_hide_tasks_settings_info']          = 'Les tâches de ce projet sont exclues de la liste principale, vous ne pouvez voir les tâches liées à ce projet uniquement dans cette zone.';

# Version 1.9.9
$lang['ticket_create_no_contact']            = 'Ticket sans contact';
$lang['ticket_create_to_contact']            = 'Ticket assigné à un contact';
$lang['showing_billable_tasks_from_project'] = 'Afficher les tâches facturable du projet';
$lang['no_billable_tasks_found']             = 'Tâche facturable non trouvée';
$lang['help_leads_permission_view']          = 'Si les permissions ne sont pas cochées, les membres du staff ne verront que les prospects assignés à cette tâche, les prospects créé par ce membre de staff et les prospects marqués comme public';

# Version 2.0.0

$lang['customers']                                              = $lang['clients'];
$lang['knowledge_base']                                         = $lang['kb_string'];
$lang['staff']                                                  = $lang['als_staff'];
$lang['checklist_templates']                                    = 'Modèles de checklist pour les tâches';
$lang['emails_tracking']                                        = 'Tracking d\'emails';
$lang['no_tracked_emails_sent']                                 = 'Pas d\'emails trackés envoyés';
$lang['tracked_emails_sent']                                    = 'Emails trackés envoyés';
$lang['tracked_email_date']                                     = 'Date';
$lang['tracked_email_subject']                                  = 'Sujet';
$lang['tracked_email_to']                                       = 'A';
$lang['tracked_email_opened']                                   = 'Lu';
$lang['tracked_email_not_opened']                               = 'Non lu';
$lang['not_viewed_yet']                                         = '%s n\'a pas été vu par le client';
$lang['undo']                                                   = 'Annuler';
$lang['sign_document_validation']                               = 'Merci de signer le document.';
$lang['document_customer_signature_text']                       = 'Signature (Client)';
$lang['accept_identity_confirmation_and_signature_sign']        = 'Requiert une signature numérique ainsi qu\'une confirmation d\'identité lors de la validation';
$lang['legal_bound_text']                                       = 'Texte d\'engagement légal';
$lang['e_signature_sign']                                       = 'signer';
$lang['is_signed']                                              = 'Signé';
$lang['is_not_signed']                                          = 'Non signé';
$lang['download']                                               = 'Télécharger';
$lang['view_pdf_in_new_window']                                 = 'Voir le PDF dans un nouvel onglet';
$lang['show_pdf_signature_contract']                            = 'Montrer la signature PDF sur le contrat';
$lang['document_signed_successfully']                           = 'Vous avez signé le document avec succès';
$lang['document_signed_info']                                   = 'Ce document a été signé par %s le %s depuis l\'adresse IP %s';
$lang['keep_signature']                                         = 'Conserver signature client';
$lang['view_contract']                                          = 'Voir Contrat';
$lang['summary']                                                = 'Résumé';
$lang['discussion']                                             = 'Discussion';
$lang['general_information']                                    = 'Informations générales';
$lang['proposal_information']                                   = 'Informations de l\'offre';
$lang['contract_comments']                                      = 'Commentaires';
$lang['not_contract_comment_from_client']                       = 'Nouveau commentaire client sur le contrat %s ...';
$lang['contract_files']                                         = 'Fichiers du contrat';
$lang['date_signed']                                            = 'Date de signature';
$lang['clear_signature']                                        = 'Enlever la signature';
$lang['recurring_has_ended']                                    = 'Ce %s récurrent est terminé.';
$lang['cycles_remaining']                                       = 'Cycles restants';
$lang['cycles_infinity']                                        = 'Infini';
$lang['recurring_total_cycles']                                 = 'Total de cycles';
$lang['cycles_passed']                                          = 'Cycles passés %s';
$lang['api_key_not_set_error_message']                          = 'Clé d\'API non configurée, cliquez sur le lien suivant pour configurer la clé d\'API: %s';
$lang['subscription']                                           = 'Abonnement';
$lang['subscription_lowercase']                                 = 'abonnement';
$lang['subscriptions']                                          = 'Abonnements';
$lang['tax_is_used_in_subscriptions_warning']                   = 'Vous ne pouvez pas modifier cette taxe car elle est actuellement utilisée au sein d\'abonnements.';
$lang['credit_card']                                            = 'Carte de crédit';
$lang['update_credit_card']                                     = 'Mettre à jour carte de crédit';
$lang['credit_card_update_info']                                = 'Vous voulez mettre à jour les informations de votre carte? Entrez les nouvelles informations ici. Vos informations ne seront jamais enregistrées sur nos serveurs.';
$lang['update_card_details']                                    = 'Mettre à jour les détails de la carte';
$lang['update_card_btn']                                        = 'Mettre à jour la carte';
$lang['subscription_name']                                      = 'Nom de l\'abonnement';
$lang['subscriptions_description']                              = 'Description';
$lang['subscribe']                                              = 'S\'abonner';
$lang['subscription_date']                                      = 'Date';
$lang['first_billing_date']                                     = 'Première date de facturation';
$lang['allow_primary_contact_to_update_credit_card']            = 'Autoriser le contact principal à mettre à jour les informations de carte de crédit?';
$lang['show_subscriptions_in_customers_area']                   = 'Montrer les abonnements dans l\'espace client?';
$lang['show_subscriptions_in_customers_area_help']              = 'Cette option n\'est valide que pour le contact principal du client.';
$lang['subscription_sent_to_email_success']                     = 'Abonnement envoyé par email avec succès';
$lang['subscription_sent_to_email_fail']                        = 'Echec de l\'envoi de l\'abonnement par email';
$lang['new_subscription']                                       = 'Nouvel abonnement';
$lang['subscription_status']                                    = 'Statut';
$lang['next_billing_cycle']                                     = 'Prochaine facturation';
$lang['subscription_not_subscribed']                            = 'Non abonné';
$lang['send_subscription']                                      = 'Envoyer abonnement';
$lang['subscription_will_send_to_primary_contact']              = 'L\'abonnement sera envoyé au contact principal.';
$lang['subscription_resumed']                                   = 'Abonnement activé avec succès';
$lang['subscription_canceled']                                  = 'Abonnement annulé avec succès';
$lang['no_credit_card_found']                                   = 'Pas de carte de crédit trouvée';
$lang['cancel_immediately']                                     = 'Annuler immédiatement';
$lang['cancel_at_end_of_billing_period']                        = 'Annuler à la fin de la période de facturation';
$lang['view_subscription']                                      = 'Voir abonnement';
$lang['subscription_future']                                    = 'Futur';
$lang['subscription_active']                                    = 'Actif';
$lang['subscription_past_due']                                  = 'Echue';
$lang['subscription_canceled']                                  = 'Annulé';
$lang['subscription_unpaid']                                    = 'Impayée';
$lang['billing_plan']                                           = 'Plan de facturation';
$lang['upcoming_invoice']                                       = 'Facture à venir';
$lang['resume_now']                                             = 'Réactiver maintenant';
$lang['subscription_not_yet_subscribed']                        = 'Le client n\'a pas souscrit à cet abonnement.';
$lang['subscription_is_canceled_no_resume']                     = 'Cet abonnement a été annulé et ne peut être réactivé.';
$lang['subscription_will_be_canceled_at_end_of_billing_period'] = 'Cet abonnement sera annulé à la fin de la période de facturation.';
$lang['customer_successfully_subscribed_to_subscription']       = 'Merci de vous être abonné à %s';
$lang['date_subscribed']                                        = 'Date d\'abonnement';
$lang['reports']                                                = 'Rapports';
$lang['subscriptions_summary']                                  = 'Résumé des abonnements';
$lang['calendar_only_assigned_tasks']                           = 'Montrer uniquement les tâches assignées au collaborateur connecté';
$lang['invoice_activity_subscription_payment_succeeded']        = 'Paiement de l\'abonnement effectué avec succès, email envoyé à: %s';
$lang['mail_engine']                                            = 'Moteur d\'email';
$lang['settings_require_client_logged_in_to_view_contract']     = 'Le client doit être connecté pour voir le contrat';
$lang['privacy_policy']                                         = 'Politique de confidentialité';
$lang['gdpr_terms_agree']                                       = 'J\'accèpte les <a href="%s" target="_blank">Termes & Conditions</a>';
$lang['terms_and_conditions_validation']                        = 'Vous devez accepter les Termes & Conditions pour continuer.';
$lang['gdpr']                                                   = 'General Data Protection Regulation (GDPR)';
$lang['data_removal_request_sent']                              = 'Demande de suppression de données envoyée avec succès';
$lang['gdpr_consents']                                          = 'Consentements';
$lang['gdpr_consent']                                           = 'Consentement';
$lang['gdpr_consent_purpose']                                   = 'But';
$lang['gdpr_consent_opt_in']                                    = 'Consentir';
$lang['gdpr_consent_opt_out']                                   = 'Ne pas consentir';
$lang['gdpr_consent_agree']                                     = 'J\'accepte';
$lang['gdpr_consent_disagree']                                  = 'Je refuse';
$lang['view_consent']                                           = 'Voir consentement';
$lang['transfer_consent']                                       = 'Transférer consentement';
$lang['view_public_form']                                       = 'Voir le formulaire public';
$lang['update_consent']                                         = 'Mettre à jour le consentement';
$lang['consent_last_updated']                                   = 'Dernière mise à jour: %s';
$lang['showing_search_result']                                  = 'Affichage des résultats de recherche pour: %s';
$lang['per_page']                                               = 'Par page';
$lang['allow_staff_view_invoices_assigned']                     = 'Autoriser les collaborateurs à voir les factures où ils étaient assignés';
$lang['allow_staff_view_estimates_assigned']                    = 'Autoriser les collaborateurs à voir les devis où ils sont assignés';
$lang['gdpr_right_to_be_informed']                              = 'Droit d\'information';
$lang['gdpr_right_of_access']                                   = 'Droit d\'accès';
$lang['gdpr_right_to_data_portability']                         = 'Droit de portabilité des données';
$lang['gdpr_right_to_erasure']                                  = 'Droit d\'effacement';
$lang['edit_my_information']                                    = 'Editer mes informations';
$lang['export_my_data']                                         = 'Exporter mes données';
$lang['request_data_removal']                                   = 'Demander l\'effacement des données';
$lang['explanation_for_data_removal']                           = 'Motif du retrait des données';
$lang['briefly_describe_why_remove_data']                       = 'Décrivez brièvement pourquoi vous souhaitez effacer vos données';
$lang['date_published']                                         = 'Date de publication';
$lang['view']                                                   = 'Voir';
$lang['customer_is_subscribed_to_subscription_info']            = 'Le client a souscrit à cet abonnement';
$lang['save_last_order_for_tables']                             = 'Enregistrer le tri des tables';
$lang['date_created']                                           = 'Date de création';

# Version 2.0.1
$lang['company_logo_dark']                                      = 'Logo entreprise sombre';
$lang['customers_register_require_confirmation']                = 'Requiert une confirmation d\'inscription de l\'administrateur après l\'enregistrement du client';
$lang['customer_requires_registration_confirmation']            = 'Requiert une confirmation d\'inscription';
$lang['confirm_registration']                                   = 'Confirmer l\'inscription';
$lang['customer_registration_successfully_confirmed']           = 'Inscription du client confirmée avec succès';
$lang['customer_register_account_confirmation_approval_notice'] = 'Merci pour votre inscription, votre compte est en attente de validation et sera bientôt actif.';
$lang['after_subscription_payment_succeeded']                   = 'Paiement après abonnement réussi';
$lang['subscription_option_send_invoice']                       = 'Envoyer facture';
$lang['subscription_option_send_payment_receipt']               = 'Envoyer reçu de paiement';
$lang['subscription_option_send_payment_receipt_and_invoice']   = 'Envoyer facture et reçu de paiement';
$lang['subscription_option_do_nothing']                         = 'Ne rien faire';
$lang['gdpr_not_enabled']                                       = 'GDPR désactivé';
$lang['enable_gdpr']                                            = 'Activer GDPR';
$lang['gdpr_right_to_rectification']                            = 'Droit de modification';
$lang['test_sms_config']                                        = 'Tester configuration SMS';
$lang['test_sms_message']                                       = 'Tester message';
$lang['send_test_sms']                                          = 'Envoyer SMS de test';
$lang['gdpr_short']                                             = 'GDPR';
$lang['allow_non_admin_staff_to_delete_ticket_attachments']     = 'Autoriser les collaborateurs hors administrateurs à supprimer les pièces jointes des tickets';

# Version 2.1.0
$lang['contract_number']                                = 'Numéro du contrat';
$lang['project_changing_status_recurring_tasks_notice'] = 'Vous avez modifié le statut en {0}, toutes les tâches récurrentes seront supprimées';
$lang['not_contract_signed']                            = 'Le contrat avec comme sujet  %s a été signé par le client';
$lang['the_number_sign']                                = '#';
$lang['not_new_ticket_reply']                           = 'Le client a répondu au ticket - %s';
$lang['receive_notification_on_new_ticket_replies']     = 'Recevoir une notification lorsque le client répond au ticket';
$lang['receive_notification_on_new_ticket_reply_help']  = 'Tous les membres du staff en rapport avec le département du ticket recevront une notification à chaque réponse du ticket';
$lang['payment_gateway_enable_paypal']                  = 'Autoriser les paiements PayPal';
$lang['project_member']                                 = 'Membre du projet';
$lang['contract_notes']                                 = 'Notes';
$lang['contract_add_note']                              = 'Ajouter une note';

# Version 2.1.1
$lang['frequency']              = 'Fréquence';
$lang['frequency_every']        = 'Tous les %s';
$lang['last_invoice_date']      = 'Dernière date de facture';
$lang['next_invoice_date_list'] = 'Prochaine date de facture';
$lang['enter_new_card']         = 'Ajouter une nouvelle carte';

# Version 2.2.0
$lang['save_and_record_payment']                                     = 'Enregistrer & encoder le paiement';
$lang['choose_from_google_drive']                                    = 'Choisir depuis Google Picker';
$lang['open_in_google']                                              = 'Ouvrir dans Google';
$lang['google_picker']                                               = 'Google Picker';
$lang['enable_google_picker']                                        = 'Activer Google Picker';
$lang['google_api_client_id']                                        = 'Google API Client ID';
$lang['subtract_tax_total_from_amount']                              = 'Soustraire la taxe (%s €) du montant de la dépense.';
$lang['expense_subtract_info_text']                                  = 'Utilisez cette option pour soustraire le montant de la taxe de cette dépense, utile lorsque vous encodez le montant avec TVA.';
$lang['company_exists_info']                                         = 'Il semble qu\'un client avec le nom %s existe déjà, si vous voulez tout de même enregistrer ce client merci d\'ignorer le message.';
$lang['import_items']                                                = 'Importer des articles';
$lang['total_items_deleted']                                         = 'Total articles supprimés: %s';
$lang['billable_amount']                                             = 'Montant facturé';
$lang['last_child_invoice_date']                                     = 'Dernière date de facture';
$lang['good_morning']                                                = 'Excellente matinée';
$lang['good_afternoon']                                              = 'Excellente après-midi';
$lang['good_evening']                                                = 'Excellente soirée';
$lang['description_in_invoice_item']                                 = 'Ajouter une description dans l\'article de la facture';
$lang['description_in_invoice_item_help']                            = 'Utile lorsque vous voulez inclure des informations supplémentaires sur cet abonnement (ex: ce que l\'abonnement inclu).';
$lang['ticket_reminders']                                            = 'Rappels';
$lang['ticket_set_reminder_title']                                   = 'Configurer un rappel pour ce ticket';
$lang['calendar_ticket_reminder']                                    = 'Rappel du ticket';
$lang['email_verification_required']                                 = 'Vérificiation par email requise';
$lang['email_verification_required_message']                         = 'Avant d\'accéder à l\'ensemble des fonctionnalités de votre compte, merci de valider votre compte avec les instructions reçues par email.';
$lang['email_verification_required_message_mail']                    = 'Nous vous avons envoyé un email avec des instructions pour valider votre compte, si vous n\'avez pas reçu ce mail merci de vérifier vos spams ou de cliquer ici <a href="%s">here</a> pour recevoir à nouveau l\'email.';
$lang['email_already_verified']                                      = 'Votre email a déjà été vérifié';
$lang['invalid_verification_key']                                    = 'Clé de vérification invalide';
$lang['verification_key_expired']                                    = 'Clé de vérification expirée';
$lang['email_successfully_verified']                                 = 'Votre email a été vérifié avec succès.';
$lang['email_successfully_verified_but_required_admin_confirmation'] = 'Votre email a été vérifié avec succès, vous pourrez vous identifier dès qu\'un administrateur aura confirmer manuellement votre compte.';
$lang['email_verification_mail_sent_successully']                    = 'Nous venons de vous envoyer un email avec des instructions pour la validation de votre compte';
$lang['create_reminder']                                             = 'Créer un rappel';
$lang['no_reminders_for_this_task']                                  = 'Aucun rappel pour cette tâche';
$lang['reminder_for']                                                = 'Rappel pour %s le %s';
$lang['no_description_provided']                                     = 'Aucune description fournie';
$lang['pay_with_card']                                               = 'Payer avec une carte';
$lang['not_customer_uploaded_file']                                  = 'Nouveau fichier uploadé via l\'espace client';

# Version 2.2.1
$lang['customer_files_info_message'] = 'Les fichiers des projets et tâches liées au client n\'apparaissent pas dans cette liste';
$lang['ticket_import_reply_only']    = 'Importer uniquement les réponses de ce ticket (sans le message cité/transféré)';
$lang['learn_more']                  = 'En savoir plus';
$lang['sales_item']                  = 'Article';

# Version 2.3.0

$lang['modules']                                 = 'Modules';
$lang['module']                                  = 'Module';
$lang['module_description']                      = 'Description';
$lang['module_activate']                         = 'Activé';
$lang['module_deactivate']                       = 'Désactivé';
$lang['module_uninstall']                        = 'Désinstaller';
$lang['module_upgrade_database']                 = 'Mise à jour de la base de données';
$lang['module_settings']                         = 'Paramètres';
$lang['module_version']                          = 'Version %s';
$lang['module_by']                               = 'par %s';
$lang['staff_which_are_using_role']              = 'Les collègues utilisant ce rôle';
$lang['copy']                                    = 'Dupliquer';
$lang['read_more']                               = 'Lire plus';
$lang['show_less']                               = 'Cacher';
$lang['project_progress_text']                   = 'Avancement du projet';
$lang['timer_not_stopped_yet']                   = 'Ce timer n\'est pas encore arrêté';
$lang['refunds']                                 = 'Remboursements';
$lang['refund']                                  = 'Remboursement';
$lang['refund_amount']                           = 'Montant du remboursement';
$lang['not_refunds_found']                       = 'Aucun remboursement trouvé';
$lang['refunds_applied_cant_delete_credit_note'] = 'Des remboursements sont appliqués sur cette NC, vous devez d\'abord supprimer ces remboursements pour pouvoir supprimer cette NC';

# Version 2.3.2

$lang['create_recurring_from_child_error_message'] = 'Vous ne pouvez pas configurer le document %s comme récurrent car %s dépent déjà d\'un autre document récurrent %s.';
$lang['statement_credit_note_refund']              = 'Remboursement de note de crédit - %s';
$lang['no_validation']                             = 'Aucune validation';
$lang['lead_unique_validation_on']                 = 'Effectuer une validation sur les champs suivants :';
$lang['phonenumber_exists']                        = 'Ce numéro de téléphone existe déjà dans votre système';
$lang['company_exists']                            = 'La société existe déjà dans votre système';
$lang['website_exists']                            = 'Ce site web existe déjà dans votre système';
$lang['send_payment_receipt_to_client']            = 'Envoyer la preuve de paiement au client';
$lang['payment_sent_successfully']                 = 'Preuve de paiement envoyée avec succès';
$lang['payment_sent_failed']                       = 'Erreur lors de l\'envoie de votre preuve de paiement.';

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

# Version 3.1.0
$lang['filter_boolean_yes'] = 'Yes';
$lang['filter_boolean_no'] = 'No';
$lang['filter_matchtype_and'] = 'and';
$lang['filter_matchtype_or'] = 'or';
$lang['filter_share'] = 'Share with other team members?';
$lang['filter_mark_as_default'] = 'Mark as default';
$lang['filter_unmark_as_default'] = 'Unmark as default';
$lang['filter_save'] = 'Save Filter';
$lang['filter_name'] = 'Filter name';
$lang['filter_apply'] = 'Apply';
$lang['filter_apply_and_save'] = 'Apply and Save';
$lang['filter_use_dynamic_dates'] = 'Use dynamic dates';
$lang['filter_new'] = 'New Filter';
$lang['filter_clear_active'] = 'Clear Filter';
$lang['filter_edit'] = 'Edit';
$lang['filter_create'] = 'Create Filter';
$lang['filter_update'] = 'Update Filter';
$lang['filter_delete'] = 'Delete Filter';
$lang['filter_cannot_be_shared'] = 'This filter cannot be shared with other team members as it contains rules that may not be available for all users.';
$lang['filter_add_rule'] = 'Add Rule';

$lang['filter_operator_is_empty'] = 'is unknown';
$lang['filter_operator_is_not_empty'] = 'is known';
$lang['filter_operator_equal'] = 'equal';
$lang['filter_operator_not_equal'] = 'not equal';
$lang['filter_operator_begins_with'] = 'begins with';
$lang['filter_operator_not_begins_with'] = 'not begins with';
$lang['filter_operator_contains'] = 'contains';
$lang['filter_operator_not_contains'] = 'not contains';
$lang['filter_operator_ends_with'] = 'ends with';
$lang['filter_operator_not_ends_with'] = 'not ends with';
$lang['filter_operator_in'] = 'in';
$lang['filter_operator_not_in'] = 'not in';
$lang['filter_operator_between'] = 'between';
$lang['filter_operator_not_between'] = 'not between';
$lang['filter_operator_dynamic'] = 'dynamic';
$lang['filter_operator_greater'] = 'greater';
$lang['filter_operator_greater_or_equal'] = 'greater or equal';
$lang['filter_operator_less'] = 'less';
$lang['filter_operator_less_or_equal'] = 'less or equal';
$lang['no_filters_found'] = 'No saved filters, get started by creating a new filter.';

$lang['staff_logged_in_public_ticket_warning'] = 'You are logged in a staff member, if you want to reply to the ticket as staff, you must make reply via the admin area.';