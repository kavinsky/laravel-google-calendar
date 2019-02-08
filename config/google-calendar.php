<?php

return [

    /*
     * Path to the json file containing the credentials.
     */
    'service_account_credentials_json' => storage_path('app/google-calendar/service-account-credentials.json'),

    /*
     *  User email of the impersonated user in case of need to use the Wide-Domain Delegation
     */
    'wide_domain_impersonation_user' => null,

    /*
     *  The id of the Google Calendar that will be used by default.
     */
    'calendar_id' => env('GOOGLE_CALENDAR_ID'),
];
