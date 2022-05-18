<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use App\Sponsor;
use App\ContactInfo;
use App\Event;
use App\Berita;
use App\Download;
use App\Background;
use App\HomeButton;
use App\LineText;
use App\Iklan;
use App\SponsorLogo;
use View;
use Auth;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

        
        if (Schema::hasTable('sponsors')) {
            $sponsors = Sponsor::orderBy('created_at', 'desc')->where('status', "Publish")->get();
            View::share ( 'sponsors', $sponsors );
        }else{
            View::share ( 'sponsors', [] );
        }

        if (Schema::hasTable('contact_infos')) {
            $contact_info = ContactInfo::first();
            View::share ( 'contact_info', $contact_info );
        }else{
            View::share ( 'contact_info', [] );
        }

        if (Schema::hasTable('events')) {
            $events = Event::orderBy('created_at', 'desc')->limit(3)->get();
            View::share ( 'events', $events );
        }else{
            View::share ( 'events', [] );
        }

        if (Schema::hasTable('beritas')) {
            $beritas = Berita::orderBy('created_at', 'desc')->limit(3)->get();
            View::share ( 'beritas', $beritas );
        }else{
            View::share ( 'beritas', [] );
        }

        if (Schema::hasTable('downloads')) {
            $publicDownload = Download::orderBy('created_at', 'desc')->first();
            View::share ( 'publicDownload', $publicDownload );
        }else{
            View::share ( 'publicDownload', [] );
        }

        if (Schema::hasTable('backgrounds')) {
            $publicBackground = Background::orderBy('created_at', 'desc')->first();
            View::share ( 'publicBackground', $publicBackground );
        }else{
            View::share ( 'publicBackground', [] );
        }

        if (Schema::hasTable('home_buttons')) {
            // banner
            $buttonLefts = HomeButton::where('position', 'left')->where('status', 'publish')->limit(6)->get();
            View::share ( 'buttonLefts', $buttonLefts );
        }else{
            View::share ( 'buttonLefts', [] );
        }

        if (Schema::hasTable('home_buttons')) {
            // banner
            $buttonRights = HomeButton::where('position', 'right')->where('status', 'publish')->limit(10)->get();
            View::share ( 'buttonRights', $buttonRights );
        }else{
            View::share ( 'buttonRights', [] );
        }

        if (Schema::hasTable('line_texts')) {
            $running_texts = LineText::orderBy('created_at', 'desc')->limit(10)->get();
            View::share ( 'running_texts', $running_texts );
        }else{
            View::share ( 'running_texts', [] );
        }

        if (Schema::hasTable('iklans')) {
            // iklan kiri atas
            $iklans = Iklan::orderBy('created_at', 'desc')->where('status', 'Publish')->limit(1)->get();
            View::share ( 'iklans', $iklans );
        }else{
            View::share ( 'iklans', [] );
        }

        if (Schema::hasTable('sponsor_logos')) {
            // logo footer
            $sponsor_logos = SponsorLogo::orderBy('created_at', 'desc')->limit(3)->get();
            View::share ( 'sponsor_logos', $sponsor_logos );
        }else{
            View::share ( 'sponsor_logos', [] );
        }

        view()->composer('*', function ($view) 
        {
            $user  = Auth::guard(getGuard())->user();
            View::share ('user', $user);
        });

        Collection::macro('paginate', function ($perPage, $total = null, $page = null, $pageName = 'page') {
            $page = $page ?: LengthAwarePaginator::resolveCurrentPage($pageName);

            return new LengthAwarePaginator(
                $this->forPage($page, $perPage)->values(),
                $total ?: $this->count(),
                $perPage,
                $page,
                [
                    'path' => LengthAwarePaginator::resolveCurrentPath(),
                    'pageName' => $pageName,
                ]
            );
        });
       
    }
}
