<?php

return [
    "login" => [
        "username_or_email" => "Username o Email",
        "forgot_password_link" => "Password dimenticata?",
        "create_an_account" => "crea un account",
    ],
    "password_confirm" => [
        "heading" => "Conferma password",
        "description" => "Conferma la tua password per completare questa azione.",
        "current_password" => "Password attuale"
    ],
    "two_factor" => [
        "heading" => "Autenticazione a due fattori",
        "description" => "Conferma l'accesso al tuo account inserendo il codice che trovi sulla tua app di autenticazione.",
        "code_placeholder" => "XXX-XXX",
        "recovery" => [
            "heading" => "Autenticazione a due fattori",
            "description" => "Conferma l'accesso al tuo account inserendo uno dei tuoi codice di emergenza.",
        ],
        "recovery_code_placeholder" => "abcdef-98765",
        "recovery_code_text" => "Dispositivo smarrito?",
        "recovery_code_link" => "Usa un codice di ripristino",
        "back_to_login_link" => "Torna al login"
    ],
    "registration" => [
        "title" => "Registrazione",
        "heading" => "Crea un nuovo account",
        "submit" => [
            "label" => "Registrazione",
        ],
        "notification_unique" => "Un account con questa email è già esistente. Prova ad accedere.",
    ],
    "reset_password" => [
        "title" => "Password dimenticata",
        "heading" => "Ripristina la tua password",
        "submit" => [
            "label" => "Procedi",
        ],
        "notification_error" => "Errore nel ripristino della password. Effettua di nuovo il ripristino.",
        "notification_error_link_text" => "Prova di nuovo",
        "notification_success" => "Controlla la tua casella di posta per ulteriori istruzioni!",
    ],
    "verification" => [
        "title" => "Verifica email",
        "heading" => "Necessaria verifica dell'indirizzo Email",
        "submit" => [
            "label" => "Log out",
        ],
        "notification_success" => "Controlla la tua casella di posta per ulteriori istruzioni!",
        "notification_resend" => "È stata inviata una email di verifica.",
        "before_proceeding" => "Prima di procedere, controlla la tua casella di posta per verificare la tua email.",
        "not_receive" => "Se non hai ricevuto l'email di verifica,",
        "request_another" => "clicca qui per richiederla di nuovo",
    ],
    "profile" => [
        "account" => "Account",
        "profile" => "Profilo",
        "my_profile" => "Il mio profilo",
        "personal_info" => [
            "heading" => "Informazioni personali",
            "subheading" => "Gestisci le tue informazioni personali.",
            "submit" => [
                "label" => "Aggiorna",
            ],
            "notify" => "Profilo aggiornato correttamente!",
        ],
        "password" => [
            "heading" => "Password",
            "subheading" => "Sono necessari almeno 8 caratteri.",
            "submit" => [
                "label" => "Aggiorna",
            ],
            "notify" => "Password aggiornata correttamente!",
        ],
        "2fa" => [
            "title" => "Autenticazione a due Fattori",
            "description" => "Gestisci l'autenticazione a due fattori per il tuo account (raccomandato).",
            "actions" => [
                "enable" => "Abilita",
                "regenerate_codes"=>"Rigenera Codici",
                "disable"=>"Disabilita",
                "confirm_finish" => "Conferma & procedi",
                "cancel_setup" => "Annulla il setup"
            ],
            "setup_key" => "Setup della chiave",
            "not_enabled" => [
                "title" => "Non hai abilitato l'autenticazione a due fattori.",
                "description" => "When two factor authentication is enabled, you will be prompted for a secure, random token during authentication. You may retrieve this token from your phone's Google Authenticator application."
            ],
            "finish_enabling" => [
                "title" => "Finisci di abilitare l'autenticazione a due fattori.",
                "description" => "Per completare l'abilitazione del login con autenticazione a due fattori, scansiona il seguente QR code utilizzando una applicazione di autenticazione o inserisci la chiave insieme al codice OTP generato."
            ],
            "enabled"=>[
                "title"=>"Hai abilitato l'autenticazione a due fattori!",
                "description"=>"L'autenticazione a due fattori adesso è abilitata. Questo permette di rendere più sicuro il tuo account.",
                "store_codes"=>"Salva questi codice di ripristino in un luogo sicuro. Possono essere utilizzati per ripristinare l'accesso al tuo account se il dispositivo che utilizzi viene smarrito",
                "show_codes"=>'Mostra Codici di Ripristino',
                "hide_codes" => 'Nascondi Codici di Ripristino'
            ],
            "confirmation" => [
                "success_notification" => 'Codice verificato. Autenticazione a due fattori abilitata.',
                "invalid_code" => "Il codice inserito non è valido."
            ]
        ],
        "sanctum" => [
            "title" => "Token API ",
            "description" => "Gestisci i token API che permettono l'accesso a questa applicazione a servizi di terze parti. NOTA: il tuo token viene mostrato dopo la creazione. Se perdi il token, dovrai cancellarlo e crearlo nuovamente.",
            "create" => [
                "notify" => "Token creato correttamente!",
                "submit" => [
                    "label" => "Crea",
                ],
            ],
            "update" => [
                "notify" => "Token aggiornato correttamente!",
            ],
        ],
    ],
    "fields" => [
        "email" => "Email",
        "login" => "Login",
        "name" => "Nome",
        "password" => "Password",
        "password_confirm" => "Conferma password",
        "new_password" => "Nuova password",
        "new_password_confirmation" => "Conferma nuova password",
        "token_name" => "Nome del Token",
        "abilities" => "Abilità",
        "2fa_code" => "Codice",
        "2fa_recovery_code" => "Codice di Ripristino"
    ],
    "or" => "O",
    "cancel" => "Annulla"
];
