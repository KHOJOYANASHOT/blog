<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;

class CollectionController extends Controller
{
    public function collection_class()
    {
        //Create a new collection using Collection class
        $collection1 = new Collection([67, 34, 89, 56, 23]);
        //dump the variable content in the browser
        dd($collection1);
    }
    public function collect_method()
    {
        //Create a new collection using the collect method
        $collection2 = collect(["Good", "Better", "Best"]);
        //dump the variable content in the browser
        dd($collection2);
    }
    public function search_data()
    {
        $customer = collect(
            [
                ['id' => '894673', 'name' => 'Rahman', 'email' => 'rah@gmail.com'],
                ['id' => '454886', 'name' => 'Janifer', 'email' => 'ganifer@gmail.com'],
                ['id' => '306007', 'name' => 'Micheal', 'email' => 'mic@gmail.com']
            ]
        );
        if ($customer->contains('name', 'Janifer')) {
            echo "Janifer exists in the customer list.<br/>";
        }
        $marks = collect([
            ['ID' => '011176644', 'marks' => ['CSE401' => 87, 'CSE409' => 88]],
            ['ID' => '011176645', 'marks' => ['CSE402' => 69, 'CSE409' => 75]],
        ]);
        echo $marks->where('ID', '011176645') . "<br/>";
        echo $marks->where('marks.CSE409', 88);
    }

    public function filter_data()
    {
        $products = collect([
            ['product' => 'HDD', 'price' => 6000],
            ['product' => 'Mouse', 'price' => 500],
            ['product' => 'Monitor', 'price' => 5000],
            ['product' => 'Printer', 'price' => 4000],
        ]);
        $filter_price = $products->filter(function ($item) {
            return data_get($item, 'price') > 4000;
        });
        dd($filter_price);
    }

    public function sort_data()
    {
        $books = collect([
            [
                'name' => 'Python Cookbook: Recipes for Mastering Python 3',
                'author' => 'David Beazley'
            ],
            [
                'name' => 'Learn Python in 1 Day: Complete Python Guide with Examples',
                'author' => 'Krishna Rungta'
            ],
            [
                'name' => 'Python Programming: An Introduction to Computer Science',
                'author' => 'John M. Zelle'
            ],
            [
                'name' => 'Python Pocket Reference 5ed: Python in Your Pocket',
                'author' => 'Mark Lutz'
            ]
        ]);
        //Sort the collection data based on author name
        $sortedBook = $books->sortBy('author');
        //dump the variable content in the browser
        dd($sortedBook->values()->toArray());
    }

    public function read_keys()
    {
        $mixdata = collect([
            ['website' => 'google.com', 'type' => 'search engine'],
            'language' => 'PHP',
            1234,
            'name' => 'Fahmida',
            'game' => 'PUBG',
            'color' => 'blue'
        ]);
        dd($mixdata->keys());
    }
}
