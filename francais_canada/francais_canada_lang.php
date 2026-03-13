<?php

# Version 1.0.0
#
# General
$lang['id']                   = 'ID';
$lang['name']                 = 'Nom';
$lang['options']              = 'Options';
$lang['submit']               = 'Enregistrer';
$lang['added_successfully']   = '%s ajouté';
$lang['updated_successfully'] = '%s mis à jour';
$lang['edit']                 = 'Éditer %s';
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

# Factures - Général
$lang['invoice_status_paid']                   = 'Payée';
$lang['invoice_status_unpaid']                 = 'Impayée';
$lang['invoice_status_overdue']                = 'Echue';
$lang['invoice_status_not_paid_completely']    = 'Partiellement payée';
$lang['invoice_pdf_heading']                   = 'FACTURE';
$lang['invoice_table_item_heading']            = 'Produit';
$lang['invoice_table_quantity_heading']        = 'Qté';
$lang['invoice_table_rate_heading']            = 'Prix';
$lang['invoice_table_tax_heading']             = 'Taxe';
$lang['invoice_table_amount_heading']          = 'Total';
$lang['invoice_subtotal']                      = 'Sous-total';
$lang['invoice_adjustment']                    = 'Ajustement';
$lang['invoice_total']                         = 'Total';
$lang['invoice_bill_to']                       = 'Destinataire';
$lang['invoice_data_date']                     = 'Date de facturation :';
$lang['invoice_data_duedate']                  = 'Date d\'échéance :';
$lang['invoice_received_payments']             = 'Transactions';
$lang['invoice_no_payments_found']             = 'Aucun paiement trouvé pour cette facture';
$lang['invoice_note']                          = 'Note:';
$lang['invoice_payments_table_number_heading'] = 'Paiement #';
$lang['invoice_payments_table_mode_heading']   = 'Mode de paiement';
$lang['invoice_payments_table_date_heading']   = 'Date de facturation';
$lang['invoice_payments_table_amount_heading'] = 'Montant';

# Annonces
$lang['announcement']                 = 'Annonce';
$lang['announcement_lowercase']       = 'annonce';
$lang['announcements']                = 'Annonces';
$lang['announcements_lowercase']      = 'annonces';
$lang['new_announcement']             = 'Nouvelle annonce';
$lang['announcement_name']            = 'Titre de l\'annonce';
$lang['announcement_message']         = 'Message';
$lang['announcement_show_to_staff']   = 'Diffuser pour les collaborateurs';
$lang['announcement_show_to_clients'] = 'Diffuser pour les clients';
$lang['announcement_show_my_name']    = 'Afficher mon nom';

# Clients
$lang['clients']                                 = 'Clients';
$lang['client']                                  = 'Client';
$lang['new_client']                              = 'Nouveau client';
$lang['client_lowercase']                        = 'client';
$lang['client_firstname']                        = 'Prénom';
$lang['client_lastname']                         = 'Nom';
$lang['client_email']                            = 'Courriel';
$lang['client_company']                          = 'Entreprise';
$lang['client_vat_number']                       = 'Numéros de taxes';
$lang['client_address']                          = 'Adresse';
$lang['client_city']                             = 'Ville';
$lang['client_postal_code']                      = 'Code Postal';
$lang['client_state']                            = 'Province';
$lang['client_password']                         = 'Mot de passe';
$lang['client_password_change_populate_note']    = 'Remarque : si vous remplissez ce champ, le mot de passe de ce client sera modifié.';
$lang['client_password_last_changed']            = 'Dernière modification du mot de passe :';
$lang['login_as_client']                         = 'Afficher l\'espace client';
$lang['client_invoices_tab']                     = 'Factures';
$lang['contracts_invoices_tab']                  = 'Contrats';
$lang['contracts_tickets_tab']                   = 'Billets';
$lang['contracts_notes_tab']                     = 'Notes';
$lang['note_description']                        = 'Description de la note';
$lang['client_do_not_send_welcome_email']        = 'Ne pas envoyer un courriel de bienvenue';
$lang['clients_notes_table_description_heading'] = 'Description';
$lang['clients_notes_table_addedfrom_heading']   = 'Ajoutée par';
$lang['clients_notes_table_dateadded_heading']   = 'Ajoutée le';
$lang['clients_list_full_name']                  = 'Client';
$lang['clients_list_last_login']                 = 'Dernière connexion';

# Contrats
$lang['contracts']                = 'Contrats';
$lang['contract']                 = 'Contrat';
$lang['new_contract']             = 'Nouveau contrat';
$lang['contract_lowercase']       = 'contrat';
$lang['contract_start_date']      = 'Date de début';
$lang['contract_end_date']        = 'Date de fin';
$lang['contract_subject']         = 'Objet';
$lang['contract_description']     = 'Description';
$lang['contract_subject_tooltip'] = 'L\'objet est aussi visible au client';
$lang['contract_client_string']   = 'Client';
$lang['contract_attach']          = 'Pièce jointe';
$lang['contract_list_client']     = 'Client';
$lang['contract_list_subject']    = 'Objet';
$lang['contract_list_start_date'] = 'Date de début';
$lang['contract_list_end_date']   = 'Date de fin';

# Devises
$lang['currencies']                    = 'Devises';
$lang['currency']                      = 'Devise';
$lang['new_currency']                  = 'Nouvelle devise';
$lang['currency_lowercase']            = 'devise';
$lang['base_currency_set']             = 'Ceci est maintenant votre devise de base.';
$lang['make_base_currency']            = 'Etablir comme devise principale';
$lang['base_currency_string']          = 'Devise principale';
$lang['currency_list_name']            = 'Nom';
$lang['currency_list_symbol']          = 'Symbole';
$lang['currency_add_edit_description'] = 'Code de la devise';
$lang['currency_add_edit_rate']        = 'Symbole';
$lang['currency_edit_heading']         = 'Editer la devise';
$lang['currency_add_heading']          = 'Nouvelle devise';

# Département
$lang['departments']                 = 'Départements';
$lang['department']                  = 'Département';
$lang['new_department']              = 'Nouveau département';
$lang['department_lowercase']        = 'département';
$lang['department_name']             = 'Nom du département';
$lang['department_email']            = 'Courriel du département';
$lang['department_hide_from_client'] = 'Ne pas afficher aux clients ?';
$lang['department_list_name']        = 'Nom';

# Courriel - Modèles
$lang['email_templates']                        = 'Modèles de courriels';
$lang['email_template']                         = 'Modèle de courriel';
$lang['email_template_lowercase']               = 'modèle de courriel';
$lang['email_templates_lowercase']              = 'modèles de courriels';
$lang['email_template_ticket_fields_heading']   = 'Billets';
$lang['email_template_invoices_fields_heading'] = 'Factures';
$lang['email_template_clients_fields_heading']  = 'Clients';

$lang['template_name']                          = 'Nom du modèle';
$lang['template_subject']                       = 'Objet';
$lang['template_fromname']                      = 'De';
$lang['template_fromemail']                     = 'Depuis le courriel';
$lang['send_as_plain_text']                     = 'Envoyer au format texte brut';
$lang['email_template_disabled']                = 'Désactiver';
$lang['email_template_email_message']           = 'Message courriel';
$lang['available_merge_fields']                 = 'Champs substituants disponibles';
# Accueil
$lang['dashboard_string']                          = 'Tableau de bord';
$lang['home_latest_todos']                         = 'Tâches privées les plus récentes';
$lang['home_no_latest_todos']                      = 'Aucune tâche privée pour l\'instant';
$lang['home_latest_finished_todos']                = 'Tâches privées réalisées les plus récentes';
$lang['home_no_finished_todos_found']              = 'Aucune tâche privée réalisée pour l\'instant';
$lang['home_tickets_awaiting_reply_by_department'] = 'Billets en attente de réponse (par catégorie)';
$lang['home_tickets_awaiting_reply_by_status']     = 'Billets en attente de réponse (par état)';
$lang['home_this_week_events']                     = 'Événements Hebdomadaires';
$lang['home_upcoming_events_next_week']            = 'Événements à venir pour la semaine prochaine';
$lang['home_event_added_by']                       = 'Événement ajouté par';
$lang['home_public_event']                         = 'Événement public';
$lang['home_weekly_payment_records']               = 'Encaissements hebdomadaire';
$lang['home_weekend_ticket_opening_statistics']    = 'Statistiques des billets ouverts par semaine';
# Fil d'actualité
$lang['whats_on_your_mind']                                 = 'Partagez vos idées !';
$lang['new_post']                                           = 'Publier';
$lang['newsfeed_upload_tooltip']                            = 'Astuce: glissez et déposez les fichiers à téléverser';
$lang['newsfeed_all_departments']                           = 'Tous les départements';
$lang['newsfeed_pin_post']                                  = 'Épingler';
$lang['newsfeed_unpin_post']                                = 'Désépingler';
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
$lang['comment_this_post_placeholder']                      = 'Ajouter un commentaire.';
$lang['newsfeed_post_likes_modal_heading']                  = 'Collègues qui aiment ce post';
$lang['newsfeed_comment_likes_modal_heading']               = 'collègues qui aiment ce commentaire';
$lang['newsfeed_newsfeed_post_only_visible_to_departments'] = 'Ce poste est visible seulement pour les départements suivants: %s';

# Facture - Articles
$lang['invoice_items']                     = 'Produits facture';
$lang['invoice_item']                      = 'Produit facture';
$lang['new_invoice_item']                  = 'Nouveau produit';
$lang['invoice_item_lowercase']            = 'produit facture';
$lang['invoice_items_list_description']    = 'Produit';
$lang['invoice_items_list_rate']           = 'Prix';
$lang['invoice_item_add_edit_description'] = 'Produit';
$lang['invoice_item_add_edit_rate']        = 'Prix';
$lang['invoice_item_edit_heading']         = 'Editer le produit';
$lang['invoice_item_add_heading']          = 'Nouveeau produit';

# Factures
$lang['invoices']                                = 'Factures';
$lang['invoice']                                 = 'Facture';
$lang['invoice_lowercase']                       = 'facture';
$lang['create_new_invoice']                      = 'Nouvelle facture';
$lang['view_invoice']                            = 'Voir la facture';
$lang['invoice_payment_recorded']                = 'Paiement de facture enregistré';
$lang['invoice_payment_record_failed']           = 'Échec de l\'enregistrement du paiement de la facture';
$lang['invoice_sent_to_client_success']          = 'La facture a été envoyée au client';
$lang['invoice_sent_to_client_fail']             = 'Problème lors de l\'envoi de la facture';
$lang['invoice_reminder_send_problem']           = 'Problème lors de l\'envoi de la facture de rappel';
$lang['invoice_overdue_reminder_sent']           = 'Facture de rappel envoyée';
$lang['invoice_details']                         = 'Détails de la facture';
$lang['invoice_view']                            = 'Voir la facture';
$lang['invoice_select_customer']                 = 'Client';
$lang['invoice_add_edit_number']                 = 'Numéro de facture';
$lang['invoice_add_edit_date']                   = 'Date de facturation';
$lang['invoice_add_edit_duedate']                = 'Date d\'échéance';
$lang['invoice_add_edit_currency']               = 'Devise';
$lang['invoice_add_edit_client_note']            = 'Note au client ';
$lang['invoice_add_edit_admin_note']             = 'Note privée';
$lang['invoices_toggle_table_tooltip']           = 'Afficher le tableau complet';
$lang['edit_invoice_tooltip']                    = 'Editer la facture';
$lang['delete_invoice_tooltip']                  = 'Facture supprimée. Remarque: Tous les paiements concernant cette facture seront supprimés (le cas échéant).';
$lang['invoice_sent_to_email_tooltip']           = 'Envoyer par courriel';
$lang['invoice_already_send_to_client_tooltip']  = 'Cette facture a déjà été envoyée au client %s';
$lang['send_overdue_notice_tooltip']             = 'Envoyer un avis de retard';
$lang['invoice_view_activity_tooltip']           = 'Historique de la facture';
$lang['invoice_record_payment']                  = 'Saisir un paiement';
$lang['invoice_send_to_client_modal_heading']    = 'Envoyer la facture au client';
$lang['invoice_send_to_client_attach_pdf']       = 'Joindre la version PDF';
$lang['invoice_send_to_client_preview_template'] = 'Aperçu du modèle de courriel';
$lang['invoice_dt_table_heading_number']         = 'N° de facture';
$lang['invoice_dt_table_heading_date']           = 'Date de facturation';
$lang['invoice_dt_table_heading_client']         = 'Client';
$lang['invoice_dt_table_heading_duedate']        = 'Date d\'échéance';
$lang['invoice_dt_table_heading_amount']         = 'Montant';
$lang['invoice_dt_table_heading_status']         = 'État';
$lang['record_payment_for_invoice']              = 'Saisir un paiement pour';
$lang['record_payment_amount_received']          = 'Montant reçu';
$lang['record_payment_date']                     = 'Date du paiement';
$lang['record_payment_leave_note']               = 'Ajouter une note';
$lang['invoice_payments_received']               = 'Paiements reçus';
$lang['invoice_record_payment_note_placeholder'] = 'Note privée';
$lang['no_payments_found']                       = 'Aucun paiement trouvé pour cette facture';

# Paiements
$lang['payments']                             = 'Paiements';
$lang['payment']                              = 'Paiement';
$lang['payment_lowercase']                    = 'paiement';
$lang['payments_table_number_heading']        = 'N° de paiement';
$lang['payments_table_invoicenumber_heading'] = 'N° de facture';
$lang['payments_table_mode_heading']          = 'Mode de paiement';
$lang['payments_table_date_heading']          = 'Date';
$lang['payments_table_amount_heading']        = 'Montant';
$lang['payments_table_client_heading']        = 'Client';
$lang['payment_not_exists']                   = 'Le paiement n\'existe pas';
$lang['payment_edit_for_invoice']             = 'Paiement pour la facture N°';
$lang['payment_edit_amount_received']         = 'Montant reçu';
$lang['payment_edit_date']                    = 'Date du paiement';

# FAQ
$lang['kb_article_add_edit_subject']   = 'Sujet';
$lang['kb_article_add_edit_group']     = 'Rubrique';
$lang['kb_string']                     = 'FAQ';
$lang['kb_article']                    = 'Publication';
$lang['kb_article_lowercase']          = 'publication';
$lang['kb_article_new_article']        = 'Nouvelle publication';
$lang['kb_article_disabled']           = 'Désactiver';
$lang['kb_article_description']        = 'Contenu de la publication';
$lang['kb_no_articles_found']          = 'Aucune publication trouvée';
$lang['kb_dt_article_name']            = 'Publication';
$lang['kb_dt_group_name']              = 'Rubrique';
$lang['new_group']                     = 'Nouvelle rubrique';
$lang['kb_group_add_edit_name']        = 'Nom de la rubrique';
$lang['kb_group_add_edit_description'] = 'Description courte';
$lang['kb_group_add_edit_disabled']    = 'Désactiver l\'affichage';
$lang['kb_group_add_edit_note']        = 'Remarque : Les publications de cette rubrique ne seront pas affichées si la fonction "désactiver l\'affichage" est sélectionnée';
$lang['group_table_name_heading']      = 'Nom';
$lang['group_table_isactive_heading']  = 'Active';
$lang['kb_no_groups_found']            = 'Aucune rubrique trouvée';

# Médias
$lang['media_files'] = 'Pièces jointes';

# Paiement - Modes
$lang['new_payment_mode']           = 'Ajouter un mode de paiement';
$lang['payment_modes']              = 'Modes de paiement';
$lang['payment_mode']               = 'Mode de paiement';
$lang['payment_mode_lowercase']     = 'mode de paiement';
$lang['payment_modes_dt_name']      = 'Nom du mode de paiement';
$lang['payment_mode_add_edit_name'] = 'Nom du mode de paiement';
$lang['payment_mode_edit_heading']  = 'Editer le mode de paiement';
$lang['payment_mode_add_heading']   = 'Ajouter un nouveau mode de paiement';

# Billets - Réponses prédéfinies
$lang['new_predefined_reply']              = 'Nouvelle réponse prédéfinie';
$lang['predefined_replies']                = 'Réponses prédéfinies';
$lang['predefined_reply']                  = 'Réponse prédéfinie';
$lang['predefined_reply_lowercase']        = 'réponse prédéfinie';
$lang['predefined_replies_dt_name']        = 'Nom de la réponse prédéfinie';
$lang['predefined_reply_add_edit_name']    = 'Nom de la réponse prédéfinie';
$lang['predefined_reply_add_edit_content'] = 'Contenu de la réponse';

# Billets -  Priorités
$lang['new_ticket_priority']           = 'Nouvelle priorité';
$lang['ticket_priorities']             = 'Priorités des billets';
$lang['ticket_priority']               = 'Priorité du billet';
$lang['ticket_priority_lowercase']     = 'Priorité du billet';
$lang['no_ticket_priorities_found']    = 'Aucune priorité de billet trouvée';
$lang['ticket_priority_dt_name']       = 'Nom de la priorité du billet';
$lang['ticket_priority_add_edit_name'] = 'Nom de la priorité';

# Rapports
$lang['kb_reports']                                       = 'Rapports des articles de la FAQ';
$lang['sales_reports']                                    = 'Rapports de ventes';
$lang['reports_choose_kb_group']                          = 'Choisir une rubrique';
$lang['report_kb_yes']                                    = 'Oui';
$lang['report_kb_no']                                     = 'Non';
$lang['report_kb_no_votes']                               = 'Aucun vote pour l\'instant';
$lang['report_this_week_leads_conversions']               = 'Conversion de prospects cette semaine';
$lang['report_leads_sources_conversions']                 = 'Sources';
$lang['report_leads_monthly_conversions']                 = 'Mensuel';
$lang['sales_report_heading']                             = 'Rapport de Ventes';
$lang['report_sales_type_income']                         = 'Revenu total';
$lang['report_sales_type_customer']                       = 'Clients';
$lang['report_sales_base_currency_select_explanation']    = 'Vous devez sélectionner une devise car vous avez des factures avec des devises différentes.';
$lang['report_sales_from_date']                           = 'Depuis';
$lang['report_sales_to_date']                             = 'Jusqu\'à';
$lang['report_sales_months_all_time']                     = 'Depuis le début';
$lang['report_sales_months_six_months']                   = '6 derniers mois';
$lang['report_sales_months_twelve_months']                = '12 derniers mois';
$lang['reports_sales_generated_report']                   = 'Rapport généré';
$lang['reports_sales_dt_customers_client']                = 'Client';
$lang['reports_sales_dt_customers_total_invoices']        = 'Nombre de factures';
$lang['reports_sales_dt_items_customers_amount']          = 'Sous-total';
$lang['reports_sales_dt_items_customers_amount_with_tax'] = 'Total';

# Rôles
$lang['new_role']           = 'Ajouter un rôle';
$lang['all_roles']          = 'Tous les rôles';
$lang['roles']              = 'Rôles collaborateurs';
$lang['role']               = 'Rôle';
$lang['role_lowercase']     = 'rôle';
$lang['roles_total_users']  = 'Nombre d\'utilisateurs : ';
$lang['roles_dt_name']      = 'Rôle';
$lang['role_add_edit_name'] = 'Rôle';

# Services
$lang['new_service']           = 'Nouveau service';
$lang['services']              = 'Services';
$lang['service']               = 'Service';
$lang['service_lowercase']     = 'service';
$lang['services_dt_name']      = 'Nom du service';
$lang['service_add_edit_name'] = 'Nom du service';

# Paramètres
$lang['settings']                                                  = 'Paramètres';
$lang['settings_updated']                                          = 'Paramètres mis à jour';
$lang['settings_save']                                             = 'Enregistrer les réglages';
$lang['settings_group_general']                                    = 'Général';
$lang['settings_group_localization']                               = 'Localisation';
$lang['settings_group_tickets']                                    = 'Billets';
$lang['settings_group_sales']                                      = 'Facturation';
$lang['settings_group_email']                                      = 'Courriel';
$lang['settings_group_clients']                                    = 'Clients';
$lang['settings_group_newsfeed']                                   = 'Fil d\'actualité';
$lang['settings_group_cronjob']                                    = 'Cron Job';
$lang['settings_yes']                                              = 'Oui';
$lang['settings_no']                                               = 'Non';
$lang['settings_clients_default_theme']                            = 'Thème client par défaut';
$lang['settings_clients_allow_registration']                       = 'Autoriser les clients à s\'enregistrer';
$lang['settings_clients_allow_kb_view_without_registration']       = 'Autoriser l\'affichage de la FAQ sans inscription au CRM.';
$lang['settings_cron_send_overdue_reminder']                       = 'Envoyer un rappel pour les factures échues';
$lang['settings_cron_send_overdue_reminder_tooltip']               = 'Envoyer un courriel de relance automatique au client lorsque que le délai de paiement de la facture est échu.';
$lang['automatically_send_invoice_overdue_reminder_after']         = 'Envoyer automatiquement une relance après (jours)';
$lang['automatically_resend_invoice_overdue_reminder_after']       = 'Renvoyer automatiquement une relance après (jours)';
$lang['settings_email_host']                                       = 'Serveur SMTP';
$lang['settings_email_port']                                       = 'Port SMTP';
$lang['settings_email']                                            = 'Courriel';
$lang['settings_email_password']                                   = 'Mot de passe SMTP';
$lang['settings_email_charset']                                    = 'Type d\'encodage';
$lang['settings_email_signature']                                  = 'Signature de courriel';
$lang['settings_general_company_logo']                             = 'Logo de l\'entreprise';
$lang['settings_general_company_logo_tooltip']                     = 'Dimensions recommandées : 150 x 34px';
$lang['settings_general_company_remove_logo_tooltip']              = 'Retirer le logo';
$lang['settings_general_company_name']                             = 'Nom de l\'entreprise';
$lang['settings_general_company_main_domain']                      = 'Site internet';
$lang['settings_general_use_knowledgebase']                        = 'Afficher la rubrique FAQ';
$lang['settings_general_use_knowledgebase_tooltip']                = 'En sélectionnant OUI, la rubrique FAQ sera également visible sur l\'espace client.';
$lang['settings_general_tables_limit']                             = 'Nombre de lignes affichées par défaut dans vos tableaux';
$lang['settings_general_default_staff_role']                       = 'Rôle des collaborateurs par défaut';
$lang['settings_general_default_staff_role_tooltip']               = 'Lorsque vous ajoutez un nouveau collaborateur, cette fonction sera sélectionnée par défaut';
$lang['settings_localization_date_format']                         = 'Format de date';
$lang['settings_localization_default_timezone']                    = 'Fuseau horaire';
$lang['settings_localization_default_language']                    = 'Langue par défaut';
$lang['settings_newsfeed_max_file_upload_post']                    = 'Nombre maximal de fichiers à téléverser par article';
$lang['settings_reminders_contracts']                              = 'Rappel d\'expiration de contrat';
$lang['settings_reminders_contracts_tooltip']                      = 'Notification de rappel d\'expiration en jours';
$lang['settings_tickets_use_services']                             = 'Utiliser ce service';
$lang['settings_tickets_max_attachments']                          = 'Nombre maximum de pièces jointes par billet';
$lang['settings_tickets_allow_departments_access']                 = 'Autoriser le collaborateur à accéder uniquement aux tickets appartenant aux départements auxquels il est rattaché.';
$lang['settings_tickets_allowed_file_extensions']                  = 'Types de fichiers autorisés pour les pièces jointes';
$lang['settings_sales_general']                                    = 'Général';
$lang['settings_sales_general_note']                               = 'Préférences générales';
$lang['settings_sales_invoice_prefix']                             = 'Préfixe du numéro de facture';
$lang['settings_sales_decimal_separator']                          = 'Séparateur décimal';
$lang['settings_sales_thousand_separator']                         = 'Séparateur des milliers';
$lang['settings_sales_currency_placement']                         = 'Position de la devise';
$lang['settings_sales_currency_placement_before']                  = 'Avant le montant';
$lang['settings_sales_currency_placement_after']                   = 'Après le montant';
$lang['settings_sales_require_client_logged_in_to_view_invoice']   = 'Exiger que le client soit connecté pour voir la facture';
$lang['settings_sales_next_invoice_number']                        = 'Numéro suivant de la facture';
$lang['settings_sales_next_invoice_number_tooltip']                = 'Réglez ce champ sur 1 si vous voulez commencer à partir du début';
$lang['settings_sales_decrement_invoice_number_on_delete']         = 'Incrémenter le numéro de facture lors de la suppression';
$lang['settings_sales_decrement_invoice_number_on_delete_tooltip'] = 'Voulez-vous décrémenter le numéro de facture lorsque la dernière facture est supprimée ?  Ex. Si vous sélectionnez cette option sur OUI, la facture numéro 15 supprimée, le prochain numéro de facture sera le 14. Si vous sélectionnez  cette option sur NON la prochaine facture gardera le numéro 15.';
$lang['settings_sales_invoice_number_format']                      = 'Format de numérotation de facture';
$lang['settings_sales_invoice_number_format_year_based']           = 'Année et base de numéro';
$lang['settings_sales_invoice_number_format_number_based']         = 'Base de numéro (000001)';
$lang['settings_sales_company_info_note']                          = 'Ces informations seront affichées sur les factures/soumissions/paiement et autres documents PDF où les infos de l\'entreprise sont nécessaires.';
$lang['settings_sales_company_name']                               = 'Nom de l\'entreprise';
$lang['settings_sales_address']                                    = 'Adresse';
$lang['settings_sales_city']                                       = 'Ville';
$lang['settings_sales_country_code']                               = 'Code du pays';
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
$lang['lead_new_status']                   = 'Ajouter un état de prospect';
$lang['lead_status']                       = 'État du prospect';
$lang['lead_status_lowercase']             = 'état du prospect';
$lang['leads_status_table_name']           = 'Nom de l\'état';
$lang['leads_status_add_edit_name']        = 'Nom de l\'état';
$lang['leads_status_add_edit_order']       = 'Ordre';
$lang['lead_statuses_not_found']           = 'Aucun état de prospect trouvé';
$lang['leads_search']                      = 'Rechercher un prospect';
$lang['leads_table_total']                 = 'Nombre de prospects : %s';
$lang['leads_dt_name']                     = 'Nom';
$lang['leads_dt_email']                    = 'Courriel';
$lang['leads_dt_phonenumber']              = 'Téléphone';
$lang['leads_dt_assigned']                 = 'Attribué à';
$lang['leads_dt_status']                   = 'État';
$lang['leads_dt_last_contact']             = 'Dernier contact';
$lang['lead_add_edit_name']                = 'Nom';
$lang['lead_add_edit_email']               = 'Courriel';
$lang['lead_add_edit_phonenumber']         = 'Téléphone';
$lang['lead_add_edit_source']              = 'Source';
$lang['lead_add_edit_status']              = 'État du prospect';
$lang['lead_add_edit_assigned']            = 'Attribuer à';
$lang['lead_add_edit_datecontacted']       = 'Date de contact';
$lang['lead_add_edit_contacted_today']     = 'Contacté aujourd\'hui';
$lang['lead_add_edit_activity']            = 'Historique';
$lang['lead_add_edit_notes']               = 'Notes';
$lang['lead_add_edit_add_note']            = 'Ajouter une note';
$lang['lead_not_contacted']                = 'Je n\'ai pas contacté ce prospect';
$lang['lead_add_edit_contacted_this_lead'] = 'Je suis entré en contact avec ce prospect';

# Divers
$lang['access_denied'] = 'Accès refusé';
$lang['prev']          = 'Précédent';
$lang['next']          = 'Suivant';

# Datatables
$lang['dt_paginate_first']    = 'Première';
$lang['dt_paginate_last']     = 'Dernière';
$lang['dt_paginate_next']     = 'Suivante';
$lang['dt_paginate_previous'] = 'Précédente';
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

# Factures - Journal d'activités
$lang['user_sent_overdue_reminder'] = '%s rappel de la facture échue envoyé';

# Jours de la semaine
$lang['wd_monday']    = 'Lundi';
$lang['wd_tuesday']   = 'Mardi';
$lang['wd_wednesday'] = 'Mercredi';
$lang['wd_thursday']  = 'Jeudi';
$lang['wd_friday']    = 'Vendredi';
$lang['wd_saturday']  = 'Samedi';
$lang['wd_sunday']    = 'Dimanche';

# Admin  - Barre latérale gauche
$lang['als_dashboard']             = 'Tableau de bord';
$lang['als_clients']               = 'Clients';
$lang['als_leads']                 = 'Prospects';
$lang['als_contracts']             = 'Contrats';
$lang['als_sales']                 = 'Ventes';
$lang['als_staff']                 = 'Collaborateurs';
$lang['als_tasks']                 = 'Tâches';
$lang['als_kb']                    = 'FAQ';
$lang['als_media']                 = 'Média';
$lang['als_reports']               = 'Rapports';
$lang['als_reports_sales_submenu'] = 'Ventes';
$lang['als_reports_leads_submenu'] = 'Prospects';
$lang['als_kb_articles_submenu']   = 'Publications de FAQ';
$lang['als_utilities']             = 'Utilitaires';
$lang['als_announcements_submenu'] = 'Annonces';
$lang['als_calendar_submenu']      = 'Calendrier';
$lang['als_activity_log_submenu']  = 'Journal d\'activité';

# Admin - Barre de personnalisation
$lang['acs_ticket_priority_submenu']           = 'Priorité du billet ';
$lang['acs_ticket_statuses_submenu']           = 'État du billet';
$lang['acs_ticket_predefined_replies_submenu'] = 'Réponses prédéfinies';
$lang['acs_ticket_services_submenu']           = 'Services';
$lang['acs_departments']                       = 'Départements';
$lang['acs_leads']                             = 'Prospects';
$lang['acs_leads_sources_submenu']             = 'Sources';
$lang['acs_leads_statuses_submenu']            = 'États';
$lang['acs_sales_taxes_submenu']               = 'Taxes';
$lang['acs_sales_currencies_submenu']          = 'Devises';
$lang['acs_sales_payment_modes_submenu']       = 'Modes de paiement';
$lang['acs_email_templates']                   = 'Modèles de courriels';
$lang['acs_roles']                             = 'Rôles';
$lang['acs_settings']                          = 'Configuration';

# Billets
$lang['new_ticket']                                          = 'Ouvrir un nouveau billet';
$lang['tickets']                                             = 'Billets';
$lang['ticket']                                              = 'Billet';
$lang['ticket_lowercase']                                    = 'billet';
$lang['support_tickets']                                     = 'Support billets';
$lang['support_ticket']                                      = 'Support billet';
$lang['ticket_settings_to']                                  = 'Pour';
$lang['ticket_settings_email']                               = 'Courriel';
$lang['ticket_settings_departments']                         = 'Département';
$lang['ticket_settings_service']                             = 'Service';
$lang['ticket_settings_priority']                            = 'Priorité';
$lang['ticket_settings_subject']                             = 'Objet';
$lang['ticket_settings_assign_to']                           = 'Attribuer le billet à (utilisateur en cours par défaut)';
$lang['ticket_add_body']                                     = 'Contenu du billet';
$lang['ticket_add_attachments']                              = 'Pièces jointes';
$lang['ticket_no_reply_yet']                                 = 'Pas de réponse pour l\'instant';
$lang['new_ticket_added_successfully']                       = 'Billet #%s ajouté';
$lang['replied_to_ticket_successfully']                      = 'billet #%s répondu';
$lang['ticket_settings_updated_successfully']                = 'Paramètres du billet mis à jour';
$lang['ticket_settings_updated_successfully_and_reassigned'] = 'Paramètres du billet mis à jour - attribué au département % s ';
$lang['ticket_dt_subject']                                   = 'Objet';
$lang['ticket_dt_department']                                = 'Département';
$lang['ticket_dt_service']                                   = 'Service';
$lang['ticket_dt_submitter']                                 = 'Client';
$lang['ticket_dt_status']                                    = 'État';
$lang['ticket_dt_priority']                                  = 'Priorité';
$lang['ticket_dt_last_reply']                                = 'Dernière réponse';
$lang['ticket_single_add_reply']                             = 'Ajouter une réponse';
$lang['ticket_single_add_note']                              = 'Ajouter une note';
$lang['ticket_single_other_user_tickets']                    = 'Autres billets';
$lang['ticket_single_settings']                              = 'Réglages';
$lang['ticket_single_priority']                              = 'Priorité: %s';
$lang['ticket_single_last_reply']                            = 'Dernière réponse : %s';
$lang['ticket_single_ticket_note_by']                        = 'Note du billet par %s';
$lang['ticket_single_note_added']                            = 'Note ajoutée : %s';
$lang['ticket_single_change_status']                         = 'Changer le état';
$lang['ticket_single_assign_to_me_on_update']                = 'M\'assigner ce billet automatiquement';
$lang['ticket_single_insert_predefined_reply']               = 'Insérer une réponse prédéfinie';
$lang['ticket_single_insert_knowledge_base_link']            = 'Insérer le lien de la FAQ';
$lang['ticket_single_attachments']                           = 'Pièces jointes';
$lang['ticket_single_add_response']                          = 'Ajouter une réponse';
$lang['ticket_single_note_heading']                          = 'Note';
$lang['ticket_single_add_note']                              = 'Ajouter une note';
$lang['ticket_settings_none_assigned']                       = 'Aucun';
$lang['ticket_status_changed_successfully']                  = 'Le état du billet a été changé';
$lang['ticket_status_changed_fail']                          = 'Problème lors du changement de état du billet';
$lang['ticket_staff_string']                                 = 'Collaborateur';
$lang['ticket_client_string']                                = 'Client';
$lang['ticket_posted']                                       = 'Publié: %s';
$lang['ticket_access_by_department_denied']                  = 'Vous n\'avez pas accès à ce billet. Celui-ci appartient au département auquel vous n\'êtes pas affecté.';

# Équipe
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
$lang['staff_dt_email']                                = 'Courriel';
$lang['staff_dt_last_Login']                           = 'Dernière connexion';
$lang['staff_dt_active']                               = 'Actif';
$lang['staff_add_edit_firstname']                      = 'Prénom';
$lang['staff_add_edit_lastname']                       = 'Nom';
$lang['staff_add_edit_email']                          = 'Courriel';
$lang['staff_add_edit_phonenumber']                    = 'Téléphone';
$lang['staff_add_edit_facebook']                       = 'Facebook';
$lang['staff_add_edit_linkedin']                       = 'LinkedIn';
$lang['staff_add_edit_skype']                          = 'Skype';
$lang['staff_add_edit_departments']                    = 'Membre du département';
$lang['staff_add_edit_role']                           = 'Rôle';
$lang['staff_add_edit_permissions']                    = 'Permissions';
$lang['staff_add_edit_administrator']                  = 'Définir comme administrateur';
$lang['staff_add_edit_password']                       = 'Mot de passe';
$lang['staff_add_edit_password_note']                  = 'Remarque: si vous remplissez les champs, le mot de passe de ce collaborateur sera modifié.';
$lang['staff_add_edit_password_last_changed']          = 'Dernière modification du mot de passe';
$lang['staff_add_edit_notes']                          = 'Notes';
$lang['staff_add_edit_note_description']               = 'Note description';
$lang['staff_notes_table_description_heading']         = 'Note';
$lang['staff_notes_table_addedfrom_heading']           = 'Ajouté par';
$lang['staff_notes_table_dateadded_heading']           = 'Ajouté le';
$lang['staff_admin_profile']                           = 'Profil administrateur';
$lang['staff_profile_notifications']                   = 'Notifications';
$lang['staff_profile_departments']                     = 'Départements';
$lang['staff_edit_profile_image']                      = 'Image du profil';
$lang['staff_edit_profile_your_departments']           = 'Votre département';
$lang['staff_edit_profile_change_your_password']       = 'Modifier votre mot de passe';
$lang['staff_edit_profile_change_old_password']        = 'Ancien mot de passe';
$lang['staff_edit_profile_change_new_password']        = 'Nouveau mot de passe';
$lang['staff_edit_profile_change_repeat_new_password'] = 'Répeter le mot de passe';

# Équipe - Tâches
$lang['new_task']                           = 'Nouvelle tâche';
$lang['tasks']                              = 'Tâches';
$lang['task']                               = 'Tâche';
$lang['task_lowercase']                     = 'tâche';
$lang['comment_string']                     = 'Commentaire';
$lang['task_marked_as_complete']            = 'Tâche marquée comme étant accomplie';
$lang['task_follower_removed']              = 'Tâche du suiveur supprimée';
$lang['task_assignee_removed']              = 'Affectation de la tâche supprimée';
$lang['task_no_assignees']                  = 'Aucun collaborateur assigné pour cette tâche';
$lang['task_no_followers']                  = 'Aucun suiveur pour cette tâche';
$lang['task_list_all']                      = 'Toutes';
$lang['task_list_not_assigned']             = 'Non attribuée';
$lang['task_list_duedate_passed']           = 'Date d\'échéance dépassée';
$lang['tasks_dt_name']                      = 'Nom';
$lang['task_single_priority']               = 'Priorité';
$lang['task_single_start_date']             = 'Date de début';
$lang['task_single_due_date']               = 'Date de fin';
$lang['task_single_finished']               = 'Accomplie le';
$lang['task_single_mark_as_complete']       = 'Marquer comme accomplie';
$lang['task_single_edit']                   = 'Éditer';
$lang['task_single_delete']                 = 'Supprimer';
$lang['task_single_assignees']              = 'Attribué à';
$lang['task_single_assignees_select_title'] = 'Attribuer la tâche à';
$lang['task_single_followers']              = 'Suiveur';
$lang['task_single_followers_select_title'] = 'Ajouter un suiveur';
$lang['task_single_add_new_comment']        = 'Nouveau commentaire';
$lang['task_add_edit_subject']              = 'Objet';
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

# Billets - États d'avancement
$lang['new_ticket_status']            = 'Nouvel état de billet';
$lang['ticket_statuses']              = 'États du billet';
$lang['ticket_status']                = 'État du billet';
$lang['ticket_status_lowercase']      = 'état du billet';
$lang['ticket_statuses_dt_name']      = 'Nom';
$lang['no_ticket_statuses_found']     = 'Aucun état de billet trouvé';
$lang['ticket_statuses_table_total']  = 'Nombre dans cet état : %s';
$lang['ticket_status_add_edit_name']  = 'Nom de l\'état du billet';
$lang['ticket_status_add_edit_color'] = 'Couleur';
$lang['ticket_status_add_edit_order'] = 'Ordre de l\'état';

# Tâche privée (To Do)
$lang['new_todo']                  = 'Nouvelle tâche privée';
$lang['my_todos']                  = 'Mes tâches privées';
$lang['todo']                      = 'Tâche privée';
$lang['todo_lowercase']            = 'tâche privée';
$lang['todo_status_changed']       = 'État de la tâche privée modifié';
$lang['todo_add_title']            = 'Nouvelle tâche privée';
$lang['add_new_todo_description']  = 'Description';
$lang['no_finished_todos_found']   = 'Aucune tâche privée réalisé pour l\'instant';
$lang['no_unfinished_todos_found'] = 'Aucune tâche privée pour l\'instant';
$lang['unfinished_todos_title']    = 'Tâches privées non réalisées';
$lang['finished_todos_title']      = 'Dernières tâches privées réalisées';

# Utilitaires
$lang['utility_activity_log']                        = 'Journal d\'activités';
$lang['utility_activity_log_filter_by_date']         = 'Filtrer par date';
$lang['utility_activity_log_dt_description']         = 'Description';
$lang['utility_activity_log_dt_date']                = 'Date';
$lang['utility_activity_log_dt_staff']               = 'Collaborateur';
$lang['utility_calendar_new_event_title']            = 'Nouvel événement';
$lang['utility_calendar_new_event_start_date']       = 'Date de début';
$lang['utility_calendar_new_event_end_date']         = 'Date de fin';
$lang['utility_calendar_new_event_make_public']      = 'Rendre public';
$lang['utility_calendar_event_added_successfully']   = 'Nouvel événement ajouté';
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

# Pied de page
$lang['clients_copyright'] = 'Copyright %s';

# Contrats
$lang['clients_contracts']               = 'Contrats';
$lang['clients_contracts_dt_subject']    = 'Objet';
$lang['clients_contracts_dt_start_date'] = 'Date de début';
$lang['clients_contracts_dt_end_date']   = 'Date de fin';

# Accueil
$lang['clients_quick_invoice_info']           = 'Vue d\'ensemble de facturation';
$lang['clients_home_currency_select_tooltip'] = 'Vous devez sélectionner une devise car vous avez des factures avec des devises différentes';

# Factures
$lang['clients_invoice_html_btn_download'] = 'Télécharger';
$lang['clients_my_invoices']               = 'Mes Factures';
$lang['clients_invoice_dt_number']         = 'N° de facture';
$lang['clients_invoice_dt_date']           = 'Date de facturation';
$lang['clients_invoice_dt_duedate']        = 'Date d\'échéance';
$lang['clients_invoice_dt_amount']         = 'Montant';
$lang['clients_invoice_dt_status']         = 'État';

# Profil
$lang['clients_profile_heading'] = 'Profil';

# Édition du profil et inscription START
$lang['clients_firstname'] = 'Prénom';
$lang['clients_lastname']  = 'Nom';
$lang['clients_email']     = 'Courriel';
$lang['clients_company']   = 'Entreprise';
$lang['clients_vat']       = 'Numéro de TVA';
$lang['clients_phone']     = 'Téléphone';
$lang['clients_country']   = 'Pays';
$lang['clients_city']      = 'Ville';
$lang['clients_address']   = 'Adresse';
$lang['clients_zip']       = 'Code Postal';
$lang['clients_state']     = 'Province';
# Édition du profil et inscription END

$lang['clients_register_password']                    = 'Mot de passe';
$lang['clients_register_password_repeat']             = 'Confirmer le mot de passe';
$lang['clients_edit_profile_update_btn']              = 'Mettre à jour';
$lang['clients_edit_profile_change_password_heading'] = 'Changer le mot de passe';
$lang['clients_edit_profile_old_password']            = 'Ancien mot de passe';
$lang['clients_edit_profile_new_password']            = 'Nouveau mot de passe';
$lang['clients_edit_profile_new_password_repeat']     = 'Confirmer le mot de passe';
$lang['clients_edit_profile_change_password_btn']     = 'Mettre à jour';
$lang['clients_profile_last_changed_password']        = 'Dernière modification du mot de passe %s';

# FAQ
$lang['clients_knowledge_base']                    = 'FAQ';
$lang['clients_knowledge_base_articles_not_found'] = 'Aucun article trouvé dans la FAQ';
$lang['clients_knowledge_base_find_useful']        = 'Avez-vous trouvé cet article utile ?';
$lang['clients_knowledge_base_find_useful_yes']    = 'Oui';
$lang['clients_knowledge_base_find_useful_no']     = 'Non';
$lang['clients_article_only_1_vote_today']         = 'Vous ne pouvez voter qu\'une seule fois en 24 heures';
$lang['clients_article_voted_thanks_for_feedback'] = 'Merci de votre commentaire';

# Billets
$lang['clients_ticket_open_subject']               = 'Ouvrir un billet';
$lang['clients_ticket_open_departments']           = 'Département';
$lang['clients_tickets_heading']                   = 'Support Billets';
$lang['clients_ticket_open_service']               = 'Service';
$lang['clients_ticket_open_priority']              = 'Priorité';
$lang['clients_ticket_open_body']                  = 'Contenu du billet';
$lang['clients_ticket_attachments']                = 'Pièces jointes';
$lang['clients_single_ticket_string']              = 'Billet';
$lang['clients_single_ticket_replied']             = 'Répondu le: %s';
$lang['clients_single_ticket_information_heading'] = 'Billet Informations';
$lang['clients_tickets_dt_number']                 = 'Nº de billet';
$lang['clients_tickets_dt_subject']                = 'Objet';
$lang['clients_tickets_dt_department']             = 'Département';
$lang['clients_tickets_dt_service']                = 'Service';
$lang['clients_tickets_dt_status']                 = 'État';
$lang['clients_tickets_dt_last_reply']             = 'Dernière réponse';
$lang['clients_ticket_single_department']          = 'Departement: %s';
$lang['clients_ticket_single_submitted']           = 'Soumis: %s';
$lang['clients_ticket_single_status']              = 'État:';
$lang['clients_ticket_single_priority']            = 'Priorité: %s';
$lang['clients_ticket_single_add_reply_btn']       = 'Ajouter une réponse';
$lang['clients_ticket_single_add_reply_heading']   = 'Ajouter une réponse pour ce billet';

# Connexion
$lang['clients_login_heading_no_register'] = 'Espace client';
$lang['clients_login_heading_register']    = 'Veuillez vous connecter ou vous inscrire';
$lang['clients_login_email']               = 'Courriel';
$lang['clients_login_password']            = 'Mot de passe';
$lang['clients_login_remember']            = 'Se souvenir de moi';
$lang['clients_login_login_string']        = 'Connexion';

# Inscription
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
$lang['payment_date']                                  = 'Date du paiement :';
$lang['payment_view_mode']                             = 'Mode de paiement :';
$lang['payment_total_amount']                          = 'Montant du paiement';
$lang['payment_table_invoice_number']                  = 'N° de facture';
$lang['payment_table_invoice_date']                    = 'Date de facturation';
$lang['payment_table_invoice_amount_total']            = 'Montant';
$lang['payment_table_payment_amount_total']            = 'Montant du paiement';
$lang['payments_table_transaction_id']                 = 'Transaction ID: %s';
$lang['payment_getaway_token_not_found']               = 'Token introuvable';
$lang['online_payment_recorded_success']               = 'Paiement enregistré';
$lang['online_payment_recorded_success_fail_database'] = 'Le paiement est validé, mais n\'a pas pu être enregistré dans la base de données, veuillez contacter l\'administrateur.';

# Prospects
$lang['lead_convert_to_client']                = 'Convertir en client';
$lang['lead_convert_to_email']                 = 'Courriel';
$lang['lead_convert_to_client_firstname']      = 'Prénom';
$lang['lead_convert_to_client_lastname']       = 'Nom';
$lang['lead_email_already_exists']             = 'Le courriel prospect existe déjà dans les données clients';
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
$lang['invoices_create_invoice_from_recurring_only_on_paid_invoices']         = 'Créer une nouvelle facture sur la base de la facture récurrente seulement si celle-ci a l\'état “payée”';
$lang['invoices_create_invoice_from_recurring_only_on_paid_invoices_tooltip'] = 'Pour créer une nouvelle facture sur la base de la facture récurrente seulement si la facture principale a l\'état “payée”? Si vous sélectionnez l\’option NON et que la facture récurrente n\’a pas l\'état « payée », la nouvelle facture ne sera pas créée.';
$lang['view_invoice_pdf_link_pay']                                            = 'Régler la facture';

# Modes de paiements
$lang['payment_mode_add_edit_description']         = 'les comptes bancaires / description';
$lang['payment_mode_add_edit_description_tooltip'] = 'Vous pouvez renseigner ici les informations bancaires. Elles seront affichées sur les factures en ligne';
$lang['payment_modes_dt_description']              = 'Comptes bancaires / Description';
$lang['payment_modes_add_edit_announcement']       = 'Remarque : Les modes de paiement indiqués ci-dessous concernent les modes hors ligne. Les modes de paiement en ligne peuvent être configurés dans : Paramètres -> Configuration -> Passerelles de paiement.';
$lang['payment_mode_add_edit_active']              = 'Actif';
$lang['payment_modes_dt_active']                   = 'Actif';

# Contrats
$lang['contract_not_found'] = 'Contract introuvable. Veuillez verifier dans le journal d\'activité si celui-ci n\'a pas été supprimé';

# Paramètres
$lang['setting_bar_heading']                               = 'Paramètres';
$lang['settings_group_online_payment_modes']               = 'Passerelles de paiement';
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
$lang['clients_tickets_heading'] = 'Support Billets';

# Payments
$lang['payment_for_invoice'] = 'Paiement de la facture';
$lang['payment_total']       = 'Total: %s';

# Invoice
$lang['invoice_html_online_payment']             = 'Paiement en ligne';
$lang['invoice_html_online_payment_button_text'] = 'Payer maintenant';
$lang['invoice_html_payment_modes_not_selected'] = 'Veuillez sélectionner un mode de paiement';
$lang['invoice_html_amount_blank']               = 'Le montant total ne peut pas être vide ou à zéro';
$lang['invoice_html_offline_payment']            = 'Informations bancaire';
$lang['invoice_html_amount']                     = 'Montant';
# Version 1.0.2
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
$lang['invoice_add_edit_allowed_payment_modes']           = 'Autoriser les moyens de paiement pour cette facture';
$lang['invoice_add_edit_recurring_invoices_from_invoice'] = 'Factures récurrentes de cette facture';
$lang['invoice_add_edit_no_payment_modes_found']          = 'Aucun moyens de paiement trouvés.';
$lang['invoice_html_total_pay']                           = 'Total: %s';

# Courriel templates
$lang['email_templates_table_heading_name'] = 'Liste des modèles';

# General
$lang['discount_type']            = 'Type de remise';
$lang['discount_type_after_tax']  = 'Après la taxe';
$lang['discount_type_before_tax'] = 'Avant la taxe';
$lang['terms_and_conditions']     = 'Conditions générales de vente';
$lang['reference_no']             = 'Nº de référence';
$lang['no_discount']              = 'Aucune remise';
$lang['view_stats_tooltip']       = 'Stats en bref';

# Clients
$lang['zip_from_date']            = 'A partir de la date:';
$lang['zip_to_date']              = 'Jusqu\'à la date:';
$lang['client_zip_payments']      = 'Exporter en ZIP';
$lang['client_zip_invoices']      = 'Exporter en  ZIP';
$lang['client_zip_estimates']     = 'Exporter en ZIP';
$lang['client_zip_status']        = 'État';
$lang['client_zip_status_all']    = 'Tous';
$lang['client_zip_payment_modes'] = 'Paiement effectué par:';
$lang['client_zip_no_data_found'] = 'Aucun(e) %s trouvé(e)';

# Payments
$lang['payment_mode']         = 'Mode de paiement';
$lang['payment_view_heading'] = 'Paiement';

# Settings
$lang['settings_allow_payment_amount_to_be_modified']               = 'Autoriser les clients à modifier le montant à régler (pour les paiements en ligne)';

$lang['settings_delete_only_on_last_invoice']                       = 'Autoriser la supression d\'une facture uniquement sur la dernière facture';
$lang['settings_sales_estimate_prefix']                             = 'Préfixe du numéro de soumission';
$lang['settings_sales_next_estimate_number']                        = 'Numéro suivant de la soumission';
$lang['settings_sales_next_estimate_number_tooltip']                = 'Réglez ce champ sur 1 si vous voulez commencer à partir du début';
$lang['settings_sales_decrement_estimate_number_on_delete']         = 'Décrémenter le numéro de facture lors de la suppression';
$lang['settings_sales_decrement_estimate_number_on_delete_tooltip'] = 'Voulez-vous décrémenter le numéro de facture lorsque la dernière facture est supprimée ?  Ex. Si vous sélectionnez cette option sur OUI, la facture numéro 15 supprimée, le prochain numéro de facture sera le 14. Si vous sélectionnez  cette option sur NON la prochaine facture gardera le numéro 15.';
$lang['settings_sales_estimate_number_format']                      = 'Format de numérotation des soumissions';
$lang['settings_sales_estimate_number_format_year_based']           = 'Année et base de numéro';
$lang['settings_sales_estimate_number_format_number_based']         = 'Base de numéro (000001)';
$lang['settings_delete_only_on_last_estimate']                      = 'Autoriser la supression d\'une soumission uniquement sur la dernière soumission';
$lang['settings_send_test_email_heading']                           = 'Envoyer un courriel test';
$lang['settings_send_test_email_subheading']                        = 'Envoyer un courriel test afin de vous assurer que vos paramètres SMTP sont correctement définis.';
$lang['settings_send_test_email_string']                            = 'Adresse courriel Test';
$lang['settings_smtp_settings_heading']                             = 'Paramètres SMTP';
$lang['settings_smtp_settings_subheading']                          = 'Configuration du courriel principal';
$lang['settings_sales_heading_general']                             = 'Général';
$lang['settings_sales_heading_invoice']                             = 'Facture';
$lang['settings_sales_heading_estimates']                           = 'Soumissions';
$lang['settings_sales_cron_invoice_heading']                        = 'Facture';

# Tasks
$lang['tasks_dt_datestart'] = 'Date de début';

# Invoice General
$lang['invoice_discount'] = 'Remise';

# Settings
$lang['settings_rtl_support_admin']                                   = 'RTL Espace Admin (de droite à gauche)';
$lang['settings_rtl_support_client']                                  = 'RTL Espace Client (de droite à gauche)';
$lang['settings_estimate_auto_convert_to_invoice_on_client_accept']   = 'Convertir automatiquement les soumissions en facture après la validation du client';
$lang['settings_exclude_estimate_from_client_area_with_draft_status'] = 'Exclure les soumissions avec l\'état brouillon de l\'espace client';

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

# Soumissions
$lang['estimates']                                = 'Soumissions';
$lang['estimate']                                 = 'Soumission';
$lang['estimate_lowercase']                       = 'soumission';
$lang['create_new_estimate']                      = 'Nouvelle soumission';
$lang['view_estimate']                            = 'Voir la soumission';
$lang['estimate_sent_to_client_success']          = 'Soumission envoyée au client';
$lang['estimate_sent_to_client_fail']             = 'Problème lors de l\'envoi de la soumission';
$lang['estimate_view']                            = 'Voir la soumission';
$lang['estimate_select_customer']                 = 'Client';
$lang['estimate_add_edit_number']                 = 'Nº de soumission';
$lang['estimate_add_edit_date']                   = 'Date de la soumission';
$lang['estimate_add_edit_expirydate']             = 'Date de validité';
$lang['estimate_add_edit_currency']               = 'Devise';
$lang['estimate_add_edit_client_note']            = 'Note au client';
$lang['estimate_add_edit_admin_note']             = 'Note privée';
$lang['estimates_toggle_table_tooltip']           = 'Afficher le tableau complet';
$lang['estimate_add_edit_advanced_options']       = 'Options avancées';
$lang['estimate_to']                              = 'À';
$lang['estimates_list_all']                       = 'Tous';
$lang['estimate_invoiced_date']                   = 'Soumission facturée le %s';
$lang['edit_estimate_tooltip']                    = 'Editer la soumission';
$lang['delete_estimate_tooltip']                  = 'Supprimer';
$lang['estimate_sent_to_email_tooltip']           = 'Envoyer par courriel';
$lang['estimate_already_send_to_client_tooltip']  = 'Cette soumission a déjà été envoyé au client %s';
$lang['estimate_view_activity_tooltip']           = 'Historique de la soumission';
$lang['estimate_send_to_client_modal_heading']    = 'Envoyer cette soumission au client';
$lang['estimate_send_to_client_attach_pdf']       = 'Joindre la version PDF';
$lang['estimate_send_to_client_preview_template'] = 'Aperçu du modèle de courriel';
$lang['estimate_dt_table_heading_number']         = 'N° de soumission';
$lang['estimate_dt_table_heading_date']           = 'Date de la soumission';
$lang['estimate_dt_table_heading_client']         = 'Client';
$lang['estimate_dt_table_heading_expirydate']     = 'Date de validité';
$lang['estimate_dt_table_heading_amount']         = 'Montant';
$lang['estimate_dt_table_heading_status']         = 'État';
$lang['estimate_convert_to_invoice']              = 'Convertir en facture';

# Clients
$lang['client_payments_tab'] = 'Paiements';

# Estimate General
$lang['estimate_pdf_heading']            = 'SOUMISSION';
$lang['estimate_table_item_heading']     = 'Produit';
$lang['estimate_table_quantity_heading'] = 'Qté';
$lang['estimate_table_rate_heading']     = 'Prix';
$lang['estimate_table_tax_heading']      = 'Taxe';
$lang['estimate_table_amount_heading']   = 'Total';
$lang['estimate_subtotal']               = 'Sous-total';
$lang['estimate_adjustment']             = 'Ajustement';
$lang['estimate_discount']               = 'Remise';
$lang['estimate_total']                  = 'Total';
$lang['estimate_to']                     = 'À';
$lang['estimate_data_date']              = 'Date de la soumission';
$lang['estimate_data_expiry_date']       = 'Date de validité';
$lang['estimate_note']                   = 'Note:';
$lang['estimate_status_draft']           = 'Brouillon';
$lang['estimate_status_sent']            = 'Envoyée';
$lang['estimate_status_declined']        = 'Déclinée';
$lang['estimate_status_accepted']        = 'Acceptée';
$lang['estimate_status_expired']         = 'Expirée';
$lang['estimate_note']                   = 'Note:';

## Clients
$lang['clients_estimate_dt_number']             = 'N° de soumission';
$lang['clients_estimate_dt_date']               = 'Date de la soumission';
$lang['clients_estimate_dt_duedate']            = 'Date de validité';
$lang['clients_estimate_dt_amount']             = 'Montant';
$lang['clients_estimate_dt_status']             = 'État';
$lang['clients_nav_estimates']                  = 'Soumissions';
$lang['clients_decline_estimate']               = 'Décliner';
$lang['clients_accept_estimate']                = 'Accepter';
$lang['clients_my_estimates']                   = 'Soumissions';
$lang['clients_estimate_invoiced_successfully'] = 'Soumission accepté. Voici la facture de cette soumission';
$lang['clients_estimate_accepted_not_invoiced'] = 'Nous vous remercions d\'avoir accepté cette soumission';
$lang['clients_estimate_declined']              = 'Soumission décliné. Vous pouvez accepter cette soumission à tout moment avant la date d\'expiration';
$lang['clients_estimate_failed_action']         = 'Impossible de prendre une décision sur cette soumission';
$lang['client_add_edit_profile']                = 'Profil';

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
$lang['ticket_reply'] = 'Réponse billet';

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
$lang['customers_summary']                 = 'Vue d\'ensemble des clients';
$lang['customers_summary_active']          = 'Contacts actifs';
$lang['customers_summary_inactive']        = 'Contacts inactifs';
$lang['customers_summary_logged_in_today'] = 'Connectés aujourd\'hui';

# Authentification
$lang['admin_auth_forgot_password_email']     = 'Courriel';
$lang['admin_auth_forgot_password_heading']   = 'Mot de passe oublié';
$lang['admin_auth_login_heading']             = 'Connexion';
$lang['admin_auth_login_email']               = 'Courriel';
$lang['admin_auth_login_password']            = 'Mot de passe';
$lang['admin_auth_login_remember_me']         = 'Se souvenir de moi';
$lang['admin_auth_login_button']              = 'Connexion';
$lang['admin_auth_login_fp']                  = 'Mot de passe oublié ?';
$lang['admin_auth_reset_password_heading']    = 'Réinitialiser le mot de passe';
$lang['admin_auth_reset_password']            = 'Mot de passe';
$lang['admin_auth_reset_password_repeat']     = 'Confirmer le mot de passe';
$lang['admin_auth_invalid_email_or_password'] = 'Courriel ou mot de passe invalide';
$lang['admin_auth_inactive_account']          = 'Compte inactif';

# Calendrier
$lang['calendar_estimate']          = 'Soumission';
$lang['calendar_invoice']           = 'Facture';
$lang['calendar_contract']          = 'Contrat';
$lang['calendar_customer_reminder'] = 'Rappel client';
$lang['calendar_event']             = 'Évènement';
$lang['calendar_task']              = 'Tâche';

# Prospects
$lang['lead_edit_delete_tooltip'] = 'Supprimer';
$lang['lead_attachments']         = 'Pièces jointes';

# Admin Customizer Sidebar
$lang['acs_finance'] = 'Ventes';

# Settings
$lang['settings_show_sale_agent_on_invoices']       = 'Indiquer le contact sur les factures';
$lang['settings_show_sale_agent_on_estimates']      = 'Indiquer le contact sur les soumissions';
$lang['settings_predefined_predefined_term']        = 'Termes et conditions générales par défaut';
$lang['settings_predefined_clientnote']             = 'Note au client par défaut';
$lang['settings_custom_pdf_logo_image_url']         = 'URL personnalisée du logo de l\'entreprise pour les PDF';
$lang['settings_custom_pdf_logo_image_url_tooltip'] = 'Vous aurez probablement des problèmes avec les images de type PNG. L\'affichage de la transparence varie différemment en fonction de la version de php-imagick ou de php-gd utilisée. Essayez de mettre à jour php-imagick et désactivez php-gd. Si vous laissez ce champ vide le logo téléchargé sera utilisé par défaut.';

# General
$lang['sale_agent_string']               = 'Contact';
$lang['amount_display_in_base_currency'] = 'Le montant est affiché dans votre devise de base - Utilisez uniquement ce rapport si vous utilisez une seule devise pour les paiements et les dépenses.';

# Prospects
$lang['leads_summary'] = 'Vue d\'ensemble des prospects';

# Contrats
$lang['contract_value']                       = 'Valeur du contrat';
$lang['contract_trash']                       = 'Corbeille';
$lang['contracts_view_trash']                 = 'Voir la corbeille';
$lang['contracts_view_all']                   = 'Tous';
$lang['contracts_view_exclude_trashed']       = 'Exclure les contrats mis à la corbeille';
$lang['contract_value_tooltip']               = 'Ajouter la valeur du contrat. La valeur sera affichée dans votre devise de base.';
$lang['contract_trash_tooltip']               = 'Si le contrat est envoyé à la corbeille, il ne sera plus affiché sur l\'espace client, ni sur le tableau de bord et les autres affichages de statistiques. Il ne sera pas non plus affiché dans la liste de tous les contrats.';
$lang['contract_renew_heading']               = 'Renouveler le contrat';
$lang['contract_summary_heading']             = 'Vue d\'ensemble des contrats';
$lang['contract_summary_expired']             = 'Expiré';
$lang['contract_summary_active']              = 'Actif';
$lang['contract_summary_about_to_expire']     = 'Sur le point d\'expirer';
$lang['contract_summary_recently_added']      = 'Récemment ajouté';
$lang['contract_summary_trash']               = 'Corbeille';
$lang['contract_summary_by_type']             = 'Contrats par type';
$lang['contract_summary_by_type_value']       = 'Valeur des contrats par type';
$lang['contract_renewed_successfully']        = 'Contrat renouvelé';
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

# Dépenses
$lang['acs_expense_categories'] = 'Catégories de dépenses';
$lang['expense_category']                             = 'Catégorie de dépenses';
$lang['expense_category_lowercase']                   = 'catégorie de dépenses';
$lang['new_expense']                                  = 'Nouvelle dépense';
$lang['expense_add_edit_name']                        = 'Nom de la catégorie';
$lang['expense_add_edit_description']                 = 'Description';
$lang['expense_categories']                           = 'Catégories de dépenses';
$lang['new_expense_category']                         = 'Ajouter une catégorie';
$lang['dt_expense_description']                       = 'Description';
$lang['expense']                                      = 'Dépense';
$lang['expenses']                                     = 'Dépenses';
$lang['expense_lowercase']                            = 'dépenses';
$lang['expense_add_edit_customer']                    = 'Client';
$lang['expense_add_edit_note']                        = 'Note';
$lang['expense_add_edit_date']                        = 'Date de la dépense';
$lang['expense_add_edit_amount']                      = 'Montant';
$lang['expense_add_edit_billable']                    = 'Facturable';
$lang['expense_add_edit_attach_receipt']              = 'Joindre un reçu';
$lang['expense_add_edit_reference_no']                = 'Nº de référence';
$lang['expense_receipt']                              = 'Reçu de la dépense';
$lang['expense_receipt_lowercase']                    = 'reçu de la dépense';
$lang['expense_dt_table_heading_category']            = 'Catégorie';
$lang['expense_dt_table_heading_amount']              = 'Montant';
$lang['expense_dt_table_heading_date']                = 'Date';
$lang['expense_dt_table_heading_reference_no']        = 'Nº de référence';
$lang['expense_dt_table_heading_customer']            = 'Client';
$lang['expense_dt_table_heading_payment_mode']        = 'Mode de paiement';
$lang['expense_converted_to_invoice']                 = 'Dépense convertie en facture';
$lang['expense_converted_to_invoice_fail']            = 'Échec de la conversion de cette dépense à facturer. Vérifiez le journal des erreurs.';
$lang['expense_copy_success']                         = 'Dépense dupliquée.';
$lang['expense_copy_fail']                            = 'Échec de duplication de la dépense. Vérifiez les champs requis et essayez à nouveau.';
$lang['expenses_list_all']                            = 'Toutes';
$lang['expenses_list_billable']                       = 'Facturable';
$lang['expenses_list_non_billable']                   = 'Non facturable';
$lang['expenses_list_invoiced']                       = 'Facturées';
$lang['expenses_list_unbilled']                       = 'Non facturée';
$lang['expenses_list_recurring']                      = 'Récurrente';
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
$lang['expense_recurring_indicator']                  = 'Récurrente';
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
$lang['custom_field_estimate']    = 'Soumission';

# Tickets
$lang['ticket_single_private_staff_notes'] = 'Notes privées des collaborateurs';

# Business News
$lang['business_news'] = 'Les nouvelles de DKS';

# Navigation
$lang['nav_todo_items'] = 'Tâche privée';

# Contrats
$lang['clients_contracts_type'] = 'Type de contrat';

# Version 1.0.5
# General
$lang['no_tax']                              = 'Aucune taxe';
$lang['numbers_not_formatted_while_editing'] = 'Le nombre dans ce champ n\'est pas formaté lors de l\'ajout ou l\'édition de produit et doit rester non formaté.';
# Contrats
$lang['contracts_view_expired']         = 'Expiré';
$lang['contracts_view_without_dateend'] = 'Contrats sans date de fin';

# Courriel Templates
$lang['email_template_contracts_fields_heading'] = 'Contrats';

# Factures General
$lang['invoice_estimate_general_options'] = 'Options générales';
$lang['invoice_table_item_description']   = 'Description';
$lang['invoice_recurring_indicator']      = 'Récurrente';

# Soumissions
$lang['estimate_convert_to_invoice_successfully'] = 'Soumission convertie en facture';
$lang['estimate_table_item_description']          = 'Description';

# Version 1.0.6
# Invoices
# Currencies
$lang['cant_delete_base_currency'] = 'Vous ne pouvez pas supprimer votre devise de base. Vous devez selectionner une nouvelle devise de base avant de la supprimer.';
$lang['invoice_copy']              = 'Dupliquer';
$lang['invoice_copy_success']      = 'Facture dupliquée';
$lang['invoice_copy_fail']         = 'Impossible de dupliquer la facture';
$lang['invoice_due_after_help']    = 'Définir zéro pour éviter le calcul';
$lang['show_shipping_on_invoice']  = 'Afficher les informations d\'expédition sur la facture';

# Soumission
$lang['show_shipping_on_estimate']         = 'Afficher les informations d\'expédition sur la soumission';
$lang['is_invoiced_estimate_delete_error'] = 'Cette soumission est facturé. Vous ne pouvez pas supprimer cette soumission';

# Clients & Factures / Soumission
$lang['ship_to']                            = 'Envoyer à';
$lang['customer_profile_details']           = 'Informations générales';
$lang['billing_shipping']                   = 'Facturation et expédition';
$lang['billing_address']                    = 'Adresse de facturation';
$lang['shipping_address']                   = 'Adresse d\'expédition';
$lang['billing_street']                     = 'Rue';
$lang['billing_city']                       = 'Ville';
$lang['billing_state']                      = 'Province';
$lang['billing_zip']                        = 'Code Postal';
$lang['billing_country']                    = 'Pays';
$lang['shipping_street']                    = 'Rue';
$lang['shipping_city']                      = 'Ville';
$lang['shipping_state']                     = 'Province';
$lang['shipping_zip']                       = 'Code Postal';
$lang['shipping_country']                   = 'Pays';
$lang['get_shipping_from_customer_profile'] = 'Obtenez les détails d\'expédition à partir du profil client';

# Client
$lang['customer_default_currency']                             = 'Devise par défaut';
$lang['customer_update_address_info_on_invoices']              = 'Mettre à jour les informations de facturation et d\'expédition sur toutes les factures et toutes les soumissions.';
$lang['customer_update_address_info_on_invoices_help']         = 'Si vous sélectionnez cette option les informations de facturation et d\'expédition seront mises à jour sur toutes les factures et toutes les soumissions. Remarque : les factures avec l\'état payée ne seront pas affectées.';
$lang['setup_google_api_key_customer_map']                     = 'Paramétrez votre clé Google API pour visualiser la carte client';
$lang['customer_attachments_file']                             = 'Fichier';
$lang['client_send_set_password_email']                        = 'Envoyer un courriel pour la configuration du mot de passe';
$lang['customer_billing_same_as_profile']                      = 'Identique à l\'adresse principale';
$lang['customer_billing_copy']                                 = 'Copier l\'adresse de facturation';
$lang['customer_map']                                          = 'Map';
$lang['set_password_email_sent_to_client']                     = 'Le courriel de configuration du mot de passe a été envoyé au client';
$lang['set_password_email_sent_to_client_and_profile_updated'] = 'Le courriel de mise à jour du profil et de configuration du mot de passe a été envoyé au client';
$lang['customer_attachments']                                  = 'Pièces jointes';
$lang['customer_longitude']                                    = 'Longitude (Google Maps)';
$lang['customer_latitude']                                     = 'Latitude (Google Maps)';

# Authentication
$lang['admin_auth_set_password']         = 'Mot de passe';
$lang['admin_auth_set_password_repeat']  = 'Confirmer le mot de passe';
$lang['admin_auth_set_password_heading'] = 'Création du mot de passe';

# General
$lang['apply']                         = 'Appliquer';
$lang['department_calendar_id']        = 'ID de l\'agenda Google';
$lang['localization_default_language'] = 'Langue par défaut';
$lang['system_default_string']         = 'Paramètre système';
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
$lang['junk_leads']                       = 'Prospects indésirables';
$lang['lead_mark_as_lost']                = 'Marquer comme perdu';
$lang['lead_unmark_as_lost']              = 'Marquer comme retrouvé';
$lang['lead_marked_as_lost']              = 'Marqué comme perdu';
$lang['lead_unmarked_as_lost']            = 'Prospect marqué comme retrouvé';
$lang['leads_status_color']               = 'Couleur';
$lang['lead_mark_as_junk']                = 'Marquer comme indésirable';
$lang['lead_unmark_as_junk']              = 'Marquer comme actif';
$lang['lead_marked_as_junk']              = 'Prospect marqué comme indésirable';
$lang['lead_unmarked_as_junk']            = 'Prospect marqué comme actif';
$lang['lead_not_found']                   = 'Prospect introuvable';
$lang['lead_lost']                        = 'Perdu';
$lang['lead_junk']                        = 'Indésirable';
$lang['leads_not_assigned']               = 'Non attribué';

# Contacts
$lang['contract_not_visible_to_client'] = 'Masquer au client';
$lang['contract_edit_overview']         = 'Vue d\'ensemble du contrat';
$lang['contract_attachments']           = 'Pièces jointes';

# Tasks
$lang['task_view_make_public']     = 'Rendre public';
$lang['task_is_private']           = 'Tâche privée';
$lang['task_finished']             = 'Accomplie';
$lang['task_single_related']       = 'Attribuée à';
$lang['task_unmark_as_complete']   = 'Marquer comme non accomplie';
$lang['task_unmarked_as_complete'] = 'Tâche marquée comme non accomplie';
$lang['task_relation']             = 'Associée à';
$lang['task_public']               = 'Public';
$lang['task_public_help']          = 'Si vous definissez cette tâche comme public, elle sera visible par tous les collaborateurs. Autrement elle sera seulement visible par les utilisateurs concernés, suiveurs, auteurs et administrateurs';

# Settings
$lang['settings_general_favicon']                                            = 'Favicon';
$lang['settings_output_client_pdfs_from_admin_area_in_client_language']      = 'Exporter les documents PDF clients à partir du CRM dans la langue selectionnée par le client.';
$lang['settings_output_client_pdfs_from_admin_area_in_client_language_help'] = 'Si vous selectionnez cette option sur OUI et par exemple la langue par défaut du CRM est l\'anglais et que la langue par défaut du client est en français, l\'exportation des documents seront en français.';
$lang['settings_default_tax']                                                = 'Taxe par défaut';
$lang['setup_calendar_by_departments']                                       = 'Configurer le calendrier par département';
$lang['settings_calendar']                                                   = 'Calendrier';
$lang['settings_sales_invoice_due_after']                                    = 'Echéance de paiement (en jours)';
$lang['settings_google_api']                                                 = 'Clé API Google';
$lang['settings_gcal_main_calendar_id']                                      = 'ID d\'agenda Google';
$lang['settings_gcal_main_calendar_id_help']                                 = 'Ceci est l\'agenda principal de l\'entreprise. Tous les événements de ce calendrier seront affichés. Si vous souhaitez configurer un calendrier à un département spécifique vous pouvez l\'ajouter dans votre agenda Google.';
$lang['show_on_calendar']                                                    = 'Afficher sur le calendrier :';
$lang['show_invoices_on_calendar']                                           = 'Factures';
$lang['show_estimates_on_calendar']                                          = 'Soumissions';
$lang['show_contracts_on_calendar']                                          = 'Contrats';
$lang['show_tasks_on_calendar']                                              = 'Tâches';
$lang['show_customer_reminders_on_calendar']                                 = 'Rappels pour les clients';

# Prospects
$lang['copy_custom_fields_convert_to_customer']                      = 'Copier les champs personnalisés au profil client';
$lang['copy_custom_fields_convert_to_customer_help']                 = 'Si l\'un des champs personnalisés suivants n\'existe pas pour le client il sera automatiquement créé avec le même nom autrement seule la valeur sera copiée à partir du profil prospect.';
$lang['lead_profile']                                                = 'Profil';
$lang['lead_is_client']                                              = 'Client';
$lang['leads_email_integration_folder_no_encryption']                = 'Aucun cryptage';
$lang['leads_email_integration']                                     = 'Intégration courriel';
$lang['leads_email_active']                                          = 'Actif';
$lang['leads_email_integration_imap']                                = 'Serveur IMAP';
$lang['leads_email_integration_email']                               = 'Adresse courriel (connexion)';
$lang['leads_email_integration_password']                            = 'Mot de passe';
$lang['leads_email_integration_default_source']                      = 'Source par défaut';
$lang['leads_email_integration_check_every']                         = 'Vérifier toutes les (minutes)';
$lang['leads_email_integration_default_assigned']                    = 'Responsable du nouveau prospect';
$lang['leads_email_encryption']                                      = 'Cryptage';
$lang['leads_email_integration_updated']                             = 'Mise à jour intégration courriel';
$lang['leads_email_integration_default_status']                      = 'État par défaut';
$lang['leads_email_integration_folder']                              = 'Dossier';
$lang['leads_email_integration_notify_when_lead_imported']           = 'Notifier lorsque le prospect est importé';
$lang['leads_email_integration_only_check_unseen_emails']            = 'Ne vérifie que les courriels non ouverts';
$lang['leads_email_integration_only_check_unseen_emails_help']       = 'Le script configurera automatiquement l\'ouverture de l\'email après vérification. Il est utilisé pour empêcher la vérification systématique et répétitive de tous les emails. Il est recommandé de ne pas décocher cette option si vous avez beaucoup de courriels et que vous avez configuré beaucoup de transferts pour les mailings prospects';
$lang['leads_email_integration_notify_when_lead_contact_more_times'] = 'Notifier si le prospect envoie le courriel plusieurs fois';
$lang['leads_email_integration_test_connection']                     = 'Tester la connexion IMAP ';
$lang['lead_email_connection_ok']                                    = 'Bonne connexion IMAP';
$lang['lead_email_connection_not_ok']                                = 'Erreur de connexion IMAP';
$lang['lead_email_activity']                                         = 'Courriel activité';
$lang['leads_email_integration_notify_roles']                        = 'Rôles à notifier';
$lang['leads_email_integration_notify_staff']                        = 'Collaborateurs à notifier';
$lang['lead_public']                                                 = 'Public';

# Knowledge Base
$lang['kb_group_color'] = 'Couleur';
$lang['kb_group_order'] = 'Ordre';

# Utilities - BULK PDF Exporter
$lang['bulk_pdf_exporter']             = 'Exportation PDF';
$lang['bulk_export_pdf_payments']      = 'Paiements';
$lang['bulk_export_pdf_estimates']     = 'Soumissions';
$lang['bulk_export_pdf_invoices']      = 'Factures';
$lang['bulk_pdf_export_button']        = 'Exporter';
$lang['bulk_pdf_export_select_type']   = 'Sélectionner une instance';
$lang['no_data_found_bulk_pdf_export'] = 'Aucune donnée trouvée pour l\'exportation';
$lang['bulk_export_status_all']        = 'Tous';
$lang['bulk_export_status']            = 'État';
$lang['bulk_export_zip_payment_modes'] = 'Paiement effectué par:';
$lang['bulk_export_include_tag']       = 'Inclure une étiquette';
$lang['bulk_export_include_tag_help']  = 'Ex. Original ou Copie. L\'étiquette sera générée dans le PDF. Il est recommandé de n\'utiliser qu\'une seule étiquette.';


# Version 1.0.7
## Clients - portal
$lang['clients_nav_proposals'] = 'Propositions';
$lang['clients_nav_support']   = 'Support';

# General
$lang['more']            = 'Options';
$lang['add_item']        = 'Ajouter un produit';
$lang['goto_admin_area'] = 'Retour au tableau de bord';
$lang['delete']          = 'Supprimer %s';
$lang['welcome_top']     = 'Bonjour %s';

# Clients
$lang['customer_permissions']         = 'Permissions';
$lang['customer_permission_invoice']  = 'Factures';
$lang['customer_permission_estimate'] = 'Soumissions';
$lang['customer_permission_proposal'] = 'Propositions';
$lang['customer_permission_contract'] = 'Contrats';
$lang['customer_permission_support']  = 'Support';

#Tasks
$lang['task_related_to'] = 'Associée à';

# Send file
$lang['custom_file_fail_send']    = 'Echec de l\'envoi du fichier';
$lang['custom_file_success_send'] = 'Fichier envoyé à %s';
$lang['send_file_subject']        = 'Objet du courriel';
$lang['send_file_email']          = 'Adresse courriel ';
$lang['send_file_message']        = 'Message';
$lang['send_file']                = 'Fichier envoyé';
$lang['add_checklist_item']       = 'Ajouter une liste de contrôle';
$lang['task_checklist_items']     = 'Liste de contrôle';

# Import
$lang['default_pass_clients_import'] = 'Mot de passe par défaut pour tous les clients';
$lang['simulate_import']             = 'Simuler l\'importation';
$lang['import_upload_failed']        = 'Télécharger les échecs';
$lang['import_total_imported']       = 'Total Importé: %s';
$lang['import_leads']                = 'Importer des prospects';
$lang['import_customers']            = 'Importer des clients';
$lang['choose_csv_file']             = 'Importer un fichier CSV';
$lang['import']                      = 'Importer';
$lang['lead_import_status']          = 'État';
$lang['lead_import_source']          = 'Source';

# Bulk PDF Export
$lang['bulk_export_pdf_proposals'] = 'Propositions';

# Factures
$lang['delete_invoice'] = 'Supprimer';
$lang['items']                  = 'Produits';
$lang['support']                = 'Support';
$lang['new_ticket']             = 'Nouveau billet';

# Reminders
$lang['calendar_lead_reminder'] = 'Rappel prospect';
$lang['lead_set_reminder_title'] = 'Définir un rappel de prospect';
$lang['set_reminder_tooltip']    = 'Cette option vous permet de ne jamais rien oublier sur un client.';
$lang['client_reminders_tab']    = 'Rappels';
$lang['leads_reminders_tab']     = 'Rappels';

# Tickets
$lang['delete_ticket_reply']  = 'Supprimer la réponse';
$lang['ticket_priority_edit'] = 'Editer la priorité';
$lang['ticket_priority_add']  = 'Ajouter une priorité';
$lang['ticket_status_edit']   = 'Editer un état de billet';
$lang['ticket_service_edit']  = 'Editer un service de billet';
$lang['edit_department']      = 'Editer le département';

# Dépenses
$lang['edit_expense_category'] = 'Editer la catégorie d\'dépenses';

# Settings
$lang['customer_default_country']                                 = 'Pays par défaut';
$lang['settings_sales_require_client_logged_in_to_view_estimate'] = 'Exiger que le client soit connecté pour voir la soumission';
$lang['set_reminder']                                             = 'Définir un rappel';
$lang['set_reminder_date']                                        = 'Date de notification';
$lang['reminder_description']                                     = 'Description';
$lang['reminder_notify_me_by_email']                              = 'Envoyer également un courriel de notification pour ce rappel';
$lang['reminder_added_successfully']                              = 'Rappel ajouté. Vous recevrez une notification.';
$lang['reminder_description']                                     = 'Description';
$lang['reminder_date']                                            = 'Date';
$lang['reminder_staff']                                           = 'Rappel';
$lang['reminder_is_notified']                                     = 'Notifié';
$lang['reminder_is_notified_boolean_no']                          = 'Non';
$lang['reminder_is_notified_boolean_yes']                         = 'Oui';
$lang['reminder_set_to']                                          = 'Définir un rappel pour';
$lang['reminder_deleted']                                         = 'Rappel supprimé';
$lang['reminder_failed_to_delete']                                = 'Echec lors de la supression du rappel';
$lang['show_invoice_estimate_status_on_pdf']                      = 'Afficher l\'état des factures et des soumissions sur le PDF';
$lang['email_piping_default_priority']                            = 'Priorité par défaut pour les billets transférés';
$lang['show_lead_reminders_on_calendar']                          = 'Rappels pour les prospects';
$lang['tickets_piping']                                           = 'Redirection de courriel';
$lang['email_piping_only_replies']                                = 'Uniquement les réponses par courriel sont autorisées';
$lang['email_piping_only_registered']                             = 'Rediriger uniquement vers les utilisateurs enregistrés';

# Soumission
$lang['view_estimate_as_client']         = 'Affichage client';
$lang['estimate_mark_as']                = 'Marquer comme %s';
$lang['estimate_status_changed_success'] = 'État soumission modifiée';
$lang['estimate_status_changed_fail']    = 'Échec lors de la modification de l\'état de la soumission';

#Proposition
$lang['proposal_to']                            = 'Entreprise / Nom';
$lang['proposal_date']                          = 'Date';
$lang['proposal_address']                       = 'Adresse';
$lang['proposal_phone']                         = 'Téléphone';
$lang['proposal_email']                         = 'Courriel';
$lang['proposal_date_created']                  = 'Créée le';
$lang['proposal_open_till']                     = 'Date de validité';
$lang['proposal_status_open']                   = 'Ouverte';
$lang['proposal_status_accepted']               = 'Acceptée';
$lang['proposal_status_declined']               = 'Déclinée';
$lang['proposal_status_sent']                   = 'Envoyée';
$lang['proposal_expired']                       = 'Expirée';
$lang['proposal_subject']                       = 'Objet';
$lang['proposal_total']                         = 'Total';
$lang['proposal_status']                        = 'État';
$lang['proposals_list_all']                     = 'Toutes';
$lang['proposals_leads_related']                = 'Prospects liés à';
$lang['proposals_customers_related']            = 'Clients liés à';
$lang['proposal_related']                       = 'Associée à';
$lang['proposal_for_lead']                      = 'Prospect';
$lang['proposal_for_customer']                  = 'Client';
$lang['proposal']                               = 'Proposition';
$lang['proposal_lowercase']                     = 'proposition';
$lang['proposals']                              = 'Propositions';
$lang['proposals_lowercase']                    = 'proposition';
$lang['new_proposal']                           = 'Nouvelle proposition';
$lang['proposal_currency']                      = 'Devise';
$lang['proposal_allow_comments']                = 'Autoriser les commentaires';
$lang['proposal_allow_comments_help']           = 'Si vous selectionnez cette option les commentaires seront visibles par le client lors de l\'affichage de la proposition.';
$lang['proposal_edit']                          = 'Editer';
$lang['proposal_pdf']                           = 'PDF';
$lang['proposal_send_to_email']                 = 'Envoyer par courriel';
$lang['proposal_send_to_email_title']           = 'Envoyer la proposition par courriel';
$lang['proposal_attach_pdf']                    = 'PDF joint';
$lang['proposal_preview_template']              = 'Aperçu du modèle';
$lang['proposal_view']                          = 'Affichage client';
$lang['proposal_copy']                          = 'Dupliquer';
$lang['proposal_delete']                        = 'Supprimer';
$lang['proposal_to']                            = 'Pour';
$lang['proposal_add_comment']                   = 'Nouveau commentaire';
$lang['proposal_sent_to_email_success']         = 'Proposition envoyée par courriel';
$lang['proposal_sent_to_email_fail']            = 'Echec lors de l\'envoi de la proposition par courriel';
$lang['proposal_copy_fail']                     = 'Echec lors de la duplication de la proposition';
$lang['proposal_copy_success']                  = 'Proposition dupliquée';
$lang['proposal_status_changed_success']        = 'État de la proposition modifié';
$lang['proposal_status_changed_fail']           = 'Echec lors de la modification de l\'état de la proposition';
$lang['proposal_assigned']                      = 'Attribuer à';
$lang['proposal_comments']                      = 'Commentaires';
$lang['proposal_convert']                       = 'Convertir';
$lang['proposal_convert_estimate']              = 'Soumission';
$lang['proposal_convert_invoice']               = 'Facture';
$lang['proposal_convert_to_estimate']           = 'Convertir en soumission';
$lang['proposal_convert_to_invoice']            = 'Convertir en facture';
$lang['proposal_convert_to_lead_disabled_help'] = 'Vous devez convertir le prospect en client afin de créer %s';
$lang['proposal_convert_not_related_help']      = 'La proposition doit être associée à un client afin de le convertir en %s';
$lang['proposal_converted_to_estimate_success'] = 'Proposition convertie en soumission';
$lang['proposal_converted_to_invoice_success']  = 'Proposition convertie en facture';
$lang['proposal_converted_to_estimate_fail']    = 'Echec de la conversion de la proposition en soumission';
$lang['proposal_converted_to_invoice_fail']     = 'Echec de la conversion de la proposition en facture';

# Propositions - voir template proposition
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
$lang['customer_reset_password_repeat']   = 'Confirmer le mot de passe';
$lang['customer_forgot_password_email']   = 'Courriel';
$lang['customer_forgot_password_submit']  = 'Soumettre';
$lang['customer_ticket_subject']          = 'Objet';

# Courriel templates
$lang['email_template_proposals_fields_heading'] = 'Propositions';

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
$lang['customer_have_invoices_by']       = 'Factures avec l\'état %s';
$lang['customer_have_estimates_by']      = 'Soumission avec l\'état %s';
$lang['customer_have_contracts_by_type'] = 'Avoir des contrats par type %s';

# Custom fields
$lang['custom_field_show_on_table']              = 'Afficher dans les tableaux';
$lang['custom_field_show_on_client_portal']      = 'Afficher sur l\'espace client';
$lang['custom_field_show_on_client_portal_help'] = 'Si ce champ est coché, il sera également affiché dans les listes';
$lang['custom_field_visibility']                 = 'Affichage';

# Knowledge Base
$lang['view_articles_list']     = 'Voir les publications';
$lang['view_articles_list_all'] = 'Toutes les publications';
$lang['als_all_articles']       = 'Publications';
$lang['als_kb_groups']          = 'Rubriques';

# Spam Filter - Tickets
$lang['spam_filters']                 = 'Filtres spam';
$lang['spam_filter']                  = 'Filtre spam';
$lang['new_spam_filter']              = 'Nouveau filtre spam';
$lang['spam_filter_blocked_senders']  = 'Expéditeurs bloqués';
$lang['spam_filter_blocked_subjects'] = 'Objets bloqués';
$lang['spam_filter_blocked_phrases']  = 'Phrases bloquées';
$lang['spam_filter_content']          = 'Contenu';
$lang['spamfilter_edit_heading']      = 'Editer le filtre spam';
$lang['spamfilter_add_heading']       = 'Ajouter un filtre spam';
$lang['spamfilter_type']              = 'Type';
$lang['spamfilter_type_subject']      = 'Objet';
$lang['spamfilter_type_sender']       = 'Expéditeur';
$lang['spamfilter_type_phrase']       = 'Phrase';

# Tickets
$lang['block_sender']                = 'Bloquer l\'expéditeur';
$lang['sender_blocked']              = 'Expéditeur bloqué';
$lang['sender_blocked_successfully'] = 'Expéditeur bloqué';
$lang['ticket_date_created']         = 'Créé le';

#KB
$lang['edit_kb_group'] = 'Editer la catégorie';

# Prospects
$lang['edit_source'] = 'Editer la source';
$lang['edit_status'] = 'Editer l\'état';

# Contacts
$lang['contract_type_edit'] = 'Editer le type de contrat';

# Reports
$lang['report_by_customer_groups'] = 'Valeur totale par catégories de clients';

#Utilities
$lang['ticket_pipe_log']      = 'Connexion ticket Pipe';
$lang['ticket_pipe_name']     = 'A partir du nom';
$lang['ticket_pipe_email_to'] = 'au nom';
$lang['ticket_pipe_email']    = 'A partir du courriel';
$lang['ticket_pipe_subject']  = 'Objet';
$lang['ticket_pipe_message']  = 'Message';
$lang['ticket_pipe_date']     = 'Date';
$lang['ticket_pipe_status']   = 'État';

# Home
$lang['home_latest_activity']   = 'Dernières activités';
$lang['home_my_tasks']          = 'Mes tâches';
$lang['home_my_todo_items']     = 'Ma liste de tâches privées';
$lang['home_widget_view_all']   = 'Tout voir';
$lang['home_stats_full_report'] = 'Rapport complet';

# Validation
$lang['form_validation_required']    = 'Le champ {field} est requis.';
$lang['form_validation_valid_email'] = 'Le champ {field} doit contenir une adresse courriel valide.';
$lang['form_validation_matches']     = 'Le champ {field} field does not match the {param} field.';
$lang['form_validation_is_unique']   = 'Le champ {field} doit contenir une valeur unique.';

# Version 1.0.8
# Notifications & Prospects/Soumissions/Factures Journal d'activités
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
$lang['not_received_one_or_more_messages_lead']                   = 'message courriel reçu de votre prospect';
$lang['not_received_lead_imported_email_integration']             = 'Prospect importé de l\'intégration courriel';
$lang['not_lead_imported_attachment']                             = 'Pièces jointes importées du courriel';
$lang['not_estimate_status_change']                               = 'Pièces jointes importées du courriel';
$lang['not_estimate_status_updated']                              = 'Mise à jour de l\'état de la soumission: de: %s à %s';
$lang['not_assigned_lead_to_you']                                 = 'vous a attribué le prospect %s';
$lang['not_lead_activity_assigned_to']                            = '%s attribué à %s';
$lang['not_lead_activity_attachment_deleted']                     = 'Supprimer les pièces jointes';
$lang['not_lead_activity_status_updated']                         = '%s a mis à jour l\'état prospect de %s à %s';
$lang['not_lead_activity_contacted']                              = '%s à contacté ce prospect sur %s';
$lang['not_lead_activity_created']                                = '%s a créé un prospect';
$lang['not_lead_activity_marked_lost']                            = 'Marquer comme perdu';
$lang['not_lead_activity_unmarked_lost']                          = 'Marquer comme retrouvé';
$lang['not_lead_activity_marked_junk']                            = 'Marquer comme indésirable';
$lang['not_lead_activity_unmarked_junk']                          = 'Marquer comme actif';
$lang['not_lead_activity_added_attachment']                       = 'Ajouter une pièce jointe';
$lang['not_lead_activity_converted_email']                        = 'Le courriel du prospect a été modifié. Le premier courriel du prospect était: %s et  a été ajouté comme client avec le courril %s';
$lang['not_lead_activity_converted']                              = '%s a converti ce prospect en client';
$lang['not_liked_your_post']                                      = '%s a aimé votre publication %s ...';
$lang['not_commented_your_post']                                  = '%s a commenté votre publication %s ...';
$lang['not_liked_your_comment']                                   = '%s a aimé votre commentaire %s ...';
$lang['not_proposal_assigned_to_you']                             = 'Proposition attribuée à vous - %s ...';
$lang['not_proposal_comment_from_client']                         = 'Nouveau commentaire du client sur la proposition %s ...';
$lang['not_proposal_proposal_accepted']                           = 'Proposition acceptée - %s';
$lang['not_proposal_proposal_declined']                           = 'Proposition déclinée - %s';
$lang['not_task_added_you_as_follower']                           = 'vous a ajouté comme suiveur sur la tâche %s ...';
$lang['not_task_added_someone_as_follower']                       = 'a ajouté %s comme suiveur sur la tâche %s ...';
$lang['not_task_added_himself_as_follower']                       = 's\'est ajouté comme suiveur sur la tâche %s ...';
$lang['not_task_assigned_to_you']                                 = 'vous a attribué une tâche %s ...';
$lang['not_task_assigned_someone']                                = 'a attribué %s à la tâche %s ...';
$lang['not_task_will_do_user']                                    = 'exécutera la tâche %s ...';
$lang['not_task_new_attachment']                                  = 'Nouvelle pièce jointe ajoutée';
$lang['not_task_marked_as_complete']                              = 'a marqué la tâche comme accomplie %s';
$lang['not_task_unmarked_as_complete']                            = 'marquer la tâche comme non accomplie %s';
$lang['not_ticket_assigned_to_you']                               = 'un billet vous a été attribué - %s ...';
$lang['not_ticket_reassigned_to_you']                             = 'un billet vous a été réattribué - %s ...';
$lang['not_estimate_customer_accepted']                           = 'Félicitation! Le client a accepté la soumission numéro %s';
$lang['not_estimate_customer_declined']                           = 'Le client a refusé la soumission numéro %s';
$lang['estimate_activity_converted']                              = 'a converti cette soumission en facture.<br /> %s';
$lang['estimate_activity_created']                                = 'a créé la soumission';
$lang['invoice_estimate_activity_removed_item']                   = 'produit supprimé <b>%s</b>';
$lang['estimate_activity_number_changed']                         = 'Numéro de soumission modifiée de %s à %s';
$lang['invoice_activity_number_changed']                          = 'Numéro de facture modifié de %s à %s';
$lang['invoice_estimate_activity_updated_item_short_description'] = 'description courte du produit mise à jour de %s à %s';
$lang['invoice_estimate_activity_updated_item_long_description']  = 'description longue du produit mise à jour de <b>%s</b> à <b>%s</b>';
$lang['invoice_estimate_activity_updated_item_rate']              = 'mise à jour du prix de du produit de %s a %s';
$lang['invoice_estimate_activity_updated_qty_item']               = 'modification de la quantité sur du produit <b>%s</b> de %s a %s';
$lang['invoice_estimate_activity_added_item']                     = 'a ajouté un nouveau produit <b>%s</b>';
$lang['invoice_estimate_activity_sent_to_client']                 = 'Envoyer la soumission au client';
$lang['estimate_activity_client_accepted_and_converted']          = 'Le client a accepté la soumission. La soumission a été converti en facture numéro %s';
$lang['estimate_activity_client_accepted']                        = 'Le client a accepté cette soumission';
$lang['estimate_activity_client_declined']                        = 'Le client a refusé cette soumission';
$lang['estimate_activity_marked']                                 = 'soumission marqué comme %s';
$lang['invoice_activity_status_updated']                          = 'État de la facture mis à jour de %s à %s';
$lang['invoice_activity_created']                                 = 'a créé la facture';
$lang['invoice_activity_from_expense']                            = 'converti en facture à partir de la dépense';
$lang['invoice_activity_recurring_created']                       = '[Réccurent] Facture créée par CRON';
$lang['invoice_activity_recurring_from_expense_created']          = '[Facture à partir de la dépense] Facture créée par CRON';
$lang['invoice_activity_sent_to_client_cron']                     = 'Facture envoyée au client par CRON';
$lang['invoice_activity_sent_to_client']                          = 'facture envoyée au client';
$lang['invoice_activity_marked_as_sent']                          = 'facture marquée comme envoyée';
$lang['invoice_activity_payment_deleted']                         = 'Paiement supprimé pour cette facture. Paiement #%s, montant total %s';
$lang['invoice_activity_payment_made_by_client']                  = 'Client made payment for the invoice from total <b>%s</b> - %s';
$lang['invoice_activity_payment_made_by_staff']                   = 'paiement enregistré à partir du total <b>%s</b> - %s';
$lang['invoice_activity_added_attachment']                        = 'Pièce jointe ajoutée';

# Navigation
$lang['top_search_placeholder'] = 'Rechercher...';

# Staff
$lang['staff_profile_inactive_account'] = 'Ce compte collaborateur est inactif';

# Soumission
$lang['copy_estimate']                = 'Dupliquer la soumission';
$lang['estimate_copied_successfully'] = 'Soumission dupliqué';
$lang['estimate_copied_fail']         = 'Échec lors de la duplication de la soumission';

# Tasks
$lang['tasks_view_assigned_to_user'] = 'Tâches qui me sont attribuées';
$lang['tasks_view_follower_by_user'] = 'Tâches que je suis';
$lang['no_tasks_found']              = 'Aucune tâche trouvée';

# Prospects
$lang['leads_dt_datecreated']       = 'Créé le';
$lang['leads_sort_by']              = 'Trier par';
$lang['leads_sort_by_datecreated']  = 'Créé le';
$lang['leads_sort_by_kanban_order'] = 'Trier par Kanban';

# Authentication
$lang['check_email_for_resetting_password'] = 'Vérifiez votre courriel pour plus d\'instructions concernant la réinitialisation de votre mot de passe';
$lang['inactive_account']                   = 'Compte inactif';
$lang['error_setting_new_password_key']     = 'Erreur de réglage pour le nouveau mot de passe';
$lang['password_reset_message']             = 'Votre mot de passe a été réinitialisé. Veuillez vous connecter à nouveau!';
$lang['password_reset_message_fail']        = 'Erreur de réinitialisation de votre mot de passe. Veuillez essayer à nouveau.';
$lang['password_reset_key_expired']         = 'Mot de passe expiré ou identifiant invalide';
$lang['auth_reset_pass_email_not_found']    = 'Courriel introuvable';
$lang['auth_reset_password_submit']         = 'Réinitialiser le mot de passe';

# Settings
$lang['settings_amount_to_words']          = 'Montant en lettres';
$lang['settings_amount_to_words_desc']     = 'Afficher le montant total en lettres sur les factures et les soumissions';
$lang['settings_amount_to_words_enabled']  = 'Activer';
$lang['settings_total_to_words_lowercase'] = 'Afficher les lettres en minuscules';
$lang['settings_show_tax_per_item']        = 'Afficher la taxe par ligne de produit';

# Reports
$lang['report_sales_months_three_months'] = '3 derniers mois';
$lang['report_invoice_number']            = 'Numéro';
$lang['report_invoice_customer']          = 'Client';
$lang['report_invoice_date']              = 'Date de facturation';
$lang['report_invoice_duedate']           = 'Date d\'échéance';
$lang['report_invoice_amount']            = 'Sous-total';
$lang['report_invoice_amount_with_tax']   = 'Total';
$lang['report_invoice_amount_open']       = 'Solde';
$lang['report_invoice_status']            = 'État';

#Version 1.0.9

# Home stats
$lang['home_stats_by_project_status'] = 'Statistiques par état de projet';
$lang['home_invoice_overview']        = 'Aperçu des factures';
$lang['home_estimate_overview']       = 'Aperçu des soumissions';
$lang['home_proposal_overview']       = 'Aperçu des propositions';
$lang['home_lead_overview']           = 'Aperçu des prospects';
$lang['home_my_projects']             = 'Mes Projets';
$lang['home_announcements']           = 'Annonces';

# Settings
$lang['settings_leads_kanban_limit']                                    = 'Nombre limite de lignes Kanban par état pour les prospects';
$lang['settings_group_misc']                                            = 'Divers';
$lang['show_projects_on_calendar']                                      = 'Afficher les projets sur le calendrier';
$lang['settings_media_max_file_size_upload']                            = 'Taille maximale des fichiers envoyés dans Média (MB)';
$lang['settings_client_staff_add_edit_delete_task_comments_first_hour'] = 'Permettre au client/collaborateur d\'ajouter/éditer un commentaire sur une tâche seulement durant la première heure (hors administrateurs)';

# Courriel templates
$lang['email_template_only_domain_email'] = 'Courriel principal';

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
$lang['clients_list_company'] = 'Entreprise';
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
$lang['task_comment_added']     = 'Commentaire ajouté';
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
$lang['task_user_logged_time']  = 'Votre temps de connexion:';
$lang['task_total_logged_time'] = 'Temps total de connexion:';
$lang['task_is_billed']         = 'Cette tâche est comptabilisée sur la facture numéro %s';
$lang['task_statistics']        = 'Statistiques';
$lang['task_milestone']         = 'Jalon';

# Tickets
$lang['ticket_message_updated_successfully'] = 'Message mis à jour';

# Invoices
$lang['invoice_task_item_project_tasks_not_included'] = 'Les tâches des projets ne sont pas incluses dans cette liste.';
$lang['show_quantity_as']                             = 'Afficher les quantités:';
$lang['quantity_as_qty']                              = 'Qté';
$lang['quantity_as_hours']                            = 'Heures';
$lang['invoice_table_hours_heading']                  = 'Heures';
$lang['bill_tasks']                                   = 'Facturer une tâche';
$lang['invoice_estimate_sent_to_email']               = 'Courriel';

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
$lang['project_not_started_status_tasks_timers_found']       = 'Compteur de tâche trouvé sur un projet dans l\'état n\'est pas commencé. Il est recommandé de modifier l\'état actuel du projet pour l\'état: en cours';
$lang['project_status']                                      = 'État';
$lang['project_status_1']                                    = 'Non commencé';
$lang['project_status_2']                                    = 'En cours';
$lang['project_status_3']                                    = 'En attente';
$lang['project_status_4']                                    = 'Réalisé';
$lang['project_file_dateadded']                              = 'Date de téléchargement';
$lang['project_file_filename']                               = 'Nom de fichier';
$lang['project_file__filetype']                              = 'Type de fichier';
$lang['project_file_visible_to_customer']                    = 'Visible par le client';
$lang['project_file_uploaded_by']                            = 'téléversé par';
$lang['edit_project']                                        = 'Editer le projet';
$lang['copy_project']                                        = 'Dupliquer le projet';
$lang['delete_project']                                      = 'Supprimer le projet';
$lang['project_task_assigned_to_user']                       = 'Tâche attribuée à vous';
$lang['seconds']                                             = 'Secondes';
$lang['hours']                                               = 'Heures';
$lang['minutes']                                             = 'Minutes';
$lang['project']                                             = 'Projet';
$lang['project_lowercase']                                   = 'projet';
$lang['projects']                                            = 'Projets';
$lang['projects_lowercase']                                  = 'projets';
$lang['project_settings']                                    = 'Paramètres du projet';
$lang['project_invoiced_successfully']                       = 'Projet facturé';
$lang['new_project']                                         = 'Nouveau projet';
$lang['project_files']                                       = 'Fichiers';
$lang['project_activity']                                    = 'Activité';
$lang['project_name']                                        = 'Nom du projet';
$lang['project_description']                                 = 'Description du projet';
$lang['project_customer']                                    = 'Client';
$lang['project_start_date']                                  = 'Date de début';
$lang['project_datecreated']                                 = 'Créé le';
$lang['project_deadline']                                    = 'Date de fin';
$lang['project_billing_type']                                = 'Type de facturation';
$lang['project_billing_type_fixed_cost']                     = 'Coût fixe';
$lang['project_billing_type_project_hours']                  = 'Heures de projet';
$lang['project_billing_type_project_task_hours']             = 'Heures de tâches';
$lang['project_billing_type_project_task_hours_hourly_rate'] = 'Basé sur le taux horaire de la tâche';
$lang['project_rate_per_hour']                               = 'Tarif horaire';
$lang['project_total_cost']                                  = 'Coût total';
$lang['project_members']                                     = 'Membres';
$lang['project_member_removed']                              = 'Membre du projet retiré';
$lang['project_overview']                                    = 'Vue d\'ensemble';
$lang['project_gant']                                        = 'Gantt';
$lang['project_milestones']                                  = 'Jalons';
$lang['project_milestone_order']                             = 'Ordre';
$lang['project_milestone_duedate_passed']                    = 'Date d\'échéance passée';
$lang['record_timesheet']                                    = 'Ajouter une feuille de temps';
$lang['new_milestone']                                       = 'Ajouter un jalon';
$lang['edit_milestone']                                      = 'Editer le jalon';
$lang['milestone_name']                                      = 'Nom';
$lang['milestone_due_date']                                  = 'Date d\'échéance';
$lang['project_milestone']                                   = 'Jalon';
$lang['project_notes']                                       = 'Notes';
$lang['project_timesheets']                                  = 'Feuilles de temps';
$lang['project_timesheet']                                   = 'Feuille de temps';
$lang['milestone_total_logged_time']                         = 'Temps connecté';
$lang['project_overview_total_logged_hours']                 = 'Nombre d\'heures connectées';
$lang['milestones_uncategorized']                            = 'Non classé';
$lang['milestone_no_tasks_found']                            = 'Aucune tâche trouvée';
$lang['project_copied_successfully']                         = 'Les données du projet sont copiées';
$lang['failed_to_copy_project']                              = 'La duplication du projet a échoué';
$lang['copy_project_task_include_check_list_items']          = 'Copier les articles de la liste de contrôle';
$lang['copy_project_task_include_assignees']                 = 'Copier les mêmes attributions';
$lang['copy_project_task_include_followers']                 = 'Copier les mêmes suiveurs';
$lang['project_days_left']                                   = 'Jours restants';
$lang['project_open_tasks']                                  = 'Tâches ouvertes';
$lang['timesheet_stop_timer']                                = 'Arrêter le compteur';
$lang['failed_to_add_project_timesheet_end_time_smaller']    = 'Échec lors de l\'ajout de la feuille de temps. L\'heure de fin est inférieure à l\'heure de début';
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
$lang['project_setting_view_task_attachments']               = 'voir les pièces jointes de la tâche';
$lang['project_setting_view_task_checklist_items']           = 'voir les points de la liste de contrôle';
$lang['project_setting_upload_files']                        = 'téléverser des fichiers';
$lang['project_setting_view_task_comments']                  = 'voir les commentaires de la tâche';
$lang['project_setting_upload_on_tasks']                     = 'téléverser des pièces jointes sur les tâches';
$lang['project_setting_view_task_total_logged_time']         = 'voir le temps total de connexion sur la tâche';
$lang['project_setting_open_discussions']                    = 'ouvrir des discussions';
$lang['project_setting_comment_on_tasks']                    = 'commenter les tâches du projet';
$lang['project_setting_view_tasks']                          = 'voir les tâches';
$lang['project_setting_view_milestones']                     = 'voir les jalons';
$lang['project_setting_view_gantt']                          = 'voir le diagramme de Gantt';
$lang['project_setting_view_timesheets']                     = 'voir les feuilles de temps';
$lang['project_setting_view_activity_log']                   = 'voir le journal d\'activité';
$lang['project_setting_view_team_members']                   = 'voir les membres de l\'équipe';
$lang['project_discussion_visible_to_customer_yes']          = 'Visible';
$lang['project_discussion_visible_to_customer_no']           = 'Invisible';
$lang['project_discussion_posted_on']                        = 'Publié le %s';
$lang['project_discussion_posted_by']                        = 'Publié par %s';
$lang['project_discussion_failed_to_delete']                 = 'Impossible de supprimer la discussion';
$lang['project_discussion_deleted']                          = 'Discussion supprimée';
$lang['project_discussion_no_activity']                      = 'Aucune activité';
$lang['project_discussion']                                  = 'Discussion';
$lang['project_discussions']                                 = 'Discussions';
$lang['edit_discussion']                                     = 'Créer une discussion';
$lang['new_project_discussion']                              = 'Créer une discussion';
$lang['project_discussion_subject']                          = 'Objet';
$lang['project_discussion_description']                      = 'Description';
$lang['project_discussion_show_to_customer']                 = 'Visible par le client';
$lang['project_discussion_total_comments']                   = 'Commentaires';
$lang['project_discussion_last_activity']                    = 'Dernière Activité';
$lang['discussion_add_comment']                              = 'Nouveau commentaire';
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
$lang['project_activity_deleted_milestone']            = 'Jalon supprimé';
$lang['project_activity_updated_milestone']            = 'Jalon mis à jour';
$lang['project_activity_created_milestone']            = 'Nouveau jalon créé';
$lang['project_activity_invoiced_project']             = 'Projet facturé';
$lang['project_activity_task_marked_complete']         = 'Tâche marquée comme accomplie';
$lang['project_activity_task_unmarked_complete']       = 'Tâche non marquée comme accomplie';
$lang['project_activity_task_deleted']                 = 'Tâche supprimée';
$lang['project_activity_new_task_comment']             = 'Commenté sur la tâche';
$lang['project_activity_new_task_attachment']          = 'Pièce jointe téléchargée sur la tâche';
$lang['project_activity_new_task_assignee']            = 'Nouvelle attribution de tâche ajoutée';
$lang['project_activity_task_assignee_removed']        = 'Attribution de tâche supprimée';
$lang['project_activity_task_timesheet_deleted']       = 'Feuille de temps supprimée';
$lang['project_activity_uploaded_file']                = 'Fichier de projet téléversé';
$lang['project_activity_status_updated']               = 'État projet mis à jour';
$lang['project_activity_visible_to_customer']          = 'Affiché au client';
$lang['project_activity_project_file_removed']         = 'Fichier projet supprimé';

# Customers area
$lang['clients_my_estimates']                                  = 'Mes soumissions';
$lang['client_no_reply']                                       = 'Pas de réponse';
$lang['clients_nav_projects']                                  = 'Projets';
$lang['clients_my_projects']                                   = 'Mes Projets';
$lang['client_profile_image']                                  = 'Image du profil';
$lang['sales_report_cancelled_invoices_not_included']          = 'Les factures annulées sont exclues du rapport';
$lang['invoices_merge_cancel_merged_invoices']                 = 'Marquer les factures fusionnées comme annulées au lieu de les supprimer';
$lang['invoice_marked_as_cancelled_successfully']              = 'Facture marquée comme annulée';
$lang['invoice_unmarked_as_cancelled']                         = 'Facture non marquée commme annulée';
$lang['tasks_reminder_notification_before']                    = 'Envoyer un rappel de la date d\'échéance de la tâche avant (jours)';
$lang['not_task_deadline_reminder']                            = 'Rappel de la date d\'échéance de la tâche';
$lang['dt_length_menu_all']                                    = 'Tous';
$lang['task_not_finished']                                     = 'Non achevée';
$lang['task_billed_cant_start_timer']                          = 'Tâche facturée. Le compteur ne peut pas être démarré';
$lang['invoice_task_billable_timers_found']                    = 'Compteur démarré trouvé';
$lang['project_timesheet_not_updated']                         = 'Feuille de temps non affectée';
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
$lang['invoice_total_tax']                                     = 'Total des taxes';
$lang['estimates_total_tax']                                   = 'Total des taxes';
$lang['report_invoice_total_tax']                              = 'Total des taxes';
$lang['home_tickets']                                          = 'Billets';
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
$lang['invoice_unmark_as']                                     = 'Enlever l\'état de %s';
$lang['invoice_status_cancelled']                              = 'Supprimée';
$lang['tasks_reminder_notification_before_help']               = 'Notifier les attributions de tâches sur la deadline X jours avant. La notification/courriel est uniquement envoyée aux collaborateurs assignés.';

# Version 1.1.0
$lang['project_invoice_select_all_tasks'] = 'Sélectionnez toutes les tâches';
$lang['lead_company']                     = 'Entreprise';

# Version 1.1.1
$lang['admin_auth_forgot_password_button']       = 'Confirmer';
$lang['task_assigned']                           = 'Attribuée à';
$lang['switch_to_pipeline']                      = 'Basculer en mode processus';
$lang['switch_to_list_view']                     = 'Basculer en mode liste';
$lang['estimates_pipeline']                      = 'Processus de soumissions';
$lang['estimates_pipeline_sort']                 = 'Trier par';
$lang['estimates_sort_expiry_date']              = 'Date d\'expiration';
$lang['estimates_sort_pipeline']                 = 'Ordre du processus';
$lang['estimates_sort_datecreated']              = 'Créé le';
$lang['estimates_sort_estimate_date']            = 'Date de soumission';
$lang['estimate_set_reminder_title']             = 'Définir un rappel de soumission';
$lang['invoice_set_reminder_title']              = 'Définir un rappel de facturation';
$lang['estimate_reminders']                      = 'Rappels';
$lang['invoice_reminders']                       = 'Rappels';
$lang['estimate_notes']                          = 'Notes';
$lang['estimate_add_note']                       = 'Nouvelle note';
$lang['dropdown_non_selected_tex']               = 'Aucune sélection';
$lang['auto_close_ticket_after']                 = 'Fermer automatiquement le billet après (eures)';
$lang['event_description']                       = 'Description';
$lang['delete_event']                            = 'Supprimer';
$lang['not_new_ticket_created']                  = 'Nouveau billet ouvert dans votre service - %s';
$lang['receive_notification_on_new_ticket']      = 'Recevoir une notification à l\'ouverture d\'un nouveau billet';
$lang['receive_notification_on_new_ticket_help'] = 'Tous les membres de l\'équipe appartenant au service des billets recevront une notification lors de l\'ouverture d\'un nouveau billet.';
$lang['event_updated']                           = 'Évènement actualisé';
$lang['customer_contacts']                       = 'Contacts';
$lang['new_contact']                             = 'Nouveau Contact';
$lang['contact']                                 = 'Contact';
$lang['contact_lowercase']                       = 'contact';
$lang['contact_primary']                         = 'Contact principal';
$lang['contact_position']                        = 'Position';
$lang['contact_active']                          = 'Active';
$lang['client_company_info']                     = 'Info entreprise';
$lang['proposal_save']                           = 'Enregistrer la proposition';
$lang['calendar']                                = 'Calendrier';
$lang['settings_pdf']                            = 'PDF';
$lang['settings_pdf_font']                       = 'Police PDF';
$lang['settings_pdf_table_heading_color']        = 'Couleur des en-têtes du tableau des produits';
$lang['settings_pdf_table_heading_text_color']   = 'Couleur du texte des en-tête du tableau des produits';
$lang['settings_pdf_font_size']                  = 'Taille de police par défault';
$lang['proposal_status_draft']                   = 'Brouillon';
$lang['custom_field_contacts']                   = 'Contacts';
$lang['company_primary_email']                   = 'Courriel principal';
$lang['client_register_contact_info']            = 'Information du contact principal';
$lang['client_register_company_info']            = 'Informations de l\'entreprise';
$lang['contact_permissions_info']                = 'Assurez-vous de définir les permissions appropriées pour ce contact';
$lang['default_leads_kanban_sort']               = 'Triage Kanban des cibles par défaut';
$lang['default_leads_kanban_sort_type']          = 'Tri';
$lang['order_ascending']                         = 'Croissant';
$lang['order_descending']                        = 'Décroissant';
$lang['calendar_expand']                         = 'agrandir';
$lang['proposal_reminders']                      = 'Rappels';
$lang['proposal_set_reminder_title']             = 'Définir un rappel de proposition';
$lang['settings_allowed_upload_file_types']      = 'Types de fichiers autorisés';
$lang['no_primary_contact']                      = 'Aucun contact principal n\'est défini pour ce client. Vous devez configurer le login du contact principal sur client. Son recommandé à tous les clients d\'avoir des contacts primaires.';
$lang['leads_merge_customer']                    = 'champs de fusion clients';
$lang['leads_merge_contact']                     = 'champs Contact fusion';
$lang['leads_merge_as_contact_field']            = 'Fusionner comme champ de contact';
$lang['lead_convert_to_client_phone']            = 'Téléphone';
$lang['invoice_status_report_all']               = 'Tous';
$lang['import_contact_field']                    = 'Champ Contact';
$lang['file_uploaded_success']                   = 'Il n\'y a pas d\'erreur, le fichier téléversé';
$lang['file_exceeds_max_filesize']               = 'Le fichier téléversé excède la directive upload_max_filesize dans php.ini';
$lang['file_exceeds_maxfile_size_in_form']       = 'Le fichier téléversé excède la MAX_FILE_SIZE qui a été spécifié dans le formulaire HTML';
$lang['file_uploaded_partially']                 = 'Le fichier n\'a été que partiellement téléversé';
$lang['file_not_uploaded']                       = 'Aucun fichier a été téléversé';
$lang['file_missing_temporary_folder']           = 'Dossier temporaire introuvable';
$lang['file_failed_to_write_to_disk']            = 'Impossible d\'écrire le fichier sur le disque';
$lang['file_php_extension_blocked']              = 'Une extension PHP a arrêté le téléchargement de fichier.';
$lang['calendar_expand']                         = 'Agrandir';
$lang['view_pdf']                                = 'Voir PDF';
$lang['expense_repeat_every']                    = 'Répéter chaque';

# Version 1.1.2
$lang['leads_switch_to_kanban']                   = 'Basculer en  mode "kanban"';
$lang['contract_content']                         = 'Contrat';
$lang['contract_save']                            = 'Enregistrer contrat';
$lang['contract_send_to_email']                   = 'Envoyer par courriel';
$lang['contract_send_to_client_modal_heading']    = 'Envoyer le contrat par courriel';
$lang['contract_send_to']                         = 'Envoyer à';
$lang['contract_send_to_client_attach_pdf']       = 'Joindre PDF';
$lang['contract_send_to_client_preview_template'] = 'Aperçu Courriel Template';
$lang['include_attachments_to_email']             = 'Inclure les pièces jointes au courrier électronique';
$lang['contract_sent_to_client_success']          = 'Le contrat est envoyé au client';
$lang['contract_sent_to_client_fail']             = 'Échec de l\'envoi contrat';

# Version 1.1.3
$lang['client_invalid_username_or_password'] = 'nom d\'utilisateur ou mot de passe invalide';
$lang['client_old_password_incorrect']       = 'Votre ancien mot de passe est incorrect';
$lang['client_password_changed']             = 'Votre mot de passe a été modifié';

# Version 1.1.4
$lang['total_leads_deleted']                              = 'Nombre de cibles supprimées: %s';
$lang['total_clients_deleted']                            = 'Nombre de clients supprimés: %s';
$lang['confirm_action_prompt']                            = 'Êtes-vous sûr de vouloir confirmer cette action?';
$lang['mass_delete']                                      = 'Suppression massive';
$lang['email_protocol']                                   = 'Protocole de courriel';
$lang['add_edit_members']                                 = 'Ajouter/Modifier Membres';
$lang['project_overview_logged_hours']                    = 'Heures de connexion:';
$lang['project_overview_billable_hours']                  = 'Heures facturables:';
$lang['project_overview_billed_hours']                    = 'Heures facturées:';
$lang['project_overview_unbilled_hours']                  = 'Heures non facturées:';
$lang['calendar_first_day']                               = 'Premier jour';
$lang['permission_view']                                  = 'Voir ';
$lang['permission_edit']                                  = 'Modifier';
$lang['permission_create']                                = 'Créer';
$lang['permission_delete']                                = 'Supprimer';
$lang['permission']                                       = 'Permission';
$lang['permissions']                                      = 'Permissions';
$lang['proposals_pipeline']                               = 'Processus de propositions';
$lang['proposals_pipeline_sort']                          = 'Trier par';
$lang['proposals_sort_open_till']                         = 'Ouverte jusqu\'au';
$lang['proposals_sort_pipeline']                          = 'Ordre du processus';
$lang['proposals_sort_datecreated']                       = 'Créée le';
$lang['proposals_sort_proposal_date']                     = 'Date de proposition';
$lang['is_not_staff_member']                              = 'N\'est pas un collaborateur';
$lang['lead_created']                                     = 'Créé';
$lang['access_tickets_to_none_staff_members']             = 'Permet aux non collaborateurs d\'accéder aux billets';
$lang['project_expenses']                                 = 'Dépenses';
$lang['expense_currency']                                 = 'Devise';
$lang['currency_valid_code_help']                         = 'Assurez-vous de bien saisir un code de devise valide.';
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
$lang['customers_summary_total']                          = 'Nombre de clients';
$lang['filter_by']                                        = 'Filtrer par';
$lang['re_captcha']                                       = 'reCAPTCHA';
$lang['recaptcha_site_key']                               = 'Clé public';
$lang['recaptcha_secret_key']                             = 'Clé secrète';
$lang['recaptcha_error']                                  = 'Le champ nouveau CAPTCHA aparraît pour vérifier que vous n\'êtes pas un robot.';
$lang['smtp_username']                                    = 'Nom utilisateur SMTP';
$lang['smtp_username_help']                               = 'Ne remplissez ce champ que si votre client courriel utilise un nom d\'utilisateur pour la connexion SMTP.';
$lang['pinned_project']                                   = 'Projet épinglé';
$lang['pin_project']                                      = 'Épingler projet';
$lang['unpin_project']                                    = 'Désépingler le projet';
$lang['smtp_encryption']                                  = 'Cryptage de courriel';
$lang['smtp_encryption_none']                             = 'Aucun';
$lang['show_proposals_on_calendar']                       = 'Propositions';
$lang['invoice_project_see_billed_expenses']              = 'Afficher les dépenses qui seront facturés sur cette facture';
$lang['project_overview_expenses']                        = 'Total des dépenses';
$lang['project_overview_expenses_billable']               = 'Dépenses facturables';
$lang['project_overview_expenses_billed']                 = 'Dépenses facturés';
$lang['project_overview_expenses_unbilled']               = 'Dépenses non facturés';
$lang['announcement_date_list']                           = 'Date';
$lang['project_setting_view_finance_overview']            = 'afficher la vue d\'ensemble des ventes';
$lang['show_all_tasks_for_project_member']                = 'Permettre à tous les collaborateurs de visualiser toutes les tâches en rapport avec les projects (même les non-membres)';
$lang['not_staff_added_as_project_member']                = 'Vous a ajouté en tant que collaborateur de projet';
$lang['report_expenses_base_currency_select_explanation'] = 'Vous devez sélectionner une devise car le system a trouvé différentes devises pour les dépenses.';

# Version 1.1.6
$lang['project_activity_recorded_expense']   = 'Dépense enregistrée';
$lang['save_customer_and_add_contact']       = 'Enregistrer et créer le contact';
$lang['tickets_chart_weekly_opening_stats']  = 'Stats hebdomadaires';
$lang['related_knowledgebase_articles']      = 'Articles associés';
$lang['detailed_overview']                   = 'Vue d\'ensemble des tâches';
$lang['tasks_total_checklists_finished']     = 'Nombre total d\'éléments cochés comme terminé';
$lang['tasks_total_added_attachments']       = 'Pièces jointes';
$lang['tasks_total_comments']                = 'Commentaires';
$lang['task_finished_on_time']               = 'Livré à temps?';
$lang['task_finished_on_time_indicator']     = 'Oui';
$lang['task_not_finished_on_time_indicator'] = 'Non';
$lang['filter']                              = 'Filtrer';
$lang['task_filter_detailed_all_months']     = 'Tous les mois';
$lang['kb_article_slug']                     = 'Permalien';

# Version 1.1.7
$lang['email_template_ticket_warning']          = 'Si le billet est importé avec une redirection de courriel et que le contact n\'existe pas dans le CRM, les champs ne seront pas remplacés.';
$lang['auto_stop_tasks_timers_on_new_timer']    = 'Arrêter toutes les minuterie lancées lorsque\'une nouvelle minuterie démarre';
$lang['notification_when_customer_pay_invoice'] = 'Recevoir une notification lorsque le client paye la facture (intégré)';
$lang['not_invoice_payment_recorded']           = 'Paiement de nouvelle facture %s';
$lang['email_template_contact_warning']         = 'Si le contact n\'est pas connecté pendant que l\'action a lieu, les champs substituant ne seront pas remplacés.';
$lang['change_role_permission_warning']         = 'Le changement des permissions de rôle n\'affecteront pas les permissions des membres qui utilisent ce role.';
$lang['task_copied_successfully']               = 'La tâche à bien été copiée';
$lang['failed_to_copy_task']                    = 'Échec de la duplication de la tâche';
$lang['not_project_file_uploaded']              = 'Nouveau fichier projet ajouté';
$lang['settings_calendar_color']                = 'Couleur %s';
$lang['settings_calendar_colors_heading']       = 'Style';
$lang['reminder']                               = 'Rappel';
$lang['back_to_tasks_list']                     = 'Retour à la liste de tâches';
$lang['copy_task_confirm']                      = 'Confirmer';
$lang['changing_items_affect_warning']          = 'La modification des informations n\'affectera pas les factures, soumissions, propositions et notes de crédit déjà créés.';
$lang['tax_is_used_in_expenses_warning']        = 'Vous ne pouvez pas mettre à jour cette taxe car elle est appliquée à certains dépenses.';
$lang['note']                                   = 'Note';
$lang['leads_staff_report_converted']           = 'Prospects créés';
$lang['leads_staff_report_created']             = 'Prospects convertis';
$lang['leads_staff_report_lost']                = 'Prospects perdus';
$lang['client_go_to_dashboard']                 = 'Revenir au portail';
$lang['show_estimate_reminders_on_calendar']    = 'Rappels pour les soumissions';
$lang['show_invoice_reminders_on_calendar']     = 'Rappels pour les factures';
$lang['calendar_estimate_reminder']             = 'Rappel de soumission';
$lang['calendar_invoice_reminder']              = 'Rappel des facture';
$lang['show_proposal_reminders_on_calendar']    = 'Rappels pour les propositions';
$lang['calendar_proposal_reminder']             = 'Rappel de proposition';
$lang['proposal_due_after']                     = 'Proposition dûe après (jours)';
$lang['project_progress']                       = 'Progression';
$lang['calculate_progress_through_tasks']       = 'Calculer la progression à partir des tâches';
$lang['allow_customer_to_change_ticket_status'] = 'Permettre au client de modifier l\'état du billet dans l\'espace client.';
$lang['switch_to_general_report']               = 'Basculer vers le rapport du personnel';
$lang['switch_to_staff_report']                 = 'Basculer vers le rapport général';
$lang['generate']                               = 'Générer';
$lang['from_date']                              = 'Date de départ';
$lang['to_date']                                = 'Date de fin';
$lang['not_results_found']                      = 'Aucun résultat';
$lang['lead_lock_after_convert_to_customer']    = 'Les prospects ne peuvent pas être modifiés une fois convertis en clients (ne s\'applique pas aux administrateurs).';
$lang['default_pipeline_sort']                  = 'Ordre de tri du processus par défaut';
$lang['toggle_full_view']                       = 'Basculer en plein écran';
$lang['not_estimate_invoice_deleted']           = 'a supprimé la facture émise';
$lang['not_task_new_comment']                   = 'a commenté la tâche %s';

# Version 1.1.8
$lang['invoice_number_exists']                  = 'Ce numéro de facture existe pour l\'année en cours.';
$lang['estimate_number_exists']                 = 'Ce numéro de soumission existe pour l\'année en cours.';
$lang['email_exists']                           = 'ce courriel existe déjà';
$lang['not_uploaded_project_file']              = 'Nouveau fichier mis en ligne';
$lang['not_created_new_project_discussion']     = 'Nouvelle discussion de projet créée';
$lang['not_commented_on_project_discussion']    = 'Nouveau commentaire sur la discussion du projet';
$lang['all_staff_members']                      = 'Tous les collaborateurs';
$lang['help_project_permissions']               = 'Le personnel peut voir TOUS les projets sur cet AFFICHAGE. Si vous souhaitez qu\'ils puissent seulement voir les projets qui leur sont affectés (en tant que membre), n\'accordez aucune autorisation d\'AFFICHAGE.';
$lang['help_tasks_permissions']                 = 'VUE permet aux collaborateurs de consulter TOUTES les tâches. Si vous souhaitez qu\'ils puissent seulement voir les tâches qui leur sont affectées ou qu\'ils suivent, n\'accordez aucune autorisation d\'AFFICHAGE.';
$lang['expense_recurring_days']                 = 'Jour(s)';
$lang['expense_recurring_weeks']                = 'Semaine(s)';
$lang['expense_recurring_months']               = 'Mois';
$lang['expense_recurring_years']                = 'Année(s)';
$lang['reset_to_default_color']                 = 'Rétablir la couleur par défaut';
$lang['pdf_logo_width']                         = 'Largeur du logo (pixel)';
$lang['drop_files_here_to_upload']              = 'Déposez ici les fichiers que vous souhaitez mettre en ligne';
$lang['browser_not_support_drag_and_drop']      = 'Votre navigateur ne prend pas en charge la fonction glisser-déplacer pour la mise en ligne de vos fichiers';
$lang['remove_file']                            = 'Supprimer fichier';
$lang['you_can_not_upload_any_more_files']      = 'Vous ne pouvez plus téléverser de fichier';
$lang['custom_field_only_admin']                = 'Ne restreindre que la visibilité des administrateurs';
$lang['leads_default_source']                   = 'Source par défaut';
$lang['clear_activity_log']                     = 'Effacer journal';
$lang['default_contact_permissions']            = 'Permissions de contact par défaut';
$lang['invoice_activity_marked_as_cancelled']   = 'a coché la suppression de la facture';
$lang['invoice_activity_unmarked_as_cancelled'] = 'a défini la décoché la suppression de la facture';
$lang['wait_text']                              = 'Veuillez patienter...';
$lang['projects_summary']                       = 'Vue d\'ensemble des projets';
$lang['dept_imap_host']                         = 'Hôte IMAP';
$lang['dept_encryption']                        = 'Cryptage';
$lang['dept_email_password']                    = 'Mot de passe';
$lang['dept_email_no_encryption']               = 'Pas de Cryptage';
$lang['failed_to_decrypt_password']             = 'Le décryptage du mot de passe a échoué';
$lang['delete_mail_after_import']               = 'Supprimer le courriel après l’importation?';
$lang['expiry_reminder_enabled']                = 'Envoyer un rappel d’expiration';
$lang['send_expiry_reminder_before']            = 'Envoyer un rappel d’expiration avant (jours)';
$lang['not_expiry_reminder_sent']               = 'Rappel d’expiration envoyé';
$lang['send_expiry_reminder']                   = 'A envoyé un rappel d’expiration';
$lang['sent_expiry_reminder_success']           = 'Rappel d’expiration bien envoyé';
$lang['sent_expiry_reminder_fail']              = 'Échec de l’envoi du rappel d’expiration';
$lang['leads_default_status']                   = 'État par défaut';
$lang['item_description_placeholder']           = 'Description';
$lang['item_long_description_placeholder']      = 'Description longue';
$lang['item_quantity_placeholder']              = 'Quantité';
$lang['item_rate_placeholder']                  = 'Prix HT';
$lang['tickets_summary']                        = 'Vue d\'ensemble des billets';
$lang['tasks_list_priority']                    = 'Priorité';
$lang['ticket_status_db_2']                     = 'En cours';
$lang['ticket_status_db_1']                     = 'Ouvert';
$lang['ticket_status_db_3']                     = 'Répondu';
$lang['ticket_status_db_4']                     = 'En attente';
$lang['ticket_status_db_5']                     = 'Fermé';
$lang['ticket_priority_db_1']                   = 'Faible';
$lang['ticket_priority_db_2']                   = 'Moyen';
$lang['ticket_priority_db_3']                   = 'Élevé';
$lang['customer_have_projects_by']              = 'Contient les états par projets %s';
$lang['customer_have_proposals_by']             = 'Contient les propositions d\'état %s';
$lang['do_not_redirect_payment']                = 'Ne me redirigez pas vers la page de paiement';
$lang['project_tickets']                        = 'Billets';
$lang['invoice_report']                         = 'Factures';
$lang['payment_modes_report']                   = 'Modes de paiement (transactions)';
$lang['customer_admins']                        = 'Gestionnaires du client';
$lang['assign_admin']                           = 'Affecter un gestionnaire';
$lang['customer_admin_date_assigned']           = 'Date d\'affectation';
$lang['customer_admin_login_as_client_message'] = 'Bonjour %s. Vous avez été ajouté en tant qu\'administrateur à ce client.';
$lang['ticket_form_validation_file_size']       = 'La taille du fichier doit être inférieure à %s';
$lang['has_transactions_currency_base_change']  = 'La devise par défaut ne peut être modifiée que s\'il n\'existe aucune transaction enregistrée dans cette devise. Supprimer les transactions pour changer la devise initiale';
$lang['customers_sort_all']                     = 'Tout';

# Version 1.1.9
$lang['use_recaptcha_customers_area']    = 'Autoriser reCAPTCHA dans l’espace client (Connexion/Inscription)';
$lang['project_marked_as_finished']      = 'Projet terminé';
$lang['project_status_updated']          = 'État du projet mis à jour';
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
$lang['estimate_status']                          = 'État';
$lang['expenses_report_exclude_billable']         = 'Exclure les dépense facturables';
$lang['expenses_total']                           = 'Total';
$lang['estimate_activity_added_attachment']       = 'Fichier joint ajouté';
$lang['show_to_customer']                         = 'Afficher au client';
$lang['hide_from_customer']                       = 'Masquer au client';
$lang['expenses_report_total']                    = 'Total';
$lang['expenses_report']                          = 'Rapport de dépenses';
$lang['expenses_report_total_tax']                = 'Total des taxes';
$lang['expenses_detailed_report']                 = 'Rapport détaillé';
$lang['expense_not_billable']                     = 'Non facturable';
$lang['notification_settings']                    = 'Paramétrage de notification';
$lang['staff_with_roles']                         = 'Collaborateurs accrédités d’un rôle';
$lang['specific_staff_members']                   = 'Collaborateurs spécifiques';
$lang['proposal_mark_as']                         = 'Marquer comme %s';
$lang['kb_report_total_answers']                  = 'Total';
$lang['ticket_message_edit']                      = 'Modifier';
$lang['invoice_files']                            = 'Fichiers des factures';
$lang['estimate_files']                           = 'Fichiers des soumissions';
$lang['proposal_files']                           = 'Fichiers de proposition';
$lang['invoices_awaiting_payment']                = 'factures en attente de paiement';
$lang['tasks_not_finished']                       = 'Tâches non terminées';
$lang['outstanding_invoices']                     = 'Factures en attente';
$lang['past_due_invoices']                        = 'Factures échues';
$lang['paid_invoices']                            = 'Factures payées';
$lang['invoice_estimate_year']                    = 'Année';
$lang['task_stats_logged_hours']                  = 'Heures du journal';
$lang['leads_converted_to_client']                = 'Cibles converties';
$lang['task_assigned_from']                       = 'Cette tâche vous a été attribuée par %s';
$lang['new_note']                                 = 'Nouvelle note';
$lang['my_tickets_assigned']                      = 'Billets qui me sont attribués';
$lang['filter_by_assigned']                       = 'Par membres attribués';
$lang['staff_stats_total_logged_time']            = 'Suivi du temps';
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
$lang['payment_billing_email']                  = 'Courriel';
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
$lang['ticket_not_found']                                   = 'Billet introuvable';
$lang['project_not_found']                                  = 'Project introuvable';
$lang['export_project_data']                                = 'Exporter les données du projet';
$lang['total_project_members']                              = 'Nombre de membres total du project';
$lang['total_project_files']                                = 'Fichiers joints';
$lang['total_project_discussions_created']                  = 'Discussions crées';
$lang['project_member']                                     = 'Membre';
$lang['total_project_discussions_comments']                 = 'Nombre de commentaires total';
$lang['staff_total_task_assigned']                          = 'Nombre de tâches attribuées';
$lang['staff_total_comments_on_tasks']                      = 'Commentaires sur les tâches';
$lang['project_members_overview']                           = 'Vue d\'ensemble des membres du projet';
$lang['project_milestones_overview']                        = 'Vue d\'ensemble des jalons';
$lang['total_tasks_in_milestones']                          = 'Nombre de tâches attribuées';
$lang['total_task_members_assigned']                        = 'Nombre de membres attribuées';
$lang['total_task_members_followers']                       = 'Nombre de suiveurs';
$lang['total_milestones']                                   = 'Nombre de jalons';
$lang['total_project_worked_days']                          = 'Nombre de jours travaillés';
$lang['finance_overview']                                   = 'Vue d\'ensemble des finances';
$lang['project_custom_fields']                              = 'Champs personnalisés';
$lang['total_tickets_related_to_project']                   = 'Nombre de billets liés au projet';
$lang['projects_total_invoices_created']                    = 'Nombre de factures crées';
$lang['do_not_send_invoice_payment_email_template_contact'] = 'Ne pas envoyer un courriel aux contacts du client pour aviser du paiement';
$lang['no_preview_available_for_file']                      = 'Aucun aperçu disponible pour ce fichier.';
$lang['project_activity_deleted_file_discussion_comment']   = 'Commentaire de discussion du fichier supprimé';
$lang['email_template_discussion_info']                     = 'Ce modèle est utilisé pour les courriels de commentaire de chaue discussion de projet. (fichiers discussions et discussions ordinnaires)';
$lang['format_a4_portrait_size']                            = 'Portrait';
$lang['only_show_contact_tickets']                          = 'Dans le profil client uniquement, afficher les billets liés au contact connecté (contact principal non appliqué)';
$lang['cancel_overdue_reminders_invoice']                   = 'Empêcher l\'envoi de rappels pour cette facture';
$lang['customer_shipping_address_notice']                   = 'Ne pas remplir l\'adresse d\'expédition si vous n\'utilisez pas cette adresse sur les factures du client';
$lang['timesheets_overview']                                = 'Feuilles de temps';
$lang['invoice_status_draft']                               = 'Brouillon';
$lang['save_as_draft']                                      = 'Enregistrer le brouillon';
$lang['convert_and_save_as_draft']                          = 'Convertir et enregistrer le brouillon';
$lang['convert']                                            = 'Convertir';
$lang['exclude_invoices_draft_from_client_area']            = 'Exclure de la zone des clients les factures dont l\'état est "Brouillon"';
$lang['invoice_draft_status_info']                          = 'L\'état de cette facture est "Brouillon", celui-ci sera modifié lorsque vous envoyez la facture au client ou lorsque vous la définissez comme "envoyée".';
$lang['task_info']                                          = 'Info de la tâche';
$lang['recurring_tasks']                                    = 'Récurrente';
// Dont translate these, already translated
$lang['task_repeat_every']                         = $lang['expense_repeat_every'];
$lang['task_recurring_months']                     = $lang['expense_recurring_months'];
$lang['task_recurring_years']                      = $lang['expense_recurring_years'];
$lang['task_recurring_days']                       = $lang['expense_recurring_days'];
$lang['task_recurring_weeks']                      = $lang['expense_recurring_weeks'];
$lang['todays_tasks']                              = 'Tâches du jour';
$lang['payment_mode_invoices_only']                = 'Factures uniquement';
$lang['payment_mode_expenses_only']                = 'Dépenses uniquement';
$lang['task_no_checklist_items_found']             = 'Éléments de la liste de contrôle introuvables pour cette tâche';
$lang['task_no_description']                       = 'Aucune description pour cette tâche';
$lang['expenses_reminders']                        = 'Relances';
$lang['expense_set_reminder_title']                = 'Définir un rappel de dépenses';
$lang['calendar_expense_reminder']                 = 'Rappels pour les dépenses';
$lang['recurring_task']                            = 'Tâches récurrentes';
$lang['disable_email_from_being_sent']             = 'Désactiver l\'envoi ce courriel';
$lang['not_sent_indicator']                        = 'Non envoyée';
$lang['proposal_status_revised']                   = 'Révisée';
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
$lang['settings_paymentmethod_authorize_api_login_id']        = 'ID de connexion API';
$lang['settings_paymentmethod_mollie_api_key']                = 'Clé API';
$lang['settings_paymentmethod_authorize_api_transaction_key'] = 'ID de transaction API';
$lang['settings_paymentmethod_authorize_secret_key']          = 'Clé secrète';
$lang['leads_report_converted_notice']                        = 'Seuls les prospects à l\'état de client par défaut seront considérés comme convertis. Un prospect de l\'état de client par défaut non converti en client sera considéré comme converti.';
$lang['payment_method']                                       = 'Méthode de paiement';
$lang['payment_method_info']                                  = 'Certaines passerelles de paiement prennent en charge différent/plusieurs méthodes de paiement comme les cartes de crédit, Paypal, virement bancaire.';

# Version 1.2.7
$lang['dropbox_app_key']                                    = 'Clé APP Dropbox';
$lang['project_invoice_select_all_expenses']                = 'Sélectionner toutes les dépenses';
$lang['role_update_staff_permissions']                      = 'Mise à jour de toutes les autorisations des collaborateurs qui utilisent ce rôle';
$lang['customer_active']                                    = 'Actif';
$lang['note_updated_successfully']                          = 'Échec de la mise à jour';
$lang['update_note']                                        = 'Note de mise à jour';
$lang['update_comment']                                     = 'Commentaire de mise à jour';
$lang['comment_updated_successfully']                       = 'Commentaire actualisé';
$lang['staff_send_welcome_email']                           = 'Envoyer un courriel de bienvenue';
$lang['proposal_warning_email_change']                      = 'Courriel modifié comme ceci : %s. Ce %s est lié à une/des proposition(s). Souhaitez-vous mettre à jour tous les courriels liés à %s?';
$lang['update_proposal_email_yes']                          = 'Oui, mettre à jour tous les courriels liés.';
$lang['update_proposal_email_no']                           = 'Non, je ferai les mises à jour manuellement.';
$lang['proposals_emails_updated']                           = 'Tous les courriels liés à ce %s on été mis à jour comme ceci : %s';
$lang['custom_field_company']                               = 'Entreprise';
$lang['actions']                                            = 'Actions';
$lang['project_mark_as']                                    = 'Marquer comme %s';
$lang['todo_edit_title']                                    = 'Éditer la tâche privée';
$lang['additional_action_required']                         = 'Une action supplémentaire est requise !';
$lang['project_mark_tasks_finished_confirm']                = 'Confirmer';
$lang['project_marked_as_success']                          = 'Projet bien défini comme %s';
$lang['project_marked_as_failed']                           = 'Impossible de définir le projet comme %s';
$lang['auto_assign_customer_admin_after_lead_convert']      = 'Attribution automatique en tant que gestionnaire du client après conversion';
$lang['auto_assign_customer_admin_after_lead_convert_help'] = 'Si cette option est OUI, le collaborateur qui a converti le prospect en client sera automatiquement défini comme gestionnaire du client. REMARQUE : Cette option sera applicable uniquement sur les collaborateurs qui ne disposent d\'aucune permission pour l\'affichage clients';
$lang['auto_close_tickets_disable']                         = 'Mettre 0 pour désactiver';
$lang['task_checklist_item_completed_by']                   = 'Réalisé par %s';
$lang['staff_email_signature_help']                         = 'Si ce champ est vide, la signature de courriel défini dans les paramètres par défaut sera utilisée';
$lang['default_task_priority']                              = 'Priorité par défaut';
$lang['project_send_created_email']                         = 'Lors de la création du projet, envoyer un courriel aux membres';


# Version 1.2.8
$lang['show_transactions_on_invoice_pdf']            = 'Afficher les paiements (transactions) de la facture sur le PDF';
$lang['bulk_actions']                                = 'Actions en masse';
$lang['additional_filters']                          = 'Filtres Additionnels';
$lang['expenses_available_to_bill']                  = 'Dépenses éligibles à la facturation';
$lang['bulk_action_customers_groups_warning']        = 'Si vous ne sélectionnez aucun groupe tous les groupes liés à ce clients seronts supprimés.';
$lang['customer_attachments_show_in_customers_area'] = 'Afficher dans l\'espace client';
$lang['customer_attachments_show_notice']            = 'Seuls les fichiers téléversé depuis l\'espace client seront affiché ou caché dans ce même espace.';
$lang['customer_profile_files']                      = 'Fichiers';
$lang['no_files_found']                              = 'Aucun Fichier trouvé';
$lang['custom_field_column']                         = 'Grille (Bootstrap colonne eq. 12) - 12 maximum';
$lang['task_status']                                 = 'État';
$lang['task_status_1']                               = 'Non commencée';
$lang['task_status_2']                               = 'Consultation en cours';
$lang['task_status_3']                               = 'En cours de test';
$lang['task_status_4']                               = 'En cours';
$lang['task_status_5']                               = 'Achevée';
$lang['task_mark_as']                                = 'Marquer comme %s';
$lang['task_marked_as_success']                      = 'Tâche marquée comme %s';
$lang['search_tasks']                                = 'Recherche de Tâches';
$lang['tasks_kanban_limit']                          = 'Limiter les rangées de tâches "kanban" par état';
$lang['show_on_invoice_on_pdf']                      = 'Afficher %s sur les factures PDF';
$lang['show_pay_link_to_invoice_pdf']                = 'Afficher le lien "Payer la facture" vers le PDF (non applicable si le statut de la facture est Annulé).';
$lang['no_leads_found']                              = 'Pas de prospects trouvés';
$lang['created_today']                               = 'Ajouté aujourd\'hui';
$lang['total_tasks_deleted']                         = 'Nombre de tâches supprimées: %s';
$lang['total_tickets_delete']                        = 'Nombre des billets supprimés: %s';
$lang['format_letter_portrait']                      = 'Lettre Portrait';
$lang['format_letter_landscape']                     = 'Lettre Paysage';
$lang['period_datepicker']                           = 'Période';
$lang['total_by_hourly_rate']                        = 'Total par taux horaire';
$lang['staff_hourly_rate']                           = $lang['task_hourly_rate'];
// &#37; is for % so the system can confuse for the original fields like %s
$lang['remove_tax_name_from_item_table_help'] = 'ex. Article TAXE 15&#37; sera affiché 15&#37; sans le nom de la taxe (Non appliqué si plusieurs taxes ont le même nom et le même pourcentage pour cet article)';
$lang['back_to_project']                      = 'Retour au projet';
$lang['view_kanban']                          = 'Afficher en Kanban';
$lang['invoice_is_overdue']                   = 'Cette facture est en retard de paiement de %s jours';

# Version 1.2.9
$lang['time_decimal']                            = 'Temps (décimal)';
$lang['time_h']                                  = 'Temps (h)';
$lang['proposal_number_prefix']                  = 'Préfixe du numéro de propositions';
$lang['settings_number_padding_prefix']          = 'Nombre de chiffres pour la numérotation des instances (factures, soumissions, ...)<br /> <small>ex. Si la valeur est 3 le nombre aura le format : 005 ou 025</small>';
$lang['this_week_payments']                      = 'Paiements de cette semaine';
$lang['last_week_payments']                      = 'Paiements de la semaine dernière';
$lang['not_published_new_post']                  = 'Nouvel article publié';
$lang['expense_name']                            = 'Nom';
$lang['expense_name_help']                       = 'Pour usage personnel';
$lang['adjustments']                             = 'Ajustements';
$lang['payments_received']                       = 'Paiements reçus';
$lang['not_lead_activity_created_proposal']      = 'Nouvelle soumission créée - %s';
$lang['lead_title']                              = 'Position';
$lang['lead_address']                            = 'Adresse';
$lang['lead_city']                               = 'Ville';
$lang['lead_state']                              = 'Province';
$lang['lead_country']                            = 'Pays';
$lang['lead_zip']                                = 'Code Postal';
$lang['lead_is_public_yes']                      = 'Oui';
$lang['lead_is_public_no']                       = 'Non';
$lang['lead_info']                               = 'Informations du Lead';
$lang['lead_general_info']                       = 'Informations Générales';
$lang['lead_latest_activity']                    = 'Dernières Activités';
$lang['item_description_new_lines_notice']       = 'Le retour à la ligne n\'est pas supporté la description du produit. Utilisez plutôt la description longue.';
$lang['estimates_report']                        = 'Soumissions';
$lang['confirm']                                 = 'Confirmer';
$lang['delete_staff']                            = 'Supprimer ce collaborateurs';
$lang['delete_staff_info']                       = 'Les données de ce membre doivent être transférées sur un autre membre. Veuillez sélectionner un utilisateur pour le transfert de ces données.';
$lang['estimate_items']                          = 'Produits de soumission';
$lang['no_proposals_found']                      = 'Aucune proposition trouvée';
$lang['no_estimates_found']                      = 'Pas de soumission trouvé';
$lang['pipeline_limit_status']                   = 'Limite de processus par état';
$lang['settings_update']                         = 'Mise à jour';
$lang['purchase_key']                            = 'Clé de licence';
$lang['update_now']                              = 'Mettre à jour maintenant';
$lang['update_available']                        = 'Une mise à jour est disponible';
$lang['latest_version']                          = 'Dernière Version';
$lang['your_version']                            = 'Votre Version';
$lang['using_latest_version']                    = 'Vous utilisez la dernière version';
$lang['mark_as_active']                          = 'Marquer comme active';
$lang['customer_inactive_message']               = 'Ce profil client est inactif et certaines fontionnalités sont limitées';
$lang['active_customers']                        = 'Clients actifs';
$lang['inactive_active_customers']               = 'Clients inactifs';
$lang['include_proposal_items_merge_field_help'] = 'Inclure les articles de la proposition avec un champ substituant n\'importe où dans le contenu de la proposition en tant que %s';
$lang['all_data_synced_successfully']            = 'Toutes les données synchronisées avec succés';
$lang['sync_now']                                = 'Synchroniser Maintenant';
$lang['sync_data']                               = 'Synchroniser les Données';
$lang['sync_proposals_up_to_date']               = 'Toutes les propositions sont à jour';
$lang['proposal_sync_1_info']                    = 'Toutes les données des propositions sont enregistrées séparemment après la création. Mettre à jour les infos de %s n\'affectera pas les propositions précédentes pour ce %s.';
$lang['proposal_sync_2_info']                    = 'Si vous avez recemment mis à jour vos infos de %s vous pouvez synchroniser toutes les données liées à cette proposition. Voici les liste des champs qui peuvent être synchronisés.';

# Version 1.3.0
$lang['expense_include_additional_data_on_convert'] = 'Inclure les informations additionnelles à la description longue de ce produit depuis cette dépense.';

# Version 1.4.0
$lang['calendar_events_limit']                              = 'Limite du calendrier des évènements (vue par mois et par semaine)';
$lang['show_page_number_on_pdf']                            = 'Afficher les numéros de page sur le PDF';
$lang['customer_active_inactive_help']                      = 'Ne sera pas affiché dans le menu déroulant en créant un nouvel enregistrement';
$lang['item_groups']                                        = 'Groupes';
$lang['item_group']                                         = 'Groupe de produits';
$lang['item_group_name']                                    = 'Nom du groupe';
$lang['new_item_group']                                     = 'Nouveau groupe';
$lang['show_setup_menu_item_only_on_hover']                 = 'Afficher l\'élément du menu de configuration seulement lors du survol de la souris sur la sidebar';
$lang['internal_article']                                   = 'Publication interne';
$lang['expenses_created_from_this_recurring_expense']       = 'Dépenses créés depuis cet dépenses récurrent';
$lang['convert_to_task']                                    = 'Convertir en tâche';
$lang['next_invoice_date']                                  = 'Prochaine date de Facture: %s';
$lang['next_expense_date']                                  = 'Prochaine date de Dépense: %s';
$lang['invoice_recurring_from']                             = 'Cette facture est créée depuis la facture récurrente avec le numéro: %s';
$lang['expense_recurring_from']                             = 'Cette dépense est créée depuis cette dépense récurrente: %s';
$lang['child_invoices']                                     = 'Factures Parentes';
$lang['child_expenses']                                     = 'Dépenses Parents';
$lang['no_announcements']                                   = 'Aucune Annonces';
$lang['unit']                                               = 'Unité';
$lang['permission_view_own']                                = 'Voir (à lui)';
$lang['permission_global']                                  = 'global';
$lang['permission_customers_based_on_admins']               = 'En fonction des gestionnaires de client';
$lang['permission_payments_based_on_invoices']              = 'En fonction de l\'autorisation (vos) de visualisation des factures';
$lang['permission_projects_based_on_assignee']              = 'Si les collaborateurs ne disposent pas de l\'autorisation Voir (global), seuls les projets auxquels il est ajouté en tant que membre du projet seront affichés.';
$lang['permission_tasks_based_on_assignee']                 = 'Si le collborateur n\'a pas l\'autorisation Voir (global), sera affiché seulement les tâches où le membre du personnel est suiveur, assigné, la tâche est public ou dans réglage->paramètres->tâches-> Autoriser tout le personnel à voir toutes les tâches liées aux projets est défini sur OUI lorsque la tâche est liée au projet.';
$lang['settings_paymentmethod_default_selected_on_invoice'] = 'Sélectionné par défaut sur la facture';
$lang['paymentmethod_braintree_merchant_id']                = 'ID du Marchand';
$lang['paymentmethod_braintree_private_key']                = 'Clé privée';
$lang['paymentmethod_braintree_public_key']                 = 'Clé Public';
$lang['company_requires_vat_number_field']                  = 'L\'entreprise exige l\'utilisation du champ Numéro de TVA';
$lang['no_company_view_profile']                            = 'Particulier - Afficher le Profil';
$lang['company_is_required']                                = 'Le champ Entreprise est obligatoire';
$lang['estimate_invoiced']                                  = 'Facturé';
$lang['file_date_uploaded']                                 = 'Date du téléversement';
$lang['allow_contact_to_delete_files']                      = 'Autoriser les contacts à supprimer leurs propres fichiers téléversés depuis la zone client';
$lang['file']                                               = 'Fichier';
$lang['customer_contact_person_only_one_allowed']           = 'Un seul contact est autorisé lorsque le champ d\'entreprise n\'est pas rempli. Le système émettra ce client comme personne';
$lang['web_to_lead']                                        = 'Prospects web';
$lang['web_to_lead_form']                                   = 'Formulaire de génération de prospects Web';
$lang['new_form']                                           = 'Nouveau formulaire';
$lang['form_name']                                          = 'Nom du formulaire';
$lang['cf_option_in_use']                                   = 'Une option que vous avez supprimée est en cours d\'utilisation et ne peut pas être supprimée. L\'option est automatiquement ajoutée aux options existantes.';
$lang['form_builder']                                       = 'Générateur de formulaire';
$lang['form_information']                                   = 'Informations & Réglages du formulaire';
$lang['form_builder_create_form_first']                     = 'Créez d\'abord le formulaire pour pouvoir utiliser le générateur de formulaires.';
$lang['notify_assigned_user']                               = 'Responsable';
$lang['form_recaptcha']                                     = 'Utiliser Google Recaptcha';
$lang['form_lang_validation']                               = 'Langage';
$lang['form_lang_validation_help']                          = 'Pour les messages de validation';
$lang['form_btn_submit_text']                               = 'Texte du bouton Envoyer';
$lang['form_success_submit_msg']                            = 'Message à afficher après l\'envoi du formulaire';
$lang['total_submissions']                                  = 'Nombre de soumissions';
$lang['form_integration_code']                              = 'Code d\'intégration';
$lang['not_lead_imported_from_form']                        = 'Nouvelle piste importé depuis le formulaire - %s';
$lang['not_lead_activity_log_attachment']                   = 'Pièce jointe importée du formulaire - %s';
$lang['form_integration_code_help']                         = 'Copier et coller le code n\'importe où dans votre site pour afficher le formulaire, plus vous pouvez ajuster la largeur et la hauteur px pour s\'adapter à votre site Web.';
$lang['invoice_not_found']                                  = 'Facture introuvable';
$lang['estimate_not_found']                                 = 'Soumission introuvable';
$lang['expense_not_found']                                  = 'Dépense introuvable';
$lang['proposal_not_found']                                 = 'Proposition introuvable';
$lang['new_task_assigned_non_user']                         = 'Nouvelle tâche vous est attribuée - %s';
$lang['no_child_found']                                     = 'Pas de parents %s trouvés';
$lang['company_vat_number']                                 = 'Numéros de taxes';
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
$lang['invoice_activity_auto_converted_from_estimate']      = 'Facture auto générée à partir de la soumission avec le nombre %s';
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
$lang['task_edit_delete_timesheet_notice'] = 'La tâche de la feuille de temps est %s, vous ne pouvez %s la feuille de temps.';
$lang['department_username']               = 'Nom d\'utilisateur IMAP';
$lang['department_username_help']          = 'Remplissez uniquement ce champ si votre serveur IMAP utilise votre adresse comme login. Vous devez tout de même ajouter votre adresse mail.';
$lang['total_tickets_deleted']             = 'Nombre de billets supprimé: %s';

# Version 1.5.1
$lang['ticket_linked_to_project']                                = 'Ce billet est lié à un projet: %s';
$lang['only_own_files_contacts']                                 = 'Vos contacts voient uniquement leurs propres fichiers téléversés';
$lang['only_own_files_contacts_help']                            = 'Si vous partagez ce fichier manuellement depuis un client vers les autres contacts, le fichier sera visible de tous.';
$lang['share_file_with']                                         = 'Partager le fichier avec';
$lang['file_share_visibility_notice']                            = 'Ce fichier n\'est pas partager avec vos contacts, changer la visibilité et recharger';
$lang['share_file_with_show']                                    = 'Ce fichier est partagé avec: %s';
$lang['allow_primary_contact_to_view_edit_billing_and_shipping'] = 'Permettre au contact principal de voir et éditer les informations de facturation et livraison';
$lang['estimate_due_after']                                      = 'Echéance de la soumission après (jours)';

# Version 1.6.0
$lang['my_timesheets']                                   = 'Ma feuille de temps';
$lang['today']                                           = 'Aujourd\'hui';
$lang['open_in_dropbox']                                 = 'Ouvrir dans Dropbox';
$lang['show_primary_contact']                            = 'Voir le nom complet du contact principale sur %s';
$lang['view_members_timesheets']                         = 'Voir toutes les feuilles de temps';
$lang['priority']                                        = 'Priorité';
$lang['fetch_from_google']                               = 'Récupérer depuis Google';
$lang['customer_fetch_lat_lng_usage']                    = 'Remplir l\'adresse, ville et pays avant de récupérer les meilleurs résultats.';
$lang['g_search_address_not_found']                      = 'L\'adresse est introuvable, merci de réessayer';
$lang['proposals_report']                                = 'Propositions';
$lang['staff_members_open_tickets_to_all_contacts_help'] = 'Si un responsable ne possède pas les permissions requises pour le client, il ne pourra créé un billet uniquement que dans la partie ADMIN du client auquel il est assigné.';
$lang['staff_members_open_tickets_to_all_contacts']      = 'Autoriser l\'équipe à ouvrir des billets pour tous les contacts?';
$lang['charts_based_report']                             = 'Rapport via graphique';
$lang['responsible_admin']                               = 'Admin responsable';
$lang['tags']                                            = 'Étiquettes';
$lang['tag']                                             = 'Étiquette';
$lang['customer_map_notice']                             = 'Ajouter la longitude et latitude dans le profil client pour voir la carte ici';
$lang['default_view']                                    = 'Vue par défaut';
$lang['day']                                             = 'Jour';
$lang['agenda']                                          = 'Agenda';
$lang['timesheet_tags']                                  = 'Étiquettes des feuilles de temps';
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
$lang['search_by_tags']                                  = 'Utilisez # + nom d\'étiquette pour rechercher par étiquettes';
$lang['project_status_5']                                = 'Annulé';

# Version 1.7.0
$lang['not_activity_new_reminder_created']        = 'Définir un nouveau rappel pour %s avec la date %s';
$lang['not_activity_new_task_created']            = 'Nouvelle tâche créée - %s';
$lang['recurring_invoice_draft_notice']           = 'Cette facture concerne le projet de l\'état, vous devez marquer cette facture comme envoyée. Les factures récurrentes avec l\'état ne seront pas recréées par le travail de cron.';
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
$lang['mark_all_as_read']                         = 'Tout marquer comme lu';
$lang['tax_1']                                    = 'Taxe 1';
$lang['tax_2']                                    = 'Taxe 2';
$lang['total_with_tax']                           = 'Total avec impôts';
$lang['new_task_auto_assign_current_member']      = 'Attribuer automatiquement une tâche au collaborateur qui la créée';
$lang['new_task_auto_assign_current_member_help'] = 'Non appliqué si la tâche est liée au projet et le créateur n\'est pas membre du projet';
$lang['copy_project_tasks_status']                = 'Copier l\'état des tâches';
$lang['tasks_summary']                            = 'Vue d\'ensemble des tâches';
$lang['vault']                                    = 'Coffre-fort';
$lang['new_vault_entry']                          = 'Nouvelle entrée au coffre-fort';
$lang['server_address']                           = 'Adresse du serveur';
$lang['port']                                     = 'Port';
$lang['vault_username']                           = 'Nom d\'utilisateur';
$lang['vault_password']                           = 'Mot de passe ';
$lang['vault_description']                        = 'Brève description';
$lang['vault_entry']                              = 'Entrée dans le coffre-fort';
$lang['no_port_provided']                         = 'Non fourni';
$lang['view_password']                            = 'Afficher le mot de passe';
$lang['security_reasons_re_enter_password']       = 'Pour des raisons de sécurité, veuillez entrer votre mot de passe ci-dessous';
$lang['password_change_fill_notice']              = 'Ne remplissez que le mot de passe si vous souhaitez modifier le mot de passe';
$lang['vault_password_user_not_correct']          = 'Votre mot de passe n\'est pas correct, veuillez réessayer';
$lang['no_vault_entries']                         = 'Coffre-fort vide.';
$lang['vault_entry_created_from']                 = 'Cette entrée de coffre-fort est créée par %s';
$lang['vault_entry_last_update']                  = 'Dernière mise à jour par %s';
$lang['vault_entry_visible_to_all']               = 'Visible à tous les collaborateurs';
$lang['vault_entry_visible_creator']              = 'Visible uniquement pour moi (l\'administrateur n\'est pas exclu)';
$lang['vault_entry_visible_administrators']       = 'Visible uniquement pour les administrateurs';
$lang['my_reminders']                             = 'Mes rappels';
$lang['reminder_related']                         = 'Relatif à';
$lang['event_notification']                       = 'Notification';
$lang['days']                                     = 'Journées';
$lang['reminder_notification_placeholder']        = 'Ex. 30 minutes avant';
$lang['event_color']                              = 'Couleur de l\'événement';
$lang['group_by_task']                            = 'Grouper par tâche';
$lang['save']                                     = 'Enregistrer';
$lang['disable_languages']                        = 'Désactiver les langues';

# Version 1.8.0
$lang['not_customer_viewed_invoice']                         = 'La facture %s a été consultée';
$lang['not_customer_viewed_estimate']                        = 'La soumission %s a été consulté';
$lang['not_customer_viewed_proposal']                        = 'La proposition %s a été consultée';
$lang['display_inline']                                      = 'Affichage en ligne';
$lang['email_header']                                        = 'En-tête prédéfinie';
$lang['email_footer']                                        = 'Pied de page prédéfini';
$lang['exclude_proposal_from_client_area_with_draft_status'] = 'Exclure les propositions en brouillon de l\'espace client';
$lang['pusher_app_key']                                      = 'APP Key';
$lang['pusher_app_secret']                                   = 'APP Secret';
$lang['pusher_app_id']                                       = 'APP ID';
$lang['pusher_cluster_notice']                               = 'Laisser vide pour utiliser les paramètres par défaut.';
$lang['pusher_enable_realtime_notifications']                = 'Activer les notifications en temps réel';
$lang['task_is_overdue']                                     = 'Cette tache a expiré';
$lang['this_year']                                           = 'Cette année';
$lang['last_year']                                           = 'Année précédente';
$lang['customer_statement']                                  = 'Relevé de compte';
$lang['customer_statement_for']                              = 'Relevé de compte pour %s';
$lang['account_summary']                                     = 'Relevé de compte';
$lang['statement_beginning_balance']                         = 'Solde initial';
$lang['invoiced_amount']                                     = 'Montant facturé';
$lang['amount_paid']                                         = 'Montant payé';
$lang['statement_from_to']                                   = 'du %s au %s';
$lang['customer_statement_info']                             = 'Factures et paiements entre le %s et %s';
$lang['balance_due']                                         = 'Solde dû';
$lang['statement_heading_date']                              = 'Date';
$lang['statement_heading_details']                           = 'Détails';
$lang['statement_heading_amount']                            = 'Montant';
$lang['statement_heading_payments']                          = 'Paiement';
$lang['statement_heading_balance']                           = 'Solde';
$lang['statement_invoice_details']                           = 'Facture %s dûe le %s';
$lang['statement_payment_details']                           = 'Paiement (%s) de la facture %s';
$lang['statement_bill_to']                                   = 'A';
$lang['send_to_email']                                       = 'Envoyer par courriel';
$lang['statement_sent_to_client_success']                    = 'Le document a été envoyé au client';
$lang['statement_sent_to_client_fail']                       = 'Un problème est survenu lors de l\'envoi du document';
$lang['view_account_statement']                              = 'Voir le compte facture';
$lang['text_not_recommended_for_servers_limited_resources']  = 'Non recommandé si le serveur a des ressources limitées.';
$lang['tasks_bull_actions_assign_notice']                    = 'Si la tâche est associée à un projet et que vous l\'associez à un collègue ne faisant pas partie du projet, celui-ci sera automatiquement adjoint au projet';
$lang['company_information']                                 = 'Information de l\'entreprise';
$lang['ticket_form']                                         = 'Formulaire de billets';
$lang['ticket_form_subject']                                 = 'Objet';
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
$lang['show_on_ticket_form']                      = 'Afficher le billet sur le formulaire';
$lang['cancel_upload']                            = 'Annuler le téléversement';
$lang['show_table_export_button']                 = 'Afficher le bouton d\'exportation';
$lang['show_table_export_all']                    = 'À tous les membres de l\'équipe';
$lang['show_table_export_admins']                 = 'Seulement les admins';
$lang['show_table_export_hide']                   = 'Masquer le boutton export à tous les membres de l\'équipe';
$lang['task_created_by']                          = 'Créé par %s';
$lang['validation_extension_not_allowed']         = 'Extension de fichier non permise';
$lang['allow_staff_view_proposals_assigned']      = 'Permettre aux collaborateurs de voir les propositions qui leur sont attribués';
$lang['task_users_working_on_tasks_multiple']     = '%s travaille actuellement sur cette tâche';
$lang['task_users_working_on_tasks_single']       = '%s travail actuellement sur cette tâche';

# Version 1.9.0
$lang['estimated_hours']                               = 'Heures estimées';
$lang['two_factor_auth_failed_to_send_code']           = 'Erreur de l\'envoi du code par courriel, les informations SMTP ne doivent pas être bien configurée';
$lang['two_factor_auth_code_sent_successfully']        = 'Un courriel a été envoyé à %s avec le code de vérification pour vérifier votre login';
$lang['enable_two_factor_authentication']              = 'Autoriser l\'authentification en deux étapes';
$lang['two_factor_authentication_info']                = 'L\'authentification en deux temps est réalisée par courriel, avant d\'activer cette option soyez certains de votre configuration SMTP. Une clé d\'authentification unique sera envoyée à l\'adresse courriel lors de la connexion.';
$lang['timesheets_overview_all_members_notice_admins'] = 'La liste complète des feuilles de temps de tous les utilisateurs n\'est visible que par les administrateurs.';
$lang['two_factor_authentication']                     = 'Authentification en deux temps';
$lang['two_factor_authentication_code']                = 'Code';
$lang['admin_two_factor_auth_heading']                 = 'Code d\'authentification';
$lang['two_factor_code_not_valid']                     = 'Code authentification non valide';
$lang['back_to_login']                                 = 'Retourner à la page de connexion';
$lang['enter_activity']                                = 'Entrer les activités';
$lang['attach_files']                                  = 'Joindre un fichier';
$lang['no_tags_used']                                  = 'Aucune étiquette utilisée par le système';
$lang['exclude_completed_tasks']                       = 'Exclure les tâches accomplies';
$lang['modal_width_class']                             = 'Classe pour la largeur des fenêtres modales';
$lang['contract_copy']                                 = 'Dupliquer';
$lang['contract_copied_successfully']                  = 'Contrat copié';
$lang['contract_copied_fail']                          = 'Erreur lors de la copie du contrat';
$lang['project_marked_as_finished_to_contacts']        = 'Envoyer <b>Projet marqué comme fini</b> au client';
$lang['only_admins']                                   = 'Seulement les administrateurs';
$lang['new_notification']                              = 'Nouvelle notification!';
$lang['enable_desktop_notifications']                  = 'Activer les notifications de bureau';
$lang['save_and_send']                                 = 'Enregistrer et envoyer';
$lang['private']                                       = 'Privé';
$lang['task_created_at']                               = 'Créé à %s';
$lang['hide_notified_reminders_from_calendar']         = 'Masquer les rappels notifiés du calendrier';
$lang['last_active']                                   = 'Dernière active';
$lang['open_ticket']                                   = 'Ouvrir un billet';
$lang['task_add_description']                          = 'Ajouter une description';
$lang['project_setting_create_tasks']                  = 'ajouter de nouvelles tâches';
$lang['project_setting_edit_tasks']                    = 'éditer des tâches (seulement les tâches créé par le contact)';

# Version 1.9.2
$lang['items_report']                            = 'Produits';
$lang['reports_item']                            = 'Produit';
$lang['quantity_sold']                           = 'Quantité vendue';
$lang['total_amount']                            = 'Montant total';
$lang['avg_price']                               = 'Prix moyen';
$lang['item_report_paid_invoices_notice']        = 'Le rapport des produits est généré uniquement sur les factures soldées hors remises et taxes.';
$lang['overview']                                = 'Vue d\'ensemble';
$lang['timer_started_change_status_in_progress'] = 'Modifier l\'état de la tâche pour "en cours" lors du lancement d\'une minuterie (applicable uniquement si l\'état de la tâche est à l\'arrêt)';
$lang['company_info_format']                     = 'Format des informations de l\'entreprise (PDF et HTML)';
$lang['customer_info_format']                    = 'Format des informations du client (PDF et HTML)';
$lang['custom_field_info_format_embed_info']     = 'Les champs personnalisés %s peuvent facilement être intégrée dans les documents PDF et HTML en ajoutant le nom du champ à l\'intérieur de la page : %s';
$lang['transfer_lead_notes_to_customer']         = 'Transférer les notes associées aux Prospects vers leur fiche client.';
$lang['authorized_signature_text']               = 'Signature autorisée';
$lang['show_pdf_signature_invoice']              = 'Afficher la signature sur la facture PDF';
$lang['show_pdf_signature_estimate']             = 'Afficher la signature sur la soumission PDF';
$lang['signature']                               = 'Signature';
$lang['signature_image']                         = 'Signature Image';
$lang['insert_checklist_templates']              = 'Insérer la liste de contrôle ';
$lang['save_as_template']                        = 'Enregistrer le modèle';
$lang['invoice_item_add_edit_rate_currency']     = 'Prix - %s';
$lang['total_files_deleted']                     = 'Nombre de fichiers supprimés: %s';
$lang['invalid_transaction']                     = 'Transaction non valide. Merci de réessayer.';
$lang['payment_gateway_payu_money_key']          = 'PayU Money Key';
$lang['payment_gateway_payu_money_salt']         = 'PayU Money Salt';
$lang['settings_paymentmethod_description']      = 'Description de paiement du tableau de bord de la passerelle';

# Version 1.9.3
$lang['default_ticket_reply_status']          = 'État par défaut lors d\'une réponse au billet.';
$lang['ticket_add_response_and_back_to_list'] = 'Retourner à la liste des billets une fois la réponse envoyée';

# Version 1.9.4
$lang['default_task_status']                               = 'État par défaut à la création de tâche';
$lang['custom_field_pdf_html_help']                        = 'Assurez-vous que le champ ' . $lang['custom_field_show_on_client_portal'] . ' soit coché si vous voulez que ce champ soit visible auprès du client lorsque le client télécharge le PDF.';
$lang['auto']                                              = 'Auto';
$lang['email_queue']                                       = 'File d\'attente des courriels';
$lang['email_queue_enabled']                               = 'Activer la file d\'attente des courriels';
$lang['email_queue_skip_attachments']                      = 'Ne pas mettre des courriels avec pièces jointes dans la file d\'attente.';
$lang['disable']                                           = 'Désactiver';
$lang['enable']                                            = 'Activer';
$lang['auto_dismiss_desktop_notifications_after']          = 'Rejet automatique des notifications après X seconds (0 pour désactiver)';
$lang['proposal_info_format']                              = 'Format des infos sur les propositions (PDF et HTML)';
$lang['hide_tasks_on_main_tasks_table']                    = 'Masquer les tâches des projets sur la liste principale (tableau de bord)';
$lang['ticket_replies_order']                              = 'Ordre des réponses aux tickets';
$lang['ticket_replies_order_notice']                       = 'Le message initial du billet sera toujours placé en premier.';
$lang['invoice_cancelled_email_disabled']                  = 'Facture supprimée. Enlever l\'état supprimer pour envoyer un mail au client';
$lang['email_notifications']                               = 'Notifications par courriel';
$lang['invoice_activity_record_payment_email_to_customer'] = 'Enregistrement d\'un paiement, courriel envoyé à: %s';
$lang['exclude_inactive']                                  = 'Exclure les inactifs';
$lang['disable_all']                                       = 'Désactiver tout';
$lang['enable_all']                                        = 'Activer tout';
$lang['reccuring_invoice_option_gen_and_send']             = 'Générer et envoyer automatiquement la nouvelle facture au client';
$lang['reccuring_invoice_option_gen_unpaid']               = 'Générer une facture impayée';
$lang['reccuring_invoice_option_gen_draft']                = 'Générer une facture brouillon';
$lang['event_created_by']                                  = 'Cet événnement a été créé par %s';

# Version 1.9.5
$lang['customers_assigned_to_me']              = 'Client attribué à moi';
$lang['bcc_all_emails']                        = 'BCC tous les courriels vers';
$lang['confirmation_of_identity']              = 'Confirmation de l\'identité';
$lang['accept_identity_confirmation']          = 'Requiert la confirmation de l\'identité pour l\'acceptation.';
$lang['accepted_identity_info']                = '%s a été accepté par %s sur %s depuis l\'adresse IP %s';
$lang['clear_this_information']                = 'Supprimer cette information';
$lang['new_task_auto_follower_current_member'] = 'Ajouter automatiquement le créateur de la tâche comme suiveur de la tâche lorsqu\'une nouvelle tâche a été créée';
$lang['expenses_report_net']                   = 'Montant net (Sous total)';
$lang['expense_field_billable_help']           = 'Si cette dépense est facturable, le contenu du champ %s peut être ajouté à la facture en description longue.';
$lang['task_biillable_checked_on_creation']    = 'L\'option Facturable est activée par défaut lorsqu\'une nouvelle tâche est créée';
$lang['pause_overdue_reminders']               = 'Mettre en pause les rappels de retard';
$lang['resume_overdue_reminders']              = 'Reprendre les rappels de retard';
# Credit Notes
$lang['credit_notes']                                            = 'Notes de crédit';
$lang['credit_note']                                             = 'Note de crédit';
$lang['credit_note_lowercase']                                   = 'note de crédit';
$lang['credit_note_not_found']                                   = 'Note de crédit introuvable';
$lang['credit_note_date']                                        = 'Date';
$lang['credit_date']                                             = 'Date';
$lang['settings_sales_next_credit_note_number']                  = 'Numéro suivant de la note de crédit';
$lang['credit_note_number_prefix']                               = 'Préfixe du numéro de la note de crédit';
$lang['credit_note_number']                                      = 'Nº de note de crédit';
$lang['credit_note_number_exists']                               = 'Le numéro de la note de crédit existe déjà';
$lang['show_shipping_on_credit_note']                            = 'Afficher les détails de livraison sur la note de crédit';
$lang['credit_note_number_decrement_on_delete']                  = 'Décrémenter le numéro de la note de crédit après suppression.';
$lang['credit_note_number_decrement_on_delete_help']             = 'Le numéro sera décrémenté seulement si c\'est la dernière note de crédit.';
$lang['credit_note_status']                                      = 'État';
$lang['credit_note_status_open']                                 = 'Ouverte';
$lang['credit_note_status_closed']                               = 'Fermée';
$lang['credit_note_status_void']                                 = 'Annulée';
$lang['credit_note_mark_as_open']                                = 'Marquée comme ouverte';
$lang['new_credit_note']                                         = 'Nouvelle note de crédit';
$lang['credit_note_amount']                                      = 'Montant';
$lang['credit_note_remaining_credits']                           = 'Montant restant';
$lang['credit_note_client_note']                                 = 'Note';
$lang['invoices_credited']                                       = 'Facture créditée';
$lang['apply_credits']                                           = 'Appliquer le montant';
$lang['x_credits_available']                                     = '%s en crédit disponible.';
$lang['credit_amount']                                           = 'Montant de la note de crédit';
$lang['credits_available']                                       = 'Crédits disponible';
$lang['amount_to_credit']                                        = 'Montant crédité';
$lang['invoice_credits_applied']                                 = 'Crédits appliqués à la facture';
$lang['applied_credits']                                         = 'Crédits appliqués';
$lang['credit_amount_bigger_then_invoice_balance']               = 'Le montant total de la note de crédit est plus élevé que le motant dû';
$lang['credit_amount_bigger_then_credit_note_remaining_credits'] = 'Total credits amount is bigger then remaining credits';
$lang['credited_invoices_not_found']                             = 'Factures créditées introuvables';
$lang['credit_invoice_number']                                   = 'Numéro de facture';
$lang['credits_used']                                            = 'Crédits utilisés';
$lang['credits_remaining']                                       = 'Crédits restant';
$lang['amount_credited']                                         = 'Montant crédité';
$lang['credits_applied_cant_delete_status_closed']               = 'Cette note de crédit a le status de "fermé", vous devez d\'abord supprimer le crédit pour ensuite supprimer la note de crédit.';
$lang['credits_applied_cant_delete_credit_note']                 = 'Cette note de crédit dispose d\'un crédit, vous devez d\'abord supprimer le crédit avant de pouvoir supprimer la note de crédit.';
$lang['credit_note_pdf_heading']                                 = 'Note de Crédit';
$lang['show_status_on_pdf']                                      = 'Afficher l\'état %s sur le document PDF';
$lang['show_pdf_signature_credit_note']                          = 'Afficher la signature sur la note de crédit PDF';
$lang['calendar_credit_note_reminder']                           = 'Rappel de la note de crédit';
$lang['show_credit_note_reminders_on_calendar']                  = 'Rappels notes de crédit';
$lang['reminders']                                               = 'Rappels';
$lang['invoice_activity_applied_credits']                        = 'application du crédit de %s à %s';
$lang['create_credit_note']                                      = 'Nouvelle note de crédit';
$lang['confirm_invoice_credits_from_credit_note']                = 'Lorsque vous créez une note de crédit sur une facture impayée, le montant de la note de crédit s\'appliquera pour cette facture. Etes-vous sûre de vouloir créer la note de crédit?';
$lang['credit_invoice_date']                                     = 'Date';
$lang['apply_to_invoice']                                        = 'Appliquer à la facture';
$lang['apply_credits_from']                                      = 'Appliquer le Crédit de %s';
$lang['credits_successfully_applied_to_invoices']                = 'Le crédit a été appliqué correctement appliqué à la facture';
$lang['credit_note_send_to_client_modal_heading']                = 'Envoyer la note de crédit au client';
$lang['credit_note_sent_to_client_success']                      = 'Note de crédit envoyée au client';
$lang['credit_note_sent_to_client_fail']                         = 'Une erreur est survenue lors de l\'envoi de la note de crédit au client';
$lang['credit_note_no_invoices_available']                       = 'Il n\'y a aucune facture disponible pour ce client.';
$lang['show_total_paid_on_invoice']                              = 'Afficher le montant payé sur la facture';
$lang['show_credits_applied_on_invoice']                         = 'Afficher le crédit appliqué à la facture';
$lang['show_amount_due_on_invoice']                              = 'Afficher le montant dû sur la facture';
$lang['customer_profile_update_credit_notes']                    = 'Mettre a jour les informations de facturation/livraison sur toutes les notes de crédit précédentes (les notes de crédit fermées ne sont pas affectées)';
$lang['zip_credit_notes']                                        = 'Exporter en ZIP';
$lang['statement_credit_note_details']                           = 'Note de crédit %s';
$lang['statement_credits_applied_details']                       = 'Crédits appliqués de la note de crédit %s - %s pour le paiement de %s';
$lang['credit_note_files']                                       = 'Note de crédit fichier';
$lang['credit_notes_report']                                     = 'Notes de crédit';

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
$lang['ticket_assigned']                          = 'Attribué à';
$lang['dashboard_options']                        = 'Editer le tableau de bord';
$lang['reset_dashboard']                          = 'Réinitialiser le tableau de bord';
$lang['widgets']                                  = 'Widgets';
$lang['s_chart']                                  = '%s graphique';
$lang['quick_stats']                              = 'Statistique rapide';
$lang['user_widget']                              = 'Widget utilisateur';
$lang['widgets_visibility_help_text']             = 'Les widgets qui sont affichés seulement s\ils contiennent assez de données ne peuvent pas être masqués ou affichés.';
$lang['show_project_on_estimate']                 = 'Afficher le nom du projet sur la soumission';
$lang['show_project_on_invoice']                  = 'Afficher le nom du projet sur la facture';
$lang['show_project_on_credit_note']              = 'Afficher le nom du projet sur la note de crédit';
$lang['visible_tabs']                             = 'Onglets visibles';
$lang['all']                                      = 'Tous';
$lang['view_widgetable_area']                     = 'Voir les zones de widgets';
$lang['hide_widgetable_area']                     = 'Masquer les zones de widgets';
$lang['no_items_warning']                         = 'Entrer au moins un produit.';
$lang['item_forgotten_in_preview']                = 'Avez vous oublié d\'ajouter ce produit ?';
$lang['not_task_status_changed']                  = '%s - état de la tâche changé en %s';
$lang['not_project_activity_task_status_changed'] = 'État de la tâche modifié';
$lang['reset']                                    = 'Reset';
$lang['save_message_as_predefined_reply']         = 'Enregistrer le message comme réponse prédéfinie';
$lang['inline_create_option']                     = 'Autoriser les membres de l\'équipe à créer %s dans %s la zone création/édition?';
$lang['inline_create']                            = 'Création en ligne';
$lang['inline_create_option_predefined_replies']  = 'Autoriser les membres de l\'équipe à enregistrer les réponses automatiques des billets.';
$lang['reminders_view_none_admin']                = 'Afficher vos propres rappels ainsi que vos rappels créés.';
$lang['show_tabs_and_options']                    = 'Afficher les fenêtres & Options';
$lang['no_milestones_found']                      = 'Ce projet n\'a pas de jalons';
$lang['lead_is_contact_create_task']              = 'Créer une tâche si l\'expéditeur du courriel est déjà client et assigné à un collègue.';
$lang['existing_customer']                        = 'Client existant';
$lang['use_company_name_instead']                 = 'Utilisez le nom de l\'entreprise';
$lang['customer_delete_transactions_warning']     = 'Ce client a des transations, %s, vous devez supprimer les transactions ou les déplacer à un autre client afin d\'effectuer cette action.';

# Version 1.9.8
$lang['sending_email_contact_permissions_warning'] = 'Echec de la sélection automatique des contacts des entreprises. Assurez-vous que l\'entreprise dispose de contacts actifs et ayant une adresse mail reliée au centre de notifications pour %s activé.';
$lang['help_leads_create_permission']              = 'Tous les membres de l\'équipe peuvent créer des prospects,  à l\'exception de ceux marqués comme n\'étant pas des membres de l\'équipe';
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
$lang['allow_non_admin_members_to_import_leads']   = 'Autoriser les collaborateurs à importer des prospects';
$lang['project_hide_tasks_settings_info']          = 'Les tâches de ce projet sont exclues de la liste principale, vous ne pouvez voir les tâches liées à ce projet uniquement dans cette zone.';

# Version 1.9.9
$lang['ticket_create_no_contact']            = 'Billet sans contact';
$lang['ticket_create_to_contact']            = 'Billet assigné à un contact';
$lang['showing_billable_tasks_from_project'] = 'Afficher les tâches facturable du projet';
$lang['no_billable_tasks_found']             = 'Tâche facturable non trouvée';
$lang['help_leads_permission_view']          = 'Si les permissions ne sont pas cochées, les membres de l\'équipe ne verront que les prospects assignés à cette tâche, les prospects créé par ce membre de l\'équipe et les prospects marqués comme public';

# Version 2.0.0

$lang['customers']                                              = $lang['clients'];
$lang['knowledge_base']                                         = $lang['kb_string'];
$lang['staff']                                                  = $lang['als_staff'];
$lang['checklist_templates']                                    = 'Modèles de liste de contrôle pour les tâches';
$lang['emails_tracking']                                        = 'Suivi de courriels';
$lang['no_tracked_emails_sent']                                 = 'Aucun courriels suivis envoyés';
$lang['tracked_emails_sent']                                    = 'Courriels suivis envoyés';
$lang['tracked_email_date']                                     = 'Date';
$lang['tracked_email_subject']                                  = 'Objet';
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
$lang['show_pdf_signature_contract']                            = 'Afficher la signature sur le contrat PDF';
$lang['document_signed_successfully']                           = 'Vous avez signé le document';
$lang['document_signed_info']                                   = 'Ce document a été signé par %s le %s depuis l\'adresse IP %s';
$lang['keep_signature']                                         = 'Conserver signature client';
$lang['view_contract']                                          = 'Voir Contrat';
$lang['summary']                                                = 'Résumé';
$lang['discussion']                                             = 'Discussion';
$lang['general_information']                                    = 'Informations générales';
$lang['proposal_information']                                   = 'Informations de la proposition';
$lang['contract_comments']                                      = 'Commentaires';
$lang['not_contract_comment_from_client']                       = 'Nouveau commentaire client sur le contrat %s ...';
$lang['contract_files']                                         = 'Fichiers du contrat';
$lang['date_signed']                                            = 'Date de signature';
$lang['clear_signature']                                        = 'Enlever la signature';
$lang['recurring_has_ended']                                    = 'Ce %s récurrent est terminé.';
$lang['cycles_remaining']                                       = 'Cycles restants';
$lang['cycles_infinity']                                        = 'Infini';
$lang['recurring_total_cycles']                                 = 'Nombre de récurrences';
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
$lang['show_subscriptions_in_customers_area']                   = 'Afficher les abonnements dans l\'espace client?';
$lang['show_subscriptions_in_customers_area_help']              = 'Cette option n\'est valide que pour le contact principal du client.';
$lang['subscription_sent_to_email_success']                     = 'Abonnement envoyé par courriel';
$lang['subscription_sent_to_email_fail']                        = 'Échec de l\'envoi de l\'abonnement par courriel';
$lang['new_subscription']                                       = 'Nouvel abonnement';
$lang['subscription_status']                                    = 'État';
$lang['next_billing_cycle']                                     = 'Prochaine facturation';
$lang['subscription_not_subscribed']                            = 'Non abonné';
$lang['send_subscription']                                      = 'Envoyer abonnement';
$lang['subscription_will_send_to_primary_contact']              = 'L\'abonnement sera envoyé au contact principal.';
$lang['subscription_resumed']                                   = 'Abonnement activé';
$lang['subscription_canceled']                                  = 'Abonnement annulé';
$lang['no_credit_card_found']                                   = 'Pas de carte de crédit trouvée';
$lang['cancel_immediately']                                     = 'Annuler immédiatement';
$lang['cancel_at_end_of_billing_period']                        = 'Annuler à la fin de la période de facturation';
$lang['view_subscription']                                      = 'Voir abonnement';
$lang['subscription_future']                                    = 'Futur';
$lang['subscription_active']                                    = 'Actif';
$lang['subscription_past_due']                                  = 'Echu';
$lang['subscription_canceled']                                  = 'Annulé';
$lang['subscription_unpaid']                                    = 'Impayé';
$lang['billing_plan']                                           = 'Plan de facturation';
$lang['upcoming_invoice']                                       = 'Facture à venir';
$lang['resume_now']                                             = 'Réactiver maintenant';
$lang['subscription_not_yet_subscribed']                        = 'Le client n\'a pas souscrit à cet abonnement.';
$lang['subscription_is_canceled_no_resume']                     = 'Cet abonnement a été annulé et ne peut être réactivé.';
$lang['subscription_will_be_canceled_at_end_of_billing_period'] = 'Cet abonnement sera annulé à la fin de la période de facturation.';
$lang['customer_successfully_subscribed_to_subscription']       = 'Merci de vous être abonné à %s';
$lang['date_subscribed']                                        = 'Date d\'abonnement';
$lang['reports']                                                = 'Rapports';
$lang['subscriptions_summary']                                  = 'Vue d\'ensemble des abonnements';
$lang['calendar_only_assigned_tasks']                           = 'Afficher uniquement les tâches attribuées au collaborateur connecté';
$lang['invoice_activity_subscription_payment_succeeded']        = 'Paiement de l\'abonnement effectué, courriel envoyé à: %s';
$lang['mail_engine']                                            = 'Moteur de courriel';
$lang['settings_require_client_logged_in_to_view_contract']     = 'Le client doit être connecté pour voir le contrat';
$lang['privacy_policy']                                         = 'Politique de confidentialité';
$lang['gdpr_terms_agree']                                       = 'J\'accèpte les <a href="%s" target="_blank">Termes & Conditions</a>';
$lang['terms_and_conditions_validation']                        = 'Vous devez accepter les Termes & Conditions pour continuer.';
$lang['gdpr']                                                   = 'General Data Protection Regulation (GDPR)';
$lang['data_removal_request_sent']                              = 'Demande de suppression de données envoyée';
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
$lang['allow_staff_view_invoices_assigned']                     = 'Autoriser les collaborateurs à consulter les factures qui leur étaient attribuées';
$lang['allow_staff_view_estimates_assigned']                    = 'Autoriser les collaborateurs à consulter les soumissions qui leur sont attribuées';
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
$lang['date_created']                                           = 'Créé le';

# Version 2.0.1
$lang['company_logo_dark']                                      = 'Logo entreprise sombre';
$lang['customers_register_require_confirmation']                = 'Requiert une confirmation d\'inscription de l\'administrateur après l\'enregistrement du client';
$lang['customer_requires_registration_confirmation']            = 'Requiert une confirmation d\'inscription';
$lang['confirm_registration']                                   = 'Confirmer l\'inscription';
$lang['customer_registration_successfully_confirmed']           = 'Inscription du client confirmée';
$lang['customer_register_account_confirmation_approval_notice'] = 'Merci pour votre inscription, votre compte est en attente de validation et sera bientôt actif.';
$lang['after_subscription_payment_succeeded']                   = 'Après le paiement pour abonnement :';
$lang['subscription_option_send_invoice']                       = 'Envoyer la facture';
$lang['subscription_option_send_payment_receipt']               = 'Envoyer le reçu de paiement';
$lang['subscription_option_send_payment_receipt_and_invoice']   = 'Envoyer la facture et le reçu de paiement';
$lang['subscription_option_do_nothing']                         = 'Ne rien faire';
$lang['gdpr_not_enabled']                                       = 'GDPR désactivé';
$lang['enable_gdpr']                                            = 'Activer GDPR';
$lang['gdpr_right_to_rectification']                            = 'Droit de modification';
$lang['test_sms_config']                                        = 'Tester configuration SMS';
$lang['test_sms_message']                                       = 'Tester message';
$lang['send_test_sms']                                          = 'Envoyer SMS de test';
$lang['gdpr_short']                                             = 'GDPR';
$lang['allow_non_admin_staff_to_delete_ticket_attachments']     = 'Autoriser les collaborateurs hors administrateurs à supprimer les pièces jointes des billets';

# Version 2.1.0
$lang['contract_number']                                = 'Numéro du contrat';
$lang['project_changing_status_recurring_tasks_notice'] = 'Vous avez modifié l\'état en {0}, toutes les tâches récurrentes seront supprimées';
$lang['not_contract_signed']                            = 'Le contrat avec comme objet  %s a été signé par le client';
$lang['the_number_sign']                                = '#';
$lang['not_new_ticket_reply']                           = 'Le client a répondu au billet - %s';
$lang['receive_notification_on_new_ticket_replies']     = 'Recevoir une notification lorsque le client répond au billet';
$lang['receive_notification_on_new_ticket_reply_help']  = 'Tous les membres de l\'équipe en rapport avec le département du billet recevront une notification à chaque réponse du billet';
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
$lang['save_and_record_payment']                                     = 'Enregistrer & saisir le paiement';
$lang['choose_from_google_drive']                                    = 'Choisir depuis Google Picker';
$lang['open_in_google']                                              = 'Ouvrir dans Google';
$lang['google_picker']                                               = 'Google Picker';
$lang['enable_google_picker']                                        = 'Activer Google Picker';
$lang['google_api_client_id']                                        = 'ID client d\'API Google';
$lang['subtract_tax_total_from_amount']                              = 'Soustraire la taxe (%s €) du montant de la dépense.';
$lang['expense_subtract_info_text']                                  = 'Utilisez cette option pour soustraire le montant de la taxe de cette dépense, utile lorsque vous encodez le montant avec TVA.';
$lang['company_exists_info']                                         = 'Il semble qu\'un client avec le nom %s existe déjà, si vous voulez tout de même enregistrer ce client merci d\'ignorer le message.';
$lang['import_items']                                                = 'Importer des produits';
$lang['total_items_deleted']                                         = 'Nombre de produits supprimés: %s';
$lang['billable_amount']                                             = 'Montant facturé';
$lang['last_child_invoice_date']                                     = 'Dernière date de facture';
$lang['good_morning']                                                = 'Excellente matinée';
$lang['good_afternoon']                                              = 'Excellente après-midi';
$lang['good_evening']                                                = 'Excellente soirée';
$lang['description_in_invoice_item']                                 = 'Ajouter une description pour le produit de la facture';
$lang['description_in_invoice_item_help']                            = 'Utile si vous souhaitez inclure des informations supplémentaires sur la facture d\'abonnement, par exemple, ce que comprend cet abonnement.';
$lang['ticket_reminders']                                            = 'Rappels';
$lang['ticket_set_reminder_title']                                   = 'Configurer un rappel pour ce billet';
$lang['calendar_ticket_reminder']                                    = 'Rappels pour les billets';
$lang['email_verification_required']                                 = 'Vérificiation par courriel requise';
$lang['email_verification_required_message']                         = 'Avant d\'accéder à l\'ensemble des fonctionnalités de votre compte, merci de valider votre compte avec les instructions reçues par courriel.';
$lang['email_verification_required_message_mail']                    = 'Nous vous avons envoyé un courriel avec des instructions pour valider votre compte, si vous n\'avez pas reçu ce mail merci de vérifier vos spams ou de cliquer ici <a href="%s">here</a> pour recevoir à nouveau le courriel.';
$lang['email_already_verified']                                      = 'Votre courriel a déjà été vérifié';
$lang['invalid_verification_key']                                    = 'Clé de vérification invalide';
$lang['verification_key_expired']                                    = 'Clé de vérification expirée';
$lang['email_successfully_verified']                                 = 'Votre courriel a été vérifié.';
$lang['email_successfully_verified_but_required_admin_confirmation'] = 'Votre courriel a été vérifié, vous pourrez vous identifier dès qu\'un administrateur aura confirmer manuellement votre compte.';
$lang['email_verification_mail_sent_successully']                    = 'Nous venons de vous envoyer un courriel avec des instructions pour la validation de votre compte';
$lang['create_reminder']                                             = 'Créer un rappel';
$lang['no_reminders_for_this_task']                                  = 'Aucun rappel pour cette tâche';
$lang['reminder_for']                                                = 'Rappel pour %s le %s';
$lang['no_description_provided']                                     = 'Aucune description fournie';
$lang['pay_with_card']                                               = 'Payer avec une carte';
$lang['not_customer_uploaded_file']                                  = 'Nouveau fichier téléversé dans l\'espace client';

# Version 2.2.1
$lang['customer_files_info_message'] = 'Les fichiers des projets et tâches liées au client n\'apparaissent pas dans cette liste';
$lang['ticket_import_reply_only']    = 'Importer uniquement les réponses de ce billet (sans le message cité/transféré)';
$lang['learn_more']                  = 'En savoir plus';
$lang['sales_item']                  = 'Produit';


# Version 2.3.0

$lang['modules']                                 = 'Modules';
$lang['module']                                  = 'Module';
$lang['module_description']                      = 'Description';
$lang['module_activate']                         = 'Activer';
$lang['module_deactivate']                       = 'Désactiver';
$lang['module_uninstall']                        = 'Désinstaller';
$lang['module_upgrade_database']                 = 'Mise à jour de la base de données';
$lang['module_settings']                         = 'Paramètres';
$lang['module_version']                          = 'Version %s';
$lang['module_by']                               = 'par %s';
$lang['staff_which_are_using_role']              = 'Les collaborateurs utilisant ce rôle';
$lang['copy']                                    = 'Dupliquer';
$lang['read_more']                               = 'Lire plus';
$lang['show_less']                               = 'Masquer';
$lang['project_progress_text']                   = 'Avancement du projet';
$lang['timer_not_stopped_yet']                   = 'Ce timer n\'est pas encore arrêté';
$lang['refunds']                                 = 'Remboursements';
$lang['refund']                                  = 'Remboursement';
$lang['refund_amount']                           = 'Montant du remboursement';
$lang['not_refunds_found']                       = 'Aucun remboursement trouvé';
$lang['refunds_applied_cant_delete_credit_note'] = 'Des remboursements sont appliqués sur cette note de crédit, vous devez d\'abord supprimer ces remboursements pour pouvoir supprimer cette note de crédit';

# Version 2.3.2
$lang['create_recurring_from_child_error_message'] = 'Vous ne pouvez pas configurer le document %s comme récurrent car %s dépent déjà d\'un autre document récurrent %s.';
$lang['statement_credit_note_refund']              = 'Remboursement de note de crédit - %s';
$lang['no_validation']                             = 'Aucune validation';
$lang['lead_unique_validation_on']                 = 'Effectuer une validation sur les champs suivants :';
$lang['phonenumber_exists']                        = 'Ce numéro de téléphone existe déjà dans votre système';
$lang['company_exists']                            = 'L\'entreprise existe déjà dans votre système';
$lang['website_exists']                            = 'Ce site web existe déjà dans votre système';
$lang['send_payment_receipt_to_client']            = 'Envoyer la preuve de paiement au client';
$lang['payment_sent_successfully']                 = 'Preuve de paiement envoyée';
$lang['payment_sent_failed']                       = 'Erreur lors de l\'envoie de votre preuve de paiement.';

# Version 2.3.5
$lang['tags_update_replace_warning'] = 'Certaines étiquettes n\'ont pas pu être mises à jour parce qu\'elles existent déjà';
$lang['attach_statement']            = 'Joindre le relevé de compte du client';

# Version 2.4.0
$lang['delete_credit_card']                        = 'Supprimer la carte';
$lang['delete_credit_card_info']                   = 'Vous ne pouvez pas supprimer cette carde de crédit, elle est associée à un abonnement actif .';
$lang['credit_card_successfully_deleted']          = 'La carte de crédit a été supprimée.';
$lang['subscription_incomplete']                   = 'Incomplet';
$lang['subscription_incomplete_expired']           = 'Incomplet expiré';
$lang['credit_card_short']                         = 'Carte';
$lang['webhook_created']                           = 'Le Webhook a été créé.';
$lang['subscriptions_terms_info']                  = 'Saisissez les conditions générales de vente du client qui seront affichées avant la souscription à l\'abonnement.';
$lang['subscription_complete_payment']             = 'Terminé le paiement';
$lang['subscription_is_subscription_is_expired']   = 'Cet abonnement est expiré.';
$lang['subscription_plan_currency_does_not_match'] = 'La devise du plan sélectionné ne correspond pas la devis sélectionnée ci-dessous.';
$lang['subscription_first_billing_date_info']      = 'Laisser vide pour utiliser la date d\'abonnement du client. Ce champ doit contenir une date future. Si vous sélectionnez une date passée et que le client n\'est pas encore abonné, la date d\'abonnement effective sera utilisée.';
$lang['stripe_subscription_select_plan']           = 'Sélectionnez un plan Stripe';

# Version 2.4.1
$lang['contract_content_permission_edit_warning'] = 'Les permissons qui vous sont accordées ne vous permettent pas d\'éditer le contenu de ce contrat. Prenez contact avec un administrateur et demander l\'accès.';
$lang['mark_as_signed']                 = 'Marquer comme signé';
$lang['unmark_as_signed']               = 'Dé-marquer comme signé';
$lang['marked_as_signed']               = 'Marqué comme signé';
$lang['contract_marked_as_signed_info'] = 'Cet contrat a été manuellement marqué comme signé.';
$lang['save_and_send_later']            = 'Enregistrer et envoyer plus tard';
$lang['schedule']                       = 'Planifier';
$lang['schedule_email_for']             = 'Planifier l\'envoi d\'un courriel pour %s';
$lang['schedule_date']                  = 'Quand sounaitez-vous envoyer ce courriel ?';
$lang['email_scheduled_successfully']   = 'Le courriel a été planifié pour envoi';
$lang['invoice_will_be_sent_at']        = 'La facture sera envoyée à %s';

# Version 2.5.0
$lang['recaptcha_ignore_ips']            = 'Adresses IP ignorées';
$lang['recaptcha_ignore_ips_info']       = 'Saisissez les adresses IP, séparées par une virgule, pour lesquelles vous souhaitez ignorer la validation.';
$lang['show_task_reminders_on_calendar'] = 'Rappels de tâches';
$lang['contracts_about_to_expire']       = 'Contrats bientôt en expiration';
$lang['no_contracts_about_to_expire']    = 'Aucun contrat en expiration d\'ici %s jours.';
$lang['lead_value']                      = 'Valeur';
$lang['lead_value_tooltip']              = 'La devise par defaut sera appliquée.';
$lang['leads_dt_lead_value']             = 'Valeur du prospect';
$lang['leads_canban_lead_value']         = 'Valeur du prospect: %s';
$lang['lead_add_edit_lead_value']        = 'Valeur du prospect';

# Version 2.6.0
$lang['gantt_view_day']   = 'Jours';
$lang['gantt_view_week']  = 'Semaines';
$lang['gantt_view_month'] = 'Mois';
$lang['gantt_view_year']  = 'Années';

# Version 2.7.0
$lang['hour_of_day_perform_tasks_reminder_notification_help'] = 'Format 24 heures ex. 9 pour 9am ou 15 pour 3pm. Utilisé pour les tâches récurrentes, rappels de tâches, etc.';
$lang['clients_nav_contacts']                                 = 'Contacts';
$lang['clients_my_contacts']                                  = 'Contacts';
$lang['clients_my_contact']                                   = 'Contact';
$lang['new_contact']                                          = 'Nouveau contact';
$lang['customer_contact']                                     = 'Mes Contacts';
$lang['clients_contact_added']                                = 'Contact ajouté';
$lang['clients_contact_updated']                              = 'Contact mis à jour';
$lang['allow_primary_contact_to_manage_other_contacts']       = 'Autoriser le contact principal à gérer les autres contacts du client';
$lang['contact_form_validation_is_unique']                    = 'Un contact avec cette information : {field}, existe déjà dans notre système';
$lang['invoice_number_not_applied_on_draft']                  = 'Si la facture est enregistrée comme brouillon, le numéro ne sera pas appliqué. Le prochain numéro de facture lui sera donné lorsqu\'elle sera envoyée au client ou marquée comme envoyée.';
$lang['two_factor_authentication_disabed']           = 'Désactiver';
$lang['enable_google_two_factor_authentication']     = 'Activer Google Authenticator';
$lang['set_google_two_factor_authentication_failed'] = 'L\'enregistrement de l\'authentification a échoué. Veuillez essayer de nouveau';
$lang['enter_two_factor_auth_code_from_mobile']      = 'Saisissez le code fourni par votre app d\'authentification';
$lang['staff_two_factor_authentication']             = 'Authentification à deux facteurs';
$lang['google_authentication_code']                  = 'Saisissez le code fourni par votre app d\'authentification';
$lang['set_two_factor_authentication_successful']    = 'Les paramètres de l\'authentification à deux facteurs ont été mis à jour';
$lang['set_two_factor_authentication_failed']        = 'Impossible de mettre à jour le paramètres de l\'authentification à deux facteurs';
$lang['google_2fa_code_valid']                       = 'L\'authentification à deux facteurs a été vérifiée';
$lang['google_2fa_code_invalid']                     = 'Code d\'authentification invalide. Veuillez essayer de nouveau.';
$lang['google_2fa_scan_qr_guide']                    = 'Scannez le code QR ci-dessous à partir de l\'application Google Authenticator sur votre appareil mobile. Ensuite, saisissez ci-dessous le code généré par votre app.';
$lang['google_2fa_manul_input_secret']               = 'Clé secrète pour la saisie manuelle';

# Version 2.7.1
$lang['templates']                                   = 'Modèles';
$lang['add_template']                                = 'Nouveau modèle';
$lang['edit_template']                               = 'Éditer le modèle';
$lang['template_added']                              = 'Modèle ajouté';
$lang['template_updated']                            = 'Modèle mis à jour';
$lang['template_name']                               = 'Titre du modèle';
$lang['template_content']                            = 'Contenu du modèle';
$lang['insert_template']                             = 'Insert';
$lang['items_table_amounts_exclude_currency_symbol'] = 'Exclure le symbole de devise du champ Montant dans la table produits';

$lang['multiplies_of']               = 'Multiplié par';
$lang['round_off_task_timer_option'] = 'Arrondir le minutage des tâches';
$lang['task_timer_dont_round_off']   = 'Ne pas arrondir';
$lang['task_timer_round_up']         = 'Arrondir à la hausse';
$lang['task_timer_round_down']       = 'Arrondir à la baisse';
$lang['task_timer_round_nearest']    = 'Arrondir au plus proche';
$lang['calendar_task_reminder']      = 'Rappel de tâche';
$lang['projects_chart']              = 'Graphique de projets';
$lang['overdue_by_days']             = 'EN SOUFFRANCE DE %s JOURS';

$lang['two_checkout_payment_processing'] = 'Le paiement est en traitement, vous serez informé lorsqu\'il sera complété';
$lang['two_checkout_payment_cancelled']  = 'Paiement annulé';
$lang['two_checkout_merchant_code']      = 'Code marchant';
$lang['two_checkout_secret_Key']         = 'Code secret';
$lang['two_gateway_webhook_notice']      = 'L\'URL de notification IPN pour 2Checkout est ( %s )';
$lang['something_went_wrong']            = 'Il y a eu un problème, Essayer de nouveau';
$lang['imap_folder']                     = 'Dossiers';
$lang['retrieve_folders']                = 'Récupérer les dossiers';
$lang['email_to_ticket_config']          = 'Configuration d\'envoi de courriel vers les billets';

# Version 2.8.0
$lang['enable_support_menu_badges']              = 'Activer le badge de l\'élément de menu de support';
$lang['item_copy_success']                       = 'Produit copié';
$lang['item_copy_fail']                          = 'Échec de la copie du produit';
$lang['attach_invoice_to_payment_receipt_email'] = 'Joindre la facture PDF lors de l\'envoi du reçu de paiement par courriel';

$lang['estimate_request']                                  = 'Demande de soumission';
$lang['estimate_requests']                                 = 'Demandes de soumission';
$lang['estimate_request_form']                             = 'Formulaire de demandes de soumission';
$lang['acs_estimate_request']                              = 'Demande de soumission';
$lang['acs_estimate_request_forms']                        = 'Formulaires';
$lang['estimate_request_forms']                            = 'Formulaires de demandes de soumission';
$lang['estimate_request_notify_staff']                     = 'Membres de l\'équipe à notifier';
$lang['estimate_request_notify_when_submitted']            = 'Notifier lorsqu\'une demande de soumission est envoyée';
$lang['estimate_request_assignee']                         = 'Responsible (Assignee)';
$lang['estimate_request_notify_roles']                     = 'Rôles à notifier';
$lang['custom_field_estimate_request']                     = 'Demande de soumission';
$lang['new_estimate_request_submitted_from_form']          = 'Une nouvelle demande de soumission a été envoyée à partir du formulaire - %s';
$lang['acs_estimate_request_statuses_submenu']             = 'États';
$lang['estimate_request_dt_email']                         = 'Courriel';
$lang['estimate_request_dt_assigned']                      = 'Attribué à';
$lang['estimate_request_dt_status']                        = 'État';
$lang['estimate_request_dt_datecreated']                   = 'Créé le';
$lang['estimate_request_attachments']                      = 'Pièces jointes';
$lang['estimate_request_new_status']                       = 'Nouvel état de soumission';
$lang['estimate_request_status_table_name']                = 'Nom de l\'état';
$lang['estimate_request_table_total']                      = 'Nombre de soumissions : %s';
$lang['estimate_request_statuses_not_found']               = 'Aucun état de demande de soumission trouvé';
$lang['estimate_request_status_add_edit_name']             = 'Nom';
$lang['estimate_request_status_color']                     = 'Couleur';
$lang['estimate_request_status_add_edit_order']            = 'Ordre';
$lang['estimate_request_status']                           = 'État';
$lang['estimate_request_date_added']                       = 'Date de création';
$lang['estmate_request_tags_updated']                      = 'Étiquettes mises à jour';
$lang['not_estimate_request_activity_status_updated']      = '%s a mis à jour l\'état de la demande soumission du %s au %s';
$lang['estimate_request_lowercase']                        = 'demande de soumission';
$lang['estimate_request_form_email_field_is_required']     = 'Le champ Courriel est obligatoire pour ce formulaire';
$lang['estimate_request_form_email_field_set_to_required'] = 'Marquer le champ Courriel comme requis';
$lang['not_delete_estimate_request_default_status']        = 'La suppression du statut de la demande d\'estimation principale est impossible.';
$lang['mark_estimate_request_as']                          = 'Marquer comme %s';
$lang['estimate_request_updated']                          = 'La demande de soumission a été mise à jour';
$lang['convert_estimate_request']                          = 'Convertir la demande de soumission';
$lang['estimate_request_client_firstname']                 = 'Prénom';
$lang['estimate_request_client_lastname']                  = 'Nom';
$lang['estimate_request_email']                            = 'Courriel';
$lang['estimate_request_for_lead']                         = 'Propsect';
$lang['estimate_request_for_customer']                     = 'Client';
$lang['estimate_request_related']                          = 'Associée à';
$lang['estimate_request_client_created_success']           = 'Le client de la demande de soumission a été créé';
$lang['estimate_request_assigned']                         = 'L\'équipe a été attribuée';
$lang['not_estimate_request_activity_assigned_updated']    = 'La demande de soumission est attribuée à %s';
$lang['estimate_request_status_lowercase']                 = 'état de la demande de soumission';
$lang['estimate_request_assigned_to_staff']                = 'La demande de soumission vous a été attribuée';

$lang['activity_due_reminder_is_sent']   = '%s sent invoice becoming due reminder';
$lang['invoice_due_notice_before']       = 'Envoyer un rappel d\'échéance X jours avant la date d\'échéance';
$lang['overdue_notices']                 = 'Avis de retard';
$lang['invoice_overdue_notices_info']    = 'Des avis de retard sont envoyés lorsque la facture est en souffrance.';
$lang['due_reminders']                   = 'Rappels d\'échéance';
$lang['due_reminders_for_invoices_info'] = 'Des rappels d\'échéance sont envoyés pour les factures impayées et partiellement payées afin de rappeler au client de régler la facture avant son échéance.';
$lang['expenses_list_made_payment_by']   = 'Made Payment by %s';

# Version 2.8.2
$lang['hide_task_checklist_items_completed'] = 'Masquer les articles terminés';
$lang['show_task_checklist_items_completed'] = 'Afficher les articles complétés %s';
$lang['task_checklist_assign']               = 'Attribuer un membre de l\'équipe';
$lang['task_checklist_assigned']             = 'Attribuée à %s';

# Version 2.8.2
$lang['custom_field_add_edit_default_value'] = 'Valeur par défaut';

# Version 2.8.3
$lang['projects_send_contact_notification']                   = 'Envoyer des notifications aux contacts';
$lang['project_send_all_contacts_with_notifications_enabled'] = 'À tous les contacts dont les notifications pour les projets sont activées';
$lang['project_do_not_send_contacts_notifications']           = 'Ne pas envoyer de notifications';
$lang['project_send_specific_contacts_with_notification']     = 'Contacts spécifiques';
$lang['project_contacts_to_notify']                           = 'Sélectionner les contacts à notifier';
$lang['contract_signed_by']                                   = 'Signataire';
$lang['contract_signed_date']                                 = 'Date';
$lang['contract_signed_ip']                                   = 'Adresse IP';
$lang['show_estimate_request_in_customers_area']              = 'Afficher le lien de demande de soumission dans la zone client?';
$lang['customers_estimate_request_link_text']                 = 'Demande de soumission';
$lang['total_expenses_deleted']                               = 'Nombre de dépenses supprimées: %s';
$lang['estimate_convert_to_project']                          = 'Convertir en projet';
$lang['estimate_items_convert_to_tasks']                      = 'Les articles qui seront convertis en tâches';

$lang['proposal_signed_by']                        = 'Nom du signataire';
$lang['proposal_signed_date']                      = 'Date de signature';
$lang['proposal_signed_ip']                        = 'Adresse IP';
$lang['hide_milestone_from_customer']              = 'Masquer au client';
$lang['hide_milestone_from_customer_help']         = 'Si vous choisissez de masquer une étape du client, l\'étape entière et ses tâches associées seront également masquées.';
$lang['automatically_stop_task_timer_after_hours'] = 'Arrêt automatique des minuteurs de tâches après (heures)';

# Version 2.9.0
$lang['home_payment_records']                                  = 'Encaissements de paiement';
$lang['weekly']                                                = 'Hebdomadaire';
$lang['monthly']                                               = 'Mensuel';
$lang['failed_to_update_timesheet']                            = 'La feuille de temps n\a pas été mise à jour';
$lang['permission_create_timesheets']                          = 'Créer des feuilles de temps';
$lang['permission_edit_timesheets']                            = 'Modifier des feuilles de temps (global)';
$lang['permission_edit_own_timesheets']                        = 'Modifier ses feuilles de temps (à lui)';
$lang['permission_delete_timesheets']                          = 'Supprimer des feuilles de temps (global)';
$lang['permission_delete_own_timesheets']                      = 'Supprimer ses feuilles de temps (à lui)';
$lang['permission_edit_milestones']                            = 'Modifier des jalons';
$lang['permission_delete_milestones']                          = 'Supprimer des jalons';
$lang['add_timesheet']                                         = 'Ajouter une feuille de temps';
$lang['submit_button_bg_color']                                = 'Couleur de fond du bouton Envoyer';
$lang['submit_button_text_color']                              = 'Couleur du texte du bouton Envoyer';
$lang['automatically_assign_ticket_to_first_staff_responding'] = 'Attribuer automatiquement le billet au premier collaborateur qui publie une réponse?';

# Version 2.9.1
$lang['contract_signed_not_all_fields_editable'] = 'Ce contrat est signé, par conséquent, tous les champs ne peuvent pas être modifiés tant que la signature n\'est pas supprimée.';
$lang['form_submit_success_action']              = 'Quelle action après la soumission de ce formulaire?';
$lang['form_submit_success_display_thank_you']   = 'Afficher un message de remerciement';
$lang['form_submit_success_redirect_to_website'] = 'Rediriger vers un autre site web';
$lang['form_submit_website_url']                 = 'URL du site';
$lang['lead_name_prefix']                        = 'Titre d\'honneur du propsect';
$lang['lead_name_prefix_help']                   = 'Pour chaque nouveau lead créé via le formulaire, le nom du lead sera préfixé par le texte saisi dans le champ dédié, afin de faciliter son identification.';

# Version 2.9.2
$lang['open_google_map']                                  = 'Ouvrir dans Google Map';
$lang['milestone_start_date']                             = 'Date de début';
$lang['send_reminder_for_completed_but_not_billed_tasks'] = 'Envoyer un rappel par courriel pour les tâches facturables terminées mais non facturées.';
$lang['staff_to_notify_completed_but_not_billed_tasks']   = 'Sélectionnez les collaborateurs que vous souhaitez avertir par rappel.';
$lang['reminder_for_completed_but_not_billed_tasks_days'] = 'Séectionnez quels jours de la semaine le rappel doit être envoyé';
$lang['notifications']                                    = 'Notifications';
$lang['merged']                                           = 'Fusionnée';
$lang['ticket_merged_notice']                             = 'Ce billet est fusionné dans le billet ID';
$lang['view_primary_ticket']                              = 'Afficher les billets primaires';
$lang['merge_tickets']                                    = 'Fusionner les billets';
$lang['primary_ticket']                                   = 'Billets primaires';
$lang['primary_ticket_status']                            = 'État du billet primaire';
$lang['tickets_merged']                                   = 'Les billets ont été fusionnés';
$lang['cannot_merge_into_merged_ticket']                  = 'Un billet qui a été fusionné dans un autre billet ne peut pas être utilisé comme un billet primaire';
$lang['merge_ticket_ids_field_label']                     = 'Fusionner les billets nº';
$lang['merge_ticket_ids_field_placeholder']               = 'exemple: 5 ou 5,6';
$lang['cannot_merge_tickets_with_ids']                    = 'Le billet %s est déjà fusionné dans un autre billet';
$lang['ticket_merged_tickets_header']                     = 'Ce billet contient %s billets fusionnés';
$lang['batch_payments_table_invoice_number_heading']      = 'Nº de facture';
$lang['batch_payments_table_payment_date_heading']        = 'Date de paiement';
$lang['batch_payments_table_payment_mode_heading']        = 'Mode de paiement';
$lang['batch_payments_table_transaction_id_heading']      = 'Nº de transaction';
$lang['batch_payments_table_amount_received_heading']     = 'Montant';
$lang['batch_payments_table_invoice_balance_due']         = 'Solde';
$lang['add_batch_payments']                               = 'Nouveau paiement';
$lang['batch_payment_filter_by_customer']                 = 'Filter les factures par client';
$lang['batch_payments']                                   = 'Paiements par lot';
$lang['batch_payment_added_successfully']                 = '%s paiements ajoutés';
$lang['batch_payments_send_invoice_payment_recorded']     = 'Ne pas envoyer d\'accusé de réception de paiement de facture par courriel aux contacts des clients';
$lang['invoice_batch_payments']                           = 'Paiement par lot';
$lang['staff_is_currently_replying']                      = '%s répond en ce moment à ce billet.';

# Version 2.9.4
$lang['permission_view_timesheet_report']                  = 'Voir le rapport des feuilles de temps';
$lang['timesheets_overview_all_members_notice_permission'] = 'L\'aperçu des feuilles de temps de tous les membres de l\'équipe n\'est accessible qu\'au personnel autorisé à consulter les rapports de feuilles de temps et aux administrateurs.';
$lang['show_project_on_proposal']                          = 'Afficher le nom du projet sur la propisition';
$lang['ticket_reports_staff']                              = 'Membre de l\'équipe';
$lang['ticket_reports_total_assigned']                     = 'Nombre de billets attribués';
$lang['ticket_reports_open_tickets']                       = 'Billets ouverts';
$lang['ticket_reports_closed_tickets']                     = 'Billets fermés';
$lang['ticket_reports_replies_to_tickets']                 = 'Réponses aux billets';
$lang['ticket_reports_average_reply_time']                 = 'Délai moyen de réponse';
$lang['home_tickets_report']                               = 'Rapports de billets de l\'équipe';
$lang['ticket_reports_average_reply_time_help']            = 'Délai de réponse moyen aux billets attribués';
$lang['created_by']                                        = 'Créé par';

$lang['staff_related_ticket_notification_to_assignee_only']      = 'Envoyer les notifications de billet relatives à l\'équipe uniquement au responsable du billet.';
$lang['staff_related_ticket_notification_to_assignee_only_help'] = 'Si cette option est activée et que le billet n\'a pas de responsable, une notification sera envoyée à toute l\'équipe du département associé au billet.';
$lang['import_expenses']                                         = 'Importer les dépenses';
$lang['show_pdf_signature_proposal']                             = 'Afficher la signature sur la proposition PDF';
$lang['enable_honeypot_spam_validation']                         = 'Activer la validation Honeypot spam';

# Version 3.0.0
$lang['contracts_view_marked_as_signed'] = 'Marqué comme signé';
$lang['contracts_view_signed']           = 'Signé';
$lang['contracts_view_not_expired']      = 'non expiré';
$lang['contract_information']            = 'Information du contrat';
$lang['receipt']                         = 'Reçu';
$lang['search_proposals']                = 'Rechercher une proposition';
$lang['search_estimates']                = 'Rechercher une soumission';
$lang['quick_create']                    = 'Ajouter une instance';

# Version 3.0.5
$lang['subscription_last_sent']                             = 'Dernier envoi';
$lang['automatically_set_logged_in_staff_sales_agent']      = 'Attribuer automatiquement un collaborateur connecté en tant qu\'agent de vente';
$lang['automatically_set_logged_in_staff_sales_agent_help'] = 'S\'applique pour les factures, soumission, proposition.';
$lang['permission_view_all_templates']                      = 'Voir tous les modèles';
$lang['settings_contract_sign_reminder_every_days_info']    = 'Des rappels de signature sont envoyés aux contacts du client après l\'envoi initial du contrat et s\'arrêtent automatiquement une fois le contrat signé.';
$lang['contract_sign_reminder_every_days']                  = 'Envoyer un rappel de signature chaque X jour';
$lang['contract_sign_reminders']                            = 'Rappel de signature';
$lang['payment_gateway_fee_percentage']                     = 'Frais en pourcentage';
$lang['payment_gateway_fee_fixed']                          = 'Frais fixes';
$lang['payment_attempt_amount']                             = 'Total de facture';
$lang['payment_attempt_fee']                                = 'Frais de paiement';
$lang['features']                                           = 'Fonctionnalités';
$lang['capabilities']                                       = 'Permissions';

# Version 3.1.0
$lang['filter_boolean_yes'] = 'Oui';
$lang['filter_boolean_no'] = 'Non';
$lang['filter_matchtype_and'] = 'et';
$lang['filter_matchtype_or'] = 'ou';
$lang['filter_share'] = 'Partager avec d\'autres membres de l\'équipe?';
$lang['filter_mark_as_default'] = 'Marquer par défaut';
$lang['filter_unmark_as_default'] = 'Dé-marquer par défaut';
$lang['filter_save'] = 'Enregistrer le filtre';
$lang['filter_name'] = 'Nom du filtre';
$lang['filter_apply'] = 'Appliquer';
$lang['filter_apply_and_save'] = 'Appliquer et enregistrer';
$lang['filter_use_dynamic_dates'] = 'Utiliser des dates dynamiques';
$lang['filter_new'] = 'Nouveau filtre';
$lang['filter_clear_active'] = 'Réinitialiser le filtre';
$lang['filter_edit'] = 'Éditer';
$lang['filter_create'] = 'Créer un filtre';
$lang['filter_update'] = 'Mettre à jour le filtre';
$lang['filter_delete'] = 'Supprimer le filtre';
$lang['filter_cannot_be_shared'] = 'Ce filtre ne peut pas être partagé avec d\'autres membres de l\'équipe parce qu\'il contient des règles qui pourraient ne pas être accessibles à tous les utilisateurs.';
$lang['filter_add_rule'] = 'Ajouter une règle';

$lang['filter_operator_is_empty'] = 'est inconnu';
$lang['filter_operator_is_not_empty'] = 'est connu';
$lang['filter_operator_equal'] = 'égal';
$lang['filter_operator_not_equal'] = 'pas égal';
$lang['filter_operator_begins_with'] = 'commence par';
$lang['filter_operator_not_begins_with'] = 'ne commence pas par';
$lang['filter_operator_contains'] = 'contient';
$lang['filter_operator_not_contains'] = 'ne contient pas';
$lang['filter_operator_ends_with'] = 'se termine par';
$lang['filter_operator_not_ends_with'] = 'ne se termine pas par';
$lang['filter_operator_in'] = 'dans';
$lang['filter_operator_not_in'] = 'pas dans';
$lang['filter_operator_between'] = 'entre';
$lang['filter_operator_not_between'] = 'pas entre';
$lang['filter_operator_dynamic'] = 'dynamique';
$lang['filter_operator_greater'] = 'plus grand';
$lang['filter_operator_greater_or_equal'] = 'plus grand ou égal';
$lang['filter_operator_less'] = 'plus petit';
$lang['filter_operator_less_or_equal'] = 'plus petit ou égal';
$lang['no_filters_found'] = 'Aucun filtre enregistré.';

$lang['staff_logged_in_public_ticket_warning'] = 'Vous êtes connecté en tant que membre d\'équipe. Pour répondre au billet en tant que tel, vous devez passer par la zone d\'administration.';

# Version 3.1.2
$lang['allow_non_admin_members_to_delete_tickets_and_replies'] = 'Autoriser les membres de l\'équipe qui ne sont pas administrateurs de supprimer les billets et les réponses';
$lang['default_filter_info'] = 'Le filtre ne sera marqué par défaut que pour votre compte.';
$lang['required_register_fields'] = 'Champs requis pour l\'inscription (zone client)';

# Version 3.1.6
$lang['allow_non_admin_members_to_edit_ticket_messages'] = 'Autoriser les membres de l\'équipe qui ne sont pas administrateurs d\'éditer les messages de billets';
$lang['proposal_auto_convert_to_invoice_on_client_accept'] = 'Convertir automatiquement les propositions en facture après la validation du client (propositions uniquement liées aux clients)';
$lang['invoice_activity_auto_converted_from_proposal']      = 'Facture créée automatiquement à partir de la proposition n° %s';
$lang['clients_proposal_invoiced_successfully'] = 'Merci d\'avoir accepté la proposition. Veuillez vérifier la facture créée suite à la proposition.';


# Version 3.2.0
$lang['ideal_payment_failure_message'] = 'The payment failed or was canceled.';
$lang['ideal_api_publishable_key'] = 'Stripe Publishable Key';
$lang['ideal_api_secret_key'] = 'Stripe API Secret Key';
$lang['filters'] = 'Filters';
$lang['view_financial_stats'] = 'View Financial Stats';
$lang['timesheet_summary'] = 'Timesheet Summary';
$lang['timesheet_detailed_overview'] = 'Detailed Overview of Logged Timesheets and Hours';
$lang['ticket_request_history'] = 'Request History';
$lang['integrations'] = 'Integrations';
$lang['settings_group_other'] = 'Other';
$lang['settings_group_configure_features'] = 'Configure Features';
$lang['disable_ticket_public_url'] = 'Disable Ticket Public URL';

# Version 3.2.1
$lang['ideal_gateway_keys_not_configured'] = 'iDEAL Payment Gateway API not configured.';
$lang['ideal_gateway_cannot_be_activated_keys_not_configured'] = 'iDEAL Payment Gateway cannot be activated as the Stripe Publishable/API key is not configured.';
$lang['company_logo_light'] = 'Company Logo Light';
$lang['welcome_back_sign_in'] = 'Welcome, please sign in to your dashboard';

# Version 3.3.0
$lang['settings_ai'] = 'AI';
$lang['settings_group_ai'] = 'AI Integration';
$lang['settings_ai_general'] = 'General';
$lang['settings_ai_provider'] = 'Provider';
$lang['settings_ai_system_prompt'] = 'System Prompt';
$lang['settings_ai_system_prompt_help'] = 'Provide context about your company and how you handle support tickets to help AI generate better responses.';
$lang['settings_ai_enable_ticket_summarization'] = 'Enable Ticket Summarization';
$lang['settings_ai_enable_ticket_summarization_help'] = 'Enable the AI ticket summary feature to automatically generate a summary of the ticket conversation.';
$lang['settings_ai_enable_ticket_reply_suggestions'] = 'Enable Ticket Reply Suggestion';
$lang['settings_ai_enable_ticket_reply_suggestions_help'] = 'Enable the AI ticket reply suggestion to automatically generate a reply to the customer based on the tickets conversation.';
$lang['ticket_summarization_disabled'] = 'Ticket summarization is disabled';
$lang['ticket_reply_suggestion_disabled'] = 'Ticket reply suggestions is disabled';

$lang['openai_api_key'] = 'OpenAI API Key';
$lang['openai_model'] = 'OpenAI Model';
$lang['openai'] = 'OpenAI';
$lang['ticket_summarize_ai'] = 'Summarize (AI)';
$lang['ticket_suggest_reply'] = 'Suggest Reply (AI)';
$lang['ticket_rephrase_reply'] = 'Rephrase (AI)';
$lang['ai_ticket_summary'] = 'Ticket Summary (AI)';
$lang['openai_max_token'] = 'Max Output Tokens';
$lang['warn_ticket_thread_too_long'] = 'This ticket contains a significant amount of information. Processing such a long ticket may require more input tokens, which could potentially impact the accuracy or efficiency of the response. Would you like to proceed with this request?';
$lang['text_enhancement_make_friendly'] = 'Make more friendly';
$lang['text_enhancement_make_formal'] = 'Make more formal';
$lang['text_enhancement_make_polite'] = 'Make more polite';

$lang['openai_fine_tuning']          = 'OpenAI Fine-Tuning';
$lang['fine_tuning_source_data']     = 'Source Data for Fine-Tuning';
$lang['available_articles']          = 'Available Articles';
$lang['fine_tuning_min_articles']    = 'You need at least 10 knowledge base articles for fine-tuning.';
$lang['start_fine_tuning']           = 'Start Fine-Tuning';
$lang['last_fine_tuning_job']        = 'Last Fine-Tuning Job';
$lang['job_id']                      = 'Job ID';
$lang['status']                      = 'Status';
$lang['fine_tuned_model']            = 'Fine-Tuned Model';
$lang['created_at']                  = 'Created At';
$lang['finished_at']                 = 'Finished At';
$lang['loading_job_status']          = 'Loading job status...';
$lang['refresh_status']              = 'Refresh Status';
$lang['fine_tuned_models']           = 'Fine-Tuned Models';
$lang['enable_fine_tuning']          = 'Enable Fine-Tuning';
$lang['no_fine_tuned_models']        = 'No fine-tuned models available yet.';
$lang['model_id']                    = 'Model ID';
$lang['owned_by']                    = 'Owned By';
$lang['options']                     = 'Options';
$lang['active']                      = 'Active';
$lang['set_as_active']               = 'Set as Active';
$lang['processing']                  = 'Processing...';
$lang['error_processing_request']    = 'Error processing request';
$lang['fine_tuning_completed']       = 'Fine-tuning completed successfully!';
$lang['fine_tuning_enabled']         = 'Fine-tuning has been enabled';
$lang['fine_tuning_disabled']        = 'Fine-tuning has been disabled';
$lang['fine_tuned_model_set']        = 'Fine-tuned model has been set as active';
$lang['confirm_delete_fine_tuned_model'] = 'Are you sure you want to delete this fine-tuned model? This action cannot be undone.';
$lang['fine_tuned_model_deleted']    = 'Fine-tuned model has been deleted';
$lang['fine_tuned_model_delete_failed'] = 'Failed to delete fine-tuned model';
$lang['fine_tuning_base_model']      = 'Fine-Tuning Base Model';
$lang['fine_tuning_base_model_description'] = 'This is the base model that will be used for fine-tuning. Different models have different capabilities and price points.';
$lang['advanced_features']           = 'Advanced Features';
$lang['openai_fine_tuning_description'] = 'Fine-tune OpenAI models with your knowledge base and predefined replies content for more accurate responses.';
$lang['retrain_model']               = 'Re-Train Model';
$lang['retrain_model_description']   = 'Create a new fine-tuned model with the latest content. Previous fine-tuned models will be deleted.';
$lang['model_is_recommended'] = 'Recommended';

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