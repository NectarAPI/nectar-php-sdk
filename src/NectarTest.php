<?php

require_once 'vendor/autoload.php';

use Nectar\Php\Sdk\Nectar;

$key = 'b4d86649-c11a-4b43-b499-8dd950dc51a9';
$secret = '2fb70fe3-8800-449c-a08e-108e22228da5';
$nectar = new Nectar($key, $secret);

# get token
echo $nectar->getTokensFactory()->getToken('466d464c-eba1-4157-baa8-e18465d4b566');

# get user
echo $nectar->getUserFactory()->getUser();

$firstName = 'first_name';
$lastName = 'last_name';
$username = 'username';
$password = 'password';
$phoneNo = '0700100100';
$imageUrl = 'https://image.url';
$email = 'user@email.com';
$activated = true;

# create user
echo $nectar->getUserFactory()->createUser($firstName, $lastName, $username,
                                            $password, $phoneNo, $imageUrl,
                                            $email, $activated);

# update user
echo $nectar->getUserFactory()->createUser($firstName, $lastName, $username,
                                            $password, $phoneNo, $imageUrl,
                                            $email, $activated);

# delete user
echo $nectar->getUserFactory()->deleteUser();

# create public key
$name = "Public Key";
$key = "MIICIjANBgkqhkiG9w0BAQEFAAOCAg8AMIICCgKCAgEAgZqr+BXGwQWe5UMY5CLM6a+XbFIZT0CAy/hx8Adhlb0PrwiQ9w4NNy9YMGTyvVTRyKBRgEjFNTJKBBDPFpWJyMa5BmL3JKmGZIYyWaggAILC2QbnEo2GqKbGfys3kiD/HfKCbxwohhNLieI+ULXw46IIriUEQCtx+AZyYTr620E26u1ANMvKzJLZQxTawUDNgy9S/YHSpMMftTF3LbEK5F2J33tLEbRBOVY4fvPL8w3YCx1Wu911+xz7UyVjdLDn26YoSl7+Fz5zZdwdhRMr+hDF8CInhbtAb1/cptFW4VBFVjDmHWn61bHUITbLWK5WRUzYoFWso4yOFYuq7JSMVYBKJE+27aMKZgPWiVrYaZVROxWoge7H//O+/NpWhyj9/K2Mzo6QzcLPTmw/1KN7CvIFIXDo+5wNZ+XFHuDeOaWrd2sMKvqXpEusdZYiuxy0e7Sze8/O5ada3BgFiM50DR1AIjZGONKEfAi2cGRXpBfCBUAU64RMeevobkrDzOSXCDy19o9wTfk4eRiWsuPIGm6zsJqA73+dW0KcSylBF5eaoPQbw/8WJjWClqlpQLfiKwnL2mjk6oFDAtVBfeRNjwd7Dyy1TvdbRJ5QwkfSHuwU2TphwPu/uMRJPOxvtMwgC3LXKnFEB2O9EzEDCrPmv6rOJn1i0tByDcNT0gL49MMCAwEAAQ==";
$activated = true;
echo $nectar->getPublicKeysFactory()->createPublicKey($name, $key, $activated);

# get public keys
echo $nectar->getPublicKeysFactory()->getPublicKeys($activated);

# activate public keys
echo $nectar->getPublicKeysFactory()->activatedPublicKey('6897b9fb-3c54-440a-b802-e3765156df88');

# deactivate public keys
echo $nectar->getPublicKeysFactory()->deactivatePublicKey('6897b9fb-3c54-440a-b802-e3765156df88');

# get notifications
echo $nectar->getNotificationsFactory()->getNotifications();

# set notification read status
$ref = "931ef4e4-b375-40d8-b58e-c1874792ce64";
$status = true;
$timestamp = 1606754076302;
echo $nectar->getNotificationsFactory()->setNotificationReadStatus($ref, $status, $timestamp);

# get credits
echo $nectar->getCreditsFactory()->getCredits();

# get transactions
echo $nectar->getCreditsFactory()->getTransactions();

# get credentials
echo $nectar->getCredentialsFactory()->getCredentials('d41879ff-cb85-4bef-89a1-6c3cd7e2dd58');

# activate credentials
echo $nectar->getCredentialsFactory()->activateCredentials('d41879ff-cb85-4bef-89a1-6c3cd7e2dd58');

# deactivate credentials
echo $nectar->getCredentialsFactory()->deactivateCredentials('d41879ff-cb85-4bef-89a1-6c3cd7e2dd58');

# get configurations
echo $nectar->getConfigurationsFactory()->getConfiguration('47693f75-b77f-4280-b00f-9c0d90111a63', true);

# activate configurations
echo $nectar->getConfigurationsFactory()->activateConfiguration('ac3380d8-5d85-4161-92e5-03c1dc62de3d');

# deactivate configurations
echo $nectar->getConfigurationsFactory()->deactivateConfiguration('ac3380d8-5d85-4161-92e5-03c1dc62de3d');

# -- class 0 params ---
$tokenId = DateTime::createFromFormat('Y-m-d\TH:i:s', '2020-01-15T10:20:00');
$amount = 10; 
$isStid = false;
$randomNo = 5;
$drn = '47500150231';
$nativeConfigRef = 'cbf43d1f-8c2d-44a0-95a9-9c3c13ec846c';
$prismConfigRef = 'c2fe451d-c20d-41e5-88d2-2a88a2a71c79';
$debug = false;

# generate electricity token
echo $nectar->getTokensFactory()->generateNativeElectricityToken($tokenId, $amount, $isStid, $randomNo, $drn, $nativeConfigRef, $debug);

# generate prism electricity token
echo $nectar->getTokensFactory()->generatePrismThriftElectricityToken($amount, $isStid, $drn, $prismConfigRef, $debug);

# generate water token
echo $nectar->getTokensFactory()->generateNativeWaterToken($tokenId, $amount, $isStid, $randomNo, $drn, $nativeConfigRef, $debug);

# generate prism water token
echo $nectar->getTokensFactory()->generatePrismThriftWaterToken($amount, $isStid, $drn, $prismConfigRef, $debug);

# generate gas token
echo $nectar->getTokensFactory()->generateNativeGasToken($tokenId, $amount, $isStid, $randomNo, $drn, $nativeConfigRef, $debug);

# generate prism gas token
echo $nectar->getTokensFactory()->generatePrismThriftGasToken($amount, $isStid, $drn, $prismConfigRef, $debug);

// --- class 1 params ---
$tokenId = DateTime::createFromFormat('Y-m-d\TH:i:s', '2020-01-15T10:20:00');
$control = '68719476735';
$manufacturerCode = 21;
$isStid = false;
$drn = '47500150231';
$nativeConfigRef = 'cbf43d1f-8c2d-44a0-95a9-9c3c13ec846c';
$debug = false;

# generate InitiateMeterTestDisplay10Token
echo $nectar->getTokensFactory()->generateNativeInitiateMeterTestDisplay10Token($tokenId, $control, $manufacturerCode, $isStid, $drn, $nativeConfigRef, $debug);

# generate prism InitiateMeterTestDisplay10Token
echo $nectar->getTokensFactory()->generatePrismThriftInitiateMeterTestDisplay10Token($control, $manufacturerCode, $isStid, $drn, $prismConfigRef, $debug);

$control = '268435455';
$manufacturerCode = 1234;

# generateInitiateMeterTestDisplay11Token
echo $nectar->getTokensFactory()->generateNativeInitiateMeterTestDisplay11Token($tokenId, $control, $manufacturerCode, $isStid, $drn, $nativeConfigRef, $debug);

# generate prism InitiateMeterTestDisplay10Token
echo $nectar->getTokensFactory()->generatePrismThriftInitiateMeterTestDisplay11Token($control, $manufacturerCode, $isStid, $drn, $prismConfigRef, $debug);

// --- class 2,0 params ---
$tokenId = DateTime::createFromFormat('Y-m-d\TH:i:s', '2020-01-15T10:20:00');
$maximumPowerLimit = 100;
$randomNo = 5;
$isStid = false;
$drn = '47500150231';
$nativeConfigRef = 'cbf43d1f-8c2d-44a0-95a9-9c3c13ec846c';
$debug = false;

# generate SetMaximumPowerLimitToken
echo $nectar->getTokensFactory()->generateNativeSetMaximumPowerLimitToken($tokenId, $maximumPowerLimit, $randomNo, $isStid, $drn, $nativeConfigRef, $debug);

$flagTokenType = 10;
$flagTokenValue = 1;
# generate prism SetMaximumPowerLimitToken
echo $nectar->getTokensFactory()->generatePrismThriftSetMaximumPowerLimitToken($maximumPowerLimit, $flagTokenType, $flagTokenValue,
                                                                 $isStid, $drn, $prismConfigRef, $debug);


// --- class 2,1 params ---
$tokenId = DateTime::createFromFormat('Y-m-d\TH:i:s', '2020-01-15T10:20:00');
$register = 0;
$randomNo = 5; 
$isStid = false;
$drn = '47500150231';
$nativeConfigRef =  'cbf43d1f-8c2d-44a0-95a9-9c3c13ec846c';
$debug = false;

# generateClearCreditToken
echo $nectar->getTokensFactory()->generateNativeClearCreditToken($tokenId, $register, $randomNo, $isStid, $drn, $nativeConfigRef, $debug);

# generate prism clear credit token
echo $nectar->getTokensFactory()->generatePrismThriftClearCreditToken($isStid, $drn, $prismConfigRef, $debug);

// --- class 2,2 params ---
$tokenId = DateTime::createFromFormat('Y-m-d\TH:i:s', '2020-01-15T10:20:00');
$tariffRate = 10;
$randomNo = 5;
$isStid = false;
$drn = '47500150231';
$nativeConfigRef =  'cbf43d1f-8c2d-44a0-95a9-9c3c13ec846c';
$debug = false;

# generateSetTariffRateToken
echo $nectar->getTokensFactory()->generateNativeSetTariffRateToken($tokenId, $tariffRate, $randomNo, $isStid, $drn, $nativeConfigRef, $debug);

# generate prism SetTariffRateToken
echo $nectar->getTokensFactory()->generatePrismThriftSetTariffRateToken($isStid, $drn, $prismConfigRef, $debug);

// --- class 2,3-4 params ---
$tokenId = DateTime::createFromFormat('Y-m-d\TH:i:s', '2020-01-15T10:20:00'); 
$newVendingKey = '0abc12def3456789';
$newSupplyGroupCode = '000046'; 
$newTariffIndex = '01';
$newKeyRevisionNo = 1;
$newKeyType = 0;
$newKeyExpiryNo = 255;
$newDrn = '47500150231';
$newIssuerIdentificationNo = '600727';
$ro = 0;
$isStid = false;
$drn = '47500150231';
$nativeConfigRef =  'cbf43d1f-8c2d-44a0-95a9-9c3c13ec846c';
$debug = false;

# generate DecoderKeyTokens
echo $nectar->getTokensFactory()->generateNativeDecoderKeyTokens($tokenId, $newVendingKey, $newSupplyGroupCode, $newTariffIndex,
                                                                    $newKeyRevisionNo, $newKeyType, $newKeyExpiryNo, $newDrn, $newIssuerIdentificationNo, $ro, 
                                                                    $isStid, $drn, $nativeConfigRef, $debug);

# generate prism decoder key tokens
$allow3Kct = false;
$newSupplyGroupCode = '600675'; 
echo $nectar->getTokensFactory()->generatePrismThriftDecoderKeyTokens($allow3Kct, $newSupplyGroupCode, $newTariffIndex,
                                                                $newKeyRevisionNo, $isStid, $drn, $prismConfigRef, $debug);                                                                   

// --- class 2,5 params ---
$tokenId = DateTime::createFromFormat('Y-m-d\TH:i:s', '2020-01-15T10:20:00');
$pad = 10;
$randomNo = 5;
$isStid = false;
$drn = '47500150231';
$nativeConfigRef =  'cbf43d1f-8c2d-44a0-95a9-9c3c13ec846c';
$debug = false;

# generateClearTamperConditionToken
echo $nectar->getTokensFactory()->generateNativeClearTamperConditionToken($tokenId, $pad, $randomNo, $isStid, $drn, $nativeConfigRef, $debug);

# generate prism clear tamper condition token
echo $nectar->getTokensFactory()->generatePrismThriftClearTamperConditionToken($isStid, $drn, $prismConfigRef, $debug);

// --- class 2,6 params ---
$tokenId = DateTime::createFromFormat('Y-m-d\TH:i:s', '2020-01-15T10:20:00');
$mppul = 10;
$randomNo = 5;
$isStid = false;
$drn = '47500150231';
$nativeConfigRef =  'cbf43d1f-8c2d-44a0-95a9-9c3c13ec846c';
$debug = false;

# generateSetMaximumPhasePowerUnbalanceLimitToken
echo $nectar->getTokensFactory()->generateNativeSetMaximumPhasePowerUnbalanceLimitToken($tokenId, $mppul, $randomNo, $isStid, $drn, $nativeConfigRef, $debug);

# generate prism set maximum phase power unbalance limit token
echo $nectar->getTokensFactory()->generatePrismThriftSetMaximumPhasePowerUnbalanceLimitToken($isStid, $drn, $prismConfigRef, $debug);

// --- class 2,7 params ---
$tokenId = DateTime::createFromFormat('Y-m-d\TH:i:s', '2020-01-15T10:20:00'); 
$wmFactor = 10;
$randomNo = 5;
$isStid = false;
$drn = '47500150231';
$nativeConfigRef =  'cbf43d1f-8c2d-44a0-95a9-9c3c13ec846c';
$debug = false;

# generateSetWaterMeterFactorToken
echo $nectar->getTokensFactory()->generateNativeSetWaterMeterFactorToken($tokenId, $wmFactor, $randomNo, $isStid, $drn, $nativeConfigRef, $debug);

# generate prism set water meter factor token
echo $nectar->getTokensFactory()->generatePrismThriftSetWaterMeterFactorToken($isStid, $drn, $prismConfigRef, $debug);

# decode native token
$token = '61453851089841090384';
$drn = '47500150231';
$nativeConfigRef =  'cbf43d1f-8c2d-44a0-95a9-9c3c13ec846c';
$debug = false;
echo $nectar->getTokensFactory()->decodeToken($drn, $nativeConfigRef, $token, $debug);

# decode prism token
$token = '55775868427448788093';
$drn = '47500150231';
$prismConfigRef = 'c2fe451d-c20d-41e5-88d2-2a88a2a71c79';
$debug = false;
echo $nectar->getTokensFactory()->decodeToken($drn, $prismConfigRef, $token, $debug);