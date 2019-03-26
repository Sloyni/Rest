<?php
/**
 * MIT License
 *
 * Copyright (c) 2019 FroxyNetwork
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in all
 * copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 * SOFTWARE.
 *
 * @author 0ddlyoko
 */

if (!defined('DS'))
    define('DS', DIRECTORY_SEPARATOR);
if (!defined('ROOT'))
    define('ROOT', dirname(dirname(dirname(__FILE__))));
if (!defined('API_NAME'))
    define('API_NAME', 'Api');
if (!defined('API_DIR'))
    define('API_DIR', ROOT.DS.API_NAME);
if (!defined('WEB_NAME'))
    define('WEB_NAME', 'Web');
if (!defined('WEB_DIR'))
    define('WEB_DIR', ROOT.DS.WEB_NAME);
// TODO Récupérer l'url depuis un fichier de config
if (!defined('WEBSITE'))
    define('WEBSITE', 'localhost');