<?php
include "include/header.php";
?>


    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">List Group</h2>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.php">Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#">Components</a>
                                    </li>
                                    <li class="breadcrumb-item active">List Group
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
                    <div class="form-group breadcrum-right">
                        <div class="dropdown">
                            <button class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="feather icon-settings"></i></button>
                            <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#">Chat</a><a class="dropdown-item" href="#">Email</a><a class="dropdown-item" href="#">Calendar</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <!-- Basic ListGroups start -->
                <section id="basic-list-group">
                    <div class="row match-height">
                        <div class="col-lg-6 col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Simple List Group</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <p>The most basic list group is simply an unordered list with list items, and the proper classes. Build upon
                                            it with the options that follow, or your own CSS as needed.</p>
                                        <ul class="list-group">
                                            <li class="list-group-item">Cras justo odio</li>
                                            <li class="list-group-item">Dapibus ac facilisis in</li>
                                            <li class="list-group-item">Morbi leo risus</li>
                                            <li class="list-group-item">Porta ac consectetur ac</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Disabled items</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <p>Add <code>.disabled</code> to a <code>.list-group-item</code> to gray it out to appear disabled.</p>
                                        <div class="list-group">
                                            <span class="list-group-item disabled">
                                                Cras justo odio
                                            </span>
                                            <span class="list-group-item">Dapibus ac facilisis in</span>
                                            <span class="list-group-item">Morbi leo risus</span>
                                            <span class="list-group-item">Porta ac consectetur ac</span>
                                            <span class="list-group-item">Vestibulum at eros</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Basic ListGroups end -->

                <!-- With Icons and Badges start -->
                <section id="list-group-icons">
                    <div class="row match-height">
                        <div class="col-lg-6 col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Icons</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <p>
                                            Just add an icon before your content to create a list group with icons
                                        </p>
                                        <ul class="list-group">
                                            <li class="list-group-item d-flex">
                                                <p class="float-left mb-0">
                                                    <i class="feather icon-instagram mr-1"></i>
                                                </p>
                                                <span>Cupcake sesame snaps dessert marzipan.</span>
                                            </li>
                                            <li class="list-group-item d-flex">
                                                <p class="float-left mb-0">
                                                    <i class="feather icon-facebook mr-1"></i>
                                                </p>
                                                <span>Jelly beans jelly-o gummi bears chupa chups marshmallow.</span>
                                            </li>
                                            <li class="list-group-item d-flex">
                                                <p class="float-left mb-0">
                                                    <i class="feather icon-twitter mr-1"></i>
                                                </p>
                                                <span>Bonbon macaroon gummies pie jelly</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Badges</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <p>Use Utility classes <code>.d-flex</code> <code>.justify-content-between</code>
                                            <code>align-items-center</code> to create space between badge and your content
                                        </p>
                                        <ul class="list-group">
                                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                                <span> Biscuit jelly beans macaroon danish pudding.</span>
                                                <span class="badge badge-primary badge-pill">4</span>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                                <span> chocolate cheesecake candy</span>
                                                <span class="badge badge-primary badge-pill">2</span>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                                <span> Oat cake icing pastry pie carrot</span>
                                                <span class="badge badge-primary badge-pill">1</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- With Icons and Badges end -->

                <!-- Anchors and buttons start -->
                <section id="anchors-n-buttons">
                    <div class="row match-height">
                        <div class="col-lg-6 col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Anchors</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <p>
                                            Use anchors to create actionable list group items with hover, disabled, and active states by
                                            adding <code>.list-group-item-action</code>. This separate class contains a few overrides to add
                                            compatibility for <code>&lt;a&gt;</code>s as well as the hover and focus states.
                                        </p>
                                        <div class="list-group">
                                            <a href="#" class="list-group-item active">
                                                Cras justo odio
                                            </a>
                                            <a href="#" class="list-group-item list-group-item-action">Dapibus ac facilisis in</a>
                                            <a href="#" class="list-group-item list-group-item-action">Morbi leo risus</a>
                                            <a href="#" class="list-group-item list-group-item-action">Porta ac consectetur ac</a>
                                            <a href="#" class="list-group-item list-group-item-action disabled">Vestibulum at eros</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Buttons</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <p>
                                            You can use <code>.list-group-item-action</code> for <code>&lt;button&gt;</code> tag also.
                                            This separate class contains a few overrides to add compatibility for <code>&lt;button&gt;</code>s as well
                                            as the hover and focus states. <strong>Be sure to not use the standard <code>.btn</code> classes
                                                here.</strong>
                                        </p>
                                        <div class="list-group">
                                            <button type="button" class="list-group-item list-group-item-action active">
                                                Cras justo odio
                                            </button>
                                            <button type="button" class="list-group-item list-group-item-action">Dapibus ac facilisis in</button>
                                            <button type="button" class="list-group-item list-group-item-action">Morbi leo risus</button>
                                            <button type="button" class="list-group-item list-group-item-action">Porta ac consectetur ac</button>
                                            <button type="button" class="list-group-item list-group-item-action disabled">Vestibulum at eros</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Anchors and buttons end -->

                <!-- Custom Listgroups start -->
                <section id="custom-listgroup">
                    <div class="row match-height">
                        <div class="col-lg-6 col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Contextual classes</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <p>Use contextual classes to style list items, default or linked. Also includes .active state.</p>
                                        <ul class="list-group">
                                            <li class="list-group-item list-group-item-primary">A simple primary list group item</li>
                                            <li class="list-group-item list-group-item-success">A simple success list group item</li>
                                            <li class="list-group-item list-group-item-danger">A simple danger list group item</li>
                                            <li class="list-group-item list-group-item-warning">A simple warning list group item</li>
                                            <li class="list-group-item list-group-item-info">A simple info list group item</li>
                                            <li class="list-group-item list-group-item-light">A simple light list group item</li>
                                            <li class="list-group-item list-group-item-dark">A simple dark list group item</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Custom content</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <p>Add nearly any HTML within, even for linked list groups like the one below.</p>
                                        <div class="list-group">
                                            <a href="#" class="list-group-item list-group-item-action active">
                                                <div class="d-flex w-100 justify-content-between">
                                                    <h5 class="mb-1 text-white">List group item heading</h5>
                                                    <small>3 days ago</small>
                                                </div>
                                                <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius
                                                    blandit.</p>
                                                <small>Donec id elit non mi porta.</small>
                                            </a>
                                            <a href="#" class="list-group-item list-group-item-action">
                                                <div class="d-flex w-100 justify-content-between">
                                                    <h5 class="mb-1">List group item heading</h5>
                                                    <small class="text-muted">3 days ago</small>
                                                </div>
                                                <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius
                                                    blandit.</p>
                                                <small class="text-muted">Donec id elit non mi porta.</small>
                                            </a>
                                            <a href="#" class="list-group-item list-group-item-action">
                                                <div class="d-flex w-100 justify-content-between">
                                                    <h5 class="mb-1">List group item heading</h5>
                                                    <small class="text-muted">3 days ago</small>
                                                </div>
                                                <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius
                                                    blandit.</p>
                                                <small class="text-muted">Donec id elit non mi porta.</small>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Custom Listgroups end -->


                <!-- Flush and Horizontal list group starts -->
                <section id="flush-and-horizontal-list-group">
                    <div class="row match-height">
                        <div class="col-lg-6 md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Flush</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <p>
                                            Add <code>.list-group-flush</code> with <code>.list-group</code> to remove some borders and rounded
                                            corners
                                            to render list group items edge-to-edge in
                                            a parent container (e.g., cards).
                                        </p>
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item">Sweet gummi bears gingerbread carrot </li>
                                            <li class="list-group-item">Cake macaroon brownie wafer soufflé</li>
                                            <li class="list-group-item">Jelly beans lemon drops</li>
                                            <li class="list-group-item">Lollipop ice cream donut chupa chups</li>
                                            <li class="list-group-item">Chocolate candy canes tootsie roll</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Horizontal</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <p>
                                            Add <code>.list-group-horizontal</code> to change the layout of list group items from vertical to
                                            horizontal across all breakpoints.choose a responsive variantcode <code>
                                                .list-group-horizontal-{sm|md|lg|xl}</code> to make a list group horizontal starting at that
                                            breakpoint’s min-width.
                                        </p>
                                        <div class="alert alert-info my-3">
                                            <i class="feather icon-info mr-1"></i> horizontal list groups cannot be combined with flush list groups.
                                        </div>

                                        <ul class="list-group list-group-horizontal-sm">
                                            <li class="list-group-item">Chocolate cake</li>
                                            <li class="list-group-item"> Cookie pie </li>
                                            <li class="list-group-item">Cheesecake </li>
                                            <li class="list-group-item">Cotton candy </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Flush and Horizontal list group Ends -->


                <!--List group with tabs Starts-->
                <section id="list-group-tabs">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">List Group Navigation</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <p>
                                            You can activate a list group navigation without writing any JavaScript by simply specifying
                                            <code> data-toggle="list"</code> or on an element. Use these data attributes on .list-group-item.
                                        </p>
                                        <div class="row mt-1">
                                            <div class="col-md-4 col-sm-12">
                                                <div class="list-group" id="list-tab" role="tablist">
                                                    <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="list-home">Home</a>
                                                    <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="list-profile">Profile</a>
                                                    <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-messages" role="tab" aria-controls="list-messages">Messages</a>
                                                    <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="list-settings">Settings</a>
                                                </div>
                                            </div>
                                            <div class="col-md-8 col-sm-12 mt-1">
                                                <div class="tab-content" id="nav-tabContent">
                                                    <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
                                                        <p>
                                                            Croissant jelly-o halvah chocolate sesame snaps. Brownie caramels candy canes chocolate cake
                                                            marshmallow icing lollipop I love. Gummies macaroon donut caramels biscuit topping danish.
                                                        </p>
                                                        <p>
                                                            Tiramisu donut bonbon gummi bears. Brownie cake lollipop cheesecake gingerbread brownie. Tart
                                                            sugar plum cake I love croissant I love apple pie.Gummies I love apple pie sugar plum lemon drops
                                                            candy canes cake. Pastry I love jelly beans jelly beans brownie bear claw caramels. Pastry I love
                                                            cake liquorice icing icing. I love carrot cake cupcake jelly-o wafer cookie jujubes cake.
                                                        </p>
                                                    </div>
                                                    <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
                                                        <p>
                                                            Jelly beans topping I love chocolate cake. Lemon drops jujubes jelly I love I love marshmallow
                                                            gummies icing. Liquorice jelly-o lemon drops sugar plum.Bear claw chupa chups soufflé tart carrot
                                                            cake dessert. I love tiramisu I love marzipan candy canes brownie marshmallow wafer. I love sugar
                                                            plum cheesecake gummi bears I love pudding halvah gummi bears.
                                                        </p>
                                                        <p>
                                                            I love donut dragée cupcake. Tootsie roll tart soufflé tart powder sesame snaps lollipop. Jelly
                                                            beans tart macaroon I love biscuit. I love danish cheesecake sugar plum dragée croissant I love
                                                            danish.
                                                        </p>
                                                    </div>
                                                    <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">
                                                        <p>Dragée dessert sweet roll chocolate bar. Gummi bears I love dragée pie I love. Cake pastry I love
                                                            cookie.</p>
                                                        <p>
                                                            Wafer cheesecake cheesecake. Pastry bonbon chocolate pastry pudding topping sweet roll lollipop. I
                                                            love macaroon gummi bears cookie topping chocolate bar carrot cake.Sweet roll pastry chocolate
                                                            cake tiramisu dessert marzipan pudding cake. Cake macaroon danish jelly beans I love chocolate
                                                            cookie sugar plum. Jelly beans chocolate cake sugar plum carrot cake.
                                                        </p>
                                                    </div>
                                                    <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">
                                                        <p>
                                                            Muffin apple pie fruitcake. Chocolate cake chocolate cake oat cake I love soufflé brownie. I love
                                                            marshmallow topping marshmallow I love.
                                                        </p>
                                                        <p>
                                                            Caramels chocolate lollipop marshmallow croissant jelly beans jelly donut I love. Gummies toffee
                                                            marshmallow ice cream biscuit. Candy sweet cupcake.Sugar plum cotton candy cupcake chocolate cake
                                                            candy liquorice biscuit. Icing powder biscuit dragée gummies fruitcake I love. Sweet jelly-o
                                                            fruitcake powder. Dessert gummi bears cake gingerbread tiramisu cake I love caramels dessert.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--List group with tabs Ends-->

            </div>
        </div>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

<?php
include "include/footer.php";
?>