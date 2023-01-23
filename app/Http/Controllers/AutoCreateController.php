<?php

namespace App\Http\Controllers;

use Hedii\ZoteroApi\ZoteroApi;
use App\Reference;
use RealRashid\SweetAlert\Facades\Alert;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

//Clées version finale
//8642972
//qPzG0c1sgLuDpLeE3lDjJ94l

class AutoCreateController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('adminZotero');
    }

    public function index(Request $req)
    {
        //Données api de test
        // $apiKey = 'ItxwU6wG7bnNDY3E9bVfq3Da';
        // $user = 8548265;
        //Autre clée Api de test
        //N2OX2GTY3IBWFGdZ9o1pUIBh

        //Données api de déploiement
        $apiKey = 'qPzG0c1sgLuDpLeE3lDjJ94l';
        $user = 8642972;
        $collectionKey = 'K7ABVNPC';
        //User 
        //withToken() permet de s'authentifier en recevant en paramètre la clée API et en specifiant le user dans le lien.

        $response = Http::withToken($apiKey)->get('https://api.zotero.org/users/' . $user . '/collections/' . $collectionKey . '/items?limit=100
        ');

        //https://api.zotero.org/users/8642972/collections/K7ABVNPC/items?limit=100/?&key=qPzG0c1sgLuDpLeE3lDjJ94l


        //Tout le statut de la requete est recue
        $response->json();
        //dans la partie decoded on recoit les données dont on a besoin. json_decode les transforme en json
        $datas = json_decode($response);
        $refs = Reference::all();
        return view('partials.ajout_automatique', compact('datas', 'refs'));
    }

    public function store(Request $request)
    {

        //Données api de test
        // $apiKey = 'ItxwU6wG7bnNDY3E9bVfq3Da';
        // $user = 8548265;

        //Données api de déploiement
        $apiKey = 'qPzG0c1sgLuDpLeE3lDjJ94l';
        $user = 8642972;

        $response = Http::withToken($apiKey)->get('https://api.zotero.org/users/' . $user . '/items?limit=100
        ');
        //Tout le statut de la requete est recue
        $response->json();
        //dans la partie decoded on recoit les données dont on a besoin. json_decode les transforme en json
        $collections = json_decode($response);

        //valeur du champs url de ce qu'on a ajouté (il est récupéré de l'input caché du name=url)
        $url_clicked_on = $request['url'];

        //Verification
        //Le query Recupère dans la table référence, à la colone url, toutes les données dont l'url correspond à l'url surlequel on vient de cliquer

        $urlTables = DB::select("SELECT `url` FROM `references`WHERE '$url_clicked_on' IN (`url`)");

        //$presence compte combien de données on trouve ayant la même valeur url (table)  que l'url (récupéré au clique)
        $presence = count($urlTables);

        //Si $presence==0 celà veut dire que la donée n'est pas encore présente dans la table. Sinon elle y est déja

        if ($presence == 0) {
            //dd(' Ajouté. Pas présent dans la table.');

            $reference_auto = new Reference;

            $reference_auto->user_id = Auth::user()->id;
            $reference_auto->title = $request->title;
            $reference_auto->authors = $request->authors;
            $reference_auto->year = $request->year;
            $reference_auto->edition = $request->edition;
            $reference_auto->url = $request->url;

            $message = "Nouvelle référence ajoutée avec succès.";

            $reference_auto->validated = 1;

            $reference_auto->save();
            Alert::success('Ok !', $message);

            //SUPRESSION DE ZOTERO

            //$request->all() nous aide recueillir les names de tout ce qui a un name
            //Au input du name='key' il recupere la value 
            // dd($request['key']);
            //il va a l'index 'key' et recupere sa value

            $itemKey = $request['key'];

            $apiURL = 'https://api.zotero.org/users/' . $user . '/items/?&itemKey=' . $itemKey . '&/?&key=' . $apiKey;

            $client = new \GuzzleHttp\Client();
            $res = $client->request('DELETE', $apiURL);
            $statusCode = $res->getStatusCode();
            $responseBody = json_decode($res->getBody(), true);

        } else {
            // dd('Non ajouté car présent dans la table');
            $message = "La référence existe déjà !";
            Alert::warning('Attention !', $message);
        }
        return redirect()->back();

    }

    public function deleteItem(Request $request)
    {


        //Données api de déploiement
        $apiKey = 'qPzG0c1sgLuDpLeE3lDjJ94l';
        $user = 8642972;

        $itemKey = $request['key'];

        $apiURL = 'https://api.zotero.org/users/' . $user . '/items/?&itemKey=' . $itemKey . '&/?&key=' . $apiKey;

        $client = new \GuzzleHttp\Client();
        $res = $client->request('DELETE', $apiURL);
        $statusCode = $res->getStatusCode();
        $responseBody = json_decode($res->getBody(), true);

        $message = "Element supprimé avec succès";
        Alert::success('Ok !', $message);

        return redirect()->back();
    }
}
