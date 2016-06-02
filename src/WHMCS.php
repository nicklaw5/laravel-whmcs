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
    public function getClients($start = 0, $limit = 25, $search = null)
    {
        $data = [
            'action'        => 'getclients',
            'limitstart'    => $start,
            'limitnum'      => $limit,
        ];

        if($search)
            $data['search'] = $search;
        
        return $this->submitRequest($data);
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
        $data = [
            'action'    =>  'getclientsdetails',
            'clientid'  =>  $client_id,
            'stats'     =>  $stats
        ];

        return $this->submitRequest($data);
    }

    /**
     * Returns the specified client's domainss
     * 
     * @param string|int $clientId
     * @return array
     */
    public function getClientDomains($client_id, $start = 0, $limit = 25)
    {
        $data = [
            'action'        =>  'getclientsdomains',
            'clientid'      =>  $client_id,
            'limitstart'    =>  $start,
            'limitnum'      =>  $limit
        ];

        return $this->submitRequest($data);
    }

    /**
     * Return a list of a client's products
     * 
     * @param int $client_id
     * @param int $start
     * @param int $limit
     * @return array
     */
    public function getClientProducts($client_id, $start = 0, $limit = 25)
    {
        $data = [
            'action'        => 'getclientsproducts',
            'clientid'      => $client_id,
            'limitstart'    =>  $start,
            'limitnum'      =>  $limit
        ];

        return $this->submitRequest($data);
    }

    /**
     * Creates a new client
     * 
     * @param array $data
     * @return array
     */
    public function createClient($data)
    {
        $data['action'] = 'addclient';

        return $this->submitRequest($data);
    }
}