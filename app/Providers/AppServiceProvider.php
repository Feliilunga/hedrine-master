<?php

namespace App\Providers;

use App\Drug;
use App\Herb;
use App\DrugFamily;
use App\TemporaryData;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Schema;

use Illuminate\Http\Request;

use App\Post;
use App\Atc;
use App\Route as RouteM;
use App\Reference;
use App\Target;
use App\TargetType;
use App\AtcLevel4;
use App\HerbForm;
use App\Hinteraction;
use App\Dinteraction;

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

        If (env('APP_ENV') !== 'local') {
            $this->app['request']->server->set('HTTPS', true);
        }


        Schema::defaultStringLength(191);

        /*-------------------- Posts ---------------------- */

        View::composer('*', function ($view) {

            $view->with('posts', Post::orderBy('important', 'desc')
                ->orderBy('created_at', 'desc')
                ->Take(20)->get());
        });

        /*-------------------- TargetType ---------------------- */

        View::composer([
            'admin.targets.form_add_target',
            'admin.targetTypes.index',
            'targets.show'
        ], function ($view) {

            $view->with('target_types', TargetType::all());
        });

        /*--------------------  Atc ------------------------------ */

        View::composer([
            // 'admin.drugs.form_add_drug',
            'drugs.show',
            'partials.drugEdit'
        ], function ($view) {

            $view->with('atcs', Atc::all());
        });
        /*--------------------  HerbForm ------------------------------ */

        View::composer([
            'admin.herbForms.index',
            'admin.herbs.form_add_herb',
            'admin.herbs.index',
            'alerts.index',
            'herbs.index',
            'partials.quickEdit'
        ], function ($view) {

            $view->with('herb_forms', HerbForm::all());
        });

         /*--------------------  DrugFamily ------------------------------ */

        View::composer([
            'admin.drugFamilies.index',
            'admin.drugs.form_add_drug',
            'admin.pendingUsers.form_add_pending_user',
            'alerts.index_drug',
            'drugs.show',
            'partials.drugEdit'
        ], function ($view) {

            $view->with('drug_families', DrugFamily::all());
        });

        /*--------------------  Routes ------------------------------ */

        View::composer([
            'admin.drugs.form_add_drug',
            'admin.pendingUsers.form_add_pending_user',
            'drugs.show',
            'partials.drugEdit'
        ], function ($view) {

            $view->with('routes', RouteM::all());
        });

        /*-------------------- Drugs ---------------------- */

        view()->composer([
            'alerts.index_drug',
            'alerts.index_reference',
            'dashboard.layout'
        ], function ($view) {
            $view->with('noValidDrugs',Drug::where('validated', '<=', 0)->get());
        });
        View::composer([
            'welcome',
            'admin.dinteractions.form_add_dinteraction',
            'admin.interaction.targets.newDrugTargetForm',
            'partials.nav'
        ], function ($view) {

            $view->with('drugs', Drug::orderBy('name')->get());
        });
        view()->composer([
            'dashboard.layout'
        ], function ($view) {
            $view->with('validatedDrug',Drug::where('validated',1)->orderBy('name')->get());
        });

        /*-------------------- Herbs ---------------------- */

        View::composer([
            'admin.herbs.index',
            'admin.hinteractions.form_add_hinteraction',
            'admin.interaction.targets.newHerbtargetForm',
            'interaction.index_mecanism'
        ], function ($view) {
            $view->with('herbs', Herb::orderBy('name')->get());
        });

        view()->composer([
            'alerts.index'
        ], function ($view) {
            $view->with('noValidHerbings',Herb::with('hinteractions.herbs', 'hinteractions.effects', 'hinteractions.targets')->first());
        });
        view()->composer([
            'welcome',
            'dashboard.layout',
            'herbs.index',
            'partials.nav'
        ], function ($view) {
            $view->with('validatedHerb', Herb::with('herb_forms')->where('validated',1)->orderBy('name')->get());
        });

        /*view()->composer('*', function ($view) {
            $view->with('noValidCount',Herb::where('validated',0)->get());
        });*/

        /*view()->composer('partials.table-add-del-view', function ($view) {
            $view->with('waitingHerb',auth()->user()->herbs()->where('validated',0)->get());
        });*/

        view()->composer('partials.modifier-plante', function ($view) {
            $view->with('modifierHerb',auth()->user()->herbs()->where('validated',-1)->get());
        });

        view()->composer([
            'dashboard.layout'
        ], function ($view) {
            $counter = DB::table('temporary_data')->where('type_table', 'herbs')->count() + DB::table('herbs')->where('validated', 0)->count();
            //dd($counter);
            $view->with('noValidHerbsCounter', $counter);
        });


        /*-------------------- References ---------------------- */

        view()->composer([
            'alerts.index_reference',
            'dashboard.layout'
        ], function ($view) {
            $view->with('noValidReferences',Reference::where('validated', '<=', 0)->get());
        });
        /*view()->composer('*', function ($view) {
            $view->with('validReferences',Reference::where('validated', 1)->get());
        });*/
        View::composer([
            'welcome',
            'admin.dinteractions.form_add_dinteraction',
            'admin.hinteractions.form_add_hinteraction',
            'admin.interaction.targets.newDrugTargetForm',
            'admin.interaction.targets.newHerbTargetform',
            'dashboard.layout',
            'partials.nav'
        ], function ($view) {

            $view->with('references', Reference::all());
        });

         /*-------------------- Targets ---------------------- */

         view()->composer([
             'alerts.index_target',
             'dashboard.layout'
         ], function ($view) {
            $view->with('noValidTargets',Target::where('validated', '<=', 0)->get());
        });
        /*view()->composer('*', function ($view) {
            $view->with('validTargets',Target::where('validated', 1)->orderBy('name')->get());
        });*/
        View::composer([
            'welcome',
            'admin.dinteractions.form_add_dinteraction',
            'admin.hinteractions.form_add_hinteraction',
            'admin.interaction.targets.newDrugTargetForm',
            'admin.interaction.targets.newHerbTargetForm',
            'interaction.index_mecanisme',
            'partials.nav'
        ], function ($view) {

            $view->with('targets', Target::orderBy('name')->get());
        });

        /*-------------------- Hinteractions ---------------------- */

        view()->composer([
            'dashboard.layout'
        ], function ($view) {
            $view->with('noValidHinteractions',Hinteraction::where('validated', '<=', 0)->get());
        });
        view()->composer([
            'dashboard.layout'
        ], function ($view) {
            $view->with('validatedHinteractions',Hinteraction::where('validated',1)->get());
        });

        /*-------------------- Dinteractions ---------------------- */

        view()->composer([
            'dashboard.layout'
        ], function ($view) {
            $view->with('validatedDinteractions',Dinteraction::where('validated',1)->get());
        });
        view()->composer([
            'dashboard.layout'
        ], function ($view) {
            $view->with('noValidDinteractions',Dinteraction::where('validated', '<=', 0)->get());
        });


        /*-------------------- Dashboard ---------------------- */

        View::composer('dashboard.layout', function ($view) {
            $title = config('titles.' . Route::currentRouteName());
            $herbCounter = Herb::where('validated',0)->count();
            $drugCounter = Drug::where('validated', '<=', 0)->count();
            $targetCounter = Target::where('validated', '<=', 0)->count();
            $hinteractionCounter = Hinteraction::where('validated', '<=', 0)->count();
            $dinteractionCounter = Dinteraction::where('validated', '<=', 0)->count();
            $referenceCounter = Reference::where('validated', '<=', 0)->count();

            $allCounter = $herbCounter + $drugCounter + $targetCounter + $hinteractionCounter
            + $dinteractionCounter + $referenceCounter;

            $newUsersCount = auth()->user()->whereNotNull('email_verified_at')->where('is_active', '=', 0)->whereNull('denied')->count();
            $mostRecentUsers = auth()->user()->whereNotNull('email_verified_at')->where('is_active', '=', 0)->whereNull('denied')->orderBy('email_verified_at', 'DESC')->paginate(5);
            $allNewUsers = auth()->user()->whereNotNull('email_verified_at')->where('is_active', '=', 0)->whereNull('denied')->get();
            $view->with(compact('title','newUsersCount', 'mostRecentUsers', 'allNewUsers','allCounter'));
        });

    }
}
