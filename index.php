<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ realpath(base_path()."/public/css/app.css") }}" rel="stylesheet" media="all">
    <title>Laravel</title>
</head>
<style>
    html, body {
        display: block;
    }
    @page { margin: 140px 35px 70px 35px; }
</style>
<body class="pdf-body">
<header class="pdf-header">
    <div class="full-width">
        <div class="half-left">
            <span class="title">PURCHASE ORDER</span>
            <span class="order-nr">PO-12345</span><br />
            <span>08/20/2019</span>
        </div>
        <div class="half-right">
            <img class="logo" src="{{ public_path('img/doxa-logo.jpg') }}" alt="">
        </div>
    </div>
</header>
<footer class="pdf-footer">
    <table>
        <tr>
            <td class="page"></td>
            <td class="powered_by" align="right">
                Powered by Steelyard
            </td>
            <td align="right" class="footer-logo-wrapper">
                <div>
                    <img class="footer-logo" src="{{ public_path('img/steelyard-logo.png') }}" alt="">
                </div>
            </td>
        </tr>
    </table>
</footer>
<main>
    <div class="pdf-template" >
        <div class="clearfix separator full-width"></div>
        <div class="full-width">
            <div class="half-left ship-to">
                <p class="subtitle mb-1">Sold To</p>
                <p class="text-bold m-0">Doxa Design Lab</p>
                <p>777 N Ashley Drive <br />Tampa, FL 33602</p>
                <p class="mt-1"><span class="text-bold">Attn: </span>Jaime Rogers</p>
                <div class="half-left">
                    <p class="mt-1"><span class="text-bold">Phone: </span>813-334-7509 lorem</p>
                </div>
                <div class="half-right">
                    <p class="mt-1"><span class="text-bold">Fax: </span>813-334-7509</p>
                </div>
                <div class="clearfix"></div>
                <p class="subtitle mt-4 mb-1">Ship To</p>
                <p class="text-bold m-0">Mountain Rovers</p>
                <p>777 N Ashley Drive <br />Tampa, FL 33602</p>
                <p class="mt-1"><span class="text-bold">Attn: </span>Jaime Rogers</p>
                <div class="half-left">
                    <p class="mt-1"><span class="text-bold">Phone: </span>813-334-7509</p>
                </div>
                <div class="half-right">
                    <p class="mt-1"><span class="text-bold">Fax: </span>813-334-7509</p>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="half-left manufacturer">
                <p class="mt-1">
                    <span class="text-bold m-0">Manufacturer: &nbsp;&nbsp;</span>
                    <span>Barbarossa Leather</span>
                </p>
                <p class="mt-1">
                    <span class="text-bold m-0">FOB: &nbsp;&nbsp;</span>
                    <span>ASDF</span>
                </p>
                <p class="mt-1">
                    <span class="text-bold m-0">Ship Via: &nbsp;&nbsp;</span>
                    <span>Best Way</span>
                </p>
                <p class="mt-1">
                    <span class="text-bold m-0">Terms: &nbsp;&nbsp;</span>
                    <span>50% Deposit</span>
                </p>
                <p class="mt-1">
                    <span class="text-bold m-0">Freight Terms: &nbsp;&nbsp;</span>
                    <span>50% Deposit</span>
                </p>
                <p class="mt-1">
                    <span class="text-bold m-0">Account#: &nbsp;&nbsp;</span>
                    <span>123456</span>
                </p>
                <p class="mt-1">
                    <span class="text-bold">Client PO: &nbsp;&nbsp;</span>
                    <span>123456</span>
                </p>
                <p class="mt-1">
                    <span class="text-bold">Est Shipping: &nbsp;&nbsp;</span>
                    <span>4-6 Weeks</span>
                </p>
            </div>
        </div>
        <div class="clearfix"></div>

        <table>
            <thead>
                <tr>
                    <th class="image-td">&nbsp;</th>
                    <th class="description-td">&nbsp;</th>
                    <th class="quantity-td text-center">QTY</th>
                    <th class="unit-td text-center">UNIT</th>
                    <th class="unit-price-td text-right">UNIT PRICE</th>
                    <th class="total-price-td text-right">TOTAL PRICE</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="image-td">
                        <img src="{{ public_path('img/pdf-image.jpg') }}" alt="">
                    </td>
                    <td>
                        <div class="pl-2 pr-2">
                            <p class="text-bold mt-0">Coda Lounge Chair & Ottoman</p>
                            <p class="mt-1">32.13” x 29.75” x 35.25” (w x d x h)</p>
                            <p class="mt-1"><span class="text-bold">SKU: </span>Coda Lounge Chair & Ottoman</p>
                            <p class="mt-1"><span class="text-bold">Prod ID: </span>442772</p>
                            <p class="mt-1"><span class="text-bold">Notes: </span>
                                Onsendel landige nditisti nonsed ut est
                                iducipsaped utamus abor mint ad essimilitae
                                discide bitium eatquost facerferum quatur, quia
                            </p>
                        </div>
                    </td>
                    <td class="text-center">2</td>
                    <td class="text-center">Pair</td>
                    <td class="text-right">$5,500</td>
                    <td class="text-right">$11,000</td>
                </tr>
                <tr>
                    <td colspan="6">
                        <div class="border-row"></div>
                    </td>
                </tr>
                <tr>
                    <td class="image-td">
                        <img src="{{ public_path('img/pdf-image.jpg') }}" alt="">
                    </td>
                    <td>
                        <div class="pl-2 pr-2">
                            <p class="text-bold mt-0">Coda Lounge Chair & Ottoman</p>
                            <p class="mt-1">32.13” x 29.75” x 35.25” (w x d x h)</p>
                            <p class="mt-1"><span class="text-bold">SKU: </span>Coda Lounge Chair & Ottoman</p>
                            <p class="mt-1"><span class="text-bold">Prod ID: </span>442772</p>
                            <p class="mt-1"><span class="text-bold">Notes: </span>
                                Onsendel landige nditisti nonsed ut est
                                iducipsaped utamus abor mint ad essimilitae
                                discide bitium eatquost facerferum quatur, quia
                            </p>
                        </div>
                    </td>
                    <td class="text-center">2</td>
                    <td class="text-center">Pair</td>
                    <td class="text-right">$5,500</td>
                    <td class="text-right">$11,000</td>
                </tr>
                <tr>
                    <td class="image-td">
                        <img src="{{ public_path('img/pdf-image.jpg') }}" alt="">
                    </td>
                    <td>
                        <div class="pl-2 pr-2">
                            <p class="text-bold mt-0">Coda Lounge Chair & Ottoman</p>
                            <p class="mt-1">32.13” x 29.75” x 35.25” (w x d x h)</p>
                            <p class="mt-1"><span class="text-bold">SKU: </span>Coda Lounge Chair & Ottoman</p>
                            <p class="mt-1"><span class="text-bold">Prod ID: </span>442772</p>
                            <p class="mt-1"><span class="text-bold">Notes: </span>
                                Onsendel landige nditisti nonsed ut est
                                iducipsaped utamus abor mint ad essimilitae
                                discide bitium eatquost facerferum quatur, quia
                            </p>
                        </div>
                    </td>
                    <td class="text-center">2</td>
                    <td class="text-center">Pair</td>
                    <td class="text-right">$5,500</td>
                    <td class="text-right">$11,000</td>
                </tr>
                <tr>
                    <td colspan="6">
                        <div class="border-row"></div>
                    </td>
                </tr>
                <tr>
                    <td class="image-td">
                        <img src="{{ public_path('img/pdf-image.jpg') }}" alt="">
                    </td>
                    <td>
                        <div class="pl-2 pr-2">
                            <p class="text-bold mt-0">Coda Lounge Chair & Ottoman</p>
                            <p class="mt-1">32.13” x 29.75” x 35.25” (w x d x h)</p>
                            <p class="mt-1"><span class="text-bold">SKU: </span>Coda Lounge Chair & Ottoman</p>
                            <p class="mt-1"><span class="text-bold">Prod ID: </span>442772</p>
                            <p class="mt-1"><span class="text-bold">Notes: </span>
                                Onsendel landige nditisti nonsed ut est
                                iducipsaped utamus abor mint ad essimilitae
                                discide bitium eatquost facerferum quatur, quia
                            </p>
                        </div>
                    </td>
                    <td class="text-center">2</td>
                    <td class="text-center">Pair</td>
                    <td class="text-right">$5,500</td>
                    <td class="text-right">$11,000</td>
                </tr>
            </tbody>
        </table>
        <div class="clearfix separator full-width"></div>
        <div class="full-width">
            <div class="notes half-left">
                <span class="text-bold">Notes:</span>
                Onsendel landige nditisti nonsed ut est iducipsaped
                utamus abor mint ad essimilitae discide bitium eatquost
                facerferum quatur, quia
            </div>
            <div class="total-wrapper half-right">
                <div class="total">
                    <p>
                        <span class="name">Sub Total: </span>
                        <span class="value">$00.00</span>
                    </p>
                    <p>
                        <span class="name">Freight: </span>
                        <span class="value">$00.00</span>
                    </p>
                    <p>
                        <span class="name">Packing: </span>
                        <span class="value">$00.00</span>
                    </p>
                    <p>
                        <span class="name">Other: </span>
                        <span class="value">$00.00</span>
                    </p>
                    <p>
                        <span class="name">Sales Tax: </span>
                        <span class="value">$00.00</span>
                    </p>
                    <p class="total-price">
                        <span class="name">Total: </span>
                        <span class="value">$00.00</span>
                    </p>
                </div>
            </div>
        </div>
    </div>
</main>
</body>
</html>
