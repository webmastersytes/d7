<?php
/**
 * Copyright (c) 2009 - 2010, RealDolmen
 * All rights reserved.
 *
 * Redistribution and use in source and binary forms, with or without
 * modification, are permitted provided that the following conditions are met:
 *     * Redistributions of source code must retain the above copyright
 *       notice, this list of conditions and the following disclaimer.
 *     * Redistributions in binary form must reproduce the above copyright
 *       notice, this list of conditions and the following disclaimer in the
 *       documentation and/or other materials provided with the distribution.
 *     * Neither the name of RealDolmen nor the
 *       names of its contributors may be used to endorse or promote products
 *       derived from this software without specific prior written permission.
 *
 * THIS SOFTWARE IS PROVIDED BY RealDolmen ''AS IS'' AND ANY
 * EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED
 * WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE
 * DISCLAIMED. IN NO EVENT SHALL RealDolmen BE LIABLE FOR ANY
 * DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES
 * (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES;
 * LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND
 * ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT
 * (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS
 * SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
 *
 * @category   Microsoft
 * @package    Microsoft_WindowsAzure
 * @subpackage Management
 * @copyright  Copyright (c) 2009 - 2010, RealDolmen (http://www.realdolmen.com)
 * @license    http://phpazure.codeplex.com/license
 * @version    $Id: BlobInstance.php 53615 2010-11-16 20:45:11Z unknown $
 */

/**
 * @see Microsoft_WindowsAzure_Management_Exception
 */
require_once 'Microsoft/WindowsAzure/Management/Exception.php';

/**
 * @see Microsoft_WindowsAzure_Management_ServiceEntityAbstract
 */
require_once 'Microsoft/WindowsAzure/Management/ServiceEntityAbstract.php';

/**
 * @category   Microsoft
 * @package    Microsoft_WindowsAzure
 * @subpackage Management
 * @copyright  Copyright (c) 2009 - 2010, RealDolmen (http://www.realdolmen.com)
 * @license    http://phpazure.codeplex.com/license
 * 
 * @property string $Name              The affinity group name. 
 * @property string $Label             A label for the affinity group.
 * @property string $Description       A description for the affinity group.
 * @property string $Location          The location of the affinity group.
 * @property array  $HostedServices    A list of hosted services in this affinity gtoup.
 * @property array  $StorageServices   A list of storage services in this affinity gtoup.
 */
class Microsoft_WindowsAzure_Management_AffinityGroupInstance
	extends Microsoft_WindowsAzure_Management_ServiceEntityAbstract
{    
    /**
     * Constructor
     * 
     * @property string $name              The affinity group name. 
     * @property string $label             A label for the affinity group.
     * @property string $description       A description for the affinity group.
     * @property string $location          The location of the affinity group.
     * @property array  $hostedServices    A list of hosted services in this affinity gtoup.
     * @property array  $storageServices   A list of storage services in this affinity gtoup.
	 */
    public function __construct($name, $label, $description, $location, $hostedServices = array(), $storageServices = array()) 
    {	        
        $this->_data = array(
            'name'              => $name,
            'label'             => base64_decode($label),
            'description'       => $description,
            'location'          => $location,
            'hostedservices'    => $hostedServices,
            'storageservices'   => $storageServices
        );
    }
}
