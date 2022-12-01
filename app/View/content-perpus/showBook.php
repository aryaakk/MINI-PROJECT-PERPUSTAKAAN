<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SHOW BOOK</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="<?= \Staditek\TH\App\Core\Router::url('/assets/css/styleShowBook.css')?>">
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
                        <li><a href="<?= \Staditek\TH\App\Core\Router::url('/dashboard')?>">Dashboard</a></li>
                        <li><a class="active" href="<?= \Staditek\TH\App\Core\Router::url('/ShowBuku')?>">Buku</a></li>
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
                        <span>Pages / <b>Show Book</b></span>
                    </div>
                    <div class="ket">
                        <span>Show Book</span>
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
                                    <a href="<?= \Staditek\TH\App\Core\Router::url('/ShowBuku')?>">SHOW</a>
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
                                    <a href="<?= \Staditek\TH\App\Core\Router::url('/AddBuku')?>">ADD</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="main-content">
                    <div class="wrapper">
                        <div class="header">
                            <span>BOOK DATA</span>
                        </div>
                        <table cellspacing="0">
                            <thead>
                                <tr>
                                    <th width="10">No</th>
                                    <th width="10">ISBN</th>
                                    <th width="200">BOOK TITLE</th>
                                    <th width="150">AUTHOR BOOK</th>
                                    <th width="140">MAX RENTAL(DAYS)</th>
                                    <th width="150">PRICE RENTAL</th>
                                    <th>ACTION</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                foreach($data['tampil_book'] as $key=>$book){
                                    $priceRent = $book->price_rent;
                                    $RentFormat = number_format($priceRent, 0,',','.');
                                    ?>
                                    <tr>
                                        <td><?= $key+1?></td>
                                        <td><?= $book->isbn?></td>
                                        <td><?= $book->book_title?></td>
                                        <td><?= $book->author?></td>
                                        <td><?= $book->max_rent?></td>
                                        <td><?= "Rp. ".$RentFormat?></td>
                                        <td>
                                            <a class="edit" href="<?= \Staditek\TH\App\Core\Router::url("/ShowEditBook/$book->book_id")?>">Edit</a>
                                            <a onclick="return confirm('YAKIN HAPUSS??')" class="hapus" href="<?= \Staditek\TH\App\Core\Router::url("/deleteBook/$book->book_id")?>">Hapus</a>
                                        </td>
                                    </tr>
                                    <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>      
        </div>
    </section>
</body>

</html>