=== ANON::form embedded secure form ===
Contributors: anonform
Donate link: https://anonform.com/en/subscription-secure-web-form/
Tags: e2ee, privacy, contact form, whistleblower form, forms
Requires at least: 5.0
Tested up to: 6.6
Requires PHP: 5.6
Stable tag: 1.3
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

This plugin allows you to embed ANON::form's End-to-End Encrypted secure and anonymized web forms into your website with an iframe and a shortcode.

== Description ==
This plugin allows you to embed [ANON::form's](https://anonform.com/en) E2EE (End-to-End Encrypted) secure and anonymized web forms into your website with an iframe and with a shortcode.

The requirements for secure communication with secure forms and storage of sensitive information are steadily increasing, not least from authorities through the introduction of the GDPR and the new protection for so-called “whistleblowers”.

Something that is often overlooked but directly affected by the new requirements is the web forms used on the web pages and websites to create contact or collect information, with email as transport.

ANON::form is a complete, easy-to-implement and scalable solution for secure electronic web-based forms that meet all existing requirements for not only security but also anonymity and (un)traceability.

= ANON::form is secure and anonymized =

<strong>Meets safety requirements</strong>

ANON::form is a service that meets the requirements for security according to the respective standard for:
EU/GDPR + EU/Schrems II
CH/revFADP
UK/FCA
US/SOX
PCI-DSS + HIPAA + NIST
and receives the rating A+ from Qualsys SSL Labs and ImmuniWeb.

ANON::form follows the Zero Trust framework for a secure infrastructure.

All certificates are encrypted with SHA256/RSA 2048 bits/TLS 1.2 + 1.3.

<strong>Meets the requirement for Zero Access Encryption</strong>

ANON::form does not store form data and meets the requirement for Zero Access Encryption, suppliers who receive form data from ANON::form comply with Zero Access Encryption in that all data stored is encrypted via endpoints (E2EE) with personal keys.

<strong>Meets the requirement for privacy</strong>

ANON::form fulfills the requirement for anonymity in that no traffic, error or other logs are activated (No-Log Policy), all form data is sent encrypted directly to receiving systems without intermediaries.

Nothing is saved in the computer or browser by the service, but the use of incognito windows, or even better Tor Browser, is recommended to prevent sensitive data from being saved by the browser’s own functions.

<strong>Protected against malicious code</strong>

ANON::form is protected against malicious code by cleaning up all form data before it is processed by the server system. We do not have any online editing of forms, everything is uploaded manually by us after virus and other security checks.

All services are run on own servers in secure server halls. The encryption software we use is open source (OpenPGP) which is constantly reviewed by a large community spread all over the world.

<strong>Spam protection</strong>

All forms have Captcha protection against robot-generated spam. The Captcha function is locally installed and does not download anything from external sources such as Google. The forms also support [hCaptcha](https://www.hcaptcha.com/), which offers better spam protection but poorer anonymity through increased traceability.

= EU/EN 301549 and W3C/WCAG 2.1 AA Compliance =

All forms meet the accessibility requirements according to EU Directive 2016/2102 and other corresponding directives in different countries according to WCAG 2.0/2.1 AA and associated legislation.

= Pre-built form templates =

ANON::form comes with pre-built form templates, both embedded and stand-alone, to help you save time. You can add, remove, or re-arrange fields as necessary. Or create special forms for handling sensitive data such as sick leave.

* Contact form; a standard contact form

* Whistleblower forms; approved for use as a whistleblower channel, can also be used as a tip form for journalists etc

* Sick leave form; a simple and quick way to report sickness absence with the mobile phone, pad or computer

= Currently available in 42 languages =

ANON::form forms support Albanian, Arabic, Bosnian, Bulgarian, Catalan, Croatian, Czech, Danish, Dutch, English, Estonian, Filipino, Finnish, Frensh, German, Greek, Hindi, Hungarian, Icelandic, Indonesian, Irish, Italian, Latvian, Lithuanian, Malay, Maltese, Norwegian, Persian, Polish, Portuguese, Romanian, Russian, Serbian, Slovak, Slovenian, Spanish, Swahili, Swedish, Tamil, Thai, Turkish, Ukrainian

= Mobile Ready and Optimized for Speed =

ANON::form forms are 100% responsive and mobile-friendly by default. We also optimized both the frontend and the backend to ensure maximum speed.

= How to use it =

ANON::form E2EE forms are web forms where the form data is encrypted in the browser and then sent as email via an encrypted and anonymized channel established by ANON::form's servers.

The recipient can be any email client that can decrypt PGP, we recommend a free account with [Proton](https://proton.me/)

[Read more here](https://anonform.com/en/secure-forms-for-websites/)

== Installation ==

1. Create a new [ANON::form account](https://anonform.com/en/subscription-secure-web-form/)
2. Please follow the [standard installation procedure for WordPress plugins](https://wordpress.org/documentation/article/manage-plugins/).
3. Activate the ANON::form plugin.
4. Go to the page or article where you want the form and enter the short code [anonform link='path to your form'] in the appropriate place.
5. The embedding is an iframe that you can easily style if you want by adding extra css if your theme allows this, then use id “anonform-app”.

<strong>IMPORTANT</strong> Your Content-Security-Policy (CSP) "child-src" HTTP security headers settings must allow iframes from the URL you use for your ANON::form form. Read more about this in the FAQ section.

= How to use the test form =

ANON::form offers a special test url where the configuration can be tested with different forms and languages. The forms in this test mode are fully functional but do not submit anything.

URL: https://test.anonform.com

Forms alternatives (add to URL):

* /Fce (embedded contact form, default)
* /Fcwe (small anonymous embedded whistleblower form)
* /Fcwxe (large embedded whistleblower form)

Languages alternatives (add to URL):

* /Lar (عربى)
* /Lda (Dansk)
* /Len (English)
* /Lfi (Suomeksi)
* /Lde (Deutsch)
* /Lno (Norsk)
* /Lpl (Polskie)
* /Lpt (Português)
* /Lro (Română)
* /Lru (Русский)
* /Les (Español)
* /Lsv (Svenska)
* /Lth (ไทย)
* /Luk (Український)
* /Lsq (Shqiptare)
* /Lfr (Français)
* /Lel (Ελληνικά)
* /Lit (Italiano)
* /Llt (Lietuvių)
* /Ltr (Türkçe)
* /Lbg (български)
* /Lbs (Bosanski)
* /Lhr (Hrvatski)
* /Llv (Latviski)
* /Lsr (Српски)
* /Lnl (Nederlands)
* /Lsw (Kiswahili)
* /Let (Eesti keel)
* /Lfa (فارسی اصلاح شده)

Example test url with contact form in English:

<strong>https://test.anonform.com/Fce/Len</strong>

== Frequently Asked Questions ==
= How do I create a new ANON::form account? =

You will find a full description in the article [Subscription secure web form](https://anonform.com/en/subscription-secure-web-form/)

= My link to the form doesn't work in the shortcode =

You must have a working form for embedding (standalone forms do not work with this plugin), go to your form and copy the address, then paste it into the shortcode:

[anonform link='full path to your form']

= The browser does not allow this iFrame =

Check your site's Content-Security-Policy (CSP) headers "child-src" and "frame-src" values, either of these must exist and allow the same URL you use for your ANON::form form.

Both "child-src" and "frame-src" are valid but we recommend the use of only "child-src". Example where we use our test form:

Content-Security-Policy: child-src 'self' https://*.anonform.com

You will find everything you need to know in WPBeginner's article [How to Add HTTP Security Headers in WordPress](https://www.wpbeginner.com/beginners-guide/how-to-add-http-security-headers-in-wordpress/)

== Screenshots ==
1. Embed the shortcode in the page
2. ANON::forms web forms are responsive

== Changelog ==
= 1.3 =
* Updated to W3C WCAG 2.1 AA and EU EN301549 compliance
* Updated to support hCaptcha spam protection
* Updated readme

= 1.2 =
* Tested up to WP 6.5
* Updated CSS file

= 1.1 =
* Tested up to WP 6.4
* Updated readme

= 1.0 =
First release
