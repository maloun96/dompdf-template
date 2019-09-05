<?php

use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Support\Facades\App;

function index(Request $request) {
    $pdf = App::make('dompdf.wrapper');

    PDF::setOptions(['enable_php' => true, ]);
    $view = view('pdf.purchase-order');

    $pdf->loadHTML($view);

    $dom_pdf = $pdf->getDomPDF();

    $canvas = $dom_pdf ->get_canvas();
    $y = $canvas->get_height() - 40;
    $x = 27;
    $canvas->page_text($x, $y, "Page {PAGE_NUM} of {PAGE_COUNT}", null, 9, array(0, 0, 0));


    return $pdf->stream();
}