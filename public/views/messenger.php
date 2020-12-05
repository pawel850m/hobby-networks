<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="public/css/navigation.css">
    <script src="https://kit.fontawesome.com/c648cced1d.js" crossorigin="anonymous"></script>
    <title>MAIN PAGE</title>
</head>
<body>
    <header>
        <div class="left-items">
            <ul>
                <li><a href="#">B</a> </li>
                <li><a href="#"><i class="fas fa-toggle-off"></i></a></li>
            </ul>
        </div>
        <div class="add-bar">
            <button id="add-button"><i class="fas fa-plus-square"></i> add something interesting...</button>
        </div>
        <div class="right-items">
            <ul>
                <li><a href="#"><i class="far fa-bell"></i></a> </li>
                <li><a href="#"><i class="fas fa-user"></i></a></li>
            </ul>
        </div>
    </header>
    <div class="main-container">
        <section>
            <div class="up-items">
                <ul>
                    <li>
                        <a href=""><i class="fas fa-columns"></i></a>
                    </li>
                    <li>
                        <a href=""><i class="far fa-save"></i></a>
                    </li>
                </ul>
            </div>
            <div class="down-items">
                <ul>
                    <li>
                        <a href=""><i class="fas fa-shopping-cart"></i></a>
                    </li>
                    <li>
                        <a href=""><i class="fas fa-search"></i></a>
                    </li>
                    <li>
                        <a href=""><i class="fas fa-user-friends"></i></a>
                    </li>
                    <li>
                        <a href=""><i class="fab fa-facebook-messenger"></i></a>
                    </li>
                    <li>
                        <a href=""><i class="fas fa-cog"></i></a>
                    </li>
                </ul>
            </div>
        </section>
        <main>
            <div class="left-items">
                <div class="searchbar">
                    <form>
                        <input name="search-bar" type="text" placeholder="Search">
                        <button id="search"><a href=""><i class="fas fa-search"></i></a></button>
                    </form>
                </div>
                <div>
                    <ul>
                        <li>
                            <div class="user"><i class="fas fa-user-friends"></i></div>
                            <div class="content">
                                <div class="name">Name Surname</div>
                                <div class="message">Hello</div>
                                <div class="time">40 min ago</div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="right-items">
                <form>
                    <input name="data" type="text" placeholder="Type a message">
                    <button id="attachment"><a href=""><i class="fas fa-search"></i></a></button>
                    <button id="emoticon"><a href=""><i class="far fa-smile-wink"></i></a></button>
                    <button id="send"><a href=""><i class="fas fa-paper-plane"></i></a></button>
                </form>
            </div>
        </main>
    </div>
</body>
