<?php

namespace App\Http\Middleware\Tenant;

use Closure;
use Illuminate\Http\Request;

class TenantFilesystems
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        
        if(session('tenant')){
            $uuid = session('tenant')['uuid'];
            config()->set([
                'filesystems.disks.public.root' => config('filesystems.disks.public.root') . "/{$uuid}",
                'filesystems.disks.public.url' => config('filesystems.disks.public.url') . "/{$uuid}",
            ]);
        }

        return $next($request);
    }
}
