<?php
/**
 * Neap (http://neap.io/)
 *
 * @link      http://github.com/e7d/neap for the canonical source repository
 * @copyright Copyright (c) 2016 Michaël "e7d" Ferrand (http://github.com/e7d)
 * @license   https://github.com/e7d/neap/blob/master/LICENSE.txt The MIT License
 */

namespace Application\Database\Ingest;

use Application\Database\Ingest\Ingest;
use Zend\Db\ResultSet\ResultSet;
use Zend\Db\TableGateway\TableGateway;

class IngestTableGatewayFactory
{
    public function __invoke($serviceManager)
    {
        $adapter = $serviceManager->get('Application\Database\DatabaseService')->getAdapter();
        $resultSet = new ResultSet();
        $resultSet->setArrayObjectPrototype(new Ingest());
        return new TableGateway('ingest', $adapter, null, $resultSet);
    }
}
