<?php

namespace Database\Seeders;

use App\Models\MetaTag;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class MetaTagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $metaTag = new MetaTag();
        $metaTag->title = 'When Pigs Fly';
        $metaTag->description = 'A blog dedicated to the love of pigs.';
        $metaTag->keywords = 'when pigs fly,pigs,pig,blog,posts,post';
        $metaTag->image = 'flying-pig.jpeg';
        $metaTag->path = 'default';
        $metaTag->save();

        $metaTag = new MetaTag();
        $metaTag->title = 'When Pigs Fly';
        $metaTag->description = 'A guide for preppers.';
        $metaTag->keywords = 'when pigs fly, pig fly, pig prep';
        $metaTag->image = 'TWASXvqwZCywoAhuI0zqLZrSn9cUGn6KxsB3dDRM.jpg';
        $metaTag->path = '/post/1';
        $metaTag->save();

        $metaTag = new MetaTag();
        $metaTag->title = 'The Root of the Problem';
        $metaTag->description = 'How to solve common pig behavior problems.';
        $metaTag->keywords = 'pig behavior, pig problems, pig rooting';
        $metaTag->image = 'xiqjLaJQ00FGewtW3toNiYVt3nOjK87Cwdla9iQw.jpg';
        $metaTag->path = '/post/2';
        $metaTag->save();

        $metaTag = new MetaTag();
        $metaTag->title = 'Pig vs. Dog';
        $metaTag->description = 'Why pigs make great pets.';
        $metaTag->keywords = 'pig vs dog, pig, dog, pig pet';
        $metaTag->image = 'TXB09j3RmRoSfOwIfSp0rDQ1CFutehaDX4L5WXQi.jpg';
        $metaTag->path = '/post/3';
        $metaTag->save();

        $metaTag = new MetaTag();
        $metaTag->title = 'Care & Grooming';
        $metaTag->description = 'Taking care of your little oinker!';
        $metaTag->keywords = 'pig care, pig grooming, pig care and grooming';
        $metaTag->image = 'PVxP7YHvYwTbdTfsLfPKB2TH7h7P4sUf9pSRqZTH.jpg';
        $metaTag->path = '/post/4';
        $metaTag->save();

        $metaTag = new MetaTag();
        $metaTag->title = 'Top 5 Pig Facts';
        $metaTag->description = 'Surprising facts about pigs.';
        $metaTag->keywords = 'pig facts, surprising, top 5';
        $metaTag->image = 'VlMONf4tyLEENSpYZrIqkRBSlfstoxy7XVdGYdjz.jpg';
        $metaTag->path = '/post/5';
        $metaTag->save();
    }
}
