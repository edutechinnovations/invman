<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'HomeController@index');


// Add route for login, logout, registration etc.
Route::auth();
Route::get('/dashboard', 'DashboardController@index');

if (!defined('CONTACT_EMAIL')) {
    define('CONTACT_EMAIL', Config::get('mail.from.address'));
    define('CONTACT_NAME', Config::get('mail.from.name'));
    define('SITE_URL', Config::get('app.url'));

    define('ENV_DEVELOPMENT', 'local');
    define('ENV_STAGING', 'staging');

    define('RECENTLY_VIEWED', 'RECENTLY_VIEWED');

    define('ENTITY_CLIENT', 'client');
    define('ENTITY_CONTACT', 'contact');
    define('ENTITY_INVOICE', 'invoice');
    define('ENTITY_INVOICE_ITEMS', 'invoice_items');
    define('ENTITY_INVITATION', 'invitation');
    define('ENTITY_RECURRING_INVOICE', 'recurring_invoice');
    define('ENTITY_PAYMENT', 'payment');
    define('ENTITY_CREDIT', 'credit');
    define('ENTITY_QUOTE', 'quote');
    define('ENTITY_TASK', 'task');
    define('ENTITY_ACCOUNT_GATEWAY', 'account_gateway');
    define('ENTITY_USER', 'user');
    define('ENTITY_TOKEN', 'token');
    define('ENTITY_TAX_RATE', 'tax_rate');
    define('ENTITY_PRODUCT', 'product');
    define('ENTITY_ACTIVITY', 'activity');
    define('ENTITY_VENDOR', 'vendor');
    define('ENTITY_VENDOR_ACTIVITY', 'vendor_activity');
    define('ENTITY_EXPENSE', 'expense');
    define('ENTITY_PAYMENT_TERM', 'payment_term');
    define('ENTITY_EXPENSE_ACTIVITY', 'expense_activity');
    define('ENTITY_BANK_ACCOUNT', 'bank_account');
    define('ENTITY_BANK_SUBACCOUNT', 'bank_subaccount');

    define('PERSON_CONTACT', 'contact');
    define('PERSON_USER', 'user');
    define('PERSON_VENDOR_CONTACT','vendorcontact');

    define('BASIC_SETTINGS', 'basic_settings');
    define('ADVANCED_SETTINGS', 'advanced_settings');

    define('ACCOUNT_COMPANY_DETAILS', 'company_details');
    define('ACCOUNT_USER_DETAILS', 'user_details');
    define('ACCOUNT_LOCALIZATION', 'localization');
    define('ACCOUNT_NOTIFICATIONS', 'notifications');
    define('ACCOUNT_IMPORT_EXPORT', 'import_export');
    define('ACCOUNT_PAYMENTS', 'online_payments');
    define('ACCOUNT_BANKS', 'bank_accounts');
    define('ACCOUNT_IMPORT_EXPENSES', 'import_expenses');
    define('ACCOUNT_MAP', 'import_map');
    define('ACCOUNT_EXPORT', 'export');
    define('ACCOUNT_TAX_RATES', 'tax_rates');
    define('ACCOUNT_PRODUCTS', 'products');
    define('ACCOUNT_ADVANCED_SETTINGS', 'advanced_settings');
    define('ACCOUNT_INVOICE_SETTINGS', 'invoice_settings');
    define('ACCOUNT_INVOICE_DESIGN', 'invoice_design');
    define('ACCOUNT_CLIENT_PORTAL', 'client_portal');
    define('ACCOUNT_EMAIL_SETTINGS', 'email_settings');
    define('ACCOUNT_CHARTS_AND_REPORTS', 'charts_and_reports');
    define('ACCOUNT_USER_MANAGEMENT', 'user_management');
    define('ACCOUNT_DATA_VISUALIZATIONS', 'data_visualizations');
    define('ACCOUNT_TEMPLATES_AND_REMINDERS', 'templates_and_reminders');
    define('ACCOUNT_API_TOKENS', 'api_tokens');
    define('ACCOUNT_CUSTOMIZE_DESIGN', 'customize_design');
    define('ACCOUNT_SYSTEM_SETTINGS', 'system_settings');
    define('ACCOUNT_PAYMENT_TERMS','payment_terms');

    define('ACTION_RESTORE', 'restore');
    define('ACTION_ARCHIVE', 'archive');
    define('ACTION_CONVERT', 'convert');
    define('ACTION_DELETE', 'delete');

    define('ACTIVITY_TYPE_CREATE_CLIENT', 1);
    define('ACTIVITY_TYPE_ARCHIVE_CLIENT', 2);
    define('ACTIVITY_TYPE_DELETE_CLIENT', 3);

    define('ACTIVITY_TYPE_CREATE_INVOICE', 4);
    define('ACTIVITY_TYPE_UPDATE_INVOICE', 5);
    define('ACTIVITY_TYPE_EMAIL_INVOICE', 6);
    define('ACTIVITY_TYPE_VIEW_INVOICE', 7);
    define('ACTIVITY_TYPE_ARCHIVE_INVOICE', 8);
    define('ACTIVITY_TYPE_DELETE_INVOICE', 9);

    define('ACTIVITY_TYPE_CREATE_PAYMENT', 10);
    //define('ACTIVITY_TYPE_UPDATE_PAYMENT', 11);
    define('ACTIVITY_TYPE_ARCHIVE_PAYMENT', 12);
    define('ACTIVITY_TYPE_DELETE_PAYMENT', 13);

    define('ACTIVITY_TYPE_CREATE_CREDIT', 14);
    //define('ACTIVITY_TYPE_UPDATE_CREDIT', 15);
    define('ACTIVITY_TYPE_ARCHIVE_CREDIT', 16);
    define('ACTIVITY_TYPE_DELETE_CREDIT', 17);

    define('ACTIVITY_TYPE_CREATE_QUOTE', 18);
    define('ACTIVITY_TYPE_UPDATE_QUOTE', 19);
    define('ACTIVITY_TYPE_EMAIL_QUOTE', 20);
    define('ACTIVITY_TYPE_VIEW_QUOTE', 21);
    define('ACTIVITY_TYPE_ARCHIVE_QUOTE', 22);
    define('ACTIVITY_TYPE_DELETE_QUOTE', 23);

    define('ACTIVITY_TYPE_RESTORE_QUOTE', 24);
    define('ACTIVITY_TYPE_RESTORE_INVOICE', 25);
    define('ACTIVITY_TYPE_RESTORE_CLIENT', 26);
    define('ACTIVITY_TYPE_RESTORE_PAYMENT', 27);
    define('ACTIVITY_TYPE_RESTORE_CREDIT', 28);
    define('ACTIVITY_TYPE_APPROVE_QUOTE', 29);

    // Vendors
    define('ACTIVITY_TYPE_CREATE_VENDOR', 30);
    define('ACTIVITY_TYPE_ARCHIVE_VENDOR', 31);
    define('ACTIVITY_TYPE_DELETE_VENDOR', 32);
    define('ACTIVITY_TYPE_RESTORE_VENDOR', 33);

    // expenses
    define('ACTIVITY_TYPE_CREATE_EXPENSE', 34);
    define('ACTIVITY_TYPE_ARCHIVE_EXPENSE', 35);
    define('ACTIVITY_TYPE_DELETE_EXPENSE', 36);
    define('ACTIVITY_TYPE_RESTORE_EXPENSE', 37);

    define('DEFAULT_INVOICE_NUMBER', '0001');
    define('RECENTLY_VIEWED_LIMIT', 8);
    define('LOGGED_ERROR_LIMIT', 100);
    define('RANDOM_KEY_LENGTH', 32);
    define('MAX_NUM_USERS', 20);
    define('MAX_SUBDOMAIN_LENGTH', 30);
    define('MAX_IFRAME_URL_LENGTH', 250);
    define('MAX_LOGO_FILE_SIZE', 200); // KB
    define('MAX_FAILED_LOGINS', 10);
    define('DEFAULT_FONT_SIZE', 9);
    define('DEFAULT_HEADER_FONT', 1);// Roboto
    define('DEFAULT_BODY_FONT', 1);// Roboto
    define('DEFAULT_SEND_RECURRING_HOUR', 8);

    define('IMPORT_CSV', 'CSV');
    define('IMPORT_FRESHBOOKS', 'FreshBooks');
    define('IMPORT_WAVE', 'Wave');
    define('IMPORT_RONIN', 'Ronin');
    define('IMPORT_HIVEAGE', 'Hiveage');
    define('IMPORT_ZOHO', 'Zoho');
    define('IMPORT_NUTCACHE', 'Nutcache');
    define('IMPORT_INVOICEABLE', 'Invoiceable');
    define('IMPORT_HARVEST', 'Harvest');

    define('MAX_NUM_CLIENTS', 100);
    define('MAX_NUM_CLIENTS_PRO', 20000);
    define('MAX_NUM_CLIENTS_LEGACY', 500);
    define('MAX_INVOICE_AMOUNT', 1000000000);
    define('LEGACY_CUTOFF', 57800);
    define('ERROR_DELAY', 3);

    define('MAX_NUM_VENDORS', 100);
    define('MAX_NUM_VENDORS_PRO', 20000);

    define('INVOICE_STATUS_DRAFT', 1);
    define('INVOICE_STATUS_SENT', 2);
    define('INVOICE_STATUS_VIEWED', 3);
    define('INVOICE_STATUS_APPROVED', 4);
    define('INVOICE_STATUS_PARTIAL', 5);
    define('INVOICE_STATUS_PAID', 6);

    define('PAYMENT_TYPE_CREDIT', 1);
    define('CUSTOM_DESIGN', 11);

    define('FREQUENCY_WEEKLY', 1);
    define('FREQUENCY_TWO_WEEKS', 2);
    define('FREQUENCY_FOUR_WEEKS', 3);
    define('FREQUENCY_MONTHLY', 4);
    define('FREQUENCY_THREE_MONTHS', 5);
    define('FREQUENCY_SIX_MONTHS', 6);
    define('FREQUENCY_ANNUALLY', 7);

    define('SESSION_TIMEZONE', 'timezone');
    define('SESSION_CURRENCY', 'currency');
    define('SESSION_DATE_FORMAT', 'dateFormat');
    define('SESSION_DATE_PICKER_FORMAT', 'datePickerFormat');
    define('SESSION_DATETIME_FORMAT', 'datetimeFormat');
    define('SESSION_COUNTER', 'sessionCounter');
    define('SESSION_LOCALE', 'sessionLocale');
    define('SESSION_USER_ACCOUNTS', 'userAccounts');
    define('SESSION_REFERRAL_CODE', 'referralCode');

    define('SESSION_LAST_REQUEST_PAGE', 'SESSION_LAST_REQUEST_PAGE');
    define('SESSION_LAST_REQUEST_TIME', 'SESSION_LAST_REQUEST_TIME');

    define('CURRENCY_DOLLAR', 1);
    define('CURRENCY_EURO', 3);

    define('DEFAULT_TIMEZONE', 'US/Eastern');
    define('DEFAULT_COUNTRY', 840); // United Stated
    define('DEFAULT_CURRENCY', CURRENCY_DOLLAR);
    define('DEFAULT_LANGUAGE', 1); // English
    define('DEFAULT_DATE_FORMAT', 'M j, Y');
    define('DEFAULT_DATE_PICKER_FORMAT', 'M d, yyyy');
    define('DEFAULT_DATETIME_FORMAT', 'F j, Y g:i a');
    define('DEFAULT_DATETIME_MOMENT_FORMAT', 'MMM D, YYYY h:mm:ss a');
    define('DEFAULT_LOCALE', 'en');
    define('DEFAULT_MAP_ZOOM', 10);

    define('RESULT_SUCCESS', 'success');
    define('RESULT_FAILURE', 'failure');


    define('PAYMENT_LIBRARY_OMNIPAY', 1);
    define('PAYMENT_LIBRARY_PHP_PAYMENTS', 2);

    define('GATEWAY_AUTHORIZE_NET', 1);
    define('GATEWAY_AUTHORIZE_NET_SIM', 2);
    define('GATEWAY_EWAY', 4);
    define('GATEWAY_MOLLIE', 9);
    define('GATEWAY_PAYFAST', 13);
    define('GATEWAY_PAYPAL_EXPRESS', 17);
    define('GATEWAY_PAYPAL_PRO', 18);
    define('GATEWAY_SAGE_PAY_DIRECT', 20);
    define('GATEWAY_SAGE_PAY_SERVER', 21);
    define('GATEWAY_STRIPE', 23);
    define('GATEWAY_GOCARDLESS', 6);
    define('GATEWAY_TWO_CHECKOUT', 27);
    define('GATEWAY_BEANSTREAM', 29);
    define('GATEWAY_PSIGATE', 30);
    define('GATEWAY_MOOLAH', 31);
    define('GATEWAY_BITPAY', 42);
    define('GATEWAY_DWOLLA', 43);
    define('GATEWAY_CHECKOUT_COM', 47);

    define('EVENT_CREATE_CLIENT', 1);
    define('EVENT_CREATE_INVOICE', 2);
    define('EVENT_CREATE_QUOTE', 3);
    define('EVENT_CREATE_PAYMENT', 4);
    define('EVENT_CREATE_VENDOR',5);

    define('REQUESTED_PRO_PLAN', 'REQUESTED_PRO_PLAN');
    define('DEMO_ACCOUNT_ID', 'DEMO_ACCOUNT_ID');
    define('PREV_USER_ID', 'PREV_USER_ID');
    define('NINJA_ACCOUNT_KEY', 'zg4ylmzDkdkPOT8yoKQw9LTWaoZJx79h');
    define('NINJA_GATEWAY_ID', GATEWAY_STRIPE);
    define('NINJA_GATEWAY_CONFIG', 'NINJA_GATEWAY_CONFIG');
    define('NINJA_WEB_URL', 'https://www.invoiceninja.com');
    define('NINJA_APP_URL', 'https://app.invoiceninja.com');
    define('NINJA_VERSION', '2.5.1.3');
    define('NINJA_DATE', '2000-01-01');

    define('SOCIAL_LINK_FACEBOOK', 'https://www.facebook.com/invoiceninja');
    define('SOCIAL_LINK_TWITTER', 'https://twitter.com/invoiceninja');
    define('SOCIAL_LINK_GITHUB', 'https://github.com/invoiceninja/invoiceninja/');

    define('NINJA_FROM_EMAIL', 'maildelivery@invoiceninja.com');
    define('RELEASES_URL', 'https://trello.com/b/63BbiVVe/invoice-ninja');
    define('ZAPIER_URL', 'https://zapier.com/zapbook/invoice-ninja');
    define('OUTDATE_BROWSER_URL', 'http://browsehappy.com/');
    define('PDFMAKE_DOCS', 'http://pdfmake.org/playground.html');
    define('PHANTOMJS_CLOUD', 'http://api.phantomjscloud.com/api/browser/v2/');
    define('PHP_DATE_FORMATS', 'http://php.net/manual/en/function.date.php');
    define('REFERRAL_PROGRAM_URL', 'https://www.invoiceninja.com/referral-program/');
    define('EMAIL_MARKUP_URL', 'https://developers.google.com/gmail/markup');
    define('OFX_HOME_URL', 'http://www.ofxhome.com/index.php/home/directory/all');

    define('BLANK_IMAGE', 'data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=');

    define('COUNT_FREE_DESIGNS', 4);
    define('COUNT_FREE_DESIGNS_SELF_HOST', 5); // include the custom design
    define('PRODUCT_ONE_CLICK_INSTALL', 1);
    define('PRODUCT_INVOICE_DESIGNS', 2);
    define('PRODUCT_WHITE_LABEL', 3);
    define('PRODUCT_SELF_HOST', 4);
    define('WHITE_LABEL_AFFILIATE_KEY', '92D2J5');
    define('INVOICE_DESIGNS_AFFILIATE_KEY', 'T3RS74');
    define('SELF_HOST_AFFILIATE_KEY', '8S69AD');

    define('PRO_PLAN_PRICE', 50);
    define('WHITE_LABEL_PRICE', 20);
    define('INVOICE_DESIGNS_PRICE', 10);

    define('USER_TYPE_SELF_HOST', 'SELF_HOST');
    define('USER_TYPE_CLOUD_HOST', 'CLOUD_HOST');
    define('NEW_VERSION_AVAILABLE', 'NEW_VERSION_AVAILABLE');

    define('TEST_USERNAME', 'user@example.com');
    define('TEST_PASSWORD', 'password');
    define('API_SECRET', 'API_SECRET');

    define('IOS_PRODUCTION_PUSH','ninjaIOS');
    define('IOS_DEV_PUSH','devNinjaIOS');

    define('TOKEN_BILLING_DISABLED', 1);
    define('TOKEN_BILLING_OPT_IN', 2);
    define('TOKEN_BILLING_OPT_OUT', 3);
    define('TOKEN_BILLING_ALWAYS', 4);

    define('PAYMENT_TYPE_PAYPAL', 'PAYMENT_TYPE_PAYPAL');
    define('PAYMENT_TYPE_CREDIT_CARD', 'PAYMENT_TYPE_CREDIT_CARD');
    define('PAYMENT_TYPE_DIRECT_DEBIT', 'PAYMENT_TYPE_DIRECT_DEBIT');
    define('PAYMENT_TYPE_BITCOIN', 'PAYMENT_TYPE_BITCOIN');
    define('PAYMENT_TYPE_DWOLLA', 'PAYMENT_TYPE_DWOLLA');
    define('PAYMENT_TYPE_TOKEN', 'PAYMENT_TYPE_TOKEN');
    define('PAYMENT_TYPE_ANY', 'PAYMENT_TYPE_ANY');

    define('REMINDER1', 'reminder1');
    define('REMINDER2', 'reminder2');
    define('REMINDER3', 'reminder3');

    define('REMINDER_DIRECTION_AFTER', 1);
    define('REMINDER_DIRECTION_BEFORE', 2);

    define('REMINDER_FIELD_DUE_DATE', 1);
    define('REMINDER_FIELD_INVOICE_DATE', 2);

    define('FILTER_INVOICE_DATE', 'invoice_date');
    define('FILTER_PAYMENT_DATE', 'payment_date');

    define('SOCIAL_GOOGLE', 'Google');
    define('SOCIAL_FACEBOOK', 'Facebook');
    define('SOCIAL_GITHUB', 'GitHub');
    define('SOCIAL_LINKEDIN', 'LinkedIn');

    define('USER_STATE_ACTIVE', 'active');
    define('USER_STATE_PENDING', 'pending');
    define('USER_STATE_DISABLED', 'disabled');
    define('USER_STATE_ADMIN', 'admin');
    define('USER_STATE_OWNER', 'owner');

    define('API_SERIALIZER_ARRAY', 'array');
    define('API_SERIALIZER_JSON', 'json');

    define('EMAIL_DESIGN_PLAIN', 1);
    define('EMAIL_DESIGN_LIGHT', 2);
    define('EMAIL_DESIGN_DARK', 3);

    define('BANK_LIBRARY_OFX', 1);

    define('RESELLER_REVENUE_SHARE', 'A');
    define('RESELLER_LIMITED_USERS', 'B');

    $creditCards = [
                1 => ['card' => 'images/credit_cards/Test-Visa-Icon.png', 'text' => 'Visa'],
                2 => ['card' => 'images/credit_cards/Test-MasterCard-Icon.png', 'text' => 'Master Card'],
                4 => ['card' => 'images/credit_cards/Test-AmericanExpress-Icon.png', 'text' => 'American Express'],
                8 => ['card' => 'images/credit_cards/Test-Diners-Icon.png', 'text' => 'Diners'],
                16 => ['card' => 'images/credit_cards/Test-Discover-Icon.png', 'text' => 'Discover']
            ];
    define('CREDIT_CARDS', serialize($creditCards));

    $cachedTables = [
        'currencies' => 'App\Models\Currency',
        'sizes' => 'App\Models\Size',
        'industries' => 'App\Models\Industry',
        'timezones' => 'App\Models\Timezone',
        'dateFormats' => 'App\Models\DateFormat',
        'datetimeFormats' => 'App\Models\DatetimeFormat',
        'languages' => 'App\Models\Language',
        'paymentTerms' => 'App\Models\PaymentTerm',
        'paymentTypes' => 'App\Models\PaymentType',
        'countries' => 'App\Models\Country',
        'invoiceDesigns' => 'App\Models\InvoiceDesign',
        'invoiceStatus' => 'App\Models\InvoiceStatus',
        'frequencies' => 'App\Models\Frequency',
        'gateways' => 'App\Models\Gateway',
        'fonts' => 'App\Models\Font',
        'banks' => 'App\Models\Bank',
    ];
    define('CACHED_TABLES', serialize($cachedTables));

    function uctrans($text)
    {
        return ucwords(trans($text));
    }

    // optional trans: only return the string if it's translated
    function otrans($text)
    {
        $locale = Session::get(SESSION_LOCALE);

        if ($locale == 'en') {
            return trans($text);
        } else {
            $string = trans($text);
            $english = trans($text, [], 'en');
            return $string != $english ? $string : '';
        }
    }
}
