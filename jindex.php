<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News App</title>
    <link rel="stylesheet" href="jstyle.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>

<body>

    <nav>
        <div class="main-nav container flex">
            <a href="#" onclick="reload()" class="company-logo">
                <img src="cover2.png" alt="company logo">
            </a>
            <div class="nav-links">

                <ul class="flex">

                    <li class="hover-link nav-item" id="world cup" onclick="onNavItemClick('world cup')">WORLD Cup</li>
                    <li class="hover-link nav-item" id="finance" onclick="onNavItemClick('finance')">Finance</li>
                    <li class="hover-link nav-item" id="politics" onclick="onNavItemClick('politics')">Politics</li>

                </ul>

            </div>
            <div class="search-bar flex">
                <input id="search-text" type="text" class="news-input" placeholder="Search!">
                <button id="search-button" class="search-button">Search</button>
                <a class=pop href="register.php">SIGN UP<a />
                    <a href="login.php">SIGN IN<a />
            </div>

        </div>

     </nav>
    <!--
    <button id="openModalBtn" class="btn btn-primary">submit</button>

    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal Title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    This is the modal content.
                </div>
            </div>
        </div>
    </div> -->
    <main>
        <div class="cards-container container flex" id="cards-container">

        </div>
    </main>

    <template id="template-news-card">
        <div class="card">
            <div class="card-header">
                <img src="https://via.placeholder.com/400x200" alt="news-image" id="news-img">
            </div>
            <div class="card-content">
                <h3 id="news-title">This is the Title</h3>
                <h6 class="news-source" id="news-source">End Gadget 26/08/2023</h6>
                <p class="news-desc" id="news-desc">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Recusandae
                    saepe quis voluptatum quisquam vitae doloremque facilis molestias quae ratione cumque!</p>
            </div>
        </div>
    </template>

    <script src="jscript.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct"
        crossorigin="anonymous"></script>
    <script>
        $(document).ready(function () {
            // Get a reference to the button and modal
            const openModalBtn = document.getElementById('openModalBtn');
            const myModal = new bootstrap.Modal(document.getElementById('myModal'));

            // Add a click event listener to the button
            openModalBtn.addEventListener('click', function () {
                myModal.show();
            });

            // Automatically open the modal after 3 seconds using setTimeout
            setTimeout(function () {
                myModal.show();
            }, 5000); // 3000 milliseconds (3 seconds)
        });
    </script>
</body>

</html>






</script>
</body>

</html> 