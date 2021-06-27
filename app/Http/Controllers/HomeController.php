<?php

namespace App\Http\Controllers;

use App\Creditor;
use App\Debtor;
use App\Http\Requests\HomeRequestForm;
use App\Product;
use PDF ;
use QrCode ;
class HomeController extends Controller
{
    function index()
    {

        return view('index');
    }

    function generate(HomeRequestForm $request)
    {

       $products = $this->saveProduct($request);
       $criditro= $this->saveCreditor($request);
       $debtor = $this->saveDebtor($request);



         //   $qrcode = QrCode::size(200)->generate("saif");
            $qrcode = base64_encode(QrCode::format('svg')->size(200)->errorCorrection('H')->generate( $criditro->account));

            $pdf = PDF::loadView('inc.invoice', compact('products','criditro','debtor','qrcode'));
// return view('inc.invoice', compact('products','criditro','debtor','qrcode'));
           return $pdf->download("file.pdf");

    }

    private function saveCreditor($request)
    {
            $criditro = new Creditor();
            $criditro->name = $request->name_c ;
            $criditro->address = $request->address_c ;
            $criditro->zip = $request->zip_code_c ;
            $criditro->city = $request->city_c ;
            $criditro->account = $request->account ;
            $criditro->country = $request->country_c ;
            $criditro->save();
            return $criditro ;
    }
    private function saveDebtor($request)
    {
        $debtor = new Debtor();
            $debtor->name = $request->name_d ;
            $debtor->address = $request->address_d ;
            $debtor->zip = $request->zip_code_d ;
            $debtor->city = $request->city_d ;
            $debtor->country = $request->country_d ;
            $debtor->save();
            return $debtor ;

    }
    private function saveProduct($request)
    {
        $products = array();
        foreach($request->position as $key=>$item)
        {
            $product = new Product();
            $product->position = $item ;
            $product->count = $request->count[$key];
            $product->label = $request->label[$key];
            $product->total = $request->total[$key];
            $product->save();
            array_push($products,$product);

        }
       return $products ;
    }
}
