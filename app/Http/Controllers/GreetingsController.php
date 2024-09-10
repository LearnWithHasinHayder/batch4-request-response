<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GreetingsController extends Controller
{
    function sayHi(){
        return response("Controller: Hello, How are you");
    }

    function funny(){
        return response("This is funny!");
    }

    function invoice(Request $request, $id=0){

        $invoiceTitle = "Invoice ".$id;
        return response("<h1>{$invoiceTitle}</h1>");
    }


    function invoiceItem(Request $request, $id, $itemId){
        $invoiceTitle = "<h1>Invoice {$id}<h1>";
        $invoiceItem = "<h2>Item {$itemId} </h2>";

        return response("{$invoiceTitle} {$invoiceItem}");
        
    }

    function allInvoices(Request $request){
        $invoiceTitle = "Invoice List";
        return response("<h1>{$invoiceTitle}</h1>");
    }

    function countries(Request $request){
        if($request->isMethod('post')){
            return response("This is a POST request");
        }

        $pageNumber = $request->input('page', 1);
        $perPage = $request->input('perPage', 10);

        $output = "Displaying all countries from page {$pageNumber} with {$perPage} records per page";
        return response($output);
        // return view('countries');
    }

    function contact(Request $request){
        if($request->isMethod('post')){
            $data = [];
            $data['name']  = $request->input('name');
            $data['email'] = $request->input('email');
            $data['message'] = $request->input('message');
            $data['colors'] = $request->input('colors');
            return response()->json($data);
        }
        return view('contact');
    }

    function showPost(Request $request, $id){
        if($id==0 || $id<100){
            // return response("Invalid post ID",404);
            // abort("404");
            // abort("403", "Invalid Credentials"); //HTTP STATUS CODE
            return redirect("/");
        }
        return response("Showing post with ID: {$id}");

    }
}
