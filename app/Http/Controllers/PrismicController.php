<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Prismic\Api;
use Prismic\LinkResolver;
use Prismic\Predicates;

class PrismicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($uid ,Request $request)
    {
        //

         $document = Api::get('https://primic-test.cdn.prismic.io/api/v2')
         ->query([Predicates::at('document.type','blog_post')]);
         $document = $document->results;
         //dd($document);
         return view('page', ['document' => $document]);
         /*$document = $request->attributes->get('api')->getByUID('page', $uid);
        
        // Display the 404 page if no document is found
        if (!$document) {
            return view('404');
        }
        return view('page', ['document' => $document]);*/
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
