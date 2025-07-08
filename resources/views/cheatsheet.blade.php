<x-app-layout>
    {{-- Cheatsheet CSS --}}
    @push('head-scripts')
        <style>
            .dc-cheatsheet {
                position: relative;
                z-index: 0;
                padding: 0
            }

            .dc-cheatsheet__aside a {
                padding: .1875rem .5rem;
                margin-top: .125rem;
                margin-left: .3125rem;
                color: var(--dc-body-color)
            }

            .dc-cheatsheet__aside a:hover,.dc-cheatsheet__aside a:focus {
                color: var(--dc-body-color);
                background-color: #7952b31a
            }

            .dc-cheatsheet__aside .active {
                font-weight: 600;
                color: var(--dc-body-color)
            }

            .dc-cheatsheet__aside .btn {
                padding: .25rem .5rem;
                font-weight: 600;
                color: var(--dc-body-color)
            }

            .dc-cheatsheet__aside .btn:hover,.dc-cheatsheet__aside .btn:focus {
                color: var(--dc-body-color);
                background-color: #7952b31a
            }

            .dc-cheatsheet__aside .btn:focus {
                box-shadow: 0 0 0 1px #7952b3b3
            }

            .dc-cheatsheet__aside .btn:before {
                width: 1.25em;
                line-height: 0;
                content: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' viewBox='0 0 16 16'%3e%3cpath fill='none' stroke='%23ccc' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M5 14l6-6-6-6'/%3e%3c/svg%3e");
                transition: transform .35s ease;
                transform-origin: .5em 50%
            }

            .dc-cheatsheet__aside .btn[aria-expanded=true]:before {
                transform: rotate(90deg)
            }

            .dc-cheatsheet__examples [id=modal] .dc-cheatsheet__example-content .btn,.dc-cheatsheet__examples [id=buttons] .dc-cheatsheet__example-content .btn,.dc-cheatsheet__examples [id=tooltips] .dc-cheatsheet__example-content .btn,.dc-cheatsheet__examples [id=popovers] .dc-cheatsheet__example-content .btn,.dc-cheatsheet__examples [id=dropdowns] .dc-cheatsheet__example-content .btn-group,.dc-cheatsheet__examples [id=dropdowns] .dc-cheatsheet__example-content .dropdown,.dc-cheatsheet__examples [id=dropdowns] .dc-cheatsheet__example-content .dropup,.dc-cheatsheet__examples [id=dropdowns] .dc-cheatsheet__example-content .dropend,.dc-cheatsheet__examples [id=dropdowns] .dc-cheatsheet__example-content .dropstart {
                margin: 0 1rem 1rem 0
            }

            .dc-cheatsheet__examples .dc-cheatsheet__placeholder-img {
                font-size: 1.125rem;
                text-anchor: middle;
                -webkit-user-select: none;
                -moz-user-select: none;
                user-select: none
            }

            .dc-cheatsheet__examples .dc-cheatsheet__scrollspy-example {
                height: 200px
            }

            .dc-cheatsheet__example-heading+div>*+* {
                margin-top: 3rem
            }

            @media (min-width: 768px) {
                .dc-cheatsheet__examples .dc-cheatsheet__placeholder-img-lg {
                    font-size:3.5rem
                }
            }

            @media (min-width: 1200px) {
                .dc-cheatsheet {
                    display:grid;
                    grid-template-rows: auto;
                    grid-template-columns: 1fr 4fr 1fr;
                    gap: 1rem
                }

                .dc-cheatsheet__examples,.dc-cheatsheet__examples section,.dc-cheatsheet__example {
                    display: inherit;
                    grid-template-rows: auto;
                    grid-template-columns: 1fr 4fr;
                    grid-column: 1/span 2;
                    gap: inherit
                }

                .dc-cheatsheet__aside {
                    grid-area: 1/3;
                    top: 2rem;
                    scroll-margin-top: 2rem
                }

                .dc-cheatsheet__examples section,.dc-cheatsheet__examples section>h2,.dc-cheatsheet__examples section>.h2 {
                    top: 2rem;
                    scroll-margin-top: 2rem
                }

                .dc-cheatsheet__examples section>h2:before,.dc-cheatsheet__examples section>.h2:before {
                    position: absolute;
                    top: 0;
                    right: 0;
                    bottom: -2rem;
                    left: 0;
                    z-index: -1;
                    content: ""
                }

                .dc-cheatsheet__example,.dc-cheatsheet__example-heading {
                    top: 6rem;
                    scroll-margin-top: 6rem
                }

                .dc-cheatsheet__example-heading {
                    z-index: 1
                }
            }
        </style>
    @endpush

    <x-slot:header>
        <h1 class="mb-2">
            <i class="bi bi-bootstrap-fill text-primary me-1"></i>
            {{ __('CSS Cheatsheet') }}
        </h1>

        <a href="https://getbootstrap.com/docs/5.3/" target="_blank">
            getbootstrap.com/docs/5.3
        </a>
    </x-slot:header>

    {{-- Cheatsheet --}}
    <div class="dc-cheatsheet container">
        <aside class="dc-cheatsheet__aside sticky-xl-top text-body-secondary align-self-start mb-5 px-3">
            <h2 class="h6 pt-2 pb-3 mb-4 border-bottom">
                On this page
            </h2>

            <nav class="small">
                <ul class="list-unstyled">
                    <li class="my-2">
                        <button type="button" class="btn btn-outline-primary d-inline-flex align-items-center border-0"
                                data-bs-toggle="collapse" aria-expanded="false" data-bs-target="#layout-collapse"
                                aria-controls="layout-collapse">
                            Layout
                        </button>

                        <ul class="list-unstyled ps-3 collapse" id="layout-collapse">
                            <li>
                                <a class="d-inline-flex align-items-center rounded text-decoration-none active" href="#containers">Containers</a>
                            </li>
                            <li>
                                <a class="d-inline-flex align-items-center rounded text-decoration-none" href="#grid">Grid</a>
                            </li>
                            <li>
                                <a class="d-inline-flex align-items-center rounded text-decoration-none" href="#gutters">Gutters</a>
                            </li>
                        </ul>
                    </li>

                    <li class="my-2">
                        <button type="button" class="btn btn-outline-primary d-inline-flex align-items-center border-0"
                                data-bs-toggle="collapse" aria-expanded="false" data-bs-target="#contents-collapse"
                                aria-controls="contents-collapse">
                            Contents
                        </button>

                        <ul class="list-unstyled ps-3 collapse" id="contents-collapse">
                            <li>
                                <a class="d-inline-flex align-items-center rounded text-decoration-none" href="#typography">Typography</a>
                            </li>
                            <li>
                                <a class="d-inline-flex align-items-center rounded text-decoration-none" href="#images">Images</a>
                            </li>
                            <li>
                                <a class="d-inline-flex align-items-center rounded text-decoration-none" href="#tables">Tables</a>
                            </li>
                            <li>
                                <a class="d-inline-flex align-items-center rounded text-decoration-none" href="#figures">Figures</a>
                            </li>
                        </ul>
                    </li>

                    <li class="my-2">
                        <button type="button" class="btn btn-outline-primary d-inline-flex align-items-center collapsed border-0"
                                data-bs-toggle="collapse" aria-expanded="false" data-bs-target="#forms-collapse"
                                aria-controls="forms-collapse">
                            Forms
                        </button>

                        <ul class="list-unstyled ps-3 collapse" id="forms-collapse">
                            <li>
                                <a class="d-inline-flex align-items-center rounded text-decoration-none" href="#overview">Overview</a>
                            </li>
                            <li>
                                <a class="d-inline-flex align-items-center rounded text-decoration-none" href="#disabled-forms">Disabled forms</a>
                            </li>
                            <li>
                                <a class="d-inline-flex align-items-center rounded text-decoration-none" href="#sizing">Sizing</a>
                            </li>
                            <li>
                                <a class="d-inline-flex align-items-center rounded text-decoration-none" href="#input-group">Input group</a>
                            </li>
                            <li>
                                <a class="d-inline-flex align-items-center rounded text-decoration-none" href="#floating-labels">Floating labels</a>
                            </li>
                            <li>
                                <a class="d-inline-flex align-items-center rounded text-decoration-none" href="#validation">Validation</a>
                            </li>
                        </ul>
                    </li>

                    <li class="my-2">
                        <button type="button" class="btn btn-outline-primary d-inline-flex align-items-center collapsed border-0"
                                data-bs-toggle="collapse" aria-expanded="false" data-bs-target="#components-collapse"
                                aria-controls="components-collapse">
                            Components
                        </button>

                        <ul class="list-unstyled ps-3 collapse" id="components-collapse">
                            <li>
                                <a class="d-inline-flex align-items-center rounded text-decoration-none" href="#accordion">Accordion</a>
                            </li>
                            <li>
                                <a class="d-inline-flex align-items-center rounded text-decoration-none" href="#alerts">Alerts</a>
                            </li>
                            <li>
                                <a class="d-inline-flex align-items-center rounded text-decoration-none" href="#badge">Badge</a>
                            </li>
                            <li>
                                <a class="d-inline-flex align-items-center rounded text-decoration-none" href="#breadcrumb">Breadcrumb</a>
                            </li>
                            <li>
                                <a class="d-inline-flex align-items-center rounded text-decoration-none" href="#buttons">Buttons</a>
                            </li>
                            <li>
                                <a class="d-inline-flex align-items-center rounded text-decoration-none" href="#button-group">Button group</a>
                            </li>
                            <li>
                                <a class="d-inline-flex align-items-center rounded text-decoration-none" href="#card">Card</a>
                            </li>
                            <li>
                                <a class="d-inline-flex align-items-center rounded text-decoration-none" href="#carousel">Carousel</a>
                            </li>
                            <li>
                                <a class="d-inline-flex align-items-center rounded text-decoration-none" href="#dropdowns">Dropdowns</a>
                            </li>
                            <li>
                                <a class="d-inline-flex align-items-center rounded text-decoration-none" href="#list-group">List group</a>
                            </li>
                            <li>
                                <a class="d-inline-flex align-items-center rounded text-decoration-none" href="#modal">Modal</a>
                            </li>
                            <li>
                                <a class="d-inline-flex align-items-center rounded text-decoration-none" href="#navs">Navs</a>
                            </li>
                            <li>
                                <a class="d-inline-flex align-items-center rounded text-decoration-none" href="#navbar">Navbar</a>
                            </li>
                            <li>
                                <a class="d-inline-flex align-items-center rounded text-decoration-none" href="#pagination">Pagination</a>
                            </li>
                            <li>
                                <a class="d-inline-flex align-items-center rounded text-decoration-none" href="#popovers">Popovers</a>
                            </li>
                            <li>
                                <a class="d-inline-flex align-items-center rounded text-decoration-none" href="#progress">Progress</a>
                            </li>
                            <li>
                                <a class="d-inline-flex align-items-center rounded text-decoration-none" href="#scrollspy">Scrollspy</a>
                            </li>
                            <li>
                                <a class="d-inline-flex align-items-center rounded text-decoration-none" href="#spinners">Spinners</a>
                            </li>
                            <li>
                                <a class="d-inline-flex align-items-center rounded text-decoration-none" href="#toasts">Toasts</a>
                            </li>
                            <li>
                                <a class="d-inline-flex align-items-center rounded text-decoration-none" href="#tooltips">Tooltips</a>
                            </li>
                        </ul>
                    </li>

                    <li class="my-2">
                        <button type="button" class="btn btn-outline-primary d-inline-flex align-items-center collapsed border-0"
                                data-bs-toggle="collapse" aria-expanded="false" data-bs-target="#icons-collapse"
                                aria-controls="icons-collapse">
                            Icons
                        </button>

                        <ul class="list-unstyled ps-3 collapse" id="icons-collapse">
                            <li>
                                <a class="d-inline-flex align-items-center rounded text-decoration-none" href="#icon-font">Icon font</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </aside>

        <div class="dc-cheatsheet__examples container-fluid mb-5">
            <section id="layout">
                <h2 class="sticky-xl-top fw-bold pt-2 mb-0">
                    Layout
                </h2>

                <article class="dc-cheatsheet__example" id="containers">
                    <div class="dc-cheatsheet__example-heading sticky-xl-top align-self-start mt-5 mb-3 mt-xl-0 mb-xl-2">
                        <h3>Containers</h3>
                        <a target="_blank" class="icon-link" href="https://getbootstrap.com/docs/5.3/layout/containers/">
                            <i class="bi bi-journal-code mb-2"></i>
                            Documentation
                        </a>
                    </div>

                    <div>
                        <div class="dc-cheatsheet__example-wrapper">
                            <div class="dc-cheatsheet__example-content">
                                <p>
                                    Additional classes allow containers that are 100% wide until a particular breakpoint.
                                </p>
                                <div>
                                    <div class="container p-2 mb-3 bg-primary-subtle border border-primary text-center">.container</div>
                                    <div class="container-sm p-2 mb-3 bg-primary-subtle border border-primary text-center">.container-sm</div>
                                    <div class="container-md p-2 mb-3 bg-primary-subtle border border-primary text-center">.container-md</div>
                                    <div class="container-lg p-2 mb-3 bg-primary-subtle border border-primary text-center">.container-lg</div>
                                    <div class="container-xl p-2 mb-3 bg-primary-subtle border border-primary text-center">.container-xl</div>
                                    <div class="container-xxl p-2 mb-3 bg-primary-subtle border border-primary text-center">.container-xxl</div>
                                    <div class="container-fluid p-2 mb-3 bg-primary-subtle border border-primary text-center">.container-fluid</div>
                                </div>
                            </div>
                        </div>

                        <div class="dc-cheatsheet__example-wrapper">
                            <div class="dc-cheatsheet__example-content">
                                <hr>
                            </div>
                        </div>
                    </div>
                </article>

                <article class="dc-cheatsheet__example" id="grid">
                    <div class="dc-cheatsheet__example-heading sticky-xl-top align-self-start mt-5 mb-3 mt-xl-0 mb-xl-2">
                        <h3>Grid</h3>
                        <a target="_blank" class="icon-link" href="https://getbootstrap.com/docs/5.3/layout/grid/">
                            <i class="bi bi-journal-code mb-2"></i>
                            Documentation
                        </a>
                    </div>

                    <div>
                        <div class="dc-cheatsheet__example-wrapper">
                            <div class="dc-cheatsheet__example-content">
                                <h4>
                                    Grid examples
                                </h4>
                                <p class="lead">
                                    Basic grid layouts to get you familiar with building within the Bootstrap grid system.
                                </p>
                                <p>
                                    In these examples the <code>.p-2 bg-primary-subtle border border-primary</code> class is added to the columns to add some theming.
                                    This is not a class that is available in Bootstrap by default.
                                </p>
                            </div>
                        </div>

                        <div class="dc-cheatsheet__example-wrapper">
                            <div class="dc-cheatsheet__example-content">
                                <h5>Five grid tiers</h5>
                                <p>
                                    There are five tiers to the Bootstrap grid system, one for each range of devices we support. Each tier starts
                                    at a minimum viewport size and automatically applies to the larger devices unless overridden.
                                </p>
                                <div class="container">
                                    <div class="row mb-3 text-center">
                                        <div class="col-4 p-2 bg-primary-subtle border border-primary">.col-4</div>
                                        <div class="col-4 p-2 bg-primary-subtle border border-primary">.col-4</div>
                                        <div class="col-4 p-2 bg-primary-subtle border border-primary">.col-4</div>
                                    </div>
                                    <div class="row mb-3 text-center">
                                        <div class="col-sm-4 p-2 bg-primary-subtle border border-primary">.col-sm-4</div>
                                        <div class="col-sm-4 p-2 bg-primary-subtle border border-primary">.col-sm-4</div>
                                        <div class="col-sm-4 p-2 bg-primary-subtle border border-primary">.col-sm-4</div>
                                    </div>
                                    <div class="row mb-3 text-center">
                                        <div class="col-md-4 p-2 bg-primary-subtle border border-primary">.col-md-4</div>
                                        <div class="col-md-4 p-2 bg-primary-subtle border border-primary">.col-md-4</div>
                                        <div class="col-md-4 p-2 bg-primary-subtle border border-primary">.col-md-4</div>
                                    </div>
                                    <div class="row mb-3 text-center">
                                        <div class="col-lg-4 p-2 bg-primary-subtle border border-primary">.col-lg-4</div>
                                        <div class="col-lg-4 p-2 bg-primary-subtle border border-primary">.col-lg-4</div>
                                        <div class="col-lg-4 p-2 bg-primary-subtle border border-primary">.col-lg-4</div>
                                    </div>
                                    <div class="row mb-3 text-center">
                                        <div class="col-xl-4 p-2 bg-primary-subtle border border-primary">.col-xl-4</div>
                                        <div class="col-xl-4 p-2 bg-primary-subtle border border-primary">.col-xl-4</div>
                                        <div class="col-xl-4 p-2 bg-primary-subtle border border-primary">.col-xl-4</div>
                                    </div>
                                    <div class="row mb-3 text-center">
                                        <div class="col-xxl-4 p-2 bg-primary-subtle border border-primary">.col-xxl-4</div>
                                        <div class="col-xxl-4 p-2 bg-primary-subtle border border-primary">.col-xxl-4</div>
                                        <div class="col-xxl-4 p-2 bg-primary-subtle border border-primary">.col-xxl-4</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="dc-cheatsheet__example-wrapper">
                            <div class="dc-cheatsheet__example-content">
                                <h5>Three equal columns</h5>
                                <p>
                                    Get three equal-width columns <strong>starting at desktops and scaling to large desktops</strong>.
                                    On mobile devices, tablets and below, the columns will automatically stack.
                                </p>
                                <div class="container">
                                    <div class="row mb-3 text-center">
                                        <div class="col-md-4 p-2 bg-primary-subtle border border-primary">.col-md-4</div>
                                        <div class="col-md-4 p-2 bg-primary-subtle border border-primary">.col-md-4</div>
                                        <div class="col-md-4 p-2 bg-primary-subtle border border-primary">.col-md-4</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="dc-cheatsheet__example-wrapper">
                            <div class="dc-cheatsheet__example-content">
                                <h5>Three equal columns alternative</h5>
                                <p>
                                    By using the <code>.row-cols-*</code> classes, you can easily create a grid with equal columns.
                                </p>
                                <div class="container">
                                    <div class="row row-cols-md-3 mb-3 text-center">
                                        <div class="col p-2 bg-primary-subtle border border-primary"><code>.col</code> child of <code>.row-cols-md-3</code></div>
                                        <div class="col p-2 bg-primary-subtle border border-primary"><code>.col</code> child of <code>.row-cols-md-3</code></div>
                                        <div class="col p-2 bg-primary-subtle border border-primary"><code>.col</code> child of <code>.row-cols-md-3</code></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="dc-cheatsheet__example-wrapper">
                            <div class="dc-cheatsheet__example-content">
                                <h5>Three unequal columns</h5>
                                <p>
                                    Get three columns <strong>starting at desktops and scaling to large desktops</strong> of various widths.
                                    Remember, grid columns should add up to twelve for a single horizontal block.
                                    More than that, and columns start stacking no matter the viewport.
                                </p>
                                <div class="container">
                                    <div class="row mb-3 text-center">
                                        <div class="col-md-3 p-2 bg-primary-subtle border border-primary">.col-md-3</div>
                                        <div class="col-md-6 p-2 bg-primary-subtle border border-primary">.col-md-6</div>
                                        <div class="col-md-3 p-2 bg-primary-subtle border border-primary">.col-md-3</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="dc-cheatsheet__example-wrapper">
                            <div class="dc-cheatsheet__example-content">
                                <h5>Two columns</h5>
                                <p>
                                    Get two columns <strong>starting at desktops and scaling to large desktops</strong>.
                                </p>
                                <div class="container">
                                    <div class="row mb-3 text-center">
                                        <div class="col-md-8 p-2 bg-primary-subtle border border-primary">.col-md-8</div>
                                        <div class="col-md-4 p-2 bg-primary-subtle border border-primary">.col-md-4</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="dc-cheatsheet__example-wrapper">
                            <div class="dc-cheatsheet__example-content">
                                <h5>Full width, single column</h5>
                                <p class="text-warning">
                                    No grid classes are necessary for full-width elements.
                                </p>
                            </div>
                        </div>

                        <div class="dc-cheatsheet__example-wrapper">
                            <div class="dc-cheatsheet__example-content">
                                <h5>Nesting</h5>
                                <p>
                                    Per the documentation, nesting is easy—just put a row of columns within an existing column.
                                    This gives you two columns <strong>starting at desktops and scaling to large desktops</strong>,
                                    with another two (equal widths) within the larger column.
                                </p>
                                <p>
                                    At mobile device sizes, tablets and down, these columns and their nested columns will stack.
                                </p>
                                <div class="container">
                                    <div class="row mb-3 text-center">
                                        <div class="col-md-8 py-2 bg-primary-subtle border border-primary">
                                            <div class="pb-3">
                                                .col-md-8
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6 py-2 bg-secondary-subtle border border-secondary">.col-md-6</div>
                                                <div class="col-md-6 py-2 bg-secondary-subtle border border-secondary">.col-md-6</div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 p-2 bg-primary-subtle border border-primary">.col-md-4</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="dc-cheatsheet__example-wrapper">
                            <div class="dc-cheatsheet__example-content">
                                <h5>Mixed:</h5>
                                <h6 class="fw-bold">Mobile and desktop</h6>
                                <p>
                                    The Bootstrap v5 grid system has six tiers of classes: xs (extra small, this class infix is not used),
                                    sm (small), md (medium), lg (large), xl (x-large), and xxl (xx-large).
                                    You can use nearly any combination of these classes to create more dynamic and flexible layouts.
                                </p>
                                <p>
                                    Each tier of classes scales up, meaning if you plan on setting the same widths for md, lg, xl and xxl,
                                    you only need to specify md.
                                </p>
                                <div class="container">
                                    <div class="row mb-3 text-center">
                                        <div class="col-md-8 p-2 bg-primary-subtle border border-primary">.col-md-8</div>
                                        <div class="col-6 col-md-4 p-2 bg-primary-subtle border border-primary">.col-6 .col-md-4</div>
                                    </div>
                                    <div class="row mb-3 text-center">
                                        <div class="col-6 col-md-4 p-2 bg-primary-subtle border border-primary">.col-6 .col-md-4</div>
                                        <div class="col-6 col-md-4 p-2 bg-primary-subtle border border-primary">.col-6 .col-md-4</div>
                                        <div class="col-6 col-md-4 p-2 bg-primary-subtle border border-primary">.col-6 .col-md-4</div>
                                    </div>
                                    <div class="row mb-3 text-center">
                                        <div class="col-6 p-2 bg-primary-subtle border border-primary">.col-6</div>
                                        <div class="col-6 p-2 bg-primary-subtle border border-primary">.col-6</div>
                                    </div>
                                </div>
                                <h6 class="fw-bold pt-2">Mobile, tablet, and desktop</h6>
                                <div class="container">
                                    <div class="row mb-3 text-center">
                                        <div class="col-sm-6 col-lg-8 p-2 bg-primary-subtle border border-primary">.col-sm-6 .col-lg-8</div>
                                        <div class="col-6 col-lg-4 p-2 bg-primary-subtle border border-primary">.col-6 .col-lg-4</div>
                                    </div>
                                    <div class="row mb-3 text-center">
                                        <div class="col-6 col-sm-4 p-2 bg-primary-subtle border border-primary">.col-6 .col-sm-4</div>
                                        <div class="col-6 col-sm-4 p-2 bg-primary-subtle border border-primary">.col-6 .col-sm-4</div>
                                        <div class="col-6 col-sm-4 p-2 bg-primary-subtle border border-primary">.col-6 .col-sm-4</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="dc-cheatsheet__example-wrapper">
                            <div class="dc-cheatsheet__example-content">
                                <hr>
                            </div>
                        </div>
                    </div>
                </article>

                <article class="dc-cheatsheet__example" id="gutters">
                    <div class="dc-cheatsheet__example-heading sticky-xl-top align-self-start mt-5 mb-3 mt-xl-0 mb-xl-2">
                        <h3>Gutters</h3>
                        <a target="_blank" class="icon-link" href="https://getbootstrap.com/docs/5.3/layout/gutters/">
                            <i class="bi bi-journal-code mb-2"></i>
                            Documentation
                        </a>
                    </div>

                    <div>
                        <div class="dc-cheatsheet__example-wrapper">
                            <div class="dc-cheatsheet__example-content">
                                <p>
                                    With <code>.gx-*</code> classes, the horizontal gutters can be adjusted.
                                </p>
                                <div class="container">
                                    <div class="row row-cols-1 row-cols-md-3 gx-4 text-center">
                                        <div class="col p-2 bg-primary-subtle border border-primary"><code>.col</code> with <code>.gx-4</code> gutters</div>
                                        <div class="col p-2 bg-primary-subtle border border-primary"><code>.col</code> with <code>.gx-4</code> gutters</div>
                                        <div class="col p-2 bg-primary-subtle border border-primary"><code>.col</code> with <code>.gx-4</code> gutters</div>
                                        <div class="col p-2 bg-primary-subtle border border-primary"><code>.col</code> with <code>.gx-4</code> gutters</div>
                                        <div class="col p-2 bg-primary-subtle border border-primary"><code>.col</code> with <code>.gx-4</code> gutters</div>
                                        <div class="col p-2 bg-primary-subtle border border-primary"><code>.col</code> with <code>.gx-4</code> gutters</div>
                                    </div>
                                </div>
                                <p class="mt-4">
                                    Use the <code>.gy-*</code> classes to control the vertical gutters.
                                </p>
                                <div class="container">
                                    <div class="row row-cols-1 row-cols-md-3 gy-4 text-center">
                                        <div class="col p-2 bg-primary-subtle border border-primary"><code>.col</code> with <code>.gy-4</code> gutters</div>
                                        <div class="col p-2 bg-primary-subtle border border-primary"><code>.col</code> with <code>.gy-4</code> gutters</div>
                                        <div class="col p-2 bg-primary-subtle border border-primary"><code>.col</code> with <code>.gy-4</code> gutters</div>
                                        <div class="col p-2 bg-primary-subtle border border-primary"><code>.col</code> with <code>.gy-4</code> gutters</div>
                                        <div class="col p-2 bg-primary-subtle border border-primary"><code>.col</code> with <code>.gy-4</code> gutters</div>
                                        <div class="col p-2 bg-primary-subtle border border-primary"><code>.col</code> with <code>.gy-4</code> gutters</div>
                                    </div>
                                </div>
                                <p class="mt-4">
                                    With <code>.g-*</code> classes, the gutters in both directions can be adjusted.
                                </p>
                                <div class="container">
                                    <div class="row row-cols-1 row-cols-md-3 g-3 text-center">
                                        <div class="col p-2 bg-primary-subtle border border-primary"><code>.col</code> with <code>.g-3</code> gutters</div>
                                        <div class="col p-2 bg-primary-subtle border border-primary"><code>.col</code> with <code>.g-3</code> gutters</div>
                                        <div class="col p-2 bg-primary-subtle border border-primary"><code>.col</code> with <code>.g-3</code> gutters</div>
                                        <div class="col p-2 bg-primary-subtle border border-primary"><code>.col</code> with <code>.g-3</code> gutters</div>
                                        <div class="col p-2 bg-primary-subtle border border-primary"><code>.col</code> with <code>.g-3</code> gutters</div>
                                        <div class="col p-2 bg-primary-subtle border border-primary"><code>.col</code> with <code>.g-3</code> gutters</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
            </section>

            <section id="content">
                <h2 class="sticky-xl-top fw-bold py-2 mb-0">
                    Contents
                </h2>

                <article class="dc-cheatsheet__example" id="typography">
                    <div class="dc-cheatsheet__example-heading sticky-xl-top align-self-start mt-5 mb-3 mt-xl-0 mb-xl-2">
                        <h3>Typography</h3>
                        <a target="_blank" class="icon-link" href="https://getbootstrap.com/docs/5.3/content/typography">
                            <i class="bi bi-journal-code mb-2"></i>
                            Documentation
                        </a>
                    </div>

                    <div>
                        <div class="dc-cheatsheet__example-wrapper">
                            <div class="dc-cheatsheet__example-content">
                                <p class="display-1">Display 1</p>
                                <p class="display-2">Display 2</p>
                                <p class="display-3">Display 3</p>
                                <p class="display-4">Display 4</p>
                                <p class="display-5">Display 5</p>
                                <p class="display-6">Display 6</p>
                            </div>
                        </div>

                        <div class="dc-cheatsheet__example-wrapper">
                            <div class="dc-cheatsheet__example-content">
                                <p class="h1">Heading 1</p>
                                <p class="h2">Heading 2</p>
                                <p class="h3">Heading 3</p>
                                <p class="h4">Heading 4</p>
                                <p class="h5">Heading 5</p>
                                <p class="h6">Heading 6</p>
                            </div>
                        </div>

                        <div class="dc-cheatsheet__example-wrapper">
                            <div class="dc-cheatsheet__example-content">
                                <p class="lead">
                                    This is a lead paragraph. It stands out from regular paragraphs.
                                </p>
                            </div>
                        </div>

                        <div class="dc-cheatsheet__example-wrapper">
                            <div class="dc-cheatsheet__example-content">
                                <p>You can use the mark tag to <mark>highlight</mark> text.</p>
                                <p><del>This line of text is meant to be treated as deleted text.</del></p>
                                <p><s>This line of text is meant to be treated as no longer accurate.</s></p>
                                <p><ins>This line of text is meant to be treated as an addition to the document.</ins></p>
                                <p><u>This line of text will render as underlined.</u></p>
                                <p><small>This line of text is meant to be treated as fine print.</small></p>
                                <p><strong>This line rendered as bold text.</strong></p>
                                <p><em>This line rendered as italicized text.</em></p>
                            </div>
                        </div>

                        <div class="dc-cheatsheet__example-wrapper">
                            <div class="dc-cheatsheet__example-content">
                                <hr>
                            </div>
                        </div>

                        <div class="dc-cheatsheet__example-wrapper">
                            <div class="dc-cheatsheet__example-content">
                                <blockquote class="blockquote">
                                    <p>A well-known quote, contained in a blockquote element.</p>
                                    <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
                                </blockquote>
                            </div>
                        </div>

                        <div class="dc-cheatsheet__example-wrapper">
                            <div class="dc-cheatsheet__example-content">
                                <ul class="list-unstyled">
                                    <li>This is a list.</li>
                                    <li>It appears completely unstyled.</li>
                                    <li>Structurally, it's still a list.</li>
                                    <li>However, this style only applies to immediate child elements.</li>
                                    <li>Nested lists:
                                        <ul>
                                            <li>are unaffected by this style</li>
                                            <li>will still show a bullet</li>
                                            <li>and have appropriate left margin</li>
                                        </ul>
                                    </li>
                                    <li>This may still come in handy in some situations.</li>
                                </ul>
                            </div>
                        </div>

                        <div class="dc-cheatsheet__example-wrapper">
                            <div class="dc-cheatsheet__example-content">
                                <ul class="list-inline">
                                    <li class="list-inline-item">This is a list item.</li>
                                    <li class="list-inline-item">And another one.</li>
                                    <li class="list-inline-item">But they're displayed inline.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </article>

                <article class="dc-cheatsheet__example" id="images">
                    <div class="dc-cheatsheet__example-heading sticky-xl-top align-self-start mt-5 mb-3 mt-xl-0 mb-xl-2">
                        <h3>Images</h3>
                        <a target="_blank" class="icon-link" href="https://getbootstrap.com/docs/5.3/content/images">
                            <i class="bi bi-journal-code mb-2"></i>
                            Documentation
                        </a>
                    </div>

                    <div>
                        <div class="dc-cheatsheet__example-wrapper">
                            <div class="dc-cheatsheet__example-content">
                                <svg aria-label="Placeholder: Responsive image" class="dc-cheatsheet__placeholder-img dc-cheatsheet__placeholder-img-lg img-fluid" height="250" preserveAspectRatio="xMidYMid slice" role="img" width="100%" xmlns="http://www.w3.org/2000/svg"><title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"></rect><text x="50%" y="50%" fill="#dee2e6" dy=".3em">Responsive image</text></svg>
                            </div>
                        </div>

                        <div class="dc-cheatsheet__example-wrapper">
                            <div class="dc-cheatsheet__example-content">
                                <svg aria-label="A generic square placeholder image with a white border around it, making it resemble a photograph taken with an old instant camera: 200x200" class="dc-cheatsheet__placeholder-img img-thumbnail" height="200" preserveAspectRatio="xMidYMid slice" role="img" width="200" xmlns="http://www.w3.org/2000/svg"><title>A generic square placeholder image with a white border around it, making it resemble a photograph taken with an old instant camera</title><rect width="100%" height="100%" fill="#868e96"></rect><text x="50%" y="50%" fill="#dee2e6" dy=".3em">200x200</text></svg>
                            </div>
                        </div>
                    </div>
                </article>

                <article class="dc-cheatsheet__example" id="tables">
                    <div class="dc-cheatsheet__example-heading sticky-xl-top align-self-start mt-5 mb-3 mt-xl-0 mb-xl-2">
                        <h3>Tables</h3>
                        <a target="_blank" class="icon-link" href="https://getbootstrap.com/docs/5.3/content/tables">
                            <i class="bi bi-journal-code mb-2"></i>
                            Documentation
                        </a>
                    </div>

                    <div>
                        <div class="dc-cheatsheet__example-wrapper">
                            <div class="dc-cheatsheet__example-content">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">First</th>
                                        <th scope="col">Last</th>
                                        <th scope="col">Handle</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                        <td>@fat</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>John</td>
                                        <td>Doe</td>
                                        <td>@social</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="dc-cheatsheet__example-wrapper">
                            <div class="dc-cheatsheet__example-content">
                                <table class="table table-dark table-borderless">
                                    <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">First</th>
                                        <th scope="col">Last</th>
                                        <th scope="col">Handle</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                        <td>@fat</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>John</td>
                                        <td>Doe</td>
                                        <td>@social</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="dc-cheatsheet__example-wrapper">
                            <div class="dc-cheatsheet__example-content">
                                <table class="table table-hover">
                                    <thead>
                                    <tr>
                                        <th scope="col">Class</th>
                                        <th scope="col">Heading</th>
                                        <th scope="col">Heading</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th scope="row">Default</th>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                    </tr>
                                    <tr class="table-primary">
                                        <th scope="row">Primary</th>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                    </tr>
                                    <tr class="table-secondary">
                                        <th scope="row">Secondary</th>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                    </tr>
                                    <tr class="table-success">
                                        <th scope="row">Success</th>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                    </tr>
                                    <tr class="table-danger">
                                        <th scope="row">Danger</th>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                    </tr>
                                    <tr class="table-warning">
                                        <th scope="row">Warning</th>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                    </tr>
                                    <tr class="table-info">
                                        <th scope="row">Info</th>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                    </tr>
                                    <tr class="table-light">
                                        <th scope="row">Light</th>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                    </tr>
                                    <tr class="table-dark">
                                        <th scope="row">Dark</th>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="dc-cheatsheet__example-wrapper">
                            <div class="dc-cheatsheet__example-content">
                                <table class="table table-sm table-bordered">
                                    <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">First</th>
                                        <th scope="col">Last</th>
                                        <th scope="col">Handle</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                        <td>@fat</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>John</td>
                                        <td>Doe</td>
                                        <td>@social</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </article>

                <article class="dc-cheatsheet__example" id="figures">
                    <div class="dc-cheatsheet__example-heading sticky-xl-top align-self-start mt-5 mb-3 mt-xl-0 mb-xl-2">
                        <h3>Figures</h3>
                        <a target="_blank" class="icon-link" href="https://getbootstrap.com/docs/5.3/content/figures">
                            <i class="bi bi-journal-code mb-2"></i>
                            Documentation
                        </a>
                    </div>

                    <div>
                        <div class="dc-cheatsheet__example-wrapper">
                            <div class="dc-cheatsheet__example-content">
                                <figure class="figure">
                                    <svg aria-label="Placeholder: 400x300" class="dc-cheatsheet__placeholder-img figure-img img-fluid rounded" height="300" preserveAspectRatio="xMidYMid slice" role="img" width="400" xmlns="http://www.w3.org/2000/svg"><title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"></rect><text x="50%" y="50%" fill="#dee2e6" dy=".3em">400x300</text></svg>
                                    <figcaption class="figure-caption">A caption for the above image.</figcaption>
                                </figure>
                            </div>
                        </div>
                    </div>
                </article>
            </section>

            <section id="forms">
                <h2 class="sticky-xl-top fw-bold py-2 mb-0">
                    Forms
                </h2>

                <article class="dc-cheatsheet__example" id="overview">
                    <div class="dc-cheatsheet__example-heading sticky-xl-top align-self-start mt-5 mb-3 mt-xl-0 mb-xl-2">
                        <h3>Overview</h3>
                        <a target="_blank" class="icon-link" href="https://getbootstrap.com/docs/5.3/forms/overview/">
                            <i class="bi bi-journal-code mb-2"></i>
                            Documentation
                        </a>
                    </div>

                    <div>
                        <div class="dc-cheatsheet__example-wrapper">
                            <div class="dc-cheatsheet__example-content">
                                <form>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" autocomplete="username">
                                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Password</label>
                                        <input type="password" class="form-control" id="exampleInputPassword1" autocomplete="new-password">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleSelect" class="form-label">Select menu</label>
                                        <select class="form-select" id="exampleSelect">
                                            <option selected="">Open this select menu</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                    <div class="mb-3 form-check">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                    </div>
                                    <fieldset class="mb-3">
                                        <legend>Radios buttons</legend>
                                        <div class="form-check">
                                            <input type="radio" name="radios" class="form-check-input" id="exampleRadio1">
                                            <label class="form-check-label" for="exampleRadio1">Default radio</label>
                                        </div>
                                        <div class="mb-3 form-check">
                                            <input type="radio" name="radios" class="form-check-input" id="exampleRadio2">
                                            <label class="form-check-label" for="exampleRadio2">Another radio</label>
                                        </div>
                                    </fieldset>
                                    <div class="mb-3">
                                        <label class="form-label" for="customFile">Upload</label>
                                        <input type="file" class="form-control" id="customFile">
                                    </div>
                                    <div class="mb-3 form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch" id="switchCheckChecked" checked="">
                                        <label class="form-check-label" for="switchCheckChecked">Checked switch checkbox input</label>
                                    </div>
                                    <div class="mb-3">
                                        <label for="customRange3" class="form-label">Example range</label>
                                        <input type="range" class="form-range" min="0" max="5" step="0.5" id="customRange3">
                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </article>

                <article class="dc-cheatsheet__example" id="disabled-forms">
                    <div class="dc-cheatsheet__example-heading sticky-xl-top align-self-start mt-5 mb-3 mt-xl-0 mb-xl-2">
                        <h3>Disabled forms</h3>
                        <a target="_blank" class="icon-link" href="https://getbootstrap.com/docs/5.3/forms/overview/#disabled-forms">
                            <i class="bi bi-journal-code mb-2"></i>
                            Documentation
                        </a>
                    </div>

                    <div>
                        <div class="dc-cheatsheet__example-wrapper">
                            <div class="dc-cheatsheet__example-content">
                                <form>
                                    <fieldset disabled="" aria-label="Disabled fieldset example">
                                        <div class="mb-3">
                                            <label for="disabledTextInput" class="form-label">Disabled input</label>
                                            <input type="text" id="disabledTextInput" class="form-control" placeholder="Disabled input">
                                        </div>
                                        <div class="mb-3">
                                            <label for="disabledSelect" class="form-label">Disabled select menu</label>
                                            <select id="disabledSelect" class="form-select">
                                                <option>Disabled select</option>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="disabledFieldsetCheck" disabled="">
                                                <label class="form-check-label" for="disabledFieldsetCheck">
                                                    Can't check this
                                                </label>
                                            </div>
                                        </div>
                                        <fieldset class="mb-3">
                                            <legend>Disabled radios buttons</legend>
                                            <div class="form-check">
                                                <input type="radio" name="radios" class="form-check-input" id="disabledRadio1" disabled="">
                                                <label class="form-check-label" for="disabledRadio1">Disabled radio</label>
                                            </div>
                                            <div class="mb-3 form-check">
                                                <input type="radio" name="radios" class="form-check-input" id="disabledRadio2" disabled="">
                                                <label class="form-check-label" for="disabledRadio2">Another radio</label>
                                            </div>
                                        </fieldset>
                                        <div class="mb-3">
                                            <label class="form-label" for="disabledCustomFile">Upload</label>
                                            <input type="file" class="form-control" id="disabledCustomFile" disabled="">
                                        </div>
                                        <div class="mb-3 form-check form-switch">
                                            <input class="form-check-input" type="checkbox" role="switch" id="disabledSwitchCheckChecked" checked="" disabled="">
                                            <label class="form-check-label" for="disabledSwitchCheckChecked">Disabled checked switch checkbox input</label>
                                        </div>
                                        <div class="mb-3">
                                            <label for="disabledRange" class="form-label">Disabled range</label>
                                            <input type="range" class="form-range" min="0" max="5" step="0.5" id="disabledRange">
                                        </div>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </fieldset>
                                </form>
                            </div>
                        </div>
                    </div>
                </article>

                <article class="dc-cheatsheet__example" id="sizing">
                    <div class="dc-cheatsheet__example-heading sticky-xl-top align-self-start mt-5 mb-3 mt-xl-0 mb-xl-2">
                        <h3>Sizing</h3>
                        <a target="_blank" class="icon-link" href="https://getbootstrap.com/docs/5.3/forms/form-control#sizing">
                            <i class="bi bi-journal-code mb-2"></i>
                            Documentation
                        </a>
                    </div>

                    <div>
                        <div class="dc-cheatsheet__example-wrapper">
                            <div class="dc-cheatsheet__example-content">
                                <div class="mb-3">
                                    <input class="form-control form-control-lg" type="text" name="text" placeholder=".form-control-lg" aria-label=".form-control-lg example">
                                </div>
                                <div class="mb-3">
                                    <select class="form-select form-select-lg" name="select" aria-label=".form-select-lg example">
                                        <option selected="">Open this select menu</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <input type="file" name="file" class="form-control form-control-lg" aria-label="Large file input example">
                                </div>
                            </div>
                        </div>

                        <div class="dc-cheatsheet__example-wrapper">
                            <div class="dc-cheatsheet__example-content">
                                <div class="mb-3">
                                    <input class="form-control form-control-sm" type="text" name="text2" placeholder=".form-control-sm" aria-label=".form-control-sm example">
                                </div>
                                <div class="mb-3">
                                    <select class="form-select form-select-sm" name="select2" aria-label=".form-select-sm example">
                                        <option selected="">Open this select menu</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <input type="file" class="form-control form-control-sm" name="file2" aria-label="Small file input example">
                                </div>
                            </div>
                        </div>
                    </div>
                </article>

                <article class="dc-cheatsheet__example" id="input-group">
                    <div class="dc-cheatsheet__example-heading sticky-xl-top align-self-start mt-5 mb-3 mt-xl-0 mb-xl-2">
                        <h3>Input group</h3>
                        <a target="_blank" class="icon-link" href="https://getbootstrap.com/docs/5.3/forms/input-group">
                            <i class="bi bi-journal-code mb-2"></i>
                            Documentation
                        </a>
                    </div>

                    <div>
                        <div class="dc-cheatsheet__example-wrapper">
                            <div class="dc-cheatsheet__example-content">
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">@</span>
                                    <input type="text" class="form-control" name="username" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" autocomplete="username">
                                </div>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" name="username2" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                    <span class="input-group-text" id="basic-addon2">@example.com</span>
                                </div>
                                <label for="basic-url" class="form-label">Your vanity URL</label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon3">https://example.com/users/</span>
                                    <input type="text" class="form-control" id="basic-url" name="url" aria-describedby="basic-addon3">
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text">$</span>
                                    <input type="text" class="form-control" name="amount" aria-label="Amount (to the nearest dollar)">
                                    <span class="input-group-text">.00</span>
                                </div>
                                <div class="input-group">
                                    <span class="input-group-text">With textarea</span>
                                    <textarea class="form-control" name="textarea" aria-label="With textarea"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>

                <article class="dc-cheatsheet__example" id="floating-labels">
                    <div class="dc-cheatsheet__example-heading sticky-xl-top align-self-start mt-5 mb-3 mt-xl-0 mb-xl-2">
                        <h3>Floating labels</h3>
                        <a target="_blank" class="icon-link" href="https://getbootstrap.com/docs/5.3/forms/floating-labels">
                            <i class="bi bi-journal-code mb-2"></i>
                            Documentation
                        </a>
                    </div>

                    <div>
                        <div class="dc-cheatsheet__example-wrapper">
                            <div class="dc-cheatsheet__example-content">
                                <form>
                                    <div class="form-floating mb-3">
                                        <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com" autocomplete="username">
                                        <label for="floatingInput">Email address</label>
                                    </div>
                                    <div class="form-floating">
                                        <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password" autocomplete="new-password">
                                        <label for="floatingPassword">Password</label>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </article>

                <article class="dc-cheatsheet__example" id="validation">
                    <div class="dc-cheatsheet__example-heading sticky-xl-top align-self-start mt-5 mb-3 mt-xl-0 mb-xl-2">
                        <h3>Validation</h3>
                        <a target="_blank" class="icon-link" href="https://getbootstrap.com/docs/5.3/forms/validation">
                            <i class="bi bi-journal-code mb-2"></i>
                            Documentation
                        </a>
                    </div>

                    <div>
                        <div class="dc-cheatsheet__example-wrapper">
                            <div class="dc-cheatsheet__example-content">
                                <form class="row g-3">
                                    <div class="col-md-4">
                                        <label for="validationServer01" class="form-label">First name</label>
                                        <input type="text" class="form-control is-valid" id="validationServer01" value="Mark" required="">
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="validationServer02" class="form-label">Last name</label>
                                        <input type="text" class="form-control is-valid" id="validationServer02" value="Otto" required="">
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="validationServerUsername" class="form-label">Username</label>
                                        <div class="input-group has-validation">
                                            <span class="input-group-text" id="inputGroupPrepend3">@</span>
                                            <input type="text" class="form-control is-invalid" id="validationServerUsername" aria-describedby="inputGroupPrepend3" required="">
                                            <div class="invalid-feedback">
                                                Please choose a username.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="validationServer03" class="form-label">City</label>
                                        <input type="text" class="form-control is-invalid" id="validationServer03" required="">
                                        <div class="invalid-feedback">
                                            Please provide a valid city.
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="validationServer04" class="form-label">State</label>
                                        <select class="form-select is-invalid" id="validationServer04" required="">
                                            <option selected="" disabled="" value="">Choose...</option>
                                            <option>...</option>
                                        </select>
                                        <div class="invalid-feedback">
                                            Please select a valid state.
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="validationServer05" class="form-label">Zip</label>
                                        <input type="text" class="form-control is-invalid" id="validationServer05" required="">
                                        <div class="invalid-feedback">
                                            Please provide a valid zip.
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-check">
                                            <input class="form-check-input is-invalid" type="checkbox" value="" id="invalidCheck3" required="">
                                            <label class="form-check-label" for="invalidCheck3">
                                                Agree to terms and conditions
                                            </label>
                                            <div class="invalid-feedback">
                                                You must agree before submitting.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-primary" type="submit">Submit form</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </article>
            </section>

            <section id="components">
                <h2 class="sticky-xl-top fw-bold py-2 mb-0">
                    Components
                </h2>

                <article class="dc-cheatsheet__example" id="accordion">
                    <div class="dc-cheatsheet__example-heading sticky-xl-top align-self-start mt-5 mb-3 mt-xl-0 mb-xl-2">
                        <h3>Accordion</h3>
                        <a target="_blank" class="icon-link" href="https://getbootstrap.com/docs/5.3/components/accordion">
                            <i class="bi bi-journal-code mb-2"></i>
                            Documentation
                        </a>
                    </div>

                    <div>
                        <div class="dc-cheatsheet__example-wrapper">
                            <div class="dc-cheatsheet__example-content">
                                <div class="accordion" id="accordionExample">
                                    <div class="accordion-item">
                                        <h4 class="accordion-header">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                Accordion Item #1
                                            </button>
                                        </h4>
                                        <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <strong>This is the first item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h4 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                Accordion Item #2
                                            </button>
                                        </h4>
                                        <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h4 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                Accordion Item #3
                                            </button>
                                        </h4>
                                        <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>

                <article class="dc-cheatsheet__example" id="alerts">
                    <div class="dc-cheatsheet__example-heading sticky-xl-top align-self-start mt-5 mb-3 mt-xl-0 mb-xl-2">
                        <h3>Alerts</h3>
                        <a target="_blank" class="icon-link" href="https://getbootstrap.com/docs/5.3/components/alerts">
                            <i class="bi bi-journal-code mb-2"></i>
                            Documentation
                        </a>
                    </div>

                    <div>
                        <div class="dc-cheatsheet__example-wrapper">
                            <div class="dc-cheatsheet__example-content">
                                <div class="alert alert-primary alert-dismissible fade show" role="alert">
                                    A simple primary alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>

                                <div class="alert alert-secondary alert-dismissible fade show" role="alert">
                                    A simple secondary alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>

                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    A simple success alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>

                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    A simple danger alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>

                                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                    A simple warning alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>

                                <div class="alert alert-info alert-dismissible fade show" role="alert">
                                    A simple info alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>

                                <div class="alert alert-light alert-dismissible fade show" role="alert">
                                    A simple light alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>

                                <div class="alert alert-dark alert-dismissible fade show" role="alert">
                                    A simple dark alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            </div>
                        </div>

                        <div class="dc-cheatsheet__example-wrapper">
                            <div class="dc-cheatsheet__example-content">
                                <div class="alert alert-success" role="alert">
                                    <h4 class="alert-heading">Well done!</h4>
                                    <p>Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
                                    <hr>
                                    <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>

                <article class="dc-cheatsheet__example" id="badge">
                    <div class="dc-cheatsheet__example-heading sticky-xl-top align-self-start mt-5 mb-3 mt-xl-0 mb-xl-2">
                        <h3>Badge</h3>
                        <a target="_blank" class="icon-link" href="https://getbootstrap.com/docs/5.3/components/badge">
                            <i class="bi bi-journal-code mb-2"></i>
                            Documentation
                        </a>
                    </div>

                    <div>
                        <div class="dc-cheatsheet__example-wrapper">
                            <div class="dc-cheatsheet__example-content">
                                <p class="h1">Example heading <span class="badge bg-primary">New</span></p>
                                <p class="h2">Example heading <span class="badge bg-secondary">New</span></p>
                                <p class="h3">Example heading <span class="badge bg-success">New</span></p>
                                <p class="h4">Example heading <span class="badge bg-danger">New</span></p>
                                <p class="h5">Example heading <span class="badge text-bg-warning">New</span></p>
                                <p class="h6">Example heading <span class="badge text-bg-info">New</span></p>
                                <p class="h6">Example heading <span class="badge text-bg-light">New</span></p>
                                <p class="h6">Example heading <span class="badge bg-dark">New</span></p>
                            </div>
                        </div>

                        <div class="dc-cheatsheet__example-wrapper">
                            <div class="dc-cheatsheet__example-content">
                                <span class="badge rounded-pill bg-primary">Primary</span>

                                <span class="badge rounded-pill bg-secondary">Secondary</span>

                                <span class="badge rounded-pill bg-success">Success</span>

                                <span class="badge rounded-pill bg-danger">Danger</span>

                                <span class="badge rounded-pill text-bg-warning">Warning</span>

                                <span class="badge rounded-pill text-bg-info">Info</span>

                                <span class="badge rounded-pill text-bg-light">Light</span>

                                <span class="badge rounded-pill bg-dark">Dark</span>
                            </div>
                        </div>
                    </div>
                </article>

                <article class="dc-cheatsheet__example" id="breadcrumb">
                    <div class="dc-cheatsheet__example-heading sticky-xl-top align-self-start mt-5 mb-3 mt-xl-0 mb-xl-2">
                        <h3>Breadcrumb</h3>
                        <a target="_blank" class="icon-link" href="https://getbootstrap.com/docs/5.3/components/breadcrumb">
                            <i class="bi bi-journal-code mb-2"></i>
                            Documentation
                        </a>
                    </div>

                    <div>
                        <div class="dc-cheatsheet__example-wrapper">
                            <div class="dc-cheatsheet__example-content">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                                        <li class="breadcrumb-item"><a href="#">Library</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Data</li>
                                    </ol>
                                </nav>

                            </div>
                        </div>
                    </div>
                </article>

                <article class="dc-cheatsheet__example" id="buttons">
                    <div class="dc-cheatsheet__example-heading sticky-xl-top align-self-start mt-5 mb-3 mt-xl-0 mb-xl-2">
                        <h3>Buttons</h3>
                        <a target="_blank" class="icon-link" href="https://getbootstrap.com/docs/5.3/components/buttons">
                            <i class="bi bi-journal-code mb-2"></i>
                            Documentation
                        </a>
                    </div>

                    <div>
                        <div class="dc-cheatsheet__example-wrapper">
                            <div class="dc-cheatsheet__example-content">
                                <button type="button" class="btn btn-primary">Primary</button>

                                <button type="button" class="btn btn-secondary">Secondary</button>

                                <button type="button" class="btn btn-success">Success</button>

                                <button type="button" class="btn btn-danger">Danger</button>

                                <button type="button" class="btn btn-warning">Warning</button>

                                <button type="button" class="btn btn-info">Info</button>

                                <button type="button" class="btn btn-light">Light</button>

                                <button type="button" class="btn btn-dark">Dark</button>

                                <button type="button" class="btn btn-link">Link</button>
                            </div>
                        </div>

                        <div class="dc-cheatsheet__example-wrapper">
                            <div class="dc-cheatsheet__example-content">
                                <button type="button" class="btn btn-outline-primary">Primary</button>

                                <button type="button" class="btn btn-outline-secondary">Secondary</button>

                                <button type="button" class="btn btn-outline-success">Success</button>

                                <button type="button" class="btn btn-outline-danger">Danger</button>

                                <button type="button" class="btn btn-outline-warning">Warning</button>

                                <button type="button" class="btn btn-outline-info">Info</button>

                                <button type="button" class="btn btn-outline-light">Light</button>

                                <button type="button" class="btn btn-outline-dark">Dark</button>
                            </div>
                        </div>

                        <div class="dc-cheatsheet__example-wrapper">
                            <div class="dc-cheatsheet__example-content">
                                <button type="button" class="btn btn-primary btn-sm">Small button</button>
                                <button type="button" class="btn btn-primary">Standard button</button>
                                <button type="button" class="btn btn-primary btn-lg">Large button</button>
                            </div>
                        </div>
                    </div>
                </article>

                <article class="dc-cheatsheet__example" id="button-group">
                    <div class="dc-cheatsheet__example-heading sticky-xl-top align-self-start mt-5 mb-3 mt-xl-0 mb-xl-2">
                        <h3>Button group</h3>
                        <a target="_blank" class="icon-link" href="https://getbootstrap.com/docs/5.3/components/button-group">
                            <i class="bi bi-journal-code mb-2"></i>
                            Documentation
                        </a>
                    </div>

                    <div>
                        <div class="dc-cheatsheet__example-wrapper">
                            <div class="dc-cheatsheet__example-content">
                                <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                    <div class="btn-group me-2" role="group" aria-label="First group">
                                        <button type="button" class="btn btn-secondary">1</button>
                                        <button type="button" class="btn btn-secondary">2</button>
                                        <button type="button" class="btn btn-secondary">3</button>
                                        <button type="button" class="btn btn-secondary">4</button>
                                    </div>
                                    <div class="btn-group me-2" role="group" aria-label="Second group">
                                        <button type="button" class="btn btn-secondary">5</button>
                                        <button type="button" class="btn btn-secondary">6</button>
                                        <button type="button" class="btn btn-secondary">7</button>
                                    </div>
                                    <div class="btn-group" role="group" aria-label="Third group">
                                        <button type="button" class="btn btn-secondary">8</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>

                <article class="dc-cheatsheet__example" id="card">
                    <div class="dc-cheatsheet__example-heading sticky-xl-top align-self-start mt-5 mb-3 mt-xl-0 mb-xl-2">
                        <h3>Card</h3>
                        <a target="_blank" class="icon-link" href="https://getbootstrap.com/docs/5.3/components/card">
                            <i class="bi bi-journal-code mb-2"></i>
                            Documentation
                        </a>
                    </div>

                    <div>
                        <div class="dc-cheatsheet__example-wrapper">
                            <div class="dc-cheatsheet__example-content">
                                <div class="row  row-cols-1 row-cols-md-2 g-4">
                                    <div class="col">
                                        <div class="card">
                                            <svg aria-label="Placeholder: Image cap" class="dc-cheatsheet__placeholder-img card-img-top" height="180" preserveAspectRatio="xMidYMid slice" role="img" width="100%" xmlns="http://www.w3.org/2000/svg"><title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"></rect><text x="50%" y="50%" fill="#dee2e6" dy=".3em">Image cap</text></svg>
                                            <div class="card-body">
                                                <h5 class="card-title">Card title</h5>
                                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                <a href="#" class="btn btn-primary">Go somewhere</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card">
                                            <div class="card-header">
                                                Featured
                                            </div>
                                            <div class="card-body">
                                                <h5 class="card-title">Card title</h5>
                                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                <a href="#" class="btn btn-primary">Go somewhere</a>
                                            </div>
                                            <div class="card-footer text-body-secondary">
                                                2 days ago
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card">
                                            <div class="card-body">
                                                <h5 class="card-title">Card title</h5>
                                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                            </div>
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item">An item</li>
                                                <li class="list-group-item">A second item</li>
                                                <li class="list-group-item">A third item</li>
                                            </ul>
                                            <div class="card-body">
                                                <a href="#" class="card-link">Card link</a>
                                                <a href="#" class="card-link">Another link</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card">
                                            <div class="row g-0">
                                                <div class="col-md-4">
                                                    <svg aria-label="Placeholder: Image" class="dc-cheatsheet__placeholder-img " height="250" preserveAspectRatio="xMidYMid slice" role="img" width="100%" xmlns="http://www.w3.org/2000/svg"><title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"></rect><text x="50%" y="50%" fill="#dee2e6" dy=".3em">Image</text></svg>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="card-body">
                                                        <h5 class="card-title">Card title</h5>
                                                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                                        <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>

                <article class="dc-cheatsheet__example" id="carousel">
                    <div class="dc-cheatsheet__example-heading sticky-xl-top align-self-start mt-5 mb-3 mt-xl-0 mb-xl-2">
                        <h3>Carousel</h3>
                        <a target="_blank" class="icon-link" href="https://getbootstrap.com/docs/5.3/components/carousel">
                            <i class="bi bi-journal-code mb-2"></i>
                            Documentation
                        </a>
                    </div>

                    <div>
                        <div class="dc-cheatsheet__example-wrapper">
                            <div class="dc-cheatsheet__example-content">
                                <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-indicators">
                                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="" aria-label="Slide 1"></button>
                                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2" class=""></button>
                                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3" class="active" aria-current="true"></button>
                                    </div>
                                    <div class="carousel-inner">
                                        <div class="carousel-item">
                                            <svg aria-label="Placeholder: First slide" class="dc-cheatsheet__placeholder-img dc-cheatsheet__placeholder-img-lg d-block w-100" height="400" preserveAspectRatio="xMidYMid slice" role="img" width="800" xmlns="http://www.w3.org/2000/svg"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#555" dy=".3em">First slide</text></svg>
                                            <div class="carousel-caption d-none d-md-block">
                                                <h5>First slide label</h5>
                                                <p>Some representative placeholder content for the first slide.</p>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <svg aria-label="Placeholder: Second slide" class="dc-cheatsheet__placeholder-img dc-cheatsheet__placeholder-img-lg d-block w-100" height="400" preserveAspectRatio="xMidYMid slice" role="img" width="800" xmlns="http://www.w3.org/2000/svg"><title>Placeholder</title><rect width="100%" height="100%" fill="#666"></rect><text x="50%" y="50%" fill="#444" dy=".3em">Second slide</text></svg>
                                            <div class="carousel-caption d-none d-md-block">
                                                <h5>Second slide label</h5>
                                                <p>Some representative placeholder content for the second slide.</p>
                                            </div>
                                        </div>
                                        <div class="carousel-item active">
                                            <svg aria-label="Placeholder: Third slide" class="dc-cheatsheet__placeholder-img dc-cheatsheet__placeholder-img-lg d-block w-100" height="400" preserveAspectRatio="xMidYMid slice" role="img" width="800" xmlns="http://www.w3.org/2000/svg"><title>Placeholder</title><rect width="100%" height="100%" fill="#555"></rect><text x="50%" y="50%" fill="#333" dy=".3em">Third slide</text></svg>
                                            <div class="carousel-caption d-none d-md-block">
                                                <h5>Third slide label</h5>
                                                <p>Some representative placeholder content for the third slide.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>

                <article class="dc-cheatsheet__example" id="dropdowns">
                    <div class="dc-cheatsheet__example-heading sticky-xl-top align-self-start mt-5 mb-3 mt-xl-0 mb-xl-2">
                        <h3>Dropdowns</h3>
                        <a target="_blank" class="icon-link" href="https://getbootstrap.com/docs/5.3/components/dropdowns">
                            <i class="bi bi-journal-code mb-2"></i>
                            Documentation
                        </a>
                    </div>

                    <div>
                        <div class="dc-cheatsheet__example-wrapper">
                            <div class="dc-cheatsheet__example-content">
                                <div class="btn-group w-100 align-items-center justify-content-between flex-wrap me-0">
                                    <div class="dropdown">
                                        <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            Dropdown button
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><h6 class="dropdown-header">Dropdown header</h6></li>
                                            <li><a class="dropdown-item" href="#">Action</a></li>
                                            <li><a class="dropdown-item" href="#">Another action</a></li>
                                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                                            <li><hr class="dropdown-divider"></li>
                                            <li><a class="dropdown-item" href="#">Separated link</a></li>
                                        </ul>
                                    </div>
                                    <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            Dropdown button
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><h6 class="dropdown-header">Dropdown header</h6></li>
                                            <li><a class="dropdown-item" href="#">Action</a></li>
                                            <li><a class="dropdown-item" href="#">Another action</a></li>
                                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                                            <li><hr class="dropdown-divider"></li>
                                            <li><a class="dropdown-item" href="#">Separated link</a></li>
                                        </ul>
                                    </div>
                                    <div class="dropdown">
                                        <button class="btn btn-secondary btn-lg dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            Dropdown button
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><h6 class="dropdown-header">Dropdown header</h6></li>
                                            <li><a class="dropdown-item" href="#">Action</a></li>
                                            <li><a class="dropdown-item" href="#">Another action</a></li>
                                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                                            <li><hr class="dropdown-divider"></li>
                                            <li><a class="dropdown-item" href="#">Separated link</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="dc-cheatsheet__example-wrapper">
                            <div class="dc-cheatsheet__example-content">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-primary">Primary</button>
                                    <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                                        <span class="visually-hidden">Toggle Dropdown</span>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    </ul>
                                </div>
                                <!-- /btn-group -->
                                <div class="btn-group">
                                    <button type="button" class="btn btn-secondary">Secondary</button>
                                    <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                                        <span class="visually-hidden">Toggle Dropdown</span>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    </ul>
                                </div>
                                <!-- /btn-group -->
                                <div class="btn-group">
                                    <button type="button" class="btn btn-success">Success</button>
                                    <button type="button" class="btn btn-success dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                                        <span class="visually-hidden">Toggle Dropdown</span>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    </ul>
                                </div>
                                <!-- /btn-group -->
                                <div class="btn-group">
                                    <button type="button" class="btn btn-info">Info</button>
                                    <button type="button" class="btn btn-info dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                                        <span class="visually-hidden">Toggle Dropdown</span>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    </ul>
                                </div>
                                <!-- /btn-group -->
                                <div class="btn-group">
                                    <button type="button" class="btn btn-warning">Warning</button>
                                    <button type="button" class="btn btn-warning dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                                        <span class="visually-hidden">Toggle Dropdown</span>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    </ul>
                                </div>
                                <!-- /btn-group -->
                                <div class="btn-group">
                                    <button type="button" class="btn btn-danger">Danger</button>
                                    <button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                                        <span class="visually-hidden">Toggle Dropdown</span>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    </ul>
                                </div>
                                <!-- /btn-group -->
                            </div>
                        </div>

                        <div class="dc-cheatsheet__example-wrapper">
                            <div class="dc-cheatsheet__example-content">
                                <div class="btn-group w-100 align-items-center justify-content-between flex-wrap me-0">
                                    <div class="dropend">
                                        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            Dropend button
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><h6 class="dropdown-header">Dropdown header</h6></li>
                                            <li><a class="dropdown-item" href="#">Action</a></li>
                                            <li><a class="dropdown-item" href="#">Another action</a></li>
                                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                                            <li><hr class="dropdown-divider"></li>
                                            <li><a class="dropdown-item" href="#">Separated link</a></li>
                                        </ul>
                                    </div>
                                    <div class="dropup">
                                        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            Dropup button
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><h6 class="dropdown-header">Dropdown header</h6></li>
                                            <li><a class="dropdown-item" href="#">Action</a></li>
                                            <li><a class="dropdown-item" href="#">Another action</a></li>
                                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                                            <li><hr class="dropdown-divider"></li>
                                            <li><a class="dropdown-item" href="#">Separated link</a></li>
                                        </ul>
                                    </div>
                                    <div class="dropstart">
                                        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            Dropstart button
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><h6 class="dropdown-header">Dropdown header</h6></li>
                                            <li><a class="dropdown-item" href="#">Action</a></li>
                                            <li><a class="dropdown-item" href="#">Another action</a></li>
                                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                                            <li><hr class="dropdown-divider"></li>
                                            <li><a class="dropdown-item" href="#">Separated link</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="dc-cheatsheet__example-wrapper">
                            <div class="dc-cheatsheet__example-content">
                                <div class="btn-group">
                                    <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            End-aligned menu
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li><h6 class="dropdown-header">Dropdown header</h6></li>
                                            <li><a class="dropdown-item" href="#">Action</a></li>
                                            <li><a class="dropdown-item" href="#">Another action</a></li>
                                            <li><hr class="dropdown-divider"></li>
                                            <li><a class="dropdown-item" href="#">Separated link</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>

                <article class="dc-cheatsheet__example" id="list-group">
                    <div class="dc-cheatsheet__example-heading sticky-xl-top align-self-start mt-5 mb-3 mt-xl-0 mb-xl-2">
                        <h3>List group</h3>
                        <a target="_blank" class="icon-link" href="https://getbootstrap.com/docs/5.3/components/list-group">
                            <i class="bi bi-journal-code mb-2"></i>
                            Documentation
                        </a>
                    </div>

                    <div>
                        <div class="dc-cheatsheet__example-wrapper">
                            <div class="dc-cheatsheet__example-content">
                                <ul class="list-group">
                                    <li class="list-group-item disabled" aria-disabled="true">A disabled item</li>
                                    <li class="list-group-item">A second item</li>
                                    <li class="list-group-item">A third item</li>
                                    <li class="list-group-item">A fourth item</li>
                                    <li class="list-group-item">And a fifth one</li>
                                </ul>
                            </div>
                        </div>

                        <div class="dc-cheatsheet__example-wrapper">
                            <div class="dc-cheatsheet__example-content">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">An item</li>
                                    <li class="list-group-item">A second item</li>
                                    <li class="list-group-item">A third item</li>
                                    <li class="list-group-item">A fourth item</li>
                                    <li class="list-group-item">And a fifth one</li>
                                </ul>
                            </div>
                        </div>

                        <div class="dc-cheatsheet__example-wrapper">
                            <div class="dc-cheatsheet__example-content">
                                <div class="list-group">
                                    <a href="#" class="list-group-item list-group-item-action">A simple default list group item</a>

                                    <a href="#" class="list-group-item list-group-item-action list-group-item-primary">A simple primary list group item</a>

                                    <a href="#" class="list-group-item list-group-item-action list-group-item-secondary">A simple secondary list group item</a>

                                    <a href="#" class="list-group-item list-group-item-action list-group-item-success">A simple success list group item</a>

                                    <a href="#" class="list-group-item list-group-item-action list-group-item-danger">A simple danger list group item</a>

                                    <a href="#" class="list-group-item list-group-item-action list-group-item-warning">A simple warning list group item</a>

                                    <a href="#" class="list-group-item list-group-item-action list-group-item-info">A simple info list group item</a>

                                    <a href="#" class="list-group-item list-group-item-action list-group-item-light">A simple light list group item</a>

                                    <a href="#" class="list-group-item list-group-item-action list-group-item-dark">A simple dark list group item</a>

                                </div>
                            </div>
                        </div>
                    </div>
                </article>

                <article class="dc-cheatsheet__example" id="modal">
                    <div class="dc-cheatsheet__example-heading sticky-xl-top align-self-start mt-5 mb-3 mt-xl-0 mb-xl-2">
                        <h3>Modal</h3>
                        <a target="_blank" class="icon-link" href="https://getbootstrap.com/docs/5.3/components/modal">
                            <i class="bi bi-journal-code mb-2"></i>
                            Documentation
                        </a>
                    </div>

                    <div>
                        <div class="dc-cheatsheet__example-wrapper">
                            <div class="dc-cheatsheet__example-content">
                                <div class="d-flex justify-content-between flex-wrap">
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModalDefault">
                                        Launch demo modal
                                    </button>
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdropLive">
                                        Launch static backdrop modal
                                    </button>
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModalCenteredScrollable">
                                        Vertically centered scrollable modal
                                    </button>
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModalFullscreen">
                                        Full screen
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>

                <article class="dc-cheatsheet__example" id="navs">
                    <div class="dc-cheatsheet__example-heading sticky-xl-top align-self-start mt-5 mb-3 mt-xl-0 mb-xl-2">
                        <h3>Navs</h3>
                        <a target="_blank" class="icon-link" href="https://getbootstrap.com/docs/5.3/components/navs-tabs">
                            <i class="bi bi-journal-code mb-2"></i>
                            Documentation
                        </a>
                    </div>

                    <div>
                        <div class="dc-cheatsheet__example-wrapper">
                            <div class="dc-cheatsheet__example-content">
                                <nav class="nav">
                                    <a class="nav-link active" aria-current="page" href="#">Active</a>
                                    <a class="nav-link" href="#">Link</a>
                                    <a class="nav-link" href="#">Link</a>
                                    <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                                </nav>
                            </div>
                        </div>

                        <div class="dc-cheatsheet__example-wrapper">
                            <div class="dc-cheatsheet__example-content">
                                <nav>
                                    <div class="nav nav-tabs mb-3" id="nav-tab" role="tablist">
                                        <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Home</button>
                                        <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false" tabindex="-1">Profile</button>
                                        <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false" tabindex="-1">Contact</button>
                                    </div>
                                </nav>
                                <div class="tab-content" id="nav-tabContent">
                                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                        <p>This is some placeholder content the <strong>Home tab's</strong> associated content. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling. You can use it with tabs, pills, and any other <code>.nav</code>-powered navigation.</p>
                                    </div>
                                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                        <p>This is some placeholder content the <strong>Profile tab's</strong> associated content. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling. You can use it with tabs, pills, and any other <code>.nav</code>-powered navigation.</p>
                                    </div>
                                    <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                                        <p>This is some placeholder content the <strong>Contact tab's</strong> associated content. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling. You can use it with tabs, pills, and any other <code>.nav</code>-powered navigation.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="dc-cheatsheet__example-wrapper">
                            <div class="dc-cheatsheet__example-content">
                                <ul class="nav nav-pills">
                                    <li class="nav-item">
                                        <a class="nav-link active" aria-current="page" href="#">Active</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Link</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Link</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </article>

                <article class="dc-cheatsheet__example" id="navbar">
                    <div class="dc-cheatsheet__example-heading sticky-xl-top align-self-start mt-5 mb-3 mt-xl-0 mb-xl-2">
                        <h3>Navbar</h3>
                        <a target="_blank" class="icon-link" href="https://getbootstrap.com/docs/5.3/components/navbar">
                            <i class="bi bi-journal-code mb-2"></i>
                            Documentation
                        </a>
                    </div>

                    <div>
                        <div class="dc-cheatsheet__example-wrapper">
                            <div class="dc-cheatsheet__example-content">
                                <nav class="navbar navbar-expand-lg bg-body-tertiary">
                                    <div class="container-fluid">
                                        <a class="navbar-brand" href="#">
                                            <img src="https://getbootstrap.com/docs/5.3/assets/brand/bootstrap-logo-white.svg" width="38" height="30" class="d-inline-block align-top" alt="Bootstrap" loading="lazy" style="filter: invert(1) grayscale(100%) brightness(200%);">
                                        </a>
                                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                            <span class="navbar-toggler-icon"></span>
                                        </button>
                                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                                <li class="nav-item">
                                                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#">Link</a>
                                                </li>
                                                <li class="nav-item dropdown">
                                                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                        Dropdown
                                                    </a>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                                        <li><hr class="dropdown-divider"></li>
                                                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                                                    </ul>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                                                </li>
                                            </ul>
                                            <form class="d-flex" role="search">
                                                <input class="form-control me-2" type="search" name="search" placeholder="Search" aria-label="Search">
                                                <button class="btn btn-outline-dark" type="submit">Search</button>
                                            </form>
                                        </div>
                                    </div>
                                </nav>

                                <nav class="navbar navbar-expand-lg navbar-dark bg-primary mt-5">
                                    <div class="container-fluid">
                                        <a class="navbar-brand" href="#">
                                            <img src="https://getbootstrap.com/docs/5.3/assets/brand/bootstrap-logo-white.svg" width="38" height="30" class="d-inline-block align-top" alt="Bootstrap" loading="lazy">
                                        </a>
                                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent2" aria-controls="navbarSupportedContent2" aria-expanded="false" aria-label="Toggle navigation">
                                            <span class="navbar-toggler-icon"></span>
                                        </button>
                                        <div class="collapse navbar-collapse" id="navbarSupportedContent2">
                                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                                <li class="nav-item">
                                                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#">Link</a>
                                                </li>
                                                <li class="nav-item dropdown">
                                                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                        Dropdown
                                                    </a>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                                        <li><hr class="dropdown-divider"></li>
                                                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                                                    </ul>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                                                </li>
                                            </ul>
                                            <form class="d-flex" role="search">
                                                <input class="form-control me-2" type="search" name="search" placeholder="Search" aria-label="Search">
                                                <button class="btn btn-outline-light" type="submit">Search</button>
                                            </form>
                                        </div>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                </article>

                <article class="dc-cheatsheet__example" id="pagination">
                    <div class="dc-cheatsheet__example-heading sticky-xl-top align-self-start mt-5 mb-3 mt-xl-0 mb-xl-2">
                        <h3>Pagination</h3>
                        <a target="_blank" class="icon-link" href="https://getbootstrap.com/docs/5.3/components/pagination">
                            <i class="bi bi-journal-code mb-2"></i>
                            Documentation
                        </a>
                    </div>

                    <div>
                        <div class="dc-cheatsheet__example-wrapper">
                            <div class="dc-cheatsheet__example-content">
                                <nav aria-label="Pagination example">
                                    <ul class="pagination pagination-sm">
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item active" aria-current="page">
                                            <a class="page-link" href="#">2</a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>

                        <div class="dc-cheatsheet__example-wrapper">
                            <div class="dc-cheatsheet__example-content">
                                <nav aria-label="Standard pagination example">
                                    <ul class="pagination">
                                        <li class="page-item">
                                            <a class="page-link" href="#" aria-label="Previous">
                                                <span aria-hidden="true">«</span>
                                            </a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#" aria-label="Next">
                                                <span aria-hidden="true">»</span>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>

                        <div class="dc-cheatsheet__example-wrapper">
                            <div class="dc-cheatsheet__example-content">
                                <nav aria-label="Another pagination example">
                                    <ul class="pagination pagination-lg flex-wrap">
                                        <li class="page-item disabled">
                                            <a class="page-link">Previous</a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item active" aria-current="page">
                                            <a class="page-link" href="#">2</a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#">Next</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </article>

                <article class="dc-cheatsheet__example" id="popovers">
                    <div class="dc-cheatsheet__example-heading sticky-xl-top align-self-start mt-5 mb-3 mt-xl-0 mb-xl-2">
                        <h3>Popovers</h3>
                        <a target="_blank" class="icon-link" href="https://getbootstrap.com/docs/5.3/components/popovers">
                            <i class="bi bi-journal-code mb-2"></i>
                            Documentation
                        </a>
                    </div>

                    <div>
                        <div class="dc-cheatsheet__example-wrapper">
                            <div class="dc-cheatsheet__example-content">
                                <button type="button" class="btn btn-lg btn-danger" data-bs-toggle="popover" data-bs-content="And here's some amazing content. It's very engaging. Right?" data-bs-original-title="Popover title">Click to toggle popover</button>
                            </div>
                        </div>

                        <div class="dc-cheatsheet__example-wrapper">
                            <div class="dc-cheatsheet__example-content">
                                <button type="button" class="btn btn-secondary" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="top" data-bs-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                                    Popover on top
                                </button>
                                <button type="button" class="btn btn-secondary" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="right" data-bs-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                                    Popover on end
                                </button>
                                <button type="button" class="btn btn-secondary" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="bottom" data-bs-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                                    Popover on bottom
                                </button>
                                <button type="button" class="btn btn-secondary" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="left" data-bs-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                                    Popover on start
                                </button>
                            </div>
                        </div>
                    </div>
                </article>

                <article class="dc-cheatsheet__example" id="progress">
                    <div class="dc-cheatsheet__example-heading sticky-xl-top align-self-start mt-5 mb-3 mt-xl-0 mb-xl-2">
                        <h3>Progress</h3>
                        <a target="_blank" class="icon-link" href="https://getbootstrap.com/docs/5.3/components/progress">
                            <i class="bi bi-journal-code mb-2"></i>
                            Documentation
                        </a>
                    </div>

                    <div>
                        <div class="dc-cheatsheet__example-wrapper">
                            <div class="dc-cheatsheet__example-content">
                                <div class="progress mb-3" role="progressbar" aria-label="Example with label" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar">0%</div>
                                </div>
                                <div class="progress mb-3" role="progressbar" aria-label="Success example with label" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar bg-success w-25">25%</div>
                                </div>
                                <div class="progress mb-3" role="progressbar" aria-label="Info example with label" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar text-bg-info w-50">50%</div>
                                </div>
                                <div class="progress mb-3" role="progressbar" aria-label="Warning example with label" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar text-bg-warning w-75">75%</div>
                                </div>
                                <div class="progress" role="progressbar" aria-label="Danger example with label" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar bg-danger w-100">100%</div>
                                </div>
                            </div>
                        </div>

                        <div class="dc-cheatsheet__example-wrapper">
                            <div class="dc-cheatsheet__example-content">
                                <div class="progress-stacked">
                                    <div class="progress" role="progressbar" aria-label="Segment one - default example" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar"></div>
                                    </div>
                                    <div class="progress" role="progressbar" aria-label="Segment two - animated striped success example" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-success"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>

                <article class="dc-cheatsheet__example" id="scrollspy">
                    <div class="dc-cheatsheet__example-heading sticky-xl-top align-self-start mt-5 mb-3 mt-xl-0 mb-xl-2">
                        <h3>Scrollspy</h3>
                        <a target="_blank" class="icon-link" href="https://getbootstrap.com/docs/5.3/components/scrollspy">
                            <i class="bi bi-journal-code mb-2"></i>
                            Documentation
                        </a>
                    </div>

                    <div>
                        <div class="dc-example">
                            <nav id="navbar-example2" class="navbar bg-body-tertiary px-3">
                                <a class="navbar-brand" href="#">Navbar</a>
                                <ul class="nav nav-pills">
                                    <li class="nav-item">
                                        <a class="nav-link active" href="#scrollspyHeading1">First</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#scrollspyHeading2">Second</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Dropdown</a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#scrollspyHeading3">Third</a></li>
                                            <li><a class="dropdown-item" href="#scrollspyHeading4">Fourth</a></li>
                                            <li><hr class="dropdown-divider"></li>
                                            <li><a class="dropdown-item" href="#scrollspyHeading5">Fifth</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                            <div data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-offset="0" class="dc-cheatsheet__scrollspy-example position-relative mt-2 overflow-auto" tabindex="0">
                                <h4 id="scrollspyHeading1">First heading</h4>
                                <p>This is some placeholder content for the scrollspy page. Note that as you scroll down the page, the appropriate navigation link is highlighted. It's repeated throughout the component example. We keep adding some more example copy here to emphasize the scrolling and highlighting.</p>
                                <h4 id="scrollspyHeading2">Second heading</h4>
                                <p>This is some placeholder content for the scrollspy page. Note that as you scroll down the page, the appropriate navigation link is highlighted. It's repeated throughout the component example. We keep adding some more example copy here to emphasize the scrolling and highlighting.</p>
                                <h4 id="scrollspyHeading3">Third heading</h4>
                                <p>This is some placeholder content for the scrollspy page. Note that as you scroll down the page, the appropriate navigation link is highlighted. It's repeated throughout the component example. We keep adding some more example copy here to emphasize the scrolling and highlighting.</p>
                                <h4 id="scrollspyHeading4">Fourth heading</h4>
                                <p>This is some placeholder content for the scrollspy page. Note that as you scroll down the page, the appropriate navigation link is highlighted. It's repeated throughout the component example. We keep adding some more example copy here to emphasize the scrolling and highlighting.</p>
                                <h4 id="scrollspyHeading5">Fifth heading</h4>
                                <p>This is some placeholder content for the scrollspy page. Note that as you scroll down the page, the appropriate navigation link is highlighted. It's repeated throughout the component example. We keep adding some more example copy here to emphasize the scrolling and highlighting.</p>
                            </div>
                        </div>
                    </div>
                </article>

                <article class="dc-cheatsheet__example" id="spinners">
                    <div class="dc-cheatsheet__example-heading sticky-xl-top align-self-start mt-5 mb-3 mt-xl-0 mb-xl-2">
                        <h3>Spinners</h3>
                        <a target="_blank" class="icon-link" href="https://getbootstrap.com/docs/5.3/components/spinners">
                            <i class="bi bi-journal-code mb-2"></i>
                            Documentation
                        </a>
                    </div>

                    <div>
                        <div class="dc-cheatsheet__example-wrapper">
                            <div class="dc-cheatsheet__example-content">
                                <div class="spinner-border text-primary" role="status">
                                    <span class="visually-hidden">Loading...</span>
                                </div>

                                <div class="spinner-border text-secondary" role="status">
                                    <span class="visually-hidden">Loading...</span>
                                </div>

                                <div class="spinner-border text-success" role="status">
                                    <span class="visually-hidden">Loading...</span>
                                </div>

                                <div class="spinner-border text-danger" role="status">
                                    <span class="visually-hidden">Loading...</span>
                                </div>

                                <div class="spinner-border text-warning" role="status">
                                    <span class="visually-hidden">Loading...</span>
                                </div>

                                <div class="spinner-border text-info" role="status">
                                    <span class="visually-hidden">Loading...</span>
                                </div>

                                <div class="spinner-border text-light" role="status">
                                    <span class="visually-hidden">Loading...</span>
                                </div>

                                <div class="spinner-border text-dark" role="status">
                                    <span class="visually-hidden">Loading...</span>
                                </div>
                            </div>
                        </div>

                        <div class="dc-cheatsheet__example-wrapper">
                            <div class="dc-cheatsheet__example-content">
                                <div class="spinner-grow text-primary" role="status">
                                    <span class="visually-hidden">Loading...</span>
                                </div>

                                <div class="spinner-grow text-secondary" role="status">
                                    <span class="visually-hidden">Loading...</span>
                                </div>

                                <div class="spinner-grow text-success" role="status">
                                    <span class="visually-hidden">Loading...</span>
                                </div>

                                <div class="spinner-grow text-danger" role="status">
                                    <span class="visually-hidden">Loading...</span>
                                </div>

                                <div class="spinner-grow text-warning" role="status">
                                    <span class="visually-hidden">Loading...</span>
                                </div>

                                <div class="spinner-grow text-info" role="status">
                                    <span class="visually-hidden">Loading...</span>
                                </div>

                                <div class="spinner-grow text-light" role="status">
                                    <span class="visually-hidden">Loading...</span>
                                </div>

                                <div class="spinner-grow text-dark" role="status">
                                    <span class="visually-hidden">Loading...</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>

                <article class="dc-cheatsheet__example" id="toasts">
                    <div class="dc-cheatsheet__example-heading sticky-xl-top align-self-start mt-5 mb-3 mt-xl-0 mb-xl-2">
                        <h3>Toasts</h3>
                        <a target="_blank" class="icon-link" href="https://getbootstrap.com/docs/5.3/components/toasts">
                            <i class="bi bi-journal-code mb-2"></i>
                            Documentation
                        </a>
                    </div>

                    <div>
                        <div class="dc-cheatsheet__example-wrapper">
                            <div class="dc-cheatsheet__example bg-dark p-5 align-items-center">
                                <div class="toast fade show" role="alert" aria-live="assertive" aria-atomic="true">
                                    <div class="toast-header">
                                        <svg aria-hidden="true" class="dc-cheatsheet__placeholder-img rounded me-2" height="20" preserveAspectRatio="xMidYMid slice" width="20" xmlns="http://www.w3.org/2000/svg"><rect width="100%" height="100%" fill="#007aff"></rect></svg>
                                        <strong class="me-auto">Bootstrap</strong>
                                        <small class="text-body-secondary">11 mins ago</small>
                                        <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                                    </div>
                                    <div class="toast-body">
                                        Hello, world! This is a toast message.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>

                <article class="dc-cheatsheet__example" id="tooltips">
                    <div class="dc-cheatsheet__example-heading sticky-xl-top align-self-start mt-5 mb-3 mt-xl-0 mb-xl-2">
                        <h3>Tooltips</h3>
                        <a target="_blank" class="icon-link" href="https://getbootstrap.com/docs/5.3/components/tooltips">
                            <i class="bi bi-journal-code mb-2"></i>
                            Documentation
                        </a>
                    </div>

                    <div>
                        <div class="dc-cheatsheet__example-wrapper">
                            <div class="dc-cheatsheet__example tooltip-demo">
                                <button type="button" class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-placement="top" title="Tooltip on top">Tooltip on top</button>
                                <button type="button" class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-placement="right" title="Tooltip on end">Tooltip on end</button>
                                <button type="button" class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Tooltip on bottom">Tooltip on bottom</button>
                                <button type="button" class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-placement="left" title="Tooltip on start">Tooltip on start</button>
                                <button type="button" class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-html="true" title="&lt;em&gt;Tooltip&lt;/em&gt; &lt;u&gt;with&lt;/u&gt; &lt;b&gt;HTML&lt;/b&gt;">Tooltip with HTML</button>
                            </div>
                        </div>
                    </div>
                </article>
            </section>

            <section id="icons">
                <h2 class="sticky-xl-top fw-bold pt-2 mb-0">
                    Icons
                </h2>

                <article class="dc-cheatsheet__example" id="icon-font">
                    <div class="dc-cheatsheet__example-heading sticky-xl-top align-self-start mt-5 mb-3 mt-xl-0 mb-xl-2">
                        <h3>Icon font</h3>
                        <a target="_blank" class="icon-link" href="https://icons.getbootstrap.com/#usage">
                            <i class="bi bi-journal-code mb-2"></i>
                            Documentation
                        </a>
                    </div>

                    <div>
                        <div class="dc-cheatsheet__example-wrapper">
                            <div class="dc-cheatsheet__example-content">
                                <p>
                                    Icon fonts with classes for every icon are also included for Bootstrap Icons.
                                    Include the icon web fonts in your page via CSS, then reference the class names as needed in your HTML.
                                    <br>
                                    <code>&lt;i class="bi bi-alarm"&gt;&lt;/i&gt;</code>
                                    <br>
                                    <i class="bi bi-alarm"></i>
                                </p>
                                <p>
                                    Use <code>font-size</code> and <code>color</code> to change the icon appearance.
                                    <br>
                                    <code>&lt;i class="bi bi-alarm" style="font-size: 2rem; color: cornflowerblue;"&gt;&lt;/i&gt;</code>
                                    <br>
                                    <i class="bi bi-alarm" style="font-size: 2rem; color: cornflowerblue;"></i>
                                </p>
                                <p>
                                    <a class="icon-link icon-link-hover" target="_blank" href="https://icons.getbootstrap.com/#icons">
                                        All icons
                                        <i class="bi bi-arrow-right mb-2"></i>
                                    </a>
                                </p>
                            </div>
                        </div>

                        <div class="dc-cheatsheet__example-wrapper">
                            <div class="dc-cheatsheet__example-content">
                                <hr>
                            </div>
                        </div>
                    </div>
                </article>
            </section>
        </div>
    </div>
    {{-- Modals used in cheatsheet --}}
    @push('modals')
        <div class="modal fade" id="exampleModalDefault" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="modal-body">
                        ...
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="staticBackdropLive" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLiveLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLiveLabel">Modal title</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="modal-body">
                        <p>I will not close if you click outside me. Don't even try to press escape key.</p>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Understood</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="exampleModalCenteredScrollable" tabindex="-1" aria-labelledby="exampleModalCenteredScrollableTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalCenteredScrollableTitle">Modal title</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="modal-body">
                        <p>This is some placeholder content to show the scrolling behavior for modals. We use repeated line breaks to demonstrate how content can exceed minimum inner height, thereby showing inner scrolling. When content becomes longer than the predefined max-height of modal, content will be cropped and scrollable within the modal.</p>
                        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                        <p>This content should appear at the bottom after you scroll.</p>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="exampleModalFullscreen" tabindex="-1" aria-labelledby="exampleModalFullscreenLabel" aria-hidden="true">
            <div class="modal-dialog modal-fullscreen">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-4" id="exampleModalFullscreenLabel">Full screen modal</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="modal-body">
                        ...
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    @endpush

    {{-- Cheatsheet JS: https://getbootstrap.com/docs/5.3/examples/cheatsheet/cheatsheet.js --}}
    @push('bottom-scripts')
        <script>
            window.onload = function() {

                // Tooltip and popover demos
                document.querySelectorAll('.tooltip-demo')
                    .forEach(tooltip => {
                        new bootstrap.Tooltip(tooltip, {
                            selector: '[data-bs-toggle="tooltip"]'
                        })
                    })

                document.querySelectorAll('[data-bs-toggle="popover"]')
                    .forEach(popover => {
                        new bootstrap.Popover(popover, {})
                    })

                document.querySelectorAll('.toast')
                    .forEach(toastNode => {
                        const toast = new bootstrap.Toast(toastNode, {
                            autohide: false
                        })

                        toast.show()
                    })

                // Disable empty links and submit buttons
                document.querySelectorAll('[href="#"], [type="submit"]')
                    .forEach(link => {
                        link.addEventListener('click', event => {
                            event.preventDefault()
                        })
                    })

                function setActiveItem() {
                    const { hash } = window.location

                    if (hash === '') {
                        return
                    }

                    const link = document.querySelector(`.dc-cheatsheet__aside a[href="${hash}"]`)

                    if (!link) {
                        return
                    }

                    const active = document.querySelector('.dc-cheatsheet__aside .active')
                    const parent = link.parentNode.parentNode.previousElementSibling

                    link.classList.add('active')

                    if (parent.classList.contains('collapsed')) {
                        parent.click()
                    }

                    if (!active) {
                        return
                    }

                    const expanded = active.parentNode.parentNode.previousElementSibling

                    active.classList.remove('active')

                    if (expanded && parent !== expanded) {
                        expanded.click()
                    }
                }

                setActiveItem()
                window.addEventListener('hashchange', setActiveItem)
            }
        </script>
    @endpush

    {{-- Theme switcher --}}
    @push('head-scripts')
        <script>
            /*!
             * Color mode toggler for Bootstrap's docs (https://getbootstrap.com/)
             * Copyright 2011-2025 The Bootstrap Authors
             * Licensed under the Creative Commons Attribution 3.0 Unported License.
             */

            (() => {
                'use strict'

                const getStoredTheme = () => localStorage.getItem('theme')
                const setStoredTheme = theme => localStorage.setItem('theme', theme)

                const getPreferredTheme = () => {
                    const storedTheme = getStoredTheme()
                    if (storedTheme) {
                        return storedTheme
                    }

                    return window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light'
                }

                const setTheme = theme => {
                    if (theme === 'auto') {
                        document.documentElement.setAttribute('data-bs-theme', (window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light'))
                    } else {
                        document.documentElement.setAttribute('data-bs-theme', theme)
                    }
                }

                setTheme(getPreferredTheme())

                const showActiveTheme = (theme, focus = false) => {
                    const themeSwitcher = document.querySelector('#bd-theme')

                    if (!themeSwitcher) {
                        return
                    }

                    const themeSwitcherText = document.querySelector('#bd-theme-text')
                    const activeThemeIcon = document.querySelector('.theme-icon-active use')
                    const btnToActive = document.querySelector(`[data-bs-theme-value="${theme}"]`)
                    const svgOfActiveBtn = btnToActive.querySelector('svg use').getAttribute('href')

                    document.querySelectorAll('[data-bs-theme-value]').forEach(element => {
                        element.classList.remove('active')
                        element.setAttribute('aria-pressed', 'false')
                    })

                    btnToActive.classList.add('active')
                    btnToActive.setAttribute('aria-pressed', 'true')
                    activeThemeIcon.setAttribute('href', svgOfActiveBtn)
                    const themeSwitcherLabel = `${themeSwitcherText.textContent} (${btnToActive.dataset.bsThemeValue})`
                    themeSwitcher.setAttribute('aria-label', themeSwitcherLabel)

                    if (focus) {
                        themeSwitcher.focus()
                    }
                }

                window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', () => {
                    const storedTheme = getStoredTheme()
                    if (storedTheme !== 'light' && storedTheme !== 'dark') {
                        setTheme(getPreferredTheme())
                    }
                })

                window.addEventListener('DOMContentLoaded', () => {
                    showActiveTheme(getPreferredTheme())

                    document.querySelectorAll('[data-bs-theme-value]')
                        .forEach(toggle => {
                            toggle.addEventListener('click', () => {
                                const theme = toggle.getAttribute('data-bs-theme-value')
                                setStoredTheme(theme)
                                setTheme(theme)
                                showActiveTheme(theme, true)
                            })
                        })
                })
            })()
        </script>
        <style>
            .dc-cheatsheet__themeswitch-toggle {
                z-index: 1500
            }

            .dc-cheatsheet__themeswitch-toggle .dc-cheatsheet__themeswitch-btn {
                --dc-violet-bg: #712cf9;
                --dc-violet-rgb: 112.520718, 44.062154, 249.437846;
                --dc-btn-font-weight: 600;
                --dc-btn-color: var(--dc-white);
                --dc-btn-bg: var(--dc-violet-bg);
                --dc-btn-border-color: var(--dc-violet-bg);
                --dc-btn-hover-color: var(--dc-white);
                --dc-btn-hover-bg: #6528e0;
                --dc-btn-hover-border-color: #6528e0;
                --dc-btn-focus-shadow-rgb: var(--dc-violet-rgb);
                --dc-btn-active-color: var(--dc-btn-hover-color);
                --dc-btn-active-bg: #5a23c8;
                --dc-btn-active-border-color: #5a23c8
            }

            .dc-cheatsheet__themeswitch-toggle .bi {
                width: 1em;
                height: 1em;
                vertical-align: -.125em;
                fill: currentColor
            }

            .dc-cheatsheet__themeswitch-toggle .dropdown-menu .active .bi {
                display: block!important
            }
        </style>
    @endpush
    <div class="dc-cheatsheet__themeswitch-toggle dropdown position-fixed bottom-0 end-0 mb-3 me-3">
        <button class="btn dc-cheatsheet__themeswitch-btn py-2 dropdown-toggle d-flex align-items-center" id="bd-theme" type="button" aria-expanded="false" data-bs-toggle="dropdown" aria-label="Toggle theme (light)">
            <svg class="bi my-1 theme-icon-active" aria-hidden="true"><use href="#sun-fill"></use></svg>
            <span class="visually-hidden" id="bd-theme-text">Toggle theme</span>
        </button>

        <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="bd-theme-text">
            <li>
                <button type="button" class="dropdown-item d-flex align-items-center active" data-bs-theme-value="light" aria-pressed="true">
                    <svg class="bi me-2 opacity-50" aria-hidden="true"><use href="#sun-fill"></use></svg>
                    Light
                    <svg class="bi ms-auto d-none" aria-hidden="true"><use href="#check2"></use></svg>
                </button>
            </li>
            <li>
                <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="dark" aria-pressed="false">
                    <svg class="bi me-2 opacity-50" aria-hidden="true"><use href="#moon-stars-fill"></use></svg>
                    Dark
                    <svg class="bi ms-auto d-none" aria-hidden="true"><use href="#check2"></use></svg>
                </button>
            </li>
            <li>
                <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="auto" aria-pressed="false">
                    <svg class="bi me-2 opacity-50" aria-hidden="true"><use href="#circle-half"></use></svg>
                    Auto
                    <svg class="bi ms-auto d-none" aria-hidden="true"><use href="#check2"></use></svg>
                </button>
            </li>
        </ul>

        <svg xmlns="http://www.w3.org/2000/svg" class="d-none">
            <symbol id="check2" viewBox="0 0 16 16">
                <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"></path>
            </symbol>
            <symbol id="circle-half" viewBox="0 0 16 16">
                <path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z"></path>
            </symbol>
            <symbol id="moon-stars-fill" viewBox="0 0 16 16">
                <path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z"></path>
                <path d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z"></path>
            </symbol>
            <symbol id="sun-fill" viewBox="0 0 16 16">
                <path d="M8 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z"></path>
            </symbol>
        </svg>
    </div>
</x-app-layout>

