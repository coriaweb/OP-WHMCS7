<?php
/**
 * SYSTEM ROUTES
 * ----------------
 *
 * Instead of mapping routes automagically to controllers, we use
 * a whitelist of routes with the controllers mapped.
 *
 * If the string only contains a-zA-Z0-9_, the namespace will be
 * guessed and added.
 */
return [

    //
    'config' => 'ConfigController@getConfig',
    'registerDomain' => 'DomainController@register',
    'transferDomain' => 'DomainController@transfer',
    'renewDomain' => 'RenewDomainController@renew',


    // Nameservers
    'getNameservers' => 'NameserverController@get',
    'saveNameservers' => 'NameserverController@save',
    'registerNameserver' => 'NameserverController@register',
    'modifyNameserver' => 'NameserverController@modify',
    'deleteNameserver' => 'NameserverController@delete',

    // Registrar lock
    'getRegistrarLock' => 'RegistrarLockController@get',
    'saveRegistrarLock' => 'RegistrarLockController@save',

    // DNS
    'getDns' => 'DnsController@get',
    'saveDns' => 'DnsController@save',

    // Contact
    'getContactDetails' => 'ContactController@getDetails',
    'saveContactDetails' => 'ContactController@saveDetails',

    // Various
    'idProtect' => 'IdProtectController@toggle',
    'requestDelete' => 'RequestDeleteController@request',
    'getEppCode' => 'EppController@get',
    'transferSync' => 'TransferSyncController@sync',
    'checkAvailability' => 'CheckAvailabilityController@check',
];