<?php

namespace WHMCS;

class WHMCS extends WhmcsCore {
    
    /**
     * Instantiate a new instance
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Return a list of all clients
     * 
     * @param int $start
     * @param int $limit
     * @return array
     */
    public function getClients($start = 1, $limit = 25)
    {
        $params = [
            'action'        => 'getclients',
            'limitstart'    => $start,
            'limitnum'      => $limit
        ];

        return $this->get($params);
    }

    /**
     * Returns the specified client's data
     * 
     * @param string|int $client_id
     * @param bool $stats
     * @return array
     */
    public function getClientDetails($client_id, $stats = false)
    {
        $params = [
            'action'    =>  'getclientsdetails',
            'clientid'  =>  $client_id,
            'stats'     =>  $stats
        ];

        return $this->get($params);
    }

    /**
     * Returns the specified client's domainss
     * 
     * @param string|int $clientId
     * @return array
     */
    public function getClientDomains($client_id)
    {
        $params = [
            'action'    =>  'getclientsdomains',
            'clientid'  =>  $client_id
        ];

        return $this->get($params);
    }

    /**
     * Return a list of a client's products
     * 
     * @param int $client_id
     * @param int $start
     * @param int $limit
     * @return array
     */
    public function getClientProducts($client_id, $start = 1, $limit = 25)
    {
        $params = [
            'action'        => 'getclientsproducts',
            'clientid'      => $client_id,
            'limitstart'    => $start,
            'limitnum'      => $limit
        ];

        return $this->get($params);
    }
}