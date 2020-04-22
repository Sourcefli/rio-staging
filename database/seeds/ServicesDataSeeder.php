<?php

use Illuminate\Database\Seeder;

class ServicesDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Schema::disableForeignKeyConstraints();

        DB::table('services')->insert([
            [
                "title" => "Wise Retirement",
                "summary" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione, nesciunt.",
                "card_img_url" => "img/services/sm-investing-trend-chart-368x245.jpg",
                "read_more_link" => "/wise-retirement",
                "slug" => "wise-retirement",
                "row_num" => 1
            ],
            [
                "title" => "Protected Investments",
                "summary" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus, quia?",
                "card_img_url" => "img/services/sm-money-saving-parent.jpg",
                "read_more_link" => "/protected-investments",
                "slug" => "protected-investments",
                "row_num" => 1
            ],
            [
                "title" => "Diversify Your Nest Egg",
                "summary" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Et, enim!",
                "card_img_url" => "img/services/sm-golden-eggs-diversification.jpg",
                "read_more_link" => "/diversify-your-nestegg",
                "slug" => "diversify-your-nest-egg",
                "row_num" => 1
            ],
            [
                "title" => "Expect The Unexpected",
                "summary" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus, molestias.",
                "card_img_url" => "img/services/sm-multiple-decisions.jpg",
                "read_more_link" => "/expect-the-unexpected",
                "slug" => "expect-the-unexpected",
                "row_num" => 2
            ],
            [
                "title" => "Medicare 360",
                "summary" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Blanditiis, aspernatur!",
                "card_img_url" => "img/services/sm-medicare-magnified.jpg",
                "read_more_link" => "/medicare360",
                "slug" => "medicare-360",
                "row_num" => 2
            ],
            [
                "title" => "Burial Planning & Preparation",
                "summary" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Id, repellendus.",
                "card_img_url" => "img/services/sm-kid-against-glass-368x245.jpg",
                "read_more_link" => "/burial-preperation",
                "slug" => "burial-planning-and-preparation",
                "row_num" => 2
            ]
        ]);

        Schema::enableForeignKeyConstraints();
    }
}
