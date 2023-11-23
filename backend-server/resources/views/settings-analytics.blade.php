@extends('layout.app', ['title' => __('Dashboard')])
@section('content')
    <style>
        .heart {
            animation: heartbeat 1.5s infinite;
        }

        @keyframes heartbeat {
            0% {
                transform: scale(1);
            }
            50% {
                transform: scale(1.4);
            }
            100% {
                transform: scale(1);
            }
        }

        .not-ready-overlay {
            position: relative;
        }

        .not-ready-overlay::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #d9d9d9bd;
            filter: blur(19px);
            z-index: 1;
        }

        .not-ready-overlay-text {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: #606060; /* Adjust the text color as desired */
            font-size: 24px; /* Adjust the font size as desired */
            z-index: 2;
            text-align: center;
        }

    </style>
    <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">

        <!-- Page header -->
        <div class="mb-8" style="display: flex;flex-direction: row; justify-content: space-between; align-items: center">

            <!-- Title -->
            <h1 class="text-2xl md:text-3xl text-slate-800 font-bold">{{$bot->getName()}}: analytics ✨</h1>

            <div class="try-and-share">
                <a href="{{route('chatbot.settings-theme', ['id' => $bot->id])}}"
                   class="btn bg-indigo-500 hover:bg-indigo-600 text-white">
                    <span class="hidden xs:block ml-2">Try it out! -></span>
                </a>
            </div>
        </div>

        <div class="bg-white shadow-lg rounded-sm mb-8">
            <div class="flex flex-col md:flex-row md:-mr-px">

                <!-- Sidebar -->
                @include('layout.sidebar-bot-page')

                <!-- Panel -->
                <div class="grow">

                    <!-- Panel body -->
                    <div class="p-6 space-y-6">

                        <!-- Business Profile -->
                        <section>
                            <h3 class="text-xl leading-snug text-slate-800 font-bold mb-1">Analytics</h3>
                            <div class="text-sm">This is your general bot settings such as name and id</div>
                        </section>

                        <div class="grid grid-cols-12 gap-6">
                            <!-- Line chart (Portfolio Returns) -->
                            <div
                                class="flex flex-col col-span-full xl:col-span-12 bg-white shadow-lg rounded-sm border border-slate-200 not-ready-overlay">
                                <div class="not-ready-overlay-text">
                                    ⌛
                                    <br>
                                    Analytics is coming soon!
                                </div>
                                <header class="px-5 py-4 border-b border-slate-100 flex items-center">
                                    <h2 class="font-semibold text-slate-800">Analytics</h2>
                                </header>
                                <div class="px-5 py-1">
                                    <div class="flex flex-wrap">
                                        <!-- Unique Visitors -->
                                        <div class="flex items-center py-2">
                                            <div class="mr-5">
                                                <div class="flex items-center">
                                                    <div class="text-3xl font-bold text-slate-800 mr-2">24.7K</div>
                                                    <div class="text-sm font-medium text-emerald-500">+49%</div>
                                                </div>
                                                <div class="text-sm text-slate-500">Unique Visitors</div>
                                            </div>
                                            <div class="hidden md:block w-px h-8 bg-slate-200 mr-5" aria-hidden="true"></div>
                                        </div>
                                        <!-- Total Pageviews -->
                                        <div class="flex items-center py-2">
                                            <div class="mr-5">
                                                <div class="flex items-center">
                                                    <div class="text-3xl font-bold text-slate-800 mr-2">56.9K</div>
                                                    <div class="text-sm font-medium text-emerald-500">+7%</div>
                                                </div>
                                                <div class="text-sm text-slate-500">Total Pageviews</div>
                                            </div>
                                            <div class="hidden md:block w-px h-8 bg-slate-200 mr-5" aria-hidden="true"></div>
                                        </div>
                                        <!-- Bounce Rate -->
                                        <div class="flex items-center py-2">
                                            <div class="mr-5">
                                                <div class="flex items-center">
                                                    <div class="text-3xl font-bold text-slate-800 mr-2">54%</div>
                                                    <div class="text-sm font-medium text-amber-500">-7%</div>
                                                </div>
                                                <div class="text-sm text-slate-500">Bounce Rate</div>
                                            </div>
                                            <div class="hidden md:block w-px h-8 bg-slate-200 mr-5" aria-hidden="true"></div>
                                        </div>
                                        <!-- Visit Duration-->
                                        <div class="flex items-center">
                                            <div>
                                                <div class="flex items-center">
                                                    <div class="text-3xl font-bold text-slate-800 mr-2">2m 56s</div>
                                                    <div class="text-sm font-medium text-amber-500">+7%</div>
                                                </div>
                                                <div class="text-sm text-slate-500">Visit Duration</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Chart built with Chart.js 3 -->
                                <!-- Check out src/js/components/analytics-card-01.js for config -->
                                <div class="grow">
                                    <!-- Change the height attribute to adjust the chart height -->
                                    <canvas id="dashboard-card-01" width="1942" height="635" style="display: block; box-sizing: border-box; height: 317.5px; width: 971px;"></canvas>
                                </div>
                            </div>
                            <!-- Credit Card -->


                        </div>

                    </div>



                </div>

            </div>
        </div>

    </div>
@endsection

@section('scripts')

@endsection
