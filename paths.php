<?php

const APP_PATH = __DIR__;
const CONFIG_PATH = APP_PATH . '/config';
const VENDOR_PATH = APP_PATH . '/vendor';

const LOGS_PATH = APP_PATH . '/runtime/logs';
const COMMON_PATH = APP_PATH . '/common';

const ALIASES = [
    '{@configPath}' => CONFIG_PATH,
    '{@vendorPath}' => VENDOR_PATH,
];