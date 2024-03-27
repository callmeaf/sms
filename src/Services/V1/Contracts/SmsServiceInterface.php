<?php

namespace Callmeaf\Sms\Services\V1\Contracts;

use Illuminate\Http\Client\PendingRequest;
use Illuminate\Http\Client\Response;

interface SmsServiceInterface
{
    public function getApiKey(): string;
    public function getApiUrl(string $append = ''): string;
    public function http(): PendingRequest;
    public function sendViaPattern(string $pattern,string $mobile,array $values): Response;
    public function verifyOtpPattern(): string;
}
