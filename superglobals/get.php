<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="/css/global.css">
        <link rel="stylesheet" type="text/css" href="/css/directory.css">
        <link rel="stylesheet" type="text/css" href="/css/facade.css">
        <style>
            .multiple {
                float: left;
                width: 288px;
                margin: 16px;
                padding: 16px;
                box-sizing: border-box;
                background-color: #EEEEEE;
            }

            .multiple:nth-child(3n+1) {
                margin-left: 0px;
            }

            .multiple:nth-child(3n) {
                margin-right: 0px;
            }

            .single img {
                float: right;
                margin-left: 16px;
            }

            .multiple h1 {
                margin: 0;
                font-size: 18px;
            }

            .read-more {
                text-align: right;
            }

            .read-more:after {
                padding-left: 6px;
                content: ">";
            }

            .search-form {
                margin: 20px 0;
            }

            .search-form input[type="text"] {
                padding: 5px;
                width: 200px;
            }

            .search-form input[type="submit"] {
                padding: 5px 10px;
            }
        </style>
    </head>
    <body>
        <?php
        // Article data array
        $articles = [
            [
                'title' => 'Eight Internet Giants Demand Restrictions on NSA Spying',
                'date' => 'December 9, 2013',
                'content' => 'Eight major technology companies, such as Google, Apple, and Facebook, have demanded changes in the way the government spies in an open letter to US President Barack Obama. They want to restore public trust in the internet. Internet companies are coordinating for the first time a large, joint response to whistleblower Edward Snowden\'s revelations about the practices of the US secret service NSA. These include Apple, Google, Microsoft, Facebook, Twitter, AOL, LinkedIn, and Yahoo.',
                'image' => '/img/get-article-01.jpg',
                'imageDescription' => 'Mark Zuckerberg next to the Facebook logo'
            ],
            [
                'title' => 'Wild Benefactor Puts Money in Mailboxes',
                'date' => 'December 9, 2013',
                'content' => 'Residents of two apartment blocks in Koksijde were surprised to find money in their mailboxes. A mysterious benefactor has been distributing cash to residents, bringing joy and confusion to the neighborhood. The local police are investigating the source of the money and its legality.',
                'image' => '/img/get-article-02.jpg',
                'imageDescription' => 'The residence in Koksijde where the benefactor was working'
            ],
            [
                'title' => 'Original Hergé Pieces Auctioned for Hundreds of Thousands of Euros',
                'date' => 'December 9, 2013',
                'content' => 'Two original pieces by Hergé were auctioned on Sunday for record-breaking prices. The original artwork from the Tintin series attracted collectors from around the world, with bids reaching unprecedented levels. The auction house reported that this was one of their most successful sales of comic art to date.',
                'image' => '/img/get-article-03.jpg',
                'imageDescription' => 'Tintin and Snowy'
            ]
        ];

        // Search functionality
        $searchResults = [];
        if (isset($_GET['search'])) {
            $searchTerm = strtolower($_GET['search']);
            foreach ($articles as $key => $article) {
                if (strpos(strtolower($article['content']), $searchTerm) !== false ||
                    strpos(strtolower($article['title']), $searchTerm) !== false) {
                    $searchResults[$key] = $article;
                }
            }
        }

        // Display individual article or search results
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            if (isset($articles[$id])) {
                $article = $articles[$id];
                ?>
                <h1><?php echo htmlspecialchars($article['title']); ?></h1>
                <div class="container">
                    <article class="single">
                        <h1><?php echo htmlspecialchars($article['title']); ?></h1>
                        <p><?php echo htmlspecialchars($article['date']); ?></p>
                        <img src="<?php echo htmlspecialchars($article['image']); ?>" 
                             alt="<?php echo htmlspecialchars($article['imageDescription']); ?>">
                        <p><?php echo htmlspecialchars($article['content']); ?></p>
                    </article>
                </div>
                <?php
            } else {
                echo "<h1>This article does not exist</h1>";
            }
        } else {
            ?>
            <h1>Today's Newspaper</h1>

            <!-- Search Form -->
            <form class="search-form" method="GET">
                <input type="text" name="search" placeholder="Search articles..." 
                       value="<?php echo isset($_GET['search']) ? htmlspecialchars($_GET['search']) : ''; ?>">
                <input type="submit" value="Search">
            </form>

            <section class="articles">
                <?php
                $displayArticles = isset($_GET['search']) ? $searchResults : $articles;
                
                if (empty($displayArticles) && isset($_GET['search'])) {
                    echo "<p>The search term '" . htmlspecialchars($_GET['search']) . "' does not appear in our newspaper.</p>";
                } else {
                    foreach ($displayArticles as $key => $article) {
                        ?>
                        <article class="multiple">
                            <h1><?php echo htmlspecialchars($article['title']); ?></h1>
                            <p><?php echo htmlspecialchars($article['date']); ?></p>
                            <img src="<?php echo htmlspecialchars($article['image']); ?>" 
                                 alt="<?php echo htmlspecialchars($article['imageDescription']); ?>">
                            <p><?php echo htmlspecialchars(substr($article['content'], 0, 50)) . '...'; ?></p>
                            <p class="read-more"><a href="?id=<?php echo $key; ?>">Read more</a></p>
                        </article>
                        <?php
                    }
                }
                ?>
            </section>
            <?php
        }
        ?>
    </body>
</html> 