<?php

namespace App\Http\Middleware;

use App\Models\Profile;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BlockUpdateProfile
{
    public function handle(Request $request, Closure $next)
    {
        $id = auth()->user()->id;
        $check = Profile::where('profile_user_id', $id)->firstOrFail();
        
        if ($check->profile_registrant) {
            return redirect('/profile');
        }

        return $next($request);
    }
}
