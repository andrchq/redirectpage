<html lang="ru" style="--tg-viewport-height: 100vh; --tg-viewport-stable-height: 100vh;"><head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="robots" content="noindex, nofollow">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="vendor/fontawesome/css/all.min.css">
        <script src="vendor/vue/vue.global.prod.js"></script>


        <style type="text/css">
            :root {
                --primary-color: #007bff;
                --secondary-color: #6c757d;
                --hero-bg-color: #0A7AF9;
                --hero-text-color: #ffffff;
                --button-text-color: #121212;
                --app-name-color: #121212;
            }

            [data-theme="light"] {
                background-color: #f8f9fa;
            }

            [data-theme="dark"] {
                --primary-color: #1a73e8;
                --secondary-color: #adb5bd;
                --hero-bg-color: #1E1E1E;
                --hero-text-color: #e0e0e0;
                --button-text-color: #ffffff;
                background-color: #121212;
                color: #ffffff;
                --app-name-color: #e0e0e0;
            }
            
            @font-face {
                font-family: 'TeletactileLatCyr';
                src: url('fonts/TeletactileRus2.ttf') format('truetype');
                font-weight: normal;
                font-style: normal;
            }

            body {
                font-family: 'TeletactileLatCyr', sans-serif;
            }



            body {
                transition: background-color 0.3s, color 0.3s;
            }

            .hero-section {
                background-color: var(--background-color);
                color: var(--hero-text-color);
            }

            .logo {
                width: 156px;
            }

            .header-container {
                min-height: 58px;
                padding: 0 6px 6px 6px;
                margin-bottom: 12px;
                gap: 14px;
            }

            [data-theme="light"] .dropdown-toggle {
                background-color: #e9ecef !important;
                color: var(--secondary-color) !important;
                box-shadow: none !important;
                transition: color 0.3s;
                border: 1px solid rgba(0,0,0,.08);
            }

            [data-theme="dark"] .dropdown-toggle {
                background-color: #343a40 !important;
                color: #ffffff !important;
                box-shadow: none !important;
                transition: color 0.3s;
                border: 1px solid rgba(255,255,255,.08);
            }

            .dropdown-menu {
                background-color: #ffffff;
                color: var(--secondary-color);
                min-width: 100%;
                width: 100%;
                border-radius: 14px;
                padding: 6px;
                border: 1px solid rgba(255,255,255,.08);
            }

            [data-theme="dark"] .dropdown-menu {
                background-color: #343a40;
                color: #ffffff;
            }

            .dropdown-item {
                color: inherit;
                border-radius: 10px;
                min-height: 40px;
                font-size: 1rem;
                display: grid;
                grid-template-columns: 22px 1fr;
                align-items: center;
                justify-content: start;
                column-gap: 10px;
                text-align: left;
                padding: 8px 12px;
                width: 100%;
            }

            .dropdown-item:hover {
                background-color: var(--primary-color);
                color: var(--hero-text-color);
            }

            .dropdown-menu {
                margin-top: 0rem;
            }

            .dropdown {
                width: 220px;
            }

            .dropdown-toggle {
                width: 100%;
                min-height: 42px;
                justify-content: space-between;
                padding: 8px 12px;
                border-radius: 12px !important;
                display: grid !important;
                grid-template-columns: 22px 1fr 16px;
                align-items: center;
                column-gap: 10px;
                text-align: left;
            }

            .dropdown-toggle::after {
                justify-self: end;
                margin-left: 0 !important;
            }

            .dropdown-toggle .me-2,
            .dropdown-item .me-2 {
                margin-right: 0 !important;
                width: 22px;
                text-align: center;
            }

            .os-section {
                display: none;
                color: var(--hero-text-color);
                padding: 0.5rem;
                border-radius: 20px;
                transition: background-color 0.3s, color 0.3s, border-radius 0.3s;
                max-width: 600px;
                margin: 0 auto;
            }

            .os-section.active {
                display: block;
            }

            .app-inst {
                max-width: 760px;
                margin: 0 auto 10px;
                padding: 0 12px;
            }

            .app-inst_header {
                font-weight: bold;
                margin-bottom: 10px;
                text-align: center;
                font-size: 1.35rem;
            }

            .app-inst_text {
                font-size: 1rem;
                color: var(--secondary-color);
                margin-bottom: 2px;
                text-align: center;
                line-height: 1.45;
            }

            /* РђРґР°РїС‚РёСЂСѓРµРј Р·Р°РіРѕР»РѕРІРѕРє Рё С‚РµРєСЃС‚ РЅР° СЌРєСЂР°РЅР°С… в‰¤768px (РїР»Р°РЅС€РµС‚С‹ Рё РјРѕР±РёР»СЊРЅС‹Рµ) */
            @media (max-width: 768px) {
                .app-inst_header {
                    font-size: 1.2rem;
                    /* РЈРјРµРЅСЊС€Р°РµРј СЂР°Р·РјРµСЂ Р·Р°РіРѕР»РѕРІРєР° */
                    /* РЈРјРµРЅСЊС€Р°РµРј РѕС‚СЃС‚СѓРї СЃР»РµРІР° */
                    margin-bottom: 8px;
                    /* РЈРјРµРЅСЊС€Р°РµРј РѕС‚СЃС‚СѓРї СЃРЅРёР·Сѓ */
                }

                .app-inst_text {
                    font-size: 0.95rem;
                    /* РЈРјРµРЅСЊС€Р°РµРј СЂР°Р·РјРµСЂ С‚РµРєСЃС‚Р° */
                    /* РЈРјРµРЅСЊС€Р°РµРј РѕС‚СЃС‚СѓРї СЃР»РµРІР° */
                    margin-bottom: 4px;
                    /* РЈРјРµРЅСЊС€Р°РµРј РѕС‚СЃС‚СѓРї СЃРЅРёР·Сѓ */
                }
            }

            /* Р•С‰Рµ РјРµРЅСЊС€РёР№ СЂР°Р·РјРµСЂ РЅР° СЌРєСЂР°РЅР°С… в‰¤480px (РѕС‡РµРЅСЊ РјР°Р»РµРЅСЊРєРёРµ СЌРєСЂР°РЅС‹) */
            @media (max-width: 480px) {
                .app-inst_header {
                    font-size: 1.2rem;
                    /* Р•С‰Рµ РјРµРЅСЊС€Рµ Р·Р°РіРѕР»РѕРІРѕРє */
                    /* РњРёРЅРёРјР°Р»СЊРЅС‹Р№ РѕС‚СЃС‚СѓРї СЃР»РµРІР° */
                }

                .app-inst_text {
                    font-size: 1rem;
                    /* Р•С‰Рµ РјРµРЅСЊС€Рµ С‚РµРєСЃС‚ */
                }
            }

            .app-card {
                background: #f8f9fa;
                border-radius: 20px;
                border: 1px solid;
                border-color: #f2f2f2;
                box-shadow: 0 12px 30px rgba(0, 0, 0, 0.06);
                padding: 1.55rem 1.7rem;
                text-align: center;
                transition: background-color 0.3s, color 0.3s, box-shadow 0.25s ease, transform 0.25s ease;
                position: relative;
                max-width: 860px;
                margin: 0 auto;
            }

            .app-card:hover {
                transform: translateY(-2px);
                box-shadow: 0 18px 40px rgba(0, 0, 0, 0.08);
            }

            /* РЈРјРµРЅСЊС€Р°РµРј РёР·РѕР±СЂР°Р¶РµРЅРёРµ РЅР° РїР»Р°РЅС€РµС‚Р°С… Рё РјРѕР±РёР»СЊРЅС‹С… */
            @media (max-width: 768px) {
                .app-card img {
                    max-width: 150px;
                    /* РћРіСЂР°РЅРёС‡РёРІР°РµРј С€РёСЂРёРЅСѓ */
                    height: auto;
                    /* РЎРѕС…СЂР°РЅСЏРµРј РїСЂРѕРїРѕСЂС†РёРё */
                }
            }

            /* Р”Р»СЏ РѕС‡РµРЅСЊ РјР°Р»РµРЅСЊРєРёС… СЌРєСЂР°РЅРѕРІ (РјРµРЅСЊС€Рµ 480px) */
            @media (max-width: 480px) {
                .app-card img {
                    max-width: 120px;
                    /* Р•С‰Рµ РјРµРЅСЊС€Рµ */
                }
            }



            [data-theme="dark"] .app-card {
                background: var(--hero-bg-color);
                color: #e0e0e0;
                border-color: #2A2A2A;
            }

            .app-card img {
                width: 134px;
                margin-bottom: 0.45rem;
            }

            .app-card h3 {
                color: var(--app-name-color);
                margin-bottom: 0.35rem;
                font-size: 1.9rem;
                font-weight: 600;
            }

            /* РЈРјРµРЅСЊС€Р°РµРј СЂР°Р·РјРµСЂ h3 РЅР° СЌРєСЂР°РЅР°С… в‰¤768px (РїР»Р°РЅС€РµС‚С‹ Рё РјРѕР±РёР»СЊРЅС‹Рµ) */
            @media (max-width: 768px) {
                .app-card h3 {
                    font-size: 1.8rem;
                    /* РЎС‚Р°РЅРґР°СЂС‚РЅС‹Р№ СЂР°Р·РјРµСЂ РІ Bootstrap - 2rem, СѓРјРµРЅСЊС€Р°РµРј */
                }
            }

            /* Р•С‰Рµ РјРµРЅСЊС€Рµ РЅР° СЌРєСЂР°РЅР°С… в‰¤480px (РѕС‡РµРЅСЊ РјР°Р»РµРЅСЊРєРёРµ СЌРєСЂР°РЅС‹) */
            @media (max-width: 480px) {
                .app-card h3 {
                    font-size: 1.8rem;
                    /* Р•С‰Рµ РјРµРЅСЊС€Рµ */
                }
            }

            .app-card p {
                margin-bottom: 0.8rem;
                color: #6c757d;
            }

            [data-theme="dark"] .app-card p {
                color: #adb5bd;
            }

            .app-card .btn {
                margin: 0.3rem;
            }

            .app-card_requirements {
                color: var(--primary-color);
                font-size: 1.0rem;
                font-weight: 300;
                padding: 10px;
                text-align: center;
                /* Р’С‹СЂР°РІРЅРёРІР°РµС‚ С‚РµРєСЃС‚ РїРѕ С†РµРЅС‚СЂСѓ */
                word-wrap: break-word;
                /* РџРµСЂРµРЅРѕСЃ С‚РµРєСЃС‚Р°, РµСЃР»Рё РѕРЅ РїСЂРµРІС‹С€Р°РµС‚ С€РёСЂРёРЅСѓ */
                margin: 0 auto;
            }

            /* РЈРјРµРЅСЊС€Р°РµРј С‚РµРєСЃС‚ Рё РѕС‚СЃС‚СѓРїС‹ РЅР° СЌРєСЂР°РЅР°С… в‰¤768px (РїР»Р°РЅС€РµС‚С‹ Рё РјРѕР±РёР»СЊРЅС‹Рµ) */
            @media (max-width: 768px) {
                .app-card_requirements {
                    font-size: 0.9rem;
                    /* РЈРјРµРЅСЊС€Р°РµРј СЂР°Р·РјРµСЂ С‚РµРєСЃС‚Р° */
                    padding: 8px;
                    /* РЈРјРµРЅСЊС€Р°РµРј РІРЅСѓС‚СЂРµРЅРЅРёР№ РѕС‚СЃС‚СѓРї */
                }
            }

            /* Р•С‰Рµ РјРµРЅСЊС€Рµ РЅР° СЌРєСЂР°РЅР°С… в‰¤480px (РѕС‡РµРЅСЊ РјР°Р»РµРЅСЊРєРёРµ СЌРєСЂР°РЅС‹) */
            @media (max-width: 480px) {
                .app-card_requirements {
                    font-size: 0.8rem;
                    /* Р•С‰Рµ РјРµРЅСЊС€Рµ С‚РµРєСЃС‚ */
                    padding: 6px;
                    /* РљРѕРјРїР°РєС‚РЅС‹Р№ РѕС‚СЃС‚СѓРї */
                }
            }

            .card_requirements_icon {
                padding-right: 5px;
                font-size: 1.1rem;
            }

            .app-card_instruction {
                line-height: 10px;
                font-size: 1.1rem;
                color: var(--secondary-color);
                margin: 0 auto;
            }

            .app-card_instruction_header {
                color: var(--secondary-color);
                margin-bottom: 20px;
            }

            .btn .btn-primary {
                border: none;
                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.5);
            }

            .btn-secondary {
                color: var(--secondary-color);
                background-color: #303030;
                border-color: #373737;
            }

                        .btn-secondary:hover {
                color: var(--secondary-color);
                background-color: #272727;
                border-color: #343434;
            }


            [data-theme="light"] .btn-secondary {
                color: #121212;
                background-color: transparent;
                border-color: #C1C1C1;
            }

            [data-theme="light"] .btn-secondary:hover {
                color: #121212;
                background-color: #EFEFEF;
                border-color: #DFDFDF;
            }


            .btn-v2box-tutorial {
                display: inline-block;
                /* Р§С‚РѕР±С‹ СЂР°РјРєР° РєРѕСЂСЂРµРєС‚РЅРѕ РѕР±С‚РµРєР°Р»Р° С‚РµРєСЃС‚ */
                padding: 5px 10px;
                /* Р”РѕР±Р°РІРёРј РІРЅСѓС‚СЂРµРЅРЅРёР№ РѕС‚СЃС‚СѓРї */
                text-decoration: none;
                /* РЈР±РёСЂР°РµРј СЃС‚Р°РЅРґР°СЂС‚РЅРѕРµ РїРѕРґС‡РµСЂРєРёРІР°РЅРёРµ */
                border: 1px solid #000;
                /* пїЅпїЅпїЅпїЅпїЅ 1px пїЅпїЅпїЅпїЅпїЅпїЅпїЅ пїЅпїЅпїЅпїЅпїЅ */
                border-radius: 30px;
                /* РЎРєСЂСѓРіР»РµРЅРЅС‹Рµ СѓРіР»С‹ */
                border-color: var(--secondary-color);
                color: var(--secondary-color);
                /* Р¦РІРµС‚ С‚РµРєСЃС‚Р° */
                transition: 0.3s;
                /* Р­С„С„РµРєС‚ РїСЂРё РЅР°РІРµРґРµРЅРёРё */
            }

            .btn-v2box-tutorial:hover {
                background-color: #f0f0f0;
                /* Р¦РІРµС‚ С„РѕРЅР° РїСЂРё РЅР°РІРµРґРµРЅРёРё */
                color: #121212;
                /* Р¦РІРµС‚ С‚РµРєСЃС‚Р° РїСЂРё РЅР°РІРµРґРµРЅРёРё */
            }

            .button-group {
                display: flex;
                flex-direction: column;
                align-items: stretch;
                /* РљРЅРѕРїРєРё СЂР°СЃС‚СЏРіРёРІР°СЋС‚СЃСЏ РЅР° РІСЃСЋ С€РёСЂРёРЅСѓ РєРѕРЅС‚РµР№РЅРµСЂР° */
            }

            .button-group {
                display: flex;
                flex-direction: column;
                align-items: center;
                /* Р¦РµРЅС‚СЂРёСЂСѓРµС‚ РєРЅРѕРїРєРё РїРѕ РіРѕСЂРёР·РѕРЅС‚Р°Р»Рё */
            }

            .button-group .btn {
                display: flex;
                align-items: center;
                /* Р¦РµРЅС‚СЂРёСЂСѓРµРј РїРѕ РІРµСЂС‚РёРєР°Р»Рё */
                justify-content: center;
                /* Р¦РµРЅС‚СЂРёСЂСѓРµРј РїРѕ РіРѕСЂРёР·РѕРЅС‚Р°Р»Рё */
                width: 280px !important;
                /* РћРіСЂР°РЅРёС‡РёРІР°РµРј С€РёСЂРёРЅСѓ РєРЅРѕРїРѕРє */
                height: 50px;
                /* РЈРІРµР»РёС‡РёРІР°РµРј РІС‹СЃРѕС‚Сѓ РєРЅРѕРїРѕРє */
                margin-bottom: 10px;
                /* Р”РѕР±Р°РІР»СЏРµРј Р·Р°Р·РѕСЂ РјРµР¶РґСѓ РєРЅРѕРїРєР°РјРё */
                text-align: center;
                /* Р¦РµРЅС‚СЂРёСЂСѓРµРј С‚РµРєСЃС‚ РІРЅСѓС‚СЂРё РєРЅРѕРїРєРё */
                font-size: 15px;
            }

            .button-group .btn:last-child {
                margin-bottom: 0;
                /* РЈР±РёСЂР°РµРј Р·Р°Р·РѕСЂ РїРѕСЃР»Рµ РїРѕСЃР»РµРґРЅРµР№ РєРЅРѕРїРєРё */
            }

            /* STEP BUTTONS вЂ” РµРґРёРЅР°СЏ РєРЅРѕРїРєР° СЃ РЅРѕРјРµСЂРѕРј СЃР»РµРІР° */
            .button-group.step-buttons {
                display: grid;
                grid-template-columns: repeat(2, minmax(220px, 1fr));
                gap: 10px;
                width: min(100%, 700px);
                margin: 0 auto;
                align-items: stretch;
            }

            .button-group.step-buttons > .step-btn:last-child:nth-child(odd) {
                grid-column: 1 / -1;
            }

            /* РћР±С‰РёР№ РІРёРґ РµРґРёРЅРѕР№ РєРЅРѕРїРєРё С€Р°РіР° */
            .step-btn {
                display: flex;
                align-items: stretch;
                justify-content: flex-start;
                width: 100% !important;
                min-height: 54px;
                margin-bottom: 0;
                border-radius: 12px;
                text-decoration: none !important;
                overflow: hidden;
                transition: transform .15s ease, box-shadow .2s ease, filter .2s ease;
                box-shadow: 0 8px 18px rgba(0, 0, 0, 0.08);
            }

            /* Р›РµРІР°СЏ С‡Р°СЃС‚СЊ СЃ РЅРѕРјРµСЂРѕРј Рё РёРєРѕРЅРєРѕР№ */
            .step-btn .step-num {
                display: flex;
                align-items: center;
                justify-content: center;
                gap: 6px;
                width: 64px;
                font-size: 18px;
                font-weight: 700;
                user-select: none;
                border-right: 1px solid rgba(255,255,255,.22);
                text-align: center;
            }

            /* РРєРѕРЅРєРё вЂ” РѕРґРёРЅ СЂР°Р·РјРµСЂ РґР»СЏ РІСЃРµС… */
            .step-btn .step-num i {
                font-size: 18px;
                width: 18px;
                text-align: center;
            }

            /* РўРµРєСЃС‚ СЃРїСЂР°РІР° вЂ” С‡СѓС‚СЊ СѓРІРµР»РёС‡РµРЅ */
            .step-btn .step-label {
                flex: 1 1 auto;
                display: flex;
                align-items: center;
                justify-content: center;
                padding: 0 16px;
                font-size: 20px;
                font-weight: 500;
                white-space: nowrap;
                line-height: 1.1;
            }

            /* Р¦РІРµС‚РѕРІС‹Рµ РІР°СЂРёР°РЅС‚С‹ (СЃРѕРѕС‚РІРµС‚СЃС‚РІСѓСЋС‚ РїСЂРµР¶РЅРёРј С€Р°РіР°Рј) */
            .step-btn.step-1 {
                background-color: var(--primary-color);
                color: var(--button-text-color);
                border: 1px solid var(--primary-color);
            }
            .step-btn.step-2 {
                background-color: #ff5010;
                color: #121212; /* С‚С‘РјРЅС‹Р№ С‚РµРєСЃС‚ РЅР° РѕСЂР°РЅР¶РµРІРѕРј РєР°Рє СЂР°РЅСЊС€Рµ */
                border: 1px solid #ff5010;
            }
            .step-btn.step-3 {
                background-color: var(--secondary-color);
                color: #ffffff;
                border: 1px solid var(--secondary-color);
            }

            .step-btn.step-4 {
                background-color: #0dcaf0;
                color: #121212;
                border: 1px solid #0dcaf0;
            }

            .step-btn.step-primary {
                background-color: var(--primary-color);
                color: var(--button-text-color);
                border-color: var(--primary-color);
            }

            .step-btn.step-orange {
                background-color: #ff5010;
                color: #121212;
                border-color: #ff5010;
            }

            .step-btn.step-gray {
                background-color: var(--secondary-color);
                color: #ffffff;
                border-color: var(--secondary-color);
            }

            .step-btn.step-cyan {
                background-color: #0dcaf0;
                color: #121212;
                border-color: #0dcaf0;
            }

            /* Hover/Active вЂ” Р±РµР· В«РїСЂС‹Р¶РєР°В» С€РёСЂРёРЅС‹/РІС‹СЃРѕС‚С‹ */
            .step-btn:hover,
            .step-btn:focus {
                text-decoration: none;
                filter: brightness(1.03);
                box-shadow: 0 14px 28px rgba(0, 0, 0, 0.12);
                transform: translateY(-1px);
            }
            .step-btn:active {
                transform: translateY(1px);
            }

            /* РўС‘РјРЅР°СЏ С‚РµРјР°: Р»РёРЅРёСЏ-СЂР°Р·РґРµР»РёС‚РµР»СЊ С‡СѓС‚СЊ РїСЂРѕР·СЂР°С‡РЅРµРµ */
            [data-theme="dark"] .step-btn .step-num {
                border-right-color: rgba(255,255,255,.2);
            }

            /* РђРґР°РїС‚РёРІ: С‡СѓС‚СЊ РЅРёР¶Рµ РІС‹СЃРѕС‚Р° Рё С€РёСЂРёРЅР° */
            @media (max-width: 768px) {
                .button-group.step-buttons {
                    grid-template-columns: 1fr;
                    width: 100%;
                    max-width: 320px;
                }
                .step-btn {
                    width: 100% !important;
                    max-width: 320px;
                    min-height: 50px;
                }
                .step-btn .step-num {
                    width: 50px;
                }
                .step-btn .step-label {
                    font-size: 18px;
                    white-space: normal;
                    text-align: center;
                }
            }


            .btn-v2box {
                text-decoration: none;
                font-weight: 500;
                border: none;
                color:var(--secondary-color); important!
            }

            .btn-v2box:hover {
                color:#007bff; important!
            }

            [data-theme="dark"] .btn-v2box {
                color:var(--secondary-color); important!
            }

            [data-theme="dark"] .btn-v2box:hover {
                color:#007bff; important!
            }

            .container {
                margin-top: -20px;
            }

            @media (min-width: 992px) {
                .os-section {
                    max-width: 930px;
                    padding: 0.25rem 0.75rem 0.5rem;
                }

                .app-card {
                    display: grid;
                    grid-template-columns: 156px minmax(0, 1fr);
                    grid-template-areas:
                        "image title"
                        "image requirements"
                        "image actions";
                    column-gap: 24px;
                    align-items: center;
                    text-align: left;
                }

                .app-card img {
                    grid-area: image;
                    margin: 0 auto;
                    width: 132px;
                }

                .app-card h3 {
                    grid-area: title;
                    margin-bottom: 0.45rem;
                }

                .app-card p {
                    grid-area: requirements;
                    margin-bottom: 0.8rem;
                }

                .app-card .button-group.step-buttons {
                    grid-area: actions;
                    margin-left: 0;
                }

                .app-inst {
                    max-width: 820px;
                }

                .app-inst_text {
                    font-size: 0.98rem;
                }
            }

            @media (min-width: 992px) and (max-height: 920px) {
                .header-container {
                    min-height: 50px;
                    margin-bottom: 8px;
                }

                .app-inst {
                    margin-bottom: 6px;
                }

                .app-inst_header {
                    font-size: 1.2rem;
                    margin-bottom: 6px;
                }

                .app-inst_text {
                    font-size: 0.92rem;
                    line-height: 1.35;
                }

                .container.py-5 {
                    padding-top: 0.8rem !important;
                    padding-bottom: 0.8rem !important;
                }

                .app-card {
                    padding-top: 1.2rem;
                    padding-bottom: 1.2rem;
                }

                .app-card img {
                    width: 118px;
                }

                .app-card h3 {
                    font-size: 1.75rem;
                }

                .step-btn {
                    min-height: 50px;
                }

                .step-btn .step-label {
                    font-size: 18px;
                }
            }

            .notification {
                margin-top: 1rem;
                padding: 1rem;
                color: var(--secondary-color);
                display: none;
            }

            .notification.active {
                display: block;
            }

            [data-theme="dark"] .notification {
                background-color: #1E1E1E;
                color: var(--secondary-color);
            }

            .no-pointer-events {
                pointer-events: none;
                opacity: 0.6;
                /* РќРµРѕР±СЏР·Р°С‚РµР»СЊРЅРѕ: СЃРґРµР»Р°РµС‚ РєРЅРѕРїРєСѓ РІРёР·СѓР°Р»СЊРЅРѕ РјРµРЅРµРµ СЏСЂРєРѕР№ */
            }

            .support-btn {
                position: fixed;
                bottom: 20px;
                right: 20px;
                width: 60px;
                height: 60px;
                border-radius: 50%;
                background-color: var(--primary-color);
                color: #ffffff;
                display: flex;
                align-items: center;
                justify-content: center;
                box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
                animation: pulse 5.5s infinite;
                z-index: 1000;
                cursor: pointer;
            }

            @keyframes pulse {
                0% {
                    box-shadow: 0 0 0 0 rgba(0, 123, 255, 0.7);
                }

                70% {
                    box-shadow: 0 0 0 20px rgba(0, 123, 255, 0);
                }

                100% {
                    box-shadow: 0 0 0 0 rgba(0, 123, 255, 0);
                }
            }

            .support-notification {
                position: fixed;
                bottom: 90px;
                right: 20px;
                background-color: var(--primary-color);
                color: #ffffff;
                padding: 10px 15px;
                border-radius: 10px;
                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
                display: none;
                z-index: 1000;
            }

            .support-notification.active {
                display: block;
            }

            .support-link {
                color: #ffffff;
                text-decoration: underline;
                font-weight: 600;
            }

            .support-link:hover {
                text-decoration: none;
            }

            .tooltip-icon {
                cursor: pointer;
                font-size: 1.3rem;
                color: #007bff; !important;
            }

            .tooltip-icon:hover {
                color: #0062cc; !important;
            }

            /* пїЅпїЅпїЅпїЅпїЅпїЅпїЅпїЅ пїЅпїЅпїЅпїЅ пїЅпїЅпїЅ пїЅпїЅпїЅпїЅпїЅпїЅпїЅпїЅ пїЅпїЅпїЅпїЅпїЅпїЅпїЅпїЅпїЅпїЅ пїЅпїЅпїЅпїЅ */
            .modal-backdrop {
                background-color: rgba(0, 0, 0, 0.9) !important;
            }

            /* Р‘Р°Р·РѕРІС‹Р№ СЃС‚РёР»СЊ РјРѕРґР°Р»СЊРЅРѕРіРѕ РѕРєРЅР° */
            .modal-content {
                border-radius: 12px;
                transition: background-color 0.3s, color 0.3s;
            }

            /* РўРµРјРЅР°СЏ С‚РµРјР° */
            [data-theme="dark"] .modal-content {
                background-color: #1E1E1E;
                color: #E0E0E0;
            }

            [data-theme="dark"] .modal-header {
                border-bottom: 1px solid #444;
            }

            [data-theme="dark"] .modal-footer {
                border-top: 1px solid #444;
            }

            [data-theme="dark"] .btn-close {
                filter: invert(1);
            }

            /* РЈР±РёСЂР°РµРј Р»РёРЅРёСЋ РІ header Рё footer РјРѕРґР°Р»СЊРЅРѕРіРѕ РѕРєРЅР° */
            .modal-header,
            .modal-footer {
                border: none !important;
            }
            }

            .page-frame,
            .slider {
                position: relative;
                overflow: hidden;
                width: 100%;
                min-height: 100vh;
            }

            .page-slider {
                position: relative;
                width: 100%;
                min-height: 100%;
            }

            .page-slide {
                min-height: 100vh;
                transition: transform 0.45s ease;
                will-change: transform;
            }

            .main-page {
                background: inherit;
                transform: translateX(0);
            }

            .page-frame.show-instruction .main-page,
            .slider.show-instruction .main-page {
                transform: translateX(-20%);
                pointer-events: none;
            }

            .instruction-page {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                min-height: 100vh;
                height: 100vh;
                max-height: 100vh;
                box-sizing: border-box;
                background-color: #f8f9fa;
                color: #121212;
                display: flex;
                justify-content: center;
                padding: 2rem 1.5rem 3rem;
                transform: translateX(100%);
                transition: transform 0.45s ease;
                pointer-events: none;
                overflow-y: auto;
                -webkit-overflow-scrolling: touch;
            }

            .page-frame.show-instruction .instruction-page,
            .slider.show-instruction .instruction-page {
                transform: translateX(0);
                pointer-events: auto;
            }

            [data-theme="dark"] .instruction-page {
                background-color: #121212;
                color: #e0e0e0;
            }

            .instruction-inner {
                flex: 1 0 auto;
                max-width: 720px;
                width: 100%;
                display: flex;
                flex-direction: column;
                gap: 1.5rem;
            }

            .overlay-header {
                display: flex;
                align-items: center;
                justify-content: space-between;
                margin-bottom: 1.5rem;
                gap: 1rem;
            }

            .back-button {
                display: inline-flex;
                align-items: center;
                justify-content: center;
                gap: 0.5rem;
                border: none;
                background-color: var(--secondary-color);
                color: #ffffff;
                font-size: 1rem;
                font-weight: 600;
                padding: 0.75rem 1.5rem;
                border-radius: var(--bs-btn-border-radius, 0.375rem);
                box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
                transition: filter 0.2s ease, transform 0.02s ease-in-out;
            }

            .back-button i,
            .instruction-back-button i {
                font-size: 1rem;
            }

            .back-button:hover,
            .back-button:focus {
                filter: brightness(1.05);
                color: #ffffff;
                outline: none;
            }

            .back-button:active,
            .instruction-back-button:active {
                transform: translateY(1px);
            }

            [data-theme="dark"] .back-button {
                color: #121212;
            }

            [data-theme="dark"] .back-button:hover,
            [data-theme="dark"] .back-button:focus {
                color: #121212;
                filter: brightness(0.95);
            }

            .overlay-logo {
                width: 140px;
            }

            .tv-instruction-card {
                background: #ffffff;
                border-radius: 20px;
                border: 1px solid #f2f2f2;
                box-shadow: 0 2px 6px rgba(0, 0, 0, 0.05);
                padding: 2.5rem 2rem;
            }

            [data-theme="dark"] .tv-instruction-card {
                background-color: #1E1E1E;
                border-color: #2A2A2A;
                box-shadow: 0 2px 12px rgba(0, 0, 0, 0.4);
            }

            .tv-instruction-card h1 {
                font-size: 2rem;
                margin-bottom: 1rem;
                text-align: center;
            }

            .tv-instruction-card p {
                color: #6c757d;
                margin-bottom: 1.5rem;
                text-align: center;
            }

            [data-theme="dark"] .tv-instruction-card p {
                color: #adb5bd;
            }

            .tv-instruction-list {
                list-style: none;
                counter-reset: step-counter;
                padding: 0;
                margin: 0;
            }

            .tv-instruction-list li {
                counter-increment: step-counter;
                margin-bottom: 1.25rem;
                padding-left: 3.25rem;
                position: relative;
                line-height: 1.5;
                color: inherit;
            }

            .tv-instruction-list li::before {
                content: counter(step-counter);
                position: absolute;
                left: 0;
                top: 0;
                width: 2.4rem;
                height: 2.4rem;
                border-radius: 12px;
                background-color: var(--primary-color);
                color: var(--button-text-color);
                display: flex;
                align-items: center;
                justify-content: center;
                font-size: 1.25rem;
                font-weight: 700;
            }

            .tv-instruction-list a {
                color: var(--primary-color);
                text-decoration: none;
            }

            .tv-instruction-list a:hover {
                text-decoration: underline;
            }

            .tv-instruction-note {
                background-color: #fff7e6;
                border: 1px solid #ffe0b3;
                color: #7a4a00;
                border-radius: 12px;
                padding: 1rem 1.25rem;
                margin-top: 1.5rem;
                font-size: 0.95rem;
            }

            .tv-instruction-note a {
                color: inherit;
                font-weight: 600;
            }

            [data-theme="dark"] .tv-instruction-note {
                background-color: rgba(255, 183, 77, 0.1);
                border-color: rgba(255, 183, 77, 0.4);
                color: #ffcf8b;
            }

            .instruction-back-button {
                margin: 1.5rem auto 0;
                display: flex;
                align-items: center;
                justify-content: center;
                gap: 0.5rem;
                padding: 0.75rem 2rem;
                border-radius: var(--bs-btn-border-radius, 0.375rem);
                border: none;
                background-color: var(--secondary-color);
                color: #ffffff;
                font-weight: 600;
                font-size: 1rem;
                box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
                transition: filter 0.2s ease, transform 0.02s ease-in-out;
                width: fit-content;
            }

            .instruction-back-button:hover,
            .instruction-back-button:focus {
                filter: brightness(1.05);
                color: #ffffff;
                outline: none;
            }

            [data-theme="dark"] .instruction-back-button {
                color: #121212;
            }

            [data-theme="dark"] .instruction-back-button:hover,
            [data-theme="dark"] .instruction-back-button:focus {
                color: #121212;
                filter: brightness(0.95);
            }

            @media (max-width: 768px) {
                .instruction-page {
                    padding: 1.5rem 1.25rem 2.5rem;
                }

                .instruction-inner {
                    padding: 1.5rem 1.25rem 2.5rem;
                }

                .tv-instruction-card {
                    padding: 2rem 1.5rem;
                }

                .tv-instruction-card h1 {
                    font-size: 1.75rem;
                }

                .tv-instruction-list li {
                    padding-left: 3rem;
                }

                .tv-instruction-list li::before {
                    width: 2.2rem;
                    height: 2.2rem;
                    font-size: 1.1rem;
                }
            }
        </style>
    </head>
    <body :data-theme="theme" class="d-flex flex-column min-vh-100" data-theme="dark">
        <div id="app" data-v-app="">
            <div class="page-frame slider" :class="{ 'show-instruction': showInstructionOverlay }">
                <div class="page-slider">
                    <div class="page-slide main-page" ref="mainPage" tabindex="-1">
            <!-- Hero Section -->
            <section class="container mt-4">
                <div class="header-container d-flex align-items-center justify-content-between"><img
                        src="img2/logo_1.png" class="logo" alt="Logo">
                    <div class="d-flex align-items-center">
                        <div class="dropdown"><button class="btn dropdown-toggle d-flex align-items-center" type="button" id="osDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                        <i :class="selectedOSIcon" class="me-2"></i> {{ selectedOSText }}</button>
                                    <ul class="dropdown-menu" aria-labelledby="osDropdown">
                                        <li><button class="dropdown-item d-flex align-items-center" @click="setOS('iOS')"><i class="me-2 fa fa-brands fa-apple"></i> iOS</button></li>
                                        <li><button class="dropdown-item d-flex align-items-center" @click="setOS('macOS')"><i class="me-2 fa fa-brands fa-apple"></i> macOS</button></li>
                                        <li><button class="dropdown-item d-flex align-items-center" @click="setOS('Android')"><i class="me-2 fa fa-brands fa-android"></i> Android</button></li>
                                        <li><button class="dropdown-item d-flex align-items-center" @click="setOS('Windows')"><i class="me-2 fa fa-brands fa-windows"></i> Windows</button></li>
                                        <li><button class="dropdown-item d-flex align-items-center" @click="setOS('Android TV')"><i class="me-2 fa fa-solid fa-tv"></i> Android TV</button></li>
                                    </ul>
                        </div>
                    </div>
                </div>
            </section>
            <!--v-if-->
            <div class="app-inst">
                <h4 class="app-inst_header">РРЅСЃС‚СЂСѓРєС†РёСЏ РґР»СЏ Android</h4>
                <p class="app-inst_text"> гѓ» РЈСЃС‚Р°РЅРѕРІРёС‚Рµ РїСЂРёР»РѕР¶РµРЅРёРµ <span style="font-weight: 600;">HAPP</span><br> гѓ»
                    РќР°Р¶РјРёС‚Рµ РєРЅРѕРїРєСѓ В«Р”РѕР±Р°РІРёС‚СЊ РєР»СЋС‡В» </p>
            </div>
            <!--v-if-->
            <!--v-if-->
            <!--v-if-->
            <!-- OS Sections -->
            <?php
                $keyyy = isset($_GET['key']) ? $_GET['key'] : '';
                $appConfig = [
                    'name' => 'HAPP',
                    'image' => 'img2/app_happ.png',
                    'add_scheme' => 'happ://add/',
                    'appstore_global' => 'https://apps.apple.com/us/app/happ-proxy-utility/id6504287215',
                    'appstore_rus' => 'https://apps.apple.com/ru/app/happ-proxy-utility-plus/id6746188973',
                    'macos_global' => 'https://apps.apple.com/us/app/happ-proxy-utility/id6504287215',
                    'macos_rus' => 'https://apps.apple.com/ru/app/happ-proxy-utility-plus/id6746188973',
                    'google_play' => 'https://play.google.com/store/apps/details?id=com.happproxy',
                    'android_tv_apk' => 'https://github.com/Happ-proxy/happ-android/releases/latest/download/Happ.apk',
                    'windows' => 'https://github.com/Happ-proxy/happ-desktop/releases/latest/download/setup-Happ.x64.exe',
                ];
                $preferredLang = strtolower($_SERVER['HTTP_ACCEPT_LANGUAGE'] ?? '');
                $isRussianStore = strpos($preferredLang, 'ru') === 0;
                $iosStoreUrl = $isRussianStore ? $appConfig['appstore_rus'] : $appConfig['appstore_global'];
                $macosStoreUrl = $isRussianStore ? $appConfig['macos_rus'] : $appConfig['macos_global'];
                $addKeyUrl = '/redirect.php?url=' . urlencode($appConfig['add_scheme'] . $keyyy);
            ?>
            <section class="os-section ios">
                <div class="container py-5">
                    <div class="app-card">
                        <div class="position-absolute top-0 end-0 mt-3 me-3">
                            <span class="tooltip-icon" data-bs-toggle="tooltip" data-bs-placement="left" aria-label="Р РµРєРѕРјРµРЅРґСѓРµРјРѕРµ РїСЂРёР»РѕР¶РµРЅРёРµ" data-bs-original-title="Р РµРєРѕРјРµРЅРґСѓРµРјРѕРµ РїСЂРёР»РѕР¶РµРЅРёРµ">
                                <i class="fa-solid fa-bolt"></i></span>
                        </div>
                        <img src="<?php echo htmlspecialchars($appConfig['image'], ENT_QUOTES, 'UTF-8'); ?>">
                        <h3><?php echo htmlspecialchars($appConfig['name'], ENT_QUOTES, 'UTF-8'); ?></h3>
                        <p class="app-card_requirements">
                            <i class="fa-solid fa-mobile-screen-button card_requirements_icon" style="margin-bottom: 15px;"></i> iOS 15 Рё РЅРѕРІРµРµ <br>
                            <i class="fa-solid fa-tv card_requirements_icon"></i> Apple TV <br>
                        </p>
                        <div class="button-group step-buttons">
                            <a class="step-btn step-1" href="<?php echo htmlspecialchars($iosStoreUrl, ENT_QUOTES, 'UTF-8'); ?>" rel="noopener noreferrer" target="_blank">
                                <span class="step-num">1 <i class="fa-brands fa-app-store-ios"></i></span>
                                <span class="step-label">РЈСЃС‚Р°РЅРѕРІРёС‚СЊ</span>
                            </a>
                            <a class="step-btn step-2 step-orange" href="<?php echo htmlspecialchars($addKeyUrl, ENT_QUOTES, 'UTF-8'); ?>" rel="noopener noreferrer" target="_blank">
                                <span class="step-num">2 <i class="fa-solid fa-key"></i></span>
                                <span class="step-label">Р”РѕР±Р°РІРёС‚СЊ РєР»СЋС‡</span>
                            </a>
                            <a class="step-btn step-3 step-gray" href="javascript:void(0);" onclick="copyToClipboard()">
                                <span class="step-num">3 <i class="fa-solid fa-copy"></i></span>
                                <span class="step-label">РЎРєРѕРїРёСЂРѕРІР°С‚СЊ РєР»СЋС‡</span>
                            </a>
                        </div>
                    </div>
                </div>
            </section>
            <section class="os-section macos">
                <div class="container py-5">
                    <div class="app-card">
                        <div class="position-absolute top-0 end-0 mt-3 me-3">
                            <span class="tooltip-icon" data-bs-toggle="tooltip" data-bs-placement="left" aria-label="Р РµРєРѕРјРµРЅРґСѓРµРјРѕРµ РїСЂРёР»РѕР¶РµРЅРёРµ" data-bs-original-title="Р РµРєРѕРјРµРЅРґСѓРµРјРѕРµ РїСЂРёР»РѕР¶РµРЅРёРµ">
                                <i class="fa-solid fa-bolt"></i></span>
                        </div>
                        <img src="<?php echo htmlspecialchars($appConfig['image'], ENT_QUOTES, 'UTF-8'); ?>">
                        <h3><?php echo htmlspecialchars($appConfig['name'], ENT_QUOTES, 'UTF-8'); ?></h3>
                        <p class="app-card_requirements">
                            <i class="fa-solid fa-laptop card_requirements_icon"></i> macOS 12 Рё РЅРѕРІРµРµ <br>
                            <i class="fa-solid fa-microchip card_requirements_icon mt-3"></i> РўРѕР»СЊРєРѕ РґР»СЏ ARM-С‡РёРїРѕРІ <br>
                        </p>
                        <div class="button-group step-buttons">
                            <a class="step-btn step-1 step-primary" href="<?php echo htmlspecialchars($macosStoreUrl, ENT_QUOTES, 'UTF-8'); ?>" rel="noopener noreferrer" target="_blank">
                                <span class="step-num">1 <i class="fa-brands fa-apple"></i></span>
                                <span class="step-label">РЎРєР°С‡Р°С‚СЊ .dmg</span>
                            </a>
                            <a class="step-btn step-2 step-orange" href="<?php echo htmlspecialchars($addKeyUrl, ENT_QUOTES, 'UTF-8'); ?>" rel="noopener noreferrer" target="_blank">
                                <span class="step-num">2 <i class="fa-solid fa-key"></i></span>
                                <span class="step-label">Р”РѕР±Р°РІРёС‚СЊ РєР»СЋС‡</span>
                            </a>
                            <a class="step-btn step-3 step-gray" href="javascript:void(0);" onclick="copyToClipboard()">
                                <span class="step-num">3 <i class="fa-solid fa-copy"></i></span>
                                <span class="step-label">РЎРєРѕРїРёСЂРѕРІР°С‚СЊ РєР»СЋС‡</span>
                            </a>
                        </div>
                    </div>
                </div>
            </section>

            <section class="os-section android active">
                <div class="container py-5">
                    <div class="app-card">
                        <div class="position-absolute top-0 end-0 mt-3 me-3">
                            <span class="tooltip-icon" data-bs-toggle="tooltip" data-bs-placement="left" aria-label="пїЅпїЅпїЅпїЅпїЅпїЅпїЅпїЅпїЅпїЅпїЅпїЅпїЅпїЅпїЅ пїЅпїЅпїЅпїЅпїЅпїЅпїЅпїЅпїЅпїЅ" data-bs-original-title="пїЅпїЅпїЅпїЅпїЅпїЅпїЅпїЅпїЅпїЅпїЅпїЅпїЅпїЅпїЅ пїЅпїЅпїЅпїЅпїЅпїЅпїЅпїЅпїЅпїЅ"><i class="fa-solid fa-bolt"></i></span>
                        </div>
                        <img src="<?php echo htmlspecialchars($appConfig['image'], ENT_QUOTES, 'UTF-8'); ?>">
                        <h3><?php echo htmlspecialchars($appConfig['name'], ENT_QUOTES, 'UTF-8'); ?></h3>
                        <p class="app-card_requirements"><i class="fa-solid fa-mobile-screen-button card_requirements_icon"></i> Android 8.0 Рё РЅРѕРІРµРµ<br></p>
                        <div class="button-group step-buttons">
                            <a class="step-btn step-1" href="<?php echo htmlspecialchars($appConfig['google_play'], ENT_QUOTES, 'UTF-8'); ?>" rel="noopener noreferrer" target="_blank">
                                <span class="step-num">1 <i class="fa-brands fa-google-play"></i></span>
                                <span class="step-label">РЈСЃС‚Р°РЅРѕРІРёС‚СЊ [GPlay]</span>
                            </a>
                            <a class="step-btn step-2 step-primary" href="<?php echo htmlspecialchars($appConfig['android_tv_apk'], ENT_QUOTES, 'UTF-8'); ?>" rel="noopener noreferrer" target="_blank">
                                <span class="step-num">1 <i class="fa fa-download"></i></span>
                                <span class="step-label">РЎРєР°С‡Р°С‚СЊ [.apk]</span>
                            </a>
                            <a class="step-btn step-3 step-orange" href="<?php echo htmlspecialchars($addKeyUrl, ENT_QUOTES, 'UTF-8'); ?>" rel="noopener noreferrer" target="_blank">
                                <span class="step-num">2 <i class="fa-solid fa-key"></i></span>
                                <span class="step-label">Р”РѕР±Р°РІРёС‚СЊ РєР»СЋС‡</span>
                            </a>
                            <a class="step-btn step-4 step-gray" href="javascript:void(0);" onclick="copyToClipboard()">
                                <span class="step-num">3 <i class="fa-solid fa-copy"></i></span>
                                <span class="step-label">РЎРєРѕРїРёСЂРѕРІР°С‚СЊ РєР»СЋС‡</span>
                            </a>
                        </div>
                    </div>
                </div>
            </section>
            <section class="os-section windows">
                <div class="container py-5">
                    <div class="app-card">
                        <div class="position-absolute top-0 end-0 mt-3 me-3">
                            <span class="tooltip-icon" data-bs-toggle="tooltip" data-bs-placement="left"
                                aria-label="пїЅпїЅпїЅпїЅпїЅпїЅпїЅпїЅпїЅпїЅпїЅпїЅпїЅпїЅпїЅ пїЅпїЅпїЅпїЅпїЅпїЅпїЅпїЅпїЅпїЅ" data-bs-original-title="пїЅпїЅпїЅпїЅпїЅпїЅпїЅпїЅпїЅпїЅпїЅпїЅпїЅпїЅпїЅ пїЅпїЅпїЅпїЅпїЅпїЅпїЅпїЅпїЅпїЅ">
                                <i class="fa-solid fa-bolt"></i>
                            </span>
                        </div>
                        <img src="<?php echo htmlspecialchars($appConfig['image'], ENT_QUOTES, 'UTF-8'); ?>">
                        <h3><?php echo htmlspecialchars($appConfig['name'], ENT_QUOTES, 'UTF-8'); ?></h3>
                        <p class="app-card_requirements"><i class="fa-solid fa-laptop card_requirements_icon"></i>
                            Windows 10 Рё РЅРѕРІРµРµ <br></p>
                        <div class="button-group step-buttons">
                            <a class="step-btn step-1" href="<?php echo htmlspecialchars($appConfig['windows'], ENT_QUOTES, 'UTF-8'); ?>" target="_blank" rel="noopener">
                                <span class="step-num">1 <i class="fa-brands fa-windows"></i></span>
                                <span class="step-label">РЈСЃС‚Р°РЅРѕРІРёС‚СЊ</span>
                            </a>
                            <a class="step-btn step-2" href="<?php echo htmlspecialchars($addKeyUrl, ENT_QUOTES, 'UTF-8'); ?>" target="_blank" rel="noopener">
                                <span class="step-num">2 <i class="fa-solid fa-key"></i></span>
                                <span class="step-label">Р”РѕР±Р°РІРёС‚СЊ РєР»СЋС‡</span>
                            </a>
                            <a class="step-btn step-3" href="javascript:void(0);" onclick="copyToClipboard()">
                                <span class="step-num">3 <i class="fa-solid fa-copy"></i></span>
                                <span class="step-label">РЎРєРѕРїРёСЂРѕРІР°С‚СЊ РєР»СЋС‡</span>
                            </a>
                        </div>
                    </div>
                </div>
            </section>
            <section class="os-section android-tv">
                <div class="container py-5">
                    <div class="app-card">
                        <div class="position-absolute top-0 end-0 mt-3 me-3">
                            <span class="tooltip-icon" data-bs-toggle="tooltip" data-bs-placement="left"
                                aria-label="пїЅпїЅпїЅпїЅпїЅпїЅпїЅпїЅпїЅпїЅпїЅпїЅпїЅпїЅпїЅ пїЅпїЅпїЅпїЅпїЅпїЅпїЅпїЅпїЅпїЅ" data-bs-original-title="пїЅпїЅпїЅпїЅпїЅпїЅпїЅпїЅпїЅпїЅпїЅпїЅпїЅпїЅпїЅ пїЅпїЅпїЅпїЅпїЅпїЅпїЅпїЅпїЅпїЅ">
                                <i class="fa-solid fa-bolt"></i>
                            </span>
                        </div>
                        <img src="<?php echo htmlspecialchars($appConfig['image'], ENT_QUOTES, 'UTF-8'); ?>">
                        <h3><?php echo htmlspecialchars($appConfig['name'], ENT_QUOTES, 'UTF-8'); ?></h3>
                        <p class="app-card_requirements"><i class="fa-solid fa-tv card_requirements_icon"></i> Android
                            TV 9 Рё РЅРѕРІРµРµ <br></p>
                        <div class="button-group step-buttons">
                            <a class="step-btn step-1" href="<?php echo htmlspecialchars($appConfig['google_play'], ENT_QUOTES, 'UTF-8'); ?>" rel="noopener noreferrer" target="_blank">
                                <span class="step-num">1 <i class="fa-brands fa-google-play"></i></span>
                                <span class="step-label">РЈСЃС‚Р°РЅРѕРІРёС‚СЊ [GPlay]</span>
                            </a>
                            <a class="step-btn step-2 step-primary" href="<?php echo htmlspecialchars($appConfig['android_tv_apk'], ENT_QUOTES, 'UTF-8'); ?>" rel="noopener noreferrer" target="_blank">
                                <span class="step-num">2 <i class="fa fa-download"></i></span>
                                <span class="step-label">РЎРєР°С‡Р°С‚СЊ [.apk]</span>
                            </a>
                            <a class="step-btn step-3 step-orange" href="#" @click.prevent="openInstructionOverlay">
                                <span class="step-num">3 <i class="fa-solid fa-circle-info"></i></span>
                                <span class="step-label">РРЅСЃС‚СЂСѓРєС†РёСЏ</span>
                            </a>
                        </div>
                    </div>
                </div>
            </section>
            <!--v-if-->
            <!-- Copy Key Button -->
            <!-- Copy Notification -->
            <div class="support-notification"><b><i class="fa-regular fa-check me-1"></i> РљР»СЋС‡ СЃРєРѕРїРёСЂРѕРІР°РЅ </b><br>Р•РіРѕ
                РјРѕР¶РЅРѕ РёСЃРїРѕР»СЊР·РѕРІР°С‚СЊ РІ <b>Р»СЋР±С‹С…</b> РїСЂРёР»РѕР¶РµРЅРёСЏС… СЃ РїРѕРґРґРµСЂР¶РєРѕР№ <b>VLESS / Reality</b></div>
                    </div>
                    <div class="page-slide instruction-page" ref="instructionPage" :aria-hidden="!showInstructionOverlay" role="dialog" aria-modal="true" tabindex="-1">
                        <div class="instruction-inner">
                            <div class="overlay-header">
                                <button class="back-button" type="button" @click="closeInstructionOverlay">
                                    <i class="fa-solid fa-arrow-left"></i>
                                    <span>РќР°Р·Р°Рґ</span>
                                </button>
                                    <img src="<?php echo htmlspecialchars($appConfig['image'], ENT_QUOTES, 'UTF-8'); ?>" class="overlay-logo" alt="<?php echo htmlspecialchars($appConfig['name'], ENT_QUOTES, 'UTF-8'); ?>">
                            </div>
                            <div class="tv-instruction-card">
                                <h1>Android TV вЂ” <?php echo htmlspecialchars($appConfig['name'], ENT_QUOTES, 'UTF-8'); ?></h1>
                                <p>РЎР»РµРґСѓР№С‚Рµ СЌС‚РёРј С€Р°РіР°Рј, С‡С‚РѕР±С‹ СѓСЃС‚Р°РЅРѕРІРёС‚СЊ РїСЂРёР»РѕР¶РµРЅРёРµ Рё Р°РєС‚РёРІРёСЂРѕРІР°С‚СЊ РєР»СЋС‡ РїРѕРґРєР»СЋС‡РµРЅРёСЏ РЅР° Android TV.</p>
                                <ol class="tv-instruction-list">
                                    <li>РћС‚РєСЂРѕР№С‚Рµ <strong>Google Play</strong> РЅР° С‚РµР»РµРІРёР·РѕСЂРµ Рё СѓСЃС‚Р°РЅРѕРІРёС‚Рµ <a href="<?php echo htmlspecialchars($appConfig['google_play'], ENT_QUOTES, 'UTF-8'); ?>" target="_blank" rel="noopener"><?php echo htmlspecialchars($appConfig['name'], ENT_QUOTES, 'UTF-8'); ?></a>. Р•СЃР»Рё РјР°СЂРєРµС‚ РЅРµРґРѕСЃС‚СѓРїРµРЅ, СЃРєР°С‡Р°Р№С‚Рµ <a href="<?php echo htmlspecialchars($appConfig['android_tv_apk'], ENT_QUOTES, 'UTF-8'); ?>" target="_blank" rel="noopener">APK-С„Р°Р№Р»</a> Рё СѓСЃС‚Р°РЅРѕРІРёС‚Рµ РµРіРѕ РІСЂСѓС‡РЅСѓСЋ СЃ USB-РЅР°РєРѕРїРёС‚РµР»СЏ.</li>
                                    <li>Р—Р°РїСѓСЃС‚РёС‚Рµ <?php echo htmlspecialchars($appConfig['name'], ENT_QUOTES, 'UTF-8'); ?>, РґР°Р№С‚Рµ РїСЂРёР»РѕР¶РµРЅРёСЋ РІСЃРµ Р·Р°РїСЂРѕС€РµРЅРЅС‹Рµ СЂР°Р·СЂРµС€РµРЅРёСЏ Рё Р·Р°РІРµСЂС€РёС‚Рµ РїРµСЂРІРѕРЅР°С‡Р°Р»СЊРЅСѓСЋ РЅР°СЃС‚СЂРѕР№РєСѓ.</li>
                                    <li>Р”РѕР±Р°РІСЊС‚Рµ РєР»СЋС‡ РІ РїСЂРёР»РѕР¶РµРЅРёСЏ <strong>СЃР»РµРґСѓСЏ РёРЅСЃС‚СЂСѓРєС†РёРё РЅР° СЌРєСЂР°РЅРµ С‚РµР»РµРІРёР·РѕСЂР°.</strong></li>
                                </ol>
                                <div class="tv-instruction-note">
                                    Р•СЃР»Рё СЃС‚РѕР»РєРЅС‘С‚РµСЃСЊ СЃРѕ СЃР»РѕР¶РЅРѕСЃС‚СЏРјРё РїСЂРё СѓСЃС‚Р°РЅРѕРІРєРµ РёР· APK, РІРєР»СЋС‡РёС‚Рµ В«РќРµРёР·РІРµСЃС‚РЅС‹Рµ РёСЃС‚РѕС‡РЅРёРєРёВ» РІ РЅР°СЃС‚СЂРѕР№РєР°С… Android TV Рё РїРѕРІС‚РѕСЂРёС‚Рµ РїРѕРїС‹С‚РєСѓ.<br><br>РР»Рё РѕР±СЂР°С‚РёС‚РµСЃСЊ Рє РЅР°Рј <a href="https://t.me/prsta_helpbot" target="_blank" rel="noopener"><strong>РІ РїРѕРґРґРµСЂР¶РєСѓ</strong></a> вќ¤пёЏ
                                </div>
                                <button class="instruction-back-button" type="button" @click="closeInstructionOverlay">
                                    <i class="fa-solid fa-arrow-left"></i>
                                    <span>РќР°Р·Р°Рґ</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bootstrap JS -->
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script type="text/javascript">
            function copyToClipboard() {
                const urlParams = new URLSearchParams(window.location.search);
                const key = urlParams.get('key') || '';
                navigator.clipboard.writeText(key).then(() => {
                    alert("РљР»СЋС‡ СЃРєРѕРїРёСЂРѕРІР°РЅ!");
                }).catch(err => {
                    console.error("РћС€РёР±РєР° РїСЂРё РєРѕРїРёСЂРѕРІР°РЅРёРё:", err);
                });
            }
        </script>
        <script type="text/javascript">
            const app = Vue.createApp({
    data() {
        return {
            theme: this.detectInitialTheme(),
            selectedOS: "",
            selectedOSText: "Android", // РўРµРєСЃС‚ РєРЅРѕРїРєРё
            selectedOSIcon: "fa-brands fa-android", // РРєРѕРЅРєР° РєРЅРѕРїРєРё // РћРїСЂРµРґРµР»СЏРµРј С‚РµРјСѓ СЃСЂР°Р·Сѓ
            showSupportNotification: false,
            showInstructionOverlay: false,
            previousScrollTop: 0,
            bodyOverflowCache: '',
            showHiddifyNotification: false,
            showHappNotification: false,
            clientConfig: <?php echo json_encode($appConfig, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE); ?>,
            subscriptionUrl: '',
            operatingSystems: ["iOS", "macOS", "Android", "Windows", "Android TV"],
            osIcons: {
                "iOS": "fa-brands fa-apple",
                "macOS": "fa-brands fa-apple",
                "Android": "fa-brands fa-android",
                "Windows": "fa-brands fa-windows",
                "Android TV": "fa-solid fa-tv",
                "V2Box": "fa-brands fa-apple",
            },
            selectedOS: "",
            showNotification: false,
            buttonState: {
                text: "РЎРєРѕРїРёСЂРѕРІР°С‚СЊ РєР»СЋС‡",
                icon: "fa-solid fa-copy",
                disabled: false,
                noPointerEvents: false,
            },
            copied: false,
            showCopyNotification: false,
        };
    },
    methods: {
            copyToClipboard() {
            const urlParams = new URLSearchParams(window.location.search);
            const key = urlParams.get('key') || '';
            navigator.clipboard.writeText(key).then(() => {
                this.buttonState = {
                    text: "РљР»СЋС‡ СЃРєРѕРїРёСЂРѕРІР°РЅ",
                    icon: "fa-solid fa-check",
                    disabled: true,
                    noPointerEvents: true,
                };
                setTimeout(() => {
                    this.buttonState = {
                        text: "РЎРєРѕРїРёСЂРѕРІР°С‚СЊ РєР»СЋС‡",
                        icon: "fa-solid fa-copy",
                        disabled: false,
                        noPointerEvents: false,
                    };
                }, 5000);
            }).catch(err => {
                console.error('РћС€РёР±РєР° РїСЂРё РєРѕРїРёСЂРѕРІР°РЅРёРё РІ Р±СѓС„РµСЂ РѕР±РјРµРЅР°: ', err);
            })
            },
            openInstructionOverlay() {
                this.previousScrollTop = window.scrollY || document.documentElement.scrollTop || 0;
                this.bodyOverflowCache = document.body.style.overflow;
                document.body.style.overflow = 'hidden';
                this.showInstructionOverlay = true;
                this.$nextTick(() => {
                    window.scrollTo(0, 0);
                    if (this.$refs.instructionPage) {
                        this.$refs.instructionPage.focus();
                    }
                });
            },
            closeInstructionOverlay() {
                this.showInstructionOverlay = false;
                document.body.style.overflow = this.bodyOverflowCache || '';
                this.bodyOverflowCache = '';
                this.$nextTick(() => {
                    window.scrollTo(0, this.previousScrollTop || 0);
                    if (this.$refs.mainPage) {
                        this.$refs.mainPage.focus();
                    }
                });
            },
            handleOverlayKeydown(event) {
                if (event.key === 'Escape' && this.showInstructionOverlay) {
                    this.closeInstructionOverlay();
                }
            },
            getInstructionText() {
            switch (this.selectedOS) {
                case "iOS":
                    return {
                        header: "РРЅСЃС‚СЂСѓРєС†РёСЏ РґР»СЏ iOS",
                        text: "гѓ» РЈСЃС‚Р°РЅРѕРІРёС‚Рµ РїСЂРёР»РѕР¶РµРЅРёРµ HAPP<br>гѓ» РќР°Р¶РјРёС‚Рµ РєРЅРѕРїРєСѓ В«Р”РѕР±Р°РІРёС‚СЊ РєР»СЋС‡В»"
                    };
                case "macOS":
                    return {
                        header: "РРЅСЃС‚СЂСѓРєС†РёСЏ РґР»СЏ macOS",
                        text: "гѓ» РЎРєР°С‡Р°Р№С‚Рµ РїСЂРёР»РѕР¶РµРЅРёРµ HAPP<br>гѓ» РћС‚РєСЂРѕР№С‚Рµ С„Р°Р№Р» .dmg<br>гѓ» РќР°Р¶РјРёС‚Рµ РєРЅРѕРїРєСѓ В«Р”РѕР±Р°РІРёС‚СЊ РєР»СЋС‡В»"
                    };
                case "Android":
                    return {
                        header: "РРЅСЃС‚СЂСѓРєС†РёСЏ РґР»СЏ Android",
                        text: "гѓ» РЈСЃС‚Р°РЅРѕРІРёС‚Рµ РїСЂРёР»РѕР¶РµРЅРёРµ HAPP<br>гѓ» РќР°Р¶РјРёС‚Рµ РєРЅРѕРїРєСѓ В«Р”РѕР±Р°РІРёС‚СЊ РєР»СЋС‡В»"
                    };
                case "Windows":
                    return {
                        header: "РРЅСЃС‚СЂСѓРєС†РёСЏ РґР»СЏ Windows",
                        text: "гѓ» РЈСЃС‚Р°РЅРѕРІРёС‚Рµ РїСЂРёР»РѕР¶РµРЅРёРµ HAPP<br>гѓ» РќР°Р¶РјРёС‚Рµ РєРЅРѕРїРєСѓ В«Р”РѕР±Р°РІРёС‚СЊ РєР»СЋС‡В»"
                    };
                case "Android TV":
                    return {
                        header: "РРЅСЃС‚СЂСѓРєС†РёСЏ РґР»СЏ Android TV",
                        text: "гѓ» РЈСЃС‚Р°РЅРѕРІРёС‚Рµ РїСЂРёР»РѕР¶РµРЅРёРµ HAPP<br>гѓ» Р—Р°РїСѓСЃС‚РёС‚Рµ РµРіРѕ<br>гѓ» РЎР»РµРґСѓР№С‚Рµ РёРЅСЃС‚СЂСѓРєС†РёРё РЅР° СЌРєСЂР°РЅРµ"
                    };
                default:
                    return {
                        header: "РРЅСЃС‚СЂСѓРєС†РёСЏ",
                        text: "Р’С‹Р±РµСЂРёС‚Рµ РІР°С€Сѓ РѕРїРµСЂР°С†РёРѕРЅРЅСѓСЋ СЃРёСЃС‚РµРјСѓ РґР»СЏ РїРѕР»СѓС‡РµРЅРёСЏ РёРЅСЃС‚СЂСѓРєС†РёРё."
                    };
            }
        },
        detectInitialTheme() {
            return "dark";
        },
        applyTheme(theme) {
            this.theme = "dark";
            document.body.setAttribute("data-theme", "dark");
            localStorage.setItem("theme", "dark");
        },
        switchTheme() {
            this.applyTheme("dark");
        },
        openSupportLink() {
            window.open('https://t.me/prsta_helpbot', '_blank');
        },
        initializeSubscriptionUrl() {
            const urlParams = new URLSearchParams(window.location.search);
            const key = urlParams.get('key');
            this.subscriptionUrl = key ? key : 'https://api.hidy.me/sub';
        },
        getClientLink(client) {
        const urlParams = new URLSearchParams(window.location.search);
        const key = urlParams.get('key') || '';
        const isRussianStore = (navigator.language || '').toLowerCase().startsWith('ru');
        const clientLinks = {
            happ_add: `${this.clientConfig.add_scheme}${key}`,
            happ_appstore: isRussianStore ? this.clientConfig.appstore_rus : this.clientConfig.appstore_global,
            happ_googleplay: this.clientConfig.google_play,
            v2box_appstore: `https://apps.apple.com/ru/app/v2box-v2ray-client/id6446814690`,
            v2box_open: `v2box://`,
            hiddify_microsoftstore: `https://apps.microsoft.com/detail/9pdfnl3qv2s5?hl=ru-RU&gl=DE`,
            hiddify_add: `hiddify://import/${key}`,
            vpn4tv_googleplay: this.clientConfig.google_play,
            vpn4tv_apk: this.clientConfig.android_tv_apk,
        };
        return clientLinks[client] || key;
    },
    handleHiddifyClick() {
        const link = this.getClientLink('hiddify_microsoftstore');
        window.open(link, '_blank');
    },
    handleHiddifyPCClick() {
        const link = this.getClientLink('hiddify_microsoftstore');
        window.open(link, '_blank');
    },
    handleHappClick() {
        const link = this.getClientLink('happ_googleplay');
        window.open(link, '_blank');
    },
    handleAppStoreClick() {
        const link = this.getClientLink('happ_appstore');
        window.open(link, '_blank');
    },
    handleVpn4TVClick() {
        const link = this.getClientLink('vpn4tv_apk');
        window.open(link, '_blank');
    },
    handleHappAdd() {
        const link = this.getClientLink('happ_add')
        window.open(link, '_blank');
    },
    handleHiddifyAdd() {
        const link = this.getClientLink('hiddify_add')
        window.open(link, '_blank');
    },
        CreateLink(client) {
            const clientLink = this.getClientLink(client);
            if (clientLink) {
                const link = document.createElement('a');
                link.href = clientLink;
                link.target = '_blank';
                link.click();
            }
        },
        handleAppStoreClick() {
            this.CreateLink('happ_appstore');
            this.showNotification = false;
            setTimeout(() => {
                this.showNotification = true;
            }, 3000);
        },
        switchToV2Box() {
            this.selectedOS = 'V2Box';
        },
        copyToClipboardBtn() {
            const urlParams = new URLSearchParams(window.location.search);
            const key = urlParams.get('key');
            if (key) {
                navigator.clipboard.writeText(key).then(() => {
                    this.copied = true;
                    this.showCopyNotification = true;
                    setTimeout(() => {
                        this.copied = false;
                        this.showCopyNotification = false;
                    }, 8000);
                }).catch(err => {
                    console.error("РћС€РёР±РєР° РєРѕРїРёСЂРѕРІР°РЅРёСЏ:", err);
                });
            } else {
                alert('РљР»СЋС‡ РЅРµ РЅР°Р№РґРµРЅ РІ СЃСЃС‹Р»РєРµ!');
            }
        },
        detectOS() {
    const userAgent = navigator.userAgent.toLowerCase();
    if (userAgent.includes("windows")) return "Windows";
    if (userAgent.includes("iphone") || userAgent.includes("ipad") || userAgent.includes("ipod")) return "iOS";
    if (userAgent.includes("mac")) return "macOS";
    if (userAgent.includes("android")) return "Android";
    if (userAgent.includes("tv")) return "Android TV";
    return "Р’С‹Р±РµСЂРёС‚Рµ РћРЎ"; // Р•СЃР»Рё РћРЎ РЅРµ РЅР°Р№РґРµРЅР°
}
,
        setOS(os) {
    this.selectedOS = os;
    this.updateActiveSection();
    this.updateInstructionText();

    // РћР±РЅРѕРІР»СЏРµРј С‚РµРєСЃС‚ Рё РёРєРѕРЅРєСѓ РґР»СЏ РєРЅРѕРїРєРё РјРµРЅСЋ
    switch (os) {
        case "iOS":
            this.selectedOSText = "iOS";
            this.selectedOSIcon = "fa-brands fa-apple";
            break;
        case "macOS":
            this.selectedOSText = "macOS";
            this.selectedOSIcon = "fa-brands fa-apple";
            break;
        case "Android":
            this.selectedOSText = "Android";
            this.selectedOSIcon = "fa-brands fa-android";
            break;
        case "Windows":
            this.selectedOSText = "Windows";
            this.selectedOSIcon = "fa-brands fa-windows";
            break;
        case "Android TV":
            this.selectedOSText = "Android TV";
            this.selectedOSIcon = "fa-solid fa-tv";
            break;
    }
},

    updateActiveSection() {
        const sections = document.querySelectorAll('.os-section');
        sections.forEach(section => {
            section.classList.remove('active');
        });

        const activeSection = document.querySelector(`.os-section.${this.selectedOS.toLowerCase().replace(/ /g, '-')}`);
        if (activeSection) {
            activeSection.classList.add('active');
        }
    },
    updateInstructionText() {
        const instructions = this.getInstructionText();
        this.$nextTick(() => {
            document.querySelector('.app-inst_header').innerHTML = instructions.header;
            document.querySelector('.app-inst_text').innerHTML = instructions.text;
        });
    },
        setupTelegramThemeListener() {
            if (window.Telegram && window.Telegram.WebApp) {
                window.Telegram.WebApp.ready();
                this.applyTheme("dark");
            }
        }
    },
    mounted() {
    this.applyTheme(this.theme);
    this.initializeSubscriptionUrl();

    // Р’С‹Р±РёСЂР°РµРј РѕРїРµСЂР°С†РёРѕРЅРЅСѓСЋ СЃРёСЃС‚РµРјСѓ СЃСЂР°Р·Сѓ РїСЂРё Р·Р°РіСЂСѓР·РєРµ
    this.setOS(this.detectOS());

    // РћР±РЅРѕРІР»СЏРµРј Р°РєС‚РёРІРЅСѓСЋ СЃРµРєС†РёСЋ РЅР° РѕСЃРЅРѕРІРµ РћРЎ
    this.updateActiveSection();

    // РћР±РЅРѕРІР»СЏРµРј С‚РµРєСЃС‚ РёРЅСЃС‚СЂСѓРєС†РёРё
    this.updateInstructionText();

    this.setupTelegramThemeListener();

    document.addEventListener('keydown', this.handleOverlayKeydown);

    setTimeout(() => {
        this.showSupportNotification = true;
    }, 10000);
},
    beforeUnmount() {
        document.removeEventListener('keydown', this.handleOverlayKeydown);
    }

});

app.mount("#app");
        </script>
        <script type="text/javascript">
            document.addEventListener("DOMContentLoaded", function() {
                const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
                tooltipTriggerList.forEach(function(tooltipTriggerEl) {
                    new bootstrap.Tooltip(tooltipTriggerEl);
                });
            });
        </script>
    
</body></html>
