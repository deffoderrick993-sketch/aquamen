<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\Visit;

class TrackVisits
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Ignore admin, api, and asset requests
        if ($request->is('admin*') || $request->is('api*') || $request->is('livewire*') || $request->is('assets*')) {
            return $next($request);
        }

        $ip = $request->ip();

        try {
            // Rate-limit tracking: Record a visit only if the same IP hasn't visited in the last 15 minutes
            $recentVisit = Visit::where('ip_address', $ip)
                ->where('created_at', '>=', now()->subMinutes(15))
                ->first();

            if (!$recentVisit) {
                Visit::create([
                    'ip_address' => $ip,
                    'user_agent' => substr($request->userAgent() ?? '', 0, 255),
                    'page_url' => substr($request->fullUrl() ?? '', 0, 255),
                ]);
            }
        } catch (\Throwable $e) {
            // Silently ignore if DB issue occurs
        }

        return $next($request);
    }
}
