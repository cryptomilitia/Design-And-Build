<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matere Design And Build | Search Results</title>

    <!--Bootstrap CSS-->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.3/css/bootstrap.min.css" rel="stylesheet">
    
    <!--Bootstrap JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <style>  
      
        /*Search results container*/
        .search-results {
            margin-top: 20px;
            background-color: #f8f9fa;
            border: 1px solid #dee2e6;
            border-radius: 5px;
            padding: 10px;
        }
        .search-results h3 {
            font-size: 1.5rem;
            color: #007bff;
            margin-bottom: 10px;
        }
        .list-group-item h5 {
            font-size: 1.2rem;
            color: #333;
            margin-bottom: 5px;
        }
        .list-group-item p {
            font-size: 1rem;
            color: #555;
            margin-bottom: 5px;
        }
    </style>

</head>
<body>
    
        <?php
        if (isset($_GET['keyword'])) {
            $keyword = htmlspecialchars($_GET['keyword']);

           // Sample data to search through
           $data = [
            ['title' => 'Testimonies', 'content' => 'What our clients say about us. <a href="#">Read on</a>'],
            ['title' => 'About Us', 'content' => 'Who we are. <a href="about.html">Read more</a>.'],
            ['title' => 'Services', 'content' => 'Architectural Design.<a href="architectural design.html">Explore</a><br><br> Quantity Survey.<a href="quantity survey.html">Explore</a><br><br> Interior Design.<a href="interior design.html">Explore</a><br><br> Project Management.<a href="project management.html">Explore</a><br><br> Structural design.<a href="structural design.html">Explore</a><br><br> Construction.<a href="construction.html">Explore</a>.'],
            ['title' => 'Portfolio', 'content' => 'All projects<br><br> Maisonettes<br><br> Institutions<br><br> Offices<br><br> 3d concepts<br><br><a href="portfolio.html">View all</a>.'],
            ['title' => 'FAQs', 'content' => 'Frequently Asked Questions about our services and company.<a href="#">View here</a>'],
        ];

            // Function to search through the data
            function search($keyword, $data) {
                $results = [];
                foreach ($data as $item) {
                    if (stripos($item['title'], $keyword) !== false || stripos($item['content'], $keyword) !== false) {
                        $results[] = $item;
                    }
                }
                return $results;
            }

            $results = search($keyword, $data);

            if (!empty($results)) {
                echo "<div class='search-results'>";
                echo "<h3>Search Results for '<strong>$keyword</strong>':</h3>";
                echo "<ul class='list-group'>";
                foreach ($results as $result) {
                    echo "<li class='list-group-item'>";
                    echo "<h5>{$result['title']}</h5>";
                    echo "<p>{$result['content']}</p>";
                    echo "</li>";
                }
                echo "</ul>";
                echo "</div>";
            } else {
                echo "<p>No results found for '<strong>$keyword</strong>'.</p>";
            }
        }
        ?>
    </div>

</body>
</html>





