<?php


namespace App\Tenant;

use App\Models\Tenant;

class ManagerTenant{

    public function subDominio(){
        $urlTenant = explode('.', request()->getHost() );
        return $urlTenant[0];
    }
    public function tenant(){

        $subdominio = $this->subDominio();
        $tenant = Tenant::where('subdominio',$subdominio)->first();
        return  $tenant;
    }
    public function tenantId(){

        $tenant = $this->tenant();
        return  $tenant->id;
    }
    public function isDominioPrinicipal(){
        $subdominio = $this->subDominio();
        $auxSubDominio = config('tenant.subdominio_master');
        return  $subdominio ==  $auxSubDominio;
    }

}
