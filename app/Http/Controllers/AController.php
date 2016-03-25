<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Advertisement;
use DB;

class AController extends Controller
{
    public function view()
    {
        $advertisements = Advertisement::all();
        return view('advertisements.view')->with('advertisements', $advertisements);
    }

    public function create(Request $request)
    {
        return view('advertisements.add');
    }

    public function store(Request $request)
    {
        $advertisement = new Advertisement();
        $advertisement->naslov = $request->get('naslov');
        $advertisement->opis = $request->get('opis');
        $advertisement->status = $request->get('status');
        $advertisement->objekt = $request->get('objekt');
        $advertisement->adresa = $request->get('adresa');
        $advertisement->grad = $request->get('grad');
        $advertisement->cena = $request->get('cena');
        $advertisement->namesten = $request->get('namesten');
        $advertisement->parno = $request->get('parno');
        $advertisement->lift = $request->get('lift');
        $advertisement->kat = $request->get('kat');
        $advertisement->save();

        return redirect()->route('advertisements.view');
    }

    public function show($id)
    {
        $advertisement = Advertisement::find($id);
        return view('advertisements.show')->with('advertisement', $advertisement);
    }

    public function edit($id)
    {
        $advertisement = Advertisement::find($id);
        return view('advertisements.edit')->with('advertisement', $advertisement);
    }

    public function update(Request $request, $id)
    {
        $advertisement = Advertisement::find($id);
        $advertisement->naslov = $request->get('naslov');
        $advertisement->opis = $request->get('opis');
        $advertisement->status = $request->get('status');
        $advertisement->objekt = $request->get('objekt');
        $advertisement->adresa = $request->get('adresa');
        $advertisement->grad = $request->get('grad');
        $advertisement->cena = $request->get('cena');
        $advertisement->namesten = $request->get('namesten');
        $advertisement->parno = $request->get('parno');
        $advertisement->lift = $request->get('lift');
        $advertisement->kat = $request->get('kat');
        $advertisement->save();

        return redirect()->route('advertisements.show',$id);
    }

    public function delete(Request $request, $id)
    {
        $advertisement = Advertisement::find($id);
        $advertisement->delete();

        return redirect()->route('advertisements.view');
    }

    public function search(Request $request)
    {
        $status = $request->get('status');
        $objekt = $request->get('objekt');
        $grad = $request->get('grad');

        if ($status == 'site') {
            $advertisements = Advertisement::all()
                ->where('objekt', $objekt)
                ->where('grad', $grad);
        } elseif ($status == 'site' && $objekt == 'site') {
            $advertisements = Advertisement::all()
                ->where('grad', $grad);
        } elseif ($status == 'site' && $objekt == 'site' && $grad == 'site') {
            $advertisements = Advertisement::all();
        } elseif ($status == 'site' && $grad == 'site') {
            $advertisements = Advertisement::all()
                ->where('objekt', $objekt);
        } elseif ($objekt == 'site' && $grad == 'site') {
            $advertisements = Advertisement::all()
                ->where('status', $status);
        } elseif ($objekt == 'site') {
            $advertisements = Advertisement::all()
                ->where('status', $status)
                ->where('grad', $grad);
        } elseif ($grad == 'site') {
            $advertisements = Advertisement::all()
                ->where('status', $status)
                ->where('objekt', $objekt);
        } else {
            $advertisements = Advertisement::all()
                ->where('status', $status)
                ->where('objekt', $objekt)
                ->where('grad', $grad);
        }

        return view('advertisements.view')->with('advertisements', $advertisements);
    }
}
?>

