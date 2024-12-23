<?php
/**
 * Copyright © Wubinworks. All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Wubinworks\XmlSecurity\Model\Xml;

use Wubinworks\XmlSecurity\Service\Xml\Security as WubinworksXmlSecurity;

/**
 * Replacement of `\Magento\Framework\Xml\Security`
 */
class Security extends \Magento\Framework\Xml\Security
{
    /**
     * Detect entity in XML string
     *
     * @param string $xmlContent
     * @return bool `false` means has entity
     */
    public function scan($xmlContent)
    {
        return WubinworksXmlSecurity::_heuristicScan($xmlContent);
    }
}
