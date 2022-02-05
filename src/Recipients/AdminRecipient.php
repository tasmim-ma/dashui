<?php

namespace Tasmim\Dashui\Recipients;

class AdminRecipient extends Recipient
{
    public function __construct()
    {
        $this->email = config('mail.admin.address');
    }
}
