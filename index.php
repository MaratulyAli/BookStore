<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>BookStore.com</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
    <link
      href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap"
      rel="stylesheet"
    />

    <script src="js/home_page.js" defer></script>
    <script>
        <?php 
        $host = 'localhost';
        $username = 'root';
        $password = '';
        $dbname = 'Books';
        $con = mysqli_connect($hostname, $username, $password, $dbname);
        // mysqli_query($con, "Add * FROM Books");
        $result = mysqli_query($con, "SELECT * FROM Books");
        while($row = mysqli_fetch_assoc($result)) {
            $json_array[] = $row;
        }
        ?>
        let books = <?php echo json_encode($json_array);?>;
        // <main id="books_list">
        /*
        <div class="item">
          <div class="item_title">
            <a href="product_page/index.html" style="color: black;">
            <img src="images/children/alice.jfif" class="image" />
            <p class="price">$99.9</p>
            <p class="title">Alice in the Wonderland</p>
            <img src="images/stars/3st.jfif" class="book_ratings" />
            <p class="discount">-21%</p>
            </a>
          </div>
          <button class="add_to_cart">Add to Cart</button>
        </div>
        */
        let items1 = document.querySelector('article #books_list');
        let items = items1.childNodes;
        let newItem = document.createElement('div');
        newItem.class = 'item';
        console.log(newItem.class);
        let newItemTitle = document.createElement('div');
        newItemTitle.class = 'item_title';
        
        <?php
        mysqli_close($con);
        ?>

    </script>
  </head>
  <body>
    <header id="header_with_search_bar">
      <img src="images/image.PNG" alt="" id="main_logo" />
      <div id="search_bar_and_logo">
        <input type="text" name="search" id="search" />
        <input
          type="image"
          src="images/search-logo.png"
          width="30px"
          height="30px"
          id="search_logo"
        />
      </div>

      <button id="sign_in">Sign in</button>

      <div id="shopping_cart">
        <img src="images/cart.png" alt="shopping cart image" width="50px" />
        <div>
          <p id="cart_size">0</p>
          <p>In Cart</p>
        </div>
      </div>
    </header>

    <nav id="navbar">
      <p><a href="#" id="home">Home</a></p>
      <p><a href="products_list_page/index.html">Best Sellers</a></p>
      <p><a href="products_list_page/index.html">New Releases</a></p>
      <p><a href="products_list_page/index.html">Genres</a></p>
      <p><a href="About_us/index.html">About us</a></p>
    </nav>

    <h2>Genres</h2>
    <main id="genres">
      <div class="genre">
        <img src="images/genres/fiction.jfif" width="120px" height="120px" />
        <p><a href="">Literature &amp; Fiction</a></p>
      </div>
      <div class="genre">
        <img src="images/genres/heart.png" width="120px" height="120px" />
        <p><a href="">Romance</a></p>
      </div>
      <div class="genre">
        <img src="images/genres/dollar.png" width="120px" height="120px" />
        <p><a href="">Business books</a></p>
      </div>
      <div class="genre">
        <img src="images/genres/children.png" width="120px" height="120px" />
        <p><a href="">Children</a></p>
      </div>
      <div class="genre">
        <img src="images/genres/dragon.png" width="120px" height="120px" />
        <p><a href="">Fantasy</a></p>
      </div>
      <div class="genre">
        <img src="images/genres/textbooks.jfif" width="120px" height="120px" />
        <p><a href="">Textbooks</a></p>
      </div>
      <div class="genre">
        <img src="images/genres/Auezov.jfif" width="120px" height="120px" />
        <p><a href="">Kazakh books</a></p>
      </div>
    </main>

    <article id="main_content">
      <nav id="side_bar">
        <div id="new_releases_div">
          <h3>New Releases</h3>
          <label>Last week</label><br />
          <label>Last 30 days</label><br />
        </div>
        <div id="author_div">
          <h3>Author</h3>
          <input id="napoleon" type="checkbox" /><label for="napoleon"
            >Napoleon Hill</label
          ><br />
          <input id="auezov" type="checkbox" /><label for="auezov"
            >Mukhtar Auezov</label
          ><br />
        </div>
        <div id="top_ratings_div">
          <h3>Top ratings</h3>
          <a href="#"
            ><img src="images/stars/5st.jfif" id="5st" width="100px" /><label
              for="5st"
              >Highly rated</label
            ></a
          ><br />
          <a href="#"
            ><img src="images/stars/4st.jfif" id="4st" width="100px" /><label
              for="4st"
              >4 stars</label
            ></a
          ><br />
          <a href="#"
            ><img src="images/stars/3st.jfif" id="3st" width="100px" /><label
              for="3st"
              >3 stars</label
            ></a
          ><br />
          <a href="#"
            ><img src="images/stars/2st.gif" id="2st" width="100px" /><label
              for="2st"
              >2 stars</label
            ></a
          ><br />
          <a href="#"
            ><img src="images/stars/1st.png" id="1st" width="100px" />
            <label for="1st">1 star</label></a
          ><br />
        </div>
        <div id="format_div">
          <h3>Format</h3>
          <input id="audiobook" type="checkbox" /><label for="audiobook"
            >Audiobook</label
          ><br />
          <input id="hardcover" type="checkbox" /><label for="hardcover"
            >Hardcover</label
          ><br />
          <input id="kindle" type="checkbox" /><label for="kindle"
            >Kindle eBooks</label
          ><br />
          <input id="paperback" type="checkbox" /><label for="paperback"
            >Paperback</label
          ><br />
        </div>
        <div id="price_div">
          <h3>Price</h3>
          <input id="under_1000" type="checkbox" /><label for="under_1000"
            >Under 1000tg</label
          ><br />
          <input id="1000_2000" type="checkbox" /><label for="1000_2000"
            >1000tg - 2000tg</label
          ><br />
          <input id="2000_3000" type="checkbox" /><label for="2000_3000"
            >2000tg - 3000tg</label
          ><br />
          <input id="over_3000" type="checkbox" /><label for="over_3000"
            >over 3000tg</label
          ><br />
          <input type="text" placeholder="Min" class="price_input" />
          <input type="text" placeholder="Max" class="price_input" />
          <button>Go</button>
        </div>
      </nav>

      <main id="books_list">
        <div class="item">
          <div class="item_title">
            <a href="product_page/index.html" style="color: black;">
            <img src="images/children/alice.jfif" class="image" />
            <p class="price">$99.9</p>
            <p class="title">Alice in the Wonderland</p>
            <img src="images/stars/3st.jfif" class="book_ratings" />
            <p class="discount">-21%</p>
            </a>
          </div>
          <button class="add_to_cart">Add to Cart</button>
        </div>
        <div class="item">
          <div class="item_title">
            <a href="product_page/index.html" style="color: black;">
            <img src="images/fantasy/got.jfif" class="image" />
            <p class="price">$99.9</p>
            <p class="title">Game of Thrones</p>
            <img src="images/stars/4st.jfif" alt="" class="book_ratings" />
            <p class="discount">-10%</p>
          </a>
          </div>
          <button class="add_to_cart">Add to Cart</button>
        </div>
        <div class="item">
          <div class="item_title">
            <a href="product_page/index.html" style="color: black;">
            <img src="images/fiction/Forrest_gump.jfif" class="image" />
            <p class="price">$99.9</p>
            <p class="title">Forrest Gump</p>
            <img src="images/stars/4st.jfif" alt="" class="book_ratings" />
            </a>
          </div>
          <button class="add_to_cart">Add to Cart</button>
        </div>
        <div class="item">
          <div class="item_title">
            <a href="product_page/index.html" style="color: black;">
            <img src="images/business/7_habits.jfif" class="image" />
            <p class="price with_discount">$99.9</p>
            <p class="title">7 Habits of Highly effective People</p>
            <img src="images/stars/5st.jfif" alt="" class="book_ratings" />
            <p class="discount">-10%</p>
          </a>
          </div>
          <button class="add_to_cart">Add to Cart</button>
        </div>
      </main>
    </article>

    <div id="back_to_top" onclick="backToTop()">Back to top</div>
    <footer>
      <div>
        <table>
          <tr>
            <th>About us</th>
            <th>Contact us</th>
          </tr>
          <tr>
            <td>
              <a
                href="https://github.com/MaratulyAli/WebProject"
                target="_blank"
                >My GitHub</a
              >
            </td>
            <td>
              <a
                href="https://www.facebook.com/profile.php?id=100012186792129"
                target="_blank"
                >Facebook</a
              >
            </td>
          </tr>
          <tr>
            <td></td>
            <td>
              <a href="https://t.me/maratuly_ali" target="_blank">Telegram</a>
            </td>
          </tr>
        </table>

        <select name="lang" id="switch_lang">
          <option value="EN">English</option>
          <option value="RU">Russian</option>
        </select>
      </div>
      <p>&copy; SDU 2019. All rights are not reserved.</p>
    </footer>
  </body>
</html>
