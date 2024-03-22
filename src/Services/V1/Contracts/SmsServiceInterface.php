<?php

namespace Callmeaf\Sms\Services\V1\Contracts;

use Illuminate\Http\Client\Response;

interface SmsServiceInterface
{
    public function getApiUrl(): string;
    public function sendViaPattern(string $pattern,string $mobile,array $values): Response;
    public function verifyOtpPattern(): string;
}
