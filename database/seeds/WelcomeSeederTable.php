<?php

use Illuminate\Database\Seeder;

class WelcomeSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Welcome::create( [
            'welcome_title' => 'Welcome to the Data Science Lab at SUST!',
            'welcome_details' => 'Big Data makes for big and interesting problems!
                            Our lab focuses on analyzing large-scale text streams such as news,
                             blogs, and social media to identify cultural trends around the
                             worlds people, places,and things. Our research covers a range of
                             topics in natural language processing. A current focus is using
                              Deep Learning techniques to build concise representations of
                              the meanings of words in all significant languages, and use these
                               powerful features to recognize entities and measure sentiment and
                               other properties of texts. Another focus involves analyzing Wikipedia
                                to identify the fame and significance of historical figures as reported
                                 in our book Whos Bigger? and associated website. Our Lydia technology
                                 has been licensed by General Sentiment, a social media analysis startup.',

        ]);
    }
}
