<head>
    <title>nemotwitter</title>
    <meta name="viewport" content="width=device-width; height=device-height;">
    <style>
            body{
                margin: 0;
            }

            @media not print {
                .fullZoomOut {
                    cursor: zoom-out;
                }

                .fullZoomIn {
                    cursor: zoom-in;
                }

                .shrinkToFit {
                    cursor: zoom-in;
                }

                .overflowingVertical, .overflowingHorizontalOnly {
                    cursor: zoom-out;
                }
            }

            .isInObjectOrEmbed {
            width: 100%;
            height: 100vh;
            }

            img {
            display: block;
            }

    </style>
</head>

<body>
    <?php
        $imagesDir = 'images/';
        $images = glob($imagesDir . '*.{jpg,jpeg,png,gif}', GLOB_BRACE);
        $randomImage = $images[array_rand($images)];
        echo "<img src='$randomImage'>";
    ?>
</body>

