<?php

use App\Herb;
use App\Http\Controllers\PostController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
  return view('welcome');
})->name('welcome');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// });

Route::get('/dashboard', function () {
  return view('dashboard/dashboard');
});

Auth::routes();

Route::get('/logout', 'SessionController@destroy')->name('logout');

//DD 2 mai 2020 permet d'indiquer qu'un mail va être envoyé à la personne qui s'enregistre pour la première fois sur hedrine pour vérifier son mail
Auth::routes(['verify' => true]);

//DD 2/5/20 pour atteindre la première page du site (home), il faut que le user ait vérifié son adresse mail en cliquant sur le lien reçu à cette dernière (->middleware('verified');)
//J'ai créé un middleware nommé checkuserisactive qui permet de vérifier si le user a été activé par un admin (Florence par exemple)
Route::get('/home', 'HomeController@index')->name('home')->middleware('verified', 'checkuserisactive');
Route::get('/herb', 'HerbController@index')->name('herb.index');

Route::get('/test', function () {
  return view("auth/usernotvalidated.blade.php");
});

Route::get('/master', function () {
  return view("layouts/master_dashboard");
});

//Yousef for the filter searching

//here is the url for the char searching ...
Route::get('/herb/{char}', 'HerbController@filterByChar');


//N.Thierry pour atteindre la page de herbe
Route::get('/herb', 'HerbController@index')->name('herbs.index');
Route::get('herb/details_plante/{id}', 'HerbController@details')->name('herbs.details');


//N.Thierry pour atteindre la page de herbe
Route::get('/herb', 'HerbController@index')->name('herbs.index');
Route::get('herb/details_plante/{id}', 'HerbController@details')->name('herbs.details');
Route::get('herb/edit/{id}', 'HerbController@show')->name('herbs.show');
Route::name('herbs.update')->put('herb/update/{id}', 'HerbController@update');

//N.Thierry pour atteindre la page de drugs
Route::get('/drug', 'DrugController@index')->name('drugs.index');
Route::get('drug/details_drug/{id}', 'DrugController@details')->name('drugs.details');
Route::get('drug/edit/{id}', 'DrugController@show')->name('drugs.show');
Route::name('drugs.update')->put('drug/update/{id}', 'DrugController@update');

//Yousef for the filter searching
//here is the url for the char searching ...
Route::get('/drug/{char}', 'DrugController@filterByChar');


//N.Thierry pour atteindre la page de targets
Route::get('/target', 'TargetController@index')->name('targets.index');
Route::get('target/details_target/{id}', 'TargetController@details')->name('targets.details');
Route::get('target/edit/{id}', 'TargetController@show')->name('targets.show');
Route::name('targets.update')->put('target/update/{id}', 'TargetController@update');


//N.T pour hinteraction
Route::get('hinteraction/edit/{id}', 'HinteractionController@show')->name('hinteraction.show');
Route::name('hinteraction.update')->put('hinteraction/update/{id}', 'HinteractionController@update');


//Yousef for the filter searching
//here is the url for the char searching ...
Route::get('/target/{char}', 'TargetController@filterByChar');

//DD pour atteindre le formulaire d'ajout d'un poste
Route::get('posts/add_post_form', 'PostController@show_form')->name('posts.show_form');
Route::post('posts/add_post', 'PostController@create')->name('posts.create');

Route::get('drug_families/details/{id}', 'DrugFamilyController@details')->name('drugs.family');

// unsubscribe user ...
Route::get('/unsubscribe', 'UnsubscribeController@unsubscribe')->name('unsubscribe');

//N.Thierry Admin route
Route::view('admin', 'admin.layout');

//Message
Route::middleware('ajax')->group(function () {
  Route::post('message', 'UserController@message')->name('message');
  Route::get('/allDrug', 'DrugController@getAllDrogs');
  Route::get('/allDrugs', 'Back\DrugController@getAllDrogs');
});

//create this new one, because I don't need the namespace back here ...
Route::prefix('admin')->middleware('admin')->group(function () {
  //route pour new herb/drug target ....
  // create - show form page
  Route::name('newHerbTarget')->get('new_herb_target', 'HinteractionController@create');
  Route::name('newDrugTarget')->get('new_drug_target', 'DinteractionController@create');
  // store new herb/drug target
  Route::name('newHerbTarget.store')->post('new_herb_target_store', 'HinteractionController@store');
  Route::name('newDrugTarget.store')->post('new_drug_target_store', 'DinteractionController@store');
});



Route::middleware(['admin'])->prefix('admin')->namespace('Back')->group(function () {

  // Route pour Admins
  Route::name('admin')->get('/', 'AdminController@index');
  Route::post('/modifs/target', 'AdminController@modifs_target')->name('admin.modifs_target');

  Route::middleware('ajax')->group(function () {
    Route::post('/approve/reference/{id}', 'AdminController@approve_reference')->name('admin.approve_reference');
    Route::post('/approve/hinteractiontarget', 'AdminController@approve_hinteraction_target')->name('admin.approve_htarget');
    Route::post('/approve/dinteractiontarget', 'AdminController@approve_dinteraction_target')->name('admin.approve_dtarget');

    Route::get('hinteractions/hdi', 'HinteractionController@index')->name('hinteractions.hdi');
  });

  Route::get('/approve/{id}', 'AdminController@approve')->name('admin.approve');
  Route::get('/approve/temporary/{id}', 'AdminController@approveTemp')->name('admin.approveTemp');
  Route::post('/edit/temporary', 'AdminController@editTemporary')->name('admin.editTemporary');
  Route::get('/approve_drug/{id}', 'AdminController@approve_drug')->name('admin.approve_drug');
  Route::get('/approve/target/{id}', 'AdminController@approve_target')->name('admin.approve_target');
  Route::get('/approve_reference/{id}', 'AdminController@approve_reference')->name('admin.approve_reference');
  Route::get('/approve/hinteractiontarget/{id}', 'AdminController@approve_hinteraction_target')->name('admin.approve_hinteraction');
  Route::get('/approve/dinteractiontarget/{id}', 'AdminController@approve_dinteraction_target')->name('admin.approve_dinteraction');




  // list temporary data
  Route::get('/herbs', 'TemporaryDataController@index')->name('admin.herbs');
  Route::get('/drugs', 'TemporaryDataController@index_drugs')->name('admin.drugs');
  Route::get('/targets', 'TemporaryDataController@index_targets')->name('admin.targets');
  Route::get('/hinteraction/targets', 'TemporaryDataController@index_hinteraction_targets')->name('admin.hinteractiontarget');
  Route::get('/dinteraction/targets', 'TemporaryDataController@index_dinteraction_targets')->name('admin.dinteractiontarget');
  Route::get('/references', 'TemporaryDataController@index_references')->name('admin.references');

  //pour quick update ...
  Route::put('/quickEdit', 'AdminController@quickEdit')->name('admin.quickEdit');
  Route::post('/drugEdit', 'AdminController@drugEdit')->name('admin.drugEdit');
  Route::post('/targetEdit', 'AdminController@targetEdit')->name('admin.targetEdit');
  Route::post('/hinteractiontargetEdit', 'AdminController@hinteractiontargetEdit')->name('admin.hinteractiontargetEdit');
  Route::post('/dinteractiontargetEdit', 'AdminController@dinteractiontargetEdit')->name('admin.dinteractiontargetEdit');
  Route::post('/referenceEdit', 'AdminController@referenceEdit')->name('admin.referenceEdit');

  Route::post('/refuse', 'AdminController@refuse')->name('admin.refuse');
  Route::post('/refuse/drug', 'AdminController@refuse_drug')->name('admin.refuse_drug');
  Route::post('/refuse/target', 'AdminController@refuse_target')->name('admin.refuse_target');
  Route::post('/refuse/dinteractiontarget', 'AdminController@refuse_dinteraction_target')->name('admin.refuse_dinteractiontarget');
  Route::post('/refuse/hinteractiontarget', 'AdminController@refuse_hinteraction_target')->name('admin.refuse_hinteractiontarget');
  Route::post('/refuse/reference', 'AdminController@refuse_reference')->name('admin.refuse_reference');

  Route::post('/modifs', 'AdminController@modifs')->name('admin.modifs');
  Route::post('/modifs/drug', 'AdminController@modifs_drug')->name('admin.modifs_drug');
  Route::post('/modifs/dinteraction/target', 'AdminController@modifs_dinteraction_target')->name('admin.modifs_dinteraction_target');
  Route::post('/modifs/hinteraction/target', 'AdminController@modifs_hinteraction_target')->name('admin.modifs_hinteraction_target');
  Route::post('/modifs/reference', 'AdminController@modifs_reference')->name('admin.modifs_reference');



  // subscribe user ...
  //Route::get('/subscribe/{id}', 'UserController@subscribe')->name('subscribe');

  Route::name('drug.details')->get('drug', 'DrugController@details');
  Route::resource('drug', 'DrugController')->parameters([
    'drug' => 'drug'
  ]);
  Route::name('drug.destroy.alert')->get('drug/{drug}', 'DrugController@alert');

  //Pour Post
  Route::name('post.index')->get('post', 'PostController@index');
  Route::name('post.edit')->get('post/edit/{id}', 'PostController@edit');
  Route::name('post.create')->get('post', 'PostController@create');

  Route::resource('post', 'PostController')->parameters([
    'post' => 'post'
  ]);
  Route::name('post.details')->get('post/detail/{id}', 'PostController@details');
  Route::name('post.destroy.alert')->get('post/{post}', 'PostController@alert');
  Route::name('post.update')->put('post/update/{id}', 'PostController@update');


  //Route pour Posts Important
  Route::name('post.validate')->get('post/validate/{id}', 'PostController@validpost');


  // Route pour pending user
  // Route::name('newUser.request')->get('/list_user_requests', ' NotificationController@showNewUserRequests');
  Route::name('pending_user.index')->get('pending_user', 'NotificationController@showNewUserRequestsOnAdmin');


  // Route pour Drugs Family ..
  Route::name('drug_family.update')->put('drug_family', 'DrugFamilyController@update');
  Route::name('drug_family.edit')->get('drug_family', 'DrugFamilyController@edit');
  Route::name('drug_family.index')->get('drug_family', 'DrugFamilyController@index');
  Route::name('drug_family.show')->get('drug_family', 'DrugFamilyController@show');

  Route::name('drug_family.details')->get('drug_family', 'DrugFamilyController@details');
  Route::resource('drug_family', 'DrugFamilyController')->parameters([
    'drug_family' => 'drug_family'
  ]);
  Route::name('drug_family.destroy.alert')->get('drug_family/{drug_family}', 'DrugFamilyController@alert');

  // Route pour Herbs forms ..
  Route::name('herb_form.update')->put('herb_form', 'HerbFormController@update');
  Route::name('herb_form.edit')->get('herb_form', 'HerbFormController@edit');
  Route::name('herb_form.index')->get('herb_form', 'HerbFormController@index');
  Route::name('herb_form.show')->get('herb_form', 'HerbFormController@show');

  Route::name('herb_form.details')->get('herb_form', 'HerbFormController@details');
  Route::resource('herb_form', 'HerbFormController')->parameters([
    'herb_form' => 'herb_form'
  ]);
  Route::name('herb_form.destroy.alert')->get('herb_form/{herb_form}', 'HerbFormController@alert');

  //Route pour plante
  Route::name('herb.update')->put('herb', 'HerbController@update');
  Route::name('herb.edit')->get('herb', 'HerbController@edit');
  Route::name('herb.back.index')->get('herb', 'HerbController@index');
  Route::name('herb.show')->get('herb', 'HerbController@show');
  Route::name('herb.store')->post('herb', 'HerbController@store');

  Route::name('herb.details')->get('herb', 'HerbController@details');
  Route::resource('herb', 'HerbController')->parameters([
    'herb' => 'herb'
  ]);
  Route::name('herb.destroy.alert')->get('herb/{herb}', 'HerbController@alert');

  // Route pour drugs
  Route::name('drug.update')->post('drug/{drug}', 'DrugController@update');
  Route::name('drug.updates')->put('drug', 'DrugController@updates');
  Route::name('drug.edit')->get('drug/edit/{drug}', 'DrugController@edit');
  Route::name('drug.index')->get('drug', 'DrugController@index');
  Route::name('user.index')->get('user', 'UserController@index');
  //Route::get('drug/details_drug/{id}', 'DrugController@details')->name('drugs.details');
  Route::get('drug/details_drug/{id}/{type?}', 'DrugController@details')->name('drugs.details');


  //Route pour target
  Route::name('target.update')->put('target', 'TargetController@update');
  Route::name('target.edit')->get('target', 'TargetController@edit');
  Route::name('target.index')->get('target', 'TargetController@index');

  Route::name('target.details')->get('target', 'TargetController@details');
  Route::resource('target', 'TargetController')->parameters([
    'target' => 'target'
  ]);
  Route::name('target.destroy.alert')->get('target/{target}', 'TargetController@alert');

  // Route pour roles
  Route::name('role.update')->put('role', 'RoleController@update');
  Route::name('role.edit')->get('role', 'RoleController@edit');
  Route::name('role.index')->get('role', 'RoleController@index');

  Route::name('role.details')->get('role', 'RoleController@details');
  Route::resource('role', 'RoleController')->parameters([
    'role' => 'role'
  ]);
  Route::name('role.destroy.alert')->get('role/{role}', 'RoleController@alert');

  // Route pour Target Type
  Route::name('target_type.update')->put('target_type', 'TargetTypeController@update');
  Route::name('target_type.edit')->get('target_type', 'TargetTypeController@edit');
  Route::name('target_type.index')->get('target_type', 'TargetTypeController@index');

  Route::name('target_type.details')->get('target_type', 'TargetTypeController@details');
  Route::resource('target_type', 'TargetTypeController')->parameters([
    'target_type' => 'target_type'
  ]);
  Route::name('target_type.destroy.alert')->get('target_type/{target_type}', 'TargetTypeController@alert');


  // Route pour users
  Route::name('user.update')->put('user', 'UserController@update');
  Route::name('user.edit')->get('user', 'UserController@edit');
  Route::name('user.index')->get('user', 'UserController@index');

  Route::name('user.details')->get('force', 'UserController@details');
  Route::resource('user', 'UserController')->parameters([
    'user' => 'user'
  ]);
  Route::name('user.destroy.alert')->get('user/{user}', 'UserController@alert');

  //pour les nouveau utilisateurs

  // Route pour les references
  Route::name('reference.update')->put('reference', 'ReferenceController@update');
  Route::name('reference.edit')->get('reference', 'ReferenceController@edit');
  Route::name('reference.index')->get('reference', 'ReferenceController@index');

  Route::name('reference.details')->get('reference', 'ReferenceController@details');
  Route::get('reference/show/{type}/{id}', 'ReferenceController@show');
  Route::resource('reference', 'ReferenceController')->parameters([
    'reference' => 'reference'
  ]);
  Route::name('reference.destroy.alert')->get('reference/{reference}', 'ReferenceController@alert');


  //Route pour Forces
  Route::name('force.update')->put('force', 'ForceController@update');
  Route::name('force.edit')->get('force', 'ForceController@edit');
  Route::name('reference.index')->get('reference', 'ReferenceController@index');
  Route::name('force.details')->get('force', 'ForceController@details');
  Route::resource('force', 'ForceController')->parameters([
    'force' => 'force'
  ]);
  Route::name('force.destroy.alert')->get('force/{force}', 'ForceController@alert');

  // Route pour effect =  Action
  Route::name('effect.update')->put('effect', 'EffectController@update');
  Route::name('effect.edit')->get('effect', 'EffectController@edit');
  Route::name('effect.index')->get('effect', 'EffectController@index');

  Route::name('effect.details')->get('effect', 'EffectController@details');
  Route::resource('effect', 'EffectController')->parameters([
    'effect' => 'effect'
  ]);
  Route::name('effect.destroy.alert')->get('effect/{effect}', 'EffectController@alert');

  //Route pour dinteraction
  Route::name('dinteraction.update')->put('dinteraction', 'DinteractionController@update');
  Route::name('dinteraction.edit')->get('dinteraction', 'DinteractionController@edit');
  Route::name('dinteraction.index')->get('dinteraction', 'DinteractionController@index');

  Route::name('dinteraction.details')->get('dinteraction', 'DinteractionController@details');
  Route::resource('dinteraction', 'DinteractionController')->parameters([
    'dinteraction' => 'dinteraction'
  ]);
  Route::name('dinteraction.destroy.alert')->get('dinteraction/{dinteraction}', 'DinteractionController@alert');

  //Route pour hinteraction
  Route::name('hinteraction.update')->put('hinteraction', 'HinteractionController@update');
  Route::name('hinteraction.edit')->get('hinteraction', 'HinteractionController@edit');
  Route::name('hinteraction.index')->get('hinteraction/all', 'HinteractionController@index');

  Route::name('hinteraction.details')->get('hinteraction', 'HinteractionController@details');
  Route::resource('hinteraction', 'HinteractionController')->parameters([
    'hinteraction' => 'hinteraction'
  ]);
  Route::name('hinteraction.destroy.alert')->get('hinteraction/{hinteraction}', 'HinteractionController@alert');


  //pour les nouveau utilisateurs

  Route::name('newUser.request')->get('/list_user_requests', 'NotificationController@showNewUserRequests');
  Route::name('newSingleUser.request')->get('/single_user_requests/{id}', 'NotificationController@showSingleNewUserRequest');
  Route::name('activeUser')->get('/activated_user/{id}', 'NotificationController@activateNewUser');
  Route::name('denyingUser')->get('/denied_user/{id}', 'NotificationController@denyUser');
  Route::name('sendDenyingMsg')->post('/send_denying/{id}', 'NotificationController@SendDenyingMsg');

  // Notifications
  Route::name('notification.')->prefix('notification')->group(function () {
    Route::name('index')->get('/', 'NotificationController@index');
    Route::name('update')->patch('{notification}', 'NotificationController@update');
    Route::name('index_drugs')->get('/index_drugs', 'NotificationController@show_drugs');
    Route::name('index_targets')->get('/index_targets', 'NotificationController@show_targets');
    Route::name('index_hinteractiontarget')->get('/index_hinteractiontarget', 'NotificationController@show_hinteraction_target');
    Route::name('index_dinteractiontarget')->get('/index_dinteractiontarget', 'NotificationController@show_dinteraction_target');
    Route::name('index_reference')->get('/index_reference', 'NotificationController@show_references');
  });

  //Route Pour Les Alertes
  Route::name('alert.')->prefix('alert')->group(function () {

    Route::get('/', 'AlertsController@index')->name('index');
  });

  //DATATABLES


});


//N.Thierry : Les routes pour interagir entre les plante et DCI (page d'accueil du site)

// Route::name('hinteractions.hdi')->get('hinteraction','HinteractionController@index');
Route::get('hinteractions/hdi', 'HinteractionController@index')->name('hinteractions.hdi');
Route::get('hinteractions/hdi_get_herbs', 'HinteractionController@get_herbs')->name('hinteractions.get_herbs');
Route::get('hinteractions/hdi_get_drugs', 'HinteractionController@get_drugs')->name('hinteractions.get_drugs');
Route::get('dinteractions/hdi_get_drugs_families', 'DinteractionController@get_drug_families');
Route::post('/hinteractions/getHerbs', 'HinteractionController@getHerbs')->name('hinteractions.getHerbsById');
// Routes pour interagir entre les plantes et mécanismes
Route::get('hinteractions/hti', 'HinteractionController@show_mecanisme_form')->name('hinteractions.hti');
Route::get('hinteractions/hti_get_mechanisms', 'HinteractionController@get_mechanisms')->name('hinteractions.get_mechanisms');
Route::get('Herb-Mechanism/results', 'TargetController@PlantToMechanism');
Route::get('herb-list', 'HerbController@herbsList');

// advanced search start from here ..
//this guy is about one to one search ...
Route::get('oneHerb-oneDrug/results', 'TargetController@oneToOne');

// checkMail.js
Route::get('mailCheck-Up/results', 'Auth\RegisterController@verifyMail');

//UserPorofile
Route::prefix('utilisateur')->middleware('user')->group(function () {
  Route::get('/', 'UserProfileController@index')->name('userprofile.index');
  Route::prefix('herbs')->group(function () {

    Route::get('actives', 'UserProfileController@actives')->name('userprofile.actives');
    Route::get('validated', 'UserProfileController@allValidated')->name('userprofile.validated');
    Route::get('attente', 'UserProfileController@attenteHerb')->name('userprofile.attente');
    Route::get('modifier', 'UserProfileController@modifierHerb')->name('userprofile.modifier');
  });

  Route::prefix('drugs')->group(function () {

    Route::get('actives', 'UserProfileController@actives_dci')->name('userprofile.actives_dci');
    Route::get('validated', 'UserProfileController@allValidated_dci')->name('userprofile.validated_dci');
    Route::get('attente', 'UserProfileController@attenteDrug')->name('userprofile.attente_dci');
    Route::get('modifier', 'UserProfileController@modifierDrug')->name('userprofile.modifier_dci');
  });

  Route::prefix('targets')->group(function () {

    Route::get('actives', 'UserProfileController@actives_target')->name('userprofile.actives_target');
    Route::get('validated', 'UserProfileController@allValidated_target')->name('userprofile.validated_target');
    Route::get('attente', 'UserProfileController@attenteTarget')->name('userprofile.attente_target');
    Route::get('modifier', 'UserProfileController@modifierTarget')->name('userprofile.modifier_target');
  });

  Route::prefix('hinteraction')->group(function () {

    Route::get('actives', 'UserProfileController@actives_hinteraction')->name('userprofile.actives_hinteraction');
    Route::get('validated', 'UserProfileController@allValidated_hinteraction')->name('userprofile.validated_hinteraction');
    Route::get('attente', 'UserProfileController@attenteHinteraction')->name('userprofile.attente_hinteraction');
    Route::get('modifier', 'UserProfileController@modifierHinteraction')->name('userprofile.modifier_hinteraction');
  });
  Route::prefix('profil')->group(function () {
    Route::get('email', 'UserProfileController@emailEdit')->name('userprofile.email.edit');
    Route::put('email', 'UserProfileController@emailUpdate')->name('userprofile.email.update');
    Route::get('donnees', 'UserProfileController@data')->name('userprofile.data');
    Route::name('userprofile.destroy')->get('herb/{herb}', 'UserProfileController@delete');
  });
});
