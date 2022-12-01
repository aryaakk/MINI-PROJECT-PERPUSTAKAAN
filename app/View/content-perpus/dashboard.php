<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DASHBOARD LIBRARY</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="<?= \Staditek\TH\App\Core\Router::url('/assets/css/style.css')?>">
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
                        <li><a class="active" href="<?= \Staditek\TH\App\Core\Router::url('/dashboard')?>">Dashboard</a></li>
                        <li><a href="<?= \Staditek\TH\App\Core\Router::url('/ShowBuku')?>">Buku</a></li>
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
                        <span>Pages / <b>Dashboard</b></span>
                    </div>
                    <div class="ket">
                        <span>Dashboard</span>
                    </div>
                </div>
            </div>
            <div class="content">
                <div class="card-header">
                    <div class="card">
                        <div class="head">
                            <i class='bx bxs-group member'></i>
                            <div class="ket">
                                <p>Total Member</p>
                                <b><?= $data['hitung_member']?></b>
                            </div>
                        </div>
                        <hr class="row-card">
                        <div class="foot">
                            <i class='bx bx-time-five'></i>
                            <span>Update Last Days</span>
                        </div>
                    </div>
                    <div class="card">
                        <div class="head">
                            <i class='bx bxs-book-content book'></i>
                            <div class="ket">
                                <p>Total Book</p>
                                <b><?= $data['hitung_book']?></b>
                            </div>
                        </div>
                        <hr class="row-card">
                        <div class="foot">
                            <i class='bx bx-time-five'></i>
                            <span>Update Last Days</span>
                        </div>
                    </div>
                    <div class="card">
                        <div class="head">
                            <i class='bx bxs-bookmark-alt-plus borrowing'></i>
                            <div class="ket">
                                <p>Total Borrowing Book</p>
                                <b>10</b>
                            </div>
                        </div>
                        <hr class="row-card">
                        <div class="foot">
                            <i class='bx bx-time-five'></i>
                            <span>Update Last Days</span>
                        </div>
                    </div>
                    <div class="card">
                        <div class="head">
                            <i class='bx bxs-user-badge officer'></i>
                            <div class="ket">
                                <p>Total Officer Library</p>
                                <b><?= $data['hitung_officer']?></b>
                            </div>
                        </div>
                        <hr class="row-card">
                        <div class="foot">
                            <i class='bx bx-time-five'></i>
                            <span>Update Last Days</span>
                        </div>
                    </div>
                </div>
            </div>      
        </div>
    </section>
</body>

</html>