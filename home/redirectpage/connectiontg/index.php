<?php
$rawKey = isset($_GET['key']) ? trim((string) $_GET['key']) : '';
$encodedKey = rawurlencode($rawKey);
$copyKey = htmlspecialchars($rawKey, ENT_QUOTES, 'UTF-8');
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="robots" content="noindex, nofollow">
    <title>Простовпн • Подключение устройства</title>
    <style>
        @font-face {
            font-family: "Teletactile";
            src: url("./fonts/TeletactileRus2.ttf") format("truetype");
            font-display: swap;
        }

        @font-face {
            font-family: "Pixelizer";
            src: url("./fonts/PixelizerBold.ttf") format("truetype");
            font-display: swap;
        }

        :root {
            color-scheme: dark;
            --surface: rgba(14, 20, 33, 0.92);
            --surface-2: rgba(21, 30, 47, 0.95);
            --line: rgba(255, 255, 255, 0.08);
            --text: #f4f7fb;
            --muted: #97a4bb;
            --shadow: 0 28px 90px rgba(0, 0, 0, 0.45);
            --radius-xl: 32px;
            --container: 1240px;
        }

        * {
            box-sizing: border-box;
        }

        html {
            min-height: 100%;
            background:
                radial-gradient(circle at top left, rgba(87, 167, 255, 0.18), transparent 32%),
                radial-gradient(circle at top right, rgba(20, 208, 179, 0.14), transparent 24%),
                linear-gradient(180deg, #08101b 0%, #05070c 52%, #030509 100%);
        }

        body {
            margin: 0;
            min-height: 100vh;
            font-family: "Teletactile", Arial, sans-serif;
            color: var(--text);
            background: transparent;
            overflow-x: hidden;
        }

        body::before,
        body::after {
            content: "";
            position: fixed;
            pointer-events: none;
            z-index: 0;
            filter: blur(60px);
            opacity: 0.55;
        }

        body::before {
            top: -80px;
            left: -120px;
            width: 340px;
            height: 340px;
            background: rgba(87, 167, 255, 0.28);
        }

        body::after {
            right: -80px;
            bottom: 40px;
            width: 300px;
            height: 300px;
            background: rgba(20, 208, 179, 0.18);
        }

        a {
            color: inherit;
            text-decoration: none;
        }

        button {
            font: inherit;
        }

        .page-shell {
            position: relative;
            z-index: 1;
            width: min(var(--container), calc(100% - 28px));
            margin: 0 auto;
            padding: 24px 0 32px;
        }

        .topbar {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 18px;
            margin-bottom: 22px;
        }

        .brand {
            display: inline-flex;
            align-items: center;
            gap: 14px;
            min-width: 0;
        }

        .brand-mark {
            width: 54px;
            height: 54px;
            border-radius: 18px;
            background:
                linear-gradient(145deg, rgba(87, 167, 255, 0.92), rgba(20, 208, 179, 0.68)),
                rgba(255, 255, 255, 0.06);
            display: grid;
            place-items: center;
            box-shadow: 0 18px 32px rgba(5, 12, 25, 0.32);
        }

        .brand-mark img {
            width: 34px;
            height: 34px;
            object-fit: contain;
        }

        .brand-badge {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 7px 12px;
            border-radius: 999px;
            background: rgba(255, 255, 255, 0.06);
            border: 1px solid rgba(255, 255, 255, 0.08);
            color: #d7e7ff;
            font-size: 12px;
            letter-spacing: 0.16em;
            text-transform: uppercase;
            margin-bottom: 8px;
        }

        .brand-badge strong {
            font-family: "Pixelizer", monospace;
            letter-spacing: 0.08em;
            font-size: 13px;
        }

        .brand-title {
            margin: 0;
            font-size: clamp(28px, 4vw, 52px);
            line-height: 0.96;
            letter-spacing: -0.04em;
        }

        .brand-subtitle {
            margin: 10px 0 0;
            color: var(--muted);
            font-size: 16px;
            line-height: 1.4;
            max-width: 650px;
        }

        .topbar-actions {
            display: flex;
            align-items: center;
            gap: 10px;
            flex-wrap: wrap;
            justify-content: flex-end;
        }

        .ghost-link {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            padding: 12px 16px;
            border-radius: 999px;
            border: 1px solid var(--line);
            background: rgba(255, 255, 255, 0.03);
            color: #d8e3f8;
            transition: transform 0.18s ease, border-color 0.18s ease, background 0.18s ease;
            cursor: pointer;
        }

        .ghost-link:hover {
            transform: translateY(-1px);
            border-color: rgba(87, 167, 255, 0.4);
            background: rgba(87, 167, 255, 0.08);
        }

        .hero {
            display: grid;
            grid-template-columns: minmax(0, 1.15fr) minmax(320px, 0.85fr);
            gap: 24px;
            align-items: stretch;
            margin-bottom: 22px;
        }

        .hero-card,
        .panel {
            position: relative;
            overflow: hidden;
            border-radius: var(--radius-xl);
            background:
                linear-gradient(180deg, rgba(255, 255, 255, 0.03), transparent 32%),
                var(--surface);
            border: 1px solid var(--line);
            box-shadow: var(--shadow);
        }

        .hero-card {
            padding: 30px;
        }

        .hero-card::before {
            content: "";
            position: absolute;
            inset: 0;
            background:
                linear-gradient(135deg, rgba(87, 167, 255, 0.2), transparent 42%),
                radial-gradient(circle at 90% 10%, rgba(20, 208, 179, 0.16), transparent 28%);
            pointer-events: none;
        }

        .hero-card > * {
            position: relative;
            z-index: 1;
        }

        .eyebrow {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            padding: 8px 13px;
            border-radius: 999px;
            background: rgba(255, 255, 255, 0.06);
            border: 1px solid rgba(255, 255, 255, 0.08);
            color: #dbe8ff;
            font-size: 13px;
            letter-spacing: 0.12em;
            text-transform: uppercase;
            margin-bottom: 16px;
        }

        .hero-headline {
            margin: 0 0 14px;
            font-size: clamp(32px, 5vw, 66px);
            line-height: 0.94;
            letter-spacing: -0.055em;
            max-width: 760px;
        }

        .hero-description {
            margin: 0;
            max-width: 720px;
            color: #b7c6dc;
            font-size: 17px;
            line-height: 1.5;
        }

        .hero-stats {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 14px;
            margin-top: 24px;
        }

        .hero-stat {
            padding: 16px 18px;
            border-radius: 20px;
            background: rgba(8, 14, 24, 0.72);
            border: 1px solid rgba(255, 255, 255, 0.08);
        }

        .hero-stat-label {
            color: var(--muted);
            font-size: 13px;
            margin-bottom: 8px;
        }

        .hero-stat-value {
            font-size: clamp(19px, 2vw, 26px);
            line-height: 1;
        }

        .hero-visual {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            padding: 28px;
            background:
                radial-gradient(circle at top, rgba(87, 167, 255, 0.18), transparent 40%),
                linear-gradient(180deg, rgba(16, 24, 38, 0.96), rgba(10, 15, 26, 0.96));
        }

        .visual-badge {
            width: fit-content;
            padding: 8px 12px;
            border-radius: 999px;
            background: rgba(20, 208, 179, 0.12);
            border: 1px solid rgba(20, 208, 179, 0.22);
            color: #91f1df;
            font-size: 13px;
        }

        .visual-stack {
            display: grid;
            gap: 14px;
            margin: 24px 0;
        }

        .visual-chip {
            display: flex;
            align-items: center;
            gap: 14px;
            padding: 16px 18px;
            border-radius: 20px;
            background: rgba(255, 255, 255, 0.04);
            border: 1px solid rgba(255, 255, 255, 0.08);
        }

        .visual-chip-index {
            width: 36px;
            height: 36px;
            border-radius: 12px;
            display: grid;
            place-items: center;
            background: linear-gradient(135deg, rgba(87, 167, 255, 0.9), rgba(20, 208, 179, 0.85));
            color: #041019;
            font-size: 18px;
        }

        .visual-chip strong {
            display: block;
            font-size: 18px;
        }

        .visual-chip span {
            display: block;
            color: var(--muted);
            font-size: 14px;
            margin-top: 4px;
            line-height: 1.4;
        }

        .visual-card {
            display: grid;
            grid-template-columns: 1fr auto;
            gap: 18px;
            align-items: center;
            padding: 18px 20px;
            border-radius: 24px;
            background:
                linear-gradient(140deg, rgba(87, 167, 255, 0.12), rgba(255, 255, 255, 0.04)),
                rgba(255, 255, 255, 0.04);
            border: 1px solid rgba(87, 167, 255, 0.18);
        }

        .visual-card-title {
            margin: 0 0 8px;
            font-size: 22px;
        }

        .visual-card p {
            margin: 0;
            color: var(--muted);
            line-height: 1.45;
        }

        .visual-device {
            width: 118px;
            aspect-ratio: 0.76;
            object-fit: contain;
            filter: drop-shadow(0 18px 28px rgba(0, 0, 0, 0.26));
        }

        .panel {
            padding: 24px;
        }

        .device-switcher {
            display: grid;
            grid-template-columns: repeat(4, minmax(0, 1fr));
            gap: 10px;
            margin-bottom: 18px;
        }

        .device-tab {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            min-height: 62px;
            padding: 14px 16px;
            border-radius: 18px;
            border: 1px solid var(--line);
            background: rgba(255, 255, 255, 0.04);
            color: #ccd7eb;
            cursor: pointer;
            transition: transform 0.18s ease, border-color 0.18s ease, background 0.18s ease, box-shadow 0.18s ease;
        }

        .device-tab:hover {
            transform: translateY(-1px);
            border-color: rgba(87, 167, 255, 0.35);
        }

        .device-tab.active {
            background:
                linear-gradient(135deg, rgba(87, 167, 255, 0.22), rgba(20, 208, 179, 0.14)),
                rgba(255, 255, 255, 0.05);
            border-color: rgba(87, 167, 255, 0.42);
            box-shadow: inset 0 0 0 1px rgba(255, 255, 255, 0.04);
            color: #ffffff;
        }

        .device-tab-icon {
            width: 34px;
            height: 34px;
            border-radius: 12px;
            display: grid;
            place-items: center;
            background: rgba(255, 255, 255, 0.06);
            font-size: 16px;
        }

        .device-layout {
            display: grid;
            grid-template-columns: minmax(0, 1.05fr) minmax(300px, 0.95fr);
            gap: 18px;
            align-items: start;
        }

        .device-card,
        .support-card {
            border-radius: 26px;
            background: var(--surface-2);
            border: 1px solid rgba(255, 255, 255, 0.06);
        }

        .device-card {
            padding: 22px;
        }

        .device-head {
            display: grid;
            grid-template-columns: 88px 1fr;
            gap: 18px;
            align-items: center;
            margin-bottom: 20px;
        }

        .device-figure {
            width: 88px;
            height: 88px;
            border-radius: 26px;
            background:
                radial-gradient(circle at top, rgba(87, 167, 255, 0.18), transparent 55%),
                rgba(255, 255, 255, 0.03);
            border: 1px solid rgba(255, 255, 255, 0.08);
            display: grid;
            place-items: center;
            overflow: hidden;
        }

        .device-figure img {
            width: 74px;
            height: 74px;
            object-fit: contain;
        }

        .device-platform {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 7px 11px;
            border-radius: 999px;
            border: 1px solid rgba(255, 255, 255, 0.08);
            background: rgba(255, 255, 255, 0.04);
            color: #d2def1;
            font-size: 13px;
            margin-bottom: 12px;
        }

        .device-title {
            margin: 0 0 8px;
            font-size: clamp(28px, 4vw, 42px);
            line-height: 0.96;
            letter-spacing: -0.045em;
        }

        .device-description {
            margin: 0;
            color: var(--muted);
            font-size: 15px;
            line-height: 1.5;
        }

        .spec-grid,
        .step-grid {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 12px;
        }

        .spec-card,
        .step-card {
            padding: 16px;
            border-radius: 18px;
            background: rgba(255, 255, 255, 0.04);
            border: 1px solid rgba(255, 255, 255, 0.06);
        }

        .spec-card strong,
        .step-card strong {
            display: block;
            font-size: 14px;
            color: #f4f8ff;
            margin-bottom: 6px;
        }

        .spec-card span,
        .step-card span {
            display: block;
            color: var(--muted);
            font-size: 13px;
            line-height: 1.45;
        }

        .step-grid {
            margin-top: 12px;
        }

        .step-number {
            width: 34px;
            height: 34px;
            margin-bottom: 12px;
            border-radius: 12px;
            background: rgba(87, 167, 255, 0.16);
            border: 1px solid rgba(87, 167, 255, 0.28);
            display: grid;
            place-items: center;
            color: #b7d9ff;
            font-size: 15px;
        }

        .button-grid {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 12px;
            margin-top: 18px;
        }

        .action-button {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 12px;
            min-height: 60px;
            padding: 16px 18px;
            border: 0;
            border-radius: 18px;
            color: #061018;
            cursor: pointer;
            transition: transform 0.18s ease, filter 0.18s ease, box-shadow 0.18s ease;
            text-align: center;
        }

        .action-button:hover {
            transform: translateY(-1px);
            filter: brightness(1.03);
        }

        .action-button span {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 34px;
            height: 34px;
            border-radius: 12px;
            background: rgba(7, 12, 20, 0.12);
            font-size: 16px;
        }

        .action-button strong {
            font-size: 16px;
            line-height: 1.1;
        }

        .action-button small {
            display: block;
            margin-top: 4px;
            color: rgba(6, 16, 24, 0.76);
            font-size: 12px;
            line-height: 1.3;
        }

        .action-button.is-primary {
            background: linear-gradient(135deg, #5cb1ff, #73f3d4);
            box-shadow: 0 16px 28px rgba(45, 135, 215, 0.18);
        }

        .action-button.is-secondary {
            background: linear-gradient(135deg, #ffffff, #dbe8ff);
        }

        .action-button.is-highlight {
            background: linear-gradient(135deg, #ffb36d, #ffd495);
        }

        .action-button.is-neutral {
            background: linear-gradient(135deg, #d7deea, #f4f7fb);
        }

        .support-card {
            padding: 22px;
            display: grid;
            gap: 16px;
        }

        .support-title {
            margin: 0;
            font-size: 22px;
            line-height: 1.08;
        }

        .support-copy {
            margin: 0;
            color: var(--muted);
            font-size: 15px;
            line-height: 1.5;
        }

        .support-list {
            display: grid;
            gap: 10px;
        }

        .support-item {
            display: flex;
            align-items: flex-start;
            gap: 12px;
            padding: 14px 16px;
            border-radius: 18px;
            background: rgba(255, 255, 255, 0.04);
            border: 1px solid rgba(255, 255, 255, 0.06);
        }

        .support-item-mark {
            width: 30px;
            height: 30px;
            border-radius: 10px;
            display: grid;
            place-items: center;
            background: rgba(87, 167, 255, 0.12);
            color: #b7d9ff;
            flex: none;
            font-size: 14px;
        }

        .support-item strong {
            display: block;
            margin-bottom: 4px;
            font-size: 15px;
        }

        .support-item span {
            display: block;
            color: var(--muted);
            font-size: 13px;
            line-height: 1.45;
        }

        .key-panel {
            display: grid;
            gap: 10px;
            padding: 16px;
            border-radius: 20px;
            background: rgba(6, 10, 18, 0.7);
            border: 1px solid rgba(255, 255, 255, 0.06);
        }

        .key-label {
            color: var(--muted);
            font-size: 13px;
        }

        .key-box {
            padding: 14px 16px;
            border-radius: 16px;
            background: rgba(255, 255, 255, 0.04);
            border: 1px solid rgba(255, 255, 255, 0.06);
            font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, monospace;
            font-size: 12px;
            line-height: 1.5;
            color: #d9e7ff;
            word-break: break-all;
        }

        .support-actions {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 10px;
        }

        .tiny-button {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            min-height: 48px;
            padding: 12px 14px;
            border-radius: 16px;
            border: 1px solid var(--line);
            background: rgba(255, 255, 255, 0.04);
            color: #edf4ff;
            cursor: pointer;
            transition: transform 0.18s ease, border-color 0.18s ease, background 0.18s ease;
        }

        .tiny-button:hover {
            transform: translateY(-1px);
            border-color: rgba(87, 167, 255, 0.35);
            background: rgba(87, 167, 255, 0.08);
        }

        .notice-grid {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 16px;
            margin-top: 22px;
        }

        .notice-card {
            padding: 18px 20px;
            border-radius: 24px;
            background: rgba(255, 255, 255, 0.04);
            border: 1px solid rgba(255, 255, 255, 0.06);
        }

        .notice-card h3 {
            margin: 0 0 10px;
            font-size: 16px;
        }

        .notice-card p {
            margin: 0;
            color: var(--muted);
            line-height: 1.5;
            font-size: 14px;
        }

        .support-footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 14px;
            margin-top: 22px;
            color: var(--muted);
            font-size: 14px;
            flex-wrap: wrap;
        }

        .support-footer a {
            color: #b9d9ff;
        }

        .toast {
            position: fixed;
            left: 50%;
            bottom: 22px;
            transform: translate(-50%, 24px);
            min-width: min(540px, calc(100% - 28px));
            padding: 16px 18px;
            border-radius: 18px;
            background: rgba(7, 12, 20, 0.94);
            border: 1px solid rgba(87, 167, 255, 0.22);
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.3);
            display: flex;
            align-items: center;
            gap: 12px;
            color: #eef5ff;
            opacity: 0;
            pointer-events: none;
            transition: opacity 0.22s ease, transform 0.22s ease;
            z-index: 40;
        }

        .toast.show {
            opacity: 1;
            transform: translate(-50%, 0);
        }

        .toast-mark {
            width: 34px;
            height: 34px;
            border-radius: 12px;
            display: grid;
            place-items: center;
            background: rgba(20, 208, 179, 0.16);
            color: #98f0e0;
            flex: none;
        }

        .overlay {
            position: fixed;
            inset: 0;
            padding: 20px;
            background: rgba(2, 4, 8, 0.76);
            backdrop-filter: blur(14px);
            display: none;
            align-items: center;
            justify-content: center;
            z-index: 50;
        }

        .overlay.show {
            display: flex;
        }

        .overlay-card {
            width: min(720px, 100%);
            max-height: min(88vh, 900px);
            overflow: auto;
            padding: 28px;
            border-radius: 28px;
            background:
                linear-gradient(180deg, rgba(255, 255, 255, 0.04), transparent 30%),
                rgba(8, 13, 22, 0.96);
            border: 1px solid rgba(255, 255, 255, 0.08);
            box-shadow: var(--shadow);
        }

        .overlay-topbar {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 14px;
            margin-bottom: 18px;
        }

        .overlay-topbar h2 {
            margin: 0;
            font-size: clamp(28px, 4vw, 42px);
            line-height: 1;
            letter-spacing: -0.05em;
        }

        .overlay-close {
            width: 46px;
            height: 46px;
            border-radius: 16px;
            border: 1px solid rgba(255, 255, 255, 0.08);
            background: rgba(255, 255, 255, 0.05);
            color: #eff5ff;
            cursor: pointer;
        }

        .overlay-lead {
            margin: 0 0 18px;
            color: var(--muted);
            line-height: 1.6;
        }

        .overlay-steps {
            display: grid;
            gap: 12px;
        }

        .overlay-step {
            display: grid;
            grid-template-columns: 40px 1fr;
            gap: 14px;
            padding: 16px;
            border-radius: 18px;
            background: rgba(255, 255, 255, 0.04);
            border: 1px solid rgba(255, 255, 255, 0.06);
        }

        .overlay-step-index {
            width: 40px;
            height: 40px;
            border-radius: 14px;
            background: rgba(87, 167, 255, 0.16);
            color: #b7d9ff;
            display: grid;
            place-items: center;
        }

        .overlay-step strong {
            display: block;
            margin-bottom: 8px;
            font-size: 16px;
        }

        .overlay-step span,
        .overlay-step a {
            color: var(--muted);
            line-height: 1.55;
            font-size: 14px;
        }

        .overlay-note {
            margin-top: 16px;
            padding: 16px 18px;
            border-radius: 18px;
            background: rgba(255, 157, 87, 0.08);
            border: 1px solid rgba(255, 157, 87, 0.18);
            color: #ffcfaa;
            line-height: 1.55;
        }

        .overlay-actions {
            display: flex;
            gap: 12px;
            flex-wrap: wrap;
            margin-top: 18px;
        }

        .overlay-actions a,
        .overlay-actions button {
            flex: 1 1 200px;
        }

        .hidden-copy {
            position: absolute;
            inset: auto auto auto -10000px;
        }

        @media (max-width: 1100px) {
            .hero,
            .device-layout {
                grid-template-columns: 1fr;
            }

            .hero-visual {
                order: -1;
            }
        }

        @media (max-width: 820px) {
            .page-shell {
                width: min(100% - 18px, var(--container));
                padding-top: 14px;
            }

            .topbar {
                flex-direction: column;
                align-items: stretch;
                margin-bottom: 18px;
            }

            .topbar-actions {
                justify-content: stretch;
            }

            .topbar-actions > * {
                flex: 1 1 auto;
            }

            .hero-card,
            .hero-visual,
            .panel,
            .device-card,
            .support-card {
                padding: 20px;
            }

            .hero-stats,
            .notice-grid,
            .spec-grid,
            .step-grid,
            .button-grid,
            .support-actions {
                grid-template-columns: 1fr;
            }

            .device-switcher {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }
        }

        @media (max-width: 520px) {
            .hero-card,
            .hero-visual,
            .panel,
            .device-card,
            .support-card,
            .overlay-card {
                border-radius: 24px;
                padding: 18px;
            }

            .device-switcher {
                grid-template-columns: 1fr;
            }

            .action-button {
                min-height: 56px;
                justify-content: flex-start;
                padding: 15px 16px;
            }
        }
    </style>
</head>
<body>
    <input id="hiddenCopyField" class="hidden-copy" value="<?php echo $copyKey; ?>" readonly>
    <div class="page-shell">
        <header class="topbar">
            <div class="brand">
                <div class="brand-mark">
                    <img src="./img2/logo_light.svg" alt="Простовпн">
                </div>
                <div class="brand-copy">
                    <div class="brand-badge"><strong>Простовпн</strong><span>Подключение</span></div>
                    <h1 class="brand-title">Подключите устройство без лишней возни</h1>
                    <p class="brand-subtitle">Выберите ваше устройство, установите приложение и добавьте готовую подписку в пару нажатий. Все шаги и кнопки уже адаптированы под конкретную платформу.</p>
                </div>
            </div>
            <div class="topbar-actions">
                <a class="ghost-link" href="https://t.me/prsta_helpbot" target="_blank" rel="noopener">
                    <span>↗</span>
                    <span>Поддержка 24/7</span>
                </a>
                <button class="ghost-link" type="button" id="copyTopButton">
                    <span>⎘</span>
                    <span>Скопировать ссылку</span>
                </button>
            </div>
        </header>

        <section class="hero">
            <article class="hero-card">
                <div class="eyebrow">Готово к подключению</div>
                <h2 class="hero-headline">Одна страница для телефона, компьютера и телевизора</h2>
                <p class="hero-description">На мобильных устройствах акцент сделан на крупные кнопки и быстрый импорт ключа. На ПК и больших экранах интерфейс перестраивается в более широкий, удобный для чтения и установки формат.</p>
                <div class="hero-stats">
                    <div class="hero-stat">
                        <div class="hero-stat-label">Подписка уже подставлена</div>
                        <div class="hero-stat-value">Да, ключ готов</div>
                    </div>
                    <div class="hero-stat">
                        <div class="hero-stat-label">Способ подключения</div>
                        <div class="hero-stat-value">Через ссылку или копирование</div>
                    </div>
                    <div class="hero-stat">
                        <div class="hero-stat-label">Если что-то не работает</div>
                        <div class="hero-stat-value">Есть быстрый fallback</div>
                    </div>
                </div>
            </article>

            <aside class="hero-card hero-visual">
                <div class="visual-badge">Подсказки уже встроены</div>
                <div class="visual-stack">
                    <div class="visual-chip">
                        <div class="visual-chip-index">1</div>
                        <div>
                            <strong>Установите клиент</strong>
                            <span>Для каждого устройства есть своя кнопка установки: App Store, Google Play, APK или Windows installer.</span>
                        </div>
                    </div>
                    <div class="visual-chip">
                        <div class="visual-chip-index">2</div>
                        <div>
                            <strong>Добавьте подписку</strong>
                            <span>Если приложение поддерживает deep-link, импорт произойдёт автоматически через кнопку добавления.</span>
                        </div>
                    </div>
                    <div class="visual-chip">
                        <div class="visual-chip-index">3</div>
                        <div>
                            <strong>Скопируйте ключ вручную</strong>
                            <span>На случай, если автопереход не сработал, ключ уже готов к копированию и ручному импорту.</span>
                        </div>
                    </div>
                </div>
                <div class="visual-card">
                    <div>
                        <h3 class="visual-card-title">Красиво на телефоне и удобно на ПК</h3>
                        <p>Мобильная версия делает акцент на одну главную колонку и крупные действия, а десктопная раскрывает инструкции и подсказки параллельно, без длинной прокрутки.</p>
                    </div>
                    <img class="visual-device" src="./img2/app_happ.png" alt="Happ">
                </div>
            </aside>
        </section>

        <section class="panel">
            <div class="device-switcher" id="deviceSwitcher">
                <button class="device-tab active" type="button" data-os="android"><span class="device-tab-icon">🤖</span><span>Android</span></button>
                <button class="device-tab" type="button" data-os="ios"><span class="device-tab-icon"></span><span>iPhone / Mac</span></button>
                <button class="device-tab" type="button" data-os="windows"><span class="device-tab-icon">⊞</span><span>Windows</span></button>
                <button class="device-tab" type="button" data-os="tv"><span class="device-tab-icon">📺</span><span>Android TV</span></button>
            </div>

            <div class="device-layout">
                <article class="device-card">
                    <div class="device-head">
                        <div class="device-figure">
                            <img id="deviceImage" src="./img2/app_happ.png" alt="Клиент">
                        </div>
                        <div class="device-meta">
                            <div class="device-platform" id="devicePlatform">Рекомендуемый клиент</div>
                            <h2 class="device-title" id="deviceTitle">Happ для Android</h2>
                            <p class="device-description" id="deviceDescription">Лучший вариант для Android-смартфонов и планшетов. Можно установить через Google Play или APK, затем сразу импортировать подписку.</p>
                        </div>
                    </div>

                    <div class="spec-grid" id="specGrid"></div>
                    <div class="step-grid" id="stepGrid"></div>
                    <div class="button-grid" id="buttonGrid"></div>
                </article>

                <aside class="support-card">
                    <div>
                        <h3 class="support-title">Если автоматическое подключение не сработало</h3>
                        <p class="support-copy">Страница уже показывает ручной fallback: вы можете скопировать ссылку подписки и импортировать её в приложение вручную. Это особенно полезно на кастомных прошивках, старых Android TV и в нестабильных браузерах.</p>
                    </div>

                    <div class="support-list">
                        <div class="support-item">
                            <div class="support-item-mark">✓</div>
                            <div>
                                <strong>Автоимпорт через кнопку</strong>
                                <span>Нажмите «Добавить подписку», если приложение уже установлено и поддерживает `happ://` ссылку.</span>
                            </div>
                        </div>
                        <div class="support-item">
                            <div class="support-item-mark">⎘</div>
                            <div>
                                <strong>Ручной импорт</strong>
                                <span>Скопируйте ссылку и вставьте её прямо в приложение, если система блокирует автоматический переход.</span>
                            </div>
                        </div>
                        <div class="support-item">
                            <div class="support-item-mark">✉</div>
                            <div>
                                <strong>Быстрая помощь</strong>
                                <span>Если нужного устройства нет или клиент не открывается, напишите в поддержку и вам дадут точный сценарий подключения.</span>
                            </div>
                        </div>
                    </div>

                    <div class="key-panel">
                        <div class="key-label">Ссылка подписки</div>
                        <div class="key-box" id="keyBox"><?php echo $copyKey !== '' ? $copyKey : 'Ключ не найден в ссылке'; ?></div>
                    </div>

                    <div class="support-actions">
                        <button class="tiny-button" type="button" id="copySideButton">⎘ Скопировать ключ</button>
                        <a class="tiny-button" href="https://t.me/prsta_helpbot" target="_blank" rel="noopener">↗ Написать в поддержку</a>
                    </div>
                </aside>
            </div>

            <div class="notice-grid">
                <article class="notice-card"><h3>На телефоне</h3><p>Кнопки специально сделаны крупными и вертикальными, чтобы попадать в них одной рукой и не теряться в длинных инструкциях.</p></article>
                <article class="notice-card"><h3>На компьютере</h3><p>Десктопная версия раскрывает больше информации сразу: требования, шаги, действия и резервный способ подключения лежат рядом.</p></article>
                <article class="notice-card"><h3>На телевизоре</h3><p>Для Android TV открывается отдельная понятная инструкция: сначала установка, потом запуск приложения и импорт по шагам.</p></article>
            </div>

            <div class="support-footer">
                <span>Если кнопка установки открывает не тот магазин или не запускает приложение, попробуйте ручное копирование ключа.</span>
                <a href="https://t.me/prsta_helpbot" target="_blank" rel="noopener">Связаться с поддержкой</a>
            </div>
        </section>
    </div>

    <div class="overlay" id="tvOverlay" aria-hidden="true">
        <div class="overlay-card" role="dialog" aria-modal="true" aria-labelledby="tvOverlayTitle">
            <div class="overlay-topbar">
                <h2 id="tvOverlayTitle">Android TV: подключение через Happ</h2>
                <button class="overlay-close" type="button" id="closeOverlayButton" aria-label="Закрыть">✕</button>
            </div>
            <p class="overlay-lead">Этот сценарий рассчитан на телевизоры и приставки с Android TV. Если магазин недоступен, используйте APK-установку и затем уже добавляйте подписку внутри приложения.</p>
            <div class="overlay-steps">
                <div class="overlay-step"><div class="overlay-step-index">1</div><div><strong>Установите Happ</strong><span>Попробуйте сначала <a href="https://play.google.com/store/apps/details?id=com.happproxy" target="_blank" rel="noopener">Google Play</a>. Если его нет, скачайте <a href="https://github.com/Happ-proxy/happ-android/releases/latest/download/Happ.apk" target="_blank" rel="noopener">APK-файл</a>.</span></div></div>
                <div class="overlay-step"><div class="overlay-step-index">2</div><div><strong>Запустите приложение</strong><span>Разрешите установку из неизвестных источников, если система попросит, затем откройте Happ и пройдите первоначальную настройку.</span></div></div>
                <div class="overlay-step"><div class="overlay-step-index">3</div><div><strong>Добавьте ключ вручную</strong><span>Скопируйте ссылку подписки с этой страницы и импортируйте её в Happ через экран добавления подключения.</span></div></div>
            </div>
            <div class="overlay-note">Если на телевизоре неудобно печатать, откройте эту страницу на телефоне, нажмите «Скопировать ключ» и отправьте ссылку себе любым удобным способом.</div>
            <div class="overlay-actions">
                <a class="action-button is-primary" href="https://play.google.com/store/apps/details?id=com.happproxy" target="_blank" rel="noopener"><span>▶</span><span><strong>Открыть Google Play</strong><small>Рекомендуемый способ установки</small></span></a>
                <button class="action-button is-neutral" type="button" id="overlayCopyButton"><span>⎘</span><span><strong>Скопировать ключ</strong><small>Для ручного импорта в приложении</small></span></button>
            </div>
        </div>
    </div>

    <div class="toast" id="copyToast" role="status" aria-live="polite">
        <div class="toast-mark">✓</div>
        <div>
            <strong>Ссылка подписки скопирована</strong>
            <div>Теперь её можно вставить в приложение вручную, если автоматическое открытие не сработало.</div>
        </div>
    </div>
    <script>
        const subscriptionKey = <?php echo json_encode($rawKey, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES); ?>;
        const encodedKey = <?php echo json_encode($encodedKey, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES); ?>;

        const osConfigs = {
            android: {
                label: "Рекомендуемый клиент",
                title: "Happ для Android",
                description: "Лучший вариант для Android-смартфонов и планшетов. Можно установить через Google Play или APK, затем сразу импортировать подписку.",
                image: "./img2/app_happ.png",
                specs: [
                    { title: "Поддержка системы", text: "Android 8.0 и новее" },
                    { title: "Формат установки", text: "Google Play или APK" },
                    { title: "Импорт ключа", text: "Автоимпорт и ручное копирование" }
                ],
                steps: [
                    { title: "Установите приложение", text: "Выберите Google Play или прямую загрузку APK." },
                    { title: "Откройте Happ", text: "После установки запустите приложение один раз." },
                    { title: "Добавьте подписку", text: "Нажмите кнопку ниже, чтобы импортировать ключ автоматически." }
                ],
                buttons: [
                    { style: "is-secondary", href: "https://play.google.com/store/apps/details?id=com.happproxy", icon: "▶", title: "Установить из Google Play", note: "Базовый и самый простой вариант" },
                    { style: "is-highlight", href: "https://github.com/Happ-proxy/happ-android/releases/latest/download/Happ.apk", icon: "↓", title: "Скачать APK", note: "Если магазин недоступен" },
                    { style: "is-primary", href: `/redirect.php?url=happ://add/${encodedKey}`, icon: "⚡", title: "Добавить подписку", note: "Автоматический импорт в Happ" },
                    { style: "is-neutral", action: "copy", icon: "⎘", title: "Скопировать ключ", note: "Для ручного импорта" }
                ]
            },
            ios: {
                label: "Рекомендуемый клиент",
                title: "Happ для iPhone и macOS",
                description: "Подходит для iPhone, iPad и Mac на Apple Silicon. После установки можно сразу импортировать подписку через кнопку.",
                image: "./img2/app_happ.png",
                specs: [
                    { title: "Поддержка системы", text: "iOS 15+, macOS 12+" },
                    { title: "Особенность", text: "Mac только на ARM-чипах" },
                    { title: "Импорт ключа", text: "Через deep-link или вручную" }
                ],
                steps: [
                    { title: "Скачайте Happ", text: "Откройте App Store и установите приложение." },
                    { title: "Подготовьте клиент", text: "Запустите его один раз, чтобы система приняла deep-link." },
                    { title: "Добавьте подписку", text: "Вернитесь сюда и нажмите кнопку импорта." }
                ],
                buttons: [
                    { style: "is-secondary", href: "https://apps.apple.com/ru/app/happ-proxy-utility-plus/id6746188973", icon: "", title: "Открыть App Store", note: "Установка для iPhone и Mac" },
                    { style: "is-primary", href: `/redirect.php?url=happ://add/${encodedKey}`, icon: "⚡", title: "Добавить подписку", note: "Автоимпорт в Happ" },
                    { style: "is-neutral", action: "copy", icon: "⎘", title: "Скопировать ключ", note: "На случай ручного импорта" }
                ]
            },
            windows: {
                label: "Рекомендуемый клиент",
                title: "Happ для Windows",
                description: "На ПК интерфейс упрощён: сначала скачайте установщик, затем импортируйте подписку через кнопку или вставьте ссылку вручную.",
                image: "./img2/app_happ.png",
                specs: [
                    { title: "Поддержка системы", text: "Windows 10 и новее" },
                    { title: "Формат установки", text: "Готовый desktop installer" },
                    { title: "Импорт ключа", text: "Автоимпорт и ручная вставка" }
                ],
                steps: [
                    { title: "Скачайте установщик", text: "Сохраните `.exe` и завершите установку клиента." },
                    { title: "Откройте приложение", text: "Запустите Happ после установки." },
                    { title: "Импортируйте подписку", text: "Нажмите кнопку ниже, чтобы приложение получило ссылку." }
                ],
                buttons: [
                    { style: "is-secondary", href: "https://github.com/Happ-proxy/happ-desktop/releases/latest/download/setup-Happ.x64.exe", icon: "⊞", title: "Скачать для Windows", note: "Официальный установщик" },
                    { style: "is-primary", href: `/redirect.php?url=happ://add/${encodedKey}`, icon: "⚡", title: "Добавить подписку", note: "Откроет приложение с ключом" },
                    { style: "is-neutral", action: "copy", icon: "⎘", title: "Скопировать ключ", note: "Если импортируете вручную" }
                ]
            },
            tv: {
                label: "Отдельный сценарий",
                title: "Happ для Android TV",
                description: "Для телевизоров и приставок лучше показать отдельную инструкцию: установка, первый запуск и затем ручной импорт ссылки в приложении.",
                image: "./img2/app_vpn4tv.png",
                specs: [
                    { title: "Поддержка системы", text: "Android TV 9 и новее" },
                    { title: "Формат установки", text: "Google Play или APK" },
                    { title: "Импорт ключа", text: "Обычно вручную внутри приложения" }
                ],
                steps: [
                    { title: "Поставьте приложение", text: "Google Play на ТВ либо APK через флешку." },
                    { title: "Запустите Happ", text: "Разрешите установку и завершите первичную настройку." },
                    { title: "Откройте инструкцию", text: "Ниже есть отдельная подробная памятка для ТВ." }
                ],
                buttons: [
                    { style: "is-secondary", href: "https://play.google.com/store/apps/details?id=com.happproxy", icon: "▶", title: "Открыть Google Play", note: "Если магазин доступен на ТВ" },
                    { style: "is-highlight", href: "https://github.com/Happ-proxy/happ-android/releases/latest/download/Happ.apk", icon: "↓", title: "Скачать APK", note: "Если Play Market недоступен" },
                    { style: "is-primary", action: "overlay", icon: "ℹ", title: "Показать инструкцию", note: "Подробный сценарий подключения" },
                    { style: "is-neutral", action: "copy", icon: "⎘", title: "Скопировать ключ", note: "Для ручного ввода на ТВ" }
                ]
            }
        };

        const state = { currentOs: detectInitialOs() };

        const deviceSwitcher = document.getElementById("deviceSwitcher");
        const specGrid = document.getElementById("specGrid");
        const stepGrid = document.getElementById("stepGrid");
        const buttonGrid = document.getElementById("buttonGrid");
        const devicePlatform = document.getElementById("devicePlatform");
        const deviceTitle = document.getElementById("deviceTitle");
        const deviceDescription = document.getElementById("deviceDescription");
        const deviceImage = document.getElementById("deviceImage");
        const copyToast = document.getElementById("copyToast");
        const tvOverlay = document.getElementById("tvOverlay");
        const hiddenCopyField = document.getElementById("hiddenCopyField");

        function detectInitialOs() {
            const ua = navigator.userAgent || "";
            if (/android.+tv|smart-tv|googletv|aft/i.test(ua)) return "tv";
            if (/iphone|ipad|ipod|mac os/i.test(ua)) return "ios";
            if (/windows/i.test(ua)) return "windows";
            return "android";
        }

        function renderCurrentOs() {
            const config = osConfigs[state.currentOs];
            if (!config) return;

            devicePlatform.textContent = config.label;
            deviceTitle.textContent = config.title;
            deviceDescription.textContent = config.description;
            deviceImage.src = config.image;
            deviceImage.alt = config.title;

            specGrid.innerHTML = config.specs.map((item) => `<div class="spec-card"><strong>${item.title}</strong><span>${item.text}</span></div>`).join("");
            stepGrid.innerHTML = config.steps.map((item, index) => `<div class="step-card"><div class="step-number">${index + 1}</div><strong>${item.title}</strong><span>${item.text}</span></div>`).join("");
            buttonGrid.innerHTML = config.buttons.map((button) => {
                if (button.href) {
                    return `<a class="action-button ${button.style}" href="${button.href}" target="_blank" rel="noopener"><span>${button.icon}</span><span><strong>${button.title}</strong><small>${button.note}</small></span></a>`;
                }
                return `<button class="action-button ${button.style}" type="button" data-action="${button.action}"><span>${button.icon}</span><span><strong>${button.title}</strong><small>${button.note}</small></span></button>`;
            }).join("");

            deviceSwitcher.querySelectorAll(".device-tab").forEach((button) => {
                button.classList.toggle("active", button.dataset.os === state.currentOs);
            });
        }

        function showToast() {
            copyToast.classList.add("show");
            window.clearTimeout(showToast.timer);
            showToast.timer = window.setTimeout(() => copyToast.classList.remove("show"), 2600);
        }

        async function copySubscription() {
            if (!subscriptionKey) return;
            try {
                await navigator.clipboard.writeText(subscriptionKey);
            } catch (error) {
                hiddenCopyField.focus();
                hiddenCopyField.select();
                document.execCommand("copy");
            }
            showToast();
        }

        function openOverlay() {
            tvOverlay.classList.add("show");
            tvOverlay.setAttribute("aria-hidden", "false");
            document.body.style.overflow = "hidden";
        }

        function closeOverlay() {
            tvOverlay.classList.remove("show");
            tvOverlay.setAttribute("aria-hidden", "true");
            document.body.style.overflow = "";
        }

        deviceSwitcher.addEventListener("click", (event) => {
            const button = event.target.closest(".device-tab");
            if (!button) return;
            state.currentOs = button.dataset.os;
            renderCurrentOs();
        });

        buttonGrid.addEventListener("click", (event) => {
            const button = event.target.closest("[data-action]");
            if (!button) return;
            if (button.dataset.action === "copy") copySubscription();
            if (button.dataset.action === "overlay") openOverlay();
        });

        document.getElementById("copyTopButton").addEventListener("click", copySubscription);
        document.getElementById("copySideButton").addEventListener("click", copySubscription);
        document.getElementById("overlayCopyButton").addEventListener("click", copySubscription);
        document.getElementById("closeOverlayButton").addEventListener("click", closeOverlay);

        tvOverlay.addEventListener("click", (event) => {
            if (event.target === tvOverlay) closeOverlay();
        });

        window.addEventListener("keydown", (event) => {
            if (event.key === "Escape" && tvOverlay.classList.contains("show")) closeOverlay();
        });

        renderCurrentOs();
    </script>
</body>
</html>
