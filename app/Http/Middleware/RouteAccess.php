<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Model\Access;


class RouteAccess
{
    /**
     * Checks if the user's role has access to the route 
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param   $permission
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        /** Checks if the user is authenticated */
        if ($request->user() === null){
            return new JsonResponse(['status_code' => 401,'errors' =>[Lang::trans('message.api.auth.error')]]);
        }
         // Get the current route.
        $route = $request->route();
        // Get route actions
        $actions = $route->getAction();
        // Check if we have any permissions to check the user has.
        if (!$permissions = isset($actions['permissions']) ? $actions['permissions'] : null){
        // No permissions to check, allow access.
          return $next($request);
        }
        // Get the user roles
        $roles = $request->user()->getRoles();
        // Finding the superadmin and admin access
        $superAdminAccess =  \App\Model\Access::where('permission_code', Access::SUPERADMIN_ACCESS)->get()->first();
        $adminAccess = \App\Model\Access::where('permission_code', Access::ADMIN_ACCESS)->get()->first();
        //dd($roles);
        foreach ($roles as $role){
            // Checks if the role has superadmin access
            $checkSuperAdminAccess = DB::table('role_access')->where('role_id',$role['id'])->where('access_id',$superAdminAccess->id)->first();
            if ($checkSuperAdminAccess){
                // If the current role has superadmin permissions, allow access
                return $next($request);
            }
             // Checks if the role has admin access
            $checkAdminAccess = DB::table('role_access')->where('role_id',$role['id'])->where('access_id',$adminAccess->id)->first();
            if ($checkAdminAccess){
                 // If the current role has admin permissions, allow access
                 return $next($request);
            }
            // Finds the permission  needed to access the route
            $access =  \App\Model\Access::where('slug', $permissions)->get()->first();
            // checks if the role has the needed permission 
            $checkAccess =  DB::table('role_access')->where('role_id',$role['id'])->where('access_id',$access->id)->first();
            if ($checkAccess) {
               // the role has the permission, allow access
               return $next($request);
            }
            else
               return new JsonResponse(['status_code' => 401,'errors' =>[Lang::trans('message.api.access.error')]]);
        }
        return new JsonResponse(['status_code' => 401,'errors' => [Lang::trans('message.api.roles.error')]]);
             
    }
}
