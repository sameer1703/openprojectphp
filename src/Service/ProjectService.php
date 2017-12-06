<?php

namespace OpenprojectAPI\Service;

class ProjectService extends AbstractService
{
    /**
     * Returns all projects
     */
    public function all( $options = array() ) {
        return $this->client->request( 'api/v3/projects', 'get', $options );   
    }
    
    /**
    *  Returns one project  
    */
    public function one( $project_id, $options = array() ) {
        return $this->client->request( 'api/v3/project/'.$project_id.'', 'get', $options );   
    }
    
    /**
    *  Create Project  
    */
    public function create( $options = array() ) {
        return $this->client->request( 'api/v3/projects', 'post', $options );
    }
    
    /**
    *  Add Members into Project  
    */
    public function addmembers($project_id, $options = array()) { 
        return $this->client->request('api/v3/projects/' . $project_id . '/add_members', 'post', $options);
    }
    
   
}