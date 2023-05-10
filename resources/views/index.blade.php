@extends('layouts.layout', ['title' => 'Primer Full Living de Cartagena'])

@section('content')
    @include('components.header')
    @include('components.project')
    @include('components.amenities')
    @include('components.apartment')
    @include('components.tour')
    @include('components.galery')
    {{-- @include('components.progress') --}}
    @include('components.location')
@endsection

@push('js')
    

    <script>
        function myMap() {
            var mapProp = {
                center: new google.maps.LatLng(10.475358, -75.495615),
                zoom: 16,
                zoomControl: false,
                panControl: false,
                disableDoubleClickZoom: false,
                mapTypeControl: false,
                overviewMapControl: false,
                streetViewControl: false,
                styles: [{
                        "featureType": "water",
                        "elementType": "geometry",
                        "stylers": [{
                                "color": "#e9e9e9"
                            },
                            {
                                "lightness": 17
                            }
                        ]
                    },
                    {
                        "featureType": "landscape",
                        "elementType": "geometry",
                        "stylers": [{
                                "color": "#f5f5f5"
                            },
                            {
                                "lightness": 20
                            }
                        ]
                    },
                    {
                        "featureType": "road.highway",
                        "elementType": "geometry.fill",
                        "stylers": [{
                                "color": "#ffffff"
                            },
                            {
                                "lightness": 17
                            }
                        ]
                    },
                    {
                        "featureType": "road.highway",
                        "elementType": "geometry.stroke",
                        "stylers": [{
                                "color": "#ffffff"
                            },
                            {
                                "lightness": 29
                            },
                            {
                                "weight": 0.2
                            }
                        ]
                    },
                    {
                        "featureType": "road.arterial",
                        "elementType": "geometry",
                        "stylers": [{
                                "color": "#ffffff"
                            },
                            {
                                "lightness": 18
                            }
                        ]
                    },
                    {
                        "featureType": "road.local",
                        "elementType": "geometry",
                        "stylers": [{
                                "color": "#ffffff"
                            },
                            {
                                "lightness": 16
                            }
                        ]
                    },
                    {
                        "featureType": "poi",
                        "elementType": "geometry",
                        "stylers": [{
                                "color": "#f5f5f5"
                            },
                            {
                                "lightness": 21
                            }
                        ]
                    },
                    {
                        "featureType": "poi.park",
                        "elementType": "geometry",
                        "stylers": [{
                                "color": "#dedede"
                            },
                            {
                                "lightness": 21
                            }
                        ]
                    },
                    {
                        "elementType": "labels.text.stroke",
                        "stylers": [{
                                "visibility": "on"
                            },
                            {
                                "color": "#ffffff"
                            },
                            {
                                "lightness": 16
                            }
                        ]
                    },
                    {
                        "elementType": "labels.text.fill",
                        "stylers": [{
                                "saturation": 36
                            },
                            {
                                "color": "#333333"
                            },
                            {
                                "lightness": 40
                            }
                        ]
                    },
                    {
                        "elementType": "labels.icon",
                        "stylers": [{
                            "visibility": "off"
                        }]
                    },
                    {
                        "featureType": "transit",
                        "elementType": "geometry",
                        "stylers": [{
                                "color": "#f2f2f2"
                            },
                            {
                                "lightness": 19
                            }
                        ]
                    },
                    {
                        "featureType": "administrative",
                        "elementType": "geometry.fill",
                        "stylers": [{
                                "color": "#fefefe"
                            },
                            {
                                "lightness": 20
                            }
                        ]
                    },
                    {
                        "featureType": "administrative",
                        "elementType": "geometry.stroke",
                        "stylers": [{
                                "color": "#fefefe"
                            },
                            {
                                "lightness": 17
                            },
                            {
                                "weight": 1.2
                            }
                        ]
                    }
                ],

            };

            var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);
            var locations = [
                ['', 10.475358, -75.495615],
            ];
            for (var i = 0; i < locations.length; i++) {

                var marker = new google.maps.Marker({
                    // icon: '../../../assets/img/marker.svg',
                    animation: google.maps.Animation.BOUNCE,
                    position: new google.maps.LatLng(locations[i][1], locations[i][2]),
                    map: map,
                });
            }
            google.maps.event.addListener(marker, 'click', function() {
                infowindow.open(map, marker);
            });


        }
    </script>


    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB7Na63-1FdPNN-PIHmHbg4J-l1TfUUJx0&callback=myMap">
    </script>
@endpush
