<?php
/**
 *
 * PluginMarketplace
 *
 * Copyright (c) 2012-2013, Christian Suenkel <info@suenkel.org>
 * All rights reserved.
 *
 * Redistribution and use in source and binary forms, with or without
 * modification, are permitted provided that the following conditions
 * are met:
 *
 * * Redistributions of source code must retain the above copyright
 *   notice, this list of conditions and the following disclaimer.
 *
 * * Redistributions in binary form must reproduce the above copyright
 *   notice, this list of conditions and the following disclaimer in
 *   the documentation and/or other materials provided with the
 *   distribution.
 *
 * * Neither the name of Christian Suenkel nor the names of his
 *   contributors may be used to endorse or promote products derived
 *   from this software without specific prior written permission.
 *
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS
 * "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT
 * LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS
 * FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE
 * COPYRIGHT OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT,
 * INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING,
 * BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES;
 * LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER
 * CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT
 * LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN
 * ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE
 * POSSIBILITY OF SUCH DAMAGE.
 *
 * @author Christian Suenkel <christian@suenkel.de>
 * @link http://plugin.suenkel.org
 * @copyright 2012-2013 Christian Suenkel <info@suenkel.de>
 * @license http://www.opensource.org/licenses/BSD-3-Clause The BSD 3-Clause License
 * @category Piwik_Plugins
 * @package  PluginMarketplace
 */

/**
 * Include the ochestra
 */
require_once dirname(__FILE__) . '/Appstore.php';
require_once dirname(__FILE__) . '/Task/TaskSet.php';
require_once dirname(__FILE__) . '/Task/Processor.php';
/**
 * Library: Prerequisite
 * check all requirements which has to be fullfilled, the the autoplugin can do its work
 *
 * @package  PluginMarketplace
 * @subpackage lib
 */
class PluginMarketplace_Prerequisite
{
    
    /**
     *
     * @var PluginMarketplace_Prerequisite
     */
    protected static $instance = null;

    /**
     * Singleton
     *
     * @return PluginMarketplace_Prerequisite
     */
    static public function getInstance()
    {
        if (self::$instance == null) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    /**
     * perform all checks
     */
    public function all()
    {
        $this->filessytem();
    }

    /**
     * check, if filesstem is writeable
     */
    public function filessytem()
    {
        Piwik::checkDirectoriesWritableOrDie();
        Piwik::checkDirectoriesWritableOrDie(array('/plugins'));
    }
}