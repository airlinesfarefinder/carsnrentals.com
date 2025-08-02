<?php


function config($key)
{
    static $configuration = [
        'phone_number' => '(888) 958-1310',
        'email_id' => 'info@carsnrentals.com',
        'address' => '90 Wilshire Blvd., Suite 700, Santa Monica, CA 90401',
        'domain_name' => 'carsnrentals.com',
    ];

    return isset($configuration[$key]) ? $configuration[$key] : null;
}
