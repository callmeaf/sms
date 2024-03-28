<?php

namespace Callmeaf\Sms\Services\V1\Contracts;

use Illuminate\Http\Client\PendingRequest;
use Illuminate\Http\Client\Response;

interface SmsServiceInterface
{
    public function getApiKey(): string;
    public function getApiUrl(string $append = ''): string;
    public function http(): PendingRequest;
    public function send(string $mobile,string $message): Response;
    public function multiSend(array|string $mobiles,array|string $messages,array|string $senders): Response;
    public function sendViaPattern(string $pattern,string $mobile,array $values): Response;
    public function verifyOtpPattern(): string;
}
