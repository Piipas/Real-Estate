<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Article;
use App\Models\Review;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
  /**
   * Seed the application's database.
   *
   * @return void
   */
  public function run()
  {
    // \App\Models\Property::factory(3)->create();
    // \App\Models\PropertiesPictures::factory(9)->create();
    
    $agents = [
      [
        "name" => "John Smith",
        "picture" => "agents/agent-1.png",
        "profession" => "Jr. Agent",
        "facebook" => "https://www.facebook.com",
        "twitter" => "https://twitter.com",
        "linkedin" => "https://www.linkedin.com",
        "googleplus" => "https://www.googleplus.com"
      ],
      [
        "name" => "Philip Smith",
        "picture" => "agents/agent-2.png",
        "profession" => "Top Agent",
        "facebook" => "https://www.facebook.com",
        "twitter" => "https://twitter.com",
        "linkedin" => "https://www.linkedin.com",
        "googleplus" => "https://www.googleplus.com"
      ],
      [
        "name" => "Adam Barney",
        "picture" => "agents/agent-3.png",
        "profession" => "Expert Agent",
        "facebook" => "https://www.facebook.com",
        "twitter" => "https://twitter.com",
        "linkedin" => "https://www.linkedin.com",
        "googleplus" => "https://www.googleplus.com"
      ],
      [
        "name" => "Paul Walker",
        "picture" => "agents/agent-4.png",
        "profession" => "Director",
        "facebook" => "https://www.facebook.com",
        "twitter" => "https://twitter.com",
        "linkedin" => "https://www.linkedin.com",
        "googleplus" => "https://www.googleplus.com"
      ],
    ];

    // foreach($agents as $agent) {
    //     \App\Models\Agent::create($agent);
    // }

    $reviews = [
      [
        "reviewer" => "David Muller",
        "profession" => "Web Designer",
        "avatar" => "reviews/reviewer-1.jpg",
        "review" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate consequuntur ducimus cumque iure modi nesciunt recusandae eligendi vitae voluptatibus, voluptatum tempore, ipsum nisi perspiciatis. Rerum nesciunt fuga ab natus, dolorem?"
      ],
      [
        "reviewer" => "David Muller",
        "profession" => "Web Designer",
        "avatar" => "reviews/reviewer-2.jpg",
        "review" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate consequuntur ducimus cumque iure modi nesciunt recusandae eligendi vitae voluptatibus, voluptatum tempore, ipsum nisi perspiciatis. Rerum nesciunt fuga ab natus, dolorem?"
      ],
      [
        "reviewer" => "David Muller",
        "profession" => "Web Designer",
        "avatar" => "reviews/reviewer-3.jpg",
        "review" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate consequuntur ducimus cumque iure modi nesciunt recusandae eligendi vitae voluptatibus, voluptatum tempore, ipsum nisi perspiciatis. Rerum nesciunt fuga ab natus, dolorem?"
      ],
      [
        "reviewer" => "David Muller",
        "profession" => "Web Designer",
        "avatar" => "reviews/reviewer-4.jpg",
        "review" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate consequuntur ducimus cumque iure modi nesciunt recusandae eligendi vitae voluptatibus, voluptatum tempore, ipsum nisi perspiciatis. Rerum nesciunt fuga ab natus, dolorem?"
      ],
    ];

    // foreach($reviews as $review) {
    //     Review::create($review);
    // }

    // Article::create([
    //   "title" => "Lorem ipsum dolor sit amet, consectetur.",
    //   "picture" => "articles/article-1",
    //   "content" => "<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio est quaerat magnam exercitationem voluptas, voluptatem sed quam ab laborum voluptatum tempore dolores itaque, molestias vitae.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum molestias eligendi quidem vero alias ea. Accusantium quas soluta recusandae, ducimus voluptates aut, assumenda earum velit, dignissimos repellendus delectus voluptate, labore.</p><blockquote><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate explicabo consequuntur, impedit aut similique cum.</p><cite>- Mr. josep</cite></blockquote><h1>H1 Title</h1><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia inventore commodi labore. Doloremque voluptas ullam iusto nemo quisquam, saepe sit.</p><h2>H2 Title</h2><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia inventore commodi labore. Doloremque voluptas ullam iusto nemo quisquam, saepe sit.</p><h3>H3 Title</h3><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia inventore commodi labore. Doloremque voluptas ullam iusto nemo quisquam, saepe sit.</p><h4>H4 Title</h4><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, provident.</p>",
    //   "tags" => "property, land, flat, rent, sale, office"
    // ]);

    $comments = [
      [
        "commenter" => "Lhaj Ali",
        "comment" => "Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English",
        "article_id" => 1,
        "email" => "commenter@gmail.com",
        "children" => [
          [
            "commenter" => "Lhaj Mohammed",
            "comment" => "Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English",
            "article_id" => 1,
            "email" => "commenter@gmail.com",
            "children" => [
              [
                "commenter" => "Lhaj Mohammed",
                "comment" => "Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English",
                "article_id" => 1,
                "email" => "commenter@gmail.com",
              ],
              [
                "commenter" => "Lhaj Ali",
                "comment" => "Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English",
                "article_id" => 1,
                "email" => "commenter@gmail.com",
              ]
            ]
          ],
          [
            "commenter" => "Lhaj Ali",
            "comment" => "Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English",
            "article_id" => 1,
            "email" => "commenter@gmail.com",
          ]
        ]
      ],
      [
        "commenter" => "Lhaj Mahammed",
        "comment" => "Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English",
        "article_id" => 1,
        "email" => "commenter@gmail.com",
        "children" => [
          [
            "commenter" => "Lhaj Ali",
            "comment" => "Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English",
            "article_id" => 1,
            "email" => "commenter@gmail.com",
          ],
          [
            "commenter" => "Lhaj Mahammed",
            "comment" => "Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English",
            "article_id" => 1,
            "email" => "commenter@gmail.com",
          ]
        ]
      ],
    ];

    foreach($comments as $comment) {
      \App\Models\Comment::create($comment);
    }
  }
}
