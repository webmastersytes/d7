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
 * @property string $CertificateUrl          Certificate thumbprint address.
 * @property string $Thumbprint              Certificate thumbprint.
 * @property string $ThumbprintAlgorithm	 Certificate thumbprint algorithm.
 * @property string $Data                    Certificate data.
 */
class Microsoft_WindowsAzure_Management_CertificateInstance
	extends Microsoft_WindowsAzure_Management_ServiceEntityAbstract
{    
    /**
     * Constructor
     * 
     * @param string $certificateUrl          Certificate thumbprint address.
     * @param string $thumbprint              Certificate thumbprint.
     * @param string $thumbprintAlgorithm	 Certificate thumbprint algorithm.
     * @param string $data                    Certificate data.
	 */
    public function __construct($certificateUrl, $thumbprint, $thumbprintAlgorithm, $data) 
    {	        
        $this->_data = array(
            'certificateurl'       => $certificateUrl,
            'thumbprint'           => $thumbprint,
            'thumbprintalgorithm'  => $thumbprintAlgorithm,
            'data'                 => base64_decode($data)        
        );
    }
}
