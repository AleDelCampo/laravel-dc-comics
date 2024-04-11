<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comics = Comic::all();
        $icons = [
            [
                'icon' => asset('img/buy-comics-digital-comics.png'),
                'caption' => "DIGITAL COMICS",
            ],
            [
                'icon' => asset('img/buy-comics-merchandise.png'),
                'caption' => "DC MERCHANDISE",
            ],
            [
                'icon' => asset('img/buy-comics-subscriptions.png'),
                'caption' => "SUBSCRIPTION",
            ],
            [
                'icon' => asset('img/buy-comics-shop-locator.png'),
                'caption' => "COMIC SHOP LOCATOR",
            ],
            [
                'icon' => asset('img/buy-dc-power-visa.svg'),
                'caption' => "DC POWER VISA",
            ],
        ];
    
        $linkss = [
            [
                'title' => "DC COMICS",
                'list' => [
                    'Characters',
                    'Comics',
                    'Movies',
                    'Tv',
                    'Games',
                    'Videos',
                    'News'
                ]
            ],
            [
                'title' => "SHOP",
                'list' => [
                    'Shop DC',
                    'Shop DC Collectibles',
                ]
            ],
            [
                'title' => "DC",
                'list' => [
                    'Terms Of Use',
                    'Privacy policy',
                    'Ad Choices',
                    'Advertising',
                    'Jobs',
                    'Subscriptions',
                    'Talent Workshops',
                    'CPSC Certificates',
                    'Ratings',
                    'Shop Help',
                    'Contact Us'
                ]
            ],
            [
                'title' => "SITES",
                'list' => [
                    'DC',
                    'MAD Magazine',
                    'DC Kids',
                    'DC Universe',
                    'DC Power Visa'
                ]
            ]
        ];
    
        $links = [
            [
                'list' => [
                    'CHARACTERS',
                    'COMICS',
                    'MOVIES',
                    'TV',
                    'GAMES',
                    'COLLECTIBLES',
                    'VIDEOS',
                    'FANS',
                    'NEWS',
                    'SHOP',
                ]
            ]
        ];
        return view('comics.index', compact('comics', 'icons', 'links', 'linkss'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $newComic = new Comic();

        $newComic->title = $request->title;
        $newComic->description = $request->description;
        $newComic->thumb = $request->thumb;
        $newComic->price = $request->price;
        $newComic->series = $request->series;
        $newComic->sale_date = $request->sale_date;
        $newComic->type = $request->type;

        $newComic->save();

        return redirect()->route('comics.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Comic $comic)
    {
        $icons = [
            [
                'icon' => asset('img/buy-comics-digital-comics.png'),
                'caption' => "DIGITAL COMICS",
            ],
            [
                'icon' => asset('img/buy-comics-merchandise.png'),
                'caption' => "DC MERCHANDISE",
            ],
            [
                'icon' => asset('img/buy-comics-subscriptions.png'),
                'caption' => "SUBSCRIPTION",
            ],
            [
                'icon' => asset('img/buy-comics-shop-locator.png'),
                'caption' => "COMIC SHOP LOCATOR",
            ],
            [
                'icon' => asset('img/buy-dc-power-visa.svg'),
                'caption' => "DC POWER VISA",
            ],
        ];
    
        $linkss = [
            [
                'title' => "DC COMICS",
                'list' => [
                    'Characters',
                    'Comics',
                    'Movies',
                    'Tv',
                    'Games',
                    'Videos',
                    'News'
                ]
            ],
            [
                'title' => "SHOP",
                'list' => [
                    'Shop DC',
                    'Shop DC Collectibles',
                ]
            ],
            [
                'title' => "DC",
                'list' => [
                    'Terms Of Use',
                    'Privacy policy',
                    'Ad Choices',
                    'Advertising',
                    'Jobs',
                    'Subscriptions',
                    'Talent Workshops',
                    'CPSC Certificates',
                    'Ratings',
                    'Shop Help',
                    'Contact Us'
                ]
            ],
            [
                'title' => "SITES",
                'list' => [
                    'DC',
                    'MAD Magazine',
                    'DC Kids',
                    'DC Universe',
                    'DC Power Visa'
                ]
            ]
        ];

        $links = [
        [
            'list' => [
                'CHARACTERS',
                'COMICS',
                'MOVIES',
                'TV',
                'GAMES',
                'COLLECTIBLES',
                'VIDEOS',
                'FANS',
                'NEWS',
                'SHOP',
            ]
        ]
    ];
        return view('comics.show', compact('comic', 'icons', 'links', 'linkss'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
