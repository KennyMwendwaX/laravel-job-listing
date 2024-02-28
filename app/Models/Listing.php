<?php

namespace App\Models;

class Listing {
    public static function all() {
        return [
            [
                'id' => 1,
                'title' => 'Post 1', 
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus nihil eaque dicta omnis voluptates aliquid, quo unde vitae molestiae rerum.'
            ],
            [
                'id' => 2,
                'title' => 'Post 2',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus nihil eaque dicta omnis voluptates aliquid, quo unde vitae molestiae rerum.'
            ]
            ];
    }

    public static function find($id) {
        $listings = self::all();

        foreach ($listings as $listing) {
            if($listing['id'] == $id) {
                return $listing;
            }
        }
    }
}

