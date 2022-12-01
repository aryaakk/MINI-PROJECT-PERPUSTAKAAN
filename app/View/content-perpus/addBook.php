<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADD BOOK</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="<?= \Staditek\TH\App\Core\Router::url('/assets/css/styleAddBook.css') ?>">
</head>

<body>
    <section id="content">
        <div class="wrapper-side">
            <div class="sidebar">
                <div class="header-side">
                    <p>LIBPUS</p>
                </div>
                <hr class="row-side">
                <div class="content-side">
                    <ul>
                        <li><a href="<?= \Staditek\TH\App\Core\Router::url('/dashboard') ?>">Dashboard</a></li>
                        <li><a class="active" href="<?= \Staditek\TH\App\Core\Router::url('/ShowBuku') ?>">Buku</a></li>
                        <li><a href="<?= \Staditek\TH\App\Core\Router::url('/ShowMember')?>">Member</a></li>
                        <li><a href="<?= \Staditek\TH\App\Core\Router::url('/ShowLibrarian')?>">Librarian</a></li>
                    </ul>
                </div>
                <div class="footer-side">
                    <a href="<?= \Staditek\TH\App\Core\Router::url('/Logout')?>">Logout</a>
                </div>
            </div>
        </div>
        <div class="main">
            <div class="header">
                <div class="brand">
                    <div class="head">
                        <span>Pages / <b>Add Book</b></span>
                    </div>
                    <div class="ket">
                        <span>Add Book</span>
                    </div>
                </div>
            </div>
            <div class="content">
                <div class="card-header">
                    <div class="card-show">
                        <div class="head">
                            <i class='bx bxs-book-content book'></i>
                            <div class="ket">
                                <p>SHOW BOOK</p>
                                <div class="butt">
                                    <a href="<?= \Staditek\TH\App\Core\Router::url('/ShowBuku') ?>">SHOW</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-add">
                        <div class="head">
                            <i class='bx bxs-bookmark-alt-plus borrowing'></i>
                            <div class="ket">
                                <p>ADD BOOK</p>
                                <div class="butt">
                                    <a href="<?= \Staditek\TH\App\Core\Router::url('/AddBuku') ?>">ADD</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="main-content">
                    <div class="wrapper">
                        <div class="header">
                            <span>ADD BOOK DATA</span>
                        </div>
                        <form action="<?= \Staditek\TH\App\Core\Router::url('/saveBook')?>" method="POST">
                            <div class="formGrup">
                                <label for="">BOOK ISBN</label>
                                <div class="form-inp">
                                    <input class="inp" required type="number" name="isbn" id="" placeholder="Enter BOOK ISBN">
                                </div>
                            </div>
                            <div class="formGrup">
                                <label for="">BOOK TITLE</label>
                                <div class="form-inp">
                                    <input class="inp" required type="text" name="title" id="" placeholder="Enter Book Title">
                                </div>
                            </div>
                            <div class="formGrup">
                                <label for="">AUTHOR BOOK</label>
                                <div class="form-inp">
                                    <input class="inp" required type="text" name="author" id="" placeholder="Enter The Author Book">
                                </div>
                            </div>
                            <div class="formGrup">
                                <label for="">RENTAL DAYS</label>
                                <div class="form-inp">
                                    <input class="inp" required type="number" name="rental" id="" placeholder="Enter Rental Max Days">
                                </div>
                            </div>
                            <div class="formGrup">
                                <label for="">PRICE RENTAL</label>
                                <div class="form-inp">
                                    <input class="inp" required type="text" name="price" id="" placeholder="Enter Price">
                                </div>
                            </div>
                            <div class="formButt">
                                <input class="sub" type="submit" name="" id="" value="Savee">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="<?= \Staditek\TH\App\Core\Router::url('/assets/js/main.js')?>"></script>
</body>

</html>