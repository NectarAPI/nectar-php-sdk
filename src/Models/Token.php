<?php

namespace Nectar\Php\Sdk\Models;

class Token extends Base
{
    const TOKEN_PATH = "/v1/tokens";

    public function __construct(string $key, string $secret)
    {
        parent::__construct($key, $secret);
    }

    public function getToken(string $ref): string
    {
        $pathArgs = sprintf("ref=%s", $ref);
        return $this->get(self::TOKEN_PATH, $pathArgs);
    }

    public function generateNativeElectricityToken(\Datetime $tokenId, int $amount, bool $isStid,
                                                   int       $randomNo, string $drn, string $configRef,
                                                   bool      $debug)
    {
        $params = array();
        $params['class'] = '0';
        $params['subclass'] = '0';
        $params['type'] = 'native';
        $params['token_id'] = $this->formatDate($tokenId);
        $params['amount'] = $amount;
        $params['random_no'] = $randomNo;
        $params['is_stid'] = $isStid;
        $params['decoder_reference_number'] = $drn;
        $params['config_ref'] = $configRef;
        $params['debug'] = $debug;

        return $this->generateToken($params);
    }

    public function generatePrismThriftElectricityToken(int    $amount, bool $isStid,
                                                        string $drn, string $configRef,
                                                        bool   $debug)
    {
        $params = array();
        $params['class'] = '0';
        $params['subclass'] = '0';
        $params['type'] = 'prism-thrift';
        $params['amount'] = $amount;
        $params['is_stid'] = $isStid;
        $params['decoder_reference_number'] = $drn;
        $params['config_ref'] = $configRef;
        $params['debug'] = $debug;

        return $this->generateToken($params);
    }

    public function generateNativeWaterToken(\Datetime $tokenId, int $amount, bool $isStid,
                                             int       $randomNo, string $drn, string $configRef,
                                             bool      $debug)
    {
        $params = array();
        $params['class'] = '0';
        $params['subclass'] = '1';
        $params['type'] = 'native';
        $params['token_id'] = $this->formatDate($tokenId);
        $params['amount'] = $amount;
        $params['random_no'] = $randomNo;
        $params['is_stid'] = $isStid;
        $params['decoder_reference_number'] = $drn;
        $params['config_ref'] = $configRef;
        $params['debug'] = $debug;

        return $this->generateToken($params);
    }

    public function generatePrismThriftWaterToken(int    $amount, bool $isStid,
                                                  string $drn, string $configRef,
                                                  bool   $debug)
    {
        $params = array();
        $params['class'] = '0';
        $params['subclass'] = '1';
        $params['type'] = 'prism-thrift';
        $params['amount'] = $amount;
        $params['is_stid'] = $isStid;
        $params['decoder_reference_number'] = $drn;
        $params['config_ref'] = $configRef;
        $params['debug'] = $debug;

        return $this->generateToken($params);
    }

    public function generateNativeGasToken(\Datetime $tokenId, int $amount, bool $isStid,
                                           int       $randomNo, string $drn, string $configRef,
                                           bool      $debug)
    {
        $params = array();
        $params['class'] = '0';
        $params['subclass'] = '2';
        $params['type'] = 'native';
        $params['token_id'] = $this->formatDate($tokenId);
        $params['amount'] = $amount;
        $params['random_no'] = $randomNo;
        $params['is_stid'] = $isStid;
        $params['decoder_reference_number'] = $drn;
        $params['config_ref'] = $configRef;
        $params['debug'] = $debug;

        return $this->generateToken($params);
    }

    public function generatePrismThriftGasToken(int    $amount, bool $isStid,
                                                string $drn, string $configRef,
                                                bool   $debug)
    {
        $params = array();
        $params['class'] = '0';
        $params['subclass'] = '2';
        $params['type'] = 'prism-thrift';
        $params['amount'] = $amount;
        $params['is_stid'] = $isStid;
        $params['decoder_reference_number'] = $drn;
        $params['config_ref'] = $configRef;
        $params['debug'] = $debug;

        return $this->generateToken($params);
    }

    public function generateNativeInitiateMeterTestDisplay10Token(\Datetime $tokenId, string $control,
                                                                  int       $manufacturerCode, bool $isStid,
                                                                  string    $drn, string $configRef,
                                                                  bool      $debug)
    {
        $params = array();
        $params['class'] = '1';
        $params['subclass'] = '0';
        $params['type'] = 'native';
        $params['token_id'] = $this->formatDate($tokenId);
        $params['control'] = $control;
        $params['manufacturer_code'] = $manufacturerCode;
        $params['is_stid'] = $isStid;
        $params['decoder_reference_number'] = $drn;
        $params['config_ref'] = $configRef;
        $params['debug'] = $debug;

        return $this->generateToken($params);
    }

    public function generatePrismThriftInitiateMeterTestDisplay10Token(string $control,
                                                                       int    $manufacturerCode, bool $isStid,
                                                                       string $drn, string $configRef,
                                                                       bool   $debug)
    {
        $params = array();
        $params['class'] = '1';
        $params['subclass'] = '0';
        $params['type'] = 'prism-thrift';
        $params['control'] = $control;
        $params['manufacturer_code'] = $manufacturerCode;
        $params['is_stid'] = $isStid;
        $params['decoder_reference_number'] = $drn;
        $params['config_ref'] = $configRef;
        $params['debug'] = $debug;

        return $this->generateToken($params);
    }

    public function generateNativeInitiateMeterTestDisplay11Token(\Datetime $tokenId, string $control,
                                                                  int       $manufacturerCode, bool $isStid,
                                                                  string    $drn, string $configRef,
                                                                  bool      $debug)
    {
        $params = array();
        $params['class'] = '1';
        $params['subclass'] = '1';
        $params['type'] = 'native';
        $params['token_id'] = $this->formatDate($tokenId);
        $params['control'] = $control;
        $params['manufacturer_code'] = $manufacturerCode;
        $params['is_stid'] = $isStid;
        $params['decoder_reference_number'] = $drn;
        $params['config_ref'] = $configRef;
        $params['debug'] = $debug;

        return $this->generateToken($params);
    }

    public function generatePrismThriftInitiateMeterTestDisplay11Token(string $control,
                                                                       int    $manufacturerCode, bool $isStid,
                                                                       string $drn, string $configRef,
                                                                       bool   $debug)
    {
        $params = array();
        $params['class'] = '1';
        $params['subclass'] = '1';
        $params['type'] = 'prism-thrift';
        $params['control'] = $control;
        $params['manufacturer_code'] = $manufacturerCode;
        $params['is_stid'] = $isStid;
        $params['decoder_reference_number'] = $drn;
        $params['config_ref'] = $configRef;
        $params['debug'] = $debug;

        return $this->generateToken($params);
    }

    public function generateNativeSetMaximumPowerLimitToken(\Datetime $tokenId, int $maximumPowerLimit,
                                                            int       $randomNo, bool $isStid,
                                                            string    $drn, string $configRef,
                                                            bool      $debug)
    {
        $params = array();
        $params['class'] = '2';
        $params['subclass'] = '0';
        $params['type'] = 'native';
        $params['token_id'] = $this->formatDate($tokenId);
        $params['maximum_power_limit'] = $maximumPowerLimit;
        $params['random_no'] = $randomNo;
        $params['is_stid'] = $isStid;
        $params['decoder_reference_number'] = $drn;
        $params['config_ref'] = $configRef;
        $params['debug'] = $debug;

        return $this->generateToken($params);
    }

    public function generatePrismThriftSetMaximumPowerLimitToken(int  $maximumPowerLimit,
                                                                 int  $flagTokenType, int $flagTokenValue,
                                                                 bool $isStid, string $drn, string $configRef,
                                                                 bool $debug)
    {
        $params = array();
        $params['class'] = '2';
        $params['subclass'] = '0';
        $params['type'] = 'prism-thrift';
        $params['maximum_power_limit'] = $maximumPowerLimit;
        $params['flag_token_type'] = $flagTokenType;
        $params['flag_token_value'] = $flagTokenValue;
        $params['is_stid'] = $isStid;
        $params['decoder_reference_number'] = $drn;
        $params['config_ref'] = $configRef;
        $params['debug'] = $debug;

        return $this->generateToken($params);
    }

    public function generateNativeClearCreditToken(\Datetime $tokenId, int $register,
                                                   int       $randomNo, bool $isStid,
                                                   string    $drn, string $configRef,
                                                   bool      $debug)
    {
        $params = array();
        $params['class'] = '2';
        $params['subclass'] = '1';
        $params['type'] = 'native';
        $params['token_id'] = $this->formatDate($tokenId);
        $params['register'] = $register;
        $params['random_no'] = $randomNo;
        $params['is_stid'] = $isStid;
        $params['decoder_reference_number'] = $drn;
        $params['config_ref'] = $configRef;
        $params['debug'] = $debug;

        return $this->generateToken($params);
    }

    public function generatePrismThriftClearCreditToken(bool   $isStid,
                                                        string $drn, string $configRef,
                                                        bool   $debug)
    {
        $params = array();
        $params['class'] = '2';
        $params['subclass'] = '1';
        $params['type'] = 'prism-thrift';
        $params['is_stid'] = $isStid;
        $params['decoder_reference_number'] = $drn;
        $params['config_ref'] = $configRef;
        $params['debug'] = $debug;

        return $this->generateToken($params);
    }

    public function generateNativeSetTariffRateToken(\Datetime $tokenId, int $tariffRate,
                                                     int       $randomNo, bool $isStid,
                                                     string    $drn, string $configRef,
                                                     bool      $debug)
    {
        $params = array();
        $params['class'] = '2';
        $params['subclass'] = '2';
        $params['type'] = 'native';
        $params['token_id'] = $this->formatDate($tokenId);
        $params['tariff_rate'] = $tariffRate;
        $params['random_no'] = $randomNo;
        $params['is_stid'] = $isStid;
        $params['decoder_reference_number'] = $drn;
        $params['config_ref'] = $configRef;
        $params['debug'] = $debug;

        return $this->generateToken($params);
    }

    public function generatePrismThriftSetTariffRateToken(bool   $isStid,
                                                          string $drn, string $configRef,
                                                          bool   $debug)
    {
        $params = array();
        $params['class'] = '2';
        $params['subclass'] = '2';
        $params['type'] = 'prism-thrift';
        $params['is_stid'] = $isStid;
        $params['decoder_reference_number'] = $drn;
        $params['config_ref'] = $configRef;
        $params['debug'] = $debug;

        return $this->generateToken($params);
    }

    public function generateNativeDecoderKeyTokens(\Datetime $tokenId, string $newVendingKey,
                                                   string    $newSupplyGroupCode, string $newTariffIndex,
                                                   int       $newKeyRevisionNo, int $newKeyType, int $newKeyExpiryNo,
                                                   string    $newDrn, string $newIssuerIdentificationNo, int $ro,
                                                   bool      $isStid, string $drn, string $configRef,
                                                   bool      $debug)
    {
        $params = array();
        $params['class'] = '2';
        $params['subclass'] = '3';
        $params['type'] = 'native';
        $params['token_id'] = $this->formatDate($tokenId);
        $params['new_vending_key'] = $newVendingKey;
        $params['new_supply_group_code'] = $newSupplyGroupCode;
        $params['new_tariff_index'] = $newTariffIndex;
        $params['new_key_revision_no'] = $newKeyRevisionNo;
        $params['new_key_type'] = $newKeyType;
        $params['new_key_expiry_no'] = $newKeyExpiryNo;
        $params['new_decoder_reference_number'] = $newDrn;
        $params['new_issuer_identification_no'] = $newIssuerIdentificationNo;
        $params['ro'] = $ro;
        $params['is_stid'] = $isStid;
        $params['decoder_reference_number'] = $drn;
        $params['config_ref'] = $configRef;
        $params['debug'] = $debug;

        return $this->generateToken($params);
    }

    public function generatePrismThriftDecoderKeyTokens(bool   $allow3Kct,
                                                        string $newSupplyGroupCode, string $newTariffIndex,
                                                        int    $newKeyRevisionNo, bool $isStid, string $drn, string $configRef,
                                                        bool   $debug)
    {
        $params = array();
        $params['class'] = '2';
        $params['subclass'] = '3';
        $params['type'] = 'prism-thrift';
        $params['allow_3Kct'] = $allow3Kct;
        $params['new_supply_group_code'] = $newSupplyGroupCode;
        $params['new_tariff_index'] = $newTariffIndex;
        $params['new_key_revision_no'] = $newKeyRevisionNo;
        $params['is_stid'] = $isStid;
        $params['decoder_reference_number'] = $drn;
        $params['config_ref'] = $configRef;
        $params['debug'] = $debug;

        return $this->generateToken($params);
    }

    public function generateNativeClearTamperConditionToken(\Datetime $tokenId, int $pad,
                                                            int       $randomNo, bool $isStid,
                                                            string    $drn, string $configRef,
                                                            bool      $debug)
    {
        $params = array();
        $params['class'] = '2';
        $params['subclass'] = '5';
        $params['type'] = 'native';
        $params['token_id'] = $this->formatDate($tokenId);
        $params['pad'] = $pad;
        $params['random_no'] = $randomNo;
        $params['is_stid'] = $isStid;
        $params['decoder_reference_number'] = $drn;
        $params['config_ref'] = $configRef;
        $params['debug'] = $debug;

        return $this->generateToken($params);
    }

    public function generatePrismThriftClearTamperConditionToken(bool   $isStid,
                                                                 string $drn, string $configRef,
                                                                 bool   $debug)
    {
        $params = array();
        $params['class'] = '2';
        $params['subclass'] = '5';
        $params['type'] = 'prism-thrift';
        $params['is_stid'] = $isStid;
        $params['decoder_reference_number'] = $drn;
        $params['config_ref'] = $configRef;
        $params['debug'] = $debug;

        return $this->generateToken($params);
    }

    public function generateNativeSetMaximumPhasePowerUnbalanceLimitToken(\Datetime $tokenId,
                                                                          int       $mppul, int $randomNo,
                                                                          bool      $isStid, string $drn,
                                                                          string    $configRef, bool $debug)
    {
        $params = array();
        $params['class'] = '2';
        $params['subclass'] = '6';
        $params['type'] = 'native';
        $params['token_id'] = $this->formatDate($tokenId);
        $params['mppul'] = $mppul;
        $params['random_no'] = $randomNo;
        $params['is_stid'] = $isStid;
        $params['decoder_reference_number'] = $drn;
        $params['config_ref'] = $configRef;
        $params['debug'] = $debug;

        return $this->generateToken($params);
    }

    public function generatePrismThriftSetMaximumPhasePowerUnbalanceLimitToken(bool   $isStid,
                                                                               string $drn, string $configRef,
                                                                               bool   $debug)
    {
        $params = array();
        $params['class'] = '2';
        $params['subclass'] = '6';
        $params['type'] = 'prism-thrift';
        $params['is_stid'] = $isStid;
        $params['decoder_reference_number'] = $drn;
        $params['config_ref'] = $configRef;
        $params['debug'] = $debug;

        return $this->generateToken($params);
    }

    public function generateNativeSetWaterMeterFactorToken(\Datetime $tokenId, int $wmFactor,
                                                           int       $randomNo, bool $isStid,
                                                           string    $drn, string $configRef,
                                                           bool      $debug)
    {
        $params = array();
        $params['class'] = '2';
        $params['subclass'] = '7';
        $params['type'] = 'native';
        $params['token_id'] = $this->formatDate($tokenId);
        $params['wm_factor'] = $wmFactor;
        $params['random_no'] = $randomNo;
        $params['is_stid'] = $isStid;
        $params['decoder_reference_number'] = $drn;
        $params['config_ref'] = $configRef;
        $params['debug'] = $debug;

        return $this->generateToken($params);
    }

    public function generatePrismThriftSetWaterMeterFactorToken(bool   $isStid,
                                                                string $drn, string $configRef,
                                                                bool   $debug)
    {
        $params = array();
        $params['class'] = '2';
        $params['subclass'] = '7';
        $params['type'] = 'prism-thrift';
        $params['is_stid'] = $isStid;
        $params['decoder_reference_number'] = $drn;
        $params['config_ref'] = $configRef;
        $params['debug'] = $debug;

        return $this->generateToken($params);
    }

    public function decodeToken(string $drn, string $configRef, string $token, bool $debug): string {
        $params = array();
        $params['decoder_reference_number'] = $drn;
        $params['config_ref'] = $configRef;
        $params['debug'] = $debug;

        $payload = $this->createPayload($params);
        $path = sprintf("%s/%s", self::TOKEN_PATH, $token);
        return $this->post($path, $payload);
    }

    private function formatDate(\Datetime $dt): string
    {
        return $dt->format('Y-m-d\TH:i');
    }

    private function generateToken(array $params): string
    {
        $payload = $this->createPayload($params);
        return $this->post(self::TOKEN_PATH, $payload);
    }
}