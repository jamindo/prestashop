<?php
#####################################################################################################
#
#					Module pour la plateforme de paiement PayZen
#						Version : 1.1 (révision 50362)
#									########################
#					Développé pour Prestashop
#						Version : 1.5.0.x
#						Compatibilité plateforme : V2
#									########################
#					Développé par Lyra Network
#						http://www.lyra-network.com/
#						19/08/2013
#						Contact : support@payzen.eu
#
#####################################################################################################

/*
* NOTICE OF LICENSE
*
* This source file is Licensed under the Open Software License version 3.0
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/osl-3.0.php
**/

global $_MODULE;
$_MODULE = array();
$_MODULE['<{payzen}prestashop>payzen_2588246e9b8bb55cd587ed5595d3a7e2'] = 'Accepter les paiements par carte de crédit avec %s';
$_MODULE['<{payzen}prestashop>payzen_53c0eed255c798ec8fc9299e17f01317'] = 'Etes-vous sûr de bien vouloir supprimer les détails de votre module ?';
$_MODULE['<{payzen}prestashop>payzen_5f9db01eec5f59e760f35b72f5c5babb'] = 'Valeur invalide pour le champ \"%s\". Veuillez vérifier l\'élément \"%s\" de l\'option \"%s\".';
$_MODULE['<{payzen}prestashop>payzen_e3135e5c28bd4c70a9bb3c50b0d278aa'] = 'Options de paiement';
$_MODULE['<{payzen}prestashop>payzen_b021df6aac4654c454f46c77646e745f'] = 'Libellé';
$_MODULE['<{payzen}prestashop>payzen_e93f994f01c537c4e2f7d8528c3eb5e9'] = 'Nombre';
$_MODULE['<{payzen}prestashop>payzen_1901606ea069a83dc7beea17881ef95a'] = 'Période';
$_MODULE['<{payzen}prestashop>payzen_5e6fab97b55b59a90290d851fb5fe929'] = '1er paiement';
$_MODULE['<{payzen}prestashop>payzen_f618ce35a0399be633340c425d043ef3'] = 'Valeur invalide pour le champ \"%s\".';
$_MODULE['<{payzen}prestashop>payzen_e1e6894c329cb50de0b90f2c924427d6'] = 'Un problème est survenu lors de l\'enregistrement du champs %s.';
$_MODULE['<{payzen}prestashop>payzen_f38f5974cdc23279ffe6d203641a8bdf'] = 'Configuration mise à jour.';
$_MODULE['<{payzen}prestashop>payzen_08ff2afa71f71a2e6af4ae200fbc5535'] = 'Payer par carte bancaire';
$_MODULE['<{payzen}prestashop>payzen_4c8cb92701efb77731eed291deb2247e'] = 'Payez par carte bancaire en plusieurs fois';
$_MODULE['<{payzen}prestashop>payzen_687ae6ebf50a06125319516eee9f5fdb'] = 'Votre paiement n\'a pas été accepté. Veuillez repasser votre commande.';
$_MODULE['<{payzen}prestashop>payzen_47455c84bf128378bd9df621bf778863'] = 'Paiement en une fois';
$_MODULE['<{payzen}prestashop>payzen_300a190e2736bef69d215826b260acfc'] = 'Paiement en %s fois';
$_MODULE['<{payzen}prestashop>payzen_13aa1c47157818ce4d54f337a17084af'] = 'Authentification 3DS : ';
$_MODULE['<{payzen}prestashop>payzen_7469a286259799e5b37e5db9296f00b3'] = 'OUI';
$_MODULE['<{payzen}prestashop>payzen_68a065494f1612ae29b1cde04c936339'] = 'Certificat 3DS : ';
$_MODULE['<{payzen}prestashop>payzen_c2f3f489a00553e7a01d369c103c7251'] = 'NON';
$_MODULE['<{payzen}prestashop>admin_display_004a093d1ab4ca81b4024639b4b2427a'] = 'Développé par';
$_MODULE['<{payzen}prestashop>admin_display_01ed8a4015b45aa03653c53de46e37ee'] = 'Courriel de contact';
$_MODULE['<{payzen}prestashop>admin_display_b1c1d84a65180d5912b2dee38a48d6b5'] = 'Version du module';
$_MODULE['<{payzen}prestashop>admin_display_666809109472d77b71fc9930436c7ff1'] = 'Version de la plateforme';
$_MODULE['<{payzen}prestashop>admin_display_66b5f3034a6f89c316df97eab1ec5663'] = 'Testé avec prestashop';
$_MODULE['<{payzen}prestashop>admin_display_dd98664034d01e01eba03dd5653f9cc3'] = 'CLIQUER ICI POUR ACCÉDER À LA DOCUMENTATION DE CONFIGURATION DU MODULE';
$_MODULE['<{payzen}prestashop>admin_display_dfef29864f6f6dcd9dd673f3343221de'] = 'ACCÈS À LA PLATEFORME';
$_MODULE['<{payzen}prestashop>admin_display_eff08814984e50d7991932fe8bf15991'] = 'Identifiant de votre site';
$_MODULE['<{payzen}prestashop>admin_display_049701ca27fd91a0370ff4c41a5dd3f1'] = 'L\'identifiant de votre site, disponible dans l\'outil de gestion de caisse';
$_MODULE['<{payzen}prestashop>admin_display_5abbd73fc5189212c57adfb43adac459'] = 'Certificat en mode test';
$_MODULE['<{payzen}prestashop>admin_display_51cc994ce3933ec14767f203e5fd6510'] = 'Certificat fourni par la plateforme de paiement';
$_MODULE['<{payzen}prestashop>admin_display_8d79d82e7b1b6174ac9a55a760d64edc'] = 'Certificat en mode production';
$_MODULE['<{payzen}prestashop>admin_display_033bd94b1168d7e4f0d644c3c95e35bf'] = 'TEST';
$_MODULE['<{payzen}prestashop>admin_display_86601675138015edb458866e7d879118'] = 'PRODUCTION';
$_MODULE['<{payzen}prestashop>admin_display_650be61892bf690026089544abbd9d26'] = 'Mode';
$_MODULE['<{payzen}prestashop>admin_display_ec56a33e1d251a9f08a7a996feadf4fa'] = 'Mode test ou production';
$_MODULE['<{payzen}prestashop>admin_display_21dbac9461f8ec4ca19d3fe3907a1776'] = 'URL de la plateforme';
$_MODULE['<{payzen}prestashop>admin_display_4d3fe987b854c00669876f09e814dda8'] = 'Le client sera redirigé à cette adresse pour payer';
$_MODULE['<{payzen}prestashop>admin_display_178ab52ae45ca10afab67d9f2a91c70c'] = 'PAGE DE PAIEMENT';
$_MODULE['<{payzen}prestashop>admin_display_c96a77fb323a41898c3b6941a58dc741'] = 'Langue par défaut';
$_MODULE['<{payzen}prestashop>admin_display_e27b4ff6694b9ba58627fee38486a7f6'] = 'Langue par défaut de la page de paiement';
$_MODULE['<{payzen}prestashop>admin_display_86bc3115eb4e9873ac96904a4a68e19e'] = 'Allemand';
$_MODULE['<{payzen}prestashop>admin_display_78463a384a5aa4fad5fa73e2f506ecfc'] = 'Anglais';
$_MODULE['<{payzen}prestashop>admin_display_cb5480c32e71778852b08ae1e8712775'] = 'Espagnol';
$_MODULE['<{payzen}prestashop>admin_display_ad225f707802ba118c22987186dd38e8'] = 'Français';
$_MODULE['<{payzen}prestashop>admin_display_4be8e06d27bca7e1828f2fa9a49ca985'] = 'Italien';
$_MODULE['<{payzen}prestashop>admin_display_f32ced6a9ba164c4b3c047fd1d7c882e'] = 'Japonais';
$_MODULE['<{payzen}prestashop>admin_display_3b261136e3c33f35e0a58611b1f344cb'] = 'Chinois';
$_MODULE['<{payzen}prestashop>admin_display_30e32c7c4cf434e9c75e60c14c442541'] = 'Portugais';
$_MODULE['<{payzen}prestashop>admin_display_41171a0fcd362ce98b5f0f11398713b6'] = 'Suédois';
$_MODULE['<{payzen}prestashop>admin_display_68bf367e228f45ba83cb8831a5ee6447'] = 'Néerlandais';
$_MODULE['<{payzen}prestashop>admin_display_4e1b0d5f96251571c00165c066b7c550'] = 'Langues disponibles';
$_MODULE['<{payzen}prestashop>admin_display_8f497c1a3d15af9e0c215019f26b887d'] = 'Délai';
$_MODULE['<{payzen}prestashop>admin_display_123fc485e1ced719eed781646ffe2650'] = 'Délai avant remise en banque (en jours)';
$_MODULE['<{payzen}prestashop>admin_display_7a1920d61156abc05a60135aefe8bc67'] = 'Configuration outil de gestion de caisse';
$_MODULE['<{payzen}prestashop>admin_display_086247a9b57fde6eefee2a0c4752242d'] = 'Automatique';
$_MODULE['<{payzen}prestashop>admin_display_e1ba155a9f2e8c3be94020eef32a0301'] = 'Manuelle';
$_MODULE['<{payzen}prestashop>admin_display_31c46d040ddbf15207ebd7b78af8c45d'] = 'Validation du paiement';
$_MODULE['<{payzen}prestashop>admin_display_f567c8fc35869581ef8f47eb37154bb1'] = 'En mode manuel, vous devrez confirmer les paiements dans l\'outil de gestion de caisse';
$_MODULE['<{payzen}prestashop>admin_display_b0c3cae935975999a5f8ca3062969346'] = 'Cartes disponibles';
$_MODULE['<{payzen}prestashop>admin_display_41864fd226b67a722fed1ec2ac72bdcf'] = 'Ne rien sélectionner pour utiliser la configuration de la plateforme.';
$_MODULE['<{payzen}prestashop>admin_display_9fe0bf30d35545b0688448c029e77fc2'] = 'PERSONNALISATION DE LA PAGE DE PAIEMENT';
$_MODULE['<{payzen}prestashop>admin_display_e140e06995cf99c43970ef378e12b029'] = 'Configuration du thème';
$_MODULE['<{payzen}prestashop>admin_display_5d27e396e9687029d9c9b13c08c79343'] = 'Configuration du thème pour personnaliser la page de paiement (logo, css).';
$_MODULE['<{payzen}prestashop>admin_display_e93c33bd1341ab74195430daeb63db13'] = 'Nom de la boutique';
$_MODULE['<{payzen}prestashop>admin_display_92e5b9360dff0d8fa8a7762359257fe7'] = 'Nom affiché sur la page de paiement. Laisser vide pour utiliser la configuration de la plateforme.';
$_MODULE['<{payzen}prestashop>admin_display_37d00f4554dc3c0baeb34a9c22d787d9'] = 'URL de la boutique';
$_MODULE['<{payzen}prestashop>admin_display_21235deb899b707b33cf99f6e8c810dc'] = 'URL affichée sur la page de paiement. Laisser vide pour utiliser la configuration de la plateforme.';
$_MODULE['<{payzen}prestashop>admin_display_bf261894e1e1e3e798d4b636696e6662'] = '3DS SÉLECTIF';
$_MODULE['<{payzen}prestashop>admin_display_920e5afd43a2aefa56e7b336fe49c5d4'] = 'Montant minimum pour lequel activer 3DS';
$_MODULE['<{payzen}prestashop>admin_display_287a68c7c23d0621f2124694f595c64a'] = 'Nécessite la souscription à l’option 3-D Secure sélectif.';
$_MODULE['<{payzen}prestashop>admin_display_8e0b19a82842dddd5b4bbf435017d611'] = 'RETOUR À LA BOUTIQUE';
$_MODULE['<{payzen}prestashop>admin_display_b9f5c797ebbf55adccdd8539a65a0241'] = 'Désactivé';
$_MODULE['<{payzen}prestashop>admin_display_00d23a76e43b46dae9ec7aa9dcbebb32'] = 'Activé';
$_MODULE['<{payzen}prestashop>admin_display_aadb7680e9cf237017cd8b67f6c73260'] = 'Redirection automatique';
$_MODULE['<{payzen}prestashop>admin_display_2051113e1d11164763db9463db4f3f78'] = 'Rediriger le client vers la boutique à la fin du processus de paiement';
$_MODULE['<{payzen}prestashop>admin_display_e5e1991ad7aaf9fe6464c969920f097a'] = 'Délai en cas de succès';
$_MODULE['<{payzen}prestashop>admin_display_46ac211030d7d389966175ae9fd711f4'] = 'Temps en secondes avant que le client soit redirigé vers la boutique après un paiement réussi';
$_MODULE['<{payzen}prestashop>admin_display_eb348dd0d56400bd18e7c9e8d25cc666'] = 'Message avant redirection en cas de succès';
$_MODULE['<{payzen}prestashop>admin_display_c739fa67a340c76b8bac9281b456ca3e'] = 'Message affiché au client avant qu\'il soit redirigé vers la boutique après un paiement réussi';
$_MODULE['<{payzen}prestashop>admin_display_927bb2451d920fdba0ab0823fa7bae6d'] = 'Délai en cas d\'échec';
$_MODULE['<{payzen}prestashop>admin_display_78d4bee1d6875f229d4e4320a6abf10e'] = 'Temps en secondes avant que le client soit redirigé vers la boutique après l\'échec du paiement';
$_MODULE['<{payzen}prestashop>admin_display_00b7bcd80d9c9f19186b0c729f6085c4'] = 'Message avant redirection en cas d\'échec';
$_MODULE['<{payzen}prestashop>admin_display_a4e63e0b942643e02daa5d2d3df9a814'] = 'Message affiché au client avant qu\'il soit redirigé vers la boutique après l\'échec du paiement';
$_MODULE['<{payzen}prestashop>admin_display_a310223d5085f1c22218a24bc33b4e5d'] = 'GET (paramètres dans l\'URL)';
$_MODULE['<{payzen}prestashop>admin_display_13b89b1404ec947deeb347c8e3901f9b'] = 'POST (formulaire)';
$_MODULE['<{payzen}prestashop>admin_display_5c6a16d0f0782adac84a09b281878e84'] = 'Mode de retour';
$_MODULE['<{payzen}prestashop>admin_display_369a63dd2214318d4b7107a0b74cc81f'] = 'Façon dont le client transmettra le résultat du paiement lors de son retour sur la boutique';
$_MODULE['<{payzen}prestashop>admin_display_4dcaea1b2d8f025a39f1dec679a6186e'] = 'Retourner au choix du moyen de paiement';
$_MODULE['<{payzen}prestashop>admin_display_4d48c7d2809edea0b654f236d9695943'] = 'Enregistrer la commande échouée et retourner à l\'historique';
$_MODULE['<{payzen}prestashop>admin_display_0922629c59c5f69e205a4c831f819794'] = 'Gestion des paiements échoués';
$_MODULE['<{payzen}prestashop>admin_display_2ec6d9d74ab7d1ef252b9c514c1f0ec8'] = 'Comment traiter le retour du client après que le paiement ait échoué';
$_MODULE['<{payzen}prestashop>admin_display_50aeba62672dfa15fed779c0248653cb'] = 'Paramètres GET additionnels';
$_MODULE['<{payzen}prestashop>admin_display_c6c2cd91778ce3c566b06c1632ccde1e'] = 'Paramètres supplémentaires envoyés au retour en mode GET';
$_MODULE['<{payzen}prestashop>admin_display_9fe7d4433879f84a21f1a9b47c792550'] = 'Paramètres POST additionnels';
$_MODULE['<{payzen}prestashop>admin_display_1a01ef92951bf4fcc5cc02ec502e3e0d'] = 'Paramètres supplémentaires envoyés au retour en mode POST';
$_MODULE['<{payzen}prestashop>admin_display_d735e44539f64ded159789010b4931b2'] = 'URL serveur à copier dans l\'outil de gestion de caisse';
$_MODULE['<{payzen}prestashop>admin_display_2fd4e85b11e37000abf1da1b8a0a1733'] = 'Paramètres d\'URL';
$_MODULE['<{payzen}prestashop>admin_display_e0872477664fd58da4b5fe1c2aa6a453'] = 'Sélectionner une boutique pour afficher l\'URL serveur';
$_MODULE['<{payzen}prestashop>admin_display_9d6b881a4d17ea44c0f9786f6a5e9c7f'] = 'OPTIONS DU MODULE';
$_MODULE['<{payzen}prestashop>admin_display_f634a4ce61dbccff9374360fd995aaed'] = 'Titre de la méthode';
$_MODULE['<{payzen}prestashop>admin_display_16a00c2b3807b01ce5730590198ff5db'] = 'Titre de la méthode à afficher sur la page des moyens de paiement.';
$_MODULE['<{payzen}prestashop>admin_display_a9a62e70841c4d06dd16306a85700d36'] = 'Activation';
$_MODULE['<{payzen}prestashop>admin_display_6816faa7d62a7c62b89c203b7317b08d'] = 'Sélectionner pour activer le paiement standard.';
$_MODULE['<{payzen}prestashop>admin_display_bf050a33e991ac51cda468deccbb0692'] = 'RESTRICTIONS SUR LE MONTANT';
$_MODULE['<{payzen}prestashop>admin_display_9f6e99bdd4184b83dc478d0ab1b4cbf7'] = 'Montant minimum';
$_MODULE['<{payzen}prestashop>admin_display_fc1bc2d581a104d6e77e51cf38811b63'] = 'Montant minimum pour lequel cette méthode de paiement est disponible';
$_MODULE['<{payzen}prestashop>admin_display_dcd700acd4c6727dca97f5b414cfb384'] = 'Montant maximum';
$_MODULE['<{payzen}prestashop>admin_display_7b594176bb47ad19739bc60a8d5f969b'] = 'Montant maximum pour lequel cette méthode de paiement est disponible';
$_MODULE['<{payzen}prestashop>admin_display_8e59fcba6a5225abb4717cd0a017dae5'] = 'ENTRÉE DES DONNÉES DE CARTE';
$_MODULE['<{payzen}prestashop>admin_display_861cde4a15ea3a39126fbfb3571326fd'] = 'Acquisition des données sur la plateforme de paiement';
$_MODULE['<{payzen}prestashop>admin_display_e055e426fa40b587d4b3e238f33a6e38'] = 'Sélection du type de carte sur le site marchand';
$_MODULE['<{payzen}prestashop>admin_display_30728a5a5aa3054af1db3fc6407bf20e'] = 'Acquisition des données sur le site marchand';
$_MODULE['<{payzen}prestashop>admin_display_c239a367447ad7b1ae922a8e017f033d'] = 'Mode de saisie des données de la carte';
$_MODULE['<{payzen}prestashop>admin_display_4bb7fc1c6f2c9cb09369c8e1892b5024'] = 'Sélectionner la manière dont seront saisies les données de la carte de crédit. Attention, pour utiliser l\'acquisition des données sur le site marchand, vous devez vous assurer d\'avoir souscrit à cette option auprès de votre banque.';
$_MODULE['<{payzen}prestashop>admin_display_4423e7890e7296a9f535ce199d4d015e'] = 'sélectionner pour activer le paiement multiple';
$_MODULE['<{payzen}prestashop>admin_display_ce4d7de3b7a9c4d597d882898a14dcc5'] = 'OPTIONS DU PAIEMENT MULTIPLE';
$_MODULE['<{payzen}prestashop>admin_display_e3135e5c28bd4c70a9bb3c50b0d278aa'] = 'Options de paiement';
$_MODULE['<{payzen}prestashop>admin_display_ec211f7c20af43e742bf2570c3cb84f9'] = 'Ajouter';
$_MODULE['<{payzen}prestashop>admin_display_f2a6c498fb90ee345d997f888fce3b18'] = 'Supprimer';
$_MODULE['<{payzen}prestashop>admin_display_b021df6aac4654c454f46c77646e745f'] = 'Libellé';
$_MODULE['<{payzen}prestashop>admin_display_80a2645c681d607705f5baab7cf7d2cb'] = 'Montant min';
$_MODULE['<{payzen}prestashop>admin_display_7d48ddaff550ef9e47ed788f50d860e7'] = 'Montant max';
$_MODULE['<{payzen}prestashop>admin_display_f49498143b94e78415d06029763412b9'] = 'Contrat';
$_MODULE['<{payzen}prestashop>admin_display_b2ee912b91d69b435159c7c3f6df7f5f'] = 'Nombre';
$_MODULE['<{payzen}prestashop>admin_display_1901606ea069a83dc7beea17881ef95a'] = 'Période';
$_MODULE['<{payzen}prestashop>admin_display_5e6fab97b55b59a90290d851fb5fe929'] = '1er paiement';
$_MODULE['<{payzen}prestashop>admin_display_cb570b26640014f78c01d8d3ae3779fd'] = 'Cliquer sur le bouton Ajouter pour configurer une ou plusieurs options de paiement. <br /><b>Libellé : </b>Texte décrivant l\'option de paiement multiple. <br /><b>Montant mini : </b>Montant minimum pour proposer l\'option. <br /><b>Montant maxi : </b>Montant maximum pour proposer l\'option. <br /><b>Contrat : </b>ID du contrat à utiliser avec l\'option (Laissez vide de préférence). <br /><b>Nombre : </b>Nombre total d\'échéances. <br /><b>Période : </b>Délai entre deux échéances (en jours). <br /><b>1er paiement : </b>Montant de la première échéance en pourcentage du total. Si vide, toutes les échéances auront le même montant.<br /><b>N’oubliez pas de cliquer sur le bouton "Enregistrer" afin de sauvegarder vos modifications.</b>';
$_MODULE['<{payzen}prestashop>back_office_4a9cc7ddfd6e169a1b434d6839d91a7e'] = 'CONFIGURATION GENERALE';
$_MODULE['<{payzen}prestashop>back_office_7c579486ce2345a95aec18c4eb2584a9'] = 'PAIEMENT EN UNE FOIS';
$_MODULE['<{payzen}prestashop>back_office_a51ca50af2761900a8835ca9eef9e94e'] = 'PAIEMENT EN PLUSIEURS FOIS';
$_MODULE['<{payzen}prestashop>back_office_c9cc8cce247e49bae79f15173ce97354'] = 'Enregistrer';
$_MODULE['<{payzen}prestashop>redirect_f1c1725dc182726512227aef9ee210c7'] = 'Paiement en cours';
$_MODULE['<{payzen}prestashop>redirect_31682b69de73c081c487b0cb5002549d'] = 'Redirection vers la plateforme de paiement';
$_MODULE['<{payzen}prestashop>redirect_879f6b8877752685a966564d072f498f'] = 'Votre panier est vide.';
$_MODULE['<{payzen}prestashop>redirect_e555610477d1aa7807d93f28ba80141e'] = 'Paiement par carte bancaire';
$_MODULE['<{payzen}prestashop>redirect_67e5af82e0dca6b20203d71fd681814a'] = 'Veuillez patienter SVP. Le paiement de votre commande est en cours.';
$_MODULE['<{payzen}prestashop>redirect_ff1b91552dca022519140532b2b2ab82'] = 'Merci de patienter, vous allez êtes redirigé vers la plateforme de paiement.';
$_MODULE['<{payzen}prestashop>redirect_255a72c22960b12c1fab325d80e0dd56'] = 'Si rien ne se passe dans 10 secondes, cliquez sur le bouton ci-dessous.';
$_MODULE['<{payzen}prestashop>redirect_99938b17c91170dfb0c2f3f8bc9f2a85'] = 'Payer';
$_MODULE['<{payzen}prestashop>payment_b1bdf76454f7e864d239b0c71ee97815'] = 'Cliquer ici pour payer par carte bancaire';
$_MODULE['<{payzen}prestashop>payment_08ff2afa71f71a2e6af4ae200fbc5535'] = 'Payer par carte bancaire';
$_MODULE['<{payzen}prestashop>payment_a44217022190f5734b2f72ba1e4f8a79'] = 'Numéro de carte';
$_MODULE['<{payzen}prestashop>payment_60a104dc50579d60cbc90158fada1dcf'] = 'CVV';
$_MODULE['<{payzen}prestashop>payment_8c1279db4db86553e4b9682f78cf500e'] = 'Date d\'expiration';
$_MODULE['<{payzen}prestashop>payment_7cbb885aa1164b390a0bc050a64e1812'] = 'Mois';
$_MODULE['<{payzen}prestashop>payment_537c66b24ef5c83b7382cdc3f34885f2'] = 'Année';
$_MODULE['<{payzen}prestashop>payment_8bd4837a76cf443ab523a51895e23c36'] = 'Payez maintenant';
$_MODULE['<{payzen}prestashop>payment_83d5bde27d70cc43a50b9d97444436f5'] = 'Payez par carte bancaire en plusieurs fois';
$_MODULE['<{payzen}prestashop>payment_return_57af30885f207b9443856c49d5bb2162'] = 'La boutique est en mode maintenance. La validation automatique ne peut fonctionner.';
$_MODULE['<{payzen}prestashop>payment_return_cec014e29ebcbc5c5809907d4f1eeb5c'] = 'La validation automatique n\'a pas fonctionné. Avez-vous configuré correctement l\'URL serveur dans l\'outil de gestion de caisse de votre boutique ?';
$_MODULE['<{payzen}prestashop>payment_return_23e519f59208456254d9fb538d4e7abf'] = 'Afin de comprendre la problématique, reportez vous à la documentation du module : <br />&nbsp;&nbsp;&nbsp;- Chapitre &laquo;A lire attentivement avant d\'aller loin&raquo;<br />&nbsp;&nbsp;&nbsp;- Chapitre &laquo;Paramétrage de l\'URL serveur&raquo;';
$_MODULE['<{payzen}prestashop>payment_return_18c51ad1b1fe562479120ab35f890fc9'] = 'Si vous pensez qu\'il s\'agit d\'une erreur, vous pouvez contacter notre';
$_MODULE['<{payzen}prestashop>payment_return_64430ad2835be8ad60c59e7d44e4b0b1'] = 'service client';
$_MODULE['<{payzen}prestashop>payment_return_47e816a4f731d565fd5b32d458cc3d78'] = '<u><b>PASSER EN PRODUCTION</b></u><br />Vous souhaitez savoir comment passer votre boutique en production merci de consulter cette URL : ';
$_MODULE['<{payzen}prestashop>payment_return_de24df15226a5139eb60c3b24c1efbd6'] = 'Votre commande a été enregistrée avec une erreur de paiement.';
$_MODULE['<{payzen}prestashop>payment_return_3fee1227f1b7e441476ccb45278a5f22'] = 'Nous vous invitons à contacter notre';
$_MODULE['<{payzen}prestashop>payment_return_2e2117b7c81aa9ea6931641ea2c6499f'] = 'Votre commande sur';
$_MODULE['<{payzen}prestashop>payment_return_75fbf512d744977d62599cc3f0ae2bb4'] = 'est terminée.';
$_MODULE['<{payzen}prestashop>payment_return_ee9d464a5f04b1c5f548d1655691ce82'] = 'Nous avons enregistré votre paiement de';
$_MODULE['<{payzen}prestashop>payment_return_0db71da7150c27142eef9d22b843b4a9'] = 'Pour toute question ou information complémentaire, veuillez contacter notre';
$_MODULE['<{payzen}prestashop>unknown_currency_fd817c793427fb36bcffd5e3cb0dd5dc'] = 'Méthode de paiement indisponible pour la devise :';