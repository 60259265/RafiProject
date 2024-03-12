<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="StyleProduct.css">
    <title>Document</title>
</head>
<body>
    <div class="section1">
        <div class="barre">
            <strong><a href="#" style="text-decoration: none; padding-left: 50px; color: black; font-size: 20px;">EARTH
                    STORE</a></strong>
            <div class="menu" style="gap: 50px;">
                <a href="index.html" style="text-decoration: none; color: black;">HOME</a>
                <a href="ABOUT.html" style="text-decoration: none; color: black;">ABOUT</a>
                <a href="#" style="text-decoration: none; color: black;">SHOP</a>
                <a href="#" style="text-decoration: none; color: black;">CONTACT</a>
            </div>
        </div>
    <div class="section2">
        <div>
            <img src="about1.jpg"  style="width: 500px; height: 350px;">
        </div>
        <div style="width: 400%;">
            <div style="text-decoration: none;">
                <div>
                    <a style="text-decoration: none; color: rgb(131, 114, 114);" href="">Home/</a>
                    <a style="text-decoration: none; color: rgb(131, 114, 114);" href="">Postcards/</a>
                    <a style="text-decoration: none; color: rgb(131, 114, 114);" href="">Postcard V1</a><br><br>
                    <a style="text-decoration: none; color: rgb(51, 143, 51);" href="">Postcards</a>
                </div>
            </div>
            <p style="font-size: 18px;"><strong>Postcard V1</strong></p>
            <p style="font-size: 20px; color: rgb(82, 78, 78);">$29.99</p>
            <p style="color: rgb(167, 155, 155); text-align: justify;">Sending a travel postcard to a loved one is truly a thoughtful gesture that can bring joy and inspiration. Inspiration can come in the form of taking a break from the normal routine, while being reminded of the more adventurous and exotic destinations around the world.</p>
            <div style="display: flex; gap: 0px;">
                <button style="width: 50px; height: 50px; background-color: white; border: 1px solid rgb(199, 188, 188);" onclick="decrementCounter()">-</button>
                <p style="text-align: center; padding-top: 15px;  background-color: white; width: 50px; height: 33px; border: 1px solid rgb(199, 188, 188); margin-top: 0px;"><span id="counter">0</span></p>
               <button style="width: 50px; height: 50px; background-color: white; border: 1px solid rgb(199, 188, 188);" onclick="incrementCounter()">+</button>
               <button style="width: 150px; height: 50px; background-color: rgb(51, 143, 51); border: 0px; color: white; font-size: 18px; margin-left: 30px;">ADD TO CARD</button>
            </div>

            <script>
                let counter = 0;
        
                function incrementCounter() {
                    counter++;
                    document.getElementById('counter').innerText = counter;
                }
        
                function decrementCounter() {
                    if (counter > 0) {
                        counter--;
                        document.getElementById('counter').innerText = counter;
                    }
                }
            </script>
           
            <div style="display: flex; gap: 5px; "><p>Categories :</p><a style="text-decoration: none; color: rgb(51, 143, 51); margin-top: 15px; " href="">Postcard</a>
            </div>
        </div>
    </div>
    <div class="section3">
        <a style="text-decoration: none; color: rgb(131, 114, 114);" href=""><strong>Description</strong></a>
        <a style="text-decoration: none; color: rgb(131, 114, 114);"  href=""><strong>Reviews</strong></a>
        <p><strong>Paper Type:</strong> Matte</p>
        <ul>
            <li>17.5 pt thickness / 120 lb weight / 324 GSM</li>
            <li>Light white, uncoated matte finish with an eggshell texture</li>
            <li>Paper is easy to write on and won’t smudge</li>
            <li>Made and printed in the USA</li>
        </ul>
        <p> <strong>Paper Type:</strong> Semi-Gloss</p>
        <ul>
            <li>12.5 pt thickness / 110 lb weight</li>
            <li>Bright white, semi-gloss finish</li>
            <li>Bright white, semi-gloss finish</li>
            <li>FSC certified</li>
            <li>Paper imported from Italy; printed in the USA</li>
        </ul>
        <p><strong>Note: </strong><em>There may be a slight difference in actual color, due to the colors of display.</em></p>
    </div>
    <div class="section4">
        <h1>Related products</h1>
        <div style="display: flex; gap: 30px;">
            <div><img src="shop3.jpg" alt="" width="300px" height="300px">
                <p>Posters</p>
                <a href="#">Poster V2</a>
                <p>$14.99</p></div>
            <div><img src="shop4.jpg" alt="" width="300px" height="300px">
                    <p>Posters</p>
                    <a href="#">Poster V4</a>
                    <p>$23.99</p>
            </div>
            <div><img src="shop5.jpg" alt="" width="300px" height="300px">
                        <p>Posters</p>
                        <a href="#">Poster V5</a>
                        <p>$17.99</p>
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