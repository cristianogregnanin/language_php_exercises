<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include 'FileManager.php';
include 'IpAddressValidator.php';

$fm = new FileManager('addresses.txt', 'valids.txt');

$fm->read();

$ipValidator = new IpAddressValidator($fm->getContent());
$ipValidator->IpAddressValidator();
$ipValidator->PortValidator();

$fm->setContent($ipValidator->getContent());

$fm->write();
