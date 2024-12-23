<?php
/**
 * Copyright © Wubinworks. All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Wubinworks\XmlSecurity\Service\Xml;

/**
 * Bridge for Magento framework and `laminas/laminas-xml`
 */
class Security extends \Laminas\Xml\Security
{
    /**
     * Heuristic scan to detect entity in XML
     *
     * @param string $xml
     * @return bool
     *
     * phpcs:disable Magento2.Functions.StaticFunction.StaticFunction
     */
    public static function _heuristicScan(string $xml): bool
    {
        try {
            parent::heuristicScan($xml);
            return true;
        } catch (\Laminas\Xml\Exception\RuntimeException $e) {
            return false;
        }
    }
}
