<?php

namespace App\Http\Middleware\Tenant;

use Closure;
use Illuminate\Http\Request;
use App\Tenant\ManagerTenant;

class TenantMiddleware
{
    /**
     * Handle an incoming request.
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
         $urlTenant =  app(ManagerTenant::class);
         $tenant = $urlTenant->tenant();

         if(!$tenant && $request->url()!=route('tenant.404') ){
             return redirect()->route('tenant.404');
         }
         if($tenant){
            $this->setSession($tenant->only(['nome','status','dados_cadastrais','sistema_info','uuid']));
         }

        return $next($request);
    }

    public function setSession($tenant){
        session()->put('logo-empresa', $tenant['nome']);
        session()->put('tenant', $tenant);
    }
}
