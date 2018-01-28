<?php

/*
 * B2BCoin.xyz
 * https://faucetinabox.com/
 *
 * Copyright (c) 2014-2016 LiveHome Sp. z o. o.
 *
 * This file is part of B2BCoin.xyz.
 *
 * B2BCoin.xyz is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * B2BCoin.xyz is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with B2BCoin.xyz.  If not, see <http://www.gnu.org/licenses/>.
 */

require_once("script/common.php");
require_once("libs/coolphpcaptcha.php");

$captcha = new FiabCoolCaptcha();
$captcha->wordsFile = '';
$captcha->session_var = "$session_prefix-cool-php-captcha";
$captcha->width = 330;
//$captcha->imageFormat = 'png';
//$captcha->lineWidth = 3;
//$captcha->scale = 3; $captcha->blur = true;
$captcha->resourcesPath = dirname(__FILE__)."/libs/cool-php-captcha/resources";

$captcha->CreateImage();
