# OsioSMS PHP Package

### Description
The OsioSMS API PHP Package is a comprehensive library designed to facilitate interaction with the OsioSMS platform. This package enables developers to seamlessly integrate various OsioSMS services into their PHP applications, including contact management, SMS sending, voice messaging, MMS, WhatsApp messaging, Viber, OTP, and profile management. Whether you're managing contacts, sending messages, or checking your account balance, this package provides a unified and easy-to-use interface for all your OsioSMS API needs.

## Table of Contents

- [Contacts](#contacts)
- [Groups](#groups)
- [SMS](#sms)
- [MMS](#mms)
- [Voice](#voice)
- [WhatsApp](#whatsapp)
- [Viber](#viber)
- [OTP](#otp)
- [Profile](#profile)

### Basic Usage

#### Installation
Install the package via Composer:
```bash
composer require yourname/osiosms-contacts
```

#### Initialization
To start using the Contacts API, initialize the Contacts class by providing your OsioSMS API token:
```php
use OsioSms\OsioSms;

$osiosms = new OsioSms('your_api_token');
```

Here's the `## Contacts` section in markdown format:

## Contacts

The `Contacts` class provides methods to manage contacts within the OsioSMS platform. You can create, view, update, delete, and list contacts in specific contact groups.

### Create a Contact

To create a new contact within a specific group, use the `create` method:

```php
$response = $osiosms->contacts()->create('group_id', '31612345678', [
    'FIRST_NAME' => 'John',
    'LAST_NAME' => 'Doe',
]);

print_r($response);
```

### View a Contact

To view the details of an existing contact, use the `view` method:

```php
$response = $osiosms->contacts()->view('group_id', 'contact_uid');

print_r($response);
```

### Update a Contact

To update an existing contact, use the `update` method:

```php
$response = $osiosms->contacts()->update('group_id', 'contact_uid', '31612345678', [
    'FIRST_NAME' => 'Jane',
    'LAST_NAME' => 'Doe',
]);

print_r($response);
```

### Delete a Contact

To delete an existing contact, use the `delete` method:

```php
$response = $osiosms->contacts()->delete('group_id', 'contact_uid');

print_r($response);
```

### View All Contacts in a Group

To view all contacts within a specific group, use the `viewAll` method:

```php
$response = $osiosms->contacts()->viewAll('group_id');

print_r($response);
```

## Groups

The `Groups` class provides methods to manage contact groups within the OsioSMS platform. You can create, view, update, delete, and list contact groups.

### Create a Group

To create a new contact group, use the `create` method:

```php
$response = $osiosms->groups()->create('Group Name');

print_r($response);
```

### View a Group

To view the details of an existing contact group, use the `view` method:

```php
$response = $osiosms->groups()->view('group_id');

print_r($response);
```

### Update a Group

To update the name of an existing contact group, use the `update` method:

```php
$response = $osiosms->groups()->update('group_id', 'New Group Name');

print_r($response);
```

### Delete a Group

To delete an existing contact group, use the `delete` method:

```php
$response = $osiosms->groups()->delete('group_id');

print_r($response);
```

### View All Groups

To view all contact groups, use the `viewAll` method:

```php
$response = $osiosms->groups()->viewAll();

print_r($response);
```

## MMS

The `Mms` class provides methods to send and manage MMS messages using the OsioSMS platform. You can send MMS messages, view details of a specific MMS, and list all MMS messages.

### Send an MMS

To send an MMS message, use the `send` method:

```php
$response = $osiosms->mms()->send(
    '+33612345678', // Recipient's phone number
    'YourName',    // Sender ID
    'https://example.com/150.jpg', // URL of the media to be sent
    'This is a test MMS message', // Optional message body
    '2021-12-20 07:00' // Optional scheduled time in RFC3339 format
);

print_r($response);
```

### View an MMS

To view the details of a specific MMS message, use the `view` method:

```php
$response = $osiosms->mms()->view('mms_uid');

print_r($response);
```

### View All MMS Messages

To view all MMS messages, use the `viewAll` method:

```php
$response = $osiosms->mms()->viewAll();

print_r($response);
```

## SMS

The `Sms` class provides methods to send and manage SMS messages using the OsioSMS platform. You can send individual SMS messages, run SMS campaigns, and view details of specific SMS messages or campaigns.

### Send an SMS

To send an SMS message, use the `send` method:

```php
$response = $osiosms->sms()->send(
    '+33612345678',  // Recipient's phone number
    'YourName',     // Sender ID
    'plain',        // Message type (e.g., 'plain' for regular SMS)
    'This is a test SMS message', // Message body
    '2021-12-20 07:00', // Optional scheduled time in RFC3339 format
    'dlt_template_id'   // Optional DLT template ID
);

print_r($response);
```

### Send an SMS Campaign

To send an SMS campaign to a contact list, use the `sendCampaign` method:

```php
$response = $osiosms->sms()->sendCampaign(
    'contact_list_id', // ID of the contact list
    'YourName',        // Sender ID
    'plain',           // Message type (e.g., 'plain' for regular SMS)
    'This is a campaign SMS message', // Message body
    '2021-12-20 07:00', // Optional scheduled time in RFC3339 format
    'dlt_template_id'   // Optional DLT template ID
);

print_r($response);
```

### View an SMS

To view the details of a specific SMS message, use the `view` method:

```php
$response = $osiosms->sms()->view('sms_uid');

print_r($response);
```

### View All SMS Messages

To view all SMS messages, use the `viewAll` method:

```php
$response = $osiosms->sms()->viewAll();

print_r($response);
```

### View an SMS Campaign

To view the details of a specific SMS campaign, use the `viewCampaign` method:

```php
$response = $osiosms->sms()->viewCampaign('campaign_uid');

print_r($response);
```

## Voice

The `Voice` class provides methods to send and manage voice messages using the OsioSMS platform. You can send voice messages, view details of a specific voice message, and list all voice messages.

### Send a Voice Message

To send a voice message, use the `send` method:

```php
$response = $osiosms->voice()->send(
    '+33612345678',  // Recipient's phone number
    'YourName',     // Sender ID
    'en-gb',        // Language code (e.g., 'en-gb' for British English)
    'female',       // Gender ('male' or 'female')
    'This is a test voice message', // Message to be spoken
    '2021-12-20 07:00' // Optional scheduled time in RFC3339 format
);

print_r($response);
```

### View a Voice Message

To view the details of a specific voice message, use the `view` method:

```php
$response = $osiosms->voice()->view('voice_uid');

print_r($response);
```

### View All Voice Messages

To view all voice messages, use the `viewAll` method:

```php
$response = $osiosms->voice()->viewAll();

print_r($response);
```

## OTP

The `Otp` class provides methods to send and manage One-Time Password (OTP) messages using the OsioSMS platform. You can send OTP messages, view details of a specific OTP message, and list all OTP messages.

### Send an OTP Message

To send an OTP message, use the `send` method:

```php
$response = $osiosms->otp()->send(
    '31612345678',  // Recipient's phone number
    'YourName',     // Sender ID
    'Your OTP code is 123456', // OTP message content
    '2021-12-20 07:00' // Optional scheduled time in RFC3339 format
);

print_r($response);
```

### View an OTP Message

To view the details of a specific OTP message, use the `view` method:

```php
$response = $osiosms->otp()->view('otp_uid');

print_r($response);
```

### View All OTP Messages

To view all OTP messages, use the `viewAll` method:

```php
$response = $osiosms->otp()->viewAll();

print_r($response);
```

## WhatsApp

The `Whatsapp` class provides methods to send and manage WhatsApp messages using the OsioSMS platform. You can send WhatsApp messages, view details of a specific WhatsApp message, and list all WhatsApp messages.

### Send a WhatsApp Message

To send a WhatsApp message, use the `send` method:

```php
$response = $osiosms->whatsapp()->send(
    '+33612345678',  // Recipient's phone number
    'YourName',     // Sender ID
    'This is a test WhatsApp message', // Message content
    'https://example.com/150.jpg', // Optional media URL for attachment
    '2021-12-20 07:00' // Optional scheduled time in RFC3339 format
);

print_r($response);
```

### View a WhatsApp Message

To view the details of a specific WhatsApp message, use the `view` method:

```php
$response = $osiosms->whatsapp()->view('whatsapp_uid');

print_r($response);
```

### View All WhatsApp Messages

To view all WhatsApp messages, use the `viewAll` method:

```php
$response = $osiosms->whatsapp()->viewAll();

print_r($response);
```

## Viber

The `ViberApi` class provides methods to send and manage Viber messages using the OsioSMS platform. You can send Viber messages, view details of a specific Viber message, and list all Viber messages.

### Send a Viber Message

To send a Viber message, use the `send` method:

```php
$response = $osiosms->viber()->send(
    '+33612345678',  // Recipient's phone number
    'YourName',     // Sender ID
    'This is a test Viber message', // Message content
    'https://via.placeholder.com/150.jpg', // Optional media URL for attachment
    '2021-12-20 07:00' // Optional scheduled time in RFC3339 format
);

print_r($response);
```

### View a Viber Message

To view the details of a specific Viber message, use the `view` method:

```php
$response = $osiosms->viber()->view('viber_uid');

print_r($response);
```

### View All Viber Messages

To view all Viber messages, use the `viewAll` method:

```php
$response = $osiosms->viber()->viewAll();

print_r($response);
```

## Profile

The `Profile` class provides methods to retrieve account information, including your remaining SMS balance and profile details, using the OsioSMS platform.

### View SMS Balance

To check your remaining SMS balance, use the `viewBalance` method:

```php
$response = $osiosms->profile()->viewBalance();

print_r($response);
```

### View Profile Information

To view your profile details, use the `viewProfile` method:

```php
$response = $osiosms->profile()->viewProfile();

print_r($response);
```

### Response Handling

All methods return an array with the response data from the OsioSMS API. If the request is successful, the `status` will be `success` and `data` will contain the contact details or relevant information. In case of an error, the `status` will be `error` and the `message` will provide a human-readable description of the error.

