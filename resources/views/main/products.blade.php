@extends('layouts.main')

@section('title', 'All Products')

@section('content')

    <!-- Intro Section -->
    <section class="inner-intro dark-bg bg-image overlay-dark parallax parallax-background1" data-background-img="img/IAO/products-bg.jpg">
        <div class="container">
            <div class="row title">
                <h2 class="h2">Products</h2>
            </div>
        </div>
    </section>
    <!-- End Intro Section -->

    <!-- Work Detail Section -->
    <section class="ptb ptb-sm-80">
        <div class="container-fluid">
            <!-- work Filter -->
            <div class="row">
                <ul class="container-filter categories-filter">
                    <li><a class="categories {{ ($type == 'all' || $type == '') ? 'active' : '' }}" data-filter="*">All</a></li>
                    <li><a class="categories {{ ($type == 'desks') ? 'active' : '' }}" data-filter=".desks">Desks</a></li>
                    <li><a class="categories {{ ($type == 'tables') ? 'active' : '' }}" data-filter=".tables">Tables</a></li>
                    <li><a class="categories {{ ($type == 'storage') ? 'active' : '' }}" data-filter=".storage">Storage</a></li>
                    <li><a class="categories {{ ($type == 'workstations') ? 'active' : '' }}" data-filter=".commercial">Workstations</a></li>
                </ul>
            </div>
            <!-- End work Filter -->
            <div class="container-grid nf-col-4">

                <div class="nf-item desks">
                    <div class="item-box">
                        <a href="product/l-shape-carruca">
                            <img alt="L-Shape-Carruca-Desk" src="img/all-products/l-carruca-desk.jpg" class="item-container">
                            <div class="item-mask">
                                <div class="item-caption">
                                    <h5 class="white">L-Shape Carruca</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="nf-item commercial">
                    <div class="item-box">
                        <a href="product/bastille-workstation">
                            <img alt="1" src="img/all-products/Bastille_2.jpg" class="item-container">
                            <div class="item-mask">
                                <div class="item-caption">
                                    <h5 class="white">The Bastille Workstation</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="nf-item storage">
                    <div class="item-box">
                        <a href="product/credenza">
                            <img alt="Edwin Credenza" src="img/all-products/credenza.jpg" class="item-container">
                            <div class="item-mask">
                                <div class="item-caption">
                                    <h5 class="white">The Edwin Credenza</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="nf-item storage">
                    <div class="item-box">
                        <a href="product/credenza-part-2">
                            <img alt="Edwin Credenza" src="img/all-products/credenza-part-2.jpg" class="item-container">
                            <div class="item-mask">
                                <div class="item-caption">
                                    <h5 class="white">The Edwin Credenza, Part II</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="nf-item tables">
                    <div class="item-box">
                        <a href="product/long-island">
                            <img alt="Long-Island-Table" src="img/all-products/long-island-table.jpg" class="item-container">
                            <div class="item-mask">
                                <div class="item-caption">
                                    <h5 class="white">Long Island Table</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="nf-item storage">
                    <div class="item-box">
                        <a href="product/saxon-storage-doors">
                            <img alt="Saxon-Storage-Doors" src="img/all-products/saxon-storage-doors-1.jpg" class="item-container">
                            <div class="item-mask">
                                <div class="item-caption">
                                    <h5 class="white">Saxon Storage w/ Doors</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="nf-item storage">
                    <div class="item-box">
                        <a href="product/saxon-storage-open">
                            <img alt="Saxon-Storage-Open" src="img/all-products/saxon-storage-open-3.jpg" class="item-container">
                            <div class="item-mask">
                                <div class="item-caption">
                                    <h5 class="white">Saxon Storage - Open</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="nf-item desks">
                    <div class="item-box">
                        <a href="product/l-shape-brooklyn">
                            <img alt="L-Shape-Brooklyn-Desk" src="img/all-products/l-brooklyn-desk.jpg" class="item-container">
                            <div class="item-mask">
                                <div class="item-caption">
                                    <h5 class="white">L-Shape Brooklyn Desk</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="nf-item desks">
                    <div class="item-box">
                        <a href="product/u-shape-carruca">
                            <img alt="U-Shape-Carruca-Desk" src="img/all-products/u-shape-desk.jpg" class="item-container">
                            <div class="item-mask">
                                <div class="item-caption">
                                    <h5 class="white">U-Shape Carruca Desk</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="nf-item desks">
                    <div class="item-box">
                        <a href="product/hybrid-desk">
                            <img alt="Hybrid-Desk" src="img/all-products/hybrid-rick-singer.jpg" class="item-container">
                            <div class="item-mask">
                                <div class="item-caption">
                                    <h5 class="white">Hybrid Desk</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="nf-item tables">
                    <div class="item-box">
                        <a href="product/glenn-table">
                            <img alt="Glenn-Conference-Table" src="img/all-products/glenn-conference-table.jpg" class="item-container">
                            <div class="item-mask">
                                <div class="item-caption">
                                    <h5 class="white">Glenn Conference/Worktop Table</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="nf-item desks">
                    <div class="item-box">
                        <a href="product/tanto">
                            <img alt="Tanto-Desk" src="img/all-products/tanto-desk.jpg" class="item-container">
                            <div class="item-mask">
                                <div class="item-caption">
                                    <h5 class="white">Tanto Desk</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="nf-item tables">
                    <div class="item-box">
                        <a href="product/harding-conference-table">
                            <img alt="Harding-Conference-Table" src="img/all-products/harding-conference-table.jpg" class="item-container">
                            <div class="item-mask">
                                <div class="item-caption">
                                    <h5 class="white">Industrial Conference Table</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="nf-item storage">
                    <div class="item-box">
                        <a href="product/helvetica-shelving">
                            <img alt="Helvetica-Shelving-Unit" src="img/all-products/helvetica-shelving-unit.jpg" class="item-container">
                            <div class="item-mask">
                                <div class="item-caption">
                                    <h5 class="white">Helvetica Shelving Unit</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="nf-item desks">
                    <div class="item-box">
                        <a href="product/standard-carruca">
                            <img alt="Standard-Carruca" src="img/all-products/standard-carruca.jpg" class="item-container">
                            <div class="item-mask">
                                <div class="item-caption">
                                    <h5 class="white">Standard Carruca Desk</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="nf-item desks">
                    <div class="item-box">
                        <a href="product/squadra-team-desk">
                            <img alt="Squadra-Team-Desk" src="img/all-products/squadra-team-desk.jpg" class="item-container">
                            <div class="item-mask">
                                <div class="item-caption">
                                    <h5 class="white">Squadra Team Desk</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="nf-item tables">
                    <div class="item-box">
                        <a href="product/torkel-coffee-table">
                            <img alt="Torkel-Coffee-Table" src="img/all-products/torkel-coffee-table.jpg" class="item-container">
                            <div class="item-mask">
                                <div class="item-caption">
                                    <h5 class="white">Torkel Coffee Table</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="nf-item tables">
                    <div class="item-box">
                        <a href="product/standing-long-island">
                            <img alt="Standing-Long-Island-Table" src="img/all-products/standing-long-island.jpg" class="item-container">
                            <div class="item-mask">
                                <div class="item-caption">
                                    <h5 class="white">Standing Long Island Table</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="nf-item tables">
                    <div class="item-box">
                        <a href="product/rowan-console-table">
                            <img alt="Rowan-Console-Table" src="img/all-products/rowan-console-table.jpg" class="item-container">
                            <div class="item-mask">
                                <div class="item-caption">
                                    <h5 class="white">Rowan Console Table</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="nf-item storage">
                    <div class="item-box">
                        <a href="product/filing-cabinet">
                            <img alt="Industrial-Filing-Cabinet" src="img/all-products/file-cabinet.jpg" class="item-container">
                            <div class="item-mask">
                                <div class="item-caption">
                                    <h5 class="white">Industrial Filing Cabinet</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="nf-item commercial">
                    <div class="item-box">
                        <a href="product/edwin-workstation">
                            <img alt="Edwin-Workstation" src="img/all-products/workbench-v1.jpg" class="item-container">
                            <div class="item-mask">
                                <div class="item-caption">
                                    <h5 class="white">Edwin Workstation</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <!-- <div class="nf-item commercial">
                    <div class="item-box">
                        <a href="products/workbench-v2">
                            <img alt="Workbench-V2" src="img/all-products/workbench-v2.jpg" class="item-container">
                            <div class="item-mask">
                                <div class="item-caption">
                                    <h5 class="white">Workbench Version 2</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                </div> -->

                <div class="nf-item commercial">
                    <div class="item-box">
                        <a href="product/carruca-workbench">
                            <img alt="Carruca-Workbench" src="img/all-products/carruca-workbench.jpg" class="item-container">
                            <div class="item-mask">
                                <div class="item-caption">
                                    <h5 class="white">Carruca Workbench</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="nf-item commercial">
                    <div class="item-box">
                        <a href="product/carruca-workstation">
                            <img alt="Carruca-Workbench" src="img/all-products/carruca-workstation-all-products.jpg" class="item-container">
                            <div class="item-mask">
                                <div class="item-caption">
                                    <h5 class="white">Carruca Workbench</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="nf-item commercial">
                    <div class="item-box">
                        <a href="product/harrod-carruca-workstation">
                            <img alt="Carruca-Workbench" src="img/all-products/dogbone-workstation-all-products.jpg" class="item-container">
                            <div class="item-mask">
                                <div class="item-caption">
                                    <h5 class="white">Dogbone Workstation</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

            </div>

        </div>

    </section>
    <!-- End Work Detail Section -->

@endsection

@section('scripts')

    {{--<script>--}}

        {{--setTimeout(function() {--}}


            {{--$("ul.galleria li:first-child img").trigger('click');--}}


        {{--}, 10);--}}

        {{--$(document).ready(function() {--}}

            {{--$('.container-filter').trigger('click', '.categories', function() {--}}
                {{--var filterValue = '.' + '{{$type}}';--}}
                {{--$container.isotope({ filter: filterValue });--}}
            {{--});--}}

        {{--});--}}

    {{--</script>--}}

@endsection

