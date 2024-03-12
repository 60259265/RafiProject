<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style.css">
    <title>Document</title>
</head>

<body>
    <div class="section1">
        <div class="barre">
            <strong><a href="#" style="text-decoration: none; padding-left: 50px; color: black; font-size: 20px;">EARTH
                    STORE</a></strong>
            <div class="menu" style="gap: 50px;">
                <a href="index.php" style="text-decoration: none; color: black;">HOME</a>
                <a href="ABOUT.php" style="text-decoration: none; color: black;">ABOUT</a>
                <a href="Shop.php" style="text-decoration: none; color: black;">SHOP</a>
                <a href="Contact.php" style="text-decoration: none; color: black;">CONTACT</a>
                <i class="fa-solid fa-basket-shopping"></i>
                <i class="fa-solid fa-user"></i>
            </div>
        </div>
    </div>
    <div class="section2">
        <div class="part1">
            <div class="Search">
                <input type="text" placeholder="Search Products" style="width: 200px; height: 50px;">
                <svg class="search-icon" viewBox="0 0 24 24" width="24" height="24"
                    style="background-color: rgba(116, 189, 116, 0.877);border: 1px gray; height: 52px; width: 60px">
                    <path
                        d="M13 5c-3.3 0-6 2.7-6 6 0 1.4.5 2.7 1.3 3.7l-3.8 3.8 1.1 1.1 3.8-3.8c1 .8 2.3 1.3 3.7 1.3 3.3 0 6-2.7 6-6S16.3 5 13 5zm0 10.5c-2.5 0-4.5-2-4.5-4.5s2-4.5 4.5-4.5 4.5 2 4.5 4.5-2 4.5-4.5 4.5z">
                    </path>
                </svg>
            </div>
            <p>Filter by price</p>
            <div class="wc-block-price-slider">
                <div
                    class="wc-block-price-filter wc-block-components-price-slider wc-block-price-filter--has-input-fields wc-block-components-price-slider--has-input-fields wc-block-components-price-slider--is-input-inline">
                    <div
                        class="wc-block-price-filter__range-input-wrapper wc-block-components-price-slider__range-input-wrapper">
                        <div aria-hidden="true">
                            <div class="wc-block-price-filter__range-input-progress wc-block-components-price-slider__range-input-progress"
                                style="--low: 0%; --high: 100%;">
                            </div>
                            <input type="range"
                                class="wc-block-price-filter__range-input wc-block-price-filter__range-input--min wc-block-components-price-slider__range-input wc-block-components-price-slider__range-input--min"
                                aria-label="Filter products by minimum price" aria-valuetext="10" step="1" min="1000"
                                max="3000" tabindex="-1" value="1000" style="z-index: 21;">
                            <input type="range"
                                class="wc-block-price-filter__range-input wc-block-price-filter__range-input--max wc-block-components-price-slider__range-input wc-block-components-price-slider__range-input--max"
                                aria-label="Filter products by maximum price" aria-valuetext="30" step="1" min="1000"
                                max="3000" tabindex="-1" value="3000" style="z-index: 20;">
                        </div>
                    </div>
                    <div class="input">
                        <input class="input1" style="width: 50px; height: 50px;"
                            aria-label="Filter products by minimum price" type="text" value="$10" inputmode="numeric">
                        <input class="input2" style="width: 50px; height: 50px; aria-label=" Filter products by maximum
                            price" type="text" value="$30" inputmode="numeric">
                    </div>
                    <div class="wc-block-components-price-slider__actions">

                    </div>
                </div>
            </div>
            <h5 class="categorie">Categories</h5>
            <a class="lien1" href="">Postcarts</a> <br><br><br>
            <a class="lien2" href="">Posters</a>
        </div>
        <div class="part2">
            <p>Home/Shop</p>
            <h1>Shop</h1>
            <div class="form">
                <P> Showing all 12 results</P>
                <select class="form-select" aria-label="Default select example">
                    <option selected>Default Sorting</option>
                    <option value="1">Sort by popularity</option>
                    <option value="2">sort by average rating</option>
                    <option value="3">sort by latest</option>
                </select>
            </div>
            <div class="ligne1">
                <div>
                    <a href="PostcardV1.html"><img src="about1.jpg" width="200px" height="200px" alt=""></a>
                    <p>Postcards</p>
                    <a  href="">Postcard V1</a>
                    <p>$23.99</p>
                </div>
                <div>
                    <a href="PostcardV2.html"><img src="shop2.jpg" alt="" width="200px" height="200px"></a>
                    <p>Posters</p>
                    <a href="#">Poster V2</a>
                    <p>$17.99</p>
                </div>
                <div>
                    <a href="PostcardV3"><img src="shop3.jpg" alt="" width="200px" height="200px"></a>
                    <p>Posters</p>
                    <a href="#">Poster V2</a>
                    <p>$14.99</p>
                </div>
            </div>
            <div class="ligne2">
                <div>
                    <a href="PostcardV4.html"><img src="shop4.jpg" alt="" width="200px" height="200px"></a>
                    <p>Posters</p>
                    <a href="#">Poster V4</a>
                    <p>$23.99</p>
                </div>
                <div>
                    <a href="PostcardV5.html"><img src="shop5.jpg" alt="" width="200px" height="200px"></a>
                    <p>Posters</p>
                    <a href="#">Poster V5</a>
                    <p>$17.99</p>
                </div>
                <div>
                    <a href="PostcardV6.html"><img src="shop6.jpg" alt="" width="200px" height="200px"></a>
                    <p>Posters</p>
                    <a href="#">Poster V6</a>
                    <p>$14.99</p>
                </div>
            </div>
            <div class="ligne3">
                <div>
                    <a href="PostcardV7.html"><img src="img1.jpg" alt="" width="200px" height="200px"></a>
                    <p>Posters</p>
                    <a href="#">Poster V1</a>
                    <p>$23.99</p>
                </div>
                <div>
                    <a href="PostcardV8.html"><img src="img2.jpg" alt="" width="200px" height="200px"></a>
                    <p>Posters</p>
                    <a href="#">Poster V2</a>
                    <p>$17.99</p>
                </div>
                <div>
                    <a href="PostcardV9.html"><img src="img3.jpg" alt="" width="200px" height="200px"></a>
                    <p>Posters</p>
                    <a href="#">Poster V3</a>
                    <p>$17.99</p>
                </div>
            </div>
            <div class="ligne4">
                <div>
                    <a href="PostcardV10.html"><img src="img1.jpg" alt="" width="200px" height="200px"></a>
                    <p>Posters</p>
                    <a href="#">Poster V4</a>
                    <p>$23.99</p>
                </div>
                <div>
                    <a href="PostcardV11.html"><img src="img2.jpg" alt="" width="200px" height="200px"></a>
                    <p>Posters</p>
                    <a href="#">Poster V5</a>
                    <p>$17.99</p>
                </div>
                <div>
                    <a href="PostcardV12.html"><img src="img3.jpg" alt="" width="200px" height="200px"></a>
                    <p>Posters</p>
                    <a href="#">Poster V6</a>
                    <p>$14.99</p>
                </div>
            </div>
        </div>
    </div>
</body>
<footer>
    <div class="footer">
        <div class="lien">
            <a href="#" style="text-decoration: none; color: black;">HOME</a>
            <a href="#" style="text-decoration: none; color: black;">ABOUT</a>
            <a href="#" style="text-decoration: none; color: black;">SHOP</a>
            <a href="#" style="text-decoration: none; color: black;">CONTACT</a>
        </div>
        <div style="color: black;"> <strong>EARTH STRORE</strong></div>
        <div>Copyright © 2024 Planet Earth Store</div>
    </div>
</footer>

</html>