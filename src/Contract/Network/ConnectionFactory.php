<?php
/**
 * Created by IntelliJ IDEA.
 * User: winglechen
 * Date: 16/4/5
 * Time: 10:17
 */

namespace Zan\Framework\Contract\Network;

interface ConnectionFactory
{
    /**
     * ConnectionFactory constructor.
     * @param array $config
     * @TODO 负载均衡
     */
    public function __construct(array $config);

    /**
     * @return \Zan\Framework\Contract\Network\Connection
     * @throws \Zan\Framework\Network\Connection\Exception\CanNotCreateConnectionException
     * @throws \Zan\Framework\Network\Connection\Exception\ConnectTimeoutException        
     */ 
    public function create();

    public function close();

    public function heart();

}