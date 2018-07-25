<?php

namespace App\Http\Controllers;

use App\Common;
use App\Airline;
use Carbon\Carbon;

class TestController extends Controller
{

    public function getSettings() {
        //return setting('site.airhob_api_key');
        //return setting('site.airhob_api_mode');
        //return Common::getSearchResponse();
        //Common::saveSearch('R', 'DEL', 'JFK', '2018-08-07', '2018-08-25', 'Economy', 2, 1, 1, "INTL");
        //return 'done';
        //return menu('admin');
        //return setting('site-ad-banners.ad_banner_3');
        // $jsonRequest = '{ "TripType": "O", "NoOfAdults": 1, "NoOfChilds": 0, "NoOfInfants": 0, "ClassType": "Economy", "OriginDestination": [ { "Origin": "DEL", "Destination": "BLR", "TravelDate": "09/26/2018" } ], "Currency": "INR" }';

        // $response = Common::getSearchResponse($jsonRequest);

        $response = '{
    "ExpMsg": null,
    "ProductErrors": {
        "ErrorCode": null,
        "Message": null
    },
    "OneWayAvailabilityResponse": {
        "TrackId": "RA5DEDF31E4A874E8098DBF158A303ADCE20180717115715$03bc665a-8ca4-4$eSJ0x",
        "ResultCode": {
            "Status": "0",
            "Error": {
                "Code": null,
                "Description": null
            }
        },
        "Exception": null,
        "ItinearyDetails": [
            {
                "Items": [
                    {
                        "ApiProvider": "RB",
                        "Connection": {
                            "Onward": {
                                "IsConnection": false,
                                "NoOfStops": 0,
                                "ConnectionAirport": []
                            },
                            "Return": {
                                "IsConnection": false,
                                "NoOfStops": 0,
                                "ConnectionAirport": []
                            }
                        },
                        "FlightDetails": [
                            {
                                "FlightID": "4374",
                                "CarrierCode": "6E",
                                "Origin": "DEL",
                                "Destination": "BLR",
                                "FlightNum": "2376",
                                "DepartureDateTime": "2018-09-26T00:05:00",
                                "ArrivalDateTime": "2018-09-26T02:50:00",
                                "Duration": "165",
                                "OrgTerminal": "2",
                                "DesTerminal": "",
                                "AirlineCategory": "LCC",
                                "AirCraftType": "",
                                "Via": "",
                                "ValidatingCarrier": "6E",
                                "ClassCode": "R",
                                "ClassCodeDesc": "REFUNDABLE",
                                "FareBasisCode": "R0IP",
                                "BreakPoint": "",
                                "CurrencyCode": "INR",
                                "OriginAirportName": "Indira Gandhi International Airport",
                                "OriginAirportCity": "New Delhi",
                                "OriginAirportCountry": "India",
                                "DestinationAirportName": "Bengaluru International Airport",
                                "DestinationAirportCity": "Bangalore",
                                "DestinationAirportCountry": "India",
                                "AirlineName": "IndiGo",
                                "MajorClassCode": "Economy",
                                "AirEquipType": null,
                                "MarriageGroup": null,
                                "Baggage": {
                                    "Weight": "15",
                                    "Unit": "kg",
                                    "Pieces": null
                                },
                                "MealCode": {
                                    "MealCode": null,
                                    "MealCodeDescription": null
                                },
                                "IsStopAirport": false,
                                "JourneyType": "Onward"
                            }
                        ],
                        "FareDescription": {
                            "IsNonRefundable": false,
                            "PaxFareDetails": [
                                {
                                    "PaxType": null,
                                    "BasicAmount": "600",
                                    "TotalTaxAmount": "1469",
                                    "FuelSurcharge": "500",
                                    "Commission": null,
                                    "OtherInfo": {
                                        "TransactionFee": null,
                                        "ServiceTax": null,
                                        "GrossAmount": 2069,
                                        "Item": []
                                    }
                                },
                                {
                                    "PaxType": "ADT",
                                    "BasicAmount": "600.00",
                                    "TotalTaxAmount": "1469.00",
                                    "FuelSurcharge": "500.00",
                                    "Commission": "8.00",
                                    "OtherInfo": {
                                        "TransactionFee": "0.00",
                                        "ServiceTax": "0.00",
                                        "GrossAmount": 2069,
                                        "Item": [
                                            {
                                                "TaxCode": "PHF",
                                                "Amount": "50.00"
                                            },
                                            {
                                                "TaxCode": "RCF",
                                                "Amount": "100.00"
                                            },
                                            {
                                                "TaxCode": "YQ",
                                                "Amount": "500.00"
                                            },
                                            {
                                                "TaxCode": "TTF",
                                                "Amount": "39.00"
                                            },
                                            {
                                                "TaxCode": "PSF",
                                                "Amount": "150.00"
                                            },
                                            {
                                                "TaxCode": "UDF",
                                                "Amount": "564.00"
                                            },
                                            {
                                                "TaxCode": "CGST07",
                                                "Amount": "33.00"
                                            },
                                            {
                                                "TaxCode": "SGST07",
                                                "Amount": "33.00"
                                            }
                                        ]
                                    }
                                }
                            ],
                            "FareBasis": []
                        },
                        "Miles": null,
                        "ElapsedTime": [
                            "165"
                        ],
                        "ValidatingCarrier": "6E"
                    },
                    {
                        "ApiProvider": "RB",
                        "Connection": {
                            "Onward": {
                                "IsConnection": false,
                                "NoOfStops": 0,
                                "ConnectionAirport": []
                            },
                            "Return": {
                                "IsConnection": false,
                                "NoOfStops": 0,
                                "ConnectionAirport": []
                            }
                        },
                        "FlightDetails": [
                            {
                                "FlightID": "4375",
                                "CarrierCode": "6E",
                                "Origin": "DEL",
                                "Destination": "BLR",
                                "FlightNum": "133",
                                "DepartureDateTime": "2018-09-26T05:05:00",
                                "ArrivalDateTime": "2018-09-26T07:50:00",
                                "Duration": "165",
                                "OrgTerminal": "1",
                                "DesTerminal": "",
                                "AirlineCategory": "LCC",
                                "AirCraftType": "",
                                "Via": "",
                                "ValidatingCarrier": "6E",
                                "ClassCode": "R",
                                "ClassCodeDesc": "REFUNDABLE",
                                "FareBasisCode": "R0IP",
                                "BreakPoint": "",
                                "CurrencyCode": "INR",
                                "OriginAirportName": "Indira Gandhi International Airport",
                                "OriginAirportCity": "New Delhi",
                                "OriginAirportCountry": "India",
                                "DestinationAirportName": "Bengaluru International Airport",
                                "DestinationAirportCity": "Bangalore",
                                "DestinationAirportCountry": "India",
                                "AirlineName": "IndiGo",
                                "MajorClassCode": "Economy",
                                "AirEquipType": null,
                                "MarriageGroup": null,
                                "Baggage": {
                                    "Weight": "15",
                                    "Unit": "kg",
                                    "Pieces": null
                                },
                                "MealCode": {
                                    "MealCode": null,
                                    "MealCodeDescription": null
                                },
                                "IsStopAirport": false,
                                "JourneyType": "Onward"
                            }
                        ],
                        "FareDescription": {
                            "IsNonRefundable": false,
                            "PaxFareDetails": [
                                {
                                    "PaxType": null,
                                    "BasicAmount": "600",
                                    "TotalTaxAmount": "1469",
                                    "FuelSurcharge": "500",
                                    "Commission": null,
                                    "OtherInfo": {
                                        "TransactionFee": null,
                                        "ServiceTax": null,
                                        "GrossAmount": 2069,
                                        "Item": []
                                    }
                                },
                                {
                                    "PaxType": "ADT",
                                    "BasicAmount": "600.00",
                                    "TotalTaxAmount": "1469.00",
                                    "FuelSurcharge": "500.00",
                                    "Commission": "8.00",
                                    "OtherInfo": {
                                        "TransactionFee": "0.00",
                                        "ServiceTax": "0.00",
                                        "GrossAmount": 2069,
                                        "Item": [
                                            {
                                                "TaxCode": "PHF",
                                                "Amount": "50.00"
                                            },
                                            {
                                                "TaxCode": "RCF",
                                                "Amount": "100.00"
                                            },
                                            {
                                                "TaxCode": "YQ",
                                                "Amount": "500.00"
                                            },
                                            {
                                                "TaxCode": "TTF",
                                                "Amount": "39.00"
                                            },
                                            {
                                                "TaxCode": "PSF",
                                                "Amount": "150.00"
                                            },
                                            {
                                                "TaxCode": "UDF",
                                                "Amount": "564.00"
                                            },
                                            {
                                                "TaxCode": "CGST07",
                                                "Amount": "33.00"
                                            },
                                            {
                                                "TaxCode": "SGST07",
                                                "Amount": "33.00"
                                            }
                                        ]
                                    }
                                }
                            ],
                            "FareBasis": []
                        },
                        "Miles": null,
                        "ElapsedTime": [
                            "165"
                        ],
                        "ValidatingCarrier": "6E"
                    },
                    {
                        "ApiProvider": "RB",
                        "Connection": {
                            "Onward": {
                                "IsConnection": false,
                                "NoOfStops": 0,
                                "ConnectionAirport": []
                            },
                            "Return": {
                                "IsConnection": false,
                                "NoOfStops": 0,
                                "ConnectionAirport": []
                            }
                        },
                        "FlightDetails": [
                            {
                                "FlightID": "4376",
                                "CarrierCode": "6E",
                                "Origin": "DEL",
                                "Destination": "BLR",
                                "FlightNum": "2133",
                                "DepartureDateTime": "2018-09-26T05:10:00",
                                "ArrivalDateTime": "2018-09-26T07:55:00",
                                "Duration": "165",
                                "OrgTerminal": "2",
                                "DesTerminal": "1",
                                "AirlineCategory": "LCC",
                                "AirCraftType": "",
                                "Via": "",
                                "ValidatingCarrier": "6E",
                                "ClassCode": "R",
                                "ClassCodeDesc": "REFUNDABLE",
                                "FareBasisCode": "R0IP",
                                "BreakPoint": "",
                                "CurrencyCode": "INR",
                                "OriginAirportName": "Indira Gandhi International Airport",
                                "OriginAirportCity": "New Delhi",
                                "OriginAirportCountry": "India",
                                "DestinationAirportName": "Bengaluru International Airport",
                                "DestinationAirportCity": "Bangalore",
                                "DestinationAirportCountry": "India",
                                "AirlineName": "IndiGo",
                                "MajorClassCode": "Economy",
                                "AirEquipType": null,
                                "MarriageGroup": null,
                                "Baggage": {
                                    "Weight": "15",
                                    "Unit": "kg",
                                    "Pieces": null
                                },
                                "MealCode": {
                                    "MealCode": null,
                                    "MealCodeDescription": null
                                },
                                "IsStopAirport": false,
                                "JourneyType": "Onward"
                            }
                        ],
                        "FareDescription": {
                            "IsNonRefundable": false,
                            "PaxFareDetails": [
                                {
                                    "PaxType": null,
                                    "BasicAmount": "600",
                                    "TotalTaxAmount": "1469",
                                    "FuelSurcharge": "500",
                                    "Commission": null,
                                    "OtherInfo": {
                                        "TransactionFee": null,
                                        "ServiceTax": null,
                                        "GrossAmount": 2069,
                                        "Item": []
                                    }
                                },
                                {
                                    "PaxType": "ADT",
                                    "BasicAmount": "600.00",
                                    "TotalTaxAmount": "1469.00",
                                    "FuelSurcharge": "500.00",
                                    "Commission": "8.00",
                                    "OtherInfo": {
                                        "TransactionFee": "0.00",
                                        "ServiceTax": "0.00",
                                        "GrossAmount": 2069,
                                        "Item": [
                                            {
                                                "TaxCode": "PHF",
                                                "Amount": "50.00"
                                            },
                                            {
                                                "TaxCode": "RCF",
                                                "Amount": "100.00"
                                            },
                                            {
                                                "TaxCode": "YQ",
                                                "Amount": "500.00"
                                            },
                                            {
                                                "TaxCode": "TTF",
                                                "Amount": "39.00"
                                            },
                                            {
                                                "TaxCode": "PSF",
                                                "Amount": "150.00"
                                            },
                                            {
                                                "TaxCode": "UDF",
                                                "Amount": "564.00"
                                            },
                                            {
                                                "TaxCode": "CGST07",
                                                "Amount": "33.00"
                                            },
                                            {
                                                "TaxCode": "SGST07",
                                                "Amount": "33.00"
                                            }
                                        ]
                                    }
                                }
                            ],
                            "FareBasis": []
                        },
                        "Miles": null,
                        "ElapsedTime": [
                            "165"
                        ],
                        "ValidatingCarrier": "6E"
                    },
                    {
                        "ApiProvider": "RB",
                        "Connection": {
                            "Onward": {
                                "IsConnection": false,
                                "NoOfStops": 0,
                                "ConnectionAirport": []
                            },
                            "Return": {
                                "IsConnection": false,
                                "NoOfStops": 0,
                                "ConnectionAirport": []
                            }
                        },
                        "FlightDetails": [
                            {
                                "FlightID": "4377",
                                "CarrierCode": "6E",
                                "Origin": "DEL",
                                "Destination": "BLR",
                                "FlightNum": "458",
                                "DepartureDateTime": "2018-09-26T06:20:00",
                                "ArrivalDateTime": "2018-09-26T09:05:00",
                                "Duration": "165",
                                "OrgTerminal": "1",
                                "DesTerminal": "",
                                "AirlineCategory": "LCC",
                                "AirCraftType": "",
                                "Via": "",
                                "ValidatingCarrier": "6E",
                                "ClassCode": "R",
                                "ClassCodeDesc": "REFUNDABLE",
                                "FareBasisCode": "R0IP",
                                "BreakPoint": "",
                                "CurrencyCode": "INR",
                                "OriginAirportName": "Indira Gandhi International Airport",
                                "OriginAirportCity": "New Delhi",
                                "OriginAirportCountry": "India",
                                "DestinationAirportName": "Bengaluru International Airport",
                                "DestinationAirportCity": "Bangalore",
                                "DestinationAirportCountry": "India",
                                "AirlineName": "IndiGo",
                                "MajorClassCode": "Economy",
                                "AirEquipType": null,
                                "MarriageGroup": null,
                                "Baggage": {
                                    "Weight": "15",
                                    "Unit": "kg",
                                    "Pieces": null
                                },
                                "MealCode": {
                                    "MealCode": null,
                                    "MealCodeDescription": null
                                },
                                "IsStopAirport": false,
                                "JourneyType": "Onward"
                            }
                        ],
                        "FareDescription": {
                            "IsNonRefundable": false,
                            "PaxFareDetails": [
                                {
                                    "PaxType": null,
                                    "BasicAmount": "600",
                                    "TotalTaxAmount": "1469",
                                    "FuelSurcharge": "500",
                                    "Commission": null,
                                    "OtherInfo": {
                                        "TransactionFee": null,
                                        "ServiceTax": null,
                                        "GrossAmount": 2069,
                                        "Item": []
                                    }
                                },
                                {
                                    "PaxType": "ADT",
                                    "BasicAmount": "600.00",
                                    "TotalTaxAmount": "1469.00",
                                    "FuelSurcharge": "500.00",
                                    "Commission": "8.00",
                                    "OtherInfo": {
                                        "TransactionFee": "0.00",
                                        "ServiceTax": "0.00",
                                        "GrossAmount": 2069,
                                        "Item": [
                                            {
                                                "TaxCode": "PHF",
                                                "Amount": "50.00"
                                            },
                                            {
                                                "TaxCode": "RCF",
                                                "Amount": "100.00"
                                            },
                                            {
                                                "TaxCode": "YQ",
                                                "Amount": "500.00"
                                            },
                                            {
                                                "TaxCode": "TTF",
                                                "Amount": "39.00"
                                            },
                                            {
                                                "TaxCode": "PSF",
                                                "Amount": "150.00"
                                            },
                                            {
                                                "TaxCode": "UDF",
                                                "Amount": "564.00"
                                            },
                                            {
                                                "TaxCode": "CGST07",
                                                "Amount": "33.00"
                                            },
                                            {
                                                "TaxCode": "SGST07",
                                                "Amount": "33.00"
                                            }
                                        ]
                                    }
                                }
                            ],
                            "FareBasis": []
                        },
                        "Miles": null,
                        "ElapsedTime": [
                            "165"
                        ],
                        "ValidatingCarrier": "6E"
                    },
                    {
                        "ApiProvider": "RB",
                        "Connection": {
                            "Onward": {
                                "IsConnection": false,
                                "NoOfStops": 0,
                                "ConnectionAirport": []
                            },
                            "Return": {
                                "IsConnection": false,
                                "NoOfStops": 0,
                                "ConnectionAirport": []
                            }
                        },
                        "FlightDetails": [
                            {
                                "FlightID": "4378",
                                "CarrierCode": "6E",
                                "Origin": "DEL",
                                "Destination": "BLR",
                                "FlightNum": "2458",
                                "DepartureDateTime": "2018-09-26T06:25:00",
                                "ArrivalDateTime": "2018-09-26T09:10:00",
                                "Duration": "165",
                                "OrgTerminal": "2",
                                "DesTerminal": "",
                                "AirlineCategory": "LCC",
                                "AirCraftType": "",
                                "Via": "",
                                "ValidatingCarrier": "6E",
                                "ClassCode": "R",
                                "ClassCodeDesc": "REFUNDABLE",
                                "FareBasisCode": "R0IP",
                                "BreakPoint": "",
                                "CurrencyCode": "INR",
                                "OriginAirportName": "Indira Gandhi International Airport",
                                "OriginAirportCity": "New Delhi",
                                "OriginAirportCountry": "India",
                                "DestinationAirportName": "Bengaluru International Airport",
                                "DestinationAirportCity": "Bangalore",
                                "DestinationAirportCountry": "India",
                                "AirlineName": "IndiGo",
                                "MajorClassCode": "Economy",
                                "AirEquipType": null,
                                "MarriageGroup": null,
                                "Baggage": {
                                    "Weight": "15",
                                    "Unit": "kg",
                                    "Pieces": null
                                },
                                "MealCode": {
                                    "MealCode": null,
                                    "MealCodeDescription": null
                                },
                                "IsStopAirport": false,
                                "JourneyType": "Onward"
                            }
                        ],
                        "FareDescription": {
                            "IsNonRefundable": false,
                            "PaxFareDetails": [
                                {
                                    "PaxType": null,
                                    "BasicAmount": "600",
                                    "TotalTaxAmount": "1469",
                                    "FuelSurcharge": "500",
                                    "Commission": null,
                                    "OtherInfo": {
                                        "TransactionFee": null,
                                        "ServiceTax": null,
                                        "GrossAmount": 2069,
                                        "Item": []
                                    }
                                },
                                {
                                    "PaxType": "ADT",
                                    "BasicAmount": "600.00",
                                    "TotalTaxAmount": "1469.00",
                                    "FuelSurcharge": "500.00",
                                    "Commission": "8.00",
                                    "OtherInfo": {
                                        "TransactionFee": "0.00",
                                        "ServiceTax": "0.00",
                                        "GrossAmount": 2069,
                                        "Item": [
                                            {
                                                "TaxCode": "PHF",
                                                "Amount": "50.00"
                                            },
                                            {
                                                "TaxCode": "RCF",
                                                "Amount": "100.00"
                                            },
                                            {
                                                "TaxCode": "YQ",
                                                "Amount": "500.00"
                                            },
                                            {
                                                "TaxCode": "TTF",
                                                "Amount": "39.00"
                                            },
                                            {
                                                "TaxCode": "PSF",
                                                "Amount": "150.00"
                                            },
                                            {
                                                "TaxCode": "UDF",
                                                "Amount": "564.00"
                                            },
                                            {
                                                "TaxCode": "CGST07",
                                                "Amount": "33.00"
                                            },
                                            {
                                                "TaxCode": "SGST07",
                                                "Amount": "33.00"
                                            }
                                        ]
                                    }
                                }
                            ],
                            "FareBasis": []
                        },
                        "Miles": null,
                        "ElapsedTime": [
                            "165"
                        ],
                        "ValidatingCarrier": "6E"
                    },
                    {
                        "ApiProvider": "RB",
                        "Connection": {
                            "Onward": {
                                "IsConnection": false,
                                "NoOfStops": 0,
                                "ConnectionAirport": []
                            },
                            "Return": {
                                "IsConnection": false,
                                "NoOfStops": 0,
                                "ConnectionAirport": []
                            }
                        },
                        "FlightDetails": [
                            {
                                "FlightID": "4379",
                                "CarrierCode": "6E",
                                "Origin": "DEL",
                                "Destination": "BLR",
                                "FlightNum": "6929",
                                "DepartureDateTime": "2018-09-26T07:55:00",
                                "ArrivalDateTime": "2018-09-26T10:35:00",
                                "Duration": "160",
                                "OrgTerminal": "1",
                                "DesTerminal": "",
                                "AirlineCategory": "LCC",
                                "AirCraftType": "",
                                "Via": "",
                                "ValidatingCarrier": "6E",
                                "ClassCode": "R",
                                "ClassCodeDesc": "REFUNDABLE",
                                "FareBasisCode": "R0IP",
                                "BreakPoint": "",
                                "CurrencyCode": "INR",
                                "OriginAirportName": "Indira Gandhi International Airport",
                                "OriginAirportCity": "New Delhi",
                                "OriginAirportCountry": "India",
                                "DestinationAirportName": "Bengaluru International Airport",
                                "DestinationAirportCity": "Bangalore",
                                "DestinationAirportCountry": "India",
                                "AirlineName": "IndiGo",
                                "MajorClassCode": "Economy",
                                "AirEquipType": null,
                                "MarriageGroup": null,
                                "Baggage": {
                                    "Weight": "15",
                                    "Unit": "kg",
                                    "Pieces": null
                                },
                                "MealCode": {
                                    "MealCode": null,
                                    "MealCodeDescription": null
                                },
                                "IsStopAirport": false,
                                "JourneyType": "Onward"
                            }
                        ],
                        "FareDescription": {
                            "IsNonRefundable": false,
                            "PaxFareDetails": [
                                {
                                    "PaxType": null,
                                    "BasicAmount": "600",
                                    "TotalTaxAmount": "1469",
                                    "FuelSurcharge": "500",
                                    "Commission": null,
                                    "OtherInfo": {
                                        "TransactionFee": null,
                                        "ServiceTax": null,
                                        "GrossAmount": 2069,
                                        "Item": []
                                    }
                                },
                                {
                                    "PaxType": "ADT",
                                    "BasicAmount": "600.00",
                                    "TotalTaxAmount": "1469.00",
                                    "FuelSurcharge": "500.00",
                                    "Commission": "8.00",
                                    "OtherInfo": {
                                        "TransactionFee": "0.00",
                                        "ServiceTax": "0.00",
                                        "GrossAmount": 2069,
                                        "Item": [
                                            {
                                                "TaxCode": "PHF",
                                                "Amount": "50.00"
                                            },
                                            {
                                                "TaxCode": "RCF",
                                                "Amount": "100.00"
                                            },
                                            {
                                                "TaxCode": "YQ",
                                                "Amount": "500.00"
                                            },
                                            {
                                                "TaxCode": "TTF",
                                                "Amount": "39.00"
                                            },
                                            {
                                                "TaxCode": "PSF",
                                                "Amount": "150.00"
                                            },
                                            {
                                                "TaxCode": "UDF",
                                                "Amount": "564.00"
                                            },
                                            {
                                                "TaxCode": "CGST07",
                                                "Amount": "33.00"
                                            },
                                            {
                                                "TaxCode": "SGST07",
                                                "Amount": "33.00"
                                            }
                                        ]
                                    }
                                }
                            ],
                            "FareBasis": []
                        },
                        "Miles": null,
                        "ElapsedTime": [
                            "160"
                        ],
                        "ValidatingCarrier": "6E"
                    },
                    {
                        "ApiProvider": "RB",
                        "Connection": {
                            "Onward": {
                                "IsConnection": false,
                                "NoOfStops": 0,
                                "ConnectionAirport": []
                            },
                            "Return": {
                                "IsConnection": false,
                                "NoOfStops": 0,
                                "ConnectionAirport": []
                            }
                        },
                        "FlightDetails": [
                            {
                                "FlightID": "4380",
                                "CarrierCode": "6E",
                                "Origin": "DEL",
                                "Destination": "BLR",
                                "FlightNum": "297",
                                "DepartureDateTime": "2018-09-26T09:35:00",
                                "ArrivalDateTime": "2018-09-26T12:20:00",
                                "Duration": "165",
                                "OrgTerminal": "1",
                                "DesTerminal": "",
                                "AirlineCategory": "LCC",
                                "AirCraftType": "",
                                "Via": "",
                                "ValidatingCarrier": "6E",
                                "ClassCode": "R",
                                "ClassCodeDesc": "REFUNDABLE",
                                "FareBasisCode": "R0IP",
                                "BreakPoint": "",
                                "CurrencyCode": "INR",
                                "OriginAirportName": "Indira Gandhi International Airport",
                                "OriginAirportCity": "New Delhi",
                                "OriginAirportCountry": "India",
                                "DestinationAirportName": "Bengaluru International Airport",
                                "DestinationAirportCity": "Bangalore",
                                "DestinationAirportCountry": "India",
                                "AirlineName": "IndiGo",
                                "MajorClassCode": "Economy",
                                "AirEquipType": null,
                                "MarriageGroup": null,
                                "Baggage": {
                                    "Weight": "15",
                                    "Unit": "kg",
                                    "Pieces": null
                                },
                                "MealCode": {
                                    "MealCode": null,
                                    "MealCodeDescription": null
                                },
                                "IsStopAirport": false,
                                "JourneyType": "Onward"
                            }
                        ],
                        "FareDescription": {
                            "IsNonRefundable": false,
                            "PaxFareDetails": [
                                {
                                    "PaxType": null,
                                    "BasicAmount": "600",
                                    "TotalTaxAmount": "1469",
                                    "FuelSurcharge": "500",
                                    "Commission": null,
                                    "OtherInfo": {
                                        "TransactionFee": null,
                                        "ServiceTax": null,
                                        "GrossAmount": 2069,
                                        "Item": []
                                    }
                                },
                                {
                                    "PaxType": "ADT",
                                    "BasicAmount": "600.00",
                                    "TotalTaxAmount": "1469.00",
                                    "FuelSurcharge": "500.00",
                                    "Commission": "8.00",
                                    "OtherInfo": {
                                        "TransactionFee": "0.00",
                                        "ServiceTax": "0.00",
                                        "GrossAmount": 2069,
                                        "Item": [
                                            {
                                                "TaxCode": "PHF",
                                                "Amount": "50.00"
                                            },
                                            {
                                                "TaxCode": "RCF",
                                                "Amount": "100.00"
                                            },
                                            {
                                                "TaxCode": "YQ",
                                                "Amount": "500.00"
                                            },
                                            {
                                                "TaxCode": "TTF",
                                                "Amount": "39.00"
                                            },
                                            {
                                                "TaxCode": "PSF",
                                                "Amount": "150.00"
                                            },
                                            {
                                                "TaxCode": "UDF",
                                                "Amount": "564.00"
                                            },
                                            {
                                                "TaxCode": "CGST07",
                                                "Amount": "33.00"
                                            },
                                            {
                                                "TaxCode": "SGST07",
                                                "Amount": "33.00"
                                            }
                                        ]
                                    }
                                }
                            ],
                            "FareBasis": []
                        },
                        "Miles": null,
                        "ElapsedTime": [
                            "165"
                        ],
                        "ValidatingCarrier": "6E"
                    },
                    {
                        "ApiProvider": "RB",
                        "Connection": {
                            "Onward": {
                                "IsConnection": false,
                                "NoOfStops": 0,
                                "ConnectionAirport": []
                            },
                            "Return": {
                                "IsConnection": false,
                                "NoOfStops": 0,
                                "ConnectionAirport": []
                            }
                        },
                        "FlightDetails": [
                            {
                                "FlightID": "4381",
                                "CarrierCode": "6E",
                                "Origin": "DEL",
                                "Destination": "BLR",
                                "FlightNum": "2695",
                                "DepartureDateTime": "2018-09-26T11:00:00",
                                "ArrivalDateTime": "2018-09-26T13:45:00",
                                "Duration": "165",
                                "OrgTerminal": "2",
                                "DesTerminal": "",
                                "AirlineCategory": "LCC",
                                "AirCraftType": "",
                                "Via": "",
                                "ValidatingCarrier": "6E",
                                "ClassCode": "R",
                                "ClassCodeDesc": "REFUNDABLE",
                                "FareBasisCode": "R0IP",
                                "BreakPoint": "",
                                "CurrencyCode": "INR",
                                "OriginAirportName": "Indira Gandhi International Airport",
                                "OriginAirportCity": "New Delhi",
                                "OriginAirportCountry": "India",
                                "DestinationAirportName": "Bengaluru International Airport",
                                "DestinationAirportCity": "Bangalore",
                                "DestinationAirportCountry": "India",
                                "AirlineName": "IndiGo",
                                "MajorClassCode": "Economy",
                                "AirEquipType": null,
                                "MarriageGroup": null,
                                "Baggage": {
                                    "Weight": "15",
                                    "Unit": "kg",
                                    "Pieces": null
                                },
                                "MealCode": {
                                    "MealCode": null,
                                    "MealCodeDescription": null
                                },
                                "IsStopAirport": false,
                                "JourneyType": "Onward"
                            }
                        ],
                        "FareDescription": {
                            "IsNonRefundable": false,
                            "PaxFareDetails": [
                                {
                                    "PaxType": null,
                                    "BasicAmount": "600",
                                    "TotalTaxAmount": "1469",
                                    "FuelSurcharge": "500",
                                    "Commission": null,
                                    "OtherInfo": {
                                        "TransactionFee": null,
                                        "ServiceTax": null,
                                        "GrossAmount": 2069,
                                        "Item": []
                                    }
                                },
                                {
                                    "PaxType": "ADT",
                                    "BasicAmount": "600.00",
                                    "TotalTaxAmount": "1469.00",
                                    "FuelSurcharge": "500.00",
                                    "Commission": "8.00",
                                    "OtherInfo": {
                                        "TransactionFee": "0.00",
                                        "ServiceTax": "0.00",
                                        "GrossAmount": 2069,
                                        "Item": [
                                            {
                                                "TaxCode": "PHF",
                                                "Amount": "50.00"
                                            },
                                            {
                                                "TaxCode": "RCF",
                                                "Amount": "100.00"
                                            },
                                            {
                                                "TaxCode": "YQ",
                                                "Amount": "500.00"
                                            },
                                            {
                                                "TaxCode": "TTF",
                                                "Amount": "39.00"
                                            },
                                            {
                                                "TaxCode": "PSF",
                                                "Amount": "150.00"
                                            },
                                            {
                                                "TaxCode": "UDF",
                                                "Amount": "564.00"
                                            },
                                            {
                                                "TaxCode": "CGST07",
                                                "Amount": "33.00"
                                            },
                                            {
                                                "TaxCode": "SGST07",
                                                "Amount": "33.00"
                                            }
                                        ]
                                    }
                                }
                            ],
                            "FareBasis": []
                        },
                        "Miles": null,
                        "ElapsedTime": [
                            "165"
                        ],
                        "ValidatingCarrier": "6E"
                    },
                    {
                        "ApiProvider": "RB",
                        "Connection": {
                            "Onward": {
                                "IsConnection": false,
                                "NoOfStops": 0,
                                "ConnectionAirport": []
                            },
                            "Return": {
                                "IsConnection": false,
                                "NoOfStops": 0,
                                "ConnectionAirport": []
                            }
                        },
                        "FlightDetails": [
                            {
                                "FlightID": "4382",
                                "CarrierCode": "6E",
                                "Origin": "DEL",
                                "Destination": "BLR",
                                "FlightNum": "6695",
                                "DepartureDateTime": "2018-09-26T11:00:00",
                                "ArrivalDateTime": "2018-09-26T13:45:00",
                                "Duration": "165",
                                "OrgTerminal": "1",
                                "DesTerminal": "",
                                "AirlineCategory": "LCC",
                                "AirCraftType": "",
                                "Via": "",
                                "ValidatingCarrier": "6E",
                                "ClassCode": "R",
                                "ClassCodeDesc": "REFUNDABLE",
                                "FareBasisCode": "R0IP",
                                "BreakPoint": "",
                                "CurrencyCode": "INR",
                                "OriginAirportName": "Indira Gandhi International Airport",
                                "OriginAirportCity": "New Delhi",
                                "OriginAirportCountry": "India",
                                "DestinationAirportName": "Bengaluru International Airport",
                                "DestinationAirportCity": "Bangalore",
                                "DestinationAirportCountry": "India",
                                "AirlineName": "IndiGo",
                                "MajorClassCode": "Economy",
                                "AirEquipType": null,
                                "MarriageGroup": null,
                                "Baggage": {
                                    "Weight": "15",
                                    "Unit": "kg",
                                    "Pieces": null
                                },
                                "MealCode": {
                                    "MealCode": null,
                                    "MealCodeDescription": null
                                },
                                "IsStopAirport": false,
                                "JourneyType": "Onward"
                            }
                        ],
                        "FareDescription": {
                            "IsNonRefundable": false,
                            "PaxFareDetails": [
                                {
                                    "PaxType": null,
                                    "BasicAmount": "600",
                                    "TotalTaxAmount": "1469",
                                    "FuelSurcharge": "500",
                                    "Commission": null,
                                    "OtherInfo": {
                                        "TransactionFee": null,
                                        "ServiceTax": null,
                                        "GrossAmount": 2069,
                                        "Item": []
                                    }
                                },
                                {
                                    "PaxType": "ADT",
                                    "BasicAmount": "600.00",
                                    "TotalTaxAmount": "1469.00",
                                    "FuelSurcharge": "500.00",
                                    "Commission": "8.00",
                                    "OtherInfo": {
                                        "TransactionFee": "0.00",
                                        "ServiceTax": "0.00",
                                        "GrossAmount": 2069,
                                        "Item": [
                                            {
                                                "TaxCode": "PHF",
                                                "Amount": "50.00"
                                            },
                                            {
                                                "TaxCode": "RCF",
                                                "Amount": "100.00"
                                            },
                                            {
                                                "TaxCode": "YQ",
                                                "Amount": "500.00"
                                            },
                                            {
                                                "TaxCode": "TTF",
                                                "Amount": "39.00"
                                            },
                                            {
                                                "TaxCode": "PSF",
                                                "Amount": "150.00"
                                            },
                                            {
                                                "TaxCode": "UDF",
                                                "Amount": "564.00"
                                            },
                                            {
                                                "TaxCode": "CGST07",
                                                "Amount": "33.00"
                                            },
                                            {
                                                "TaxCode": "SGST07",
                                                "Amount": "33.00"
                                            }
                                        ]
                                    }
                                }
                            ],
                            "FareBasis": []
                        },
                        "Miles": null,
                        "ElapsedTime": [
                            "165"
                        ],
                        "ValidatingCarrier": "6E"
                    },
                    {
                        "ApiProvider": "RB",
                        "Connection": {
                            "Onward": {
                                "IsConnection": false,
                                "NoOfStops": 0,
                                "ConnectionAirport": []
                            },
                            "Return": {
                                "IsConnection": false,
                                "NoOfStops": 0,
                                "ConnectionAirport": []
                            }
                        },
                        "FlightDetails": [
                            {
                                "FlightID": "4383",
                                "CarrierCode": "6E",
                                "Origin": "DEL",
                                "Destination": "BLR",
                                "FlightNum": "2423",
                                "DepartureDateTime": "2018-09-26T13:00:00",
                                "ArrivalDateTime": "2018-09-26T15:40:00",
                                "Duration": "160",
                                "OrgTerminal": "2",
                                "DesTerminal": "",
                                "AirlineCategory": "LCC",
                                "AirCraftType": "",
                                "Via": "",
                                "ValidatingCarrier": "6E",
                                "ClassCode": "R",
                                "ClassCodeDesc": "REFUNDABLE",
                                "FareBasisCode": "R0IP",
                                "BreakPoint": "",
                                "CurrencyCode": "INR",
                                "OriginAirportName": "Indira Gandhi International Airport",
                                "OriginAirportCity": "New Delhi",
                                "OriginAirportCountry": "India",
                                "DestinationAirportName": "Bengaluru International Airport",
                                "DestinationAirportCity": "Bangalore",
                                "DestinationAirportCountry": "India",
                                "AirlineName": "IndiGo",
                                "MajorClassCode": "Economy",
                                "AirEquipType": null,
                                "MarriageGroup": null,
                                "Baggage": {
                                    "Weight": "15",
                                    "Unit": "kg",
                                    "Pieces": null
                                },
                                "MealCode": {
                                    "MealCode": null,
                                    "MealCodeDescription": null
                                },
                                "IsStopAirport": false,
                                "JourneyType": "Onward"
                            }
                        ],
                        "FareDescription": {
                            "IsNonRefundable": false,
                            "PaxFareDetails": [
                                {
                                    "PaxType": null,
                                    "BasicAmount": "600",
                                    "TotalTaxAmount": "1469",
                                    "FuelSurcharge": "500",
                                    "Commission": null,
                                    "OtherInfo": {
                                        "TransactionFee": null,
                                        "ServiceTax": null,
                                        "GrossAmount": 2069,
                                        "Item": []
                                    }
                                },
                                {
                                    "PaxType": "ADT",
                                    "BasicAmount": "600.00",
                                    "TotalTaxAmount": "1469.00",
                                    "FuelSurcharge": "500.00",
                                    "Commission": "8.00",
                                    "OtherInfo": {
                                        "TransactionFee": "0.00",
                                        "ServiceTax": "0.00",
                                        "GrossAmount": 2069,
                                        "Item": [
                                            {
                                                "TaxCode": "PHF",
                                                "Amount": "50.00"
                                            },
                                            {
                                                "TaxCode": "RCF",
                                                "Amount": "100.00"
                                            },
                                            {
                                                "TaxCode": "YQ",
                                                "Amount": "500.00"
                                            },
                                            {
                                                "TaxCode": "TTF",
                                                "Amount": "39.00"
                                            },
                                            {
                                                "TaxCode": "PSF",
                                                "Amount": "150.00"
                                            },
                                            {
                                                "TaxCode": "UDF",
                                                "Amount": "564.00"
                                            },
                                            {
                                                "TaxCode": "CGST07",
                                                "Amount": "33.00"
                                            },
                                            {
                                                "TaxCode": "SGST07",
                                                "Amount": "33.00"
                                            }
                                        ]
                                    }
                                }
                            ],
                            "FareBasis": []
                        },
                        "Miles": null,
                        "ElapsedTime": [
                            "160"
                        ],
                        "ValidatingCarrier": "6E"
                    },
                    {
                        "ApiProvider": "RB",
                        "Connection": {
                            "Onward": {
                                "IsConnection": false,
                                "NoOfStops": 0,
                                "ConnectionAirport": []
                            },
                            "Return": {
                                "IsConnection": false,
                                "NoOfStops": 0,
                                "ConnectionAirport": []
                            }
                        },
                        "FlightDetails": [
                            {
                                "FlightID": "4384",
                                "CarrierCode": "6E",
                                "Origin": "DEL",
                                "Destination": "BLR",
                                "FlightNum": "423",
                                "DepartureDateTime": "2018-09-26T13:00:00",
                                "ArrivalDateTime": "2018-09-26T15:45:00",
                                "Duration": "165",
                                "OrgTerminal": "1",
                                "DesTerminal": "",
                                "AirlineCategory": "LCC",
                                "AirCraftType": "",
                                "Via": "",
                                "ValidatingCarrier": "6E",
                                "ClassCode": "R",
                                "ClassCodeDesc": "REFUNDABLE",
                                "FareBasisCode": "R0IP",
                                "BreakPoint": "",
                                "CurrencyCode": "INR",
                                "OriginAirportName": "Indira Gandhi International Airport",
                                "OriginAirportCity": "New Delhi",
                                "OriginAirportCountry": "India",
                                "DestinationAirportName": "Bengaluru International Airport",
                                "DestinationAirportCity": "Bangalore",
                                "DestinationAirportCountry": "India",
                                "AirlineName": "IndiGo",
                                "MajorClassCode": "Economy",
                                "AirEquipType": null,
                                "MarriageGroup": null,
                                "Baggage": {
                                    "Weight": "15",
                                    "Unit": "kg",
                                    "Pieces": null
                                },
                                "MealCode": {
                                    "MealCode": null,
                                    "MealCodeDescription": null
                                },
                                "IsStopAirport": false,
                                "JourneyType": "Onward"
                            }
                        ],
                        "FareDescription": {
                            "IsNonRefundable": false,
                            "PaxFareDetails": [
                                {
                                    "PaxType": null,
                                    "BasicAmount": "600",
                                    "TotalTaxAmount": "1469",
                                    "FuelSurcharge": "500",
                                    "Commission": null,
                                    "OtherInfo": {
                                        "TransactionFee": null,
                                        "ServiceTax": null,
                                        "GrossAmount": 2069,
                                        "Item": []
                                    }
                                },
                                {
                                    "PaxType": "ADT",
                                    "BasicAmount": "600.00",
                                    "TotalTaxAmount": "1469.00",
                                    "FuelSurcharge": "500.00",
                                    "Commission": "8.00",
                                    "OtherInfo": {
                                        "TransactionFee": "0.00",
                                        "ServiceTax": "0.00",
                                        "GrossAmount": 2069,
                                        "Item": [
                                            {
                                                "TaxCode": "PHF",
                                                "Amount": "50.00"
                                            },
                                            {
                                                "TaxCode": "RCF",
                                                "Amount": "100.00"
                                            },
                                            {
                                                "TaxCode": "YQ",
                                                "Amount": "500.00"
                                            },
                                            {
                                                "TaxCode": "TTF",
                                                "Amount": "39.00"
                                            },
                                            {
                                                "TaxCode": "PSF",
                                                "Amount": "150.00"
                                            },
                                            {
                                                "TaxCode": "UDF",
                                                "Amount": "564.00"
                                            },
                                            {
                                                "TaxCode": "CGST07",
                                                "Amount": "33.00"
                                            },
                                            {
                                                "TaxCode": "SGST07",
                                                "Amount": "33.00"
                                            }
                                        ]
                                    }
                                }
                            ],
                            "FareBasis": []
                        },
                        "Miles": null,
                        "ElapsedTime": [
                            "165"
                        ],
                        "ValidatingCarrier": "6E"
                    },
                    {
                        "ApiProvider": "RB",
                        "Connection": {
                            "Onward": {
                                "IsConnection": false,
                                "NoOfStops": 0,
                                "ConnectionAirport": []
                            },
                            "Return": {
                                "IsConnection": false,
                                "NoOfStops": 0,
                                "ConnectionAirport": []
                            }
                        },
                        "FlightDetails": [
                            {
                                "FlightID": "4385",
                                "CarrierCode": "6E",
                                "Origin": "DEL",
                                "Destination": "BLR",
                                "FlightNum": "839",
                                "DepartureDateTime": "2018-09-26T15:10:00",
                                "ArrivalDateTime": "2018-09-26T18:00:00",
                                "Duration": "170",
                                "OrgTerminal": "1",
                                "DesTerminal": "",
                                "AirlineCategory": "LCC",
                                "AirCraftType": "",
                                "Via": "",
                                "ValidatingCarrier": "6E",
                                "ClassCode": "R",
                                "ClassCodeDesc": "REFUNDABLE",
                                "FareBasisCode": "R0IP",
                                "BreakPoint": "",
                                "CurrencyCode": "INR",
                                "OriginAirportName": "Indira Gandhi International Airport",
                                "OriginAirportCity": "New Delhi",
                                "OriginAirportCountry": "India",
                                "DestinationAirportName": "Bengaluru International Airport",
                                "DestinationAirportCity": "Bangalore",
                                "DestinationAirportCountry": "India",
                                "AirlineName": "IndiGo",
                                "MajorClassCode": "Economy",
                                "AirEquipType": null,
                                "MarriageGroup": null,
                                "Baggage": {
                                    "Weight": "15",
                                    "Unit": "kg",
                                    "Pieces": null
                                },
                                "MealCode": {
                                    "MealCode": null,
                                    "MealCodeDescription": null
                                },
                                "IsStopAirport": false,
                                "JourneyType": "Onward"
                            }
                        ],
                        "FareDescription": {
                            "IsNonRefundable": false,
                            "PaxFareDetails": [
                                {
                                    "PaxType": null,
                                    "BasicAmount": "600",
                                    "TotalTaxAmount": "1469",
                                    "FuelSurcharge": "500",
                                    "Commission": null,
                                    "OtherInfo": {
                                        "TransactionFee": null,
                                        "ServiceTax": null,
                                        "GrossAmount": 2069,
                                        "Item": []
                                    }
                                },
                                {
                                    "PaxType": "ADT",
                                    "BasicAmount": "600.00",
                                    "TotalTaxAmount": "1469.00",
                                    "FuelSurcharge": "500.00",
                                    "Commission": "8.00",
                                    "OtherInfo": {
                                        "TransactionFee": "0.00",
                                        "ServiceTax": "0.00",
                                        "GrossAmount": 2069,
                                        "Item": [
                                            {
                                                "TaxCode": "PHF",
                                                "Amount": "50.00"
                                            },
                                            {
                                                "TaxCode": "RCF",
                                                "Amount": "100.00"
                                            },
                                            {
                                                "TaxCode": "YQ",
                                                "Amount": "500.00"
                                            },
                                            {
                                                "TaxCode": "TTF",
                                                "Amount": "39.00"
                                            },
                                            {
                                                "TaxCode": "PSF",
                                                "Amount": "150.00"
                                            },
                                            {
                                                "TaxCode": "UDF",
                                                "Amount": "564.00"
                                            },
                                            {
                                                "TaxCode": "CGST07",
                                                "Amount": "33.00"
                                            },
                                            {
                                                "TaxCode": "SGST07",
                                                "Amount": "33.00"
                                            }
                                        ]
                                    }
                                }
                            ],
                            "FareBasis": []
                        },
                        "Miles": null,
                        "ElapsedTime": [
                            "170"
                        ],
                        "ValidatingCarrier": "6E"
                    },
                    {
                        "ApiProvider": "RB",
                        "Connection": {
                            "Onward": {
                                "IsConnection": false,
                                "NoOfStops": 0,
                                "ConnectionAirport": []
                            },
                            "Return": {
                                "IsConnection": false,
                                "NoOfStops": 0,
                                "ConnectionAirport": []
                            }
                        },
                        "FlightDetails": [
                            {
                                "FlightID": "4386",
                                "CarrierCode": "6E",
                                "Origin": "DEL",
                                "Destination": "BLR",
                                "FlightNum": "126",
                                "DepartureDateTime": "2018-09-26T16:00:00",
                                "ArrivalDateTime": "2018-09-26T18:45:00",
                                "Duration": "165",
                                "OrgTerminal": "1",
                                "DesTerminal": "",
                                "AirlineCategory": "LCC",
                                "AirCraftType": "",
                                "Via": "",
                                "ValidatingCarrier": "6E",
                                "ClassCode": "R",
                                "ClassCodeDesc": "REFUNDABLE",
                                "FareBasisCode": "R0IP",
                                "BreakPoint": "",
                                "CurrencyCode": "INR",
                                "OriginAirportName": "Indira Gandhi International Airport",
                                "OriginAirportCity": "New Delhi",
                                "OriginAirportCountry": "India",
                                "DestinationAirportName": "Bengaluru International Airport",
                                "DestinationAirportCity": "Bangalore",
                                "DestinationAirportCountry": "India",
                                "AirlineName": "IndiGo",
                                "MajorClassCode": "Economy",
                                "AirEquipType": null,
                                "MarriageGroup": null,
                                "Baggage": {
                                    "Weight": "15",
                                    "Unit": "kg",
                                    "Pieces": null
                                },
                                "MealCode": {
                                    "MealCode": null,
                                    "MealCodeDescription": null
                                },
                                "IsStopAirport": false,
                                "JourneyType": "Onward"
                            }
                        ],
                        "FareDescription": {
                            "IsNonRefundable": false,
                            "PaxFareDetails": [
                                {
                                    "PaxType": null,
                                    "BasicAmount": "600",
                                    "TotalTaxAmount": "1469",
                                    "FuelSurcharge": "500",
                                    "Commission": null,
                                    "OtherInfo": {
                                        "TransactionFee": null,
                                        "ServiceTax": null,
                                        "GrossAmount": 2069,
                                        "Item": []
                                    }
                                },
                                {
                                    "PaxType": "ADT",
                                    "BasicAmount": "600.00",
                                    "TotalTaxAmount": "1469.00",
                                    "FuelSurcharge": "500.00",
                                    "Commission": "8.00",
                                    "OtherInfo": {
                                        "TransactionFee": "0.00",
                                        "ServiceTax": "0.00",
                                        "GrossAmount": 2069,
                                        "Item": [
                                            {
                                                "TaxCode": "PHF",
                                                "Amount": "50.00"
                                            },
                                            {
                                                "TaxCode": "RCF",
                                                "Amount": "100.00"
                                            },
                                            {
                                                "TaxCode": "YQ",
                                                "Amount": "500.00"
                                            },
                                            {
                                                "TaxCode": "TTF",
                                                "Amount": "39.00"
                                            },
                                            {
                                                "TaxCode": "PSF",
                                                "Amount": "150.00"
                                            },
                                            {
                                                "TaxCode": "UDF",
                                                "Amount": "564.00"
                                            },
                                            {
                                                "TaxCode": "CGST07",
                                                "Amount": "33.00"
                                            },
                                            {
                                                "TaxCode": "SGST07",
                                                "Amount": "33.00"
                                            }
                                        ]
                                    }
                                }
                            ],
                            "FareBasis": []
                        },
                        "Miles": null,
                        "ElapsedTime": [
                            "165"
                        ],
                        "ValidatingCarrier": "6E"
                    },
                    {
                        "ApiProvider": "RB",
                        "Connection": {
                            "Onward": {
                                "IsConnection": false,
                                "NoOfStops": 0,
                                "ConnectionAirport": []
                            },
                            "Return": {
                                "IsConnection": false,
                                "NoOfStops": 0,
                                "ConnectionAirport": []
                            }
                        },
                        "FlightDetails": [
                            {
                                "FlightID": "4387",
                                "CarrierCode": "6E",
                                "Origin": "DEL",
                                "Destination": "BLR",
                                "FlightNum": "306",
                                "DepartureDateTime": "2018-09-26T17:05:00",
                                "ArrivalDateTime": "2018-09-26T19:50:00",
                                "Duration": "165",
                                "OrgTerminal": "1",
                                "DesTerminal": "",
                                "AirlineCategory": "LCC",
                                "AirCraftType": "",
                                "Via": "",
                                "ValidatingCarrier": "6E",
                                "ClassCode": "R",
                                "ClassCodeDesc": "REFUNDABLE",
                                "FareBasisCode": "R0IP",
                                "BreakPoint": "",
                                "CurrencyCode": "INR",
                                "OriginAirportName": "Indira Gandhi International Airport",
                                "OriginAirportCity": "New Delhi",
                                "OriginAirportCountry": "India",
                                "DestinationAirportName": "Bengaluru International Airport",
                                "DestinationAirportCity": "Bangalore",
                                "DestinationAirportCountry": "India",
                                "AirlineName": "IndiGo",
                                "MajorClassCode": "Economy",
                                "AirEquipType": null,
                                "MarriageGroup": null,
                                "Baggage": {
                                    "Weight": "15",
                                    "Unit": "kg",
                                    "Pieces": null
                                },
                                "MealCode": {
                                    "MealCode": null,
                                    "MealCodeDescription": null
                                },
                                "IsStopAirport": false,
                                "JourneyType": "Onward"
                            }
                        ],
                        "FareDescription": {
                            "IsNonRefundable": false,
                            "PaxFareDetails": [
                                {
                                    "PaxType": null,
                                    "BasicAmount": "600",
                                    "TotalTaxAmount": "1469",
                                    "FuelSurcharge": "500",
                                    "Commission": null,
                                    "OtherInfo": {
                                        "TransactionFee": null,
                                        "ServiceTax": null,
                                        "GrossAmount": 2069,
                                        "Item": []
                                    }
                                },
                                {
                                    "PaxType": "ADT",
                                    "BasicAmount": "600.00",
                                    "TotalTaxAmount": "1469.00",
                                    "FuelSurcharge": "500.00",
                                    "Commission": "8.00",
                                    "OtherInfo": {
                                        "TransactionFee": "0.00",
                                        "ServiceTax": "0.00",
                                        "GrossAmount": 2069,
                                        "Item": [
                                            {
                                                "TaxCode": "PHF",
                                                "Amount": "50.00"
                                            },
                                            {
                                                "TaxCode": "RCF",
                                                "Amount": "100.00"
                                            },
                                            {
                                                "TaxCode": "YQ",
                                                "Amount": "500.00"
                                            },
                                            {
                                                "TaxCode": "TTF",
                                                "Amount": "39.00"
                                            },
                                            {
                                                "TaxCode": "PSF",
                                                "Amount": "150.00"
                                            },
                                            {
                                                "TaxCode": "UDF",
                                                "Amount": "564.00"
                                            },
                                            {
                                                "TaxCode": "CGST07",
                                                "Amount": "33.00"
                                            },
                                            {
                                                "TaxCode": "SGST07",
                                                "Amount": "33.00"
                                            }
                                        ]
                                    }
                                }
                            ],
                            "FareBasis": []
                        },
                        "Miles": null,
                        "ElapsedTime": [
                            "165"
                        ],
                        "ValidatingCarrier": "6E"
                    },
                    {
                        "ApiProvider": "RB",
                        "Connection": {
                            "Onward": {
                                "IsConnection": false,
                                "NoOfStops": 0,
                                "ConnectionAirport": []
                            },
                            "Return": {
                                "IsConnection": false,
                                "NoOfStops": 0,
                                "ConnectionAirport": []
                            }
                        },
                        "FlightDetails": [
                            {
                                "FlightID": "4388",
                                "CarrierCode": "6E",
                                "Origin": "DEL",
                                "Destination": "BLR",
                                "FlightNum": "637",
                                "DepartureDateTime": "2018-09-26T18:50:00",
                                "ArrivalDateTime": "2018-09-26T21:35:00",
                                "Duration": "165",
                                "OrgTerminal": "1",
                                "DesTerminal": "",
                                "AirlineCategory": "LCC",
                                "AirCraftType": "",
                                "Via": "",
                                "ValidatingCarrier": "6E",
                                "ClassCode": "R",
                                "ClassCodeDesc": "REFUNDABLE",
                                "FareBasisCode": "R0IP",
                                "BreakPoint": "",
                                "CurrencyCode": "INR",
                                "OriginAirportName": "Indira Gandhi International Airport",
                                "OriginAirportCity": "New Delhi",
                                "OriginAirportCountry": "India",
                                "DestinationAirportName": "Bengaluru International Airport",
                                "DestinationAirportCity": "Bangalore",
                                "DestinationAirportCountry": "India",
                                "AirlineName": "IndiGo",
                                "MajorClassCode": "Economy",
                                "AirEquipType": null,
                                "MarriageGroup": null,
                                "Baggage": {
                                    "Weight": "15",
                                    "Unit": "kg",
                                    "Pieces": null
                                },
                                "MealCode": {
                                    "MealCode": null,
                                    "MealCodeDescription": null
                                },
                                "IsStopAirport": false,
                                "JourneyType": "Onward"
                            }
                        ],
                        "FareDescription": {
                            "IsNonRefundable": false,
                            "PaxFareDetails": [
                                {
                                    "PaxType": null,
                                    "BasicAmount": "600",
                                    "TotalTaxAmount": "1469",
                                    "FuelSurcharge": "500",
                                    "Commission": null,
                                    "OtherInfo": {
                                        "TransactionFee": null,
                                        "ServiceTax": null,
                                        "GrossAmount": 2069,
                                        "Item": []
                                    }
                                },
                                {
                                    "PaxType": "ADT",
                                    "BasicAmount": "600.00",
                                    "TotalTaxAmount": "1469.00",
                                    "FuelSurcharge": "500.00",
                                    "Commission": "8.00",
                                    "OtherInfo": {
                                        "TransactionFee": "0.00",
                                        "ServiceTax": "0.00",
                                        "GrossAmount": 2069,
                                        "Item": [
                                            {
                                                "TaxCode": "PHF",
                                                "Amount": "50.00"
                                            },
                                            {
                                                "TaxCode": "RCF",
                                                "Amount": "100.00"
                                            },
                                            {
                                                "TaxCode": "YQ",
                                                "Amount": "500.00"
                                            },
                                            {
                                                "TaxCode": "TTF",
                                                "Amount": "39.00"
                                            },
                                            {
                                                "TaxCode": "PSF",
                                                "Amount": "150.00"
                                            },
                                            {
                                                "TaxCode": "UDF",
                                                "Amount": "564.00"
                                            },
                                            {
                                                "TaxCode": "CGST07",
                                                "Amount": "33.00"
                                            },
                                            {
                                                "TaxCode": "SGST07",
                                                "Amount": "33.00"
                                            }
                                        ]
                                    }
                                }
                            ],
                            "FareBasis": []
                        },
                        "Miles": null,
                        "ElapsedTime": [
                            "165"
                        ],
                        "ValidatingCarrier": "6E"
                    },
                    {
                        "ApiProvider": "SB",
                        "Connection": {
                            "Onward": {
                                "IsConnection": false,
                                "NoOfStops": 0,
                                "ConnectionAirport": []
                            },
                            "Return": {
                                "IsConnection": false,
                                "NoOfStops": 0,
                                "ConnectionAirport": []
                            }
                        },
                        "FlightDetails": [
                            {
                                "FlightID": "815",
                                "CarrierCode": "UK",
                                "Origin": "DEL",
                                "Destination": "BLR",
                                "FlightNum": "815",
                                "DepartureDateTime": "2018-09-26T08:05:00",
                                "ArrivalDateTime": "2018-09-26T10:45:00",
                                "Duration": "160",
                                "OrgTerminal": "3",
                                "DesTerminal": null,
                                "AirlineCategory": null,
                                "AirCraftType": "",
                                "Via": "",
                                "ValidatingCarrier": "UK",
                                "ClassCode": "O",
                                "ClassCodeDesc": "",
                                "FareBasisCode": "ADVJR1",
                                "BreakPoint": "",
                                "CurrencyCode": "INR",
                                "OriginAirportName": "Indira Gandhi International Airport",
                                "OriginAirportCity": "New Delhi",
                                "OriginAirportCountry": "India",
                                "DestinationAirportName": "Bengaluru International Airport",
                                "DestinationAirportCity": "Bangalore",
                                "DestinationAirportCountry": "India",
                                "AirlineName": "Vistara",
                                "MajorClassCode": "Economy",
                                "AirEquipType": "320",
                                "MarriageGroup": "O",
                                "Baggage": {
                                    "Weight": "15",
                                    "Unit": "kg",
                                    "Pieces": "0"
                                },
                                "MealCode": {
                                    "MealCode": "M",
                                    "MealCodeDescription": "Meals"
                                },
                                "IsStopAirport": false,
                                "JourneyType": "Onward"
                            }
                        ],
                        "FareDescription": {
                            "IsNonRefundable": false,
                            "PaxFareDetails": [
                                {
                                    "PaxType": "AllPsg",
                                    "BasicAmount": "2600",
                                    "TotalTaxAmount": "492",
                                    "FuelSurcharge": "0",
                                    "Commission": "0",
                                    "OtherInfo": {
                                        "TransactionFee": "0",
                                        "ServiceTax": "0",
                                        "GrossAmount": 3092,
                                        "Item": []
                                    }
                                },
                                {
                                    "PaxType": "ADT",
                                    "BasicAmount": "2600",
                                    "TotalTaxAmount": "492",
                                    "FuelSurcharge": "0",
                                    "Commission": "0",
                                    "OtherInfo": {
                                        "TransactionFee": "0",
                                        "ServiceTax": "0",
                                        "GrossAmount": 3092,
                                        "Item": [
                                            {
                                                "TaxCode": "YRF",
                                                "Amount": "136"
                                            },
                                            {
                                                "TaxCode": "YRI",
                                                "Amount": "50"
                                            },
                                            {
                                                "TaxCode": "IN",
                                                "Amount": "12"
                                            },
                                            {
                                                "TaxCode": "K38",
                                                "Amount": "140"
                                            },
                                            {
                                                "TaxCode": "WO",
                                                "Amount": "154"
                                            }
                                        ]
                                    }
                                }
                            ],
                            "FareBasis": [
                                {
                                    "Code": "OL15PYL/YL",
                                    "DepartureTime": "2018-09-26T08:05:00",
                                    "OriginLocation": "DEL",
                                    "DestinationLocation": "BLR",
                                    "ValidatingCarrier": "UK",
                                    "PsgType": "ADT",
                                    "PsgQty": 1
                                }
                            ]
                        },
                        "Miles": null,
                        "ElapsedTime": [
                            "160"
                        ],
                        "ValidatingCarrier": "UK"
                    },
                    {
                        "ApiProvider": "SB",
                        "Connection": {
                            "Onward": {
                                "IsConnection": false,
                                "NoOfStops": 0,
                                "ConnectionAirport": []
                            },
                            "Return": {
                                "IsConnection": false,
                                "NoOfStops": 0,
                                "ConnectionAirport": []
                            }
                        },
                        "FlightDetails": [
                            {
                                "FlightID": "817",
                                "CarrierCode": "UK",
                                "Origin": "DEL",
                                "Destination": "BLR",
                                "FlightNum": "817",
                                "DepartureDateTime": "2018-09-26T16:10:00",
                                "ArrivalDateTime": "2018-09-26T18:50:00",
                                "Duration": "160",
                                "OrgTerminal": "3",
                                "DesTerminal": null,
                                "AirlineCategory": null,
                                "AirCraftType": "",
                                "Via": "",
                                "ValidatingCarrier": "UK",
                                "ClassCode": "O",
                                "ClassCodeDesc": "",
                                "FareBasisCode": "ADVJR1",
                                "BreakPoint": "",
                                "CurrencyCode": "INR",
                                "OriginAirportName": "Indira Gandhi International Airport",
                                "OriginAirportCity": "New Delhi",
                                "OriginAirportCountry": "India",
                                "DestinationAirportName": "Bengaluru International Airport",
                                "DestinationAirportCity": "Bangalore",
                                "DestinationAirportCountry": "India",
                                "AirlineName": "Vistara",
                                "MajorClassCode": "Economy",
                                "AirEquipType": "320",
                                "MarriageGroup": "O",
                                "Baggage": {
                                    "Weight": "15",
                                    "Unit": "kg",
                                    "Pieces": "0"
                                },
                                "MealCode": {
                                    "MealCode": "M",
                                    "MealCodeDescription": "Meals"
                                },
                                "IsStopAirport": false,
                                "JourneyType": "Onward"
                            }
                        ],
                        "FareDescription": {
                            "IsNonRefundable": false,
                            "PaxFareDetails": [
                                {
                                    "PaxType": "AllPsg",
                                    "BasicAmount": "2600",
                                    "TotalTaxAmount": "492",
                                    "FuelSurcharge": "0",
                                    "Commission": "0",
                                    "OtherInfo": {
                                        "TransactionFee": "0",
                                        "ServiceTax": "0",
                                        "GrossAmount": 3092,
                                        "Item": []
                                    }
                                },
                                {
                                    "PaxType": "ADT",
                                    "BasicAmount": "2600",
                                    "TotalTaxAmount": "492",
                                    "FuelSurcharge": "0",
                                    "Commission": "0",
                                    "OtherInfo": {
                                        "TransactionFee": "0",
                                        "ServiceTax": "0",
                                        "GrossAmount": 3092,
                                        "Item": [
                                            {
                                                "TaxCode": "YRF",
                                                "Amount": "136"
                                            },
                                            {
                                                "TaxCode": "YRI",
                                                "Amount": "50"
                                            },
                                            {
                                                "TaxCode": "IN",
                                                "Amount": "12"
                                            },
                                            {
                                                "TaxCode": "K38",
                                                "Amount": "140"
                                            },
                                            {
                                                "TaxCode": "WO",
                                                "Amount": "154"
                                            }
                                        ]
                                    }
                                }
                            ],
                            "FareBasis": [
                                {
                                    "Code": "OL15PYL/YL",
                                    "DepartureTime": "2018-09-26T16:10:00",
                                    "OriginLocation": "DEL",
                                    "DestinationLocation": "BLR",
                                    "ValidatingCarrier": "UK",
                                    "PsgType": "ADT",
                                    "PsgQty": 1
                                }
                            ]
                        },
                        "Miles": null,
                        "ElapsedTime": [
                            "160"
                        ],
                        "ValidatingCarrier": "UK"
                    },
                    {
                        "ApiProvider": "SB",
                        "Connection": {
                            "Onward": {
                                "IsConnection": false,
                                "NoOfStops": 0,
                                "ConnectionAirport": []
                            },
                            "Return": {
                                "IsConnection": false,
                                "NoOfStops": 0,
                                "ConnectionAirport": []
                            }
                        },
                        "FlightDetails": [
                            {
                                "FlightID": "849",
                                "CarrierCode": "UK",
                                "Origin": "DEL",
                                "Destination": "BLR",
                                "FlightNum": "849",
                                "DepartureDateTime": "2018-09-26T20:35:00",
                                "ArrivalDateTime": "2018-09-26T23:15:00",
                                "Duration": "160",
                                "OrgTerminal": "3",
                                "DesTerminal": null,
                                "AirlineCategory": null,
                                "AirCraftType": "",
                                "Via": "",
                                "ValidatingCarrier": "UK",
                                "ClassCode": "O",
                                "ClassCodeDesc": "",
                                "FareBasisCode": "ADVJR1",
                                "BreakPoint": "",
                                "CurrencyCode": "INR",
                                "OriginAirportName": "Indira Gandhi International Airport",
                                "OriginAirportCity": "New Delhi",
                                "OriginAirportCountry": "India",
                                "DestinationAirportName": "Bengaluru International Airport",
                                "DestinationAirportCity": "Bangalore",
                                "DestinationAirportCountry": "India",
                                "AirlineName": "Vistara",
                                "MajorClassCode": "Economy",
                                "AirEquipType": "320",
                                "MarriageGroup": "O",
                                "Baggage": {
                                    "Weight": "15",
                                    "Unit": "kg",
                                    "Pieces": "0"
                                },
                                "MealCode": {
                                    "MealCode": "M",
                                    "MealCodeDescription": "Meals"
                                },
                                "IsStopAirport": false,
                                "JourneyType": "Onward"
                            }
                        ],
                        "FareDescription": {
                            "IsNonRefundable": false,
                            "PaxFareDetails": [
                                {
                                    "PaxType": "AllPsg",
                                    "BasicAmount": "2600",
                                    "TotalTaxAmount": "492",
                                    "FuelSurcharge": "0",
                                    "Commission": "0",
                                    "OtherInfo": {
                                        "TransactionFee": "0",
                                        "ServiceTax": "0",
                                        "GrossAmount": 3092,
                                        "Item": []
                                    }
                                },
                                {
                                    "PaxType": "ADT",
                                    "BasicAmount": "2600",
                                    "TotalTaxAmount": "492",
                                    "FuelSurcharge": "0",
                                    "Commission": "0",
                                    "OtherInfo": {
                                        "TransactionFee": "0",
                                        "ServiceTax": "0",
                                        "GrossAmount": 3092,
                                        "Item": [
                                            {
                                                "TaxCode": "YRF",
                                                "Amount": "136"
                                            },
                                            {
                                                "TaxCode": "YRI",
                                                "Amount": "50"
                                            },
                                            {
                                                "TaxCode": "IN",
                                                "Amount": "12"
                                            },
                                            {
                                                "TaxCode": "K38",
                                                "Amount": "140"
                                            },
                                            {
                                                "TaxCode": "WO",
                                                "Amount": "154"
                                            }
                                        ]
                                    }
                                }
                            ],
                            "FareBasis": [
                                {
                                    "Code": "OL15PYL/YL",
                                    "DepartureTime": "2018-09-26T20:35:00",
                                    "OriginLocation": "DEL",
                                    "DestinationLocation": "BLR",
                                    "ValidatingCarrier": "UK",
                                    "PsgType": "ADT",
                                    "PsgQty": 1
                                }
                            ]
                        },
                        "Miles": null,
                        "ElapsedTime": [
                            "160"
                        ],
                        "ValidatingCarrier": "UK"
                    },
                    {
                        "ApiProvider": "SB",
                        "Connection": {
                            "Onward": {
                                "IsConnection": false,
                                "NoOfStops": 0,
                                "ConnectionAirport": []
                            },
                            "Return": {
                                "IsConnection": false,
                                "NoOfStops": 0,
                                "ConnectionAirport": []
                            }
                        },
                        "FlightDetails": [
                            {
                                "FlightID": "811",
                                "CarrierCode": "UK",
                                "Origin": "DEL",
                                "Destination": "BLR",
                                "FlightNum": "811",
                                "DepartureDateTime": "2018-09-26T06:30:00",
                                "ArrivalDateTime": "2018-09-26T09:15:00",
                                "Duration": "165",
                                "OrgTerminal": "3",
                                "DesTerminal": null,
                                "AirlineCategory": null,
                                "AirCraftType": "",
                                "Via": "",
                                "ValidatingCarrier": "UK",
                                "ClassCode": "O",
                                "ClassCodeDesc": "",
                                "FareBasisCode": "ADVJR1",
                                "BreakPoint": "",
                                "CurrencyCode": "INR",
                                "OriginAirportName": "Indira Gandhi International Airport",
                                "OriginAirportCity": "New Delhi",
                                "OriginAirportCountry": "India",
                                "DestinationAirportName": "Bengaluru International Airport",
                                "DestinationAirportCity": "Bangalore",
                                "DestinationAirportCountry": "India",
                                "AirlineName": "Vistara",
                                "MajorClassCode": "Economy",
                                "AirEquipType": "320",
                                "MarriageGroup": "O",
                                "Baggage": {
                                    "Weight": "15",
                                    "Unit": "kg",
                                    "Pieces": "0"
                                },
                                "MealCode": {
                                    "MealCode": "M",
                                    "MealCodeDescription": "Meals"
                                },
                                "IsStopAirport": false,
                                "JourneyType": "Onward"
                            }
                        ],
                        "FareDescription": {
                            "IsNonRefundable": false,
                            "PaxFareDetails": [
                                {
                                    "PaxType": "AllPsg",
                                    "BasicAmount": "2600",
                                    "TotalTaxAmount": "492",
                                    "FuelSurcharge": "0",
                                    "Commission": "0",
                                    "OtherInfo": {
                                        "TransactionFee": "0",
                                        "ServiceTax": "0",
                                        "GrossAmount": 3092,
                                        "Item": []
                                    }
                                },
                                {
                                    "PaxType": "ADT",
                                    "BasicAmount": "2600",
                                    "TotalTaxAmount": "492",
                                    "FuelSurcharge": "0",
                                    "Commission": "0",
                                    "OtherInfo": {
                                        "TransactionFee": "0",
                                        "ServiceTax": "0",
                                        "GrossAmount": 3092,
                                        "Item": [
                                            {
                                                "TaxCode": "YRF",
                                                "Amount": "136"
                                            },
                                            {
                                                "TaxCode": "YRI",
                                                "Amount": "50"
                                            },
                                            {
                                                "TaxCode": "IN",
                                                "Amount": "12"
                                            },
                                            {
                                                "TaxCode": "K38",
                                                "Amount": "140"
                                            },
                                            {
                                                "TaxCode": "WO",
                                                "Amount": "154"
                                            }
                                        ]
                                    }
                                }
                            ],
                            "FareBasis": [
                                {
                                    "Code": "OL15PYL/YL",
                                    "DepartureTime": "2018-09-26T06:30:00",
                                    "OriginLocation": "DEL",
                                    "DestinationLocation": "BLR",
                                    "ValidatingCarrier": "UK",
                                    "PsgType": "ADT",
                                    "PsgQty": 1
                                }
                            ]
                        },
                        "Miles": null,
                        "ElapsedTime": [
                            "165"
                        ],
                        "ValidatingCarrier": "UK"
                    },
                    {
                        "ApiProvider": "SB",
                        "Connection": {
                            "Onward": {
                                "IsConnection": false,
                                "NoOfStops": 0,
                                "ConnectionAirport": []
                            },
                            "Return": {
                                "IsConnection": false,
                                "NoOfStops": 0,
                                "ConnectionAirport": []
                            }
                        },
                        "FlightDetails": [
                            {
                                "FlightID": "813",
                                "CarrierCode": "UK",
                                "Origin": "DEL",
                                "Destination": "BLR",
                                "FlightNum": "813",
                                "DepartureDateTime": "2018-09-26T17:20:00",
                                "ArrivalDateTime": "2018-09-26T20:05:00",
                                "Duration": "165",
                                "OrgTerminal": "3",
                                "DesTerminal": null,
                                "AirlineCategory": null,
                                "AirCraftType": "",
                                "Via": "",
                                "ValidatingCarrier": "UK",
                                "ClassCode": "O",
                                "ClassCodeDesc": "",
                                "FareBasisCode": "ADVJR1",
                                "BreakPoint": "",
                                "CurrencyCode": "INR",
                                "OriginAirportName": "Indira Gandhi International Airport",
                                "OriginAirportCity": "New Delhi",
                                "OriginAirportCountry": "India",
                                "DestinationAirportName": "Bengaluru International Airport",
                                "DestinationAirportCity": "Bangalore",
                                "DestinationAirportCountry": "India",
                                "AirlineName": "Vistara",
                                "MajorClassCode": "Economy",
                                "AirEquipType": "320",
                                "MarriageGroup": "O",
                                "Baggage": {
                                    "Weight": "15",
                                    "Unit": "kg",
                                    "Pieces": "0"
                                },
                                "MealCode": {
                                    "MealCode": "M",
                                    "MealCodeDescription": "Meals"
                                },
                                "IsStopAirport": false,
                                "JourneyType": "Onward"
                            }
                        ],
                        "FareDescription": {
                            "IsNonRefundable": false,
                            "PaxFareDetails": [
                                {
                                    "PaxType": "AllPsg",
                                    "BasicAmount": "2600",
                                    "TotalTaxAmount": "492",
                                    "FuelSurcharge": "0",
                                    "Commission": "0",
                                    "OtherInfo": {
                                        "TransactionFee": "0",
                                        "ServiceTax": "0",
                                        "GrossAmount": 3092,
                                        "Item": []
                                    }
                                },
                                {
                                    "PaxType": "ADT",
                                    "BasicAmount": "2600",
                                    "TotalTaxAmount": "492",
                                    "FuelSurcharge": "0",
                                    "Commission": "0",
                                    "OtherInfo": {
                                        "TransactionFee": "0",
                                        "ServiceTax": "0",
                                        "GrossAmount": 3092,
                                        "Item": [
                                            {
                                                "TaxCode": "YRF",
                                                "Amount": "136"
                                            },
                                            {
                                                "TaxCode": "YRI",
                                                "Amount": "50"
                                            },
                                            {
                                                "TaxCode": "IN",
                                                "Amount": "12"
                                            },
                                            {
                                                "TaxCode": "K38",
                                                "Amount": "140"
                                            },
                                            {
                                                "TaxCode": "WO",
                                                "Amount": "154"
                                            }
                                        ]
                                    }
                                }
                            ],
                            "FareBasis": [
                                {
                                    "Code": "OL15PYL/YL",
                                    "DepartureTime": "2018-09-26T17:20:00",
                                    "OriginLocation": "DEL",
                                    "DestinationLocation": "BLR",
                                    "ValidatingCarrier": "UK",
                                    "PsgType": "ADT",
                                    "PsgQty": 1
                                }
                            ]
                        },
                        "Miles": null,
                        "ElapsedTime": [
                            "165"
                        ],
                        "ValidatingCarrier": "UK"
                    },
                    {
                        "ApiProvider": "SB",
                        "Connection": {
                            "Onward": {
                                "IsConnection": false,
                                "NoOfStops": 0,
                                "ConnectionAirport": []
                            },
                            "Return": {
                                "IsConnection": false,
                                "NoOfStops": 0,
                                "ConnectionAirport": []
                            }
                        },
                        "FlightDetails": [
                            {
                                "FlightID": "811",
                                "CarrierCode": "9W",
                                "Origin": "DEL",
                                "Destination": "BLR",
                                "FlightNum": "811",
                                "DepartureDateTime": "2018-09-26T18:30:00",
                                "ArrivalDateTime": "2018-09-26T21:10:00",
                                "Duration": "160",
                                "OrgTerminal": "3",
                                "DesTerminal": null,
                                "AirlineCategory": null,
                                "AirCraftType": "",
                                "Via": "",
                                "ValidatingCarrier": "9W",
                                "ClassCode": "O",
                                "ClassCodeDesc": "",
                                "FareBasisCode": "ADVJR1",
                                "BreakPoint": "",
                                "CurrencyCode": "INR",
                                "OriginAirportName": "Indira Gandhi International Airport",
                                "OriginAirportCity": "New Delhi",
                                "OriginAirportCountry": "India",
                                "DestinationAirportName": "Bengaluru International Airport",
                                "DestinationAirportCity": "Bangalore",
                                "DestinationAirportCountry": "India",
                                "AirlineName": "Jet Airways",
                                "MajorClassCode": "Economy",
                                "AirEquipType": "73H",
                                "MarriageGroup": "O",
                                "Baggage": {
                                    "Weight": null,
                                    "Unit": null,
                                    "Pieces": "1"
                                },
                                "MealCode": {
                                    "MealCode": "S",
                                    "MealCodeDescription": "Snack"
                                },
                                "IsStopAirport": false,
                                "JourneyType": "Onward"
                            }
                        ],
                        "FareDescription": {
                            "IsNonRefundable": false,
                            "PaxFareDetails": [
                                {
                                    "PaxType": "AllPsg",
                                    "BasicAmount": "1865",
                                    "TotalTaxAmount": "1651",
                                    "FuelSurcharge": "0",
                                    "Commission": "0",
                                    "OtherInfo": {
                                        "TransactionFee": "0",
                                        "ServiceTax": "0",
                                        "GrossAmount": 3516,
                                        "Item": []
                                    }
                                },
                                {
                                    "PaxType": "ADT",
                                    "BasicAmount": "1865",
                                    "TotalTaxAmount": "1651",
                                    "FuelSurcharge": "0",
                                    "Commission": "0",
                                    "OtherInfo": {
                                        "TransactionFee": "0",
                                        "ServiceTax": "0",
                                        "GrossAmount": 3516,
                                        "Item": [
                                            {
                                                "TaxCode": "YQF",
                                                "Amount": "1200"
                                            },
                                            {
                                                "TaxCode": "YRF",
                                                "Amount": "125"
                                            },
                                            {
                                                "TaxCode": "IN",
                                                "Amount": "12"
                                            },
                                            {
                                                "TaxCode": "K38",
                                                "Amount": "160"
                                            },
                                            {
                                                "TaxCode": "WO",
                                                "Amount": "154"
                                            }
                                        ]
                                    }
                                }
                            ],
                            "FareBasis": [
                                {
                                    "Code": "O2AT15",
                                    "DepartureTime": "2018-09-26T18:30:00",
                                    "OriginLocation": "DEL",
                                    "DestinationLocation": "BLR",
                                    "ValidatingCarrier": "9W",
                                    "PsgType": "ADT",
                                    "PsgQty": 1
                                }
                            ]
                        },
                        "Miles": null,
                        "ElapsedTime": [
                            "160"
                        ],
                        "ValidatingCarrier": "9W"
                    },
                    {
                        "ApiProvider": "SB",
                        "Connection": {
                            "Onward": {
                                "IsConnection": false,
                                "NoOfStops": 0,
                                "ConnectionAirport": []
                            },
                            "Return": {
                                "IsConnection": false,
                                "NoOfStops": 0,
                                "ConnectionAirport": []
                            }
                        },
                        "FlightDetails": [
                            {
                                "FlightID": "834",
                                "CarrierCode": "9W",
                                "Origin": "DEL",
                                "Destination": "BLR",
                                "FlightNum": "834",
                                "DepartureDateTime": "2018-09-26T20:45:00",
                                "ArrivalDateTime": "2018-09-26T23:25:00",
                                "Duration": "160",
                                "OrgTerminal": "3",
                                "DesTerminal": null,
                                "AirlineCategory": null,
                                "AirCraftType": "",
                                "Via": "",
                                "ValidatingCarrier": "9W",
                                "ClassCode": "O",
                                "ClassCodeDesc": "",
                                "FareBasisCode": "ADVJR1",
                                "BreakPoint": "",
                                "CurrencyCode": "INR",
                                "OriginAirportName": "Indira Gandhi International Airport",
                                "OriginAirportCity": "New Delhi",
                                "OriginAirportCountry": "India",
                                "DestinationAirportName": "Bengaluru International Airport",
                                "DestinationAirportCity": "Bangalore",
                                "DestinationAirportCountry": "India",
                                "AirlineName": "Jet Airways",
                                "MajorClassCode": "Economy",
                                "AirEquipType": "73H",
                                "MarriageGroup": "O",
                                "Baggage": {
                                    "Weight": null,
                                    "Unit": null,
                                    "Pieces": "1"
                                },
                                "MealCode": {
                                    "MealCode": "D",
                                    "MealCodeDescription": "Dinner"
                                },
                                "IsStopAirport": false,
                                "JourneyType": "Onward"
                            }
                        ],
                        "FareDescription": {
                            "IsNonRefundable": false,
                            "PaxFareDetails": [
                                {
                                    "PaxType": "AllPsg",
                                    "BasicAmount": "1865",
                                    "TotalTaxAmount": "1651",
                                    "FuelSurcharge": "0",
                                    "Commission": "0",
                                    "OtherInfo": {
                                        "TransactionFee": "0",
                                        "ServiceTax": "0",
                                        "GrossAmount": 3516,
                                        "Item": []
                                    }
                                },
                                {
                                    "PaxType": "ADT",
                                    "BasicAmount": "1865",
                                    "TotalTaxAmount": "1651",
                                    "FuelSurcharge": "0",
                                    "Commission": "0",
                                    "OtherInfo": {
                                        "TransactionFee": "0",
                                        "ServiceTax": "0",
                                        "GrossAmount": 3516,
                                        "Item": [
                                            {
                                                "TaxCode": "YQF",
                                                "Amount": "1200"
                                            },
                                            {
                                                "TaxCode": "YRF",
                                                "Amount": "125"
                                            },
                                            {
                                                "TaxCode": "IN",
                                                "Amount": "12"
                                            },
                                            {
                                                "TaxCode": "K38",
                                                "Amount": "160"
                                            },
                                            {
                                                "TaxCode": "WO",
                                                "Amount": "154"
                                            }
                                        ]
                                    }
                                }
                            ],
                            "FareBasis": [
                                {
                                    "Code": "O2AT15",
                                    "DepartureTime": "2018-09-26T20:45:00",
                                    "OriginLocation": "DEL",
                                    "DestinationLocation": "BLR",
                                    "ValidatingCarrier": "9W",
                                    "PsgType": "ADT",
                                    "PsgQty": 1
                                }
                            ]
                        },
                        "Miles": null,
                        "ElapsedTime": [
                            "160"
                        ],
                        "ValidatingCarrier": "9W"
                    },
                    {
                        "ApiProvider": "SB",
                        "Connection": {
                            "Onward": {
                                "IsConnection": false,
                                "NoOfStops": 0,
                                "ConnectionAirport": []
                            },
                            "Return": {
                                "IsConnection": false,
                                "NoOfStops": 0,
                                "ConnectionAirport": []
                            }
                        },
                        "FlightDetails": [
                            {
                                "FlightID": "809",
                                "CarrierCode": "9W",
                                "Origin": "DEL",
                                "Destination": "BLR",
                                "FlightNum": "809",
                                "DepartureDateTime": "2018-09-26T16:20:00",
                                "ArrivalDateTime": "2018-09-26T19:05:00",
                                "Duration": "165",
                                "OrgTerminal": "3",
                                "DesTerminal": null,
                                "AirlineCategory": null,
                                "AirCraftType": "",
                                "Via": "",
                                "ValidatingCarrier": "9W",
                                "ClassCode": "O",
                                "ClassCodeDesc": "",
                                "FareBasisCode": "ADVJR1",
                                "BreakPoint": "",
                                "CurrencyCode": "INR",
                                "OriginAirportName": "Indira Gandhi International Airport",
                                "OriginAirportCity": "New Delhi",
                                "OriginAirportCountry": "India",
                                "DestinationAirportName": "Bengaluru International Airport",
                                "DestinationAirportCity": "Bangalore",
                                "DestinationAirportCountry": "India",
                                "AirlineName": "Jet Airways",
                                "MajorClassCode": "Economy",
                                "AirEquipType": "739",
                                "MarriageGroup": "O",
                                "Baggage": {
                                    "Weight": null,
                                    "Unit": null,
                                    "Pieces": "1"
                                },
                                "MealCode": {
                                    "MealCode": "S",
                                    "MealCodeDescription": "Snack"
                                },
                                "IsStopAirport": false,
                                "JourneyType": "Onward"
                            }
                        ],
                        "FareDescription": {
                            "IsNonRefundable": false,
                            "PaxFareDetails": [
                                {
                                    "PaxType": "AllPsg",
                                    "BasicAmount": "1865",
                                    "TotalTaxAmount": "1651",
                                    "FuelSurcharge": "0",
                                    "Commission": "0",
                                    "OtherInfo": {
                                        "TransactionFee": "0",
                                        "ServiceTax": "0",
                                        "GrossAmount": 3516,
                                        "Item": []
                                    }
                                },
                                {
                                    "PaxType": "ADT",
                                    "BasicAmount": "1865",
                                    "TotalTaxAmount": "1651",
                                    "FuelSurcharge": "0",
                                    "Commission": "0",
                                    "OtherInfo": {
                                        "TransactionFee": "0",
                                        "ServiceTax": "0",
                                        "GrossAmount": 3516,
                                        "Item": [
                                            {
                                                "TaxCode": "YQF",
                                                "Amount": "1200"
                                            },
                                            {
                                                "TaxCode": "YRF",
                                                "Amount": "125"
                                            },
                                            {
                                                "TaxCode": "IN",
                                                "Amount": "12"
                                            },
                                            {
                                                "TaxCode": "K38",
                                                "Amount": "160"
                                            },
                                            {
                                                "TaxCode": "WO",
                                                "Amount": "154"
                                            }
                                        ]
                                    }
                                }
                            ],
                            "FareBasis": [
                                {
                                    "Code": "O2AT15",
                                    "DepartureTime": "2018-09-26T16:20:00",
                                    "OriginLocation": "DEL",
                                    "DestinationLocation": "BLR",
                                    "ValidatingCarrier": "9W",
                                    "PsgType": "ADT",
                                    "PsgQty": 1
                                }
                            ]
                        },
                        "Miles": null,
                        "ElapsedTime": [
                            "165"
                        ],
                        "ValidatingCarrier": "9W"
                    },
                    {
                        "ApiProvider": "SB",
                        "Connection": {
                            "Onward": {
                                "IsConnection": false,
                                "NoOfStops": 0,
                                "ConnectionAirport": []
                            },
                            "Return": {
                                "IsConnection": false,
                                "NoOfStops": 0,
                                "ConnectionAirport": []
                            }
                        },
                        "FlightDetails": [
                            {
                                "FlightID": "715",
                                "CarrierCode": "9W",
                                "Origin": "DEL",
                                "Destination": "BLR",
                                "FlightNum": "715",
                                "DepartureDateTime": "2018-09-26T19:05:00",
                                "ArrivalDateTime": "2018-09-26T21:55:00",
                                "Duration": "170",
                                "OrgTerminal": "3",
                                "DesTerminal": null,
                                "AirlineCategory": null,
                                "AirCraftType": "",
                                "Via": "",
                                "ValidatingCarrier": "9W",
                                "ClassCode": "O",
                                "ClassCodeDesc": "",
                                "FareBasisCode": "ADVJR1",
                                "BreakPoint": "",
                                "CurrencyCode": "INR",
                                "OriginAirportName": "Indira Gandhi International Airport",
                                "OriginAirportCity": "New Delhi",
                                "OriginAirportCountry": "India",
                                "DestinationAirportName": "Bengaluru International Airport",
                                "DestinationAirportCity": "Bangalore",
                                "DestinationAirportCountry": "India",
                                "AirlineName": "Jet Airways",
                                "MajorClassCode": "Economy",
                                "AirEquipType": "73H",
                                "MarriageGroup": "O",
                                "Baggage": {
                                    "Weight": null,
                                    "Unit": null,
                                    "Pieces": "1"
                                },
                                "MealCode": {
                                    "MealCode": "D",
                                    "MealCodeDescription": "Dinner"
                                },
                                "IsStopAirport": false,
                                "JourneyType": "Onward"
                            }
                        ],
                        "FareDescription": {
                            "IsNonRefundable": false,
                            "PaxFareDetails": [
                                {
                                    "PaxType": "AllPsg",
                                    "BasicAmount": "1865",
                                    "TotalTaxAmount": "1651",
                                    "FuelSurcharge": "0",
                                    "Commission": "0",
                                    "OtherInfo": {
                                        "TransactionFee": "0",
                                        "ServiceTax": "0",
                                        "GrossAmount": 3516,
                                        "Item": []
                                    }
                                },
                                {
                                    "PaxType": "ADT",
                                    "BasicAmount": "1865",
                                    "TotalTaxAmount": "1651",
                                    "FuelSurcharge": "0",
                                    "Commission": "0",
                                    "OtherInfo": {
                                        "TransactionFee": "0",
                                        "ServiceTax": "0",
                                        "GrossAmount": 3516,
                                        "Item": [
                                            {
                                                "TaxCode": "YQF",
                                                "Amount": "1200"
                                            },
                                            {
                                                "TaxCode": "YRF",
                                                "Amount": "125"
                                            },
                                            {
                                                "TaxCode": "IN",
                                                "Amount": "12"
                                            },
                                            {
                                                "TaxCode": "K38",
                                                "Amount": "160"
                                            },
                                            {
                                                "TaxCode": "WO",
                                                "Amount": "154"
                                            }
                                        ]
                                    }
                                }
                            ],
                            "FareBasis": [
                                {
                                    "Code": "O2AT15",
                                    "DepartureTime": "2018-09-26T19:05:00",
                                    "OriginLocation": "DEL",
                                    "DestinationLocation": "BLR",
                                    "ValidatingCarrier": "9W",
                                    "PsgType": "ADT",
                                    "PsgQty": 1
                                }
                            ]
                        },
                        "Miles": null,
                        "ElapsedTime": [
                            "170"
                        ],
                        "ValidatingCarrier": "9W"
                    },
                    {
                        "ApiProvider": "SB",
                        "Connection": {
                            "Onward": {
                                "IsConnection": false,
                                "NoOfStops": 0,
                                "ConnectionAirport": []
                            },
                            "Return": {
                                "IsConnection": false,
                                "NoOfStops": 0,
                                "ConnectionAirport": []
                            }
                        },
                        "FlightDetails": [
                            {
                                "FlightID": "743",
                                "CarrierCode": "9W",
                                "Origin": "DEL",
                                "Destination": "BLR",
                                "FlightNum": "743",
                                "DepartureDateTime": "2018-09-26T07:50:00",
                                "ArrivalDateTime": "2018-09-26T10:30:00",
                                "Duration": "160",
                                "OrgTerminal": "3",
                                "DesTerminal": null,
                                "AirlineCategory": null,
                                "AirCraftType": "",
                                "Via": "",
                                "ValidatingCarrier": "9W",
                                "ClassCode": "V",
                                "ClassCodeDesc": "",
                                "FareBasisCode": "ADVJR1",
                                "BreakPoint": "",
                                "CurrencyCode": "INR",
                                "OriginAirportName": "Indira Gandhi International Airport",
                                "OriginAirportCity": "New Delhi",
                                "OriginAirportCountry": "India",
                                "DestinationAirportName": "Bengaluru International Airport",
                                "DestinationAirportCity": "Bangalore",
                                "DestinationAirportCountry": "India",
                                "AirlineName": "Jet Airways",
                                "MajorClassCode": "Economy",
                                "AirEquipType": "73H",
                                "MarriageGroup": "O",
                                "Baggage": {
                                    "Weight": null,
                                    "Unit": null,
                                    "Pieces": "1"
                                },
                                "MealCode": {
                                    "MealCode": "B",
                                    "MealCodeDescription": "Breakfast"
                                },
                                "IsStopAirport": false,
                                "JourneyType": "Onward"
                            }
                        ],
                        "FareDescription": {
                            "IsNonRefundable": false,
                            "PaxFareDetails": [
                                {
                                    "PaxType": "AllPsg",
                                    "BasicAmount": "2385",
                                    "TotalTaxAmount": "1677",
                                    "FuelSurcharge": "0",
                                    "Commission": "0",
                                    "OtherInfo": {
                                        "TransactionFee": "0",
                                        "ServiceTax": "0",
                                        "GrossAmount": 4062,
                                        "Item": []
                                    }
                                },
                                {
                                    "PaxType": "ADT",
                                    "BasicAmount": "2385",
                                    "TotalTaxAmount": "1677",
                                    "FuelSurcharge": "0",
                                    "Commission": "0",
                                    "OtherInfo": {
                                        "TransactionFee": "0",
                                        "ServiceTax": "0",
                                        "GrossAmount": 4062,
                                        "Item": [
                                            {
                                                "TaxCode": "YQF",
                                                "Amount": "1200"
                                            },
                                            {
                                                "TaxCode": "YRF",
                                                "Amount": "125"
                                            },
                                            {
                                                "TaxCode": "IN",
                                                "Amount": "12"
                                            },
                                            {
                                                "TaxCode": "K38",
                                                "Amount": "186"
                                            },
                                            {
                                                "TaxCode": "WO",
                                                "Amount": "154"
                                            }
                                        ]
                                    }
                                }
                            ],
                            "FareBasis": [
                                {
                                    "Code": "V2AT15",
                                    "DepartureTime": "2018-09-26T07:50:00",
                                    "OriginLocation": "DEL",
                                    "DestinationLocation": "BLR",
                                    "ValidatingCarrier": "9W",
                                    "PsgType": "ADT",
                                    "PsgQty": 1
                                }
                            ]
                        },
                        "Miles": null,
                        "ElapsedTime": [
                            "160"
                        ],
                        "ValidatingCarrier": "9W"
                    },
                    {
                        "ApiProvider": "SB",
                        "Connection": {
                            "Onward": {
                                "IsConnection": false,
                                "NoOfStops": 0,
                                "ConnectionAirport": []
                            },
                            "Return": {
                                "IsConnection": false,
                                "NoOfStops": 0,
                                "ConnectionAirport": []
                            }
                        },
                        "FlightDetails": [
                            {
                                "FlightID": "823",
                                "CarrierCode": "9W",
                                "Origin": "DEL",
                                "Destination": "BLR",
                                "FlightNum": "823",
                                "DepartureDateTime": "2018-09-26T14:50:00",
                                "ArrivalDateTime": "2018-09-26T17:30:00",
                                "Duration": "160",
                                "OrgTerminal": "3",
                                "DesTerminal": null,
                                "AirlineCategory": null,
                                "AirCraftType": "",
                                "Via": "",
                                "ValidatingCarrier": "9W",
                                "ClassCode": "V",
                                "ClassCodeDesc": "",
                                "FareBasisCode": "ADVJR1",
                                "BreakPoint": "",
                                "CurrencyCode": "INR",
                                "OriginAirportName": "Indira Gandhi International Airport",
                                "OriginAirportCity": "New Delhi",
                                "OriginAirportCountry": "India",
                                "DestinationAirportName": "Bengaluru International Airport",
                                "DestinationAirportCity": "Bangalore",
                                "DestinationAirportCountry": "India",
                                "AirlineName": "Jet Airways",
                                "MajorClassCode": "Economy",
                                "AirEquipType": "73H",
                                "MarriageGroup": "O",
                                "Baggage": {
                                    "Weight": null,
                                    "Unit": null,
                                    "Pieces": "1"
                                },
                                "MealCode": {
                                    "MealCode": "S",
                                    "MealCodeDescription": "Snack"
                                },
                                "IsStopAirport": false,
                                "JourneyType": "Onward"
                            }
                        ],
                        "FareDescription": {
                            "IsNonRefundable": false,
                            "PaxFareDetails": [
                                {
                                    "PaxType": "AllPsg",
                                    "BasicAmount": "2385",
                                    "TotalTaxAmount": "1677",
                                    "FuelSurcharge": "0",
                                    "Commission": "0",
                                    "OtherInfo": {
                                        "TransactionFee": "0",
                                        "ServiceTax": "0",
                                        "GrossAmount": 4062,
                                        "Item": []
                                    }
                                },
                                {
                                    "PaxType": "ADT",
                                    "BasicAmount": "2385",
                                    "TotalTaxAmount": "1677",
                                    "FuelSurcharge": "0",
                                    "Commission": "0",
                                    "OtherInfo": {
                                        "TransactionFee": "0",
                                        "ServiceTax": "0",
                                        "GrossAmount": 4062,
                                        "Item": [
                                            {
                                                "TaxCode": "YQF",
                                                "Amount": "1200"
                                            },
                                            {
                                                "TaxCode": "YRF",
                                                "Amount": "125"
                                            },
                                            {
                                                "TaxCode": "IN",
                                                "Amount": "12"
                                            },
                                            {
                                                "TaxCode": "K38",
                                                "Amount": "186"
                                            },
                                            {
                                                "TaxCode": "WO",
                                                "Amount": "154"
                                            }
                                        ]
                                    }
                                }
                            ],
                            "FareBasis": [
                                {
                                    "Code": "V2AT15",
                                    "DepartureTime": "2018-09-26T14:50:00",
                                    "OriginLocation": "DEL",
                                    "DestinationLocation": "BLR",
                                    "ValidatingCarrier": "9W",
                                    "PsgType": "ADT",
                                    "PsgQty": 1
                                }
                            ]
                        },
                        "Miles": null,
                        "ElapsedTime": [
                            "160"
                        ],
                        "ValidatingCarrier": "9W"
                    },
                    {
                        "ApiProvider": "SB",
                        "Connection": {
                            "Onward": {
                                "IsConnection": false,
                                "NoOfStops": 0,
                                "ConnectionAirport": []
                            },
                            "Return": {
                                "IsConnection": false,
                                "NoOfStops": 0,
                                "ConnectionAirport": []
                            }
                        },
                        "FlightDetails": [
                            {
                                "FlightID": "807",
                                "CarrierCode": "9W",
                                "Origin": "DEL",
                                "Destination": "BLR",
                                "FlightNum": "807",
                                "DepartureDateTime": "2018-09-26T07:05:00",
                                "ArrivalDateTime": "2018-09-26T09:50:00",
                                "Duration": "165",
                                "OrgTerminal": "3",
                                "DesTerminal": null,
                                "AirlineCategory": null,
                                "AirCraftType": "",
                                "Via": "",
                                "ValidatingCarrier": "9W",
                                "ClassCode": "V",
                                "ClassCodeDesc": "",
                                "FareBasisCode": "ADVJR1",
                                "BreakPoint": "",
                                "CurrencyCode": "INR",
                                "OriginAirportName": "Indira Gandhi International Airport",
                                "OriginAirportCity": "New Delhi",
                                "OriginAirportCountry": "India",
                                "DestinationAirportName": "Bengaluru International Airport",
                                "DestinationAirportCity": "Bangalore",
                                "DestinationAirportCountry": "India",
                                "AirlineName": "Jet Airways",
                                "MajorClassCode": "Economy",
                                "AirEquipType": "333",
                                "MarriageGroup": "O",
                                "Baggage": {
                                    "Weight": null,
                                    "Unit": null,
                                    "Pieces": "1"
                                },
                                "MealCode": {
                                    "MealCode": "B",
                                    "MealCodeDescription": "Breakfast"
                                },
                                "IsStopAirport": false,
                                "JourneyType": "Onward"
                            }
                        ],
                        "FareDescription": {
                            "IsNonRefundable": false,
                            "PaxFareDetails": [
                                {
                                    "PaxType": "AllPsg",
                                    "BasicAmount": "2385",
                                    "TotalTaxAmount": "1677",
                                    "FuelSurcharge": "0",
                                    "Commission": "0",
                                    "OtherInfo": {
                                        "TransactionFee": "0",
                                        "ServiceTax": "0",
                                        "GrossAmount": 4062,
                                        "Item": []
                                    }
                                },
                                {
                                    "PaxType": "ADT",
                                    "BasicAmount": "2385",
                                    "TotalTaxAmount": "1677",
                                    "FuelSurcharge": "0",
                                    "Commission": "0",
                                    "OtherInfo": {
                                        "TransactionFee": "0",
                                        "ServiceTax": "0",
                                        "GrossAmount": 4062,
                                        "Item": [
                                            {
                                                "TaxCode": "YQF",
                                                "Amount": "1200"
                                            },
                                            {
                                                "TaxCode": "YRF",
                                                "Amount": "125"
                                            },
                                            {
                                                "TaxCode": "IN",
                                                "Amount": "12"
                                            },
                                            {
                                                "TaxCode": "K38",
                                                "Amount": "186"
                                            },
                                            {
                                                "TaxCode": "WO",
                                                "Amount": "154"
                                            }
                                        ]
                                    }
                                }
                            ],
                            "FareBasis": [
                                {
                                    "Code": "V2AT15",
                                    "DepartureTime": "2018-09-26T07:05:00",
                                    "OriginLocation": "DEL",
                                    "DestinationLocation": "BLR",
                                    "ValidatingCarrier": "9W",
                                    "PsgType": "ADT",
                                    "PsgQty": 1
                                }
                            ]
                        },
                        "Miles": null,
                        "ElapsedTime": [
                            "165"
                        ],
                        "ValidatingCarrier": "9W"
                    },
                    {
                        "ApiProvider": "SB",
                        "Connection": {
                            "Onward": {
                                "IsConnection": true,
                                "NoOfStops": 1,
                                "ConnectionAirport": [
                                    {
                                        "Origin": "DEL",
                                        "Destination": "HYD"
                                    },
                                    {
                                        "Origin": "HYD",
                                        "Destination": "BLR"
                                    }
                                ]
                            },
                            "Return": {
                                "IsConnection": false,
                                "NoOfStops": 0,
                                "ConnectionAirport": []
                            }
                        },
                        "FlightDetails": [
                            {
                                "FlightID": "560",
                                "CarrierCode": "AI",
                                "Origin": "DEL",
                                "Destination": "HYD",
                                "FlightNum": "560",
                                "DepartureDateTime": "2018-09-26T07:05:00",
                                "ArrivalDateTime": "2018-09-26T09:10:00",
                                "Duration": "125",
                                "OrgTerminal": "3",
                                "DesTerminal": null,
                                "AirlineCategory": null,
                                "AirCraftType": "",
                                "Via": "",
                                "ValidatingCarrier": "AI",
                                "ClassCode": "S",
                                "ClassCodeDesc": "",
                                "FareBasisCode": "ADVJR1",
                                "BreakPoint": "",
                                "CurrencyCode": "INR",
                                "OriginAirportName": "Indira Gandhi International Airport",
                                "OriginAirportCity": "New Delhi",
                                "OriginAirportCountry": "India",
                                "DestinationAirportName": "Rajiv Gandhi International Airport, Shamshabad",
                                "DestinationAirportCity": "Hyderabad",
                                "DestinationAirportCountry": "India",
                                "AirlineName": "Air India",
                                "MajorClassCode": "Economy",
                                "AirEquipType": "320",
                                "MarriageGroup": "O",
                                "Baggage": {
                                    "Weight": "25",
                                    "Unit": "kg",
                                    "Pieces": "0"
                                },
                                "MealCode": {
                                    "MealCode": "B",
                                    "MealCodeDescription": "Breakfast"
                                },
                                "IsStopAirport": false,
                                "JourneyType": "Onward"
                            },
                            {
                                "FlightID": "515",
                                "CarrierCode": "AI",
                                "Origin": "HYD",
                                "Destination": "BLR",
                                "FlightNum": "515",
                                "DepartureDateTime": "2018-09-26T09:55:00",
                                "ArrivalDateTime": "2018-09-26T11:05:00",
                                "Duration": "70",
                                "OrgTerminal": null,
                                "DesTerminal": null,
                                "AirlineCategory": null,
                                "AirCraftType": "",
                                "Via": "",
                                "ValidatingCarrier": "AI",
                                "ClassCode": "S",
                                "ClassCodeDesc": "",
                                "FareBasisCode": "ADVJR1",
                                "BreakPoint": "",
                                "CurrencyCode": "INR",
                                "OriginAirportName": "Rajiv Gandhi International Airport, Shamshabad",
                                "OriginAirportCity": "Hyderabad",
                                "OriginAirportCountry": "India",
                                "DestinationAirportName": "Bengaluru International Airport",
                                "DestinationAirportCity": "Bangalore",
                                "DestinationAirportCountry": "India",
                                "AirlineName": "Air India",
                                "MajorClassCode": "Economy",
                                "AirEquipType": "319",
                                "MarriageGroup": "O",
                                "Baggage": {
                                    "Weight": "25",
                                    "Unit": "kg",
                                    "Pieces": "0"
                                },
                                "MealCode": {
                                    "MealCode": "S",
                                    "MealCodeDescription": "Snack"
                                },
                                "IsStopAirport": false,
                                "JourneyType": "Onward"
                            }
                        ],
                        "FareDescription": {
                            "IsNonRefundable": false,
                            "PaxFareDetails": [
                                {
                                    "PaxType": "AllPsg",
                                    "BasicAmount": "3500",
                                    "TotalTaxAmount": "724",
                                    "FuelSurcharge": "0",
                                    "Commission": "0",
                                    "OtherInfo": {
                                        "TransactionFee": "0",
                                        "ServiceTax": "0",
                                        "GrossAmount": 4224,
                                        "Item": []
                                    }
                                },
                                {
                                    "PaxType": "ADT",
                                    "BasicAmount": "3500",
                                    "TotalTaxAmount": "724",
                                    "FuelSurcharge": "0",
                                    "Commission": "0",
                                    "OtherInfo": {
                                        "TransactionFee": "0",
                                        "ServiceTax": "0",
                                        "GrossAmount": 4224,
                                        "Item": [
                                            {
                                                "TaxCode": "YRI",
                                                "Amount": "70"
                                            },
                                            {
                                                "TaxCode": "YRI",
                                                "Amount": "70"
                                            },
                                            {
                                                "TaxCode": "IN",
                                                "Amount": "12"
                                            },
                                            {
                                                "TaxCode": "K38",
                                                "Amount": "182"
                                            },
                                            {
                                                "TaxCode": "WO",
                                                "Amount": "154"
                                            },
                                            {
                                                "TaxCode": "WO",
                                                "Amount": "236"
                                            }
                                        ]
                                    }
                                }
                            ],
                            "FareBasis": [
                                {
                                    "Code": "SAP8",
                                    "DepartureTime": "2018-09-26T07:05:00",
                                    "OriginLocation": "DEL",
                                    "DestinationLocation": "HYD",
                                    "ValidatingCarrier": "AI",
                                    "PsgType": "ADT",
                                    "PsgQty": 1
                                },
                                {
                                    "Code": "SAP8",
                                    "DepartureTime": "2018-09-26T09:55:00",
                                    "OriginLocation": "HYD",
                                    "DestinationLocation": "BLR",
                                    "ValidatingCarrier": "AI",
                                    "PsgType": "ADT",
                                    "PsgQty": 1
                                }
                            ]
                        },
                        "Miles": null,
                        "ElapsedTime": [
                            "240"
                        ],
                        "ValidatingCarrier": "AI"
                    },
                    {
                        "ApiProvider": "SB",
                        "Connection": {
                            "Onward": {
                                "IsConnection": false,
                                "NoOfStops": 0,
                                "ConnectionAirport": []
                            },
                            "Return": {
                                "IsConnection": false,
                                "NoOfStops": 0,
                                "ConnectionAirport": []
                            }
                        },
                        "FlightDetails": [
                            {
                                "FlightID": "88",
                                "CarrierCode": "AI",
                                "Origin": "DEL",
                                "Destination": "BLR",
                                "FlightNum": "88",
                                "DepartureDateTime": "2018-09-26T17:45:00",
                                "ArrivalDateTime": "2018-09-26T20:25:00",
                                "Duration": "160",
                                "OrgTerminal": "3",
                                "DesTerminal": null,
                                "AirlineCategory": null,
                                "AirCraftType": "",
                                "Via": "",
                                "ValidatingCarrier": "AI",
                                "ClassCode": "S",
                                "ClassCodeDesc": "",
                                "FareBasisCode": "ADVJR1",
                                "BreakPoint": "",
                                "CurrencyCode": "INR",
                                "OriginAirportName": "Indira Gandhi International Airport",
                                "OriginAirportCity": "New Delhi",
                                "OriginAirportCountry": "India",
                                "DestinationAirportName": "Bengaluru International Airport",
                                "DestinationAirportCity": "Bangalore",
                                "DestinationAirportCountry": "India",
                                "AirlineName": "Air India",
                                "MajorClassCode": "Economy",
                                "AirEquipType": "32B",
                                "MarriageGroup": "O",
                                "Baggage": {
                                    "Weight": "25",
                                    "Unit": "kg",
                                    "Pieces": "0"
                                },
                                "MealCode": {
                                    "MealCode": "S",
                                    "MealCodeDescription": "Snack"
                                },
                                "IsStopAirport": false,
                                "JourneyType": "Onward"
                            }
                        ],
                        "FareDescription": {
                            "IsNonRefundable": false,
                            "PaxFareDetails": [
                                {
                                    "PaxType": "AllPsg",
                                    "BasicAmount": "3850",
                                    "TotalTaxAmount": "432",
                                    "FuelSurcharge": "0",
                                    "Commission": "0",
                                    "OtherInfo": {
                                        "TransactionFee": "0",
                                        "ServiceTax": "0",
                                        "GrossAmount": 4282,
                                        "Item": []
                                    }
                                },
                                {
                                    "PaxType": "ADT",
                                    "BasicAmount": "3850",
                                    "TotalTaxAmount": "432",
                                    "FuelSurcharge": "0",
                                    "Commission": "0",
                                    "OtherInfo": {
                                        "TransactionFee": "0",
                                        "ServiceTax": "0",
                                        "GrossAmount": 4282,
                                        "Item": [
                                            {
                                                "TaxCode": "YRI",
                                                "Amount": "70"
                                            },
                                            {
                                                "TaxCode": "IN",
                                                "Amount": "12"
                                            },
                                            {
                                                "TaxCode": "K38",
                                                "Amount": "196"
                                            },
                                            {
                                                "TaxCode": "WO",
                                                "Amount": "154"
                                            }
                                        ]
                                    }
                                }
                            ],
                            "FareBasis": [
                                {
                                    "Code": "SAP8",
                                    "DepartureTime": "2018-09-26T17:45:00",
                                    "OriginLocation": "DEL",
                                    "DestinationLocation": "BLR",
                                    "ValidatingCarrier": "AI",
                                    "PsgType": "ADT",
                                    "PsgQty": 1
                                }
                            ]
                        },
                        "Miles": null,
                        "ElapsedTime": [
                            "160"
                        ],
                        "ValidatingCarrier": "AI"
                    },
                    {
                        "ApiProvider": "SB",
                        "Connection": {
                            "Onward": {
                                "IsConnection": false,
                                "NoOfStops": 0,
                                "ConnectionAirport": []
                            },
                            "Return": {
                                "IsConnection": false,
                                "NoOfStops": 0,
                                "ConnectionAirport": []
                            }
                        },
                        "FlightDetails": [
                            {
                                "FlightID": "506",
                                "CarrierCode": "AI",
                                "Origin": "DEL",
                                "Destination": "BLR",
                                "FlightNum": "506",
                                "DepartureDateTime": "2018-09-26T09:45:00",
                                "ArrivalDateTime": "2018-09-26T12:30:00",
                                "Duration": "165",
                                "OrgTerminal": "3",
                                "DesTerminal": null,
                                "AirlineCategory": null,
                                "AirCraftType": "",
                                "Via": "",
                                "ValidatingCarrier": "AI",
                                "ClassCode": "S",
                                "ClassCodeDesc": "",
                                "FareBasisCode": "ADVJR1",
                                "BreakPoint": "",
                                "CurrencyCode": "INR",
                                "OriginAirportName": "Indira Gandhi International Airport",
                                "OriginAirportCity": "New Delhi",
                                "OriginAirportCountry": "India",
                                "DestinationAirportName": "Bengaluru International Airport",
                                "DestinationAirportCity": "Bangalore",
                                "DestinationAirportCountry": "India",
                                "AirlineName": "Air India",
                                "MajorClassCode": "Economy",
                                "AirEquipType": "32B",
                                "MarriageGroup": "O",
                                "Baggage": {
                                    "Weight": "25",
                                    "Unit": "kg",
                                    "Pieces": "0"
                                },
                                "MealCode": {
                                    "MealCode": "M",
                                    "MealCodeDescription": "Meals"
                                },
                                "IsStopAirport": false,
                                "JourneyType": "Onward"
                            }
                        ],
                        "FareDescription": {
                            "IsNonRefundable": false,
                            "PaxFareDetails": [
                                {
                                    "PaxType": "AllPsg",
                                    "BasicAmount": "3850",
                                    "TotalTaxAmount": "432",
                                    "FuelSurcharge": "0",
                                    "Commission": "0",
                                    "OtherInfo": {
                                        "TransactionFee": "0",
                                        "ServiceTax": "0",
                                        "GrossAmount": 4282,
                                        "Item": []
                                    }
                                },
                                {
                                    "PaxType": "ADT",
                                    "BasicAmount": "3850",
                                    "TotalTaxAmount": "432",
                                    "FuelSurcharge": "0",
                                    "Commission": "0",
                                    "OtherInfo": {
                                        "TransactionFee": "0",
                                        "ServiceTax": "0",
                                        "GrossAmount": 4282,
                                        "Item": [
                                            {
                                                "TaxCode": "YRI",
                                                "Amount": "70"
                                            },
                                            {
                                                "TaxCode": "IN",
                                                "Amount": "12"
                                            },
                                            {
                                                "TaxCode": "K38",
                                                "Amount": "196"
                                            },
                                            {
                                                "TaxCode": "WO",
                                                "Amount": "154"
                                            }
                                        ]
                                    }
                                }
                            ],
                            "FareBasis": [
                                {
                                    "Code": "SAP8",
                                    "DepartureTime": "2018-09-26T09:45:00",
                                    "OriginLocation": "DEL",
                                    "DestinationLocation": "BLR",
                                    "ValidatingCarrier": "AI",
                                    "PsgType": "ADT",
                                    "PsgQty": 1
                                }
                            ]
                        },
                        "Miles": null,
                        "ElapsedTime": [
                            "165"
                        ],
                        "ValidatingCarrier": "AI"
                    },
                    {
                        "ApiProvider": "SB",
                        "Connection": {
                            "Onward": {
                                "IsConnection": true,
                                "NoOfStops": 1,
                                "ConnectionAirport": [
                                    {
                                        "Origin": "DEL",
                                        "Destination": "BOM"
                                    },
                                    {
                                        "Origin": "BOM",
                                        "Destination": "BLR"
                                    }
                                ]
                            },
                            "Return": {
                                "IsConnection": false,
                                "NoOfStops": 0,
                                "ConnectionAirport": []
                            }
                        },
                        "FlightDetails": [
                            {
                                "FlightID": "316",
                                "CarrierCode": "9W",
                                "Origin": "DEL",
                                "Destination": "BOM",
                                "FlightNum": "316",
                                "DepartureDateTime": "2018-09-26T11:30:00",
                                "ArrivalDateTime": "2018-09-26T13:50:00",
                                "Duration": "140",
                                "OrgTerminal": "3",
                                "DesTerminal": "2",
                                "AirlineCategory": null,
                                "AirCraftType": "",
                                "Via": "",
                                "ValidatingCarrier": "9W",
                                "ClassCode": "W",
                                "ClassCodeDesc": "",
                                "FareBasisCode": "ADVJR1",
                                "BreakPoint": "",
                                "CurrencyCode": "INR",
                                "OriginAirportName": "Indira Gandhi International Airport",
                                "OriginAirportCity": "New Delhi",
                                "OriginAirportCountry": "India",
                                "DestinationAirportName": "Chhatrapati Shivaji International Airport",
                                "DestinationAirportCity": "Mumbai",
                                "DestinationAirportCountry": "India",
                                "AirlineName": "Jet Airways",
                                "MajorClassCode": "Economy",
                                "AirEquipType": "73H",
                                "MarriageGroup": "O",
                                "Baggage": {
                                    "Weight": null,
                                    "Unit": null,
                                    "Pieces": "1"
                                },
                                "MealCode": {
                                    "MealCode": "S",
                                    "MealCodeDescription": "Snack"
                                },
                                "IsStopAirport": false,
                                "JourneyType": "Onward"
                            },
                            {
                                "FlightID": "415",
                                "CarrierCode": "9W",
                                "Origin": "BOM",
                                "Destination": "BLR",
                                "FlightNum": "415",
                                "DepartureDateTime": "2018-09-26T14:55:00",
                                "ArrivalDateTime": "2018-09-26T16:35:00",
                                "Duration": "100",
                                "OrgTerminal": "2",
                                "DesTerminal": null,
                                "AirlineCategory": null,
                                "AirCraftType": "",
                                "Via": "",
                                "ValidatingCarrier": "9W",
                                "ClassCode": "W",
                                "ClassCodeDesc": "",
                                "FareBasisCode": "ADVJR1",
                                "BreakPoint": "",
                                "CurrencyCode": "INR",
                                "OriginAirportName": "Chhatrapati Shivaji International Airport",
                                "OriginAirportCity": "Mumbai",
                                "OriginAirportCountry": "India",
                                "DestinationAirportName": "Bengaluru International Airport",
                                "DestinationAirportCity": "Bangalore",
                                "DestinationAirportCountry": "India",
                                "AirlineName": "Jet Airways",
                                "MajorClassCode": "Economy",
                                "AirEquipType": "73H",
                                "MarriageGroup": "I",
                                "Baggage": {
                                    "Weight": null,
                                    "Unit": null,
                                    "Pieces": "1"
                                },
                                "MealCode": {
                                    "MealCode": "S",
                                    "MealCodeDescription": "Snack"
                                },
                                "IsStopAirport": false,
                                "JourneyType": "Onward"
                            }
                        ],
                        "FareDescription": {
                            "IsNonRefundable": false,
                            "PaxFareDetails": [
                                {
                                    "PaxType": "AllPsg",
                                    "BasicAmount": "2256",
                                    "TotalTaxAmount": "2432",
                                    "FuelSurcharge": "0",
                                    "Commission": "0",
                                    "OtherInfo": {
                                        "TransactionFee": "0",
                                        "ServiceTax": "0",
                                        "GrossAmount": 4688,
                                        "Item": []
                                    }
                                },
                                {
                                    "PaxType": "ADT",
                                    "BasicAmount": "2256",
                                    "TotalTaxAmount": "2432",
                                    "FuelSurcharge": "0",
                                    "Commission": "0",
                                    "OtherInfo": {
                                        "TransactionFee": "0",
                                        "ServiceTax": "0",
                                        "GrossAmount": 4688,
                                        "Item": [
                                            {
                                                "TaxCode": "YQF",
                                                "Amount": "1200"
                                            },
                                            {
                                                "TaxCode": "YQF",
                                                "Amount": "600"
                                            },
                                            {
                                                "TaxCode": "YRF",
                                                "Amount": "125"
                                            },
                                            {
                                                "TaxCode": "YRF",
                                                "Amount": "125"
                                            },
                                            {
                                                "TaxCode": "IN",
                                                "Amount": "12"
                                            },
                                            {
                                                "TaxCode": "K38",
                                                "Amount": "216"
                                            },
                                            {
                                                "TaxCode": "WO",
                                                "Amount": "154"
                                            }
                                        ]
                                    }
                                }
                            ],
                            "FareBasis": [
                                {
                                    "Code": "W2AT15E",
                                    "DepartureTime": "2018-09-26T11:30:00",
                                    "OriginLocation": "DEL",
                                    "DestinationLocation": "BOM",
                                    "ValidatingCarrier": "9W",
                                    "PsgType": "ADT",
                                    "PsgQty": 1
                                },
                                {
                                    "Code": "W2AP08C",
                                    "DepartureTime": "2018-09-26T14:55:00",
                                    "OriginLocation": "BOM",
                                    "DestinationLocation": "BLR",
                                    "ValidatingCarrier": "9W",
                                    "PsgType": "ADT",
                                    "PsgQty": 1
                                }
                            ]
                        },
                        "Miles": null,
                        "ElapsedTime": [
                            "305"
                        ],
                        "ValidatingCarrier": "9W"
                    },
                    {
                        "ApiProvider": "SB",
                        "Connection": {
                            "Onward": {
                                "IsConnection": true,
                                "NoOfStops": 1,
                                "ConnectionAirport": [
                                    {
                                        "Origin": "DEL",
                                        "Destination": "BOM"
                                    },
                                    {
                                        "Origin": "BOM",
                                        "Destination": "BLR"
                                    }
                                ]
                            },
                            "Return": {
                                "IsConnection": false,
                                "NoOfStops": 0,
                                "ConnectionAirport": []
                            }
                        },
                        "FlightDetails": [
                            {
                                "FlightID": "316",
                                "CarrierCode": "9W",
                                "Origin": "DEL",
                                "Destination": "BOM",
                                "FlightNum": "316",
                                "DepartureDateTime": "2018-09-26T11:30:00",
                                "ArrivalDateTime": "2018-09-26T13:50:00",
                                "Duration": "140",
                                "OrgTerminal": "3",
                                "DesTerminal": "2",
                                "AirlineCategory": null,
                                "AirCraftType": "",
                                "Via": "",
                                "ValidatingCarrier": "9W",
                                "ClassCode": "W",
                                "ClassCodeDesc": "",
                                "FareBasisCode": "ADVJR1",
                                "BreakPoint": "",
                                "CurrencyCode": "INR",
                                "OriginAirportName": "Indira Gandhi International Airport",
                                "OriginAirportCity": "New Delhi",
                                "OriginAirportCountry": "India",
                                "DestinationAirportName": "Chhatrapati Shivaji International Airport",
                                "DestinationAirportCity": "Mumbai",
                                "DestinationAirportCountry": "India",
                                "AirlineName": "Jet Airways",
                                "MajorClassCode": "Economy",
                                "AirEquipType": "73H",
                                "MarriageGroup": "O",
                                "Baggage": {
                                    "Weight": null,
                                    "Unit": null,
                                    "Pieces": "1"
                                },
                                "MealCode": {
                                    "MealCode": "S",
                                    "MealCodeDescription": "Snack"
                                },
                                "IsStopAirport": false,
                                "JourneyType": "Onward"
                            },
                            {
                                "FlightID": "413",
                                "CarrierCode": "9W",
                                "Origin": "BOM",
                                "Destination": "BLR",
                                "FlightNum": "413",
                                "DepartureDateTime": "2018-09-26T15:50:00",
                                "ArrivalDateTime": "2018-09-26T17:30:00",
                                "Duration": "100",
                                "OrgTerminal": "2",
                                "DesTerminal": null,
                                "AirlineCategory": null,
                                "AirCraftType": "",
                                "Via": "",
                                "ValidatingCarrier": "9W",
                                "ClassCode": "W",
                                "ClassCodeDesc": "",
                                "FareBasisCode": "ADVJR1",
                                "BreakPoint": "",
                                "CurrencyCode": "INR",
                                "OriginAirportName": "Chhatrapati Shivaji International Airport",
                                "OriginAirportCity": "Mumbai",
                                "OriginAirportCountry": "India",
                                "DestinationAirportName": "Bengaluru International Airport",
                                "DestinationAirportCity": "Bangalore",
                                "DestinationAirportCountry": "India",
                                "AirlineName": "Jet Airways",
                                "MajorClassCode": "Economy",
                                "AirEquipType": "73H",
                                "MarriageGroup": "I",
                                "Baggage": {
                                    "Weight": null,
                                    "Unit": null,
                                    "Pieces": "1"
                                },
                                "MealCode": {
                                    "MealCode": "S",
                                    "MealCodeDescription": "Snack"
                                },
                                "IsStopAirport": false,
                                "JourneyType": "Onward"
                            }
                        ],
                        "FareDescription": {
                            "IsNonRefundable": false,
                            "PaxFareDetails": [
                                {
                                    "PaxType": "AllPsg",
                                    "BasicAmount": "2256",
                                    "TotalTaxAmount": "2432",
                                    "FuelSurcharge": "0",
                                    "Commission": "0",
                                    "OtherInfo": {
                                        "TransactionFee": "0",
                                        "ServiceTax": "0",
                                        "GrossAmount": 4688,
                                        "Item": []
                                    }
                                },
                                {
                                    "PaxType": "ADT",
                                    "BasicAmount": "2256",
                                    "TotalTaxAmount": "2432",
                                    "FuelSurcharge": "0",
                                    "Commission": "0",
                                    "OtherInfo": {
                                        "TransactionFee": "0",
                                        "ServiceTax": "0",
                                        "GrossAmount": 4688,
                                        "Item": [
                                            {
                                                "TaxCode": "YQF",
                                                "Amount": "1200"
                                            },
                                            {
                                                "TaxCode": "YQF",
                                                "Amount": "600"
                                            },
                                            {
                                                "TaxCode": "YRF",
                                                "Amount": "125"
                                            },
                                            {
                                                "TaxCode": "YRF",
                                                "Amount": "125"
                                            },
                                            {
                                                "TaxCode": "IN",
                                                "Amount": "12"
                                            },
                                            {
                                                "TaxCode": "K38",
                                                "Amount": "216"
                                            },
                                            {
                                                "TaxCode": "WO",
                                                "Amount": "154"
                                            }
                                        ]
                                    }
                                }
                            ],
                            "FareBasis": [
                                {
                                    "Code": "W2AT15E",
                                    "DepartureTime": "2018-09-26T11:30:00",
                                    "OriginLocation": "DEL",
                                    "DestinationLocation": "BOM",
                                    "ValidatingCarrier": "9W",
                                    "PsgType": "ADT",
                                    "PsgQty": 1
                                },
                                {
                                    "Code": "W2AP08C",
                                    "DepartureTime": "2018-09-26T15:50:00",
                                    "OriginLocation": "BOM",
                                    "DestinationLocation": "BLR",
                                    "ValidatingCarrier": "9W",
                                    "PsgType": "ADT",
                                    "PsgQty": 1
                                }
                            ]
                        },
                        "Miles": null,
                        "ElapsedTime": [
                            "360"
                        ],
                        "ValidatingCarrier": "9W"
                    },
                    {
                        "ApiProvider": "SB",
                        "Connection": {
                            "Onward": {
                                "IsConnection": true,
                                "NoOfStops": 1,
                                "ConnectionAirport": [
                                    {
                                        "Origin": "DEL",
                                        "Destination": "BOM"
                                    },
                                    {
                                        "Origin": "BOM",
                                        "Destination": "BLR"
                                    }
                                ]
                            },
                            "Return": {
                                "IsConnection": false,
                                "NoOfStops": 0,
                                "ConnectionAirport": []
                            }
                        },
                        "FlightDetails": [
                            {
                                "FlightID": "316",
                                "CarrierCode": "9W",
                                "Origin": "DEL",
                                "Destination": "BOM",
                                "FlightNum": "316",
                                "DepartureDateTime": "2018-09-26T11:30:00",
                                "ArrivalDateTime": "2018-09-26T13:50:00",
                                "Duration": "140",
                                "OrgTerminal": "3",
                                "DesTerminal": "2",
                                "AirlineCategory": null,
                                "AirCraftType": "",
                                "Via": "",
                                "ValidatingCarrier": "9W",
                                "ClassCode": "W",
                                "ClassCodeDesc": "",
                                "FareBasisCode": "ADVJR1",
                                "BreakPoint": "",
                                "CurrencyCode": "INR",
                                "OriginAirportName": "Indira Gandhi International Airport",
                                "OriginAirportCity": "New Delhi",
                                "OriginAirportCountry": "India",
                                "DestinationAirportName": "Chhatrapati Shivaji International Airport",
                                "DestinationAirportCity": "Mumbai",
                                "DestinationAirportCountry": "India",
                                "AirlineName": "Jet Airways",
                                "MajorClassCode": "Economy",
                                "AirEquipType": "73H",
                                "MarriageGroup": "O",
                                "Baggage": {
                                    "Weight": null,
                                    "Unit": null,
                                    "Pieces": "1"
                                },
                                "MealCode": {
                                    "MealCode": "S",
                                    "MealCodeDescription": "Snack"
                                },
                                "IsStopAirport": false,
                                "JourneyType": "Onward"
                            },
                            {
                                "FlightID": "483",
                                "CarrierCode": "9W",
                                "Origin": "BOM",
                                "Destination": "BLR",
                                "FlightNum": "483",
                                "DepartureDateTime": "2018-09-26T18:00:00",
                                "ArrivalDateTime": "2018-09-26T19:40:00",
                                "Duration": "100",
                                "OrgTerminal": "2",
                                "DesTerminal": null,
                                "AirlineCategory": null,
                                "AirCraftType": "",
                                "Via": "",
                                "ValidatingCarrier": "9W",
                                "ClassCode": "W",
                                "ClassCodeDesc": "",
                                "FareBasisCode": "ADVJR1",
                                "BreakPoint": "",
                                "CurrencyCode": "INR",
                                "OriginAirportName": "Chhatrapati Shivaji International Airport",
                                "OriginAirportCity": "Mumbai",
                                "OriginAirportCountry": "India",
                                "DestinationAirportName": "Bengaluru International Airport",
                                "DestinationAirportCity": "Bangalore",
                                "DestinationAirportCountry": "India",
                                "AirlineName": "Jet Airways",
                                "MajorClassCode": "Economy",
                                "AirEquipType": "73H",
                                "MarriageGroup": "I",
                                "Baggage": {
                                    "Weight": null,
                                    "Unit": null,
                                    "Pieces": "1"
                                },
                                "MealCode": {
                                    "MealCode": "S",
                                    "MealCodeDescription": "Snack"
                                },
                                "IsStopAirport": false,
                                "JourneyType": "Onward"
                            }
                        ],
                        "FareDescription": {
                            "IsNonRefundable": false,
                            "PaxFareDetails": [
                                {
                                    "PaxType": "AllPsg",
                                    "BasicAmount": "2256",
                                    "TotalTaxAmount": "2432",
                                    "FuelSurcharge": "0",
                                    "Commission": "0",
                                    "OtherInfo": {
                                        "TransactionFee": "0",
                                        "ServiceTax": "0",
                                        "GrossAmount": 4688,
                                        "Item": []
                                    }
                                },
                                {
                                    "PaxType": "ADT",
                                    "BasicAmount": "2256",
                                    "TotalTaxAmount": "2432",
                                    "FuelSurcharge": "0",
                                    "Commission": "0",
                                    "OtherInfo": {
                                        "TransactionFee": "0",
                                        "ServiceTax": "0",
                                        "GrossAmount": 4688,
                                        "Item": [
                                            {
                                                "TaxCode": "YQF",
                                                "Amount": "1200"
                                            },
                                            {
                                                "TaxCode": "YQF",
                                                "Amount": "600"
                                            },
                                            {
                                                "TaxCode": "YRF",
                                                "Amount": "125"
                                            },
                                            {
                                                "TaxCode": "YRF",
                                                "Amount": "125"
                                            },
                                            {
                                                "TaxCode": "IN",
                                                "Amount": "12"
                                            },
                                            {
                                                "TaxCode": "K38",
                                                "Amount": "216"
                                            },
                                            {
                                                "TaxCode": "WO",
                                                "Amount": "154"
                                            }
                                        ]
                                    }
                                }
                            ],
                            "FareBasis": [
                                {
                                    "Code": "W2AT15E",
                                    "DepartureTime": "2018-09-26T11:30:00",
                                    "OriginLocation": "DEL",
                                    "DestinationLocation": "BOM",
                                    "ValidatingCarrier": "9W",
                                    "PsgType": "ADT",
                                    "PsgQty": 1
                                },
                                {
                                    "Code": "W2AP08C",
                                    "DepartureTime": "2018-09-26T18:00:00",
                                    "OriginLocation": "BOM",
                                    "DestinationLocation": "BLR",
                                    "ValidatingCarrier": "9W",
                                    "PsgType": "ADT",
                                    "PsgQty": 1
                                }
                            ]
                        },
                        "Miles": null,
                        "ElapsedTime": [
                            "490"
                        ],
                        "ValidatingCarrier": "9W"
                    },
                    {
                        "ApiProvider": "SB",
                        "Connection": {
                            "Onward": {
                                "IsConnection": true,
                                "NoOfStops": 1,
                                "ConnectionAirport": [
                                    {
                                        "Origin": "DEL",
                                        "Destination": "BOM"
                                    },
                                    {
                                        "Origin": "BOM",
                                        "Destination": "BLR"
                                    }
                                ]
                            },
                            "Return": {
                                "IsConnection": false,
                                "NoOfStops": 0,
                                "ConnectionAirport": []
                            }
                        },
                        "FlightDetails": [
                            {
                                "FlightID": "316",
                                "CarrierCode": "9W",
                                "Origin": "DEL",
                                "Destination": "BOM",
                                "FlightNum": "316",
                                "DepartureDateTime": "2018-09-26T11:30:00",
                                "ArrivalDateTime": "2018-09-26T13:50:00",
                                "Duration": "140",
                                "OrgTerminal": "3",
                                "DesTerminal": "2",
                                "AirlineCategory": null,
                                "AirCraftType": "",
                                "Via": "",
                                "ValidatingCarrier": "9W",
                                "ClassCode": "W",
                                "ClassCodeDesc": "",
                                "FareBasisCode": "ADVJR1",
                                "BreakPoint": "",
                                "CurrencyCode": "INR",
                                "OriginAirportName": "Indira Gandhi International Airport",
                                "OriginAirportCity": "New Delhi",
                                "OriginAirportCountry": "India",
                                "DestinationAirportName": "Chhatrapati Shivaji International Airport",
                                "DestinationAirportCity": "Mumbai",
                                "DestinationAirportCountry": "India",
                                "AirlineName": "Jet Airways",
                                "MajorClassCode": "Economy",
                                "AirEquipType": "73H",
                                "MarriageGroup": "O",
                                "Baggage": {
                                    "Weight": null,
                                    "Unit": null,
                                    "Pieces": "1"
                                },
                                "MealCode": {
                                    "MealCode": "S",
                                    "MealCodeDescription": "Snack"
                                },
                                "IsStopAirport": false,
                                "JourneyType": "Onward"
                            },
                            {
                                "FlightID": "7011",
                                "CarrierCode": "9W",
                                "Origin": "BOM",
                                "Destination": "BLR",
                                "FlightNum": "7011",
                                "DepartureDateTime": "2018-09-26T18:40:00",
                                "ArrivalDateTime": "2018-09-26T20:20:00",
                                "Duration": "100",
                                "OrgTerminal": "2",
                                "DesTerminal": null,
                                "AirlineCategory": null,
                                "AirCraftType": "",
                                "Via": "",
                                "ValidatingCarrier": "S2",
                                "ClassCode": "W",
                                "ClassCodeDesc": "",
                                "FareBasisCode": "ADVJR1",
                                "BreakPoint": "",
                                "CurrencyCode": "INR",
                                "OriginAirportName": "Chhatrapati Shivaji International Airport",
                                "OriginAirportCity": "Mumbai",
                                "OriginAirportCountry": "India",
                                "DestinationAirportName": "Bengaluru International Airport",
                                "DestinationAirportCity": "Bangalore",
                                "DestinationAirportCountry": "India",
                                "AirlineName": "Jet Airways",
                                "MajorClassCode": "Economy",
                                "AirEquipType": "73G",
                                "MarriageGroup": "I",
                                "Baggage": {
                                    "Weight": null,
                                    "Unit": null,
                                    "Pieces": "1"
                                },
                                "MealCode": {
                                    "MealCode": "S",
                                    "MealCodeDescription": "Snack"
                                },
                                "IsStopAirport": false,
                                "JourneyType": "Onward"
                            }
                        ],
                        "FareDescription": {
                            "IsNonRefundable": false,
                            "PaxFareDetails": [
                                {
                                    "PaxType": "AllPsg",
                                    "BasicAmount": "2256",
                                    "TotalTaxAmount": "2432",
                                    "FuelSurcharge": "0",
                                    "Commission": "0",
                                    "OtherInfo": {
                                        "TransactionFee": "0",
                                        "ServiceTax": "0",
                                        "GrossAmount": 4688,
                                        "Item": []
                                    }
                                },
                                {
                                    "PaxType": "ADT",
                                    "BasicAmount": "2256",
                                    "TotalTaxAmount": "2432",
                                    "FuelSurcharge": "0",
                                    "Commission": "0",
                                    "OtherInfo": {
                                        "TransactionFee": "0",
                                        "ServiceTax": "0",
                                        "GrossAmount": 4688,
                                        "Item": [
                                            {
                                                "TaxCode": "YQF",
                                                "Amount": "1200"
                                            },
                                            {
                                                "TaxCode": "YQF",
                                                "Amount": "600"
                                            },
                                            {
                                                "TaxCode": "YRF",
                                                "Amount": "125"
                                            },
                                            {
                                                "TaxCode": "YRF",
                                                "Amount": "125"
                                            },
                                            {
                                                "TaxCode": "IN",
                                                "Amount": "12"
                                            },
                                            {
                                                "TaxCode": "K38",
                                                "Amount": "216"
                                            },
                                            {
                                                "TaxCode": "WO",
                                                "Amount": "154"
                                            }
                                        ]
                                    }
                                }
                            ],
                            "FareBasis": [
                                {
                                    "Code": "W2AT15E",
                                    "DepartureTime": "2018-09-26T11:30:00",
                                    "OriginLocation": "DEL",
                                    "DestinationLocation": "BOM",
                                    "ValidatingCarrier": "9W",
                                    "PsgType": "ADT",
                                    "PsgQty": 1
                                },
                                {
                                    "Code": "W2AP08C",
                                    "DepartureTime": "2018-09-26T18:40:00",
                                    "OriginLocation": "BOM",
                                    "DestinationLocation": "BLR",
                                    "ValidatingCarrier": "9W",
                                    "PsgType": "ADT",
                                    "PsgQty": 1
                                }
                            ]
                        },
                        "Miles": null,
                        "ElapsedTime": [
                            "530"
                        ],
                        "ValidatingCarrier": "9W"
                    },
                    {
                        "ApiProvider": "SB",
                        "Connection": {
                            "Onward": {
                                "IsConnection": true,
                                "NoOfStops": 1,
                                "ConnectionAirport": [
                                    {
                                        "Origin": "DEL",
                                        "Destination": "BOM"
                                    },
                                    {
                                        "Origin": "BOM",
                                        "Destination": "BLR"
                                    }
                                ]
                            },
                            "Return": {
                                "IsConnection": false,
                                "NoOfStops": 0,
                                "ConnectionAirport": []
                            }
                        },
                        "FlightDetails": [
                            {
                                "FlightID": "316",
                                "CarrierCode": "9W",
                                "Origin": "DEL",
                                "Destination": "BOM",
                                "FlightNum": "316",
                                "DepartureDateTime": "2018-09-26T11:30:00",
                                "ArrivalDateTime": "2018-09-26T13:50:00",
                                "Duration": "140",
                                "OrgTerminal": "3",
                                "DesTerminal": "2",
                                "AirlineCategory": null,
                                "AirCraftType": "",
                                "Via": "",
                                "ValidatingCarrier": "9W",
                                "ClassCode": "W",
                                "ClassCodeDesc": "",
                                "FareBasisCode": "ADVJR1",
                                "BreakPoint": "",
                                "CurrencyCode": "INR",
                                "OriginAirportName": "Indira Gandhi International Airport",
                                "OriginAirportCity": "New Delhi",
                                "OriginAirportCountry": "India",
                                "DestinationAirportName": "Chhatrapati Shivaji International Airport",
                                "DestinationAirportCity": "Mumbai",
                                "DestinationAirportCountry": "India",
                                "AirlineName": "Jet Airways",
                                "MajorClassCode": "Economy",
                                "AirEquipType": "73H",
                                "MarriageGroup": "O",
                                "Baggage": {
                                    "Weight": null,
                                    "Unit": null,
                                    "Pieces": "1"
                                },
                                "MealCode": {
                                    "MealCode": "S",
                                    "MealCodeDescription": "Snack"
                                },
                                "IsStopAirport": false,
                                "JourneyType": "Onward"
                            },
                            {
                                "FlightID": "477",
                                "CarrierCode": "9W",
                                "Origin": "BOM",
                                "Destination": "BLR",
                                "FlightNum": "477",
                                "DepartureDateTime": "2018-09-26T20:25:00",
                                "ArrivalDateTime": "2018-09-26T22:00:00",
                                "Duration": "95",
                                "OrgTerminal": "2",
                                "DesTerminal": null,
                                "AirlineCategory": null,
                                "AirCraftType": "",
                                "Via": "",
                                "ValidatingCarrier": "9W",
                                "ClassCode": "W",
                                "ClassCodeDesc": "",
                                "FareBasisCode": "ADVJR1",
                                "BreakPoint": "",
                                "CurrencyCode": "INR",
                                "OriginAirportName": "Chhatrapati Shivaji International Airport",
                                "OriginAirportCity": "Mumbai",
                                "OriginAirportCountry": "India",
                                "DestinationAirportName": "Bengaluru International Airport",
                                "DestinationAirportCity": "Bangalore",
                                "DestinationAirportCountry": "India",
                                "AirlineName": "Jet Airways",
                                "MajorClassCode": "Economy",
                                "AirEquipType": "73H",
                                "MarriageGroup": "I",
                                "Baggage": {
                                    "Weight": null,
                                    "Unit": null,
                                    "Pieces": "1"
                                },
                                "MealCode": {
                                    "MealCode": "D",
                                    "MealCodeDescription": "Dinner"
                                },
                                "IsStopAirport": false,
                                "JourneyType": "Onward"
                            }
                        ],
                        "FareDescription": {
                            "IsNonRefundable": false,
                            "PaxFareDetails": [
                                {
                                    "PaxType": "AllPsg",
                                    "BasicAmount": "2256",
                                    "TotalTaxAmount": "2432",
                                    "FuelSurcharge": "0",
                                    "Commission": "0",
                                    "OtherInfo": {
                                        "TransactionFee": "0",
                                        "ServiceTax": "0",
                                        "GrossAmount": 4688,
                                        "Item": []
                                    }
                                },
                                {
                                    "PaxType": "ADT",
                                    "BasicAmount": "2256",
                                    "TotalTaxAmount": "2432",
                                    "FuelSurcharge": "0",
                                    "Commission": "0",
                                    "OtherInfo": {
                                        "TransactionFee": "0",
                                        "ServiceTax": "0",
                                        "GrossAmount": 4688,
                                        "Item": [
                                            {
                                                "TaxCode": "YQF",
                                                "Amount": "1200"
                                            },
                                            {
                                                "TaxCode": "YQF",
                                                "Amount": "600"
                                            },
                                            {
                                                "TaxCode": "YRF",
                                                "Amount": "125"
                                            },
                                            {
                                                "TaxCode": "YRF",
                                                "Amount": "125"
                                            },
                                            {
                                                "TaxCode": "IN",
                                                "Amount": "12"
                                            },
                                            {
                                                "TaxCode": "K38",
                                                "Amount": "216"
                                            },
                                            {
                                                "TaxCode": "WO",
                                                "Amount": "154"
                                            }
                                        ]
                                    }
                                }
                            ],
                            "FareBasis": [
                                {
                                    "Code": "W2AT15E",
                                    "DepartureTime": "2018-09-26T11:30:00",
                                    "OriginLocation": "DEL",
                                    "DestinationLocation": "BOM",
                                    "ValidatingCarrier": "9W",
                                    "PsgType": "ADT",
                                    "PsgQty": 1
                                },
                                {
                                    "Code": "W2AP08C",
                                    "DepartureTime": "2018-09-26T20:25:00",
                                    "OriginLocation": "BOM",
                                    "DestinationLocation": "BLR",
                                    "ValidatingCarrier": "9W",
                                    "PsgType": "ADT",
                                    "PsgQty": 1
                                }
                            ]
                        },
                        "Miles": null,
                        "ElapsedTime": [
                            "630"
                        ],
                        "ValidatingCarrier": "9W"
                    },
                    {
                        "ApiProvider": "SB",
                        "Connection": {
                            "Onward": {
                                "IsConnection": true,
                                "NoOfStops": 1,
                                "ConnectionAirport": [
                                    {
                                        "Origin": "DEL",
                                        "Destination": "BOM"
                                    },
                                    {
                                        "Origin": "BOM",
                                        "Destination": "BLR"
                                    }
                                ]
                            },
                            "Return": {
                                "IsConnection": false,
                                "NoOfStops": 0,
                                "ConnectionAirport": []
                            }
                        },
                        "FlightDetails": [
                            {
                                "FlightID": "316",
                                "CarrierCode": "9W",
                                "Origin": "DEL",
                                "Destination": "BOM",
                                "FlightNum": "316",
                                "DepartureDateTime": "2018-09-26T11:30:00",
                                "ArrivalDateTime": "2018-09-26T13:50:00",
                                "Duration": "140",
                                "OrgTerminal": "3",
                                "DesTerminal": "2",
                                "AirlineCategory": null,
                                "AirCraftType": "",
                                "Via": "",
                                "ValidatingCarrier": "9W",
                                "ClassCode": "W",
                                "ClassCodeDesc": "",
                                "FareBasisCode": "ADVJR1",
                                "BreakPoint": "",
                                "CurrencyCode": "INR",
                                "OriginAirportName": "Indira Gandhi International Airport",
                                "OriginAirportCity": "New Delhi",
                                "OriginAirportCountry": "India",
                                "DestinationAirportName": "Chhatrapati Shivaji International Airport",
                                "DestinationAirportCity": "Mumbai",
                                "DestinationAirportCountry": "India",
                                "AirlineName": "Jet Airways",
                                "MajorClassCode": "Economy",
                                "AirEquipType": "73H",
                                "MarriageGroup": "O",
                                "Baggage": {
                                    "Weight": null,
                                    "Unit": null,
                                    "Pieces": "1"
                                },
                                "MealCode": {
                                    "MealCode": "S",
                                    "MealCodeDescription": "Snack"
                                },
                                "IsStopAirport": false,
                                "JourneyType": "Onward"
                            },
                            {
                                "FlightID": "495",
                                "CarrierCode": "9W",
                                "Origin": "BOM",
                                "Destination": "BLR",
                                "FlightNum": "495",
                                "DepartureDateTime": "2018-09-26T21:35:00",
                                "ArrivalDateTime": "2018-09-26T23:10:00",
                                "Duration": "95",
                                "OrgTerminal": "2",
                                "DesTerminal": null,
                                "AirlineCategory": null,
                                "AirCraftType": "",
                                "Via": "",
                                "ValidatingCarrier": "9W",
                                "ClassCode": "W",
                                "ClassCodeDesc": "",
                                "FareBasisCode": "ADVJR1",
                                "BreakPoint": "",
                                "CurrencyCode": "INR",
                                "OriginAirportName": "Chhatrapati Shivaji International Airport",
                                "OriginAirportCity": "Mumbai",
                                "OriginAirportCountry": "India",
                                "DestinationAirportName": "Bengaluru International Airport",
                                "DestinationAirportCity": "Bangalore",
                                "DestinationAirportCountry": "India",
                                "AirlineName": "Jet Airways",
                                "MajorClassCode": "Economy",
                                "AirEquipType": "73H",
                                "MarriageGroup": "I",
                                "Baggage": {
                                    "Weight": null,
                                    "Unit": null,
                                    "Pieces": "1"
                                },
                                "MealCode": {
                                    "MealCode": "D",
                                    "MealCodeDescription": "Dinner"
                                },
                                "IsStopAirport": false,
                                "JourneyType": "Onward"
                            }
                        ],
                        "FareDescription": {
                            "IsNonRefundable": false,
                            "PaxFareDetails": [
                                {
                                    "PaxType": "AllPsg",
                                    "BasicAmount": "2256",
                                    "TotalTaxAmount": "2432",
                                    "FuelSurcharge": "0",
                                    "Commission": "0",
                                    "OtherInfo": {
                                        "TransactionFee": "0",
                                        "ServiceTax": "0",
                                        "GrossAmount": 4688,
                                        "Item": []
                                    }
                                },
                                {
                                    "PaxType": "ADT",
                                    "BasicAmount": "2256",
                                    "TotalTaxAmount": "2432",
                                    "FuelSurcharge": "0",
                                    "Commission": "0",
                                    "OtherInfo": {
                                        "TransactionFee": "0",
                                        "ServiceTax": "0",
                                        "GrossAmount": 4688,
                                        "Item": [
                                            {
                                                "TaxCode": "YQF",
                                                "Amount": "1200"
                                            },
                                            {
                                                "TaxCode": "YQF",
                                                "Amount": "600"
                                            },
                                            {
                                                "TaxCode": "YRF",
                                                "Amount": "125"
                                            },
                                            {
                                                "TaxCode": "YRF",
                                                "Amount": "125"
                                            },
                                            {
                                                "TaxCode": "IN",
                                                "Amount": "12"
                                            },
                                            {
                                                "TaxCode": "K38",
                                                "Amount": "216"
                                            },
                                            {
                                                "TaxCode": "WO",
                                                "Amount": "154"
                                            }
                                        ]
                                    }
                                }
                            ],
                            "FareBasis": [
                                {
                                    "Code": "W2AT15E",
                                    "DepartureTime": "2018-09-26T11:30:00",
                                    "OriginLocation": "DEL",
                                    "DestinationLocation": "BOM",
                                    "ValidatingCarrier": "9W",
                                    "PsgType": "ADT",
                                    "PsgQty": 1
                                },
                                {
                                    "Code": "W2AP08C",
                                    "DepartureTime": "2018-09-26T21:35:00",
                                    "OriginLocation": "BOM",
                                    "DestinationLocation": "BLR",
                                    "ValidatingCarrier": "9W",
                                    "PsgType": "ADT",
                                    "PsgQty": 1
                                }
                            ]
                        },
                        "Miles": null,
                        "ElapsedTime": [
                            "700"
                        ],
                        "ValidatingCarrier": "9W"
                    },
                    {
                        "ApiProvider": "SB",
                        "Connection": {
                            "Onward": {
                                "IsConnection": true,
                                "NoOfStops": 1,
                                "ConnectionAirport": [
                                    {
                                        "Origin": "DEL",
                                        "Destination": "BOM"
                                    },
                                    {
                                        "Origin": "BOM",
                                        "Destination": "BLR"
                                    }
                                ]
                            },
                            "Return": {
                                "IsConnection": false,
                                "NoOfStops": 0,
                                "ConnectionAirport": []
                            }
                        },
                        "FlightDetails": [
                            {
                                "FlightID": "349",
                                "CarrierCode": "AI",
                                "Origin": "DEL",
                                "Destination": "BOM",
                                "FlightNum": "349",
                                "DepartureDateTime": "2018-09-26T03:50:00",
                                "ArrivalDateTime": "2018-09-26T05:55:00",
                                "Duration": "125",
                                "OrgTerminal": "3",
                                "DesTerminal": "2",
                                "AirlineCategory": null,
                                "AirCraftType": "",
                                "Via": "",
                                "ValidatingCarrier": "AI",
                                "ClassCode": "S",
                                "ClassCodeDesc": "",
                                "FareBasisCode": "ADVJR1",
                                "BreakPoint": "",
                                "CurrencyCode": "INR",
                                "OriginAirportName": "Indira Gandhi International Airport",
                                "OriginAirportCity": "New Delhi",
                                "OriginAirportCountry": "India",
                                "DestinationAirportName": "Chhatrapati Shivaji International Airport",
                                "DestinationAirportCity": "Mumbai",
                                "DestinationAirportCountry": "India",
                                "AirlineName": "Air India",
                                "MajorClassCode": "Economy",
                                "AirEquipType": "788",
                                "MarriageGroup": "O",
                                "Baggage": {
                                    "Weight": "25",
                                    "Unit": "kg",
                                    "Pieces": "0"
                                },
                                "MealCode": {
                                    "MealCode": "M",
                                    "MealCodeDescription": "Meals"
                                },
                                "IsStopAirport": false,
                                "JourneyType": "Onward"
                            },
                            {
                                "FlightID": "639",
                                "CarrierCode": "AI",
                                "Origin": "BOM",
                                "Destination": "BLR",
                                "FlightNum": "639",
                                "DepartureDateTime": "2018-09-26T09:20:00",
                                "ArrivalDateTime": "2018-09-26T11:00:00",
                                "Duration": "100",
                                "OrgTerminal": "2",
                                "DesTerminal": null,
                                "AirlineCategory": null,
                                "AirCraftType": "",
                                "Via": "",
                                "ValidatingCarrier": "AI",
                                "ClassCode": "S",
                                "ClassCodeDesc": "",
                                "FareBasisCode": "ADVJR1",
                                "BreakPoint": "",
                                "CurrencyCode": "INR",
                                "OriginAirportName": "Chhatrapati Shivaji International Airport",
                                "OriginAirportCity": "Mumbai",
                                "OriginAirportCountry": "India",
                                "DestinationAirportName": "Bengaluru International Airport",
                                "DestinationAirportCity": "Bangalore",
                                "DestinationAirportCountry": "India",
                                "AirlineName": "Air India",
                                "MajorClassCode": "Economy",
                                "AirEquipType": "319",
                                "MarriageGroup": "O",
                                "Baggage": {
                                    "Weight": "25",
                                    "Unit": "kg",
                                    "Pieces": "0"
                                },
                                "MealCode": {
                                    "MealCode": "S",
                                    "MealCodeDescription": "Snack"
                                },
                                "IsStopAirport": false,
                                "JourneyType": "Onward"
                            }
                        ],
                        "FareDescription": {
                            "IsNonRefundable": false,
                            "PaxFareDetails": [
                                {
                                    "PaxType": "AllPsg",
                                    "BasicAmount": "4550",
                                    "TotalTaxAmount": "541",
                                    "FuelSurcharge": "0",
                                    "Commission": "0",
                                    "OtherInfo": {
                                        "TransactionFee": "0",
                                        "ServiceTax": "0",
                                        "GrossAmount": 5091,
                                        "Item": []
                                    }
                                },
                                {
                                    "PaxType": "ADT",
                                    "BasicAmount": "4550",
                                    "TotalTaxAmount": "541",
                                    "FuelSurcharge": "0",
                                    "Commission": "0",
                                    "OtherInfo": {
                                        "TransactionFee": "0",
                                        "ServiceTax": "0",
                                        "GrossAmount": 5091,
                                        "Item": [
                                            {
                                                "TaxCode": "YRI",
                                                "Amount": "70"
                                            },
                                            {
                                                "TaxCode": "YRI",
                                                "Amount": "70"
                                            },
                                            {
                                                "TaxCode": "IN",
                                                "Amount": "12"
                                            },
                                            {
                                                "TaxCode": "K38",
                                                "Amount": "235"
                                            },
                                            {
                                                "TaxCode": "WO",
                                                "Amount": "154"
                                            }
                                        ]
                                    }
                                }
                            ],
                            "FareBasis": [
                                {
                                    "Code": "SAP8",
                                    "DepartureTime": "2018-09-26T03:50:00",
                                    "OriginLocation": "DEL",
                                    "DestinationLocation": "BOM",
                                    "ValidatingCarrier": "AI",
                                    "PsgType": "ADT",
                                    "PsgQty": 1
                                },
                                {
                                    "Code": "SAP8",
                                    "DepartureTime": "2018-09-26T09:20:00",
                                    "OriginLocation": "BOM",
                                    "DestinationLocation": "BLR",
                                    "ValidatingCarrier": "AI",
                                    "PsgType": "ADT",
                                    "PsgQty": 1
                                }
                            ]
                        },
                        "Miles": null,
                        "ElapsedTime": [
                            "430"
                        ],
                        "ValidatingCarrier": "AI"
                    },
                    {
                        "ApiProvider": "SB",
                        "Connection": {
                            "Onward": {
                                "IsConnection": true,
                                "NoOfStops": 2,
                                "ConnectionAirport": [
                                    {
                                        "Origin": "DEL",
                                        "Destination": "BOM"
                                    },
                                    {
                                        "Origin": "BOM",
                                        "Destination": "HBX"
                                    },
                                    {
                                        "Origin": "HBX",
                                        "Destination": "BLR"
                                    }
                                ]
                            },
                            "Return": {
                                "IsConnection": false,
                                "NoOfStops": 0,
                                "ConnectionAirport": []
                            }
                        },
                        "FlightDetails": [
                            {
                                "FlightID": "865",
                                "CarrierCode": "AI",
                                "Origin": "DEL",
                                "Destination": "BOM",
                                "FlightNum": "865",
                                "DepartureDateTime": "2018-09-26T10:00:00",
                                "ArrivalDateTime": "2018-09-26T12:15:00",
                                "Duration": "135",
                                "OrgTerminal": "3",
                                "DesTerminal": "2",
                                "AirlineCategory": null,
                                "AirCraftType": "",
                                "Via": "",
                                "ValidatingCarrier": "AI",
                                "ClassCode": "S",
                                "ClassCodeDesc": "",
                                "FareBasisCode": "ADVJR1",
                                "BreakPoint": "",
                                "CurrencyCode": "INR",
                                "OriginAirportName": "Indira Gandhi International Airport",
                                "OriginAirportCity": "New Delhi",
                                "OriginAirportCountry": "India",
                                "DestinationAirportName": "Chhatrapati Shivaji International Airport",
                                "DestinationAirportCity": "Mumbai",
                                "DestinationAirportCountry": "India",
                                "AirlineName": "Air India",
                                "MajorClassCode": "Economy",
                                "AirEquipType": "32B",
                                "MarriageGroup": "O",
                                "Baggage": {
                                    "Weight": "25",
                                    "Unit": "kg",
                                    "Pieces": "0"
                                },
                                "MealCode": {
                                    "MealCode": "M",
                                    "MealCodeDescription": "Meals"
                                },
                                "IsStopAirport": false,
                                "JourneyType": "Onward"
                            },
                            {
                                "FlightID": "508",
                                "CarrierCode": "AI",
                                "Origin": "BOM",
                                "Destination": "HBX",
                                "FlightNum": "508",
                                "DepartureDateTime": "2018-09-26T15:25:00",
                                "ArrivalDateTime": "2018-09-26T16:35:00",
                                "Duration": "70",
                                "OrgTerminal": "2",
                                "DesTerminal": "",
                                "AirlineCategory": null,
                                "AirCraftType": "",
                                "Via": "",
                                "ValidatingCarrier": "AI",
                                "ClassCode": "S",
                                "ClassCodeDesc": "",
                                "FareBasisCode": "ADVJR1",
                                "BreakPoint": "",
                                "CurrencyCode": "INR",
                                "OriginAirportName": "Chhatrapati Shivaji International Airport",
                                "OriginAirportCity": "Mumbai",
                                "OriginAirportCountry": "India",
                                "DestinationAirportName": "Hubli Airport",
                                "DestinationAirportCity": "Hubli",
                                "DestinationAirportCountry": "India",
                                "AirlineName": "Air India",
                                "MajorClassCode": "Economy",
                                "AirEquipType": "319",
                                "MarriageGroup": "O",
                                "Baggage": {
                                    "Weight": "25",
                                    "Unit": "kg",
                                    "Pieces": "0"
                                },
                                "MealCode": {
                                    "MealCode": "S",
                                    "MealCodeDescription": "Snack"
                                },
                                "IsStopAirport": true,
                                "JourneyType": "Onward"
                            },
                            {
                                "FlightID": "508",
                                "CarrierCode": "AI",
                                "Origin": "HBX",
                                "Destination": "BLR",
                                "FlightNum": "508",
                                "DepartureDateTime": "2018-09-26T17:15:00",
                                "ArrivalDateTime": "2018-09-26T18:20:00",
                                "Duration": "65",
                                "OrgTerminal": "",
                                "DesTerminal": null,
                                "AirlineCategory": null,
                                "AirCraftType": "",
                                "Via": "",
                                "ValidatingCarrier": "AI",
                                "ClassCode": "S",
                                "ClassCodeDesc": "",
                                "FareBasisCode": "ADVJR1",
                                "BreakPoint": "",
                                "CurrencyCode": "INR",
                                "OriginAirportName": "Hubli Airport",
                                "OriginAirportCity": "Hubli",
                                "OriginAirportCountry": "India",
                                "DestinationAirportName": "Bengaluru International Airport",
                                "DestinationAirportCity": "Bangalore",
                                "DestinationAirportCountry": "India",
                                "AirlineName": "Air India",
                                "MajorClassCode": "Economy",
                                "AirEquipType": "319",
                                "MarriageGroup": "O",
                                "Baggage": {
                                    "Weight": "25",
                                    "Unit": "kg",
                                    "Pieces": "0"
                                },
                                "MealCode": {
                                    "MealCode": "S",
                                    "MealCodeDescription": "Snack"
                                },
                                "IsStopAirport": true,
                                "JourneyType": "Onward"
                            }
                        ],
                        "FareDescription": {
                            "IsNonRefundable": false,
                            "PaxFareDetails": [
                                {
                                    "PaxType": "AllPsg",
                                    "BasicAmount": "4550",
                                    "TotalTaxAmount": "541",
                                    "FuelSurcharge": "0",
                                    "Commission": "0",
                                    "OtherInfo": {
                                        "TransactionFee": "0",
                                        "ServiceTax": "0",
                                        "GrossAmount": 5091,
                                        "Item": []
                                    }
                                },
                                {
                                    "PaxType": "ADT",
                                    "BasicAmount": "4550",
                                    "TotalTaxAmount": "541",
                                    "FuelSurcharge": "0",
                                    "Commission": "0",
                                    "OtherInfo": {
                                        "TransactionFee": "0",
                                        "ServiceTax": "0",
                                        "GrossAmount": 5091,
                                        "Item": [
                                            {
                                                "TaxCode": "YRI",
                                                "Amount": "70"
                                            },
                                            {
                                                "TaxCode": "YRI",
                                                "Amount": "70"
                                            },
                                            {
                                                "TaxCode": "IN",
                                                "Amount": "12"
                                            },
                                            {
                                                "TaxCode": "K38",
                                                "Amount": "235"
                                            },
                                            {
                                                "TaxCode": "WO",
                                                "Amount": "154"
                                            }
                                        ]
                                    }
                                }
                            ],
                            "FareBasis": [
                                {
                                    "Code": "SAP8",
                                    "DepartureTime": "2018-09-26T10:00:00",
                                    "OriginLocation": "DEL",
                                    "DestinationLocation": "BOM",
                                    "ValidatingCarrier": "AI",
                                    "PsgType": "ADT",
                                    "PsgQty": 1
                                },
                                {
                                    "Code": "SAP8",
                                    "DepartureTime": "2018-09-26T15:25:00",
                                    "OriginLocation": "BOM",
                                    "DestinationLocation": "BLR",
                                    "ValidatingCarrier": "AI",
                                    "PsgType": "ADT",
                                    "PsgQty": 1
                                }
                            ]
                        },
                        "Miles": null,
                        "ElapsedTime": [
                            "500"
                        ],
                        "ValidatingCarrier": "AI"
                    },
                    {
                        "ApiProvider": "SB",
                        "Connection": {
                            "Onward": {
                                "IsConnection": true,
                                "NoOfStops": 1,
                                "ConnectionAirport": [
                                    {
                                        "Origin": "DEL",
                                        "Destination": "BOM"
                                    },
                                    {
                                        "Origin": "BOM",
                                        "Destination": "BLR"
                                    }
                                ]
                            },
                            "Return": {
                                "IsConnection": false,
                                "NoOfStops": 0,
                                "ConnectionAirport": []
                            }
                        },
                        "FlightDetails": [
                            {
                                "FlightID": "865",
                                "CarrierCode": "AI",
                                "Origin": "DEL",
                                "Destination": "BOM",
                                "FlightNum": "865",
                                "DepartureDateTime": "2018-09-26T10:00:00",
                                "ArrivalDateTime": "2018-09-26T12:15:00",
                                "Duration": "135",
                                "OrgTerminal": "3",
                                "DesTerminal": "2",
                                "AirlineCategory": null,
                                "AirCraftType": "",
                                "Via": "",
                                "ValidatingCarrier": "AI",
                                "ClassCode": "S",
                                "ClassCodeDesc": "",
                                "FareBasisCode": "ADVJR1",
                                "BreakPoint": "",
                                "CurrencyCode": "INR",
                                "OriginAirportName": "Indira Gandhi International Airport",
                                "OriginAirportCity": "New Delhi",
                                "OriginAirportCountry": "India",
                                "DestinationAirportName": "Chhatrapati Shivaji International Airport",
                                "DestinationAirportCity": "Mumbai",
                                "DestinationAirportCountry": "India",
                                "AirlineName": "Air India",
                                "MajorClassCode": "Economy",
                                "AirEquipType": "32B",
                                "MarriageGroup": "O",
                                "Baggage": {
                                    "Weight": "25",
                                    "Unit": "kg",
                                    "Pieces": "0"
                                },
                                "MealCode": {
                                    "MealCode": "M",
                                    "MealCodeDescription": "Meals"
                                },
                                "IsStopAirport": false,
                                "JourneyType": "Onward"
                            },
                            {
                                "FlightID": "607",
                                "CarrierCode": "AI",
                                "Origin": "BOM",
                                "Destination": "BLR",
                                "FlightNum": "607",
                                "DepartureDateTime": "2018-09-26T16:40:00",
                                "ArrivalDateTime": "2018-09-26T18:30:00",
                                "Duration": "110",
                                "OrgTerminal": "2",
                                "DesTerminal": null,
                                "AirlineCategory": null,
                                "AirCraftType": "",
                                "Via": "",
                                "ValidatingCarrier": "AI",
                                "ClassCode": "S",
                                "ClassCodeDesc": "",
                                "FareBasisCode": "ADVJR1",
                                "BreakPoint": "",
                                "CurrencyCode": "INR",
                                "OriginAirportName": "Chhatrapati Shivaji International Airport",
                                "OriginAirportCity": "Mumbai",
                                "OriginAirportCountry": "India",
                                "DestinationAirportName": "Bengaluru International Airport",
                                "DestinationAirportCity": "Bangalore",
                                "DestinationAirportCountry": "India",
                                "AirlineName": "Air India",
                                "MajorClassCode": "Economy",
                                "AirEquipType": "319",
                                "MarriageGroup": "O",
                                "Baggage": {
                                    "Weight": "25",
                                    "Unit": "kg",
                                    "Pieces": "0"
                                },
                                "MealCode": {
                                    "MealCode": "S",
                                    "MealCodeDescription": "Snack"
                                },
                                "IsStopAirport": false,
                                "JourneyType": "Onward"
                            }
                        ],
                        "FareDescription": {
                            "IsNonRefundable": false,
                            "PaxFareDetails": [
                                {
                                    "PaxType": "AllPsg",
                                    "BasicAmount": "4550",
                                    "TotalTaxAmount": "541",
                                    "FuelSurcharge": "0",
                                    "Commission": "0",
                                    "OtherInfo": {
                                        "TransactionFee": "0",
                                        "ServiceTax": "0",
                                        "GrossAmount": 5091,
                                        "Item": []
                                    }
                                },
                                {
                                    "PaxType": "ADT",
                                    "BasicAmount": "4550",
                                    "TotalTaxAmount": "541",
                                    "FuelSurcharge": "0",
                                    "Commission": "0",
                                    "OtherInfo": {
                                        "TransactionFee": "0",
                                        "ServiceTax": "0",
                                        "GrossAmount": 5091,
                                        "Item": [
                                            {
                                                "TaxCode": "YRI",
                                                "Amount": "70"
                                            },
                                            {
                                                "TaxCode": "YRI",
                                                "Amount": "70"
                                            },
                                            {
                                                "TaxCode": "IN",
                                                "Amount": "12"
                                            },
                                            {
                                                "TaxCode": "K38",
                                                "Amount": "235"
                                            },
                                            {
                                                "TaxCode": "WO",
                                                "Amount": "154"
                                            }
                                        ]
                                    }
                                }
                            ],
                            "FareBasis": [
                                {
                                    "Code": "SAP8",
                                    "DepartureTime": "2018-09-26T10:00:00",
                                    "OriginLocation": "DEL",
                                    "DestinationLocation": "BOM",
                                    "ValidatingCarrier": "AI",
                                    "PsgType": "ADT",
                                    "PsgQty": 1
                                },
                                {
                                    "Code": "SAP8",
                                    "DepartureTime": "2018-09-26T16:40:00",
                                    "OriginLocation": "BOM",
                                    "DestinationLocation": "BLR",
                                    "ValidatingCarrier": "AI",
                                    "PsgType": "ADT",
                                    "PsgQty": 1
                                }
                            ]
                        },
                        "Miles": null,
                        "ElapsedTime": [
                            "510"
                        ],
                        "ValidatingCarrier": "AI"
                    },
                    {
                        "ApiProvider": "SB",
                        "Connection": {
                            "Onward": {
                                "IsConnection": true,
                                "NoOfStops": 1,
                                "ConnectionAirport": [
                                    {
                                        "Origin": "DEL",
                                        "Destination": "BOM"
                                    },
                                    {
                                        "Origin": "BOM",
                                        "Destination": "BLR"
                                    }
                                ]
                            },
                            "Return": {
                                "IsConnection": false,
                                "NoOfStops": 0,
                                "ConnectionAirport": []
                            }
                        },
                        "FlightDetails": [
                            {
                                "FlightID": "317",
                                "CarrierCode": "AI",
                                "Origin": "DEL",
                                "Destination": "BOM",
                                "FlightNum": "317",
                                "DepartureDateTime": "2018-09-26T23:00:00",
                                "ArrivalDateTime": "2018-09-27T01:15:00",
                                "Duration": "135",
                                "OrgTerminal": "3",
                                "DesTerminal": "2",
                                "AirlineCategory": null,
                                "AirCraftType": "",
                                "Via": "",
                                "ValidatingCarrier": "AI",
                                "ClassCode": "S",
                                "ClassCodeDesc": "",
                                "FareBasisCode": "ADVJR1",
                                "BreakPoint": "",
                                "CurrencyCode": "INR",
                                "OriginAirportName": "Indira Gandhi International Airport",
                                "OriginAirportCity": "New Delhi",
                                "OriginAirportCountry": "India",
                                "DestinationAirportName": "Chhatrapati Shivaji International Airport",
                                "DestinationAirportCity": "Mumbai",
                                "DestinationAirportCountry": "India",
                                "AirlineName": "Air India",
                                "MajorClassCode": "Economy",
                                "AirEquipType": "788",
                                "MarriageGroup": "O",
                                "Baggage": {
                                    "Weight": "25",
                                    "Unit": "kg",
                                    "Pieces": "0"
                                },
                                "MealCode": {
                                    "MealCode": "M",
                                    "MealCodeDescription": "Meals"
                                },
                                "IsStopAirport": false,
                                "JourneyType": "Onward"
                            },
                            {
                                "FlightID": "603",
                                "CarrierCode": "AI",
                                "Origin": "BOM",
                                "Destination": "BLR",
                                "FlightNum": "603",
                                "DepartureDateTime": "2018-09-27T06:15:00",
                                "ArrivalDateTime": "2018-09-27T07:50:00",
                                "Duration": "95",
                                "OrgTerminal": "2",
                                "DesTerminal": null,
                                "AirlineCategory": null,
                                "AirCraftType": "",
                                "Via": "",
                                "ValidatingCarrier": "AI",
                                "ClassCode": "S",
                                "ClassCodeDesc": "",
                                "FareBasisCode": "ADVJR1",
                                "BreakPoint": "",
                                "CurrencyCode": "INR",
                                "OriginAirportName": "Chhatrapati Shivaji International Airport",
                                "OriginAirportCity": "Mumbai",
                                "OriginAirportCountry": "India",
                                "DestinationAirportName": "Bengaluru International Airport",
                                "DestinationAirportCity": "Bangalore",
                                "DestinationAirportCountry": "India",
                                "AirlineName": "Air India",
                                "MajorClassCode": "Economy",
                                "AirEquipType": "32B",
                                "MarriageGroup": "O",
                                "Baggage": {
                                    "Weight": "25",
                                    "Unit": "kg",
                                    "Pieces": "0"
                                },
                                "MealCode": {
                                    "MealCode": "B",
                                    "MealCodeDescription": "Breakfast"
                                },
                                "IsStopAirport": false,
                                "JourneyType": "Onward"
                            }
                        ],
                        "FareDescription": {
                            "IsNonRefundable": false,
                            "PaxFareDetails": [
                                {
                                    "PaxType": "AllPsg",
                                    "BasicAmount": "4550",
                                    "TotalTaxAmount": "541",
                                    "FuelSurcharge": "0",
                                    "Commission": "0",
                                    "OtherInfo": {
                                        "TransactionFee": "0",
                                        "ServiceTax": "0",
                                        "GrossAmount": 5091,
                                        "Item": []
                                    }
                                },
                                {
                                    "PaxType": "ADT",
                                    "BasicAmount": "4550",
                                    "TotalTaxAmount": "541",
                                    "FuelSurcharge": "0",
                                    "Commission": "0",
                                    "OtherInfo": {
                                        "TransactionFee": "0",
                                        "ServiceTax": "0",
                                        "GrossAmount": 5091,
                                        "Item": [
                                            {
                                                "TaxCode": "YRI",
                                                "Amount": "70"
                                            },
                                            {
                                                "TaxCode": "YRI",
                                                "Amount": "70"
                                            },
                                            {
                                                "TaxCode": "IN",
                                                "Amount": "12"
                                            },
                                            {
                                                "TaxCode": "K38",
                                                "Amount": "235"
                                            },
                                            {
                                                "TaxCode": "WO",
                                                "Amount": "154"
                                            }
                                        ]
                                    }
                                }
                            ],
                            "FareBasis": [
                                {
                                    "Code": "SAP8",
                                    "DepartureTime": "2018-09-26T23:00:00",
                                    "OriginLocation": "DEL",
                                    "DestinationLocation": "BOM",
                                    "ValidatingCarrier": "AI",
                                    "PsgType": "ADT",
                                    "PsgQty": 1
                                },
                                {
                                    "Code": "SAP8",
                                    "DepartureTime": "2018-09-27T06:15:00",
                                    "OriginLocation": "BOM",
                                    "DestinationLocation": "BLR",
                                    "ValidatingCarrier": "AI",
                                    "PsgType": "ADT",
                                    "PsgQty": 1
                                }
                            ]
                        },
                        "Miles": null,
                        "ElapsedTime": [
                            "530"
                        ],
                        "ValidatingCarrier": "AI"
                    },
                    {
                        "ApiProvider": "SB",
                        "Connection": {
                            "Onward": {
                                "IsConnection": true,
                                "NoOfStops": 2,
                                "ConnectionAirport": [
                                    {
                                        "Origin": "DEL",
                                        "Destination": "BOM"
                                    },
                                    {
                                        "Origin": "BOM",
                                        "Destination": "HBX"
                                    },
                                    {
                                        "Origin": "HBX",
                                        "Destination": "BLR"
                                    }
                                ]
                            },
                            "Return": {
                                "IsConnection": false,
                                "NoOfStops": 0,
                                "ConnectionAirport": []
                            }
                        },
                        "FlightDetails": [
                            {
                                "FlightID": "665",
                                "CarrierCode": "AI",
                                "Origin": "DEL",
                                "Destination": "BOM",
                                "FlightNum": "665",
                                "DepartureDateTime": "2018-09-26T08:00:00",
                                "ArrivalDateTime": "2018-09-26T10:10:00",
                                "Duration": "130",
                                "OrgTerminal": "3",
                                "DesTerminal": "2",
                                "AirlineCategory": null,
                                "AirCraftType": "",
                                "Via": "",
                                "ValidatingCarrier": "AI",
                                "ClassCode": "S",
                                "ClassCodeDesc": "",
                                "FareBasisCode": "ADVJR1",
                                "BreakPoint": "",
                                "CurrencyCode": "INR",
                                "OriginAirportName": "Indira Gandhi International Airport",
                                "OriginAirportCity": "New Delhi",
                                "OriginAirportCountry": "India",
                                "DestinationAirportName": "Chhatrapati Shivaji International Airport",
                                "DestinationAirportCity": "Mumbai",
                                "DestinationAirportCountry": "India",
                                "AirlineName": "Air India",
                                "MajorClassCode": "Economy",
                                "AirEquipType": "321",
                                "MarriageGroup": "O",
                                "Baggage": {
                                    "Weight": "25",
                                    "Unit": "kg",
                                    "Pieces": "0"
                                },
                                "MealCode": {
                                    "MealCode": "B",
                                    "MealCodeDescription": "Breakfast"
                                },
                                "IsStopAirport": false,
                                "JourneyType": "Onward"
                            },
                            {
                                "FlightID": "508",
                                "CarrierCode": "AI",
                                "Origin": "BOM",
                                "Destination": "HBX",
                                "FlightNum": "508",
                                "DepartureDateTime": "2018-09-26T15:25:00",
                                "ArrivalDateTime": "2018-09-26T16:35:00",
                                "Duration": "70",
                                "OrgTerminal": "2",
                                "DesTerminal": "",
                                "AirlineCategory": null,
                                "AirCraftType": "",
                                "Via": "",
                                "ValidatingCarrier": "AI",
                                "ClassCode": "S",
                                "ClassCodeDesc": "",
                                "FareBasisCode": "ADVJR1",
                                "BreakPoint": "",
                                "CurrencyCode": "INR",
                                "OriginAirportName": "Chhatrapati Shivaji International Airport",
                                "OriginAirportCity": "Mumbai",
                                "OriginAirportCountry": "India",
                                "DestinationAirportName": "Hubli Airport",
                                "DestinationAirportCity": "Hubli",
                                "DestinationAirportCountry": "India",
                                "AirlineName": "Air India",
                                "MajorClassCode": "Economy",
                                "AirEquipType": "319",
                                "MarriageGroup": "O",
                                "Baggage": {
                                    "Weight": "25",
                                    "Unit": "kg",
                                    "Pieces": "0"
                                },
                                "MealCode": {
                                    "MealCode": "S",
                                    "MealCodeDescription": "Snack"
                                },
                                "IsStopAirport": true,
                                "JourneyType": "Onward"
                            },
                            {
                                "FlightID": "508",
                                "CarrierCode": "AI",
                                "Origin": "HBX",
                                "Destination": "BLR",
                                "FlightNum": "508",
                                "DepartureDateTime": "2018-09-26T17:15:00",
                                "ArrivalDateTime": "2018-09-26T18:20:00",
                                "Duration": "65",
                                "OrgTerminal": "",
                                "DesTerminal": null,
                                "AirlineCategory": null,
                                "AirCraftType": "",
                                "Via": "",
                                "ValidatingCarrier": "AI",
                                "ClassCode": "S",
                                "ClassCodeDesc": "",
                                "FareBasisCode": "ADVJR1",
                                "BreakPoint": "",
                                "CurrencyCode": "INR",
                                "OriginAirportName": "Hubli Airport",
                                "OriginAirportCity": "Hubli",
                                "OriginAirportCountry": "India",
                                "DestinationAirportName": "Bengaluru International Airport",
                                "DestinationAirportCity": "Bangalore",
                                "DestinationAirportCountry": "India",
                                "AirlineName": "Air India",
                                "MajorClassCode": "Economy",
                                "AirEquipType": "319",
                                "MarriageGroup": "O",
                                "Baggage": {
                                    "Weight": "25",
                                    "Unit": "kg",
                                    "Pieces": "0"
                                },
                                "MealCode": {
                                    "MealCode": "S",
                                    "MealCodeDescription": "Snack"
                                },
                                "IsStopAirport": true,
                                "JourneyType": "Onward"
                            }
                        ],
                        "FareDescription": {
                            "IsNonRefundable": false,
                            "PaxFareDetails": [
                                {
                                    "PaxType": "AllPsg",
                                    "BasicAmount": "4550",
                                    "TotalTaxAmount": "541",
                                    "FuelSurcharge": "0",
                                    "Commission": "0",
                                    "OtherInfo": {
                                        "TransactionFee": "0",
                                        "ServiceTax": "0",
                                        "GrossAmount": 5091,
                                        "Item": []
                                    }
                                },
                                {
                                    "PaxType": "ADT",
                                    "BasicAmount": "4550",
                                    "TotalTaxAmount": "541",
                                    "FuelSurcharge": "0",
                                    "Commission": "0",
                                    "OtherInfo": {
                                        "TransactionFee": "0",
                                        "ServiceTax": "0",
                                        "GrossAmount": 5091,
                                        "Item": [
                                            {
                                                "TaxCode": "YRI",
                                                "Amount": "70"
                                            },
                                            {
                                                "TaxCode": "YRI",
                                                "Amount": "70"
                                            },
                                            {
                                                "TaxCode": "IN",
                                                "Amount": "12"
                                            },
                                            {
                                                "TaxCode": "K38",
                                                "Amount": "235"
                                            },
                                            {
                                                "TaxCode": "WO",
                                                "Amount": "154"
                                            }
                                        ]
                                    }
                                }
                            ],
                            "FareBasis": [
                                {
                                    "Code": "SAP8",
                                    "DepartureTime": "2018-09-26T08:00:00",
                                    "OriginLocation": "DEL",
                                    "DestinationLocation": "BOM",
                                    "ValidatingCarrier": "AI",
                                    "PsgType": "ADT",
                                    "PsgQty": 1
                                },
                                {
                                    "Code": "SAP8",
                                    "DepartureTime": "2018-09-26T15:25:00",
                                    "OriginLocation": "BOM",
                                    "DestinationLocation": "BLR",
                                    "ValidatingCarrier": "AI",
                                    "PsgType": "ADT",
                                    "PsgQty": 1
                                }
                            ]
                        },
                        "Miles": null,
                        "ElapsedTime": [
                            "620"
                        ],
                        "ValidatingCarrier": "AI"
                    },
                    {
                        "ApiProvider": "SB",
                        "Connection": {
                            "Onward": {
                                "IsConnection": true,
                                "NoOfStops": 1,
                                "ConnectionAirport": [
                                    {
                                        "Origin": "DEL",
                                        "Destination": "BOM"
                                    },
                                    {
                                        "Origin": "BOM",
                                        "Destination": "BLR"
                                    }
                                ]
                            },
                            "Return": {
                                "IsConnection": false,
                                "NoOfStops": 0,
                                "ConnectionAirport": []
                            }
                        },
                        "FlightDetails": [
                            {
                                "FlightID": "665",
                                "CarrierCode": "AI",
                                "Origin": "DEL",
                                "Destination": "BOM",
                                "FlightNum": "665",
                                "DepartureDateTime": "2018-09-26T08:00:00",
                                "ArrivalDateTime": "2018-09-26T10:10:00",
                                "Duration": "130",
                                "OrgTerminal": "3",
                                "DesTerminal": "2",
                                "AirlineCategory": null,
                                "AirCraftType": "",
                                "Via": "",
                                "ValidatingCarrier": "AI",
                                "ClassCode": "S",
                                "ClassCodeDesc": "",
                                "FareBasisCode": "ADVJR1",
                                "BreakPoint": "",
                                "CurrencyCode": "INR",
                                "OriginAirportName": "Indira Gandhi International Airport",
                                "OriginAirportCity": "New Delhi",
                                "OriginAirportCountry": "India",
                                "DestinationAirportName": "Chhatrapati Shivaji International Airport",
                                "DestinationAirportCity": "Mumbai",
                                "DestinationAirportCountry": "India",
                                "AirlineName": "Air India",
                                "MajorClassCode": "Economy",
                                "AirEquipType": "321",
                                "MarriageGroup": "O",
                                "Baggage": {
                                    "Weight": "25",
                                    "Unit": "kg",
                                    "Pieces": "0"
                                },
                                "MealCode": {
                                    "MealCode": "B",
                                    "MealCodeDescription": "Breakfast"
                                },
                                "IsStopAirport": false,
                                "JourneyType": "Onward"
                            },
                            {
                                "FlightID": "607",
                                "CarrierCode": "AI",
                                "Origin": "BOM",
                                "Destination": "BLR",
                                "FlightNum": "607",
                                "DepartureDateTime": "2018-09-26T16:40:00",
                                "ArrivalDateTime": "2018-09-26T18:30:00",
                                "Duration": "110",
                                "OrgTerminal": "2",
                                "DesTerminal": null,
                                "AirlineCategory": null,
                                "AirCraftType": "",
                                "Via": "",
                                "ValidatingCarrier": "AI",
                                "ClassCode": "S",
                                "ClassCodeDesc": "",
                                "FareBasisCode": "ADVJR1",
                                "BreakPoint": "",
                                "CurrencyCode": "INR",
                                "OriginAirportName": "Chhatrapati Shivaji International Airport",
                                "OriginAirportCity": "Mumbai",
                                "OriginAirportCountry": "India",
                                "DestinationAirportName": "Bengaluru International Airport",
                                "DestinationAirportCity": "Bangalore",
                                "DestinationAirportCountry": "India",
                                "AirlineName": "Air India",
                                "MajorClassCode": "Economy",
                                "AirEquipType": "319",
                                "MarriageGroup": "O",
                                "Baggage": {
                                    "Weight": "25",
                                    "Unit": "kg",
                                    "Pieces": "0"
                                },
                                "MealCode": {
                                    "MealCode": "S",
                                    "MealCodeDescription": "Snack"
                                },
                                "IsStopAirport": false,
                                "JourneyType": "Onward"
                            }
                        ],
                        "FareDescription": {
                            "IsNonRefundable": false,
                            "PaxFareDetails": [
                                {
                                    "PaxType": "AllPsg",
                                    "BasicAmount": "4550",
                                    "TotalTaxAmount": "541",
                                    "FuelSurcharge": "0",
                                    "Commission": "0",
                                    "OtherInfo": {
                                        "TransactionFee": "0",
                                        "ServiceTax": "0",
                                        "GrossAmount": 5091,
                                        "Item": []
                                    }
                                },
                                {
                                    "PaxType": "ADT",
                                    "BasicAmount": "4550",
                                    "TotalTaxAmount": "541",
                                    "FuelSurcharge": "0",
                                    "Commission": "0",
                                    "OtherInfo": {
                                        "TransactionFee": "0",
                                        "ServiceTax": "0",
                                        "GrossAmount": 5091,
                                        "Item": [
                                            {
                                                "TaxCode": "YRI",
                                                "Amount": "70"
                                            },
                                            {
                                                "TaxCode": "YRI",
                                                "Amount": "70"
                                            },
                                            {
                                                "TaxCode": "IN",
                                                "Amount": "12"
                                            },
                                            {
                                                "TaxCode": "K38",
                                                "Amount": "235"
                                            },
                                            {
                                                "TaxCode": "WO",
                                                "Amount": "154"
                                            }
                                        ]
                                    }
                                }
                            ],
                            "FareBasis": [
                                {
                                    "Code": "SAP8",
                                    "DepartureTime": "2018-09-26T08:00:00",
                                    "OriginLocation": "DEL",
                                    "DestinationLocation": "BOM",
                                    "ValidatingCarrier": "AI",
                                    "PsgType": "ADT",
                                    "PsgQty": 1
                                },
                                {
                                    "Code": "SAP8",
                                    "DepartureTime": "2018-09-26T16:40:00",
                                    "OriginLocation": "BOM",
                                    "DestinationLocation": "BLR",
                                    "ValidatingCarrier": "AI",
                                    "PsgType": "ADT",
                                    "PsgQty": 1
                                }
                            ]
                        },
                        "Miles": null,
                        "ElapsedTime": [
                            "630"
                        ],
                        "ValidatingCarrier": "AI"
                    },
                    {
                        "ApiProvider": "SB",
                        "Connection": {
                            "Onward": {
                                "IsConnection": true,
                                "NoOfStops": 1,
                                "ConnectionAirport": [
                                    {
                                        "Origin": "DEL",
                                        "Destination": "BOM"
                                    },
                                    {
                                        "Origin": "BOM",
                                        "Destination": "BLR"
                                    }
                                ]
                            },
                            "Return": {
                                "IsConnection": false,
                                "NoOfStops": 0,
                                "ConnectionAirport": []
                            }
                        },
                        "FlightDetails": [
                            {
                                "FlightID": "191",
                                "CarrierCode": "AI",
                                "Origin": "DEL",
                                "Destination": "BOM",
                                "FlightNum": "191",
                                "DepartureDateTime": "2018-09-26T21:00:00",
                                "ArrivalDateTime": "2018-09-26T23:10:00",
                                "Duration": "130",
                                "OrgTerminal": "3",
                                "DesTerminal": "2",
                                "AirlineCategory": null,
                                "AirCraftType": "",
                                "Via": "",
                                "ValidatingCarrier": "AI",
                                "ClassCode": "S",
                                "ClassCodeDesc": "",
                                "FareBasisCode": "ADVJR1",
                                "BreakPoint": "",
                                "CurrencyCode": "INR",
                                "OriginAirportName": "Indira Gandhi International Airport",
                                "OriginAirportCity": "New Delhi",
                                "OriginAirportCountry": "India",
                                "DestinationAirportName": "Chhatrapati Shivaji International Airport",
                                "DestinationAirportCity": "Mumbai",
                                "DestinationAirportCountry": "India",
                                "AirlineName": "Air India",
                                "MajorClassCode": "Economy",
                                "AirEquipType": "77W",
                                "MarriageGroup": "O",
                                "Baggage": {
                                    "Weight": "25",
                                    "Unit": "kg",
                                    "Pieces": "0"
                                },
                                "MealCode": {
                                    "MealCode": "S",
                                    "MealCodeDescription": "Snack"
                                },
                                "IsStopAirport": false,
                                "JourneyType": "Onward"
                            },
                            {
                                "FlightID": "603",
                                "CarrierCode": "AI",
                                "Origin": "BOM",
                                "Destination": "BLR",
                                "FlightNum": "603",
                                "DepartureDateTime": "2018-09-27T06:15:00",
                                "ArrivalDateTime": "2018-09-27T07:50:00",
                                "Duration": "95",
                                "OrgTerminal": "2",
                                "DesTerminal": null,
                                "AirlineCategory": null,
                                "AirCraftType": "",
                                "Via": "",
                                "ValidatingCarrier": "AI",
                                "ClassCode": "S",
                                "ClassCodeDesc": "",
                                "FareBasisCode": "ADVJR1",
                                "BreakPoint": "",
                                "CurrencyCode": "INR",
                                "OriginAirportName": "Chhatrapati Shivaji International Airport",
                                "OriginAirportCity": "Mumbai",
                                "OriginAirportCountry": "India",
                                "DestinationAirportName": "Bengaluru International Airport",
                                "DestinationAirportCity": "Bangalore",
                                "DestinationAirportCountry": "India",
                                "AirlineName": "Air India",
                                "MajorClassCode": "Economy",
                                "AirEquipType": "32B",
                                "MarriageGroup": "O",
                                "Baggage": {
                                    "Weight": "25",
                                    "Unit": "kg",
                                    "Pieces": "0"
                                },
                                "MealCode": {
                                    "MealCode": "B",
                                    "MealCodeDescription": "Breakfast"
                                },
                                "IsStopAirport": false,
                                "JourneyType": "Onward"
                            }
                        ],
                        "FareDescription": {
                            "IsNonRefundable": false,
                            "PaxFareDetails": [
                                {
                                    "PaxType": "AllPsg",
                                    "BasicAmount": "4550",
                                    "TotalTaxAmount": "541",
                                    "FuelSurcharge": "0",
                                    "Commission": "0",
                                    "OtherInfo": {
                                        "TransactionFee": "0",
                                        "ServiceTax": "0",
                                        "GrossAmount": 5091,
                                        "Item": []
                                    }
                                },
                                {
                                    "PaxType": "ADT",
                                    "BasicAmount": "4550",
                                    "TotalTaxAmount": "541",
                                    "FuelSurcharge": "0",
                                    "Commission": "0",
                                    "OtherInfo": {
                                        "TransactionFee": "0",
                                        "ServiceTax": "0",
                                        "GrossAmount": 5091,
                                        "Item": [
                                            {
                                                "TaxCode": "YRI",
                                                "Amount": "70"
                                            },
                                            {
                                                "TaxCode": "YRI",
                                                "Amount": "70"
                                            },
                                            {
                                                "TaxCode": "IN",
                                                "Amount": "12"
                                            },
                                            {
                                                "TaxCode": "K38",
                                                "Amount": "235"
                                            },
                                            {
                                                "TaxCode": "WO",
                                                "Amount": "154"
                                            }
                                        ]
                                    }
                                }
                            ],
                            "FareBasis": [
                                {
                                    "Code": "SAP8",
                                    "DepartureTime": "2018-09-26T21:00:00",
                                    "OriginLocation": "DEL",
                                    "DestinationLocation": "BOM",
                                    "ValidatingCarrier": "AI",
                                    "PsgType": "ADT",
                                    "PsgQty": 1
                                },
                                {
                                    "Code": "SAP8",
                                    "DepartureTime": "2018-09-27T06:15:00",
                                    "OriginLocation": "BOM",
                                    "DestinationLocation": "BLR",
                                    "ValidatingCarrier": "AI",
                                    "PsgType": "ADT",
                                    "PsgQty": 1
                                }
                            ]
                        },
                        "Miles": null,
                        "ElapsedTime": [
                            "650"
                        ],
                        "ValidatingCarrier": "AI"
                    },
                    {
                        "ApiProvider": "SB",
                        "Connection": {
                            "Onward": {
                                "IsConnection": true,
                                "NoOfStops": 2,
                                "ConnectionAirport": [
                                    {
                                        "Origin": "DEL",
                                        "Destination": "BOM"
                                    },
                                    {
                                        "Origin": "BOM",
                                        "Destination": "HBX"
                                    },
                                    {
                                        "Origin": "HBX",
                                        "Destination": "BLR"
                                    }
                                ]
                            },
                            "Return": {
                                "IsConnection": false,
                                "NoOfStops": 0,
                                "ConnectionAirport": []
                            }
                        },
                        "FlightDetails": [
                            {
                                "FlightID": "887",
                                "CarrierCode": "AI",
                                "Origin": "DEL",
                                "Destination": "BOM",
                                "FlightNum": "887",
                                "DepartureDateTime": "2018-09-26T07:00:00",
                                "ArrivalDateTime": "2018-09-26T09:05:00",
                                "Duration": "125",
                                "OrgTerminal": "3",
                                "DesTerminal": "2",
                                "AirlineCategory": null,
                                "AirCraftType": "",
                                "Via": "",
                                "ValidatingCarrier": "AI",
                                "ClassCode": "S",
                                "ClassCodeDesc": "",
                                "FareBasisCode": "ADVJR1",
                                "BreakPoint": "",
                                "CurrencyCode": "INR",
                                "OriginAirportName": "Indira Gandhi International Airport",
                                "OriginAirportCity": "New Delhi",
                                "OriginAirportCountry": "India",
                                "DestinationAirportName": "Chhatrapati Shivaji International Airport",
                                "DestinationAirportCity": "Mumbai",
                                "DestinationAirportCountry": "India",
                                "AirlineName": "Air India",
                                "MajorClassCode": "Economy",
                                "AirEquipType": "32B",
                                "MarriageGroup": "O",
                                "Baggage": {
                                    "Weight": "25",
                                    "Unit": "kg",
                                    "Pieces": "0"
                                },
                                "MealCode": {
                                    "MealCode": "S",
                                    "MealCodeDescription": "Snack"
                                },
                                "IsStopAirport": false,
                                "JourneyType": "Onward"
                            },
                            {
                                "FlightID": "508",
                                "CarrierCode": "AI",
                                "Origin": "BOM",
                                "Destination": "HBX",
                                "FlightNum": "508",
                                "DepartureDateTime": "2018-09-26T15:25:00",
                                "ArrivalDateTime": "2018-09-26T16:35:00",
                                "Duration": "70",
                                "OrgTerminal": "2",
                                "DesTerminal": "",
                                "AirlineCategory": null,
                                "AirCraftType": "",
                                "Via": "",
                                "ValidatingCarrier": "AI",
                                "ClassCode": "S",
                                "ClassCodeDesc": "",
                                "FareBasisCode": "ADVJR1",
                                "BreakPoint": "",
                                "CurrencyCode": "INR",
                                "OriginAirportName": "Chhatrapati Shivaji International Airport",
                                "OriginAirportCity": "Mumbai",
                                "OriginAirportCountry": "India",
                                "DestinationAirportName": "Hubli Airport",
                                "DestinationAirportCity": "Hubli",
                                "DestinationAirportCountry": "India",
                                "AirlineName": "Air India",
                                "MajorClassCode": "Economy",
                                "AirEquipType": "319",
                                "MarriageGroup": "O",
                                "Baggage": {
                                    "Weight": "25",
                                    "Unit": "kg",
                                    "Pieces": "0"
                                },
                                "MealCode": {
                                    "MealCode": "S",
                                    "MealCodeDescription": "Snack"
                                },
                                "IsStopAirport": true,
                                "JourneyType": "Onward"
                            },
                            {
                                "FlightID": "508",
                                "CarrierCode": "AI",
                                "Origin": "HBX",
                                "Destination": "BLR",
                                "FlightNum": "508",
                                "DepartureDateTime": "2018-09-26T17:15:00",
                                "ArrivalDateTime": "2018-09-26T18:20:00",
                                "Duration": "65",
                                "OrgTerminal": "",
                                "DesTerminal": null,
                                "AirlineCategory": null,
                                "AirCraftType": "",
                                "Via": "",
                                "ValidatingCarrier": "AI",
                                "ClassCode": "S",
                                "ClassCodeDesc": "",
                                "FareBasisCode": "ADVJR1",
                                "BreakPoint": "",
                                "CurrencyCode": "INR",
                                "OriginAirportName": "Hubli Airport",
                                "OriginAirportCity": "Hubli",
                                "OriginAirportCountry": "India",
                                "DestinationAirportName": "Bengaluru International Airport",
                                "DestinationAirportCity": "Bangalore",
                                "DestinationAirportCountry": "India",
                                "AirlineName": "Air India",
                                "MajorClassCode": "Economy",
                                "AirEquipType": "319",
                                "MarriageGroup": "O",
                                "Baggage": {
                                    "Weight": "25",
                                    "Unit": "kg",
                                    "Pieces": "0"
                                },
                                "MealCode": {
                                    "MealCode": "S",
                                    "MealCodeDescription": "Snack"
                                },
                                "IsStopAirport": true,
                                "JourneyType": "Onward"
                            }
                        ],
                        "FareDescription": {
                            "IsNonRefundable": false,
                            "PaxFareDetails": [
                                {
                                    "PaxType": "AllPsg",
                                    "BasicAmount": "4550",
                                    "TotalTaxAmount": "541",
                                    "FuelSurcharge": "0",
                                    "Commission": "0",
                                    "OtherInfo": {
                                        "TransactionFee": "0",
                                        "ServiceTax": "0",
                                        "GrossAmount": 5091,
                                        "Item": []
                                    }
                                },
                                {
                                    "PaxType": "ADT",
                                    "BasicAmount": "4550",
                                    "TotalTaxAmount": "541",
                                    "FuelSurcharge": "0",
                                    "Commission": "0",
                                    "OtherInfo": {
                                        "TransactionFee": "0",
                                        "ServiceTax": "0",
                                        "GrossAmount": 5091,
                                        "Item": [
                                            {
                                                "TaxCode": "YRI",
                                                "Amount": "70"
                                            },
                                            {
                                                "TaxCode": "YRI",
                                                "Amount": "70"
                                            },
                                            {
                                                "TaxCode": "IN",
                                                "Amount": "12"
                                            },
                                            {
                                                "TaxCode": "K38",
                                                "Amount": "235"
                                            },
                                            {
                                                "TaxCode": "WO",
                                                "Amount": "154"
                                            }
                                        ]
                                    }
                                }
                            ],
                            "FareBasis": [
                                {
                                    "Code": "SAP8",
                                    "DepartureTime": "2018-09-26T07:00:00",
                                    "OriginLocation": "DEL",
                                    "DestinationLocation": "BOM",
                                    "ValidatingCarrier": "AI",
                                    "PsgType": "ADT",
                                    "PsgQty": 1
                                },
                                {
                                    "Code": "SAP8",
                                    "DepartureTime": "2018-09-26T15:25:00",
                                    "OriginLocation": "BOM",
                                    "DestinationLocation": "BLR",
                                    "ValidatingCarrier": "AI",
                                    "PsgType": "ADT",
                                    "PsgQty": 1
                                }
                            ]
                        },
                        "Miles": null,
                        "ElapsedTime": [
                            "680"
                        ],
                        "ValidatingCarrier": "AI"
                    },
                    {
                        "ApiProvider": "SB",
                        "Connection": {
                            "Onward": {
                                "IsConnection": true,
                                "NoOfStops": 1,
                                "ConnectionAirport": [
                                    {
                                        "Origin": "DEL",
                                        "Destination": "BOM"
                                    },
                                    {
                                        "Origin": "BOM",
                                        "Destination": "BLR"
                                    }
                                ]
                            },
                            "Return": {
                                "IsConnection": false,
                                "NoOfStops": 0,
                                "ConnectionAirport": []
                            }
                        },
                        "FlightDetails": [
                            {
                                "FlightID": "887",
                                "CarrierCode": "AI",
                                "Origin": "DEL",
                                "Destination": "BOM",
                                "FlightNum": "887",
                                "DepartureDateTime": "2018-09-26T07:00:00",
                                "ArrivalDateTime": "2018-09-26T09:05:00",
                                "Duration": "125",
                                "OrgTerminal": "3",
                                "DesTerminal": "2",
                                "AirlineCategory": null,
                                "AirCraftType": "",
                                "Via": "",
                                "ValidatingCarrier": "AI",
                                "ClassCode": "S",
                                "ClassCodeDesc": "",
                                "FareBasisCode": "ADVJR1",
                                "BreakPoint": "",
                                "CurrencyCode": "INR",
                                "OriginAirportName": "Indira Gandhi International Airport",
                                "OriginAirportCity": "New Delhi",
                                "OriginAirportCountry": "India",
                                "DestinationAirportName": "Chhatrapati Shivaji International Airport",
                                "DestinationAirportCity": "Mumbai",
                                "DestinationAirportCountry": "India",
                                "AirlineName": "Air India",
                                "MajorClassCode": "Economy",
                                "AirEquipType": "32B",
                                "MarriageGroup": "O",
                                "Baggage": {
                                    "Weight": "25",
                                    "Unit": "kg",
                                    "Pieces": "0"
                                },
                                "MealCode": {
                                    "MealCode": "S",
                                    "MealCodeDescription": "Snack"
                                },
                                "IsStopAirport": false,
                                "JourneyType": "Onward"
                            },
                            {
                                "FlightID": "607",
                                "CarrierCode": "AI",
                                "Origin": "BOM",
                                "Destination": "BLR",
                                "FlightNum": "607",
                                "DepartureDateTime": "2018-09-26T16:40:00",
                                "ArrivalDateTime": "2018-09-26T18:30:00",
                                "Duration": "110",
                                "OrgTerminal": "2",
                                "DesTerminal": null,
                                "AirlineCategory": null,
                                "AirCraftType": "",
                                "Via": "",
                                "ValidatingCarrier": "AI",
                                "ClassCode": "S",
                                "ClassCodeDesc": "",
                                "FareBasisCode": "ADVJR1",
                                "BreakPoint": "",
                                "CurrencyCode": "INR",
                                "OriginAirportName": "Chhatrapati Shivaji International Airport",
                                "OriginAirportCity": "Mumbai",
                                "OriginAirportCountry": "India",
                                "DestinationAirportName": "Bengaluru International Airport",
                                "DestinationAirportCity": "Bangalore",
                                "DestinationAirportCountry": "India",
                                "AirlineName": "Air India",
                                "MajorClassCode": "Economy",
                                "AirEquipType": "319",
                                "MarriageGroup": "O",
                                "Baggage": {
                                    "Weight": "25",
                                    "Unit": "kg",
                                    "Pieces": "0"
                                },
                                "MealCode": {
                                    "MealCode": "S",
                                    "MealCodeDescription": "Snack"
                                },
                                "IsStopAirport": false,
                                "JourneyType": "Onward"
                            }
                        ],
                        "FareDescription": {
                            "IsNonRefundable": false,
                            "PaxFareDetails": [
                                {
                                    "PaxType": "AllPsg",
                                    "BasicAmount": "4550",
                                    "TotalTaxAmount": "541",
                                    "FuelSurcharge": "0",
                                    "Commission": "0",
                                    "OtherInfo": {
                                        "TransactionFee": "0",
                                        "ServiceTax": "0",
                                        "GrossAmount": 5091,
                                        "Item": []
                                    }
                                },
                                {
                                    "PaxType": "ADT",
                                    "BasicAmount": "4550",
                                    "TotalTaxAmount": "541",
                                    "FuelSurcharge": "0",
                                    "Commission": "0",
                                    "OtherInfo": {
                                        "TransactionFee": "0",
                                        "ServiceTax": "0",
                                        "GrossAmount": 5091,
                                        "Item": [
                                            {
                                                "TaxCode": "YRI",
                                                "Amount": "70"
                                            },
                                            {
                                                "TaxCode": "YRI",
                                                "Amount": "70"
                                            },
                                            {
                                                "TaxCode": "IN",
                                                "Amount": "12"
                                            },
                                            {
                                                "TaxCode": "K38",
                                                "Amount": "235"
                                            },
                                            {
                                                "TaxCode": "WO",
                                                "Amount": "154"
                                            }
                                        ]
                                    }
                                }
                            ],
                            "FareBasis": [
                                {
                                    "Code": "SAP8",
                                    "DepartureTime": "2018-09-26T07:00:00",
                                    "OriginLocation": "DEL",
                                    "DestinationLocation": "BOM",
                                    "ValidatingCarrier": "AI",
                                    "PsgType": "ADT",
                                    "PsgQty": 1
                                },
                                {
                                    "Code": "SAP8",
                                    "DepartureTime": "2018-09-26T16:40:00",
                                    "OriginLocation": "BOM",
                                    "DestinationLocation": "BLR",
                                    "ValidatingCarrier": "AI",
                                    "PsgType": "ADT",
                                    "PsgQty": 1
                                }
                            ]
                        },
                        "Miles": null,
                        "ElapsedTime": [
                            "690"
                        ],
                        "ValidatingCarrier": "AI"
                    },
                    {
                        "ApiProvider": "SB",
                        "Connection": {
                            "Onward": {
                                "IsConnection": true,
                                "NoOfStops": 1,
                                "ConnectionAirport": [
                                    {
                                        "Origin": "DEL",
                                        "Destination": "BOM"
                                    },
                                    {
                                        "Origin": "BOM",
                                        "Destination": "BLR"
                                    }
                                ]
                            },
                            "Return": {
                                "IsConnection": false,
                                "NoOfStops": 0,
                                "ConnectionAirport": []
                            }
                        },
                        "FlightDetails": [
                            {
                                "FlightID": "805",
                                "CarrierCode": "AI",
                                "Origin": "DEL",
                                "Destination": "BOM",
                                "FlightNum": "805",
                                "DepartureDateTime": "2018-09-26T20:00:00",
                                "ArrivalDateTime": "2018-09-26T22:10:00",
                                "Duration": "130",
                                "OrgTerminal": "3",
                                "DesTerminal": "2",
                                "AirlineCategory": null,
                                "AirCraftType": "",
                                "Via": "",
                                "ValidatingCarrier": "AI",
                                "ClassCode": "S",
                                "ClassCodeDesc": "",
                                "FareBasisCode": "ADVJR1",
                                "BreakPoint": "",
                                "CurrencyCode": "INR",
                                "OriginAirportName": "Indira Gandhi International Airport",
                                "OriginAirportCity": "New Delhi",
                                "OriginAirportCountry": "India",
                                "DestinationAirportName": "Chhatrapati Shivaji International Airport",
                                "DestinationAirportCity": "Mumbai",
                                "DestinationAirportCountry": "India",
                                "AirlineName": "Air India",
                                "MajorClassCode": "Economy",
                                "AirEquipType": "319",
                                "MarriageGroup": "O",
                                "Baggage": {
                                    "Weight": "25",
                                    "Unit": "kg",
                                    "Pieces": "0"
                                },
                                "MealCode": {
                                    "MealCode": "D",
                                    "MealCodeDescription": "Dinner"
                                },
                                "IsStopAirport": false,
                                "JourneyType": "Onward"
                            },
                            {
                                "FlightID": "603",
                                "CarrierCode": "AI",
                                "Origin": "BOM",
                                "Destination": "BLR",
                                "FlightNum": "603",
                                "DepartureDateTime": "2018-09-27T06:15:00",
                                "ArrivalDateTime": "2018-09-27T07:50:00",
                                "Duration": "95",
                                "OrgTerminal": "2",
                                "DesTerminal": null,
                                "AirlineCategory": null,
                                "AirCraftType": "",
                                "Via": "",
                                "ValidatingCarrier": "AI",
                                "ClassCode": "S",
                                "ClassCodeDesc": "",
                                "FareBasisCode": "ADVJR1",
                                "BreakPoint": "",
                                "CurrencyCode": "INR",
                                "OriginAirportName": "Chhatrapati Shivaji International Airport",
                                "OriginAirportCity": "Mumbai",
                                "OriginAirportCountry": "India",
                                "DestinationAirportName": "Bengaluru International Airport",
                                "DestinationAirportCity": "Bangalore",
                                "DestinationAirportCountry": "India",
                                "AirlineName": "Air India",
                                "MajorClassCode": "Economy",
                                "AirEquipType": "32B",
                                "MarriageGroup": "O",
                                "Baggage": {
                                    "Weight": "25",
                                    "Unit": "kg",
                                    "Pieces": "0"
                                },
                                "MealCode": {
                                    "MealCode": "B",
                                    "MealCodeDescription": "Breakfast"
                                },
                                "IsStopAirport": false,
                                "JourneyType": "Onward"
                            }
                        ],
                        "FareDescription": {
                            "IsNonRefundable": false,
                            "PaxFareDetails": [
                                {
                                    "PaxType": "AllPsg",
                                    "BasicAmount": "4550",
                                    "TotalTaxAmount": "541",
                                    "FuelSurcharge": "0",
                                    "Commission": "0",
                                    "OtherInfo": {
                                        "TransactionFee": "0",
                                        "ServiceTax": "0",
                                        "GrossAmount": 5091,
                                        "Item": []
                                    }
                                },
                                {
                                    "PaxType": "ADT",
                                    "BasicAmount": "4550",
                                    "TotalTaxAmount": "541",
                                    "FuelSurcharge": "0",
                                    "Commission": "0",
                                    "OtherInfo": {
                                        "TransactionFee": "0",
                                        "ServiceTax": "0",
                                        "GrossAmount": 5091,
                                        "Item": [
                                            {
                                                "TaxCode": "YRI",
                                                "Amount": "70"
                                            },
                                            {
                                                "TaxCode": "YRI",
                                                "Amount": "70"
                                            },
                                            {
                                                "TaxCode": "IN",
                                                "Amount": "12"
                                            },
                                            {
                                                "TaxCode": "K38",
                                                "Amount": "235"
                                            },
                                            {
                                                "TaxCode": "WO",
                                                "Amount": "154"
                                            }
                                        ]
                                    }
                                }
                            ],
                            "FareBasis": [
                                {
                                    "Code": "SAP8",
                                    "DepartureTime": "2018-09-26T20:00:00",
                                    "OriginLocation": "DEL",
                                    "DestinationLocation": "BOM",
                                    "ValidatingCarrier": "AI",
                                    "PsgType": "ADT",
                                    "PsgQty": 1
                                },
                                {
                                    "Code": "SAP8",
                                    "DepartureTime": "2018-09-27T06:15:00",
                                    "OriginLocation": "BOM",
                                    "DestinationLocation": "BLR",
                                    "ValidatingCarrier": "AI",
                                    "PsgType": "ADT",
                                    "PsgQty": 1
                                }
                            ]
                        },
                        "Miles": null,
                        "ElapsedTime": [
                            "710"
                        ],
                        "ValidatingCarrier": "AI"
                    },
                    {
                        "ApiProvider": "SB",
                        "Connection": {
                            "Onward": {
                                "IsConnection": true,
                                "NoOfStops": 1,
                                "ConnectionAirport": [
                                    {
                                        "Origin": "DEL",
                                        "Destination": "BOM"
                                    },
                                    {
                                        "Origin": "BOM",
                                        "Destination": "BLR"
                                    }
                                ]
                            },
                            "Return": {
                                "IsConnection": false,
                                "NoOfStops": 0,
                                "ConnectionAirport": []
                            }
                        },
                        "FlightDetails": [
                            {
                                "FlightID": "317",
                                "CarrierCode": "AI",
                                "Origin": "DEL",
                                "Destination": "BOM",
                                "FlightNum": "317",
                                "DepartureDateTime": "2018-09-26T23:00:00",
                                "ArrivalDateTime": "2018-09-27T01:15:00",
                                "Duration": "135",
                                "OrgTerminal": "3",
                                "DesTerminal": "2",
                                "AirlineCategory": null,
                                "AirCraftType": "",
                                "Via": "",
                                "ValidatingCarrier": "AI",
                                "ClassCode": "S",
                                "ClassCodeDesc": "",
                                "FareBasisCode": "ADVJR1",
                                "BreakPoint": "",
                                "CurrencyCode": "INR",
                                "OriginAirportName": "Indira Gandhi International Airport",
                                "OriginAirportCity": "New Delhi",
                                "OriginAirportCountry": "India",
                                "DestinationAirportName": "Chhatrapati Shivaji International Airport",
                                "DestinationAirportCity": "Mumbai",
                                "DestinationAirportCountry": "India",
                                "AirlineName": "Air India",
                                "MajorClassCode": "Economy",
                                "AirEquipType": "788",
                                "MarriageGroup": "O",
                                "Baggage": {
                                    "Weight": "25",
                                    "Unit": "kg",
                                    "Pieces": "0"
                                },
                                "MealCode": {
                                    "MealCode": "M",
                                    "MealCodeDescription": "Meals"
                                },
                                "IsStopAirport": false,
                                "JourneyType": "Onward"
                            },
                            {
                                "FlightID": "639",
                                "CarrierCode": "AI",
                                "Origin": "BOM",
                                "Destination": "BLR",
                                "FlightNum": "639",
                                "DepartureDateTime": "2018-09-27T09:20:00",
                                "ArrivalDateTime": "2018-09-27T11:00:00",
                                "Duration": "100",
                                "OrgTerminal": "2",
                                "DesTerminal": null,
                                "AirlineCategory": null,
                                "AirCraftType": "",
                                "Via": "",
                                "ValidatingCarrier": "AI",
                                "ClassCode": "S",
                                "ClassCodeDesc": "",
                                "FareBasisCode": "ADVJR1",
                                "BreakPoint": "",
                                "CurrencyCode": "INR",
                                "OriginAirportName": "Chhatrapati Shivaji International Airport",
                                "OriginAirportCity": "Mumbai",
                                "OriginAirportCountry": "India",
                                "DestinationAirportName": "Bengaluru International Airport",
                                "DestinationAirportCity": "Bangalore",
                                "DestinationAirportCountry": "India",
                                "AirlineName": "Air India",
                                "MajorClassCode": "Economy",
                                "AirEquipType": "319",
                                "MarriageGroup": "O",
                                "Baggage": {
                                    "Weight": "25",
                                    "Unit": "kg",
                                    "Pieces": "0"
                                },
                                "MealCode": {
                                    "MealCode": "S",
                                    "MealCodeDescription": "Snack"
                                },
                                "IsStopAirport": false,
                                "JourneyType": "Onward"
                            }
                        ],
                        "FareDescription": {
                            "IsNonRefundable": false,
                            "PaxFareDetails": [
                                {
                                    "PaxType": "AllPsg",
                                    "BasicAmount": "4550",
                                    "TotalTaxAmount": "541",
                                    "FuelSurcharge": "0",
                                    "Commission": "0",
                                    "OtherInfo": {
                                        "TransactionFee": "0",
                                        "ServiceTax": "0",
                                        "GrossAmount": 5091,
                                        "Item": []
                                    }
                                },
                                {
                                    "PaxType": "ADT",
                                    "BasicAmount": "4550",
                                    "TotalTaxAmount": "541",
                                    "FuelSurcharge": "0",
                                    "Commission": "0",
                                    "OtherInfo": {
                                        "TransactionFee": "0",
                                        "ServiceTax": "0",
                                        "GrossAmount": 5091,
                                        "Item": [
                                            {
                                                "TaxCode": "YRI",
                                                "Amount": "70"
                                            },
                                            {
                                                "TaxCode": "YRI",
                                                "Amount": "70"
                                            },
                                            {
                                                "TaxCode": "IN",
                                                "Amount": "12"
                                            },
                                            {
                                                "TaxCode": "K38",
                                                "Amount": "235"
                                            },
                                            {
                                                "TaxCode": "WO",
                                                "Amount": "154"
                                            }
                                        ]
                                    }
                                }
                            ],
                            "FareBasis": [
                                {
                                    "Code": "SAP8",
                                    "DepartureTime": "2018-09-26T23:00:00",
                                    "OriginLocation": "DEL",
                                    "DestinationLocation": "BOM",
                                    "ValidatingCarrier": "AI",
                                    "PsgType": "ADT",
                                    "PsgQty": 1
                                },
                                {
                                    "Code": "SAP8",
                                    "DepartureTime": "2018-09-27T09:20:00",
                                    "OriginLocation": "BOM",
                                    "DestinationLocation": "BLR",
                                    "ValidatingCarrier": "AI",
                                    "PsgType": "ADT",
                                    "PsgQty": 1
                                }
                            ]
                        },
                        "Miles": null,
                        "ElapsedTime": [
                            "720"
                        ],
                        "ValidatingCarrier": "AI"
                    },
                    {
                        "ApiProvider": "SB",
                        "Connection": {
                            "Onward": {
                                "IsConnection": true,
                                "NoOfStops": 1,
                                "ConnectionAirport": [
                                    {
                                        "Origin": "DEL",
                                        "Destination": "BOM"
                                    },
                                    {
                                        "Origin": "BOM",
                                        "Destination": "BLR"
                                    }
                                ]
                            },
                            "Return": {
                                "IsConnection": false,
                                "NoOfStops": 0,
                                "ConnectionAirport": []
                            }
                        },
                        "FlightDetails": [
                            {
                                "FlightID": "624",
                                "CarrierCode": "AI",
                                "Origin": "DEL",
                                "Destination": "BOM",
                                "FlightNum": "624",
                                "DepartureDateTime": "2018-09-26T19:00:00",
                                "ArrivalDateTime": "2018-09-26T21:15:00",
                                "Duration": "135",
                                "OrgTerminal": "3",
                                "DesTerminal": "2",
                                "AirlineCategory": null,
                                "AirCraftType": "",
                                "Via": "",
                                "ValidatingCarrier": "AI",
                                "ClassCode": "S",
                                "ClassCodeDesc": "",
                                "FareBasisCode": "ADVJR1",
                                "BreakPoint": "",
                                "CurrencyCode": "INR",
                                "OriginAirportName": "Indira Gandhi International Airport",
                                "OriginAirportCity": "New Delhi",
                                "OriginAirportCountry": "India",
                                "DestinationAirportName": "Chhatrapati Shivaji International Airport",
                                "DestinationAirportCity": "Mumbai",
                                "DestinationAirportCountry": "India",
                                "AirlineName": "Air India",
                                "MajorClassCode": "Economy",
                                "AirEquipType": "32B",
                                "MarriageGroup": "O",
                                "Baggage": {
                                    "Weight": "25",
                                    "Unit": "kg",
                                    "Pieces": "0"
                                },
                                "MealCode": {
                                    "MealCode": "D",
                                    "MealCodeDescription": "Dinner"
                                },
                                "IsStopAirport": false,
                                "JourneyType": "Onward"
                            },
                            {
                                "FlightID": "603",
                                "CarrierCode": "AI",
                                "Origin": "BOM",
                                "Destination": "BLR",
                                "FlightNum": "603",
                                "DepartureDateTime": "2018-09-27T06:15:00",
                                "ArrivalDateTime": "2018-09-27T07:50:00",
                                "Duration": "95",
                                "OrgTerminal": "2",
                                "DesTerminal": null,
                                "AirlineCategory": null,
                                "AirCraftType": "",
                                "Via": "",
                                "ValidatingCarrier": "AI",
                                "ClassCode": "S",
                                "ClassCodeDesc": "",
                                "FareBasisCode": "ADVJR1",
                                "BreakPoint": "",
                                "CurrencyCode": "INR",
                                "OriginAirportName": "Chhatrapati Shivaji International Airport",
                                "OriginAirportCity": "Mumbai",
                                "OriginAirportCountry": "India",
                                "DestinationAirportName": "Bengaluru International Airport",
                                "DestinationAirportCity": "Bangalore",
                                "DestinationAirportCountry": "India",
                                "AirlineName": "Air India",
                                "MajorClassCode": "Economy",
                                "AirEquipType": "32B",
                                "MarriageGroup": "O",
                                "Baggage": {
                                    "Weight": "25",
                                    "Unit": "kg",
                                    "Pieces": "0"
                                },
                                "MealCode": {
                                    "MealCode": "B",
                                    "MealCodeDescription": "Breakfast"
                                },
                                "IsStopAirport": false,
                                "JourneyType": "Onward"
                            }
                        ],
                        "FareDescription": {
                            "IsNonRefundable": false,
                            "PaxFareDetails": [
                                {
                                    "PaxType": "AllPsg",
                                    "BasicAmount": "4550",
                                    "TotalTaxAmount": "541",
                                    "FuelSurcharge": "0",
                                    "Commission": "0",
                                    "OtherInfo": {
                                        "TransactionFee": "0",
                                        "ServiceTax": "0",
                                        "GrossAmount": 5091,
                                        "Item": []
                                    }
                                },
                                {
                                    "PaxType": "ADT",
                                    "BasicAmount": "4550",
                                    "TotalTaxAmount": "541",
                                    "FuelSurcharge": "0",
                                    "Commission": "0",
                                    "OtherInfo": {
                                        "TransactionFee": "0",
                                        "ServiceTax": "0",
                                        "GrossAmount": 5091,
                                        "Item": [
                                            {
                                                "TaxCode": "YRI",
                                                "Amount": "70"
                                            },
                                            {
                                                "TaxCode": "YRI",
                                                "Amount": "70"
                                            },
                                            {
                                                "TaxCode": "IN",
                                                "Amount": "12"
                                            },
                                            {
                                                "TaxCode": "K38",
                                                "Amount": "235"
                                            },
                                            {
                                                "TaxCode": "WO",
                                                "Amount": "154"
                                            }
                                        ]
                                    }
                                }
                            ],
                            "FareBasis": [
                                {
                                    "Code": "SAP8",
                                    "DepartureTime": "2018-09-26T19:00:00",
                                    "OriginLocation": "DEL",
                                    "DestinationLocation": "BOM",
                                    "ValidatingCarrier": "AI",
                                    "PsgType": "ADT",
                                    "PsgQty": 1
                                },
                                {
                                    "Code": "SAP8",
                                    "DepartureTime": "2018-09-27T06:15:00",
                                    "OriginLocation": "BOM",
                                    "DestinationLocation": "BLR",
                                    "ValidatingCarrier": "AI",
                                    "PsgType": "ADT",
                                    "PsgQty": 1
                                }
                            ]
                        },
                        "Miles": null,
                        "ElapsedTime": [
                            "770"
                        ],
                        "ValidatingCarrier": "AI"
                    },
                    {
                        "ApiProvider": "SB",
                        "Connection": {
                            "Onward": {
                                "IsConnection": true,
                                "NoOfStops": 2,
                                "ConnectionAirport": [
                                    {
                                        "Origin": "DEL",
                                        "Destination": "BOM"
                                    },
                                    {
                                        "Origin": "BOM",
                                        "Destination": "HBX"
                                    },
                                    {
                                        "Origin": "HBX",
                                        "Destination": "BLR"
                                    }
                                ]
                            },
                            "Return": {
                                "IsConnection": false,
                                "NoOfStops": 0,
                                "ConnectionAirport": []
                            }
                        },
                        "FlightDetails": [
                            {
                                "FlightID": "349",
                                "CarrierCode": "AI",
                                "Origin": "DEL",
                                "Destination": "BOM",
                                "FlightNum": "349",
                                "DepartureDateTime": "2018-09-26T03:50:00",
                                "ArrivalDateTime": "2018-09-26T05:55:00",
                                "Duration": "125",
                                "OrgTerminal": "3",
                                "DesTerminal": "2",
                                "AirlineCategory": null,
                                "AirCraftType": "",
                                "Via": "",
                                "ValidatingCarrier": "AI",
                                "ClassCode": "S",
                                "ClassCodeDesc": "",
                                "FareBasisCode": "ADVJR1",
                                "BreakPoint": "",
                                "CurrencyCode": "INR",
                                "OriginAirportName": "Indira Gandhi International Airport",
                                "OriginAirportCity": "New Delhi",
                                "OriginAirportCountry": "India",
                                "DestinationAirportName": "Chhatrapati Shivaji International Airport",
                                "DestinationAirportCity": "Mumbai",
                                "DestinationAirportCountry": "India",
                                "AirlineName": "Air India",
                                "MajorClassCode": "Economy",
                                "AirEquipType": "788",
                                "MarriageGroup": "O",
                                "Baggage": {
                                    "Weight": "25",
                                    "Unit": "kg",
                                    "Pieces": "0"
                                },
                                "MealCode": {
                                    "MealCode": "M",
                                    "MealCodeDescription": "Meals"
                                },
                                "IsStopAirport": false,
                                "JourneyType": "Onward"
                            },
                            {
                                "FlightID": "508",
                                "CarrierCode": "AI",
                                "Origin": "BOM",
                                "Destination": "HBX",
                                "FlightNum": "508",
                                "DepartureDateTime": "2018-09-26T15:25:00",
                                "ArrivalDateTime": "2018-09-26T16:35:00",
                                "Duration": "70",
                                "OrgTerminal": "2",
                                "DesTerminal": "",
                                "AirlineCategory": null,
                                "AirCraftType": "",
                                "Via": "",
                                "ValidatingCarrier": "AI",
                                "ClassCode": "S",
                                "ClassCodeDesc": "",
                                "FareBasisCode": "ADVJR1",
                                "BreakPoint": "",
                                "CurrencyCode": "INR",
                                "OriginAirportName": "Chhatrapati Shivaji International Airport",
                                "OriginAirportCity": "Mumbai",
                                "OriginAirportCountry": "India",
                                "DestinationAirportName": "Hubli Airport",
                                "DestinationAirportCity": "Hubli",
                                "DestinationAirportCountry": "India",
                                "AirlineName": "Air India",
                                "MajorClassCode": "Economy",
                                "AirEquipType": "319",
                                "MarriageGroup": "O",
                                "Baggage": {
                                    "Weight": "25",
                                    "Unit": "kg",
                                    "Pieces": "0"
                                },
                                "MealCode": {
                                    "MealCode": "S",
                                    "MealCodeDescription": "Snack"
                                },
                                "IsStopAirport": true,
                                "JourneyType": "Onward"
                            },
                            {
                                "FlightID": "508",
                                "CarrierCode": "AI",
                                "Origin": "HBX",
                                "Destination": "BLR",
                                "FlightNum": "508",
                                "DepartureDateTime": "2018-09-26T17:15:00",
                                "ArrivalDateTime": "2018-09-26T18:20:00",
                                "Duration": "65",
                                "OrgTerminal": "",
                                "DesTerminal": null,
                                "AirlineCategory": null,
                                "AirCraftType": "",
                                "Via": "",
                                "ValidatingCarrier": "AI",
                                "ClassCode": "S",
                                "ClassCodeDesc": "",
                                "FareBasisCode": "ADVJR1",
                                "BreakPoint": "",
                                "CurrencyCode": "INR",
                                "OriginAirportName": "Hubli Airport",
                                "OriginAirportCity": "Hubli",
                                "OriginAirportCountry": "India",
                                "DestinationAirportName": "Bengaluru International Airport",
                                "DestinationAirportCity": "Bangalore",
                                "DestinationAirportCountry": "India",
                                "AirlineName": "Air India",
                                "MajorClassCode": "Economy",
                                "AirEquipType": "319",
                                "MarriageGroup": "O",
                                "Baggage": {
                                    "Weight": "25",
                                    "Unit": "kg",
                                    "Pieces": "0"
                                },
                                "MealCode": {
                                    "MealCode": "S",
                                    "MealCodeDescription": "Snack"
                                },
                                "IsStopAirport": true,
                                "JourneyType": "Onward"
                            }
                        ],
                        "FareDescription": {
                            "IsNonRefundable": false,
                            "PaxFareDetails": [
                                {
                                    "PaxType": "AllPsg",
                                    "BasicAmount": "4550",
                                    "TotalTaxAmount": "541",
                                    "FuelSurcharge": "0",
                                    "Commission": "0",
                                    "OtherInfo": {
                                        "TransactionFee": "0",
                                        "ServiceTax": "0",
                                        "GrossAmount": 5091,
                                        "Item": []
                                    }
                                },
                                {
                                    "PaxType": "ADT",
                                    "BasicAmount": "4550",
                                    "TotalTaxAmount": "541",
                                    "FuelSurcharge": "0",
                                    "Commission": "0",
                                    "OtherInfo": {
                                        "TransactionFee": "0",
                                        "ServiceTax": "0",
                                        "GrossAmount": 5091,
                                        "Item": [
                                            {
                                                "TaxCode": "YRI",
                                                "Amount": "70"
                                            },
                                            {
                                                "TaxCode": "YRI",
                                                "Amount": "70"
                                            },
                                            {
                                                "TaxCode": "IN",
                                                "Amount": "12"
                                            },
                                            {
                                                "TaxCode": "K38",
                                                "Amount": "235"
                                            },
                                            {
                                                "TaxCode": "WO",
                                                "Amount": "154"
                                            }
                                        ]
                                    }
                                }
                            ],
                            "FareBasis": [
                                {
                                    "Code": "SAP8",
                                    "DepartureTime": "2018-09-26T03:50:00",
                                    "OriginLocation": "DEL",
                                    "DestinationLocation": "BOM",
                                    "ValidatingCarrier": "AI",
                                    "PsgType": "ADT",
                                    "PsgQty": 1
                                },
                                {
                                    "Code": "SAP8",
                                    "DepartureTime": "2018-09-26T15:25:00",
                                    "OriginLocation": "BOM",
                                    "DestinationLocation": "BLR",
                                    "ValidatingCarrier": "AI",
                                    "PsgType": "ADT",
                                    "PsgQty": 1
                                }
                            ]
                        },
                        "Miles": null,
                        "ElapsedTime": [
                            "870"
                        ],
                        "ValidatingCarrier": "AI"
                    },
                    {
                        "ApiProvider": "SB",
                        "Connection": {
                            "Onward": {
                                "IsConnection": true,
                                "NoOfStops": 1,
                                "ConnectionAirport": [
                                    {
                                        "Origin": "DEL",
                                        "Destination": "HYD"
                                    },
                                    {
                                        "Origin": "HYD",
                                        "Destination": "BLR"
                                    }
                                ]
                            },
                            "Return": {
                                "IsConnection": false,
                                "NoOfStops": 0,
                                "ConnectionAirport": []
                            }
                        },
                        "FlightDetails": [
                            {
                                "FlightID": "839",
                                "CarrierCode": "AI",
                                "Origin": "DEL",
                                "Destination": "HYD",
                                "FlightNum": "839",
                                "DepartureDateTime": "2018-09-26T21:05:00",
                                "ArrivalDateTime": "2018-09-26T23:05:00",
                                "Duration": "120",
                                "OrgTerminal": "3",
                                "DesTerminal": null,
                                "AirlineCategory": null,
                                "AirCraftType": "",
                                "Via": "",
                                "ValidatingCarrier": "AI",
                                "ClassCode": "T",
                                "ClassCodeDesc": "",
                                "FareBasisCode": "ADVJR1",
                                "BreakPoint": "",
                                "CurrencyCode": "INR",
                                "OriginAirportName": "Indira Gandhi International Airport",
                                "OriginAirportCity": "New Delhi",
                                "OriginAirportCountry": "India",
                                "DestinationAirportName": "Rajiv Gandhi International Airport, Shamshabad",
                                "DestinationAirportCity": "Hyderabad",
                                "DestinationAirportCountry": "India",
                                "AirlineName": "Air India",
                                "MajorClassCode": "Economy",
                                "AirEquipType": "321",
                                "MarriageGroup": "O",
                                "Baggage": {
                                    "Weight": "25",
                                    "Unit": "kg",
                                    "Pieces": "0"
                                },
                                "MealCode": {
                                    "MealCode": "S",
                                    "MealCodeDescription": "Snack"
                                },
                                "IsStopAirport": false,
                                "JourneyType": "Onward"
                            },
                            {
                                "FlightID": "978",
                                "CarrierCode": "AI",
                                "Origin": "HYD",
                                "Destination": "BLR",
                                "FlightNum": "978",
                                "DepartureDateTime": "2018-09-27T03:30:00",
                                "ArrivalDateTime": "2018-09-27T04:40:00",
                                "Duration": "70",
                                "OrgTerminal": null,
                                "DesTerminal": null,
                                "AirlineCategory": null,
                                "AirCraftType": "",
                                "Via": "",
                                "ValidatingCarrier": "AI",
                                "ClassCode": "U",
                                "ClassCodeDesc": "",
                                "FareBasisCode": "ADVJR1",
                                "BreakPoint": "",
                                "CurrencyCode": "INR",
                                "OriginAirportName": "Rajiv Gandhi International Airport, Shamshabad",
                                "OriginAirportCity": "Hyderabad",
                                "OriginAirportCountry": "India",
                                "DestinationAirportName": "Bengaluru International Airport",
                                "DestinationAirportCity": "Bangalore",
                                "DestinationAirportCountry": "India",
                                "AirlineName": "Air India",
                                "MajorClassCode": "Economy",
                                "AirEquipType": "319",
                                "MarriageGroup": "O",
                                "Baggage": {
                                    "Weight": "25",
                                    "Unit": "kg",
                                    "Pieces": "0"
                                },
                                "MealCode": {
                                    "MealCode": "S",
                                    "MealCodeDescription": "Snack"
                                },
                                "IsStopAirport": false,
                                "JourneyType": "Onward"
                            }
                        ],
                        "FareDescription": {
                            "IsNonRefundable": false,
                            "PaxFareDetails": [
                                {
                                    "PaxType": "AllPsg",
                                    "BasicAmount": "4500",
                                    "TotalTaxAmount": "774",
                                    "FuelSurcharge": "0",
                                    "Commission": "0",
                                    "OtherInfo": {
                                        "TransactionFee": "0",
                                        "ServiceTax": "0",
                                        "GrossAmount": 5274,
                                        "Item": []
                                    }
                                },
                                {
                                    "PaxType": "ADT",
                                    "BasicAmount": "4500",
                                    "TotalTaxAmount": "774",
                                    "FuelSurcharge": "0",
                                    "Commission": "0",
                                    "OtherInfo": {
                                        "TransactionFee": "0",
                                        "ServiceTax": "0",
                                        "GrossAmount": 5274,
                                        "Item": [
                                            {
                                                "TaxCode": "YRI",
                                                "Amount": "70"
                                            },
                                            {
                                                "TaxCode": "YRI",
                                                "Amount": "70"
                                            },
                                            {
                                                "TaxCode": "IN",
                                                "Amount": "12"
                                            },
                                            {
                                                "TaxCode": "K38",
                                                "Amount": "232"
                                            },
                                            {
                                                "TaxCode": "WO",
                                                "Amount": "154"
                                            },
                                            {
                                                "TaxCode": "WO",
                                                "Amount": "236"
                                            }
                                        ]
                                    }
                                }
                            ],
                            "FareBasis": [
                                {
                                    "Code": "TAP8",
                                    "DepartureTime": "2018-09-26T21:05:00",
                                    "OriginLocation": "DEL",
                                    "DestinationLocation": "HYD",
                                    "ValidatingCarrier": "AI",
                                    "PsgType": "ADT",
                                    "PsgQty": 1
                                },
                                {
                                    "Code": "UAP8",
                                    "DepartureTime": "2018-09-27T03:30:00",
                                    "OriginLocation": "HYD",
                                    "DestinationLocation": "BLR",
                                    "ValidatingCarrier": "AI",
                                    "PsgType": "ADT",
                                    "PsgQty": 1
                                }
                            ]
                        },
                        "Miles": null,
                        "ElapsedTime": [
                            "455"
                        ],
                        "ValidatingCarrier": "AI"
                    },
                    {
                        "ApiProvider": "SB",
                        "Connection": {
                            "Onward": {
                                "IsConnection": true,
                                "NoOfStops": 1,
                                "ConnectionAirport": [
                                    {
                                        "Origin": "DEL",
                                        "Destination": "MAA"
                                    },
                                    {
                                        "Origin": "MAA",
                                        "Destination": "BLR"
                                    }
                                ]
                            },
                            "Return": {
                                "IsConnection": false,
                                "NoOfStops": 0,
                                "ConnectionAirport": []
                            }
                        },
                        "FlightDetails": [
                            {
                                "FlightID": "429",
                                "CarrierCode": "AI",
                                "Origin": "DEL",
                                "Destination": "MAA",
                                "FlightNum": "429",
                                "DepartureDateTime": "2018-09-26T09:55:00",
                                "ArrivalDateTime": "2018-09-26T12:40:00",
                                "Duration": "165",
                                "OrgTerminal": "3",
                                "DesTerminal": "1",
                                "AirlineCategory": null,
                                "AirCraftType": "",
                                "Via": "",
                                "ValidatingCarrier": "AI",
                                "ClassCode": "S",
                                "ClassCodeDesc": "",
                                "FareBasisCode": "ADVJR1",
                                "BreakPoint": "",
                                "CurrencyCode": "INR",
                                "OriginAirportName": "Indira Gandhi International Airport",
                                "OriginAirportCity": "New Delhi",
                                "OriginAirportCountry": "India",
                                "DestinationAirportName": "Chennai International Airport",
                                "DestinationAirportCity": "Chennai",
                                "DestinationAirportCountry": "India",
                                "AirlineName": "Air India",
                                "MajorClassCode": "Economy",
                                "AirEquipType": "321",
                                "MarriageGroup": "O",
                                "Baggage": {
                                    "Weight": "25",
                                    "Unit": "kg",
                                    "Pieces": "0"
                                },
                                "MealCode": {
                                    "MealCode": "S",
                                    "MealCodeDescription": "Snack"
                                },
                                "IsStopAirport": false,
                                "JourneyType": "Onward"
                            },
                            {
                                "FlightID": "563",
                                "CarrierCode": "AI",
                                "Origin": "MAA",
                                "Destination": "BLR",
                                "FlightNum": "563",
                                "DepartureDateTime": "2018-09-26T13:25:00",
                                "ArrivalDateTime": "2018-09-26T14:15:00",
                                "Duration": "50",
                                "OrgTerminal": "1",
                                "DesTerminal": null,
                                "AirlineCategory": null,
                                "AirCraftType": "",
                                "Via": "",
                                "ValidatingCarrier": "AI",
                                "ClassCode": "S",
                                "ClassCodeDesc": "",
                                "FareBasisCode": "ADVJR1",
                                "BreakPoint": "",
                                "CurrencyCode": "INR",
                                "OriginAirportName": "Chennai International Airport",
                                "OriginAirportCity": "Chennai",
                                "OriginAirportCountry": "India",
                                "DestinationAirportName": "Bengaluru International Airport",
                                "DestinationAirportCity": "Bangalore",
                                "DestinationAirportCountry": "India",
                                "AirlineName": "Air India",
                                "MajorClassCode": "Economy",
                                "AirEquipType": "319",
                                "MarriageGroup": "O",
                                "Baggage": {
                                    "Weight": "25",
                                    "Unit": "kg",
                                    "Pieces": "0"
                                },
                                "MealCode": {
                                    "MealCode": "S",
                                    "MealCodeDescription": "Snack"
                                },
                                "IsStopAirport": false,
                                "JourneyType": "Onward"
                            }
                        ],
                        "FareDescription": {
                            "IsNonRefundable": false,
                            "PaxFareDetails": [
                                {
                                    "PaxType": "AllPsg",
                                    "BasicAmount": "4800",
                                    "TotalTaxAmount": "553",
                                    "FuelSurcharge": "0",
                                    "Commission": "0",
                                    "OtherInfo": {
                                        "TransactionFee": "0",
                                        "ServiceTax": "0",
                                        "GrossAmount": 5353,
                                        "Item": []
                                    }
                                },
                                {
                                    "PaxType": "ADT",
                                    "BasicAmount": "4800",
                                    "TotalTaxAmount": "553",
                                    "FuelSurcharge": "0",
                                    "Commission": "0",
                                    "OtherInfo": {
                                        "TransactionFee": "0",
                                        "ServiceTax": "0",
                                        "GrossAmount": 5353,
                                        "Item": [
                                            {
                                                "TaxCode": "YRI",
                                                "Amount": "70"
                                            },
                                            {
                                                "TaxCode": "YRI",
                                                "Amount": "70"
                                            },
                                            {
                                                "TaxCode": "IN",
                                                "Amount": "12"
                                            },
                                            {
                                                "TaxCode": "K38",
                                                "Amount": "247"
                                            },
                                            {
                                                "TaxCode": "WO",
                                                "Amount": "154"
                                            }
                                        ]
                                    }
                                }
                            ],
                            "FareBasis": [
                                {
                                    "Code": "SAP8",
                                    "DepartureTime": "2018-09-26T09:55:00",
                                    "OriginLocation": "DEL",
                                    "DestinationLocation": "MAA",
                                    "ValidatingCarrier": "AI",
                                    "PsgType": "ADT",
                                    "PsgQty": 1
                                },
                                {
                                    "Code": "SAP8",
                                    "DepartureTime": "2018-09-26T13:25:00",
                                    "OriginLocation": "MAA",
                                    "DestinationLocation": "BLR",
                                    "ValidatingCarrier": "AI",
                                    "PsgType": "ADT",
                                    "PsgQty": 1
                                }
                            ]
                        },
                        "Miles": null,
                        "ElapsedTime": [
                            "260"
                        ],
                        "ValidatingCarrier": "AI"
                    },
                    {
                        "ApiProvider": "SB",
                        "Connection": {
                            "Onward": {
                                "IsConnection": true,
                                "NoOfStops": 1,
                                "ConnectionAirport": [
                                    {
                                        "Origin": "DEL",
                                        "Destination": "MAA"
                                    },
                                    {
                                        "Origin": "MAA",
                                        "Destination": "BLR"
                                    }
                                ]
                            },
                            "Return": {
                                "IsConnection": false,
                                "NoOfStops": 0,
                                "ConnectionAirport": []
                            }
                        },
                        "FlightDetails": [
                            {
                                "FlightID": "439",
                                "CarrierCode": "AI",
                                "Origin": "DEL",
                                "Destination": "MAA",
                                "FlightNum": "439",
                                "DepartureDateTime": "2018-09-26T06:05:00",
                                "ArrivalDateTime": "2018-09-26T08:50:00",
                                "Duration": "165",
                                "OrgTerminal": "3",
                                "DesTerminal": "1",
                                "AirlineCategory": null,
                                "AirCraftType": "",
                                "Via": "",
                                "ValidatingCarrier": "AI",
                                "ClassCode": "S",
                                "ClassCodeDesc": "",
                                "FareBasisCode": "ADVJR1",
                                "BreakPoint": "",
                                "CurrencyCode": "INR",
                                "OriginAirportName": "Indira Gandhi International Airport",
                                "OriginAirportCity": "New Delhi",
                                "OriginAirportCountry": "India",
                                "DestinationAirportName": "Chennai International Airport",
                                "DestinationAirportCity": "Chennai",
                                "DestinationAirportCountry": "India",
                                "AirlineName": "Air India",
                                "MajorClassCode": "Economy",
                                "AirEquipType": "32B",
                                "MarriageGroup": "O",
                                "Baggage": {
                                    "Weight": "25",
                                    "Unit": "kg",
                                    "Pieces": "0"
                                },
                                "MealCode": {
                                    "MealCode": "B",
                                    "MealCodeDescription": "Breakfast"
                                },
                                "IsStopAirport": false,
                                "JourneyType": "Onward"
                            },
                            {
                                "FlightID": "563",
                                "CarrierCode": "AI",
                                "Origin": "MAA",
                                "Destination": "BLR",
                                "FlightNum": "563",
                                "DepartureDateTime": "2018-09-26T13:25:00",
                                "ArrivalDateTime": "2018-09-26T14:15:00",
                                "Duration": "50",
                                "OrgTerminal": "1",
                                "DesTerminal": null,
                                "AirlineCategory": null,
                                "AirCraftType": "",
                                "Via": "",
                                "ValidatingCarrier": "AI",
                                "ClassCode": "S",
                                "ClassCodeDesc": "",
                                "FareBasisCode": "ADVJR1",
                                "BreakPoint": "",
                                "CurrencyCode": "INR",
                                "OriginAirportName": "Chennai International Airport",
                                "OriginAirportCity": "Chennai",
                                "OriginAirportCountry": "India",
                                "DestinationAirportName": "Bengaluru International Airport",
                                "DestinationAirportCity": "Bangalore",
                                "DestinationAirportCountry": "India",
                                "AirlineName": "Air India",
                                "MajorClassCode": "Economy",
                                "AirEquipType": "319",
                                "MarriageGroup": "O",
                                "Baggage": {
                                    "Weight": "25",
                                    "Unit": "kg",
                                    "Pieces": "0"
                                },
                                "MealCode": {
                                    "MealCode": "S",
                                    "MealCodeDescription": "Snack"
                                },
                                "IsStopAirport": false,
                                "JourneyType": "Onward"
                            }
                        ],
                        "FareDescription": {
                            "IsNonRefundable": false,
                            "PaxFareDetails": [
                                {
                                    "PaxType": "AllPsg",
                                    "BasicAmount": "4800",
                                    "TotalTaxAmount": "553",
                                    "FuelSurcharge": "0",
                                    "Commission": "0",
                                    "OtherInfo": {
                                        "TransactionFee": "0",
                                        "ServiceTax": "0",
                                        "GrossAmount": 5353,
                                        "Item": []
                                    }
                                },
                                {
                                    "PaxType": "ADT",
                                    "BasicAmount": "4800",
                                    "TotalTaxAmount": "553",
                                    "FuelSurcharge": "0",
                                    "Commission": "0",
                                    "OtherInfo": {
                                        "TransactionFee": "0",
                                        "ServiceTax": "0",
                                        "GrossAmount": 5353,
                                        "Item": [
                                            {
                                                "TaxCode": "YRI",
                                                "Amount": "70"
                                            },
                                            {
                                                "TaxCode": "YRI",
                                                "Amount": "70"
                                            },
                                            {
                                                "TaxCode": "IN",
                                                "Amount": "12"
                                            },
                                            {
                                                "TaxCode": "K38",
                                                "Amount": "247"
                                            },
                                            {
                                                "TaxCode": "WO",
                                                "Amount": "154"
                                            }
                                        ]
                                    }
                                }
                            ],
                            "FareBasis": [
                                {
                                    "Code": "SAP8",
                                    "DepartureTime": "2018-09-26T06:05:00",
                                    "OriginLocation": "DEL",
                                    "DestinationLocation": "MAA",
                                    "ValidatingCarrier": "AI",
                                    "PsgType": "ADT",
                                    "PsgQty": 1
                                },
                                {
                                    "Code": "SAP8",
                                    "DepartureTime": "2018-09-26T13:25:00",
                                    "OriginLocation": "MAA",
                                    "DestinationLocation": "BLR",
                                    "ValidatingCarrier": "AI",
                                    "PsgType": "ADT",
                                    "PsgQty": 1
                                }
                            ]
                        },
                        "Miles": null,
                        "ElapsedTime": [
                            "490"
                        ],
                        "ValidatingCarrier": "AI"
                    },
                    {
                        "ApiProvider": "SB",
                        "Connection": {
                            "Onward": {
                                "IsConnection": true,
                                "NoOfStops": 1,
                                "ConnectionAirport": [
                                    {
                                        "Origin": "DEL",
                                        "Destination": "BOM"
                                    },
                                    {
                                        "Origin": "BOM",
                                        "Destination": "BLR"
                                    }
                                ]
                            },
                            "Return": {
                                "IsConnection": false,
                                "NoOfStops": 0,
                                "ConnectionAirport": []
                            }
                        },
                        "FlightDetails": [
                            {
                                "FlightID": "863",
                                "CarrierCode": "AI",
                                "Origin": "DEL",
                                "Destination": "BOM",
                                "FlightNum": "863",
                                "DepartureDateTime": "2018-09-26T13:00:00",
                                "ArrivalDateTime": "2018-09-26T15:10:00",
                                "Duration": "130",
                                "OrgTerminal": "3",
                                "DesTerminal": "2",
                                "AirlineCategory": null,
                                "AirCraftType": "",
                                "Via": "",
                                "ValidatingCarrier": "AI",
                                "ClassCode": "T",
                                "ClassCodeDesc": "",
                                "FareBasisCode": "ADVJR1",
                                "BreakPoint": "",
                                "CurrencyCode": "INR",
                                "OriginAirportName": "Indira Gandhi International Airport",
                                "OriginAirportCity": "New Delhi",
                                "OriginAirportCountry": "India",
                                "DestinationAirportName": "Chhatrapati Shivaji International Airport",
                                "DestinationAirportCity": "Mumbai",
                                "DestinationAirportCountry": "India",
                                "AirlineName": "Air India",
                                "MajorClassCode": "Economy",
                                "AirEquipType": "32B",
                                "MarriageGroup": "O",
                                "Baggage": {
                                    "Weight": "25",
                                    "Unit": "kg",
                                    "Pieces": "0"
                                },
                                "MealCode": {
                                    "MealCode": "L",
                                    "MealCodeDescription": "Lunch"
                                },
                                "IsStopAirport": false,
                                "JourneyType": "Onward"
                            },
                            {
                                "FlightID": "607",
                                "CarrierCode": "AI",
                                "Origin": "BOM",
                                "Destination": "BLR",
                                "FlightNum": "607",
                                "DepartureDateTime": "2018-09-26T16:40:00",
                                "ArrivalDateTime": "2018-09-26T18:30:00",
                                "Duration": "110",
                                "OrgTerminal": "2",
                                "DesTerminal": null,
                                "AirlineCategory": null,
                                "AirCraftType": "",
                                "Via": "",
                                "ValidatingCarrier": "AI",
                                "ClassCode": "S",
                                "ClassCodeDesc": "",
                                "FareBasisCode": "ADVJR1",
                                "BreakPoint": "",
                                "CurrencyCode": "INR",
                                "OriginAirportName": "Chhatrapati Shivaji International Airport",
                                "OriginAirportCity": "Mumbai",
                                "OriginAirportCountry": "India",
                                "DestinationAirportName": "Bengaluru International Airport",
                                "DestinationAirportCity": "Bangalore",
                                "DestinationAirportCountry": "India",
                                "AirlineName": "Air India",
                                "MajorClassCode": "Economy",
                                "AirEquipType": "319",
                                "MarriageGroup": "O",
                                "Baggage": {
                                    "Weight": "25",
                                    "Unit": "kg",
                                    "Pieces": "0"
                                },
                                "MealCode": {
                                    "MealCode": "S",
                                    "MealCodeDescription": "Snack"
                                },
                                "IsStopAirport": false,
                                "JourneyType": "Onward"
                            }
                        ],
                        "FareDescription": {
                            "IsNonRefundable": false,
                            "PaxFareDetails": [
                                {
                                    "PaxType": "AllPsg",
                                    "BasicAmount": "4950",
                                    "TotalTaxAmount": "561",
                                    "FuelSurcharge": "0",
                                    "Commission": "0",
                                    "OtherInfo": {
                                        "TransactionFee": "0",
                                        "ServiceTax": "0",
                                        "GrossAmount": 5511,
                                        "Item": []
                                    }
                                },
                                {
                                    "PaxType": "ADT",
                                    "BasicAmount": "4950",
                                    "TotalTaxAmount": "561",
                                    "FuelSurcharge": "0",
                                    "Commission": "0",
                                    "OtherInfo": {
                                        "TransactionFee": "0",
                                        "ServiceTax": "0",
                                        "GrossAmount": 5511,
                                        "Item": [
                                            {
                                                "TaxCode": "YRI",
                                                "Amount": "70"
                                            },
                                            {
                                                "TaxCode": "YRI",
                                                "Amount": "70"
                                            },
                                            {
                                                "TaxCode": "IN",
                                                "Amount": "12"
                                            },
                                            {
                                                "TaxCode": "K38",
                                                "Amount": "255"
                                            },
                                            {
                                                "TaxCode": "WO",
                                                "Amount": "154"
                                            }
                                        ]
                                    }
                                }
                            ],
                            "FareBasis": [
                                {
                                    "Code": "TAP8",
                                    "DepartureTime": "2018-09-26T13:00:00",
                                    "OriginLocation": "DEL",
                                    "DestinationLocation": "BOM",
                                    "ValidatingCarrier": "AI",
                                    "PsgType": "ADT",
                                    "PsgQty": 1
                                },
                                {
                                    "Code": "SAP8",
                                    "DepartureTime": "2018-09-26T16:40:00",
                                    "OriginLocation": "BOM",
                                    "DestinationLocation": "BLR",
                                    "ValidatingCarrier": "AI",
                                    "PsgType": "ADT",
                                    "PsgQty": 1
                                }
                            ]
                        },
                        "Miles": null,
                        "ElapsedTime": [
                            "330"
                        ],
                        "ValidatingCarrier": "AI"
                    },
                    {
                        "ApiProvider": "SB",
                        "Connection": {
                            "Onward": {
                                "IsConnection": false,
                                "NoOfStops": 0,
                                "ConnectionAirport": []
                            },
                            "Return": {
                                "IsConnection": false,
                                "NoOfStops": 0,
                                "ConnectionAirport": []
                            }
                        },
                        "FlightDetails": [
                            {
                                "FlightID": "504",
                                "CarrierCode": "AI",
                                "Origin": "DEL",
                                "Destination": "BLR",
                                "FlightNum": "504",
                                "DepartureDateTime": "2018-09-26T20:30:00",
                                "ArrivalDateTime": "2018-09-26T23:15:00",
                                "Duration": "165",
                                "OrgTerminal": "3",
                                "DesTerminal": null,
                                "AirlineCategory": null,
                                "AirCraftType": "",
                                "Via": "",
                                "ValidatingCarrier": "AI",
                                "ClassCode": "U",
                                "ClassCodeDesc": "",
                                "FareBasisCode": "ADVJR1",
                                "BreakPoint": "",
                                "CurrencyCode": "INR",
                                "OriginAirportName": "Indira Gandhi International Airport",
                                "OriginAirportCity": "New Delhi",
                                "OriginAirportCountry": "India",
                                "DestinationAirportName": "Bengaluru International Airport",
                                "DestinationAirportCity": "Bangalore",
                                "DestinationAirportCountry": "India",
                                "AirlineName": "Air India",
                                "MajorClassCode": "Economy",
                                "AirEquipType": "32B",
                                "MarriageGroup": "O",
                                "Baggage": {
                                    "Weight": "25",
                                    "Unit": "kg",
                                    "Pieces": "0"
                                },
                                "MealCode": {
                                    "MealCode": "D",
                                    "MealCodeDescription": "Dinner"
                                },
                                "IsStopAirport": false,
                                "JourneyType": "Onward"
                            }
                        ],
                        "FareDescription": {
                            "IsNonRefundable": false,
                            "PaxFareDetails": [
                                {
                                    "PaxType": "AllPsg",
                                    "BasicAmount": "5200",
                                    "TotalTaxAmount": "500",
                                    "FuelSurcharge": "0",
                                    "Commission": "0",
                                    "OtherInfo": {
                                        "TransactionFee": "0",
                                        "ServiceTax": "0",
                                        "GrossAmount": 5700,
                                        "Item": []
                                    }
                                },
                                {
                                    "PaxType": "ADT",
                                    "BasicAmount": "5200",
                                    "TotalTaxAmount": "500",
                                    "FuelSurcharge": "0",
                                    "Commission": "0",
                                    "OtherInfo": {
                                        "TransactionFee": "0",
                                        "ServiceTax": "0",
                                        "GrossAmount": 5700,
                                        "Item": [
                                            {
                                                "TaxCode": "YRI",
                                                "Amount": "70"
                                            },
                                            {
                                                "TaxCode": "IN",
                                                "Amount": "12"
                                            },
                                            {
                                                "TaxCode": "K38",
                                                "Amount": "264"
                                            },
                                            {
                                                "TaxCode": "WO",
                                                "Amount": "154"
                                            }
                                        ]
                                    }
                                }
                            ],
                            "FareBasis": [
                                {
                                    "Code": "UAP8",
                                    "DepartureTime": "2018-09-26T20:30:00",
                                    "OriginLocation": "DEL",
                                    "DestinationLocation": "BLR",
                                    "ValidatingCarrier": "AI",
                                    "PsgType": "ADT",
                                    "PsgQty": 1
                                }
                            ]
                        },
                        "Miles": null,
                        "ElapsedTime": [
                            "165"
                        ],
                        "ValidatingCarrier": "AI"
                    },
                    {
                        "ApiProvider": "SB",
                        "Connection": {
                            "Onward": {
                                "IsConnection": false,
                                "NoOfStops": 0,
                                "ConnectionAirport": []
                            },
                            "Return": {
                                "IsConnection": false,
                                "NoOfStops": 0,
                                "ConnectionAirport": []
                            }
                        },
                        "FlightDetails": [
                            {
                                "FlightID": "502",
                                "CarrierCode": "AI",
                                "Origin": "DEL",
                                "Destination": "BLR",
                                "FlightNum": "502",
                                "DepartureDateTime": "2018-09-26T13:25:00",
                                "ArrivalDateTime": "2018-09-26T16:15:00",
                                "Duration": "170",
                                "OrgTerminal": "3",
                                "DesTerminal": null,
                                "AirlineCategory": null,
                                "AirCraftType": "",
                                "Via": "",
                                "ValidatingCarrier": "AI",
                                "ClassCode": "U",
                                "ClassCodeDesc": "",
                                "FareBasisCode": "ADVJR1",
                                "BreakPoint": "",
                                "CurrencyCode": "INR",
                                "OriginAirportName": "Indira Gandhi International Airport",
                                "OriginAirportCity": "New Delhi",
                                "OriginAirportCountry": "India",
                                "DestinationAirportName": "Bengaluru International Airport",
                                "DestinationAirportCity": "Bangalore",
                                "DestinationAirportCountry": "India",
                                "AirlineName": "Air India",
                                "MajorClassCode": "Economy",
                                "AirEquipType": "32B",
                                "MarriageGroup": "O",
                                "Baggage": {
                                    "Weight": "25",
                                    "Unit": "kg",
                                    "Pieces": "0"
                                },
                                "MealCode": {
                                    "MealCode": "S",
                                    "MealCodeDescription": "Snack"
                                },
                                "IsStopAirport": false,
                                "JourneyType": "Onward"
                            }
                        ],
                        "FareDescription": {
                            "IsNonRefundable": false,
                            "PaxFareDetails": [
                                {
                                    "PaxType": "AllPsg",
                                    "BasicAmount": "5200",
                                    "TotalTaxAmount": "500",
                                    "FuelSurcharge": "0",
                                    "Commission": "0",
                                    "OtherInfo": {
                                        "TransactionFee": "0",
                                        "ServiceTax": "0",
                                        "GrossAmount": 5700,
                                        "Item": []
                                    }
                                },
                                {
                                    "PaxType": "ADT",
                                    "BasicAmount": "5200",
                                    "TotalTaxAmount": "500",
                                    "FuelSurcharge": "0",
                                    "Commission": "0",
                                    "OtherInfo": {
                                        "TransactionFee": "0",
                                        "ServiceTax": "0",
                                        "GrossAmount": 5700,
                                        "Item": [
                                            {
                                                "TaxCode": "YRI",
                                                "Amount": "70"
                                            },
                                            {
                                                "TaxCode": "IN",
                                                "Amount": "12"
                                            },
                                            {
                                                "TaxCode": "K38",
                                                "Amount": "264"
                                            },
                                            {
                                                "TaxCode": "WO",
                                                "Amount": "154"
                                            }
                                        ]
                                    }
                                }
                            ],
                            "FareBasis": [
                                {
                                    "Code": "UAP8",
                                    "DepartureTime": "2018-09-26T13:25:00",
                                    "OriginLocation": "DEL",
                                    "DestinationLocation": "BLR",
                                    "ValidatingCarrier": "AI",
                                    "PsgType": "ADT",
                                    "PsgQty": 1
                                }
                            ]
                        },
                        "Miles": null,
                        "ElapsedTime": [
                            "170"
                        ],
                        "ValidatingCarrier": "AI"
                    },
                    {
                        "ApiProvider": "SB",
                        "Connection": {
                            "Onward": {
                                "IsConnection": false,
                                "NoOfStops": 0,
                                "ConnectionAirport": []
                            },
                            "Return": {
                                "IsConnection": false,
                                "NoOfStops": 0,
                                "ConnectionAirport": []
                            }
                        },
                        "FlightDetails": [
                            {
                                "FlightID": "803",
                                "CarrierCode": "AI",
                                "Origin": "DEL",
                                "Destination": "BLR",
                                "FlightNum": "803",
                                "DepartureDateTime": "2018-09-26T06:10:00",
                                "ArrivalDateTime": "2018-09-26T09:20:00",
                                "Duration": "190",
                                "OrgTerminal": "3",
                                "DesTerminal": null,
                                "AirlineCategory": null,
                                "AirCraftType": "",
                                "Via": "",
                                "ValidatingCarrier": "AI",
                                "ClassCode": "U",
                                "ClassCodeDesc": "",
                                "FareBasisCode": "ADVJR1",
                                "BreakPoint": "",
                                "CurrencyCode": "INR",
                                "OriginAirportName": "Indira Gandhi International Airport",
                                "OriginAirportCity": "New Delhi",
                                "OriginAirportCountry": "India",
                                "DestinationAirportName": "Bengaluru International Airport",
                                "DestinationAirportCity": "Bangalore",
                                "DestinationAirportCountry": "India",
                                "AirlineName": "Air India",
                                "MajorClassCode": "Economy",
                                "AirEquipType": "32B",
                                "MarriageGroup": "O",
                                "Baggage": {
                                    "Weight": "25",
                                    "Unit": "kg",
                                    "Pieces": "0"
                                },
                                "MealCode": {
                                    "MealCode": "B",
                                    "MealCodeDescription": "Breakfast"
                                },
                                "IsStopAirport": false,
                                "JourneyType": "Onward"
                            }
                        ],
                        "FareDescription": {
                            "IsNonRefundable": false,
                            "PaxFareDetails": [
                                {
                                    "PaxType": "AllPsg",
                                    "BasicAmount": "5200",
                                    "TotalTaxAmount": "500",
                                    "FuelSurcharge": "0",
                                    "Commission": "0",
                                    "OtherInfo": {
                                        "TransactionFee": "0",
                                        "ServiceTax": "0",
                                        "GrossAmount": 5700,
                                        "Item": []
                                    }
                                },
                                {
                                    "PaxType": "ADT",
                                    "BasicAmount": "5200",
                                    "TotalTaxAmount": "500",
                                    "FuelSurcharge": "0",
                                    "Commission": "0",
                                    "OtherInfo": {
                                        "TransactionFee": "0",
                                        "ServiceTax": "0",
                                        "GrossAmount": 5700,
                                        "Item": [
                                            {
                                                "TaxCode": "YRI",
                                                "Amount": "70"
                                            },
                                            {
                                                "TaxCode": "IN",
                                                "Amount": "12"
                                            },
                                            {
                                                "TaxCode": "K38",
                                                "Amount": "264"
                                            },
                                            {
                                                "TaxCode": "WO",
                                                "Amount": "154"
                                            }
                                        ]
                                    }
                                }
                            ],
                            "FareBasis": [
                                {
                                    "Code": "UAP8",
                                    "DepartureTime": "2018-09-26T06:10:00",
                                    "OriginLocation": "DEL",
                                    "DestinationLocation": "BLR",
                                    "ValidatingCarrier": "AI",
                                    "PsgType": "ADT",
                                    "PsgQty": 1
                                }
                            ]
                        },
                        "Miles": null,
                        "ElapsedTime": [
                            "190"
                        ],
                        "ValidatingCarrier": "AI"
                    },
                    {
                        "ApiProvider": "SB",
                        "Connection": {
                            "Onward": {
                                "IsConnection": true,
                                "NoOfStops": 1,
                                "ConnectionAirport": [
                                    {
                                        "Origin": "DEL",
                                        "Destination": "HYD"
                                    },
                                    {
                                        "Origin": "HYD",
                                        "Destination": "BLR"
                                    }
                                ]
                            },
                            "Return": {
                                "IsConnection": false,
                                "NoOfStops": 0,
                                "ConnectionAirport": []
                            }
                        },
                        "FlightDetails": [
                            {
                                "FlightID": "126",
                                "CarrierCode": "AI",
                                "Origin": "DEL",
                                "Destination": "HYD",
                                "FlightNum": "126",
                                "DepartureDateTime": "2018-09-26T17:15:00",
                                "ArrivalDateTime": "2018-09-26T19:25:00",
                                "Duration": "130",
                                "OrgTerminal": "3",
                                "DesTerminal": null,
                                "AirlineCategory": null,
                                "AirCraftType": "",
                                "Via": "",
                                "ValidatingCarrier": "AI",
                                "ClassCode": "U",
                                "ClassCodeDesc": "",
                                "FareBasisCode": "ADVJR1",
                                "BreakPoint": "",
                                "CurrencyCode": "INR",
                                "OriginAirportName": "Indira Gandhi International Airport",
                                "OriginAirportCity": "New Delhi",
                                "OriginAirportCountry": "India",
                                "DestinationAirportName": "Rajiv Gandhi International Airport, Shamshabad",
                                "DestinationAirportCity": "Hyderabad",
                                "DestinationAirportCountry": "India",
                                "AirlineName": "Air India",
                                "MajorClassCode": "Economy",
                                "AirEquipType": "77W",
                                "MarriageGroup": "O",
                                "Baggage": {
                                    "Weight": "25",
                                    "Unit": "kg",
                                    "Pieces": "0"
                                },
                                "MealCode": {
                                    "MealCode": "S",
                                    "MealCodeDescription": "Snack"
                                },
                                "IsStopAirport": false,
                                "JourneyType": "Onward"
                            },
                            {
                                "FlightID": "978",
                                "CarrierCode": "AI",
                                "Origin": "HYD",
                                "Destination": "BLR",
                                "FlightNum": "978",
                                "DepartureDateTime": "2018-09-27T03:30:00",
                                "ArrivalDateTime": "2018-09-27T04:40:00",
                                "Duration": "70",
                                "OrgTerminal": null,
                                "DesTerminal": null,
                                "AirlineCategory": null,
                                "AirCraftType": "",
                                "Via": "",
                                "ValidatingCarrier": "AI",
                                "ClassCode": "U",
                                "ClassCodeDesc": "",
                                "FareBasisCode": "ADVJR1",
                                "BreakPoint": "",
                                "CurrencyCode": "INR",
                                "OriginAirportName": "Rajiv Gandhi International Airport, Shamshabad",
                                "OriginAirportCity": "Hyderabad",
                                "OriginAirportCountry": "India",
                                "DestinationAirportName": "Bengaluru International Airport",
                                "DestinationAirportCity": "Bangalore",
                                "DestinationAirportCountry": "India",
                                "AirlineName": "Air India",
                                "MajorClassCode": "Economy",
                                "AirEquipType": "319",
                                "MarriageGroup": "O",
                                "Baggage": {
                                    "Weight": "25",
                                    "Unit": "kg",
                                    "Pieces": "0"
                                },
                                "MealCode": {
                                    "MealCode": "S",
                                    "MealCodeDescription": "Snack"
                                },
                                "IsStopAirport": false,
                                "JourneyType": "Onward"
                            }
                        ],
                        "FareDescription": {
                            "IsNonRefundable": false,
                            "PaxFareDetails": [
                                {
                                    "PaxType": "AllPsg",
                                    "BasicAmount": "5100",
                                    "TotalTaxAmount": "1312",
                                    "FuelSurcharge": "0",
                                    "Commission": "0",
                                    "OtherInfo": {
                                        "TransactionFee": "0",
                                        "ServiceTax": "0",
                                        "GrossAmount": 6412,
                                        "Item": []
                                    }
                                },
                                {
                                    "PaxType": "ADT",
                                    "BasicAmount": "5100",
                                    "TotalTaxAmount": "1312",
                                    "FuelSurcharge": "0",
                                    "Commission": "0",
                                    "OtherInfo": {
                                        "TransactionFee": "0",
                                        "ServiceTax": "0",
                                        "GrossAmount": 6412,
                                        "Item": [
                                            {
                                                "TaxCode": "YRI",
                                                "Amount": "70"
                                            },
                                            {
                                                "TaxCode": "YRI",
                                                "Amount": "70"
                                            },
                                            {
                                                "TaxCode": "IN",
                                                "Amount": "12"
                                            },
                                            {
                                                "TaxCode": "IN",
                                                "Amount": "508"
                                            },
                                            {
                                                "TaxCode": "K38",
                                                "Amount": "262"
                                            },
                                            {
                                                "TaxCode": "WO",
                                                "Amount": "154"
                                            },
                                            {
                                                "TaxCode": "WO",
                                                "Amount": "236"
                                            }
                                        ]
                                    }
                                }
                            ],
                            "FareBasis": [
                                {
                                    "Code": "UAP8",
                                    "DepartureTime": "2018-09-26T17:15:00",
                                    "OriginLocation": "DEL",
                                    "DestinationLocation": "HYD",
                                    "ValidatingCarrier": "AI",
                                    "PsgType": "ADT",
                                    "PsgQty": 1
                                },
                                {
                                    "Code": "UAP8",
                                    "DepartureTime": "2018-09-27T03:30:00",
                                    "OriginLocation": "HYD",
                                    "DestinationLocation": "BLR",
                                    "ValidatingCarrier": "AI",
                                    "PsgType": "ADT",
                                    "PsgQty": 1
                                }
                            ]
                        },
                        "Miles": null,
                        "ElapsedTime": [
                            "685"
                        ],
                        "ValidatingCarrier": "AI"
                    },
                    {
                        "ApiProvider": "SB",
                        "Connection": {
                            "Onward": {
                                "IsConnection": false,
                                "NoOfStops": 0,
                                "ConnectionAirport": []
                            },
                            "Return": {
                                "IsConnection": false,
                                "NoOfStops": 0,
                                "ConnectionAirport": []
                            }
                        },
                        "FlightDetails": [
                            {
                                "FlightID": "159",
                                "CarrierCode": "9W",
                                "Origin": "DEL",
                                "Destination": "BLR",
                                "FlightNum": "159",
                                "DepartureDateTime": "2018-09-26T12:00:00",
                                "ArrivalDateTime": "2018-09-26T13:30:00",
                                "Duration": "90",
                                "OrgTerminal": null,
                                "DesTerminal": null,
                                "AirlineCategory": null,
                                "AirCraftType": "",
                                "Via": "",
                                "ValidatingCarrier": "9W",
                                "ClassCode": "K",
                                "ClassCodeDesc": "",
                                "FareBasisCode": "ADVJR1",
                                "BreakPoint": "",
                                "CurrencyCode": "INR",
                                "OriginAirportName": "Indira Gandhi International Airport",
                                "OriginAirportCity": "New Delhi",
                                "OriginAirportCountry": "India",
                                "DestinationAirportName": "Bengaluru International Airport",
                                "DestinationAirportCity": "Bangalore",
                                "DestinationAirportCountry": "India",
                                "AirlineName": "Jet Airways",
                                "MajorClassCode": "Economy",
                                "AirEquipType": "73H",
                                "MarriageGroup": "O",
                                "Baggage": {
                                    "Weight": null,
                                    "Unit": null,
                                    "Pieces": "1"
                                },
                                "MealCode": {
                                    "MealCode": "S",
                                    "MealCodeDescription": "Snack"
                                },
                                "IsStopAirport": false,
                                "JourneyType": "Onward"
                            }
                        ],
                        "FareDescription": {
                            "IsNonRefundable": false,
                            "PaxFareDetails": [
                                {
                                    "PaxType": "AllPsg",
                                    "BasicAmount": "4800",
                                    "TotalTaxAmount": "1798",
                                    "FuelSurcharge": "0",
                                    "Commission": "0",
                                    "OtherInfo": {
                                        "TransactionFee": "0",
                                        "ServiceTax": "0",
                                        "GrossAmount": 6598,
                                        "Item": []
                                    }
                                },
                                {
                                    "PaxType": "ADT",
                                    "BasicAmount": "4800",
                                    "TotalTaxAmount": "1798",
                                    "FuelSurcharge": "0",
                                    "Commission": "0",
                                    "OtherInfo": {
                                        "TransactionFee": "0",
                                        "ServiceTax": "0",
                                        "GrossAmount": 6598,
                                        "Item": [
                                            {
                                                "TaxCode": "YQF",
                                                "Amount": "1200"
                                            },
                                            {
                                                "TaxCode": "YRF",
                                                "Amount": "125"
                                            },
                                            {
                                                "TaxCode": "IN",
                                                "Amount": "12"
                                            },
                                            {
                                                "TaxCode": "K38",
                                                "Amount": "307"
                                            },
                                            {
                                                "TaxCode": "WO",
                                                "Amount": "154"
                                            }
                                        ]
                                    }
                                }
                            ],
                            "FareBasis": [
                                {
                                    "Code": "K2IPO",
                                    "DepartureTime": "2018-09-26T12:00:00",
                                    "OriginLocation": "DEL",
                                    "DestinationLocation": "BLR",
                                    "ValidatingCarrier": "9W",
                                    "PsgType": "ADT",
                                    "PsgQty": 1
                                }
                            ]
                        },
                        "Miles": null,
                        "ElapsedTime": [
                            "90"
                        ],
                        "ValidatingCarrier": "9W"
                    },
                    {
                        "ApiProvider": "SB",
                        "Connection": {
                            "Onward": {
                                "IsConnection": false,
                                "NoOfStops": 0,
                                "ConnectionAirport": []
                            },
                            "Return": {
                                "IsConnection": false,
                                "NoOfStops": 0,
                                "ConnectionAirport": []
                            }
                        },
                        "FlightDetails": [
                            {
                                "FlightID": "88",
                                "CarrierCode": "9W",
                                "Origin": "DEL",
                                "Destination": "BLR",
                                "FlightNum": "88",
                                "DepartureDateTime": "2018-09-26T12:00:00",
                                "ArrivalDateTime": "2018-09-26T13:30:00",
                                "Duration": "90",
                                "OrgTerminal": null,
                                "DesTerminal": null,
                                "AirlineCategory": null,
                                "AirCraftType": "",
                                "Via": "",
                                "ValidatingCarrier": "9W",
                                "ClassCode": "K",
                                "ClassCodeDesc": "",
                                "FareBasisCode": "ADVJR1",
                                "BreakPoint": "",
                                "CurrencyCode": "INR",
                                "OriginAirportName": "Indira Gandhi International Airport",
                                "OriginAirportCity": "New Delhi",
                                "OriginAirportCountry": "India",
                                "DestinationAirportName": "Bengaluru International Airport",
                                "DestinationAirportCity": "Bangalore",
                                "DestinationAirportCountry": "India",
                                "AirlineName": "Jet Airways",
                                "MajorClassCode": "Economy",
                                "AirEquipType": "73H",
                                "MarriageGroup": "O",
                                "Baggage": {
                                    "Weight": null,
                                    "Unit": null,
                                    "Pieces": "1"
                                },
                                "MealCode": {
                                    "MealCode": "S",
                                    "MealCodeDescription": "Snack"
                                },
                                "IsStopAirport": false,
                                "JourneyType": "Onward"
                            }
                        ],
                        "FareDescription": {
                            "IsNonRefundable": false,
                            "PaxFareDetails": [
                                {
                                    "PaxType": "AllPsg",
                                    "BasicAmount": "4800",
                                    "TotalTaxAmount": "1798",
                                    "FuelSurcharge": "0",
                                    "Commission": "0",
                                    "OtherInfo": {
                                        "TransactionFee": "0",
                                        "ServiceTax": "0",
                                        "GrossAmount": 6598,
                                        "Item": []
                                    }
                                },
                                {
                                    "PaxType": "ADT",
                                    "BasicAmount": "4800",
                                    "TotalTaxAmount": "1798",
                                    "FuelSurcharge": "0",
                                    "Commission": "0",
                                    "OtherInfo": {
                                        "TransactionFee": "0",
                                        "ServiceTax": "0",
                                        "GrossAmount": 6598,
                                        "Item": [
                                            {
                                                "TaxCode": "YQF",
                                                "Amount": "1200"
                                            },
                                            {
                                                "TaxCode": "YRF",
                                                "Amount": "125"
                                            },
                                            {
                                                "TaxCode": "IN",
                                                "Amount": "12"
                                            },
                                            {
                                                "TaxCode": "K38",
                                                "Amount": "307"
                                            },
                                            {
                                                "TaxCode": "WO",
                                                "Amount": "154"
                                            }
                                        ]
                                    }
                                }
                            ],
                            "FareBasis": [
                                {
                                    "Code": "K2IPO",
                                    "DepartureTime": "2018-09-26T12:00:00",
                                    "OriginLocation": "DEL",
                                    "DestinationLocation": "BLR",
                                    "ValidatingCarrier": "9W",
                                    "PsgType": "ADT",
                                    "PsgQty": 1
                                }
                            ]
                        },
                        "Miles": null,
                        "ElapsedTime": [
                            "90"
                        ],
                        "ValidatingCarrier": "9W"
                    },
                    {
                        "ApiProvider": "SB",
                        "Connection": {
                            "Onward": {
                                "IsConnection": false,
                                "NoOfStops": 0,
                                "ConnectionAirport": []
                            },
                            "Return": {
                                "IsConnection": false,
                                "NoOfStops": 0,
                                "ConnectionAirport": []
                            }
                        },
                        "FlightDetails": [
                            {
                                "FlightID": "9092",
                                "CarrierCode": "H1",
                                "Origin": "DEL",
                                "Destination": "BLR",
                                "FlightNum": "9092",
                                "DepartureDateTime": "2018-09-26T17:55:00",
                                "ArrivalDateTime": "2018-09-26T20:40:00",
                                "Duration": "165",
                                "OrgTerminal": "1D",
                                "DesTerminal": null,
                                "AirlineCategory": null,
                                "AirCraftType": "",
                                "Via": "",
                                "ValidatingCarrier": "SG",
                                "ClassCode": "L",
                                "ClassCodeDesc": "",
                                "FareBasisCode": "ADVJR1",
                                "BreakPoint": "",
                                "CurrencyCode": "INR",
                                "OriginAirportName": "Indira Gandhi International Airport",
                                "OriginAirportCity": "New Delhi",
                                "OriginAirportCountry": "India",
                                "DestinationAirportName": "Bengaluru International Airport",
                                "DestinationAirportCity": "Bangalore",
                                "DestinationAirportCountry": "India",
                                "AirlineName": "Hahn Air",
                                "MajorClassCode": "Economy",
                                "AirEquipType": "737",
                                "MarriageGroup": "O",
                                "Baggage": {
                                    "Weight": null,
                                    "Unit": null,
                                    "Pieces": "1"
                                },
                                "MealCode": {
                                    "MealCode": null,
                                    "MealCodeDescription": null
                                },
                                "IsStopAirport": false,
                                "JourneyType": "Onward"
                            }
                        ],
                        "FareDescription": {
                            "IsNonRefundable": true,
                            "PaxFareDetails": [
                                {
                                    "PaxType": "AllPsg",
                                    "BasicAmount": "11900",
                                    "TotalTaxAmount": "6595",
                                    "FuelSurcharge": "0",
                                    "Commission": "0",
                                    "OtherInfo": {
                                        "TransactionFee": "0",
                                        "ServiceTax": "0",
                                        "GrossAmount": 18495,
                                        "Item": []
                                    }
                                },
                                {
                                    "PaxType": "ADT",
                                    "BasicAmount": "11900",
                                    "TotalTaxAmount": "6595",
                                    "FuelSurcharge": "0",
                                    "Commission": "0",
                                    "OtherInfo": {
                                        "TransactionFee": "0",
                                        "ServiceTax": "0",
                                        "GrossAmount": 18495,
                                        "Item": [
                                            {
                                                "TaxCode": "YQF",
                                                "Amount": "2056"
                                            },
                                            {
                                                "TaxCode": "YRF",
                                                "Amount": "3500"
                                            },
                                            {
                                                "TaxCode": "IN",
                                                "Amount": "12"
                                            },
                                            {
                                                "TaxCode": "K38",
                                                "Amount": "873"
                                            },
                                            {
                                                "TaxCode": "WO",
                                                "Amount": "154"
                                            }
                                        ]
                                    }
                                }
                            ],
                            "FareBasis": [
                                {
                                    "Code": "LOWSG",
                                    "DepartureTime": "2018-09-26T17:55:00",
                                    "OriginLocation": "DEL",
                                    "DestinationLocation": "BLR",
                                    "ValidatingCarrier": "H1",
                                    "PsgType": "ADT",
                                    "PsgQty": 1
                                }
                            ]
                        },
                        "Miles": null,
                        "ElapsedTime": [
                            "165"
                        ],
                        "ValidatingCarrier": "H1"
                    },
                    {
                        "ApiProvider": "SB",
                        "Connection": {
                            "Onward": {
                                "IsConnection": false,
                                "NoOfStops": 0,
                                "ConnectionAirport": []
                            },
                            "Return": {
                                "IsConnection": false,
                                "NoOfStops": 0,
                                "ConnectionAirport": []
                            }
                        },
                        "FlightDetails": [
                            {
                                "FlightID": "9056",
                                "CarrierCode": "H1",
                                "Origin": "DEL",
                                "Destination": "BLR",
                                "FlightNum": "9056",
                                "DepartureDateTime": "2018-09-26T20:55:00",
                                "ArrivalDateTime": "2018-09-26T23:45:00",
                                "Duration": "170",
                                "OrgTerminal": "1D",
                                "DesTerminal": null,
                                "AirlineCategory": null,
                                "AirCraftType": "",
                                "Via": "",
                                "ValidatingCarrier": "SG",
                                "ClassCode": "L",
                                "ClassCodeDesc": "",
                                "FareBasisCode": "ADVJR1",
                                "BreakPoint": "",
                                "CurrencyCode": "INR",
                                "OriginAirportName": "Indira Gandhi International Airport",
                                "OriginAirportCity": "New Delhi",
                                "OriginAirportCountry": "India",
                                "DestinationAirportName": "Bengaluru International Airport",
                                "DestinationAirportCity": "Bangalore",
                                "DestinationAirportCountry": "India",
                                "AirlineName": "Hahn Air",
                                "MajorClassCode": "Economy",
                                "AirEquipType": "737",
                                "MarriageGroup": "O",
                                "Baggage": {
                                    "Weight": null,
                                    "Unit": null,
                                    "Pieces": "1"
                                },
                                "MealCode": {
                                    "MealCode": null,
                                    "MealCodeDescription": null
                                },
                                "IsStopAirport": false,
                                "JourneyType": "Onward"
                            }
                        ],
                        "FareDescription": {
                            "IsNonRefundable": true,
                            "PaxFareDetails": [
                                {
                                    "PaxType": "AllPsg",
                                    "BasicAmount": "11900",
                                    "TotalTaxAmount": "6595",
                                    "FuelSurcharge": "0",
                                    "Commission": "0",
                                    "OtherInfo": {
                                        "TransactionFee": "0",
                                        "ServiceTax": "0",
                                        "GrossAmount": 18495,
                                        "Item": []
                                    }
                                },
                                {
                                    "PaxType": "ADT",
                                    "BasicAmount": "11900",
                                    "TotalTaxAmount": "6595",
                                    "FuelSurcharge": "0",
                                    "Commission": "0",
                                    "OtherInfo": {
                                        "TransactionFee": "0",
                                        "ServiceTax": "0",
                                        "GrossAmount": 18495,
                                        "Item": [
                                            {
                                                "TaxCode": "YQF",
                                                "Amount": "2056"
                                            },
                                            {
                                                "TaxCode": "YRF",
                                                "Amount": "3500"
                                            },
                                            {
                                                "TaxCode": "IN",
                                                "Amount": "12"
                                            },
                                            {
                                                "TaxCode": "K38",
                                                "Amount": "873"
                                            },
                                            {
                                                "TaxCode": "WO",
                                                "Amount": "154"
                                            }
                                        ]
                                    }
                                }
                            ],
                            "FareBasis": [
                                {
                                    "Code": "LOWSG",
                                    "DepartureTime": "2018-09-26T20:55:00",
                                    "OriginLocation": "DEL",
                                    "DestinationLocation": "BLR",
                                    "ValidatingCarrier": "H1",
                                    "PsgType": "ADT",
                                    "PsgQty": 1
                                }
                            ]
                        },
                        "Miles": null,
                        "ElapsedTime": [
                            "170"
                        ],
                        "ValidatingCarrier": "H1"
                    },
                    {
                        "ApiProvider": "SB",
                        "Connection": {
                            "Onward": {
                                "IsConnection": false,
                                "NoOfStops": 0,
                                "ConnectionAirport": []
                            },
                            "Return": {
                                "IsConnection": false,
                                "NoOfStops": 0,
                                "ConnectionAirport": []
                            }
                        },
                        "FlightDetails": [
                            {
                                "FlightID": "9086",
                                "CarrierCode": "H1",
                                "Origin": "DEL",
                                "Destination": "BLR",
                                "FlightNum": "9086",
                                "DepartureDateTime": "2018-09-26T06:05:00",
                                "ArrivalDateTime": "2018-09-26T09:00:00",
                                "Duration": "175",
                                "OrgTerminal": "1D",
                                "DesTerminal": null,
                                "AirlineCategory": null,
                                "AirCraftType": "",
                                "Via": "",
                                "ValidatingCarrier": "SG",
                                "ClassCode": "L",
                                "ClassCodeDesc": "",
                                "FareBasisCode": "ADVJR1",
                                "BreakPoint": "",
                                "CurrencyCode": "INR",
                                "OriginAirportName": "Indira Gandhi International Airport",
                                "OriginAirportCity": "New Delhi",
                                "OriginAirportCountry": "India",
                                "DestinationAirportName": "Bengaluru International Airport",
                                "DestinationAirportCity": "Bangalore",
                                "DestinationAirportCountry": "India",
                                "AirlineName": "Hahn Air",
                                "MajorClassCode": "Economy",
                                "AirEquipType": "737",
                                "MarriageGroup": "O",
                                "Baggage": {
                                    "Weight": null,
                                    "Unit": null,
                                    "Pieces": "1"
                                },
                                "MealCode": {
                                    "MealCode": null,
                                    "MealCodeDescription": null
                                },
                                "IsStopAirport": false,
                                "JourneyType": "Onward"
                            }
                        ],
                        "FareDescription": {
                            "IsNonRefundable": true,
                            "PaxFareDetails": [
                                {
                                    "PaxType": "AllPsg",
                                    "BasicAmount": "11900",
                                    "TotalTaxAmount": "6595",
                                    "FuelSurcharge": "0",
                                    "Commission": "0",
                                    "OtherInfo": {
                                        "TransactionFee": "0",
                                        "ServiceTax": "0",
                                        "GrossAmount": 18495,
                                        "Item": []
                                    }
                                },
                                {
                                    "PaxType": "ADT",
                                    "BasicAmount": "11900",
                                    "TotalTaxAmount": "6595",
                                    "FuelSurcharge": "0",
                                    "Commission": "0",
                                    "OtherInfo": {
                                        "TransactionFee": "0",
                                        "ServiceTax": "0",
                                        "GrossAmount": 18495,
                                        "Item": [
                                            {
                                                "TaxCode": "YQF",
                                                "Amount": "2056"
                                            },
                                            {
                                                "TaxCode": "YRF",
                                                "Amount": "3500"
                                            },
                                            {
                                                "TaxCode": "IN",
                                                "Amount": "12"
                                            },
                                            {
                                                "TaxCode": "K38",
                                                "Amount": "873"
                                            },
                                            {
                                                "TaxCode": "WO",
                                                "Amount": "154"
                                            }
                                        ]
                                    }
                                }
                            ],
                            "FareBasis": [
                                {
                                    "Code": "LOWSG",
                                    "DepartureTime": "2018-09-26T06:05:00",
                                    "OriginLocation": "DEL",
                                    "DestinationLocation": "BLR",
                                    "ValidatingCarrier": "H1",
                                    "PsgType": "ADT",
                                    "PsgQty": 1
                                }
                            ]
                        },
                        "Miles": null,
                        "ElapsedTime": [
                            "175"
                        ],
                        "ValidatingCarrier": "H1"
                    },
                    {
                        "ApiProvider": "SB",
                        "Connection": {
                            "Onward": {
                                "IsConnection": true,
                                "NoOfStops": 1,
                                "ConnectionAirport": [
                                    {
                                        "Origin": "DEL",
                                        "Destination": "HYD"
                                    },
                                    {
                                        "Origin": "HYD",
                                        "Destination": "BLR"
                                    }
                                ]
                            },
                            "Return": {
                                "IsConnection": false,
                                "NoOfStops": 0,
                                "ConnectionAirport": []
                            }
                        },
                        "FlightDetails": [
                            {
                                "FlightID": "9042",
                                "CarrierCode": "H1",
                                "Origin": "DEL",
                                "Destination": "HYD",
                                "FlightNum": "9042",
                                "DepartureDateTime": "2018-09-26T06:00:00",
                                "ArrivalDateTime": "2018-09-26T08:10:00",
                                "Duration": "130",
                                "OrgTerminal": "1D",
                                "DesTerminal": null,
                                "AirlineCategory": null,
                                "AirCraftType": "",
                                "Via": "",
                                "ValidatingCarrier": "SG",
                                "ClassCode": "L",
                                "ClassCodeDesc": "",
                                "FareBasisCode": "ADVJR1",
                                "BreakPoint": "",
                                "CurrencyCode": "INR",
                                "OriginAirportName": "Indira Gandhi International Airport",
                                "OriginAirportCity": "New Delhi",
                                "OriginAirportCountry": "India",
                                "DestinationAirportName": "Rajiv Gandhi International Airport, Shamshabad",
                                "DestinationAirportCity": "Hyderabad",
                                "DestinationAirportCountry": "India",
                                "AirlineName": "Hahn Air",
                                "MajorClassCode": "Economy",
                                "AirEquipType": "737",
                                "MarriageGroup": "O",
                                "Baggage": {
                                    "Weight": null,
                                    "Unit": null,
                                    "Pieces": "1"
                                },
                                "MealCode": {
                                    "MealCode": null,
                                    "MealCodeDescription": null
                                },
                                "IsStopAirport": false,
                                "JourneyType": "Onward"
                            },
                            {
                                "FlightID": "9142",
                                "CarrierCode": "H1",
                                "Origin": "HYD",
                                "Destination": "BLR",
                                "FlightNum": "9142",
                                "DepartureDateTime": "2018-09-26T10:40:00",
                                "ArrivalDateTime": "2018-09-26T11:55:00",
                                "Duration": "75",
                                "OrgTerminal": null,
                                "DesTerminal": null,
                                "AirlineCategory": null,
                                "AirCraftType": "",
                                "Via": "",
                                "ValidatingCarrier": "SG",
                                "ClassCode": "L",
                                "ClassCodeDesc": "",
                                "FareBasisCode": "ADVJR1",
                                "BreakPoint": "",
                                "CurrencyCode": "INR",
                                "OriginAirportName": "Rajiv Gandhi International Airport, Shamshabad",
                                "OriginAirportCity": "Hyderabad",
                                "OriginAirportCountry": "India",
                                "DestinationAirportName": "Bengaluru International Airport",
                                "DestinationAirportCity": "Bangalore",
                                "DestinationAirportCountry": "India",
                                "AirlineName": "Hahn Air",
                                "MajorClassCode": "Economy",
                                "AirEquipType": "737",
                                "MarriageGroup": "O",
                                "Baggage": {
                                    "Weight": null,
                                    "Unit": null,
                                    "Pieces": "1"
                                },
                                "MealCode": {
                                    "MealCode": null,
                                    "MealCodeDescription": null
                                },
                                "IsStopAirport": false,
                                "JourneyType": "Onward"
                            }
                        ],
                        "FareDescription": {
                            "IsNonRefundable": true,
                            "PaxFareDetails": [
                                {
                                    "PaxType": "AllPsg",
                                    "BasicAmount": "16850",
                                    "TotalTaxAmount": "12913",
                                    "FuelSurcharge": "0",
                                    "Commission": "0",
                                    "OtherInfo": {
                                        "TransactionFee": "0",
                                        "ServiceTax": "0",
                                        "GrossAmount": 29763,
                                        "Item": []
                                    }
                                },
                                {
                                    "PaxType": "ADT",
                                    "BasicAmount": "16850",
                                    "TotalTaxAmount": "12913",
                                    "FuelSurcharge": "0",
                                    "Commission": "0",
                                    "OtherInfo": {
                                        "TransactionFee": "0",
                                        "ServiceTax": "0",
                                        "GrossAmount": 29763,
                                        "Item": [
                                            {
                                                "TaxCode": "YQF",
                                                "Amount": "2056"
                                            },
                                            {
                                                "TaxCode": "YQF",
                                                "Amount": "2056"
                                            },
                                            {
                                                "TaxCode": "YRF",
                                                "Amount": "3500"
                                            },
                                            {
                                                "TaxCode": "YRF",
                                                "Amount": "3500"
                                            },
                                            {
                                                "TaxCode": "IN",
                                                "Amount": "12"
                                            },
                                            {
                                                "TaxCode": "K38",
                                                "Amount": "1399"
                                            },
                                            {
                                                "TaxCode": "WO",
                                                "Amount": "154"
                                            },
                                            {
                                                "TaxCode": "WO",
                                                "Amount": "236"
                                            }
                                        ]
                                    }
                                }
                            ],
                            "FareBasis": [
                                {
                                    "Code": "LOWSG",
                                    "DepartureTime": "2018-09-26T06:00:00",
                                    "OriginLocation": "DEL",
                                    "DestinationLocation": "HYD",
                                    "ValidatingCarrier": "H1",
                                    "PsgType": "ADT",
                                    "PsgQty": 1
                                },
                                {
                                    "Code": "LOWSG",
                                    "DepartureTime": "2018-09-26T10:40:00",
                                    "OriginLocation": "HYD",
                                    "DestinationLocation": "BLR",
                                    "ValidatingCarrier": "H1",
                                    "PsgType": "ADT",
                                    "PsgQty": 1
                                }
                            ]
                        },
                        "Miles": null,
                        "ElapsedTime": [
                            "355"
                        ],
                        "ValidatingCarrier": "H1"
                    },
                    {
                        "ApiProvider": "SB",
                        "Connection": {
                            "Onward": {
                                "IsConnection": true,
                                "NoOfStops": 1,
                                "ConnectionAirport": [
                                    {
                                        "Origin": "DEL",
                                        "Destination": "MAA"
                                    },
                                    {
                                        "Origin": "MAA",
                                        "Destination": "BLR"
                                    }
                                ]
                            },
                            "Return": {
                                "IsConnection": false,
                                "NoOfStops": 0,
                                "ConnectionAirport": []
                            }
                        },
                        "FlightDetails": [
                            {
                                "FlightID": "9036",
                                "CarrierCode": "H1",
                                "Origin": "DEL",
                                "Destination": "MAA",
                                "FlightNum": "9036",
                                "DepartureDateTime": "2018-09-26T14:45:00",
                                "ArrivalDateTime": "2018-09-26T17:25:00",
                                "Duration": "160",
                                "OrgTerminal": "1D",
                                "DesTerminal": null,
                                "AirlineCategory": null,
                                "AirCraftType": "",
                                "Via": "",
                                "ValidatingCarrier": "SG",
                                "ClassCode": "L",
                                "ClassCodeDesc": "",
                                "FareBasisCode": "ADVJR1",
                                "BreakPoint": "",
                                "CurrencyCode": "INR",
                                "OriginAirportName": "Indira Gandhi International Airport",
                                "OriginAirportCity": "New Delhi",
                                "OriginAirportCountry": "India",
                                "DestinationAirportName": "Chennai International Airport",
                                "DestinationAirportCity": "Chennai",
                                "DestinationAirportCountry": "India",
                                "AirlineName": "Hahn Air",
                                "MajorClassCode": "Economy",
                                "AirEquipType": "737",
                                "MarriageGroup": "O",
                                "Baggage": {
                                    "Weight": null,
                                    "Unit": null,
                                    "Pieces": "1"
                                },
                                "MealCode": {
                                    "MealCode": null,
                                    "MealCodeDescription": null
                                },
                                "IsStopAirport": false,
                                "JourneyType": "Onward"
                            },
                            {
                                "FlightID": "9288",
                                "CarrierCode": "H1",
                                "Origin": "MAA",
                                "Destination": "BLR",
                                "FlightNum": "9288",
                                "DepartureDateTime": "2018-09-26T19:05:00",
                                "ArrivalDateTime": "2018-09-26T20:05:00",
                                "Duration": "60",
                                "OrgTerminal": null,
                                "DesTerminal": null,
                                "AirlineCategory": null,
                                "AirCraftType": "",
                                "Via": "",
                                "ValidatingCarrier": "SG",
                                "ClassCode": "L",
                                "ClassCodeDesc": "",
                                "FareBasisCode": "ADVJR1",
                                "BreakPoint": "",
                                "CurrencyCode": "INR",
                                "OriginAirportName": "Chennai International Airport",
                                "OriginAirportCity": "Chennai",
                                "OriginAirportCountry": "India",
                                "DestinationAirportName": "Bengaluru International Airport",
                                "DestinationAirportCity": "Bangalore",
                                "DestinationAirportCountry": "India",
                                "AirlineName": "Hahn Air",
                                "MajorClassCode": "Economy",
                                "AirEquipType": "DH8",
                                "MarriageGroup": "O",
                                "Baggage": {
                                    "Weight": null,
                                    "Unit": null,
                                    "Pieces": "1"
                                },
                                "MealCode": {
                                    "MealCode": null,
                                    "MealCodeDescription": null
                                },
                                "IsStopAirport": false,
                                "JourneyType": "Onward"
                            }
                        ],
                        "FareDescription": {
                            "IsNonRefundable": true,
                            "PaxFareDetails": [
                                {
                                    "PaxType": "AllPsg",
                                    "BasicAmount": "18850",
                                    "TotalTaxAmount": "12777",
                                    "FuelSurcharge": "0",
                                    "Commission": "0",
                                    "OtherInfo": {
                                        "TransactionFee": "0",
                                        "ServiceTax": "0",
                                        "GrossAmount": 31627,
                                        "Item": []
                                    }
                                },
                                {
                                    "PaxType": "ADT",
                                    "BasicAmount": "18850",
                                    "TotalTaxAmount": "12777",
                                    "FuelSurcharge": "0",
                                    "Commission": "0",
                                    "OtherInfo": {
                                        "TransactionFee": "0",
                                        "ServiceTax": "0",
                                        "GrossAmount": 31627,
                                        "Item": [
                                            {
                                                "TaxCode": "YQF",
                                                "Amount": "2056"
                                            },
                                            {
                                                "TaxCode": "YQF",
                                                "Amount": "2056"
                                            },
                                            {
                                                "TaxCode": "YRF",
                                                "Amount": "3500"
                                            },
                                            {
                                                "TaxCode": "YRF",
                                                "Amount": "3500"
                                            },
                                            {
                                                "TaxCode": "IN",
                                                "Amount": "12"
                                            },
                                            {
                                                "TaxCode": "K38",
                                                "Amount": "1499"
                                            },
                                            {
                                                "TaxCode": "WO",
                                                "Amount": "154"
                                            }
                                        ]
                                    }
                                }
                            ],
                            "FareBasis": [
                                {
                                    "Code": "LOWSG",
                                    "DepartureTime": "2018-09-26T14:45:00",
                                    "OriginLocation": "DEL",
                                    "DestinationLocation": "MAA",
                                    "ValidatingCarrier": "H1",
                                    "PsgType": "ADT",
                                    "PsgQty": 1
                                },
                                {
                                    "Code": "LOWSG",
                                    "DepartureTime": "2018-09-26T19:05:00",
                                    "OriginLocation": "MAA",
                                    "DestinationLocation": "BLR",
                                    "ValidatingCarrier": "H1",
                                    "PsgType": "ADT",
                                    "PsgQty": 1
                                }
                            ]
                        },
                        "Miles": null,
                        "ElapsedTime": [
                            "320"
                        ],
                        "ValidatingCarrier": "H1"
                    },
                    {
                        "ApiProvider": "SB",
                        "Connection": {
                            "Onward": {
                                "IsConnection": true,
                                "NoOfStops": 1,
                                "ConnectionAirport": [
                                    {
                                        "Origin": "DEL",
                                        "Destination": "AMD"
                                    },
                                    {
                                        "Origin": "AMD",
                                        "Destination": "BLR"
                                    }
                                ]
                            },
                            "Return": {
                                "IsConnection": false,
                                "NoOfStops": 0,
                                "ConnectionAirport": []
                            }
                        },
                        "FlightDetails": [
                            {
                                "FlightID": "9088",
                                "CarrierCode": "H1",
                                "Origin": "DEL",
                                "Destination": "AMD",
                                "FlightNum": "9088",
                                "DepartureDateTime": "2018-09-26T18:55:00",
                                "ArrivalDateTime": "2018-09-26T20:15:00",
                                "Duration": "80",
                                "OrgTerminal": "1D",
                                "DesTerminal": "1",
                                "AirlineCategory": null,
                                "AirCraftType": "",
                                "Via": "",
                                "ValidatingCarrier": "SG",
                                "ClassCode": "L",
                                "ClassCodeDesc": "",
                                "FareBasisCode": "ADVJR1",
                                "BreakPoint": "",
                                "CurrencyCode": "INR",
                                "OriginAirportName": "Indira Gandhi International Airport",
                                "OriginAirportCity": "New Delhi",
                                "OriginAirportCountry": "India",
                                "DestinationAirportName": "Sardar Vallabhbhai Patel International Airport",
                                "DestinationAirportCity": "Ahmedabad",
                                "DestinationAirportCountry": "India",
                                "AirlineName": "Hahn Air",
                                "MajorClassCode": "Economy",
                                "AirEquipType": "737",
                                "MarriageGroup": "O",
                                "Baggage": {
                                    "Weight": null,
                                    "Unit": null,
                                    "Pieces": "1"
                                },
                                "MealCode": {
                                    "MealCode": null,
                                    "MealCodeDescription": null
                                },
                                "IsStopAirport": false,
                                "JourneyType": "Onward"
                            },
                            {
                                "FlightID": "9098",
                                "CarrierCode": "H1",
                                "Origin": "AMD",
                                "Destination": "BLR",
                                "FlightNum": "9098",
                                "DepartureDateTime": "2018-09-26T21:45:00",
                                "ArrivalDateTime": "2018-09-26T23:55:00",
                                "Duration": "130",
                                "OrgTerminal": "1",
                                "DesTerminal": null,
                                "AirlineCategory": null,
                                "AirCraftType": "",
                                "Via": "",
                                "ValidatingCarrier": "SG",
                                "ClassCode": "L",
                                "ClassCodeDesc": "",
                                "FareBasisCode": "ADVJR1",
                                "BreakPoint": "",
                                "CurrencyCode": "INR",
                                "OriginAirportName": "Sardar Vallabhbhai Patel International Airport",
                                "OriginAirportCity": "Ahmedabad",
                                "OriginAirportCountry": "India",
                                "DestinationAirportName": "Bengaluru International Airport",
                                "DestinationAirportCity": "Bangalore",
                                "DestinationAirportCountry": "India",
                                "AirlineName": "Hahn Air",
                                "MajorClassCode": "Economy",
                                "AirEquipType": "737",
                                "MarriageGroup": "O",
                                "Baggage": {
                                    "Weight": null,
                                    "Unit": null,
                                    "Pieces": "1"
                                },
                                "MealCode": {
                                    "MealCode": null,
                                    "MealCodeDescription": null
                                },
                                "IsStopAirport": false,
                                "JourneyType": "Onward"
                            }
                        ],
                        "FareDescription": {
                            "IsNonRefundable": true,
                            "PaxFareDetails": [
                                {
                                    "PaxType": "AllPsg",
                                    "BasicAmount": "19038",
                                    "TotalTaxAmount": "12786",
                                    "FuelSurcharge": "0",
                                    "Commission": "0",
                                    "OtherInfo": {
                                        "TransactionFee": "0",
                                        "ServiceTax": "0",
                                        "GrossAmount": 31824,
                                        "Item": []
                                    }
                                },
                                {
                                    "PaxType": "ADT",
                                    "BasicAmount": "19038",
                                    "TotalTaxAmount": "12786",
                                    "FuelSurcharge": "0",
                                    "Commission": "0",
                                    "OtherInfo": {
                                        "TransactionFee": "0",
                                        "ServiceTax": "0",
                                        "GrossAmount": 31824,
                                        "Item": [
                                            {
                                                "TaxCode": "YQF",
                                                "Amount": "2056"
                                            },
                                            {
                                                "TaxCode": "YQF",
                                                "Amount": "2056"
                                            },
                                            {
                                                "TaxCode": "YRF",
                                                "Amount": "3500"
                                            },
                                            {
                                                "TaxCode": "YRF",
                                                "Amount": "3500"
                                            },
                                            {
                                                "TaxCode": "IN",
                                                "Amount": "12"
                                            },
                                            {
                                                "TaxCode": "K38",
                                                "Amount": "1508"
                                            },
                                            {
                                                "TaxCode": "WO",
                                                "Amount": "154"
                                            }
                                        ]
                                    }
                                }
                            ],
                            "FareBasis": [
                                {
                                    "Code": "LOWSG",
                                    "DepartureTime": "2018-09-26T18:55:00",
                                    "OriginLocation": "DEL",
                                    "DestinationLocation": "AMD",
                                    "ValidatingCarrier": "H1",
                                    "PsgType": "ADT",
                                    "PsgQty": 1
                                },
                                {
                                    "Code": "LOWSG",
                                    "DepartureTime": "2018-09-26T21:45:00",
                                    "OriginLocation": "AMD",
                                    "DestinationLocation": "BLR",
                                    "ValidatingCarrier": "H1",
                                    "PsgType": "ADT",
                                    "PsgQty": 1
                                }
                            ]
                        },
                        "Miles": null,
                        "ElapsedTime": [
                            "300"
                        ],
                        "ValidatingCarrier": "H1"
                    }
                ]
            }
        ],
        "DestAirports": {
            "Airports": [
                {
                    "code": "BLR",
                    "name": null
                }
            ]
        },
        "OrgAirports": {
            "Airports": [
                {
                    "code": "DEL",
                    "name": null
                }
            ]
        }
    }
}';

		return var_dump(Common::sendSMS("9958971774", "hello test"));
	
		//Common::saveTrend($response, "DEL", "BLR", "2018-09-27");
		//return Carbon::today()->addDays(2);

    }
}
