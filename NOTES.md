# Decipher API Notes

Looks like **x-apikey** is a HTTP header that handles the actual Decipher API key.

Guzzle HTTP package only supports php 5.5 and above.

Client.php

__construct ($host = 'v2.decipherinc.com', $scheme = 'https', $email)

    - handles token
    - handles instasiation of other objects
    - particular endpoints 