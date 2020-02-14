@extends('layouts.app')

@section('content')
    <div id="app">

        @include('components.navigation', ['title'=>'Dashboard', 'link'=>url('/')])

        <div class="content-container">
            <div class="page_body">
                <div class="meta_info_container">
                    <a href="/connections?state=Active"  class="card">
                        <div class="card-body">
                            <svg class="icon" version="1.1" viewBox="0 0 1e3 1e3" ><path d="m957.4 736.5c0-64.2-40.9-105.2-104.9-105.2h-567.6-12.5v-13.3-264.9c0-27.2 0.3-54.4-0.2-81.5-0.3-16.9-13.7-30.4-30.2-31.6-16.3-1.1-31 9.8-34.2 25.9-0.9 4.3-0.7 8.8-0.7 13.2-0.1 113.1-0.1 226.2-0.1 339.3v13h-60.8c-59.9 0.1-102 42.1-102.2 101.8-0.1 40.8-0.1 81.5 0 122.3 0.1 59.9 42.1 102.1 101.8 102.1 236.4 0.1 472.8 0.1 709.2 0 60 0 102-41.9 102.2-101.8 0.3-39.9 0.2-79.6 0.2-119.3zm-654.4 90.4c-15.6 0.1-31.3 0-46.9 0s-31.3 0.1-46.9 0c-20-0.2-34.5-13.8-34.6-32.3-0.2-18.6 14.3-32.7 34.1-32.8 31.6-0.2 63.2-0.2 94.8 0 19.8 0.1 34.3 14.3 34.2 32.8-0.2 18.5-14.7 32.2-34.7 32.3zm328.2-0.4c-0.4 19-14.8 33.2-32.9 33-17.7-0.2-31.8-14.2-32.1-32.7-0.3-21.7-0.3-43.5 0-65.2 0.3-18.4 14.6-32.4 32.4-32.4 17.8-0.1 32.2 13.9 32.7 32.2 0.3 10.9 0.1 21.7 0.1 32.6-0.2 10.8 0 21.7-0.2 32.5zm130.4 0.8c-0.6 18.3-14.9 32.3-32.7 32.2s-32.1-14-32.4-32.5c-0.3-21.7-0.3-43.5 0-65.2 0.3-18.5 14.3-32.5 32.1-32.7 18.2-0.2 32.5 14 33 33 0.3 10.9 0 21.7 0 32.6 0.1 10.9 0.3 21.8 0 32.6z"/>
                                <path d="m696.5 285c-0.6 62.5-18.8 132.3-55.5 197.1-8 14.2-21.6 20.9-35.5 18.1-14.3-2.9-25.4-13.7-26-28.7-0.3-7.9 2.5-16.8 6.3-23.9 30.7-56.7 46.4-117 45.2-181.5-1.1-59.8-16.5-115.7-45-168.3-4.1-7.6-7-17.3-6.6-25.8 0.7-14.3 12.3-24.9 26.1-27.5 13.2-2.5 26.8 3.9 34.3 16.8 19.9 34.2 34.5 70.6 44 109 8.5 33.7 12.7 68 12.7 114.7z"/>
                                <path d="m566.1 269.1c-0.5 54.9-12.9 103.6-38.7 148.8-8.5 14.9-23.8 20.9-38.9 16-15-4.9-24.3-19-22.2-34.7 0.7-5.2 3-10.4 5.5-15.1 38.7-74.4 39.1-148.7-0.2-223-10.1-19.1-5.4-38.4 11.4-47.5 17-9.2 35.5-2.7 46 16.4 24.4 44.1 36.6 91.5 37.1 139.1z"/>
                                <path d="m435.5 279.7c-0.6 31.9-12.8 66.8-37.7 97-13.7 16.6-33.7 19.3-48.3 7s-15.5-31.4-2.4-48.1c31-39.2 31-87.1-0.1-126.4-13.1-16.6-12.1-35.8 2.6-48.1 14.4-12 34.1-9.3 47.7 6.5 24.3 28.4 38.2 66.5 38.2 112.1z"/></svg>
                            <div class="content">
                                <span class="heading">Active Connections</span>
                                <span class="data">{{$activeConnections}}</span>
                            </div>
                        </div>
                        <div class="card-footer">
                            Total
                        </div>
                    </a>
                    <a href="/connections?status=NotRecovered"  class="card">
                        <div class="card-body">
                            <svg class="icon" version="1.1" viewBox="0 0 423.055 423.055" >
                                <g>
                                    <path d="M362.021,10.869c-6.431-2.963-14.009-1.81-19.269,2.93l-27.755,24.575c-0.755,0.672-1.894,0.668-2.645-0.008L274.588,4.59
			c-6.83-6.12-17.17-6.12-24,0l-37.73,33.745c-0.759,0.678-1.906,0.678-2.665,0L172.459,4.59c-6.83-6.119-17.17-6.119-24,0
			L110.69,38.366c-0.756,0.676-1.898,0.679-2.658,0.007l-27.78-24.574c-7.37-6.554-18.658-5.893-25.212,1.477
			c-2.939,3.305-4.547,7.583-4.513,12.005v368.494c-0.066,9.878,7.888,17.939,17.766,18.005c4.425,0.03,8.703-1.582,12.009-4.523
			l27.755-24.575c0.755-0.672,1.894-0.668,2.645,0.008l37.764,33.776c6.83,6.12,17.17,6.12,24,0l37.734-33.745
			c0.759-0.678,1.906-0.678,2.665,0l37.734,33.744c6.831,6.117,17.17,6.117,24,0l37.771-33.776c0.756-0.676,1.898-0.679,2.658-0.007
			l27.78,24.574c7.373,6.551,18.66,5.885,25.211-1.488c2.934-3.302,4.54-7.575,4.508-11.993V27.281
			C372.621,20.202,368.489,13.747,362.021,10.869z M116.734,143.528h99.586c4.418,0,8,3.582,8,8s-3.582,8-8,8h-99.586
			c-4.418,0-8-3.582-8-8S112.316,143.528,116.734,143.528z M306.32,279.528H116.734c-4.418,0-8-3.582-8-8s3.582-8,8-8H306.32
			c4.418,0,8,3.582,8,8S310.738,279.528,306.32,279.528z M306.32,219.528H116.734c-4.418,0-8-3.582-8-8s3.582-8,8-8H306.32
			c4.418,0,8,3.582,8,8S310.738,219.528,306.32,219.528z"/>
                                </g>
                            </svg>
                            <div class="content">
                                <span class="heading">Bill Not Recovered</span>
                                <span class="data">{{$connectionsBillNotRecovered}}</span>
                            </div>
                        </div>
                        <div class="card-footer">
                            This Month

                            {{--                            --}}


{{--                            {{  now()->monthName }}--}}
                        </div>
                    </a>
                    <a href="/recoveries"  class="card">
                        <div class="card-body">
                            <svg class="icon" viewBox="0 0 75.364 67.828">
                                <path d="M75.35,25.609c-.124-2.149-2.68-3.828-7.793-5.11a2.832,2.832,0,0,0,.27-1.176V10.536h-.021C67.356,3.216,37.359,3,33.914,3S.471,3.216.021,10.536H0V10.7H0v8.628c.006,2.387,3.086,4.254,7.668,5.645a2.755,2.755,0,0,0-.113.637H7.536v.163h0v8.613C2.6,35.656.134,37.312.013,39.426H0v.163H0v8.628c0,1.662,1.5,3.071,3.954,4.245a2.793,2.793,0,0,0-.167.78H3.768v.163h0v8.628c.01,4.178,9.417,6.771,19.868,7.982a1.153,1.153,0,0,0,.229.046c.024,0,.044-.013.068-.014,2.015.227,4.062.4,6.088.531a1.037,1.037,0,0,0,.124.025c.024,0,.043-.013.065-.014,2.572.157,5.1.236,7.471.236s4.9-.079,7.471-.236c.023,0,.043.014.065.014.044,0,.082-.021.124-.025,2.026-.127,4.073-.3,6.088-.531.024,0,.044.013.068.013a1.153,1.153,0,0,0,.229-.046C62.179,68.8,71.584,66.209,71.6,62.03V53.243h-.02c-.088-1.54-1.4-2.825-3.993-3.9a2.808,2.808,0,0,0,.245-1.13V40c4.509-1.387,7.53-3.242,7.536-5.607V25.609ZM8.792,22.688V16.62c1.173.317,2.434.605,3.768.868v6.131l-.465-.1c-.668-.147-1.32-.3-1.943-.462C9.678,22.936,9.227,22.812,8.792,22.688Zm56.235-2.753-.035-.008-.457.355a12.217,12.217,0,0,1-2.988,1.544V15.851a18.692,18.692,0,0,0,3.768-1.728v5.2A.986.986,0,0,1,65.028,19.934ZM31.621,48.2q.518.009,1.036.015V54.49c-.244,0-.487,0-.73-.006l-.327-.006q-.863-.015-1.717-.041l-.211-.008q-1.027-.034-2.039-.084v-6.27q1.888.089,3.788.121Zm4.784,0q1.9-.036,3.788-.121v6.272q-.4.021-.811.038-1.13.047-2.3.077c-.183.005-.368.008-.553.011-.448.009-.908.011-1.363.015V48.211q.518-.006,1.036-.015Zm7.137,5.939q-.414.032-.837.063V47.931c1.274-.084,2.532-.185,3.768-.305v6.238c-.776.082-1.57.158-2.385.225C43.907,54.1,43.725,54.118,43.543,54.132Zm5.444-6.778q1.943-.234,3.768-.53v6.167q-1.775.313-3.768.575ZM22,53.931l-.382-.039-.27-.029V47.627c1.236.119,2.495.221,3.768.305v6.259C24.066,54.116,23.024,54.03,22,53.931Zm-3.164-6.577v6.212q-1.991-.262-3.768-.575V46.824Q16.9,47.12,18.841,47.354Zm36.426,5.152V46.376c1.334-.263,2.6-.551,3.768-.868v6.068C57.916,51.9,56.656,52.211,55.267,52.507Zm-23.645-33.2q.518.009,1.036.015v6.272c-1.691-.016-3.371-.06-5.024-.143V19.184q1.888.089,3.788.121Zm4.784,0q1.9-.036,3.788-.121V25.45c-.214.01-.418.025-.633.035l-.054,0c-.843.038-1.7.065-2.572.085l-.407.009c-.447.009-.9.01-1.358.015V19.323q.518-.006,1.036-.015Zm7.536,15.073q1.9-.036,3.788-.121v6.265c-1.65.082-3.329.127-5.024.144V34.4q.518-.006,1.036-.015Zm-12.1,5.94q-1.206-.094-2.355-.209l-.492-.05c-.034,0-.067-.009-.1-.011V33.809c1.236.119,2.495.221,3.768.305v6.26l-.312-.02Zm-7.79-.9c-.5-.079-.965-.165-1.438-.247v-6.16q1.824.3,3.768.53v6.212c-.769-.1-1.521-.207-2.243-.32Q24.091,39.421,24.047,39.416Zm15.11-5.036q.518.009,1.036.015v6.272c-.612-.006-1.228-.009-1.825-.023l-.279-.005c-.945-.024-1.868-.06-2.775-.1l-.146-.006V34.257q1.888.089,3.788.121ZM51.8,40.256l-.134.011c-.469.039-.952.064-1.427.1V34.113c1.274-.084,2.532-.185,3.768-.305v6.231C53.281,40.117,52.552,40.193,51.8,40.256ZM21.353,24.969V18.736c1.236.119,2.495.221,3.768.305v6.253C23.843,25.2,22.582,25.1,21.353,24.969Zm25.121,0q-1.82.192-3.768.333V19.041c1.274-.084,2.532-.185,3.768-.305Zm2.512-6.5q1.943-.234,3.768-.53v6.157c-1.191.21-2.444.4-3.768.578Zm6.28,5.144V17.487c1.334-.263,2.6-.551,3.768-.868v6.054C57.91,23,56.642,23.314,55.267,23.608ZM18.841,18.465v6.206c-.249-.033-.507-.059-.754-.093l-.472-.069q-1.089-.156-2.132-.333l-.411-.073V17.936Q16.9,18.23,18.841,18.465ZM20.1,32.559V38.68q-2.082-.447-3.768-.943V31.691C17.5,32.008,18.763,32.3,20.1,32.559ZM60.174,39.2c-.551.1-1.108.19-1.679.276-.328.05-.663.1-1,.146-.318.045-.648.084-.971.126V33.537q1.943-.234,3.768-.53v6.167ZM13.817,30.924v5.968c-1.975-.762-3.248-1.541-3.663-2.235l-.084-.141a.794.794,0,0,1-.021-.119V29.2A18.692,18.692,0,0,0,13.817,30.924ZM12.561,46.376v6.131q-1.73-.367-3.185-.766c-.153-.043-.312-.084-.461-.128l-.122-.035V45.509C9.966,45.824,11.227,46.114,12.561,46.376Zm3.768,13.817v6.131c-1.389-.3-2.649-.608-3.768-.931V59.324C13.734,59.641,14.995,59.931,16.329,60.192Zm2.512.45q1.824.3,3.768.53v6.212q-1.991-.262-3.768-.575Zm6.28.8c1.236.119,2.495.221,3.768.305v6.264q-1.958-.138-3.768-.33Zm6.28.447q1.888.089,3.788.121l.2,0q.518.009,1.036.015v6.279q-2.6-.024-5.024-.146V61.889Zm7.536.138q.518-.006,1.036-.015l.2,0q1.9-.036,3.788-.121V68.16q-2.419.119-5.024.146Zm7.536-.28c1.274-.084,2.532-.185,3.768-.305V67.68q-1.811.19-3.768.33Zm6.28-.577q1.943-.234,3.768-.53v6.167q-1.775.313-3.768.575Zm6.28-.978c1.334-.263,2.6-.551,3.768-.868v6.068c-1.119.323-2.379.636-3.768.931ZM65.18,48.622,64.751,49a11.238,11.238,0,0,1-3.2,1.733V44.742a18.692,18.692,0,0,0,3.768-1.728v5.2A.8.8,0,0,1,65.18,48.622Zm.844-10.708c-.626.175-1.287.338-1.963.5-.313.073-.632.146-.958.216-.1.021-.2.04-.3.062V32.56c1.334-.263,2.6-.551,3.768-.868V37.76ZM2.512,19.324v-5.2A18.692,18.692,0,0,0,6.28,15.851v6.014C3.837,20.949,2.515,20.031,2.512,19.324Zm0,28.889v-5.2A18.692,18.692,0,0,0,6.28,44.74v5.99l-.717-.279-.015.015C3.576,49.649,2.515,48.846,2.512,48.213ZM6.28,62.03v-5.2a18.692,18.692,0,0,0,3.768,1.728v6.014C7.605,63.655,6.283,62.737,6.28,62.03Zm59.035,2.541V58.558a18.692,18.692,0,0,0,3.768-1.728v5.2C69.082,62.735,67.758,63.654,65.315,64.571Zm3.768-27.633V30.925A18.692,18.692,0,0,0,72.852,29.2v5.2C72.851,35.1,71.527,36.021,69.084,36.938Z" transform="translate(0 -3)" />
                            </svg>
                            <div class="content">
                                <span class="heading">Net Recovery</span>
                                <span class="data">₹{{$netRecovery}}</span>
                            </div>
                        </div>
                        <div class="card-footer">
                            This Month
{{--                            {{  now()->monthName }}--}}
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

@endsection